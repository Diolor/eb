# Emmauswald bleibt! – WordPress theme

Trilingual (DE/EN/TR) one-page campaign theme for the initiative **Emmauswald bleibt!**
This branch turns the former static site into a WordPress theme with the same design;
the `main` branch still contains the plain static version.

## Installation

1. Copy this repository into `wp-content/themes/emmauswald-bleibt/`
   (or zip it and upload it via *Appearance → Themes → Add New → Upload Theme*).
2. Activate the theme under *Appearance → Themes*.
3. Create a page with the slug **`impressum`** (title "Impressum", content can stay
   empty – the theme ships the legal notice in `page-impressum.php`). The footer links
   to `/impressum/`.
4. Optional: set a site icon under *Appearance → Customize → Site Identity*
   (otherwise the theme falls back to the initiative logo).

No page needs to be assigned as the front page: `front-page.php` renders the
one-pager automatically for the site's start page.

## What is dynamic, what is static

**Dynamic (managed in WordPress):**

- **News** – regular WordPress posts. Published posts appear at the top of the
  "News" section on the front page (newest first), above the historical entries.
  Posts can use the trilingual markup (see below); plain German-only posts work too.
- **Petition & Telegram links** – editable under
  *Appearance → Customize → Emmauswald: Links / Kampagne*. They are used in the
  header CTA, hero, "Mitmachen" and "Kontakt" sections.
- Page `<title>`, favicon/site icon, footer year, feeds.

**Static (baked into the theme templates):**

- Hero, stats, "Der Wald", demands, "Mitmachen", calendar, press review, donate,
  material downloads, gallery, contact and the historical news
  (`template-parts/news-static.php`). Edit these directly in the PHP templates –
  they change rarely and stay trilingual and pixel-identical to the static site.

## Trilingual content

Languages are toggled client-side (`assets/js/main.js`), exactly as on the static
site. To make a WordPress post trilingual, wrap each language in a block with the
matching class (in the block editor use a "Custom HTML" block):

```html
<div class="de"><p>Deutscher Text …</p></div>
<div class="en"><p>English text …</p></div>
<div class="tr"><p>Türkçe metin …</p></div>
```

Content without these classes is always visible, regardless of the selected language.

## Theme structure

```
style.css                     Theme header (styles live in assets/css/style.css)
functions.php                 Enqueues, theme supports, Customizer settings
header.php / footer.php       Shared chrome incl. nav, lightbox, to-top button
front-page.php                The one-pager (news section queries WP posts)
template-parts/news-static.php  Historical news items
page-impressum.php            Legal notice (used by the page with slug "impressum")
page.php / single.php / index.php  Generic inner pages, posts, archives
assets/                       CSS, JS, images, downloads (unchanged from the static site)
```
