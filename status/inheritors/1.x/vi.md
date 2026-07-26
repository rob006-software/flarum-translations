# Vietnamese inherited translations differences

Translations for Vietnamese (`vi`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **0** are
translated only in `vi`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `fof-forum-stats-widget` | [3](#fof-forum-stats-widget) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `vi` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-forum-stats-widget`

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/vi/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
-Số chữ số thập phân hiển thị cho các số lớn (0-2).
+Số lượng chữ số thập phân hiển thị cho các số lớn (0-2).
```

Số <ins>lượng </ins>chữ số thập phân hiển thị cho các số lớn (0-2).

#### [`fof-forum-stats-widget.admin.settings.decimal_places.label`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/vi/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.label%22)

> Decimal Places

```diff
-Số chữ số thập phân
+Chữ số thập phân
```

<del>Số chữ</del><ins>Chữ</ins> số thập phân

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/vi/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
-Bài viết
+Bài đăng
```

Bài <del>viết</del><ins>đăng</ins>

<!-- {% endraw %} -->
