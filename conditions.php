<?php
$path_prefix = '';
$page_title = 'Conditions We Treat | Oral & Maxillofacial Surgery Hyderabad';
$page_description = 'Jaw pain, facial fractures, bite problems, sleep apnea, mouth lesions, cysts, facial swelling and nose problems: find your symptom and the right care.';
$canonical_url = 'https://gnathosface.com/conditions';
$page_type = 'CollectionPage';
$breadcrumbs = [['Home', '/'], ['Conditions', null]];
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
require_once __DIR__ . '/includes/catalog.php';
?>
<section class="border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-12 md:pb-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
    <div class="lg:col-span-8">
      <p class="gna-eyebrow text-steel mb-4">Conditions we treat</p>
      <h1 class="gna-serif gna-h2-lg text-navy mb-5">Start with the problem you're experiencing.</h1>
      <p class="text-[16px] leading-[1.7] text-slate max-w-2xl">Each condition below links to a detailed guide and to specific symptoms. If you're not sure which applies to you, book a consultation — that's what it's for.</p>
    </div>
    <nav class="lg:col-span-4 flex flex-wrap gap-2" aria-label="Jump to a condition">
      <?php foreach ($GNA_CATALOG as $g): ?><a href="#<?= $g['id'] ?>" class="px-3 py-1.5 border gna-rule rounded-full text-[12.5px] text-navy hover:border-steel hover:text-steel"><?= gna_e($g['title']) ?></a><?php endforeach; ?>
    </nav>
  </div>
</section>

<div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-16 space-y-6">
  <?php foreach ($GNA_CATALOG as $i => $g): $sub = gna_catalog_pages($g['folder'], $g['extra']); ?>
  <section id="<?= $g['id'] ?>" class="bg-white border gna-rule rounded-md p-6 md:p-9 grid grid-cols-1 lg:grid-cols-12 gap-8" aria-labelledby="h-<?= $g['id'] ?>">
    <div class="lg:col-span-4">
      <p class="gna-eyebrow text-steel mb-3"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></p>
      <h2 id="h-<?= $g['id'] ?>" class="gna-serif text-[30px] leading-[1.1] text-navy mb-3"><?= gna_e($g['title']) ?></h2>
      <p class="text-[14.5px] leading-[1.65] text-slate mb-5"><?= gna_e($g['blurb']) ?></p>
      <ul class="space-y-2">
        <?php foreach ($g['main'] as [$l, $u]): ?><li><a href="<?= $u ?>" class="text-[14px] font-semibold text-steel hover:text-navy">→ <?= gna_e($l) ?></a></li><?php endforeach; ?>
      </ul>
    </div>
    <?php if ($sub): ?>
    <div class="lg:col-span-8">
      <p class="gna-eyebrow text-slate mb-3">Symptoms &amp; related problems</p>
      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-1.5 text-[14px]">
        <?php foreach ($sub as [$l, $u]): ?><li><a href="<?= gna_e($u) ?>" class="block py-1 text-navy hover:text-steel hover:underline"><?= gna_e($l) ?></a></li><?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
  </section>
  <?php endforeach; ?>
</div>
<?php include $path_prefix . 'footer.php'; ?>
