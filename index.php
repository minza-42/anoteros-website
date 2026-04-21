<?php
$site_title = "Anoteros AB";
$tagline = "Kompetens och Erfarenhet till Dina Projekt";
$email = "info@anoteros.se";

$services = [
  [
    "title" => "IT-Konsulttjänster",
    "desc" => "Strategisk rådgivning och ledning i digitala projekt — från konceptfas till leverans."
  ],
  [
    "title" => "Dataanalys & BI",
    "desc" => "Omvärldsanalys och Business Intelligence som omvandlar data till handlingskraftiga insikter."
  ],
  [
    "title" => "Projektledning",
    "desc" => "Den kritiska länken mellan verksamhet och IT som säkerställer optimal leverans varje gång."
  ]
];
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $site_title; ?> — <?php echo $tagline; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/Anoteros_orange_gåspenna.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav>
    <a href="#" class="nav-logo">
      <img src="img/Anoteros_logo_rgb.png" alt="Anoteros" class="nav-logo-img">
    </a>
    <ul class="nav-links">
      <li><a href="#om">Om oss</a></li>
      <li><a href="#tjanster">Tjänster</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </nav>

  <section class="hero">
    <img src="img/Anoteros_orange_gåspenna.png" alt="" class="hero-bg-feather" aria-hidden="true">
    <div class="hero-content">
      <div class="hero-eyebrow fade-up">Stockholm, Sverige</div>
      <h1 class="fade-up td08">Den erfarna<br><span class="accent">analoga</span><br>partnern.</h1>
      <p class="hero-desc fade-up td16">Jag heter Magnus O Karlsson — grundare av Anoteros AB. Jag jobbar nära och tillsammans med dig inom IT-konsulting, dataanalys och projektledning.</p>
      <div class="hero-actions fade-up td24">
        <a href="#kontakt" class="btn-primary">Kontakta oss</a>
        <a href="#tjanster" class="btn-ghost">Se tjänster</a>
      </div>
    </div>
  </section>

  <div class="strip" aria-hidden="true">
    <div class="strip-inner">
      <?php $items = ["IT-Konsulttjänster", "Dataanalys", "Business Intelligence", "Projektledning", "Digital Strategi", "Stockholm"];
      for ($r = 0; $r < 4; $r++) foreach ($items as $it): ?>
        <span class="strip-item"><?php echo $it; ?></span><span class="strip-dot">·</span>
      <?php endforeach; ?>
    </div>
  </div>

  <section id="om">
    <div class="about-aside fade-up">
      <div class="about-aside-inner">
        <div class="about-aside-label">Vår filosofi</div>
        <blockquote>"Jag vill vara den erfarna analoga partnern i era digitala projekt."</blockquote>
        <div class="about-aside-name">Magnus O Karlsson<br><span>Grundare, Anoteros AB</span></div>
      </div>
    </div>
    <div class="about-main fade-up td10">
      <h2>Nära samarbete som <em>levererar</em> resultat.</h2>
      <p>Jag jobbar med konsulttjänster inom IT, konkurrent- och omvärldsanalyser samt dataanalyser av olika slag — business intelligence och analytics.</p>
      <p>Det finns en viktig roll att fylla i projekten mellan verksamheten och IT, speciellt om leveransen sker med en extern leverantör. Någon ska kunna förklara vad verksamheten vill ha gjort, hur det kan ske optimalt i den tillgängliga systemmiljön och vilka ömsesidiga kompromisser som är smarta och nödvändiga.</p>
      <p>Verksamhetens personal är den viktigaste källan till information. Jag vill skapa en miljö där de kan komma till tals och vara en daglig samarbetspartner — oavsett om det gäller kravspecifikation, lösningsdesign, testexekvering, utbildning eller driftsättning.</p>
    </div>
  </section>

  <section id="tjanster">
    <div class="services-wrap">
      <div class="services-top fade-up">
        <h2>Våra <em>tjänster.</em></h2>
        <p>Tre kärnkompetenser som täcker hela spektrumet av digitala transformationsutmaningar.</p>
      </div>
      <div class="services-list">
        <?php foreach ($services as $i => $s): ?>
          <div class="service-card fade-up <?php echo 'td' . str_replace('.', '', sprintf('%.2f', $i * 0.1)); ?>">
            <div class="service-num">0<?php echo $i + 1; ?></div>
            <h3><?php echo $s['title']; ?></h3>
            <p><?php echo $s['desc']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="kontakt">
    <div class="contact-wrap">
      <div class="contact-left fade-up">
        <h2>Låt oss <em>prata.</em></h2>
        <p>Har du ett projekt på gång eller söker du en erfaren partner som kan vara bryggan mellan din verksamhet och IT? Fyll i formuläret så återkommer jag inom kort.</p>
        <div class="contact-details">
          <div class="cd-item">
            <div class="cd-label">E-post</div>
            <div class="cd-val"><?php echo $email; ?></div>
          </div>
        </div>
      </div>
      <form action="send_mail.php" method="POST" class="contact-form fade-up td12">
        <div class="ff">
          <label for="name">Namn</label>
          <input type="text" id="name" name="name" placeholder="Ditt fullständiga namn" required autocomplete="name">
        </div>
        <div class="ff">
          <label for="email">E-post</label>
          <input type="email" id="email" name="email" placeholder="din@epost.se" required autocomplete="email">
        </div>
        <div class="ff">
          <label for="message">Meddelande</label>
          <textarea id="message" name="message" placeholder="Berätta om ditt projekt..." required autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn-submit">Skicka meddelande</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="footer-logo">
      <img src="img/Anoteros_logo_gåspenna_vit.png" alt="Anoteros AB" class="footer-logo-img">
    </div>
    <p>© <?php echo date("Y"); ?> — Alla rättigheter förbehållna</p>
  </footer>

  <script>
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('visible');
      });
    }, {
      threshold: 0.1
    });
    document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
  </script>
</body>

</html>