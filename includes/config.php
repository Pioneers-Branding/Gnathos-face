<?php
/**
 * Gnathos Facial — single source of truth for practice details and small template helpers.
 * Included once by header-include.php, so every page can use these.
 */
if (defined('GNA_CONFIG_LOADED')) return;
define('GNA_CONFIG_LOADED', true);
define('GNA_ROOT', dirname(__DIR__));

const GNA_SITE_URL   = 'https://gnathosface.com';
const GNA_SITE_NAME  = 'Gnathos Facial';
const GNA_PHONE      = '+919000666476';
const GNA_PHONE_DISP = '+91 90006 66476';
const GNA_WHATSAPP   = '919000666476';
const GNA_EMAIL      = 'gnathosface@gmail.com';
const GNA_ADDRESS    = 'Cabin No. 214, Regency Prime, Jayabheri Pine Valley, Gachibowli, Hyderabad 500032, Telangana';
const GNA_FORM_ENDPOINT = 'https://app.formester.com/forms/O0tc1x4O7/submissions';
const GNA_CONSENT_VERSION = '2026-11-23';
// Grievance Officer under the DPDP Act, 2023 (confirmed by the practice, Nov 2026).
const GNA_GRIEVANCE_NAME  = 'Dr. Suresh P.L., Grievance Officer, Gnathos Facial';
const GNA_GRIEVANCE_EMAIL = 'gnathosface@gmail.com';

// ── Local SEO: keep these identical to the Google Business Profile (NAP consistency) ──
const GNA_MAPS_URL   = 'https://www.google.com/maps?cid=9899364720151495370'; // the practice's Google Maps listing
const GNA_DIRECTIONS = 'https://www.google.com/maps/dir/?api=1&destination=Gnathos+Regency+Prime+Jayabheri+Pine+Valley+Gachibowli+Hyderabad';
const GNA_GEO_LAT    = 17.4304;
const GNA_GEO_LNG    = 78.3722;
// Neighbourhoods within easy reach of the Gachibowli clinic (used on location pages and in schema areaServed)
const GNA_NEARBY = ['Gachibowli', 'HITEC City', 'Kondapur', 'Madhapur', 'Financial District', 'Nanakramguda', 'Manikonda', 'Kokapet', 'Narsingi', 'Raidurg', 'Serilingampally', 'Miyapur', 'Kukatpally', 'Jubilee Hills', 'Banjara Hills'];

$GNA_DOCTORS = [
    'suresh' => [
        'id'    => GNA_SITE_URL . '/#dr-suresh',
        'name'  => 'Dr. Suresh P.L.',
        'short' => 'Dr. Suresh',
        'creds' => 'MDS, Oral & Maxillofacial Surgery',
        'role'  => 'Founder & Consultant Oral and Maxillofacial Surgeon',
        'photo' => '/asset/Dr.-Suresh.webp',
        'bio'   => 'Founder of Gnathos Facial. Consultant oral and maxillofacial surgeon with more than 20 years of practice in Hyderabad, focused on TMJ disorders, orthognathic (jaw) surgery, facial trauma and oral cancer surgery. Member of AOMSI and IAOMS.',
        'sameAs' => ['https://www.carehospitals.com/doctor/hyderabad/hitec-city/p-l-suresh-dentist'],
        'memberOf' => ['Association of Oral and Maxillofacial Surgeons of India (AOMSI)', 'International Association of Oral and Maxillofacial Surgeons (IAOMS)'],
    ],
    'navatha' => [
        'id'    => GNA_SITE_URL . '/#dr-navatha',
        'name'  => 'Dr. Navatha Mortha',
        'short' => 'Dr. Navatha',
        'creds' => 'MDS, Oral & Maxillofacial Surgery',
        'role'  => 'Consultant Oral and Maxillofacial Surgeon',
        'photo' => '/asset/dr-navatha-mortha-facial.webp',
        'bio'   => 'Consultant oral and maxillofacial surgeon with more than 15 years of experience, leading the practice\'s TMJ arthroscopy, orthognathic surgery and reconstructive nasal work. Member of AOMSI.',
        'sameAs' => ['https://www.carehospitals.com/doctor/hyderabad/hitec-city/navatha-maxillofacial-surgeon'],
        'memberOf' => ['Association of Oral and Maxillofacial Surgeons of India (AOMSI)'],
    ],
];

