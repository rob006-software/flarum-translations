# Croatian inherited translations differences

Translations for Croatian (`hr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **249** are translated differently and **33** are
translated only in `hr`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [249](#core) | [33](#core-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `hr` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.appearance.colors_primary_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.colors_primary_label%22)

> Primary Color

```diff
-Primarna barva
+Primarna boja
```

Primarna <del>barva</del><ins>boja</ins>

#### [`core.admin.appearance.colors_secondary_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.colors_secondary_label%22)

> Secondary Color

```diff
-Sekundarna barva
+Sekundarna boja
```

Sekundarna <del>barva</del><ins>boja</ins>

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Odaberite dvije boje za temu foruma. Prva će se koristiti kao glavna boja, dok će se druga koristiti za stiliziranje pozadinskih elemenata.
+Odaberite dvije boje za temu foruma. Prva će se koristiti kao istaknuta boja, a druga za oblikovanje pozadinskih elemenata.
```

Odaberite dvije boje za temu foruma. Prva će se koristiti kao <del>glavna</del><ins>istaknuta</ins> boja,<del> dok će</del> <del>se</del><ins>a</ins> druga<del> koristiti</del> za <del>stiliziranje</del><ins>oblikovanje</ins> pozadinskih elemenata.

#### [`core.admin.appearance.custom_footer_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.custom_footer_heading%22)

> Custom Footer

```diff
-Vlastito podnožje
+Prilagođeno podnožje
```

<del>Vlastito</del><ins>Prilagođeno</ins> podnožje

#### [`core.admin.appearance.custom_header_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.custom_header_heading%22)

> Custom Header

```diff
-Vlastito zaglavlje
+Prilagođeno zaglavlje
```

<del>Vlastito</del><ins>Prilagođeno</ins> zaglavlje

#### [`core.admin.appearance.custom_styles_cannot_use_less_features`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.custom_styles_cannot_use_less_features%22)

> The @import and data-uri features are not allowed in custom LESS.

```diff
-@import in data-uri funkcije niso dovoljene v prilagojenem less.
+Značajke @import i data-uri nisu dopuštene u prilagođenom LESS-u.
```

<ins>Značajke </ins>@import <del>in</del><ins>i</ins> data-uri<del> funkcije</del> <del>niso</del><ins>nisu</ins> <del>dovoljene</del><ins>dopuštene</ins> <del>v</del><ins>u</ins> <del>prilagojenem</del><ins>prilagođenom</ins> <del>less.</del><ins>LESS-u.</ins>

#### [`core.admin.appearance.custom_styles_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.custom_styles_heading%22)

> Custom Styles

```diff
-Vlastiti stil
+Prilagođeni stilovi
```

#### [`core.admin.appearance.custom_styles_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.custom_styles_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's default styles.

```diff
-Dodajte vlastiti Less/CSS kod koji će se primijeniti nakon Flarumovog zadanog stila kako bi prilagodili izgled vašeg foruma.
+Prilagodite izgled foruma dodavanjem vlastitog Less/CSS koda koji će se primijeniti povrh Flarumovih zadanih stilova.
```

<del>Dodajte</del><ins>Prilagodite</ins> <del>vlastiti</del><ins>izgled foruma dodavanjem vlastitog</ins> Less/CSS <del>kod</del><ins>koda</ins> koji će se primijeniti<del> nakon Flarumovog zadanog stila kako bi</del> <del>prilagodili</del><ins>povrh</ins> <del>izgled</del><ins>Flarumovih</ins> <del>vašeg</del><ins>zadanih</ins> <del>foruma.</del><ins>stilova.</ins>

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Prilagodite boje, logoe i druge varijablje vašeg foruma.
+Prilagodite boje, logotipe i druge varijable foruma.
```

Prilagodite boje, <del>logoe</del><ins>logotipe</ins> i druge<del> varijablje</del> <del>vašeg</del><ins>varijable</ins> foruma.

#### [`core.admin.appearance.edit_css_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.edit_css_button%22)

> Edit Custom CSS

```diff
-Uredi vlastiti CSS
+Uredi prilagođeni CSS
```

Uredi <del>vlastiti</del><ins>prilagođeni</ins> CSS

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Unesite boju u heksadekadskom obliku, molimo.
+Unesite heksadecimalni kod boje.
```

Unesite <del>boju u heksadekadskom</del><ins>heksadecimalni</ins> <del>obliku,</del><ins>kod</ins> <del>molimo.</del><ins>boje.</ins>

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Predajte sliku koja će se prikazivati kao ikona kratica foruma.
+Prenesite sliku koja će se prikazivati kao ikona prečaca foruma.
```

<del>Predajte</del><ins>Prenesite</ins> sliku koja će se prikazivati kao ikona <del>kratica</del><ins>prečaca</ins> foruma.

#### [`core.admin.appearance.logo_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.logo_heading%22)

> Logo

```diff
-Logo
+Logotip
```

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Predajte sliku koja će se prikazivati kao naslov foruma.
+Prenesite sliku koja će se prikazivati umjesto naslova foruma.
```

<del>Predajte</del><ins>Prenesite</ins> sliku koja će se prikazivati <del>kao</del><ins>umjesto</ins> <del>naslov</del><ins>naslova</ins> foruma.

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Postavite naslov, jezik i ostale osnovne postavke foruma.
+Postavite naslov foruma, jezik i ostale osnovne postavke.
```

Postavite <del>naslov,</del><ins>naslov foruma,</ins> jezik i ostale osnovne<del> postavke</del> <del>foruma.</del><ins>postavke.</ins>

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Odaberite što će se koristiti za prikaz imena korisnika. Zadano je da se prikazuje korisničko ime.
+Odaberite upravljački program koji će se koristiti za prikazana imena korisnika. Zadano se prikazuje korisničko ime.
```

Odaberite <del>što</del><ins>upravljački program koji</ins> će se koristiti za <del>prikaz</del><ins>prikazana</ins> imena korisnika. Zadano<del> je da</del> se prikazuje korisničko ime.

#### [`core.admin.basics.home_page_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.home_page_heading%22)

> Home Page

```diff
-Naslovnica
+Početna stranica
```

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Odaberite stranicu koju će korisnici prvotno vidjeti prilikom posjeteta vašem forumu.
+Odaberite stranicu koju će korisnici prvo vidjeti kada posjete vaš forum.
```

Odaberite stranicu koju će korisnici <del>prvotno</del><ins>prvo</ins> vidjeti <del>prilikom</del><ins>kada</ins> <del>posjeteta</del><ins>posjete</ins> <del>vašem</del><ins>vaš</ins> <del>forumu.</del><ins>forum.</ins>

#### [`core.admin.basics.show_language_selector_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.show_language_selector_label%22)

> Show language selector

```diff
-Prikaži izbornik jezika
+Prikaži birač jezika
```

Prikaži <del>izbornik</del><ins>birač</ins> jezika

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-Kratičnik: {model}
+Upravljački program sluga: {model}
```

<del>Kratičnik:</del><ins>Upravljački program sluga:</ins> {model}

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Odaberiti upravljač koji će biti kratičnik ovog modela.
+Odaberite upravljački program koji će se koristiti za izradu sluga ovog modela.
```

<del>Odaberiti</del><ins>Odaberite</ins> <del>upravljač</del><ins>upravljački program</ins> koji će <del>biti</del><ins>se</ins> <del>kratičnik</del><ins>koristiti za izradu sluga</ins> ovog modela.

#### [`core.admin.basics.welcome_banner_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.welcome_banner_heading%22)

> Welcome Banner

```diff
-Dobrodošlica
+Natpis dobrodošlice
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Prilagodite tekst koji će se prikazivati u dobrodošlici na stranici Sve raspave.Koristite ovo za izražavanje dobrodošlice gostima vašeg foruma.
+Konfigurirajte tekst koji se prikazuje u natpisu na stranici Sve rasprave. Upotrijebite ga za dobrodošlicu gostima na forum.
```

<del>Prilagodite</del><ins>Konfigurirajte</ins> tekst koji<del> će</del> se <del>prikazivati</del><ins>prikazuje</ins> u <del>dobrodošlici</del><ins>natpisu</ins> na stranici Sve <del>raspave.Koristite</del><ins>rasprave.</ins> <del>ovo</del><ins>Upotrijebite</ins> <del>za</del><ins>ga</ins> <del>izražavanje</del><ins>za</ins> <del>dobrodošlice</del><ins>dobrodošlicu</ins> gostima <del>vašeg</del><ins>na</ins> <del>foruma.</del><ins>forum.</ins>

#### [`core.admin.create_user.email_confirmed_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.create_user.email_confirmed_label%22)

> Require user to confirm this email

```diff
-Zahtevaj, da uporabnik potrdi ta email
+Zahtijevaj od korisnika potvrdu ove e-mail adrese
```

#### [`core.admin.create_user.submit_and_create_another_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.create_user.submit_and_create_another_button%22)

> Create and add another

```diff
-Ustvari in dodaj drugega
+Stvori i dodaj još jednog
```

<del>Ustvari</del><ins>Stvori</ins> <del>in</del><ins>i</ins> dodaj <del>drugega</del><ins>još jednog</ins>

#### [`core.admin.create_user.submit_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.create_user.submit_button%22)

> Create user

```diff
-Ustvari uporabnika
+Stvori korisnika
```

#### [`core.admin.create_user.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.create_user.title%22)

> Create new user

```diff
-Ustvari novega uporabnika
+Stvori novog korisnika
```

#### [`core.admin.create_user.use_random_password`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.create_user.use_random_password%22)

> Generate random password

