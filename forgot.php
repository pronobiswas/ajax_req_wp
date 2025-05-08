<?php
/* Template Name: Forgot Password */
get_template_part('template-parts/login/header', 'login');

$message = ""; 

if (isset($_POST['submit'])) {
    $user_login = sanitize_text_field($_POST['user_login']);
    
    if (empty($user_login)) {
        $message = '<p style="color:red;">Please enter your email or username.</p>';
    } else {
        $user = get_user_by('email', $user_login);
        if (!$user) {
            $user = get_user_by('login', $user_login);
        }

        if ($user && in_array('subscriber', $user->roles)) {
          $reset_result = retrieve_password($user_login);
      
          if (is_wp_error($reset_result)) {
              $message = '<p style="color:red;">Failed to send reset email. Please try again later.</p>';
          } else {
              $message = '<p style="color:green;">Password reset link sent! Check your email.</p>';
          }
      }
      
    }
}
?>

<section class="page-section login-page">
    <div class="full-width-screen">
        <div class="container-fluid">
            <div class="content-detail">
                <!-- Forgot form -->
                <form class="forgot-form" method="post">
                    <div class="input-control">
                        <p>Enter your email or username, we will send a link to reset your password.</p>

                        <!-- Show message here -->
                        <?php if (!empty($message)) echo $message; ?>

                        <!-- Change type from email to text -->
                        <input type="text" placeholder="Enter your email or username" name="user_login" required>

                        <div class="login-btns">
                            <!-- Add name="submit" to trigger POST -->
                            <button type="submit" name="submit">Reset</button>
                        </div>

                        <div class="login-with-btns">
                            <span class="already-acc">Return to 
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('user-login'))); ?>" class="login-btn">Login</a>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/login/footer', 'login'); ?>
