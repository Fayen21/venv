# Audit iconographie — EB Automatisation

Date : 2026-07-14
Périmètre : thème enfant `wordpress/generatepress_child` (26 pages/templates), branche `claude/git-eb-v2-access-we2i4y`.
Nature de cette phase : **analyse seule, aucun fichier modifié.**

---

## 1. Résumé exécutif

Le site n'utilise **aucune bibliothèque d'icônes externe** (pas de Font Awesome, Feather, Lucide, etc.) et **aucun emoji** en tant que pictogramme fonctionnel. Tout le vocabulaire visuel est fait maison :

- **103 pictogrammes SVG distincts** (tracé unique), dessinés à la main dans un style cohérent — trait fin (`stroke`, `fill="none"`), `viewBox="0 0 24 24"`, `stroke-width` 1.6–2.2, angles arrondis — répartis en **212 points d'usage** dans les templates PHP.
- **2 logos officiels EB** (favicon/en-tête 256×256 px, footer 278×133 px) — protégés, non retouchés.
- **7 logos partenaires officiels** (Google, HubSpot, Make, n8n, Notion, Python, Sage) au format SVG, plus un système de repli typographique (carré coloré + initiale) pour les marques sans SVG fiable disponible — protégés.
- **10 micro-illustrations SVG** (schémas de hero, 800×212/258 px) couvrant les 10 pages « piliers », mais **absentes des 8 pages « outils »** (Excel, Outlook, Microsoft 365, Make, n8n, OCR, extraction PDF, facturation), dont le hero est donc purement textuel.
- Aucun pictogramme CSS (`content:` sur `::before`/`::after`) : les puces ✓/✕/→/↑ visibles dans les listes et comparatifs sont des **caractères Unicode**, pas des icônes — je les signale mais je ne les recommande pas au remplacement (lisibles, légers, cohérents avec le ton du site).

Le principal gisement d'amélioration n'est pas le remplacement d'icônes (le système est déjà propre et cohérent), mais l'**harmonisation de 3 à 4 doublons de composants** qui réimplémentent la même icône avec des classes CSS et des couleurs différentes selon la page — corrigibles chacun en une seule intervention centralisée. Voir §6.

---

## 2. Méthodologie

Analysé : les 5 fichiers structurels (`header.php`, `footer.php`, `front-page.php`, `functions.php`, `404.php`), les 24 fichiers `page-templates/*.php`, les 4 `template-parts/*.php` (JSON-LD, sans icône), les 6 feuilles `assets/css/pages/*.css` + les 5 feuilles transverses (`components.css`, `layout.css`, `hero-fx.css`, `animations.css`, `tokens.css`, `utilities.css`, `typography.css`), les 4 scripts `assets/js/*.js`, et l'intégralité de `assets/images/` (logos, illustrations, uploads, OG).

**Convention de comptage** : plutôt que de lister 212 fois la même flèche de chevron, chaque ligne du tableau ci-dessous représente un **pictogramme ou composant distinct** ; la colonne « Réutilisations » indique le nombre de points d'usage réels (occurrences brutes trouvées par recherche exhaustive). Les captures d'écran de la mise en page (au-dessus/en dessous de la ligne de flottaison) sont estimées à partir de la structure connue des gabarits (hero = au-dessus ; tout ce qui suit le premier `.pillar-section`/`.section` = en dessous), viewport desktop 1440 px de référence.

Les images OG (`assets/images/og/*.jpg`) sont exclues de l'inventaire : ce sont des visuels de partage social (`og:image`), jamais affichés sur la page elle-même, donc hors périmètre « iconographie du site ».

---

## 3. Système d'icônes en place

