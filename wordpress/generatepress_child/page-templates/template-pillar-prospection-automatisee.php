<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Prospection automatisée
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
      <span class="pillar-breadcrumb__current">Prospection automatisée</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed eb-hero-fx--dim-halo">
    <?php eb_hero_fx( eb_hero_fx_effects()['prospection-automatisee'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Prospection automatisée</div>
      <h1>Prospection automatisée : qualifiez, relancez et suivez vos leads sans effort</h1>
      <p class="pillar-hero__intro">La plupart des dirigeants n'ont pas un problème de volume de contacts, mais un problème de suivi : des demandes entrantes qui traînent, des relances qui n'arrivent jamais, un pipeline qu'on reconstruit à la main avant chaque point commercial. La prospection automatisée s'attaque d'abord à ça — <strong>qualification, relance et suivi des leads</strong>, entrants comme sortants — avant d'ajouter du volume.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre potentiel de prospection <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    <div class="pillar-hero__reassurance"><?php echo eb_reassurance_pill(); ?></div>
    <div class="pillar-hero__reviews"><?php echo eb_google_reviews_badge( true ); ?></div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-prospection-automatisee.svg' ) ); ?>" alt="Schéma de prospection automatisée : contact enrichi, premier message envoyé, relance programmée à J+4" width="800" height="212" loading="lazy">
    </div>
    </div>
    </div>

    <!-- le problème -->
    <div class="pillar-section">
      <h2>Le problème : les leads entrants se perdent avant même d'être qualifiés</h2>
      <p>Une demande arrive par formulaire ou par email, personne ne la qualifie dans les heures qui suivent, et le prospect passe à autre chose. <strong>Le problème n'est presque jamais le manque de contacts</strong> — c'est l'absence d'un suivi systématique une fois le contact établi.</p>
      <p>La relance manuelle pose le même problème : sans rappel automatique, <strong>une majorité des prospects qui n'ont pas répondu au premier échange ne seront jamais relancés</strong>, alors qu'une part significative des réponses positives arrive justement à la deuxième ou troisième relance.</p>
    </div>

    <!-- pourquoi automatiser -->
    <div class="pillar-section">
      <h2>Pourquoi automatiser la qualification et le suivi de vos leads</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>La qualification automatique trie les demandes entrantes pour ne remonter que les échanges qui méritent un vrai suivi humain.</div>
        <div class="pillar-section__list-item"><span>✓</span>La relance s'envoie automatiquement selon un calendrier fixe, sans dépendre d'y penser au bon moment.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>L'<a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">enrichissement CRM</a> complète automatiquement les fiches contact avec les informations utiles à la qualification.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>L'automatisation LinkedIn identifie des contacts pertinents selon des critères précis, en complément du suivi des leads entrants — jamais en volume au détriment de la pertinence.</div>
      </div>
    </div>

    <!-- bénéfices -->
    <div class="pillar-section">
      <h2>Bénéfices concrets pour votre entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span>Un <strong>flux de prospection qui continue même dans les périodes chargées</strong>.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Plus de leads qualifiés, sans y consacrer plus de temps qu'aujourd'hui.</div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Des relances systématiques</strong>, là où la plupart des opportunités se perdent aujourd'hui par oubli.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Un CRM enrichi automatiquement, prêt à être exploité par l'équipe commerciale.</div>
      </div>
    </div>

    <!-- avis clients -->
    <div style="max-width:480px;margin:0 auto 56px;">
      <?php echo eb_mini_review_html( 0 ); ?>
    </div>

    <!-- exemples concrets -->
    <div class="pillar-usecases">
      <h2>Exemples concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 20a8 8 0 0 1 16 0"></path></svg></div>
          <h3>Ciblage LinkedIn qualifié</h3>
          <p>Recherche de contacts selon vos critères précis (secteur, taille, fonction), premier message personnalisé envoyé automatiquement — pas d'envoi de masse.</p>
          <div class="pillar-usecase__gain">3× plus de réponses qualifiées</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Séquences de relance email</h3>
          <p>Relances programmées automatiquement tant qu'aucune réponse n'est enregistrée, avec arrêt automatique dès qu'un prospect répond.</p>
          <div class="pillar-usecase__gain">−50% de prospects sans relance</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
          <h3>Enrichissement CRM automatique</h3>
          <p>Chaque nouveau contact est complété automatiquement (fonction, entreprise, secteur) avant d'atterrir dans le pipeline commercial.</p>
          <div class="pillar-usecase__gain">0 fiche incomplète</div>
        </div>
      </div>
    </div>

    <!-- outils concernés -->
    <div class="pillar-section">
      <h2>Outils concernés</h2>
      <p>La prospection automatisée s'appuie sur vos outils de messagerie, votre CRM et des outils spécialisés d'enrichissement de contacts.</p>
      <div class="tool-chip-grid">
        <div class="tool-chip"><?php echo eb_tool_icon_html('linkedin'); ?><span class="tool-chip__label">LinkedIn</span></div>
        <a href="<?php echo esc_url( eb_url('automatisation-outlook') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('outlook'); ?><span class="tool-chip__label">Outlook</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('hubspot'); ?><span class="tool-chip__label">HubSpot</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('make'); ?><span class="tool-chip__label">Make</span><?php echo eb_tool_chevron(); ?></a>
        <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>" class="tool-chip tool-chip--link"><?php echo eb_tool_icon_html('n8n'); ?><span class="tool-chip__label">n8n</span><?php echo eb_tool_chevron(); ?></a>
      </div>
      <?php echo eb_tool_compat_note(); ?>
    </div>

    <!-- comment nous intervenons -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment nous intervenons</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="5"></circle><circle cx="12" cy="12" r="1"></circle></svg></span><span class="pillar-flow__step-label">Ciblage défini</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></span><span class="pillar-flow__step-label">Premier message envoyé</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12a8 8 0 0 1 14-5l2 2"></path><path d="M20 5v4h-4"></path><path d="M20 12a8 8 0 0 1-14 5l-2-2"></path><path d="M4 19v-4h4"></path></svg></span><span class="pillar-flow__step-label">Relances automatiques</span></div>
        <span class="pillar-flow__arrow"></span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="4" width="12" height="17" rx="2"></rect><path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1"></path><path d="M9 11h6M9 15h6"></path></svg></span><span class="pillar-flow__step-label">Lead qualifié dans le CRM</span></div>
      </div>
    </div>

    <!-- avant / après -->
    <div class="pillar-compare">
      <h2>Avant / après prospection automatisée</h2>
      <div class="pillar-compare__grid">
        <div class="pillar-compare__col pillar-compare__col--before">
          <div class="pillar-compare__label">Avant</div>
          <div class="pillar-compare__item"><span>×</span>Recherche de contacts profil par profil, sur LinkedIn</div>
          <div class="pillar-compare__item"><span>×</span>Relances envoyées de façon irrégulière, quand on y pense</div>
          <div class="pillar-compare__item"><span>×</span>Fiches CRM incomplètes, à compléter manuellement</div>
          <div class="pillar-compare__item"><span>×</span>Prospection qui s'arrête dès que l'activité ralentit</div>
        </div>
        <div class="pillar-compare__col pillar-compare__col--after">
          <div class="pillar-compare__label">Après</div>
          <div class="pillar-compare__item"><span>✓</span>Ciblage automatique selon vos critères précis</div>
          <div class="pillar-compare__item"><span>✓</span>Relances envoyées systématiquement, au bon moment</div>
          <div class="pillar-compare__item"><span>✓</span>Fiches CRM enrichies automatiquement</div>
          <div class="pillar-compare__item"><span>✓</span>Flux de prospection continu, même en période chargée</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Votre prospection s'arrête dès que vous n'avez plus le temps de vous en occuper ?</p>
      <span class="pillar-mid-cta__connector" aria-hidden="true"></span>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>L'automatisation LinkedIn respecte-t-elle les règles de la plateforme ?</h3>
        <p>Les volumes et rythmes d'envoi sont paramétrés pour rester dans des usages raisonnables et éviter tout signalement — l'objectif est une prospection régulière et crédible, pas un envoi massif.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Les messages envoyés sont-ils vraiment personnalisés ?</h3>
        <p>Oui. Les messages s'appuient sur les données enrichies du contact (fonction, entreprise, secteur) pour éviter un ton générique, tout en étant envoyés automatiquement selon la séquence définie avec vous.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence entre prospection automatisée et spam ?</h3>
        <p>Le volume est maîtrisé, le ciblage est précis, et chaque prospect qui répond ou demande à ne plus être contacté sort automatiquement de la séquence. L'objectif est la qualité des échanges engagés, pas le volume brut de messages envoyés.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Comment se passe la qualification automatique des réponses ?</h3>
        <p>Chaque réponse est analysée pour distinguer un intérêt réel d'un refus ou d'une réponse automatique, afin de ne remonter dans votre <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">CRM</a> que les échanges qui méritent un vrai suivi.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps avant de voir des résultats ?</h3>
        <p>Les premières séquences de prospection automatisée sont généralement opérationnelles en une à deux semaines. Les premiers retours (ouvertures, réponses) sont visibles dès les premiers envois.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Votre génération de leads B2B laisse-t-elle des opportunités de côté ?</h2>
      <p>45 minutes pour voir où, dans votre suivi commercial, les leads se perdent aujourd'hui.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Auditer mon suivi commercial <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
