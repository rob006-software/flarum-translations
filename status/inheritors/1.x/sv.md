# Swedish inherited translations differences

Translations for Swedish (`sv`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **195** are translated differently and **238** are
translated only in `sv`. Altogether they cover **16** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | 0 | [22](#acpl-lscache-missing) |
| `core` | [144](#core) | [48](#core-missing) |
| `flarum-akismet` | [1](#flarum-akismet) | 0 |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `flarum-bbcode` | 0 | [1](#flarum-bbcode-missing) |
| `flarum-flags` | [3](#flarum-flags) | 0 |
| `flarum-likes` | [2](#flarum-likes) | 0 |
| `flarum-lock` | [4](#flarum-lock) | 0 |
| `flarum-markdown` | 0 | [11](#flarum-markdown-missing) |
| `flarum-mentions` | 0 | [13](#flarum-mentions-missing) |
| `flarum-nicknames` | [6](#flarum-nicknames) | [5](#flarum-nicknames-missing) |
| `flarum-statistics` | 0 | [17](#flarum-statistics-missing) |
| `flarum-sticky` | [3](#flarum-sticky) | [1](#flarum-sticky-missing) |
| `flarum-subscriptions` | [5](#flarum-subscriptions) | [3](#flarum-subscriptions-missing) |
| `flarum-suspend` | [4](#flarum-suspend) | [11](#flarum-suspend-missing) |
| `flarum-tags` | [23](#flarum-tags) | [13](#flarum-tags-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `sv` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.appearance.colored_header_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.appearance.colored_header_label%22)

> Colored Header

```diff
-Färgat Sidhuvud
+Färgat sidhuvud
```

Färgat <del>Sidhuvud</del><ins>sidhuvud</ins>

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Välj två grundfärger för ditt forum. Den första kommer att användas som markeringsfärg, medan den andra kommer användas som bakgrundfärg för olika element.
+Välj två grundfärger för ditt forum. Den första kommer att användas som markeringsfärg, medan den andra kommer användas som bakgrundsfärg för olika element.
```

Välj två grundfärger för ditt forum. Den första kommer att användas som markeringsfärg, medan den andra kommer användas som <del>bakgrundfärg</del><ins>bakgrundsfärg</ins> för olika element.

#### [`core.admin.appearance.custom_header_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.appearance.custom_header_heading%22)

> Custom Header

```diff
-Anpassat Sidhuvud
+Anpassat sidhuvud
```

Anpassat <del>Sidhuvud</del><ins>sidhuvud</ins>

#### [`core.admin.appearance.custom_styles_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.appearance.custom_styles_heading%22)

> Custom Styles

```diff
-Anpassad Sidstil
+Anpassad sidstil
```

Anpassad <del>Sidstil</del><ins>sidstil</ins>

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Customize your forum's colors, logos, and other variables.
+Anpassa forumets färger, logotyper och andra variabler.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
-Flarum förvaltar en <a>community-lista över övergivna tillägg</a>. När ett installerat tillägg finns med på listan flaggas det i administratörspanelen.
+Flarum upprätthåller en <a>communitylista över övergivna tillägg</a>. När ett installerat tillägg förekommer på listan markeras det i administrationspanelen.
```

Flarum <del>förvaltar</del><ins>upprätthåller</ins> en <del>&lt;a&gt;community-lista</del><ins>&lt;a&gt;communitylista</ins> över övergivna tillägg&lt;/a&gt;. När ett installerat tillägg<del> finns</del> <del>med</del><ins>förekommer</ins> på listan <del>flaggas</del><ins>markeras</ins> det i <del>administratörspanelen.</del><ins>administrationspanelen.</ins>

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Set your forum title, language, and other basic settings.
+Ange forumets titel, språk och andra grundläggande inställningar.
```

#### [`core.admin.basics.display_name_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.display_name_heading%22)

> User Display Name

```diff
-User Display Name
+Användarens visningsnamn
```

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Select the driver that should be used for users' display names. By default, the username is shown.
+Välj den drivrutin som ska användas för användarnas visningsnamn. Som standard visas användarnamnet.
```

#### [`core.admin.basics.forum_title_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.forum_title_heading%22)

> Forum Title

```diff
-Forum Title
+Forumtitel
```

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Välj vilken sida som ska vara den första som användarna ser när de besöker ditt forum. Om du anger en anpassad länk, använd en sökväg som är relativ till forumets root.
+Välj den sida som användarna ser först när de besöker ditt forum.
```

Välj <del>vilken sida som ska vara </del>den <del>första</del><ins>sida</ins> som användarna ser<ins> först</ins> när de besöker ditt forum.<del> Om du anger en anpassad länk, använd en sökväg som är relativ till forumets root.</del>

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-Slug Driver: {model}
+Slug-drivrutin: {model}
```

<del>Slug Driver:</del><ins>Slug-drivrutin:</ins> {model}

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Select a driver to be used for slugging this model.
+Välj en drivrutin som ska användas för slugs i den här modellen.
```

#### [`core.admin.basics.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.title%22)

> Basics

```diff
-Basics
+Grundläggande
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Ändra texten som visas i bannern på sidan för Alla Diskussioner. Använd detta för att välkomna gäster till ditt forum.
+Konfigurera texten som visas i bannern på sidan för alla diskussioner. Använd den för att välkomna gäster till ditt forum.
```

<del>Ändra</del><ins>Konfigurera</ins> texten som visas i bannern på sidan för <del>Alla</del><ins>alla</ins> <del>Diskussioner.</del><ins>diskussioner.</ins> Använd <del>detta</del><ins>den</ins> för att välkomna gäster till ditt forum.

#### [`core.admin.create_user.email_confirmed_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.create_user.email_confirmed_label%22)

> Require user to confirm this email

```diff
-Kräv att användaren bekräftar denna e-post
+Kräv att användaren bekräftar denna e-postadress
```

Kräv att användaren bekräftar denna <del>e-post</del><ins>e-postadress</ins>

#### [`core.admin.create_user.use_random_password`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.create_user.use_random_password%22)

> Generate random password

```diff
-Generera slumpat lösenord
+Generera slumpvalt lösenord
```

Generera <del>slumpat</del><ins>slumpvalt</ins> lösenord

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-Ditt forum vid en anblick.
+En överblick över ditt forum.
```

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-Kan inte skriva till filsystemet. Kontrollera dina behörigheter till filsystemet och försök igen. Eller försök köra via kommandorad.
+Det gick inte att skriva till filsystemet. Kontrollera rättigheterna för filsystemet och försök igen. Eller försök att köra från kommandoraden.
```

<del>Kan</del><ins>Det gick</ins> inte<ins> att</ins> skriva till filsystemet. Kontrollera<del> dina</del> <del>behörigheter</del><ins>rättigheterna</ins> <del>till</del><ins>för</ins> filsystemet och försök igen. Eller försök<ins> att</ins> köra <del>via</del><ins>från</ins> <del>kommandorad.</del><ins>kommandoraden.</ins>

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-När <code>debug</code> läge är aktivt kommer Flarum att köra rebuild på  <code>JavaScript</code> och <code>CSS</code> vid varje anrop, och det är då också möjligt att känslig information som t ex database secrets och miljövariabler läcker ut i interfacet.
+När <code>debug</code>-läget är aktiverat återskapar Flarum sina <code>JavaScript</code>- och <code>CSS</code>-resurser vid varje anrop, och kan även potentiellt läcka annan information, såsom databasuppgifter, miljövariabler med mera.

-Det är därför rekommenderat att   <code>debug</code> i <code>config.php</code> filen aldrig är aktiverat i en produktionsmiljö. Se <link>Flarum docs</link> för mer information.
+Det rekommenderas starkt att inaktivera <code>debug</code> i filen <code>config.php</code> i produktionsmiljö. Se <link>Flarums dokumentation</link> för mer information.

```

När <del>&lt;code&gt;debug&lt;/code&gt; läge</del><ins>&lt;code&gt;debug&lt;/code&gt;-läget</ins> är <del>aktivt</del><ins>aktiverat</ins> <del>kommer</del><ins>återskapar</ins> Flarum<del> att köra</del> <del>rebuild</del><ins>sina</ins> <del>på  &lt;code&gt;JavaScript&lt;/code&gt;</del><ins>&lt;code&gt;JavaScript&lt;/code&gt;-</ins> och <del>&lt;code&gt;CSS&lt;/code&gt;</del><ins>&lt;code&gt;CSS&lt;/code&gt;-resurser</ins> vid varje anrop, och<del> det är då också möjligt att</del> <del>känslig</del><ins>kan</ins> <del>information</del><ins>även</ins> <del>som</del><ins>potentiellt</ins> <del>t</del><ins>läcka</ins> <del>ex</del><ins>annan</ins> <del>database</del><ins>information,</ins> <del>secrets</del><ins>såsom</ins> <del>och</del><ins>databasuppgifter,</ins> miljövariabler<del> läcker ut</del> <del>i</del><ins>med</ins> <del>interfacet.</del><ins>mera.</ins><br /><br />Det<del> är</del> <del>därför</del><ins>rekommenderas</ins> <del>rekommenderat</del><ins>starkt</ins> att<del>   </del><ins> inaktivera </ins>&lt;code&gt;debug&lt;/code&gt; i<del> &lt;code&gt;config.php&lt;/code&gt;</del> filen<del> aldrig är</del> <del>aktiverat</del><ins>&lt;code&gt;config.php&lt;/code&gt;</ins> i<del> en</del> produktionsmiljö. Se <del>&lt;link&gt;Flarum</del><ins>&lt;link&gt;Flarums</ins> <del>docs&lt;/link&gt;</del><ins>dokumentation&lt;/link&gt;</ins> för mer information.<br />

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Ändra ditt forums utseende genom att lägga till egen LESS/CSS-kod som skriver över Flarums standardutseende.
+Anpassa forumets utseende genom att lägga till egen Less- eller CSS-kod som tillämpas ovanpå Flarums <a>standardstilar</a>.
```

<del>Ändra ditt</del><ins>Anpassa</ins> <del>forums</del><ins>forumets</ins> utseende genom att lägga till egen <del>LESS/CSS-kod</del><ins>Less- eller CSS-kod</ins> som <del>skriver</del><ins>tillämpas</ins> <del>över</del><ins>ovanpå</ins> Flarums <del>standardutseende.</del><ins>&lt;a&gt;standardstilar&lt;/a&gt;.</ins>

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Välj driver, inställningar och adress som skall användas vid mejlutskick
+Konfigurera drivrutin, inställningar och adresser som forumet ska använda för att skicka e-post.
```

<del>Välj</del><ins>Konfigurera</ins> <del>driver,</del><ins>drivrutin,</ins> inställningar och <del>adress</del><ins>adresser</ins> som <del>skall</del><ins>forumet</ins> <del>användas</del><ins>ska</ins> <del>vid</del><ins>använda</ins> <del>mejlutskick</del><ins>för att skicka e-post.</ins>

#### [`core.admin.email.driver_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.driver_heading%22)

> Choose a Driver

```diff
-Välj Driver
+Välj drivrutin
```

Välj <del>Driver</del><ins>drivrutin</ins>

#### [`core.admin.email.driver_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.driver_label%22)

> Driver

```diff
-Driver
+Drivrutin
```

#### [`core.admin.email.mail_host_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.mail_host_label%22)

> Host

```diff
-Host
+Värd
```

#### [`core.admin.email.mail_mailgun_secret_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.mail_mailgun_secret_label%22)

> Secret key

```diff
-Secret key
+Hemlig nyckel
```

#### [`core.admin.email.mailgun_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.mailgun_heading%22)

> Mailgun Settings

```diff
-Mailgun Settings
+Mailgun-inställningar
```

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.
+Flarum skickar för närvarande inga e-postmeddelanden. Detta kan bero på den valda drivrutinen eller fel i konfigurationen.
```

Flarum <del>currently does not</del><ins>skickar</ins> <del>send</del><ins>för</ins> <del>emails.</del><ins>närvarande</ins> <del>This</del><ins>inga</ins> <del>can</del><ins>e-postmeddelanden.</ins> <del>be</del><ins>Detta</ins> <del>due</del><ins>kan</ins> <del>to</del><ins>bero</ins> <del>the</del><ins>på</ins> <del>selected</del><ins>den</ins> <del>driver,</del><ins>valda</ins> <del>or</del><ins>drivrutinen</ins> <del>errors</del><ins>eller</ins> <del>in</del><ins>fel</ins> <del>its</del><ins>i</ins> <del>configuration.</del><ins>konfigurationen.</ins>

#### [`core.admin.email.send_test_mail_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.send_test_mail_heading%22)

> Send Test Mail

```diff
-Send Test Mail
+Skicka testmeddelande
```

#### [`core.admin.email.send_test_mail_success`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.send_test_mail_success%22)

> Test mail sent successfully!

```diff
-Test mail sent successfully!
+Testmeddelandet har skickats!
```

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-This will send an email using the above configuration to your email, {email}.
+Detta skickar ett e-postmeddelande till din e-postadress, {email}, med ovanstående konfiguration.
```

#### [`core.admin.email.smtp_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.email.smtp_heading%22)

> SMTP Settings

```diff
-SMTP Settings
+SMTP-inställningar
```

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Rensning kommer att radera alla databasposter och inställningar relaterad till den här extensionen. Det kommer inte att avinstallera extensionen, det måste göras via Composer. Är du säker på att du vill fortsätta?
+Rensning tar bort alla databasposter och tillgångar som är kopplade till tillägget. Det avinstallerar inte själva tillägget; det måste göras via Composer. Är du säker på att du vill fortsätta?
```

Rensning <del>kommer att</del><ins>tar</ins> <del>radera</del><ins>bort</ins> alla databasposter och <del>inställningar</del><ins>tillgångar</ins> <del>relaterad</del><ins>som</ins> <del>till</del><ins>är</ins> <del>den</del><ins>kopplade</ins> <del>här</del><ins>till</ins> <del>extensionen.</del><ins>tillägget.</ins> Det <del>kommer</del><ins>avinstallerar</ins> inte<del> att</del> <del>avinstallera</del><ins>själva</ins> <del>extensionen,</del><ins>tillägget;</ins> det måste göras via Composer. Är du säker på att du vill fortsätta?

#### [`core.admin.extension.disabled`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.disabled%22)

> Disabled

```diff
-Disabled
+Inaktiverat
```

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Enable the extension to view and change settings.
+Aktivera tillägget för att visa och ändra inställningar.
```

#### [`core.admin.extension.enabled`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.enabled%22)

> Enabled

```diff
-Enabled
+Aktiverat
```

#### [`core.admin.extension.info_links.source`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.info_links.source%22)

> Source

```diff
-Source
+Källa
```

#### [`core.admin.extension.no_permissions`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.no_permissions%22)

> This extension has no permissions.

```diff
-This extension has no permissions.
+Tillägget har inga behörigheter.
```

#### [`core.admin.extension.no_settings`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.no_settings%22)

> This extension has no settings.

```diff
-This extension has no settings.
+Tillägget har inga inställningar.
```

#### [`core.admin.extension.open_modal`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.open_modal%22)

> Open Settings

```diff
-Open Settings
+Öppna inställningar
```

#### [`core.admin.extension.readme.no_readme`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.readme.no_readme%22)

> This extension does not appear to have a README file

```diff
-Den här extensionen verkar inte ha någon README-fil
+Det här tillägget verkar inte ha någon README-fil
```

<del>Den</del><ins>Det</ins> här <del>extensionen</del><ins>tillägget</ins> verkar inte ha någon README-fil

#### [`core.admin.header.get_help`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.header.get_help%22)

> Get Help

```diff
-Get Help
+Få hjälp
```

#### [`core.admin.nav.categories.core`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.nav.categories.core%22)

> Core Configuration

```diff
-Core Configuration
+Grundläggande konfiguration
```

#### [`core.admin.nav.categories.discussion`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.nav.categories.discussion%22)

> Discussion

```diff
-Discussion
+Diskussion
```

#### [`core.admin.nav.categories.formatting`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.nav.categories.formatting%22)

> Formatting

```diff
-Formatting
+Formatering
```

#### [`core.admin.nav.categories.moderation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.nav.categories.moderation%22)

> Moderation

```diff
-Moderation
+Moderering
```

#### [`core.admin.nav.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.nav.search_placeholder%22)

> Search Extensions

```diff
-Search Extensions
+Sök tillägg
```

#### [`core.admin.permissions.allow_post_editing_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.allow_post_editing_label%22)

> Allow post editing

```diff
-Allow post editing
+Tillåt redigering av inlägg
```

#### [`core.admin.permissions.allow_renaming_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.allow_renaming_label%22)

> Allow renaming

```diff
-Allow renaming
+Tillåt namnändring
```

#### [`core.admin.permissions.create_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.create_heading%22)

> Create

```diff
-Create
+Skapa
```

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-Delete discussions forever
+Ta bort diskussioner permanent
```

#### [`core.admin.permissions.delete_posts_forever_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.delete_posts_forever_label%22)

> Delete posts forever

```diff
-Delete posts forever
+Radera inlägg permanent
```

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-Configure who can see and do what.
+Konfigurera vem som kan se och göra vad.
```

#### [`core.admin.permissions.edit_users_credentials_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.edit_users_credentials_label%22)

> Edit user credentials

```diff
-Ändra användaruppgifter
+Redigera användaruppgifter
```

<del>Ändra</del><ins>Redigera</ins> användaruppgifter

#### [`core.admin.permissions.edit_users_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.edit_users_label%22)

> Edit user attributes

```diff
-Edit users
+Redigera användarattribut
```

#### [`core.admin.permissions.moderate_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.moderate_heading%22)

> Moderate

```diff
-Moderate
+Moderera
```

#### [`core.admin.permissions.participate_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.participate_heading%22)

> Participate

```diff
-Participate
+Delta
```

#### [`core.admin.permissions.post_without_throttle_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.post_without_throttle_label%22)

> Reply multiple times without waiting

```diff
-Reply multiple times without waiting
+Svara flera gånger utan att vänta
```

#### [`core.admin.permissions.read_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.read_heading%22)

> Read

```diff
-Read
+Läs
```

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-Rename discussions
+Byt namn på diskussioner
```

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-Reply to discussions
+Svara i diskussioner
```

#### [`core.admin.permissions.search_users_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.search_users_label%22)

> =&gt; core.ref.search\_users

```diff
-Sök efter användare
+=> core.ref.search_users
```

#### [`core.admin.permissions.sign_up_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.sign_up_label%22)

> Sign up

```diff
-Sign up
+Registrera
```

#### [`core.admin.permissions.start_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.start_discussions_label%22)

> Start discussions

```diff
-Start discussions
+Starta diskussioner
```

#### [`core.admin.permissions.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.title%22)

> Permissions

```diff
-Permissions
+Behörigheter
```

#### [`core.admin.permissions.view_hidden_groups_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.view_hidden_groups_label%22)

> View hidden group badges

```diff
-View hidden group badges
+Visa dolda gruppmärken
```

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Always view user last seen time
+Visa alltid tidpunkten då användaren senast var aktiv
```

#### [`core.admin.permissions.view_post_ips_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.view_post_ips_label%22)

> View post IP addresses

```diff
-View post IP addresses
+Visa IP-adresser för inlägg
```

#### [`core.admin.permissions_controls.allow_indefinitely_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.allow_indefinitely_button%22)

> Indefinitely

```diff
-Indefinitely
+Obegränsat
```

#### [`core.admin.permissions_controls.allow_some_minutes_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.allow_some_minutes_button%22)

> {count, plural, one {For # minute} other {For # minutes}}

```diff
-{count, plural, one {For # minute} other {For # minutes}}
+{count, plural, one {I # minut} other {I # minuter}}
```

{count, plural, one <del>{For</del><ins>{I</ins> # <del>minute}</del><ins>minut}</ins> other <del>{For</del><ins>{I</ins> # <del>minutes}}</del><ins>minuter}}</ins>

#### [`core.admin.permissions_controls.allow_until_reply_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.allow_until_reply_button%22)

> Until next reply

```diff
-Until next reply
+Fram till nästa svar
```

#### [`core.admin.permissions_controls.everyone_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.everyone_button%22)

> Everyone

```diff
-Everyone
+Alla
```

#### [`core.admin.permissions_controls.signup_closed_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.signup_closed_button%22)

> Closed

```diff
-Closed
+Stängd
```

#### [`core.admin.permissions_controls.signup_open_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.signup_open_button%22)

> Open

```diff
-Open
+Öppen
```

#### [`core.admin.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.upload_image.upload_button%22)

> Choose an Image...

```diff
-Choose an Image...
+Välj en bild...
```

#### [`core.admin.users.grid.columns.email.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.users.grid.columns.email.title%22)

> =&gt; core.ref.email

```diff
-E-mail
+=> core.ref.email
```

#### [`core.admin.users.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.users.title%22)

> =&gt; core.ref.users

```diff
-Användare
+=> core.ref.users
```

#### [`core.email.send_test.subject`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.email.send_test.subject%22)

> Flarum Email Test

```diff
-Flarum Email Test
+E-posttest för Flarum
```

#### [`core.forum.composer.exit_full_screen_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer.exit_full_screen_tooltip%22)

> Exit Full Screen

```diff
-Avsluta Helskärm
+Avsluta helskärm
```

Avsluta <del>Helskärm</del><ins>helskärm</ins>

#### [`core.forum.composer.full_screen_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer.full_screen_tooltip%22)

> Full Screen

```diff
-Full Screen
+Helskärm
```

#### [`core.forum.composer.minimize_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer.minimize_tooltip%22)

> Minimize

```diff
-Helskärm
+Minimera
```

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Du har inte skapat din tråd. Vill du fortsätta ändå?
+Du har inte publicerat din diskussion. Vill du ta bort den?
```

Du har inte <del>skapat</del><ins>publicerat</ins> din <del>tråd.</del><ins>diskussion.</ins> Vill du <del>fortsätta</del><ins>ta</ins> <del>ändå?</del><ins>bort den?</ins>

#### [`core.forum.composer_discussion.submit_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer_discussion.submit_button%22)

> Post Discussion

```diff
-Skapa Tråd
+Skapa diskussion
```

Skapa <del>Tråd</del><ins>diskussion</ins>

#### [`core.forum.composer_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer_discussion.title_placeholder%22)

> Discussion Title

```diff
-Trådens rubrik
+Diskussionstitel
```

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Ditt inlägg redigerades.
+Din ändring har utförts.
```

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-Är du säker på att du vill radera den här tråden?
+Är du säker på att du vill radera den här diskussionen?
```

Är du säker på att du vill radera den här <del>tråden?</del><ins>diskussionen?</ins>

#### [`core.forum.discussion_list.empty_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.discussion_list.empty_text%22)

> It looks as though there are no discussions here.

```diff
-Det ser ut som att det inte finns några trådar här.
+Det verkar inte finnas några diskussioner här.
```

Det <del>ser ut som att det</del><ins>verkar</ins> inte <del>finns</del><ins>finnas</ins> några <del>trådar</del><ins>diskussioner</ins> här.

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Om e-postadressen du angav är registrerad på denna webbplats kommer vi att skicka dig ett e-postmeddelande med en länk för att återställa ditt lösenord. Kontrollera din skräppostmapp om du inte mottagit meddelandet inom några minuter.
+Om e-postadressen du angav är registrerad på denna webbplats skickar vi ett e-postmeddelande med en länk för att återställa ditt lösenord. Kontrollera din skräppostmapp om du inte får meddelandet inom någon minut eller två.
```

Om e-postadressen du angav är registrerad på denna webbplats <del>kommer</del><ins>skickar</ins> vi<del> att skicka dig</del> ett e-postmeddelande med en länk för att återställa ditt lösenord. Kontrollera din skräppostmapp om du inte <del>mottagit</del><ins>får</ins> meddelandet inom <del>några</del><ins>någon</ins> <del>minuter.</del><ins>minut eller två.</ins>

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-Tillbaka till trådlistan
+Tillbaka till diskussionslistan
```

Tillbaka till <del>trådlistan</del><ins>diskussionslistan</ins>

#### [`core.forum.header.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.header.search_placeholder%22)

> Search Forum

```diff
-Sök i Forumet
+Sök i forumet
```

Sök i <del>Forumet</del><ins>forumet</ins>

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-Visa/dölj dropdownmeny för val
+Visa/dölj dropdownmeny för sessions-val
```

Visa/dölj dropdownmeny för <del>val</del><ins>sessions-val</ins>

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-Kan inte starta tråd
+Kan inte starta diskussion
```

Kan inte starta <del>tråd</del><ins>diskussion</ins>

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-Är du säker på att du vill markera alla trådar som lästa?
+Är du säker på att du vill markera alla diskussioner som lästa?
```

Är du säker på att du vill markera alla <del>trådar</del><ins>diskussioner</ins> som lästa?

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-Har du inget konto? <a>Registrera dig</a>
+Har du inget konto ännu? <a>Registrera dig</a>
```

Har du inget <del>konto?</del><ins>konto ännu?</ins> &lt;a&gt;Registrera dig&lt;/a&gt;

#### [`core.forum.notifications.delete_all_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.notifications.delete_all_tooltip%22)

> Delete all notifications

```diff
-Radera alla notifieringar
+Ta bort alla aviseringar
```

<del>Radera</del><ins>Ta bort</ins> alla <del>notifieringar</del><ins>aviseringar</ins>

#### [`core.forum.notifications.empty_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.notifications.empty_text%22)

> No Notifications

```diff
-Inga notifieringar
+Inga aviseringar
```

Inga <del>notifieringar</del><ins>aviseringar</ins>

#### [`core.forum.notifications.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.notifications.toggle_dropdown_accessible_label%22)

> View notifications

```diff
-Visa notifieringar
+Visa aviseringar
```

Visa <del>notifieringar</del><ins>aviseringar</ins>

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Är du säker på att du vill ta bort detta inlägget för alltid?.
+Är du säker på att du vill radera det här inlägget permanent? Denna åtgärd går inte att ångra.
```

Är du säker på att du vill <del>ta</del><ins>radera</ins> <del>bort</del><ins>det</ins> <del>detta</del><ins>här</ins> inlägget <del>för</del><ins>permanent?</ins> <del>alltid?.</del><ins>Denna åtgärd går inte att ångra.</ins>

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-Visa/dölj dropdownmeny för kontroller
+Visa/dölj dropdownmeny för inläggskontroller
```

Visa/dölj dropdownmeny för <del>kontroller</del><ins>inläggskontroller</ins>

#### [`core.forum.post_stream.discussion_renamed_old_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_old_tooltip%22)

> The old title was: "{old}"

```diff
-Den gamla rubriken var: "{old}"
+Den tidigare rubriken var: "{old}"
```

Den <del>gamla</del><ins>tidigare</ins> rubriken var: "{old}"

#### [`core.forum.rename_discussion.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.rename_discussion.title%22)

> Rename Discussion

```diff
-Byt namn på tråd
+Byt namn på diskussion
```

Byt namn på <del>tråd</del><ins>diskussion</ins>

#### [`core.forum.security.current_active_session`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.current_active_session%22)

> Current Active Session

```diff
-Nuvarande Aktiv Session
+Pågående aktiv session
```

#### [`core.forum.security.empty_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.empty_text%22)

> It looks like there is nothing to see here.

```diff
-Det verkar som att det inte finns något att se här.
+Det ser ut som att det inte finns något att se här.
```

Det <del>verkar</del><ins>ser ut</ins> som att det inte finns något att se här.

#### [`core.forum.security.hide_access_token`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.hide_access_token%22)

> Hide Token

```diff
-Dölj Token
+Dölj token
```

Dölj <del>Token</del><ins>token</ins>

#### [`core.forum.security.new_access_token_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.new_access_token_modal.submit_button%22)

> Create Token

```diff
-Skapa Token
+Skapa token
```

Skapa <del>Token</del><ins>token</ins>

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Ta emot "{description}" notifieringar via {method}
+Ta emot "{description}" aviseringar via {method}
```

Ta emot "{description}" <del>notifieringar</del><ins>aviseringar</ins> via {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Någon byter namn på en tråd jag startat
+Någon byter namn på en diskussion jag startat
```

Någon byter namn på en <del>tråd</del><ins>diskussion</ins> jag startat

#### [`core.forum.user.joined_date_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.user.joined_date_text%22)

> Joined {ago}

```diff
-Blev medlem {ago}
+Anslöt {ago}
```

<del>Blev medlem</del><ins>Anslöt</ins> {ago}

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-Är du säker på att du vill radera denna användare? Alla användarens inlägg kommer att raderas.
+Är du säker på att du vill ta bort den här användaren? Användarens inlägg kommer INTE att tas bort.
```

Är du säker på att du vill <del>radera</del><ins>ta</ins> <del>denna</del><ins>bort</ins> <del>användare?</del><ins>den</ins> <del>Alla</del><ins>här</ins> <del>användarens</del><ins>användaren? Användarens</ins> inlägg kommer<ins> INTE</ins> att <del>raderas.</del><ins>tas bort.</ins>

#### [`core.forum.user_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.user_controls.delete_error_message%22)

> Deletion of user &lt;i&gt;{username} ({email})&lt;/i&gt; failed

```diff
-Borttagande av användare <i>{username} ({email})</i> misslyckades.
+Borttagning av användaren <i>{username} ({email})</i> misslyckades
```

<del>Borttagande</del><ins>Borttagning</ins> av <del>användare</del><ins>användaren</ins> &lt;i&gt;{username} ({email})&lt;/i&gt; <del>misslyckades.</del><ins>misslyckades</ins>

#### [`core.forum.user_controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.user_controls.delete_success_message%22)

> User &lt;i&gt;{username} ({email})&lt;/i&gt; was deleted

```diff
-Användare <i>{username} ({email})</i> borttagen.
+Användaren <i>{username} ({email})</i> togs bort
```

<del>Användare</del><ins>Användaren</ins> &lt;i&gt;{username} ({email})&lt;/i&gt; <del>borttagen.</del><ins>togs bort</ins>

#### [`core.lib.badge.hidden_tooltip`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.badge.hidden_tooltip%22)

> Hidden

```diff
-Hidden
+Dold
```

#### [`core.lib.edit_user.email_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.email_heading%22)

> =&gt; core.ref.email

```diff
-E-mail
+=> core.ref.email
```

#### [`core.lib.edit_user.email_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.email_label%22)

> =&gt; core.ref.email

```diff
-E-mail
+=> core.ref.email
```

#### [`core.lib.edit_user.password_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.password_heading%22)

> =&gt; core.ref.password

```diff
-Lösenord
+=> core.ref.password
```

#### [`core.lib.edit_user.password_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.password_label%22)

> =&gt; core.ref.password

```diff
-Lösenord
+=> core.ref.password
```

#### [`core.lib.edit_user.submit_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-Spara ändringar
+=> core.ref.save_changes
```

#### [`core.lib.edit_user.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.title%22)

> =&gt; core.ref.edit\_user

```diff
-Redigera användare
+=> core.ref.edit_user
```

#### [`core.lib.edit_user.username_heading`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.username_heading%22)

> =&gt; core.ref.username

```diff
-Användarnamn
+=> core.ref.username
```

#### [`core.lib.edit_user.username_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.edit_user.username_label%22)

> =&gt; core.ref.username

```diff
-Användarnamn
+=> core.ref.username
```

#### [`core.lib.error.circular_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.circular_dependencies_message%22)

> Circular dependencies detected: {extensions}. Aborting. Please disable one of the extensions and try again.

```diff
-Cirkulära beroenden upptäckta: {extensions}. Avbryter. Vänligen inaktivera ett av tilläggen och försök igen.
+Cirkulära beroenden upptäcktes: {extensions}. Avbryter. Inaktivera ett av tilläggen och försök igen.
```

Cirkulära beroenden <del>upptäckta:</del><ins>upptäcktes:</ins> {extensions}. Avbryter.<del> Vänligen</del> <del>inaktivera</del><ins>Inaktivera</ins> ett av tilläggen och försök igen.

#### [`core.lib.error.dependent_extensions_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.dependent_extensions_message%22)

> Cannot disable {extension} until the following dependent extensions are disabled: {extensions}

```diff
-Cannot disable {extension} until the following dependent extensions are disabled: {extensions}
+Det går inte att inaktivera {extension} förrän följande beroende tillägg har inaktiverats: {extensions}
```

<del>Cannot</del><ins>Det</ins> <del>disable</del><ins>går</ins> <del>{extension}</del><ins>inte</ins> <del>until</del><ins>att</ins> <del>the</del><ins>inaktivera</ins> <del>following</del><ins>{extension}</ins> <del>dependent</del><ins>förrän</ins> <del>extensions</del><ins>följande</ins> <del>are</del><ins>beroende</ins> <del>disabled:</del><ins>tillägg har inaktiverats:</ins> {extensions}

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-{extension} kunde inte läsas in. Kontrollera browser-konsolen för mer information.
+{extension} kunde inte initieras; kontrollera webbläsarens konsol för mer information.
```

{extension} kunde inte <del>läsas</del><ins>initieras;</ins> <del>in.</del><ins>kontrollera</ins> <del>Kontrollera</del><ins>webbläsarens</ins> <del>browser-konsolen</del><ins>konsol</ins> för mer information.

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-Cannot enable {extension} until the following dependencies are enabled: {extensions}
+Det går inte att aktivera {extension} förrän följande beroenden har aktiverats: {extensions}
```

<del>Cannot</del><ins>Det</ins> <del>enable</del><ins>går</ins> <del>{extension}</del><ins>inte</ins> <del>until</del><ins>att</ins> <del>the</del><ins>aktivera</ins> <del>following</del><ins>{extension}</ins> <del>dependencies</del><ins>förrän</ins> <del>are</del><ins>följande</ins> <del>enabled:</del><ins>beroenden har aktiverats:</ins> {extensions}

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-Du saknar rättigheterna för att göra det.
+Du har inte behörighet att göra det.
```

Du <del>saknar</del><ins>har</ins> <del>rättigheterna</del><ins>inte</ins> <del>för</del><ins>behörighet</ins> att göra det.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Vi hittade ett fel när vi skulle visa innehållet, beklagar detta. Om du inte är administratör, försök igen senare. Om du är administratörm kontrollera Flarums loggfiler för mer information.
+Tyvärr uppstod ett fel när innehållet skulle visas. Om du är användare, vänligen försök igen senare. Om du är administratör, kontrollera Flarums loggfiler för mer information.
```

<del>Vi</del><ins>Tyvärr</ins> <del>hittade</del><ins>uppstod</ins> ett fel när <del>vi</del><ins>innehållet</ins> skulle<del> visa innehållet, beklagar</del> <del>detta.</del><ins>visas.</ins> Om du<del> inte</del> är <del>administratör,</del><ins>användare, vänligen</ins> försök igen senare. Om du är <del>administratörm</del><ins>administratör,</ins> kontrollera Flarums loggfiler för mer information.

#### [`core.lib.loading_indicator.accessible_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.loading_indicator.accessible_label%22)

> =&gt; core.ref.loading

```diff
-Laddar ...
+=> core.ref.loading
```

#### [`core.ref.all_discussions`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.all_discussions%22)

> All Discussions

```diff
-Alla trådar
+Alla diskussioner
```

Alla <del>trådar</del><ins>diskussioner</ins>

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Vi har skickat ett bekräftelsemail till {email}. Om du inte dyker upp inom en stund, kolla din skräppost.
+Vi har skickat ett bekräftelsemejl till {email}. Om det inte dyker upp snart, kontrollera din skräppostmapp.
```

Vi har skickat ett <del>bekräftelsemail</del><ins>bekräftelsemejl</ins> till {email}. Om <del>du</del><ins>det</ins> inte dyker upp<del> inom en</del> <del>stund,</del><ins>snart,</ins> <del>kolla</del><ins>kontrollera</ins> din <del>skräppost.</del><ins>skräppostmapp.</ins>

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-Lägg till HTML som kommer att visas allra längst ned på sidan
+Lägg till HTML som ska visas längst ner på sidan.
```

Lägg till HTML som <del>kommer att</del><ins>ska</ins> visas<del> allra</del> längst <del>ned</del><ins>ner</ins> på <del>sidan</del><ins>sidan.</ins>

#### [`core.ref.custom_footer_title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.custom_footer_title%22)

> Edit Custom Footer

```diff
-Redigera Anpassad sidfot
+Redigera anpassad sidfot
```

Redigera <del>Anpassad</del><ins>anpassad</ins> sidfot

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-Lägg till HTML som kommer att visas allra överst på sidan, över Flarums eget sidhuvud.
+Lägg till HTML som ska visas högst upp på sidan, ovanför Flarums eget sidhuvud.
```

Lägg till HTML som <del>kommer att</del><ins>ska</ins> visas <del>allra</del><ins>högst</ins> <del>överst</del><ins>upp</ins> på sidan, <del>över</del><ins>ovanför</ins> Flarums eget sidhuvud.

#### [`core.ref.custom_header_title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.custom_header_title%22)

> Edit Custom Header

```diff
-Redigera Anpassat sidhuvud
+Redigera anpassat sidhuvud
```

Redigera <del>Anpassat</del><ins>anpassat</ins> sidhuvud

#### [`core.ref.extensions`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.extensions%22)

> Extensions

```diff
-Extensions
+Tillägg
```

#### [`core.ref.notifications`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.notifications%22)

> Notifications

```diff
-Notifikationer
+Aviseringar
```

#### [`core.ref.some_others`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.some_others%22)

> {count, plural, one {# other} other {# others}}

```diff
-{count, plural, one {# annan} annan {# andra}}
+{count, plural, one {# annan} other {# andra}}
```

{count, plural, one {# annan} <del>annan</del><ins>other</ins> {# andra}}

#### [`core.ref.start_a_discussion`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.ref.start_a_discussion%22)

> Start a Discussion

```diff
-Starta en tråd
+Starta en diskussion
```

Starta en <del>tråd</del><ins>diskussion</ins>

#### [`core.views.admin.extensions.caption`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.admin.extensions.caption%22)

> =&gt; core.ref.extensions

```diff
-Extensions
+=> core.ref.extensions
```

#### [`core.views.admin.extensions.empty`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.admin.extensions.empty%22)

> No installed extensions

```diff
-Inga installerade extensions
+Inga installerade tillägg
```

Inga installerade <del>extensions</del><ins>tillägg</ins>

#### [`core.views.content.javascript_disabled_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.content.javascript_disabled_message%22)

> This site is best viewed in a modern browser with JavaScript enabled.

```diff
-Det här forumet visas bäst i en modern webbläsare med JavaScript påslaget.
+Denna webbplats visas bäst i en modern webbläsare med JavaScript aktiverat.
```

<del>Det här</del><ins>Denna</ins> <del>forumet</del><ins>webbplats</ins> visas bäst i en modern webbläsare med JavaScript <del>påslaget.</del><ins>aktiverat.</ins>

#### [`core.views.content.load_error_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.content.load_error_message%22)

> Something went wrong while trying to load the full version of this site. Try hard-refreshing this page to fix the error.

```diff
-Någonting gick fel när fullversionen av den här sidan laddades.
+Något gick fel vid försök att ladda fullversionen av denna webbplats. Prova att göra en hård refresh av sidan för att åtgärda felet.
```

<del>Någonting</del><ins>Något</ins> gick fel <del>när</del><ins>vid försök att ladda</ins> fullversionen av <del>den</del><ins>denna</ins> <del>här</del><ins>webbplats. Prova att göra en hård refresh av</ins> sidan <del>laddades.</del><ins>för att åtgärda felet.</ins>

#### [`core.views.content.loading_text`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.content.loading_text%22)

> =&gt; core.ref.loading

```diff
-Laddar...
+=> core.ref.loading
```

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-Sidan du försöker nå finns ej.
+Sidan du efterfrågade kunde inte hittas.
```

Sidan du <del>försöker</del><ins>efterfrågade</ins> <del>nå</del><ins>kunde</ins> <del>finns</del><ins>inte</ins> <del>ej.</del><ins>hittas.</ins>

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-Du har ej behörighet att besöka denna sida.
+Du har inte behörighet att komma åt den här sidan.
```

Du har <del>ej</del><ins>inte</ins> behörighet att <del>besöka</del><ins>komma</ins> <del>denna</del><ins>åt</ins> <del>sida.</del><ins>den här sidan.</ins>


### `flarum-akismet`

#### [`flarum-akismet.admin.permissions.bypass_akismet`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/sv/?q=context%3A%3D%22flarum-akismet.admin.permissions.bypass_akismet%22)

> Bypass Akismet

```diff
-Sidsteppa Akismet
+Förbigå Akismet
```

<del>Sidsteppa</del><ins>Förbigå</ins> Akismet


### `flarum-flags`

#### [`flarum-flags.forum.flag_post.reason_details_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-flags/sv/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_details_placeholder%22)

> Additional details (optional)

```diff
-Additional details (optional)
+Ytterligare uppgifter (valfritt)
```

#### [`flarum-flags.forum.flag_post.reason_missing_message`](https://weblate.rob006.net/translate/flarum2/flarum-flags/sv/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_missing_message%22)

> Please provide some details for our moderators.

```diff
-Please provide some details for our moderators.
+Lämna gärna mer information till våra moderatorer.
```

#### [`flarum-flags.forum.flag_post.reason_other_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/sv/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_other_label%22)

> Other (please specify)

```diff
-Annat
+Annat (vänligen ange)
```

Annat<ins> (vänligen ange)</ins>


### `flarum-likes`

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/sv/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{count, plural, one {{users} gillar detta} other {{users} gillar detta}}
+{count, plural, one {{users} gillar detta} other {{users} gillar detta}}.
```

{count, plural, one {{users} gillar detta} other {{users} gillar <del>detta}}</del><ins>detta}}.</ins>

#### [`flarum-likes.forum.post_likes.load_more_button`](https://weblate.rob006.net/translate/flarum2/flarum-likes/sv/?q=context%3A%3D%22flarum-likes.forum.post_likes.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
-Visa fler
+=> core.ref.load_more
```


### `flarum-lock`

#### [`flarum-lock.admin.permissions.lock_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/sv/?q=context%3A%3D%22flarum-lock.admin.permissions.lock_discussions_label%22)

> Lock discussions

```diff
-Lås tråd
+Lås diskussioner
```

Lås <del>tråd</del><ins>diskussioner</ins>

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/sv/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-{username} låste tråden.
+{username} låste diskussionen {time}.
```

{username} låste <del>tråden.</del><ins>diskussionen {time}.</ins>

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/sv/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} låste upp tråden.
+{username} låste upp diskussionen {time}.
```

{username} låste upp <del>tråden.</del><ins>diskussionen {time}.</ins>

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/sv/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Någon låste en tråd som jag startade
+Någon låser en diskussion som jag startat
```

Någon <del>låste</del><ins>låser</ins> en <del>tråd</del><ins>diskussion</ins> som jag <del>startade</del><ins>startat</ins>


### `flarum-nicknames`

#### [`flarum-nicknames.admin.settings.max_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.max_label%22)

> Maximum nickname length

```diff
-Maximum nickname length
+Maximal längd på smeknamn
```

#### [`flarum-nicknames.admin.settings.min_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.min_label%22)

> Minimum nickname length

```diff
-Minimum nickname length
+Minsta längd för smeknamn
```

#### [`flarum-nicknames.admin.settings.regex_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.regex_label%22)

> Regular expression for validation

```diff
-Regular expression for validation
+Reguljärt uttryck för validering
```

#### [`flarum-nicknames.admin.settings.unique_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.unique_label%22)

> Require unique nicknames

```diff
-Require unique nicknames?
+Kräv unika smeknamn
```

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-You must select "nickname" as the display name driver on the <a><strong>Basics Page</strong></a> for this extension to take effect.
+Du måste välja ”smeknamn” som drivrutin för visningsnamn på <a><strong>grundinställningssidan</strong></a> för att tillägget ska börja fungera.
```

#### [`flarum-nicknames.api.invalid_nickname_message`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.api.invalid_nickname_message%22)

> This nickname is invalid. Please contact your forum administrator for more information on nickname rules.

```diff
-This nickname is invalid. Please contact your forum administrator for more information on nickname rules.
+Detta smeknamn är ogiltigt. Vänligen kontakta forumadministratören för mer information om reglerna för smeknamn.
```

<del>This nickname is</del><ins>Detta</ins> <del>invalid.</del><ins>smeknamn</ins> <del>Please</del><ins>är</ins> <del>contact</del><ins>ogiltigt.</ins> <del>your</del><ins>Vänligen</ins> <del>forum</del><ins>kontakta</ins> <del>administrator</del><ins>forumadministratören</ins> <del>for</del><ins>för</ins> <del>more</del><ins>mer</ins> information <del>on</del><ins>om</ins> <del>nickname</del><ins>reglerna</ins> <del>rules.</del><ins>för smeknamn.</ins>


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/sv/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-Klistrade trådar
+Klistrade diskussioner
```

Klistrade <del>trådar</del><ins>diskussioner</ins>

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/sv/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-{username} klistrade tråden.
+{username} klistrade diskussionen.
```

{username} klistrade <del>tråden.</del><ins>diskussionen.</ins>

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/sv/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} avklistrade tråden.
+{username} avklistrade diskussionen.
```

{username} avklistrade <del>tråden.</del><ins>diskussionen.</ins>


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Någon skriver i en tråd som jag följer
+Någon gör ett inlägg i en diskussion jag följer
```

Någon <del>skriver</del><ins>gör ett inlägg</ins> i en<del> tråd</del> <del>som</del><ins>diskussion</ins> jag följer

#### [`flarum-subscriptions.forum.sub_controls.following_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.following_text%22)

> Be notified of all replies.

```diff
-Få notiser om alla svar.
+Få aviseringar om alla svar.
```

Få <del>notiser</del><ins>aviseringar</ins> om alla svar.

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-Få aldrig notiser. Göm från diskussionslistan.
+Ta aldrig emot aviseringar. Dölj från diskussionslistan.
```

<del>Få</del><ins>Ta</ins> aldrig <del>notiser.</del><ins>emot</ins> <del>Göm</del><ins>aviseringar. Dölj</ins> från diskussionslistan.

#### [`flarum-subscriptions.forum.sub_controls.not_following_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.not_following_text%22)

> Be notified only when @mentioned.

```diff
-Få notis endast när du blir @omnämnd.
+Få endast aviseringar när du blir omnämnd med @.
```

Få <del>notis </del>endast<ins> aviseringar</ins> när du blir <del>@omnämnd.</del><ins>omnämnd med @.</ins>

#### [`flarum-subscriptions.forum.sub_controls.notify_alert_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.notify_alert_tooltip%22)

> Get a forum notification when there are new posts

```diff
-Få notiser från forumet när det finns nya inlägg
+Få aviseringar från forumet när det finns nya inlägg
```

Få <del>notiser</del><ins>aviseringar</ins> från forumet när det finns nya inlägg


### `flarum-suspend`

#### [`flarum-suspend.admin.permissions.suspend_users_label`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.admin.permissions.suspend_users_label%22)

> Suspend users

```diff
-Avstängda användare
+Stäng av användare
```

<del>Avstängda</del><ins>Stäng av</ins> användare

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
-Du har blivit avstängd i {timeReadable}
+Du har blivit stängts av i {timeReadable}
```

Du har blivit <del>avstängd</del><ins>stängts av</ins> i {timeReadable}

#### [`flarum-suspend.forum.suspend_user.limited_time_label`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.limited_time_label%22)

> Suspended for a limited time...

```diff
-Stäng av under begränsad tid...
+Stäng av under en begränsad tid...
```

Stäng av under <ins>en </ins>begränsad tid...

#### [`flarum-suspend.forum.suspend_user.status_heading`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.status_heading%22)

> Suspension Status

```diff
-Avstängningens status
+Status för avstängning
```


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.color_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.edit_tag.color_label%22)

> =&gt; core.ref.color

```diff
-Färg
+=> core.ref.color
```

#### [`flarum-tags.admin.edit_tag.delete_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_button%22)

> Delete Tag

```diff
-Radera tagg
+Ta bort tagg
```

<del>Radera</del><ins>Ta bort</ins> tagg

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-Är du säker på att du vill radera denna tagg? Trådar med den här taggen kommer INTE att raderas.
+Är du säker på att du vill ta bort den här taggen? Diskussionerna som är kopplade till taggen kommer INTE att tas bort.
```

Är du säker på att du vill <del>radera</del><ins>ta</ins> <del>denna</del><ins>bort</ins> <del>tagg?</del><ins>den</ins> <del>Trådar</del><ins>här</ins> <del>med</del><ins>taggen?</ins> <del>den</del><ins>Diskussionerna</ins> <del>här</del><ins>som är kopplade till</ins> taggen kommer INTE att <del>raderas.</del><ins>tas bort.</ins>

#### [`flarum-tags.admin.edit_tag.hide_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.edit_tag.hide_label%22)

> Hide from All Discussions

```diff
-Göm från Alla Diskussioner
+Dölj från alla diskussioner
```

<del>Göm</del><ins>Dölj</ins> från <del>Alla</del><ins>alla</ins> <del>Diskussioner</del><ins>diskussioner</ins>

#### [`flarum-tags.admin.edit_tag.slug_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.edit_tag.slug_label%22)

> Slug

```diff
-Kortlänk
+Slug
```

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
-=> flarum-tags.ref.create_tag
+Skapa tagg
```

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-Justera listan över vilka taggar som är möjliga att organisera trådar med.
+Hantera listan över taggar som kan användas för att organisera diskussioner.
```

<del>Justera</del><ins>Hantera</ins> listan över<del> vilka</del> taggar som <del>är</del><ins>kan</ins> <del>möjliga</del><ins>användas för</ins> att organisera<del> trådar</del> <del>med.</del><ins>diskussioner.</ins>

#### [`flarum-tags.admin.permissions.bypass_tag_counts_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.permissions.bypass_tag_counts_label%22)

> Bypass tag requirements

```diff
-Undantag från tagg-begränsningar
+Kringgå krav på taggar
```

#### [`flarum-tags.admin.tag_settings.required_primary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_heading%22)

> Required Number of Primary Tags

```diff
-Antal primära taggar som krävs
+Obligatoriskt antal primära taggar
```

<del>Antal</del><ins>Obligatoriskt antal</ins> primära taggar<del> som krävs</del>

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Ange lägsta och högsta antalet primära taggar som måste kopplas till en tråd.
+Ange minsta och största antal primära taggar som får tillämpas på en diskussion.
```

Ange <del>lägsta</del><ins>minsta</ins> och <del>högsta</del><ins>största</ins> <del>antalet</del><ins>antal</ins> primära taggar som <del>måste</del><ins>får</ins> <del>kopplas</del><ins>tillämpas</ins> <del>till</del><ins>på</ins> en <del>tråd.</del><ins>diskussion.</ins>

#### [`flarum-tags.admin.tag_settings.required_secondary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_heading%22)

> Required Number of Secondary Tags

```diff
-Antal sekundära taggar som krävs
+Obligatoriskt antal sekundära taggar
```

<del>Antal</del><ins>Obligatoriskt antal</ins> sekundära taggar<del> som krävs</del>

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Ange lägsta och högsta antalet sekundära taggar som måste kopplas till en tråd.
+Ange det lägsta och högsta antalet sekundära taggar som får tillämpas på en diskussion.
```

Ange <ins>det </ins>lägsta och högsta antalet sekundära taggar som <del>måste</del><ins>får</ins> <del>kopplas</del><ins>tillämpas</ins> <del>till</del><ins>på</ins> en <del>tråd.</del><ins>diskussion.</ins>

#### [`flarum-tags.admin.tags.about_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tags.about_tags_text%22)

> Tags are used to categorize discussions. Primary tags are like traditional forum categories: they can be arranged in a two-level hierarchy. Secondary tags do not have hierarchy or order, and are useful for micro-categorization.

```diff
-Taggar används för att kategorisera trådar. Primära taggar är som traditionella forumkategorier: De de kan placeras i en tvåstegshierarki. Sekundära taggar har ingen hierarki eller ordning och är användbara för mikrokategorisering.
+Taggar används för att kategorisera diskussioner. Primära taggar fungerar som traditionella forumkategorier: de kan organiseras i en hierarki i två nivåer. Sekundära taggar saknar hierarki och ordning, och är användbara för mikrokategorisering.
```

Taggar används för att kategorisera <del>trådar.</del><ins>diskussioner.</ins> Primära taggar <del>är</del><ins>fungerar</ins> som traditionella forumkategorier:<del> De</del> de kan <del>placeras</del><ins>organiseras</ins> i en <del>tvåstegshierarki.</del><ins>hierarki i två nivåer.</ins> Sekundära taggar<del> har</del> <del>ingen</del><ins>saknar</ins> hierarki <del>eller</del><ins>och</ins> <del>ordning</del><ins>ordning,</ins> och är användbara för mikrokategorisering.

#### [`flarum-tags.forum.all_tags.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.all_tags.meta_description_text%22)

> All Tags

```diff
-Alla Taggar
+Alla taggar
```

Alla <del>Taggar</del><ins>taggar</ins>

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-Välj taggar för din tråd
+Välj taggar för din diskussion
```

Välj taggar för din <del>tråd</del><ins>diskussion</ins>

#### [`flarum-tags.forum.composer_discussion.choose_tags_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.composer_discussion.choose_tags_link%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
-Välj taggar
+=> flarum-tags.ref.choose_tags
```

#### [`flarum-tags.forum.header.back_to_tags_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.header.back_to_tags_tooltip%22)

> Back to Tag List

```diff
-Tillbaka till Taggar
+Tillbaka till tagglistan
```

Tillbaka till <del>Taggar</del><ins>tagglistan</ins>

#### [`flarum-tags.forum.index.untagged_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.index.untagged_link%22)

> Untagged

```diff
-Omärkta
+Otaggade
```

#### [`flarum-tags.forum.post_stream.added_and_removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_and_removed_tags_text%22)

> {username} added the {tagsAdded} and removed the {tagsRemoved} {time}.

```diff
-{username} lade till {tagsAdded} och tog bort {tagsRemoved}.
+{username} lade till {tagsAdded} och tog bort {tagsRemoved} {time}.
```

{username} lade till {tagsAdded} och tog bort <del>{tagsRemoved}.</del><ins>{tagsRemoved} {time}.</ins>

#### [`flarum-tags.forum.post_stream.added_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_tags_text%22)

> {username} added the {tagsAdded} {time}.

```diff
-{username} lade till {tagsAdded}.
+{username} lade till {tagsAdded} {time}.
```

{username} lade till <del>{tagsAdded}.</del><ins>{tagsAdded} {time}.</ins>

#### [`flarum-tags.forum.post_stream.removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.post_stream.removed_tags_text%22)

> {username} removed the {tagsRemoved} {time}.

```diff
-{username} tog bort {tagsRemoved}.
+{username} tog bort {tagsRemoved} {time}.
```

{username} tog bort <del>{tagsRemoved}.</del><ins>{tagsRemoved} {time}.</ins>

#### [`flarum-tags.forum.post_stream.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.post_stream.tags_text%22)

> {count, plural, one {{tags} tag} other {{tags} tags}}

```diff
-{tags} tagg|{tags} taggar
+{count, plural, one {{tags} tagg} other {{tags} taggar}}
```

#### [`flarum-tags.forum.tag.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.forum.tag.meta_description_text%22)

> All discussions with the {tag} tag

```diff
-Alla trådar med taggen {tag}
+Alla diskussioner med taggen {tag}
```

Alla <del>trådar</del><ins>diskussioner</ins> med taggen {tag}


## Missing translations

These strings are translated only in `sv`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `sv`.


### `acpl-lscache` (missing)

#### [`acpl-lscache.admin.cache_enabled_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.cache_enabled_help%22)

> Check out the &lt;a&gt;Information page&lt;/a&gt; on how to test the cache. NOTE: When disabling the cache, all cached entries for this site will be purged.

```diff
+Se <a>informationssidan</a> om hur du testar cachen. OBS! När cachen inaktiveras kommer all cachad data för denna webbplats att rensas.
```

#### [`acpl-lscache.admin.cache_enabled_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.cache_enabled_label%22)

> Enable LSCache

```diff
+Aktivera LSCache
```

#### [`acpl-lscache.admin.cache_exclude_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.cache_exclude_help%22)

> Paths containing these strings will not be cached. For &lt;code&gt;/mypath/mypage?aa=bb&lt;/code&gt;, you can use &lt;code&gt;mypage?aa=&lt;/code&gt;. To match the beginning, add &lt;code&gt;^&lt;/code&gt; at the start. For an exact match, add &lt;code&gt;$&lt;/code&gt; at the end of the URL. One per line.

```diff
+Sökvägar som innehåller dessa strängar kommer inte att cachelagras. För <code>/mypath/mypage?aa=bb</code> kan du använda <code>mypage?aa=</code>. För att matcha början lägger du till <code>^</code> i början. För en exakt matchning lägger du till <code>$</code> i slutet av webbadressen. En per rad.
```

#### [`acpl-lscache.admin.cache_exclude_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.cache_exclude_label%22)

> Exclude Paths from Caching

```diff
+Undanta sökvägar från cachning
```

#### [`acpl-lscache.admin.clearing_cache_listener_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.clearing_cache_listener_label%22)

> Purge LSCache When Flarum Cache is Cleared

```diff
+Rensa LSCache när Flarum-cachen rensas
```

#### [`acpl-lscache.admin.drop_qs_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.drop_qs_help%22)

> Use this feature to drop specific query strings, like &lt;code&gt;fbclid&lt;/code&gt; or &lt;code&gt;utm\*&lt;/code&gt;, when caching. This prevents redundant caching of pages with "junk" query strings such as UTM codes, which are used for tracking but don't affect page content. This requires LSWS v5.2.3 or newer. List the query strings to drop, one per line. &lt;a&gt;Learn more about dropping query strings&lt;/a&gt;.&lt;br&gt;&lt;/br&gt;
> ⚠️ This setting will modify the .htaccess file.
>

```diff
+Använd den här funktionen för att exkludera specifika frågesträngar, som <code>fbclid</code> eller <code>utm*</code>, vid cachning. Detta förhindrar redundant cachning av sidor med "skräp"-frågesträngar – exempelvis UTM-koder – som används för spårning men inte påverkar sidans innehåll. Funktionen kräver LSWS v5.2.3 eller senare. Ange de frågesträngar som ska exkluderas, en per rad. <a>Läs mer om att exkludera frågesträngar</a>.<br></br>
+⚠️ Denna inställning kommer att ändra filen .htaccess.
+
```

#### [`acpl-lscache.admin.drop_qs_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.drop_qs_label%22)

> Drop Query Strings

```diff
+Ta bort frågesträngar
```

#### [`acpl-lscache.admin.permissions.purge`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.permissions.purge%22)

> =&gt; acpl-lscache.ref.purge\_cache

```diff
+=> acpl-lscache.ref.purge_cache
```

#### [`acpl-lscache.admin.public_cache_ttl_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.public_cache_ttl_help%22)

> Define how long, in seconds, public pages should be cached. The default value is 604800 seconds (one week).

```diff
+Ange hur länge (i sekunder) publika sidor ska cachelagras. Standardvärdet är 604800 sekunder (en vecka).
```

#### [`acpl-lscache.admin.public_cache_ttl_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.public_cache_ttl_label%22)

> Default Public Cache TTL

```diff
+Standard-TTL för publik cache
```

#### [`acpl-lscache.admin.purge_all`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.purge_all%22)

> =&gt; acpl-lscache.ref.purge\_cache

```diff
+=> acpl-lscache.ref.purge_cache
```

#### [`acpl-lscache.admin.purge_on_discussion_update_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_help%22)

> Enter the URLs or cache Tags you want to purge when a discussion is updated, one per line. URL should start with &lt;code&gt;/&lt;/code&gt;, e.g. &lt;code&gt;/rankings&lt;/code&gt;, and cache Tag should start with &lt;code&gt;tag=&lt;/code&gt;, e.g. &lt;code&gt;tag=rankings&lt;/code&gt;. For multiple routes, adding a rule in .htaccess with a regular expression that tags routes and entering only this tag here is faster. &lt;a&gt;Learn more&lt;/a&gt;. By default, the cache for the homepage and updated discussions is purged.

```diff
+Ange de webbadresser eller cache-taggar som ska rensas när en diskussion uppdateras, en per rad. Webbadresser ska börja med <code>/</code> (t.ex. <code>/rankings</code>) och cache-taggar ska börja med <code>tag=</code> (t.ex. <code>tag=rankings</code>). Om det rör sig om flera sökvägar är det snabbare att lägga till en regel i .htaccess med ett reguljärt uttryck som taggar sökvägarna, och sedan bara ange denna tagg här. <a>Läs mer</a>. Som standard rensas cachen för startsidan och uppdaterade diskussioner.
```

#### [`acpl-lscache.admin.purge_on_discussion_update_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_label%22)

> Purge URLs or cache Tags on Discussion Update

```diff
+Rensa webbadresser eller cache-taggar vid uppdatering av diskussion
```

#### [`acpl-lscache.admin.serve_stale_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.serve_stale_help%22)

> If enabled, an outdated version of a cached page will be served to visitors until a fresh cache copy is generated. This reduces server load. If disabled, the page will be dynamically generated during the cache update, which may increase wait times. By design, this option can serve out-of-date content. Please do not enable this if you find that unacceptable.

```diff
+Om funktionen är aktiverad visas en föråldrad version av en cachad sida för besökare fram till dess att en ny kopia har skapats i cachen. Detta minskar serverbelastningen. Om funktionen är inaktiverad genereras sidan dynamiskt under cacheuppdateringen, vilket kan leda till längre väntetider. Det ligger i funktionens natur att kunna visa inaktuellt innehåll; aktivera den därför inte om du anser att detta är oacceptabelt.
```

#### [`acpl-lscache.admin.serve_stale_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.serve_stale_label%22)

> Serve Stale Content

```diff
+Visa föråldrat innehåll
```

#### [`acpl-lscache.admin.status_codes_cache_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.status_codes_cache_help%22)

> Specify an HTTP status code and the number of seconds to cache that page, separated by a space. One per line.

```diff
+Ange en HTTP-statuskod och antalet sekunder som sidan ska cachelagras, separerade med ett mellanslag. En per rad.
```

#### [`acpl-lscache.admin.status_codes_cache_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.status_codes_cache_label%22)

> Default HTTP Status Code Page TTL

```diff
+Standard-TTL för HTTP-statuskodssida
```

#### [`acpl-lscache.admin.test_failed_alert`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.admin.test_failed_alert%22)

> It looks like your server does not support LSCache. Check your server configuration. Detected server: &lt;b&gt;{server}&lt;/b&gt;, detected LiteSpeed type: &lt;b&gt;{type}&lt;/b&gt;.

```diff
+Det verkar som att din server inte stöder LSCache. Kontrollera serverkonfigurationen. Identifierad server: <b>{server}</b>, identifierad LiteSpeed-typ: <b>{type}</b>.
```

#### [`acpl-lscache.forum.purge.discussion`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.forum.purge.discussion%22)

> =&gt; acpl-lscache.ref.purge\_cache

```diff
+=> acpl-lscache.ref.purge_cache
```

#### [`acpl-lscache.lib.purge_all_success`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.lib.purge_all_success%22)

> Notified LiteSpeed Server to purge all LSCache entries.

```diff
+Meddelade LiteSpeed-servern att rensa alla LSCache-poster.
```

#### [`acpl-lscache.lib.purge_success`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.lib.purge_success%22)

> Notified LiteSpeed Server to purge LSCache entries.

```diff
+Meddelade LiteSpeed-servern att rensa LSCache-poster.
```

#### [`acpl-lscache.ref.purge_cache`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/sv/?q=context%3A%3D%22acpl-lscache.ref.purge_cache%22)

> Purge LSCache

```diff
+Rensa LSCache
```


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+Senaste nytt och aviseringar hämtade från Flarums officiella community på discuss.flarum.org.
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# kommentar} other {# kommentarer}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Senaste nytt och aviseringar från Flarum-teamet.
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+Inga aviseringar hittades.
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+Dölj aviseringar
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+Det gick inte att läsa in aviseringarna. Försök igen senare.
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+Läs mer
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+Uppdatera aviseringar
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+Försök igen
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+Visa aviseringar
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+Aviseringar
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+Visa alla på discuss.flarum.org
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Skicka e-post till administratörer när ett nyligen övergivet tillägg upptäcks under den veckovisa kontrollen
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+Det gick inte att hämta listan över övergivna tillägg. Försök igen senare.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Listan över övergivna tillägg har uppdaterats. {count} matchande installerade tillägg hittades.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Systeminformation
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Kopiera till urklipp
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+Det gick inte att kopiera till urklipp
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Systeminformation kopierad till urklipp
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Systeminformation
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Detta tillägg underhålls inte längre av sin upphovsman och kommer kanske inte att få några uppdateringar.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Detta tillägg har ersatts av {replacement}. Överväg att migrera till ersättningspaketet.
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+Utfasad
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
+Ersatt
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Forum-widgets
```

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
+Ta bort scope för {scope}
```

#### [`core.admin.permissions_controls.allow_never_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.permissions_controls.allow_never_button%22)

> =&gt; core.ref.never

```diff
+=> core.ref.never
```

#### [`core.admin.users.grid.columns.user_actions.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.users.grid.columns.user_actions.title%22)

> Actions

```diff
+Åtgärder
```

#### [`core.admin.users.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.admin.users.search_placeholder%22)

> =&gt; core.ref.search\_users

```diff
+=> core.ref.search_users
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Åtgärd krävs: övergivna tillägg har upptäckts
```

#### [`core.forum.security.global_logout.log_out_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.global_logout.log_out_button%22)

> =&gt; core.ref.log\_out

```diff
+=> core.ref.log_out
```

#### [`core.forum.security.never`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.never%22)

> =&gt; core.ref.never

```diff
+=> core.ref.never
```

#### [`core.forum.security.new_access_token_button`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.new_access_token_button%22)

> =&gt; core.ref.new\_token

```diff
+=> core.ref.new_token
```

#### [`core.forum.security.new_access_token_modal.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.new_access_token_modal.title%22)

> =&gt; core.ref.new\_token

```diff
+=> core.ref.new_token
```

#### [`core.forum.security.revoke_access_token_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.revoke_access_token_confirmation%22)

> =&gt; core.ref.generic\_confirmation\_message

```diff
+=> core.ref.generic_confirmation_message
```

#### [`core.forum.security.terminate_all_other_sessions_confirmation`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.terminate_all_other_sessions_confirmation%22)

> =&gt; core.ref.generic\_confirmation\_message

```diff
+=> core.ref.generic_confirmation_message
```

#### [`core.forum.security.title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.title%22)

> =&gt; core.ref.security

```diff
+=> core.ref.security
```

#### [`core.forum.security.token_item_title`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.token_item_title%22)

> {title} - {token}

```diff
+{title} - {token}
```

#### [`core.forum.security.token_title_placeholder`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.security.token_title_placeholder%22)

> /

```diff
+/
```

#### [`core.forum.user.security_link`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.forum.user.security_link%22)

> =&gt; core.ref.security

```diff
+=> core.ref.security
```

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+Din anslutning har återställts.
```

#### [`core.lib.data_segment.label`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.data_segment.label%22)

> {label}:

```diff
+{label}:
```

#### [`core.lib.datetime_formats.humanTimeLong`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.datetime_formats.humanTimeLong%22)

> ll

```diff
+ll
```

#### [`core.lib.datetime_formats.humanTimeShort`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.datetime_formats.humanTimeShort%22)

> D MMM

```diff
+D MMM
```

#### [`core.lib.datetime_formats.scrubber`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.datetime_formats.scrubber%22)

> MMMM YYYY

```diff
+MMMM YYYY
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+Det verkar vara något fel på din anslutning. Kontrollera nätverket och försök igen.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+Du verkar vara offline. Kontrollera din anslutning och försök igen.
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/sv/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+Den här sidan stöder inte begärandemetoden.
```


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+Granska
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+Konfigurera
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+Konfigurera vad användare med begränsade åtkomstbehörigheter kan se
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+Kräver tillägget {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+Inställningar för begränsad åtkomst
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+Visa granskningslogg
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+Visa begränsad granskningslogg
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+Visa IP-adress
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+Granskningslogg (användare som aktör)
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+Granskningslogg
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+Granskningslogg
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+Granskningslogg (kontoredigeringar)
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+Granskningslogg för aktör
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+Granskningslogg
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+Granskningslogg för diskussioner
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+Granskningslogg för användare
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+Raderade {deleted_count} poster från granskningsloggarna
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+Rensade cachen manuellt
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+Åtkomsttoken
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+API-nyckel
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+Kommandorad
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+Webbsession
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+Okänd klient
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+Visa loggar för samma åtgärd
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+Visa loggar för denna aktör
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+Visa loggar för denna klienttyp
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+Visa loggar som rör samma diskussion
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+Visa loggar för denna IP-adress
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+Visa loggar som rör samma användare
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+Dölj rådatalogg
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+Visa rådatalogg
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+Diskussion #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+Grupp #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+Inlägg #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+Tag #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+Användare #{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+Startade diskussionen {discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+Raderade diskussion {discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+Dolde diskussion {discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+Bytte namn på diskussionen från {old_title} till {new_title}
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+Återställd diskussion {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+Inga resultat
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+Inaktiverade tillägg {package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+Aktiverade tillägg {package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+Avinstallerade tillägg {package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+Tillämpa
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+Rensa filter
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+Filtrera loggar
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+Typen av åtgärd, t.ex. action:post.created.
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+Vem utförde åtgärden. Använd actor:guest för systemåtgärder eller åtgärder utförda av oautentiserade användare.
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+Hur begäran gjordes.
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+Åtgärder som påverkar en specifik diskussion, baserat på ID.
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+IP-adressen bakom åtgärden.
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+Användaren som påverkades av åtgärden, efter användarnamn.
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+Filter:
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+Kommentar
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+Inlägg
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+Kombinera värden med kommatecken för att matcha något av dem, t.ex. action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+Inled ett filter med ett minustecken för att exkludera träffar, t.ex. -client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+Sökhjälp
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+Ladda mer
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+(ingen orsak)
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+(inget värde)
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+Ändrade behörigheten {permission} från {old_groups} till {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+Skapade ett {post} i {discussion}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+Tog bort {postuser}s {post} i {discussion}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+Dolde {postuser}s {post} i {discussion}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+Återställde {postuser}s {post} i {discussion}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+Reviderade {postuser}s {post} i {discussion}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+Uppdatera
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+Redigerade inställning {key}
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+Redigerade inställningen {key} från {old_value} till {new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+Aktiverade {username}s konto manuellt
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+Aktiverade {username}s konto via bekräftelselänk
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+Ändrade {username}s avatar
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+Tog bort {username}s avatar
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+Skapade {username}s konto
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+Raderade {username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+Begärde att ändra {username}s e-postadress till {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+Ändrade {username}s e-postadress från {old_email} till {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+Ändrade {username}s grupper från {old_groups} till {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+Loggade in på kontot {username}
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+Loggade in på kontot {username} med {provider}
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+Loggade ut från kontot {username}
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+Begärde att ändra {username}s lösenord
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+Ändrade {username}s lösenord
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+Begärde lösenordsåterställning för {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+Begärde lösenordsåterställning för {email} (inget matchande konto)
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+Anslöt leverantören {provider} till kontot {username}
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+Ändrade {username}s användarnamn från {old_username} till {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/sv/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `flarum-bbcode` (missing)

#### [`flarum-bbcode.forum.quote.wrote`](https://weblate.rob006.net/translate/flarum2/flarum-bbcode/sv/?q=context%3A%3D%22flarum-bbcode.forum.quote.wrote%22)

> wrote

```diff
+skrev
```


### `flarum-markdown` (missing)

#### [`flarum-markdown.lib.composer.bold_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.bold_tooltip%22)

> Add bold text

```diff
+Lägg till fetstil
```

#### [`flarum-markdown.lib.composer.code_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.code_tooltip%22)

> Insert code

```diff
+Infoga kod
```

#### [`flarum-markdown.lib.composer.header_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.header_tooltip%22)

> Add header text

```diff
+Lägg till rubriktext
```

#### [`flarum-markdown.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.image_tooltip%22)

> Add an image

```diff
+Lägg till en bild
```

#### [`flarum-markdown.lib.composer.italic_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.italic_tooltip%22)

> Add italic text

```diff
+Lägg till kursiv text
```

#### [`flarum-markdown.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.link_tooltip%22)

> Add a link

```diff
+Lägg till en länk
```

#### [`flarum-markdown.lib.composer.ordered_list_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.ordered_list_tooltip%22)

> Add a numbered list

```diff
+Lägg till en numrerad lista
```

#### [`flarum-markdown.lib.composer.quote_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.quote_tooltip%22)

> Insert a quote

```diff
+Infoga ett citat
```

#### [`flarum-markdown.lib.composer.spoiler_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.spoiler_tooltip%22)

> Insert a spoiler

```diff
+Infoga en spoiler
```

#### [`flarum-markdown.lib.composer.strikethrough_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.strikethrough_tooltip%22)

> Add strikethrough text

```diff
+Lägg till överstruken text
```

#### [`flarum-markdown.lib.composer.unordered_list_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/sv/?q=context%3A%3D%22flarum-markdown.lib.composer.unordered_list_tooltip%22)

> Add a bulleted list

```diff
+Lägg till en punktlista
```


### `flarum-mentions` (missing)

#### [`flarum-mentions.admin.permissions.mention_groups_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.admin.permissions.mention_groups_label%22)

> Mention groups

```diff
+Nämn grupper
```

#### [`flarum-mentions.admin.settings.allow_username_format_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_label%22)

> Allow username mention format (@Username)

```diff
+Tillåt format för omnämnande av användarnamn (@Användarnamn)
```

#### [`flarum-mentions.admin.settings.allow_username_format_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_text%22)

> The current format for user mentions is @"Display Name"#ID.
> This setting allows using the old format of @Username, however it will still be converted to the new format upon saving.
>

```diff
+Det nuvarande formatet för omnämnanden av användare är @"Visningsnamn"#ID.
+Denna inställning gör det möjligt att använda det gamla formatet @Användarnamn, men det kommer ändå att konverteras till det nya formatet vid sparande.
+
```

#### [`flarum-mentions.email.group_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.subject%22)

> {mentioner\_display\_name} mentioned a group you're a member of in {title}

```diff
+{mentioner_display_name} nämnde en grupp du är medlem i i {title}
```

#### [`flarum-mentions.forum.group_mention.deleted_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.group_mention.deleted_text%22)

> \[unknown group\]

```diff
+[okänd grupp]
```

#### [`flarum-mentions.forum.mentioned_by.load_more_button`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.mentioned_by.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
+=> core.ref.load_more
```

#### [`flarum-mentions.forum.mentioned_by.title`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.mentioned_by.title%22)

> Replies to this post

```diff
+Svar på detta inlägg
```

#### [`flarum-mentions.forum.notifications.group_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.notifications.group_mentioned_text%22)

> {username} mentioned a group you're a member of

```diff
+{username} nämnde en grupp som du är medlem i
```

#### [`flarum-mentions.forum.post.mentioned_by_more_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_more_text%22)

> {count} more replies.

```diff
+{count} fler inlägg.
```

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
+{users} svarade på detta.
```

#### [`flarum-mentions.forum.post.quote_button`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.post.quote_button%22)

> Quote

```diff
+Citera
```

#### [`flarum-mentions.forum.post_mention.deleted_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.post_mention.deleted_text%22)