```diff
-Ustvari naključno geslo
+Generiraj nasumičnu zaporku
```

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-Ni mogoče zapisati v datotečni sistem. Preverite dovoljenja datotečnega sistema in poskusite znova. Ali pa poskusite zagnati iz ukazne vrstice.
+Nije moguće pisati u datotečni sustav. Provjerite dozvole datotečnog sustava i pokušajte ponovno. Ili pokušajte pokrenuti naredbu iz naredbenog retka.
```

<del>Ni</del><ins>Nije</ins> <del>mogoče</del><ins>moguće</ins> <del>zapisati</del><ins>pisati</ins> <del>v</del><ins>u</ins> datotečni <del>sistem.</del><ins>sustav.</ins> <del>Preverite</del><ins>Provjerite</ins> <del>dovoljenja</del><ins>dozvole</ins> <del>datotečnega</del><ins>datotečnog</ins> <del>sistema</del><ins>sustava</ins> <del>in</del><ins>i</ins> <del>poskusite</del><ins>pokušajte</ins> <del>znova.</del><ins>ponovno.</ins> <del>Ali</del><ins>Ili</ins> <del>pa</del><ins>pokušajte</ins> <del>poskusite</del><ins>pokrenuti</ins> <del>zagnati</del><ins>naredbu</ins> iz <del>ukazne</del><ins>naredbenog</ins> <del>vrstice.</del><ins>retka.</ins>

#### [`core.admin.dashboard.status.headers.queue-driver`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.status.headers.queue-driver%22)

> Queue Driver

```diff
-Gonilnik vrste
+Upravljački program reda čekanja
```

#### [`core.admin.dashboard.status.headers.scheduler-status`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.status.headers.scheduler-status%22)

> Scheduler

```diff
-Načrtovalec
+Raspoređivač
```

#### [`core.admin.dashboard.status.headers.session-driver`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.status.headers.session-driver%22)

> Session Driver

```diff
-Gonilnik seje
+Upravljački program sesije
```

#### [`core.admin.dashboard.status.scheduler.active`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.active%22)

> Active

```diff
-Aktiven
+Aktivno
```

#### [`core.admin.dashboard.status.scheduler.inactive`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.inactive%22)

> Inactive

```diff
-Neaktiven
+Neaktivno
```

#### [`core.admin.dashboard.status.scheduler.never-run`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.never-run%22)

> Never run

```diff
-Nikoli zagnano
+Nikad pokrenuto
```

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-Ko je <code>debug</code> način aktiven, bo Flarum ob vsaki zahtevi znova sestavil svoje <code>JavaScript</code> in <code>CSS</code> vire ter lahko tudi po nesreči razkril druge podatke, kot so skrivnosti baze podatkov, okoljske spremenljivke itd.
+Kada je način <code>debug</code> uključen, Flarum će pri svakom zahtjevu ponovno izgraditi svoje <code>JavaScript</code> i <code>CSS</code> resurse te može potencijalno otkriti i druge podatke, poput tajni baze podataka, varijabli okruženja i slično.

-Močno priporočamo, da onemogočite <code>debug</code> v vaši datoteki <code>config.php</code> v produkciji. Za več informacij si oglejte <link>flarum docs</link>.
+Preporučuje se isključiti <code>debug</code> u datoteci <code>config.php</code> u produkcijskom okruženju. Više informacija potražite u <link>Flarum dokumentaciji</link>.

```

<del>Ko</del><ins>Kada</ins> je<del> &lt;code&gt;debug&lt;/code&gt;</del> način <del>aktiven,</del><ins>&lt;code&gt;debug&lt;/code&gt;</ins> <del>bo</del><ins>uključen,</ins> Flarum <del>ob</del><ins>će</ins> <del>vsaki</del><ins>pri</ins> <del>zahtevi</del><ins>svakom</ins> <del>znova</del><ins>zahtjevu</ins> <del>sestavil</del><ins>ponovno izgraditi</ins> svoje &lt;code&gt;JavaScript&lt;/code&gt; <del>in</del><ins>i</ins> &lt;code&gt;CSS&lt;/code&gt;<del> vire</del> <del>ter</del><ins>resurse</ins> <del>lahko</del><ins>te</ins> <del>tudi</del><ins>može</ins> <del>po</del><ins>potencijalno</ins> <del>nesreči</del><ins>otkriti</ins> <del>razkril</del><ins>i</ins> druge podatke,<del> kot</del> <del>so</del><ins>poput</ins> <del>skrivnosti</del><ins>tajni</ins> baze <del>podatkov,</del><ins>podataka,</ins> <del>okoljske</del><ins>varijabli</ins> <del>spremenljivke</del><ins>okruženja</ins> <del>itd.<br /><br />Močno</del><ins>i</ins> <del>priporočamo,</del><ins>slično.<br /><br />Preporučuje</ins> <del>da</del><ins>se</ins> <del>onemogočite</del><ins>isključiti</ins> &lt;code&gt;debug&lt;/code&gt;<del> v</del> <del>vaši</del><ins>u</ins> <del>datoteki</del><ins>datoteci</ins> &lt;code&gt;config.php&lt;/code&gt; <del>v</del><ins>u</ins> <del>produkciji.</del><ins>produkcijskom</ins> <del>Za</del><ins>okruženju.</ins> <del>več</del><ins>Više</ins> <del>informacij</del><ins>informacija</ins> <del>si</del><ins>potražite</ins> <del>oglejte</del><ins>u</ins> <del>&lt;link&gt;flarum</del><ins>&lt;link&gt;Flarum</ins> <del>docs&lt;/link&gt;.</del><ins>dokumentaciji&lt;/link&gt;.</ins><br />

#### [`core.admin.debug-warning.label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.debug-warning.label%22)

> Debug mode active

```diff
-Debug način aktiven
+Debug način je uključen
```

Debug način <del>aktiven</del><ins>je uključen</ins>

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Dodajte vlastiti Less/CSS kod koji će se primijeniti nakon Flarumovog <a>zadanog stila</a> kako bi prilagodili izgled vašeg foruma.
+Prilagodite izgled foruma dodavanjem vlastitog Less/CSS koda koji će se primijeniti povrh Flarumovih <a>zadanih stilova</a>.
```

<del>Dodajte</del><ins>Prilagodite</ins> <del>vlastiti</del><ins>izgled foruma dodavanjem vlastitog</ins> Less/CSS <del>kod</del><ins>koda</ins> koji će se primijeniti<del> nakon Flarumovog &lt;a&gt;zadanog stila&lt;/a&gt; kako bi</del> <del>prilagodili</del><ins>povrh</ins> <del>izgled</del><ins>Flarumovih</ins> <del>vašeg</del><ins>&lt;a&gt;zadanih</ins> <del>foruma.</del><ins>stilova&lt;/a&gt;.</ins>

#### [`core.admin.edit_css.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.edit_css.title%22)

> Edit Custom CSS

```diff
-Uredi vlastiti CSS
+Uredi prilagođeni CSS
```

Uredi <del>vlastiti</del><ins>prilagođeni</ins> CSS

#### [`core.admin.edit_group.delete_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.edit_group.delete_button%22)

> Delete Group

```diff
-Ukloni skupinu
+Obriši skupinu
```

<del>Ukloni</del><ins>Obriši</ins> skupinu

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-Jeste li sigurni da želite obrisati ovu skupinu? Pripadnici skupine NEĆE biti obrisani.
+Jeste li sigurni da želite obrisati ovu skupinu? Članovi skupine NEĆE biti obrisani.
```

Jeste li sigurni da želite obrisati ovu skupinu? <del>Pripadnici</del><ins>Članovi</ins> skupine NEĆE biti obrisani.

#### [`core.admin.edit_group.plural_placeholder`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.edit_group.plural_placeholder%22)

> Plural (e.g. Mods)

```diff
-Množina (npr. moderatori)
+Množina (npr. Moderatori)
```

Množina (npr. <del>moderatori)</del><ins>Moderatori)</ins>

#### [`core.admin.edit_group.singular_placeholder`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.edit_group.singular_placeholder%22)

> Singular (e.g. Mod)

```diff
-Jednina (npr. moderator)
+Jednina (npr. Moderator)
```

Jednina (npr. <del>moderator)</del><ins>Moderator)</ins>

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Prilagodite upravljač, postavke i adrese koje će vaš forum koristiti za slanje e-mailova.
+Konfigurirajte upravljački program, postavke i adrese koje će vaš forum koristiti za slanje e-pošte.
```

<del>Prilagodite</del><ins>Konfigurirajte</ins> <del>upravljač,</del><ins>upravljački program,</ins> postavke i adrese koje će vaš forum koristiti za slanje <del>e-mailova.</del><ins>e-pošte.</ins>

#### [`core.admin.email.driver_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.driver_heading%22)

> Choose a Driver

```diff
-Odaberi upravljač
+Odaberi upravljački program
```

Odaberi <del>upravljač</del><ins>upravljački program</ins>

#### [`core.admin.email.driver_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.driver_label%22)

> Driver

```diff
-Upravljač
+Upravljački program
```

#### [`core.admin.email.mail_encryption_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.mail_encryption_label%22)

> Encryption

```diff
-Enkripcija
+Šifriranje
```

#### [`core.admin.email.mail_host_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.mail_host_label%22)

> Host

```diff
-Host
+Poslužitelj
```

#### [`core.admin.email.mail_port_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.mail_port_label%22)

> Port

```diff
-Vrata
+Port
```

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Trenutno Flarum ne šalje e-mailove. Razlog tome mogao bi biti odabrani upravljač, ili greške u postavkama istog.
+Flarum trenutačno ne šalje e-poštu. Razlog može biti odabrani upravljački program ili pogreška u njegovoj konfiguraciji.
```

<del>Trenutno </del>Flarum<ins> trenutačno</ins> ne šalje <del>e-mailove.</del><ins>e-poštu.</ins> Razlog<del> tome mogao</del> <del>bi</del><ins>može</ins> biti odabrani <del>upravljač,</del><ins>upravljački program</ins> ili <del>greške</del><ins>pogreška</ins> u <del>postavkama</del><ins>njegovoj</ins> <del>istog.</del><ins>konfiguraciji.</ins>

#### [`core.admin.email.send_test_mail_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.send_test_mail_heading%22)

> Send Test Mail

```diff
-Pošalji probni e-mail
+Pošalji probnu e-poštu
```

Pošalji <del>probni</del><ins>probnu</ins> <del>e-mail</del><ins>e-poštu</ins>

#### [`core.admin.email.send_test_mail_success`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.send_test_mail_success%22)

> Test mail sent successfully!

```diff
-Probni e-mail je uspješno poslan!
+Probna e-pošta uspješno je poslana!
```

