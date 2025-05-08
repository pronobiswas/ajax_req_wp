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
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
        wp_enqueue_style('meteor', get_stylesheet_directory_uri() . '/assets/css/meteor.min.css');
        wp_enqueue_style('simple-line', get_stylesheet_directory_uri() . '/assets/plugins/line-icons/simple-line-icons.css');
        wp_enqueue_style('dark-layer', get_stylesheet_directory_uri() . '/assets/css/layers/dark-layer.css');
        wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/plugins/fontawesome/css/font-awesome.min.css');

        // JavaScript files
        wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('waves', get_stylesheet_directory_uri() . '/assets/plugins/waves/waves.min.js', array('jquery'), null, true);
        wp_enqueue_script('meteor', get_stylesheet_directory_uri() . '/assets/js/meteor.min.js', array('jquery'), null, true);

        wp_enqueue_script('multistep-form', get_stylesheet_directory_uri() . '/assets/js/multistep-form.js', array('jquery'), null, true);
        wp_localize_script('multistep-form', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

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

// ########ptonob###########
// ########ptonob###########
// ########ptonob###########
function pronob_enqueue_scripts() {
    wp_enqueue_script(
        'pronob-script',
        get_stylesheet_directory_uri() . '/assets/js/pronobScript.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_localize_script('pronob-script', 'immigration_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'pronob_enqueue_scripts');

function create_user_form_table_once() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'personal_information';

    // Temporarily skip the option check for testing
    // if (get_option('user_form_table_created') !== 'yes') {
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id bigint(20) UNSIGNED NULL,  -- Ensure user_id is UNSIGNED
        full_name varchar(255) NULL,
        other_name varchar(255) NULL,
        mailing_address text NULL,
        city varchar(100) NULL,
        state varchar(100) NULL,
        zip_code varchar(20) NULL,
        phone_number varchar(20) NULL,
        email_address varchar(100) NULL,
        height varchar(10) NULL,
        weight varchar(10) NULL,
        date_of_birth date NULL,
        place_of_birth varchar(255) NULL,
        place_of_birth_detail text NULL,
        marital_status varchar(50) NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES {$wpdb->users}(ID) ON DELETE SET NULL
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

    update_option('user_form_table_created', 'yes'); // Update the option to prevent re-creating the table
}

// Enqueue the necessary script for AJAX handling
function astra_child_enqueue_scripts() {
    wp_enqueue_script('astra-child-ajax', get_stylesheet_directory_uri() . '/astra-child-ajax.js', array('jquery'), null, true);

    // Localize script to pass AJAX URL and nonce for security
    wp_localize_script('astra-child-ajax', 'astraChildAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('astra_child_nonce') // Security nonce
    ));
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_scripts');

// Handle the form data submission via AJAX
function save_immigration_form_data() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'astra_child_nonce')) {
        wp_send_json_error(['message' => 'Security check failed.']);
    }

    global $wpdb;

    // Extract form data from the POST request
    $form_data = $_POST['form_data'];
    $user_id = get_current_user_id(); // Or use other method to get user ID if needed

    // The name of your custom table
    $table_name = $wpdb->prefix . 'personal_information';

    // Insert the data into the table
    $wpdb->insert(
        $table_name,
        array(
            'user_id' => $user_id,
            'full_name' => sanitize_text_field($form_data['full_name']),
            'other_name' => sanitize_text_field($form_data['other_name']),
            'mailing_address' => sanitize_textarea_field($form_data['mailing_address']),
            'city' => sanitize_text_field($form_data['city']),
            'state' => sanitize_text_field($form_data['state']),
            'zip_code' => sanitize_text_field($form_data['zip_code']),
            'phone_number' => sanitize_text_field($form_data['phone_number']),
            'email_address' => sanitize_email($form_data['email_address']),
            'height' => sanitize_text_field($form_data['height']),
            'weight' => sanitize_text_field($form_data['weight']),
            'date_of_birth' => sanitize_text_field($form_data['date_of_birth']),
            'place_of_birth' => sanitize_text_field($form_data['place_of_birth']),
            'country_of_citizenship' => sanitize_text_field($form_data['country_of_citizenship']),
            'marital_status' => sanitize_text_field($form_data['marital_status']),
        )
    );

    if ($wpdb->insert_id) {
        wp_send_json_success(['message' => 'Data saved successfully!']);
    } else {
        wp_send_json_error(['message' => 'There was an error saving the data.']);
    }

    wp_die(); // Always call wp_die() to end AJAX requests properly
}

add_action('wp_ajax_save_immigration_form_data', 'save_immigration_form_data');
add_action('wp_ajax_nopriv_save_immigration_form_data', 'save_immigration_form_data'); // For non-logged-in users as well


// require files
require_once get_stylesheet_directory() . '/inc/multistep-form.php';
require_once get_stylesheet_directory() . '/inc/final-form-handler.php';
require_once get_stylesheet_directory() . '/inc/save-step.php';
require_once get_stylesheet_directory() . '/inc/shortcode.php';
require_once get_stylesheet_directory() . '/inc/helpers.php';
require_once get_stylesheet_directory() . '/inc/pdf-generator.php';

