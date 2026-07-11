<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template Name: EB — Politique de confidentialité
 */
?>
<?php get_header(); ?>
<main id="main">
  <section class="section" style="max-width:760px;padding-top:64px;padding-bottom:80px;">
    <div class="eyebrow">Informations légales</div>
    <h1 style="margin-top:18px;font-size:36px;">Politique de confidentialité</h1>
    <p style="margin-top:10px;color:var(--muted);font-size:14px;">Dernière mise à jour : 08/07/2026</p>

    <div style="margin-top:32px;color:var(--text-2);font-size:16px;line-height:1.7;">

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">1. Responsable du traitement</h2>
      <p>Le responsable du traitement des données collectées sur ce site est Emmanuel Brançon, entreprise individuelle, SIRET 106 501 141 00019, 650D Route de Gray, 21850 Saint-Apollinaire, contactable à <a href="mailto:contact@eb-automatisation.fr">contact@eb-automatisation.fr</a>.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">2. Données collectées</h2>
      <p>Le seul formulaire de collecte de données présent sur ce site est celui de la page <a href="<?php echo esc_url( eb_url( 'audit' ) ); ?>">Audit gratuit</a>. Il recueille : prénom, nom (facultatif), entreprise (facultatif), email, téléphone (facultatif), et la description de votre besoin.</p>
      <p>Aucune autre collecte n'est effectuée : le site ne dépose pas de cookie de mesure d'audience ni de publicité, et ne suit pas votre navigation.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">3. Finalité du traitement</h2>
      <p>Ces données sont collectées dans le seul but de traiter votre demande d'audit gratuit et de vous recontacter à cet effet.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">4. Base légale</h2>
      <p>Le traitement repose sur votre consentement, exprimé par l'envoi volontaire du formulaire.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">5. Destinataires des données</h2>
      <p>Vos données sont transmises à Emmanuel Brançon (responsable du traitement) via l'outil d'automatisation Make, utilisé comme sous-traitant technique pour l'acheminement du formulaire. Elles ne sont ni vendues, ni cédées à des tiers à des fins commerciales.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">6. Durées de conservation</h2>
      <ul style="margin:0;padding-left:22px;">
        <li style="margin-bottom:10px;"><strong>Candidats non recrutés :</strong> 2 ans à compter de la date d'entretien.</li>
        <li style="margin-bottom:10px;"><strong>Intervenants / collaborateurs :</strong> durant toute la période d'embauche, puis 3 ans après le départ.</li>
        <li style="margin-bottom:10px;"><strong>Prospects</strong> (ex. formulaire Audit) : 1 an à compter de la date du dernier contact.</li>
        <li><strong>Clients :</strong> 5 ans à compter de la fin du dernier contrat de prestations, ou du dernier contact.</li>
      </ul>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">7. Sécurité</h2>
      <p>Des mesures techniques et organisationnelles raisonnables sont mises en œuvre pour protéger vos données contre tout accès non autorisé, perte ou divulgation.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">8. Transferts hors Union européenne</h2>
      <p>Ce site charge les polices de caractères Google Fonts directement depuis les serveurs de Google, ce qui entraîne la transmission de votre adresse IP à Google (société américaine). Aucune autre donnée personnelle n'est transférée hors de l'Union européenne dans le cadre de l'usage normal du site.</p>

      <h2 style="font-size:22px;margin-top:36px;margin-bottom:14px;">9. Vos droits</h2>
      <p>Voir la page dédiée <a href="<?php echo esc_url( eb_url( 'rgpd' ) ); ?>">RGPD</a> pour le détail de vos droits et la manière de les exercer.</p>

    </div>
  </section>
</main>
<?php get_footer(); ?>
