<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * JSON-LD BreadcrumbList — inclus uniquement pour les pages piliers, en
 * miroir exact du fil d'Ariane visible (.pillar-breadcrumb) : Accueil /
 * Expertises / page courante. $d est disponible depuis eb_output_seo_tags().
 */
if ( ! isset( $d ) || ! isset( $d['breadcrumb'] ) ) {
	return;
}

$breadcrumb = array(
	'@context'        => 'https://schema.org',
	'@type'           => 'BreadcrumbList',
	'itemListElement' => array(
		array(
			'@type'    => 'ListItem',
			'position' => 1,
			'name'     => 'Accueil',
			'item'     => eb_url( 'index' ),
		),
		array(
			'@type'    => 'ListItem',
			'position' => 2,
			'name'     => 'Expertises',
			'item'     => eb_url( 'solutions' ),
		),
		array(
			'@type'    => 'ListItem',
			'position' => 3,
			'name'     => $d['breadcrumb'],
			'item'     => $d['canonical'],
		),
	),
);
?>
<script type="application/ld+json">
<?php echo wp_json_encode( $breadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?>
</script>
