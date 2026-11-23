# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **1** are translated differently and **0** are
translated only in `pl`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `flarum-nicknames` | [1](#flarum-nicknames) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `flarum-nicknames`

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pl/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-Aby to rozszerzenie działało, wybierz „nickname” w ustawieniu „Wyświetlana nazwa użytkownika” na stronie <a><strong>podstawowych ustawień</strong></a>.
+Aby to rozszerzenie działało, wybierz „Pseudonim” w ustawieniu „Wyświetlana nazwa użytkownika” na stronie <a><strong>podstawowych ustawień</strong></a>.
```

Aby to rozszerzenie działało, wybierz <del>„nickname”</del><ins>„Pseudonim”</ins> w ustawieniu „Wyświetlana nazwa użytkownika” na stronie &lt;a&gt;&lt;strong&gt;podstawowych ustawień&lt;/strong&gt;&lt;/a&gt;.

<!-- {% endraw %} -->