| Caractéristique | Valeur |
|---|---|
| Format | SVG inline (`<svg>` directement dans le HTML/PHP), aucun `<use>`/sprite, aucune police d'icônes |
| Grille source | `viewBox="0 0 24 24"` sur la quasi-totalité (les 2 exceptions : illustrations `mock-*.svg` en 800×212/258, logos partenaires en 24×24 également) |
| Style de tracé | `fill="none"`, `stroke="currentColor"`, `stroke-width` 1.6 à 2.2, `stroke-linecap="round"`, `stroke-linejoin="round"` — proche de la famille Feather/Lucide mais dessiné sur-mesure |
| Couleur | Héritée du parent via `currentColor` dans presque tous les cas (donc pilotée par la CSS du conteneur) — **sauf 2 exceptions codées en dur**, voir §6.2 |
| Taille d'affichage | Le plus souvent fixée en `width`/`height` HTML (14 à 26 px selon le contexte) ; les icônes de `.pillar-flow__icon` et `.audit-why__icon` utilisent `width="1em" height="1em"` (taille pilotée par `font-size` du parent) |
| Bibliothèque externe | Aucune — cohérent avec la contrainte « ne pas ajouter de nouvelle bibliothèque d'icônes » |

---

## 4. Logos & marque — à conserver tels quels

| # | Élément | Page(s) | Fichier source | Dimensions | Couleurs | Réutilisations | Position | Action |
|---|---|---|---|---|---|---|---|---|
| L1 | Logo EB (icône carrée, favicon + en-tête) | Toutes (26/26) | `assets/images/eb-icon.png` ; appelé dans `header.php` L.19-20, 43 | 256×256 px (source) ; affiché 51×51 px en-tête, 16/180 px favicon/apple-touch-icon | Couleurs propres au logo (navy/blanc) | 3 usages/page × 26 pages = 78 | Au-dessus de la ligne de flottaison (en-tête) | **1. Conserver** — logo officiel EB, à ne jamais modifier ni redessiner (contrainte absolue) |
| L2 | Logo EB (horizontal, pied de page) | Toutes (26/26) | `assets/images/uploads/156c3b91-a695-438b-b9d7-6828e90ea7ac.png` ; `footer.php` L.14 | 278×133 px (source), affiché 180×77 px | Couleurs propres au logo | 26 (1/page) | En dessous (pied de page) | **1. Conserver** — logo officiel EB, à ne jamais modifier ni redessiner (contrainte absolue) |

---

## 5. Logos partenaires — officiels, protégés

Registre centralisé dans `functions.php` (`eb_brand_icon()` L.79-102, rendu par `eb_tool_icon_html()` L.108-118) : si un SVG officiel local existe, il est utilisé ; sinon, repli typographique (carré coloré + initiale(s)), jamais une reconstitution graphique du logo.

| # | Marque | Fichier SVG | Dimensions | Utilisé sur | Réutilisations | Action |
|---|---|---|---|---|---|---|
| P1 | Google (Workspace) | `assets/images/logos/google.svg` | 24×24 (affiché 20×20 dans `.tool-chip__abbr--logo`) | Solutions, plusieurs piliers/outils via tool-chip | 5 | **5. Conserver** (logo tiers officiel) |
| P2 | HubSpot | `assets/images/logos/hubspot.svg` | 24×24 → 20×20 | CRM et pages liées | 2 | **5. Conserver** |
| P3 | Make | `assets/images/logos/make.svg` | 24×24 → 20×20 | Quasi toutes les pages piliers/outils/solutions | 14 | **5. Conserver** |
| P4 | n8n | `assets/images/logos/n8n.svg` | 24×24 → 20×20 | Idem Make | 14 | **5. Conserver** |
| P5 | Notion | `assets/images/logos/notion.svg` | 24×24 → 20×20 | CRM, RH | 2 | **5. Conserver** |
| P6 | Python | `assets/images/logos/python.svg` | 24×24 → 20×20 | RPA, automatisation IA/tâches | 3 | **5. Conserver** |
| P7 | Sage | `assets/images/logos/sage.svg` | 24×24 → 20×20 | Comptable | 2 | **5. Conserver** |
| P8 | Marques sans SVG (Outlook, Excel, Microsoft 365, Qonto, Pennylane, Pipedrive, Ogust, DocuSign, Salesforce, LinkedIn, Cegid, Quadra) | Repli typographique inline (`<span class="tool-chip__abbr" style="background:…">` + initiale) | 34×34 px, `border-radius:9px` | Selon pertinence par page | ≈ 25 | **1. Conserver** — repli assumé et documenté (commentaire `functions.php` L.72-77), pas un logo recréé |

