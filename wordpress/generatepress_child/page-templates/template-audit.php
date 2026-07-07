<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Audit gratuit
 */
?>
<?php get_header(); ?>
<main id="main">
  <div class="audit-layout">

    <!-- colonne gauche (sticky) -->
    <div class="audit-side">
      <div class="eyebrow audit-side__eyebrow">Audit gratuit</div>
      <h1>45 minutes pour repérer vos automatisations les plus rentables</h1>
      <p class="audit-side__lead">Décrivez votre situation. Je reviens vers vous sous 24 à 48h pour fixer un créneau. À l'issue de l'échange, vous repartez avec des pistes concrètes — que vous travailliez avec moi ou non.</p>

      <div class="audit-points">
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">45 minutes, par visioconférence ou téléphone</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Sans engagement et sans jargon technique</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Vous repartez avec des pistes concrètes et chiffrées</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Réponse sous 24 à 48h pour fixer le rendez-vous</span></div>
      </div>

      <div class="audit-avatar-card">
        <span class="audit-avatar-card__img"><img src="<?php echo esc_url( eb_asset('images/uploads/emmanuelavatar.jpg') ); ?>" alt="Emmanuel" width="800" height="800" loading="lazy"></span>
        <div>
          <div class="audit-avatar-card__name">Vous échangez directement avec moi</div>
          <div class="audit-avatar-card__sub">Pas de commercial, pas d'intermédiaire.</div>
        </div>
      </div>

      <div class="audit-alt-contact">Pas envie de remplir un formulaire ? <a href="tel:+33695204127">Appelez-moi</a> ou <a href="mailto:contact@eb-automatisation.fr">écrivez-moi</a> directement.</div>
    </div>

    <!-- colonne droite : formulaire / succès -->
    <div>
      <form id="audit-form" class="audit-form" novalidate>
        <h2>Demander un audit gratuit</h2>
        <p class="audit-form__intro">Réponse sous 24 à 48h. Seuls les champs marqués * sont obligatoires.</p>

        <!-- champ piège à robots : invisible et ignoré des lecteurs d'écran, ne doit jamais être rempli par un humain -->
        <div style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
          <label for="f-website">Laisser ce champ vide</label>
          <input type="text" id="f-website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="audit-form__grid">
          <div class="audit-form__row">
            <label class="audit-form__label" for="f-prenom">Prénom *</label>
            <input class="audit-form__input" type="text" id="f-prenom" name="prenom" autocomplete="given-name" placeholder="Marie" aria-required="true" aria-describedby="f-prenom-error">
            <span class="audit-form__error" id="f-prenom-error">Merci d'indiquer votre prénom.</span>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="f-nom">Nom <span class="audit-form__optional">(optionnel)</span></label>
            <input class="audit-form__input" type="text" id="f-nom" name="nom" autocomplete="family-name" placeholder="Durand">
          </div>
          <div class="audit-form__row audit-form__row--full">
            <label class="audit-form__label" for="f-entreprise">Entreprise <span class="audit-form__optional">(optionnel)</span></label>
            <input class="audit-form__input" type="text" id="f-entreprise" name="entreprise" autocomplete="organization" placeholder="Nom de votre entreprise">
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="f-email">Email *</label>
            <input class="audit-form__input" type="email" id="f-email" name="email" autocomplete="email" placeholder="marie@entreprise.fr" aria-required="true" aria-describedby="f-email-error">
            <span class="audit-form__error" id="f-email-error">Merci d'indiquer une adresse email valide.</span>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="f-tel">Téléphone <span class="audit-form__optional">(optionnel)</span></label>
            <input class="audit-form__input" type="tel" id="f-tel" name="telephone" autocomplete="tel" placeholder="06 95 20 41 27">
          </div>
          <div class="audit-form__row audit-form__row--full">
            <label class="audit-form__label" for="f-besoin">Décrivez votre besoin *</label>
            <textarea class="audit-form__textarea" id="f-besoin" name="besoin" rows="4" placeholder="Quelle tâche vous fait perdre le plus de temps aujourd'hui ?" aria-required="true" aria-describedby="f-besoin-error"></textarea>
            <span class="audit-form__error" id="f-besoin-error">Merci de décrire brièvement votre besoin.</span>
          </div>
        </div>

        <button type="submit" class="btn btn-primary audit-form__submit">Demander un audit gratuit <span aria-hidden="true">→</span></button>
        <p class="audit-form__disclaimer">En envoyant ce formulaire, vous acceptez d'être recontacté. Vos données sont traitées dans le respect du RGPD et ne sont jamais cédées.</p>
        <p id="audit-form__server-error" class="audit-form__error" role="alert">Une erreur est survenue lors de l'envoi. Merci de réessayer, ou de nous <a href="mailto:contact@eb-automatisation.fr">écrire directement</a>.</p>
      </form>

      <div id="audit-success" class="audit-success" hidden>
        <div class="audit-success__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7"></path></svg></div>
        <h2>Demande bien reçue<span id="audit-success-name"></span> !</h2>
        <p class="audit-success__desc">Je reviens vers vous par email sous 24 à 48h pour convenir d'un créneau de 45 minutes.</p>

        <div class="calendly-placeholder">
          <div class="calendly-placeholder__icon" aria-hidden="true">📅</div>
          <p class="calendly-placeholder__desc">Réservez directement votre créneau de 45 minutes :</p>
          <a href="https://calendly.com/emmanuel-b21850/new-meeting" target="_blank" rel="noopener noreferrer" class="btn btn-primary" aria-label="Choisir un créneau sur Calendly (ouvre un nouvel onglet)">Choisir un créneau</a>
        </div>

        <div class="audit-success__tiles">
          <a href="tel:+33695204127" class="audit-success__tile">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0C1E3C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h4l1.5 4.5-2 1.5a11 11 0 0 0 5.5 5.5l1.5-2 4.5 1.5v4a2 2 0 0 1-2 2c-8 0-14-6-14-14a2 2 0 0 1 2-2z"></path></svg>
            <span>06 95 20 41 27</span>
          </a>
          <a href="mailto:contact@eb-automatisation.fr" class="audit-success__tile">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0C1E3C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path></svg>
            <span>Écrire un email</span>
          </a>
        </div>

        <a href="<?php echo esc_url( eb_url('index') ); ?>" id="audit-back" class="audit-success__back">← Retour à l'accueil</a>
      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>
