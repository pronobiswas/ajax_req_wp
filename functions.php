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


function enqueue_pdf_script() {
    wp_enqueue_script('html2pdf', 'https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_pdf_script');

// =========include all from nessery things============
include_once get_stylesheet_directory().'/imigrationDB.php';
include_once get_stylesheet_directory().'/ajax_req_handeler.php';
// =========include all from nessery things============
function enqueue_my_custom_js() {
    wp_enqueue_script(
        wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery'), null, true),
        wp_enqueue_script('pronob-script', get_stylesheet_directory_uri() . '/assets/js/pronobScript.js', array('jquery'), '1.0.0', true),
        
    );
    wp_enqueue_script('jspdf-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js', array(), '2.5.1', true);
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

    
function custom_register_form_shortcode() {
    ob_start(); ?>
    <?php 
     include_once get_stylesheet_directory(). '/immigrationForm.php';
    ?>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_register_form', 'custom_register_form_shortcode');


// require files
require_once get_stylesheet_directory() . '/inc/multistep-form.php';
require_once get_stylesheet_directory() . '/inc/final-form-handler.php';
require_once get_stylesheet_directory() . '/inc/save-step.php';
require_once get_stylesheet_directory() . '/inc/shortcode.php';
require_once get_stylesheet_directory() . '/inc/helpers.php';
require_once get_stylesheet_directory() . '/inc/pdf-generator.php';

