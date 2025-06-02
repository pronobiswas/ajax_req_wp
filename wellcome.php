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

            if ($data):
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
                        <span style="white-space: nowrap;">1 . &nbsp; </span>
                        <div class="pro_col_half">
                            <p class="key_name"><span>Date of Birth:</span> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->date_of_birth); ?></p>
                        </div>
                    </div>


                    <div class="pro_pdf_row">
                        <span style="white-space: nowrap;">2 . &nbsp; </span>
                        <p class="key_name"><span>Place of Birth (city/town, state/province/country) :</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data->place_of_birth); ?></p>
                    </div>


                    <div class="pro_pdf_row">
                        <span style="white-space: nowrap;">3 . &nbsp; </span>
                        <div class="pro_col_half">
                            <p class="key_name"><span>Country of Citizenship : </span> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->country_of_citizenship); ?></p>
                        </div>
                    </div>


                    <div class="pro_pdf_row">
                        <span style="white-space: nowrap;">4 . &nbsp; </span>
                        <div class="pro_col_half">
                            <p class="key_name"><span>Marital Status:</span> </p>
                            <p class="key_vlaue"><?php echo esc_html($data->marital_status); ?></p>
                        </div>
                    </div>


                </div>

            <?php else: ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>
        <!-- =====entry into united state==== -->
        <div id="entry_into" style="padding-left:50px;">
            <h4 class="entryUs_title" style="color:black">ENTRY INTO UNITED STATES </h4>
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'entryintous';

            $data2 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data2):
                ?>
                <div id="secondPart">
                    <div class="second_part_field_wrapper">
                        <ol>
                            <div>
                                <div class="pro_pdf_row">
                                    <p class="key_name"><strong>Date of original entry into the United States::</strong>
                                    </p>
                                    <p class="key_vlaue"><?php echo esc_html($data2->date_of_entry); ?></p>
                                </div>
                                <div class="pro_pdf_row">
                                    <p class="key_name"><strong>How did you enter the United States (e.g., I-94, Visa, EWI,
                                            etc.) :</strong> </p>
                                    <p class="key_vlaue"><?php echo esc_html($data2->how_to_enter); ?></p>
                                </div>
                                <div class="pro_pdf_row">
                                    <p class="key_name"><strong>Place of entry :</strong> </p>
                                    <p class="key_vlaue"><?php echo esc_html($data2->place_of_entry); ?></p>
                                </div>
                                <div class="pro_pdf_row">
                                    <p class="key_name"><strong>Have you ever left the U.S. since your original entry
                                            :</strong> </p>
                                    <p class="key_vlaue"><?php echo esc_html($data2->have_you_ever_left_the_US); ?></p>
                                </div>
                                <h6>If yes, please state:</h6>
                            </div>
                        </ol>
                    </div>

                    <table id="#entry_into_table" style="width:100%; margin-top: 30px;">
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

            <?php else: ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>

        </div>
        <!-- =========CONTINUOUS RESIDENCE IN THE UNITED STATES ======== -->
        <div class="content_box" style="padding-left:50px;">

            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'continuous_residence';

            $data3 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data3):
                ?>

                <h4 style="text-align: center; margin: 30px 0 35px 0; color: black;" >CONTINUOUS RESIDENCE IN THE UNITED STATES </h4>
                <div class="pro_pdf_row">
                    <p class="key_name">Are you continuous Residence in the United State : &nbsp;</p>
                    <p class="key_vlaue" style="width: 200px;" ><?php echo esc_html($data3->isContinuousResidence); ?></p>

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

            <?php else: ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>

        </div>
        <!-- ====SCHOOL/MILITARY STATUS==== -->
        <div class="content_box" style="padding-left: 50px;">
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'continuous_residence';

            $data3 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data3):
                ?>

                <h4 style="color: black; text-align: center; margin-bottom: 40px;">SCHOOL/MILITARY STATUS </h4>

                <div class="pro_pdf_row">
                    <p class="key_name"><span>Current Education Status (e.g., In School, GED, High School Graduate,
                            etc.): &nbsp;</span> </p>
                    <p class="key_vlaue"><?php echo esc_html($data3->current_education_status); ?></p>
                </div>

                <div class="pro_pdf_row">
                    <div class="current_education" style=" display:flex; flex-wrap: nowrap; width: 100%;">
                        <p class="key_name"><span>Name, City, and State of School Currently Attending or Where Education
                                Received: &nbsp;</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data3->where_education_received); ?></p>
                    </div>
                </div>

                 <div class="pro_pdf_row">
                    <p class="key_name"><span>Date of Last Attendance: &nbsp;</span> </p>
                    <p class="key_vlaue"><?php echo esc_html($data3->us_military); ?></p>
                </div>

                <div class="pro_pdf_row">
                    <p class="key_name"><span>Were you a member in the US military:</span> </p>
                    <p class="key_vlaue"><?php echo esc_html($data3->us_military); ?></p>
                </div>

            <?php else: ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>
        <!-- ====Employment Authorization ==== -->
         <div class="content_box" style="padding-left: 50px;">
            <h4 style="color: black; margin-bottom: 25px;">Employment Authorization </h4>
             <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'employment_authorazition';

            $data4 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data4):
            ?>

            <div class="emloyment_auth_warper">
                <div class="pro_pdf_row">
                    <div class="pro_col_half">
                        <p class="key_name"><span>Current Annual Income : &nbsp;</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data4->current_annual_income); ?></p>
                    </div>
                </div>
                <div class="pro_pdf_row">
                    <div class="pro_col_half">
                        <p class="key_name"><span>Current Emloyer Name : &nbsp;</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data4->current_emloyer_name); ?></p>
                    </div>
                </div>
                <div class="pro_pdf_row">
                    <div class="pro_col_half">
                        <p class="key_name"><span>Current Employer Address : &nbsp;</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data4->current_emloyer_address); ?></p>
                    </div>
                </div>
                <div class="pro_pdf_row">
                    <div class="pro_col_half">
                        <p class="key_name"><span>Why do you want your Work Authorization : &nbsp;</span> </p>
                        <p class="key_vlaue"><?php echo esc_html($data4->why_work_auth); ?></p>
                    </div>
                </div>
            </div>

            <?php else: ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>

         </div>
         <!-- ===information about your current spouse=== -->
        <div class="content_box">
            <h4 style="color:black; ">INFORMATION ABOUT YOUR CURRENT SPOUSE:</h4>
            <div style="width: 100%; height:1px; background-color: black; "></div>
            <p>Information about all your current spouse:</p>
             <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'info_about_current_spouse';

            $data5 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data5):
            ?>
            
                <table class="current_spouse_info_table">
                    <tr>
                        <td>Name of Spouse: (Last, First, Middle):</td>
                        <td>Spouse Citizenship of What Country:</td>
                        <td>Spouse Current Address: (City and Country)</td>
                        <td>Immigration Status of</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data5->spouse_name); ?> </td>
                        <td><?php echo esc_html($data5->cityzenship_of_spouse); ?></td>
                        <td><?php echo esc_html($data5->current_address_of_spouse); ?></td>
                        <td rowspan="3"><?php echo esc_html($data5->spouseImmigration); ?></td>
                    </tr>
                    <tr>
                        <td>Spouse Alien Registration Number:</td>
                        <td>Spouse Birth Date: (Month, Day, Year)</td>
                        <td>Spouse Country of Birth: (City and Country)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data5->spouse_aline_registration_number); ?></td>
                        <td><?php echo esc_html($data5->spouse_birth_date); ?></td>
                        <td><?php echo esc_html($data5->spouse_country_of_birth); ?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Spouse's Average Earnings Per Week :&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data5->spouse_earn_per_week); ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Spouse's US Social Security Number :&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data5->spouse_social_security_number); ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="current_spouse_info_table">
                    <tr>
                        <td>Date of Marriage:</td>
                        <td>Place of Marriage:</td>
                        <td>Spouse Maiden Name:</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data5->date_of_marriage); ?></td>
                        <td><?php echo esc_html($data5->place_of_marriage); ?></td>
                        <td><?php echo esc_html($data5->spouse_maiden_name); ?></td>
                    </tr>
                    <tr>
                        <td>Place Spouse First Entered the US: </td>
                        <td>Date Spouse First Entered The US:</td>
                        <td>-Date Spouse Became a US Citizen: -What City and State She Became A US Citizen In:</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data5->place_spouse_first_entered_us); ?></td>
                        <td><?php echo esc_html($data5->date_spouse_first_entered_us); ?></td>
                        <td><?php echo esc_html($data5->date_spouse_become_us_citizen); ?></td>
                    </td>
                </table>
                <h4 style="color:black; ">CURRENT SPOUSE'S EMPLOYMENT INFORMATION:</h4>
                <div style="width: 100%; height:1px; background-color: black; "></div>
                <p>Information about your spouse's employment in the US:</p>
                <table class="current_spouse_info_table">
                    <tr>
                        <td>Full Name of Spouse's Employer:</td>
                        <td>Full Address of Spouse's Employer: </td>
                        <td>Earnings Per Week: (Approximate) </td>
                        <td>Type of Work Performed: </td>
                        <td>Start of Employment:(Month, Day,Year)</td>
                        <td>End of Employment:(Month, Day,Year)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data5->full_name_of_spouse_employer); ?></td>
                        <td><?php echo esc_html($data5->full_address_of_spouse_employer); ?></td>
                        <td><?php echo esc_html($data5->earning_per_week_of_spouse); ?></td>
                        <td><?php echo esc_html($data5->type_of_work_preformed_by_spouse); ?></td>
                        <td><?php echo esc_html($data5->start_of_employment); ?></td>
                        <td><?php echo esc_html($data5->end_of_employment); ?></td>
                    </tr>
                </table>



            <?php else: ?>
                <p>No CURRENT SPOUSE'S EMPLOYMENT information found for this user.</p>
            <?php endif; ?>

        </div>
        <!-- ===information about your prior spouse=== -->
         <div class="conent_box">
            <h4 style="color:black; ">INFORMATION ABOUT YOUR PRIOR MARRIAGE:</h4>
            <div style="width: 100%; height:1px; background-color: black; "></div>
            <p>Information about your prior marriage:</p>
             <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'info_about_prior_spouse';

            $data6 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data6):
            ?>
            <table class="pro_info_table">
                <tr>
                    <th>Full Name of Spouse's Prior Spouse (Last,First, Middle):</th>
                    <th>Date Marriage Began:</th>
                    <th>Date Marriage Ended:</th>
                    <th>Place Marriage Ended (City and Country):</th>
                    <th>Description of Why Marriage Ended:</th>
                </tr>
                <tr>
                    <td><?php echo esc_html($data6->full_name_of_prior_spouse); ?></td>
                    <td><?php echo esc_html($data6->date_prior_marrige_began); ?></td>
                    <td><?php echo esc_html($data6->date_prior_marrige_ended); ?></td>
                    <td><?php echo esc_html($data6->place_prior_marrige_ended); ?></td>
                    <td><?php echo esc_html($data6->description_of_why_marrige_ended); ?></td>
                </tr>
            </table>

            <table class="pro_info_table">
                <tr>
                    <th>Full Name of Spouse's Prior Spouse (Last,First, Middle):</th>
                    <th>Date Marriage Began:</th>
                    <th>Date Marriage Ended:</th>
                    <th>Place Marriage Ended (City and Country):</th>
                    <th>Description of Why Marriage Ended:</th>
                </tr>
                <tr>
                    <td><?php echo esc_html($data6->full_name_of_prior_spouse1); ?></td>
                    <td><?php echo esc_html($data6->date_prior_marrige_began1); ?></td>
                    <td><?php echo esc_html($data6->date_prior_marrige_ended1); ?></td>
                    <td><?php echo esc_html($data6->place_prior_marrige_ended1); ?></td>
                    <td><?php echo esc_html($data6->description_of_why_marrige_ended1); ?></td>
                </tr>
            </table>



            <?php else: ?>
                <p>No CURRENT SPOUSE'S EMPLOYMENT information found for this user.</p>
            <?php endif; ?>
         </div>
         <!-- ====INFORMATION ABOUT YOUR CHILDREN==== -->
         <div class="content_box">
            <h4 style="color:black; ">INFORMATION ABOUT YOUR CHILDREN:</h4>
            <div style="width: 100%; height:1px; background-color: black; "></div>
            <p>Information about all your children</p>
             <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'info_about_child';

            $data7 = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data7):
            ?>
            <div id="childrenInfoWraper">
                <table class="pro_info_table">
                    <tr>
                        <td>Name of Child: (Last, First,Middle):</td>
                        <td>Child's Citizenship of What Country:</td>
                        <td>Child's Current Address: (City and Country)</td>
                        <td>Immigration Status of Child</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data7->name_of_child);?></td>
                        <td><?php echo esc_html($data7->child_citizenship);?></td>
                        <td><?php echo esc_html($data7->child_current_address);?></td>
                        <td rowspan="3"><?php echo esc_html($data7->child_immigration_status);?></td>
                    </tr>
                    <tr>
                        <td>Child's Alien Registration Number:</td>
                        <td>Child's Birth Date: (Month,Day, Year)</td>
                        <td>Child's Country of Birth: (City and Country)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data7->child_alien_registration_number);?></td>
                        <td><?php echo esc_html($data7->child_birth_date);?></td>
                        <td><?php echo esc_html($data7->child_country_of_birth);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Name of Child: (Last, First,Middle):</td>
                        <td>Child's Citizenship of What Country:</td>
                        <td>Child's Current Address: (City and Country)</td>
                        <td>Immigration Status of Child</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data7->name_of_child1);?></td>
                        <td><?php echo esc_html($data7->child_citizenship1);?></td>
                        <td><?php echo esc_html($data7->child_current_address1);?></td>
                        <td rowspan="3"><?php echo esc_html($data7->child_immigration_status1);?></td>
                    </tr>
                    <tr>
                        <td>Child's Alien Registration Number:</td>
                        <td>Child's Birth Date: (Month,Day, Year)</td>
                        <td>Child's Country of Birth: (City and Country)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data7->child_alien_registration_number1);?></td>
                        <td><?php echo esc_html($data7->child_birth_date1);?></td>
                        <td><?php echo esc_html($data7->child_country_of_birth1);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data5->child_average_earnings1); ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Name of Child: (Last, First,Middle):</td>
                        <td>Child's Citizenship of What Country:</td>
                        <td>Child's Current Address: (City and Country)</td>
                        <td>Immigration Status of Child</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="3">td>
                    </tr>
                    <tr>
                        <td>Child's Alien Registration Number:</td>
                        <td>Child's Birth Date: (Month,Day, Year)</td>
                        <td>Child's Country of Birth: (City and Country)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"></p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Name of Child: (Last, First,Middle):</td>
                        <td>Child's Citizenship of What Country:</td>
                        <td>Child's Current Address: (City and Country)</td>
                        <td>Immigration Status of Child</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="3">td>
                    </tr>
                    <tr>
                        <td>Child's Alien Registration Number:</td>
                        <td>Child's Birth Date: (Month,Day, Year)</td>
                        <td>Child's Country of Birth: (City and Country)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>



            <?php else: ?>
                <p>No CURRENT SPOUSE'S EMPLOYMENT information found for this user.</p>
            <?php endif; ?>

         </div>
         <!-- ===INFORMATION ABOUT WHERE YOU LIVED SINCE BEING IN THE US=== -->
        <div class="content_box">
            <h4 style="color:black; ">INFORMATION ABOUT WHERE YOU LIVED SINCE BEING IN THE US:</h4>
            <div style="width: 100%; height:1px; background-color: black; "></div>
            <p>Part 1, Number 16 - Place Where Lived Since Being In US:</p>
            <?php
                global $wpdb;
                $user_id = get_current_user_id();
                $table_name = $wpdb->prefix . 'info_where_lived_in_us';

                $data8 = $wpdb->get_row(
                    $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
                );

                if ($data8):
            ?>
            <div class="liveingAddressWraper">
                <table class="pro_info_table">
                    <tr>
                        <td>Street and Number - Apt. or Room # - City or Town - State - Zip Code</td>
                        <td>Resided From:(Month, Day, Year)</td>
                        <td>Resided To:(Month, Day, Year)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data8->street_and_number);?></td>
                        <td><?php echo esc_html($data8->resided_from);?></td>
                        <td><?php echo esc_html($data8->resided_to);?></td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Street and Number - Apt. or Room # - City or Town - State - Zip Code</td>
                        <td>Resided From:(Month, Day, Year)</td>
                        <td>Resided To:(Month, Day, Year)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data8->street_and_number1);?></td>
                        <td><?php echo esc_html($data8->resided_from1);?></td>
                        <td><?php echo esc_html($data8->resided_to1);?></td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Street and Number - Apt. or Room # - City or Town - State - Zip Code</td>
                        <td>Resided From:(Month, Day, Year)</td>
                        <td>Resided To:(Month, Day, Year)</td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data8->street_and_number2);?></td>
                        <td><?php echo esc_html($data8->resided_from2);?></td>
                        <td><?php echo esc_html($data8->resided_to2);?></td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Street and Number - Apt. or Room # - City or Town - State - Zip Code</td>
                        <td>Resided From:(Month, Day, Year)</td>
                        <td>Resided To:(Month, Day, Year)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="pro_info_table">
                    <tr>
                        <td>Street and Number - Apt. or Room # - City or Town - State - Zip Code</td>
                        <td>Resided From:(Month, Day, Year)</td>
                        <td>Resided To:(Month, Day, Year)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

            </div>
            <?php else: ?>
                <p>No liveing information found for this user.</p>
            <?php endif; ?>
        </div>
        <!-- ====EMPLOYMENT INFORMATION FOR LAST 10YEARS==== -->
        <div class="content_box">
            <h4 style="color:black; ">EMPLOYMENT INFORMATION FOR LAST 10 YEARS</h4>
            <div style="width: 100%; height:1px; background-color: black; "></div>
            <p>Information about your emplymewnt form the first time you entered the US</p>
            <?php
                global $wpdb;
                $user_id = get_current_user_id();
                $table_name = $wpdb->prefix . 'info_employment_last_10years';

                $data9 = $wpdb->get_row(
                    $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
                );

                if ($data9):
            ?>
            <div class="employment_history">
                <table class="pro_info_table">
                    <tr>
                        <th>Full Name of Employer:</th>
                        <th>Full Address of Employer</th>
                        <th>Earning Per Week:(Aproximate)</th>
                        <th>Type of Work Preformed</th>
                        <th>Start of Employment:(Month,Day,Year)</th>
                        <th>End of Employment:(Month,Day,Year)</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data9->full_name_of_employer);?></td>
                        <td><?php echo esc_html($data9->full_address_of_employer);?></td>
                        <td><?php echo esc_html($data9->earning_per_week);?></td>
                        <td><?php echo esc_html($data9->type_of_work_preformed);?></td>
                        <td><?php echo esc_html($data9->start_of_employment_last_10_years);?></td>
                        <td><?php echo esc_html($data9->end_of_employment_last_10_years);?></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data9->full_name_of_employer1);?></td>
                        <td><?php echo esc_html($data9->full_address_of_employer1);?></td>
                        <td><?php echo esc_html($data9->earning_per_week1);?></td>
                        <td><?php echo esc_html($data9->type_of_work_preformed1);?></td>
                        <td><?php echo esc_html($data9->start_of_employment_last_10_years1);?></td>
                        <td><?php echo esc_html($data9->end_of_employment_last_10_years1);?></td>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data9->full_name_of_employer2);?></td>
                        <td><?php echo esc_html($data9->full_address_of_employer2);?></td>
                        <td><?php echo esc_html($data9->earning_per_week2);?></td>
                        <td><?php echo esc_html($data9->type_of_work_preformed2);?></td>
                        <td><?php echo esc_html($data9->start_of_employment_last_10_years2);?></td>
                        <td><?php echo esc_html($data9->end_of_employment_last_10_years2);?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    
                </table>
            </div>
            <?php else: ?>
                <p>No liveing information found for this user.</p>
            <?php endif; ?>
        </div>

        <!-- ==== INFORMATION FOR LAST 10YEARS==== -->
        <div class="content_box">
            <h4 style="color:black; ">INFORMATION ABOUT YOUR FAMILY</h4>
            <div style="width: 100%; height:1px; background-color: black; "></div>
            <p>Information about your father,mother,brother,sister,uncle,aunt,grandfather, grandmother</p>
            <?php
                global $wpdb;
                $user_id = get_current_user_id();
                $table_name = $wpdb->prefix . 'info_about_family';

                $data10 = $wpdb->get_row(
                    $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
                );

                if ($data10):
            ?>
            <div class="employment_history">
                <h3>FATHER'S INFORMATION</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>FATHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->father_name);?></td>
                        <td><?php echo esc_html($data10->father_cityzen_of_what_country);?></td>
                        <td><?php echo esc_html($data10->father_relationship_to_me);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->father_imigration_status);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->father_alien_registration_number);?></td>
                        <td><?php echo esc_html($data10->father_birth_date);?></td>
                        <td><?php echo esc_html($data10->father_birth_country);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
                <br>
                <!-- ===mother's information=== -->
                 <h3>MOTHER'S INFORMATION</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>MOTHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->mother_name);?></td>
                        <td><?php echo esc_html($data10->mother_cityzen_of_what_country);?></td>
                        <td><?php echo esc_html($data10->mother_relationship_to_me);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->mother_imigration_status);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->mother_alien_registration_number);?></td>
                        <td><?php echo esc_html($data10->mother_birth_date);?></td>
                        <td><?php echo esc_html($data10->mother_birth_country);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
                <!-- ===grandfather's information=== -->
                 <h3>GRANDFATHER'S INFORMATION</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>GRANDFATHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandfather_name);?></td>
                        <td><?php echo esc_html($data10->grandfather_cityzen_of_what_country);?></td>
                        <td><?php echo esc_html($data10->grandfather_relationship_to_me);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->grandfather_imigration_status);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandfather_alien_registration_number);?></td>
                        <td><?php echo esc_html($data10->grandfather_birth_date);?></td>
                        <td><?php echo esc_html($data10->grandfather_birth_country);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
                <!-- ===grandmother's information=== -->
                 <h3>GRANDMOTHER'S INFORMATION</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>GRANDMOTHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandmother_name);?></td>
                        <td><?php echo esc_html($data10->grandmother_cityzen_of_what_country);?></td>
                        <td><?php echo esc_html($data10->grandmother_relationship_to_me);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->grandmother_imigration_status);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandmother_alien_registration_number);?></td>
                        <td><?php echo esc_html($data10->grandmother_birth_date);?></td>
                        <td><?php echo esc_html($data10->grandmother_birth_country);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Child's Average Earnings Per Week: $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
                <!-- ===grandfather's information mother side=== -->
                 <h3>GRANDFATHER ON MOTHER'S SIDE</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>GRANDMOTHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandfather_name_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandfather_cityzen_of_what_country_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandfather_relationship_to_me_mother_side);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->grandfather_imigration_status_mother_side);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandfather_alien_registration_number_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandfather_birth_date_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandfather_birth_country_mother_side);?></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Full Address $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
                <!-- ===grandmother's information mother side=== -->
                 <h3>GRANDMOTHER ON MOTHER'S SIDE</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>GRANDMOTHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandmother_name_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandmother_cityzen_of_what_country_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandmother_relationship_to_me_mother_side);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->grandmother_imigration_status_mother_side);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->grandmother_alien_registration_number_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandmother_birth_date_mother_side);?></td>
                        <td><?php echo esc_html($data10->grandmother_birth_country_mother_side);?></td>
                    </tr>
                    <tr> 
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Full Address $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
                <!-- ===brother's information mother side=== -->
                 <h3>BROTHER INFORMATION</h3>
                <table class="pro_info_table">
                    <tr>
                        <th>BROTHER'S NAME</th>
                        <th>CITIZENSHIP OF WHAT COUNTRY</th>
                        <th>RELATIONSHIP TO ME</th>
                        <th>IMMIGRATION STATUS</th>
                        
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->brother_name);?></td>
                        <td><?php echo esc_html($data10->brother_cityzen_of_what_country);?></td>
                        <td><?php echo esc_html($data10->brother_relationship_to_me);?></td>
                        <td rowspan="3"><?php echo esc_html($data10->brother_imigration_status);?></td>
                        
                    </tr>
                    <tr>
                        <th>ALIEN REGISTRATION NUMBER</th>
                        <th>DATE OF BIRTH</th>
                        <th>BIRTH COUNTRY</th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html($data10->brother_alien_registration_number);?></td>
                        <td><?php echo esc_html($data10->brother_birth_date);?></td>
                        <td><?php echo esc_html($data10->brother_birth_country);?></td>
                    </tr>
                    <tr> 
                        <td colspan="4">
                            <div class="pro_pdf_row">
                                <p class="key_name"><span>Full Address $&nbsp;</span> </p>
                                <p class="key_vlaue"><?php echo esc_html($data7->child_average_earnings); ?></p>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                </table>
            </div>
            <?php else: ?>
                <p>No liveing information found for this user.</p>
            <?php endif; ?>
        </div>






    </div>

    <button id="download-pdf">Download PDF</button>









