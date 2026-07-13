<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Outil Consultant n8n
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
      <span class="pillar-breadcrumb__current">Consultant n8n</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['consultant-n8n'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Outils · n8n</div>
      <h1>Consultant n8n : automatisation open-source et API sur mesure</h1>
      <p class="pillar-hero__intro">n8n est une plateforme d'automatisation open-source, plus technique que Make, qui offre davantage de souplesse pour des logiques complexes, des connexions API personnalisées ou un hébergement maîtrisé — un critère parfois important pour des données sensibles. En tant que consultant n8n, je conçois des workflows robustes, hébergés selon vos contraintes, et documentés pour rester lisibles dans le temps.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>
    </div>
    </div>

    <div class="pillar-section">
      <h2>Pourquoi choisir n8n plutôt qu'un autre outil</h2>
      <p>n8n se distingue par trois caractéristiques qui comptent pour certaines PME : son code source ouvert permet un audit technique complet si nécessaire, <strong>son modèle d'hébergement peut être auto-géré</strong> (sur votre propre serveur ou une infrastructure choisie par vous) plutôt que systématiquement dans le cloud d'un éditeur, et sa logique de construction plus proche du développement offre une souplesse supérieure pour des workflows non standards.</p>
      <p>Cette flexibilité a une contrepartie : n8n demande une prise en main plus technique que Make. C'est précisément le rôle d'un consultant n8n de construire des workflows fiables sans que vous ayez à maîtriser cette complexité vous-même — <strong>vous récupérez un système qui fonctionne et une documentation claire</strong>, pas une charge technique supplémentaire.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je construis avec n8n</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Workflows connectant des logiciels via API, y compris des outils métier sans connecteur préexistant.</div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Automatisations hébergées sur une infrastructure maîtrisée</strong>, pour les projets avec des contraintes de confidentialité renforcées.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Logiques conditionnelles complexes, avec plusieurs branches de traitement selon le contenu des données.</div>
        <div class="pillar-section__list-item"><span>✓</span>Intégration de modèles d'intelligence artificielle pour la lecture et le traitement de documents non structurés.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Documentation technique complète, pour <strong>une reprise en main éventuelle par une équipe interne</strong>.</span></div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Make ou n8n : comment je fais le choix avec vous</h2>
      <p>Le choix ne dépend jamais d'une préférence personnelle mais du projet : pour une automatisation métier standard, avec des connecteurs déjà disponibles, <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> permet une mise en place plus rapide et une prise en main plus simple pour vos équipes. Pour un besoin d'hébergement spécifique, une API non standard ou une volumétrie importante, n8n devient le meilleur choix. Ce choix est posé et argumenté dès l'audit, avant tout engagement.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets réalisés avec n8n</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Connexion à un logiciel métier sans connecteur natif</h3>
          <p>Un workflow sur mesure construit directement sur l'API du logiciel, là où aucun connecteur prêt à l'emploi n'existait.</p>
          <div class="pillar-usecase__gain">Intégration sur mesure</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Traitement de documents sensibles hébergé en interne</h3>
          <p>Extraction et classement de documents confidentiels sur une infrastructure maîtrisée par l'entreprise.</p>
          <div class="pillar-usecase__gain">Confidentialité renforcée</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><line x1="15.3" y1="15.3" x2="20.5" y2="20.5"></line></svg></div>
          <h3>Contrôle qualité fournisseurs à fort volume</h3>
          <p>Lecture automatique de centaines de certificats de conformité, avec alerte sur documents manquants ou expirés.</p>
          <div class="pillar-usecase__gain">0 certificat manquant non détecté</div>
        </div>
      </div>
    </div>

    <!-- flow -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment se déroule une mission</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Audit du besoin</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 21V9l6-4 6 4v12"></path><path d="M9 21v-6h6v6"></path><path d="M6 21h12"></path></svg></span><span class="pillar-flow__step-label">Choix d'hébergement</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span><span class="pillar-flow__step-label">Construction &amp; tests</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg></span><span class="pillar-flow__step-label">Documentation &amp; livraison</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Un besoin d'automatisation avec des contraintes techniques ou de confidentialité fortes ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Qu'est-ce que n8n exactement ?</h3>
        <p>n8n est une plateforme d'automatisation open-source qui permet de construire des workflows connectant des applications entre elles, avec la possibilité d'un hébergement auto-géré.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Faut-il héberger n8n moi-même ?</h3>
        <p>Non, ce n'est pas obligatoire. n8n propose aussi une offre cloud managée. L'auto-hébergement est une option choisie quand la confidentialité ou la maîtrise technique le justifie.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>n8n est-il plus difficile à utiliser que Make ?</h3>
        <p>La construction initiale est un peu plus technique, mais une fois le workflow livré et documenté, l'usage au quotidien reste simple : vous n'avez pas à toucher à la configuration technique.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte une mission de consultant n8n ?</h3>
        <p>Les workflows standards démarrent autour de 1 000 à 1 500€, un peu au-dessus de Make du fait de la complexité technique. Les projets avec hébergement dédié ou API sur mesure sont chiffrés après audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je faire évoluer le workflow moi-même après la livraison ?</h3>
        <p>Oui, avec de bonnes bases techniques en interne. Sinon, la documentation fournie permet à n'importe quel développeur ou consultant de reprendre le projet facilement.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>n8n convient-il à une petite entreprise sans équipe technique ?</h3>
        <p>Oui, tant que l'hébergement cloud managé est choisi. La complexité technique reste alors de mon ressort ; vous n'avez besoin d'aucune compétence pour utiliser le résultat.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence de coût entre l'hébergement cloud et auto-géré ?</h3>
        <p>L'hébergement cloud managé a un coût d'abonnement mensuel simple. L'auto-hébergement demande un serveur (parfois déjà existant chez vous) mais peut réduire les coûts récurrents à volume élevé — ce choix est évalué ensemble selon votre volumétrie.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>n8n peut-il se connecter à un logiciel métier propriétaire ?</h3>
        <p>Dans la majorité des cas, oui, via son API si elle existe. C'est justement l'un des points forts de n8n : sa flexibilité pour des connexions non standards.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>n8n est-il compatible avec l'intelligence artificielle ?</h3>
        <p>Oui. n8n dispose de nœuds dédiés pour intégrer des modèles de langage dans un workflow, dans le cadre d'une <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">automatisation IA</a> plus large.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour livrer un premier workflow n8n ?</h3>
        <p>Un workflow simple se livre en deux à trois semaines. Un projet avec hébergement dédié ou connexions API sur mesure prend généralement trois à six semaines.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>" class="pillar-related__pill">Consultant Make <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Un projet technique qui dépasse les outils no-code classiques ?</h2>
      <p>Audit gratuit de 45 minutes pour évaluer la meilleure approche.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
