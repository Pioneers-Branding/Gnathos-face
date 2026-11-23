<?php
$path_prefix = '';
$page_title = 'Maxillofacial Surgeon in Gachibowli, Hyderabad | Gnathos';
$page_description = 'Oral & maxillofacial surgeons in Gachibowli, Hyderabad for TMJ, jaw surgery, facial fractures, sleep apnea and oral cancer. 24/7 trauma line: +91 90006 66476.';
$canonical_url = 'https://gnathosface.com/';
$page_type = 'WebPage';
$page_faqs = [
    ['q' => 'How long is recovery from orthognathic surgery?', 'a' => 'Return to non-strenuous work takes two to three weeks. Skeletal healing continues for nine to twelve months. We schedule reviews at week one, week four, three months, six months, and twelve months.'],
    ['q' => 'Is TMJ surgery always required for jaw pain?', 'a' => 'No. Surgery is reserved for cases where conservative care — splints, physiotherapy, medication, occlusal adjustment — has failed and structural joint disease is confirmed on imaging. Roughly seventy percent of TMJ patients we see never reach the operating theatre.'],
    ['q' => 'Do you treat facial trauma emergencies?', 'a' => 'Yes. We coordinate with CARE Hospitals\' emergency department for immediate facial trauma — mandibular, orbital, zygomatic, nasal, and pan-facial fractures. The trauma line is answered 24/7 by a member of the surgical team.'],
    ['q' => 'How much does a consultation cost?', 'a' => 'A first consultation runs forty-five minutes and includes imaging review where available. The fee is fixed and disclosed at booking. Surgical quotes are issued in writing after the planning consultation — never verbally on the first visit.'],
    ['q' => 'Do you accept insurance?', 'a' => 'Cashless treatment is available with Star Health, ICICI Lombard, HDFC ERGO, and New India Assurance. For procedures above ₹50,000, no-cost EMI is available through Bajaj Finserv. Our coordinator walks patients through pre-authorisation before admission.'],
];
$hide_footer_cta = true;
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
require_once __DIR__ . '/includes/blog-registry.php';
?>