---

## 6. Composants partagés réutilisables (le levier principal)

C'est ici que se trouve l'essentiel de la valeur d'une intervention groupée : chaque ligne ci-dessous, modifiée une seule fois dans son fichier source, se répercute sur toutes les pages listées.

| # | Composant | Fichier(s) source | Icône(s) | Dimensions | Couleurs | Pages concernées | Réutilisations | Position | Action |
|---|---|---|---|---|---|---|---|---|---|
| C1 | `tool-chip__chevron` (chevron « → » de fin de puce outil cliquable) | Chaque template piliers/outils/solutions/réalisations/à propos/accueil (markup dupliqué, pas de partiel PHP) | Chevron simple `M9 6l6 6-6 6` | 14×14 px | `currentColor` (`var(--muted)`, s'éclaircit en `var(--orange)` au survol) | 20/26 pages | **38** (la plus réutilisée du site) | En dessous (sauf accueil où la 1ʳᵉ grille d'outils est proche du pli) | **2. Harmoniser** — factoriser en un helper PHP unique (`eb_tool_chevron()` ou constante), comme `eb_tool_icon_html()` l'est déjà pour le logo ; actuellement le même bloc SVG est copié-collé littéralement à chaque appel |
| C2 | `pillar-usecase__icon` (icône des cartes « cas d'usage / exemples concrets ») | `page-templates/template-pillar-*.php`, `template-tool-*.php` | Unique par carte (document, loupe, coffre, graphique, dossier…) | 19×19 px dans pastille 42×42 px, `border-radius:11px` | `var(--orange)` sur `var(--orange-soft-bg)` | 17/26 pages (tous les piliers + outils) | 54 | En dessous | **1. Conserver** — cohérent, mais bon candidat de vérification qu'aucune icône n'est dupliquée à tort entre deux cartes de sens différent sur une même page (non trouvé lors de cet audit, à revalider si de nouvelles pages piliers sont ajoutées) |
| C3 | `pillar-flow__icon` (icône des étapes « comment nous intervenons / comment ça s'enchaîne ») | Idem C2 | Unique par étape (boîte de réception, robot/IA, loupe, coche…) | `1em` (× `font-size:20px` parent = 20 px) dans pastille 48×48 px, `border-radius:13px` | `#fff` sur `var(--navy)` | 17/26 pages | 56 | En dessous | **2. Harmoniser** — `template-tool-automatisation-excel.php` L.115 utilise le caractère `✓` en texte brut pour la dernière étape au lieu d'un SVG cohérent avec les 3 autres étapes de la même rangée (seule occurrence de ce type trouvée sur le site) |
| C4 | `pillar-flow__arrow` / `pillar-hub__arrow` / `solution-row__arrow` / `flow-connector__arrow` (flèches « → » entre étapes) | `pillar.css`, `solutions.css`, `home.css` | Caractère `→` (texte, pas SVG) | 16–20 px selon contexte | `var(--orange)` | 20/26 pages | 42+ | En dessous | **1. Conserver** — glyphe texte, léger, cohérent, aucune raison de le convertir en SVG |
| C5 | `icon-tile` (pastille d'icône des cartes de fonctionnalités : accueil, à propos, solutions) | `components.css` L.50-62, appelé dans `front-page.php`, `template-apropos.php`, `template-solutions.php` | 15 glyphes distincts (document, dossier, CRM, grille, éclair, cible, étoile, horloge…) | 22×22 px dans pastille 46×46 px, `border-radius:var(--r-xl)` | `--orange`/`--blue-deep`/`--green` sur fonds teintés assortis (`icon-tile--a/b/green`) | Accueil, Solutions, À propos | 22 (`--a`) + 13 (`--b`) + quelques `--green` | Accueil : 1ʳᵉ occurrence tout juste sous le pli ; le reste en dessous | **1. Conserver** — composant le plus mûr du site, bien nommé, bien réutilisé |
| C6 | `home-expertise__icon` (icône des 3 cartes « Nos expertises », accueil uniquement) | `home.css` L.5, `front-page.php` L.89-101 | 3 glyphes (grille de process, réseau de nœuds, étoile) | 22×22 px dans pastille 52×52 px | `var(--orange)` sur `var(--orange-soft-bg)` | Accueil seulement | 3 | Juste en dessous du hero (première section) | **1. Conserver** — visuellement identique à `icon-tile--a` en pratique (mêmes couleurs/rayon proche) ; fusionner la classe CSS avec `icon-tile` serait un nettoyage de code possible mais sans impact visuel, donc facultatif |
| C7 | **Puces « feu tricolore » de mockup terminal** (3 points rouge/jaune/vert façon macOS, dans les encarts de démo) | **Trois implémentations distinctes de la même icône** : `components.css` L.111-125 (`.mockup__dots`, classes + `var(--dot-red/yellow/green)`), `solutions.css` L.49-56 (`.solution-row__mock-dots`, couleurs hex en `style=` inline), `realisations.css` L.42-49 (`.case-study__mock-dots`, idem) | 3 disques pleins | 9-10 px | `#FF5F57`/`#FEBC2E`/`#28C840` — identiques aux tokens `--dot-red/yellow/green` de `tokens.css` mais **réécrits en dur** dans 15 (`solution-row`) + 9 (`case-study`) endroits au lieu d'utiliser le token ou la classe déjà existante | Solutions (5 cartes), Réalisations (4 cas) | 24 occurrences inline + 2 dans le composant partagé d'origine | En dessous | **2. Harmoniser — priorité haute** : unifier les 3 implémentations sous une seule classe (`.mockup__dots`, déjà correcte) et remplacer les `style="background:#FF5F57"` inline par les tokens `var(--dot-red)` etc. Une seule modification CSS + un remplacement de classe dans 2 templates au lieu de maintenir 3 systèmes parallèles |
| C8 | `*__mock-dot` (point de statut coloré dans chaque ligne de log des mockups) | `solutions.css` L.56, `realisations.css` L.49 | Disque plein | 9 px | Couleurs hex inline variables (`#5e6f8c`, `#3BA5FF`, `#5BCB8B`) au lieu de `var(--muted-on-navy-2)`, `var(--blue-deep)`/`var(--green-bright)` | Solutions (15), Réalisations (9) | 24 | En dessous | **2. Harmoniser** — même remarque que C7 : remplacer les hex codés en dur par les tokens équivalents déjà définis dans `tokens.css`, pour que toute évolution de palette se fasse en un seul endroit |
| C9 | `workflow-step__dot` (point de statut pulsant, démo interactive de l'accueil) | `home.css` L.90-95 | Disque plein, animé (`ebpulse`) à l'état actif | ~8 px | `#3BA5FF` actif / `#5BCB8B` terminé — codés en dur alors que `#5BCB8B` correspond exactement à `var(--green-bright)` déjà utilisé ailleurs | Accueil uniquement | 3 (1 par étape de la démo) | **Au-dessus de la ligne de flottaison** (widget hero) | **2. Harmoniser** — remplacer `#5BCB8B` par `var(--green-bright)` ; `#3BA5FF` n'a pas de token dédié, à envisager si la teinte est réutilisée ailleurs |
| C10 | Icônes téléphone/email (barre du haut + tuiles de succès du formulaire audit) | `header.php` L.34-35 (`currentColor`, `stroke-width:2`/`1.8`) vs `template-audit.php` L.98/102 (`stroke="#0C1E3C"` codé en dur, `stroke-width:1.6`) | Combiné/enveloppe | 14×14 (en-tête) vs 22×22 (audit) | `currentColor` en-tête / `#0C1E3C` (= `var(--navy)`) en dur dans `template-audit.php` | En-tête (26/26 pages) + page Audit (succès de formulaire) | 2 + 2 | En-tête : au-dessus ; tuiles audit : en dessous (état post-envoi, masqué par défaut) | **2. Harmoniser** — même paire d'icônes redessinée deux fois avec des réglages différents (couleur en dur au lieu de `currentColor`, épaisseur de trait différente) ; factoriser dans un helper PHP partagé réglerait aussi C1 |
| C11 | `pricing__check` (puce de la liste de fonctionnalités, bloc Tarifs, accueil) | `home.css`, `front-page.php` L.565/582 | **Nommé "check" mais dessine une horloge** (`circle` + aiguilles), pas une coche | 13×13 px | `currentColor` | Accueil (bloc Tarifs, 2 forfaits) | 15 | En dessous | **2. Harmoniser** — incohérence de nommage/sémantique : soit renommer la classe (`pricing__bullet`), soit utiliser une vraie coche si l'intention était de confirmer une inclusion (à trancher avec vous — actuellement l'icône horloge n'est pas fausse en soi, juste mal nommée) |
| C12 | `solution-row__gain-icon` (pastille « gain » dans les 5 lignes de solutions détaillées) | `solutions.css` L.44 | Caractère `↑` (texte, pas SVG) | 16 px dans pastille 30×30 px | `#fff` sur `var(--orange)` | Solutions | 5 | En dessous | **1. Conserver** — glyphe texte cohérent avec C4, léger |

---

## 7. Éléments spécifiques à une page (non partagés)

| # | Page | Section | Fichier | Icône | Dimensions | Couleurs | Position | Action |
|---|---|---|---|---|---|---|---|---|
| U1 | Accueil | Sélecteur de scénario (`workflow-tabs__btn`), widget démo hero | `front-page.php` L.31-35 | 5 icônes (facture, RH, email, PDF, CRM) | 15×15 px | `currentColor` | **Au-dessus de la ligne de flottaison** | **1. Conserver** |
| U2 | Accueil | Icônes d'étape de la démo en direct (générées en JS) | `assets/js/home.js` L.7-18 (`ICON_PATHS`) | 8 icônes (search, ai, send, check, folder, inbox, document, mail) injectées dynamiquement selon le scénario actif | 18×18 px | `currentColor` | **Au-dessus** | **1. Conserver** — bon exemple de mutualisation (un seul dictionnaire JS réutilisé pour 4 scénarios × 3 étapes) |
| U3 | Accueil | Cartes « Ce que j'automatise » (icon-tile + chevron `automations__card__chevron`) | `front-page.php` L.127-165 | 4 paires icône+chevron | 22×22 (icône) / 16×16 (chevron) | `--orange`/`--blue-deep` | Juste en dessous du hero | **1. Conserver** |
| U4 | Accueil | Bandeau « Vous gardez vos outils » — badge « Aucune migration » | `front-page.php` L.239 | Icône coffre-fort (identique à C2/C5) | 13×13 px | `var(--green)` sur `var(--green-bg)` | En dessous | **1. Conserver** |
| U5 | Accueil | Avant/après rapprochement bancaire — icônes horloge (×2) et alerte (×1) | `front-page.php` L.374, 381, 399 | Horloge, triangle d'alerte | 12–14 px | `currentColor` | En dessous | **1. Conserver** |
| U6 | Accueil | Flux logiciel visible (email → IA → CRM), 3 pastilles d'en-tête de panneau | `front-page.php` L.430-453 | Enveloppe, robot/IA, CRM | 14×14 px dans pastille 24×24 px | `#fff` sur `var(--navy)`/`var(--orange)`/`var(--green)` (couleurs en `style=` inline, pas de classe dédiée) | En dessous | **2. Harmoniser** — les couleurs de fond sont posées en `style` inline plutôt que via des classes modificatrices comme `icon-tile--a/b`, ce qui duplique la logique de teinte déjà standardisée ailleurs |
| U7 | Accueil | « Pourquoi automatiser maintenant » + « Pourquoi moi » (icon-tile réutilisés) | `front-page.php` L.215-227, 719-729 | Horloge, alerte, étoile, graphique, coffre | 22×22 px | `--orange`/`--blue-deep` | En dessous | **1. Conserver** |
| U8 | Réalisations | `case-flow__icon` (étapes du cas n°1, onboarding RH) | `template-realisations.php` L.41-47 | 4 icônes (coche, document, cadenas/clé, dossier) | `1em` dans pastille 34×34 px | `#fff` sur `var(--navy)` | En dessous (1er cas déjà sous le hero) | **1. Conserver** |
| U9 | Réalisations | `case-study__tool-note .icon` (note « réalisé avec… ») | `template-realisations.php` L.52 | Icône clé à outils, unique sur le site | 1em | `currentColor` | En dessous | **1. Conserver** |
| U10 | Réalisations | `control-card__icon` (bloc « vous gardez le contrôle ») | `template-realisations.php` L.267-279 | 4 icônes (coffre, cadenas, document, étoile) | 20×20 px dans pastille 44×44 px | `var(--green)` sur `var(--green-bg)` | En dessous | **1. Conserver** |
| U11 | Solutions | `pillar-hub__icon` (hub des 3 piliers) | `template-solutions.php` L.59-96 | 3 icônes (grille process, réseau, étoile) — identiques à `home-expertise__icon` (C6) | 22×22 px dans pastille 52×52 px | `var(--orange)` sur `var(--orange-soft-bg)` | Juste sous le hero | **1. Conserver** — bonne réutilisation intentionnelle des mêmes glyphes qu'à l'accueil pour renforcer la reconnaissance |
| U12 | Solutions | `trust-strip__icon` (bandeau de réassurance) | `template-solutions.php` L.161-169 | 3 icônes (radar/cible, coche, coffre) | 17-19 px dans pastille 38×38 px | Couleurs variées en `style` inline (`--orange-soft-bg`/`--green-bg`/`#EEF1F7`) | En dessous | **2. Harmoniser** — même remède que U6 (remplacer le `style=` inline par des classes modificatrices) |
| U13 | Solutions | `solution-row__badge` (numéro 01-05 des solutions détaillées) | `template-solutions.php` L.179, 217, 255, 293, 331 | Pas une icône — un numéro texte dans une pastille colorée | 44×44 px | 5 teintes distinctes en `style` inline | En dessous | **1. Conserver** — numérotation, hors périmètre icône |
| U14 | À propos | Photo portrait | `template-apropos.php` L.31 | Photo réelle (pas un pictogramme) | 800×800 px (source), affichée en cercle | — | En dessous (section « qui je suis ») | **1. Conserver** — photo, hors périmètre de cet audit iconographie mais mentionnée pour exhaustivité |
| U15 | À propos | `rgpd-card__icon` (encart hébergement/RGPD) | `template-apropos.php` L.166 | Icône coffre-fort, identique à C2/C5/U4 | 24×24 px | `currentColor` | En dessous | **1. Conserver** |
| U16 | Audit | `audit-point__check` (4 points « comment ça se passe ») | `template-audit.php` L.21-24 | Caractère `✓` (texte, pas SVG) dans pastille ronde `var(--green-bg)` | 24×24 px pastille | `var(--green)` | **Au-dessus** (hero du formulaire) | **1. Conserver** |
| U17 | Audit | `audit-success__icon` (grosse coche de confirmation) | `template-audit.php` L.86 | Coche épaisse | 26×26 px | `currentColor` | En dessous, **masqué par défaut** (`hidden`, n'apparaît qu'après soumission du formulaire) | **1. Conserver** |
| U18 | Audit | `calendly-placeholder__icon` (calendrier) | `template-audit.php` L.91 | Calendrier | 26×26 px | `currentColor` | En dessous, masqué par défaut | **1. Conserver** |

*(Les tuiles téléphone/email de la page de succès de l'audit sont l'un des deux points d'usage déjà comptabilisés dans le composant partagé **C10** ci-dessus — non recomptées ici pour éviter un doublon.)*

---

## 8. Illustrations

| # | Élément | Pages | Fichier | Dimensions | Position | Action |
|---|---|---|---|---|---|---|
| I1 | Schéma de hero (mockup métier) | 10 pages piliers (Agence IA, Automatisation entreprise/IA/processus/tâches/comptable/RH/CRM, Prospection automatisée, RPA) | `assets/images/illustrations/mock-*.svg` (10 fichiers) | 800×212 px (800×258 pour « automatisation-entreprise ») | **Au-dessus de la ligne de flottaison** (immédiatement sous le H1/CTA du hero) | **1. Conserver** |
| I2 | *(absence)* — les 8 pages « outils » n'ont aucune illustration de hero | Excel, Outlook, Microsoft 365, Make, n8n, OCR, extraction PDF, facturation | — | — | Au-dessus (zone actuellement vide, seulement texte) | **4. Remplacer par une micro-illustration EB** — étendre le système I1 (déjà en place, même gabarit `.pillar-mock`, même format 800×212) aux 8 pages outils pour une cohérence visuelle totale du cluster piliers + outils. C'est un ajout, pas un remplacement à proprement parler, mais c'est la seule vraie lacune illustrative du site |

---

## 9. Tableau récapitulatif

Chaque ligne des tableaux §4 à §8 compte pour un élément (L1-L2, P1-P8, C1-C12, U1-U18, I1-I2 — la mention de C10 sous « Audit » au §7 n'est pas recomptée, voir note). Total : **2 + 8 + 12 + 18 + 2 = 42 éléments.**

| Indicateur | Valeur |
|---|---|
| **Nombre total d'éléments recensés** (lignes d'inventaire §4 à §8) | **42** |
| dont **pictogrammes/logos/illustrations distincts** sous-jacents | 103 tracés SVG uniques + 2 logos EB + 7 logos partenaires + 10 illustrations |
| **Points d'usage bruts** (occurrences dans le code) | 212 `<svg>` inline + 78 usages du logo EB + divers glyphes texte (✓/✕/→/↑) |
| **1. À conserver** | **24** (L1, L2 ; C2, C4, C5, C6, C12 ; U1-U5, U7-U11, U13-U18 ; I1) |
| **2. À harmoniser** | **9** (C1, C3, C7, C8, C9, C10, C11 ; U6, U12) |
| **3. À remplacer par une icône EB** | **0** — aucun cas trouvé ; le système actuel n'utilise ni bibliothèque tierce ni emoji à remplacer |
| **4. À remplacer par une micro-illustration EB** | **1** (I2 — lacune sur les 8 pages outils, ajout recommandé plutôt que remplacement à proprement parler) |
| **5. À conserver comme logo tiers officiel** | **8** (P1 à P8) |
| Total de contrôle | 24 + 9 + 0 + 1 + 8 = **42** ✓ |

### Composants partagés à corriger en une seule intervention (par ordre d'impact)

| Priorité | Composant | Fichiers à modifier | Pages impactées |
|---|---|---|---|
| Haute | C7 — Puces « feu tricolore » (3 implémentations → 1) | `components.css`, `solutions.css`, `realisations.css`, `template-solutions.php`, `template-realisations.php` | 2 pages, 9 encarts |
| Haute | C1 — Chevron `tool-chip__chevron` factorisé en helper PHP | `functions.php` (nouveau helper), tous les templates l'utilisant | 20 pages |
| Moyenne | C8 — Points de statut des mockups (hex → tokens) | `solutions.css`, `realisations.css` | 2 pages |
| Moyenne | C10 — Icônes téléphone/email factorisées | `header.php`, `template-audit.php`, éventuellement `functions.php` | En-tête = 26 pages ; tuiles succès = page Audit |
| Basse | C9 — Point de statut pulsant (hex → `var(--green-bright)`) | `home.css` | 1 page |
| Basse | C11 — Renommage `pricing__check` (icône horloge, pas coche) | `home.css` (renommage classe uniquement) | 1 page |
| Basse | U6, U12 — Couleurs de fond d'icône en `style` inline → classes modificatrices | `front-page.php`, `template-solutions.php`, CSS associé | 2 pages |

---

*Aucun fichier du thème n'a été modifié pendant cette analyse. Les recommandations ci-dessus sont prêtes à être priorisées pour une phase d'intervention séparée.*
