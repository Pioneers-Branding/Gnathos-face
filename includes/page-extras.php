<?php
/**
 * Rendered by footer.php on treatment / condition / symptom pages (any page that sets $cta_topic
 * and is not an article): who treats you (E-E-A-T) + topic-matched patient guides (internal links).
 */
require_once __DIR__ . '/blog-registry.php';
$gna_guides = gna_related_guides($cta_topic ?? '', $canonical_url ?? '', $page_about ?? '');
?>
<section class="border-t gna-rule bg-[#F3EEE4] gna-no-print" aria-labelledby="gna-extras-title">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-14 md:py-16 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
    <div class="lg:col-span-5">
      <p class="gna-eyebrow text-steel mb-3">Your surgeons</p>
      <h2 id="gna-extras-title" class="gna-serif text-[30px] leading-[1.1] text-navy mb-6">Consultant oral &amp; maxillofacial surgeons</h2>
      <ul class="space-y-4">
        <?php foreach ($GNA_DOCTORS as $d): ?>
        <li class="flex gap-4 items-start bg-white border gna-rule rounded-md p-4">
          <img src="<?= $d['photo'] ?>" alt="<?= gna_e($d['name']) ?>" width="64" height="64" loading="lazy" decoding="async" class="w-16 h-16 rounded-full object-cover border gna-rule shrink-0" style="object-position:center 20%"/>
          <div>
            <p class="font-semibold text-navy text-[15px]"><?= gna_e($d['name']) ?>, MDS</p>
            <p class="text-[12.5px] text-slate mb-1.5"><?= gna_e($d['role']) ?></p>
            <p class="text-[13px] leading-[1.55] text-[#3d4652]"><?= gna_e($d['bio']) ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
      <p class="text-[12.5px] text-slate mt-4">Surgery is performed at NABH-accredited partner hospitals in Hyderabad (CARE Hospitals, KIMS, Apollo Spectra, Yashoda).</p>
    </div>
    <?php if ($gna_guides): ?>
    <div class="lg:col-span-7">
      <p class="gna-eyebrow text-steel mb-3">Patient guides on this topic</p>
      <h2 class="gna-serif text-[30px] leading-[1.1] text-navy mb-6">Read before your consultation</h2>
      <ul class="space-y-3">
        <?php foreach ($gna_guides as $g): ?>
        <li>
          <a href="<?= gna_e($g['url']) ?>" class="gna-card flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6 p-5">
            <span class="flex-1">
              <span class="gna-eyebrow text-steel block mb-1.5"><?= gna_e($g['category']) ?> · <?= (int)$g['read_minutes'] ?> min</span>
              <span class="gna-serif text-[21px] leading-snug text-navy block"><?= gna_e($g['title']) ?></span>
            </span>
            <span class="text-[12px] font-semibold text-steel whitespace-nowrap">Read guide →</span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <a href="/blogs/" class="inline-block mt-5 text-[13px] font-semibold text-navy underline underline-offset-2">All patient guides</a>
    </div>
    <?php endif; ?>
  </div>
</section>
