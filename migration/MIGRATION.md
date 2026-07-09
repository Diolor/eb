# Migrationsanleitung / Migration guide: Emmauswald bleibt! → WordPress

**Deutsch** (English version below)

Dieser Ordner enthält alles, was nötig ist, um die Webseite „Emmauswald
bleibt!" auf einer frischen WordPress-Installation einzurichten – bei Strato,
wordpress.com oder jedem anderen Anbieter. Programmierkenntnisse sind nicht
erforderlich; jeder Schritt passiert im Webbrowser.

## Was ist in diesem Ordner?

| Datei | Was es ist |
|---|---|
| `dist/emmauswald-bleibt-theme.zip` | Das Webseiten-Theme (Design + Layout), fertig zum Hochladen (~39 MB) |
| `dist/content.xml` | Alle Inhalte: 9 News, 3 Veranstaltungen, 33 Presseartikel, 36 Galerie-Fotos, Impressum-Seite |
| `dist/HANDBOOK.md` | Redaktions-Handbuch (DE + EN) – wie man danach News/Termine/Presse/Fotos pflegt |
| `MIGRATION.md` | Diese Anleitung |

Der Ordner `dist/` ist im Repository enthalten und wird automatisch aktuell
gehalten (ein Pre-Commit-Hook baut ihn neu, sobald sich die Webseite ändert).
Manuell neu bauen, falls je nötig: `./migration/build.sh`

**Welcher Teil gilt für euch?**

- Frisches WordPress in einem **neuen Strato-Paket** → Teil A
- Frisches WordPress auf **wordpress.com** → Teil B
- **Bestehende WordPress-Seite** soll ersetzt werden (z. B. die aktuelle
  `emmauswald-bleibt.de`) → Teil C (nutzt Schritte aus Teil A)
- Die echte **Domain** später auf die neue Seite zeigen lassen → Teil D

---

## Teil A: Strato (neues Paket „WordPress Hosting Basic")

### A1. Paket bestellen (einmalig)

1. Auf strato.de → *Hosting* → *WordPress Hosting* → **Basic** (12-Monats-
   Laufzeit: erster Monat gratis, keine Einrichtungsgebühr, danach ~5 €/Monat).
