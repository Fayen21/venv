# EB Flow — illustrations maîtresses

6 illustrations SVG autonomes (aucune dépendance externe, aucune police,
aucun texte, aucun raster), construites sur un même vocabulaire visuel
dérivé des deux logos officiels EB (jamais redessinés, jamais modifiés) :
lignes de circuit à angles droits arrondis, points de connexion ronds,
contraste blanc / bleu nuit / bleu électrique, orange du site en accent
secondaire discret, un seul dégradé bleu par illustration.

Générées par `scripts` internes à la session (non versionnés) à partir des
6 composants ci-dessous — toute nouvelle illustration du même type devrait
réutiliser les mêmes conventions pour rester cohérente avec ce lot.

## Les 6 composants ("bibliothèque de composants EB")

- **EB Circuit** — un segment de trace de circuit à angle droit, coin
  arrondi (`stroke-linejoin="round"`, 2 segments), couleur `--navy-panel-border`
  clair sur fond sombre / navy sur fond clair. Utilisé pour tous les traits
  reliant une carte à un nœud.
- **EB Node** — un point de connexion rond (`circle`, rayon 3–4.5px),
  toujours en `--blue-2` (bleu clair) ou `--blue-3`, posé à chaque jonction
  visible d'un EB Circuit (départ de carte, arrivée sur le hub).
- **EB Data Card** — un rectangle à coins arrondis (`rx:14`), fond
  `--navy-panel`, bordure `--navy-panel-border`, contenant une seule icône
  centrée (style trait du reste du site, `stroke-width` 1.6–1.9). Jamais plus
  de 5 cartes (en comptant le hub central) par illustration.
- **EB Flow Connector** — l'assemblage EB Circuit + 2× EB Node (un à chaque
  extrémité), c'est la brique qui relie deux EB Data Card entre elles.
  Jamais plus de 8 par illustration.
- **EB Validation** — le glyphe de coche (`M5 12.5l4.5 4.5L19 7`), utilisé
  dans les cartes de résultat quand la sortie représente une confirmation
  ou un contrôle réussi. Même glyphe que `eb_icon('validation')` côté PHP.
- **EB Master Illustration Container** — le cadre général de l'illustration :
  `viewBox="0 0 800 212"` (même format que les 10 illustrations `.pillar-mock`
  existantes), fond transparent, structure en 3 zones horizontales
  (entrée → hub de traitement → résultat), hub central plus grand (rayon 46)
  entouré d'un halo radial discret (`radialGradient`, opacité 0 → .38, seul
  dégradé/effet lumineux autorisé par illustration).

## Contraintes respectées

| Contrainte | Valeur observée |
|---|---|
| Cartes/blocs fonctionnels | 5 (2 entrée + 1 hub + 2 résultat) sur les 6 fichiers |
| Connecteurs visibles | 4 par illustration (≤ 8) |
| Points de connexion | 8 par illustration (≤ 12) |
| Niveaux de profondeur visuelle | 2 (circuits/cartes en base, hub surélevé avec halo) |
| Dégradés bleus | 1 par illustration |
| Effets lumineux | 1 (le halo du hub) |
| Poids par fichier | 3,3–3,7 Ko brut / ~0,8 Ko gzip (plafond : 15 Ko) |
| Texte dessiné dans le SVG | Aucun |
| Police intégrée | Aucune |
| Filtre de flou SVG | Aucun |
| Animation SVG | Aucune |
| Raster / base64 | Aucun |

## Fichiers

| Fichier | Sujet |
|---|---|
| `eb-flow-emails-relances.svg` | Emails et relances |
| `eb-flow-excel-pdf-ocr.svg` | Excel, PDF et OCR |
| `eb-flow-crm.svg` | CRM et suivi commercial |
| `eb-flow-rh.svg` | Ressources humaines |
| `eb-flow-comptabilite.svg` | Comptabilité automatisée |
| `eb-flow-reporting.svg` | Reporting automatisé |

## Statut d'intégration

**Non intégrées aux templates publics** à ce stade (mission explicite :
valider d'abord la qualité visuelle via `docs/eb-visual-system-preview.html`).
Voir `docs/iconographie-phase-2-report.md` pour les recommandations
d'intégration par page.
