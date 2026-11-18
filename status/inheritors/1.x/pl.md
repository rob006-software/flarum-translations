# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **0** are
translated only in `pl`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `flarum-nicknames` | [1](#flarum-nicknames) |
| `huseyinfiliz-diff` | [1](#huseyinfiliz-diff) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `flarum-nicknames`

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pl/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-Musisz wybrać „nickname” jako sterownik, który powinien być używany do wyświetlania nazw użytkowników, na stronie <a><strong>podstawowych ustawień</strong></a>, aby to rozszerzenie zadziałało.
+Musisz wybrać „Pseudonim” jako sterownik, który powinien być używany do wyświetlania nazw użytkowników, na stronie <a><strong>podstawowych ustawień</strong></a>, aby to rozszerzenie zadziałało.
```

Musisz wybrać <del>„nickname”</del><ins>„Pseudonim”</ins> jako sterownik, który powinien być używany do wyświetlania nazw użytkowników, na stronie &lt;a&gt;&lt;strong&gt;podstawowych ustawień&lt;/strong&gt;&lt;/a&gt;, aby to rozszerzenie zadziałało.


### `huseyinfiliz-diff`

#### [`huseyinfiliz-diff.admin.settings.archiveOldsInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/pl/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveOldsInfo%22)

> If &lt;strong&gt;x ≥ A&lt;/strong&gt;, first &lt;strong&gt;y=mx+b&lt;/strong&gt; revisions for the post will be stored as merged &amp; compressed. The &lt;strong&gt;x&lt;/strong&gt; refers to post's revision count. Float values of &lt;strong&gt;y&lt;/strong&gt; will be rounded to the next lowest integer value.

```diff
-Jeśli <strong>x ≥ A</strong>, pierwsze <strong>y=mx+b</strong> rewizji posta zostanie zapisanych jako scalone i skompresowane. <strong>x</strong> oznacza liczbę rewizji posta. Wartości zmiennoprzecinkowe <strong>y</strong> są zaokrąglane w dół do najbliższej liczby całkowitej.
+Jeśli <strong>x ≥ A</strong>, pierwszych <strong>y=mx+b</strong> rewizji posta zostanie zapisanych w postaci scalonej i skompresowanej. <strong>x</strong> oznacza liczbę rewizji posta. Wartości zmiennoprzecinkowe <strong>y</strong> są zaokrąglane w dół do najbliższej liczby całkowitej.
```

Jeśli &lt;strong&gt;x ≥ A&lt;/strong&gt;, <del>pierwsze</del><ins>pierwszych</ins> &lt;strong&gt;y=mx+b&lt;/strong&gt; rewizji posta zostanie zapisanych <del>jako</del><ins>w</ins> <del>scalone</del><ins>postaci scalonej</ins> i <del>skompresowane.</del><ins>skompresowanej.</ins> &lt;strong&gt;x&lt;/strong&gt; oznacza liczbę rewizji posta. Wartości zmiennoprzecinkowe &lt;strong&gt;y&lt;/strong&gt; są zaokrąglane w dół do najbliższej liczby całkowitej.

<!-- {% endraw %} -->