<!-- ── I. HERO — surgeon portrait + emergency panel ───────────────── -->
<section class="bg-[#F8F5EF] border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-12 md:pt-16 pb-16 md:pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

      <!-- Left: surgeon + credentials -->
      <div class="lg:col-span-7 order-2 lg:order-1">
        <h1 class="gna-serif gna-h1 text-[var(--navy)] mb-6">
          <span class="flex items-center gap-3 mb-6 gna-eyebrow !text-[11px] !tracking-[0.22em] text-[var(--steel)]" style="font-family:Inter,sans-serif;font-style:normal;line-height:1.4"><span class="inline-block w-8 h-px bg-[var(--steel)] shrink-0" aria-hidden="true"></span>Oral &amp; Maxillofacial Surgeons · Gachibowli, Hyderabad</span>
          
          Surgery for the face, the jaw,<br class="hidden sm:block"/>
          and the joint <span class="gna-serif-i text-[var(--steel)]">that connects them.</span>
        </h1>

        <!-- Sub -->
        <p class="text-[15px] md:text-[16px] leading-[1.65] text-[var(--slate)] max-w-2xl mb-8">
          Twenty years inside operating theatres. Two consultant surgeons. One focused practice in Hyderabad for the diagnosis, reconstruction, and rehabilitation of the face, jaw, and temporomandibular joint.
        </p>

        <!-- Credentials plate -->
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-8 py-5 border-y gna-rule">
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Surgeon</span>
            <span class="font-semibold text-[var(--navy)]">Dr. Suresh P.L., MDS</span>
          </div>
          <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Practice</span>
            <span class="font-semibold text-[var(--navy)]">Est. 2004</span>
          </div>
          <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Procedures</span>
            <span class="font-semibold text-[var(--navy)]">5,000+</span>
          </div>
          <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Hospital</span>
            <span class="font-semibold text-[var(--navy)]">CARE Hospitals</span>
          </div>
        </div>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row sm:flex-wrap sm:items-center gap-3 mb-8">
          <a href="/book-appointment" class="gna-btn gna-btn-primary w-full sm:w-auto">Book Appointment →</a>
          <a href="https://wa.me/919000666476?text=Hello%20Gnathos%20team%2C%20I%27d%20like%20a%20consultation." target="_blank" rel="noopener" class="gna-btn gna-btn-whatsapp w-full sm:w-auto">WhatsApp Us</a>
          <a href="tel:+919000666476" class="gna-btn gna-btn-outline w-full sm:w-auto">Call +91 90006 66476</a>
        </div>

        <!-- Trust micro-line -->
        <div class="flex flex-wrap items-center gap-x-5 gap-y-2 gna-eyebrow text-[var(--slate)]">
          
          <span class="flex items-center gap-1.5">
            <span class="text-[var(--steel)]" aria-hidden="true">✓</span> NABH-accredited partner hospitals
          </span>
          <span class="text-[var(--slate-soft)]" aria-hidden="true">·</span>
          <span class="flex items-center gap-1.5">
            <span class="text-[var(--steel)]" aria-hidden="true">✓</span> AOMSI Member
          </span>
          <span class="text-[var(--slate-soft)]" aria-hidden="true">·</span>
          <span class="flex items-center gap-1.5">
            <span class="text-[var(--steel)]" aria-hidden="true">✓</span> Cashless Insurance
          </span>
        </div>
      </div>

      <!-- Right: surgeon portrait + emergency card -->
      <div class="lg:col-span-5 order-1 lg:order-2 mb-10 lg:mb-0">
        <div class="relative">
          <!-- Surgeon portrait -->
          <div class="aspect-[4/5] overflow-hidden rounded-md border gna-rule bg-[var(--warm-deep)]">
            <img src="asset/Dr.-Suresh.webp" alt="Dr. Suresh P.L., MDS, oral and maxillofacial surgeon" width="300" height="335" fetchpriority="high" decoding="async" class="w-full h-full object-cover" style="object-position: center 22%;"/>
          </div>
          <!-- Identity caption (anchored, not floating disconnected) -->
          <div class="absolute -bottom-5 left-4 right-4 md:left-6 md:right-auto md:max-w-[320px] bg-white border gna-rule rounded-md p-4 gna-float">
            <div class="flex items-center gap-3">
              <div class="w-11 h-11 rounded-full bg-[var(--warm-deep)] overflow-hidden shrink-0 border gna-rule">
                <img src="asset/dr-navatha-mortha-facial.webp" alt="" aria-hidden="true" class="w-full h-full object-cover"/>
              </div>
              <div class="text-[13px] leading-tight">
                <div class="font-semibold text-[var(--navy)]">Dr. Suresh P.L. &amp; Dr. Navatha Mortha</div>
                <div class="text-[var(--slate)] mt-0.5">MDS · Maxillofacial Surgeons</div>
              </div>
            </div>
          </div>

          <!-- Emergency overlay card -->
          <div class="hidden lg:block absolute -top-6 -right-6 bg-[var(--trauma)] text-white rounded-md p-5 max-w-[220px] gna-float ring-1 ring-black/10">
            <div class="flex items-center gap-2 mb-2">
              <span class="w-2 h-2 bg-white rounded-full animate-pulse" aria-hidden="true"></span>
              <span class="gna-eyebrow text-white">Trauma Line</span>
            </div>
            <p class="text-[13px] leading-[1.4] font-semibold mb-2">Facial fracture?<br/>Call now.</p>
            <a href="tel:+919000666476" class="block text-[15px] font-bold underline underline-offset-2">+91 90006 66476</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ── IA. Local trust band — NAP + service area + hours ────────── -->
