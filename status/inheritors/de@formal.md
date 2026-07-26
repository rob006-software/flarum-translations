# German (formal) inherited translations differences

Translations for German (formal) (`de@formal`) are inherited from German informal variant, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **295** are translated differently and **0** are
translated only in `de@formal`. Altogether they cover **43** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `acpl-my-tags` | [3](#acpl-my-tags) |
| `core` | [84](#core) |
| `datitisev-backup` | [18](#datitisev-backup) |
| `datlechin-bbcode-hide-content` | [3](#datlechin-bbcode-hide-content) |
| `datlechin-birthdays` | [5](#datlechin-birthdays) |
| `datlechin-copy-links` | [1](#datlechin-copy-links) |
| `datlechin-link-preview` | [15](#datlechin-link-preview) |
| `flarum-approval` | [2](#flarum-approval) |
| `flarum-emoji` | [1](#flarum-emoji) |
| `flarum-extension-manager` | [13](#flarum-extension-manager) |
| `flarum-flags` | [5](#flarum-flags) |
| `flarum-gdpr` | [14](#flarum-gdpr) |
| `flarum-likes` | [5](#flarum-likes) |
| `flarum-lock` | [1](#flarum-lock) |
| `flarum-mentions` | [11](#flarum-mentions) |
| `flarum-nicknames` | [2](#flarum-nicknames) |
| `flarum-pusher` | [1](#flarum-pusher) |
| `flarum-statistics` | [1](#flarum-statistics) |
| `flarum-subscriptions` | [3](#flarum-subscriptions) |
| `flarum-suspend` | [5](#flarum-suspend) |
| `flarum-tags` | [5](#flarum-tags) |
| `fof-badges` | [1](#fof-badges) |
| `fof-byobu` | [14](#fof-byobu) |
| `fof-discussion-templates` | [3](#fof-discussion-templates) |
| `fof-doorman` | [1](#fof-doorman) |
| `fof-drafts` | [1](#fof-drafts) |
| `fof-gamification` | [1](#fof-gamification) |
| `fof-geoip` | [1](#fof-geoip) |
| `fof-horizon` | [3](#fof-horizon) |
| `fof-links` | [2](#fof-links) |
| `fof-merge-discussions` | [7](#fof-merge-discussions) |
| `fof-moderator-warnings` | [9](#fof-moderator-warnings) |
| `fof-move-posts` | [1](#fof-move-posts) |
| `fof-oauth` | [1](#fof-oauth) |
| `fof-prevent-necrobumping` | [5](#fof-prevent-necrobumping) |
| `fof-profile-image-crop` | [2](#fof-profile-image-crop) |
| `fof-reactions` | [2](#fof-reactions) |
| `fof-sitemap` | [1](#fof-sitemap) |
| `fof-upload` | [4](#fof-upload) |
| `fof-username-request` | [33](#fof-username-request) |
| `forumaker-magicbb` | [1](#forumaker-magicbb) |
| `resofire-digest-mail` | [1](#resofire-digest-mail) |
| `yippy-auth-ldap` | [3](#yippy-auth-ldap) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from German informal variant (`-` line) and the translation from `de@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-my-tags`

#### [`acpl-my-tags.admin.settings.enable-placeholder`](https://weblate.rob006.net/translate/flarum2/acpl-my-tags/de@formal/?q=context%3A%3D%22acpl-my-tags.admin.settings.enable-placeholder%22)

> Enable placeholder text when the user is not following any tags

```diff
-Platzhaltertext aktivieren, wenn der Benutzer keinen Tags folgt
+Platzhaltertext aktivieren, wenn der Benutzer keinen Themen folgt
```

Platzhaltertext aktivieren, wenn der Benutzer keinen <del>Tags</del><ins>Themen</ins> folgt

#### [`acpl-my-tags.forum.index.my_tags`](https://weblate.rob006.net/translate/flarum2/acpl-my-tags/de@formal/?q=context%3A%3D%22acpl-my-tags.forum.index.my_tags%22)

> My tags

```diff
-Meine Tags
+Ihre Themen
```

#### [`acpl-my-tags.forum.index.placeholder`](https://weblate.rob006.net/translate/flarum2/acpl-my-tags/de@formal/?q=context%3A%3D%22acpl-my-tags.forum.index.placeholder%22)

> You are not following any tags yet. &lt;a&gt;See tags&lt;/a&gt;

```diff
-Du folgst noch keinen Tags. <a>Siehe Tags</a>
+Sie haben noch keine Themen. <a>Siehe Themen </a>
```

<del>Du</del><ins>Sie</ins> <del>folgst</del><ins>haben</ins> noch <del>keinen</del><ins>keine</ins> <del>Tags.</del><ins>Themen.</ins> &lt;a&gt;Siehe <del>Tags&lt;/a&gt;</del><ins>Themen &lt;/a&gt;</ins>


### `core`

#### [`core.admin.advanced.description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.advanced.description%22)

> Configure advanced settings for your forum.

```diff
-Erweiterte Einstellungen für dein Forum konfigurieren.
+Erweiterte Einstellungen für Ihr Forum konfigurieren.
```

Erweiterte Einstellungen für <del>dein</del><ins>Ihr</ins> Forum konfigurieren.

#### [`core.admin.advanced.maintenance.bisect_modal.result_description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.result_description%22)

> Forum is no longer in maintenance mode. Extension bisect is over. Based on your responses to each step, the cause of the issue is the following extension:
>

```diff
-Das Forum befindet sich nicht mehr im Wartungsmodus. Die Erweiterung „Bisect“ wurde beendet. Basierend auf deinen Antworten zu den einzelnen Schritten ist die Ursache des Problems die folgende Erweiterung:
+Das Forum befindet sich nicht mehr im Wartungsmodus. Die Erweiterung „Bisect“ wurde beendet. Basierend auf Ihren Antworten zu den einzelnen Schritten ist die Ursache des Problems die folgende Erweiterung:

```

Das Forum befindet sich nicht mehr im Wartungsmodus. Die Erweiterung „Bisect“ wurde beendet. Basierend auf <del>deinen</del><ins>Ihren</ins> Antworten zu den einzelnen Schritten ist die Ursache des Problems die folgende Erweiterung:<br />

#### [`core.admin.advanced.maintenance.help`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.help%22)

> Put your forum in maintenance mode to prevent users from accessing it.

```diff
-Versetze dein Forum in den Wartungsmodus, um zu verhindern, dass Benutzer darauf zugreifen können.
+Versetzen Sie Ihr Forum in den Wartungsmodus, um zu verhindern, dass Benutzer darauf zugreifen können.
```

<del>Versetze</del><ins>Versetzen</ins> <del>dein</del><ins>Sie Ihr</ins> Forum in den Wartungsmodus, um zu verhindern, dass Benutzer darauf zugreifen können.

#### [`core.admin.advanced.queue.custom_driver`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.advanced.queue.custom_driver%22)

> Your forum is using the {driver} queue driver, which is provided by an extension.

```diff
-Dein Forum verwendet den {driver} Queue-Treiber, der von einer Erweiterung bereitgestellt wird.
+Ihr Forum verwendet den {driver} Queue-Treiber, der von einer Erweiterung bereitgestellt wird.
```

<del>Dein</del><ins>Ihr</ins> Forum verwendet den {driver} Queue-Treiber, der von einer Erweiterung bereitgestellt wird.

#### [`core.admin.advanced.queue.sync_info`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.advanced.queue.sync_info%22)

> Your forum is using the synchronous queue driver. Jobs are processed immediately in the main process thread.

```diff
-Dein Forum verwendet den synchronen Warteschlangentreiber. Aufträge werden sofort im Hauptprozess-Thread verarbeitet.
+Ihr Forum verwendet den synchronen Warteschlangentreiber. Aufträge werden sofort im Hauptprozess-Thread verarbeitet.
```

<del>Dein</del><ins>Ihr</ins> Forum verwendet den synchronen Warteschlangentreiber. Aufträge werden sofort im Hauptprozess-Thread verarbeitet.

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
-Die Ankündigungen konnten nicht geladen werden. Bitte versuche es später erneut.
+Die Ankündigungen konnten nicht geladen werden. Bitte versuchen Sie es später erneut.
```

Die Ankündigungen konnten nicht geladen werden. Bitte <del>versuche</del><ins>versuchen Sie</ins> es später erneut.

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Wähle zwei Farben, um den Grundton des Forums zu ändern. Die erste Farbe dient für die Akzente, die zweite für die Hintergrundelemente.
+Wählen Sie zwei Farben, um den Grundton des Forums zu ändern. Die erste Farbe dient für die Akzente, die zweite für die Hintergrundelemente.
```

<del>Wähle</del><ins>Wählen Sie</ins> zwei Farben, um den Grundton des Forums zu ändern. Die erste Farbe dient für die Akzente, die zweite für die Hintergrundelemente.

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Ändere die Farbe, das Logo und weitere Variablen des Forums.
+Verändern Sie die Farbe, das Logo und weitere Variablen des Forums.
```

<del>Ändere</del><ins>Verändern Sie</ins> die Farbe, das Logo und weitere Variablen des Forums.

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Gib eine Farbe im Hexadezimalformat ein.
+Geben Sie eine Farbe im Hexadezimalformat ein.
```

<del>Gib</del><ins>Geben Sie</ins> eine Farbe im Hexadezimalformat ein.

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Lade ein Bild hoch, welches als Favicon für das Forum verwendet wird.
+Laden Sie ein Bild hoch, welches als Favicon für das Forum verwendet wird.
```

<del>Lade</del><ins>Laden Sie</ins> ein Bild hoch, welches als Favicon für das Forum verwendet wird.

#### [`core.admin.appearance.logo_heading`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.appearance.logo_heading%22)

> Logo

```diff
-Logo
+Firmenzeichen
```

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Lade ein Logo hoch, welches anstelle des Forum-Titels angezeigt wird.
+Laden Sie ein Logo hoch, welches anstelle des Forum-Titels angezeigt wird.
```

<del>Lade</del><ins>Laden Sie</ins> ein Logo hoch, welches anstelle des Forum-Titels angezeigt wird.

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
-Das Abrufen der Liste verwaister Erweiterungen ist fehlgeschlagen. Bitte versuche es später erneut.
+Das Abrufen der Liste verwaister Erweiterungen ist fehlgeschlagen. Bitte versuchen Sie es später erneut.
```

Das Abrufen der Liste verwaister Erweiterungen ist fehlgeschlagen. Bitte <del>versuche</del><ins>versuchen Sie</ins> es später erneut.

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Lege den Forentitel, die Sprache und weitere Grundeinstellungen fest.
+Legen Sie den Forentitel, die Sprache und weitere Grundeinstellungen fest.
```

<del>Lege</del><ins>Legen Sie</ins> den Forentitel, die Sprache und weitere Grundeinstellungen fest.

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Wähle den Treiber, der verwendet wird, um den Anzeigenamen der Benutzer zu bestimmen. Standardmäßig wird der Benutzername angezeigt.
+Wählen Sie den Treiber, der verwendet wird, um den Anzeigenamen der Benutzer zu bestimmen. Standardmäßig wird der Benutzername angezeigt.
```

<del>Wähle</del><ins>Wählen Sie</ins> den Treiber, der verwendet wird, um den Anzeigenamen der Benutzer zu bestimmen. Standardmäßig wird der Benutzername angezeigt.

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Wähle die Seite aus, die Benutzer beim Besuch des Forums zuerst sehen.
+Wählen Sie die Seite aus, die Benutzer beim Besuch des Forums zuerst sehen.
```

<del>Wähle</del><ins>Wählen Sie</ins> die Seite aus, die Benutzer beim Besuch des Forums zuerst sehen.

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Wähle den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.
+Wählen Sie den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.
```

<del>Wähle</del><ins>Wählen Sie</ins> den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Lege den Text fest, der auf der Seite "Alle Diskussionen" erscheint, um Besucher zu begrüßen.
+Legen Sie den Text fest, der auf der Seite „Alle Diskussionen“ erscheint, um Besucher zu begrüßen.
```

<del>Lege</del><ins>Legen Sie</ins> den Text fest, der auf der Seite <del>"Alle</del><ins>„Alle</ins> <del>Diskussionen"</del><ins>Diskussionen“</ins> erscheint, um Besucher zu begrüßen.

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-Dein Forum auf einen Blick.
+Ihr Forum auf einen Blick.
```

<del>Dein</del><ins>Ihr</ins> Forum auf einen Blick.

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-Es konnte nicht in das Dateisystem geschrieben werden. Überprüfe die Berechtigungen deines Dateisystems und versuche es erneut. Oder versuche es über die Kommandozeile auszuführen.
+Es konnte nicht in das Dateisystem geschrieben werden. Überprüfen Sie die Berechtigungen Ihres Dateisystems und versuchen Sie es erneut. Oder versuchen Sie es über die Kommandozeile auszuführen.
```

Es konnte nicht in das Dateisystem geschrieben werden. <del>Überprüfe</del><ins>Überprüfen Sie</ins> die Berechtigungen <del>deines</del><ins>Ihres</ins> Dateisystems und <del>versuche</del><ins>versuchen Sie</ins> es erneut. Oder <del>versuche</del><ins>versuchen Sie</ins> es über die Kommandozeile auszuführen.

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

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

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Passe das Erscheinungsbild deines Forums mit eigenem Less/CSS-Code an, welcher zusätzlich zu Flarums <a>Standard-Design</a> angewendet wird.
+Passen Sie das Erscheinungsbild Ihres Forums mithilfe eigenen Less/CSS-Code an, welcher zusätzlich zu Flarums <a>Standard-Design</a> angewendet wird.
```

<del>Passe</del><ins>Passen Sie</ins> das Erscheinungsbild <del>deines</del><ins>Ihres</ins> Forums <del>mit</del><ins>mithilfe</ins> <del>eigenem</del><ins>eigenen</ins> Less/CSS-Code an, welcher zusätzlich zu Flarums &lt;a&gt;Standard-Design&lt;/a&gt; angewendet wird.

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-Bist du sicher, dass du diese Gruppe löschen möchtest? Die Mitglieder der Gruppe werden nicht gelöscht.
+Sind Sie sicher, dass Sie diese Gruppe löschen möchten? Die Mitglieder der Gruppe werden nicht gelöscht.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diese Gruppe löschen <del>möchtest?</del><ins>möchten?</ins> Die Mitglieder der Gruppe werden nicht gelöscht.

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Konfiguriere den Mail-Treiber, die Parameter und die zu verwendenden Adressen für den Versand von E-Mails.
+Konfigurieren Sie den E-Mail-Treiber, die Parameter und die zu verwendenden Adressen für den Versand von E-Mails.
```

<del>Konfiguriere</del><ins>Konfigurieren Sie</ins> den <del>Mail-Treiber,</del><ins>E-Mail-Treiber,</ins> die Parameter und die zu verwendenden Adressen für den Versand von E-Mails.

#### [`core.admin.email.mail_smtp_verify_peer_help`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.email.mail_smtp_verify_peer_help%22)

> Verify the server's SSL certificate when using TLS or SSL encryption. Disable only if your mail server uses a self-signed certificate.

```diff
-Überprüfe das SSL-Zertifikat des Servers, wenn du TLS- oder SSL-Verschlüsselung verwendest. Deaktiviere diese Option nur, wenn dein Mailserver ein selbstsigniertes Zertifikat verwendet.
+Überprüfen Sie das SSL-Zertifikat des Servers, wenn Sie TLS- oder SSL-Verschlüsselung verwenden. Deaktivieren Sie diese Option nur, wenn Ihr Mailserver ein selbstsigniertes Zertifikat verwendet.
```

<del>Überprüfe</del><ins>Überprüfen Sie</ins> das SSL-Zertifikat des Servers, wenn <del>du</del><ins>Sie</ins> TLS- oder SSL-Verschlüsselung <del>verwendest.</del><ins>verwenden.</ins> <del>Deaktiviere</del><ins>Deaktivieren Sie</ins> diese Option nur, wenn <del>dein</del><ins>Ihr</ins> Mailserver ein selbstsigniertes Zertifikat verwendet.

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Flarum sendet derzeit keine E-Mails. Bitte überprüfe die Korrektheit deiner E-Mail-Konfiguration.
+Flarum sendet derzeit keine E-Mails. Bitte überprüfen Sie die Korrektheit ihrer E-Mail-Konfiguration.
```

Flarum sendet derzeit keine E-Mails. Bitte <del>überprüfe</del><ins>überprüfen Sie</ins> die Korrektheit <del>deiner</del><ins>ihrer</ins> E-Mail-Konfiguration.

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-Versende eine E-Mail mit der gegebenen Konfiguration an deine Adresse, {email}.
+Versenden Sie eine E-Mail mit der gegebenen Konfiguration an Ihre Adresse, {email}.
```

<del>Versende</del><ins>Versenden Sie</ins> eine E-Mail mit der gegebenen Konfiguration an <del>deine</del><ins>Ihre</ins> Adresse, {email}.

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
-Diese Erweiterung wurde durch {replacement} ersetzt. Ziehe in Betracht, zum Ersatzpaket zu wechseln.
+Diese Erweiterung wurde durch {replacement} ersetzt. Erwägen Sie die Migration zum Ersatzpaket.
```

Diese Erweiterung wurde durch {replacement} ersetzt. <del>Ziehe in</del><ins>Erwägen</ins> <del>Betracht,</del><ins>Sie</ins> <del>zum</del><ins>die</ins> <del>Ersatzpaket</del><ins>Migration</ins> <del>zu</del><ins>zum</ins> <del>wechseln.</del><ins>Ersatzpaket.</ins>

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Die Bereinigung entfernt sämtliche Datenbankeinträge und Assets, die sich auf die Erweiterung beziehen. Die Erweiterung wird nicht deinstalliert; dies muss über Composer geschehen. Bist du sicher, dass du fortfahren willst?
+Die Bereinigung entfernt sämtliche Datenbankeinträge und Assets, die sich auf die Erweiterung beziehen. Die Deinstallation der Erweiterung wird nicht ausgeführt; dies muss über Composer geschehen. Sind Sie sicher, dass Sie fortfahren möchten?
```

Die Bereinigung entfernt sämtliche Datenbankeinträge und Assets, die sich auf die Erweiterung beziehen. Die <ins>Deinstallation der </ins>Erweiterung wird nicht <del>deinstalliert;</del><ins>ausgeführt;</ins> dies muss über Composer geschehen. <del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> fortfahren <del>willst?</del><ins>möchten?</ins>

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Aktiviere die Erweiterung, um Einstellungen einsehen und verändern zu können.
+Aktivieren Sie die Erweiterung, um Einstellungen einsehen und verändern zu können.
```

<del>Aktiviere</del><ins>Aktivieren Sie</ins> die Erweiterung, um Einstellungen einsehen und verändern zu können.

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Bitte warten…
+Bitte warten Sie…
```

Bitte <del>warten…</del><ins>warten Sie…</ins>

#### [`core.admin.settings.saved_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.settings.saved_message%22)

> Your changes were saved.

```diff
-Deine Änderungen wurden gespeichert.
+Ihre Änderungen wurden gespeichert.
```

<del>Deine</del><ins>Ihre</ins> Änderungen wurden gespeichert.

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-Eine paginierte Liste aller Benutzer in deinem Forum.
+Eine paginierte Liste aller Benutzer in Ihrem Forum.
```

Eine paginierte Liste aller Benutzer in <del>deinem</del><ins>Ihrem</ins> Forum.

#### [`core.api.invalid_username_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.api.invalid_username_message%22)

> The username may only contain letters, numbers, and dashes. With at least one letter.

```diff
-Der Benutzername darf nur Buchstaben, Zahlen und Bindestriche enthalten. Mindestens ein Buchstabe muss enthalten sein.
+Der Benutzername darf nur Buchstaben, Zahlen und Bindestriche enthalten. Er muss mindestens einen Buchstaben enthalten.
```

Der Benutzername darf nur Buchstaben, Zahlen und Bindestriche enthalten. <del>Mindestens</del><ins>Er</ins> <del>ein</del><ins>muss</ins> <del>Buchstabe</del><ins>mindestens</ins> <del>muss</del><ins>einen</ins> <del>enthalten</del><ins>Buchstaben</ins> <del>sein.</del><ins>enthalten.</ins>

#### [`core.email.activate_account.body`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.activate_account.body%22)

> Someone (hopefully you!) has signed up to {forum} with this email address.
>
> If this was you, simply click the following link and your account will be activated:
> {url}
>
> If you did not sign up, please ignore this email.
>

```diff
-Jemand (hoffentlich du!) hat sich mit dieser E-Mail-Adresse bei {forum} angemeldet.
+Jemand (hoffentlich Sie!) hat sich mit dieser E-Mail-Adresse bei {forum} registriert.

-Wenn du das warst, klicke einfach auf den folgenden Link, um dein Konto zu aktivieren:
+Falls Sie das waren, klicken Sie einfach auf den folgenden Link, um Ihr Konto zu aktivieren:
 {url}

-Wenn du dich nicht angemeldet haben, ignoriere diese E-Mail bitte.
+Falls Sie sich nicht registriert haben, ignorieren Sie diese E-Mail bitte.

```

Jemand (hoffentlich <del>du!)</del><ins>Sie!)</ins> hat sich mit dieser E-Mail-Adresse bei {forum} <del>angemeldet.</del><ins>registriert.</ins><br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> das <del>warst,</del><ins>waren,</ins> <del>klicke</del><ins>klicken Sie</ins> einfach auf den folgenden Link, um <del>dein</del><ins>Ihr</ins> Konto zu aktivieren:<br />{url}<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> nicht <del>angemeldet</del><ins>registriert</ins> haben, <del>ignoriere</del><ins>ignorieren Sie</ins> diese E-Mail bitte.<br />

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-Aktivierung deines neuen Kontos
+Aktivierung Ihres neuen Kontos
```

Aktivierung <del>deines</del><ins>Ihres</ins> neuen Kontos

#### [`core.email.confirm_email.body`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.confirm_email.body%22)

> Someone (hopefully you!) has changed their email address on {forum} to this one.
>
> If this was you, simply click the following link and your email will be confirmed:
> {url}
>
> If this was not you, please ignore this email.
>

```diff
-Jemand (hoffentlich du!) hat seine E-Mail-Adresse im {forum} in diese geändert.
+Jemand (hoffentlich Sie!) hat seine E-Mail-Adresse im {forum} auf diese geändert.

-Wenn du das warst, klicke einfach auf den folgenden Link, um deine E-Mail-Adresse zu bestätigen:
+Falls Sie das waren, klicken Sie einfach auf den folgenden Link, um Ihre E-Mail-Adresse zu bestätigen:
 {url}

-Wenn du das nicht warst, ignoriere bitte diese E-Mail.
+Falls Sie das nicht waren, ignorieren Sie diese E-Mail bitte.

```

Jemand (hoffentlich <del>du!)</del><ins>Sie!)</ins> hat seine E-Mail-Adresse im {forum} <del>in</del><ins>auf</ins> diese geändert.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> das <del>warst,</del><ins>waren,</ins> <del>klicke</del><ins>klicken Sie</ins> einfach auf den folgenden Link, um <del>deine</del><ins>Ihre</ins> E-Mail-Adresse zu bestätigen:<br />{url}<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> das nicht <del>warst,</del><ins>waren,</ins> <del>ignoriere</del><ins>ignorieren</ins> <del>bitte</del><ins>Sie</ins> diese <del>E-Mail.</del><ins>E-Mail bitte.</ins><br />

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-Bestätigung deiner E-Mail-Adresse
+Bestätigung Ihrer E-Mail-Adresse
```

Bestätigung <del>deiner</del><ins>Ihrer</ins> E-Mail-Adresse

#### [`core.email.informational.footer`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.informational.footer%22)

> This email was sent to {userEmail} as an informational service related to your account on \[{forumTitle}\]({forumUrl}).

```diff
-Diese E-Mail wurde als Informationsdienstleistung in Bezug auf dein Konto bei [{forumTitle}]({forumUrl}) an {userEmail} gesendet.
+Diese E-Mail wurde als Informationsdienstleistung in Bezug auf Ihr Konto bei [{forumTitle}]({forumUrl}) an {userEmail} gesendet.
```

Diese E-Mail wurde als Informationsdienstleistung in Bezug auf <del>dein</del><ins>Ihr</ins> Konto bei \[{forumTitle}\]({forumUrl}) an {userEmail} gesendet.

#### [`core.email.informational.footer_plain`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.informational.footer_plain%22)

> This email was sent to {userEmail} as an informational service related to your account on {forumTitle}.

```diff
-Diese E-Mail wurde als Informationsdienstleistung in Bezug auf dein Konto bei {forumTitle} an {userEmail} gesendet.
+Diese E-Mail wurde als Informationsdienstleistung in Bezug auf Ihr Konto bei {forumTitle} an {userEmail} gesendet.
```

Diese E-Mail wurde als Informationsdienstleistung in Bezug auf <del>dein</del><ins>Ihr</ins> Konto bei {forumTitle} an {userEmail} gesendet.

#### [`core.email.reset_password.body`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.reset_password.body%22)

> Someone (hopefully you!) has submitted a forgotten password request for your account on {forum}.
>
> If this was you, click the following link to reset your password:
> {url}
>
> If you do not wish to change your password, just ignore this email and nothing will happen.
>

```diff
-Jemand (hoffentlich du!) hat eine Anfrage zum Zurücksetzen des Passworts für dein Konto bei {forum} gestellt.
+Jemand (hoffentlich Sie!) hat für Ihr Konto auf {forum} eine Anfrage wegen eines vergessenen Passworts gestellt.

-Wenn du das warst, klicke auf den folgenden Link, um dein Passwort zurückzusetzen:
+Falls Sie das waren, klicken Sie auf den folgenden Link, um Ihr Passwort zurückzusetzen:
 {url}

-Wenn du dein Passwort nicht ändern möchtest, ignoriere diese E-Mail einfach, dann geschieht nichts weiter.
+Wenn Sie Ihr Passwort nicht ändern möchten, ignorieren Sie diese E-Mail einfach – es wird nichts passieren.

```

Jemand (hoffentlich <del>du!)</del><ins>Sie!)</ins> hat <del>eine</del><ins>für</ins> <del>Anfrage</del><ins>Ihr</ins> <del>zum</del><ins>Konto</ins> <del>Zurücksetzen</del><ins>auf</ins> <del>des</del><ins>{forum}</ins> <del>Passworts</del><ins>eine</ins> <del>für</del><ins>Anfrage</ins> <del>dein</del><ins>wegen</ins> <del>Konto</del><ins>eines</ins> <del>bei</del><ins>vergessenen</ins> <del>{forum}</del><ins>Passworts</ins> gestellt.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> das <del>warst,</del><ins>waren,</ins> <del>klicke</del><ins>klicken Sie</ins> auf den folgenden Link, um <del>dein</del><ins>Ihr</ins> Passwort zurückzusetzen:<br />{url}<br /><br />Wenn <del>du</del><ins>Sie</ins> <del>dein</del><ins>Ihr</ins> Passwort nicht ändern <del>möchtest,</del><ins>möchten,</ins> <del>ignoriere</del><ins>ignorieren Sie</ins> diese E-Mail <del>einfach,</del><ins>einfach</ins> <del>dann</del><ins>–</ins> <del>geschieht</del><ins>es wird</ins> nichts <del>weiter.</del><ins>passieren.</ins><br />

#### [`core.email.reset_password.subject`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.reset_password.subject%22)

> =&gt; core.ref.reset\_your\_password

```diff
-Zurücksetzung deines Passwortes
+Zurücksetzung Ihres Passwortes
```

Zurücksetzung <del>deines</del><ins>Ihres</ins> Passwortes

#### [`core.email.send_test.body`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.email.send_test.body%22)

> This is a test email to confirm that your Flarum email configuration is working properly.
>
> If this was you, this email means that your configuration works!
>
> If this was not you, please ignore this email.
>

```diff
-Dies ist eine Test-E-Mail, um zu überprüfen, ob deine Flarum-E-Mail-Konfiguration ordnungsgemäß funktioniert.
+Dies ist eine Test-E-Mail, um zu überprüfen, ob Ihre E-Mail-Konfiguration in Flarum ordnungsgemäß funktioniert.

-Wenn du der Absender warst, bedeutet diese E-Mail, dass deine Konfiguration funktioniert!
+Falls Sie diese E-Mail erhalten haben, bedeutet dies, dass Ihre Konfiguration funktioniert!

-Wenn du nicht der Absender warst, ignoriere diese E-Mail bitte.
+Falls Sie diese E-Mail nicht erhalten haben, ignorieren Sie sie bitte.

```

Dies ist eine Test-E-Mail, um zu überprüfen, ob <del>deine</del><ins>Ihre</ins> <del>Flarum-E-Mail-Konfiguration</del><ins>E-Mail-Konfiguration in Flarum</ins> ordnungsgemäß funktioniert.<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>der</del><ins>diese</ins> <del>Absender</del><ins>E-Mail</ins> <del>warst,</del><ins>erhalten</ins> <del>bedeutet</del><ins>haben,</ins> <del>diese</del><ins>bedeutet</ins> <del>E-Mail,</del><ins>dies,</ins> dass <del>deine</del><ins>Ihre</ins> Konfiguration funktioniert!<br /><br /><del>Wenn</del><ins>Falls</ins> <del>du</del><ins>Sie</ins> <del>nicht</del><ins>diese</ins> <del>der</del><ins>E-Mail</ins> <del>Absender</del><ins>nicht</ins> <del>warst,</del><ins>erhalten</ins> <del>ignoriere</del><ins>haben,</ins> <del>diese</del><ins>ignorieren</ins> <del>E-Mail</del><ins>Sie sie</ins> bitte.<br />

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-Das eingegebene Passwort ist falsch.
+Das von Ihnen eingegebene Passwort ist falsch.
```

Das <ins>von Ihnen </ins>eingegebene Passwort ist falsch.

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Klicke auf den Button, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.
+Klicken Sie auf die Schaltfläche, um einen Link zum Zurücksetzen Ihres Passwortes zu erhalten.
```

<del>Klicke</del><ins>Klicken Sie</ins> auf <del>den</del><ins>die</ins> <del>Button,</del><ins>Schaltfläche,</ins> um einen Link zum Zurücksetzen <del>deines</del><ins>Ihres</ins> Passwortes zu erhalten.

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Beitrag verfassen…
+Verfassen Sie Ihren Beitrag…
```

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Dein Beitrag wurde nicht versendet. Möchtest du ihn verwerfen?
+Ihr Beitrag wurde nicht versendet. Möchten Sie ihn verwerfen?
```

<del>Dein</del><ins>Ihr</ins> Beitrag wurde nicht versendet. <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> ihn verwerfen?

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Deine Änderungen wurden nicht übernommen. Möchtest du sie verwerfen?
+Ihre Änderungen wurden nicht übernommen. Möchten Sie sie verwerfen?
```

<del>Deine</del><ins>Ihre</ins> Änderungen wurden nicht übernommen. <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> sie verwerfen?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Deine Änderungen wurden gespeichert.
+Ihre Änderungen wurden gespeichert.
```

<del>Deine</del><ins>Ihre</ins> Änderungen wurden gespeichert.

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Deine Antwort wurde nicht versendet. Möchtest du sie verwerfen?
+Ihre Antwort wurde nicht versendet. Möchten Sie sie verwerfen?
```

<del>Deine</del><ins>Ihre</ins> Antwort wurde nicht versendet. <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> sie verwerfen?

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Deine Antwort wurde versendet.
+Ihre Antwort wurde versendet.
```

<del>Deine</del><ins>Ihre</ins> Antwort wurde versendet.

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-Du hast keine Berechtigung, auf diese Diskussion zu antworten.
+Sie haben keine Berechtigung, auf diese Diskussion zu antworten.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, auf diese Diskussion zu antworten.

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-Möchtest du die Diskussion wirklich löschen?
+Möchten Sie diese Diskussion wirklich löschen?
```

<del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> <del>die</del><ins>diese</ins> Diskussion wirklich löschen?

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Markiere ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.
+{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Markieren Sie ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.
```

{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. <del>Markiere</del><ins>Markieren Sie</ins> ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Falls die von dir eingegebene E-Mail-Adresse auf dieser Seite registriert ist, senden wir dir eine E-Mail mit einem Link, mit dem du dein Passwort zurücksetzen kannst. Bitte prüfe auch deinen Spam-Ordner, falls die E-Mail nicht innerhalb der nächsten Minuten ankommt.
+Falls die von Ihnen eingegebene E-Mail-Adresse auf dieser Seite registriert ist, senden wir Ihnen eine E-Mail mit einem Link, über den Sie Ihr Passwort zurücksetzen können. Bitte prüfen Sie auch Ihren Spam-Ordner, falls die E-Mail nicht innerhalb der nächsten Minuten ankommt.
```

Falls die von <del>dir</del><ins>Ihnen</ins> eingegebene E-Mail-Adresse auf dieser Seite registriert ist, senden wir <del>dir</del><ins>Ihnen</ins> eine E-Mail mit einem Link, <del>mit</del><ins>über</ins> <del>dem</del><ins>den</ins> <del>du</del><ins>Sie</ins> <del>dein</del><ins>Ihr</ins> Passwort zurücksetzen <del>kannst.</del><ins>können.</ins> Bitte <del>prüfe</del><ins>prüfen Sie</ins> auch <del>deinen</del><ins>Ihren</ins> Spam-Ordner, falls die E-Mail nicht innerhalb der nächsten Minuten ankommt.

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Bitte gebe deine E-Mail-Adresse ein, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.
+Bitte geben Sie Ihre E-Mail-Adresse ein, um einen Link zum Zurücksetzen Ihres Passwortes zu erhalten.
```

Bitte <del>gebe</del><ins>geben</ins> <del>deine</del><ins>Sie Ihre</ins> E-Mail-Adresse ein, um einen Link zum Zurücksetzen <del>deines</del><ins>Ihres</ins> Passwortes zu erhalten.

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-Bist du dir sicher, dass du alle Diskussionen als gelesen markieren willst?
+Sind Sie sicher, dass Sie alle Diskussionen als gelesen markieren möchten?
```

<del>Bist du</del><ins>Sind</ins> <del>dir</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> alle Diskussionen als gelesen markieren <del>willst?</del><ins>möchten?</ins>

#### [`core.forum.notifications.delete_all_confirm`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.notifications.delete_all_confirm%22)

> Are you sure you want to delete all notifications? This action is not reversible

```diff
-Möchtest du wirklich alle Benachrichtigungen löschen? Dieser Vorgang kann nicht rückgängig gemacht werden.
+Möchten Sie wirklich alle Benachrichtigungen löschen? Dieser Vorgang kann nicht rückgängig gemacht werden.
```

<del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> wirklich alle Benachrichtigungen löschen? Dieser Vorgang kann nicht rückgängig gemacht werden.

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Bist du dir sicher, dass du diesen Beitrag für immer löschen willst? Dies kann nicht rückgängig gemacht werden.
+Sind Sie sicher, dass Sie diesen Beitrag dauerhaft löschen möchten? Dies kann nicht rückgängig gemacht werden.
```

<del>Bist du</del><ins>Sind</ins> <del>dir</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diesen Beitrag<del> für</del> <del>immer</del><ins>dauerhaft</ins> löschen <del>willst?</del><ins>möchten?</ins> Dies kann nicht rückgängig gemacht werden.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-Bist du dir sicher, dass du diesen Beitrag löschen willst?
+Sind Sie sicher, dass Sie diesen Beitrag löschen möchten?
```

<del>Bist du</del><ins>Sind</ins> <del>dir</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diesen Beitrag löschen <del>willst?</del><ins>möchten?</ins>

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-Die derzeit aktive Sitzung kann nicht beendet werden. Melde dich stattdessen ab.
+Die derzeit aktive Sitzung kann nicht beendet werden. Bitte melden Sie sich stattdessen ab.
```

Die derzeit aktive Sitzung kann nicht beendet werden. <del>Melde</del><ins>Bitte</ins> <del>dich</del><ins>melden Sie sich</ins> stattdessen ab.

#### [`core.forum.security.session_termination_failed`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.security.session_termination_failed%22)

> An error occurred while terminating your sessions.

```diff
-Beim Beenden deiner Sitzungen ist ein Fehler aufgetreten.
+Beim Beenden Ihrer Sitzungen ist ein Fehler aufgetreten.
```

Beim Beenden <del>deiner</del><ins>Ihrer</ins> Sitzungen ist ein Fehler aufgetreten.

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Erhalte "{description}" Benachrichigungen über {method}
+Erhalten Sie "{description}" Benachrichtigungen über {method}
```

<del>Erhalte</del><ins>Erhalten Sie</ins> "{description}" <del>Benachrichigungen</del><ins>Benachrichtigungen</ins> über {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Wenn jemand eine Diskussion ändert, die du gestartet hast
+Wenn jemand eine Diskussion ändert, die Sie gestartet haben
```

Wenn jemand eine Diskussion ändert, die <del>du</del><ins>Sie</ins> gestartet <del>hast</del><ins>haben</ins>

#### [`core.forum.user.avatar_upload_tooltip`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.user.avatar_upload_tooltip%22)

> Upload a new avatar

```diff
-Lade einen neuen Avatar hoch
+Laden Sie einen neuen Avatar hoch
```

<del>Lade</del><ins>Laden Sie</ins> einen neuen Avatar hoch

#### [`core.lib.edit_user.nothing_available`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.edit_user.nothing_available%22)

> You are not allowed to edit this user.

```diff
-Du bist nicht berechtigt, diesen Benutzer zu bearbeiten.
+Sie sind nicht berechtigt, diesen Benutzer zu bearbeiten.
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> nicht berechtigt, diesen Benutzer zu bearbeiten.

#### [`core.lib.error.circular_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.circular_dependencies_message%22)

> Circular dependencies detected: {extensions}. Aborting. Please disable one of the extensions and try again.

```diff
-Zirkuläre Abhängigkeiten erkannt: {extensions}. Prozess abgebrochen. Bitte deaktiviere eine der Erweiterungen und versuche es erneut.
+Zirkuläre Abhängigkeiten erkannt: {extensions}. Prozess abgebrochen. Bitte deaktivieren Sie eine der Erweiterungen und versuchen Sie es erneut.
```

Zirkuläre Abhängigkeiten erkannt: {extensions}. Prozess abgebrochen. Bitte <del>deaktiviere</del><ins>deaktivieren Sie</ins> eine der Erweiterungen und <del>versuche</del><ins>versuchen Sie</ins> es erneut.

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-{extension} konnte nicht initialisiert werden, überprüfe die Browser-Konsole für weitere Informationen.
+{extension} konnte nicht initialisiert werden, überprüfen Sie die Browser-Konsole für weitere Informationen.
```

{extension} konnte nicht initialisiert werden, <del>überprüfe</del><ins>überprüfen Sie</ins> die Browser-Konsole für weitere Informationen.

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-Ups! Bei einer Cross-Origin-Anfrage ist etwas schief gelaufen. Bitte lade die Seite neu und versuche es erneut.
+Es tut uns leid! Bei einer Cross-Origin-Anfrage ist ein Problem aufgetreten. Bitte laden Sie die Seite neu und versuchen Sie es erneut.
```

<del>Ups!</del><ins>Es tut uns leid!</ins> Bei einer Cross-Origin-Anfrage ist <del>etwas</del><ins>ein</ins> <del>schief</del><ins>Problem</ins> <del>gelaufen.</del><ins>aufgetreten.</ins> Bitte <del>lade</del><ins>laden Sie</ins> die Seite neu und <del>versuche</del><ins>versuchen Sie</ins> es erneut.

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-Ups! Da ist was schief gelaufen. Bitte lade die Seite neu oder versuche es erneut.
+Es tut uns leid! Es ist ein Fehler aufgetreten. Bitte laden Sie die Seite neu und versuchen Sie es erneut.
```

<del>Ups!</del><ins>Es</ins> <del>Da</del><ins>tut uns leid! Es</ins> ist <del>was</del><ins>ein</ins> <del>schief</del><ins>Fehler</ins> <del>gelaufen.</del><ins>aufgetreten.</ins> Bitte <del>lade</del><ins>laden Sie</ins> die Seite neu <del>oder</del><ins>und</ins> <del>versuche</del><ins>versuchen Sie</ins> es erneut.

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-Du hast keine Berechtigung dies zu tun.
+Sie haben keine Berechtigung, dies zu tun.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine <del>Berechtigung</del><ins>Berechtigung,</ins> dies zu tun.

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-Nicht so schnell. Bitte versuche es in Kürze erneut.
+Bitte nicht so schnell. Versuchen Sie es in Kürze erneut.
```

<del>Nicht</del><ins>Bitte nicht</ins> so schnell. <del>Bitte</del><ins>Versuchen</ins> <del>versuche</del><ins>Sie</ins> es in Kürze erneut.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Beim Anzeigen dieses Inhalts ist ein Fehler aufgetreten. Wenn du ein Benutzer bist, versuche es später erneut. Wenn du ein Administrator bist, überprüfe deine Flarum-Protokolldateien, um weitere Informationen zu erhalten.
+Beim Anzeigen dieses Inhalts ist ein Fehler aufgetreten. Wenn Sie ein Benutzer sind, versuchen Sie es später erneut. Wenn Sie ein Administrator sind, überprüfen Sie Ihre Flarum-Protokolldateien, um weitere Informationen zu erhalten.
```

Beim Anzeigen dieses Inhalts ist ein Fehler aufgetreten. Wenn <del>du</del><ins>Sie</ins> ein Benutzer <del>bist,</del><ins>sind,</ins> <del>versuche</del><ins>versuchen Sie</ins> es später erneut. Wenn <del>du</del><ins>Sie</ins> ein Administrator <del>bist,</del><ins>sind,</ins> <del>überprüfe</del><ins>überprüfen</ins> <del>deine</del><ins>Sie Ihre</ins> Flarum-Protokolldateien, um weitere Informationen zu erhalten.

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Wir haben eine Bestätigungsmail an {email} gesendet. Bitte überprüfe deinen Spam-Ordner, falls du keine E-Mail erhalten hast.
+Wir haben eine Bestätigungs-E-Mail an {email} gesendet. Bitte überprüfen Sie Ihren Spam-Ordner, falls Sie keine E-Mail erhalten haben.
```

Wir haben eine <del>Bestätigungsmail</del><ins>Bestätigungs-E-Mail</ins> an {email} gesendet. Bitte <del>überprüfe</del><ins>überprüfen</ins> <del>deinen</del><ins>Sie Ihren</ins> Spam-Ordner, falls <del>du</del><ins>Sie</ins> keine E-Mail erhalten <del>hast.</del><ins>haben.</ins>

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-Bist du sicher, dass du fortfahren willst? Diese Aktion kann nicht rückgängig gemacht werden.
+Sind Sie sicher, dass Sie fortfahren möchten? Diese Aktion kann nicht rückgängig gemacht werden.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> fortfahren <del>willst?</del><ins>möchten?</ins> Diese Aktion kann nicht rückgängig gemacht werden.

#### [`core.ref.icon_text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.ref.icon_text%22)

> Enter the name of any &lt;a&gt;FontAwesome&lt;/a&gt; icon class, &lt;em&gt;including&lt;/em&gt; the prefix (e.g. &lt;code&gt;fas fa-flag&lt;/code&gt; or &lt;code&gt;fa-solid fa-flag&lt;/code&gt;).

```diff
-Gebe den Namen der <a>FontAwesome</a>-Symbolklasse ein, aber <em>mit</em> dem Präfix (z. B. <code>fas fa-flag</code> oder <code>fa-solid fa-flag</code>).
+Geben Sie den Namen der <a>FontAwesome</a>-Symbolklasse ein, aber <em>mit</em> dem Präfix (z. B. <code>fas fa-flag</code> oder <code>fa-solid fa-flag</code>).
```

<del>Gebe</del><ins>Geben Sie</ins> den Namen der &lt;a&gt;FontAwesome&lt;/a&gt;-Symbolklasse ein, aber &lt;em&gt;mit&lt;/em&gt; dem Präfix (z. B. &lt;code&gt;fas fa-flag&lt;/code&gt; oder &lt;code&gt;fa-solid fa-flag&lt;/code&gt;).

#### [`core.ref.reset_your_password`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.ref.reset_your_password%22)

> Reset Your Password

```diff
-Dein Passwort zurücksetzen
+Ihr Passwort zurücksetzen
```

<del>Dein</del><ins>Ihr</ins> Passwort zurücksetzen

#### [`core.ref.you`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.ref.you%22)

> You

```diff
-Du
+Sie
```

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-Klicke auf die Schaltfläche unten, um die E-Mail-Adresse deines Kontos zu bestätigen.
+Klicken Sie auf die Schaltfläche unten, um die E-Mail-Adresse Ihres Kontos zu bestätigen.
```

<del>Klicke</del><ins>Klicken Sie</ins> auf die Schaltfläche unten, um die E-Mail-Adresse <del>deines</del><ins>Ihres</ins> Kontos zu bestätigen.

#### [`core.views.error.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch%22)

> You have been inactive for too long.

```diff
-Du warst zu lange inaktiv.
+Sie waren zu lange inaktiv.
```

<del>Du</del><ins>Sie</ins> <del>warst</del><ins>waren</ins> zu lange inaktiv.

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Gehe zurück um es erneut zu versuchen
+Bitte gehen Sie zurück und versuchen Sie es erneut
```

<del>Gehe</del><ins>Bitte gehen Sie</ins> zurück <del>um</del><ins>und</ins> <del>es</del><ins>versuchen</ins> <del>erneut</del><ins>Sie</ins> <del>zu</del><ins>es</ins> <del>versuchen</del><ins>erneut</ins>

#### [`core.views.error.not_authenticated`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.views.error.not_authenticated%22)

> You do not have permission to access this page. Try again after logging in.

```diff
-Du hast keine Berechtigung, auf diese Seite zuzugreifen. Versuche dich erneut anzumelden.
+Sie haben keine Berechtigung, auf diese Seite zuzugreifen. Bitte versuchen Sie sich erneut anzumelden.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, auf diese Seite zuzugreifen. <del>Versuche</del><ins>Bitte</ins> <del>dich</del><ins>versuchen Sie sich</ins> erneut anzumelden.

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-Du hast keine Berechtigung, auf diese Seite zuzugreifen.
+Sie haben keine Berechtigung, auf diese Seite zuzugreifen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, auf diese Seite zuzugreifen.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-Bist du sicher, dass du dich von {forum} abmelden willst?
+Sind Sie sicher, dass Sie sich von {forum} abmelden möchten?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> von {forum} abmelden <del>willst?</del><ins>möchten?</ins>


### `datitisev-backup`

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.access-id.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.access-id.description%22)

> Your authentication Access token ID

```diff
-Deine Authentifizierungs-Zugriffstoken-ID
+Ihre Authentifizierungs-Zugriffstoken-ID
```

<del>Deine</del><ins>Ihre</ins> Authentifizierungs-Zugriffstoken-ID

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.endpoint.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.endpoint.description%22)

> The URL to your storage endpoint.

```diff
-Die URL zu Deinem Speicherendpunkt.
+Die URL zu Ihrem Speicherendpunkt.
```

Die URL zu <del>Deinem</del><ins>Ihrem</ins> Speicherendpunkt.

#### [`datitisev-backup.admin.adapter-settings-modal.aws.region.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.region.description%22)

> Region of your bucket.

```diff
-Region Deines Buckets.
+Region Ihres Buckets.
```

Region <del>Deines</del><ins>Ihres</ins> Buckets.

#### [`datitisev-backup.admin.adapter-settings-modal.aws.version.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.version.description%22)

> Specify a version or leave blank for latest.

```diff
-Gib eine Version an oder lasse das Feld für die neueste leer.
+Geben Sie eine Version an oder lassen Sie das Feld für die neueste leer.
```

<del>Gib</del><ins>Geben Sie</ins> eine Version an oder <del>lasse</del><ins>lassen Sie</ins> das Feld für die neueste leer.

#### [`datitisev-backup.admin.adapter-settings-modal.azure.endpoint.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.azure.endpoint.description%22)

> The connection string for your Azure storage.

```diff
-Die Verbindungszeichenfolge für deinen Azure-Speicher.
+Die Verbindungszeichenfolge für Ihren Azure-Speicher.
```

Die Verbindungszeichenfolge für <del>deinen</del><ins>Ihren</ins> Azure-Speicher.

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-label%22)

> Use access code to obtain a refresh token (requires app key &amp; secret)

```diff
-Verwende den Zugriffscode, um ein Aktualisierungstoken zu erhalten (erfordert App-Schlüssel und Secret)
+Verwenden Sie den Zugriffscode, um ein Aktualisierungstoken zu erhalten (erfordert App-Schlüssel und Secret)
```

<del>Verwende</del><ins>Verwenden Sie</ins> den Zugriffscode, um ein Aktualisierungstoken zu erhalten (erfordert App-Schlüssel und Secret)

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-success`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-success%22)

> Refresh token obtained successfully &amp; updated above! Save the changes to store it.

```diff
-Aktualisierungstoken erfolgreich abgerufen und oben aktualisiert! Speichere die Änderungen, um sie zu sichern.
+Aktualisierungstoken erfolgreich abgerufen und oben aktualisiert! Speichern Sie die Änderungen, um sie zu sichern.
```

Aktualisierungstoken erfolgreich abgerufen und oben aktualisiert! <del>Speichere</del><ins>Speichern Sie</ins> die Änderungen, um sie zu sichern.

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.description%22)

> Use the fields below to obtain the refresh token or manually follow the instructions at https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually.

```diff
-Verwende die folgenden Felder, um das Aktualisierungstoken zu erhalten, oder befolge manuell die Anweisungen unter https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually.
+Verwenden Sie die folgenden Felder, um das Aktualisierungstoken zu erhalten, oder befolgen Sie manuell die Anweisungen unter https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually.
```

<del>Verwende</del><ins>Verwenden Sie</ins> die folgenden Felder, um das Aktualisierungstoken zu erhalten, oder <del>befolge</del><ins>befolgen Sie</ins> manuell die Anweisungen unter https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually.

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.host.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.host.description%22)

> The hostname to connect to with FTP, eg: &lt;em&gt;ftp.yourdomain.local&lt;/em&gt;.

```diff
-Der Hostname, zu dem Du dich mit FTP verbinden möchtest, zB: <em>ftp.yourdomain.local</em>.
+Der Hostname, zu dem Sie sich mit FTP verbinden möchten, z. B.: <em>ftp.yourdomain.local</em>.
```

Der Hostname, zu dem <del>Du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> mit FTP verbinden <del>möchtest,</del><ins>möchten,</ins> <del>zB:</del><ins>z. B.:</ins> &lt;em&gt;ftp.yourdomain.local&lt;/em&gt;.

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.passive.toggle`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.passive.toggle%22)

> Passive mode

```diff
-Passiver Modus
+Passivmodus
```

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.description%22)

> Follow the instructions @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md to create a Google project and retrieve your Client ID &amp; Client Secret.
>

```diff
-Befolge die Anweisungen unter https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md, um ein Google-Projekt zu erstellen und deine Client-ID und deinen geheimen Client-Schlüssel abzurufen.
+Befolgen Sie die Anweisungen unter https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md, um ein Google-Projekt zu erstellen und Ihre Client-ID und Ihren geheimen Client-Schlüssel abzurufen.

```

<del>Befolge</del><ins>Befolgen Sie</ins> die Anweisungen unter https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md, um ein Google-Projekt zu erstellen und <del>deine</del><ins>Ihre</ins> Client-ID und <del>deinen</del><ins>Ihren</ins> geheimen Client-Schlüssel abzurufen.<br />

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.help.test_success_alert`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.help.test_success_alert%22)

> Successfully connected to Google Drive! Save the changes to store the settings.

```diff
-Erfolgreich mit Google Drive verbunden! Speichere die Änderungen, um die Einstellungen zu übernehmen.
+Erfolgreich mit Google Drive verbunden! Speichern Sie die Änderungen, um die Einstellungen zu übernehmen.
```

Erfolgreich mit Google Drive verbunden! <del>Speichere</del><ins>Speichern Sie</ins> die Änderungen, um die Einstellungen zu übernehmen.

#### [`datitisev-backup.admin.adapter-settings-modal.local.target.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.local.target.description%22)

> Specify the local directory to save backups to.

```diff
-Gib das lokale Verzeichnis an, in dem Backups gespeichert werden sollen.
+Geben Sie das lokale Verzeichnis an, in dem Backups gespeichert werden sollen.
```

<del>Gib</del><ins>Geben Sie</ins> das lokale Verzeichnis an, in dem Backups gespeichert werden sollen.

#### [`datitisev-backup.admin.adapter-settings-modal.timestamp_help`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.timestamp_help%22)

> Specify the format for timestamps in backup filenames. The default is &lt;code&gt;U&lt;/code&gt; (Unix timestamp). Uses &lt;a&gt;PHP date formatting&lt;/a&gt;. Unsafe filename characters will be sanitized. The filename will be in the format &lt;code&gt;{forum}-\[formatted timestamp\].zip&lt;/code&gt;.
>

```diff
-Gib das Format für Zeitstempel in Sicherungsdateinamen an. Der Standardwert ist <code>U</code> (Unix-Zeitstempel). Verwendet <a>PHP-Datumsformatierung</a>. Unsichere Dateinamenzeichen werden bereinigt. Der Dateiname hat das Format <code>{forum}-[formatierter Zeitstempel].zip</code>.
+Geben Sie das Format für Zeitstempel in Sicherungsdateinamen an. Der Standardwert ist <code>U</code> (Unix-Zeitstempel). Verwendet <a>PHP-Datumsformatierung</a>. Unsichere Dateinamenzeichen werden bereinigt. Der Dateiname hat das Format <code>{forum}-[formatierter Zeitstempel].zip</code>.

```

<del>Gib</del><ins>Geben Sie</ins> das Format für Zeitstempel in Sicherungsdateinamen an. Der Standardwert ist &lt;code&gt;U&lt;/code&gt; (Unix-Zeitstempel). Verwendet &lt;a&gt;PHP-Datumsformatierung&lt;/a&gt;. Unsichere Dateinamenzeichen werden bereinigt. Der Dateiname hat das Format &lt;code&gt;{forum}-\[formatierter Zeitstempel\].zip&lt;/code&gt;.<br />

#### [`datitisev-backup.admin.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.delete_confirmation%22)

> Are you sure you want to delete "{name}" ({adapter})?

```diff
-Möchtest du „{name}“ ({adapter}) wirklich löschen?
+Möchten Sie „{name}“ ({adapter}) wirklich löschen?
```

<del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> „{name}“ ({adapter}) wirklich löschen?

#### [`datitisev-backup.admin.nav.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.nav.description%22)

> Store copies of your forum.

```diff
-Speicher Kopien Deines Forums.
+Speichern Sie Kopien Ihres Forums.
```

<del>Speicher</del><ins>Speichern Sie</ins> Kopien <del>Deines</del><ins>Ihres</ins> Forums.

#### [`datitisev-backup.admin.required-package-modal.content`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.required-package-modal.content%22)

> In order to use this driver you'll need to install a specific package. You can do so by running the following composer command: &lt;code&gt;composer require {package}&lt;/code&gt; in your Flarum installation directory.
>

```diff
-Um diesen Treiber verwenden zu können, musst Du ein bestimmtes Paket installieren. Führe dazu den folgenden Composer-Befehl in deinem Flarum-Installationsverzeichnis aus: <code>composer require {package}</code>.
+Um diesen Treiber verwenden zu können, müssen Sie ein bestimmtes Paket installieren. Führen Sie dazu den folgenden Composer-Befehl in Ihrem Flarum-Installationsverzeichnis aus: <code>composer require {package}</code>.

```

Um diesen Treiber verwenden zu können, <del>musst</del><ins>müssen</ins> <del>Du</del><ins>Sie</ins> ein bestimmtes Paket installieren. <del>Führe</del><ins>Führen Sie</ins> dazu den folgenden Composer-Befehl in <del>deinem</del><ins>Ihrem</ins> Flarum-Installationsverzeichnis aus: &lt;code&gt;composer require {package}&lt;/code&gt;.<br />

#### [`datitisev-backup.admin.settings.database_bin_path_help`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de@formal/?q=context%3A%3D%22datitisev-backup.admin.settings.database_bin_path_help%22)

> If your database binaries (e.g. mysqldump, pg\_dump) are not in your system's PATH, you can specify the directory where they are located here. Make sure to include the trailing slash (e.g. &lt;code&gt;/usr/local/mysql/bin/&lt;/code&gt;).
>

```diff
-Wenn sich die Binärdateien deiner Datenbank (z. B. mysqldump, pg_dump) nicht im PATH deines Systems befinden, kannst du hier das Verzeichnis angeben, in dem sie sich befinden. Achte darauf, den abschließenden Schrägstrich anzugeben (z. B. <code>/usr/local/mysql/bin/</code>).
+Wenn sich die Binärdateien Ihrer Datenbank (z. B. mysqldump, pg_dump) nicht im PATH Ihres Systems befinden, können Sie hier das Verzeichnis angeben, in dem sie sich befinden. Achten Sie darauf, den abschließenden Schrägstrich anzugeben (z. B. <code>/usr/local/mysql/bin/</code>).

```

Wenn sich die Binärdateien <del>deiner</del><ins>Ihrer</ins> Datenbank (z. B. mysqldump, pg\_dump) nicht im PATH <del>deines</del><ins>Ihres</ins> Systems befinden, <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> hier das Verzeichnis angeben, in dem sie sich befinden. <del>Achte</del><ins>Achten Sie</ins> darauf, den abschließenden Schrägstrich anzugeben (z. B. &lt;code&gt;/usr/local/mysql/bin/&lt;/code&gt;).<br />


### `datlechin-bbcode-hide-content`

#### [`datlechin-bbcode-hide-content.forum.must_be_logged_in`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/de@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_be_logged_in%22)

> You must be logged in to view this content

```diff
-Du musst angemeldet sein, um diesen Inhalt ansehen zu können.
+Sie müssen angemeldet sein, um diesen Inhalt ansehen zu können
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> angemeldet sein, um diesen Inhalt ansehen zu <del>können.</del><ins>können</ins>

#### [`datlechin-bbcode-hide-content.forum.must_liked`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/de@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_liked%22)

> You must like this content to view it

```diff
-Du musst diesen Inhalt liken, um ihn ansehen zu können.
+Sie müssen diesen Inhalt liken, um ihn ansehen zu können
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> diesen Inhalt liken, um ihn ansehen zu <del>können.</del><ins>können</ins>

#### [`datlechin-bbcode-hide-content.forum.must_replied`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/de@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_replied%22)

> You must reply to this content to view it

```diff
-Du musst auf diesen Inhalt antworten, um ihn ansehen zu können.
+Sie müssen auf diesen Inhalt antworten, um ihn ansehen zu können
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> auf diesen Inhalt antworten, um ihn ansehen zu <del>können.</del><ins>können</ins>


### `datlechin-birthdays`

#### [`datlechin-birthdays.admin.settings.date_format_help`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.date_format_help%22)

> Use the &lt;a&gt;dayjs&lt;/a&gt; date format. Leave blank to use the default format.

```diff
-Verwende das <a>dayjs</a>-Datumsformat. Lasse das Feld leer, um das Standardformat zu verwenden.
+Das <a>dayjs</a>-Datumsforma verwenden. Lassen Sie dieses Feld leer, um das Standardformat zu verwenden.
```

<del>Verwende</del><ins>Das</ins> <del>das</del><ins>&lt;a&gt;dayjs&lt;/a&gt;-Datumsforma</ins> <del>&lt;a&gt;dayjs&lt;/a&gt;-Datumsformat.</del><ins>verwenden.</ins> <del>Lasse</del><ins>Lassen</ins> <del>das</del><ins>Sie dieses</ins> Feld leer, um das Standardformat zu verwenden.

#### [`datlechin-birthdays.admin.settings.required_help`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.required_help%22)

> You need enable Set on registration option to make this option work

```diff
-Du musst die Option Bei Registrierung festlegen aktivieren, damit diese Option funktioniert
+Sie müssen die Option Bei Registrierung festlegen aktivieren, damit diese Einstellung funktioniert
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> die Option Bei Registrierung festlegen aktivieren, damit diese <del>Option</del><ins>Einstellung</ins> funktioniert

#### [`datlechin-birthdays.api.invalid_age_message`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.api.invalid_age_message%22)

> Your age must be at least {minAge} years old.

```diff
-Dein Alter muss mindestens {minAge} Jahre betragen.
+Ihr Alter muss mindestens {minAge} Jahre betragen.
```

<del>Dein</del><ins>Ihr</ins> Alter muss mindestens {minAge} Jahre betragen.

#### [`datlechin-birthdays.forum.settings.show_dob_year_help`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.forum.settings.show_dob_year_help%22)

> This will allow people to see your age.

```diff
-Dadurch können die Leute Dein Alter sehen.
+Das erlaubt andere Benutzer Ihr Alter zu sehen.
```

<del>Dadurch</del><ins>Das</ins> <del>können</del><ins>erlaubt</ins> <del>die</del><ins>andere</ins> <del>Leute</del><ins>Benutzer</ins> <del>Dein</del><ins>Ihr</ins> Alter<ins> zu</ins> sehen.

#### [`datlechin-birthdays.ref.date_of_birth`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/de@formal/?q=context%3A%3D%22datlechin-birthdays.ref.date_of_birth%22)

> Date of Birth

```diff
-Geburtsdatum
+Geburtstag
```


### `datlechin-copy-links`

#### [`datlechin-copy-links.forum.link_copied_message`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/de@formal/?q=context%3A%3D%22datlechin-copy-links.forum.link_copied_message%22)

> Link copied to clipboard!

```diff
-Link in Zwischenablage gespeichert!
+Link in der Zwischenablage gespeichert!
```

Link in <ins>der </ins>Zwischenablage gespeichert!


### `datlechin-link-preview`

#### [`datlechin-link-preview.admin.settings.blacklist_help`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.blacklist_help%22)

> Specify domains or URLs that should not generate link previews. Use commas to separate multiple entries.

```diff
-Gib Domains oder URLs an, die keine Link-Vorschauen erzeugen sollen. Mehrere Einträge durch Kommas trennen.
+Geben Sie eine kommagetrennte Liste von Domains oder URLs ein, die von der Linkvorschau ausgeschlossen werden sollen.
```

<del>Gib</del><ins>Geben Sie eine kommagetrennte Liste von</ins> Domains oder URLs <del>an,</del><ins>ein,</ins> die<del> keine Link-Vorschauen erzeugen</del> <del>sollen.</del><ins>von</ins> <del>Mehrere</del><ins>der</ins> <del>Einträge</del><ins>Linkvorschau</ins> <del>durch</del><ins>ausgeschlossen</ins> <del>Kommas</del><ins>werden</ins> <del>trennen.</del><ins>sollen.</ins>

#### [`datlechin-link-preview.admin.settings.blacklist_label`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.blacklist_label%22)

> Domain Blacklist

```diff
-Sperrliste für Domains
+Blacklist
```

#### [`datlechin-link-preview.admin.settings.blacklist_placeholder`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.blacklist_placeholder%22)

> Examples: facebook.com, twitter.com/specific-page

```diff
-Beispiele: facebook.com, twitter.com/spezifische-seite
+z.B. facebook.com,https://domain.com/path
```

#### [`datlechin-link-preview.admin.settings.cache_time_help`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.cache_time_help%22)

> How long to store link previews before refreshing. Set to 0 to disable caching. Default: 60 minutes.

```diff
-Legt fest, wie lange Link-Vorschauen gespeichert werden, bevor sie aktualisiert werden. Auf 0 setzen, um das Caching zu deaktivieren. Standard: 60 Minuten.
+Anzahl der Minuten, die gecrawlte Links zwischengespeichert werden, bevor sie erneut aufgerufen werden. Mit dem Wert 0 wird das Link-Caching deaktiviert. Der Standardwert ist 60 Minuten, wenn er nicht gesetzt ist.
```

<del>Legt</del><ins>Anzahl</ins> <del>fest,</del><ins>der</ins> <del>wie</del><ins>Minuten,</ins> <del>lange</del><ins>die</ins> <del>Link-Vorschauen</del><ins>gecrawlte</ins> <del>gespeichert</del><ins>Links zwischengespeichert</ins> werden, bevor sie <del>aktualisiert</del><ins>erneut aufgerufen</ins> werden. <del>Auf</del><ins>Mit</ins> <del>0</del><ins>dem</ins> <del>setzen,</del><ins>Wert</ins> <del>um</del><ins>0 wird</ins> das <del>Caching</del><ins>Link-Caching</ins> <del>zu</del><ins>deaktiviert.</ins> <del>deaktivieren.</del><ins>Der</ins> <del>Standard:</del><ins>Standardwert ist</ins> 60 <del>Minuten.</del><ins>Minuten, wenn er nicht gesetzt ist.</ins>

#### [`datlechin-link-preview.admin.settings.cache_time_label`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.cache_time_label%22)

> Cache Duration (minutes)

```diff
-Speicherdauer im Cache (Minuten)
+Dauer des Zwischenspeicherns
```

#### [`datlechin-link-preview.admin.settings.convert_media_urls_help`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.convert_media_urls_help%22)

> Generate previews for URLs that point to media files (images, videos, etc.).

```diff
-Vorschauen für URLs erzeugen, die auf Mediendateien (Bilder, Videos usw.) verweisen.
+Wenn aktiviert, werden alle Medien-URLs in eine Linkvorschau umgewandelt.
```

#### [`datlechin-link-preview.admin.settings.convert_media_urls_label`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.convert_media_urls_label%22)

> Preview Media URLs

```diff
-URLs für Medienvorschauen
+Medien-URLs umwandeln
```

#### [`datlechin-link-preview.admin.settings.open_links_in_new_tab_help`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.open_links_in_new_tab_help%22)

> Always open previewed links in a new browser tab.

```diff
-Alle Vorschau-Links standardmäßig in einem neuen Tab öffnen.
+Wenn aktiviert, werden die Links in einem neuen Tab geöffnet.
```

<del>Alle</del><ins>Wenn</ins> <del>Vorschau-Links</del><ins>aktiviert,</ins> <del>standardmäßig</del><ins>werden die Links</ins> in einem neuen Tab <del>öffnen.</del><ins>geöffnet.</ins>

#### [`datlechin-link-preview.admin.settings.open_links_in_new_tab_label`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.open_links_in_new_tab_label%22)

> Open Links in New Tab

```diff
-Links in einem neuen Browser-Tab öffnen
+Links in einem neuen Tab öffnen
```

Links in einem neuen <del>Browser-Tab</del><ins>Tab</ins> öffnen

#### [`datlechin-link-preview.admin.settings.use_google_favicons_help`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.use_google_favicons_help%22)

> Show website favicons using Google's Favicon service to enhance visual recognition.

```diff
-Website-Favicons über den Google-Favicon-Dienst anzeigen, um die visuelle Erkennung zu verbessern.
+Wenn aktiviert, wird ein Google-Dienst im Frontend verwendet, um das Favicon der jeweiligen Webseite abzurufen.
```

<del>Website-Favicons</del><ins>Wenn</ins> <del>über</del><ins>aktiviert,</ins> <del>den</del><ins>wird</ins> <del>Google-Favicon-Dienst</del><ins>ein</ins> <del>anzeigen,</del><ins>Google-Dienst im Frontend verwendet,</ins> um <del>die</del><ins>das</ins> <del>visuelle</del><ins>Favicon</ins> <del>Erkennung</del><ins>der</ins> <del>zu</del><ins>jeweiligen</ins> <del>verbessern.</del><ins>Webseite abzurufen.</ins>

#### [`datlechin-link-preview.admin.settings.use_google_favicons_label`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.use_google_favicons_label%22)

> Display Site Icons

```diff
-Icons der Websites anzeigen
+Google Favicon-API verwenden
```

#### [`datlechin-link-preview.admin.settings.whitelist_help`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.whitelist_help%22)

> Only generate previews for these domains or URLs. Leave empty to allow all non-blacklisted domains.

```diff
-Vorschauen nur für die angegebenen Domains oder URLs erstellen. Feld leer lassen, um alle Domains, die nicht auf der Blacklist stehen, zuzulassen.
+Geben Sie eine kommagetrennte Liste von Domains oder URLs ein, die eine Linkvorschau ermöglichen sollen.
```

<del>Vorschauen</del><ins>Geben</ins> <del>nur</del><ins>Sie</ins> <del>für</del><ins>eine</ins> <del>die</del><ins>kommagetrennte</ins> <del>angegebenen</del><ins>Liste von</ins> Domains oder URLs<del> erstellen. Feld leer lassen, um alle</del> <del>Domains,</del><ins>ein,</ins> die<del> nicht auf</del> <del>der</del><ins>eine</ins> <del>Blacklist</del><ins>Linkvorschau</ins> <del>stehen,</del><ins>ermöglichen</ins> <del>zuzulassen.</del><ins>sollen.</ins>

#### [`datlechin-link-preview.admin.settings.whitelist_label`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.whitelist_label%22)

> Domain Whitelist

```diff
-Freigabeliste für Domains
+Whitelist
```

#### [`datlechin-link-preview.admin.settings.whitelist_placeholder`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.admin.settings.whitelist_placeholder%22)

> Examples: trusted-site.com, specific-domain.org/path

```diff
-Beispiele: trusted-site.com, specific-domain.org/pfad
+z.B. facebook.com,https://domain.com/pfad
```

#### [`datlechin-link-preview.forum.site_cannot_be_reached`](https://weblate.rob006.net/translate/flarum2/datlechin-link-preview/de@formal/?q=context%3A%3D%22datlechin-link-preview.forum.site_cannot_be_reached%22)

> Unable to load preview. Please check the URL and try again.

```diff
-Vorschau konnte nicht geladen werden. Bitte die URL prüfen und erneut versuchen.
+Diese Webseite ist nicht erreichbar.
```


### `flarum-approval`

#### [`flarum-approval.admin.permissions.reply_without_approval_label`](https://weblate.rob006.net/translate/flarum2/flarum-approval/de@formal/?q=context%3A%3D%22flarum-approval.admin.permissions.reply_without_approval_label%22)

> Reply to discussions without approval

```diff
-Auf eine Diskussion antworten ohne Genehmigung
+Auf eine Diskussion ohne Genehmigung antworten
```

Auf eine Diskussion <del>antworten </del>ohne Genehmigung<ins> antworten</ins>

#### [`flarum-approval.admin.permissions.start_discussions_without_approval_label`](https://weblate.rob006.net/translate/flarum2/flarum-approval/de@formal/?q=context%3A%3D%22flarum-approval.admin.permissions.start_discussions_without_approval_label%22)

> Start discussions without approval

```diff
-Diskussion starten ohne Genehmigung
+Diskussionen ohne Genehmigung starten
```

<del>Diskussion starten</del><ins>Diskussionen</ins> ohne Genehmigung<ins> starten</ins>


### `flarum-emoji`

#### [`flarum-emoji.forum.composer.type_to_search_text`](https://weblate.rob006.net/translate/flarum2/flarum-emoji/de@formal/?q=context%3A%3D%22flarum-emoji.forum.composer.type_to_search_text%22)

> Type to search for an emoji

```diff
-Tippen, um nach Emojis zu suchen
+Tippen Sie, um nach Emojis zu suchen
```

<del>Tippen,</del><ins>Tippen Sie,</ins> um nach Emojis zu suchen


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.auth_config.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_confirmation%22)

> Are you sure you want to delete this authentication method?

```diff
-Bist du sicher, dass du diese Authentifizierungsmethode löschen möchtest?
+Sind sie sicher, dass sie diese Authentifizierungsmethode löschen möchten?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>sie</ins> sicher, dass <del>du</del><ins>sie</ins> diese Authentifizierungsmethode löschen <del>möchtest?</del><ins>möchten?</ins>

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
-Bist du sicher, dass du dieses Repository löschen willst? Alle daraus installierten Erweiterungen werden entfernt.
+Sind sie sicher, dass sie dieses Repository löschen wollen? Alle daraus installierten Erweiterungen werden entfernt.
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>sie</ins> sicher, dass <del>du</del><ins>sie</ins> dieses Repository löschen <del>willst?</del><ins>wollen?</ins> Alle daraus installierten Erweiterungen werden entfernt.

#### [`flarum-extension-manager.admin.composer.minimum_stability.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.help%22)

> The type of packages allowed to be installed. Do not change this unless you know what you are doing.

```diff
-Die Art von Paketen, die installiert werden dürfen. Ändere dies nur, wenn du weißt, was du tust.
+Die Art von Paketen, die installiert werden dürfen. Ändern sie dies nur, wenn sie wissen, was sie tun.
```

Die Art von Paketen, die installiert werden dürfen. <del>Ändere</del><ins>Ändern sie</ins> dies nur, wenn <del>du</del><ins>sie</ins> <del>weißt,</del><ins>wissen,</ins> was <del>du</del><ins>sie</ins> <del>tust.</del><ins>tun.</ins>

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.dev`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.dev%22)

> Dev

```diff
-Dev
+Entwickler
```

#### [`flarum-extension-manager.admin.composer.repositories.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.help%22)

> Add additional repositories to install packages from. This is an advanced feature, do not add repositories that are not trusted, as they can be used to execute malicious code on your server.
>

```diff
-Füge zusätzliche Repositories hinzu, um Pakete daraus zu installieren. Das ist eine fortgeschrittene Funktion, füge keine Repositories hinzu, denen du nicht vertraust, da sie genutzt werden können, um schädlichen Code auf deinem Server auszuführen.
+Fügen sie zusätzliche Repositories hinzu, um Pakete daraus zu installieren. Dies ist eine fortgeschrittene Funktion, fügen sie keine Repositories hinzu, denen sie nicht vertrauen, da sie genutzt werden können, um schädlichen Code auf ihrem Server auszuführen.

```

<del>Füge</del><ins>Fügen sie</ins> zusätzliche Repositories hinzu, um Pakete daraus zu installieren. <del>Das</del><ins>Dies</ins> ist eine fortgeschrittene Funktion, <del>füge</del><ins>fügen sie</ins> keine Repositories hinzu, denen <del>du</del><ins>sie</ins> nicht <del>vertraust,</del><ins>vertrauen,</ins> da sie genutzt werden können, um schädlichen Code auf <del>deinem</del><ins>ihrem</ins> Server auszuführen.<br />

#### [`flarum-extension-manager.admin.exceptions.composer_command_failure`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.composer_command_failure%22)

> Failed to execute. Check the composer logs in storage/logs/composer.

```diff
-Ausführung fehlgeschlagen. Überprüfe die Composer-Logs in storage/logs/composer.
+Ausführung fehlgeschlagen. Überprüfen sie die Composer-Logs in storage/logs/composer.
```

Ausführung fehlgeschlagen. <del>Überprüfe</del><ins>Überprüfen sie</ins> die Composer-Logs in storage/logs/composer.

#### [`flarum-extension-manager.admin.extensions.install_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install_help%22)

> Fill in the extension package name to proceed. You can specify a &lt;semantic\_link&gt;semantic version&lt;/semantic\_link&gt; using the format &lt;code&gt;vendor/package-name:version&lt;/code&gt;. Visit {link} to browse available packages.
>

```diff
-Gib den Namen des Erweiterungspakets ein, um fortzufahren. Du kannst eine <semantic_link>semantische Version</semantic_link> im Format <code>Anbieter/Paketname:Version</code> angeben. Besuche {link}, um verfügbare Pakete zu durchsuchen.
+Geben Sie den Paketnamen der Erweiterung ein, um fortzufahren. Sie können eine <semantic_link>semantische Version</semantic_link> angeben, indem Sie das Format <code>vendor/package-name:version</code> verwenden. Besuchen Sie {link}, um Pakete zu durchsuchen.

```

<del>Gib</del><ins>Geben Sie</ins> den <del>Namen</del><ins>Paketnamen</ins> <del>des</del><ins>der</ins> <del>Erweiterungspakets</del><ins>Erweiterung</ins> ein, um fortzufahren. <del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> eine &lt;semantic\_link&gt;semantische Version&lt;/semantic\_link&gt; <del>im</del><ins>angeben, indem Sie das</ins> Format <del>&lt;code&gt;Anbieter/Paketname:Version&lt;/code&gt;</del><ins>&lt;code&gt;vendor/package-name:version&lt;/code&gt;</ins> <del>angeben.</del><ins>verwenden.</ins> <del>Besuche</del><ins>Besuchen Sie</ins> {link}, um<del> verfügbare</del> Pakete zu durchsuchen.<br />

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
-Große Flarum-Updates sind nicht rückwärtskompatibel, was bedeutet, dass einige deiner derzeit installierten Erweiterungen und manuell durchgeführten Änderungen möglicherweise nicht mit dieser neuen Version funktionieren. Bitte stelle sicher, dass du ein Backup deiner Datenbank und Dateien erstellst, bevor du fortfährst.
+Große Flarum-Updates sind nicht rückwärtskompatibel, was bedeutet, dass einige ihrer derzeit installierten Erweiterungen und manuell durchgeführten Änderungen möglicherweise nicht mit dieser neuen Version funktionieren. Bitte stellen sie sicher, dass sie ein Backup Ihrer Datenbank und Dateien erstellen, bevor sie fortfahren.

```

Große Flarum-Updates sind nicht rückwärtskompatibel, was bedeutet, dass einige <del>deiner</del><ins>ihrer</ins> derzeit installierten Erweiterungen und manuell durchgeführten Änderungen möglicherweise nicht mit dieser neuen Version funktionieren. Bitte <del>stelle</del><ins>stellen sie</ins> sicher, dass <del>du</del><ins>sie</ins> ein Backup <del>deiner</del><ins>Ihrer</ins> Datenbank und Dateien <del>erstellst,</del><ins>erstellen,</ins> bevor <del>du</del><ins>sie</ins> <del>fortfährst.</del><ins>fortfahren.</ins><br />

#### [`flarum-extension-manager.admin.major_updater.dry_run_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run_help%22)

> A dry run emulates the update to see if your current setup can safely update, this does not mean that your manual made custom modifications will work in the newer version.

```diff
-Ein Testlauf simuliert das Update, um zu sehen, ob dein aktuelles Setup sicher aktualisiert werden kann. Das bedeutet nicht, dass deine manuell vorgenommenen Anpassungen in der neueren Version funktionieren.
+Ein Testlauf simuliert das Update, um zu sehen, ob ihr aktuelles Setup sicher aktualisiert werden kann. Das bedeutet nicht, dass ihre manuell vorgenommenen Anpassungen in der neueren Version funktionieren.
```

Ein Testlauf simuliert das Update, um zu sehen, ob <del>dein</del><ins>ihr</ins> aktuelles Setup sicher aktualisiert werden kann. Das bedeutet nicht, dass <del>deine</del><ins>ihre</ins> manuell vorgenommenen Anpassungen in der neueren Version funktionieren.

#### [`flarum-extension-manager.admin.minor_update_confirmation.content`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.minor_update_confirmation.content%22)

> This will also update any other extensions/packages with available updates.

```diff
-Dadurch werden auch alle anderen Erweiterungen/Pakete mit verfügbaren Updates aktualisiert.
+Dadurch werden auch alle anderen Erweiterungen/Pakete aktualisiert, für die Aktualisierungen verfügbar sind.
```

Dadurch werden auch alle anderen Erweiterungen/Pakete <del>mit</del><ins>aktualisiert,</ins> <del>verfügbaren</del><ins>für</ins> <del>Updates</del><ins>die</ins> <del>aktualisiert.</del><ins>Aktualisierungen verfügbar sind.</ins>

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
-Bitte sei vorsichtig, wem du Zugang zum Admin-Bereich gibst. Der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.
+Bitte seien sie vorsichtig, wem sie Zugang zum Admin-Bereich geben, der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.
```

Bitte <del>sei</del><ins>seien sie</ins> vorsichtig, wem <del>du</del><ins>sie</ins> Zugang zum Admin-Bereich <del>gibst.</del><ins>geben,</ins> <del>Der</del><ins>der</ins> Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.

#### [`flarum-extension-manager.admin.settings.debug_mode_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.debug_mode_warning%22)

> You are running in debug mode, the extension manager cannot properly install and update local development packages. Please use the command line interface instead for such purposes.

```diff
-Du bist im Debug-Modus, der Erweiterungs-Manager kann lokale Entwicklungs-Pakete nicht richtig installieren und aktualisieren. Bitte benutze für solche Zwecke stattdessen die Kommandozeile.
+Sie sind im Debug-Modus, der Erweiterungs-Manager kann lokale Entwicklungs-Pakete nicht richtig installieren und aktualisieren. Bitte benutzen sie für solche Zwecke stattdessen die Kommandozeilen-Schnittstelle.
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> im Debug-Modus, der Erweiterungs-Manager kann lokale Entwicklungs-Pakete nicht richtig installieren und aktualisieren. Bitte <del>benutze</del><ins>benutzen sie</ins> für solche Zwecke stattdessen die <del>Kommandozeile.</del><ins>Kommandozeilen-Schnittstelle.</ins>

#### [`flarum-extension-manager.admin.settings.queue_jobs_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.queue_jobs_help%22)

> You can read about a &lt;basic\_impl\_link&gt;basic queue&lt;/basic\_impl\_link&gt; implementation or a &lt;adv\_impl\_link&gt;more advanced&lt;/adv\_impl\_link&gt; one. Make sure the PHP version used for the queue is {php\_version}. Make sure &lt;folder\_perms\_link&gt;folder permissions&lt;/folder\_perms\_link&gt; are correctly configured.
>

```diff
-Du kannst dich über eine <basic_impl_link>einfache Warteschlange</basic_impl_link> oder eine <adv_impl_link>fortgeschrittenere</adv_impl_link> Implementierung informieren. Stelle sicher, dass die für die Warteschlange verwendete PHP-Version {php_version} ist. Prüfe auch, dass die <folder_perms_link>Ordnerberechtigungen</folder_perms_link> korrekt konfiguriert sind.
+Sie können sich über eine <basic_impl_link>einfache Warteschlangen-Implementierung</basic_impl_link> oder eine <adv_impl_link>fortgeschrittenere</adv_impl_link> Variante informieren. Stellen Sie sicher, dass die für die Warteschlange verwendete PHP-Version {php_version} ist. Stellen Sie ausserdem sicher, dass die <folder_perms_link>Ordnerberechtigungen</folder_perms_link> korrekt konfiguriert sind.

```

<del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> <del>dich</del><ins>sich</ins> über eine &lt;basic\_impl\_link&gt;einfache <del>Warteschlange&lt;/basic\_impl\_link&gt;</del><ins>Warteschlangen-Implementierung&lt;/basic\_impl\_link&gt;</ins> oder eine &lt;adv\_impl\_link&gt;fortgeschrittenere&lt;/adv\_impl\_link&gt; <del>Implementierung</del><ins>Variante</ins> informieren. <del>Stelle</del><ins>Stellen Sie</ins> sicher, dass die für die Warteschlange verwendete PHP-Version {php\_version} ist. <del>Prüfe</del><ins>Stellen</ins> <del>auch,</del><ins>Sie ausserdem sicher,</ins> dass die &lt;folder\_perms\_link&gt;Ordnerberechtigungen&lt;/folder\_perms\_link&gt; korrekt konfiguriert sind.<br />


### `flarum-flags`

#### [`flarum-flags.admin.settings.flag_own_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.admin.settings.flag_own_posts_label%22)

> Allow users to flag their own posts

```diff
-Erlaube Benutzern, eigene Beiträge zu melden
+Benutzern erlauben Ihre eigenen Beiträge zu melden
```

<del>Erlaube</del><ins>Benutzern</ins> <del>Benutzern,</del><ins>erlauben</ins> <del>eigene</del><ins>Ihre eigenen</ins> Beiträge zu melden

#### [`flarum-flags.forum.flag_post.confirmation_message`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.confirmation_message%22)

> Thank you for flagging this post. Our moderators will look into it.

```diff
-Danke für das Melden des Beitrags. Unsere Moderatoren werden sich darum kümmern.
+Vielen Dank, dass Sie diesen Beitrag gemeldet haben. Unsere Moderatoren werden sich um das Anliegen kümmern.
```

<del>Danke</del><ins>Vielen</ins> <del>für</del><ins>Dank,</ins> <del>das</del><ins>dass</ins> <del>Melden</del><ins>Sie</ins> <del>des</del><ins>diesen</ins> <del>Beitrags.</del><ins>Beitrag gemeldet haben.</ins> Unsere Moderatoren werden sich <del>darum</del><ins>um das Anliegen</ins> kümmern.

#### [`flarum-flags.forum.flag_post.reason_inappropriate_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_inappropriate_text%22)

> This post is offensive, abusive, or violates our &lt;a&gt;community guidelines&lt;/a&gt;.

```diff
-Dieser Beitrag ist anstößig, beleidigend oder verstößt gegen unsere <a>Community-Richtlinien</a>.
+Dieser Beitrag ist anstößig, beleidigend oder verstößt gegen die <a>Community-Richtlinien</a>.
```

Dieser Beitrag ist anstößig, beleidigend oder verstößt gegen <del>unsere</del><ins>die</ins> &lt;a&gt;Community-Richtlinien&lt;/a&gt;.

#### [`flarum-flags.forum.flag_post.reason_missing_message`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_missing_message%22)

> Please provide some details for our moderators.

```diff
-Bitte gebe einen Grund an.
+Bitte geben Sie einen Grund an.
```

Bitte <del>gebe</del><ins>geben Sie</ins> einen Grund an.

#### [`flarum-flags.forum.flag_post.reason_spam_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de@formal/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_spam_text%22)

> This post is an advertisement.

```diff
-Dieser Beitrag ist Werbung oder Spam.
+Dieser Beitrag ist Werbung.
```

Dieser Beitrag ist <del>Werbung oder Spam.</del><ins>Werbung.</ins>


### `flarum-gdpr`

#### [`flarum-gdpr.admin.gdpr_page.data_types.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.help_text%22)

> These are the currently registered data types. Each type is listed along with it's associated export, anonymization, and deletion actions. If an extension handles any data which falls under GDPR regulations, it should register it's data types with &lt;code&gt;flarum/gdpr&lt;/code&gt;.
> Data stored in the &lt;code&gt;user&lt;/code&gt; table is handled seperately, see user table data below.
>

```diff
-Hier sind die derzeit registrierten Datentypen aufgeführt. Jeder Typ wird zusammen mit den zugehörigen Export-, Anonymisierungs- und Löschungsaktionen aufgeführt. Wenn eine Erweiterung Daten verarbeitet, die unter die DSGVO-Vorschriften fallen, so sollte sie ihre Datentypen bei <code>blomstra/gdpr</code> registrieren.
-Daten, die in der <code>Benutzer</code>-Tabelle gespeichert sind, werden gesondert behandelt, siehe Benutzertabellendaten unten.
+Hier sind die derzeit registrierten Datentypen aufgeführt. Jeder Typ wird zusammen mit den zugehörigen Export-, Anonymisierungs- und Löschungsaktionen aufgeführt. Wenn eine Erweiterung Daten verarbeitet, die unter die DSGVO-Vorschriften fallen, so sollte sie ihre Datentypen bei <code>flarum/gdpr</code> registrieren.
+Daten, die in der <code>Benutzer</code>-Tabelle gespeichert sind, werden gesondert behandelt, siehe „Daten der Benutzertabelle“ unten.

```

Hier sind die derzeit registrierten Datentypen aufgeführt. Jeder Typ wird zusammen mit den zugehörigen Export-, Anonymisierungs- und Löschungsaktionen aufgeführt. Wenn eine Erweiterung Daten verarbeitet, die unter die DSGVO-Vorschriften fallen, so sollte sie ihre Datentypen bei <del>&lt;code&gt;blomstra/gdpr&lt;/code&gt;</del><ins>&lt;code&gt;flarum/gdpr&lt;/code&gt;</ins> registrieren.<br />Daten, die in der &lt;code&gt;Benutzer&lt;/code&gt;-Tabelle gespeichert sind, werden gesondert behandelt, siehe <del>Benutzertabellendaten</del><ins>„Daten der Benutzertabelle“</ins> unten.<br />

#### [`flarum-gdpr.admin.settings.gdpr_page.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.help_text%22)

> Before deciding on which actions to use on your forum, it is vital to understand which data is integrated, and how it is handled for both anonymization and deletion. Vist the GDPR overview to understand how data is handled, and which optional extensions have registered their data to be handled by this extension.

```diff
-Vor der Entscheidung, welche Aktionen in deinem Forum verwendet werden sollen, ist es wichtig zu verstehen, welche Daten integriert werden und wie sie sowohl für die Anonymisierung als auch für die Löschung behandelt werden. Informiere dich in der DSGVO-Übersicht darüber, wie die Daten behandelt werden und welche optionalen Erweiterungen die Daten für die Behandlung durch diese Erweiterung registriert haben.
+Vor der Entscheidung, welche Aktionen in Ihrem Forum verwendet werden sollen, ist es wichtig zu verstehen, welche Daten integriert werden und wie sie sowohl für die Anonymisierung als auch für die Löschung behandelt werden. Informieren Sie sich in der DSGVO-Übersicht darüber, wie die Daten behandelt werden und welche optionalen Erweiterungen die Daten für die Behandlung durch diese Erweiterung registriert haben.
```

Vor der Entscheidung, welche Aktionen in <del>deinem</del><ins>Ihrem</ins> Forum verwendet werden sollen, ist es wichtig zu verstehen, welche Daten integriert werden und wie sie sowohl für die Anonymisierung als auch für die Löschung behandelt werden. <del>Informiere</del><ins>Informieren</ins> <del>dich</del><ins>Sie sich</ins> in der DSGVO-Übersicht darüber, wie die Daten behandelt werden und welche optionalen Erweiterungen die Daten für die Behandlung durch diese Erweiterung registriert haben.

#### [`flarum-gdpr.email.confirm_erasure.body`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.confirm_erasure.body%22)

> Someone (hopefully you) just requested to erase the account \`{display\_name}\`.
>
> To confirm this action, please follow the following link, after which your request will be processed by our team.
>
> {erasure\_confirm\_url}
>

```diff
-Jemand (hoffentlich du) hat gerade die Löschung des Kontos „{display_name}“ beantragt.
+Jemand (hoffentlich Sie) hat gerade die Löschung des Kontos „{display_name}“ beantragt.

-Um diesen Vorgang zu bestätigen, folge bitte dem folgenden Link. Anschließend wird dein Antrag von unserem Team bearbeitet.
+Um diesen Vorgang zu bestätigen, folgen Sie bitte dem folgenden Link. Anschließend wird Ihr Antrag von unserem Team bearbeitet.

 {erasure_confirm_url}

```

Jemand (hoffentlich <del>du)</del><ins>Sie)</ins> hat gerade die Löschung des Kontos „{display\_name}“ beantragt.<br /><br />Um diesen Vorgang zu bestätigen, <del>folge</del><ins>folgen Sie</ins> bitte dem folgenden Link. Anschließend wird <del>dein</del><ins>Ihr</ins> Antrag von unserem Team bearbeitet.<br /><br />{erasure\_confirm\_url}<br />

#### [`flarum-gdpr.email.erasure_cancelled.body`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_cancelled.body%22)

> This is an automatic notification that your request to cancel account deletion has been processed.
>
> Your account will no longer be deleted.
>

```diff
-Dies ist eine automatische Benachrichtigung, dass deine Anfrage zur Stornierung der Kontolöschung bearbeitet wurde.
+Dies ist eine automatische Benachrichtigung, dass Ihre Anfrage zur Rücknahme der Kontolöschung bearbeitet wurde.

-Dein Konto wird nicht mehr gelöscht.
+Ihr Konto wird nun nicht mehr gelöscht.

```

Dies ist eine automatische Benachrichtigung, dass <del>deine</del><ins>Ihre</ins> Anfrage zur <del>Stornierung</del><ins>Rücknahme</ins> der Kontolöschung bearbeitet wurde.<br /><br /><del>Dein</del><ins>Ihr</ins> Konto wird<ins> nun</ins> nicht mehr gelöscht.<br />

#### [`flarum-gdpr.email.erasure_completed.anonymization.body`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_completed.anonymization.body%22)

> This is an automatic, final notification that your account has been anonymized.
>

```diff
-Dies ist eine automatische, finale Benachrichtigung darüber, dass dein Konto anonymisiert wurde.
+Dies ist eine automatische, abschließende Benachrichtigung darüber, dass Ihr Konto anonymisiert wurde.

```

Dies ist eine automatische, <del>finale</del><ins>abschließende</ins> Benachrichtigung darüber, dass <del>dein</del><ins>Ihr</ins> Konto anonymisiert wurde.<br />

#### [`flarum-gdpr.email.erasure_completed.deletion.body`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_completed.deletion.body%22)

> This is an automatic, final notification that your account has been deleted.
>

```diff
-Dies ist eine automatische, endgültige Benachrichtigung darüber, dass dein Konto gelöscht wurde.
+Dies ist eine automatische, abschließende Benachrichtigung darüber, dass Ihr Konto gelöscht wurde.

```

Dies ist eine automatische, <del>endgültige</del><ins>abschließende</ins> Benachrichtigung darüber, dass <del>dein</del><ins>Ihr</ins> Konto gelöscht wurde.<br />

#### [`flarum-gdpr.email.export_available.body`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.email.export_available.body%22)

> You requested an export of the account data for {username}. This export has successfully been generated and is now available:
>
> {url}
>
> This export will remain available until {destroys\_at}.
>

```diff
-Du hast einen Export der Kontodaten für {Benutzername} angefordert. Dieser Export wurde erfolgreich erstellt und steht nun zur Verfügung:
+Sie haben einen Export der Kontodaten für {username} angefordert. Dieser Export wurde erfolgreich erstellt und steht nun zur Verfügung:

 {url}

-Dieser Export bleibt bis {destroys_at} verfügbar.
+Dieser Export bleibt bis zum {destroys_at} verfügbar.

```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> einen Export der Kontodaten für <del>{Benutzername}</del><ins>{username}</ins> angefordert. Dieser Export wurde erfolgreich erstellt und steht nun zur Verfügung:<br /><br />{url}<br /><br />Dieser Export bleibt bis<ins> zum</ins> {destroys\_at} verfügbar.<br />

#### [`flarum-gdpr.forum.delete_user.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.text%22)

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

#### [`flarum-gdpr.forum.erasure_request_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_request_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.

```diff
-Du hast deinen Antrag auf Löschung deines Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.
+Sie haben Ihren Antrag auf Löschung Ihres Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> <del>deinen</del><ins>Ihren</ins> Antrag auf Löschung <del>deines</del><ins>Ihres</ins> Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.

#### [`flarum-gdpr.forum.notification.export-ready`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.notification.export-ready%22)

> Your data export for {username} is now ready to download.

```diff
-Dein Datenexport für {username} ist bereit zum Download.
+Ihr Datenexport für {username} ist bereit zum Download.
```

<del>Dein</del><ins>Ihr</ins> Datenexport für {username} ist bereit zum Download.

#### [`flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation%22)

> You should have received an email to confirm your account erasure request.
>

```diff
-Du solltest eine E-Mail zur Bestätigung deiner Löschanfrage erhalten haben.
+Sie sollten eine E-Mail zur Bestätigung Ihrer Löschanfrage erhalten haben.

```

<del>Du</del><ins>Sie</ins> <del>solltest</del><ins>sollten</ins> eine E-Mail zur Bestätigung <del>deiner</del><ins>Ihrer</ins> Löschanfrage erhalten haben.<br />

#### [`flarum-gdpr.forum.request_erasure.status.user_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.user_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.
>

```diff
-Du hast deinen Antrag zur Löschung deines Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.
+Sie haben Ihren Antrag zur Löschung Ihres Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.

```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> <del>deinen</del><ins>Ihren</ins> Antrag zur Löschung <del>deines</del><ins>Ihres</ins> Kontos bestätigt. Wie in der DSGVO vorgeschrieben, werden innerhalb von 30 Tagen Maßnahmen ergriffen.<br />

#### [`flarum-gdpr.forum.settings.export_data_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_help%22)

> Requesting data export will provide you with a downloadable copy of all the information associated with your account. This includes posts, comments, and profile details.

```diff
-Wenn du den Datenexport anforderst, erhältst du eine herunterladbare Kopie aller mit deinem Konto verbundenen Informationen. Dazu gehören Beiträge, Kommentare und Profilangaben.
+Wenn Sie den Datenexport anfordern, erhalten Sie eine herunterladbare Kopie aller mit Ihrem Konto verbundenen Informationen. Dazu gehören Beiträge, Kommentare und Profilangaben.
```

Wenn <del>du</del><ins>Sie</ins> den Datenexport <del>anforderst,</del><ins>anfordern,</ins> <del>erhältst</del><ins>erhalten</ins> <del>du</del><ins>Sie</ins> eine herunterladbare Kopie aller mit <del>deinem</del><ins>Ihrem</ins> Konto verbundenen Informationen. Dazu gehören Beiträge, Kommentare und Profilangaben.

#### [`flarum-gdpr.forum.settings.request_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/de@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_help%22)

> Requesting erasure will permanently delete your account and all associated data. This action is irreversible. Before proceeding, ensure you have saved any content you wish to keep.

```diff
-Wenn du die Löschung beantragst, werden dein Konto und alle damit verbundenen Daten endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden. Vergewissere dich, bevor du fortfährst, dass du alle Inhalte, die du behalten möchtest, gespeichert hast.
+Wenn Sie die Löschung beantragen, werden Ihr Konto und alle damit verbundenen Daten endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden. Vergewissern Sie sich, bevor Sie fortfahren, dass Sie alle Inhalte, die Sie behalten möchten, gespeichert haben.
```

Wenn <del>du</del><ins>Sie</ins> die Löschung <del>beantragst,</del><ins>beantragen,</ins> werden <del>dein</del><ins>Ihr</ins> Konto und alle damit verbundenen Daten endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden. <del>Vergewissere</del><ins>Vergewissern</ins> <del>dich,</del><ins>Sie sich,</ins> bevor <del>du</del><ins>Sie</ins> <del>fortfährst,</del><ins>fortfahren,</ins> dass <del>du</del><ins>Sie</ins> alle Inhalte, die <del>du</del><ins>Sie</ins> behalten <del>möchtest,</del><ins>möchten,</ins> gespeichert <del>hast.</del><ins>haben.</ins>


### `flarum-likes`

#### [`flarum-likes.admin.settings.like_own_posts_help`](https://weblate.rob006.net/translate/flarum2/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.admin.settings.like_own_posts_help%22)

> When enabled, subject to permission, users may 'like' their own posts on the forum. To prevent users placing a 'like' on their own posts, disable this setting.

```diff
-Sofern aktiviert, können Benutzer ihre eigenen Beiträge im Forum mit einem 'Gefällt mir' versehen, wenn sie dazu berechtigt sind. Deaktiviere diese Option um zu verhindern, dass Benutzer ihre eigenen Beiträge mit einem 'Gefällt mir' versehen.
+Sofern aktiviert, können Benutzer ihre eigenen Beiträge im Forum mit einem 'Gefällt mir' versehen, wenn sie dazu berechtigt sind. Deaktivieren Sie diese Option, um zu verhindern, dass Benutzer ihre eigenen Beiträge mit einem 'Gefällt mir' versehen.
```

Sofern aktiviert, können Benutzer ihre eigenen Beiträge im Forum mit einem 'Gefällt mir' versehen, wenn sie dazu berechtigt sind. <del>Deaktiviere</del><ins>Deaktivieren Sie</ins> diese <del>Option</del><ins>Option,</ins> um zu verhindern, dass Benutzer ihre eigenen Beiträge mit einem 'Gefällt mir' versehen.

#### [`flarum-likes.forum.notifications.post_liked_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.forum.notifications.post_liked_text%22)

> {username} liked your post

```diff
-{username} gefällt dein Beitrag
+{username} gefällt Ihr Beitrag
```

{username} gefällt <del>dein</del><ins>Ihr</ins> Beitrag

#### [`flarum-likes.forum.post.you_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.forum.post.you_text%22)

> =&gt; core.ref.you

```diff
-Dir
+Ihnen
```

#### [`flarum-likes.forum.settings.notify_post_liked_label`](https://weblate.rob006.net/translate/flarum2/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.forum.settings.notify_post_liked_label%22)

> Someone likes one of my posts

```diff
-Jemandem gefällt dein Beitrag
+Jemandem gefällt Ihr Beitrag
```

Jemandem gefällt <del>dein</del><ins>Ihr</ins> Beitrag

#### [`flarum-likes.lib.gambits.posts.likedBy.key`](https://weblate.rob006.net/translate/flarum2/flarum-likes/de@formal/?q=context%3A%3D%22flarum-likes.lib.gambits.posts.likedBy.key%22)

> likedBy

```diff
-likedBy
+likeVon
```


### `flarum-lock`

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/de@formal/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Jemand hat eine Diskussion von dir geschlossen
+Jemand hat eine Ihrer Diskussionen geschlossen
```

Jemand hat eine <del>Diskussion von</del><ins>Ihrer</ins> <del>dir</del><ins>Diskussionen</ins> geschlossen


### `flarum-mentions`

#### [`flarum-mentions.email.group_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.subject%22)

> {mentioner\_display\_name} mentioned a group you're a member of in {title}

```diff
-{mentioner_display_name} hat in {title} eine Gruppe erwähnt, in der du Mitglied bist
+{mentioner_display_name} hat in {title} eine Gruppe erwähnt, in der Sie Mitglied sind
```

{mentioner\_display\_name} hat in {title} eine Gruppe erwähnt, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist</del><ins>sind</ins>

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} hat auf deinen Beitrag in {title} geantwortet
+{replier_display_name} hat auf Ihren Beitrag in {title} geantwortet
```

{replier\_display\_name} hat auf <del>deinen</del><ins>Ihren</ins> Beitrag in {title} geantwortet

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mentioner_display_name} hat dich in {title} erwähnt
+{mentioner_display_name} hat Sie in {title} erwähnt
```

{mentioner\_display\_name} hat <del>dich</del><ins>Sie</ins> in {title} erwähnt

#### [`flarum-mentions.forum.notifications.group_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.group_mentioned_text%22)

> {username} mentioned a group you're a member of

```diff
-{username} hat eine Gruppe erwähnt, in der du Mitglied bist
+{username} hat eine Gruppe erwähnt, in der Sie Mitglied sind
```

{username} hat eine Gruppe erwähnt, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist</del><ins>sind</ins>

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
-{username} {count, plural, one {hat} other {haben}} auf deinen Beitrag geantwortet
+{username} hat auf Ihren Beitrag geantwortet
```

{username} <del>{count, plural, one {hat} other {haben}}</del><ins>hat</ins> auf <del>deinen</del><ins>Ihren</ins> Beitrag geantwortet

#### [`flarum-mentions.forum.notifications.user_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.user_mentioned_text%22)

> {username} mentioned you

```diff
-{username} hat dich erwähnt
+{username} hat Sie erwähnt
```

{username} hat <del>dich</del><ins>Sie</ins> erwähnt

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{users} {count, plural, one {hast} other {haben}} auf diesen Beitrag geantwortet.
+{users} haben auf diesen Beitrag geantwortet.
```

{users} <del>{count, plural, one {hast} other {haben}}</del><ins>haben</ins> auf diesen Beitrag geantwortet.

#### [`flarum-mentions.forum.post.mentioned_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_text%22)

> {users} replied to this.

```diff
-{users} {count, plural, one {hat} other {haben}} auf diesen Beitrag geantwortet.
+{users} haben auf diesen Beitrag geantwortet.
```

{users} <del>{count, plural, one {hat} other {haben}}</del><ins>haben</ins> auf diesen Beitrag geantwortet.

#### [`flarum-mentions.forum.settings.notify_group_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_group_mentioned_label%22)

> Someone mentions a group I'm a member of in a post

```diff
-Jemand erwähnt in einem Beitrag eine Gruppe, in der du Mitglied bist
+Jemand erwähnt in einem Beitrag eine Gruppe, in der Sie Mitglied sind
```

Jemand erwähnt in einem Beitrag eine Gruppe, in der <del>du</del><ins>Sie</ins> Mitglied <del>bist</del><ins>sind</ins>

#### [`flarum-mentions.forum.settings.notify_post_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_post_mentioned_label%22)

> Someone replies to one of my posts

```diff
-Jemand hat auf deinen Beitrag geantwortet
+Jemand hat auf Ihren Beitrag geantwortet
```

Jemand hat auf <del>deinen</del><ins>Ihren</ins> Beitrag geantwortet

#### [`flarum-mentions.forum.settings.notify_user_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/de@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_user_mentioned_label%22)

> Someone mentions me in a post

```diff
-Jemand hat dich in einem Beitrag erwähnt
+Jemand hat Sie in einem Beitrag erwähnt
```

Jemand hat <del>dich</del><ins>Sie</ins> in einem Beitrag erwähnt


### `flarum-nicknames`

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/de@formal/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-Du musst "nickname" als den Anzeigenamen-Treiber in den <a><strong>Grundeinstellungen</strong></a> auswählen, damit diese Erweiterung wirksam wird.
+Sie müssen "nickname" als den Anzeigenamen-Treiber in den <a><strong>Grundeinstellungen</strong></a> auswählen, damit diese Erweiterung wirksam wird.
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> "nickname" als den Anzeigenamen-Treiber in den &lt;a&gt;&lt;strong&gt;Grundeinstellungen&lt;/strong&gt;&lt;/a&gt; auswählen, damit diese Erweiterung wirksam wird.

#### [`flarum-nicknames.api.invalid_nickname_message`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/de@formal/?q=context%3A%3D%22flarum-nicknames.api.invalid_nickname_message%22)

> This nickname is invalid. Please contact your forum administrator for more information on nickname rules.

```diff
-Dieser Spitzname ist ungültig. Bitte wende dich an deinen Forenadministrator, um weitere Informationen zu den Regeln für Spitznamen zu erhalten.
+Dieser Spitzname ist ungültig. Bitte wenden Sie sich an Ihren Forenadministrator, um weitere Informationen zu den Regeln für Spitznamen zu erhalten.
```

Dieser Spitzname ist ungültig. Bitte <del>wende</del><ins>wenden</ins> <del>dich</del><ins>Sie sich</ins> an <del>deinen</del><ins>Ihren</ins> Forenadministrator, um weitere Informationen zu den Regeln für Spitznamen zu erhalten.


### `flarum-pusher`

#### [`flarum-pusher.admin.pusher_settings.app_secret_label`](https://weblate.rob006.net/translate/flarum2/flarum-pusher/de@formal/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_secret_label%22)

> App Secret

```diff
-App Secret
+App-Secret
```


### `flarum-statistics`

#### [`flarum-statistics.admin.date_selection_modal.description`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/de@formal/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.description%22)

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

#### [`flarum-subscriptions.forum.index.following_link`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.forum.index.following_link%22)

> =&gt; flarum-subscriptions.ref.following

```diff
-Du folgst
+Sie folgen
```

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Diskussionen automatisch folgen, an denen ich teilgenommen habe
+Diskussionen automatisch folgen, an denen Sie teilgenommen haben
```

Diskussionen automatisch folgen, an denen <del>ich</del><ins>Sie</ins> teilgenommen <del>habe</del><ins>haben</ins>

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/de@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Jemand hat in einer Diskussion geantwortet, der du folgst
+Jemand hat in einer Diskussion geantwortet, der Sie folgen
```

Jemand hat in einer Diskussion geantwortet, der <del>du</del><ins>Sie</ins> <del>folgst</del><ins>folgen</ins>


### `flarum-suspend`

#### [`flarum-suspend.email.suspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.email.suspended.subject%22)

> Your account has been suspended

```diff
-Dein Konto wurde ausgeschlossen
+Ihr Konto wurde ausgeschlossen
```

<del>Dein</del><ins>Ihr</ins> Konto wurde ausgeschlossen

#### [`flarum-suspend.email.unsuspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.email.unsuspended.subject%22)

> Your account has been unsuspended

```diff
-Der Ausschluss deines Kontos wurde aufgehoben
+Die Ausschluss Ihres Kontos wurde aufgehoben
```

<del>Der</del><ins>Die</ins> Ausschluss <del>deines</del><ins>Ihres</ins> Kontos wurde aufgehoben

#### [`flarum-suspend.forum.notifications.user_suspended_indefinite_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_indefinite_text%22)

> You have been suspended indefinitely

```diff
-Du wurdest für unbestimmte Zeit ausgeschlossen
+Sie wurden für unbestimmte Zeit ausgeschlossen
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> für unbestimmte Zeit ausgeschlossen

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
-Du wurdest für {timeReadable} ausgeschlossen
+Sie wurden für {timeReadable} ausgeschlossen
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> für {timeReadable} ausgeschlossen

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/de@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
-Du wurdest entsperrt
+Sie wurden entsperrt
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> entsperrt


### `flarum-tags`

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-Ordne die Liste der Tags, um die Diskussionen zu organisieren.
+Ordnen Sie die Liste der Themen um die Diskussionen zu organisieren.
```

<del>Ordne</del><ins>Ordnen Sie</ins> die Liste der <del>Tags,</del><ins>Themen</ins> um die Diskussionen zu organisieren.

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Gib die minimale und die maximale Anzahl von Haupt-Tags an, die einer Diskussion hinzugefügt werden können.
+Geben Sie die minimale und die maximale Anzahl von Hauptthemen an, die einer Diskussion hinzugefügt werden können.
```

<del>Gib</del><ins>Geben Sie</ins> die minimale und die maximale Anzahl von <del>Haupt-Tags</del><ins>Hauptthemen</ins> an, die einer Diskussion hinzugefügt werden können.

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Gib die minimale und die maximale Anzahl von Unter-Tags an, die einer Diskussion hinzugefügt werden können.
+Geben Sie die minimale und die maximale Anzahl von Unterthemen an, die einer Diskussion hinzugefügt werden können.
```

<del>Gib</del><ins>Geben Sie</ins> die minimale und die maximale Anzahl von <del>Unter-Tags</del><ins>Unterthemen</ins> an, die einer Diskussion hinzugefügt werden können.

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
-{count, plural, one {Wähle ein Haupt-Tag} other {Wähle # Haupt-Tags}}
+{count, plural, one {Wählen Sie ein primäres Thema} other {Wählen Sie # primäre Themen}}
```

{count, plural, one <del>{Wähle</del><ins>{Wählen Sie</ins> ein <del>Haupt-Tag}</del><ins>primäres Thema}</ins> other <del>{Wähle</del><ins>{Wählen Sie</ins> # <del>Haupt-Tags}}</del><ins>primäre Themen}}</ins>

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de@formal/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
-{count, plural, one {Wähle noch ein Tag} other {Wähle # weitere Tags}}
+{count, plural, one {Wählen Sie ein Thema mehr} other {Wählen Sie # mehr Themen}}
```

{count, plural, one <del>{Wähle</del><ins>{Wählen</ins> <del>noch</del><ins>Sie</ins> ein <del>Tag}</del><ins>Thema mehr}</ins> other <del>{Wähle</del><ins>{Wählen Sie</ins> # <del>weitere</del><ins>mehr</ins> <del>Tags}}</del><ins>Themen}}</ins>


### `fof-badges`

#### [`fof-badges.forum.notification.badge_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/de@formal/?q=context%3A%3D%22fof-badges.forum.notification.badge_earned%22)

> You earned {badge}

```diff
-Du hast {badge} erworben
+Sie haben {badge} erworben
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> {badge} erworben


### `fof-byobu`

#### [`fof-byobu.admin.permission.create_private_discussions_with_blocking_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_blocking_users%22)

> Create private discussions with users that block it

```diff
-Erstelle private Diskussionen mit Nutzern, die du blockierst
+Erstelle private Diskussionen mit Nutzern, die es blockieren
```

Erstelle private Diskussionen mit Nutzern, die <del>du</del><ins>es</ins> <del>blockierst</del><ins>blockieren</ins>

#### [`fof-byobu.admin.settings.post-event-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.admin.settings.post-event-icon%22)

> Byobu Post Events

```diff
-Byobu Post Ereignisse
+Byobu-Post-Ereignisse
```

#### [`fof-byobu.email.body.private_discussion_added`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.email.body.private_discussion_added%22)

> {actor\_display\_name} added you to an existing private discussion: {discussion\_title}.
>
> View it here:
> {discussion\_url}
>
> You may need to login first before being able to access this link.
>

```diff
-{actor_display_name} hat dich zu einer bestehenden privaten Diskussion hinzugefügt: {discussion_title}.
+{actor_display_name} hat Sie zu einer bestehenden privaten Diskussion hinzugefügt: {discussion_title}.

-Hier kannst du sie einsehen:
+Hier können Sie sie einsehen:
 {discussion_url}

-Möglicherweise musst du dich zuerst anmelden, bevor du auf diesen Link zugreifen kannst.
+Möglicherweise müssen Sie sich zuerst anmelden, bevor Sie auf diesen Link zugreifen können.

```

{actor\_display\_name} hat <del>dich</del><ins>Sie</ins> zu einer bestehenden privaten Diskussion hinzugefügt: {discussion\_title}.<br /><br />Hier <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> sie einsehen:<br />{discussion\_url}<br /><br />Möglicherweise <del>musst</del><ins>müssen</ins> <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> zuerst anmelden, bevor <del>du</del><ins>Sie</ins> auf diesen Link zugreifen <del>kannst.</del><ins>können.</ins><br />

#### [`fof-byobu.email.body.private_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.email.body.private_discussion_created%22)

> {actor\_display\_name} started a new private discussion with you as a recipient: {discussion\_title}.
>
> View it here:
> {discussion\_url}
>
> You may need to login first before being able to access this link.
>

```diff
-{actor_display_name} hat eine neue private Diskussion mit dir als Empfänger gestartet: {discussion_title}.
+{actor_display_name} hat eine neue private Diskussion mit Ihnen als Empfänger gestartet: {discussion_title}.

-Hier kannst du sie anzeigen:
+Hier können Sie sie anzeigen:
 {discussion_url}

-Möglicherweise musst du dich zuerst anmelden, bevor du auf diesen Link zugreifen kannst.
+Möglicherweise müssen Sie sich zuerst anmelden, bevor Sie auf diesen Link zugreifen können.

```

{actor\_display\_name} hat eine neue private Diskussion mit <del>dir</del><ins>Ihnen</ins> als Empfänger gestartet: {discussion\_title}.<br /><br />Hier <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> sie anzeigen:<br />{discussion\_url}<br /><br />Möglicherweise <del>musst</del><ins>müssen</ins> <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> zuerst anmelden, bevor <del>du</del><ins>Sie</ins> auf diesen Link zugreifen <del>kannst.</del><ins>können.</ins><br />

#### [`fof-byobu.email.body.private_discussion_replied`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.email.body.private_discussion_replied%22)

> {actor\_display\_name} posted in a private discussion with you as a recipient: {discussion\_title}.
>
> View it here:
> {post\_url}
>
> You may need to login first before being able to access this link.
>

```diff
-{actor_display_name} hat in einer privaten Diskussion mit dir als Empfänger folgenden Beitrag gepostet: {discussion_title}.
+{actor_display_name} hat in einer privaten Diskussion mit Ihnen als Empfänger folgenden Beitrag gepostet: {discussion_title}.

-Hier kannst du ihn ansehen:
+Hier können Sie ihn ansehen:
 {post_url}

-Möglicherweise musst du dich zuerst anmelden, bevor du auf diesen Link zugreifen kannst.
+Möglicherweise müssen Sie sich zuerst anmelden, bevor Sie auf diesen Link zugreifen können.

```

{actor\_display\_name} hat in einer privaten Diskussion mit <del>dir</del><ins>Ihnen</ins> als Empfänger folgenden Beitrag gepostet: {discussion\_title}.<br /><br />Hier <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> ihn ansehen:<br />{post\_url}<br /><br />Möglicherweise <del>musst</del><ins>müssen</ins> <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> zuerst anmelden, bevor <del>du</del><ins>Sie</ins> auf diesen Link zugreifen <del>kannst.</del><ins>können.</ins><br />

#### [`fof-byobu.email.body.recipient_removed`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.email.body.recipient_removed%22)

> {actor\_display\_name} left the private discussion: {discussion\_title}. They'll no longer be able to view any of it's content.
>
> View it here:
> {discussion\_url}
>
> You may need to login first before being able to access this link.
>

```diff
 {actor_display_name} hat die private Diskussion verlassen: {discussion_title}. Er/sie kann nun keine Inhalte mehr davon sehen.

 Hier ansehen:
 {discussion_url}

-Möglicherweise musst du dich zuerst anmelden, bevor du auf diesen Link zugreifen kannst.
+Möglicherweise müssen Sie sich zuerst anmelden, bevor Sie auf diesen Link zugreifen können.

```

{actor\_display\_name} hat die private Diskussion verlassen: {discussion\_title}. Er/sie kann nun keine Inhalte mehr davon sehen.<br /><br />Hier ansehen:<br />{discussion\_url}<br /><br />Möglicherweise <del>musst</del><ins>müssen</ins> <del>du</del><ins>Sie</ins> <del>dich</del><ins>sich</ins> zuerst anmelden, bevor <del>du</del><ins>Sie</ins> auf diesen Link zugreifen <del>kannst.</del><ins>können.</ins><br />

#### [`fof-byobu.email.subject.private_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_created%22)

> \[Private Discussion\] {display\_name} started a new private discussion with you

```diff
-[Private Diskussion] {display_name} hat eine neue private Diskussion mit dir begonnen
+[Private Diskussion] {display_name} hat eine neue private Diskussion mit Ihnen begonnen
```

\[Private Diskussion\] {display\_name} hat eine neue private Diskussion mit <del>dir</del><ins>Ihnen</ins> begonnen

#### [`fof-byobu.forum.confirm.make_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.confirm.make_public%22)

> Are you sure you want to remove the recipients and make this discussion visible to anyone who can view the assigned tag?

```diff
-Dadurch wird diese private Diskussion für alle sichtbar. Überlege, ob dies die richtige Handlung ist, bevor du fortfährst.
+Dadurch wird diese private Diskussion für alle sichtbar. Überlegen Sie, ob dies die richtige Handlung ist, bevor Sie fortfahren.
```

Dadurch wird diese private Diskussion für alle sichtbar. <del>Überlege,</del><ins>Überlegen Sie,</ins> ob dies die richtige Handlung ist, bevor <del>du</del><ins>Sie</ins> <del>fortfährst.</del><ins>fortfahren.</ins>

#### [`fof-byobu.forum.modal.help.add_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.modal.help.add_recipients%22)

> This discussion will only be visible to the users you choose here. At least 1 recipient (other than yourself) is required.

```diff
-Diese Diskussion wird nur für die Nutzer sichtbar sein, die du hier auswählst. Mindestens 1 Empfänger (außer dir selbst) ist erforderlich.
+Diese Diskussion wird nur für die Nutzer sichtbar sein, die Sie hier auswählen. Mindestens 1 Empfänger (außer dir selbst) ist erforderlich.
```

Diese Diskussion wird nur für die Nutzer sichtbar sein, die <del>du</del><ins>Sie</ins> hier <del>auswählst.</del><ins>auswählen.</ins> Mindestens 1 Empfänger (außer dir selbst) ist erforderlich.

#### [`fof-byobu.forum.modal.help.selected_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.modal.help.selected_users%22)

> Click a user's name to remove them.

```diff
-Klicke auf den Namen eines Benutzers, um ihn zu entfernen.
+Klicken Sie auf den Namen eines Benutzers, um ihn zu entfernen.
```

<del>Klicke</del><ins>Klicken Sie</ins> auf den Namen eines Benutzers, um ihn zu entfernen.

#### [`fof-byobu.forum.modal.help.update_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.modal.help.update_recipients%22)

> This discussion will only be visible to the users you choose here.

```diff
-Diese Diskussion wird nur für die Nutzer sichtbar sein, die du hier auswählst.
+Diese Diskussion wird nur für die Nutzer sichtbar sein, die Sie hier auswählen.
```

Diese Diskussion wird nur für die Nutzer sichtbar sein, die <del>du</del><ins>Sie</ins> hier <del>auswählst.</del><ins>auswählen.</ins>

#### [`fof-byobu.forum.notifications.pd_added_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_added_text%22)

> {username} added you to a private discussion

```diff
-{username} hat dich zu einer privaten Diskussion hinzugefügt
+{username} hat Sie zu einer privaten Diskussion hinzugefügt
```

{username} hat <del>dich</del><ins>Sie</ins> zu einer privaten Diskussion hinzugefügt

#### [`fof-byobu.forum.notifications.pd_reply_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_reply_text%22)

> {username} posted in a private discussion you're a part of

```diff
-{username} hat in einer privaten Diskussion gepostet, an der du beteiligt bist
+{username} hat in einer privaten Diskussion gepostet, an der Sie beteiligt sind
```

{username} hat in einer privaten Diskussion gepostet, an der <del>du</del><ins>Sie</ins> beteiligt <del>bist</del><ins>sind</ins>

#### [`fof-byobu.forum.notifications.pd_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de@formal/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_text%22)

> {username} started a new private discussion with you

```diff
-{username} hat eine neue private Diskussion mit dir begonnen
+{username} hat eine neue private Diskussion mit Ihnen begonnen
```

{username} hat eine neue private Diskussion mit <del>dir</del><ins>Ihnen</ins> begonnen


### `fof-discussion-templates`

#### [`fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de@formal/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates%22)

> Manage reply templates for their discussions

```diff
-Antwortvorlagen für deine Diskussionen verwalten
+Antwortvorlagen für Ihre Diskussionen verwalten
```

Antwortvorlagen für <del>deine</del><ins>Ihre</ins> Diskussionen verwalten

#### [`fof-discussion-templates.admin.settings.append_template_on_tag_change`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de@formal/?q=context%3A%3D%22fof-discussion-templates.admin.settings.append_template_on_tag_change%22)

> Append template on tag change?

```diff
-Vorlage bei Tag-Änderung anhängen?
+Vorlage bei Thema-Änderung anhängen?
```

Vorlage bei <del>Tag-Änderung</del><ins>Thema-Änderung</ins> anhängen?

#### [`fof-discussion-templates.admin.tags.tag_template_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de@formal/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_text%22)

> Manage a template for new discussions in this tag.

```diff
-Verwalte eine Vorlage für neue Diskussionen in diesem Tag.
+Verwalten Sie eine Vorlage für neue Diskussionen in diesem Thema.
```

<del>Verwalte</del><ins>Verwalten Sie</ins> eine Vorlage für neue Diskussionen in diesem <del>Tag.</del><ins>Thema.</ins>


### `fof-doorman`

#### [`fof-doorman.email.body`](https://weblate.rob006.net/translate/flarum2/fof-doorman/de@formal/?q=context%3A%3D%22fof-doorman.email.body%22)

> You have been invited to sign up for {forum}.
>
> When you are ready to create your account, simply click the following link and enter the code when signing up:
>
> Url: {url}
> Invite code: {code}
>
> If you received this in error, please ignore this email.
>

```diff
-Du wurdest zum Beitritt für {forum} eingeladen.
+Sie wurden zum Beitritt für {forum} eingeladen.

-Wenn du bereit bist, dein Konto zu erstellen, klicke einfach auf den folgenden Link und gib den Code bei der Registrierung ein:
+Wenn Sie bereit sind, Ihr Konto zu erstellen, klicken Sie einfach auf den folgenden Link und geben Sie den Code bei der Registrierung ein:

 Url: {url}
 Einladungscode: {code}

-Solltest du diese E-Mail irrtümlich erhalten haben, ignoriere sie bitte.
+Sollten Sie diese E-Mail irrtümlich erhalten haben, ignorieren Sie sie bitte.

```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> zum Beitritt für {forum} eingeladen.<br /><br />Wenn <del>du</del><ins>Sie</ins> bereit <del>bist,</del><ins>sind,</ins> <del>dein</del><ins>Ihr</ins> Konto zu erstellen, <del>klicke</del><ins>klicken Sie</ins> einfach auf den folgenden Link und <del>gib</del><ins>geben Sie</ins> den Code bei der Registrierung ein:<br /><br />Url: {url}<br />Einladungscode: {code}<br /><br /><del>Solltest</del><ins>Sollten</ins> <del>du</del><ins>Sie</ins> diese E-Mail irrtümlich erhalten haben, <del>ignoriere</del><ins>ignorieren Sie</ins> sie bitte.<br />


### `fof-drafts`

#### [`fof-drafts.forum.dropdown.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-drafts/de@formal/?q=context%3A%3D%22fof-drafts.forum.dropdown.empty_text%22)

> You haven't saved any drafts

```diff
-Du hast keine Entwürfe gespeichert
+Sie haben keine Entwürfe gespeichert
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Entwürfe gespeichert


### `fof-gamification`

#### [`fof-gamification.admin.page.convert.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de@formal/?q=context%3A%3D%22fof-gamification.admin.page.convert.help%22)

> Convert your previous likes from flarum/likes into upvotes, as well as calculate the hotness for all current discussions.

```diff
-Konvertiere deine bisherigen Likes aus flarum/likes in Upvotes und berechne die Beliebtheit aller aktuellen Diskussionen.
+Wandeln Sie Ihre bisherigen Likes aus flarum/likes in Upvotes um und berechnen Sie die Beliebtheit aller aktuellen Diskussionen.
```

<del>Konvertiere</del><ins>Wandeln</ins> <del>deine</del><ins>Sie Ihre</ins> bisherigen Likes aus flarum/likes in Upvotes<ins> um</ins> und <del>berechne</del><ins>berechnen Sie</ins> die Beliebtheit aller aktuellen Diskussionen.


### `fof-geoip`

#### [`fof-geoip.admin.settings.service_ipsevenex_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/de@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipsevenex_label%22)

> 7x Geolocation API

```diff
-7x Geolocation API
+7x Geolocation-API
```

7x <del>Geolocation API</del><ins>Geolocation-API</ins>


### `fof-horizon`

#### [`fof-horizon.admin.settings.trim_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/de@formal/?q=context%3A%3D%22fof-horizon.admin.settings.trim_help%22)

> Here you can configure for how long (in minutes) you desire Horizon to
> persist the recent and failed jobs. Typically, recent jobs are kept
> for one hour while all failed jobs are stored for an entire week.
>

```diff
-Hier kannst du einstellen, wie lange (in Minuten) Horizon
+Hier können Sie einstellen, wie lange (in Minuten) Horizon
 die letzten und fehlgeschlagenen Aufträge aufbewahren soll. In der Regel werden die letzten Aufträge
 eine Stunde lang aufbewahrt, während alle fehlgeschlagenen Aufträge eine ganze Woche lang gespeichert werden.

```

Hier <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> einstellen, wie lange (in Minuten) Horizon<br />die letzten und fehlgeschlagenen Aufträge aufbewahren soll. In der Regel werden die letzten Aufträge<br />eine Stunde lang aufbewahrt, während alle fehlgeschlagenen Aufträge eine ganze Woche lang gespeichert werden.<br />

#### [`fof-horizon.admin.stats.data.redis-memory-policy-tooltip`](https://weblate.rob006.net/translate/flarum2/fof-horizon/de@formal/?q=context%3A%3D%22fof-horizon.admin.stats.data.redis-memory-policy-tooltip%22)

> The memory policy is the way the cache store will select what to remove when
> the maxmemory limit is reached. The default is \`noeviction\`: New values
> aren't saved when memory limit is reached. Click to view documentation.
>

```diff
 Die Speicherrichtlinie ist die Art und Weise, wie Redis auswählt, was entfernt werden soll,
 wenn das maximale Speicherlimit erreicht ist. Die Standardeinstellung ist „noeviction“: Neue Werte
-werden nicht gespeichert, wenn das Speicherlimit erreicht ist. Klicke hier, um die Dokumentation anzuzeigen.
+werden nicht gespeichert, wenn das Speicherlimit erreicht ist. Klicken Sie hier, um die Dokumentation anzuzeigen.

```

Die Speicherrichtlinie ist die Art und Weise, wie Redis auswählt, was entfernt werden soll,<br />wenn das maximale Speicherlimit erreicht ist. Die Standardeinstellung ist „noeviction“: Neue Werte<br />werden nicht gespeichert, wenn das Speicherlimit erreicht ist. <del>Klicke</del><ins>Klicken Sie</ins> hier, um die Dokumentation anzuzeigen.<br />

#### [`fof-horizon.admin.stats.error.fetch_failed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/de@formal/?q=context%3A%3D%22fof-horizon.admin.stats.error.fetch_failed%22)

> Unable to fetch Horizon statistics. Please check your Redis configuration.

```diff
-Horizon-Statistiken konnten nicht abgerufen werden. Bitte überprüfe deine Redis-Konfiguration.
+Horizon-Statistiken konnten nicht abgerufen werden. Bitte überprüfen Sie Ihre Redis-Konfiguration.
```

Horizon-Statistiken konnten nicht abgerufen werden. Bitte <del>überprüfe</del><ins>überprüfen</ins> <del>deine</del><ins>Sie Ihre</ins> Redis-Konfiguration.


### `fof-links`

#### [`fof-links.admin.edit_link.delete_link_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-links/de@formal/?q=context%3A%3D%22fof-links.admin.edit_link.delete_link_confirmation%22)

> Are you sure you want to delete this link?

```diff
-Bist du sicher, dass du diesen Link löschen möchtest?
+Sind Sie sicher, dass Sie diesen Link löschen möchten?
```

<del>Bist</del><ins>Sind</ins> <del>du</del><ins>Sie</ins> sicher, dass <del>du</del><ins>Sie</ins> diesen Link löschen <del>möchtest?</del><ins>möchten?</ins>

#### [`fof-links.admin.edit_link.icon_additional_text`](https://weblate.rob006.net/translate/flarum2/fof-links/de@formal/?q=context%3A%3D%22fof-links.admin.edit_link.icon_additional_text%22)

> If you want to use a brand icon, the prefix is &lt;code&gt;fab fa-&lt;/code&gt; instead.

```diff
-Wenn du ein Markensymbol verwenden möchtest, lautet das Präfix stattdessen <code>fab fa-</code>.
+Wenn Sie ein Markensymbol verwenden möchten, lautet der Präfix stattdessen <code>fab-fa-</code>.
```

Wenn <del>du</del><ins>Sie</ins> ein Markensymbol verwenden <del>möchtest,</del><ins>möchten,</ins> lautet <del>das</del><ins>der</ins> Präfix stattdessen<del> &lt;code&gt;fab</del> <del>fa-&lt;/code&gt;.</del><ins>&lt;code&gt;fab-fa-&lt;/code&gt;.</ins>


### `fof-merge-discussions`

#### [`fof-merge-discussions.email.merged.body`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.email.merged.body%22)

> Your discussion, {merged\_discussion\_title}, was merged into {discussion\_title} by {actor\_display\_name}.
>
> View it here {discussion\_url} .
>

```diff
-Deine Diskussion {merged_discussion_title} wurde von {actor_display_name} mit {discussion_title} zusammengeführt.
+Ihre Diskussion mit dem Titel {merged_discussion_title} wurde von {actor_display_name} mit der Diskussion {discussion_title} zusammengeführt.

-Du kannst sie hier ansehen: {discussion_url} .
+Hier können Sie sie sich ansehen: {discussion_url} .

```

<del>Deine</del><ins>Ihre</ins> Diskussion<ins> mit dem Titel</ins> {merged\_discussion\_title} wurde von {actor\_display\_name} mit<ins> der Diskussion</ins> {discussion\_title} zusammengeführt.<br /><br /><del>Du</del><ins>Hier</ins> <del>kannst</del><ins>können Sie</ins> sie <del>hier</del><ins>sich</ins> ansehen: {discussion\_url} .<br />

#### [`fof-merge-discussions.email.merged.subject`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.email.merged.subject%22)

> Your discussion "{merged\_discussion\_title}" was merged

```diff
-Deine Diskussion „{merged_discussion_title}“ wurde zusammengeführt
+Ihre Diskussion „{merged_discussion_title}“ wurde zusammengeführt
```

<del>Deine</del><ins>Ihre</ins> Diskussion „{merged\_discussion\_title}“ wurde zusammengeführt

#### [`fof-merge-discussions.forum.modal.type_from_help_text`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_from_help_text%22)

> Choose target discussion to merge {title} into.

```diff
-Wähle die Ziel-Diskussion aus, in die {title} zusammengeführt werden soll.
+Wählen Sie die Ziel-Diskussion aus, in die {title} integriert werden soll.
```

<del>Wähle</del><ins>Wählen Sie</ins> die Ziel-Diskussion aus, in die {title} <del>zusammengeführt</del><ins>integriert</ins> werden soll.

#### [`fof-merge-discussions.forum.modal.type_heading`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_heading%22)

> Merge type

```diff
-Art der Zusammenführung
+Zusammenführungsart
```

#### [`fof-merge-discussions.forum.modal.type_target_help_text`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_target_help_text%22)

> Choose discussion(s) to merge into {title}.

```diff
-Wähle die Diskussion(en) aus, die du in {title} zusammenführen möchtest.
+Wählen Sie die Diskussion(en) aus, die in {title} zusammengeführt werden sollen.
```

<del>Wähle</del><ins>Wählen Sie</ins> die Diskussion(en) aus, die<del> du</del> in {title} <del>zusammenführen</del><ins>zusammengeführt</ins> <del>möchtest.</del><ins>werden sollen.</ins>

#### [`fof-merge-discussions.forum.notification.discussion_merged`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.forum.notification.discussion_merged%22)

> Your discussion {oldTitle} was merged into this discussion by {username}.

```diff
-Deine Diskussion {oldTitle} wurde von {username} mit dieser Diskussion zusammengeführt.
+Ihre Diskussion {oldTitle} wurde von {username} mit dieser Diskussion zusammengeführt.
```

<del>Deine</del><ins>Ihre</ins> Diskussion {oldTitle} wurde von {username} mit dieser Diskussion zusammengeführt.

#### [`fof-merge-discussions.forum.post.merged`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de@formal/?q=context%3A%3D%22fof-merge-discussions.forum.post.merged%22)

> {count, plural, one {Merged 1 post from {titles}.} other {Merged {count} posts from {titles}.}}

```diff
-{count, plural, one {Ein Beitrag von {titles} zusammengeführt.} other {{count} Beiträge von {titles} zusammengeführt.}}
+{count, plural, one {Hat einen Beitrag von {titles} zusammengeführt.} other {Hat {count} Beiträge von {titles} zusammengeführt.}}
```

{count, plural, one <del>{Ein</del><ins>{Hat einen</ins> Beitrag von {titles} zusammengeführt.} other <del>{{count}</del><ins>{Hat {count}</ins> Beiträge von {titles} zusammengeführt.}}


### `fof-moderator-warnings`

#### [`fof-moderator-warnings.emails.post_warned.body`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.body%22)

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
 Hallo {warnee_display_name}!

-{warner_display_name} hat Dich mit {strikes, plural, one {# Strike} other {# Strikes}} in {discussion_title} gewarnt
+{warner_display_name} hat Sie mit {strikes, plural, one {# Strike} other {# Strikes}} in {discussion_title} gewarnt

 Es wurde folgender Grund angegeben:

 ---

 {public_comment}

```

Hallo {warnee\_display\_name}!<br /><br />{warner\_display\_name} hat <del>Dich</del><ins>Sie</ins> mit {strikes, plural, one {# Strike} other {# Strikes}} in {discussion\_title} gewarnt<br /><br />Es wurde folgender Grund angegeben:<br /><br />---<br /><br />{public\_comment}<br />

#### [`fof-moderator-warnings.emails.user_warned.body`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.body%22)

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
 Hallo {warnee_display_name}!

-{warner_display_name} hat Dich mit {strikes, plural, one {# Strike} other {# Strikes}} gewarnt
+{warner_display_name} hat Sie mit {strikes, plural, one {# Strike} other {# Strikes}} gewarnt

 Es wurde folgender Grund angegeben wurde angegeben:

 ---

 {public_comment}

```

Hallo {warnee\_display\_name}!<br /><br />{warner\_display\_name} hat <del>Dich</del><ins>Sie</ins> mit {strikes, plural, one {# Strike} other {# Strikes}} gewarnt<br /><br />Es wurde folgender Grund angegeben wurde angegeben:<br /><br />---<br /><br />{public\_comment}<br />

#### [`fof-moderator-warnings.emails.user_warned.subject`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}

```diff
-{warner_display_name} hat Dich mit {strikes, plural, one {# Strike} other {# Strikes}} gewarnt
+{warner_display_name} hat Sie mit {strikes, plural, one {# Strike} other {# Strikes}} gewarnt
```

{warner\_display\_name} hat <del>Dich</del><ins>Sie</ins> mit {strikes, plural, one {# Strike} other {# Strikes}} gewarnt

#### [`fof-moderator-warnings.forum.notifications.warning_no_strikes_text`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_no_strikes_text%22)

> You were warned by {mod\_username} (no strikes)

```diff
-Du wurdest von {mod_username} gewarnt (keine Strikes)
+Sie wurden von {mod_username} gewarnt (keine Strikes)
```

<del>Du</del><ins>Sie</ins> <del>wurdest</del><ins>wurden</ins> von {mod\_username} gewarnt (keine Strikes)

#### [`fof-moderator-warnings.forum.notifications.warning_text`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_text%22)

> {strikes, plural, one {You were warned with # strike by {mod\_username}} other {You were warned with # strikes by {mod\_username}}}

```diff
-{strikes, plural, one {Du wurdest mit # strike von {mod_username} verwarnt} other {Du wurdest mit # strikes von {mod_username} verwarnt}}
+{strikes, plural, one {Sie wurden mit # strike von {mod_username} verwarnt} other {Sie wurden mit # strikes von {mod_username} verwarnt}}
```

{strikes, plural, one <del>{Du</del><ins>{Sie</ins> <del>wurdest</del><ins>wurden</ins> mit # strike von {mod\_username} verwarnt} other <del>{Du</del><ins>{Sie</ins> <del>wurdest</del><ins>wurden</ins> mit # strikes von {mod\_username} verwarnt}}

#### [`fof-moderator-warnings.forum.user.warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.forum.user.warnings%22)

> Warnings

```diff
-Warnungen
+Verwarnungen
```

#### [`fof-moderator-warnings.forum.validation.public_comment_required`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.forum.validation.public_comment_required%22)

> You most provide a public comment.

```diff
-Du musst eine öffentliche Begründung abgeben.
+Sie müssen eine öffentliche Begründung abgeben.
```

<del>Du</del><ins>Sie</ins> <del>musst</del><ins>müssen</ins> eine öffentliche Begründung abgeben.

#### [`fof-moderator-warnings.forum.warning_controls.delete_forever_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_controls.delete_forever_button%22)

> Permanently Delete

```diff
-Entgültig löschen
+Endgültig löschen
```

<del>Entgültig</del><ins>Endgültig</ins> löschen

#### [`fof-moderator-warnings.forum.warning_modal.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de@formal/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.confirmation_message%22)

> Your warning has been saved. You may need to refresh the page to see it.

```diff
-Deine Warnung wurde hinterlegt. Möglicherweise musst Du die Seite aktualisieren, um sie anzuzeigen.
+Ihre Warnung wurde hinterlegt. Möglicherweise müssen Sie die Seite aktualisieren, um sie anzuzeigen.
```

<del>Deine</del><ins>Ihre</ins> Warnung wurde hinterlegt. Möglicherweise <del>musst</del><ins>müssen</ins> <del>Du</del><ins>Sie</ins> die Seite aktualisieren, um sie anzuzeigen.


### `fof-move-posts`

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/de@formal/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
-Du bist dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem du den Titel, die Tags oder andere Attribute änderst. Möchtest du fortfahren?
+Sie sind dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem Sie den Titel, die Themen oder andere Attribute ändern. Möchten Sie fortfahren?
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem <del>du</del><ins>Sie</ins> den Titel, die <del>Tags</del><ins>Themen</ins> oder andere Attribute <del>änderst.</del><ins>ändern.</ins> <del>Möchtest</del><ins>Möchten</ins> <del>du</del><ins>Sie</ins> fortfahren?


### `fof-oauth`

#### [`fof-oauth.forum.user.settings.linked-account.orphaned-account`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de@formal/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.orphaned-account%22)

> You have signed in through this provider previously, but this forum has disabled sign-in with this method since.

```diff
-Du hast dich zuvor über diesen Anbieter angemeldet, jedoch hat das Forum die Anmeldung mit dieser Methode seitdem deaktiviert.
+Sie haben sich zuvor über diesen Anbieter angemeldet, jedoch hat das Forum die Anmeldung mit dieser Methode seitdem deaktiviert.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> <del>dich</del><ins>sich</ins> zuvor über diesen Anbieter angemeldet, jedoch hat das Forum die Anmeldung mit dieser Methode seitdem deaktiviert.


### `fof-prevent-necrobumping`

#### [`fof-prevent-necrobumping.admin.settings.days_help`](https://weblate.rob006.net/translate/flarum2/fof-prevent-necrobumping/de@formal/?q=context%3A%3D%22fof-prevent-necrobumping.admin.settings.days_help%22)

> Mark discussions as inactive after this many days since the last post. Set to &lt;code&gt;0&lt;/code&gt; to disable by default.

```diff
-Diskussionen nach so vielen Tagen seit dem letzten Beitrag als inaktiv markieren. Setze den Wert auf <code>0</code>, um diese Funktion standardmäßig zu deaktivieren.
+Diskussionen nach so vielen Tagen seit dem letzten Beitrag als inaktiv markieren. Setzen Sie den Wert auf <code>0</code>, um diese Funktion standardmäßig zu deaktivieren.
```

Diskussionen nach so vielen Tagen seit dem letzten Beitrag als inaktiv markieren. <del>Setze</del><ins>Setzen Sie</ins> den Wert auf &lt;code&gt;0&lt;/code&gt;, um diese Funktion standardmäßig zu deaktivieren.

#### [`fof-prevent-necrobumping.admin.settings.show_discussion_cta_help`](https://weblate.rob006.net/translate/flarum2/fof-prevent-necrobumping/de@formal/?q=context%3A%3D%22fof-prevent-necrobumping.admin.settings.show_discussion_cta_help%22)

> Display a suggestion to start a new discussion when users attempt to reply to inactive discussions.

```diff
-Zeige einen Vorschlag zum Starten einer neuen Diskussion an, wenn Benutzer versuchen, auf inaktive Diskussionen zu antworten.
+Zeigt einen Vorschlag zum Starten einer neuen Diskussion an, wenn Benutzer versuchen, auf inaktive Diskussionen zu antworten.
```

<del>Zeige</del><ins>Zeigt</ins> einen Vorschlag zum Starten einer neuen Diskussion an, wenn Benutzer versuchen, auf inaktive Diskussionen zu antworten.

#### [`fof-prevent-necrobumping.admin.settings.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-prevent-necrobumping/de@formal/?q=context%3A%3D%22fof-prevent-necrobumping.admin.settings.tags_help%22)

> Override the global inactivity threshold for specific tags. Leave empty to use the default. When multiple tags have different values, the shortest period applies.

```diff
-Überschreibe den globalen Schwellenwert für Inaktivität für bestimmte Tags. Lasse das Feld leer, um den Standardwert zu verwenden. Wenn mehrere Tags unterschiedliche Werte haben, gilt der kürzeste Zeitraum.
+Überschreibt den globalen Schwellenwert für Inaktivität für bestimmte Themen. Lassen Sie das Feld leer, um den Standardwert zu verwenden. Wenn mehrere Themen unterschiedliche Werte haben, gilt der kürzeste Zeitraum.
```

<del>Überschreibe</del><ins>Überschreibt</ins> den globalen Schwellenwert für Inaktivität für bestimmte <del>Tags.</del><ins>Themen.</ins> <del>Lasse</del><ins>Lassen Sie</ins> das Feld leer, um den Standardwert zu verwenden. Wenn mehrere <del>Tags</del><ins>Themen</ins> unterschiedliche Werte haben, gilt der kürzeste Zeitraum.

#### [`fof-prevent-necrobumping.forum.composer.inactive_discussion_alert.cta`](https://weblate.rob006.net/translate/flarum2/fof-prevent-necrobumping/de@formal/?q=context%3A%3D%22fof-prevent-necrobumping.forum.composer.inactive_discussion_alert.cta%22)

> Consider starting a fresh discussion if you have a new question or perspective.

```diff
-Eröffne doch eine neue Diskussion, wenn du eine neue Frage oder einen neuen Standpunkt hast.
+Eröffnen Sie doch eine neue Diskussion, wenn Sie eine neue Frage oder einen neuen Standpunkt haben.
```

<del>Eröffne</del><ins>Eröffnen Sie</ins> doch eine neue Diskussion, wenn <del>du</del><ins>Sie</ins> eine neue Frage oder einen neuen Standpunkt <del>hast.</del><ins>haben.</ins>

#### [`fof-prevent-necrobumping.forum.composer.inactive_discussion_alert.description`](https://weblate.rob006.net/translate/flarum2/fof-prevent-necrobumping/de@formal/?q=context%3A%3D%22fof-prevent-necrobumping.forum.composer.inactive_discussion_alert.description%22)

> Consider whether your reply adds new value or if the topic has already been resolved.

```diff
-Überlege, ob deine Antwort einen Mehrwert bietet oder ob das Thema bereits geklärt ist.
+Überlegen Sie, ob Ihre Antwort einen Mehrwert bietet oder ob das Thema bereits geklärt ist.
```

<del>Überlege,</del><ins>Überlegen Sie,</ins> ob <del>deine</del><ins>Ihre</ins> Antwort einen Mehrwert bietet oder ob das Thema bereits geklärt ist.


### `fof-profile-image-crop`

#### [`fof-profile-image-crop.forum.modal.error.get_image_data`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/de@formal/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.error.get_image_data%22)

> Failed to crop. Make sure your browser's fingerprinting protection is disabled.

```diff
-Zuschneiden fehlgeschlagen. Stelle sicher das der Fingerprinting-Schutz deines Browsers deaktiviert ist.
+Zuschneiden fehlgeschlagen. Stellen Sie sicher das der Fingerprinting-Schutz Ihres Browsers deaktiviert ist.
```

Zuschneiden fehlgeschlagen. <del>Stelle</del><ins>Stellen Sie</ins> sicher das der Fingerprinting-Schutz <del>deines</del><ins>Ihres</ins> Browsers deaktiviert ist.

#### [`fof-profile-image-crop.forum.modal.help_text`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/de@formal/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.help_text%22)

> The image upload may fail if your browser's privacy settings are very strict. If you're having trouble, try disabling fingerprinting protection. Otherwise, you can &lt;disableCrop&gt;disable cropping altogether&lt;/disableCrop&gt;.
>

```diff
-Das Hochladen von Bildern kann fehlschlagen, wenn die Datenschutzeinstellungen deines Browsers sehr streng sind. Wenn du Probleme hast, deaktiviere den Fingerprinting-Schutz. Andernfalls kannst du auch <disableCrop>das Zuschneiden vollständig deaktivieren</disableCrop>.
+Das Hochladen des Bildes kann fehlschlagen, wenn die Datenschutzeinstellungen Ihres Browsers sehr streng sind. Wenn Sie Probleme haben, versuchen Sie, den Fingerabdruck-Schutz zu deaktivieren. Andernfalls können Sie <disableCrop>das Zuschneiden ganz deaktivieren</disableCrop>.

```

Das Hochladen <del>von</del><ins>des</ins> <del>Bildern</del><ins>Bildes</ins> kann fehlschlagen, wenn die Datenschutzeinstellungen <del>deines</del><ins>Ihres</ins> Browsers sehr streng sind. Wenn <del>du</del><ins>Sie</ins> Probleme <del>hast,</del><ins>haben,</ins> <del>deaktiviere</del><ins>versuchen Sie,</ins> den <del>Fingerprinting-Schutz.</del><ins>Fingerabdruck-Schutz</ins> <del>Andernfalls</del><ins>zu</ins> <del>kannst</del><ins>deaktivieren.</ins> <del>du</del><ins>Andernfalls</ins> <del>auch</del><ins>können Sie</ins> &lt;disableCrop&gt;das Zuschneiden <del>vollständig</del><ins>ganz</ins> deaktivieren&lt;/disableCrop&gt;.<br />


### `fof-reactions`

#### [`fof-reactions.admin.page.cdn.help`](https://weblate.rob006.net/translate/flarum2/fof-reactions/de@formal/?q=context%3A%3D%22fof-reactions.admin.page.cdn.help%22)

> By default, we serve the reaction assets from Cloudflare's CDN. You also have the option to specify any other CDN address
> as required. &lt;code&gt;\[codepoint\]&lt;/code&gt; will be substituted with the codepoint of the emoji.
>
> For example, to switch to Noto Emoji via jsdelivr, you would enter &lt;code&gt;https://cdn.jsdelivr.net/gh/googlefonts/noto-emoji@v2.040/svg/emoji\_u\[codepoint\].svg&lt;/code&gt;.
>
> Your CDN must support Emoji/Unicode {emojibase} or later. Use \[twemoji\] to substitute in the Twemoji version.
>

```diff
 In der Standardkonfiguration werden Assets für Reaktionen über Cloudflares CDN ausgeliefert. Es gibt auch die Möglichkeit,
 eine andere CDN-Adresse zu verwenden. <code>[codepoint]</code> wird durch den Codepoint des Emojis ersetzt.

 Um zum Beispiel auf Noto Emoji per jsdelivr zu wechseln, würde man als URL <code>https://cdn.jsdelivr.net/gh/googlefonts/noto-emoji@v2.040/svg/emoji_u[codepoint].svg</code> verwenden.

-Dein CDN muss Emoji/Unicode {emojibase} oder höher unterstützen. Verwende [twemoji], um durch die Twemoji-Version zu ersetzen.
+Ihr CDN muss Emoji/Unicode {emojibase} oder höher unterstützen. Verwenden Sie [twemoji], um durch die Twemoji-Version zu ersetzen.

```

In der Standardkonfiguration werden Assets für Reaktionen über Cloudflares CDN ausgeliefert. Es gibt auch die Möglichkeit,<br />eine andere CDN-Adresse zu verwenden. &lt;code&gt;\[codepoint\]&lt;/code&gt; wird durch den Codepoint des Emojis ersetzt.<br /><br />Um zum Beispiel auf Noto Emoji per jsdelivr zu wechseln, würde man als URL &lt;code&gt;https://cdn.jsdelivr.net/gh/googlefonts/noto-emoji@v2.040/svg/emoji\_u\[codepoint\].svg&lt;/code&gt; verwenden.<br /><br /><del>Dein</del><ins>Ihr</ins> CDN muss Emoji/Unicode {emojibase} oder höher unterstützen. <del>Verwende</del><ins>Verwenden Sie</ins> \[twemoji\], um durch die Twemoji-Version zu ersetzen.<br />

#### [`fof-reactions.admin.page.convert.help`](https://weblate.rob006.net/translate/flarum2/fof-reactions/de@formal/?q=context%3A%3D%22fof-reactions.admin.page.convert.help%22)

> If you just updated your extension, your reactions will have to be converted. If you just installed this extension, you can saftely ignore this message.

```diff
-Wenn du deine Erweiterung gerade aktualisiert hast, müssen deine Reaktionen konvertiert werden. Wenn du diese Erweiterung gerade erst installiert hast, kannst du diese Nachricht getrost ignorieren.
+Wenn Sie Ihere Erweiterung gerade aktualisiert hast, müssen Ihre Reaktionen konvertiert werden. Wenn Sie diese Erweiterung gerade erst installiert haben, können Sie diese Nachricht getrost ignorieren.
```

Wenn <del>du</del><ins>Sie</ins> <del>deine</del><ins>Ihere</ins> Erweiterung gerade aktualisiert hast, müssen <del>deine</del><ins>Ihre</ins> Reaktionen konvertiert werden. Wenn <del>du</del><ins>Sie</ins> diese Erweiterung gerade erst installiert <del>hast,</del><ins>haben,</ins> <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> diese Nachricht getrost ignorieren.


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.mode_help_large`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/de@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_large%22)

> 50\.000 is the technical limit for sitemap files. If you have more entries to store, use the following option!

```diff
-50.000 ist das technische Limit für Sitemap-Dateien. Wenn du mehr Einträge zu speichern hast, nutze die folgende Option!
+50.000 ist das technische Limit für Sitemap-Dateien. Wenn Sie mehr Einträge zu speichern haben, nutzen Sie die folgende Option!
```

50\.000 ist das technische Limit für Sitemap-Dateien. Wenn <del>du</del><ins>Sie</ins> mehr Einträge zu speichern <del>hast,</del><ins>haben,</ins> <del>nutze</del><ins>nutzen Sie</ins> die folgende Option!


### `fof-upload`

#### [`fof-upload.admin.help_texts.custom_s3_url`](https://weblate.rob006.net/translate/flarum2/fof-upload/de@formal/?q=context%3A%3D%22fof-upload.admin.help_texts.custom_s3_url%22)

> Use this setting if you are using an S3-compatible service that requires a specific URL format (e.g., Backblaze B2) or if you are experiencing issues with the default URL format. This setting is generally not necessary for most services. Ensure the URL includes the protocol (https://) and is correctly formatted. Example: https://your-bucket.s3.your-region.backblazeb2.com
>

```diff
-Verwende diese Einstellung, wenn du einen S3-kompatiblen Dienst nutzt, der ein bestimmtes URL-Format erfordert (z. B. Backblaze B2) oder wenn du Probleme mit dem Standard-URL-Format hast. In der Regel ist diese Einstellung für die meisten Dienste nicht erforderlich. Achte darauf, dass die URL das Protokoll (https://) enthält und korrekt formatiert ist. Beispiel: https://your-bucket.s3.your-region.backblazeb2.com
+Verwende diese Einstellung, wenn Sie einen S3-kompatiblen Dienst nutzen, der ein bestimmtes URL-Format erfordert (z. B. Backblaze B2) oder wenn Sie Probleme mit dem Standard-URL-Format haben. In der Regel ist diese Einstellung für die meisten Dienste nicht erforderlich. Achten Sie darauf, dass die URL das Protokoll (https://) enthält und korrekt formatiert ist. Beispiel: https://your-bucket.s3.your-region.backblazeb2.com

```

Verwende diese Einstellung, wenn <del>du</del><ins>Sie</ins> einen S3-kompatiblen Dienst <del>nutzt,</del><ins>nutzen,</ins> der ein bestimmtes URL-Format erfordert (z. B. Backblaze B2) oder wenn <del>du</del><ins>Sie</ins> Probleme mit dem Standard-URL-Format <del>hast.</del><ins>haben.</ins> In der Regel ist diese Einstellung für die meisten Dienste nicht erforderlich. <del>Achte</del><ins>Achten Sie</ins> darauf, dass die URL das Protokoll (https://) enthält und korrekt formatiert ist. Beispiel: https://your-bucket.s3.your-region.backblazeb2.com<br />

#### [`fof-upload.admin.help_texts.mime_types`](https://weblate.rob006.net/translate/flarum2/fof-upload/de@formal/?q=context%3A%3D%22fof-upload.admin.help_texts.mime_types%22)

> Please configure your mapping here. Each mime type regular expression will be handled by a specific upload adapter and download template.
> Optionally, give each entry a permission label (e.g. "Images", "Videos") to create a dedicated permission in the permission grid.
> This lets you restrict which groups may upload specific file types — in addition to the base "Upload files" permission which is always required.
>

```diff
-Bitte konfiguriere hier deine Zuordnung. Jeder reguläre Ausdruck für einen MIME-Typ wird von einem bestimmten Upload-Adapter und einer bestimmten Download-Vorlage verarbeitet.
-Optional kannst du jedem Eintrag eine Berechtigungsbezeichnung (z. B. „Bilder“, „Videos“) zuweisen, um eine spezielle Berechtigung im Berechtigungsraster zu erstellen.
-Auf diese Weise kannst du einschränken, welche Gruppen bestimmte Dateitypen hochladen dürfen – zusätzlich zur Basisberechtigung „Dateien hochladen“, die immer erforderlich ist.
+Bitte konfigurieren Sie hier Ihre Zuordnung. Jeder reguläre Ausdruck für einen MIME-Typ wird von einem bestimmten Upload-Adapter und einer bestimmten Download-Vorlage verarbeitet.
+Optional können Sie jedem Eintrag eine Berechtigungsbezeichnung (z. B. „Bilder“, „Videos“) zuweisen, um eine eigene Berechtigung im Berechtigungsraster zu erstellen.
+Auf diese Weise können Sie einschränken, welche Gruppen bestimmte Dateitypen hochladen dürfen – zusätzlich zu der grundlegenden Berechtigung „Dateien hochladen“, die immer erforderlich ist.

```

Bitte <del>konfiguriere</del><ins>konfigurieren Sie</ins> hier <del>deine</del><ins>Ihre</ins> Zuordnung. Jeder reguläre Ausdruck für einen MIME-Typ wird von einem bestimmten Upload-Adapter und einer bestimmten Download-Vorlage verarbeitet.<br />Optional <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> jedem Eintrag eine Berechtigungsbezeichnung (z. B. „Bilder“, „Videos“) zuweisen, um eine <del>spezielle</del><ins>eigene</ins> Berechtigung im Berechtigungsraster zu erstellen.<br />Auf diese Weise <del>kannst</del><ins>können</ins> <del>du</del><ins>Sie</ins> einschränken, welche Gruppen bestimmte Dateitypen hochladen dürfen – zusätzlich <del>zur</del><ins>zu</ins> <del>Basisberechtigung</del><ins>der grundlegenden Berechtigung</ins> „Dateien hochladen“, die immer erforderlich ist.<br />

#### [`fof-upload.admin.permissions.upload_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/de@formal/?q=context%3A%3D%22fof-upload.admin.permissions.upload_label%22)

> Upload files (base permission, required for all uploads)

```diff
-Dateien hochladen (Basisberechtigung, erforderlich für alle Uploads)
+Dateien hochladen (Basisberechtigung, für alle Uploads erforderlich)
```

Dateien hochladen (Basisberechtigung, <del>erforderlich </del>für alle <del>Uploads)</del><ins>Uploads erforderlich)</ins>

#### [`fof-upload.api.upload_errors.mime_permission_denied`](https://weblate.rob006.net/translate/flarum2/fof-upload/de@formal/?q=context%3A%3D%22fof-upload.api.upload_errors.mime_permission_denied%22)

> You don't have permission to upload this file type.

```diff
-Du hast keine Berechtigung, diesen Dateityp hochzuladen.
+Sie haben keine Berechtigung, diesen Dateityp hochzuladen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> keine Berechtigung, diesen Dateityp hochzuladen.


### `fof-username-request`

#### [`fof-username-request.email.body.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.email.body.approved%22)

> Your request to change your username to "{new\_username}" has been approved by {actor\_display\_name}.
>
> You can now log in with your new username: {login\_url}
>

```diff
-Deine Anfrage, um deinen Benutzernamen in „{new_username}” zu ändern, wurde von {actor_display_name} genehmigt.
+Ihr Antrag auf Änderung Ihres Benutzernamens in „{new_username}“ wurde von {actor_display_name} genehmigt.

-Du kannst dich nun mit deinem neuen Benutzernamen anmelden: {login_url}
+Sie können sich nun mit Ihrem neuen Benutzernamen anmelden: {login_url}

```

<del>Deine Anfrage,</del><ins>Ihr</ins> <del>um</del><ins>Antrag</ins> <del>deinen</del><ins>auf</ins> <del>Benutzernamen</del><ins>Änderung</ins> <del>in</del><ins>Ihres</ins> <del>„{new\_username}”</del><ins>Benutzernamens</ins> <del>zu</del><ins>in</ins> <del>ändern,</del><ins>„{new\_username}“</ins> wurde von {actor\_display\_name} genehmigt.<br /><br /><del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> <del>dich</del><ins>sich</ins> nun mit <del>deinem</del><ins>Ihrem</ins> neuen Benutzernamen anmelden: {login\_url}<br />

#### [`fof-username-request.email.body.rejected`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.email.body.rejected%22)

> Your request to change your username from "{old\_username}" to "{requested\_username}" has been rejected by {actor\_display\_name}.
>
> Reason: {reason}
>

```diff
-Deine Anfrage, deinen Benutzernamen von „{old_username}” in „{requested_username}” zu ändern, wurde von {actor_display_name} abgelehnt.
+Ihr Antrag auf Änderung Ihres Benutzernamens von „{old_username}“ in „{requested_username}“ wurde von {actor_display_name} abgelehnt.

 Grund: {reason}

```

<del>Deine</del><ins>Ihr</ins> <del>Anfrage,</del><ins>Antrag</ins> <del>deinen</del><ins>auf</ins> <del>Benutzernamen</del><ins>Änderung</ins> <del>von</del><ins>Ihres</ins> <del>„{old\_username}”</del><ins>Benutzernamens</ins> <del>in</del><ins>von</ins> <del>„{requested\_username}”</del><ins>„{old\_username}“</ins> <del>zu</del><ins>in</ins> <del>ändern,</del><ins>„{requested\_username}“</ins> wurde von {actor\_display\_name} abgelehnt.<br /><br />Grund: {reason}<br />

#### [`fof-username-request.email.subject.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.email.subject.approved%22)

> {display\_name} approved your username change to {requested\_username}

```diff
-{display_name} hat deine Namensänderung zu {requested_username} genehmigt
+{display_name} hat Ihre Namensänderung zu {requested_username} genehmigt
```

{display\_name} hat <del>deine</del><ins>Ihre</ins> Namensänderung zu {requested\_username} genehmigt

#### [`fof-username-request.email.subject.rejected`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.email.subject.rejected%22)

> {display\_name} rejected your username change to {requested\_username}

```diff
-{display_name} hat deine Namensänderung zu {requested_username} abgelehnt
+{display_name} hat Ihre Namensänderung zu {requested_username} abgelehnt
```

{display\_name} hat <del>deine</del><ins>Ihre</ins> Namensänderung zu {requested\_username} abgelehnt

#### [`fof-username-request.forum.nickname_modals.action.approval_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.approval_label%22)

> Approve

```diff
-=> fof-username-request.ref.action.approval_label
+Genehmigen
```

#### [`fof-username-request.forum.nickname_modals.action.decision_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.decision_title%22)

> Decision

```diff
-=> fof-username-request.ref.action.decision_title
+Entscheidung
```

#### [`fof-username-request.forum.nickname_modals.action.help_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.help_text%22)

> Please make sure that this requested nickname change follows the forum guidelines.

```diff
-Bitte achte darauf, dass die gewünschte Änderung deines Spitznamens den Forenrichtlinien entspricht.
+Bitte achten Sie darauf, dass die gewünschte Änderung Ihres Spitznamens den Forenrichtlinien entspricht.
```

Bitte <del>achte</del><ins>achten Sie</ins> darauf, dass die gewünschte Änderung <del>deines</del><ins>Ihres</ins> Spitznamens den Forenrichtlinien entspricht.

#### [`fof-username-request.forum.nickname_modals.action.reason_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.reason_title%22)

> Reason for Rejection

```diff
-=> fof-username-request.ref.action.reason_title
+Ablehnungsgrund
```

#### [`fof-username-request.forum.nickname_modals.action.rejected_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.rejected_label%22)

> Reject

```diff
-=> fof-username-request.ref.action.rejected_label
+Ablehnen
```

#### [`fof-username-request.forum.nickname_modals.action.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.submit_button%22)

> Submit

```diff
-=> fof-username-request.ref.action.submit_button
+Absenden
```

#### [`fof-username-request.forum.nickname_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.confirmation_message%22)

> Your nickname change request has been submitted and is pending approval.

```diff
-Deine Anfrage zur Änderung deines Spitznamens wurde eingereicht und wartet auf Genehmigung.
+Ihre Anfrage zur Änderung Ihres Spitznamens wurde eingereicht und wartet auf Genehmigung.
```

<del>Deine</del><ins>Ihre</ins> Anfrage zur Änderung <del>deines</del><ins>Ihres</ins> Spitznamens wurde eingereicht und wartet auf Genehmigung.

#### [`fof-username-request.forum.nickname_modals.request.current_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.current_request%22)

> You have already requested to change your nickname to "{name}". You can either update your request or delete it.

```diff
-Du hast bereits eine offene Anfrage deinen Spitznamen zu "{name}" zu ändern. Du kannst deine Anfrage entweder aktualisieren oder löschen.
+Sie haben bereits eine offene Anfrage zur Änderung deinen Spitznamen zu „{name}“. Sie können Ihre Anfrage entweder aktualisieren oder löschen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> bereits eine offene Anfrage <del>deinen</del><ins>zur</ins> <del>Spitznamen</del><ins>Änderung</ins> <del>zu</del><ins>deinen</ins> <del>"{name}"</del><ins>Spitznamen</ins> zu <del>ändern.</del><ins>„{name}“.</ins> <del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> <del>deine</del><ins>Ihre</ins> Anfrage entweder aktualisieren oder löschen.

#### [`fof-username-request.forum.nickname_modals.request.delete_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.delete_button%22)

> Delete Request

```diff
-=> fof-username-request.ref.request.delete_button
+Anfrage löschen
```

#### [`fof-username-request.forum.nickname_modals.request.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.submit_button%22)

> Submit Request

```diff
-=> fof-username-request.ref.request.submit_button
+Anfrage absenden
```

#### [`fof-username-request.forum.nickname_modals.request.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.title%22)

> Request Nickname Change

```diff
-=> fof-username-request.ref.nickname_change_request
+Änderung des Spitznamens anfordern
```

#### [`fof-username-request.forum.nickname_modals.results.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.approved%22)

> Your nickname change request has been approved

```diff
-Deine gewünschte Änderung des Spitznamens wurde genehmigt
+Ihre gewünschte Änderung des Spitznamens wurde genehmigt
```

<del>Deine</del><ins>Ihre</ins> gewünschte Änderung des Spitznamens wurde genehmigt

#### [`fof-username-request.forum.nickname_modals.results.new_name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.new_name%22)

> Your nickname has been successfully changed to: {name}

```diff
-Dein Spitzname wurde erfolgreich geändert zu: {name}
+Ihr Spitzname wurde erfolgreich geändert zu: {name}
```

<del>Dein</del><ins>Ihr</ins> Spitzname wurde erfolgreich geändert zu: {name}

#### [`fof-username-request.forum.nickname_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.resubmit%22)

> At this time you may resubmit a new nickname change request from your account settings if you so choose to.

```diff
-Zu diesem Zeitpunkt kannst du, wenn du möchtest, über deine Kontoeinstellungen einen neuen Antrag auf Änderung deines Spitznamens stellen.
+Zu diesem Zeitpunkt können Sie, wenn sie möchten, über Ihre Kontoeinstellungen einen neuen Antrag auf Änderung Ihres Spitznamens stellen.
```

Zu diesem Zeitpunkt <del>kannst</del><ins>können</ins> <del>du,</del><ins>Sie,</ins> wenn <del>du</del><ins>sie</ins> <del>möchtest,</del><ins>möchten,</ins> über <del>deine</del><ins>Ihre</ins> Kontoeinstellungen einen neuen Antrag auf Änderung <del>deines</del><ins>Ihres</ins> Spitznamens stellen.

#### [`fof-username-request.forum.username_modals.action.approval_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.approval_label%22)

> Approve

```diff
-=> fof-username-request.ref.action.approval_label
+Genehmigen
```

#### [`fof-username-request.forum.username_modals.action.decision_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.decision_title%22)

> Decision

```diff
-=> fof-username-request.ref.action.decision_title
+Entscheidung
```

#### [`fof-username-request.forum.username_modals.action.help_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.help_text%22)

> Please make sure that this requested username change follows the forum guidelines.

```diff
-Bitte achte darauf, dass die gewünschte Benutzername-Änderung den Forenrichtlinien entspricht.
+Bitte achten Sie darauf, dass die gewünschte Benutzername-Änderung den Forenrichtlinien entspricht.
```

Bitte <del>achte</del><ins>achten Sie</ins> darauf, dass die gewünschte Benutzername-Änderung den Forenrichtlinien entspricht.

#### [`fof-username-request.forum.username_modals.action.reason_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.reason_title%22)

> Reason for Rejection

```diff
-=> fof-username-request.ref.action.reason_title
+Ablehnungsgrund
```

#### [`fof-username-request.forum.username_modals.action.rejected_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.rejected_label%22)

> Reject

```diff
-=> fof-username-request.ref.action.rejected_label
+Ablehnen
```

#### [`fof-username-request.forum.username_modals.action.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.submit_button%22)

> Submit

```diff
-=> fof-username-request.ref.action.submit_button
+Absenden
```

#### [`fof-username-request.forum.username_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.confirmation_message%22)

> Your username change request has been submitted and is pending approval.

```diff
-Deine Anfrage zur Änderung deines Benutzernamens wurde übermittelt und wartet auf Genehmigung.
+Ihre Anfrage zur Änderung Ihres Benutzernamens wurde übermittelt und wartet auf Genehmigung.
```

<del>Deine</del><ins>Ihre</ins> Anfrage zur Änderung <del>deines</del><ins>Ihres</ins> Benutzernamens wurde übermittelt und wartet auf Genehmigung.

#### [`fof-username-request.forum.username_modals.request.current_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.current_request%22)

> You have already requested to change your username to "{name}". You can either update your request or delete it.

```diff
-Du hast bereits eine offene Anfrage deinen Benutzernamen zu "{name}" zu ändern. Du kannst deine Anfrage entweder aktualisieren oder löschen.
+Sie haben bereits eine offene Anfrage zur Änderung Ihres Benutzernamen zu „{name}“. Sie können Ihre Anfrage entweder aktualisieren oder löschen.
```

<del>Du</del><ins>Sie</ins> <del>hast</del><ins>haben</ins> bereits eine offene Anfrage <del>deinen</del><ins>zur</ins> <del>Benutzernamen</del><ins>Änderung</ins> <del>zu</del><ins>Ihres</ins> <del>"{name}"</del><ins>Benutzernamen</ins> zu <del>ändern.</del><ins>„{name}“.</ins> <del>Du</del><ins>Sie</ins> <del>kannst</del><ins>können</ins> <del>deine</del><ins>Ihre</ins> Anfrage entweder aktualisieren oder löschen.

#### [`fof-username-request.forum.username_modals.request.delete_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.delete_button%22)

> Delete Request

```diff
-=> fof-username-request.ref.request.delete_button
+Anfrage löschen
```

#### [`fof-username-request.forum.username_modals.request.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.submit_button%22)

> Submit Request

```diff
-=> fof-username-request.ref.request.submit_button
+Anfrage absenden
```

#### [`fof-username-request.forum.username_modals.request.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.title%22)

> Request Username Change

```diff
-=> fof-username-request.ref.username_change_request
+Änderung des Benutzernamens beantragen
```

#### [`fof-username-request.forum.username_modals.results.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.approved%22)

> Your username change request has been approved

```diff
-Deine gewünschte Änderung des Benutzernamens wurde genehmigt
+Ihre gewünschte Änderung des Benutzernamens wurde genehmigt
```

<del>Deine</del><ins>Ihre</ins> gewünschte Änderung des Benutzernamens wurde genehmigt

#### [`fof-username-request.forum.username_modals.results.new_name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.new_name%22)

> Your username has been successfully changed to: {name}

```diff
-Dein Benutzername wurde erfolgreich geändert zu: {name}
+Ihr Benutzername wurde erfolgreich geändert zu: {name}
```

<del>Dein</del><ins>Ihr</ins> Benutzername wurde erfolgreich geändert zu: {name}

#### [`fof-username-request.forum.username_modals.results.rejected`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.rejected%22)

> Your username change request was rejected

```diff
-Deine gewünschte Änderung des Benutzernamens wurde abgelehnt
+Ihre gewünschte Änderung des Benutzernamens wurde abgelehnt
```

<del>Deine</del><ins>Ihre</ins> gewünschte Änderung des Benutzernamens wurde abgelehnt

#### [`fof-username-request.forum.username_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de@formal/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.resubmit%22)

> At this time you may resubmit a new username change request from your account settings if you so choose to.

```diff
-Zu diesem Zeitpunkt kannst du, wenn du möchtest, über deine Kontoeinstellungen einen neuen Antrag auf Änderung deines Benutzernamens stellen.
+Zu diesem Zeitpunkt können Sie, wenn Sie möchten, über Ihre Kontoeinstellungen einen neuen Antrag auf Änderung Ihres Benutzernamens stellen.
```

Zu diesem Zeitpunkt <del>kannst</del><ins>können</ins> <del>du,</del><ins>Sie,</ins> wenn <del>du</del><ins>Sie</ins> <del>möchtest,</del><ins>möchten,</ins> über <del>deine</del><ins>Ihre</ins> Kontoeinstellungen einen neuen Antrag auf Änderung <del>deines</del><ins>Ihres</ins> Benutzernamens stellen.


### `forumaker-magicbb`

#### [`forumaker-magicbb.admin.settings.bb_iframe_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de@formal/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe_help%22)

> Allows embedding iframes from any source. Use with caution — embedded content may include external scripts. 🧹 After changing this setting, please clear the Flarum cache

```diff
-Ermöglicht das Einbetten von iFrames aus beliebigen Quellen. Mit Vorsicht verwenden – eingebettete Inhalte können externe Skripte enthalten. 🧹 Bitte leere nach dem Ändern dieser Einstellung den Flarum-Cache.
+Ermöglicht das Einbetten von iFrames aus beliebigen Quellen. Mit Vorsicht verwenden – eingebettete Inhalte können externe Skripte enthalten. 🧹 Bitte leeren Sie nach dem Ändern dieser Einstellung den Flarum-Cache.
```

Ermöglicht das Einbetten von iFrames aus beliebigen Quellen. Mit Vorsicht verwenden – eingebettete Inhalte können externe Skripte enthalten. 🧹 Bitte <del>leere</del><ins>leeren Sie</ins> nach dem Ändern dieser Einstellung den Flarum-Cache.


### `resofire-digest-mail`

#### [`resofire-digest-mail.admin.settings.send_window_start_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de@formal/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_start_help%22)

> The time of day your digest emails will start sending. Choose a quiet period when your forum has low activity — typically late night or early morning.

```diff
-Die Tageszeit, zu der der Versand der Zusammenfassungs-E-Mails beginnt. Wähle eine ruhige Zeit, in der in deinem Forum wenig los ist – in der Regel spätabends oder frühmorgens.
+Die Tageszeit, zu der der Versand der Zusammenfassungs-E-Mails beginnt. Wählen Sie eine ruhige Zeit, in der in Ihrem Forum wenig los ist – in der Regel spätabends oder frühmorgens.
```

Die Tageszeit, zu der der Versand der Zusammenfassungs-E-Mails beginnt. <del>Wähle</del><ins>Wählen Sie</ins> eine ruhige Zeit, in der in <del>deinem</del><ins>Ihrem</ins> Forum wenig los ist – in der Regel spätabends oder frühmorgens.


### `yippy-auth-ldap`

#### [`yippy-auth-ldap.admin.settings.domains.data.filter_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de@formal/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.filter_help%22)

> Optional, must exclude 'Search fields' into the filter. For example inputting filter as '(objectclass=user)' and selecting 'uid' within 'Search fields' will amend the filter as '(&amp;(objectclass=user)(uid=\[User's Input\]))"

```diff
-Optional: Die „Suchfelder“ müssen aus dem Filter ausgeschlossen werden. Wenn du beispielsweise den Filter „(objectclass=user)“ eingibst und in den „Suchfeldern“ „uid“ auswählen, wird der Filter zu „(&(objectclass=user)(uid=[Benutzereingabe])“ geändert.
+Optional: Die „Suchfelder“ müssen aus dem Filter ausgeschlossen werden. Wenn Sie beispielsweise den Filter „(objectclass=user)“ eingeben und in den „Suchfeldern“ „uid“ auswählen, wird der Filter zu „(&(objectclass=user)(uid=[Benutzereingabe])“ geändert.
```

Optional: Die „Suchfelder“ müssen aus dem Filter ausgeschlossen werden. Wenn <del>du</del><ins>Sie</ins> beispielsweise den Filter „(objectclass=user)“ <del>eingibst</del><ins>eingeben</ins> und in den „Suchfeldern“ „uid“ auswählen, wird der Filter zu „(&amp;(objectclass=user)(uid=\[Benutzereingabe\])“ geändert.

#### [`yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de@formal/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields_help%22)

> Nickname extension must be enabled, compile the Nickname with multiple LDAP fields using the dropdown options. For example selecting "givenname,sn" will assign "\[First Name\] \[Last Name\]" as their Nickname

```diff
-Die Spitznamen-Erweiterung muss aktiviert sein. Stelle den Spitznamen mithilfe der Dropdown-Optionen aus mehreren LDAP-Feldern zusammen. Wenn du beispielsweise „givenname,sn“ auswählst, wird als Spitzname „[Vorname] [Nachname]“ zugewiesen.
+Die Spitznamen-Erweiterung muss aktiviert sein. Stellen Sie den Spitznamen mithilfe der Dropdown-Optionen aus mehreren LDAP-Feldern zusammen. Wenn Sie beispielsweise „givenname,sn“ auswählen, wird als Spitzname „[Vorname] [Nachname]“ zugewiesen.
```

Die Spitznamen-Erweiterung muss aktiviert sein. <del>Stelle</del><ins>Stellen Sie</ins> den Spitznamen mithilfe der Dropdown-Optionen aus mehreren LDAP-Feldern zusammen. Wenn <del>du</del><ins>Sie</ins> beispielsweise „givenname,sn“ <del>auswählst,</del><ins>auswählen,</ins> wird als Spitzname „\[Vorname\] \[Nachname\]“ zugewiesen.

#### [`yippy-auth-ldap.forum.errors.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de@formal/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.csrf_token_mismatch%22)

> You have been inactive for too long, please refresh the page and try again

```diff
-Du bist zu lange inaktiv gewesen. Bitte aktualisiere die Seite und versuche es erneut.
+Sie sind zu lange inaktiv gewesen. Bitte aktualisieren Sie die Seite und versuchen Sie es erneut.
```

<del>Du</del><ins>Sie</ins> <del>bist</del><ins>sind</ins> zu lange inaktiv gewesen. Bitte <del>aktualisiere</del><ins>aktualisieren Sie</ins> die Seite und <del>versuche</del><ins>versuchen Sie</ins> es erneut.

<!-- {% endraw %} -->
