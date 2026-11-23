<?php
$gna_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$gna_slug = preg_replace('#\.php$#', '', trim(rawurldecode($gna_uri), '/'));
$is_blog_active = str_starts_with($gna_slug, 'blogs');
$is_conditions_active = in_array($gna_slug, ['conditions', 'tmj-disorders', 'facial-injuries', 'obstructive-sleep-apnea', 'oral-cancer', 'cysts-tumors-face', 'facial-swelling-treatment', 'rhinoplasty', 'orthognathic-surgery']);
$is_treatments_active = !$is_conditions_active && !$is_blog_active && $gna_slug !== '' && !in_array($gna_slug, ['book-appointment', 'privacy-policy', 'terms-of-use', 'medical-disclaimer', 'accessibility']);

$gna_nav_conditions = [
    ['TMJ disorders & jaw pain', '/tmj-treatment'],
    ['Facial injuries & fractures', '/facial-injuries'],
    ['Jaw misalignment', '/orthognathic-surgery'],
    ['Sleep apnea & snoring', '/obstructive-sleep-apnea'],
    ['Oral cancer', '/oral-cancer'],
    ['Cysts & tumours of the jaw', '/cysts-tumors-face'],
    ['Facial swelling & infection', '/facial-swelling-treatment'],
    ['Nasal shape & breathing', '/rhinoplasty'],
];
$gna_nav_surgical = [
    ['TMJ arthroscopy', '/tmj-arthroscopy'],
    ['Orthognathic (jaw) surgery', '/jaw-surgery'],
    ['Facial trauma surgery', '/facial-injuries'],
    ['Oral cancer surgery', '/oral-cancer-treatment'],
    ['Cyst & tumour removal', '/cyst-and-tumors-treatment'],
    ['Skin grafts & flaps', '/skin-grafts-and-flaps'],
    ['Sleep apnea surgery', '/osa-treatment'],
];
$gna_nav_cosmetic = [
    ['Cosmetic facial surgery', '/cosmetic-facial-surgery-treatment'],
    ['Rhinoplasty', '/rhinoplasty-treatment'],
    ['Chin augmentation', '/chin-augmentation-surgery'],
    ['Face lift', '/face-lift-surgery'],
    ['Eyelid surgery', '/eyelid-surgery'],
    ['Brow lift', '/brow-lift-treatment'],
    ['Botox & dermal fillers', '/botox-treatment'],
];
?>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:z-[95] focus:top-2 focus:left-2 focus:bg-navy focus:text-white focus:px-4 focus:py-2 focus:rounded gna-eyebrow">Skip to content</a>

<?php if (!$is_blog_active): ?>
<div id="gna-emergency-strip" class="gna-emergency w-full text-[12px] md:text-[13px] py-2 px-4 md:px-8 flex items-center justify-between gap-3 sticky top-0 z-[60]">
  <div class="flex items-center gap-2 md:gap-3 min-w-0">
    <span class="inline-block w-2 h-2 rounded-full bg-white motion-safe:animate-pulse shrink-0" aria-hidden="true"></span>
    <a href="/facial-trauma-emergency-hyderabad" class="hidden sm:inline font-semibold uppercase tracking-[0.18em] truncate">24/7 Facial Trauma Line</a>
    <a href="/facial-trauma-emergency-hyderabad" class="sm:hidden font-semibold uppercase tracking-wider truncate">Trauma · 24/7</a>
  </div>
  <div class="flex items-center gap-3 md:gap-5 shrink-0">
    <a href="tel:<?= GNA_PHONE ?>" class="inline-flex items-center min-h-[44px] py-3 -my-2 font-semibold whitespace-nowrap" data-gna-track="call-trauma"><?= GNA_PHONE_DISP ?></a>
    <a href="<?= gna_e(gna_wa('Hello Gnathos team, I need urgent facial trauma care.')) ?>" target="_blank" rel="noopener" class="hidden md:inline-flex items-center whitespace-nowrap">WhatsApp</a>
  </div>
