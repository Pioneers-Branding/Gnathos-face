<?php
$path_prefix = '';
$page_title = 'Book an Appointment | Maxillofacial Surgeon in Gachibowli, Hyderabad';
$page_description = 'Book a consultation with Dr. Suresh P.L. or Dr. Navatha Mortha at Gnathos Facial, Gachibowli, Hyderabad. Call +91 90006 66476, WhatsApp, or request a call back.';
$canonical_url = 'https://gnathosface.com/book-appointment';
$page_type = 'ContactPage';
$breadcrumbs = [['Home', '/'], ['Book an appointment', null]];
$hide_footer_cta = true;
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
$form_variant = 'full';
$form_topic = '';
$form_on_dark = false;
?>
<section class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-16 md:pb-24">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">
    <div class="lg:col-span-5">
      <p class="gna-eyebrow text-steel mb-4">Book a consultation</p>
      <h1 class="gna-serif gna-h2-lg text-navy mb-5">Book an appointment with a maxillofacial surgeon.</h1>
      <p class="text-[16px] leading-[1.7] text-slate mb-8">Consultations are held at our clinic in Gachibowli, Hyderabad. A first visit usually takes 30–45 minutes: we listen to your concern, examine you, review any scans you bring, and explain your options in plain language — including non-surgical ones.</p>

      <div class="space-y-6 border-t gna-rule pt-8">
        <div>
          <p class="gna-eyebrow text-slate mb-2">Phone &amp; facial trauma line (24/7)</p>
          <a href="tel:<?= GNA_PHONE ?>" class="gna-serif text-[30px] text-navy hover:text-steel"><?= GNA_PHONE_DISP ?></a>
        </div>
        <div>
          <p class="gna-eyebrow text-slate mb-2">WhatsApp</p>
          <a href="<?= gna_e(gna_wa()) ?>" target="_blank" rel="noopener" class="text-[15px] text-steel underline underline-offset-2">Message us on WhatsApp</a>
        </div>
        <div>
          <p class="gna-eyebrow text-slate mb-2">Email</p>
          <a href="mailto:<?= GNA_EMAIL ?>" class="text-[15px] text-navy underline underline-offset-2"><?= GNA_EMAIL ?></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <address class="not-italic">
            <p class="gna-eyebrow text-slate mb-2">Clinic</p>
            <p class="text-[14px] leading-[1.65] text-navy">Cabin No. 214, Regency Prime<br/>Jayabheri Pine Valley, Gachibowli<br/>Hyderabad 500032, Telangana</p>
          </address>
          <div>
            <p class="gna-eyebrow text-slate mb-2">Hours</p>
            <p class="text-[14px] leading-[1.65] text-navy">Mon–Thu · 8:00–17:00<br/>Fri · 8:00–13:00<br/>Sat–Sun · facial trauma only</p>
          </div>
        </div>
      </div>

      <div class="gna-map-facade mt-8 h-[280px] rounded-md border gna-rule overflow-hidden flex items-center justify-center text-center p-6">
        <div>
          <p class="gna-serif text-[22px] text-navy mb-1">Regency Prime, Gachibowli</p>
          <p class="text-[13px] text-slate mb-4">The interactive map is provided by Google and loads only if you ask for it. <a class="underline" href="/maxillofacial-surgeon-gachibowli">Clinic details &amp; areas served</a>.</p>
          <div class="flex flex-col sm:flex-row gap-2 justify-center">
            <button type="button" data-gna-map class="gna-btn gna-btn-outline !py-2.5">Show map</button>
            <a href="<?= gna_e(GNA_DIRECTIONS) ?>" data-gna-track="directions" target="_blank" rel="noopener" class="gna-btn gna-btn-primary !py-2.5">Get directions</a>
          </div>
        </div>
      </div>
    </div>

    <div class="lg:col-span-7">
      <div class="bg-white border gna-rule rounded-md p-6 md:p-10">
        <h2 class="gna-serif text-[30px] text-navy mb-2">Request an appointment</h2>
        <p class="text-[14px] text-slate mb-8">Tell us how to reach you. A patient coordinator will call within one working day to confirm a time.</p>
        <?php include __DIR__ . '/includes/lead-form.php'; ?>
      </div>

      <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-[13.5px] leading-[1.6] text-slate">
        <div class="border-t-2 border-steel pt-4"><p class="font-semibold text-navy mb-1">What to bring</p>Previous scans or X-rays, a list of medicines, and your insurance card if you plan to claim.</div>
        <div class="border-t-2 border-steel pt-4"><p class="font-semibold text-navy mb-1">Fees</p>The consultation fee is confirmed when you book. Surgical estimates are given in writing after planning.</div>
        <div class="border-t-2 border-steel pt-4"><p class="font-semibold text-navy mb-1">Emergencies</p>For facial injuries call <?= GNA_PHONE_DISP ?> any time. For breathing difficulty or heavy bleeding call 108.</div>
      </div>
    </div>
  </div>
</section>
<?php include $path_prefix . 'footer.php'; ?>
