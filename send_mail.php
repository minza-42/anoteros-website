<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST["message"]);

  $to = "magnus@anoteros.se";
  $subject = "New contact from the website: $name";
  $content = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $content, $headers)) {
    header("Location: thankyou.php");
    exit;
  } else {
    header("Location: index.php?error=1#contact");
    exit;
  }
}
