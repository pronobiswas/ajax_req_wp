<?php
/* Template Name: User Login */
ob_start();
get_template_part('template-parts/login/header', 'login');

if (is_user_logged_in()) {
    // Prevent redirect loop if already on dashboard
    if (!is_page_template('user-dashboard.php')) {
        wp_safe_redirect(home_url('/dashboard'));
        exit;
    }
}

$error = '';
$user = null;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'user_login_action')) {
        $error = 'Security check failed. Please try again.';
    } else {
        $credentials = [
            'user_login'    => sanitize_text_field($_POST['username']),
            'user_password' => $_POST['password'],
            'remember'      => isset($_POST['remember']) && $_POST['remember'] === 'on'
        ];

        $user = wp_signon($credentials, false);

        if (is_wp_error($user)) {
            $error_codes = $user->get_error_codes();
            if (in_array('incorrect_password', $error_codes)) {
                $error = '<p style="color:red;">Incorrect password. Please try again.</p>';
            } elseif (in_array('invalid_username', $error_codes)) {
                $error = '<p style="color:red;">Invalid username or email. Please try again.</p>';
            } else {
                $error = '<p style="color:red;">Login failed. Please check your credentials and try again.</p>';
            }
        } else {
            // Set user session
            wp_set_current_user($user->ID);
            wp_set_auth_cookie($user->ID, $credentials['remember']);

            // Redirect based on user role
            if (in_array('subscriber', (array)$user->roles)) {
                wp_safe_redirect(home_url('/dashboard'));
            } else {
                wp_safe_redirect(admin_url());
            }
            exit;
        }
    }
}
?>
