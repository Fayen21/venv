<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation CRM
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
      <span class="pillar-breadcrumb__current">Automatisation CRM</span>
    </nav>

    <!-- hero -->
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation CRM</div>
      <h1>Automatisation CRM : un pipeline commercial qui se met à jour tout seul</h1>
      <p class="pillar-hero__intro">Un CRM PME ou CRM TPE (HubSpot, Pipedrive, Salesforce…) ne vaut que si les données qu'il contient sont à jour. L'automatisation CRM connecte vos emails, formulaires et outils commerciaux pour que chaque contact, chaque étape du pipeline commercial et chaque relance se mette à jour automatiquement — sans ressaisie côté équipe commerciale.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-crm.svg' ) ); ?>" alt="Schéma d'automatisation CRM : demande de devis reçue, fiche créée dans le CRM, relance commerciale programmée automatiquement" width="800" height="212" loading="lazy">
    </div>

    <!-- le problème -->
    <div class="pillar-section">
      <h2>Le problème : un CRM que personne ne met vraiment à jour</h2>
      <p>Un CRM PME est censé centraliser le suivi commercial, mais dans la pratique, la saisie manuelle prend du retard : une demande reçue par email n'est pas toujours créée dans le CRM, une relance planifiée dans un coin de tête n'est pas toujours faite, un changement de statut n'est pas toujours répercuté. Le pipeline commercial affiché ne reflète plus la réalité du terrain.</p>
      <p>Résultat : des opportunités oubliées, des relances qui arrivent trop tard, et un reporting commercial qui demande une reconstruction manuelle avant chaque réunion. L'automatisation CRM répond directement à ce problème de fraîcheur des données.</p>
    </div>

    <!-- pourquoi automatiser -->
    <div class="pillar-section">
      <h2>Pourquoi automatiser son CRM</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Chaque demande entrante (email, formulaire, appel) crée automatiquement une fiche et une tâche de suivi dans le CRM.</div>
        <div class="pillar-section__list-item"><span>✓</span>Le pipeline commercial reste à jour sans ressaisie manuelle de la part des commerciaux.</div>
        <div class="pillar-section__list-item"><span>✓</span>Les relances s'envoient au bon moment, sans dépendre de la mémoire de chacun.</div>
        <div class="pillar-section__list-item"><span>✓</span>Le reporting commercial se génère directement depuis des données fiables, sans reconstruction manuelle.</div>
      </div>
    </div>

    <!-- bénéfices -->
    <div class="pillar-section">
      <h2>Bénéfices concrets pour votre entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Zéro prospect oublié entre la première demande et la relance.</div>
        <div class="pillar-section__list-item"><span>✓</span>Un temps de premier contact réduit, avec une qualification automatique dès l'arrivée du lead.</div>
        <div class="pillar-section__list-item"><span>✓</span>Une équipe commerciale qui passe moins de temps sur la saisie CRM et davantage sur les échanges clients.</div>
        <div class="pillar-section__list-item"><span>✓</span>Un pipeline commercial fiable pour piloter l'activité sans attendre la fin du mois.</div>
      </div>
    </div>

    <!-- exemples concrets -->
    <div class="pillar-usecases">
      <h2>Exemples concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path></svg></div>
          <h3>CRM et suivi commercial</h3>
          <p>Chaque demande entrante crée une fiche et une tâche de suivi dans votre CRM, sans ressaisie manuelle.</p>
          <div class="pillar-usecase__gain">0 prospect oublié</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Relances de devis automatisées</h3>
          <p>Devis générés depuis le CRM, envoyés au client, relancés automatiquement selon un calendrier fixe tant qu'aucune réponse n'est enregistrée.</p>
          <div class="pillar-usecase__gain">0 devis oublié sans relance</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
          <h3>Qualification automatique des leads</h3>
          <p>Chaque nouveau contact est lu, qualifié et assigné automatiquement au bon commercial selon des règles définies avec vous.</p>
          <div class="pillar-usecase__gain">−60% de délai de premier contact</div>
        </div>
      </div>
    </div>

    <!-- outils concernés -->
    <div class="pillar-section">
      <h2>Outils concernés</h2>
      <p>L'automatisation CRM se construit sur les CRM les plus utilisés par les TPE-PME françaises.</p>
      <div class="tool-chip-grid">
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#FF5C35;color:#fff;">H</span>HubSpot</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#1A1A1A;color:#fff;">Pd</span>Pipedrive</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#00A1E0;color:#fff;">Sf</span>Salesforce</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0A6FC2;color:#fff;">O</span>Outlook</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#6D00CC;color:#fff;">M</span>Make</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EA4B71;color:#fff;">n8</span>n8n</div>
      </div>
    </div>

    <!-- comment nous intervenons -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment nous intervenons</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📥</span><span class="pillar-flow__step-label">Demande reçue</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🏷️</span><span class="pillar-flow__step-label">Lead qualifié</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📋</span><span class="pillar-flow__step-label">Fiche CRM créée</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🔔</span><span class="pillar-flow__step-label">Relance programmée</span></div>
      </div>
    </div>

    <!-- avant / après -->
    <div class="pillar-compare">
      <h2>Avant / après automatisation CRM</h2>
      <div class="pillar-compare__grid">
        <div class="pillar-compare__col pillar-compare__col--before">
          <div class="pillar-compare__label">Avant</div>
          <div class="pillar-compare__item"><span>×</span>Demandes créées manuellement dans le CRM, avec retard</div>
          <div class="pillar-compare__item"><span>×</span>Relances de devis dépendantes de la mémoire du commercial</div>
          <div class="pillar-compare__item"><span>×</span>Pipeline commercial pas toujours à jour</div>
          <div class="pillar-compare__item"><span>×</span>Reporting reconstruit manuellement avant chaque réunion</div>
        </div>
        <div class="pillar-compare__col pillar-compare__col--after">
          <div class="pillar-compare__label">Après</div>
          <div class="pillar-compare__item"><span>✓</span>Fiche et tâche créées automatiquement dès la demande</div>
          <div class="pillar-compare__item"><span>✓</span>Relances envoyées automatiquement selon un calendrier fixe</div>
          <div class="pillar-compare__item"><span>✓</span>Pipeline commercial fiable en permanence</div>
          <div class="pillar-compare__item"><span>✓</span>Reporting généré directement depuis le CRM</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Votre CRM affiche-t-il vraiment la réalité de votre activité commerciale ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Quel CRM est le plus adapté à une TPE-PME ?</h3>
        <p>HubSpot, Pipedrive et Salesforce couvrent la grande majorité des besoins d'un CRM PME ou CRM TPE. Le bon choix dépend surtout de votre volume de contacts et de votre budget — l'automatisation, elle, s'adapte à celui que vous avez déjà.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Dois-je changer de CRM pour l'automatiser ?</h3>
        <p>Non. L'automatisation CRM se construit sur l'outil que vous utilisez déjà, en le connectant à vos emails, formulaires et autres outils commerciaux.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Comment fonctionne la qualification automatique des leads ?</h3>
        <p>Chaque nouveau contact est analysé selon des règles définies avec vous (secteur, taille, origine de la demande) puis assigné et priorisé automatiquement dans le pipeline commercial, sans intervention manuelle de tri.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Les relances automatiques ne risquent-elles pas de paraître robotiques ?</h3>
        <p>Les messages sont personnalisés à partir des données du CRM (nom, contexte de la demande) et le ton est défini avec vous en amont. L'automatisation gère le déclenchement et le timing, pas le contenu générique.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je garder un contrôle humain sur les relances envoyées ?</h3>
        <p>Oui. Il est courant de démarrer avec une validation humaine avant envoi, puis de passer en automatique une fois les règles éprouvées sur vos premiers cas réels.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('prospection-automatisee') ); ?>" class="pillar-related__pill">Prospection automatisée <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Combien d'opportunités votre CRM laisse-t-il passer aujourd'hui ?</h2>
      <p>45 minutes suffisent pour identifier les automatisations CRM les plus rentables pour votre équipe commerciale.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
