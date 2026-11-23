<?php
/**
 * Consultation CTA band — rendered automatically by footer.php on every page
 * (set $hide_footer_cta = true to suppress, e.g. on the booking page).
 * Optional: $cta_heading, $cta_text, $cta_topic (pre-selects the form concern).
 */
$cta_heading = $cta_heading ?? 'Talk to a maxillofacial surgeon about your concern.';
$cta_text    = $cta_text ?? 'Book a consultation with Dr. Suresh P.L. or Dr. Navatha Mortha in Gachibowli, Hyderabad. Every plan starts with an examination and an honest discussion of options, including non-surgical ones.';
$form_variant = 'compact';
$form_topic   = $cta_topic ?? '';
$form_on_dark = true;
?>
<section class="gna-cta-band gna-on-dark gna-no-print" id="book" aria-labelledby="gna-cta-title">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-16 md:py-20 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
    <div class="lg:col-span-6">
      <p class="gna-eyebrow text-[#a9cbd9] mb-4">Book a consultation</p>
      <h2 id="gna-cta-title" class="gna-serif gna-h2 text-white mb-5"><?= gna_e($cta_heading) ?></h2>
      <p class="text-[15px] md:text-[16px] leading-[1.7] text-white/80 max-w-xl mb-8"><?= gna_e($cta_text) ?></p>
      <div class="flex flex-col sm:flex-row gap-3 mb-10">
        <a href="tel:<?= GNA_PHONE ?>" class="gna-btn gna-btn-light">Call <?= GNA_PHONE_DISP ?></a>
        <a href="<?= gna_e(gna_wa()) ?>" target="_blank" rel="noopener" class="gna-btn gna-btn-ghost-light">WhatsApp us</a>
      </div>
      <dl class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-[14px] text-white/80 border-t border-white/15 pt-6">
        <div><dt class="gna-eyebrow text-white/50 mb-1.5">Clinic</dt><dd>Regency Prime, Jayabheri Pine Valley,<br/>Gachibowli, Hyderabad 500032</dd></div>
        <div><dt class="gna-eyebrow text-white/50 mb-1.5">Hours</dt><dd>Mon–Thu 8:00–17:00 · Fri 8:00–13:00<br/>Facial trauma line: 24/7</dd></div>
      </dl>
    </div>
    <div class="lg:col-span-6">
      <div class="bg-white/[0.06] border border-white/15 rounded-md p-6 md:p-8">
        <p class="gna-serif text-[26px] text-white mb-1">Request a call back</p>
        <p class="text-[13px] text-white/70 mb-6">Three fields. A coordinator will call you to fix a time.</p>
        <?php include __DIR__ . '/lead-form.php'; ?>
      </div>
    </div>
  </div>
</section>