<section id="local-info" class="bg-white border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-7 md:py-9">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-10 items-start">

      <!-- Practice location -->
      <address class="md:col-span-4 not-italic">
        <div class="gna-eyebrow text-[var(--slate)] mb-2">Practice Location</div>
        <p class="text-[14px] leading-[1.55] text-[var(--navy)] font-medium">
          Cabin No. 214, Regency Prime<br/>
          Jayabheri Pine Valley, Gachibowli<br/>
          Hyderabad 500032, Telangana
        </p>
        <p class="text-[12px] text-[var(--slate)] mt-2">
          Close to CARE Hospitals, HITEC City · Parking onsite · <a href="/maxillofacial-surgeon-gachibowli" class="underline underline-offset-2 text-[var(--steel)]">Clinic details &amp; directions</a>
        </p>
      </address>

      <!-- Service area -->
      <div class="md:col-span-5">
        <div class="gna-eyebrow text-[var(--slate)] mb-2">Serving</div>
        <p class="text-[14px] leading-[1.55] text-[var(--navy)]">
          <strong class="font-semibold">Hyderabad</strong> &mdash; Gachibowli, Banjara Hills, Jubilee Hills, Madhapur, Kondapur, Kukatpally, Secunderabad
        </p>
        <p class="text-[12px] text-[var(--slate)] mt-2">
          Patients travel from across Telangana &amp; Andhra Pradesh &mdash; Mahbubnagar, Warangal, Nizamabad, Karimnagar, Visakhapatnam, Vijayawada, Guntur.
        </p>
      </div>

      <!-- Hours + contact -->
      <div class="md:col-span-3">
        <div class="gna-eyebrow text-[var(--slate)] mb-2">Hours</div>
        <dl class="text-[13px] leading-[1.55] text-[var(--navy)] space-y-0.5">
          <div class="flex justify-between gap-4"><dt class="text-[var(--slate)]">Mon&ndash;Thu</dt><dd>8:00 &ndash; 17:00</dd></div>
          <div class="flex justify-between gap-4"><dt class="text-[var(--slate)]">Fri</dt><dd>8:00 &ndash; 13:00</dd></div>
          <div class="flex justify-between gap-4"><dt class="text-[var(--slate)]">Sat &amp; Sun</dt><dd>Trauma only</dd></div>
        </dl>
        <a href="tel:+919000666476" class="inline-flex items-center gap-2 mt-3 text-[14px] font-semibold text-[var(--trauma)] gna-link">
          Trauma line: +91 90006 66476
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ── II. Chief-complaint quick-access strip ─────────────────────── -->
<section id="symptoms" class="bg-[var(--warm-deep)] border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-10 md:py-14">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8 items-center">
      <div class="md:col-span-3">
        <div class="flex items-center gap-3 mb-3">
          <span class="inline-block w-8 h-px bg-[var(--steel)]"></span>
          <span class="gna-eyebrow text-[var(--steel)]">Tell us what's wrong</span>
        </div>
        <h2 class="gna-serif text-[22px] md:text-[26px] leading-[1.1] text-[var(--navy)]">I have a problem with my…</h2>
      </div>
      <div class="md:col-span-9 grid grid-cols-2 md:grid-cols-4 gap-3">
        <a href="/tmj-treatment" class="gna-card gna-triage p-5 md:p-6 transition-all group" aria-label="Jaw pain — TMJ disorders">
          <svg class="w-7 h-7 mb-3 text-[var(--steel)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M8 3c-2.5 0-4 1.5-4 4v3c0 1.5.5 2.5 1 4 .5 1.5.5 2.5.5 4 0 2 1 3 2.5 3s2-1 2-3v-1h4v1c0 2 .5 3 2 3s2.5-1 2.5-3c0-1.5 0-2.5.5-4 .5-1.5 1-2.5 1-4V7c0-2.5-1.5-4-4-4-1 0-1.5.3-2 1-.5-.7-1-1-2-1-1.5 0-2 .5-2 1"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Jaw</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Pain, clicking, locking</div>
        </a>
        <a href="/facial-injuries" class="gna-card gna-triage p-5 md:p-6 transition-all group" aria-label="Facial injury — fractures and trauma">
          <svg class="w-7 h-7 mb-3 text-[var(--trauma)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 2a3 3 0 0 1 3 3v1.5c0 1 .5 2 1 2.5l3 3c1 1 1.5 2 1.5 3.5 0 2-1.5 3.5-3.5 3.5h-1c-1 0-1.5.5-1.5 1.5v2c0 1-1 2-2 2h-3c-1 0-2-1-2-2v-2c0-1-.5-1.5-1.5-1.5h-1C2 18.5.5 17 .5 15c0-1.5.5-2.5 1.5-3.5l3-3c.5-.5 1-1.5 1-2.5V5a3 3 0 0 1 3-3z"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Face</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Fracture, accident, laceration</div>
        </a>
        <a href="/oral-cancer" class="gna-card gna-triage p-5 md:p-6 transition-all group" aria-label="Mouth lesion or growth">
          <svg class="w-7 h-7 mb-3 text-[var(--steel)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M9 3v2m6-2v2M8 7h8c1 0 2 1 2 2v8c0 2.5-2.5 4.5-6 4.5S6 19.5 6 17V9c0-1 1-2 2-2z"/>
            <path d="M10 12h4"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Mouth</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Lesion, growth, ulcer</div>
        </a>
        <a href="/rhinoplasty" class="gna-card gna-triage p-5 md:p-6 transition-all group" aria-label="Nasal surgery or breathing issues">
          <svg class="w-7 h-7 mb-3 text-[var(--steel)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 3c-3 0-5 2-5 5 0 1.5.5 3 1 4.5l1 3c.5 1.5 1 2.5 1 4 0 2 .5 3.5 2 3.5s2-1.5 2-3.5c0-1.5.5-2.5 1-4l1-3c.5-1.5 1-3 1-4.5 0-3-2-5-5-5z"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Nose</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Shape, breathing, sinus</div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ── III. About — practice introduction ─────────────────────────── -->
