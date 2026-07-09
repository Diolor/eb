# Migration guide: Emmauswald bleibt! → WordPress

This folder contains everything needed to set up the Emmauswald bleibt! website
on a fresh WordPress installation — at Strato, wordpress.com, or any other host.
No coding knowledge is required; every step happens in a web browser.

## What's in this folder (after running `build.sh`)

| File | What it is |
|---|---|
| `dist/emmauswald-bleibt-theme.zip` | The website theme (design + layout), ready to upload (~39 MB) |
| `dist/content.xml` | All content: 9 news posts, 3 events, 33 press clippings, 36 gallery photos, Impressum page |
| `dist/HANDBOOK.md` | Editor handbook (DE + EN) — how to add news/events/press/photos afterwards |
| `MIGRATION.md` | This guide |

To regenerate `dist/` from the git repository: `cd migration && ./build.sh`
(requires the `wordpress-theme` branch checked out).

**Which part applies to you?**

- Fresh WordPress on a **new Strato package** → Part A
- Fresh WordPress on **wordpress.com** → Part B
- **Existing WordPress site** that should be replaced (e.g. the current
  `emmauswald-bleibt.de`) → Part C (which reuses steps from Part A)
- Pointing the real **domain** at the new site later → Part D

---

## Part A: Strato (new "WordPress Hosting Basic" package)

### A1. Order the package (once)

1. Go to strato.de → *Hosting* → *WordPress Hosting* → **Basic** (12-month term:
   first month free, no setup fee, then ~€5/month).
2. During checkout, **defer the included free domain** ("Domain später
   auswählen") — the real domain `emmauswald-bleibt.de` currently lives in
   another Strato account (see Part D) and the free-domain credit should stay
   available until after the handover.
3. Complete the order with your personal and payment details.

### A2. Install WordPress

1. Log in to the Strato customer area (strato.de → Login → Kunden-Login).
2. In your package, open the WordPress installer
   (*Datenbanken und Webspace → WordPress* or the "AppWizard").
3. Install WordPress into the webspace root. Choose:
   - a **username** that is NOT "admin" (e.g. `emmauswald`),
   - a **strong password** (store it in a password manager),
   - the site title `Initiative Emmauswald bleibt!`.
4. Note the temporary site address Strato gives you (e.g.
   `https://<something>.stratoserver.net` or a preview URL) and open
   `…/wp-admin` — you should reach the WordPress dashboard.
5. Recommended while you're in the Strato panel: set **PHP to the newest
   version** offered (8.3/8.4) and make sure **SSL** is active for the site.

### A3. Upload and activate the theme

1. In wp-admin: **Design → Themes → Hinzufügen → Theme hochladen**
   (*Appearance → Themes → Add New → Upload Theme*).
2. Choose `dist/emmauswald-bleibt-theme.zip` → *Jetzt installieren* → **Aktivieren**.
3. The front page will look mostly empty — that's expected until the content
   import in the next step.

> **If the upload fails with a size error** (the zip is ~39 MB): in the Strato
> panel raise the PHP setting `upload_max_filesize` (and `post_max_size`) to
> 64M (*PHP-Einstellungen* / php.ini editor), then retry. Alternative: unzip
> the file locally and upload the `emmauswald-bleibt/` folder via SFTP into
> `wp-content/themes/` (SFTP credentials are in the Strato panel), then
> activate the theme in wp-admin.

### A4. Import the content

⚠️ Do this **after** activating the theme — the theme registers the
"Veranstaltungen" and "Pressespiegel" content types; importing first would
reject those items.

1. In wp-admin: **Werkzeuge → Daten importieren → WordPress → Jetzt installieren**
   (*Tools → Import → WordPress → Install Now*), then *Importer ausführen*.
2. Upload `dist/content.xml`.
3. On the next screen:
   - assign all content to your existing admin user
     ("…Beiträge einem vorhandenen Benutzer zuordnen"),
   - ✅ **tick "Dateianhänge herunterladen und importieren"**
     (*Download and import file attachments*) — this pulls the 36 gallery
     photos into the Media Library from the public static site.
4. Run the import. It takes a few minutes (photo downloads). A repeated run is
   harmless — already imported items are skipped.

### A5. Settings (5 minutes)

1. **Einstellungen → Permalinks** → "Beitragsname" (*Post name*) → save.
   (Required — the Impressum link expects `/impressum/`.)
2. **Einstellungen → Allgemein**:
   - Titel: `Initiative Emmauswald bleibt!`
   - Untertitel: `Gemeinsam für den Erhalt unseres Stadtwaldes`
   - Sprache/Zeitzone: Deutsch / Berlin
3. **Design → Customizer → Website-Informationen** (*Site Identity*): optionally
   upload the logo (`assets/img/EmmausWald_logo_centered.png` from the theme,
   also in the Media Library after import) as the site icon. Without it, the
   theme falls back to the logo automatically.
4. **Design → Customizer → "Emmauswald: Links / Kampagne"**: check the
   petition and Telegram URLs (pre-filled with the current ones).
5. **Einstellungen → Diskussion** (*Discussion*): untick "Erlaube Besuchern,
   neue Beiträge zu kommentieren" — the site design has no comment section.

### A6. Verify (checklist)

Open the site (not wp-admin) and check:

- [ ] Hero, stats, forest info, demands, "Mitmachen" sections render with images
- [ ] DE / EN / TR buttons switch every text on the page
- [ ] **News**: 3 items visible, button "Ältere News anzeigen (6)" reveals the rest
- [ ] **Kalender**: "keine anstehenden Veranstaltungen" note + 3 past events
- [ ] **Pressespiegel**: grouped 2026 → 2022, 33 links, all open the news outlets
- [ ] **Spenden / Material**: PDFs download
- [ ] **Bilder**: 36 photos, clicking opens the lightbox, arrow keys navigate
- [ ] Footer → Impressum opens `/impressum/` with the legal notice
- [ ] Mobile: burger menu opens/scrolls, language switch works

### A7. Ongoing operation (Strato-specific)

- **Updates are your responsibility** on self-hosted WordPress: keep WordPress
  core and the importer plugin updated (wp-admin shows update notices;
  enabling auto-updates is fine — the theme is independent of core updates).
- **Backups**: Strato's BackupControl covers webspace; additionally export
  content occasionally via *Werkzeuge → Daten exportieren*.
- Content editing: see `HANDBOOK.md`.

---

## Part B: wordpress.com instead (alternative)

Works identically, with three differences:

1. Requires a **paid plan** (Personal or higher) — the free plan cannot install
   custom themes and would reject the events/press content.
2. No PHP/SFTP tuning available on Personal; if the 39 MB theme upload fails,
   contact wordpress.com support or use a Business plan's SFTP. (Uploads up to
   50 MB normally succeed.)
