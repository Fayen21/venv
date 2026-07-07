<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Solutions
 */
?>
<?php get_header(); ?>
<main id="main">

  <!-- hero -->
  <div class="hero-left">
    <div class="eyebrow hero-left__eyebrow">Solutions</div>
    <h1>Connectez vos logiciels et supprimez les tâches répétitives</h1>
    <p>Je connecte les outils que vous utilisez déjà (Outlook, Excel, Sage, Qonto, CRM, logiciels RH…) afin d'éliminer les ressaisies, les oublis et les tâches chronophages. Aucun logiciel à remplacer.</p>
  </div>

  <!-- pourquoi mon approche est différente -->
  <section class="section">
    <div class="differentiators__intro">
      <h2>Pourquoi mon approche est différente</h2>
      <p style="margin-bottom:12px;">La plupart des consultants automatisent des processus qu'ils découvrent en même temps que vous.</p>
      <p>Mon approche est différente : je m'appuie sur une expérience concrète des fonctions administratives, comptables et RH pour identifier rapidement les automatisations réellement rentables.</p>
    </div>
    <div class="grid grid-3">
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
        <h3>Expertise gestion &amp; comptabilité</h3>
        <p>Je comprends les processus administratifs, financiers et comptables avant de les automatiser.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <h3>Solutions sur mesure</h3>
        <p>Chaque automatisation est adaptée à vos outils et à votre fonctionnement.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
        <h3>Vous restez propriétaire</h3>
        <p>Documentation, accès et scénarios vous appartiennent.</p>
      </div>
    </div>
  </section>

  <!-- hub des expertises -->
  <section class="section" style="padding-top:10px;">
    <div class="section-head" style="margin-bottom:32px;">
      <span class="eyebrow">Nos domaines d'expertise</span>
      <h2 style="font-size:30px;">Cinq entrées pour approfondir un sujet précis</h2>
    </div>
    <div class="expertise-hub">
      <a class="expertise-hub__card" href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">
        <span class="expertise-hub__label">Automatisation IA</span>
        <span class="expertise-hub__desc">Ce que l'IA change concrètement dans vos tâches administratives.</span>
        <span class="expertise-hub__more">En savoir plus →</span>
      </a>
      <a class="expertise-hub__card" href="<?php echo esc_url( eb_url('agence-ia') ); ?>">
        <span class="expertise-hub__label">Agence IA vs consultant indépendant</span>
        <span class="expertise-hub__desc">Comprendre les options avant de choisir un prestataire.</span>
        <span class="expertise-hub__more">En savoir plus →</span>
      </a>
      <a class="expertise-hub__card" href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>">
        <span class="expertise-hub__label">Automatisation entreprise</span>
        <span class="expertise-hub__desc">Par où commencer et comment prioriser service par service.</span>
        <span class="expertise-hub__more">En savoir plus →</span>
      </a>
      <a class="expertise-hub__card" href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>">
        <span class="expertise-hub__label">Automatisation des processus</span>
        <span class="expertise-hub__desc">Cartographier et orchestrer un enchaînement complet.</span>
        <span class="expertise-hub__more">En savoir plus →</span>
      </a>
      <a class="expertise-hub__card" href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>">
        <span class="expertise-hub__label">Automatisation des tâches</span>
        <span class="expertise-hub__desc">Les premiers gains rapides et faciles à mesurer.</span>
        <span class="expertise-hub__more">En savoir plus →</span>
      </a>
    </div>
  </section>

  <!-- trust strip -->
  <section class="section" style="padding:0 40px 10px;">
    <div class="trust-strip">
      <div class="trust-strip__item">
        <span class="trust-strip__icon" style="background:var(--orange-soft-bg);color:var(--orange);"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><circle cx="12" cy="12" r="3"></circle><circle cx="12" cy="12" r="7.2"></circle><path d="M12 3v2.4M12 18.6V21M21 12h-2.4M5.4 12H3M18.4 5.6l-1.7 1.7M7.3 16.7l-1.7 1.7M18.4 18.4l-1.7-1.7M7.3 7.3L5.6 5.6"></path></svg></span>
        <div><div class="trust-strip__title">Sur vos outils existants</div><div class="trust-strip__desc">Aucun logiciel à remplacer.</div></div>
      </div>
      <div class="trust-strip__item">
        <span class="trust-strip__icon" style="background:var(--green-bg);color:var(--green);"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M8.5 12.3l2.3 2.3 4.7-5"></path></svg></span>
        <div><div class="trust-strip__title">Sans engagement</div><div class="trust-strip__desc">L'audit est gratuit, vous décidez ensuite.</div></div>
      </div>
      <div class="trust-strip__item">
        <span class="trust-strip__icon" style="background:#EEF1F7;color:var(--navy);"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></span>
        <div><div class="trust-strip__title">Vous restez propriétaire</div><div class="trust-strip__desc">Tout est documenté et conforme RGPD.</div></div>
      </div>
    </div>
  </section>

  <!-- solutions détaillées -->
  <section class="section" style="padding:14px 40px 30px;">

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#EEF1F7;color:#3C4A60;">01</div>
      <div>
        <h2>Tâches administratives répétitives</h2>
        <p class="solution-row__desc">Emails, fichiers Excel, PDF, saisies manuelles : je supprime les manipulations qui vous coûtent des heures chaque semaine.</p>
        <div class="solution-row__tags">
          <span class="solution-row__tag">Emails</span><span class="solution-row__tag">Excel</span><span class="solution-row__tag">PDF</span><span class="solution-row__tag">OCR</span>
        </div>
        <div class="solution-row__examples">
          <div class="solution-row__example"><span>✓</span>Tri et classement automatique des emails et pièces jointes</div>
          <div class="solution-row__example"><span>✓</span>Extraction de données depuis des PDF</div>
          <div class="solution-row__example"><span>✓</span>Génération de documents pré-remplis</div>
        </div>
        <div class="solution-row__transition">
          <span class="solution-row__before">Avant · Saisies manuelles à répétition</span>
          <span class="solution-row__arrow">→</span>
          <span class="solution-row__after">Après · Données extraites automatiquement</span>
        </div>
        <div class="solution-row__gain">
          <span class="solution-row__gain-icon">↑</span>
          <span class="solution-row__gain-text">≈ 5 à 10 heures récupérées chaque semaine</span>
        </div>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
          <span class="solution-row__mock-file">classement_auto · n8n</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5e6f8c;"></span><span class="solution-row__mock-label">Email + pièce jointe reçus</span><span class="solution-row__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">détecté</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#3BA5FF;"></span><span class="solution-row__mock-label">Données extraites du PDF</span><span class="solution-row__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">12 champs</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Document renommé &amp; classé</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">dossier ✓</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#E5F3EF;color:#1E8A6E;">02</div>
      <div>
        <h2>Comptabilité &amp; finance</h2>
        <p class="solution-row__desc">Rapprochements bancaires, contrôles de cohérence, suivi des paiements : des flux fiables, traçables et prêts pour votre comptable.</p>
        <div class="solution-row__tags">
          <span class="solution-row__tag">Rapprochement</span><span class="solution-row__tag">Qonto</span><span class="solution-row__tag">Sage</span><span class="solution-row__tag">Relances</span>
        </div>
        <div class="solution-row__examples">
          <div class="solution-row__example"><span>✓</span>Rapprochement bancaire Qonto ↔ comptabilité</div>
          <div class="solution-row__example"><span>✓</span>Relances clients automatisées</div>
          <div class="solution-row__example"><span>✓</span>Alertes sur écarts et anomalies</div>
        </div>
        <div class="solution-row__transition">
          <span class="solution-row__before">Avant · ~5 h de pointage / mois</span>
          <span class="solution-row__arrow">→</span>
          <span class="solution-row__after">Après · Rapprochement automatique</span>
        </div>
        <div class="solution-row__gain">
          <span class="solution-row__gain-icon">↑</span>
          <span class="solution-row__gain-text">≈ 1 journée de travail économisée chaque mois</span>
        </div>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
          <span class="solution-row__mock-file">rapprochement · Make</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5e6f8c;"></span><span class="solution-row__mock-label">Opérations Qonto importées</span><span class="solution-row__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">48 lignes</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Pointage automatique</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">46 ✓</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#3BA5FF;"></span><span class="solution-row__mock-label">Écart détecté &amp; signalé</span><span class="solution-row__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">1 ⚑</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#EFEAFB;color:#6E4FCB;">03</div>
      <div>
        <h2>RH &amp; paie</h2>
        <p class="solution-row__desc">Onboarding, génération de contrats, suivi des salariés et préparation de paie, automatisés et conformes.</p>
        <div class="solution-row__tags">
          <span class="solution-row__tag">Onboarding</span><span class="solution-row__tag">Contrats</span><span class="solution-row__tag">Paie</span><span class="solution-row__tag">RGPD</span>
        </div>
        <div class="solution-row__examples">
          <div class="solution-row__example"><span>✓</span>Onboarding RH : contrat, accès et dossier en un clic</div>
          <div class="solution-row__example"><span>✓</span>Suivi des congés et des échéances</div>
          <div class="solution-row__example"><span>✓</span>Préparation des variables de paie</div>
        </div>
        <div class="solution-row__transition">
          <span class="solution-row__before">Avant · 2 jours par embauche</span>
          <span class="solution-row__arrow">→</span>
          <span class="solution-row__after">Après · Dossier prêt en 2 h</span>
        </div>
        <div class="solution-row__gain">
          <span class="solution-row__gain-icon">↑</span>
          <span class="solution-row__gain-text">≈ 2 heures gagnées à chaque embauche</span>
        </div>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
          <span class="solution-row__mock-file">onboarding_rh · Make</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5e6f8c;"></span><span class="solution-row__mock-label">Embauche validée</span><span class="solution-row__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">OK</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#3BA5FF;"></span><span class="solution-row__mock-label">Contrat généré par l'IA</span><span class="solution-row__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">PDF</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Accès &amp; dossier créés</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">prêt ✓</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#E7EFFC;color:#2C5FC7;">04</div>
      <div>
        <h2>Intégration de vos logiciels</h2>
        <p class="solution-row__desc">Je connecte vos outils — Qonto, Outlook, Excel, Sage, Notion — pour que vos données circulent sans ressaisie.</p>
        <div class="solution-row__tags">
          <span class="solution-row__tag">Make</span><span class="solution-row__tag">n8n</span><span class="solution-row__tag">API</span><span class="solution-row__tag">Python</span>
        </div>
        <div class="solution-row__examples">
          <div class="solution-row__example"><span>✓</span>Synchronisation entre vos logiciels métier</div>
          <div class="solution-row__example"><span>✓</span>Connexions via API sur-mesure</div>
          <div class="solution-row__example"><span>✓</span>Tableaux de bord consolidés automatiquement</div>
        </div>
        <div class="solution-row__transition">
          <span class="solution-row__before">Avant · Ressaisies entre logiciels</span>
          <span class="solution-row__arrow">→</span>
          <span class="solution-row__after">Après · Données synchronisées</span>
        </div>
        <div class="solution-row__gain">
          <span class="solution-row__gain-icon">↑</span>
          <span class="solution-row__gain-text">0 ressaisie entre les outils connectés</span>
        </div>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
          <span class="solution-row__mock-file">connecteurs · API</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Qonto ↔ Sage</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">synchronisé</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Outlook ↔ Notion</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">synchronisé</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Tableau de bord consolidé</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">à jour ✓</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#FBEBE0;color:#C3672B;">05</div>
      <div>
        <h2>Agents IA internes</h2>
        <p class="solution-row__desc">Un assistant qui répond aux questions de vos équipes à partir de vos propres procédures et documents internes.</p>
        <div class="solution-row__tags">
          <span class="solution-row__tag">Assistant IA</span><span class="solution-row__tag">Procédures</span><span class="solution-row__tag">Recherche</span>
        </div>
        <div class="solution-row__examples">
          <div class="solution-row__example"><span>✓</span>Réponses instantanées sur vos process internes</div>
          <div class="solution-row__example"><span>✓</span>Recherche dans vos documents</div>
          <div class="solution-row__example"><span>✓</span>Rédaction assistée d'emails et comptes-rendus</div>
        </div>
        <div class="solution-row__transition">
          <span class="solution-row__before">Avant · Réponses cherchées partout</span>
          <span class="solution-row__arrow">→</span>
          <span class="solution-row__after">Après · Réponse sourcée instantanée</span>
        </div>
        <div class="solution-row__gain">
          <span class="solution-row__gain-icon">↑</span>
          <span class="solution-row__gain-text">Réponses en quelques secondes au lieu de plusieurs minutes</span>
        </div>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
          <span class="solution-row__mock-file">assistant_interne · IA</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5e6f8c;"></span><span class="solution-row__mock-label">Question d'un collaborateur</span><span class="solution-row__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">« congés ? »</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#3BA5FF;"></span><span class="solution-row__mock-label">Recherche dans vos documents</span><span class="solution-row__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">3 sources</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot" style="background:#5BCB8B;"></span><span class="solution-row__mock-label">Réponse sourcée renvoyée</span><span class="solution-row__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">citée ✓</span></div>
        </div>
      </div>
    </div>

  </section>

  <!-- méthode -->
  <section class="section" style="padding:50px 40px 24px;">
    <div class="section-head" style="margin-bottom:46px;">
      <span class="eyebrow">Méthode</span>
      <h2>De l'idée à l'automatisation, en 4 étapes</h2>
    </div>
    <div class="grid grid-4">
      <div class="method-step">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
          <span class="method-step__num">1</span><span class="method-step__rule"></span>
        </div>
        <h3>Audit gratuit</h3>
        <p>On identifie ensemble les tâches à plus fort potentiel. 45 min, sans engagement.</p>
      </div>
      <div class="method-step">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
          <span class="method-step__num">2</span><span class="method-step__rule"></span>
        </div>
        <h3>Plan d'action</h3>
        <p>Vous recevez un plan clair : quoi automatiser, dans quel ordre, pour quel gain.</p>
      </div>
      <div class="method-step">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
          <span class="method-step__num">3</span><span class="method-step__rule"></span>
        </div>
        <h3>Mise en place</h3>
        <p>Je développe et installe les automatisations, testées sur vos cas réels.</p>
      </div>
      <div class="method-step">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
          <span class="method-step__num">4</span><span class="method-step__rule"></span>
        </div>
        <h3>Autonomie &amp; suivi</h3>
        <p>Documentation, prise en main et suivi. Vous gardez le contrôle.</p>
      </div>
    </div>
  </section>

  <!-- bandeau outils -->
  <section class="section" style="padding:40px 40px 10px;">
    <div class="tools-band">
      <div>
        <h2>Je connecte les outils que vous utilisez déjà</h2>
        <p>Vos données circulent entre vos logiciels, sans ressaisie et sans migration. Côté technique, je m'appuie sur des outils éprouvés.</p>
      </div>
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
  </section>

  <!-- FAQ -->
  <section class="section" style="padding:70px 40px 20px;">
    <div class="section-head" style="margin-bottom:40px;">
      <span class="eyebrow">Questions fréquentes</span>
      <h2 style="font-size:34px;max-width:620px;margin:0 auto;line-height:1.15;">Ce que les dirigeants me demandent</h2>
    </div>
    <div class="faq-grid">
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
    </div>
  </section>

  <!-- CTA final -->
  <section class="section final-cta-section">
    <div class="cta-dotted">
      <div class="cta-dotted__text">
        <h2>Vous perdez encore du temps sur des tâches répétitives ?</h2>
        <p>Audit gratuit de 45 minutes. Repartez avec des pistes d'automatisation concrètes et chiffrées pour votre entreprise.</p>
      </div>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
