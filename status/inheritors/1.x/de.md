# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **0** are
translated only in `de`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [2](#core) |


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

<!-- {% endraw %} -->
