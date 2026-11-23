<?php
/**
 * Auto-discovers blog posts: every blogs/<slug>.php defines a $post meta array and returns it
 * early when GNA_META_ONLY is defined. New posts appear on the blog index, homepage and
 * service-page "related guides" automatically — no list to maintain.
 * Results are cached (keyed on file modification times) so pages don't re-read every post.
 */
require_once __DIR__ . '/config.php';

function gna_blog_posts() {
    static $cache = null;
    if ($cache !== null) return $cache;
    $files = array_values(array_filter(glob(GNA_ROOT . '/blogs/*.php') ?: [], fn($f) => basename($f) !== 'index.php'));
    $sig = md5(implode('|', array_map(fn($f) => $f . ':' . filemtime($f), $files)));
    $cacheFile = sys_get_temp_dir() . '/gna-blog-registry-' . md5(GNA_ROOT) . '.json';
    $saved = @json_decode((string)@file_get_contents($cacheFile), true);
    if (is_array($saved) && ($saved['sig'] ?? '') === $sig) return $cache = $saved['posts'];

    if (!defined('GNA_META_ONLY')) define('GNA_META_ONLY', true);
    $posts = [];
    foreach ($files as $file) {
        $meta = (function ($__f) { $path_prefix = '../'; return include $__f; })($file);
        if (is_array($meta) && !empty($meta['slug'])) {
            $meta['url'] = '/blogs/' . $meta['slug'] . '/';
            unset($meta['faqs'], $meta['toc'], $meta['sources']);
            $posts[] = $meta;
        }
    }
    usort($posts, fn($a, $b) => [empty($a['legacy']) ? 1 : 0, $a['published']] <=> [empty($b['legacy']) ? 1 : 0, $b['published']]);
    $posts = array_reverse($posts);
    @file_put_contents($cacheFile, json_encode(['sig' => $sig, 'posts' => $posts]), LOCK_EX);
    return $cache = $posts;
}

/** Up to $n guides relevant to a service page, scored by category + shared words in the URL/title. */
function gna_related_guides(string $topic, string $pageUrl, string $pageLabel = '', int $n = 3) {
    $cats = [
        'TMJ disorder / jaw pain or clicking' => ['TMJ'],
        'Facial injury or fracture' => ['Facial Trauma'],
        'Jaw misalignment (orthognathic surgery)' => ['Jaw Surgery'],
        'Nose shape or breathing (rhinoplasty)' => ['Rhinoplasty'],
        'Snoring / sleep apnea' => ['Sleep Apnea'],
        'Mouth ulcer, patch or lump (oral cancer screening)' => ['Oral Cancer'],
        'Cyst, tumour or facial swelling' => ['Cysts & Tumours', 'Facial Swelling'],
        'Cosmetic facial procedure' => ['Cosmetic'],
        'Reconstruction / skin grafts' => ['Reconstruction', 'Facial Trauma'],
    ][$topic] ?? [];
    $stop = ['treatment', 'surgery', 'hyderabad', 'and', 'the', 'for', 'of', 'in', 'a', 'to', 'your', 'what', 'how', 'is'];
    $words = array_diff(preg_split('/[^a-z0-9]+/', strtolower($pageUrl . ' ' . $pageLabel)), $stop, ['']);
    $scored = [];
    foreach (gna_blog_posts() as $i => $p) {
        $score = in_array($p['category'], $cats, true) ? 10 : 0;
        $pw = preg_split('/[^a-z0-9]+/', strtolower($p['slug'] . ' ' . $p['title']));
        $score += 2 * count(array_intersect($words, $pw));
        if (!empty($p['service'][1]) && rtrim($p['service'][1], '/') === rtrim(parse_url($pageUrl, PHP_URL_PATH) ?? '', '/')) $score += 6;
        if ($score > 0) $scored[] = [$score, -$i, $p];
    }
    rsort($scored);
    return array_map(fn($x) => $x[2], array_slice($scored, 0, $n));
}
