# VERTEX Solutions (block theme)

Full Site Editing theme converted from the supplied "VERTEX Solutions - Modern Flat Business Website" HTML.

## Structure
| Path | Purpose |
| --- | --- |
| `theme.json` | Palette, Inter font (self-hosted), font sizes, spacing scale, layout, element and block styles |
| `style.css` | Theme header + styling that reads `--wp--preset--*` / `--wp--custom--*` variables |
| `templates/` | `front-page`, `page`, `single`, `archive`, `search`, `404`, `index` |
| `parts/` | `header`, `footer` (both load patterns) |
| `patterns/` | Hero, features bar, services, about tabs, testimonials, contact (CF7), post grid, 404 content, header, footer |
| `assets/js/tabs.js` | Accessible tabs (progressive enhancement) |
| `docs/` | Contact Form 7 form template |

## Setup
1. Activate the theme, install **Contact Form 7**.
2. Create a form titled `Contact form 1` with `docs/contact-form-7-template.txt`.
3. Set a static page as the homepage (Settings > Reading) or leave "Your latest posts": `front-page.html` is used either way.
4. Replace placeholder links (social icons, Terms of Service) and edit the header menu in the Site Editor.

## Notes
- Fonts are bundled locally (Inter variable, OFL). Icons are inline SVG (Lucide, ISC). No CDN requests.
- All visible strings in patterns are translatable (`vertex-solutions` text domain).
- Run `phpcs --standard=WordPress` and the Theme Check plugin before submitting to WordPress.org.