> \[unknown\]

```diff
+[okänt]
```

#### [`flarum-mentions.forum.settings.notify_group_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/sv/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_group_mentioned_label%22)

> Someone mentions a group I'm a member of in a post

```diff
+Någon nämner en grupp jag är medlem i i ett inlägg
```


### `flarum-nicknames` (missing)

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
+Detta döljer inmatningsfältet för `användarnamn` vid registrering och använder ett slumpvalt nummer istället. Det gör även fältet `smeknamn` obligatoriskt. Detta träder endast i kraft om alternativet för att tillåta smeknamn vid registrering är aktiverat.
```

#### [`flarum-nicknames.admin.settings.random_username_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_label%22)

> Randomize Usernames

```diff
+Slumpa användarnamn
```

#### [`flarum-nicknames.admin.settings.set_on_registration_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.admin.settings.set_on_registration_label%22)

> Allow setting nicknames on registration

```diff
+Tillåt inställning av smeknamn vid registrering
```

#### [`flarum-nicknames.forum.sign_up.nickname_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.forum.sign_up.nickname_placeholder%22)

> =&gt; flarum-nicknames.ref.nickname

```diff
+=> flarum-nicknames.ref.nickname
```

#### [`flarum-nicknames.ref.nickname`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/sv/?q=context%3A%3D%22flarum-nicknames.ref.nickname%22)

