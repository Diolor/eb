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

---

## Part A: Strato (new "WordPress Hosting Basic" package)

### A1. Order the package (once)

1. Go to strato.de → *Hosting* → *WordPress Hosting* → **Basic** (12-month term:
   first month free, no setup fee, then ~€5/month).
2. During checkout, **defer the included free domain** ("Domain später
   auswählen") — the real domain `emmauswald-bleibt.de` currently lives in
   another Strato account (see Part C) and the free-domain credit should stay
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

## Part C: Connecting the real domain (after handover)

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
