<?php
// Treatment / condition / symptom pages: surgeons + related patient guides
if (!empty($cta_topic) && ($og_type ?? 'website') !== 'article' && empty($hide_page_extras)) include __DIR__ . '/includes/page-extras.php';
if (empty($hide_footer_cta)) include __DIR__ . '/includes/cta-band.php';
?>
</main>

<footer class="bg-[#0b2139] text-[#F8F5EF] gna-on-dark">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-14 md:pt-16 pb-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b gna-rule-light">
      <div class="lg:col-span-4">
        <img alt="Gnathos Facial" class="h-8 w-auto brightness-0 invert mb-5" src="/asset/gna-logop.png" width="300" height="71" loading="lazy"/>
        <p class="text-[14px] leading-[1.65] text-white/80 mb-6 max-w-sm">Oral and maxillofacial surgery practice in Gachibowli, Hyderabad, led by Dr. Suresh P.L. and Dr. Navatha Mortha (MDS). Surgery is performed at NABH-accredited partner hospitals.</p>
        <address class="not-italic text-[13px] text-white/80 leading-[1.7] space-y-3">
          <p>Cabin No. 214, Regency Prime<br/>Jayabheri Pine Valley, Gachibowli<br/>Hyderabad 500032, Telangana</p>
          <p><a class="text-white font-semibold text-[15px] hover:underline" href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a><br/>
             <a class="hover:underline" href="mailto:<?= GNA_EMAIL ?>"><?= GNA_EMAIL ?></a></p>
          <p><a class="text-white/90 underline underline-offset-2" href="<?= gna_e(GNA_DIRECTIONS) ?>" target="_blank" rel="noopener" data-gna-track="directions">Get directions</a> · <a class="text-white/90 underline underline-offset-2" href="<?= gna_e(GNA_MAPS_URL) ?>" target="_blank" rel="noopener" data-gna-track="maps">Google Maps</a> · <a class="text-white/90 underline underline-offset-2" href="/maxillofacial-surgeon-gachibowli">Clinic details</a></p>
        </address>
      </div>
      <div class="lg:col-span-3">
        <h2 class="gna-eyebrow text-white/50 mb-5">Conditions</h2>
        <ul class="space-y-2.5 text-[14px] text-white/85">
          <li><a class="hover:text-white hover:underline" href="/tmj-treatment">TMJ disorders &amp; jaw pain</a></li>
          <li><a class="hover:text-white hover:underline" href="/facial-injuries">Facial injuries &amp; fractures</a></li>
          <li><a class="hover:text-white hover:underline" href="/orthognathic-surgery">Jaw misalignment</a></li>
          <li><a class="hover:text-white hover:underline" href="/obstructive-sleep-apnea">Sleep apnea &amp; snoring</a></li>
          <li><a class="hover:text-white hover:underline" href="/oral-cancer">Oral cancer</a></li>
          <li><a class="hover:text-white hover:underline" href="/cysts-tumors-face">Jaw cysts &amp; tumours</a></li>
          <li><a class="hover:text-white hover:underline" href="/facial-swelling-treatment">Facial swelling</a></li>
        </ul>
      </div>
      <div class="lg:col-span-2">
        <h2 class="gna-eyebrow text-white/50 mb-5">Treatments</h2>
        <ul class="space-y-2.5 text-[14px] text-white/85">
          <li><a class="hover:text-white hover:underline" href="/tmj-arthroscopy">TMJ arthroscopy</a></li>
          <li><a class="hover:text-white hover:underline" href="/jaw-surgery">Jaw surgery</a></li>
          <li><a class="hover:text-white hover:underline" href="/rhinoplasty-treatment">Rhinoplasty</a></li>
          <li><a class="hover:text-white hover:underline" href="/oral-cancer-treatment">Oral cancer surgery</a></li>
          <li><a class="hover:text-white hover:underline" href="/skin-grafts-and-flaps">Skin grafts &amp; flaps</a></li>
          <li><a class="hover:text-white hover:underline" href="/cosmetic-facial-surgery-treatment">Cosmetic facial surgery</a></li>
          <li><a class="hover:text-white hover:underline" href="/treatments">All treatments</a></li>
        </ul>
      </div>
      <div class="lg:col-span-3">
        <h2 class="gna-eyebrow text-white/50 mb-5">Patients</h2>
        <ul class="space-y-2.5 text-[14px] text-white/85">
          <li><a class="hover:text-white hover:underline" href="/book-appointment">Book an appointment</a></li>
          <li><a class="hover:text-white hover:underline" href="/facial-trauma-emergency-hyderabad">Facial injury? 24/7 trauma line</a></li>
          <li><a class="hover:text-white hover:underline" href="/maxillofacial-surgeon-gachibowli">Our clinic in Gachibowli</a></li>
          <li><a class="hover:text-white hover:underline" href="/blogs/">Patient guides</a></li>
          <li><a class="hover:text-white hover:underline" href="/#faq">FAQs</a></li>
          <li><a class="hover:text-white hover:underline" href="/#insurance">Insurance &amp; EMI</a></li>
          <li><a class="hover:text-white hover:underline" href="/#doctors">Our surgeons</a></li>
        </ul>
        <div class="mt-6 pt-5 border-t gna-rule-light text-[13px] text-white/75 leading-[1.6]">
          <p class="gna-eyebrow text-white/50 mb-2">Hours</p>
          <p>Mon–Thu 8:00–17:00 · Fri 8:00–13:00<br/>Sat–Sun: facial trauma only</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-8 border-b gna-rule-light text-[13px] text-white/75 leading-[1.6]">
      <p><span class="gna-eyebrow text-white/50 block mb-2">Operating privileges</span>CARE Hospitals (HITEC City) · KIMS Hospitals · Apollo Spectra · Yashoda Hospitals (NABH-accredited facilities, Hyderabad).</p>
      <p><span class="gna-eyebrow text-white/50 block mb-2">Payment &amp; insurance</span>Cashless treatment with Star Health, ICICI Lombard and HDFC ERGO, subject to policy terms and pre-authorisation. No-cost EMI through Bajaj Finserv for eligible surgical procedures.</p>
    </div>

    <p class="pt-6 text-[12.5px] leading-[1.6] text-white/70">
      <strong class="text-white/85 font-semibold">Serving:</strong> <?= gna_e(implode(' · ', GNA_NEARBY)) ?> and patients from across Hyderabad, Telangana and Andhra Pradesh.
    </p>
    <p class="py-6 text-[12px] leading-[1.6] text-white/60 border-b gna-rule-light">
      <strong class="text-white/80 font-semibold">Medical disclaimer:</strong> Information on this website is general health education and is not a substitute for a consultation, diagnosis or treatment by a qualified clinician. Results and recovery vary from person to person; no outcome is guaranteed. In an emergency, call 108 or go to the nearest emergency department. <a class="underline" href="/medical-disclaimer">Read the full disclaimer</a>.
    </p>

    <div class="pt-6 flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-[12px] text-white/60">
      <p>© <?= date('Y') ?> Gnathos Facial · Oral &amp; Maxillofacial Surgery, Hyderabad</p>
      <ul class="flex flex-wrap gap-x-5 gap-y-1">
        <li><a href="/privacy-policy" class="inline-block py-2 hover:text-white">Privacy notice</a></li>
        <li><a href="/terms-of-use" class="inline-block py-2 hover:text-white">Terms of use</a></li>
        <li><a href="/medical-disclaimer" class="inline-block py-2 hover:text-white">Medical disclaimer</a></li>
        <li><a href="/accessibility" class="inline-block py-2 hover:text-white">Accessibility</a></li>
        <li><a href="/privacy-policy#grievance" class="inline-block py-2 hover:text-white">Grievance officer</a></li>
        <li><button type="button" data-gna-consent-open class="inline-block py-2 hover:text-white underline-offset-2">Cookie &amp; consent settings</button></li>
      </ul>
    </div>
  </div>
