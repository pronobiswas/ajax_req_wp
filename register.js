

// jQuery(document).ready(function ($) {
//     $('#cityzenPth_form').on('submit', function (e) {
//         e.preventDefault();

//         var form = $(this);
//         var data = new FormData(this);

//         data.append('action', 'handle_register_form');
//         data.append('nonce', reg_ajax.nonce);

        
//         for (var pair of data.entries()) {
//             console.log(pair[0] + ': ' + pair[1]);
//         }

//         $.ajax({
//             url: reg_ajax.ajax_url,
//             type: 'POST',
//             data: data,
//             contentType: false,
//             processData: false,
//             success: function (response) {
//                 if (response.success) {
//                     $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
//                     form[0].reset();
//                 } else {
//                     $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
//                 }
//             },
//             error: function () {
//                 $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
//             }
//         });
//     });
// });

// ===inharited code======


// ---------------  new try ----------------
jQuery(document).ready(function ($) {
    // =====first step start here=====11111111
    $('#nextBtn1').on('click', function () {
        // ======collect data from first phase======
        let data = {
            action: 'handle_register_form',
            nonce: reg_ajax.nonce,
            full_name: $('#full_name').val(),
            other_name: $('#other_name').val(),
            mailing_address: $('#mailing_address').val(),
            city: $('#city').val(),
            zip_code: $('#zip_code').val(),
            phone_number: $('#phone_number').val(),
            email_address: $('#email_address').val(),
            height: $('#height').val(), // case-sensitive
            weight: $('#weight').val(), // case-sensitive
            date_of_birth: $('#date_of_birth').val(),
            place_of_birth: $('#place_of_birth').val(),
            country_of_citizenship: $('#Country_of_Citizenship').val(),
            marital_status: $('#Marital_Status').val()
        };
        // =====validate those fild====
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data,
            success: function (response) {
                console.log(response);
                if (response.success) {
                    $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
                    $('#cityzenPth_form')[0].reset();
                    console.log("Data saved to DB successfully.");
                } else {
                    $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
                    console.log("Data saving failed.");
                }
            },
            error: function () {
                $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
                console.log("AJAX request failed.");
            }
        });
    });
    // =====second step start here=====222222
    $('#nextBtn2').on('click', function () {
        let data2 = {
            action: 'save_phase_two',
            nonce: reg_ajax.nonce,

            date_of_entry: $('#date_of_entry').val(),
            how_to_enter: $('#how_to_enter').val(),
            place_of_entry: $('#place_of_entry').val(),
            have_you_ever_left_the_US: $('#have_you_ever_left_the_US').val(),
            reason_for_leaving: $('#reason_for_leaving').val(),
            departure_date1: $('#departure_date1').val(),
            return_date1: $('#return_date1').val(),
            
        };
        
        
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data2,
            success: function (response) {
                console.log(response);
                if (response.success) {
                    $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
                    $('#cityzenPth_form')[0].reset();
                    console.log("Data saved to DB successfully.");
                } else {
                    $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
                    console.log("Data saving failed.");
                }
            },
            error: function (err) {
                $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
                console.log("AJAX request failed." ,err);
            }
        });
    });
    // =====third step start here=====33333333
    $('#nextBtn3').on('click', function () {
        let data3 = {
            action: 'save_phase_three',
            nonce: reg_ajax.nonce,

            isContinuousResidence: $('input[name="isContinuousResidence"]:checked').val(),
            left_US: $('input[name="left_US"]:checked').val(),
            residence_address1: $('#residence_address1').val(),
            from_date1: $('#from_date1').val(),
            to_date1: $('#to_date1').val(),
            address2: $('#address2').val(),
            from_date2: $('#from_date2').val(),
            to_date2: $('#to_date2').val(),
            current_education_status: $('#current_education_status').val(),
            us_military: $('#us_military').val(),
            where_education_received: $('#where_education_received').val(),
            why_left_us: $('#why_left_us').val(),
            
        };
        console.log(data3);
        
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data3,
            success: function (response) {
                console.log(response);
                if (response.success) {
                    $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
                    $('#cityzenPth_form')[0].reset();
                    console.log("Data saved to DB successfully.");
                } else {
                    $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
                    console.log("Data saving failed.");
                }
            },
            error: function (err) {
                $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
                console.log("AJAX request failed." ,err);
            }
        });
    });
    // =====fourth step start here=====4444444
    $('#nextBtn4').on('click', function () {
        console.log("Button 4 clicked!");
        
        let data4 = {
            action: 'save_phase_four',
            nonce: reg_ajax.nonce,
            current_annual_income: $('#current_annual_income').val(),
            current_emloyer_name: $('#current_emloyer_name').val(),
            current_emloyer_address: $('#current_emloyer_address').val(),
            why_work_auth: $('#why_work_auth').val(),
        };
        console.log(data4);
        
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data4,
            success: function (response) {
                console.log(response);
                if (response.success) {
                    $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
                    $('#cityzenPth_form')[0].reset();
                    console.log("Data saved to DB successfully.");
                } else {
                    $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
                    console.log("Data saving failed.");
                }
            },
            error: function (err) {
                $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
                console.log("AJAX request failed." ,err);
            }
        });
    });
    // =====fifth step start here=====55555
    $('#nextBtn5').on('click', function () {
        console.log("Button 5 clicked!");
        
        let data5 = {
            action: 'save_phase_five',
            nonce: reg_ajax.nonce,
            spouse_name: $('#spouse_name').val(),
            cityzenship_of_spouse: $('#cityzenship_of_spouse').val(),
            current_address_of_spouse: $('#current_address_of_spouse').val(),
            spouseImmigration: $('#spouseImmigration').val(),
            spouse_aline_registration_number: $('#spouse_aline_registration_number').val(),
            spouse_birth_date: $('#spouse_birth_date').val(),
            spouse_country_of_birth: $('#spouse_country_of_birth').val(),
            spouse_earn_per_week: $('#spouse_earn_per_week').val(),
            spouse_social_security_number: $('#spouse_social_security_number').val(),
            date_of_marriage: $('#date_of_marriage').val(),
            place_of_marriage: $('#place_of_marriage').val(),
            spouse_maiden_name: $('#spouse_maiden_name').val(),
            place_spouse_first_entered_us: $('#place_spouse_first_entered_us').val(),
            date_spouse_first_entered_us: $('#date_spouse_first_entered_us').val(),
            date_spouse_become_us_citizen: $('#date_spouse_become_us_citizen').val(),
            full_name_of_spouse_employer: $('#full_name_of_spouse_employer').val(),
            full_address_of_spouse_employer: $('#full_address_of_spouse_employer').val(),
            earning_per_week_of_spouse: $('#earning_per_week_of_spouse').val(),
            type_of_work_preformed_by_spouse: $('#type_of_work_preformed_by_spouse').val(),
            start_of_employment: $('#start_of_employment').val(),
            end_of_employment: $('#end_of_employment').val(),
        };
        console.log(data5);

        
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data5,
            success: function (response) {
                console.log(response);
                if (response.success) {
                    $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
                    $('#cityzenPth_form')[0].reset();
                    console.log("Data saved to DB successfully.");
                } else {
                    $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
                    console.log("Data saving failed.");
                }
            },
            error: function (err) {
                $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
                console.log("AJAX request failed." ,err);
            }
        });
    });
    // =====sixeth step start here=====55555
    $('#nextBtn6').on('click', function () {
        console.log("Button 6 clicked!");
        let isValidatePhase6 = "false"
        
        let data6 = {
            action: 'save_phase_six',
            nonce: reg_ajax.nonce,
            full_name_of_prior_spouse: $('#full_name_of_prior_spouse').val(),
            date_prior_marrige_began: $('#date_prior_marrige_began').val(),
            date_prior_marrige_ended: $('#date_prior_marrige_ended').val(),
            place_prior_marrige_ended: $('#place_prior_marrige_ended').val(),
            description_of_why_marrige_ended: $('#description_of_why_marrige_ended').val(),
            full_name_of_prior_spouse1: $('#full_name_of_prior_spouse1').val(),
            date_prior_marrige_began1: $('#date_prior_marrige_began1').val(),
            date_prior_marrige_ended1: $('#date_prior_marrige_ended1').val(),
            place_prior_marrige_ended1: $('#place_prior_marrige_ended1').val(),
            description_of_why_marrige_ended1: $('#description_of_why_marrige_ended1').val(),
            full_name_of_prior_spouse2: $('#full_name_of_prior_spouse2').val(),
            date_prior_marrige_began2: $('#date_prior_marrige_began2').val(),
            date_prior_marrige_ended2: $('#date_prior_marrige_ended2').val(),
            place_prior_marrige_ended2: $('#place_prior_marrige_ended2').val(),
            description_of_why_marrige_ended2: $('#description_of_why_marrige_ended2').val(),
            
        };
        if(!data6.full_name_of_prior_spouse || !data6.date_prior_marrige_began || !data6.date_prior_marrige_ended || !data6.place_prior_marrige_ended || !data6.description_of_why_marrige_ended){
            isValidatePhase6= "false";
        }else{isValidatePhase6= "true";}
        // ==sent_req==
        if(isValidatePhase6 == "true" && data6){
            sent_ajax_post_req(data6)
            
        }else{
            setTimeout(function(){
                console.log("data6");
                
            },400)
        }
        
        
    });
    // ====seventh step start here=====7777
    $('#nextBtn7').on('click', function () {
        console.log("Button 7 clicked!");
        let isValidatePhase7 = "false"
        
        let data7 = {
            action: 'save_phase_seven',
            nonce: reg_ajax.nonce,
            name_of_child: $('#name_of_child').val(),
            child_citizenship: $('#child_citizenship').val(),
            child_current_address: $('#child_current_address').val(),
            child_immigration_status: $('#child_immigration_status').val(),
            child_alien_registration_number: $('#child_alien_registration_number').val(),
            child_birth_date: $('#child_birth_date').val(),
            child_average_earnings: $('#child_average_earnings').val(),
            name_of_child1: $('#name_of_child1').val(),
            child_citizenship1: $('#child_citizenship1').val(),
            child_current_address1: $('#child_current_address1').val(),
            child_immigration_status1: $('#child_immigration_status1').val(),
            child_alien_registration_number1: $('#child_alien_registration_number1').val(),
            child_birth_date1: $('#child_birth_date1').val(),
            child_country_of_birth1: $('#child_country_of_birth1').val(),
            child_average_earnings1: $('#child_average_earnings1').val(),
        };
        
        if(!data7.name_of_child || !data7.child_citizenship || !data7.child_current_address || !data7.child_immigration_status || !data7.child_alien_registration_number || !data7.child_birth_date || !data7.child_average_earnings){
            isValidatePhase7= "false";
        }else{isValidatePhase7= "true";}
        // ==sent_req==
        if(isValidatePhase7 == "true" && data7){
            sent_ajax_post_req(data7)
        }else{
            setTimeout(function(){
                console.log("data7");
                
            },400)
        }
        
        
    });
    // ====eighth step start here=====8888--lived-in-us
    $('#nextBtn8').on('click', function () {
        console.log("Button 8 clicked!");
        let isValidatePhase8 = "false"
        
        let data8 = {
            action: 'save_phase_eight',
            nonce: reg_ajax.nonce,
            street_and_number: $('#street_and_number').val(),
            resided_from: $('#resided_from').val(),
            resided_to: $('#resided_to').val(),
            street_and_number1: $('#street_and_number1').val(),
            resided_from1: $('#resided_from1').val(),
            resided_to1: $('#resided_to1').val(),
            street_and_number2: $('#street_and_number2').val(),
            resided_from2: $('#resided_from2').val(),
            resided_to2: $('#resided_to2').val(),
            
        };
        
        if(!data8.street_and_number || !data8.resided_from || !data8.resided_to ){
            isValidatePhase8= "false";
        }else{isValidatePhase8= "true";}
        console.log(data8);
        console.log(isValidatePhase8);
        
        // ==sent_req==
        if(isValidatePhase8 == "true" && data8){
            sent_ajax_post_req(data8)
        }else{
            setTimeout(function(){
                console.log("data8");
                
            },400)
        }
        
        
    });
    // ====nineth step start here=====9999--emloynent
    $('#nextBtn9').on('click', function () {
        let isValidatePhase9 = "false"
        
        let data9 = {
            action: 'save_phase_nine',
            nonce: reg_ajax.nonce,
            full_name_of_employer: $('#full_name_of_employer').val(),
            full_address_of_employer: $('#full_address_of_employer').val(),
            earning_per_week: $('#earning_per_week').val(),
            type_of_work_preformed: $('#type_of_work_preformed').val(),
            start_of_employment_last_10_years: $('#start_of_employment_last_10_years').val(),
            end_of_employment_last_10_years: $('#end_of_employment_last_10_years').val(),
            full_name_of_employer1: $('#full_name_of_employer1').val(),
            full_address_of_employer1: $('#full_address_of_employer1').val(),
            earning_per_week1: $('#earning_per_week1').val(),
            type_of_work_preformed1: $('#type_of_work_preformed1').val(),
            start_of_employment_last_10_years1: $('#start_of_employment_last_10_years1').val(),
            end_of_employment_last_10_years1: $('#end_of_employment_last_10_years1').val(),
            full_name_of_employer2: $('#full_name_of_employer2').val(),
            full_address_of_employer2: $('#full_address_of_employer2').val(),
            earning_per_week2: $('#earning_per_week2').val(),
            type_of_work_preformed2: $('#type_of_work_preformed2').val(),
            start_of_employment_last_10_years2: $('#start_of_employment_last_10_years2').val(),
            end_of_employment_last_10_years2: $('#end_of_employment_last_10_years2').val(),
        };
        if(!data9.full_name_of_employer || !data9.full_address_of_employer || !data9.earning_per_week || !data9.type_of_work_preformed || !data9.start_of_employment_last_10_years || !data9.end_of_employment_last_10_years ){
            isValidatePhase9= "false";
        }else{isValidatePhase9= "true";}
        // ==sent_req==
        if(isValidatePhase9 == "true" && data9){
            sent_ajax_post_req(data9)
        }
        
    });
    // ====tennth step start here=====10--family
    $('#nextBtnSubmit').on('click', function () {
        let isValidatePhase10 = "false"
        
        let data10 = {
            action: 'save_phase_ten',
            nonce: reg_ajax.nonce,
            father_name: $('#father_name').val(),
            father_cityzen_of_what_country: $('#father_cityzen_of_what_country').val(),
            father_relationship_to_me: $('#father_relationship_to_me').val(),
            father_imigration_status: $('#father_imigration_status').val(),
            father_alien_registration_number: $('#father_alien_registration_number').val(),
            father_birth_date: $('#father_birth_date').val(),
            father_birth_country: $('#father_birth_country').val(),

            mother_name: $('#mother_name').val(),
            mother_relationship_to_me: $('#mother_relationship_to_me').val(),
            mother_cityzen_of_what_country: $('#mother_cityzen_of_what_country').val(),
            mother_imigration_status: $('#mother_imigration_status').val(),
            mother_alien_registration_number: $('#mother_alien_registration_number').val(),
            mother_birth_date: $('#mother_birth_date').val(),
            mother_birth_country: $('#mother_birth_country').val(),

            grandfather_name: $('#grandfather_name').val(),
            grandfather_cityzen_of_what_country: $('#grandfather_cityzen_of_what_country').val(),
            grandfather_relationship_to_me: $('#grandfather_relationship_to_me').val(),
            grandfather_imigration_status: $('#grandfather_imigration_status').val(),
            grandfather_alien_registration_number: $('#grandfather_alien_registration_number').val(),
            grandfather_birth_date: $('#grandfather_birth_date').val(),
            grandfather_birth_country: $('#grandfather_birth_country').val(),

            grandmother_name: $('#grandmother_name').val(),
            grandmother_cityzen_of_what_country: $('#grandmother_cityzen_of_what_country').val(),
            grandmother_relationship_to_me: $('#grandmother_relationship_to_me').val(),
            grandmother_imigration_status: $('#grandmother_imigration_status').val(),
            grandmother_alien_registration_number: $('#grandmother_alien_registration_number').val(),
            grandmother_birth_date: $('#grandmother_birth_date').val(),
            grandmother_birth_country: $('#grandmother_birth_country').val(),

            grandfather_name_mother_side: $('#grandfather_name_mother_side').val(),
            grandfather_cityzen_of_what_country_mother_side: $('#grandfather_cityzen_of_what_country_mother_side').val(),
            grandfather_relationship_to_me_mother_side: $('#grandfather_relationship_to_me_mother_side').val(),
            grandfather_imigration_status_mother_side: $('#grandfather_imigration_status_mother_side').val(),
            grandfather_alien_registration_number_mother_side: $('#grandfather_alien_registration_number_mother_side').val(),
            grandfather_birth_date_mother_side: $('#grandfather_birth_date_mother_side').val(),
            grandfather_birth_country_mother_side: $('#grandfather_birth_country_mother_side').val(),

            grandmother_name_mother_side: $('#grandmother_name_mother_side').val(),
            grandmother_cityzen_of_what_country_mother_side: $('#grandmother_cityzen_of_what_country_mother_side').val(),
            grandmother_relationship_to_me_mother_side: $('#grandmother_relationship_to_me_mother_side').val(),
            grandmother_imigration_status_mother_side: $('#grandmother_imigration_status_mother_side').val(),
            grandmother_alien_registration_number_mother_side: $('#grandmother_alien_registration_number_mother_side').val(),
            grandmother_birth_date_mother_side: $('#grandmother_birth_date_mother_side').val(),
            grandmother_birth_country_mother_side: $('#grandmother_birth_country_mother_side').val(),

            brother_name: $('#brother_name').val(),
            brother_cityzen_of_what_country: $('#brother_cityzen_of_what_country').val(),
            brother_relationship_to_me: $('#brother_relationship_to_me').val(),
            brother_imigration_status: $('#brother_imigration_status').val(),
            brother_alien_registration_number: $('#brother_alien_registration_number').val(),
            brother_birth_date: $('#brother_birth_date').val(),
            brother_birth_country: $('#brother_birth_country').val(),
        };
        
        if(!data10.father_name || !data10.father_cityzen_of_what_country || !data10.father_relationship_to_me || !data10.father_imigration_status || !data10.father_alien_registration_number || !data10.father_birth_date || !data10.father_birth_country || !data10.mother_name || !data10.mother_relationship_to_me || !data10.mother_cityzen_of_what_country || !data10.mother_imigration_status || !data10.mother_alien_registration_number || !data10.mother_birth_date || !data10.mother_birth_country){
            isValidatePhase10= "false";
        }else{isValidatePhase10= "true";}
        console.log("isValidatePhase10",isValidatePhase10);
        // ==sent_req==
        if(isValidatePhase10 == "true" && data10){
            console.log(data10);
            
            sent_ajax_post_req(data10)
        }else{
            setTimeout(function(){
                console.log("req jai ni");
                
            },500)
        }
        
    });
    // ====save data on database =======
    // ====save data on database =======
    function sent_ajax_post_req(data){
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data,
            success: function (response) {
                console.log(response);
                if (response.success) {
                    $('#register-message').html('<p style="color:green;">' + response.data + '</p>');
                    $('#cityzenPth_form')[0].reset();
                    console.log("Data saved to DB successfully.");
                } else {
                    $('#register-message').html('<p style="color:red;">' + response.data + '</p>');
                    console.log("Data saving failed.");
                }
            },
            error: function (err) {
                $('#register-message').html('<p style="color:red;">An error occurred. Please try again.</p>');
                console.log("AJAX request failed." ,err);
            }
        });
    }
});

// ====sent ajax request====