> Nickname

```diff
+Smeknamn
```


### `flarum-statistics` (missing)

#### [`flarum-statistics.admin.date_selection_modal.description`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.description%22)

> Pick a custom date range to display statistics for. Loading data may take
> multiple minutes on forums with a lot of activity.
>

```diff
+Välj ett anpassat datumintervall för att visa statistik. 
+Det kan ta flera minuter att läsa in data för forum med hög aktivitet.
+
```

#### [`flarum-statistics.admin.date_selection_modal.end_date`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.end_date%22)

> End date (inclusive)

```diff
+Slutdatum (inklusive)
```

#### [`flarum-statistics.admin.date_selection_modal.errors.end_before_start`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.errors.end_before_start%22)

> The end date must be after the start date.

```diff
+Slutdatumet måste vara efter startdatumet.
```

#### [`flarum-statistics.admin.date_selection_modal.start_date`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.start_date%22)

> Start date (inclusive)

```diff
+Startdatum (inklusive)
```

#### [`flarum-statistics.admin.date_selection_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.submit_button%22)

> Confirm date range

```diff
+Bekräfta datumintervall
```

#### [`flarum-statistics.admin.date_selection_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.title%22)

> Choose custom date range

```diff
+Välj eget datumintervall
```

#### [`flarum-statistics.admin.statistics.current_period`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.current_period%22)

