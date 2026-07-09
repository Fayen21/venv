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
      <img src="<?php echo esc_url( eb_asset( 'images/illustrations/mock-automatisation-ia.svg' ) ); ?>" alt="Schéma d'automatisation IA : facture reçue par email, lue et comprise par l'intelligence artificielle, intégrée à la comptabilité sans ressaisie" width="800" height="212" loading="lazy">
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

    <div class="pillar-section">
      <h2>Automatisation classique, RPA et automatisation IA : quelle différence ?</h2>
      <p>Ces trois notions se recoupent et créent souvent de la confusion. L'automatisation classique exécute une règle fixe sur une donnée déjà structurée (« si ce champ vaut X, alors faire Y »). La <a href="<?php echo esc_url( eb_url('rpa') ); ?>">RPA</a> reproduit des actions numériques répétitives — cliquer, copier, saisir — pour des tâches stables et bien définies. L'automatisation IA ajoute une capacité de compréhension : lire un texte libre, interpréter une mise en page variable, juger de la pertinence d'une information. Dans la pratique, un même processus combine souvent les trois couches : l'IA lit et interprète, la RPA exécute les actions répétitives, l'automatisation classique orchestre l'ensemble.</p>
    </div>

    <div class="pillar-table">
      <h2>Comparatif : automatisation classique, RPA et IA</h2>
      <div class="pillar-table__wrap">
        <table>
          <thead>
            <tr><th>Approche</th><th>Ce qu'elle fait</th><th>Type de donnée</th><th>Exemple</th></tr>
          </thead>
          <tbody>
            <tr><td>Automatisation classique</td><td>Exécute une règle fixe</td><td>Structurée</td><td>Déclencher un email à date fixe</td></tr>
            <tr><td>RPA</td><td>Reproduit une action répétitive</td><td>Structurée à semi-structurée</td><td>Copier des données d'un outil à un autre</td></tr>
            <tr><td>Automatisation IA</td><td>Lit, comprend, classe, décide</td><td>Non structurée</td><td>Interpréter un email ou une facture scannée</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Erreurs fréquentes avec l'automatisation IA</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✕</span>Vouloir tout confier à l'IA dès le départ, y compris les décisions sensibles, sans période de contrôle humain.</div>
        <div class="pillar-section__list-item"><span>✕</span>Ne pas cadrer précisément ce que l'IA doit lire et produire, ce qui génère des résultats incohérents.</div>
        <div class="pillar-section__list-item"><span>✕</span>Choisir l'IA par effet de mode sur une tâche qui relevait en réalité d'une automatisation classique plus simple et moins coûteuse.</div>
        <div class="pillar-section__list-item"><span>✕</span>Ignorer les cas où l'IA se trompe, plutôt que de les signaler pour affiner les règles au fil du temps.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Bonnes pratiques pour une automatisation IA fiable</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Démarrer avec un contrôle humain systématique, puis réduire progressivement à mesure que la fiabilité est démontrée.</div>
        <div class="pillar-section__list-item"><span>✓</span>Choisir la bonne couche (règle simple, RPA, IA) selon la nature réelle de la donnée, pas selon la nouveauté de la technologie.</div>
        <div class="pillar-section__list-item"><span>✓</span>Documenter les cas où l'IA doit s'arrêter et alerter, plutôt que de forcer une réponse à tout prix.</div>
        <div class="pillar-section__list-item"><span>✓</span>Mesurer le taux d'erreur réel après quelques semaines d'usage, pas seulement en phase de test.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Automatisation IA et RGPD : encadrer l'usage des données</h2>
      <p>Confier la lecture d'emails, de factures ou de documents RH à un modèle d'IA soulève légitimement des questions de confidentialité. Trois principes encadrent chaque projet : la donnée traitée reste dans le périmètre défini avec vous (aucune réutilisation à d'autres fins), le choix du modèle de langage et de son hébergement est discuté en amont selon la sensibilité des documents concernés, et un contrôle humain reste possible à tout moment sur les décisions automatisées, conformément à l'esprit du RGPD sur les traitements automatisés de données personnelles.</p>
      <p>Pour les documents les plus sensibles, une architecture avec hébergement plus maîtrisé (voir <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">consultant n8n</a>) peut être privilégiée à une solution entièrement cloud, selon vos contraintes de conformité internes.</p>
    </div>

    <div class="pillar-section">
      <h2>Combien coûte une automatisation IA</h2>
      <p>Un premier cas d'usage ciblé — lecture d'un seul type de document ou tri d'une boîte mail — démarre généralement autour de 1 000 à 1 500€, un peu au-dessus d'une automatisation classique du fait du calibrage nécessaire au démarrage. Un projet combinant plusieurs sources de documents et une logique de décision plus fine se situe le plus souvent entre 2 000€ et 4 000€. Le chiffrage précis dépend surtout du volume de documents à traiter et de la variabilité de leur mise en forme, deux points évalués dès l'audit gratuit.</p>
    </div>

    <div class="pillar-section">
      <h2>Évaluer la maturité IA de votre entreprise avant de se lancer</h2>
      <p>Toutes les entreprises ne partent pas du même point, et ce n'est pas un problème : l'essentiel est de savoir où vous en êtes pour choisir un premier projet réaliste. Une entreprise « niveau 1 » n'a encore aucune automatisation IA en place — le bon départ est un cas d'usage unique et bien cadré (lecture d'un seul type de document, par exemple). Une entreprise « niveau 2 » a déjà des automatisations classiques (Make, n8n) sans IA — l'ajout d'une couche de lecture intelligente vient naturellement enrichir l'existant. Une entreprise « niveau 3 » a déjà expérimenté l'IA sur un cas isolé — l'enjeu devient alors d'industrialiser et d'élargir méthodiquement à d'autres processus, sans perdre le contrôle sur la fiabilité.</p>
      <p>Ce diagnostic se fait en quelques minutes lors de l'audit gratuit et évite l'écueil le plus fréquent : vouloir démarrer directement par un projet trop ambitieux pour le niveau de maturité réel de l'entreprise.</p>
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
      <div class="pillar-faq__item">
        <h3>Quelle est la différence entre IA et RPA ?</h3>
        <p>La RPA exécute des actions répétitives sur des données déjà bien définies. L'IA ajoute une couche de compréhension pour interpréter une information non structurée avant qu'elle n'entre dans le processus. Les deux se combinent fréquemment sur un même projet.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'automatisation IA est-elle accessible à une petite structure ?</h3>
        <p>Oui. Les premières automatisations IA (tri d'emails, lecture de documents) démarrent sur des périmètres restreints et des budgets similaires à une automatisation classique — il n'est pas nécessaire d'avoir une grande structure pour en bénéficier.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Mes données servent-elles à entraîner un modèle d'IA public ?</h3>
        <p>Non. Les automatisations sont construites pour traiter vos données sans les réutiliser à d'autres fins ; le choix des modèles et des paramètres de confidentialité est discuté avec vous avant la mise en place.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si l'IA fait une erreur d'interprétation ?</h3>
        <p>Les cas ambigus sont signalés pour validation humaine plutôt que traités à l'aveugle. Chaque erreur identifiée permet d'affiner les règles pour les cas suivants.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Faut-il choisir un abonnement IA spécifique ?</h3>
        <p>Non. Le choix du modèle de langage est fait selon le besoin technique, sans vous imposer un abonnement supplémentaire à gérer — il s'intègre dans le scénario d'automatisation livré.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Peut-on commencer par un seul cas d'usage IA avant d'élargir ?</h3>
        <p>C'est l'approche recommandée : traiter un seul type de document ou d'email en premier permet de calibrer la fiabilité avant d'élargir à d'autres cas.</p>
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
