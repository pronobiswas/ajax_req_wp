<?php


function create_registration_tables() {
    global $wpdb;
    $first_table = $wpdb->prefix . 'register1';
    $second_table = $wpdb->prefix . 'entryintous';
    $third_table = $wpdb->prefix . 'continuous_residence';
    $forth_table = $wpdb->prefix . 'employment_authorazition';
    $fifth_table = $wpdb->prefix . 'info_about_current_spouse';
    $sixth_table = $wpdb->prefix . 'info_about_prior_spouse';
    $seventh_table = $wpdb->prefix . 'info_about_child';
    $eighth_table = $wpdb->prefix . 'info_where_lived_in_us';
    $nineth_table = $wpdb->prefix . 'info_employment_last_10years';
    $tenth_table = $wpdb->prefix . 'info_about_family';
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
    // ====information about prior spouse===
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
     $sql7 = "CREATE TABLE $seventh_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name_of_child varchar(255) NOT NULL,
        child_citizenship varchar(255) NOT NULL,
        child_current_address varchar(255) NOT NULL,
        child_immigration_status varchar(255) NOT NULL,
        child_alien_registration_number varchar(255) NOT NULL,
        child_birth_date varchar(255) NOT NULL,
        child_average_earnings varchar(255) NOT NULL,
        name_of_child1 varchar(255) NOT NULL,
        child_citizenship1 varchar(255) NOT NULL,
        child_current_address1 varchar(255) NOT NULL,
        child_immigration_status1 varchar(255) NOT NULL,
        child_alien_registration_number1 varchar(255) NOT NULL,
        child_birth_date1 varchar(255) NOT NULL,
        child_country_of_birth1 varchar(255) NOT NULL,
        child_average_earnings1 varchar(255) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    $sql8 = "CREATE TABLE $eighth_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        street_and_number varchar(255) NOT NULL,
        resided_from varchar(255) NOT NULL,
        resided_to varchar(255) NOT NULL,
        street_and_number1 varchar(255) NOT NULL,
        resided_from1 varchar(255) NOT NULL,
        resided_to1 varchar(255) NOT NULL,
        street_and_number2 varchar(255) NOT NULL,
        resided_from2 varchar(255) NOT NULL,
        resided_to2 varchar(255) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    $sql9 = "CREATE TABLE $nineth_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        full_name_of_employer varchar(255) NOT NULL,
        full_address_of_employer varchar(255) NOT NULL,
        earning_per_week varchar(255) NOT NULL,
        type_of_work_preformed varchar(255) NOT NULL,
        start_of_employment_last_10_years varchar(255) NOT NULL,
        end_of_employment_last_10_years varchar(255) NOT NULL,
        full_name_of_employer1 varchar(255) NOT NULL,
        full_address_of_employer1 varchar(255) NOT NULL,
        earning_per_week1 varchar(255) NOT NULL,
        type_of_work_preformed1 varchar(255) NOT NULL,
        start_of_employment_last_10_years1 varchar(255) NOT NULL,
        end_of_employment_last_10_years1 varchar(255) NOT NULL,
        full_name_of_employer2 varchar(255) NOT NULL,
        full_address_of_employer2 varchar(255) NOT NULL,
        earning_per_week2 varchar(255) NOT NULL,
        type_of_work_preformed2 varchar(255) NOT NULL,
        start_of_employment_last_10_years2 varchar(255) NOT NULL,
        end_of_employment_last_10_years2 varchar(255) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    $sql10 = "CREATE TABLE $tenth_table (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        father_name varchar(255) NOT NULL,
        father_cityzen_of_what_country varchar(255) NOT NULL,
        father_relationship_to_me varchar(255) NOT NULL,
        father_imigration_status varchar(255) NOT NULL,
        father_alien_registration_number varchar(255) NOT NULL,
        father_birth_date varchar(255) NOT NULL,
        father_birth_country varchar(255) NOT NULL,
        mother_name varchar(255) NOT NULL,
        mother_relationship_to_me varchar(255) NOT NULL,
        mother_cityzen_of_what_country varchar(255) NOT NULL,
        mother_imigration_status varchar(255) NOT NULL,
        mother_alien_registration_number varchar(255) NOT NULL,
        mother_birth_date varchar(255) NOT NULL,
        mother_birth_country varchar(255) NOT NULL,
        grandfather_name varchar(255) NOT NULL,
        grandfather_cityzen_of_what_country varchar(255) NOT NULL,
        grandfather_relationship_to_me varchar(255) NOT NULL,
        grandfather_imigration_status varchar(255) NOT NULL,
        grandfather_alien_registration_number varchar(255) NOT NULL,
        grandfather_birth_date varchar(255) NOT NULL,
        grandfather_birth_country varchar(255) NOT NULL,
        grandmother_name varchar(255) NOT NULL,
        grandmother_cityzen_of_what_country varchar(255) NOT NULL,
        grandmother_relationship_to_me varchar(255) NOT NULL,
        grandmother_imigration_status varchar(255) NOT NULL,
        grandmother_alien_registration_number varchar(255) NOT NULL,
        grandmother_birth_date varchar(255) NOT NULL,
        grandmother_birth_country varchar(255) NOT NULL,
        grandfather_name_mother_side varchar(255) NOT NULL,
        grandfather_cityzen_of_what_country_mother_side varchar(255) NOT NULL,
        grandfather_relationship_to_me_mother_side varchar(255) NOT NULL,
        grandfather_imigration_status_mother_side varchar(255) NOT NULL,
        grandfather_alien_registration_number_mother_side varchar(255) NOT NULL,
        grandfather_birth_date_mother_side varchar(255) NOT NULL,
        grandfather_birth_country_mother_side varchar(255) NOT NULL,
        grandmother_name_mother_side varchar(255) NOT NULL,
        grandmother_relationship_to_me_mother_side varchar(255) NOT NULL,
        grandmother_alien_registration_number_mother_side varchar(255) NOT NULL,
        grandmother_birth_date_mother_side varchar(255) NOT NULL,
        grandmother_birth_country_mother_side varchar(255) NOT NULL,
        brother_name varchar(255) NOT NULL,
        brother_cityzen_of_what_country varchar(255) NOT NULL,
        brother_relationship_to_me varchar(255) NOT NULL,
        brother_imigration_status varchar(255) NOT NULL,
        brother_alien_registration_number varchar(255) NOT NULL,
        brother_birth_date varchar(255) NOT NULL,
        brother_birth_country varchar(255) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    

    dbDelta($sql1);
    dbDelta($sql2);
    dbDelta($sql3);
    dbDelta($sql4);
    dbDelta($sql5);
    dbDelta($sql6);
    dbDelta($sql7);
    dbDelta($sql8);
    dbDelta($sql9);
    dbDelta($sql10);
    
}
add_action('admin_init', 'create_registration_tables');

?>