> Current period

```diff
+Aktuell period
```

#### [`flarum-statistics.admin.statistics.custom_label`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.custom_label%22)

> Choose custom range...

```diff
+Välj eget intervall...
```

#### [`flarum-statistics.admin.statistics.custom_label_specified`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.custom_label_specified%22)

> {fromDate} to {toDate}

```diff
+{fromDate} till {toDate}
```

#### [`flarum-statistics.admin.statistics.export_chart_button`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.export_chart_button%22)

> Export chart to SVG

```diff
+Exportera diagram till SVG
```

#### [`flarum-statistics.admin.statistics.loading`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.loading%22)

> =&gt; core.ref.loading

```diff
+=> core.ref.loading
```

#### [`flarum-statistics.admin.statistics.mini_heading`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.mini_heading%22)

> Forum statistics

```diff
+Forumstatistik
```

#### [`flarum-statistics.admin.statistics.no_data`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.no_data%22)

> There is no data available for this date range.

```diff
+Det finns ingen data tillgänglig för detta datumintervall.
```

#### [`flarum-statistics.admin.statistics.previous_28_days_label`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.previous_28_days_label%22)

> Previous 28 days

```diff
+Föregående 28 dagarna
```

#### [`flarum-statistics.admin.statistics.previous_7_days_label`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.previous_7_days_label%22)

