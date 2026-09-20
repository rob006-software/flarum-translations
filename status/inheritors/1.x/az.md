# Azerbaijani inherited translations differences

Translations for Azerbaijani (`az`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **4** are
translated only in `az`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `core` | [2](#core-missing) |
| `flarum-suspend` | [2](#flarum-suspend-missing) |


## Missing translations

These strings are translated only in `az`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `az`.


### `core` (missing)

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/az/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Həftəlik yoxlama zamanı yeni tərk edilmiş genişləndirmə aşkar edildikdə adminlərə e-poçt göndərin
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/az/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Tədbir tələb olunur: tərk edilmiş genişləndirmə(lər) aşkar edildi
```


### `flarum-suspend` (missing)

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/az/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
+{username} sizi {timeReadable} müddətinə dondurdu
```

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/az/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
+{username} sizi dondurdu
```

<!-- {% endraw %} -->