</div>
<?php endif; ?>

<header class="w-full bg-[#F8F5EF]/95 backdrop-blur border-b gna-rule sticky z-50" style="top: <?= $is_blog_active ? '0' : 'var(--gna-strip-h, 44px)' ?>;">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8">
    <div class="flex items-center justify-between py-3 md:py-4 gap-4">
      <a class="flex items-center gap-3 shrink-0" href="/" aria-label="Gnathos Facial — home">
        <img alt="Gnathos Facial" class="h-9 md:h-11 w-auto" src="/asset/gna-logop.png" width="300" height="71"/>
      </a>

      <nav class="hidden lg:flex items-center gap-6 xl:gap-8" aria-label="Primary">
        <div class="gna-nav-item relative" data-open="false">
          <button type="button" class="gna-eyebrow <?= $is_conditions_active ? 'text-steel' : 'text-navy hover:text-steel' ?> flex items-center gap-1 py-2" aria-expanded="false" aria-controls="nav-conditions">
            Conditions <span class="text-[9px]" aria-hidden="true">▾</span>
          </button>
          <div id="nav-conditions" class="gna-nav-menu gna-float absolute top-full left-0 mt-3 w-80 bg-white border gna-rule rounded-md z-50">
            <ul class="py-2">
              <li><a href="/conditions" class="block px-5 py-2.5 text-[13px] font-semibold text-navy hover:bg-warm-deep hover:text-steel">All conditions we treat →</a></li>
              <li class="border-t gna-rule-soft mx-3 my-1" aria-hidden="true"></li>
              <?php foreach ($gna_nav_conditions as [$l, $u]): ?>
              <li><a href="<?= $u ?>" class="block px-5 py-2 text-[13px] text-navy hover:bg-warm-deep hover:text-steel"><?= gna_e($l) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="gna-nav-item relative" data-open="false">
          <button type="button" class="gna-eyebrow <?= $is_treatments_active ? 'text-steel' : 'text-navy hover:text-steel' ?> flex items-center gap-1 py-2" aria-expanded="false" aria-controls="nav-treatments">
            Treatments <span class="text-[9px]" aria-hidden="true">▾</span>
          </button>
          <div id="nav-treatments" class="gna-nav-menu gna-float absolute top-full -left-24 mt-3 w-[560px] bg-white border gna-rule rounded-md z-50">
            <div class="grid grid-cols-2 gap-2 p-3">
              <div>
                <p class="gna-eyebrow text-slate px-3 pt-2 pb-2">Surgical &amp; reconstructive</p>
                <ul>
                  <li><a href="/tmj-treatment" class="block px-3 py-2 text-[13px] text-navy hover:bg-warm-deep hover:text-steel rounded">TMJ treatment</a></li>
                  <?php foreach ($gna_nav_surgical as [$l, $u]): ?>
                  <li><a href="<?= $u ?>" class="block px-3 py-2 text-[13px] text-navy hover:bg-warm-deep hover:text-steel rounded"><?= gna_e($l) ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="border-l gna-rule-soft pl-2">
                <p class="gna-eyebrow text-slate px-3 pt-2 pb-2">Facial aesthetic</p>
                <ul>
                  <?php foreach ($gna_nav_cosmetic as [$l, $u]): ?>
                  <li><a href="<?= $u ?>" class="block px-3 py-2 text-[13px] text-navy hover:bg-warm-deep hover:text-steel rounded"><?= gna_e($l) ?></a></li>
                  <?php endforeach; ?>
                  <li><a href="/treatments" class="block px-3 py-2 mt-1 text-[13px] font-semibold text-steel hover:bg-warm-deep rounded">All treatments →</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <a href="/#doctors" class="gna-eyebrow whitespace-nowrap text-navy hover:text-steel py-2">Our Surgeons</a>
        <a href="/blogs/" class="gna-eyebrow <?= $is_blog_active ? 'text-steel' : 'text-navy hover:text-steel' ?> py-2">Patient Guides</a>
        <a href="/maxillofacial-surgeon-gachibowli" class="gna-eyebrow text-navy hover:text-steel py-2">Location</a>
      </nav>

      <div class="hidden lg:flex items-center gap-4">
        <a href="tel:<?= GNA_PHONE ?>" class="hidden xl:inline-flex text-[13px] font-semibold text-navy hover:text-steel whitespace-nowrap" data-gna-track="call"><?= GNA_PHONE_DISP ?></a>
        <a href="/book-appointment" class="gna-btn gna-btn-primary !py-2 !px-4 !text-[11px]">Book Appointment</a>
      </div>

      <button id="gna-mobile-toggle" type="button" class="lg:hidden flex items-center gap-2 text-navy p-2 min-h-[44px] min-w-[44px]" aria-label="Open menu" aria-expanded="false" aria-controls="gna-mobile-menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
        <span class="hidden sm:inline gna-eyebrow">Menu</span>
      </button>
    </div>
  </div>
