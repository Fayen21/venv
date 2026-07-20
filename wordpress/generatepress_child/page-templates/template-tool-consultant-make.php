<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Outil Consultant Make
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
      <span class="pillar-breadcrumb__current">Consultant Make</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed eb-hero-fx--dim-halo">
    <?php eb_hero_fx( eb_hero_fx_effects()['consultant-make'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Outils · Make</div>
      <h1>Consultant Make : des scénarios d'automatisation sur mesure, sans code</h1>
      <p class="pillar-hero__intro">Make (anciennement Integromat) est l'un des outils no-code les plus utilisés pour connecter des logiciels entre eux et automatiser des tâches répétitives, grâce à une interface visuelle accessible même sans compétence de développement. En tant que consultant Make indépendant, je conçois, construis et documente vos scénarios d'automatisation, adaptés précisément à vos outils et à votre façon de travailler.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    <div class="pillar-hero__reviews"><?php echo eb_google_reviews_badge(); ?></div>
    </div>
    </div>
    </div>

    <div class="pillar-section">
      <h2>Pourquoi passer par un consultant Make plutôt que de le faire soi-même</h2>
      <p>Make est conçu pour être accessible, mais la différence entre un scénario qui fonctionne en démonstration et un scénario fiable en production tient à des détails qu'on ne découvre qu'à l'usage : gestion des erreurs, cas limites, volumes de données, limites d'API des outils connectés. <strong>Un consultant Make expérimenté construit des scénarios robustes dès le départ</strong> — avec gestion des exceptions, notifications en cas d'échec et documentation claire — plutôt que des automatisations qui fonctionnent seulement sur le cas testé le jour de la mise en place.</p>
      <p>L'autre bénéfice concret est le gain de temps : concevoir un scénario fiable demande de connaître les subtilités de chaque connecteur (Outlook, CRM, comptabilité, IA) et leurs limites respectives. <strong>Un consultant qui les pratique au quotidien évite les essais-erreurs qui prennent des semaines en autodidacte.</strong></p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je construis avec Make</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Connexions entre vos outils existants (email, CRM, comptabilité, RH) sans développement lourd.</div>
        <div class="pillar-section__list-item"><span>✓</span>Scénarios combinant plusieurs étapes et conditions, avec points de contrôle humain sur les décisions sensibles.</div>
        <div class="pillar-section__list-item"><span>✓</span>Intégration de modules d'intelligence artificielle pour lire et interpréter des documents non structurés.</div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Gestion des erreurs et des cas limites</strong>, avec alertes automatiques en cas d'échec d'exécution.</span></div>
        <div class="pillar-section__list-item"><span>✓</span><span>Documentation complète de chaque scénario, pour que <strong>vous restiez autonome</strong> sur son fonctionnement.</span></div>
      </div>
    </div>

    <div class="pillar-table">
      <h2>Make vs n8n : comparatif rapide</h2>
      <div class="pillar-table__wrap">
        <table>
          <thead>
            <tr><th>Critère</th><th>Make</th><th>n8n</th></tr>
          </thead>
          <tbody>
            <tr><td>Prise en main</td><td>Très visuelle, accessible rapidement</td><td>Un peu plus technique</td></tr>
            <tr><td>Connecteurs prêts à l'emploi</td><td>Très large catalogue</td><td>Large catalogue, plus orienté développeur</td></tr>
            <tr><td>Hébergement</td><td>Cloud Make uniquement</td><td>Cloud ou auto-hébergé</td></tr>
            <tr><td>Adapté à</td><td>Automatisations métier standards</td><td>Logiques complexes, données sensibles</td></tr>
          </tbody>
        </table>
      </div>
      <p style="font-size:14.5px;color:var(--text-3);margin-top:14px;">Voir aussi le détail de l'accompagnement <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">consultant n8n</a> pour comparer les deux approches selon votre projet.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets réalisés avec Make</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Onboarding RH automatisé</h3>
          <p>Contrat généré, accès créés et dossier d'accueil constitué dès la validation d'une embauche.</p>
          <div class="pillar-usecase__gain">2 jours → 2 heures</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Rapprochement bancaire automatisé</h3>
          <p>Connexion entre la banque et le logiciel comptable, avec détection automatique des écarts.</p>
          <div class="pillar-usecase__gain">−85% de temps de pointage</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Qualification des leads entrants</h3>
          <p>Chaque demande reçue est lue, qualifiée et assignée automatiquement au bon commercial dans le CRM.</p>
          <div class="pillar-usecase__gain">−60% de délai de premier contact</div>
        </div>
      </div>
    </div>

    <!-- flow -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment se déroule une mission</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Audit du besoin</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3L3 5v16l6-2 6 2 6-2V3l-6 2-6-2z"></path><path d="M9 3v16M15 5v16"></path></svg></span><span class="pillar-flow__step-label">Conception du scénario</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span><span class="pillar-flow__step-label">Construction &amp; tests</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg></span><span class="pillar-flow__step-label">Documentation &amp; livraison</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Un scénario Make à concevoir ou un flux existant à fiabiliser ?</p>
      <span class="pillar-mid-cta__connector" aria-hidden="true"></span>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Qu'est-ce que Make exactement ?</h3>
        <p>Make est une plateforme no-code d'automatisation qui permet de connecter des applications entre elles via une interface visuelle, sans écrire de code.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Ai-je besoin d'un compte Make pour que vous travailliez pour moi ?</h3>
        <p>Oui, un compte Make à votre nom est nécessaire : les scénarios développés vous appartiennent dès la livraison, sans dépendance à mon compte personnel.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte un abonnement Make ?</h3>
        <p>Make propose une offre gratuite limitée et des abonnements payants selon le volume d'opérations mensuelles. Le bon palier est déterminé ensemble selon le volume réel de vos scénarios.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte une mission de consultant Make ?</h3>
        <p>Les scénarios simples démarrent autour de 800€. Les projets combinant plusieurs outils et de l'intelligence artificielle se chiffrent après audit, généralement entre 1 500€ et plusieurs milliers d'euros.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je modifier moi-même le scénario une fois livré ?</h3>
        <p>Oui. Chaque scénario est documenté avec un schéma clair de son fonctionnement, pour que vous puissiez le consulter et le faire évoluer, avec ou sans moi.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si un scénario échoue en cours d'exécution ?</h3>
        <p>Une alerte est envoyée automatiquement en cas d'échec, avec les informations nécessaires pour diagnostiquer rapidement la cause plutôt que de découvrir le problème plusieurs jours après.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Make peut-il gérer de gros volumes de données ?</h3>
        <p>Oui, dans la plupart des cas de figure d'une TPE-PME. Pour des volumes très importants ou des besoins d'hébergement spécifiques, <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a> est parfois plus adapté — ce choix est évalué lors de l'audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Make est-il compatible avec l'intelligence artificielle ?</h3>
        <p>Oui. Make se connecte nativement à des modules d'IA pour lire des documents, comprendre des emails ou générer du texte, dans le cadre d'une <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">automatisation IA</a> plus large.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour concevoir un premier scénario ?</h3>
        <p>Un scénario simple se conçoit et se teste en une à deux semaines. Un scénario combinant plusieurs outils et de la logique conditionnelle prend généralement deux à quatre semaines.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Travaillez-vous aussi avec Zapier ?</h3>
        <p>Je me concentre sur Make et <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a>, deux outils qui couvrent l'essentiel des besoins d'automatisation d'une TPE-PME avec un excellent rapport entre coût et puissance.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>" class="pillar-related__pill">Consultant n8n <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="pillar-related__pill">Automatisation Excel <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Voyons ensemble ce que Make peut automatiser chez vous</h2>
      <p>Audit gratuit de 45 minutes, sans jargon ni promesse en l'air.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
