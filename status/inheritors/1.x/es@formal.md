# Spanish (formal) inherited translations differences

Translations for Spanish (formal) (`es@formal`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **0** are
translated only in `es@formal`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `fof-polls` | [3](#fof-polls) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `es@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-polls`

#### [`fof-polls.forum.days_remaining`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.days_remaining%22)

> Poll ends {time}.

```diff
-La encuesta termina en {time}.
+La encuesta termina {time}.
```

La encuesta termina <del>en </del>{time}.

#### [`fof-polls.forum.max_votes_allowed`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.max_votes_allowed%22)

> Poll allows voting for {max, plural, one {# option} other {# options}}.

```diff
-La encuesta permite votar por {max, plural, one {# option} other {# options}}.
+La encuesta permite votar por {max, plural, one {# opción} other {# opciones}}.
```

La encuesta permite votar por {max, plural, one {# <del>option}</del><ins>opción}</ins> other {# <del>options}}.</del><ins>opciones}}.</ins>

#### [`fof-polls.forum.polls_count`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.polls_count%22)

> {count, plural, one { {count} vote} other {{count} votes}}

```diff
-{count, plural, one { {count} vote} other {{count} votes}}
+{count, plural, one {# voto} other {# votos}}
```

{count, plural, one <del>{ {count}</del><ins>{#</ins> <del>vote}</del><ins>voto}</ins> other <del>{{count}</del><ins>{#</ins> <del>votes}}</del><ins>votos}}</ins>

<!-- {% endraw %} -->