</section>

<?php get_footer(); ?>

<style>
    .pro_table_ifo tr th{
        font-weight: 500 !important;
    }
    .pro_table_ifo tr td{
        font-weight: 400 !important;
    }
    #entry_into {
        background-color:transparent;
        padding-left: 50px;
    }

    /* #secondPart{} */
    #entry_into_table {
        width: 100%;
        padding-left: 40px !important;
    }

    /* =====second part=== */
    #wellcome * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: black;
        font-family: serif !important;
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

    #pdf-content,
    #pdf-content * {
        line-height: .8 !important;
        font-size: 20px !important;
    }
    
    #pdf-content .key_name strong{
        font-size: 20px !important;
        line-height: 16px;
        white-space: nowrap;
        color: black !important;
    }

   #pdf-content .key_vlaue {
        width: 100%;
        font-size: 20px !important;
        line-height: 20px;
        position: relative;
        color: black !important;
        white-space: nowrap !important;
    }
    #pdf-content .key_name {
        font-size: 20px !important;
        line-height: 16px;
        white-space: nowrap;
        color: black !important;
    }

    #pdf-content .key_vlaue::after {
        position: absolute;
        content: '';
        width: 100%;
        height: 1px;
        top: 15px;
        left: 0;
        background-color: black !important;
    }
    #pdf-content .current_spouse_info_table{
        border: 1px solid black !important;
        border-collapse: collapse !important;
        border-color: black !important;
    }
    #pdf-content .current_spouse_info_table tr,
    #pdf-content .current_spouse_info_table td{
        border-color: black !important;
    }
    #pdf-content .current_spouse_info_table td, #pdf-content .current_spouse_info_table th{
        border-color: black !important;
        font-size: 18px !important;
        line-height: 20px !important;
        color: black !important;
    }

    #pdf-content .pro_info_table{
        border: 1px solid black !important;
        border-collapse: collapse !important;
        border-color: black !important;
    }
    #pdf-content .pro_info_table tr,
    #pdf-content .pro_info_table th{
        border-color: black !important;
        font-weight: 400;
    }
    #pdf-content .pro_info_table td{
        border-color: black !important;
        font-size: 18px !important;
        line-height: 20px !important;
        color: black !important;
    }
    /* ===continious residence=== */
    
</style>


<script>
    document.getElementById('download-pdf').addEventListener('click', () => {
        const element = document.getElementById('pdf-content');

        html2pdf(element, {
            margin: [0.5, 0.5, 0.2, 0.2],
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
                format: 'a3',
                orientation: 'portrait'
            }
        });
    });
</script>