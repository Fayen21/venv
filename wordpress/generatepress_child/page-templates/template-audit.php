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
      <div class="eb-hero-fx audit-side__hero-fx">
      <?php eb_hero_fx( eb_hero_fx_effects()['audit'] ); ?>
      <div class="eyebrow audit-side__eyebrow">Audit gratuit</div>
      <h1>45 minutes pour repérer vos automatisations les plus rentables</h1>
      <p class="audit-side__lead">Décrivez votre situation. Je reviens vers vous sous 24h pour fixer un créneau. À l'issue de l'échange, vous repartez avec des pistes concrètes — que vous travailliez avec moi ou non.</p>
      </div>

      <div class="audit-points">
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">45 minutes, par visioconférence ou téléphone</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Sans engagement et sans jargon technique</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Vous repartez avec des pistes concrètes et chiffrées</span></div>
        <div class="audit-point"><span class="audit-point__check" aria-hidden="true">✓</span><span class="audit-point__text">Réponse sous 24h pour fixer le rendez-vous</span></div>
      </div>

      <div class="audit-side__reviews"><?php echo eb_google_reviews_badge(); ?></div>

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
      <?php echo eb_mini_review_html( 1 ); ?>
      <form id="audit-form" class="audit-form" novalidate>
        <h2>Demander un audit gratuit</h2>
        <p class="audit-form__intro">Réponse sous 24h. Seuls les champs marqués * sont obligatoires.</p>

        <!-- champ piège à robots : invisible et ignoré des lecteurs d'écran, ne doit jamais être rempli par un humain -->
        <div style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
          <label for="f-website">Laisser ce champ vide</label>
          <input type="text" id="f-website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="audit-form__grid">
          <div class="audit-form__row">
            <label class="audit-form__label" for="f-prenom">Prénom *</label>
            <input class="audit-form__input" type="text" id="f-prenom" name="prenom" autocomplete="given-name" placeholder="Marie" required aria-required="true" aria-describedby="f-prenom-error">
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
            <input class="audit-form__input" type="email" id="f-email" name="email" autocomplete="email" placeholder="marie@entreprise.fr" required aria-required="true" aria-describedby="f-email-error">
            <span class="audit-form__error" id="f-email-error">Merci d'indiquer une adresse email valide.</span>
          </div>
          <div class="audit-form__row">
            <label class="audit-form__label" for="f-tel">Téléphone <span class="audit-form__optional">(optionnel)</span></label>
            <input class="audit-form__input" type="tel" id="f-tel" name="telephone" autocomplete="tel" placeholder="06 95 20 41 27">
          </div>
          <div class="audit-form__row audit-form__row--full">
            <label class="audit-form__label" for="f-besoin">Décrivez votre besoin *</label>
            <textarea class="audit-form__textarea" id="f-besoin" name="besoin" rows="4" placeholder="Quelle tâche vous fait perdre le plus de temps aujourd'hui ?" required aria-required="true" aria-describedby="f-besoin-error"></textarea>
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
        <p class="audit-success__desc">Je reviens vers vous par email sous 24h pour convenir d'un créneau de 45 minutes.</p>

        <div class="calendly-placeholder">
          <div class="calendly-placeholder__icon" aria-hidden="true"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="16" rx="2"></rect><path d="M8 3v4M16 3v4M3 10h18"></path></svg></div>
          <p class="calendly-placeholder__desc">Réservez directement votre créneau de 45 minutes :</p>
          <a href="https://calendly.com/emmanuel-b21850/new-meeting" target="_blank" rel="noopener noreferrer" class="btn btn-primary" aria-label="Choisir un créneau sur Calendly (ouvre un nouvel onglet)">Choisir un créneau</a>
        </div>

        <div class="audit-success__tiles">
          <a href="tel:+33695204127" class="audit-success__tile">
            <?php echo eb_contact_icon( 'phone-alt', 22, '1.6' ); ?>
            <span>06 95 20 41 27</span>
          </a>
          <a href="mailto:contact@eb-automatisation.fr" class="audit-success__tile">
            <?php echo eb_contact_icon( 'email', 22, '1.6' ); ?>
            <span>Écrire un email</span>
          </a>
        </div>

        <a href="<?php echo esc_url( eb_url('index') ); ?>" id="audit-back" class="audit-success__back">← Retour à l'accueil</a>
      </div>
    </div>

  </div>

  <!-- avis clients -->
  <section class="section reviews-section" id="avis">
    <?php echo eb_reviews_section_html(); ?>
  </section>

  <!-- tarifs -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Tarifs</span>
      <h2 style="max-width:680px;margin:0 auto;">Combien coûte une automatisation ?</h2>
    </div>
    <div class="grid grid-4 pricing__grid">

      <div class="pricing__card">
        <div class="pricing__name">Audit gratuit</div>
        <div class="pricing__tagline">Le point de départ</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>45 minutes</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Sans engagement</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Identification des gains potentiels</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">Tarif</div>
          <div class="pricing__price pricing__price--free">Gratuit</div>
        </div>
      </div>

      <div class="pricing__card">
        <div class="pricing__name">Quick Win</div>
        <div class="pricing__tagline">Une automatisation ciblée</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>Une automatisation ciblée</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Mise en place rapide</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>ROI immédiat</div>
          <div class="pricing__feature"><span class="pricing__check pricing__check--duration"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></span>Déploiement : 1 à 2 semaines</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">À partir de</div>
          <div class="pricing__price">800 €</div>
        </div>
      </div>

      <div class="pricing__card pricing__card--featured">
        <span class="pricing__ribbon">Recommandé</span>
        <div class="pricing__name">Automatisation métier</div>
        <div class="pricing__tagline">Un service complet automatisé</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>CRM</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>RH</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Comptabilité</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Reporting</div>
          <div class="pricing__feature"><span class="pricing__check pricing__check--duration"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 8v4.5l3 2"></path></svg></span>Déploiement : 2 à 4 semaines</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">À partir de</div>
          <div class="pricing__price">1 500 €</div>
        </div>
      </div>

      <div class="pricing__card">
        <div class="pricing__name">Projet sur mesure</div>
        <div class="pricing__tagline">Processus complexes &amp; IA avancée</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>Plusieurs logiciels</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>IA avancée</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Processus complexes</div>
        </div>
        <div class="pricing__price-row">
          <div class="pricing__price-label">Tarification</div>
          <div class="pricing__price">Sur devis</div>
        </div>
      </div>

    </div>
    <p class="pricing__footnote">Chaque projet est chiffré après audit. Les coûts dépendent de vos outils et de vos processus. <a href="<?php echo esc_url( eb_url('tarifs') ); ?>">Voir des exemples de budgets détaillés →</a></p>
  </section>

</main>
<?php get_footer(); ?>
