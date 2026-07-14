# Mesures de référence — avant premiumisation de l'iconographie

Date : 2026-07-14
État du code mesuré : `HEAD` de `claude/git-eb-v2-access-we2i4y` avant toute modification de l'étape 2.

---

## ⚠️ Note de méthodologie (lire avant les chiffres)

Cet environnement d'exécution n'a **pas d'accès réseau à `eb-automatisation.fr`** (bloqué par la politique réseau du sandbox — vérifié via le point de contrôle du proxy). Un premier essai de Lighthouse mobile local a produit un LCP de 14,1 s et un score de performance nul : c'est un artefact de la simulation de bridage CPU/réseau de Lighthouse dans un conteneur partagé/virtualisé, pas une mesure réelle. Faire tourner Lighthouse dans ce sandbox donnerait des chiffres non représentatifs et non comparables à tes scores réels (mobile 90/100, LCP ≈ 2,6 s sur PageSpeed Insights).

**Décision validée avec toi** : je mesure donc ce qui est vérifiable de façon fiable et déterministe, indépendamment du réseau/CPU du sandbox :

- poids exact des fichiers CSS/JS chargés par page (taille brute + gzip, calculée sur le contenu réel des fichiers du thème) ;
- poids des SVG inline présents dans le HTML rendu ;
- poids des images/logos référencés par page ;
- nombre de requêtes (estimé : document + CSS + JS + images + 2 fichiers de police) ;
- **élément LCP réel**, identifié via l'API navigateur `PerformanceObserver({type:'largest-contentful-paint'})` dans Chromium — cette identification ne dépend pas de la vitesse réseau/CPU simulée, seulement du DOM et de la mise en page, donc elle reste fiable même dans ce sandbox.

Le score Lighthouse mobile de 90/100 et le LCP ≈ 2,6 s **restent ta référence de production**. Ils devront être reconfirmés par toi (PageSpeed Insights réel) après livraison — je ne peux pas les certifier moi-même depuis cet environnement. Ce que je *peux* garantir, et que je vérifierai en Phase de validation, c'est que **rien de ce que j'ajoute n'augmente le poids ou le nombre de requêtes de façon significative**, et que **l'identité de l'élément LCP ne change pas**.

Rendu via le harnais de test local (PHP intégré → HTML statique servi sur `localhost:8900`, assets réels du thème synchronisés) utilisé tout au long de ce projet pour la vérification visuelle.

---

## 1. Poids par page (6 pages testées)

| Page | CSS (gzip) | JS (gzip) | HTML (gzip) | SVG inline (brut) | Images/logos (brut) | Total transféré ≈ | Requêtes ≈ |
|---|---:|---:|---:|---:|---:|---:|---:|
| Accueil (`index`) | 17,5 Ko | 9,6 Ko | 15,0 Ko | 11,6 Ko (46 SVG) | 115,3 Ko | **157,3 Ko** | 22 |
| Solutions | 13,2 Ko | 6,7 Ko | 10,6 Ko | 4,1 Ko (16 SVG) | 115,3 Ko | **145,8 Ko** | 21 |
| Réalisations | 13,1 Ko | 6,7 Ko | 11,1 Ko | 3,7 Ko (16 SVG) | 116,3 Ko | **147,3 Ko** | 21 |
| Automatisation Excel | 13,8 Ko | 6,7 Ko | 7,9 Ko | 2,8 Ko (8 SVG) | 109,3 Ko | **137,7 Ko** | 15 |
| Automatisation OCR | 13,8 Ko | 6,7 Ko | 7,5 Ko | 2,2 Ko (9 SVG) | 109,3 Ko | **137,3 Ko** | 15 |
| Consultant Make | 13,8 Ko | 6,7 Ko | 7,4 Ko | 3,0 Ko (9 SVG) | 109,3 Ko | **137,2 Ko** | 15 |

*CSS/JS = taille gzip des fichiers réellement chargés pour cette page (voir détail §2). Images/logos = taille brute (SVG des logos partenaires déjà compacts, PNG non recompressés côté serveur dans ce test). Google Fonts (externe, chargé en asynchrone via `media=print` → `all`, non bloquant) n'est pas comptée dans ce total car son poids ne dépend pas de ce chantier.*

## 2. Détail des fichiers chargés par page