<section id="about" class="bg-[#F8F5EF]">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-start">
      <div class="md:col-span-4">
        <div class="flex items-center gap-3 mb-3">
          <span class="inline-block w-8 h-px bg-[var(--steel)]"></span>
          <span class="gna-eyebrow text-[var(--steel)]">About the Practice</span>
        </div>
        <h2 class="gna-serif gna-h2 text-[var(--navy)]">Hyderabad's focused maxillofacial surgery practice.</h2>
      </div>
      <div class="md:col-span-7 md:col-start-6 text-[16px] leading-[1.7] text-[var(--slate)] space-y-5">
        <p class="gna-serif text-[21px] md:text-[25px] leading-[1.45] text-[var(--navy)]">Dr. Suresh P.L. founded Gnathos in Hyderabad in 2004 after a decade of tertiary-care academic maxillofacial surgery. The practice has never expanded into adjacent specialties. The choice was deliberate: stay focused on the face, the jaws, and the joint in front of the ear.</p>
        <p>Dr. Navatha Mortha joined as a second consultant surgeon in 2018, extending the practice's reach into TMJ arthroscopy and orthognathic surgery. Both surgeons continue to operate five days a week at hospitals across Hyderabad, publish in peer-reviewed journals, and consult on complex cases referred from across Telangana and Andhra Pradesh.</p>
        <p>Surgery takes place at NABH-accredited hospitals in Hyderabad — primarily <a href="/book-appointment" class="gna-link font-medium">CARE Hospitals, HITEC City</a>, with additional operating privileges at KIMS, Apollo Spectra, and Yashoda Hospitals. This gives patients access to full ICU, anaesthesia, and emergency backup that a standalone clinic cannot.</p>
      </div>
    </div>

    <!-- Quick stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-y-8 gap-x-6 md:gap-8 mt-16 pt-10 border-t gna-rule md:divide-x md:divide-[var(--hairline)] md:[&>*]:pl-8 md:[&>*:first-child]:pl-0">
      <div>
        <div class="gna-serif gna-stat text-[var(--navy)]">20<sup class="text-[16px] text-[var(--steel)]">+</sup></div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Years Operating</div>
      </div>
      <div>
        <div class="gna-serif gna-stat text-[var(--navy)]">5,000<sup class="text-[16px] text-[var(--steel)]">+</sup></div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Procedures</div>
      </div>
      <div>
        <div class="gna-serif gna-stat text-[var(--navy)]">15<sup class="text-[16px] text-[var(--steel)]">+</sup></div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Publications</div>
      </div>
      <div>
        <div class="gna-serif gna-stat text-[var(--navy)]">2</div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Consultant Surgeons</div>
      </div>
    </div>
  </div>
