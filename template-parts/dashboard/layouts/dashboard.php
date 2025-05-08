<?php
if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    $profile_image = get_user_meta($current_user->ID, 'profile_image', true);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Profile Details</h4>            
                        <form id="users_form" enctype="multipart/form-data">
                            <div class="form-row mb-3">
                                <!-- Profile Image Field -->
                                <div class="form-group col-md-6">
                                    <img id="profile-preview" src="<?php echo !empty($profile_image) ? esc_url($profile_image) : 'https://via.placeholder.com/100'; ?>" width="100">
                                    <input type="file" class="form-control mt-2 d-none" name="profile_image" id="profile_image">
                                </div>

                                <!-- Username Field -->
                                <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="name" id="username" value="<?php echo esc_attr($current_user->user_login); ?>" required disabled>
                                </div>

                                <!-- Email Address Field -->
                                <div class="form-group col-md-6">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo esc_attr($current_user->user_email); ?>" required disabled>
                                </div>      
                            </div>
                            <button type="button" id="edit_profile" class="btn btn-warning">Edit</button>
                            <button type="button" id="save_profile" class="btn btn-primary d-none">Save</button>
                        </form>
                    </div>        
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo '<p>You need to log in to edit your profile.</p>';
}
?>
