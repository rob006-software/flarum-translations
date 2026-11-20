# Ukrainian inherited translations differences

Translations for Ukrainian (`uk`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **354** are translated differently and **1300** are
translated only in `uk`. Altogether they cover **100** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | [6](#acpl-lscache) | 0 |
| `antoinefr-money` | [5](#antoinefr-money) | 0 |
| `asyntai-chatbot` | 0 | [6](#asyntai-chatbot-missing) |
| `clarkwinkelmann-likes-received` | [1](#clarkwinkelmann-likes-received) | 0 |
| `core` | [30](#core) | [11](#core-missing) |
| `datitisev-backup` | [19](#datitisev-backup) | 0 |
| `datlechin-bbcode-hide-content` | [2](#datlechin-bbcode-hide-content) | 0 |
| `datlechin-more-discussions` | [5](#datlechin-more-discussions) | 0 |
| `datlechin-passkey` | 0 | [83](#datlechin-passkey-missing) |
| `datlechin-tag-passwords` | [20](#datlechin-tag-passwords) | 0 |
| `datlechin-title-length` | [1](#datlechin-title-length) | 0 |
| `ekumanov-inline-audio` | 0 | [5](#ekumanov-inline-audio-missing) |
| `ekumanov-new-posts-notice` | 0 | [2](#ekumanov-new-posts-notice-missing) |
| `el-choco-admin-console` | 0 | [2](#el-choco-admin-console-missing) |
| `ernestdefoe-aurora` | 0 | [20](#ernestdefoe-aurora-missing) |
| `ffans-geetest` | 0 | [5](#ffans-geetest-missing) |
| `ffans-link-guard` | 0 | [19](#ffans-link-guard-missing) |
| `ffans-threadmarks` | 0 | [22](#ffans-threadmarks-missing) |
| `flarum-akismet` | [2](#flarum-akismet) | 0 |
| `flarum-approval` | [1](#flarum-approval) | 0 |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `flarum-flags` | [1](#flarum-flags) | 0 |
| `flarum-gdpr` | [11](#flarum-gdpr) | 0 |
| `flarum-likes` | [1](#flarum-likes) | 0 |
| `flarum-lock` | [4](#flarum-lock) | 0 |
| `flarum-mentions` | [2](#flarum-mentions) | 0 |
| `flarum-nicknames` | [1](#flarum-nicknames) | 0 |
| `flarum-pusher` | [1](#flarum-pusher) | 0 |
| `flarum-sticky` | [3](#flarum-sticky) | [1](#flarum-sticky-missing) |
| `flarum-subscriptions` | [5](#flarum-subscriptions) | 0 |
| `flarum-tags` | [12](#flarum-tags) | 0 |
| `flectar-turnstile` | [1](#flectar-turnstile) | 0 |
| `fof-amazon-affiliation` | [2](#fof-amazon-affiliation) | 0 |
| `fof-analytics` | [1](#fof-analytics) | 0 |
| `fof-anti-spam` | [9](#fof-anti-spam) | [2](#fof-anti-spam-missing) |
| `fof-author-change` | 0 | [16](#fof-author-change-missing) |
| `fof-badges` | 0 | [315](#fof-badges-missing) |
| `fof-ban-ips` | [2](#fof-ban-ips) | 0 |
| `fof-best-answer` | [6](#fof-best-answer) | [2](#fof-best-answer-missing) |
| `fof-blog` | [6](#fof-blog) | 0 |
| `fof-bookmarks` | 0 | [22](#fof-bookmarks-missing) |
| `fof-byobu` | [41](#fof-byobu) | 0 |
| `fof-categories` | [1](#fof-categories) | 0 |
| `fof-default-user-preferences` | [1](#fof-default-user-preferences) | 0 |
| `fof-discussion-language` | [5](#fof-discussion-language) | 0 |
| `fof-discussion-templates` | [7](#fof-discussion-templates) | 0 |
| `fof-discussion-views` | [2](#fof-discussion-views) | 0 |
| `fof-doorman` | [1](#fof-doorman) | 0 |
| `fof-drafts` | [2](#fof-drafts) | 0 |
| `fof-filter` | [1](#fof-filter) | 0 |
| `fof-first-post-approval` | 0 | [7](#fof-first-post-approval-missing) |
| `fof-follow-tags` | [6](#fof-follow-tags) | [17](#fof-follow-tags-missing) |
| `fof-forum-statistics-widget` | [2](#fof-forum-statistics-widget) | 0 |
| `fof-forum-stats-widget` | 0 | [6](#fof-forum-stats-widget-missing) |
| `fof-forum-widgets-core` | 0 | [3](#fof-forum-widgets-core-missing) |
| `fof-gamification` | [2](#fof-gamification) | 0 |
| `fof-geoip` | [2](#fof-geoip) | [19](#fof-geoip-missing) |
| `fof-html-errors` | [5](#fof-html-errors) | 0 |
| `fof-mailing` | 0 | [19](#fof-mailing-missing) |
| `fof-mark-unread` | 0 | [2](#fof-mark-unread-missing) |
| `fof-mason` | [6](#fof-mason) | 0 |
| `fof-masquerade` | 0 | [1](#fof-masquerade-missing) |
| `fof-merge-discussions` | [13](#fof-merge-discussions) | 0 |
| `fof-moderator-notes` | [2](#fof-moderator-notes) | 0 |
| `fof-moderator-warnings` | [18](#fof-moderator-warnings) | 0 |
| `fof-move-posts` | 0 | [29](#fof-move-posts-missing) |
| `fof-oauth` | [5](#fof-oauth) | [2](#fof-oauth-missing) |
| `fof-online-users-widget` | 0 | [6](#fof-online-users-widget-missing) |
| `fof-photoswipe` | 0 | [5](#fof-photoswipe-missing) |
| `fof-polls` | [4](#fof-polls) | [27](#fof-polls-missing) |
| `fof-pwa` | 0 | [40](#fof-pwa-missing) |
| `fof-reactions` | [3](#fof-reactions) | 0 |
| `fof-recaptcha` | [2](#fof-recaptcha) | 0 |
| `fof-rich-text` | [1](#fof-rich-text) | [4](#fof-rich-text-missing) |
| `fof-sentry` | [8](#fof-sentry) | [24](#fof-sentry-missing) |
| `fof-seo` | 0 | [195](#fof-seo-missing) |
| `fof-share-social` | [3](#fof-share-social) | 0 |
| `fof-signature` | 0 | [17](#fof-signature-missing) |
| `fof-sitemap` | [7](#fof-sitemap) | 0 |
| `fof-socialprofile` | [1](#fof-socialprofile) | 0 |
| `fof-split` | [4](#fof-split) | 0 |
| `fof-subscribed` | [6](#fof-subscribed) | 0 |
| `fof-synopsis` | [3](#fof-synopsis) | 0 |
| `fof-terms` | [1](#fof-terms) | 0 |
| `fof-top-posters-widget` | 0 | [2](#fof-top-posters-widget-missing) |
| `fof-upgrade-advisor` | 0 | [69](#fof-upgrade-advisor-missing) |
| `fof-upload` | [10](#fof-upload) | 0 |
| `fof-user-directory` | [7](#fof-user-directory) | 0 |
| `fof-usercard-stats` | 0 | [2](#fof-usercard-stats-missing) |
| `fof-webhooks` | [7](#fof-webhooks) | 0 |
| `prm-forum-activity` | 0 | [21](#prm-forum-activity-missing) |
| `prm-hero-image` | 0 | [14](#prm-hero-image-missing) |
| `prm-messages` | 0 | [34](#prm-messages-missing) |
| `prm-moderation` | 0 | [30](#prm-moderation-missing) |
| `prm-rank-banner` | 0 | [21](#prm-rank-banner-missing) |
| `prm-security` | 0 | [13](#prm-security-missing) |
| `prm-sleek-dark` | 0 | [11](#prm-sleek-dark-missing) |
| `prm-trade-feedback` | 0 | [6](#prm-trade-feedback-missing) |
| `tapao-auto-ai-moderation` | 0 | [28](#tapao-auto-ai-moderation-missing) |
| `yippy-tag-with-themes` | [5](#yippy-tag-with-themes) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `uk` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-lscache`

#### [`acpl-lscache.admin.cache_enabled_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/uk/?q=context%3A%3D%22acpl-lscache.admin.cache_enabled_help%22)

> Check out the &lt;a&gt;Information page&lt;/a&gt; on how to test the cache. NOTE: When disabling the cache, all cached entries for this site will be purged.

```diff
-Перевірте <a>Інформаційну сторінку</a> про те, як перевірити кеш. ПРИМІТКА: При відключенні кешу всі кешовані записи для цього сайту будуть видалені.
+Перевірте <a>Інформаційну сторінку</a> про те, як перевірити кеш. Примітка: При відключенні кешу всі кешовані записи для цього сайту будуть видалені.
```

Перевірте &lt;a&gt;Інформаційну сторінку&lt;/a&gt; про те, як перевірити кеш. <del>ПРИМІТКА:</del><ins>Примітка:</ins> При відключенні кешу всі кешовані записи для цього сайту будуть видалені.

#### [`acpl-lscache.admin.drop_qs_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/uk/?q=context%3A%3D%22acpl-lscache.admin.drop_qs_label%22)

> Drop Query Strings

```diff
-Випадання рядків запиту
+Ігнорувати параметри запиту
```

<del>Випадання</del><ins>Ігнорувати</ins> <del>рядків</del><ins>параметри</ins> запиту

#### [`acpl-lscache.admin.public_cache_ttl_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/uk/?q=context%3A%3D%22acpl-lscache.admin.public_cache_ttl_label%22)

> Default Public Cache TTL

```diff
-За налаштуванням публічний кеш TTL
+Типовий TTL публічного кешу
```

#### [`acpl-lscache.admin.purge_on_discussion_update_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/uk/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_help%22)

> Enter the URLs or cache Tags you want to purge when a discussion is updated, one per line. URL should start with &lt;code&gt;/&lt;/code&gt;, e.g. &lt;code&gt;/rankings&lt;/code&gt;, and cache Tag should start with &lt;code&gt;tag=&lt;/code&gt;, e.g. &lt;code&gt;tag=rankings&lt;/code&gt;. For multiple routes, adding a rule in .htaccess with a regular expression that tags routes and entering only this tag here is faster. &lt;a&gt;Learn more&lt;/a&gt;. By default, the cache for the homepage and updated discussions is purged.

```diff
-Введіть URL-адресу або кеш-теги, які ви хочете очистити при оновленні допису, по одному в рядку. URL має починатися з <code>/</code>, наприклад, <code>/rankings</code>, а тег кешу має починатися з <code>tag=</code>, наприклад, <code>tag=rankings</code>. Для декількох маршрутів, додавання правила в .htaccess з регулярним виразом, який тегує маршрути, і введення тільки цього тега тут буде швидшим. <a>Дізнатися більше</a>. За налаштуванням кеш для головної сторінки та оновлених обговорень очищується.
+Укажіть URL-адреси або теги кешу, які потрібно очищати під час оновлення обговорення, по одному в рядку. URL має починатися з <code>/</code>, наприклад <code>/rankings</code>, а тег кешу — з <code>tag=</code>, наприклад <code>tag=rankings</code>. Для кількох маршрутів швидше додати в .htaccess правило з регулярним виразом, яке позначає маршрути тегом, і вказати тут лише цей тег. <a>Докладніше</a>. Типово очищається кеш головної сторінки та оновлених обговорень.
```

<del>Введіть</del><ins>Укажіть</ins> <del>URL-адресу</del><ins>URL-адреси</ins> або <del>кеш-теги,</del><ins>теги кешу,</ins> які <del>ви</del><ins>потрібно</ins> <del>хочете</del><ins>очищати</ins> <del>очистити</del><ins>під</ins> <del>при</del><ins>час</ins> <del>оновленні</del><ins>оновлення</ins> <del>допису,</del><ins>обговорення,</ins> по одному в рядку. URL має починатися з &lt;code&gt;/&lt;/code&gt;, <del>наприклад,</del><ins>наприклад</ins> &lt;code&gt;/rankings&lt;/code&gt;, а тег кешу<del> має</del> <del>починатися</del><ins>—</ins> з &lt;code&gt;tag=&lt;/code&gt;, <del>наприклад,</del><ins>наприклад</ins> &lt;code&gt;tag=rankings&lt;/code&gt;. Для <del>декількох</del><ins>кількох</ins> <del>маршрутів,</del><ins>маршрутів</ins> <del>додавання</del><ins>швидше</ins> <del>правила</del><ins>додати</ins> в .htaccess<ins> правило</ins> з регулярним виразом,<del> який тегує</del> <del>маршрути,</del><ins>яке</ins> <del>і</del><ins>позначає</ins> <del>введення</del><ins>маршрути</ins> <del>тільки</del><ins>тегом,</ins> <del>цього</del><ins>і</ins> <del>тега</del><ins>вказати</ins> тут <del>буде</del><ins>лише</ins> <del>швидшим.</del><ins>цей</ins> <del>&lt;a&gt;Дізнатися</del><ins>тег.</ins> <del>більше&lt;/a&gt;.</del><ins>&lt;a&gt;Докладніше&lt;/a&gt;.</ins> <del>За</del><ins>Типово</ins> <del>налаштуванням</del><ins>очищається</ins> кеш<del> для</del> головної сторінки та оновлених<del> обговорень</del> <del>очищується.</del><ins>обговорень.</ins>

#### [`acpl-lscache.admin.purge_on_discussion_update_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/uk/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_label%22)

> Purge URLs or cache Tags on Discussion Update

```diff
-Очистити URL-адреси або кеш-теги в оновленні обговорень
+Очищати URL-адреси або теги кешу під час оновлення обговорення
```

<del>Очистити</del><ins>Очищати</ins> URL-адреси або <del>кеш-теги</del><ins>теги</ins> <del>в</del><ins>кешу</ins> <del>оновленні</del><ins>під</ins> <del>обговорень</del><ins>час оновлення обговорення</ins>

#### [`acpl-lscache.admin.status_codes_cache_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/uk/?q=context%3A%3D%22acpl-lscache.admin.status_codes_cache_label%22)

> Default HTTP Status Code Page TTL

```diff
-За налаштуванням HTTP код стану Сторінка TTL
+Типовий TTL сторінок із кодами стану HTTP
```


### `antoinefr-money`

#### [`antoinefr-money.admin.autoremove.1`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/uk/?q=context%3A%3D%22antoinefr-money.admin.autoremove.1%22)

> When a discussion/post is hidden or restored (default)

```diff
-Коли дискусію/допис приховано або відновлено (за налаштуванням)
+Коли обговорення/допис приховано або відновлено (за замовчуванням)
```

Коли <del>дискусію/допис</del><ins>обговорення/допис</ins> приховано або відновлено (за <del>налаштуванням)</del><ins>замовчуванням)</ins>

#### [`antoinefr-money.admin.autoremove.2`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/uk/?q=context%3A%3D%22antoinefr-money.admin.autoremove.2%22)

> When a discussion/post is deleted

```diff
-Коли дискусія/допис видаляється
+Коли обговорення/допис видаляється
```

Коли <del>дискусія/допис</del><ins>обговорення/допис</ins> видаляється

#### [`antoinefr-money.admin.settings.cascaderemove`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/uk/?q=context%3A%3D%22antoinefr-money.admin.settings.cascaderemove%22)

> Remove money for posts when a discussion is deleted

```diff
-Видаляти гроші за дописи, коли дискусію видалено
+Видаляти гроші за дописи, коли обговорення видалено
```

Видаляти гроші за дописи, коли <del>дискусію</del><ins>обговорення</ins> видалено

#### [`antoinefr-money.admin.settings.moneyfordiscussion`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/uk/?q=context%3A%3D%22antoinefr-money.admin.settings.moneyfordiscussion%22)

> Money given for a new discussion

```diff
-Гроші за нову дискусію
+Гроші за нове обговорення
```

Гроші за <del>нову</del><ins>нове</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`antoinefr-money.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/uk/?q=context%3A%3D%22antoinefr-money.forum.modal.title%22)

> {username}'s money

```diff
-Кошти від {username}
+Кошти користувача {username}
```

Кошти <del>від</del><ins>користувача</ins> {username}


### `clarkwinkelmann-likes-received`

#### [`clarkwinkelmann-likes-received.forum.user-card.likes`](https://weblate.rob006.net/translate/flarum2/clarkwinkelmann-likes-received/uk/?q=context%3A%3D%22clarkwinkelmann-likes-received.forum.user-card.likes%22)

> {likes, plural, one {# like received} other {# likes received}}

```diff
-{likes, plural, one {# отримана водобайка} other {# отриманих водобайок}}
+{likes, plural, one {# отримана вподобайка} few {# отримані вподобайки} many {# отриманих вподобайок} other {# отриманої вподобайки}}
```

{likes, plural, one {# отримана <del>водобайка}</del><ins>вподобайка}</ins> <del>other</del><ins>few {# отримані вподобайки} many</ins> {# отриманих <del>водобайок}}</del><ins>вподобайок} other {# отриманої вподобайки}}</ins>


### `core`

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
-{count, plural, one {# коментар} other {# коментарі}}
+{count, plural, one {# коментар} few {# коментарі} many {# коментарів} other {# коментаря}}
```

{count, plural, one {# коментар} <ins>few {# коментарі} many {# коментарів} </ins>other {# <del>коментарі}}</del><ins>коментаря}}</ins>

#### [`core.admin.basics.default_language_heading`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.default_language_heading%22)

> Default Language

```diff
-Мова за налаштуванням
+Мова за замовчуванням
```

Мова за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Оберіть драйвер, який слід використовувати для показу імен користувачів. За налаштуванням показується ім'я користувача.
+Оберіть драйвер, який слід використовувати для показу імен користувачів. За замовчуванням показується ім'я користувача.
```

Оберіть драйвер, який слід використовувати для показу імен користувачів. За <del>налаштуванням</del><ins>замовчуванням</ins> показується ім'я користувача.

#### [`core.admin.nav.categories.discussion`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.nav.categories.discussion%22)

> Discussion

```diff
-Дискусія
+Обговорення
```

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-Видалити дискусії назавжди
+Видаляти обговорення назавжди
```

<del>Видалити</del><ins>Видаляти</ins> <del>дискусії</del><ins>обговорення</ins> назавжди

#### [`core.admin.permissions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions.delete_discussions_label%22)

> Delete discussions

```diff
-Видалити дискусії
+Видаляти обговорення
```

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-Перейменовувати дискусії
+Перейменовувати обговорення
```

Перейменовувати <del>дискусії</del><ins>обговорення</ins>

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-Відповідати в дискусіях
+Відповідати в обговореннях
```

Відповідати в <del>дискусіях</del><ins>обговореннях</ins>

#### [`core.admin.permissions.start_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions.start_discussions_label%22)

> Start discussions

```diff
-Почати дискусії
+Розпочинати обговорення
```

#### [`core.admin.permissions.view_forum_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions.view_forum_label%22)

> View forum (discussions and users)

```diff
-Перегляд форуму (дискусії та користувачів)
+Переглядати форум (обговорення та користувачів)
```

<del>Перегляд</del><ins>Переглядати</ins> <del>форуму</del><ins>форум</ins> <del>(дискусії</del><ins>(обговорення</ins> та користувачів)

#### [`core.admin.permissions_controls.allow_some_minutes_button`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.permissions_controls.allow_some_minutes_button%22)

> {count, plural, one {For # minute} other {For # minutes}}

```diff
-{count, plural, one {На # хвилину} other {На # хвилин}}
+{count, plural, one {На # хвилину} few {На # хвилини} many {На # хвилин} other {На # хвилини}}
```

{count, plural, one {На # хвилину} <ins>few {На # хвилини} many {На # хвилин} </ins>other {На # <del>хвилин}}</del><ins>хвилини}}</ins>

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Натисніть на кнопку нижче для відправки посилання для зміни пароля на вашу електронну адресу.
+Натисніть кнопку нижче та перевірте електронну пошту: ви отримаєте посилання для зміни пароля.
```

Натисніть <del>на </del>кнопку нижче <del>для</del><ins>та</ins> <del>відправки</del><ins>перевірте</ins> <del>посилання</del><ins>електронну</ins> <del>для</del><ins>пошту:</ins> <del>зміни</del><ins>ви</ins> <del>пароля</del><ins>отримаєте</ins> <del>на</del><ins>посилання</ins> <del>вашу</del><ins>для</ins> <del>електронну</del><ins>зміни</ins> <del>адресу.</del><ins>пароля.</ins>

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Ви не створили дискусію. Ви бажаєте скасувати створення дискусії?
+Ви ще не опублікували обговорення. Скасувати його створення?
```

Ви <del>не створили</del><ins>ще</ins> <del>дискусію.</del><ins>не</ins> <del>Ви</del><ins>опублікували</ins> <del>бажаєте</del><ins>обговорення.</ins> <del>скасувати</del><ins>Скасувати</ins> <del>створення</del><ins>його</ins> <del>дискусії?</del><ins>створення?</ins>

#### [`core.forum.composer_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.composer_discussion.title_placeholder%22)

> Discussion Title

```diff
-Заголовок дискусії
+Заголовок обговорення
```

Заголовок <del>дискусії</del><ins>обговорення</ins>

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-У вас немає прав доступу для публікації відповіді в цій дискусії.
+У вас немає дозволу відповідати в цьому обговоренні.
```

У вас немає <del>прав доступу для публікації</del><ins>дозволу</ins> <del>відповіді</del><ins>відповідати</ins> в <del>цій</del><ins>цьому</ins> <del>дискусії.</del><ins>обговоренні.</ins>

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-Ви впевнені, що бажаєте видалити дискусію?
+Ви впевнені, що бажаєте видалити обговорення?
```

Ви впевнені, що бажаєте видалити <del>дискусію?</del><ins>обговорення?</ins>

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-Перемкнути спадне меню дій дискусії
+Відкрити або закрити спадне меню дій обговорення
```

<del>Перемкнути</del><ins>Відкрити або закрити</ins> спадне меню дій <del>дискусії</del><ins>обговорення</ins>

#### [`core.forum.discussion_list.empty_text`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.discussion_list.empty_text%22)

> It looks as though there are no discussions here.

```diff
-Складається враження, що тут немає ніяких дискусій.
+Схоже, тут ще немає обговорень.
```

<del>Складається враження, що</del><ins>Схоже,</ins> тут <del>немає</del><ins>ще</ins> <del>ніяких</del><ins>немає</ins> <del>дискусій.</del><ins>обговорень.</ins>

#### [`core.forum.discussion_list.total_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.discussion_list.total_replies_a11y_label%22)

> {count, plural, one {# reply} other {# replies}}

```diff
-{count, plural, one {# відповідь} other {# відповіді}}
+{count, plural, one {# відповідь} few {# відповіді} many {# відповідей} other {# відповіді}}
```

{count, plural, one {# відповідь} <ins>few {# відповіді} many {# відповідей} </ins>other {# відповіді}}

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# непрочитана відповідь} other {# непрочитані відповіді}}. Позначити {count, plural, one {непрочитану відповідь як прочитану} other {непрочитані відповіді як прочитані}}.
+{count, plural, one {# непрочитана відповідь} few {# непрочитані відповіді} many {# непрочитаних відповідей} other {# непрочитаної відповіді}}. Позначити {count, plural, =1 {непрочитану відповідь як прочитану} one {непрочитані відповіді як прочитані} other {непрочитані відповіді як прочитані}}.
```

{count, plural, one {# непрочитана відповідь} <del>other</del><ins>few</ins> {# непрочитані<ins> відповіді} many {# непрочитаних відповідей} other {# непрочитаної</ins> відповіді}}. Позначити {count, plural, <del>one</del><ins>=1</ins> {непрочитану відповідь як прочитану}<ins> one {непрочитані відповіді як прочитані}</ins> other {непрочитані відповіді як прочитані}}.

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-Назад до списку дискусій
+Назад до списку обговорень
```

Назад до списку <del>дискусій</del><ins>обговорень</ins>

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-Неможливо створити дискусію
+Неможливо створити обговорення
```

Неможливо створити <del>дискусію</del><ins>обговорення</ins>

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-Ви впевнені, що бажаєте позначити всі дискусії як прочитані?
+Ви впевнені, що бажаєте позначити всі обговорення як прочитані?
```

Ви впевнені, що бажаєте позначити всі <del>дискусії</del><ins>обговорення</ins> як прочитані?

#### [`core.forum.post_scrubber.viewing_text`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.post_scrubber.viewing_text%22)

> {count, plural, one {{index} of {formattedCount} post} other {{index} of {formattedCount} posts}}

```diff
-{count, plural, one {{index} з {formattedCount} допис} other {{index} з {formattedCount} дописів}}
+{count, plural, one {Допис {index} із {formattedCount}} other {Допис {index} із {formattedCount}}}
```

{count, plural, one <del>{{index}</del><ins>{Допис</ins> <del>з</del><ins>{index}</ins> <del>{formattedCount}</del><ins>із</ins> <del>допис}</del><ins>{formattedCount}}</ins> other <del>{{index}</del><ins>{Допис</ins> <del>з</del><ins>{index}</ins> <del>{formattedCount}</del><ins>із</ins> <del>дописів}}</del><ins>{formattedCount}}}</ins>

#### [`core.forum.rename_discussion.title`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.rename_discussion.title%22)

> Rename Discussion

```diff
-Перейменувати дискусію
+Перейменувати обговорення
```

Перейменувати <del>дискусію</del><ins>обговорення</ins>

#### [`core.forum.security.session_terminated`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.security.session_terminated%22)

> {count, plural, one {Session terminated} other {# Sessions terminated}}.

```diff
-{count, plural, one {Сесія завершена} other {# Сесії завершено}}.
+{count, plural, =1 {Сесію завершено} one {Завершено # сесію} few {Завершено # сесії} many {Завершено # сесій} other {Завершено # сесії}}.
```

{count, plural, <ins>=1 {Сесію завершено} </ins>one <del>{Сесія</del><ins>{Завершено</ins> <del>завершена}</del><ins># сесію} few {Завершено # сесії} many {Завершено # сесій}</ins> other <del>{#</del><ins>{Завершено</ins> <del>Сесії</del><ins>#</ins> <del>завершено}}.</del><ins>сесії}}.</ins>

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Хтось перейменував мою дискусію
+Хтось перейменував моє обговорення
```

Хтось перейменував <del>мою</del><ins>моє</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`core.ref.all_discussions`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.ref.all_discussions%22)

> All Discussions

```diff
-Всі дискусії
+Усі обговорення
```

#### [`core.ref.discussions`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.ref.discussions%22)

> Discussions

```diff
-Дискусії
+Обговорення
```

#### [`core.ref.start_a_discussion`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.ref.start_a_discussion%22)

> Start a Discussion

```diff
-Розпочати дискусію
+Розпочати обговорення
```

Розпочати <del>дискусію</del><ins>обговорення</ins>


### `datitisev-backup`

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.access-id.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.access-id.description%22)

> Your authentication Access token ID

```diff
-Ваша автентифікація ID токену доступу
+ID токена доступу для автентифікації
```

<del>Ваша автентифікація </del>ID <del>токену</del><ins>токена</ins> доступу<ins> для автентифікації</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.access-id.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.access-id.label%22)

> Access ID

```diff
-Access ID
+Ідентифікатор доступу
```

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.access-key.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.access-key.description%22)

> Your authentication Access token Key

```diff
-Ваша автентифікація Ключ токену доступу
+Ключ токена доступу для автентифікації
```

<del>Ваша автентифікація </del>Ключ <del>токену</del><ins>токена</ins> доступу<ins> для автентифікації</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.access-key.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.access-key.label%22)

> Access Key

```diff
-Access Key
+Ключ доступу
```

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.bucket.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.bucket.label%22)

> Bucket

```diff
-Bucket
+Бакет
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.bucket.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.bucket.description%22)

> S3 bucket to upload to.

```diff
-S3 bucket для завантаження.
+Бакет S3 для завантаження.
```

<del>S3</del><ins>Бакет</ins> <del>bucket</del><ins>S3</ins> для завантаження.

#### [`datitisev-backup.admin.adapter-settings-modal.aws.bucket.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.bucket.label%22)

> Bucket

```diff
-Bucket
+Бакет
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.region.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.region.description%22)

> Region of your bucket.

```diff
-Регіон для bucket.
+Регіон вашого бакета.
```

Регіон <del>для</del><ins>вашого</ins> <del>bucket.</del><ins>бакета.</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.azure.container.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.azure.container.description%22)

> Azure container

```diff
-Azure container
+Контейнер Azure
```

#### [`datitisev-backup.admin.adapter-settings-modal.azure.container.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.azure.container.label%22)

> Container

```diff
-Container
+Контейнер
```

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-access-code-label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-access-code-label%22)

> Obtain an access code (requires app key)

```diff
-Отримайте код доступу (потрібен app key)
+Отримайте код доступу (потрібен ключ застосунку)
```

Отримайте код доступу (потрібен <del>app</del><ins>ключ</ins> <del>key)</del><ins>застосунку)</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-label%22)

> Use access code to obtain a refresh token (requires app key &amp; secret)

```diff
-Використовуйте код доступу, щоб отримати токен оновлення (потрібен app key та secret)
+Використайте код доступу, щоб отримати токен оновлення (потрібні ключ і секрет застосунку)
```

<del>Використовуйте</del><ins>Використайте</ins> код доступу, щоб отримати токен оновлення <del>(потрібен</del><ins>(потрібні</ins> <del>app</del><ins>ключ</ins> <del>key</del><ins>і</ins> <del>та</del><ins>секрет</ins> <del>secret)</del><ins>застосунку)</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-success`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-success%22)

> Refresh token obtained successfully &amp; updated above! Save the changes to store it.

```diff
-Оновлкний токен успішно отримано та оновлено вище! Збережіть зміни, щоб зберегти його.
+Токен оновлення успішно отримано й оновлено вище! Збережіть зміни, щоб зберегти його.
```

<del>Оновлкний</del><ins>Токен</ins> <del>токен</del><ins>оновлення</ins> успішно отримано <del>та</del><ins>й</ins> оновлено вище! Збережіть зміни, щоб зберегти його.

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.key.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.key.label%22)

> App Key

```diff
-App Key
+Ключ застосунку
```

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.label%22)

> Refresh Token

```diff
-Оновити токен
+Токен оновлення
```

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.secret.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.secret.label%22)

> App Secret

```diff
-App Secret
+Секрет застосунку
```

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.description%22)

> Follow the instructions @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md to create a Google project and retrieve your Client ID &amp; Client Secret.
>

```diff
-Дотримуйтесь інструкцій за адресою https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md, щоб створити проект Google і отримати свій ідентифікатор клієнта та секрет клієнта.
+Дотримуйтесь інструкцій за адресою https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md, щоб створити проєкт Google і отримати свій ідентифікатор клієнта та секрет клієнта.

```

Дотримуйтесь інструкцій за адресою https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md, щоб створити <del>проект</del><ins>проєкт</ins> Google і отримати свій ідентифікатор клієнта та секрет клієнта.<br />

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.folder.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.folder.label%22)

> Folder ID

```diff
-Folder ID
+Ідентифікатор теки
```

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/uk/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.label%22)

> Refresh Token

```diff
-Оновити токен
+Токен оновлення
```


### `datlechin-bbcode-hide-content`

#### [`datlechin-bbcode-hide-content.admin.permissions.bypass_like_label`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/uk/?q=context%3A%3D%22datlechin-bbcode-hide-content.admin.permissions.bypass_like_label%22)

> Bypass like requirement

```diff
-Вимога щодо обходу
+Обходити вимогу вподобати
```

#### [`datlechin-bbcode-hide-content.admin.permissions.bypass_reply_label`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/uk/?q=context%3A%3D%22datlechin-bbcode-hide-content.admin.permissions.bypass_reply_label%22)

> Bypass reply requirement

```diff
-Вимога щодо обходу відповіді
+Обходити вимогу відповісти
```


### `datlechin-more-discussions`

#### [`datlechin-more-discussions.admin.settings.block_name_help`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/uk/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.block_name_help%22)

> The name of the block (default &lt;code&gt;Latest Discussions&lt;/code&gt;)

```diff
-Назва блоку (за замовчуванням <code>Останні дискусії</code>)
+Назва блоку (за замовчуванням <code>Останні обговорення</code>)
```

Назва блоку (за замовчуванням &lt;code&gt;Останні <del>дискусії&lt;/code&gt;)</del><ins>обговорення&lt;/code&gt;)</ins>

#### [`datlechin-more-discussions.admin.settings.discussion_limit_help`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/uk/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.discussion_limit_help%22)

> The number of discussions to display (default &lt;code&gt;5&lt;/code&gt;)

```diff
-Кількість дискусій (за налаштуванням - <code>5</code>)
+Кількість обговорень для показу (типово <code>5</code>)
```

Кількість <del>дискусій</del><ins>обговорень</ins> <del>(за</del><ins>для</ins> <del>налаштуванням</del><ins>показу</ins> <del>-</del><ins>(типово</ins> &lt;code&gt;5&lt;/code&gt;)

#### [`datlechin-more-discussions.admin.settings.discussion_limit_label`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/uk/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.discussion_limit_label%22)

> Discussion limit

```diff
-Обмеження дискусії
+Обмеження обговорення
```

Обмеження <del>дискусії</del><ins>обговорення</ins>

#### [`datlechin-more-discussions.admin.settings.filter_by_help`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/uk/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.filter_by_help%22)

> Filter discussions (default: &lt;code&gt;latest&lt;/code&gt;)

```diff
-Фільтр дискусій (за налаштуванням: <code>останні</code>)
+Фільтр обговорень (за замовчуванням: <code>latest</code>)
```

Фільтр <del>дискусій</del><ins>обговорень</ins> (за <del>налаштуванням:</del><ins>замовчуванням:</ins> <del>&lt;code&gt;останні&lt;/code&gt;)</del><ins>&lt;code&gt;latest&lt;/code&gt;)</ins>

#### [`datlechin-more-discussions.forum.block_default_name`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/uk/?q=context%3A%3D%22datlechin-more-discussions.forum.block_default_name%22)

> Latest Discussions

```diff
-Останні дискусії
+Останні обговорення
```

Останні <del>дискусії</del><ins>обговорення</ins>


### `datlechin-tag-passwords`

#### [`datlechin-tag-passwords.admin.edit_tag.group_placeholder_label`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.admin.edit_tag.group_placeholder_label%22)

> Group name

```diff
-Груповий дозвіл
+Назва групи
```

#### [`datlechin-tag-passwords.admin.setting.discussion.avatar`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.discussion.avatar%22)

> Display the Poster User Profile for Protected Tag in Discussion List

```diff
-Показати профіль користувача дописувача для захищеного тегу в списку дискусій
+Показати профіль користувача дописувача для захищеного тегу в списку обговорень
```

Показати профіль користувача дописувача для захищеного тегу в списку <del>дискусій</del><ins>обговорень</ins>

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_page`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_page%22)

> Display Protected Tag in Discussion, with URL Sharing

```diff
-Відображати захищений тег в дискусії з наданням спільного доступу до URL-адреси
+Відображати захищений тег в обговоренні з наданням спільного доступу до URL-адреси
```

Відображати захищений тег в <del>дискусії</del><ins>обговоренні</ins> з наданням спільного доступу до URL-адреси

#### [`datlechin-tag-passwords.admin.setting.heading.discussion`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.heading.discussion%22)

> Discussion List Display

```diff
-Відображення списку дискусій
+Відображення списку обговорень
```

Відображення списку <del>дискусій</del><ins>обговорень</ins>

#### [`datlechin-tag-passwords.forum.discussion_list.avatar`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.avatar%22)

> Protected

```diff
-Зазищено
+Захищено
```

#### [`datlechin-tag-passwords.forum.discussion_list.info.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.group_protected%22)

> To be able to gain access to this discussion, you must have the correct role assigned to your account.

```diff
-Щоб отримати доступ до цієї дискусії, ви повинні мати відповідну роль, призначену вашому обліковому запису.
+Щоб отримати доступ до цього обговорення, ви повинні мати відповідну роль, призначену вашому обліковому запису.
```

Щоб отримати доступ до <del>цієї</del><ins>цього</ins> <del>дискусії,</del><ins>обговорення,</ins> ви повинні мати відповідну роль, призначену вашому обліковому запису.

#### [`datlechin-tag-passwords.forum.discussion_list.info.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.multiple%22)

> To be able to gain access to this discussion, you need to unlock all protected Tags.

```diff
-Щоб отримати доступ до цієї дискусії, вам потрібно розблокувати всі захищені теги.
+Щоб отримати доступ до цього обговорення, вам потрібно розблокувати всі захищені теги.
```

Щоб отримати доступ до <del>цієї</del><ins>цього</ins> <del>дискусії,</del><ins>обговорення,</ins> вам потрібно розблокувати всі захищені теги.

#### [`datlechin-tag-passwords.forum.discussion_list.info.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.password_protected%22)

> To be able to gain access to this discussion, you must provide the correct password for the Protected Tag.

```diff
-Щоб отримати доступ до цієї дискусії, ви повинні вказати правильний пароль для захищеного тегу.
+Щоб отримати доступ до цього обговорення, ви повинні вказати правильний пароль для захищеного тегу.
```

Щоб отримати доступ до <del>цієї</del><ins>цього</ins> <del>дискусії,</del><ins>обговорення,</ins> ви повинні вказати правильний пароль для захищеного тегу.

#### [`datlechin-tag-passwords.forum.discussion_list.title.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.title.group_protected%22)

> Discussion is Permission Group Protected

```diff
-Дискусія захищена групою дозволів
+Обговорення захищене групою дозволів
```

<del>Дискусія</del><ins>Обговорення</ins> <del>захищена</del><ins>захищене</ins> групою дозволів

#### [`datlechin-tag-passwords.forum.discussion_list.title.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.title.multiple%22)

> Discussion is Protected

```diff
-Дискусія захищена
+Обговорення захищене
```

#### [`datlechin-tag-passwords.forum.discussion_list.title.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.title.password_protected%22)

> Discussion is Password Protected

```diff
-Дискусія захищена паролем
+Обговорення захищене паролем
```

<del>Дискусія</del><ins>Обговорення</ins> <del>захищена</del><ins>захищене</ins> паролем

#### [`datlechin-tag-passwords.forum.discussion_page.title.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_page.title.group_protected%22)

> Discussion is Permission Group Protected

```diff
-Дискусія захищена групою дозволів
+Обговорення захищене групою дозволів
```

<del>Дискусія</del><ins>Обговорення</ins> <del>захищена</del><ins>захищене</ins> групою дозволів

#### [`datlechin-tag-passwords.forum.discussion_page.title.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_page.title.multiple%22)

> Discussion is Protected

```diff
-Дискусія захищена
+Обговорення захищене
```

#### [`datlechin-tag-passwords.forum.discussion_page.title.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_page.title.password_protected%22)

> Discussion is Password Protected

```diff
-Дискусія захищена паролем
+Обговорення захищене паролем
```

<del>Дискусія</del><ins>Обговорення</ins> <del>захищена</del><ins>захищене</ins> паролем

#### [`datlechin-tag-passwords.forum.post_list.title.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.post_list.title.group_protected%22)

> Post in Permission Group Required Discussion

```diff
-Публікація в групі дозволів вимагає обговорення
+Допис в обговоренні, для якого потрібна група дозволів
```

<del>Публікація</del><ins>Допис</ins> в <del>групі</del><ins>обговоренні,</ins> <del>дозволів</del><ins>для</ins> <del>вимагає</del><ins>якого</ins> <del>обговорення</del><ins>потрібна група дозволів</ins>

#### [`datlechin-tag-passwords.forum.post_list.title.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.post_list.title.multiple%22)

> Post in Protected Discussion

```diff
-Публікація в захищеній дискусії
+Допис у захищеному обговоренні
```

#### [`datlechin-tag-passwords.forum.post_list.title.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.post_list.title.password_protected%22)

> Post in Password Protected Discussion

```diff
-Повідомлення в захищеній паролем дискусії
+Допис в обговоренні, захищеному паролем
```

<del>Повідомлення</del><ins>Допис</ins> в <del>захищеній</del><ins>обговоренні,</ins> <del>паролем</del><ins>захищеному</ins> <del>дискусії</del><ins>паролем</ins>

#### [`datlechin-tag-passwords.forum.tags_page.discussion.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.discussion.group_protected%22)

> Discussion requires Permission Group

```diff
-Дискусія потребує Групи дозволу
+Для обговорення потрібна група дозволів
```

#### [`datlechin-tag-passwords.forum.tags_page.discussion.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.discussion.multiple%22)

> Discussion requires all Permission

```diff
-Дискусія вимагає всіх дозволів
+Обговорення вимагає всіх дозволів
```

<del>Дискусія</del><ins>Обговорення</ins> вимагає всіх дозволів

#### [`datlechin-tag-passwords.forum.tags_page.discussion.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/uk/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.discussion.password_protected%22)

> Discussion is Password Protected

```diff
-Дискусія захищена паролем
+Обговорення захищене паролем
```

<del>Дискусія</del><ins>Обговорення</ins> <del>захищена</del><ins>захищене</ins> паролем


### `datlechin-title-length`

#### [`datlechin-title-length.admin.settings.limit_help`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/uk/?q=context%3A%3D%22datlechin-title-length.admin.settings.limit_help%22)

> Enable to use custom title length limit. If disabled, the Flarum's default title length limit will be used.

```diff
-Увімкнути, щоб використовувати користувацьке обмеження довжини заголовка. Якщо вимкнено, буде використовуватися обмеження довжини заголовка за налаштуванням Flarum.
+Увімкнути, щоб використовувати користувацьке обмеження довжини заголовка. Якщо вимкнено, буде використовуватися обмеження довжини заголовка за замовчуванням Flarum.
```

Увімкнути, щоб використовувати користувацьке обмеження довжини заголовка. Якщо вимкнено, буде використовуватися обмеження довжини заголовка за <del>налаштуванням</del><ins>замовчуванням</ins> Flarum.


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.delete_blatant_spam_help`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/uk/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.delete_blatant_spam_help%22)

> If Akismet has determined that the comment is blatant spam, instead of flagging, automatically delete post

```diff
-Якщо Akismet визначив, що коментар є відвертим спамом, замість того, щоб позначити його прапорцем, автоматично видаляє пост
+Якщо Akismet визначить, що коментар є відвертим спамом, автоматично видаляти допис замість того, щоб позначати його
```

Якщо Akismet <del>визначив,</del><ins>визначить,</ins> що коментар є відвертим спамом,<ins> автоматично видаляти допис</ins> замість того, щоб <del>позначити</del><ins>позначати</ins> його<del> прапорцем, автоматично видаляє пост</del>

#### [`flarum-akismet.forum.post.akismet_flagged_text`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/uk/?q=context%3A%3D%22flarum-akismet.forum.post.akismet_flagged_text%22)

> Akismet flagged as spam

```diff
-Akismet помітив як спам
+Akismet позначив як спам
```

Akismet <del>помітив</del><ins>позначив</ins> як спам


### `flarum-approval`

#### [`flarum-approval.admin.permissions.start_discussions_without_approval_label`](https://weblate.rob006.net/translate/flarum2/flarum-approval/uk/?q=context%3A%3D%22flarum-approval.admin.permissions.start_discussions_without_approval_label%22)

> Start discussions without approval

```diff
-Почати дискусію без затвердження
+Почати обговорення без затвердження
```

Почати <del>дискусію</del><ins>обговорення</ins> без затвердження


### `flarum-flags`

#### [`flarum-flags.forum.flag_post.reason_off_topic_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/uk/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_off_topic_text%22)

> This post is not relevant to the current discussion and should be moved elsewhere.

```diff
-Допис не має відношення до дискусії і має бути переміщено в інше місце.
+Допис не стосується цього обговорення, і його слід перемістити в інше місце.
```

Допис не <del>має відношення</del><ins>стосується</ins> <del>до</del><ins>цього</ins> <del>дискусії</del><ins>обговорення,</ins> і <del>має</del><ins>його</ins> <del>бути</del><ins>слід</ins> <del>переміщено</del><ins>перемістити</ins> в інше місце.


### `flarum-gdpr`

#### [`flarum-gdpr.admin.settings.allow_anonymization_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_anonymization_help%22)

> The default option, and recommended for most communities. Under this mode, posts/comments will be preserved as much as possible as allowed by GDPR, but any user identifiable information is removed.

```diff
-Опція за налаштуванням, рекомендована для більшості спільнот. У цьому режимі дописи/коментарі будуть збережені настільки, наскільки це дозволено GDPR, але будь-яка інформація, що дозволяє ідентифікувати користувача, буде видалена.
+Опція за замовчуванням, рекомендована для більшості спільнот. У цьому режимі дописи/коментарі будуть збережені настільки, наскільки це дозволено GDPR, але будь-яка інформація, що дозволяє ідентифікувати користувача, буде видалена.
```

Опція за <del>налаштуванням,</del><ins>замовчуванням,</ins> рекомендована для більшості спільнот. У цьому режимі дописи/коментарі будуть збережені настільки, наскільки це дозволено GDPR, але будь-яка інформація, що дозволяє ідентифікувати користувача, буде видалена.

#### [`flarum-gdpr.admin.settings.default_anonymous_username`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_anonymous_username%22)

> Default username for anonymized users

```diff
-Ім'я користувача за налаштуванням для анонімних користувачів
+Ім'я користувача за замовчуванням для анонімних користувачів
```

Ім'я користувача за <del>налаштуванням</del><ins>замовчуванням</ins> для анонімних користувачів

#### [`flarum-gdpr.admin.settings.default_erasure`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure%22)

> Default action for erasure requests

```diff
-Дія за налаштуванням для запитів на видалення
+Дія за замовчуванням для запитів на видалення
```

Дія за <del>налаштуванням</del><ins>замовчуванням</ins> для запитів на видалення

#### [`flarum-gdpr.admin.settings.default_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_help%22)

> What should the default action be for erasure requests?

```diff
-Якою має бути дія за налаштуванням для запитів на видалення?
+Якою має бути дія за замовчуванням для запитів на видалення?
```

Якою має бути дія за <del>налаштуванням</del><ins>замовчуванням</ins> для запитів на видалення?

#### [`flarum-gdpr.forum.delete_user.modal_delete_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.modal_delete_button%22)

> Erase using default action

```diff
-Видалити за допомогою дії за налаштуванням
+Видалити за допомогою дії за замовчуванням
```

Видалити за допомогою дії за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`flarum-gdpr.forum.erasure_requests.item_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.item_text%22)

> {name} requested account erasure

```diff
-{name} запросив видалення акаунта
+{name} запросив видалення облікового запису
```

{name} запросив видалення <del>акаунта</del><ins>облікового запису</ins>

#### [`flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation%22)

> You should have received an email to confirm your account erasure request.
>

```diff
-Ви повинні були отримати електронного листа з підтвердженням запиту на видалення акаунта.
+Ви повинні були отримати електронного листа з підтвердженням запиту на видалення облікового запису.

```

Ви повинні були отримати електронного листа з підтвердженням запиту на видалення <del>акаунта.</del><ins>облікового запису.</ins><br />

#### [`flarum-gdpr.forum.settings.export_data_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_help%22)

> Requesting data export will provide you with a downloadable copy of all the information associated with your account. This includes posts, comments, and profile details.

```diff
-Надіславши запит на експорт даних, ви отримаєте завантажувану копію всієї інформації, пов'язаної з вашим акаунтом. Сюди входять дописи, коментарі та дані профілю.
+Надіславши запит на експорт даних, ви отримаєте завантажувану копію всієї інформації, пов'язаної з вашим обліковим записом. Сюди входять дописи, коментарі та дані профілю.
```

Надіславши запит на експорт даних, ви отримаєте завантажувану копію всієї інформації, пов'язаної з вашим <del>акаунтом.</del><ins>обліковим записом.</ins> Сюди входять дописи, коментарі та дані профілю.

#### [`flarum-gdpr.lib.data.discussions.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.lib.data.discussions.export_description%22)

> Exports all discussions the user has started. Data restricted to title and creation date.

```diff
-Експортувати всі дискусії, які розпочав користувач. Дані обмежені назвою та датою створення.
+Експортувати всі обговорення, які розпочав користувач. Дані обмежені назвою та датою створення.
```

Експортувати всі <del>дискусії,</del><ins>обговорення,</ins> які розпочав користувач. Дані обмежені назвою та датою створення.

#### [`flarum-gdpr.lib.data.posts.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.export_description%22)

> Exports all posts the user has made. Data restricted to content, creation date, IP address and discussion ID.

```diff
-Експортувати всі дописи, які зробив користувач. Дані обмежені вмістом, датою створення, IP-адресою та ідентифікатором дискусії.
+Експортувати всі дописи, які зробив користувач. Дані обмежені вмістом, датою створення, IP-адресою та ідентифікатором обговорення.
```

Експортувати всі дописи, які зробив користувач. Дані обмежені вмістом, датою створення, IP-адресою та ідентифікатором <del>дискусії.</del><ins>обговорення.</ins>

#### [`flarum-gdpr.lib.data.user.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/uk/?q=context%3A%3D%22flarum-gdpr.lib.data.user.anonymize_description%22)

> Sets all columns on the user table to null. Non-nullable columns are set to their default values or special values. Password is changed, preferences set to default and all groups are removed.

```diff
-Встановлює нульове значення для всіх стовпців у таблиці користувача. Стовпці, які не можна обнулити, отримують значення за замовчуванням або спеціальні значення. Пароль змінюється, налаштування встановлюються за налаштуванням, а всі групи видаляються.
+Встановлює нульове значення для всіх стовпців у таблиці користувача. Стовпці, які не можна обнулити, отримують значення за замовчуванням або спеціальні значення. Пароль змінюється, налаштування встановлюються за замовчуванням, а всі групи видаляються.
```

Встановлює нульове значення для всіх стовпців у таблиці користувача. Стовпці, які не можна обнулити, отримують значення за замовчуванням або спеціальні значення. Пароль змінюється, налаштування встановлюються за <del>налаштуванням,</del><ins>замовчуванням,</ins> а всі групи видаляються.


### `flarum-likes`

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/uk/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{count, plural, one {{users} вподобали це} other {{users} вподобав це}}.
+{count, plural, =1 {{users} вподобав це} one {{users} вподобали це} other {{users} вподобали це}}.
```

{count, plural, <ins>=1 {{users} вподобав це} </ins>one {{users} вподобали це} other {{users} <del>вподобав</del><ins>вподобали</ins> це}}.


### `flarum-lock`

#### [`flarum-lock.admin.permissions.lock_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/uk/?q=context%3A%3D%22flarum-lock.admin.permissions.lock_discussions_label%22)

> Lock discussions

```diff
-Заблокувати дискусії
+Заблокувати обговорення
```

Заблокувати <del>дискусії</del><ins>обговорення</ins>

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/uk/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-Користувач {username} заблокував дискусію {time}.
+Користувач {username} заблокував обговорення {time}.
```

Користувач {username} заблокував <del>дискусію</del><ins>обговорення</ins> {time}.

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/uk/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-Користувач {username} розблокував дискусію {time}.
+Користувач {username} розблокував обговорення {time}.
```

Користувач {username} розблокував <del>дискусію</del><ins>обговорення</ins> {time}.

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/uk/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Хтось блокує розпочату мною дискусію
+Хтось блокує розпочате мною обговорення
```

Хтось блокує <del>розпочату</del><ins>розпочате</ins> мною <del>дискусію</del><ins>обговорення</ins>


### `flarum-mentions`

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/uk/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} відповів на ваш пост у дискусії {title}
+{replier_display_name} відповів на ваш допис в обговоренні {title}
```

{replier\_display\_name} відповів на ваш <del>пост</del><ins>допис</ins> <del>у</del><ins>в</ins> <del>дискусії</del><ins>обговоренні</ins> {title}

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/uk/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mentioner_display_name} згадав вас у дискусії {title}
+{mentioner_display_name} згадав вас в обговоренні {title}
```

{mentioner\_display\_name} згадав вас <del>у</del><ins>в</ins> <del>дискусії</del><ins>обговоренні</ins> {title}


### `flarum-nicknames`

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/uk/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
-Це приховає «ім'я користувача», введене під час реєстрації, і замість цього використовуватиме випадкове число. Це також зробить поле «псевдо» обов'язковим. Це набуде чинності, лише якщо увімкнено «Дозволити встановлення псевдо при реєстрації».
+Приховує поле `username` під час реєстрації та використовує випадкове число замість імені користувача. Поле `nickname` також стає обов’язковим. Діє лише за ввімкненого дозволу задавати псевдонім під час реєстрації.
```

<del>Це приховає «ім'я</del><ins>Приховує</ins> <del>користувача»,</del><ins>поле</ins> <del>введене</del><ins>\`username\`</ins> під час<del> реєстрації, і</del> <del>замість</del><ins>реєстрації</ins> <del>цього</del><ins>та</ins> <del>використовуватиме</del><ins>використовує</ins> випадкове <del>число.</del><ins>число</ins> <del>Це</del><ins>замість</ins> <del>також</del><ins>імені</ins> <del>зробить</del><ins>користувача.</ins> <del>поле</del><ins>Поле</ins> <del>«псевдо»</del><ins>\`nickname\`</ins> <del>обов'язковим.</del><ins>також</ins> <del>Це</del><ins>стає</ins> <del>набуде</del><ins>обов’язковим.</ins> <del>чинності,</del><ins>Діє</ins> лише <del>якщо</del><ins>за</ins> <del>увімкнено</del><ins>ввімкненого</ins> <del>«Дозволити</del><ins>дозволу</ins> <del>встановлення</del><ins>задавати</ins> <del>псевдо</del><ins>псевдонім</ins> <del>при</del><ins>під</ins> <del>реєстрації».</del><ins>час реєстрації.</ins>


### `flarum-pusher`

#### [`flarum-pusher.forum.discussion_list.show_updates_text`](https://weblate.rob006.net/translate/flarum2/flarum-pusher/uk/?q=context%3A%3D%22flarum-pusher.forum.discussion_list.show_updates_text%22)

> {count, plural, one {Show # updated discussion} other {Show # updated discussions}}

```diff
-{count, plural, one {Показати # оновлену дискусію} other {Показати # оновлених дискусій}}
+{count, plural, one {Показати # оновлене обговорення} few {Показати # оновлені обговорення} many {Показати # оновлених обговорень} other {Показати оновлені обговорення: #}}
```

{count, plural, one {Показати # <del>оновлену</del><ins>оновлене</ins> <del>дискусію}</del><ins>обговорення}</ins> <del>other</del><ins>few {Показати # оновлені обговорення} many</ins> {Показати # оновлених <del>дискусій}}</del><ins>обговорень} other {Показати оновлені обговорення: #}}</ins>


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/uk/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-Закріплені дискусії
+Закріплювати обговорення
```

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/uk/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-Користувач {username} закріпив дискусію {time}.
+Користувач {username} закріпив обговорення {time}.
```

Користувач {username} закріпив <del>дискусію</del><ins>обговорення</ins> {time}.

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/uk/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-Користувач {username} скасував закріплення дискусії {time}.
+Користувач {username} скасував закріплення обговорення {time}.
```

Користувач {username} скасував закріплення <del>дискусії</del><ins>обговорення</ins> {time}.


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/uk/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Автоматично підписуватися на дискусії, в яких я відповідаю
+Автоматично підписуватися на обговорення, у яких я відповідаю
```

Автоматично підписуватися на <del>дискусії,</del><ins>обговорення,</ins> <del>в</del><ins>у</ins> яких я відповідаю

#### [`flarum-subscriptions.forum.settings.notify_for_all_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/uk/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_for_all_posts_label%22)

> Notify about every new post instead of only the last in a discussion

```diff
-Сповіщати про кожен новий допис, а не лише про останнє в дискусії
+Сповіщати про кожен новий допис, а не лише про останнє в обговоренні
```

Сповіщати про кожен новий допис, а не лише про останнє в <del>дискусії</del><ins>обговоренні</ins>

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/uk/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Хтось відповів в дискусіях, на які я підписаний
+Хтось відповів в обговоренні, за яким я стежу
```

Хтось відповів в <del>дискусіях,</del><ins>обговоренні,</ins> <del>на</del><ins>за</ins> <del>які</del><ins>яким</ins> я <del>підписаний</del><ins>стежу</ins>

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/uk/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-Ніколи не повідомляти. Приховати в списку дискусій.
+Ніколи не повідомляти. Приховати в списку обговорень.
```

Ніколи не повідомляти. Приховати в списку <del>дискусій.</del><ins>обговорень.</ins>

#### [`flarum-subscriptions.forum.sub_controls.not_following_button`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/uk/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.not_following_button%22)

> Not Following

```diff
-Відписатись
+Не стежити
```


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-Ви впевнені , що хочете видалити тег? Дискусії в цьому тезі видалені не будуть.
+Ви впевнені, що хочете видалити тег? Обговорення з цим тегом не буде видалено.
```

Ви <del>впевнені ,</del><ins>впевнені,</ins> що хочете видалити тег?<del> Дискусії</del> <del>в</del><ins>Обговорення</ins> <del>цьому</del><ins>з</ins> <del>тезі</del><ins>цим</ins> <del>видалені</del><ins>тегом</ins> не <del>будуть.</del><ins>буде видалено.</ins>

#### [`flarum-tags.admin.edit_tag.hide_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.edit_tag.hide_label%22)

> Hide from All Discussions

```diff
-Приховати зі списку дискусій
+Приховати зі списку обговорень
```

Приховати зі списку <del>дискусій</del><ins>обговорень</ins>

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-Керування списком тегів, доступних для структурування дискусій.
+Керування списком тегів, доступних для впорядкування обговорень.
```

Керування списком тегів, доступних для <del>структурування</del><ins>впорядкування</ins> <del>дискусій.</del><ins>обговорень.</ins>

#### [`flarum-tags.admin.permissions.tag_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.permissions.tag_discussions_label%22)

> Tag discussions

```diff
-Тег дискусій
+Призначати теги обговоренням
```

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Введіть мінімальне і максимальне число основних тегів, в які буде додана дискусія.
+Укажіть мінімальну й максимальну кількість основних тегів, які можна призначити обговоренню.
```

<del>Введіть</del><ins>Укажіть</ins> <del>мінімальне</del><ins>мінімальну</ins> <del>і</del><ins>й</ins> <del>максимальне</del><ins>максимальну</ins> <del>число</del><ins>кількість</ins> основних тегів,<del> в</del> які <del>буде</del><ins>можна</ins> <del>додана</del><ins>призначити</ins> <del>дискусія.</del><ins>обговоренню.</ins>

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Введіть мінімальне і максимальне число додаткових тегів, в які буде додана дискусія.
+Укажіть мінімальну й максимальну кількість додаткових тегів, які можна призначити обговоренню.
```

<del>Введіть</del><ins>Укажіть</ins> <del>мінімальне</del><ins>мінімальну</ins> <del>і</del><ins>й</ins> <del>максимальне</del><ins>максимальну</ins> <del>число</del><ins>кількість</ins> додаткових тегів,<del> в</del> які <del>буде</del><ins>можна</ins> <del>додана</del><ins>призначити</ins> <del>дискусія.</del><ins>обговоренню.</ins>

#### [`flarum-tags.admin.tags.about_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.admin.tags.about_tags_text%22)

> Tags are used to categorize discussions. Primary tags are like traditional forum categories: they can be arranged in a two-level hierarchy. Secondary tags do not have hierarchy or order, and are useful for micro-categorization.

```diff
-Теги використовуються для структурування дискусій. Основні теги можуть утворювати дворівневу ієрархію. Додаткові теги не мають ієрархії та можуть бути корисні для мікро-структурування. Теги з додаткових в основні можна конвертувати шляхом простого перетягування мишкою.
+Теги використовуються для впорядкування обговорень. Основні теги подібні до звичайних категорій форуму: їх можна організувати у дворівневу ієрархію. Додаткові теги не мають ієрархії чи порядку та корисні для докладнішої класифікації.
```

Теги використовуються для <del>структурування</del><ins>впорядкування</ins> <del>дискусій.</del><ins>обговорень.</ins> Основні теги <del>можуть</del><ins>подібні</ins> <del>утворювати</del><ins>до звичайних категорій форуму: їх можна організувати у</ins> дворівневу ієрархію. Додаткові теги не мають ієрархії <del>та</del><ins>чи</ins> <del>можуть</del><ins>порядку</ins> <del>бути</del><ins>та</ins> корисні для<del> мікро-структурування. Теги з додаткових в основні можна конвертувати шляхом простого</del> <del>перетягування</del><ins>докладнішої</ins> <del>мишкою.</del><ins>класифікації.</ins>

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-Оберіть теги для вашої дискусії
+Оберіть теги для вашого обговорення
```

Оберіть теги для <del>вашої</del><ins>вашого</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`flarum-tags.forum.post_stream.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.forum.post_stream.tags_text%22)

> {count, plural, one {{tags} tag} other {{tags} tags}}

```diff
-{count, plural, one {{tags} тег} other {{tags} теги}}
+{count, plural, =1 {тег {tags}} one {теги {tags}} other {теги {tags}}}
```

{count, plural, <ins>=1 {тег {tags}} </ins>one <del>{{tags}</del><ins>{теги</ins> <del>тег}</del><ins>{tags}}</ins> other <del>{{tags}</del><ins>{теги</ins> <del>теги}}</del><ins>{tags}}}</ins>

#### [`flarum-tags.forum.tag.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.forum.tag.meta_description_text%22)

> All discussions with the {tag} tag

```diff
-Всі дискусії з тегом {tag}
+Всі обговорення з тегом {tag}
```

Всі <del>дискусії</del><ins>обговорення</ins> з тегом {tag}

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
-{count, plural, one {Оберіть основний тег} other {Оберіть # основні теги}}
+{count, plural, =1 {Оберіть основний тег} one {Оберіть # основний тег} few {Оберіть # основні теги} many {Оберіть # основних тегів} other {Оберіть основні теги: #}}
```

{count, plural, <ins>=1 {Оберіть основний тег} </ins>one {Оберіть<ins> #</ins> основний тег} <del>other</del><ins>few</ins> {Оберіть # основні <del>теги}}</del><ins>теги} many {Оберіть # основних тегів} other {Оберіть основні теги: #}}</ins>

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/uk/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
-{count, plural, one {Оберіть більше # тегу} other {Оберіть більше # тегів}}
+{count, plural, one {Оберіть ще # тег} few {Оберіть ще # теги} many {Оберіть ще # тегів} other {Оберіть ще тегів: #}}
```

{count, plural, one {Оберіть <del>більше</del><ins>ще</ins> # <del>тегу}</del><ins>тег}</ins> <del>other</del><ins>few</ins> {Оберіть <del>більше</del><ins>ще</ins> # <del>тегів}}</del><ins>теги} many {Оберіть ще # тегів} other {Оберіть ще тегів: #}}</ins>


### `flectar-turnstile`

#### [`flectar-turnstile.forum.not_loaded_error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/uk/?q=context%3A%3D%22flectar-turnstile.forum.not_loaded_error%22)

> Failed to load Cloudflare Turnstile. Please refresh the page, and check your adblocker.

```diff
-Не вдалося завантажити Cloudflare Turnstile. Будь ласка, оновіть сторінку та перевірте ваш браузер.
+Не вдалося завантажити Cloudflare Turnstile. Оновіть сторінку й перевірте блокувальник реклами.
```

Не вдалося завантажити Cloudflare Turnstile. <del>Будь ласка, оновіть</del><ins>Оновіть</ins> сторінку <del>та</del><ins>й</ins> перевірте <del>ваш</del><ins>блокувальник</ins> <del>браузер.</del><ins>реклами.</ins>


### `fof-amazon-affiliation`

#### [`fof-amazon-affiliation.admin.settings.field.keep-existing-tag-help`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/uk/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.keep-existing-tag-help%22)

> By default any existing tag in the original url is replaced by the tag you define below.

```diff
-За налаштуванням будь-який існуючий тег у вихідному URL-адресі замінюється на тег, який ви визначите нижче.
+За замовчуванням наявний тег у вихідній URL-адресі замінюється тегом, який ви вкажете нижче.
```

За <del>налаштуванням будь-який</del><ins>замовчуванням</ins> <del>існуючий</del><ins>наявний</ins> тег у <del>вихідному</del><ins>вихідній</ins> URL-адресі замінюється<del> на</del> <del>тег,</del><ins>тегом,</ins> який ви <del>визначите</del><ins>вкажете</ins> нижче.

#### [`fof-amazon-affiliation.admin.settings.field.remove-tag-if-unhandled-help`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/uk/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.remove-tag-if-unhandled-help%22)

> By default links that aren't covered are left as-it, including their tag if any.

```diff
-За налаштуванням посилання, які не покриваються, залишаються як є, включаючи їх тег, якщо він є.
+За замовчуванням посилання, які не покриваються, залишаються як є, включаючи їх тег, якщо він є.
```

За <del>налаштуванням</del><ins>замовчуванням</ins> посилання, які не покриваються, залишаються як є, включаючи їх тег, якщо він є.


### `fof-analytics`

#### [`fof-analytics.admin.popup.field.googleTrackingCode`](https://weblate.rob006.net/translate/flarum2/fof-analytics/uk/?q=context%3A%3D%22fof-analytics.admin.popup.field.googleTrackingCode%22)

> Tracking Code ID

```diff
-Tracking Code ID
+Ідентифікатор коду відстеження
```


### `fof-anti-spam`

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be soft deleted instead.

```diff
-Це призведе до остаточного видалення всіх дискусій, розпочатих цим користувачем. Якщо цю опцію вимкнено, дискусії буде видалено м'яко.
+Це призведе до остаточного видалення всіх обговорень, розпочатих цим користувачем. Якщо цю опцію вимкнено, обговорення буде видалено з можливістю відновлення.
```

Це призведе до остаточного видалення всіх <del>дискусій,</del><ins>обговорень,</ins> розпочатих цим користувачем. Якщо цю опцію вимкнено, <del>дискусії</del><ins>обговорення</ins> буде видалено <del>м'яко.</del><ins>з можливістю відновлення.</ins>

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_label%22)

> Delete discussions

```diff
-Видалити дискусії
+Видалити обговорення
```

Видалити <del>дискусії</del><ins>обговорення</ins>

#### [`fof-anti-spam.admin.settings.default-actions.heading`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.heading%22)

> Default moderation actions

```diff
-Дії модерації за налаштуванням
+Дії модерації за замовчуванням
```

Дії модерації за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help%22)

> This will move all discussions started by this user to the tag(s) you specified. Clear the tag selection to leave discussions in their original tag(s). Has no effect if the 'Delete discussions' option is enabled.

```diff
-Це перемістить всі дискусії, розпочаті цим користувачем, до вказаних вами тегів. Очистіть вибір тегів, щоб залишити дискусію в оригінальних тегах. Не має ефекту, якщо увімкнено опцію «Видаляти обговорення».
+Це перемістить всі обговорення, розпочаті цим користувачем, до вказаних вами тегів. Очистіть вибір тегів, щоб залишити обговорення в початкових тегах. Не має ефекту, якщо увімкнено опцію «Видаляти обговорення».
```

Це перемістить всі <del>дискусії,</del><ins>обговорення,</ins> розпочаті цим користувачем, до вказаних вами тегів. Очистіть вибір тегів, щоб залишити <del>дискусію</del><ins>обговорення</ins> в <del>оригінальних</del><ins>початкових</ins> тегах. Не має ефекту, якщо увімкнено опцію «Видаляти обговорення».

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label%22)

> Move discussions to tag(s)

```diff
-Перемістити дискусії до тегів
+Перемістити обговорення до тегів
```

Перемістити <del>дискусії</del><ins>обговорення</ins> до тегів

#### [`fof-anti-spam.admin.settings.stopforumspam.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.introduction%22)

> Checks new user registrations against the &lt;a&gt;StopForumSpam&lt;/a&gt; database. If either the &lt;code&gt;confidence&lt;/code&gt; or &lt;code&gt;frequency&lt;/code&gt; thresholds are reached, the user is prevented from completing their registration on your forum.
>
> SSO register via &lt;code&gt;fof/oauth&lt;/code&gt; and &lt;code&gt;fof/passport&lt;/code&gt; is also supported. Other SSO providers should work, but are untested.
>

```diff
-Перевірка реєстрації нових користувачів у базі даних <a>StopForumSpam</a>. Якщо досягнуто порогових значень <code>надійності</code> або <code>частоти</code>, користувач не зможе завершити реєстрацію на вашому форумі. 
+Перевіряє реєстрації нових користувачів за базою <a>StopForumSpam</a>. Якщо досягнуто порогу <code>confidence</code> або <code>frequency</code>, користувач не зможе завершити реєстрацію на форумі.

-Також підтримується реєстрація SSO через <code>fof/oauth</code> і <code>fof/passport</code>. Інші постачальники єдиного входу повинні працювати, але вони не перевірені.
+Також підтримується реєстрація SSO через <code>fof/oauth</code> і <code>fof/passport</code>. Інші сервіси SSO мають працювати, але не перевірялися.

```

<del>Перевірка</del><ins>Перевіряє</ins> реєстрації нових користувачів<del> у</del> <del>базі</del><ins>за</ins> <del>даних</del><ins>базою</ins> &lt;a&gt;StopForumSpam&lt;/a&gt;. Якщо досягнуто<del> порогових</del> <del>значень</del><ins>порогу</ins> <del>&lt;code&gt;надійності&lt;/code&gt;</del><ins>&lt;code&gt;confidence&lt;/code&gt;</ins> або <del>&lt;code&gt;частоти&lt;/code&gt;,</del><ins>&lt;code&gt;frequency&lt;/code&gt;,</ins> користувач не зможе завершити реєстрацію на<del> вашому</del> форумі.<del> <br /><br /></del><ins><br /><br /></ins>Також підтримується реєстрація SSO через &lt;code&gt;fof/oauth&lt;/code&gt; і &lt;code&gt;fof/passport&lt;/code&gt;. Інші<del> постачальники</del> <del>єдиного</del><ins>сервіси</ins> <del>входу</del><ins>SSO</ins> <del>повинні</del><ins>мають</ins> працювати, але<del> вони</del> не <del>перевірені.</del><ins>перевірялися.</ins><br />

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help%22)

> By default we will direct the lookup to the closest regional server in order to provide the fastest response. Should you wish to restrict traffic to a specific region, such as for compliance with company or country privacy regulations, then you can force a connection to a specific region.

```diff
-За налаштуванням ми спрямовуємо пошук до найближчого регіонального сервера, щоб забезпечити найшвидшу відповідь. Якщо ви хочете обмежити трафік певним регіоном, наприклад, для дотримання правил конфіденційності компанії або країни, ви можете примусово встановити з'єднання з певним регіоном.
+За замовчуванням ми спрямовуємо пошук до найближчого регіонального сервера, щоб забезпечити найшвидшу відповідь. Якщо ви хочете обмежити трафік певним регіоном, наприклад, для дотримання правил конфіденційності компанії або країни, ви можете примусово встановити з'єднання з певним регіоном.
```

За <del>налаштуванням</del><ins>замовчуванням</ins> ми спрямовуємо пошук до найближчого регіонального сервера, щоб забезпечити найшвидшу відповідь. Якщо ви хочете обмежити трафік певним регіоном, наприклад, для дотримання правил конфіденційності компанії або країни, ви можете примусово встановити з'єднання з певним регіоном.

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label%22)

> Delete discussions

```diff
-Видалити дискусії
+Видалити обговорення
```

Видалити <del>дискусії</del><ins>обговорення</ins>

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_help%22)

> This will move all discussions started by this user to the tag you specified in the forum settings. When disabled, discussions will be left in their current tags.

```diff
-Це перемістить всі дискусії, розпочаті цим користувачем, до тегу, який ви вказали в налаштуваннях форуму. Якщо цю опцію вимкнено, дискусії залишатимуться у своїх поточних тегах.
+Це перемістить всі обговорення, розпочаті цим користувачем, до тегу, який ви вказали в налаштуваннях форуму. Якщо цю опцію вимкнено, обговорення залишатимуться у своїх поточних тегах.
```

Це перемістить всі <del>дискусії,</del><ins>обговорення,</ins> розпочаті цим користувачем, до тегу, який ви вказали в налаштуваннях форуму. Якщо цю опцію вимкнено, <del>дискусії</del><ins>обговорення</ins> залишатимуться у своїх поточних тегах.


### `fof-ban-ips`

#### [`fof-ban-ips.lib.modal.ban_ip_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/uk/?q=context%3A%3D%22fof-ban-ips.lib.modal.ban_ip_users%22)

> {count, plural, one {User {users} will be banned} other {Users {users} will be banned}}

```diff
-{count, plural, one {Користувач {users} був заблокований} other {Користувачі {users} були заблоковані}}
+{count, plural, one {Буде заблоковано: {users}} other {Буде заблоковано: {users}}}
```

{count, plural, one <del>{Користувач {users}</del><ins>{Буде</ins> <del>був</del><ins>заблоковано:</ins> <del>заблокований}</del><ins>{users}}</ins> other<del> {Користувачі</del> <del>{users}</del><ins>{Буде</ins> <del>були</del><ins>заблоковано:</ins> <del>заблоковані}}</del><ins>{users}}}</ins>

#### [`fof-ban-ips.lib.modal.unban_ip_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/uk/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_ip_users%22)

> {count, plural, one {User {users} will be unbanned} other {Users {users} will be unbanned}}

```diff
-{count, plural, one {Користувач {users} буде розблоковано} other {Користувачі {users} будуть розблоковані}}
+{count, plural, one {Блокування буде знято: {users}} other {Блокування буде знято: {users}}}
```

{count, plural, one <del>{Користувач {users}</del><ins>{Блокування</ins> буде <del>розблоковано}</del><ins>знято: {users}}</ins> other <del>{Користувачі</del><ins>{Блокування</ins> <del>{users}</del><ins>буде</ins> <del>будуть</del><ins>знято:</ins> <del>розблоковані}}</del><ins>{users}}}</ins>


### `fof-best-answer`

#### [`fof-best-answer.forum.errors.mismatch`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22fof-best-answer.forum.errors.mismatch%22)

> Selected post does not exist in this discussion.

```diff
-Виділений допис не існує в цій дискусії.
+Вибраного допису немає в цьому обговоренні.
```

<del>Виділений допис</del><ins>Вибраного</ins> <del>не</del><ins>допису</ins> <del>існує</del><ins>немає</ins> в <del>цій</del><ins>цьому</ins> <del>дискусії.</del><ins>обговоренні.</ins>

#### [`fof-best-answer.forum.notification.best_answer_in_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22fof-best-answer.forum.notification.best_answer_in_discussion%22)

> {username} set a best answer in this discussion

```diff
-{username} встановив найкращу відповідь у цій дискусії
+Користувач {username} вибрав найкращу відповідь у цьому обговоренні
```

<ins>Користувач </ins>{username} <del>встановив</del><ins>вибрав</ins> найкращу відповідь у <del>цій</del><ins>цьому</ins> <del>дискусії</del><ins>обговоренні</ins>

#### [`fof-best-answer.forum.notification.preferences.awarded_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.awarded_best_answer%22)

> Someone sets my post as a best answer

```diff
-Хтось ставить мій пост як найкращу відповідь
+Хтось позначає мій допис як найкращу відповідь
```

Хтось <del>ставить</del><ins>позначає</ins> мій <del>пост</del><ins>допис</ins> як найкращу відповідь

#### [`fof-best-answer.forum.notification.preferences.best_answer_in_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.best_answer_in_discussion%22)

> A best answer is set in a discussion I participated in

```diff
-Найкраща відповідь викладена в дискусії, в якій я брав участь
+В обговоренні, у якому я брав участь, вибрано найкращу відповідь
```

#### [`fof-best-answer.forum.notification.preferences.select_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.select_best_answer%22)

> An automated reminder to select a best answer in a discussion I started

```diff
-Автоматичне нагадування про вибір найкращої відповіді в розпочатій мною дискусії
+Автоматичне нагадування про вибір найкращої відповіді в розпочатому мною обговоренні
```

Автоматичне нагадування про вибір найкращої відповіді в <del>розпочатій</del><ins>розпочатому</ins> мною <del>дискусії</del><ins>обговоренні</ins>

#### [`fof-best-answer.forum.user.best-answer-count`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22fof-best-answer.forum.user.best-answer-count%22)

> {count, plural, one { {count} best answer} other {{count} best answers}}

```diff
-{count, plural, one {{count} best answer} other {{count} найкращі відповіді}}
+{count, plural, one {{count} найкраща відповідь} few {{count} найкращі відповіді} many {{count} найкращих відповідей} other {{count} найкращої відповіді}}
```

{count, plural, one {{count} <del>best</del><ins>найкраща</ins> <del>answer}</del><ins>відповідь}</ins> <del>other</del><ins>few</ins> {{count} найкращі<ins> відповіді} many {{count} найкращих відповідей} other {{count} найкращої</ins> відповіді}}


### `fof-blog`

#### [`fof-blog.admin.settings.allow_comments_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/uk/?q=context%3A%3D%22fof-blog.admin.settings.allow_comments_text%22)

> By default, allow comments on blog posts. When disabled, it can be enabled individually per blog post. &lt;b&gt;Note:&lt;/b&gt; Changing this setting will not affect pre-existing blog posts.

```diff
-За налаштуванням дозволити коментування записів блогу. Якщо вимкнено, його можна ввімкнути індивідуально для кожного запису в блозі. <b>Примітка:</b> Зміна цього параметра не вплине на вже існуючі записи в блозі.
+За замовчуванням дозволити коментування записів блогу. Якщо вимкнено, його можна ввімкнути індивідуально для кожного запису в блозі. <b>Примітка:</b> Зміна цього параметра не вплине на вже існуючі записи в блозі.
```

За <del>налаштуванням</del><ins>замовчуванням</ins> дозволити коментування записів блогу. Якщо вимкнено, його можна ввімкнути індивідуально для кожного запису в блозі. &lt;b&gt;Примітка:&lt;/b&gt; Зміна цього параметра не вплине на вже існуючі записи в блозі.

#### [`fof-blog.admin.settings.default_article_image_label`](https://weblate.rob006.net/translate/flarum2/fof-blog/uk/?q=context%3A%3D%22fof-blog.admin.settings.default_article_image_label%22)

> Default article image

```diff
-Зображення статті за налаштуванням
+Зображення статті за замовчуванням
```

Зображення статті за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`fof-blog.admin.settings.default_article_image_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/uk/?q=context%3A%3D%22fof-blog.admin.settings.default_article_image_text%22)

> Select a default article image to display when no image is set.

```diff
-Оберіть зображення статті за налаштуванням, яке буде відображатися, якщо зображення не встановлено.
+Оберіть зображення статті за замовчуванням, яке буде відображатися, якщо зображення не встановлено.
```

Оберіть зображення статті за <del>налаштуванням,</del><ins>замовчуванням,</ins> яке буде відображатися, якщо зображення не встановлено.

#### [`fof-blog.admin.settings.hide_on_discussion_list_label`](https://weblate.rob006.net/translate/flarum2/fof-blog/uk/?q=context%3A%3D%22fof-blog.admin.settings.hide_on_discussion_list_label%22)

> Don't show on discussion list

```diff
-Не показувати в списку дискусій
+Не показувати в списку обговорень
```

Не показувати в списку <del>дискусій</del><ins>обговорень</ins>

#### [`fof-blog.admin.settings.selected_category_count`](https://weblate.rob006.net/translate/flarum2/fof-blog/uk/?q=context%3A%3D%22fof-blog.admin.settings.selected_category_count%22)

> {count, plural, one {You have # category selected} other {You have # categories selected}}

```diff
-{count, plural, one {Ви обрали # категорію} other {Ви обрали # категорії}}
+{count, plural, one {Ви обрали # категорію} few {Ви обрали # категорії} many {Ви обрали # категорій} other {Ви обрали # категорії}}
```

{count, plural, one {Ви обрали # категорію} <ins>few {Ви обрали # категорії} many {Ви обрали # категорій} </ins>other {Ви обрали # категорії}}

#### [`fof-blog.forum.article_settings.fields.highlight.title`](https://weblate.rob006.net/translate/flarum2/fof-blog/uk/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.highlight.title%22)

> Highlighted post

```diff
-Виділений пост
+Виділений допис
```

Виділений <del>пост</del><ins>допис</ins>


### `fof-byobu`

#### [`fof-byobu.admin.permission.add_more_than_two_user_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.add_more_than_two_user_recipients%22)

> Add more than 2 user recipients to private discussion

```diff
-Додайте більше 2 одержувачів до приватної дискусії
+Додавати понад 2 одержувачів до приватного обговорення
```

<del>Додайте</del><ins>Додавати</ins> <del>більше</del><ins>понад</ins> 2 одержувачів до <del>приватної</del><ins>приватного</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.admin.permission.create_private_discussions_with_blocking_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_blocking_users%22)

> Create private discussions with users that block it

```diff
-Створюйте приватні дискусії з користувачами, які їх блокують
+Створювати приватні обговорення з користувачами, які їх блокують
```

<del>Створюйте</del><ins>Створювати</ins> приватні <del>дискусії</del><ins>обговорення</ins> з користувачами, які їх блокують

#### [`fof-byobu.admin.permission.create_private_discussions_with_groups`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_groups%22)

> Create private discussions with groups

```diff
-Створюйте приватні дискусії з групами
+Створювати приватні обговорення з групами
```

<del>Створюйте</del><ins>Створювати</ins> приватні <del>дискусії</del><ins>обговорення</ins> з групами

#### [`fof-byobu.admin.permission.create_private_discussions_with_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_users%22)

> Create private discussions with users

```diff
-Створюйте приватні дискусії з користувачами
+Створювати приватні обговорення з користувачами
```

<del>Створюйте</del><ins>Створювати</ins> приватні <del>дискусії</del><ins>обговорення</ins> з користувачами

#### [`fof-byobu.admin.permission.edit_group_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.edit_group_recipients%22)

> Edit groups partaking in private discussions

```diff
-Редагувати групи, які беруть участь у приватних дискусіях
+Редагувати групи, які беруть участь у приватних обговореннях
```

Редагувати групи, які беруть участь у приватних <del>дискусіях</del><ins>обговореннях</ins>

#### [`fof-byobu.admin.permission.edit_user_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.edit_user_recipients%22)

> Edit users partaking in private discussions

```diff
-Редагувати користувачів, які беруть участь у приватних дискусіях
+Редагувати користувачів, які беруть участь у приватних обговореннях
```

Редагувати користувачів, які беруть участь у приватних <del>дискусіях</del><ins>обговореннях</ins>

#### [`fof-byobu.admin.permission.make_private_into_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.make_private_into_public%22)

> Transform a private discussion into a public discussion

```diff
-Редагувати групи, які беруть участь у приватних дискусіях
+Робити приватні обговорення публічними
```

#### [`fof-byobu.admin.permission.view_private_discussions-when-flagged`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.permission.view_private_discussions-when-flagged%22)

> View private discussions of other users if flagged

```diff
-Перегляд приватних дискусій інших користувачів, якщо їх позначено
+Перегляд приватних обговорень інших користувачів, якщо їх позначено
```

Перегляд приватних <del>дискусій</del><ins>обговорень</ins> інших користувачів, якщо їх позначено

#### [`fof-byobu.admin.settings.badge-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.settings.badge-icon%22)

> Byobu Discussion Badge

```diff
-Іконка дискусії Byobu
+Іконка обговорення Byobu
```

Іконка <del>дискусії</del><ins>обговорення</ins> Byobu

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left_help%22)

> If enabled, PDs will be permanently deleted from the database when the last user leaves. Otherwise, the PD will be soft-deleted/hidden.

```diff
-Якщо ця опція увімкнена, буде назавжди видалено з бази даних, коли останній користувач залишить дискусію. В іншому випадку дискусію буде видалено/приховано.
+Якщо ввімкнено, приватне обговорення буде назавжди видалено з бази даних, коли його залишить останній користувач. Інакше обговорення буде видалено з можливістю відновлення або приховано.
```

Якщо <del>ця</del><ins>ввімкнено,</ins> <del>опція</del><ins>приватне</ins> <del>увімкнена,</del><ins>обговорення</ins> буде назавжди видалено з бази даних, коли<ins> його залишить</ins> останній <del>користувач</del><ins>користувач.</ins> <del>залишить</del><ins>Інакше</ins> <del>дискусію.</del><ins>обговорення</ins> <del>В</del><ins>буде</ins> <del>іншому</del><ins>видалено</ins> <del>випадку</del><ins>з</ins> <del>дискусію</del><ins>можливістю</ins> <del>буде</del><ins>відновлення</ins> <del>видалено/приховано.</del><ins>або приховано.</ins>

#### [`fof-byobu.admin.settings.enable-make-public-option`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.settings.enable-make-public-option%22)

> Enable the "make public" ability

```diff
-Іконка дискусії Byobu
+Увімкнути можливість «Зробити публічним»
```

#### [`fof-byobu.admin.settings.enable-make-public-option-help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.settings.enable-make-public-option-help%22)

> Adds the ability for those with permission to remove all recipients, assign a new tag and make the discussion publically visible (accoring to the visibility settings of the chosen tag).

```diff
-Додає можливість для тих, хто має дозвіл, видалити всіх одержувачів, призначити новий тег і зробити дискусію публічно видимимою (відповідно до налаштувань видимості обраного тегу).
+Додає можливість для тих, хто має дозвіл, видалити всіх одержувачів, призначити новий тег і зробити обговорення видимим для всіх (відповідно до налаштувань видимості обраного тегу).
```

Додає можливість для тих, хто має дозвіл, видалити всіх одержувачів, призначити новий тег і зробити <del>дискусію</del><ins>обговорення</ins> <del>публічно</del><ins>видимим</ins> <del>видимимою</del><ins>для всіх</ins> (відповідно до налаштувань видимості обраного тегу).

#### [`fof-byobu.admin.settings.hide_from_all_discussions_page`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.settings.hide_from_all_discussions_page%22)

> Hide PDs from "All Discussions" page

```diff
-Приховати дискусію зі сторінки «Усі обговорення»
+Приховати обговорення зі сторінки «Усі обговорення»
```

Приховати <del>дискусію</del><ins>обговорення</ins> зі сторінки «Усі обговорення»

#### [`fof-byobu.admin.settings.hide_from_all_discussions_page_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.admin.settings.hide_from_all_discussions_page_help%22)

> Private discussions will only be accessible from the "Private Discussions" page or the user profile

```diff
-Приватні дискусії будуть доступні лише зі сторінки «Приватні дискусії» або з профілю користувача
+Приватні обговорення будуть доступні лише зі сторінки «Приватні обговорення» або з профілю користувача
```

Приватні <del>дискусії</del><ins>обговорення</ins> будуть доступні лише зі сторінки «Приватні <del>дискусії»</del><ins>обговорення»</ins> або з профілю користувача

#### [`fof-byobu.email.subject.private_discussion_added`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_added%22)

> \[Private Discussion\] {display\_name} added you to a private discussion

```diff
-[Приватне обговорення] {display_name} додав вас до приватної дискусії
+[Приватне обговорення] {display_name} додав вас до приватного обговорення
```

\[Приватне обговорення\] {display\_name} додав вас до <del>приватної</del><ins>приватного</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.email.subject.private_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_created%22)

> \[Private Discussion\] {display\_name} started a new private discussion with you

```diff
-[Приватна дискусія] {display_name} почав нову приватну дискусію з вами
+[Приватне обговорення] {display_name} почав нове приватне обговорення з вами
```

<del>\[Приватна</del><ins>\[Приватне</ins> <del>дискусія\]</del><ins>обговорення\]</ins> {display\_name} почав <del>нову</del><ins>нове</ins> <del>приватну</del><ins>приватне</ins> <del>дискусію</del><ins>обговорення</ins> з вами

#### [`fof-byobu.email.subject.private_discussion_replied`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_replied%22)

> \[Private Discussion\] {display\_name} posted in a private discussion

```diff
-[Приватне обговорення] {display_name} розміщено в приватній дискусії
+[Приватне обговорення] {display_name} написав у приватному обговоренні
```

\[Приватне обговорення\] {display\_name} <del>розміщено</del><ins>написав</ins> <del>в</del><ins>у</ins> <del>приватній</del><ins>приватному</ins> <del>дискусії</del><ins>обговоренні</ins>

#### [`fof-byobu.email.subject.recipient_removed`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.email.subject.recipient_removed%22)

> \[Private Discussion\] {display\_name} left the discussion

```diff
-[Приватне обговорення] {display_name} покинув дискусію
+[Приватне обговорення] {display_name} покинув обговорення
```

\[Приватне обговорення\] {display\_name} покинув <del>дискусію</del><ins>обговорення</ins>

#### [`fof-byobu.forum.badges.is_private.tooltip`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.badges.is_private.tooltip%22)

> Private discussion

```diff
-Приватна дискусія
+Приватне обговорення
```

#### [`fof-byobu.forum.buttons.make_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.buttons.make_public%22)

> Make this discussion public

```diff
-Зробити цю дискусію публічною
+Зробити це обговорення публічним
```

Зробити <del>цю</del><ins>це</ins> <del>дискусію</del><ins>обговорення</ins> <del>публічною</del><ins>публічним</ins>

#### [`fof-byobu.forum.buttons.remove_from_discussion`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.buttons.remove_from_discussion%22)

> Leave this private discussion

```diff
-Залишити цю приватну дискусію
+Залишити це приватне обговорення
```

Залишити <del>цю</del><ins>це</ins> <del>приватну</del><ins>приватне</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`fof-byobu.forum.composer_private_discussion.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.composer_private_discussion.submit_button%22)

> Post Private Discussion

```diff
-Опублікувати приватну дискусію
+Опублікувати приватне обговорення
```

Опублікувати <del>приватну</del><ins>приватне</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`fof-byobu.forum.composer_private_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.composer_private_discussion.title_placeholder%22)

> Private Discussion Title

```diff
-Назва приватної дискусії
+Назва приватного обговорення
```

Назва <del>приватної</del><ins>приватного</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.confirm.make_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.confirm.make_public%22)

> Are you sure you want to remove the recipients and make this discussion visible to anyone who can view the assigned tag?

```diff
-Ви впевнені, що хочете видалити одержувачів і зробити цю дискусію видимою для всіх, хто може переглянути призначений тег?
+Ви впевнені, що хочете видалити одержувачів і зробити це обговорення видимим для всіх, хто може переглянути призначений тег?
```

Ви впевнені, що хочете видалити одержувачів і зробити <del>цю</del><ins>це</ins> <del>дискусію</del><ins>обговорення</ins> <del>видимою</del><ins>видимим</ins> для всіх, хто може переглянути призначений тег?

#### [`fof-byobu.forum.labels.recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.labels.recipients%22)

> {count, plural, one {{count} Recipient} other {{count} Recipients}}

```diff
-{count, plural, one {{count} одержувач} other {{count} одержувачі}}
+{count, plural, one {{count} одержувач} few {{count} одержувачі} many {{count} одержувачів} other {{count} одержувача}}
```

{count, plural, one {{count} одержувач} <ins>few {{count} одержувачі} many {{count} одержувачів} </ins>other {{count} <del>одержувачі}}</del><ins>одержувача}}</ins>

#### [`fof-byobu.forum.modal.help.add_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.modal.help.add_recipients%22)

> This discussion will only be visible to the users you choose here. At least 1 recipient (other than yourself) is required.

```diff
-Цю дискусію бачитимуть лише ті користувачі, яких ви оберете тут. Потрібен принаймні 1 одержувач (окрім вас).
+Це обговорення бачитимуть лише ті користувачі, яких ви оберете тут. Потрібен принаймні 1 одержувач (окрім вас).
```

<del>Цю</del><ins>Це</ins> <del>дискусію</del><ins>обговорення</ins> бачитимуть лише ті користувачі, яких ви оберете тут. Потрібен принаймні 1 одержувач (окрім вас).

#### [`fof-byobu.forum.modal.help.update_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.modal.help.update_recipients%22)

> This discussion will only be visible to the users you choose here.

```diff
-Цю дискусію бачитимуть лише ті користувачі, яких ви оберете тут.
+Це обговорення бачитимуть лише ті користувачі, яких ви оберете тут.
```

<del>Цю</del><ins>Це</ins> <del>дискусію</del><ins>обговорення</ins> бачитимуть лише ті користувачі, яких ви оберете тут.

#### [`fof-byobu.forum.modal.titles.add_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.modal.titles.add_recipients%22)

> Add recipients to your discussion

```diff
-Додайте одержувачів до вашої дискусії
+Додайте одержувачів до вашого обговорення
```

Додайте одержувачів до <del>вашої</del><ins>вашого</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.nav.nav_item`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.nav.nav_item%22)

> Private Discussions

```diff
-Приватні дискусії
+Приватні обговорення
```

Приватні <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.notifications.pd_added_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_added_label%22)

> Someone adds me to an existing private discussion

```diff
-Хтось додає мене до вже існуючої приватної дискусії
+Хтось додає мене до наявного приватного обговорення
```

Хтось додає мене до <del>вже існуючої</del><ins>наявного</ins> <del>приватної</del><ins>приватного</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.notifications.pd_added_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_added_text%22)

> {username} added you to a private discussion

```diff
-Користувач {username} додав вас до приватної дискусії
+Користувач {username} додав вас до приватного обговорення
```

Користувач {username} додав вас до <del>приватної</del><ins>приватного</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.notifications.pd_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_label%22)

> Someone includes me in a new private discussion

```diff
-Хтось включає мене в нову приватну дискусію
+Хтось включає мене в нове приватне обговорення
```

Хтось включає мене в <del>нову</del><ins>нове</ins> <del>приватну</del><ins>приватне</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`fof-byobu.forum.notifications.pd_reply_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_reply_label%22)

> Someone posts in a private discussion I'm a recipient of

```diff
-Хтось пише в приватній дискусії, на яку я отримую повідомлення
+Хтось пише в приватному обговоренні, на яку я отримую повідомлення
```

Хтось пише в <del>приватній</del><ins>приватному</ins> <del>дискусії,</del><ins>обговоренні,</ins> на яку я отримую повідомлення

#### [`fof-byobu.forum.notifications.pd_reply_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_reply_text%22)

> {username} posted in a private discussion you're a part of

```diff
-Користувач {username}, опубліковане в приватній дискусії, в якій ви берете участь
+Користувач {username} написав у приватному обговоренні, у якому ви берете участь
```

Користувач <del>{username},</del><ins>{username}</ins> <del>опубліковане</del><ins>написав</ins> <del>в</del><ins>у</ins> <del>приватній</del><ins>приватному</ins> <del>дискусії,</del><ins>обговоренні,</ins> <del>в</del><ins>у</ins> <del>якій</del><ins>якому</ins> ви берете участь

#### [`fof-byobu.forum.notifications.pd_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_text%22)

> {username} started a new private discussion with you

```diff
-Користувач {username} розпочав з вами нову приватну дискусію
+Користувач {username} розпочав з вами нове приватне обговорення
```

Користувач {username} розпочав з вами <del>нову</del><ins>нове</ins> <del>приватну</del><ins>приватне</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`fof-byobu.forum.notifications.pd_user_left_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_user_left_label%22)

> A recipient user leaves a private discussion I'm a part of

```diff
-Користувач-одержувач залишає приватну дискусію, в якій я беру участь
+Користувач-одержувач залишає приватне обговорення, у якому я беру участь
```

Користувач-одержувач залишає <del>приватну</del><ins>приватне</ins> <del>дискусію,</del><ins>обговорення,</ins> <del>в</del><ins>у</ins> <del>якій</del><ins>якому</ins> я беру участь

#### [`fof-byobu.forum.notifications.pd_user_left_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_user_left_text%22)

> {username} left the private discussion

```diff
-Користувач {username} left the private discussion
+Користувач {username} залишив приватне обговорення
```

Користувач {username} <del>left the</del><ins>залишив</ins> <del>private</del><ins>приватне</ins> <del>discussion</del><ins>обговорення</ins>

#### [`fof-byobu.forum.post.recipients_modified.removed_self`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.post.recipients_modified.removed_self%22)

> {username} left the private discussion.

```diff
-Користувач {username} покинув приватну дискусію.
+Користувач {username} залишив приватне обговорення.
```

Користувач {username} <del>покинув</del><ins>залишив</ins> <del>приватну</del><ins>приватне</ins> <del>дискусію.</del><ins>обговорення.</ins>

#### [`fof-byobu.forum.user.byobu_link`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.user.byobu_link%22)

> Private Discussions

```diff
-Приватні дискусії
+Приватні обговорення
```

Приватні <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.user.dropdown_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.user.dropdown_label%22)

> Private Discussions

```diff
-Приватні дискусії
+Приватні обговорення
```

Приватні <del>дискусії</del><ins>обговорення</ins>

#### [`fof-byobu.forum.user.settings.block_pd`](https://weblate.rob006.net/translate/flarum2/fof-byobu/uk/?q=context%3A%3D%22fof-byobu.forum.user.settings.block_pd%22)

> Block private discussions

```diff
-Блокувати приватні дискусії
+Блокувати приватні обговорення
```

Блокувати приватні <del>дискусії</del><ins>обговорення</ins>


### `fof-categories`

#### [`fof-categories.forum.stat-widgets.discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/uk/?q=context%3A%3D%22fof-categories.forum.stat-widgets.discussion_label%22)

> Discussions

```diff
-Дискусії
+Обговорення
```


### `fof-default-user-preferences`

#### [`fof-default-user-preferences.admin.settings.followAfterReply-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/uk/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply-help%22)

> When enabled, new users will automatically follow discussions they reply to or comment on.

```diff
-Якщо ввімкнено, нові користувачі автоматично стежитимуть за дискусіями, на які вони відповідають або коментують.
+Якщо ввімкнено, нові користувачі автоматично стежитимуть за обговореннями, у яких вони відповідають або залишають коментарі.
```

Якщо ввімкнено, нові користувачі автоматично стежитимуть за <del>дискусіями,</del><ins>обговореннями,</ins> <del>на</del><ins>у</ins> <del>які</del><ins>яких</ins> вони відповідають або <del>коментують.</del><ins>залишають коментарі.</ins>


### `fof-discussion-language`

#### [`fof-discussion-language.admin.settings.composer_default_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-language/uk/?q=context%3A%3D%22fof-discussion-language.admin.settings.composer_default_label%22)

> Pre-select current locale in the discussion composer

```diff
-Попередньо обрати поточну локацію в композиторі дискусії
+Попередньо вибирати поточну мову у вікні створення обговорення
```

Попередньо <del>обрати</del><ins>вибирати</ins> поточну <del>локацію</del><ins>мову</ins> <del>в</del><ins>у</ins> <del>композиторі</del><ins>вікні</ins> <del>дискусії</del><ins>створення обговорення</ins>

#### [`fof-discussion-language.admin.settings.locale_sort_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-language/uk/?q=context%3A%3D%22fof-discussion-language.admin.settings.locale_sort_label%22)

> Use detected language for default discussion filter

```diff
-Використовувати визначену мову для фільтрації дискусій за налаштуванням
+Типово використовувати визначену мову для фільтрації обговорень
```

<del>Використовувати</del><ins>Типово використовувати</ins> визначену мову для фільтрації<del> дискусій за</del> <del>налаштуванням</del><ins>обговорень</ins>

#### [`fof-discussion-language.admin.settings.tags_page_discussion_locale_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-language/uk/?q=context%3A%3D%22fof-discussion-language.admin.settings.tags_page_discussion_locale_label%22)

> Only show discussions from the user's current locale on the Tags page

```diff
-Показувати дискусії лише з поточної мови користувача на сторінці тегів
+Показувати на сторінці тегів лише обговорення поточною мовою користувача
```

Показувати <del>дискусії лише</del><ins>на</ins> <del>з</del><ins>сторінці</ins> <del>поточної</del><ins>тегів</ins> <del>мови</del><ins>лише</ins> <del>користувача</del><ins>обговорення</ins> <del>на</del><ins>поточною</ins> <del>сторінці</del><ins>мовою</ins> <del>тегів</del><ins>користувача</ins>

#### [`fof-discussion-language.api.discussion.validation_error`](https://weblate.rob006.net/translate/flarum2/fof-discussion-language/uk/?q=context%3A%3D%22fof-discussion-language.api.discussion.validation_error%22)

> You must select your discussion's language.

```diff
-Ви повинні обрати мову для дискусії.
+Ви повинні обрати мову для обговорення.
```

Ви повинні обрати мову для <del>дискусії.</del><ins>обговорення.</ins>

#### [`fof-discussion-language.forum.sub_controls.subscription_language_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-language/uk/?q=context%3A%3D%22fof-discussion-language.forum.sub_controls.subscription_language_label%22)

> Discussion language

```diff
-Мова дискусії
+Мова обговорення
```

Мова <del>дискусії</del><ins>обговорення</ins>


### `fof-discussion-templates`

#### [`fof-discussion-templates.admin.permissions.manage_all_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_all_reply_templates%22)

> Manage reply templates for all discussions

```diff
-Керувати шаблонами відповідей для всіх обговорень дискусій
+Керувати шаблонами відповідей для всіх обговорень
```

Керувати шаблонами відповідей для всіх обговорень<del> дискусій</del>

#### [`fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates%22)

> Manage reply templates for their discussions

```diff
-Керувати шаблонами відповідей для своїх дискусій
+Керувати шаблонами відповідей для власних обговорень
```

Керувати шаблонами відповідей для <del>своїх</del><ins>власних</ins> <del>дискусій</del><ins>обговорень</ins>

#### [`fof-discussion-templates.admin.settings.no_tag_template`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.settings.no_tag_template%22)

> Default template (used when discussion started with no tags selected):

```diff
-Шаблон за налаштуванням (використовується, коли обговорення розпочалося без обраних тегів):
+Шаблон за замовчуванням (використовується, коли обговорення розпочалося без обраних тегів):
```

Шаблон за <del>налаштуванням</del><ins>замовчуванням</ins> (використовується, коли обговорення розпочалося без обраних тегів):

#### [`fof-discussion-templates.admin.tag_template_modal.customize_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.tag_template_modal.customize_text%22)

> Manage a template for new discussions in this tag.

```diff
-Керування шаблоном для нових дискусій у цьому тезі.
+Керування шаблоном для нових обговорень у цьому тезі.
```

Керування шаблоном для нових <del>дискусій</del><ins>обговорень</ins> у цьому тезі.

#### [`fof-discussion-templates.admin.tag_template_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.tag_template_modal.title%22)

> Discussion Template

```diff
-Шаблон дискусії
+Шаблон обговорення
```

Шаблон <del>дискусії</del><ins>обговорення</ins>

#### [`fof-discussion-templates.admin.tags.tag_template_heading`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_heading%22)

> Discussion Template

```diff
-Шаблон для дискусії
+Шаблон для обговорення
```

Шаблон для <del>дискусії</del><ins>обговорення</ins>

#### [`fof-discussion-templates.admin.tags.tag_template_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/uk/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_text%22)

> Manage a template for new discussions in this tag.

```diff
-Керування шаблоном для нових дискусій у цьому тезі.
+Керування шаблоном для нових обговорень у цьому тезі.
```

Керування шаблоном для нових <del>дискусій</del><ins>обговорень</ins> у цьому тезі.


### `fof-discussion-views`

#### [`fof-discussion-views.admin.permissions.reset_views_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/uk/?q=context%3A%3D%22fof-discussion-views.admin.permissions.reset_views_label%22)

> Set discussion views

```diff
-Встановити дискусійні погляди
+Скидати кількість переглядів обговорення
```

#### [`fof-discussion-views.forum.modal_resetviews.title`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/uk/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.title%22)

> Reset discussion view count

```diff
-Скинути лічильник переглядів дискусії
+Скинути лічильник переглядів обговоренні
```

Скинути лічильник переглядів <del>дискусії</del><ins>обговоренні</ins>


### `fof-doorman`

#### [`fof-doorman.admin.list.content.uses.used_times`](https://weblate.rob006.net/translate/flarum2/fof-doorman/uk/?q=context%3A%3D%22fof-doorman.admin.list.content.uses.used_times%22)

> {remaining, plural, =0 {Unlimited uses} one {{remainingUses} use left} other {{remainingUses} uses left}}

```diff
-{remaining, plural, =0 {Необмежене використання} one {{remainingUses} використання} other {{remainingUses} використань}}
+{remaining, plural, =0 {Необмежене використання} one {Залишилося використань: {remainingUses}} other {Залишилося використань: {remainingUses}}}
```

{remaining, plural, =0 {Необмежене використання} one <del>{{remainingUses}</del><ins>{Залишилося</ins> <del>використання}</del><ins>використань: {remainingUses}}</ins> other <del>{{remainingUses}</del><ins>{Залишилося</ins> <del>використань}}</del><ins>використань: {remainingUses}}}</ins>


### `fof-drafts`

#### [`fof-drafts.forum.dropdown.scheduled_icon_tooltip_formatter`](https://weblate.rob006.net/translate/flarum2/fof-drafts/uk/?q=context%3A%3D%22fof-drafts.forum.dropdown.scheduled_icon_tooltip_formatter%22)

> L \[at\] LT

```diff
-L [at] LT
+L [о] LT
```

L <del>\[at\]</del><ins>\[о\]</ins> LT

#### [`fof-drafts.forum.dropdown.tooltip`](https://weblate.rob006.net/translate/flarum2/fof-drafts/uk/?q=context%3A%3D%22fof-drafts.forum.dropdown.tooltip%22)

> =&gt; fof-drafts.forum.dropdown.title

```diff
-Чернетки
+=> fof-drafts.forum.dropdown.title
```


### `fof-filter`

#### [`fof-filter.admin.input.switch.merge`](https://weblate.rob006.net/translate/flarum2/fof-filter/uk/?q=context%3A%3D%22fof-filter.admin.input.switch.merge%22)

> Auto merge double posts

```diff
-Автоматичне об'єднання подвійних постів
+Автоматичне об'єднання подвійних дописів
```

Автоматичне об'єднання подвійних <del>постів</del><ins>дописів</ins>


### `fof-follow-tags`

#### [`fof-follow-tags.admin.settings.following_page_default_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.following_page_default_label%22)

> Default Following Page Filtering

```diff
-Фільтрація наступних сторінок за налаштуванням
+Фільтрація наступних сторінок за замовчуванням
```

Фільтрація наступних сторінок за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`fof-follow-tags.forum.settings.notify_new_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_discussion_label%22)

> Someone creates a discussion in a tag I'm following

```diff
-Хтось створює дискусію в тезі, за яким я стежу
+Хтось створює обговорення в тезі, за яким я стежу
```

Хтось створює <del>дискусію</del><ins>обговорення</ins> в тезі, за яким я стежу

#### [`fof-follow-tags.forum.settings.notify_new_discussion_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_discussion_tag_label%22)

> Someone re-tags a discussion to a tag I'm following

```diff
-Хтось перетегує дискусію в тег, за яким я стежу
+Хтось перетегує обговорення в тег, за яким я стежу
```

Хтось перетегує <del>дискусію</del><ins>обговорення</ins> в тег, за яким я стежу

#### [`fof-follow-tags.forum.sub_controls.following_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.following_text%22)

> Be notified of all new discussions.

```diff
-Отримувати повідомлення про всі нові дискусії.
+Отримувати повідомлення про всі нові обговорення.
```

Отримувати повідомлення про всі нові <del>дискусії.</del><ins>обговорення.</ins>

#### [`fof-follow-tags.forum.user.settings.filter_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.user.settings.filter_label%22)

> What to show by default in the Following page

```diff
-Що показувати за налаштуванням на наступній сторінці
+Що показувати за замовчуванням на наступній сторінці
```

Що показувати за <del>налаштуванням</del><ins>замовчуванням</ins> на наступній сторінці

#### [`fof-follow-tags.ref.filtering_options.none`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.ref.filtering_options.none%22)

> Followed Discussions

```diff
-Стеження за дискусіями
+Стеження за обговореннями
```

Стеження за <del>дискусіями</del><ins>обговореннями</ins>


### `fof-forum-statistics-widget`

#### [`fof-forum-statistics-widget.admin.permissions.view_discussions_count_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/uk/?q=context%3A%3D%22fof-forum-statistics-widget.admin.permissions.view_discussions_count_label%22)

> View forum statistics widget discussions count

```diff
-Перегляд статистики форуму, віджет підрахунку дискусій
+Переглядати кількість обговорень у віджеті статистики форуму
```

#### [`fof-forum-statistics-widget.forum.navbar.discussions_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/uk/?q=context%3A%3D%22fof-forum-statistics-widget.forum.navbar.discussions_count%22)

> Discussions: {discussionsCount}

```diff
-Дискусії: {discussionsCount}
+Обговорення: {discussionsCount}
```

<del>Дискусії:</del><ins>Обговорення:</ins> {discussionsCount}


### `fof-gamification`

#### [`fof-gamification.admin.page.votes.alternate_layout`](https://weblate.rob006.net/translate/flarum2/fof-gamification/uk/?q=context%3A%3D%22fof-gamification.admin.page.votes.alternate_layout%22)

> Use alternate voting layout on discussions list

```diff
-Використовувати альтернативну схему голосування у списку дискусій
+Використовувати альтернативну схему голосування у списку обговорень
```

Використовувати альтернативну схему голосування у списку <del>дискусій</del><ins>обговорень</ins>

#### [`fof-gamification.forum.user.card.points`](https://weblate.rob006.net/translate/flarum2/fof-gamification/uk/?q=context%3A%3D%22fof-gamification.forum.user.card.points%22)

> {count, plural, one { {count} point} other {{count} points}}

```diff
-{count, plural, one { {count} бал} other {{count} бали}}
+{count, plural, one {{count} бал} few {{count} бали} many {{count} балів} other {{count} бала}}
```

{count, plural, one <del>{ {count}</del><ins>{{count}</ins> бал}<ins> few {{count} бали} many {{count} балів}</ins> other {{count} <del>бали}}</del><ins>бала}}</ins>


### `fof-geoip`

#### [`fof-geoip.admin.settings.access_key_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.admin.settings.access_key_label%22)

> Access Key

```diff
-Access Key
+Ключ доступу
```

#### [`fof-geoip.admin.settings.service_ipapi_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi_description%22)

> Use &lt;b&gt;http://ip-api.com&lt;/b&gt; to make up to 45 lookups per minute for free. If you make more, requests will be queued and looked up once the time window resets.

```diff
-Використовуйте <b>https://ip-api.com</b>, щоб робити до 45 пошуків за хвилину безкоштовно. Якщо ви зробите більше, ваша IP-адреса може потрапити в чорний список, після чого ви зможете розблокувати її.
+Використовуйте <b>http://ip-api.com</b>, щоб безкоштовно виконувати до 45 запитів за хвилину. Якщо запитів буде більше, їх буде додано до черги й виконано після поновлення ліміту.
```

Використовуйте <del>&lt;b&gt;https://ip-api.com&lt;/b&gt;,</del><ins>&lt;b&gt;http://ip-api.com&lt;/b&gt;,</ins> щоб <del>робити</del><ins>безкоштовно виконувати</ins> до 45 <del>пошуків</del><ins>запитів</ins> за<del> хвилину</del> <del>безкоштовно.</del><ins>хвилину.</ins> Якщо <del>ви</del><ins>запитів</ins> <del>зробите</del><ins>буде</ins> більше, <del>ваша</del><ins>їх</ins> <del>IP-адреса</del><ins>буде</ins> <del>може</del><ins>додано</ins> <del>потрапити</del><ins>до</ins> <del>в</del><ins>черги</ins> <del>чорний</del><ins>й</ins> <del>список,</del><ins>виконано</ins> після<del> чого ви зможете</del> <del>розблокувати</del><ins>поновлення</ins> <del>її.</del><ins>ліміту.</ins>


### `fof-html-errors`

#### [`fof-html-errors.admin.settings.error.403`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/uk/?q=context%3A%3D%22fof-html-errors.admin.settings.error.403%22)

> 403 Forbidden

```diff
-403 Forbidden
+403 Доступ заборонено
```

403 <del>Forbidden</del><ins>Доступ заборонено</ins>

#### [`fof-html-errors.admin.settings.error.404`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/uk/?q=context%3A%3D%22fof-html-errors.admin.settings.error.404%22)

> 404 Not Found

```diff
-404 Not Found
+404 Не знайдено
```

404 <del>Not</del><ins>Не</ins> <del>Found</del><ins>знайдено</ins>

#### [`fof-html-errors.admin.settings.error.500`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/uk/?q=context%3A%3D%22fof-html-errors.admin.settings.error.500%22)

> 500 Internal Server Error

```diff
-500 Internal Server Error
+500 Внутрішня помилка сервера
```

500 <del>Internal</del><ins>Внутрішня</ins> <del>Server</del><ins>помилка</ins> <del>Error</del><ins>сервера</ins>

#### [`fof-html-errors.admin.settings.error.503`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/uk/?q=context%3A%3D%22fof-html-errors.admin.settings.error.503%22)

> 503 Service Unavailable (Down For Maintenance)

```diff
-503 Service Unavailable (Down For Maintenance)
+503 Сервіс недоступний (технічне обслуговування)
```

503 <del>Service Unavailable</del><ins>Сервіс</ins> <del>(Down</del><ins>недоступний</ins> <del>For</del><ins>(технічне</ins> <del>Maintenance)</del><ins>обслуговування)</ins>

#### [`fof-html-errors.admin.settings.placeholder.empty_for_default`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/uk/?q=context%3A%3D%22fof-html-errors.admin.settings.placeholder.empty_for_default%22)

> Leave empty for the default Flarum error page

```diff
-Залишити порожньою сторінку помилок Flarum за налаштуванням
+Залишити порожньою сторінку помилок Flarum за замовчуванням
```

Залишити порожньою сторінку помилок Flarum за <del>налаштуванням</del><ins>замовчуванням</ins>


### `fof-mason`

#### [`fof-mason.admin.permissions.fill-fields`](https://weblate.rob006.net/translate/flarum2/fof-mason/uk/?q=context%3A%3D%22fof-mason.admin.permissions.fill-fields%22)

> Fill fields on new discussions

```diff
-Заповніть поля для нових дискусій
+Заповнювати поля нових обговорень
```

<del>Заповніть</del><ins>Заповнювати</ins> поля<del> для</del> нових <del>дискусій</del><ins>обговорень</ins>

#### [`fof-mason.admin.permissions.see-own-fields`](https://weblate.rob006.net/translate/flarum2/fof-mason/uk/?q=context%3A%3D%22fof-mason.admin.permissions.see-own-fields%22)

> See fields on own existing discussions

```diff
-Дивіться поля у власних існуючих дискусіях
+Переглядати поля власних наявних обговорень
```

<del>Дивіться</del><ins>Переглядати</ins> поля<del> у</del> власних <del>існуючих</del><ins>наявних</ins> <del>дискусіях</del><ins>обговорень</ins>

#### [`fof-mason.admin.permissions.update-other-fields`](https://weblate.rob006.net/translate/flarum2/fof-mason/uk/?q=context%3A%3D%22fof-mason.admin.permissions.update-other-fields%22)

> Update fields of any discussion

```diff
-Оновлення полів будь-якої дискусії
+Оновлювати поля будь-якого обговорення
```

#### [`fof-mason.admin.permissions.update-own-fields`](https://weblate.rob006.net/translate/flarum2/fof-mason/uk/?q=context%3A%3D%22fof-mason.admin.permissions.update-own-fields%22)

> Update fields of own discussion

```diff
-Оновлення полів власних дискусій
+Оновлювати поля власних обговорень
```

<del>Оновлення</del><ins>Оновлювати</ins> <del>полів</del><ins>поля</ins> власних <del>дискусій</del><ins>обговорень</ins>

#### [`fof-mason.admin.settings.fields-section-title-placeholder`](https://weblate.rob006.net/translate/flarum2/fof-mason/uk/?q=context%3A%3D%22fof-mason.admin.settings.fields-section-title-placeholder%22)

> By default no title will be shown

```diff
-За налаштуванням заголовок не відображається
+За замовчуванням заголовок не відображається
```

За <del>налаштуванням</del><ins>замовчуванням</ins> заголовок не відображається

#### [`fof-mason.admin.settings.tags-field-name-placeholder`](https://weblate.rob006.net/translate/flarum2/fof-mason/uk/?q=context%3A%3D%22fof-mason.admin.settings.tags-field-name-placeholder%22)

> =&gt; fof-mason.forum.tags.tags-label

```diff
-=> xsoft-mason-tag.forum.tags.tags-label
+=> fof-mason.forum.tags.tags-label
```

=&gt; <del>xsoft-mason-tag.forum.tags.tags-label</del><ins>fof-mason.forum.tags.tags-label</ins>


### `fof-merge-discussions`

#### [`fof-merge-discussions.admin.settings.search_result_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_help%22)

> How many discussions should be returned when searching within the \`Merge Discussions\` modal.

```diff
-Скільки обговорень має бути видано при пошуку за модальністю «Об'єднати обговорення».
+Кількість обговорень у результатах пошуку у вікні `Об’єднати обговорення`.
```

<del>Скільки</del><ins>Кількість</ins> обговорень<del> має бути</del> <del>видано</del><ins>у</ins> <del>при</del><ins>результатах</ins> пошуку <del>за</del><ins>у</ins> <del>модальністю</del><ins>вікні</ins> <del>«Об'єднати</del><ins>\`Об’єднати</ins> <del>обговорення».</del><ins>обговорення\`.</ins>

#### [`fof-merge-discussions.admin.settings.search_result_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_label%22)

> Merge Discussion Search Limit

```diff
-Об'єднати дискусію з обмеженням пошуку
+Ліміт результатів пошуку обговорень для об’єднання
```

#### [`fof-merge-discussions.api.error.deleting_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.api.error.deleting_failed%22)

> Failed to delete empty discussions.

```diff
-Не вдалося видалити порожні дискусії.
+Не вдалося видалити порожні обговорення.
```

Не вдалося видалити порожні <del>дискусії.</del><ins>обговорення.</ins>

#### [`fof-merge-discussions.api.error.merging_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.api.error.merging_failed%22)

> Failed to merge discussions.

```diff
-Не вдалося об'єднати дискусії.
+Не вдалося об'єднати обговорення.
```

Не вдалося об'єднати <del>дискусії.</del><ins>обговорення.</ins>

#### [`fof-merge-discussions.api.error.updating_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.api.error.updating_failed%22)

> Failed to update discussion details.

```diff
-Не вдалося оновити деталі дискусії.
+Не вдалося оновити деталі обговорення.
```

Не вдалося оновити деталі <del>дискусії.</del><ins>обговорення.</ins>

#### [`fof-merge-discussions.email.merged.subject`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.email.merged.subject%22)

> Your discussion "{merged\_discussion\_title}" was merged

```diff
-Вашу дискусію «{merged_discussion_title}» було об'єднано
+Ваше обговорення «{merged_discussion_title}» було об'єднано
```

<del>Вашу</del><ins>Ваше</ins> <del>дискусію</del><ins>обговорення</ins> «{merged\_discussion\_title}» було об'єднано

#### [`fof-merge-discussions.forum.modal.ordering_date_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_date_help%22)

> Posts in the resulting discussion are reordered by their individual creation date

```diff
-Дописи в результуючій дискусії впорядковуються за індивідуальною датою створення
+Дописи в об’єднаному обговоренні впорядковуються за датою їх створення
```

Дописи в <del>результуючій</del><ins>об’єднаному</ins> <del>дискусії</del><ins>обговоренні</ins> впорядковуються за<del> індивідуальною</del> датою<ins> їх</ins> створення

#### [`fof-merge-discussions.forum.modal.ordering_date_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_date_label%22)

> Merge posts by creation date

```diff
-Об'єднати пости за датою створення
+Об'єднати дописи за датою створення
```

Об'єднати <del>пости</del><ins>дописи</ins> за датою створення

#### [`fof-merge-discussions.forum.modal.ordering_suffix_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_suffix_help%22)

> Posts that are merged into the surviving discussion will be appended at the end of the discussion

```diff
-Дописи, які будуть об'єднані в дискусію, що збереглася, будуть додані в кінці дискусії
+Дописи, об’єднані з обговоренням, що залишилося, буде додано в його кінець
```

Дописи, <del>які будуть об'єднані</del><ins>об’єднані</ins> <del>в</del><ins>з</ins> <del>дискусію,</del><ins>обговоренням,</ins> що <del>збереглася,</del><ins>залишилося,</ins> <del>будуть</del><ins>буде</ins> <del>додані</del><ins>додано</ins> в <del>кінці</del><ins>його</ins> <del>дискусії</del><ins>кінець</ins>

#### [`fof-merge-discussions.forum.modal.ordering_suffix_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_suffix_label%22)

> Add merged posts to the end of the discussion

```diff
-Додати об'єднані пости в кінець дискусії
+Додати об'єднані дописи в кінець обговорення
```

Додати об'єднані <del>пости</del><ins>дописи</ins> в кінець <del>дискусії</del><ins>обговорення</ins>

#### [`fof-merge-discussions.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.modal.title%22)

> Merge Discussions

```diff
-Об'єднати дискусії
+Об'єднати обговорення
```

Об'єднати <del>дискусії</del><ins>обговорення</ins>

#### [`fof-merge-discussions.forum.modal.type_from_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_from_label%22)

> Merge this discussion into another

```diff
-Об'єднати цю дискусію в іншу
+Об’єднати це обговорення з іншим
```

#### [`fof-merge-discussions.forum.notification.preferences.discussion_merged`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/uk/?q=context%3A%3D%22fof-merge-discussions.forum.notification.preferences.discussion_merged%22)

> Someone merges one of my discussions with another

```diff
-Хтось зливає одну мою дискусію з іншою
+Хтось об’єднує одне з моїх обговорень з іншим
```

Хтось <del>зливає</del><ins>об’єднує</ins> <del>одну</del><ins>одне</ins> <del>мою</del><ins>з</ins> <del>дискусію</del><ins>моїх обговорень</ins> з <del>іншою</del><ins>іншим</ins>


### `fof-moderator-notes`

#### [`fof-moderator-notes.api.auto_note`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/uk/?q=context%3A%3D%22fof-moderator-notes.api.auto_note%22)

> \_I switched to this user:\_ {reason}

```diff
-_I switched to this user:_ {reason}
+_Я перейшов до цього користувача:_ {reason}
```

<del>\_I</del><ins>\_Я</ins> <del>switched</del><ins>перейшов</ins> <del>to</del><ins>до</ins> <del>this</del><ins>цього</ins> <del>user:\_</del><ins>користувача:\_</ins> {reason}

#### [`fof-moderator-notes.api.auto_note_actor`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/uk/?q=context%3A%3D%22fof-moderator-notes.api.auto_note_actor%22)

> \_Switched to\_ @{username}: {reason}

```diff
-_Switched to_ @{username}: {reason}
+_Перейшов до_ @{username}: {reason}
```

<del>\_Switched</del><ins>\_Перейшов</ins> <del>to\_</del><ins>до\_</ins> @{username}: {reason}


### `fof-moderator-warnings`

#### [`fof-moderator-warnings.admin.permissions.delete_warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.admin.permissions.delete_warnings%22)

> Permanently delete moderator warnings

```diff
-Постійно видаляти попередження модераторів
+Видаляти попередження модераторів назавжди
```

<del>Постійно видаляти</del><ins>Видаляти</ins> попередження модераторів<ins> назавжди</ins>

#### [`fof-moderator-warnings.emails.post_warned.body`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.body%22)

> Hey {warnee\_display\_name}!
>
> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}} in {discussion\_title}
>
> The following reason was given:
>
> \---
>
> {public\_comment}
>

```diff
-Агов, {warnee_display_name}!
+Вітаємо, {warnee_display_name}!

-{warner_display_name} попередив вас {strikes, plural, one {# strike} other {# strikes}} в {discussion_title}.
+Користувач {warner_display_name} надав вам попередження в обговоренні {discussion_title}; {strikes, plural, one {штрафних балів: #} other {штрафних балів: #}}.

-Була вказана наступна причина:
+Указана причина:

 ---

 {public_comment}

```

<del>Агов,</del><ins>Вітаємо,</ins> {warnee\_display\_name}!<br /><br /><ins>Користувач </ins>{warner\_display\_name} <del>попередив</del><ins>надав</ins> <del>вас</del><ins>вам попередження в обговоренні {discussion\_title};</ins> {strikes, plural, one <del>{#</del><ins>{штрафних</ins> <del>strike}</del><ins>балів:</ins> <del>other</del><ins>#}</ins> <del>{#</del><ins>other</ins> <del>strikes}}</del><ins>{штрафних</ins> <del>в</del><ins>балів:</ins> <del>{discussion\_title}.</del><ins>#}}.</ins><br /><br /><del>Була вказана наступна</del><ins>Указана</ins> причина:<br /><br />---<br /><br />{public\_comment}<br />

#### [`fof-moderator-warnings.emails.post_warned.subject`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}} in {discussion\_title}

```diff
-{warner_display_name} попередив вас {strikes, plural, one {# strike} other {# strikes}} у {discussion_title}
+Користувач {warner_display_name} надав вам попередження в обговоренні {discussion_title}; {strikes, plural, one {штрафних балів: #} other {штрафних балів: #}}
```

<ins>Користувач </ins>{warner\_display\_name} <del>попередив</del><ins>надав</ins> <del>вас</del><ins>вам попередження в обговоренні {discussion\_title};</ins> {strikes, plural, one <del>{#</del><ins>{штрафних</ins> <del>strike}</del><ins>балів:</ins> <del>other</del><ins>#}</ins> <del>{#</del><ins>other</ins> <del>strikes}}</del><ins>{штрафних</ins> <del>у</del><ins>балів:</ins> <del>{discussion\_title}</del><ins>#}}</ins>

#### [`fof-moderator-warnings.emails.user_warned.body`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.body%22)

> Hey {warnee\_display\_name}!
>
> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}
>
> The following reason was given:
>
> \---
>
> {public\_comment}
>

```diff
-Агов, {warnee_display_name}!
+Вітаємо, {warnee_display_name}!

-{warner_display_name} попередив вас {strikes, plural, one {# strike} other {# strikes}} 
+Користувач {warner_display_name} надав вам попередження; {strikes, plural, one {штрафних балів: #} other {штрафних балів: #}}.

-Була вказана наступна причина:
+Указана причина:

 ---

 {public_comment}

```

<del>Агов,</del><ins>Вітаємо,</ins> {warnee\_display\_name}!<br /><br /><ins>Користувач </ins>{warner\_display\_name} <del>попередив</del><ins>надав</ins> <del>вас</del><ins>вам попередження;</ins> {strikes, plural, one <del>{#</del><ins>{штрафних</ins> <del>strike}</del><ins>балів:</ins> <del>other</del><ins>#}</ins> <del>{#</del><ins>other</ins> <del>strikes}} <br /><br />Була</del><ins>{штрафних</ins> <del>вказана</del><ins>балів:</ins> <del>наступна</del><ins>#}}.<br /><br />Указана</ins> причина:<br /><br />---<br /><br />{public\_comment}<br />

#### [`fof-moderator-warnings.emails.user_warned.subject`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}

```diff
-{warner_display_name} попередив вас з {strikes, plural, one {# strike} other {# strikes}}
+Користувач {warner_display_name} надав вам попередження; {strikes, plural, one {штрафних балів: #} other {штрафних балів: #}}
```

<ins>Користувач </ins>{warner\_display\_name} <del>попередив</del><ins>надав</ins> <del>вас</del><ins>вам</ins> <del>з</del><ins>попередження;</ins> {strikes, plural, one <del>{#</del><ins>{штрафних</ins> <del>strike}</del><ins>балів: #}</ins> other <del>{#</del><ins>{штрафних</ins> <del>strikes}}</del><ins>балів: #}}</ins>

#### [`fof-moderator-warnings.forum.notifications.warning_no_strikes_text`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_no_strikes_text%22)

> You were warned by {mod\_username} (no strikes)

```diff
-Ви отримали попередження від {mod_username} (без страйків)
+Ви отримали попередження від {mod_username} (без штрафних балів)
```

Ви отримали попередження від {mod\_username} (без <del>страйків)</del><ins>штрафних балів)</ins>

#### [`fof-moderator-warnings.forum.notifications.warning_text`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_text%22)

> {strikes, plural, one {You were warned with # strike by {mod\_username}} other {You were warned with # strikes by {mod\_username}}}

```diff
-{strikes, plural, one {Вас попередили за допомогою # страйку від {mod_username}} other {Вас попередили за допомогою # страйків від {mod_username}}}
+{strikes, plural, one {Ви отримали попередження від {mod_username}; штрафних балів: #} other {Ви отримали попередження від {mod_username}; штрафних балів: #}}
```

{strikes, plural, one <del>{Вас</del><ins>{Ви</ins> <del>попередили</del><ins>отримали</ins> <del>за</del><ins>попередження</ins> <del>допомогою</del><ins>від</ins> <del>#</del><ins>{mod\_username};</ins> <del>страйку</del><ins>штрафних</ins> <del>від</del><ins>балів:</ins> <del>{mod\_username}}</del><ins>#}</ins> other <del>{Вас</del><ins>{Ви</ins> <del>попередили</del><ins>отримали</ins> <del>за</del><ins>попередження</ins> <del>допомогою</del><ins>від</ins> <del>#</del><ins>{mod\_username};</ins> <del>страйків</del><ins>штрафних</ins> <del>від</del><ins>балів:</ins> <del>{mod\_username}}}</del><ins>#}}</ins>

#### [`fof-moderator-warnings.forum.post.warning`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.post.warning%22)

> {strikes, plural, one {Warned with # strike by {mod\_username}} other {Warned with # strikes by {mod\_username}}}

```diff
-{strikes, plural, one {Ви отримали попередження від {mod_username}} other {Ви отримали попередження від {mod_username}}}
+{strikes, plural, one {Попередження від {mod_username}; штрафних балів: #} other {Попередження від {mod_username}; штрафних балів: #}}
```

{strikes, plural, one <del>{Ви</del><ins>{Попередження</ins> <del>отримали</del><ins>від</ins> <del>попередження</del><ins>{mod\_username};</ins> <del>від</del><ins>штрафних</ins> <del>{mod\_username}}</del><ins>балів: #}</ins> other <del>{Ви</del><ins>{Попередження</ins> <del>отримали</del><ins>від</ins> <del>попередження</del><ins>{mod\_username};</ins> <del>від</del><ins>штрафних</ins> <del>{mod\_username}}}</del><ins>балів: #}}</ins>

#### [`fof-moderator-warnings.forum.post.warning_no_strikes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.post.warning_no_strikes%22)

> Warned with no strikes by {mod\_username}

```diff
-Попередження без попереджень від {mod_username}
+Попередження без штрафних балів від {mod_username}
```

Попередження без <del>попереджень</del><ins>штрафних балів</ins> від {mod\_username}

#### [`fof-moderator-warnings.forum.validation.invalid_strike_count`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.validation.invalid_strike_count%22)

> The number of strikes must be an integer between 0 and 5.

```diff
-Кількість попереджень має бути цілим числом від 0 до 5.
+Кількість штрафних балів має бути цілим числом від 0 до 5.
```

Кількість <del>попереджень</del><ins>штрафних балів</ins> має бути цілим числом від 0 до 5.

#### [`fof-moderator-warnings.forum.validation.public_comment_required`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.validation.public_comment_required%22)

> You most provide a public comment.

```diff
-Ви найбільше надаєте публічних коментарів.
+Додайте публічний коментар.
```

#### [`fof-moderator-warnings.forum.warning_list.no_warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.no_warnings%22)

> It looks like there are no warnings here.

```diff
-Схоже, що тут не обійшлося без застережень.
+Схоже, тут немає попереджень.
```

Схоже, <del>що </del>тут<del> не обійшлося</del> <del>без</del><ins>немає</ins> <del>застережень.</del><ins>попереджень.</ins>

#### [`fof-moderator-warnings.forum.warning_list.warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings%22)

> {strikes, plural, one {Moderator Warnings: # Strike Received} other {Moderator Warnings: # Strikes Received}}

```diff
-{strikes, plural, one {Попередження модератора: попередження отримано} other {Попередження модератора: попередження отримано}}
+{strikes, plural, one {Попередження модератора: отримано штрафних балів — #} other {Попередження модератора: отримано штрафних балів — #}}
```

{strikes, plural, one {Попередження модератора: <del>попередження</del><ins>отримано</ins> <del>отримано}</del><ins>штрафних балів — #}</ins> other {Попередження модератора: <del>попередження</del><ins>отримано</ins> <del>отримано}}</del><ins>штрафних балів — #}}</ins>

#### [`fof-moderator-warnings.forum.warning_list.warnings_no_strikes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings_no_strikes%22)

> Moderator Warnings: No Strikes Received

```diff
-Попередження модератора: попередження не отримано
+Попередження модератора: штрафних балів немає
```

Попередження модератора: <del>попередження</del><ins>штрафних</ins> <del>не</del><ins>балів</ins> <del>отримано</del><ins>немає</ins>

#### [`fof-moderator-warnings.forum.warning_list_item.linked_post`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.linked_post%22)

> Linked Post

```diff
-Посилання на публікацію
+Пов’язаний допис
```

#### [`fof-moderator-warnings.forum.warning_list_item.private_comment`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.private_comment%22)

> Moderator-Visible Comments

```diff
-Модератор - видимі коментарі
+Коментарі для модераторів
```

#### [`fof-moderator-warnings.forum.warning_modal.public_comment_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.public_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will be visible to the user and other moderators.

```diff
-Чому <strong>{username}</strong> отримує ці попередження? Ці коментарі будуть видимому користувачеві та іншим модераторам.
+Чому <strong>{username}</strong> отримує ці попередження? Ці коментарі бачитимуть користувач та інші модератори.
```

Чому &lt;strong&gt;{username}&lt;/strong&gt; отримує ці попередження? Ці коментарі <del>будуть видимому</del><ins>бачитимуть</ins> <del>користувачеві</del><ins>користувач</ins> та <del>іншим</del><ins>інші</ins> <del>модераторам.</del><ins>модератори.</ins>

#### [`fof-moderator-warnings.forum.warning_modal.strikes_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/uk/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.strikes_heading%22)

> How many strikes should be applied?

```diff
-Скільки попереджень має бути?
+Скільки штрафних балів нарахувати?
```

Скільки <del>попереджень</del><ins>штрафних</ins> <del>має</del><ins>балів</ins> <del>бути?</del><ins>нарахувати?</ins>


### `fof-oauth`

#### [`fof-oauth.forum.user.settings.linked-account.help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.help%22)

> These linked accounts allow you to sign into the forum using other providers.

```diff
-Ці пов'язані акаунти дозволяють входити на форум за допомогою інших провайдерів.
+Ці пов'язані облікові записи дозволяють входити на форум за допомогою інших провайдерів.
```

Ці пов'язані <del>акаунти</del><ins>облікові записи</ins> дозволяють входити на форум за допомогою інших провайдерів.

#### [`fof-oauth.ref.settings.app_id`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.ref.settings.app_id%22)

> App ID

```diff
-App ID
+Ідентифікатор застосунку
```

#### [`fof-oauth.ref.settings.app_secret`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.ref.settings.app_secret%22)

> App Secret

```diff
-App Secret
+Секрет застосунку
```

#### [`fof-oauth.ref.settings.client_id`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.ref.settings.client_id%22)

> Client ID

```diff
-Client ID
+Ідентифікатор клієнта
```

#### [`fof-oauth.ref.settings.client_secret`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.ref.settings.client_secret%22)

> Client Secret

```diff
-Client Secret
+Секрет клієнта
```


### `fof-polls`

#### [`fof-polls.forum.max_votes_allowed`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.max_votes_allowed%22)

> Poll allows voting for {max, plural, one {# option} other {# options}}.

```diff
-В опитуванні можна проголосувати за {max, plural, one {# варіант} other {# варіанти}}.
+В опитуванні можна проголосувати за {max, plural, one {# варіант} few {# варіанти} many {# варіантів} other {# варіанта}}.
```

В опитуванні можна проголосувати за {max, plural, one {# варіант} <ins>few {# варіанти} many {# варіантів} </ins>other {# <del>варіанти}}.</del><ins>варіанта}}.</ins>

#### [`fof-polls.forum.poll.total_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll.total_votes%22)

> {count, plural, one {# vote was given} other {# votes were given}}

```diff
-{count, plural, one {# віддано голосів} other {# було віддано голосів}}
+{count, plural, one {Віддано # голос} few {Віддано # голоси} many {Віддано # голосів} other {Віддано # голосу}}
```

{count, plural, one <del>{#</del><ins>{Віддано</ins> <del>віддано</del><ins># голос} few {Віддано # голоси} many {Віддано #</ins> голосів} other<del> {#</del> <del>було</del><ins>{Віддано</ins> <del>віддано</del><ins>#</ins> <del>голосів}}</del><ins>голосу}}</ins>

#### [`fof-polls.forum.polls_count`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.polls_count%22)

> {count, plural, one { {count} vote} other {{count} votes}}

```diff
-{count, plural, one { {count} голос} other {{count} голосів}}
+{count, plural, one {{count} голос} few {{count} голоси} many {{count} голосів} other {{count} голосу}}
```

{count, plural, one <del>{ {count}</del><ins>{{count}</ins> голос}<ins> few {{count} голоси} many {{count} голосів}</ins> other {{count} <del>голосів}}</del><ins>голосу}}</ins>

#### [`fof-polls.forum.tooltip.votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.tooltip.votes%22)

> {count, plural, one {# vote} other {# votes}}

```diff
-{count, plural, one {# голос} other {# голосів}}
+{count, plural, one {# голос} few {# голоси} many {# голосів} other {# голосу}}
```

{count, plural, one {# голос} <ins>few {# голоси} many {# голосів} </ins>other {# <del>голосів}}</del><ins>голосу}}</ins>


### `fof-reactions`

#### [`fof-reactions.admin.page.cdn.default-url`](https://weblate.rob006.net/translate/flarum2/fof-reactions/uk/?q=context%3A%3D%22fof-reactions.admin.page.cdn.default-url%22)

> Default: {url}

```diff
-За налаштуванням: {url}
+За замовчуванням: {url}
```

За <del>налаштуванням:</del><ins>замовчуванням:</ins> {url}

#### [`fof-reactions.forum.modal.anonymous_count`](https://weblate.rob006.net/translate/flarum2/fof-reactions/uk/?q=context%3A%3D%22fof-reactions.forum.modal.anonymous_count%22)

> {count, plural, one {# anonymous user} other {# anonymous users}}

```diff
-{count, plural, one {# анонімний користувач} other {# анонімні користувачі}}
+{count, plural, one {# анонімний користувач} few {# анонімні користувачі} many {# анонімних користувачів} other {# анонімного користувача}}
```

{count, plural, one {# анонімний користувач} <del>other</del><ins>few</ins> {# анонімні <del>користувачі}}</del><ins>користувачі} many {# анонімних користувачів} other {# анонімного користувача}}</ins>

#### [`fof-reactions.forum.reacting-own-post`](https://weblate.rob006.net/translate/flarum2/fof-reactions/uk/?q=context%3A%3D%22fof-reactions.forum.reacting-own-post%22)

> You cannot react to your own post

```diff
-Ви не можете реагувати на власний пост
+Ви не можете реагувати на власний допис
```

Ви не можете реагувати на власний <del>пост</del><ins>допис</ins>


### `fof-recaptcha`

#### [`fof-recaptcha.admin.permissions.post_without_captcha`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/uk/?q=context%3A%3D%22fof-recaptcha.admin.permissions.post_without_captcha%22)

> Create posts and discussions without captcha

```diff
-Створювати дописи та дискусії без CAPTCHA
+Створювати дописи та обговорення без CAPTCHA
```

Створювати дописи та <del>дискусії</del><ins>обговорення</ins> без CAPTCHA

#### [`fof-recaptcha.admin.settings.site_key_label`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/uk/?q=context%3A%3D%22fof-recaptcha.admin.settings.site_key_label%22)

> Site Key

```diff
-Site Key
+Ключ сайту
```


### `fof-rich-text`

#### [`fof-rich-text.forum.settings.composer_heading`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/uk/?q=context%3A%3D%22fof-rich-text.forum.settings.composer_heading%22)

> Composer

```diff
-Composer
+Редактор
```


### `fof-sentry`

#### [`fof-sentry.admin.settings.dsn_backend_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.dsn_backend_help%22)

> Optional separate DSN exclusively for backend (PHP) errors. Useful for using a different Sentry project for backend errors, routing through a Relay for improved performance, or separating frontend and backend error tracking. If not set, the primary DSN above will be used for both.

```diff
-Цей DSN буде використовуватися тільки для помилок бекенда. Це корисно, якщо ви хочете використовувати інший проект для помилок бекенда або хочете використовувати Relay для надсилання помилок бекенда до Sentry (наприклад, для покращення продуктивності).
+Цей DSN буде використовуватися тільки для помилок бекенда. Це корисно, якщо ви хочете використовувати інший проєкт для помилок бекенда або хочете використовувати Relay для надсилання помилок бекенда до Sentry (наприклад, для покращення продуктивності).
```

Цей DSN буде використовуватися тільки для помилок бекенда. Це корисно, якщо ви хочете використовувати інший <del>проект</del><ins>проєкт</ins> для помилок бекенда або хочете використовувати Relay для надсилання помилок бекенда до Sentry (наприклад, для покращення продуктивності).

#### [`fof-sentry.admin.settings.environment_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.environment_label%22)

> Sentry Environment

```diff
-Sentry Environment
+Середовище Sentry
```

#### [`fof-sentry.admin.settings.javascript_replays_error_sample_rate`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_replays_error_sample_rate%22)

> Error-Triggered Replay Sample Rate

```diff
-Частота повторення помилок у інтерфейсі (0 - 100)
+Частка записів сеансів у разі помилки
```

<del>Частота</del><ins>Частка</ins> <del>повторення</del><ins>записів</ins> <del>помилок</del><ins>сеансів</ins> у<del> інтерфейсі (0</del> <del>-</del><ins>разі</ins> <del>100)</del><ins>помилки</ins>

#### [`fof-sentry.admin.settings.javascript_replays_session_sample_rate`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_replays_session_sample_rate%22)

> Session Replay Sample Rate

```diff
-Частота відтворення сеансів у зовнішньому інтерфейсі (0 - 100)
+Частка сеансів для запису
```

<del>Частота відтворення</del><ins>Частка</ins> сеансів<del> у зовнішньому інтерфейсі (0</del> <del>-</del><ins>для</ins> <del>100)</del><ins>запису</ins>

#### [`fof-sentry.admin.settings.javascript_trace_sample_rate`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_trace_sample_rate%22)

> Frontend Performance Monitoring Sample Rate

```diff
-Показник моніторингу ефективності фронт-енду (0 - 100)
+Частка вибірки моніторингу швидкодії клієнтської частини
```

#### [`fof-sentry.admin.settings.monitor_performance_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.monitor_performance_label%22)

> Backend Performance Monitoring Sample Rate

```diff
-Показник моніторингу внутрішньої ефективності (0 - 100)
+Частка вибірки моніторингу швидкодії серверної частини
```

#### [`fof-sentry.admin.settings.profile_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.profile_rate_help%22)

> Percentage of traced transactions to profile (relative to monitoring rate above). Example: If monitoring = 10% and profiling = 50%, then 5% of all requests are profiled. Profiling provides detailed function-level performance data. Performance impact: Profiling adds overhead and increases response time. See &lt;a&gt;Sentry's optimization guide&lt;/a&gt;. {icon} &lt;bold&gt;Requires Excimer extension (Linux only). Currently {icon}.&lt;/bold&gt;

```diff
-Це пов'язано зі швидкістю моніторингу продуктивності. Для того, щоб це спрацювало, моніторинг продуктивності має бути увімкнений.
-
-{br}✱ Увімкнення цієї функції впливає на час відгуку через накладні витрати на профілювання та надсилання запитів до Sentry. Дізнайтеся, як це виправити за адресою <a>https://docs.sentry.io/platforms/php/profiling/#improve-response-time</a>.
-{br}{icon} <bold>Для використання цієї функції потрібен профілювальник вибірки Вікіпедії Excimer, який доступний лише для Linux.</bold>.
-
+Відсоток трасованих транзакцій для профілювання відносно частки моніторингу вище. Наприклад, якщо моніторинг становить 10%, а профілювання — 50%, профілюватиметься 5% усіх запитів. Профілювання дає докладні дані про швидкодію окремих функцій. Воно створює додаткове навантаження та збільшує час відповіді. Див. <a>посібник з оптимізації Sentry</a>. {icon} <bold>Потрібне розширення Excimer (лише Linux). Поточний стан: {icon}.</bold>
```

<del>Це</del><ins>Відсоток</ins> <del>пов'язано</del><ins>трасованих</ins> <del>зі</del><ins>транзакцій</ins> <del>швидкістю</del><ins>для</ins> <del>моніторингу</del><ins>профілювання</ins> <del>продуктивності.</del><ins>відносно</ins> <del>Для</del><ins>частки</ins> <del>того,</del><ins>моніторингу</ins> <del>щоб</del><ins>вище.</ins> <del>це</del><ins>Наприклад,</ins> <del>спрацювало,</del><ins>якщо</ins> моніторинг<del> продуктивності має</del> <del>бути</del><ins>становить</ins> <del>увімкнений.<br /><br />{br}✱</del><ins>10%,</ins> <del>Увімкнення</del><ins>а</ins> <del>цієї</del><ins>профілювання</ins> <del>функції</del><ins>—</ins> <del>впливає</del><ins>50%,</ins> <del>на</del><ins>профілюватиметься</ins> <del>час</del><ins>5%</ins> <del>відгуку</del><ins>усіх</ins> <del>через</del><ins>запитів.</ins> <del>накладні</del><ins>Профілювання</ins> <del>витрати</del><ins>дає</ins> <del>на</del><ins>докладні</ins> <del>профілювання</del><ins>дані</ins> <del>та</del><ins>про</ins> <del>надсилання</del><ins>швидкодію</ins> <del>запитів</del><ins>окремих</ins> <del>до</del><ins>функцій.</ins> <del>Sentry.</del><ins>Воно</ins> <del>Дізнайтеся,</del><ins>створює</ins> <del>як</del><ins>додаткове</ins> <del>це</del><ins>навантаження</ins> <del>виправити</del><ins>та</ins> <del>за</del><ins>збільшує</ins> <del>адресою</del><ins>час</ins> <del>&lt;a&gt;https://docs.sentry.io/platforms/php/profiling/#improve-response-time&lt;/a&gt;.<br />{br}{icon}</del><ins>відповіді.</ins> <del>&lt;bold&gt;Для</del><ins>Див.</ins> <del>використання</del><ins>&lt;a&gt;посібник</ins> <del>цієї</del><ins>з</ins> <del>функції</del><ins>оптимізації</ins> <del>потрібен</del><ins>Sentry&lt;/a&gt;.</ins> <del>профілювальник</del><ins>{icon}</ins> <del>вибірки</del><ins>&lt;bold&gt;Потрібне</ins> <del>Вікіпедії</del><ins>розширення</ins> <del>Excimer,</del><ins>Excimer</ins> <del>який</del><ins>(лише</ins> <del>доступний</del><ins>Linux).</ins> <del>лише</del><ins>Поточний</ins> <del>для</del><ins>стан:</ins> <del>Linux.&lt;/bold&gt;.<br /></del><ins>{icon}.&lt;/bold&gt;</ins>

#### [`fof-sentry.admin.settings.profile_rate_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.profile_rate_label%22)

> Backend Profiling Sample Rate

```diff
-Рівень внутрішнього профілювання (0 - 100)
+Частка вибірки профілювання серверної частини
```

<del>Рівень</del><ins>Частка</ins> <del>внутрішнього</del><ins>вибірки</ins> профілювання<del> (0</del> <del>-</del><ins>серверної</ins> <del>100)</del><ins>частини</ins>


### `fof-share-social`

#### [`fof-share-social.admin.settings.default-option`](https://weblate.rob006.net/translate/flarum2/fof-share-social/uk/?q=context%3A%3D%22fof-share-social.admin.settings.default-option%22)

> Default share option

```diff
-Значення за налаштуванням
+Значення за замовчуванням
```

Значення за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`fof-share-social.admin.settings.default-option-help`](https://weblate.rob006.net/translate/flarum2/fof-share-social/uk/?q=context%3A%3D%22fof-share-social.admin.settings.default-option-help%22)

> Choosing a default option will convert the modal into a dropdown button.
> If "Native Share" is selected, it will only be shown if the browser supports it, otherwise behavior reverts to original modal.
>

```diff
-Якщо вибрати значення за налаштуванням, модальне вікно перетвориться на кнопку з випадаючим списком.
+Якщо вибрати значення за замовчуванням, модальне вікно перетвориться на кнопку з випадаючим списком.
 Якщо обрано як рідна опція для ділитися, то буде показано за умови якщо браузер підтримує її, інакше поведінка повернеться до початкового модального інтерфейсу.

```

Якщо вибрати значення за <del>налаштуванням,</del><ins>замовчуванням,</ins> модальне вікно перетвориться на кнопку з випадаючим списком.<br />Якщо обрано як рідна опція для ділитися, то буде показано за умови якщо браузер підтримує її, інакше поведінка повернеться до початкового модального інтерфейсу.<br />

#### [`fof-share-social.forum.discussion.share_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/fof-share-social/uk/?q=context%3A%3D%22fof-share-social.forum.discussion.share_dropdown_accessible_label%22)

> Toggle discussion share dropdown menu

```diff
-Переключити ділитися дискусією на спадне меню
+Відкрити або закрити спадне меню поширення обговорення
```

<del>Переключити ділитися</del><ins>Відкрити</ins> <del>дискусією</del><ins>або</ins> <del>на</del><ins>закрити</ins> спадне меню<ins> поширення обговорення</ins>


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.exclude_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags_help%22)

> By default any tag visible to guests will be indexed

```diff
-За налаштуванням будь-який тег, видимий гостям, буде проіндексовано
+За замовчуванням будь-який тег, видимий гостям, буде проіндексовано
```

За <del>налаштуванням</del><ins>замовчуванням</ins> будь-який тег, видимий гостям, буде проіндексовано

#### [`fof-sitemap.admin.settings.exclude_users_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_users_help%22)

> By default any user visible to guests will be indexed

```diff
-За налаштуванням індексується будь-який користувач, видимий для гостей
+За замовчуванням індексується будь-який користувач, видимий для гостей
```

За <del>налаштуванням</del><ins>замовчуванням</ins> індексується будь-який користувач, видимий для гостей

#### [`fof-sitemap.admin.settings.mode_help_multi`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_multi%22)

> Best for larger forums, starting at 10.000 items. Mult part, compressed sitemap files will be generated and stored in the /public folder

```diff
-Найкраще підходить для великих форумів, починаючи з 50 000 позицій. Стиснуті файли мапи сайту з кількох частин будуть створені та збережені в теці /public
+Найкраще підходить для великих форумів, починаючи з 10 000 елементів. Стиснуті файли карти сайту з кількох частин будуть створені та збережені в теці /public
```

Найкраще підходить для великих форумів, починаючи з <del>50</del><ins>10</ins> 000 <del>позицій.</del><ins>елементів.</ins> Стиснуті файли <del>мапи</del><ins>карти</ins> сайту з кількох частин будуть створені та збережені в теці /public

#### [`fof-sitemap.admin.settings.mode_help_runtime`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_runtime%22)

> For small forums, most likely on shared hosting environments, with discussions, users, tags and pages summed up being less than 10.000 items. The sitemap is generated on the fly at each request.

```diff
-Для невеликих форумів, швидше за все, у середовищах спільного хостингу, з дискуссіями, кількістю користувачів, тегів і сторінок у сумі становить менше 10 000 елементів. Карта сайту створюється на льоту за кожним запитом.
+Для невеликих форумів, зазвичай на спільному хостингу, де загальна кількість обговорень, користувачів, тегів і сторінок становить менше ніж 10 000. Карта сайту створюється під час кожного запиту.
```

Для невеликих форумів, <del>швидше за все, у</del><ins>зазвичай</ins> <del>середовищах</del><ins>на</ins> <del>спільного</del><ins>спільному</ins> хостингу, <del>з</del><ins>де</ins> <del>дискуссіями,</del><ins>загальна</ins> <del>кількістю</del><ins>кількість обговорень,</ins> користувачів, тегів і сторінок<del> у сумі</del> становить менше <del>10</del><ins>ніж</ins> <del>000</del><ins>10</ins> <del>елементів.</del><ins>000.</ins> Карта сайту створюється<del> на</del> <del>льоту</del><ins>під</ins> <del>за</del><ins>час</ins> <del>кожним</del><ins>кожного</ins> <del>запитом.</del><ins>запиту.</ins>

#### [`fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_label%22)

> Tag: Minimum number of discussions

```diff
-Тег: мінімальна кількість дискусій
+Тег: мінімальна кількість обговорень
```

Тег: мінімальна кількість <del>дискусій</del><ins>обговорень</ins>

#### [`fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_help%22)

> The minimum number of comments/posts a user must have for their profile to be included in the sitemap.

```diff
-Мінімальна кількість коментарів/постів, яку повинен мати користувач, щоб його профіль був включений до карти сайту.
+Мінімальна кількість коментарів/дописів, яку повинен мати користувач, щоб його профіль був включений до карти сайту.
```

Мінімальна кількість <del>коментарів/постів,</del><ins>коментарів/дописів,</ins> яку повинен мати користувач, щоб його профіль був включений до карти сайту.

#### [`fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/uk/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_label%22)

> User: Minimum number of comments/posts

```diff
-Користувач: мінімальна кількість коментарів/постів
+Користувач: мінімальна кількість коментарів/дописів
```

Користувач: мінімальна кількість <del>коментарів/постів</del><ins>коментарів/дописів</ins>


### `fof-socialprofile`

#### [`fof-socialprofile.forum.edit.favicon`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/uk/?q=context%3A%3D%22fof-socialprofile.forum.edit.favicon%22)

> Favicon

```diff
-Favicon
+Значок сайту
```


### `fof-split`

#### [`fof-split.admin.permissions.split_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-split/uk/?q=context%3A%3D%22fof-split.admin.permissions.split_discussion_label%22)

> Split posts from discussions

```diff
-Відокремлення дописів від дискусії
+Відокремлювати дописи від обговорення
```

<del>Відокремлення</del><ins>Відокремлювати</ins> <del>дописів</del><ins>дописи</ins> від <del>дискусії</del><ins>обговорення</ins>

#### [`fof-split.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-split/uk/?q=context%3A%3D%22fof-split.forum.modal.title%22)

> Split discussion

```diff
-Розділена дискусія
+Розділити обговорення
```

#### [`fof-split.forum.post.was_split_from`](https://weblate.rob006.net/translate/flarum2/fof-split/uk/?q=context%3A%3D%22fof-split.forum.post.was_split_from%22)

> {count, plural, one {{count} post was split from {target}.} other {{count} posts were split from {target}.}}

```diff
-{count, plural, one {{count} допис відокремлено від {target}.} other {{count} допис відокремлені від {target}.}}
+{count, plural, one {{count} допис відокремлено від {target}.} few {{count} дописи відокремлено від {target}.} many {{count} дописів відокремлено від {target}.} other {{count} допису відокремлено від {target}.}}
```

{count, plural, one {{count} допис відокремлено від {target}.} <ins>few {{count} дописи відокремлено від {target}.} many {{count} дописів відокремлено від {target}.} </ins>other {{count} <del>допис</del><ins>допису</ins> <del>відокремлені</del><ins>відокремлено</ins> від {target}.}}

#### [`fof-split.forum.post.was_split_to`](https://weblate.rob006.net/translate/flarum2/fof-split/uk/?q=context%3A%3D%22fof-split.forum.post.was_split_to%22)

> {count, plural, one {{count} post was split to {target}.} other {{count} posts were split to {target}.}}

```diff
-{count, plural, one {{count} допис відокремлено до {target}.} other {{count} допис відокремлені до {target}.}}
+{count, plural, one {{count} допис відокремлено до {target}.} few {{count} дописи відокремлено до {target}.} many {{count} дописів відокремлено до {target}.} other {{count} допису відокремлено до {target}.}}
```

{count, plural, one {{count} допис відокремлено до {target}.} <ins>few {{count} дописи відокремлено до {target}.} many {{count} дописів відокремлено до {target}.} </ins>other {{count} <del>допис</del><ins>допису</ins> <del>відокремлені</del><ins>відокремлено</ins> до {target}.}}


### `fof-subscribed`

#### [`fof-subscribed.admin.permission.subscribe_to_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/uk/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_discussion_created%22)

> Allowed to receive notification upon new discussion

```diff
-Дозволено отримувати повідомлення для нової дискусії
+Отримувати сповіщення про нові обговорення
```

#### [`fof-subscribed.email.body.newDiscussion`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/uk/?q=context%3A%3D%22fof-subscribed.email.body.newDiscussion%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} started a new discussion: {discussion\_title}
>
> To view this new discussion, check out the following link:
> {discussion\_url}
>
> \---
>
> {post\_content}
>

```diff
 Привіт, {recipient_display_name}!

-{actor_display_name} розпочав нову дискусію: {discussion_title}
+{actor_display_name} розпочав нове обговорення: {discussion_title}

-Щоб переглянути це нову дискусію, перейдіть за наступним посиланням:
+Щоб переглянути це нове обговорення, перейдіть за наступним посиланням:
 {discussion_url}

 ---

 {post_content}

```

Привіт, {recipient\_display\_name}!<br /><br />{actor\_display\_name} розпочав <del>нову</del><ins>нове</ins> <del>дискусію:</del><ins>обговорення:</ins> {discussion\_title}<br /><br />Щоб переглянути це <del>нову</del><ins>нове</ins> <del>дискусію,</del><ins>обговорення,</ins> перейдіть за наступним посиланням:<br />{discussion\_url}<br /><br />---<br /><br />{post\_content}<br />

#### [`fof-subscribed.email.subject.newDiscussion`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/uk/?q=context%3A%3D%22fof-subscribed.email.subject.newDiscussion%22)

> \[Subscribed \| New Discussion\] {title}

```diff
-Підписка | нова дискусія: {title}
+Підписка | нове обговорення: {title}
```

Підписка \| <del>нова</del><ins>нове</ins> <del>дискусія:</del><ins>обговорення:</ins> {title}

#### [`fof-subscribed.forum.notifications.discussion_created_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/uk/?q=context%3A%3D%22fof-subscribed.forum.notifications.discussion_created_text%22)

> {username} created a new discussion

```diff
-Користувач {username} створив нову дискусію
+Користувач {username} створив нове обговорення
```

Користувач {username} створив <del>нову</del><ins>нове</ins> <del>дискусію</del><ins>обговорення</ins>

#### [`fof-subscribed.forum.settings.defaults_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/uk/?q=context%3A%3D%22fof-subscribed.forum.settings.defaults_label%22)

> Set "{setting}" enabled by default

```diff
-За налаштуванням встановлено параметр «{setting}»
+За замовчуванням встановлено параметр «{setting}»
```

За <del>налаштуванням</del><ins>замовчуванням</ins> встановлено параметр «{setting}»

#### [`fof-subscribed.forum.settings.notify_discussion_created_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/uk/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_discussion_created_label%22)

> Someone creates a discussion

```diff
-Хтось створює дискусію
+Хтось створює обговорення
```

Хтось створює <del>дискусію</del><ins>обговорення</ins>


### `fof-synopsis`

#### [`fof-synopsis.admin.settings.tags-enabled`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/uk/?q=context%3A%3D%22fof-synopsis.admin.settings.tags-enabled%22)

> You have &lt;code&gt;flarum/tags&lt;/code&gt; enabled. These settings will become default, unless per individual tags have their own setting.

```diff
-У вас увімкнено <code>flarum/tags</code>. Ці налаштування стануть параметри за налаштуванням, якщо тільки для окремих тегів не будуть встановлені власні налаштування.
+У вас увімкнено <code>flarum/tags</code>. Ці налаштування стануть параметри за замовчуванням, якщо тільки для окремих тегів не будуть встановлені власні налаштування.
```

У вас увімкнено &lt;code&gt;flarum/tags&lt;/code&gt;. Ці налаштування стануть параметри за <del>налаштуванням,</del><ins>замовчуванням,</ins> якщо тільки для окремих тегів не будуть встановлені власні налаштування.

#### [`fof-synopsis.forum.user.settings.show-summaries`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/uk/?q=context%3A%3D%22fof-synopsis.forum.user.settings.show-summaries%22)

> Display an excerpt from each discussion in discussion lists (Desktop/Tablet)

```diff
-Відображати уривки з кожної дискусії у списках дискусій (на робочому столі/планшеті)
+Відображати уривки з кожного обговорення у списках обговорень (на комп’ютері/планшеті)
```

Відображати уривки з <del>кожної</del><ins>кожного</ins> <del>дискусії</del><ins>обговорення</ins> у списках <del>дискусій</del><ins>обговорень</ins> (на<del> робочому</del> <del>столі/планшеті)</del><ins>комп’ютері/планшеті)</ins>

#### [`fof-synopsis.forum.user.settings.show-summaries-mobile`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/uk/?q=context%3A%3D%22fof-synopsis.forum.user.settings.show-summaries-mobile%22)

> Display an excerpt from each discussion in discussion lists (Mobile)

```diff
-Відображати уривки з кожної дискусії в списках обговорень (на мобільному пристрої)
+Відображати уривки з кожного обговорення у списках обговорень (на мобільному пристрої)
```

Відображати уривки з <del>кожної</del><ins>кожного</ins> <del>дискусії</del><ins>обговорення</ins> <del>в</del><ins>у</ins> списках обговорень (на мобільному пристрої)


### `fof-terms`

#### [`fof-terms.admin.settings.field.date-format-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/uk/?q=context%3A%3D%22fof-terms.admin.settings.field.date-format-help%22)

> You can use any valid &lt;a&gt;Day.js&lt;/a&gt; format. Leave field empty for default.

```diff
-Ви можете використовувати будь-який допустимий формат <a>Day.js</a>. За налаштуванням залиште поле порожнім.
+Ви можете використовувати будь-який допустимий формат <a>Day.js</a>. За замовчуванням залиште поле порожнім.
```

Ви можете використовувати будь-який допустимий формат &lt;a&gt;Day.js&lt;/a&gt;. За <del>налаштуванням</del><ins>замовчуванням</ins> залиште поле порожнім.


### `fof-upload`

#### [`fof-upload.admin.help_texts.client_extension`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.help_texts.client_extension%22)

> By default Upload will choose a safe file extension based on the MIME type.
> For some file types based around ZIP or binary data this can result in generic extensions being used instead of the expected one.
> Here you can enter a comma-separated list of file extensions that will be kept verbatim.
>

```diff
-За налаштуванням під час завантаження буде обрано безпечне розширення файлу на основі типу MIME.
+За замовчуванням під час завантаження буде обрано безпечне розширення файлу на основі типу MIME.
 Для деяких типів файлів, заснованих на ZIP або двійкових даних, це може призвести до того, що замість очікуваного розширення буде використано загальне розширення.
 Тут ви можете ввести через кому список розширень файлів, який буде збережено дослівно.

```

За <del>налаштуванням</del><ins>замовчуванням</ins> під час завантаження буде обрано безпечне розширення файлу на основі типу MIME.<br />Для деяких типів файлів, заснованих на ZIP або двійкових даних, це може призвести до того, що замість очікуваного розширення буде використано загальне розширення.<br />Тут ви можете ввести через кому список розширень файлів, який буде збережено дослівно.<br />

#### [`fof-upload.admin.help_texts.composer_buttons`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.help_texts.composer_buttons%22)

> By default both the media manager button and upload button are visible. You can also choose to display only one button.
>

```diff
-За налаштуванням відображаються і кнопка медіа-менеджера, і кнопка завантаження. Ви також можете обрати відображення лише однієї кнопки.
+За замовчуванням відображаються і кнопка медіа-менеджера, і кнопка завантаження. Ви також можете обрати відображення лише однієї кнопки.

```

За <del>налаштуванням</del><ins>замовчуванням</ins> відображаються і кнопка медіа-менеджера, і кнопка завантаження. Ви також можете обрати відображення лише однієї кнопки.<br />

#### [`fof-upload.admin.inspect-mime.guessed-extension`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.inspect-mime.guessed-extension%22)

> Default file extension (if original is not whitelisted)

```diff
-Розширення файлу за налаштуванням (якщо оригінал не внесено до білого списку)
+Розширення файлу за замовчуванням (якщо оригінал не внесено до білого списку)
```

Розширення файлу за <del>налаштуванням</del><ins>замовчуванням</ins> (якщо оригінал не внесено до білого списку)

#### [`fof-upload.admin.inspect-mime.laravel-validation`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.inspect-mime.laravel-validation%22)

> Laravel File Validation

```diff
-Laravel File Validation
+Перевірка файлів у Laravel
```

#### [`fof-upload.admin.labels.aws-s3.bucket`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.labels.aws-s3.bucket%22)

> Bucket

```diff
-Bucket
+Бакет
```

#### [`fof-upload.admin.labels.imgur.client_id`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.labels.imgur.client_id%22)

> Imgur client ID

```diff
-Imgur client ID
+Ідентифікатор клієнта Imgur
```

#### [`fof-upload.admin.labels.qiniu.bucket`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.admin.labels.qiniu.bucket%22)

> Bucket

```diff
-Bucket
+Бакет
```

#### [`fof-upload.forum.text_preview.no_snippet`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.forum.text_preview.no_snippet%22)

> &lt;no preview snippet available&gt;

```diff
-<no preview snippet available>
+<уривок для попереднього перегляду недоступний>
```

#### [`fof-upload.forum.text_preview.no_snippet_preview`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.forum.text_preview.no_snippet_preview%22)

> &lt;preview will appear here after posting&gt;

```diff
-<preview will appear here after posting>
+<попередній перегляд з’явиться тут після публікації>
```

#### [`fof-upload.lib.file_list.confirm_selection_btn`](https://weblate.rob006.net/translate/flarum2/fof-upload/uk/?q=context%3A%3D%22fof-upload.lib.file_list.confirm_selection_btn%22)

> {fileCount, plural, =0 {None selected} one {Select file} other {Select files}}

```diff
-{fileCount, plural, =0 {Не обрано} one {Обрано файл} other {Обрано файли}}
+{fileCount, plural, =0 {Не обрано} =1 {Обрати файл} one {Обрати файли} other {Обрати файли}}
```

{fileCount, plural, =0 {Не обрано} <del>one</del><ins>=1</ins> <del>{Обрано</del><ins>{Обрати</ins> файл}<ins> one {Обрати файли}</ins> other <del>{Обрано</del><ins>{Обрати</ins> файли}}


### `fof-user-directory`

#### [`fof-user-directory.admin.settings.default-sort`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.admin.settings.default-sort%22)

> Default sort

```diff
-Сортування за налаштуванням
+Сортування за замовчуванням
```

Сортування за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`fof-user-directory.forum.page.usercard.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.forum.page.usercard.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
-{count, plural, one { {count} дискусія} other {{count} дискусій}}
+{count, plural, one {{count} обговорення} few {{count} обговорення} many {{count} обговорень} other {{count} обговорення}}
```

{count, plural, one <del>{</del><ins>{{count}</ins> <del>{count}</del><ins>обговорення}</ins> <del>дискусія}</del><ins>few {{count} обговорення} many {{count} обговорень}</ins> other {{count} <del>дискусій}}</del><ins>обговорення}}</ins>

#### [`fof-user-directory.forum.page.usercard.post-count`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.forum.page.usercard.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
-{count, plural, one { {count} допис} other {{count} дописів}}
+{count, plural, one {{count} допис} few {{count} дописи} many {{count} дописів} other {{count} допису}}
```

{count, plural, one <del>{ {count}</del><ins>{{count}</ins> допис}<ins> few {{count} дописи} many {{count} дописів}</ins> other {{count} <del>дописів}}</del><ins>допису}}</ins>

#### [`fof-user-directory.lib.sort.default`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.lib.sort.default%22)

> Default

```diff
-За налаштуванням
+За замовчуванням
```

За <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`fof-user-directory.lib.sort.least_discussions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.lib.sort.least_discussions%22)

> Least discussions

```diff
-За найменшою кількістю дискусій
+За найменшою кількістю обговорень
```

За найменшою кількістю <del>дискусій</del><ins>обговорень</ins>

#### [`fof-user-directory.lib.sort.most_discussions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.lib.sort.most_discussions%22)

> Most discussions

```diff
-За найбільшою кількістю дискусій
+За найбільшою кількістю обговорень
```

За найбільшою кількістю <del>дискусій</del><ins>обговорень</ins>

#### [`fof-user-directory.lib.sort.not_specified`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/uk/?q=context%3A%3D%22fof-user-directory.lib.sort.not_specified%22)

> Use Flarum default

```diff
-Використовувати Flarum за налаштуванням
+Використовувати Flarum за замовчуванням
```

Використовувати Flarum за <del>налаштуванням</del><ins>замовчуванням</ins>


### `fof-webhooks`

#### [`fof-webhooks.actions.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.actions.discussion.deleted%22)

> Deleted discussion \`{1}\`

```diff
-Видалена дискусія `{1}`
+Видалене обговорення `{1}`
```

<del>Видалена</del><ins>Видалене</ins> <del>дискусія</del><ins>обговорення</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.actions.discussion.hidden%22)

> Hid discussion \`{1}\`

```diff
-Прихована дискусія `{1}`
+Приховане обговорення `{1}`
```

<del>Прихована</del><ins>Приховане</ins> <del>дискусія</del><ins>обговорення</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.renamed.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.actions.discussion.renamed.title%22)

> Renamed discussion \`{1}\`

```diff
-Перейменовано дискусію `{1}`
+Перейменовано обговорення `{1}`
```

Перейменовано <del>дискусію</del><ins>обговорення</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.actions.discussion.restored%22)

> Restored discussion \`{1}\`

```diff
-Відновлена дискусія `{1}`
+Відновлене обговорення `{1}`
```

<del>Відновлена</del><ins>Відновлене</ins> <del>дискусія</del><ins>обговорення</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.started`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.actions.discussion.started%22)

> Started discussion \`{1}\`

```diff
-Розпочато дискусію `{1}`
+Розпочато обговорення `{1}`
```

Розпочато <del>дискусію</del><ins>обговорення</ins> \`{1}\`

#### [`fof-webhooks.actions.post.approved`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.actions.post.approved%22)

> Approved post in \`{1}\`

```diff
-Затверджений допис у «{1}»
+Схвалено допис у `{1}`
```

<del>Затверджений</del><ins>Схвалено</ins> допис у <del>«{1}»</del><ins>\`{1}\`</ins>

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/uk/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.title%22)

> Flarum Discussion

```diff
-Дискусія Flarum
+Обговорення Flarum
```

<del>Дискусія</del><ins>Обговорення</ins> Flarum


### `yippy-tag-with-themes`

#### [`yippy-tag-with-themes.admin.designs.header.color_theme`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/uk/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.header.color_theme%22)

> Customise Default Color Scheme

```diff
-Налаштуйте колірну схему за налаштуванням
+Налаштуйте колірну схему за замовчуванням
```

Налаштуйте колірну схему за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`yippy-tag-with-themes.admin.helps.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/uk/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.design_default%22)

> Select a default design layout

```diff
-Обрати макет дизайну за налаштуванням
+Обрати макет дизайну за замовчуванням
```

Обрати макет дизайну за <del>налаштуванням</del><ins>замовчуванням</ins>

#### [`yippy-tag-with-themes.admin.labels.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/uk/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.design_default%22)

> Discussion Design Layout

```diff
-Макет дизайну дискусії
+Макет оформлення обговорення
```

Макет <del>дизайну</del><ins>оформлення</ins> <del>дискусії</del><ins>обговорення</ins>

#### [`yippy-tag-with-themes.admin.options.design_options.flat_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/uk/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_tag%22)

> Flat (Primary Tag)

```diff
-Плоский (осноаний тег)
+Плоский (основний тег)
```

Плоский <del>(осноаний</del><ins>(основний</ins> тег)

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/uk/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_tab%22)

> Rounded Flat (Primary Tab)

```diff
-Округлий плоский (другорядний тег)
+Округлий плоский (основна вкладка)
```

Округлий плоский <del>(другорядний</del><ins>(основна</ins> <del>тег)</del><ins>вкладка)</ins>


## Missing translations

These strings are translated only in `uk`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `uk`.


### `asyntai-chatbot` (missing)

#### [`asyntai-chatbot.admin.settings.hide_for_members_help`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/uk/?q=context%3A%3D%22asyntai-chatbot.admin.settings.hide_for_members_help%22)

> Members who are logged in never see the chat.

```diff
+Учасники, які увійшли в обліковий запис, не бачать чат.
```

#### [`asyntai-chatbot.admin.settings.hide_for_members_label`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/uk/?q=context%3A%3D%22asyntai-chatbot.admin.settings.hide_for_members_label%22)

> Show only to guests

```diff
+Показувати лише гостям
```

#### [`asyntai-chatbot.admin.settings.script_url_help`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/uk/?q=context%3A%3D%22asyntai-chatbot.admin.settings.script_url_help%22)

> Leave this field empty to use the standard address https://widget.asyntai.com/static/js/chat-widget.js
>

```diff
+Залиште поле порожнім, щоб використовувати стандартну адресу https://widget.asyntai.com/static/js/chat-widget.js
+
```

#### [`asyntai-chatbot.admin.settings.script_url_label`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/uk/?q=context%3A%3D%22asyntai-chatbot.admin.settings.script_url_label%22)

> Script address (optional)

```diff
+Адреса скрипту (необов’язково)
```

#### [`asyntai-chatbot.admin.settings.widget_id_help`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/uk/?q=context%3A%3D%22asyntai-chatbot.admin.settings.widget_id_help%22)

> Paste the snippet from your Asyntai dashboard, or only the widget ID. Leave this field empty to switch the chat off. You find the ID at asyntai.com under Setup &amp; Integration.
>

```diff
+Вставте фрагмент коду з панелі Asyntai або лише ідентифікатор віджета. Залиште поле порожнім, щоб вимкнути чат. Ідентифікатор доступний на asyntai.com у розділі Setup & Integration.
+
```

#### [`asyntai-chatbot.admin.settings.widget_id_label`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/uk/?q=context%3A%3D%22asyntai-chatbot.admin.settings.widget_id_label%22)

> Asyntai widget ID

```diff
+Ідентифікатор віджета Asyntai
```


### `core` (missing)

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+Розширення, які більше не підтримуються
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Сповіщати адміністраторів електронною поштою, якщо щотижнева перевірка виявить нове розширення, підтримку якого припинено
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+Перевірити зараз
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+Не вдалося отримати список розширень, які більше не підтримуються. Спробуйте пізніше.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Список розширень, які більше не підтримуються, оновлено. Збігів зі встановленими розширеннями: {count}.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum веде <a>спільнотний список розширень, які більше не підтримуються</a>. Якщо встановлене розширення потрапить до списку, його буде позначено в панелі адміністратора.
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Віджети форуму
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Потрібна дія: виявлено розширення, які більше не підтримуються
```

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+З’єднання відновлено.
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+Схоже, виникла проблема зі з’єднанням. Перевірте мережу та спробуйте ще раз.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/uk/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+Схоже, немає з’єднання з мережею. Перевірте підключення та спробуйте ще раз.
```


### `datlechin-passkey` (missing)

#### [`datlechin-passkey.admin.group_modal.require_passkey`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.group_modal.require_passkey%22)

> Require passkey for this group

```diff
+Вимагати ключ доступу для цієї групи
```

#### [`datlechin-passkey.admin.group_modal.require_passkey_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.group_modal.require_passkey_help%22)

> Members will be reminded with a sticky banner until they register at least one passkey.

```diff
+Учасники бачитимуть постійне нагадування, доки не зареєструють принаймні один ключ доступу.
```

#### [`datlechin-passkey.admin.settings.attestation_direct`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_direct%22)

> Direct

```diff
+Пряма
```

#### [`datlechin-passkey.admin.settings.attestation_indirect`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_indirect%22)

> Indirect

```diff
+Непряма
```

#### [`datlechin-passkey.admin.settings.attestation_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_label%22)

> Attestation conveyance

```diff
+Передавання атестації
```

#### [`datlechin-passkey.admin.settings.attestation_none`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_none%22)

> None (recommended)

```diff
+Без атестації (рекомендовано)
```

#### [`datlechin-passkey.admin.settings.description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.description%22)

> Configure passkey authentication for this forum.

```diff
+Налаштуйте автентифікацію з ключами доступу на цьому форумі.
```

#### [`datlechin-passkey.admin.settings.related_origins_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.related_origins_help%22)

> Additional origins permitted to perform passkey ceremonies. Used together with the W3C related-origins document at /.well-known/webauthn.

```diff
+Додаткові джерела, яким дозволено виконувати операції з ключами доступу. Використовуються разом із документом W3C про пов’язані джерела за адресою /.well-known/webauthn.
```

#### [`datlechin-passkey.admin.settings.related_origins_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.related_origins_label%22)

> Related origins (one per line)

```diff
+Пов’язані джерела (по одному в рядку)
```

#### [`datlechin-passkey.admin.settings.rp_id_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_id_help%22)

> The DNS name that scopes a passkey. Leave blank to auto-detect from the request host. Changing this invalidates every existing passkey.

```diff
+Ім’я DNS, що визначає область дії ключа доступу. Залиште поле порожнім для автоматичного визначення за хостом запиту. Зміна зробить усі наявні ключі доступу недійсними.
```

#### [`datlechin-passkey.admin.settings.rp_id_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_id_label%22)

> Relying Party ID

```diff
+Ідентифікатор довірчої сторони (RP ID)
```

#### [`datlechin-passkey.admin.settings.rp_name_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_name_help%22)

> The name shown to users in the browser passkey prompt. Defaults to the forum title.

```diff
+Назва, яку користувачі бачать у запиті браузера щодо ключа доступу. Типово це назва форуму.
```

#### [`datlechin-passkey.admin.settings.rp_name_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_name_label%22)

> Relying Party display name

```diff
+Відображувана назва довірчої сторони
```

#### [`datlechin-passkey.admin.settings.throttle_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.throttle_label%22)

> Login attempts per minute per IP

```diff
+Спроб входу за хвилину з однієї IP-адреси
```

#### [`datlechin-passkey.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.title%22)

> Passkey

```diff
+Ключі доступу
```

#### [`datlechin-passkey.admin.settings.user_verification_discouraged`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_discouraged%22)

> Discouraged (touch only, less secure)

```diff
+Небажана (лише дотик, менш безпечно)
```

#### [`datlechin-passkey.admin.settings.user_verification_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_label%22)

> User verification

```diff
+Перевірка користувача
```

#### [`datlechin-passkey.admin.settings.user_verification_preferred`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_preferred%22)

> Preferred (ask if the device supports it)

```diff
+Бажана (запитувати, якщо пристрій підтримує)
```

#### [`datlechin-passkey.admin.settings.user_verification_required`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_required%22)

> Required (always ask for biometric or PIN)

```diff
+Обов’язкова (завжди запитувати біометричні дані або PIN)
```

#### [`datlechin-passkey.email.backup_state.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.backup_state.body%22)

> Hi {username},
>
> Your passkey "{device}" on {forum} is now {state}.
>
> If you triggered this yourself (for example by signing in to iCloud Keychain or a password manager on a new device), you can ignore this message. If not, sign in and review the security tab. The passkey may have been copied to another device.
>
> {forum}
>

```diff
+Вітаємо, {username}!
+
+Ваш ключ доступу «{device}» на {forum} тепер {state}.
+
+Якщо ви самі спричинили цю зміну, наприклад увійшли у В’язку iCloud або менеджер паролів на новому пристрої, проігноруйте цей лист. Інакше увійдіть і перевірте вкладку безпеки. Ключ могли скопіювати на інший пристрій.
+
+{forum}
+
```

#### [`datlechin-passkey.email.backup_state.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.backup_state.subject%22)

> Sync state changed for a passkey on {forum}

```diff
+Змінено стан синхронізації ключа доступу на {forum}
```

#### [`datlechin-passkey.email.backup_state.synced`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.backup_state.synced%22)

> synced to a cloud password manager

```diff
+синхронізовано з хмарним менеджером паролів
```

#### [`datlechin-passkey.email.backup_state.unsynced`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.backup_state.unsynced%22)

> stored on a single device only

```diff
+зберігається лише на одному пристрої
```

#### [`datlechin-passkey.email.bulk_revoked.actor_admin`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.actor_admin%22)

> A site moderator removed them on your behalf.

```diff
+Модератор сайту видалив ключі від вашого імені.
```

#### [`datlechin-passkey.email.bulk_revoked.actor_self`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.actor_self%22)

> You initiated this revoke from the security tab.

```diff
+Ви відкликали ключі на вкладці безпеки.
```

#### [`datlechin-passkey.email.bulk_revoked.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.body%22)

> Hi {username},
>
> All {count} passkeys were just removed from your account on {forum}. {actor}
>
> If you did not expect this, sign in with your password and check the security tab. If you cannot sign in, use the password-reset link on the login screen.
>
> {forum}
>

```diff
+Вітаємо, {username}!
+
+З вашого облікового запису на {forum} щойно видалено всі ключі доступу ({count}). {actor}
+
+Якщо ви цього не очікували, увійдіть із паролем і перевірте вкладку безпеки. Якщо не вдається ввійти, скористайтеся посиланням для скидання пароля на екрані входу.
+
+{forum}
+
```

#### [`datlechin-passkey.email.bulk_revoked.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.subject%22)

> All passkeys were removed from your {forum} account

```diff
+З вашого облікового запису на {forum} видалено всі ключі доступу
```

#### [`datlechin-passkey.email.counter_regression.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.counter_regression.body%22)

> Hi {username},
>
> An attempt to sign in to {forum} with your passkey "{device}" failed because the credential reported a signature counter lower than the one we have on record. This is the canonical signal that the credential may have been copied to a second device.
>
> The login was rejected. We recommend you sign in with your password, revoke this passkey, and register a fresh one. If you have other devices configured with the same credential, also remove them from your password manager.
>
> {forum}
>

```diff
+Вітаємо, {username}!
+
+Спробу входу на {forum} з вашим ключем доступу «{device}» відхилено, оскільки ключ повідомив менше значення лічильника підписів, ніж збережене в нас. Це характерна ознака того, що ключ могли скопіювати на інший пристрій.
+
+Радимо ввійти за допомогою пароля, відкликати цей ключ і зареєструвати новий. Якщо ті самі облікові дані налаштовано на інших пристроях, видаліть їх і з менеджера паролів.
+
+{forum}
+
```

#### [`datlechin-passkey.email.counter_regression.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.counter_regression.subject%22)

> Possible passkey clone detected on your {forum} account

```diff
+Виявлено можливу копію ключа доступу до вашого облікового запису на {forum}
```

#### [`datlechin-passkey.email.revoked.actor_admin`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.revoked.actor_admin%22)

> A site moderator removed it on your behalf.

```diff
+Модератор сайту видалив ключ від вашого імені.
```

#### [`datlechin-passkey.email.revoked.actor_self`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.revoked.actor_self%22)

> You initiated this revoke from the security tab.

```diff
+Ви відкликали ключ на вкладці безпеки.
```

#### [`datlechin-passkey.email.revoked.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.revoked.body%22)

> Hi {username},
>
> The passkey "{device}" was just removed from your account on {forum}. {actor}
>
> If you did not expect this, your account may be at risk. Sign in and review your remaining passkeys at the security tab. If you no longer have access, use the password-reset link on the login screen.
>
> {forum}
>

```diff
+Вітаємо, {username}!
+
+З вашого облікового запису на {forum} щойно видалено ключ доступу «{device}». {actor}
+
+Якщо ви цього не очікували, ваш обліковий запис може бути під загрозою. Увійдіть і перевірте решту ключів на вкладці безпеки. Якщо ви втратили доступ, скористайтеся посиланням для скидання пароля на екрані входу.
+
+{forum}
+
```

#### [`datlechin-passkey.email.revoked.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.email.revoked.subject%22)

> A passkey was removed from your {forum} account

```diff
+З вашого облікового запису на {forum} видалено ключ доступу
```

#### [`datlechin-passkey.forum.log_in.cancelled`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.cancelled%22)

> Passkey sign-in was cancelled.

```diff
+Вхід із ключем доступу скасовано.
```

#### [`datlechin-passkey.forum.log_in.failed`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.failed%22)

> Could not verify your passkey. Please try again.

```diff
+Не вдалося перевірити ключ доступу. Спробуйте ще раз.
```

#### [`datlechin-passkey.forum.log_in.passkey_unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.passkey_unsupported%22)

> This browser does not support passkeys.

```diff
+Цей браузер не підтримує ключі доступу.
```

#### [`datlechin-passkey.forum.log_in.security_error`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.security_error%22)

> The site origin does not match the configured relying party. Ask an admin to check the Passkey settings.

```diff
+Джерело сайту не відповідає налаштованій стороні, що покладається на автентифікацію. Попросіть адміністратора перевірити налаштування ключів доступу.
```

#### [`datlechin-passkey.forum.log_in.sign_in_with_passkey`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.sign_in_with_passkey%22)

> Sign in with passkey

```diff
+Увійти з ключем доступу
```

#### [`datlechin-passkey.forum.log_in.throttled`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.throttled%22)

> Too many passkey login attempts. Please wait a minute and try again.

```diff
+Забагато спроб входу з ключем доступу. Зачекайте хвилину й спробуйте ще раз.
```

#### [`datlechin-passkey.forum.log_in.unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.unsupported%22)

> This device cannot use the passkey type the site requires.

```diff
+Цей пристрій не підтримує тип ключа доступу, потрібний сайту.
```

#### [`datlechin-passkey.forum.log_in.verifying`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.log_in.verifying%22)

> Verifying passkey...

```diff
+Перевірка ключа доступу…
```

#### [`datlechin-passkey.forum.required.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.required.body%22)

> Your role requires you to register a passkey before you can continue.

```diff
+Ваша роль вимагає зареєструвати ключ доступу. Зробіть це, щоб продовжити.
```

#### [`datlechin-passkey.forum.required.set_up`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.required.set_up%22)

> Set up now

```diff
+Налаштувати зараз
```

#### [`datlechin-passkey.forum.settings.add_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_button%22)

> Add passkey

```diff
+Додати ключ доступу
```

#### [`datlechin-passkey.forum.settings.add_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.cancel_button%22)

> Cancel

```diff
+Скасувати
```

#### [`datlechin-passkey.forum.settings.add_modal.device_name_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.device_name_label%22)

> Name this passkey

```diff
+Назва ключа доступу
```

#### [`datlechin-passkey.forum.settings.add_modal.device_name_placeholder`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.device_name_placeholder%22)

> e.g. iPhone, MacBook, YubiKey

```diff
+Наприклад, iPhone, MacBook, YubiKey
```

#### [`datlechin-passkey.forum.settings.add_modal.register_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.register_button%22)

> Register

```diff
+Зареєструвати
```

#### [`datlechin-passkey.forum.settings.add_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.title%22)

> Add a passkey

```diff
+Додавання ключа доступу
```

#### [`datlechin-passkey.forum.settings.alerts.bulk_revoke_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.bulk_revoke_succeeded%22)

> All passkeys revoked.

```diff
+Усі ключі доступу відкликано.
```

#### [`datlechin-passkey.forum.settings.alerts.registration_already_exists`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_already_exists%22)

> This device already has a passkey for your account. Revoke the existing one first, or use a different device.

```diff
+На цьому пристрої вже є ключ доступу для вашого облікового запису. Спочатку відкличте наявний ключ або скористайтеся іншим пристроєм.
```

#### [`datlechin-passkey.forum.settings.alerts.registration_failed`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_failed%22)

> Could not register your passkey. Please try again.

```diff
+Не вдалося зареєструвати ключ доступу. Спробуйте ще раз.
```

#### [`datlechin-passkey.forum.settings.alerts.registration_security_error`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_security_error%22)

> The site origin does not match the configured relying party. Ask an admin to check the Passkey settings.

```diff
+Джерело сайту не відповідає налаштованій стороні, що покладається на автентифікацію. Попросіть адміністратора перевірити налаштування ключів доступу.
```

#### [`datlechin-passkey.forum.settings.alerts.registration_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_succeeded%22)

> Passkey added.

```diff
+Ключ доступу додано.
```

#### [`datlechin-passkey.forum.settings.alerts.registration_unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_unsupported%22)

> This device cannot register a passkey of the type the site requires.

```diff
+Цей пристрій не може зареєструвати ключ доступу потрібного сайту типу.
```

#### [`datlechin-passkey.forum.settings.alerts.rename_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.rename_succeeded%22)

> Passkey renamed.

```diff
+Ключ доступу перейменовано.
```

#### [`datlechin-passkey.forum.settings.alerts.revoke_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.revoke_succeeded%22)

> Passkey revoked.

```diff
+Ключ доступу відкликано.
```

#### [`datlechin-passkey.forum.settings.bulk_revoke_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.bulk_revoke_button%22)

> Revoke all

```diff
+Відкликати всі
```

#### [`datlechin-passkey.forum.settings.bulk_revoke_modal.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.bulk_revoke_modal.body%22)

> Revoke all {count} of your passkeys? You will not be able to sign in with any of them afterwards.

```diff
+Відкликати всі ваші ключі доступу ({count})? Після цього ввійти за допомогою будь-якого з них буде неможливо.
```

#### [`datlechin-passkey.forum.settings.description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.description%22)

> Passkeys let you sign in without a password using your device or a hardware key.

```diff
+Ключі доступу дають змогу входити без пароля за допомогою вашого пристрою або апаратного ключа.
```

#### [`datlechin-passkey.forum.settings.heading`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.heading%22)

> Passkeys

```diff
+Ключі доступу
```

#### [`datlechin-passkey.forum.settings.list.added_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.added_label%22)

> Added

```diff
+Додано
```

#### [`datlechin-passkey.forum.settings.list.device_only`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.device_only%22)

> This device only

```diff
+Лише на цьому пристрої
```

#### [`datlechin-passkey.forum.settings.list.empty`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.empty%22)

> You have not added any passkeys yet.

```diff
+Ви ще не додали ключів доступу.
```

#### [`datlechin-passkey.forum.settings.list.last_used_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.last_used_label%22)

> Last used

```diff
+Останнє використання
```

#### [`datlechin-passkey.forum.settings.list.never_used`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.never_used%22)

> Never used

```diff
+Ще не використовувався
```

#### [`datlechin-passkey.forum.settings.list.rename_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.rename_button%22)

> Rename

```diff
+Перейменувати
```

#### [`datlechin-passkey.forum.settings.list.revoke_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.revoke_button%22)

> Revoke

```diff
+Відкликати
```

#### [`datlechin-passkey.forum.settings.list.synced`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.synced%22)

> Synced

```diff
+Синхронізовано
```

#### [`datlechin-passkey.forum.settings.rename_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.cancel_button%22)

> Cancel

```diff
+Скасувати
```

#### [`datlechin-passkey.forum.settings.rename_modal.save_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.save_button%22)

> Save

```diff
+Зберегти
```

#### [`datlechin-passkey.forum.settings.rename_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.title%22)

> Rename passkey

```diff
+Перейменування ключа доступу
```

#### [`datlechin-passkey.forum.settings.revoke_modal.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.body%22)

> Are you sure you want to revoke {device}? You will not be able to sign in with this passkey afterwards.

```diff
+Ви впевнені, що хочете відкликати ключ «{device}»? Після цього ввійти з ним буде неможливо.
```

#### [`datlechin-passkey.forum.settings.revoke_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.cancel_button%22)

> Cancel

```diff
+Скасувати
```

#### [`datlechin-passkey.forum.settings.revoke_modal.confirm_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.confirm_button%22)

> Revoke

```diff
+Відкликати
```

#### [`datlechin-passkey.forum.settings.revoke_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.title%22)

> Revoke passkey

```diff
+Відкликання ключа доступу
```

#### [`datlechin-passkey.forum.suggest.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.suggest.body%22)

> Sign in faster next time, without having to remember a password. Your device generates a passkey that only works on this site.

```diff
+Наступного разу ви зможете ввійти швидше й без пароля. Пристрій створить ключ доступу, який працює лише на цьому сайті.
```

#### [`datlechin-passkey.forum.suggest.not_now`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.suggest.not_now%22)

> Not now

```diff
+Не зараз
```

#### [`datlechin-passkey.forum.suggest.set_up`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.suggest.set_up%22)

> Set up a passkey

```diff
+Налаштувати ключ доступу
```

#### [`datlechin-passkey.forum.suggest.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.forum.suggest.title%22)

> Set up a passkey

```diff
+Налаштування ключа доступу
```

#### [`datlechin-passkey.gdpr.anonymize_description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.gdpr.anonymize_description%22)

> All passkeys belonging to this user are revoked.

```diff
+Усі ключі доступу цього користувача відкликаються.
```

#### [`datlechin-passkey.gdpr.delete_description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.gdpr.delete_description%22)

> All passkeys belonging to this user are deleted.

```diff
+Усі ключі доступу цього користувача видаляються.
```

#### [`datlechin-passkey.gdpr.export_description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/uk/?q=context%3A%3D%22datlechin-passkey.gdpr.export_description%22)

> Includes the device label, last-used timestamp, IP, and authenticator metadata for each registered passkey. Public keys identify a credential but cannot be used to forge a sign-in.

```diff
+Містить назву пристрою, час останнього використання, IP-адресу й метадані автентифікатора для кожного зареєстрованого ключа доступу. Відкриті ключі ідентифікують облікові дані, але не дають змоги підробити вхід.
```


### `ekumanov-inline-audio` (missing)

#### [`ekumanov-inline-audio.admin.settings.auto_play`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/uk/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.auto_play%22)

> Start playing immediately when a filename is clicked

```diff
+Починати відтворення відразу після натискання на назву файлу
```

#### [`ekumanov-inline-audio.admin.settings.show_download_button`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/uk/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_download_button%22)

> Show download button on player bar

```diff
+Показувати кнопку завантаження на панелі програвача
```

#### [`ekumanov-inline-audio.admin.settings.show_right_click_download`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/uk/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_right_click_download%22)

> Allow right-click on filename to save the file

```diff
+Дозволити зберігати файл через контекстне меню його назви
```

#### [`ekumanov-inline-audio.admin.settings.strip_upload_prefix`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/uk/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.strip_upload_prefix%22)

> Hide numeric prefix from uploaded filenames (e.g. "1774205518-685373-song.mp3" → "song.mp3")

```diff
+Приховувати цифровий префікс у назвах завантажених файлів (наприклад, «1774205518-685373-song.mp3» → «song.mp3»)
```

#### [`ekumanov-inline-audio.forum.bbcode_description`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/uk/?q=context%3A%3D%22ekumanov-inline-audio.forum.bbcode_description%22)

> Embed an audio player: \[player\]URL\[/player\]

```diff
+Вбудувати аудіопрогравач: [player]URL[/player]
```


### `ekumanov-new-posts-notice` (missing)

#### [`ekumanov-new-posts-notice.forum.new_posts_plural`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/uk/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_plural%22)

> {count} new replies were added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read them first (your draft stays open)

```diff
+Поки ви писали, з’явилися нові відповіді. Кількість: {count}.
+
+OK → Все одно опублікувати відповідь
+Скасувати → Спочатку прочитати нові відповіді (чернетка залишиться відкритою)
```

#### [`ekumanov-new-posts-notice.forum.new_posts_single`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/uk/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_single%22)

> 1 new reply was added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read it first (your draft stays open)

```diff
+Поки ви писали, з’явилася 1 нова відповідь.
+
+OK → Все одно опублікувати відповідь
+Скасувати → Спочатку прочитати нову відповідь (чернетка залишиться відкритою)
```


### `el-choco-admin-console` (missing)

#### [`el-choco-admin-console.admin.save`](https://weblate.rob006.net/translate/flarum2/el-choco-admin-console/uk/?q=context%3A%3D%22el-choco-admin-console.admin.save%22)

> Save

```diff
+Зберегти
```

#### [`el-choco-admin-console.admin.status_succeeded`](https://weblate.rob006.net/translate/flarum2/el-choco-admin-console/uk/?q=context%3A%3D%22el-choco-admin-console.admin.status_succeeded%22)

> Completed

```diff
+Завершено
```


### `ernestdefoe-aurora` (missing)

#### [`ernestdefoe-aurora.admin.settings.accent_color`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.accent_color%22)

> Accent color

```diff
+Колір акценту
```

#### [`ernestdefoe-aurora.admin.settings.animate_background`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.animate_background%22)

> Animate aurora background

```diff
+Анімувати тло з полярним сяйвом
```

#### [`ernestdefoe-aurora.admin.settings.glassmorphism`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.glassmorphism%22)

> Enable glassmorphism (frosted panels)

```diff
+Увімкнути ефект матового скла для панелей
```

#### [`ernestdefoe-aurora.admin.settings.glow`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.glow%22)

> Enable glow effects

```diff
+Увімкнути ефекти світіння
```

#### [`ernestdefoe-aurora.admin.settings.gradient_end`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.gradient_end%22)

> Primary gradient — end color

```diff
+Кінцевий колір основного градієнта
```

#### [`ernestdefoe-aurora.admin.settings.gradient_start`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.gradient_start%22)

> Primary gradient — start color

```diff
+Початковий колір основного градієнта
```

#### [`ernestdefoe-aurora.forum.palette.apply`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.apply%22)

> Apply {palette} palette

```diff
+Застосувати палітру «{palette}»
```

#### [`ernestdefoe-aurora.forum.palette.aurora`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.aurora%22)

> Aurora

```diff
+Полярне сяйво
```

#### [`ernestdefoe-aurora.forum.palette.button_label`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.button_label%22)

> Choose color palette

```diff
+Вибрати палітру кольорів
```

#### [`ernestdefoe-aurora.forum.palette.ember`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.ember%22)

> Ember

```diff
+Жар
```

#### [`ernestdefoe-aurora.forum.palette.forest`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.forest%22)

> Forest

```diff
+Ліс
```

#### [`ernestdefoe-aurora.forum.palette.nebula`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.nebula%22)

> Nebula

```diff
+Туманність
```

#### [`ernestdefoe-aurora.forum.palette.ocean`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.ocean%22)

> Ocean

```diff
+Океан
```

#### [`ernestdefoe-aurora.forum.palette.palette`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.palette%22)

> Palette

```diff
+Палітра
```

#### [`ernestdefoe-aurora.forum.palette.sunset`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.sunset%22)

> Sunset

```diff
+Захід сонця
```

#### [`ernestdefoe-aurora.forum.palette.title`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.title%22)

> Color palette

```diff
+Палітра кольорів
```

#### [`ernestdefoe-aurora.forum.widgets.discussions`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.discussions%22)

> Discussions

```diff
+Обговорення
```

#### [`ernestdefoe-aurora.forum.widgets.members`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.members%22)

> Members

```diff
+Учасники
```

#### [`ernestdefoe-aurora.forum.widgets.online`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.online%22)

> Online now

```diff
+Зараз онлайн
```

#### [`ernestdefoe-aurora.forum.widgets.posts`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/uk/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.posts%22)

> Posts

```diff
+Дописи
```


### `ffans-geetest` (missing)

#### [`ffans-geetest.admin.settings.context_event_forgot_label`](https://weblate.rob006.net/translate/flarum2/ffans-geetest/uk/?q=context%3A%3D%22ffans-geetest.admin.settings.context_event_forgot_label%22)

> =&gt; core.forum.forgot\_password.title

```diff
+=> core.forum.forgot_password.title
```

#### [`ffans-geetest.admin.settings.context_event_login_label`](https://weblate.rob006.net/translate/flarum2/ffans-geetest/uk/?q=context%3A%3D%22ffans-geetest.admin.settings.context_event_login_label%22)

> =&gt; core.ref.log\_in

```diff
+=> core.ref.log_in
```

#### [`ffans-geetest.admin.settings.context_event_signup_label`](https://weblate.rob006.net/translate/flarum2/ffans-geetest/uk/?q=context%3A%3D%22ffans-geetest.admin.settings.context_event_signup_label%22)

> =&gt; core.ref.sign\_up

```diff
+=> core.ref.sign_up
```

#### [`ffans-geetest.admin.test.reload_button`](https://weblate.rob006.net/translate/flarum2/ffans-geetest/uk/?q=context%3A%3D%22ffans-geetest.admin.test.reload_button%22)

> Reload

```diff
+Перезавантажити
```

#### [`ffans-geetest.admin.test.submit_button`](https://weblate.rob006.net/translate/flarum2/ffans-geetest/uk/?q=context%3A%3D%22ffans-geetest.admin.test.submit_button%22)

> Submit

```diff
+Надіслати
```


### `ffans-link-guard` (missing)

#### [`ffans-link-guard.admin.settings.trusted_domains_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.trusted_domains_help%22)

> Enter one domain per line. Same-origin links always bypass the warning. &lt;code&gt;example.com&lt;/code&gt; matches only that domain. &lt;code&gt;\*.example.com&lt;/code&gt; matches its subdomains, but not &lt;code&gt;example.com&lt;/code&gt; itself.

```diff
+Введіть по одному домену в рядку. Для посилань із того самого джерела попередження не з’являється. <code>example.com</code> охоплює лише цей домен. <code>*.example.com</code> охоплює його піддомени, за винятком самого <code>example.com</code>.
```

#### [`ffans-link-guard.admin.settings.trusted_domains_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.trusted_domains_label%22)

> Trusted domains

```diff
+Довірені домени
```

#### [`ffans-link-guard.admin.settings.use_modal_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.use_modal_help%22)

> Shows the warning on the current page via modal.

```diff
+Відкриває попередження в діалоговому вікні на поточній сторінці.
```

#### [`ffans-link-guard.admin.settings.use_modal_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.use_modal_label%22)

> Show warnings in a modal

```diff
+Показувати попередження в діалоговому вікні
```

#### [`ffans-link-guard.admin.settings.warning_message_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_message_help%22)

> Leave blank to use the default warning. Plain text only; line breaks are supported.

```diff
+Залиште поле порожнім, щоб використати попередження за замовчуванням. Підтримується лише простий текст із переносами рядків.
```

#### [`ffans-link-guard.admin.settings.warning_message_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_message_label%22)

> Warning message

```diff
+Текст попередження
```

#### [`ffans-link-guard.admin.settings.warning_title_help`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_title_help%22)

> Leave blank to use the default title. Plain text only.

```diff
+Залиште поле порожнім, щоб використати заголовок за замовчуванням. Підтримується лише простий текст.
```

#### [`ffans-link-guard.admin.settings.warning_title_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.admin.settings.warning_title_label%22)

> Warning title

```diff
+Заголовок попередження
```

#### [`ffans-link-guard.forum.cancel_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.cancel_button%22)

> Cancel

```diff
+Скасувати
```

#### [`ffans-link-guard.forum.close_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.close_button%22)

> Close this tab

```diff
+Закрити цю вкладку
```

#### [`ffans-link-guard.forum.close_fallback`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.close_fallback%22)

> If this tab did not close, close it manually or &lt;a&gt;return to the community&lt;/a&gt;.

```diff
+Якщо вкладка залишилася відкритою, закрийте її вручну або <a>поверніться до спільноти</a>.
```

#### [`ffans-link-guard.forum.continue_button`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.continue_button%22)

> Continue

```diff
+Продовжити
```

#### [`ffans-link-guard.forum.destination_label`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.destination_label%22)

> Destination website

```diff
+Цільовий сайт
```

#### [`ffans-link-guard.forum.invalid_message`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.invalid_message%22)

> This address could not be recognized. Please return to the community and open the link again.

```diff
+Не вдалося розпізнати адресу. Поверніться до спільноти й відкрийте посилання ще раз.
```

#### [`ffans-link-guard.forum.invalid_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.invalid_title%22)

> Invalid external link

```diff
+Недійсне зовнішнє посилання
```

#### [`ffans-link-guard.forum.page_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.forum.page_title%22)

> Leaving the forum

```diff
+Перехід із форуму
```

#### [`ffans-link-guard.lib.default_forum_name`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.lib.default_forum_name%22)

> this site

```diff
+цей сайт
```

#### [`ffans-link-guard.lib.default_warning_message`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.lib.default_warning_message%22)

> Please keep your account and personal information safe.

```diff
+Подбайте про безпеку облікового запису й особистих даних.
```

#### [`ffans-link-guard.lib.default_warning_title`](https://weblate.rob006.net/translate/flarum2/ffans-link-guard/uk/?q=context%3A%3D%22ffans-link-guard.lib.default_warning_title%22)

> You are about to leave {forumName}

```diff
+Ви переходите із сайту «{forumName}»
```


### `ffans-threadmarks` (missing)

#### [`ffans-threadmarks.admin.create_type_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.create_type_modal.submit_button%22)

> Create

```diff
+Створити
```

#### [`ffans-threadmarks.admin.edit_type_modal.delete_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.delete_button%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`ffans-threadmarks.admin.edit_type_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.submit_button%22)

> =&gt; ffans-threadmarks.ref.save

```diff
+=> ffans-threadmarks.ref.save
```

#### [`ffans-threadmarks.admin.types.actions_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.types.actions_heading%22)

> Actions

```diff
+Дії
```

#### [`ffans-threadmarks.admin.types.enabled_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.types.enabled_heading%22)

> Enabled

```diff
+Увімкнено
```

#### [`ffans-threadmarks.admin.types.order_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.types.order_heading%22)

> Order

```diff
+Порядок
```

#### [`ffans-threadmarks.admin.types.reorder_tooltip`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.types.reorder_tooltip%22)

> Drag to reorder

```diff
+Перетягніть, щоб змінити порядок
```

#### [`ffans-threadmarks.admin.types.type_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.admin.types.type_heading%22)

> =&gt; ffans-threadmarks.ref.type

```diff
+=> ffans-threadmarks.ref.type
```

#### [`ffans-threadmarks.forum.directory.all_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.directory.all_filter%22)

> All

```diff
+Усі
```

#### [`ffans-threadmarks.forum.directory.discussion_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.directory.discussion_filter%22)

> =&gt; ffans-threadmarks.ref.discussion

```diff
+=> ffans-threadmarks.ref.discussion
```

#### [`ffans-threadmarks.forum.manage_modal.add_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.add_button%22)

> Add

```diff
+Додати
```

#### [`ffans-threadmarks.forum.manage_modal.delete_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.delete_button%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`ffans-threadmarks.forum.manage_modal.discussion_tab`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.discussion_tab%22)

> =&gt; ffans-threadmarks.ref.discussion

```diff
+=> ffans-threadmarks.ref.discussion
```

#### [`ffans-threadmarks.forum.manage_modal.loading_text`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.loading_text%22)

> =&gt; core.ref.loading

```diff
+=> core.ref.loading
```

#### [`ffans-threadmarks.forum.manage_modal.note_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.note_placeholder%22)

> Optional

```diff
+Необов’язково
```

#### [`ffans-threadmarks.forum.manage_modal.save_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.save_button%22)

> =&gt; ffans-threadmarks.ref.save

```diff
+=> ffans-threadmarks.ref.save
```

#### [`ffans-threadmarks.forum.manage_modal.type_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.type_label%22)

> =&gt; ffans-threadmarks.ref.type

```diff
+=> ffans-threadmarks.ref.type
```

#### [`ffans-threadmarks.lib.type_form.color_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.color_label%22)

> =&gt; core.ref.color

```diff
+=> core.ref.color
```

#### [`ffans-threadmarks.lib.type_form.icon_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.icon_label%22)

> =&gt; core.ref.icon

```diff
+=> core.ref.icon
```

#### [`ffans-threadmarks.ref.discussion`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.ref.discussion%22)

> Discussion

```diff
+Обговорення
```

#### [`ffans-threadmarks.ref.save`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.ref.save%22)

> Save

```diff
+Зберегти
```

#### [`ffans-threadmarks.ref.type`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/uk/?q=context%3A%3D%22ffans-threadmarks.ref.type%22)

> Type

```diff
+Тип
```


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+Аудит
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+Налаштувати
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+Налаштуйте, що можуть бачити користувачі з дозволом на обмежений доступ
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+Потрібне розширення {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+Налаштування обмеженого доступу
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+Переглядати журнал аудиту
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+Переглядати журнал аудиту з обмеженим доступом
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+Переглядати IP-адресу
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+Журнал аудиту (дії користувача)
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+Журнал аудиту
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+Журнал аудиту
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+Журнал аудиту (зміни облікового запису)
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+Журнал аудиту виконавця дій
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+Журнал аудиту
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+Журнал аудиту обговорення
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+Журнал аудиту користувача
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+Видалено записи з журналів аудиту: {deleted_count}
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+Кеш очищено вручну
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+Токен доступу
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+Ключ API
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+Командний рядок
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+Вебсеанс
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+Невідомий клієнт
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+Показати записи про таку саму дію
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+Показати записи про дії цього виконавця
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+Показати записи для цього типу клієнта
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+Показати записи, що стосуються цього обговорення
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+Показати записи з цієї IP-адреси
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+Показати записи, що стосуються цього користувача
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+Приховати необроблений запис журналу
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+Показати необроблений запис журналу
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+Обговорення #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+Група #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+Допис #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+Тег #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+Користувач #{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+Розпочато обговорення {discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+Видалено обговорення {discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+Приховано обговорення {discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+Обговорення перейменовано з «{old_title}» на «{new_title}»
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+Відновлено обговорення {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+Результати відсутні
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+Вимкнено розширення {package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+Увімкнено розширення {package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+Видалено розширення {package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+Застосувати
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+Очистити фільтр
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+Фільтрувати записи журналу
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+Тип дії, наприклад action:post.created.
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+Хто виконав дію. Використовуйте actor:guest для системних дій або дій неавторизованих користувачів.
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+Спосіб надсилання запиту.
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+Дії, що стосуються певного обговорення, за його ID.
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+IP-адреса, з якої виконано дію.
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+Користувач, якого стосується дія, за ім’ям користувача.
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+Фільтри:
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+Коментар
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+Допис
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+Перелічіть значення через кому, щоб знайти збіги з будь-яким із них, наприклад action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+Додайте мінус перед фільтром, щоб виключити збіги, наприклад -client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+Довідка з пошуку
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+Завантажити більше
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+(без причини)
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+(без значення)
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+Дозвіл {permission} змінено з {old_groups} на {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+Створено {post} в обговоренні {discussion}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+Видалено {post} користувача {postuser} в обговоренні {discussion}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+Приховано {post} користувача {postuser} в обговоренні {discussion}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+Відновлено {post} користувача {postuser} в обговоренні {discussion}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+Відредаговано {post} користувача {postuser} в обговоренні {discussion}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+Оновити
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+Змінено налаштування {key}
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+Значення налаштування {key} змінено з {old_value} на {new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+Обліковий запис користувача {username} активовано вручну
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+Обліковий запис користувача {username} активовано за посиланням підтвердження
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+Змінено аватар користувача {username}
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+Видалено аватар користувача {username}
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+Створено обліковий запис користувача {username}
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+Видалено користувача {username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+Надіслано запит на зміну електронної адреси користувача {username} на {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+Електронну адресу користувача {username} змінено з {old_email} на {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+Групи користувача {username} змінено з {old_groups} на {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+Виконано вхід до облікового запису користувача {username}
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+Виконано вхід до облікового запису користувача {username} за допомогою {provider}
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+Виконано вихід з облікового запису користувача {username}
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+Надіслано запит на зміну пароля користувача {username}
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+Змінено пароль користувача {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+Надіслано запит на скидання пароля користувача {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+Надіслано запит на скидання пароля для {email} (відповідного облікового запису немає)
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+Сервіс {provider} під’єднано до облікового запису користувача {username}
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+Ім’я користувача {username} змінено з {old_username} на {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/uk/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `flarum-sticky` (missing)

#### [`flarum-sticky.admin.settings.pin_sticky_on_all_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/uk/?q=context%3A%3D%22flarum-sticky.admin.settings.pin_sticky_on_all_discussions_label%22)

> Pin stickied discussions on the All Discussions page

```diff
+Закріплювати обговорення на сторінці «Усі обговорення»
```


### `fof-anti-spam` (missing)

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
+Заблоковано реєстрацію користувача {username} ({email}) з адреси {ip}
```

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/uk/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
+Користувача {username} позначено як спамера
```


### `fof-author-change` (missing)

#### [`fof-author-change.admin.permissions.edit-date`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-date%22)

> Update discussion and post date

```diff
+Змінювати дату обговорень і дописів
```

#### [`fof-author-change.admin.permissions.edit-user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-user%22)

> Update discussion and post author

```diff
+Змінювати автора обговорень і дописів
```

#### [`fof-author-change.forum.controls.edit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.controls.edit%22)

> Edit Author and Date

```diff
+Змінити автора й дату
```

#### [`fof-author-change.forum.modal.cancel`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.cancel%22)

> Cancel

```diff
+Скасувати
```

#### [`fof-author-change.forum.modal.created_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.created_at%22)

> Creation time

```diff
+Час створення
```

#### [`fof-author-change.forum.modal.edited_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.edited_at%22)

> Edit time

```diff
+Час редагування
```

#### [`fof-author-change.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.submit%22)

> Save

```diff
+Зберегти
```

#### [`fof-author-change.forum.modal.sync-impossible`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.sync-impossible%22)

> Cannot find first post. Try scrolling to the start of the discussion.

```diff
+Не вдалося знайти перший допис. Спробуйте прокрутити до початку обговорення.
```

#### [`fof-author-change.forum.modal.sync-with-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-discussion%22)

> Sync with discussion

```diff
+Синхронізувати з обговоренням
```

#### [`fof-author-change.forum.modal.sync-with-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-post%22)

> Sync with first post

```diff
+Синхронізувати з першим дописом
```

#### [`fof-author-change.forum.modal.title-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.title-discussion%22)

> Edit Discussion Author and Date

```diff
+Змінити автора й дату обговорення
```

#### [`fof-author-change.forum.modal.title-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.title-post%22)

> Edit Post Author and Date

```diff
+Змінити автора й дату допису
```

#### [`fof-author-change.forum.modal.user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.modal.user%22)

> Author

```diff
+Автор
```

#### [`fof-author-change.forum.search.no-results`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.search.no-results%22)

> No results

```diff
+Результати відсутні
```

#### [`fof-author-change.forum.search.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.search.placeholder%22)

> Search users

```diff
+Пошук користувачів
```

#### [`fof-author-change.forum.search.type-more`](https://weblate.rob006.net/translate/flarum2/fof-author-change/uk/?q=context%3A%3D%22fof-author-change.forum.search.type-more%22)

> Type 3 characters to search database

```diff
+Введіть 3 символи для пошуку в базі даних
```


### `fof-badges` (missing)

#### [`fof-badges.admin.actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.actions%22)

> Actions on Badge Earned

```diff
+Дії після отримання відзнаки
```

#### [`fof-badges.admin.active`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.active%22)

> Active

```diff
+Активно
```

#### [`fof-badges.admin.add_to_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.add_to_group%22)

> Add user to group

```diff
+Додати користувача до групи
```

#### [`fof-badges.admin.add_to_group_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.add_to_group_help%22)

> Automatically add the user to this group when they earn the badge.

```diff
+Автоматично додавати користувача до цієї групи після отримання відзнаки.
```

#### [`fof-badges.admin.appearance`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.appearance%22)

> Appearance

```diff
+Зовнішній вигляд
```

#### [`fof-badges.admin.assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.assign%22)

> Assign

```diff
+Надати
```

#### [`fof-badges.admin.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.assign_badge%22)

> Assign: {badge}

```diff
+Надати: {badge}
```

#### [`fof-badges.admin.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.assign_reason%22)

> Reason (optional)

```diff
+Причина (необов'язково)
```

#### [`fof-badges.admin.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Ця причина відображатиметься на відзнаці користувача.
```

#### [`fof-badges.admin.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+За що надається ця відзнака?
```

#### [`fof-badges.admin.automatic`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.automatic%22)

> Automatic

```diff
+Автоматично
```

#### [`fof-badges.admin.background_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.background_color%22)

> Background Color

```diff
+Колір тла
```

#### [`fof-badges.admin.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+Відзнаку «{badge}» надано користувачу {username}!
```

#### [`fof-badges.admin.badge_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_category%22)

> Category

```diff
+Категорія
```

#### [`fof-badges.admin.badge_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_count%22)

> {count, plural, one {# badge} other {# badges}}

```diff
+{count, plural, one {Відзнак: #} other {Відзнак: #}}
```

#### [`fof-badges.admin.badge_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_description%22)

> Description

```diff
+Опис
```

#### [`fof-badges.admin.badge_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_description_placeholder%22)

> Describe how to earn this badge...

```diff
+Опишіть, як отримати цю відзнаку…
```

#### [`fof-badges.admin.badge_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_name%22)

> Name

```diff
+Назва
```

#### [`fof-badges.admin.badge_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_name_placeholder%22)

> e.g., "100 Posts Master"

```diff
+Наприклад, «Майстер 100 дописів»
```

#### [`fof-badges.admin.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_revoked%22)

> Badge "{badge}" has been revoked from {username}.

```diff
+Відзнаку «{badge}» відкликано в користувача {username}.
```

#### [`fof-badges.admin.badge_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_slug%22)

> Slug

```diff
+Текстовий ідентифікатор
```

#### [`fof-badges.admin.badge_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_slug_help%22)

> URL-friendly identifier. Auto-generated from name if left empty.

```diff
+Ідентифікатор для URL-адреси. Автоматично створюється з назви, якщо поле порожнє.
```

#### [`fof-badges.admin.badge_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.badge_slug_placeholder%22)

> e.g., "100-posts-master"

```diff
+Наприклад, «100-posts-master»
```

#### [`fof-badges.admin.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.cancel%22)

> Cancel

```diff
+Скасувати
```

#### [`fof-badges.admin.category_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_description%22)

> Description

```diff
+Опис
```

#### [`fof-badges.admin.category_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_description_placeholder%22)

> Describe this category of badges...

```diff
+Опишіть цю категорію відзнак…
```

#### [`fof-badges.admin.category_enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_enabled%22)

> Enabled

```diff
+Увімкнено
```

#### [`fof-badges.admin.category_enabled_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_enabled_help%22)

> Disabled categories and their badges won't appear in the badge list.

```diff
+Вимкнені категорії та їхні відзнаки не показуватимуться в списку відзнак.
```

#### [`fof-badges.admin.category_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_name%22)

> Name

```diff
+Назва
```

#### [`fof-badges.admin.category_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_name_placeholder%22)

> e.g., "Achievement Badges"

```diff
+Наприклад, «Відзнаки за досягнення»
```

#### [`fof-badges.admin.category_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_slug%22)

> Slug

```diff
+Текстовий ідентифікатор
```

#### [`fof-badges.admin.category_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_slug_help%22)

> URL-friendly identifier for the category.

```diff
+Ідентифікатор категорії для URL-адреси.
```

#### [`fof-badges.admin.category_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.category_slug_placeholder%22)

> e.g., "achievements"

```diff
+Наприклад, «achievements»
```

#### [`fof-badges.admin.clear_selection`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.clear_selection%22)

> Clear selection

```diff
+Скасувати вибір
```

#### [`fof-badges.admin.create_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.create_badge%22)

> Create Badge

```diff
+Створити відзнаку
```

#### [`fof-badges.admin.create_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.create_category%22)

> Create Category

```diff
+Створити категорію
```

#### [`fof-badges.admin.delete`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.delete%22)

> Delete

```diff
+Видалити
```

#### [`fof-badges.admin.delete_badge_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.delete_badge_confirm%22)

> Are you sure you want to delete the badge "{name}"? This will also remove it from all users who have earned it.

```diff
+Ви впевнені, що хочете видалити відзнаку «{name}»? Її також буде видалено в усіх користувачів, які її отримали.
```

#### [`fof-badges.admin.delete_category_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm%22)

> Are you sure you want to delete the category "{name}"?

```diff
+Ви впевнені, що хочете видалити категорію «{name}»?
```

#### [`fof-badges.admin.delete_category_confirm_with_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm_with_badges%22)

> Are you sure you want to delete the category "{name}"? {count, plural, one {# badge} other {# badges}} will become uncategorized.

```diff
+Ви впевнені, що хочете видалити категорію «{name}»? Відзнаки залишаться без категорії ({count, plural, one {# відзнака} other {кількість: #}}).
```

#### [`fof-badges.admin.disabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.disabled%22)

> Disabled

```diff
+Вимкнені
```

#### [`fof-badges.admin.earned_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.earned_count%22)

> {count} earned

```diff
+Отримано: {count}
```

#### [`fof-badges.admin.edit`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.edit%22)

> Edit

```diff
+Редагувати
```

#### [`fof-badges.admin.edit_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.edit_badge%22)

> Edit Badge

```diff
+Редагувати відзнаку
```

#### [`fof-badges.admin.edit_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.edit_category%22)

> Edit Category

```diff
+Редагувати категорію
```

#### [`fof-badges.admin.enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.enabled%22)

> Enabled

```diff
+Увімкнено
```

#### [`fof-badges.admin.granted_by_system`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.granted_by_system%22)

> System

```diff
+Система
```

#### [`fof-badges.admin.headers.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.badges%22)

> Badges

```diff
+Відзнаки
```

#### [`fof-badges.admin.headers.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.description%22)

> Description

```diff
+Опис
```

#### [`fof-badges.admin.headers.earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.earned%22)

> Earned

```diff
+Отримано
```

#### [`fof-badges.admin.headers.icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.icon%22)

> Icon

```diff
+Іконка
```

#### [`fof-badges.admin.headers.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.name%22)

> Name

```diff
+Назва
```

#### [`fof-badges.admin.headers.order`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.order%22)

> Order

```diff
+Порядок
```

#### [`fof-badges.admin.headers.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.rarity%22)

> Rarity

```diff
+Рідкісність
```

#### [`fof-badges.admin.headers.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.status%22)

> Status

```diff
+Статус
```

#### [`fof-badges.admin.headers.type`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.headers.type%22)

> Type

```diff
+Тип
```

#### [`fof-badges.admin.icon_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.icon_color%22)

> Icon Color

```diff
+Колір значка
```

#### [`fof-badges.admin.icon_picker.collapse`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.icon_picker.collapse%22)

> Hide icon picker

```diff
+Приховати вибір значка
```

#### [`fof-badges.admin.icon_picker.expand`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.icon_picker.expand%22)

> Show icon picker

```diff
+Показати вибір значка
```

#### [`fof-badges.admin.icon_picker.hint`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.icon_picker.hint%22)

> Click an icon to select, or type a Font Awesome class name above.

```diff
+Натисніть значок, щоб вибрати його, або введіть вище назву класу Font Awesome.
```

#### [`fof-badges.admin.inactive`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.inactive%22)

> Inactive

```diff
+Неактивно
```

#### [`fof-badges.admin.install_defaults`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.install_defaults%22)

> Install Default Badges

```diff
+Установити типові відзнаки
```

#### [`fof-badges.admin.install_defaults_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.install_defaults_error%22)

> Failed to install default badges.

```diff
+Не вдалося встановити типові відзнаки.
```

#### [`fof-badges.admin.install_defaults_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.install_defaults_success%22)

> Default badges installed successfully!

```diff
+Типові відзнаки встановлено!
```

#### [`fof-badges.admin.is_active`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.is_active%22)

> Active

```diff
+Активно
```

#### [`fof-badges.admin.is_active_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.is_active_help%22)

> Inactive badges won't be automatically awarded to users.

```diff
+Неактивні відзнаки не надаватимуться користувачам автоматично.
```

#### [`fof-badges.admin.is_visible`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.is_visible%22)

> Visible in badge list

```diff
+Видима в списку відзнак
```

#### [`fof-badges.admin.is_visible_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.is_visible_help%22)

> Hidden badges won't appear in the public badge list but users can still earn them.

```diff
+Приховані відзнаки не показуються в загальнодоступному списку, але користувачі все одно можуть їх отримати.
```

#### [`fof-badges.admin.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.manual%22)

> Manual

```diff
+Вручну
```

#### [`fof-badges.admin.metrics.best_answers_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.best_answers_received%22)

> Best Answers Received

```diff
+Отримані найкращі відповіді
```

#### [`fof-badges.admin.metrics.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.discussion_count%22)

> Discussions Started

```diff
+Розпочаті обговорення
```

#### [`fof-badges.admin.metrics.downvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_given%22)

> Downvotes Given

```diff
+Віддані голоси «проти»
```

#### [`fof-badges.admin.metrics.downvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_received%22)

> Downvotes Received

```diff
+Отримані голоси «проти»
```

#### [`fof-badges.admin.metrics.edit_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.edit_count%22)

> Posts Edited

```diff
+Відредаговані дописи
```

#### [`fof-badges.admin.metrics.files_uploaded`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.files_uploaded%22)

> Files Uploaded

```diff
+Завантажені файли
```

#### [`fof-badges.admin.metrics.has_avatar`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.has_avatar%22)

> Has Avatar

```diff
+Наявність аватара
```

#### [`fof-badges.admin.metrics.has_bio`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.has_bio%22)

> Has Bio

```diff
+Наявність біографії
```

#### [`fof-badges.admin.metrics.has_nickname`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.has_nickname%22)

> Has Nickname

```diff
+Наявність псевдоніма
```

#### [`fof-badges.admin.metrics.likes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.likes_given%22)

> Likes Given

```diff
+Поставлені вподобайки
```

#### [`fof-badges.admin.metrics.likes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.likes_received%22)

> Likes Received

```diff
+Отримані вподобайки
```

#### [`fof-badges.admin.metrics.member_days`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.member_days%22)

> Days as Member

```diff
+Днів участі
```

#### [`fof-badges.admin.metrics.polls_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.polls_created%22)

> Polls Created

```diff
+Створені опитування
```

#### [`fof-badges.admin.metrics.polls_voted`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.polls_voted%22)

> Polls Voted

```diff
+Опитування, у яких узято участь
```

#### [`fof-badges.admin.metrics.post_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.post_count%22)

> Post Count

```diff
+Кількість дописів
```

#### [`fof-badges.admin.metrics.private_discussions_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.private_discussions_created%22)

> Private Discussions Created

```diff
+Створені приватні обговорення
```

#### [`fof-badges.admin.metrics.reactions_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_given%22)

> Reactions Given

```diff
+Залишені реакції
```

#### [`fof-badges.admin.metrics.reactions_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_received%22)

> Reactions Received

```diff
+Отримані реакції
```

#### [`fof-badges.admin.metrics.tag_posts`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.tag_posts%22)

> Posts in Tag

```diff
+Дописи з тегом
```

#### [`fof-badges.admin.metrics.upvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_given%22)

> Upvotes Given

```diff
+Віддані голоси «за»
```

#### [`fof-badges.admin.metrics.upvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_received%22)

> Upvotes Received

```diff
+Отримані голоси «за»
```

#### [`fof-badges.admin.move_down`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.move_down%22)

> Move down

```diff
+Перемістити вниз
```

#### [`fof-badges.admin.move_up`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.move_up%22)

> Move up

```diff
+Перемістити вгору
```

#### [`fof-badges.admin.next`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.next%22)

> Next

```diff
+Далі
```

#### [`fof-badges.admin.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_badges%22)

> No badges yet. Create your first badge!

```diff
+Відзнак ще немає. Створіть першу відзнаку!
```

#### [`fof-badges.admin.no_categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_categories%22)

> No categories yet. Create your first category!

```diff
+Категорій ще немає. Створіть першу категорію!
```

#### [`fof-badges.admin.no_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_category%22)

> No category

```diff
+Без категорії
```

#### [`fof-badges.admin.no_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_group%22)

> Don't add to group

```diff
+Не додавати до групи
```

#### [`fof-badges.admin.no_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_holders%22)

> No one has earned this badge yet.

```diff
+Цю відзнаку ще ніхто не отримав.
```

#### [`fof-badges.admin.no_holders_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_holders_found%22)

> No holders found matching your search.

```diff
+За вашим запитом власників не знайдено.
```

#### [`fof-badges.admin.no_users_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.no_users_found%22)

> No users found

```diff
+Користувачів не знайдено
```

#### [`fof-badges.admin.permissions.give_manually`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.permissions.give_manually%22)

> Manually assign badges

```diff
+Надавати відзнаки вручну
```

#### [`fof-badges.admin.permissions.moderate`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.permissions.moderate%22)

> Manage badges

```diff
+Керувати відзнаками
```

#### [`fof-badges.admin.permissions.view_list`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.permissions.view_list%22)

> View badge list

```diff
+Переглядати список відзнак
```

#### [`fof-badges.admin.permissions.view_user_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.permissions.view_user_badges%22)

> View user badges

```diff
+Переглядати відзнаки користувачів
```

#### [`fof-badges.admin.preview`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.preview%22)

> Preview

```diff
+Попередній перегляд
```

#### [`fof-badges.admin.previous`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.previous%22)

> Previous

```diff
+Назад
```

#### [`fof-badges.admin.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.rarity%22)

> {percent}% rarity

```diff
+Рідкісність: {percent}%
```

#### [`fof-badges.admin.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate%22)

> Recalculate

```diff
+Перерахувати
```

#### [`fof-badges.admin.recalculate_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_confirm%22)

> This will recalculate all automatic badges for all users. The process will run in the background. Continue?

```diff
+Буде перераховано всі автоматичні відзнаки для всіх користувачів. Процес виконуватиметься у фоновому режимі. Продовжити?
```

#### [`fof-badges.admin.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Не вдалося перерахувати відзнаки. Спробуйте ще раз.
```

#### [`fof-badges.admin.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_success%22)

> Recalculation complete! Awarded: {awarded}, Revoked: {revoked}, Users processed: {users}

```diff
+Перерахунок завершено! Надано: {awarded}, відкликано: {revoked}, опрацьовано користувачів: {users}
```

#### [`fof-badges.admin.recalculate_tab.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.all_badges%22)

> All automatic badges

```diff
+Усі автоматичні відзнаки
```

#### [`fof-badges.admin.recalculate_tab.badge_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_help%22)

> Select a specific badge or recalculate all automatic badges.

```diff
+Виберіть певну відзнаку або перерахуйте всі автоматичні відзнаки.
```

#### [`fof-badges.admin.recalculate_tab.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_label%22)

> Badge to recalculate

```diff
+Відзнака для перерахунку
```

#### [`fof-badges.admin.recalculate_tab.badges_to_check`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badges_to_check%22)

> Badges to check

```diff
+Відзнаки для перевірки
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_help%22)

> Number of users to process per job. Smaller chunks are more reliable but take longer overall.

```diff
+Кількість користувачів для опрацювання в одному завданні. Менші частини надійніші, але загалом потребують більше часу.
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_label%22)

> Chunk size

```diff
+Розмір частини
```

#### [`fof-badges.admin.recalculate_tab.default`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.default%22)

> default

```diff
+типово
```

#### [`fof-badges.admin.recalculate_tab.estimated_chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.estimated_chunks%22)

> Estimated chunks

```diff
+Орієнтовна кількість частин
```

#### [`fof-badges.admin.recalculate_tab.info`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.info%22)

> Recalculation processes users in chunks to avoid queue timeouts. Each chunk runs as a separate background job.

```diff
+Перерахунок опрацьовує користувачів частинами, щоб уникнути перевищення часу очікування черги. Кожна частина виконується як окреме фонове завдання.
```

#### [`fof-badges.admin.recalculate_tab.jobs_empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_empty%22)

> No recalculation jobs yet.

```diff
+Завдань перерахунку ще немає.
```

#### [`fof-badges.admin.recalculate_tab.jobs_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_title%22)

> Job History

```diff
+Історія завдань
```

#### [`fof-badges.admin.recalculate_tab.no_automatic_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_automatic_badges%22)

> No automatic badges configured. Create a badge with trigger conditions first.

```diff
+Автоматичних відзнак не налаштовано. Спершу створіть відзнаку з умовами автоматичного надання.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_help%22)

> If enabled, users who no longer meet the criteria will keep their badges.

```diff
+Якщо ввімкнено, користувачі збережуть відзнаки, навіть якщо більше не відповідають критеріям.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_label%22)

> Don't revoke existing badges

```diff
+Не відкликати наявні відзнаки
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_help%22)

> If enabled, badge actions (like adding to a group) will be re-applied to users who already have the badge. Useful when you've added new actions to an existing badge.

```diff
+Якщо ввімкнено, дії відзнаки (наприклад, додавання до групи) повторно застосовуватимуться до користувачів, які вже її мають. Корисно, якщо ви додали нові дії до наявної відзнаки.
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_label%22)

> Re-apply actions to existing badge holders

```diff
+Повторно застосувати дії до наявних власників відзнак
```

#### [`fof-badges.admin.recalculate_tab.show_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.show_more%22)

> Show {count} more

```diff
+Показати ще {count}
```

#### [`fof-badges.admin.recalculate_tab.start`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.start%22)

> Start Recalculation

```diff
+Почати перерахунок
```

#### [`fof-badges.admin.recalculate_tab.sync_counts`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts%22)

> Sync Badge Counts

```diff
+Синхронізувати лічильники відзнак
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_error%22)

> Failed to sync badge counts.

```diff
+Не вдалося синхронізувати лічильники відзнак.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_info%22)

> Recalculate the "earned count" for all badges based on actual user\_badges records. Use this if counts become incorrect after recalculation.

```diff
+Перерахувати кількість отриманих відзнак за фактичними записами user_badges. Використовуйте, якщо після перерахунку лічильники стали неправильними.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_success%22)

> Badge counts synced! {corrected} of {total} badges were corrected.

```diff
+Лічильники відзнак синхронізовано! Виправлено {corrected} із {total} відзнак.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_title%22)

> Sync Badge Counts

```diff
+Синхронізувати лічильники відзнак
```

#### [`fof-badges.admin.recalculate_tab.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.title%22)

> Start Recalculation

```diff
+Почати перерахунок
```

#### [`fof-badges.admin.recalculate_tab.total_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.total_users%22)

> Total users

```diff
+Усього користувачів
```

#### [`fof-badges.admin.recalculation.already_running`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.already_running%22)

> A badge recalculation is already in progress.

```diff
+Перерахунок відзнак уже виконується.
```

#### [`fof-badges.admin.recalculation.auto_refresh_off`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_off%22)

> Auto-refresh

```diff
+Автооновлення
```

#### [`fof-badges.admin.recalculation.auto_refresh_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_on%22)

> Auto-refresh is on

```diff
+Автооновлення ввімкнено
```

#### [`fof-badges.admin.recalculation.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel%22)

> Cancel

```diff
+Скасувати
```

#### [`fof-badges.admin.recalculation.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_confirm%22)

> Are you sure you want to cancel the recalculation? Progress will be lost.

```diff
+Ви впевнені, що хочете скасувати перерахунок? Перебіг виконання буде втрачено.
```

#### [`fof-badges.admin.recalculation.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_error%22)

> Failed to cancel recalculation.

```diff
+Не вдалося скасувати перерахунок.
```

#### [`fof-badges.admin.recalculation.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.cancelled%22)

> Recalculation cancelled

```diff
+Перерахунок скасовано
```

#### [`fof-badges.admin.recalculation.chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.chunks%22)

> Chunks: {processed} / {total}

```diff
+Частин: {processed} / {total}
```

#### [`fof-badges.admin.recalculation.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.completed%22)

> Recalculation completed!

```diff
+Перерахунок завершено!
```

#### [`fof-badges.admin.recalculation.dismiss`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.dismiss%22)

> Dismiss

```diff
+Відсторонено
```

#### [`fof-badges.admin.recalculation.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.failed%22)

> Recalculation failed

```diff
+Помилка перерахунку
```

#### [`fof-badges.admin.recalculation.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.pending%22)

> Preparing recalculation...

```diff
+Підготовка до перерахунку…
```

#### [`fof-badges.admin.recalculation.progress`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.progress%22)

> {processed} / {total} evaluations ({percentage}%)

```diff
+Перевірок: {processed} / {total} ({percentage}%)
```

#### [`fof-badges.admin.recalculation.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.running%22)

> Recalculating badges...

```diff
+Перерахунок відзнак…
```

#### [`fof-badges.admin.recalculation.started`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.started%22)

> Badge recalculation started. This will run in the background.

```diff
+Перерахунок відзнак розпочато. Він виконуватиметься у фоновому режимі.
```

#### [`fof-badges.admin.recalculation.stats`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation.stats%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Надано: {awarded} | Відкликано: {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.button`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.button%22)

> Jobs

```diff
+Завдання
```

#### [`fof-badges.admin.recalculation_jobs.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel%22)

> Cancel

```diff
+Скасувати
```

#### [`fof-badges.admin.recalculation_jobs.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel_error%22)

> Failed to cancel job.

```diff
+Не вдалося скасувати завдання.
```

#### [`fof-badges.admin.recalculation_jobs.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancelled%22)

> Job cancelled successfully.

```diff
+Завдання скасовано.
```

#### [`fof-badges.admin.recalculation_jobs.empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.empty%22)

> No recalculation jobs found.

```diff
+Завдань перерахунку не знайдено.
```

#### [`fof-badges.admin.recalculation_jobs.force_cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.force_cancel%22)

> Force Cancel

```diff
+Примусово скасувати
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed%22)

> Mark as Failed

```diff
+Позначити як невдале
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed_error%22)

> Failed to mark job as failed.

```diff
+Не вдалося позначити завдання як невдале.
```

#### [`fof-badges.admin.recalculation_jobs.marked_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.marked_failed%22)

> Job marked as failed.

```diff
+Завдання позначено як невдале.
```

#### [`fof-badges.admin.recalculation_jobs.results`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.results%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Надано: {awarded} | Відкликано: {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.status.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.cancelled%22)

> Cancelled

```diff
+Скасовано
```

#### [`fof-badges.admin.recalculation_jobs.status.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.completed%22)

> Completed

```diff
+Завершено
```

#### [`fof-badges.admin.recalculation_jobs.status.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.failed%22)

> Failed

```diff
+Не успішно
```

#### [`fof-badges.admin.recalculation_jobs.status.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.pending%22)

> Pending

```diff
+В очікуванні
```

#### [`fof-badges.admin.recalculation_jobs.status.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.running%22)

> Running

```diff
+Запущено
```

#### [`fof-badges.admin.recalculation_jobs.stuck`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.stuck%22)

> Stuck

```diff
+Зависло
```

#### [`fof-badges.admin.recalculation_jobs.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.title%22)

> Recalculation Jobs

```diff
+Завдання перерахунку
```

#### [`fof-badges.admin.recalculation_jobs.users`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.users%22)

> {processed} / {total} evaluations

```diff
+Перевірок: {processed} / {total}
```

#### [`fof-badges.admin.revoke`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.revoke%22)

> Revoke

```diff
+Відкликати
```

#### [`fof-badges.admin.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from {username}?

```diff
+Ви впевнені, що хочете відкликати відзнаку «{badge}» у користувача {username}?
```

#### [`fof-badges.admin.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.revoke_error%22)

> Failed to revoke badge.

```diff
+Не вдалося відкликати відзнаку.
```

#### [`fof-badges.admin.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.save%22)

> Save

```diff
+Зберегти
```

#### [`fof-badges.admin.search_holders_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.search_holders_placeholder%22)

> Search holders...

```diff
+Пошук власників…
```

#### [`fof-badges.admin.search_user_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.search_user_placeholder%22)

> Search by username or display name...

```diff
+Пошук за ім’ям користувача або відображуваним ім’ям…
```

#### [`fof-badges.admin.select_user`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.select_user%22)

> Select User

```diff
+Виберіть користувача
```

#### [`fof-badges.admin.send_notification`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.send_notification%22)

> Send notification to user

```diff
+Надіслати сповіщення користувачу
```

#### [`fof-badges.admin.settings.display_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.display_title%22)

> Display Settings

```diff
+Налаштування відображення
```

#### [`fof-badges.admin.settings.integrations_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.integrations_help%22)

> Badge metrics that depend on other extensions. Install the extension to unlock the corresponding metrics.

```diff
+Показники для відзнак, що залежать від інших розширень. Установіть розширення, щоб увімкнути відповідні показники.
```

#### [`fof-badges.admin.settings.integrations_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.integrations_title%22)

> Extension Integrations

```diff
+Інтеграції з розширеннями
```

#### [`fof-badges.admin.settings.new_badge_highlight`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight%22)

> Show "NEW" tag on recently earned badges

```diff
+Показувати мітку «НОВА» на нещодавно отриманих відзнаках
```

#### [`fof-badges.admin.settings.new_badge_highlight_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight_help%22)

> Displays a "NEW" tag on badges earned within the last 7 days.

```diff
+Показує мітку «НОВА» на відзнаках, отриманих протягом останніх 7 днів.
```

#### [`fof-badges.admin.settings.post_badge_display_limit`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit%22)

> Post badge display limit

```diff
+Максимальна кількість відзнак під дописами
```

#### [`fof-badges.admin.settings.post_badge_display_limit_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit_help%22)

> Maximum number of badges to show under posts. Set to 0 to disable.

```diff
+Максимальна кількість відзнак під дописами. Установіть 0, щоб вимкнути.
```

#### [`fof-badges.admin.settings.primary_badge_display`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display%22)

> Primary badge display

```diff
+Відображення основної відзнаки
```

#### [`fof-badges.admin.settings.primary_badge_display_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display_help%22)

> How the user's primary badge appears next to their username.

```diff
+Як основна відзнака користувача відображається поруч з його ім’ям.
```

#### [`fof-badges.admin.settings.primary_badge_hidden`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_hidden%22)

> Hidden

```diff
+Приховано
```

#### [`fof-badges.admin.settings.primary_badge_icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon%22)

> Icon only

```diff
+Лише значок
```

#### [`fof-badges.admin.settings.primary_badge_icon_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon_name%22)

> Icon and name

```diff
+Значок і назва
```

#### [`fof-badges.admin.settings.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.save%22)

> Save Settings

```diff
+Зберегти налаштування
```

#### [`fof-badges.admin.settings.save_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.save_error%22)

> Failed to save settings.

```diff
+Не вдалося зберегти налаштування.
```

#### [`fof-badges.admin.settings.saved`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.saved%22)

> Settings saved successfully.

```diff
+Налаштування збережено.
```

#### [`fof-badges.admin.settings.show_badges_on_user_card`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card%22)

> Show badges on user card

```diff
+Показувати відзнаки на картці користувача
```

#### [`fof-badges.admin.settings.show_badges_on_user_card_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card_help%22)

> Display the user's favorite or rarest badge on user cards and profile pages.

```diff
+Показувати улюблену або найрідкіснішу відзнаку користувача на його картці та сторінці профілю.
```

#### [`fof-badges.admin.showing_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.showing_holders%22)

> Showing {from}-{to} of {total}

```diff
+Показано {from}-{to} із {total}
```

#### [`fof-badges.admin.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.status%22)

> Status

```diff
+Статус
```

#### [`fof-badges.admin.tab_assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.tab_assign%22)

> Assign

```diff
+Надати
```

#### [`fof-badges.admin.tab_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.tab_holders%22)

> Holders ({count})

```diff
+Власники ({count})
```

#### [`fof-badges.admin.tabs.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.tabs.badges%22)

> Badges

```diff
+Відзнаки
```

#### [`fof-badges.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.tabs.categories%22)

> Categories

```diff
+Категорії
```

#### [`fof-badges.admin.tabs.recalculation`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.tabs.recalculation%22)

> Recalculation

```diff
+Перерахунок
```

#### [`fof-badges.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.tabs.settings%22)

> Settings

```diff
+Налаштування
```

#### [`fof-badges.admin.trigger_builder.add_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.add_condition%22)

> Add Condition

```diff
+Додати умову
```

#### [`fof-badges.admin.trigger_builder.and`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and%22)

> ALL must match (AND)

```diff
+Мають виконуватися всі умови (AND)
```

#### [`fof-badges.admin.trigger_builder.and_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and_help%22)

> User must meet all conditions simultaneously to earn this badge.

```diff
+Щоб отримати відзнаку, користувач має одночасно відповідати всім умовам.
```

#### [`fof-badges.admin.trigger_builder.date_end`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_end%22)

> End Date

```diff
+Дата завершення
```

#### [`fof-badges.admin.trigger_builder.date_range_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_range_help%22)

> Only count activity within this date range. Useful for event badges.

```diff
+Враховувати лише активність у цьому проміжку дат. Корисно для відзнак подій.
```

#### [`fof-badges.admin.trigger_builder.date_start`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_start%22)

> Start Date

```diff
+Дата початку
```

#### [`fof-badges.admin.trigger_builder.loading_tags`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.loading_tags%22)

> Loading tags...

```diff
+Завантаження тегів…
```

#### [`fof-badges.admin.trigger_builder.logic`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.logic%22)

> When multiple conditions

```diff
+За наявності кількох умов
```

#### [`fof-badges.admin.trigger_builder.no_conditions_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.no_conditions_info%22)

> No conditions set. This badge can only be assigned manually by moderators.

```diff
+Умов не задано. Цю відзнаку можуть надавати лише модератори вручну.
```

#### [`fof-badges.admin.trigger_builder.or`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or%22)

> ANY must match (OR)

```diff
+Має виконуватися хоча б одна умова (OR)
```

#### [`fof-badges.admin.trigger_builder.or_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or_help%22)

> User must meet at least one condition to earn this badge.

```diff
+Щоб отримати відзнаку, користувач має відповідати принаймні одній умові.
```

#### [`fof-badges.admin.trigger_builder.remove_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.remove_condition%22)

> Remove condition

```diff
+Видалити умову
```

#### [`fof-badges.admin.trigger_builder.select_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.select_tag%22)

> Select a tag...

```diff
+Виберіть тег…
```

#### [`fof-badges.admin.trigger_builder.tag_filter`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter%22)

> Tag Filter

```diff
+Фільтр тегів
```

#### [`fof-badges.admin.trigger_builder.tag_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter_help%22)

> Required when using "Posts in Tag" metric.

```diff
+Потрібно для показника «Дописи з тегом».
```

#### [`fof-badges.admin.trigger_builder.use_date_range`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_builder.use_date_range%22)

> Limit to date range

```diff
+Обмежити проміжком дат
```

#### [`fof-badges.admin.trigger_config`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_config%22)

> Automatic Trigger

```diff
+Автоматичне надання
```

#### [`fof-badges.admin.trigger_config_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.trigger_config_help%22)

> Configure conditions for automatic badge awarding. Leave empty for manual-only badges.

```diff
+Налаштуйте умови автоматичного надання відзнаки. Залиште порожнім, щоб надавати її лише вручну.
```

#### [`fof-badges.admin.uncategorized`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.uncategorized%22)

> Uncategorized

```diff
+Без категорії
```

#### [`fof-badges.admin.validation.tag_required`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.admin.validation.tag_required%22)

> You must select a tag when using the "Posts in Tag" metric.

```diff
+Потрібно вибрати тег для показника «Дописи з тегом».
```

#### [`fof-badges.defaults.badges.active-member.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.description%22)

> Post 50 replies

```diff
+Опублікуйте 50 відповідей
```

#### [`fof-badges.defaults.badges.active-member.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.name%22)

> Active Member

```diff
+Активний учасник
```

#### [`fof-badges.defaults.badges.anniversary.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.description%22)

> Be a member for one year

```diff
+Будьте учасником протягом року
```

#### [`fof-badges.defaults.badges.anniversary.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.name%22)

> Anniversary

```diff
+Річниця
```

#### [`fof-badges.defaults.badges.conversation-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.description%22)

> Start your first discussion

```diff
+Розпочніть перше обговорення
```

#### [`fof-badges.defaults.badges.conversation-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.name%22)

> Conversation Starter

```diff
+Ініціатор розмови
```

#### [`fof-badges.defaults.badges.editor.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.editor.description%22)

> Edit 10 posts to improve them

```diff
+Відредагуйте 10 дописів, щоб поліпшити їх
```

#### [`fof-badges.defaults.badges.editor.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.editor.name%22)

> Editor

```diff
+Редактор
```

#### [`fof-badges.defaults.badges.first-post.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.description%22)

> Write your first reply

```diff
+Напишіть першу відповідь
```

#### [`fof-badges.defaults.badges.first-post.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.name%22)

> First Post

```diff
+Перший допис
```

#### [`fof-badges.defaults.badges.first-week.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.description%22)

> Be a member for 7 days

```diff
+Будьте учасником протягом 7 днів
```

#### [`fof-badges.defaults.badges.first-week.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.name%22)

> First Week

```diff
+Перший тиждень
```

#### [`fof-badges.defaults.badges.profile-picture.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.description%22)

> Upload a profile picture

```diff
+Завантажте зображення профілю
```

#### [`fof-badges.defaults.badges.profile-picture.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.name%22)

> Profile Picture

```diff
+Зображення профілю
```

#### [`fof-badges.defaults.badges.prolific.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.description%22)

> Post 200 replies

```diff
+Опублікуйте 200 відповідей
```

#### [`fof-badges.defaults.badges.prolific.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.name%22)

> Prolific

```diff
+Плідний автор
```

#### [`fof-badges.defaults.badges.regular.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.regular.description%22)

> Be a member for 30 days

```diff
+Будьте учасником протягом 30 днів
```

#### [`fof-badges.defaults.badges.regular.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.regular.name%22)

> Regular

```diff
+Постійний учасник
```

#### [`fof-badges.defaults.badges.topic-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.description%22)

> Start 10 discussions

```diff
+Розпочніть 10 обговорень
```

#### [`fof-badges.defaults.badges.topic-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.name%22)

> Topic Starter

```diff
+Ініціатор обговорень
```

#### [`fof-badges.defaults.categories.getting-started.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.description%22)

> Badges for new members taking their first steps

```diff
+Відзнаки для нових учасників, які роблять перші кроки
```

#### [`fof-badges.defaults.categories.getting-started.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.name%22)

> Getting Started

```diff
+Перші кроки
```

#### [`fof-badges.defaults.categories.milestones.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.description%22)

> Badges for reaching important milestones

```diff
+Відзнаки за досягнення важливих віх
```

#### [`fof-badges.defaults.categories.milestones.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.name%22)

> Milestones

```diff
+Віхи
```

#### [`fof-badges.defaults.categories.posting.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.categories.posting.description%22)

> Badges for posting milestones and contributions

```diff
+Відзнаки за внесок і досягнення в публікації дописів
```

#### [`fof-badges.defaults.categories.posting.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.defaults.categories.posting.name%22)

> Posting

```diff
+Публікації
```

#### [`fof-badges.forum.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.all_badges%22)

> All Badges

```diff
+Усі відзнаки
```

#### [`fof-badges.forum.badges_subtitle`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.badges_subtitle%22)

> Earn badges by participating in the community!

```diff
+Отримуйте відзнаки за участь у житті спільноти!
```

#### [`fof-badges.forum.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.badges_title%22)

> Badges

```diff
+Відзнаки
```

#### [`fof-badges.forum.earned_by`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.earned_by%22)

> {count, plural, one {# user} other {# users}}

```diff
+{count, plural, one {Користувачів: #} other {Користувачів: #}}
```

#### [`fof-badges.forum.earned_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.earned_users%22)

> Earned By

```diff
+Власники відзнаки
```

#### [`fof-badges.forum.loading`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.loading%22)

> Loading...

```diff
+Завантаження...
```

#### [`fof-badges.forum.more_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.more_users_earned%22)

> And more users...

```diff
+Та інші користувачі…
```

#### [`fof-badges.forum.my_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.my_badges%22)

> My Badges

```diff
+Мої відзнаки
```

#### [`fof-badges.forum.nav.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.nav.badges%22)

> Badges

```diff
+Відзнаки
```

#### [`fof-badges.forum.new_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.new_tag%22)

> NEW

```diff
+НОВА
```

#### [`fof-badges.forum.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.no_badges%22)

> No badges available yet.

```diff
+Доступних відзнак ще немає.
```

#### [`fof-badges.forum.no_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.no_users_earned%22)

> No one has earned this badge yet. Be the first!

```diff
+Цю відзнаку ще ніхто не отримав. Будьте першими!
```

#### [`fof-badges.forum.notification.a_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.notification.a_badge%22)

> a badge

```diff
+відзнаку
```

#### [`fof-badges.forum.notification.badge_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.notification.badge_earned%22)

> You earned {badge}

```diff
+Ви отримали відзнаку {badge}
```

#### [`fof-badges.forum.other_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.other_badges%22)

> Other Badges

```diff
+Інші відзнаки
```

#### [`fof-badges.forum.owned_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.owned_badge%22)

> You own this badge

```diff
+Ви маєте цю відзнаку
```

#### [`fof-badges.forum.toggle_category_dropdown`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.toggle_category_dropdown%22)

> Toggle category dropdown

```diff
+Відкрити або закрити список категорій
```

#### [`fof-badges.forum.user.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.assign_badge%22)

> Assign Badge

```diff
+Надати відзнаку
```

#### [`fof-badges.forum.user.assign_badge_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.assign_badge_title%22)

> Assign Badge to {username}

```diff
+Надати відзнаку користувачу {username}
```

#### [`fof-badges.forum.user.assign_button`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.assign_button%22)

> Assign Badge

```diff
+Надати відзнаку
```

#### [`fof-badges.forum.user.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.assign_reason%22)

> Reason (optional)

```diff
+Причина (необов'язково)
```

#### [`fof-badges.forum.user.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Ця причина відображатиметься на відзнаці користувача.
```

#### [`fof-badges.forum.user.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+За що надається ця відзнака?
```

#### [`fof-badges.forum.user.badge_actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.badge_actions%22)

> Badge actions

```diff
+Дії з відзнакою
```

#### [`fof-badges.forum.user.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+Відзнаку «{badge}» надано користувачу {username}!
```

#### [`fof-badges.forum.user.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.badge_revoked%22)

> Badge "{badge}" has been revoked.

```diff
+Відзнаку «{badge}» відкликано.
```

#### [`fof-badges.forum.user.badges_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.badges_count%22)

> {count, plural, one {# Badge} other {# Badges}}

```diff
+{count, plural, one {Відзнак: #} other {Відзнак: #}}
```

#### [`fof-badges.forum.user.badges_tab`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.badges_tab%22)

> Badges

```diff
+Відзнаки
```

#### [`fof-badges.forum.user.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.badges_title%22)

> {username}'s Badges

```diff
+Відзнаки користувача {username}
```

#### [`fof-badges.forum.user.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.cancel%22)

> Cancel

```diff
+Скасувати
```

#### [`fof-badges.forum.user.earned_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.earned_on%22)

> Earned {date}

```diff
+Отримано {date}
```

#### [`fof-badges.forum.user.favorite_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.favorite_badge%22)

> Favorite badge

```diff
+Улюблена відзнака
```

#### [`fof-badges.forum.user.hidden_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.hidden_badge%22)

> Hidden from profile

```diff
+Прихована з профілю
```

#### [`fof-badges.forum.user.hide_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.hide_badge%22)

> Hide from profile

```diff
+Приховати з профілю
```

#### [`fof-badges.forum.user.load_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.load_more%22)

> Load More

```diff
+Завантажити ще
```

#### [`fof-badges.forum.user.manually_awarded`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.manually_awarded%22)

> Manually awarded

```diff
+Надано вручну
```

#### [`fof-badges.forum.user.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.no_badges%22)

> This user hasn't earned any badges yet.

```diff
+Цей користувач ще не отримав жодної відзнаки.
```

#### [`fof-badges.forum.user.no_badges_available`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.no_badges_available%22)

> No badges available.

```diff
+Доступних відзнак немає.
```

#### [`fof-badges.forum.user.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate%22)

> Recalculate Badges

```diff
+Перерахувати відзнаки
```

#### [`fof-badges.forum.user.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Не вдалося перерахувати відзнаки. Спробуйте ще раз.
```

#### [`fof-badges.forum.user.recalculate_modal.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.all_badges%22)

> All automatic badges

```diff
+Усі автоматичні відзнаки
```

#### [`fof-badges.forum.user.recalculate_modal.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.badge_label%22)

> Badge to recalculate

```diff
+Відзнака для перерахунку
```

#### [`fof-badges.forum.user.recalculate_modal.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.manual%22)

> manual

```diff
+вручну
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_help%22)

> If enabled, the user will keep badges even if they no longer meet the criteria.

```diff
+Якщо ввімкнено, користувач збереже відзнаки, навіть якщо більше не відповідає критеріям.
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_label%22)

> Don't revoke existing badges

```diff
+Не відкликати наявні відзнаки
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_help%22)

> Re-apply badge actions (like adding to a group) if the user already has the badge.

```diff
+Повторно застосувати дії відзнаки (наприклад, додавання до групи), якщо користувач уже має її.
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_label%22)

> Re-apply actions to existing badges

```diff
+Повторно застосувати дії до наявних відзнак
```

#### [`fof-badges.forum.user.recalculate_modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.submit%22)

> Recalculate

```diff
+Перерахувати
```

#### [`fof-badges.forum.user.recalculate_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.title%22)

> Recalculate Badges

```diff
+Перерахувати відзнаки
```

#### [`fof-badges.forum.user.recalculate_reapplied`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_reapplied%22)

> Actions re-applied for {reapplied} badges

```diff
+Повторно застосовано дії для відзнак: {reapplied}
```

#### [`fof-badges.forum.user.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.recalculate_success%22)

> Badges recalculated! Awarded: {awarded}, Revoked: {revoked}, Re-applied: {reapplied}

```diff
+Відзнаки перераховано! Надано: {awarded}, відкликано: {revoked}, повторно застосовано: {reapplied}
```

#### [`fof-badges.forum.user.remove_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.remove_favorite%22)

> Remove favorite

```diff
+Прибрати з улюблених
```

#### [`fof-badges.forum.user.revoke_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.revoke_badge%22)

> Revoke badge

```diff
+Відкликати відзнаку
```

#### [`fof-badges.forum.user.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from this user?

```diff
+Ви впевнені, що хочете відкликати відзнаку «{badge}» у цього користувача?
```

#### [`fof-badges.forum.user.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.revoke_error%22)

> Failed to revoke badge.

```diff
+Не вдалося відкликати відзнаку.
```

#### [`fof-badges.forum.user.select_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.select_badge%22)

> Select a badge...

```diff
+Виберіть відзнаку…
```

#### [`fof-badges.forum.user.select_badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.select_badge_label%22)

> Select Badge

```diff
+Виберіть відзнаку
```

#### [`fof-badges.forum.user.set_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.set_favorite%22)

> Set as favorite

```diff
+Зробити улюбленою
```

#### [`fof-badges.forum.user.show_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.show_badge%22)

> Show on profile

```diff
+Показувати в профілі
```

#### [`fof-badges.forum.user.view_all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.forum.user.view_all_badges%22)

> View all badges

```diff
+Переглянути всі відзнаки
```

#### [`fof-badges.lib.rarity_common`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.lib.rarity_common%22)

> Common

```diff
+Звичайна
```

#### [`fof-badges.lib.rarity_epic`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.lib.rarity_epic%22)

> Epic

```diff
+Епічна
```

#### [`fof-badges.lib.rarity_explain`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.lib.rarity_explain%22)

> {percent}% of users have this badge

```diff
+Цю відзнаку мають {percent}% користувачів
```

#### [`fof-badges.lib.rarity_legendary`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.lib.rarity_legendary%22)

> Legendary

```diff
+Легендарна
```

#### [`fof-badges.lib.rarity_rare`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.lib.rarity_rare%22)

> Rare

```diff
+Рідкісна
```

#### [`fof-badges.lib.rarity_uncommon`](https://weblate.rob006.net/translate/flarum2/fof-badges/uk/?q=context%3A%3D%22fof-badges.lib.rarity_uncommon%22)

> Uncommon

```diff
+Незвичайна
```


### `fof-best-answer` (missing)

#### [`flarum-audit.lib.browser.discussion.best_answer_set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_set%22)

> Set {post} as best answer in {discussion}

```diff
+Допис {post} позначено як найкращу відповідь в обговоренні {discussion}
```

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/uk/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
+Для допису {post} скасовано позначку найкращої відповіді в обговоренні {discussion}
```


### `fof-bookmarks` (missing)

#### [`fof-bookmarks.admin.settings.independent_button`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.independent_button%22)

> Show the discussion bookmark control in the sidebar

```diff
+Показувати елемент додавання обговорення до закладок на бічній панелі
```

#### [`fof-bookmarks.admin.settings.independent_button_help`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.independent_button_help%22)

> When off, the control appears in the discussion dropdown menu instead.

```diff
+Якщо вимкнено, цей елемент показується в спадному меню обговорення.
```

#### [`fof-bookmarks.admin.settings.post_button_position`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position%22)

> Post bookmark button position

```diff
+Розташування кнопки закладки допису
```

#### [`fof-bookmarks.admin.settings.post_button_position_actions`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position_actions%22)

> Below post (quick actions)

```diff
+Під дописом (швидкі дії)
```

#### [`fof-bookmarks.admin.settings.post_button_position_header`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position_header%22)

> Above post (header)

```diff
+Над дописом (у заголовку)
```

#### [`fof-bookmarks.admin.settings.post_button_position_menu`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position_menu%22)

> In post menu (three dots)

```diff
+У меню допису (три крапки)
```

#### [`fof-bookmarks.admin.settings.post_header_badge`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_header_badge%22)

> Label bookmarked posts

```diff
+Позначати дописи, додані до закладок
```

#### [`fof-bookmarks.admin.settings.post_header_badge_help`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_header_badge_help%22)

> Shows a label above a bookmarked post. Only applies when the button is not in the header.

```diff
+Показує мітку над дописом, доданим до закладок. Застосовується, лише якщо кнопка розташована не в заголовку.
```

#### [`fof-bookmarks.forum.alert.added`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.alert.added%22)

> Bookmark added!

```diff
+Закладку додано!
```

#### [`fof-bookmarks.forum.alert.removed`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.alert.removed%22)

> Bookmark removed!

```diff
+Закладку видалено!
```

#### [`fof-bookmarks.forum.alert.show_bookmarks`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.alert.show_bookmarks%22)

> Go to bookmarks

```diff
+Перейти до закладок
```

#### [`fof-bookmarks.forum.badge`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.badge%22)

> Bookmarked

```diff
+У закладках
```

#### [`fof-bookmarks.forum.dropdownButton.add`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.dropdownButton.add%22)

> Add to bookmarks

```diff
+Додати до закладок
```

#### [`fof-bookmarks.forum.dropdownButton.remove`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.dropdownButton.remove%22)

> Remove from bookmarks

```diff
+Видалити із закладок
```

#### [`fof-bookmarks.forum.independentButton.add`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.independentButton.add%22)

> Bookmark

```diff
+Додати до закладок
```

#### [`fof-bookmarks.forum.independentButton.remove`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.independentButton.remove%22)

> Bookmarked

```diff
+У закладках
```

#### [`fof-bookmarks.forum.page.link`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.page.link%22)

> Bookmarks

```diff
+Закладки
```

#### [`fof-bookmarks.forum.page.tab.discussions`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.page.tab.discussions%22)

> Discussions

```diff
+Обговорення
```

#### [`fof-bookmarks.forum.page.tab.posts`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.page.tab.posts%22)

> Posts

```diff
+Дописи
```

#### [`fof-bookmarks.forum.page.title`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.page.title%22)

> Bookmarks

```diff
+Закладки
```

#### [`fof-bookmarks.forum.postButton.add`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.postButton.add%22)

> Bookmark

```diff
+Додати до закладок
```

#### [`fof-bookmarks.forum.postButton.remove`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/uk/?q=context%3A%3D%22fof-bookmarks.forum.postButton.remove%22)

> Bookmarked

```diff
+У закладках
```


### `fof-first-post-approval` (missing)

#### [`fof-first-post-approval.admin.permissions.bypass`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.permissions.bypass%22)

> Post without first post approval

```diff
+Публікувати без схвалення першого допису
```

#### [`fof-first-post-approval.admin.settings.discussionCount`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.settings.discussionCount%22)

> Number of first discussions to require approval for

```diff
+Кількість перших обговорень, що потребують схвалення
```

#### [`fof-first-post-approval.admin.settings.discussionCount_help`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.settings.discussionCount_help%22)

> Set to 0 to hold new discussions for approval based on the number of posts instead.

```diff
+Установіть 0, щоб надсилати нові обговорення на схвалення залежно від кількості дописів.
```

#### [`fof-first-post-approval.admin.settings.postCount`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.settings.postCount%22)

> Number of first posts to require approval for

```diff
+Кількість перших дописів, що потребують схвалення
```

#### [`fof-first-post-approval.admin.settings.postCount_help`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.settings.postCount_help%22)

> Once this many posts by a user have been approved, their posts are published immediately.

```diff
+Після схвалення цієї кількості дописів користувача його дописи публікуються одразу.
```

#### [`fof-first-post-approval.admin.settings.restrictPrivateDiscussions`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.settings.restrictPrivateDiscussions%22)

> Prevent private discussions until approved

```diff
+Заборонити приватні обговорення до схвалення
```

#### [`fof-first-post-approval.admin.settings.restrictPrivateDiscussions_help`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/uk/?q=context%3A%3D%22fof-first-post-approval.admin.settings.restrictPrivateDiscussions_help%22)

> Private discussions cannot be held for approval, so users still subject to first post approval are stopped from starting them. Turn this off to let them start private discussions freely.

```diff
+Приватні обговорення неможливо затримати для схвалення, тому користувачам, чиї перші дописи ще потребують схвалення, заборонено їх розпочинати. Вимкніть, щоб дозволити їм вільно створювати приватні обговорення.
```


### `fof-follow-tags` (missing)

#### [`fof-follow-tags.admin.basics.following_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.basics.following_label%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```

#### [`fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label%22)

> Show all discussions on the Following page for guests

```diff
+Показувати гостям усі обговорення на сторінці відстежуваних обговорень
```

#### [`fof-follow-tags.admin.settings.prompt_button_on_following_page_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_button_on_following_page_label%22)

> Show a "Choose tags to follow" button on the Following page

```diff
+Показувати кнопку «Вибрати теги для стеження» на сторінці відстежуваних обговорень
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_help`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_help%22)

> Users who have not confirmed their choice yet will be shown a modal asking them to follow tags. The modal will keep coming back on each visit until they press "Continue to forum".
>

```diff
+Користувачі, які ще не підтвердили вибір, бачитимуть вікно з пропозицією стежити за тегами. Воно з’являтиметься під час кожного відвідування, доки користувач не натисне «Перейти до форуму».
+
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_label%22)

> Prompt new users to choose tags to follow

```diff
+Пропонувати новим користувачам вибрати теги для стеження
```

#### [`fof-follow-tags.admin.settings.prompt_tag_ids_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_ids_label%22)

> Tags to offer

```diff
+Теги для пропозиції
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_label%22)

> Tags to offer in the prompt

```diff
+Теги для пропозиції
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.all`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.all%22)

> All tags

```diff
+Усі теги
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.list`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.list%22)

> Tags selected below

```diff
+Вибрані нижче теги
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary%22)

> First-level primary tags

```diff
+Основні теги першого рівня
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren%22)

> All primary tags of any level

```diff
+Усі основні теги будь-якого рівня
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary%22)

> First-level primary tags and secondary tags

```diff
+Основні теги першого рівня та додаткові теги
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary%22)

> Only secondary tags

```diff
+Лише додаткові теги
```

#### [`fof-follow-tags.forum.prompt.choose_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.prompt.choose_button%22)

> Choose tags to follow

```diff
+Вибрати теги для стеження
```

#### [`fof-follow-tags.forum.prompt.continue_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.prompt.continue_button%22)

> Continue to forum

```diff
+Перейти до форуму
```

#### [`fof-follow-tags.forum.prompt.later_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.prompt.later_button%22)

> Remind me later

```diff
+Нагадати пізніше
```

#### [`fof-follow-tags.forum.prompt.modal_title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/uk/?q=context%3A%3D%22fof-follow-tags.forum.prompt.modal_title%22)

> Choose tags to follow

```diff
+Вибрати теги для стеження
```


### `fof-forum-stats-widget` (missing)

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/uk/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
+Кількість знаків після коми для великих чисел (0-2).
```

#### [`fof-forum-stats-widget.admin.settings.decimal_places.label`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/uk/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.label%22)

> Decimal Places

```diff
+Знаків після коми
```

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/uk/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
+Дописи
```

#### [`fof-forum-stats-widget.forum.widget.stats.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/uk/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.discussion_count%22)

> Discussions

```diff
+Обговорення
```

#### [`fof-forum-stats-widget.forum.widget.stats.user_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/uk/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.user_count%22)

> Users

```diff
+Користувачі
```

#### [`fof-forum-stats-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/uk/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.title%22)

> Forum Stats

```diff
+Статистика форуму
```


### `fof-forum-widgets-core` (missing)

#### [`fof-forum-widgets-core.admin.cache_not_writable_warning`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/uk/?q=context%3A%3D%22fof-forum-widgets-core.admin.cache_not_writable_warning%22)

> Cache is currently not writable, this will prevent certain widgets from working. Please fix your storage directory's permissions.

```diff
+Зараз немає дозволу на запис кешу, тому деякі віджети не працюватимуть. Виправте дозволи для каталогу сховища.
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/uk/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load%22)

> Prefer loading all widgets data with initial page response.

```diff
+Завантажувати дані всіх віджетів разом із початковою відповіддю сторінки
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/uk/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help%22)

> Instead of loading widget data after initial page load by sending API requests, the data will be (when possible) loaded with the inital load.

```diff
+Замість окремих запитів API після початкового завантаження сторінки дані віджетів за можливості завантажуватимуться одразу з нею.
```


### `fof-geoip` (missing)

#### [`fof-geoip.admin.settings.allow_custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_help%22)

> When enabled, users can pick a country flag to display on their posts via their profile settings. A user-selected flag is shown to everyone and takes precedence over the IP-based flag. Requires "Show country flag for each post" to be enabled.

```diff
+Якщо ввімкнено, користувачі можуть вибрати в налаштуваннях профілю прапор країни для своїх дописів. Його бачитимуть усі замість прапора, визначеного за IP-адресою. Потрібно ввімкнути показ прапора країни для кожного допису.
```

#### [`fof-geoip.admin.settings.allow_custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_label%22)

> Allow users to choose a custom country flag

```diff
+Дозволити користувачам вибирати власний прапор країни
```

#### [`fof-geoip.forum.user.settings.custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_help%22)

> Choose a country flag to display on your posts. This flag is visible to everyone and is shown instead of the flag based on your IP address.

```diff
+Виберіть прапор країни для своїх дописів. Його бачитимуть усі замість прапора, визначеного за вашою IP-адресою.
```

#### [`fof-geoip.forum.user.settings.custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_label%22)

> Custom country flag

```diff
+Власний прапор країни
```

#### [`fof-geoip.lib.alerts.ip_copied`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.alerts.ip_copied%22)

> Copied IP Address

```diff
+IP-адресу скопійовано
```

#### [`fof-geoip.lib.copy_ip_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.copy_ip_label%22)

> Copy IP to clipboard

```diff
+Скопіювати IP-адресу до буфера обміну
```

#### [`fof-geoip.lib.custom_flag.none`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.custom_flag.none%22)

> No custom flag

```diff
+Без власного прапора
```

#### [`fof-geoip.lib.map_button_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_button_label%22)

> IP Info

```diff
+Відомості про IP
```

#### [`fof-geoip.lib.map_modal.as`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.as%22)

> ASN

```diff
+ASN
```

#### [`fof-geoip.lib.map_modal.error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.error%22)

> Error

```diff
+Помилка
```

#### [`fof-geoip.lib.map_modal.ip_address`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.ip_address%22)

> IP Address

```diff
+IP-адреса
```

#### [`fof-geoip.lib.map_modal.isp`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.isp%22)

> ISP

```diff
+ISP
```

#### [`fof-geoip.lib.map_modal.mobile`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.mobile%22)

> Cellular network

```diff
+Стільникова мережа
```

#### [`fof-geoip.lib.map_modal.not_enough_data`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.not_enough_data%22)

> Not enough data to draw a map

```diff
+Недостатньо даних для побудови карти
```

#### [`fof-geoip.lib.map_modal.organization`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.organization%22)

> Organization

```diff
+Організація
```

#### [`fof-geoip.lib.map_modal.threat_level`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_level%22)

> Threat Level

```diff
+Рівень загрози
```

#### [`fof-geoip.lib.map_modal.threat_types`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_types%22)

> Threat Types

```diff
+Типи загроз
```

#### [`fof-geoip.lib.map_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.title%22)

> IP Information

```diff
+Відомості про IP
```

#### [`fof-geoip.lib.map_modal.zip_code`](https://weblate.rob006.net/translate/flarum2/fof-geoip/uk/?q=context%3A%3D%22fof-geoip.lib.map_modal.zip_code%22)

> Zip Code

```diff
+Поштовий індекс
```


### `fof-mailing` (missing)

#### [`fof-mailing.admin.permissions.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_all%22)

> Send emails to groups or all users

```diff
+Надсилати листи групам або всім користувачам
```

#### [`fof-mailing.admin.permissions.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_individual%22)

> Send emails to individual users

```diff
+Надсилати листи окремим користувачам
```

#### [`fof-mailing.api.no_recipients`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.api.no_recipients%22)

> No recipient were matched

```diff
+Відповідних одержувачів не знайдено
```

#### [`fof-mailing.email.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.email.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.links.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.links.mail_all%22)

> Send Email

```diff
+Надіслати лист
```

#### [`fof-mailing.forum.links.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.links.mail_individual%22)

> Email This User

```diff
+Написати цьому користувачу
```

#### [`fof-mailing.forum.modal_mail.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.modal_mail.message_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.message_label%22)

> Message

```diff
+Повідомлення
```

#### [`fof-mailing.forum.modal_mail.recipients_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_label%22)

> Recipients

```diff
+Одержувачі
```

#### [`fof-mailing.forum.modal_mail.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_placeholder%22)

> Add more recipients...

```diff
+Додати одержувачів…
```

#### [`fof-mailing.forum.modal_mail.subject_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.subject_label%22)

> Subject

```diff
+Тема
```

#### [`fof-mailing.forum.modal_mail.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.submit_button%22)

> Send

```diff
+Надіслати
```

#### [`fof-mailing.forum.modal_mail.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_mail.title_text%22)

> Compose Mail

```diff
+Написати лист
```

#### [`fof-mailing.forum.modal_sent.on_its_way`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_sent.on_its_way%22)

> High Five! Your mail is on its way to {recipientsCount} recipients!

```diff
+Чудово! Ваш лист прямує до одержувачів: {recipientsCount}!
```

#### [`fof-mailing.forum.modal_sent.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.modal_sent.title_text%22)

> Mail Sent!

```diff
+Лист надіслано!
```

#### [`fof-mailing.forum.recipient_kinds.email`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.email%22)

> Email

```diff
+Електронна пошта
```

#### [`fof-mailing.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.group%22)

> Group

```diff
+Група
```

#### [`fof-mailing.forum.recipient_kinds.user`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.user%22)

> User

```diff
+Користувач
```

#### [`fof-mailing.ref.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/uk/?q=context%3A%3D%22fof-mailing.ref.default_subject%22)

> Message from forum administration

```diff
+Повідомлення від адміністрації форуму
```


### `fof-mark-unread` (missing)

#### [`fof-mark-unread.admin.permissions.mark_unread_label`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/uk/?q=context%3A%3D%22fof-mark-unread.admin.permissions.mark_unread_label%22)

> Mark discussions as unread

```diff
+Позначати обговорення як непрочитані
```

#### [`fof-mark-unread.forum.discussion_controls.mark_unread_button`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/uk/?q=context%3A%3D%22fof-mark-unread.forum.discussion_controls.mark_unread_button%22)

> Mark as unread

```diff
+Позначити як непрочитане
```


### `fof-masquerade` (missing)

#### [`flarum-audit.lib.browser.masquerade.profile_updated`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/uk/?q=context%3A%3D%22flarum-audit.lib.browser.masquerade.profile_updated%22)

> Updated {username}'s profile fields

```diff
+Оновлено поля профілю користувача {username}
```


### `fof-move-posts` (missing)

#### [`fof-move-posts.admin.permissions.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.admin.permissions.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.admin.settings.group_sequential_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.admin.settings.group_sequential_posts%22)

> Group sequential post moved event posts into one.

```diff
+Об’єднувати послідовні службові дописи про переміщення дописів в один.
```

#### [`fof-move-posts.admin.settings.moved_first_post_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content%22)

> Moved Discussion (First Post) Content

```diff
+Вміст першого допису переміщеного обговорення
```

#### [`fof-move-posts.admin.settings.moved_first_post_content_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content_help%22)

> When you have a discussion with only one single post, moving that post will result in the initial discussion's first post to be edited to point to the new discussion. You can edit the contents of that post here.
>

```diff
+Якщо ви маєте обговорення з одним дописом, переміщення цього допису призведе до того, що перший допис початкового обговорення буде відредаговано так, щоб він вказував на нове обговорення. Ви можете відредагувати вміст цього допису тут.
+
```

#### [`fof-move-posts.forum.alerts.posts_moved_to`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.alerts.posts_moved_to%22)

> {count, plural, one {Post moved to {target\_discussion}.} other {Moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, =1 {Допис переміщено до {target_discussion}.} one {До {target_discussion} переміщено дописів: {count}.} other {До {target_discussion} переміщено дописів: {count}.}}
```

#### [`fof-move-posts.forum.badge.first_moved_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.badge.first_moved_tooltip%22)

> Moved

```diff
+Перенесено
```

#### [`fof-move-posts.forum.discussion.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.discussion.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.error.move_old_post_to_newer_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.error.move_old_post_to_newer_discussion%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.error.move_posts_to_same_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.error.move_posts_to_same_discussion%22)

> You cannot move posts to the same discussion.

```diff
+Неможливо перемістити дописи в те саме обговорення.
```

#### [`fof-move-posts.forum.modal.check`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.check%22)

> Check Operation Type

```diff
+Перевірити тип операції
```

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
+Ви збираєтеся перемістити всі дописи з цього обговорення до нового. Зазвичай доцільніше відредагувати наявне обговорення, наприклад змінити заголовок, теги чи інші властивості. Продовжити?
```

#### [`fof-move-posts.forum.modal.destination`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.destination%22)

> Destination Discussion

```diff
+Місце призначення обговорення
```

#### [`fof-move-posts.forum.modal.discussion_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_help%22)

> The tags of the source discussion will be used, and can be changed after creation.

```diff
+Будуть використані теги обговорення джерела, які можна змінити після створення.
```

#### [`fof-move-posts.forum.modal.discussion_name`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_name%22)

> =&gt; core.forum.composer\_discussion.title\_placeholder

```diff
+=> core.forum.composer_discussion.title_placeholder
```

#### [`fof-move-posts.forum.modal.new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.new_discussion%22)

> New Discussion

```diff
+Нове обговорення
```

#### [`fof-move-posts.forum.modal.selected_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.selected_posts%22)

> {count, plural, one {One Post Selected} other {{count} Posts Selected}}

```diff
+{count, plural, =1 {Вибрано один допис} one {Вибрано дописів: {count}} other {Вибрано дописів: {count}}}
```

#### [`fof-move-posts.forum.modal.status.complex_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.status.complex_move%22)

> Will be a complex move, posts will be pushed between posts, leading to old URL references of the target discussion's posts to change as well.

```diff
+Це буде складне переміщення: дописи буде вставлено між іншими дописами, через що старі URL-посилання на дописи цільового обговорення також зміняться.
```

#### [`fof-move-posts.forum.modal.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.status.old_to_new_move%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.modal.status.simple_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.status.simple_move%22)

> Will be a simple move, posts will all be added at the end of the discussion.

```diff
+Це буде простий хід, всі дописи будуть додані в кінці обговорення.
```

#### [`fof-move-posts.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.submit%22)

> Proceed

```diff
+Продовжуйте
```

#### [`fof-move-posts.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.modal.title%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.notifications.post_moved_text`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.notifications.post_moved_text%22)

> One or more of your posts were moved to {targetDiscussionTitle}.

```diff
+Один або декілька ваших дописів було переміщено до {targetDiscussionTitle}.
```

#### [`fof-move-posts.forum.post.move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.post.move%22)

> Select to move

```diff
+Оберіть, щоб перемістити
```

#### [`fof-move-posts.forum.post.moving`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.post.moving%22)

> Moving Post

```diff
+Переміщення допису
```

#### [`fof-move-posts.forum.post.unmove`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.post.unmove%22)

> Unselect to move

```diff
+Зніміть виділення, щоб перемістити
```

#### [`fof-move-posts.forum.post_stream.post_moved`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.forum.post_stream.post_moved%22)

> {count, plural, one {{username} moved a post to {target\_discussion}.} other {{username} moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, =1 {Користувач {username} перемістив допис до {target_discussion}.} one {Користувач {username} перемістив до {target_discussion} дописів: {count}.} other {Користувач {username} перемістив до {target_discussion} дописів: {count}.}}
```

#### [`fof-move-posts.lib.discussion.first_post.default_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.lib.discussion.first_post.default_content%22)

> \*This post has been moved to \*\*\[%DISCUSSION\_NAME%\](%POST\_LINK%)\*\*.\*
>

```diff
+*Цей допис було перенесено до **[%DISCUSSION_NAME%](%POST_LINK%)**.*
+
```

#### [`fof-move-posts.ref.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.ref.move_posts%22)

> Move Posts

```diff
+Перенести дописи
```

#### [`fof-move-posts.ref.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/uk/?q=context%3A%3D%22fof-move-posts.ref.status.old_to_new_move%22)

> Cannot move an old post to a newer discussion.

```diff
+Неможливо перемістити старий допис до новішого обговорення.
```


### `fof-oauth` (missing)

#### [`fof-oauth.email.provider_email_change_notice.subject`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.email.provider_email_change_notice.subject%22)

> Email Address Change Requested

```diff
+Запит на зміну електронної адреси
```

#### [`fof-oauth.forum.log_in.unverified_email_in_use`](https://weblate.rob006.net/translate/flarum2/fof-oauth/uk/?q=context%3A%3D%22fof-oauth.forum.log_in.unverified_email_in_use%22)

> {provider} hasn't confirmed this email address, so we can't use it to sign you in. If you already have an account, log in below, then link {provider} from your account settings.

```diff
+Сервіс {provider} не підтвердив цю електронну адресу, тому ми не можемо використати її для входу. Якщо ви вже маєте обліковий запис, увійдіть нижче, а потім пов’яжіть {provider} у налаштуваннях облікового запису.
```


### `fof-online-users-widget` (missing)

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/uk/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
+Переглядати віджет користувачів у мережі
```

#### [`fof-online-users-widget.admin.settings.cache_ttl`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/uk/?q=context%3A%3D%22fof-online-users-widget.admin.settings.cache_ttl%22)

> Time to cache the users list (in seconds)

```diff
+Час кешування списку користувачів (секунди)
```

#### [`fof-online-users-widget.admin.settings.last_seen_interval`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/uk/?q=context%3A%3D%22fof-online-users-widget.admin.settings.last_seen_interval%22)

> Last seen interval to consider a user online (in minutes)

```diff
+Час від останньої активності, протягом якого користувач вважається онлайн (хвилини)
```

#### [`fof-online-users-widget.admin.settings.max_users`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/uk/?q=context%3A%3D%22fof-online-users-widget.admin.settings.max_users%22)

> Max shown users

```diff
+Максимальна кількість користувачів для показу
```

#### [`fof-online-users-widget.forum.widget.empty`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/uk/?q=context%3A%3D%22fof-online-users-widget.forum.widget.empty%22)

> No Users Currently Online.

```diff
+Зараз у мережі немає користувачів.
```

#### [`fof-online-users-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/uk/?q=context%3A%3D%22fof-online-users-widget.forum.widget.title%22)

> Online Users

```diff
+Користувачі в мережі
```


### `fof-photoswipe` (missing)

#### [`fof-photoswipe.forum.arrow_next_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/uk/?q=context%3A%3D%22fof-photoswipe.forum.arrow_next_title%22)

> Next

```diff
+Далі
```

#### [`fof-photoswipe.forum.arrow_prev_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/uk/?q=context%3A%3D%22fof-photoswipe.forum.arrow_prev_title%22)

> Previous

```diff
+Назад
```

#### [`fof-photoswipe.forum.close_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/uk/?q=context%3A%3D%22fof-photoswipe.forum.close_title%22)

> Close

```diff
+Закрити
```

#### [`fof-photoswipe.forum.error_msg`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/uk/?q=context%3A%3D%22fof-photoswipe.forum.error_msg%22)

> The image cannot be loaded

```diff
+Не вдалося завантажити зображення
```

#### [`fof-photoswipe.forum.zoom_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/uk/?q=context%3A%3D%22fof-photoswipe.forum.zoom_title%22)

> Zoom

```diff
+Масштаб
```


### `fof-polls` (missing)

#### [`fof-polls.forum.compose.draft_saved`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.draft_saved%22)

> Draft saved

```diff
+Чернетку збережено
```

#### [`fof-polls.forum.compose.publish`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.publish%22)

> Publish

```diff
+Опублікувати
```

#### [`fof-polls.forum.compose.save_as_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.save_as_draft%22)

> Save as draft

```diff
+Зберегти як чернетку
```

#### [`fof-polls.forum.compose.schedule`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.schedule%22)

> Schedule

```diff
+Розклад
```

#### [`fof-polls.forum.compose.schedule_datetime_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.schedule_datetime_label%22)

> Publish at

```diff
+Час публікації
```

#### [`fof-polls.forum.compose.schedule_publication`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication%22)

> Schedule publication

```diff
+Запланувати публікацію
```

#### [`fof-polls.forum.compose.schedule_publication_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication_edit%22)

> Edit scheduled publication

```diff
+Змінити заплановану публікацію
```

#### [`fof-polls.forum.compose.schedule_submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.schedule_submit%22)

> Schedule

```diff
+Розклад
```

#### [`fof-polls.forum.compose.submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.submit%22)

> Submit

```diff
+Надіслати
```

#### [`fof-polls.forum.compose.update_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.compose.update_draft%22)

> Update draft

```diff
+Оновити чернетку
```

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
+{count, plural, one {Порожніх відповідей: #. Заповніть або видаліть їх.} other {Порожніх відповідей: #. Заповніть або видаліть їх.}}
```

#### [`fof-polls.forum.poll.draft_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll.draft_label%22)

> Draft

```diff
+Чернетка
```

#### [`fof-polls.forum.poll.scheduled_error_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_error_tooltip%22)

> This scheduled publication failed. Open the poll to see why.

```diff
+Не вдалося виконати заплановану публікацію. Відкрийте опитування, щоб дізнатися причину.
```

#### [`fof-polls.forum.poll.scheduled_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_label%22)

> Scheduled for {date}

```diff
+Заплановано на {date}
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_label%22)

> Cancel scheduled publication

```diff
+Скасувати заплановану публікацію
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_success%22)

> Scheduled publication cancelled.

```diff
+Заплановану публікацію скасовано.
```

#### [`fof-polls.forum.poll_controls.edit_schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.edit_schedule_publish_label%22)

> Edit scheduled publication

```diff
+Змінити заплановану публікацію
```

#### [`fof-polls.forum.poll_controls.publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_label%22)

> Publish now

```diff
+Опублікувати зараз
```

#### [`fof-polls.forum.poll_controls.publish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_success%22)

> Poll published.

```diff
+Опитування опубліковано.
```

#### [`fof-polls.forum.poll_controls.schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.schedule_publish_label%22)

> Schedule publication

```diff
+Запланувати публікацію
```

#### [`fof-polls.forum.poll_controls.unpublish_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_confirmation%22)

> Move this poll back to draft? It will disappear from the showcase.

```diff
+Повернути це опитування до чернеток? Воно зникне з вітрини.
```

#### [`fof-polls.forum.poll_controls.unpublish_error_has_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_error_has_votes%22)

> Cannot unpublish — the poll already has votes. Delete it instead.

```diff
+Неможливо скасувати публікацію: в опитуванні вже є голоси. Натомість видаліть його.
```

#### [`fof-polls.forum.poll_controls.unpublish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_label%22)

> Move back to draft

```diff
+Повернути до чернеток
```

#### [`fof-polls.forum.poll_controls.unpublish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_success%22)

> Poll moved to draft.

```diff
+Опитування повернуто до чернеток.
```

#### [`fof-polls.forum.polls_list.status_filter.all`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.all%22)

> All

```diff
+Усі
```

#### [`fof-polls.forum.polls_list.status_filter.draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.draft%22)

> Drafts

```diff
+Чернетки
```

#### [`fof-polls.forum.polls_list.status_filter.published`](https://weblate.rob006.net/translate/flarum2/fof-polls/uk/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.published%22)

> Published

```diff
+Опубліковані
```


### `fof-pwa` (missing)

#### [`flarum-gdpr.lib.data.pushsubscriptions.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22flarum-gdpr.lib.data.pushsubscriptions.delete_description%22)

> Deletes all push notification subscriptions and device tokens associated with the user.

```diff
+Видаляє всі підписки на push-сповіщення й токени пристроїв користувача.
```

#### [`flarum-gdpr.lib.data.pushsubscriptions.export_description`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22flarum-gdpr.lib.data.pushsubscriptions.export_description%22)

> Exports all push notification subscriptions and device tokens associated with the user.

```diff
+Експортує всі підписки на push-сповіщення й токени пристроїв користувача.
```

#### [`fof-pwa.admin.nav.pwa_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.nav.pwa_button%22)

> Progressive Web App

```diff
+Прогресивний вебзастосунок
```

#### [`fof-pwa.admin.pwa.about.description_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.about.description_label%22)

> Description

```diff
+Опис
```

#### [`fof-pwa.admin.pwa.about.description_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.about.description_text%22)

> You can set the description on the 'Basics' page in your admin dashboard.

```diff
+Опис можна задати на сторінці основних налаштувань у панелі адміністратора.
```

#### [`fof-pwa.admin.pwa.about.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.about.heading%22)

> About

```diff
+Відомості
```

#### [`fof-pwa.admin.pwa.about.long_name_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.about.long_name_label%22)

> Long name

```diff
+Повна назва
```

#### [`fof-pwa.admin.pwa.about.long_name_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.about.long_name_text%22)

> The name of the web application displayed to the user.

```diff
+Назва вебзастосунку, яку бачить користувач.
```

#### [`fof-pwa.admin.pwa.about.short_name_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.about.short_name_label%22)

> Short name

```diff
+Коротка назва
```

#### [`fof-pwa.admin.pwa.colors.background_color_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.colors.background_color_label%22)

> Background color

```diff
+Колір тла
```

#### [`fof-pwa.admin.pwa.colors.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.colors.heading%22)

> Colors

```diff
+Кольори
```

#### [`fof-pwa.admin.pwa.colors.theme_color_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.colors.theme_color_label%22)

> Theme color

```diff
+Колір теми
```

#### [`fof-pwa.admin.pwa.firebase_config.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.firebase_config.heading%22)

> Firebase

```diff
+Firebase
```

#### [`fof-pwa.admin.pwa.firebase_config.upload_file`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.firebase_config.upload_file%22)

> Upload file

```diff
+Завантажити файл
```

#### [`fof-pwa.admin.pwa.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.heading%22)

> Progressive Web App Configuration

```diff
+Налаштування прогресивного вебзастосунку
```

#### [`fof-pwa.admin.pwa.logo_heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.logo_heading%22)

> Logos and Icons

```diff
+Логотипи й значки
```

#### [`fof-pwa.admin.pwa.maintenance.debug_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.debug_text%22)

> This will log info about notifications to \`storage/logs\`. It should generally be disabled to avoid filling up logs unnecessarily.

```diff
+Записує відомості про сповіщення до `storage/logs`. Зазвичай слід вимикати, щоб не заповнювати журнали без потреби.
```

#### [`fof-pwa.admin.pwa.maintenance.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.heading%22)

> Maintenance

```diff
+Обслуговування
```

#### [`fof-pwa.admin.pwa.maintenance.reset_vapid_confirm`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.reset_vapid_confirm%22)

> Resetting VAPID keys will remove any subscriptions using the existing keys, so users won't receive any notifications until the next time they visit your site. This should only be done when setting up push notifications for the first time, or if push notifications aren't working at all and there's a warning about missing VAPID keys above.

```diff
+Скидання ключів VAPID видалить підписки, що використовують наявні ключі. Користувачі не отримуватимуть сповіщень до наступного відвідування сайту. Виконуйте цю дію лише під час першого налаштування push-сповіщень або якщо вони зовсім не працюють і вище є попередження про відсутні ключі VAPID.
```

#### [`fof-pwa.admin.pwa.maintenance.reset_vapid_success`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.reset_vapid_success%22)

> Successfully reset VAPID keys. {count} subscriptions were reset. Reload the page to see an updated status check report.

```diff
+Ключі VAPID скинуто. Скинуто підписок: {count}. Оновіть сторінку, щоб переглянути новий звіт перевірки стану.
```

#### [`fof-pwa.admin.pwa.other.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.other.heading%22)

> Other

```diff
+Інше
```

#### [`fof-pwa.admin.pwa.other.share_buttons_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.other.share_buttons_label%22)

> Enable share buttons

```diff
+Увімкнути кнопки поширення
```

#### [`fof-pwa.admin.pwa.other.share_buttons_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.other.share_buttons_text%22)

> If enabled, a "Share" button will be added to discussions, posts, and users.

```diff
+Якщо ввімкнено, до обговорень, дописів і користувачів буде додано кнопку «Поширити».
```

#### [`fof-pwa.admin.pwa.refreshed_message`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.refreshed_message%22)

> PWA config refreshed successfully.

```diff
+Конфігурацію PWA оновлено.
```

#### [`fof-pwa.admin.pwa.status_check_heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.status_check_heading%22)

> Status Check

```diff
+Перевірка стану
```

#### [`fof-pwa.admin.pwa.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.pwa.submit_button%22)

> Save Settings

```diff
+Зберегти налаштування
```

#### [`fof-pwa.admin.status.no_logo`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.status.no_logo%22)

> You must upload at least one logo, with a size of at least 144x144px, for the PWA to be installable.

```diff
+Для встановлення PWA потрібно завантажити принаймні один логотип розміром не менше ніж 144x144px.
```

#### [`fof-pwa.admin.status.no_name`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.admin.status.no_name%22)

> You must provide a full name for your app to work.

```diff
+Для роботи застосунку потрібно вказати повну назву.
```

#### [`fof-pwa.forum.discussion_controls.share_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.discussion_controls.share_button%22)

> Share

```diff
+Поділитися
```

#### [`fof-pwa.forum.post_controls.share_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.post_controls.share_button%22)

> Share

```diff
+Поділитися
```

#### [`fof-pwa.forum.settings.push_header`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.push_header%22)

> Push

```diff
+Push-сповіщення
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_default`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_default%22)

> Due to browser restrictions, you must opt in to receive push notifications on this device.

```diff
+Через обмеження браузера ви маєте надати згоду на отримання push-сповіщень на цьому пристрої.
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_default_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_default_button%22)

> Opt In

```diff
+Надати згоду
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_denied`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_denied%22)

> You must adjust your browser settings to receive push notifications on this device.

```diff
+Щоб отримувати push-сповіщення на цьому пристрої, потрібно змінити налаштування браузера.
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_denied_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_denied_button%22)

> Learn How

```diff
+Дізнатися як
```

#### [`fof-pwa.forum.settings.pwa_notifications.no_browser_support`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.no_browser_support%22)

> This browser does not support push notifications for progressive web apps.

```diff
+Цей браузер не підтримує push-сповіщення для прогресивних вебзастосунків.
```

#### [`fof-pwa.forum.settings.pwa_notifications.no_browser_support_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.no_browser_support_button%22)

> Learn More

```diff
+Докладніше
```

#### [`fof-pwa.forum.user_controls.share_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.forum.user_controls.share_button%22)

> Share

```diff
+Поділитися
```

#### [`fof-pwa.views.offline.header`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.views.offline.header%22)

> Network connection error

```diff
+Помилка з’єднання з мережею
```

#### [`fof-pwa.views.offline.text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/uk/?q=context%3A%3D%22fof-pwa.views.offline.text%22)

> This app requires a network connection; it cannot be used offline. Please check your connection.

```diff
+Застосунок потребує з’єднання з мережею й не працює без нього. Перевірте підключення.
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/uk/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
+Не розділяти абзаци порожнім рядком.
```

#### [`fof-rich-text.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/uk/?q=context%3A%3D%22fof-rich-text.lib.composer.link_tooltip%22)

> Add a link

```diff
+Посилання
```

#### [`fof-rich-text.lib.composer.spoiler_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/uk/?q=context%3A%3D%22fof-rich-text.lib.composer.spoiler_block_tooltip%22)

> Block Spoiler/Dropdown

```diff
+Блок спойлера або спадний блок
```

#### [`fof-rich-text.lib.composer.text_type_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/uk/?q=context%3A%3D%22fof-rich-text.lib.composer.text_type_tooltip%22)

> Select Text Type

```diff
+Виберіть тип тексту
```


### `fof-sentry` (missing)

#### [`fof-sentry.admin.sections.backend_performance`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.backend_performance%22)

> Backend Performance Monitoring

```diff
+Моніторинг швидкодії серверної частини
```

#### [`fof-sentry.admin.sections.backend_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.backend_performance_help%22)

> Track PHP backend performance and profiling. Set sample rates to control overhead.

```diff
+Відстежуйте швидкодію та профілювання серверної частини PHP. Налаштуйте частку вибірки, щоб контролювати накладні витрати.
```

#### [`fof-sentry.admin.sections.database_monitoring`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.database_monitoring%22)

> Database Query Monitoring

```diff
+Моніторинг запитів до бази даних
```

#### [`fof-sentry.admin.sections.database_monitoring_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.database_monitoring_help%22)

> Monitor database query performance, detect slow queries and N+1 issues. Only active when backend performance monitoring is enabled.

```diff
+Відстежуйте швидкодію запитів до бази даних, виявляйте повільні запити й проблеми N+1. Працює лише за ввімкненого моніторингу серверної частини.
```

#### [`fof-sentry.admin.sections.frontend_monitoring`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.frontend_monitoring%22)

> Frontend (JavaScript) Monitoring

```diff
+Моніторинг клієнтської частини (JavaScript)
```

#### [`fof-sentry.admin.sections.general`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.general%22)

> General Settings

```diff
+Загальні налаштування
```

#### [`fof-sentry.admin.sections.general_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.general_help%22)

> Configure your Sentry DSN and environment settings.

```diff
+Налаштуйте DSN Sentry та параметри середовища.
```

#### [`fof-sentry.admin.sections.user_context`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.user_context%22)

> User Context

```diff
+Відомості про користувача
```

#### [`fof-sentry.admin.sections.user_context_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sections.user_context_help%22)

> Control what user information is sent to Sentry with error reports.

```diff
+Визначте, які відомості про користувача надсилаються до Sentry у звітах про помилки.
```

#### [`fof-sentry.admin.sentry_settings`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.sentry_settings%22)

> Sentry Settings

```diff
+Налаштування Sentry
```

#### [`fof-sentry.admin.settings.db_n_plus_one_detection_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_detection_help%22)

> Automatically detect N+1 query problems by tracking repeated query patterns. N+1 queries occur when code executes the same query multiple times in a loop instead of using proper joins or eager loading. Helps identify significant performance bottlenecks.

```diff
+Автоматично виявляти проблеми N+1 за повторюваними шаблонами запитів. Вони виникають, коли код багаторазово виконує той самий запит у циклі замість належних об’єднань таблиць або попереднього завантаження даних. Це допомагає знаходити суттєві обмеження швидкодії.
```

#### [`fof-sentry.admin.settings.db_n_plus_one_detection_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_detection_label%22)

> Enable N+1 Query Detection

```diff
+Увімкнути виявлення запитів N+1
```

#### [`fof-sentry.admin.settings.db_n_plus_one_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_threshold_help%22)

> Number of times a query pattern must repeat to be flagged as a potential N+1 issue. Sensitivity levels: 5-10 (aggressive, may have false positives), 10-20 (balanced, recommended), 20+ (conservative, only flags severe issues). Default: 10.

```diff
+Кількість повторень шаблону запиту, після якої він вважається можливою проблемою N+1. Чутливість: 5-10 — висока, можливі хибні спрацювання; 10-20 — збалансована, рекомендована; 20+ — лише серйозні випадки. Типово — 10.
```

#### [`fof-sentry.admin.settings.db_n_plus_one_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_threshold_label%22)

> N+1 Detection Threshold

```diff
+Поріг виявлення N+1
```

#### [`fof-sentry.admin.settings.db_query_sample_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_help%22)

> Percentage of database queries to track in performance monitoring (0-100%). Impact levels: 100% (track all queries, maximum visibility, higher overhead), 50% (track half, balanced), 10-25% (track subset, lower overhead, still catches issues), 0% (track only slow queries, minimum overhead). Note: Slow queries (above threshold) are ALWAYS tracked regardless of this setting. Recommendation: Use 10-25% on high-traffic sites to reduce performance impact and Sentry data costs.

```diff
+Відсоток запитів до бази даних для моніторингу швидкодії (0-100%). Варіанти: 100% — усі запити, найбільше даних і навантаження; 50% — половина, збалансовано; 10-25% — частина запитів, менше навантаження зі збереженням виявлення проблем; 0% — лише повільні запити, мінімальне навантаження. Повільні запити, що перевищують поріг, відстежуються завжди незалежно від цього параметра. Для сайтів із великим трафіком рекомендовано 10-25%, щоб зменшити вплив на швидкодію та витрати Sentry.
```

#### [`fof-sentry.admin.settings.db_query_sample_rate_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_label%22)

> Query Sampling Rate

```diff
+Частка вибірки запитів
```

#### [`fof-sentry.admin.settings.db_slow_query_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_slow_query_threshold_help%22)

> Queries taking longer than this threshold (in milliseconds) are flagged as slow and automatically tracked regardless of sample rate. Severity levels: Medium (1-2× threshold), High (2-5× threshold), Critical (5×+ threshold). Default: 1000ms (1 second). Lower to 500ms for more aggressive detection.

```diff
+Запити, що перевищують цей час у мілісекундах, позначаються як повільні й відстежуються незалежно від частки вибірки. Рівні серйозності: середній (1-2× порога), високий (2-5×), критичний (5× і більше). Типово — 1000ms (1 секунда). Зменште до 500ms для чутливішого виявлення.
```

#### [`fof-sentry.admin.settings.db_slow_query_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_slow_query_threshold_label%22)

> Slow Query Threshold (milliseconds)

```diff
+Поріг повільного запиту (мілісекунди)
```

#### [`fof-sentry.admin.settings.db_track_bindings_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_help%22)

> Include actual parameter values in query tracking (e.g., "SELECT \* FROM users WHERE id = 123" instead of "SELECT \* FROM users WHERE id = ?"). Benefits: See exact values causing slow queries and identify problematic data patterns. Security &amp; Privacy Warning: May expose sensitive user data in Sentry. Passwords and hashes (32+ hex chars) are automatically masked. Long strings (100+ chars) are truncated. Review your privacy policy before enabling. Recommendation: Enable only in staging/development, disable in production.

```diff
+Додавати фактичні значення параметрів до відстеження запитів (наприклад, «SELECT * FROM users WHERE id = 123» замість «SELECT * FROM users WHERE id = ?»). Це дає змогу бачити значення, що спричиняють повільні запити, і проблемні шаблони даних. Увага щодо безпеки й приватності: конфіденційні дані користувачів можуть потрапити до Sentry. Паролі й хеші (32+ шістнадцяткових символів) автоматично приховуються. Довгі рядки (100+ символів) обрізаються. Перед увімкненням перегляньте політику приватності. Рекомендовано вмикати лише для тестування й розробки та вимикати на робочому сайті.
```

#### [`fof-sentry.admin.settings.db_track_bindings_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_label%22)

> Track Query Parameter Values

```diff
+Відстежувати значення параметрів запитів
```

#### [`fof-sentry.admin.settings.environment_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.environment_help%22)

> Tag all events with an environment name (e.g., "production", "staging", "development"). This helps you filter errors by deployment environment and set different alert rules per environment.

```diff
+Позначайте всі події назвою середовища (наприклад, «production», «staging», «development»). Це дає змогу фільтрувати помилки за середовищем розгортання й задавати окремі правила сповіщень.
```

#### [`fof-sentry.admin.settings.javascript_console_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_console_help%22)

> Record console.log, console.info, console.warn, and console.error calls as breadcrumbs. See the sequence of events leading to an error and debug complex user interactions. Note: Increases data volume. Use selectively in production.

```diff
+Записувати виклики console.log, console.info, console.warn і console.error як ланцюжок подій. Це допомагає побачити події перед помилкою та налагоджувати складні взаємодії користувачів. Примітка: обсяг даних зростає. На робочому сайті використовуйте вибірково.
```

#### [`fof-sentry.admin.settings.javascript_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_help%22)

> Capture and report JavaScript errors from your forum's frontend to Sentry. Tracks uncaught exceptions, promise rejections, console errors, and network failures. Disable this if you only want backend error tracking.

```diff
+Записуйте й надсилайте до Sentry помилки JavaScript клієнтської частини форуму: необроблені винятки, відхилення промісів, помилки консолі й мережі. Вимкніть, якщо потрібне лише відстеження серверних помилок.
```

#### [`fof-sentry.admin.settings.monitor_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/uk/?q=context%3A%3D%22fof-sentry.admin.settings.monitor_performance_help%22)

> Percentage of backend requests to trace (0 = disabled, 100 = trace all). Performance traces include request/response time, database queries, and extension loading times. Recommendation: Start with 10-25% in production, 100% in staging. Lower values reduce data volume and Sentry costs.

```diff
+Відсоток серверних запитів для трасування (0 — вимкнено, 100 — усі). Трасування містить час запиту й відповіді, запити до бази даних і час завантаження розширень. Рекомендовано почати з 10-25% на робочому сайті та 100% у тестовому середовищі. Менші значення зменшують обсяг даних і витрати на Sentry.
```


### `fof-seo` (missing)

#### [`fof-seo.admin.common.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.common.close%22)

> Close

```diff
+Закрити
```

#### [`fof-seo.admin.common.learn_more`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.common.learn_more%22)

> Learn more

```diff
+Докладніше
```

#### [`fof-seo.admin.common.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.common.save_changes%22)

> Save changes

```diff
+Зберегти зміни
```

#### [`fof-seo.admin.dashboard.widget.cta`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.cta%22)

> Do the health-check!

```diff
+Перевірити стан
```

#### [`fof-seo.admin.dashboard.widget.review_prompt`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.review_prompt%22)

> It's time to review your SEO settings!

```diff
+Час переглянути налаштування SEO!
```

#### [`fof-seo.admin.header.health_check`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.health_check%22)

> Health check

```diff
+Перевірка стану
```

#### [`fof-seo.admin.header.search_engines_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.search_engines_info%22)

> Search engine information

```diff
+Відомості про пошукові системи
```

#### [`fof-seo.admin.header.seo_settings`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.seo_settings%22)

> SEO settings

```diff
+Налаштування SEO
```

#### [`fof-seo.admin.header.setup_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.setup_ssl%22)

> Set up SSL

```diff
+Налаштувати SSL
```

#### [`fof-seo.admin.header.sitemap_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.sitemap_info%22)

> Sitemap information

```diff
+Відомості про карту сайту
```

#### [`fof-seo.admin.header.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.title%22)

> Search Engine Optimization

```diff
+Пошукова оптимізація
```

#### [`fof-seo.admin.header.tools`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.header.tools%22)

> Tools

```diff
+Iнструменти
```

#### [`fof-seo.admin.modals.crawl_post.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.intro%22)

> &lt;b&gt;Read this dialog carefully.&lt;/b&gt; This function will only be executed on a page refresh on a discussion. You can always change this option later.

```diff
+<b>Уважно прочитайте це вікно.</b> Функція виконується лише під час оновлення сторінки обговорення. Ви завжди можете змінити цей параметр пізніше.
```

#### [`fof-seo.admin.modals.crawl_post.mode_all_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_all_title%22)

> Index all posts in a discussion (setting enabled)

```diff
+Індексувати всі дописи обговорення (параметр увімкнено)
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_help%22)

> Search engine will only show the main post in the search results. It won't affect loading speed when you navigate to it via forum links.

```diff
+Пошукова система показуватиме в результатах лише перший допис. Це не впливає на швидкість завантаження під час переходу за посиланнями форуму.
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_title%22)

> Only index the main post (default)

```diff
+Індексувати лише перший допис (типово)
```

#### [`fof-seo.admin.modals.crawl_post.question`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.question%22)

> Do you want to enable this feature?

```diff
+Увімкнути цю можливість?
```

#### [`fof-seo.admin.modals.crawl_post.switch_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.switch_label%22)

> Crawl all posts (it's slower on page refresh, but search results will be better)

```diff
+Сканувати всі дописи (повільніше оновлення сторінки, але кращі результати пошуку)
```

#### [`fof-seo.admin.modals.crawl_post.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.title%22)

> Post crawl settings

```diff
+Налаштування сканування дописів
```

#### [`fof-seo.admin.modals.dofollow.add_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.add_placeholder%22)

> Allow a domain

```diff
+Дозволити домен
```

#### [`fof-seo.admin.modals.dofollow.default_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.default_note%22)

> The domain you use for your Flarum instance is added to the list by default.

```diff
+Домен вашого форуму Flarum додається до списку автоматично.
```

#### [`fof-seo.admin.modals.dofollow.duplicate_error`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.duplicate_error%22)

> This domain is already present in your do-follow list.

```diff
+Цей домен уже є в списку do-follow.
```

#### [`fof-seo.admin.modals.dofollow.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.intro%22)

> Enter the &lt;b&gt;hostnames&lt;/b&gt; of the domains you want to add to the do-follow list.

```diff
+Введіть <b>імена хостів</b> доменів, які потрібно додати до списку do-follow.
```

#### [`fof-seo.admin.modals.dofollow.learn_more_line`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.learn_more_line%22)

> &lt;a&gt;Learn more&lt;/a&gt; about the do-follow list.

```diff
+<a>Докладніше</a> про список do-follow.
```

#### [`fof-seo.admin.modals.dofollow.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.title%22)

> Do-follow list

```diff
+Список do-follow
```

#### [`fof-seo.admin.pages.health.checks.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.button%22)

> Review post settings

```diff
+Переглянути налаштування дописів
```

#### [`fof-seo.admin.pages.health.checks.crawl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.label%22)

> Review discussion post crawl settings

```diff
+Перегляньте налаштування сканування дописів
```

#### [`fof-seo.admin.pages.health.checks.crawl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.reason%22)

> You will need to review this setting to pass.

```diff
+Щоб пройти перевірку, потрібно переглянути це налаштування.
```

#### [`fof-seo.admin.pages.health.checks.description.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.button%22)

> Update description

```diff
+Оновити опис
```

#### [`fof-seo.admin.pages.health.checks.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.label%22)

> Checks whether your forum has a description

```diff
+Перевіряє наявність опису форуму
```

#### [`fof-seo.admin.pages.health.checks.description.reason_default`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_default%22)

> You did not change the default forum description after installation!

```diff
+Ви не змінили типовий опис форуму після встановлення!
```

#### [`fof-seo.admin.pages.health.checks.description.reason_missing`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_missing%22)

> You did not set up a forum description yet!

```diff
+Ви ще не задали опис форуму!
```

#### [`fof-seo.admin.pages.health.checks.description.reason_too_short`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_too_short%22)

> Your forum description is lower then 20 characters. Please expand it for better search results.

```diff
+Опис форуму коротший за 20 символів. Розширте його для кращих результатів пошуку.
```

#### [`fof-seo.admin.pages.health.checks.keywords.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.button%22)

> Update keywords

```diff
+Оновити ключові слова
```

#### [`fof-seo.admin.pages.health.checks.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.label%22)

> Checks whether your forum has keywords set up

```diff
+Перевіряє наявність ключових слів форуму
```

#### [`fof-seo.admin.pages.health.checks.keywords.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.reason%22)

> You did not set up a forum keywords yet!

```diff
+Ви ще не задали ключових слів форуму!
```

#### [`fof-seo.admin.pages.health.checks.meta_tags.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.meta_tags.label%22)

> Checks whether your forum has meta tags available (generated by this plugin)

```diff
+Перевіряє наявність метатегів, створених цим розширенням
```

#### [`fof-seo.admin.pages.health.checks.review.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.button%22)

> Ok! I reviewed them!

```diff
+Гаразд, переглянуто!
```

#### [`fof-seo.admin.pages.health.checks.review.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.label%22)

> Review your SEO settings every two months. Next review needed on {date}

```diff
+Переглядайте налаштування SEO кожні два місяці. Наступний перегляд: {date}
```

#### [`fof-seo.admin.pages.health.checks.review.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.reason%22)

> It is time to re-review your SEO settings.

```diff
+Час знову переглянути налаштування SEO.
```

#### [`fof-seo.admin.pages.health.checks.robots.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.button%22)

> Read more about adding a robots.txt

```diff
+Докладніше про додавання robots.txt
```

#### [`fof-seo.admin.pages.health.checks.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.label%22)

> Checks whether your forum has a robots.txt available

```diff
+Перевіряє наявність robots.txt
```

#### [`fof-seo.admin.pages.health.checks.robots.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.reason%22)

> Your robots.txt is provided by the FriendsOfFlarum Sitemap extension. Install and enable it to make a robots.txt available to search engines.

```diff
+Файл robots.txt надається розширенням FriendsOfFlarum Sitemap. Установіть і ввімкніть його, щоб зробити robots.txt доступним пошуковим системам.
```

#### [`fof-seo.admin.pages.health.checks.search_engines.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.button%22)

> More information

```diff
+Докладніше
```

#### [`fof-seo.admin.pages.health.checks.search_engines.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.label%22)

> Register your forum to search engines

```diff
+Зареєструйте форум у пошукових системах
```

#### [`fof-seo.admin.pages.health.checks.search_engines.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.reason%22)

> You will need to review this to pass.

```diff
+Щоб пройти перевірку, потрібно переглянути цей розділ.
```

#### [`fof-seo.admin.pages.health.checks.sitemap.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.button%22)

> Read more about adding a sitemap

```diff
+Докладніше про додавання карти сайту
```

#### [`fof-seo.admin.pages.health.checks.sitemap.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.label%22)

> Checks whether your forum has a sitemap available

```diff
+Перевіряє наявність карти сайту
```

#### [`fof-seo.admin.pages.health.checks.sitemap.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.reason%22)

> It is highly recommended to install the FriendsOfFlarum Sitemap extension!

```diff
+Наполегливо рекомендовано встановити розширення FriendsOfFlarum Sitemap!
```

#### [`fof-seo.admin.pages.health.checks.social_media.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.button%22)

> Update image

```diff
+Оновити зображення
```

#### [`fof-seo.admin.pages.health.checks.social_media.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.label%22)

> Set Up a social media image

```diff
+Налаштуйте зображення для соцмереж
```

#### [`fof-seo.admin.pages.health.checks.social_media.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.reason%22)

> You did not set a social media image for your forum. It is recommended to set one. Your favicon will now be used as preview on social media.

```diff
+Ви не задали зображення форуму для соцмереж. Рекомендовано його додати. Наразі для попереднього перегляду використовуватиметься значок сайту.
```

#### [`fof-seo.admin.pages.health.checks.ssl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.button%22)

> How to set up SSL

```diff
+Як налаштувати SSL
```

#### [`fof-seo.admin.pages.health.checks.ssl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.label%22)

> Checks whether your site has a secure connection available (SSL/TLS)

```diff
+Перевіряє наявність захищеного з’єднання (SSL/TLS)
```

#### [`fof-seo.admin.pages.health.checks.ssl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.reason%22)

> Your forum does not force a SSL/TLS connection (a secure connection to your website). Most search engines won't index your website or lower your ranking if you have no secure connection available.

```diff
+Ваш форум не вимагає з’єднання SSL/TLS (захищеного з’єднання із сайтом). Без нього більшість пошукових систем не індексуватиме сайт або знизить його позиції.
```

#### [`fof-seo.admin.pages.health.default_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.default_button%22)

> Update setting

```diff
+Оновити налаштування
```

#### [`fof-seo.admin.pages.health.legend`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.legend%22)

> For optimal search engine results, make sure all checks are green.

```diff
+Для найкращих результатів пошуку переконайтеся, що всі перевірки зелені.
```

#### [`fof-seo.admin.pages.health.status.passed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.status.passed%22)

> All set!

```diff
+Усе готово!
```

#### [`fof-seo.admin.pages.health.status.warning`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.status.warning%22)

> Warning!

```diff
+Увага!
```

#### [`fof-seo.admin.pages.health.table.status`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.table.status%22)

> Status

```diff
+Статус
```

#### [`fof-seo.admin.pages.health.table.technique`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.health.table.technique%22)

> Technique

```diff
+Метод
```

#### [`fof-seo.admin.pages.search_engines.bing_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_heading%22)

> Add your website to the Bing search results

```diff
+Додайте сайт до результатів Bing
```

#### [`fof-seo.admin.pages.search_engines.bing_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_sitemap%22)

> Don't forget to configure your sitemap URL. After you verified your website you're all set and Bing will now index your website.

```diff
+Не забудьте вказати URL-адресу карти сайту. Після підтвердження сайту все готово: Bing почне його індексувати.
```

#### [`fof-seo.admin.pages.search_engines.bing_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_visit%22)

> If you want to add your website to the Bing search results, visit the {link} and complete the given steps. Not all fields are required.

```diff
+Щоб додати сайт до результатів Bing, перейдіть за посиланням {link} і виконайте наведені кроки. Не всі поля обов’язкові.
```

#### [`fof-seo.admin.pages.search_engines.confirm_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.confirm_button%22)

> I have read this

```diff
+Прочитано
```

#### [`fof-seo.admin.pages.search_engines.google_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_heading%22)

> Add your website to the Google search results

```diff
+Додайте сайт до результатів Google
```

#### [`fof-seo.admin.pages.search_engines.google_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_sitemap%22)

> When you completed the registration in the Google Search Console, visit the &lt;b&gt;Sitemaps&lt;/b&gt; page. Pass your &lt;b&gt;sitemap.xml&lt;/b&gt; to Google. Make sure that Google can crawl your sitemap and will keep doing this.

```diff
+Після реєстрації в Google Search Console перейдіть на сторінку <b>Sitemaps</b>. Надішліть Google файл <b>sitemap.xml</b>. Переконайтеся, що Google може сканувати карту сайту й надалі це робитиме.
```

#### [`fof-seo.admin.pages.search_engines.google_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_visit%22)

> If you want to add your website to the Google search results, visit the {link}. You'll need to add your website and verify that you're the owner of the associated domain name.

```diff
+Щоб додати сайт до результатів Google, перейдіть за посиланням {link}. Додайте сайт і підтвердьте право власності на відповідний домен.
```

#### [`fof-seo.admin.pages.search_engines.google_www`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_www%22)

> When you enter your domain you need to answer the following question for yourself: Do you want to use the 'www' sub-domain in the search results? You can &lt;strong&gt;not&lt;/strong&gt; change this later. Registering your domain in the Google Search Console multiple times won't result in a better ranking.

```diff
+Додаючи домен, вирішіть, чи хочете ви використовувати піддомен «www» у результатах пошуку. Пізніше це змінити <strong>неможливо</strong>. Повторна реєстрація домену в Google Search Console не поліпшить його позиції.
```

#### [`fof-seo.admin.pages.search_engines.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.heading%22)

> Submit your website to Search Engines

```diff
+Додайте сайт до пошукових систем
```

#### [`fof-seo.admin.pages.search_engines.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.intro%22)

> It is good practice to let Search Engines know your site is exists. This page will guide you in doing this succesfully.

```diff
+Варто повідомити пошуковим системам про існування сайту. Ця сторінка допоможе вам це зробити.
```

#### [`fof-seo.admin.pages.search_engines.sitemap_tip`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.sitemap_tip%22)

> It is recommended to have a sitemap ready before completing this guide. If you don't have a sitemap yet, &lt;a&gt;click here to read more about them&lt;/a&gt;.

```diff
+Перед виконанням інструкцій рекомендовано підготувати карту сайту. Якщо її ще немає, <a>натисніть тут, щоб дізнатися більше</a>.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_body%22)

> If you want to add your website to the Yahoo search results, finish your Bing search results registration. Yahoo will use that data.

```diff
+Щоб додати сайт до результатів Yahoo, завершіть реєстрацію в пошуку Bing. Yahoo використовуватиме ці дані.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_heading%22)

> Add your website to the Yahoo search results

```diff
+Додайте сайт до результатів Yahoo
```

#### [`fof-seo.admin.pages.search_engines.yandex_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_heading%22)

> Add your website to the Yandex search results

```diff
+Додайте сайт до результатів Yandex
```

#### [`fof-seo.admin.pages.search_engines.yandex_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_sitemap%22)

> Don't forget to configure the sitemap in the Yandex.Webmaster.

```diff
+Не забудьте налаштувати карту сайту в Yandex.Webmaster.
```

#### [`fof-seo.admin.pages.search_engines.yandex_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_visit%22)

> If you want to add your website to the Yandex search results, visit the {link} and follow the given steps.

```diff
+Щоб додати сайт до результатів Yandex, перейдіть за посиланням {link} і виконайте наведені кроки.
```

#### [`fof-seo.admin.pages.sitemap.generated_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.generated_note%22)

> The sitemap file is automatically generated and does not need any maintenance.

```diff
+Файл карти сайту створюється автоматично й не потребує обслуговування.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_body%22)

> In that case, activate it by clicking the extension in the sidebar at the left . Then this warning will disappear.

```diff
+У такому разі ввімкніть його, натиснувши назву на бічній панелі ліворуч. Після цього попередження зникне.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_heading%22)

> I just installed the extension

```diff
+Я щойно встановив розширення
```

#### [`fof-seo.admin.pages.sitemap.robots_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_body%22)

> The same extension also generates a &lt;b&gt;robots.txt&lt;/b&gt; for your forum. This file tells search engines which areas they may crawl and points them to your sitemap, so installing it takes care of both files at once — there is nothing extra to configure.

```diff
+Це саме розширення також створює файл <b>robots.txt</b> для форуму. Він повідомляє пошуковим системам, які розділи можна сканувати, і вказує на карту сайту. Встановлення розширення забезпечує обидва файли без додаткових налаштувань.
```

#### [`fof-seo.admin.pages.sitemap.robots_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_heading%22)

> What about robots.txt?

```diff
+А як щодо robots.txt?
```

#### [`fof-seo.admin.pages.sitemap.which_extension_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_body%22)

> {link} is the suggested extension to install for Flarum. We strongly recommend you to install and activate this extension.

```diff
+Для Flarum рекомендується розширення {link}. Наполегливо радимо встановити й увімкнути його.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_details`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_details%22)

> This extension will make sure crawlers will find your forum &lt;b&gt;discussions&lt;/b&gt;, &lt;b&gt;tags&lt;/b&gt; (when extension is enabled) and &lt;b&gt;Pages&lt;/b&gt; extension (when extension is installed and enabled). It will automatically make an sitemap.xml available.

```diff
+Це розширення допоможе пошуковим роботам знайти <b>обговорення</b>, <b>теги</b> (якщо розширення ввімкнено) і сторінки розширення <b>Pages</b> (якщо воно встановлено й увімкнено). Файл sitemap.xml стане доступним автоматично.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_heading%22)

> What extension should I install?

```diff
+Яке розширення встановити?
```

#### [`fof-seo.admin.pages.sitemap.why_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_body%22)

> A sitemap is a XML file with a list of all the available pages on your website. It will be used by crawlers and search engines to find pages on your website.

```diff
+Карта сайту — це файл XML із переліком усіх доступних сторінок. Пошукові роботи й системи використовують його, щоб знаходити сторінки вашого сайту.
```

#### [`fof-seo.admin.pages.sitemap.why_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_heading%22)

> Why should you use a sitemap?

```diff
+Навіщо використовувати карту сайту?
```

#### [`fof-seo.admin.pages.ssl.added_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.added_heading%22)

> Okay, I added SSL!

```diff
+Гаразд, SSL додано!
```

#### [`fof-seo.admin.pages.ssl.how_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_body%22)

> For people who are using a webhosting, the most common way is to enter the webhosting panel, go to the hosting-settings of your website and click SSL. You can follow the steps to add SSL to your website. The most webhosting companies nowadays are supporting the popular certificate issuer {link}.

```diff
+Якщо ви користуєтеся хостингом, зазвичай потрібно відкрити панель керування, перейти до налаштувань хостингу сайту й вибрати SSL. Виконайте наведені там кроки, щоб додати SSL. Більшість сучасних хостинг-провайдерів підтримує популярного видавця сертифікатів {link}.
```

#### [`fof-seo.admin.pages.ssl.how_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_heading%22)

> How to add SSL to your website?

```diff
+Як додати SSL до сайту?
```

#### [`fof-seo.admin.pages.ssl.intro_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_body%22)

> Safety and privacy awareness on the web is on the rise. &lt;b&gt;Almost every&lt;/b&gt; developer/website owner want their website safe to use for their visitors so they won't need to be afraid that their data will be compromised by hackers or website-impersonators.

```diff
+У мережі зростає увага до безпеки й приватності. <b>Майже кожен</b> розробник або власник сайту прагне, щоб відвідувачі могли безпечно користуватися ним і не боялися витоку даних через зловмисників чи підроблені сайти.
```

#### [`fof-seo.admin.pages.ssl.intro_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_heading%22)

> Why do I need an secure connection?

```diff
+Навіщо потрібне захищене з’єднання?
```

#### [`fof-seo.admin.pages.ssl.no_ssl_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_body%22)

> In that case, you can uninstall this extension as search engines &lt;b&gt;won't index your forum&lt;/b&gt; or rank them far below other sites due safety reasons.

```diff
+У такому разі ви можете видалити це розширення: з міркувань безпеки пошукові системи <b>не індексуватимуть форум</b> або розташовуватимуть його значно нижче за інші сайти.
```

#### [`fof-seo.admin.pages.ssl.no_ssl_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_heading%22)

> What if I do not want to add SSL?

```diff
+Що, якщо я не хочу додавати SSL?
```

#### [`fof-seo.admin.pages.ssl.rankings_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body%22)

> When you do not have a secure connection to your website, search engines will rank your site much lower then other sites, or even won't index it.

```diff
+Без захищеного з’єднання пошукові системи розташовуватимуть сайт значно нижче за інші або взагалі не індексуватимуть його.
```

#### [`fof-seo.admin.pages.ssl.rankings_body_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body_ssl%22)

> When you have SSL available, your website will get an higher rank and will be indexed.

```diff
+За наявності SSL сайт отримає вищу позицію й буде індексуватися.
```

#### [`fof-seo.admin.pages.ssl.rankings_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_heading%22)

> Search engines {icon} secure connections

```diff
+Пошукові системи {icon} захищені з’єднання
```

#### [`fof-seo.admin.pages.ssl.what_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_body%22)

> The most people know &lt;b&gt;https&lt;/b&gt; that's used for secure connections as SSL: &lt;i&gt;Secure Sockets Layer&lt;/i&gt;. Officially it's called TLS: &lt;i&gt;Transport Layer Security&lt;/i&gt;. This method is used to create a secure connection to your webserver what will prevent attackers or other webservers to impersonate your website and keep your visitors safe. The SSL connection will be broken if that happens and the visitors browsers will warning the user that's it's not trusted.

```diff
+Більшість людей знають захищене з’єднання <b>https</b> як SSL: <i>Secure Sockets Layer</i>. Офіційна назва — TLS: <i>Transport Layer Security</i>. Цей механізм захищає з’єднання з вашим вебсервером, перешкоджає підміні сайту зловмисниками чи іншими серверами й захищає відвідувачів. У разі підміни з’єднання SSL буде перервано, а браузер попередить про недовіру до сайту.
```

#### [`fof-seo.admin.pages.ssl.what_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_heading%22)

> What is SSL or TLS?

```diff
+Що таке SSL або TLS?
```

#### [`fof-seo.admin.permissions.category_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.permissions.category_label%22)

> SEO

```diff
+SEO
```

#### [`fof-seo.admin.permissions.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.permissions.configure_seo%22)

> Allow configuring SEO

```diff
+Налаштовувати SEO
```

#### [`fof-seo.admin.settings.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.crawl.button%22)

> Setup post crawl settings

```diff
+Налаштувати сканування дописів
```

#### [`fof-seo.admin.settings.crawl.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.crawl.heading%22)

> Discussion post crawl settings

```diff
+Налаштування сканування дописів обговорення
```

#### [`fof-seo.admin.settings.crawl.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.crawl.help%22)

> This is an important setting about crawling your discussion posts in search results.

```diff
+Важливе налаштування сканування дописів обговорення для результатів пошуку.
```

#### [`fof-seo.admin.settings.indexing.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.indexing.heading%22)

> Indexing controls

```diff
+Керування індексуванням
```

#### [`fof-seo.admin.settings.indexing.profiles_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_help%22)

> When enabled, user profile pages emit a 'noindex' meta tag so they are kept out of search results. Links on the page are still followed, so crawlers can still reach the content they point to.

```diff
+Якщо ввімкнено, сторінки профілів отримують метатег «noindex», щоб не потрапляти до результатів пошуку. Перехід за посиланнями залишається дозволеним, тож пошукові роботи можуть знаходити пов’язаний вміст.
```

#### [`fof-seo.admin.settings.indexing.profiles_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_label%22)

> De-index profile pages

```diff
+Виключити профілі з індексування
```

#### [`fof-seo.admin.settings.indexing.tags_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_button%22)

> Select tags

```diff
+Вибрати теги
```

#### [`fof-seo.admin.settings.indexing.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_help%22)

> Discussions in the selected tags (and those tags' own listing pages) will be kept out of search results with a 'noindex' meta tag. Links are still followed. Selecting a parent tag also covers its child tags.

```diff
+Обговорення з вибраними тегами та сторінки цих тегів отримають метатег «noindex» і не потраплятимуть до результатів пошуку. Перехід за посиланнями залишається дозволеним. Вибір батьківського тегу також охоплює дочірні.
```

#### [`fof-seo.admin.settings.indexing.tags_none_selected`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_none_selected%22)

> No tags excluded from indexing.

```diff
+Жодного тегу не виключено з індексування.
```

#### [`fof-seo.admin.settings.info.maintain`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.info.maintain%22)

> Check all your settings when you first setup this extensions. Maintain them to get the best search results.

```diff
+Перевірте всі налаштування після встановлення розширення. Підтримуйте їх актуальними для найкращих результатів пошуку.
```

#### [`fof-seo.admin.settings.info.overview`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.info.overview%22)

> This page contains some other settings from around the admin area. However, it's good to have a good overview about these settings. Do not forget to do the SEO check.

```diff
+Ця сторінка збирає налаштування з різних розділів панелі адміністратора, щоб їх було зручно переглядати разом. Не забудьте виконати перевірку SEO.
```

#### [`fof-seo.admin.settings.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Примітка: розділяйте ключові слова комами.
```

#### [`fof-seo.admin.settings.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Наприклад: flarum, веброзробка, форум, яблука, безпека
```

#### [`fof-seo.admin.settings.keywords.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.keywords.heading%22)

> Forum keywords

```diff
+Ключові слова форуму
```

#### [`fof-seo.admin.settings.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.keywords.help%22)

> Enter one or more keywords that describes your forum.

```diff
+Введіть одне або кілька ключових слів, що описують форум.
```

#### [`fof-seo.admin.settings.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.keywords.placeholder%22)

> Add a few keywords

```diff
+Додайте кілька ключових слів
```

#### [`fof-seo.admin.settings.new_tab.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.heading%22)

> Open external links in new tab

```diff
+Відкривати зовнішні посилання в новій вкладці
```

#### [`fof-seo.admin.settings.new_tab.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.help%22)

> This extension will also make sure that external links (to other domains) open in a new tab. Currently it is not possible to disable this setting.

```diff
+Розширення також забезпечує відкриття посилань на інші домени в новій вкладці. Зараз вимкнути це налаштування неможливо.
```

#### [`fof-seo.admin.settings.nofollow.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.button%22)

> Open domain do-follow list

```diff
+Відкрити список доменів do-follow
```

#### [`fof-seo.admin.settings.nofollow.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.heading%22)

> No-follow links

```diff
+Посилання no-follow
```

#### [`fof-seo.admin.settings.nofollow.help_dofollow`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.help_dofollow%22)

> With this setting you are able to add domains to the 'do-follow' list. For example, you can add &lt;i&gt;flarum.org&lt;/i&gt; to make sure links to this website do not receive a 'nofollow' attribute.

```diff
+Цей параметр дає змогу додавати домени до списку do-follow. Наприклад, додайте <i>flarum.org</i>, щоб посилання на цей сайт не отримували атрибута «nofollow».
```

#### [`fof-seo.admin.settings.social_media_image.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.heading%22)

> Social media image

```diff
+Зображення для соцмереж
```

#### [`fof-seo.admin.settings.social_media_image.help_size`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_size%22)

> Expecting a square image. Recommended size is 1200x1200 pixels. Otherwise use a landscape image, recommended size is 1200x630.

```diff
+Бажано квадратне зображення рекомендованого розміру 1200x1200 пікселів. Або використовуйте горизонтальне зображення розміром 1200x630.
```

#### [`fof-seo.admin.settings.social_media_image.help_usage`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_usage%22)

> This image will be used by Social Media when a user shares a page on your website (Facebook, X (formerly Twitter), Reddit).

```diff
+Це зображення використовуватимуть соцмережі, коли користувач поширює сторінку вашого сайту (Facebook, X (раніше Twitter), Reddit).
```

#### [`fof-seo.admin.settings.twitter_card.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.heading%22)

> X (formerly Twitter) card size

```diff
+Розмір картки X (раніше Twitter)
```

#### [`fof-seo.admin.settings.twitter_card.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.help%22)

> When your forum is shared on X (formerly Twitter), it will have an image (if a social media image has been set up). This can be a big card with a big image, or a small card (summary) with a smaller image.

```diff
+Під час поширення форуму в X (раніше Twitter) до посилання додається зображення, якщо його налаштовано для соцмереж. Це може бути велика картка з великим зображенням або коротка картка з меншим.
```

#### [`fof-seo.admin.settings.twitter_card.option_large`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_large%22)

> Large card (large image)

```diff
+Велика картка (велике зображення)
```

#### [`fof-seo.admin.settings.twitter_card.option_summary`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_summary%22)

> Summary card (smaller image)

```diff
+Коротка картка (менше зображення)
```

#### [`fof-seo.admin.settings.updated.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.updated.button%22)

> Back to overview and re-check

```diff
+Повернутися до огляду й перевірити знову
```

#### [`fof-seo.admin.settings.updated.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.updated.heading%22)

> Updated this setting?

```diff
+Оновили налаштування?
```

#### [`fof-seo.admin.settings.updated.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.admin.settings.updated.help%22)

> When you think you're ready, click the button below to re-check the status of this setting.

```diff
+Коли будете готові, натисніть кнопку нижче, щоб повторно перевірити стан налаштування.
```

#### [`fof-seo.forum.controls.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.controls.configure_seo%22)

> Configure SEO

```diff
+Налаштувати SEO
```

#### [`fof-seo.forum.controls.reset_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.controls.reset_seo%22)

> Reset SEO

```diff
+Скинути SEO
```

#### [`fof-seo.forum.controls.update_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.controls.update_seo%22)

> Update SEO

```diff
+Оновити SEO
```

#### [`fof-seo.forum.meta_seo.auto_update.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.help%22)

> When enabled, this items meta tags are automatically updated when the object changes.

```diff
+Якщо ввімкнено, метатеги цього елемента автоматично оновлюються після зміни об’єкта.
```

#### [`fof-seo.forum.meta_seo.auto_update.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.label%22)

> Auto update meta tags

```diff
+Автоматично оновлювати метатеги
```

#### [`fof-seo.forum.meta_seo.auto_update.switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.switch%22)

> Update object SEO on change

```diff
+Оновлювати SEO об’єкта після зміни
```

#### [`fof-seo.forum.meta_seo.close.autofill_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.autofill_info%22)

> This change will revert custom changes and fill the meta-tags with item-data.

```diff
+Скасовує власні зміни та заповнює метатеги даними елемента.
```

#### [`fof-seo.forum.meta_seo.close.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.close%22)

> Close

```diff
+Закрити
```

#### [`fof-seo.forum.meta_seo.close.save`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save%22)

> Save

```diff
+Зберегти
```

#### [`fof-seo.forum.meta_seo.close.save_autofill`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save_autofill%22)

> Save &amp; auto-fill

```diff
+Зберегти й заповнити автоматично
```

#### [`fof-seo.forum.meta_seo.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.help%22)

> Displays an image.

```diff
+Показує зображення.
```

#### [`fof-seo.forum.meta_seo.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.label%22)

> Meta image

```diff
+Метазображення
```

#### [`fof-seo.forum.meta_seo.image.managed_by`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.managed_by%22)

> Image source managed by {source}

```diff
+Джерелом зображення керує {source}
```

#### [`fof-seo.forum.meta_seo.image.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.placeholder%22)

> Enter image URL

```diff
+Введіть URL-адресу зображення
```

#### [`fof-seo.forum.meta_seo.image.upload`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.upload%22)

> Upload file

```diff
+Завантажити файл
```

#### [`fof-seo.forum.meta_seo.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Примітка: розділяйте ключові слова комами.
```

#### [`fof-seo.forum.meta_seo.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Наприклад: flarum, веброзробка, форум, яблука, безпека
```

#### [`fof-seo.forum.meta_seo.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.help%22)

> Enter one or more keywords that describes this item.

```diff
+Введіть одне або кілька ключових слів, що описують цей елемент.
```

#### [`fof-seo.forum.meta_seo.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.label%22)

> Keywords

```diff
+Ключові слова
```

#### [`fof-seo.forum.meta_seo.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.placeholder%22)

> Add a few keywords

```diff
+Додайте кілька ключових слів
```

#### [`fof-seo.forum.meta_seo.managed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.managed%22)

> Managed

```diff
+Керується автоматично
```

#### [`fof-seo.forum.meta_seo.meta_description.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.help%22)

> Describes the item and shown in search engines.

```diff
+Опис елемента для показу в пошукових системах.
```

#### [`fof-seo.forum.meta_seo.meta_description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.label%22)

> Meta description

```diff
+Метаопис
```

#### [`fof-seo.forum.meta_seo.meta_title.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.help%22)

> Title in search engines.

```diff
+Заголовок у пошукових системах.
```

#### [`fof-seo.forum.meta_seo.meta_title.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.label%22)

> Meta title

```diff
+Метазаголовок
```

#### [`fof-seo.forum.meta_seo.meta_title.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.placeholder%22)

> Enter page title

```diff
+Введіть заголовок сторінки
```

#### [`fof-seo.forum.meta_seo.note_prefix`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.note_prefix%22)

> Note:

```diff
+Примітка:
```

#### [`fof-seo.forum.meta_seo.og.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.auto_switch%22)

> Auto generate Open Graph tags

```diff
+Автоматично створювати теги Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.label%22)

> Open Graph description

```diff
+Опис Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.placeholder%22)

> Custom Open Graph description

```diff
+Власний опис Open Graph
```

#### [`fof-seo.forum.meta_seo.og.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.label%22)

> Open Graph tags

```diff
+Теги Open Graph
```

#### [`fof-seo.forum.meta_seo.og.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.title%22)

> Open Graph title

```diff
+Заголовок Open Graph
```

#### [`fof-seo.forum.meta_seo.reading_time.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.help%22)

> Estimated reading time in seconds.

```diff
+Орієнтовний час читання в секундах.
```

#### [`fof-seo.forum.meta_seo.reading_time.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.label%22)

> Estimated reading time

```diff
+Орієнтовний час читання
```

#### [`fof-seo.forum.meta_seo.reading_time.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.placeholder%22)

> Reading time in seconds

```diff
+Час читання в секундах
```

#### [`fof-seo.forum.meta_seo.robots.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.help%22)

> Robot-crawling settings for this item.

```diff
+Налаштування сканування цього елемента пошуковими роботами.
```

#### [`fof-seo.forum.meta_seo.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.label%22)

> Robots

```diff
+Пошукові роботи
```

#### [`fof-seo.forum.meta_seo.robots.switch.follow`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.follow%22)

> Allow following links to different pages

```diff
+Дозволити перехід за посиланнями на інші сторінки
```

#### [`fof-seo.forum.meta_seo.robots.switch.indexing`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.indexing%22)

> Allow indexing page

```diff
+Дозволити індексування сторінки
```

#### [`fof-seo.forum.meta_seo.robots.switch.noarchive`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noarchive%22)

> Disable archiving page (noarchive)

```diff
+Заборонити архівування сторінки (noarchive)
```

#### [`fof-seo.forum.meta_seo.robots.switch.noimageindex`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noimageindex%22)

> Disable indexing images on this page (noimageindex)

```diff
+Заборонити індексування зображень на сторінці (noimageindex)
```

#### [`fof-seo.forum.meta_seo.robots.switch.nosnippet`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.nosnippet%22)

> Disable text-snippes on page (nosnippet)

```diff
+Заборонити текстові фрагменти сторінки (nosnippet)
```

#### [`fof-seo.forum.meta_seo.robots.tags.archive_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.archive_not_allowed%22)

> Archiving pages not allowed

```diff
+Архівування сторінок заборонено
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_allowed%22)

> Allow follow links

```diff
+Дозволити перехід за посиланнями
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_not_allowed%22)

> Link following not allowed

```diff
+Перехід за посиланнями заборонено
```

#### [`fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed%22)

> Image indexing not allowed

```diff
+Індексування зображень заборонено
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_allowed%22)

> Allow indexing page

```diff
+Дозволити індексування сторінки
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed%22)

> Page indexing not allowed

```diff
+Індексування сторінки заборонено
```

#### [`fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed%22)

> Taking text-snippets not allowed

```diff
+Текстові фрагменти заборонено
```

#### [`fof-seo.forum.meta_seo.saved`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.saved%22)

> Saved!

```diff
+Збережено!
```

#### [`fof-seo.forum.meta_seo.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.title%22)

> SEO settings - Meta

```diff
+Налаштування SEO — метадані
```

#### [`fof-seo.forum.meta_seo.twitter.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.auto_switch%22)

> Auto generate X (formerly Twitter) card

```diff
+Автоматично створювати картку X (раніше Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.description`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.description%22)

> X (formerly Twitter) description

```diff
+Опис X (раніше Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.help%22)

> Displays an image on X (formerly Twitter).

```diff
+Показує зображення в X (раніше Twitter).
```

#### [`fof-seo.forum.meta_seo.twitter.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.label%22)

> X (formerly Twitter) image

```diff
+Зображення X (раніше Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.reset`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.reset%22)

> Reset image

```diff
+Скинути зображення
```

#### [`fof-seo.forum.meta_seo.twitter.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.label%22)

> X (formerly Twitter) card

```diff
+Картка X (раніше Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.title%22)

> X (formerly Twitter) title

```diff
+Заголовок X (раніше Twitter)
```

#### [`fof-seo.forum.meta_seo.unsupported_object.body`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.body%22)

> Please open this dialog using the objectType and objectId properties or register the object relationship instead.

```diff
+Відкрийте це вікно за допомогою властивостей objectType та objectId або зареєструйте зв’язок об’єкта.
```

#### [`fof-seo.forum.meta_seo.unsupported_object.docs_link`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.docs_link%22)

> Documentation

```diff
+Документація
```

#### [`fof-seo.forum.meta_seo.unsupported_object.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.title%22)

> This object is not a supported SeoMeta object

```diff
+Цей об’єкт не є підтримуваним об’єктом SeoMeta
```

#### [`fof-seo.forum.profile_description`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.profile_description%22)

> Profile of {username} \| {discussion\_count} discussions \| {comment\_count} posts

```diff
+Профіль користувача {username} | Обговорень: {discussion_count} | Дописів: {comment_count}
```

#### [`fof-seo.forum.profile_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/uk/?q=context%3A%3D%22fof-seo.forum.profile_title%22)

> Profile of {username}

```diff
+Профіль користувача {username}
```


### `fof-signature` (missing)

#### [`fof-signature.admin.permissions.allow_signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.permissions.allow_signature%22)

> Can have a signature

```diff
+Мати підпис
```

#### [`fof-signature.admin.permissions.edit_signature_others`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.permissions.edit_signature_others%22)

> Edit other users' signatures

```diff
+Редагувати підписи інших користувачів
```

#### [`fof-signature.admin.settings.allow_inline_editing.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.description%22)

> Inline editing of signature.

```diff
+Редагування підпису на місці.
```

#### [`fof-signature.admin.settings.allow_inline_editing.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.help%22)

> When enabled, users can edit their signature while viewing a post.

```diff
+Якщо ввімкнено, користувачі можуть редагувати підпис під час перегляду допису.
```

#### [`fof-signature.admin.settings.maximum_char_limit.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.description%22)

> Maximum character limit of signature.

```diff
+Максимальна кількість символів у підписі.
```

#### [`fof-signature.admin.settings.maximum_char_limit.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.help%22)

> When the user exceeds the maximum character limit in their signature, they will be prevented from saving until the character count is accordingly.

```diff
+Якщо користувач перевищить максимальну кількість символів у підписі, зберегти його можна буде лише після скорочення до дозволеної довжини.
```

#### [`fof-signature.admin.settings.maximum_image_count.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.description%22)

> Maximum inserted images.

```diff
+Максимальна кількість вставлених зображень.
```

#### [`fof-signature.admin.settings.maximum_image_count.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.help%22)

> When the user exceeds the maximum image count in their signature, they will be prevented from saving until the image count is accordingly.

```diff
+Якщо користувач перевищить максимальну кількість зображень у підписі, зберегти його можна буде лише після зменшення кількості до дозволеної.
```

#### [`fof-signature.forum.buttons.edit`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.buttons.edit%22)

> Edit Signature

```diff
+Редагувати підпис
```

#### [`fof-signature.forum.buttons.save`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.buttons.save%22)

> Save Signature

```diff
+Зберегти підпис
```

#### [`fof-signature.forum.buttons.signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.buttons.signature%22)

> Signature

```diff
+Підпис
```

#### [`fof-signature.forum.editor.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.editor.placeholder%22)

> Edit your signature here

```diff
+Відредагуйте підпис тут
```

#### [`fof-signature.forum.errors.max_char_limit_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.errors.max_char_limit_exceed%22)

> Maximum character limit exceeded.

```diff
+Перевищено максимальну кількість символів.
```

#### [`fof-signature.forum.errors.max_image_count_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.errors.max_image_count_exceed%22)

> Maximum image count exceeded.

```diff
+Перевищено максимальну кількість зображень.
```

#### [`fof-signature.forum.errors.save_failed`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.errors.save_failed%22)

> Something went wrong while saving your signature.

```diff
+Під час збереження підпису сталася помилка.
```

#### [`fof-signature.forum.profile.click`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.profile.click%22)

> Click to write your signature

```diff
+Натисніть, щоб написати підпис
```

#### [`fof-signature.forum.settings.heading`](https://weblate.rob006.net/translate/flarum2/fof-signature/uk/?q=context%3A%3D%22fof-signature.forum.settings.heading%22)

> Signature

```diff
+Підпис
```


### `fof-top-posters-widget` (missing)

#### [`fof-top-posters-widget.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/uk/?q=context%3A%3D%22fof-top-posters-widget.admin.settings.info%22)

> Users of the selected groups will be excluded from the widget results.

```diff
+Користувачі вибраних груп не враховуватимуться в результатах віджета.
```

#### [`fof-top-posters-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/uk/?q=context%3A%3D%22fof-top-posters-widget.forum.widget.title%22)

> Top Posters this Month

```diff
+Найактивніші автори місяця
```


### `fof-upgrade-advisor` (missing)

#### [`fof-upgrade-advisor.admin.checks.database-version.pass`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.pass%22)

> Running {current}.

```diff
+Використовується {current}.
```

#### [`fof-upgrade-advisor.admin.checks.database-version.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.title%22)

> Database version

```diff
+Версія бази даних
```

#### [`fof-upgrade-advisor.admin.checks.database-version.warning_below_recommended`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.warning_below_recommended%22)

> {current} works, but {recommended} or newer is recommended for the best experience.

```diff
+Версія {current} працює, але для найкращої роботи рекомендовано {recommended} або новішу.
```

#### [`fof-upgrade-advisor.admin.checks.database-version.warning_unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.warning_unknown%22)

> Could not determine the database server version.

```diff
+Не вдалося визначити версію сервера бази даних.
```

#### [`fof-upgrade-advisor.admin.checks.extension-compatibility.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.extension-compatibility.title%22)

> Extension compatibility

```diff
+Сумісність розширень
```

#### [`fof-upgrade-advisor.admin.checks.php-version.chip`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.chip%22)

> PHP {current}

```diff
+PHP {current}
```

#### [`fof-upgrade-advisor.admin.checks.php-version.fail`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.fail%22)

> PHP {current} is installed, but {required} or newer is required.

```diff
+Установлено PHP {current}, але потрібна версія {required} або новіша.
```

#### [`fof-upgrade-advisor.admin.checks.php-version.pass`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.pass%22)

> Running PHP {current}.

```diff
+Використовується PHP {current}.
```

#### [`fof-upgrade-advisor.admin.checks.php-version.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.title%22)

> PHP version

```diff
+Версія PHP
```

#### [`fof-upgrade-advisor.admin.checks.php-version.warning`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.warning%22)

> Could not determine the PHP version.

```diff
+Не вдалося визначити версію PHP.
```

#### [`fof-upgrade-advisor.admin.errors.load_failed`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.errors.load_failed%22)

> Could not run the readiness checks. Please try again.

```diff
+Не вдалося перевірити готовність. Спробуйте ще раз.
```

#### [`fof-upgrade-advisor.admin.extensions.contact.forum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.forum%22)

> Support thread

```diff
+Гілка підтримки
```

#### [`fof-upgrade-advisor.admin.extensions.contact.issues`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.issues%22)

> Issues

```diff
+Проблеми
```

#### [`fof-upgrade-advisor.admin.extensions.contact.source`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.source%22)

> Source

```diff
+Джерело
```

#### [`fof-upgrade-advisor.admin.hints.no_path_abandoned`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.hints.no_path_abandoned%22)

> Abandoned with no replacement. Plan to remove it or find an alternative.

```diff
+Більше не підтримується й не має заміни. Заплануйте видалення або знайдіть альтернативу.
```

#### [`fof-upgrade-advisor.admin.hints.swap_after_upgrade`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.hints.swap_after_upgrade%22)

> Remove before upgrading, then install {replacement} after the upgrade.

```diff
+Видаліть перед оновленням, а потім установіть {replacement}.
```

#### [`fof-upgrade-advisor.admin.hints.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.hints.unknown%22)

> Not found on Packagist or any configured repository. If it's premium or private, add repository access.

```diff
+Не знайдено на Packagist або в налаштованих репозиторіях. Якщо розширення платне чи приватне, додайте доступ до репозиторію.
```

#### [`fof-upgrade-advisor.admin.list.after`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.after%22)

> After upgrading

```diff
+Після оновлення
```

#### [`fof-upgrade-advisor.admin.list.before`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.before%22)

> Before upgrading

```diff
+Перед оновленням
```

#### [`fof-upgrade-advisor.admin.list.configure`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.configure%22)

> Configure repository access

```diff
+Налаштувати доступ до репозиторіїв
```

#### [`fof-upgrade-advisor.admin.list.copied`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.copied%22)

> Copied

```diff
+Скопійовано
```

#### [`fof-upgrade-advisor.admin.list.copy`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.copy%22)

> Copy

```diff
+Копіювати
```

#### [`fof-upgrade-advisor.admin.list.details.abandoned`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.abandoned%22)

> Abandoned, no replacement

```diff
+Більше не підтримується, заміни немає
```

#### [`fof-upgrade-advisor.admin.list.details.none`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.none%22)

> {version}

```diff
+{version}
```

#### [`fof-upgrade-advisor.admin.list.details.remove`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.remove%22)

> Built into core

```diff
+Вбудовано в ядро
```

#### [`fof-upgrade-advisor.admin.list.details.replacement`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.replacement%22)

> → {replacement}

```diff
+→ {replacement}
```

#### [`fof-upgrade-advisor.admin.list.details.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.unknown%22)

> Not found

```diff
+Не знайдено
```

#### [`fof-upgrade-advisor.admin.list.groups.decision.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.decision.title%22)

> Needs a decision

```diff
+Потрібне рішення
```

#### [`fof-upgrade-advisor.admin.list.groups.environment.description`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.environment.description%22)

> Fix these before upgrading.

```diff
+Виправте це перед оновленням.
```

#### [`fof-upgrade-advisor.admin.list.groups.environment.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.environment.title%22)

> Server environment

```diff
+Серверне середовище
```

#### [`fof-upgrade-advisor.admin.list.groups.ready.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.ready.title%22)

> Ready

```diff
+Готово
```

#### [`fof-upgrade-advisor.admin.list.groups.replace.description`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.replace.description%22)

> Remove these before upgrading; install any replacements once the upgrade is done.

```diff
+Видаліть їх перед оновленням; за потреби встановіть заміни після завершення.
```

#### [`fof-upgrade-advisor.admin.list.groups.replace.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.replace.title%22)

> Remove or replace

```diff
+Видалити або замінити
```

#### [`fof-upgrade-advisor.admin.list.groups.unknown.description`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.unknown.description%22)

> Usually premium or private extensions. Add repository access so the advisor can check them.

```diff
+Зазвичай це платні або приватні розширення. Додайте доступ до репозиторію, щоб радник міг їх перевірити.
```

#### [`fof-upgrade-advisor.admin.list.groups.unknown.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.unknown.title%22)

> Couldn't check

```diff
+Не вдалося перевірити
```

#### [`fof-upgrade-advisor.admin.overall.blocked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.blocked%22)

> Blocked: {reasons}

```diff
+Заблоковано: {reasons}
```

#### [`fof-upgrade-advisor.admin.overall.reasons.check`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.reasons.check%22)

> {title} needs fixing

```diff
+Потрібно виправити: {title}
```

#### [`fof-upgrade-advisor.admin.overall.reasons.unchecked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.reasons.unchecked%22)

> {count, plural, one {# extension} other {# extensions}} couldn't be checked

```diff
+Не вдалося перевірити розширення ({count, plural, one {#} other {#}})
```

#### [`fof-upgrade-advisor.admin.overall.tasks`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.tasks%22)

> Ready once {count, plural, one {# task is} other {# tasks are}} done

```diff
+Буде готово після виконання завдань ({count, plural, one {залишилося #} other {залишилося #}})
```

#### [`fof-upgrade-advisor.admin.overall.unchecked_only`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.unchecked_only%22)

> Nearly ready: {count, plural, one {# extension} other {# extensions}} couldn't be checked

```diff
+Майже готово. Не вдалося перевірити розширення ({count, plural, one {#} other {#}})
```

#### [`fof-upgrade-advisor.admin.repositories.add_composer`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.add_composer%22)

> Add repository

```diff
+Додати репозиторій
```

#### [`fof-upgrade-advisor.admin.repositories.add_floxum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.add_floxum%22)

> Add Floxum

```diff
+Додати Floxum
```

#### [`fof-upgrade-advisor.admin.repositories.empty`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.empty%22)

> No additional repositories configured.

```diff
+Додаткових репозиторіїв не налаштовано.
```

#### [`fof-upgrade-advisor.admin.repositories.help`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.help%22)

> Add private or marketplace Composer repositories so the advisor can check extensions that aren't on public Packagist. Used only when an extension can't be found on Packagist.
>

```diff
+Додайте приватні або торговельні репозиторії Composer, щоб радник міг перевіряти розширення, яких немає на публічному Packagist. Вони використовуються лише тоді, коли розширення не знайдено на Packagist.
+
```

#### [`fof-upgrade-advisor.admin.repositories.remove`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.remove%22)

> Remove repository

```diff
+Видалити репозиторій
```

#### [`fof-upgrade-advisor.admin.repositories.test`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test%22)

> Test connection

```diff
+Тестове підключення
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_auth`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_auth%22)

> Authentication failed — check the token

```diff
+Помилка автентифікації — перевірте токен
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_invalid`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_invalid%22)

> Invalid response — check the URL

```diff
+Некоректна відповідь — перевірте URL-адресу
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_unreachable`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_unreachable%22)

> Could not reach the repository

```diff
+Не вдалося зв’язатися з репозиторієм
```

#### [`fof-upgrade-advisor.admin.repositories.test_ok`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_ok%22)

> Connected

```diff
+З’єднано
```

#### [`fof-upgrade-advisor.admin.repositories.token`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.token%22)

> Token

```diff
+Токен
```

#### [`fof-upgrade-advisor.admin.repositories.type_composer`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.type_composer%22)

> Private Packagist / Custom

```diff
+Приватний Packagist / Власний
```

#### [`fof-upgrade-advisor.admin.repositories.type_floxum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.type_floxum%22)

> Floxum

```diff
+Floxum
```

#### [`fof-upgrade-advisor.admin.repositories.url`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.url%22)

> Repository URL

```diff
+URL-адреса репозиторію
```

#### [`fof-upgrade-advisor.admin.repositories.username`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.username%22)

> Username

```diff
+Ім'я користувача
```

#### [`fof-upgrade-advisor.admin.summary.blocked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.blocked%22)

> {count} blocked

```diff
+Заблоковані: {count}
```

#### [`fof-upgrade-advisor.admin.summary.checked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.checked%22)

> Checked {time}

```diff
+Перевірено {time}
```

#### [`fof-upgrade-advisor.admin.summary.data_as_of`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.data_as_of%22)

> Package data from {time}

```diff
+Дані про пакети станом на {time}
```

#### [`fof-upgrade-advisor.admin.summary.data_as_of_help`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.data_as_of_help%22)

> Package lookups are cached for up to 6 hours. Refresh to fetch the latest.

```diff
+Запити про пакети кешуються до 6 годин. Оновіть, щоб отримати найсвіжіші дані.
```

#### [`fof-upgrade-advisor.admin.summary.export`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.export%22)

> Export CSV

```diff
+Експортувати CSV
```

#### [`fof-upgrade-advisor.admin.summary.progress`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.progress%22)

> {percent}% of extensions ready as-is

```diff
+Розширень, готових без змін: {percent}%
```

#### [`fof-upgrade-advisor.admin.summary.ready`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.ready%22)

> {count} ready as-is

```diff
+Готові без змін: {count}
```

#### [`fof-upgrade-advisor.admin.summary.recommended`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.recommended%22)

> {version} recommended

```diff
+Рекомендовано {version}
```

#### [`fof-upgrade-advisor.admin.summary.refresh`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.refresh%22)

> Refresh

```diff
+Оновити
```

#### [`fof-upgrade-advisor.admin.summary.refresh_cooldown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.refresh_cooldown%22)

> Refresh ({seconds}s)

```diff
+Оновити ({seconds} с)
```

#### [`fof-upgrade-advisor.admin.summary.tasks`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.tasks%22)

> {count} to do

```diff
+Потребують дій: {count}
```

#### [`fof-upgrade-advisor.admin.summary.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.unknown%22)

> {count} couldn't be checked

```diff
+Не вдалося перевірити: {count}
```

#### [`fof-upgrade-advisor.admin.tabs.report`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.tabs.report%22)

> Readiness report

```diff
+Звіт про готовність
```

#### [`fof-upgrade-advisor.admin.tabs.repositories`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/uk/?q=context%3A%3D%22fof-upgrade-advisor.admin.tabs.repositories%22)

> Repositories

```diff
+Репозиторії
```


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/uk/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+{count, plural, one {Обговорень: {count}} other {Обговорень: {count}}}
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/uk/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+{count, plural, one {Дописів: {count}} other {Дописів: {count}}}
```


### `prm-forum-activity` (missing)

#### [`prm-forum-activity.admin.permissions.feature_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.admin.permissions.feature_label%22)

> Feature discussions

```diff
+Вибирати рекомендовані обговорення
```

#### [`prm-forum-activity.admin.settings.default_tab_featured`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_featured%22)

> Featured

```diff
+Рекомендовані
```

#### [`prm-forum-activity.admin.settings.default_tab_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_label%22)

> Default activity tab

```diff
+Типова вкладка активності
```

#### [`prm-forum-activity.admin.settings.default_tab_latest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_latest%22)

> New posts

```diff
+Нові дописи
```

#### [`prm-forum-activity.admin.settings.default_tab_newest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_newest%22)

> New topics

```diff
+Нові обговорення
```

#### [`prm-forum-activity.forum.badge.featured_tooltip`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.badge.featured_tooltip%22)

> Featured discussion

```diff
+Рекомендоване обговорення
```

#### [`prm-forum-activity.forum.columns.forum`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.columns.forum%22)

> Forum

```diff
+Форум
```

#### [`prm-forum-activity.forum.columns.last_poster`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.columns.last_poster%22)

> Last poster

```diff
+Автор останнього допису
```

#### [`prm-forum-activity.forum.columns.posts`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.columns.posts%22)

> Replies

```diff
+Відповіді
```

#### [`prm-forum-activity.forum.columns.topic`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.columns.topic%22)

> Topic

```diff
+Обговорення
```

#### [`prm-forum-activity.forum.discussion_controls.feature`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.discussion_controls.feature%22)

> Feature

```diff
+Рекомендувати
```

#### [`prm-forum-activity.forum.discussion_controls.unfeature`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.discussion_controls.unfeature%22)

> Unfeature

```diff
+Прибрати з рекомендованих
```

#### [`prm-forum-activity.forum.empty`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.empty%22)

> No discussions to show.

```diff
+Немає обговорень для показу.
```

#### [`prm-forum-activity.forum.load_more`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.load_more%22)

> Load more

```diff
+Завантажити ще
```

#### [`prm-forum-activity.forum.normal_section`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.normal_section%22)

> Normal topics

```diff
+Звичайні обговорення
```

#### [`prm-forum-activity.forum.sticky_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.sticky_label%22)

> Sticky topic

```diff
+Закріплене обговорення
```

#### [`prm-forum-activity.forum.sticky_section`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.sticky_section%22)

> Sticky topics

```diff
+Закріплені обговорення
```

#### [`prm-forum-activity.forum.tabs.featured`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.tabs.featured%22)

> Featured

```diff
+Рекомендовані
```

#### [`prm-forum-activity.forum.tabs.latest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.tabs.latest%22)

> New posts

```diff
+Нові дописи
```

#### [`prm-forum-activity.forum.tabs.newest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.tabs.newest%22)

> New topics

```diff
+Нові обговорення
```

#### [`prm-forum-activity.forum.title`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/uk/?q=context%3A%3D%22prm-forum-activity.forum.title%22)

> Forum activity

```diff
+Активність форуму
```


### `prm-hero-image` (missing)

#### [`prm-hero-image.admin.help`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.help%22)

> Replaces the welcome banner with an image of the same size and a light dark overlay.

```diff
+Замінює вітальний банер зображенням того самого розміру з легким затемненням.
```

#### [`prm-hero-image.admin.overlay_help`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.overlay_help%22)

> Higher values make the image darker.

```diff
+Більше значення сильніше затемнює зображення.
```

#### [`prm-hero-image.admin.overlay_label`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.overlay_label%22)

> Overlay

```diff
+Затемнення
```

#### [`prm-hero-image.admin.permissions.profile_hero_label`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.permissions.profile_hero_label%22)

> Upload profile cover image

```diff
+Завантажити зображення обкладинки профілю
```

#### [`prm-hero-image.admin.preview_empty`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.preview_empty%22)

> No image yet.

```diff
+Зображення ще немає.
```

#### [`prm-hero-image.admin.profile_help`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.profile_help%22)

> Let groups change their own profile cover from the Permissions tab. Uploaded images are re-encoded on the server.

```diff
+Дозвольте групам змінювати власну обкладинку профілю на вкладці «Дозволи». Завантажені зображення перекодовуються на сервері.
```

#### [`prm-hero-image.admin.remove_button`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.remove_button%22)

> Remove image

```diff
+Видалити зображення
```

#### [`prm-hero-image.admin.saved`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.saved%22)

> Saved

```diff
+Збережено
```

#### [`prm-hero-image.admin.title`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.title%22)

> Homepage image

```diff
+Зображення головної сторінки
```

#### [`prm-hero-image.admin.upload_button`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.upload_button%22)

> Upload image

```diff
+Завантажити зображення
```

#### [`prm-hero-image.admin.upload_help`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.upload_help%22)

> PNG, JPG, GIF, or WEBP. Max 3 MB. A wide landscape image works best.

```diff
+PNG, JPG, GIF або WEBP. Максимум 3 МБ. Найкраще підходить широке горизонтальне зображення.
```

#### [`prm-hero-image.admin.upload_label`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.admin.upload_label%22)

> Image

```diff
+Зображення
```

#### [`prm-hero-image.forum.remove`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.forum.remove%22)

> Remove cover image

```diff
+Видалити обкладинку
```

#### [`prm-hero-image.forum.upload`](https://weblate.rob006.net/translate/flarum2/prm-hero-image/uk/?q=context%3A%3D%22prm-hero-image.forum.upload%22)

> Upload cover image

```diff
+Завантажити обкладинку
```


### `prm-messages` (missing)

#### [`prm-messages.admin.permissions.start_label`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.admin.permissions.start_label%22)

> Send private messages

```diff
+Надсилати приватні повідомлення
```

#### [`prm-messages.admin.settings.public_chat_help`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.admin.settings.public_chat_help%22)

> When enabled, members can talk in a shared chat room. When off, the page and menu are hidden.

```diff
+Якщо ввімкнено, учасники можуть спілкуватися в спільному чаті. Якщо вимкнено, сторінку й пункт меню приховано.
```

#### [`prm-messages.admin.settings.public_chat_label`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.admin.settings.public_chat_label%22)

> Public chat

```diff
+Публічний чат
```

#### [`prm-messages.forum.back`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.back%22)

> Inbox

```diff
+Вхідні
```

#### [`prm-messages.forum.chat.delete`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.delete%22)

> Delete

```diff
+Видалити
```

#### [`prm-messages.forum.chat.disabled`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.disabled%22)

> Public chat is turned off.

```diff
+Публічний чат вимкнено.
```

#### [`prm-messages.forum.chat.empty`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.empty%22)

> No messages yet. Be the first to write.

```diff
+Повідомлень ще немає. Напишіть перше.
```

#### [`prm-messages.forum.chat.header`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.header%22)

> Chat

```diff
+Чат
```

#### [`prm-messages.forum.chat.intro`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.intro%22)

> A shared room where every member can talk.

```diff
+Спільний чат, у якому можуть писати всі учасники.
```

#### [`prm-messages.forum.chat.login`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.login%22)

> Log in to write in chat.

```diff
+Увійдіть, щоб писати в чаті.
```

#### [`prm-messages.forum.chat.placeholder`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.placeholder%22)

> Message everyone… (Enter to send)

```diff
+Напишіть усім… (Enter — надіслати)
```

#### [`prm-messages.forum.chat.title`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.chat.title%22)

> Public chat

```diff
+Публічний чат
```

#### [`prm-messages.forum.compose`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.compose%22)

> New message

```diff
+Нове повідомлення
```

#### [`prm-messages.forum.empty`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.empty%22)

> You have no private messages yet.

```diff
+У вас ще немає приватних повідомлень.
```

#### [`prm-messages.forum.header`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.header%22)

> Messages

```diff
+Повідомлення
```

#### [`prm-messages.forum.hide`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.hide%22)

> Hide conversation

```diff
+Приховати розмову
```

#### [`prm-messages.forum.hide_confirm`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.hide_confirm%22)

> This conversation will leave your inbox. The other person can still see it.

```diff
+Розмова зникне з ваших вхідних. Співрозмовник і далі зможе її бачити.
```

#### [`prm-messages.forum.message`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.message%22)

> Message

```diff
+Повідомлення
```

#### [`prm-messages.forum.no_users`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.no_users%22)

> No users found.

```diff
+Користувачів не знайдено.
```

#### [`prm-messages.forum.notifications.notify_label`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.notifications.notify_label%22)

> Someone sends me a private message

```diff
+Мені надійшло приватне повідомлення
```

#### [`prm-messages.forum.notifications.received`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.notifications.received%22)

> {username} sent you a message

```diff
+Ви отримали повідомлення від користувача {username}
```

#### [`prm-messages.forum.search_placeholder`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.search_placeholder%22)

> Type a username…

```diff
+Введіть ім’я користувача…
```

#### [`prm-messages.forum.search_user`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.search_user%22)

> Search users

```diff
+Шукати користувачів
```

#### [`prm-messages.forum.send`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.send%22)

> Send

```diff
+Надіслати
```

#### [`prm-messages.forum.sending`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.sending%22)

> Sending…

```diff
+Надсилання…
```

#### [`prm-messages.forum.sent`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.sent%22)

> Message sent.

```diff
+Повідомлення надіслано.
```

#### [`prm-messages.forum.subject`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.subject%22)

> Subject

```diff
+Тема
```

#### [`prm-messages.forum.subject_placeholder`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.subject_placeholder%22)

> e.g. About payment (optional)

```diff
+Наприклад, «Щодо оплати» (необов’язково)
```

#### [`prm-messages.forum.title`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.title%22)

> Private messages

```diff
+Приватні повідомлення
```

#### [`prm-messages.forum.to`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.to%22)

> To

```diff
+Кому
```

#### [`prm-messages.forum.type_placeholder`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.type_placeholder%22)

> Write a message… (Enter to send)

```diff
+Напишіть повідомлення… (Enter — надіслати)
```

#### [`prm-messages.forum.unread`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.unread%22)

> Unread

```diff
+Непрочитані
```

#### [`prm-messages.forum.user_controls.message`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.user_controls.message%22)

> Send message

```diff
+Надіслати повідомлення
```

#### [`prm-messages.forum.you`](https://weblate.rob006.net/translate/flarum2/prm-messages/uk/?q=context%3A%3D%22prm-messages.forum.you%22)

> You

```diff
+Ви
```


### `prm-moderation` (missing)

#### [`prm-moderation.forum.handle.ban_30`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.handle.ban_30%22)

> 30 days

```diff
+30 днів
```

#### [`prm-moderation.forum.handle.ban_7`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.handle.ban_7%22)

> 7 days

```diff
+7 днів
```

#### [`prm-moderation.forum.handle.close`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.handle.close%22)

> Close

```diff
+Закрити
```

#### [`prm-moderation.forum.header`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.header%22)

> Moderation

```diff
+Модерація
```

#### [`prm-moderation.forum.notifications.ticket_replied_staff`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.notifications.ticket_replied_staff%22)

> {username} replied to a support ticket

```diff
+Користувач {username} відповів на звернення
```

#### [`prm-moderation.forum.panel.actions`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.actions%22)

> Actions

```diff
+Дії
```

#### [`prm-moderation.forum.panel.chart_replies`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.chart_replies%22)

> Replies

```diff
+Відповіді
```

#### [`prm-moderation.forum.panel.date`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.date%22)

> Date

```diff
+Дата
```

#### [`prm-moderation.forum.panel.reason`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.reason%22)

> Reason

```diff
+Причина
```

#### [`prm-moderation.forum.panel.rejected`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.rejected%22)

> Rejected

```diff
+Відхилено
```

#### [`prm-moderation.forum.panel.resolved`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.resolved%22)

> Resolved

```diff
+Вирішено
```

#### [`prm-moderation.forum.panel.target`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.target%22)

> User

```diff
+Користувач
```

#### [`prm-moderation.forum.panel.type`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.type%22)

> Type

```diff
+Тип
```

#### [`prm-moderation.forum.panel.type_discussion`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.type_discussion%22)

> Discussion

```diff
+Обговорення
```

#### [`prm-moderation.forum.panel.type_user`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.panel.type_user%22)

> User

```diff
+Користувач
```

#### [`prm-moderation.forum.report.details`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.report.details%22)

> Details

```diff
+Подробиці
```

#### [`prm-moderation.forum.report.reason`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.report.reason%22)

> Reason

```diff
+Причина
```

#### [`prm-moderation.forum.report.reason_other`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.report.reason_other%22)

> Other

```diff
+Інше
```

#### [`prm-moderation.forum.report.reason_spam`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.report.reason_spam%22)

> Spam

```diff
+Спам
```

#### [`prm-moderation.forum.tickets.category`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.category%22)

> Category

```diff
+Категорія
```

#### [`prm-moderation.forum.tickets.category_other`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.category_other%22)

> Other

```diff
+Інше
```

#### [`prm-moderation.forum.tickets.message`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.message%22)

> Message

```diff
+Повідомлення
```

#### [`prm-moderation.forum.tickets.priority`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.priority%22)

> Priority

```diff
+Пріоритет
```

#### [`prm-moderation.forum.tickets.reopen`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.reopen%22)

> Reopen

```diff
+Відкрити знову
```

#### [`prm-moderation.forum.tickets.send_reply`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.send_reply%22)

> Send

```diff
+Надіслати
```

#### [`prm-moderation.forum.tickets.status`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.status%22)

> Status

```diff
+Статус
```

#### [`prm-moderation.forum.tickets.status_closed`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.status_closed%22)

> Closed

```diff
+Закрито
```

#### [`prm-moderation.forum.tickets.subject`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.subject%22)

> Subject

```diff
+Тема
```

#### [`prm-moderation.forum.tickets.user`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.tickets.user%22)

> User

```diff
+Користувач
```

#### [`prm-moderation.forum.warn.reason`](https://weblate.rob006.net/translate/flarum2/prm-moderation/uk/?q=context%3A%3D%22prm-moderation.forum.warn.reason%22)

> Reason

```diff
+Причина
```


### `prm-rank-banner` (missing)

#### [`prm-rank-banner.admin.color_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.color_label%22)

> Color

```diff
+Колір
```

#### [`prm-rank-banner.admin.guest_note`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.guest_note%22)

> The Guest group is never shown as a banner.

```diff
+Банер групи гостей не відображається.
```

#### [`prm-rank-banner.admin.help`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.help%22)

> Manage each group’s rank banner here. The default style uses icon + color + name, or upload a custom horizontal image like XenForo.

```diff
+Налаштуйте банери звань для кожної групи. Стандартний стиль поєднує піктограму, колір і назву. Також можна завантажити власне горизонтальне зображення, як у XenForo.
```

#### [`prm-rank-banner.admin.icon_help`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.icon_help%22)

> Font Awesome class, e.g. fas fa-star

```diff
+Клас Font Awesome, наприклад fas fa-star
```

#### [`prm-rank-banner.admin.icon_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.icon_label%22)

> Icon

```diff
+Значок
```

#### [`prm-rank-banner.admin.image_help`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.image_help%22)

> PNG, JPG, GIF or WEBP. Max 1 MB. Transparent PNG recommended.

```diff
+PNG, JPG, GIF або WEBP. Не більше 1 МБ. Рекомендовано PNG із прозорим тлом.
```

#### [`prm-rank-banner.admin.image_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.image_label%22)

> Horizontal banner image

```diff
+Горизонтальне зображення банера
```

#### [`prm-rank-banner.admin.label_help`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.label_help%22)

> Leave empty to use the rank name.

```diff
+Залиште поле порожнім, щоб використати назву звання.
```

#### [`prm-rank-banner.admin.label_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.label_label%22)

> Banner text

```diff
+Текст банера
```

#### [`prm-rank-banner.admin.name_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.name_label%22)

> Rank name

```diff
+Назва звання
```

#### [`prm-rank-banner.admin.preview_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.preview_label%22)

> Preview

```diff
+Попередній перегляд
```

#### [`prm-rank-banner.admin.remove_image_button`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.remove_image_button%22)

> Remove image

```diff
+Вилучити зображення
```

#### [`prm-rank-banner.admin.save_button`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.save_button%22)

> Save

```diff
+Зберегти
```

#### [`prm-rank-banner.admin.saved`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.saved%22)

> Saved

```diff
+Збережено
```

#### [`prm-rank-banner.admin.show_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.show_label%22)

> Show on forum

```diff
+Показувати на форумі
```

#### [`prm-rank-banner.admin.style_default`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.style_default%22)

> Default (icon + text)

```diff
+Стандартний (піктограма й текст)
```

#### [`prm-rank-banner.admin.style_image`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.style_image%22)

> Custom image

```diff
+Власне зображення
```

#### [`prm-rank-banner.admin.style_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.style_label%22)

> Banner style

```diff
+Стиль банера
```

#### [`prm-rank-banner.admin.title`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.title%22)

> Ranks

```diff
+Звання
```

#### [`prm-rank-banner.admin.upload_button`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.admin.upload_button%22)

> Upload image

```diff
+Завантажити зображення
```

#### [`prm-rank-banner.forum.rank_banner_label`](https://weblate.rob006.net/translate/flarum2/prm-rank-banner/uk/?q=context%3A%3D%22prm-rank-banner.forum.rank_banner_label%22)

> {name} rank

```diff
+Звання «{name}»
```


### `prm-security` (missing)

#### [`prm-security.admin.settings.on_login_label`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.on_login_label%22)

> Require on login

```diff
+Вимагати під час входу
```

#### [`prm-security.admin.settings.on_register_label`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.on_register_label%22)

> Require on registration

```diff
+Вимагати під час реєстрації
```

#### [`prm-security.admin.settings.provider_hcaptcha`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.provider_hcaptcha%22)

> hCaptcha

```diff
+hCaptcha
```

#### [`prm-security.admin.settings.provider_help`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.provider_help%22)

> Choose which challenge visitors must complete on login and registration. Leave Off until you paste keys.

```diff
+Виберіть, яку перевірку мають пройти відвідувачі під час входу й реєстрації. Залиште перевірку вимкненою, доки не введете ключі.
```

#### [`prm-security.admin.settings.provider_label`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.provider_label%22)

> Captcha provider

```diff
+Провайдер CAPTCHA
```

#### [`prm-security.admin.settings.provider_none`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.provider_none%22)

> Off

```diff
+Вимкнено
```

#### [`prm-security.admin.settings.provider_recaptcha`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.provider_recaptcha%22)

> Google reCAPTCHA v2

```diff
+Google reCAPTCHA v2
```

#### [`prm-security.admin.settings.provider_turnstile`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.provider_turnstile%22)

> Cloudflare Turnstile

```diff
+Cloudflare Turnstile
```

#### [`prm-security.admin.settings.secret_key_help`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.secret_key_help%22)

> Private key. Never share this. Get keys from Google reCAPTCHA, hCaptcha, or Cloudflare Turnstile.

```diff
+Закритий ключ. Зберігайте його в таємниці. Отримайте ключі від Google reCAPTCHA, hCaptcha або Cloudflare Turnstile.
```

#### [`prm-security.admin.settings.secret_key_label`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.secret_key_label%22)

> Secret key

```diff
+Секретний ключ
```

#### [`prm-security.admin.settings.site_key_help`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.site_key_help%22)

> Public key from the provider dashboard. Safe to show in the browser.

```diff
+Відкритий ключ із панелі провайдера. Його можна показувати в браузері.
```

#### [`prm-security.admin.settings.site_key_label`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.admin.settings.site_key_label%22)

> Site key

```diff
+Ключ сайту
```

#### [`prm-security.forum.invalid`](https://weblate.rob006.net/translate/flarum2/prm-security/uk/?q=context%3A%3D%22prm-security.forum.invalid%22)

> Please complete the captcha and try again.

```diff
+Пройдіть CAPTCHA й спробуйте ще раз.
```


### `prm-sleek-dark` (missing)

#### [`prm-sleek-dark.forum.messages`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.messages%22)

> Messages

```diff
+Повідомлення
```

#### [`prm-sleek-dark.forum.nav_members`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.nav_members%22)

> Members

```diff
+Учасники
```

#### [`prm-sleek-dark.forum.none`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.none%22)

> None

```diff
+Немає
```

#### [`prm-sleek-dark.forum.profile_last_seen`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.profile_last_seen%22)

> Last seen

```diff
+Остання активність
```

#### [`prm-sleek-dark.forum.profile_messages`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.profile_messages%22)

> Messages

```diff
+Повідомлення
```

#### [`prm-sleek-dark.forum.profile_online`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.profile_online%22)

> Online

```diff
+Онлайн
```

#### [`prm-sleek-dark.forum.replies`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.replies%22)

> Replies

```diff
+Відповіді
```

#### [`prm-sleek-dark.forum.staff_moderator`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.staff_moderator%22)

> Moderator

```diff
+Модератор
```

#### [`prm-sleek-dark.forum.stat_members`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.stat_members%22)

> Members

```diff
+Учасники
```

#### [`prm-sleek-dark.forum.stat_messages`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.stat_messages%22)

> Messages

```diff
+Повідомлення
```

#### [`prm-sleek-dark.forum.thread_start_date`](https://weblate.rob006.net/translate/flarum2/prm-sleek-dark/uk/?q=context%3A%3D%22prm-sleek-dark.forum.thread_start_date%22)

> Start date

```diff
+Дата початку
```


### `prm-trade-feedback` (missing)

#### [`prm-trade-feedback.forum.actions.delete`](https://weblate.rob006.net/translate/flarum2/prm-trade-feedback/uk/?q=context%3A%3D%22prm-trade-feedback.forum.actions.delete%22)

> Delete

```diff
+Видалити
```

#### [`prm-trade-feedback.forum.actions.edit`](https://weblate.rob006.net/translate/flarum2/prm-trade-feedback/uk/?q=context%3A%3D%22prm-trade-feedback.forum.actions.edit%22)

> Edit

```diff
+Редагувати
```

#### [`prm-trade-feedback.forum.filters.all`](https://weblate.rob006.net/translate/flarum2/prm-trade-feedback/uk/?q=context%3A%3D%22prm-trade-feedback.forum.filters.all%22)

> All

```diff
+Усі
```

#### [`prm-trade-feedback.forum.form.cancel`](https://weblate.rob006.net/translate/flarum2/prm-trade-feedback/uk/?q=context%3A%3D%22prm-trade-feedback.forum.form.cancel%22)

> Cancel

```diff
+Скасувати
```

#### [`prm-trade-feedback.forum.form.submit`](https://weblate.rob006.net/translate/flarum2/prm-trade-feedback/uk/?q=context%3A%3D%22prm-trade-feedback.forum.form.submit%22)

> Submit

```diff
+Надіслати
```

#### [`prm-trade-feedback.forum.table.date`](https://weblate.rob006.net/translate/flarum2/prm-trade-feedback/uk/?q=context%3A%3D%22prm-trade-feedback.forum.table.date%22)

> Date

```diff
+Дата
```


### `tapao-auto-ai-moderation` (missing)

#### [`tapao-moderationai.admin.log.approve`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.approve%22)

> Approve

```diff
+Схвалити
```

#### [`tapao-moderationai.admin.log.decision_approved`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.decision_approved%22)

> ✓ Approved

```diff
+✓ Схвалено
```

#### [`tapao-moderationai.admin.log.decision_rejected`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.decision_rejected%22)

> ✗ Rejected (restored)

```diff
+✗ Рішення відхилено (вміст відновлено)
```

#### [`tapao-moderationai.admin.log.escalate`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.escalate%22)

> Escalate

```diff
+Передати на розгляд
```

#### [`tapao-moderationai.admin.log.pending`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.pending%22)

> Pending Review

```diff
+Очікує на перевірку
```

#### [`tapao-moderationai.admin.log.reject`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.reject%22)

> Reject (Restore Content)

```diff
+Відхилити рішення (відновити вміст)
```

#### [`tapao-moderationai.admin.log.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.log.title%22)

> Moderation Log

```diff
+Журнал модерації
```

#### [`tapao-moderationai.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.api_key_label%22)

> OpenAI API Key

```diff
+Ключ API OpenAI
```

#### [`tapao-moderationai.admin.settings.api_key_placeholder`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.api_key_placeholder%22)

> sk-...

```diff
+sk-...
```

#### [`tapao-moderationai.admin.settings.connection_fail`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.connection_fail%22)

> ✗ API connection failed — check API key

```diff
+✗ Не вдалося підключитися до API. Перевірте ключ API
```

#### [`tapao-moderationai.admin.settings.connection_ok`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.connection_ok%22)

> ✓ API connection successful

```diff
+✓ Підключення до API працює
```

#### [`tapao-moderationai.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.enabled_label%22)

> Enable Auto-Moderation

```diff
+Увімкнути автоматичну модерацію
```

#### [`tapao-moderationai.admin.settings.exempt_groups_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.exempt_groups_label%22)

> Exempt User Groups

```diff
+Групи користувачів, звільнені від перевірки
```

#### [`tapao-moderationai.admin.settings.mode_async`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_async%22)

> Asynchronous (review after save)

```diff
+Асинхронний (перевіряти після збереження)
```

#### [`tapao-moderationai.admin.settings.mode_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_label%22)

> Moderation Mode

```diff
+Режим модерації
```

#### [`tapao-moderationai.admin.settings.mode_sync`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_sync%22)

> Synchronous (block before save)

```diff
+Синхронний (блокувати до збереження)
```

#### [`tapao-moderationai.admin.settings.model_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.model_label%22)

> Moderation Model

```diff
+Модель модерації
```

#### [`tapao-moderationai.admin.settings.scan_images_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.scan_images_label%22)

> Moderate Images (omni-moderation-latest required)

```diff
+Модерувати зображення (потрібна модель omni-moderation-latest)
```

#### [`tapao-moderationai.admin.settings.scan_private_messages_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.scan_private_messages_label%22)

> Moderate Private Messages (fof/byobu)

```diff
+Модерувати приватні повідомлення (fof/byobu)
```

#### [`tapao-moderationai.admin.settings.test_connection`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.test_connection%22)

> Test API Connection

```diff
+Перевірити підключення до API
```

#### [`tapao-moderationai.admin.settings.thresholds_heading`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.thresholds_heading%22)

> Per-Category Thresholds &amp; Actions

```diff
+Пороги й дії за категоріями
```

#### [`tapao-moderationai.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.title%22)

> ModerationAI Settings

```diff
+Налаштування ModerationAI
```

#### [`tapao-moderationai.admin.settings.trust_skip_threshold_help`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.trust_skip_threshold_help%22)

> Users scoring above this are not moderated (trust system).

```diff
+Система довіри звільняє від перевірки користувачів, чия оцінка перевищує поріг.
```

#### [`tapao-moderationai.admin.settings.trust_skip_threshold_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.trust_skip_threshold_label%22)

> Trust Score — Skip threshold (0–100)

```diff
+Оцінка довіри — поріг пропуску перевірки (0–100)
```

#### [`tapao-moderationai.admin.settings.webhook_url_help`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.webhook_url_help%22)

> POSTed JSON on every flagged item.

```diff
+Для кожного позначеного матеріалу надсилається запит POST із даними JSON.
```

#### [`tapao-moderationai.admin.settings.webhook_url_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.admin.settings.webhook_url_label%22)

> Webhook URL (optional)

```diff
+URL вебхука (необов’язково)
```

#### [`tapao-moderationai.forum.post_under_review`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.forum.post_under_review%22)

> Your post is being reviewed by our moderation system and will appear shortly.

```diff
+Система модерації перевіряє ваш допис. Він незабаром з’явиться.
```

#### [`tapao-moderationai.forum.upload_rejected`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/uk/?q=context%3A%3D%22tapao-moderationai.forum.upload_rejected%22)

> This file was rejected by the content moderation system.

```diff
+Система модерації вмісту відхилила цей файл.
```

<!-- {% endraw %} -->
