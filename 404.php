<?php
http_response_code(404);
$path_prefix = '';
$page_title = 'Page Not Found | Gnathos Facial';
$page_description = 'The page you were looking for has moved or no longer exists.';
$canonical_url = 'https://gnathosface.com/404';
$page_robots = 'noindex, follow';
$page_type = 'WebPage';
include __DIR__ . '/header-include.php';
include __DIR__ . '/header.php';
?>
<section class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
  <div class="max-w-2xl">
    <p class="gna-eyebrow text-steel mb-4">Error 404</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-5">We couldn't find that page.</h1>
    <p class="text-[16px] leading-[1.7] text-slate mb-8">It may have moved during our website update. These links should help you find what you need:</p>
    <div class="flex flex-wrap gap-3 mb-10">
      <a href="/" class="gna-btn gna-btn-primary">Home</a>
      <a href="/conditions" class="gna-btn gna-btn-outline">Conditions</a>
      <a href="/treatments" class="gna-btn gna-btn-outline">Treatments</a>
      <a href="/blogs/" class="gna-btn gna-btn-outline">Patient guides</a>
    </div>
    <p class="text-[14px] text-slate">Facial injury or emergency? Call <a class="text-trauma font-semibold" href="tel:<?= GNA_PHONE ?>"><?= GNA_PHONE_DISP ?></a> (24/7).</p>
  </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
