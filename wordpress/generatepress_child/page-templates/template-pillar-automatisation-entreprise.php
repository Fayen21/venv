<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation entreprise
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
      <span class="pillar-breadcrumb__current">Automatisation entreprise</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['automatisation-entreprise'] ); ?>
    <div class="eb-hero-fx__inner">
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
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-entreprise.svg' ) ); ?>" alt="Schéma d'automatisation d'entreprise : onboarding RH, rapprochement bancaire comptable, suivi CRM et reporting automatisés" width="800" height="258" loading="lazy">
    </div>
    </div>
    </div>

    <!-- sections -->
    <div class="pillar-section">
      <h2>Automatiser une entreprise, ce n'est pas automatiser au hasard</h2>
      <p>L'erreur la plus fréquente consiste à acheter un outil tendance avant d'avoir cartographié où part réellement le temps de l'équipe. Un logiciel puissant mal ciblé n'apporte aucun gain — il ajoute même une charge d'apprentissage. <strong>La bonne séquence est inverse</strong> : identifier les tâches et processus les plus chronophages, puis choisir l'outil ou le scénario d'automatisation adapté à chacun.</p>
    </div>

    <div class="pillar-section">
      <h2>Les services où l'automatisation rapporte le plus dans une TPE-PME</h2>
      <div class="pillar-section__sub">
        <h3>RH</h3>
        <p>L'onboarding est souvent le premier gain visible : contrat, accès et dossier d'accueil générés dès la validation d'une embauche, <strong>au lieu de deux jours de préparation manuelle</strong> dispersée sur plusieurs outils. Voir le détail de l'<a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>">automatisation RH</a>.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Comptabilité et finance</h3>
        <p>Rapprochement bancaire automatisé, relances clients personnalisées, détection d'anomalies avant clôture : c'est souvent <strong>le service avec le ratio gain de temps / effort de mise en place le plus élevé</strong>. Voir le détail de l'<a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a>.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Commercial et CRM</h3>
        <p>Chaque demande entrante devient automatiquement une fiche et une tâche de suivi, sans ressaisie ni prospect oublié entre la boîte mail et le CRM. Voir le détail de l'<a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">automatisation CRM</a>.</p>
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

    <div class="pillar-section">
      <h2>Le coût réel de l'inaction</h2>
      <p>Une entreprise qui ne mesure pas le temps perdu en tâches répétitives ne le voit pas disparaître pour autant : il se déplace, dilué dans les journées de chacun. À raison de <strong>5 heures par semaine</strong> passées sur des ressaisies évitables — une estimation basse pour une PME de 15 à 25 salariés — ce sont <strong>environ 240 heures par an, soit l'équivalent de six semaines de travail à temps plein</strong>, immobilisées sur des tâches sans valeur ajoutée. À cela s'ajoute un coût plus difficile à chiffrer mais tout aussi réel : les erreurs de saisie non détectées, les relances oubliées qui coûtent un client, les décisions prises sur un tableau de bord obsolète de plusieurs semaines. Attendre « le bon moment » pour automatiser revient souvent à laisser ce coût s'accumuler silencieusement pendant que des concurrents, eux, ont déjà commencé.</p>
      <p>Le raisonnement inverse est tout aussi important : il n'est pas nécessaire d'attendre une grande transformation digitale pour démarrer. <strong>La bonne approche est incrémentale</strong> — une automatisation ciblée, un gain mesuré, puis la suivante — plutôt qu'un grand projet qui repousse indéfiniment le premier résultat concret.</p>
    </div>

    <div class="pillar-section">
      <h2>Erreurs fréquentes à éviter</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item pillar-section__list-item--bad"><span>✕</span>Choisir l'outil avant d'avoir cartographié le temps réellement perdu, au risque de payer pour une automatisation qui ne sert presque personne.</div>
        <div class="pillar-section__list-item pillar-section__list-item--bad"><span>✕</span>Vouloir tout automatiser en même temps plutôt que de sécuriser un premier gain rapide et mesurable.</div>
        <div class="pillar-section__list-item pillar-section__list-item--bad"><span>✕</span>Négliger les cas particuliers et les exceptions, qui finissent par représenter plus de travail correctif que la tâche automatisée n'en faisait gagner.</div>
        <div class="pillar-section__list-item pillar-section__list-item--bad"><span>✕</span>Ne pas impliquer les équipes concernées, ce qui génère de la résistance au changement même quand l'automatisation leur profite directement.</div>
        <div class="pillar-section__list-item pillar-section__list-item--bad"><span>✕</span><span>Confondre automatisation et migration d'outil : <strong>dans la grande majorité des cas, vos logiciels actuels suffisent</strong>.</span></div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Bonnes pratiques pour réussir un projet d'automatisation d'entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Démarrer par un audit transverse, même léger, pour comparer objectivement les services entre eux plutôt que de deviner.</div>
        <div class="pillar-section__list-item"><span>✓</span>Choisir le premier chantier sur un critère simple : gain de temps élevé et mise en œuvre rapide, pour prouver la valeur avant d'élargir le périmètre.</div>
        <div class="pillar-section__list-item"><span>✓</span>Documenter chaque automatisation dès sa mise en place, pour rester autonome et pouvoir la faire évoluer sans dépendance.</div>
        <div class="pillar-section__list-item"><span>✓</span>Mesurer le temps réellement récupéré après quelques semaines d'usage, pas seulement le gain théorique annoncé au départ.</div>
        <div class="pillar-section__list-item"><span>✓</span>Garder un point de contrôle humain sur les décisions sensibles (paiement, RH, engagement contractuel), même une fois l'automatisation en place.</div>
      </div>
    </div>

    <!-- comparatif par service -->
    <div class="pillar-table">
      <h2>Comparatif : gain de temps par service</h2>
      <div class="pillar-table__wrap">
        <table>
          <thead>
            <tr><th>Service</th><th>Gain de temps observé</th><th>Complexité de mise en place</th><th>Délai type</th></tr>
          </thead>
          <tbody>
            <tr><td>Relances clients &amp; comptabilité</td><td>≈ 1 journée / mois</td><td>Faible</td><td>1 à 2 semaines</td></tr>
            <tr><td>Onboarding RH</td><td>2 jours → 2 heures / embauche</td><td>Moyenne</td><td>2 à 3 semaines</td></tr>
            <tr><td>CRM &amp; suivi commercial</td><td>0 prospect oublié</td><td>Moyenne</td><td>2 à 4 semaines</td></tr>
            <tr><td>Reporting multi-outils</td><td>Tableaux toujours à jour</td><td>Moyenne à élevée</td><td>3 à 4 semaines</td></tr>
            <tr><td>Documents &amp; tâches administratives</td><td>≈ 5 à 10 h / semaine</td><td>Faible à moyenne</td><td>1 à 2 semaines</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- avant / après -->
    <div class="pillar-compare">
      <h2>Avant / après une automatisation d'entreprise bien menée</h2>
      <div class="pillar-compare__grid">
        <div class="pillar-compare__col pillar-compare__col--before">
          <div class="pillar-compare__label">Avant</div>
          <div class="pillar-compare__item"><span>×</span>Chaque service travaille avec ses propres tableurs, sans vision d'ensemble</div>
          <div class="pillar-compare__item"><span>×</span>Le temps perdu est ressenti mais jamais chiffré</div>
          <div class="pillar-compare__item"><span>×</span>Les automatisations sont décidées au coup par coup, sans priorisation</div>
        </div>
        <div class="pillar-compare__col pillar-compare__col--after">
          <div class="pillar-compare__label">Après</div>
          <div class="pillar-compare__item"><span>✓</span>Un plan d'action priorisé service par service, avec un gain estimé pour chacun</div>
          <div class="pillar-compare__item"><span>✓</span>Chaque automatisation mesurée sur le temps réellement récupéré</div>
          <div class="pillar-compare__item"><span>✓</span>Une entreprise qui garde la main sur ses outils et sa documentation</div>
        </div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Automatisation d'entreprise et RGPD : ce qu'il faut savoir</h2>
      <p>Automatiser la circulation de données RH, commerciales ou comptables entre plusieurs outils soulève naturellement la question du RGPD. La règle de base reste simple : l'automatisation ne fait que déplacer et traiter des données déjà présentes dans vos outils existants, selon des règles définies avec vous — elle ne crée pas de nouvelle collecte de données ni de nouvelle finalité de traitement. Chaque scénario est conçu pour rester dans le périmètre d'utilisation que vous avez déjà défini avec vos outils (CRM, RH, comptabilité), sans transfert vers un tiers non prévu.</p>
      <p>Sur les données les plus sensibles (santé, données bancaires, informations RH confidentielles), un point de vigilance particulier est appliqué dès la conception : minimiser les données transmises à chaque étape et privilégier, quand c'est pertinent, un hébergement plus maîtrisé — un sujet approfondi sur la page <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">consultant n8n</a>.</p>
    </div>

    <div class="pillar-section">
      <h2>Les outils qui reviennent le plus souvent</h2>
      <p>À l'échelle d'une entreprise entière, trois briques reviennent dans la quasi-totalité des projets : <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a> comme point d'entrée ou de sortie de nombreux processus, <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>">Outlook</a> pour le traitement des emails entrants, et l'écosystème <a href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>">Microsoft 365</a> qui relie souvent les deux. Côté orchestration, je m'appuie selon les cas sur <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> ou sur <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a> pour connecter ces outils entre eux sans développement lourd.</p>
    </div>

    <div class="pillar-section">
      <h2>Indicateurs à suivre pour piloter votre automatisation d'entreprise</h2>
      <p>Un projet d'automatisation qui n'est pas mesuré finit toujours par être remis en question, même quand il fonctionne bien — parce que personne ne peut plus prouver sa valeur après quelques mois. Quatre indicateurs simples suffisent dans la grande majorité des cas : le temps hebdomadaire réellement récupéré par service, le nombre d'erreurs ou d'oublis évités (relances manquées, doublons, écritures incorrectes), le délai de traitement d'une tâche avant et après automatisation, et le taux d'adoption réel par les équipes concernées. Ce dernier point est souvent négligé : une automatisation techniquement parfaite mais contournée par les équipes n'apporte aucun gain réel.</p>
      <p>Ces indicateurs se collectent facilement sans outil supplémentaire — un simple relevé avant et après suffit — et permettent de justifier objectivement la suite du plan d'action, service par service, plutôt que de décider à l'instinct.</p>
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
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Audit transverse</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></span><span class="pillar-flow__step-label">Priorisation par gain</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.6 2.6-2-2z"></path></svg></span><span class="pillar-flow__step-label">Déploiement service par service</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"></path><path d="M15 7h6v6"></path></svg></span><span class="pillar-flow__step-label">Résultats mesurés</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Vous ne savez pas par quel service commencer ?</p>
      <span class="pillar-mid-cta__connector" aria-hidden="true"></span>
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
      <div class="pillar-faq__item">
        <h3>Quel est le coût réel de ne rien faire ?</h3>
        <p>Difficile à voir au quotidien, mais facile à calculer : quelques heures perdues chaque semaine par plusieurs personnes représentent souvent plusieurs semaines de travail cumulées sur une année, sans compter les erreurs et les opportunités manquées faute de suivi.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Faut-il un projet global ou peut-on commencer petit ?</h3>
        <p>Il vaut presque toujours mieux commencer petit. Une automatisation ciblée, mesurée, puis étendue progressivement limite le risque et permet de prouver la valeur avant d'investir davantage.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Travaillez-vous avec des entreprises de tous secteurs ?</h3>
        <p>Oui. Les processus administratifs, RH, comptables et commerciaux se ressemblent fortement d'un secteur à l'autre — services, industrie, commerce, conseil — même si les outils spécifiques varient.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si l'automatisation ne fonctionne pas comme prévu ?</h3>
        <p>Chaque automatisation est testée sur des cas réels avant sa mise en production, avec une phase d'ajustement. Si un scénario ne tient pas la route, il est révisé ou simplifié plutôt que déployé tel quel.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je automatiser un seul service sans engager toute l'entreprise ?</h3>
        <p>Oui, c'est même l'approche la plus courante. Rien n'oblige à traiter tous les services en même temps : chaque automatisation est indépendante et peut s'arrêter là où vous le souhaitez.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quels outils utilisez-vous le plus souvent à l'échelle d'une entreprise ?</h3>
        <p>Le plus souvent <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a> et <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>">Outlook</a> comme points d'entrée, orchestrés avec <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> ou <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a> selon la complexité du projet.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Qui reste propriétaire des automatisations mises en place ?</h3>
        <p>Vous. Les accès, les scénarios et la documentation vous appartiennent dès la livraison ; vous pouvez les faire évoluer avec n'importe quel prestataire, y compris en interne par la suite.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Comment se déroule la première prise de contact ?</h3>
        <p>Par un audit gratuit de 45 minutes, sans engagement : vous présentez vos tâches les plus chronophages, j'identifie celles qui seraient les plus rentables à automatiser et vous repartez avec des pistes concrètes.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Une petite entreprise a-t-elle vraiment besoin d'automatiser plusieurs services ?</h3>
        <p>Cela dépend de sa taille et de son organisation. Dès qu'une même tâche revient chaque semaine dans plusieurs services (relances, saisies, suivis), l'effet cumulé justifie souvent une approche transverse plutôt que des correctifs isolés.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>" class="pillar-related__pill">Automatisation des tâches <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="pillar-related__pill">Automatisation RH <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('prospection-automatisee') ); ?>" class="pillar-related__pill">Prospection automatisée <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="pillar-related__pill">Automatisation Excel <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>" class="pillar-related__pill">Automatisation Outlook <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>" class="pillar-related__pill">Automatisation Microsoft 365 <span>→</span></a>
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
