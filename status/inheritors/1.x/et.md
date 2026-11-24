# Estonian inherited translations differences

Translations for Estonian (`et`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **13** are
translated only in `et`. Altogether they cover **16** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `el-choco-admin-console` | 0 | [1](#el-choco-admin-console-missing) |
| `fof-badges` | 0 | [1](#fof-badges-missing) |
| `fof-sentry` | 0 | [1](#fof-sentry-missing) |
| `huseyinfiliz-sticky-title` | 0 | [1](#huseyinfiliz-sticky-title-missing) |
| `michaelbelgium-ai-autoreply` | 0 | [1](#michaelbelgium-ai-autoreply-missing) |
| `pianotell-flamoji` | 0 | [1](#pianotell-flamoji-missing) |
| `prm-forum-activity` | 0 | [1](#prm-forum-activity-missing) |
| `prm-hero-image` | [1](#prm-hero-image) | 0 |
| `quasimo-tag-sidebar` | 0 | [1](#quasimo-tag-sidebar-missing) |
| `ralkage-ad-management` | 0 | [1](#ralkage-ad-management-missing) |
| `ralkage-cap-captcha` | 0 | [1](#ralkage-cap-captcha-missing) |
| `ralkage-linked-accounts` | 0 | [1](#ralkage-linked-accounts-missing) |
| `resofire-blog-cards` | 0 | [1](#resofire-blog-cards-missing) |
| `resofire-menu-control` | [1](#resofire-menu-control) | 0 |
| `tapao-auto-ai-moderation` | 0 | [1](#tapao-auto-ai-moderation-missing) |
| `tapao-custom-landing-page` | [1](#tapao-custom-landing-page) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `et` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `prm-hero-image`

#### [`prm-hero-image.admin.title`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/et/?q=context%3A%3D%22prm-hero-image.admin.title%22)

> Homepage image

```diff
-Avalehe pilt
+Avalehe pildid
```

Avalehe <del>pilt</del><ins>pildid</ins>


### `resofire-menu-control`

#### [`resofire-menu-control.admin.nav_order.title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/et/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.title%22)

> Menu Item Order

```diff
-Menüükirjete järjekord
+Menüülinkide järjekord
```

<del>Menüükirjete</del><ins>Menüülinkide</ins> järjekord


### `tapao-custom-landing-page`

#### [`tapao-custom-landing-page.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/et/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.enabled_label%22)

> Enable Custom Landing Page

```diff
-Lülita kohandatud avaleht sisse
+Lülita sisse kohandatud avaleht
```

Lülita <ins>sisse </ins>kohandatud avaleht<del> sisse</del>


## Missing translations

These strings are translated only in `et`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `et`.


### `el-choco-admin-console` (missing)

#### [`el-choco-admin-console.admin.title`](https://weblate.rob006.net/translate/flarum2/el-choco-admin-console/et/?q=context%3A%3D%22el-choco-admin-console.admin.title%22)

> Admin Console

```diff
+Adminikonsool
```


### `fof-badges` (missing)

#### [`fof-badges.defaults.categories.getting-started.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/et/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.name%22)

> Getting Started

```diff
+Alustamine
```


### `fof-sentry` (missing)

#### [`fof-sentry.admin.sentry_settings`](https://weblate.rob006.net/translate/flarum2/fof-sentry/et/?q=context%3A%3D%22fof-sentry.admin.sentry_settings%22)

> Sentry Settings

```diff
+Sentry seaded
```


### `huseyinfiliz-sticky-title` (missing)

#### [`huseyinfiliz-sticky-title.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/et/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.title%22)

> Sticky Title Settings

```diff
+Kleepuva pealkirja seaded
```


### `michaelbelgium-ai-autoreply` (missing)

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/et/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_label%22)

> Platform

```diff
+Platform
```


### `pianotell-flamoji` (missing)

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
+Emoji seaded
```


### `prm-forum-activity` (missing)

#### [`prm-forum-activity.admin.permissions.feature_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/et/?q=context%3A%3D%22prm-forum-activity.admin.permissions.feature_label%22)

> Feature discussions

```diff
+Tõsta vestlus esile
```


### `quasimo-tag-sidebar` (missing)

#### [`quasimo-tag-sidebar.forum.edit_button`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/et/?q=context%3A%3D%22quasimo-tag-sidebar.forum.edit_button%22)

> Edit Sidebar

```diff
+Muuda külgriba
```


### `ralkage-ad-management` (missing)

#### [`ralkage-ad-management.admin.nav.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/et/?q=context%3A%3D%22ralkage-ad-management.admin.nav.title%22)

> Ad Management

```diff
+Reklaamide haldamine
```


### `ralkage-cap-captcha` (missing)

#### [`ralkage-cap-captcha.admin.settings.api_endpoint_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/et/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.api_endpoint_label%22)

> Cap API Endpoint

```diff
+Cap API lõpppunktid
```


### `ralkage-linked-accounts` (missing)

#### [`ralkage-linked-accounts.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/et/?q=context%3A%3D%22ralkage-linked-accounts.admin.tabs.settings%22)

> Settings

```diff
+Seaded
```


### `resofire-blog-cards` (missing)

#### [`resofire_blog_cards.forum.replies`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/et/?q=context%3A%3D%22resofire_blog_cards.forum.replies%22)

> Replies: {count}

```diff
+Vastuseid: {count}
```


### `tapao-auto-ai-moderation` (missing)

#### [`tapao-moderationai.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/et/?q=context%3A%3D%22tapao-moderationai.admin.settings.title%22)

> ModerationAI Settings

```diff
+ModerationAI seaded
```

<!-- {% endraw %} -->
