# Chinese (Traditional) inherited translations differences

Translations for Chinese (Traditional) (`zh_Hant`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **0** are
translated only in `zh_Hant`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [3](#core) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `zh_Hant` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
-網路連接已恢復。
+網路連線已恢復。
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
-網路連線異常，請檢查網路連線後再試。
+網路連線異常，請檢查網路後重試。
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
-您目前似乎未連線至網路，請檢查網路連線後再試。
+目前似乎處於離線狀態，請檢查網路連線後重試。
```

<!-- {% endraw %} -->
