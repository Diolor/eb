# Emmauswald bleibt! – WordPress theme

Trilingual (DE/EN/TR) one-page campaign theme for the initiative **Emmauswald bleibt!**
This branch turns the former static site into a WordPress theme with the same design;
the `main` branch still contains the plain static version.

## Installation (any WordPress, incl. wordpress.com)

1. **Theme:** zip this repository (or the repo root's contents) and upload it via
   *Appearance → Themes → Add New → Upload Theme*, then activate it.
   On wordpress.com this requires any **paid plan** (Personal or higher – custom
   theme upload is not available on the free plan).
2. **Content:** import `data/content.xml` via *Tools → Import → WordPress*
   (install the suggested "WordPress Importer" when prompted, and tick
   **"Download and import file attachments"**). This creates:
   - the 9 historical **news posts** (regular posts, original dates preserved),
   - the 3 past **events** (post type "Veranstaltungen"),
   - all 33 **press clippings** (post type "Pressespiegel"),
   - all 36 **gallery photos** as Media Library attachments (downloaded from
     the public static site at `diolor.github.io/eb`),
   - the **Impressum** page (slug `impressum`; its content is rendered by
     `page-impressum.php`, so the page itself can stay empty).

   ⚠️ Activate the theme **before** importing – the importer rejects the event and
   press items if the theme (which registers those post types) is not active yet.
3. Set *Settings → Permalinks* to "Post name" (default on wordpress.com).
4. Optional: set a site icon under *Appearance → Customize → Site Identity*
   (otherwise the theme falls back to the initiative logo).

**Hands-off migration:** the [`migration/`](migration/) folder contains a
complete non-technical guide (`MIGRATION.md`) for Strato or wordpress.com;
`migration/build.sh` assembles the deliverables (theme zip, content.xml,
handbook) into `migration/dist/`.

No page needs to be assigned as the front page: `front-page.php` renders the
one-pager automatically for the site's start page.

## What is dynamic, what is static

**Dynamic (managed in WordPress):**

- **News** – regular posts, newest first in the "News" section of the front page.
  The 3 newest are visible; older ones collapse behind a "Show older news" button.
- **Events (Kalender)** – post type "Veranstaltungen". The meta field
  `ewb_event_date` (format `YYYY-MM-DD`) controls sorting and the timeline date
  badge in all three languages. Events on/after today appear under "Veranstaltungen",
  older ones under "Vergangene Veranstaltungen" (3 visible, the rest behind a
  "Show earlier events" button); with no upcoming events the Telegram hint is
  shown. The post content is the timeline body
  (`<h4>` title + `<p class="loc">` location + description paragraphs).
- **Press (Pressespiegel)** – post type "Pressespiegel", grouped by year of the
  post date (which controls ordering). Meta fields: `ewb_press_outlet`,
  `ewb_press_url`, `ewb_press_date_label` (free-form, e.g. `13.01.2025` or
  `11/2024`), and optional `ewb_press_sub` = `1` for indented follow-up links.
  Edit meta fields via the "Custom Fields" panel (enable it under the editor's
  *Options → Preferences → Panels* if hidden).
- **Gallery** – shows every image in the Media Library (site-icon crops
  excluded), ordered by upload date; new uploads appear at the end.
- **Petition & Telegram links** – *Appearance → Customize → Emmauswald: Links / Kampagne*.
- Page `<title>`, favicon/site icon, footer year, feeds.

**Static (baked into the theme templates):**

- Hero, stats, "Der Wald", demands, "Mitmachen", donate, material downloads
  and contact. Edit these directly in `front-page.php` – they change rarely
  and stay pixel-identical to the static site.

**Editor guide:** see [HANDBOOK.md](HANDBOOK.md) (German + English) for
step-by-step, non-technical instructions with copy-paste trilingual templates.

## Trilingual content

Languages are toggled client-side (`assets/js/main.js`), exactly as on the static
site. Trilingual post titles and content simply carry the language markup:

```html
Title:   <span class="de">Titel</span><span class="en">Title</span><span class="tr">Başlık</span>
Content: <div class="de"><p>Deutscher Text …</p></div>
         <div class="en"><p>English text …</p></div>
         <div class="tr"><p>Türkçe metin …</p></div>
```

(In the block editor use a "Custom HTML" block. Titles containing this markup look
noisy in the admin post list but render correctly.) Content without these classes
is always visible, regardless of the selected language.

## Migrating to wordpress.com – checklist

1. Create the site on wordpress.com and pick a paid plan (Personal is enough;
   SFTP/SSH would additionally require Business, but is not needed).
2. Upload + activate the theme zip (*Appearance → Themes*).
3. Import `data/content.xml` (*Tools → Import → WordPress*).
4. Check the front page, set the site icon and (if desired) connect the domain.

## Theme structure

```
style.css                  Theme header (styles live in assets/css/style.css)
functions.php              Enqueues, post types, Customizer settings, helpers
header.php / footer.php    Shared chrome incl. nav, lightbox, to-top button
front-page.php             The one-pager (news/events/press are WP queries)
page-impressum.php         Legal notice (used by the page with slug "impressum")
page.php / single.php / index.php  Generic inner pages, posts, archives
data/content.xml           WordPress export (WXR) with all migrated content
assets/                    CSS, JS, images, downloads (unchanged from the static site)
```
