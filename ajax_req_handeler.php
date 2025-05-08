<?php  

    // ===save phase one data=====
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
    
    // ===save phase two====222
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
    
    
    // ===save phase three =====333
    function handle_phase_three() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table3 = $wpdb->prefix . 'continuous_residence';
    
        $data3 = [
            'isContinuousResidence' => sanitize_text_field($_POST['isContinuousResidence']),
            'left_US' => sanitize_text_field($_POST['left_US']),
            'residence_address1' => sanitize_text_field($_POST['residence_address1']),
            'from_date1' => sanitize_text_field($_POST['from_date1']),
            'to_date1' => sanitize_text_field($_POST['to_date1']),
            'address2' => sanitize_text_field($_POST['address2']),
            'from_date2' => sanitize_text_field($_POST['from_date2']),
            'to_date2' => sanitize_text_field($_POST['to_date2']),
            'current_education_status' => sanitize_text_field($_POST['current_education_status']),
            'us_military' => sanitize_text_field($_POST['us_military']),
            'where_education_received' => sanitize_text_field($_POST['where_education_received']),
            'why_left_us' => sanitize_text_field($_POST['why_left_us']),
        ];
    
        $inserted = $wpdb->insert($table3, $data3);
    
        if ($inserted) {
            wp_send_json_success('Phase 3 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 3.');
        }
    }
    add_action('wp_ajax_save_phase_three', 'handle_phase_three');
    add_action('wp_ajax_nopriv_save_phase_three', 'handle_phase_three');
    
    // ===save phase four =====444
    function handle_phase_four() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table4 = $wpdb->prefix . 'employment_authorazition';
    
        $data4 = [
            'current_annual_income' => sanitize_text_field($_POST['current_annual_income']),
            'current_emloyer_name' => sanitize_text_field($_POST['current_emloyer_name']),
            'current_emloyer_address' => sanitize_text_field($_POST['current_emloyer_address']),
            'why_work_auth' => sanitize_text_field($_POST['why_work_auth']),
        ];
    
        $inserted = $wpdb->insert($table4, $data4);
    
        if ($inserted) {
            wp_send_json_success('Phase 4 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 4.');
        }
    }
    add_action('wp_ajax_save_phase_four', 'handle_phase_four');
    add_action('wp_ajax_nopriv_save_phase_four', 'handle_phase_four');
    
    // ===save phase five =====55555
    // ==========information about current spouse======
    function handle_phase_five() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table5 = $wpdb->prefix . 'info_about_current_spouse';
    
        $data5 = [
            'spouse_name' => sanitize_text_field($_POST['spouse_name']),
            'cityzenship_of_spouse' => sanitize_text_field($_POST['cityzenship_of_spouse']),
            'current_address_of_spouse' => sanitize_text_field($_POST['current_address_of_spouse']),
            'spouseImmigration' => sanitize_text_field($_POST['spouseImmigration']),
            'spouse_aline_registration_number' => sanitize_text_field($_POST['spouse_aline_registration_number']),
            'spouse_birth_date' => sanitize_text_field($_POST['spouse_birth_date']),
            'spouse_country_of_birth' => sanitize_text_field($_POST['spouse_country_of_birth']),
            'spouse_earn_per_week' => sanitize_text_field($_POST['spouse_earn_per_week']),
            'spouse_social_security_number' => sanitize_text_field($_POST['spouse_social_security_number']),
            'date_of_marriage' => sanitize_text_field($_POST['date_of_marriage']),
            'place_of_marriage' => sanitize_text_field($_POST['place_of_marriage']),
            'spouse_maiden_name' => sanitize_text_field($_POST['spouse_maiden_name']),
            'place_spouse_first_entered_us' => sanitize_text_field($_POST['place_spouse_first_entered_us']),
            'date_spouse_first_entered_us' => sanitize_text_field($_POST['date_spouse_first_entered_us']),
            'date_spouse_become_us_citizen' => sanitize_text_field($_POST['date_spouse_become_us_citizen']),
            'full_name_of_spouse_employer' => sanitize_text_field($_POST['full_name_of_spouse_employer']),
            'full_address_of_spouse_employer' => sanitize_text_field($_POST['full_address_of_spouse_employer']),
            'earning_per_week_of_spouse' => sanitize_text_field($_POST['earning_per_week_of_spouse']),
            'type_of_work_preformed_by_spouse' => sanitize_text_field($_POST['type_of_work_preformed_by_spouse']),
            'start_of_employment' => sanitize_text_field($_POST['start_of_employment']),
            'end_of_employment' => sanitize_text_field($_POST['end_of_employment']),
            
        ];
    
        $inserted = $wpdb->insert($table5, $data5);
    
        if ($inserted) {
            wp_send_json_success('Phase 5 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 5.');
        }
    }
    add_action('wp_ajax_save_phase_five', 'handle_phase_five');
    add_action('wp_ajax_nopriv_save_phase_five', 'handle_phase_five');

        // ===save phase five =====55555
    // ==========information about current spouse======
    function handle_phase_six() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table6 = $wpdb->prefix . 'info_about_prior_spouse';
    
        $data6 = [
            'full_name_of_prior_spouse' => sanitize_text_field($_POST['full_name_of_prior_spouse']),
            'date_prior_marrige_began' => sanitize_text_field($_POST['date_prior_marrige_began']),
            'date_prior_marrige_ended' => sanitize_text_field($_POST['date_prior_marrige_ended']),
            'place_prior_marrige_ended' => sanitize_text_field($_POST['place_prior_marrige_ended']),
            'description_of_why_marrige_ended' => sanitize_text_field($_POST['description_of_why_marrige_ended']),
            'full_name_of_prior_spouse1' => sanitize_text_field($_POST['full_name_of_prior_spouse1']),
            'date_prior_marrige_began1' => sanitize_text_field($_POST['date_prior_marrige_began1']),
            'date_prior_marrige_ended1' => sanitize_text_field($_POST['date_prior_marrige_ended1']),
            'place_prior_marrige_ended1' => sanitize_text_field($_POST['place_prior_marrige_ended1']),
            'description_of_why_marrige_ended1' => sanitize_text_field($_POST['description_of_why_marrige_ended1']),
            'full_name_of_prior_spouse2' => sanitize_text_field($_POST['full_name_of_prior_spouse2']),
            'date_prior_marrige_began2' => sanitize_text_field($_POST['date_prior_marrige_began2']),
            'date_prior_marrige_ended2' => sanitize_text_field($_POST['date_prior_marrige_ended2']),
            'place_prior_marrige_ended2' => sanitize_text_field($_POST['place_prior_marrige_ended2']),
            'description_of_why_marrige_ended2' => sanitize_text_field($_POST['description_of_why_marrige_ended2']),
            
            
        ];
    
        $inserted = $wpdb->insert($table6, $data6);
    
        if ($inserted) {
            wp_send_json_success('Phase 6 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 6.');
        }
    }
    add_action('wp_ajax_save_phase_six', 'handle_phase_six');
    add_action('wp_ajax_nopriv_save_phase_six', 'handle_phase_six');
    
    








?>