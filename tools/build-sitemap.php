<?php
/**
 * Regenerates /sitemap.xml from the PHP pages on disk.
 *   php tools/build-sitemap.php
 * Includes only indexable, canonical URLs (skips noindex pages, redirect stubs, includes,
 * and pages whose canonical points elsewhere). lastmod comes from the file's last change.
 */
$root = dirname(__DIR__);
$site = 'https://gnathosface.com';
$skipDirs = ['includes', 'node_modules', 'seo-plan', 'tools', 'src', 'blog', 'asset', '.git', '.vscode'];
$skipFiles = ['header.php', 'header-include.php', 'footer.php', '404.php'];

$it = new RecursiveIteratorIterator(new RecursiveCallbackFilterIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS),
    function ($f) use ($skipDirs) { return !($f->isDir() && in_array($f->getFilename(), $skipDirs, true)); }
));
$urls = [];
foreach ($it as $f) {
    if ($f->getExtension() !== 'php' || in_array($f->getFilename(), $skipFiles, true)) continue;
    $rel = str_replace('\\', '/', substr($f->getPathname(), strlen($root) + 1));
    $src = file_get_contents($f->getPathname());
    if (preg_match('/noindex/', $src) && preg_match('/\$page_robots/', $src)) continue;
    if (preg_match('/header\(\s*["\']Location:/i', $src)) continue;
    if ($rel === 'index.php') $loc = $site . '/';
    elseif ($rel === 'blogs/index.php') $loc = $site . '/blogs/';
    elseif (str_starts_with($rel, 'blogs/')) $loc = $site . '/blogs/' . basename($rel, '.php') . '/';
    else $loc = $site . '/' . implode('/', array_map('rawurlencode', explode('/', substr($rel, 0, -4))));
    if (preg_match("/\\\$canonical_url\s*=\s*['\"]([^'\"]+)['\"]/", $src, $m) && rtrim($m[1], '/') !== rtrim($loc, '/')) continue;
    $depth = substr_count(parse_url($loc, PHP_URL_PATH), '/');
    $prio = $loc === $site . '/' ? '1.0' : (str_starts_with($rel, 'blogs/') ? '0.6' : ($depth <= 1 ? '0.9' : '0.5'));
    $git = trim((string) @shell_exec('git -C ' . escapeshellarg($root) . ' log -1 --format=%cs -- ' . escapeshellarg($rel) . ' 2>' . (PHP_OS_FAMILY === 'Windows' ? 'NUL' : '/dev/null')));
    $urls[$loc] = [$git ?: date('Y-m-d', filemtime($f->getPathname())), $prio];
}
ksort($urls);
$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($urls as $loc => [$mod, $prio]) {
    $xml .= "  <url><loc>" . htmlspecialchars($loc, ENT_XML1) . "</loc><lastmod>$mod</lastmod><priority>$prio</priority></url>\n";
}
$xml .= "</urlset>\n";
file_put_contents($root . '/sitemap.xml', $xml);
echo count($urls) . " URLs written to sitemap.xml\n";
