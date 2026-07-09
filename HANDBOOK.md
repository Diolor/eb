# Handbuch: Inhalte pflegen / Editor's Handbook

**Deutsch** (English version below)

Dieses Handbuch erklärt Schritt für Schritt, wie ihr News, Veranstaltungen,
Presseartikel und Fotos auf der Webseite pflegt – ohne Programmierkenntnisse.
Alles passiert im WordPress-Adminbereich: `https://<eure-seite>/wp-admin`

## Das Wichtigste zuerst: Drei Sprachen

Die Webseite zeigt Deutsch, Englisch und Türkisch. Besucher*innen wählen die
Sprache oben rechts (DE / EN / TR). Damit das funktioniert, werden alle drei
Sprachen **zusammen in einem Beitrag** gespeichert und mit einer Markierung
versehen:

- `<span class="de">…</span>` bzw. `<div class="de">…</div>` → nur bei Deutsch sichtbar
- `class="en"` → nur bei Englisch
- `class="tr"` → nur bei Türkisch
- Text **ohne** Markierung ist in allen Sprachen sichtbar

Ihr müsst diese Markierungen nicht auswendig können – kopiert einfach die
Vorlagen unten und ersetzt die Beispieltexte.

**Wichtig:** Fügt Inhalte immer über einen **„Individuelles HTML“-Block** ein
(im Editor auf `+` klicken → „Individuelles HTML“ suchen). Nur so bleiben die
Sprachmarkierungen erhalten.

---

## 1. Eine News schreiben

News erscheinen auf der Startseite im Abschnitt „News“, die neueste zuerst.
Es werden die 3 neuesten angezeigt; ältere sind hinter dem Knopf
„Ältere News anzeigen“ erreichbar.

1. Im Adminbereich: **Beiträge → Erstellen**
2. In das **Titelfeld** diese Zeile einfügen und die drei Titel ersetzen:

```html
<span class="de">Deutscher Titel</span><span class="en">English title</span><span class="tr">Türkçe başlık</span>
```

3. Im Inhalt einen **„Individuelles HTML“-Block** hinzufügen und diese Vorlage
   einfügen:

```html
<div class="de">
  <p>Erster Absatz auf Deutsch – dieser Teil ist immer sichtbar.</p>
  <details><summary>Weiterlesen</summary>
    <p>Weiterer Text auf Deutsch, der erst nach Klick auf „Weiterlesen" erscheint.</p>
  </details>
</div>
<div class="en">
  <p>First paragraph in English – always visible.</p>
  <details><summary>Read more</summary>
    <p>More English text, shown after clicking "Read more".</p>
  </details>
</div>
<div class="tr">
  <p>Türkçe ilk paragraf – her zaman görünür.</p>
  <details><summary>Devamını oku</summary>
    <p>"Devamını oku"ya tıklandıktan sonra görünen Türkçe metin.</p>
  </details>
</div>
```

   Der `<details>`-Teil ist optional – bei kurzen News einfach weglassen und
   nur `<p>…</p>`-Absätze verwenden.

4. Rechts das **Veröffentlichungsdatum** prüfen (bestimmt die Reihenfolge),
   dann **Veröffentlichen** klicken. Fertig!

**Ein Foto in der News?** Erst unter *Medien* hochladen (siehe Punkt 4), dann
im HTML-Block einfügen: `<figure><img src="BILD-URL" alt="Beschreibung"></figure>`
(die Bild-URL findet ihr in der Mediathek beim Bild unter „Datei-URL kopieren“).

---

## 2. Eine Veranstaltung anlegen

Veranstaltungen erscheinen im Abschnitt „Kalender“. Zukünftige Termine stehen
oben unter „Veranstaltungen“, vergangene rutschen automatisch in „Vergangene
Veranstaltungen“ (dort werden 3 gezeigt, der Rest hinter einem Knopf).

1. Im Adminbereich: **Veranstaltungen → Neue Veranstaltung**
2. **Titel:** einfach auf Deutsch (nur für die interne Übersicht, z. B. „Sommerfest 2026“)
3. Einen **„Individuelles HTML“-Block** einfügen mit dieser Vorlage:

```html
<h4><span class="de">Sommerfest</span><span class="en">Summer festival</span><span class="tr">Yaz şenliği</span></h4>
<p class="loc">📍 <span class="de">Ort · Sonntag, 25. Juni 2026, 14:00–18:00</span><span class="en">Place · Sunday, 25 June 2026, 2–6 pm</span><span class="tr">Yer · Pazar, 25 Haziran 2026, 14.00–18.00</span></p>
<p class="de">Beschreibung auf Deutsch.</p>
<p class="en">Description in English.</p>
<p class="tr">Türkçe açıklama.</p>
```

4. **Das Datum setzen** – ganz wichtig! Unten auf der Seite gibt es den Kasten
   **„Individuelle Felder“** (falls nicht sichtbar: oben rechts ⋮ →
   *Einstellungen* → *Panels* → „Individuelle Felder“ aktivieren, Seite lädt neu).
   - *Name:* `ewb_event_date`
   - *Wert:* das Datum als `JJJJ-MM-TT`, z. B. `2026-06-25`
   - „Individuelles Feld hinzufügen“ klicken
5. **Veröffentlichen.** Das Feld `ewb_event_date` steuert, wo und in welcher
   Reihenfolge die Veranstaltung erscheint – und den Datumskreis im Kalender
   (Tag + Monat in allen drei Sprachen, automatisch).

---

## 3. Einen Presseartikel eintragen

Presseartikel erscheinen im „Pressespiegel“, automatisch nach Jahren gruppiert.

