# Hungarian inherited translations differences

Translations for Hungarian (`hu`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **0** are
translated only in `hu`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [1](#core) |
| `fof-polls` | [2](#fof-polls) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `hu` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.forum.post_scrubber.viewing_text`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.forum.post_scrubber.viewing_text%22)

> {count, plural, one {{index} of {formattedCount} post} other {{index} of {formattedCount} posts}}

```diff
-{index}. / {formattedCount} bejegyzés
+{index}. bejegyzés / {formattedCount}
```

{index}. <ins>bejegyzés </ins>/ {formattedCount}<del> bejegyzés</del>


### `fof-polls`

#### [`fof-polls.forum.max_votes_allowed`](https://weblate.rob006.net/translate/flarum2/fof-polls/hu/?q=context%3A%3D%22fof-polls.forum.max_votes_allowed%22)

> Poll allows voting for {max, plural, one {# option} other {# options}}.

```diff
-A szavazásban legfeljebb {max} lehetőség választható.
+A szavazásban legfeljebb {max, plural, one {# lehetőség} other {# lehetőség}} választható.
```

A szavazásban legfeljebb <del>{max}</del><ins>{max,</ins> <del>lehetőség</del><ins>plural, one {# lehetőség} other {# lehetőség}}</ins> választható.

#### [`fof-polls.forum.tooltip.votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/hu/?q=context%3A%3D%22fof-polls.forum.tooltip.votes%22)

> {count, plural, one {# vote} other {# votes}}

```diff
-{count} szavazat
+{count, plural, one {# szavazat} other {# szavazat}}
```

<!-- {% endraw %} -->