/** Full MedicalClinic node — output on every page so the local entity is consistent sitewide. */
function gna_clinic_schema() {
    global $GNA_DOCTORS;
    return [
        '@type' => ['MedicalClinic', 'LocalBusiness'],
        '@id' => GNA_SITE_URL . '/#clinic',
        'name' => GNA_SITE_NAME,
        'alternateName' => 'Gnathos Facial – Oral & Maxillofacial Surgery',
        'description' => 'Oral and maxillofacial surgery practice in Gachibowli, Hyderabad, treating TMJ disorders, jaw deformities, facial fractures, sleep apnea, oral cancer, cysts and facial aesthetic concerns.',
        'url' => GNA_SITE_URL . '/',
        'logo' => GNA_SITE_URL . '/asset/gna-logop.png',
        'image' => GNA_SITE_URL . '/asset/og-gnathos-facial.jpg',
        'telephone' => '+91-90006-66476',
        'email' => GNA_EMAIL,
        'priceRange' => '₹₹₹',
        'currenciesAccepted' => 'INR',
        'paymentAccepted' => 'Cash, Insurance, No-Cost EMI',
        'isAcceptingNewPatients' => true,
        'medicalSpecialty' => ['Oral and Maxillofacial Surgery', 'Dentistry', 'PlasticSurgery'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Cabin No. 214, Regency Prime, Jayabheri Pine Valley, Gachibowli',
            'addressLocality' => 'Hyderabad', 'addressRegion' => 'Telangana',
            'postalCode' => '500032', 'addressCountry' => 'IN',
        ],
        'geo' => ['@type' => 'GeoCoordinates', 'latitude' => GNA_GEO_LAT, 'longitude' => GNA_GEO_LNG],
        'hasMap' => GNA_MAPS_URL,
        'sameAs' => [GNA_MAPS_URL],
        'openingHoursSpecification' => [
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday'], 'opens' => '08:00', 'closes' => '17:00'],
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Friday', 'opens' => '08:00', 'closes' => '13:00'],
        ],
        'areaServed' => array_merge(
            [['@type' => 'City', 'name' => 'Hyderabad'], ['@type' => 'City', 'name' => 'Secunderabad'], ['@type' => 'State', 'name' => 'Telangana'], ['@type' => 'State', 'name' => 'Andhra Pradesh']],
            array_map(fn($n) => ['@type' => 'Place', 'name' => $n . ', Hyderabad'], GNA_NEARBY)
        ),
        'employee' => array_map(fn($d) => ['@id' => $d['id']], array_values($GNA_DOCTORS)),
        'availableService' => array_map(fn($s) => ['@type' => 'MedicalProcedure', 'name' => $s], [
            'TMJ arthroscopy', 'TMJ arthrocentesis', 'Orthognathic (jaw) surgery', 'Facial fracture repair', 'Rhinoplasty and septorhinoplasty',
            'Maxillomandibular advancement for sleep apnea', 'Oral cancer surgery and reconstruction', 'Jaw cyst and tumour removal', 'Skin grafts and flaps',
            'Chin augmentation', 'Face lift', 'Blepharoplasty', 'Brow lift', 'Botox', 'Dermal fillers',
        ]),
    ];
}

/** Physician nodes for both surgeons. */
function gna_physician_schema() {
    global $GNA_DOCTORS;
    return array_map(fn($d) => [
        '@type' => 'Physician', '@id' => $d['id'], 'name' => $d['name'],
        'honorificSuffix' => 'MDS', 'jobTitle' => $d['role'],
        'description' => $d['bio'], 'image' => GNA_SITE_URL . $d['photo'],
        'medicalSpecialty' => 'Oral and Maxillofacial Surgery',
        'worksFor' => ['@id' => GNA_SITE_URL . '/#clinic'],
        'memberOf' => array_map(fn($m) => ['@type' => 'Organization', 'name' => $m], $d['memberOf']),
        'hospitalAffiliation' => ['@type' => 'Hospital', 'name' => 'CARE Hospitals, HITEC City, Hyderabad'],
        'sameAs' => $d['sameAs'],
        'url' => GNA_SITE_URL . '/#doctors',
    ], array_values($GNA_DOCTORS));
}

/** HTML-escape. */
function gna_e($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_HTML5, 'UTF-8'); }