| Page | Feuilles CSS (dans l'ordre) | Scripts JS |
|---|---|---|
| Accueil | tokens, layout, typography, components, animations, utilities, **hero-fx**, pages/**home** | main, **home**, hero-fx |
| Solutions | tokens, layout, typography, components, animations, utilities, **hero-fx**, pages/**solutions** | main, hero-fx |
| Réalisations | idem + pages/**realisations** | main, hero-fx |
| Automatisation Excel | idem + pages/**pillar** | main, hero-fx |
| Automatisation OCR | idem + pages/**pillar** | main, hero-fx |
| Consultant Make | idem + pages/**pillar** | main, hero-fx |

Les 3 pages « outils » (Excel, OCR, Make) partagent exactement le même jeu de fichiers CSS/JS (`pillar.css`), d'où leurs poids quasi identiques.

## 3. Élément LCP identifié (par page, mobile 375×812)

| Page | Élément LCP réel | Classe | Aperçu du texte |
|---|---|---|---|
| Accueil | `<p>` | `.hero__lead` | « J'aide les TPE-PME à connecter leurs outils existants — emai… » |
| Solutions | `<p>` | (intro hero-left) | « Je connecte les outils que vous utilisez déjà (Outlook, Exce… » |
| Réalisations | `<p>` | (intro hero-left) | « Exemples concrets d'automatisations réalisées ou représentat… » |
| Automatisation Excel | `<p>` | `.pillar-hero__intro` | « Excel reste, de loin, l'outil le plus utilisé dans la gestio… » |
| Automatisation OCR | `<p>` | `.pillar-hero__intro` | « L'OCR (reconnaissance optique de caractères) permet à un ord… » |
| Consultant Make | `<p>` | `.pillar-hero__intro` | « Make (anciennement Integromat) est l'un des outils no-code l… » |

**Constat important pour la suite de la mission** : sur les 6 pages testées, l'élément LCP est systématiquement le **paragraphe d'introduction du hero** (texte), jamais une image. Ni le canvas Hero FX (`position:absolute`, peint après le texte dans l'ordre DOM et sans contenu photographique), ni le mockup illustratif des pages piliers (`.pillar-mock`, situé *après* le bloc texte dans le flux) ne sont l'élément LCP actuel. C'est cohérent avec la contrainte de la mission : tant qu'une nouvelle illustration maîtresse n'est pas placée *avant* ou *à la place* de ce paragraphe dans le DOM, ou ne devient pas visuellement plus grande que lui au premier paint, elle ne devrait pas prendre sa place de LCP. C'est précisément pourquoi les 6 illustrations créées en Phase D ne sont volontairement pas intégrées aux templates publics à ce stade.

## 4. Captures d'écran (référence avant modification)

Desktop (1440×900) et mobile (375×812), 6 pages :

`before-index-desktop.png` / `before-index-mobile.png`
`before-solutions-desktop.png` / `before-solutions-mobile.png`
`before-realisations-desktop.png` / `before-realisations-mobile.png`
`before-automatisation-excel-desktop.png` / `before-automatisation-excel-mobile.png`
`before-automatisation-ocr-desktop.png` / `before-automatisation-ocr-mobile.png`
`before-consultant-make-desktop.png` / `before-consultant-make-mobile.png`

*(fichiers conservés dans le répertoire de travail de la session pour comparaison directe avec les captures « after » du rapport final ; non committées dans le dépôt pour ne pas alourdir l'historique git avec des binaires de travail — voir `docs/iconographie-phase-2-report.md` pour la comparaison écrite avant/après)*

## 5. CLS et INP/TBT

Le CLS mesuré via `PerformanceObserver({type:'layout-shift'})` sur les 6 pages, viewport mobile, après chargement complet + 800 ms d'attente : **0** sur les 6 pages (aucun décalage de mise en page détecté à l'état actuel). C'est la valeur de référence à ne pas dépasser.

INP/TBT ne sont pas mesurables de façon fiable sans un vrai profil d'interaction utilisateur et sans les mêmes réserves de bridage CPU que Lighthouse ; aucun changement de cette phase n'ajoute de JavaScript (contrainte absolue de la mission), donc le risque de régression sur cet indicateur est structurellement nul et ne justifie pas une mesure bruitée.

---

*Prochaine étape : Phase B (harmonisation), Phase C (bibliothèque de composants), Phase D (6 illustrations, non intégrées), Phase E (page de prévisualisation privée). Les mêmes mesures seront reproduites à l'identique après modification pour établir le delta dans `docs/iconographie-phase-2-report.md`.*
