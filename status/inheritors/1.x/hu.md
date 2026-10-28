# Hungarian inherited translations differences

Translations for Hungarian (`hu`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **3** are
translated only in `hu`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `fof-usercard-stats` | [2](#fof-usercard-stats-missing) |
| `ralkage-word-counter` | [1](#ralkage-word-counter-missing) |


## Missing translations

These strings are translated only in `hu`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `hu`.


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/hu/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+{count, plural, one { {count} téma} other {{count} téma}}
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/hu/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+{count, plural, one { {count} bejegyzés} other {{count} bejegyzés}}
```


### `ralkage-word-counter` (missing)

#### [`ralkage-word-counter.forum.composer.word_counter`](https://weblate.rob006.net/translate/flarum2/ralkage-word-counter/hu/?q=context%3A%3D%22ralkage-word-counter.forum.composer.word_counter%22)

> {words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}

```diff
+{words, plural, one {{words} szó} other {{words} szó}}, {chars, plural, one {{chars} karakter} other {{chars} karakter}}
```

<!-- {% endraw %} -->
