<?php
/**
 * Template Name: EB — Pilier Automatisation entreprise
 */
?>
<?php get_header(); ?>
<main>
  <div class="pillar-wrap">

    <!-- breadcrumb -->
    <nav class="pillar-breadcrumb" aria-label="Fil d'Ariane">
      <a href="<?php echo esc_url( eb_url('index') ); ?>">Accueil</a>
      <span>／</span>
      <a href="<?php echo esc_url( eb_url('solutions') ); ?>">Expertises</a>
      <span>／</span>
      <span class="pillar-breadcrumb__current">Automatisation entreprise</span>
    </nav>

    <!-- hero -->
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation entreprise</div>
      <h1>Automatiser son entreprise : par où commencer et jusqu'où aller</h1>
      <p class="pillar-hero__intro">Automatiser une entreprise, ce n'est pas empiler des outils no-code service par service. C'est une démarche qui part d'un diagnostic du temps perdu, se priorise selon le gain réel, puis se déploie progressivement sans jamais déstabiliser le fonctionnement existant.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <div class="pillar-mock__titlebar">
        <div class="pillar-mock__dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
        <span class="pillar-mock__file">audit_transverse · diagnostic</span>
        <span class="pillar-mock__live"><span class="pillar-mock__live-dot"></span>actif</span>
      </div>
      <div class="pillar-mock__body">
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#3BA5FF;"></span><span class="pillar-mock__label">RH — onboarding</span><span class="pillar-mock__val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">2j → 2h</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5BCB8B;"></span><span class="pillar-mock__label">Comptabilité — rapprochement</span><span class="pillar-mock__val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">−85% de temps</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5BCB8B;"></span><span class="pillar-mock__label">Commercial — CRM</span><span class="pillar-mock__val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">0 prospect oublié</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5e6f8c;"></span><span class="pillar-mock__label">Reporting</span><span class="pillar-mock__val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">auto mis à jour</span></div>
      </div>
    </div>

    <!-- sections -->
    <div class="pillar-section">
      <h2>Automatiser une entreprise, ce n'est pas automatiser au hasard</h2>
      <p>L'erreur la plus fréquente consiste à acheter un outil tendance avant d'avoir cartographié où part réellement le temps de l'équipe. Un logiciel puissant mal ciblé n'apporte aucun gain — il ajoute même une charge d'apprentissage. La bonne séquence est inverse : identifier les tâches et processus les plus chronophages, puis choisir l'outil ou le scénario d'automatisation adapté à chacun.</p>
    </div>

    <div class="pillar-section">
      <h2>Les services où l'automatisation rapporte le plus dans une TPE-PME</h2>
      <div class="pillar-section__sub">
        <h3>RH</h3>
        <p>L'onboarding est souvent le premier gain visible : contrat, accès et dossier d'accueil générés dès la validation d'une embauche, au lieu de deux jours de préparation manuelle dispersée sur plusieurs outils.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Comptabilité et finance</h3>
        <p>Rapprochement bancaire automatisé, relances clients personnalisées, détection d'anomalies avant clôture : c'est souvent le service avec le ratio gain de temps / effort de mise en place le plus élevé.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Commercial et CRM</h3>
        <p>Chaque demande entrante devient automatiquement une fiche et une tâche de suivi, sans ressaisie ni prospect oublié entre la boîte mail et le CRM.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Reporting</h3>
        <p>Des tableaux de bord alimentés automatiquement depuis vos différents outils, sans reconstruction manuelle chaque semaine dans Excel.</p>
      </div>
    </div>

    <div class="pillar-section">
      <h2>La méthode que j'applique à l'échelle de l'entreprise</h2>
      <p>Un audit transverse plutôt qu'un audit limité à un seul service, pour ne pas manquer une automatisation à fort impact ailleurs. Une priorisation par gain horaire réel et facilité de mise en œuvre, pas par nouveauté technologique. Un déploiement service par service, pour que chaque automatisation soit adoptée avant de passer à la suivante. Et une mesure du temps effectivement récupéré, pas seulement promis.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que ça change dans la gestion au quotidien</h2>
      <p>L'effet se cumule : moins d'erreurs de saisie, une vision plus fiable de la trésorerie, des décisions prises sur des chiffres à jour plutôt que sur un tableur reconstruit à la main. Le bénéfice le plus sous-estimé n'est pas le temps gagné sur une tâche isolée, mais la disparition progressive des petits irritants qui, cumulés sur une année, représentent souvent plusieurs semaines de travail.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Reporting consolidé multi-outils</h3>
          <p>Les données de plusieurs logiciels (CRM, comptabilité, RH) alimentent un tableau de bord unique mis à jour automatiquement.</p>
          <div class="pillar-usecase__gain">Données toujours à jour</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Cycle commande → facturation</h3>
          <p>De la commande client à la facture envoyée, chaque étape déclenche automatiquement la suivante.</p>
          <div class="pillar-usecase__gain">0 étape oubliée</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Suivi RH et variables de paie</h3>
          <p>Congés, absences et variables de paie centralisés et transmis automatiquement avant chaque échéance.</p>
          <div class="pillar-usecase__gain">Paie préparée sans relance</div>
        </div>
      </div>
    </div>

    <!-- flow diagram -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment ça s'enchaîne</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🔎</span><span class="pillar-flow__step-label">Audit transverse</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📊</span><span class="pillar-flow__step-label">Priorisation par gain</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🛠️</span><span class="pillar-flow__step-label">Déploiement service par service</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📈</span><span class="pillar-flow__step-label">Résultats mesurés</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Vous ne savez pas par quel service commencer ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Recevoir un plan d'action <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Quel est le coût pour automatiser toute une entreprise ?</h3>
        <p>Il n'y a pas de forfait unique : chaque service se chiffre séparément après audit, entre 800€ pour une automatisation ciblée et plusieurs milliers d'euros pour un projet transverse. L'audit gratuit permet d'obtenir une estimation précise avant tout engagement.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour automatiser l'ensemble d'une entreprise ?</h3>
        <p>Cela dépend du nombre de services concernés, mais chaque automatisation individuelle se déploie en une à quatre semaines. Un plan d'ensemble s'étale généralement sur plusieurs mois, service par service, pour rester maîtrisé.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Par quel service faut-il commencer ?</h3>
        <p>Celui où le temps perdu est le plus visible et le plus facilement quantifiable — souvent les relances clients ou le rapprochement bancaire. L'audit permet d'objectiver ce choix plutôt que de le deviner.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Les équipes risquent-elles de mal accepter ces changements ?</h3>
        <p>C'est une préoccupation légitime. L'automatisation vise à retirer les tâches répétitives, pas les responsabilités : les équipes gagnent du temps sur la saisie pour se concentrer sur l'analyse et la relation client, ce qui est généralement bien accueilli une fois expliqué.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Comment mesurer le retour sur investissement ?</h3>
        <p>Chaque automatisation est chiffrée sur un gain de temps mesurable (heures récupérées par semaine ou par mois). Rapporté au coût de mise en place, le retour sur investissement se calcule simplement et se vérifie après quelques semaines d'usage réel.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>" class="pillar-related__pill">Automatisation des tâches <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Voyons quels services de votre entreprise gagneraient le plus de temps</h2>
      <p>Audit gratuit de 45 minutes, sans engagement.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