<del>Probni e-mail</del><ins>Probna</ins> <del>je</del><ins>e-pošta</ins> uspješno <del>poslan!</del><ins>je poslana!</ins>

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-Ovim će se poslati e-mail koristeći postavke iznad na {email}.
+Ovim će se poslati e-pošta koristeći gornju konfiguraciju na vašu adresu {email}.
```

Ovim će se poslati <del>e-mail</del><ins>e-pošta</ins> koristeći <del>postavke</del><ins>gornju</ins> <del>iznad</del><ins>konfiguraciju</ins> na<ins> vašu adresu</ins> {email}.

#### [`core.admin.extension.configure_scopes`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.configure_scopes%22)

> Configure Scopes

```diff
-Prilagodi djelokrug
+Konfiguriraj opsege
```

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Čiščenje bo odstranilo vse vnose v bazi podatkov in sredstva, povezana z razširitvijo. Ne bo odstranilo razširitve; to je treba storiti prek composerja. Ali ste prepričani, da želite nadaljevati?
+Čišćenjem će se ukloniti svi zapisi iz baze podataka i resursi povezani s proširenjem. Proširenje se neće deinstalirati; to morate učiniti putem Composera. Jeste li sigurni da želite nastaviti?
```

<del>Čiščenje</del><ins>Čišćenjem</ins> <del>bo</del><ins>će</ins> <del>odstranilo</del><ins>se</ins> <del>vse</del><ins>ukloniti</ins> <del>vnose</del><ins>svi</ins> <del>v</del><ins>zapisi</ins> <del>bazi</del><ins>iz</ins> <del>podatkov</del><ins>baze</ins> <del>in</del><ins>podataka</ins> <del>sredstva,</del><ins>i</ins> <del>povezana</del><ins>resursi</ins> <del>z</del><ins>povezani</ins> <del>razširitvijo.</del><ins>s</ins> <del>Ne</del><ins>proširenjem.</ins> <del>bo</del><ins>Proširenje</ins> <del>odstranilo</del><ins>se</ins> <del>razširitve;</del><ins>neće</ins> <del>to</del><ins>deinstalirati;</ins> <del>je</del><ins>to</ins> <del>treba</del><ins>morate</ins> <del>storiti</del><ins>učiniti</ins> <del>prek</del><ins>putem</ins> <del>composerja.</del><ins>Composera.</ins> <del>Ali</del><ins>Jeste</ins> <del>ste</del><ins>li</ins> <del>prepričani,</del><ins>sigurni</ins> da želite <del>nadaljevati?</del><ins>nastaviti?</ins>

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Omogućite proširenje kako bi mogli pregledavati i izmjenjivati postavke.
+Omogućite proširenje kako biste mogli pregledavati i mijenjati postavke.
```

Omogućite proširenje kako <del>bi</del><ins>biste</ins> mogli pregledavati i <del>izmjenjivati</del><ins>mijenjati</ins> postavke.

#### [`core.admin.extension.info_links.donate`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.info_links.donate%22)

> Donate

```diff
-Donacije
+Doniraj
```

#### [`core.admin.extension.info_links.source`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.info_links.source%22)

> Source

```diff
-Izvornik
+Izvorni kod
```

#### [`core.admin.extension.info_links.website`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.info_links.website%22)

> Website

```diff
-web stranica
+Web-stranica
```

#### [`core.admin.extension.no_permissions`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.no_permissions%22)

> This extension has no permissions.

```diff
-Ovo proširenje nema dozvole.
+Ovo proširenje nema dozvola.
```

Ovo proširenje nema <del>dozvole.</del><ins>dozvola.</ins>

#### [`core.admin.extension.purge_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.purge_button%22)

> Purge

```diff
-Počisti
+Očisti
```

#### [`core.admin.extension.readme.no_readme`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.readme.no_readme%22)

> This extension does not appear to have a README file

```diff
-Ta razširitev ne vsebuje README datoteke
+Čini se da ovo proširenje nema README datoteku
```

<del>Ta</del><ins>Čini</ins> <del>razširitev</del><ins>se</ins> <del>ne</del><ins>da</ins> <del>vsebuje</del><ins>ovo proširenje nema</ins> README <del>datoteke</del><ins>datoteku</ins>

#### [`core.admin.extension.readme.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.readme.title%22)

> {extName} documentation

```diff
-{extName} dokumentacija
+Dokumentacija za {extName}
```

#### [`core.admin.header.get_help`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.header.get_help%22)

> Get Help

```diff
-Pomoć
+Zatraži pomoć
```

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Strpljenje, molimo...
+Pričekajte...
```

#### [`core.admin.nav.categories.authentication`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.nav.categories.authentication%22)

> Authentication

```diff
-Ovjera
+Autentikacija
```

#### [`core.admin.nav.categories.core`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.nav.categories.core%22)

> Core Configuration

```diff
-Postavke jezgre
+Konfiguracija jezgre
```

<del>Postavke</del><ins>Konfiguracija</ins> jezgre

#### [`core.admin.nav.categories.discussion`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.nav.categories.discussion%22)

> Discussion

```diff
-Rasprave
+Rasprava
```

#### [`core.admin.permissions.allow_hide_own_posts_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.allow_hide_own_posts_label%22)

> Allow deleting own posts

```diff
-Dovoli brisanje lastnih objav
+Dopusti brisanje vlastitih objava
```

<del>Dovoli</del><ins>Dopusti</ins> brisanje <del>lastnih</del><ins>vlastitih</ins> <del>objav</del><ins>objava</ins>

#### [`core.admin.permissions.allow_post_editing_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.allow_post_editing_label%22)

> Allow post editing

```diff
-Dozvoli uređivanje objava
+Dopusti uređivanje objava
```

<del>Dozvoli</del><ins>Dopusti</ins> uređivanje objava

#### [`core.admin.permissions.allow_renaming_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.allow_renaming_label%22)

> Allow renaming

```diff
-Dozvoli preimenovanje
+Dopusti preimenovanje
```

<del>Dozvoli</del><ins>Dopusti</ins> preimenovanje

#### [`core.admin.permissions.create_access_token_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.create_access_token_label%22)

> Create access token

```diff
-Ustvari dostopni žeton
+Stvori pristupni token
```

#### [`core.admin.permissions.create_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.create_heading%22)

> Create

```diff
-Stvaranje
+Stvori
```

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-Brisanje rasprava zauvijek
+Trajno obriši rasprave
```

#### [`core.admin.permissions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.delete_discussions_label%22)

> Delete discussions

```diff
-Brisanje rasprava
+Obriši rasprave
```

#### [`core.admin.permissions.delete_posts_forever_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.delete_posts_forever_label%22)

> Delete posts forever

```diff
-Brisanje objava zauvijek
+Trajno obriši objave
```

#### [`core.admin.permissions.delete_posts_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.delete_posts_label%22)

> Delete posts

```diff
-Brisanje objava
+Obriši objave
```

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-Prilagodi tko može pregledavati i činiti što.
+Konfigurirajte tko što može vidjeti i raditi.
```

<del>Prilagodi</del><ins>Konfigurirajte</ins> tko<ins> što</ins> može <del>pregledavati</del><ins>vidjeti</ins> i<del> činiti</del> <del>što.</del><ins>raditi.</ins>

#### [`core.admin.permissions.edit_posts_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.edit_posts_label%22)

> Edit posts

```diff
-Uređivanje objava
+Uredi objave
```

#### [`core.admin.permissions.edit_users_credentials_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.edit_users_credentials_label%22)

> Edit user credentials

```diff
-Uređivanje korisničkih vjerodajnica
+Uredi korisničke vjerodajnice
```

#### [`core.admin.permissions.edit_users_groups_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.edit_users_groups_label%22)

> Edit user groups

```diff
-Uređivanje skupina korisnika
+Uredi korisničke skupine
```

#### [`core.admin.permissions.edit_users_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.edit_users_label%22)

> Edit user attributes

```diff
-Uređivanje svojstava korisnika
+Uredi svojstva korisnika
```

<del>Uređivanje</del><ins>Uredi</ins> <del>svojstava</del><ins>svojstva</ins> korisnika

#### [`core.admin.permissions.moderate_access_tokens_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.moderate_access_tokens_label%22)

> Moderate Access Tokens

```diff
-Moderiraj dostopne žetone
+Moderiraj pristupne tokene
```

Moderiraj <del>dostopne</del><ins>pristupne</ins> <del>žetone</del><ins>tokene</ins>

#### [`core.admin.permissions.moderate_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.moderate_heading%22)

> Moderate

```diff
-Moderacija
+Moderiraj
```

#### [`core.admin.permissions.post_without_throttle_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.post_without_throttle_label%22)

> Reply multiple times without waiting

```diff
-Uzastopno odgovaranje bez čekanja
+Odgovaraj više puta bez čekanja
```

<del>Uzastopno</del><ins>Odgovaraj</ins> <del>odgovaranje</del><ins>više puta</ins> bez čekanja

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-Preimenovanje rasprava
+Preimenuj rasprave
```

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-Odgovaranje na rasprave
+Odgovaraj na rasprave
```

<del>Odgovaranje</del><ins>Odgovaraj</ins> na rasprave

#### [`core.admin.permissions.search_users_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.search_users_label%22)

> =&gt; core.ref.search\_users

```diff
-Pretraživanje korisnika
+=> core.ref.search_users
```

#### [`core.admin.permissions.sign_up_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.sign_up_label%22)

> Sign up

```diff
-Pridruživanje
+Registracija
```

#### [`core.admin.permissions.start_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.start_discussions_label%22)

> Start discussions

```diff
-Započimanje rasprave
+Pokretanje rasprava
```

#### [`core.admin.permissions.view_forum_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.view_forum_label%22)

> View forum (discussions and users)

```diff
-Pregledavanje foruma (rasprava i korisnika)
+Pregled foruma (rasprave i korisnici)
```

<del>Pregledavanje</del><ins>Pregled</ins> foruma <del>(rasprava</del><ins>(rasprave</ins> i <del>korisnika)</del><ins>korisnici)</ins>

#### [`core.admin.permissions.view_hidden_groups_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.view_hidden_groups_label%22)

> View hidden group badges

