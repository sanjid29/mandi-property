<?php
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
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,600;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
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

    <!-- LEFT: Text -->
    <div class="hero-content">
      <span class="hero-badge">Licensed &amp; Insured · Paterson, NJ</span>
      <h1 class="hero-title">
        Property Care<br />
        <em>Done Right.</em>
      </h1>
      <p class="hero-subtitle">From lawn care and trash-outs to full repairs and lock installations — M&amp;I Property Services keeps your properties maintained, compliant, and market-ready.</p>
      <div class="hero-ctas">
        <a href="#contact" class="btn btn-primary btn-lg">Request a Free Estimate</a>
        <a href="#services" class="btn btn-outline btn-lg">Our Services</a>
      </div>
      <div class="hero-pills">
        <div class="badge-pill"><span class="pill-check">✓</span> Field-Verified Work</div>
        <div class="badge-pill"><span class="pill-check">✓</span> HUD Certified Locks</div>
        <div class="badge-pill"><span class="pill-check">✓</span> Rapid Response</div>
      </div>
    </div>

    <!-- RIGHT: Photo Collage -->
    <div class="hero-visual">
      <div class="hero-glow"></div>

      <!-- Floating stat chips -->
      <div class="stat-chip stat-chip--tl">
        <span class="chip-num">6+</span>
        <span class="chip-lbl">Core Services</span>
      </div>
      <div class="stat-chip stat-chip--br">
        <span class="chip-num">HUD</span>
        <span class="chip-lbl">Key Certified</span>
      </div>

      <!-- Photo mosaic grid -->
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

      <!-- Diagonal accent bar -->
      <div class="hero-accent-bar"></div>
    </div>

  </div>

  <div class="hero-scroll-hint">
    <span>Scroll</span>
    <div class="scroll-line"></div>
  </div>
</section>

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
          'icon' => '🔐',
          'title' => 'Lock Change &amp; Lock Box Installation',
          'desc' => 'Secure properties with HUD keys and other specialized locks according to client requirements.',
        ],
        [
          'icon' => '🗑️',
          'title' => 'Trash-Outs',
          'desc' => 'Clear away property debris quickly and at a competitive rate, leaving your property clean and ready.',
        ],
        [
          'icon' => '✨',
          'title' => 'Interior Refresh',
          'desc' => 'Keep homes sparkling with professional mopping, wiping, and polishing of all interior surfaces.',
        ],
        [
          'icon' => '🌿',
          'title' => 'Lawn &amp; Snow Care',
          'desc' => 'Ensure properties look their best — grass cutting in summer or snow removal in winter.',
        ],
        [
          'icon' => '✂️',
          'title' => 'Trimming &amp; Landscaping',
          'desc' => 'Shape up trees, shrubs, and vines for well-manicured, professionally maintained landscapes.',
        ],
        [
          'icon' => '🔧',
          'title' => 'Repairs &amp; Maintenance',
          'desc' => 'From HVAC filter replacements to flooring installations and paint touch-ups — we handle it all.',
        ],
      ];
      foreach ($services as $s): ?>
      <div class="service-card">
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
          <li><span class="check">✓</span> Real-time photo verification of all field work</li>
          <li><span class="check">✓</span> Transparent estimate communication via SMS</li>
          <li><span class="check">✓</span> HUD-compliant lock installations</li>
          <li><span class="check">✓</span> Single point of contact for all your property needs</li>
          <li><span class="check">✓</span> Fast response — residential &amp; commercial</li>
        </ul>
        <a href="#contact" class="btn btn-primary">Partner With Us</a>
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
      foreach ($portfolio as $p): ?>
      <div class="portfolio-card">
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
            <span class="contact-icon">📧</span>
            <div>
              <strong>Email</strong>
              <a href="mailto:<?= $email ?>"><?= $email ?></a>
            </div>
          </div>
          <div class="contact-item">
            <span class="contact-icon">📞</span>
            <div>
              <strong>Phone</strong>
              <a href="tel:<?= $phone ?>"><?= $phone_formatted ?></a>
            </div>
          </div>
          <div class="contact-item">
            <span class="contact-icon">📍</span>
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
            $to      = $email;
            $subject = "New Estimate Request from $name – M&I Property Services";
            $body    = "Name: $name\nEmail: $cemail\nPhone: $cphone\nService: $service\n\nDetails:\n$details";
            $headers = "From: noreply@mandiproperty.com\r\nReply-To: $cemail";
            if (mail($to, $subject, $body, $headers)) {
              $form_success = true;
            } else {
              $form_error = 'Message could not be sent. Please email us directly.';
            }
          } else {
            $form_error = 'Please fill in all required fields.';
          }
        }
        ?>
        <?php if ($form_success): ?>
          <div class="form-success">
            <div class="success-icon">✓</div>
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
          <button type="submit" name="send_inquiry" class="btn btn-primary btn-full">Send Message</button>
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
