<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Outil Automatisation OCR
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
      <span class="pillar-breadcrumb__current">Automatisation OCR</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['automatisation-ocr'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Outils · OCR</div>
      <h1>Automatisation OCR : lisez et exploitez vos documents automatiquement</h1>
      <p class="pillar-hero__intro">L'OCR (reconnaissance optique de caractères) permet à un ordinateur de lire un document scanné ou photographié comme s'il s'agissait de texte natif. Combiné à l'intelligence artificielle, il ne se contente plus de reconnaître des lettres : <strong>il comprend la structure du document</strong> — montant, date, fournisseur, référence — et transmet directement ces informations à vos outils, sans ressaisie manuelle.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>
    </div>
    </div>

    <div class="pillar-section">
      <h2>Qu'est-ce que l'OCR, et pourquoi ce n'est plus un simple scanner de texte</h2>
      <p>L'OCR historique se contentait de transformer une image en texte brut, sans en comprendre le sens — charge ensuite à un humain de relire et de ranger l'information au bon endroit. L'OCR moderne, associé à un modèle de langage, va plus loin : il identifie les champs qui comptent (montant TTC, date d'échéance, numéro de facture, nom du fournisseur) directement dans le document, quelle que soit sa mise en page, puis les transmet structurés à votre logiciel cible.</p>
      <p>Pour une TPE-PME, cette évolution change concrètement ce qui devient automatisable : factures, notes de frais, bons de livraison, certificats, contrats — <strong>tout document reçu en PDF, scan ou photo peut désormais alimenter vos outils sans étape de saisie manuelle</strong>.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je peux automatiser avec l'OCR</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Lecture de factures fournisseurs</strong> et génération automatique de l'écriture comptable correspondante.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Extraction des notes de frais (montant, catégorie, date) depuis une simple photo de reçu.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Vérification automatique de certificats et documents de conformité fournisseurs, avec <strong>alerte en cas de document manquant ou expiré</strong>.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Lecture de bons de commande ou bons de livraison pour mise à jour automatique du stock ou de la facturation.</div>
        <div class="pillar-section__list-item"><span>✓</span>Numérisation et classement automatique d'archives papier lors d'une reprise de dossiers.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>OCR vs extraction PDF : quelle différence</h2>
      <p>Les deux sujets sont proches mais distincts. L'OCR concerne spécifiquement les documents « images » — un scan, une photo, un PDF sans texte sélectionnable — qu'il faut d'abord convertir en texte avant de pouvoir l'exploiter. L'<a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">extraction PDF</a> couvre un périmètre plus large : elle traite aussi les PDF natifs (générés directement par un logiciel, texte déjà sélectionnable) où l'OCR n'est pas nécessaire, mais où il faut identifier et structurer les bonnes données. Dans la pratique, un même flux documentaire combine souvent les deux : détection du type de PDF, puis OCR si besoin, puis extraction structurée.</p>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Lecture automatique de factures fournisseurs</h3>
          <p>Chaque facture reçue par email est lue par OCR, ses données extraites et transmises comme brouillon d'écriture comptable.</p>
          <div class="pillar-usecase__gain">−72% de temps de saisie</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></div>
          <h3>Notes de frais depuis une photo</h3>
          <p>Une simple photo de reçu envoyée par l'équipe suffit à extraire montant, date et catégorie de dépense.</p>
          <div class="pillar-usecase__gain">−80% de temps de saisie</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><line x1="15.3" y1="15.3" x2="20.5" y2="20.5"></line></svg></div>
          <h3>Contrôle qualité de certificats fournisseurs</h3>
          <p>Chaque certificat de conformité reçu est lu automatiquement, sa date de validité vérifiée, une alerte envoyée si expiré.</p>
          <div class="pillar-usecase__gain">0 certificat expiré non détecté</div>
        </div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>Fiabilité et limites de l'OCR</h2>
      <p>La qualité de lecture dépend directement de celle du document source : un scan net et un PDF natif donnent une fiabilité proche de 100% sur les champs standards ; une photo prise à la main, dans de mauvaises conditions de lumière, peut nécessiter une vérification humaine sur certains champs. Un consultant sérieux le dit clairement : l'objectif n'est pas de prétendre à une fiabilité parfaite, mais de signaler les cas incertains pour validation plutôt que de les traiter à l'aveugle — c'est cette combinaison automatisation plus contrôle ciblé qui rend le résultat fiable en production.</p>
    </div>

    <!-- flow -->
    <div class="pillar-flow">
      <div class="pillar-flow__label">Comment ça s'enchaîne</div>
      <div class="pillar-flow__row">
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path></svg></span><span class="pillar-flow__step-label">Document reçu (scan/photo/PDF)</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path></svg></span><span class="pillar-flow__step-label">Lecture OCR + IA</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12v18l-3-2-3 2-3-2-3 2z"></path><path d="M9 8h6M9 12h6"></path></svg></span><span class="pillar-flow__step-label">Champs structurés</span></div>
        <span class="pillar-flow__arrow">→</span>
        <div class="pillar-flow__step"><span class="pillar-flow__icon"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M8.5 12.5l2.3 2.3 4.7-4.8"></path></svg></span><span class="pillar-flow__step-label">Intégré à votre outil</span></div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Des documents papier ou PDF que vous ressaisissez encore à la main ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>

    <div class="pillar-section">
      <h2>L'OCR dans votre cocon d'automatisation</h2>
      <p>L'OCR est rarement une fin en soi : il alimente le plus souvent une <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> (factures, notes de frais), un flux <a href="<?php echo esc_url( eb_url('rpa') ); ?>">RPA</a> de traitement documentaire à volume, ou une <a href="<?php echo esc_url( eb_url('automatisation-facturation') ); ?>">automatisation de la facturation</a> de bout en bout. Techniquement, il s'orchestre avec <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> ou <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a> selon la complexité et la sensibilité des documents traités.</p>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence entre OCR et automatisation comptable ?</h3>
        <p>L'OCR est la brique technique qui lit un document. L'<a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> est le processus complet (lecture, contrôle, écriture, rapprochement) qui s'appuie notamment sur l'OCR pour les factures et justificatifs.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'OCR fonctionne-t-il sur des documents manuscrits ?</h3>
        <p>La reconnaissance de texte manuscrit est possible mais moins fiable que sur du texte imprimé ; elle est évaluée au cas par cas selon vos documents lors de l'audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quel taux de fiabilité puis-je attendre ?</h3>
        <p>Sur des documents imprimés et bien scannés, la fiabilité sur les champs standards (montant, date) est très élevée. Les cas ambigus sont systématiquement signalés pour contrôle plutôt que traités à l'aveugle.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte une automatisation OCR ?</h3>
        <p>Un premier cas d'usage ciblé (un type de document) démarre autour de 1 000 à 1 500€. Un projet couvrant plusieurs types de documents et davantage de règles se chiffre après audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour mettre en place une lecture OCR ?</h3>
        <p>Deux à trois semaines pour un premier type de document, avec une phase de calibrage sur vos documents réels avant la mise en production.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Mes documents restent-ils confidentiels ?</h3>
        <p>Oui. Le traitement se fait selon les règles définies avec vous ; pour les documents les plus sensibles, une architecture avec hébergement maîtrisé peut être privilégiée (voir <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">consultant n8n</a>).</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'OCR peut-il lire des documents dans une langue autre que le français ?</h3>
        <p>Oui, la plupart des moteurs OCR modernes gèrent plusieurs langues ; ce point est vérifié dès l'audit si vos documents proviennent de fournisseurs étrangers.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si un document est illisible ou de mauvaise qualité ?</h3>
        <p>Il est signalé automatiquement pour traitement manuel plutôt que comptabilisé avec des données incertaines — l'automatisation ne force jamais une lecture douteuse.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je traiter un gros volume d'archives papier existantes ?</h3>
        <p>Oui, c'est un cas d'usage fréquent lors d'une reprise de dossiers ou d'une numérisation d'archives, avec un traitement par lots plutôt qu'au fil de l'eau.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'OCR remplace-t-il un contrôle humain sur la comptabilité ?</h3>
        <p>Non. Il élimine la ressaisie, pas le contrôle : la validation finale des écritures sensibles reste de votre ressort, en particulier dans les premières semaines d'utilisation.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>" class="pillar-related__pill">Extraction de données PDF <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-facturation') ); ?>" class="pillar-related__pill">Automatisation de la facturation <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('rpa') ); ?>" class="pillar-related__pill">RPA <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Quel document papier ou PDF vous fait encore perdre du temps ?</h2>
      <p>Audit gratuit de 45 minutes, sans engagement.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
