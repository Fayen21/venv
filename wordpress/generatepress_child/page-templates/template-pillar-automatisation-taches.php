<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation des tâches
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
      <span class="pillar-breadcrumb__current">Automatisation des tâches</span>
    </nav>

    <!-- hero -->
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation des tâches</div>
      <h1>Automatiser les tâches répétitives : la première étape la plus rentable</h1>
      <p class="pillar-hero__intro">Avant de parler de processus ou de transformation d'entreprise, la plupart des gains de temps commencent par une tâche unique, répétitive, facile à isoler. C'est souvent le meilleur point de départ : rapide à mettre en place, rapide à mesurer, et suffisant pour juger si l'automatisation tient ses promesses avant d'aller plus loin.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-taches.svg' ) ); ?>" alt="Schéma d'automatisation des tâches répétitives : PDF reçu, lecture par OCR et IA, document renommé et classé automatiquement" width="800" height="212" loading="lazy">
    </div>

    <!-- sections -->
    <div class="pillar-section">
      <h2>Pourquoi commencer par les tâches plutôt que par les processus</h2>
      <p>Une tâche automatisée se met en place en quelques jours et son gain se mesure immédiatement — contrairement à un processus complet, qui demande une cartographie plus longue. Pour un dirigeant qui découvre l'automatisation, commencer petit permet de constater un résultat concret avant d'investir dans un projet plus ambitieux.</p>
    </div>

    <div class="pillar-section">
      <h2>Les tâches les plus fréquemment automatisées</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Renommer et classer des fichiers et pièces jointes selon leur contenu.</div>
        <div class="pillar-section__list-item"><span>✓</span>Ressaisir une donnée d'un outil vers un autre (email → CRM, facture → comptabilité).</div>
        <div class="pillar-section__list-item"><span>✓</span>Envoyer une relance ou un rappel à échéance fixe.</div>
        <div class="pillar-section__list-item"><span>✓</span>Mettre à jour un tableau de suivi à partir d'une nouvelle donnée reçue.</div>
        <div class="pillar-section__list-item"><span>✓</span>Extraire une information précise d'un document (montant, date, référence).</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Une tâche automatisée n'est jamais vraiment isolée</h2>
      <p>En observant une tâche de près pour l'automatiser, on découvre presque toujours une inefficacité voisine : la même donnée ressaisie ailleurs, une étape manuelle juste avant ou après — par exemple une facture qui finit par être ressaisie en <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a>. Une automatisation de tâche bien menée devient donc souvent le point d'entrée naturel vers un processus plus large, voire vers un véritable <a href="<?php echo esc_url( eb_url('rpa') ); ?>">robot logiciel</a> une fois la confiance établie.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce qu'il faut pour automatiser une tâche efficacement</h2>
      <div class="pillar-section__sub">
        <h3>Un déclencheur clair</h3>
        <p>Un email reçu, un fichier déposé, une heure fixe : la tâche doit démarrer sur un événement identifiable, sans ambiguïté.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Une règle stable</h3>
        <p>Le traitement à appliquer doit être défini précisément — même s'il fait appel à une lecture IA pour les cas non structurés.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Un format de sortie défini</h3>
        <p>Où va le résultat, sous quelle forme, et qui doit être informé : ces trois questions doivent avoir une réponse avant la mise en place.</p>
      </div>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path></svg></div>
          <h3>Renommage et classement automatique de PDF</h3>
          <p>Chaque facture ou contrat reçu est lu, renommé selon un format standard et rangé dans le bon dossier.</p>
          <div class="pillar-usecase__gain">−72% de temps de saisie</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Mise à jour d'un tableau de suivi commercial</h3>
          <p>Chaque nouvelle opportunité reçue par email ou formulaire met à jour automatiquement le tableau de suivi.</p>
          <div class="pillar-usecase__gain">0 ressaisie</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
          <h3>Envoi de rappels d'échéance</h3>
          <p>Un rappel est envoyé automatiquement avant chaque échéance contractuelle ou de paiement.</p>
          <div class="pillar-usecase__gain">0 échéance manquée</div>
        </div>
      </div>
    </div>

    <!-- flow diagram -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment ça s'enchaîne</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🎯</span><span class="pillar-flow__step-label">Tâche isolée</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">⚡</span><span class="pillar-flow__step-label">Automatisation rapide</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📏</span><span class="pillar-flow__step-label">Gain mesuré</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🔁</span><span class="pillar-flow__step-label">Extension possible</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Une tâche précise qui revient chaque semaine et vous fait perdre du temps ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>À partir de quand ça vaut le coup d'automatiser une tâche ?</h3>
        <p>Dès qu'elle revient régulièrement (au moins hebdomadaire) et suit une règle stable. Une tâche automatisée simple s'amortit généralement en quelques semaines d'usage.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Est-ce que ça remplace un poste ou une personne ?</h3>
        <p>Non. L'objectif est de retirer la partie répétitive d'un poste, pas le poste lui-même. Le temps libéré est généralement réinvesti sur des tâches à plus forte valeur ajoutée — analyse, relation client, suivi qualité.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Une tâche automatisée peut-elle évoluer vers un processus complet plus tard ?</h3>
        <p>Oui, c'est même l'évolution la plus fréquente. Une fois la confiance établie sur une tâche isolée, il devient naturel d'élargir l'automatisation aux étapes voisines jusqu'à couvrir un processus entier.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte l'automatisation d'une tâche unique ?</h3>
        <p>Les automatisations de tâches simples démarrent autour de 800€, avec un déploiement en une à deux semaines. Le montant exact dépend du nombre d'outils impliqués et de la complexité de la règle à appliquer.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps faut-il pour la mettre en place ?</h3>
        <p>Une tâche bien définie, avec un déclencheur et une règle stables, se met en place en quelques jours à deux semaines, tests inclus.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>" class="pillar-related__pill">Automatisation entreprise <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('prospection-automatisee') ); ?>" class="pillar-related__pill">Prospection automatisée <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Quelle tâche vous fait perdre le plus de temps chaque semaine ?</h2>
      <p>45 minutes suffisent pour le savoir, sans engagement.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
