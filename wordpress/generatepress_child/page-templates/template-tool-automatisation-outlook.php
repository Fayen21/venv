<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Outil Automatisation Outlook
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
      <span class="pillar-breadcrumb__current">Automatisation Outlook</span>
    </nav>

    <!-- hero -->
    <div class="eb-hero-fx eb-hero-fx--bleed">
    <?php eb_hero_fx( eb_hero_fx_effects()['automatisation-outlook'] ); ?>
    <div class="eb-hero-fx__inner">
    <div class="pillar-hero">
      <div class="eyebrow pillar-hero__eyebrow">Outils · Outlook</div>
      <h1>Automatisation Outlook : triez, classez et traitez vos emails sans y passer vos journées</h1>
      <p class="pillar-hero__intro">Un dirigeant de PME reçoit en moyenne plusieurs dizaines d'emails par jour : demandes clients, factures fournisseurs, relances internes, newsletters. Trier, classer et répondre à ce flux manuellement représente souvent <strong>une à deux heures perdues chaque jour</strong>. L'automatisation Outlook lit, catégorise et déclenche la bonne action automatiquement — sans changer votre messagerie ni votre façon de travailler.</p>
      <div class="pillar-hero__actions">
        <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('solutions') ); ?>" class="btn btn-secondary">Voir toutes les solutions</a>
      </div>
    </div>
    </div>
    </div>

    <div class="pillar-section">
      <h2>Pourquoi la boîte mail reste le principal goulot d'étranglement</h2>
      <p>Contrairement à un logiciel métier, la boîte mail n'a pas de structure imposée : chaque message est un texte libre, avec sa propre mise en forme, son propre degré d'urgence, ses propres pièces jointes. C'est justement ce qui la rend difficile à automatiser avec des règles simples — et c'est précisément ce que l'automatisation IA sait faire : <strong>lire un email comme le ferait un assistant, en comprendre le contenu, et décider de l'action à mener</strong>.</p>
      <p>Le résultat n'est pas une boîte mail « zéro humain » : <strong>c'est une boîte mail où le tri, le classement et les actions répétitives sont déjà faits quand vous l'ouvrez</strong>, pour vous laisser traiter en priorité ce qui demande réellement votre attention.</p>
    </div>

    <div class="pillar-section">
      <h2>Ce que je peux automatiser concrètement sur Outlook</h2>
      <div class="pillar-section__list">
        <div class="pillar-section__list-item"><span>✓</span><span><strong>Catégorisation automatique des emails entrants</strong> (commercial, RH, fournisseur, urgent) et affectation à la bonne personne.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Extraction des pièces jointes (factures, devis, contrats) et classement automatique dans le bon dossier ou le bon outil.</div>
        <div class="pillar-section__list-item"><span>✓</span><span>Création automatique d'une tâche ou d'une fiche CRM à partir d'un email entrant, <strong>sans ressaisie</strong>.</span></div>
        <div class="pillar-section__list-item"><span>✓</span>Réponses automatiques ou pré-rédigées pour les demandes récurrentes, avec validation avant envoi si souhaité.</div>
        <div class="pillar-section__list-item"><span>✓</span>Rappels et relances automatiques sur les emails restés sans réponse au-delà d'un délai défini.</div>
      </div>
    </div>

    <div class="pillar-section">
      <h2>La lecture IA appliquée à votre messagerie</h2>
      <p>Chaque email reçu est analysé pour en identifier l'expéditeur, la catégorie et la priorité, puis déclenche automatiquement l'action correspondante — classement, création de tâche, transfert à la bonne personne. Cette approche s'appuie sur les mêmes principes que l'<a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>">automatisation IA</a> appliquée aux autres documents de l'entreprise : lire une information non structurée pour la rendre exploitable automatiquement.</p>
    </div>

    <!-- comparatif -->
    <div class="pillar-table">
      <h2>Comparatif : traitement manuel vs automatisé de la boîte mail</h2>
      <div class="pillar-table__wrap">
        <table>
          <thead>
            <tr><th>Tâche</th><th>Temps manuel</th><th>Temps automatisé</th></tr>
          </thead>
          <tbody>
            <tr><td>Tri et classement quotidien</td><td>30 à 60 min/jour</td><td>Quasi 0</td></tr>
            <tr><td>Extraction d'une pièce jointe</td><td>2 à 5 min/email</td><td>Quelques secondes</td></tr>
            <tr><td>Création de fiche CRM depuis un email</td><td>3 à 5 min</td><td>Automatique</td></tr>
            <tr><td>Relance sur email sans réponse</td><td>Souvent oubliée</td><td>Systématique</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- cas d'usage -->
    <div class="pillar-usecases">
      <h2>Cas d'usage concrets</h2>
      <div class="pillar-usecases__grid">
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg></div>
          <h3>Tri intelligent de la boîte mail commune</h3>
          <p>Les emails reçus sur une adresse partagée sont catégorisés et affectés automatiquement à la bonne personne.</p>
          <div class="pillar-usecase__gain">0 email oublié</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><line x1="8" y1="8" x2="16" y2="8"></line><line x1="8" y1="12" x2="16" y2="12"></line><line x1="8" y1="16" x2="13" y2="16"></line></svg></div>
          <h3>Classement automatique des factures reçues</h3>
          <p>Chaque facture fournisseur reçue par email est détectée, extraite et transmise à la comptabilité sans intervention.</p>
          <div class="pillar-usecase__gain">−70% de temps de tri</div>
        </div>
        <div class="pillar-usecase">
          <div class="pillar-usecase__icon"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2.4"></circle><path d="M3.5 19.5a5.5 5.5 0 0 1 11 0"></path><path d="M14.5 19.5a4.5 4.5 0 0 1 7.5-3.3"></path></svg></div>
          <h3>Qualification automatique des demandes entrantes</h3>
          <p>Chaque demande de devis ou de contact crée automatiquement une fiche et une tâche de suivi dans le CRM.</p>
          <div class="pillar-usecase__gain">Réponse plus rapide</div>
        </div>
      </div>
    </div>

    <!-- mid CTA -->
    <div class="pillar-mid-cta">
      <p>Combien de temps passez-vous chaque jour à trier votre boîte mail ?</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Estimer votre gain de temps <span>→</span></a>
    </div>

    <div class="pillar-section">
      <h2>Outlook au cœur de votre cocon d'outils</h2>
      <p>Outlook est rarement isolé : les emails classés alimentent des fichiers <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>">Excel</a>, déclenchent des actions dans votre <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">CRM</a>, ou nourrissent votre <a href="<?php echo esc_url( eb_url('automatisation-comptable') ); ?>">comptabilité</a>. Si vous utilisez la suite complète, l'automatisation s'étend naturellement à <a href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>">Microsoft 365</a> (Teams, SharePoint, OneDrive). L'orchestration technique repose sur <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> ou <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a>, tous deux connectés nativement à Outlook.</p>
    </div>

    <!-- FAQ -->
    <div class="pillar-faq">
      <h2>Questions fréquentes</h2>
      <div class="pillar-faq__item">
        <h3>Dois-je changer de messagerie pour automatiser Outlook ?</h3>
        <p>Non. L'automatisation se connecte à votre compte Outlook existant (professionnel ou Microsoft 365) sans aucun changement d'interface pour vous ou vos équipes.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'automatisation peut-elle répondre à ma place sans validation ?</h3>
        <p>C'est possible sur des cas très standards, mais la plupart des projets démarrent avec une validation humaine avant envoi, puis passent en automatique une fois la confiance établie.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Est-ce que ça fonctionne sur une boîte mail partagée par plusieurs personnes ?</h3>
        <p>Oui, c'est même l'un des cas d'usage les plus fréquents : la répartition automatique des emails entre plusieurs destinataires selon leur contenu.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Mes emails restent-ils confidentiels ?</h3>
        <p>Oui. L'automatisation lit et traite vos emails selon les règles définies avec vous, sans les exposer à un tiers non prévu dans votre chaîne d'outils ni les revendre.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien coûte l'automatisation d'une boîte Outlook ?</h3>
        <p>Les automatisations simples (tri, classement) démarrent autour de 800€. Un traitement plus poussé (lecture IA, création automatique de fiches) se chiffre après audit selon le volume d'emails concerné.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Combien de temps pour la mettre en place ?</h3>
        <p>Un tri et classement automatique se déploie en une à deux semaines. Une lecture IA plus fine des emails prend généralement deux à trois semaines, avec une phase de calibrage.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Que se passe-t-il si un email ne correspond à aucune règle connue ?</h3>
        <p>Il est laissé dans la boîte de réception standard, sans action automatique, plutôt que d'être classé au hasard — l'automatisation ne force jamais une décision incertaine.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Puis-je garder le contrôle total sur les règles de tri ?</h3>
        <p>Oui. Chaque règle est documentée et peut être ajustée ou désactivée à tout moment, sans dépendance technique de votre part.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>L'automatisation fonctionne-t-elle aussi sur mobile ?</h3>
        <p>Oui. Le traitement se fait côté serveur, en amont de votre messagerie : les emails arrivent déjà triés, que vous les consultiez sur ordinateur ou sur mobile.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Peut-on combiner Outlook et un CRM en même temps ?</h3>
        <p>Oui, c'est un des flux les plus demandés : chaque email qualifié comme commercial crée automatiquement une fiche dans le <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>">CRM</a>, sans ressaisie.</p>
      </div>
      <div class="pillar-faq__item">
        <h3>Faut-il des compétences techniques pour utiliser le résultat ?</h3>
        <p>Non. Une fois en place, l'automatisation fonctionne en arrière-plan ; vous continuez à utiliser Outlook normalement, simplement avec moins de tri manuel à faire.</p>
      </div>
    </div>

    <!-- explorer aussi -->
    <div class="pillar-related">
      <div class="pillar-related__label">Explorer aussi</div>
      <div class="pillar-related__list">
        <a href="<?php echo esc_url( eb_url('automatisation-excel') ); ?>" class="pillar-related__pill">Automatisation Excel <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-microsoft-365') ); ?>" class="pillar-related__pill">Automatisation Microsoft 365 <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-ia') ); ?>" class="pillar-related__pill">Automatisation IA <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-crm') ); ?>" class="pillar-related__pill">Automatisation CRM <span>→</span></a>
        <a href="<?php echo esc_url( eb_url('automatisation-taches') ); ?>" class="pillar-related__pill">Automatisation des tâches <span>→</span></a>
      </div>
    </div>

    <!-- CTA final -->
    <div class="pillar-final-cta">
      <h2>Prêt à reprendre le contrôle de votre boîte mail ?</h2>
      <p>Audit gratuit de 45 minutes, sans engagement.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary">Réserver un audit gratuit <span>→</span></a>
    </div>

  </div>
</main>
<?php get_footer(); ?>
