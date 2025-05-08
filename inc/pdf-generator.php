<?php 
function generate_pdf() {
    ob_end_clean(); // Clean any previous output
    ob_start(); // Start output buffering

    require_once get_stylesheet_directory() . '/tcpdf/tcpdf.php';

    // Get the current logged-in user ID
    $user_id = get_current_user_id();

    // Get the form_id from the request
    $form_id = isset($_GET['form_id']) ? intval($_GET['form_id']) : 1;

    // Retrieve user meta data
    $name = get_user_meta($user_id, "multi_step_name_{$form_id}", true);
    $email = get_user_meta($user_id, "multi_step_email_{$form_id}", true);
    $address = get_user_meta($user_id, "multi_step_address_{$form_id}", true);
    $nid = get_user_meta($user_id, "multi_step_nid_{$form_id}", true);
    $passport = get_user_meta($user_id, "multi_step_passport_{$form_id}", true);

    // Ensure we have at least a name, otherwise return an error
    if (empty($name)) {
        echo json_encode(['error' => 'No data found for this user and form ID']);
        wp_die();
    }

    // Create PDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle('User Submission PDF');
    $pdf->SetHeaderData('', 0, 'User Submission Data', 'Generated using TCPDF');
    $pdf->SetFont('helvetica', '', 12);
    $pdf->SetMargins(15, 15, 15);
    $pdf->AddPage();

    // Content for the PDF
    $html = '<h2>User Submission Data</h2>
        <table border="1" cellpadding="5">
            <tr><td><b>Name</b></td><td>' . esc_html($name) . '</td></tr>
            <tr><td><b>Email</b></td><td>' . esc_html($email) . '</td></tr>
            <tr><td><b>Address</b></td><td>' . esc_html($address) . '</td></tr>
            <tr><td><b>NID</b></td><td>' . esc_html($nid) . '</td></tr>
            <tr><td><b>Passport</b></td><td>' . esc_html($passport) . '</td></tr>
        </table>';

    // Write the HTML to PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Clear any previously sent headers
    header_remove();

    // Set PDF headers
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="user-details.pdf"');
    header('Cache-Control: private, max-age=0, must-revalidate');
    header('Pragma: public');

    // Output the PDF
    $pdf->Output('user-details.pdf', 'I');

    ob_end_flush(); // Send the output buffer
    exit;
}
// Register AJAX actions
add_action('wp_ajax_generate_pdf', 'generate_pdf');
