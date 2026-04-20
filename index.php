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
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav>
    <a href="#" class="nav-logo">
      <svg viewBox="0 0 52 68" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M44 3C44 3 8 16 6 47C6 47 16 34 26 32C16 44 13 60 17 66C17 66 19 52 26 45C33 38 48 26 44 3Z" fill="#f0930a" />
        <path d="M17 66 Q20 56 26 45" stroke="#f0930a" stroke-width="2.5" stroke-linecap="round" />
      </svg>
      <span class="nav-logo-text">Anoteros</span>
    </a>
    <ul class="nav-links">
      <li><a href="#om">Om oss</a></li>
      <li><a href="#tjanster">Tjänster</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </nav>

  <section class="hero">
    <svg class="hero-bg-feather" viewBox="0 0 300 400" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path d="M260 10C260 10 20 80 10 260C10 260 80 180 140 170C80 240 60 340 90 370C90 370 100 280 140 240C180 200 280 130 260 10Z" fill="#f0930a" />
      <path d="M90 370 Q110 300 140 240" stroke="#f0930a" stroke-width="8" stroke-linecap="round" />
    </svg>
    <div class="hero-content">
      <div class="hero-eyebrow fade-up">Stockholm, Sverige</div>
      <h1 class="fade-up td08">Din partner<br>i <span class="accent">digitala</span><br>projekt.</h1>
      <p class="hero-desc fade-up td16">Anoteros AB levererar kompetens och erfarenhet inom IT-konsulting, dataanalys och projektledning.</p>
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
        <blockquote>"Analog visdom i en digital värld — erfarenhet är vår skarpaste penna."</blockquote>
      </div>
    </div>
    <div class="about-main fade-up td10">
      <h2>Kompetens som <em>levererar</em> resultat.</h2>
      <p>Anoteros AB är ett konsultbolag med djup förankring i skärningspunkten mellan verksamhet och teknik. Vi hjälper organisationer att navigera komplexa digitala utmaningar med klarhet och struktur.</p>
      <p>Vår styrka ligger i förmågan att förstå både det strategiska och det operativa — att se helheten och simultaneously hantera detaljerna som avgör om ett projekt lyckas.</p>
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
        <p>Har du ett projekt på gång eller söker du en erfaren partner? Fyll i formuläret så återkommer vi inom kort.</p>
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
      <svg viewBox="0 0 52 68" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M44 3C44 3 8 16 6 47C6 47 16 34 26 32C16 44 13 60 17 66C17 66 19 52 26 45C33 38 48 26 44 3Z" fill="#f0930a" />
        <path d="M17 66 Q20 56 26 45" stroke="#f0930a" stroke-width="2.5" stroke-linecap="round" />
      </svg>
      <span class="footer-logo-text">Anoteros AB</span>
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