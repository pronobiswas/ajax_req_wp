<?php

/**
 * Template Name: wellcome
 */
get_header(); ?>

<section id="wellcome">
    <h1>Welcome to PHP</h1>
    <div class="content_warpper" id="pdf-content">
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
                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Full Name :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->full_name); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Other Name :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->other_name); ?></p>
                        </div>
                    </div>

                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>City :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->city); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>State :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->city); ?></p>
                        </div>

                    </div>
                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Mailing Address :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->mailing_address); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>ZIP Code :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->zip_code); ?></p>
                        </div>
                    </div>
                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Email :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->email_address); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Phone Number :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->phone_number); ?></p>
                        </div>
                    </div>

                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Height :</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->height); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Weight:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->weight); ?></p>
                        </div>
                    </div>
                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Date of Birth:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->date_of_birth); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Place of Birth:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->place_of_birth); ?></p>
                        </div>
                    </div>
                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Citizenship Country:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->country_of_citizenship); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Citizenship Country:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->country_of_citizenship); ?></p>
                        </div>
                    </div>

                    <div class="pro_pdf_row">
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Marital Status:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->marital_status); ?></p>
                        </div>
                        <div class="pro_pdf_col">
                            <p class="key_name"><strong>Created At:</strong> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->created_at); ?></p>
                        </div>
                    </div>
                </div>

            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>
        <!-- =====second phase==== -->
        <div class="content_box">
        <h4>ENTRY INTO UNITED STATES </h4>
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'entryintous';

            $data2 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data) :
            ?>
                <div id="secondPart">
                    
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
                        <p class="key_vlaue"><?php echo esc_html($data2->how_to_enter); ?></p>
                    </div>
                    <div class="pro_pdf_row">
                        <p class="key_name"><strong>Have you ever left the U.S. since your original entry :</strong> </p>
                        <p class="key_vlaue"><?php echo esc_html($data2->how_to_enter); ?></p>
                    </div>
                    <h6>If yes, please state:</h6>
                    <div class="pro_pdf_row">
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
                                <td><?php echo esc_html($data2->reason_for_leaving); ?></</td>
                                <td><?php echo esc_html($data2->departure_date1); ?></td>
                                <td><?php echo esc_html($data2->return_date1); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>



                </div>

            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>

        </div>


        <div class="content_box">
            <img src="https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?semt=ais_hybrid&w=740" alt="png">
        </div>

    </div>
    <button id="download-pdf">Download PDF</button>








</section>

<?php get_footer(); ?>

<style>
    /* #wellcome *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    } */
    #wellcome {
        width: 100%;
        padding: 20px;
    }

    .content_box {
        width: 100%;
        min-height: 320px;
        height: 100%;
        min-height: 200px;
        border: 1px solid black;
        outline: 1px solid gray;
        padding: 25px 8px;
    }

    #firstPhase {
        width: 100%;
        height: fit-content;
    }

    .pro_pdf_row {
        width: 100%;
        height: 100%;
        display: flex;
        gap: 10px;
    }

    .pro_pdf_col {
        width: 100%;
        padding: 4px;
        display: flex;
        gap: 8px;
    }

    .key_name {
        position: relative;
        font-size: 16px;
        line-height: 20px;
        white-space: nowrap;
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
        top: 20px;
        left: 0;
        background-color: gray;
    }

    table {
        width: 100%;
        border: 1px solid gray;
        border-collapse: collapse;
    }
    table tr th p{line-height: .7 !important;}

    tr,
    th,
    td {
        border: 1px solid gray;
    }
</style>


<script>
document.getElementById('download-pdf').addEventListener('click', () => {
  const element = document.getElementById('pdf-content');

  html2pdf(element, {
    margin: 0.2,
    filename: 'wellcome-full.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, scrollY: 0, useCORS: true },
    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
  });
});
</script>