</section>

<!-- ── IV. Conditions grid (6 specialties) ────────────────────────── -->
<section class="bg-[var(--warm-deep)] border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12">
      <div class="max-w-2xl">
        <div class="flex items-center gap-3 mb-3">
          <span class="inline-block w-8 h-px bg-[var(--steel)]"></span>
          <span class="gna-eyebrow text-[var(--steel)]">Conditions &amp; Procedures</span>
        </div>
        <h2 class="gna-serif gna-h2 text-[var(--navy)]">Six specialties. One practice.</h2>
        <p class="text-[15px] leading-[1.65] text-[var(--slate)] mt-3 max-w-xl">Browse by the problem that brought you here, or jump to a specific surgery. Each page covers diagnosis, options, recovery, and what to bring to your first visit.</p>
      </div>
      <a href="/conditions" class="hidden md:inline-flex gna-eyebrow gna-link text-[var(--navy)] self-end">All conditions →</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <!-- TMJ -->
      <a href="/tmj-treatment" class="gna-card overflow-hidden flex flex-col">
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">01 · Temporomandibular</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">TMJ Disorders</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Jaw pain, clicking, locking, and arthritic joint disease. Conservative care first; arthroscopy when surgery is needed.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Facial injuries -->
      <a href="/facial-injuries" class="gna-card overflow-hidden flex flex-col">
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--trauma)] mb-3">02 · Trauma · 24/7</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Facial Injuries &amp; Fractures</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Mandible, cheekbone, orbital, nasal, and pan-facial fractures. Emergency care coordinated with CARE Hospitals, HITEC City, 24/7.</p>
          <span class="gna-eyebrow text-[var(--trauma)] inline-flex items-center gap-1.5">Call trauma line →</span>
        </div>
      </a>

      <!-- Orthognathic -->
      <a href="/orthognathic-surgery" class="gna-card overflow-hidden flex flex-col">
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">03 · Skeletal Correction</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Jaw Misalignment</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Orthognathic surgery to align the jaws for chewing, breathing, speech, and facial balance.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Rhinoplasty -->
      <a href="/rhinoplasty" class="gna-card overflow-hidden flex flex-col">
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">04 · Functional &amp; Aesthetic</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Rhinoplasty &amp; Septoplasty</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Nasal airway correction, septal deviation repair, and cosmetic refinement.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Sleep apnea -->
      <a href="/obstructive-sleep-apnea" class="gna-card overflow-hidden flex flex-col">
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">05 · Airway</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Obstructive Sleep Apnea</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Maxillomandibular advancement and upper-airway surgery when CPAP is not tolerated.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Oral cancer -->
      <a href="/oral-cancer" class="gna-card overflow-hidden flex flex-col">
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">06 · Oncology</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Oral Cancer &amp; Reconstruction</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Screening, biopsy, resection, and immediate reconstruction with grafts and flaps.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ── V. Credentials / affiliations strip ────────────────────────── -->
<section class="bg-white border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-10">
    <p class="gna-eyebrow text-[var(--slate)] text-center mb-6">Operating Privileges &amp; Professional Affiliations</p>
    <div class="flex flex-wrap items-center justify-center gap-x-8 md:gap-x-12 gap-y-4 text-[14px] md:text-[16px]">
      <div class="gna-serif font-semibold text-[var(--navy)]">CARE Hospitals</div>
      <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
      <div class="gna-serif font-semibold text-[var(--navy)]">KIMS</div>
      <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
      <div class="gna-serif font-semibold text-[var(--navy)]">Apollo Spectra</div>
      <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
      <div class="gna-serif font-semibold text-[var(--navy)]">Yashoda</div>
      <div class="text-[var(--slate-soft)]" aria-hidden="true">·</div>
      <div class="gna-eyebrow text-[var(--slate)]">AOMSI · IAOMS · NABH</div>
    </div>
    <p class="text-center text-[13px] text-[var(--slate)] mt-6 max-w-2xl mx-auto">Surgery takes place only at NABH-accredited facilities with full ICU, anaesthesia, and emergency backup.</p>
  </div>
