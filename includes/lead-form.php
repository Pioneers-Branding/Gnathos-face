<?php
/**
 * Enquiry form with a DPDP Act 2023-compliant consent notice.
 *   $form_variant  'compact' (CTA band) | 'full' (book-appointment page, homepage)
 *   $form_topic    optional pre-selected concern (string matching an option below)
 *   $form_on_dark  true when the form sits on a navy background
 * Submission is handled by the shared script in footer.php (form[data-gna-form]).
 */
$form_variant = $form_variant ?? 'compact';
$form_topic   = $form_topic ?? '';
$gna_fid      = 'f' . substr(md5(uniqid('', true)), 0, 6);
$gna_topics   = [
    'TMJ disorder / jaw pain or clicking',
    'Facial injury or fracture',
    'Jaw misalignment (orthognathic surgery)',
    'Nose shape or breathing (rhinoplasty)',
    'Snoring / sleep apnea',
    'Mouth ulcer, patch or lump (oral cancer screening)',
    'Cyst, tumour or facial swelling',
    'Cosmetic facial procedure',
    'Reconstruction / skin grafts',
    'Other / not sure',
];
?>
<form class="space-y-4" data-gna-form="<?= gna_e($form_variant) ?>" novalidate>
  <div class="grid grid-cols-1 <?= $form_variant === 'full' ? 'sm:grid-cols-2' : '' ?> gap-4">
    <div>
      <label class="gna-label" for="<?= $gna_fid ?>-name">Full name <span class="text-trauma" aria-hidden="true">*</span></label>
      <input class="gna-field" id="<?= $gna_fid ?>-name" name="name" type="text" required autocomplete="name" maxlength="80"/>
    </div>
    <div>
      <label class="gna-label" for="<?= $gna_fid ?>-phone">Mobile number <span class="text-trauma" aria-hidden="true">*</span></label>
      <input class="gna-field" id="<?= $gna_fid ?>-phone" name="phone" type="tel" required autocomplete="tel" inputmode="tel" pattern="[0-9+\s\-]{10,16}" placeholder="+91" maxlength="16"/>
    </div>
  </div>
  <?php if ($form_variant === 'full'): ?>
  <div>
    <label class="gna-label" for="<?= $gna_fid ?>-email">Email <span class="normal-case tracking-normal">(optional)</span></label>
    <input class="gna-field" id="<?= $gna_fid ?>-email" name="email" type="email" autocomplete="email" maxlength="120"/>
  </div>
  <?php endif; ?>
  <div>
    <label class="gna-label" for="<?= $gna_fid ?>-topic">What would you like help with?</label>
    <select class="gna-field" id="<?= $gna_fid ?>-topic" name="treatment">
      <option value="">Choose a concern…</option>
      <?php foreach ($gna_topics as $t): ?>
      <option<?= $t === $form_topic ? ' selected' : '' ?>><?= gna_e($t) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <?php if ($form_variant === 'full'): ?>
  <div>
    <label class="gna-label" for="<?= $gna_fid ?>-date">Preferred date <span class="normal-case tracking-normal">(optional)</span></label>
    <input class="gna-field" id="<?= $gna_fid ?>-date" name="preferred_date" type="date"/>
  </div>
  <?php endif; ?>

  <div class="gna-consent <?= !empty($form_on_dark) ? 'text-white/85' : 'text-slate' ?>">
    <input type="checkbox" id="<?= $gna_fid ?>-consent" name="consent" value="yes" required/>
    <label for="<?= $gna_fid ?>-consent">
      I agree that <?= GNA_SITE_NAME ?> may use these details, including the health concern I've selected, <strong class="font-semibold">only to respond to this enquiry and arrange my consultation</strong>. I am 18 or older, or the parent/guardian of the patient. I can withdraw consent at any time by emailing <?= GNA_EMAIL ?>. <a href="/privacy-policy">Privacy notice</a>.
    </label>
  </div>
  <p class="gna-form-error hidden" data-gna-error role="alert"></p>

  <button class="gna-btn <?= !empty($form_on_dark) ? 'gna-btn-emergency' : 'gna-btn-primary' ?> w-full !py-4" type="submit">
    <?= $form_variant === 'full' ? 'Request appointment' : 'Request a call back' ?>
  </button>
  <p class="text-[12px] <?= !empty($form_on_dark) ? 'text-white/70' : 'text-slate' ?> leading-relaxed">We reply within one working day. Please don't send scans or reports here; bring them to your visit. For an injury or emergency, call <a class="underline" href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a>.</p>
  <div class="hidden rounded-md border border-steel bg-white text-navy p-4 text-[14px]" data-gna-success role="status" tabindex="-1">
    <strong class="block font-semibold mb-1">Thank you — your request has been received.</strong>
    Our patient coordinator will call you within one working day. For anything urgent, please call <?= GNA_PHONE_DISP ?>.
  </div>
</form>