</header>

<div id="gna-mobile-menu" class="gna-mobile-menu lg:hidden fixed inset-0 z-[70] bg-[#F8F5EF]" data-open="false" role="dialog" aria-modal="true" aria-label="Site menu">
  <div class="flex items-center justify-between p-4 border-b gna-rule">
    <img alt="" class="h-9 w-auto" src="/asset/gna-logop.png" width="300" height="71"/>
    <button type="button" id="gna-mobile-close" class="p-2 min-h-[44px] min-w-[44px] flex items-center justify-center text-navy" aria-label="Close menu">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg>
    </button>
  </div>
  <nav class="p-4 pb-10 overflow-y-auto h-[calc(100dvh-72px)]" aria-label="Mobile">
    <ul class="text-[16px] font-medium">
      <li><a class="block px-3 py-3 rounded text-navy hover:bg-warm-deep" href="/">Home</a></li>
      <li>
        <details class="group border-t gna-rule-soft">
          <summary class="flex items-center justify-between px-3 py-3 text-navy">Conditions <span class="transition-transform group-open:rotate-180" aria-hidden="true">▾</span></summary>
          <ul class="pb-2">
            <li><a class="block px-6 py-2.5 text-[15px] text-navy" href="/conditions">All conditions</a></li>
            <?php foreach ($gna_nav_conditions as [$l, $u]): ?><li><a class="block px-6 py-2.5 text-[15px] text-slate" href="<?= $u ?>"><?= gna_e($l) ?></a></li><?php endforeach; ?>
          </ul>
        </details>
      </li>
      <li>
        <details class="group border-t gna-rule-soft">
          <summary class="flex items-center justify-between px-3 py-3 text-navy">Treatments <span class="transition-transform group-open:rotate-180" aria-hidden="true">▾</span></summary>
          <ul class="pb-2">
            <li><a class="block px-6 py-2.5 text-[15px] text-navy" href="/treatments">All treatments</a></li>
            <li><a class="block px-6 py-2.5 text-[15px] text-slate" href="/tmj-treatment">TMJ treatment</a></li>
            <?php foreach (array_merge($gna_nav_surgical, $gna_nav_cosmetic) as [$l, $u]): ?><li><a class="block px-6 py-2.5 text-[15px] text-slate" href="<?= $u ?>"><?= gna_e($l) ?></a></li><?php endforeach; ?>
          </ul>
        </details>
      </li>
      <li class="border-t gna-rule-soft"><a class="block px-3 py-3 text-navy" href="/#doctors">Our Surgeons</a></li>
      <li class="border-t gna-rule-soft"><a class="block px-3 py-3 text-navy" href="/blogs/">Patient Guides</a></li>
      <li class="border-t gna-rule-soft"><a class="block px-3 py-3 text-navy" href="/maxillofacial-surgeon-gachibowli">Clinic in Gachibowli</a></li>
      <li class="border-t gna-rule-soft"><a class="block px-3 py-3 text-trauma font-semibold" href="/facial-trauma-emergency-hyderabad">Facial injury? 24/7 line</a></li>
      <li class="border-t gna-rule-soft"><a class="block px-3 py-3 text-navy" href="/book-appointment">Book an appointment</a></li>
    </ul>
    <div class="mt-6 pt-6 border-t gna-rule space-y-3">
      <a href="/book-appointment" class="gna-btn gna-btn-primary !w-full">Book Appointment</a>
      <a href="tel:<?= GNA_PHONE ?>" class="gna-btn gna-btn-emergency !w-full">Call <?= GNA_PHONE_DISP ?></a>
      <a href="<?= gna_e(gna_wa()) ?>" target="_blank" rel="noopener" class="gna-btn gna-btn-whatsapp !w-full">WhatsApp Us</a>
    </div>
  </nav>
