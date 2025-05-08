<?php
//form every step save
function save_step_data() {
    if (!is_user_logged_in() || !isset($_POST['multi_step_nonce']) || !wp_verify_nonce($_POST['multi_step_nonce'], 'multi_step_form_nonce')) {
        wp_send_json_error(['message' => 'Security check failed']);
    }

    $user_id = get_current_user_id();
    
    $last_form_id = get_user_meta($user_id, 'multi_step_last_form_id', true);
    $form_id = isset($_POST['form_id']) && !empty($_POST['form_id']) 
               ? sanitize_text_field($_POST['form_id'])  
               : (($last_form_id) ? intval($last_form_id) + 1 : 1); // Start from 1 if none exist

    update_user_meta($user_id, 'multi_step_last_form_id', $form_id);

    $fields = ['form_title', 'name', 'email', 'address', 'nid', 'passport'];
    $is_complete = true;

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_user_meta($user_id, "multi_step_{$field}_{$form_id}", sanitize_text_field($_POST[$field]));
        }
    }
    
    if (!empty($_FILES['nidd']['name'])) {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        $file = $_FILES['nidd'];
        $upload_overrides = ['test_form' => false];

        $movefile = wp_handle_upload($file, $upload_overrides);

        if ($movefile && !isset($movefile['error'])) {
            update_user_meta($user_id, "multi_step_attachment_{$form_id}", $movefile['url']);
        } else {
            wp_send_json_error(['message' => 'File upload failed: ' . $movefile['error']]);
        }
    }

    foreach ($fields as $field) {
        if (empty(get_user_meta($user_id, "multi_step_{$field}_{$form_id}", true))) {
            $is_complete = false;
            break;
        }
    }

    update_user_meta($user_id, "multi_step_completed_{$form_id}", $is_complete ? '1' : '0');

    wp_send_json_success([
        'message' => $is_complete ? 'Form completed successfully!' : 'Step saved!',
        'completed' => $is_complete,
        'form_id' => $form_id,
        'uploaded_file' => get_user_meta($user_id, "multi_step_attachment_{$form_id}", true),
    ]);
}
add_action('wp_ajax_save_step_data', 'save_step_data');

//delete save form
function delete_user_form() {
    if (!is_user_logged_in() || !isset($_POST['form_id'])) {
        wp_send_json_error("Invalid request");
    }

    $user_id = get_current_user_id();
    $form_id = intval($_POST['form_id']);

    // Delete form-related user meta
    delete_user_meta($user_id, "multi_step_completed_{$form_id}");
    delete_user_meta($user_id, "multi_step_last_form_id", $form_id);

    wp_send_json_success();
}
add_action('wp_ajax_delete_user_form', 'delete_user_form');