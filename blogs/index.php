<?php
$path_prefix = '../';
$page_title = 'Patient Guides: Jaw, Face & Mouth Health | Gnathos Facial';
$page_description = 'Doctor-written guides on TMJ, jaw surgery, facial injuries, sleep apnea, oral cancer, cysts and facial aesthetics, reviewed by our maxillofacial surgeons.';
$canonical_url = 'https://gnathosface.com/blogs/';
$page_type = 'CollectionPage';
$breadcrumbs = [['Home', '/'], ['Patient guides', null]];
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
require_once GNA_ROOT . '/includes/blog-registry.php';

$gna_posts = gna_blog_posts();
$gna_cats = array_count_values(array_column($gna_posts, 'category'));
arsort($gna_cats);
?>
<section class="border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-10 md:pb-14">
    <p class="gna-eyebrow text-steel mb-4">Patient guides</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-5 max-w-3xl">Clear answers about your jaw, face and mouth.</h1>
    <p class="text-[16px] leading-[1.7] text-slate max-w-2xl mb-8">Written by Dr. Suresh P.L. and Dr. Navatha Mortha, and medically reviewed before publishing. General information only — it does not replace an examination.</p>
    <div class="flex flex-wrap gap-2" role="group" aria-label="Filter guides by topic">
      <button type="button" data-gna-filter="" aria-pressed="true" class="px-3.5 py-1.5 border border-navy bg-navy text-white rounded-full text-[12.5px]">All (<?= count($gna_posts) ?>)</button>
      <?php foreach ($gna_cats as $c => $n): ?>
      <button type="button" data-gna-filter="<?= gna_e($c) ?>" aria-pressed="false" class="px-3.5 py-1.5 border gna-rule rounded-full text-[12.5px] text-navy hover:border-steel"><?= gna_e($c) ?> (<?= $n ?>)</button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-16" aria-label="All guides">
  <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5" id="gna-posts">
    <?php foreach ($gna_posts as $g): ?>
    <li data-cat="<?= gna_e($g['category']) ?>">
      <a href="<?= gna_e($g['url']) ?>" class="gna-card h-full p-6 md:p-7 flex flex-col">
        <span class="gna-eyebrow text-steel mb-3"><?= gna_e($g['category']) ?></span>
        <h2 class="gna-serif text-[23px] leading-[1.2] text-navy mb-3"><?= gna_e($g['title']) ?></h2>
        <p class="text-[13.5px] leading-[1.6] text-slate mb-5 grow"><?= gna_e(mb_strimwidth(strip_tags($g['excerpt']), 0, 160, '…')) ?></p>
        <span class="text-[12px] text-slate"><?= gna_e($GNA_DOCTORS[$g['author']]['name']) ?> · <?= (int)$g['read_minutes'] ?> min read</span>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
<script>
(function () {
  var btns = document.querySelectorAll('[data-gna-filter]'), items = document.querySelectorAll('#gna-posts > li');
  btns.forEach(function (b) {
    b.addEventListener('click', function () {
      var c = b.getAttribute('data-gna-filter');
      btns.forEach(function (x) {
        var on = x === b; x.setAttribute('aria-pressed', on);
        x.classList.toggle('bg-navy', on); x.classList.toggle('text-white', on); x.classList.toggle('border-navy', on); x.classList.toggle('text-navy', !on);
      });
      items.forEach(function (li) { li.hidden = c && li.getAttribute('data-cat') !== c; });
    });
  });
})();
</script>
<?php
$cta_heading = 'Questions after reading? Ask a specialist.';
include $path_prefix . 'footer.php';
?>
