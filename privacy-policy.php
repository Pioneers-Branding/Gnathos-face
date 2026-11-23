<?php
$path_prefix = '';
$page_title = 'Privacy Notice (DPDP Act 2023) | Gnathos Facial';
$page_description = 'How Gnathos Facial collects, uses and protects your personal data under the DPDP Act, 2023: your rights, consent choices and our grievance officer.';
$canonical_url = 'https://gnathosface.com/privacy-policy';
$page_type = 'WebPage';
$breadcrumbs = [['Home', '/'], ['Privacy notice', null]];
$hide_footer_cta = true;
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>
<article class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-20">
  <div class="max-w-3xl">
    <p class="gna-eyebrow text-steel mb-4">Legal</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-4">Privacy notice</h1>
    <p class="text-[14px] text-slate mb-10">Effective <?= date('j F Y', strtotime(GNA_CONSENT_VERSION)) ?> · Version <?= GNA_CONSENT_VERSION ?> · Issued under the Digital Personal Data Protection Act, 2023 and the Digital Personal Data Protection Rules, 2025.</p>

    <div class="gna-prose">
      <p class="gna-lede">Your health information is personal. This notice explains, in plain language, what we collect through this website, why, who we share it with, how long we keep it, and how you can exercise your rights.</p>
      <div class="gna-keypoints">
        <h3>In short</h3>
        <ul>
          <li>We only collect what you choose to give us (name, phone, and the concern you select) to call you back and arrange a consultation.</li>
          <li>Analytics and the chat widget run <strong>only if you opt in</strong>. Nothing you type into our forms is sent to analytics.</li>
          <li>We never sell your data or use it for advertising.</li>
          <li>You can see, correct or delete your data, or withdraw consent, by emailing <a href="mailto:<?= GNA_GRIEVANCE_EMAIL ?>"><?= GNA_GRIEVANCE_EMAIL ?></a>.</li>
        </ul>
      </div>

      <h2 id="who-we-are">1. Who we are</h2>
      <p><strong><?= GNA_SITE_NAME ?></strong> (Oral &amp; Maxillofacial Surgery), <?= GNA_ADDRESS ?>, is the <em>Data Fiduciary</em> for personal data collected through gnathosface.com. Contact: <a href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a> · <a href="mailto:<?= GNA_EMAIL ?>"><?= GNA_EMAIL ?></a>.</p>

      <h2 id="what-we-collect">2. What we collect</h2>
      <table>
        <thead><tr><th>Source</th><th>Data</th><th>Purpose</th></tr></thead>
        <tbody>
          <tr><td>Enquiry / appointment forms</td><td>Name, mobile number, optional email, the concern you select, optional preferred date, the page you were on, and a record of your consent (time and notice version)</td><td>To contact you, answer your enquiry and schedule a consultation</td></tr>
          <tr><td>Phone, WhatsApp, email</td><td>What you choose to tell us</td><td>To respond and arrange care</td></tr>
          <tr><td>Analytics (only with consent)</td><td>Pages viewed, clicks, device and browser type, approximate location derived from IP address</td><td>To understand which information helps patients and improve the site</td></tr>
          <tr><td>Chat widget (only with consent)</td><td>Messages you send through the widget, device data</td><td>To let you start a WhatsApp conversation from the page</td></tr>
          <tr><td>Map (only if you click "Show map")</td><td>Data Google collects when its map loads</td><td>To show our location</td></tr>
        </tbody>
      </table>
      <p>Please do not send medical reports, scans or detailed health histories through the website. Clinical records created when you visit us are handled under separate consent at the clinic and under applicable medical record-keeping rules.</p>

      <h2 id="basis">3. Why we are allowed to process it</h2>
      <p>We rely on your <strong>consent</strong>, which you give by ticking the consent box on a form or by choosing options in our consent settings. Consent is specific to the purposes stated, and you can withdraw it at any time as easily as you gave it. We may also process data without consent only where the law permits a <em>legitimate use</em> — for example, to respond to a medical emergency involving a threat to life or health, or to comply with a legal obligation.</p>

      <h2 id="sharing">4. Who we share it with</h2>
      <p>We use a small number of service providers (<em>Data Processors</em>) who process data only on our instructions:</p>
      <ul>
        <li><strong>Formester</strong> — receives and stores enquiry form submissions.</li>
        <li><strong>Usermaven</strong> — website analytics, only if you consent.</li>
        <li><strong>WACRS</strong> — WhatsApp chat widget, only if you consent.</li>
        <li><strong>Google</strong> — interactive map, only if you choose to load it.</li>
        <li><strong>WhatsApp (Meta)</strong> — if you choose to message us on WhatsApp.</li>
      </ul>
      <p>If you go on to receive treatment, relevant information is shared with the partner hospital where your procedure takes place and, at your request, with your insurer or third-party administrator to process a claim. We do not sell personal data, and we do not use it for advertising or profiling. Some processors may store data on servers outside India; any such transfer is made in line with Section 16 of the DPDP Act and any restrictions notified by the Government of India.</p>

      <h2 id="retention">5. How long we keep it</h2>
      <p>Enquiry details are kept for up to 12 months after our last contact with you and then erased, unless you become a patient (in which case clinical records are retained for the period required by law and professional regulations), or unless we must keep them longer to comply with law. Security logs are retained for one year, as required by the DPDP Rules. You can ask us to erase your enquiry data sooner.</p>

      <h2 id="security">6. How we protect it</h2>
      <p>The website is served over encrypted HTTPS. Access to enquiries is limited to the staff who need it to call you back. Our processors are bound by contract to protect your data. If a personal data breach occurs, we will inform the Data Protection Board of India and affected individuals as required by the DPDP Act and Rules.</p>

      <h2 id="rights">7. Your rights</h2>
      <p>As a <em>Data Principal</em> you have the right to:</p>
      <ul>
        <li><strong>Access</strong> — get a summary of the personal data we hold about you and how it is processed;</li>
        <li><strong>Correction and erasure</strong> — have inaccurate data corrected, incomplete data completed, or data erased when it is no longer needed;</li>
        <li><strong>Withdraw consent</strong> — at any time, for any purpose. This stops future processing; it does not affect what was lawfully done before;</li>
        <li><strong>Grievance redressal</strong> — raise a complaint with our Grievance Officer and receive a response;</li>
        <li><strong>Nominate</strong> — appoint someone to exercise these rights on your behalf in case of death or incapacity.</li>
      </ul>
      <p>To exercise any right, email <a href="mailto:<?= GNA_GRIEVANCE_EMAIL ?>"><?= GNA_GRIEVANCE_EMAIL ?></a> or call <?= GNA_PHONE_DISP ?>. We may need to verify your identity. We aim to respond within 30 days, and in any event within the period prescribed under the DPDP Rules.</p>

      <h2 id="grievance">8. Grievance officer</h2>
      <p><strong><?= GNA_GRIEVANCE_NAME ?></strong><br/><?= GNA_ADDRESS ?><br/>Email: <a href="mailto:<?= GNA_GRIEVANCE_EMAIL ?>"><?= GNA_GRIEVANCE_EMAIL ?></a> · Phone: <?= GNA_PHONE_DISP ?></p>
      <p>If you are not satisfied with our response, you may complain to the <strong>Data Protection Board of India</strong> after first using our grievance process.</p>

      <h2 id="children">9. Children</h2>
      <p>Our forms are intended for adults. If the patient is under 18, a parent or lawful guardian should submit the enquiry; by ticking the consent box they confirm that they are giving consent on the child's behalf. We do not track or profile children or target advertising at them. Where we provide health services to a child, data is processed as permitted for the provision of healthcare.</p>

      <h2 id="cookies">10. Cookies and similar technologies</h2>
      <table>
        <thead><tr><th>Category</th><th>What it does</th><th>Default</th></tr></thead>
        <tbody>
          <tr><td>Essential</td><td>Stores your consent choice in your browser (<code>gna_consent</code>). No tracking.</td><td>Always on</td></tr>
          <tr><td>Analytics</td><td>Usermaven cookies measuring visits and clicks.</td><td>Off until you opt in</td></tr>
          <tr><td>Chat widget</td><td>WACRS script and cookies for the WhatsApp chat bubble.</td><td>Off until you opt in</td></tr>
          <tr><td>Map</td><td>Google Maps cookies.</td><td>Only when you click "Show map"</td></tr>
        </tbody>
      </table>
      <p>We honour the Global Privacy Control browser signal as a refusal of optional cookies. <button type="button" data-gna-consent-open class="text-steel underline underline-offset-2 font-medium">Change your cookie &amp; consent settings</button>.</p>

      <h2 id="language">11. Language</h2>
      <p>This notice is available in Telugu and Hindi on request — email us and we will send it to you.</p>

      <h2 id="changes">12. Changes to this notice</h2>
      <p>If we change how we use personal data, we will update this notice and its version date. Where a change affects something you consented to, we will ask for your consent again.</p>
    </div>
  </div>
</article>
<?php include $path_prefix . 'footer.php'; ?>