</footer>

<div id="gna-actionbar" class="gna-actionbar lg:hidden fixed inset-x-0 bottom-0 z-[54] grid grid-cols-3 border-t gna-rule bg-[#F8F5EF]" style="padding-bottom: env(safe-area-inset-bottom, 0px);" role="navigation" aria-label="Quick actions">
  <a href="tel:<?= GNA_PHONE ?>" class="gna-btn gna-btn-outline !rounded-none !border-0 !border-r !border-[var(--hairline)] !py-3.5 !text-[11px]">Call</a>
  <a href="<?= gna_e(gna_wa()) ?>" target="_blank" rel="noopener" class="gna-btn gna-btn-whatsapp !rounded-none !border-0 !py-3.5 !text-[11px]">WhatsApp</a>
  <a href="/book-appointment" class="gna-btn gna-btn-primary !rounded-none !border-0 !py-3.5 !text-[11px]">Book</a>
</div>

<?php include __DIR__ . '/includes/consent-ui.php'; ?>

<script>
(function () {
  // Sticky mobile action bar
  var bar = document.getElementById('gna-actionbar');
  if (bar) {
    var t = function () { bar.classList.toggle('is-visible', window.scrollY > 480); };
    t(); window.addEventListener('scroll', t, { passive: true });
  }

  // Enquiry forms (DPDP: consent is required, recorded with version + timestamp, and nothing is sent to analytics)
  var ENDPOINT = '<?= GNA_FORM_ENDPOINT ?>';
  document.querySelectorAll('form[data-gna-form]').forEach(function (form) {
    var date = form.querySelector('input[type=date]');
    if (date) date.min = new Date().toISOString().slice(0, 10);
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var err = form.querySelector('[data-gna-error]'), ok = form.querySelector('[data-gna-success]'), btn = form.querySelector('button[type=submit]');
      var name = form.elements.name.value.trim(), phone = form.elements.phone.value.trim(), consent = form.elements.consent.checked;
      var msg = '';
      if (!name) msg = 'Please enter your name.';
      else if (!/^[0-9+\s\-]{10,16}$/.test(phone)) msg = 'Please enter a valid mobile number.';
      else if (!consent) msg = 'Please tick the consent box so we can contact you about your enquiry.';
      if (msg) { err.textContent = msg; err.classList.remove('hidden'); return; }
      err.classList.add('hidden');
      btn.disabled = true; var label = btn.textContent; btn.textContent = 'Sending…';

      var topic = form.elements.treatment ? form.elements.treatment.value : '';
      var pref = form.elements.preferred_date ? form.elements.preferred_date.value : '';
      var email = form.elements.email ? form.elements.email.value.trim() : '';
      var parts = name.split(/\s+/);
      var fd = new FormData();
      fd.append('FirstName', parts[0] || '');
      fd.append('LastName', parts.slice(1).join(' '));
      fd.append('Email', email);
      fd.append('PhoneNumber', phone);
      fd.append('Message', (topic ? 'Concern: ' + topic + '\n' : '') + (pref ? 'Preferred date: ' + pref + '\n' : '') + 'Page: ' + location.pathname);
      fd.append('name', name); fd.append('phone', phone); fd.append('treatment', topic); fd.append('preferred_date', pref);
      fd.append('consent', 'yes');
      fd.append('consent_version', '<?= GNA_CONSENT_VERSION ?>');
      fd.append('consent_timestamp', new Date().toISOString());
      fd.append('consent_purpose', 'Respond to enquiry and arrange consultation');
      fd.append('page_url', location.origin + location.pathname);

      fetch(ENDPOINT, { method: 'POST', body: fd, mode: 'no-cors' })
        .then(function () {
          Array.prototype.forEach.call(form.children, function (c) { if (c !== ok) c.classList.add('hidden'); });
          ok.classList.remove('hidden'); ok.focus();
          if (window.usermaven) window.usermaven('track', 'lead_submitted', { variant: form.getAttribute('data-gna-form') });
        })
        .catch(function () {
          btn.disabled = false; btn.textContent = label;
          err.textContent = 'Sorry, that did not go through. Please call <?= GNA_PHONE_DISP ?> or try again.';
          err.classList.remove('hidden');
        });
    });
  });

  // Lead-conversion events (calls, WhatsApp, directions, booking clicks). Only sent if the visitor
  // opted in to analytics — window.usermaven exists only after consent.
  document.addEventListener('click', function (e) {
    var a = e.target.closest('a'); if (!a || !window.usermaven) return;
    var href = a.getAttribute('href') || '', kind = a.getAttribute('data-gna-track');
    if (!kind) kind = href.indexOf('tel:') === 0 ? 'call' : href.indexOf('wa.me') > -1 ? 'whatsapp' : href.indexOf('/book-appointment') === 0 ? 'book_click' : href.indexOf('google.com/maps') > -1 ? 'directions' : '';
    if (kind) window.usermaven('track', 'lead_' + kind.replace(/-/g, '_'), { page: location.pathname });
  }, { passive: true });

  // Click-to-load Google Map (no Google request until the visitor asks for it)
  document.querySelectorAll('[data-gna-map]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var box = btn.closest('.gna-map-facade');
      box.innerHTML = '<iframe title="Map: Gnathos Facial, Regency Prime, Gachibowli, Hyderabad" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.6119556239087!2d78.3722385!3d17.430400400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9377bfbc844d%3A0x89619bc38eaa02ca!2sGnathos!5e0!3m2!1sen!2sin!4v1779796141375!5m2!1sen!2sin" class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>';
    });
  });
})();
</script>
</body>
</html>
