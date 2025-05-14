<?php

/**
 * Template Name: wellcome
 */
get_header(); ?>

<section id="wellcome">
    <h1>Welcome to PHP</h1>
    <div class="content_warpper">
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
                <ul>
                    <li><strong>Full Name:</strong> <?php echo esc_html($data->full_name); ?></li>
                    <li><strong>Other Name:</strong> <?php echo esc_html($data->other_name); ?></li>
                    <li><strong>Mailing Address:</strong> <?php echo esc_html($data->mailing_address); ?></li>
                    <li><strong>City:</strong> <?php echo esc_html($data->city); ?></li>
                    <li><strong>ZIP Code:</strong> <?php echo esc_html($data->zip_code); ?></li>
                    <li><strong>Phone Number:</strong> <?php echo esc_html($data->phone_number); ?></li>
                    <li><strong>Email:</strong> <?php echo esc_html($data->email_address); ?></li>
                    <li><strong>Height:</strong> <?php echo esc_html($data->height); ?></li>
                    <li><strong>Weight:</strong> <?php echo esc_html($data->weight); ?></li>
                    <li><strong>Date of Birth:</strong> <?php echo esc_html($data->date_of_birth); ?></li>
                    <li><strong>Place of Birth:</strong> <?php echo esc_html($data->place_of_birth); ?></li>
                    <li><strong>Citizenship Country:</strong> <?php echo esc_html($data->country_of_citizenship); ?></li>
                    <li><strong>Marital Status:</strong> <?php echo esc_html($data->marital_status); ?></li>
                    <li><strong>Created At:</strong> <?php echo esc_html($data->created_at); ?></li>
                </ul>
            <?php else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>

        <div class="content_box">
            <?php
            global $wpdb;
            $user_id = get_current_user_id();
            $table_name = $wpdb->prefix . 'entryintous';

            $data2 = $wpdb->get_results(
                $wpdb->prepare("SELECT * FROM $table_name WHERE userId = %s", $user_id)
            );

            if ($data2) :
                foreach ($data2 as $row) : ?>
                    <ul>
                        <?php foreach ($row as $key => $value) :
                            if ($key === 'id' || $key === 'userId') continue; ?>
                            <li>
                                <strong><?php echo esc_html(ucwords(str_replace('_', ' ', $key))); ?>:</strong>
                                <?php echo esc_html($value); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <hr> <!-- Line to separate each row -->
                <?php endforeach;
            else : ?>
                <p>No personal information found for this user.</p>
            <?php endif; ?>
        </div>

        <div class="content_box">
            <img src="https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?semt=ais_hybrid&w=740" alt="png">
        </div>
        <div class="content_box"></div>
        <div class="content_box"></div>
        <div class="content_box"></div>
        <div class="content_box"></div>
        <div class="content_box"></div>
    </div>








</section>

<?php get_footer(); ?>
<style>
    #wellcome {
        width: 100%;
        padding: 20px;
    }

    .content_warpper {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .content_box {
        width: 100%;
        min-height: 320px;
        height: 100%;
        min-height: 200px;
        border: 2px solid gray;
        outline: 2px solid gray;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        clip-path: polygon(0% 0%, 99% 1%, 100% 100%, 0% 99%, 0 84%, 49% 83%, 50% 28%, 100% 29%, 100% 23%, 100% 23%, 45% 22%, 43% 78%, 0 78%, 0 30%, 0 0);


    }
</style>