</div>

<script>
(function () {
  var strip = document.getElementById('gna-emergency-strip');
  if (strip) {
    var pin = function () { document.documentElement.style.setProperty('--gna-strip-h', strip.getBoundingClientRect().height + 'px'); };
    pin(); window.addEventListener('resize', pin, { passive: true });
  }
  var openBtn = document.getElementById('gna-mobile-toggle'), closeBtn = document.getElementById('gna-mobile-close'), menu = document.getElementById('gna-mobile-menu');
  function setOpen(open) {
    menu.dataset.open = open ? 'true' : 'false';
    openBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.style.overflow = open ? 'hidden' : '';
    (open ? closeBtn : openBtn).focus();
  }
  if (openBtn && menu) {
    openBtn.addEventListener('click', function () { setOpen(true); });
    closeBtn.addEventListener('click', function () { setOpen(false); });
    menu.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', function () { setOpen(false); }); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && menu.dataset.open === 'true') setOpen(false); });
  }
  // Desktop dropdowns: hover, focus and click (touch laptops) all work; Escape closes.
  document.querySelectorAll('.gna-nav-item').forEach(function (item) {
    var btn = item.querySelector('button');
    function set(open) { item.dataset.open = open ? 'true' : 'false'; btn.setAttribute('aria-expanded', open ? 'true' : 'false'); }
    item.addEventListener('mouseenter', function () { set(true); });
    item.addEventListener('mouseleave', function () { set(false); });
    btn.addEventListener('click', function () { set(item.dataset.open !== 'true'); });
    item.addEventListener('focusout', function (e) { if (!item.contains(e.relatedTarget)) set(false); });
    item.addEventListener('keydown', function (e) { if (e.key === 'Escape') { set(false); btn.focus(); } });
  });
})();
</script>

<main id="main">
<?php if (!empty($breadcrumbs) && empty($hide_breadcrumbs)): ?>
<div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-5 flex flex-col md:flex-row md:items-center md:justify-between gap-2">
  <nav class="gna-crumbs" aria-label="Breadcrumb">
    <ol>
      <?php $gna_bc_last = count($breadcrumbs) - 1; foreach (array_values($breadcrumbs) as $i => $bc): ?>
      <li><?php if ($i < $gna_bc_last && $bc[1]): ?><a href="<?= gna_e($bc[1]) ?>"><?= gna_e(html_entity_decode($bc[0])) ?></a><?php else: ?><span aria-current="page"><?= gna_e(html_entity_decode($bc[0])) ?></span><?php endif; ?></li>
      <?php endforeach; ?>
    </ol>
  </nav>
  <?php if (($page_type ?? '') === 'MedicalWebPage' && empty($hide_review_line)): $gna_rv = $GNA_DOCTORS[$page_reviewer ?? 'suresh']; ?>
  <p class="text-[12px] text-slate">Medically reviewed by <a href="/#doctors" class="text-navy font-medium hover:text-steel"><?= gna_e($gna_rv['name']) ?>, MDS</a> · <time datetime="<?= gna_e($page_reviewed ?? '2026-11-23') ?>"><?= date('M Y', strtotime($page_reviewed ?? '2026-11-23')) ?></time></p>
  <?php endif; ?>
</div>
<?php endif; ?>
