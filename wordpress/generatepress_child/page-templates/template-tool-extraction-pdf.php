<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Outil Extraction PDF
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
      <span class="pillar-breadcrumb__current">Extraction de données PDF</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed eb-hero-fx--dim-halo">
    <?php eb_hero_fx( eb_hero_fx_effects()['extraction-pdf'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Outils · Extraction PDF</div>
      <h1>Extraction de données PDF : automatisez la lecture de vos documents</h1>
      <p class="pillar-hero__intro">Devis, bons de commande, contrats, relevés : la majorité des documents professionnels transitent en PDF. Copier ces données à la main dans un tableur ou un logiciel métier est <strong>l'une des tâches les plus chronophages et les plus sources d'erreurs</strong> d'une TPE-PME. L'extraction PDF automatise cette lecture, qu'il s'agisse d'un PDF généré directement par un logiciel ou d'un scan.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    <div class="pillar-hero__reassurance"><?php echo eb_reassurance_pill(); ?></div>
    <div class="pillar-hero__reviews"><?php echo eb_google_reviews_badge( true ); ?></div>
    </div>
    </div>
    </div>

    <!-- distinction OCR vs PDF -->
    <div class="pillar-mini-case pillar-mini-case--info">
      <h3 class="pillar-mini-case__label">Extraction PDF ou OCR ?</h3>
      <p>Un PDF n'est pas toujours une image : lorsqu'il est généré directement par un logiciel (facturation, export comptable, devis en ligne), il contient déjà du texte sélectionnable, sans qu'aucune reconnaissance optique ne soit nécessaire. <strong>L'enjeu n'est alors plus de « lire » le document mais d'en extraire les bons champs</strong>, malgré des mises en page qui varient d'un émetteur à l'autre. Ce n'est que pour les PDF scannés ou photographiés que l'<a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">OCR</a> entre en jeu, en amont de l'extraction.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je peux extraire automatiquement de vos PDF</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span>Montants, dates, références et lignes de détail d'un devis ou d'une facture, vers Excel ou votre logiciel comptable.</div>
        <div class="pillar-section__list-item"><span>✓</span>Tableaux complets (quantités, prix unitaires, totaux) depuis un bon de commande ou un catalogue fournisseur.</div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Clauses et dates clés d'un contrat</strong> (durée, reconduction, montant), pour un suivi automatisé des échéances.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Données de relevés bancaires ou de bulletins de paie au format PDF, vers un tableau de suivi.</div>
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Fusion de plusieurs PDF sources</strong> en un seul fichier de synthèse structuré.</span></div>
      </div>
    </div>

    <!-- comparatif -->
    <div class="pillar-table">
      <h2>PDF natif vs PDF scanné : ce qui change</h2>
      <div class="pillar-table__wrap">
        <table>
          <thead>
            <tr><th>Type de PDF</th><th>Traitement nécessaire</th><th>Fiabilité</th></tr>
          </thead>
          <tbody>
            <tr><td>PDF natif (texte sélectionnable)</td><td>Extraction directe, pas d'OCR</td><td>Très élevée</td></tr>
            <tr><td>PDF scanné net</td><td>OCR puis extraction</td><td>Élevée</td></tr>
            <tr><td>Photo de document</td><td>OCR puis extraction, avec contrôle renforcé</td><td>Variable selon la qualité</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- avis clients -->
    <div style="max-width:480px;margin:0 auto 56px;">
      <?php echo eb_mini_review_html( 2 ); ?>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Devis fournisseurs vers tableau comparatif</h3>
          <p>Chaque devis PDF reçu est lu et ses lignes ajoutées automatiquement à un tableau comparatif Excel.</p>
          <div class="pillar-usecase__gain">Comparaison en quelques minutes</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Suivi automatique des échéances contractuelles</h3>
          <p>Les dates de reconduction et de fin de contrat sont extraites et suivies automatiquement, alerte envoyée avant échéance.</p>
          <div class="pillar-usecase__gain">0 renouvellement manqué</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Consolidation de bons de commande</h3>
          <p>Les lignes de plusieurs bons de commande PDF sont extraites et consolidées automatiquement dans un fichier de suivi.</p>
          <div class="pillar-usecase__gain">0 ressaisie manuelle</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Quel document PDF recopiez-vous encore à la main chaque semaine ?</p>
      <span class="pillar-mid-cta__connector" aria-hidden="true"></span>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>

    <div class="pillar-section">
      <h2>L'extraction PDF dans votre cocon d'automatisation</h2>
      <p>L'extraction PDF alimente naturellement <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a> comme destination de sortie, s'appuie sur l'<a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">OCR</a> pour les documents scannés, et sert de brique amont à l'<a href="<?php echo esc_url( eb_url('automatisation-facturation') ); ?>">automatisation de la facturation</a> et à l'<a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a>. Techniquement, elle s'orchestre avec <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> ou <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a>.</p>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence entre extraction PDF et OCR ?</h3>
        <p>L'OCR concerne les documents « image » (scan, photo) à convertir en texte. L'extraction PDF couvre un périmètre plus large, y compris les PDF natifs où le texte est déjà exploitable et où seule l'identification des bons champs est nécessaire.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Cela fonctionne-t-il si mes fournisseurs ont des mises en page différentes ?</h3>
        <p>Oui. L'extraction s'appuie sur la reconnaissance du contenu (libellés, position logique des champs) plutôt que sur un gabarit fixe, ce qui la rend robuste face à des mises en page variées.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Peut-on extraire des tableaux complets, pas seulement des champs isolés ?</h3>
        <p>Oui, l'extraction de tableaux (lignes de facture, quantités, prix unitaires) est l'un des cas d'usage les plus fréquents et les plus rentables.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte une automatisation d'extraction PDF ?</h3>
        <p>Un cas d'usage ciblé (un type de document, une destination) démarre autour de 800 à 1 200€. Un projet couvrant plusieurs types de documents se chiffre après audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour la mettre en place ?</h3>
        <p>Une à deux semaines pour un premier type de document PDF, tests sur vos documents réels inclus.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si un champ est absent d'un document ?</h3>
        <p>Le document est signalé pour vérification manuelle plutôt que traité avec une donnée manquante ou devinée.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je extraire des données de PDF protégés par mot de passe ?</h3>
        <p>Oui, sous réserve de disposer du mot de passe ou d'un accès autorisé au document ; ce point est vérifié dès l'audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'extraction fonctionne-t-elle sur de gros volumes de documents ?</h3>
        <p>Oui, le traitement par lots est courant pour des volumes importants (reprise d'archives, traitement mensuel de nombreuses factures).</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Mes documents PDF restent-ils confidentiels ?</h3>
        <p>Oui. Le traitement respecte les règles définies avec vous ; une architecture à hébergement maîtrisé est possible pour les documents les plus sensibles (voir <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">consultant n8n</a>).</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Vers quels outils les données extraites peuvent-elles être envoyées ?</h3>
        <p><a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a>, votre <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">logiciel comptable</a>, votre <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">CRM</a>, ou tout outil disposant d'une API ou de fonctionnalités d'import — la destination est définie selon votre besoin.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>" class="pillar-related__pill">Automatisation OCR <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-facturation') ); ?>" class="pillar-related__pill">Automatisation de la facturation <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="pillar-related__pill">Automatisation Excel <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
      </div>
    </div>

    <!-- tarif contextuel -->
    <?php echo eb_price_teaser_html( 'Extraction de données PDF : un premier cas d\'usage démarre généralement <strong>autour de 800 à 1 200 €</strong>, selon la variété des documents à traiter.' ); ?>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Quel PDF recopiez-vous encore ligne par ligne ?</h2>
      <p>45 minutes pour savoir combien de temps l'extraction automatique de vos PDF peut vous faire gagner.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer mon gain sur mes PDF <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
