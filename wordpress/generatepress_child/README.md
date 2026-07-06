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
