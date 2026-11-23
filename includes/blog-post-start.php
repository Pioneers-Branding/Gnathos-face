<?php
/**
 * Blog post layout — top half. A post defines $post (see blogs/_TEMPLATE.md) then includes this.
 */
require_once __DIR__ . '/config.php';

$p = $post;
$gna_author   = $GNA_DOCTORS[$p['author'] ?? 'suresh'];
$gna_reviewer = $GNA_DOCTORS[$p['reviewer'] ?? ($p['author'] === 'suresh' ? 'navatha' : 'suresh')];
$gna_post_url = GNA_SITE_URL . '/blogs/' . $p['slug'] . '/';

$page_title       = $p['seo_title'];
$page_description = $p['description'];
$canonical_url    = $gna_post_url;
$og_type          = 'article';
$page_type        = 'MedicalWebPage';
$page_about       = $p['about'] ?? ($p['service'][0] ?? null);
$page_reviewed    = $p['updated'] ?? $p['published'];
$page_faqs        = $p['faqs'] ?? [];
$hide_review_line = true; // the post header shows author + reviewer
$breadcrumbs      = [['Home', '/'], ['Patient guides', '/blogs/'], [$p['title'], null]];
$cta_heading      = $p['cta_heading'] ?? 'Have questions about ' . strtolower($p['service'][0] ?? 'your symptoms') . '?';
$cta_text         = $p['cta_text'] ?? 'Book a consultation in Gachibowli, Hyderabad. We will examine you, explain what is going on, and walk you through every option — including whether you need treatment at all.';
$cta_topic        = $p['cta_topic'] ?? '';
$page_schema      = [[
    '@type' => 'BlogPosting',
    '@id' => $gna_post_url . '#article',
    'headline' => gna_plain($p['title']),
    'description' => gna_plain($p['description']),
    'mainEntityOfPage' => ['@id' => $gna_post_url . '#webpage'],
    'datePublished' => $p['published'],
    'dateModified' => $p['updated'] ?? $p['published'],
    'inLanguage' => 'en-IN',
    'articleSection' => $p['category'],
    'image' => GNA_SITE_URL . '/asset/og-gnathos-facial.jpg',
    'author' => ['@type' => 'Physician', '@id' => $gna_author['id'], 'name' => $gna_author['name'], 'url' => GNA_SITE_URL . '/#doctors'],
    'reviewedBy' => ['@type' => 'Physician', '@id' => $gna_reviewer['id'], 'name' => $gna_reviewer['name']],
    'publisher' => ['@id' => GNA_SITE_URL . '/#clinic'],
]];

include GNA_ROOT . '/header-include.php';
include GNA_ROOT . '/header.php';

$gna_fmt = fn($d) => date('j M Y', strtotime($d));
?>
<header class="border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-10 md:pb-14">
    <div class="max-w-3xl">
      <p class="gna-eyebrow text-steel mb-4"><?= gna_e($p['category']) ?> · Patient guide</p>
      <h1 class="gna-serif text-[clamp(2.2rem,1.4rem+3.2vw,3.5rem)] leading-[1.06] text-navy mb-5"><?= gna_e($p['title']) ?></h1>
      <p class="text-[17px] leading-[1.65] text-slate mb-8"><?= gna_e($p['excerpt']) ?></p>
      <div class="flex flex-wrap items-center gap-x-8 gap-y-4 text-[13px]">
        <div class="flex items-center gap-3">
          <img src="<?= $gna_author['photo'] ?>" alt="" width="44" height="44" class="w-11 h-11 rounded-full object-cover border gna-rule" style="object-position:center 20%"/>
          <div class="leading-tight">
            <span class="block text-slate">Written by</span>
            <a href="/#doctors" class="font-semibold text-navy hover:text-steel"><?= gna_e($gna_author['name']) ?></a>
          </div>
        </div>
        <div class="leading-tight">
          <span class="block text-slate">Medically reviewed by</span>
          <span class="font-semibold text-navy"><?= gna_e($gna_reviewer['name']) ?>, MDS</span>
        </div>
        <div class="leading-tight">
          <span class="block text-slate">Updated</span>
          <time datetime="<?= gna_e($p['updated'] ?? $p['published']) ?>" class="font-semibold text-navy"><?= $gna_fmt($p['updated'] ?? $p['published']) ?></time>
        </div>
        <div class="leading-tight">
          <span class="block text-slate">Reading time</span>
          <span class="font-semibold text-navy"><?= (int)$p['read_minutes'] ?> min</span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="max-w-[1280px] mx-auto px-4 md:px-8 py-10 md:py-14">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">
    <article class="lg:col-span-8 min-w-0">
      <?php if (!empty($p['toc'])): ?>
      <details class="lg:hidden mb-8 bg-white border gna-rule rounded-md">
        <summary class="flex items-center justify-between px-5 py-4 font-semibold text-navy text-[15px]">In this guide <span aria-hidden="true">▾</span></summary>
        <nav class="gna-toc px-5 pb-4" aria-label="Table of contents (mobile)">
          <?php foreach ($p['toc'] as [$id, $label]): ?><a href="#<?= gna_e($id) ?>"><?= gna_e($label) ?></a><?php endforeach; ?>
          <?php if (!empty($p['faqs'])): ?><a href="#faq">Frequently asked questions</a><?php endif; ?>
        </nav>
      </details>
      <?php endif; ?>
      <div class="gna-prose">
