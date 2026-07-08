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

function eb_is_pillar_page( $key ) {
	return in_array(
		$key,
		array( 'agence-ia', 'automatisation-entreprise', 'automatisation-ia', 'automatisation-processus', 'automatisation-taches', 'automatisation-comptable', 'automatisation-rh', 'automatisation-crm', 'prospection-automatisee', 'rpa' ),
		true
	);
}

/**
 * -----------------------------------------------------------------------
 * 3. CSS / JS — même ordre de chargement que les <link>/<script> du HTML
 *    source, fichiers copiés à l'identique dans assets/.
 * -----------------------------------------------------------------------
 */
function eb_enqueue_assets() {
	$page = eb_current_page_key();

	// Police Google Fonts — identique au CDN utilisé dans le HTML source.
	wp_enqueue_style(
		'eb-google-fonts',
		// Schibsted Grotesk (titres) n'est jamais utilisée en graisse 400 dans le CSS —
		// vérifié sur l'ensemble des fichiers (h1/h2/h3 et tous les autres usages sont
		// en 500/600/700). Ce poids n'est donc pas demandé, pour éviter un fichier de
		// police téléchargé pour rien.
		'https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:wght@500;600;700&family=Hanken+Grotesk:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	$base_css = array( 'tokens', 'layout', 'typography', 'components', 'animations', 'utilities' );
	$deps     = array();
	foreach ( $base_css as $handle ) {
		wp_enqueue_style( 'eb-' . $handle, EB_THEME_URI . '/assets/css/' . $handle . '.css', $deps, filemtime( EB_THEME_DIR . '/assets/css/' . $handle . '.css' ) );
		$deps = array( 'eb-' . $handle );
	}

	// CSS de page : même fichier que le <link> spécifique de chaque page HTML source.
	$page_css_map = array(
		'index'                     => 'home',
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
			'title'       => "Automatisation IA pour PME | Consultant IA indépendant | EB Automatisation",
			'description' => "Automatisez Excel, Outlook, CRM, Sage et vos logiciels métier grâce à l'IA. Consultant indépendant en automatisation pour PME partout en France. Audit gratuit.",
			'og_title'    => "EB Automatisation — Automatisez vos tâches répétitives, gardez vos outils",
			'og_desc'     => "Consultant indépendant en automatisation IA pour TPE-PME françaises. Je connecte vos outils existants pour supprimer les tâches répétitives. Audit gratuit.",
			'tw_title'    => "EB Automatisation — Automatisez vos tâches répétitives, gardez vos outils",
			'tw_desc'     => "Consultant indépendant en automatisation IA pour TPE-PME françaises. Audit gratuit, sans engagement.",
			'canonical'   => eb_url( 'index' ),
		),
		'solutions'                 => array(
			'title'       => "Solutions d'automatisation IA pour PME | EB Automatisation",
			'description' => "Outlook, Excel, Sage, Qonto, CRM, RH : je connecte vos outils existants pour éliminer ressaisies et oublis. Aucun logiciel à remplacer. Audit gratuit.",
			'og_title'    => "Solutions d'automatisation — EB Automatisation",
			'og_desc'     => "Je connecte les outils que vous utilisez déjà (Outlook, Excel, Sage, Qonto, CRM, logiciels RH…) afin d'éliminer les ressaisies, les oublis et les tâches chronophages.",
			'tw_title'    => "Solutions d'automatisation — EB Automatisation",
			'tw_desc'     => "Connectez vos logiciels et supprimez les tâches répétitives. Aucun logiciel à remplacer.",
			'canonical'   => eb_url( 'solutions' ),
		),
		'realisations'               => array(
			'title'       => "Exemples d'automatisation IA en entreprise | EB Automatisation",
			'description' => "De -38% de retards de paiement à -90% de temps de rédaction : découvrez des automatisations IA réellement mises en place en TPE et PME. Audit gratuit.",
			'og_title'    => "Réalisations — EB Automatisation",
			'og_desc'     => "Découvrez ce que l'automatisation peut réellement vous faire gagner : temps gagné, erreurs supprimées et processus simplifiés.",
			'tw_title'    => "Réalisations — EB Automatisation",
			'tw_desc'     => "Exemples concrets d'automatisations réalisées ou représentatives pour des TPE et PME.",
			'canonical'   => eb_url( 'realisations' ),
		),
		'apropos'                   => array(
			'title'       => "Consultant en automatisation IA | Emmanuel Brançon",
			'description' => "Ex-professionnel de la gestion, je comprends vos processus avant de les automatiser. Interlocuteur unique, vous restez propriétaire de vos outils.",
			'og_title'    => "À propos — EB Automatisation",
			'og_desc'     => "Emmanuel Brançon, consultant indépendant en automatisation & IA pour les TPE-PME françaises.",
			'tw_title'    => "À propos — EB Automatisation",
			'tw_desc'     => "Un professionnel de la gestion qui automatise ce qu'il maîtrise déjà.",
			'canonical'   => eb_url( 'apropos' ),
		),
		'audit'                     => array(
			'title'       => "Audit gratuit d'automatisation IA | EB Automatisation",
			'description' => "45 minutes, sans engagement, pour identifier vos automatisations les plus rentables. Réponse sous 24h pour fixer votre créneau. C'est gratuit.",
			'og_title'    => "Audit gratuit — EB Automatisation",
			'og_desc'     => "45 minutes pour repérer vos automatisations les plus rentables. Réponse sous 24h pour fixer un créneau.",
			'tw_title'    => "Audit gratuit — EB Automatisation",
			'tw_desc'     => "45 minutes, sans engagement. Repartez avec des pistes d'automatisation concrètes.",
			'canonical'   => eb_url( 'audit' ),
		),
		'agence-ia'                 => array(
			'title'       => "Agence IA ou consultant indépendant ? | EB Automatisation",
			'description' => "Interlocuteur unique, mise en place en 1 à 4 semaines, structure de coûts allégée dès 800€ : ce qu'un consultant indépendant change vs une agence.",
			'og_title'    => "Agence IA vs consultant indépendant | EB Automatisation",
			'og_desc'     => "Agence IA ou consultant indépendant ? Comprendre les différences pour choisir le bon prestataire d'automatisation pour votre PME.",
			'tw_title'    => "Agence IA vs consultant indépendant | EB Automatisation",
			'tw_desc'     => "Comprendre les différences pour choisir le bon prestataire d'automatisation pour votre PME.",
			'canonical'   => eb_url( 'agence-ia' ),
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
			'title'       => "Automatisation d'entreprise : guide complet pour PME",
			'description' => "Administratif, comptabilité, RH, CRM : automatisez service par service, dès 800€. Méthode et exemples concrets. Audit gratuit de 45 minutes.",
			'og_title'    => "Automatisation entreprise : par où commencer | EB Automatisation",
			'og_desc'     => "Comment automatiser son entreprise service par service : administratif, comptabilité, RH, CRM. Méthode et exemples concrets.",
			'tw_title'    => "Automatisation entreprise : par où commencer | EB Automatisation",
			'tw_desc'     => "Comment automatiser son entreprise service par service : méthode et exemples concrets.",
			'canonical'   => eb_url( 'automatisation-entreprise' ),
			'article'     => array(
				'headline' => "Automatiser son entreprise : par où commencer et jusqu'où aller",
			),
			'faq'         => array(
				array( 'q' => "Quel est le coût pour automatiser toute une entreprise ?", 'a' => "Il n'y a pas de forfait unique : chaque service se chiffre séparément après audit, entre 800€ pour une automatisation ciblée et plusieurs milliers d'euros pour un projet transverse. L'audit gratuit permet d'obtenir une estimation précise avant tout engagement." ),
				array( 'q' => "Combien de temps pour automatiser l'ensemble d'une entreprise ?", 'a' => "Cela dépend du nombre de services concernés, mais chaque automatisation individuelle se déploie en une à quatre semaines. Un plan d'ensemble s'étale généralement sur plusieurs mois, service par service, pour rester maîtrisé." ),
				array( 'q' => "Par quel service faut-il commencer ?", 'a' => "Celui où le temps perdu est le plus visible et le plus facilement quantifiable — souvent les relances clients ou le rapprochement bancaire. L'audit permet d'objectiver ce choix plutôt que de le deviner." ),
				array( 'q' => "Les équipes risquent-elles de mal accepter ces changements ?", 'a' => "C'est une préoccupation légitime. L'automatisation vise à retirer les tâches répétitives, pas les responsabilités : les équipes gagnent du temps sur la saisie pour se concentrer sur l'analyse et la relation client, ce qui est généralement bien accueilli une fois expliqué." ),
				array( 'q' => "Comment mesurer le retour sur investissement ?", 'a' => "Chaque automatisation est chiffrée sur un gain de temps mesurable (heures récupérées par semaine ou par mois). Rapporté au coût de mise en place, le retour sur investissement se calcule simplement et se vérifie après quelques semaines d'usage réel." ),
			),
		),
		'automatisation-ia'         => array(
			'title'       => "Automatisation IA pour PME : guide complet",
			'description' => "L'IA lit vos emails et documents en 10 minutes au lieu de 45 : ce qui change concrètement dans vos processus, expliqué simplement. Audit gratuit.",
			'og_title'    => "Automatisation IA pour TPE-PME | EB Automatisation",
			'og_desc'     => "L'automatisation IA expliquée simplement : ce que l'IA change concrètement dans vos processus, cas d'usage et bénéfices pour votre entreprise.",
			'tw_title'    => "Automatisation IA pour TPE-PME | EB Automatisation",
			'tw_desc'     => "Ce que l'IA change concrètement dans vos processus, cas d'usage et bénéfices pour votre entreprise.",
			'canonical'   => eb_url( 'automatisation-ia' ),
			'article'     => array(
				'headline' => "L'automatisation IA, expliquée simplement pour les dirigeants de TPE-PME",
			),
			'faq'         => array(
				array( 'q' => "L'automatisation IA remplace-t-elle mon logiciel de comptabilité ou mon CRM ?", 'a' => "Non. L'IA se greffe sur vos outils existants pour interpréter des informations non structurées — emails, PDF, texte libre — avant qu'elles n'entrent dans vos logiciels métier. Elle ne remplace ni Sage, ni votre CRM : elle leur évite la ressaisie manuelle et les erreurs de saisie." ),
				array( 'q' => "Est-ce fiable pour des données sensibles comme la comptabilité ?", 'a' => "L'IA propose, un contrôle humain valide sur les points sensibles au démarrage. Au fil des semaines, à mesure que les règles se stabilisent, l'automatisation devient autonome sur les cas répétitifs — le contrôle humain reste toujours possible à tout moment." ),
				array( 'q' => "Faut-il des compétences techniques en interne pour la maintenir ?", 'a' => "Non. Chaque automatisation est documentée et livrée sur des outils grand public (Make, n8n) que vous pouvez consulter sans coder. Aucune compétence en développement n'est nécessaire pour l'utiliser au quotidien." ),
				array( 'q' => "Quels outils utilisez-vous pour l'IA ?", 'a' => "Make et n8n pour l'orchestration, Python pour les traitements sur mesure, et des modèles de langage pour la lecture et la compréhension — choisis selon le besoin, sans dépendance à un outil propriétaire fermé." ),
				array( 'q' => "Combien de temps avant de voir des résultats concrets ?", 'a' => "Les premières automatisations IA (tri d'emails, lecture de documents) sont généralement opérationnelles en une à deux semaines. Les gains de temps sont visibles dès la première semaine d'utilisation réelle." ),
			),
		),
		'automatisation-processus'  => array(
			'title'       => "Automatiser un processus métier de bout en bout",
			'description' => "Cartographiez et automatisez vos processus métier de bout en bout : méthode, outils, exemples concrets pour TPE-PME. Audit gratuit de 45 min.",
			'og_title'    => "Automatisation des processus métier | EB Automatisation",
			'og_desc'     => "Cartographier et automatiser vos processus métier de bout en bout : méthode, outils et exemples pour TPE-PME.",
			'tw_title'    => "Automatisation des processus métier | EB Automatisation",
			'tw_desc'     => "Cartographier et automatiser vos processus métier de bout en bout.",
			'canonical'   => eb_url( 'automatisation-processus' ),
			'article'     => array(
				'headline' => "Automatiser un processus métier : méthode et exemples concrets",
			),
			'faq'         => array(
				array( 'q' => "Quelle est la différence entre automatiser une tâche et un processus ?", 'a' => "Une tâche est une action unique (envoyer un email, extraire une donnée). Un processus enchaîne plusieurs tâches avec des points de décision entre elles, souvent à travers plusieurs outils. L'automatisation d'un processus demande une cartographie plus poussée mais génère un gain de temps plus large." ),
				array( 'q' => "Un processus impliquant plusieurs personnes peut-il être automatisé ?", 'a' => "Oui, c'est même le cas le plus fréquent. L'automatisation orchestre les étapes et notifie la bonne personne au bon moment, sans supprimer les validations humaines nécessaires — elle élimine les relances et les oublis entre les étapes." ),
				array( 'q' => "Comment sont gérées les exceptions dans un processus automatisé ?", 'a' => "Elles sont identifiées dès la phase de cartographie et traitées soit par une règle spécifique, soit par un point d'arrêt qui notifie une personne pour décision. Un processus bien conçu prévoit ces cas plutôt que de les découvrir en production." ),
				array( 'q' => "La cartographie du processus est-elle incluse dans l'audit gratuit ?", 'a' => "L'audit de 45 minutes permet d'identifier les processus à fort potentiel et d'estimer le gain. La cartographie détaillée, elle, fait partie de la phase de mise en place une fois le projet validé." ),
				array( 'q' => "Un processus automatisé peut-il évoluer si mon activité change ?", 'a' => "Oui. Chaque processus est documenté et construit de façon modulaire : une étape peut être ajoutée, modifiée ou retirée sans reconstruire l'ensemble du scénario." ),
			),
		),
		'automatisation-taches'     => array(
			'title'       => "Automatiser les tâches répétitives avec l'IA",
			'description' => "Jusqu'à -72% de temps de saisie : identifiez et automatisez les tâches qui font perdre du temps à votre équipe. Premiers gains dès 800€.",
			'og_title'    => "Automatisation des tâches répétitives | EB Automatisation",
			'og_desc'     => "Identifiez et automatisez les tâches répétitives qui font perdre du temps à votre équipe. Premiers gains rapides et mesurables.",
			'tw_title'    => "Automatisation des tâches répétitives | EB Automatisation",
			'tw_desc'     => "Identifiez et automatisez les tâches répétitives qui font perdre du temps à votre équipe.",
			'canonical'   => eb_url( 'automatisation-taches' ),
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
			'title'       => "Automatisation comptable : OCR facture & saisie",
			'description' => "Automatisez la saisie comptable, l'OCR facture et le rapprochement bancaire, compatible Pennylane, Sage, Cegid, Quadra. Audit gratuit de 45 minutes.",
			'og_title'    => "Automatisation comptable : éliminez la saisie manuelle | EB Automatisation",
			'og_desc'     => "OCR facture, saisie comptable automatique et rapprochement bancaire automatique, compatible Pennylane, Sage, Cegid, Quadra.",
			'tw_title'    => "Automatisation comptable : OCR facture & saisie",
			'tw_desc'     => "Automatisez la saisie comptable et le rapprochement bancaire, compatible Pennylane, Sage, Cegid, Quadra.",
			'canonical'   => eb_url( 'automatisation-comptable' ),
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
			'title'       => "Automatisation RH : onboarding, congés, paie",
			'description' => "Automatisez l'onboarding salarié, la signature électronique, la gestion des congés et les variables de paie. Workflow RH sur mesure. Audit gratuit.",
			'og_title'    => "Automatisation RH : de l'onboarding à la paie | EB Automatisation",
			'og_desc'     => "Onboarding salarié, signature électronique, gestion des congés, paie : un workflow RH automatisé sans ressaisie.",
			'tw_title'    => "Automatisation RH : onboarding, congés, paie",
			'tw_desc'     => "Automatisez l'onboarding salarié, la gestion des congés et les variables de paie.",
			'canonical'   => eb_url( 'automatisation-rh' ),
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
			'title'       => "Automatisation CRM : pipeline commercial à jour",
			'description' => "HubSpot, Pipedrive, Salesforce : automatisez la création de fiches, les relances et la qualification des leads. CRM PME toujours à jour. Audit gratuit.",
			'og_title'    => "Automatisation CRM : pipeline commercial à jour | EB Automatisation",
			'og_desc'     => "Automatisez votre suivi commercial (HubSpot, Pipedrive, Salesforce) : fiches, relances et qualification des leads.",
			'tw_title'    => "Automatisation CRM : pipeline commercial à jour",
			'tw_desc'     => "Automatisez la création de fiches, les relances et la qualification des leads dans votre CRM.",
			'canonical'   => eb_url( 'automatisation-crm' ),
			'article'     => array(
				'headline' => "Automatisation CRM : un pipeline commercial qui se met à jour tout seul",
			),
			'faq'         => array(
				array( 'q' => "Quel CRM est le plus adapté à une TPE-PME ?", 'a' => "HubSpot, Pipedrive et Salesforce couvrent la grande majorité des besoins d'un CRM PME ou CRM TPE. Le bon choix dépend surtout de votre volume de contacts et de votre budget — l'automatisation, elle, s'adapte à celui que vous avez déjà." ),
				array( 'q' => "Dois-je changer de CRM pour l'automatiser ?", 'a' => "Non. L'automatisation CRM se construit sur l'outil que vous utilisez déjà, en le connectant à vos emails, formulaires et autres outils commerciaux." ),
				array( 'q' => "Comment fonctionne la qualification automatique des leads ?", 'a' => "Chaque nouveau contact est analysé selon des règles définies avec vous (secteur, taille, origine de la demande) puis assigné et priorisé automatiquement dans le pipeline commercial, sans intervention manuelle de tri." ),
				array( 'q' => "Les relances automatiques ne risquent-elles pas de paraître robotiques ?", 'a' => "Les messages sont personnalisés à partir des données du CRM (nom, contexte de la demande) et le ton est défini avec vous en amont. L'automatisation gère le déclenchement et le timing, pas le contenu générique." ),
				array( 'q' => "Puis-je garder un contrôle humain sur les relances envoyées ?", 'a' => "Oui. Il est courant de démarrer avec une validation humaine avant envoi, puis de passer en automatique une fois les règles éprouvées sur vos premiers cas réels." ),
			),
		),
		'prospection-automatisee'   => array(
			'title'       => "Prospection automatisée B2B : leads & relances",
			'description' => "Automatisation LinkedIn, relances email, enrichissement CRM : générez des leads B2B qualifiés sans y passer vos journées. Audit gratuit de 45 min.",
			'og_title'    => "Prospection automatisée : générez des leads B2B | EB Automatisation",
			'og_desc'     => "Automatisation LinkedIn, relances email et enrichissement CRM pour une prospection B2B régulière et qualifiée.",
			'tw_title'    => "Prospection automatisée B2B : leads & relances",
			'tw_desc'     => "Générez des leads B2B qualifiés grâce à l'automatisation LinkedIn et aux relances email.",
			'canonical'   => eb_url( 'prospection-automatisee' ),
			'article'     => array(
				'headline' => "Prospection automatisée : générez des leads B2B sans y passer vos journées",
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
			'title'       => "RPA : robot logiciel pour vos documents",
			'description' => "Robotic Process Automation, OCR, extraction PDF : confiez le traitement documentaire répétitif à un robot logiciel. Audit gratuit de 45 minutes.",
			'og_title'    => "RPA : un robot logiciel pour vos documents | EB Automatisation",
			'og_desc'     => "Robotic Process Automation, OCR et extraction PDF pour automatiser votre traitement documentaire répétitif.",
			'tw_title'    => "RPA : robot logiciel pour vos documents",
			'tw_desc'     => "Confiez le traitement documentaire répétitif à un robot logiciel grâce à la RPA.",
			'canonical'   => eb_url( 'rpa' ),
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
			'title'       => "RGPD — Vos droits sur vos données | EB Automatisation",
			'description' => "Vos droits RGPD (accès, rectification, effacement, opposition, portabilité) et comment les exercer auprès d'EB Automatisation.",
			'og_title'    => "RGPD — Vos droits sur vos données | EB Automatisation",
			'og_desc'     => "Vos droits RGPD et comment les exercer auprès d'EB Automatisation.",
			'tw_title'    => "RGPD — Vos droits sur vos données | EB Automatisation",
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

	$d   = $data[ $page ];
	$img = eb_og_image( $d );
	?>
<meta name="robots" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:site_name" content="EB Automatisation">
<meta property="og:url" content="<?php echo esc_url( $d['canonical'] ); ?>">
<meta property="og:title" content="<?php echo esc_attr( $d['og_title'] ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $d['og_desc'] ); ?>">
<meta property="og:image" content="<?php echo esc_url( $img ); ?>">
<meta property="og:locale" content="fr_FR">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $d['tw_title'] ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $d['tw_desc'] ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $img ); ?>">
<meta name="description" content="<?php echo esc_attr( $d['description'] ); ?>">
<link rel="canonical" href="<?php echo esc_url( $d['canonical'] ); ?>">
	<?php
	if ( eb_is_pillar_page( $page ) && isset( $d['article'] ) ) {
		include EB_THEME_DIR . '/template-parts/jsonld-article.php';
	}
	if ( eb_is_pillar_page( $page ) && isset( $d['faq'] ) ) {
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
