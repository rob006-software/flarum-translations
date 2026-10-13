# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **28** are translated differently and **55** are
translated only in `de`. Altogether they cover **7** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [3](#core) | 0 |
| `ffans-link-guard` | 0 | [19](#ffans-link-guard-missing) |
| `flarum-pusher` | [1](#flarum-pusher) | 0 |
| `fof-polls` | [21](#fof-polls) | 0 |
| `fof-sentry` | [2](#fof-sentry) | 0 |
| `forumfortress-flarum` | [1](#forumfortress-flarum) | 0 |
| `huoxin-filter-rule-manager` | 0 | [36](#huoxin-filter-rule-manager-missing) |


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


### `forumfortress-flarum`

#### [`forumfortress-flarum.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_key_help%22)

> The current key is never displayed. Leave blank to keep it, or enter a replacement. An anonymous site receives a key automatically during bootstrap. Use Disconnect and remove site to revoke the remote credential.

```diff
-Lasse das Feld leer, um eine anonyme Website zu erstellen und automatisch einen stabilen Schlüssel zu erhalten.
+Der aktuelle Schlüssel wird niemals angezeigt. Lasse das Feld leer, um ihn beizubehalten, oder gib einen neuen Schlüssel ein. Eine anonyme Site erhält während des Bootstrap-Vorgangs automatisch einen Schlüssel. Verwende „Verbindung trennen und Seite entfernen“, um die Remote-Anmeldeinformationen zu widerrufen.
```

<ins>Der aktuelle Schlüssel wird niemals angezeigt. </ins>Lasse das Feld leer, um <del>eine</del><ins>ihn beizubehalten, oder gib einen neuen Schlüssel ein. Eine</ins> anonyme <del>Website</del><ins>Site</ins> <del>zu</del><ins>erhält</ins> <del>erstellen</del><ins>während</ins> <del>und</del><ins>des Bootstrap-Vorgangs</ins> automatisch einen <del>stabilen</del><ins>Schlüssel.</ins> <del>Schlüssel</del><ins>Verwende „Verbindung trennen und Seite entfernen“, um die Remote-Anmeldeinformationen</ins> zu <del>erhalten.</del><ins>widerrufen.</ins>


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


### `huoxin-filter-rule-manager` (missing)

#### [`huoxin-filter-rule-manager.admin.active`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.active%22)

> Active

```diff
+Aktiv
```

#### [`huoxin-filter-rule-manager.admin.add_ruleset`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.add_ruleset%22)

> Add ruleset

```diff
+Regelsatz hinzufügen
```

#### [`huoxin-filter-rule-manager.admin.cancel`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.cancel%22)

> Cancel

```diff
+Abbrechen
```

#### [`huoxin-filter-rule-manager.admin.delete`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.delete%22)

> Delete

```diff
+Löschen
```

#### [`huoxin-filter-rule-manager.admin.delete_success`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.delete_success%22)

> Ruleset deleted.

```diff
+Regelsatz gelöscht.
```

#### [`huoxin-filter-rule-manager.admin.displays.sidebar`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.displays.sidebar%22)

> Sidebar

```diff
+Seitenleiste
```

#### [`huoxin-filter-rule-manager.admin.edit`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.edit%22)

> Edit

```diff
+Bearbeiten
```

#### [`huoxin-filter-rule-manager.admin.edit_ruleset`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.edit_ruleset%22)

> Edit ruleset

```diff
+Regelsatz bearbeiten
```

#### [`huoxin-filter-rule-manager.admin.export`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.export%22)

> Export

```diff
+Exportieren
```

#### [`huoxin-filter-rule-manager.admin.export_all`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.export_all%22)

> Export All

```diff
+Alle exportieren
```

#### [`huoxin-filter-rule-manager.admin.headers.active`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.headers.active%22)

> Active

```diff
+Aktiv
```

#### [`huoxin-filter-rule-manager.admin.headers.name`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.headers.name%22)

> Name

```diff
+Name
```

#### [`huoxin-filter-rule-manager.admin.headers.order`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.headers.order%22)

> Order

```diff
+Reihenfolge
```

#### [`huoxin-filter-rule-manager.admin.headers.status`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.headers.status%22)

> Status

```diff
+Status
```

#### [`huoxin-filter-rule-manager.admin.import`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.import%22)

> Import

```diff
+Importieren
```

#### [`huoxin-filter-rule-manager.admin.import_rulesets`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.import_rulesets%22)

> Import Rulesets

```diff
+Regelsatz importieren
```

#### [`huoxin-filter-rule-manager.admin.inactive`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.inactive%22)

> Inactive

```diff
+Inaktiv
```

#### [`huoxin-filter-rule-manager.admin.interventions.warning`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.interventions.warning%22)

> Warning

```diff
+Warnung
```

#### [`huoxin-filter-rule-manager.admin.move_down`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.move_down%22)

> Move down

```diff
+Nach unten
```

#### [`huoxin-filter-rule-manager.admin.move_up`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.move_up%22)

> Move up

```diff
+Nach oben
```

#### [`huoxin-filter-rule-manager.admin.post_contexts.all`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.post_contexts.all%22)

> All Posts

```diff
+Alle Beiträge
```

#### [`huoxin-filter-rule-manager.admin.registry_tabs.modes`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.registry_tabs.modes%22)

> Display Modes

```diff
+Darstellungsmodi
```

#### [`huoxin-filter-rule-manager.admin.rule_builder.add_rule`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.rule_builder.add_rule%22)

> Add Rule

```diff
+Regel hinzufügen
```

#### [`huoxin-filter-rule-manager.admin.rule_builder.and`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.rule_builder.and%22)

> AND

```diff
+AND
```

#### [`huoxin-filter-rule-manager.admin.rule_builder.delete_rule`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.rule_builder.delete_rule%22)

> Delete Rule

```diff
+Regel löschen
```

#### [`huoxin-filter-rule-manager.admin.rule_builder.not`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.rule_builder.not%22)

> NOT

```diff
+NOT
```

#### [`huoxin-filter-rule-manager.admin.rule_builder.or`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.rule_builder.or%22)

> OR

```diff
+OR
```

#### [`huoxin-filter-rule-manager.admin.save`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.save%22)

> Save

```diff
+Speichern
```

#### [`huoxin-filter-rule-manager.admin.save_success`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.save_success%22)

> Ruleset saved.

```diff
+Regelsatz gespeichert.
```

#### [`huoxin-filter-rule-manager.admin.scope_filters.all`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.scope_filters.all%22)

> All

```diff
+Alle
```

#### [`huoxin-filter-rule-manager.admin.scopes.global`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.scopes.global%22)

> All posts

```diff
+Alle Beiträge
```

#### [`huoxin-filter-rule-manager.admin.section_general`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.section_general%22)

> General

```diff
+Allgemein
```

#### [`huoxin-filter-rule-manager.admin.section_rules`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.section_rules%22)

> Rules

```diff
+Regeln
```

#### [`huoxin-filter-rule-manager.admin.tabs.rulesets`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.tabs.rulesets%22)

> Rulesets

```diff
+Regelsätze
```

#### [`huoxin-filter-rule-manager.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.tabs.settings%22)

> Settings

```diff
+Einstellungen
```

#### [`huoxin-filter-rule-manager.admin.unsaved_changes_title`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/de/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.unsaved_changes_title%22)

> Unsaved Changes

```diff
+Ungespeicherte Änderungen
```

<!-- {% endraw %} -->
