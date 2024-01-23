<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"]
    $message = $_POST["message"];

    // Simple form validation
    if (empty($name) || empty($email) || empty($number) || empty($message)) {
        echo "All fields are required!";
    } else {
        // Email configuration
        $to = "jayasuriya2401@gmail.com";
        $subject = "Enquiry from $name";
        $headers = "From: $email";

        // Compose the email message
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n\n";
        $email_message .= "Number: $number\n\n";
        $email_message .= "Message:\n$message";

        // Send the email
        $mail_success = mail($to, $subject, $email_message, $headers);

        if ($mail_success) {
            echo "Thank you for your enquiry! We will get back to you soon.";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
} else {
    // Redirect to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
