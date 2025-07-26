<?php
require_once 'config.php';

$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $user_message = trim($_POST['message'] ?? '');
    
    // Basic validation
    if (empty($name) || empty($email) || empty($user_message)) {
        $message = 'Please fill in all required fields.';
        $message_type = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
        $message_type = 'error';
    } else {
        // Prepare email
        $to = $site_config['email'];
        $email_subject = 'Contact Form: ' . (!empty($subject) ? $subject : 'New Message');
        
        $email_body = "Name: $name\n";
        $email_body .= "Email: $email\n";
        if (!empty($subject)) {
            $email_body .= "Subject: $subject\n";
        }
        $email_body .= "\nMessage:\n$user_message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $email_subject, $email_body, $headers)) {
            $message = 'Thank you for your message! I will get back to you soon.';
            $message_type = 'success';
            
            // Clear form fields on success
            $name = $email = $subject = $user_message = '';
        } else {
            $message = 'Sorry, there was an error sending your message. Please try again later.';
            $message_type = 'error';
        }
    }
}

// Return data for use in contact.php
return [
    'message' => $message,
    'message_type' => $message_type,
    'form_data' => [
        'name' => $name ?? '',
        'email' => $email ?? '',
        'subject' => $subject ?? '',
        'user_message' => $user_message ?? ''
    ]
];
?>
