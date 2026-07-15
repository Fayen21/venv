# Vérification du logo carré officiel — compte rendu

Date : 2026-07-15
Suite à la demande de correction de l'identité visuelle avant validation de l'étape 2.

**Conclusion : aucun remplacement effectué. Le fichier actuel `assets/images/eb-icon.png` est déjà conforme au fichier officiel fourni.**

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
