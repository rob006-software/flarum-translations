# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **27** are translated differently and **19** are
translated only in `de`. Altogether they cover **5** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [3](#core) | 0 |
| `ffans-link-guard` | 0 | [19](#ffans-link-guard-missing) |
| `flarum-pusher` | [1](#flarum-pusher) | 0 |
| `fof-polls` | [21](#fof-polls) | 0 |
| `fof-sentry` | [2](#fof-sentry) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.forum.discussion_controls.log_in_to_reply_button`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.forum.discussion_controls.log_in_to_reply_button%22)

> Log In to Reply

```diff
-=> core.ref.reply
+Anmelden zum Antworten
```

#### [`core.forum.discussion_list.empty_text`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.forum.discussion_list.empty_text%22)

> It looks as though there are no discussions here.

```diff
-Es gibt noch keine Diskussionen in diesem Forum.
+Es gibt noch keine Diskussionen hier.
```

Es gibt noch keine Diskussionen <del>in diesem Forum.</del><ins>hier.</ins>

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Markiere ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen.
+{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. Ungelesene {count, plural, one {Antwort} other {Antworten}} als gelesen markieren.
```

{count, plural, one {# ungelesene Antwort} other {# ungelesene Antworten}}. <del>Markiere ungelesene</del><ins>Ungelesene</ins> {count, plural, one {Antwort} other {Antworten}} als <del>gelesen.</del><ins>gelesen markieren.</ins>


### `flarum-pusher`

#### [`flarum-pusher.admin.pusher_settings.app_secret_label`](https://weblate.rob006.net/translate/flarum2/flarum-pusher/de/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_secret_label%22)

> App Secret

```diff
-App Secret
+App-Secret
```


### `fof-polls`

#### [`fof-polls.admin.settings.enabled_poll_groups_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups_help%22)

> Poll groups allow you to group globals polls together, and display them in a dedicated page.

```diff
-Umfragegruppen ermöglichen es Ihnen, globale Umfragen zu gruppieren und auf einer speziellen Seite anzuzeigen.
+Umfragegruppen ermöglichen es dir, globale Umfragen zu gruppieren und auf einer speziellen Seite anzuzeigen.
```

Umfragegruppen ermöglichen es <del>Ihnen,</del><ins>dir,</ins> globale Umfragen zu gruppieren und auf einer speziellen Seite anzuzeigen.

#### [`fof-polls.forum.page.nav-groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.page.nav-groups%22)

> Poll Groups

```diff
-Umfrage-Gruppen
+Umfragegruppen
```

#### [`fof-polls.forum.poll_groups.composer.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.add_title%22)

> Add Poll Group

```diff
-Umfrage-Gruppe hinzufügen
+Umfragegruppe hinzufügen
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> hinzufügen

#### [`fof-polls.forum.poll_groups.composer.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.delete%22)

> Delete Poll Group

```diff
-Umfrage-Gruppe löschen
+Umfragegruppe löschen
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> löschen

#### [`fof-polls.forum.poll_groups.composer.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.edit_title%22)

> Edit Poll Group

```diff
-Umfrage-Gruppe bearbeiten
+Umfragegruppe bearbeiten
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> bearbeiten

#### [`fof-polls.forum.poll_groups.composer.groups_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.groups_manager%22)

> Poll Groups Manager

```diff
-Umfrage-Gruppen-Manager
+Umfragegruppen-Manager
```

#### [`fof-polls.forum.poll_groups.composer.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.save_changes%22)

> =&gt; core.ref.save\_changes

```diff
-Änderungen speichern
+=> core.ref.save_changes
```

#### [`fof-polls.forum.poll_groups.composer.success`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.success%22)

> Poll group saved successfully.

```diff
-Umfrage-Gruppe erfolgreich gespeichert.
+Umfragegruppe erfolgreich gespeichert.
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> erfolgreich gespeichert.

#### [`fof-polls.forum.poll_groups.composer.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.view_group%22)

> View Poll Group

```diff
-Umfrage-Gruppe anzeigen
+Umfragegruppe anzeigen
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> anzeigen

#### [`fof-polls.forum.poll_groups.controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_confirmation%22)

> Are you sure you want to delete this poll group?

```diff
-Möchtest du diese Umfrage-Gruppe wirklich löschen?
+Möchtest du diese Umfragegruppe wirklich löschen?
```

Möchtest du diese <del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> wirklich löschen?

#### [`fof-polls.forum.poll_groups.controls.delete_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_label%22)

> =&gt; core.ref.delete

```diff
-Löschen
+=> core.ref.delete
```

#### [`fof-polls.forum.poll_groups.controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_success_message%22)

> Poll group deleted successfully.

```diff
-Umfrage-Gruppe erfolgreich gelöscht.
+Umfragegruppe erfolgreich gelöscht.
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> erfolgreich gelöscht.

#### [`fof-polls.forum.poll_groups.controls.edit_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.edit_label%22)

> =&gt; core.ref.edit

```diff
-Bearbeiten
+=> core.ref.edit
```

#### [`fof-polls.forum.poll_groups.controls.view_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.view_label%22)

> View Poll Group

```diff
-Umfrage-Gruppe anzeigen
+Umfragegruppe anzeigen
```

<del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> anzeigen

#### [`fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button%22)

> Cannot Start a Poll Group

```diff
-Kann keine Umfrage-Gruppe starten
+Kann keine Umfragegruppe starten
```

Kann keine <del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> starten

#### [`fof-polls.forum.poll_groups.list_page.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.empty_text%22)

> It looks as though there are no poll groups here.

```diff
-Es scheint, als gäbe es hier noch keine Umfrage-Gruppen.
+Es scheint, als gäbe es hier noch keine Umfragegruppen.
```