> Previous 7 days

```diff
+Föregående 7 dagarna
```

#### [`flarum-statistics.admin.statistics.previous_period`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.previous_period%22)

> Previous period

```diff
+Föregående period
```

#### [`flarum-statistics.admin.statistics.view_full`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/sv/?q=context%3A%3D%22flarum-statistics.admin.statistics.view_full%22)

> View more statistics

```diff
+Visa mer statistik
```


### `flarum-sticky` (missing)

#### [`flarum-sticky.admin.settings.pin_sticky_on_all_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/sv/?q=context%3A%3D%22flarum-sticky.admin.settings.pin_sticky_on_all_discussions_label%22)

> Pin stickied discussions on the All Discussions page

```diff
+Nåla klistrade diskussioner på sidan Alla diskussioner
```


### `flarum-subscriptions` (missing)

#### [`flarum-subscriptions.email.new_post.subject`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.email.new_post.subject%22)

> \[New Post\] {title}

```diff
+[Nytt inlägg] {title}
```

#### [`flarum-subscriptions.forum.following.meta_title_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.following.meta_title_text%22)

> =&gt; flarum-subscriptions.ref.following

```diff
+=> flarum-subscriptions.ref.following
```

#### [`flarum-subscriptions.forum.settings.notify_for_all_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/sv/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_for_all_posts_label%22)

