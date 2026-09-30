# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **21** are
translated only in `de`. Altogether they cover **3** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [2](#core) | 0 |
| `ffans-link-guard` | 0 | [19](#ffans-link-guard-missing) |
| `fof-oauth` | [1](#fof-oauth) | [2](#fof-oauth-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.forum.discussion_controls.log_in_to_reply_button`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.forum.discussion_controls.log_in_to_reply_button%22)

> Log In to Reply

```diff
-=> core.ref.reply
+Anmelden zum Antworten
```

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Markiere ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.
+{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen markieren.
```

{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. <del>Markiere ungelesene</del><ins>Ungelesene</ins> {count, plural, one {Antwort} other {Antworten}} als <del>gelesen.</del><ins>gelesen markieren.</ins>


### `fof-oauth`

#### [`fof-oauth.admin.settings.update_email_from_provider_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de/?q=context%3A%3D%22fof-oauth.admin.settings.update_email_from_provider_help%22)

> If enabled, logging in with an OAuth provider whose verified email differs from the user's forum email sends a confirmation link to the new address, and a notice to the current one. The email changes once the link is followed. Providers that cannot confirm the address is verified, including third-party providers that have not been updated to support it, will not change the email address.

```diff
-Wenn diese Option aktiviert ist, wird die E-Mail-Adresse des Nutzers bei jeder Anmeldung im Forum aktualisiert, damit sie mit der vom OAuth-Anbieter angegebenen Adresse übereinstimmt. Nicht alle Anbieter stellen die aktualisierte E-Mail-Adresse zur Verfügung. In diesem Fall hat diese Einstellung bei diesen Anbietern keine Auswirkungen.
+Wenn aktiviert, wird bei der Anmeldung über einen OAuth-Anbieter, dessen verifizierte E-Mail-Adresse von der im Forum hinterlegten E-Mail-Adresse des Benutzers abweicht, ein Bestätigungslink an die neue Adresse gesendet und eine Benachrichtigung an die aktuelle Adresse. Die E-Mail-Adresse wird erst geändert sich, sobald der Link angeklickt wird. Anbieter, die die Verifizierung der Adresse nicht bestätigen können – darunter auch Drittanbieter, die noch nicht entsprechend aktualisiert wurden –, ändern die E-Mail-Adresse nicht.
```

Wenn <del>diese</del><ins>aktiviert,</ins> <del>Option</del><ins>wird</ins> <del>aktiviert</del><ins>bei</ins> <del>ist,</del><ins>der</ins> <del>wird</del><ins>Anmeldung</ins> <del>die</del><ins>über</ins> <del>E-Mail-Adresse</del><ins>einen</ins> <del>des</del><ins>OAuth-Anbieter,</ins> <del>Nutzers</del><ins>dessen</ins> <del>bei</del><ins>verifizierte</ins> <del>jeder</del><ins>E-Mail-Adresse</ins> <del>Anmeldung</del><ins>von der</ins> im Forum <del>aktualisiert,</del><ins>hinterlegten</ins> <del>damit</del><ins>E-Mail-Adresse</ins> <del>sie</del><ins>des</ins> <del>mit</del><ins>Benutzers</ins> <del>der</del><ins>abweicht,</ins> <del>vom</del><ins>ein</ins> <del>OAuth-Anbieter</del><ins>Bestätigungslink</ins> <del>angegebenen</del><ins>an die neue</ins> Adresse <del>übereinstimmt.</del><ins>gesendet</ins> <del>Nicht</del><ins>und</ins> <del>alle</del><ins>eine</ins> <del>Anbieter</del><ins>Benachrichtigung</ins> <del>stellen</del><ins>an</ins> die <del>aktualisierte</del><ins>aktuelle Adresse. Die</ins> E-Mail-Adresse <del>zur</del><ins>wird</ins> <del>Verfügung.</del><ins>erst</ins> <del>In</del><ins>geändert</ins> <del>diesem</del><ins>sich,</ins> <del>Fall</del><ins>sobald</ins> <del>hat</del><ins>der</ins> <del>diese</del><ins>Link</ins> <del>Einstellung</del><ins>angeklickt</ins> <del>bei</del><ins>wird.</ins> <del>diesen</del><ins>Anbieter,</ins> <del>Anbietern</del><ins>die</ins> <del>keine</del><ins>die</ins> <del>Auswirkungen.</del><ins>Verifizierung der Adresse nicht bestätigen können – darunter auch Drittanbieter, die noch nicht entsprechend aktualisiert wurden –, ändern die E-Mail-Adresse nicht.</ins>


## Missing translations

These strings are translated only in `de`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `de`.


### `ffans-link-guard` (missing)

#### [`ffans-link-guard.admin.settings.trusted_domains_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.trusted_domains_help%22)

> Enter one domain per line. Same-origin links always bypass the warning. &lt;code&gt;example.com&lt;/code&gt; matches only that domain. &lt;code&gt;\*.example.com&lt;/code&gt; matches its subdomains, but not &lt;code&gt;example.com&lt;/code&gt; itself.

```diff
+Gib eine Domäne pro Zeile ein. Links derselben Herkunft umgehen die Warnung immer. <code>example.com</code> passt nur auf diese Domain. <code>*.example.com</code> passt auch auf deren Subdomains, jedoch nicht auf <code>example.com</code> selbst.
```

#### [`ffans-link-guard.admin.settings.trusted_domains_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.trusted_domains_label%22)

> Trusted domains

```diff
+Vertrauenswürdige Domänen
```

#### [`ffans-link-guard.admin.settings.use_modal_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.use_modal_help%22)

> Shows the warning on the current page via modal.

```diff
+Zeigt die Warnung auf der aktuellen Seite in einem Modalfenster an.
```

#### [`ffans-link-guard.admin.settings.use_modal_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.use_modal_label%22)

> Show warnings in a modal

```diff
+Warnungen in einem Modalfenster anzeigen
```

#### [`ffans-link-guard.admin.settings.warning_message_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_message_help%22)

> Leave blank to use the default warning. Plain text only; line breaks are supported.

```diff
+Lasse das Feld leer, um die Standardwarnung zu verwenden. Nur Klartext; Zeilenumbrüche werden unterstützt.
```

#### [`ffans-link-guard.admin.settings.warning_message_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_message_label%22)

> Warning message

```diff
+Warnmeldung
```

#### [`ffans-link-guard.admin.settings.warning_title_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_title_help%22)

> Leave blank to use the default title. Plain text only.

```diff
+Lasse das Feld leer, um den Standardtitel zu verwenden. Nur Klartext.
```

#### [`ffans-link-guard.admin.settings.warning_title_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_title_label%22)

> Warning title

```diff
+Titel der Warnung
```

#### [`ffans-link-guard.forum.cancel_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.cancel_button%22)

> Cancel

```diff
+Abbrechen
```

#### [`ffans-link-guard.forum.close_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.close_button%22)

> Close this tab

```diff
+Diesen Tab schließen
```

#### [`ffans-link-guard.forum.close_fallback`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.close_fallback%22)

> If this tab did not close, close it manually or &lt;a&gt;return to the community&lt;/a&gt;.

```diff
+Falls dieser Reiter nicht geschlossen wurde, schließe ihn bitte manuell oder <a>kehre zur Community zurück</a>.
```

#### [`ffans-link-guard.forum.continue_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.continue_button%22)

> Continue

```diff
+Fortfahren
```

#### [`ffans-link-guard.forum.destination_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.destination_label%22)

> Destination website

```diff
+Zielseite
```

#### [`ffans-link-guard.forum.invalid_message`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.invalid_message%22)

> This address could not be recognized. Please return to the community and open the link again.

```diff
+Die Adresse konnte nicht erkannt werden. Bitte kehre zur Community zurück und öffne den Link erneut.
```

#### [`ffans-link-guard.forum.invalid_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.invalid_title%22)

> Invalid external link

```diff
+Ungültiger externer Link
```

#### [`ffans-link-guard.forum.page_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.forum.page_title%22)

> Leaving the forum

```diff
+Verlasse das Forum
```

#### [`ffans-link-guard.lib.default_forum_name`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.lib.default_forum_name%22)

> this site

```diff
+diese Seite
```

#### [`ffans-link-guard.lib.default_warning_message`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.lib.default_warning_message%22)

> Please keep your account and personal information safe.

```diff
+Bitte achte darauf, deine Kontodaten und persönliche Daten sicher zu halten.
```

#### [`ffans-link-guard.lib.default_warning_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de/?q=context%3A%3D%22ffans-link-guard.lib.default_warning_title%22)

> You are about to leave {forumName}

```diff
+Du bist dabei, {forumName} zu verlassen
```


### `fof-oauth` (missing)

#### [`fof-oauth.email.provider_email_change_notice.subject`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de/?q=context%3A%3D%22fof-oauth.email.provider_email_change_notice.subject%22)

> Email Address Change Requested

```diff
+Änderung der E-Mail-Adresse beantragt
```

#### [`fof-oauth.forum.log_in.unverified_email_in_use`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de/?q=context%3A%3D%22fof-oauth.forum.log_in.unverified_email_in_use%22)

> {provider} hasn't confirmed this email address, so we can't use it to sign you in. If you already have an account, log in below, then link {provider} from your account settings.

```diff
+{provider} hat diese E-Mail-Adresse noch nicht bestätigt, daher können wir sie nicht für deine Anmeldung verwenden. Wenn du bereits ein Konto hast, melde dich unten an und verknüpfe {provider} anschließend in deinen Kontoeinstellungen.
```

<!-- {% endraw %} -->