Es scheint, als gäbe es hier noch keine <del>Umfrage-Gruppen.</del><ins>Umfragegruppen.</ins>

#### [`fof-polls.forum.poll_groups.list_page.load_more_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
-Mehr laden
+=> core.ref.load_more
```

#### [`fof-polls.forum.poll_groups.list_page.start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.start_poll_group_button%22)

> Start a Poll Group

```diff
-Eine Umfrage-Gruppe starten
+Eine Umfragegruppe starten
```

Eine <del>Umfrage-Gruppe</del><ins>Umfragegruppe</ins> starten

#### [`fof-polls.forum.poll_groups.list_page.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.title%22)

> Poll Groups

```diff
-Umfrage-Gruppen
+Umfragegruppen
```

#### [`fof-polls.forum.polls_list.load_more_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.polls_list.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
-Mehr laden
+=> core.ref.load_more
```

#### [`fof-polls.forum.votes_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.votes_modal.title%22)

> Voters

```diff
-=> fof-polls.forum.public_poll
+Abstimmende
```


### `fof-sentry`

#### [`fof-sentry.admin.settings.db_track_bindings_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/de/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_help%22)

> Include actual parameter values in query tracking (e.g., "SELECT \* FROM users WHERE id = 123" instead of "SELECT \* FROM users WHERE id = ?"). Benefits: See exact values causing slow queries and identify problematic data patterns. Security &amp; Privacy Warning: May expose sensitive user data in Sentry. Passwords and hashes (32+ hex chars) are automatically masked. Long strings (100+ chars) are truncated. Review your privacy policy before enabling. Recommendation: Enable only in staging/development, disable in production.

```diff
-Füge tatsächliche Parameterwerte in die Abfrageverfolgung ein (z. B. „SELECT * FROM users WHERE id = 123” anstelle von „SELECT * FROM users WHERE id = ?”). Vorteile: Du siehst die genauen Werte, die langsame Abfragen verursachen, und kannst problematische Datenmuster identifizieren. Sicherheits- und Datenschutzhinweis: Es können sensible Benutzerdaten in Sentry offengelegt werden. Passwörter und Hashes (32+ Hexadezimalzeichen) werden automatisch maskiert. Lange Zeichenfolgen (100+ Zeichen) werden gekürzt. Überprüfe deine Datenschutzrichtlinie, bevor du diese Funktion aktivierst. Empfehlung: Nur in der Staging-/Entwicklungsumgebung aktivieren, in der Produktionsumgebung deaktivieren.
+Füge tatsächliche Parameterwerte in die Abfrageverfolgung ein (z. B. „SELECT * FROM users WHERE id = 123” anstelle von „SELECT * FROM users WHERE id = ?”). Vorteile: Du siehst die genauen Werte, die langsame Abfragen verursachen, und kannst problematische Datenmuster identifizieren. Sicherheits- und Datenschutzhinweis: Es können sensible Benutzerdaten in Sentry offengelegt werden. Passwörter und Hashes (32+ Hexadezimalzeichen) werden automatisch maskiert. Lange Zeichenfolgen (100+ Zeichen) werden gekürzt. Überprüfe deine Datenschutzrichtlinie, bevor du diese Funktion aktivierst. Empfehlung: Nur in der Staging-/Entwicklungsumgebung aktivieren, in Produktionsumgebungen deaktivieren.
```

Füge tatsächliche Parameterwerte in die Abfrageverfolgung ein (z. B. „SELECT \* FROM users WHERE id = 123” anstelle von „SELECT \* FROM users WHERE id = ?”). Vorteile: Du siehst die genauen Werte, die langsame Abfragen verursachen, und kannst problematische Datenmuster identifizieren. Sicherheits- und Datenschutzhinweis: Es können sensible Benutzerdaten in Sentry offengelegt werden. Passwörter und Hashes (32+ Hexadezimalzeichen) werden automatisch maskiert. Lange Zeichenfolgen (100+ Zeichen) werden gekürzt. Überprüfe deine Datenschutzrichtlinie, bevor du diese Funktion aktivierst. Empfehlung: Nur in der Staging-/Entwicklungsumgebung aktivieren, in <del>der Produktionsumgebung</del><ins>Produktionsumgebungen</ins> deaktivieren.

#### [`fof-sentry.admin.settings.javascript_console_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/de/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_console_help%22)

> Record console.log, console.info, console.warn, and console.error calls as breadcrumbs. See the sequence of events leading to an error and debug complex user interactions. Note: Increases data volume. Use selectively in production.

```diff
-Zeichne Aufrufe von console.log, console.info, console.warn und console.error als Breadcrumbs auf. Sieh dir die Abfolge der Ereignisse an, die zu einem Fehler geführt haben, und debugge komplexe Benutzerinteraktionen. Hinweis: Erhöht das Datenvolumen. Verwende diese Funktion in der Produktion nur selektiv.
+Zeichne Aufrufe von console.log, console.info, console.warn und console.error als Breadcrumbs auf. Sieh dir die Abfolge der Ereignisse an, die zu einem Fehler geführt haben, und debugge komplexe Benutzerinteraktionen. Hinweis: Erhöht das Datenvolumen. Verwende diese Funktion in Produktionsumgebungen nur selektiv.
```

Zeichne Aufrufe von console.log, console.info, console.warn und console.error als Breadcrumbs auf. Sieh dir die Abfolge der Ereignisse an, die zu einem Fehler geführt haben, und debugge komplexe Benutzerinteraktionen. Hinweis: Erhöht das Datenvolumen. Verwende diese Funktion in <del>der Produktion</del><ins>Produktionsumgebungen</ins> nur selektiv.


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

<!-- {% endraw %} -->
