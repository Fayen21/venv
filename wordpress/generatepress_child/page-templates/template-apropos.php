<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — À propos
 */
?>
<?php get_header(); ?>
<main id="main">

  <!-- hero 2 colonnes + photo -->
  <div class="apropos-hero">
    <div class="apropos-hero__text">
      <div class="eyebrow" style="margin-bottom:18px;">À propos</div>
      <h1>Un professionnel de la gestion qui automatise ce qu'il maîtrise déjà</h1>
      <p>Avant de me consacrer à l'automatisation, j'ai travaillé sur les sujets de gestion, de comptabilité et d'administration d'entreprise — les processus mêmes que j'aide aujourd'hui à automatiser. Cette expérience de terrain change l'angle d'approche : je pars des tâches qui font perdre du temps à une équipe, puis je regarde quel outil permet de les supprimer proprement.</p>
      <p>Je travaille en indépendant, à distance, avec des TPE et PME françaises de tous secteurs. Je conçois, documente et livre chaque automatisation avec les outils grand public que vous utilisez déjà, afin que vous restiez autonome et propriétaire de ce qui est mis en place.</p>
    </div>
    <div class="apropos-hero__photo">
      <div class="apropos-hero__photo-frame">
        <img src="<?php echo esc_url( eb_asset('images/uploads/emmanuelavatar.jpg') ); ?>" alt="Emmanuel — EB Automatisation" width="800" height="800" fetchpriority="high">
      </div>
    </div>
  </div>

  <!-- citation en exergue -->
  <section class="section" style="padding:18px 40px 10px;">
    <blockquote class="apropos-quote">
      <p>« Je ne suis pas seulement un spécialiste de l'automatisation. Je suis un professionnel de la gestion qui automatise ce qu'il maîtrise déjà. »</p>
      <footer>EB Automatisation — Consultant indépendant en automatisation IA</footer>
    </blockquote>
  </section>

  <!-- pourquoi moi -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Le profil</span>
      <h2 style="max-width:680px;margin:0 auto;">Pourquoi travailler avec moi ?</h2>
    </div>
    <div class="grid grid-3">
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
        <h3>Expertise gestion &amp; comptabilité</h3>
        <p>Je comprends les processus administratifs, RH, financiers et comptables avant de les automatiser.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <h3>Interlocuteur unique</h3>
        <p>Vous échangez directement avec la personne qui conçoit et met en place vos automatisations.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
        <h3>Vous restez propriétaire</h3>
        <p>Documentation, accès, scénarios et automatisations vous appartiennent.</p>
      </div>
    </div>
  </section>

  <!-- ma façon de travailler -->
  <section class="values-band">
    <div class="values-band__inner">
      <h2>Ma façon de travailler</h2>
      <div class="values-band__grid">
        <div class="value-item">
          <div class="value-item__n">01</div>
          <h3>Concret avant tout</h3>
          <p>On part de vos vraies tâches, pas d'une démo. Chaque automatisation doit faire gagner du temps mesurable.</p>
        </div>
        <div class="value-item">
          <div class="value-item__n">02</div>
          <h3>Sans jargon</h3>
          <p>Je vous explique simplement ce que je fais et pourquoi. Vous comprenez et vous décidez.</p>
        </div>
        <div class="value-item">
          <div class="value-item__n">03</div>
          <h3>Vous restez autonome</h3>
          <p>Tout est documenté et vous appartient. Pas de dépendance, pas de boîte noire.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- outils + RGPD -->
  <section class="section" style="padding:74px 40px 24px;">
    <div class="apropos-tools">
      <div>
        <h2>Les outils que je maîtrise</h2>
        <div class="tool-chip-grid">
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0A6FC2;color:#fff;">O</span>Outlook</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#1D6F42;color:#fff;">X</span>Excel</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EB3C00;color:#fff;">365</span>Microsoft 365</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EA4335;color:#fff;">G</span>Google Workspace</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#00D639;color:#0C2E14;">S</span>Sage</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0C1E3C;color:#fff;">Q</span>Qonto</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#2E2AEB;color:#fff;">P</span>Pennylane</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#111111;color:#fff;">N</span>Notion</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#FF5C35;color:#fff;">H</span>HubSpot</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#1A1A1A;color:#fff;">Pd</span>Pipedrive</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#6D00CC;color:#fff;">M</span>Make</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EA4B71;color:#fff;">n8</span>n8n</div>
          <div class="tool-chip"><span class="tool-chip__abbr" style="background:#F29200;color:#fff;">Og</span>Ogust</div>
        </div>
      </div>
      <div class="rgpd-card">
        <div class="rgpd-card__icon">🔒</div>
        <h3>Vos données restent les vôtres</h3>
        <p>Je travaille dans le strict respect du RGPD, sur vos propres outils. Aucune revente, aucune exposition de vos données. Tout est documenté et reste votre propriété.</p>
      </div>
    </div>
  </section>

  <!-- CTA final -->
  <section class="section final-cta-section">
    <div class="cta-dotted">
      <div class="cta-dotted__text">
        <h2 style="font-size:30px;margin-bottom:8px;">Discutons de votre entreprise</h2>
        <p>Un échange de 45 minutes, sans engagement.</p>
      </div>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