> Notify about every new post instead of only the last in a discussion

```diff
+Avisera om varje nytt inlägg istället för bara det senaste i en diskussion
```


### `flarum-suspend` (missing)

#### [`flarum-suspend.email.no_reason_given`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.email.no_reason_given%22)

> No reason was given for this suspension.

```diff
+Ingen anledning angavs till denna avstängning.
```

#### [`flarum-suspend.email.suspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.email.suspended.subject%22)

> Your account has been suspended

```diff
+Ditt konto har stängts av
```

#### [`flarum-suspend.email.unsuspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.email.unsuspended.subject%22)

> Your account has been unsuspended

```diff
+Ditt konto har återaktiverats
```

#### [`flarum-suspend.forum.notifications.user_suspended_indefinite_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_indefinite_text%22)

> You have been suspended indefinitely

```diff
+Du har stängts av på obestämd tid
```

#### [`flarum-suspend.forum.suspend_user.display_message`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.display_message%22)

> Display message for user

```diff
+Visa meddelande för användaren
```

#### [`flarum-suspend.forum.suspend_user.placeholder_optional`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.placeholder_optional%22)

> Optional

```diff
+Valfri
```

#### [`flarum-suspend.forum.suspend_user.reason`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.reason%22)

> Reason for suspension

```diff
+Orsak till avstängning
```

