<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = strip_tags(trim($_POST["name"]));
  $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = htmlspecialchars(trim($_POST["message"]));
  $year    = date('Y');

  $to      = "magnus@anoteros.se";
  $subject = "New message from the website: $name";

  $html_body = "
  <!DOCTYPE html>
  <html lang='en'>
  <head><meta charset='UTF-8'><meta name='viewport' content='width=device-width,initial-scale=1.0'></head>
  <body style='margin:0;padding:0;background-color:#f5f0eb;font-family:Georgia,serif;'>
    <table width='100%' cellpadding='0' cellspacing='0' style='background-color:#f5f0eb;padding:40px 0;'>
      <tr><td align='center'>
        <table width='600' cellpadding='0' cellspacing='0' style='max-width:600px;width:100%;'>

          <!-- Header -->
          <tr>
            <td style='background-color:#1a1410;padding:36px 48px;border-radius:6px 6px 0 0;'>
              <p style='margin:0;font-family:Georgia,serif;font-size:22px;color:#f0930a;letter-spacing:0.04em;'>Anoteros AB</p>
              <p style='margin:6px 0 0;font-size:11px;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.4);font-family:Arial,sans-serif;'>New message from the website</p>
            </td>
          </tr>

          <!-- Orange rule -->
          <tr><td style='height:3px;background:linear-gradient(90deg,#f0930a 0%,#d07d00 100%);'></td></tr>

          <!-- Body -->
          <tr>
            <td style='background-color:#ffffff;padding:48px;border-radius:0 0 6px 6px;'>

              <p style='margin:0 0 32px;font-family:Georgia,serif;font-size:18px;font-style:italic;color:#1a1410;line-height:1.5;'>
                Someone has reached out through your website.
              </p>

              <table width='100%' cellpadding='0' cellspacing='0' style='margin-bottom:32px;'>
                <tr><td style='height:1px;background:rgba(240,147,10,0.2);'></td></tr>
              </table>

              <!-- Name -->
              <table width='100%' cellpadding='0' cellspacing='0' style='margin-bottom:24px;'>
                <tr><td style='padding-bottom:6px;font-family:Arial,sans-serif;font-size:10px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:#f0930a;'>Name</td></tr>
                <tr><td style='padding:14px 18px;background:#fdf8f2;border-left:3px solid #f0930a;border-radius:0 3px 3px 0;font-family:Georgia,serif;font-size:16px;color:#1a1410;'>$name</td></tr>
              </table>

              <!-- Email -->
              <table width='100%' cellpadding='0' cellspacing='0' style='margin-bottom:24px;'>
                <tr><td style='padding-bottom:6px;font-family:Arial,sans-serif;font-size:10px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:#f0930a;'>Email</td></tr>
                <tr><td style='padding:14px 18px;background:#fdf8f2;border-left:3px solid #f0930a;border-radius:0 3px 3px 0;font-family:Georgia,serif;font-size:16px;color:#1a1410;'>
                  <a href='mailto:$email' style='color:#f0930a;text-decoration:none;'>$email</a>
                </td></tr>
              </table>

              <!-- Message -->
              <table width='100%' cellpadding='0' cellspacing='0' style='margin-bottom:40px;'>
                <tr><td style='padding-bottom:6px;font-family:Arial,sans-serif;font-size:10px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:#f0930a;'>Message</td></tr>
                <tr><td style='padding:18px;background:#fdf8f2;border-left:3px solid #f0930a;border-radius:0 3px 3px 0;font-family:Georgia,serif;font-size:15px;color:#4a3f35;line-height:1.8;'>$message</td></tr>
              </table>

              <!-- Reply CTA -->
              <table cellpadding='0' cellspacing='0'>
                <tr><td style='border-radius:2px;background-color:#f0930a;'>
                  <a href='mailto:$email' style='display:inline-block;padding:14px 32px;font-family:Arial,sans-serif;font-size:11px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#ffffff;text-decoration:none;'>
                    Reply to $name &rarr;
                  </a>
                </td></tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style='padding:28px 48px;text-align:center;'>
              <p style='margin:0;font-family:Arial,sans-serif;font-size:11px;color:#9b8e84;letter-spacing:0.06em;'>&copy; $year Anoteros AB &mdash; anoteros.se</p>
            </td>
          </tr>

        </table>
      </td></tr>
    </table>
  </body>
  </html>";

  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8\r\n";
  $headers .= "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $html_body, $headers)) {
    header("Location: thankyou.php");
    exit;
  } else {
    header("Location: index.php?error=1#contact");
    exit;
  }
}
