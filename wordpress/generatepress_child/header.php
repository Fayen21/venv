<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header partagé — identique au bloc <header> présent à l'identique sur les
 * 10 pages du site source. Navigation en dur (pas de wp_nav_menu()), comme
 * demandé : les liens et leur ordre ne doivent pas changer.
 */
$eb_current = eb_current_page_key();
$eb_is_pillar = eb_is_pillar_page( $eb_current );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?php echo esc_url( eb_asset( 'images/eb-icon.png' ) ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="techno-bar"></div>
<div class="topbar">
  <div class="topbar__inner">
    <div class="topbar__label">Consultant indépendant en automatisation &amp; IA · TPE-PME françaises</div>
    <div class="topbar__links">
      <a href="tel:+33695204127"><span>☎</span> 06 95 20 41 27</a>
      <a href="mailto:contact@eb-automatisation.fr"><span>✉</span> contact@eb-automatisation.fr</a>
    </div>
  </div>
</div>

<header class="site-header">
  <div class="site-header__row">
    <a href="<?php echo esc_url( eb_url( 'index' ) ); ?>" class="brand" aria-label="EB Automatisation — retour à l'accueil">
      <img src="<?php echo esc_url( eb_asset( 'images/eb-icon.png' ) ); ?>" alt="EB Automatisation" width="51" height="51">
      <span class="brand__name">EB Automatisation</span>
    </a>
    <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false" data-menu-toggle>
      <span class="menu-toggle__bar"></span>
      <span class="menu-toggle__bar"></span>
      <span class="menu-toggle__bar"></span>
    </button>
    <nav class="site-nav">
      <a href="<?php echo esc_url( eb_url( 'index' ) ); ?>" class="site-nav__link<?php echo ( 'index' === $eb_current ) ? ' is-active' : ''; ?>">Accueil</a>
      <a href="<?php echo esc_url( eb_url( 'solutions' ) ); ?>" class="site-nav__link<?php echo ( 'solutions' === $eb_current ) ? ' is-active' : ''; ?>">Solutions</a>
      <a href="<?php echo esc_url( eb_url( 'realisations' ) ); ?>" class="site-nav__link<?php echo ( 'realisations' === $eb_current ) ? ' is-active' : ''; ?>">Réalisations</a>
      <a href="<?php echo esc_url( eb_url( 'apropos' ) ); ?>" class="site-nav__link<?php echo ( 'apropos' === $eb_current ) ? ' is-active' : ''; ?>">À propos</a>
      <div class="nav-dropdown" data-dropdown>
        <button class="nav-dropdown__trigger<?php echo $eb_is_pillar ? ' is-active' : ''; ?>" type="button" aria-haspopup="true" aria-expanded="false" data-dropdown-trigger>
          Expertises <span class="nav-dropdown__arrow">▾</span>
        </button>
        <div class="nav-dropdown__panel" data-dropdown-panel hidden>
          <a class="nav-dropdown__item" href="<?php echo esc_url( eb_url( 'automatisation-ia' ) ); ?>">
            <span class="nav-dropdown__item-label">Automatisation IA</span>
            <span class="nav-dropdown__item-desc">Ce que l'IA change concrètement</span>
          </a>
          <a class="nav-dropdown__item" href="<?php echo esc_url( eb_url( 'agence-ia' ) ); ?>">
            <span class="nav-dropdown__item-label">Agence IA vs consultant indépendant</span>
            <span class="nav-dropdown__item-desc">Comprendre les options</span>
          </a>
          <a class="nav-dropdown__item" href="<?php echo esc_url( eb_url( 'automatisation-entreprise' ) ); ?>">
            <span class="nav-dropdown__item-label">Automatisation entreprise</span>
            <span class="nav-dropdown__item-desc">Par où commencer</span>
          </a>
          <a class="nav-dropdown__item" href="<?php echo esc_url( eb_url( 'automatisation-processus' ) ); ?>">
            <span class="nav-dropdown__item-label">Automatisation des processus</span>
            <span class="nav-dropdown__item-desc">Cartographier et orchestrer</span>
          </a>
          <a class="nav-dropdown__item" href="<?php echo esc_url( eb_url( 'automatisation-taches' ) ); ?>">
            <span class="nav-dropdown__item-label">Automatisation des tâches</span>
            <span class="nav-dropdown__item-desc">Les premiers gains rapides</span>
          </a>
        </div>
      </div>
      <a href="<?php echo esc_url( eb_url( 'audit' ) ); ?>" class="nav-cta">Audit gratuit <span>→</span></a>
    </nav>
  </div>
</header>
