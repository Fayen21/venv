# Vérification du logo carré officiel — compte rendu

Date : 2026-07-15
Suite à la demande de correction de l'identité visuelle avant validation de l'étape 2.

---

## ADDENDUM (même journée) — le fichier a finalement été remplacé, un vrai bug a été trouvé

La conclusion « aucun remplacement nécessaire » ci-dessous (§1-7, analyse initiale) **s'est révélée incorrecte**. L'utilisateur a maintenu son diagnostic (« si le fond est blanc tout va bien, mais sinon ça va pas »), avec raison. Nouvelle investigation, ciblée cette fois sur le canal alpha plutôt que sur un rendu composité sur blanc :

- **Cause identifiée** : dans `eb-icon.png` (version en place jusqu'ici), les pixels blancs du E et une partie des pixels bleus du B/circuits étaient stockés avec un canal alpha proche de 0 (valeurs 1 à 13 sur 255) au lieu d'être opaques. Sur fond blanc, un pixel blanc quasi-transparent composite avec le blanc et reste blanc — le défaut est invisible. Sur tout autre fond (le bleu nuit de l'en-tête, une carte de démonstration, etc.), ce même pixel laisse transparaître le fond et le E apparaît sombre/navy au lieu de blanc. C'est exactement le symptôme signalé.
- **Preuve** : sur l'ancien fichier, aucun pixel blanc (255,255,255) n'apparaît dans la liste des couleurs pleinement opaques (alpha=255) de toute l'image. Sur le fichier de référence fourni par l'utilisateur, (255,255,255) opaque est la couleur la plus fréquente de l'image (5 728 pixels).
- **Pourquoi l'analyse initiale (§1-7) n'a pas vu le problème** : elle comparait les deux fichiers après composition sur un fond **blanc**, ce qui masque exactement ce défaut par construction. Erreur de méthode reconnue — la bonne vérification consistait à composer sur un fond non blanc (ou à inspecter le canal alpha directement), ce qui a été fait dans cette seconde passe.

**Action corrective effectuée :**
- `assets/images/eb-icon.png` remplacé par le fichier officiel fourni par l'utilisateur (chemin conservé à l'identique).
- Optimisation PNG sans perte (`optipng -o7`) — vérifié pixel-perfect identique à la source avant/après compression (`ImageChops.difference` → bbox `None`).
- **Poids : 65 274 o → 54 627 o (-16,3 %)** — la version corrigée est aussi plus légère, malgré une image visuellement plus riche (contour clair, blanc réellement opaque).
- Vérifié sur les 5 emplacements listés au §4 (favicon, apple-touch-icon, en-tête desktop/mobile, 2× JSON-LD) — tous pointent vers le même fichier, aucune référence de code à modifier.
- Vérifié spécifiquement sur fond bleu nuit (le cas qui révélait le bug) : E parfaitement blanc et opaque, capture à l'appui.
- Aucune régression de poids transféré (fichier plus léger), aucun changement d'élément LCP (aucune page publique dont la structure a changé).

Le reste de ce document (§1-7 ci-dessous) est conservé tel quel pour la traçabilité de la première investigation, mais sa conclusion (« conservé à l'identique ») est **remplacée par ce qui précède**.

---

## 1. Contexte

Une première capture d'écran envoyée par l'utilisateur laissait penser que le E du logo carré apparaissait en bleu foncé/navy au lieu de blanc. Investigation demandée : comparer le fichier officiel fourni avec `assets/images/eb-icon.png`, et remplacer si non strictement identique.

## 2. Méthode

Deux fichiers de référence ont été fournis successivement par l'utilisateur au fil de l'échange :

1. Une première image (255×253, opaque, sans transparence) — écartée après analyse : c'était un aperçu/mockup avec fond gris clair plein, pas le fichier source détouré. Remplacer par ce fichier tel quel aurait introduit un carré gris visible dans l'en-tête (régression visuelle documentée et signalée avant toute action).
2. Une seconde image (256×256, transparence réelle, alpha 0–255) — **retenue comme référence officielle**, extraite de l'historique de session (pièce jointe convertie en fichier local pour comparaison programmatique).

Comparaison pixel par pixel entre cette seconde référence et `assets/images/eb-icon.png` :

| Vérification | Résultat |
|---|---|
| Dimensions | 256×256 des deux côtés — identiques |
| Alignement (recherche du meilleur décalage dx/dy sur le canal alpha, ±8px) | Décalage optimal = (0, 0) — déjà parfaitement alignées, aucun décalage |
| Delta moyen par canal (pixels différents uniquement) | 3 / 255 — imperceptible |
| Pixels avec delta clairement visible (&gt;30/255 sur au moins un canal) | 1,23 % du total |
| Inspection visuelle à fort zoom (crop 100×100 sur le E, agrandi ×4) | E blanc, forme et position identiques dans les deux fichiers |

**Conclusion technique** : les écarts mesurés (concentrés sur les contours anti-aliasés des traits fins) sont cohérents avec une recompression lors du transfert de l'image dans la conversation (ré-encodage PNG lors de l'upload), pas avec une différence réelle de dessin, de couleur ou de proportions. Le fichier actuellement dans le dépôt correspond déjà au logo officiel : **E blanc, B bleu en dégradé, circuits bleus, fond bleu nuit, contour clair, angles fortement arrondis.**

## 3. Décision

- **Ancien fichier détecté** : `assets/images/eb-icon.png` (256×256, RGBA, transparence réelle).
- **Fichier remplacé ou conservé** : **conservé à l'identique**. Aucun remplacement, car le fichier en place est déjà strictement conforme à la référence officielle fournie (voir §2). Remplacer par une version reçue via upload de conversation aurait introduit un risque de perte de qualité (recompression) sans aucun bénéfice, ce qui aurait été contraire à la consigne « ne génère aucune variante à partir d'une approximation ».
- **Poids avant/après** : inchangé — 65 274 o (aucune modification de fichier).

## 4. Emplacements vérifiés

| Emplacement | Fichier / sélecteur | Résultat |
|---|---|---|
| En-tête desktop | `header.php` L.43, `.brand img` (`layout.css` L.104-108) | ✅ E blanc, 51×51 px, ratio 1:1 non déformé (source 256×256) |
| En-tête mobile | Idem, `.brand img` en 40×40 px (`layout.css` L.513) | ✅ E blanc, ratio 1:1 conservé |
| Favicon / Apple Touch Icon | `header.php` L.19-20, `<link rel="icon">` et `<link rel="apple-touch-icon">` — même fichier `eb-icon.png` | ✅ Référence inchangée, fichier conforme |
| Données structurées JSON-LD | `template-parts/jsonld-organization.php` L.11 et `template-parts/jsonld-article.php` L.14 — `$logo = eb_asset('images/eb-icon.png')`, utilisé comme `logo`/`image` du schéma Organization et Article sur toutes les pages | ✅ Même fichier inchangé et conforme, aucune correction nécessaire |
| Autres métadonnées / balises sociales | Recherche exhaustive (`grep -rn "eb-icon"` sur tout le thème) — les 5 points d'usage ci-dessus sont les seuls dans le projet (favicon, apple-touch-icon, en-tête, 2× JSON-LD) | ✅ Rien d'autre à vérifier |
| Page de prévisualisation | `docs/eb-visual-system-preview.html`, section « Logos officiels » | ✅ Mise à jour : mention ajoutée, contour de carte plus contrasté pour éviter toute confusion visuelle future, note de vérification datée |
| 6 illustrations maîtresses | `assets/images/illustrations/eb-flow/*.svg` | ✅ Vérifié : aucune reconstitution du logo, aucun monogramme E/B, aucune lettre. Les 3 glyphes utilisés au centre des illustrations sont un pictogramme robot/IA (rectangle + 2 points + antenne), une loupe, et un dossier — tous déjà utilisés ailleurs sur le site pour d'autres usages, aucun n'évoque une lettre E ou B |

## 5. Captures réalisées

| Capture | Constat |
|---|---|
| `logo-check-header-desktop.png` | E blanc, aucune déformation, fond clair de l'en-tête |
| `logo-check-header-mobile.png` | E blanc, logo réduit à 40×40 sans déformation |
| `logo-check-preview-section.png` | Les deux logos officiels affichés côte à côte avec la mention requise, E blanc confirmé sur fond bleu nuit |

## 6. Contrôles complémentaires

- **Ratio forcé par CSS** : non — `.brand img{width:51px;height:51px}` (`40px` en mobile) applique un ratio 1:1, identique au ratio natif du fichier (256×256). Aucune déformation.
- **Poids transféré** : inchangé (aucun fichier modifié).
- **Élément LCP** : inchangé (aucun fichier modifié, aucune page publique touchée).
- **Aucune police, mise en page ou icône hors périmètre n'a été modifiée.**

## 7. Confirmation finale

- Le fichier `assets/images/eb-icon.png` est **conforme** au logo officiel (E blanc, B bleu dégradé, circuits bleus, fond bleu nuit, contour clair, angles très arrondis) — aucune action requise.
- `assets/images/uploads/156c3b91-a695-438b-b9d7-6828e90ea7ac.png` (logo horizontal) n'a pas été touché.
- **Les 6 illustrations maîtresses ne contiennent aucune reconstitution incorrecte du logo** — confirmé par relecture des glyphes SVG utilisés (aucune lettre E/B, aucun monogramme).
- Les 6 illustrations **restent non intégrées** aux pages publiques, comme demandé.
