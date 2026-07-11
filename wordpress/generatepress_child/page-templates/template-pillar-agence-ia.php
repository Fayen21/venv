<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Agence IA
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
      <span class="pillar-breadcrumb__current">Agence IA</span>
    </nav>

    <!-- hero -->
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Agence IA vs consultant indépendant</div>
      <h1>Vous cherchez une agence IA ? Voici ce qu'un consultant indépendant peut vous apporter de différent</h1>
      <p class="pillar-hero__intro">Beaucoup de dirigeants commencent leur recherche par « agence IA ». C'est une porte d'entrée logique, mais le terme recouvre des réalités très différentes — et la structure d'un prestataire n'est pas le bon critère de choix pour une automatisation à l'échelle d'une TPE-PME.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-agence-ia.svg' ) ); ?>" alt="Schéma comparatif agence IA vs consultant indépendant : interlocuteur unique, délai de mise en place de 1 à 4 semaines, structure de coûts allégée" width="800" height="212" loading="lazy">
    </div>

    <!-- sections -->
    <div class="pillar-section">
      <h2>Agence IA : ce que ça recouvre en pratique</h2>
      <p>Sous cette même appellation cohabitent des studios spécialisés en développement IA sur mesure, des agences marketing ayant ajouté « IA » à leur offre ces deux dernières années, et des plateformes no-code qui revendent de l'intégration. Le niveau d'expertise métier réelle — comprendre vos processus administratifs, comptables ou RH avant de les automatiser — varie énormément derrière une appellation identique.</p>
      <p>Pour une TPE-PME, <strong>le risque n'est pas de mal choisir une technologie, mais de payer une structure dimensionnée pour des projets bien plus lourds que le vôtre</strong>, avec des coûts de gestion de compte qui ne créent aucune valeur pour votre automatisation.</p>
    </div>

    <div class="pillar-section">
      <h2>Pourquoi un consultant indépendant peut être un meilleur choix pour une TPE-PME</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Un seul interlocuteur du premier échange à la mise en production</strong> — pas de chef de projet qui traduit entre vous et un développeur qui ne vous a jamais parlé.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Une expertise métier réelle (gestion, comptabilité, RH) avant la couche technique : l'automatisation part de votre processus, pas d'une technologie à vendre.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Une <strong>structure de coûts plus légère qu'une agence</strong>, sans marge de gestion de compte ni de commercial à financer.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Une relation dans la durée : c'est la même personne qui a conçu l'automatisation qui la fait évoluer six mois plus tard.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Quand une agence reste le bon choix</h2>
      <p>Il faut être honnête : si votre projet nécessite une équipe pluridisciplinaire sur plusieurs mois — un produit IA à part entière, une infrastructure dédiée, des développements front et back en parallèle — une agence structurée a davantage de sens qu'un consultant seul. Pour l'automatisation ciblée d'un service ou d'un processus métier, en revanche, un consultant indépendant est le plus souvent <strong>plus rapide, plus économique et plus simple à piloter</strong> au quotidien.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je propose, concrètement</h2>
      <p><strong>Un audit gratuit de 45 minutes</strong> pour identifier les automatisations les plus rentables, un chiffrage clair avant tout engagement, une mise en place sur les outils que vous utilisez déjà, et une documentation complète qui vous laisse propriétaire de chaque automatisation livrée. Ce positionnement n'est pas un argument marketing : <a href="<?php echo esc_url( eb_url('apropos') ); ?>">découvrir mon parcours et ma méthode</a> permet de vérifier d'où vient cette approche.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Relances clients automatisées</h3>
          <p>Détection des factures impayées et envoi de relances personnalisées au bon moment, sans oubli.</p>
          <div class="pillar-usecase__gain">−38% de retards de paiement</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Rapprochement bancaire automatisé</h3>
          <p>Connexion banque + comptabilité avec détection automatique des anomalies.</p>
          <div class="pillar-usecase__gain">−85% de temps de rapprochement</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Onboarding RH automatisé</h3>
          <p>Contrat, accès et dossier d'accueil générés dès la validation d'une embauche.</p>
          <div class="pillar-usecase__gain">2 jours gagnés par embauche</div>
        </div>
      </div>
    </div>

    <!-- flow diagram -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment ça s'enchaîne</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 10.8a15.9 15.9 0 0 0 6.6 6.6l2.2-2.2a1.4 1.4 0 0 1 1.4-.35c1.1.35 2.3.55 3.5.55a1.4 1.4 0 0 1 1.4 1.4V20.6a1.4 1.4 0 0 1-1.4 1.4C10.7 22 2 13.3 2 3.4A1.4 1.4 0 0 1 3.4 2H7a1.4 1.4 0 0 1 1.4 1.4c0 1.2.2 2.4.55 3.5.13.46.02.98-.35 1.4z"></path></svg></span><span class="pillar-flow__step-label">Premier échange</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Audit gratuit</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.6 2.6-2-2z"></path></svg></span><span class="pillar-flow__step-label">Mise en place</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg></span><span class="pillar-flow__step-label">Documentation livrée</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Une idée d'automatisation en tête mais pas envie de passer par une grosse structure ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Travaillez-vous seul sur tous les projets ?</h3>
        <p>Oui. De l'audit à la mise en production, vous échangez uniquement avec moi. C'est un choix : cela garantit une compréhension fine de votre activité et évite les pertes d'information entre plusieurs interlocuteurs.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Pouvez-vous gérer un projet de la taille d'un projet d'agence ?</h3>
        <p>Cela dépend du périmètre. L'automatisation d'un service (RH, comptabilité, commercial) ou de plusieurs processus complémentaires est exactement mon terrain. Un projet nécessitant une équipe de développeurs à temps plein sur plusieurs mois dépasse le format d'un consultant indépendant — je vous le dirai franchement lors de l'audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quels sont vos tarifs comparés à une agence ?</h3>
        <p>Les premières automatisations démarrent autour de 800€, une automatisation métier complète autour de 1 500€, les projets sur mesure sont chiffrés après audit. Sans structure commerciale à financer, les coûts restent nettement inférieurs à ceux d'une agence pour un périmètre équivalent.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Comment se passe la collaboration au quotidien ?</h3>
        <p>Après l'audit, vous recevez un chiffrage et un plan d'action. Une fois validé, la mise en place se fait par échanges courts et réguliers, sans comité de pilotage ni reporting inutile.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Est-ce que je risque de dépendre de vous une fois l'automatisation en place ?</h3>
        <p>Non. Chaque scénario, chaque accès et chaque document de documentation vous appartiennent. Vous pouvez faire évoluer ou reprendre l'automatisation avec n'importe quel prestataire, y compris en interne si vous recrutez plus tard.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>" class="pillar-related__pill">Automatisation entreprise <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Parlons de votre projet, sans structure ni intermédiaire</h2>
      <p>45 minutes suffisent pour savoir si un consultant indépendant est le bon format pour vous.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
