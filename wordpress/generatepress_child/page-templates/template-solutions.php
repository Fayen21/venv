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
  <div class="eb-hero-fx eb-hero-fx--dim-halo">
  <?php eb_hero_fx( eb_hero_fx_effects()['solutions'] ); ?>
  <div class="hero-left">
    <div class="eyebrow hero-left__eyebrow">Solutions</div>
    <h1>Connectez vos logiciels et supprimez les tâches répétitives</h1>
    <p>Je connecte les outils que vous utilisez déjà (Outlook, Excel, Sage, Qonto, CRM, logiciels RH…) afin d'éliminer les ressaisies, les oublis et les tâches chronophages. Aucun logiciel à remplacer.</p>
    <div class="hero-left__actions">
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
    </div>
    <div class="hero-left__reassurance"><?php echo eb_reassurance_pill(); ?></div>
    <div class="hero-left__reviews"><?php echo eb_google_reviews_badge( true ); ?></div>
  </div>
  </div>

  <!-- pourquoi mon approche est différente -->
  <section class="section">
    <div class="differentiators__intro">
      <h2>Une approche différente de l'automatisation d'entreprise</h2>
      <p style="margin-bottom:12px;">La plupart des consultants automatisent des processus qu'ils découvrent en même temps que vous.</p>
      <p>Mon approche est différente : je m'appuie sur <strong>une expérience concrète des fonctions administratives, comptables et RH</strong> pour identifier rapidement les automatisations réellement rentables — avec des outils no-code et de l'intelligence artificielle quand elle apporte une vraie valeur, jamais par principe.</p>
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
      <h2 style="font-size:30px;">Trois piliers, une expertise par sujet précis</h2>
    </div>
    <div class="pillar-hub">

      <div class="pillar-hub__group">
        <a class="pillar-hub__main" href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>">
          <span class="pillar-hub__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"></rect><line x1="8" y1="7" x2="8" y2="7.01"></line><line x1="12" y1="7" x2="12" y2="7.01"></line><line x1="16" y1="7" x2="16" y2="7.01"></line><line x1="8" y1="11" x2="8" y2="11.01"></line><line x1="12" y1="11" x2="12" y2="11.01"></line><line x1="16" y1="11" x2="16" y2="11.01"></line><path d="M9 21v-4h6v4"></path></svg></span>
          <span class="pillar-hub__body">
            <span class="pillar-hub__title">Automatisation d'entreprise</span>
            <span class="pillar-hub__desc">Par où commencer et comment prioriser service par service.</span>
          </span>
          <span class="pillar-hub__arrow" aria-hidden="true">→</span>
        </a>
        <div class="pillar-hub__children">
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">Automatisation comptable</a>
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">Automatisation RH</a>
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">Automatisation CRM</a>
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('prospection-automatisee') ); ?>">Prospection automatisée</a>
        </div>
      </div>

      <div class="pillar-hub__group">
        <a class="pillar-hub__main" href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>">
          <span class="pillar-hub__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="5" cy="12" r="2.4"></circle><circle cx="19" cy="6" r="2.4"></circle><circle cx="19" cy="18" r="2.4"></circle><path d="M7.2 11.2L16.8 6.9"></path><path d="M7.2 12.8L16.8 17.1"></path></svg></span>
          <span class="pillar-hub__body">
            <span class="pillar-hub__title">Automatisation des processus</span>
            <span class="pillar-hub__desc">Cartographier et orchestrer un enchaînement complet.</span>
          </span>
          <span class="pillar-hub__arrow" aria-hidden="true">→</span>
        </a>
        <div class="pillar-hub__children">
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>">Automatisation des tâches</a>
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('rpa') ); ?>">RPA</a>
        </div>
      </div>

      <div class="pillar-hub__group">
        <a class="pillar-hub__main" href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">
          <span class="pillar-hub__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3z"></path><path d="M19 15l.7 2 2 .7-2 .7-.7 2-.7-2-2-.7 2-.7.7-2z"></path></svg></span>
          <span class="pillar-hub__body">
            <span class="pillar-hub__title">Automatisation IA</span>
            <span class="pillar-hub__desc">Ce que l'IA change concrètement dans vos tâches administratives.</span>
          </span>
          <span class="pillar-hub__arrow" aria-hidden="true">→</span>
        </a>
        <div class="pillar-hub__children">
          <a class="pillar-hub__child" href="<?php echo esc_url( eb_url('agence-ia') ); ?>">Agence IA vs consultant indépendant</a>
        </div>
      </div>

    </div>
  </section>

  <!-- cluster outils & plateformes -->
  <section class="section" style="padding-top:6px;">
    <div class="section-head" style="margin-bottom:32px;">
      <span class="eyebrow">Outils &amp; plateformes</span>
      <h2 style="font-size:28px;">Les outils que je connecte le plus souvent, expliqués un par un</h2>
      <p style="font-size:16px;line-height:1.6;color:var(--text-2);max-width:640px;margin:14px auto 0;">Au-delà des trois piliers, certains outils reviennent dans la quasi-totalité des projets. Voici comment je les automatise concrètement, outil par outil.</p>
    </div>
    <div class="grid grid-3">
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">
        <div class="icon-tile icon-tile--a"><?php echo eb_tool_icon_html('excel'); ?></div>
        <h3>Automatisation Excel</h3>
        <p>Fiabiliser vos tableurs sans les remplacer : reporting, extraction PDF, contrôles de cohérence automatiques.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>">
        <div class="icon-tile icon-tile--b"><?php echo eb_tool_icon_html('outlook'); ?></div>
        <h3>Automatisation Outlook</h3>
        <p>Trier, classer et traiter vos emails automatiquement, sans changer de messagerie ni d'habitude.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>">
        <div class="icon-tile icon-tile--a"><?php echo eb_tool_icon_html('microsoft365'); ?></div>
        <h3>Automatisation Microsoft 365</h3>
        <p>Connecter Outlook, Excel, Teams et SharePoint pour faire circuler l'information sans ressaisie.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('consultant-make') ); ?>">
        <div class="icon-tile icon-tile--b"><?php echo eb_tool_icon_html('make'); ?></div>
        <h3>Consultant Make</h3>
        <p>Scénarios d'automatisation no-code sur mesure : connexions fiables, gestion des erreurs, intégration IA.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">
        <div class="icon-tile icon-tile--a"><?php echo eb_tool_icon_html('n8n'); ?></div>
        <h3>Consultant n8n</h3>
        <p>Workflows open-source, hébergement maîtrisé et connexions API sur mesure pour les projets techniques.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">
        <div class="icon-tile icon-tile--b"><span class="tool-chip__abbr" style="background:#3776AB;color:#fff;display:inline-flex;">OC</span></div>
        <h3>Automatisation OCR</h3>
        <p>Lisez et exploitez automatiquement vos documents scannés ou photographiés, sans ressaisie.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">
        <div class="icon-tile icon-tile--a"><span class="tool-chip__abbr" style="background:#C3272B;color:#fff;display:inline-flex;">PDF</span></div>
        <h3>Extraction de données PDF</h3>
        <p>Devis, bons de commande, contrats : extrayez automatiquement les données de vos PDF natifs ou scannés.</p>
      </a>
      <a class="card differentiators__card" style="text-align:left;text-decoration:none;" href="<?php echo esc_url( eb_url('automatisation-facturation') ); ?>">
        <div class="icon-tile icon-tile--b"><span class="tool-chip__abbr" style="background:#1E8A6E;color:#fff;display:inline-flex;">€</span></div>
        <h3>Automatisation de la facturation</h3>
        <p>Du devis au paiement : génération, envoi, relances et rapprochement automatisés.</p>
      </a>
    </div>
  </section>

  <!-- trust strip -->
  <section class="section" style="padding:0 40px 10px;">
    <div class="trust-strip">
      <div class="trust-strip__item">
        <span class="trust-strip__icon trust-strip__icon--orange"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><circle cx="12" cy="12" r="3"></circle><circle cx="12" cy="12" r="7.2"></circle><path d="M12 3v2.4M12 18.6V21M21 12h-2.4M5.4 12H3M18.4 5.6l-1.7 1.7M7.3 16.7l-1.7 1.7M18.4 18.4l-1.7-1.7M7.3 7.3L5.6 5.6"></path></svg></span>
        <div><div class="trust-strip__title">Sur vos outils existants</div><div class="trust-strip__desc">Aucun logiciel à remplacer.</div></div>
      </div>
      <div class="trust-strip__item">
        <span class="trust-strip__icon trust-strip__icon--green"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M8.5 12.3l2.3 2.3 4.7-5"></path></svg></span>
        <div><div class="trust-strip__title">Sans engagement</div><div class="trust-strip__desc">L'audit est gratuit, vous décidez ensuite.</div></div>
      </div>
      <div class="trust-strip__item">
        <span class="trust-strip__icon trust-strip__icon--neutral"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></span>
        <div><div class="trust-strip__title">Vous restez propriétaire</div><div class="trust-strip__desc">Tout est documenté et conforme RGPD.</div></div>
      </div>
    </div>
  </section>

  <!-- avis clients -->
  <section class="section" style="padding:10px 40px;">
    <?php echo eb_mini_reviews_row_html( array( 0, 2 ) ); ?>
  </section>

  <!-- solutions détaillées -->
  <section class="section" style="padding:14px 40px 30px;">

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#EEF1F7;color:#3C4A60;">01</div>
      <div>
        <h2>Tâches administratives répétitives</h2>
        <p class="solution-row__desc">Emails, fichiers Excel, PDF, saisies manuelles : je supprime <strong>les manipulations qui vous coûtent des heures chaque semaine</strong>.</p>
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
        <a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>" class="btn-text" style="margin-top:16px;">Voir le détail de l'automatisation des tâches →</a>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span></span><span></span><span></span></div>
          <span class="solution-row__mock-file">classement_auto · n8n</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--neutral"></span><span class="solution-row__mock-label">Email + pièce jointe reçus</span><span class="solution-row__mock-val solution-row__mock-val--neutral">détecté</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--info"></span><span class="solution-row__mock-label">Données extraites du PDF</span><span class="solution-row__mock-val solution-row__mock-val--info">12 champs</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Document renommé &amp; classé</span><span class="solution-row__mock-val solution-row__mock-val--success">dossier ✓</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#E5F3EF;color:#1E8A6E;">02</div>
      <div>
        <h2>Comptabilité &amp; finance</h2>
        <p class="solution-row__desc">Rapprochements bancaires, contrôles de cohérence, suivi des paiements : <strong>des flux fiables, traçables et prêts pour votre comptable</strong>.</p>
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
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="btn-text" style="margin-top:16px;">Voir le détail de l'automatisation comptable →</a>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span></span><span></span><span></span></div>
          <span class="solution-row__mock-file">rapprochement · Make</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--neutral"></span><span class="solution-row__mock-label">Opérations Qonto importées</span><span class="solution-row__mock-val solution-row__mock-val--neutral">48 lignes</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Pointage automatique</span><span class="solution-row__mock-val solution-row__mock-val--success">46 ✓</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--info"></span><span class="solution-row__mock-label">Écart détecté &amp; signalé</span><span class="solution-row__mock-val solution-row__mock-val--info">1 ⚑</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#EFEAFB;color:#6E4FCB;">03</div>
      <div>
        <h2>RH &amp; paie</h2>
        <p class="solution-row__desc">Onboarding, génération de contrats, suivi des salariés et préparation de paie, <strong>automatisés et conformes</strong>.</p>
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
        <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="btn-text" style="margin-top:16px;">Voir le détail de l'automatisation RH →</a>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span></span><span></span><span></span></div>
          <span class="solution-row__mock-file">onboarding_rh · Make</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--neutral"></span><span class="solution-row__mock-label">Embauche validée</span><span class="solution-row__mock-val solution-row__mock-val--neutral">OK</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--info"></span><span class="solution-row__mock-label">Contrat généré par l'IA</span><span class="solution-row__mock-val solution-row__mock-val--info">PDF</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Accès &amp; dossier créés</span><span class="solution-row__mock-val solution-row__mock-val--success">prêt ✓</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#E7EFFC;color:#2C5FC7;">04</div>
      <div>
        <h2>Intégration de vos logiciels</h2>
        <p class="solution-row__desc">Je connecte vos outils — Qonto, Outlook, Excel, Sage, Notion — pour que <strong>vos données circulent sans ressaisie</strong>.</p>
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
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="btn-text" style="margin-top:16px;">Voir le détail de l'automatisation des processus →</a>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span></span><span></span><span></span></div>
          <span class="solution-row__mock-file">connecteurs · API</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Qonto ↔ Sage</span><span class="solution-row__mock-val solution-row__mock-val--success">synchronisé</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Outlook ↔ Notion</span><span class="solution-row__mock-val solution-row__mock-val--success">synchronisé</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Tableau de bord consolidé</span><span class="solution-row__mock-val solution-row__mock-val--success">à jour ✓</span></div>
        </div>
      </div>
    </div>

    <div class="solution-row">
      <div class="solution-row__badge" style="background:#FBEBE0;color:#C3672B;">05</div>
      <div>
        <h2>Agents IA internes</h2>
        <p class="solution-row__desc">Un assistant qui répond aux questions de vos équipes à partir de <strong>vos propres procédures et documents internes</strong>.</p>
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
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="btn-text" style="margin-top:16px;">Voir le détail de l'automatisation IA →</a>
      </div>
      <div class="solution-row__mock">
        <div class="solution-row__mock-titlebar">
          <div class="solution-row__mock-dots"><span></span><span></span><span></span></div>
          <span class="solution-row__mock-file">assistant_interne · IA</span>
          <span class="solution-row__mock-live"><span class="solution-row__mock-live-dot"></span>actif</span>
        </div>
        <div class="solution-row__mock-body">
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--neutral"></span><span class="solution-row__mock-label">Question d'un collaborateur</span><span class="solution-row__mock-val solution-row__mock-val--neutral">« congés ? »</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--info"></span><span class="solution-row__mock-label">Recherche dans vos documents</span><span class="solution-row__mock-val solution-row__mock-val--info">3 sources</span></div>
          <div class="solution-row__mock-row"><span class="solution-row__mock-dot solution-row__mock-dot--success"></span><span class="solution-row__mock-label">Réponse sourcée renvoyée</span><span class="solution-row__mock-val solution-row__mock-val--success">citée ✓</span></div>
        </div>
      </div>
    </div>

  </section>

  <!-- méthode -->
  <section class="section solutions-method">
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
      <?php echo eb_tool_compat_note( 'tools-band__note' ); ?>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" style="padding:50px 40px 20px;">
    <div class="section-head" style="margin-bottom:40px;">
      <span class="eyebrow">Questions fréquentes</span>
      <h2 style="font-size:34px;max-width:620px;margin:0 auto;line-height:1.15;">Automatisation en PME : les questions que l'on me pose</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Par où commencer si plusieurs domaines me semblent pertinents ?</h3>
        <p>Commencez par celui où le temps perdu est le plus visible et le plus facile à chiffrer, quitte à élargir ensuite. L'<a href="<?php echo esc_url( eb_url('audit') ); ?>">audit gratuit</a> sert précisément à trancher objectivement entre plusieurs pistes.</p>
      </div>
      <div class="faq-item">
        <h3>Ces solutions sont-elles vendues comme des forfaits fixes ?</h3>
        <p>Non. Chaque solution présentée ici est une famille de cas d'usage, pas un produit standard : le périmètre exact et le chiffrage se construisent avec vous après <a href="<?php echo esc_url( eb_url('audit') ); ?>">audit</a>.</p>
      </div>
      <div class="faq-item">
        <h3>Combien de temps avant de voir les premiers résultats ?</h3>
        <p>Pour une automatisation ciblée (Quick Win), souvent quelques jours à deux semaines après l'audit. Les projets plus complets, qui touchent plusieurs outils, prennent généralement deux à quatre semaines. Le calendrier exact se fixe pendant l'<a href="<?php echo esc_url( eb_url('audit') ); ?>">audit gratuit</a>.</p>
      </div>
      <div class="faq-item">
        <h3>Peut-on combiner plusieurs de ces solutions dans un même projet ?</h3>
        <p>Oui, c'est même fréquent : une <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">automatisation commerciale</a> s'articule souvent avec la <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">comptabilité</a>, ou un traitement documentaire IA vient renforcer une <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">automatisation RH</a> existante.</p>
      </div>
      <div class="faq-item">
        <h3>Quelle est la différence entre les solutions et les pages d'expertise ?</h3>
        <p>Cette page présente une vue d'ensemble par domaine. Chaque pilier (<a href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>">entreprise</a>, <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>">processus</a>, <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">IA</a>) et chaque page d'expertise détaille ensuite la méthode, les cas d'usage et les questions spécifiques à ce sujet.</p>
      </div>
      <div class="faq-item">
        <h3>Proposez-vous des solutions sectorielles spécifiques ?</h3>
        <p>Les solutions présentées ici sont transversales à la plupart des secteurs. Voir la page <a href="<?php echo esc_url( eb_url('realisations') ); ?>">réalisations</a> pour des exemples concrets par typologie d'entreprise.</p>
      </div>
      <div class="faq-item">
        <h3>Comment savoir si un outil que j'utilise est automatisable ?</h3>
        <p>La quasi-totalité des logiciels professionnels modernes proposent une API ou des fonctionnalités d'import/export exploitables. La faisabilité exacte se vérifie lors de l'<a href="<?php echo esc_url( eb_url('audit') ); ?>">audit</a>, outil par outil.</p>
      </div>
    </div>
  </section>

  <!-- tarif contextuel -->
  <section class="section" style="padding:0 40px;">
    <?php echo eb_price_teaser_html( 'Une première automatisation démarre généralement <strong>autour de 800 €</strong>, un service métier complet plutôt <strong>entre 1 500 € et 3 000 €</strong>.' ); ?>
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
