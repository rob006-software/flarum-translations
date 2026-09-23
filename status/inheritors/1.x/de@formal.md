# German (formal) inherited translations differences

Translations for German (formal) (`de@formal`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **0** are
translated only in `de@formal`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `ralkage-hcaptcha` | [3](#ralkage-hcaptcha) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `ralkage-hcaptcha`

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
-Verwende das dunklen Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.
+Verwende das dunkle Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.
```

Verwende das <del>dunklen</del><ins>dunkle</ins> Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.

#### [`ralkage-hcaptcha.admin.settings.dark_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_label%22)

> Dark Mode

```diff
-Dunkles Design
+Dunkler Modus
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
-Bei der Anmeldung von Benutzern hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.
+Bei der Anmeldung der Benutzer hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.
```

Bei der Anmeldung <del>von</del><ins>der</ins> <del>Benutzern</del><ins>Benutzer</ins> hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.

<!-- {% endraw %} -->
