<?php


function create_registration_tables() {
    global $wpdb;
    $first_table = $wpdb->prefix . 'register1';
    $second_table = $wpdb->prefix . 'entryintous';
    $third_table = $wpdb->prefix . 'continuous_residence';
    $forth_table = $wpdb->prefix . 'employment_authorazition';
    $fifth_table = $wpdb->prefix . 'info_about_current_spouse';
    $sixth_table = $wpdb->prefix . 'info_about_prior_spouse';
    $charset_collate = $wpdb->get_charset_collate();
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    // =========personal information=========
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
    // ========entry into usa==========
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
    // ======continious residance in us=========
    $sql3 = "CREATE TABLE $third_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        isContinuousResidence varchar(255) NOT NULL,
        left_US varchar(255) NOT NULL,
        residence_address1 varchar(255) NOT NULL,
        from_date1 varchar(100) NOT NULL,
        to_date1 varchar(100) NOT NULL,
        address2 varchar(255) NOT NULL,
        from_date2 varchar(20),
        to_date2 varchar(250) NOT NULL,
        current_education_status varchar(250) NOT NULL,
        us_military varchar(250) NOT NULL,
        where_education_received varchar(250) NOT NULL,
        why_left_us varchar(250) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    // ======employment authoraizetion=========
    $sql4 = "CREATE TABLE $forth_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        current_annual_income varchar(255) NOT NULL,
        current_emloyer_name varchar(255) NOT NULL,
        current_emloyer_address varchar(255) NOT NULL,
        why_work_auth varchar(100) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    // ==========information about current spouse======
    $sql5 = "CREATE TABLE $fifth_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        spouse_name varchar(255) NOT NULL,
        cityzenship_of_spouse varchar(255) NOT NULL,
        current_address_of_spouse varchar(255) NOT NULL,
        spouseImmigration varchar(100) NOT NULL,
        spouse_aline_registration_number varchar(100) NOT NULL,
        spouse_birth_date varchar(100) NOT NULL,
        spouse_country_of_birth varchar(100) NOT NULL,
        spouse_earn_per_week varchar(100) NOT NULL,
        spouse_social_security_number varchar(100) NOT NULL,
        date_of_marriage varchar(100) NOT NULL,
        place_of_marriage varchar(100) NOT NULL,
        spouse_maiden_name varchar(100) NOT NULL,
        place_spouse_first_entered_us varchar(100) NOT NULL,
        date_spouse_first_entered_us varchar(100) NOT NULL,
        date_spouse_become_us_citizen varchar(100) NOT NULL,
        full_name_of_spouse_employer varchar(100) NOT NULL,
        full_address_of_spouse_employer varchar(100) NOT NULL,
        earning_per_week_of_spouse varchar(100) NOT NULL,
        type_of_work_preformed_by_spouse varchar(100) NOT NULL,
        start_of_employment varchar(100) NOT NULL,
        end_of_employment varchar(100) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    $sql6 = "CREATE TABLE $sixth_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        full_name_of_prior_spouse varchar(255) NOT NULL,
        date_prior_marrige_began varchar(255) NOT NULL,
        date_prior_marrige_ended varchar(255) NOT NULL,
        place_prior_marrige_ended varchar(100) NOT NULL,
        description_of_why_marrige_ended varchar(100) NOT NULL,
        full_name_of_prior_spouse1 varchar(100) NOT NULL,
        date_prior_marrige_began1 varchar(100) NOT NULL,
        date_prior_marrige_ended1 varchar(100) NOT NULL,
        place_prior_marrige_ended1 varchar(100) NOT NULL,
        description_of_why_marrige_ended1 varchar(100) NOT NULL,
        full_name_of_prior_spouse2 varchar(100) NOT NULL,
        date_prior_marrige_began2 varchar(100) NOT NULL,
        date_prior_marrige_ended2 varchar(100) NOT NULL,
        place_prior_marrige_ended2 varchar(100) NOT NULL,
        description_of_why_marrige_ended2 varchar(100) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql1);
    dbDelta($sql2);
    dbDelta($sql3);
    dbDelta($sql4);
    dbDelta($sql5);
    dbDelta($sql6);
    
}
add_action('admin_init', 'create_registration_tables');

?>