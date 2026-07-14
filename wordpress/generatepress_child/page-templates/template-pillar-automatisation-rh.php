<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation RH
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
      <span class="pillar-breadcrumb__current">Automatisation RH</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed eb-hero-fx--dim-halo">
    <?php eb_hero_fx( eb_hero_fx_effects()['automatisation-rh'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation RH</div>
      <h1>Automatisation RH : de l'onboarding à la paie, sans ressaisie</h1>
      <p class="pillar-hero__intro">Onboarding salarié, gestion des congés, préparation de la paie, signature électronique des contrats : la gestion RH d'une TPE-PME repose encore souvent sur des échanges d'emails et des tableurs. <strong>Un workflow RH automatisé connecte ces étapes entre elles</strong>, sans ajouter de logiciel supplémentaire à gérer.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-rh.svg' ) ); ?>" alt="Schéma d'automatisation RH : embauche validée, contrat généré et signé électroniquement, accès et dossier salarié créés" width="800" height="212" loading="lazy">
    </div>
    </div>
    </div>

    <!-- le problème -->
    <div class="pillar-section">
      <h2>Le problème : la gestion RH se disperse entre emails et tableurs</h2>
      <p>Une embauche déclenche une série de tâches administratives — contrat, accès aux outils, dossier d'accueil, déclarations — souvent réalisées manuellement, dans l'ordre où elles reviennent en mémoire plutôt que selon un processus fiable. Résultat : <strong>des oublis, des délais qui s'allongent</strong>, et un salarié qui arrive sans que tout soit prêt.</p>
      <p>La gestion des congés et la préparation de la paie suivent le même schéma : demandes par email, décompte manuel dans un tableur, variables de paie collectées service par service. Un recrutement automatisé et un workflow RH structuré éliminent cette dispersion sans nécessiter une nouvelle plateforme RH complexe.</p>
    </div>

    <!-- pourquoi automatiser -->
    <div class="pillar-section">
      <h2>Pourquoi automatiser sa gestion RH</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>L'onboarding salarié devient un parcours fiable</strong> : contrat, accès et dossier d'accueil prêts avant le premier jour.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>La signature électronique élimine les allers-retours papier et accélère la finalisation des contrats.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>La gestion des congés se synchronise automatiquement avec le logiciel de paie, <strong>sans ressaisie</strong>.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Le recrutement automatisé qualifie et trie les candidatures reçues, sans que rien ne se perde entre email et tableur.</div>
      </div>
    </div>

    <!-- bénéfices -->
    <div class="pillar-section">
      <h2>Bénéfices concrets pour votre entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Des arrivées de salariés préparées en heures plutôt qu'en jours</strong>, sans oubli d'accès ou de document.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Des variables de paie collectées et consolidées automatiquement avant chaque échéance.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Une équipe RH qui passe <strong>moins de temps sur l'administratif répétitif</strong> et davantage sur l'accompagnement des équipes.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Une traçabilité complète des demandes de congés et des documents signés, sans classeur ni fil d'emails à retrouver.</div>
      </div>
    </div>

    <!-- exemples concrets -->
    <div class="pillar-usecases">
      <h2>Exemples concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Onboarding automatisé</h3>
          <p>Contrat généré et envoyé en signature électronique, accès créés et dossier d'accueil constitué dès la validation de l'embauche.</p>
          <div class="pillar-usecase__gain">2 jours gagnés par embauche</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
          <h3>Gestion des congés synchronisée</h3>
          <p>Demande, validation et décompte des congés automatiquement répercutés sur le logiciel de paie, sans ressaisie.</p>
          <div class="pillar-usecase__gain">0 erreur de décompte</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"></rect><path d="M3 7l9 6 9-6"></path></svg></div>
          <h3>Recrutement automatisé</h3>
          <p>Chaque candidature reçue est classée, associée à une offre et son statut mis à jour automatiquement.</p>
          <div class="pillar-usecase__gain">0 candidature perdue</div>
        </div>
      </div>
    </div>

    <!-- outils concernés -->
    <div class="pillar-section">
      <h2>Outils concernés</h2>
      <p>L'automatisation RH s'appuie sur vos outils actuels de paie, de signature et de suivi des candidatures.</p>
      <div class="tool-chip-grid">
        <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('outlook'); ?><span class="tool-chip__label">Outlook</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('excel'); ?><span class="tool-chip__label">Excel</span><?php echo eb_tool_chevron(); ?></a>
        <div class="tool-chip"><?php echo eb_tool_icon_html('notion'); ?><span class="tool-chip__label">Notion</span></div>
        <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('make'); ?><span class="tool-chip__label">Make</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('n8n'); ?><span class="tool-chip__label">n8n</span><?php echo eb_tool_chevron(); ?></a>
        <div class="tool-chip"><?php echo eb_tool_icon_html('docusign'); ?><span class="tool-chip__label">DocuSign</span></div>
      </div>
    </div>

    <!-- comment nous intervenons -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment nous intervenons</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M8.5 12.5l2.3 2.3 4.7-4.8"></path></svg></span><span class="pillar-flow__step-label">Embauche validée</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5z"></path></svg></span><span class="pillar-flow__step-label">Contrat signé électroniquement</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="15" r="4"></circle><path d="M11 12l8-8M16 7l2 2M13 10l2 2"></path></svg></span><span class="pillar-flow__step-label">Accès créés</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path></svg></span><span class="pillar-flow__step-label">Dossier salarié prêt</span></div>
      </div>
    </div>

    <!-- avant / après -->
    <div class="pillar-compare">
      <h2>Avant / après automatisation RH</h2>
      <div class="pillar-compare__grid">
        <div class="pillar-compare__col pillar-compare__col--before">
          <div class="pillar-compare__label">Avant</div>
          <div class="pillar-compare__item"><span>×</span>Contrat, accès et dossier d'accueil préparés à la main</div>
          <div class="pillar-compare__item"><span>×</span>Demandes de congés gérées par email et décomptées dans un tableur</div>
          <div class="pillar-compare__item"><span>×</span>Variables de paie collectées service par service, en fin de mois</div>
          <div class="pillar-compare__item"><span>×</span>Candidatures dispersées entre boîte mail et tableur</div>
        </div>
        <div class="pillar-compare__col pillar-compare__col--after">
          <div class="pillar-compare__label">Après</div>
          <div class="pillar-compare__item"><span>✓</span>Contrat, accès et dossier prêts dès la validation de l'embauche</div>
          <div class="pillar-compare__item"><span>✓</span>Congés synchronisés automatiquement avec la paie</div>
          <div class="pillar-compare__item"><span>✓</span>Variables de paie consolidées en continu</div>
          <div class="pillar-compare__item"><span>✓</span>Candidatures classées et suivies automatiquement</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Vos process RH reposent encore sur des emails et des tableurs ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Qu'est-ce que l'automatisation RH change concrètement ?</h3>
        <p>Elle connecte les étapes déjà existantes de votre gestion RH — validation d'embauche, signature de contrat, création d'accès, décompte de congés — pour qu'elles s'enchaînent automatiquement, sans ressaisie ni oubli entre chaque étape.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>La signature électronique a-t-elle une valeur légale ?</h3>
        <p>Oui, <strong>la signature électronique est reconnue juridiquement en France</strong> dès lors qu'elle passe par un prestataire certifié. Elle s'intègre au workflow RH pour accélérer la finalisation des contrats sans étape papier.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Faut-il un logiciel de paie spécifique pour automatiser la gestion RH ?</h3>
        <p>Non. <strong>L'automatisation se construit autour de votre logiciel de paie actuel</strong> : elle alimente les variables et les décomptes de congés automatiquement, sans imposer de changement d'outil.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Le recrutement automatisé remplace-t-il le recruteur ?</h3>
        <p>Non. Il prend en charge le tri, le classement et le suivi de statut des candidatures — la décision de recruter reste humaine. L'objectif est de ne plus perdre de candidature dans un fil d'emails.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Mes données RH restent-elles confidentielles ?</h3>
        <p>Oui. L'automatisation s'appuie sur vos outils existants et leurs propres garanties de sécurité ; aucune donnée RH n'est revendue ni exposée à un tiers non prévu dans votre chaîne d'outils.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Combien de temps votre gestion RH pourrait-elle vous faire gagner ?</h2>
      <p>45 minutes suffisent pour identifier les automatisations RH les plus rentables pour votre équipe.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
