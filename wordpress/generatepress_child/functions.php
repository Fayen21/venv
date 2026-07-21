<?php
/**
 * EB Automatisation — thème enfant GeneratePress.
 * Portage technique du site statique final (site/) : aucune règle de design
 * n'est ajoutée ici, uniquement le câblage nécessaire à WordPress.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EB_THEME_URI', get_stylesheet_directory_uri() );
define( 'EB_THEME_DIR', get_stylesheet_directory() );

/**
 * URL du webhook Make qui reçoit les demandes du formulaire /audit/.
 * Voir README.md pour savoir où la renseigner. Tant qu'elle est vide, le
 * formulaire garde son comportement de démonstration (aucun envoi réseau,
 * succès simulé) — aucune configuration requise pour que le site fonctionne.
 */
if ( ! defined( 'EB_AUDIT_WEBHOOK_URL' ) ) {
	define( 'EB_AUDIT_WEBHOOK_URL', '' );
}

/**
 * -----------------------------------------------------------------------
 * 1. Résolution des URLs internes (remplace les href="xxx.html" du HTML
 *    source par les permaliens WordPress réels — slugs validés).
 * -----------------------------------------------------------------------
 */
function eb_url( $page ) {
	$map = array(
		'index'                     => home_url( '/' ),
		'solutions'                 => home_url( '/solutions/' ),
		'realisations'               => home_url( '/realisations/' ),
		'apropos'                   => home_url( '/apropos/' ),
		'audit'                     => home_url( '/audit/' ),
		'agence-ia'                 => home_url( '/agence-ia/' ),
		'automatisation-entreprise' => home_url( '/automatisation-entreprise/' ),
		'automatisation-ia'         => home_url( '/automatisation-ia/' ),
		'automatisation-processus'  => home_url( '/automatisation-processus/' ),
		'automatisation-taches'     => home_url( '/automatisation-taches/' ),
		'automatisation-comptable'  => home_url( '/automatisation-comptable/' ),
		'automatisation-rh'         => home_url( '/automatisation-rh/' ),
		'automatisation-crm'        => home_url( '/automatisation-crm/' ),
		'prospection-automatisee'   => home_url( '/prospection-automatisee/' ),
		'rpa'                       => home_url( '/rpa/' ),
		'automatisation-excel'      => home_url( '/automatisation-excel/' ),
		'automatisation-outlook'    => home_url( '/automatisation-outlook/' ),
		'consultant-make'           => home_url( '/consultant-make/' ),
		'consultant-n8n'            => home_url( '/consultant-n8n/' ),
		'automatisation-microsoft-365' => home_url( '/automatisation-microsoft-365/' ),
		'automatisation-ocr'        => home_url( '/automatisation-ocr/' ),
		'extraction-pdf'            => home_url( '/extraction-pdf/' ),
		'automatisation-facturation' => home_url( '/automatisation-facturation/' ),
		'tarifs'                    => home_url( '/tarifs/' ),
		'mentions-legales'          => home_url( '/mentions-legales/' ),
		'confidentialite'           => home_url( '/confidentialite/' ),
		'rgpd'                      => home_url( '/rgpd/' ),
	);

	return isset( $map[ $page ] ) ? $map[ $page ] : home_url( '/' );
}

/**
 * Image d'un asset du thème (assets/images/...), utilisée dans les templates
 * à la place des chemins relatifs "assets/images/..." du HTML source.
 */
function eb_asset( $relative_path ) {
	return EB_THEME_URI . '/assets/' . ltrim( $relative_path, '/' );
}

/**
 * Registre centralisé des marques affichées dans les bandeaux d'outils.
 * 'logo' pointe vers un SVG officiel (Simple Icons, licence CC0) copié
 * localement dans assets/images/logos/. Sans 'logo', la marque n'a pas de
 * ressource officielle fiable disponible : on utilise un repli typographique
 * propre (carré coloré + initiale), jamais une reconstitution du logo.
 */
function eb_brand_icon( $key ) {
	$registry = array(
		'outlook'          => array( 'label' => 'Outlook', 'bg' => '#0A6FC2', 'fg' => '#fff', 'letter' => 'O' ),
		'excel'            => array( 'label' => 'Excel', 'bg' => '#1D6F42', 'fg' => '#fff', 'letter' => 'X', 'logo' => 'excel.png' ),
		'microsoft365'     => array( 'label' => 'Microsoft 365', 'bg' => '#EB3C00', 'fg' => '#fff', 'letter' => 'MS', 'logo' => 'microsoft365.png' ),
		'google-workspace' => array( 'label' => 'Google Workspace', 'bg' => '#EA4335', 'fg' => '#fff', 'letter' => 'G', 'logo' => 'google-workspace.png' ),
		'sage'             => array( 'label' => 'Sage', 'bg' => '#00D639', 'fg' => '#0C2E14', 'letter' => 'S', 'logo' => 'sage.svg' ),
		'qonto'            => array( 'label' => 'Qonto', 'bg' => '#0C1E3C', 'fg' => '#fff', 'letter' => 'Q', 'logo' => 'qonto.png' ),
		'pennylane'        => array( 'label' => 'Pennylane', 'bg' => '#2E2AEB', 'fg' => '#fff', 'letter' => 'P', 'logo' => 'pennylane.png' ),
		'notion'           => array( 'label' => 'Notion', 'bg' => '#111111', 'fg' => '#fff', 'letter' => 'N', 'logo' => 'notion.svg' ),
		'hubspot'          => array( 'label' => 'HubSpot', 'bg' => '#FF5C35', 'fg' => '#fff', 'letter' => 'H', 'logo' => 'hubspot.svg' ),
		'make'             => array( 'label' => 'Make', 'bg' => '#6D00CC', 'fg' => '#fff', 'letter' => 'M', 'logo' => 'make.svg' ),
		'n8n'              => array( 'label' => 'n8n', 'bg' => '#EA4B71', 'fg' => '#fff', 'letter' => 'n8', 'logo' => 'n8n.svg' ),
		'python'           => array( 'label' => 'Python', 'bg' => '#3776AB', 'fg' => '#fff', 'letter' => 'Py', 'logo' => 'python.svg' ),
		'docusign'         => array( 'label' => 'DocuSign', 'bg' => '#0C1E3C', 'fg' => '#fff', 'letter' => 'DS' ),
		'salesforce'       => array( 'label' => 'Salesforce', 'bg' => '#00A1E0', 'fg' => '#fff', 'letter' => 'Sf' ),
		'pipedrive'        => array( 'label' => 'Pipedrive', 'bg' => '#1A1A1A', 'fg' => '#fff', 'letter' => 'Pd' ),
		'linkedin'         => array( 'label' => 'LinkedIn', 'bg' => '#0A66C2', 'fg' => '#fff', 'letter' => 'in' ),
		'cegid'            => array( 'label' => 'Cegid', 'bg' => '#0C1E3C', 'fg' => '#fff', 'letter' => 'C' ),
		'quadra'           => array( 'label' => 'Quadra', 'bg' => '#7C5CFC', 'fg' => '#fff', 'letter' => 'Qd' ),
	);
	return isset( $registry[ $key ] ) ? $registry[ $key ] : null;
}

/**
 * Rend l'icône d'un outil : vrai logo local si disponible (SVG pour les
 * marques sourcées via Simple Icons, PNG pour celles fournies directement
 * par le client), sinon un repli typographique (carré coloré + initiale(s)),
 * jamais un logo recréé. 'logo' contient le nom de fichier complet, avec
 * son extension.
 */
function eb_tool_icon_html( $key ) {
	$data = eb_brand_icon( $key );
	if ( ! $data ) {
		return '';
	}
	if ( ! empty( $data['logo'] ) ) {
		$src = eb_asset( 'images/logos/' . $data['logo'] );
		return '<span class="tool-chip__abbr tool-chip__abbr--logo"><img src="' . esc_url( $src ) . '" alt="' . esc_attr( $data['label'] ) . '" width="20" height="20" loading="lazy"></span>';
	}
	return '<span class="tool-chip__abbr" style="background:' . esc_attr( $data['bg'] ) . ';color:' . esc_attr( $data['fg'] ) . ';">' . esc_html( $data['letter'] ) . '</span>';
}

/**
 * Chevron de fin de puce outil cliquable (.tool-chip--link) — un seul bloc
 * SVG, jusqu'ici copié-collé à l'identique (38 fois sur 9 templates) au lieu
 * d'être factorisé comme eb_tool_icon_html() l'est déjà pour le logo.
 */
function eb_tool_chevron() {
	return '<span class="tool-chip__chevron" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"></path></svg></span>';
}

/**
 * Note affichée sous chaque grille d'outils : la liste montre les outils les
 * plus fréquents, mais l'automatisation ne s'y limite pas — évite de laisser
 * penser qu'un outil absent de la grille serait incompatible.
 */
function eb_tool_compat_note( $extra_class = '' ) {
	$class = 'tool-chip-grid__note' . ( $extra_class ? ' ' . $extra_class : '' );
	return '<p class="' . esc_attr( $class ) . '">Vous utilisez un autre outil&nbsp;? <strong>Dans la grande majorité des cas, il peut aussi être connecté</strong> — cette liste n\'est pas exhaustive.</p>';
}

/**
 * -----------------------------------------------------------------------
 * Avis clients (Google) — logo officiel Google (4 couleurs) + étoiles.
 * -----------------------------------------------------------------------
 */
function eb_google_logo_svg( $size = 18 ) {
	$size = (int) $size;
	return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 48 48" aria-hidden="true"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.9-2.26 5.36-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>';
}

function eb_star_row_svg( $count = 5, $size = 14 ) {
	$size = (int) $size;
	$star = '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="#F4B400" aria-hidden="true"><path d="M12 2.5l2.9 6.6 7.1.6-5.4 4.7 1.6 7-6.2-3.7-6.2 3.7 1.6-7-5.4-4.7 7.1-.6z"/></svg>';
	return str_repeat( $star, max( 0, (int) $count ) );
}

/**
 * Registre centralisé des avis Google publiés (nom + structure fournis par
 * le client). Un seul point d'entrée pour ne pas dupliquer le contenu entre
 * la section complète (accueil) et les badges compacts (audit, à propos).
 */
function eb_google_reviews() {
	return array(
		array(
			'text'    => 'Merci beaucoup à Emmanuel pour son travail très efficace et son professionnalisme. Un grand gain de temps pour mon équipe !',
			'author'  => 'Audrey',
			'company' => 'Top-Famille',
			'color'   => '#3BA5FF',
		),
		array(
			'text'    => "Prestataire très sérieux, il a répondu à mes demandes et n'a pas essayé de survendre. Je ferai de nouveau appel à lui dans les prochains mois. Merci !",
			'author'  => 'Anthony',
			'company' => 'Vélo-Tourisme',
			'color'   => '#DD7A33',
		),
		array(
			'text'    => 'Parfait, tout marche bien et on peut compter sur Emmanuel pour trouver des solutions, donc à bientôt je l\'espère.',
			'author'  => 'Zoheir',
			'company' => '',
			'color'   => '#1E8E5A',
		),
	);
}

/**
 * Badge compact "5,0 ★★★★★ (3 avis)" avec logo Google — utilisé partout où
 * la section complète (accueil) serait trop lourde (Audit, À propos).
 */
function eb_google_reviews_badge( $on_dark = false ) {
	$class = 'google-reviews-badge' . ( $on_dark ? ' google-reviews-badge--on-dark' : '' );
	return '<div class="' . esc_attr( $class ) . '">' . eb_google_logo_svg( 20 )
		. '<span class="google-reviews-badge__score">5,0</span>'
		. '<span class="google-reviews-badge__stars">' . eb_star_row_svg( 5, 13 ) . '</span>'
		. '</div>';
}

/**
 * Pastille de réassurance verte ("✓ 45 minutes, sans engagement…") — même
 * bandeau que celui de l'accueil, réutilisé sous les CTA de hero de toutes
 * les pages (Solutions, Réalisations, piliers, Outils) pour une même
 * "logique de cadrage" partout.
 */
function eb_reassurance_pill( $text = '45 minutes, sans engagement — repartez avec des pistes concrètes' ) {
	return '<div class="reassurance-pill"><span class="reassurance-pill__check" aria-hidden="true">✓</span> ' . esc_html( $text ) . '</div>';
}

/**
 * Cercle-avatar (initiale) d'un avis client, coloré selon $review['color']
 * (voir eb_google_reviews()) — un enfant appelle ceci depuis la grille
 * complète ET depuis un éventuel mini-teaser d'avis isolé.
 */
function eb_review_avatar_html( $review ) {
	$color = ! empty( $review['color'] ) ? $review['color'] : '#2E6BFF';
	$style = 'background:' . esc_attr( $color ) . '; border-color:' . esc_attr( $color ) . '; box-shadow:0 0 0 1px ' . esc_attr( $color ) . '55, 0 0 12px ' . esc_attr( $color ) . '55;';
	return '<div class="review-card__avatar" style="' . $style . '">' . esc_html( mb_substr( $review['author'], 0, 1 ) ) . '</div>';
}

/**
 * Section complète "avis clients" (eyebrow + titre + badge + 3 cartes d'avis
 * + bloc "Ce que les clients apprécient") — utilisée à l'identique sur
 * l'accueil, À propos et Audit gratuit ; centralisée ici pour ne pas
 * tripler la même liste d'avis et de points forts dans 3 templates.
 */
function eb_reviews_section_html() {
	$points = array(
		array( 'title' => 'Professionnalisme &amp; pédagogie', 'desc' => "Une approche claire, sans jargon inutile, à chaque étape du projet." ),
		array( 'title' => 'Aucune prestation survendue', 'desc' => "Un discours honnête sur ce qui est vraiment utile — et ce qui ne l'est pas." ),
		array( 'title' => 'Un gain de temps concret', 'desc' => "Des heures récupérées au quotidien, pas seulement une promesse sur le papier." ),
	);

	$out  = '<div class="section-head"><span class="eyebrow">Avis clients</span><h2 style="max-width:680px;margin:0 auto;">Ce qu\'en disent mes clients</h2></div>';
	$out .= eb_google_reviews_badge();
	$out .= '<div class="reviews-grid">';
	foreach ( eb_google_reviews() as $review ) {
		$out .= '<div class="review-card">'
			. '<div class="review-card__stars">' . eb_star_row_svg( 5, 15 ) . '</div>'
			. '<p class="review-card__text">« ' . esc_html( $review['text'] ) . ' »</p>'
			. '<div class="review-card__author">'
			. eb_review_avatar_html( $review )
			. '<div><div class="review-card__name">' . esc_html( $review['author'] ) . '</div>'
			. ( ! empty( $review['company'] ) ? '<div class="review-card__company">' . esc_html( $review['company'] ) . '</div>' : '' )
			. '</div></div></div>';
	}
	$out .= '</div>';

	$out .= '<div class="reviews-appreciated"><h3>Ce que les clients apprécient</h3><div class="reviews-appreciated__grid">';
	foreach ( $points as $point ) {
		$out .= '<div class="reviews-appreciated__item">'
			. '<span class="reviews-appreciated__icon" aria-hidden="true">✓</span>'
			. '<div><div class="reviews-appreciated__title">' . $point['title'] . '</div>'
			. '<div class="reviews-appreciated__desc">' . esc_html( $point['desc'] ) . '</div></div>'
			. '</div>';
	}
	$out .= '</div></div>';

	return $out;
}