</section>

<!-- ── VI. Surgeons — Dr. Suresh + Dr. Navatha ────────────────────── -->
<section id="doctors" class="bg-[#F8F5EF]">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="text-center mb-14 md:mb-16 max-w-3xl mx-auto">
      <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Our Surgeons</p>
      <h2 class="gna-serif gna-h2 text-[var(--navy)]">Two consultants.<br/>One operating philosophy.</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 max-w-5xl mx-auto">

      <!-- Dr. Suresh -->
      <article class="gna-card overflow-hidden">
        <div class="aspect-[4/5] bg-[var(--warm-deep)] overflow-hidden">
          <img src="asset/Dr.-Suresh.webp" alt="Portrait of Dr. Suresh P.L., MDS" width="300" height="335" loading="lazy" decoding="async" class="w-full h-full object-cover"/>
        </div>
        <div class="p-7 md:p-8">
          <div class="gna-eyebrow text-[var(--steel)] mb-2">Consultant · Surgeon I</div>
          <h3 class="gna-serif text-[32px] leading-[1.1] text-[var(--navy)] mb-3">Dr. Suresh P.L.</h3>
          <p class="text-[12px] gna-eyebrow text-[var(--slate)] mb-4">MDS · Oral &amp; Maxillofacial Surgery · 20+ years</p>
          <p class="text-[14px] leading-[1.65] text-[var(--slate)] mb-6">Founder of Gnathos. Hyderabad-based maxillofacial surgeon specialising in TMJ disorders, orthognathic surgery, and complex facial trauma. Operates at CARE Hospitals, HITEC City.</p>
          <div class="flex flex-wrap gap-2 text-[11px]">
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">TMJ</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Orthognathics</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Trauma</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Oral Cancer</span>
          </div>
        </div>
      </article>

      <!-- Dr. Navatha -->
      <article class="gna-card overflow-hidden">
        <div class="aspect-[4/5] bg-[var(--warm-deep)] overflow-hidden">
          <img src="asset/dr-navatha-mortha-facial.webp" alt="Portrait of Dr. Navatha Mortha, MDS" width="300" height="335" loading="lazy" decoding="async" class="w-full h-full object-cover"/>
        </div>
        <div class="p-7 md:p-8">
          <div class="gna-eyebrow text-[var(--steel)] mb-2">Consultant · Surgeon II</div>
          <h3 class="gna-serif text-[32px] leading-[1.1] text-[var(--navy)] mb-3">Dr. Navatha Mortha</h3>
          <p class="text-[12px] gna-eyebrow text-[var(--slate)] mb-4">MDS · Oral &amp; Maxillofacial Surgery · 15+ years</p>
          <p class="text-[14px] leading-[1.65] text-[var(--slate)] mb-6">Hyderabad-based senior consultant in orthognathic surgery and TMJ arthroscopy. Leads the practice's minimally-invasive joint work and reconstructive rhinoplasty at CARE Hospitals, HITEC City.</p>
          <div class="flex flex-wrap gap-2 text-[11px]">
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">TMJ Arthroscopy</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Orthognathics</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Rhinoplasty</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Reconstruction</span>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ── VIII. Insurance / payment trust line ───────────────────────── -->
<section id="insurance" class="bg-[var(--navy)] text-white border-y gna-rule-light">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
      <div class="md:col-span-1">
        <p class="gna-eyebrow text-white/60 mb-2">Payment &amp; Insurance</p>
        <h2 class="gna-serif text-[24px] md:text-[28px] leading-[1.15] text-white">Cashless and EMI options.</h2>
      </div>
      <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6 text-[14px]">
        <div class="border-l-2 border-[var(--steel)] pl-4">
          <p class="font-semibold text-white mb-1">Cashless Insurance</p>
          <p class="text-white/70 leading-[1.55]">Star Health · ICICI Lombard · HDFC ERGO · New India Assurance</p>
        </div>
        <div class="border-l-2 border-[var(--steel)] pl-4">
          <p class="font-semibold text-white mb-1">No-Cost EMI</p>
          <p class="text-white/70 leading-[1.55]">Bajaj Finserv · HDFC — for procedures above ₹50,000</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── VIIIc. Patient guides (auto from blog registry) ─────────────── -->