3. Permalinks are "Post name" and SSL/updates/backups are managed by
   wordpress.com — skip A2, A5.1 and A7.

Steps: create the site → *Appearance → Themes → Upload* the zip → activate →
*Tools → Import → WordPress* with `content.xml` (tick attachment download) →
A5.2–A5.5 → A6 checklist.

---

## Part C: Overriding an EXISTING WordPress site

Use this part when deploying into a WordPress installation that already has a
theme, plugins and content — for example the current site at
`emmauswald-bleibt.de` (WordPress with the Twenty Twenty-One theme and the
"The Events Calendar" plugin). The order of steps matters here.

**Why the old content can't simply stay:** the new front page automatically
shows **every post** in the News section and **every Media Library image** in
the photo gallery. Leftover posts and images from the old site would therefore
appear on the new front page. Old events from "The Events Calendar" use a
different format and would *not* appear in the new calendar.

### C1. Back up everything (do not skip)

Make three backups — they cover different failure cases:

1. **Content export:** **Werkzeuge → Daten exportieren** (*Tools → Export*) →
   "Alle Inhalte" → download the XML file. This preserves all old
   posts/pages/media references permanently — they can be re-imported any time.
2. **Full site backup (files + database):** install the free plugin
   **UpdraftPlus** (*Plugins → Installieren* → search "UpdraftPlus") →
   *Einstellungen → UpdraftPlus Backups* → **"Jetzt sichern"** with both
   boxes ticked (database + files) → when finished, **download all backup
   components** (Datenbank, Plugins, Themes, Uploads, Sonstige) to your
   computer via the "Existierende Backups" list.
   On Strato, additionally note that **BackupControl** (Strato panel) keeps
   automatic webspace snapshots you can roll back to.
3. **Configuration notes:** screenshot the *Plugins* list (which are active),
   *Einstellungen → Allgemein* and *Einstellungen → Lesen* pages, and the
   menu/widget setup if the old theme uses them.

**Verify before continuing:**

- [ ] The export XML and every UpdraftPlus file are on your computer
      (and ideally a second place, e.g. a cloud drive)
- [ ] File sizes are plausible (the uploads/media archive is usually the
      largest — a suspiciously tiny file means the backup is incomplete)
- [ ] You know the wp-admin login AND the Strato customer login (needed for
      BackupControl restores if wp-admin ever becomes unreachable)

Do not continue to C3 until every box is checked.

### C2. Check the environment

