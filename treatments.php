<?php
$path_prefix = '';
$page_title = 'Maxillofacial Treatments & Surgery in Hyderabad | Gnathos';
$page_description = 'TMJ arthroscopy, jaw surgery, facial fracture repair, oral cancer surgery, cyst removal, skin grafts, rhinoplasty and facial aesthetic procedures in Hyderabad.';
$canonical_url = 'https://gnathosface.com/treatments';
$page_type = 'CollectionPage';
$breadcrumbs = [['Home', '/'], ['Treatments', null]];
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';

$gna_treatments = [
  'Surgical & reconstructive' => [
    ['TMJ treatment', '/tmj-treatment', 'Step-by-step care for jaw-joint disorders, from splints to joint surgery.'],
    ['TMJ arthroscopy', '/tmj-arthroscopy', 'Keyhole examination and treatment of the jaw joint, usually as a day-care procedure.'],
    ['Orthognathic (jaw) surgery', '/jaw-surgery', 'Repositioning the upper and/or lower jaw to correct bite and facial balance.'],
    ['Orthognathic treatment steps', '/orthognathic-surgery-treatment', 'How orthodontics, 3D planning, surgery and recovery fit together.'],
    ['Facial fracture & trauma surgery', '/facial-injuries', 'Repair of jaw, cheekbone, eye-socket and nasal fractures and facial wounds.'],
    ['Oral cancer surgery', '/oral-cancer-treatment', 'Tumour removal with reconstruction, planned with the oncology team.'],
    ['Cyst & tumour removal', '/cyst-and-tumors-treatment', 'Removal of jaw cysts and benign tumours, with reconstruction where needed.'],
    ['Skin grafts & flaps', '/skin-grafts-and-flaps', 'Reconstructing facial skin and tissue after injury, surgery or burns.'],
    ['Sleep apnea surgery', '/osa-treatment', 'Airway surgery including maxillomandibular advancement (MMA).'],
    ['Facial swelling treatment', '/facial-swelling-treatment', 'Drainage of infections and treatment of the underlying cause.'],
  ],
  'Nose' => [
    ['Rhinoplasty', '/rhinoplasty-treatment', 'Reshaping the nose for appearance and breathing.'],
    ['Nasal deformity & breathing surgery', '/rhinoplasty', 'Septorhinoplasty for crooked, injured or blocked noses.'],
  ],
  'Facial aesthetic' => [
    ['Cosmetic facial surgery', '/cosmetic-facial-surgery-treatment', 'Overview of surgical and non-surgical aesthetic options.'],
    ['Chin augmentation', '/chin-augmentation-surgery', 'Implant or sliding genioplasty to improve the profile.'],
    ['Face lift', '/face-lift-surgery', 'Lifting sagging cheeks, jowls and neck tissues.'],
    ['Eyelid surgery', '/eyelid-surgery', 'Upper and lower blepharoplasty.'],
    ['Brow lift', '/brow-lift-treatment', 'Raising low or heavy brows.'],
    ['Botox', '/botox-treatment', 'For expression lines and jaw clenching.'],
    ['Dermal fillers', '/dermal-fillers-hyderabad', 'Hyaluronic acid fillers for volume and contour.'],
    ['Lip augmentation', '/lip-augmentation', 'Fillers or surgery for lip proportion.'],
  ],
];
?>
<section class="border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-8 md:pt-12 pb-12 md:pb-16 max-w-4xl">
    <p class="gna-eyebrow text-steel mb-4">Treatments</p>
    <h1 class="gna-serif gna-h2-lg text-navy mb-5">Maxillofacial treatments, explained clearly.</h1>
    <p class="text-[16px] leading-[1.7] text-slate">Every treatment page covers who it's for, how it's done, recovery and risks. Surgery is always one option among several — your surgeon will explain the alternatives, including not operating. Looking for a symptom instead? <a href="/conditions" class="text-steel underline underline-offset-2">Browse conditions</a>.</p>
  </div>
</section>
<div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-16 space-y-14">
  <?php foreach ($gna_treatments as $group => $items): ?>
  <section aria-labelledby="t-<?= md5($group) ?>">
    <h2 id="t-<?= md5($group) ?>" class="gna-serif text-[32px] text-navy mb-6"><?= gna_e($group) ?></h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ($items as [$l, $u, $d]): ?>
      <a href="<?= $u ?>" class="gna-card p-6 flex flex-col">
        <span class="gna-serif text-[24px] leading-tight text-navy mb-2"><?= gna_e($l) ?></span>
        <span class="text-[14px] leading-[1.6] text-slate grow"><?= gna_e($d) ?></span>
        <span class="mt-4 text-[12px] font-semibold text-steel">Read more →</span>
      </a>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endforeach; ?>
</div>
<?php include $path_prefix . 'footer.php'; ?>