2. Beim Bestellen die **inklusive Gratis-Domain aufschieben** („Domain später
   auswählen") – die echte Domain `emmauswald-bleibt.de` liegt derzeit in
   einem anderen Strato-Konto (siehe Teil D), und das Domain-Guthaben sollte
   bis nach der Übergabe verfügbar bleiben.
3. Bestellung mit persönlichen Daten und Zahlungsdaten abschließen.

### A2. WordPress installieren

1. Im Strato-Kundenbereich anmelden (strato.de → Login → Kunden-Login).
2. Im Paket den WordPress-Installer öffnen
   (*Datenbanken und Webspace → WordPress* bzw. „AppWizard").
3. WordPress ins Hauptverzeichnis des Webspace installieren. Dabei wählen:
   - einen **Benutzernamen**, der NICHT „admin" ist (z. B. `emmauswald`),
   - ein **starkes Passwort** (im Passwort-Manager speichern),
   - den Seitentitel `Initiative Emmauswald bleibt!`.
4. Die vorläufige Adresse notieren, die Strato vergibt (z. B.
   `https://<etwas>.stratoserver.net` oder eine Vorschau-URL) und
   `…/wp-admin` öffnen – das WordPress-Dashboard sollte erscheinen.
5. Empfohlen, solange ihr im Strato-Panel seid: **PHP auf die neueste
   Version** stellen (8.3/8.4) und sicherstellen, dass **SSL** aktiv ist.

### A3. Theme hochladen und aktivieren

1. Im wp-admin: **Design → Themes → Hinzufügen → Theme hochladen**.
2. `dist/emmauswald-bleibt-theme.zip` auswählen → *Jetzt installieren* →
   **Aktivieren**.
3. Die Startseite wirkt danach noch ziemlich leer – das ist normal, bis im
   nächsten Schritt die Inhalte importiert sind.

> **Falls der Upload an einer Größenbeschränkung scheitert** (die Zip hat
> ~39 MB): im Strato-Panel die PHP-Einstellung `upload_max_filesize` (und
> `post_max_size`) auf 64M erhöhen (*PHP-Einstellungen* / php.ini-Editor),
> dann erneut versuchen. Alternative: die Zip lokal entpacken und den Ordner
> `emmauswald-bleibt/` per SFTP nach `wp-content/themes/` hochladen
> (SFTP-Zugangsdaten stehen im Strato-Panel), dann das Theme im wp-admin
> aktivieren.

### A4. Inhalte importieren

⚠️ Erst **nach** dem Aktivieren des Themes – das Theme registriert die
Inhaltstypen „Veranstaltungen" und „Pressespiegel"; ein Import davor würde
diese Einträge ablehnen.

1. Im wp-admin: **Werkzeuge → Daten importieren → WordPress → Jetzt
   installieren**, dann *Importer ausführen*.
2. `dist/content.xml` hochladen.
3. Auf der nächsten Seite:
   - alle Inhalte dem vorhandenen Admin-Benutzer zuordnen
     („…Beiträge einem vorhandenen Benutzer zuordnen"),
   - ✅ **Häkchen bei „Dateianhänge herunterladen und importieren"** – das
     lädt die 36 Galerie-Fotos von der öffentlichen statischen Seite in die
     Mediathek.
4. Import starten. Er dauert ein paar Minuten (Foto-Downloads). Ein erneuter
   Durchlauf ist unschädlich – bereits importierte Einträge werden übersprungen.

### A5. Einstellungen (5 Minuten)

1. **Einstellungen → Permalinks** → „Beitragsname" → speichern.
   (Erforderlich – der Impressum-Link erwartet `/impressum/`.)
2. **Einstellungen → Allgemein**:
   - Titel: `Initiative Emmauswald bleibt!`
   - Untertitel: `Gemeinsam für den Erhalt unseres Stadtwaldes`
   - Sprache/Zeitzone: Deutsch / Berlin
3. **Design → Customizer → Website-Informationen**: optional das Logo
   (`assets/img/EmmausWald_logo_centered.png` aus dem Theme, nach dem Import
   auch in der Mediathek) als Website-Icon hochladen. Ohne Icon nutzt das
   Theme automatisch das Logo.
4. **Design → Customizer → „Emmauswald: Links / Kampagne"**: Petitions- und
   Telegram-URL prüfen (mit den aktuellen vorbelegt).
5. **Einstellungen → Diskussion**: Häkchen bei „Erlaube Besuchern, neue
   Beiträge zu kommentieren" entfernen – das Seitendesign hat keinen
   Kommentarbereich.

### A6. Prüfen (Checkliste)

Die Webseite (nicht wp-admin) öffnen und prüfen:

- [ ] Hero, Zahlen, Wald-Infos, Forderungen, „Mitmachen" erscheinen mit Bildern
- [ ] Die Knöpfe DE / EN / TR schalten jeden Text der Seite um
- [ ] **News**: 3 Einträge sichtbar, der Knopf „Ältere News anzeigen (6)" zeigt den Rest
- [ ] **Kalender**: Hinweis „keine anstehenden Veranstaltungen" + 3 vergangene Termine
- [ ] **Pressespiegel**: gruppiert 2026 → 2022, 33 Links, alle öffnen die Medien
- [ ] **Spenden / Material**: PDFs lassen sich herunterladen
- [ ] **Bilder**: 36 Fotos, Klick öffnet die Großansicht, Pfeiltasten blättern
- [ ] Footer → Impressum öffnet `/impressum/` mit dem Impressum
- [ ] Mobil: Burger-Menü öffnet/scrollt, Sprachumschalter funktioniert

### A7. Laufender Betrieb (Strato-spezifisch)

- **Updates sind bei selbst gehostetem WordPress eure Aufgabe**: WordPress
  und den Importer-Plugin aktuell halten (wp-admin zeigt Hinweise;
  Auto-Updates zu aktivieren ist unbedenklich – das Theme ist von
  Core-Updates unabhängig).
- **Backups**: Stratos BackupControl sichert den Webspace; zusätzlich
  gelegentlich Inhalte exportieren über *Werkzeuge → Daten exportieren*.
- Inhalte pflegen: siehe `HANDBOOK.md`.

---

## Teil B: Stattdessen wordpress.com (Alternative)

Funktioniert identisch, mit drei Unterschieden:

1. Erfordert einen **Bezahltarif** (Personal oder höher) – der Gratis-Tarif
   kann keine eigenen Themes installieren und würde die Veranstaltungs- und
   Presse-Inhalte ablehnen.
2. Auf Personal gibt es kein PHP-/SFTP-Tuning; falls der 39-MB-Upload
   scheitert, den wordpress.com-Support kontaktieren oder das SFTP des
   Business-Tarifs nutzen. (Uploads bis 50 MB klappen normalerweise.)
3. Permalinks stehen bereits auf „Beitragsname", und SSL/Updates/Backups
   verwaltet wordpress.com – A2, A5.1 und A7 überspringen.

Schritte: Seite anlegen → *Design → Themes → Hochladen* mit der Zip →
aktivieren → *Werkzeuge → Daten importieren → WordPress* mit `content.xml`
(Anhänge-Häkchen setzen) → A5.2–A5.5 → Checkliste A6.

---

## Teil C: Eine BESTEHENDE WordPress-Seite überschreiben

Dieser Teil gilt, wenn in eine WordPress-Installation migriert wird, die
bereits Theme, Plugins und Inhalte hat – zum Beispiel die aktuelle Seite
unter `emmauswald-bleibt.de` (WordPress mit dem Theme Twenty Twenty-One und
dem Plugin „The Events Calendar"). Die Reihenfolge der Schritte ist hier
wichtig.

**Warum die alten Inhalte nicht einfach bleiben können:** Die neue Startseite
zeigt automatisch **jeden Beitrag** im News-Bereich und **jedes Bild der
Mediathek** in der Foto-Galerie. Übrig gebliebene Beiträge und Bilder der
alten Seite würden also auf der neuen Startseite auftauchen. Alte Termine aus
„The Events Calendar" haben ein anderes Format und würden im neuen Kalender
*nicht* erscheinen.

### C1. Alles sichern (nicht überspringen)

Drei Sicherungen anlegen – sie decken unterschiedliche Fehlerfälle ab:

1. **Inhalts-Export:** **Werkzeuge → Daten exportieren** → „Alle Inhalte" →
   XML-Datei herunterladen. Damit sind alle alten Beiträge/Seiten dauerhaft
   gesichert – sie lassen sich jederzeit wieder importieren.
2. **Komplett-Backup (Dateien + Datenbank):** das kostenlose Plugin
   **UpdraftPlus** installieren (*Plugins → Installieren* → „UpdraftPlus"
   suchen) → *Einstellungen → UpdraftPlus Backups* → **„Jetzt sichern"** mit
   beiden Häkchen (Datenbank + Dateien) → danach **alle Backup-Bestandteile
   herunterladen** (Datenbank, Plugins, Themes, Uploads, Sonstige) über die
   Liste „Existierende Backups".
   Bei Strato zusätzlich: **BackupControl** (Strato-Panel) hält automatische
   Webspace-Schnappschüsse bereit, auf die man zurückspringen kann.
3. **Konfigurations-Notizen:** Screenshots von der *Plugins*-Liste (welche
   aktiv sind), den Seiten *Einstellungen → Allgemein* und *Einstellungen →
   Lesen* sowie ggf. Menü-/Widget-Einstellungen des alten Themes.

**Vor dem Weitermachen prüfen:**

- [ ] Die Export-XML und alle UpdraftPlus-Dateien liegen auf eurem Rechner
      (idealerweise zusätzlich an einem zweiten Ort, z. B. Cloud-Speicher)
- [ ] Die Dateigrößen sind plausibel (das Uploads-/Medien-Archiv ist meist am
      größten – eine auffällig winzige Datei bedeutet: Backup unvollständig)
- [ ] Ihr kennt das wp-admin-Login UND das Strato-Kunden-Login (nötig für
      BackupControl-Wiederherstellungen, falls wp-admin mal nicht erreichbar ist)

Erst weiter zu C3, wenn jedes Kästchen abgehakt ist.

### C2. Umgebung prüfen

1. **PHP-Version ≥ 8.0** (Strato-Panel → PHP-Einstellungen; das Theme braucht
   mindestens 7.4, empfohlen 8.3+).
2. WordPress selbst aktuell (*Dashboard → Aktualisierungen*).

### C3. Alte Inhalte ausräumen

Im wp-admin (jede Listenansicht hat oben links ein Häkchen zum Alle-Auswählen,
dann „Mehrfachaktionen → In den Papierkorb"):

1. **Beiträge**: alle alten Beiträge in den Papierkorb.
2. **Seiten**: alte Seiten in den Papierkorb. Existiert bereits eine Seite mit
   der Kurz-URL `impressum`, kann sie bleiben – das neue Theme zeigt unter
   dieser Adresse ohnehin sein eigenes Impressum.
3. **Medien**: alte Bilder/Dateien löschen. ⚠️ Erst nach C1 – gelöschte
   Medien sind ohne Backup nicht wiederherstellbar. (Jedes Bild, das hier
   bleibt, erscheint in der neuen Foto-Galerie.)
4. Papierkorb für Beiträge und Seiten leeren (*Papierkorb → leeren*), sonst
   kann ein späterer Import Duplikate mit `-2`-Endungen anlegen.
5. **Plugins**: deaktivieren, was die neue Seite nicht braucht – insbesondere
   „The Events Calendar", Page-Builder (Elementor, WPBakery …) und alte
   theme-spezifische Plugins. Sicherheits-/Backup-Plugins können bleiben.
   Noch NICHT löschen – deaktivieren ist umkehrbar und reicht.
6. Falls ein **Caching-Plugin** aktiv ist (WP Super Cache, W3 Total Cache …):
   Cache leeren und Plugin deaktivieren, bis die Migration geprüft ist.

### C4. Die neue Seite installieren

Jetzt den Standard-Schritten aus Teil A folgen:

1. **A3** – Theme hochladen und aktivieren.
2. **A4** – `content.xml` importieren (Anhänge-Häkchen setzen!). Da direkt
   auf der endgültigen Domain importiert wird, entstehen die Foto-URLs von
   Anfang an korrekt – der Suchen-und-Ersetzen-Schritt aus Teil D ist
   **nicht** nötig.
3. **A5** – Einstellungen. Zusätzlich **Einstellungen → Lesen** prüfen:
   „Deine Homepage zeigt" sollte auf **„Deine letzten Beiträge"** stehen –
   das neue Theme rendert seine Startseite zwar unabhängig davon, aber so
   bleibt keine verwaiste „Beitragsseite" aus der alten Konfiguration übrig.
4. **A6** – die komplette Checkliste durchgehen.

### C5. Rollback – die alte Seite wiederherstellen, falls etwas schiefgeht

Die C1-Backups machen das Überschreiben vollständig umkehrbar:

1. **Komplett-Wiederherstellung (empfohlen):** *Einstellungen → UpdraftPlus
   Backups* → „Existierende Backups" → **Wiederherstellen** – oder, falls die
   Backup-Dateien nur auf eurem Rechner liegen, sie auf derselben Seite erst
   hochladen („Backup-Dateien hochladen"). Alle Bestandteile anhaken
   (Datenbank, Plugins, Themes, Uploads) → wiederherstellen → danach
   *Design → Themes* → **Twenty Twenty-One** reaktivieren und die Plugins
   laut C1-Screenshot wieder aktivieren.
2. **Falls wp-admin selbst kaputt ist:** Strato-Panel → **BackupControl** →
   Webspace (und Datenbank) auf ein Datum vor der Migration zurücksetzen.
3. **Nur Inhalte wiederherstellen:** die C1-Export-XML über *Werkzeuge →
   Daten importieren → WordPress* erneut importieren (bringt Beiträge/Seiten
   zurück, aber keine Theme-/Plugin-Einstellungen – daher besser Option 1).

Nach jeder Wiederherstellung: Browser-Cache leeren und die Seite neu prüfen.

### C6. Nachsorge

1. Die Seite einige Tage beobachten; die C1-Backups mindestens so lange
   aufbewahren, bis die Initiative die neue Seite abgenommen hat.
2. Danach: die deaktivierten alten Plugins und das alte Theme löschen
   (*Design → Themes* → Twenty Twenty-One → Löschen; ein Standard-Theme wie
   Twenty Twenty-Five als WordPress-Rückfallebene behalten).
3. Alte Beiträge, die als News erhalten bleiben sollen, lassen sich einzeln
   aus dem C1-Export zurückholen: XML erneut importieren und alles außer den
   gewünschten Beiträgen in den Papierkorb – oder ihre Texte mit der
   dreisprachigen Vorlage aus `HANDBOOK.md` in neue Beiträge übertragen.

---

## Teil D: Die echte Domain verbinden (nach der Übergabe)

`emmauswald-bleibt.de` zeigt derzeit auf das **bestehende** Strato-Konto der
Initiative (ein älteres WordPress mit dem Theme Twenty Twenty-One). Sobald die
neue Seite abgenommen ist:

1. **Option 1 – Domain umziehen** in den neuen Vertrag (Strato-Domainumzug /
   KK zwischen Strato-Konten), **Option 2 – Domain lassen, wo sie ist** und
   ihren DNS-A-Record auf den neuen Webspace zeigen lassen.
2. Im wp-admin der neuen Seite **Einstellungen → Allgemein →
   WordPress-Adresse & Website-Adresse** auf `https://emmauswald-bleibt.de`
   stellen.
3. Die importierten Foto-URLs enthalten noch die alte (vorläufige) Adresse.
   Das Plugin **„Better Search Replace"** installieren,
   `https://<vorläufige-adresse>` durch `https://emmauswald-bleibt.de`
   ersetzen (erst als Probelauf/„dry run"), danach das Plugin löschen.
4. Die A6-Checkliste erneut durchgehen, besonders die Galerie.
5. Für die Konto-Übergabe selbst bietet Strato eine formale
   Vertragsübertragung an (Formular im Kundenbereich / auf den Hilfeseiten).

---

## Referenz

- Theme-Quellcode: https://github.com/Diolor/eb (Branch `wordpress-theme`)
- Die alte statische Seite (Rückfallebene, immer verfügbar): https://diolor.github.io/eb/
- Redaktions-Handbuch: `HANDBOOK.md` in diesem Ordner / im Repo-Hauptverzeichnis

---
---

# English version

This folder contains everything needed to set up the Emmauswald bleibt! website
on a fresh WordPress installation — at Strato, wordpress.com, or any other host.
No coding knowledge is required; every step happens in a web browser.

## What's in this folder

| File | What it is |
|---|---|
| `dist/emmauswald-bleibt-theme.zip` | The website theme (design + layout), ready to upload (~39 MB) |
| `dist/content.xml` | All content: 9 news posts, 3 events, 33 press clippings, 36 gallery photos, Impressum page |
| `dist/HANDBOOK.md` | Editor handbook (DE + EN) — how to add news/events/press/photos afterwards |
| `MIGRATION.md` | This guide |

The `dist/` folder is committed and kept up to date automatically (a
pre-commit hook rebuilds it whenever the website changes). Manual rebuild if
ever needed: `./migration/build.sh`

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
