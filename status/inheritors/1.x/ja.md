# Japanese inherited translations differences

Translations for Japanese (`ja`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **1** are translated differently and **0** are
translated only in `ja`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `fof-html-errors` | [1](#fof-html-errors) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `ja` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-html-errors`

#### [`fof-html-errors.admin.settings.error.503`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/ja/?q=context%3A%3D%22fof-html-errors.admin.settings.error.503%22)

> 503 Service Unavailable (Down For Maintenance)

```diff
-503 サービスが利用できない（またはオフラインメンテナンス）
+503 一時的にサービスを利用できません（またはメンテナンス中）
```

503 <del>サービスが利用できない（またはオフラインメンテナンス）</del><ins>一時的にサービスを利用できません（またはメンテナンス中）</ins>

<!-- {% endraw %} -->
