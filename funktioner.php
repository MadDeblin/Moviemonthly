<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $firstName = $_POST["firstname"];
  $lastName = $_POST["lastname"];
  $country = $_POST["country"];
  $subject = $_POST["subject"];

  // Compose the email message
  $to = "your_email@example.com"; // Replace with your email address
  $subject = "New contact form submission";
  $message = "First Name: $firstName\n";
  $message .= "Last Name: $lastName\n";
  $message .= "Country: $country\n";
  $message .= "Subject: $subject\n";

  // Send the email
  $headers = "From: $firstName $lastName <$to>";
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again.";
  }
}
?>