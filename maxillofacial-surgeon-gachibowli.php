<?php
$path_prefix = '';
$page_title = 'Oral & Maxillofacial Surgeon in Gachibowli | Gnathos Facial';
$page_description = 'Oral and maxillofacial surgery clinic at Regency Prime, Jayabheri Pine Valley, Gachibowli. TMJ, jaw surgery, facial injuries and more. Call +91 90006 66476.';
$canonical_url = 'https://gnathosface.com/maxillofacial-surgeon-gachibowli';
$page_about = 'Oral and maxillofacial surgery';
$breadcrumbs = [['Home', '/'], ['Clinic in Gachibowli', null]];
$cta_topic = 'Other / not sure';
$cta_heading = 'Book a consultation at our Gachibowli clinic.';
$page_faqs = [
  ['q' => 'Where exactly is the Gnathos Facial clinic?', 'a' => 'Cabin No. 214, Regency Prime, Jayabheri Pine Valley, Gachibowli, Hyderabad 500032. Use the "Get directions" button on this page to open turn-by-turn directions in Google Maps.'],
  ['q' => 'What are the clinic hours?', 'a' => 'Monday to Thursday 8:00 am to 5:00 pm and Friday 8:00 am to 1:00 pm. On Saturdays and Sundays the clinic sees facial-injury cases only, through the 24/7 trauma line on +91 90006 66476.'],
  ['q' => 'Do I need a referral to see a maxillofacial surgeon?', 'a' => 'No. You can book directly. If a dentist, ENT or physician has already examined you, bring their notes and any scans so we can review them at your first visit.'],
  ['q' => 'Where does surgery take place?', 'a' => 'Consultations happen at the Gachibowli clinic. Surgery, when needed, is performed at NABH-accredited partner hospitals in Hyderabad — CARE Hospitals (HITEC City), KIMS, Apollo Spectra or Yashoda — chosen according to the procedure and your insurance.'],
  ['q' => 'I live in Kondapur / HITEC City / Madhapur. Is the clinic convenient?', 'a' => 'Yes. Gachibowli sits at the centre of Hyderabad\'s western corridor, so patients from HITEC City, Kondapur, Madhapur, the Financial District, Nanakramguda, Manikonda and Kokapet usually reach us quickly. Call ahead and we will suggest the best time to avoid peak traffic.'],
  ['q' => 'Is there parking at the clinic?', 'a' => 'Yes, parking is available at Regency Prime. If you are coming after a facial injury, please do not drive yourself — ask someone to bring you, or call us first.'],
];
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';

$gna_services = [
  ['TMJ disorders & jaw pain', '/tmj-treatment', 'Clicking, locking, jaw pain and limited opening — splints to arthroscopy.'],
  ['Facial injuries & fractures', '/facial-injuries', 'Jaw, cheekbone, eye-socket and nasal fractures; 24/7 trauma line.'],
  ['Jaw surgery (orthognathic)', '/jaw-surgery', 'Underbite, overbite, open bite and facial asymmetry.'],
  ['Sleep apnea & snoring', '/obstructive-sleep-apnea', 'Assessment, oral appliances and airway surgery.'],
  ['Oral cancer screening', '/oral-cancer', 'Non-healing ulcers, white or red patches, lumps — biopsy and surgery.'],
  ['Cysts & jaw tumours', '/cyst-and-tumors-treatment', 'Jaw cysts, keratocysts and benign tumours.'],
  ['Facial swelling & infection', '/facial-swelling-treatment', 'Swelling from tooth infection, cysts or salivary glands.'],
  ['Nose surgery', '/rhinoplasty-treatment', 'Rhinoplasty and septorhinoplasty for shape and breathing.'],
  ['Facial aesthetic procedures', '/cosmetic-facial-surgery-treatment', 'Chin, jawline, face and brow lift, eyelids, injectables.'],
];
?>
<section class="border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-14 md:pb-20 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
    <div class="lg:col-span-7">
      <p class="gna-eyebrow text-steel mb-4">Clinic location · Gachibowli</p>
      <h1 class="gna-serif gna-h2-lg text-navy mb-5">Oral &amp; maxillofacial surgeon in Gachibowli, Hyderabad</h1>
      <p class="text-[16px] md:text-[17px] leading-[1.7] text-slate mb-8 max-w-2xl">Gnathos Facial is a specialist oral and maxillofacial surgery practice at Regency Prime, Jayabheri Pine Valley, Gachibowli. Dr. Suresh P.L. and Dr. Navatha Mortha (MDS) see patients here for jaw-joint problems, jaw and facial deformities, facial injuries, mouth lesions, cysts, sleep apnea and facial aesthetic concerns — with surgery, when needed, at NABH-accredited partner hospitals in Hyderabad.</p>
      <div class="flex flex-col sm:flex-row flex-wrap gap-3">
        <a href="/book-appointment" class="gna-btn gna-btn-primary">Book appointment</a>
        <a href="tel:<?= GNA_PHONE ?>" class="gna-btn gna-btn-outline" data-gna-track="call">Call <?= GNA_PHONE_DISP ?></a>
        <a href="<?= GNA_DIRECTIONS ?>" target="_blank" rel="noopener" class="gna-btn gna-btn-outline" data-gna-track="directions">Get directions</a>
      </div>
    </div>
    <aside class="lg:col-span-5 bg-white border gna-rule rounded-md p-6 md:p-8" aria-label="Clinic details">
      <address class="not-italic text-[15px] leading-[1.7] text-navy mb-6">
        <span class="gna-eyebrow text-slate block mb-2">Address</span>
        <strong class="font-semibold">Gnathos Facial</strong><br/>Cabin No. 214, Regency Prime<br/>Jayabheri Pine Valley, Gachibowli<br/>Hyderabad 500032, Telangana
      </address>
      <dl class="text-[14px] text-navy space-y-1.5 mb-6">
        <dt class="gna-eyebrow text-slate mb-2">Hours</dt>
        <div class="flex justify-between gap-4"><dt class="text-slate">Monday – Thursday</dt><dd>8:00 am – 5:00 pm</dd></div>
        <div class="flex justify-between gap-4"><dt class="text-slate">Friday</dt><dd>8:00 am – 1:00 pm</dd></div>
        <div class="flex justify-between gap-4"><dt class="text-slate">Saturday – Sunday</dt><dd>Facial trauma only</dd></div>
      </dl>
      <p class="text-[14px] mb-1"><span class="text-slate">Phone:</span> <a class="font-semibold text-navy" href="tel:<?= GNA_PHONE ?>" data-gna-track="call"><?= GNA_PHONE_DISP ?></a></p>
      <p class="text-[14px] mb-4"><span class="text-slate">Email:</span> <a class="text-navy underline" href="mailto:<?= GNA_EMAIL ?>"><?= GNA_EMAIL ?></a></p>
      <a href="<?= GNA_MAPS_URL ?>" target="_blank" rel="noopener" class="text-[13px] font-semibold text-steel underline underline-offset-2" data-gna-track="maps">View Gnathos Facial on Google Maps →</a>
    </aside>
  </div>