/**
 * Mini-carte d'avis isolée (étoiles + citation courte + auteur), pour glisser
 * une preuve sociale ponctuelle hors de la section "avis clients" complète
 * (ex. page Audit près du formulaire, pages Tarifs/Solutions/métier).
 * $index désigne l'avis dans eb_google_reviews() (0=Audrey, 1=Anthony, 2=Zoheir).
 */
function eb_mini_review_html( $index = 0 ) {
	$reviews = eb_google_reviews();
	if ( ! isset( $reviews[ $index ] ) ) {
		return '';
	}
	$r = $reviews[ $index ];
	return '<div class="mini-review">'
		. '<div class="mini-review__stars">' . eb_star_row_svg( 5, 13 ) . '</div>'
		. '<p class="mini-review__text">« ' . esc_html( $r['text'] ) . ' »</p>'
		. '<div class="mini-review__author">' . eb_review_avatar_html( $r )
		. '<span>' . esc_html( $r['author'] ) . ( ! empty( $r['company'] ) ? ' · ' . esc_html( $r['company'] ) : '' ) . '</span>'
		. '</div></div>';
}

/**
 * Rangée de mini-avis (2 ou 3 côte à côte) — $indexes est un tableau d'index
 * eb_google_reviews(), ex. array(1,2) pour Anthony + Zoheir.
 */
function eb_mini_reviews_row_html( $indexes ) {
	$out = '<div class="mini-reviews-row">';
	foreach ( $indexes as $i ) {
		$out .= eb_mini_review_html( $i );
	}
	$out .= '</div>';
	return $out;
}

/**
 * Teaser tarif contextuel, glissé vers la fin d'une page métier avant le CTA
 * final — donne un ordre de grandeur sans dupliquer toute la page Tarifs.
 * $text ne doit pas inclure le lien final, ajouté automatiquement.
 */
function eb_price_teaser_html( $text ) {
	return '<div class="price-teaser">' . $text . ' <a href="' . esc_url( eb_url( 'tarifs' ) ) . '">Voir le détail des tarifs →</a></div>';
}

/**
 * Icônes téléphone/email de la barre du haut (header.php) et des tuiles de
 * contact de la page de succès d'audit (template-audit.php) — même paire de
 * pictogrammes, redessinée deux fois avec des réglages différents (couleur
 * figée au lieu de currentColor, épaisseur de trait différente). Factorisée
 * ici en un seul point d'entrée ; $size et $stroke_width restent réglables
 * par appelant puisque les deux contextes n'affichent pas l'icône à la même
 * taille, mais la couleur est toujours héritée via currentColor.
 */
function eb_contact_icon( $type, $size = 14, $stroke_width = '1.8' ) {
	$paths = array(
		// glyphe combiné, utilisé dans la barre du haut (header.php)
		'phone'     => '<path d="M6.6 10.8a15.9 15.9 0 0 0 6.6 6.6l2.2-2.2a1.4 1.4 0 0 1 1.4-.35c1.1.35 2.3.55 3.5.55a1.4 1.4 0 0 1 1.4 1.4V20.6a1.4 1.4 0 0 1-1.4 1.4C10.7 22 2 13.3 2 3.4A1.4 1.4 0 0 1 3.4 2H7a1.4 1.4 0 0 1 1.4 1.4c0 1.2.2 2.4.55 3.5.13.46.02.98-.35 1.4z"></path>',
		// glyphe téléphone distinct, utilisé sur les tuiles de la page de succès
		// de l'audit (template-audit.php) — même famille de trait, dessin différent ;
		// on ne les fusionne pas en un seul glyphe pour ne rien changer visuellement.
		'phone-alt' => '<path d="M5 4h4l1.5 4.5-2 1.5a11 11 0 0 0 5.5 5.5l1.5-2 4.5 1.5v4a2 2 0 0 1-2 2c-8 0-14-6-14-14a2 2 0 0 1 2-2z"></path>',
		'email'     => '<rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path>',
	);
	if ( ! isset( $paths[ $type ] ) ) {
		return '';
	}
	return '<svg width="' . (int) $size . '" height="' . (int) $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="' . esc_attr( $stroke_width ) . '" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[ $type ] . '</svg>';
}

/**
 * -----------------------------------------------------------------------
 * Bibliothèque de composants graphiques EB — étape 2 de la premiumisation
 * de l'iconographie (docs/audit-iconographie-eb.md). Point d'entrée unique
 * pour tout nouveau petit pictogramme ajouté après cette phase, sur le même
 * modèle que eb_tool_chevron()/eb_contact_icon() ci-dessus. Les 103 icônes
 * déjà en place dans les templates ne sont PAS migrées vers ce registre —
 * seule une migration ultérieure, explicitement demandée, justifierait de
 * toucher à nouveau ce qui fonctionne déjà et n'a pas de défaut visuel.
 *
 * Langage visuel dérivé des deux logos officiels EB (jamais redessinés,
 * jamais modifiés) : lignes de circuit à angles 90° arrondis, points de
 * connexion ronds, contraste blanc / bleu nuit / bleu électrique, orange du
 * site conservé comme seul accent secondaire. Ce même vocabulaire est celui
 * utilisé pour construire les 6 illustrations maîtresses SVG (Phase D) —
 * voir assets/images/illustrations/eb-flow/README.md pour la déclinaison en
 * fichiers SVG autonomes (les <use> vers un sprite externe ne fonctionnent
 * pas quand le SVG est chargé en <img>, donc les mêmes <defs> sont dupliqués
 * localement dans chaque fichier plutôt que factorisés en un sprite partagé).
 * -----------------------------------------------------------------------
 */

/**
 * eb_icon( $key, $size, $stroke_width ) : petits pictogrammes inline
 * additionnels au même standard que le reste du site (viewBox 24×24,
 * stroke currentColor, angles arrondis). 'node' et 'validation' reprennent
 * les motifs "point de connexion" et "coche" utilisés dans les illustrations
 * maîtresses, pour un composant PHP qui rende le même glyphe si besoin dans
 * un template plus tard (ex. légender une illustration).
 */
function eb_icon( $key, $size = 20, $stroke_width = '1.8' ) {
	$paths = array(
		// point de connexion (motif "EB Node" des illustrations maîtresses)
		'node'       => '<circle cx="12" cy="12" r="3"></circle>',
		// coche de validation (motif "EB Validation")
		'validation' => '<path d="M5 12.5l4.5 4.5L19 7"></path>',
		// segment de trace de circuit à angle droit arrondi (motif "EB Circuit")
		'circuit'    => '<path d="M4 8h6a2 2 0 0 0 2-2V4"></path><path d="M4 16h10a2 2 0 0 1 2 2v2"></path><circle cx="4" cy="8" r="1.3"></circle><circle cx="4" cy="16" r="1.3"></circle>',
	);
	if ( ! isset( $paths[ $key ] ) ) {
		return '';
	}
	return '<svg width="' . (int) $size . '" height="' . (int) $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="' . esc_attr( $stroke_width ) . '" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[ $key ] . '</svg>';
}

/**
 * eb_status_step( $icon_svg, $label, $modifier ) : une étape d'un flux
 * (icône + libellé), même structure que .pillar-flow__step déjà répété à
 * l'identique dans 9+ templates (voir docs/audit-iconographie-eb.md, C3).
 * Disponible pour toute nouvelle étape de flux ajoutée après cette phase ;
 * les .pillar-flow__step existants ne sont pas ré-écrits avec ce helper
 * (hors périmètre des 9 harmonisations validées, aucun défaut à corriger).
 */
function eb_status_step( $icon_svg, $label, $modifier = '' ) {
	$class = 'pillar-flow__step' . ( $modifier ? ' pillar-flow__step--' . sanitize_html_class( $modifier ) : '' );
	return '<div class="' . esc_attr( $class ) . '"><span class="pillar-flow__icon">' . $icon_svg . '</span><span class="pillar-flow__step-label">' . esc_html( $label ) . '</span></div>';
}

/**
 * eb_flow_connector() : flèche entre deux eb_status_step() (motif "EB Flow
 * Connector"), même glyphe texte que .pillar-flow__arrow déjà en place.
 */
function eb_flow_connector() {
	return '<span class="pillar-flow__arrow">→</span>';
}

/**
 * -----------------------------------------------------------------------
 * 2. Identification de la page courante (pour la classe .is-active du menu
 *    et pour savoir quelles données SEO / CSS de page charger).
 *    header.php et wp_head() s'appuient tous les deux sur cette fonction.
 * -----------------------------------------------------------------------
 */
function eb_current_page_key() {
	if ( is_front_page() ) {
		return 'index';
	}

	$templates = array(
		'page-templates/template-solutions.php'                 => 'solutions',
		'page-templates/template-realisations.php'               => 'realisations',
		'page-templates/template-apropos.php'                   => 'apropos',
		'page-templates/template-audit.php'                     => 'audit',
		'page-templates/template-pillar-agence-ia.php'                 => 'agence-ia',
		'page-templates/template-pillar-automatisation-entreprise.php' => 'automatisation-entreprise',
		'page-templates/template-pillar-automatisation-ia.php'         => 'automatisation-ia',
		'page-templates/template-pillar-automatisation-processus.php'  => 'automatisation-processus',
		'page-templates/template-pillar-automatisation-taches.php'     => 'automatisation-taches',
		'page-templates/template-pillar-automatisation-comptable.php'  => 'automatisation-comptable',
		'page-templates/template-pillar-automatisation-rh.php'         => 'automatisation-rh',
		'page-templates/template-pillar-automatisation-crm.php'        => 'automatisation-crm',
		'page-templates/template-pillar-prospection-automatisee.php'   => 'prospection-automatisee',
		'page-templates/template-pillar-rpa.php'                       => 'rpa',
		'page-templates/template-tool-automatisation-excel.php'        => 'automatisation-excel',
		'page-templates/template-tool-automatisation-outlook.php'      => 'automatisation-outlook',
		'page-templates/template-tool-consultant-make.php'             => 'consultant-make',
		'page-templates/template-tool-consultant-n8n.php'              => 'consultant-n8n',
		'page-templates/template-tool-automatisation-microsoft-365.php' => 'automatisation-microsoft-365',
		'page-templates/template-tool-automatisation-ocr.php'          => 'automatisation-ocr',
		'page-templates/template-tool-extraction-pdf.php'              => 'extraction-pdf',
		'page-templates/template-tool-automatisation-facturation.php'  => 'automatisation-facturation',
		'page-templates/template-tarifs.php'                           => 'tarifs',
		'page-templates/template-mentions-legales.php'                 => 'mentions-legales',
		'page-templates/template-confidentialite.php'                  => 'confidentialite',
		'page-templates/template-rgpd.php'                             => 'rgpd',
	);

	foreach ( $templates as $file => $key ) {
		if ( is_page_template( $file ) ) {
			return $key;
		}
	}

	return '';
}

/**
 * Couvre les 10 pages piliers ET les 5 pages du cluster Outils : toutes
 * partagent le même gabarit .pillar-wrap / pillar.css et le même besoin de
 * JSON-LD (breadcrumb + article + FAQ), donc le même gating ci-dessous.
 */
function eb_is_pillar_page( $key ) {
	return in_array(
		$key,
		array( 'agence-ia', 'automatisation-entreprise', 'automatisation-ia', 'automatisation-processus', 'automatisation-taches', 'automatisation-comptable', 'automatisation-rh', 'automatisation-crm', 'prospection-automatisee', 'rpa', 'automatisation-excel', 'automatisation-outlook', 'consultant-make', 'consultant-n8n', 'automatisation-microsoft-365', 'automatisation-ocr', 'extraction-pdf', 'automatisation-facturation' ),
		true
	);
}

/**
 * Effet canvas décoratif du hero — un seul par page, choisi via ce mapping.
 * Voir assets/js/hero-fx.js pour les 7 algorithmes. Le reste des pages
 * piliers/outils alterne 'network'/'flow' pour varier visuellement.
 */
function eb_hero_fx_effects() {
	return array(
		'index'                        => 'network',
		'solutions'                    => 'globe',
		'realisations'                 => 'flow',
		'apropos'                      => 'constellation',
		'audit'                        => 'constellation',
		'tarifs'                       => 'constellation',
		'automatisation-entreprise'    => 'network',
		'automatisation-processus'     => 'globe',
		'automatisation-ia'            => 'orbit',
		'agence-ia'                    => 'network',
		'automatisation-taches'        => 'flow',
		'automatisation-comptable'     => 'network',
		'automatisation-rh'            => 'flow',
		'automatisation-crm'           => 'network',
		'prospection-automatisee'      => 'flow',
		'rpa'                          => 'network',
		'automatisation-excel'         => 'flow',
		'automatisation-outlook'       => 'network',
		'consultant-make'              => 'flow',
		'consultant-n8n'               => 'network',
		'automatisation-microsoft-365' => 'flow',
		'automatisation-ocr'           => 'network',
		'extraction-pdf'               => 'flow',
		'automatisation-facturation'   => 'network',
	);
}

/**
 * Effets déjà très lumineux par eux-mêmes : les halos aurora y sont adoucis
 * (voir .eb-hero-fx--dim-halo dans hero-fx.css) pour ne pas surcharger.
 */
function eb_hero_fx_is_dim( $effect ) {
	return in_array( $effect, array( 'globe', 'orbit', 'flow' ), true );
}

/**
 * Canvas + halos aurora du hero — un seul point d'entrée pour éviter de
 * dupliquer ce balisage sur chaque template. Voir assets/css/hero-fx.css et
 * assets/js/hero-fx.js pour le comportement (IntersectionObserver +
 * prefers-reduced-motion, aucune librairie).
 */
function eb_hero_fx( $effect = 'network' ) {
	?>
	<canvas class="eb-hero-fx__canvas" data-hero-effect="<?php echo esc_attr( $effect ); ?>" aria-hidden="true"></canvas>
	<div class="eb-hero-fx__aurora eb-hero-fx__aurora--1" aria-hidden="true"></div>
	<div class="eb-hero-fx__aurora eb-hero-fx__aurora--2" aria-hidden="true"></div>
	<?php
}

/**
 * -----------------------------------------------------------------------
 * 3. CSS / JS — même ordre de chargement que les <link>/<script> du HTML
 *    source, fichiers copiés à l'identique dans assets/.
 * -----------------------------------------------------------------------
 */
