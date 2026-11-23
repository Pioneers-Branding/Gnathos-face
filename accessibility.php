<?php
$path_prefix = '';
$page_title = 'Accessibility Statement | Gnathos Facial';
$page_description = 'Gnathos Facial aims to make its website usable by everyone, following WCAG 2.1 AA. How to get help or report an accessibility problem.';
$canonical_url = 'https://gnathosface.com/accessibility';
$page_type = 'WebPage';
$breadcrumbs = [['Home', '/'], ['Accessibility', null]];
$hide_footer_cta = true;
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>
<article class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-20">
  <div class="max-w-3xl">
    <p class="gna-eyebrow text-steel mb-4">Legal</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-10">Accessibility statement</h1>
    <div class="gna-prose">
      <p>We want every patient and family member to be able to find information and contact us easily, including people who use screen readers, keyboard navigation, magnification or voice control.</p>
      <h2 id="standard">Our standard</h2>
      <p>We aim to meet the Web Content Accessibility Guidelines (WCAG) 2.1 at level AA. The website includes a skip-to-content link, visible keyboard focus, text alternatives for images, sufficient colour contrast, reduced motion when your device requests it, and layouts that work from small phones to large screens.</p>
      <h2 id="known-issues">Known limitations</h2>
      <p>Some older articles may contain tables or headings that are not yet fully optimised. Third-party features such as the Google map and chat widget are outside our direct control; you can always reach us by phone or email instead.</p>
      <h2 id="help">Need help or found a problem?</h2>
      <p>Call <a href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a> or email <a href="mailto:<?= GNA_EMAIL ?>"><?= GNA_EMAIL ?></a>. Tell us the page and the problem, and we will provide the information in another way and work to fix the issue. If you need assistance at the clinic (wheelchair access, a companion, or help completing forms), please tell us when you book.</p>
    </div>
  </div>
</article>
<?php include $path_prefix . 'footer.php'; ?>