#### [`flarum-suspend.forum.suspension_info.dismiss_button`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.dismiss_button%22)

> Dismiss

```diff
+Avfärda
```

#### [`flarum-suspend.forum.suspension_info.indefinite`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.indefinite%22)

> This is an indefinite suspension

```diff
+Detta är en avstängning på obestämd tid
```

#### [`flarum-suspend.forum.suspension_info.limited`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.limited%22)

> This suspension will be in force until {date}

```diff
+Denna avstängning gäller till och med {datum}
```

#### [`flarum-suspend.forum.suspension_info.title`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/sv/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.title%22)

> This account is suspended

```diff
+Detta konto är avstängt
```


### `flarum-tags` (missing)

#### [`flarum-tags.admin.settings.button_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.settings.button_text%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
+=> flarum-tags.ref.choose_tags
```

#### [`flarum-tags.admin.tags.create_primary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tags.create_primary_tag_button%22)

> Create Primary Tag

```diff
+Skapa primär tagg
```

#### [`flarum-tags.admin.tags.create_secondary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tags.create_secondary_tag_button%22)

> Create Secondary Tag

```diff
+Skapa sekundär tagg
```

#### [`flarum-tags.admin.tags.edit_tag_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tags.edit_tag_label%22)

> Edit Tag {tag}