function eb_enqueue_assets() {
	$page = eb_current_page_key();

	// Polices auto-hébergées (WOFF2, voir assets/fonts/) — plus de dépendance à
	// fonts.googleapis.com : même rendu, mais un domaine tiers de moins à
	// résoudre/connecter avant le premier rendu. Schibsted Grotesk (titres)
	// n'est jamais utilisée en graisse 400 dans le CSS — vérifié sur
	// l'ensemble des fichiers (h1/h2/h3 et tous les autres usages sont en
	// 500/600/700) — ce poids n'est donc pas fourni.
	wp_enqueue_style( 'eb-fonts', EB_THEME_URI . '/assets/css/fonts.css', array(), filemtime( EB_THEME_DIR . '/assets/css/fonts.css' ) );

	$base_css = array( 'tokens', 'layout', 'typography', 'components', 'animations', 'utilities' );
	$deps     = array();
	foreach ( $base_css as $handle ) {
		wp_enqueue_style( 'eb-' . $handle, EB_THEME_URI . '/assets/css/' . $handle . '.css', $deps, filemtime( EB_THEME_DIR . '/assets/css/' . $handle . '.css' ) );
		$deps = array( 'eb-' . $handle );
	}

	// CSS de page : même fichier que le <link> spécifique de chaque page HTML source.
	$page_css_map = array(
		'index'                     => 'home',
		'tarifs'                    => 'tarifs',
		'solutions'                 => 'solutions',
		'realisations'               => 'realisations',
		'apropos'                   => 'apropos',
		'audit'                     => 'audit',
		'agence-ia'                 => 'pillar',
		'automatisation-entreprise' => 'pillar',
		'automatisation-ia'         => 'pillar',
		'automatisation-processus'  => 'pillar',
		'automatisation-taches'     => 'pillar',
		'automatisation-comptable'  => 'pillar',
		'automatisation-rh'         => 'pillar',
		'automatisation-crm'        => 'pillar',
		'prospection-automatisee'   => 'pillar',
		'rpa'                       => 'pillar',
		'automatisation-excel'      => 'pillar',
		'automatisation-outlook'    => 'pillar',
		'consultant-make'           => 'pillar',
		'consultant-n8n'            => 'pillar',
		'automatisation-microsoft-365' => 'pillar',
		'automatisation-ocr'        => 'pillar',
		'extraction-pdf'            => 'pillar',
		'automatisation-facturation' => 'pillar',
	);

	if ( isset( $page_css_map[ $page ] ) ) {
		$file = $page_css_map[ $page ];
		wp_enqueue_style( 'eb-page-' . $file, EB_THEME_URI . '/assets/css/pages/' . $file . '.css', array( 'eb-utilities' ), filemtime( EB_THEME_DIR . '/assets/css/pages/' . $file . '.css' ) );
	}

	// JS — main.js partout, home.js/audit.js seulement sur leur page respective (comme en HTML).
	wp_enqueue_script( 'eb-main', EB_THEME_URI . '/assets/js/main.js', array(), filemtime( EB_THEME_DIR . '/assets/js/main.js' ), true );

	if ( 'index' === $page ) {
		wp_enqueue_script( 'eb-home', EB_THEME_URI . '/assets/js/home.js', array(), filemtime( EB_THEME_DIR . '/assets/js/home.js' ), true );
	}

	// Effet canvas du hero — accueil, Solutions, Réalisations, À propos,
	// toutes les pages piliers/outils (cf. eb_hero_fx_effects() pour le
	// mapping page → effet) et, seulement sur le bloc H1, la page Audit.
	// Jamais sur les pages légales, qui n'utilisent aucun gabarit de hero.
	if ( 'index' === $page || 'solutions' === $page || 'realisations' === $page || 'apropos' === $page || 'audit' === $page || 'tarifs' === $page || eb_is_pillar_page( $page ) ) {
		wp_enqueue_style( 'eb-hero-fx', EB_THEME_URI . '/assets/css/hero-fx.css', array( 'eb-utilities' ), filemtime( EB_THEME_DIR . '/assets/css/hero-fx.css' ) );
		wp_enqueue_script( 'eb-hero-fx', EB_THEME_URI . '/assets/js/hero-fx.js', array(), filemtime( EB_THEME_DIR . '/assets/js/hero-fx.js' ), true );
	}

	if ( 'audit' === $page ) {
		wp_enqueue_script( 'eb-audit', EB_THEME_URI . '/assets/js/audit.js', array(), filemtime( EB_THEME_DIR . '/assets/js/audit.js' ), true );
		// audit.js contient un lien "retour à l'accueil" en dur (index.html) dans le HTML
		// source ; sous WordPress cette URL relative ne pointe plus vers l'accueil.
		// On lui fournit l'URL réelle sans toucher au reste de son comportement.
		// webhookUrl : voir README.md — vide par défaut (aucun secret dans ce fichier,
		// seule la constante définie ailleurs, typiquement wp-config.php, est lue ici).
		wp_localize_script(
			'eb-audit',
			'ebSiteData',
			array(
				'homeUrl'    => eb_url( 'index' ),
				'webhookUrl' => EB_AUDIT_WEBHOOK_URL,
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'eb_enqueue_assets' );

/**
 * Retire le style principal du parent GeneratePress : ses règles de base
 * (body, h1-h6, a, button, ul/ol...) entrent en conflit de cascade direct
 * avec nos tokens/typography — c'est le seul conflit réel identifié, donc
 * le seul style désactivé ici.
 *
 * GeneratePress enqueue aussi automatiquement un style « generate-child »
 * (le style.css du thème enfant, ici vide de toute règle) déclaré dépendant
 * de « generate-style ». En ne retirant que generate-style, ce dernier
 * disparaît du registre alors que generate-child référence toujours cette
 * dépendance : WordPress déclenche un _doing_it_wrong (« dépendances qui
 * n'ont pas été enregistrées »). On retire donc les deux, puisque
 * generate-child ne contient de toute façon aucune règle CSS utile ici.
 */
function eb_dequeue_generatepress_style() {
	wp_dequeue_style( 'generate-style' );
	wp_deregister_style( 'generate-style' );
	wp_dequeue_style( 'generate-child' );
	wp_deregister_style( 'generate-child' );
}
add_action( 'wp_enqueue_scripts', 'eb_dequeue_generatepress_style', 100 );

/**
 * CSS core WordPress chargé par défaut mais inutile ici : ce thème n'utilise
 * ni l'éditeur de blocs (Gutenberg) ni theme.json, chaque page/template est
 * codée à la main. wp-block-library/global-styles/classic-theme-styles ne
 * servent donc à rien sur ce site mais restent enqueue par défaut sur tout
 * thème WordPress — poids CSS mort sur chaque page, mobile compris.
 */
function eb_dequeue_unused_core_assets() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'eb_dequeue_unused_core_assets', 100 );

/**
 * -----------------------------------------------------------------------
 * 4. SEO — title / meta / OG / Twitter / canonical / JSON-LD.
 *    Données statiques par page, identiques au <head> du HTML source.
 *    Aucun plugin SEO : tout est injecté via le hook wp_head.
 * -----------------------------------------------------------------------
 */
function eb_seo_data() {
	$img = eb_asset( 'images/uploads/156c3b91-a695-438b-b9d7-6828e90ea7ac.png' );

	return array(
		'index'                     => array(
			'title'       => "Consultant en automatisation & IA — EB Automatisation",
			'description' => "J'automatise vos tâches répétitives en connectant Excel, Outlook, votre compta et votre CRM — sans changer vos logiciels. PME partout en France.",
			'og_title'    => "Consultant en automatisation & IA — EB Automatisation",
			'og_desc'     => "J'automatise vos tâches répétitives en connectant Excel, Outlook, votre compta et votre CRM — sans changer vos logiciels. PME partout en France.",
			'tw_title'    => "Consultant en automatisation & IA — EB Automatisation",
			'tw_desc'     => "J'automatise vos tâches répétitives en connectant vos outils existants — sans changer de logiciel. Audit gratuit.",
			'canonical'   => eb_url( 'index' ),
			'faq'         => array(
				array( 'q' => "« On n'a pas les moyens d'automatiser » — est-ce vraiment le cas ?", 'a' => "Une première automatisation démarre autour de 800€ et se rentabilise souvent en quelques semaines sur le temps récupéré. L'audit gratuit sert précisément à vérifier ce calcul avant tout engagement." ),
				array( 'q' => "« On va perdre le contrôle sur nos données » — qu'en est-il réellement ?", 'a' => "L'automatisation s'appuie sur vos outils existants et leurs propres garanties de sécurité. Aucune donnée n'est revendue ni exposée à un tiers non prévu dans votre chaîne d'outils, dans le respect du RGPD." ),
				array( 'q' => "« Nos process sont trop spécifiques pour être automatisés » — vraiment ?", 'a' => "C'est l'objection la plus courante, et la moins souvent vérifiée. La majorité des process « spécifiques » se décomposent en étapes standards (recevoir, vérifier, transmettre, relancer) parfaitement automatisables. L'audit permet de le vérifier sur votre cas précis." ),
				array( 'q' => "« On n'a pas de service informatique » — est-ce un frein ?", 'a' => "Non. C'est justement le principe : chaque automatisation est conçue, déployée et documentée pour être utilisée sans aucune compétence technique de votre part." ),
				array( 'q' => "Combien de temps pour mettre en place une automatisation ?", 'a' => "Les premiers résultats arrivent souvent en quelques jours à quelques semaines, selon la complexité du processus." ),
				array( 'q' => "Mes données sont-elles en sécurité ?", 'a' => "Oui. Je travaille dans le respect du RGPD, sur vos propres outils, sans revente ni exposition de vos données." ),
				array( 'q' => "Faut-il changer de logiciels ?", 'a' => "Non. Je m'appuie sur vos outils existants — Sage, Qonto, Excel, Outlook… — et je les connecte entre eux." ),
				array( 'q' => "Et si je veux internaliser plus tard ?", 'a' => "Tout est documenté et vous appartient. Vous restez parfaitement autonome, sans dépendance à moi." ),
				array( 'q' => "Combien coûte une automatisation ?", 'a' => "Chaque projet est différent. Certaines automatisations simples démarrent autour de 800 €, tandis que les projets plus complets font l'objet d'un devis après audit." ),
				array( 'q' => "Ai-je besoin d'une équipe informatique ?", 'a' => "Non. Je m'occupe de la conception, du déploiement et de la documentation. Vous utilisez simplement les résultats." ),
				array( 'q' => "Pourquoi un consultant indépendant plutôt qu'une agence ?", 'a' => "Un seul interlocuteur du premier audit à la mise en production, des coûts sans structure commerciale à financer, et une expertise gestion/comptabilité qui aide à cibler les automatisations vraiment rentables." ),
				array( 'q' => "Que se passe-t-il si l'audit ne révèle aucun gain intéressant ?", 'a' => "Je vous le dis franchement. L'objectif n'est pas de vendre une prestation à tout prix : si le retour sur investissement n'est pas au rendez-vous, vous repartez simplement avec des pistes d'amélioration, sans obligation d'achat." ),
			),
		),
		'solutions'                 => array(
			'title'       => "Solutions d'automatisation : compta, RH, CRM, Excel, Outlook",
			'description' => "Découvrez comment connecter vos outils pour supprimer ressaisies, oublis et relances manuelles. Expertises métier et outils, sans logiciel à remplacer.",
			'og_title'    => "Solutions d'automatisation : compta, RH, CRM, Excel, Outlook",
			'og_desc'     => "Découvrez comment connecter vos outils pour supprimer ressaisies, oublis et relances manuelles. Expertises métier et outils, sans logiciel à remplacer.",
			'tw_title'    => "Solutions d'automatisation — EB Automatisation",
			'tw_desc'     => "Connectez vos logiciels et supprimez les tâches répétitives. Aucun logiciel à remplacer.",
			'canonical'   => eb_url( 'solutions' ),
			'faq'         => array(
				array( 'q' => "Par où commencer si plusieurs domaines me semblent pertinents ?", 'a' => "Commencez par celui où le temps perdu est le plus visible et le plus facile à chiffrer, quitte à élargir ensuite. L'audit gratuit sert précisément à trancher objectivement entre plusieurs pistes." ),
				array( 'q' => "Ces solutions sont-elles vendues comme des forfaits fixes ?", 'a' => "Non. Chaque solution présentée ici est une famille de cas d'usage, pas un produit standard : le périmètre exact et le chiffrage se construisent avec vous après audit." ),
				array( 'q' => "Comment cette page s'articule avec les pages piliers et les pages Outils ?", 'a' => "Cette page distribue vers deux niveaux de détail : les 3 piliers (méthode par domaine) pour comprendre l'approche, et les pages Outils pour un outil précis (Excel, Outlook, Make, n8n, Microsoft 365)." ),
				array( 'q' => "Peut-on combiner plusieurs de ces solutions dans un même projet ?", 'a' => "Oui, c'est même fréquent : une automatisation commerciale s'articule souvent avec la comptabilité, ou un traitement documentaire IA vient renforcer une automatisation RH existante." ),
				array( 'q' => "Quelle est la différence entre les solutions et les pages d'expertise ?", 'a' => "Cette page présente une vue d'ensemble par domaine. Chaque pilier (entreprise, processus, IA) et chaque page d'expertise détaille ensuite la méthode, les cas d'usage et les questions spécifiques à ce sujet." ),
				array( 'q' => "Proposez-vous des solutions sectorielles spécifiques ?", 'a' => "Les solutions présentées ici sont transversales à la plupart des secteurs. Voir la page réalisations pour des exemples concrets par typologie d'entreprise." ),
				array( 'q' => "Comment savoir si un outil que j'utilise est automatisable ?", 'a' => "La quasi-totalité des logiciels professionnels modernes proposent une API ou des fonctionnalités d'import/export exploitables. La faisabilité exacte se vérifie lors de l'audit, outil par outil." ),
			),
		),
		'realisations'               => array(
			'title'       => "Exemples concrets d'automatisation en entreprise (chiffrés)",
			'description' => "Onboarding RH en 2h au lieu de 2 jours, −85% de temps de rapprochement bancaire, 0 devis oublié : 16 automatisations réelles, détaillées et mesurées.",
			'og_title'    => "Exemples concrets d'automatisation en entreprise (chiffrés)",
			'og_desc'     => "Onboarding RH en 2h au lieu de 2 jours, −85% de temps de rapprochement bancaire, 0 devis oublié : 16 automatisations réelles, détaillées et mesurées.",
			'tw_title'    => "Réalisations — EB Automatisation",
			'tw_desc'     => "Exemples concrets d'automatisations réalisées ou représentatives pour des TPE et PME.",
			'canonical'   => eb_url( 'realisations' ),
			'faq'         => array(
				array( 'q' => "Ces chiffres sont-ils vérifiables ?", 'a' => "Ce sont des exemples représentatifs de missions réalisées ou de scénarios rentables similaires, présentés de façon anonymisée. Des cas clients nommés seront publiés progressivement à mesure des autorisations obtenues." ),
				array( 'q' => "Mon entreprise ressemble-t-elle à l'un de ces cas ?", 'a' => "Très probablement sur au moins un point : la plupart des TPE-PME françaises partagent les mêmes irritants administratifs (emails, Excel, relances, RH, comptabilité), quel que soit le secteur." ),
				array( 'q' => "Combien de temps pour obtenir un résultat similaire ?", 'a' => "Entre une et quatre semaines selon la complexité, comme détaillé sur chaque cas. L'audit gratuit permet d'estimer un délai précis pour votre situation." ),
				array( 'q' => "Ces automatisations fonctionnent-elles avec mes outils spécifiques ?", 'a' => "La compatibilité se vérifie lors de l'audit. La grande majorité des logiciels professionnels (CRM, comptabilité, RH, ERP) disposent d'une API ou de fonctionnalités d'import/export exploitables." ),
				array( 'q' => "Puis-je démarrer par une seule de ces automatisations ?", 'a' => "Oui, c'est même l'approche recommandée : sécuriser un premier gain mesurable avant d'élargir à d'autres processus." ),
				array( 'q' => "Quel est le point commun entre tous ces cas ?", 'a' => "Aucun ne nécessite de changer de logiciel. Chaque automatisation se construit sur les outils déjà utilisés par l'entreprise, ce qui explique des délais de mise en place courts." ),
			),
		),
		'apropos'                   => array(
			'title'       => "Emmanuel Brançon — consultant indépendant en automatisation",
			'description' => "Ex-professionnel de la gestion et de la comptabilité, j'automatise des processus que je connais de l'intérieur. Interlocuteur unique, vous restez autonome.",
			'og_title'    => "Emmanuel Brançon — consultant indépendant en automatisation",
			'og_desc'     => "Ex-professionnel de la gestion et de la comptabilité, j'automatise des processus que je connais de l'intérieur. Interlocuteur unique, vous restez autonome.",
			'tw_title'    => "À propos — EB Automatisation",
			'tw_desc'     => "Un professionnel de la gestion qui automatise ce qu'il maîtrise déjà.",
			'canonical'   => eb_url( 'apropos' ),
			'faq'         => array(
				array( 'q' => "Qui réalise concrètement les automatisations ?", 'a' => "Moi, du premier échange à la mise en production. Aucune sous-traitance invisible : vous savez toujours à qui vous parlez et qui construit votre projet." ),
				array( 'q' => "Que se passe-t-il si vous êtes indisponible (congés, maladie) ?", 'a' => "Chaque projet est documenté au fil de l'eau, pas seulement à la livraison. En cas d'indisponibilité ponctuelle, cette documentation permet une reprise rapide, par moi-même ou par un autre prestataire si nécessaire." ),
				array( 'q' => "Travaillez-vous avec des clients dans toute la France ?", 'a' => "Oui. L'essentiel du travail se fait à distance ; les échanges se font par visioconférence ou par téléphone, sans contrainte géographique pour vous." ),
				array( 'q' => "Votre expérience en gestion sert-elle vraiment sur des sujets techniques ?", 'a' => "Oui, c'est même l'angle central de mon approche : je sais reconnaître une automatisation comptable ou RH fiable d'un raccourci risqué, parce que j'ai pratiqué ces métiers avant de les automatiser." ),
				array( 'q' => "Comment se passe le tout premier échange ?", 'a' => "Par un audit gratuit de 45 minutes, sans engagement : vous présentez vos tâches les plus chronophages, j'identifie celles qui seraient les plus rentables à automatiser." ),
				array( 'q' => "Prenez-vous tous les projets qu'on vous propose ?", 'a' => "Non, et c'est volontaire. Si un projet dépasse le format d'un consultant indépendant ou si je ne vois pas de gain réel, je le dis clairement plutôt que d'accepter une mission mal dimensionnée." ),
			),
		),
		'audit'                     => array(
			'title'       => "Audit d'automatisation gratuit : 45 minutes, zéro engagement",
			'description' => "Repérez les automatisations les plus rentables de votre entreprise en 45 minutes. Réponse sous 24h, recommandations concrètes, aucune obligation d'achat.",
			'og_title'    => "Audit d'automatisation gratuit : 45 minutes, zéro engagement",
			'og_desc'     => "Repérez les automatisations les plus rentables de votre entreprise en 45 minutes. Réponse sous 24h, recommandations concrètes, aucune obligation d'achat.",
			'tw_title'    => "Audit gratuit — EB Automatisation",
			'tw_desc'     => "45 minutes, sans engagement. Repartez avec des pistes d'automatisation concrètes.",
			'canonical'   => eb_url( 'audit' ),
		),
		'agence-ia'                 => array(
			'title'       => "Agence IA ou consultant indépendant : que choisir en PME ?",
			'description' => "Délais, coûts, interlocuteurs : comparez objectivement agence IA et consultant indépendant avant de confier votre projet d'automatisation. Dès 800€.",
			'og_title'    => "Agence IA ou consultant indépendant : que choisir en PME ?",
			'og_desc'     => "Délais, coûts, interlocuteurs : comparez objectivement agence IA et consultant indépendant avant de confier votre projet d'automatisation. Dès 800€.",
			'tw_title'    => "Agence IA ou consultant indépendant : que choisir en PME ?",
			'tw_desc'     => "Comprendre les différences pour choisir le bon prestataire d'automatisation pour votre PME.",
			'canonical'   => eb_url( 'agence-ia' ),
			'og_image'    => 'images/og/og-agence-ia.jpg',
			'breadcrumb'  => 'Agence IA',
			'article'     => array(
				'headline' => "Vous cherchez une agence IA ? Voici ce qu'un consultant indépendant peut vous apporter de différent",
			),
			'faq'         => array(
				array( 'q' => "Travaillez-vous seul sur tous les projets ?", 'a' => "Oui. De l'audit à la mise en production, vous échangez uniquement avec moi. C'est un choix : cela garantit une compréhension fine de votre activité et évite les pertes d'information entre plusieurs interlocuteurs." ),
				array( 'q' => "Pouvez-vous gérer un projet de la taille d'un projet d'agence ?", 'a' => "Cela dépend du périmètre. L'automatisation d'un service (RH, comptabilité, commercial) ou de plusieurs processus complémentaires est exactement mon terrain. Un projet nécessitant une équipe de développeurs à temps plein sur plusieurs mois dépasse le format d'un consultant indépendant — je vous le dirai franchement lors de l'audit." ),
				array( 'q' => "Quels sont vos tarifs comparés à une agence ?", 'a' => "Les premières automatisations démarrent autour de 800€, une automatisation métier complète autour de 1 500€, les projets sur mesure sont chiffrés après audit. Sans structure commerciale à financer, les coûts restent nettement inférieurs à ceux d'une agence pour un périmètre équivalent." ),
				array( 'q' => "Comment se passe la collaboration au quotidien ?", 'a' => "Après l'audit, vous recevez un chiffrage et un plan d'action. Une fois validé, la mise en place se fait par échanges courts et réguliers, sans comité de pilotage ni reporting inutile." ),
				array( 'q' => "Est-ce que je risque de dépendre de vous une fois l'automatisation en place ?", 'a' => "Non. Chaque scénario, chaque accès et chaque document de documentation vous appartiennent. Vous pouvez faire évoluer ou reprendre l'automatisation avec n'importe quel prestataire, y compris en interne si vous recrutez plus tard." ),
			),
		),
		'automatisation-entreprise' => array(
			'title'       => "Automatisation d'entreprise : la méthode service par service",
			'description' => "RH, comptabilité, commercial, reporting : par où commencer pour automatiser votre entreprise et comment prioriser selon le gain réel. Méthode éprouvée.",
			'og_title'    => "Automatisation d'entreprise : la méthode service par service",
			'og_desc'     => "RH, comptabilité, commercial, reporting : par où commencer pour automatiser votre entreprise et comment prioriser selon le gain réel. Méthode éprouvée.",
			'tw_title'    => "Automatisation d'entreprise : la méthode service par service",
			'tw_desc'     => "Comment automatiser son entreprise service par service : méthode et exemples concrets.",
			'canonical'   => eb_url( 'automatisation-entreprise' ),
			'og_image'    => 'images/og/og-automatisation-entreprise.jpg',
			'breadcrumb'  => 'Automatisation entreprise',
			'article'     => array(
				'headline' => "Automatiser son entreprise : par où commencer et jusqu'où aller",
			),
			'faq'         => array(
				array( 'q' => "Quel est le coût pour automatiser toute une entreprise ?", 'a' => "Il n'y a pas de forfait unique : chaque service se chiffre séparément après audit, entre 800€ pour une automatisation ciblée et plusieurs milliers d'euros pour un projet transverse. L'audit gratuit permet d'obtenir une estimation précise avant tout engagement." ),
				array( 'q' => "Combien de temps pour automatiser l'ensemble d'une entreprise ?", 'a' => "Cela dépend du nombre de services concernés, mais chaque automatisation individuelle se déploie en une à quatre semaines. Un plan d'ensemble s'étale généralement sur plusieurs mois, service par service, pour rester maîtrisé." ),
				array( 'q' => "Par quel service faut-il commencer ?", 'a' => "Celui où le temps perdu est le plus visible et le plus facilement quantifiable — souvent les relances clients ou le rapprochement bancaire. L'audit permet d'objectiver ce choix plutôt que de le deviner." ),
				array( 'q' => "Les équipes risquent-elles de mal accepter ces changements ?", 'a' => "C'est une préoccupation légitime. L'automatisation vise à retirer les tâches répétitives, pas les responsabilités : les équipes gagnent du temps sur la saisie pour se concentrer sur l'analyse et la relation client, ce qui est généralement bien accueilli une fois expliqué." ),
				array( 'q' => "Comment mesurer le retour sur investissement ?", 'a' => "Chaque automatisation est chiffrée sur un gain de temps mesurable (heures récupérées par semaine ou par mois). Rapporté au coût de mise en place, le retour sur investissement se calcule simplement et se vérifie après quelques semaines d'usage réel." ),
				array( 'q' => "Quel est le coût réel de ne rien faire ?", 'a' => "Difficile à voir au quotidien, mais facile à calculer : quelques heures perdues chaque semaine par plusieurs personnes représentent souvent plusieurs semaines de travail cumulées sur une année, sans compter les erreurs et les opportunités manquées faute de suivi." ),
				array( 'q' => "Faut-il un projet global ou peut-on commencer petit ?", 'a' => "Il vaut presque toujours mieux commencer petit. Une automatisation ciblée, mesurée, puis étendue progressivement limite le risque et permet de prouver la valeur avant d'investir davantage." ),
				array( 'q' => "Travaillez-vous avec des entreprises de tous secteurs ?", 'a' => "Oui. Les processus administratifs, RH, comptables et commerciaux se ressemblent fortement d'un secteur à l'autre — services, industrie, commerce, conseil — même si les outils spécifiques varient." ),
				array( 'q' => "Que se passe-t-il si l'automatisation ne fonctionne pas comme prévu ?", 'a' => "Chaque automatisation est testée sur des cas réels avant sa mise en production, avec une phase d'ajustement. Si un scénario ne tient pas la route, il est révisé ou simplifié plutôt que déployé tel quel." ),
				array( 'q' => "Puis-je automatiser un seul service sans engager toute l'entreprise ?", 'a' => "Oui, c'est même l'approche la plus courante. Rien n'oblige à traiter tous les services en même temps : chaque automatisation est indépendante et peut s'arrêter là où vous le souhaitez." ),
				array( 'q' => "Quels outils utilisez-vous le plus souvent à l'échelle d'une entreprise ?", 'a' => "Le plus souvent Excel et Outlook comme points d'entrée, orchestrés avec Make ou n8n selon la complexité du projet." ),
				array( 'q' => "Qui reste propriétaire des automatisations mises en place ?", 'a' => "Vous. Les accès, les scénarios et la documentation vous appartiennent dès la livraison ; vous pouvez les faire évoluer avec n'importe quel prestataire, y compris en interne par la suite." ),
				array( 'q' => "Comment se déroule la première prise de contact ?", 'a' => "Par un audit gratuit de 45 minutes, sans engagement : vous présentez vos tâches les plus chronophages, j'identifie celles qui seraient les plus rentables à automatiser et vous repartez avec des pistes concrètes." ),
				array( 'q' => "Une petite entreprise a-t-elle vraiment besoin d'automatiser plusieurs services ?", 'a' => "Cela dépend de sa taille et de son organisation. Dès qu'une même tâche revient chaque semaine dans plusieurs services (relances, saisies, suivis), l'effet cumulé justifie souvent une approche transverse plutôt que des correctifs isolés." ),
			),
		),
		'automatisation-ia'         => array(
			'title'       => "Automatisation IA : le guide concret pour votre entreprise",
			'description' => "Ce que l'intelligence artificielle change vraiment dans vos processus : lecture de documents, tri d'emails, détection d'anomalies. Sans jargon technique.",
			'og_title'    => "Automatisation IA : le guide concret pour votre entreprise",
			'og_desc'     => "Ce que l'intelligence artificielle change vraiment dans vos processus : lecture de documents, tri d'emails, détection d'anomalies. Sans jargon technique.",
			'tw_title'    => "Automatisation IA : le guide concret pour votre entreprise",
			'tw_desc'     => "Ce que l'IA change concrètement dans vos processus, cas d'usage et bénéfices pour votre entreprise.",
			'canonical'   => eb_url( 'automatisation-ia' ),
			'og_image'    => 'images/og/og-automatisation-ia.jpg',
			'breadcrumb'  => 'Automatisation IA',
			'article'     => array(
				'headline' => "L'automatisation IA, expliquée simplement pour les dirigeants de TPE-PME",
			),
			'faq'         => array(
				array( 'q' => "L'automatisation IA remplace-t-elle mon logiciel de comptabilité ou mon CRM ?", 'a' => "Non. L'IA se greffe sur vos outils existants pour interpréter des informations non structurées — emails, PDF, texte libre — avant qu'elles n'entrent dans vos logiciels métier. Elle ne remplace ni Sage, ni votre CRM : elle leur évite la ressaisie manuelle et les erreurs de saisie." ),
				array( 'q' => "Est-ce fiable pour des données sensibles comme la comptabilité ?", 'a' => "L'IA propose, un contrôle humain valide sur les points sensibles au démarrage. Au fil des semaines, à mesure que les règles se stabilisent, l'automatisation devient autonome sur les cas répétitifs — le contrôle humain reste toujours possible à tout moment." ),
				array( 'q' => "Faut-il des compétences techniques en interne pour la maintenir ?", 'a' => "Non. Chaque automatisation est documentée et livrée sur des outils grand public (Make, n8n) que vous pouvez consulter sans coder. Aucune compétence en développement n'est nécessaire pour l'utiliser au quotidien." ),
				array( 'q' => "Quels outils utilisez-vous pour l'IA ?", 'a' => "Make et n8n pour l'orchestration, Python pour les traitements sur mesure, et des modèles de langage pour la lecture et la compréhension — choisis selon le besoin, sans dépendance à un outil propriétaire fermé." ),
				array( 'q' => "Combien de temps avant de voir des résultats concrets ?", 'a' => "Les premières automatisations IA (tri d'emails, lecture de documents) sont généralement opérationnelles en une à deux semaines. Les gains de temps sont visibles dès la première semaine d'utilisation réelle." ),
				array( 'q' => "Quelle est la différence entre IA et RPA ?", 'a' => "La RPA exécute des actions répétitives sur des données déjà bien définies. L'IA ajoute une couche de compréhension pour interpréter une information non structurée avant qu'elle n'entre dans le processus. Les deux se combinent fréquemment sur un même projet." ),
				array( 'q' => "L'automatisation IA est-elle accessible à une petite structure ?", 'a' => "Oui. Les premières automatisations IA (tri d'emails, lecture de documents) démarrent sur des périmètres restreints et des budgets similaires à une automatisation classique — il n'est pas nécessaire d'avoir une grande structure pour en bénéficier." ),
				array( 'q' => "Mes données servent-elles à entraîner un modèle d'IA public ?", 'a' => "Non. Les automatisations sont construites pour traiter vos données sans les réutiliser à d'autres fins ; le choix des modèles et des paramètres de confidentialité est discuté avec vous avant la mise en place." ),
				array( 'q' => "Que se passe-t-il si l'IA fait une erreur d'interprétation ?", 'a' => "Les cas ambigus sont signalés pour validation humaine plutôt que traités à l'aveugle. Chaque erreur identifiée permet d'affiner les règles pour les cas suivants." ),
				array( 'q' => "Faut-il choisir un abonnement IA spécifique ?", 'a' => "Non. Le choix du modèle de langage est fait selon le besoin technique, sans vous imposer un abonnement supplémentaire à gérer — il s'intègre dans le scénario d'automatisation livré." ),
				array( 'q' => "Peut-on commencer par un seul cas d'usage IA avant d'élargir ?", 'a' => "C'est l'approche recommandée : traiter un seul type de document ou d'email en premier permet de calibrer la fiabilité avant d'élargir à d'autres cas." ),
			),
		),
		'automatisation-processus'  => array(
			'title'       => "Automatisation des processus métier : méthode et exemples",
			'description' => "Cartographier, orchestrer puis fiabiliser un processus complet : devis, onboarding, clôture mensuelle. La méthode pas à pas, avec Make et n8n.",
			'og_title'    => "Automatisation des processus métier : méthode et exemples",
			'og_desc'     => "Cartographier, orchestrer puis fiabiliser un processus complet : devis, onboarding, clôture mensuelle. La méthode pas à pas, avec Make et n8n.",
			'tw_title'    => "Automatisation des processus métier : méthode et exemples",
			'tw_desc'     => "Cartographier et automatiser vos processus métier de bout en bout.",
			'canonical'   => eb_url( 'automatisation-processus' ),
			'og_image'    => 'images/og/og-automatisation-processus.jpg',
			'breadcrumb'  => 'Automatisation des processus',
			'article'     => array(
				'headline' => "Automatiser un processus métier : méthode et exemples concrets",
			),
			'faq'         => array(
				array( 'q' => "Quelle est la différence entre automatiser une tâche et un processus ?", 'a' => "Une tâche est une action unique (envoyer un email, extraire une donnée). Un processus enchaîne plusieurs tâches avec des points de décision entre elles, souvent à travers plusieurs outils. L'automatisation d'un processus demande une cartographie plus poussée mais génère un gain de temps plus large." ),
				array( 'q' => "Un processus impliquant plusieurs personnes peut-il être automatisé ?", 'a' => "Oui, c'est même le cas le plus fréquent. L'automatisation orchestre les étapes et notifie la bonne personne au bon moment, sans supprimer les validations humaines nécessaires — elle élimine les relances et les oublis entre les étapes." ),
				array( 'q' => "Comment sont gérées les exceptions dans un processus automatisé ?", 'a' => "Elles sont identifiées dès la phase de cartographie et traitées soit par une règle spécifique, soit par un point d'arrêt qui notifie une personne pour décision. Un processus bien conçu prévoit ces cas plutôt que de les découvrir en production." ),
				array( 'q' => "La cartographie du processus est-elle incluse dans l'audit gratuit ?", 'a' => "L'audit de 45 minutes permet d'identifier les processus à fort potentiel et d'estimer le gain. La cartographie détaillée, elle, fait partie de la phase de mise en place une fois le projet validé." ),
				array( 'q' => "Un processus automatisé peut-il évoluer si mon activité change ?", 'a' => "Oui. Chaque processus est documenté et construit de façon modulaire : une étape peut être ajoutée, modifiée ou retirée sans reconstruire l'ensemble du scénario." ),
				array( 'q' => "Faut-il choisir entre Make et n8n, ou peut-on combiner les deux ?", 'a' => "Il est possible de combiner les deux, mais la plupart des projets se stabilisent sur un seul outil pour rester simples à maintenir. Le choix se fait au démarrage selon le processus concerné." ),
				array( 'q' => "Que se passe-t-il si mon processus change souvent ?", 'a' => "Un processus construit de façon modulaire absorbe bien les changements fréquents : chaque étape peut être ajustée indépendamment, sans reconstruire le scénario complet." ),
				array( 'q' => "Peut-on automatiser un processus qui implique un logiciel métier spécifique ?", 'a' => "Dans la majorité des cas, oui, via son API ou ses fonctionnalités d'import/export. La faisabilité exacte se vérifie lors de l'audit, logiciel par logiciel." ),
				array( 'q' => "Comment savoir si mon entreprise a un processus prioritaire à automatiser ?", 'a' => "Le bon indicateur est la fréquence et la friction ressentie : un enchaînement qui revient chaque semaine, qui implique plusieurs personnes et génère régulièrement des oublis ou des relances, est presque toujours un bon candidat." ),
				array( 'q' => "Un processus automatisé remplace-t-il les validations managériales ?", 'a' => "Non. Les points de décision qui nécessitent un jugement humain restent en place ; l'automatisation orchestre les étapes autour de ces validations, elle ne les supprime pas." ),
				array( 'q' => "Combien de temps faut-il pour cartographier un processus complexe ?", 'a' => "Quelques jours suffisent généralement pour cartographier un processus impliquant deux à quatre outils, en échangeant avec les personnes qui le vivent au quotidien." ),
				array( 'q' => "Puis-je commencer par un seul processus avant d'en automatiser d'autres ?", 'a' => "C'est même l'approche recommandée : un premier processus bien automatisé et mesuré donne une base de confiance et une méthode réutilisable pour les suivants." ),
			),
		),
		'automatisation-taches'     => array(
			'title'       => "Automatisation des tâches répétitives : par où commencer",
			'description' => "Classement de PDF, rappels d'échéance, mises à jour de tableaux : automatisez d'abord les tâches simples, rentabilisées en quelques semaines dès 800€.",
			'og_title'    => "Automatisation des tâches répétitives : par où commencer",
			'og_desc'     => "Classement de PDF, rappels d'échéance, mises à jour de tableaux : automatisez d'abord les tâches simples, rentabilisées en quelques semaines dès 800€.",
			'tw_title'    => "Automatisation des tâches répétitives : par où commencer",
			'tw_desc'     => "Identifiez et automatisez les tâches répétitives qui font perdre du temps à votre équipe.",
			'canonical'   => eb_url( 'automatisation-taches' ),
			'og_image'    => 'images/og/og-automatisation-taches.jpg',
			'breadcrumb'  => 'Automatisation des tâches',
			'article'     => array(
				'headline' => "Automatiser les tâches répétitives : la première étape la plus rentable",
			),
			'faq'         => array(
				array( 'q' => "À partir de quand ça vaut le coup d'automatiser une tâche ?", 'a' => "Dès qu'elle revient régulièrement (au moins hebdomadaire) et suit une règle stable. Une tâche automatisée simple s'amortit généralement en quelques semaines d'usage." ),
				array( 'q' => "Est-ce que ça remplace un poste ou une personne ?", 'a' => "Non. L'objectif est de retirer la partie répétitive d'un poste, pas le poste lui-même. Le temps libéré est généralement réinvesti sur des tâches à plus forte valeur ajoutée — analyse, relation client, suivi qualité." ),
				array( 'q' => "Une tâche automatisée peut-elle évoluer vers un processus complet plus tard ?", 'a' => "Oui, c'est même l'évolution la plus fréquente. Une fois la confiance établie sur une tâche isolée, il devient naturel d'élargir l'automatisation aux étapes voisines jusqu'à couvrir un processus entier." ),
				array( 'q' => "Combien coûte l'automatisation d'une tâche unique ?", 'a' => "Les automatisations de tâches simples démarrent autour de 800€, avec un déploiement en une à deux semaines. Le montant exact dépend du nombre d'outils impliqués et de la complexité de la règle à appliquer." ),
				array( 'q' => "Combien de temps faut-il pour la mettre en place ?", 'a' => "Une tâche bien définie, avec un déclencheur et une règle stables, se met en place en quelques jours à deux semaines, tests inclus." ),
			),
		),
		'automatisation-comptable'  => array(
			'title'       => "Automatisation comptable : OCR facture, saisie, pointage",
			'description' => "Factures fournisseurs lues par OCR, écritures générées, rapprochement bancaire pointé automatiquement. Compatible Pennylane, Sage, Cegid et Quadra.",
			'og_title'    => "Automatisation comptable : OCR facture, saisie, pointage",
			'og_desc'     => "Factures fournisseurs lues par OCR, écritures générées, rapprochement bancaire pointé automatiquement. Compatible Pennylane, Sage, Cegid et Quadra.",
			'tw_title'    => "Automatisation comptable : OCR facture & saisie",
			'tw_desc'     => "Automatisez la saisie comptable et le rapprochement bancaire, compatible Pennylane, Sage, Cegid, Quadra.",
			'canonical'   => eb_url( 'automatisation-comptable' ),
			'og_image'    => 'images/og/og-automatisation-comptable.jpg',
			'breadcrumb'  => 'Automatisation comptable',
			'article'     => array(
				'headline' => "Automatisation comptable : comment éliminer la saisie manuelle avec l'IA",
			),
			'faq'         => array(
				array( 'q' => "Qu'est-ce que l'automatisation comptable, concrètement ?", 'a' => "C'est la mise en place d'un enchaînement automatique entre la réception d'un document (facture, relevé bancaire, note de frais) et son enregistrement en comptabilité, en s'appuyant sur l'OCR pour lire les documents et sur des règles pour générer les écritures." ),
				array( 'q' => "L'OCR peut-il lire n'importe quelle facture ?", 'a' => "L'OCR facture moderne s'adapte à des mises en page très variées (PDF natif, scan, photo), contrairement à un simple gabarit fixe. Les cas ambigus sont signalés pour validation humaine plutôt que comptabilisés à l'aveugle." ),
				array( 'q' => "Est-ce compatible avec Pennylane, Sage, Cegid ou Quadra ?", 'a' => "Oui. L'automatisation se connecte à votre logiciel comptable existant via ses fonctionnalités d'import ou son API — aucun changement d'outil n'est nécessaire pour en bénéficier." ),
				array( 'q' => "Le rapprochement bancaire automatique est-il fiable ?", 'a' => "Le pointage automatique traite les cas standards et signale les écarts (doublons, montants proches, opérations non reconnues) pour un contrôle humain rapide — la fiabilité vient de cette combinaison automatisation plus validation, pas d'un remplacement complet du contrôle." ),
				array( 'q' => "Dois-je changer de logiciel comptable pour automatiser ?", 'a' => "Non. L'automatisation comptable se construit sur l'outil que vous utilisez déjà. L'objectif est de supprimer la ressaisie manuelle, pas de vous faire changer d'écosystème." ),
			),
		),
		'automatisation-rh'         => array(
			'title'       => "Automatisation RH : onboarding, congés et paie sans saisie",
			'description' => "Contrats signés électroniquement, accès créés, congés décomptés, variables de paie transmises : un workflow RH fluide construit sur vos outils actuels.",
			'og_title'    => "Automatisation RH : onboarding, congés et paie sans saisie",
			'og_desc'     => "Contrats signés électroniquement, accès créés, congés décomptés, variables de paie transmises : un workflow RH fluide construit sur vos outils actuels.",
			'tw_title'    => "Automatisation RH : onboarding, congés, paie",
			'tw_desc'     => "Automatisez l'onboarding salarié, la gestion des congés et les variables de paie.",
			'canonical'   => eb_url( 'automatisation-rh' ),
			'og_image'    => 'images/og/og-automatisation-rh.jpg',
			'breadcrumb'  => 'Automatisation RH',
			'article'     => array(
				'headline' => "Automatisation RH : de l'onboarding à la paie, sans ressaisie",
			),
			'faq'         => array(
				array( 'q' => "Qu'est-ce que l'automatisation RH change concrètement ?", 'a' => "Elle connecte les étapes déjà existantes de votre gestion RH — validation d'embauche, signature de contrat, création d'accès, décompte de congés — pour qu'elles s'enchaînent automatiquement, sans ressaisie ni oubli entre chaque étape." ),
				array( 'q' => "La signature électronique a-t-elle une valeur légale ?", 'a' => "Oui, la signature électronique est reconnue juridiquement en France dès lors qu'elle passe par un prestataire certifié. Elle s'intègre au workflow RH pour accélérer la finalisation des contrats sans étape papier." ),
				array( 'q' => "Faut-il un logiciel de paie spécifique pour automatiser la gestion RH ?", 'a' => "Non. L'automatisation se construit autour de votre logiciel de paie actuel : elle alimente les variables et les décomptes de congés automatiquement, sans imposer de changement d'outil." ),
				array( 'q' => "Le recrutement automatisé remplace-t-il le recruteur ?", 'a' => "Non. Il prend en charge le tri, le classement et le suivi de statut des candidatures — la décision de recruter reste humaine. L'objectif est de ne plus perdre de candidature dans un fil d'emails." ),
				array( 'q' => "Mes données RH restent-elles confidentielles ?", 'a' => "Oui. L'automatisation s'appuie sur vos outils existants et leurs propres garanties de sécurité ; aucune donnée RH n'est revendue ni exposée à un tiers non prévu dans votre chaîne d'outils." ),
			),
		),
		'automatisation-crm'        => array(
			'title'       => "Automatisation CRM : 0 prospect oublié (HubSpot, Salesforce)",
			'description' => "0 prospect oublié : email ou formulaire devient fiche CRM, puis relance automatique. Pipeline HubSpot ou Salesforce à jour, sans changer d'outil.",
			'og_title'    => "Automatisation CRM : 0 prospect oublié (HubSpot, Salesforce)",
			'og_desc'     => "0 prospect oublié : email ou formulaire devient fiche CRM, puis relance automatique. Pipeline HubSpot ou Salesforce à jour, sans changer d'outil.",
			'tw_title'    => "Automatisation CRM : 0 prospect oublié",
			'tw_desc'     => "Email ou formulaire → fiche CRM → relance automatique. Pipeline HubSpot ou Salesforce toujours à jour.",
			'canonical'   => eb_url( 'automatisation-crm' ),
			'og_image'    => 'images/og/og-automatisation-crm.jpg',
			'breadcrumb'  => 'Automatisation CRM',
			'article'     => array(
				'headline' => "Automatisation CRM : un pipeline commercial qui se met à jour tout seul",
			),
			'faq'         => array(
				array( 'q' => "Quel CRM est le plus adapté à une TPE-PME ?", 'a' => "HubSpot et Salesforce couvrent la grande majorité des besoins d'un CRM PME ou CRM TPE. Le bon choix dépend surtout de votre volume de contacts et de votre budget — l'automatisation, elle, s'adapte à celui que vous avez déjà." ),
				array( 'q' => "Dois-je changer de CRM pour l'automatiser ?", 'a' => "Non. L'automatisation CRM se construit sur l'outil que vous utilisez déjà, en le connectant à vos emails, formulaires et autres outils commerciaux." ),
				array( 'q' => "Comment fonctionne la qualification automatique des leads ?", 'a' => "Chaque nouveau contact est analysé selon des règles définies avec vous (secteur, taille, origine de la demande) puis assigné et priorisé automatiquement dans le pipeline commercial, sans intervention manuelle de tri." ),
				array( 'q' => "Les relances automatiques ne risquent-elles pas de paraître robotiques ?", 'a' => "Les messages sont personnalisés à partir des données du CRM (nom, contexte de la demande) et le ton est défini avec vous en amont. L'automatisation gère le déclenchement et le timing, pas le contenu générique." ),
				array( 'q' => "Puis-je garder un contrôle humain sur les relances envoyées ?", 'a' => "Oui. Il est courant de démarrer avec une validation humaine avant envoi, puis de passer en automatique une fois les règles éprouvées sur vos premiers cas réels." ),
			),
		),
		'prospection-automatisee'   => array(
			'title'       => "Prospection automatisée : qualification, relance et suivi",
			'description' => "Vos leads entrants sont qualifiés et relancés automatiquement, sans rien laisser passer. LinkedIn et email s'ajoutent en complément — jamais en volume au détriment de la pertinence.",
			'og_title'    => "Prospection automatisée : qualification, relance et suivi",
			'og_desc'     => "Vos leads entrants sont qualifiés et relancés automatiquement, sans rien laisser passer. LinkedIn et email s'ajoutent en complément — jamais en volume au détriment de la pertinence.",
			'tw_title'    => "Prospection automatisée : qualification & relance",
			'tw_desc'     => "Qualifiez, relancez et suivez vos leads automatiquement — sans jamais miser sur le volume.",
			'canonical'   => eb_url( 'prospection-automatisee' ),
			'og_image'    => 'images/og/og-prospection-automatisee.jpg',
			'breadcrumb'  => 'Prospection automatisée',
			'article'     => array(
				'headline' => "Prospection automatisée : qualifiez, relancez et suivez vos leads sans effort",
			),
			'faq'         => array(
				array( 'q' => "L'automatisation LinkedIn respecte-t-elle les règles de la plateforme ?", 'a' => "Les volumes et rythmes d'envoi sont paramétrés pour rester dans des usages raisonnables et éviter tout signalement — l'objectif est une prospection régulière et crédible, pas un envoi massif." ),
				array( 'q' => "Les messages envoyés sont-ils vraiment personnalisés ?", 'a' => "Oui. Les messages s'appuient sur les données enrichies du contact (fonction, entreprise, secteur) pour éviter un ton générique, tout en étant envoyés automatiquement selon la séquence définie avec vous." ),
				array( 'q' => "Quelle est la différence entre prospection automatisée et spam ?", 'a' => "Le volume est maîtrisé, le ciblage est précis, et chaque prospect qui répond ou demande à ne plus être contacté sort automatiquement de la séquence. L'objectif est la qualité des échanges engagés, pas le volume brut de messages envoyés." ),
				array( 'q' => "Comment se passe la qualification automatique des réponses ?", 'a' => "Chaque réponse est analysée pour distinguer un intérêt réel d'un refus ou d'une réponse automatique, afin de ne remonter à l'équipe commerciale que les échanges qui méritent un vrai suivi." ),
				array( 'q' => "Combien de temps avant de voir des résultats ?", 'a' => "Les premières séquences de prospection automatisée sont généralement opérationnelles en une à deux semaines. Les premiers retours (ouvertures, réponses) sont visibles dès les premiers envois." ),
			),
		),
		'rpa'                       => array(
			'title'       => "RPA : l'automatisation robotisée de vos tâches documentaires",
			'description' => "Extraction de données PDF, lecture OCR, saisie reportée dans vos outils : un robot logiciel prend en charge le traitement documentaire répétitif.",
			'og_title'    => "RPA : l'automatisation robotisée de vos tâches documentaires",
			'og_desc'     => "Extraction de données PDF, lecture OCR, saisie reportée dans vos outils : un robot logiciel prend en charge le traitement documentaire répétitif.",
			'tw_title'    => "RPA : robot logiciel pour vos documents",
			'tw_desc'     => "Confiez le traitement documentaire répétitif à un robot logiciel grâce à la RPA.",
			'canonical'   => eb_url( 'rpa' ),
			'og_image'    => 'images/og/og-rpa.jpg',
			'breadcrumb'  => 'RPA',
			'article'     => array(
				'headline' => "RPA : un robot logiciel pour vos tâches documentaires répétitives",
			),
			'faq'         => array(
				array( 'q' => "Qu'est-ce que la RPA exactement ?", 'a' => "La RPA (Robotic Process Automation) désigne l'automatisation de tâches répétitives via un « robot logiciel » qui reproduit des actions numériques réglées — lire, extraire, saisir, transférer — selon des règles précises et stables." ),
				array( 'q' => "Quelle est la différence entre RPA et automatisation IA ?", 'a' => "La RPA excelle sur des règles fixes et prévisibles. L'automatisation IA intervient quand l'information est moins structurée (texte libre, mise en page variable) et nécessite une interprétation avant d'être traitée. Les deux se combinent souvent sur un même processus." ),
				array( 'q' => "L'OCR fonctionne-t-il sur des documents scannés ou photographiés ?", 'a' => "Oui. La lecture automatique de documents moderne traite aussi bien les PDF natifs que les scans ou photos, avec une fiabilité qui dépend de la qualité du document — les cas ambigus sont signalés pour vérification humaine." ),
				array( 'q' => "La RPA nécessite-t-elle des compétences techniques en interne ?", 'a' => "Non. Chaque robot logiciel est conçu, documenté et livré sur des outils grand public (Make, n8n) que vous pouvez consulter sans coder. Aucune compétence en développement n'est nécessaire pour l'utiliser au quotidien." ),
				array( 'q' => "Que se passe-t-il si un document sort du cadre habituel ?", 'a' => "Les cas qui ne correspondent pas aux règles définies sont détectés et signalés pour un traitement manuel, plutôt que traités à l'aveugle avec un risque d'erreur." ),
			),
		),
		'automatisation-excel'      => array(
			'title'       => "Automatisation Excel : fiabilisez vos tableurs",
			'description' => "Alimentez vos fichiers Excel automatiquement depuis vos autres outils : reporting, extraction PDF, contrôles de cohérence. Aucun changement de logiciel.",
			'og_title'    => "Automatisation Excel : fiabilisez vos tableurs",
			'og_desc'     => "Alimentez vos fichiers Excel automatiquement depuis vos autres outils : reporting, extraction PDF, contrôles de cohérence. Aucun changement de logiciel.",
			'tw_title'    => "Automatisation Excel — EB Automatisation",
			'tw_desc'     => "Fiabilisez vos tableurs Excel sans les remplacer : reporting et contrôles automatiques.",
			'canonical'   => eb_url( 'automatisation-excel' ),
			'og_image'    => 'images/og/og-automatisation-excel.jpg',
			'breadcrumb'  => 'Automatisation Excel',
			'article'     => array(
				'headline' => "Automatisation Excel : fiabilisez vos tableurs sans les remplacer",
			),
			'faq'         => array(
				array( 'q' => "Dois-je changer de logiciel pour automatiser Excel ?", 'a' => "Non. L'automatisation Excel connecte votre fichier existant à vos autres outils ; vous continuez à l'utiliser exactement comme avant, simplement sans le remplir à la main." ),
				array( 'q' => "Cela fonctionne-t-il avec des fichiers Excel complexes (macros, formules avancées) ?", 'a' => "Oui, dans la grande majorité des cas. L'automatisation s'adapte à la structure existante du fichier ; une adaptation mineure peut être nécessaire si la mise en page est très irrégulière." ),
				array( 'q' => "Est-ce compatible avec Excel en ligne (Microsoft 365) et Google Sheets ?", 'a' => "Oui pour les deux. Excel de bureau, Excel en ligne dans Microsoft 365 et Google Sheets disposent chacun de connecteurs permettant une automatisation fiable." ),
				array( 'q' => "Quel est le risque d'erreur dans un fichier automatisé ?", 'a' => "Le risque diminue par rapport à une saisie manuelle : les règles de transformation sont fixes et testées, alors qu'une ressaisie humaine répétée introduit statistiquement plus d'erreurs." ),
				array( 'q' => "Combien coûte l'automatisation d'un fichier Excel ?", 'a' => "Les automatisations Excel simples démarrent autour de 800€, avec un déploiement en une à deux semaines. Le tarif exact dépend du nombre de sources de données à connecter." ),
				array( 'q' => "Puis-je continuer à modifier le fichier à la main si besoin ?", 'a' => "Oui. L'automatisation alimente des zones définies du fichier ; les autres zones restent à votre main comme avant, sans conflit." ),
				array( 'q' => "Que se passe-t-il si une donnée source est incorrecte ?", 'a' => "Les incohérences (montant manquant, format inattendu) sont détectées et signalées plutôt que reportées silencieusement dans le fichier final." ),
				array( 'q' => "Combien de temps pour mettre en place ce type d'automatisation ?", 'a' => "Une automatisation Excel ciblée (une source, un fichier) se met en place en quelques jours à deux semaines, tests inclus." ),
				array( 'q' => "Peut-on automatiser plusieurs fichiers Excel liés entre eux ?", 'a' => "Oui, c'est même fréquent — un fichier de suivi alimente un tableau de synthèse, qui alimente à son tour un reporting de direction. Chaque niveau peut être automatisé indépendamment." ),
				array( 'q' => "L'automatisation Excel remplace-t-elle un logiciel de BI ?", 'a' => "Pas nécessairement. Pour beaucoup de TPE-PME, un Excel bien alimenté automatiquement couvre le besoin sans la complexité et le coût d'un outil de Business Intelligence dédié." ),
				array( 'q' => "Mes données Excel restent-elles confidentielles ?", 'a' => "Oui. Le fichier reste hébergé sur vos propres outils (poste local, OneDrive, Google Drive) ; l'automatisation ne fait que le lire et l'écrire selon les règles définies avec vous." ),
			),
		),
		'automatisation-outlook'    => array(
			'title'       => "Automatisation Outlook : triez vos emails automatiquement",
			'description' => "Catégorisation automatique, extraction de pièces jointes, création de fiches CRM : triez votre boîte mail sans changer de messagerie.",
			'og_title'    => "Automatisation Outlook : triez vos emails automatiquement",
			'og_desc'     => "Catégorisation automatique, extraction de pièces jointes, création de fiches CRM : triez votre boîte mail sans changer de messagerie.",
			'tw_title'    => "Automatisation Outlook — EB Automatisation",
			'tw_desc'     => "Triez, classez et traitez vos emails Outlook automatiquement.",
			'canonical'   => eb_url( 'automatisation-outlook' ),
			'og_image'    => 'images/og/og-automatisation-outlook.jpg',
			'breadcrumb'  => 'Automatisation Outlook',
			'article'     => array(
				'headline' => "Automatisation Outlook : triez, classez et traitez vos emails sans y passer vos journées",
			),
			'faq'         => array(
				array( 'q' => "Dois-je changer de messagerie pour automatiser Outlook ?", 'a' => "Non. L'automatisation se connecte à votre compte Outlook existant (professionnel ou Microsoft 365) sans aucun changement d'interface pour vous ou vos équipes." ),
				array( 'q' => "L'automatisation peut-elle répondre à ma place sans validation ?", 'a' => "C'est possible sur des cas très standards, mais la plupart des projets démarrent avec une validation humaine avant envoi, puis passent en automatique une fois la confiance établie." ),
				array( 'q' => "Est-ce que ça fonctionne sur une boîte mail partagée par plusieurs personnes ?", 'a' => "Oui, c'est même l'un des cas d'usage les plus fréquents : la répartition automatique des emails entre plusieurs destinataires selon leur contenu." ),
				array( 'q' => "Mes emails restent-ils confidentiels ?", 'a' => "Oui. L'automatisation lit et traite vos emails selon les règles définies avec vous, sans les exposer à un tiers non prévu dans votre chaîne d'outils ni les revendre." ),
				array( 'q' => "Combien coûte l'automatisation d'une boîte Outlook ?", 'a' => "Les automatisations simples (tri, classement) démarrent autour de 800€. Un traitement plus poussé (lecture IA, création automatique de fiches) se chiffre après audit selon le volume d'emails concerné." ),
				array( 'q' => "Combien de temps pour la mettre en place ?", 'a' => "Un tri et classement automatique se déploie en une à deux semaines. Une lecture IA plus fine des emails prend généralement deux à trois semaines, avec une phase de calibrage." ),
				array( 'q' => "Que se passe-t-il si un email ne correspond à aucune règle connue ?", 'a' => "Il est laissé dans la boîte de réception standard, sans action automatique, plutôt que d'être classé au hasard — l'automatisation ne force jamais une décision incertaine." ),
				array( 'q' => "Puis-je garder le contrôle total sur les règles de tri ?", 'a' => "Oui. Chaque règle est documentée et peut être ajustée ou désactivée à tout moment, sans dépendance technique de votre part." ),
				array( 'q' => "L'automatisation fonctionne-t-elle aussi sur mobile ?", 'a' => "Oui. Le traitement se fait côté serveur, en amont de votre messagerie : les emails arrivent déjà triés, que vous les consultiez sur ordinateur ou sur mobile." ),
				array( 'q' => "Peut-on combiner Outlook et un CRM en même temps ?", 'a' => "Oui, c'est un des flux les plus demandés : chaque email qualifié comme commercial crée automatiquement une fiche dans le CRM, sans ressaisie." ),
				array( 'q' => "Faut-il des compétences techniques pour utiliser le résultat ?", 'a' => "Non. Une fois en place, l'automatisation fonctionne en arrière-plan ; vous continuez à utiliser Outlook normalement, simplement avec moins de tri manuel à faire." ),
			),
		),
		'consultant-make'           => array(
			'title'       => "Consultant Make : automatisation sur mesure",
			'description' => "Conception et documentation de vos scénarios Make : connexions fiables, gestion des erreurs, intégration IA. Devis après audit gratuit.",
			'og_title'    => "Consultant Make : automatisation sur mesure",
			'og_desc'     => "Conception et documentation de vos scénarios Make : connexions fiables, gestion des erreurs, intégration IA. Devis après audit gratuit.",
			'tw_title'    => "Consultant Make — EB Automatisation",
			'tw_desc'     => "Scénarios d'automatisation Make sur mesure, robustes et documentés.",
			'canonical'   => eb_url( 'consultant-make' ),
			'og_image'    => 'images/og/og-consultant-make.jpg',
			'breadcrumb'  => 'Consultant Make',
			'article'     => array(
				'headline' => "Consultant Make : des scénarios d'automatisation sur mesure, sans code",
			),
			'faq'         => array(
				array( 'q' => "Qu'est-ce que Make exactement ?", 'a' => "Make est une plateforme no-code d'automatisation qui permet de connecter des applications entre elles via une interface visuelle, sans écrire de code." ),
				array( 'q' => "Ai-je besoin d'un compte Make pour que vous travailliez pour moi ?", 'a' => "Oui, un compte Make à votre nom est nécessaire : les scénarios développés vous appartiennent dès la livraison, sans dépendance à mon compte personnel." ),
				array( 'q' => "Combien coûte un abonnement Make ?", 'a' => "Make propose une offre gratuite limitée et des abonnements payants selon le volume d'opérations mensuelles. Le bon palier est déterminé ensemble selon le volume réel de vos scénarios." ),
				array( 'q' => "Combien coûte une mission de consultant Make ?", 'a' => "Les scénarios simples démarrent autour de 800€. Les projets combinant plusieurs outils et de l'intelligence artificielle se chiffrent après audit, généralement entre 1 500€ et plusieurs milliers d'euros." ),
				array( 'q' => "Puis-je modifier moi-même le scénario une fois livré ?", 'a' => "Oui. Chaque scénario est documenté avec un schéma clair de son fonctionnement, pour que vous puissiez le consulter et le faire évoluer, avec ou sans moi." ),
				array( 'q' => "Que se passe-t-il si un scénario échoue en cours d'exécution ?", 'a' => "Une alerte est envoyée automatiquement en cas d'échec, avec les informations nécessaires pour diagnostiquer rapidement la cause plutôt que de découvrir le problème plusieurs jours après." ),
				array( 'q' => "Make peut-il gérer de gros volumes de données ?", 'a' => "Oui, dans la plupart des cas de figure d'une TPE-PME. Pour des volumes très importants ou des besoins d'hébergement spécifiques, n8n est parfois plus adapté — ce choix est évalué lors de l'audit." ),
				array( 'q' => "Make est-il compatible avec l'intelligence artificielle ?", 'a' => "Oui. Make se connecte nativement à des modules d'IA pour lire des documents, comprendre des emails ou générer du texte, dans le cadre d'une automatisation IA plus large." ),
				array( 'q' => "Combien de temps pour concevoir un premier scénario ?", 'a' => "Un scénario simple se conçoit et se teste en une à deux semaines. Un scénario combinant plusieurs outils et de la logique conditionnelle prend généralement deux à quatre semaines." ),
				array( 'q' => "Travaillez-vous aussi avec Zapier ?", 'a' => "Je me concentre sur Make et n8n, deux outils qui couvrent l'essentiel des besoins d'automatisation d'une TPE-PME avec un excellent rapport entre coût et puissance." ),
			),
		),
		'consultant-n8n'            => array(
			'title'       => "Consultant n8n : workflows et API sur mesure",
			'description' => "Workflows n8n robustes, hébergement maîtrisé, connexions API sur mesure. Idéal pour des projets techniques ou des données sensibles. Devis après audit gratuit.",
			'og_title'    => "Consultant n8n : workflows et API sur mesure",
			'og_desc'     => "Workflows n8n robustes, hébergement maîtrisé, connexions API sur mesure. Idéal pour des projets techniques ou des données sensibles. Devis après audit gratuit.",
			'tw_title'    => "Consultant n8n — EB Automatisation",
			'tw_desc'     => "Workflows n8n sur mesure, open-source et hébergement maîtrisé.",
			'canonical'   => eb_url( 'consultant-n8n' ),
			'og_image'    => 'images/og/og-consultant-n8n.jpg',
			'breadcrumb'  => 'Consultant n8n',
			'article'     => array(
				'headline' => "Consultant n8n : automatisation open-source et API sur mesure",
			),
			'faq'         => array(
				array( 'q' => "Qu'est-ce que n8n exactement ?", 'a' => "n8n est une plateforme d'automatisation open-source qui permet de construire des workflows connectant des applications entre elles, avec la possibilité d'un hébergement auto-géré." ),
				array( 'q' => "Faut-il héberger n8n moi-même ?", 'a' => "Non, ce n'est pas obligatoire. n8n propose aussi une offre cloud managée. L'auto-hébergement est une option choisie quand la confidentialité ou la maîtrise technique le justifie." ),
				array( 'q' => "n8n est-il plus difficile à utiliser que Make ?", 'a' => "La construction initiale est un peu plus technique, mais une fois le workflow livré et documenté, l'usage au quotidien reste simple : vous n'avez pas à toucher à la configuration technique." ),
				array( 'q' => "Combien coûte une mission de consultant n8n ?", 'a' => "Les workflows standards démarrent autour de 1 000 à 1 500€, un peu au-dessus de Make du fait de la complexité technique. Les projets avec hébergement dédié ou API sur mesure sont chiffrés après audit." ),
				array( 'q' => "Puis-je faire évoluer le workflow moi-même après la livraison ?", 'a' => "Oui, avec de bonnes bases techniques en interne. Sinon, la documentation fournie permet à n'importe quel développeur ou consultant de reprendre le projet facilement." ),
				array( 'q' => "n8n convient-il à une petite entreprise sans équipe technique ?", 'a' => "Oui, tant que l'hébergement cloud managé est choisi. La complexité technique reste alors de mon ressort ; vous n'avez besoin d'aucune compétence pour utiliser le résultat." ),
				array( 'q' => "Quelle est la différence de coût entre l'hébergement cloud et auto-géré ?", 'a' => "L'hébergement cloud managé a un coût d'abonnement mensuel simple. L'auto-hébergement demande un serveur (parfois déjà existant chez vous) mais peut réduire les coûts récurrents à volume élevé — ce choix est évalué ensemble selon votre volumétrie." ),
				array( 'q' => "n8n peut-il se connecter à un logiciel métier propriétaire ?", 'a' => "Dans la majorité des cas, oui, via son API si elle existe. C'est justement l'un des points forts de n8n : sa flexibilité pour des connexions non standards." ),
				array( 'q' => "n8n est-il compatible avec l'intelligence artificielle ?", 'a' => "Oui. n8n dispose de nœuds dédiés pour intégrer des modèles de langage dans un workflow, dans le cadre d'une automatisation IA plus large." ),
				array( 'q' => "Combien de temps pour livrer un premier workflow n8n ?", 'a' => "Un workflow simple se livre en deux à trois semaines. Un projet avec hébergement dédié ou connexions API sur mesure prend généralement trois à six semaines." ),
			),
		),
		'automatisation-microsoft-365' => array(
			'title'       => "Automatisation Microsoft 365 : Outlook, Excel, Teams",
			'description' => "Connectez Outlook, Excel, Teams et SharePoint sans ressaisie. Aucune licence supplémentaire : tout repose sur votre abonnement existant.",
			'og_title'    => "Automatisation Microsoft 365 : Outlook, Excel, Teams",
			'og_desc'     => "Connectez Outlook, Excel, Teams et SharePoint sans ressaisie. Aucune licence supplémentaire : tout repose sur votre abonnement existant.",
			'tw_title'    => "Automatisation Microsoft 365 — EB Automatisation",
			'tw_desc'     => "Connectez Outlook, Excel, Teams et SharePoint sans ressaisie manuelle.",
			'canonical'   => eb_url( 'automatisation-microsoft-365' ),
			'og_image'    => 'images/og/og-automatisation-microsoft-365.jpg',
			'breadcrumb'  => 'Automatisation Microsoft 365',
			'article'     => array(
				'headline' => "Automatisation Microsoft 365 : connectez Outlook, Excel, Teams et SharePoint",
			),
			'faq'         => array(
				array( 'q' => "Faut-il un abonnement Microsoft 365 spécifique pour automatiser ?", 'a' => "La plupart des automatisations fonctionnent avec les abonnements Microsoft 365 Business standards. Certains scénarios avancés avec Power Automate premium peuvent nécessiter une licence complémentaire, évaluée au cas par cas." ),
				array( 'q' => "Dois-je changer d'outils si je choisis Make ou n8n plutôt que Power Automate ?", 'a' => "Non. Make et n8n se connectent à Microsoft 365 sans rien changer à votre utilisation quotidienne d'Outlook, Excel, Teams ou SharePoint." ),
				array( 'q' => "Mes données Microsoft 365 restent-elles dans mon tenant ?", 'a' => "Oui. L'automatisation lit et écrit dans votre environnement Microsoft 365 existant selon les autorisations que vous accordez ; les données ne sont pas dupliquées ailleurs sans raison." ),
				array( 'q' => "Combien coûte une automatisation Microsoft 365 ?", 'a' => "Les automatisations simples démarrent autour de 800€. Un projet reliant plusieurs applications de la suite à un outil tiers se chiffre après audit, entre 1 500€ et plusieurs milliers d'euros." ),
				array( 'q' => "Faut-il des droits d'administrateur pour mettre en place ces automatisations ?", 'a' => "Certains scénarios nécessitent une validation de votre administrateur informatique ou de votre référent Microsoft 365 ; ce point est clarifié dès l'audit pour éviter tout blocage en cours de projet." ),
				array( 'q' => "Peut-on automatiser Teams pour les notifications d'équipe ?", 'a' => "Oui. Les notifications automatiques dans un canal Teams, déclenchées par un événement externe (email, document, mise à jour), sont un cas d'usage fréquent et rapide à mettre en place." ),
				array( 'q' => "SharePoint peut-il servir de base de données pour une automatisation ?", 'a' => "Oui, pour des volumes modérés. SharePoint est souvent utilisé comme espace de stockage structuré alimenté automatiquement, en complément ou à la place d'un fichier Excel partagé." ),
				array( 'q' => "Combien de temps pour mettre en place une automatisation Microsoft 365 ?", 'a' => "Un scénario simple (classement, notification) se déploie en une à deux semaines. Un projet reliant plusieurs applications prend généralement deux à quatre semaines." ),
				array( 'q' => "Cela fonctionne-t-il avec une petite structure de moins de 10 salariés ?", 'a' => "Oui. Le nombre de salariés n'est pas déterminant : ce qui compte est le volume de tâches répétitives dans la suite Microsoft 365, qui peut être élevé même dans une petite structure." ),
				array( 'q' => "Qui reste propriétaire des automatisations mises en place ?", 'a' => "Vous. Les scénarios sont construits dans votre environnement Microsoft 365 et documentés, pour que vous puissiez les faire évoluer avec ou sans moi par la suite." ),
			),
		),
		'automatisation-ocr'        => array(
			'title'       => "Automatisation OCR : lisez vos documents automatiquement",
			'description' => "Factures, notes de frais, certificats : l'OCR couplé à l'IA lit vos documents scannés ou photographiés et transmet les données à vos outils, sans ressaisie.",
			'og_title'    => "Automatisation OCR : lisez vos documents automatiquement",
			'og_desc'     => "Factures, notes de frais, certificats : l'OCR couplé à l'IA lit vos documents scannés ou photographiés et transmet les données à vos outils, sans ressaisie.",
			'tw_title'    => "Automatisation OCR — EB Automatisation",
			'tw_desc'     => "Lisez et exploitez automatiquement vos documents scannés ou photographiés.",
			'canonical'   => eb_url( 'automatisation-ocr' ),
			'og_image'    => 'images/og/og-automatisation-ocr.jpg',
			'breadcrumb'  => 'Automatisation OCR',
			'article'     => array(
				'headline' => "Automatisation OCR : lisez et exploitez vos documents automatiquement",
			),
			'faq'         => array(
				array( 'q' => "Quelle est la différence entre OCR et automatisation comptable ?", 'a' => "L'OCR est la brique technique qui lit un document. L'automatisation comptable est le processus complet (lecture, contrôle, écriture, rapprochement) qui s'appuie notamment sur l'OCR pour les factures et justificatifs." ),
				array( 'q' => "L'OCR fonctionne-t-il sur des documents manuscrits ?", 'a' => "La reconnaissance de texte manuscrit est possible mais moins fiable que sur du texte imprimé ; elle est évaluée au cas par cas selon vos documents lors de l'audit." ),
				array( 'q' => "Quel taux de fiabilité puis-je attendre ?", 'a' => "Sur des documents imprimés et bien scannés, la fiabilité sur les champs standards (montant, date) est très élevée. Les cas ambigus sont systématiquement signalés pour contrôle plutôt que traités à l'aveugle." ),
				array( 'q' => "Combien coûte une automatisation OCR ?", 'a' => "Un premier cas d'usage ciblé (un type de document) démarre autour de 1 000 à 1 500€. Un projet couvrant plusieurs types de documents et davantage de règles se chiffre après audit." ),
				array( 'q' => "Combien de temps pour mettre en place une lecture OCR ?", 'a' => "Deux à trois semaines pour un premier type de document, avec une phase de calibrage sur vos documents réels avant la mise en production." ),
				array( 'q' => "Mes documents restent-ils confidentiels ?", 'a' => "Oui. Le traitement se fait selon les règles définies avec vous ; pour les documents les plus sensibles, une architecture avec hébergement maîtrisé peut être privilégiée." ),
				array( 'q' => "L'OCR peut-il lire des documents dans une langue autre que le français ?", 'a' => "Oui, la plupart des moteurs OCR modernes gèrent plusieurs langues ; ce point est vérifié dès l'audit si vos documents proviennent de fournisseurs étrangers." ),
				array( 'q' => "Que se passe-t-il si un document est illisible ou de mauvaise qualité ?", 'a' => "Il est signalé automatiquement pour traitement manuel plutôt que comptabilisé avec des données incertaines — l'automatisation ne force jamais une lecture douteuse." ),
				array( 'q' => "Puis-je traiter un gros volume d'archives papier existantes ?", 'a' => "Oui, c'est un cas d'usage fréquent lors d'une reprise de dossiers ou d'une numérisation d'archives, avec un traitement par lots plutôt qu'au fil de l'eau." ),
				array( 'q' => "L'OCR remplace-t-il un contrôle humain sur la comptabilité ?", 'a' => "Non. Il élimine la ressaisie, pas le contrôle : la validation finale des écritures sensibles reste de votre ressort, en particulier dans les premières semaines d'utilisation." ),
			),
		),
		'extraction-pdf'            => array(
			'title'       => "Extraction de données PDF automatisée",
			'description' => "Devis, bons de commande, contrats : extrayez automatiquement les données de vos PDF natifs ou scannés vers Excel, votre CRM ou votre comptabilité.",
			'og_title'    => "Extraction de données PDF automatisée",
			'og_desc'     => "Devis, bons de commande, contrats : extrayez automatiquement les données de vos PDF natifs ou scannés vers Excel, votre CRM ou votre comptabilité.",
			'tw_title'    => "Extraction de données PDF — EB Automatisation",
			'tw_desc'     => "Automatisez la lecture de vos documents PDF, natifs ou scannés.",
			'canonical'   => eb_url( 'extraction-pdf' ),
			'og_image'    => 'images/og/og-extraction-pdf.jpg',
			'breadcrumb'  => 'Extraction de données PDF',
			'article'     => array(
				'headline' => "Extraction de données PDF : automatisez la lecture de vos documents",
			),
			'faq'         => array(
				array( 'q' => "Quelle est la différence entre extraction PDF et OCR ?", 'a' => "L'OCR concerne les documents « image » (scan, photo) à convertir en texte. L'extraction PDF couvre un périmètre plus large, y compris les PDF natifs où le texte est déjà exploitable et où seule l'identification des bons champs est nécessaire." ),
				array( 'q' => "Cela fonctionne-t-il si mes fournisseurs ont des mises en page différentes ?", 'a' => "Oui. L'extraction s'appuie sur la reconnaissance du contenu (libellés, position logique des champs) plutôt que sur un gabarit fixe, ce qui la rend robuste face à des mises en page variées." ),
				array( 'q' => "Peut-on extraire des tableaux complets, pas seulement des champs isolés ?", 'a' => "Oui, l'extraction de tableaux (lignes de facture, quantités, prix unitaires) est l'un des cas d'usage les plus fréquents et les plus rentables." ),
				array( 'q' => "Combien coûte une automatisation d'extraction PDF ?", 'a' => "Un cas d'usage ciblé (un type de document, une destination) démarre autour de 800 à 1 200€. Un projet couvrant plusieurs types de documents se chiffre après audit." ),
				array( 'q' => "Combien de temps pour la mettre en place ?", 'a' => "Une à deux semaines pour un premier type de document PDF, tests sur vos documents réels inclus." ),
				array( 'q' => "Que se passe-t-il si un champ est absent d'un document ?", 'a' => "Le document est signalé pour vérification manuelle plutôt que traité avec une donnée manquante ou devinée." ),
				array( 'q' => "Puis-je extraire des données de PDF protégés par mot de passe ?", 'a' => "Oui, sous réserve de disposer du mot de passe ou d'un accès autorisé au document ; ce point est vérifié dès l'audit." ),
				array( 'q' => "L'extraction fonctionne-t-elle sur de gros volumes de documents ?", 'a' => "Oui, le traitement par lots est courant pour des volumes importants (reprise d'archives, traitement mensuel de nombreuses factures)." ),
				array( 'q' => "Mes documents PDF restent-ils confidentiels ?", 'a' => "Oui. Le traitement respecte les règles définies avec vous ; une architecture à hébergement maîtrisé est possible pour les documents les plus sensibles." ),
				array( 'q' => "Vers quels outils les données extraites peuvent-elles être envoyées ?", 'a' => "Excel, votre logiciel comptable, votre CRM, ou tout outil disposant d'une API ou de fonctionnalités d'import — la destination est définie selon votre besoin." ),
			),
		),
		'automatisation-facturation' => array(
			'title'       => "Automatisation de la facturation : devis au paiement",
			'description' => "Génération de facture, envoi, relances, rapprochement des paiements : automatisez tout le cycle de facturation sans changer de logiciel.",
			'og_title'    => "Automatisation de la facturation : devis au paiement",
			'og_desc'     => "Génération de facture, envoi, relances, rapprochement des paiements : automatisez tout le cycle de facturation sans changer de logiciel.",
			'tw_title'    => "Automatisation de la facturation — EB Automatisation",
			'tw_desc'     => "Du devis au paiement, automatisez votre cycle de facturation sans ressaisie.",
			'canonical'   => eb_url( 'automatisation-facturation' ),
			'og_image'    => 'images/og/og-automatisation-facturation.jpg',
			'breadcrumb'  => 'Automatisation de la facturation',
			'article'     => array(
				'headline' => "Automatisation de la facturation : du devis au paiement, sans ressaisie",
			),
			'faq'         => array(
				array( 'q' => "Dois-je changer de logiciel de facturation ?", 'a' => "Non. L'automatisation se construit sur le logiciel que vous utilisez déjà, en connectant ses différentes étapes entre elles et à vos autres outils." ),
				array( 'q' => "Quelle est la différence avec l'automatisation comptable ?", 'a' => "L'automatisation comptable couvre l'ensemble de la comptabilité (factures fournisseurs, rapprochement bancaire, notes de frais). L'automatisation de la facturation se concentre spécifiquement sur le cycle devis → facture → paiement côté client, un processus commercial autant que comptable." ),
				array( 'q' => "Les relances automatiques ne risquent-elles pas de froisser un bon client ?", 'a' => "Le ton et le calendrier de relance sont définis avec vous, et chaque étape peut prévoir une validation humaine avant envoi pour les comptes sensibles." ),
				array( 'q' => "Combien coûte l'automatisation de la facturation ?", 'a' => "Un premier flux ciblé (génération + relances) démarre autour de 1 000 à 1 500€. Un cycle complet avec rapprochement automatique se chiffre après audit." ),
				array( 'q' => "Combien de temps pour la mettre en place ?", 'a' => "Deux à trois semaines pour un premier flux, tests sur vos factures réelles inclus." ),
				array( 'q' => "Cela fonctionne-t-il avec la facturation électronique obligatoire ?", 'a' => "Oui, l'automatisation s'adapte aux formats requis par la réglementation en vigueur, en s'appuyant sur les fonctionnalités de votre logiciel de facturation." ),
				array( 'q' => "Puis-je garder un contrôle avant l'envoi de chaque facture ?", 'a' => "Oui, une validation humaine avant envoi est courante au démarrage, puis retirée progressivement une fois la confiance établie sur les cas standards." ),
				array( 'q' => "Que se passe-t-il en cas de litige sur une facture ?", 'a' => "Le cycle automatique de relance s'interrompt dès qu'un litige est signalé, pour repasser en traitement manuel — l'automatisation ne force jamais une relance sur un dossier contesté." ),
				array( 'q' => "Puis-je automatiser uniquement les relances, sans toucher au reste ?", 'a' => "Oui, c'est un excellent point de départ : automatiser uniquement les relances est rapide à mettre en place et donne un gain immédiatement mesurable." ),
				array( 'q' => "Qui reste propriétaire du scénario mis en place ?", 'a' => "Vous. Le scénario, les accès et la documentation vous appartiennent dès la livraison, indépendamment de moi." ),
			),
		),
		'tarifs'                    => array(
			'title'       => "Tarifs automatisation entreprise : exemples de budgets",
			'description' => "Combien coûte une automatisation pour une TPE-PME ? Exemples de budgets réels (relance devis, extraction PDF, RH, reporting), facteurs de prix et seuil de rentabilité.",
			'og_title'    => "Tarifs automatisation entreprise : exemples de budgets",
			'og_desc'     => "Exemples de budgets réels par projet, ce qui fait varier le prix, et à partir de quand une automatisation devient rentable.",
			'tw_title'    => "Tarifs automatisation entreprise : exemples de budgets",
			'tw_desc'     => "Exemples de budgets réels par projet, ce qui fait varier le prix, et à partir de quand une automatisation devient rentable.",
			'canonical'   => eb_url( 'tarifs' ),
		),
		'mentions-legales'          => array(
			'title'       => "Mentions légales — EB Automatisation",
			'description' => "Mentions légales du site eb-automatisation.fr : éditeur, hébergeur, propriété intellectuelle et droit applicable.",
			'og_title'    => "Mentions légales — EB Automatisation",
			'og_desc'     => "Mentions légales du site eb-automatisation.fr.",
			'tw_title'    => "Mentions légales — EB Automatisation",
			'tw_desc'     => "Mentions légales du site eb-automatisation.fr.",
			'canonical'   => eb_url( 'mentions-legales' ),
		),
		'confidentialite'           => array(
			'title'       => "Politique de confidentialité — EB Automatisation",
			'description' => "Comment EB Automatisation collecte, utilise et protège vos données personnelles sur eb-automatisation.fr.",
			'og_title'    => "Politique de confidentialité — EB Automatisation",
			'og_desc'     => "Comment EB Automatisation collecte, utilise et protège vos données personnelles.",
			'tw_title'    => "Politique de confidentialité — EB Automatisation",
			'tw_desc'     => "Comment EB Automatisation collecte, utilise et protège vos données personnelles.",
			'canonical'   => eb_url( 'confidentialite' ),
		),
		'rgpd'                      => array(
			'title'       => "RGPD — Vos droits sur vos données",
			'description' => "Vos droits RGPD (accès, rectification, effacement, opposition, portabilité) et comment les exercer auprès d'EB Automatisation.",
			'og_title'    => "RGPD — Vos droits sur vos données",
			'og_desc'     => "Vos droits RGPD et comment les exercer auprès d'EB Automatisation.",
			'tw_title'    => "RGPD — Vos droits sur vos données",
			'tw_desc'     => "Vos droits RGPD et comment les exercer auprès d'EB Automatisation.",
			'canonical'   => eb_url( 'rgpd' ),
		),
	);
}

/**
 * Image Open Graph / Twitter Card d'une page.
 *
 * Pour donner à une page sa propre image (1200×630 recommandé), ajoutez dans
 * son tableau au sein de eb_seo_data() une clé 'og_image' avec un chemin
 * relatif à assets/, par exemple :
 *   'og_image' => 'images/og/audit.jpg',
 * Voir README.md pour l'emplacement exact où déposer ces fichiers.
 *
 * Tant qu'une page ne définit pas 'og_image', elle utilise le visuel
 * partagé provisoire assets/images/og/og-default.jpg.
 */
function eb_og_image( $d ) {
	if ( ! empty( $d['og_image'] ) ) {
		return eb_asset( $d['og_image'] );
	}
	return eb_asset( 'images/og/og-default.jpg' );
}

/**
 * Largeur/hauteur réelles de l'image OG courante (og:image:width/height) :
 * recommandé par la spec Open Graph pour que Facebook/LinkedIn affichent
 * l'aperçu sans devoir télécharger l'image pour en déduire les dimensions.
 * Lit le fichier réel plutôt que de figer "1200x630" en dur, pour rester
 * juste même si une page définit un jour un 'og_image' à d'autres dimensions.
 */
function eb_og_image_dimensions( $d ) {
	$relative = ! empty( $d['og_image'] ) ? $d['og_image'] : 'images/og/og-default.jpg';
	$path     = EB_THEME_DIR . '/assets/' . ltrim( $relative, '/' );
	$size     = @getimagesize( $path );
	if ( $size ) {
		return array( $size[0], $size[1] );
	}
	return array( 1200, 630 );
}

/**
 * Retire le <title> généré par WordPress core et le remplace par le
 * texte exact du HTML source (aucun plugin SEO, aucune génération dynamique).
 */
function eb_document_title( $title ) {
	$page = eb_current_page_key();
	$data = eb_seo_data();
	if ( isset( $data[ $page ] ) ) {
		return $data[ $page ]['title'];
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'eb_document_title' );

/**
 * Injecte meta description / OG / Twitter / canonical / JSON-LD dans <head>.
 * Rien de tout cela n'est fourni par GeneratePress ou par WordPress core :
 * aucun conflit possible, pas besoin de désactiver quoi que ce soit ici.
 */
function eb_output_seo_tags() {
	$page = eb_current_page_key();
	$data = eb_seo_data();

	if ( ! isset( $data[ $page ] ) ) {
		return;
	}

	$d           = $data[ $page ];
	$img         = eb_og_image( $d );
	$img_w_h     = eb_og_image_dimensions( $d );
	$og_type     = eb_is_pillar_page( $page ) && isset( $d['article'] ) ? 'article' : 'website';
	?>
<meta name="robots" content="index, follow">
<meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
<meta property="og:site_name" content="EB Automatisation">
<meta property="og:url" content="<?php echo esc_url( $d['canonical'] ); ?>">
<meta property="og:title" content="<?php echo esc_attr( $d['og_title'] ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $d['og_desc'] ); ?>">
<meta property="og:image" content="<?php echo esc_url( $img ); ?>">
<meta property="og:image:width" content="<?php echo esc_attr( $img_w_h[0] ); ?>">
<meta property="og:image:height" content="<?php echo esc_attr( $img_w_h[1] ); ?>">
<meta property="og:image:alt" content="<?php echo esc_attr( $d['og_title'] ); ?>">
<meta property="og:locale" content="fr_FR">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $d['tw_title'] ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $d['tw_desc'] ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $img ); ?>">
<meta name="description" content="<?php echo esc_attr( $d['description'] ); ?>">
<link rel="canonical" href="<?php echo esc_url( $d['canonical'] ); ?>">
	<?php
	include EB_THEME_DIR . '/template-parts/jsonld-organization.php';
	if ( eb_is_pillar_page( $page ) && isset( $d['breadcrumb'] ) ) {
		include EB_THEME_DIR . '/template-parts/jsonld-breadcrumb.php';
	}
	if ( eb_is_pillar_page( $page ) && isset( $d['article'] ) ) {
		include EB_THEME_DIR . '/template-parts/jsonld-article.php';
	}
	// FAQPage : n'importe quelle page peut désormais déclarer un 'faq' dans
	// eb_seo_data() (pas seulement les piliers) — jsonld-faq.php se charge
	// déjà de ne rien sortir si $d['faq'] est absent.
	if ( isset( $d['faq'] ) ) {
		include EB_THEME_DIR . '/template-parts/jsonld-faq.php';
	}
}
add_action( 'wp_head', 'eb_output_seo_tags', 1 );

/**
 * Retire le rel="canonical" que WordPress core ajoute automatiquement
 * (rel_canonical(), accrochée par défaut à wp_head) : notre propre canonical
 * est déjà émis ci-dessus dans eb_output_seo_tags(), avoir les deux en même
 * temps produit deux balises <link rel="canonical"> sur la même page.
 */
remove_action( 'wp_head', 'rel_canonical' );

/**
 * -----------------------------------------------------------------------
 * 5. Nettoyage de wp_head() — retire les balises injectées par WordPress
 *    core qui n'ont aucune utilité sur ce site (aucun client XML-RPC/Windows
 *    Live Writer, pas de flux RSS consommé, emoji rendus nativement par les
 *    navigateurs modernes) : moins de requêtes, moins de poids, et on
 *    n'annonce plus la version de WordPress utilisée.
 * -----------------------------------------------------------------------
 */
function eb_clean_wp_head() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'eb_clean_wp_head' );
