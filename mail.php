<?php
require 'PHPMailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mail = new PHPMailer;

    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'mail.shyamalaheritagehomes.com'; // Adjust if different, common for cPanel is mail.domain.com
    $mail->SMTPAuth = true;
    $mail->Username = 'info@shyamalaheritagehomes.com';
    $mail->Password = 'Shyamala#2026#'; // Password provided by user
    $mail->SMTPSecure = 'ssl'; // Use 'tls' or 'ssl'
    $mail->Port = 465; // 465 for ssl, 587 for tls

    $mail->setFrom('info@shyamalaheritagehomes.com', 'Shyamala Heritage Homes');
    $mail->addAddress('info@shyamalaheritagehomes.com');
    $mail->addCC('himviewholidays@gmail.com');

    // Determine if it's a Volunteer Application or a General Enquiry
    if (isset($_POST['why_volunteer'])) {
        // Volunteer Application
        $subject = "New Volunteer Application - Shyamala Heritage Homes";
        
        $name = $_POST['name'] ?? 'N/A';
        $age = $_POST['age'] ?? 'N/A';
        $phone = $_POST['phone'] ?? 'N/A';
        $email = $_POST['email'] ?? 'N/A';
        $city = $_POST['city'] ?? 'N/A';
        $hear_source = $_POST['hear_source'] ?? 'N/A';
        $why_volunteer = $_POST['why_volunteer'] ?? 'N/A';
        $interests = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : 'None';
        $hours_commitment = $_POST['hours_commitment'] ?? 'N/A';
        $dogs_comfort = $_POST['dogs_comfort'] ?? 'N/A';
        $past_experience = $_POST['past_experience'] ?? 'N/A';
        $past_experience_desc = $_POST['past_experience_desc'] ?? 'N/A';
        $preferred_days = isset($_POST['preferred_days']) ? implode(", ", $_POST['preferred_days']) : 'None';
        $emergency_contact = $_POST['emergency_contact'] ?? 'N/A';
        $health_conditions = $_POST['health_conditions'] ?? 'N/A';
        $extra_info = $_POST['extra_info'] ?? 'N/A';

        $body = "
        <h3>New Volunteer Application Received</h3>
        <p><strong>Full Name:</strong> $name</p>
        <p><strong>Age:</strong> $age</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>How did they hear:</strong> $hear_source</p>
        <p><strong>Why volunteer:</strong><br>$why_volunteer</p>
        <p><strong>Interests:</strong> $interests</p>
        <p><strong>Weekly Commitment:</strong> $hours_commitment</p>
        <p><strong>Comfort with Dogs:</strong> $dogs_comfort</p>
        <p><strong>Past Experience:</strong> $past_experience</p>
        <p><strong>Experience Description:</strong><br>$past_experience_desc</p>
        <p><strong>Preferred Days:</strong> $preferred_days</p>
        <p><strong>Emergency Contact:</strong> $emergency_contact</p>
        <p><strong>Health/Allergies:</strong><br>$health_conditions</p>
        <p><strong>Anything else:</strong><br>$extra_info</p>
        ";
    } else {
        // General Enquiry
        $name = $_POST['name'] ?? 'N/A';
        $phone = $_POST['phone'] ?? 'N/A';
        $email = $_POST['email'] ?? 'N/A';
        $city = $_POST['city'] ?? 'N/A';
        $destination = $_POST['destination'] ?? 'N/A';
        
        $subject = "New Trip Enquiry - Shyamala Heritage Homes";
        $body = "
        <h3>New Trip Enquiry Received</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>Destination:</strong> $destination</p>
        ";
    }

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    if ($email != 'N/A') {
        $mail->addReplyTo($email, $name);
    }

    if(!$mail->send()) {
        // Log error if needed: echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }

    header("Location: thanks.php");
    exit();
}
?>