```diff
-Pregledavanje skrivene značke skupina
+Pregled skrivenih znački skupina
```

<del>Pregledavanje</del><ins>Pregled</ins> <del>skrivene</del><ins>skrivenih</ins> <del>značke</del><ins>znački</ins> skupina

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Uvijek imaj uvid u posljednje viđenje korisnika
+Uvijek vidi vrijeme posljednje aktivnosti korisnika
```

Uvijek <del>imaj uvid</del><ins>vidi</ins> <del>u</del><ins>vrijeme</ins> posljednje <del>viđenje</del><ins>aktivnosti</ins> korisnika

#### [`core.admin.permissions.view_post_ips_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions.view_post_ips_label%22)

> View post IP addresses

```diff
-Pregledavanje IP adrese objava
+Pregled IP adresa objava
```

<del>Pregledavanje</del><ins>Pregled</ins> IP <del>adrese</del><ins>adresa</ins> objava

#### [`core.admin.permissions_controls.allow_indefinitely_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions_controls.allow_indefinitely_button%22)

> Indefinitely

```diff
-Na neodređeno
+Neograničeno
```

#### [`core.admin.permissions_controls.allow_some_minutes_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions_controls.allow_some_minutes_button%22)

> {count, plural, one {For # minute} other {For # minutes}}

```diff
-{count, plural, one {Na # minutu} other {Na # minuta}}
+{count, plural, one {Na # minutu} few {Na # minute} other {Na # minuta}}
```

{count, plural, one {Na # minutu} <ins>few {Na # minute} </ins>other {Na # minuta}}

#### [`core.admin.permissions_controls.signup_closed_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions_controls.signup_closed_button%22)

> Closed

```diff
-Onemogućeno
+Zatvoreno
```

#### [`core.admin.permissions_controls.signup_open_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.permissions_controls.signup_open_button%22)

> Open

```diff
-Omogućeno
+Otvoreno
```

#### [`core.admin.settings.saved_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.settings.saved_message%22)

> Your changes were saved.

```diff
-Vaše promjene su pohranjene.
+Vaše su promjene spremljene.
```

Vaše <del>promjene </del>su <del>pohranjene.</del><ins>promjene spremljene.</ins>

#### [`core.admin.users.create_user_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.users.create_user_button%22)

> New User

```diff
-Nov uporabnik
+Novi korisnik
```

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-Straničen popis svih korisnika na vašem forumu.
+Straničeni popis svih korisnika na vašem forumu.
```

<del>Straničen</del><ins>Straničeni</ins> popis svih korisnika na vašem forumu.

#### [`core.admin.users.grid.columns.display_name.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.users.grid.columns.display_name.title%22)

> Display name

```diff
-Prikazno ime
+Prikazano ime
```

<del>Prikazno</del><ins>Prikazano</ins> ime

#### [`core.admin.users.grid.columns.group_badges.no_badges`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.users.grid.columns.group_badges.no_badges%22)

> None

```diff
--
+Nema
```

#### [`core.admin.users.grid.columns.join_time.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.users.grid.columns.join_time.title%22)

> Joined

```diff
-Pridružuje se
+Pridružen
```

#### [`core.admin.users.grid.columns.username.profile_link_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.users.grid.columns.username.profile_link_tooltip%22)

> Visit {username}'s profile

```diff
-Posjeti profil {username}
+Posjeti profil korisnika {username}
```

Posjeti profil <ins>korisnika </ins>{username}

#### [`core.api.invalid_filter_type.must_be_numeric_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.api.invalid_filter_type.must_be_numeric_message%22)

> The {filter} filter must be numeric.

```diff
-Filter {filter} mora biti številčen.
+Filtar {filter} mora biti brojčani.
```

<del>Filter</del><ins>Filtar</ins> {filter} mora biti <del>številčen.</del><ins>brojčani.</ins>

#### [`core.api.invalid_filter_type.must_not_be_array_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.api.invalid_filter_type.must_not_be_array_message%22)

> The {filter} filter must not be an array.

```diff
-Filter {filter} ne sme biti tabela.
+Filtar {filter} ne smije biti polje.
```

<del>Filter</del><ins>Filtar</ins> {filter} ne <del>sme</del><ins>smije</ins> biti <del>tabela.</del><ins>polje.</ins>

#### [`core.api.invalid_filter_type.must_not_be_multidimensional_array_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.api.invalid_filter_type.must_not_be_multidimensional_array_message%22)

> The {filter} filter must not be a multidimensional array.

```diff
-Filter {filter} ne sme biti večdimenzionalna tabela.
+Filtar {filter} ne smije biti višedimenzionalno polje.
```

<del>Filter</del><ins>Filtar</ins> {filter} ne <del>sme</del><ins>smije</ins> biti <del>večdimenzionalna</del><ins>višedimenzionalno</ins> <del>tabela.</del><ins>polje.</ins>

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-Aktivirajte vaš račun
+Aktivirajte svoj novi račun
```

Aktivirajte <del>vaš</del><ins>svoj novi</ins> račun

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-Potvrdite Vašu Novu Adresu E-pošte
+Potvrdite svoju novu e-mail adresu
```

Potvrdite <del>Vašu</del><ins>svoju</ins> <del>Novu</del><ins>novu</ins> <del>Adresu</del><ins>e-mail</ins> <del>E-pošte</del><ins>adresu</ins>

#### [`core.email.send_test.subject`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.email.send_test.subject%22)

> Flarum Email Test

```diff
-Flarum Email Test
+Test Flarum e-pošte
```

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-Unesena zaporka je netočna.
+Unesena zaporka nije ispravna.
```

Unesena zaporka <del>je</del><ins>nije</ins> <del>netočna.</del><ins>ispravna.</ins>

#### [`core.forum.change_password.send_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.change_password.send_button%22)

> Send Password Reset Email

```diff
-Pošalji e-mail za obnovu zaporke
+Pošalji e-mail za poništavanje zaporke
```

Pošalji e-mail za <del>obnovu</del><ins>poništavanje</ins> zaporke

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Kliknite na gumb ispod i provjerite pretinac e-maila kako bi našli poveznicu za promjenu zaporke.
+Kliknite gumb ispod i provjerite e-poštu; primit ćete poveznicu za promjenu zaporke.
```

Kliknite <del>na </del>gumb ispod i provjerite<del> pretinac e-maila</del> <del>kako</del><ins>e-poštu;</ins> <del>bi</del><ins>primit</ins> <del>našli</del><ins>ćete</ins> poveznicu za promjenu zaporke.

#### [`core.forum.composer.exit_full_screen_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer.exit_full_screen_tooltip%22)

> Exit Full Screen

```diff
-Izađi iz punog zaslona
+Izađi iz prikaza preko cijelog zaslona
```

Izađi iz <del>punog</del><ins>prikaza preko cijelog</ins> zaslona

#### [`core.forum.composer.full_screen_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer.full_screen_tooltip%22)

> Full Screen

```diff
-Puni zaslon
+Prikaz preko cijelog zaslona
```

#### [`core.forum.composer.minimize_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer.minimize_tooltip%22)

> Minimize

```diff
-Minimiziraj
+Smanji
```

#### [`core.forum.composer.preview_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer.preview_tooltip%22)

> Preview

```diff
-Pregledaj
+Pregled
```

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Kreni pisati...
+Napišite objavu...
```

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Niste pohranili promjene. Želite li ih odbaciti?
+Niste spremili promjene. Želite li ih odbaciti?
```

Niste <del>pohranili</del><ins>spremili</ins> promjene. Želite li ih odbaciti?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Uredba podnesena.
+Vaše su izmjene spremljene.
```

#### [`core.forum.composer_edit.post_link`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer_edit.post_link%22)

> Post #{number} in {discussion}

```diff
-Objava #{number} u {discussion}
+Objava #{number} u raspravi {discussion}
```

Objava #{number} u <ins>raspravi </ins>{discussion}

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Vaš odgovor je objavljen.
+Vaš je odgovor objavljen.
```

Vaš <del>odgovor </del>je<ins> odgovor</ins> objavljen.

#### [`core.forum.discussion_controls.cannot_reply_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_button%22)

> Can't Reply

```diff
-Onemogućeni odgovori
+Nije moguće odgovoriti
```

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-Nemate dozvolu odgovarati u ovoj raspravi.
+Nemate dozvolu za odgovor na ovu raspravu.
```

Nemate dozvolu <del>odgovarati</del><ins>za</ins> <del>u</del><ins>odgovor</ins> <del>ovoj</del><ins>na</ins> <del>raspravi.</del><ins>ovu raspravu.</ins>

#### [`core.forum.discussion_controls.log_in_to_reply_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_controls.log_in_to_reply_button%22)

> Log In to Reply

```diff
-Prijavite se
+Prijavite se za odgovor
```

Prijavite se<ins> za odgovor</ins>

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-Uključi/isključi padajući izbornik radnji rasprava
+Otvori/zatvori padajući izbornik radnji rasprave
```

<del>Uključi/isključi</del><ins>Otvori/zatvori</ins> padajući izbornik radnji <del>rasprava</del><ins>rasprave</ins>

#### [`core.forum.discussion_list.empty_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_list.empty_text%22)

> It looks as though there are no discussions here.

```diff
-Ovdje nema rasprava, izgleda.
+Čini se da ovdje nema rasprava.
```

#### [`core.forum.discussion_list.replied_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_list.replied_text%22)

> {username} replied {ago}

```diff
-{username} odgovara {ago}
+{username} je odgovorio {ago}
```

{username} <del>odgovara</del><ins>je odgovorio</ins> {ago}

#### [`core.forum.discussion_list.started_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_list.started_text%22)

> {username} started {ago}

```diff
-{username} započinje {ago}
+{username} je pokrenuo raspravu {ago}
```

{username} <del>započinje</del><ins>je pokrenuo raspravu</ins> {ago}

#### [`core.forum.discussion_list.total_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_list.total_replies_a11y_label%22)

