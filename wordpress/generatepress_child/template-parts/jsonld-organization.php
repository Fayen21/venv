<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * JSON-LD Organization + LocalBusiness — inclus sur toutes les pages.
 * Données reprises telles quelles du footer et des mentions légales
 * (SIRET, adresse, TVA, contact) : aucune donnée inventée.
 */
$logo = eb_asset( 'images/eb-icon.png' );

$organization = array(
	'@context'    => 'https://schema.org',
	'@type'       => array( 'Organization', 'LocalBusiness' ),
	'name'        => 'EB Automatisation',
	'legalName'   => 'Emmanuel Brançon',
	'description' => "Consultant indépendant en automatisation & IA pour les dirigeants de TPE-PME françaises.",
	'url'         => home_url( '/' ),
	'logo'        => array(
		'@type'  => 'ImageObject',
		'url'    => $logo,
		'width'  => 256,
		'height' => 256,
	),
	'image'       => $logo,
	'telephone'   => '+33695204127',
	'email'       => 'contact@eb-automatisation.fr',
	'address'     => array(
		'@type'           => 'PostalAddress',
		'streetAddress'   => '650D Route de Gray',
		'postalCode'      => '21850',
		'addressLocality' => 'Saint-Apollinaire',
		'addressCountry'  => 'FR',
	),
	'areaServed'  => array(
		'@type' => 'Country',
		'name'  => 'France',
	),
	'founder'     => array(
		'@type' => 'Person',
		'name'  => 'Emmanuel Brançon',
	),
	'identifier'  => array(
		array(
			'@type' => 'PropertyValue',
			'name'  => 'SIRET',
			'value' => '106 501 141 00019',
		),
		array(
			'@type' => 'PropertyValue',
			'name'  => 'TVA intracommunautaire',
			'value' => 'FR82106501141',
		),
	),
	'contactPoint' => array(
		'@type'             => 'ContactPoint',
		'telephone'         => '+33695204127',
		'email'             => 'contact@eb-automatisation.fr',
		'contactType'       => 'customer service',
		'areaServed'        => 'FR',
		'availableLanguage' => array( 'French' ),
	),
);
?>
<script type="application/ld+json">
<?php echo wp_json_encode( $organization, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?>
</script>
