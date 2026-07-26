# Serbian (Latin) inherited translations differences

Translations for Serbian (Latin) (`sr_Latn`) are inherited from Serbian (Cyrillic), but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **280** are translated differently and **126** are
translated only in `sr_Latn`. Altogether they cover **18** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | 0 | [2](#acpl-lscache-missing) |
| `blomstra-readme` | 0 | [1](#blomstra-readme-missing) |
| `blomstra-realtime` | 0 | [2](#blomstra-realtime-missing) |
| `clarkwinkelmann-likes-received` | 0 | [1](#clarkwinkelmann-likes-received-missing) |
| `core` | [231](#core) | [34](#core-missing) |
| `flarum-flags` | [2](#flarum-flags) | [3](#flarum-flags-missing) |
| `flarum-likes` | [8](#flarum-likes) | 0 |
| `flarum-lock` | [7](#flarum-lock) | 0 |
| `flarum-mentions` | 0 | [11](#flarum-mentions-missing) |
| `flarum-nicknames` | [2](#flarum-nicknames) | [1](#flarum-nicknames-missing) |
| `flarum-pusher` | [1](#flarum-pusher) | 0 |
| `flarum-sticky` | 0 | [2](#flarum-sticky-missing) |
| `flarum-subscriptions` | 0 | [3](#flarum-subscriptions-missing) |
| `flarum-suspend` | 0 | [5](#flarum-suspend-missing) |
| `flarum-tags` | [5](#flarum-tags) | [6](#flarum-tags-missing) |
| `fof-moderator-warnings` | 0 | [14](#fof-moderator-warnings-missing) |
| `gtdxyz-badges` | 0 | [3](#gtdxyz-badges-missing) |
| `validation` | [24](#validation) | [38](#validation-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Serbian (Cyrillic) (`-` line) and the translation from `sr_Latn` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.appearance.colors_primary_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.colors_primary_label%22)

> Primary Color

```diff
-Osnovna boja
+Primarna boja
```

<del>Osnovna</del><ins>Primarna</ins> boja

#### [`core.admin.appearance.colors_secondary_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.colors_secondary_label%22)

> Secondary Color

```diff
-Sporedna boja
+Sekundarna boja
```

<del>Sporedna</del><ins>Sekundarna</ins> boja

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Odaberite dve boje za temu vašeg foruma. Prva je boja za istaknuti sadržaj a druga je boja za stil pozadinskih elemenata.
+Izaberite dve boje za temu Vašeg foruma. Prva će se koristiti kao istaknuta boja, dok će se druga koristiti za oblikovanje elemenata pozadine.
```

<del>Odaberite</del><ins>Izaberite</ins> dve boje za temu <del>vašeg</del><ins>Vašeg</ins> foruma. Prva <del>je</del><ins>će</ins> <del>boja</del><ins>se</ins> <del>za</del><ins>koristiti</ins> <del>istaknuti</del><ins>kao</ins> <del>sadržaj</del><ins>istaknuta</ins> <del>a</del><ins>boja,</ins> <del>druga</del><ins>dok</ins> <del>je</del><ins>će</ins> <del>boja</del><ins>se druga koristiti</ins> za <del>stil</del><ins>oblikovanje</ins> <del>pozadinskih</del><ins>elemenata</ins> <del>elemenata.</del><ins>pozadine.</ins>

#### [`core.admin.appearance.custom_styles_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.custom_styles_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's default styles.

```diff
-Podesite izgled foruma dodavanjem vašeg Less/CSS koda koji će biti primenjen preko Flarumovog standardnog stila.
+Prilagodite izgled svog foruma dodavanjem sopstvenog LESS/CSS koda koji će se primeniti povrh uobičajenih stilova Flaruma.
```

<del>Podesite</del><ins>Prilagodite</ins> izgled<ins> svog</ins> foruma dodavanjem <del>vašeg</del><ins>sopstvenog</ins> <del>Less/CSS</del><ins>LESS/CSS</ins> koda koji <del>će</del><ins>će</ins> <del>biti</del><ins>se</ins> <del>primenjen</del><ins>primeniti</ins> <del>preko</del><ins>povrh</ins> <del>Flarumovog</del><ins>uobičajenih</ins> <del>standardnog</del><ins>stilova</ins> <del>stila.</del><ins>Flaruma.</ins>

#### [`core.admin.appearance.dark_mode_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.dark_mode_label%22)

> Dark Mode

```diff
-Zatamnjeni režim
+Tamni režim
```

<del>Zatamnjeni</del><ins>Tamni</ins> režim

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Podesite boje, logo i druge parametre vašeg foruma.
+Prilagodite boje, logotipe i druge promenljive na forumu.
```

<del>Podesite</del><ins>Prilagodite</ins> boje, <del>logo</del><ins>logotipe</ins> i druge <del>parametre</del><ins>promenljive</ins> <del>vašeg</del><ins>na</ins> <del>foruma.</del><ins>forumu.</ins>

#### [`core.admin.appearance.edit_css_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.edit_css_button%22)

> Edit Custom CSS

```diff
-Promenite vaš dodatni CSS
+Izmeni prilagođeni CSS
```

<del>Promenite vaš</del><ins>Izmeni</ins> <del>dodatni</del><ins>prilagođeni</ins> CSS

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Unesite heksadecimalnu vrednost za boju.
+Unesite heksadecimalni kod boje.
```

Unesite <del>heksadecimalnu vrednost</del><ins>heksadecimalni</ins> <del>za</del><ins>kod</ins> <del>boju.</del><ins>boje.</ins>

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Pošaljite sliku koja će biti korišćena kao ikona prečice za forum.
+Otpremite sliku koja će biti prikazana kao ikonica foruma.
```

<del>Pošaljite</del><ins>Otpremite</ins> sliku koja <del>će</del><ins>će</ins> biti <del>korišćena</del><ins>prikazana</ins> kao<del> ikona prečice</del> <del>za</del><ins>ikonica</ins> <del>forum.</del><ins>foruma.</ins>

#### [`core.admin.appearance.logo_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.logo_heading%22)

> Logo

```diff
-Logo
+Logotip
```

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Pošaljite sliku koja će se koristiti umesto naslova foruma.
+Otpremite sliku koja će biti prikazana umesto naziva foruma.
```

<del>Pošaljite</del><ins>Otpremite</ins> sliku koja <del>će</del><ins>će</ins> <del>se</del><ins>biti</ins> <del>koristiti</del><ins>prikazana</ins> umesto <del>naslova</del><ins>naziva</ins> foruma.

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Podesite naslov, jezik i druga osnovna podešavanja za vaš forum.
+Podesite naslov foruma, jezik i druga osnovna podešavanja.
```

Podesite <del>naslov,</del><ins>naslov foruma,</ins> jezik i druga osnovna<del> podešavanja za vaš</del> <del>forum.</del><ins>podešavanja.</ins>

#### [`core.admin.basics.display_name_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.display_name_heading%22)

> User Display Name

```diff
-Prikaz imena korisnika
+Ime za prikaz
```

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Izaberite šta treba prikazati kao ime korisnika. Podrazumevano podešavanje je da se prikazuje korisničko ime.
+Izaberite mehanizam koji treba da se koristi za prikazana imena korisnika. Podrazumevano je prikazano korisničko ime.
```

Izaberite <del>šta</del><ins>mehanizam koji</ins> treba <del>prikazati</del><ins>da</ins> <del>kao</del><ins>se</ins> <del>ime</del><ins>koristi</ins> <del>korisnika.</del><ins>za</ins> <del>Podrazumevano</del><ins>prikazana</ins> <del>podešavanje</del><ins>imena</ins> <del>je</del><ins>korisnika.</ins> <del>da</del><ins>Podrazumevano</ins> <del>se</del><ins>je</ins> <del>prikazuje</del><ins>prikazano</ins> korisničko ime.

#### [`core.admin.basics.forum_description_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.forum_description_text%22)

> Enter a short sentence or two that describes your community. This will appear in the meta tag and show up in search engines.

```diff
-Unesite jednu ili dve rečenice koje opisuju vašu zajednicu. Ovaj opis će biti korišćen za meta tag i takođe će se pojavljivati u veb pretraživačima.
+Ukratko opišite Vašu zajednicu. Ovo će biti prikazano u meta podacima i u pretraživačima.
```

<del>Unesite jednu ili dve rečenice koje</del><ins>Ukratko</ins> <del>opisuju</del><ins>opišite</ins> <del>vašu</del><ins>Vašu</ins> zajednicu.<del> Ovaj</del> <del>opis</del><ins>Ovo</ins> će biti <del>korišćen</del><ins>prikazano</ins> <del>za</del><ins>u</ins> meta <del>tag</del><ins>podacima</ins> i<del> takođe će se pojavljivati</del> u<del> veb</del> pretraživačima.

#### [`core.admin.basics.home_page_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.home_page_heading%22)

> Home Page

```diff
-Početna strana
+Početna stranica
```

Početna <del>strana</del><ins>stranica</ins>

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Odaberite stranicu koju će korisnici prvo videti kada posete vaš forum.
+Izaberite stranicu koju će korisnici prvo videti kada posete Vaš forum.
```

<del>Odaberite</del><ins>Izaberite</ins> stranicu koju <del>će</del><ins>će</ins> korisnici prvo videti kada posete <del>vaš</del><ins>Vaš</ins> forum.

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Izaberite upravljački program koji će se koristiti za spajanje ovog modela.
+Izaberite mehanizam koji će se koristiti za spajanje ovog modela.
```

Izaberite <del>upravljački program</del><ins>mehanizam</ins> koji <del>će</del><ins>će</ins> se koristiti za spajanje ovog modela.

#### [`core.admin.basics.welcome_banner_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.welcome_banner_heading%22)

> Welcome Banner

```diff
-Baner za dobrodošlicu
+Baner dobrodošlice
```

Baner <del>za dobrodošlicu</del><ins>dobrodošlice</ins>

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Konfigurišite tekst koji će se prikazivati na baneru stranice sa svim diskusijama. Funkcija teksta je da poželite dobrodošlicu posetiocima foruma.
+Podesite tekst koji se prikazuje na baneru na stranici Sve diskusije. Koristite ovo za dobrodošlicu gostima na Vaš forum.
```

<del>Konfigurišite</del><ins>Podesite</ins> tekst koji<del> će</del> se <del>prikazivati</del><ins>prikazuje</ins> na baneru <del>stranice</del><ins>na</ins> <del>sa</del><ins>stranici</ins> <del>svim</del><ins>Sve</ins> <del>diskusijama.</del><ins>diskusije.</ins> <del>Funkcija</del><ins>Koristite</ins> <del>teksta</del><ins>ovo</ins> <del>je</del><ins>za</ins> <del>da</del><ins>dobrodošlicu</ins> <del>poželite</del><ins>gostima</ins> <del>dobrodošlicu</del><ins>na</ins> <del>posetiocima</del><ins>Vaš</ins> <del>foruma.</del><ins>forum.</ins>

#### [`core.admin.create_user.email_confirmed_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.create_user.email_confirmed_label%22)

> Require user to confirm this email

```diff
-Korisnik mora da potvrdi ovaj imejl
+Zahtevaj da korisnik potvrdi ovu e-poštu
```

<del>Korisnik mora</del><ins>Zahtevaj</ins> da<ins> korisnik</ins> potvrdi <del>ovaj</del><ins>ovu</ins> <del>imejl</del><ins>e-poštu</ins>

#### [`core.admin.create_user.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.create_user.title%22)

> Create new user

```diff
-Novi korisnik
+Napravi novog korisnika
```

#### [`core.admin.create_user.use_random_password`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.create_user.use_random_password%22)

> Generate random password

```diff
-Generiši nasumičnu šifru
+Generiši nasumičnu lozinku
```

Generiši nasumičnu <del>šifru</del><ins>lozinku</ins>

#### [`core.admin.dashboard.clear_cache_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.clear_cache_button%22)

> Clear Cache

```diff
-Očisti keš
+Obriši keš
```

<del>Očisti</del><ins>Obriši</ins> keš

#### [`core.admin.dashboard.status.scheduler.active`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.active%22)

> Active

```diff
-Aktivno
+Aktivan
```

#### [`core.admin.dashboard.status.scheduler.inactive`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.inactive%22)

> Inactive

```diff
-Neaktivno
+Neaktivan
```

#### [`core.admin.dashboard.status.scheduler.never-run`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.never-run%22)

> Never run

```diff
-Nikad ne pokreći
+Nikad nije pokrenut
```

Nikad <del>ne</del><ins>nije</ins> <del>pokreći</del><ins>pokrenut</ins>

#### [`core.admin.debug-warning.label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.debug-warning.label%22)

> Debug mode active

```diff
-Debag mod je uključen
+Režim za otklanjanje grešaka je uključen
```

<del>Debag</del><ins>Režim</ins> <del>mod</del><ins>za otklanjanje grešaka</ins> je uključen

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Prilagodite izgled foruma dodavanjem vašeg Less/CSS koda koji će biti primenjen povrh Flarumovih <a>podrazumevanih stilova</a>.
+Prilagodite izgled svog foruma dodavanjem sopstvenog LESS/CSS koda koji će se primeniti povrh Flarumovih <a>podrazumevanih stilova</a>.
```

Prilagodite izgled <ins>svog </ins>foruma dodavanjem <del>vašeg</del><ins>sopstvenog</ins> <del>Less/CSS</del><ins>LESS/CSS</ins> koda koji <del>će</del><ins>će</ins> <del>biti</del><ins>se</ins> <del>primenjen</del><ins>primeniti</ins> povrh Flarumovih &lt;a&gt;podrazumevanih stilova&lt;/a&gt;.

#### [`core.admin.edit_css.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.edit_css.title%22)

> Edit Custom CSS

```diff
-Promenite vaš prilagođeni CSS
+Uredite prilagođeni CSS
```

<del>Promenite vaš</del><ins>Uredite</ins> prilagođeni CSS

#### [`core.admin.edit_group.delete_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.edit_group.delete_button%22)

> Delete Group

```diff
-Obriši grupu
+Izbriši grupu
```

<del>Obriši</del><ins>Izbriši</ins> grupu

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-Da li ste sigurni da želite da obrišete ovu grupu? Članovi grupe neće biti obrisani.
+Da li ste sigurni da želite da izbrišete ovu grupu? Članovi grupe neće biti izbrisani.
```

Da li ste sigurni da želite da <del>obrišete</del><ins>izbrišete</ins> ovu grupu? Članovi grupe neće biti <del>obrisani.</del><ins>izbrisani.</ins>

#### [`core.admin.edit_group.hide_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.edit_group.hide_label%22)

> Hide on forum

```diff
-Ne prikazuj na forumu
+Sakrij na forumu
```

<del>Ne prikazuj</del><ins>Sakrij</ins> na forumu

#### [`core.admin.edit_group.name_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.edit_group.name_label%22)

> Name

```diff
-Ime
+Naziv
```

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Konfigurišite mehanizam, podešavanja i adresu koji će biti korišćeni za slanje e-pošte.
+Podesite mehanizam, podešavanja i adrese koje će Vaš forum koristiti za slanje e-pošte.
```

<del>Konfigurišite</del><ins>Podesite</ins> mehanizam, podešavanja i <del>adresu</del><ins>adrese</ins> <del>koji</del><ins>koje</ins> <del>će</del><ins>će</ins> <del>biti</del><ins>Vaš</ins> <del>korišćeni</del><ins>forum koristiti</ins> za slanje e-pošte.

#### [`core.admin.email.mail_encryption_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.mail_encryption_label%22)

> Encryption

```diff
-Šifrovanje
+Enkripcija
```

#### [`core.admin.email.mail_host_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.mail_host_label%22)

> Host

```diff
-Domaćin
+Server
```

#### [`core.admin.email.mail_mailgun_region_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.mail_mailgun_region_label%22)

> Region

```diff
-Regija
+Region
```

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Flarum trenutno ne može da šalje mejlove. Uzrok može biti u odabranom mehanizmu, ili greškama u njegovoj konfiguraciji.
+Flarum trenutno ne može da pošalje e-poštu. To može biti zbog izabranog mehanizma ili greške u podešavanjima istog.
```

Flarum trenutno ne može da <del>šalje</del><ins>pošalje</ins> <del>mejlove.</del><ins>e-poštu.</ins> <del>Uzrok</del><ins>To</ins> može biti <del>u</del><ins>zbog</ins> <del>odabranom</del><ins>izabranog</ins> <del>mehanizmu,</del><ins>mehanizma</ins> ili <del>greškama</del><ins>greške</ins> u <del>njegovoj</del><ins>podešavanjima</ins> <del>konfiguraciji.</del><ins>istog.</ins>

#### [`core.admin.email.send_test_mail_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.send_test_mail_heading%22)

> Send Test Mail

```diff
-Pošalji test imejl
+Pošalji probnu e-poštu
```

Pošalji <del>test</del><ins>probnu</ins> <del>imejl</del><ins>e-poštu</ins>

#### [`core.admin.email.send_test_mail_success`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.send_test_mail_success%22)

> Test mail sent successfully!

```diff
-Test imejl je uspešno poslat!
+Probna e-pošta je uspešno poslata!
```

<del>Test</del><ins>Probna</ins> <del>imejl</del><ins>e-pošta</ins> je uspešno <del>poslat!</del><ins>poslata!</ins>

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-Ovo će poslati imejl koristeći gornju konfiguraciju na vašu adresu, {email}.
+Ovo će poslati probnu e-poštu koristeći gornja podešavanja na Vašu e-poštu, {email}.
```

Ovo <del>će</del><ins>će</ins> poslati <del>imejl</del><ins>probnu</ins> <del>koristeći</del><ins>e-poštu</ins> <del>gornju</del><ins>koristeći</ins> <del>konfiguraciju</del><ins>gornja podešavanja</ins> na <del>vašu</del><ins>Vašu</ins> <del>adresu,</del><ins>e-poštu,</ins> {email}.

#### [`core.admin.extension.configure_scopes`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.configure_scopes%22)

> Configure Scopes

```diff
-Konfigurišite opsege
+Podesite opsege
```

<del>Konfigurišite</del><ins>Podesite</ins> opsege

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Uklanjanje će izbrisati sve unose baze podataka i sredstva u vezi sa ekstenzijom. Neće deinstalirati ekstenziju; to se mora uraditi preko Composera. Da li ste sigurni da želite da nastavite?
+Čišćenje će ukloniti sve unose baze podataka i resurse koji su povezani sa dodatkom. Neće deinstalirati dodatak; to se mora uraditi preko Composera. Da li ste sigurni da želite da nastavite?
```

<del>Uklanjanje</del><ins>Čišćenje</ins> će <del>izbrisati</del><ins>ukloniti</ins> sve unose baze podataka i <del>sredstva</del><ins>resurse</ins> <del>u</del><ins>koji</ins> <del>vezi</del><ins>su povezani</ins> sa <del>ekstenzijom.</del><ins>dodatkom.</ins> <del>Neće</del><ins>Neće</ins> deinstalirati <del>ekstenziju;</del><ins>dodatak;</ins> to se mora uraditi preko Composera. Da li ste sigurni da želite da nastavite?

#### [`core.admin.extension.disabled`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.disabled%22)

> Disabled

```diff
-Onemogućeno
+Onemogućeno
```

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Omogućite ovom dodatku da čita i piše podešavanja.
+Omogućite dodatak za pregled i promenu podešavanja.
```

<del>Omogućite ovom</del><ins>Omogućite</ins> <del>dodatku</del><ins>dodatak</ins> <del>da</del><ins>za</ins> <del>čita</del><ins>pregled</ins> i <del>piše</del><ins>promenu</ins> podešavanja.

#### [`core.admin.extension.enabled`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.enabled%22)

> Enabled

```diff
-Omogućeno
+Omogućeno
```

#### [`core.admin.extension.info_links.discuss`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.info_links.discuss%22)

> Discuss

```diff
-Raspravite
+Rasprava
```

#### [`core.admin.extension.info_links.donate`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.info_links.donate%22)

> Donate

```diff
-Donirajte
+Doniraj
```

#### [`core.admin.extension.info_links.website`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.info_links.website%22)

> Website

```diff
-Veb stranica
+Veb sajt
```

Veb <del>stranica</del><ins>sajt</ins>

#### [`core.admin.extension.readme.button_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.readme.button_label%22)

> README

```diff
-Pročitaj me
+README
```

#### [`core.admin.extension.readme.no_readme`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.readme.no_readme%22)

> This extension does not appear to have a README file

```diff
-Ovaj dodatak nema pročitaj me datoteku
+Ovaj dodatak nema README datoteku
```

Ovaj dodatak nema <del>pročitaj me</del><ins>README</ins> datoteku

#### [`core.admin.header.get_help`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.header.get_help%22)

> Get Help

```diff
-Traži pomoć
+Pomoć
```

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Molim sačekajte...
+Sačekajte...
```

#### [`core.admin.nav.categories.discussion`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.nav.categories.discussion%22)

> Discussion

```diff
-Diskusija
+Tema
```

#### [`core.admin.nav.categories.feature`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.nav.categories.feature%22)

> Features

```diff
-Mogućnosti
+Karakteristike
```

#### [`core.admin.permissions.allow_hide_own_posts_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.allow_hide_own_posts_label%22)

> Allow deleting own posts

```diff
-Dozvoli brisanje sopstvenih poruka
+Dozvoli brisanje sopstvenih odgovora
```

Dozvoli brisanje sopstvenih <del>poruka</del><ins>odgovora</ins>

#### [`core.admin.permissions.allow_post_editing_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.allow_post_editing_label%22)

> Allow post editing

```diff
-Dozvoli uređivanje poruka
+Dozvoli uređivanje odgovora
```

Dozvoli uređivanje <del>poruka</del><ins>odgovora</ins>

#### [`core.admin.permissions.create_access_token_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.create_access_token_label%22)

> Create access token

```diff
-Napravi token za pristup
+Napravi pristupni token
```

Napravi <del>token za</del><ins>pristupni</ins> <del>pristup</del><ins>token</ins>

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-Obriši diskusiju zauvek
+Trajno brisanje tema
```

#### [`core.admin.permissions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.delete_discussions_label%22)

> Delete discussions

```diff
-Obriši diskusiju
+Brisanje tema
```

#### [`core.admin.permissions.delete_posts_forever_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.delete_posts_forever_label%22)

> Delete posts forever

```diff
-Obriši poruke zauvek
+Trajno brisanje odgovora
```

#### [`core.admin.permissions.delete_posts_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.delete_posts_label%22)

> Delete posts

```diff
-Obriši poruke
+Brisanje odgovora
```

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-Prilagodi da može da se vidi ko šta da radi.
+Podesite ko može šta da vidi i radi.
```

<del>Prilagodi</del><ins>Podesite</ins> <del>da</del><ins>ko</ins> može <del>da</del><ins>šta</ins> <del>se</del><ins>da</ins> vidi<del> ko šta</del> <del>da</del><ins>i</ins> radi.

#### [`core.admin.permissions.edit_posts_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.edit_posts_label%22)

> Edit posts

```diff
-Uredi pouke
+Uređivanje odgovora
```

#### [`core.admin.permissions.edit_users_credentials_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.edit_users_credentials_label%22)

> Edit user credentials

```diff
-Uredi akreditive korisnika
+Uređivanje korisničkih podataka za prijavu
```

#### [`core.admin.permissions.edit_users_groups_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.edit_users_groups_label%22)

> Edit user groups

```diff
-Uredi korisničke grupe
+Uređivanje korisničkih grupa
```

#### [`core.admin.permissions.edit_users_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.edit_users_label%22)

> Edit user attributes

```diff
-Uredi atribute korisnika
+Uređivanje korisničkih svojstava
```

#### [`core.admin.permissions.moderate_access_tokens_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.moderate_access_tokens_label%22)

> Moderate Access Tokens

```diff
-Moderiši tokene za pristup
+Upravljanje pristupnim tokenima
```

#### [`core.admin.permissions.moderate_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.moderate_heading%22)

> Moderate

```diff
-Moderiši
+Upravljanje
```

#### [`core.admin.permissions.participate_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.participate_heading%22)

> Participate

```diff
-Učestvuj
+Učestvovanje
```

#### [`core.admin.permissions.post_without_throttle_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.post_without_throttle_label%22)

> Reply multiple times without waiting

```diff
-Odgovori iz više puta bez čekanja
+Slanje više odgovora bez čekanja
```

<del>Odgovori iz</del><ins>Slanje</ins> više <del>puta</del><ins>odgovora</ins> bez čekanja

#### [`core.admin.permissions.read_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.read_heading%22)

> Read

```diff
-Pročitaj
+Pregled
```

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-Preimenuj diskusiju
+Preimenovanje tema
```

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-Odgovori u diskusiju
+Odgovaranje u temama
```

<del>Odgovori</del><ins>Odgovaranje</ins> u <del>diskusiju</del><ins>temama</ins>

#### [`core.admin.permissions.sign_up_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.sign_up_label%22)

> Sign up

```diff
-Upiši se
+Napravi nalog
```

#### [`core.admin.permissions.start_discussions_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.start_discussions_label%22)

> Start discussions

```diff
-Pokreni diskusiju
+Pokretanje tema
```

#### [`core.admin.permissions.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.title%22)

> Permissions

```diff
-Dozvole pristupa
+Dozvole
```

Dozvole<del> pristupa</del>

#### [`core.admin.permissions.view_forum_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.view_forum_label%22)

> View forum (discussions and users)

```diff
-Pogledaj forum (diskusiju i korisnike)
+Pregled foruma (teme i korisnici)
```

<del>Pogledaj</del><ins>Pregled</ins> <del>forum</del><ins>foruma</ins> <del>(diskusiju</del><ins>(teme</ins> i <del>korisnike)</del><ins>korisnici)</ins>

#### [`core.admin.permissions.view_hidden_groups_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.view_hidden_groups_label%22)

> View hidden group badges

```diff
-Pogledaj skrivene značke grupe
+Pregled bedževa skrivenih grupa
```

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Uvek pogledaj poslednje vreme pristupa korisnika
+Pregled poslednje aktivnosti korisnika
```

<del>Uvek pogledaj</del><ins>Pregled</ins> poslednje<del> vreme</del> <del>pristupa</del><ins>aktivnosti</ins> korisnika

#### [`core.admin.permissions.view_post_ips_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions.view_post_ips_label%22)

> View post IP addresses

```diff
-Pogledaj IP adresu sa koje je poslata poruka
+Pregled IP adresa odgovora
```

<del>Pogledaj</del><ins>Pregled</ins> IP<del> adresu sa koje je</del> <del>poslata</del><ins>adresa</ins> <del>poruka</del><ins>odgovora</ins>

#### [`core.admin.permissions_controls.allow_indefinitely_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions_controls.allow_indefinitely_button%22)

> Indefinitely

```diff
-Neodređeno
+Neograničeno
```

#### [`core.admin.permissions_controls.allow_some_minutes_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions_controls.allow_some_minutes_button%22)

> {count, plural, one {For # minute} other {For # minutes}}

```diff
-{count, plural, one {Na # minut} other {Na # minuta}}
+{count, plural, one {Na # minut} other {Na # minut(a)}}
```

{count, plural, one {Na # minut} other {Na # <del>minuta}}</del><ins>minut(a)}}</ins>

#### [`core.admin.permissions_controls.allow_ten_minutes_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions_controls.allow_ten_minutes_button%22)

> For 10 minutes

```diff
-Za 10 minuta
+Na 10 minuta
```

<del>Za</del><ins>Na</ins> 10 minuta

#### [`core.admin.permissions_controls.signup_closed_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions_controls.signup_closed_button%22)

> Closed

```diff
-Zatvoreno
+Onemogućeno
```

#### [`core.admin.permissions_controls.signup_open_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.permissions_controls.signup_open_button%22)

> Open

```diff
-Otvoreno
+Omogućeno
```

#### [`core.admin.settings.saved_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.settings.saved_message%22)

> Your changes were saved.

```diff
-Vaše promene su zapisane.
+Izmene su sačuvane.
```

<del>Vaše promene</del><ins>Izmene</ins> su <del>zapisane.</del><ins>sačuvane.</ins>

#### [`core.admin.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.upload_image.upload_button%22)

> Choose an Image...

```diff
-Izaberi sliku...
+Odaberite sliku...
```

<del>Izaberi</del><ins>Odaberite</ins> sliku...

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-Paginirana lisa svih korisnika na vašem forumu.
+Lista svih članova na vašem forumu.
```

<del>Paginirana lisa</del><ins>Lista</ins> svih <del>korisnika</del><ins>članova</ins> na vašem forumu.

#### [`core.admin.users.grid.columns.email.visibility_hide`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.grid.columns.email.visibility_hide%22)

> Hide email address

```diff
-Sakrij adresu e-pošte
+Sakrij e-poštu
```

Sakrij <del>adresu e-pošte</del><ins>e-poštu</ins>

#### [`core.admin.users.grid.columns.email.visibility_show`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.grid.columns.email.visibility_show%22)

> Show email address

```diff
-Prikaži adresu e-pošte
+Prikaži e-poštu
```

Prikaži <del>adresu e-pošte</del><ins>e-poštu</ins>

#### [`core.admin.users.grid.columns.group_badges.no_badges`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.grid.columns.group_badges.no_badges%22)

> None

```diff
-Ništa
+Negrupisan
```

#### [`core.admin.users.grid.columns.join_time.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.grid.columns.join_time.title%22)

> Joined

```diff
-Pridružio se
+Pridružen
```

#### [`core.admin.users.grid.columns.user_id.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.grid.columns.user_id.title%22)

> ID

```diff
-Identifikator
+ID
```

#### [`core.admin.users.pagination.back_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.pagination.back_button%22)

> Previous page

```diff
-Predhodna stranica
+Prethodna stranica
```

<del>Predhodna</del><ins>Prethodna</ins> stranica

#### [`core.admin.users.pagination.last_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.pagination.last_button%22)

> Go to last page

```diff
-Idi na zadnju stranicu
+Idi na poslednju stranicu
```

Idi na <del>zadnju</del><ins>poslednju</ins> stranicu

#### [`core.admin.users.pagination.page_counter`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.users.pagination.page_counter%22)

> Page {current} of {total}

```diff
-Stranica broj {current} od ukupno {total}
+{current}. stranica od {total}
```

<del>Stranica broj</del><ins>{current}.</ins> <del>{current}</del><ins>stranica</ins> od<del> ukupno</del> {total}

#### [`core.email.activate_account.body`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.activate_account.body%22)

> Hey {username}!
>
> Someone (hopefully you!) has signed up to {forum} with this email address.
>
> If this was you, simply click the following link and your account will be activated:
> {url}
>
> If you did not sign up, please ignore this email.
>

```diff
-Dobar dan {username},
+Zdravo {username}!

-Neko (nadamo se vi!) je otvorio nalog na {forum} sa ovom adresom e-pošte.
+Neko se (nadamo se da si Vi!) registrovao na {forum} sa ovom email adresom.

-Ako ste to bili vi, jednostavno kliknite na link ispod i vaš nalog će biti aktiviran.
+Ako ste Vi, jednostavno kliknite na sledeći link i Vaš nalog će biti aktiviran:
 {url}

-Ako se vi niste prijavili za ovaj nalog, molimo vas da ignorišete ovu poruku.
+Ako niste bili Vi, molimo Vas da ignorišete ovu poruku!

```

<del>Dobar dan</del><ins>Zdravo</ins> <del>{username},</del><ins>{username}!</ins><br /><br />Neko<ins> se</ins> (nadamo se <del>vi!)</del><ins>da</ins> <del>je</del><ins>si</ins> <del>otvorio</del><ins>Vi!)</ins> <del>nalog</del><ins>registrovao</ins> na {forum} sa ovom <del>adresom</del><ins>email</ins> <del>e-pošte.</del><ins>adresom.</ins><br /><br />Ako ste<del> to bili</del> <del>vi,</del><ins>Vi,</ins> jednostavno kliknite na <del>link</del><ins>sledeći</ins> <del>ispod</del><ins>link</ins> i <del>vaš</del><ins>Vaš</ins> nalog <del>će</del><ins>će</ins> biti <del>aktiviran.</del><ins>aktiviran:</ins><br />{url}<br /><br />Ako<del> se vi</del> niste<del> prijavili za</del> <del>ovaj</del><ins>bili</ins> <del>nalog,</del><ins>Vi,</ins> molimo <del>vas</del><ins>Vas</ins> da ignorišete ovu <del>poruku.</del><ins>poruku!</ins><br />

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-Aktivirajte vaš novi nalog
+Aktivirajte svoj novi nalog
```

Aktivirajte <del>vaš</del><ins>svoj</ins> novi nalog

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-Potvrdite vašu novu adresu za e-poštu
+Potvrdite svoju novu email adresu
```

Potvrdite <del>vašu</del><ins>svoju</ins> novu<del> adresu</del> <del>za</del><ins>email</ins> <del>e-poštu</del><ins>adresu</ins>

#### [`core.email.send_test.subject`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.send_test.subject%22)

> Flarum Email Test

```diff
-Flarum test e-pošte
+Probni email
```

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-Lozinka koju ste uneli nije ispravna.
+Lozinka koju ste uneli nije tačna.
```

Lozinka koju ste uneli nije <del>ispravna.</del><ins>tačna.</ins>

#### [`core.forum.change_password.send_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.change_password.send_button%22)

> Send Password Reset Email

```diff
-Pošaljite poruku za poništavanje lozinke e-poštom
+Pošalji e-poštu za promenu lozinke
```

<del>Pošaljite</del><ins>Pošalji</ins> <del>poruku</del><ins>e-poštu</ins> za <del>poništavanje</del><ins>promenu</ins> lozinke<del> e-poštom</del>

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Pritisnite dugme ispod i proverite vašu e-poštu za link da promenite vašu lozinku.
+Kliknite na dugme ispod kako biste dobili e-poštu za promenu lozinke.
```

<del>Pritisnite</del><ins>Kliknite na</ins> dugme ispod <del>i</del><ins>kako</ins> <del>proverite</del><ins>biste</ins> <del>vašu</del><ins>dobili</ins> e-poštu za<del> link da promenite</del> <del>vašu</del><ins>promenu</ins> <del>lozinku.</del><ins>lozinke.</ins>

#### [`core.forum.composer.exit_full_screen_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer.exit_full_screen_tooltip%22)

> Exit Full Screen

```diff
-Izađite iz režima preko celog ekrana
+Izađi iz režima celog ekrana
```

<del>Izađite</del><ins>Izađi</ins> iz režima<del> preko</del> celog ekrana

#### [`core.forum.composer.full_screen_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer.full_screen_tooltip%22)

> Full Screen

```diff
-Režim preko celog ekrana
+Režim celog ekrana
```

Režim <del>preko </del>celog ekrana

#### [`core.forum.composer.minimize_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer.minimize_tooltip%22)

> Minimize

```diff
-Minimizuj
+Umanji
```

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Napiši poruku...
+Započni kucanje...
```

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Niste objavili diskusiju. Da li želite da je poništite?
+Niste objavili temu. Da li želite da odustanete?
```

Niste objavili <del>diskusiju.</del><ins>temu.</ins> Da li želite da<del> je</del> <del>poništite?</del><ins>odustanete?</ins>

#### [`core.forum.composer_discussion.submit_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_discussion.submit_button%22)

> Post Discussion

```diff
-Objavi diskusiju
+Objavi temu
```

Objavi <del>diskusiju</del><ins>temu</ins>

#### [`core.forum.composer_discussion.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_discussion.title%22)

> =&gt; core.ref.start\_a\_discussion

```diff
-Počni novu diskusiju
+=> core.ref.start_a_discussion
```

#### [`core.forum.composer_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_discussion.title_placeholder%22)

> Discussion Title

```diff
-Naslov diskusije
+Naslov teme
```

Naslov <del>diskusije</del><ins>teme</ins>

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Niste zabeležili vaše promene. Da li želite da ih poništite?
+Niste sačuvali izmene. Da li želite da odustanete?
```

Niste <del>zabeležili vaše</del><ins>sačuvali</ins> <del>promene.</del><ins>izmene.</ins> Da li želite da<del> ih</del> <del>poništite?</del><ins>odustanete?</ins>

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Vaša izmena je izvršena.
+Izmena je izvršena.
```

<del>Vaša izmena</del><ins>Izmena</ins> je izvršena.

#### [`core.forum.composer_edit.post_link`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_edit.post_link%22)

> Post #{number} in {discussion}

```diff
-Poruka #{number} u {discussion}
+{number}. odgovor u {discussion}
```

<del>Poruka</del><ins>{number}.</ins> <del>#{number}</del><ins>odgovor</ins> u {discussion}

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Niste objavili vašu poruku. Da li želite da je poništite?
+Niste poslali odgovor. Da li želite da odustanete?
```

Niste <del>objavili vašu</del><ins>poslali</ins> <del>poruku.</del><ins>odgovor.</ins> Da li želite da<del> je</del> <del>poništite?</del><ins>odustanete?</ins>

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Vaša poruka je objavljena.
+Vaš odgovor je poslat.
```

<del>Vaša</del><ins>Vaš</ins> <del>poruka</del><ins>odgovor</ins> je <del>objavljena.</del><ins>poslat.</ins>

#### [`core.forum.composer_reply.submit_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.composer_reply.submit_button%22)

> Post Reply

```diff
-Objavi odgovor
+Odgovori
```

#### [`core.forum.discussion_controls.cannot_reply_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_button%22)

> Can't Reply

```diff
-Ne možete odgovoriti
+Nije moguće odgovoriti
```

<del>Ne</del><ins>Nije</ins> <del>možete</del><ins>moguće</ins> odgovoriti

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-Nemate dozvolu da odgovorite u ovoj diskusiji.
+Nemate dozvolu da odgovorite.
```

Nemate dozvolu da <del>odgovorite u ovoj diskusiji.</del><ins>odgovorite.</ins>

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-Da li ste sigurni da želite da izbrišete ovu diskusiju?
+Da li ste sigurni da želite da izbrišete ovu temu?
```

Da li ste sigurni da želite da izbrišete ovu <del>diskusiju?</del><ins>temu?</ins>

#### [`core.forum.discussion_controls.log_in_to_reply_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_controls.log_in_to_reply_button%22)

> Log In to Reply

```diff
-Prijavite se da odgovoriš
+Prijavite se da biste odgovorili
```

Prijavite se da <del>odgovoriš</del><ins>biste odgovorili</ins>

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-Uključi / isključi padajući meni za aktivnosti u diskusijama
+Uključi/isključi padajući meni za radnje teme
```

<del>Uključi / isključi</del><ins>Uključi/isključi</ins> <del>padajući</del><ins>padajući</ins> meni za<del> aktivnosti</del> <del>u</del><ins>radnje</ins> <del>diskusijama</del><ins>teme</ins>

#### [`core.forum.discussion_list.empty_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_list.empty_text%22)

> It looks as though there are no discussions here.

```diff
-Čini se da ovde još uvek nema diskusija.
+Izgleda da ovde još uvek nema tema.
```

<del>Čini se</del><ins>Izgleda</ins> da ovde još uvek nema <del>diskusija.</del><ins>tema.</ins>

#### [`core.forum.discussion_list.replied_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_list.replied_text%22)

> {username} replied {ago}

```diff
-{username} odgovorio {ago}
+{username} odgovara {ago}
```

{username} <del>odgovorio</del><ins>odgovara</ins> {ago}

#### [`core.forum.discussion_list.started_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_list.started_text%22)

> {username} started {ago}

```diff
-{username} otpočeo {ago}
+{username} započinje {ago}
```

{username} <del>otpočeo</del><ins>započinje</ins> {ago}

#### [`core.forum.discussion_list.total_replies_a11y_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_list.total_replies_a11y_label%22)

> {count, plural, one {# reply} other {# replies}}

```diff
-{count, plural, one {# odgovor} other {# odgovora}}
+{count, plural, one {# odgovor} other {# odgovor(a)}}
```

{count, plural, one {# odgovor} other {# <del>odgovora}}</del><ins>odgovor(a)}}</ins>

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# nepročitan odgovor} few {# nepročitana odgovora} other {# nepročitanih odgovora}}. Označite {count, plural, one {nepročitani odgovor} other {nepročitane odgovore}} kao pročitane.
+{count, plural, one {# nepročitan odgovor} other {# nepročitana(ih) odgovora}}. Označi {count, plural, one {odgovor} other {odgovora}} kao pročitan(a).
```

{count, plural, one {# nepročitan odgovor} <del>few {# nepročitana odgovora} </del>other {# <del>nepročitanih</del><ins>nepročitana(ih)</ins> odgovora}}. <del>Označite</del><ins>Označi</ins> {count, plural, one<del> {nepročitani</del> <del>odgovor}</del><ins>{odgovor}</ins> other<del> {nepročitane</del> <del>odgovore}}</del><ins>{odgovora}}</ins> kao <del>pročitane.</del><ins>pročitan(a).</ins>

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Ukoliko je mejl adresa koju ste uneli registrovana na ovom sajtu, poslaćemo vam mejl sa linkom za resetovanje vaše šifre. Ukoliko ne dobijete mejl za nekoliko minuta, proverite da nije završio u fascikli za nepoželjnu poštu.
+Ukoliko je uneta e-pošta registrovana na ovom sajtu, poslaćemo Vam e-poštu koja sadrži vezu za promenu lozinke. Proverite fasciklu sa neželjenom e-poštom ukoliko je ne primite u narednih minut ili dva.
```

Ukoliko je <del>mejl adresa koju ste</del><ins>uneta</ins> <del>uneli</del><ins>e-pošta</ins> registrovana na ovom sajtu, poslaćemo<del> vam mejl</del> <del>sa</del><ins>Vam</ins> <del>linkom</del><ins>e-poštu</ins> <del>za</del><ins>koja</ins> <del>resetovanje</del><ins>sadrži</ins> <del>vaše</del><ins>vezu</ins> <del>šifre.</del><ins>za</ins> <del>Ukoliko</del><ins>promenu</ins> <del>ne</del><ins>lozinke.</ins> <del>dobijete</del><ins>Proverite</ins> <del>mejl</del><ins>fasciklu</ins> <del>za</del><ins>sa</ins> <del>nekoliko</del><ins>neželjenom</ins> <del>minuta,</del><ins>e-poštom</ins> <del>proverite</del><ins>ukoliko</ins> <del>da</del><ins>je</ins> <del>nije</del><ins>ne</ins> <del>završio</del><ins>primite</ins> u <del>fascikli</del><ins>narednih</ins> <del>za</del><ins>minut</ins> <del>nepoželjnu</del><ins>ili</ins> <del>poštu.</del><ins>dva.</ins>

#### [`core.forum.forgot_password.not_found_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.forgot_password.not_found_message%22)

> There is no user registered with that email address.

```diff
-Ne postoji korisnik sa ovom adresom e-pošte.
+Nijedan korisnik nije registrovan sa tom e-poštom.
```

<del>Ne postoji</del><ins>Nijedan</ins> korisnik <del>sa</del><ins>nije</ins> <del>ovom</del><ins>registrovan</ins> <del>adresom</del><ins>sa</ins> <del>e-pošte.</del><ins>tom e-poštom.</ins>

#### [`core.forum.forgot_password.submit_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.forgot_password.submit_button%22)

> Recover Password

```diff
-Postavite novu lozinku
+Pošalji
```

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Napišite vašu adresu e-pošte i poslaćemo vam link da promenite vašu lozinku.
+Unesite svoju e-poštu i poslaćemo Vam vezu za promenu lozinke.
```

<del>Napišite vašu</del><ins>Unesite</ins> <del>adresu</del><ins>svoju</ins> <del>e-pošte</del><ins>e-poštu</ins> i poslaćemo<del> vam</del> <del>link</del><ins>Vam</ins> <del>da</del><ins>vezu</ins> <del>promenite</del><ins>za</ins> <del>vašu</del><ins>promenu</ins> <del>lozinku.</del><ins>lozinke.</ins>

#### [`core.forum.forgot_password.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.forgot_password.title%22)

> Forgot Password

```diff
-Zaboravili ste šifru
+Zaboravljena lozinka
```

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-Vrati se na listu diskusija
+Povratak na listu tema
```

<del>Vrati se</del><ins>Povratak</ins> na listu <del>diskusija</del><ins>tema</ins>

#### [`core.forum.header.locale_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.header.locale_dropdown_accessible_label%22)

> Change forum locale

```diff
-Promenite jezik
+Promenite jezik foruma
```

Promenite jezik<ins> foruma</ins>

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-Uključi / isključi padajući meni sa opcijama za sesiju
+Uključite/Isključite padajući meni sa opcijama sesije
```

<del>Uključi / isključi</del><ins>Uključite/Isključite</ins> <del>padajući</del><ins>padajući</ins> meni sa opcijama<del> za</del> <del>sesiju</del><ins>sesije</ins>

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-Ne možete početi diskusiju
+Započnite diskusiju
```

<del>Ne možete početi</del><ins>Započnite</ins> diskusiju

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-Da li ste sigurni da želite da obeležite sve diskusije kao pročitane?
+Da li ste sigurni da želite da sve diskusije označite kao pročitane?
```

Da li ste sigurni da želite da <del>obeležite </del>sve diskusije<ins> označite</ins> kao pročitane?

#### [`core.forum.index.refresh_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index.refresh_tooltip%22)

> Refresh

```diff
-Osveži
+Osvežite
```

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-Uključi/isključi padajuću meni za navigaciju
+Uključite/Isključite padajući meni za navigaciju
```

<del>Uključi/isključi</del><ins>Uključite/Isključite</ins> <del>padajuću</del><ins>padajući</ins> meni za navigaciju

#### [`core.forum.index_sort.latest_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index_sort.latest_button%22)

> Latest

```diff
-Najnovija tema
+Najnoviji odgovori
```

#### [`core.forum.index_sort.newest_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index_sort.newest_button%22)

> Newest

```diff
-Najnovije poruke
+Najnovije diskusije
```

Najnovije <del>poruke</del><ins>diskusije</ins>

#### [`core.forum.index_sort.oldest_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index_sort.oldest_button%22)

> Oldest

```diff
-Najstarija tema
+Najstarije diskusije
```

#### [`core.forum.index_sort.relevance_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index_sort.relevance_button%22)

> Relevance

```diff
-Po relevantnosti
+Relevantne diskusije
```

#### [`core.forum.index_sort.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index_sort.toggle_dropdown_accessible_label%22)

> Change discussion list sorting

```diff
-Promeni redosled sortiranja diskusija
+Promenite sortiranje liste diskusija
```

<del>Promeni</del><ins>Promenite</ins> <del>redosled</del><ins>sortiranje</ins> <del>sortiranja</del><ins>liste</ins> diskusija

#### [`core.forum.index_sort.top_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.index_sort.top_button%22)

> Top

```diff
-Najviše odgovora
+Popularne diskusije
```

#### [`core.forum.log_in.forgot_password_link`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.log_in.forgot_password_link%22)

> Forgot password?

```diff
-Zaboravili ste lozinku?
+Zaboravljena lozinka?
```

#### [`core.forum.log_in.invalid_login_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.log_in.invalid_login_message%22)

> Your login details were incorrect.

```diff
-Uneseni podatci za pristup nisu ispravni.
+Podaci za prijavu su netačni.
```

<del>Uneseni podatci</del><ins>Podaci</ins> za <del>pristup</del><ins>prijavu</ins> <del>nisu</del><ins>su</ins> <del>ispravni.</del><ins>netačni.</ins>

#### [`core.forum.log_in.remember_me_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.log_in.remember_me_label%22)

> Remember Me

```diff
-Sačuvaj
+Zapamti me
```

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-Nemate nalog? <a>Pridružite se</a>
+Nemate nalog? <a>Registracija</a>
```

Nemate nalog? <del>&lt;a&gt;Pridružite se&lt;/a&gt;</del><ins>&lt;a&gt;Registracija&lt;/a&gt;</ins>

#### [`core.forum.log_in.username_or_email_placeholder`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.log_in.username_or_email_placeholder%22)

> Username or Email

```diff
-Korisničko ime ili adresa e-pošte
+Korisničko ime ili Email
```

Korisničko ime ili <del>adresa e-pošte</del><ins>Email</ins>

#### [`core.forum.notifications.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.notifications.discussion_renamed_text%22)

> {username} changed the title

```diff
-{username} je promenio naslov
+{username} je promenio/la naslov diskusije
```

{username} je <del>promenio</del><ins>promenio/la</ins> naslov<ins> diskusije</ins>

#### [`core.forum.notifications.mark_as_read_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.notifications.mark_as_read_tooltip%22)

> Mark as Read

```diff
-Obeleži kao pročitano
+Označite kao pročitano
```

<del>Obeleži</del><ins>Označite</ins> kao pročitano

#### [`core.forum.notifications.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.notifications.toggle_dropdown_accessible_label%22)

> View notifications

```diff
-Pogledaj obaveštenja
+Pogledajte obaveštenja
```

<del>Pogledaj</del><ins>Pogledajte</ins> obaveštenja

#### [`core.forum.post.edited_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post.edited_text%22)

> Edited

```diff
-Uređeno
+Izmenjeno
```

#### [`core.forum.post.edited_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post.edited_tooltip%22)

> {username} edited {ago}

```diff
-{username} uredio {ago}
+{username} je izmenio/la odgovor {ago}
```

{username} <del>uredio</del><ins>je izmenio/la odgovor</ins> {ago}

#### [`core.forum.post.number_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post.number_tooltip%22)

> Post #{number}

```diff
-Poruka #{number}
+Odgovor #{number}
```

<del>Poruka</del><ins>Odgovor</ins> #{number}

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Da li želite da obrišete ovu poruku zauvek? Ova radnja ne može biti opozvana.
+Da li ste sigurni da želite zauvek izbrisati ovaj odgovor? Ova radnja se ne može opozvati.
```

Da li <del>želite</del><ins>ste sigurni</ins> da <del>obrišete</del><ins>želite</ins> <del>ovu</del><ins>zauvek</ins> <del>poruku</del><ins>izbrisati</ins> <del>zauvek?</del><ins>ovaj odgovor?</ins> Ova radnja<ins> se</ins> ne može<del> biti</del> <del>opozvana.</del><ins>opozvati.</ins>

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-Da li ste sigurni da želite da obrišete ovu poruku?
+Da li ste sigurni da želite da izbrišete ovaj odgovor?
```

Da li ste sigurni da želite da <del>obrišete</del><ins>izbrišete</ins> <del>ovu</del><ins>ovaj</ins> <del>poruku?</del><ins>odgovor?</ins>

#### [`core.forum.post_scrubber.now_link`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post_scrubber.now_link%22)

> Now

```diff
-Sada
+Najnovije
```

#### [`core.forum.post_scrubber.original_post_link`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post_scrubber.original_post_link%22)

> Original Post

```diff
-Originalna poruka
+Najstarije
```

#### [`core.forum.post_scrubber.viewing_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post_scrubber.viewing_text%22)

> {count, plural, one {{index} of {formattedCount} post} other {{index} of {formattedCount} posts}}

```diff
-{count, plural, one {poruka {index} od {formattedCount}} other {poruka {index} od {formattedCount}}}
+{count, plural, one {{index} od {formattedCount} odgovora} other {{index} od {formattedCount} odgovora}}
```

{count, plural, one <del>{poruka {index}</del><ins>{{index}</ins> od <del>{formattedCount}}</del><ins>{formattedCount}</ins> <del>other</del><ins>odgovora}</ins> <del>{poruka</del><ins>other</ins> <del>{index}</del><ins>{{index}</ins> od <del>{formattedCount}}}</del><ins>{formattedCount} odgovora}}</ins>

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} je promenio naslov na {new} {time}.
+{username} je promenio/la naslov u {new}.
```

{username} je <del>promenio</del><ins>promenio/la</ins> naslov<del> na</del> <del>{new}</del><ins>u</ins> <del>{time}.</del><ins>{new}.</ins>

#### [`core.forum.rename_discussion.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.rename_discussion.title%22)

> Rename Discussion

```diff
-Preimenuj diskusiju
+Preimenujte diskusiju
```

<del>Preimenuj</del><ins>Preimenujte</ins> diskusiju

#### [`core.forum.search.all_discussions_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.search.all_discussions_button%22)

> Search all discussions for "{query}"

```diff
-Pretraži sve diskusije sa "{query}"
+Pretražite sve diskusije za "{query}"
```

<del>Pretraži</del><ins>Pretražite</ins> sve diskusije <del>sa</del><ins>za</ins> "{query}"

#### [`core.forum.sign_up.log_in_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.sign_up.log_in_text%22)

> Already have an account? &lt;a&gt;Log In&lt;/a&gt;

```diff
-Da li već imate nalog? <a>Prijavite se</a>
+Već imate nalog? <a>Prijava</a>
```

<del>Da li već</del><ins>Već</ins> imate nalog?<del> &lt;a&gt;Prijavite</del> <del>se&lt;/a&gt;</del><ins>&lt;a&gt;Prijava&lt;/a&gt;</ins>

#### [`core.forum.sign_up.welcome_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.sign_up.welcome_text%22)

> Welcome, {username}!

```diff
-Dobrodošli {username}!
+Dobrodošli, {username}!
```

<del>Dobrodošli</del><ins>Dobrodošli,</ins> {username}!

#### [`core.forum.user.avatar_upload_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user.avatar_upload_tooltip%22)

> Upload a new avatar

```diff
-Otpremi novog avatara
+Otpremite novu sliku
```

#### [`core.forum.user.in_discussion_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user.in_discussion_text%22)

> In {discussion}

```diff
-U {discussion}
+U diskusiji {discussion}
```

U <ins>diskusiji </ins>{discussion}

#### [`core.forum.user.joined_date_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user.joined_date_text%22)

> Joined {ago}

```diff
-Pridružio se {ago}
+Član od {ago}
```

<del>Pridružio</del><ins>Član</ins> <del>se</del><ins>od</ins> {ago}

#### [`core.forum.user.online_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user.online_text%22)

> Online

```diff
-Na mreži
+Online
```

#### [`core.forum.user.posts_empty_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user.posts_empty_text%22)

> It looks like there are no posts here.

```diff
-Izgleda da ovde nema poruka.
+Izgleda da ovde nema odgovora.
```

Izgleda da ovde nema <del>poruka.</del><ins>odgovora.</ins>

#### [`core.forum.user_controls.button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user_controls.button%22)

> Controls

```diff
-Kontrole
+Opcije
```

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-Da li ste sigurni da želite da obrišete ovog korisnika? Njegove poruke NEĆE biti obrisane.
+Da li ste sigurni da želite da izbrišete ovog korisnika? Odgovori korisnika NEĆE biti izbrisani.
```

Da li ste sigurni da želite da <del>obrišete</del><ins>izbrišete</ins> ovog korisnika? <del>Njegove</del><ins>Odgovori</ins> <del>poruke</del><ins>korisnika</ins> <del>NEĆE</del><ins>NEĆE</ins> biti <del>obrisane.</del><ins>izbrisani.</ins>

#### [`core.forum.user_controls.delete_success_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user_controls.delete_success_message%22)

> User &lt;i&gt;{username} ({email})&lt;/i&gt; was deleted

```diff
-Korisnik <i>{username} ({email})</i> je obrisan
+Korisnik <i>{username} ({email})</i> je uspešno izbrisan
```

Korisnik &lt;i&gt;{username} ({email})&lt;/i&gt; je <del>obrisan</del><ins>uspešno izbrisan</ins>

#### [`core.forum.user_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.user_controls.toggle_dropdown_accessible_label%22)

> Toggle user controls dropdown menu

```diff
-Uključi / isključi padajući meni za korisničke kontrole
+Uključite/Isključite padajući meni korisničkih kontrola
```

<del>Uključi / isključi</del><ins>Uključite/Isključite</ins> <del>padajući</del><ins>padajući</ins> meni<del> za</del> <del>korisničke</del><ins>korisničkih</ins> <del>kontrole</del><ins>kontrola</ins>

#### [`core.forum.welcome_hero.hide`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.forum.welcome_hero.hide%22)

> Hide welcome message

```diff
-Sakrite poruku dobrodošlice
+Sakrijte poruku dobrodošlice
```

<del>Sakrite</del><ins>Sakrijte</ins> poruku dobrodošlice

#### [`core.lib.badge.hidden_tooltip`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.badge.hidden_tooltip%22)

> Hidden

```diff
-Skriveno
+Sakriveno
```

#### [`core.lib.debug_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.debug_button%22)

> Debug

```diff
-Debagiraj
+Otklanjanje grešaka
```

#### [`core.lib.dropdown.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.dropdown.toggle_dropdown_accessible_label%22)

> Toggle dropdown menu

```diff
-Uključi / isključi padajući meni
+Uključite/Isključite padajući meni
```

<del>Uključi / isključi</del><ins>Uključite/Isključite</ins> <del>padajući</del><ins>padajući</ins> meni

#### [`core.lib.edit_user.activate_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.edit_user.activate_button%22)

> Activate User

```diff
-Aktiviraj korisnika
+Aktiviraj člana
```

Aktiviraj <del>korisnika</del><ins>člana</ins>

#### [`core.lib.edit_user.nothing_available`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.edit_user.nothing_available%22)

> You are not allowed to edit this user.

```diff
-Vi niste ovlašćeni da pravite promene na ovom korisniku.
+Nije vam dozvoljeno da uređujete ovog člana.
```

<del>Vi</del><ins>Nije</ins> <del>niste</del><ins>vam</ins> <del>ovlašćeni</del><ins>dozvoljeno</ins> da<del> pravite promene</del> <del>na</del><ins>uređujete</ins> <del>ovom</del><ins>ovog</ins> <del>korisniku.</del><ins>člana.</ins>

#### [`core.lib.edit_user.set_password_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.edit_user.set_password_label%22)

> Set new password

```diff
-Izaberi novu lozinku
+Postavite novu lozinku
```

<del>Izaberi</del><ins>Postavite</ins> novu lozinku

#### [`core.lib.error.dependent_extensions_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.error.dependent_extensions_message%22)

> Cannot disable {extension} until the following dependent extensions are disabled: {extensions}

```diff
-Nemoguće je isključiti {extension} sve dok ne isključite dodatke koji zavise od njega: {extensions}
+Ne možete onemogućiti {extension} dok se ne onemoguće sledeće zavisne ekstenzije: {extensions}
```

<del>Nemoguće</del><ins>Ne</ins> <del>je</del><ins>možete</ins> <del>isključiti</del><ins>onemogućiti</ins> {extension}<del> sve</del> dok<del> ne</del> <del>isključite</del><ins>se</ins> <del>dodatke</del><ins>ne</ins> <del>koji</del><ins>onemoguće</ins> <del>zavise</del><ins>sledeće</ins> <del>od</del><ins>zavisne</ins> <del>njega:</del><ins>ekstenzije:</ins> {extensions}

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-Nemoguće je uključiti {extension} ukoliko ne uključite dodatke od kojih on zavisi: {extensions}
+Ne možete omogućiti {extension} dok se ne omogući sledeće: {extensions}
```

<del>Nemoguće</del><ins>Ne</ins> <del>je</del><ins>možete</ins> <del>uključiti</del><ins>omogućiti</ins> {extension}<del> ukoliko ne uključite</del> <del>dodatke</del><ins>dok</ins> <del>od</del><ins>se</ins> <del>kojih</del><ins>ne</ins> <del>on</del><ins>omogući</ins> <del>zavisi:</del><ins>sledeće:</ins> {extensions}

#### [`core.lib.meta_titles.with_page_title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.meta_titles.with_page_title%22)

> {pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: Page # - {forumName}}}

```diff
-{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: strana # - {forumName}}}
+{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: Stranica # - {forumName}}}
```

{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: <del>strana</del><ins>Stranica</ins> # - {forumName}}}

#### [`core.lib.meta_titles.without_page_title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.meta_titles.without_page_title%22)

> {pageNumber, plural, =1 {{forumName}} other {Page # - {forumName}}}

```diff
-{pageNumber, plural, =1 {{forumName}} other {Strana # - {forumName}}}
+{pageNumber, plural, =1 {{forumName}} other {Stranica # - {forumName}}}
```

{pageNumber, plural, =1 {{forumName}} other <del>{Strana</del><ins>{Stranica</ins> # - {forumName}}}

#### [`core.lib.series.three_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.series.three_text%22)

> {first}, {second}, and {third}

```diff
-{first}, {second} i {third}
+{first}, {second}, i {third}
```

{first}, <del>{second}</del><ins>{second},</ins> i {third}

#### [`core.ref.change_password`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.change_password%22)

> Change Password

```diff
-Pormeni lozinku
+Promena lozinke
```

#### [`core.ref.confirm_email`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.confirm_email%22)

> Confirm Email

```diff
-Potvrdite e-poštu
+Potvrda email adrese
```

#### [`core.ref.confirm_password`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.confirm_password%22)

> Confirm Password

```diff
-Potvrdite lozinku
+Potvrda lozinke
```

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Poslali smo vam poruku za potvrdu e-pošte na {email}. Ako ne stigne uskoro, proverite fasciklu u koju stiže neželjena e-pošta.
+Poslali smo Vam email sa potvrdom na {email}. Ako uskoro ne stigne, proverite direktorijum sa neželjenom poštom.
```

Poslali smo <del>vam poruku</del><ins>Vam</ins> <del>za</del><ins>email</ins> <del>potvrdu</del><ins>sa</ins> <del>e-pošte</del><ins>potvrdom</ins> na {email}. Ako <del>ne</del><ins>uskoro</ins> <del>stigne</del><ins>ne</ins> <del>uskoro,</del><ins>stigne,</ins> proverite<del> fasciklu u</del> <del>koju</del><ins>direktorijum</ins> <del>stiže</del><ins>sa</ins> <del>neželjena</del><ins>neželjenom</ins> <del>e-pošta.</del><ins>poštom.</ins>

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-Dodajte HTML koji će biti prikazan na dnu svake stranice.
+Dodajte HTML kod koji će se prikazivati na samom dnu stranice.
```

Dodajte HTML <ins>kod </ins>koji <del>će</del><ins>će</ins> <del>biti</del><ins>se</ins> <del>prikazan</del><ins>prikazivati</ins> na <del>dnu</del><ins>samom</ins> <del>svake</del><ins>dnu</ins> stranice.

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-Dodajte HTML koji će biti prikazan na samom vrhu svake stranice, iznad Flarumovog zaglavlja.
+Dodajte HTML kod koji će se prikazivati na samom vrhu stranice, iznad Flarumovog zaglavlja.
```

Dodajte HTML <ins>kod </ins>koji <del>će</del><ins>će</ins> <del>biti</del><ins>se</ins> <del>prikazan</del><ins>prikazivati</ins> na samom vrhu<del> svake</del> stranice, iznad Flarumovog zaglavlja.

#### [`core.ref.delete`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.delete%22)

> Delete

```diff
-Izbriši
+Izbrišite
```

#### [`core.ref.delete_forever`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.delete_forever%22)

> Delete Forever

```diff
-Izbriši zauvek
+Izbrišite zauvek
```

<del>Izbriši</del><ins>Izbrišite</ins> zauvek

#### [`core.ref.discussions`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.discussions%22)

> Discussions

```diff
-Doskusije
+Diskusije
```

#### [`core.ref.edit`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.edit%22)

> Edit

```diff
-Uredi
+Izmenite
```

#### [`core.ref.edit_user`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.edit_user%22)

> Edit User

```diff
-Uredi korisnika
+Izmenite člana
```

#### [`core.ref.email`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.email%22)

> Email

```diff
-E-pošta
+Email
```

#### [`core.ref.extensions`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.extensions%22)

> Extensions

```diff
-Proširenja
+Ekstenzije
```

#### [`core.ref.icon`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.icon%22)

> Icon

```diff
-Ikona
+Ikonica
```

#### [`core.ref.load_more`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.load_more%22)

> Load More

```diff
-Učitaj još
+Učitajte više
```

#### [`core.ref.loading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.loading%22)

> Loading...

```diff
-Učitava se...
+Učitavanje..
```

#### [`core.ref.log_in`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.log_in%22)

> Log In

```diff
-Prijavite se
+Prijava
```

#### [`core.ref.log_out`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.log_out%22)

> Log Out

```diff
-Odjavite se
+Odjava
```

#### [`core.ref.mark_all_as_read`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.mark_all_as_read%22)

> Mark All as Read

```diff
-Obeležite sve kao pročitano
+Označite sve kao pročitano
```

<del>Obeležite</del><ins>Označite</ins> sve kao pročitano

#### [`core.ref.next_page`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.next_page%22)

> Next Page

```diff
-Sledeća stranica
+Sledeća stranica
```

<del>Sledeća</del><ins>Sledeća</ins> stranica

#### [`core.ref.okay`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.okay%22)

> OK

```diff
-U redu
+OK
```

#### [`core.ref.posts`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.posts%22)

> Posts

```diff
-Poruke
+Odgovori
```

#### [`core.ref.previous_page`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.previous_page%22)

> Previous Page

```diff
-Predhodna stranica
+Prethodna stranica
```

<del>Predhodna</del><ins>Prethodna</ins> stranica

#### [`core.ref.remove`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.remove%22)

> Remove

```diff
-Ukloni
+Uklonite
```

#### [`core.ref.rename`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.rename%22)

> Rename

```diff
-Promeni ime
+Preimenujte
```

#### [`core.ref.reply`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.reply%22)

> Reply

```diff
-Odgovori
+Odgovorite
```

#### [`core.ref.restore`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.restore%22)

> Restore

```diff
-Vrati u predhodno stanje
+Obnovite
```

#### [`core.ref.save_changes`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.save_changes%22)

> Save Changes

```diff
-Snimi promene
+Sačuvajte promene
```

<del>Snimi</del><ins>Sačuvajte</ins> promene

#### [`core.ref.settings`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.settings%22)

> Settings

```diff
-Postavke
+Podešavanja
```

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Otvori nalog
+Registracija
```

#### [`core.ref.some_others`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.some_others%22)

> {count, plural, one {# other} other {# others}}

```diff
-{count, plural, one {# drugi} few {# druga} other {# drugih}}
+{count, plural, one {# član} other {# njih}}
```

{count, plural, one {# <del>drugi} few {# druga}</del><ins>član}</ins> other {# <del>drugih}}</del><ins>njih}}</ins>

#### [`core.ref.start_a_discussion`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.start_a_discussion%22)

> Start a Discussion

```diff
-Počni diskusiju
+Započni temu
```

#### [`core.ref.write_a_reply`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.write_a_reply%22)

> Write a Reply...

```diff
-Napiši odgovor...
+Napišite odgovor..
```

#### [`core.ref.you`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.you%22)

> You

```diff
-Ti
+Vi
```

#### [`core.views.admin.extensions.empty`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.admin.extensions.empty%22)

> No installed extensions

```diff
-Nema instaliranih proširenja mogućnosti
+Nema instaliranih ekstenzija
```

Nema instaliranih <del>proširenja mogućnosti</del><ins>ekstenzija</ins>

#### [`core.views.admin.extensions.package_name`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.admin.extensions.package_name%22)

> Package Name

```diff
-Ime paketa
+Naziv paketa
```

<del>Ime</del><ins>Naziv</ins> paketa

#### [`core.views.content.javascript_disabled_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.content.javascript_disabled_message%22)

> This site is best viewed in a modern browser with JavaScript enabled.

```diff
-Ovaj sajt će biti najbolje prikazan u modernom brauzeru i uključenom JavaScript podrškom.
+Ovu stranicu je najbolje pregledati u savremenom pretraživaču sa omogućenim JavaScriptom.
```

<del>Ovaj sajt</del><ins>Ovu</ins> <del>će</del><ins>stranicu</ins> <del>biti</del><ins>je</ins> najbolje <del>prikazan</del><ins>pregledati</ins> u<del> modernom</del> <del>brauzeru</del><ins>savremenom</ins> <del>i</del><ins>pretraživaču</ins> <del>uključenom</del><ins>sa</ins> <del>JavaScript</del><ins>omogućenim</ins> <del>podrškom.</del><ins>JavaScriptom.</ins>

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Idi nazad da pokušaš ponovo
+Vratite se nazad i pokušajte ponovo
```

<del>Idi</del><ins>Vratite se</ins> nazad <del>da</del><ins>i</ins> <del>pokušaš</del><ins>pokušajte</ins> ponovo

#### [`core.views.error.invalid_confirmation_token`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.error.invalid_confirmation_token%22)

> This confirmation link has already been used or is invalid.

```diff
-Ovaj link za potvrdu je već upotrebljen ili nije ispravan.
+Ovaj link za potvrdu je već iskorišćen ili je nevažeći.
```

Ovaj link za potvrdu je <del>već</del><ins>već</ins> <del>upotrebljen</del><ins>iskorišćen</ins> ili <del>nije</del><ins>je</ins> <del>ispravan.</del><ins>nevažeći.</ins>

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-Nema stranice koju ste zatražili.
+Nije moguće pronaći stranicu koju ste tražili.
```

<del>Nema</del><ins>Nije</ins> <del>stranice</del><ins>moguće pronaći stranicu</ins> koju ste <del>zatražili.</del><ins>tražili.</ins>

#### [`core.views.error.not_found_return_link`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.error.not_found_return_link%22)

> Return to {forum}

```diff
-Vratite se na {forum}
+Povratak na {forum}
```

<del>Vratite se</del><ins>Povratak</ins> na {forum}

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-Da li ste sigurni da želite da se odjavite iz {forum}?
+Da li ste sigurni da želite da se odjavite sa {forum}?
```

Da li ste sigurni da želite da se odjavite <del>iz</del><ins>sa</ins> {forum}?


### `flarum-flags`

#### [`flarum-flags.admin.settings.flag_own_posts_label`](https://weblate.rob006.net/translate/flarum/flarum-flags/sr_Latn/?q=context%3A%3D%22flarum-flags.admin.settings.flag_own_posts_label%22)

> Allow users to flag their own posts

```diff
-Omogućite članovima da prijave vlastite odgovore
+Omogućite članovima da prijave vlastite odgovore
```

<del>Omogućite</del><ins>Omogućite</ins> članovima da prijave vlastite odgovore

#### [`flarum-flags.forum.flag_post.confirmation_message`](https://weblate.rob006.net/translate/flarum/flarum-flags/sr_Latn/?q=context%3A%3D%22flarum-flags.forum.flag_post.confirmation_message%22)

> Thank you for flagging this post. Our moderators will look into it.

```diff
-Hvala Vam što ste prijavili ovaj odgovor. Naši moderatori će to istražiti.
+Hvala Vam što ste prijavili ovaj odgovor. Naši moderatori će to istražiti.
```

Hvala Vam što ste prijavili ovaj odgovor. Naši moderatori <del>će</del><ins>će</ins> to istražiti.


### `flarum-likes`

#### [`flarum-likes.admin.permissions.like_posts_label`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.admin.permissions.like_posts_label%22)

> Like posts

```diff
-Dopada mi se objava
+Sviđanje odgovora
```

#### [`flarum-likes.forum.notifications.post_liked_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.notifications.post_liked_text%22)

> {username} liked your post

```diff
-Korisniku {username} se dopala vaša objava
+{username} se svideo Vaš odgovor
```

<del>Korisniku </del>{username} se <del>dopala</del><ins>svideo</ins> <del>vaša</del><ins>Vaš</ins> <del>objava</del><ins>odgovor</ins>

#### [`flarum-likes.forum.post.like_link`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.post.like_link%22)

> Like

```diff
-Dopada mi se
+Sviđa mi se
```

<del>Dopada</del><ins>Sviđa</ins> mi se

#### [`flarum-likes.forum.post.liked_by_self_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_self_text%22)

> {users} like this.

```diff
-Korisniku {users} se ovo dopada.
+{users} ste označili da Vam se sviđa ovaj odgovor.
```

<del>Korisniku </del>{users}<ins> ste označili da Vam</ins> se <del>ovo</del><ins>sviđa</ins> <del>dopada.</del><ins>ovaj odgovor.</ins>

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{count, plural, one {Korisniku {users} se ovo dopada} other {Korisnicima {users} se ovo dopada}}.
+{count, plural, one {{users} se sviđa ovaj odgovor.} other {{users} se sviđa ovaj odgovor.}}.
```

{count, plural, one <del>{Korisniku {users}</del><ins>{{users}</ins> se <del>ovo</del><ins>sviđa</ins> <del>dopada}</del><ins>ovaj</ins> <del>other</del><ins>odgovor.}</ins> <del>{Korisnicima</del><ins>other</ins> <del>{users}</del><ins>{{users}</ins> se <del>ovo</del><ins>sviđa</ins> <del>dopada}}.</del><ins>ovaj odgovor.}}.</ins>

#### [`flarum-likes.forum.post.unlike_link`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.post.unlike_link%22)

> Unlike

```diff
-Ne dopada mi se
+Ne sviđa mi se
```

Ne <del>dopada</del><ins>sviđa</ins> mi se

#### [`flarum-likes.forum.post_likes.title`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.post_likes.title%22)

> Users Who Like This

```diff
-Korisnici kojima se ovo dopada
+Članovi kojima se sviđa
```

<del>Korisnici</del><ins>Članovi</ins> kojima se<del> ovo</del> <del>dopada</del><ins>sviđa</ins>

#### [`flarum-likes.forum.settings.notify_post_liked_label`](https://weblate.rob006.net/translate/flarum/flarum-likes/sr_Latn/?q=context%3A%3D%22flarum-likes.forum.settings.notify_post_liked_label%22)

> Someone likes one of my posts

```diff
-Kada se nekome dopadne moja objava
+Ako se nekome svidi jedan od mojih odgovora
```

<del>Kada</del><ins>Ako</ins> se nekome <del>dopadne</del><ins>svidi</ins> <del>moja</del><ins>jedan</ins> <del>objava</del><ins>od mojih odgovora</ins>


### `flarum-lock`

#### [`flarum-lock.admin.permissions.lock_discussions_label`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.admin.permissions.lock_discussions_label%22)

> Lock discussions

```diff
-Zaključaj diskusiju
+Zaključavanje diskusija
```

#### [`flarum-lock.forum.discussion_controls.lock_button`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.lock_button%22)

> Lock

```diff
-Zaključaj
+Zaključajte
```

#### [`flarum-lock.forum.discussion_controls.unlock_button`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.unlock_button%22)

> Unlock

```diff
-Otključaj
+Otključajte
```

#### [`flarum-lock.forum.notifications.discussion_locked_text`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.forum.notifications.discussion_locked_text%22)

> {username} locked

```diff
-{username} zaključao
+{username} je zaključao/la diskusiju
```

{username} <del>zaključao</del><ins>je zaključao/la diskusiju</ins>

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-{username} je zaključao diskusiju {time}.
+{username} je zaključao/la diskusiju.
```

{username} je <del>zaključao diskusiju</del><ins>zaključao/la</ins> <del>{time}.</del><ins>diskusiju.</ins>

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} je otključao diskusiju {time}.
+{username} je otključao/la diskusiju.
```

{username} je <del>otključao diskusiju</del><ins>otključao/la</ins> <del>{time}.</del><ins>diskusiju.</ins>

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum/flarum-lock/sr_Latn/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Kada neko zaključa diskusiju koju sam ja započeo
+Ako neko zaključa diskusiju koju sam započeo
```

<del>Kada</del><ins>Ako</ins> neko zaključa diskusiju koju sam<del> ja</del> započeo


### `flarum-nicknames`

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum/flarum-nicknames/sr_Latn/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
-Ovo će sakriti polje "Korisničko ime" za odabir prilikom registracije i umesto toga koristiti nasumični broj. Takođe će polje "Nadimak" učiniti obaveznim. Ovo će stupiti na snagu samo ako je omogućeno "Dozvolite postavljanje nadimaka pri registraciji".
+Ovo će sakriti polje "Korisničko ime" za odabir prilikom registracije i umesto toga koristiti nasumični broj. Takođe će polje "Nadimak" učiniti obaveznim. Ovo će stupiti na snagu samo ako je omogućeno "Dozvolite postavljanje nadimaka pri registraciji".
```

Ovo <del>će</del><ins>će</ins> sakriti polje "Korisničko ime" za odabir prilikom registracije i umesto toga koristiti nasumični broj. Takođe <del>će</del><ins>će</ins> polje "Nadimak" učiniti obaveznim. Ovo <del>će</del><ins>će</ins> stupiti na snagu samo ako je <del>omogućeno</del><ins>omogućeno</ins> "Dozvolite postavljanje nadimaka pri registraciji".

#### [`flarum-nicknames.api.invalid_nickname_message`](https://weblate.rob006.net/translate/flarum/flarum-nicknames/sr_Latn/?q=context%3A%3D%22flarum-nicknames.api.invalid_nickname_message%22)

> This nickname is invalid. Please contact your forum administrator for more information on nickname rules.

```diff
-Ovaj nadimak je nevažeći. Molimo kontaktirajte administratora foruma za više informacija o pravilima za nadimke.
+Ovaj nadimak je nevažeći. Molimo kontaktirajte administratora foruma za više informacija o pravilima za nadimke.
```

Ovaj nadimak je <del>nevažeći.</del><ins>nevažeći.</ins> Molimo kontaktirajte administratora foruma za više informacija o pravilima za nadimke.


### `flarum-pusher`

#### [`flarum-pusher.forum.discussion_list.show_updates_text`](https://weblate.rob006.net/translate/flarum/flarum-pusher/sr_Latn/?q=context%3A%3D%22flarum-pusher.forum.discussion_list.show_updates_text%22)

> {count, plural, one {Show # updated discussion} other {Show # updated discussions}}

```diff
-{count, plural, one {Prikaži # ažuriranu diskusiju} few {Prikaži # ažurirane diskusije} other {Prikaži # ažuriranih diskusija}}
+{count, plural, one {Prikaži # ažuriranu diskusiju} other {Prikaži # ažuriranih diskusija}}
```

{count, plural, one {Prikaži # ažuriranu diskusiju} <del>few {Prikaži # ažurirane diskusije} </del>other {Prikaži # ažuriranih diskusija}}


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_button`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_button%22)

> Delete Tag

```diff
-Izbriši tag
+Izbrišite kategoriju
```

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-Da li ste sigurni da želite da izbrišete ovaj tag? Diskusije pod ovim tagom NEĆE biti izbrisane.
+Da li ste sigurni da želite da izbrišete ovu kategoriju? Diskusije u ovoj kategoriji NEĆE biti izbrisane.
```

Da li ste sigurni da želite da izbrišete <del>ovaj</del><ins>ovu</ins> <del>tag?</del><ins>kategoriju?</ins> Diskusije <del>pod</del><ins>u</ins> <del>ovim</del><ins>ovoj</ins> <del>tagom</del><ins>kategoriji</ins> <del>NEĆE</del><ins>NEĆE</ins> biti izbrisane.

#### [`flarum-tags.admin.edit_tag.hide_label`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.admin.edit_tag.hide_label%22)

> Hide from All Discussions

```diff
-Sakrij iz svih diskusija
+Sakrijte sa liste svih diskusija
```

<del>Sakrij</del><ins>Sakrijte</ins> <del>iz</del><ins>sa liste</ins> svih diskusija

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
-Napravi tag
+Kreirajte kategoriju
```

#### [`flarum-tags.admin.permissions.allow_edit_tags_label`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.admin.permissions.allow_edit_tags_label%22)

> Allow tag editing

```diff
-Dozvoli uređivanje taga
+Uređivanje kategorija
```


### `validation`

#### [`validation.accepted`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.accepted%22)

> The :attribute must be accepted.

```diff
-Polje :attribute mora biti prihvaćeno.
+Polje :attribute mora biti prihvaćeno.
```

Polje :attribute mora biti <del>prihvaćeno.</del><ins>prihvaćeno.</ins>

#### [`validation.active_url`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.active_url%22)

> The :attribute is not a valid URL.

```diff
-Polje :attribute nije važeći URL.
+Polje :attribute nije važeći URL.
```

Polje :attribute nije <del>važeći</del><ins>važeći</ins> URL.

#### [`validation.after`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.after%22)

> The :attribute must be a date after :date.

```diff
-Polje :attribute mora biti datum nakon :attribute.
+Polje :attribute mora biti datum posle :date.
```

Polje :attribute mora biti datum <del>nakon</del><ins>posle</ins> <del>:attribute.</del><ins>:date.</ins>

#### [`validation.after_or_equal`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.after_or_equal%22)

> The :attribute must be a date after or equal to :date.

```diff
-Polje :attribute mora biti datum posle ili jednak :date.
+Polje :attribute mora biti datum posle ili tačno :date.
```

Polje :attribute mora biti datum posle ili <del>jednak</del><ins>tačno</ins> :date.

#### [`validation.before_or_equal`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.before_or_equal%22)

> The :attribute must be a date before or equal to :date.

```diff
-Polje :attribute mora biti datum pre ili jednak :date.
+Polje :attribute mora biti datum pre ili tačno :date.
```

Polje :attribute mora biti datum pre ili <del>jednak</del><ins>tačno</ins> :date.

#### [`validation.between.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.between.array%22)

> The :attribute must have between :min and :max items.

```diff
-Polje :attribute mora da sadrži između :min i :max stavki.
+Polje :attribute mora imati između :min i :max elemenata.
```

Polje :attribute mora <del>da sadrži</del><ins>imati</ins> između :min i :max <del>stavki.</del><ins>elemenata.</ins>

#### [`validation.between.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.between.file%22)

> The :attribute must be between :min and :max kilobytes.

```diff
-Polje :attribute mora imati između :min i :max kilobajta.
+Polje :attribute mora biti između :min i :max kilobajta.
```

Polje :attribute mora <del>imati</del><ins>biti</ins> između :min i :max kilobajta.

#### [`validation.between.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.between.string%22)

> The :attribute must be between :min and :max characters.

```diff
-Polje :attribute mora da sadrži između :min i :max znakova.
+Polje :attribute mora imati između :min i :max karaktera.
```

Polje :attribute mora <del>da sadrži</del><ins>imati</ins> između :min i :max <del>znakova.</del><ins>karaktera.</ins>

#### [`validation.date`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.date%22)

> The :attribute is not a valid date.

```diff
-Polje :attribute nije važeći datum.
+Polje :attribute nije važeći datum.
```

Polje :attribute nije <del>važeći</del><ins>važeći</ins> datum.

#### [`validation.date_equals`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.date_equals%22)

> The :attribute must be a date equal to :date.

```diff
-Polje :attribute mora da bude datum jednak :date.
+Polje :attribute mora biti tačno datuma :date.
```

Polje :attribute mora <del>da bude</del><ins>biti</ins> <del>datum</del><ins>tačno</ins> <del>jednak</del><ins>datuma</ins> :date.

#### [`validation.date_format`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.date_format%22)

> The :attribute does not match the format :format.

```diff
-Polje :attribute ne odgovara formatu :format.
+Polje :attribute ne odgovara formatu :date.
```

Polje :attribute ne odgovara formatu <del>:format.</del><ins>:date.</ins>

#### [`validation.digits`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.digits%22)

> The :attribute must be :digits digits.

```diff
-Polje :attribute mora da sadrži :digits cifara.
+Polje :attribute mora imati :digits cifara.
```

Polje :attribute mora <del>da sadrži</del><ins>imati</ins> :digits cifara.

#### [`validation.dimensions`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.dimensions%22)

> The :attribute has invalid image dimensions.

```diff
-Polje :attribute ima nevažeće dimenzije slike.
+Polje :attribute ima nevažeće dimenzije slike.
```

Polje :attribute ima <del>nevažeće</del><ins>nevažeće</ins> dimenzije slike.

#### [`validation.email`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.email%22)

> The :attribute must be a valid email address.

```diff
-Polje :attribute mora biti važeća email adresa.
+Polje :attribute mora biti važeća email adresa.
```

Polje :attribute mora biti <del>važeća</del><ins>važeća</ins> email adresa.

#### [`validation.ip`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.ip%22)

> The :attribute must be a valid IP address.

```diff
-Polje :attribute mora biti važeća IP adresa.
+Polje :attribute mora biti važeća IP adresa.
```

Polje :attribute mora biti <del>važeća</del><ins>važeća</ins> IP adresa.

#### [`validation.ipv4`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.ipv4%22)

> The :attribute must be a valid IPv4 address.

```diff
-Polje :attribute mora biti važeća IPv4 adresa.
+Polje :attribute mora biti važeća IPv4 adresa.
```

Polje :attribute mora biti <del>važeća</del><ins>važeća</ins> IPv4 adresa.

#### [`validation.ipv6`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.ipv6%22)

> The :attribute must be a valid IPv6 address.

```diff
-Polje :attribute mora biti važeća IPv6 adresa.
+Polje :attribute mora biti važeća IPv6 adresa.
```

Polje :attribute mora biti <del>važeća</del><ins>važeća</ins> IPv6 adresa.

#### [`validation.json`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.json%22)

> The :attribute must be a valid JSON string.

```diff
-Polje :attribute mora biti važeći JSON string.
+Polje :attribute mora biti važeći JSON string.
```

Polje :attribute mora biti <del>važeći</del><ins>važeći</ins> JSON string.

#### [`validation.not_regex`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.not_regex%22)

> The :attribute format is invalid.

```diff
-Polje :attribute je nevažeći format.
+Polje :attribute je nevažeći format.
```

Polje :attribute je <del>nevažeći</del><ins>nevažeći</ins> format.

#### [`validation.regex`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.regex%22)

> The :attribute format is invalid.

```diff
-Polje :attribute je nevažeći format.
+Polje :attribute je nevažeći format.
```

Polje :attribute je <del>nevažeći</del><ins>nevažeći</ins> format.

#### [`validation.timezone`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.timezone%22)

> The :attribute must be a valid zone.

```diff
-Polje :attribute mora biti važeća zona.
+Polje :attribute mora biti važeća zona.
```

Polje :attribute mora biti <del>važeća</del><ins>važeća</ins> zona.

#### [`validation.unique`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.unique%22)

> The :attribute has already been taken.

```diff
-Polje :attribute već ima slično značenje.
+Polje :attribute već ima slično značenje.
```

Polje :attribute <del>već</del><ins>već</ins> ima slično značenje.

#### [`validation.url`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.url%22)

> The :attribute format is invalid.

```diff
-Polje :attribute je nevažeći format.
+Polje :attribute je nevažeći format.
```

Polje :attribute je <del>nevažeći</del><ins>nevažeći</ins> format.

#### [`validation.uuid`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.uuid%22)

> The :attribute must be a valid UUID.

```diff
-Polje :attribute mora biti važeći UUID.
+Polje :attribute mora biti važeći UUID.
```

Polje :attribute mora biti <del>važeći</del><ins>važeći</ins> UUID.


## Missing translations

These strings are translated only in `sr_Latn`, so there is nothing to inherit from Serbian (Cyrillic) - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `sr_Latn`.


### `acpl-lscache` (missing)

#### [`acpl-lscache.admin.cache_exclude_help`](https://weblate.rob006.net/translate/flarum/acpl-lscache/sr_Latn/?q=context%3A%3D%22acpl-lscache.admin.cache_exclude_help%22)

> Paths containing these strings will not be cached. For &lt;code&gt;/mypath/mypage?aa=bb&lt;/code&gt;, you can use &lt;code&gt;mypage?aa=&lt;/code&gt;. To match the beginning, add &lt;code&gt;^&lt;/code&gt; at the start. For an exact match, add &lt;code&gt;$&lt;/code&gt; at the end of the URL. One per line.

```diff
+Putanje koje sadrže ove nizove neće biti keširane. Na primer, za <code>/mypath/mypage?aa=bb</code>,<code>mypage?aa=</code> se mogu ovde koristiti. Da biste podudarili početak, dodajte <code>^</code> na početak stavke. Da biste izvršili potpuno podudaranje, dodajte <code>$</code> na kraju URLa. Po jedan u redu.
```

#### [`acpl-lscache.admin.purge_on_discussion_update_help`](https://weblate.rob006.net/translate/flarum/acpl-lscache/sr_Latn/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_help%22)

> Enter the URLs or cache Tags you want to purge when a discussion is updated, one per line. URL should start with &lt;code&gt;/&lt;/code&gt;, e.g. &lt;code&gt;/rankings&lt;/code&gt;, and cache Tag should start with &lt;code&gt;tag=&lt;/code&gt;, e.g. &lt;code&gt;tag=rankings&lt;/code&gt;. For multiple routes, adding a rule in .htaccess with a regular expression that tags routes and entering only this tag here is faster. &lt;a&gt;Learn more&lt;/a&gt;. By default, the cache for the homepage and updated discussions is purged.

```diff
+Navedite po jedan URL ili kategoriju u liniji. URL treba da počinje sa <code></code>, npr. <code>/rankings</code> i keš oznaka treba da počinje sa <code>tag=</code>, npr. <code>tag=rankings</code>. Ova ekstenzija označava svaku rutu i na primer ukoliko imate mnogo ruta koje želite da očistite, bolje je da dodate pravilo u .htaccess fajlu sa regularnim izrazom koji će označiti rute i ovde, u postavkama, unesite samo ovu oznaku. Ovaj metod će biti mnogo brži. <a>Pročitajte više</a>. Po podrazumevanim postavkama, keš memorija za početnu stranicu se čisti, kao i keš memorija za ažurirane diskusije.
```


### `blomstra-readme` (missing)

#### [`blomstra-readme.admin.modal.title`](https://weblate.rob006.net/translate/flarum/blomstra-readme/sr_Latn/?q=context%3A%3D%22blomstra-readme.admin.modal.title%22)

> {displayName} README

```diff
+{displayName} PROČITAJME
```


### `blomstra-realtime` (missing)

#### [`blomstra-realtime.forum.push.discussion-list-new-activity`](https://weblate.rob006.net/translate/flarum/blomstra-realtime/sr_Latn/?q=context%3A%3D%22blomstra-realtime.forum.push.discussion-list-new-activity%22)

> {count, plural, one {Show # updated discussion} other {Show # updated discussions}}

```diff
+{count, plural, one {Prikaži # ažuriranu diskusiju} other {Prikaži # ažurirane(ih) diskusija}}
```

#### [`blomstra-realtime.forum.typing-indicator.people-are-typing`](https://weblate.rob006.net/translate/flarum/blomstra-realtime/sr_Latn/?q=context%3A%3D%22blomstra-realtime.forum.typing-indicator.people-are-typing%22)

> {number, plural, one {# person is typing} other {# people are typing}}

```diff
+{number, plural, one {# osoba kuca} other {# osoba kucaju}}
```


### `clarkwinkelmann-likes-received` (missing)

#### [`clarkwinkelmann-likes-received.forum.user-card.likes`](https://weblate.rob006.net/translate/flarum/clarkwinkelmann-likes-received/sr_Latn/?q=context%3A%3D%22clarkwinkelmann-likes-received.forum.user-card.likes%22)

> {likes, plural, one {# like received} other {# likes received}}

```diff
+{likes, plural, one {# sviđanja(e)} other {# sviđanja}}
```


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+Novosti i obaveštenja preuzeti sa zvanične Flarum zajednica na discuss.flarum.org.
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# komentar} other {# komentar(a)}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Novosti i obaveštenja Flarum tima.
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+Obaveštenja nisu pronađena.
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+Sakrij obaveštenja
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+Nije moguće učitati obaveštenja. Pokušajte kasnije.
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+Pročitaj više
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+Osveži obaveštenja
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+Pokuštaj ponovo
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+Prikaži obaveštenja
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+Obaveštenja
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+Pogledaj sve na discuss.flarum.org
```

#### [`core.admin.appearance.custom_styles_cannot_use_less_features`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.appearance.custom_styles_cannot_use_less_features%22)

> The @import and data-uri features are not allowed in custom LESS.

```diff
+@import i data-uri funkcije nisu dozvoljene u prilagođenom LESS kodu.
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+Napušteni dodaci
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Pošalji e-poštu adminima kada novi napušteni dodatak bude otkriven tokom nedeljne provere
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+Učitavanje liste napuštenih dodataka je neuspešno. Pokušajte kasnije.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Lista napuštenih dodataka je ažurirana. Broj pronađenih instaliranih dodataka je {count}.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum održava <a>listu napuštenih dodataka zajednice</a>. Kada se već instalirani dodatak prikaže na listi, biće označen u upravljačkom panelu.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Informacije o sistemu
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Kopiraj u privremenu memoriju
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+Neuspešno kopiranje u privremenu memoriju
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Sistemske informacije su kopirane u privremenoj memoriji
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Sistemske informacije
```

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
+Kada je režim za <code>otklanjanje grešaka</code> aktivan, Flarum će obnoviti njegove <code>Javascript</code> i <code>CSS</code> resurse pri svakom zahtevu, a takođe potencijalno može otkriti i druge informacije kao što su tajne baze podataka, promenjive okruženja itd.
+
+Preporučljivo je da onemogućite <code>režim za otklanjanje grešaka</code> u vašoj <code>config.php</code> datoteci na aktivnom sajtu. Pogledajte <link>Flarum dokumentaciju</link> za više informacija.
+
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Ovaj dodatak više nije održavan od strane autora i možda neće primati ažuriranja.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Ovaj dodatak je zamenjen dodatkom {replacement}. Razmotrite prelazak na zamenski paket.
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+Zastarelo
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
+Zamenjeno
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Forum vidžeti
```

#### [`core.email.confirm_email.body`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.confirm_email.body%22)

> Hey {username}!
>
> Someone (hopefully you!) has changed their email address on {forum} to this one.
>
> If this was you, simply click the following link and your email will be confirmed:
> {url}
>
> If this was not you, please ignore this email.
>

```diff
+Zdravo {username}!
+
+Neko je (nadamo se da si ti!) promenio svoju email adresu na {forum} i naveo ovu kao novu.
+
+Ako si ti, jednostavno klikni na sledeći link i tvoja nova email adresa će biti potvrđena:
+{url}
+
+Ako nisi ti, molimo te da ignorišeš ovu poruku!
+
```

#### [`core.email.reset_password.body`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.reset_password.body%22)

> Hey {username}!
>
> Someone (hopefully you!) has submitted a forgotten password request for your account on {forum}.
>
> If this was you, click the following link to reset your password:
> {url}
>
> If you do not wish to change your password, just ignore this email and nothing will happen.
>

```diff
+Ćao {username}!
+
+Neko je (nadamo se da si ti!) zatražio resetovanje lozinke za tvoj nalog na {forum}.
+
+Ako si ti, jednostavno klikni na sledeći link i prati dalja uputstva za resetovanje lozinke:
+{url}
+
+Ako nisi ti, molimo te da ignorišeš ovu poruku!
+
```

#### [`core.email.send_test.body`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.email.send_test.body%22)

> Hey {username}!
>
> This is a test email to confirm that your Flarum email configuration is working properly.
>
> If this was you, this email means that your configuration works!
>
> If this was not you, please ignore this email.
>

```diff
+Ćao {username}!
+
+Ovo je probni email kojim se potvrđuje da tvoja konfiguracija emaila na forumu ispravno radi.
+
+Ako si ovo ti, ovaj email znači da tvoja konfiguracija funkcioniše!
+
+Ako nisi ti, molimo te da ignorišeš ovu poruku!
+
```

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
+Žao nam je, naišli smo na grešku pri prikazivanju ovog sadržaja. Ako ste korisnik, pokušajte ponovo kasnije. Ako ste administrator, pogledajte svoje Flarum datoteke za evidencije za više informacija.
```

#### [`core.ref.icon_text`](https://weblate.rob006.net/translate/flarum/core/sr_Latn/?q=context%3A%3D%22core.ref.icon_text%22)

> Enter the name of any &lt;a&gt;FontAwesome&lt;/a&gt; icon class, &lt;em&gt;including&lt;/em&gt; the &lt;code&gt;fas fa-&lt;/code&gt; prefix.

```diff
+Unesite naziv bilo koje <a>FontAwesome</a> klase ikonice, <em>uključujući</em> i <code>fas fa-</code> prefiks.
```


### `flarum-flags` (missing)

#### [`flarum-flags.forum.flagged_posts.item_text`](https://weblate.rob006.net/translate/flarum/flarum-flags/sr_Latn/?q=context%3A%3D%22flarum-flags.forum.flagged_posts.item_text%22)

> {username} in &lt;em&gt;{discussion}&lt;/em&gt;

```diff
+{username} u <em>{discussion}</em>
```

#### [`flarum-flags.forum.post.flagged_by_text`](https://weblate.rob006.net/translate/flarum/flarum-flags/sr_Latn/?q=context%3A%3D%22flarum-flags.forum.post.flagged_by_text%22)

> Flagged by {username}

```diff
+Prijavljeno od strane {username}
```

#### [`flarum-flags.forum.post.flagged_by_with_reason_text`](https://weblate.rob006.net/translate/flarum/flarum-flags/sr_Latn/?q=context%3A%3D%22flarum-flags.forum.post.flagged_by_with_reason_text%22)

> Flagged by {username} as {reason}

```diff
+Prijavljeno od strane {username} kao {reason}
```


### `flarum-mentions` (missing)

#### [`flarum-mentions.admin.settings.allow_username_format_label`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_label%22)

> Allow username mention format (@Username)

```diff
+Dozvoli format pominjanja korisničkog imena (@korisničkoime)
```

#### [`flarum-mentions.admin.settings.allow_username_format_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_text%22)

> The current format for user mentions is @"Display Name"#ID.
> This setting allows using the old format of @Username, however it will still be converted to the new format upon saving.
>

```diff
+Trenutni format za pominjanje korisnika je @"Prikazano ime"#ID.
+Ovo podešavanje dozvoljava korišćenje starog formata @korisničkoime, ali će i dalje biti konvertovano u novi format nakon čuvanja.
+
```

#### [`flarum-mentions.email.post_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.body%22)

> Hey {recipient\_display\_name}!
>
> {replier\_display\_name} replied to your post (#{post\_number}) in {title}.
>
> {url}
>
> \---
>
> {content}
>

```diff
+Zdravo {recipient_display_name}!
+
+{replier_display_name} je odgovorio/la na Vaš odgovor (#{post_number}) u diskusiji {title}.
+
+{url}
+
+---
+
+{content}
+
```

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
+{replier_display_name} je odgovorio/la na Vaš odgovor u diskusiji {title}
```

#### [`flarum-mentions.email.user_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.body%22)

> Hey {recipient\_display\_name}!
>
> {mentioner\_display\_name} mentioned you in a post in {title}.
>
> {url}
>
> \---
>
> {content}
>

```diff
+Zdravo {recipient_display_name}!
+
+{mentioner_display_name} Vas je spomenuo/la u diskusiji {title}.
+
+{url}
+
+---
+
+{content}
+
```

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
+{mentioner_display_name} Vas je spomenuo/la u diskusiji {title}
```

#### [`flarum-mentions.forum.composer.reply_to_post_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.forum.composer.reply_to_post_text%22)

> Reply to #{number}

```diff
+Odgovorite na #{number}
```

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
+{username} je odgovorio/la na Vaš odgovor
```

#### [`flarum-mentions.forum.notifications.user_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.forum.notifications.user_mentioned_text%22)

> {username} mentioned you

```diff
+{username} Vas je spomenuo/la
```

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
+{users} ste odgovorili na ovo.
```

#### [`flarum-mentions.forum.post.mentioned_by_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/sr_Latn/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_text%22)

> {users} replied to this.

```diff
+{users} je odgovorio/la na ovo.
```


### `flarum-nicknames` (missing)

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum/flarum-nicknames/sr_Latn/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
+Morate da izaberete "nadimak" kao ime za prikaz na <a><strong>stranici sa osnovnim podešavanjima</strong></a> da bi ova ekstenzija radila kako treba.
```


### `flarum-sticky` (missing)

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum/flarum-sticky/sr_Latn/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
+{username} je označio/la diskusiju važnom.
```

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum/flarum-sticky/sr_Latn/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
+{username} je označio/la diskusiju nevažnom.
```


### `flarum-subscriptions` (missing)

#### [`flarum-subscriptions.email.new_post.body`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/sr_Latn/?q=context%3A%3D%22flarum-subscriptions.email.new_post.body%22)

> Hey {recipient\_display\_name}!
>
> {poster\_display\_name} made a post in a discussion you're following: {title}.
>
> To view the new activity, check out the following link:
> {url}
>
> \---
>
> {content}
>
> \---
>
> You won't receive any more notifications about this discussion until you're up-to-date.
>

```diff
+Zdravo {recipient_display_name}!
+
+{poster_display_name} je odgovorio/la u diskusiji koju pratite: {title}.
+
+Da pogledate novi odgovor, kliknite na sledeći link:
+{url}
+
+---
+
+{content}
+
+---
+
+Nećete više dobijati obaveštenja o ovoj diskusiji dok ne ažurirate opcije praćenja.
+
```

#### [`flarum-subscriptions.email.new_post.subject`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/sr_Latn/?q=context%3A%3D%22flarum-subscriptions.email.new_post.subject%22)

> \[New Post\] {title}

```diff
+Novi odgovor u diskusiji {title}
```

#### [`flarum-subscriptions.forum.notifications.new_post_text`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/sr_Latn/?q=context%3A%3D%22flarum-subscriptions.forum.notifications.new_post_text%22)

> {username} posted

```diff
+{username} je odgovorio/la
```


### `flarum-suspend` (missing)

#### [`flarum-suspend.email.suspended.body`](https://weblate.rob006.net/translate/flarum/flarum-suspend/sr_Latn/?q=context%3A%3D%22flarum-suspend.email.suspended.body%22)

> Hey {recipient\_display\_name},
>
> You have been suspended for the following reason:
>
> \---
> {suspension\_message}
> \---
>

```diff
+Zdravo {recipient_display_name},
+
+Suspendovani ste iz sledećeg razloga:
+
+---
+{suspension_message}
+---
+
```

#### [`flarum-suspend.email.unsuspended.body`](https://weblate.rob006.net/translate/flarum/flarum-suspend/sr_Latn/?q=context%3A%3D%22flarum-suspend.email.unsuspended.body%22)

> Hey {recipient\_display\_name},
>
> You have been unsuspended. You can head back to the forum by clicking on the following link:
>
> {forum\_url}
>

```diff
+Zdravo {recipient_display_name},
+
+Za vaš nalog na je ukinuta suspenzija. Možete se vratiti na forum klikom na sledeći link:
+
+{forum_url}
+
```

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum/flarum-suspend/sr_Latn/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
+Suspendovani ste na {timeReadable}
```

#### [`flarum-suspend.forum.suspend_user.title`](https://weblate.rob006.net/translate/flarum/flarum-suspend/sr_Latn/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.title%22)

> Suspend {username}

```diff
+Suspenduj {username}
```

#### [`flarum-suspend.forum.suspension_info.limited`](https://weblate.rob006.net/translate/flarum/flarum-suspend/sr_Latn/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.limited%22)

> This suspension will be in force until {date}

```diff
+Ova suspenzija će biti na snazi do {date}
```


### `flarum-tags` (missing)

#### [`flarum-tags.forum.choose_tags.edit_title`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.forum.choose_tags.edit_title%22)

> Edit Tags for {title}

```diff
+Izmenite kategorije za diskusiju {title}
```

#### [`flarum-tags.forum.post_stream.added_and_removed_tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_and_removed_tags_text%22)

> {username} added the {tagsAdded} and removed the {tagsRemoved} {time}.

```diff
+{username} je dodao/la {tagsAdded} i uklonio/la {tagsRemoved} kategoriju.
```

#### [`flarum-tags.forum.post_stream.added_tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_tags_text%22)

> {username} added the {tagsAdded} {time}.

```diff
+{username} je dodao/la {tagsAdded} kategoriju.
```

#### [`flarum-tags.forum.post_stream.removed_tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.forum.post_stream.removed_tags_text%22)

> {username} removed the {tagsRemoved} {time}.

```diff
+{username} je uklonio/la {tagsRemoved} kategoriju.
```

#### [`flarum-tags.forum.post_stream.tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.forum.post_stream.tags_text%22)

> {count, plural, one {{tags} tag} other {{tags} tags}}

```diff
+{count, plural, one {{tags} kategorija} other {{tags} kategorije}}
```

#### [`flarum-tags.forum.tag.meta_description_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/sr_Latn/?q=context%3A%3D%22flarum-tags.forum.tag.meta_description_text%22)

> All discussions with the {tag} tag

```diff
+Sve diskusije u {tag} kategoriji
```


### `fof-moderator-warnings` (missing)

#### [`fof-moderator-warnings.emails.post_warned.body`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.body%22)

> Hey {warnee\_display\_name}!
>
> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}} in {discussion\_title}
>
> The following reason was given:
>
> \---
>
> {public\_comment}
>

```diff
+Hey {warnee_display_name}!
+
+{warner_display_name} te je upozorio/la sa {strikes, plural, one {# upozorenjem} other {# upozerenjem}} u diskusiji {discussion_title}
+
+Dat je sledeći razlog:
+
+---
+
+{public_comment}
+
```

#### [`fof-moderator-warnings.emails.post_warned.subject`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}} in {discussion\_title}

```diff
+{warner_display_name} te je upozorio/la sa {strikes, plural, one {# strike} other {# upozorenjem}} u diskusiji {discussion_title}
```

#### [`fof-moderator-warnings.emails.user_warned.body`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.body%22)

> Hey {warnee\_display\_name}!
>
> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}
>
> The following reason was given:
>
> \---
>
> {public\_comment}
>

```diff
+Hey {warnee_display_name}!
+
+{warner_display_name} te je upozorio/la sa {strikes, plural, one {# upozorenjem} other {# upozorenja}}
+
+>Dat je sledeći razlog:
+
+---
+
+{public_comment}
+
```

#### [`fof-moderator-warnings.emails.user_warned.subject`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}

```diff
+{warner_display_name} te je upozorio/la {strikes, plural, one {# upozorenjem} other {# upozorenja}}
```

#### [`fof-moderator-warnings.forum.notifications.warning_no_strikes_text`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_no_strikes_text%22)

> You were warned by {mod\_username} (no strikes)

```diff
+Upozoren/a si od strane {mod_username} (no strikes)
```

#### [`fof-moderator-warnings.forum.notifications.warning_text`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_text%22)

> {strikes, plural, one {You were warned with # strike by {mod\_username}} other {You were warned with # strikes by {mod\_username}}}

```diff
+{strikes, plural, one {Upozoren/a si sa # upozorenja od strane {mod_username}} other {Upozoren/a si sa # upozorenja od strane {mod_username}}}
```

#### [`fof-moderator-warnings.forum.post.warning`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.post.warning%22)

> {strikes, plural, one {Warned with # strike by {mod\_username}} other {Warned with # strikes by {mod\_username}}}

```diff
+{strikes, plural, one {Upozoren/a sa # upozorenja od strane {mod_username}} other {Upozoren/a sa # upozorenja od strane {mod_username}}}
```

#### [`fof-moderator-warnings.forum.post.warning_no_strikes`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.post.warning_no_strikes%22)

> Warned with no strikes by {mod\_username}

```diff
+Upozoren/a od strane {mod_username}
```

#### [`fof-moderator-warnings.forum.warning_list.warnings`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings%22)

> {strikes, plural, one {Moderator Warnings: # Strike Received} other {Moderator Warnings: # Strikes Received}}

```diff
+{strikes, plural, one {Upozorenja moderatora: # upozorenje dobijeno} other {Upozorenja moderatora: # upozorenja dobijeno}}
```

#### [`fof-moderator-warnings.forum.warning_list_item.list_item_heading`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.list_item_heading%22)

> {strikes, plural, one {&lt;strong&gt;#&lt;/strong&gt; strike, {time}} other {&lt;strong&gt;#&lt;/strong&gt; strikes, {time}}}

```diff
+{strikes, plural, one {<strong>#</strong> upozorenje, {time}} other {<strong>#</strong> upozorenja, {time}}}
```

#### [`fof-moderator-warnings.forum.warning_list_item.list_item_heading_hidden`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.list_item_heading_hidden%22)

> {strikes, plural, one {&lt;strong&gt;#&lt;/strong&gt; strike, {time} &lt;strong&gt;(removed)&lt;/strong&gt;} other {&lt;strong&gt;#&lt;/strong&gt; strikes, {time} &lt;strong&gt;(removed)&lt;/strong&gt;}}

```diff
+{strikes, plural, one {<strong>#</strong> upozorenje, {time} <strong>(removed)</strong>} other {<strong>#</strong> upozorenja, {time} <strong>(uklonjeno)</strong>}}
```

#### [`fof-moderator-warnings.forum.warning_modal.heading`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.heading%22)

> Warn &lt;strong&gt;{username}&lt;/strong&gt;

```diff
+Upozori <strong>{username}</strong>
```

#### [`fof-moderator-warnings.forum.warning_modal.private_comment_heading`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.private_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will ONLY be visible to other moderators.

```diff
+Zašto je <strong>{username}</strong> dobio/la ova upozorenja? Ovi komentari će biti vidljivi samo drugim moderatorima.
```

#### [`fof-moderator-warnings.forum.warning_modal.public_comment_heading`](https://weblate.rob006.net/translate/flarum/fof-moderator-warnings/sr_Latn/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.public_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will be visible to the user and other moderators.

```diff
+Zašto je <strong>{username}</strong> dobio/la ova upozorenja? Ovi komentari će biti vidljivi članu i drugim moderatorima.
```


### `gtdxyz-badges` (missing)

#### [`gtdxyz-flarum-badges.forum.badge.earned_by_count`](https://weblate.rob006.net/translate/flarum/gtdxyz-badges/sr_Latn/?q=context%3A%3D%22gtdxyz-flarum-badges.forum.badge.earned_by_count%22)

> {count, plural, one {Earned by &lt;b&gt;# user&lt;/b&gt;} other {Earned by &lt;b&gt;# users&lt;/b&gt;}}

```diff
+{count, plural, one {Zarađeno <b># user</b>} other {Zarađeno od <b># člana(ova)</b>}}
```

#### [`gtdxyz-flarum-badges.forum.badge.earned_count`](https://weblate.rob006.net/translate/flarum/gtdxyz-badges/sr_Latn/?q=context%3A%3D%22gtdxyz-flarum-badges.forum.badge.earned_count%22)

> {count, plural, one {&lt;b&gt;# user&lt;/b&gt; has earned this badge} other {&lt;b&gt;# users&lt;/b&gt; earned}}

```diff
+{count, plural, one {<b># član</b> je zaradio ovaj bedž} other {<b># člana(ova)</b> su zaradili ovaj bedž}}
```

#### [`gtdxyz-flarum-badges.forum.badge.received_on`](https://weblate.rob006.net/translate/flarum/gtdxyz-badges/sr_Latn/?q=context%3A%3D%22gtdxyz-flarum-badges.forum.badge.received_on%22)

> Received on {date}

```diff
+Dobijen datuma {date}
```


### `validation` (missing)

#### [`validation.digits_between`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.digits_between%22)

> The :attribute must be between :min and :max digits.

```diff
+Polje :attribute mora imati između :min i :max cifara.
```

#### [`validation.ends_with`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.ends_with%22)

> The :attribute must end with one of the following: :values.

```diff
+Polje :attribute se mora završiti sledećim vrednostima: :values.
```

#### [`validation.gt.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gt.array%22)

> The :attribute must have more than :value items.

```diff
+Polje :attribute mora imati više od :value elemenata.
```

#### [`validation.gt.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gt.file%22)

> The :attribute must be greater than :value kilobytes.

```diff
+Polje :attribute mora imati više od :value kilobajta.
```

#### [`validation.gt.numeric`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gt.numeric%22)

> The :attribute must be greater than :value.

```diff
+Polje :attribute mora imati vrednost veću od :value.
```

#### [`validation.gt.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gt.string%22)

> The :attribute must be greater than :value characters.

```diff
+Polje :attribute mora imati više od :value karaktera.
```

#### [`validation.gte.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gte.array%22)

> The :attribute must have :value items or more.

```diff
+Polje :attribute mora imati :value elemenata ili više.
```

#### [`validation.gte.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gte.file%22)

> The :attribute must be greater than or equal :value kilobytes.

```diff
+Polje :attribute mora imati više od ili tačno :value kilobajta.
```

#### [`validation.gte.numeric`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gte.numeric%22)

> The :attribute must be greater than or equal :value.

```diff
+Polje :attribute mora imati vrednost veću od ili tačno :value.
```

#### [`validation.gte.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.gte.string%22)

> The :attribute must be greater than or equal :value characters.

```diff
+Polje :attribute mora imati više od ili tačno :value karaktera.
```

#### [`validation.lt.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lt.array%22)

> The :attribute must have less than :value items.

```diff
+Polje :attribute mora imati manje od :value elemenata.
```

#### [`validation.lt.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lt.file%22)

> The :attribute must be less than :value kilobytes.

```diff
+Polje :attribute mora imati manje od :value kilobajta.
```

#### [`validation.lt.numeric`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lt.numeric%22)

> The :attribute must be less than :value.

```diff
+Polje :attribute mora imati vrednost manju od :value.
```

#### [`validation.lt.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lt.string%22)

> The :attribute must be less than :value characters.

```diff
+Polje :attribute mora imati manje od :value karaktera.
```

#### [`validation.lte.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lte.array%22)

> The :attribute must not have more than :value items.

```diff
+Polje :attribute ne sme da ima više od :value elemenata.
```

#### [`validation.lte.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lte.file%22)

> The :attribute must be less than or equal :value kilobytes.

```diff
+Polje :attribute mora imati manje od ili tačno :value kilobajta.
```

#### [`validation.lte.numeric`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lte.numeric%22)

> The :attribute must be less than or equal :value.

```diff
+Polje :attribute mora imati vrednost manju od ili tačno :value.
```

#### [`validation.lte.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.lte.string%22)

> The :attribute must be less than or equal :value characters.

```diff
+Polje :attribute mora imati manje od ili tačno :value karaktera.
```

#### [`validation.mimes`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.mimes%22)

> The :attribute must be a file of type: :values.

```diff
+Polje :attribute mora biti datoteka tipa: :values.
```

#### [`validation.mimetypes`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.mimetypes%22)

> The :attribute must be a file of type: :values.

```diff
+Polje :attribute mora biti datoteka tipa: :values.
```

#### [`validation.min.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.min.array%22)

> The :attribute must have at least :min items.

```diff
+Polje :attribute bi trebalo da ima najmanje :min elemenata.
```

#### [`validation.min.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.min.file%22)

> The :attribute must be at least :min kilobytes.

```diff
+Polje :attribute bi trebalo da ima najmanje :min kilobajta.
```

#### [`validation.min.numeric`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.min.numeric%22)

> The :attribute must be at least :min.

```diff
+Polje :attribute bi trebalo da ima vrednost najmanje :min.
```

#### [`validation.min.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.min.string%22)

> The :attribute must be at least :min characters.

```diff
+Polje :attribute bi trebalo da ima najmanje :min karaktera.
```

#### [`validation.multiple_of`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.multiple_of%22)

> The :attribute must be a multiple of :value.

```diff
+Polje :attribute mora biti veće od :value.
```

#### [`validation.prohibited_if`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.prohibited_if%22)

> The :attribute field is prohibited when :other is :value.

```diff
+Polje :attribute je zabranjeno kada je :other :value.
```

#### [`validation.prohibited_unless`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.prohibited_unless%22)

> The :attribute field is prohibited unless :other is in :values.

```diff
+Polje :attribute je zabranjeno osim ako :other nije u :values.
```

#### [`validation.required_if`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.required_if%22)

> The :attribute field is required when :other is :value.

```diff
+Polje :attribute je obavezno kada je :other :value.
```

#### [`validation.required_unless`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.required_unless%22)

> The :attribute field is required unless :other is in :values.

```diff
+Polje :attribute je obavezno osim ako :other nije u :values.
```

#### [`validation.required_with`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.required_with%22)

> The :attribute field is required when :values is present.

```diff
+Polje :attribute je obavezno kada je vrednost :values.
```

#### [`validation.required_with_all`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.required_with_all%22)

> The :attribute field is required when :values are present.

```diff
+Polje :attribute je obavezno kada su vrednosti :values.
```

#### [`validation.required_without`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.required_without%22)

> The :attribute field is required when :values is not present.

```diff
+Polje :attribute je obavezno kada vrednost nije :values.
```

#### [`validation.required_without_all`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.required_without_all%22)

> The :attribute field is required when none of :values are present.

```diff
+Polje :attribute je obavezno kada vrednosti nisu :values.
```

#### [`validation.size.array`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.size.array%22)

> The :attribute must contain :size items.

```diff
+Polje :attribute mora sadržati :size elemenata.
```

#### [`validation.size.file`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.size.file%22)

> The :attribute must be :size kilobytes.

```diff
+Polje :attribute mora biti :size kilobajta.
```

#### [`validation.size.numeric`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.size.numeric%22)

> The :attribute must be :size.

```diff
+Polje :attribute mora biti veličine :size.
```

#### [`validation.size.string`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.size.string%22)

> The :attribute must be :size characters.

```diff
+Polje :attribute mora imati :size karaktera.
```

#### [`validation.starts_with`](https://weblate.rob006.net/translate/flarum/validation/sr_Latn/?q=context%3A%3D%22validation.starts_with%22)

> The :attribute must start with one of the following: :values.

```diff
+Polje :attribute mora početi sa sledećim vrednostima: :values.
```

<!-- {% endraw %} -->
