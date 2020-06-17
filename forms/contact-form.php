<?php
// Message Vars
$msg = '';
$msgClass = '';
// Check for submit
if ( filter_has_var( INPUT_POST, 'submit' ) ) {
    // Get Form Data
    $fName = htmlspecialchars( $_POST['firstName'] );
    $lName = htmlspecialchars( $_POST['lastName'] );
    $email = htmlspecialchars( $_POST['emailAddress'] );
    $tele = htmlspecialchars( $_POST['telephoneNumber'] );
    $message = htmlspecialchars( $_POST['userMessage'] );

    // Check Require Fields
    if ( !empty( $fName ) && !empty( $lName ) && !empty( $email ) && !empty( $tele ) && !empty( $message ) ) {
        // Passed
        // Check Email
        if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === false ) {
            // Failed
            $msg = 'Please use a valid email address.';
            $msgClass = 'alert-danger';
        } else {
            // Passed
            $toEmail = 'contact@zackworrix.com';
            $subject = 'Contact request from: ' . $fname . ' ' . $lName;
            $body = '<h2>Contact Request</h2>
                     <h4>First Name: </h4><p>' . $fName . '</p>
                     <h4>Last Name: </h4><p>' . $lName . '</p>
                     <h4>Email: </h4><p>' . $email . '</p>
                     <h4>Telephone Number: </h4><p>' . $tele . '</p>
                     <h4>Message: </h4><p>' . $message . '</p>';

            // Email Headers
            $headers = 'MIME-Version: 1.0' . '\r\n';
            $headers .= 'Content-Type: text/html; charset=UTF-8' . '\r\n';

            // Additional Headers
            $headers .= 'From: ' . $fname . ' ' . $lName . '<' . $email . '>' . '\r\n';

            if ( mail( $toEmail, $subject, $body, $headers ) ) {
                // Email Sent
                $msg = 'Your message has been sent.';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your message was not sent.';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        //Failed
        $msg = 'Please fill in all required fields.';
        $msgClass = 'alert-danger';
    }
}
?>