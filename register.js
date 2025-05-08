

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
    // =====first step start here=====
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
    // =====second step start here=====
    $('#nextBtn2').on('click', function () {
        console.log("Button 2 clicked!");
        
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
});

