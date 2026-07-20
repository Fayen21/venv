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

  <!-- hero (fond sombre, même gabarit que les autres pages) -->
  <div class="eb-hero-fx">
  <?php eb_hero_fx( eb_hero_fx_effects()['apropos'] ); ?>
  <div class="hero-left">
    <div class="eyebrow hero-left__eyebrow">À propos</div>
    <h1>Un professionnel de la gestion qui automatise ce qu'il maîtrise déjà</h1>
    <p>Avant de me consacrer à l'automatisation, j'ai travaillé sur les sujets de gestion, de comptabilité et d'administration d'entreprise — les processus mêmes que j'aide aujourd'hui à automatiser. <strong>Cette expérience de terrain change l'angle d'approche</strong> : je pars des tâches qui font perdre du temps à une équipe, puis je regarde quel outil permet de les supprimer proprement.</p>
  </div>
  </div>

  <!-- présentation détaillée + photo (fond clair, sans effet) -->
  <section class="section apropos-intro">
    <div class="apropos-intro__text">
      <p>Je travaille en indépendant, à distance, avec des TPE et PME françaises de tous secteurs, sur l'ensemble de <a href="<?php echo esc_url( eb_url('solutions') ); ?>">mes solutions d'automatisation</a>. Je conçois, documente et livre chaque automatisation avec les outils grand public que vous utilisez déjà, afin que <strong>vous restiez autonome et propriétaire</strong> de ce qui est mis en place.</p>
      <p>Mon approche s'appuie sur une méthode simple : je cartographie vos processus existants avant de choisir les bons outils — intelligence artificielle, RPA ou simple connecteur — pour chaque cas. Cette rigueur vient directement de mon parcours en gestion et en comptabilité : je sais distinguer une <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> fiable d'un raccourci risqué. Contrairement à une <a href="<?php echo esc_url( eb_url('agence-ia') ); ?>">agence IA</a>, vous n'avez qu'<strong>un seul interlocuteur, du premier audit à la mise en production</strong> — ce qui simplifie le suivi de votre <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>">automatisation des processus</a>, service par service.</p>
    </div>
    <div class="apropos-intro__photo">
      <div class="apropos-intro__photo-frame">
        <img src="<?php echo esc_url( eb_asset('images/uploads/emmanuelavatar.jpg') ); ?>" alt="Emmanuel — EB Automatisation" width="800" height="800" loading="lazy">
      </div>
    </div>
  </section>

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
          <p>On part de vos vraies tâches, pas d'une démo. Chaque automatisation doit faire gagner du temps mesurable, comme le montrent mes <a href="<?php echo esc_url( eb_url('realisations') ); ?>">réalisations</a>.</p>
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

  <!-- mon parcours -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Mon parcours</span>
      <h2 style="max-width:680px;margin:0 auto;">De la gestion d'entreprise à l'automatisation</h2>
    </div>
    <div class="grid grid-3">
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
        <h3>Terrain — gestion &amp; comptabilité</h3>
        <p>Plusieurs années sur les sujets de gestion, comptabilité et administration d'entreprise, à vivre de l'intérieur les tâches répétitives que je cherche aujourd'hui à supprimer chez mes clients.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3z"></path><path d="M19 15l.7 2 2 .7-2 .7-.7 2-.7-2-2-.7 2-.7.7-2z"></path></svg></div>
        <h3>Bascule vers l'automatisation &amp; l'IA</h3>
        <p>Passage progressif de l'exécution manuelle de ces tâches à leur automatisation, en autodidacte d'abord, puis via une pratique intensive des outils no-code (Make, n8n) et de l'IA appliquée.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <h3>Consultant indépendant, à temps plein</h3>
        <p>Aujourd'hui entièrement dédié à l'accompagnement des TPE-PME françaises, avec une spécialisation qui reste ancrée dans les métiers de gestion : RH, comptabilité, commercial, reporting.</p>
      </div>
    </div>
  </section>

  <!-- pourquoi seul / pourquoi consultant plutôt qu'agence -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Mon positionnement</span>
      <h2 style="max-width:720px;margin:0 auto;">Pourquoi je travaille seul, et pourquoi un consultant plutôt qu'une agence</h2>
    </div>
    <div class="grid grid-2">
      <div class="card differentiators__card" style="text-align:left;">
        <h3>Pourquoi je travaille seul</h3>
        <p>Ce n'est pas une contrainte de taille, c'est un choix. En restant seul sur chaque projet, <strong>je garde une compréhension fine et continue de votre activité</strong> — sans perte d'information entre un commercial, un chef de projet et un développeur qui ne se parlent qu'à travers des comptes-rendus. Cette exigence a une limite assumée : je ne prends pas tous les projets. Un besoin qui nécessite une équipe de développeurs à temps plein sur plusieurs mois dépasse mon format, et je le dis clairement dès l'audit plutôt que d'accepter un projet que je ne pourrais pas honorer correctement.</p>
      </div>
      <div class="card differentiators__card" style="text-align:left;">
        <h3>Pourquoi un consultant plutôt qu'une agence</h3>
        <p>Une agence facture une structure commerciale, des chefs de projet et parfois une sous-traitance invisible pour vous. Un consultant indépendant facture le travail effectivement réalisé, avec un seul interlocuteur du premier échange à la mise en production. Pour une automatisation ciblée ou l'automatisation d'un service complet, c'est <strong>un format généralement plus rapide et plus économique</strong> — le comparatif détaillé est disponible sur la page <a href="<?php echo esc_url( eb_url('agence-ia') ); ?>">agence IA vs consultant indépendant</a>.</p>
      </div>
    </div>
  </section>

  <!-- ma vision -->
  <section class="section" style="padding:18px 40px 10px;">
    <blockquote class="apropos-quote">
      <p>« L'automatisation ne doit jamais être un projet informatique de plus. C'est un projet de gestion, au service du temps et de la fiabilité de votre entreprise — c'est pour ça que je pars toujours des tâches, jamais des outils. »</p>
      <footer>Ma vision de l'automatisation en TPE-PME</footer>
    </blockquote>
  </section>

  <!-- outils + RGPD -->
  <section class="section" style="padding:54px 40px 20px;">
    <div class="apropos-tools">
      <div>
        <h2>Les outils que je maîtrise</h2>
        <div class="tool-chip-grid">
          <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('outlook'); ?><span class="tool-chip__label">Outlook</span><?php echo eb_tool_chevron(); ?></a>
          <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('excel'); ?><span class="tool-chip__label">Excel</span><?php echo eb_tool_chevron(); ?></a>
          <a href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('microsoft365'); ?><span class="tool-chip__label">Microsoft 365</span><?php echo eb_tool_chevron(); ?></a>
          <div class="tool-chip"><?php echo eb_tool_icon_html('google-workspace'); ?><span class="tool-chip__label">Google Workspace</span></div>
          <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('sage'); ?><span class="tool-chip__label">Sage</span><?php echo eb_tool_chevron(); ?></a>
          <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('qonto'); ?><span class="tool-chip__label">Qonto</span><?php echo eb_tool_chevron(); ?></a>
          <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('pennylane'); ?><span class="tool-chip__label">Pennylane</span><?php echo eb_tool_chevron(); ?></a>
          <div class="tool-chip"><?php echo eb_tool_icon_html('notion'); ?><span class="tool-chip__label">Notion</span></div>
          <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('hubspot'); ?><span class="tool-chip__label">HubSpot</span><?php echo eb_tool_chevron(); ?></a>
          <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('make'); ?><span class="tool-chip__label">Make</span><?php echo eb_tool_chevron(); ?></a>
          <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('n8n'); ?><span class="tool-chip__label">n8n</span><?php echo eb_tool_chevron(); ?></a>
        </div>
        <?php echo eb_tool_compat_note(); ?>
      </div>
      <div class="rgpd-card">
        <div class="rgpd-card__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
        <h3>Vos données restent les vôtres</h3>
        <p>Je travaille dans le strict respect du RGPD, sur vos propres outils. <strong>Aucune revente, aucune exposition de vos données</strong>. Tout est documenté et reste votre propriété.</p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" style="padding:50px 40px 20px;">
    <div class="section-head" style="margin-bottom:40px;">
      <span class="eyebrow">Questions fréquentes</span>
      <h2 style="font-size:34px;max-width:620px;margin:0 auto;line-height:1.15;">Travailler avec un consultant indépendant : ce que l'on me demande</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Qui réalise concrètement les automatisations ?</h3>
        <p>Moi, du premier échange à la mise en production. Aucune sous-traitance invisible : vous savez toujours à qui vous parlez et qui construit votre projet.</p>
      </div>
      <div class="faq-item">
        <h3>Que se passe-t-il si vous êtes indisponible (congés, maladie) ?</h3>
        <p>Chaque projet est documenté au fil de l'eau, pas seulement à la livraison. En cas d'indisponibilité ponctuelle, cette documentation permet une reprise rapide, par moi-même ou par un autre prestataire si nécessaire.</p>
      </div>
      <div class="faq-item">
        <h3>Travaillez-vous avec des clients dans toute la France ?</h3>
        <p>Oui. L'essentiel du travail se fait à distance ; les échanges se font par visioconférence ou par téléphone, sans contrainte géographique pour vous.</p>
      </div>
      <div class="faq-item">
        <h3>Votre expérience en gestion sert-elle vraiment sur des sujets techniques ?</h3>
        <p>Oui, c'est même l'angle central de mon approche : je sais reconnaître une <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> ou <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">RH</a> fiable d'un raccourci risqué, parce que j'ai pratiqué ces métiers avant de les automatiser.</p>
      </div>
      <div class="faq-item">
        <h3>Comment se passe le tout premier échange ?</h3>
        <p>Par un <a href="<?php echo esc_url( eb_url('audit') ); ?>"><strong>audit gratuit de 45 minutes, sans engagement</strong></a> : vous présentez vos tâches les plus chronophages, j'identifie celles qui seraient les plus rentables à automatiser.</p>
      </div>
      <div class="faq-item">
        <h3>Prenez-vous tous les projets qu'on vous propose ?</h3>
        <p>Non, et c'est volontaire. Si un projet dépasse le format d'un consultant indépendant ou si je ne vois pas de gain réel, je le dis clairement plutôt que d'accepter une mission mal dimensionnée.</p>
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
