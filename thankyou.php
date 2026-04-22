<?php
$site_title = "Anoteros AB";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Sent — <?php echo $site_title; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/Anoteros_orange_gåspenna.png">
  <link rel="stylesheet" href="style.css">
  <style>
    .thankyou-page {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .thankyou-main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 8rem 4rem 5rem;
      position: relative;
      overflow: hidden;
    }

    .thankyou-bg-feather {
      position: absolute;
      right: -40px;
      top: 50%;
      transform: translateY(-52%);
      width: min(580px, 50vw);
      opacity: 0.06;
      pointer-events: none;
      z-index: 0;
      object-fit: contain;
    }

    .thankyou-content {
      position: relative;
      z-index: 1;
      max-width: 680px;
      text-align: left;
    }

    .thankyou-check {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: var(--orange-pale);
      border: 2px solid var(--orange);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 2.5rem;
      animation: pop-in 0.55s cubic-bezier(0.34, 1.56, 0.64, 1) both;
      animation-delay: 0.1s;
    }

    .thankyou-check svg {
      width: 22px;
      height: 22px;
      stroke: var(--orange);
      stroke-width: 2.5;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .thankyou-check svg path {
      stroke-dasharray: 30;
      stroke-dashoffset: 30;
      animation: draw-check 0.4s ease forwards;
      animation-delay: 0.5s;
    }

    @keyframes pop-in {
      from {
        opacity: 0;
        transform: scale(0.7);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes draw-check {
      to {
        stroke-dashoffset: 0;
      }
    }

    .thankyou-eyebrow {
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--orange);
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.9rem;
    }

    .thankyou-eyebrow::before {
      content: "";
      display: block;
      width: 2.5rem;
      height: 1.5px;
      background: var(--orange);
      border-radius: 2px;
    }

    .thankyou-content h1 {
      font-family: "Playfair Display", Georgia, serif;
      font-size: clamp(2.4rem, 5vw, 4.5rem);
      font-weight: 400;
      line-height: 1.1;
      letter-spacing: -0.025em;
      margin-bottom: 1.75rem;
    }

    .thankyou-content h1 em {
      font-style: italic;
      color: var(--orange);
    }

    .thankyou-body {
      font-size: 1.05rem;
      font-weight: 300;
      color: var(--mid);
      max-width: 44ch;
      line-height: 1.9;
      margin-bottom: 3rem;
    }

    .thankyou-divider {
      width: 3rem;
      height: 1.5px;
      background: var(--rule);
      margin-bottom: 3rem;
    }

    .thankyou-actions {
      display: flex;
      align-items: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    @media (max-width: 480px) {
      .thankyou-main {
        padding: 7rem 1.5rem 4rem;
      }

      .thankyou-actions {
        flex-direction: column;
        align-items: flex-start;
        gap: 1.25rem;
      }
    }
  </style>
</head>

<body class="thankyou-page">

  <nav>
    <a href="index.php" class="nav-logo">
      <img src="img/Anoteros_logo_rgb.png" alt="Anoteros" class="nav-logo-img">
    </a>
    <ul class="nav-links">
      <li><a href="index.php#about">About</a></li>
      <li><a href="index.php#services">Services</a></li>
      <li><a href="index.php#contact">Contact</a></li>
    </ul>
  </nav>

  <main class="thankyou-main">
    <img src="img/Anoteros_orange_gåspenna.png" alt="" class="thankyou-bg-feather" aria-hidden="true">

    <div class="thankyou-content">

      <div class="thankyou-check">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 13l4 4L19 7" />
        </svg>
      </div>

      <div class="thankyou-eyebrow fade-up visible">Message received</div>

      <h1 class="fade-up visible td08">Thank you for<br>reaching <em>out.</em></h1>

      <div class="thankyou-divider fade-up visible td10"></div>

      <p class="thankyou-body fade-up visible td12">
        Your message has been sent successfully. I'll review it and get back to you as soon as possible
      </p>

    </div>
  </main>

  <footer>
    <div class="footer-logo">
      <img src="img/Anoteros_logo_gåspenna_vit.png" alt="Anoteros AB" class="footer-logo-img">
    </div>
    <p>© <?php echo date("Y"); ?> — All rights reserved</p>
  </footer>

</body>

</html>