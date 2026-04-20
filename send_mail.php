<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST["message"]);

  $to = "info@anoteros.se"; // Ändra till din e-post
  $subject = "Ny kontakt från webbplatsen: $name";
  $content = "Namn: $name\nE-post: $email\n\nMeddelande:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $content, $headers)) {
    echo "Tack för ditt meddelande! Vi återkommer snart.";
  } else {
    echo "Något gick fel, försök igen senare.";
  }
}
