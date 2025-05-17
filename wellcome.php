<?php

/**
 * Template Name: wellcome
 */
get_header(); ?>



<section id="wellcome">
    <div class="content_warpper" id="pdf-content">
        <!-- ===personal info=== -->
        <div class="content_box">
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'personal_info';

            $data = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data) :
            ?>
                <div id="firstPart">
                    <div style="width:100%;">
                        <h4 class="pdf_title">CLIENT INTAKE FORM </h4>
                        <div class="pro_pdf_row">
                            <div class="pro_col_third">
                                <p class="key_name"><span>Full Name :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->full_name); ?></p>
                            </div>
                        </div>
                        <div class="pro_pdf_row">
                            <div class="pro_col_third">
                                <p class="key_name"><span>Other Name :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->other_name); ?></p>
                            </div>
                        </div>
                        <div class="pro_pdf_row">
                            <div class="pro_col_third">
                                <p class="key_name"><span>Mailing Address :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->mailing_address); ?></p>
                            </div>
                        </div>
    
                        <div class="pro_pdf_row">
                            <div class="pro_pdf_col">
                                <p class="key_name"><span>City :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->city); ?></p>
                            </div>
                            <div class="pro_pdf_col">
                                <p class="key_name"><span>State :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->city); ?></p>
                            </div>
                            <div class="pro_pdf_col">
                                <p class="key_name"><span>ZIP Code :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->zip_code); ?></p>
                            </div>
                        </div>
    
                        <div class="pro_pdf_row">
                            <div class="pro_col_half">
                                <p class="key_name"><span>Phone Number :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->phone_number); ?></p>
                            </div>
                        </div>
    
                        <div class="pro_pdf_row">
                            <div class="pro_col_half">
                                <p class="key_name"><span>Email :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->email_address); ?></p>
                            </div>
                        </div>
    
                        <div class="pro_pdf_row">
                            <div class="pro_col_half">
                                <p class="key_name"><span>Height :</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->height); ?></p>
                            </div>
                        </div>
                        <div class="pro_pdf_row">
                            <div class="pro_col_half">
                                <p class="key_name"><span>Weight:</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data->weight); ?></p>
                            </div>
                        </div>
                    </div>

                    <h5 class="persoanl_info_heading">PERSONAL INFORMATION</h5>
                    <div class="pro_pdf_row">
                        <div class="pro_col_half">
                            <p class="key_name"><span>Date of Birth:</span> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->date_of_birth); ?></p>
                        </div>
                    </div>
                    <div class="pro_pdf_row">
                        <p class="key_name"><span>Place of Birth (city/town, state/province/country) :</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data->place_of_birth); ?></p>
                    </div>

                    <div class="pro_pdf_row">
                        <div class="pro_col_half">
                            <p class="key_name"><span>Country of Citizenship : </span> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->country_of_citizenship); ?></p>
                        </div>
                    </div>

                    <div class="pro_pdf_row">
                        <div class="pro_col_half">
                            <p class="key_name"><span>Marital Status:</span> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->marital_status); ?></p>
                        </div>
                    </div>
                </div>

            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>
        <!-- =====entry into united state==== -->
        <div class="content_box">
            <h4 class="entryUs_title">ENTRY INTO UNITED STATES </h4>
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'entryintous';

            $data2 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data2) :
            ?>
                <div id="secondPart">
                    <div class=".second_part_field_wrapper">
                        <div class="">
                            <div class="pro_pdf_row">
                                <p class="key_name"><strong>Date of original entry into the United States::</strong> </p>
                                <p class="key_vlaue"><?php echo esc_html($data2->date_of_entry); ?></p>
                            </div>
                            <div class="pro_pdf_row">
                                <p class="key_name"><strong>How did you enter the United States (e.g., I-94, Visa, EWI, etc.) :</strong> </p>
                                <p class="key_vlaue"><?php echo esc_html($data2->how_to_enter); ?></p>
                            </div>
                            <div class="pro_pdf_row">
                                <p class="key_name"><strong>Place of entry :</strong> </p>
                                <p class="key_vlaue"><?php echo esc_html($data2->place_of_entry); ?></p>
                            </div>
                            <div class="pro_pdf_row">
                                <p class="key_name"><strong>Have you ever left the U.S. since your original entry :</strong> </p>
                                <p class="key_vlaue"><?php echo esc_html($data2->have_you_ever_left_the_US); ?></p>
                            </div>
                            <h6>If yes, please state:</h6>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <th>Reason for Leaving</th>
                            <th>
                                <p>Date You Left </p>
                                <p>(month/year)</p>
                            </th>
                            <th>
                                <p>Date of Return</p>
                                <p>(month/year)</p>
                            </th>
                        </tr>
                        <tr>
                            <td><?php echo esc_html($data2->reason_for_leaving); ?></td>
                            <td><?php echo esc_html($data2->departure_date1); ?></td>
                            <td><?php echo esc_html($data2->return_date1); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo esc_html($data2->reason_for_leaving); ?></td>
                            <td><?php echo esc_html($data2->departure_date1); ?></td>
                            <td><?php echo esc_html($data2->return_date1); ?></td>
                        </tr>
                    </table>



                </div>

            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>

        </div>
        <!-- =========CONTINUOUS RESIDENCE IN THE UNITED STATES ======== -->
        <div class="content_box">

            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'continuous_residence';

            $data3 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data3) :
            ?>

                <h4 class="phase_title">CONTINUOUS RESIDENCE IN THE UNITED STATES </h4>
                <div class="pro_pdf_row">
                    <p class="key_name">Are you continuous Residence in the United State</p>
                    <p class="key_vlaue"><?php echo esc_html($data3->isContinuousResidence); ?></p>

                </div>
                <p class="pro_table_pragraph">List all of your residences since your arrival in the U.S: </p>
                <table class="cntinious_residence_table">
                    <tr>
                        <th>Address </th>
                        <th>
                            <p>From </p>
                            <p>(month/year)</p>
                        </th>
                        <th>
                            <p>To</p>
                            <p>(month/year)</p>
                        </th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data3->residence_address1); ?></td>
                        <td><?php echo esc_html($data3->from_date1); ?></td>
                        <td><?php echo esc_html($data3->to_date1); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data3->address2); ?></td>
                        <td><?php echo esc_html($data3->from_date2); ?></td>
                        <td><?php echo esc_html($data3->to_date2); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>

        </div>
        <!-- ====SCHOOL/MILITARY STATUS==== -->
        <div class="content_box">
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'continuous_residence';

            $data3 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data3) :
            ?>

                <h4 class="phase_title">SCHOOL/MILITARY STATUS </h4>
                <div class="pro_pdf_row">
                    <p class="key_name"><strong>Current Education Status (e.g., In School, GED, High School Graduate, etc.):</strong> </p>
                    <p class="key_vlaue"><?php echo esc_html($data3->current_education_status); ?></p>
                </div>
                <div class="pro_pdf_row">
                    <div class="current_education">
                        <p class="key_name"><strong>Name, City, and State of School Currently Attending or Where Education Received:</strong> </p>
                        <p class="key_vlaue"><?php echo esc_html($data3->where_education_received); ?></p>
                    </div>
                </div>
                <div class="pro_pdf_row">
                    <p class="key_name"><strong>Were you a member in the US military:</strong> </p>
                    <p class="key_vlaue"><?php echo esc_html($data3->us_military); ?></p>
                </div>

            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>


      

    </div>

    <button id="download-pdf">Download PDF</button>

    







