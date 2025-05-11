jQuery(document).ready(function($) {
    // Handle the form submission on button click
    $('#nextBtn1').on('click', function() {
        var formData = {
            full_name: $('#full_name').val(),
            other_name: $('#other_name').val(),
            mailing_address: $('#mailing_address').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            zip_code: $('#zip_code').val(),
            phone_number: $('#phone_number').val(),
            email_address: $('#email_address').val(),
            height: $('#Height').val(),
            weight: $('#Weight').val(),
            date_of_birth: $('#date_of_birth').val(),
            place_of_birth: $('#place_of_birth').val(),
            country_of_citizenship: $('#Country_of_Citizenship').val(),
            marital_status: $('#Marital_Status').val()
        };
        console.log("hi");
        return

        $.ajax({
            url: astraChildAjax.ajax_url,
            type: 'POST',
            data: {
                action: 'save_immigration_form_data',
                nonce: astraChildAjax.nonce,
                form_data: formData
            },
            success: function(response) {
                console.log(response);
                if (response.success) {
                    alert("Data saved successfully!");
                    
                } else {
                    alert("There was an error saving the data.");
                }
            },
            error: function(xhr, status, error) {
                console.error("Error: ", status, error); // Debugging: Log error info
                alert("An error occurred while saving the data.");
            }
        });
    });
});