<section id="guides" class="bg-white border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-24">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10">
      <div class="max-w-2xl">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">Patient guides</p>
        <h2 class="gna-serif gna-h2 text-[var(--navy)]">Understand your condition before you decide.</h2>
        <p class="text-[15px] leading-[1.65] text-[var(--slate)] mt-3">Plain-language guides written and medically reviewed by our surgeons.</p>
      </div>
      <a href="/blogs" class="gna-eyebrow gna-link text-[var(--navy)] self-start md:self-end">All patient guides →</a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach (array_slice(gna_blog_posts(), 0, 6) as $g): ?>
      <a href="<?= gna_e($g['url']) ?>" class="gna-card p-6 md:p-7 flex flex-col">
        <span class="gna-eyebrow text-[var(--steel)] mb-3"><?= gna_e($g['category']) ?></span>
        <span class="gna-serif text-[23px] leading-[1.2] text-[var(--navy)] mb-3"><?= gna_e($g['title']) ?></span>
        <span class="text-[13.5px] leading-[1.6] text-[var(--slate)] mb-5 grow"><?= gna_e(mb_strimwidth(strip_tags($g['excerpt']), 0, 150, '…')) ?></span>
        <span class="text-[12px] text-[var(--slate)]"><?= (int)$g['read_minutes'] ?> min read · <?= gna_e($GNA_DOCTORS[$g['author']]['name']) ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── IX. FAQ ────────────────────────────────────────────────────── -->
<section id="faq" class="bg-[#F8F5EF]">
  <div class="max-w-[1100px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
      <div class="md:col-span-4">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Before you book</p>
        <h2 class="gna-serif gna-h2 text-[var(--navy)] mb-4">Common questions, answered honestly.</h2>
        <p class="text-[14px] leading-[1.65] text-[var(--slate)]">If your question isn't here, message us on WhatsApp and we'll answer within the hour during clinic hours.</p>
      </div>
      <div class="md:col-span-8 divide-y gna-rule">
        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <h3 class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium m-0">How long is recovery from orthognathic surgery?</h3>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">Return to non-strenuous work takes two to three weeks. Skeletal healing continues for nine to twelve months. We schedule reviews at week one, week four, three months, six months, and twelve months.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <h3 class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium m-0">Is TMJ surgery always required for jaw pain?</h3>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">No. Surgery is reserved for cases where conservative care — splints, physiotherapy, medication, occlusal adjustment — has failed and structural joint disease is confirmed on imaging. Roughly seventy percent of TMJ patients we see never reach the operating theatre.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <h3 class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium m-0">Do you treat facial trauma emergencies?</h3>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">Yes. We coordinate with CARE Hospitals, HITEC City' emergency department for immediate facial trauma — mandibular, orbital, zygomatic, nasal, and pan-facial fractures. The trauma line is answered 24/7 by a member of the surgical team.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <h3 class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium m-0">How much does a consultation cost?</h3>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">A first consultation runs forty-five minutes and includes imaging review where available. The fee is fixed and disclosed at booking. Surgical quotes are issued in writing after the planning consultation — never verbally on the first visit.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <h3 class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium m-0">Do you accept insurance?</h3>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">Cashless treatment is available with Star Health, ICICI Lombard, HDFC ERGO, and New India Assurance. For procedures above ₹50,000, no-cost EMI is available through Bajaj Finserv. Our coordinator walks patients through pre-authorisation before admission.</p>
        </details>
      </div>
    </div>
  </div>
