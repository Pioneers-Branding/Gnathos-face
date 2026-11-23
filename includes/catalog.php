<?php
/**
 * Site catalogue used by the /conditions and /treatments hubs.
 * Symptom pages are discovered from their folders, so new pages appear automatically.
 */
require_once __DIR__ . '/config.php';

$GNA_CATALOG = [
    ['id' => 'tmj', 'title' => 'TMJ disorders & jaw pain', 'blurb' => 'Jaw pain, clicking, locking and limited mouth opening — from splints and physiotherapy to arthrocentesis and arthroscopy.',
     'main' => [['TMJ treatment', '/tmj-treatment'], ['TMJ arthroscopy', '/tmj-arthroscopy']], 'folder' => 'tmj', 'extra' => []],
    ['id' => 'trauma', 'title' => 'Facial injuries & fractures', 'blurb' => 'Fractures of the jaw, cheekbone, eye socket and nose, and facial wounds — with a 24/7 trauma line.',
     'main' => [['Facial injury treatment', '/facial-injuries']], 'folder' => 'Face-Injuries', 'extra' => []],
    ['id' => 'jaw', 'title' => 'Jaw misalignment & bite problems', 'blurb' => 'Underbite, overbite, open bite and facial asymmetry corrected with orthodontics and orthognathic surgery.',
     'main' => [['Orthognathic surgery', '/orthognathic-surgery'], ['Jaw surgery', '/jaw-surgery'], ['Orthognathic treatment steps', '/orthognathic-surgery-treatment']], 'folder' => 'Orthognathic-Surgery', 'extra' => []],
    ['id' => 'osa', 'title' => 'Snoring & obstructive sleep apnea', 'blurb' => 'Loud snoring, pauses in breathing and daytime fatigue — assessment, oral appliances and airway surgery.',
     'main' => [['Sleep apnea overview', '/obstructive-sleep-apnea'], ['Sleep apnea surgery', '/osa-treatment']], 'folder' => 'OSA', 'extra' => []],
    ['id' => 'oral-cancer', 'title' => 'Oral cancer & mouth lesions', 'blurb' => 'Ulcers, white or red patches and lumps that do not heal — screening, biopsy, surgery and reconstruction.',
     'main' => [['Oral cancer: signs & screening', '/oral-cancer'], ['Oral cancer surgery', '/oral-cancer-treatment']], 'folder' => null,
     'extra' => ['oral-lesion-treatment-hyderabad', 'oral-biopsy-surgery-hyderabad', 'mouth-lump-treatment-hyderabad', 'mouth-tumor-treatment-hyderabad', 'oral-mass-treatment-hyderabad', 'oral-growth-removal-surgery-hyderabad', 'soft-tissue-growth-treatment-hyderabad']],
    ['id' => 'cysts', 'title' => 'Cysts & benign tumours', 'blurb' => 'Jaw cysts, keratocysts and benign tumours such as ameloblastoma — diagnosis, removal and follow-up.',
     'main' => [['Facial cysts & tumours', '/cysts-tumors-face'], ['Cyst & tumour surgery', '/cyst-and-tumors-treatment']], 'folder' => null,
     'extra' => ['jaw-cyst-treatment-hyderabad', 'oral-cyst-treatment-hyderabad', 'facial-cyst-removal-hyderabad', 'cyst-removal-surgery-mouth-hyderabad', 'jaw-tumor-surgery-hyderabad', 'benign-oral-tumor-treatment-hyderabad', 'lump-inside-cheek-treatment-hyderabad']],
    ['id' => 'swelling', 'title' => 'Facial swelling & infections', 'blurb' => 'Swelling of the face, jaw, gums or cheek from dental infection, cysts or salivary glands — and when it is an emergency.',
     'main' => [['Facial swelling', '/facial-swelling-treatment'], ['Face swelling doctor', '/facial-swelling-treatment-hyderabad']], 'folder' => 'Facial-Swellings',
     'extra' => ['cheek-swelling-treatment-hyderabad', 'gum-swelling-treatment-hyderabad', 'jaw-swelling-treatment-hyderabad', 'mouth-infection-treatment-hyderabad', 'painful-mouth-swelling-treatment-hyderabad', 'swelling-inside-mouth-treatment-hyderabad', 'swelling-near-jawline-treatment-hyderabad']],
    ['id' => 'nose', 'title' => 'Nasal shape & breathing', 'blurb' => 'Crooked, injured or blocked noses — septoplasty, rhinoplasty and nasal reconstruction.',
     'main' => [['Nasal deformities', '/rhinoplasty'], ['Rhinoplasty', '/rhinoplasty-treatment']], 'folder' => 'Rhinoplasty', 'extra' => []],
    ['id' => 'reconstruction', 'title' => 'Facial reconstruction', 'blurb' => 'Repair of facial defects after injury, cancer surgery or burns with skin grafts and flaps.',
     'main' => [['Skin grafts & flaps', '/skin-grafts-and-flaps']], 'folder' => 'Skin-Grafts', 'extra' => []],
    ['id' => 'cosmetic', 'title' => 'Facial aesthetic concerns', 'blurb' => 'Facial balance, jawline, chin, nose, eyelids, brows and skin ageing — surgical and non-surgical options.',
     'main' => [['Cosmetic facial surgery', '/cosmetic-facial-surgery-treatment']], 'folder' => 'Cosmetic-Facial-Surgery', 'extra' => []],
];

/** Pages in a folder (or root slugs) as [label, url], label taken from each page's $page_about. */
function gna_catalog_pages(?string $folder, array $slugs = []) {
    $files = [];
    if ($folder) $files = glob(GNA_ROOT . '/' . $folder . '/*.php') ?: [];
    foreach ($slugs as $s) $files[] = GNA_ROOT . '/' . $s . '.php';
    $out = []; $seen = [];
    foreach ($files as $f) {
        if (!is_file($f)) continue;
        $src = file_get_contents($f, false, null, 0, 4000);
        $label = preg_match("/\\\$page_about = '((?:[^'\\\\]|\\\\.)*)'/", $src, $m) ? stripslashes($m[1]) : ucwords(str_replace('-', ' ', basename($f, '.php')));
        // Two pages with the same topic label: fall back to the (unique) SEO title
        if (isset($seen[strtolower($label)]) && preg_match("/\\\$page_title = '((?:[^'\\\\]|\\\\.)*)'/", $src, $t)) {
            $label = trim(preg_replace('/\s*\|.*$|\s+in Hyderabad$/', '', stripslashes($t[1])));
        }
        $seen[strtolower($label)] = true;
        $rel = substr($f, strlen(GNA_ROOT));
        $url = implode('/', array_map('rawurlencode', explode('/', substr(str_replace('\\', '/', $rel), 0, -4))));
        $out[] = [$label, $url];
    }
    usort($out, fn($a, $b) => strcasecmp($a[0], $b[0]));
    return $out;
}
