# German (formal) inherited translations differences

Translations for German (formal) (`de@formal`) are inherited from German informal variant, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **234** are translated differently and **0** are
translated only in `de@formal`. Altogether they cover **44** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `acpl-my-tags` | [3](#acpl-my-tags) |
| `blomstra-fontawesome` | [1](#blomstra-fontawesome) |
| `blomstra-oauth-apple` | [1](#blomstra-oauth-apple) |
| `clarkwinkelmann-emojionearea` | [2](#clarkwinkelmann-emojionearea) |
| `core` | [76](#core) |
| `datlechin-bbcode-hide-content` | [3](#datlechin-bbcode-hide-content) |
| `datlechin-birthdays` | [5](#datlechin-birthdays) |
| `datlechin-copy-links` | [1](#datlechin-copy-links) |
| `datlechin-link-preview` | [15](#datlechin-link-preview) |
| `davwheat-share` | [1](#davwheat-share) |
| `flarum-approval` | [2](#flarum-approval) |
| `flarum-emoji` | [1](#flarum-emoji) |
| `flarum-extension-manager` | [14](#flarum-extension-manager) |
| `flarum-flags` | [5](#flarum-flags) |
| `flarum-gdpr` | [11](#flarum-gdpr) |
| `flarum-likes` | [4](#flarum-likes) |
| `flarum-lock` | [1](#flarum-lock) |
| `flarum-mentions` | [14](#flarum-mentions) |
| `flarum-nicknames` | [2](#flarum-nicknames) |
| `flarum-pusher` | [3](#flarum-pusher) |
| `flarum-statistics` | [1](#flarum-statistics) |
| `flarum-subscriptions` | [4](#flarum-subscriptions) |
| `flarum-suspend` | [7](#flarum-suspend) |
| `flarum-tags` | [5](#flarum-tags) |
| `fof-byobu` | [1](#fof-byobu) |
| `fof-cookie-consent` | [10](#fof-cookie-consent) |
| `fof-discussion-templates` | [3](#fof-discussion-templates) |
| `fof-impersonate` | [1](#fof-impersonate) |
| `fof-links` | [2](#fof-links) |
| `fof-move-posts` | [1](#fof-move-posts) |
| `fof-oauth` | [4](#fof-oauth) |
| `fof-profile-image-crop` | [2](#fof-profile-image-crop) |
| `fof-username-request` | [8](#fof-username-request) |
| `forumaker-magicbb` | [1](#forumaker-magicbb) |
| `ianm-follow-users` | [1](#ianm-follow-users) |
| `ianm-level-ranks` | [1](#ianm-level-ranks) |
| `justoverclock-reputation-score` | [1](#justoverclock-reputation-score) |
| `migratetoflarum-canonical` | [7](#migratetoflarum-canonical) |
| `nearata-embed-video` | [1](#nearata-embed-video) |
| `nearata-maintenance-mode` | [2](#nearata-maintenance-mode) |
| `resofire-digest-mail` | [1](#resofire-digest-mail) |
| `sycho-force-password-reset` | [3](#sycho-force-password-reset) |
| `tryhackx-homepage-blocks` | [1](#tryhackx-homepage-blocks) |
| `yippy-auth-ldap` | [1](#yippy-auth-ldap) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from German informal variant (`-` line) and the translation from `de@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-my-tags`

#### [`acpl-my-tags.admin.settings.enable-placeholder`](https://weblate.rob006.net/translate/flarum/acpl-my-tags/de@formal/?q=context%3A%3D%22acpl-my-tags.admin.settings.enable-placeholder%22)

> Enable placeholder text when the user is not following any tags

```diff
-Platzhaltertext aktivieren, wenn der Benutzer keinen Tags folgt
+Platzhaltertext aktivieren, wenn der Benutzer keinen Themen folgt
```

Platzhaltertext aktivieren, wenn der Benutzer keinen <del>Tags</del><ins>Themen</ins> folgt

#### [`acpl-my-tags.forum.index.my_tags`](https://weblate.rob006.net/translate/flarum/acpl-my-tags/de@formal/?q=context%3A%3D%22acpl-my-tags.forum.index.my_tags%22)

> My tags

```diff
-Meine Tags
+Ihre Themen
```

#### [`acpl-my-tags.forum.index.placeholder`](https://weblate.rob006.net/translate/flarum/acpl-my-tags/de@formal/?q=context%3A%3D%22acpl-my-tags.forum.index.placeholder%22)

> You are not following any tags yet. &lt;a&gt;See tags&lt;/a&gt;

```diff
-Du folgst noch keinen Tags. <a>Siehe Tags</a>
+Sie haben noch keine Themen. <a>Siehe Themen </a>
```

<del>Du</del><ins>Sie</ins> <del>folgst</del><ins>haben</ins> noch <del>keinen</del><ins>keine</ins> <del>Tags.</del><ins>Themen.</ins> &lt;a&gt;Siehe <del>Tags&lt;/a&gt;</del><ins>Themen &lt;/a&gt;</ins>


### `blomstra-fontawesome`

#### [`blomstra-fontawesome.admin.settings.test.fa6_free`](https://weblate.rob006.net/translate/flarum/blomstra-fontawesome/de@formal/?q=context%3A%3D%22blomstra-fontawesome.admin.settings.test.fa6_free%22)

> FontAwesome 6 Free

```diff
-FontAwesome 6 Free
+FontAwesome 6 Kostenlos
```

FontAwesome 6 <del>Free</del><ins>Kostenlos</ins>


### `blomstra-oauth-apple`

#### [`fof-oauth.admin.settings.providers.apple.keyfile_upload_help`](https://weblate.rob006.net/translate/flarum/blomstra-oauth-apple/de@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.apple.keyfile_upload_help%22)

> Create a &lt;a&gt;keyfile&lt;/a&gt; and upload it here

```diff
-Erstelle ein <a>keyfile</a> und lade es hier hoch
+Erstellen Sie ein <a>keyfile</a> und laden Sie es hier hoch
```

<del>Erstelle</del><ins>Erstellen Sie</ins> ein &lt;a&gt;keyfile&lt;/a&gt; und <del>lade</del><ins>laden Sie</ins> es hier hoch


### `clarkwinkelmann-emojionearea`

#### [`clarkwinkelmann-emojionearea.admin.settings.enableTones`](https://weblate.rob006.net/translate/flarum/clarkwinkelmann-emojionearea/de@formal/?q=context%3A%3D%22clarkwinkelmann-emojionearea.admin.settings.enableTones%22)

> Enable tones

```diff
-Hauttöne aktivieren
+Farbtöne aktivieren
```

<del>Hauttöne</del><ins>Farbtöne</ins> aktivieren

#### [`clarkwinkelmann-emojionearea.admin.settings.searchPosition`](https://weblate.rob006.net/translate/flarum/clarkwinkelmann-emojionearea/de@formal/?q=context%3A%3D%22clarkwinkelmann-emojionearea.admin.settings.searchPosition%22)

> Move search and tones to the bottom

```diff
-Suche und Hauttöne nach unten verschieben
+Suche und Farbtöne nach unten verschieben
```

Suche und <del>Hauttöne</del><ins>Farbtöne</ins> nach unten verschieben


### `core`

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
-Die Ankündigungen konnten nicht geladen werden. Bitte versuche es später erneut.
+Die Ankündigungen konnten nicht geladen werden. Bitte versuchen Sie es später erneut.
```

Die Ankündigungen konnten nicht geladen werden. Bitte <del>versuche</del><ins>versuchen Sie</ins> es später erneut.

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Wähle zwei Farben, um den Grundton des Forums zu ändern. Die erste Farbe dient für die Akzente, die zweite für die Hintergrundelemente.
+Wählen Sie zwei Farben, um den Grundton des Forums zu ändern. Die erste Farbe dient für die Akzente, die zweite für die Hintergrundelemente.
```

<del>Wähle</del><ins>Wählen Sie</ins> zwei Farben, um den Grundton des Forums zu ändern. Die erste Farbe dient für die Akzente, die zweite für die Hintergrundelemente.

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Ändere die Farbe, das Logo und weitere Variablen des Forums.
+Verändern Sie die Farbe, das Logo und weitere Variablen des Forums.
```

<del>Ändere</del><ins>Verändern Sie</ins> die Farbe, das Logo und weitere Variablen des Forums.

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Gib eine Farbe im Hexadezimalformat ein.
+Geben Sie eine Farbe im Hexadezimalformat ein.
```

<del>Gib</del><ins>Geben Sie</ins> eine Farbe im Hexadezimalformat ein.

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Lade ein Bild hoch, welches als Favicon für das Forum verwendet wird.
+Laden Sie ein Bild hoch, welches als Favicon für das Forum verwendet wird.
```

<del>Lade</del><ins>Laden Sie</ins> ein Bild hoch, welches als Favicon für das Forum verwendet wird.

#### [`core.admin.appearance.logo_heading`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.appearance.logo_heading%22)

> Logo

```diff
-Logo
+Firmenzeichen
```

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Lade ein Logo hoch, welches anstelle des Forum-Titels angezeigt wird.
+Laden Sie ein Logo hoch, welches anstelle des Forum-Titels angezeigt wird.
```

<del>Lade</del><ins>Laden Sie</ins> ein Logo hoch, welches anstelle des Forum-Titels angezeigt wird.

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
-Das Abrufen der Liste verwaister Erweiterungen ist fehlgeschlagen. Bitte versuche es später erneut.
+Das Abrufen der Liste verwaister Erweiterungen ist fehlgeschlagen. Bitte versuchen Sie es später erneut.
```

Das Abrufen der Liste verwaister Erweiterungen ist fehlgeschlagen. Bitte <del>versuche</del><ins>versuchen Sie</ins> es später erneut.

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Lege den Forentitel, die Sprache und weitere Grundeinstellungen fest.
+Legen Sie den Forentitel, die Sprache und weitere Grundeinstellungen fest.
```

<del>Lege</del><ins>Legen Sie</ins> den Forentitel, die Sprache und weitere Grundeinstellungen fest.

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Wähle den Treiber, der verwendet wird, um den Anzeigenamen der Benutzer zu bestimmen. Standardmäßig wird der Benutzername angezeigt.
+Wählen Sie den Treiber, der verwendet wird, um den Anzeigenamen der Benutzer zu bestimmen. Standardmäßig wird der Benutzername angezeigt.
```

<del>Wähle</del><ins>Wählen Sie</ins> den Treiber, der verwendet wird, um den Anzeigenamen der Benutzer zu bestimmen. Standardmäßig wird der Benutzername angezeigt.

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Wähle die Seite aus, die Benutzer beim Besuch des Forums zuerst sehen.
+Wählen Sie die Seite aus, die Benutzer beim Besuch des Forums zuerst sehen.
```

<del>Wähle</del><ins>Wählen Sie</ins> die Seite aus, die Benutzer beim Besuch des Forums zuerst sehen.

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Wähle den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.
+Wählen Sie den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.
```

<del>Wähle</del><ins>Wählen Sie</ins> den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Lege den Text fest, der auf der Seite "Alle Diskussionen" erscheint, um Besucher zu begrüßen.
+Legen Sie den Text fest, der auf der Seite "Alle Diskussionen" erscheint, um Besucher zu begrüßen.
```

<del>Lege</del><ins>Legen Sie</ins> den Text fest, der auf der Seite "Alle Diskussionen" erscheint, um Besucher zu begrüßen.

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-Dein Forum auf einen Blick.
+Ihr Forum auf einen Blick.
```

<del>Dein</del><ins>Ihr</ins> Forum auf einen Blick.

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-Es konnte nicht in das Dateisystem geschrieben werden. Überprüfe die Berechtigungen deines Dateisystems und versuche es erneut. Oder versuche es über die Kommandozeile auszuführen.
+Es konnte nicht in das Dateisystem geschrieben werden. Überprüfen Sie die Berechtigungen Ihres Dateisystems und versuchen Sie es erneut. Oder versuchen Sie es über die Kommandozeile auszuführen.
```

Es konnte nicht in das Dateisystem geschrieben werden. <del>Überprüfe</del><ins>Überprüfen Sie</ins> die Berechtigungen <del>deines</del><ins>Ihres</ins> Dateisystems und <del>versuche</del><ins>versuchen Sie</ins> es erneut. Oder <del>versuche</del><ins>versuchen Sie</ins> es über die Kommandozeile auszuführen.

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
 Sofern der <code>Debugmodus</code> aktiv ist, wird Flarum seine <code>JavaScript</code> und <code>CSS</code> Ressourcen bei jedem Seitenabruf neu generieren und könnte zudem potenziell weitere Informationen preisgeben, etwa Datenbankgeheimnisse, Umgebungsvariablen usw.

-Es wird dringend empfohlen, den <code>debug</code> in deiner <code>config.php</code> Datei in einem Produktionskontext zu deaktivieren. Konsultiere die <link>Flarum Dokumentation</link> für zusätzliche Informationen.
+Es wird dringendst empfohlen, den <code>debug</code> in Ihrer <code>config.php</code> Datei in einem Produktionskontext zu deaktivieren. Konsultieren Sie bitte die <link>Flarum Dokumentation</link> für zusätzliche Informationen.

```

Sofern der &lt;code&gt;Debugmodus&lt;/code&gt; aktiv ist, wird Flarum seine &lt;code&gt;JavaScript&lt;/code&gt; und &lt;code&gt;CSS&lt;/code&gt; Ressourcen bei jedem Seitenabruf neu generieren und könnte zudem potenziell weitere Informationen preisgeben, etwa Datenbankgeheimnisse, Umgebungsvariablen usw.<br /><br />Es wird <del>dringend</del><ins>dringendst</ins> empfohlen, den &lt;code&gt;debug&lt;/code&gt; in <del>deiner</del><ins>Ihrer</ins> &lt;code&gt;config.php&lt;/code&gt; Datei in einem Produktionskontext zu deaktivieren. <del>Konsultiere</del><ins>Konsultieren Sie bitte</ins> die &lt;link&gt;Flarum Dokumentation&lt;/link&gt; für zusätzliche Informationen.<br />

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Passe das Erscheinungsbild deines Forums mit eigenem Less/CSS-Code an, welcher zusätzlich zu Flarums <a>Standard-Design</a> angewendet wird.
+Passen Sie das Erscheinungsbild Ihres Forums mithilfe eigenen Less/CSS-Code an, welcher zusätzlich zu Flarums <a>Standard-Design</a> angewendet wird.
```

<del>Passe</del><ins>Passen Sie</ins> das Erscheinungsbild <del>deines</del><ins>Ihres</ins> Forums <del>mit</del><ins>mithilfe</ins> <del>eigenem</del><ins>eigenen</ins> Less/CSS-Code an, welcher zusätzlich zu Flarums &lt;a&gt;Standard-Design&lt;/a&gt; angewendet wird.

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-Bist du sicher, dass du diese Gruppe löschen möchtest? Die Mitglieder der Gruppe werden nicht gelöscht.
+Sind Sie sicher, dass Sie diese Gruppe löschen möchten? Die Mitglieder der Gruppe werden nicht gelöscht.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diese Gruppe löschen <del>möchtest?</del><ins>möchten?</ins> Die Mitglieder der Gruppe werden nicht gelöscht.

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Konfiguriere den Mail-Treiber, die Parameter und die zu verwendenden Adressen für den Versand von E-Mails.
+Konfigurieren Sie den E-Mail-Treiber, die Parameter und die zu verwendenden Adressen für den Versand von E-Mails.
```

<del>Konfiguriere</del><ins>Konfigurieren Sie</ins> den <del>Mail-Treiber,</del><ins>E-Mail-Treiber,</ins> die Parameter und die zu verwendenden Adressen für den Versand von E-Mails.

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Flarum sendet derzeit keine E-Mails. Bitte überprüfe die Korrektheit deiner E-Mail-Konfiguration.
+Flarum sendet derzeit keine E-Mails. Bitte überprüfen Sie die Korrektheit ihrer E-Mail-Konfiguration.
```

Flarum sendet derzeit keine E-Mails. Bitte <del>überprüfe</del><ins>überprüfen Sie</ins> die Korrektheit <del>deiner</del><ins>ihrer</ins> E-Mail-Konfiguration.

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-Versende eine E-Mail mit der gegebenen Konfiguration an deine Adresse, {email}.
+Versenden Sie eine E-Mail mit der gegebenen Konfiguration an Ihre Adresse, {email}.
```

<del>Versende</del><ins>Versenden Sie</ins> eine E-Mail mit der gegebenen Konfiguration an <del>deine</del><ins>Ihre</ins> Adresse, {email}.

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
-Diese Erweiterung wurde durch {replacement} ersetzt. Ziehe in Betracht, zum Ersatzpaket zu wechseln.
+Diese Erweiterung wurde durch {replacement} ersetzt. Erwägen Sie die Migration zum Ersatzpaket.
```

Diese Erweiterung wurde durch {replacement} ersetzt. <del>Ziehe in</del><ins>Erwägen</ins> <del>Betracht,</del><ins>Sie</ins> <del>zum</del><ins>die</ins> <del>Ersatzpaket</del><ins>Migration</ins> <del>zu</del><ins>zum</ins> <del>wechseln.</del><ins>Ersatzpaket.</ins>

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Die Bereinigung entfernt sämtliche Datenbankeinträge und Assets, die sich auf die Erweiterung beziehen. Die Erweiterung wird nicht deinstalliert; dies muss über Composer geschehen. Bist du sicher, dass du fortfahren willst?
+Die Bereinigung entfernt sämtliche Datenbankeinträge und Assets, die sich auf die Erweiterung beziehen. Die Deinstallation der Erweiterung wird nicht ausgeführt; dies muss über Composer geschehen. Sind Sie sicher, dass Sie fortfahren möchten?
```

Die Bereinigung entfernt sämtliche Datenbankeinträge und Assets, die sich auf die Erweiterung beziehen. Die <ins>Deinstallation der </ins>Erweiterung wird nicht <del>deinstalliert;</del><ins>ausgeführt;</ins> dies muss über Composer geschehen. <del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> fortfahren <del>willst?</del><ins>möchten?</ins>

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Aktiviere die Erweiterung, um Einstellungen einsehen und verändern zu können.
+Aktivieren Sie die Erweiterung, um Einstellungen einsehen und verändern zu können.
```

<del>Aktiviere</del><ins>Aktivieren Sie</ins> die Erweiterung, um Einstellungen einsehen und verändern zu können.

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Bitte warten…
+Bitte warten Sie…
```

Bitte <del>warten…</del><ins>warten Sie…</ins>

#### [`core.admin.settings.saved_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.settings.saved_message%22)

> Your changes were saved.

```diff
-Deine Änderungen wurden gespeichert.
+Ihre Änderungen wurden gespeichert.
```

<del>Deine</del><ins>Ihre</ins> Änderungen wurden gespeichert.

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-Eine paginierte Liste aller Benutzer in deinem Forum.
+Eine paginierte Liste aller Benutzer in Ihrem Forum.
```

Eine paginierte Liste aller Benutzer in <del>deinem</del><ins>Ihrem</ins> Forum.

#### [`core.email.abandoned_extensions.body`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.abandoned_extensions.body%22)

> Hi {username},
>
> The following installed extension(s) have been flagged as abandoned:
>
> {extensions}
>
> Please review these extensions and consider migrating to alternatives where available.
>

```diff
 Hallo {username},

 Die folgenden installierte(n) Erweiterung(en) wurden als verwaist markiert:

 {extensions}

-Bitte überprüfe diese Erweiterungen und erwäge den Wechsel zu Alternativen, sofern verfügbar.
+Bitte überprüfen Sie diese Erweiterungen und erwägen Sie den Wechsel zu Alternativen, sofern verfügbar.

```

Hallo {username},<br /><br />Die folgenden installierte(n) Erweiterung(en) wurden als verwaist markiert:<br /><br />{extensions}<br /><br />Bitte <del>überprüfe</del><ins>überprüfen Sie</ins> diese Erweiterungen und <del>erwäge</del><ins>erwägen Sie</ins> den Wechsel zu Alternativen, sofern verfügbar.<br />

#### [`core.email.activate_account.body`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.activate_account.body%22)

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
-Hallo {username}!
+Sehr geehrte/r {username},

-jemand (hoffentlich du!) hat sich im Forum {forum} mit dieser E-Mail-Adresse registriert.
+jemand (hoffentlich Sie!) hat sich im Forum {forum} mit dieser E-Mail-Adresse registriert.

-Wenn du es warst, folge bitte dem Link, um das Konto zu aktivieren:
+Falls Sie es waren, folgen Sie bitte dem untenstehenden Link, um Ihr Konto zu aktivieren:
 {url}

-Wenn du das nicht warst, ignoriere diese E-Mail.
+Falls Sie es nicht waren, ignorieren Sie bitte diese E-Mail.

```

<del>Hallo</del><ins>Sehr</ins> <del>{username}!</del><ins>geehrte/r {username},</ins><br /><br />jemand (hoffentlich <del>du!)</del><ins>Sie!)</ins> hat sich im Forum {forum} mit dieser E-Mail-Adresse registriert.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> es <del>warst,</del><ins>waren,</ins> <del>folge</del><ins>folgen Sie</ins> bitte dem<ins> untenstehenden</ins> Link, um <del>das</del><ins>Ihr</ins> Konto zu aktivieren:<br />{url}<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> nicht <del>warst,</del><ins>waren,</ins> <del>ignoriere</del><ins>ignorieren Sie bitte</ins> diese E-Mail.<br />

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-Aktivierung deines neuen Kontos
+Aktivierung Ihres neuen Kontos
```

Aktivierung <del>deines</del><ins>Ihres</ins> neuen Kontos

#### [`core.email.confirm_email.body`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.confirm_email.body%22)

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
-Hallo {username}!
+Sehr geehrte/r {username},

-jemand (hoffentlich du!) hat die E-Mail-Adresse im Forum {forum} geändert.
+jemand (hoffentlich Sie!) hat die E-Mail-Adresse im Forum {forum} geändert.

-Wenn du das warst, folge bitte dem Link, um die neue E-Mail-Adresse zu bestätigen:
+Falls Sie es waren, folgen Sie bitte dem untenstehenden Link, um die neue E-Mail-Adresse zu bestätigen:
 {url}

-Wenn du das nicht warst, ignoriere diese E-Mail.
+Falls Sie es nicht waren, ignorieren Sie bitte diese E-Mail.

```

<del>Hallo</del><ins>Sehr</ins> <del>{username}!</del><ins>geehrte/r {username},</ins><br /><br />jemand (hoffentlich <del>du!)</del><ins>Sie!)</ins> hat die E-Mail-Adresse im Forum {forum} geändert.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> <del>warst,</del><ins>waren,</ins> <del>folge</del><ins>folgen Sie</ins> bitte dem<ins> untenstehenden</ins> Link, um die neue E-Mail-Adresse zu bestätigen:<br />{url}<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> nicht <del>warst,</del><ins>waren,</ins> <del>ignoriere</del><ins>ignorieren Sie bitte</ins> diese E-Mail.<br />

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-Bestätigung deiner E-Mail-Adresse
+Bestätigung Ihrer E-Mail-Adresse
```

Bestätigung <del>deiner</del><ins>Ihrer</ins> E-Mail-Adresse

#### [`core.email.reset_password.body`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.reset_password.body%22)

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
-Hallo {username}!
+Sehr geehrte/r {username},

-jemand (hoffentlich du!) hat das Zurücksetzen des Passwortes im Forum {forum} beantragt.
+jemand (hoffentlich Sie!) hat das Zurücksetzen des Passwortes im Forum {forum} beantragt.

-Wenn du das warst, folge bitte dem Link, um ein neues Passwort festzulegen:
+Falls Sie es waren, folgen Sie bitte dem untenstehenden Link, um ein neues Passwort festzulegen:
 {url}

-Wenn du das nicht warst, ignoriere diese E-Mail.
+Falls Sie es nicht waren, ignorieren Sie bitte diese E-Mail.

```

<del>Hallo</del><ins>Sehr</ins> <del>{username}!</del><ins>geehrte/r {username},</ins><br /><br />jemand (hoffentlich <del>du!)</del><ins>Sie!)</ins> hat das Zurücksetzen des Passwortes im Forum {forum} beantragt.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> <del>warst,</del><ins>waren,</ins> <del>folge</del><ins>folgen Sie</ins> bitte dem<ins> untenstehenden</ins> Link, um ein neues Passwort festzulegen:<br />{url}<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> nicht <del>warst,</del><ins>waren,</ins> <del>ignoriere</del><ins>ignorieren Sie bitte</ins> diese E-Mail.<br />

#### [`core.email.reset_password.subject`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.reset_password.subject%22)

> =&gt; core.ref.reset\_your\_password

```diff
-Zurücksetzung deines Passwortes
+Zurücksetzung Ihres Passwortes
```

Zurücksetzung <del>deines</del><ins>Ihres</ins> Passwortes

#### [`core.email.send_test.body`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.email.send_test.body%22)

> Hey {username}!
>
> This is a test email to confirm that your Flarum email configuration is working properly.
>
> If this was you, this email means that your configuration works!
>
> If this was not you, please ignore this email.
>

```diff
-Hallo {username}!
+Sehr geehrte/r {username},

-Dies ist eine Test E-Mail zur Überprüfung, ob deine Flarum E-Mail-Konfiguration richtig funktioniert.
+dies ist eine Test-E-Mail zur Überprüfung, ob Ihre Flarum-E-Mail-Konfiguration korrekt funktioniert.

-Wenn du das warst, dann zeigt diese E-Mail an, dass deine Konfiguration funktioniert.
+Falls Sie es waren, dann zeigt diese E-Mail an, dass Ihre Konfiguration funktioniert.

-Wenn du das nicht warst, ignoriere diese E-Mail.
+Falls Sie es nicht waren, ignorieren Sie bitte diese E-Mail.

```

<del>Hallo</del><ins>Sehr</ins> <del>{username}!</del><ins>geehrte/r {username},</ins><br /><br /><del>Dies</del><ins>dies</ins> ist eine<del> Test</del> <del>E-Mail</del><ins>Test-E-Mail</ins> zur Überprüfung, ob<del> deine</del> <del>Flarum</del><ins>Ihre</ins> <del>E-Mail-Konfiguration</del><ins>Flarum-E-Mail-Konfiguration</ins> <del>richtig</del><ins>korrekt</ins> funktioniert.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> <del>warst,</del><ins>waren,</ins> dann zeigt diese E-Mail an, dass <del>deine</del><ins>Ihre</ins> Konfiguration funktioniert.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>das</del><ins>es</ins> nicht <del>warst,</del><ins>waren,</ins> <del>ignoriere</del><ins>ignorieren Sie bitte</ins> diese E-Mail.<br />

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-Das eingegebene Passwort ist falsch.
+Das von Ihnen eingegebene Passwort ist falsch.
```

Das <ins>von Ihnen </ins>eingegebene Passwort ist falsch.

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Klicke auf den Button, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.
+Klicken Sie auf die Schaltfläche, um einen Link zum Zurücksetzen Ihres Passwortes zu erhalten.
```

<del>Klicke</del><ins>Klicken Sie</ins> auf <del>den</del><ins>die</ins> <del>Button,</del><ins>Schaltfläche,</ins> um einen Link zum Zurücksetzen <del>deines</del><ins>Ihres</ins> Passwortes zu erhalten.

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Beitrag verfassen…
+Verfassen Sie Ihren Beitrag…
```

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Dein Beitrag wurde nicht versendet. Möchtest du ihn verwerfen?
+Ihr Beitrag wurde nicht versendet. Möchten Sie ihn verwerfen?
```

<del>Dein</del><ins>Ihr</ins> Beitrag wurde nicht versendet. <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> ihn verwerfen?

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Deine Änderungen wurden nicht übernommen. Möchtest du sie verwerfen?
+Ihre Änderungen wurden nicht übernommen. Möchten Sie sie verwerfen?
```

<del>Deine</del><ins>Ihre</ins> Änderungen wurden nicht übernommen. <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> sie verwerfen?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Deine Änderungen wurden gespeichert.
+Ihre Änderungen wurden gespeichert.
```

<del>Deine</del><ins>Ihre</ins> Änderungen wurden gespeichert.

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Deine Antwort wurde nicht versendet. Möchtest du sie verwerfen?
+Ihre Antwort wurde nicht versendet. Möchten Sie sie verwerfen?
```

<del>Deine</del><ins>Ihre</ins> Antwort wurde nicht versendet. <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> sie verwerfen?

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Deine Antwort wurde versendet.
+Ihre Antwort wurde versendet.
```

<del>Deine</del><ins>Ihre</ins> Antwort wurde versendet.

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-Du hast keine Berechtigung, auf diese Diskussion zu antworten.
+Sie haben keine Berechtigung, auf diese Diskussion zu antworten.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, auf diese Diskussion zu antworten.

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-Möchtest du die Diskussion wirklich löschen?
+Möchten Sie diese Diskussion wirklich löschen?
```

<del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> <del>die</del><ins>diese</ins> Diskussion wirklich löschen?

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Markiere ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.
+{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Markieren Sie ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.
```

{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. <del>Markiere</del><ins>Markieren Sie</ins> ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Falls die von dir eingegebene E-Mail-Adresse auf dieser Seite registriert ist, senden wir dir eine E-Mail mit einem Link, mit dem du dein Passwort zurücksetzen kannst. Bitte prüfe auch deinen Spam-Ordner, falls die E-Mail nicht innerhalb der nächsten Minuten ankommt.
+Falls die von Ihnen eingegebene E-Mail-Adresse auf dieser Seite registriert ist, senden wir Ihnen eine E-Mail mit einem Link, über den Sie Ihr Passwort zurücksetzen können. Bitte prüfen Sie auch Ihren Spam-Ordner, falls die E-Mail nicht innerhalb der nächsten Minuten ankommt.
```

Falls die von <del>dir</del><ins>Ihnen</ins> eingegebene E-Mail-Adresse auf dieser Seite registriert ist, senden wir <del>dir</del><ins>Ihnen</ins> eine E-Mail mit einem Link, <del>mit</del><ins>über</ins> <del>dem</del><ins>den</ins> <del>du</del><ins>Sie</ins> <del>dein</del><ins>Ihr</ins> Passwort zurücksetzen <del>kannst.</del><ins>können.</ins> Bitte <del>prüfe</del><ins>prüfen Sie</ins> auch <del>deinen</del><ins>Ihren</ins> Spam-Ordner, falls die E-Mail nicht innerhalb der nächsten Minuten ankommt.

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Bitte gebe deine E-Mail-Adresse ein, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.
+Bitte geben Sie Ihre E-Mail-Adresse ein, um einen Link zum Zurücksetzen Ihres Passwortes zu erhalten.
```

Bitte <del>gebe</del><ins>geben</ins> <del>deine</del><ins>Sie Ihre</ins> E-Mail-Adresse ein, um einen Link zum Zurücksetzen <del>deines</del><ins>Ihres</ins> Passwortes zu erhalten.

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-Bist du dir sicher, dass du alle Diskussionen als gelesen markieren willst?
+Sind Sie sicher, dass Sie alle Diskussionen als gelesen markieren möchten?
```

<del>Bist du</del><ins>Sind</ins> <del>dir</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> alle Diskussionen als gelesen markieren <del>willst?</del><ins>möchten?</ins>

#### [`core.forum.notifications.delete_all_confirm`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.notifications.delete_all_confirm%22)

> Are you sure you want to delete all notifications? This action is not reversable

```diff
-Bist du sicher, dass du alle Benachrichtigungen löschen willst? Diese Aktion kann nicht rückgängig gemacht werden
+Sind Sie sicher, dass Sie alle Benachrichtigungen löschen möchten? Diese Aktion kann nicht rückgängig gemacht werden.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> alle Benachrichtigungen löschen <del>willst?</del><ins>möchten?</ins> Diese Aktion kann nicht rückgängig gemacht <del>werden</del><ins>werden.</ins>

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Bist du dir sicher, dass du diesen Beitrag für immer löschen willst? Dies kann nicht rückgängig gemacht werden.
+Sind Sie sicher, dass Sie diesen Beitrag dauerhaft löschen möchten? Dies kann nicht rückgängig gemacht werden.
```

<del>Bist du</del><ins>Sind</ins> <del>dir</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diesen Beitrag<del> für</del> <del>immer</del><ins>dauerhaft</ins> löschen <del>willst?</del><ins>möchten?</ins> Dies kann nicht rückgängig gemacht werden.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-Bist du dir sicher, dass du diesen Beitrag löschen willst?
+Sind Sie sicher, dass Sie diesen Beitrag löschen möchten?
```

<del>Bist du</del><ins>Sind</ins> <del>dir</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diesen Beitrag löschen <del>willst?</del><ins>möchten?</ins>

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-Die derzeit aktive Sitzung kann nicht beendet werden. Melde dich stattdessen ab.
+Die derzeit aktive Sitzung kann nicht beendet werden. Bitte melden Sie sich stattdessen ab.
```

Die derzeit aktive Sitzung kann nicht beendet werden. <del>Melde</del><ins>Bitte</ins> <del>dich</del><ins>melden Sie sich</ins> stattdessen ab.

#### [`core.forum.security.session_termination_failed`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.security.session_termination_failed%22)

> An error occurred while terminating your sessions.

```diff
-Beim Beenden deiner Sitzungen ist ein Fehler aufgetreten.
+Beim Beenden Ihrer Sitzungen ist ein Fehler aufgetreten.
```

Beim Beenden <del>deiner</del><ins>Ihrer</ins> Sitzungen ist ein Fehler aufgetreten.

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Erhalte "{description}" Benachrichigungen über {method}
+Erhalten Sie "{description}" Benachrichtigungen über {method}
```

<del>Erhalte</del><ins>Erhalten Sie</ins> "{description}" <del>Benachrichigungen</del><ins>Benachrichtigungen</ins> über {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Wenn jemand eine Diskussion ändert, die du gestartet hast
+Wenn jemand eine Diskussion ändert, die Sie gestartet haben
```

Wenn jemand eine Diskussion ändert, die <del>du</del><ins>Sie</ins> gestartet <del>hast</del><ins>haben</ins>

#### [`core.forum.user.avatar_upload_tooltip`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.forum.user.avatar_upload_tooltip%22)

> Upload a new avatar

```diff
-Lade einen neuen Avatar hoch
+Laden Sie einen neuen Avatar hoch
```

<del>Lade</del><ins>Laden Sie</ins> einen neuen Avatar hoch

#### [`core.lib.edit_user.nothing_available`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.edit_user.nothing_available%22)

> You are not allowed to edit this user.

```diff
-Du bist nicht berechtigt, diesen Benutzer zu bearbeiten.
+Sie sind nicht berechtigt, diesen Benutzer zu bearbeiten.
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> nicht berechtigt, diesen Benutzer zu bearbeiten.

#### [`core.lib.error.circular_dependencies_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.circular_dependencies_message%22)

> Circular dependencies detected: {extensions}. Aborting. Please disable one of the extensions and try again.

```diff
-Zirkuläre Abhängigkeiten erkannt: {extensions}. Prozess abgebrochen. Bitte deaktiviere eine der Erweiterungen und versuche es erneut.
+Zirkuläre Abhängigkeiten erkannt: {extensions}. Prozess abgebrochen. Bitte deaktivieren Sie eine der Erweiterungen und versuchen Sie es erneut.
```

Zirkuläre Abhängigkeiten erkannt: {extensions}. Prozess abgebrochen. Bitte <del>deaktiviere</del><ins>deaktivieren Sie</ins> eine der Erweiterungen und <del>versuche</del><ins>versuchen Sie</ins> es erneut.

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-{extension} konnte nicht initialisiert werden, überprüfe die Browser-Konsole für weitere Informationen.
+{extension} konnte nicht initialisiert werden, überprüfen Sie die Browser-Konsole für weitere Informationen.
```

{extension} konnte nicht initialisiert werden, <del>überprüfe</del><ins>überprüfen Sie</ins> die Browser-Konsole für weitere Informationen.

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-Ups! Bei einer Cross-Origin-Anfrage ist etwas schief gelaufen. Bitte lade die Seite neu und versuche es erneut.
+Es tut uns leid! Bei einer Cross-Origin-Anfrage ist ein Problem aufgetreten. Bitte laden Sie die Seite neu und versuchen Sie es erneut.
```

<del>Ups!</del><ins>Es tut uns leid!</ins> Bei einer Cross-Origin-Anfrage ist <del>etwas</del><ins>ein</ins> <del>schief</del><ins>Problem</ins> <del>gelaufen.</del><ins>aufgetreten.</ins> Bitte <del>lade</del><ins>laden Sie</ins> die Seite neu und <del>versuche</del><ins>versuchen Sie</ins> es erneut.

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-Ups! Da ist was schief gelaufen. Bitte lade die Seite neu oder versuche es erneut.
+Es tut uns leid! Es ist ein Fehler aufgetreten. Bitte laden Sie die Seite neu und versuchen Sie es erneut.
```

<del>Ups!</del><ins>Es</ins> <del>Da</del><ins>tut uns leid! Es</ins> ist <del>was</del><ins>ein</ins> <del>schief</del><ins>Fehler</ins> <del>gelaufen.</del><ins>aufgetreten.</ins> Bitte <del>lade</del><ins>laden Sie</ins> die Seite neu <del>oder</del><ins>und</ins> <del>versuche</del><ins>versuchen Sie</ins> es erneut.

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-Du hast keine Berechtigung dies zu tun.
+Sie haben keine Berechtigung, dies zu tun.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine <del>Berechtigung</del><ins>Berechtigung,</ins> dies zu tun.

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-Nicht so schnell. Bitte versuche es in Kürze erneut.
+Bitte nicht so schnell. Versuchen Sie es in Kürze erneut.
```

<del>Nicht</del><ins>Bitte nicht</ins> so schnell. <del>Bitte</del><ins>Versuchen</ins> <del>versuche</del><ins>Sie</ins> es in Kürze erneut.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Beim Anzeigen dieses Inhalts ist ein Fehler aufgetreten. Wenn du ein Benutzer bist, versuche es später erneut. Wenn du ein Administrator bist, überprüfe deine Flarum-Protokolldateien, um weitere Informationen zu erhalten.
+Beim Anzeigen dieses Inhalts ist ein Fehler aufgetreten. Wenn Sie ein Benutzer sind, versuchen Sie es später erneut. Wenn Sie ein Administrator sind, überprüfen Sie Ihre Flarum-Protokolldateien, um weitere Informationen zu erhalten.
```

Beim Anzeigen dieses Inhalts ist ein Fehler aufgetreten. Wenn <del>du</del><ins>Sie</ins> ein Benutzer <del>bist,</del><ins>sind,</ins> <del>versuche</del><ins>versuchen Sie</ins> es später erneut. Wenn <del>du</del><ins>Sie</ins> ein Administrator <del>bist,</del><ins>sind,</ins> <del>überprüfe</del><ins>überprüfen</ins> <del>deine</del><ins>Sie Ihre</ins> Flarum-Protokolldateien, um weitere Informationen zu erhalten.

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Wir haben eine Bestätigungsmail an {email} gesendet. Bitte überprüfe deinen Spam-Ordner, falls du keine E-Mail erhalten hast.
+Wir haben eine Bestätigungs-E-Mail an {email} gesendet. Bitte überprüfen Sie Ihren Spam-Ordner, falls Sie keine E-Mail erhalten haben.
```

Wir haben eine <del>Bestätigungsmail</del><ins>Bestätigungs-E-Mail</ins> an {email} gesendet. Bitte <del>überprüfe</del><ins>überprüfen</ins> <del>deinen</del><ins>Sie Ihren</ins> Spam-Ordner, falls <del>du</del><ins>Sie</ins> keine E-Mail erhalten <del>hast.</del><ins>haben.</ins>

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-Bist du sicher, dass du fortfahren willst? Diese Aktion kann nicht rückgängig gemacht werden.
+Sind Sie sicher, dass Sie fortfahren möchten? Diese Aktion kann nicht rückgängig gemacht werden.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> fortfahren <del>willst?</del><ins>möchten?</ins> Diese Aktion kann nicht rückgängig gemacht werden.

#### [`core.ref.icon_text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.ref.icon_text%22)

> Enter the name of any &lt;a&gt;FontAwesome&lt;/a&gt; icon class, &lt;em&gt;including&lt;/em&gt; the &lt;code&gt;fas fa-&lt;/code&gt; prefix.

```diff
-Gebe den Namen des <a>FontAwesome</a>-Symbols ein, aber <em>mit</em> dem Prefix <code>fas fa-</code>.
+Geben Sie den Namen des <a>FontAwesome</a>-Symbols ein, aber <em>mit</em> dem Präfix <code>fas fa-</code>.
```

<del>Gebe</del><ins>Geben Sie</ins> den Namen des &lt;a&gt;FontAwesome&lt;/a&gt;-Symbols ein, aber &lt;em&gt;mit&lt;/em&gt; dem <del>Prefix</del><ins>Präfix</ins> &lt;code&gt;fas fa-&lt;/code&gt;.

#### [`core.ref.reset_your_password`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.ref.reset_your_password%22)

> Reset Your Password

```diff
-Dein Passwort zurücksetzen
+Ihr Passwort zurücksetzen
```

<del>Dein</del><ins>Ihr</ins> Passwort zurücksetzen

#### [`core.ref.you`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.ref.you%22)

> You

```diff
-Du
+Sie
```

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-Klicke auf die Schaltfläche unten, um die E-Mail-Adresse deines Kontos zu bestätigen.
+Klicken Sie auf die Schaltfläche unten, um die E-Mail-Adresse Ihres Kontos zu bestätigen.
```

<del>Klicke</del><ins>Klicken Sie</ins> auf die Schaltfläche unten, um die E-Mail-Adresse <del>deines</del><ins>Ihres</ins> Kontos zu bestätigen.

#### [`core.views.error.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch%22)

> You have been inactive for too long.

```diff
-Du warst zu lange inaktiv.
+Sie waren zu lange inaktiv.
```

<del>Du</del><ins>Sie</ins> <del>warst</del><ins>waren</ins> zu lange inaktiv.

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Gehe zurück um es erneut zu versuchen
+Bitte gehen Sie zurück und versuchen Sie es erneut
```

<del>Gehe</del><ins>Bitte gehen Sie</ins> zurück <del>um</del><ins>und</ins> <del>es</del><ins>versuchen</ins> <del>erneut</del><ins>Sie</ins> <del>zu</del><ins>es</ins> <del>versuchen</del><ins>erneut</ins>

#### [`core.views.error.not_authenticated`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.views.error.not_authenticated%22)

> You do not have permission to access this page. Try again after logging in.

```diff
-Du hast keine Berechtigung, auf diese Seite zuzugreifen. Versuche dich erneut anzumelden.
+Sie haben keine Berechtigung, auf diese Seite zuzugreifen. Bitte versuchen Sie sich erneut anzumelden.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, auf diese Seite zuzugreifen. <del>Versuche</del><ins>Bitte</ins> <del>dich</del><ins>versuchen Sie sich</ins> erneut anzumelden.

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-Du hast keine Berechtigung, auf diese Seite zuzugreifen.
+Sie haben keine Berechtigung, auf diese Seite zuzugreifen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, auf diese Seite zuzugreifen.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum/core/de@formal/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-Bist du sicher, dass du dich von {forum} abmelden willst?
+Sind Sie sicher, dass Sie sich von {forum} abmelden möchten?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> von {forum} abmelden <del>willst?</del><ins>möchten?</ins>


### `datlechin-bbcode-hide-content`

#### [`datlechin-bbcode-hide-content.forum.must_be_logged_in`](https://weblate.rob006.net/translate/flarum/datlechin-bbcode-hide-content/de@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_be_logged_in%22)

> You must be logged in to view this content

```diff
-Du musst angemeldet sein, um diesen Inhalt ansehen zu können.
+Sie müssen angemeldet sein, um diesen Inhalt ansehen zu können.
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> angemeldet sein, um diesen Inhalt ansehen zu können.

#### [`datlechin-bbcode-hide-content.forum.must_liked`](https://weblate.rob006.net/translate/flarum/datlechin-bbcode-hide-content/de@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_liked%22)

> You must like this content to view it

```diff
-Du musst diesen Inhalt liken, um ihn ansehen zu können.
+Sie müssen diesen Inhalt liken, um ihn ansehen zu können.
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> diesen Inhalt liken, um ihn ansehen zu können.

#### [`datlechin-bbcode-hide-content.forum.must_replied`](https://weblate.rob006.net/translate/flarum/datlechin-bbcode-hide-content/de@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_replied%22)

> You must reply to this content to view it

```diff
-Du musst auf diesen Inhalt antworten, um ihn ansehen zu können.
+Sie müssen auf diesen Inhalt antworten, um ihn ansehen zu können.
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> auf diesen Inhalt antworten, um ihn ansehen zu können.


### `datlechin-birthdays`

#### [`datlechin-birthdays.admin.settings.date_format_help`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.date_format_help%22)

> Use the &lt;a&gt;dayjs&lt;/a&gt; date format. Leave blank to use the default format.

```diff
-Verwende das <a>dayjs</a>-Datumsformat. Lasse das Feld leer, um das Standardformat zu verwenden.
+Das <a>dayjs</a>-Datumsforma verwenden. Lassen Sie dieses Feld leer, um das Standardformat zu verwenden.
```

<del>Verwende</del><ins>Das</ins> <del>das</del><ins>&lt;a&gt;dayjs&lt;/a&gt;-Datumsforma</ins> <del>&lt;a&gt;dayjs&lt;/a&gt;-Datumsformat.</del><ins>verwenden.</ins> <del>Lasse</del><ins>Lassen</ins> <del>das</del><ins>Sie dieses</ins> Feld leer, um das Standardformat zu verwenden.

#### [`datlechin-birthdays.admin.settings.required_help`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.required_help%22)

> You need enable Set on registration option to make this option work

```diff
-Du musst die Option Bei Registrierung festlegen aktivieren, damit diese Option funktioniert
+Sie müssen die Option Bei Registrierung festlegen aktivieren, damit diese Einstellung funktioniert
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> die Option Bei Registrierung festlegen aktivieren, damit diese <del>Option</del><ins>Einstellung</ins> funktioniert

#### [`datlechin-birthdays.api.invalid_age_message`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.api.invalid_age_message%22)

> Your age must be at least {minAge} years old.

```diff
-Dein Alter muss mindestens {minAge} Jahre betragen.
+Ihr Alter muss mindestens {minAge} Jahre betragen.
```

<del>Dein</del><ins>Ihr</ins> Alter muss mindestens {minAge} Jahre betragen.

#### [`datlechin-birthdays.forum.settings.show_dob_year_help`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.forum.settings.show_dob_year_help%22)

> This will allow people to see your age.

```diff
-Dadurch können die Leute Dein Alter sehen.
+Das erlaubt andere Benutzer Ihr Alter zu sehen.
```

<del>Dadurch</del><ins>Das</ins> <del>können</del><ins>erlaubt</ins> <del>die</del><ins>andere</ins> <del>Leute</del><ins>Benutzer</ins> <del>Dein</del><ins>Ihr</ins> Alter<ins> zu</ins> sehen.

#### [`datlechin-birthdays.ref.date_of_birth`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.ref.date_of_birth%22)

> Date of Birth

```diff
-Geburtsdatum
+Geburtstag
```


### `datlechin-copy-links`

#### [`datlechin-copy-links.forum.link_copied_message`](https://weblate.rob006.net/translate/flarum/datlechin-copy-links/de@formal/?q=context%3A%3D%22datlechin-copy-links.forum.link_copied_message%22)

> Link copied to clipboard!

```diff
-Link in Zwischenablage gespeichert!
+Link in der Zwischenablage gespeichert!
```

Link in <ins>der </ins>Zwischenablage gespeichert!


### `datlechin-link-preview`

#### [`datlechin-link-preview.admin.settings.blacklist_help`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.blacklist_help%22)

> Specify domains or URLs that should not generate link previews. Use commas to separate multiple entries.

```diff
-Gib Domains oder URLs an, die keine Link-Vorschauen erzeugen sollen. Mehrere Einträge durch Kommas trennen.
+Geben Sie eine kommagetrennte Liste von Domains oder URLs ein, die von der Linkvorschau ausgeschlossen werden sollen.
```

<del>Gib</del><ins>Geben Sie eine kommagetrennte Liste von</ins> Domains oder URLs <del>an,</del><ins>ein,</ins> die<del> keine Link-Vorschauen erzeugen</del> <del>sollen.</del><ins>von</ins> <del>Mehrere</del><ins>der</ins> <del>Einträge</del><ins>Linkvorschau</ins> <del>durch</del><ins>ausgeschlossen</ins> <del>Kommas</del><ins>werden</ins> <del>trennen.</del><ins>sollen.</ins>

#### [`datlechin-link-preview.admin.settings.blacklist_label`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.blacklist_label%22)

> Domain Blacklist

```diff
-Sperrliste für Domains
+Blacklist
```

#### [`datlechin-link-preview.admin.settings.blacklist_placeholder`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.blacklist_placeholder%22)

> Examples: facebook.com, twitter.com/specific-page

```diff
-Beispiele: facebook.com, twitter.com/spezifische-seite
+z.B. facebook.com,https://domain.com/path
```

#### [`datlechin-link-preview.admin.settings.cache_time_help`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.cache_time_help%22)

> How long to store link previews before refreshing. Set to 0 to disable caching. Default: 60 minutes.

```diff
-Legt fest, wie lange Link-Vorschauen gespeichert werden, bevor sie aktualisiert werden. Auf 0 setzen, um das Caching zu deaktivieren. Standard: 60 Minuten.
+Anzahl der Minuten, die gecrawlte Links zwischengespeichert werden, bevor sie erneut aufgerufen werden. Mit dem Wert 0 wird das Link-Caching deaktiviert. Der Standardwert ist 60 Minuten, wenn er nicht gesetzt ist.
```

<del>Legt</del><ins>Anzahl</ins> <del>fest,</del><ins>der</ins> <del>wie</del><ins>Minuten,</ins> <del>lange</del><ins>die</ins> <del>Link-Vorschauen</del><ins>gecrawlte</ins> <del>gespeichert</del><ins>Links zwischengespeichert</ins> werden, bevor sie <del>aktualisiert</del><ins>erneut aufgerufen</ins> werden. <del>Auf</del><ins>Mit</ins> <del>0</del><ins>dem</ins> <del>setzen,</del><ins>Wert</ins> <del>um</del><ins>0 wird</ins> das <del>Caching</del><ins>Link-Caching</ins> <del>zu</del><ins>deaktiviert.</ins> <del>deaktivieren.</del><ins>Der</ins> <del>Standard:</del><ins>Standardwert ist</ins> 60 <del>Minuten.</del><ins>Minuten, wenn er nicht gesetzt ist.</ins>

#### [`datlechin-link-preview.admin.settings.cache_time_label`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.cache_time_label%22)

> Cache Duration (minutes)

```diff
-Speicherdauer im Cache (Minuten)
+Dauer des Zwischenspeicherns
```

#### [`datlechin-link-preview.admin.settings.convert_media_urls_help`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.convert_media_urls_help%22)

> Generate previews for URLs that point to media files (images, videos, etc.).

```diff
-Vorschauen für URLs erzeugen, die auf Mediendateien (Bilder, Videos usw.) verweisen.
+Wenn aktiviert, werden alle Medien-URLs in eine Linkvorschau umgewandelt.
```

#### [`datlechin-link-preview.admin.settings.convert_media_urls_label`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.convert_media_urls_label%22)

> Preview Media URLs

```diff
-URLs für Medienvorschauen
+Medien-URLs umwandeln
```

#### [`datlechin-link-preview.admin.settings.open_links_in_new_tab_help`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.open_links_in_new_tab_help%22)

> Always open previewed links in a new browser tab.

```diff
-Alle Vorschau-Links standardmäßig in einem neuen Tab öffnen.
+Wenn aktiviert, werden die Links in einem neuen Tab geöffnet.
```

<del>Alle</del><ins>Wenn</ins> <del>Vorschau-Links</del><ins>aktiviert,</ins> <del>standardmäßig</del><ins>werden die Links</ins> in einem neuen Tab <del>öffnen.</del><ins>geöffnet.</ins>

#### [`datlechin-link-preview.admin.settings.open_links_in_new_tab_label`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.open_links_in_new_tab_label%22)

> Open Links in New Tab

```diff
-Links in einem neuen Browser-Tab öffnen
+Links in einem neuen Tab öffnen
```

Links in einem neuen <del>Browser-Tab</del><ins>Tab</ins> öffnen

#### [`datlechin-link-preview.admin.settings.use_google_favicons_help`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.use_google_favicons_help%22)

> Show website favicons using Google's Favicon service to enhance visual recognition.

```diff
-Website-Favicons über den Google-Favicon-Dienst anzeigen, um die visuelle Erkennung zu verbessern.
+Wenn aktiviert, wird ein Google-Dienst im Frontend verwendet, um das Favicon der jeweiligen Webseite abzurufen.
```

<del>Website-Favicons</del><ins>Wenn</ins> <del>über</del><ins>aktiviert,</ins> <del>den</del><ins>wird</ins> <del>Google-Favicon-Dienst</del><ins>ein</ins> <del>anzeigen,</del><ins>Google-Dienst im Frontend verwendet,</ins> um <del>die</del><ins>das</ins> <del>visuelle</del><ins>Favicon</ins> <del>Erkennung</del><ins>der</ins> <del>zu</del><ins>jeweiligen</ins> <del>verbessern.</del><ins>Webseite abzurufen.</ins>

#### [`datlechin-link-preview.admin.settings.use_google_favicons_label`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.use_google_favicons_label%22)

> Display Site Icons

```diff
-Icons der Websites anzeigen
+Google Favicon-API verwenden
```

#### [`datlechin-link-preview.admin.settings.whitelist_help`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.whitelist_help%22)

> Only generate previews for these domains or URLs. Leave empty to allow all non-blacklisted domains.

```diff
-Vorschauen nur für die angegebenen Domains oder URLs erstellen. Feld leer lassen, um alle Domains, die nicht auf der Blacklist stehen, zuzulassen.
+Geben Sie eine kommagetrennte Liste von Domains oder URLs ein, die eine Linkvorschau ermöglichen sollen.
```

<del>Vorschauen</del><ins>Geben</ins> <del>nur</del><ins>Sie</ins> <del>für</del><ins>eine</ins> <del>die</del><ins>kommagetrennte</ins> <del>angegebenen</del><ins>Liste von</ins> Domains oder URLs<del> erstellen. Feld leer lassen, um alle</del> <del>Domains,</del><ins>ein,</ins> die<del> nicht auf</del> <del>der</del><ins>eine</ins> <del>Blacklist</del><ins>Linkvorschau</ins> <del>stehen,</del><ins>ermöglichen</ins> <del>zuzulassen.</del><ins>sollen.</ins>

#### [`datlechin-link-preview.admin.settings.whitelist_label`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.whitelist_label%22)

> Domain Whitelist

```diff
-Freigabeliste für Domains
+Whitelist
```

#### [`datlechin-link-preview.admin.settings.whitelist_placeholder`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.whitelist_placeholder%22)

> Examples: trusted-site.com, specific-domain.org/path

```diff
-Beispiele: trusted-site.com, specific-domain.org/pfad
+z.B. facebook.com,https://domain.com/pfad
```

#### [`datlechin-link-preview.forum.site_cannot_be_reached`](https://weblate.rob006.net/translate/flarum/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.forum.site_cannot_be_reached%22)

> Unable to load preview. Please check the URL and try again.

```diff
-Vorschau konnte nicht geladen werden. Bitte die URL prüfen und erneut versuchen.
+Diese Webseite ist nicht erreichbar.
```


### `davwheat-share`

#### [`davwheat-share.admin.browser_support_notice`](https://weblate.rob006.net/translate/flarum/davwheat-share/de@formal/?q=context%3A%3D%22davwheat-share.admin.browser_support_notice%22)

> The "Share" option will only appear on devices which support the Web Share API. &lt;a&gt;Check support for different browsers.&lt;/a&gt;

```diff
-Die Option "Teilen" wird nur auf Geräten angezeigt, die die Web Share API unterstützen. <a>Überprüfe die Unterstützung für verschiedene Browser.</a>
+Die Option „Teilen“ wird nur auf Geräten angezeigt, die die Web Share API unterstützen. <a>Überprüfen Sie die Unterstützung für verschiedene Browser.</a>
```

Die Option <del>"Teilen"</del><ins>„Teilen“</ins> wird nur auf Geräten angezeigt, die die Web Share API unterstützen. <del>&lt;a&gt;Überprüfe</del><ins>&lt;a&gt;Überprüfen Sie</ins> die Unterstützung für verschiedene Browser.&lt;/a&gt;


### `flarum-approval`

#### [`flarum-approval.admin.permissions.reply_without_approval_label`](https://weblate.rob006.net/translate/flarum/flarum-approval/de@formal/?q=context%3A%3D%22flarum-approval.admin.permissions.reply_without_approval_label%22)

> Reply to discussions without approval

```diff
-Auf eine Diskussion antworten ohne Genehmigung
+Auf eine Diskussion ohne Genehmigung antworten
```

Auf eine Diskussion <del>antworten </del>ohne Genehmigung<ins> antworten</ins>

#### [`flarum-approval.admin.permissions.start_discussions_without_approval_label`](https://weblate.rob006.net/translate/flarum/flarum-approval/de@formal/?q=context%3A%3D%22flarum-approval.admin.permissions.start_discussions_without_approval_label%22)

> Start discussions without approval

```diff
-Diskussion starten ohne Genehmigung
+Diskussionen ohne Genehmigung starten
```

<del>Diskussion starten</del><ins>Diskussionen</ins> ohne Genehmigung<ins> starten</ins>


### `flarum-emoji`

#### [`flarum-emoji.forum.composer.type_to_search_text`](https://weblate.rob006.net/translate/flarum/flarum-emoji/de@formal/?q=context%3A%3D%22flarum-emoji.forum.composer.type_to_search_text%22)

> Type to search for an emoji

```diff
-Tippen, um nach Emojis zu suchen
+Tippen Sie, um nach Emojis zu suchen
```

<del>Tippen,</del><ins>Tippen Sie,</ins> um nach Emojis zu suchen


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.auth_config.delete_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_confirmation%22)

> Are you sure you want to delete this authentication method?

```diff
-Bist du sicher, dass du diese Authentifizierungsmethode löschen möchtest?
+Sind sie sicher, dass sie diese Authentifizierungsmethode löschen möchten?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>sie</ins> sicher, dass <del>du</del><ins>sie</ins> diese Authentifizierungsmethode löschen <del>möchtest?</del><ins>möchten?</ins>

#### [`flarum-extension-manager.admin.auth_config.types.bearer`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.bearer%22)

> HTTP Bearer

```diff
-HTTP Bearer
+HTTP-Bearer
```

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
-Bist du sicher, dass du dieses Repository löschen willst? Alle daraus installierten Erweiterungen werden entfernt.
+Sind sie sicher, dass sie dieses Repository löschen wollen? Alle daraus installierten Erweiterungen werden entfernt.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>sie</ins> sicher, dass <del>du</del><ins>sie</ins> dieses Repository löschen <del>willst?</del><ins>wollen?</ins> Alle daraus installierten Erweiterungen werden entfernt.

#### [`flarum-extension-manager.admin.composer.minimum_stability.help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.help%22)

> The type of packages allowed to be installed. Do not change this unless you know what you are doing.

```diff
-Die Art von Paketen, die installiert werden dürfen. Ändere dies nur, wenn du weißt, was du tust.
+Die Art von Paketen, die installiert werden dürfen. Ändern sie dies nur, wenn sie wissen, was sie tun.
```

Die Art von Paketen, die installiert werden dürfen. <del>Ändere</del><ins>Ändern sie</ins> dies nur, wenn <del>du</del><ins>sie</ins> <del>weißt,</del><ins>wissen,</ins> was <del>du</del><ins>sie</ins> <del>tust.</del><ins>tun.</ins>

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.dev`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.dev%22)

> Dev

```diff
-Dev
+Entwickler
```

#### [`flarum-extension-manager.admin.composer.repositories.help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.help%22)

> Add additional repositories to install packages from. This is an advanced feature, do not add repositories that are not trusted, as they can be used to execute malicious code on your server.
>

```diff
-Füge zusätzliche Repositories hinzu, um Pakete daraus zu installieren. Das ist eine fortgeschrittene Funktion, füge keine Repositories hinzu, denen du nicht vertraust, da sie genutzt werden können, um schädlichen Code auf deinem Server auszuführen.
+Fügen sie zusätzliche Repositories hinzu, um Pakete daraus zu installieren. Dies ist eine fortgeschrittene Funktion, fügen sie keine Repositories hinzu, denen sie nicht vertrauen, da sie genutzt werden können, um schädlichen Code auf ihrem Server auszuführen.

```

<del>Füge</del><ins>Fügen sie</ins> zusätzliche Repositories hinzu, um Pakete daraus zu installieren. <del>Das</del><ins>Dies</ins> ist eine fortgeschrittene Funktion, <del>füge</del><ins>fügen sie</ins> keine Repositories hinzu, denen <del>du</del><ins>sie</ins> nicht <del>vertraust,</del><ins>vertrauen,</ins> da sie genutzt werden können, um schädlichen Code auf <del>deinem</del><ins>ihrem</ins> Server auszuführen.<br />

#### [`flarum-extension-manager.admin.exceptions.composer_command_failure`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.composer_command_failure%22)

> Failed to execute. Check the composer logs in storage/logs/composer.

```diff
-Ausführung fehlgeschlagen. Überprüfe die Composer-Logs in storage/logs/composer.
+Ausführung fehlgeschlagen. Überprüfen sie die Composer-Logs in storage/logs/composer.
```

Ausführung fehlgeschlagen. <del>Überprüfe</del><ins>Überprüfen sie</ins> die Composer-Logs in storage/logs/composer.

#### [`flarum-extension-manager.admin.extensions.install_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install_help%22)

> Fill in the extension package name to proceed. You can specify a &lt;semantic\_link&gt;semantic version&lt;/semantic\_link&gt; using the format &lt;code&gt;vendor/package-name:version&lt;/code&gt;. Visit {link} to browse extensions.
>

```diff
-Gib den Paketnamen der Erweiterung ein, um fortzufahren. Du kannst mithilfe des Formats <code>vendor/package-name:version</code> eine <semantic_link>semantische Version</semantic_link> angeben. Besuche {link}, um Erweiterungen zu durchsuchen.
+Geben Sie den Paketnamen der Erweiterung ein, um fortzufahren. Sie können mithilfe des Formats <code>vendor/package-name:version</code> eine <semantic_link>semantische Version</semantic_link> angeben. Besuchen Sie {link}, um Erweiterungen zu durchsuchen.

```

<del>Gib</del><ins>Geben Sie</ins> den Paketnamen der Erweiterung ein, um fortzufahren. <del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> mithilfe des Formats &lt;code&gt;vendor/package-name:version&lt;/code&gt; eine &lt;semantic\_link&gt;semantische Version&lt;/semantic\_link&gt; angeben. <del>Besuche</del><ins>Besuchen Sie</ins> {link}, um Erweiterungen zu durchsuchen.<br />

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
-Große Flarum-Updates sind nicht rückwärtskompatibel, was bedeutet, dass einige deiner derzeit installierten Erweiterungen und manuell durchgeführten Änderungen möglicherweise nicht mit dieser neuen Version funktionieren. Bitte stelle sicher, dass du ein Backup deiner Datenbank und Dateien erstellst, bevor du fortfährst.
+Große Flarum-Updates sind nicht rückwärtskompatibel, was bedeutet, dass einige ihrer derzeit installierten Erweiterungen und manuell durchgeführten Änderungen möglicherweise nicht mit dieser neuen Version funktionieren. Bitte stellen sie sicher, dass sie ein Backup Ihrer Datenbank und Dateien erstellen, bevor sie fortfahren.

```

Große Flarum-Updates sind nicht rückwärtskompatibel, was bedeutet, dass einige <del>deiner</del><ins>ihrer</ins> derzeit installierten Erweiterungen und manuell durchgeführten Änderungen möglicherweise nicht mit dieser neuen Version funktionieren. Bitte <del>stelle</del><ins>stellen sie</ins> sicher, dass <del>du</del><ins>sie</ins> ein Backup <del>deiner</del><ins>Ihrer</ins> Datenbank und Dateien <del>erstellst,</del><ins>erstellen,</ins> bevor <del>du</del><ins>sie</ins> <del>fortfährst.</del><ins>fortfahren.</ins><br />

#### [`flarum-extension-manager.admin.major_updater.dry_run_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run_help%22)

> A dry run emulates the update to see if your current setup can safely update, this does not mean that your manual made custom modifications will work in the newer version.

```diff
-Ein Testlauf simuliert das Update, um zu sehen, ob dein aktuelles Setup sicher aktualisiert werden kann. Das bedeutet nicht, dass deine manuell vorgenommenen Anpassungen in der neueren Version funktionieren.
+Ein Testlauf simuliert das Update, um zu sehen, ob ihr aktuelles Setup sicher aktualisiert werden kann. Das bedeutet nicht, dass ihre manuell vorgenommenen Anpassungen in der neueren Version funktionieren.
```

Ein Testlauf simuliert das Update, um zu sehen, ob <del>dein</del><ins>ihr</ins> aktuelles Setup sicher aktualisiert werden kann. Das bedeutet nicht, dass <del>deine</del><ins>ihre</ins> manuell vorgenommenen Anpassungen in der neueren Version funktionieren.

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
-Bitte sei vorsichtig, wem du Zugang zum Admin-Bereich gibst, der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.
+Bitte seien sie vorsichtig, wem sie Zugang zum Admin-Bereich geben, der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.
```

Bitte <del>sei</del><ins>seien sie</ins> vorsichtig, wem <del>du</del><ins>sie</ins> Zugang zum Admin-Bereich <del>gibst,</del><ins>geben,</ins> der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.

#### [`flarum-extension-manager.admin.settings.debug_mode_warning`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.debug_mode_warning%22)

> You are running in debug mode, the extension manager cannot properly install and update local development packages. Please use the command line interface instead for such purposes.

```diff
-Du bist im Debug-Modus, der Erweiterungs-Manager kann lokale Entwicklungs-Pakete nicht richtig installieren und aktualisieren. Bitte benutze für solche Zwecke stattdessen die Kommandozeile.
+Sie sind im Debug-Modus, der Erweiterungs-Manager kann lokale Entwicklungs-Pakete nicht richtig installieren und aktualisieren. Bitte benutzen sie für solche Zwecke stattdessen die Kommandozeilen-Schnittstelle.
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> im Debug-Modus, der Erweiterungs-Manager kann lokale Entwicklungs-Pakete nicht richtig installieren und aktualisieren. Bitte <del>benutze</del><ins>benutzen sie</ins> für solche Zwecke stattdessen die <del>Kommandozeile.</del><ins>Kommandozeilen-Schnittstelle.</ins>

#### [`flarum-extension-manager.admin.settings.queue_jobs_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.queue_jobs_help%22)

> You can read about a &lt;a href='{basic\_impl\_link}'&gt;basic queue&lt;/a&gt; implementation or a &lt;a href='{adv\_impl\_link}'&gt;more advanced&lt;/a&gt; one. Make sure the PHP version used for the queue is {php\_version}. Make sure &lt;a href='{folder\_perms\_link}'&gt;folder permissions&lt;/a&gt; are correctly configured.
>

```diff
-Du kannst dich über eine <a href='{basic_impl_link}'>einfache Warteschlangen-Implementierung</a> oder eine <a href='{adv_impl_link}'>fortgeschrittenere</a> informieren. Stelle sicher, dass die für die Warteschlange verwendete PHP-Version {php_version} ist. Stelle außerdem sicher, dass die <a href='{folder_perms_link}'>Ordnerberechtigungen</a> richtig konfiguriert sind.
+Sie können sich über eine <a href='{basic_impl_link}'>einfache Warteschlangen-Implementierung</a> oder eine <a href='{adv_impl_link}'>fortgeschrittenere</a> informieren. Stellen sie sicher, dass die für die Warteschlange verwendete PHP-Version {php_version} ist. Stellen sie außerdem sicher, dass die <a href='{folder_perms_link}'>Ordnerberechtigungen</a> richtig konfiguriert sind.

```

<del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> <del>dich</del><ins>sich</ins> über eine &lt;a href='{basic\_impl\_link}'&gt;einfache Warteschlangen-Implementierung&lt;/a&gt; oder eine &lt;a href='{adv\_impl\_link}'&gt;fortgeschrittenere&lt;/a&gt; informieren. <del>Stelle</del><ins>Stellen sie</ins> sicher, dass die für die Warteschlange verwendete PHP-Version {php\_version} ist. <del>Stelle</del><ins>Stellen sie</ins> außerdem sicher, dass die &lt;a href='{folder\_perms\_link}'&gt;Ordnerberechtigungen&lt;/a&gt; richtig konfiguriert sind.<br />

#### [`flarum-extension-manager.admin.updater.updater_title`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_title%22)

> Updates

```diff
-Updates
+Aktualisierungen
```


### `flarum-flags`

#### [`flarum-flags.admin.settings.flag_own_posts_label`](https://weblate.rob006.net/translate/flarum/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.admin.settings.flag_own_posts_label%22)

> Allow users to flag their own posts

```diff
-Erlaube Benutzern eigene Beiträge zu melden
+Benutzern erlauben Ihre eigenen Beiträge zu melden
```

<del>Erlaube </del>Benutzern <del>eigene</del><ins>erlauben Ihre eigenen</ins> Beiträge zu melden

#### [`flarum-flags.forum.flag_post.confirmation_message`](https://weblate.rob006.net/translate/flarum/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.confirmation_message%22)

> Thank you for flagging this post. Our moderators will look into it.

```diff
-Danke für das Melden des Beitrags. Unsere Moderatoren werden sich darum kümmern.
+Vielen Dank, dass Sie diesen Beitrag gemeldet haben. Unsere Moderatoren werden sich um das Anliegen kümmern.
```

<del>Danke</del><ins>Vielen</ins> <del>für</del><ins>Dank,</ins> <del>das</del><ins>dass</ins> <del>Melden</del><ins>Sie</ins> <del>des</del><ins>diesen</ins> <del>Beitrags.</del><ins>Beitrag gemeldet haben.</ins> Unsere Moderatoren werden sich <del>darum</del><ins>um das Anliegen</ins> kümmern.

#### [`flarum-flags.forum.flag_post.reason_inappropriate_text`](https://weblate.rob006.net/translate/flarum/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_inappropriate_text%22)

> This post is offensive, abusive, or violates our &lt;a&gt;community guidelines&lt;/a&gt;.

```diff
-Dieser Beitrag ist anstößig, beleidigend oder verstößt gegen unsere <a>Community-Richtlinien</a>.
+Dieser Beitrag ist anstößig, beleidigend oder verstößt gegen die <a>Community-Richtlinien</a>.
```

Dieser Beitrag ist anstößig, beleidigend oder verstößt gegen <del>unsere</del><ins>die</ins> &lt;a&gt;Community-Richtlinien&lt;/a&gt;.

#### [`flarum-flags.forum.flag_post.reason_missing_message`](https://weblate.rob006.net/translate/flarum/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_missing_message%22)

> Please provide some details for our moderators.

```diff
-Bitte gebe einen Grund an.
+Bitte geben Sie einen Grund an.
```

Bitte <del>gebe</del><ins>geben Sie</ins> einen Grund an.

#### [`flarum-flags.forum.flag_post.reason_spam_text`](https://weblate.rob006.net/translate/flarum/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_spam_text%22)

> This post is an advertisement.

```diff
-Dieser Beitrag ist Werbung oder Spam.
+Dieser Beitrag ist Werbung.
```

Dieser Beitrag ist <del>Werbung oder Spam.</del><ins>Werbung.</ins>


### `flarum-gdpr`

#### [`flarum-gdpr.admin.settings.gdpr_page.help_text`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.help_text%22)

> Before deciding on which actions to use on your forum, it is vital to understand which data is integrated, and how it is handled for both anonymization and deletion. Vist the GDPR overview to understand how data is handled, and which optional extensions have registered their data to be handled by this extension.

```diff
-Vor der Entscheidung, welche Aktionen in deinem Forum verwendet werden sollen, ist es wichtig zu verstehen, welche Daten integriert werden und wie sie sowohl für die Anonymisierung als auch für die Löschung behandelt werden. Informiere dich in der DSGVO-Übersicht darüber, wie die Daten behandelt werden und welche optionalen Erweiterungen die Daten für die Behandlung durch diese Erweiterung registriert haben.
+Vor der Entscheidung, welche Aktionen in Ihrem Forum verwendet werden sollen, ist es wichtig zu verstehen, welche Daten integriert werden und wie sie sowohl für die Anonymisierung als auch für die Löschung behandelt werden. Informieren Sie sich in der DSGVO-Übersicht darüber, wie die Daten behandelt werden und welche optionalen Erweiterungen die Daten für die Behandlung durch diese Erweiterung registriert haben.
```

Vor der Entscheidung, welche Aktionen in <del>deinem</del><ins>Ihrem</ins> Forum verwendet werden sollen, ist es wichtig zu verstehen, welche Daten integriert werden und wie sie sowohl für die Anonymisierung als auch für die Löschung behandelt werden. <del>Informiere</del><ins>Informieren</ins> <del>dich</del><ins>Sie sich</ins> in der DSGVO-Übersicht darüber, wie die Daten behandelt werden und welche optionalen Erweiterungen die Daten für die Behandlung durch diese Erweiterung registriert haben.

#### [`flarum-gdpr.email.confirm_erasure.body`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.confirm_erasure.body%22)

> Hey {display\_name}!
>
> Someone (hopefully you) just requested to erase the account \`{display\_name}\`.
>
> To confirm this action, please follow the following link, after which your request will be processed by our team.
>
> {erasure\_confirm\_url}
>

```diff
-Hey {display_name}!
+Hallo {display_name}!

-Jemand (hoffentlich du) hat gerade beantragt, das Konto `{display_name}` zu löschen.
+Jemand (hoffentlich Sie) hat gerade die Löschung des Kontos „{display_name}“ beantragt.

-Um diese Aktion zu bestätigen, folge bitte dem folgenden Link. Danach wird dein Antrag von unserem Team bearbeitet.
+Um diese Aktion zu bestätigen, folgen Sie bitte dem folgenden Link. Anschließend wird Ihre Anfrage von unserem Team bearbeitet.

 {erasure_confirm_url}

```

<del>Hey</del><ins>Hallo</ins> {display\_name}!<br /><br />Jemand (hoffentlich <del>du)</del><ins>Sie)</ins> hat gerade <del>beantragt,</del><ins>die</ins> <del>das</del><ins>Löschung</ins> <del>Konto</del><ins>des</ins> <del>\`{display\_name}\`</del><ins>Kontos</ins> <del>zu</del><ins>„{display\_name}“</ins> <del>löschen.</del><ins>beantragt.</ins><br /><br />Um diese Aktion zu bestätigen, <del>folge</del><ins>folgen Sie</ins> bitte dem folgenden Link. <del>Danach</del><ins>Anschließend</ins> wird <del>dein</del><ins>Ihre</ins> <del>Antrag</del><ins>Anfrage</ins> von unserem Team bearbeitet.<br /><br />{erasure\_confirm\_url}<br />

#### [`flarum-gdpr.email.erasure_cancelled.body`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_cancelled.body%22)

> Hey {display\_name}!
>
> This is an automatic notification that your request to cancel account deletion has been processed.
>
> Your account will no longer be deleted.
>

```diff
-Hey {display_name}!
+Hallo {display_name}!

-Dies ist eine automatische Benachrichtigung, dass dein Antrag auf Stornierung der Kontolöschung bearbeitet wurde.
+Dies ist eine automatische Benachrichtigung, dass Ihr Antrag auf Stornierung der Kontolöschung bearbeitet wurde.

-Dein Konto wird nicht mehr gelöscht.
+Ihr Konto wird nicht mehr gelöscht.

```

<del>Hey</del><ins>Hallo</ins> {display\_name}!<br /><br />Dies ist eine automatische Benachrichtigung, dass <del>dein</del><ins>Ihr</ins> Antrag auf Stornierung der Kontolöschung bearbeitet wurde.<br /><br /><del>Dein</del><ins>Ihr</ins> Konto wird nicht mehr gelöscht.<br />

#### [`flarum-gdpr.email.export_available.body`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.export_available.body%22)

> Hey {display\_name}!
>
> You requested an export of the account data for {username}. This export has successfully been generated and is now available:
>
> {url}
>
> This export will remain available until {destroys\_at}.
>

```diff
-Hey {display_name}!
+Hallo {display_name}!

-Du hast einen Export der Kontodaten für {username} angefordert. Dieser Export wurde erfolgreich generiert und ist jetzt verfügbar:
+Sie haben einen Export der Kontodaten für {username} angefordert. Dieser Export wurde erfolgreich generiert und ist jetzt verfügbar:

 {url}

 Dieser Export bleibt bis {destroys_at} verfügbar.

```

<del>Hey</del><ins>Hallo</ins> {display\_name}!<br /><br /><del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> einen Export der Kontodaten für {username} angefordert. Dieser Export wurde erfolgreich generiert und ist jetzt verfügbar:<br /><br />{url}<br /><br />Dieser Export bleibt bis {destroys\_at} verfügbar.<br />

#### [`flarum-gdpr.forum.delete_user.text`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.text%22)

> Are you sure you want to erase {username}'s account?
>
> This action is irreversible.
>

```diff
-Bist du sicher, dass du {username}s Konto löschen möchtest?
+Sind Sie sicher, dass Sie {username}s Konto löschen möchten?

 Dieser Vorgang kann nicht rückgängig gemacht werden.

```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> {username}s Konto löschen <del>möchtest?</del><ins>möchten?</ins><br /><br />Dieser Vorgang kann nicht rückgängig gemacht werden.<br />

#### [`flarum-gdpr.forum.erasure_request_confirmed`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_request_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.

```diff
-Du hast deinen Antrag auf Löschung deines Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.
+Sie haben Ihren Antrag auf Löschung Ihres Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> <del>deinen</del><ins>Ihren</ins> Antrag auf Löschung <del>deines</del><ins>Ihres</ins> Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.

#### [`flarum-gdpr.forum.notification.export-ready`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.notification.export-ready%22)

> Your data export for {username} is now ready to download.

```diff
-Dein Datenexport für {username} ist bereit zum Download.
+Ihr Datenexport für {username} ist bereit zum Download.
```

<del>Dein</del><ins>Ihr</ins> Datenexport für {username} ist bereit zum Download.

#### [`flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation%22)

> You should have received an email to confirm your account erasure request.
>

```diff
-Du solltest eine E-Mail zur Bestätigung deiner Löschanfrage erhalten haben.
+Sie sollten eine E-Mail zur Bestätigung Ihrer Löschanfrage erhalten haben.

```

<del>Du</del><ins>Sie</ins> <del>solltest</del><ins>sollten</ins> eine E-Mail zur Bestätigung <del>deiner</del><ins>Ihrer</ins> Löschanfrage erhalten haben.<br />

#### [`flarum-gdpr.forum.request_erasure.status.user_confirmed`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.user_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.
>

```diff
-Du hast deinen Antrag zur Löschung deines Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.
+Sie haben Ihren Antrag zur Löschung Ihres Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.

```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> <del>deinen</del><ins>Ihren</ins> Antrag zur Löschung <del>deines</del><ins>Ihres</ins> Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.<br />

#### [`flarum-gdpr.forum.settings.export_data_help`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_help%22)

> Requesting data export will provide you with a downloadable copy of all the information associated with your account. This includes posts, comments, and profile details.

```diff
-Wenn du den Datenexport anforderst, erhältst du eine herunterladbare Kopie aller mit deinem Konto verbundenen Informationen. Dazu gehören Beiträge, Kommentare und Profilangaben.
+Wenn Sie den Datenexport anfordern, erhalten Sie eine herunterladbare Kopie aller mit Ihrem Konto verbundenen Informationen. Dazu gehören Beiträge, Kommentare und Profilangaben.
```

Wenn <del>du</del><ins>Sie</ins> den Datenexport <del>anforderst,</del><ins>anfordern,</ins> <del>erhältst</del><ins>erhalten</ins> <del>du</del><ins>Sie</ins> eine herunterladbare Kopie aller mit <del>deinem</del><ins>Ihrem</ins> Konto verbundenen Informationen. Dazu gehören Beiträge, Kommentare und Profilangaben.

#### [`flarum-gdpr.forum.settings.request_erasure_help`](https://weblate.rob006.net/translate/flarum/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_help%22)

> Requesting erasure will permanently delete your account and all associated data. This action is irreversible. Before proceeding, ensure you have saved any content you wish to keep.

```diff
-Wenn du die Löschung beantragst, werden dein Konto und alle damit verbundenen Daten endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden. Vergewissere dich, bevor du fortfährst, dass du alle Inhalte, die du behalten möchtest, gespeichert hast.
+Wenn Sie die Löschung beantragen, werden Ihr Konto und alle damit verbundenen Daten endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden. Vergewissern Sie sich, bevor Sie fortfahren, dass Sie alle Inhalte, die Sie behalten möchten, gespeichert haben.
```

Wenn <del>du</del><ins>Sie</ins> die Löschung <del>beantragst,</del><ins>beantragen,</ins> werden <del>dein</del><ins>Ihr</ins> Konto und alle damit verbundenen Daten endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden. <del>Vergewissere</del><ins>Vergewissern</ins> <del>dich,</del><ins>Sie sich,</ins> bevor <del>du</del><ins>Sie</ins> <del>fortfährst,</del><ins>fortfahren,</ins> dass <del>du</del><ins>Sie</ins> alle Inhalte, die <del>du</del><ins>Sie</ins> behalten <del>möchtest,</del><ins>möchten,</ins> gespeichert <del>hast.</del><ins>haben.</ins>


### `flarum-likes`

#### [`flarum-likes.admin.settings.like_own_posts_help`](https://weblate.rob006.net/translate/flarum/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.admin.settings.like_own_posts_help%22)

> When enabled, subject to permission, users may 'like' their own posts on the forum. To prevent users placing a 'like' on their own posts, disable this setting.

```diff
-Sofern aktiviert, können Benutzer ihre eigenen Beiträge im Forum mit einem 'Gefällt mir' versehen, wenn sie dazu berechtigt sind. Deaktiviere diese Option um zu verhindern, dass Benutzer ihre eigenen Beiträge mit einem 'Gefällt mir' versehen.
+Sofern aktiviert, können Benutzer ihre eigenen Beiträge im Forum mit einem 'Gefällt mir' versehen, wenn sie dazu berechtigt sind. Deaktivieren Sie diese Option, um zu verhindern, dass Benutzer ihre eigenen Beiträge mit einem 'Gefällt mir' versehen.
```

Sofern aktiviert, können Benutzer ihre eigenen Beiträge im Forum mit einem 'Gefällt mir' versehen, wenn sie dazu berechtigt sind. <del>Deaktiviere</del><ins>Deaktivieren Sie</ins> diese <del>Option</del><ins>Option,</ins> um zu verhindern, dass Benutzer ihre eigenen Beiträge mit einem 'Gefällt mir' versehen.

#### [`flarum-likes.forum.notifications.post_liked_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.forum.notifications.post_liked_text%22)

> {username} liked your post

```diff
-{username} gefällt dein Beitrag
+{username} gefällt Ihr Beitrag
```

{username} gefällt <del>dein</del><ins>Ihr</ins> Beitrag

#### [`flarum-likes.forum.post.you_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.forum.post.you_text%22)

> =&gt; core.ref.you

```diff
-Dir
+Ihnen
```

#### [`flarum-likes.forum.settings.notify_post_liked_label`](https://weblate.rob006.net/translate/flarum/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.forum.settings.notify_post_liked_label%22)

> Someone likes one of my posts

```diff
-Jemandem gefällt dein Beitrag
+Jemandem gefällt Ihr Beitrag
```

Jemandem gefällt <del>dein</del><ins>Ihr</ins> Beitrag


### `flarum-lock`

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum/flarum-lock/de@formal/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Jemand hat eine Diskussion von dir geschlossen
+Jemand hat eine Ihrer Diskussionen geschlossen
```

Jemand hat eine <del>Diskussion von</del><ins>Ihrer</ins> <del>dir</del><ins>Diskussionen</ins> geschlossen


### `flarum-mentions`

#### [`flarum-mentions.email.group_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.body%22)

> Hey {recipient\_display\_name}!
>
> {mentioner\_display\_name} mentioned a group you're a member of in {title}.
>
> {url}
>
> \---
>
> {content}
>

```diff
-Hallo {recipient_display_name}!
+Sehr geehrte/r {recipient_display_name},

-{mentioner_display_name} hat in {title} eine Gruppe erwähnt, in der du Mitglied bist.
+{mentioner_display_name} hat in {title} eine Gruppe erwähnt, in der Sie Mitglied sind.

 {url}

 ---

 {content}

```

<del>Hallo</del><ins>Sehr</ins> <del>{recipient\_display\_name}!</del><ins>geehrte/r {recipient\_display\_name},</ins><br /><br />{mentioner\_display\_name} hat in {title} eine Gruppe erwähnt, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist.</del><ins>sind.</ins><br /><br />{url}<br /><br />---<br /><br />{content}<br />

#### [`flarum-mentions.email.group_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.subject%22)

> {mentioner\_display\_name} mentioned a group you're a member of in {title}

```diff
-{mentioner_display_name} hat in {title} eine Gruppe erwähnt, in der du Mitglied bist
+{mentioner_display_name} hat in {title} eine Gruppe erwähnt, in der Sie Mitglied sind
```

{mentioner\_display\_name} hat in {title} eine Gruppe erwähnt, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist</del><ins>sind</ins>

#### [`flarum-mentions.email.post_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.body%22)

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
-Hallo {recipient_display_name}!
+Sehr geehrte/r {recipient_display_name},

-{replier_display_name} hat auf deinen Beitrag (#{post_number}) in {title} geantwortet.
+{replier_display_name} hat auf Ihren Beitrag (#{post_number}) in {title} geantwortet.

 {url}

 ---

 {content}

```

<del>Hallo</del><ins>Sehr</ins> <del>{recipient\_display\_name}!</del><ins>geehrte/r {recipient\_display\_name},</ins><br /><br />{replier\_display\_name} hat auf <del>deinen</del><ins>Ihren</ins> Beitrag (#{post\_number}) in {title} geantwortet.<br /><br />{url}<br /><br />---<br /><br />{content}<br />

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} hat auf deinen Beitrag in {title} geantwortet
+{replier_display_name} hat auf Ihren Beitrag in {title} geantwortet
```

{replier\_display\_name} hat auf <del>deinen</del><ins>Ihren</ins> Beitrag in {title} geantwortet

#### [`flarum-mentions.email.user_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.body%22)

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
-Hallo {recipient_display_name}!
+Sehr geehrte/r {recipient_display_name},

-{mentioner_display_name} hat dich in der Diskussion {title} erwähnt.
+{mentioner_display_name} hat Sie in der Diskussion {title} erwähnt.

 {url}

 ---

 {content}

```

<del>Hallo</del><ins>Sehr</ins> <del>{recipient\_display\_name}!</del><ins>geehrte/r {recipient\_display\_name},</ins><br /><br />{mentioner\_display\_name} hat <del>dich</del><ins>Sie</ins> in der Diskussion {title} erwähnt.<br /><br />{url}<br /><br />---<br /><br />{content}<br />

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mentioner_display_name} hat dich in {title} erwähnt
+{mentioner_display_name} hat Sie in {title} erwähnt
```

{mentioner\_display\_name} hat <del>dich</del><ins>Sie</ins> in {title} erwähnt

#### [`flarum-mentions.forum.notifications.group_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.group_mentioned_text%22)

> {username} mentioned a group you're a member of

```diff
-{username} hat eine Gruppe erwähnt, in der du Mitglied bist
+{username} hat eine Gruppe erwähnt, in der Sie Mitglied sind
```

{username} hat eine Gruppe erwähnt, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist</del><ins>sind</ins>

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
-{username} {count, plural, one {hat} other {haben}} auf deinen Beitrag geantwortet
+{username} hat auf Ihren Beitrag geantwortet
```

{username} <del>{count, plural, one {hat} other {haben}}</del><ins>hat</ins> auf <del>deinen</del><ins>Ihren</ins> Beitrag geantwortet

#### [`flarum-mentions.forum.notifications.user_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.user_mentioned_text%22)

> {username} mentioned you

```diff
-{username} hat dich erwähnt
+{username} hat Sie erwähnt
```

{username} hat <del>dich</del><ins>Sie</ins> erwähnt

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{users} {count, plural, one {hast} other {haben}} auf diesen Beitrag geantwortet.
+{users} haben auf diesen Beitrag geantwortet.
```

{users} <del>{count, plural, one {hast} other {haben}}</del><ins>haben</ins> auf diesen Beitrag geantwortet.

#### [`flarum-mentions.forum.post.mentioned_by_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_text%22)

> {users} replied to this.

```diff
-{users} {count, plural, one {hat} other {haben}} auf diesen Beitrag geantwortet.
+{users} haben auf diesen Beitrag geantwortet.
```

{users} <del>{count, plural, one {hat} other {haben}}</del><ins>haben</ins> auf diesen Beitrag geantwortet.

#### [`flarum-mentions.forum.settings.notify_group_mentioned_label`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_group_mentioned_label%22)

> Someone mentions a group I'm a member of in a post

```diff
-Jemand erwähnt in einem Beitrag eine Gruppe, in der du Mitglied bist
+Jemand erwähnt in einem Beitrag eine Gruppe, in der Sie Mitglied sind
```

Jemand erwähnt in einem Beitrag eine Gruppe, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist</del><ins>sind</ins>

#### [`flarum-mentions.forum.settings.notify_post_mentioned_label`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_post_mentioned_label%22)

> Someone replies to one of my posts

```diff
-Jemand hat auf deinen Beitrag geantwortet
+Jemand hat auf Ihren Beitrag geantwortet
```

Jemand hat auf <del>deinen</del><ins>Ihren</ins> Beitrag geantwortet

#### [`flarum-mentions.forum.settings.notify_user_mentioned_label`](https://weblate.rob006.net/translate/flarum/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_user_mentioned_label%22)

> Someone mentions me in a post

```diff
-Jemand hat dich in einem Beitrag erwähnt
+Jemand hat Sie in einem Beitrag erwähnt
```

Jemand hat <del>dich</del><ins>Sie</ins> in einem Beitrag erwähnt


### `flarum-nicknames`

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum/flarum-nicknames/de@formal/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-Du musst "nickname" als den Anzeigenamen-Treiber in den <a><strong>Grundeinstellungen</strong></a> auswählen, damit diese Erweiterung wirksam wird.
+Sie müssen "nickname" als den Anzeigenamen-Treiber in den <a><strong>Grundeinstellungen</strong></a> auswählen, damit diese Erweiterung wirksam wird.
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> "nickname" als den Anzeigenamen-Treiber in den &lt;a&gt;&lt;strong&gt;Grundeinstellungen&lt;/strong&gt;&lt;/a&gt; auswählen, damit diese Erweiterung wirksam wird.

#### [`flarum-nicknames.api.invalid_nickname_message`](https://weblate.rob006.net/translate/flarum/flarum-nicknames/de@formal/?q=context%3A%3D%22flarum-nicknames.api.invalid_nickname_message%22)

> This nickname is invalid. Please contact your forum administrator for more information on nickname rules.

```diff
-Dieser Spitzname ist ungültig. Bitte wende dich an deinen Forenadministrator, um weitere Informationen zu den Regeln für Spitznamen zu erhalten.
+Dieser Spitzname ist ungültig. Bitte wenden Sie sich an Ihren Forenadministrator, um weitere Informationen zu den Regeln für Spitznamen zu erhalten.
```

Dieser Spitzname ist ungültig. Bitte <del>wende</del><ins>wenden</ins> <del>dich</del><ins>Sie sich</ins> an <del>deinen</del><ins>Ihren</ins> Forenadministrator, um weitere Informationen zu den Regeln für Spitznamen zu erhalten.


### `flarum-pusher`

#### [`flarum-pusher.admin.pusher_settings.app_id_label`](https://weblate.rob006.net/translate/flarum/flarum-pusher/de@formal/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_id_label%22)

> App ID

```diff
-App ID
+App-ID
```

#### [`flarum-pusher.admin.pusher_settings.app_key_label`](https://weblate.rob006.net/translate/flarum/flarum-pusher/de@formal/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_key_label%22)

> App Key

```diff
-App Key
+App-Schlüssel
```

#### [`flarum-pusher.admin.pusher_settings.app_secret_label`](https://weblate.rob006.net/translate/flarum/flarum-pusher/de@formal/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_secret_label%22)

> App Secret

```diff
-App Secret
+App-Secret
```


### `flarum-statistics`

#### [`flarum-statistics.admin.date_selection_modal.description`](https://weblate.rob006.net/translate/flarum/flarum-statistics/de@formal/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.description%22)

> Pick a custom date range to display statistics for. Loading data may take
> multiple minutes on forums with a lot of activity.
>

```diff
-Wähle einen benutzerdefinierten Datumsbereich, für den du Statistiken anzeigen möchtest.
+Wählen Sie einen benutzerdefinierten Datumsbereich, für den Sie Statistiken anzeigen möchten.
 Das Laden der Daten kann bei Foren mit viel Aktivität mehrere Minuten dauern.

```

<del>Wähle</del><ins>Wählen Sie</ins> einen benutzerdefinierten Datumsbereich, für den <del>du</del><ins>Sie</ins> Statistiken anzeigen <del>möchtest.</del><ins>möchten.</ins><br />Das Laden der Daten kann bei Foren mit viel Aktivität mehrere Minuten dauern.<br />


### `flarum-subscriptions`

#### [`flarum-subscriptions.email.new_post.body`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.email.new_post.body%22)

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
-Hallo {recipient_display_name}!
+Sehr geehrte/r {recipient_display_name},

-{poster_display_name} hat einen Beitrag in einer Diskussion verfasst, der du folgst: {title}.
+{poster_display_name} hat einen Beitrag in einer Diskussion verfasst, der Sie folgen: {title}.

-Folge dem untenstehenden Link, um die neue Aktivität zu sehen:
+Bitte folgen Sie dem untenstehenden Link, um die neue Aktivität zu sehen:
 {url}

 ---

 {content}

 ---

-Du wirst keine weiteren Benachrichtigungen über diese Diskussion erhalten, bis du wieder auf dem Laufenden bist.
+Sie werden keine weiteren Benachrichtigungen über diese Diskussion erhalten, bis Sie sie wieder besucht haben.

```

<del>Hallo</del><ins>Sehr</ins> <del>{recipient\_display\_name}!</del><ins>geehrte/r {recipient\_display\_name},</ins><br /><br />{poster\_display\_name} hat einen Beitrag in einer Diskussion verfasst, der <del>du</del><ins>Sie</ins> <del>folgst:</del><ins>folgen:</ins> {title}.<br /><br /><del>Folge</del><ins>Bitte folgen Sie</ins> dem untenstehenden Link, um die neue Aktivität zu sehen:<br />{url}<br /><br />---<br /><br />{content}<br /><br />---<br /><br /><del>Du</del><ins>Sie</ins> <del>wirst</del><ins>werden</ins> keine weiteren Benachrichtigungen über diese Diskussion erhalten, bis<del> du</del> <del>wieder</del><ins>Sie</ins> <del>auf</del><ins>sie</ins> <del>dem</del><ins>wieder</ins> <del>Laufenden</del><ins>besucht</ins> <del>bist.</del><ins>haben.</ins><br />

#### [`flarum-subscriptions.forum.index.following_link`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.forum.index.following_link%22)

> =&gt; flarum-subscriptions.ref.following

```diff
-Du folgst
+Sie folgen
```

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Diskussionen automatisch folgen, an denen ich teilgenommen habe
+Diskussionen automatisch folgen, an denen Sie teilgenommen haben
```

Diskussionen automatisch folgen, an denen <del>ich</del><ins>Sie</ins> teilgenommen <del>habe</del><ins>haben</ins>

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Jemand hat in einer Diskussion geantwortet, der du folgst
+Jemand hat in einer Diskussion geantwortet, der Sie folgen
```

Jemand hat in einer Diskussion geantwortet, der <del>du</del><ins>Sie</ins> <del>folgst</del><ins>folgen</ins>


### `flarum-suspend`

#### [`flarum-suspend.email.suspended.body`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.email.suspended.body%22)

> Hey {recipient\_display\_name},
>
> You have been suspended for the following reason:
>
> \---
> {suspension\_message}
> \---
>

```diff
-Hallo {recipient_display_name},
+Sehr geehrte/r {recipient_display_name},

-Du wurdest aus folgendem Grund ausgeschlossen:
+Sie wurden aus folgendem Grund ausgeschlossen:

 ---
 {suspension_message}
 ---

```

<del>Hallo</del><ins>Sehr geehrte/r</ins> {recipient\_display\_name},<br /><br /><del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> aus folgendem Grund ausgeschlossen:<br /><br />---<br />{suspension\_message}<br />---<br />

#### [`flarum-suspend.email.suspended.subject`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.email.suspended.subject%22)

> Your account has been suspended

```diff
-Dein Konto wurde ausgeschlossen
+Ihr Konto wurde ausgeschlossen
```

<del>Dein</del><ins>Ihr</ins> Konto wurde ausgeschlossen

#### [`flarum-suspend.email.unsuspended.body`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.email.unsuspended.body%22)

> Hey {recipient\_display\_name},
>
> You have been unsuspended. You can head back to the forum by clicking on the following link:
>
> {forum\_url}
>

```diff
-Hallo {recipient_display_name},
+Sehr geehrte/r {recipient_display_name},

-Dein Ausschluss wurde aufgehoben. Du kannst zum Forum zurückkehren, indem Du auf den folgenden Link klickst:
+Ihr Ausschluss wurde aufgehoben. Sie können zum Forum zurückkehren, indem Sie auf den folgenden Link klicken:

 {forum_url}

```

<del>Hallo</del><ins>Sehr geehrte/r</ins> {recipient\_display\_name},<br /><br /><del>Dein</del><ins>Ihr</ins> Ausschluss wurde aufgehoben. <del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> zum Forum zurückkehren, indem <del>Du</del><ins>Sie</ins> auf den folgenden Link <del>klickst:</del><ins>klicken:</ins><br /><br />{forum\_url}<br />

#### [`flarum-suspend.email.unsuspended.subject`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.email.unsuspended.subject%22)

> Your account has been unsuspended

```diff
-Der Ausschluss deines Kontos wurde aufgehoben
+Die Ausschluss Ihres Kontos wurde aufgehoben
```

<del>Der</del><ins>Die</ins> Ausschluss <del>deines</del><ins>Ihres</ins> Kontos wurde aufgehoben

#### [`flarum-suspend.forum.notifications.user_suspended_indefinite_text`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_indefinite_text%22)

> You have been suspended indefinitely

```diff
-Du wurdest für unbestimmte Zeit ausgeschlossen
+Sie wurden für unbestimmte Zeit ausgeschlossen
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> für unbestimmte Zeit ausgeschlossen

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
-Du wurdest für {timeReadable} ausgeschlossen
+Sie wurden für {timeReadable} ausgeschlossen
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> für {timeReadable} ausgeschlossen

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
-Du wurdest entsperrt
+Sie wurden entsperrt
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> entsperrt


### `flarum-tags`

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-Ordne die Liste der Themen um die Diskussionen zu organisieren.
+Ordnen Sie die Liste der Themen um die Diskussionen zu organisieren.
```

<del>Ordne</del><ins>Ordnen Sie</ins> die Liste der Themen um die Diskussionen zu organisieren.

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Gib die minimale und die maximale Anzahl von Hauptthemen an, die einer Diskussion hinzugefügt werden können.
+Geben Sie die minimale und die maximale Anzahl von Hauptthemen an, die einer Diskussion hinzugefügt werden können.
```

<del>Gib</del><ins>Geben Sie</ins> die minimale und die maximale Anzahl von Hauptthemen an, die einer Diskussion hinzugefügt werden können.

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Gib die minimale und die maximale Anzahl von Unterthemen an, die einer Diskussion hinzugefügt werden können.
+Geben Sie die minimale und die maximale Anzahl von Unterthemen an, die einer Diskussion hinzugefügt werden können.
```

<del>Gib</del><ins>Geben Sie</ins> die minimale und die maximale Anzahl von Unterthemen an, die einer Diskussion hinzugefügt werden können.

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
-{count, plural, one {Wähle ein primäres Thema} other {Wähle # primäre Themen}}
+{count, plural, one {Wählen Sie ein primäres Thema} other {Wählen Sie # primäre Themen}}
```

{count, plural, one <del>{Wähle</del><ins>{Wählen Sie</ins> ein primäres Thema} other <del>{Wähle</del><ins>{Wählen Sie</ins> # primäre Themen}}

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
-{count, plural, one {Wähle ein Thema mehr} other {Wähle # mehr Themen}}
+{count, plural, one {Wählen Sie ein Thema mehr} other {Wählen Sie # mehr Themen}}
```

{count, plural, one <del>{Wähle</del><ins>{Wählen Sie</ins> ein Thema mehr} other <del>{Wähle</del><ins>{Wählen Sie</ins> # mehr Themen}}


### `fof-byobu`

#### [`fof-byobu.forum.confirm.make_public`](https://weblate.rob006.net/translate/flarum/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.confirm.make_public%22)

> Are you sure you want to remove the recipients and make this discussion visible to anyone who can view the assigned tag?

```diff
-Dadurch wird diese private Diskussion für alle sichtbar. Überlege, ob dies die richtige Handlung ist, bevor du fortfährst.
+Dadurch wird diese private Diskussion für alle sichtbar. Überlegen Sie, ob dies die richtige Handlung ist, bevor Sie fortfahren.
```

Dadurch wird diese private Diskussion für alle sichtbar. <del>Überlege,</del><ins>Überlegen Sie,</ins> ob dies die richtige Handlung ist, bevor <del>du</del><ins>Sie</ins> <del>fortfährst.</del><ins>fortfahren.</ins>


### `fof-cookie-consent`

#### [`fof-cookie-consent.admin.settings.buttonText`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.buttonText%22)

> Dismiss Button Text

```diff
-Schaltflächentext verwerfen
+Text der Schaltfläche ‚Schließen‘
```

#### [`fof-cookie-consent.admin.settings.ccTheme`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.ccTheme%22)

> Theme

```diff
-Theme
+Design
```

#### [`fof-cookie-consent.admin.settings.configuration_button_title`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.configuration_button_title%22)

> Learn More Button

```diff
-Schaltfläche Weitere Informationen
+Schaltfläche: Mehr erfahren
```

#### [`fof-cookie-consent.admin.settings.configuration_title`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.configuration_title%22)

> Configuration Options

```diff
-Einstellmöglichkeiten
+Einstellungen
```

#### [`fof-cookie-consent.admin.settings.theme_dismiss_title`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.theme_dismiss_title%22)

> Dismiss Button Colors

```diff
-Schaltfläche Farben verwerfen
+Farben der Schaltfläche ‚Schließen‘
```

<del>Schaltfläche </del>Farben <del>verwerfen</del><ins>der Schaltfläche ‚Schließen‘</ins>

#### [`fof-cookie-consent.admin.settings.theme_popup_title`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.theme_popup_title%22)

> Popup Colors

```diff
-Popup-Farben
+Farben für Popups
```

#### [`fof-cookie-consent.admin.settings.theme_title`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.theme_title%22)

> Theme Options

```diff
-Themenoptionen
+Design Einstellungen
```

#### [`fof-cookie-consent.admin.settings.themes.blocky`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.themes.blocky%22)

> Blocky

```diff
-Blockig
+Blockartig
```

#### [`fof-cookie-consent.admin.settings.themes.edgeless`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.themes.edgeless%22)

> Edgeless

```diff
-Kantenlos
+Abgerundet
```

#### [`fof-cookie-consent.admin.settings.themes.no_css`](https://weblate.rob006.net/translate/flarum/fof-cookie-consent/de@formal/?q=context%3A%3D%22fof-cookie-consent.admin.settings.themes.no_css%22)

> No CSS

```diff
-Kein CSS
+Ohne CSS-Styling
```


### `fof-discussion-templates`

#### [`fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates`](https://weblate.rob006.net/translate/flarum/fof-discussion-templates/de@formal/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates%22)

> Manage reply templates for their discussions

```diff
-Antwortvorlagen für deine Diskussionen verwalten
+Antwortvorlagen für Ihre Diskussionen verwalten
```

Antwortvorlagen für <del>deine</del><ins>Ihre</ins> Diskussionen verwalten

#### [`fof-discussion-templates.admin.settings.append_template_on_tag_change`](https://weblate.rob006.net/translate/flarum/fof-discussion-templates/de@formal/?q=context%3A%3D%22fof-discussion-templates.admin.settings.append_template_on_tag_change%22)

> Append template on tag change?

```diff
-Vorlage bei Themen-Änderung anhängen?
+Vorlage bei Thema-Änderung anhängen?
```

Vorlage bei <del>Themen-Änderung</del><ins>Thema-Änderung</ins> anhängen?

#### [`fof-discussion-templates.admin.tags.tag_template_text`](https://weblate.rob006.net/translate/flarum/fof-discussion-templates/de@formal/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_text%22)

> Manage a template for new discussions in this tag.

```diff
-Verwalte eine Vorlage für neue Diskussionen in diesem Thema.
+Verwalten Sie eine Vorlage für neue Diskussionen in diesem Thema.
```

<del>Verwalte</del><ins>Verwalten Sie</ins> eine Vorlage für neue Diskussionen in diesem Thema.


### `fof-impersonate`

#### [`fof-impersonate.lib.modal.placeholder_optional`](https://weblate.rob006.net/translate/flarum/fof-impersonate/de@formal/?q=context%3A%3D%22fof-impersonate.lib.modal.placeholder_optional%22)

> (Optional) Provide your reason for switching to this user

```diff
-(Optional) Gib einen Grund für den Wechsel zu diesem Benutzer an.
+(Optional) Geben Sie einen Grund für den Wechsel zu diesem Benutzer an.
```

(Optional) <del>Gib</del><ins>Geben Sie</ins> einen Grund für den Wechsel zu diesem Benutzer an.


### `fof-links`

#### [`fof-links.admin.edit_link.delete_link_confirmation`](https://weblate.rob006.net/translate/flarum/fof-links/de@formal/?q=context%3A%3D%22fof-links.admin.edit_link.delete_link_confirmation%22)

> Are you sure you want to delete this link?

```diff
-Bist du sicher, dass du diesen Link löschen möchtest?
+Sind Sie sicher, dass Sie diesen Link löschen möchten?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diesen Link löschen <del>möchtest?</del><ins>möchten?</ins>

#### [`fof-links.admin.edit_link.icon_additional_text`](https://weblate.rob006.net/translate/flarum/fof-links/de@formal/?q=context%3A%3D%22fof-links.admin.edit_link.icon_additional_text%22)

> If you want to use a brand icon, the prefix is &lt;code&gt;fab fa-&lt;/code&gt; instead.

```diff
-Wenn du ein Markensymbol verwenden möchtest, lautet das Präfix stattdessen <code>fab fa-</code>.
+Wenn Sie ein Markensymbol verwenden möchten, lautet der Präfix stattdessen <code>fab-fa-</code>.
```

Wenn <del>du</del><ins>Sie</ins> ein Markensymbol verwenden <del>möchtest,</del><ins>möchten,</ins> lautet <del>das</del><ins>der</ins> Präfix stattdessen<del> &lt;code&gt;fab</del> <del>fa-&lt;/code&gt;.</del><ins>&lt;code&gt;fab-fa-&lt;/code&gt;.</ins>


### `fof-move-posts`

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum/fof-move-posts/de@formal/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
-Du bist dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem du den Titel, die Themen oder andere Attribute änderst. Möchtest du fortfahren?
+Sie sind dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem Sie den Titel, die Themen oder andere Attribute ändern. Möchten Sie fortfahren?
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem <del>du</del><ins>Sie</ins> den Titel, die Themen oder andere Attribute <del>änderst.</del><ins>ändern.</ins> <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> fortfahren?


### `fof-oauth`

#### [`fof-oauth.admin.settings.providers.twitter.api_secret_label`](https://weblate.rob006.net/translate/flarum/fof-oauth/de@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.twitter.api_secret_label%22)

> API Secret

```diff
-API Secret
+API-Secret
```

#### [`fof-oauth.ref.settings.app_id`](https://weblate.rob006.net/translate/flarum/fof-oauth/de@formal/?q=context%3A%3D%22fof-oauth.ref.settings.app_id%22)

> App ID

```diff
-App ID
+App-ID
```

#### [`fof-oauth.ref.settings.app_secret`](https://weblate.rob006.net/translate/flarum/fof-oauth/de@formal/?q=context%3A%3D%22fof-oauth.ref.settings.app_secret%22)

> App Secret

```diff
-App Secret
+App-Secret
```

#### [`fof-oauth.ref.settings.client_secret`](https://weblate.rob006.net/translate/flarum/fof-oauth/de@formal/?q=context%3A%3D%22fof-oauth.ref.settings.client_secret%22)

> Client Secret

```diff
-Client Secret
+Client-Secret
```


### `fof-profile-image-crop`

#### [`fof-profile-image-crop.forum.modal.error.get_image_data`](https://weblate.rob006.net/translate/flarum/fof-profile-image-crop/de@formal/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.error.get_image_data%22)

> Failed to crop. Make sure your browser's fingerprinting protection is disabled.

```diff
-Zuschneiden fehlgeschlagen. Stelle sicher das der Fingerprinting-Schutz deines Browsers deaktiviert ist.
+Zuschneiden fehlgeschlagen. Stellen Sie sicher das der Fingerprinting-Schutz Ihres Browsers deaktiviert ist.
```

Zuschneiden fehlgeschlagen. <del>Stelle</del><ins>Stellen Sie</ins> sicher das der Fingerprinting-Schutz <del>deines</del><ins>Ihres</ins> Browsers deaktiviert ist.

#### [`fof-profile-image-crop.forum.modal.help_text`](https://weblate.rob006.net/translate/flarum/fof-profile-image-crop/de@formal/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.help_text%22)

> The image upload may fail if your browser's privacy settings are very strict. If you're having trouble, try disabling fingerprinting protection. Otherwise, you can either &lt;disableResize&gt;disable compressing the cropped image&lt;/disableResize&gt; or &lt;disableCrop&gt;disable cropping altogether&lt;/disableCrop&gt;.
>

```diff
-Das Hochladen von Bildern kann fehlschlagen, wenn die Datenschutzeinstellungen deines Browsers sehr streng sind. Hast du Probleme, Versuche den Fingerprinting-Schutz zu deaktivieren. Ansonsten kannst du auch <disableResize>die Komprimierung des zugeschnittenen Bildes deaktivieren</disableResize> oder <disableCrop>das Zuschneiden ganz deaktivieren</disableCrop>.
+Das Hochladen von Bildern kann fehlschlagen, wenn die Datenschutzeinstellungen Ihres Browsers sehr streng sind. Wenn Sie Probleme haben, versuchen Sie den Fingerprinting-Schutz zu deaktivieren. Ansonsten können Sie auch <disableResize>die Komprimierung des zugeschnittenen Bildes deaktivieren</disableResize> oder <disableCrop>das Zuschneiden ganz deaktivieren</disableCrop>.

```

Das Hochladen von Bildern kann fehlschlagen, wenn die Datenschutzeinstellungen <del>deines</del><ins>Ihres</ins> Browsers sehr streng sind. <del>Hast</del><ins>Wenn</ins> <del>du</del><ins>Sie</ins> <del>Probleme,</del><ins>Probleme</ins> <del>Versuche</del><ins>haben, versuchen Sie</ins> den Fingerprinting-Schutz zu deaktivieren. Ansonsten <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> auch &lt;disableResize&gt;die Komprimierung des zugeschnittenen Bildes deaktivieren&lt;/disableResize&gt; oder &lt;disableCrop&gt;das Zuschneiden ganz deaktivieren&lt;/disableCrop&gt;.<br />


### `fof-username-request`

#### [`fof-username-request.forum.nickname_modals.action.success`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.success%22)

> Decision sent.

```diff
-=> fof-username-request.ref.action.success
+Entscheidung gesendet.
```

#### [`fof-username-request.forum.nickname_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.confirmation_message%22)

> Your nickname change request has been submitted and is pending approval.

```diff
-=> fof-username-request.ref.request.confirmation_message
+Ihr Antrag auf Änderung des Spitznamens wurde übermittelt und wartet auf seine Genehmigung.
```

#### [`fof-username-request.forum.nickname_modals.request.deleted`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.deleted%22)

> Nickname request deleted.

```diff
-=> fof-username-request.ref.request.deleted
+Anfrage zum Spitznamen gelöscht.
```

#### [`fof-username-request.forum.nickname_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.resubmit%22)

> At this time you may resubmit a new nickname change request from your account settings if you so choose to.

```diff
-=> fof-username-request.ref.results.resubmit
+Sie können jetzt über Ihre Kontoeinstellungen einen neuen Antrag auf Änderung des Spitznamens stellen, falls Sie dies wünschen.
```

#### [`fof-username-request.forum.username_modals.action.success`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.success%22)

> Decision sent.

```diff
-=> fof-username-request.ref.action.success
+Entscheidung versendet.
```

#### [`fof-username-request.forum.username_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.confirmation_message%22)

> Your username change request has been submitted and is pending approval.

```diff
-=> fof-username-request.ref.request.confirmation_message
+Ihr Antrag auf Änderung des Benutzernamens wurde übermittelt und wartet auf Genehmigung.
```

#### [`fof-username-request.forum.username_modals.request.deleted`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.deleted%22)

> Username request deleted.

```diff
-=> fof-username-request.ref.request.deleted
+Anfrage auf Änderung des Benutzernamens wurde gelöscht.
```

#### [`fof-username-request.forum.username_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.resubmit%22)

> At this time you may resubmit a new username change request from your account settings if you so choose to.

```diff
-=> fof-username-request.ref.results.resubmit
+Sie können jetzt, wenn Sie möchten, über Ihre Kontoeinstellungen einen neuen Antrag auf Änderung des Benutzernamens stellen.
```


### `forumaker-magicbb`

#### [`forumaker-magicbb.admin.settings.bb_iframe_help`](https://weblate.rob006.net/translate/flarum/forumaker-magicbb/de@formal/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe_help%22)

> Allows embedding iframes from any source. Use with caution — embedded content may include external scripts. 🧹 After changing this setting, please clear the Flarum cache

```diff
-Ermöglicht das Einbetten von iFrames aus beliebigen Quellen. Mit Vorsicht verwenden – eingebettete Inhalte können externe Skripte enthalten. 🧹 Bitte leere nach dem Ändern dieser Einstellung den Flarum-Cache.
+Ermöglicht das Einbetten von iFrames aus beliebigen Quellen. Mit Vorsicht verwenden – eingebettete Inhalte können externe Skripte enthalten. 🧹 Bitte leeren Sie nach dem Ändern dieser Einstellung den Flarum-Cache.
```

Ermöglicht das Einbetten von iFrames aus beliebigen Quellen. Mit Vorsicht verwenden – eingebettete Inhalte können externe Skripte enthalten. 🧹 Bitte <del>leere</del><ins>leeren Sie</ins> nach dem Ändern dieser Einstellung den Flarum-Cache.


### `ianm-follow-users`

#### [`ianm-follow-users.forum.followers`](https://weblate.rob006.net/translate/flarum/ianm-follow-users/de@formal/?q=context%3A%3D%22ianm-follow-users.forum.followers%22)

> {count, plural, one {Follower} other {Followers}}

```diff
-{count, plural, one {Follower} other {Followers}}
+{count, plural, one {Follower} other {Follower}}
```

{count, plural, one {Follower} other <del>{Followers}}</del><ins>{Follower}}</ins>


### `ianm-level-ranks`

#### [`ianm-level-ranks.admin.settings.levelText`](https://weblate.rob006.net/translate/flarum/ianm-level-ranks/de@formal/?q=context%3A%3D%22ianm-level-ranks.admin.settings.levelText%22)

> Enter the text to be displayed for the points (e.g. Rank, Level)

```diff
-Gebe den Text ein, der für die Punkte angezeigt werden soll (z. B. Rang, Level)
+Geben Sie einen Text ein, der für die Punkte angezeigt werden soll (z.B. Rang, Level)
```

<del>Gebe</del><ins>Geben</ins> <del>den</del><ins>Sie einen</ins> Text ein, der für die Punkte angezeigt werden soll<del> (z.</del> <del>B.</del><ins>(z.B.</ins> Rang, Level)


### `justoverclock-reputation-score`

#### [`justoverclock-reputation-score.admin.settings.flagPointsHelp`](https://weblate.rob006.net/translate/flarum/justoverclock-reputation-score/de@formal/?q=context%3A%3D%22justoverclock-reputation-score.admin.settings.flagPointsHelp%22)

> Insert the number of points that a user earn for reporting posts

```diff
-Gib die Anzahl der Punkte ein, die ein Nutzer für das Melden von Beiträgen erhält.
+Geben Sie die Anzahl der Punkte ein, die ein Nutzer für das Melden von Beiträgen erhält.
```

<del>Gib</del><ins>Geben Sie</ins> die Anzahl der Punkte ein, die ein Nutzer für das Melden von Beiträgen erhält.


### `migratetoflarum-canonical`

#### [`migratetoflarum-canonical.admin.settings.field.wrong_url`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.field.wrong_url%22)

> The extension settings will appear once you access your forum via the canonical URL

```diff
-Die Erweiterungseinstellungen werden angezeigt, sobald Du über die kanonische URL auf Ihr Forum zugreifst
+Die Erweiterungs-Einstellungen werden angezeigt, sobald Sie über die kanonische URL auf Ihr Forum zugreifen
```

Die <del>Erweiterungseinstellungen</del><ins>Erweiterungs-Einstellungen</ins> werden angezeigt, sobald <del>Du</del><ins>Sie</ins> über die kanonische URL auf Ihr Forum <del>zugreifst</del><ins>zugreifen</ins>

#### [`migratetoflarum-canonical.admin.settings.step.admin_on_canonical`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.step.admin_on_canonical%22)

> Access the admin panel via the canonical URL

```diff
-Greife über die kanonische URL auf das Admin-Panel zu
+Greifen Sie über die kanonische URL auf das Admin-Panel zu
```

<del>Greife</del><ins>Greifen Sie</ins> über die kanonische URL auf das Admin-Panel zu

#### [`migratetoflarum-canonical.admin.settings.step.check_config_url`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.step.check_config_url%22)

> Check that the url defined in config.php is your preferred canonical URL (currently: {url})

```diff
-Überprüfe , ob die in config.php definierte URL Ihre bevorzugte kanonische URL ist (derzeit: {url})
+Überprüfen Sie, ob die in der config.php definierte URL Ihre bevorzugte kanonische URL ist (derzeit:{url})
```

<del>Überprüfe</del><ins>Überprüfen</ins> <del>,</del><ins>Sie,</ins> ob die in<ins> der</ins> config.php definierte URL Ihre bevorzugte kanonische URL ist<del> (derzeit:</del> <del>{url})</del><ins>(derzeit:{url})</ins>

#### [`migratetoflarum-canonical.admin.settings.step.enable_temporary`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.step.enable_temporary%22)

> Enable temporary redirect and check everything works

```diff
-Aktiviere die temporäre Weiterleitung und überprüfe, ob alles funktioniert
+Aktivieren Sie die temporäre Weiterleitung und überprüfen Sie, ob alles funktioniert
```

<del>Aktiviere</del><ins>Aktivieren Sie</ins> die temporäre Weiterleitung und <del>überprüfe,</del><ins>überprüfen Sie,</ins> ob alles funktioniert

#### [`migratetoflarum-canonical.admin.settings.step.how_to`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.step.how_to%22)

> How to enable the canonical redirect

```diff
-So aktivierst Du die kanonische Weiterleitung
+So aktivieren Sie die kanonische Weiterleitung
```

So <del>aktivierst</del><ins>aktivieren</ins> <del>Du</del><ins>Sie</ins> die kanonische Weiterleitung

#### [`migratetoflarum-canonical.admin.settings.step.use_hsts`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.step.use_hsts%22)

> Use HSTS to prevent downgrade attacks

```diff
-Verwende HSTS, um Downgrade-Angriffe zu verhindern
+Verwenden Sie HSTS, um Downgrade-Angriffe zu verhindern
```

<del>Verwende</del><ins>Verwenden Sie</ins> HSTS, um Downgrade-Angriffe zu verhindern

#### [`migratetoflarum-canonical.admin.settings.step.use_https`](https://weblate.rob006.net/translate/flarum/migratetoflarum-canonical/de@formal/?q=context%3A%3D%22migratetoflarum-canonical.admin.settings.step.use_https%22)

> Use an HTTPS canonical URL

```diff
-Verwende eine kanonische HTTPS-URL
+Verwenden Sie eine kanonische HTTPS-URL
```

<del>Verwende</del><ins>Verwenden Sie</ins> eine kanonische HTTPS-URL


### `nearata-embed-video`

#### [`nearata-embed-video.admin.settings.options.hotkey`](https://weblate.rob006.net/translate/flarum/nearata-embed-video/de@formal/?q=context%3A%3D%22nearata-embed-video.admin.settings.options.hotkey%22)

> Hotkey

```diff
-Hotkey
+Schnellzugriff
```


### `nearata-maintenance-mode`

#### [`nearata-maintenance-mode.api.title`](https://weblate.rob006.net/translate/flarum/nearata-maintenance-mode/de@formal/?q=context%3A%3D%22nearata-maintenance-mode.api.title%22)

> Currently down for maintenance. Please come back later.

```diff
-Zurzeit wegen Wartungsarbeiten nicht verfügbar. Bitte komm später wieder.
+Zurzeit wegen Wartungsarbeiten nicht verfügbar. Bitte kommen Sie später wieder.
```

Zurzeit wegen Wartungsarbeiten nicht verfügbar. Bitte <del>komm</del><ins>kommen Sie</ins> später wieder.

#### [`nearata-maintenance-mode.views.default.body`](https://weblate.rob006.net/translate/flarum/nearata-maintenance-mode/de@formal/?q=context%3A%3D%22nearata-maintenance-mode.views.default.body%22)

> &lt;p&gt;We're performing some maintenance at the moment. Please come back later.&lt;/p&gt;
>

```diff
-<p>Wir führen gerade Wartungsarbeiten durch. Bitte komm später wieder.</p>
+<p>Wir führen gerade Wartungsarbeiten durch. Bitte kommen Sie später wieder.</p>

```

&lt;p&gt;Wir führen gerade Wartungsarbeiten durch. Bitte <del>komm</del><ins>kommen Sie</ins> später wieder.&lt;/p&gt;<br />


### `resofire-digest-mail`

#### [`resofire-digest-mail.admin.settings.send_window_start_help`](https://weblate.rob006.net/translate/flarum/resofire-digest-mail/de@formal/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_start_help%22)

> The time of day your digest emails will start sending. Choose a quiet period when your forum has low activity — typically late night or early morning.

```diff
-Die Tageszeit, zu der der Versand der Zusammenfassungs-E-Mails beginnt. Wähle eine ruhige Zeit, in der in deinem Forum wenig los ist – in der Regel spätabends oder frühmorgens.
+Die Tageszeit, zu der der Versand der Zusammenfassungs-E-Mails beginnt. Wählen Sie eine ruhige Zeit, in der in Ihrem Forum wenig los ist – in der Regel spätabends oder frühmorgens.
```

Die Tageszeit, zu der der Versand der Zusammenfassungs-E-Mails beginnt. <del>Wähle</del><ins>Wählen Sie</ins> eine ruhige Zeit, in der in <del>deinem</del><ins>Ihrem</ins> Forum wenig los ist – in der Regel spätabends oder frühmorgens.


### `sycho-force-password-reset`

#### [`sycho-force-password-reset.admin.force_password_reset.reset_all_confirm`](https://weblate.rob006.net/translate/flarum/sycho-force-password-reset/de@formal/?q=context%3A%3D%22sycho-force-password-reset.admin.force_password_reset.reset_all_confirm%22)

> Are you sure you want to force all users to reset their password on next login?

```diff
-Bist du sicher, dass du alle Benutzer zwingen möchtest ihr Passwort bei der nächsten Anmeldung zurückzusetzen?
+Sind Sie sicher, dass Sie alle Benutzer dazu zwingen möchten ihr Passwort bei der nächsten Anmeldung zurückzusetzen?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> alle Benutzer<ins> dazu</ins> zwingen <del>möchtest</del><ins>möchten</ins> ihr Passwort bei der nächsten Anmeldung zurückzusetzen?

#### [`sycho-force-password-reset.forum.force_reset_password_description`](https://weblate.rob006.net/translate/flarum/sycho-force-password-reset/de@formal/?q=context%3A%3D%22sycho-force-password-reset.forum.force_reset_password_description%22)

> The site administrator has requested that you reset your password.

```diff
-Der Seitenadministrator fordert dich dazu auf das Passwort zurückzusetzen.
+Der Seitenadministrator fordert Sie dazu auf das Passwort zurücksetzen.
```

Der Seitenadministrator fordert <del>dich</del><ins>Sie</ins> dazu auf das Passwort <del>zurückzusetzen.</del><ins>zurücksetzen.</ins>

#### [`sycho-force-password-reset.forum.new_password_must_be_different`](https://weblate.rob006.net/translate/flarum/sycho-force-password-reset/de@formal/?q=context%3A%3D%22sycho-force-password-reset.forum.new_password_must_be_different%22)

> Your new password must be different from your old password.

```diff
-Dein neues Passwort muss sich von deinem alten Passwort unterscheiden.
+Ihr neues Passwort muss sich von Ihrem aktuellen Passwort unterscheiden.
```

<del>Dein</del><ins>Ihr</ins> neues Passwort muss sich von <del>deinem</del><ins>Ihrem</ins> <del>alten</del><ins>aktuellen</ins> Passwort unterscheiden.


### `tryhackx-homepage-blocks`

#### [`tryhackx-homepage-blocks.admin.settings.recaptcha_secret_key`](https://weblate.rob006.net/translate/flarum/tryhackx-homepage-blocks/de@formal/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.recaptcha_secret_key%22)

> reCAPTCHA Secret Key

```diff
-reCAPTCHA Secret Key
+reCAPTCHA Geheimer Schlüssel
```

reCAPTCHA <del>Secret</del><ins>Geheimer</ins> <del>Key</del><ins>Schlüssel</ins>


### `yippy-auth-ldap`

#### [`yippy-auth-ldap.forum.errors.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum/yippy-auth-ldap/de@formal/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.csrf_token_mismatch%22)

> You have been inactive for too long, please refresh the page and try again

```diff
-Du bist zu lange inaktiv gewesen. Bitte aktualisiere die Seite und versuche es erneut.
+Sie sind zu lange inaktiv gewesen. Bitte aktualisieren Sie die Seite und versuchen Sie es erneut.
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> zu lange inaktiv gewesen. Bitte <del>aktualisiere</del><ins>aktualisieren Sie</ins> die Seite und <del>versuche</del><ins>versuchen Sie</ins> es erneut.

<!-- {% endraw %} -->
