<?php
/**
 * Shared <head>. Pages set any of these before including:
 *   $page_title, $page_description, $canonical_url, $page_robots ('noindex, follow' …),
 *   $og_type ('website'|'article'), $og_image, $page_type ('MedicalWebPage'|'WebPage'|'AboutPage'|…),
 *   $page_about (topic name), $breadcrumbs ([['Home','/'], ['Treatments','/treatments'], ['TMJ', null]]),
 *   $page_faqs ([['q'=>…,'a'=>…]]), $page_schema (array of extra JSON-LD nodes),
 *   $article_meta (for blog posts), $gna_skip_base_schema (homepage ships its own full graph).
 */
require_once __DIR__ . '/includes/config.php';

$path_prefix      = $path_prefix ?? '';
$page_title       = $page_title ?? 'Oral & Maxillofacial Surgeon in Hyderabad | Gnathos Facial';
$page_description = $page_description ?? 'Gnathos Facial, Gachibowli, Hyderabad: oral and maxillofacial surgery for TMJ disorders, jaw surgery, facial trauma, rhinoplasty, sleep apnea and oral cancer. Call +91 90006 66476.';
$canonical_url    = $canonical_url ?? gna_current_url();
$page_robots      = $page_robots ?? 'index, follow, max-image-preview:large, max-snippet:-1';
$og_type          = $og_type ?? 'website';
$og_image         = $og_image ?? GNA_SITE_URL . '/asset/og-gnathos-facial.jpg';
$page_type        = $page_type ?? 'MedicalWebPage';

