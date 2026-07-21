<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Tarifs
 */
?>
<?php get_header(); ?>
<main id="main">

  <!-- hero (fond sombre, même gabarit que À propos) -->
  <div class="eb-hero-fx">
  <?php eb_hero_fx( eb_hero_fx_effects()['tarifs'] ); ?>
  <section class="tarifs-hero">
    <div class="eyebrow">Tarifs</div>
    <h1>Tarifs automatisation entreprise : exemples de budgets</h1>
    <p>Chaque automatisation est différente, mais les budgets suivent des ordres de grandeur assez stables. Cette page détaille les fourchettes de prix par type de projet, ce qui les fait varier, et à partir de quel volume d'heures gagnées une automatisation devient rentable.</p>
  </section>
  </div>

  <!-- tarifs -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Les 4 formats</span>
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
        <div class="pricing__tagline">Un service métier au choix : CRM, RH, comptabilité ou reporting</div>
        <div class="pricing__features">
          <div class="pricing__feature"><span class="pricing__check">✓</span>Un domaine métier automatisé de bout en bout</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Connexion à vos outils existants</div>
          <div class="pricing__feature"><span class="pricing__check">✓</span>Formation &amp; documentation incluses</div>
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
    <p class="pricing__footnote">Budgets indicatifs HT, hors abonnements éventuels aux outils utilisés (Make, n8n, OpenAI…). Chaque projet est chiffré après audit.</p>
  </section>

  <!-- inclus / non inclus -->
  <section class="section">
    <div class="tarifs-scope">
      <div class="tarifs-scope__col tarifs-scope__col--yes">
        <h3>Ce qui est inclus</h3>
        <div class="tarifs-scope__list">
          <div class="tarifs-scope__item"><span aria-hidden="true">✓</span><span>L'audit et la conception du scénario</span></div>
          <div class="tarifs-scope__item"><span aria-hidden="true">✓</span><span>La mise en place et les tests sur vos cas réels</span></div>
          <div class="tarifs-scope__item"><span aria-hidden="true">✓</span><span>La documentation complète, qui vous appartient</span></div>
        </div>
      </div>
      <div class="tarifs-scope__col tarifs-scope__col--no">
        <h3>Ce qui n'est pas inclus</h3>
        <div class="tarifs-scope__list">
          <div class="tarifs-scope__item"><span aria-hidden="true">✕</span><span>Les abonnements aux outils tiers (Make, n8n, OpenAI, logiciels métier…)</span></div>
          <div class="tarifs-scope__item"><span aria-hidden="true">✕</span><span>Le suivi ou la maintenance sur la durée (accord séparé si besoin)</span></div>
          <div class="tarifs-scope__item"><span aria-hidden="true">✕</span><span>Un hébergement spécifique, si votre projet en nécessite un</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- exemples de budgets -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Exemples concrets</span>
      <h2 style="max-width:680px;margin:0 auto;">Quelques projets et leur budget indicatif</h2>
      <p style="max-width:680px;margin:12px auto 0;font-size:14px;color:var(--muted);">Montants indicatifs HT, hors abonnements aux outils utilisés.</p>
    </div>
    <div class="tarifs-examples__grid">
      <div class="tarifs-example">
        <div class="tarifs-example__name">Relance automatique de devis</div>
        <div class="tarifs-example__desc">Un devis sans réponse relance automatiquement le prospect à J+3 et J+7, avec alerte si aucune réponse après la 2ᵉ relance.</div>
        <div class="tarifs-example__price">≈ 800 – 1 200 €</div>
      </div>
      <div class="tarifs-example">
        <div class="tarifs-example__name">Extraction de données PDF (factures)</div>
        <div class="tarifs-example__desc">Lecture automatique des factures fournisseurs par OCR, génération d'un brouillon d'écriture comptable prêt à valider.</div>
        <div class="tarifs-example__price">≈ 1 000 – 1 800 €</div>
      </div>
      <div class="tarifs-example">
        <div class="tarifs-example__name">Onboarding RH automatisé</div>
        <div class="tarifs-example__desc">Création de compte, envoi des documents contractuels et planning des premiers jours déclenchés automatiquement à la signature.</div>
        <div class="tarifs-example__price">≈ 1 200 – 2 200 €</div>
      </div>
      <div class="tarifs-example">
        <div class="tarifs-example__name">Reporting automatique multi-outils</div>
        <div class="tarifs-example__desc">Tableau de bord alimenté automatiquement depuis plusieurs logiciels (CRM, comptabilité, ventes), mis à jour sans ressaisie.</div>
        <div class="tarifs-example__price">≈ 1 500 – 3 000 €</div>
      </div>
    </div>
  </section>

  <!-- avis clients (réassurance avant de parler des facteurs de prix) -->
  <section class="section" style="padding-top:0;">
    <div class="tarifs-mini-reviews">
      <?php echo eb_mini_reviews_row_html( array( 1, 0 ) ); ?>
    </div>
  </section>

  <!-- ce qui fait varier le prix -->
  <section class="section">
    <div class="section-head">
      <span class="eyebrow">Facteurs de prix</span>
      <h2 style="max-width:680px;margin:0 auto;">Ce qui fait varier le budget d'une automatisation</h2>
    </div>
    <div class="tarifs-factors">
      <div class="tarifs-factor"><span class="tarifs-factor__icon" aria-hidden="true">✓</span><span><strong>Le nombre d'outils à connecter</strong> — relier 2 logiciels coûte moins cher que d'orchestrer une chaîne à 4 ou 5 outils.</span></div>
      <div class="tarifs-factor"><span class="tarifs-factor__icon" aria-hidden="true">✓</span><span><strong>Le volume de données</strong> — quelques dizaines de dossiers par mois ne demandent pas la même robustesse que plusieurs centaines par jour.</span></div>
      <div class="tarifs-factor"><span class="tarifs-factor__icon" aria-hidden="true">✓</span><span><strong>Le nombre d'exceptions à gérer</strong> — un processus avec beaucoup de cas particuliers demande davantage de règles et de tests.</span></div>
      <div class="tarifs-factor"><span class="tarifs-factor__icon" aria-hidden="true">✓</span><span><strong>La présence d'IA</strong> — lecture de documents, classification ou rédaction assistée ajoutent une brique technique supplémentaire.</span></div>
      <div class="tarifs-factor"><span class="tarifs-factor__icon" aria-hidden="true">✓</span><span><strong>Les exigences de sécurité</strong> — données sensibles, secteur réglementé ou validations multiples demandent un traitement plus rigoureux.</span></div>
    </div>
  </section>

  <!-- ROI -->
  <section class="section">
    <div class="tarifs-roi">
      <h2>À partir de combien d'heures gagnées c'est rentable ?</h2>
      <p>Une automatisation à 800 € qui fait gagner <strong>2 heures par semaine</strong> est déjà amortie en quelques mois pour la plupart des TPE-PME. Le calcul se fait toujours sur le temps réellement récupéré, pas sur le prix affiché seul — c'est précisément ce que <a href="<?php echo esc_url( eb_url('audit') ); ?>" style="color:#fff;text-decoration:underline;">l'audit gratuit</a> permet de vérifier avant tout engagement, sur votre cas précis.</p>
      <div class="tarifs-roi-table__wrap">
        <table class="tarifs-roi-table">
          <thead>
            <tr><th>Projet</th><th>Budget</th><th>Gain estimé</th><th>Rentabilité</th></tr>
          </thead>
          <tbody>
            <tr><td>Relance devis</td><td>800 – 1 200 €</td><td>2h / semaine</td><td>quelques mois</td></tr>
            <tr><td>Extraction PDF</td><td>1 000 – 1 800 €</td><td>10 min / facture</td><td>selon volume</td></tr>
            <tr><td>Reporting</td><td>1 500 – 3 000 €</td><td>4 à 8h / mois</td><td>3 à 6 mois</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- FAQ tarifs -->
  <section class="section" style="padding:50px 40px 20px;">
    <div class="section-head" style="margin-bottom:40px;">
      <span class="eyebrow">Questions fréquentes</span>
      <h2 style="font-size:34px;max-width:620px;margin:0 auto;line-height:1.15;">Les questions les plus fréquentes sur les tarifs</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Le premier rendez-vous est-il vraiment gratuit ?</h3>
        <p>Oui, sans exception. L'<a href="<?php echo esc_url( eb_url('audit') ); ?>">audit de 45 minutes</a> sert à identifier vos automatisations les plus rentables — vous n'avez rien à payer pour le savoir.</p>
      </div>
      <div class="faq-item">
        <h3>Le prix annoncé inclut-il la maintenance ?</h3>
        <p>Le tarif initial couvre la conception, le déploiement et la documentation. Un suivi ou des ajustements ultérieurs peuvent faire l'objet d'un accord séparé, discuté clairement avant tout engagement.</p>
      </div>
      <div class="faq-item">
        <h3>Y a-t-il un engagement dans la durée ?</h3>
        <p>Non. Chaque projet est livré avec sa documentation complète et reste votre propriété — aucune dépendance contractuelle à moi une fois la mission terminée.</p>
      </div>
      <div class="faq-item">
        <h3>Le prix change-t-il selon l'outil (Make, n8n…) ?</h3>
        <p>Pas directement : le choix entre <a href="<?php echo esc_url( eb_url('consultant-make') ); ?>">Make</a> et <a href="<?php echo esc_url( eb_url('consultant-n8n') ); ?>">n8n</a> dépend de vos besoins techniques, pas du budget. C'est la complexité du processus qui détermine le prix, pas l'outil choisi pour l'orchestrer.</p>
      </div>
      <div class="faq-item">
        <h3>Puis-je démarrer petit et étendre ensuite ?</h3>
        <p>C'est même l'approche recommandée : un Quick Win permet de valider le principe et le retour sur investissement avant d'élargir à une automatisation métier plus complète.</p>
      </div>
      <div class="faq-item">
        <h3>Que se passe-t-il si le budget dépasse mes attentes ?</h3>
        <p>Vous êtes informé du chiffrage avant tout engagement, après l'audit. Si le retour sur investissement n'est pas au rendez-vous, vous repartez simplement avec des pistes, sans obligation d'achat.</p>
      </div>
    </div>
  </section>

  <!-- CTA final -->
  <section class="section final-cta-section">
    <div class="final-cta-card">
      <h2 style="max-width:760px;margin:0 auto 14px;">Obtenez un chiffrage sur votre propre cas</h2>
      <p class="final-cta-card__desc">45 minutes, sans engagement, pour savoir précisément où se situe votre projet dans ces fourchettes.</p>
      <a href="<?php echo esc_url( eb_url('audit') ); ?>" class="btn btn-primary final-cta-card__cta">Réserver mon audit gratuit <span aria-hidden="true">→</span></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
