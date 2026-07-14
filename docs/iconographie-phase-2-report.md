# Étape 2 — Premiumisation de l'iconographie EB Automatisation

Rapport final — 2026-07-14
Suite de `docs/audit-iconographie-eb.md`. Mesures de référence dans
`docs/iconographie-performance-before.md`.

**Statut : conforme au cahier des charges. Les 6 illustrations maîtresses
ne sont PAS intégrées aux templates publics — validation visuelle requise
avant toute intégration (voir §9).**

---

## 1. Ce qui a été fait

| Phase | Contenu | Statut |
|---|---|---|
| A | Mesures de référence (poids, requêtes, LCP statique) sur 6 pages | ✅ |
| B | 9 harmonisations validées dans l'audit (C1, C3, C7, C8, C9, C10, C11, U6, U12) | ✅ |
| C | Bibliothèque de composants EB (helpers PHP + vocabulaire SVG) | ✅ |
| D | 6 illustrations maîtresses SVG, non intégrées | ✅ |
| E | Page de prévisualisation privée | ✅ |
| Validation | php -l, XML, recherche de doublons, captures avant/après, mesures après | ✅ |

---

## 2. Fichiers créés

| Fichier | Contenu | Poids |
|---|---|---|
| `assets/images/illustrations/eb-flow/eb-flow-emails-relances.svg` | Illustration 1 — Emails et relances | 3 486 o (3,40 Ko) |
| `assets/images/illustrations/eb-flow/eb-flow-excel-pdf-ocr.svg` | Illustration 2 — Excel, PDF et OCR | 3 376 o (3,30 Ko) |
| `assets/images/illustrations/eb-flow/eb-flow-crm.svg` | Illustration 3 — CRM et suivi commercial | 3 456 o (3,38 Ko) |
| `assets/images/illustrations/eb-flow/eb-flow-rh.svg` | Illustration 4 — Ressources humaines | 3 627 o (3,54 Ko) |
| `assets/images/illustrations/eb-flow/eb-flow-comptabilite.svg` | Illustration 5 — Comptabilité automatisée | 3 465 o (3,38 Ko) |
| `assets/images/illustrations/eb-flow/eb-flow-reporting.svg` | Illustration 6 — Reporting automatisé | 3 696 o (3,61 Ko) |
| `assets/images/illustrations/eb-flow/README.md` | Conventions des 6 composants (EB Circuit/Node/Data Card/Flow Connector/Validation/Master Illustration Container) | — |
| `docs/iconographie-performance-before.md` | Mesures de référence Phase A | — |
| `docs/eb-visual-system-preview.html` | Page de prévisualisation privée (Phase E) | 26 Ko (page seule, hors SVG référencés) |
| `docs/iconographie-phase-2-report.md` | Ce rapport | — |

**Total des 6 SVG : 20 106 o (19,6 Ko) — moyenne 3,35 Ko/fichier, très en dessous du plafond de 15 Ko et de l'idéal de 10 Ko par fichier.**

Aucun raster, aucun base64, aucune police intégrée, aucun script, aucune animation SVG, aucun filtre de flou dans les 6 fichiers — vérifié par inspection du contenu (voir §7, validation technique).

---

## 3. Fichiers modifiés

