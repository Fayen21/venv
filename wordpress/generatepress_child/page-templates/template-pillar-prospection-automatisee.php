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
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Prospection automatisée</div>
      <h1>Prospection automatisée : générez des leads B2B sans y passer vos journées</h1>
      <p class="pillar-hero__intro">Automatisation LinkedIn, relance email, enrichissement CRM : la génération de leads en prospection B2B demande de la régularité, pas seulement de bons messages. La prospection automatisée prend en charge le volume et le suivi — recherche de contacts, premiers messages, relances — pendant que vous vous concentrez sur les échanges qui comptent.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('realisations') ); ?>" class="btn btn-primary">Découvrir un cas concret <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <div class="pillar-mock__titlebar">
        <div class="pillar-mock__dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
        <span class="pillar-mock__file">prospection_b2b · séquence</span>
        <span class="pillar-mock__live"><span class="pillar-mock__live-dot"></span>actif</span>
      </div>
      <div class="pillar-mock__body">
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#3BA5FF;"></span><span class="pillar-mock__label">Contact enrichi (fonction, entreprise)</span><span class="pillar-mock__val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">enrichi</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5BCB8B;"></span><span class="pillar-mock__label">Premier message envoyé</span><span class="pillar-mock__val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">envoyé</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5BCB8B;"></span><span class="pillar-mock__label">Relance programmée à J+4</span><span class="pillar-mock__val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">planifiée</span></div>
      </div>
    </div>

    <!-- le problème -->
    <div class="pillar-section">
      <h2>Le problème : la prospection s'arrête dès que le rythme retombe</h2>
      <p>La prospection B2B fonctionne quand elle est régulière : identifier des contacts pertinents, engager la conversation, relancer sans lâcher l'affaire trop tôt. Mais dès qu'un dirigeant ou un commercial se retrouve pris par le quotidien, la recherche de nouveaux contacts s'arrête en premier — et le pipeline commercial se vide quelques semaines plus tard.</p>
      <p>La relance manuelle pose le même problème : sans rappel automatique, une majorité des prospects qui n'ont pas répondu au premier message ne seront jamais relancés, alors qu'une part significative des réponses positives arrive justement à la deuxième ou troisième relance.</p>
    </div>

    <!-- pourquoi automatiser -->
    <div class="pillar-section">
      <h2>Pourquoi automatiser sa prospection</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>L'automatisation LinkedIn identifie et engage des contacts pertinents selon des critères précis, sans recherche manuelle profil par profil.</div>
        <div class="pillar-section__list-item"><span>✓</span>La relance email s'envoie automatiquement selon un calendrier fixe, sans dépendre d'y penser au bon moment.</div>
        <div class="pillar-section__list-item"><span>✓</span>L'enrichissement CRM complète automatiquement les fiches contact avec les informations utiles à la qualification.</div>
        <div class="pillar-section__list-item"><span>✓</span>La qualification automatique trie les réponses pour ne remonter que les échanges qui méritent un vrai suivi humain.</div>
      </div>
    </div>

    <!-- bénéfices -->
    <div class="pillar-section">
      <h2>Bénéfices concrets pour votre entreprise</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Un flux de prospection qui continue même dans les périodes chargées.</div>
        <div class="pillar-section__list-item"><span>✓</span>Plus de leads qualifiés, sans y consacrer plus de temps qu'aujourd'hui.</div>
        <div class="pillar-section__list-item"><span>✓</span>Des relances systématiques, là où la plupart des opportunités se perdent aujourd'hui par oubli.</div>
        <div class="pillar-section__list-item"><span>✓</span>Un CRM enrichi automatiquement, prêt à être exploité par l'équipe commerciale.</div>
      </div>
    </div>

    <!-- exemples concrets -->
    <div class="pillar-usecases">
      <h2>Exemples concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 20a8 8 0 0 1 16 0"></path></svg></div>
          <h3>Prospection LinkedIn automatisée</h3>
          <p>Recherche de contacts selon vos critères (secteur, taille, fonction), premier message personnalisé envoyé automatiquement.</p>
          <div class="pillar-usecase__gain">3× plus de contacts engagés</div>
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
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0A66C2;color:#fff;">in</span>LinkedIn</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#0A6FC2;color:#fff;">O</span>Outlook</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#FF5C35;color:#fff;">H</span>HubSpot</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#1A1A1A;color:#fff;">Pd</span>Pipedrive</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#6D00CC;color:#fff;">M</span>Make</div>
        <div class="tool-chip"><span class="tool-chip__abbr" style="background:#EA4B71;color:#fff;">n8</span>n8n</div>
      </div>
    </div>

    <!-- comment nous intervenons -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment nous intervenons</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🎯</span><span class="pillar-flow__step-label">Ciblage défini</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">✉️</span><span class="pillar-flow__step-label">Premier message envoyé</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🔁</span><span class="pillar-flow__step-label">Relances automatiques</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📋</span><span class="pillar-flow__step-label">Lead qualifié dans le CRM</span></div>
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
        <p>Chaque réponse est analysée pour distinguer un intérêt réel d'un refus ou d'une réponse automatique, afin de ne remonter à l'équipe commerciale que les échanges qui méritent un vrai suivi.</p>
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
      <h2>Combien de leads votre prospection actuelle laisse-t-elle de côté ?</h2>
      <p>45 minutes suffisent pour identifier les automatisations de prospection les plus rentables pour votre activité.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
