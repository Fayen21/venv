<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier RPA
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
      <span class="pillar-breadcrumb__current">RPA</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['rpa'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">RPA — Robotic Process Automation</div>
      <h1>RPA : un robot logiciel pour vos tâches documentaires répétitives</h1>
      <p class="pillar-hero__intro">La RPA (Robotic Process Automation) consiste à confier à un robot logiciel les tâches répétitives et réglées qu'un collaborateur exécute aujourd'hui à la main : lire un document, en extraire des données, les reporter dans un autre outil. Combinée à l'<a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">OCR</a> pour l'<a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">extraction PDF</a> et la lecture automatique de documents, elle couvre l'essentiel du traitement documentaire d'une TPE-PME.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-rpa.svg' ) ); ?>" alt="Schéma RPA : document reçu, données extraites par OCR, reporté automatiquement dans l'outil métier" width="800" height="212" loading="lazy">
    </div>
    </div>
    </div>

    <!-- le problème -->
    <div class="pillar-section">
      <h2>Le problème : des tâches répétitives qui n'ont pas besoin d'un humain</h2>
      <p>Beaucoup de tâches administratives suivent une règle stricte et prévisible : ouvrir un document, y relever une information à un endroit précis, la reporter dans un tableur ou un logiciel métier. Ce n'est pas un travail qui demande du jugement — mais tant qu'il est fait à la main, <strong>il consomme du temps et reste exposé aux erreurs de saisie</strong> et aux oublis.</p>
      <p>Le traitement documentaire (factures, bons de commande, relevés, formulaires) illustre bien ce problème : <strong>le volume de documents à traiter augmente avec l'activité</strong>, alors que le temps disponible pour les traiter, lui, n'augmente pas.</p>
    </div>

    <!-- pourquoi automatiser -->
    <div class="pillar-section">
      <h2>Pourquoi mettre en place de la RPA</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span>Cette automatisation robotisée des processus <strong>exécute la même règle des centaines de fois sans fatigue ni erreur</strong> d'inattention.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>L'OCR et l'extraction PDF suppriment la ressaisie manuelle de données déjà présentes dans un document.</div>
        <div class="pillar-section__list-item"><span>✓</span>La lecture automatique de documents s'adapte à des mises en page variées, pas seulement à un modèle unique.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Le volume de documents traités peut <strong>augmenter sans augmenter la charge de travail</strong> de l'équipe.</span></div>
      </div>
    </div>

    <!-- bénéfices -->
    <div class="pillar-section">
      <h2>Bénéfices concrets pour votre entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span>Un <strong>traitement documentaire fiable</strong>, sans erreur de report entre deux outils.</span></div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Des délais de traitement raccourcis, d'heures à minutes</strong> selon le volume.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Une équipe recentrée sur les cas particuliers, pendant que le robot logiciel gère les cas standards.</div>
        <div class="pillar-section__list-item"><span>✓</span>Une traçabilité complète de chaque document traité, utile en cas de contrôle.</div>
      </div>
    </div>

    <!-- exemples concrets -->
    <div class="pillar-usecases">
      <h2>Exemples concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Tri et classement automatique des emails</h3>
          <p>Chaque email entrant est lu, ses pièces jointes analysées, puis classé et transformé en tâche de suivi si nécessaire.</p>
          <div class="pillar-usecase__gain">−70% de tri manuel</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
          <h3>Extraction de données PDF</h3>
          <p>Montants, dates, références extraits automatiquement depuis des bons de commande ou formulaires PDF, puis reportés dans votre outil.</p>
          <div class="pillar-usecase__gain">−72% de temps de saisie</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"></rect><path d="M8 11V7a4 4 0 0 1 8 0v4"></path></svg></div>
          <h3>Contrôle qualité fournisseurs</h3>
          <p>Certificats de conformité reçus par email, lus automatiquement, avec alerte en cas de document manquant ou expiré.</p>
          <div class="pillar-usecase__gain">0 certificat manquant non détecté</div>
        </div>
      </div>
    </div>

    <!-- outils concernés -->
    <div class="pillar-section">
      <h2>Outils concernés</h2>
      <p>La RPA s'appuie sur des outils d'orchestration et de lecture de documents, connectés à vos logiciels existants.</p>
      <div class="tool-chip-grid">
        <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('make'); ?><span class="tool-chip__label">Make</span><span class="tool-chip__chevron" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span></a>
        <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('n8n'); ?><span class="tool-chip__label">n8n</span><span class="tool-chip__chevron" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span></a>
        <div class="tool-chip"><?php echo eb_tool_icon_html('python'); ?><span class="tool-chip__label">Python</span></div>
        <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('outlook'); ?><span class="tool-chip__label">Outlook</span><span class="tool-chip__chevron" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('excel'); ?><span class="tool-chip__label">Excel</span><span class="tool-chip__chevron" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span></a>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#111111;color:#fff;">{}</span><span class="tool-chip__label">API REST</span></div>
      </div>
    </div>

    <!-- comment nous intervenons -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment nous intervenons</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg></span><span class="pillar-flow__step-label">Document reçu</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="8" width="16" height="11" rx="3"></rect><circle cx="9" cy="13.5" r="1.2"></circle><circle cx="15" cy="13.5" r="1.2"></circle><path d="M12 8V4M9 4h6"></path></svg></span><span class="pillar-flow__step-label">Lu par le robot logiciel</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Données extraites (OCR)</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M8.5 12.5l2.3 2.3 4.7-4.8"></path></svg></span><span class="pillar-flow__step-label">Reporté dans votre outil</span></div>
      </div>
    </div>

    <!-- avant / après -->
    <div class="pillar-compare">
      <h2>Avant / après RPA</h2>
      <div class="pillar-compare__grid">
        <div class="pillar-compare__col pillar-compare__col--before">
          <div class="pillar-compare__label">Avant</div>
          <div class="pillar-compare__item"><span>×</span>Documents ouverts et lus un par un, manuellement</div>
          <div class="pillar-compare__item"><span>×</span>Données reportées à la main dans le logiciel métier</div>
          <div class="pillar-compare__item"><span>×</span>Volume de documents limité par le temps disponible</div>
          <div class="pillar-compare__item"><span>×</span>Erreurs de report détectées tardivement</div>
        </div>
        <div class="pillar-compare__col pillar-compare__col--after">
          <div class="pillar-compare__label">Après</div>
          <div class="pillar-compare__item"><span>✓</span>Documents lus et traités automatiquement par le robot logiciel</div>
          <div class="pillar-compare__item"><span>✓</span>Données reportées sans intervention manuelle</div>
          <div class="pillar-compare__item"><span>✓</span>Volume traité indépendant du temps disponible en interne</div>
          <div class="pillar-compare__item"><span>✓</span>Anomalies signalées avant qu'elles ne posent problème</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Une tâche documentaire répétitive vous fait perdre du temps chaque semaine ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Qu'est-ce que la RPA exactement ?</h3>
        <p>La RPA (Robotic Process Automation) désigne l'automatisation de tâches répétitives via un « robot logiciel » qui reproduit des actions numériques réglées — lire, extraire, saisir, transférer — selon des règles précises et stables.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence entre RPA et automatisation IA ?</h3>
        <p>La RPA excelle sur des règles fixes et prévisibles. L'automatisation IA intervient quand l'information est moins structurée (texte libre, mise en page variable) et nécessite une interprétation avant d'être traitée. Les deux se combinent souvent sur un même processus.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'OCR fonctionne-t-il sur des documents scannés ou photographiés ?</h3>
        <p>Oui. La lecture automatique de documents moderne traite aussi bien les PDF natifs que les scans ou photos, avec une fiabilité qui dépend de la qualité du document — les cas ambigus sont signalés pour vérification humaine.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>La RPA nécessite-t-elle des compétences techniques en interne ?</h3>
        <p>Non. Chaque robot logiciel est conçu, documenté et livré sur des outils grand public (Make, n8n) que vous pouvez consulter sans coder. Aucune compétence en développement n'est nécessaire pour l'utiliser au quotidien.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si un document sort du cadre habituel ?</h3>
        <p>Les cas qui ne correspondent pas aux règles définies sont détectés et signalés pour un traitement manuel, plutôt que traités à l'aveugle avec un risque d'erreur.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="pillar-related__pill">Automatisation RH <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Quelle tâche documentaire pourrait être prise en charge par un robot logiciel ?</h2>
      <p>45 minutes suffisent pour identifier les automatisations RPA les plus rentables pour votre activité.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
