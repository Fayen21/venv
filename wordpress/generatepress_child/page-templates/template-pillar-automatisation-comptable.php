<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation comptable
 */
?>
<?php get_header(); ?>
<main id="main">
  <div class="pillar-wrap">

    <!-- breadcrumb -->
    <nav class="pillar-breadcrumb" aria-label="Fil d'Ariane">
      <a href="<?php echo esc_url( eb_url('index') ); ?>">Accueil</a>
      <span>／</span>
      <a href="<?php echo esc_url( eb_url('solutions') ); ?>">Expertises</a>
      <span>／</span>
      <span class="pillar-breadcrumb__current">Automatisation comptable</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['automatisation-comptable'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation comptable</div>
      <h1>Automatisation comptable : éliminez la saisie manuelle grâce à l'IA</h1>
      <p class="pillar-hero__intro">Factures fournisseurs, notes de frais, rapprochement bancaire : la comptabilité d'une TPE-PME reste souvent une succession de ressaisies manuelles. L'automatisation comptable connecte l'OCR de lecture de facture à votre logiciel (Pennylane, Sage, Cegid, Quadra…) pour que <strong>les écritures se génèrent seules, sans changer d'outil</strong>.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-comptable.svg' ) ); ?>" alt="Schéma d'automatisation comptable : extraction OCR d'une facture, lecture du montant et de la TVA, écriture comptable générée automatiquement" width="800" height="212" loading="lazy">
    </div>
    </div>
    </div>

    <!-- le problème -->
    <div class="pillar-section">
      <h2>Le problème : la comptabilité reste chronophage, facture par facture</h2>
      <p>Dans la plupart des TPE-PME, chaque facture fournisseur suit le même parcours : réception par email, ouverture, relevé manuel du montant et de la TVA, puis saisie dans le logiciel comptable. Multiplié par des dizaines de factures par mois, ce travail de ressaisie <strong>absorbe un temps disproportionné</strong> par rapport à sa valeur ajoutée réelle.</p>
      <p>Le rapprochement bancaire suit la même logique : pointer une à une les lignes du relevé bancaire face aux écritures comptables, repérer les écarts, corriger les erreurs de saisie. C'est un travail nécessaire, mais qui ne demande pas un jugement métier à chaque ligne — exactement le type de tâche que l'automatisation comptable prend en charge.</p>
    </div>

    <!-- pourquoi automatiser -->
    <div class="pillar-section">
      <h2>Pourquoi automatiser sa comptabilité</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>La saisie comptable automatique élimine la ressaisie manuelle</strong> et les erreurs de frappe qui l'accompagnent.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>L'OCR facture, associé à l'intelligence artificielle, lit montant, TVA, date et fournisseur directement depuis le PDF, sans intervention humaine.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Le rapprochement bancaire automatique <strong>détecte les anomalies et les doublons avant la clôture</strong>, pas après.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Le temps libéré se réinvestit sur l'analyse financière et le conseil, pas sur la saisie répétitive.</div>
      </div>
      <div class="pillar-section__sub">
        <h3>Saisie comptable automatique : comment ça marche</h3>
        <p>La facture arrive par email ou par scan, l'<a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">OCR</a> en extrait le montant, la TVA, le fournisseur et la date, puis un brouillon d'écriture est généré directement dans votre logiciel comptable. <strong>Vous validez, l'automatisation ne remplace jamais votre contrôle</strong> sur les points sensibles. Cette lecture automatique de documents s'appuie sur les mêmes briques que la <a href="<?php echo esc_url( eb_url('rpa') ); ?>">RPA</a> et l'<a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">extraction de données PDF</a>. Le cycle complet, du devis à l'encaissement, est détaillé sur la page <a href="<?php echo esc_url( eb_url('automatisation-facturation') ); ?>">automatisation de la facturation</a>.</p>
      </div>
    </div>

    <!-- bénéfices -->
    <div class="pillar-section">
      <h2>Bénéfices concrets pour votre entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Moins d'erreurs de saisie</strong>, donc moins de corrections et d'écritures de régularisation en fin d'exercice.</span></div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Une clôture mensuelle plus rapide</strong>, avec des écritures déjà à jour au fil de l'eau.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Une meilleure visibilité sur la trésorerie, avec des rapprochements bancaires faits en continu plutôt qu'en fin de mois.</div>
        <div class="pillar-section__list-item"><span>✓</span>Une charge de travail comptable qui n'augmente plus mécaniquement avec le volume de factures.</div>
      </div>
    </div>

    <!-- exemples concrets -->
    <div class="pillar-usecases">
      <h2>Exemples concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Gestion des factures fournisseurs</h3>
          <p>Chaque facture reçue par email est lue par OCR, ses données extraites et intégrées comme brouillon d'écriture, prêt à valider.</p>
          <div class="pillar-usecase__gain">−72% de temps de saisie</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Rapprochement bancaire automatique</h3>
          <p>Connexion entre votre banque et votre logiciel comptable, avec pointage automatique et alerte sur les écarts.</p>
          <div class="pillar-usecase__gain">−85% de temps de rapprochement</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
          <h3>Notes de frais automatisées</h3>
          <p>Photo du reçu envoyée par l'équipe, montant et catégorie extraits automatiquement, intégration directe en comptabilité.</p>
          <div class="pillar-usecase__gain">−80% de temps de saisie</div>
        </div>
      </div>
    </div>

    <!-- outils concernés -->
    <div class="pillar-section">
      <h2>Outils concernés</h2>
      <p>L'automatisation comptable s'appuie sur les logiciels que vous utilisez déjà — aucun changement d'outil n'est nécessaire.</p>
      <div class="tool-chip-grid">
        <div class="tool-chip"><?php echo eb_tool_icon_html('pennylane'); ?>Pennylane</div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('sage'); ?>Sage</div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('cegid'); ?>Cegid</div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('quadra'); ?>Quadra</div>
        <div class="tool-chip"><?php echo eb_tool_icon_html('qonto'); ?>Qonto</div>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('excel'); ?>Excel<span class="tool-chip__chevron" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span></a>
      </div>
    </div>

    <!-- comment nous intervenons -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment nous intervenons</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg></span><span class="pillar-flow__step-label">Facture reçue</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Lecture OCR</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12v18l-3-2-3 2-3-2-3 2z"></path><path d="M9 8h6M9 12h6"></path></svg></span><span class="pillar-flow__step-label">Écriture générée</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M8.5 12.5l2.3 2.3 4.7-4.8"></path></svg></span><span class="pillar-flow__step-label">Intégré à votre logiciel</span></div>
      </div>
    </div>

    <!-- avant / après -->
    <div class="pillar-compare">
      <h2>Avant / après automatisation comptable</h2>
      <div class="pillar-compare__grid">
        <div class="pillar-compare__col pillar-compare__col--before">
          <div class="pillar-compare__label">Avant</div>
          <div class="pillar-compare__item"><span>×</span>Saisie manuelle de chaque facture fournisseur</div>
          <div class="pillar-compare__item"><span>×</span>Rapprochement bancaire fait une fois par mois, à la main</div>
          <div class="pillar-compare__item"><span>×</span>Erreurs de saisie détectées tardivement</div>
          <div class="pillar-compare__item"><span>×</span>Notes de frais ressaisies depuis des photos de reçus</div>
        </div>
        <div class="pillar-compare__col pillar-compare__col--after">
          <div class="pillar-compare__label">Après</div>
          <div class="pillar-compare__item"><span>✓</span>Factures lues et pré-comptabilisées automatiquement</div>
          <div class="pillar-compare__item"><span>✓</span>Rapprochement bancaire en continu, anomalies signalées</div>
          <div class="pillar-compare__item"><span>✓</span>Écritures fiables dès la première saisie</div>
          <div class="pillar-compare__item"><span>✓</span>Notes de frais extraites automatiquement par l'IA</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Vos factures vous prennent encore des heures chaque semaine ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Qu'est-ce que l'automatisation comptable, concrètement ?</h3>
        <p>C'est la mise en place d'un enchaînement automatique entre la réception d'un document (facture, relevé bancaire, note de frais) et son enregistrement en comptabilité, en s'appuyant sur l'OCR pour lire les documents et sur des règles pour générer les écritures.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'OCR peut-il lire n'importe quelle facture ?</h3>
        <p>L'OCR facture moderne s'adapte à des mises en page très variées (PDF natif, scan, photo), contrairement à un simple gabarit fixe. Les cas ambigus sont signalés pour validation humaine plutôt que comptabilisés à l'aveugle.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Est-ce compatible avec Pennylane, Sage, Cegid ou Quadra ?</h3>
        <p>Oui. L'automatisation se connecte à votre logiciel comptable existant via ses fonctionnalités d'import ou son API — <strong>aucun changement d'outil n'est nécessaire</strong> pour en bénéficier.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Le rapprochement bancaire automatique est-il fiable ?</h3>
        <p>Le pointage automatique traite les cas standards et signale les écarts (doublons, montants proches, opérations non reconnues) pour un contrôle humain rapide — la fiabilité vient de cette combinaison automatisation plus validation, pas d'un remplacement complet du contrôle.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Dois-je changer de logiciel comptable pour automatiser ?</h3>
        <p>Non. <strong>L'automatisation comptable se construit sur l'outil que vous utilisez déjà.</strong> L'objectif est de supprimer la ressaisie manuelle, pas de vous faire changer d'écosystème.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="pillar-related__pill">Automatisation RH <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Combien de temps votre comptabilité pourrait-elle vous faire gagner ?</h2>
      <p>45 minutes suffisent pour identifier les automatisations comptables les plus rentables pour votre activité.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
