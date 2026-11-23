<?php
/**
 * Consent banner + preferences dialog (DPDP Act 2023 / DPDP Rules 2025).
 * - Nothing optional loads until the visitor makes a clear, affirmative choice.
 * - "Reject" is as easy as "Accept"; choices can be changed or withdrawn at any time
 *   from the footer link ("Cookie & consent settings").
 * - Browsers sending Global Privacy Control are treated as a rejection without asking.
 */
?>
<div class="gna-consent-banner gna-no-print" id="gna-consent-banner" role="region" aria-label="Privacy choices" hidden>
  <div class="p-5 md:p-6">
    <p class="gna-serif text-[22px] leading-tight mb-2">Your privacy choices</p>
    <p class="text-[13.5px] leading-[1.6] text-slate mb-4">We use essential storage to run this website. With your permission we'd also use <strong class="text-navy">analytics</strong> (Usermaven) to see which pages help patients, and a <strong class="text-navy">WhatsApp chat widget</strong> (WACRS). We never record what you type into forms. <a class="underline text-steel" href="/privacy-policy#cookies">Learn more</a>.</p>
    <div class="flex flex-col sm:flex-row gap-2">
      <button type="button" class="gna-btn gna-btn-primary !py-2.5 sm:flex-1" data-gna-consent="all">Accept all</button>
      <button type="button" class="gna-btn gna-btn-outline !py-2.5 sm:flex-1" data-gna-consent="none">Reject optional</button>
      <button type="button" class="gna-btn !py-2.5 !px-3 text-steel underline-offset-2 hover:underline sm:flex-none" data-gna-consent-open>Choose</button>
    </div>
  </div>
</div>

<div class="gna-consent-dialog" id="gna-consent-dialog" role="dialog" aria-modal="true" aria-labelledby="gna-consent-title" hidden>
  <div class="gna-consent-panel">
    <div class="p-6 md:p-7 border-b gna-rule">
      <p id="gna-consent-title" class="gna-serif text-[26px] leading-tight mb-2">Cookie &amp; consent settings</p>
      <p class="text-[13.5px] leading-[1.6] text-slate">Choose what you allow. You can change this at any time from the link in the footer. Withdrawing consent stops future processing; it does not affect processing already done. Full details are in our <a class="underline text-steel" href="/privacy-policy">privacy notice</a>.</p>
    </div>
    <div class="divide-y divide-[var(--hairline)]">
      <div class="flex gap-4 items-start justify-between p-6">
        <div><p class="font-semibold text-[15px] mb-1">Essential</p><p class="text-[13px] text-slate leading-[1.55]">Remembers this choice and keeps the site secure. Always on; no tracking.</p></div>
        <label class="gna-switch"><input type="checkbox" checked disabled aria-label="Essential storage (always on)"/><span></span></label>
      </div>
      <div class="flex gap-4 items-start justify-between p-6">
        <div><p class="font-semibold text-[15px] mb-1">Analytics</p><p class="text-[13px] text-slate leading-[1.55]">Usermaven measures page visits and clicks so we can improve patient information. It does not capture form entries.</p></div>
        <label class="gna-switch"><input type="checkbox" id="gna-consent-analytics" aria-label="Allow analytics"/><span></span></label>
      </div>
      <div class="flex gap-4 items-start justify-between p-6">
        <div><p class="font-semibold text-[15px] mb-1">Chat widget</p><p class="text-[13px] text-slate leading-[1.55]">Loads the WACRS WhatsApp chat bubble. Our direct WhatsApp and phone links work without it.</p></div>
        <label class="gna-switch"><input type="checkbox" id="gna-consent-chat" aria-label="Allow chat widget"/><span></span></label>
      </div>
    </div>
    <div class="p-6 flex flex-col sm:flex-row gap-2 border-t gna-rule">
      <button type="button" class="gna-btn gna-btn-primary !py-2.5 sm:flex-1" data-gna-consent="save">Save choices</button>
      <button type="button" class="gna-btn gna-btn-outline !py-2.5 sm:flex-1" data-gna-consent="none">Reject optional</button>
    </div>
  </div>
</div>

<script>
(function () {
  var C = window.GNA_CONSENT; if (!C) return;
  var banner = document.getElementById('gna-consent-banner'), dialog = document.getElementById('gna-consent-dialog');
  var a = document.getElementById('gna-consent-analytics'), ch = document.getElementById('gna-consent-chat');
  var lastFocus = null;
  function closeAll() { banner.hidden = true; dialog.hidden = true; document.body.style.overflow = ''; if (lastFocus) lastFocus.focus(); }
  function openDialog() {
    lastFocus = document.activeElement;
    var c = C.get() || {}; a.checked = !!c.analytics; ch.checked = !!c.chat;
    dialog.hidden = false; banner.hidden = true; document.body.style.overflow = 'hidden'; a.focus();
  }
  document.addEventListener('click', function (e) {
    var t = e.target.closest('[data-gna-consent],[data-gna-consent-open]'); if (!t) return;
    if (t.hasAttribute('data-gna-consent-open')) return openDialog();
    var v = t.getAttribute('data-gna-consent');
    if (v === 'all') C.save({ analytics: true, chat: true });
    else if (v === 'none') C.save({ analytics: false, chat: false });
    else if (v === 'save') C.save({ analytics: a.checked, chat: ch.checked });
    closeAll();
  });
  dialog.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeAll(); });
  dialog.addEventListener('click', function (e) { if (e.target === dialog) closeAll(); });
  if (!C.get()) {
    if (navigator.globalPrivacyControl === true) C.save({ analytics: false, chat: false });
    else banner.hidden = false;
  }
})();
</script>
