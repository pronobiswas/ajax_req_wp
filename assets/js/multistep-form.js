jQuery(document).ready(function ($) {
    let currentStep = 1;
    
    function showStep(step) {
        $(".step").hide();
        $(".step-" + step).show();
    }

    function saveStepData(step, moveNext = false) {
        let formData = new FormData();
        formData.append("action", "save_step_data");
        formData.append("step", step);
        formData.append("multi_step_nonce", $("#multi_step_nonce").val());
        formData.append("form_id", $("#form_id").val());
        formData.append("form_title", $("#form_title").val());
        formData.append("name", $("#name").val());
        formData.append("email", $("#email").val());
        formData.append("address", $("#address").val());
        formData.append("nid", $("#nid").val());
        formData.append("passport", $("#passport").val());

        // Handle file upload for Step 2
        let fileInput = $("#attachment")[0];
        if (fileInput.files.length > 0) {
            formData.append("nidd", fileInput.files[0]); 
        }

        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: formData,
            processData: false, // Important for file upload
            contentType: false,  // Important for file upload
            success: function (response) {
                console.log(response);
                if (moveNext) {
                    currentStep++;
                    showStep(currentStep);
                }
            },
            error: function () {
                alert("Error saving data.");
            }
        });
    }

    $(".next-step").click(function () {
        let step = $(this).data("step");
        saveStepData(step, true);
    });

    $(".prev-step").click(function () {
        currentStep--;
        showStep(currentStep);
    });

    $(".save-progress").click(function () {
        let step = $(this).data("step");
        saveStepData(step, false);
        alert("Progress saved!");
    });

    $("#generatePdf").click(function () {
        let formID = $("#form_id").val();
        window.location.href = ajax_object.ajax_url + "?action=generate_pdf&form_id=" + formID;
    });

    showStep(currentStep);
});


jQuery(document).ready(function($) {
    $(".delete-form").click(function(e) {
        e.preventDefault();
        
        if (!confirm("Are you sure you want to delete this form?")) {
            return;
        }

        var formID = $(this).data("form-id");
        var button = $(this);

        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: {
                action: "delete_user_form",
                form_id: formID,
            },
            success: function(response) {
                if (response.success) {
                    alert("Form deleted successfully!");
                    button.closest("tr").remove();
                } else {
                    alert("Failed to delete form. Try again!");
                }
            }
        });
    });
});

//attachement upload

jQuery(document).ready(function ($) {
    $("#attachment").on("change", function () {
        let attachmentBox = $(".attachment-box");
        attachmentBox.html(""); 

        if (this.files.length > 0) {
            $.each(this.files, function (index, file) {
                let fileReader = new FileReader();

                fileReader.onload = function (e) {
                    let filePreview;
                    if (file.type.startsWith("image/")) {
                        filePreview = `<img src="${e.target.result}" alt="${file.name}">`;
                    } else {
                        filePreview = `<p>${file.name}</p>`;
                    }
                    let attachmentDiv = $(`
                        <div class="attachments">                        
                            ${filePreview}
                            <span class="attachment-data"> 
                                <p>${file.name}</p> 
                                <a href="#" class="delete_attachment" >
                                    <i class="icon-close"></i>
                                </a> 
                            </span>
                        </div>
                    `);
                    attachmentBox.append(attachmentDiv);
                };
                fileReader.readAsDataURL(file);
            });
            attachmentBox.show();
        }
    });

    // Remove attachment on click
    $(document).on("click", ".delete_attachment", function (e) {
        e.preventDefault();
        $(this).closest(".attachments").remove();
    });
});


//full submitted

jQuery(document).ready(function($) {
    $("#multiStepForm").on("submit", function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("action", "submit_final_form");
        formData.append("nonce", $("#multi_step_nonce").val());

        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    alert(response.data.message);
                    window.location.href = response.data.redirect;
                } else {
                    alert(response.data.message);
                }
            },
            error: function() {
                alert("Submission failed. Please try again.");
            }
        });
    });
});

//edit profile 
jQuery(document).ready(function($) {
    $("#edit_profile").click(function() {
        $("#username, #email").prop("disabled", false);
        $("#profile_image").removeClass("d-none");
        $("#edit_profile").addClass("d-none");
        $("#save_profile").removeClass("d-none");
    });

    $("#profile_image").change(function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#profile-preview").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    });

    $("#save_profile").click(function() {
        var formData = new FormData();
        formData.append("action", "save_user_profile");
        formData.append("username", $("#username").val());
        formData.append("email", $("#email").val());
        formData.append("profile_image", $("#profile_image")[0].files[0]);

        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.success) {
                    alert(response.data);
                    location.reload();
                } else {
                    alert(response.data);
                }
            },
            error: function() {
                alert("Error saving profile.");
            }
        });
    });
});