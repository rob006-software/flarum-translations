# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **0** are
translated only in `pl`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [1](#core) |
| `flarum-akismet` | [1](#flarum-akismet) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.forum.change_password.send_button`](https://weblate.rob006.net/translate/flarum2/core/pl/?q=context%3A%3D%22core.forum.change_password.send_button%22)

> Send Password Reset Email

```diff
-Wyślij e-mail resetujący hasło
+Wyślij link do zmiany hasła
```

Wyślij <del>e-mail</del><ins>link</ins> <del>resetujący</del><ins>do</ins> <del>hasło</del><ins>zmiany hasła</ins>


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/pl/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-API Key
+Klucz API
```

<!-- {% endraw %} -->
