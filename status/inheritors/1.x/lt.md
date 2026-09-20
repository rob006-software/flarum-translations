# Lithuanian inherited translations differences

Translations for Lithuanian (`lt`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **2** are
translated only in `lt`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `flarum-suspend` | [2](#flarum-suspend-missing) |


## Missing translations

These strings are translated only in `lt`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `lt`.


### `flarum-suspend` (missing)

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/lt/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
+{username} užblokavo jus už {timeReadable}
```

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/lt/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
+{username} atblokavo jus
```

<!-- {% endraw %} -->
