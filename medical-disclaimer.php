<?php
$path_prefix = '';
$page_title = 'Medical Disclaimer & Editorial Policy | Gnathos Facial';
$page_description = 'How Gnathos Facial writes and reviews health information, why it does not replace a consultation, and our policy on testimonials, images and outcome claims.';
$canonical_url = 'https://gnathosface.com/medical-disclaimer';
$page_type = 'WebPage';
$breadcrumbs = [['Home', '/'], ['Medical disclaimer', null]];
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>
<article class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-20">
  <div class="max-w-3xl">
    <p class="gna-eyebrow text-steel mb-4">Legal</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-10">Medical disclaimer &amp; editorial policy</h1>
    <div class="gna-prose">
      <h2 id="general-information">General information, not medical advice</h2>
      <p>The content on gnathosface.com is written to help patients and families understand conditions of the face, jaws and mouth, and the treatments available for them. It is general health education. It is not a diagnosis, does not create a doctor–patient relationship, and is not a substitute for an examination by a qualified clinician who knows your history.</p>
      <div class="gna-callout gna-callout--warn"><p><strong>Emergencies:</strong> if you have difficulty breathing or swallowing, heavy bleeding, a serious facial injury, or rapidly spreading facial swelling, call <strong>108</strong> or go to the nearest emergency department. Our facial trauma line is <a href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a>.</p></div>

      <h2 id="no-guarantees">No guaranteed outcomes</h2>
      <p>Every person's anatomy, health and healing are different. Recovery times, risks and results described on this website are typical ranges drawn from medical literature and clinical experience; your own may differ. No treatment is free of risk, and no result can be guaranteed. Your surgeon will discuss the benefits, risks and alternatives that apply to you before you decide on any treatment.</p>

      <h2 id="how-we-write">How our content is written and reviewed</h2>
      <ul>
        <li>Articles are written or reviewed by our consultant oral and maxillofacial surgeons, Dr. Suresh P.L. (MDS) and Dr. Navatha Mortha (MDS). Each article shows its author, reviewer and the date it was last reviewed.</li>
        <li>We base clinical statements on current guidelines and peer-reviewed evidence, and link to reputable sources where helpful.</li>
        <li>We review content regularly and correct errors promptly. To report an error, email <a href="mailto:<?= GNA_EMAIL ?>"><?= GNA_EMAIL ?></a>.</li>
      </ul>

      <h2 id="ethics">Our advertising-ethics commitments</h2>
      <p>In keeping with the ethical standards that apply to medical and dental practitioners in India, this website:</p>
      <ul>
        <li>does not publish patient testimonials or "before and after" photographs;</li>
        <li>does not claim superiority over other practitioners or promise cures or guaranteed results;</li>
        <li>does not offer discounts, packages or inducements for treatment;</li>
        <li>uses illustrations only to explain anatomy or procedures — they do not show actual patients or outcomes.</li>
      </ul>

      <h2 id="external-links">External links</h2>
      <p>We link to external organisations for further reading. We are not responsible for the content of external websites.</p>
    </div>
  </div>
</article>
<?php include $path_prefix . 'footer.php'; ?>
