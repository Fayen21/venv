<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation des processus
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
      <span class="pillar-breadcrumb__current">Automatisation des processus</span>
    </nav>

    <!-- hero -->
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation des processus</div>
      <h1>Automatiser un processus métier : méthode et exemples concrets</h1>
      <p class="pillar-hero__intro">Un processus, ce n'est pas une tâche isolée : c'est un enchaînement d'étapes, de validations et de décisions qui traverse souvent plusieurs outils, parfois plusieurs personnes. L'automatiser mal ne fait que déplacer le goulot d'étranglement plus loin dans la chaîne — l'automatiser bien demande une cartographie préalable.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-processus.svg' ) ); ?>" alt="Schéma d'automatisation de processus métier : devis envoyé, relance automatique à J+5, commande et facture générées automatiquement" width="800" height="212" loading="lazy">
    </div>

    <!-- sections -->
    <div class="pillar-section">
      <h2>Qu'est-ce qu'un processus, au sens où je l'automatise</h2>
      <p>Une tâche se traite en une action : renommer un fichier, envoyer un email. Un processus enchaîne plusieurs tâches avec des points de décision entre elles — un devis validé déclenche une commande, qui déclenche une facture, qui déclenche un suivi de paiement. Automatiser un processus consiste à orchestrer cette chaîne de bout en bout, tout en gardant un point de contrôle humain là où un jugement reste nécessaire.</p>
    </div>

    <div class="pillar-section">
      <h2>Cartographier avant d'automatiser</h2>
      <p>La première étape n'est jamais technique : c'est de lister précisément les étapes réelles du processus, y compris les exceptions et les cas particuliers que personne ne documente jamais spontanément. Un processus automatisé sans cette cartographie traite bien le cas standard et échoue silencieusement sur les 20% de cas particuliers — qui sont souvent ceux qui comptent le plus.</p>
    </div>

    <div class="pillar-section">
      <h2>Types de processus fréquemment automatisés</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Validation de devis et de commande, avec relance automatique en cas d'absence de réponse.</div>
        <div class="pillar-section__list-item"><span>✓</span>Cycle achat → facture → paiement, avec contrôle de cohérence entre les montants.</div>
        <div class="pillar-section__list-item"><span>✓</span>Onboarding et offboarding RH, de la validation d'embauche à la clôture d'un départ.</div>
        <div class="pillar-section__list-item"><span>✓</span>Cycle de relance client, de la facture échue à l'escalade si nécessaire.</div>
        <div class="pillar-section__list-item"><span>✓</span>Clôture mensuelle comptable, avec rapprochement et remontée des écarts avant validation.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Les outils utilisés pour orchestrer un processus</h2>
      <p>Make et n8n servent de chef d'orchestre : ils relient vos logiciels via leurs API, déclenchent les étapes dans le bon ordre et gèrent les cas d'exception. Python intervient pour les traitements plus spécifiques. Sur les étapes qui nécessitent un jugement humain — validation d'une dépense inhabituelle, décision commerciale — le processus s'arrête et attend une action, plutôt que de forcer une automatisation complète là où elle n'a pas sa place.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Validation de devis avec relance automatique</h3>
          <p>Un devis envoyé sans réponse déclenche une relance après un délai défini, jusqu'à la décision du client.</p>
          <div class="pillar-usecase__gain">0 devis oublié</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Cycle d'onboarding RH complet</h3>
          <p>De la validation d'embauche à la remise du dossier d'accueil, chaque étape s'enchaîne automatiquement.</p>
          <div class="pillar-usecase__gain">2 jours → 2 heures</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Clôture mensuelle orchestrée</h3>
          <p>Rapprochement, contrôle de cohérence et remontée des écarts avant validation par le dirigeant.</p>
          <div class="pillar-usecase__gain">Clôture plus rapide</div>
        </div>
      </div>
    </div>

    <!-- flow diagram -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment ça s'enchaîne</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🗺️</span><span class="pillar-flow__step-label">Cartographie</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">⚙️</span><span class="pillar-flow__step-label">Orchestration Make/n8n</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🧑</span><span class="pillar-flow__step-label">Point de contrôle humain</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">✓</span><span class="pillar-flow__step-label">Processus bouclé</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Un processus qui traverse plusieurs outils et plusieurs personnes chez vous ?</p>
      <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence entre automatiser une tâche et un processus ?</h3>
        <p>Une tâche est une action unique (envoyer un email, extraire une donnée). Un processus enchaîne plusieurs tâches avec des points de décision entre elles, souvent à travers plusieurs outils. L'automatisation d'un processus demande une cartographie plus poussée mais génère un gain de temps plus large.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Un processus impliquant plusieurs personnes peut-il être automatisé ?</h3>
        <p>Oui, c'est même le cas le plus fréquent. L'automatisation orchestre les étapes et notifie la bonne personne au bon moment, sans supprimer les validations humaines nécessaires — elle élimine les relances et les oublis entre les étapes.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Comment sont gérées les exceptions dans un processus automatisé ?</h3>
        <p>Elles sont identifiées dès la phase de cartographie et traitées soit par une règle spécifique, soit par un point d'arrêt qui notifie une personne pour décision. Un processus bien conçu prévoit ces cas plutôt que de les découvrir en production.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>La cartographie du processus est-elle incluse dans l'audit gratuit ?</h3>
        <p>L'audit de 45 minutes permet d'identifier les processus à fort potentiel et d'estimer le gain. La cartographie détaillée, elle, fait partie de la phase de mise en place une fois le projet validé.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Un processus automatisé peut-il évoluer si mon activité change ?</h3>
        <p>Oui. Chaque processus est documenté et construit de façon modulaire : une étape peut être ajoutée, modifiée ou retirée sans reconstruire l'ensemble du scénario.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>" class="pillar-related__pill">Automatisation des tâches <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>" class="pillar-related__pill">Automatisation entreprise <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="pillar-related__pill">Automatisation RH <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('prospection-automatisee') ); ?>" class="pillar-related__pill">Prospection automatisée <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Cartographions ensemble votre processus le plus chronophage</h2>
      <p>Audit gratuit de 45 minutes, pistes concrètes et chiffrées à la clé.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
