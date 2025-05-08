<?php 
/**
 * Shortcode generate
 */

 //display form submission history
function display_submission_history() {
    if (!is_user_logged_in()) {
        return '<p>You must be logged in to view your submission history.</p>';
    }

    $user_id = get_current_user_id();
    $submission_history = get_user_meta($user_id, 'submission_history', true);

    ob_start();
    echo '<h5>Submission History</h5>';

    if (!empty($submission_history) && is_array($submission_history)) {
        echo '<table class="table">';
        echo '<tr>
                <th>SLN</th>
                <th>Form Title</th>
                <th>Submitted At</th>
              </tr>';

        $sln = 1;
        foreach ($submission_history as $form_id => $data) {
            echo '<tr>';
            echo '<td>' . esc_html($sln) . '</td>';
            echo '<td>' . esc_html($data['form_title']) . '</td>';
            echo '<td>' . esc_html($data['submitted_at']) . '</td>';            
            echo '</tr>';
            $sln++;
        }

        echo '</table>';
    } else {
        echo '<p>No submissions found.</p>';
    }

    return ob_get_clean();
}

add_shortcode('submission_history', 'display_submission_history');
