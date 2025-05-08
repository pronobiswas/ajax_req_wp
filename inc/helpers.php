<?php 
/**
 * helping file for custom develop
 */

//dashboard profile edit
function save_user_profile() {
    if (!is_user_logged_in()) {
        wp_send_json_error("You must be logged in.");
        return;
    }

    $user_id = get_current_user_id();

    // Update username
    if (!empty($_POST['username'])) {
        wp_update_user(array('ID' => $user_id, 'user_login' => sanitize_text_field($_POST['username'])));
    }

    // Update email
    if (!empty($_POST['email'])) {
        $email = sanitize_email($_POST['email']);
        if (!is_email($email)) {
            wp_send_json_error("Invalid email address.");
            return;
        }
        wp_update_user(array('ID' => $user_id, 'user_email' => $email));
    }

    // Handle profile image upload
    if (!empty($_FILES['profile_image']['name'])) {
        $uploaded_file = $_FILES['profile_image'];

        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploaded_file, $upload_overrides);

        if ($movefile && !isset($movefile['error'])) {
            update_user_meta($user_id, 'profile_image', $movefile['url']);
        } else {
            wp_send_json_error("Error uploading image.");
            return;
        }
    }

    wp_send_json_success("Profile updated successfully.");
}
add_action('wp_ajax_save_user_profile', 'save_user_profile');



// mail config
function custom_smtp_mail_config($phpmailer) {
    // SMTP settings for Gmail
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'jewelbdcalling@gmail.com'; 
    $phpmailer->Password = 'fgbwckbzosnumnrm'; 
    $phpmailer->SMTPSecure = 'tls'; 
    $phpmailer->From = 'jewelbdcalling@gmail.com';
    $phpmailer->FromName = 'cityzenPath';
}
add_action('phpmailer_init', 'custom_smtp_mail_config');

function send_test_email() {
    $to = 'jewelmm9@gmail.com'; // Replace with the recipient's email
    $subject = 'Test Email from WordPress';
    $message = 'I am successfully send mail :JEWEL';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    if (wp_mail($to, $subject, $message, $headers)) {
        echo 'Test email sent successfully!';
    } else {
        echo 'Failed to send test email.';
    }
}
//add_action('init', 'send_test_email');