$gna_css_ver = @filemtime(__DIR__ . '/asset/css/site.css') ?: '1';
$gna_title_plain = html_entity_decode($page_title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <title><?= gna_e($gna_title_plain) ?></title>
  <meta name="description" content="<?= gna_attr($page_description) ?>"/>
  <meta name="robots" content="<?= gna_e($page_robots) ?>"/>
  <link rel="canonical" href="<?= gna_e($canonical_url) ?>"/>
  <meta name="google-site-verification" content="51g92ic704Mi2kKEPdV1MYkR5TVfLSZLAfwHTM1mCek"/>
  <meta name="theme-color" content="#0E2A47"/>
  <meta name="format-detection" content="telephone=no"/>
  <meta name="geo.region" content="IN-TG"/>
  <meta name="geo.placename" content="Hyderabad"/>
  <meta name="geo.position" content="17.4304;78.3722"/>
  <meta name="ICBM" content="17.4304, 78.3722"/>

  <!-- Open Graph / social -->
  <meta property="og:type" content="<?= gna_e($og_type) ?>"/>
  <meta property="og:site_name" content="<?= GNA_SITE_NAME ?>"/>
  <meta property="og:locale" content="en_IN"/>
  <meta property="og:title" content="<?= gna_attr($page_title) ?>"/>
  <meta property="og:description" content="<?= gna_attr($page_description) ?>"/>
  <meta property="og:url" content="<?= gna_e($canonical_url) ?>"/>
  <meta property="og:image" content="<?= gna_e($og_image) ?>"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="<?= gna_attr($page_title) ?>"/>
  <meta name="twitter:description" content="<?= gna_attr($page_description) ?>"/>
  <meta name="twitter:image" content="<?= gna_e($og_image) ?>"/>

  <link rel="icon" href="/favicon.ico" sizes="any"/>
  <link rel="icon" href="/asset/icon-192.png" type="image/png" sizes="192x192"/>
  <link rel="apple-touch-icon" href="/asset/apple-touch-icon.png"/>

  <!-- Self-hosted fonts + precompiled CSS (no third-party requests before consent) -->
  <link rel="preload" href="/asset/fonts/inter-normal-latin.woff2" as="font" type="font/woff2" crossorigin/>
  <link rel="preload" href="/asset/fonts/cormorant-garamond-normal-latin.woff2" as="font" type="font/woff2" crossorigin/>
  <link rel="stylesheet" href="/asset/css/site.css?v=<?= $gna_css_ver ?>"/>

<?php
// ── Structured data ─────────────────────────────────────────────────────────
$gna_graph = [];
// Same local-business entity + both physicians on every page (consistent NAP, hours, geo, map)
$gna_graph[] = gna_clinic_schema();
foreach (gna_physician_schema() as $gna_doc) $gna_graph[] = $gna_doc;
$gna_graph[] = [
    '@type' => 'WebSite', '@id' => GNA_SITE_URL . '/#website', 'url' => GNA_SITE_URL . '/',
    'name' => GNA_SITE_NAME, 'inLanguage' => 'en-IN', 'publisher' => ['@id' => GNA_SITE_URL . '/#clinic'],
];
// Treatment / symptom pages: a locally-scoped service offered by the clinic
if (!empty($page_about) && !empty($cta_topic) && ($og_type ?? 'website') !== 'article') {
    $gna_graph[] = [
        '@type' => 'Service', '@id' => $canonical_url . '#service',
        'name' => gna_plain($page_about) . ' in Hyderabad',
        'serviceType' => gna_plain($page_about),
        'url' => $canonical_url,
        'provider' => ['@id' => GNA_SITE_URL . '/#clinic'],
        'areaServed' => ['@type' => 'City', 'name' => 'Hyderabad'],
        'availableChannel' => ['@type' => 'ServiceChannel', 'servicePhone' => '+91-90006-66476', 'serviceLocation' => ['@id' => GNA_SITE_URL . '/#clinic']],
    ];
}
$gna_page = [
    '@type' => $page_type,
    '@id' => $canonical_url . '#webpage',
    'url' => $canonical_url,
    'name' => $gna_title_plain,
    'description' => gna_plain($page_description),
    'inLanguage' => 'en-IN',
    'isPartOf' => ['@id' => GNA_SITE_URL . '/#website'],
    'publisher' => ['@id' => GNA_SITE_URL . '/#clinic'],
];
if (!empty($page_about)) $gna_page['about'] = ['@type' => 'MedicalEntity', 'name' => $page_about];
if ($page_type === 'MedicalWebPage') {
    $gna_page['lastReviewed'] = $page_reviewed ?? '2026-11-23';
    $gna_page['reviewedBy'] = ['@type' => 'Physician', '@id' => $GNA_DOCTORS['suresh']['id'], 'name' => $GNA_DOCTORS['suresh']['name']];
    $gna_page['audience'] = ['@type' => 'PeopleAudience', 'audienceType' => 'Patient'];
}
if (!empty($breadcrumbs)) {
    $gna_page['breadcrumb'] = ['@id' => $canonical_url . '#breadcrumb'];
    $items = [];
    foreach (array_values($breadcrumbs) as $i => $bc) {
        $item = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => gna_plain($bc[0])];
        $item['item'] = $bc[1] ? (str_starts_with($bc[1], 'http') ? $bc[1] : GNA_SITE_URL . $bc[1]) : $canonical_url;
        $items[] = $item;
    }
    $gna_graph[] = ['@type' => 'BreadcrumbList', '@id' => $canonical_url . '#breadcrumb', 'itemListElement' => $items];
}
$gna_graph[] = $gna_page;
if (!empty($page_faqs)) {
    $gna_graph[] = [
        '@type' => 'FAQPage', '@id' => $canonical_url . '#faq',
        'mainEntity' => array_map(fn($f) => [
            '@type' => 'Question', 'name' => gna_plain($f['q']),
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => gna_plain($f['a'])],
        ], $page_faqs),
    ];
}
foreach (($page_schema ?? []) as $node) $gna_graph[] = $node;
gna_jsonld(['@context' => 'https://schema.org', '@graph' => $gna_graph]);
?>
  <!-- Consent manager (DPDP Act 2023): analytics + chat widget load ONLY after opt-in. -->
  <script>
  window.GNA_CONSENT = (function () {
    var KEY = 'gna_consent', VERSION = '<?= GNA_CONSENT_VERSION ?>', loaded = {};
    function read() {
      try { var v = JSON.parse(localStorage.getItem(KEY) || 'null'); return v && v.v === VERSION ? v : null; } catch (e) { return null; }
    }
    function inject(src, attrs) {
      var s = document.createElement('script'); s.src = src; s.defer = true;
      for (var k in (attrs || {})) s.setAttribute(k, attrs[k]);
      document.head.appendChild(s);
    }
    function apply(c) {
      if (!c) return;
      if (c.analytics && !loaded.analytics) {
        loaded.analytics = true;
        window.usermaven = window.usermaven || function () { (window.usermavenQ = window.usermavenQ || []).push(arguments); };
        // Form-field capture is deliberately OFF: health details typed into forms must never reach analytics.
        inject('https://t.usermaven.com/lib.js', { id: 'um-tracker', 'data-key': 'UMnSaqUG0F', 'data-tracking-host': 'https://events.usermaven.com', 'data-autocapture': 'true' });
      }
      if (c.chat && !loaded.chat) {
        loaded.chat = true;
        inject('https://app.wacrs.com/install-widget/bundle.js?key=81eecf0b-d4a9-43b9-81c8-98912520244a');
      }
    }
    function save(choice) {
      var prev = read();
      var c = { v: VERSION, essential: true, analytics: !!choice.analytics, chat: !!choice.chat, ts: new Date().toISOString() };
      try { localStorage.setItem(KEY, JSON.stringify(c)); } catch (e) {}
      // Withdrawal: drop third-party cookies already set and reload so the scripts stop running.
      if (prev && ((prev.analytics && !c.analytics) || (prev.chat && !c.chat))) {
        document.cookie.split(';').forEach(function (ck) {
          var n = ck.split('=')[0].trim(); if (n) document.cookie = n + '=; Max-Age=0; path=/';
        });
        location.reload(); return c;
      }
      apply(c); return c;
    }
    var current = read();
    if (current) apply(current);
    return { get: read, save: save, apply: apply, version: VERSION };
  })();
  </script>
</head>
<body class="antialiased">
