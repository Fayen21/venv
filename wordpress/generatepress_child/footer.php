<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer partagé — identique au bloc <footer> présent à l'identique sur les
 * 10 pages du site source.
 */
?>
<footer class="site-footer">
  <div class="site-footer__grid">
    <div>
      <div class="site-footer__logo"><img src="<?php echo esc_url( eb_asset( 'images/uploads/156c3b91-a695-438b-b9d7-6828e90ea7ac.png' ) ); ?>" alt="EB Automatisation" width="180" height="77" loading="lazy"></div>
      <p class="site-footer__desc">Consultant indépendant en automatisation &amp; IA pour les dirigeants de TPE-PME françaises.</p>
      <a href="<?php echo esc_url( eb_url( 'audit' ) ); ?>" class="site-footer__cta">Audit gratuit →</a>
    </div>
    <div>
      <div class="site-footer__heading">Navigation</div>
      <div class="site-footer__links">
        <a href="<?php echo esc_url( eb_url( 'index' ) ); ?>">Accueil</a>
        <a href="<?php echo esc_url( eb_url( 'solutions' ) ); ?>">Solutions</a>
        <a href="<?php echo esc_url( eb_url( 'realisations' ) ); ?>">Réalisations</a>
        <a href="<?php echo esc_url( eb_url( 'apropos' ) ); ?>">À propos</a>
        <a href="<?php echo esc_url( eb_url( 'audit' ) ); ?>">Audit gratuit</a>
      </div>
    </div>
    <div>
      <div class="site-footer__heading">Expertises</div>
      <div class="site-footer__links">
        <a href="<?php echo esc_url( eb_url( 'automatisation-entreprise' ) ); ?>">Automatisation entreprise</a>
        <a href="<?php echo esc_url( eb_url( 'automatisation-processus' ) ); ?>">Automatisation des processus</a>
        <a href="<?php echo esc_url( eb_url( 'automatisation-ia' ) ); ?>">Automatisation IA</a>
        <a href="<?php echo esc_url( eb_url( 'automatisation-comptable' ) ); ?>">Automatisation comptable</a>
        <a href="<?php echo esc_url( eb_url( 'automatisation-rh' ) ); ?>">Automatisation RH</a>
        <a href="<?php echo esc_url( eb_url( 'automatisation-crm' ) ); ?>">Automatisation CRM</a>
        <a href="<?php echo esc_url( eb_url( 'prospection-automatisee' ) ); ?>">Prospection automatisée</a>
        <a href="<?php echo esc_url( eb_url( 'rpa' ) ); ?>">RPA</a>
        <a href="<?php echo esc_url( eb_url( 'automatisation-taches' ) ); ?>">Automatisation des tâches</a>
        <a href="<?php echo esc_url( eb_url( 'agence-ia' ) ); ?>">Agence IA</a>
      </div>
    </div>
    <div>
      <div class="site-footer__heading">Contact</div>
      <div class="site-footer__contact">
        <span class="site-footer__contact-name">Emmanuel Brançon</span>
        <a href="mailto:contact@eb-automatisation.fr">contact@eb-automatisation.fr</a>
        <a href="tel:+33695204127">06 95 20 41 27</a>
        <span>Réponse sous 24h · France, à distance</span>
        <span>21850 Saint-Apollinaire</span>
      </div>
    </div>
  </div>
  <div class="site-footer__bottom">
    <span>© 2026 EB Automatisation · Emmanuel Brançon · SIRET 106 501 141 00019</span>
    <span><a href="<?php echo esc_url( eb_url( 'mentions-legales' ) ); ?>">Mentions légales</a> · <a href="<?php echo esc_url( eb_url( 'confidentialite' ) ); ?>">Politique de confidentialité</a> · <a href="<?php echo esc_url( eb_url( 'rgpd' ) ); ?>">RGPD</a></span>
  </div>
</footer>

<button type="button" id="back-to-top" class="back-to-top" aria-label="Retour en haut de page"><span aria-hidden="true">↑</span></button>

<?php wp_footer(); ?>
</body>
</html>
