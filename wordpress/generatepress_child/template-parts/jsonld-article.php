<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * JSON-LD Article — inclus uniquement pour les pages piliers.
 * $d (données SEO de la page courante) est disponible depuis eb_output_seo_tags().
 */
if ( ! isset( $d ) || ! isset( $d['article'] ) ) {
	return;
}

$logo = eb_asset( 'images/eb-icon.png' );

$article = array(
	'@context'         => 'https://schema.org',
	'@type'            => 'Article',
	'headline'         => $d['article']['headline'],
	'description'      => $d['description'],
	'author'           => array(
		'@type' => 'Organization',
		'name'  => 'EB Automatisation',
	),
	'publisher'        => array(
		'@type' => 'Organization',
		'name'  => 'EB Automatisation',
		'logo'  => array(
			'@type' => 'ImageObject',
			'url'   => $logo,
		),
	),
	'mainEntityOfPage' => array(
		'@type' => 'WebPage',
		'@id'   => $d['canonical'],
	),
	'inLanguage'       => 'fr-FR',
);
?>
<script type="application/ld+json">
<?php echo wp_json_encode( $article, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?>
</script>