/** Decode entities (titles are stored with &amp;) then re-escape once — avoids &amp;amp;. */
function gna_attr($s) { return gna_e(html_entity_decode((string)$s, ENT_QUOTES | ENT_HTML5, 'UTF-8')); }

/** WhatsApp click-to-chat link with a pre-filled, non-sensitive message. */
function gna_wa($text = "Hello Gnathos team, I'd like to book a consultation.") {
    return 'https://wa.me/' . GNA_WHATSAPP . '?text=' . rawurlencode($text);
}

/** Material Symbols icon (decorative). */
function gna_icon($name, $class = '') {
    return '<span class="material-symbols-outlined ' . gna_e($class) . '" aria-hidden="true">' . gna_e($name) . '</span>';
}

/** Canonical URL for the current request: clean, extensionless, no query string. */
function gna_current_url() {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $path = rawurldecode($path);
    $path = preg_replace('#/index(\.php)?$#', '/', $path);
    $path = preg_replace('#\.php$#', '', $path);
    if (str_starts_with($path, '/blogs/') && $path !== '/blogs/' && !str_ends_with($path, '/')) $path .= '/';
    $segments = array_map('rawurlencode', explode('/', $path));
    return GNA_SITE_URL . implode('/', $segments);
}

/** Print one JSON-LD block. */
function gna_jsonld(array $data) {
    echo '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) . "</script>\n";
}

/**
 * Mid-article call-to-action box (used in blog posts and long service pages).
 * Uses the current $post when present, otherwise generic copy.
 */
function gna_inline_cta($heading = null, $text = null) {
    global $post;
    $svc = $post['service'] ?? null;
    $heading = $heading ?? ($svc ? 'Wondering whether this applies to you?' : 'Not sure what your symptoms mean?');
    $text = $text ?? 'A short consultation with a maxillofacial surgeon can tell you what is going on and which options make sense — often including simple, non-surgical ones.';
    ?>
    <aside class="not-prose gna-inline-cta my-10 rounded-md border gna-rule bg-white p-6 md:p-7 flex flex-col md:flex-row md:items-center gap-5" aria-label="Book a consultation">
      <div class="flex-1">
        <p class="gna-eyebrow text-steel mb-2">Speak to a specialist</p>
        <p class="gna-serif text-[24px] leading-tight text-navy mb-2"><?= gna_e($heading) ?></p>
        <p class="text-[14.5px] leading-[1.6] text-slate m-0"><?= gna_e($text) ?></p>
      </div>
      <div class="flex flex-col gap-2 md:w-56 shrink-0">
        <a href="/book-appointment" class="gna-btn gna-btn-primary w-full">Book consultation</a>
        <a href="tel:<?= GNA_PHONE ?>" class="gna-btn gna-btn-outline w-full">Call <?= GNA_PHONE_DISP ?></a>
      </div>
    </aside>
    <?php
}

/** BlogPosting JSON-LD node for a post's $post meta array. */
function gna_article_schema(array $p) {
    global $GNA_DOCTORS;
    $url = GNA_SITE_URL . '/blogs/' . $p['slug'] . '/';
    $a = $GNA_DOCTORS[$p['author'] ?? 'suresh'];
    $r = $GNA_DOCTORS[$p['reviewer'] ?? 'navatha'];
    return [
        '@type' => 'BlogPosting', '@id' => $url . '#article',
        'headline' => gna_plain($p['title']), 'description' => gna_plain($p['description']),
        'mainEntityOfPage' => ['@id' => $url . '#webpage'],
        'datePublished' => $p['published'], 'dateModified' => $p['updated'] ?? $p['published'],
        'inLanguage' => 'en-IN', 'articleSection' => $p['category'] ?? 'Patient guide',
        'image' => GNA_SITE_URL . '/asset/og-gnathos-facial.jpg',
        'author' => ['@type' => 'Physician', '@id' => $a['id'], 'name' => $a['name'], 'url' => GNA_SITE_URL . '/#doctors'],
        'reviewedBy' => ['@type' => 'Physician', '@id' => $r['id'], 'name' => $r['name']],
        'publisher' => ['@id' => GNA_SITE_URL . '/#clinic'],
    ];
}

/** Strip tags/entities for use inside JSON-LD. */
function gna_plain($html) {
    return trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags((string)$html), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
}
