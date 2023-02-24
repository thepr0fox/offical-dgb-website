<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Do something with the form data (e.g. send an email)
  $to = 'muhammadvasim.1984@gmail.com';
  $subject = 'SIR,you got a new mail from your website';
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  mail($to, $subject, $body);

  // Redirect the user back to the contact page
  header('Location: contact.php?success=true');
  exit;
}
?>
