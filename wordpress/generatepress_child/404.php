<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page 404 minimale — réutilise le header/footer du thème et les classes
 * CSS déjà existantes (aucune règle CSS ajoutée). Sans ce fichier, une 404
 * retomberait sur le template générique de GeneratePress, qui s'appuie sur
 * des classes de generate-style désenregistré (rendu non stylé).
 */
get_header();
?>
<main id="main">
  <section class="section text-center" style="padding-top:120px;padding-bottom:120px;">
    <div class="eyebrow">Erreur 404</div>
    <h1 style="margin-top:18px;">Page introuvable</h1>
    <p style="margin:18px auto 32px;max-width:520px;font-size:17px;line-height:1.6;color:var(--text-2);">Le contenu que vous cherchez n'existe pas ou a été déplacé.</p>
    <a href="<?php echo esc_url( eb_url( 'index' ) ); ?>" class="btn btn-primary">Retour à l'accueil <span>→</span></a>
  </section>
</main>
<?php get_footer(); ?>
