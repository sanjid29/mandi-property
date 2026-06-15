<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

$page_title = "M&I Property Services LLC – Professional Property Maintenance & Renovation, Paterson NJ";
$company_name = "M&I Property Services LLC";
$phone = "5512266118";
$phone_formatted = "(551) 226-6118";
$email = "client@mandiproperty.com";
$address = "440 Edmund Ave, Fl 2, Paterson, NJ 07502";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="M&I Property Services LLC – Trusted property maintenance, repair, lawn care, trash-outs, and renovations serving Paterson, NJ and surrounding areas." />
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

<!-- ===================== NAV ===================== -->
<header class="site-header" id="top">
  <nav class="nav-container">
    <a href="#top" class="nav-logo">
      <img src="assets/images/logo.png" alt="M&I Property Services Logo" class="logo-img" />
    </a>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="#services">Services</a></li>
      <li><a href="#why-us">Why Us</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#sms-terms">SMS Terms</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="#contact" class="btn btn-primary nav-cta">Get a Free Quote</a>
  </nav>
</header>

<!-- ===================== HERO ===================== -->
<section class="hero" id="hero">
  <div class="hero-bg"></div>

  <div class="hero-inner container">

    <div class="hero-content">
      <span class="hero-badge">
        <span class="badge-dot"></span>
        Licensed &amp; Insured · Paterson, NJ
      </span>
      <h1 class="hero-title">
        Property Care<br />
        <em>Done Right.</em>
      </h1>
      <p class="hero-subtitle">From lawn care and trash-outs to full repairs and lock installations — M&amp;I Property Services keeps your properties maintained, compliant, and market-ready.</p>
      <div class="hero-ctas">
        <a href="#contact" class="btn btn-primary btn-lg">
          Request a Free Estimate
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="#services" class="btn btn-ghost btn-lg">Our Services</a>
      </div>
      <div class="hero-pills">
        <div class="badge-pill">
          <span class="pill-check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
          Field-Verified Work
        </div>
        <div class="badge-pill">
          <span class="pill-check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
          HUD Certified Locks
        </div>
        <div class="badge-pill">
          <span class="pill-check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
          Rapid Response
        </div>
      </div>
    </div>

    <div class="hero-visual">
      <div class="hero-glow"></div>

      <div class="stat-chip stat-chip--tl">
        <span class="chip-num">6+</span>
        <span class="chip-lbl">Core Services</span>
      </div>
      <div class="stat-chip stat-chip--br">
        <span class="chip-num">HUD</span>
        <span class="chip-lbl">Key Certified</span>
      </div>

      <div class="photo-mosaic">
        <div class="mosaic-col mosaic-col--left">
          <div class="mosaic-img mosaic-img--tall">
            <img src="assets/images/work2.jpg" alt="Completed LVP flooring installation" />
            <div class="mosaic-tag">Flooring Complete</div>
          </div>
          <div class="mosaic-img mosaic-img--short">
            <img src="assets/images/work6.jpg" alt="Subfloor and stair framing work" />
          </div>
        </div>
        <div class="mosaic-col mosaic-col--right">
          <div class="mosaic-img mosaic-img--short">
            <img src="assets/images/work3.jpg" alt="Staircase refinish" />
          </div>
          <div class="mosaic-img mosaic-img--mid">
            <img src="assets/images/work4.jpg" alt="Active flooring job site" />
            <div class="mosaic-tag">In Progress</div>
          </div>
          <div class="mosaic-img mosaic-img--short">
            <img src="assets/images/work7.jpg" alt="Subfloor ready for install" />
          </div>
        </div>
      </div>

      <div class="hero-accent-bar"></div>
    </div>

  </div>

  <div class="hero-scroll-hint">
    <span>Scroll</span>
    <div class="scroll-line"></div>
  </div>
</section>

