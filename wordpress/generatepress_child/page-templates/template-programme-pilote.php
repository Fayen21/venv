<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Programme pilote
 */

$eb_pilot        = eb_pilot_campaign();
$eb_pilot_state  = ( 'closed' === $eb_pilot['status'] ) ? $eb_pilot['closed'] : $eb_pilot['open'];
$eb_pilot_title  = ( 'open' === $eb_pilot['status'] ) ? sprintf( $eb_pilot_state['title'], $eb_pilot['places'] ) : $eb_pilot_state['title'];
$eb_pilot_faq    = isset( eb_seo_data()['programme-pilote']['faq'] ) ? eb_seo_data()['programme-pilote']['faq'] : array();
?>
<?php get_header(); ?>
<main id="main">
  <div class="audit-layout">

    <!-- colonne gauche (sticky) : hero, même effet "constellation" que la page À propos -->
    <div class="audit-side">
      <div class="eb-hero-fx audit-side__hero-fx">
      <?php eb_hero_fx( eb_hero_fx_effects()['programme-pilote'] ); ?>
      <div class="eyebrow audit-side__eyebrow">Programme pilote · Places limitées</div>
      <h1>Automatisez une tâche qui vous fait perdre du temps chaque semaine.</h1>
      <p class="audit-side__lead">EB Automatisation sélectionne ponctuellement quelques TPE et PME pour concevoir une automatisation concrète, à tarif pilote, avec un accompagnement cadré de A à Z.</p>
      <p class="audit-side__lead">Excel, e-mails, relances, documents, reporting : partons d'un problème réel de votre quotidien.</p>

      <div class="pilot-hero__actions">
        <a href="#pilot-form" class="btn btn-primary" data-pilot-scroll>Candidater au programme <span aria-hidden="true">→</span></a>
        <a href="#comment-ca-marche" class="btn btn-secondary">Voir comment cela fonctionne</a>
      </div>
      <p class="pilot-hero__micro">Candidature sans engagement · Réponse après étude de votre besoin</p>
      </div>

      <div class="audit-points">
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Un accompagnement cadré, de l'échange initial à la mise en service</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Un tarif pilote, sans engagement avant proposition chiffrée</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Nombre de places limité à chaque campagne</span></div>
      </div>

      <div class="audit-side__reviews"><?php echo eb_google_reviews_badge(); ?></div>
    </div>

    <!-- colonne droite : formulaire de candidature / succès -->
    <div>
      <form id="pilot-form" class="audit-form" novalidate>
        <h2>Candidater au programme pilote</h2>
        <p class="audit-form__intro">Décrivez-nous simplement la tâche que vous aimeriez simplifier. Seuls les champs marqués * sont obligatoires.</p>

        <!-- champ piège à robots : invisible et ignoré des lecteurs d'écran, ne doit jamais être rempli par un humain -->
        <div style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
          <label for="p-website">Laisser ce champ vide</label>
          <input type="text" id="p-website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <!-- champs de traçabilité campagne : remplis en JS depuis l'URL (utm_*, campagne, secteur) -->
        <input type="hidden" id="p-utm-source" name="utm_source" value="">
        <input type="hidden" id="p-utm-medium" name="utm_medium" value="">
        <input type="hidden" id="p-utm-campaign" name="utm_campaign" value="">
        <input type="hidden" id="p-utm-content" name="utm_content" value="">
        <input type="hidden" id="p-campagne" name="campagne" value="">
        <input type="hidden" id="p-secteur-campagne" name="secteur_campagne" value="">
        <input type="hidden" name="page" value="<?php echo esc_url( eb_url( 'programme-pilote' ) ); ?>">

        <div class="audit-form__grid">
          <div class="audit-form__row">
            <label class="audit-form__label" for="p-prenom">Prénom *</label>
            <input class="audit-form__input" type="text" id="p-prenom" name="prenom" autocomplete="given-name" placeholder="Marie" required aria-required="true" aria-describedby="p-prenom-error">
            <span class="audit-form__error" id="p-prenom-error">Merci d'indiquer votre prénom.</span>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="p-nom">Nom *</label>
            <input class="audit-form__input" type="text" id="p-nom" name="nom" autocomplete="family-name" placeholder="Durand" required aria-required="true" aria-describedby="p-nom-error">
            <span class="audit-form__error" id="p-nom-error">Merci d'indiquer votre nom.</span>
          </div>
          <div class="audit-form__row audit-form__row--full">
            <label class="audit-form__label" for="p-entreprise">Entreprise *</label>
            <input class="audit-form__input" type="text" id="p-entreprise" name="entreprise" autocomplete="organization" placeholder="Nom de votre entreprise" required aria-required="true" aria-describedby="p-entreprise-error">
            <span class="audit-form__error" id="p-entreprise-error">Merci d'indiquer le nom de votre entreprise.</span>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="p-email">E-mail professionnel *</label>
            <input class="audit-form__input" type="email" id="p-email" name="email" autocomplete="email" placeholder="marie@entreprise.fr" required aria-required="true" aria-describedby="p-email-error">
            <span class="audit-form__error" id="p-email-error">Merci d'indiquer une adresse email valide.</span>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="p-tel">Téléphone <span class="audit-form__optional">(facultatif)</span></label>
            <input class="audit-form__input" type="tel" id="p-tel" name="telephone" autocomplete="tel" placeholder="07 43 29 66 98">
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="p-secteur">Secteur d'activité</label>
            <select class="audit-form__input" id="p-secteur" name="secteur_activite">
              <option value="">Sélectionnez…</option>
              <option value="commerce">Commerce</option>
              <option value="artisanat">Artisanat</option>
              <option value="services">Services aux entreprises</option>
              <option value="sante">Santé</option>
              <option value="immobilier">Immobilier</option>
              <option value="organismes-formation">Organisme de formation</option>
              <option value="industrie">Industrie</option>
              <option value="restauration">Restauration / hôtellerie</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="p-taille">Taille de l'entreprise</label>
            <select class="audit-form__input" id="p-taille" name="taille_entreprise">
              <option value="">Sélectionnez…</option>
              <option value="independant">Indépendant</option>
              <option value="1-9">1 à 9 salariés</option>
              <option value="10-49">10 à 49 salariés</option>
              <option value="50+">50 salariés ou plus</option>
            </select>
          </div>
          <div class="audit-form__row">
            <span class="audit-form__label">Outils utilisés actuellement</span>
            <div class="pilot-form__checks">
              <label class="pilot-form__check"><input type="checkbox" name="outils[]" value="Excel"> Excel</label>
              <label class="pilot-form__check"><input type="checkbox" name="outils[]" value="Outlook / e-mail"> Outlook / e-mail</label>
              <label class="pilot-form__check"><input type="checkbox" name="outils[]" value="Logiciel métier"> Logiciel métier</label>
              <label class="pilot-form__check"><input type="checkbox" name="outils[]" value="Facturation"> Facturation</label>
              <label class="pilot-form__check"><input type="checkbox" name="outils[]" value="Documents PDF"> Documents PDF</label>
              <label class="pilot-form__check"><input type="checkbox" name="outils[]" value="Autre"> Autre</label>
            </div>
          </div>
          <div class="audit-form__row audit-form__row--full">
            <label class="audit-form__label" for="p-besoin">Quelle tâche vous prend le plus de temps aujourd'hui ? *</label>
            <textarea class="audit-form__textarea" id="p-besoin" name="besoin" rows="4" placeholder="Décrivez la tâche répétitive que vous aimeriez simplifier…" required aria-required="true" aria-describedby="p-besoin-error"></textarea>
            <span class="audit-form__error" id="p-besoin-error">Merci de décrire brièvement votre besoin.</span>
          </div>
          <div class="audit-form__row audit-form__row--full">
            <label class="pilot-form__consent">
              <input type="checkbox" id="p-consent" name="consent" required aria-required="true" aria-describedby="p-consent-error">
              <span>J'accepte que mes informations soient utilisées afin d'être recontacté(e) au sujet de ma candidature, conformément à la <a href="<?php echo esc_url( eb_url( 'confidentialite' ) ); ?>">politique de confidentialité</a>.</span>
            </label>
            <span class="audit-form__error" id="p-consent-error">Merci d'accepter cette condition pour envoyer votre candidature.</span>
          </div>
        </div>

        <button type="submit" class="btn btn-primary audit-form__submit">Envoyer ma candidature <span aria-hidden="true">→</span></button>
        <p class="audit-form__disclaimer">Vos données sont traitées dans le respect du RGPD et ne sont jamais cédées à un tiers.</p>
        <p id="pilot-form__server-error" class="audit-form__error" role="alert">Une erreur est survenue lors de l'envoi. Merci de réessayer, ou de nous <a href="mailto:emmanuel@eb-automatisation.fr">écrire directement</a>.</p>
      </form>

      <div id="pilot-success" class="audit-success" hidden>
        <div class="audit-success__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7"></path></svg></div>
        <h2>Candidature bien reçue</h2>
        <p class="audit-success__desc">Merci, votre candidature a bien été transmise. Nous l'étudierons et reviendrons vers vous rapidement.</p>

        <div class="audit-success__tiles">
          <a href="tel:+33743296698" class="audit-success__tile">
            <?php echo eb_contact_icon( 'phone-alt', 22, '1.6' ); ?>
            <span>07 43 29 66 98</span>
          </a>
          <a href="mailto:emmanuel@eb-automatisation.fr" class="audit-success__tile">
            <?php echo eb_contact_icon( 'email', 22, '1.6' ); ?>
            <span>Écrire un email</span>
          </a>
        </div>

        <a href="<?php echo esc_url( eb_url( 'index' ) ); ?>" id="pilot-back" class="audit-success__back">← Retour à l'accueil</a>
      </div>
    </div>

  </div>

  <!-- 1. le programme en bref -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Le programme en bref</span>
      <h2 style="max-width:680px;margin:0 auto;">Un accompagnement conçu pour résoudre un irritant concret.</h2>
    </div>
    <div class="grid grid-3">
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><circle cx="12" cy="12" r="3"></circle></svg></div>
        <h3>Un besoin ciblé</h3>
        <p>Nous partons d'une tâche précise qui vous fait perdre du temps : ressaisie, relances, préparation de documents, suivi Excel ou reporting.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--b"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a4 4 0 0 1-5.4 5.4L4 17v3h3l5.3-5.3a4 4 0 0 1 5.4-5.4l-2.6 2.6-2-2z"></path></svg></div>
        <h3>Une solution utile</h3>
        <p>Nous concevons une automatisation adaptée à vos outils et à votre manière de travailler, sans complexité inutile.</p>
      </div>
      <div class="card differentiators__card">
        <div class="icon-tile icon-tile--a"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V10M11 19V4M18 19v-6"></path></svg></div>
        <h3>Un résultat mesurable</h3>
        <p>L'objectif est de réduire les manipulations manuelles, sécuriser le processus et mesurer le temps potentiellement libéré.</p>
      </div>
    </div>
  </section>

  <!-- 2. pour qui -->
  <section class="section" style="background:var(--bg-soft);">
    <div class="section-head">
      <span class="eyebrow">Pour qui ?</span>
      <h2 style="max-width:680px;margin:0 auto;">Ce programme est fait pour vous si…</h2>
    </div>
    <div class="grid grid-2" style="max-width:920px;margin:0 auto 28px;gap:16px 32px;">
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Vous perdez du temps à recopier les mêmes informations d'un outil à l'autre</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Vos équipes utilisent plusieurs fichiers Excel ou tableaux de suivi</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Vous faites des relances manuelles de façon régulière</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">La préparation de documents ou de reportings se répète chaque semaine ou chaque mois</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Une tâche importante dépend d'une seule personne, sans réelle sécurisation</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Vous souhaitez automatiser progressivement, sans tout transformer d'un coup</span></div>
    </div>
    <div class="pilot-callout" style="max-width:760px;margin:0 auto;">
      <p>Le programme n'est pas adapté à tous les besoins. Chaque candidature est étudiée pour vérifier que le projet est réaliste, utile et suffisamment cadré.</p>
    </div>
  </section>

  <!-- 3. ce qui est inclus -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Ce qui est inclus</span>
      <h2 style="max-width:680px;margin:0 auto;">Ce que comprend l'accompagnement pilote</h2>
    </div>
    <div class="grid pilot-steps-5 audit-steps">
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">1</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Échange de qualification.</strong> Nous clarifions la tâche concernée, les outils utilisés et le résultat attendu.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">2</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Audit ciblé du processus.</strong> Nous identifions les étapes manuelles, les points de friction et les prérequis techniques.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">3</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Proposition d'automatisation.</strong> Vous recevez une proposition claire : périmètre, fonctionnement, livrables, planning et budget.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">4</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Conception et tests.</strong> L'automatisation est mise en place, testée et ajustée avec vous avant sa mise en service.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">5</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Prise en main et documentation.</strong> Vous disposez d'une solution compréhensible, avec les consignes nécessaires pour l'utiliser durablement.</p>
      </div>
    </div>
  </section>

  <!-- 4. contrepartie du tarif pilote -->
  <section class="section" style="background:var(--bg-soft);">
    <div class="section-head">
      <span class="eyebrow">Contrepartie du tarif pilote</span>
      <h2 style="max-width:680px;margin:0 auto;">Pourquoi un tarif pilote ?</h2>
    </div>
    <p style="max-width:720px;margin:0 auto 28px;text-align:center;color:var(--text-3);font-size:16px;line-height:1.65;">Le programme pilote permet à EB Automatisation de consolider ses méthodes sur des cas réels et de produire des retours d'expérience utiles. En échange d'un tarif préférentiel, les entreprises sélectionnées s'engagent à participer à un bilan de mission.</p>
    <div class="audit-points" style="max-width:640px;margin:0 auto 28px;">
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Un retour d'expérience honnête après le déploiement</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">L'autorisation de présenter les enseignements du projet sous forme anonymisée</span></div>
      <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Un avis client facultatif, uniquement si vous êtes satisfait(e) de l'accompagnement</span></div>
    </div>
    <div class="pilot-callout" style="max-width:760px;margin:0 auto;">
      <p>Le nom de votre entreprise, vos données et vos éléments confidentiels ne sont jamais publiés sans accord écrit spécifique. Les études de cas sont conçues pour être anonymisées de manière réelle.</p>
    </div>
  </section>

  <!-- 5. campagne actuellement ouverte -->
  <section class="section">
    <div class="pilot-campaign pilot-campaign--<?php echo esc_attr( $eb_pilot['status'] ); ?>">
      <span class="badge-pill badge-pill--<?php echo ( 'open' === $eb_pilot['status'] ) ? 'green' : 'orange'; ?>"><?php echo esc_html( $eb_pilot_state['badge'] ); ?></span>
      <h2><?php echo esc_html( $eb_pilot_title ); ?></h2>
      <p><?php echo esc_html( $eb_pilot_state['text'] ); ?></p>
      <a href="#pilot-form" class="btn btn-primary" data-pilot-scroll><?php echo esc_html( $eb_pilot_state['cta'] ); ?> <span aria-hidden="true">→</span></a>
    </div>
  </section>

  <!-- 6. comment ça marche -->
  <section class="section" id="comment-ca-marche" style="background:var(--bg-soft);">
    <div class="section-head">
      <span class="eyebrow">Comment ça marche ?</span>
      <h2 style="max-width:680px;margin:0 auto;">Une démarche simple, en trois étapes</h2>
    </div>
    <div class="grid grid-3 audit-steps">
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">1</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Vous candidatez.</strong> Vous nous indiquez la tâche que vous aimeriez automatiser.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">2</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Nous échangeons.</strong> Un échange court permet de vérifier l'intérêt, la faisabilité et le périmètre du projet.</p>
      </div>
      <div class="audit-step">
        <div class="audit-step__head"><span class="audit-step__num">3</span><span class="audit-step__rule"></span></div>
        <p class="audit-step__text"><strong>Vous recevez une proposition.</strong> Si votre besoin correspond au programme, nous vous proposons un accompagnement clair et adapté.</p>
      </div>
    </div>
    <div style="text-align:center;">
      <a href="#pilot-form" class="btn btn-primary audit-steps__cta" data-pilot-scroll>Candidater au programme pilote <span aria-hidden="true">→</span></a>
    </div>
  </section>

  <!-- avis clients -->
  <section class="section reviews-section" id="avis">
    <?php echo eb_reviews_section_html(); ?>
  </section>

  <!-- FAQ -->
  <?php if ( ! empty( $eb_pilot_faq ) ) : ?>
  <section class="section" style="padding:50px 40px 20px;">
    <div class="section-head" style="margin-bottom:40px;">
      <span class="eyebrow">Questions fréquentes</span>
      <h2 style="max-width:620px;margin:0 auto;">Vos questions sur le programme pilote</h2>
    </div>
    <div class="pilot-faq">
      <?php foreach ( $eb_pilot_faq as $item ) : ?>
      <details class="pilot-faq__item">
        <summary class="pilot-faq__question"><?php echo esc_html( $item['q'] ); ?></summary>
        <p class="pilot-faq__answer"><?php echo esc_html( $item['a'] ); ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

  <!-- CTA final -->
  <section class="section final-cta-section">
    <div class="cta-dotted">
      <div class="cta-dotted__text">
        <h2 style="font-size:30px;margin-bottom:8px;">Et si votre prochaine tâche répétitive devenait votre premier gain de temps ?</h2>
        <p>Expliquez-nous en quelques lignes ce qui vous fait perdre du temps aujourd'hui. Nous vous dirons honnêtement si le programme pilote peut correspondre à votre besoin.</p>
      </div>
      <div class="pilot-final-cta__actions">
        <a href="#pilot-form" class="btn btn-primary" data-pilot-scroll>Candidater au programme pilote <span aria-hidden="true">→</span></a>
        <a href="<?php echo esc_url( eb_url( 'apropos' ) ); ?>" class="btn btn-secondary">Découvrir EB Automatisation</a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
