# Hungarian inherited translations differences

Translations for Hungarian (`hu`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **30** are translated differently and **3** are
translated only in `hu`. Altogether they cover **14** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `fof-formatting` | [3](#fof-formatting) | 0 |
| `fof-html-errors` | [1](#fof-html-errors) | 0 |
| `fof-moderator-notes` | [2](#fof-moderator-notes) | 0 |
| `fof-oauth` | [3](#fof-oauth) | 0 |
| `fof-pages` | [6](#fof-pages) | 0 |
| `fof-reactions` | [1](#fof-reactions) | 0 |
| `fof-terms` | [1](#fof-terms) | 0 |
| `fof-usercard-stats` | 0 | [2](#fof-usercard-stats-missing) |
| `glowingblue-author-filter` | [1](#glowingblue-author-filter) | 0 |
| `huseyinfiliz-diff` | [1](#huseyinfiliz-diff) | 0 |
| `ianm-gravatar` | [4](#ianm-gravatar) | 0 |
| `ianm-syndication` | [6](#ianm-syndication) | 0 |
| `ralkage-word-counter` | 0 | [1](#ralkage-word-counter-missing) |
| `rob006-last-post-avatar` | [1](#rob006-last-post-avatar) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `hu` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-formatting`

#### [`fof-formatting.admin.plugins.Autoimage`](https://weblate.rob006.net/translate/flarum2/fof-formatting/hu/?q=context%3A%3D%22fof-formatting.admin.plugins.Autoimage%22)

> Convert image URLs into actual images

```diff
-Kép URL-ek átalakítása valódi képekké
+Képek webcímének átalakítása valódi képekké
```

<del>Kép</del><ins>Képek</ins> <del>URL-ek</del><ins>webcímének</ins> átalakítása valódi képekké

#### [`fof-formatting.admin.plugins.Autovideo`](https://weblate.rob006.net/translate/flarum2/fof-formatting/hu/?q=context%3A%3D%22fof-formatting.admin.plugins.Autovideo%22)

> Convert video URLs into playable videos

```diff
-Videó URL-ek átalakítása lejátszható videókká
+Videók webcímének átalakítása lejátszható videókká
```

<del>Videó</del><ins>Videók</ins> <del>URL-ek</del><ins>webcímének</ins> átalakítása lejátszható videókká

#### [`fof-formatting.admin.plugins.PipeTables`](https://weblate.rob006.net/translate/flarum2/fof-formatting/hu/?q=context%3A%3D%22fof-formatting.admin.plugins.PipeTables%22)

> ASCII-style tables

```diff
-ASCII stílusú táblák
+ASCII stílusú táblázatok
```

ASCII stílusú <del>táblák</del><ins>táblázatok</ins>


### `fof-html-errors`

#### [`fof-html-errors.admin.settings.error.503`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/hu/?q=context%3A%3D%22fof-html-errors.admin.settings.error.503%22)

> 503 Service Unavailable (Down For Maintenance)

```diff
-503 Szolgáltatás nem érhető el (Karbantartás)
+503 Szolgáltatás nem érhető el (karbantartás)
```

503 Szolgáltatás nem érhető el <del>(Karbantartás)</del><ins>(karbantartás)</ins>


### `fof-moderator-notes`

#### [`fof-moderator-notes.forum.moderatorNotes.confirm`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/hu/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.confirm%22)

> Are you sure you want to delete this note?

```diff
-Valóban törli ezt a jegyzetet?
+Biztos, hogy törli ezt a jegyzetet?
```

<del>Valóban</del><ins>Biztos, hogy</ins> törli ezt a jegyzetet?

#### [`fof-moderator-notes.forum.moderatorNotes.input_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/hu/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.input_heading%22)

> Enter your notes for &lt;strong&gt;{username}&lt;/strong&gt;, (markdown is supported)

```diff
-Írja be a megjegyzéseit <strong>{username}</strong> számára, (a markdown támogatott)
+Írja be a megjegyzéseit <strong>{username}</strong> számára (a markdown támogatott)
```

Írja be a megjegyzéseit &lt;strong&gt;{username}&lt;/strong&gt; <del>számára,</del><ins>számára</ins> (a markdown támogatott)


### `fof-oauth`

#### [`fof-oauth.admin.settings.providers.callback_url_text`](https://weblate.rob006.net/translate/flarum2/fof-oauth/hu/?q=context%3A%3D%22fof-oauth.admin.settings.providers.callback_url_text%22)

> If necessary, set the callback URL to {url}.

```diff
-Ha szükséges, akkor állítsa a visszahívási URL-t erre: {url}.
+Ha szükséges, akkor állítsa a visszahívási webcímet erre: {url}.
```

Ha szükséges, akkor állítsa a visszahívási <del>URL-t</del><ins>webcímet</ins> erre: {url}.

#### [`fof-oauth.admin.settings.providers.discord.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/hu/?q=context%3A%3D%22fof-oauth.admin.settings.providers.discord.description%22)

> Create an app at {link}. Add the redirect URL in the OAuth2 tab.

```diff
-Hozzon létre egy alkalmazást itt: {link}. Adja meg az átirányítási URL-t az OAuth2 lapon.
+Hozzon létre egy alkalmazást itt: {link}. Adja hozzá az átirányítási webcímet az OAuth2 lapon.
```

Hozzon létre egy alkalmazást itt: {link}. Adja <del>meg</del><ins>hozzá</ins> az átirányítási <del>URL-t</del><ins>webcímet</ins> az OAuth2 lapon.

#### [`fof-oauth.admin.settings.providers.gitlab.domain_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/hu/?q=context%3A%3D%22fof-oauth.admin.settings.providers.gitlab.domain_label%22)

> GitLab Domain

```diff
-GitLab domén
+GitLab domain
```

GitLab <del>domén</del><ins>domain</ins>


### `fof-pages`

#### [`fof-pages.admin.edit_page.delete_page_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-pages/hu/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_confirmation%22)

> Are you sure you want to delete this page?

```diff
-Valóban törli ezt az oldalt?
+Biztos, hogy törli ezt az oldalt?
```

<del>Valóban</del><ins>Biztos, hogy</ins> törli ezt az oldalt?

#### [`fof-pages.admin.pages_list.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-pages/hu/?q=context%3A%3D%22fof-pages.admin.pages_list.empty_text%22)

> It looks like there are no pages here.

```diff
-Úgy látszik nincs egy oldal sem.
+Úgy néz ki, hogy nincs egyetlen oldal sem.
```

Úgy <del>látszik</del><ins>néz ki, hogy</ins> nincs <del>egy</del><ins>egyetlen</ins> oldal sem.

#### [`fof-pages.ref.create_page`](https://weblate.rob006.net/translate/flarum2/fof-pages/hu/?q=context%3A%3D%22fof-pages.ref.create_page%22)

> Create page

```diff
-Oldal létrehozása
+Oldak létrehozása
```

<del>Oldal</del><ins>Oldak</ins> létrehozása

#### [`fof-pages.ref.pages`](https://weblate.rob006.net/translate/flarum2/fof-pages/hu/?q=context%3A%3D%22fof-pages.ref.pages%22)

> Pages

```diff
-Lapok
+Oldalak
```

#### [`fof-pages.ref.slug`](https://weblate.rob006.net/translate/flarum2/fof-pages/hu/?q=context%3A%3D%22fof-pages.ref.slug%22)

> Slug

```diff
-Keresőbarát URL
+Keresőbarát webcím
```

Keresőbarát <del>URL</del><ins>webcím</ins>

#### [`fof-pages.ref.url`](https://weblate.rob006.net/translate/flarum2/fof-pages/hu/?q=context%3A%3D%22fof-pages.ref.url%22)

> URL

```diff
-URL
+Webcím
```


### `fof-reactions`

#### [`fof-reactions.forum.modal.anonymous_count`](https://weblate.rob006.net/translate/flarum2/fof-reactions/hu/?q=context%3A%3D%22fof-reactions.forum.modal.anonymous_count%22)

> {count, plural, one {# anonymous user} other {# anonymous users}}

```diff
-{count} névtelen felhasználó
+{count, plural, one {# névtelen felhasználó} other {# névtelen felhasználó}}
```

<del>{count}</del><ins>{count, plural, one {#</ins> névtelen <del>felhasználó</del><ins>felhasználó} other {# névtelen felhasználó}}</ins>


### `fof-terms`

#### [`fof-terms.admin.policies.export-url-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/hu/?q=context%3A%3D%22fof-terms.admin.policies.export-url-help%22)

> Any user with permission "Export all policies data" can access those URLs to download the list of users who accepted this policy. You can find more details about the available options on the &lt;a&gt;extension wiki&lt;/a&gt;.
>

```diff
-Minden „Összes házirendadat exportálása” jogosultsággal rendelkező felhasználói elérheti ezeket a webcímeket, hogy letöltse a házirendet elfogadó felhasználók listáját. Többet részletet tudhat meg az elérhető lehetőségekről a <a>bővítmény wikijén</a>.
+Minden „Összes házirendadat exportálása” engedéllyel rendelkező felhasználói elérheti ezeket a webcímeket, hogy letöltse a házirendet elfogadó felhasználók listáját. Többet részletet tudhat meg az elérhető lehetőségekről a <a>bővítmény wikijén</a>.

```

Minden „Összes házirendadat exportálása” <del>jogosultsággal</del><ins>engedéllyel</ins> rendelkező felhasználói elérheti ezeket a webcímeket, hogy letöltse a házirendet elfogadó felhasználók listáját. Többet részletet tudhat meg az elérhető lehetőségekről a &lt;a&gt;bővítmény wikijén&lt;/a&gt;.<br />


### `glowingblue-author-filter`

#### [`glowingblue-author-filter.admin.settings.intro`](https://weblate.rob006.net/translate/flarum2/glowingblue-author-filter/hu/?q=context%3A%3D%22glowingblue-author-filter.admin.settings.intro%22)

> Users without the permission &lt;code&gt;Search users&lt;/code&gt; will not see the search box. Set to &lt;code&gt;Everyone&lt;/code&gt; for all users, or whatever your preference level is.

```diff
-A <code>Felhasználók keresése</code> jogosultság nélküli felhasználó nem fogják látni a keresődobozt. Állítsa a <code>Mindenki</code> lehetőségre, hogy az összes felhasználó lássa, vagy állítsa az Önnek megfelelő szintre.
+A <code>Felhasználók keresése</code> engedély nélküli felhasználó nem fogják látni a keresődobozt. Állítsa a <code>Mindenki</code> lehetőségre, hogy az összes felhasználó lássa, vagy állítsa az Önnek megfelelő szintre.
```

A &lt;code&gt;Felhasználók keresése&lt;/code&gt; <del>jogosultság</del><ins>engedély</ins> nélküli felhasználó nem fogják látni a keresődobozt. Állítsa a &lt;code&gt;Mindenki&lt;/code&gt; lehetőségre, hogy az összes felhasználó lássa, vagy állítsa az Önnek megfelelő szintre.


### `huseyinfiliz-diff`

#### [`huseyinfiliz-diff.forum.noDiff`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/hu/?q=context%3A%3D%22huseyinfiliz-diff.forum.noDiff%22)

> No differences found between these two contents.

```diff
-Nem találhatók különbségek a két tartalom között.
+Nem található különbség a két tartalom között.
```

Nem <del>találhatók</del><ins>található</ins> <del>különbségek</del><ins>különbség</ins> a két tartalom között.


### `ianm-gravatar`

#### [`ianm-gravatar.admin.settings.defaults.monsterid_label`](https://weblate.rob006.net/translate/flarum2/ianm-gravatar/hu/?q=context%3A%3D%22ianm-gravatar.admin.settings.defaults.monsterid_label%22)

> monsterid: a generated 'monster' with different colors, faces, etc

```diff
-monsterid: egy előállított „szörny” különböző színekkel, arcokkal, stb.
+monsterid: előállított „szörny” különböző színekkel, arcokkal, stb.
```

monsterid: <del>egy </del>előállított „szörny” különböző színekkel, arcokkal, stb.

#### [`ianm-gravatar.admin.settings.rating.r_label`](https://weblate.rob006.net/translate/flarum2/ianm-gravatar/hu/?q=context%3A%3D%22ianm-gravatar.admin.settings.rating.r_label%22)

> r: may contain such things as harsh profanity, intense violence, nudity, or hard drug use

```diff
-r: durva profanitást, heves erőszakot, meztelenséget vagy keménydrog-használatot tartalmazhat
+r: durva profanitást, heves erőszakot, meztelenséget vagy keménydroghasználatot tartalmazhat
```

r: durva profanitást, heves erőszakot, meztelenséget vagy <del>keménydrog-használatot</del><ins>keménydroghasználatot</ins> tartalmazhat

#### [`ianm-gravatar.admin.settings.replace-flarum-custom.helptext`](https://weblate.rob006.net/translate/flarum2/ianm-gravatar/hu/?q=context%3A%3D%22ianm-gravatar.admin.settings.replace-flarum-custom.helptext%22)

> Replace custom avatars already uploaded to the forum with a Gravatar

```diff
-Az fórumra már feltöltött egyéni profilképek lecserélése a Gravatarra
+A fórumra már feltöltött egyéni profilképek lecserélése Gravatarra
```

<del>Az</del><ins>A</ins> fórumra már feltöltött egyéni profilképek lecserélése<del> a</del> Gravatarra

#### [`ianm-gravatar.admin.settings.replace-flarum-custom.title`](https://weblate.rob006.net/translate/flarum2/ianm-gravatar/hu/?q=context%3A%3D%22ianm-gravatar.admin.settings.replace-flarum-custom.title%22)

> Replace custom avatars uploaded to Forum

```diff
-Az fórumra feltöltött egyéni profilképek lecserélése
+A fórumra feltöltött egyéni profilképek lecserélése
```

<del>Az</del><ins>A</ins> fórumra feltöltött egyéni profilképek lecserélése


### `ianm-syndication`

#### [`ianm-syndication.admin.settings.full-text.help`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/hu/?q=context%3A%3D%22ianm-syndication.admin.settings.full-text.help%22)

> If disabled, feeds will only contain excerpts of posts, and users will have to go to the forum to read everything. I would recommend to leave this option active in order to respect the people following the forum from an RSS aggregator—if any.

```diff
-Ha kikapcsolja, akkor a hírcsatornák csak a bejegyzések kivonatát fogja tartalmazni, és a felhasználóknak oda kell menniük a fórumhoz, hogy minden elolvassanak. Azt javasolnám, hogy hagyja bekapcsolva, hogy tiszteletben tartsa a fórumot RSS aggregátorból követő felhasználókat.
+Ha kikapcsolja, akkor a hírcsatornák csak a bejegyzések kivonatát fogja tartalmazni, és a felhasználóknak oda kell menniük a fórumhoz, hogy mindent elolvassanak. Azt javasolnám, hogy hagyja bekapcsolva, hogy tiszteletben tartsa a fórumot RSS aggregátorból követő felhasználókat.
```

Ha kikapcsolja, akkor a hírcsatornák csak a bejegyzések kivonatát fogja tartalmazni, és a felhasználóknak oda kell menniük a fórumhoz, hogy <del>minden</del><ins>mindent</ins> elolvassanak. Azt javasolnám, hogy hagyja bekapcsolva, hogy tiszteletben tartsa a fórumot RSS aggregátorból követő felhasználókat.

#### [`ianm-syndication.forum.autodiscovery.tag_activity`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/hu/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.tag_activity%22)

> Activity for the {tag} tag

```diff
-A(z) {tag} új tevékenységei
+A(z) {tag} címke új tevékenységei
```

A(z) {tag} <ins>címke </ins>új tevékenységei

#### [`ianm-syndication.forum.autodiscovery.tag_new_discussions`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/hu/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.tag_new_discussions%22)

> Discussions in the {tag} tag

```diff
-A(z) {tag} új témái
+A(z) {tag} címke új témái
```

A(z) {tag} <ins>címke </ins>új témái

#### [`ianm-syndication.forum.feeds.titles.tag_d_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/hu/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_d_subtitle%22)

> The newest discussions in the {tag} tag

```diff
-A(z) {tag} legújabb témái
+A(z) {tag} címke legújabb témái
```

A(z) {tag} <ins>címke </ins>legújabb témái

#### [`ianm-syndication.forum.feeds.titles.tag_d_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/hu/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_d_title%22)

> New discussions in the {tag} tag

```diff
-A(z) {tag} új témái
+A(z) {tag} címke új témái
```

A(z) {tag} <ins>címke </ins>új témái

#### [`ianm-syndication.forum.feeds.titles.tag_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/hu/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_title%22)

> Activity in the {tag} tag

```diff
-A(z) {tag} tevékenységei
+A(z) {tag} címke tevékenységei
```

A(z) {tag} <ins>címke </ins>tevékenységei


### `rob006-last-post-avatar`

#### [`rob006-last-post-avatar.admin.settings.mode.help`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/hu/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.mode.help%22)

> Select when and where avatar of last post author should be shown on discussions list. Check README to see visualisation of each option.

```diff
-Válassza ki, hogy az utolsó bejegyzés szerzőjének profilképe hol jelenjem meg a témalistában. Nézze meg a README fájlt az összes lehetőség vizualizációja megtekintéséhez.
+Válassza ki, hogy az utolsó bejegyzés szerzőjének profilképe hol jelenjen meg a témalistában. Nézze meg a README fájlt az összes lehetőség vizualizációja megtekintéséhez.
```

Válassza ki, hogy az utolsó bejegyzés szerzőjének profilképe hol <del>jelenjem</del><ins>jelenjen</ins> meg a témalistában. Nézze meg a README fájlt az összes lehetőség vizualizációja megtekintéséhez.


## Missing translations

These strings are translated only in `hu`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `hu`.


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/hu/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+{count, plural, one { {count} téma} other {{count} téma}}
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/hu/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+{count, plural, one { {count} bejegyzés} other {{count} bejegyzés}}
```


### `ralkage-word-counter` (missing)

#### [`ralkage-word-counter.forum.composer.word_counter`](https://weblate.rob006.net/translate/flarum2/ralkage-word-counter/hu/?q=context%3A%3D%22ralkage-word-counter.forum.composer.word_counter%22)

> {words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}

```diff
+{words, plural, one {{words} szó} other {{words} szó}}, {chars, plural, one {{chars} karakter} other {{chars} karakter}}
```

<!-- {% endraw %} -->
