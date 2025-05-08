
<?php
function handle_final_form_submission() {
    check_ajax_referer('multi_step_form_nonce', 'nonce');

    if (!is_user_logged_in()) {
        wp_send_json_error(['message' => 'User not logged in.']);
    }

    $user = wp_get_current_user(); // Get logged-in user details
    $user_email = $user->user_email; // Logged-in user's email
    $user_name = $user->display_name; // Logged-in user's name

    $user_id = $user->ID;
    $form_id = isset($_POST["form_id"]) ? intval($_POST["form_id"]) : 1;

    // Get form data
    $form_title = sanitize_text_field($_POST["form_title"]);
    $name = sanitize_text_field($_POST["name"]);
    $email = sanitize_email($_POST["email"]);
    $address = sanitize_textarea_field($_POST["address"]);
    $nid = sanitize_text_field($_POST["nid"]);
    $passport = sanitize_text_field($_POST["passport"]);

    // Store final form data
    $form_data = [
        "form_id" => $form_id,
        "form_title" => $form_title,
        "name" => $name,
        "email" => $email,
        "address" => $address,
        "nid" => $nid,
        "passport" => $passport,
        "submitted_at" => current_time('mysql'),
    ];

    update_user_meta($user_id, "multi_step_form_{$form_id}", $form_data);

    // Store submission history
    $submission_history = get_user_meta($user_id, 'submission_history', true);
    if (!$submission_history || !is_array($submission_history)) {
        $submission_history = [];
    }

    $submission_history[$form_id] = $form_data;
    update_user_meta($user_id, 'submission_history', $submission_history);

    // Send confirmation email to logged-in user
    $subject = "Your Form Submission Confirmation";
    $message = "
        <p>Dear {$user_name},</p>
        <p>Your form titled <strong>{$form_title}</strong> has been successfully submitted.</p>
        <p><strong>Submitted At:</strong> " . date('Y-m-d H:i:s') . "</p>
        <p><strong>Form Details:</strong></p>
        <ul>
            <li><strong>Name:</strong> {$name}</li>
            <li><strong>Email:</strong> {$email}</li>
            <li><strong>Address:</strong> {$address}</li>
            <li><strong>NID:</strong> {$nid}</li>
            <li><strong>Passport:</strong> {$passport}</li>
        </ul>
        <p>Thank you for your submission.</p>
    ";

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Your Website <no-reply@yourwebsite.com>',
    ];

    wp_mail($user_email, $subject, $message, $headers); // Send email to logged-in user

    // Return success response
    wp_send_json_success([
        'message' => 'Form submitted successfully! Confirmation email sent to your email.',
        'redirect' => home_url('/dashboard'),
    ]);
}

add_action('wp_ajax_submit_final_form', 'handle_final_form_submission');
add_action('wp_ajax_nopriv_submit_final_form', 'handle_final_form_submission');