</section>

<section class="max-w-[1280px] mx-auto px-4 md:px-8 py-14 md:py-20" aria-labelledby="h-treat">
  <p class="gna-eyebrow text-steel mb-3">At the Gachibowli clinic</p>
  <h2 id="h-treat" class="gna-serif gna-h2 text-navy mb-8">What we treat</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php foreach ($gna_services as [$l, $u, $d]): ?>
    <a href="<?= $u ?>" class="gna-card p-6 flex flex-col">
      <span class="gna-serif text-[23px] leading-tight text-navy mb-2"><?= gna_e($l) ?></span>
      <span class="text-[14px] leading-[1.6] text-slate grow"><?= gna_e($d) ?></span>
      <span class="mt-4 text-[12px] font-semibold text-steel">Learn more →</span>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="bg-white border-y gna-rule" aria-labelledby="h-nearby">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-14 md:py-20 grid grid-cols-1 lg:grid-cols-12 gap-10">
    <div class="lg:col-span-5">
      <p class="gna-eyebrow text-steel mb-3">Getting here</p>
      <h2 id="h-nearby" class="gna-serif gna-h2 text-navy mb-5">Serving Gachibowli and Hyderabad's western suburbs</h2>
      <p class="text-[15.5px] leading-[1.7] text-slate mb-4">The clinic is in Jayabheri Pine Valley, Gachibowli — central to Hyderabad's IT corridor. Patients regularly come to us from the neighbourhoods listed here, as well as from across Telangana and Andhra Pradesh for complex jaw, joint and facial surgery.</p>
      <p class="text-[15.5px] leading-[1.7] text-slate">Coming after a facial injury? Please don't drive yourself. Call <a class="text-trauma font-semibold" href="tel:<?= GNA_PHONE ?>" data-gna-track="call"><?= GNA_PHONE_DISP ?></a> first so we can tell you whether to come to the clinic or go straight to the hospital emergency department.</p>
    </div>
    <div class="lg:col-span-7">
      <ul class="flex flex-wrap gap-2 mb-6" aria-label="Areas served">
        <?php foreach (GNA_NEARBY as $n): ?><li class="px-3 py-1.5 border gna-rule rounded-full text-[13px] text-navy bg-[#F8F5EF]"><?= gna_e($n) ?></li><?php endforeach; ?>
      </ul>
      <div class="gna-map-facade h-[280px] rounded-md border gna-rule overflow-hidden flex items-center justify-center text-center p-6">
        <div>
          <p class="gna-serif text-[22px] text-navy mb-1">Regency Prime, Jayabheri Pine Valley</p>
          <p class="text-[13px] text-slate mb-4">The interactive Google map loads only if you ask for it.</p>
          <div class="flex flex-col sm:flex-row gap-2 justify-center">
            <button type="button" data-gna-map class="gna-btn gna-btn-outline !py-2.5">Show map</button>
            <a href="<?= GNA_DIRECTIONS ?>" target="_blank" rel="noopener" class="gna-btn gna-btn-primary !py-2.5" data-gna-track="directions">Get directions</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="max-w-[1280px] mx-auto px-4 md:px-8 py-14 md:py-20 grid grid-cols-1 lg:grid-cols-12 gap-10" aria-labelledby="h-faq">
  <div class="lg:col-span-4">
    <p class="gna-eyebrow text-steel mb-3">Before you visit</p>
    <h2 id="h-faq" class="gna-serif gna-h2 text-navy">Common questions</h2>
  </div>
  <div class="lg:col-span-8 divide-y divide-[var(--hairline)] border-y gna-rule">
    <?php foreach ($page_faqs as $f): ?>
    <details class="group">
      <summary class="flex items-start justify-between gap-6 py-5"><h3 class="gna-serif text-[21px] leading-snug text-navy font-medium m-0"><?= gna_e($f['q']) ?></h3><span class="text-steel text-xl leading-none transition-transform group-open:rotate-45" aria-hidden="true">+</span></summary>
      <p class="pb-5 pr-8 text-[15.5px] leading-[1.7] text-slate"><?= gna_e($f['a']) ?></p>
    </details>
    <?php endforeach; ?>
  </div>
</section>
<?php include $path_prefix . 'footer.php'; ?>