</section>

<?php get_footer(); ?>

<style>
    /* =====second part=== */
    #wellcome * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: black;
    }

    #wellcome {
        width: 100%;
        padding: 20px;
    }

    .pdf_title {
        width: 100%;
        text-align: center;
        color: black !important;
        padding-bottom: 50px !important;
    }

    .content_box {
        width: 100%;
        min-height: 320px;
        height: 100%;
        min-height: 200px;
        padding: 25px 8px;
    }

    #wellcome .content_box h4 {
        text-align: center;
    }

    #wellcome .content_box h5 {
        text-align: center;
    }

    #firstPart .persoanl_info_heading {
        width: 100%;
        padding: 20px 0 30px 0 !important;
        text-align: center;
        color: black !important;
    }

    .entryUs_title {
        width: 100%;
        padding: 50px 0 !important;
        text-align: center;
    }

    #firstPart {
        width: 100%;
        max-width: 800px;
        height: fit-content;
        padding: 50px 20px;
        margin: 0 auto;
    }

    .pro_pdf_row {
        width: 100%;
        height: 100%;
        display: flex;
        gap: 0;
        padding: 0px !important;
        margin: 0 !important;
    }

    .pro_pdf_col {
        width: 100%;
        padding: 4px;
        display: flex;
        gap: 0;
    }

    .key_name {
        position: relative;
        font-size: 16px;
        line-height: 16px;
        white-space: nowrap;
        color: black !important;
    }

    .key_vlaue {
        width: 100%;
        line-height: 20px;
        position: relative;
    }

    .key_vlaue::after {
        position: absolute;
        content: '';
        width: 100%;
        height: 1px;
        top: 15px;
        left: 0;
        background-color: black;
    }

    table {
        width: 100%;
        border: 1px solid gray;
        border-collapse: collapse;
    }

    table tr th p {
        line-height: .7 !important;
    }

    tr,
    th,
    td {
        border: 1px solid gray;
    }

    .pro_col_half {
        width: 50%;
        max-width: 50%;
        display: flex;
    }

    .pro_col_third {
        width: 75%;
        max-width: 75%;
        display: flex;
    }
     #pdf-content, #pdf-content * {
        line-height: 14px !important;
        font-size: 16px !important;
    }
</style>


<script>
    document.getElementById('download-pdf').addEventListener('click', () => {
        const element = document.getElementById('pdf-content');

        html2pdf(element, {
            margin: [0.5 , 0.5 , 0.2 , 0.2],
            filename: 'wellcome-full.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2,
                scrollY: 0,
                useCORS: true
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'portrait'
            }
        });
    });
</script>