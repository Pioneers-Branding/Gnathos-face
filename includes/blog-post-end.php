<?php
/** Blog post layout — bottom half: FAQs, sources, author box, end CTA, sidebar, related reading. */
$p = $post;
?>
        <?php if (!empty($p['faqs'])): ?>
        <h2 id="faq">Frequently asked questions</h2>
        <div class="not-prose divide-y divide-[var(--hairline)] border-y gna-rule mt-6">
          <?php foreach ($p['faqs'] as $f): ?>
          <details class="group py-1">
            <summary class="flex items-start justify-between gap-6 py-4 text-left">
              <h3 class="gna-serif text-[21px] leading-[1.3] text-navy font-medium m-0"><?= gna_e($f['q']) ?></h3>
              <span class="mt-1 text-steel text-xl leading-none transition-transform group-open:rotate-45 shrink-0" aria-hidden="true">+</span>
            </summary>
            <div class="pb-5 pr-8 text-[16px] leading-[1.7] text-[#3d4652]"><?= $f['a'] ?></div>
          </details>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($p['sources'])): ?>
        <h2 id="sources" class="!text-[1.35rem]">Further reading &amp; references</h2>
        <ul class="text-[14.5px]">
          <?php foreach ($p['sources'] as [$label, $url]): ?>
          <li><a href="<?= gna_e($url) ?>" target="_blank" rel="noopener nofollow"><?= gna_e($label) ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div><!-- /.gna-prose -->

      <!-- End-of-article CTA -->
      <section class="mt-12 rounded-md bg-navy text-white p-7 md:p-9 gna-on-dark" aria-labelledby="gna-end-cta">
        <p class="gna-eyebrow text-[#a9cbd9] mb-3">Next step</p>
        <h2 id="gna-end-cta" class="gna-serif text-[30px] md:text-[34px] leading-[1.1] mb-3">Get a specialist opinion on <?= gna_e(strtolower($p['service'][0])) ?>.</h2>
        <p class="text-[15px] leading-[1.7] text-white/80 mb-6 max-w-2xl">Reading helps, but an examination tells us what is actually happening in your case. Consultations are held in Gachibowli, Hyderabad, with surgery (if you need it) at NABH-accredited partner hospitals.</p>
        <div class="flex flex-col sm:flex-row gap-3">
          <a href="/book-appointment" class="gna-btn gna-btn-light">Book a consultation</a>
          <a href="tel:<?= GNA_PHONE ?>" class="gna-btn gna-btn-ghost-light">Call <?= GNA_PHONE_DISP ?></a>
          <a href="<?= gna_e($p['service'][1]) ?>" class="gna-btn gna-btn-ghost-light">About <?= gna_e(strtolower($p['service'][0])) ?></a>
        </div>
      </section>

      <!-- Author box (E-E-A-T) -->
      <section class="mt-10 flex flex-col sm:flex-row gap-5 p-6 md:p-7 bg-white border gna-rule rounded-md" aria-label="About the author">
        <img src="<?= $gna_author['photo'] ?>" alt="<?= gna_e($gna_author['name']) ?>" width="88" height="88" loading="lazy" class="w-[88px] h-[88px] rounded-full object-cover border gna-rule shrink-0" style="object-position:center 20%"/>
        <div>
          <p class="gna-eyebrow text-steel mb-1">About the author</p>
          <p class="gna-serif text-[24px] text-navy leading-tight"><?= gna_e($gna_author['name']) ?>, MDS</p>
          <p class="text-[13px] text-slate mb-3"><?= gna_e($gna_author['role']) ?></p>
          <p class="text-[14px] leading-[1.65] text-[#3d4652] mb-3"><?= gna_e($gna_author['bio']) ?></p>
          <p class="text-[12.5px] text-slate">Medically reviewed by <?= gna_e($gna_reviewer['name']) ?>, MDS · Last reviewed <?= $gna_fmt($p['updated'] ?? $p['published']) ?>. This article is general information, not a diagnosis. <a class="underline" href="/medical-disclaimer">Disclaimer</a>.</p>
        </div>
      </section>
    </article>

    <aside class="hidden lg:block lg:col-span-4" aria-label="Article tools">
      <div class="sticky top-28 space-y-6">
        <?php if (!empty($p['toc'])): ?>
        <nav class="gna-toc bg-white border gna-rule rounded-md p-5" aria-label="Table of contents">
          <p class="gna-eyebrow text-slate mb-3">In this guide</p>
          <?php foreach ($p['toc'] as [$id, $label]): ?><a href="#<?= gna_e($id) ?>"><?= gna_e($label) ?></a><?php endforeach; ?>
          <?php if (!empty($p['faqs'])): ?><a href="#faq">Frequently asked questions</a><?php endif; ?>
        </nav>
        <?php endif; ?>
        <div class="bg-navy text-white rounded-md p-6 gna-on-dark">
          <p class="gna-eyebrow text-[#a9cbd9] mb-2">Consult a specialist</p>
          <p class="gna-serif text-[24px] leading-tight mb-3"><?= gna_e($p['service'][0]) ?> in Hyderabad</p>
          <p class="text-[13.5px] leading-[1.6] text-white/75 mb-5">Examination and treatment planning with Dr. Suresh P.L. or Dr. Navatha Mortha.</p>
          <a href="/book-appointment" class="gna-btn gna-btn-light w-full mb-2">Book appointment</a>
          <a href="<?= gna_e(gna_wa('Hello Gnathos team, I read your article on ' . $p['title'] . ' and would like a consultation.')) ?>" target="_blank" rel="noopener" class="gna-btn gna-btn-ghost-light w-full">WhatsApp</a>
        </div>
      </div>
    </aside>
  </div>
</div>

<?php if (!empty($p['related'])): ?>
<section class="border-t gna-rule bg-[#F3EEE4]" aria-labelledby="gna-related">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-16">
    <h2 id="gna-related" class="gna-serif text-[30px] text-navy mb-8">Related reading</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <a href="<?= gna_e($p['service'][1]) ?>" class="gna-card p-6 flex flex-col">
        <span class="gna-eyebrow text-steel mb-3">Treatment</span>
        <span class="gna-serif text-[21px] leading-snug text-navy"><?= gna_e($p['service'][0]) ?> at Gnathos Facial</span>
        <span class="mt-auto pt-4 text-[12px] font-semibold text-steel">View treatment →</span>
      </a>
      <?php foreach (array_slice($p['related'], 0, 3) as [$label, $url]): ?>
      <a href="<?= gna_e($url) ?>" class="gna-card p-6 flex flex-col">
        <span class="gna-eyebrow text-steel mb-3"><?= str_starts_with($url, '/blogs/') ? 'Patient guide' : 'Treatment' ?></span>
        <span class="gna-serif text-[21px] leading-snug text-navy"><?= gna_e($label) ?></span>
        <span class="mt-auto pt-4 text-[12px] font-semibold text-steel">Read →</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php include GNA_ROOT . '/footer.php'; ?>
