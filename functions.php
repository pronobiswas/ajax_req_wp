<?php
// Enqueue styles and scripts
function child_enqueue_files() {
    // Parent and child theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));

    // Additional styles
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('login-custom', get_stylesheet_directory_uri() . '/assets/css/login.css');
    wp_enqueue_style('immigration-form-style', get_stylesheet_directory_uri() . '/assets/css/pronobStyle.css');
}
add_action('wp_enqueue_scripts', 'child_enqueue_files');


// Enqueue assets for the user dashboard
function enqueue_user_dashboard_assets() {
    if (is_page_template('user-dashboard.php')) {
        function theme_enqueue_scripts() {
            // CSS
            wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
            wp_enqueue_style('meteor', get_stylesheet_directory_uri() . '/assets/css/meteor.min.css');
            wp_enqueue_style('simple-line', get_stylesheet_directory_uri() . '/assets/plugins/line-icons/simple-line-icons.css');
            wp_enqueue_style('dark-layer', get_stylesheet_directory_uri() . '/assets/css/layers/dark-layer.css');
            wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/plugins/fontawesome/css/font-awesome.min.css');
            wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
        
            // JavaScript
            wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery'), null, true);
            wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
            wp_enqueue_script('waves', get_stylesheet_directory_uri() . '/assets/plugins/waves/waves.min.js', array('jquery'), null, true);
            wp_enqueue_script('meteor-js', get_stylesheet_directory_uri() . '/assets/js/meteor.min.js', array('jquery'), null, true);
        
            wp_enqueue_script('multistep-form', get_stylesheet_directory_uri() . '/assets/js/multistep-form.js', array('jquery'), null, true);
            wp_localize_script('multistep-form', 'ajax_object', array(
                'ajax_url' => admin_url('admin-ajax.php'),
            ));
        
            wp_enqueue_script('pronob-script', get_stylesheet_directory_uri() . '/assets/js/pronobScript.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('jspdf-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js', array(), '2.5.1', true);
        }
        add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
        
    }
}   
add_action('wp_enqueue_scripts', 'enqueue_user_dashboard_assets');

// Hide admin bar for subscribers
add_action('after_setup_theme', function () {
    if (current_user_can('subscriber')) {
        show_admin_bar(false);
    }
});


function redirect_subscriber_from_admin() {
    if (is_admin() && !defined('DOING_AJAX') && current_user_can('subscriber')) {
        wp_redirect(home_url('/user-dashboard/')); // Change this to your actual dashboard slug or URL
        exit;
    }
}
add_action('admin_init', 'redirect_subscriber_from_admin');


// Redirect non-logged-in users away from the dashboard
function restrict_dashboard_access() {
    if (is_page_template('user-dashboard.php') && !is_user_logged_in()) {
        wp_redirect(home_url('/user-login/'));
        exit;
    }
}
add_action('template_redirect', 'restrict_dashboard_access');

// Ensure logout redirects users correctly
function custom_logout_redirect() {
    wp_redirect(home_url('/user-login/')); 
    exit();
}

//-------------------------------------------      OUR CODE START HERE       ----------------------------------------------------------------------------------------
function enqueue_my_custom_js() {
    wp_enqueue_script(
        wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery'), null, true),
        wp_enqueue_script('pronob-script', get_stylesheet_directory_uri() . '/assets/js/pronobScript.js', array('jquery'), '1.0.0', true)
    );
}
add_action('wp_enqueue_scripts', 'enqueue_my_custom_js');

function custom_register_form_assets() {
    wp_enqueue_script('custom-register-script', get_stylesheet_directory_uri() . '/register.js', array('jquery'), null, true);
    wp_localize_script('custom-register-script', 'reg_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('register_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'custom_register_form_assets');

    
function create_registration_tables() {
    global $wpdb;
    $first_table = $wpdb->prefix . 'register1';
    $second_table = $wpdb->prefix . 'entryintous';
    $charset_collate = $wpdb->get_charset_collate();
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    $sql1 = "CREATE TABLE $first_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        full_name varchar(255) NOT NULL,
        other_name varchar(255) NOT NULL,
        mailing_address varchar(100) NOT NULL,
        city varchar(100) NOT NULL,
        zip_code varchar(255) NOT NULL,
        phone_number varchar(20),
        email_address varchar(250) NOT NULL,
        height varchar(250) NOT NULL,
        weight varchar(20) NOT NULL,
        date_of_birth varchar(100) NOT NULL,
        place_of_birth varchar(100) NOT NULL,
        country_of_citizenship varchar(100) NOT NULL,
        marital_status varchar(100) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    $sql2 = "CREATE TABLE $second_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        date_of_entry varchar(255) NOT NULL,
        how_to_enter varchar(255) NOT NULL,
        mailing_address varchar(100) NOT NULL,
        have_you_ever_left_the_US varchar(100) NOT NULL,
        reason_for_leaving varchar(255) NOT NULL,
        departure_date1 varchar(20),
        return_date1 varchar(250) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql1);
    dbDelta($sql2);
}
add_action('admin_init', 'create_registration_tables');

    
function custom_register_form_shortcode() {
    ob_start(); ?>
    <?php 
     include_once get_stylesheet_directory(). '/immigrationForm.php';
    ?>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_register_form', 'custom_register_form_shortcode');

    
function handle_register_form() {
    check_ajax_referer('register_nonce', 'nonce');

    global $wpdb;
    $table = $wpdb->prefix . 'register1';
    

    $data = [
        'full_name' => sanitize_text_field($_POST['full_name']),
        'other_name' => sanitize_text_field($_POST['other_name']),
        'mailing_address' => sanitize_text_field($_POST['mailing_address']),
        'city' => sanitize_text_field($_POST['city']),
        'zip_code' => sanitize_text_field($_POST['zip_code']),
        'phone_number' => sanitize_text_field($_POST['phone_number']),
        'email_address' => sanitize_email($_POST['email_address']),
        'height' => sanitize_text_field($_POST['height']),
        'weight' => sanitize_text_field($_POST['weight']),
        'date_of_birth' => sanitize_text_field($_POST['date_of_birth']),
        'place_of_birth' => sanitize_text_field($_POST['place_of_birth']),
        'country_of_citizenship' => sanitize_text_field($_POST['country_of_citizenship']),
        'marital_status' => sanitize_key($_POST['marital_status']),
    ];
    

    $inserted = $wpdb->insert($table, $data);
    

    if ($inserted) {
        wp_send_json_success('Registration successful!');
    } else {
        wp_send_json_error('Failed to register. Please try again.');
    }
}
add_action('wp_ajax_handle_register_form', 'handle_register_form');
add_action('wp_ajax_nopriv_handle_register_form', 'handle_register_form');



// ===save phase two====
function handle_phase_two() {
    check_ajax_referer('register_nonce', 'nonce');

    global $wpdb;
    $table2 = $wpdb->prefix . 'entryintous';

    $data2 = [
        'date_of_entry' => sanitize_text_field($_POST['date_of_entry']),
        'how_to_enter' => sanitize_text_field($_POST['how_to_enter']),
        'mailing_address' => sanitize_text_field($_POST['mailing_address']),
        'have_you_ever_left_the_US' => sanitize_text_field($_POST['have_you_ever_left_the_US']),
        'reason_for_leaving' => sanitize_text_field($_POST['reason_for_leaving']),
        'departure_date1' => sanitize_text_field($_POST['departure_date1']),
        'return_date1' => sanitize_text_field($_POST['return_date1']),
    ];

    $inserted = $wpdb->insert($table2, $data2);

    if ($inserted) {
        wp_send_json_success('Phase 2 saved successfully.');
    } else {
        wp_send_json_error('Failed to save Phase 2.');
    }
}
add_action('wp_ajax_save_phase_two', 'handle_phase_two');
add_action('wp_ajax_nopriv_save_phase_two', 'handle_phase_two');



// require files
require_once get_stylesheet_directory() . '/inc/multistep-form.php';
require_once get_stylesheet_directory() . '/inc/final-form-handler.php';
require_once get_stylesheet_directory() . '/inc/save-step.php';
require_once get_stylesheet_directory() . '/inc/shortcode.php';
require_once get_stylesheet_directory() . '/inc/helpers.php';
require_once get_stylesheet_directory() . '/inc/pdf-generator.php';

