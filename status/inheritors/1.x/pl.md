# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **0** are
translated only in `pl`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `acpl-lscache` | [2](#acpl-lscache) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-lscache`

#### [`acpl-lscache.lib.purge_all_success`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/pl/?q=context%3A%3D%22acpl-lscache.lib.purge_all_success%22)

> Notified LiteSpeed Server to purge all LSCache entries.

```diff
-Wyczyszczono cały cache pomyślnie.
+Wysłano do serwera LiteSpeed polecenie wyczyszczenia wszystkich wpisów w LSCache.
```

#### [`acpl-lscache.lib.purge_success`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/pl/?q=context%3A%3D%22acpl-lscache.lib.purge_success%22)

> Notified LiteSpeed Server to purge LSCache entries.

```diff
-Wyczyszczono cache pomyślnie.
+Wysłano do serwera LiteSpeed polecenie wyczyszczenia wpisów w LSCache.
```

<!-- {% endraw %} -->
