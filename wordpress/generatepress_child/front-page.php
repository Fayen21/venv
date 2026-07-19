<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<main id="main">

  <!-- hero + live workflow switcher -->
  <div class="eb-hero-fx">
  <?php eb_hero_fx( eb_hero_fx_effects()['index'] ); ?>
  <section class="section hero">
    <div class="hero__glow" aria-hidden="true"></div>
    <div class="hero__content">
      <div class="eyebrow hero__eyebrow"><span class="hero__dot"></span>Consultant indépendant en automatisation IA</div>
      <h1 class="hero__title">Automatisez vos tâches répétitives. Gardez vos outils.</h1>
      <p class="hero__lead">J'aide les TPE-PME à connecter leurs outils existants — emails, Excel, CRM, logiciels RH ou comptables — pour supprimer les ressaisies, les oublis et les tâches répétitives. Vous gardez vos outils, vous gagnez du temps.</p>
      <div class="hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary hero__cta-primary">Demander un audit gratuit <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary hero__cta-secondary">Voir les solutions</a>
      </div>
      <div class="hero__reassurance"><span class="hero__reassurance-check">✓</span> 45 minutes, sans engagement — repartez avec des pistes concrètes</div>
    </div>

    <div class="hero__demo">
      <div class="hero__demo-label">
        <span>Démonstration en direct</span>
        <span class="hero__demo-rule"></span>
      </div>
      <div class="workflow-tabs" data-workflow-tabs>
        <button class="workflow-tabs__btn is-active" type="button" data-scenario="relances"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg>Relances</button>
        <button class="workflow-tabs__btn" type="button" data-scenario="rh"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg>RH</button>
        <button class="workflow-tabs__btn" type="button" data-scenario="emails"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h4l2 3h4l2-3h4"></path><path d="M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6"></path><path d="M4 12l2-7h12l2 7"></path></svg>Emails</button>
        <button class="workflow-tabs__btn" type="button" data-scenario="pdf"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg>PDF</button>
        <button class="workflow-tabs__btn" type="button" data-scenario="crm"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path></svg>CRM</button>
      </div>
      <div class="mockup mockup--navy workflow-panel">
        <div class="mockup__titlebar">
          <div class="mockup__dots"><span></span><span></span><span></span></div>
          <span class="mockup__filename" data-workflow-file>relances_clients · n8n</span>
          <span class="mockup__live"><span class="mockup__live-dot"></span>en direct</span>
        </div>
        <div class="workflow-panel__body">
          <div class="workflow-step" data-step="0">
            <span class="workflow-step__icon" data-step-icon><span data-step-icon-emoji></span><span class="workflow-step__dot" data-step-dot></span></span>
            <div class="workflow-step__text">
              <div class="workflow-step__title" data-step-title></div>
              <div class="workflow-step__sub" data-step-sub></div>
            </div>
            <span class="workflow-step__badge" data-step-badge></span>
          </div>
          <div class="workflow-step__connector"></div>
          <div class="workflow-step" data-step="1">
            <span class="workflow-step__icon" data-step-icon><span data-step-icon-emoji></span><span class="workflow-step__dot" data-step-dot></span></span>
            <div class="workflow-step__text">
              <div class="workflow-step__title" data-step-title></div>
              <div class="workflow-step__sub" data-step-sub></div>
            </div>
            <span class="workflow-step__badge" data-step-badge></span>
          </div>
          <div class="workflow-step__connector"></div>
          <div class="workflow-step" data-step="2">
            <span class="workflow-step__icon" data-step-icon><span data-step-icon-emoji></span><span class="workflow-step__dot" data-step-dot></span></span>
            <div class="workflow-step__text">
              <div class="workflow-step__title" data-step-title></div>
              <div class="workflow-step__sub" data-step-sub></div>
            </div>
            <span class="workflow-step__badge" data-step-badge></span>
          </div>
        </div>
        <div class="workflow-panel__note">
          <span class="workflow-panel__note-check">✓</span>
          <span data-workflow-note>Relance envoyée au bon moment — sans oubli</span>
        </div>
      </div>
    </div>
  </section>
  </div>

  <!-- nos expertises -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Nos expertises</span>
      <h2 style="max-width:760px;margin:0 auto;">Trois piliers pour automatiser votre entreprise</h2>
    </div>
    <div class="home-expertise">
      <div class="grid grid-3">
        <a class="home-expertise__card" href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>">
          <span class="home-expertise__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"></rect><line x1="8" y1="7" x2="8" y2="7.01"></line><line x1="12" y1="7" x2="12" y2="7.01"></line><line x1="16" y1="7" x2="16" y2="7.01"></line><line x1="8" y1="11" x2="8" y2="11.01"></line><line x1="12" y1="11" x2="12" y2="11.01"></line><line x1="16" y1="11" x2="16" y2="11.01"></line><path d="M9 21v-4h6v4"></path></svg></span>
          <span class="home-expertise__title">Automatisation d'entreprise</span>
          <span class="home-expertise__desc">RH, comptabilité, commercial, reporting : par où commencer et comment prioriser service par service.</span>
          <span class="home-expertise__link">Explorer <span aria-hidden="true">→</span></span>
        </a>
        <a class="home-expertise__card" href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>">
          <span class="home-expertise__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="5" cy="12" r="2.4"></circle><circle cx="19" cy="6" r="2.4"></circle><circle cx="19" cy="18" r="2.4"></circle><path d="M7.2 11.2L16.8 6.9"></path><path d="M7.2 12.8L16.8 17.1"></path></svg></span>
          <span class="home-expertise__title">Automatisation des processus</span>
          <span class="home-expertise__desc">Cartographier et orchestrer un enchaînement complet, de bout en bout, avec Make et n8n.</span>
          <span class="home-expertise__link">Explorer <span aria-hidden="true">→</span></span>
        </a>
        <a class="home-expertise__card" href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">
          <span class="home-expertise__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3z"></path><path d="M19 15l.7 2 2 .7-2 .7-.7 2-.7-2-2-.7 2-.7.7-2z"></path></svg></span>
          <span class="home-expertise__title">Automatisation IA</span>
          <span class="home-expertise__desc">Ce que l'intelligence artificielle change concrètement dans vos processus, sans jargon technique.</span>
          <span class="home-expertise__link">Explorer <span aria-hidden="true">→</span></span>
        </a>
      </div>
      <div class="home-expertise__specializations">
        <span class="home-expertise__spec-label">Spécialisations les plus demandées</span>
        <div class="home-expertise__spec-list">
          <a class="home-expertise__spec-pill" href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">Automatisation comptable</a>
          <a class="home-expertise__spec-pill" href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">Automatisation RH</a>
          <a class="home-expertise__spec-pill" href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">Automatisation CRM</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ce que j'automatise -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Par service</span>
      <h2 style="max-width:760px;margin:0 auto;">Des automatisations concrètes pour chaque service de votre entreprise</h2>
    </div>
    <div class="grid grid-3 automations__grid">

      <div class="card automations__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
        <h3>Emails et relances</h3>
        <p class="automations__example"><strong>Factures impayées</strong> détectées et relances personnalisées envoyées au bon moment, sans oubli.</p>
        <div class="automations__gain"><span class="automations__gain-value">−38%</span><span class="automations__gain-label">de retards de paiement</span></div>
      </div>

      <div class="card automations__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
        <h3>Excel, PDF et OCR</h3>
        <p class="automations__example">Données lues et extraites de vos fichiers <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a> et <a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">PDF</a>, puis rangées sans aucune ressaisie.</p>
        <div class="automations__gain"><span class="automations__gain-value">−72%</span><span class="automations__gain-label">de temps de saisie</span></div>
      </div>

      <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="card automations__card automations__card--link">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path></svg></div>
        <span class="automations__card__chevron" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span>
        <h3>CRM et suivi commercial</h3>
        <p class="automations__example">Chaque demande entrante crée une <strong>fiche et une tâche de suivi</strong> dans votre CRM.</p>
        <div class="automations__gain"><span class="automations__gain-value">0</span><span class="automations__gain-label">prospect oublié</span></div>
      </a>

      <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="card automations__card automations__card--link">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
        <span class="automations__card__chevron" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span>
        <h3>Ressources humaines</h3>
        <p class="automations__example">Onboarding automatisé : <strong>contrat, accès et dossier d'accueil</strong> prêts pour le premier jour.</p>
        <div class="automations__gain"><span class="automations__gain-value">2 jours</span><span class="automations__gain-label">gagnés à chaque embauche</span></div>
      </a>

      <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="card automations__card automations__card--link">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
        <span class="automations__card__chevron" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span>
        <h3>Comptabilité</h3>
        <p class="automations__example"><strong>Rapprochement bancaire</strong> et contrôles de cohérence automatisés, anomalies signalées.</p>
        <div class="automations__gain"><span class="automations__gain-value">−85%</span><span class="automations__gain-label">de temps de rapprochement</span></div>
      </a>

      <div class="card automations__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1.5"></rect><rect x="14" y="3" width="7" height="7" rx="1.5"></rect><rect x="14" y="14" width="7" height="7" rx="1.5"></rect><rect x="3" y="14" width="7" height="7" rx="1.5"></rect></svg></div>
        <h3>Reporting</h3>
        <p class="automations__example">Vos chiffres consolidés depuis vos outils, <strong>tableaux de bord mis à jour automatiquement</strong>.</p>
        <div class="automations__gain"><span class="automations__gain-value">Auto</span><span class="automations__gain-label">tableaux toujours à jour</span></div>
      </div>

    </div>
    <p class="automations__footnote">Ces chiffres sont présentés comme exemples observés sur des missions représentatives.</p>
  </section>

  <!-- différenciation -->
  <section class="section">
    <div class="differentiators__intro">
      <h2>Vous n'avez pas besoin d'un nouveau logiciel</h2>
      <p>La plupart des projets d'automatisation imposent de changer d'outil ou de revoir l'organisation de l'entreprise. Mon approche est différente : je connecte les logiciels que vous utilisez déjà et j'automatise les tâches qui vous font perdre du temps, avec de l'<a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">intelligence artificielle</a> quand elle apporte une vraie valeur.</p>
    </div>
    <div class="grid grid-3">
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
        <h3>Aucune migration</h3>
        <p>Vos équipes gardent leurs habitudes.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
        <h3>Déploiement rapide</h3>
        <p>Quelques jours ou semaines plutôt que plusieurs mois.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <h3>Maîtrise totale</h3>
        <p>Vous restez propriétaire de vos outils et de vos données.</p>
      </div>
    </div>
  </section>

  <!-- pourquoi automatiser maintenant -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Pourquoi maintenant</span>
      <h2 style="max-width:760px;margin:0 auto;">Pourquoi automatiser maintenant, et ce que coûte vraiment d'attendre</h2>
    </div>
    <div class="differentiators__intro">
      <p>La question n'est presque jamais « faut-il automatiser un jour ? », mais « <strong>combien ce report coûte-t-il déjà ?</strong> ». Les outils sont désormais accessibles aux budgets TPE-PME, compatibles avec vos outils existants (<a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a>, <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>">Outlook</a>, <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">CRM</a>, <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">comptabilité</a>), et l'écart se creuse avec les entreprises qui ont déjà commencé.</p>
    </div>
    <div class="cost-callout">
      <span class="cost-callout__value">5 à 10 h</span>
      <span class="cost-callout__label">perdues <strong>chaque semaine</strong> dans une PME de 15 à 25 salariés, sur les ressaisies, tris et relances manuelles.</span>
    </div>
    <div class="grid grid-3">
      <div class="card differentiators__card cost-card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
        <span class="cost-card__tag">Coût direct</span>
        <h3>≈ 240 h perdues par an</h3>
        <p><strong>5 heures par semaine</strong> de ressaisies évitables, cumulées, représentent environ <strong>six semaines</strong> de travail à temps plein chaque année.</p>
      </div>
      <div class="card differentiators__card cost-card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4M12 17h.01"></path><path d="M10.3 3.9L2.6 17.5a1.6 1.6 0 0 0 1.4 2.4h16a1.6 1.6 0 0 0 1.4-2.4L13.7 3.9a1.6 1.6 0 0 0-2.8 0z"></path></svg></div>
        <span class="cost-card__tag">Coût indirect</span>
        <h3>Des erreurs invisibles jusqu'à ce qu'elles coûtent cher</h3>
        <p>Écarts comptables détectés trop tard, relances client oubliées : le <strong>coût réel apparaît après coup</strong>, quand il aurait pu être évité.</p>
      </div>
      <div class="card differentiators__card cost-card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <span class="cost-card__tag">Coût stratégique</span>
        <h3>Un écart qui se creuse</h3>
        <p>Chaque mois sans automatisation est un mois où vos <strong>concurrents prennent de l'avance</strong> sur leur réactivité et leur coût de fonctionnement.</p>
      </div>
    </div>
    <p class="text-center" style="margin-top:30px;"><a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn-text">Estimer le coût de votre inaction →</a></p>
  </section>

  <!-- vous gardez vos outils -->
  <section class="section">
    <div class="trust-tools">
      <span class="badge-pill badge-pill--green"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg>Aucune migration</span>
      <h2 class="trust-tools__title">Compatible avec les outils que vous utilisez déjà</h2>
      <p class="trust-tools__desc">Aucune migration. Aucun changement d'habitude pour vos équipes.</p>
      <div class="tool-chip-grid tool-chip-grid--home">
        <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('outlook'); ?><span class="tool-chip__label">Outlook</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('excel'); ?><span class="tool-chip__label">Excel</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('microsoft365'); ?><span class="tool-chip__label">Microsoft 365</span><?php echo eb_tool_chevron(); ?></a>
        <div class="tool-chip"><?php echo eb_tool_icon_html('google-workspace'); ?><span class="tool-chip__label">Google Workspace</span></div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('sage'); ?><span class="tool-chip__label">Sage</span></div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('qonto'); ?><span class="tool-chip__label">Qonto</span></div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('pennylane'); ?><span class="tool-chip__label">Pennylane</span></div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('notion'); ?><span class="tool-chip__label">Notion</span></div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('hubspot'); ?><span class="tool-chip__label">HubSpot</span></div>
        <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('make'); ?><span class="tool-chip__label">Make</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('n8n'); ?><span class="tool-chip__label">n8n</span><?php echo eb_tool_chevron(); ?></a>
      </div>
      <?php echo eb_tool_compat_note(); ?>
    </div>
  </section>

  <!-- preuves sociales -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Concrètement</span>
      <h2 style="max-width:720px;margin:0 auto;">Ce que ça change, avant / après</h2>
    </div>
    <div class="grid grid-2 proof-cases__grid">

      <div class="card proof-case">
        <div class="proof-case__head"><span class="proof-case__dot"></span><span class="proof-case__company">Entreprise de services — 15 salariés</span></div>
        <div class="proof-case__compare">
          <div class="proof-case__col proof-case__col--before">
            <div class="proof-case__col-label">Avant</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__x">✕</span>Relances manuelles</div>
              <div class="proof-case__row"><span class="proof-case__x">✕</span>Suivis oubliés</div>
              <div class="proof-case__row"><span class="proof-case__x">✕</span>Plusieurs heures par semaine</div>
            </div>
          </div>
          <div class="proof-case__arrow">→</div>
          <div class="proof-case__col proof-case__col--after">
            <div class="proof-case__col-label">Après</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Relances automatiques personnalisées</div>
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Suivi systématique</div>
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Temps administratif fortement réduit</div>
            </div>
          </div>
        </div>
      </div>

      <div class="card proof-case">
        <div class="proof-case__head"><span class="proof-case__dot"></span><span class="proof-case__company">Cabinet de conseil — 10 salariés</span></div>
        <div class="proof-case__compare">
          <div class="proof-case__col proof-case__col--before">
            <div class="proof-case__col-label">Avant</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__x">✕</span>Double saisie entre plusieurs outils</div>
            </div>
          </div>
          <div class="proof-case__arrow">→</div>
          <div class="proof-case__col proof-case__col--after">
            <div class="proof-case__col-label">Après</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Synchronisation automatique des données</div>
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Suppression des ressaisies</div>
            </div>
          </div>
        </div>
      </div>

      <div class="card proof-case">
        <div class="proof-case__head"><span class="proof-case__dot"></span><span class="proof-case__company">PME industrielle — 25 salariés</span></div>
        <div class="proof-case__compare">
          <div class="proof-case__col proof-case__col--before">
            <div class="proof-case__col-label">Avant</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__x">✕</span>Tableaux Excel mis à jour manuellement</div>
            </div>
          </div>
          <div class="proof-case__arrow">→</div>
          <div class="proof-case__col proof-case__col--after">
            <div class="proof-case__col-label">Après</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Reporting automatisé</div>
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Données toujours à jour</div>
            </div>
          </div>
        </div>
      </div>

      <div class="card proof-case">
        <div class="proof-case__head"><span class="proof-case__dot"></span><span class="proof-case__company">Entreprise multisites — 40 salariés</span></div>
        <div class="proof-case__compare">
          <div class="proof-case__col proof-case__col--before">
            <div class="proof-case__col-label">Avant</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__x">✕</span>Onboarding RH dispersé entre plusieurs outils</div>
            </div>
          </div>
          <div class="proof-case__arrow">→</div>
          <div class="proof-case__col proof-case__col--after">
            <div class="proof-case__col-label">Après</div>
            <div class="proof-case__list">
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Contrat, accès et documents générés automatiquement</div>
              <div class="proof-case__row"><span class="proof-case__check">✓</span>Arrivée préparée en quelques minutes</div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <p class="proof-cases__footnote">Exemples types d'automatisations mises en place pour des TPE-PME comparables.</p>
  </section>

  <!-- avant / après — rapprochement bancaire -->
  <section class="section">
    <div class="bank-compare__head">
      <div>
        <span class="eyebrow" style="display:block;margin-bottom:14px;">Avant / après</span>
        <h2 style="max-width:560px;line-height:1.1;">Le rapprochement bancaire, avant et après automatisation</h2>
      </div>
      <div class="ba-toggle" data-ba-toggle>
        <button class="ba-toggle__btn" type="button" data-ba="avant">Avant</button>
        <button class="ba-toggle__btn is-active" type="button" data-ba="apres">Après</button>
      </div>
    </div>

    <div class="bank-compare__panel" data-ba-panel="avant" hidden>
      <div class="grid bank-avant">
        <div class="card bank-avant__mockup">
          <div class="bank-avant__titlebar">
            <div class="bank-avant__dots"><span></span><span></span><span></span></div>
            <span class="bank-avant__filename">Pointage manuel — relevé Qonto ↔ Sage</span>
            <span class="bank-avant__timer"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg> ~5 h / mois</span>
          </div>
          <div class="bank-avant__body">
            <div class="bank-avant__row bank-avant__row--head"><span>Opération bancaire</span><span>Montant</span><span>Pointé ?</span></div>
            <div class="bank-avant__row"><span>Vir. client — DUPONT SARL</span><span class="mono">1 250,00</span><span class="ok">✓</span></div>
            <div class="bank-avant__row bank-avant__row--warn"><span>Prlvt — fournisseur ?</span><span class="mono bad">−380,40</span><span class="blink">?</span></div>
            <div class="bank-avant__row bank-avant__row--muted"><span>Frais bancaires</span><span class="mono">−12,90</span><span>○</span></div>
            <div class="bank-avant__warning"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.9L2.6 17.5a1.6 1.6 0 0 0 1.4 2.4h16a1.6 1.6 0 0 0 1.4-2.4L13.7 3.9a1.6 1.6 0 0 0-2.8 0z"></path><path d="M12 9v4M12 17h.01"></path></svg></span> Pointage ligne à ligne · écarts repérés trop tard</div>
          </div>
        </div>
        <div class="bank-avant__cost">
          <div class="bank-avant__cost-label">Le coût caché</div>
          <div class="bank-avant__cost-item"><div class="bank-avant__cost-value">~5 h</div><div class="bank-avant__cost-sub">de pointage chaque mois</div></div>
          <div class="bank-avant__cost-item"><div class="bank-avant__cost-value">Écarts</div><div class="bank-avant__cost-sub">détectés trop tard</div></div>
          <div class="bank-avant__cost-item"><div class="bank-avant__cost-value">Clôture</div><div class="bank-avant__cost-sub">retardée en fin de mois</div></div>
        </div>
      </div>
    </div>

    <div class="bank-compare__panel" data-ba-panel="apres">
      <div class="grid bank-apres">
        <div class="mockup mockup--navy bank-apres__mockup">
          <div class="mockup__titlebar">
            <div class="mockup__dots"><span></span><span></span><span></span></div>
            <span class="mockup__filename">Rapprochement automatisé — Make + IA</span>
            <span class="bank-apres__timer"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg> quasi 0</span>
          </div>
          <div class="bank-apres__body">
            <div class="bank-apres__row bank-apres__row--head"><span>Opération bancaire</span><span>Montant</span><span>Statut</span></div>
            <div class="bank-apres__row bank-apres__row--ok"><span>Vir. client — DUPONT SARL</span><span class="mono">1 250,00</span><span class="ok">✓</span></div>
            <div class="bank-apres__row bank-apres__row--flag"><span>Prlvt — DOUBLON signalé</span><span class="mono">−380,40</span><span class="flag">⚑ anomalie</span></div>
            <div class="bank-apres__row bank-apres__row--ok"><span>Frais bancaires</span><span class="mono">−12,90</span><span class="ok">✓</span></div>
            <div class="bank-apres__validated"><span class="bank-apres__validated-badge">✓ Rapprochement validé</span><span class="bank-apres__validated-note">2 lignes pointées · 1 anomalie remontée</span></div>
          </div>
        </div>
        <div class="bank-apres__gains">
          <div class="bank-apres__gains-label">Après automatisation</div>
          <div class="bank-apres__gain-item"><span class="bank-apres__gain-check">✓</span><span>Quelques minutes au lieu de plusieurs heures</span></div>
          <div class="bank-apres__gain-item"><span class="bank-apres__gain-check">✓</span><span>Anomalies détectées automatiquement</span></div>
          <div class="bank-apres__gain-item"><span class="bank-apres__gain-check">✓</span><span>Clôture plus rapide</span></div>
          <div class="bank-apres__gain-item"><span class="bank-apres__gain-check">✓</span><span>Données toujours à jour</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- flux logiciel visible — email → IA → CRM -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Le flux, en clair</span>
      <h2>De la boîte mail au CRM, sans ressaisie</h2>
      <p style="font-size:17px;line-height:1.6;color:var(--text-2);max-width:620px;margin:0 auto;">Aucun prospect oublié. Chaque demande reçue devient automatiquement une action commerciale.</p>
    </div>
    <div class="flow-diagram">

      <div class="card flow-panel">
        <div class="flow-panel__head"><span class="flow-panel__icon flow-panel__icon--navy"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h4l2 3h4l2-3h4"></path><path d="M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6"></path><path d="M4 12l2-7h12l2 7"></path></svg></span><span class="flow-panel__title">Boîte de réception</span></div>
        <div class="flow-panel__body">
          <div class="flow-inbox__row"><span class="flow-inbox__dot"></span><div class="flow-inbox__text"><div class="flow-inbox__subject">Newsletter — secteur</div></div></div>
          <div class="flow-inbox__row flow-inbox__row--highlight"><span class="flow-inbox__dot flow-inbox__dot--orange"></span><div class="flow-inbox__text"><div class="flow-inbox__subject flow-inbox__subject--strong">Demande de devis</div><div class="flow-inbox__meta">DUPONT SARL · prospect</div></div></div>
          <div class="flow-inbox__row"><span class="flow-inbox__dot"></span><div class="flow-inbox__text"><div class="flow-inbox__subject">RH — note interne</div></div></div>
        </div>
      </div>

      <div class="flow-connector"><span class="flow-connector__line"></span><span class="flow-connector__arrow">▶</span></div>

      <div class="flow-panel flow-panel--navy">
        <div class="flow-panel__head"><span class="flow-panel__icon flow-panel__icon--orange"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="8" width="16" height="11" rx="3"></rect><circle cx="9" cy="13.5" r="1.2"></circle><circle cx="15" cy="13.5" r="1.2"></circle><path d="M12 8V4M9 4h6"></path></svg></span><span class="flow-panel__title flow-panel__title--on-dark">Lecture IA</span><span class="flow-panel__dots">●●●</span></div>
        <div class="flow-ia__body">
          <div class="flow-ia__row"><span class="flow-ia__key">expéditeur</span><span class="flow-ia__val">DUPONT SARL ✓</span></div>
          <div class="flow-ia__row"><span class="flow-ia__key">catégorie</span><span class="flow-ia__val">Commercial ✓</span></div>
          <div class="flow-ia__row"><span class="flow-ia__key">priorité</span><span class="flow-ia__val">Haute ✓</span></div>
          <div class="flow-ia__row"><span class="flow-ia__key">action</span><span class="flow-ia__val flow-ia__val--action">→ créer fiche CRM ✓</span></div>
        </div>
      </div>

      <div class="flow-connector"><span class="flow-connector__line"></span><span class="flow-connector__arrow">▶</span></div>

      <div class="card flow-panel">
        <div class="flow-panel__head"><span class="flow-panel__icon flow-panel__icon--green"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path></svg></span><span class="flow-panel__title">CRM — Nouvelle fiche</span></div>
        <div class="flow-crm__body">
          <div class="flow-crm__row flow-crm__row--border"><span>Contact</span><span class="flow-crm__strong">DUPONT SARL</span></div>
          <div class="flow-crm__row"><span>Type</span><span class="flow-crm__val">Demande de devis</span></div>
          <div class="flow-crm__row"><span>Tâche</span><span class="flow-crm__val">Rappeler sous 48 h</span></div>
          <div class="flow-crm__done"><span>✓</span> fiche créée &amp; assignée</div>
        </div>
      </div>

    </div>
    <div class="flow-diagram__footnote"><span class="mono-label">Make · n8n · Python · lecture IA</span> — vos outils existants, connectés. Pas de logiciel à remplacer.</div>
  </section>

  <!-- méthodologie & déroulement d'un projet -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Méthodologie</span>
      <h2 style="max-width:720px;margin:0 auto;">Comment se déroule concrètement un projet d'automatisation</h2>
    </div>
    <div class="grid grid-4 audit-steps">
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">1</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Audit &amp; cartographie.</strong> On liste vos tâches les plus chronophages et on estime le gain de temps réaliste de chacune.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">2</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Conception &amp; devis.</strong> Vous recevez un plan d'action priorisé et un chiffrage clair, avant tout engagement.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">3</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Construction &amp; tests.</strong> Le scénario est développé puis testé sur vos cas réels, exceptions comprises, avant mise en production.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">4</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Livraison &amp; autonomie.</strong> Documentation complète, prise en main de vos équipes, puis mesure du temps réellement récupéré.</p>
      </div>
    </div>
    <div class="differentiators__intro" style="margin-top:44px;">
      <h2 style="font-size:26px;">Les technologies utilisées, sans jargon inutile</h2>
      <p style="margin-bottom:12px;">Techniquement, la quasi-totalité des projets s'appuient sur trois briques : <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> ou <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a> pour orchestrer les échanges entre vos logiciels, Python pour les traitements sur mesure quand un connecteur standard ne suffit pas, et des modèles de langage pour la <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">lecture et la compréhension</a> de documents non structurés : emails, <a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">PDF</a>, ou scans traités par <a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">OCR</a>. Le choix entre ces briques n'est jamais fait par préférence technologique : il dépend uniquement de <strong>ce qui rend votre automatisation la plus fiable</strong> et la plus simple à maintenir dans la durée.</p>
      <p>Un principe reste constant sur chaque projet : <strong>ces technologies s'ajoutent à vos outils existants, elles ne les remplacent pas</strong>. Vous continuez à utiliser <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a>, <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>">Outlook</a>, votre <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">CRM</a> ou votre <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">logiciel comptable</a> exactement comme avant.</p>
    </div>
  </section>

  <!-- case band (navy) — onboarding RH -->
  <section class="case-band">
    <div class="case-band__inner">
      <div>
        <span class="case-band__tag">Cas concret · PME de services, 25 salariés</span>
        <h2 class="case-band__title">L'arrivée d'un nouveau salarié préparée en 2 heures au lieu de 2 jours</h2>
        <p class="case-band__desc">Dès qu'une embauche est validée, le contrat est généré, les accès créés et le dossier d'accueil constitué automatiquement — sans oubli, prêt pour le premier jour.</p>
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn-text">Voir les réalisations →</a>
      </div>
      <div class="grid grid-2 case-band__stats">
        <div class="case-band__stat"><div class="case-band__stat-value">2 j → 2 h</div><div class="case-band__stat-label">pour préparer une arrivée</div></div>
        <div class="case-band__stat"><div class="case-band__stat-value">0</div><div class="case-band__stat-label">oubli d'accès ou de document</div></div>
        <div class="case-band__stat"><div class="case-band__stat-value">100%</div><div class="case-band__stat-label">dossiers conformes</div></div>
        <div class="case-band__stat"><div class="case-band__stat-value">2 sem</div><div class="case-band__stat-label">pour la mise en place</div></div>
      </div>
    </div>
  </section>

  <!-- value props -->
  <section class="section">
    <div class="grid grid-3 value-props__grid">
      <div class="value-prop">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
        <h3 class="value-prop__title">Du temps récupéré</h3>
        <p class="value-prop__desc">Des heures rendues chaque semaine à vous et vos équipes, sur les tâches sans valeur ajoutée.</p>
      </div>
      <div class="value-prop">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M8.5 12.3l2.3 2.3 4.7-5"></path></svg></div>
        <h3 class="value-prop__title">Moins d'erreurs</h3>
        <p class="value-prop__desc">Des processus fiables, traçables et conformes, qui tournent sans oubli ni double-saisie.</p>
      </div>
      <div class="value-prop">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <h3 class="value-prop__title">Sur-mesure &amp; maîtrisé</h3>
        <p class="value-prop__desc">Des solutions documentées, adaptées à vos outils, que vous conservez et gardez sous contrôle.</p>
      </div>
    </div>
  </section>

  <!-- tarifs -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Tarifs</span>
      <h2 style="max-width:680px;margin:0 auto;">Combien coûte une automatisation ?</h2>
    </div>
    <div class="grid grid-4 pricing__grid">

      <div class="pricing__card">
        <div class="pricing__name">Audit gratuit</div>
        <div class="pricing__tagline">Le point de départ</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>45 minutes</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Sans engagement</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Identification des gains potentiels</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">Tarif</div>
          <div class="pricing__price pricing__price--free">Gratuit</div>
        </div>
      </div>

      <div class="pricing__card">
        <div class="pricing__name">Quick Win</div>
        <div class="pricing__tagline">Une automatisation ciblée</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>Une automatisation ciblée</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Mise en place rapide</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>ROI immédiat</div>
          <div class="pricing__feature"><span class="pricing__check pricing__check--duration"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></span>Déploiement : 1 à 2 semaines</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">À partir de</div>
          <div class="pricing__price">800 €</div>
        </div>
      </div>

      <div class="pricing__card pricing__card--featured">
        <span class="pricing__ribbon">Recommandé</span>
        <div class="pricing__name">Automatisation métier</div>
        <div class="pricing__tagline">Un service complet automatisé</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>CRM</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>RH</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Comptabilité</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Reporting</div>
          <div class="pricing__feature"><span class="pricing__check pricing__check--duration"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></span>Déploiement : 2 à 4 semaines</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">À partir de</div>
          <div class="pricing__price">1 500 €</div>
        </div>
      </div>

      <div class="pricing__card">
        <div class="pricing__name">Projet sur mesure</div>
        <div class="pricing__tagline">Processus complexes &amp; IA avancée</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>Plusieurs logiciels</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>IA avancée</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Processus complexes</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">Tarification</div>
          <div class="pricing__price">Sur devis</div>
        </div>
      </div>

    </div>
    <p class="pricing__footnote">Chaque projet est chiffré après audit. Les coûts dépendent de vos outils et de vos processus.</p>
    <div class="text-center">
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary pricing__cta">Demander un audit gratuit <span aria-hidden="true">→</span></a>
    </div>
  </section>

  <!-- comment se déroule l'audit -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">L'audit gratuit</span>
      <h2>Comment se déroule l'audit</h2>
      <div class="audit-highlights">
        <span class="badge-pill badge-pill--orange">✓ 45 minutes</span>
        <span class="badge-pill badge-pill--orange">✓ Sans engagement</span>
        <span class="badge-pill badge-pill--orange">✓ Audit gratuit</span>
      </div>
    </div>
    <div class="grid grid-4 audit-steps">
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">1</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text">Vous me présentez vos tâches répétitives.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">2</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text">J'identifie les automatisations les plus rentables.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">3</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text">Vous recevez des pistes concrètes et chiffrées.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">4</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text">Vous décidez librement de la suite.</p>
      </div>
    </div>
    <div class="audit-why">
      <span class="audit-why__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3.5v5c0 5-3.4 8.4-8 9.5-4.6-1.1-8-4.5-8-9.5v-5z"></path><path d="M9 12l2 2 4-4"></path></svg></span>
      <div>
        <h3 style="font-size:21px;margin-bottom:12px;">Pourquoi l'audit est gratuit ?</h3>
        <p class="audit-why__text">L'objectif n'est pas de vendre une prestation à tout prix. Si je ne vois pas de gain concret ou de retour sur investissement réaliste, je vous le dirai immédiatement.</p>
        <p class="audit-why__text">Vous repartez dans tous les cas avec des pistes d'amélioration exploitables.</p>
      </div>
    </div>
    <div class="text-center">
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary audit-steps__cta">Réserver mon audit gratuit <span>→</span></a>
    </div>
  </section>

  <!-- objections / FAQ -->
  <section class="section" style="padding:50px 40px 20px;">
    <div class="section-head" style="margin-bottom:40px;">
      <span class="eyebrow">Questions fréquentes</span>
      <h2 style="font-size:34px;max-width:680px;margin:0 auto;line-height:1.15;">Les questions — et objections — que l'on me pose le plus souvent</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>« On n'a pas les moyens d'automatiser » — est-ce vraiment le cas ?</h3>
        <p>Une première automatisation démarre autour de 800€ et se rentabilise souvent en quelques semaines sur le temps récupéré. L'audit gratuit sert précisément à vérifier ce calcul avant tout engagement.</p>
      </div>
      <div class="faq-item">
        <h3>« On va perdre le contrôle sur nos données » — qu'en est-il réellement ?</h3>
        <p>L'automatisation s'appuie sur vos outils existants et leurs propres garanties de sécurité. Aucune donnée n'est revendue ni exposée à un tiers non prévu dans votre chaîne d'outils, dans le respect du RGPD.</p>
      </div>
      <div class="faq-item">
        <h3>« Nos process sont trop spécifiques pour être automatisés » — vraiment ?</h3>
        <p>C'est l'objection la plus courante, et la moins souvent vérifiée. La majorité des process « spécifiques » se décomposent en étapes standards (recevoir, vérifier, transmettre, relancer) parfaitement automatisables. L'audit permet de le vérifier sur votre cas précis.</p>
      </div>
      <div class="faq-item">
        <h3>« On n'a pas de service informatique » — est-ce un frein ?</h3>
        <p>Non. C'est justement le principe : chaque automatisation est conçue, déployée et documentée pour être utilisée sans aucune compétence technique de votre part.</p>
      </div>
      <div class="faq-item">
        <h3>Combien de temps pour mettre en place une automatisation ?</h3>
        <p>Les premiers résultats arrivent souvent en quelques jours à quelques semaines, selon la complexité du processus.</p>
      </div>
      <div class="faq-item">
        <h3>Mes données sont-elles en sécurité ?</h3>
        <p>Oui. Je travaille dans le respect du RGPD, sur vos propres outils, sans revente ni exposition de vos données.</p>
      </div>
      <div class="faq-item">
        <h3>Faut-il changer de logiciels ?</h3>
        <p>Non. Je m'appuie sur vos outils existants — Sage, Qonto, Excel, Outlook… — et je les connecte entre eux.</p>
      </div>
      <div class="faq-item">
        <h3>Et si je veux internaliser plus tard ?</h3>
        <p>Tout est documenté et vous appartient. Vous restez parfaitement autonome, sans dépendance à moi.</p>
      </div>
      <div class="faq-item">
        <h3>Combien coûte une automatisation ?</h3>
        <p>Chaque projet est différent. Certaines automatisations simples démarrent autour de 800 €, tandis que les projets plus complets font l'objet d'un devis après audit.</p>
      </div>
      <div class="faq-item">
        <h3>Ai-je besoin d'une équipe informatique ?</h3>
        <p>Non. Je m'occupe de la conception, du déploiement et de la documentation. Vous utilisez simplement les résultats.</p>
      </div>
      <div class="faq-item">
        <h3>Pourquoi un consultant indépendant plutôt qu'une agence ?</h3>
        <p>Un seul interlocuteur du premier audit à la mise en production, des coûts sans structure commerciale à financer, et une expertise gestion/comptabilité qui aide à cibler les automatisations vraiment rentables. Le détail de cette comparaison est développé sur la page <a href="<?php echo esc_url( eb_url('agence-ia') ); ?>">agence IA vs consultant indépendant</a>.</p>
      </div>
      <div class="faq-item">
        <h3>Que se passe-t-il si l'audit ne révèle aucun gain intéressant ?</h3>
        <p>Je vous le dis franchement. L'objectif n'est pas de vendre une prestation à tout prix : si le retour sur investissement n'est pas au rendez-vous, vous repartez simplement avec des pistes d'amélioration, sans obligation d'achat.</p>
      </div>
    </div>
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
    <div class="profile-quote">
      <p>Je ne suis pas seulement un spécialiste de l'automatisation. Je suis <span class="profile-quote__accent">un professionnel de la gestion qui automatise ce qu'il maîtrise déjà.</span></p>
    </div>
    <p class="text-center" style="margin-top:18px;"><a href="<?php echo esc_url( eb_url('apropos') ); ?>" class="btn-text">Découvrir mon parcours et ma méthode →</a></p>
  </section>

  <!-- final CTA -->
  <section class="section final-cta-section">
    <div class="final-cta-card">
      <h2 style="max-width:760px;margin:0 auto 14px;">45 minutes pour identifier plusieurs heures gagnées chaque semaine</h2>
      <p class="final-cta-card__desc">Audit gratuit, sans engagement. Repartez avec des pistes concrètes et chiffrées.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary final-cta-card__cta">Identifier vos automatisations rentables <span>→</span></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
