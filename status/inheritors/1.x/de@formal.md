# German (formal) inherited translations differences

Translations for German (formal) (`de@formal`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **21** are
translated only in `de@formal`. Altogether they cover **4** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [1](#core) | 0 |
| `ffans-link-guard` | 0 | [19](#ffans-link-guard-missing) |
| `fof-mark-unread` | 0 | [2](#fof-mark-unread-missing) |
| `ralkage-hcaptcha` | [2](#ralkage-hcaptcha) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.forum.discussion_controls.log_in_to_reply_button`](https://weblate.rob006.net/translate/flarum2/core/de@formal/?q=context%3A%3D%22core.forum.discussion_controls.log_in_to_reply_button%22)

> Log In to Reply

```diff
-=> core.ref.reply
+Anmelden zum Antworten
```


### `ralkage-hcaptcha`

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
-Verwende das dunklen Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.
+Verwende das dunkle Design für das hCaptcha-Widget. Aktivieren Sie diese Option, wenn Ihr Forum ein dunkles Design verwendet.
```

Verwende das <del>dunklen</del><ins>dunkle</ins> Design für das hCaptcha-Widget. <del>Aktiviere</del><ins>Aktivieren Sie</ins> diese Option, wenn <del>dein</del><ins>Ihr</ins> Forum ein dunkles Design verwendet.

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
-Bei der Anmeldung von Benutzern hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.
+Bei der Anmeldung der Benutzer hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.
```

Bei der Anmeldung <del>von</del><ins>der</ins> <del>Benutzern</del><ins>Benutzer</ins> hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.


## Missing translations

These strings are translated only in `de@formal`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `de@formal`.


### `ffans-link-guard` (missing)

#### [`ffans-link-guard.admin.settings.trusted_domains_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.trusted_domains_help%22)

> Enter one domain per line. Same-origin links always bypass the warning. &lt;code&gt;example.com&lt;/code&gt; matches only that domain. &lt;code&gt;\*.example.com&lt;/code&gt; matches its subdomains, but not &lt;code&gt;example.com&lt;/code&gt; itself.

```diff
+Gib eine Domäne pro Zeile ein. Links derselben Herkunft umgehen die Warnung immer. <code>example.com</code> passt nur auf diese Domain. <code>*.example.com</code> passt auch auf deren Subdomains, jedoch nicht auf <code>example.com</code> selbst.
```

#### [`ffans-link-guard.admin.settings.trusted_domains_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.trusted_domains_label%22)

> Trusted domains

```diff
+Vertrauenswürdige Domänen
```

#### [`ffans-link-guard.admin.settings.use_modal_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.use_modal_help%22)

> Shows the warning on the current page via modal.

```diff
+Zeigt die Warnung auf der aktuellen Seite in einem Modalfenster an.
```

#### [`ffans-link-guard.admin.settings.use_modal_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.use_modal_label%22)

> Show warnings in a modal

```diff
+Warnungen in einem Modalfenster anzeigen
```

#### [`ffans-link-guard.admin.settings.warning_message_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_message_help%22)

> Leave blank to use the default warning. Plain text only; line breaks are supported.

```diff
+Lasse das Feld leer, um die Standardwarnung zu verwenden. Nur Klartext; Zeilenumbrüche werden unterstützt.
```

#### [`ffans-link-guard.admin.settings.warning_message_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_message_label%22)

> Warning message

```diff
+Warnmeldung
```

#### [`ffans-link-guard.admin.settings.warning_title_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_title_help%22)

> Leave blank to use the default title. Plain text only.

```diff
+Lasse das Feld leer, um den Standardtitel zu verwenden. Nur Klartext.
```

#### [`ffans-link-guard.admin.settings.warning_title_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_title_label%22)

> Warning title

```diff
+Titel der Warnung
```

#### [`ffans-link-guard.forum.cancel_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.cancel_button%22)

> Cancel

```diff
+Abbrechen
```

#### [`ffans-link-guard.forum.close_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.close_button%22)

> Close this tab

```diff
+Diesen Tab schließen
```

#### [`ffans-link-guard.forum.close_fallback`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.close_fallback%22)

> If this tab did not close, close it manually or &lt;a&gt;return to the community&lt;/a&gt;.

```diff
+Falls dieser Reiter nicht geschlossen wurde, schließe ihn bitte manuell oder <a>kehre zur Community zurück</a>.
```

#### [`ffans-link-guard.forum.continue_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.continue_button%22)

> Continue

```diff
+Fortfahren
```

#### [`ffans-link-guard.forum.destination_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.destination_label%22)

> Destination website

```diff
+Zielseite
```

#### [`ffans-link-guard.forum.invalid_message`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.invalid_message%22)

> This address could not be recognized. Please return to the community and open the link again.

```diff
+Die Adresse konnte nicht erkannt werden. Bitte kehre zur Community zurück und öffne den Link erneut.
```

#### [`ffans-link-guard.forum.invalid_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.invalid_title%22)

> Invalid external link

```diff
+Ungültiger externer Link
```

#### [`ffans-link-guard.forum.page_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.forum.page_title%22)

> Leaving the forum

```diff
+Verlasse das Forum
```

#### [`ffans-link-guard.lib.default_forum_name`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.lib.default_forum_name%22)

> this site

```diff
+diese Seite
```

#### [`ffans-link-guard.lib.default_warning_message`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.lib.default_warning_message%22)

> Please keep your account and personal information safe.

```diff
+Bitte achte darauf, deine Kontodaten und persönliche Daten sicher zu halten.
```

#### [`ffans-link-guard.lib.default_warning_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/de@formal/?q=context%3A%3D%22ffans-link-guard.lib.default_warning_title%22)

> You are about to leave {forumName}

```diff
+Du bist dabei, {forumName} zu verlassen
```


### `fof-mark-unread` (missing)

#### [`fof-mark-unread.admin.permissions.mark_unread_label`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/de@formal/?q=context%3A%3D%22fof-mark-unread.admin.permissions.mark_unread_label%22)

> Mark discussions as unread

```diff
+Diskussionen als ungelesen markieren
```

#### [`fof-mark-unread.forum.discussion_controls.mark_unread_button`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/de@formal/?q=context%3A%3D%22fof-mark-unread.forum.discussion_controls.mark_unread_button%22)

> Mark as unread

```diff
+Als ungelesen markieren
```

<!-- {% endraw %} -->