1. Im Adminbereich: **Pressespiegel → Neuer Presseartikel**
2. **Titel:** die Original-Überschrift des Artikels (normale Sprache, keine Markierungen)
3. Im Kasten **„Individuelle Felder“** (siehe oben, falls ausgeblendet) drei Felder anlegen:

   | Name | Wert (Beispiel) |
   |---|---|
   | `ewb_press_outlet` | `Tagesspiegel` |
   | `ewb_press_url` | `https://www.tagesspiegel.de/berlin/…` |
   | `ewb_press_date_label` | `21.05.2026` (freier Text, auch `11/2026` oder `2026` möglich) |

4. Rechts das **Veröffentlichungsdatum auf das Erscheinungsdatum des Artikels
   stellen** – es bestimmt das Jahr der Gruppierung und die Reihenfolge.
5. **Veröffentlichen.**

---

## 4. Fotos zur Galerie hinzufügen

Die Galerie „Bilder“ zeigt automatisch **alle Bilder aus der Mediathek**,
sortiert nach Hochladedatum (neue Fotos erscheinen am Ende).

1. Im Adminbereich: **Medien → Datei hinzufügen** und Foto(s) hochladen
2. Nach dem Hochladen das Bild anklicken und einen **Alternativtext**
   eintragen (kurze Beschreibung, z. B. „Lichtung im Emmauswald“) – wichtig
   für Barrierefreiheit und Suchmaschinen.

Das ist alles – das Foto erscheint sofort in der Galerie und lässt sich per
Klick vergrößern.

---

## 5. Petitions- und Telegram-Link ändern

**Design → Customizer → „Emmauswald: Links / Kampagne“** – dort können die
Petition-URL und die Telegram-Gruppen-URL geändert werden. Sie werden überall
auf der Seite automatisch aktualisiert (Kopfzeile, Startbereich, Mitmachen,
Kontakt).

---

## Spickzettel

| Ich will… | Wo? | Woran denken? |
|---|---|---|
| News schreiben | Beiträge → Erstellen | Titel + Inhalt mit DE/EN/TR-Vorlage, HTML-Block |
| Veranstaltung anlegen | Veranstaltungen → Neu | Individuelles Feld `ewb_event_date` = `JJJJ-MM-TT` |
| Presseartikel eintragen | Pressespiegel → Neu | 3 individuelle Felder + Beitragsdatum = Artikeldatum |
| Foto in die Galerie | Medien → Datei hinzufügen | Alternativtext eintragen |
| Petition/Telegram-Link | Design → Customizer | – |

---
---

# English version

This handbook explains how to maintain news, events, press clippings and
photos on the website – no coding knowledge required. Everything happens in
the WordPress admin area: `https://<your-site>/wp-admin`

## First things first: three languages

The website shows German, English and Turkish; visitors pick the language in
the top-right corner (DE / EN / TR). For this to work, all three languages are
stored **together in one post**, marked like this:

- `<span class="de">…</span>` or `<div class="de">…</div>` → visible in German only
- `class="en"` → English only, `class="tr"` → Turkish only
- Text **without** a marker is visible in every language

You don't need to memorise this – copy the templates below and replace the
sample text.

**Important:** always paste content via a **"Custom HTML" block** (click `+`
in the editor → search "Custom HTML"). This keeps the language markers intact.

## 1. Writing a news post

News appear in the "News" section of the homepage, newest first. The 3 most
recent are shown; older ones sit behind the "Show older news" button.

1. Admin: **Posts → Add New**
2. Paste into the **title field** (replace the three titles):
   `<span class="de">Deutscher Titel</span><span class="en">English title</span><span class="tr">Türkçe başlık</span>`
3. Add a **Custom HTML block** and use the trilingual template from the German
   section above (§1): one `<div class="de">…</div>`, one `<div class="en">…</div>`,
   one `<div class="tr">…</div>`; the optional `<details>` block creates the
   collapsible "Read more".
4. Check the **publish date** (controls ordering), then **Publish**.

## 2. Creating an event

Events appear in the "Kalender" section – future dates on top, past ones move
automatically to "Past events" (3 shown, the rest behind a button).

1. Admin: **Veranstaltungen → Neue Veranstaltung**
2. **Title:** plain German (internal overview only)
3. Add a **Custom HTML block** with the template from §2 above
   (`<h4>` trilingual title, `<p class="loc">` location, one `<p>` per language).
4. **Set the date** in the **Custom Fields** box at the bottom (if hidden:
   top-right ⋮ → *Preferences* → *Panels* → enable "Custom fields"):
   name `ewb_event_date`, value `YYYY-MM-DD`, e.g. `2026-06-25`.
5. **Publish.** The field controls placement, ordering and the date badge
   (day + month in all three languages, automatic).

## 3. Adding a press clipping

1. Admin: **Pressespiegel → Neuer Presseartikel**
2. **Title:** the article's original headline (plain text)
3. In **Custom Fields** add: `ewb_press_outlet` (e.g. `Tagesspiegel`),
   `ewb_press_url` (the article link), `ewb_press_date_label`
   (free text, e.g. `21.05.2026`, `11/2026` or `2026`).
4. Set the **publish date to the article's date** – it determines the year
   grouping and ordering. Then **Publish**.

## 4. Adding photos to the gallery

The gallery shows **all images in the Media Library**, ordered by upload date
(new photos appear at the end).

1. Admin: **Media → Add New**, upload the photo(s)
2. Click the uploaded image and fill in the **alternative text** (short
   description) – important for accessibility.

## 5. Changing the petition & Telegram links

**Appearance → Customize → "Emmauswald: Links / Kampagne"** – updates the
petition and Telegram URLs everywhere on the site at once.
