# EB Automatisation — thème enfant GeneratePress

## ⚠️ Plugins SEO — ne pas activer sans précaution

Ce thème gère lui-même, en dur dans `functions.php` (`eb_output_seo_tags()`,
`eb_document_title()`), les balises suivantes pour les 10 pages du site :
`<title>`, meta description, Open Graph, Twitter Card, canonical, et le
JSON-LD (Article + FAQPage) des 5 pages piliers.

**N'activez pas Yoast SEO, RankMath ou All in One SEO sans désactiver leur
génération automatique de ces mêmes balises sur ces 10 pages.** Sinon, les
balises seront dupliquées (les nôtres + celles du plugin), ce qui peut nuire
au référencement (Google peut ignorer des balises ambiguës ou dupliquées).

Si un plugin SEO est installé pour d'autres besoins (sitemap.xml, robots.txt,
gestion de futurs contenus hors de ces 10 pages), désactivez spécifiquement
sa génération de title/meta/OG/JSON-LD sur ces pages, ou retirez nos hooks
correspondants — pas les deux en même temps.

## 🔗 Formulaire Audit — URL du webhook Make

Le formulaire de la page `/audit/` envoie les demandes en POST JSON vers un
webhook Make, dont l'URL est lue depuis la constante PHP
`EB_AUDIT_WEBHOOK_URL` (définie dans `functions.php`).

**Tant que cette constante est vide, le formulaire garde son comportement de
démonstration** (aucun envoi réseau, succès simulé) — le site fonctionne sans
aucune configuration.

Pour l'activer, deux façons de renseigner l'URL, par ordre de préférence :

1. **Recommandé** — dans `wp-config.php` (fichier non versionné, donc jamais
   commité ni présent dans les ZIP du thème), ajoutez avant la ligne
   `/* That's all, stop editing! */` :
   ```php
   define( 'EB_AUDIT_WEBHOOK_URL', 'https://hook.eu1.make.com/votre-url-unique' );
   ```
2. Sinon, modifiez directement la valeur par défaut dans
   `functions.php` (cherchez `EB_AUDIT_WEBHOOK_URL`) — moins recommandé
   puisque l'URL se retrouve alors dans le code du thème.

L'URL d'un webhook Make n'est pas un mot de passe, mais elle ne doit pas être
partagée publiquement (n'importe qui la connaissant peut déclencher votre
scénario Make). Aucune clé, jeton ou identifiant supplémentaire n'est stocké
ni exposé côté navigateur : seule cette URL est transmise au JavaScript de la
page Audit, exactement comme elle doit l'être pour qu'un `fetch()` côté
client puisse l'appeler.

Le formulaire inclut aussi une protection anti-spam basique côté front
(champ piège invisible + délai minimum de 3 secondes avant envoi) — elle
réduit le bruit mais ne remplace pas un filtrage côté Make si besoin.

## 🖼️ Image Open Graph (partage réseaux sociaux)

Chaque page peut avoir sa propre image de partage (utilisée pour
`og:image` / `twitter:image`, format recommandé **1200×630 px**, JPG).

**Où déposer les images :** `assets/images/og/`, un fichier par page,
par exemple `assets/images/og/audit.jpg`.

**Comment l'activer pour une page :** dans `functions.php`, ajoutez la clé
`og_image` au tableau de la page concernée dans `eb_seo_data()` :
```php
'audit' => array(
    // ... champs existants ...
    'og_image' => 'images/og/audit.jpg',
),
```

**Tant qu'une page ne définit pas `og_image`**, elle utilise l'image
partagée `assets/images/og/og-default.jpg` — **un visuel provisoire**
(logo EB Automatisation sur fond navy, 1200×630) généré en attendant des
visuels définitifs par page. Remplacez ce fichier ou ajoutez des
`og_image` par page dès que des visuels finaux sont prêts.
