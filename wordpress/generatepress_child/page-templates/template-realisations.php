<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Réalisations
 */
?>
<?php get_header(); ?>
<main id="main">

  <!-- hero -->
  <div class="hero-left">
    <div class="eyebrow hero-left__eyebrow">Réalisations</div>
    <h1>Découvrez ce que l'automatisation peut réellement vous faire gagner</h1>
    <p>Exemples concrets d'automatisations réalisées ou représentatives pour des TPE et PME : temps gagné, erreurs supprimées et processus simplifiés.</p>
  </div>

  <!-- cas n°1 — onboarding RH -->
  <section class="section" style="padding:0 40px 20px;">
    <div class="case-study">
      <div class="case-study__grid">
        <div class="case-study__body">
          <span class="case-study__tag" style="background:#EFEAFB;color:#6E4FCB;">RH · PME de services, 25 salariés</span>
          <h2>Automatiser l'onboarding RH, de la validation à l'arrivée</h2>
          <div class="case-study__block">
            <div class="case-study__label">Le problème</div>
            <p>À chaque embauche, le contrat, les accès et les documents d'accueil étaient créés à la main et dispersés sur plusieurs outils. Près de deux jours de préparation, avec des oublis fréquents.</p>
          </div>
          <div class="case-study__block">
            <div class="case-study__label">La solution</div>
            <p>Dès la validation d'une embauche, un flux Make + IA génère le contrat pré-rempli, crée les accès, constitue le dossier d'accueil et envoie une checklist au manager. Cette approche s'inscrit dans une <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">automatisation RH</a> plus large, de l'embauche jusqu'à la paie.</p>
          </div>
          <div class="case-study__block">
            <div class="case-study__label" style="margin-bottom:12px;">Le flux automatisé</div>
            <div class="case-flow">
              <div class="case-flow__step"><span class="case-flow__icon">✅</span><span class="case-flow__label">Validation embauche</span></div>
              <div class="case-flow__connector"></div>
              <div class="case-flow__step"><span class="case-flow__icon">📄</span><span class="case-flow__label">Contrat généré</span></div>
              <div class="case-flow__connector"></div>
              <div class="case-flow__step"><span class="case-flow__icon">🔑</span><span class="case-flow__label">Accès créés</span></div>
              <div class="case-flow__connector"></div>
              <div class="case-flow__step"><span class="case-flow__icon">🗂️</span><span class="case-flow__label">Dossier salarié préparé</span></div>
              <div class="case-flow__connector"></div>
              <div class="case-flow__step"><span class="case-flow__icon case-flow__icon--done">✓</span><span class="case-flow__label case-flow__label--done">Notification manager</span></div>
            </div>
          </div>
          <div class="case-study__tool-note"><span class="icon">🛠️</span><span class="text">Réalisé avec Make, génération de documents par IA et connexion aux outils RH. Mise en place en 2 semaines.</span></div>
        </div>
        <div class="case-study__side">
          <div class="case-study__side-label">Résultats</div>
          <div class="case-study__stats">
            <div class="case-study__stat"><div class="case-study__stat-label">Temps de préparation</div><div class="case-study__stat-value">2 jours → 2 heures</div></div>
            <div class="case-study__stat"><div class="case-study__stat-label">Oublis</div><div class="case-study__stat-value">0 document oublié</div></div>
            <div class="case-study__stat"><div class="case-study__stat-label">Conformité</div><div class="case-study__stat-value">100% complets</div></div>
            <div class="case-study__stat"><div class="case-study__stat-label">Déploiement</div><div class="case-study__stat-value">2 semaines</div></div>
          </div>
          <div class="case-study__side-foot">Résultats observés dès le premier mois de mise en production, sur un flux entièrement automatisé.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- cas n°2 — rapprochement bancaire -->
  <section class="section" style="padding:24px 40px 0;">
    <div class="case-study">
      <div class="case-study__grid">
        <div class="case-study__body">
          <span class="case-study__tag" style="background:#E5F3EF;color:#1E8A6E;">Finance · Entreprise de services — 15 salariés</span>
          <h2>Rapprochement bancaire automatisé</h2>
          <div class="case-study__block">
            <div class="case-study__label">Le problème</div>
            <p>Le dirigeant pointait manuellement les opérations Qonto et vérifiait les écarts avec la comptabilité, plusieurs heures chaque mois.</p>
          </div>
          <div class="case-study__block">
            <div class="case-study__label">La solution</div>
            <p>Connexion Qonto + comptabilité (Sage) avec pointage et détection automatique des anomalies. L'automatisation Excel des écarts alerte en cas de doublon ou d'incohérence. Un exemple représentatif d'<a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> appliquée au quotidien.</p>
          </div>
          <div class="case-study__results">
            <div class="case-study__result"><span>✓</span>Rapprochement quasi immédiat au lieu de plusieurs heures</div>
            <div class="case-study__result"><span>✓</span>Anomalies remontées automatiquement</div>
            <div class="case-study__result"><span>✓</span>Clôture plus rapide</div>
          </div>
        </div>
        <div class="case-study__side case-study__side--terminal">
          <div class="case-study__mock">
            <div class="case-study__mock-titlebar">
              <div class="case-study__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
              <span class="case-study__mock-file">rapprochement · Make</span>
              <span class="case-study__mock-live"><span class="case-study__mock-live-dot"></span>actif</span>
            </div>
            <div class="case-study__mock-body">
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#5e6f8c;"></span><span class="case-study__mock-label">Opérations Qonto importées</span><span class="case-study__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">48 lignes</span></div>
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#5BCB8B;"></span><span class="case-study__mock-label">Pointage automatique ↔ Sage</span><span class="case-study__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">46 ✓</span></div>
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#3BA5FF;"></span><span class="case-study__mock-label">Anomalie détectée &amp; signalée</span><span class="case-study__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">1 ⚑</span></div>
            </div>
          </div>
          <div class="case-study__big-stat">
            <span class="case-study__big-stat-value">−90%</span>
            <span class="case-study__big-stat-label">de temps de rapprochement</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- cas n°3 — emails & pièces jointes -->
  <section class="section" style="padding:24px 40px 0;">
    <div class="case-study">
      <div class="case-study__grid">
        <div class="case-study__body">
          <span class="case-study__tag" style="background:#EEF1F7;color:#3C4A60;">Administratif · Cabinet de conseil — 10 salariés</span>
          <h2>Traitement automatique des emails et pièces jointes</h2>
          <div class="case-study__block">
            <div class="case-study__label">Le problème</div>
            <p>Classement manuel des emails et documents entrants, chronophage et source de pièces égarées.</p>
          </div>
          <div class="case-study__block">
            <div class="case-study__label">La solution</div>
            <p>Lecture IA des emails, extraction des données clés et classement automatique dans le bon dossier, avec création de tâche de suivi. Ce type de tri s'inscrit dans une démarche plus large d'<a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>">automatisation des tâches répétitives</a>.</p>
          </div>
          <div class="case-study__results">
            <div class="case-study__result"><span>✓</span>−70% de temps de traitement</div>
            <div class="case-study__result"><span>✓</span>0 document perdu</div>
            <div class="case-study__result"><span>✓</span>Classement automatique</div>
          </div>
        </div>
        <div class="case-study__side case-study__side--terminal">
          <div class="case-study__mock">
            <div class="case-study__mock-titlebar">
              <div class="case-study__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
              <span class="case-study__mock-file">tri_emails · n8n + IA</span>
              <span class="case-study__mock-live"><span class="case-study__mock-live-dot"></span>actif</span>
            </div>
            <div class="case-study__mock-body">
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#5e6f8c;"></span><span class="case-study__mock-label">Email + pièce jointe reçus</span><span class="case-study__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">détecté</span></div>
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#3BA5FF;"></span><span class="case-study__mock-label">Lu &amp; extrait par l'IA</span><span class="case-study__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">8 champs</span></div>
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#5BCB8B;"></span><span class="case-study__mock-label">Classé &amp; tâche créée</span><span class="case-study__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">dossier ✓</span></div>
            </div>
          </div>
          <div class="case-study__big-stat">
            <span class="case-study__big-stat-value">−70%</span>
            <span class="case-study__big-stat-label">de temps de traitement</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- cas n°4 — devis & suivi commercial -->
  <section class="section" style="padding:24px 40px 20px;">
    <div class="case-study">
      <div class="case-study__grid">
        <div class="case-study__body">
          <span class="case-study__tag" style="background:#E7EFFC;color:#2C5FC7;">CRM · Entreprise de services — 20 salariés</span>
          <h2>Génération et relance automatique des devis</h2>
          <div class="case-study__block">
            <div class="case-study__label">Le problème</div>
            <p>Chaque devis était recomposé manuellement dans Excel, puis suivi à l'œil dans un tableau — avec des relances oubliées et des opportunités perdues faute de suivi.</p>
          </div>
          <div class="case-study__block">
            <div class="case-study__label">La solution</div>
            <p>Le devis est généré automatiquement depuis les données du CRM, envoyé au client, puis relancé selon un calendrier fixe tant qu'aucune réponse n'est enregistrée. Un flux typique d'<a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">automatisation CRM</a> appliqué au cycle commercial.</p>
          </div>
          <div class="case-study__results">
            <div class="case-study__result"><span>✓</span>0 devis oublié sans relance</div>
            <div class="case-study__result"><span>✓</span>Génération en 2 minutes au lieu de 20</div>
            <div class="case-study__result"><span>✓</span>Taux de réponse en hausse</div>
          </div>
        </div>
        <div class="case-study__side case-study__side--terminal">
          <div class="case-study__mock">
            <div class="case-study__mock-titlebar">
              <div class="case-study__mock-dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
              <span class="case-study__mock-file">suivi_devis · Make + CRM</span>
              <span class="case-study__mock-live"><span class="case-study__mock-live-dot"></span>actif</span>
            </div>
            <div class="case-study__mock-body">
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#5e6f8c;"></span><span class="case-study__mock-label">Devis généré depuis le CRM</span><span class="case-study__mock-val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">2 min</span></div>
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#5BCB8B;"></span><span class="case-study__mock-label">Envoyé au client</span><span class="case-study__mock-val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">tracé</span></div>
              <div class="case-study__mock-row"><span class="case-study__mock-dot" style="background:#3BA5FF;"></span><span class="case-study__mock-label">Relance automatique J+7</span><span class="case-study__mock-val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">programmée</span></div>
            </div>
          </div>
          <div class="case-study__big-stat">
            <span class="case-study__big-stat-value">0</span>
            <span class="case-study__big-stat-label">devis oublié sans relance</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- autres cas d'usage -->
  <section class="section usecase-intro">
    <h2>Autres exemples d'automatisation en entreprise</h2>
    <p>Mini études de cas représentatives, anonymisées, par typologie d'entreprise.</p>
    <div class="usecase-grid">
      <div class="usecase-card"><div class="usecase-card__sector">PME de services</div><h3>Relances clients automatisées</h3><div class="usecase-card__body"><p><span>Problème · </span>Relances manuelles, factures impayées suivies dans un tableur, retards fréquents.</p><p><span>Solution · </span>Détection des impayés et <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">relances personnalisées</a> envoyées automatiquement au bon moment.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−38%</span><span class="usecase-card__metric-label">de retards de paiement</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">TPE industrielle — 8 salariés</div><h3>Reporting de production automatisé</h3><div class="usecase-card__body"><p><span>Problème · </span>Tableaux Excel de suivi mis à jour à la main chaque semaine, données vite obsolètes.</p><p><span>Solution · </span>Consolidation automatique des données et tableaux de bord actualisés en continu.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">Auto</span><span class="usecase-card__metric-label">tableaux toujours à jour</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">Cabinet comptable</div><h3>Tri et classement des emails</h3><div class="usecase-card__body"><p><span>Problème · </span>Emails et pièces jointes classés manuellement, temps perdu et pièces égarées.</p><p><span>Solution · </span>Lecture IA, catégorisation et <a href="<?php echo esc_url( eb_url('rpa') ); ?>">classement automatique</a> avec création de tâche de suivi.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−70%</span><span class="usecase-card__metric-label">de tri manuel</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">PME de conseil — 12 salariés</div><h3>Suivi des congés et absences</h3><div class="usecase-card__body"><p><span>Problème · </span>Demandes de congés gérées par email, décompte manuel dans un tableur, erreurs fréquentes.</p><p><span>Solution · </span>Demande, validation et <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">décompte automatique des congés</a> synchronisés avec le logiciel de paie.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">0</span><span class="usecase-card__metric-label">erreur de décompte</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">Commerce — 6 salariés</div><h3>Suivi des stocks multi-canal</h3><div class="usecase-card__body"><p><span>Problème · </span>Niveaux de stock mis à jour manuellement entre la boutique et la vente en ligne.</p><p><span>Solution · </span>Synchronisation automatique des stocks entre les deux canaux à chaque vente.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">0</span><span class="usecase-card__metric-label">rupture non détectée</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">Cabinet d'avocats — 9 salariés</div><h3>Facturation et relance des honoraires</h3><div class="usecase-card__body"><p><span>Problème · </span>Notes d'honoraires générées manuellement, relances des impayés faites au cas par cas.</p><p><span>Solution · </span>Facture générée depuis le temps passé enregistré, <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">relance automatique</a> à échéance.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−45%</span><span class="usecase-card__metric-label">de temps de facturation</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">Agence immobilière — 15 salariés</div><h3>Qualification des leads entrants</h3><div class="usecase-card__body"><p><span>Problème · </span>Demandes reçues par plusieurs canaux, traitées dans l'ordre d'arrivée sans priorisation.</p><p><span>Solution · </span>Chaque demande est lue, <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">qualifiée automatiquement</a> et assignée au bon commercial.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−60%</span><span class="usecase-card__metric-label">de délai de premier contact</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">PME industrielle — 22 salariés</div><h3>Contrôle qualité fournisseurs</h3><div class="usecase-card__body"><p><span>Problème · </span>Certificats de conformité reçus par email, vérifiés manuellement un par un.</p><p><span>Solution · </span>Lecture IA des certificats et <a href="<?php echo esc_url( eb_url('rpa') ); ?>">alerte automatique</a> en cas de document manquant ou expiré.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">0</span><span class="usecase-card__metric-label">certificat manquant non détecté</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">Cabinet de recrutement — 7 salariés</div><h3>Suivi des candidatures</h3><div class="usecase-card__body"><p><span>Problème · </span>CV et candidatures dispersés entre email et tableur, suivi difficile à jour.</p><p><span>Solution · </span>Chaque candidature est classée via le <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">recrutement automatisé</a>, associée à une offre et son statut mis à jour en continu.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">0</span><span class="usecase-card__metric-label">candidature perdue</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">Entreprise de services — 30 salariés</div><h3>Notes de frais automatisées</h3><div class="usecase-card__body"><p><span>Problème · </span>Notes de frais soumises en PDF ou papier, saisies manuellement en comptabilité.</p><p><span>Solution · </span>Lecture IA des justificatifs, extraction des montants et <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">intégration directe en comptabilité</a>.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−80%</span><span class="usecase-card__metric-label">de temps de saisie</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">PME de services — 18 salariés</div><h3>Génération de contrats clients</h3><div class="usecase-card__body"><p><span>Problème · </span>Contrats rédigés à la main à partir d'un modèle Word, source d'oublis et d'incohérences.</p><p><span>Solution · </span>Contrat généré automatiquement depuis les <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">données du CRM</a>, prêt à signer.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−90%</span><span class="usecase-card__metric-label">de temps de rédaction</span></div></div>
      <div class="usecase-card"><div class="usecase-card__sector">TPE — 5 salariés</div><h3>Rappels de rendez-vous clients</h3><div class="usecase-card__body"><p><span>Problème · </span>Rendez-vous confirmés par téléphone, taux de rendez-vous manqués élevé.</p><p><span>Solution · </span>Rappel automatique par SMS ou email 24h avant chaque rendez-vous.</p></div><div class="usecase-card__metric-row"><span class="usecase-card__metric-value">−50%</span><span class="usecase-card__metric-label">de rendez-vous manqués</span></div></div>
    </div>
  </section>

  <!-- vous gardez le contrôle -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Réassurance</span>
      <h2 style="font-size:34px;">Vous gardez le contrôle</h2>
    </div>
    <div class="control-grid">
      <div class="control-card">
        <div class="control-card__icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
        <h3>Vos données</h3><p>Elles restent dans vos outils.</p>
      </div>
      <div class="control-card">
        <div class="control-card__icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="15" r="4"></circle><path d="M11 12l9-9"></path><path d="M16 7l2.5 2.5"></path><path d="M13.5 9.5l2 2"></path></svg></div>
        <h3>Vos accès</h3><p>Tous les accès vous appartiennent.</p>
      </div>
      <div class="control-card">
        <div class="control-card__icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
        <h3>Votre documentation</h3><p>Chaque automatisation est documentée.</p>
      </div>
      <div class="control-card">
        <div class="control-card__icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"><path d="M12 3l7 6.5L12 21 5 9.5z"></path></svg></div>
        <h3>Votre autonomie</h3><p>Vous pouvez faire évoluer les automatisations par la suite.</p>
      </div>
    </div>
  </section>

  <!-- technologies utilisées -->
  <section class="section">
    <div class="tech-band">
      <div class="tech-band__head">
        <h2>Des outils éprouvés, adaptés à votre environnement</h2>
        <p>Je sélectionne les technologies les plus adaptées à vos besoins et à vos logiciels existants.</p>
      </div>
      <div class="tech-band__grid tool-chip-grid">
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#6D00CC;color:#fff;">M</span>Make</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EA4B71;color:#fff;">n8</span>n8n</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#3776AB;color:#fff;">Py</span>Python</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0C1E3C;color:#fff;">Q</span>Qonto</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EB3C00;color:#fff;">365</span>Microsoft 365</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0A6FC2;color:#fff;">O</span>Outlook</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#00D639;color:#0C2E14;">S</span>Sage</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#1D6F42;color:#fff;">X</span>Excel</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#111111;color:#fff;">N</span>Notion</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#FF5C35;color:#fff;">H</span>HubSpot</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#1A1A1A;color:#fff;">Pd</span>Pipedrive</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0C1E3C;color:#E59B6A;">{}</span>API REST</div>
      </div>
    </div>
  </section>

  <!-- CTA final -->
  <section class="section final-cta-section">
    <div class="cta-dotted">
      <div class="cta-dotted__text">
        <h2>Quel processus vous fait perdre le plus de temps aujourd'hui ?</h2>
        <p>Audit gratuit de 45 minutes. Repartez avec des pistes d'automatisation concrètes, priorisées et chiffrées.</p>
      </div>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver mon audit gratuit <span>→</span></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
