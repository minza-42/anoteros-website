<?php
$site_title = "Anoteros AB";
$tagline = "Expertise and Experience for Your Projects";
$email = "magnus@anoteros.se";

$services = [
  [
    "title" => "IT Consulting",
    "desc" => "Strategic advisory and leadership in digital projects — from concept to delivery."
  ],
  [
    "title" => "Data Analysis & BI",
    "desc" => "Competitive intelligence and analytics that transforms data into actionable insights."
  ],
  [
    "title" => "Project Management",
    "desc" => "The critical link between business and IT that ensures optimal delivery every time."
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

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
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <section class="hero">
    <img src="img/Anoteros_orange_gåspenna.png" alt="" class="hero-bg-feather" aria-hidden="true">
    <div class="hero-content">
      <div class="hero-eyebrow fade-up">Stockholm, Sweden</div>
      <h1 class="fade-up td08">The experienced<br><span class="accent">analogue</span><br>partner.</h1>
      <p class="hero-tagline fade-up td12"><?php echo $tagline; ?></p>
      <p class="hero-desc fade-up td16">My name is Magnus O Karlsson — founder, owner, and currently the only employee of Anoteros AB. I deliver consulting services in IT, competitive intelligence and analytics.</p>
      <div class="hero-actions fade-up td24">
        <a href="#contact" class="btn-primary">Contact us</a>
        <a href="#services" class="btn-ghost">View services</a>
      </div>
    </div>
  </section>

  <div class="strip" aria-hidden="true">
    <div class="strip-inner">
      <?php $items = ["IT Consulting", "Competitive Intelligence", "Business Intelligence", "Project Management", "Digital Strategy", "Stockholm"];
      for ($r = 0; $r < 4; $r++) foreach ($items as $it): ?>
        <span class="strip-item"><?php echo $it; ?></span><span class="strip-dot">·</span>
      <?php endforeach; ?>
    </div>
  </div>

  <section id="about">
    <div class="about-aside fade-up">
      <div class="about-aside-inner">
        <div class="about-aside-label">Our philosophy</div>
        <blockquote>"With Anoteros AB I want to be the experienced, analogue resource in your digital projects."</blockquote>
        <div class="about-aside-name">Magnus O Karlsson<br><span>Founder, Anoteros AB</span></div>
      </div>
    </div>
    <div class="about-main fade-up td10">
      <h2>Close collaboration that <em>delivers</em> results.</h2>
      <p>There is an important role to fill in bridging the gap between the business and IT — especially when delivery is handled by an external supplier. Someone needs to explain what the business wants done, how to achieve it optimally within the available system landscape, and which compromises are smart and necessary.</p>
      <p>The organisation's staff are the most valuable source of information. I want to create an environment where they become an active, visible partner in the daily work — getting the job done together with the IT vendor, whether it concerns requirements specification, solution design, test execution, training or deployment.</p>
    </div>
  </section>

  <section id="services">
    <div class="services-wrap">
      <div class="services-top fade-up">
        <h2>Our <em>services.</em></h2>
        <p>Three core competencies covering the full spectrum of digital transformation challenges.</p>
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

  <section id="contact">
    <div class="contact-wrap">
      <div class="contact-left fade-up">
        <h2>Let's <em>talk.</em></h2>
        <p>Do you have a project underway or are you looking for an experienced partner who can bridge the gap between your business and IT? Fill in the form and I'll get back to you shortly.</p>
        <div class="contact-details">
          <div class="cd-item">
            <div class="cd-label">Email</div>
            <div class="cd-val"><?php echo $email; ?></div>
          </div>
          <div class="cd-item">
            <div class="cd-label">LinkedIn</div>
            <div class="cd-val">
              <a href="https://www.linkedin.com/in/magnus-o-karlsson/" target="_blank" rel="noopener" aria-label="LinkedIn">
                <img src="img/linkedin-svgrepo-com.svg" alt="LinkedIn" width="20" height="20" style="vertical-align:middle;margin-right:6px;">
                Magnus O Karlsson
              </a>
            </div>
          </div>
        </div>
      </div>
      <form action="send_mail.php" method="POST" class="contact-form fade-up td12">
        <div class="ff">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your full name" required autocomplete="name">
        </div>
        <div class="ff">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="your@email.com" required autocomplete="email">
        </div>
        <div class="ff">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Tell me about your project..." required autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn-submit">Send message</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="footer-logo">
      <img src="img/Anoteros_logo_gåspenna_vit.png" alt="Anoteros AB" class="footer-logo-img">
    </div>
    <p>© <?php echo date("Y"); ?> — All rights reserved</p>
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