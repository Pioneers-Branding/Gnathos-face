<?php
$path_prefix = '';
$page_title = 'Terms of Use | Gnathos Facial';
$page_description = 'Terms governing use of the Gnathos Facial website, appointment requests, content and links. Read alongside our privacy notice and medical disclaimer.';
$canonical_url = 'https://gnathosface.com/terms-of-use';
$page_type = 'WebPage';
$breadcrumbs = [['Home', '/'], ['Terms of use', null]];
$hide_footer_cta = true;
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>
<article class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-20">
  <div class="max-w-3xl">
    <p class="gna-eyebrow text-steel mb-4">Legal</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-4">Terms of use</h1>
    <p class="text-[14px] text-slate mb-10">Effective <?= date('j F Y', strtotime(GNA_CONSENT_VERSION)) ?></p>
    <div class="gna-prose">
      <p>By using gnathosface.com ("the website") you agree to these terms. If you do not agree, please do not use the website.</p>
      <h2 id="purpose">1. Purpose of the website</h2>
      <p>The website provides general information about Gnathos Facial and about conditions and treatments in oral and maxillofacial surgery. It does not provide medical advice. Please read our <a href="/medical-disclaimer">medical disclaimer</a>.</p>
      <h2 id="appointments">2. Appointment requests</h2>
      <p>Submitting a form is a request, not a confirmed booking. An appointment is confirmed only when our coordinator contacts you and agrees a date and time. Please do not use the forms for emergencies — call <a href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a> or 108.</p>
      <h2 id="accuracy">3. Accuracy of information</h2>
      <p>We take care to keep the content accurate and up to date, but medical knowledge changes and we cannot guarantee that every page is complete or current. Practice details such as hours and hospital arrangements may change; please confirm when you book.</p>
      <h2 id="privacy">4. Privacy</h2>
      <p>Personal data you provide is handled as described in our <a href="/privacy-policy">privacy notice</a>, in accordance with the Digital Personal Data Protection Act, 2023.</p>
      <h2 id="ip">5. Content ownership</h2>
      <p>Text, design and illustrations on this website belong to Gnathos Facial or its licensors. You may share links and quote short extracts with attribution. Please do not copy substantial parts of the content without permission.</p>
      <h2 id="acceptable-use">6. Acceptable use</h2>
      <p>Do not misuse the website, attempt to gain unauthorised access, submit false information, or use automated tools to submit forms.</p>
      <h2 id="links">7. Third-party services and links</h2>
      <p>The website links to, and (with your consent) uses, third-party services such as WhatsApp, Google Maps and analytics. Their own terms and privacy policies apply.</p>
      <h2 id="liability">8. Limitation of liability</h2>
      <p>To the extent permitted by law, Gnathos Facial is not liable for any loss arising from reliance on general information on the website. Nothing in these terms limits liability that cannot be limited under Indian law.</p>
      <h2 id="law">9. Governing law</h2>
      <p>These terms are governed by the laws of India. Courts in Hyderabad, Telangana have jurisdiction.</p>
      <h2 id="contact">10. Contact</h2>
      <p><?= GNA_ADDRESS ?> · <a href="mailto:<?= GNA_EMAIL ?>"><?= GNA_EMAIL ?></a> · <?= GNA_PHONE_DISP ?></p>
    </div>
  </div>
</article>
<?php include $path_prefix . 'footer.php'; ?>