| Fichier | Modification | Lignes (git diff) |
|---|---|---|
| `functions.php` | +5 helpers : `eb_tool_chevron()`, `eb_contact_icon()`, `eb_icon()`, `eb_status_step()`, `eb_flow_connector()` | +100 |
| `header.php` | Icônes téléphone/email factorisées via `eb_contact_icon()` (C10) | +4 −4 |
| `front-page.php` | 5× chevron factorisé (C1), 3× `.flow-panel__icon` style inline → classes (U6) | +20 −20 |
| `page-templates/template-apropos.php` | 5× chevron factorisé (C1) | +10 −10 |
| `page-templates/template-audit.php` | Icônes téléphone/email factorisées (C10) | +4 −4 |
| `page-templates/template-pillar-automatisation-comptable.php` | 1× chevron factorisé (C1) | +2 −2 |
| `page-templates/template-pillar-automatisation-crm.php` | 3× chevron factorisé (C1) | +6 −6 |
| `page-templates/template-pillar-automatisation-ia.php` | Coche texte isolée → SVG cohérent (C3, défaut identique trouvé en plus d'Excel) | +2 −2 |
| `page-templates/template-pillar-automatisation-processus.php` | Idem (C3) | +2 −2 |
| `page-templates/template-pillar-automatisation-rh.php` | 4× chevron factorisé (C1) | +8 −8 |
| `page-templates/template-pillar-prospection-automatisee.php` | 3× chevron factorisé (C1) | +6 −6 |
| `page-templates/template-pillar-rpa.php` | 4× chevron factorisé (C1) | +8 −8 |
| `page-templates/template-realisations.php` | 5× chevron (C1), puces mock-dots + états mock-val → classes tokenisées (C7, C8) | +34 −34 |
| `page-templates/template-solutions.php` | 5× chevron (C1), mock-dots/mock-val (C7, C8), trust-strip inline → classes (U12) | +56 −56 |
| `page-templates/template-tool-automatisation-excel.php` | Coche texte isolée → SVG cohérent (C3) | +2 −2 |
| `assets/css/pages/audit.css` | `color:var(--navy)` sur `.audit-success__tile` pour permettre `currentColor` (C10) | +1 |
| `assets/css/pages/home.css` | Tokens sur `.workflow-step__dot` (C9), classe `--duration` sur `.pricing__check` (C11), classes `.flow-panel__icon--*`/`.flow-panel__title--on-dark` (U6) | +15 −0 |
| `assets/css/pages/realisations.css` | Tokens sur `.case-study__mock-dots`/`.case-study__mock-dot`/`.case-study__mock-val` (C7, C8) | +14 |
| `assets/css/pages/solutions.css` | Idem `.solution-row__*` (C7, C8) + `.trust-strip__icon--*` (U12) | +17 −0 |

**Poids CSS ajouté : 47 lignes / ≈ 1,4 Ko brut réparties sur 4 fichiers déjà chargés (aucune nouvelle feuille CSS créée, conformément à la contrainte).**

### Lignes supprimées par factorisation (duplication de code source)

| Composant factorisé | Occurrences | Octets par occurrence économisés | Total |
|---|---:|---:|---:|
| Chevron `.tool-chip__chevron` (C1) | 35 | 209 o | **7 315 o** |
| Icônes téléphone/email (C10) | 4 points d'usage → 1 point d'entrée | — | code dupliqué éliminé, taille marginale (petites icônes) |

Le compte git diff affiche autant d'insertions que de suppressions par fichier (chaque bloc SVG brut remplacé par un appel `<?php echo … ?>` occupe la même ligne), mais le **poids réel du code source HTML généré par ligne chute d'environ 209 octets par occurrence de chevron** — soit 7,3 Ko de balisage SVG dupliqué éliminés du code source des 9 templates concernés.

---

## 4. Résultats avant/après (mesures déterministes locales)

⚠️ **Rappel de méthodologie** (détaillé dans `docs/iconographie-performance-before.md`) : ce sandbox n'a pas d'accès réseau à `eb-automatisation.fr` et Lighthouse mobile y produit des chiffres non représentatifs (bridage CPU/réseau simulé incompatible avec un conteneur partagé — un premier essai a donné un LCP de 14,1 s). Les résultats ci-dessous sont donc des **mesures déterministes locales** (poids de fichiers réels, requêtes, identité de l'élément LCP via l'API navigateur `PerformanceObserver`) — fiables pour détecter une régression introduite par ce chantier, mais **le score Lighthouse mobile de production (90/100, LCP ≈ 2,6 s) reste à reconfirmer par toi sur PageSpeed Insights.**

| Page | CSS+JS+SVG+images gzip/brut avant | après | Δ | Requêtes avant → après | LCP avant | LCP après |
|---|---:|---:|---:|:---:|---|---|
| Accueil | 157,3 Ko | 157,5 Ko | +0,2 Ko | 22 → 22 | `.hero__lead` (P) | `.hero__lead` (P) — inchangé |
| Solutions | 145,8 Ko | 146,1 Ko | +0,3 Ko | 21 → 21 | intro hero-left (P) | intro hero-left (P) — inchangé |
| Réalisations | 147,3 Ko | 147,5 Ko | +0,2 Ko | 21 → 21 | intro hero-left (P) | intro hero-left (P) — inchangé |
| Automatisation Excel | 137,7 Ko | 137,7 Ko | ±0 | 15 → 15 | `.pillar-hero__intro` (P) | `.pillar-hero__intro` (P) — inchangé |
| Automatisation OCR | 137,3 Ko | 137,3 Ko | ±0 | 15 → 15 | `.pillar-hero__intro` (P) | `.pillar-hero__intro` (P) — inchangé |
| Consultant Make | 137,2 Ko | 137,2 Ko | ±0 | 15 → 15 | `.pillar-hero__intro` (P) | `.pillar-hero__intro` (P) — inchangé |

**CLS** : 0 sur les 6 pages avant et après (mesuré via `PerformanceObserver({type:'layout-shift'})`, mobile 375px).

**Analyse** : la variation de poids (+0,2 à +0,3 Ko sur 3 pages, 0 sur les 3 autres) correspond exactement au différentiel attendu du remplacement de la coche texte `✓` par un SVG cohérent (C3, +~140 o × 1 par page concernée) et des quelques octets de classes CSS ajoutées, largement compensé par la réduction de balisage dupliqué en amont. **Aucune requête supplémentaire, aucun changement d'identité de l'élément LCP, CLS toujours nul.** Les 6 illustrations maîtresses (Phase D) ne sont chargées sur aucune page publique — leur poids (19,6 Ko cumulés) n'affecte donc aucune des mesures ci-dessus.

### Captures avant/après

Captures desktop (1440×900) et mobile (375×812) générées pour les 6 pages, avant et après la Phase B, avec `prefers-reduced-motion: reduce` pour neutraliser l'animation du canvas Hero FX (sans quoi deux captures de la même page non modifiée diffèrent déjà de ~16 % à cause du rendu aléatoire des particules — vérifié par un test de contrôle dédié). Diff pixel par pixel après neutralisation : **0,74 % à 2,84 % de pixels différents selon la page**, entièrement expliqué par le caractère aléatoire du placement des particules du canvas d'une page à l'autre (un test de contrôle rechargeant deux fois la page automatisation-ocr *sans aucune modification de code* donne un diff de 2,60 %, quasi identique au diff avant/après réel de cette même page). La page Solutions, moins affectée par ce hasard, donne un diff strictement **nul (image identique au pixel près)** — confirmation directe qu'aucun changement visuel involontaire n'a été introduit.

---

## 5. Anomalies corrigées (les 9 harmonisations)

| # | Défaut | Correction | Visuel changé ? |
|---|---|---|---|
| C1 | Chevron `.tool-chip__chevron` copié-collé 38 fois (35 après exclusion des 3 `.automations__card__chevron`, composant distinct) | Factorisé dans `eb_tool_chevron()` | Non |
| C3 | Coche texte `✓` isolée dans `.pillar-flow__step` alors que les autres étapes utilisent un SVG — trouvé sur **3 pages** (Excel + 2 de plus découvertes pendant l'implémentation : automatisation-ia, automatisation-processus) | Remplacée par le SVG check-circle déjà utilisé ailleurs sur le site | Oui, corrige l'incohérence (c'était le défaut à corriger) |
| C7 | 3 implémentations de la puce "feu tricolore" (`.mockup__dots`, `.solution-row__mock-dots`, `.case-study__mock-dots`) avec couleurs en dur | Couleurs pilotées par `var(--dot-red/yellow/green)` (déjà définis, valeurs identiques) | Non |
| C8 | Couleurs de statut des lignes de mockup (`#5e6f8c`, `#3BA5FF`, `#5BCB8B`, `#C7D2E4`, `#5BB6FF`) codées en dur alors que des tokens identiques existaient déjà (`--muted-on-navy-2`, `--blue-2`, `--green-bright`, `--mono-on-navy`, `--blue-3`) | Classes modificatrices tokenisées | Non |
| C9 | `.workflow-step__dot` en hex dupliqué | `var(--blue-2)` / `var(--green-bright)` | Non |
| C10 | Icônes téléphone/email redessinées 2× (header + audit), couleur figée au lieu de `currentColor` sur la page audit | `eb_contact_icon()`, `currentColor` partout (ajout de `color:var(--navy)` sur `.audit-success__tile`) | Non |
| C11 | `.pricing__check` utilisé pour une horloge (délai de déploiement), nommage trompeur | Classe `.pricing__check--duration` ajoutée, glyphe horloge conservé (contexte = délai, pas confirmation) | Non |
| U6 | `.flow-panel__icon`/`.flow-panel__title` en `style=""` inline | Classes `--navy/--orange/--green` / `--on-dark` | Non |
| U12 | `.trust-strip__icon` en `style=""` inline | Classes `--orange/--green/--neutral` | Non |

---

## 6. Éléments volontairement non modifiés

- **Les 103 icônes déjà en place** ne sont pas migrées vers `eb_icon()`/`eb_status_step()` — seules les 9 harmonisations validées ont été appliquées. Aucun défaut visuel n'a été trouvé ailleurs qui justifierait d'y toucher.
- **Les hex dupliqués hors périmètre des 9 harmonisations** (recherche exhaustive effectuée, voir §7) : présents dans `hero-fx.css`, `layout.css`, `home.css` (sections non listées dans l'audit), `functions.php` (registre `eb_brand_icon()`, pré-existant), `header.php` (`theme-color`), quelques cas dans `template-realisations.php`/`template-solutions.php`. Non corrigés — hors périmètre explicite de cette phase (« appliquer *uniquement* les neuf harmonisations validées »).
- **Les logos officiels** (`eb-icon.png`, `uploads/156c3b91…png`) et **les logos partenaires** (Google, HubSpot, Make, n8n, Notion, Python, Sage) : non touchés.
- **Aucune intégration des 6 illustrations maîtresses** dans les templates publics — c'est une contrainte explicite de cette phase, pas un oubli.

---

## 7. Validation technique

| Vérification | Résultat |
|---|---|
| `php -l` sur tous les fichiers `.php` du thème | ✅ 0 erreur |
| Validité XML des 6 SVG (`xml.dom.minidom.parse`) | ✅ 6/6 valides |
| Recherche de hex dupliquant un token existant | Sweep complet effectué (voir §6) ; tout ce qui relevait des 9 harmonisations est corrigé, le reste est documenté et laissé en l'état |
| Recherche d'anciens blocs SVG censés être factorisés | ✅ 0 occurrence restante du chevron brut ou des icônes téléphone/email brutes hors `functions.php` |
| Rendu des 26 pages (harnais de test local) | ✅ 26/26 rendues sans erreur |
| Liens internes cassés | ✅ 0 |
| H1 unique par page | ✅ 26/26 |
| `<title>` dupliqué entre pages | ✅ 0 |
| Élément LCP (identité) avant/après | ✅ Inchangé sur les 6 pages testées |
| CLS avant/après | ✅ 0 → 0 sur les 6 pages |
| Nouvelle police chargée | ✅ Non |
| Nouvelle bibliothèque JS/CSS installée | ✅ Non |
| Script supplémentaire chargé | ✅ Non |
| Logo officiel redessiné/recoloré | ✅ Non |

---

## 8. Page de prévisualisation

`docs/eb-visual-system-preview.html` — `<meta name="robots" content="noindex,nofollow">`, non liée depuis le site, chargée uniquement en local (chemins relatifs vers `../wordpress/…`, jamais servie par WordPress puisqu'elle est hors du dossier thème). Contient : les 2 logos officiels, la palette, les principes visuels, la bibliothèque de composants (helpers PHP + motifs SVG), les règles de contraste, et les 6 illustrations sur fond clair / fond bleu nuit / largeur mobile avec leur poids affiché.

---

## 9. Recommandations d'intégration pour les 8 pages outils

Rappel de l'audit initial : les 8 pages « outils » (Excel, Outlook, Microsoft 365, Make, n8n, OCR, extraction PDF, facturation) sont les seules du cluster piliers/outils à n'avoir **aucune illustration de hero** — c'est la lacune identifiée en I2. Une fois les 6 illustrations validées visuellement :

1. **Ne pas toutes les intégrer d'un coup.** La mission impose « jamais plus d'une illustration maîtresse au-dessus de la ligne de flottaison par page publique » — chaque page outil ne doit recevoir qu'**une seule** illustration, à sa place naturelle de `.pillar-mock` (déjà utilisée par les 10 pages piliers).
2. **Correspondance suggérée outil → illustration** :
   - `automatisation-excel`, `extraction-pdf`, `automatisation-ocr` → `eb-flow-excel-pdf-ocr.svg`
   - `automatisation-outlook` → `eb-flow-emails-relances.svg`
   - `automatisation-facturation` → `eb-flow-comptabilite.svg`
   - `consultant-make`, `consultant-n8n`, `automatisation-microsoft-365` → pas de correspondance thématique directe parmi les 6 ; soit réutiliser `eb-flow-reporting.svg` (orchestration générique), soit ne pas illustrer ces 3 pages dans ce lot et en créer une 7ᵉ dédiée plus tard si le résultat visuel le justifie.
3. **Revérifier le LCP après intégration**, page par page : le paragraphe d'introduction du hero est actuellement l'élément LCP sur toutes les pages testées (§4) ; une illustration insérée dans le même bloc hero, si elle occupe une surface à l'écran plus grande que ce paragraphe, pourrait devenir le nouvel élément LCP. Si c'est le cas et que ça dégrade le LCP mesuré en production, appliquer la règle de repli de la mission : déplacer l'illustration sous la ligne de flottaison plutôt que de l'intégrer telle quelle dans le hero.
4. **Confirmer le score Lighthouse mobile réel** (PageSpeed Insights, hors sandbox) avant et après intégration, page par page — c'est la seule mesure qui compte en dernier ressort, cf. la réserve méthodologique du §4.

---

*Prochaine étape : validation visuelle des 6 illustrations (via la page de prévisualisation), puis décision explicite avant toute intégration aux pages publiques.*
