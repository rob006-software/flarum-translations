# French inherited translations differences

Translations for French (`fr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **0** are
translated only in `fr`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `fof-categories` | [1](#fof-categories) |
| `huseyinfiliz-notificationhub` | [1](#huseyinfiliz-notificationhub) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `fr` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-categories`

#### [`fof-categories.ref.categories`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.ref.categories%22)

> Categories

```diff
-Categories
+Catégories
```


### `huseyinfiliz-notificationhub`

#### [`huseyinfiliz-notificationhub.admin.settings.no_data`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.no_data%22)

> No notification types yet.

```diff
-Il n'y a pas encore de type de notification.
+Aucun type de notification pour le moment.
```

<del>Il n'y a pas</del><ins>Aucun</ins> <del>encore</del><ins>type</ins> de <del>type</del><ins>notification</ins> <del>de</del><ins>pour</ins> <del>notification.</del><ins>le moment.</ins>

<!-- {% endraw %} -->