<!-- ===================== TRUST BAR ===================== -->
<div class="trust-bar">
  <div class="trust-bar-inner">
    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
      Licensed &amp; Insured in NJ
    </div>
    <span class="trust-sep"></span>
    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
      HUD Key Certified
    </div>
    <span class="trust-sep"></span>
    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      24/7 Field Availability
    </div>
    <span class="trust-sep"></span>
    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"/></svg>
      Photo-Verified Work
    </div>
    <span class="trust-sep"></span>
    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
      Paterson, NJ &amp; Surrounding Areas
    </div>
    <span class="trust-sep"></span>
    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
      Residential &amp; Commercial
    </div>
  </div>
</div>

<!-- ===================== SERVICES ===================== -->
<section class="section services-section" id="services">
  <div class="container">
    <div class="section-header">
      <span class="section-label">What We Do</span>
      <h2 class="section-title">Comprehensive Property Services</h2>
      <p class="section-subtitle">A single source for every stage of property care — from routine maintenance to complete transformation.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>',
          'title' => 'Lock Change &amp; Lock Box Installation',
          'desc' => 'Secure properties with HUD keys and other specialized locks according to client requirements.',
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg>',
          'title' => 'Trash-Outs',
          'desc' => 'Clear away property debris quickly and at a competitive rate, leaving your property clean and ready.',
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z" /></svg>',
          'title' => 'Interior Refresh',
          'desc' => 'Keep homes sparkling with professional mopping, wiping, and polishing of all interior surfaces.',
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>',
          'title' => 'Lawn &amp; Snow Care',
          'desc' => 'Ensure properties look their best — grass cutting in summer or snow removal in winter.',
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" /></svg>',
          'title' => 'Trimming &amp; Landscaping',
          'desc' => 'Shape up trees, shrubs, and vines for well-manicured, professionally maintained landscapes.',
        ],
        [
          'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" /></svg>',
          'title' => 'Repairs &amp; Maintenance',
          'desc' => 'From HVAC filter replacements to flooring installations and paint touch-ups — we handle it all.',
        ],
      ];
      foreach ($services as $i => $s):
        $num = sprintf('%02d', $i + 1);
      ?>
      <div class="service-card">
        <span class="service-num"><?= $num ?></span>
        <div class="service-icon"><?= $s['icon'] ?></div>
        <h3 class="service-title"><?= $s['title'] ?></h3>
        <p class="service-desc"><?= $s['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================== WHY US ===================== -->
<section class="section why-section" id="why-us">
  <div class="container">
    <div class="why-inner">
      <div class="why-text">
        <span class="section-label">Why Choose Us</span>
        <h2 class="section-title">Your Trusted Property Partner</h2>
        <p>We work directly with property managers, investors, and asset owners who need reliable, documented, photo-verified field crews. Our team communicates in real time — sending progress photos, repair estimates, and status updates so you're always in the loop.</p>
        <ul class="why-list">
          <li>
            <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Real-time photo verification of all field work
          </li>
          <li>
            <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Transparent estimate communication via SMS
          </li>
          <li>
            <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            HUD-compliant lock installations
          </li>
          <li>
            <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Single point of contact for all your property needs
          </li>
          <li>
            <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Fast response — residential &amp; commercial
          </li>
        </ul>
        <a href="#contact" class="btn btn-primary">Partner With Us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      </div>
      <div class="why-stats">
        <div class="stat-card">
          <div class="stat-num">6+</div>
          <div class="stat-label">Core Services</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">24/7</div>
          <div class="stat-label">Field Availability</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">NJ</div>
          <div class="stat-label">Licensed &amp; Insured</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">HUD</div>
          <div class="stat-label">Key Certified</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PORTFOLIO ===================== -->
<section class="section portfolio-section" id="portfolio">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Our Work</span>
      <h2 class="section-title">Project Portfolio</h2>
      <p class="section-subtitle">Real field work — flooring installations, stair refinishing, and active job site progress documented by our crews.</p>
    </div>
    <div class="portfolio-grid">
      <?php
      $portfolio = [
        ['img' => 'work2.jpg', 'tag' => 'Flooring', 'title' => 'LVP Floor Installation – Completed'],
        ['img' => 'work3.jpg', 'tag' => 'Interior', 'title' => 'Staircase &amp; Landing Refinish'],
        ['img' => 'work4.jpg', 'tag' => 'In Progress', 'title' => 'Flooring Buildout – Active Job Site'],
        ['img' => 'work5.jpg', 'tag' => 'Repairs', 'title' => 'Tool &amp; Material Staging'],
        ['img' => 'work6.jpg', 'tag' => 'Repairs', 'title' => 'Subfloor Prep &amp; Stair Framing'],
        ['img' => 'work7.jpg', 'tag' => 'Flooring', 'title' => 'Subfloor Ready for Installation'],
      ];
      foreach ($portfolio as $i => $p):
        $featured = ($i === 0) ? ' portfolio-card--featured' : '';
      ?>
      <div class="portfolio-card<?= $featured ?>">
        <div class="portfolio-img-wrap">
          <img src="assets/images/<?= $p['img'] ?>" alt="<?= $p['title'] ?>" loading="lazy" />
          <div class="portfolio-overlay">
            <span class="portfolio-tag"><?= $p['tag'] ?></span>
          </div>
        </div>
        <div class="portfolio-info">
          <h4><?= $p['title'] ?></h4>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================== CTA BANNER ===================== -->
<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div class="cta-text">
        <h2 class="cta-title">Ready to get your property<br><em>in top shape?</em></h2>
        <p>Fast estimates. Real photos. No surprises. Reach out today and we'll respond within one business day.</p>
      </div>
      <div class="cta-actions">
        <a href="#contact" class="btn btn-primary btn-lg">
          Get a Free Quote
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="tel:<?= $phone ?>" class="btn btn-ghost btn-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
          <?= $phone_formatted ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SMS TERMS ===================== -->
<section class="section sms-section" id="sms-terms">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Legal</span>
      <h2 class="section-title">SMS Terms &amp; Conditions</h2>
    </div>
    <div class="sms-content">
      <div class="sms-accordion">

        <details class="sms-item" open>
          <summary>1. Introduction</summary>
          <p><?= htmlspecialchars($company_name) ?> may disclose Personal Data and other information as follows:</p>
          <ul>
            <li><strong>Third Parties that Help Provide the Messaging Service:</strong> We will not share your opt-in to an SMS short code campaign with a third party for purposes unrelated to supporting you in connection with that campaign. We may share your Personal Data with third parties that help us provide the messaging service, including platform providers, phone companies, and other vendors who assist in the delivery of text messages.</li>
            <li><strong>Additional Disclosures – Affiliates:</strong> We may disclose Personal Data to our affiliates or subsidiaries; their use and disclosure will be subject to this Policy.</li>
            <li><strong>Text messaging originator opt-in data and consent will not be shared with any third parties.</strong></li>
          </ul>
        </details>

        <details class="sms-item">
          <summary>2. Purpose of SMS Notifications</summary>
          <p>Our SMS notifications are used to communicate with our field crews who work at client properties for maintenance tasks such as grass cutting, shrub trimming, and repairs. Field crews send photos showing work status or estimates for repair work, and we verify and instruct accordingly.</p>
        </details>

        <details class="sms-item">
          <summary>3. Opt-In and Consent</summary>
          <p>By providing your phone number and opting into our SMS notifications, you confirm you are the owner or authorized user of the number provided. You consent to receive recurring automated text messages (SMS, MMS) regarding scheduled visits, service updates, offers, and other important notifications. Consent is not required to make any purchase. Message frequency may vary — generally expect 1–5 messages per week.</p>
        </details>

        <details class="sms-item">
          <summary>4. Opt-Out Instructions</summary>
          <p>Your consent is entirely voluntary. You may opt-out at any time:</p>
          <ul>
            <li>Reply <strong>STOP</strong>, <strong>END</strong>, <strong>CANCEL</strong>, <strong>UNSUBSCRIBE</strong>, or <strong>QUIT</strong> to any SMS from us.</li>
            <li>Email us at <a href="mailto:<?= $email ?>"><?= $email ?></a> with your opt-out request.</li>
            <li>You will receive a final confirmation message; no further messages will be sent unless you re-enroll.</li>
          </ul>
        </details>

        <details class="sms-item">
          <summary>5. Help &amp; Support</summary>
          <p>If you need assistance with SMS notifications:</p>
          <ul>
            <li>Reply <strong>HELP</strong> to any message.</li>
            <li>Email us at <a href="mailto:<?= $email ?>"><?= $email ?></a>.</li>
          </ul>
        </details>

        <details class="sms-item">
          <summary>6. Message and Data Rates</summary>
          <p>Standard message and data rates may apply. Please consult your mobile service provider for details regarding your text plan or data rates.</p>
        </details>

        <details class="sms-item">
          <summary>7. Privacy and Data Security</summary>
          <p>We value your privacy and are committed to protecting your personal information. Your data will be used solely for managing service appointments, processing payments, and ensuring proper communication. We do not sell, rent, or share your personal information with third parties for marketing purposes.</p>
        </details>

        <details class="sms-item">
          <summary>8. Data Retention</summary>
          <p>We retain your personal information only as long as necessary to fulfill the purposes for which it was collected, including legal, accounting, or reporting requirements. After this period, your data will be securely deleted or anonymized.</p>
        </details>

        <details class="sms-item">
          <summary>9. Compliance with Regulations</summary>
          <p>We comply with all relevant laws and regulations, including the Telephone Consumer Protection Act (TCPA) and CTIA guidelines.</p>
        </details>

        <details class="sms-item">
          <summary>10. Indemnification</summary>
          <p>You agree to indemnify, defend, and hold us harmless from any privacy, tort, or other claims, including claims under the TCPA or state law equivalents, arising from your provision of a telephone number not owned by you and/or failure to notify us of changes to your mobile number.</p>
        </details>

        <details class="sms-item">
          <summary>11. Participation Requirements</summary>
          <ul>
            <li>Be 18 years of age or older.</li>
            <li>Own a wireless device capable of two-way messaging.</li>
            <li>Be a subscriber to a wireless service with text messaging capabilities.</li>
          </ul>
        </details>

        <details class="sms-item">
          <summary>12. Dispute Resolution and Arbitration</summary>
          <p>By using our SMS service, you agree to resolve any disputes on an individual basis, not as part of any class or representative action. You waive your right to a trial by jury and agree claims will be resolved through final and binding arbitration.</p>
        </details>

        <details class="sms-item">
          <summary>13. Miscellaneous</summary>
          <p>We reserve the right to modify these Terms and Conditions at any time. Any updates will be communicated via SMS or email, and your continued participation constitutes acceptance of the modified terms.</p>
        </details>

        <details class="sms-item">
          <summary>14. Contact Information</summary>
          <ul>
            <li>Email: <a href="mailto:<?= $email ?>"><?= $email ?></a></li>
            <li>Phone: <a href="tel:<?= $phone ?>"><?= $phone_formatted ?></a></li>
            <li>Mailing Address: <?= htmlspecialchars($address) ?></li>
          </ul>
        </details>

      </div>
    </div>
  </div>
</section>

<!-- ===================== CONTACT ===================== -->
<section class="section contact-section" id="contact">
  <div class="container">
    <div class="contact-inner">
      <div class="contact-info">
        <span class="section-label">Get In Touch</span>
        <h2 class="section-title">Request a Free Estimate</h2>
        <p>Tell us about your property and project needs. We'll respond within one business day.</p>
        <div class="contact-details">
          <div class="contact-item">
            <span class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg></span>
            <div>
              <strong>Email</strong>
              <a href="mailto:<?= $email ?>"><?= $email ?></a>
            </div>
          </div>
          <div class="contact-item">
            <span class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg></span>
            <div>
              <strong>Phone</strong>
              <a href="tel:<?= $phone ?>"><?= $phone_formatted ?></a>
            </div>
          </div>
          <div class="contact-item">
            <span class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg></span>
            <div>
              <strong>Mailing Address</strong>
              <span><?= htmlspecialchars($address) ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form-wrap">
        <?php
        $form_success = false;
        $form_error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_inquiry'])) {
          $name    = htmlspecialchars(trim($_POST['full_name'] ?? ''));
          $cemail  = htmlspecialchars(trim($_POST['email'] ?? ''));
          $cphone  = htmlspecialchars(trim($_POST['phone'] ?? ''));
          $service = htmlspecialchars(trim($_POST['service'] ?? ''));
          $details = htmlspecialchars(trim($_POST['details'] ?? ''));
          if ($name && $cemail && $details) {
            try {
              $resend  = Resend::client(RESEND_API_KEY);
              $subject = "New Estimate Request from $name – M&I Property Services";
              $htmlBody = nl2br("Name: $name\nEmail: $cemail\nPhone: $cphone\nService: $service\n\nDetails:\n$details");
              $resend->emails->send([
                'from'     => RESEND_FROM,
                'to'       => [$email],
                'reply_to' => $cemail,
                'subject'  => $subject,
                'html'     => "<p>$htmlBody</p>",
              ]);
              $form_success = true;
            } catch (\Exception $e) {
              $form_error = 'Message could not be sent. Please email us directly.';
            }
          } else {
            $form_error = 'Please fill in all required fields.';
          }
        }
        ?>
        <?php if ($form_success): ?>
          <div class="form-success">
            <div class="success-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h3>Message Sent!</h3>
            <p>Thank you — we'll be in touch within one business day.</p>
          </div>
        <?php else: ?>
        <form class="contact-form" method="POST" action="#contact">
          <?php if ($form_error): ?>
            <div class="form-error"><?= $form_error ?></div>
          <?php endif; ?>
          <div class="form-row">
            <div class="form-group">
              <label for="full_name">Full Name <span>*</span></label>
              <input type="text" id="full_name" name="full_name" placeholder="John Smith" required />
            </div>
            <div class="form-group">
              <label for="email">Email <span>*</span></label>
              <input type="email" id="email" name="email" placeholder="john@example.com" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" placeholder="(555) 000-0000" />
            </div>
            <div class="form-group">
              <label for="service">Service Needed</label>
              <select id="service" name="service">
                <option value="">Select a service...</option>
                <option>Lock Change &amp; Lock Box Installation</option>
                <option>Trash-Outs</option>
                <option>Interior Refresh</option>
                <option>Lawn &amp; Snow Care</option>
                <option>Trimming &amp; Landscaping</option>
                <option>Repairs &amp; Maintenance</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="details">Project Details <span>*</span></label>
            <textarea id="details" name="details" rows="5" placeholder="Describe your property and what needs to be done..." required></textarea>
          </div>
          <button type="submit" name="send_inquiry" class="btn btn-primary btn-full">
            Send Message
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
          <p class="form-sms-note">By submitting, you consent to receive SMS updates about your inquiry. Reply STOP to opt out. Msg &amp; data rates may apply.</p>
        </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-inner">
      <div class="footer-brand">
        <img src="assets/images/logo.png" alt="M&I Property Services" class="footer-logo" />
        <p>Professional property maintenance, repair, and renovation services. Licensed, insured, and committed to excellence.</p>
      </div>
      <div class="footer-links">
        <h4>Services</h4>
        <ul>
          <li><a href="#services">Lock Change &amp; Lock Box</a></li>
          <li><a href="#services">Trash-Outs</a></li>
          <li><a href="#services">Interior Refresh</a></li>
          <li><a href="#services">Lawn &amp; Snow Care</a></li>
          <li><a href="#services">Trimming &amp; Landscaping</a></li>
          <li><a href="#services">Repairs &amp; Maintenance</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h4>Contact</h4>
        <ul>
          <li><a href="mailto:<?= $email ?>"><?= $email ?></a></li>
          <li><a href="tel:<?= $phone ?>"><?= $phone_formatted ?></a></li>
          <li><?= htmlspecialchars($address) ?></li>
        </ul>
        <div class="footer-quick">
          <a href="#sms-terms">SMS Terms</a>
          <a href="#top">Privacy Policy</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($company_name) ?>. All rights reserved. Licensed &amp; Insured.</p>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
