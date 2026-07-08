<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Pilier Automatisation IA
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
      <span class="pillar-breadcrumb__current">Automatisation IA</span>
    </nav>

    <!-- hero -->
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Automatisation IA</div>
      <h1>L'automatisation IA, expliquée simplement pour les dirigeants de TPE-PME</h1>
      <p class="pillar-hero__intro">« Automatisation IA » est devenu un terme fourre-tout. Derrière l'expression, il y a une distinction très concrète à comprendre avant d'investir un euro : l'automatisation classique déplace et exécute, l'intelligence artificielle lit et comprend. Les deux se combinent, et c'est cette combinaison qui change vraiment la donne pour une petite structure.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>

    <!-- mockup visuel -->
    <div class="pillar-mock">
      <div class="pillar-mock__titlebar">
        <div class="pillar-mock__dots"><span style="background:#FF5F57;"></span><span style="background:#FEBC2E;"></span><span style="background:#28C840;"></span></div>
        <span class="pillar-mock__file">lecture_ia · n8n + IA</span>
        <span class="pillar-mock__live"><span class="pillar-mock__live-dot"></span>actif</span>
      </div>
      <div class="pillar-mock__body">
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5e6f8c;"></span><span class="pillar-mock__label">Facture PDF reçue par email</span><span class="pillar-mock__val" style="color:#C7D2E4;background:rgba(255,255,255,.05);">détecté</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#3BA5FF;"></span><span class="pillar-mock__label">Lue et comprise par l'IA</span><span class="pillar-mock__val" style="color:#5BB6FF;background:rgba(46,155,255,.16);">8 champs</span></div>
        <div class="pillar-mock__row"><span class="pillar-mock__dot" style="background:#5BCB8B;"></span><span class="pillar-mock__label">Intégrée à la comptabilité</span><span class="pillar-mock__val" style="color:#5BCB8B;background:rgba(91,203,139,.12);">0 ressaisie</span></div>
      </div>
    </div>

    <!-- sections -->
    <div class="pillar-section">
      <h2>Automatisation IA : de quoi parle-t-on réellement ?</h2>
      <p>Un scénario Make ou n8n classique sait déplacer une donnée d'un point A à un point B, déclencher une action ou remplir un champ — à condition que cette donnée soit déjà structurée. Il ne sait pas lire un email rédigé en langage naturel, interpréter une facture scannée dont la mise en page change à chaque fournisseur, ni juger si une anomalie mérite d'être signalée.</p>
      <p>L'automatisation IA ajoute cette couche de compréhension. Un modèle de langage vient lire, extraire, classer ou résumer une information non structurée, puis la transmet au reste du scénario d'automatisation qui l'exécute. Pour une TPE-PME, l'essentiel de la charge administrative — emails, PDF, comptes-rendus, devis — est justement fait de ce type d'information non structurée. C'est pour cela que l'IA change concrètement la portée de ce qui devient automatisable.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que l'IA change concrètement dans vos processus</h2>
      <p>Concrètement, ajouter de l'IA à une automatisation permet de :</p>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Lire un PDF ou un scan et en extraire les bonnes informations, même sans gabarit fixe.</div>
        <div class="pillar-section__list-item"><span>✓</span>Comprendre le contenu d'un email et décider de l'action à mener (relance, transfert, création de tâche).</div>
        <div class="pillar-section__list-item"><span>✓</span>Classer un document selon son contenu réel, pas seulement selon son nom de fichier.</div>
        <div class="pillar-section__list-item"><span>✓</span>Générer un résumé ou une première réponse à partir de plusieurs documents sources.</div>
        <div class="pillar-section__list-item"><span>✓</span>Détecter une incohérence ou une anomalie dans une série de données comptables ou commerciales.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Où l'automatisation IA a le plus d'impact</h2>
      <div class="pillar-section__sub">
        <h3>Emails et courrier entrant</h3>
        <p>La majorité des dirigeants de TPE-PME passent encore plusieurs heures par semaine à trier, transférer et répondre à des emails répétitifs. Une lecture IA en amont permet de catégoriser, prioriser et déclencher la bonne action sans intervention manuelle.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Documents comptables et factures</h3>
        <p>Factures fournisseurs, notes de frais, relevés bancaires : ce sont des documents à la structure variable, parfaits pour l'extraction par IA avant intégration dans votre logiciel comptable.</p>
      </div>
      <div class="pillar-section__sub">
        <h3>Support et réponses internes</h3>
        <p>Un assistant interne qui lit vos procédures et documents peut répondre à une question RH ou administrative récurrente en quelques secondes, sans mobiliser une personne à chaque fois.</p>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Les limites à connaître avant de se lancer</h2>
      <p>L'IA n'est pas magique et un consultant sérieux doit le dire clairement. Elle a besoin d'un cadrage précis (quelles données, quel format de sortie, quelles règles) pour être fiable. Sur les sujets sensibles — validation d'un paiement, décision RH — un contrôle humain reste recommandé, au moins dans les premiers mois. L'objectif n'est pas de remplacer le jugement, mais de le libérer des tâches de lecture et de tri répétitives.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Lecture automatique de factures fournisseurs</h3>
          <p>Chaque facture reçue par email est lue, ses montants et échéances extraits, puis intégrée à votre outil de compta sans ressaisie.</p>
          <div class="pillar-usecase__gain">≈10 min gagnées par facture</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Tri intelligent de la boîte mail</h3>
          <p>Les emails sont catégorisés (commercial, RH, fournisseur, urgent) et affectés à la bonne personne automatiquement.</p>
          <div class="pillar-usecase__gain">0 email oublié</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><line x1="15.3" y1="15.3" x2="20.5" y2="20.5"></line></svg></div>
          <h3>Détection d'anomalies comptables</h3>
          <p>Les écarts entre relevés bancaires et écritures comptables sont repérés et signalés avant la clôture.</p>
          <div class="pillar-usecase__gain">Anomalies vues en amont</div>
        </div>
      </div>
    </div>

    <!-- flow diagram -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment ça s'enchaîne</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon">📄</span><span class="pillar-flow__step-label">Document reçu</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🤖</span><span class="pillar-flow__step-label">Lu par l'IA</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">🗂️</span><span class="pillar-flow__step-label">Classé automatiquement</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon">✓</span><span class="pillar-flow__step-label">Action déclenchée</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Un email, un PDF ou un document que vous traitez encore à la main chaque semaine ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>L'automatisation IA remplace-t-elle mon logiciel de comptabilité ou mon CRM ?</h3>
        <p>Non. L'IA se greffe sur vos outils existants pour interpréter des informations non structurées — emails, PDF, texte libre — avant qu'elles n'entrent dans vos logiciels métier. Elle ne remplace ni Sage, ni votre CRM : elle leur évite la ressaisie manuelle et les erreurs de saisie.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Est-ce fiable pour des données sensibles comme la comptabilité ?</h3>
        <p>L'IA propose, un contrôle humain valide sur les points sensibles au démarrage. Au fil des semaines, à mesure que les règles se stabilisent, l'automatisation devient autonome sur les cas répétitifs — le contrôle humain reste toujours possible à tout moment.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Faut-il des compétences techniques en interne pour la maintenir ?</h3>
        <p>Non. Chaque automatisation est documentée et livrée sur des outils grand public (Make, n8n) que vous pouvez consulter sans coder. Aucune compétence en développement n'est nécessaire pour l'utiliser au quotidien.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quels outils utilisez-vous pour l'IA ?</h3>
        <p>Make et n8n pour l'orchestration, Python pour les traitements sur mesure, et des modèles de langage pour la lecture et la compréhension — choisis selon le besoin, sans dépendance à un outil propriétaire fermé.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps avant de voir des résultats concrets ?</h3>
        <p>Les premières automatisations IA (tri d'emails, lecture de documents) sont généralement opérationnelles en une à deux semaines. Les gains de temps sont visibles dès la première semaine d'utilisation réelle.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('agence-ia') ); ?>" class="pillar-related__pill">Agence IA vs consultant indépendant <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>" class="pillar-related__pill">Automatisation entreprise <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-processus') ); ?>" class="pillar-related__pill">Automatisation des processus <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>" class="pillar-related__pill">Automatisation des tâches <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-rh') ); ?>" class="pillar-related__pill">Automatisation RH <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('prospection-automatisee') ); ?>" class="pillar-related__pill">Prospection automatisée <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Voyons ce que l'IA peut réellement automatiser chez vous</h2>
      <p>Audit gratuit de 45 minutes, sans jargon ni promesse en l'air.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
