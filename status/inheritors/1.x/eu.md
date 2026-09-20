# Basque inherited translations differences

Translations for Basque (`eu`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **3** are
translated only in `eu`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `flarum-suspend` | [2](#flarum-suspend-missing) |
| `flarum-tags` | [1](#flarum-tags-missing) |


## Missing translations

These strings are translated only in `eu`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `eu`.


### `flarum-suspend` (missing)

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/eu/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
+{username} suspenditu dizu {timeReadable}
```

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/eu/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
+{username} desuspenditu dizu
```


### `flarum-tags` (missing)

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/eu/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
+=> flarum-tags.ref.create_tag
```

<!-- {% endraw %} -->
