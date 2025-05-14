<?php  

    // ===save phase one data=====
    function handle_register_form() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table = $wpdb->prefix . 'personal_info';
        
    
        $data = [
            'userId' => get_current_user_id(),
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
            'userId' => get_current_user_id(),
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
            'userId' => get_current_user_id(),
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
            'userId' => get_current_user_id(),
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
            'userId' => get_current_user_id(),
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

    // ===save phase six =====55555
    // ==========information about prior spouse======
    function handle_phase_six() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table6 = $wpdb->prefix . 'info_about_prior_spouse';
    
        $data6 = [
            'userId' => get_current_user_id(),
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


    // ===save phase seven =====7
    // ==========information about your children======
    function handle_phase_seven() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table7 = $wpdb->prefix . 'info_about_child';
    
        $data7 = [
            'userId' => get_current_user_id(),
            'name_of_child' => sanitize_text_field($_POST['name_of_child']),
            'child_citizenship' => sanitize_text_field($_POST['child_citizenship']),
            'child_current_address' => sanitize_text_field($_POST['child_current_address']),
            'child_immigration_status' => sanitize_text_field($_POST['child_immigration_status']),
            'child_alien_registration_number' => sanitize_text_field($_POST['child_alien_registration_number']),
            'child_birth_date' => sanitize_text_field($_POST['child_birth_date']),
            'child_average_earnings' => sanitize_text_field($_POST['child_average_earnings']),
            'name_of_child1' => sanitize_text_field($_POST['name_of_child1']),
            'child_citizenship1' => sanitize_text_field($_POST['child_citizenship1']),
            'child_current_address1' => sanitize_text_field($_POST['child_current_address1']),
            'child_immigration_status1' => sanitize_text_field($_POST['child_immigration_status1']),
            'child_alien_registration_number1' => sanitize_text_field($_POST['child_alien_registration_number1']),
            'child_birth_date1' => sanitize_text_field($_POST['child_birth_date1']),
            'child_country_of_birth1' => sanitize_text_field($_POST['child_country_of_birth1']),
            'child_average_earnings1' => sanitize_text_field($_POST['child_average_earnings1']),
        ];
    
        $inserted = $wpdb->insert($table7, $data7);
    
        if ($inserted) {
            wp_send_json_success('Phase 7 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 7.');
        }
    }
    add_action('wp_ajax_save_phase_seven', 'handle_phase_seven');
    add_action('wp_ajax_nopriv_save_phase_seven', 'handle_phase_seven');

        // ===save phase eight =====88888
    // ==========information about where lived being in usa======
    function handle_phase_eight() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table8 = $wpdb->prefix . 'info_where_lived_in_us';
    
        $data8 = [
            'userId' => get_current_user_id(),
            'street_and_number' => sanitize_text_field($_POST['street_and_number']),
            'resided_from' => sanitize_text_field($_POST['resided_from']),
            'resided_to' => sanitize_text_field($_POST['resided_to']),
            'street_and_number1' => sanitize_text_field($_POST['street_and_number1']),
            'resided_from1' => sanitize_text_field($_POST['resided_from1']),
            'resided_to1' => sanitize_text_field($_POST['resided_to1']),
            'street_and_number2' => sanitize_text_field($_POST['street_and_number2']),
            'resided_from2' => sanitize_text_field($_POST['resided_from2']),
            'resided_to2' => sanitize_text_field($_POST['resided_to2']),
        ];
    
        $inserted = $wpdb->insert($table8, $data8);
    
        if ($inserted) {
            wp_send_json_success('Phase 8 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 8.');
        }
    }
    add_action('wp_ajax_save_phase_eight', 'handle_phase_eight');
    add_action('wp_ajax_nopriv_save_phase_eight', 'handle_phase_eight');


            // ===save phase nine =====999
    // ==========information about employment last 10 years======
    function handle_phase_nine() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table9 = $wpdb->prefix . 'info_employment_last_10years';
    
        $data9 = [
            'userId' => get_current_user_id(),
            'full_name_of_employer' => sanitize_text_field($_POST['full_name_of_employer']),
            'full_address_of_employer' => sanitize_text_field($_POST['full_address_of_employer']),
            'earning_per_week' => sanitize_text_field($_POST['earning_per_week']),
            'type_of_work_preformed' => sanitize_text_field($_POST['type_of_work_preformed']),
            'start_of_employment_last_10_years' => sanitize_text_field($_POST['start_of_employment_last_10_years']),
            'end_of_employment_last_10_years' => sanitize_text_field($_POST['end_of_employment_last_10_years']),
            'full_name_of_employer1' => sanitize_text_field($_POST['full_name_of_employer1']),
            'full_address_of_employer1' => sanitize_text_field($_POST['full_address_of_employer1']),
            'earning_per_week1' => sanitize_text_field($_POST['earning_per_week1']),
            'type_of_work_preformed1' => sanitize_text_field($_POST['type_of_work_preformed1']),
            'start_of_employment_last_10_years1' => sanitize_text_field($_POST['start_of_employment_last_10_years1']),
            'end_of_employment_last_10_years1' => sanitize_text_field($_POST['end_of_employment_last_10_years1']),
            'full_name_of_employer2' => sanitize_text_field($_POST['full_name_of_employer2']),
            'full_address_of_employer2' => sanitize_text_field($_POST['full_address_of_employer2']),
            'earning_per_week2' => sanitize_text_field($_POST['earning_per_week2']),
            'type_of_work_preformed2' => sanitize_text_field($_POST['type_of_work_preformed2']),
            'start_of_employment_last_10_years2' => sanitize_text_field($_POST['start_of_employment_last_10_years2']),
            'end_of_employment_last_10_years2' => sanitize_text_field($_POST['end_of_employment_last_10_years2']),
        ];
    
        // Insert into database
        $inserted = $wpdb->insert($table9, $data9);
    
        if ($inserted) {
            wp_send_json_success('Phase 9 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 9.');
        }
    }
    
    add_action('wp_ajax_save_phase_nine', 'handle_phase_nine');
    add_action('wp_ajax_nopriv_save_phase_nine', 'handle_phase_nine');


                // ===save phase ten =====10
    // ==========information about family======
    function handle_phase_ten() {
        check_ajax_referer('register_nonce', 'nonce');
    
        global $wpdb;
        $table10 = $wpdb->prefix . 'info_about_family';
    
        $data10 = [
            'userId' => get_current_user_id(),
            'father_name' => sanitize_text_field($_POST['father_name']),
            'father_cityzen_of_what_country' => sanitize_text_field($_POST['father_cityzen_of_what_country']),
            'father_relationship_to_me' => sanitize_text_field($_POST['father_relationship_to_me']),
            'father_imigration_status' => sanitize_text_field($_POST['father_imigration_status']),
            'father_alien_registration_number' => sanitize_text_field($_POST['father_alien_registration_number']),
            'father_birth_date' => sanitize_text_field($_POST['father_birth_date']),
            'father_birth_country' => sanitize_text_field($_POST['father_birth_country']),

            'mother_name' => sanitize_text_field($_POST['mother_name']),
            'mother_relationship_to_me' => sanitize_text_field($_POST['mother_relationship_to_me']),
            'mother_cityzen_of_what_country' => sanitize_text_field($_POST['mother_cityzen_of_what_country']),
            'mother_imigration_status' => sanitize_text_field($_POST['mother_imigration_status']),
            'mother_alien_registration_number' => sanitize_text_field($_POST['mother_alien_registration_number']),
            'mother_birth_date' => sanitize_text_field($_POST['mother_birth_date']),
            'mother_birth_country' => sanitize_text_field($_POST['mother_birth_country']),

            'grandfather_name' => sanitize_text_field($_POST['grandfather_name']),
            'grandfather_cityzen_of_what_country' => sanitize_text_field($_POST['grandfather_cityzen_of_what_country']),
            'grandfather_relationship_to_me' => sanitize_text_field($_POST['grandfather_relationship_to_me']),
            'grandfather_imigration_status' => sanitize_text_field($_POST['grandfather_imigration_status']),
            'grandfather_alien_registration_number' => sanitize_text_field($_POST['grandfather_alien_registration_number']),
            'grandfather_birth_date' => sanitize_text_field($_POST['grandfather_birth_date']),
            'grandfather_birth_country' => sanitize_text_field($_POST['grandfather_birth_country']),

            'grandmother_name' => sanitize_text_field($_POST['grandmother_name']),
            'grandmother_cityzen_of_what_country' => sanitize_text_field($_POST['grandmother_cityzen_of_what_country']),
            'grandmother_relationship_to_me' => sanitize_text_field($_POST['grandmother_relationship_to_me']),
            'grandmother_imigration_status' => sanitize_text_field($_POST['grandmother_imigration_status']),
            'grandmother_alien_registration_number' => sanitize_text_field($_POST['grandmother_alien_registration_number']),
            'grandmother_birth_date' => sanitize_text_field($_POST['grandmother_birth_date']),
            'grandmother_birth_country' => sanitize_text_field($_POST['grandmother_birth_country']),

            'grandfather_name_mother_side' => sanitize_text_field($_POST['grandfather_name_mother_side']),
            'grandfather_cityzen_of_what_country_mother_side' => sanitize_text_field($_POST['grandfather_cityzen_of_what_country_mother_side']),
            'grandfather_relationship_to_me_mother_side' => sanitize_text_field($_POST['grandfather_relationship_to_me_mother_side']),
            'grandfather_imigration_status_mother_side' => sanitize_text_field($_POST['grandfather_imigration_status_mother_side']),
            'grandfather_alien_registration_number_mother_side' => sanitize_text_field($_POST['grandfather_alien_registration_number_mother_side']),
            'grandfather_birth_date_mother_side' => sanitize_text_field($_POST['grandfather_birth_date_mother_side']),
            'grandfather_birth_country_mother_side' => sanitize_text_field($_POST['grandfather_birth_country_mother_side']),

            'grandmother_name_mother_side' => sanitize_text_field($_POST['grandmother_name_mother_side']),
            'grandmother_cityzen_of_what_country_mother_side' => sanitize_text_field($_POST['grandmother_cityzen_of_what_country_mother_side']),
            'grandmother_relationship_to_me_mother_side' => sanitize_text_field($_POST['grandmother_relationship_to_me_mother_side']),
            'grandmother_imigration_status_mother_side' => sanitize_text_field($_POST['grandmother_imigration_status_mother_side']),
            'grandmother_alien_registration_number_mother_side' => sanitize_text_field($_POST['grandmother_alien_registration_number_mother_side']),
            'grandmother_birth_date_mother_side' => sanitize_text_field($_POST['grandmother_birth_date_mother_side']),
            'grandmother_birth_country_mother_side' => sanitize_text_field($_POST['grandmother_birth_country_mother_side']),

            'brother_name' => sanitize_text_field($_POST['brother_name']),
            'brother_cityzen_of_what_country' => sanitize_text_field($_POST['brother_cityzen_of_what_country']),
            'brother_relationship_to_me' => sanitize_text_field($_POST['brother_relationship_to_me']),
            'brother_imigration_status' => sanitize_text_field($_POST['brother_imigration_status']),
            'brother_alien_registration_number' => sanitize_text_field($_POST['brother_alien_registration_number']),
            'brother_birth_date' => sanitize_text_field($_POST['brother_birth_date']),
            'brother_birth_country' => sanitize_text_field($_POST['brother_birth_country'])

        ];
    
        // Insert into database
        $inserted = $wpdb->insert($table10, $data10);
    
        if ($inserted) {
            wp_send_json_success('Phase 10 saved successfully.');
        } else {
            wp_send_json_error('Failed to save Phase 10.');
        }
    }
    
    add_action('wp_ajax_save_phase_ten', 'handle_phase_ten');
    add_action('wp_ajax_nopriv_save_phase_ten', 'handle_phase_ten');
    
    








?>