```diff
+Redigera tagg {tag}
```

#### [`flarum-tags.admin.tags.settings_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.admin.tags.settings_heading%22)

> Settings

```diff
+Inställningar
```

#### [`flarum-tags.lib.tag_selection_modal.bypass_requirements`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.bypass_requirements%22)

> Bypass tag requirements

```diff
+Kringgå krav på taggar
```

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
+{count, plural, one {Välj en primär tagg} other {Välj # primära taggar}}
```

#### [`flarum-tags.lib.tag_selection_modal.choose_secondary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_secondary_placeholder%22)

> =&gt; flarum-tags.ref.choose\_tags\_placeholder

```diff
+=> flarum-tags.ref.choose_tags_placeholder
```

#### [`flarum-tags.lib.tag_selection_modal.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_tags_placeholder%22)

> =&gt; flarum-tags.ref.choose\_tags\_placeholder

```diff
+=> flarum-tags.ref.choose_tags_placeholder
```

#### [`flarum-tags.lib.tag_selection_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.submit_button%22)

> =&gt; core.ref.okay

```diff
+=> core.ref.okay
```

#### [`flarum-tags.lib.tag_selection_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.title%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
+=> flarum-tags.ref.choose_tags
```

#### [`flarum-tags.ref.choose_tags`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.ref.choose_tags%22)

> Choose Tags

```diff
+Välj taggar
```

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/sv/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
+{count, plural, one {Välj 1 tagg till} other {Välj # taggar till}}
```

<!-- {% endraw %} -->