> {count, plural, one {# reply} other {# replies}}

```diff
-{count, plural, one {# odgovor} other {# odgovora}}
+{count, plural, one {# odgovor} few {# odgovora} other {# odgovora}}
```

{count, plural, one {# odgovor} <ins>few {# odgovora} </ins>other {# odgovora}}

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# nepročitan odgovor} other {# nepročitanih odgovora}}. Označi nepročitano {count, plural, one {odgovor} other {odgovora}} kao pročitano.
+{count, plural, one {# nepročitani odgovor} few {# nepročitana odgovora} other {# nepročitanih odgovora}}. Označi nepročitane {count, plural, one {{reply}} other {{replies}}} kao pročitane.
```

{count, plural, one {# <del>nepročitan</del><ins>nepročitani</ins> odgovor}<ins> few {# nepročitana odgovora}</ins> other {# nepročitanih odgovora}}. Označi <del>nepročitano</del><ins>nepročitane</ins> {count, plural, one <del>{odgovor}</del><ins>{{reply}}</ins> other <del>{odgovora}}</del><ins>{{replies}}}</ins> kao <del>pročitano.</del><ins>pročitane.</ins>

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Poslali smo vam e-mail koji sadrži poveznicu za promjenu zaporke. Provjerite pretinac za neželjenu poštu ako ga ne primite u sljedećoj minuti-dvije.
+Ako je unesena e-mail adresa registrirana na ovoj stranici, poslat ćemo vam e-mail s poveznicom za poništavanje zaporke. Ako ga ne primite u sljedećih minutu-dvije, provjerite mapu neželjene pošte.
```

<del>Poslali</del><ins>Ako</ins> <del>smo</del><ins>je</ins> <del>vam</del><ins>unesena</ins> e-mail <del>koji</del><ins>adresa</ins> <del>sadrži</del><ins>registrirana</ins> <del>poveznicu</del><ins>na</ins> <del>za</del><ins>ovoj</ins> <del>promjenu</del><ins>stranici,</ins> <del>zaporke.</del><ins>poslat</ins> <del>Provjerite</del><ins>ćemo</ins> <del>pretinac</del><ins>vam e-mail s poveznicom</ins> za <del>neželjenu</del><ins>poništavanje</ins> <del>poštu</del><ins>zaporke.</ins> <del>ako</del><ins>Ako</ins> ga ne primite u <del>sljedećoj</del><ins>sljedećih</ins> <del>minuti-dvije.</del><ins>minutu-dvije, provjerite mapu neželjene pošte.</ins>

#### [`core.forum.forgot_password.not_found_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.forgot_password.not_found_message%22)

> There is no user registered with that email address.

```diff
-Korisnik s tom e-mail adresom ne postoji.
+Nema korisnika registriranog s tom e-mail adresom.
```

<del>Korisnik</del><ins>Nema korisnika registriranog</ins> s tom e-mail<del> adresom ne</del> <del>postoji.</del><ins>adresom.</ins>

#### [`core.forum.forgot_password.submit_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.forgot_password.submit_button%22)

> Recover Password

```diff
-Ponovno postavi zaporku
+Obnovi zaporku
```

<del>Ponovno postavi</del><ins>Obnovi</ins> zaporku

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Unesite e-mail adresu i poslat ćemo vam poveznicu za promjenu zaporke.
+Unesite svoju e-mail adresu i poslat ćemo vam poveznicu za poništavanje zaporke.
```

Unesite <ins>svoju </ins>e-mail adresu i poslat ćemo vam poveznicu za <del>promjenu</del><ins>poništavanje</ins> zaporke.

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-Povratak na popis rasprava
+Natrag na popis rasprava
```

<del>Povratak</del><ins>Natrag</ins> na popis rasprava

#### [`core.forum.header.locale_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.header.locale_dropdown_accessible_label%22)

> Change forum locale

```diff
-Promijeni lokal foruma
+Promijeni jezik foruma
```

Promijeni <del>lokal</del><ins>jezik</ins> foruma

#### [`core.forum.header.search_role_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.header.search_role_label%22)

> Search Forum

```diff
-Išči po forumu
+Pretraži forum
```

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-Uključi/isključi padajući izbornik postavki sjednice
+Otvori/zatvori padajući izbornik opcija sesije
```

<del>Uključi/isključi</del><ins>Otvori/zatvori</ins> padajući izbornik <del>postavki</del><ins>opcija</ins> <del>sjednice</del><ins>sesije</ins>

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-Onemogućeno raspravljanje
+Nije moguće pokrenuti raspravu
```

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-Uključi/isključi padajući izbornik navigacije
+Otvori/zatvori padajući izbornik navigacije
```

<del>Uključi/isključi</del><ins>Otvori/zatvori</ins> padajući izbornik navigacije

#### [`core.forum.index_sort.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.index_sort.toggle_dropdown_accessible_label%22)

> Change discussion list sorting

```diff
-Promjena redoslijeda rasprava
+Promijeni razvrstavanje popisa rasprava
```

<del>Promjena</del><ins>Promijeni</ins> <del>redoslijeda</del><ins>razvrstavanje popisa</ins> rasprava

#### [`core.forum.log_in.forgot_password_link`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.log_in.forgot_password_link%22)

> Forgot password?

```diff
-Zaboravljena zaporka?
+Zaboravili ste zaporku?
```

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-Nemate račun? <a>Pridružite se</a>
+Nemate račun? <a>Registrirajte se</a>
```

Nemate račun? <del>&lt;a&gt;Pridružite</del><ins>&lt;a&gt;Registrirajte</ins> se&lt;/a&gt;

#### [`core.forum.notifications.delete_all_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.notifications.delete_all_tooltip%22)

> Delete all notifications

```diff
-Izbriši vsa obvestila
+Obriši sve obavijesti
```

#### [`core.forum.notifications.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.notifications.discussion_renamed_text%22)

> {username} changed the title

```diff
-{username} mijenja naslov
+{username} je promijenio naslov
```

{username} <del>mijenja</del><ins>je promijenio</ins> naslov

#### [`core.forum.notifications.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.notifications.toggle_dropdown_accessible_label%22)

> View notifications

```diff
-Pregledaj obavijesti
+Prikaži obavijesti
```

<del>Pregledaj</del><ins>Prikaži</ins> obavijesti

#### [`core.forum.post.edited_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post.edited_tooltip%22)

> {username} edited {ago}

```diff
-{username} uređuje {ago}
+{username} je uredio {ago}
```

{username} <del>uređuje</del><ins>je uredio</ins> {ago}

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Jeste li sigurni da želite obrisati ovu objavu zauvijek? To se ne može poništiti.
+Jeste li sigurni da želite trajno obrisati ovu objavu? Ova radnja se ne može poništiti.
```

Jeste li sigurni da želite <ins>trajno </ins>obrisati ovu <del>objavu</del><ins>objavu?</ins> <del>zauvijek?</del><ins>Ova</ins> <del>To</del><ins>radnja</ins> se ne može poništiti.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-Jeste li sigurni da želite ukloniti ovu objavu?
+Jeste li sigurni da želite obrisati ovu objavu?
```

Jeste li sigurni da želite <del>ukloniti</del><ins>obrisati</ins> ovu objavu?

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-Uključi/isključi padajući izbornik upravljanja objavama
+Otvori/zatvori padajući izbornik kontrola objave
```

<del>Uključi/isključi</del><ins>Otvori/zatvori</ins> padajući izbornik <del>upravljanja</del><ins>kontrola</ins> <del>objavama</del><ins>objave</ins>

#### [`core.forum.post_scrubber.now_link`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_scrubber.now_link%22)

> Now

```diff
-Sadašnjost
+Sada
```

#### [`core.forum.post_scrubber.unread_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_scrubber.unread_text%22)

> {count} unread

```diff
-nepročitanih objava: {count}
+{count} nepročitano
```

<del>nepročitanih objava: </del>{count}<ins> nepročitano</ins>

#### [`core.forum.post_scrubber.viewing_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_scrubber.viewing_text%22)

> {count, plural, one {{index} of {formattedCount} post} other {{index} of {formattedCount} posts}}

```diff
-{count, plural, one {objava {index} od {formattedCount}} other {objava {index} od {formattedCount}}}
+{count, plural, one {{index} od {formattedCount} objave} few {{index} od {formattedCount} objave} other {{index} od {formattedCount} objava}}
```

{count, plural, one <del>{objava</del><ins>{{index}</ins> <del>{index}</del><ins>od {formattedCount} objave} few {{index}</ins> od <del>{formattedCount}}</del><ins>{formattedCount}</ins> <del>other</del><ins>objave}</ins> <del>{objava</del><ins>other</ins> <del>{index}</del><ins>{{index}</ins> od <del>{formattedCount}}}</del><ins>{formattedCount} objava}}</ins>

#### [`core.forum.post_stream.discussion_renamed_old_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_old_tooltip%22)

> The old title was: "{old}"

```diff
-Prethodni naslov bio je: "{old}"
+Stari naslov bio je: "{old}"
```

<del>Prethodni</del><ins>Stari</ins> naslov bio je: "{old}"

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} je promijenio/la naslov u {new} {time}.
+{username} je promijenio naslov u {new} {time}.
```

{username} je <del>promijenio/la</del><ins>promijenio</ins> naslov u {new} {time}.

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-Ni mogoče prekiniti trenutne aktivne seje. Namesto tega se odjavite.
+Nije moguće prekinuti trenutačnu aktivnu sesiju. Umjesto toga se odjavite.
```

<del>Ni</del><ins>Nije</ins> <del>mogoče</del><ins>moguće</ins> <del>prekiniti</del><ins>prekinuti</ins> <del>trenutne</del><ins>trenutačnu</ins> <del>aktivne</del><ins>aktivnu</ins> <del>seje.</del><ins>sesiju.</ins> <del>Namesto</del><ins>Umjesto</ins> <del>tega</del><ins>toga</ins> se odjavite.

#### [`core.forum.security.created`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.created%22)

> Created

```diff
-Ustvarjeno
+Stvoreno
```

#### [`core.forum.security.current_active_session`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.current_active_session%22)

> Current Active Session

```diff
-Trenutna aktivna seja
+Trenutačna aktivna sesija
```

<del>Trenutna</del><ins>Trenutačna</ins> aktivna <del>seja</del><ins>sesija</ins>

#### [`core.forum.security.developer_tokens_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.developer_tokens_heading%22)

> Developer Tokens

```diff
-Žetoni razvijalcev
+Razvojni tokeni
```

#### [`core.forum.security.empty_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.empty_text%22)

> It looks like there is nothing to see here.

```diff
-Zdi se, da tukaj ni ničesar za prikazati.
+Čini se da ovdje nema ničega za prikaz.
```

<del>Zdi</del><ins>Čini</ins> <del>se,</del><ins>se</ins> da <del>tukaj</del><ins>ovdje</ins> <del>ni</del><ins>nema</ins> <del>ničesar</del><ins>ničega</ins> za <del>prikazati.</del><ins>prikaz.</ins>

#### [`core.forum.security.global_logout.help_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.global_logout.help_text%22)

> Clears current cookie session, terminates all sessions, revokes developer tokens, and invalidates any email confirmation or password reset emails.

```diff
-Počisti trenutno sejo piškotkov, prekine vse seje, prekliče žetone razvijalcev in razveljavi katera koli potrditvena e-poštna sporočila ali e-poštna sporočila za ponastavitev gesla.
+Briše trenutačnu sesiju kolačića, prekida sve sesije, opoziva razvojne tokene i poništava sve e-mailove za potvrdu adrese ili poništavanje zaporke.
```

#### [`core.forum.security.hide_access_token`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.hide_access_token%22)

> Hide Token

```diff
-Skrij žeton
+Sakrij token
```

#### [`core.forum.security.last_activity`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.last_activity%22)

> Last activity

```diff
-Zadnja aktivnost
+Posljednja aktivnost
```

<del>Zadnja</del><ins>Posljednja</ins> aktivnost

#### [`core.forum.security.new_access_token_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.new_access_token_modal.submit_button%22)

> Create Token

```diff
-Ustvari žeton
+Stvori token
```

#### [`core.forum.security.revoke_access_token`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.revoke_access_token%22)

> Revoke

```diff
-Prekliči
+Opozovi
```

#### [`core.forum.security.session_terminated`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.session_terminated%22)

> {count, plural, one {Session terminated} other {# Sessions terminated}}.

```diff
-{count, plural, one {Sesija je prekinuta} other {# Sesija je prekinuto/Sesije su prekinute}}.
+{count, plural, one {Sesija prekinuta} few {# sesije prekinute} other {# sesija prekinuto}}.
```

{count, plural, one {Sesija <del>je </del>prekinuta} <del>other</del><ins>few</ins> {# <del>Sesija</del><ins>sesije</ins> <del>je</del><ins>prekinute}</ins> <del>prekinuto/Sesije</del><ins>other</ins> <del>su</del><ins>{#</ins> <del>prekinute}}.</del><ins>sesija prekinuto}}.</ins>

#### [`core.forum.security.session_termination_failed`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.session_termination_failed%22)

> An error occurred while terminating your sessions.

```diff
-Prišlo je do napake pri prekinitvi sej.
+Došlo je do pogreške pri prekidanju vaših sesija.
```

<del>Prišlo</del><ins>Došlo</ins> je do <del>napake</del><ins>pogreške</ins> pri <del>prekinitvi</del><ins>prekidanju</ins> <del>sej.</del><ins>vaših sesija.</ins>

#### [`core.forum.security.sessions_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.sessions_heading%22)

> Active Sessions

```diff
-Aktivne seje
+Aktivne sesije
```

Aktivne <del>seje</del><ins>sesije</ins>

#### [`core.forum.security.show_access_token`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.show_access_token%22)

> View Token

```diff
-Prikaži žeton
+Prikaži token
```

Prikaži <del>žeton</del><ins>token</ins>

#### [`core.forum.security.terminate_all_other_sessions`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.terminate_all_other_sessions%22)

> Terminate all other sessions

```diff
-Prekini vse druge seje
+Prekini sve ostale sesije
```

Prekini <del>vse</del><ins>sve</ins> <del>druge</del><ins>ostale</ins> <del>seje</del><ins>sesije</ins>

#### [`core.forum.security.token_revoked`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.security.token_revoked%22)

> Token revoked.

```diff
-Žeton preklican.
+Token je opozvan.
```

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Prejemajte obvestila "{description}" prek {method}
+Primaj obavijesti "{description}" putem {method}
```

<del>Prejemajte</del><ins>Primaj</ins> <del>obvestila</del><ins>obavijesti</ins> "{description}" <del>prek</del><ins>putem</ins> {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Kad netko preimenuje moju raspravu
+Netko preimenuje raspravu koju sam pokrenuo
```

<del>Kad netko</del><ins>Netko</ins> preimenuje<del> moju</del> raspravu<ins> koju sam pokrenuo</ins>

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-Dozvoli drugima da vide kad sam na vezi
+Dopusti drugima da vide kada sam na mreži
```

<del>Dozvoli</del><ins>Dopusti</ins> drugima da vide <del>kad</del><ins>kada</ins> sam na <del>vezi</del><ins>mreži</ins>

#### [`core.forum.user.avatar_upload_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user.avatar_upload_button%22)

> Upload

```diff
-Predaj
+Prenesi
```

#### [`core.forum.user.avatar_upload_tooltip`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user.avatar_upload_tooltip%22)

> Upload a new avatar

```diff
-Predaj novi avatar
+Prenesi novi avatar
```

<del>Predaj</del><ins>Prenesi</ins> novi avatar

#### [`core.forum.user.in_discussion_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user.in_discussion_text%22)

> In {discussion}

```diff
-U {discussion}
+U raspravi {discussion}
```

U <ins>raspravi </ins>{discussion}

#### [`core.forum.user.joined_date_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user.joined_date_text%22)

> Joined {ago}

```diff
-Pridružuje se {ago}
+Pridružen {ago}
```

<del>Pridružuje se</del><ins>Pridružen</ins> {ago}

#### [`core.forum.user.online_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user.online_text%22)

> Online

```diff
-Na vezi
+Na mreži
```

Na <del>vezi</del><ins>mreži</ins>

#### [`core.forum.user.posts_empty_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user.posts_empty_text%22)

> It looks like there are no posts here.

```diff
-Ovdje nema objava, izgleda.
+Čini se da ovdje nema objava.
```

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-Jeste li sigurni da želite obrisati ovog korisnika? Objave tog korisnika NEĆE biti obrisane.
+Jeste li sigurni da želite obrisati ovog korisnika? Korisnikove objave NEĆE biti obrisane.
```

Jeste li sigurni da želite obrisati ovog korisnika? <del>Objave tog</del><ins>Korisnikove</ins> <del>korisnika</del><ins>objave</ins> NEĆE biti obrisane.

#### [`core.forum.user_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user_controls.delete_error_message%22)

> Deletion of user &lt;i&gt;{username} ({email})&lt;/i&gt; failed

```diff
-Brisanje korisnika <i>{username} ({email})</i> nije bilo uspješno
+Brisanje korisnika <i>{username} ({email})</i> nije uspjelo
```

Brisanje korisnika &lt;i&gt;{username} ({email})&lt;/i&gt; nije <del>bilo uspješno</del><ins>uspjelo</ins>

#### [`core.forum.user_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user_controls.toggle_dropdown_accessible_label%22)

> Toggle user controls dropdown menu

```diff
-Uključi/isključi padajući izbornik korisničkih kontrola
+Otvori/zatvori padajući izbornik kontrola korisnika
```

<del>Uključi/isključi</del><ins>Otvori/zatvori</ins> padajući izbornik<del> korisničkih</del> kontrola<ins> korisnika</ins>

#### [`core.forum.user_email_confirmation.resend_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.user_email_confirmation.resend_button%22)

> Resend Confirmation Email

```diff
-Ponovi slanje e-maila potvrde
+Ponovno pošalji e-mail za potvrdu
```

#### [`core.forum.welcome_hero.hide`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.forum.welcome_hero.hide%22)

> Hide welcome message

```diff
-Skrij sporočilo dobrodošlice
+Sakrij poruku dobrodošlice
```

<del>Skrij</del><ins>Sakrij</ins> <del>sporočilo</del><ins>poruku</ins> dobrodošlice

#### [`core.lib.alert.dismiss_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.alert.dismiss_a11y_label%22)

> Dismiss alert

```diff
-Zavrni opozorilo
+Zatvori upozorenje
```

#### [`core.lib.dropdown.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.dropdown.toggle_dropdown_accessible_label%22)

> Toggle dropdown menu

```diff
-Uključi/isključi padajući izbornik
+Otvori/zatvori padajući izbornik
```

<del>Uključi/isključi</del><ins>Otvori/zatvori</ins> padajući izbornik

#### [`core.lib.edit_user.nothing_available`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.edit_user.nothing_available%22)

> You are not allowed to edit this user.

```diff
-Nimate dovoljenja za urejanje tega uporabnika.
+Nemate dopuštenje za uređivanje ovog korisnika.
```

<del>Nimate</del><ins>Nemate</ins> <del>dovoljenja</del><ins>dopuštenje</ins> za <del>urejanje</del><ins>uređivanje</ins> <del>tega</del><ins>ovog</ins> <del>uporabnika.</del><ins>korisnika.</ins>

#### [`core.lib.error.circular_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.circular_dependencies_message%22)

> Circular dependencies detected: {extensions}. Aborting. Please disable one of the extensions and try again.

```diff
-Zaznane so bile krožne odvisnosti: {extensions}. Prekinitev. Onemogočite eno od razširitev in poskusite znova.
+Otkrivene su kružne ovisnosti: {extensions}. Postupak se prekida. Onemogućite jedno od proširenja i pokušajte ponovno.
```

<del>Zaznane so</del><ins>Otkrivene</ins> <del>bile</del><ins>su</ins> <del>krožne</del><ins>kružne</ins> <del>odvisnosti:</del><ins>ovisnosti:</ins> {extensions}. <del>Prekinitev.</del><ins>Postupak</ins> <del>Onemogočite</del><ins>se</ins> <del>eno</del><ins>prekida. Onemogućite jedno</ins> od <del>razširitev</del><ins>proširenja</ins> <del>in</del><ins>i</ins> <del>poskusite</del><ins>pokušajte</ins> <del>znova.</del><ins>ponovno.</ins>

#### [`core.lib.error.dependent_extensions_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.dependent_extensions_message%22)

> Cannot disable {extension} until the following dependent extensions are disabled: {extensions}

```diff
-Nemoguće onemogućavanje {extension} bez isključivanja sljedećih proširenja: {extensions}
+Nije moguće onemogućiti {extension} dok se ne onemoguće sljedeća ovisna proširenja: {extensions}
```

<del>Nemoguće</del><ins>Nije</ins> <del>onemogućavanje</del><ins>moguće onemogućiti</ins> {extension} <del>bez</del><ins>dok</ins> <del>isključivanja</del><ins>se</ins> <del>sljedećih</del><ins>ne onemoguće sljedeća ovisna</ins> proširenja: {extensions}

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-{extension} ni uspelo inicializirati, preverite konzolo brskalnika za več informacij.
+Inicijalizacija proširenja {extension} nije uspjela. Više informacija potražite u konzoli preglednika.
```

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-Oops! Nekaj je šlo narobe med zahtevo iz drugega vira. Prosimo, osvežite stran in poskusite znova.
+Ups! Nešto je pošlo po zlu tijekom zahtjeva između različitih izvora. Ponovno učitajte stranicu i pokušajte još jednom.
```

<del>Oops!</del><ins>Ups!</ins> <del>Nekaj</del><ins>Nešto</ins> je <del>šlo</del><ins>pošlo</ins> <del>narobe</del><ins>po</ins> <del>med</del><ins>zlu</ins> <del>zahtevo</del><ins>tijekom</ins> <del>iz</del><ins>zahtjeva</ins> <del>drugega</del><ins>između</ins> <del>vira.</del><ins>različitih</ins> <del>Prosimo,</del><ins>izvora.</ins> <del>osvežite</del><ins>Ponovno</ins> <del>stran</del><ins>učitajte</ins> <del>in</del><ins>stranicu</ins> <del>poskusite</del><ins>i</ins> <del>znova.</del><ins>pokušajte još jednom.</ins>

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-Ups! Nešto je pošlo po zlu. Ponovno učitajte stranicu i pokušajte ponovno, molimo.
+Ups! Nešto je pošlo po zlu. Ponovno učitajte stranicu i pokušajte još jednom.
```

Ups! Nešto je pošlo po zlu. Ponovno učitajte stranicu i pokušajte <del>ponovno,</del><ins>još</ins> <del>molimo.</del><ins>jednom.</ins>

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-Nemoguće omogućavanje {extension} bez uključivanja sljedećih proširenja: {extensions}
+Nije moguće omogućiti {extension} dok se ne omoguće sljedeće ovisnosti: {extensions}
```

<del>Nemoguće</del><ins>Nije</ins> <del>omogućavanje</del><ins>moguće omogućiti</ins> {extension} <del>bez</del><ins>dok</ins> <del>uključivanja</del><ins>se</ins> <del>sljedećih</del><ins>ne</ins> <del>proširenja:</del><ins>omoguće sljedeće ovisnosti:</ins> {extensions}

#### [`core.lib.error.payload_too_large_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.payload_too_large_message%22)

> The request payload was too large.

```diff
-Zahtevek je bil prevelik.
+Sadržaj zahtjeva bio je prevelik.
```

<del>Zahtevek</del><ins>Sadržaj</ins> <del>je</del><ins>zahtjeva</ins> <del>bil</del><ins>bio je</ins> prevelik.

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-Nemate dozvolu za to.
+Nemate dopuštenje za tu radnju.
```

Nemate <del>dozvolu</del><ins>dopuštenje</ins> za <del>to.</del><ins>tu radnju.</ins>

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-Malo ste prebrzi. Pokušajte ponovno za par sekundi, molimo.
+Radite malo prebrzo. Pokušajte ponovno za nekoliko sekundi.
```

<del>Malo</del><ins>Radite</ins> <del>ste</del><ins>malo</ins> <del>prebrzi.</del><ins>prebrzo.</ins> Pokušajte ponovno za<del> par</del> <del>sekundi,</del><ins>nekoliko</ins> <del>molimo.</del><ins>sekundi.</ins>

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Oprostite, prišlo je do napake pri prikazu te vsebine. Če ste uporabnik, poskusite znova kasneje. Če ste skrbnik, preverite dnevniške datoteke Flaruma za več informacij.
+Nažalost, došlo je do pogreške pri prikazu ovog sadržaja. Ako ste korisnik, pokušajte ponovno kasnije. Ako ste administrator, više informacija potražite u Flarumovim zapisnicima.
```

<del>Oprostite,</del><ins>Nažalost,</ins> <del>prišlo</del><ins>došlo</ins> je do <del>napake</del><ins>pogreške</ins> pri prikazu <del>te</del><ins>ovog</ins> <del>vsebine.</del><ins>sadržaja.</ins> <del>Če</del><ins>Ako</ins> ste <del>uporabnik,</del><ins>korisnik,</ins> <del>poskusite</del><ins>pokušajte</ins> <del>znova</del><ins>ponovno</ins> <del>kasneje.</del><ins>kasnije.</ins> <del>Če</del><ins>Ako</ins> ste<del> skrbnik,</del> <del>preverite</del><ins>administrator,</ins> <del>dnevniške</del><ins>više</ins> <del>datoteke</del><ins>informacija</ins> <del>Flaruma</del><ins>potražite</ins> <del>za</del><ins>u</ins> <del>več</del><ins>Flarumovim</ins> <del>informacij.</del><ins>zapisnicima.</ins>

#### [`core.lib.meta_titles.with_page_title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.meta_titles.with_page_title%22)

> {pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: Page # - {forumName}}}

```diff
-{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: Stranica # - {forumName}}}
+Audiofil.org
```

#### [`core.lib.meta_titles.without_page_title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.meta_titles.without_page_title%22)

> {pageNumber, plural, =1 {{forumName}} other {Page # - {forumName}}}

```diff
-{pageNumber, plural, =1 {{forumName}} other {Stranica # - {forumName}}}
+Audiofil.org
```

#### [`core.lib.modal.close`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.modal.close%22)

> Close

```diff
-Zapri
+Zatvori
```

#### [`core.lib.nav.drawer_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.nav.drawer_button%22)

> Open Navigation Drawer

```diff
-Odpri navigacijski predal
+Otvori navigacijsku ladicu
```

#### [`core.lib.series.three_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.series.three_text%22)

> {first}, {second}, and {third}

```diff
-{first}, {second}, i {third}
+{first}, {second} i {third}
```

{first}, <del>{second},</del><ins>{second}</ins> i {third}

#### [`core.lib.username.deleted_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.username.deleted_text%22)

> \[deleted\]

```diff
-[obrisani korisnik]
+[obrisano]
```

#### [`core.ref.confirm_email`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.confirm_email%22)

> Confirm Email

```diff
-Potrdi e-pošto
+Potvrdi e-mail
```

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Poslali smo e-mail potvrde na {email}. Ako ne dođe uskoro, provjerite vaš pretinac neželjene pošte.
+Poslali smo e-mail za potvrdu na {email}. Ako uskoro ne stigne, provjerite mapu neželjene pošte.
```

Poslali smo e-mail <del>potvrde</del><ins>za potvrdu</ins> na {email}. Ako <del>ne</del><ins>uskoro</ins> <del>dođe</del><ins>ne</ins> <del>uskoro,</del><ins>stigne,</ins> provjerite<del> vaš</del> <del>pretinac</del><ins>mapu</ins> neželjene pošte.

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-Dodajte HTML koji će se prikazivati na samom dnu stranice.
+Dodajte HTML koji će se prikazivati pri samom dnu stranice.
```

Dodajte HTML koji će se prikazivati <del>na</del><ins>pri</ins> samom dnu stranice.

#### [`core.ref.custom_footer_title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.custom_footer_title%22)

> Edit Custom Footer

```diff
-Uredi vlastito podnožje
+Uredi prilagođeno podnožje
```

Uredi <del>vlastito</del><ins>prilagođeno</ins> podnožje

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-Dodajte HTML koji će se prikazivati na samom vrhu stranice, iznad Flarumovih zaglavlja.
+Dodajte HTML koji će se prikazivati pri samom vrhu stranice, iznad Flarumova vlastitog zaglavlja.
```

Dodajte HTML koji će se prikazivati <del>na</del><ins>pri</ins> samom vrhu stranice, iznad <del>Flarumovih</del><ins>Flarumova vlastitog</ins> zaglavlja.

#### [`core.ref.custom_header_title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.custom_header_title%22)

> Edit Custom Header

```diff
-Uredi vlastito zaglavlje
+Uredi prilagođeno zaglavlje
```

Uredi <del>vlastito</del><ins>prilagođeno</ins> zaglavlje

#### [`core.ref.delete_forever`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.delete_forever%22)

> Delete Forever

```diff
-Obriši zauvijek
+Obriši trajno
```

Obriši <del>zauvijek</del><ins>trajno</ins>

#### [`core.ref.extensions`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.extensions%22)

> Extensions

```diff
-Razširitve
+Proširenja
```

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-Ali ste prepričani, da želite nadaljevati? To dejanje ni mogoče razveljaviti.
+Jeste li sigurni da želite nastaviti? Ova radnja se ne može poništiti.
```

<del>Ali</del><ins>Jeste</ins> <del>ste</del><ins>li</ins> <del>prepričani,</del><ins>sigurni</ins> da želite <del>nadaljevati?</del><ins>nastaviti?</ins> <del>To</del><ins>Ova</ins> <del>dejanje</del><ins>radnja</ins> <del>ni</del><ins>se</ins> <del>mogoče</del><ins>ne</ins> <del>razveljaviti.</del><ins>može poništiti.</ins>

#### [`core.ref.load_more`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.load_more%22)

> Load More

```diff
-Učitaj još
+Učitaj više
```

Učitaj <del>još</del><ins>više</ins>

#### [`core.ref.log_in`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.log_in%22)

> Log In

```diff
-Prijavi se
+Prijava
```

#### [`core.ref.log_out`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.log_out%22)

> Log Out

```diff
-Odjavi se
+Odjava
```

#### [`core.ref.never`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.never%22)

> Never

```diff
-Nikoli
+Nikad
```

#### [`core.ref.new_token`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.new_token%22)

> New Token

```diff
-Nov žeton
+Novi token
```

#### [`core.ref.reset_your_password`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.reset_your_password%22)

> Reset Your Password

```diff
-Ponovno postavi zaporku
+Poništi zaporku
```

<del>Ponovno postavi</del><ins>Poništi</ins> zaporku

#### [`core.ref.restore`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.restore%22)

> Restore

```diff
-Obnovi
+Vrati
```

#### [`core.ref.save_changes`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.save_changes%22)

> Save Changes

```diff
-Pohrani promjene
+Spremi promjene
```

<del>Pohrani</del><ins>Spremi</ins> promjene

#### [`core.ref.search_users`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.search_users%22)

> Search users

```diff
-Išči uporabnike
+Pretraži korisnike
```

#### [`core.ref.security`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.security%22)

> Security

```diff
-Varnost
+Sigurnost
```

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Pridruži se
+Registracija
```

#### [`core.ref.some_others`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.some_others%22)

> {count, plural, one {# other} other {# others}}

```diff
-{count, plural, one {# drugi} other {# drugih}}
+{count, plural, one {# drugi} few {# druga} other {# drugih}}
```

{count, plural, one {# drugi} <ins>few {# druga} </ins>other {# drugih}}

#### [`core.ref.start_a_discussion`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.start_a_discussion%22)

> Start a Discussion

```diff
-Započni raspravu
+Pokreni raspravu
```

<del>Započni</del><ins>Pokreni</ins> raspravu

#### [`core.ref.view`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.view%22)

> View

```diff
-Pregledaj
+Prikaži
```

#### [`core.ref.write_a_reply`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.ref.write_a_reply%22)

> Write a Reply...

```diff
-Kreni odgovarati...
+Napišite odgovor...
```

#### [`core.views.admin.extensions.disable`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.admin.extensions.disable%22)

> Disable

```diff
-Onemogoči
+Onemogući
```

#### [`core.views.admin.extensions.empty`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.admin.extensions.empty%22)

> No installed extensions

```diff
-Ni nameščenih razširitev
+Nema instaliranih proširenja
```

#### [`core.views.admin.extensions.enable`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.admin.extensions.enable%22)

> Enable

```diff
-Omogoči
+Omogući
```

#### [`core.views.admin.extensions.name`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.admin.extensions.name%22)

> Extension Name

```diff
-Ime razširitve
+Naziv proširenja
```

#### [`core.views.admin.extensions.package_name`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.admin.extensions.package_name%22)

> Package Name

```diff
-Ime paketa
+Naziv paketa
```

<del>Ime</del><ins>Naziv</ins> paketa

#### [`core.views.admin.extensions.version`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.admin.extensions.version%22)

> Version

```diff
-Različica
+Verzija
```

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-Kliknite spodnji gumb za potrditev e-poštnega naslova vašega računa.
+Kliknite gumb ispod kako biste potvrdili e-mail adresu svojeg računa.
```

Kliknite <del>spodnji </del>gumb <del>za</del><ins>ispod</ins> <del>potrditev</del><ins>kako</ins> <del>e-poštnega</del><ins>biste</ins> <del>naslova</del><ins>potvrdili</ins> <del>vašega</del><ins>e-mail adresu svojeg</ins> računa.

#### [`core.views.content.javascript_disabled_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.content.javascript_disabled_message%22)

> This site is best viewed in a modern browser with JavaScript enabled.

```diff
-Ovu stranicu je najbolje pregledavati u modernom internet pregledniku s omogućenim JavaScriptom.
+Ovu je stranicu najbolje pregledavati u modernom pregledniku s uključenim JavaScriptom.
```

Ovu <del>stranicu </del>je<ins> stranicu</ins> najbolje pregledavati u modernom<del> internet</del> pregledniku s <del>omogućenim</del><ins>uključenim</ins> JavaScriptom.

#### [`core.views.content.load_error_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.content.load_error_message%22)

> Something went wrong while trying to load the full version of this site. Try hard-refreshing this page to fix the error.

```diff
-Nešto je pošlo po zlu prilikom učitavanja potpune inačice ove stranice. Pokušajte nasilno osvježiti ovu stranicu kako biste otklonili grešku.
+Došlo je do pogreške pri učitavanju pune verzije ove stranice. Pokušajte prisilno osvježiti stranicu kako biste uklonili pogrešku.
```

<del>Nešto</del><ins>Došlo</ins> je<del> pošlo</del> <del>po</del><ins>do</ins> <del>zlu</del><ins>pogreške</ins> <del>prilikom</del><ins>pri</ins> <del>učitavanja</del><ins>učitavanju</ins> <del>potpune</del><ins>pune</ins> <del>inačice</del><ins>verzije</ins> ove stranice. Pokušajte <del>nasilno</del><ins>prisilno</ins> osvježiti<del> ovu</del> stranicu kako biste <del>otklonili</del><ins>uklonili</ins> <del>grešku.</del><ins>pogrešku.</ins>

#### [`core.views.error.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.csrf_token_mismatch%22)

> You have been inactive for too long.

```diff
-Predugo ste neaktivni.
+Predugo ste bili neaktivni.
```

Predugo ste <ins>bili </ins>neaktivni.

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Vratite se, kako bi pokušali ponovno
+Vrati se i pokušaj ponovno
```

<del>Vratite se,</del><ins>Vrati</ins> <del>kako</del><ins>se</ins> <del>bi</del><ins>i</ins> <del>pokušali</del><ins>pokušaj</ins> ponovno

#### [`core.views.error.invalid_confirmation_token`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.invalid_confirmation_token%22)

> This confirmation link has already been used or is invalid.

```diff
-Ova poveznica potvrde je iskorištena ili nije valjana.
+Ova poveznica za potvrdu već je iskorištena ili nije valjana.
```

Ova poveznica <del>potvrde</del><ins>za potvrdu već</ins> je iskorištena ili nije valjana.

#### [`core.views.error.not_authenticated`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.not_authenticated%22)

> You do not have permission to access this page. Try again after logging in.

```diff
-Nemate dozvolu za pristup ovoj stranici. Pokušajte ponovno nakon prijave.
+Nemate dopuštenje za pristup ovoj stranici. Pokušajte ponovno nakon prijave.
```

Nemate <del>dozvolu</del><ins>dopuštenje</ins> za pristup ovoj stranici. Pokušajte ponovno nakon prijave.

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-Stranica koju tražite nije pronađena.
+Tražena stranica nije pronađena.
```

<del>Stranica koju</del><ins>Tražena</ins> <del>tražite</del><ins>stranica</ins> nije pronađena.

#### [`core.views.error.not_found_return_link`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.not_found_return_link%22)

> Return to {forum}

```diff
-Povratak na {forum} forum
+Povratak na {forum}
```

Povratak na {forum}<del> forum</del>

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-Nemate dozvolu za pristup ovoj stranici.
+Nemate dopuštenje za pristup ovoj stranici.
```

Nemate <del>dozvolu</del><ins>dopuštenje</ins> za pristup ovoj stranici.

#### [`core.views.error.unknown`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.unknown%22)

> An error occurred while trying to load this page.

```diff
-Pojavila se greška prilikom učitavanja ove stranice.
+Došlo je do pogreške pri učitavanju ove stranice.
```

<del>Pojavila</del><ins>Došlo</ins> <del>se</del><ins>je</ins> <del>greška</del><ins>do</ins> <del>prilikom</del><ins>pogreške</ins> <del>učitavanja</del><ins>pri učitavanju</ins> ove stranice.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-Jeste li sigurni da se želite odjaviti s {forum}?
+Jeste li sigurni da se želite odjaviti s foruma {forum}?
```

Jeste li sigurni da se želite odjaviti s <ins>foruma </ins>{forum}?

#### [`core.views.reset_password.confirm_password_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.reset_password.confirm_password_label%22)

> Confirm New Password

```diff
-Ponovite novu zaporku
+Potvrdite novu zaporku
```

<del>Ponovite</del><ins>Potvrdite</ins> novu zaporku


## Missing translations

These strings are translated only in `hr`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `hr`.


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+Najnovije vijesti i obavijesti preuzete sa službene Flarum zajednice na discuss.flarum.org.
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# komentar} few {# komentara} other {# komentara}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Najnovije vijesti i obavijesti Flarum tima.
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+Nema obavijesti.
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+Sakrij obavijesti
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+Obavijesti nije moguće učitati. Pokušajte ponovno kasnije.
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+Pročitaj više
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+Osvježi obavijesti
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+Pokušaj ponovno
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+Prikaži obavijesti
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+Obavijesti
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+Prikaži sve na discuss.flarum.org
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+Napuštena proširenja
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Pošalji e-mail administratorima kada se tijekom tjedne provjere otkrije novo napušteno proširenje
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+Provjeri sada
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+Dohvaćanje popisa napuštenih proširenja nije uspjelo. Pokušajte ponovno kasnije.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Popis napuštenih proširenja je ažuriran. Pronađeno je {count} odgovarajućih instaliranih proširenja.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum održava <a>popis napuštenih proširenja koji vodi zajednica</a>. Kada se instalirano proširenje pojavi na popisu, bit će označeno u administratorskoj ploči.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Informacije o sustavu
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Kopiraj u međuspremnik
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+Kopiranje u međuspremnik nije uspjelo
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Informacije o sustavu kopirane su u međuspremnik
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Informacije o sustavu
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Autor više ne održava ovo proširenje i ono možda neće dobivati ažuriranja.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Ovo je proširenje zamijenjeno paketom {replacement}. Razmotrite prelazak na zamjenski paket.
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+Zastarjelo
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
+Zamijenjeno
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Widgeti foruma
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Potrebna radnja: otkriveno napušteno proširenje/proširenja
```

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+Vaša je veza ponovno uspostavljena.
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+Čini se da nešto nije u redu s vašom vezom. Provjerite mrežnu vezu i pokušajte ponovno.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+Čini se da niste povezani s internetom. Provjerite vezu i pokušajte ponovno.
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/hr/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+Ova stranica ne podržava tu metodu zahtjeva.
```

<!-- {% endraw %} -->
