

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
        console.log(data6);
        
        $.ajax({
            url: reg_ajax.ajax_url,
            type: 'POST',
            data: data6,
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
});

