<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Outil Automatisation Facturation
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
      <span class="pillar-breadcrumb__current">Automatisation de la facturation</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['automatisation-facturation'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Outils · Facturation</div>
      <h1>Automatisation de la facturation : du devis au paiement, sans ressaisie</h1>
      <p class="pillar-hero__intro">Entre le devis accepté, la facture émise, son envoi, sa relance et son encaissement, le cycle de facturation d'une TPE-PME est fait d'une dizaine de petites tâches répétitives — chacune source d'oubli ou de retard. <strong>L'automatiser ne veut pas dire changer de logiciel de facturation</strong> : cela veut dire connecter les étapes entre elles pour qu'elles s'enchaînent sans intervention manuelle.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Identifier vos automatisations rentables <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>
    </div>
    </div>

    <div class="pillar-section">
      <h2>Le cycle de facturation, un processus fait de petites tâches répétitives</h2>
      <p>Pris isolément, chaque geste du cycle de facturation semble anodin : générer un document, l'envoyer, vérifier s'il a été payé, relancer si besoin. Multiplié par le nombre de factures émises chaque mois, <strong>ce cumul de petites tâches représente souvent plusieurs heures par semaine</strong> — sans compter le coût caché des relances oubliées et des retards de paiement qui en découlent.</p>
      <p>Automatiser ce cycle ne consiste pas à remplacer votre logiciel de facturation ou votre comptabilité : cela consiste à orchestrer automatiquement le passage de l'un à l'autre, du devis accepté jusqu'à l'encaissement constaté.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je peux automatiser dans votre facturation</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Génération automatique de la facture dès l'acceptation d'un devis</strong>, sans recomposition manuelle.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Envoi automatique au client, avec accusé de réception tracé.</div>
        <div class="pillar-section__list-item"><span>✓</span>Relances automatiques selon un calendrier défini, jusqu'au paiement ou à une action explicite.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Rapprochement automatique entre les paiements reçus et les factures émises, avec <strong>signalement des écarts</strong>.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Transmission automatique des factures validées vers votre comptabilité, prêtes à être comptabilisées.</div>
      </div>
    </div>

    <!-- comparatif -->
    <div class="pillar-table">
      <h2>Facturation manuelle vs automatisée</h2>
      <div class="pillar-table__wrap">
        <table>
          <thead>
            <tr><th>Étape</th><th>Manuelle</th><th>Automatisée</th></tr>
          </thead>
          <tbody>
            <tr><td>Génération de la facture</td><td>10 à 20 min par facture</td><td>Automatique, quelques secondes</td></tr>
            <tr><td>Envoi au client</td><td>Manuel, parfois oublié</td><td>Systématique et tracé</td></tr>
            <tr><td>Relance en cas d'impayé</td><td>Faite au cas par cas</td><td>Déclenchée automatiquement selon un calendrier</td></tr>
            <tr><td>Rapprochement paiement / facture</td><td>Pointage manuel mensuel</td><td>Continu, écarts signalés</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Devis accepté → facture générée automatiquement</h3>
          <p>Dès qu'un devis est accepté dans le CRM, la facture correspondante est générée et envoyée sans intervention.</p>
          <div class="pillar-usecase__gain">2 min au lieu de 20</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Relances automatiques sur factures impayées</h3>
          <p>Chaque facture non réglée à échéance déclenche une relance personnalisée, sans y penser.</p>
          <div class="pillar-usecase__gain">−38% de retards de paiement</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line></svg></div>
          <h3>Rapprochement automatique des encaissements</h3>
          <p>Les paiements reçus sont rapprochés automatiquement des factures émises, écarts signalés immédiatement.</p>
          <div class="pillar-usecase__gain">Clôture plus rapide</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Combien d'heures votre cycle de facturation vous prend-il chaque mois ?</p>
      <span class="pillar-mid-cta__connector" aria-hidden="true"></span>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>

    <div class="pillar-section">
      <h2>La facturation dans votre cocon d'automatisation</h2>
      <p>L'automatisation de la facturation s'articule naturellement avec l'<a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> en aval, avec l'<a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">automatisation CRM</a> en amont (devis, opportunités), et s'appuie sur l'<a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>">OCR</a> et l'<a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>">extraction PDF</a> pour les factures fournisseurs entrantes. C'est souvent l'un des premiers processus complets automatisés dans le cadre d'une <a href="<?php echo esc_url( eb_url('automatisation-entreprise') ); ?>">automatisation d'entreprise</a>.</p>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Dois-je changer de logiciel de facturation ?</h3>
        <p>Non. L'automatisation se construit sur le logiciel que vous utilisez déjà, en connectant ses différentes étapes entre elles et à vos autres outils.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Quelle est la différence avec l'automatisation comptable ?</h3>
        <p>L'<a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">automatisation comptable</a> couvre l'ensemble de la comptabilité (factures fournisseurs, rapprochement bancaire, notes de frais). L'automatisation de la facturation se concentre spécifiquement sur le cycle devis → facture → paiement côté client, un processus commercial autant que comptable.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Les relances automatiques ne risquent-elles pas de froisser un bon client ?</h3>
        <p>Le ton et le calendrier de relance sont définis avec vous, et chaque étape peut prévoir une validation humaine avant envoi pour les comptes sensibles.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte l'automatisation de la facturation ?</h3>
        <p>Un premier flux ciblé (génération + relances) démarre autour de 1 000 à 1 500€. Un cycle complet avec rapprochement automatique se chiffre après audit.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour la mettre en place ?</h3>
        <p>Deux à trois semaines pour un premier flux, tests sur vos factures réelles inclus.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Cela fonctionne-t-il avec la facturation électronique obligatoire ?</h3>
        <p>Oui, l'automatisation s'adapte aux formats requis par la réglementation en vigueur, en s'appuyant sur les fonctionnalités de votre logiciel de facturation.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je garder un contrôle avant l'envoi de chaque facture ?</h3>
        <p>Oui, une validation humaine avant envoi est courante au démarrage, puis retirée progressivement une fois la confiance établie sur les cas standards.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il en cas de litige sur une facture ?</h3>
        <p>Le cycle automatique de relance s'interrompt dès qu'un litige est signalé, pour repasser en traitement manuel — l'automatisation ne force jamais une relance sur un dossier contesté.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je automatiser uniquement les relances, sans toucher au reste ?</h3>
        <p>Oui, c'est un excellent point de départ : automatiser uniquement les relances est rapide à mettre en place et donne un gain immédiatement mesurable.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Qui reste propriétaire du scénario mis en place ?</h3>
        <p>Vous. Le scénario, les accès et la documentation vous appartiennent dès la livraison, indépendamment de moi.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>" class="pillar-related__pill">Automatisation comptable <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ocr') ); ?>" class="pillar-related__pill">Automatisation OCR <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('extraction-pdf') ); ?>" class="pillar-related__pill">Extraction de données PDF <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Voyons combien d'heures votre cycle de facturation pourrait vous faire gagner</h2>
      <p>Audit gratuit de 45 minutes, sans engagement.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
