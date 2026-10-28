# Sinhala inherited translations differences

Translations for Sinhala (`si`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **4** are translated differently and **0** are
translated only in `si`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [3](#core) |
| `fof-discussion-language` | [1](#fof-discussion-language) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `si` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/si/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-සාකච්ඡාවලට පිළිතුරු  දෙන්න
+සාකච්ඡාවලට පිළිතුරු දෙන්න
```

සාකච්ඡාවලට පිළිතුරු<del>  </del><ins> </ins>දෙන්න

#### [`core.forum.notifications.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/si/?q=context%3A%3D%22core.forum.notifications.discussion_renamed_text%22)

> {username} changed the title

```diff
-{username} මාතෘකාව වෙනස් කළා.
+{username} මාතෘකාව වෙනස් කළා
```

{username} මාතෘකාව වෙනස් <del>කළා.</del><ins>කළා</ins>

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/si/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} මාතෘකාව {new} ට වෙනස් කළා.
+{username} මාතෘකාව {new} {time} ට වෙනස් කළා
```

{username} මාතෘකාව {new} <ins>{time} </ins>ට වෙනස් <del>කළා.</del><ins>කළා</ins>


### `fof-discussion-language`

#### [`fof-discussion-language.admin.settings.show_any_lang_opt_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-language/si/?q=context%3A%3D%22fof-discussion-language.admin.settings.show_any_lang_opt_label%22)

> Show the option to select "Any Language"

```diff
-"ඕනෑම භාෂාවක්" තේරීමේ විකල්පය පෙන්වන්න.
+"ඕනෑම භාෂාවක්" තේරීමේ විකල්පය පෙන්වන්න
```

"ඕනෑම භාෂාවක්" තේරීමේ විකල්පය <del>පෙන්වන්න.</del><ins>පෙන්වන්න</ins>

<!-- {% endraw %} -->