</section>

<!-- ── X. Booking panel ───────────────────────────────────────────── -->
<section id="contact" class="bg-[var(--warm-deep)] border-t gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">

      <!-- Left info column -->
      <div class="lg:col-span-5">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Make contact</p>
        <h2 class="gna-serif gna-h2-lg text-[var(--navy)] mb-5">Request a consultation.</h2>
        <p class="text-[15px] leading-[1.65] text-[var(--slate)] max-w-md mb-10">Our coordinator will respond within twenty-four hours with available appointment windows and what to bring to your first visit.</p>

        <div class="space-y-5">
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Direct line</div>
            <a href="tel:+919000666476" class="gna-serif text-[28px] text-[var(--navy)] hover:text-[var(--steel)] transition-colors">+91 90006 66476</a>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">WhatsApp</div>
            <a href="https://wa.me/919000666476" class="text-[15px] text-[var(--navy)] gna-link" target="_blank" rel="noopener">wa.me/919000666476</a>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Email</div>
            <a href="mailto:gnathosface@gmail.com" class="text-[15px] text-[var(--navy)] gna-link">gnathosface@gmail.com</a>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Practice</div>
            <p class="text-[14px] leading-[1.6] text-[var(--slate)]">Cabin No. 214, Regency Prime<br/>Jayabheri Pine Valley, Gachibowli<br/>Hyderabad 500032</p>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Hours</div>
            <p class="text-[14px] leading-[1.6] text-[var(--slate)]">Mon–Thu · 08:00 – 17:00<br/>Fri · 08:00 – 13:00<br/>Sat–Sun · facial trauma only</p>
          </div>
        </div>

        <!-- Map loads only on request (privacy + speed) -->
        <div class="mt-8 border gna-rule rounded-md overflow-hidden bg-white">
          <div class="gna-map-facade h-[240px] flex items-center justify-center text-center p-6">
            <button type="button" data-gna-map class="gna-btn gna-btn-outline !py-2.5">Show map</button>
          </div>
          <div class="px-4 py-3 text-[12px] text-[var(--slate)] flex items-center justify-between">
            <span>Cabin No. 214, Regency Prime, Gachibowli</span>
            <a href="<?= GNA_DIRECTIONS ?>" target="_blank" rel="noopener" class="gna-link font-medium text-[var(--steel)]">Get directions →</a>
          </div>
        </div>
      </div>

      <!-- Right form -->
      <div class="lg:col-span-7">
        <div class="bg-white border gna-rule rounded-md p-7 md:p-10">
          <h3 class="gna-serif text-[26px] text-[var(--navy)] mb-2">Send an enquiry</h3>
          <p class="text-[14px] text-[var(--slate)] mb-8">A coordinator will call you within one working day.</p>
          <?php $form_variant = 'full'; $form_topic = ''; $form_on_dark = false; include __DIR__ . '/includes/lead-form.php'; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include $path_prefix . 'footer.php';
?>