1. **PHP version ≥ 8.0** (Strato panel → PHP-Einstellungen; the theme needs
   at least 7.4, recommended 8.3+).
2. WordPress itself updated (*Dashboard → Aktualisierungen*).

### C3. Clean out the old content

In wp-admin (each list view has a checkbox top-left to select all, then
"Mehrfachaktionen → In den Papierkorb"):

1. **Beiträge** (*Posts*): trash all old posts.
2. **Seiten** (*Pages*): trash old pages. If a page with the slug `impressum`
   already exists, you can keep it — the new theme shows its own legal notice
   for that address either way.
3. **Medien** (*Media*): delete old images/files. ⚠️ Only do this after C1 —
   deleted media cannot be recovered without the backup. (Any image left here
   will appear in the new photo gallery.)
4. Empty the trash for posts and pages (*Papierkorb → leeren*), otherwise a
   later import may create duplicates with `-2` suffixes.
5. **Plugins**: deactivate what the new site does not need — in particular
   "The Events Calendar", page builders (Elementor, WPBakery …) and old
   theme-specific plugins. Keep security/backup plugins if present. Do NOT
   delete them yet — deactivating is reversible and enough.
6. If a **caching plugin** is active (WP Super Cache, W3 Total Cache …):
   clear its cache and deactivate it until the migration is verified.

### C4. Install the new site

Now follow the standard steps from Part A:

1. **A3** – upload and activate the theme.
2. **A4** – import `content.xml` (tick the attachment download!). Because you
   are importing directly on the final domain, the photo URLs are created
   correctly from the start — the search-replace step from Part D is **not**
   needed.
3. **A5** – settings. Additionally check **Einstellungen → Lesen**
   (*Settings → Reading*): "Deine Homepage zeigt" should be
   **"Deine letzten Beiträge"** (*Your latest posts*) — the new theme renders
   its own front page regardless, but this avoids a stray "posts page" from
   the old configuration.
4. **A6** – run the full verification checklist.

### C5. Rollback — restoring the old site if something goes wrong

The C1 backups make the override fully reversible:

1. **Full restore (recommended):** *Einstellungen → UpdraftPlus Backups* →
   "Existierende Backups" → **Wiederherstellen** — or, if the backup files
   are only on your computer, upload them on the same screen first
   ("Backup-Dateien hochladen"). Tick all components (database, plugins,
   themes, uploads) → restore → then *Design → Themes* → reactivate
   **Twenty Twenty-One** and reactivate the plugins from your C1 screenshot.
2. **If wp-admin itself is broken:** Strato panel → **BackupControl** →
   restore the webspace (and database) to a date before the migration.
3. **Content-only restore:** re-import the C1 export XML via
   *Werkzeuge → Daten importieren → WordPress* (recovers posts/pages, but not
   theme/plugin settings — hence prefer option 1).

After any restore, clear browser cache and re-check the site.

### C6. Aftercare

1. Watch the site for a few days; keep the C1 backups at least until the
   initiative has signed off on the new site.
2. Once satisfied: delete the deactivated old plugins and the old theme
   (*Design → Themes* → Twenty Twenty-One → Löschen; keep one default theme
   like Twenty Twenty-Five as WordPress fallback).
3. Old posts worth keeping as news can be restored individually from the C1
   export: re-import the XML and trash everything except the wanted posts —
   or paste their text into new posts using the trilingual template from
   `HANDBOOK.md`.

---

## Part D: Connecting the real domain (after handover)

`emmauswald-bleibt.de` currently points to the initiative's **existing** Strato
account (an older WordPress with the Twenty Twenty-One theme). When the new
site is approved:

1. **Option 1 – move the domain** into the new contract (Strato domain
   transfer / KK between Strato accounts), **Option 2 – keep the domain where
   it is** and change its DNS A-record to the new webspace.
2. In the new site's wp-admin, set **Einstellungen → Allgemein → WordPress-Adresse
   & Website-Adresse** to `https://emmauswald-bleibt.de`.
3. The imported photo URLs contain the old (temporary) address. Install the
   plugin **"Better Search Replace"**, replace `https://<temporary-address>`
   with `https://emmauswald-bleibt.de` (dry-run first), then delete the plugin.
4. Re-check the A6 list, especially the gallery.
5. For the account handover itself, Strato offers a formal contract transfer
   ("Vertragsübertragung") form in the customer area / support pages.

---

## Reference

- Theme source & issue tracking: https://github.com/Diolor/eb (branch `wordpress-theme`)
- The old static site (fallback, always available): https://diolor.github.io/eb/
- Editor handbook: `HANDBOOK.md` in this folder / repo root
