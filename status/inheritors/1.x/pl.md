# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **15** are translated differently and **27** are
translated only in `pl`. Altogether they cover **3** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `fof-polls` | [1](#fof-polls) | [27](#fof-polls-missing) |
| `fof-rich-text` | [2](#fof-rich-text) | 0 |
| `fof-username-request` | [12](#fof-username-request) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-polls`

#### [`fof-polls.forum.modal.poll_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.help%22)

> Upload an image to be displayed alongside the poll (optional).

```diff
-Prześlij obrazek, który będzie wyświetlany obok odpowiedzi w ankiecie (opcjonalnie).
+Prześlij obrazek, który będzie wyświetlany obok ankiety (opcjonalnie).
```

Prześlij obrazek, który będzie wyświetlany obok <del>odpowiedzi w ankiecie</del><ins>ankiety</ins> (opcjonalnie).


### `fof-rich-text`

#### [`fof-rich-text.admin.settings.toggle_on_editor`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pl/?q=context%3A%3D%22fof-rich-text.admin.settings.toggle_on_editor%22)

> Show rich text mode toggle on editor?

```diff
-Pokazać przełącznik trybu edytora wizualnego?
+Wyświetlaj przełącznik trybu edytora wizualnego
```

<del>Pokazać</del><ins>Wyświetlaj</ins> przełącznik trybu edytora <del>wizualnego?</del><ins>wizualnego</ins>

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pl/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
-Nie oddzielaj akapitów nową linią.
+Nie oddzielaj akapitów pustą linią
```

Nie oddzielaj akapitów <del>nową</del><ins>pustą</ins> <del>linią.</del><ins>linią</ins>


### `fof-username-request`

#### [`fof-username-request.admin.permissions.moderate_requests`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.admin.permissions.moderate_requests%22)

> Approve username/nickname change requests

```diff
-Zatwierdzanie zmiany nazwy użytkownika lub pseudonimu
+Zatwierdzanie próśb o zmianę nazwy użytkownika lub pseudonimu
```

Zatwierdzanie <del>zmiany</del><ins>próśb o zmianę</ins> nazwy użytkownika lub pseudonimu

#### [`fof-username-request.admin.permissions.request_nickname`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.admin.permissions.request_nickname%22)

> Request nickname change

```diff
-Proszenie o zmianę pseudonimu
+Wysyłanie próśb o zmianę pseudonimu
```

<del>Proszenie</del><ins>Wysyłanie próśb</ins> o zmianę pseudonimu

#### [`fof-username-request.admin.permissions.request_username`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.admin.permissions.request_username%22)

> Request username change

```diff
-Proszenie o zmianę nazwy użytkownika
+Wysyłanie próśb o zmianę nazwy użytkownika
```

<del>Proszenie</del><ins>Wysyłanie próśb</ins> o zmianę nazwy użytkownika

#### [`fof-username-request.forum.nickname_modals.action.name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.name%22)

> {name} has requested to change their nickname to "{requestedName}"

```diff
-{name} poprosił o zmianę pseudonimu na "{requestedName}"
+{name} poprosił o zmianę pseudonimu na „{requestedName}”
```

{name} poprosił o zmianę pseudonimu na <del>"{requestedName}"</del><ins>„{requestedName}”</ins>

#### [`fof-username-request.forum.nickname_modals.request.current_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.current_request%22)

> You have already requested to change your nickname to "{name}". You can either update your request or delete it.

```diff
-Już poprosiłeś o zmianę pseudonimu na "{name}." Możesz edytować lub usunąć tę prośbę.
+Już poprosiłeś o zmianę pseudonimu na „{name}”. Możesz edytować lub usunąć tę prośbę.
```

Już poprosiłeś o zmianę pseudonimu na <del>"{name}."</del><ins>„{name}”.</ins> Możesz edytować lub usunąć tę prośbę.

#### [`fof-username-request.forum.nickname_modals.results.new_name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.new_name%22)

> Your nickname has been successfully changed to: {name}

```diff
-Twój pseudonim został zmieniony na: "{name}"
+Twój pseudonim został zmieniony na: „{name}”
```

Twój pseudonim został zmieniony na: <del>"{name}"</del><ins>„{name}”</ins>

#### [`fof-username-request.forum.nickname_modals.results.reason`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.reason%22)

> Reason for rejection: &lt;i&gt;"{reason}"&lt;/i&gt;.

```diff
-Powód odmowy: <i>"{reason}"</i>.
+Powód odmowy: <i>„{reason}”</i>.
```

Powód odmowy: <del>&lt;i&gt;"{reason}"&lt;/i&gt;.</del><ins>&lt;i&gt;„{reason}”&lt;/i&gt;.</ins>

#### [`fof-username-request.forum.username_modals.action.name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.name%22)

> {name} has requested to change their username to "{requestedName}"

```diff
-{name} poprosił o zmianę nazwy użytkownika na "{requestedName}"
+{name} poprosił o zmianę nazwy użytkownika na „{requestedName}”
```

{name} poprosił o zmianę nazwy użytkownika na <del>"{requestedName}"</del><ins>„{requestedName}”</ins>

#### [`fof-username-request.forum.username_modals.action.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.title%22)

> =&gt; fof-username-request.ref.username\_change\_request

```diff
-=> fof-username-request.ref.nickname_change_request
+=> fof-username-request.ref.username_change_request
```

=&gt; <del>fof-username-request.ref.nickname\_change\_request</del><ins>fof-username-request.ref.username\_change\_request</ins>

#### [`fof-username-request.forum.username_modals.request.current_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.current_request%22)

> You have already requested to change your username to "{name}". You can either update your request or delete it.

```diff
-Już poprosiłeś o zmianę nazwy użytkownika na "{name}." Możesz edytować lub usunąć tę prośbę.
+Już poprosiłeś o zmianę nazwy użytkownika na „{name}”. Możesz edytować lub usunąć tę prośbę.
```

Już poprosiłeś o zmianę nazwy użytkownika na <del>"{name}."</del><ins>„{name}”.</ins> Możesz edytować lub usunąć tę prośbę.

#### [`fof-username-request.forum.username_modals.results.new_name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.new_name%22)

> Your username has been successfully changed to: {name}

```diff
-Twoja nazwa użytkownika została zmieniona na: "{name}"
+Twoja nazwa użytkownika została zmieniona na: „{name}”
```

Twoja nazwa użytkownika została zmieniona na: <del>"{name}"</del><ins>„{name}”</ins>

#### [`fof-username-request.forum.username_modals.results.reason`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pl/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.reason%22)

> Reason for rejection: &lt;i&gt;"{reason}"&lt;/i&gt;.

```diff
-Powód odmowy: <i>"{reason}"</i>.
+Powód odmowy: <i>„{reason}”</i>.
```

Powód odmowy: <del>&lt;i&gt;"{reason}"&lt;/i&gt;.</del><ins>&lt;i&gt;„{reason}”&lt;/i&gt;.</ins>


## Missing translations

These strings are translated only in `pl`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `pl`.


### `fof-polls` (missing)

#### [`fof-polls.forum.compose.draft_saved`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.draft_saved%22)

> Draft saved

```diff
+Zapisano wersję roboczą
```

#### [`fof-polls.forum.compose.publish`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.publish%22)

> Publish

```diff
+Opublikuj
```

#### [`fof-polls.forum.compose.save_as_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.save_as_draft%22)

> Save as draft

```diff
+Zapisz jako wersję roboczą
```

#### [`fof-polls.forum.compose.schedule`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.schedule%22)

> Schedule

```diff
+Zaplanuj
```

#### [`fof-polls.forum.compose.schedule_datetime_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.schedule_datetime_label%22)

> Publish at

```diff
+Termin publikacji
```

#### [`fof-polls.forum.compose.schedule_publication`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication%22)

> Schedule publication

```diff
+Zaplanuj publikację
```

#### [`fof-polls.forum.compose.schedule_publication_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication_edit%22)

> Edit scheduled publication

```diff
+Edytuj zaplanowaną publikację
```

#### [`fof-polls.forum.compose.schedule_submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.schedule_submit%22)

> Schedule

```diff
+Zaplanuj
```

#### [`fof-polls.forum.compose.submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.submit%22)

> Submit

```diff
+Zatwierdź
```

#### [`fof-polls.forum.compose.update_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.compose.update_draft%22)

> Update draft

```diff
+Zaktualizuj wersję roboczą
```

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
+{count, plural, one {# odpowiedź jest pusta — uzupełnij ją lub usuń.} few {# odpowiedzi są puste — uzupełnij je lub usuń.} other {# odpowiedzi jest pustych — uzupełnij je lub usuń.}}
```

#### [`fof-polls.forum.poll.draft_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll.draft_label%22)

> Draft

```diff
+Wersja robocza
```

#### [`fof-polls.forum.poll.scheduled_error_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_error_tooltip%22)

> This scheduled publication failed. Open the poll to see why.

```diff
+Nie udało się opublikować ankiety w zaplanowanym terminie. Otwórz ankietę, aby sprawdzić przyczynę.
```

#### [`fof-polls.forum.poll.scheduled_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_label%22)

> Scheduled for {date}

```diff
+Zaplanowano na {date}
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_label%22)

> Cancel scheduled publication

```diff
+Anuluj zaplanowaną publikację
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_success%22)

> Scheduled publication cancelled.

```diff
+Anulowano zaplanowaną publikację.
```

#### [`fof-polls.forum.poll_controls.edit_schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.edit_schedule_publish_label%22)

> Edit scheduled publication

```diff
+Edytuj zaplanowaną publikację
```

#### [`fof-polls.forum.poll_controls.publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_label%22)

> Publish now

```diff
+Opublikuj teraz
```

#### [`fof-polls.forum.poll_controls.publish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_success%22)

> Poll published.

```diff
+Opublikowano ankietę.
```

#### [`fof-polls.forum.poll_controls.schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.schedule_publish_label%22)

> Schedule publication

```diff
+Zaplanuj publikację
```

#### [`fof-polls.forum.poll_controls.unpublish_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_confirmation%22)

> Move this poll back to draft? It will disappear from the showcase.

```diff
+Przenieść tę ankietę do wersji roboczych? Zniknie z listy prezentowanych ankiet.
```

#### [`fof-polls.forum.poll_controls.unpublish_error_has_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_error_has_votes%22)

> Cannot unpublish — the poll already has votes. Delete it instead.

```diff
+Nie można cofnąć publikacji — w ankiecie oddano już głosy. Zamiast tego usuń ją.
```

#### [`fof-polls.forum.poll_controls.unpublish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_label%22)

> Move back to draft

```diff
+Przenieś do wersji roboczych
```

#### [`fof-polls.forum.poll_controls.unpublish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_success%22)

> Poll moved to draft.

```diff
+Przeniesiono ankietę do wersji roboczych.
```

#### [`fof-polls.forum.polls_list.status_filter.all`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.all%22)

> All

```diff
+Wszystkie
```

#### [`fof-polls.forum.polls_list.status_filter.draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.draft%22)

> Drafts

```diff
+Wersje robocze
```

#### [`fof-polls.forum.polls_list.status_filter.published`](https://weblate.rob006.net/translate/flarum2/fof-polls/pl/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.published%22)

> Published

```diff
+Opublikowane
```

<!-- {% endraw %} -->
