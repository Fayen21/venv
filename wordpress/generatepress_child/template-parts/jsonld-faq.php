<?php
/**
 * JSON-LD FAQPage — inclus uniquement pour les pages piliers.
 * $d (données SEO de la page courante) est disponible depuis eb_output_seo_tags().
 */
if ( ! isset( $d ) || ! isset( $d['faq'] ) ) {
	return;
}

$main_entity = array();
foreach ( $d['faq'] as $item ) {
	$main_entity[] = array(
		'@type'          => 'Question',
		'name'           => $item['q'],
		'acceptedAnswer' => array(
			'@type' => 'Answer',
			'text'  => $item['a'],
		),
	);
}

$faq = array(
	'@context'   => 'https://schema.org',
	'@type'      => 'FAQPage',
	'mainEntity' => $main_entity,
);
?>
<script type="application/ld+json">
<?php echo wp_json_encode( $faq, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?>
</script>
