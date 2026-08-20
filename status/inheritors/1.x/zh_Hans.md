# Chinese (Simplified) inherited translations differences

Translations for Chinese (Simplified) (`zh_Hans`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **567** are translated differently and **1548** are
translated only in `zh_Hans`. Altogether they cover **113** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | [3](#acpl-lscache) | [8](#acpl-lscache-missing) |
| `antoinefr-money` | [7](#antoinefr-money) | 0 |
| `core` | [47](#core) | 0 |
| `datitisev-backup` | [28](#datitisev-backup) | 0 |
| `datlechin-birthdays` | [1](#datlechin-birthdays) | 0 |
| `datlechin-more-discussions` | [5](#datlechin-more-discussions) | 0 |
| `datlechin-passkey` | 0 | [5](#datlechin-passkey-missing) |
| `datlechin-tag-passwords` | [21](#datlechin-tag-passwords) | 0 |
| `ekumanov-inline-audio` | 0 | [5](#ekumanov-inline-audio-missing) |
| `ekumanov-new-posts-notice` | 0 | [2](#ekumanov-new-posts-notice-missing) |
| `flarum-akismet` | [1](#flarum-akismet) | 0 |
| `flarum-approval` | [3](#flarum-approval) | 0 |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `flarum-bbcode` | [1](#flarum-bbcode) | 0 |
| `flarum-extension-manager` | [4](#flarum-extension-manager) | 0 |
| `flarum-flags` | [1](#flarum-flags) | 0 |
| `flarum-gdpr` | [10](#flarum-gdpr) | 0 |
| `flarum-likes` | [3](#flarum-likes) | 0 |
| `flarum-lock` | [6](#flarum-lock) | 0 |
| `flarum-markdown` | [11](#flarum-markdown) | 0 |
| `flarum-mentions` | [15](#flarum-mentions) | 0 |
| `flarum-nicknames` | [1](#flarum-nicknames) | 0 |
| `flarum-pusher` | [1](#flarum-pusher) | 0 |
| `flarum-statistics` | [2](#flarum-statistics) | 0 |
| `flarum-sticky` | [5](#flarum-sticky) | 0 |
| `flarum-subscriptions` | [16](#flarum-subscriptions) | 0 |
| `flarum-suspend` | [12](#flarum-suspend) | 0 |
| `flarum-tags` | [31](#flarum-tags) | 0 |
| `flectar-turnstile` | [2](#flectar-turnstile) | 0 |
| `fof-analytics` | [4](#fof-analytics) | 0 |
| `fof-anti-spam` | [47](#fof-anti-spam) | [2](#fof-anti-spam-missing) |
| `fof-badges` | [1](#fof-badges) | 0 |
| `fof-best-answer` | [10](#fof-best-answer) | [3](#fof-best-answer-missing) |
| `fof-byobu` | [42](#fof-byobu) | 0 |
| `fof-categories` | 0 | [27](#fof-categories-missing) |
| `fof-checklist` | 0 | [2](#fof-checklist-missing) |
| `fof-default-group` | [1](#fof-default-group) | 0 |
| `fof-default-user-preferences` | [3](#fof-default-user-preferences) | 0 |
| `fof-discussion-templates` | [8](#fof-discussion-templates) | 0 |
| `fof-discussion-thumbnail` | [1](#fof-discussion-thumbnail) | 0 |
| `fof-doorman` | [1](#fof-doorman) | [22](#fof-doorman-missing) |
| `fof-drafts` | [1](#fof-drafts) | 0 |
| `fof-follow-tags` | [9](#fof-follow-tags) | 0 |
| `fof-formatting` | [1](#fof-formatting) | 0 |
| `fof-forum-statistics-widget` | 0 | [2](#fof-forum-statistics-widget-missing) |
| `fof-forum-stats-widget` | 0 | [6](#fof-forum-stats-widget-missing) |
| `fof-forum-widgets-core` | 0 | [3](#fof-forum-widgets-core-missing) |
| `fof-gamification` | [13](#fof-gamification) | 0 |
| `fof-geoip` | [1](#fof-geoip) | [47](#fof-geoip-missing) |
| `fof-github-sponsors` | 0 | [4](#fof-github-sponsors-missing) |
| `fof-horizon` | [1](#fof-horizon) | [15](#fof-horizon-missing) |
| `fof-ignore-users` | [1](#fof-ignore-users) | 0 |
| `fof-impersonate` | [1](#fof-impersonate) | 0 |
| `fof-links` | [1](#fof-links) | [1](#fof-links-missing) |
| `fof-mailing` | 0 | [19](#fof-mailing-missing) |
| `fof-masquerade` | [5](#fof-masquerade) | [5](#fof-masquerade-missing) |
| `fof-merge-discussions` | [12](#fof-merge-discussions) | 0 |
| `fof-moderator-notes` | [1](#fof-moderator-notes) | 0 |
| `fof-moderator-warnings` | [1](#fof-moderator-warnings) | 0 |
| `fof-move-posts` | 0 | [29](#fof-move-posts-missing) |
| `fof-news-widget` | 0 | [3](#fof-news-widget-missing) |
| `fof-oauth` | [1](#fof-oauth) | 0 |
| `fof-online-users-widget` | 0 | [6](#fof-online-users-widget-missing) |
| `fof-open-collective` | [1](#fof-open-collective) | [6](#fof-open-collective-missing) |
| `fof-pages` | [1](#fof-pages) | 0 |
| `fof-photoswipe` | 0 | [5](#fof-photoswipe-missing) |
| `fof-polls` | 0 | [60](#fof-polls-missing) |
| `fof-reactions` | [1](#fof-reactions) | 0 |
| `fof-rich-text` | 0 | [19](#fof-rich-text-missing) |
| `fof-seo` | 0 | [195](#fof-seo-missing) |
| `fof-signature` | 0 | [17](#fof-signature-missing) |
| `fof-sitemap` | [1](#fof-sitemap) | 0 |
| `fof-socialprofile` | 0 | [1](#fof-socialprofile-missing) |
| `fof-split` | [4](#fof-split) | 0 |
| `fof-synopsis` | [3](#fof-synopsis) | 0 |
| `fof-terms` | 0 | [5](#fof-terms-missing) |
| `fof-top-posters-widget` | 0 | [2](#fof-top-posters-widget-missing) |
| `fof-upload` | [1](#fof-upload) | [5](#fof-upload-missing) |
| `fof-user-directory` | [6](#fof-user-directory) | [1](#fof-user-directory-missing) |
| `fof-usercard-stats` | 0 | [2](#fof-usercard-stats-missing) |
| `fof-username-request` | [1](#fof-username-request) | 0 |
| `fof-webhooks` | [11](#fof-webhooks) | [3](#fof-webhooks-missing) |
| `forumaker-magicbb` | [17](#forumaker-magicbb) | [2](#forumaker-magicbb-missing) |
| `forumaker-magicread` | 0 | [2](#forumaker-magicread-missing) |
| `huseyinfiliz-diff` | 0 | [64](#huseyinfiliz-diff-missing) |
| `huseyinfiliz-leaderboard` | 0 | [77](#huseyinfiliz-leaderboard-missing) |
| `huseyinfiliz-modern-footer` | 0 | [3](#huseyinfiliz-modern-footer-missing) |
| `ianm-boring-avatars` | 0 | [3](#ianm-boring-avatars-missing) |
| `ianm-follow-users` | [13](#ianm-follow-users) | [5](#ianm-follow-users-missing) |
| `ianm-log-viewer` | 0 | [6](#ianm-log-viewer-missing) |
| `ianm-twofactor` | [1](#ianm-twofactor) | [14](#ianm-twofactor-missing) |
| `justoverclock-related-discussions` | [6](#justoverclock-related-discussions) | 0 |
| `justoverclock-welcomebox` | [1](#justoverclock-welcomebox) | 0 |
| `migratetoflarum-fake-data` | [3](#migratetoflarum-fake-data) | 0 |
| `pianotell-flamoji` | 0 | [82](#pianotell-flamoji-missing) |
| `quasimo-llms-txt` | 0 | [18](#quasimo-llms-txt-missing) |
| `ralkage-account-lockout` | 0 | [24](#ralkage-account-lockout-missing) |
| `ralkage-ad-management` | 0 | [170](#ralkage-ad-management-missing) |
| `ralkage-cap-captcha` | 0 | [10](#ralkage-cap-captcha-missing) |
| `ralkage-civility-filter` | 0 | [104](#ralkage-civility-filter-missing) |
| `ralkage-hcaptcha` | [2](#ralkage-hcaptcha) | [4](#ralkage-hcaptcha-missing) |
| `ralkage-linked-accounts` | 0 | [54](#ralkage-linked-accounts-missing) |
| `ralkage-profile-messages` | 0 | [45](#ralkage-profile-messages-missing) |
| `ralkage-word-censor` | 0 | [6](#ralkage-word-censor-missing) |
| `ralkage-word-counter` | 0 | [1](#ralkage-word-counter-missing) |
| `resofire-blog-cards` | 0 | [25](#resofire-blog-cards-missing) |
| `resofire-digest-mail` | 0 | [69](#resofire-digest-mail-missing) |
| `resofire-menu-control` | 0 | [20](#resofire-menu-control-missing) |
| `tryhackx-advanced-pages` | 0 | [61](#tryhackx-advanced-pages-missing) |
| `validation` | [18](#validation) | 0 |
| `walsgit-recycle-bin` | [32](#walsgit-recycle-bin) | [33](#walsgit-recycle-bin-missing) |
| `yippy-auth-ldap` | [1](#yippy-auth-ldap) | 0 |
| `yippy-tag-with-themes` | [39](#yippy-tag-with-themes) | [16](#yippy-tag-with-themes-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `zh_Hans` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-lscache`

#### [`acpl-lscache.admin.purge_all`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.purge_all%22)

> =&gt; acpl-lscache.ref.purge\_cache

```diff
-清除全部 LSCache
+=> acpl-lscache.ref.purge_cache
```

#### [`acpl-lscache.admin.purge_on_discussion_update_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_help%22)

> Enter the URLs or cache Tags you want to purge when a discussion is updated, one per line. URL should start with &lt;code&gt;/&lt;/code&gt;, e.g. &lt;code&gt;/rankings&lt;/code&gt;, and cache Tag should start with &lt;code&gt;tag=&lt;/code&gt;, e.g. &lt;code&gt;tag=rankings&lt;/code&gt;. For multiple routes, adding a rule in .htaccess with a regular expression that tags routes and entering only this tag here is faster. &lt;a&gt;Learn more&lt;/a&gt;. By default, the cache for the homepage and updated discussions is purged.

```diff
-指定主题帖发生变化时要清除的页面路由或缓存标签，一行一个。路由以 <code>/</code> 开头，例如 <code>/rankings</code>。标签应以 <code>tag=</code> 开头，例如 <code>tag=rankings</code>。要清除多个路由，请在 .htaccess 中添加正则表达式规则，并在此处填写表达式，<a>了解更多</a>。默认情况下，会清除主页或发生变化的主题帖缓存。
+指定讨论帖发生变化时要清除的页面路由或缓存标签，一行一个。路由以 <code>/</code> 开头，例如 <code>/rankings</code>。标签应以 <code>tag=</code> 开头，例如 <code>tag=rankings</code>。要清除多个路由，请在 .htaccess 中添加正则表达式规则，并在此处填写表达式，<a>了解更多</a>。默认情况下，会清除主页或发生变化的讨论帖缓存。
```

<del>指定主题帖发生变化时要清除的页面路由或缓存标签，一行一个。路由以</del><ins>指定讨论帖发生变化时要清除的页面路由或缓存标签，一行一个。路由以</ins> &lt;code&gt;/&lt;/code&gt; 开头，例如 &lt;code&gt;/rankings&lt;/code&gt;。标签应以 &lt;code&gt;tag=&lt;/code&gt; 开头，例如 &lt;code&gt;tag=rankings&lt;/code&gt;。要清除多个路由，请在 .htaccess <del>中添加正则表达式规则，并在此处填写表达式，&lt;a&gt;了解更多&lt;/a&gt;。默认情况下，会清除主页或发生变化的主题帖缓存。</del><ins>中添加正则表达式规则，并在此处填写表达式，&lt;a&gt;了解更多&lt;/a&gt;。默认情况下，会清除主页或发生变化的讨论帖缓存。</ins>

#### [`acpl-lscache.admin.purge_on_discussion_update_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_label%22)

> Purge URLs or cache Tags on Discussion Update

```diff
-主题更新时清除 URL 和缓存标签
+讨论更新时清除 URL 和缓存标签
```

<del>主题更新时清除</del><ins>讨论更新时清除</ins> URL 和缓存标签


### `antoinefr-money`

#### [`antoinefr-money.admin.automoderator.action_name`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.admin.automoderator.action_name%22)

> Give money

```diff
-奖励财富
+奖励货币
```

#### [`antoinefr-money.admin.automoderator.metric_name`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.admin.automoderator.metric_name%22)

> Money

```diff
-财富
+货币
```

#### [`antoinefr-money.admin.autoremove.0`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.admin.autoremove.0%22)

> Never remove money

```diff
-财富只增不减
+货币只增不减
```

#### [`antoinefr-money.admin.permissions.edit_money_label`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.admin.permissions.edit_money_label%22)

> Edit money

```diff
-调整财富
+调整货币
```

#### [`antoinefr-money.admin.settings.autoremove`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.admin.settings.autoremove%22)

> Automatically update money

```diff
-重算计算财富
+重新计算货币
```

#### [`antoinefr-money.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.forum.modal.title%22)

> {username}'s money

```diff
-{username} 的财富
+{username} 的货币数
```

{username} <del>的财富</del><ins>的货币数</ins>

#### [`antoinefr-money.forum.user_controls.money_button`](https://weblate.rob006.net/translate/flarum2/antoinefr-money/zh_Hans/?q=context%3A%3D%22antoinefr-money.forum.user_controls.money_button%22)

> Edit money

```diff
-修改财富
+修改货币
```


### `core`

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-自定义论坛配色、图标及其他元素
+自定义论坛配色、图标以及其他元素
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
-Flarum 维护着一份《<a>停止维护的扩展程序清单</a>》。如果您安装的某些扩展程序已停止维护，管理页面会显示相应提示。
+Flarum 维护着一份<a>停止维护的扩展程序清单</a>。如果您安装的某些扩展程序已停止维护，管理页面会显示相应提示。
```

Flarum <del>维护着一份《&lt;a&gt;停止维护的扩展程序清单&lt;/a&gt;》。如果您安装的某些扩展程序已停止维护，管理页面会显示相应提示。</del><ins>维护着一份&lt;a&gt;停止维护的扩展程序清单&lt;/a&gt;。如果您安装的某些扩展程序已停止维护，管理页面会显示相应提示。</ins>

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-设置论坛名称、语言以及其他基础设置
+设置论坛名称、语言及其他基本设置
```

#### [`core.admin.basics.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.basics.title%22)

> Basics

```diff
-常规
+基本设置
```

#### [`core.admin.email.mail_encryption_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.email.mail_encryption_label%22)

> Encryption

```diff
-加密协议（小写 ssl 或 tls）
+加密协议
```

#### [`core.admin.email.mail_mailgun_secret_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.email.mail_mailgun_secret_label%22)

> Secret key

```diff
-秘钥
+密钥
```

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-使用上述配置向 {email} 发送测试邮件。
+这将使用上述配置向您的邮箱 {email} 发送一封邮件。
```

<del>使用上述配置向</del><ins>这将使用上述配置向您的邮箱</ins> {email} <del>发送测试邮件。</del><ins>发送一封邮件。</ins>

#### [`core.admin.nav.categories.discussion`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.nav.categories.discussion%22)

> Discussion

```diff
-主题
+讨论
```

#### [`core.admin.nav.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.nav.search_placeholder%22)

> Search Extensions

```diff
-搜索
+搜索扩展
```

#### [`core.admin.permissions.allow_renaming_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.permissions.allow_renaming_label%22)

> Allow renaming

```diff
-更改自己的主题标题
+更改自己的讨论标题
```

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-永久删除主题
+永久删除讨论
```

#### [`core.admin.permissions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.permissions.delete_discussions_label%22)

> Delete discussions

```diff
-删除主题
+删除讨论
```

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-设置各用户组访问及操作权限
+配置用户的查看与操作权限。
```

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-更改主题标题
+更改讨论标题
```

#### [`core.admin.permissions.start_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.permissions.start_discussions_label%22)

> Start discussions

```diff
-发布主题
+开始讨论
```

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-论坛用户分页列表
+您的论坛中所有用户的分页列表。
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
-操作提醒：检测到弃用扩展
+注意：发现了已弃用扩展
```

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-您输入的密码有误！
+您输入的密码不正确。
```

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-主题尚未发布，确定要丢弃吗？
+讨论尚未发布，确定要丢弃吗？
```

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-编辑成功
+您的编辑已生效。
```

#### [`core.forum.composer_edit.post_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.composer_edit.post_link%22)

> Post #{number} in {discussion}

```diff
-发布 #{number} 于 {discussion}
+发布于 {discussion} 的 #{number}
```

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-您没有权限回复这个帖子。
+您没有权限回复这篇讨论。
```

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-确定要永久删除这个帖子？
+确定要永久删除这个讨论？
```

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-主题下拉菜单开关
+讨论下拉菜单开关
```

#### [`core.forum.forgot_password.not_found_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.forgot_password.not_found_message%22)

> There is no user registered with that email address.

```diff
-此邮箱的注册用户不存在
+未找到使用该邮箱注册的用户。
```

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-返回主题列表
+返回讨论列表
```

#### [`core.forum.header.log_out_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.header.log_out_button%22)

> =&gt; core.ref.log\_out

```diff
-=> core.ref.log_out
+退出登录
```

#### [`core.forum.header.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.header.search_placeholder%22)

> Search Forum

```diff
-搜索
+搜索社区
```

#### [`core.forum.header.search_role_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.header.search_role_label%22)

> Search Forum

```diff
-搜索论坛
+搜索社区
```

#### [`core.forum.header.settings_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.header.settings_button%22)

> =&gt; core.ref.settings

```diff
-设置
+账号设置
```

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-确定要标记所有帖子为已读吗？
+确定要标记所有讨论为已读吗？
```

#### [`core.forum.index_sort.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.index_sort.toggle_dropdown_accessible_label%22)

> Change discussion list sorting

```diff
-更改「全部主题」排序
+更改「全部讨论」排序
```

#### [`core.forum.index_sort.top_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.index_sort.top_button%22)

> Top

```diff
-热门主题
+热门讨论
```

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} 于 {time} 更改标题为「{new}」
+{username} 于 {time} 将标题修改为 {new}。
```

{username} 于 {time} <del>更改标题为「{new}」</del><ins>将标题修改为 {new}。</ins>

#### [`core.forum.rename_discussion.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.rename_discussion.title%22)

> Rename Discussion

```diff
-更改主题标题
+更改讨论标题
```

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-我的主题标题被更改
+有人更改了我的讨论标题
```

#### [`core.forum.user.posts_empty_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.forum.user.posts_empty_text%22)

> It looks like there are no posts here.

```diff
-暂无内容
+这里似乎没有任何帖子。
```

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-抱歉，加载此内容时出错，请刷新页面重试。如果您是管理员，请查看论坛日志文件查看详情。
+抱歉，加载此内容时出错，请刷新页面重试。如果您是管理员，请查看 Flarum 的日志文件以获取更多信息。
```

#### [`core.ref.all_discussions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.ref.all_discussions%22)

> All Discussions

```diff
-全部主题
+全部讨论
```

#### [`core.ref.discussions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.ref.discussions%22)

> Discussions

```diff
-主题
+讨论
```

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-此操作无法撤销，确定要继续吗？
+确定要继续吗？此操作无法撤销。
```

#### [`core.ref.start_a_discussion`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.ref.start_a_discussion%22)

> Start a Discussion

```diff
-发布主题
+开始讨论
```

#### [`core.views.admin.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.views.admin.title%22)

> Administration

```diff
-开发者
+管理员
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
-该页面不支持该请求方法。
+此页面不支持该请求方法。
```

#### [`core.views.error.not_found_return_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.views.error.not_found_return_link%22)

> Return to {forum}

```diff
-返回 {forum}
+返回至 {forum}
```

<del>返回</del><ins>返回至</ins> {forum}

#### [`core.views.error.unknown`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.views.error.unknown%22)

> An error occurred while trying to load this page.

```diff
-加载页面时出错，请检查控制台。
+加载页面时出错，请检查日志。
```

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-确定要退出登录 {forum}?
+您确定要在 {forum} 上退出登录?
```


### `datitisev-backup`

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.bucket.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.bucket.label%22)

> Bucket

```diff
-桶
+存储桶 (Bucket)
```

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.endpoint.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.endpoint.label%22)

> Endpoint

```diff
-终端
+终端 (Endpoint)
```

终端<ins> (Endpoint)</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.path-prefix.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.path-prefix.description%22)

> Optional default path prefix for the files.

```diff
-可选的默认文件路径前缀。
+可选的文件默认路径前缀。
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.bucket.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.bucket.label%22)

> Bucket

```diff
-桶
+存储桶 (Bucket)
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.credentials-key.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.credentials-key.description%22)

> AWS credentials key

```diff
-AWS 凭据密钥
+AWS 凭据 Key
```

AWS <del>凭据密钥</del><ins>凭据 Key</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.aws.credentials-secret.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.credentials-secret.label%22)

> Secret

```diff
-私钥
+私钥 (Secret)
```

私钥<ins> (Secret)</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.aws.path-prefix.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.path-prefix.description%22)

> Optional default path prefix for the files.

```diff
-可选的默认文件路径前缀。
+可选的文件默认路径前缀。
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.region.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.region.description%22)

> Region of your bucket.

```diff
-存储桶的区域。
+存储桶所属区域。
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.version.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.version.description%22)

> Specify a version or leave blank for latest.

```diff
-指定一个版本或留空表示最新版本。
+指定版本或留空以使用最新版本。
```

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-success`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.help.obtain-refresh-token-success%22)

> Refresh token obtained successfully &amp; updated above! Save the changes to store it.

```diff
-刷新令牌获取成功，请保存。
+刷新令牌获取成功并已更新至上方！请保存更改以存储它。
```

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.description%22)

> Use the fields below to obtain the refresh token or manually follow the instructions at https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually.

```diff
-在下方获取刷新令牌，或根据指引手动生成：https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually
+使用下方的字段获取刷新令牌，或手动参考指引：https://www.codemzy.com/blog/dropbox-long-lived-access-refresh-token#how-can-i-get-a-refresh-token-manually。
```

#### [`datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.dropbox.refresh-token.label%22)

> Refresh Token

```diff
-刷新令牌
+刷新令牌 (Refresh Token)
```

刷新令牌<ins> (Refresh Token)</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.host.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.host.description%22)

> The hostname to connect to with FTP, eg: &lt;em&gt;ftp.yourdomain.local&lt;/em&gt;.

```diff
-要连接到的 FTP 主机名，例如 <em>ftp.yourdomain.local</em>。
+要连接的 FTP 主机名，例如：<em>ftp.yourdomain.local</em>。
```

<del>要连接到的</del><ins>要连接的</ins> FTP<del> 主机名，例如</del> <del>&lt;em&gt;ftp.yourdomain.local&lt;/em&gt;。</del><ins>主机名，例如：&lt;em&gt;ftp.yourdomain.local&lt;/em&gt;。</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.password.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.password.description%22)

> The user password to authenticate with on the FTP server.

```diff
-要在 FTP 服务器上进行身份验证的密码。
+用于 FTP 服务器身份验证的密码。
```

<del>要在</del><ins>用于</ins> FTP <del>服务器上进行身份验证的密码。</del><ins>服务器身份验证的密码。</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.port.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.port.description%22)

> The FTP port (defaults to 21).

```diff
-FTP 端口（默认 21）。
+FTP 端口（默认为 21）。
```

FTP <del>端口（默认</del><ins>端口（默认为</ins> 21）。

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.ssl.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.ssl.description%22)

> Whether to use an encrypted SSL connection to the server.

```diff
-是否使用加密 SSL 连接到服务器。
+是否使用加密的 SSL 连接到服务器。
```

<del>是否使用加密</del><ins>是否使用加密的</ins> SSL 连接到服务器。

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.timeout.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.timeout.description%22)

> The number of seconds to wait for a connection with the FTP server.

```diff
-等待与 FTP 服务器连接的秒数。
+等待 FTP 服务器连接的秒数。
```

<del>等待与</del><ins>等待</ins> FTP 服务器连接的秒数。

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.username.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.username.description%22)

> The username to authenticate with on the FTP server.

```diff
-要在 FTP 服务器上进行身份验证的用户名。
+用于 FTP 服务器身份验证的用户名。
```

<del>要在</del><ins>用于</ins> FTP <del>服务器上进行身份验证的用户名。</del><ins>服务器身份验证的用户名。</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.description%22)

> Follow the instructions @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md to create a Google project and retrieve your Client ID &amp; Client Secret.
>

```diff
-根据指引创建 Google Project 并获取 Client ID 和 Client Secret：https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md
+按照 https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md 的说明创建 Google 项目并获取 Client ID 和 Client Secret。

```

<del>根据指引创建</del><ins>按照</ins> <del>Google</del><ins>https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md</ins> <del>Project</del><ins>的说明创建</ins> <del>并获取</del><ins>Google 项目并获取</ins> Client ID 和 Client <del>Secret：https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md</del><ins>Secret。</ins><br />

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.folder.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.folder.label%22)

> Folder ID

```diff
-Folder ID
+文件夹 ID
```

<del>Folder</del><ins>文件夹</ins> ID

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.help.test_success_alert`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.help.test_success_alert%22)

> Successfully connected to Google Drive! Save the changes to store the settings.

```diff
-成功连接 Google Drive，请保存设置。
+成功连接到 Google Drive！请保存更改以存储设置。
```

<del>成功连接</del><ins>成功连接到</ins> Google <del>Drive，请保存设置。</del><ins>Drive！请保存更改以存储设置。</ins>

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.description%22)

> Follow the instructions @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md to retrieve the refresh token for your Google oAuth app.
>

```diff
-按照 @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md 的指引，取回您的 Google oAuth 应用程序刷新令牌。
+按照 https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md 的说明取回您的 Google oAuth 应用程序刷新令牌。

```

按照 <del>@ </del>https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md <del>的指引，取回您的</del><ins>的说明取回您的</ins> Google oAuth 应用程序刷新令牌。<br />

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.label%22)

> Refresh Token

```diff
-刷新令牌
+刷新令牌 (Refresh Token)
```

刷新令牌<ins> (Refresh Token)</ins>

#### [`datitisev-backup.admin.adapters.aliyun`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.adapters.aliyun%22)

> Alibaba Cloud (Aliyun)

```diff
-阿里云
+阿里云 (Aliyun)
```

阿里云<ins> (Aliyun)</ins>

#### [`datitisev-backup.admin.create_button`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.create_button%22)

> Add new adapter

```diff
-新建适配器
+添加新适配器
```

#### [`datitisev-backup.admin.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.delete_confirmation%22)

> Are you sure you want to delete "{name}" ({adapter})?

```diff
-确定要删除「{name}」（{adapter}）
+确定要删除“{name}”（{adapter}）吗？
```

#### [`datitisev-backup.admin.nav.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.nav.description%22)

> Store copies of your forum.

```diff
-存储您的论坛副本。
+存储论坛的副本。
```

#### [`datitisev-backup.admin.required-package-modal.content`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/zh_Hans/?q=context%3A%3D%22datitisev-backup.admin.required-package-modal.content%22)

> In order to use this driver you'll need to install a specific package. You can do so by running the following composer command: &lt;code&gt;composer require {package}&lt;/code&gt; in your Flarum installation directory.
>

```diff
-为了使用这个驱动程序，您需要安装一个特定的软件包。您可以通过 Flarum 安装目录下运行 <code>composer require {package}</code> 命令来安装。
+为了使用此驱动程序，您需要安装一个特定的软件包。您可以通过在 Flarum 安装目录下运行以下 composer 命令来安装：<code>composer require {package}</code>。

```

<del>为了使用这个驱动程序，您需要安装一个特定的软件包。您可以通过</del><ins>为了使用此驱动程序，您需要安装一个特定的软件包。您可以通过在</ins> Flarum <del>安装目录下运行</del><ins>安装目录下运行以下</ins> <del>&lt;code&gt;composer</del><ins>composer</ins> <del>require</del><ins>命令来安装：&lt;code&gt;composer</ins> <del>{package}&lt;/code&gt;</del><ins>require</ins> <del>命令来安装。</del><ins>{package}&lt;/code&gt;。</ins><br />


### `datlechin-birthdays`

#### [`datlechin-birthdays.forum.nav.nav_item`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/zh_Hans/?q=context%3A%3D%22datlechin-birthdays.forum.nav.nav_item%22)

> Today's Birthdays

```diff
-新的一岁！
+今天生日
```


### `datlechin-more-discussions`

#### [`datlechin-more-discussions.admin.settings.block_name_help`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/zh_Hans/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.block_name_help%22)

> The name of the block (default &lt;code&gt;Latest Discussions&lt;/code&gt;)

```diff
-主题列表的标题（默认 <code>最新主题</code>)）
+讨论列表的标题（默认 <code>最新讨论</code>)）
```

#### [`datlechin-more-discussions.admin.settings.discussion_limit_help`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/zh_Hans/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.discussion_limit_help%22)

> The number of discussions to display (default &lt;code&gt;5&lt;/code&gt;)

```diff
-列表主题帖数量（默认 <code>5</code>）
+列表讨论帖数量（默认 <code>5</code>）
```

<del>列表主题帖数量（默认</del><ins>列表讨论帖数量（默认</ins> &lt;code&gt;5&lt;/code&gt;）

#### [`datlechin-more-discussions.admin.settings.discussion_limit_label`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/zh_Hans/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.discussion_limit_label%22)

> Discussion limit

```diff
-主题数量上限
+讨论数量上限
```

#### [`datlechin-more-discussions.admin.settings.filter_dropdown.top`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/zh_Hans/?q=context%3A%3D%22datlechin-more-discussions.admin.settings.filter_dropdown.top%22)

> Top

```diff
-热门主题
+热门讨论
```

#### [`datlechin-more-discussions.forum.block_default_name`](https://weblate.rob006.net/translate/flarum2/datlechin-more-discussions/zh_Hans/?q=context%3A%3D%22datlechin-more-discussions.forum.block_default_name%22)

> Latest Discussions

```diff
-最新主题
+最新讨论
```


### `datlechin-tag-passwords`

#### [`datlechin-tag-passwords.admin.edit_tag.group_placeholder_label`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.edit_tag.group_placeholder_label%22)

> Group name

```diff
-用户组名称
+群组名称
```

#### [`datlechin-tag-passwords.admin.edit_tag.group_protected_label`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.edit_tag.group_protected_label%22)

> Group Permission

```diff
-用户组权限
+群组权限
```

#### [`datlechin-tag-passwords.admin.edit_tag.select_group`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.edit_tag.select_group%22)

> Select Permission Group

```diff
-选择用户组
+选择群组
```

#### [`datlechin-tag-passwords.admin.setting.discussion.avatar`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.discussion.avatar%22)

> Display the Poster User Profile for Protected Tag in Discussion List

```diff
-展示主题列表中受保护标签的发帖人资料卡片
+展示讨论列表中受保护标签的发帖人资料卡片
```

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_list`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_list%22)

> Display Protected Tag in Discussion List, with Protection Summary

```diff
-在主题列表显示受保护标签，并附带保护摘要
+在讨论列表显示受保护标签，并附带保护摘要
```

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_page`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_page%22)

> Display Protected Tag in Discussion, with URL Sharing

```diff
-在主题页显示受保护标签，并附带 URL 分享
+在讨论页显示受保护标签，并附带 URL 分享
```

<del>在主题页显示受保护标签，并附带</del><ins>在讨论页显示受保护标签，并附带</ins> URL 分享

#### [`datlechin-tag-passwords.admin.setting.heading.discussion`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.heading.discussion%22)

> Discussion List Display

```diff
-主题列表显示
+讨论列表显示
```

#### [`datlechin-tag-passwords.forum.discussion_list.info.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.group_protected%22)

> To be able to gain access to this discussion, you must have the correct role assigned to your account.

```diff
-要查看此主题帖，您必须具有对应权限。
+要查看此讨论帖，您必须具有对应权限。
```

#### [`datlechin-tag-passwords.forum.discussion_list.info.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.multiple%22)

> To be able to gain access to this discussion, you need to unlock all protected Tags.

```diff
-要查看此主题帖，请解锁所有保护标签。
+要查看此讨论帖，请解锁所有保护标签。
```

#### [`datlechin-tag-passwords.forum.discussion_list.title.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.title.group_protected%22)

> Discussion is Permission Group Protected

```diff
-此主题帖需要授权用户组解锁
+此讨论帖需要授权群组解锁
```

#### [`datlechin-tag-passwords.forum.discussion_list.title.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.title.multiple%22)

> Discussion is Protected

```diff
-此主题帖受保护
+此讨论帖受保护
```

#### [`datlechin-tag-passwords.forum.discussion_list.title.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.title.password_protected%22)

> Discussion is Password Protected

```diff
-此主题帖需要密码解锁
+此讨论帖需要密码解锁
```

#### [`datlechin-tag-passwords.forum.discussion_page.title.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_page.title.group_protected%22)

> Discussion is Permission Group Protected

```diff
-此主题需要授权用户组解锁
+此讨论需要授权群组解锁
```

#### [`datlechin-tag-passwords.forum.discussion_page.title.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_page.title.multiple%22)

> Discussion is Protected

```diff
-此主题帖受保护
+此讨论帖受保护
```

#### [`datlechin-tag-passwords.forum.discussion_page.title.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_page.title.password_protected%22)

> Discussion is Password Protected

```diff
-此主题需要密码解锁
+此讨论需要密码解锁
```

#### [`datlechin-tag-passwords.forum.post_list.title.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.post_list.title.group_protected%22)

> Post in Permission Group Required Discussion

```diff
-此帖需要授权用户组解锁
+此帖需要授权群组解锁
```

#### [`datlechin-tag-passwords.forum.tag_group_required.title`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.tag_group_required.title%22)

> Permission Group is required to view discussions in this tag

```diff
-仅限授权的用户组查看此标签中的主题内容
+仅限授权的群组查看此标签中的讨论内容
```

#### [`datlechin-tag-passwords.forum.tags_page.discussion.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.discussion.group_protected%22)

> Discussion requires Permission Group

```diff
-此主题帖需要授权用户组解锁
+此讨论帖需要授权群组解锁
```

#### [`datlechin-tag-passwords.forum.tags_page.discussion.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.discussion.multiple%22)

> Discussion requires all Permission

```diff
-此主题帖受多重保护
+此讨论帖受多重保护
```

#### [`datlechin-tag-passwords.forum.tags_page.discussion.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.discussion.password_protected%22)

> Discussion is Password Protected

```diff
-此主题帖需要密码解锁
+此讨论帖需要密码解锁
```

#### [`datlechin-tag-passwords.forum.tags_page.group_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/zh_Hans/?q=context%3A%3D%22datlechin-tag-passwords.forum.tags_page.group_protected%22)

> Permission Group Required

```diff
-需要授权的用户组
+需要授权的群组
```


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/zh_Hans/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-API Key
+API 密钥
```

API <del>Key</del><ins>密钥</ins>


### `flarum-approval`

#### [`flarum-approval.admin.permissions.approve_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-approval/zh_Hans/?q=context%3A%3D%22flarum-approval.admin.permissions.approve_posts_label%22)

> Approve posts

```diff
-审核主题
+审核帖子
```

#### [`flarum-approval.admin.permissions.reply_without_approval_label`](https://weblate.rob006.net/translate/flarum2/flarum-approval/zh_Hans/?q=context%3A%3D%22flarum-approval.admin.permissions.reply_without_approval_label%22)

> Reply to discussions without approval

```diff
-回复无需审核
+无需审核回复
```

#### [`flarum-approval.admin.permissions.start_discussions_without_approval_label`](https://weblate.rob006.net/translate/flarum2/flarum-approval/zh_Hans/?q=context%3A%3D%22flarum-approval.admin.permissions.start_discussions_without_approval_label%22)

> Start discussions without approval

```diff
-发布主题无需审核
+无需审核讨论
```


### `flarum-bbcode`

#### [`flarum-bbcode.forum.quote.wrote`](https://weblate.rob006.net/translate/flarum2/flarum-bbcode/zh_Hans/?q=context%3A%3D%22flarum-bbcode.forum.quote.wrote%22)

> wrote

```diff
-：
+说
```


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/zh_Hans/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
-确定要删除此仓库，以及从此来源安装的扩展程序吗？
+确定要删除此仓库？以及从此来源安装的扩展程序吗。
```

#### [`flarum-extension-manager.admin.composer.repositories.types.path`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/zh_Hans/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.path%22)

> path

```diff
-path
+路径
```

#### [`flarum-extension-manager.admin.extensions.check_why_it_failed_updating`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/zh_Hans/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.check_why_it_failed_updating%22)

> Show why it did not update to the latest.

```diff
-为什么无法更新到最新版本？
+查看为什么无法更新到最新版本。
```

#### [`flarum-extension-manager.admin.file_permissions`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/zh_Hans/?q=context%3A%3D%22flarum-extension-manager.admin.file_permissions%22)

> The extension manager requires read and write permissions on the following files and directories: composer.json, composer.lock, vendor, storage, storage/.composer
>

```diff
-扩展程序管理器需要以下文件和目录的读写权限：composer.json、composer.lock、vendor、storage、storage/.composer
+扩展程序管理器需要以下文件和目录的读写权限：composer.json，composer.lock，vendor，storage，storage/.composer

```


### `flarum-flags`

#### [`flarum-flags.forum.flag_post.reason_off_topic_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/zh_Hans/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_off_topic_text%22)

> This post is not relevant to the current discussion and should be moved elsewhere.

```diff
-此帖与当前的主题无关，应当移动到其他地方。
+此帖与当前的讨论无关，应当移动到其他地方。
```


### `flarum-gdpr`

#### [`flarum-gdpr.admin.gdpr_page.data_types.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.anonymize_description%22)

> Anonymize Action

```diff
-匿名化操作
+匿名操作
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.extension`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.extension%22)

> Extension

```diff
-扩展程序
+扩展
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.help_text%22)

> On the most part, any columns added to the &lt;code&gt;user&lt;/code&gt; table will be handled automatically, both for exporting data and for erasure.
> However, there are some special cases, which are listed below.
>

```diff
-多数情况下，我们会自动处理导出和抹除时的 <code>用户</code>表数据。
+多数情况下，我们会自动处理导出和抹除时的 <code>user</code> 表数据。
 然而，会存在一些特殊情况，如下。

```

多数情况下，我们会自动处理导出和抹除时的 <del>&lt;code&gt;用户&lt;/code&gt;表数据。</del><ins>&lt;code&gt;user&lt;/code&gt; 表数据。</ins><br />然而，会存在一些特殊情况，如下。<br />

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii%22)

> PII

```diff
-个人身份信息
+个人可识别信息 (PII)
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip%22)

> This column is considered personally identifiable information and will be redacted in anonymized contexts (e.g. anonymized event payloads).

```diff
-该列被视为个人身份信息，在匿名化场景（例如匿名化事件载荷）中将被隐藏。
+此列被视为个人可识别信息，并将在匿名上下文（例如匿名的事件负载）中进行脱敏处理。
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export%22)

> Redacted on export

```diff
-导出时隐藏
+导出时屏蔽
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip%22)

> This column's value is blanked (set to null) when generating a user data export. The column still appears in the export with a null value.

```diff
-生成用户数据导出时，该列的值会被清空（设为 null）。该列仍会出现在导出文件中，但值为 null。
+生成用户数据导出时，此列的值将被置空（设置为 null）。该列仍会以 null 值的形式出现在导出文件中。
```

#### [`flarum-gdpr.lib.data.default_user_action`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.default_user_action%22)

> No action, handled by default user table data handling.

```diff
-无需操作，由默认的用户表数据处理方式自动处理。
+无操作，由默认用户表数据处理。
```

#### [`flarum-gdpr.lib.data.discussions.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.discussions.export_description%22)

> Exports all discussions the user has started. Data restricted to title and creation date.

```diff
-导出用户发起的所有主题帖，数据仅限于标题和创建日期。
+导出用户发起的所有讨论帖，数据仅限于标题和创建日期。
```

#### [`flarum-gdpr.lib.data.posts.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.export_description%22)

> Exports all posts the user has made. Data restricted to content, creation date, IP address and discussion ID.

```diff
-导出用户发表的所有帖子，数据仅限于文本内容、创建日期、IP 地址和主题帖 ID。
+导出用户发表的所有帖子，数据仅限于文本内容、创建日期、IP 地址和讨论帖 ID。
```

导出用户发表的所有帖子，数据仅限于文本内容、创建日期、IP <del>地址和主题帖</del><ins>地址和讨论帖</ins> ID。


### `flarum-likes`

#### [`flarum-likes.forum.post.like_link`](https://weblate.rob006.net/translate/flarum2/flarum-likes/zh_Hans/?q=context%3A%3D%22flarum-likes.forum.post.like_link%22)

> Like

```diff
-赞
+点赞
```

#### [`flarum-likes.forum.post.liked_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/zh_Hans/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_self_text%22)

> {users} like this.

```diff
-{users} 觉得很赞
+{users} 觉得很赞。
```

{users} <del>觉得很赞</del><ins>觉得很赞。</ins>

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/zh_Hans/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{users} 觉得很赞
+{count, plural, other {{users} 觉得很赞}}。
```


### `flarum-lock`

#### [`flarum-lock.admin.permissions.lock_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/zh_Hans/?q=context%3A%3D%22flarum-lock.admin.permissions.lock_discussions_label%22)

> Lock discussions

```diff
-锁定主题
+锁定讨论
```

#### [`flarum-lock.forum.discussion_controls.lock_button`](https://weblate.rob006.net/translate/flarum2/flarum-lock/zh_Hans/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.lock_button%22)

> Lock

```diff
-锁定主题
+锁定
```

#### [`flarum-lock.forum.discussion_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/flarum-lock/zh_Hans/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.unlock_button%22)

> Unlock

```diff
-解锁主题
+解锁
```

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/zh_Hans/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-{username} 于 {time} 锁定此帖
+{username} 于 {time} 锁定此帖。
```

{username} 于 {time} <del>锁定此帖</del><ins>锁定此帖。</ins>

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/zh_Hans/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} 于 {time} 解锁此帖
+{username} 于 {time} 解锁此帖。
```

{username} 于 {time} <del>解锁此帖</del><ins>解锁此帖。</ins>

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/zh_Hans/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-我的主题帖被锁定
+有人锁定了我发起的讨论
```


### `flarum-markdown`

#### [`flarum-markdown.lib.composer.bold_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.bold_tooltip%22)

> Add bold text

```diff
-加粗文本
+添加加粗文本
```

#### [`flarum-markdown.lib.composer.code_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.code_tooltip%22)

> Insert code

```diff
-行内代码
+添加行内代码
```

#### [`flarum-markdown.lib.composer.header_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.header_tooltip%22)

> Add header text

```diff
-标题文本
+添加标题文本
```

#### [`flarum-markdown.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.image_tooltip%22)

> Add an image

```diff
-图片
+添加图片
```

#### [`flarum-markdown.lib.composer.italic_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.italic_tooltip%22)

> Add italic text

```diff
-斜体
+添加斜体
```

#### [`flarum-markdown.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.link_tooltip%22)

> Add a link

```diff
-链接
+添加链接
```

#### [`flarum-markdown.lib.composer.ordered_list_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.ordered_list_tooltip%22)

> Add a numbered list

```diff
-有序列表
+添加有序列表
```

#### [`flarum-markdown.lib.composer.quote_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.quote_tooltip%22)

> Insert a quote

```diff
-引用
+插入引用
```

#### [`flarum-markdown.lib.composer.spoiler_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.spoiler_tooltip%22)

> Insert a spoiler

```diff
-黑幕
+插入剧透
```

#### [`flarum-markdown.lib.composer.strikethrough_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.strikethrough_tooltip%22)

> Add strikethrough text

```diff
-删除线
+添加删除线
```

#### [`flarum-markdown.lib.composer.unordered_list_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/zh_Hans/?q=context%3A%3D%22flarum-markdown.lib.composer.unordered_list_tooltip%22)

> Add a bulleted list

```diff
-无序列表
+添加无序列表
```


### `flarum-mentions`

#### [`flarum-mentions.admin.permissions.mention_groups_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.admin.permissions.mention_groups_label%22)

> Mention groups

```diff
-提及组群
+提及群组
```

#### [`flarum-mentions.admin.settings.allow_username_format_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_label%22)

> Allow username mention format (@Username)

```diff
-允许@用户名
+允许 @用户名
```

#### [`flarum-mentions.email.group_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.subject%22)

> {mentioner\_display\_name} mentioned a group you're a member of in {title}

```diff
-{mentioner_display_name} 在 {title} 中提到了您所属的组群
+{mentioner_display_name} 在 {title} 中提到了您所属的群组
```

{mentioner\_display\_name} 在 {title} <del>中提到了您所属的组群</del><ins>中提到了您所属的群组</ins>

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} 回复了您【{title}】
+{replier_display_name} 在讨论「{title}」中回复了您
```

{replier\_display\_name} <del>回复了您【{title}】</del><ins>在讨论「{title}」中回复了您</ins>

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mentioner_display_name} 提及了您【{title}】
+{mentioner_display_name} 在 「{title}」中提及了您
```

{mentioner\_display\_name} <del>提及了您【{title}】</del><ins>在 「{title}」中提及了您</ins>

#### [`flarum-mentions.forum.composer.mention_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.composer.mention_tooltip%22)

> Mention a user, group or post

```diff
-提及用户、组或楼层
+提及用户、群组或帖子
```

#### [`flarum-mentions.forum.group_mention.deleted_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.group_mention.deleted_text%22)

> \[unknown group\]

```diff
-[未知组群]
+[未知群组]
```

#### [`flarum-mentions.forum.mentioned_by.title`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.mentioned_by.title%22)

> Replies to this post

```diff
-所有回复
+对此帖的回复
```

#### [`flarum-mentions.forum.notifications.group_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.notifications.group_mentioned_text%22)

> {username} mentioned a group you're a member of

```diff
-{username} 提到了您所属的组群
+{username} 提到了您所属的群组
```

{username} <del>提到了您所属的组群</del><ins>提到了您所属的群组</ins>

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
-{username} 回复了您
+{username} 回复了您的帖子
```

{username} <del>回复了您</del><ins>回复了您的帖子</ins>

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{users} 回复了此帖
+{users} 回复了您的帖子
```

{users} <del>回复了此帖</del><ins>回复了您的帖子</ins>

#### [`flarum-mentions.forum.settings.notify_group_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_group_mentioned_label%22)

> Someone mentions a group I'm a member of in a post

```diff
-有人在帖子中提到了我在的组群
+有人在帖子中提到了我在的群组
```

#### [`flarum-mentions.forum.settings.notify_post_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_post_mentioned_label%22)

> Someone replies to one of my posts

```diff
-有人回复了我
+有人回复了我的帖子
```

#### [`flarum-mentions.forum.settings.notify_user_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_user_mentioned_label%22)

> Someone mentions me in a post

```diff
-有人提到了我
+有人提到了我的帖子
```

#### [`flarum-mentions.forum.user.mentions_link`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/zh_Hans/?q=context%3A%3D%22flarum-mentions.forum.user.mentions_link%22)

> Mentions

```diff
-被提及
+提及
```


### `flarum-nicknames`

#### [`flarum-nicknames.admin.settings.regex_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/zh_Hans/?q=context%3A%3D%22flarum-nicknames.admin.settings.regex_label%22)

> Regular expression for validation

```diff
-验证用正则表达式
+验证使用的正则表达式
```


### `flarum-pusher`

#### [`flarum-pusher.admin.pusher_settings.app_cluster_label`](https://weblate.rob006.net/translate/flarum2/flarum-pusher/zh_Hans/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_cluster_label%22)

> Cluster

```diff
-Cluster 集群
+Cluster
```

Cluster<del> 集群</del>


### `flarum-statistics`

#### [`flarum-statistics.admin.statistics.previous_28_days_label`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/zh_Hans/?q=context%3A%3D%22flarum-statistics.admin.statistics.previous_28_days_label%22)

> Previous 28 days

```diff
-更早二十八天
+过去二十八天
```

#### [`flarum-statistics.admin.statistics.previous_7_days_label`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/zh_Hans/?q=context%3A%3D%22flarum-statistics.admin.statistics.previous_7_days_label%22)

> Previous 7 days

```diff
-更早一周
+过去一周
```


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/zh_Hans/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-置顶主题
+置顶讨论
```

#### [`flarum-sticky.forum.badge.sticky_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/zh_Hans/?q=context%3A%3D%22flarum-sticky.forum.badge.sticky_tooltip%22)

> =&gt; flarum-sticky.ref.sticky

```diff
-=> flarum-sticky.ref.sticky
+置顶
```

#### [`flarum-sticky.forum.discussion_controls.sticky_button`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/zh_Hans/?q=context%3A%3D%22flarum-sticky.forum.discussion_controls.sticky_button%22)

> =&gt; flarum-sticky.ref.sticky

```diff
-置顶主题
+=> flarum-sticky.ref.sticky
```

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/zh_Hans/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-{username} 于 {time} 置顶此帖
+{username} 于 {time} 置顶此帖。
```

{username} 于 {time} <del>置顶此帖</del><ins>置顶此帖。</ins>

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/zh_Hans/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} 于 {time} 取消置顶
+{username} 于 {time} 取消置顶本帖。
```

{username} 于 {time} <del>取消置顶</del><ins>取消置顶本帖。</ins>


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.badge.following_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.badge.following_tooltip%22)

> =&gt; flarum-subscriptions.ref.following

```diff
-=> flarum-subscriptions.ref.following
+正在关注
```

#### [`flarum-subscriptions.forum.badge.ignoring_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.badge.ignoring_tooltip%22)

> =&gt; flarum-subscriptions.ref.ignoring

```diff
-=> flarum-subscriptions.ref.ignoring
+已忽略
```

#### [`flarum-subscriptions.forum.discussion_controls.follow_button`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.discussion_controls.follow_button%22)

> =&gt; flarum-subscriptions.ref.follow

```diff
-=> flarum-subscriptions.ref.follow
+关注
```

#### [`flarum-subscriptions.forum.discussion_controls.unignore_button`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.discussion_controls.unignore_button%22)

> Unignore

```diff
-取消忽视
+取消忽略
```

#### [`flarum-subscriptions.forum.following.meta_title_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.following.meta_title_text%22)

> =&gt; flarum-subscriptions.ref.following

```diff
-=> flarum-subscriptions.ref.following
+正在关注
```

#### [`flarum-subscriptions.forum.notifications.new_post_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.notifications.new_post_text%22)

> {username} posted

```diff
-{username} 回复了你关注的主题
+{username} 发布了新帖
```

{username} <del>回复了你关注的主题</del><ins>发布了新帖</ins>

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-自动关注我回复的主题
+自动关注我回复的讨论
```

#### [`flarum-subscriptions.forum.settings.notify_for_all_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_for_all_posts_label%22)

> Notify about every new post instead of only the last in a discussion

```diff
-通知每一个新帖，而非仅最后一个
+通知所有新帖，而非仅通知讨论的最后一条
```

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-我关注的主题有新回复
+有人在我关注的讨论中回复
```

#### [`flarum-subscriptions.forum.sub_controls.follow_button`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.follow_button%22)

> =&gt; flarum-subscriptions.ref.follow

```diff
-=> flarum-subscriptions.ref.follow
+关注
```

#### [`flarum-subscriptions.forum.sub_controls.following_button`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.following_button%22)

> =&gt; flarum-subscriptions.ref.following

```diff
-=> flarum-subscriptions.ref.following
+关注中
```

#### [`flarum-subscriptions.forum.sub_controls.following_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.following_text%22)

> Be notified of all replies.

```diff
-当有人回复此主题时通知我。
+当有人回复此讨论时通知我。
```

#### [`flarum-subscriptions.forum.sub_controls.ignoring_button`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_button%22)

> =&gt; flarum-subscriptions.ref.ignoring

```diff
-=> flarum-subscriptions.ref.ignoring
+忽略
```

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-不接收任何通知并从主题列表中隐藏此主题。
+不接收任何通知并从讨论列表中隐藏此讨论。
```

#### [`flarum-subscriptions.forum.sub_controls.notify_email_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.notify_email_tooltip%22)

> Get an email when there are new posts

```diff
-有新回复时发送邮件
+有新回复时邮件提醒
```

#### [`flarum-subscriptions.ref.ignoring`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/zh_Hans/?q=context%3A%3D%22flarum-subscriptions.ref.ignoring%22)

> Ignoring

```diff
-忽视中
+忽略中
```


### `flarum-suspend`

#### [`flarum-suspend.email.no_reason_given`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.email.no_reason_given%22)

> No reason was given for this suspension.

```diff
-管理员并未给出封禁原因。
+未说明封禁原因。
```

#### [`flarum-suspend.email.unsuspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.email.unsuspended.subject%22)

> Your account has been unsuspended

```diff
-你的账号已解封
+您的账号已解除封禁
```

#### [`flarum-suspend.forum.notifications.user_suspended_indefinite_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_indefinite_text%22)

> You have been suspended indefinitely

```diff
-你已被永久封禁
+你已被无限期封禁
```

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
-你已解封
+你已被解除封禁
```

#### [`flarum-suspend.forum.suspend_user.display_message`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.display_message%22)

> Display message for user

```diff
-封禁原因（用户联）
+向用户显示说明
```

#### [`flarum-suspend.forum.suspend_user.indefinitely_label`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.indefinitely_label%22)

> Suspended indefinitely

```diff
-永久封禁
+无限期封禁
```

#### [`flarum-suspend.forum.suspend_user.limited_time_label`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.limited_time_label%22)

> Suspended for a limited time...

```diff
-自定义封禁时间
+临时封禁……
```

#### [`flarum-suspend.forum.suspend_user.not_suspended_label`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.not_suspended_label%22)

> Not suspended

```diff
-不封禁
+解除封禁
```

#### [`flarum-suspend.forum.suspension_info.dismiss_button`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.dismiss_button%22)

> Dismiss

```diff
-我知道了
+关闭
```

#### [`flarum-suspend.forum.suspension_info.indefinite`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.indefinite%22)

> This is an indefinite suspension

```diff
-封禁期限：永久
+此账号已被无限期封禁
```

#### [`flarum-suspend.forum.suspension_info.limited`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.suspension_info.limited%22)

> This suspension will be in force until {date}

```diff
-封禁期至 {date}
+此次封禁将持续至 {date}
```

<del>封禁期至</del><ins>此次封禁将持续至</ins> {date}

#### [`flarum-suspend.forum.user_controls.suspend_button`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/zh_Hans/?q=context%3A%3D%22flarum-suspend.forum.user_controls.suspend_button%22)

> Suspend

```diff
-封禁
+封禁用户
```


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-确定要删除此标签？此操作不会删除标签下的主题帖。
+确定要删除此标签吗？此标签下的讨论将不会被删除。
```

#### [`flarum-tags.admin.edit_tag.hide_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.edit_tag.hide_label%22)

> Hide from All Discussions

```diff
-从“全部主题”中隐藏
+在「全部讨论」中隐藏该标签下的讨论
```

#### [`flarum-tags.admin.edit_tag.slug_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.edit_tag.slug_label%22)

> Slug

```diff
-英文名称（Slug）
+Slug
```

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
-新建标签
+创建标签
```

#### [`flarum-tags.admin.nav.tags_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.nav.tags_button%22)

> =&gt; flarum-tags.ref.tags

```diff
-节点标签
+=> flarum-tags.ref.tags
```

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-管理论坛标签列表。
+管理用于组织讨论的标签列表。
```

#### [`flarum-tags.admin.permissions.bypass_tag_counts_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.permissions.bypass_tag_counts_label%22)

> Bypass tag requirements

```diff
-不受标签数量限制
+绕过标签数量限制
```

#### [`flarum-tags.admin.permissions.restrict_by_tag_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.permissions.restrict_by_tag_heading%22)

> Restrict by Tag

```diff
-按标签分类
+按标签限制
```

#### [`flarum-tags.admin.permissions.tag_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.permissions.tag_discussions_label%22)

> Tag discussions

```diff
-更改标签
+为讨论添加标签
```

#### [`flarum-tags.admin.tag_settings.required_primary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_heading%22)

> Required Number of Primary Tags

```diff
-主标签数量限制
+主标签数量要求
```

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-设置每个主题帖需添加的主标签数量。
+设置讨论可添加的主标签数量范围。
```

#### [`flarum-tags.admin.tag_settings.required_secondary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_heading%22)

> Required Number of Secondary Tags

```diff
-次标签数量限制
+副标签数量要求
```

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-设置每个主题帖需添加的次标签数量。
+设置讨论可添加的副标签数量范围。
```

#### [`flarum-tags.admin.tags.about_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tags.about_tags_text%22)

> Tags are used to categorize discussions. Primary tags are like traditional forum categories: they can be arranged in a two-level hierarchy. Secondary tags do not have hierarchy or order, and are useful for micro-categorization.

```diff
-使用标签对主题帖分类。主标签类似于传统论坛的板块，可以分成两级。次标签无层级无顺序，可作为次板块。鼠标拖动标签即可排序或调整层级位置。
+标签用于对讨论进行分类。主标签类似于传统论坛的板块：它们可以按两级层级排列。副标签没有层级或顺序，适用于更细粒度的分类。
```

#### [`flarum-tags.admin.tags.create_primary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tags.create_primary_tag_button%22)

> Create Primary Tag

```diff
-新建主标签
+创建主标签
```

#### [`flarum-tags.admin.tags.create_secondary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tags.create_secondary_tag_button%22)

> Create Secondary Tag

```diff
-新建次标签
+创建副标签
```

#### [`flarum-tags.admin.tags.secondary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.admin.tags.secondary_heading%22)

> Secondary Tags

```diff
-次标签
+副标签
```

#### [`flarum-tags.forum.all_tags.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.all_tags.meta_description_text%22)

> All Tags

```diff
-全部标签
+所有标签
```

#### [`flarum-tags.forum.choose_tags.edit_title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.choose_tags.edit_title%22)

> Edit Tags for {title}

```diff
-更改「{title}」的节点标签
+编辑 {title} 的标签
```

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-添加标签
+为您的讨论选择标签
```

#### [`flarum-tags.forum.index.more_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.index.more_link%22)

> More...

```diff
-更多标签...
+更多…
```

#### [`flarum-tags.forum.index.untagged_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.index.untagged_link%22)

> Untagged

```diff
-移除标签
+未分类
```

#### [`flarum-tags.forum.post_stream.added_and_removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_and_removed_tags_text%22)

> {username} added the {tagsAdded} and removed the {tagsRemoved} {time}.

```diff
-{username} 于 {time} 添加 {tagsAdded}，并移除 {tagsRemoved}。
+{username} 于 {time} 添加了 {tagsAdded}，并移除了 {tagsRemoved}。
```

{username} 于 {time} <del>添加</del><ins>添加了</ins> <del>{tagsAdded}，并移除</del><ins>{tagsAdded}，并移除了</ins> {tagsRemoved}。

#### [`flarum-tags.forum.post_stream.added_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_tags_text%22)

> {username} added the {tagsAdded} {time}.

```diff
-{username} 于 {time} 添加 {tagsAdded}
+{username} 于 {time} 添加了 {tagsAdded}。
```

{username} 于 {time} <del>添加</del><ins>添加了</ins> <del>{tagsAdded}</del><ins>{tagsAdded}。</ins>

#### [`flarum-tags.forum.post_stream.removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.post_stream.removed_tags_text%22)

> {username} removed the {tagsRemoved} {time}.

```diff
-{username} 于 {time} 移除 {tagsRemoved}
+{username} 于 {time} 移除了 {tagsRemoved}。
```

{username} 于 {time} <del>移除</del><ins>移除了</ins> <del>{tagsRemoved}</del><ins>{tagsRemoved}。</ins>

#### [`flarum-tags.forum.post_stream.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.post_stream.tags_text%22)

> {count, plural, one {{tags} tag} other {{tags} tags}}

```diff
-{tags} 标签
+{count, plural, one {{tags} 个标签} other {{tags} 个标签}}
```

#### [`flarum-tags.forum.tag.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.forum.tag.meta_description_text%22)

> All discussions with the {tag} tag

```diff
-{tag} 标签下的所有主题
+所有带有 {tag} 的讨论
```

<ins>所有带有 </ins>{tag} <del>标签下的所有主题</del><ins>的讨论</ins>

#### [`flarum-tags.lib.tag_selection_modal.bypass_requirements`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.bypass_requirements%22)

> Bypass tag requirements

```diff
-忽略标签选择
+绕过标签数量限制
```

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
-{count, plural, one {请选择一个主标签} other {请选择 # 个主标签}}
+{count, plural, one {选择 1 个主标签} other {选择 # 个主标签}}
```

{count, plural, one <del>{请选择一个主标签}</del><ins>{选择 1 个主标签}</ins> other <del>{请选择</del><ins>{选择</ins> # 个主标签}}

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
-{count, plural, one {请再选择一个标签} other {请再选择 # 个标签}}
+{count, plural, one {再选择 1 个标签} other {再选择 # 个标签}}
```

{count, plural, one <del>{请再选择一个标签}</del><ins>{再选择 1 个标签}</ins> other <del>{请再选择</del><ins>{再选择</ins> # 个标签}}

#### [`flarum-tags.ref.name`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hans/?q=context%3A%3D%22flarum-tags.ref.name%22)

> Name

```diff
-标签名称
+名称
```


### `flectar-turnstile`

#### [`flectar-turnstile.admin.settings.secret_key`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/zh_Hans/?q=context%3A%3D%22flectar-turnstile.admin.settings.secret_key%22)

> Secret key

```diff
-私钥
+密钥
```

#### [`flectar-turnstile.admin.settings.site_key`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/zh_Hans/?q=context%3A%3D%22flectar-turnstile.admin.settings.site_key%22)

> Site key

```diff
-站点公钥
+站点key
```


### `fof-analytics`

#### [`fof-analytics.admin.popup.field.piwikAuthToken`](https://weblate.rob006.net/translate/flarum2/fof-analytics/zh_Hans/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikAuthToken%22)

> Authentication Token

```diff
-验证 Token
+验证 Toekn
```

验证 <del>Token</del><ins>Toekn</ins>

#### [`fof-analytics.admin.popup.field.piwikHideAliasUrl`](https://weblate.rob006.net/translate/flarum2/fof-analytics/zh_Hans/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikHideAliasUrl%22)

> In the "Outlinks" report, hide clicks to known alias URLs

```diff
-在「导出链」报表中隐藏已知别名链接的点击（什么是导出链：http://t.cn/A6PlyGj6）
+在“出站链接”报告中，隐藏指向已知别名 URL 的点击
```

#### [`fof-analytics.admin.popup.field.statusGoogle`](https://weblate.rob006.net/translate/flarum2/fof-analytics/zh_Hans/?q=context%3A%3D%22fof-analytics.admin.popup.field.statusGoogle%22)

> Enable Google Analytics (UA/GA4)

```diff
-启用 Google 分析 (UA/GA4)
+启用 Google Analytics (UA/GA4)
```

启用 Google <del>分析</del><ins>Analytics</ins> (UA/GA4)

#### [`fof-analytics.admin.popup.section.googleAnalytics`](https://weblate.rob006.net/translate/flarum2/fof-analytics/zh_Hans/?q=context%3A%3D%22fof-analytics.admin.popup.section.googleAnalytics%22)

> Google Analytics

```diff
-Google 分析
+Google Analytics
```

Google <del>分析</del><ins>Analytics</ins>


### `fof-anti-spam`

#### [`fof-anti-spam.admin.blocked_registrations.attempted-at`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.attempted-at%22)

> Attempted at

```diff
-尝试在
+尝试时间
```

#### [`fof-anti-spam.admin.blocked_registrations.button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.button%22)

> Blocked Registrations

```diff
-拦截记录
+已拦截的注册
```

#### [`fof-anti-spam.admin.blocked_registrations.email`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.email%22)

> Email Address

```diff
-邮箱
+电子邮箱地址
```

#### [`fof-anti-spam.admin.blocked_registrations.help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.help%22)

> This page shows all registrations that have been blocked by the StopForumSpam service. You can view the details of each registration, and if you wish, you can delete the record from the database.
>

```diff
-本页显示所有被 StopForumSpam 服务拦截的注册信息，您可以查看详情或删除记录。
+此页面显示了所有被 StopForumSpam 服务拦截的注册。您可以查看每项注册的详情，如果需要，您也可以从数据库中删除该记录。

```

<del>本页显示所有被</del><ins>此页面显示了所有被</ins> StopForumSpam <del>服务拦截的注册信息，您可以查看详情或删除记录。</del><ins>服务拦截的注册。您可以查看每项注册的详情，如果需要，您也可以从数据库中删除该记录。</ins><br />

#### [`fof-anti-spam.admin.blocked_registrations.login-provider`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.login-provider%22)

> Login Provider

```diff
-登录提供程序
+登录提供商
```

#### [`fof-anti-spam.admin.blocked_registrations.login-provider-data`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.login-provider-data%22)

> Login Provider Data

```diff
-登录提供程序数据
+登录提供商数据
```

#### [`fof-anti-spam.admin.blocked_registrations.no-records`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.no-records%22)

> No blocked registrations found.

```diff
-暂无拦截记录。
+未发现已拦截的注册。
```

#### [`fof-anti-spam.admin.blocked_registrations.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.title%22)

> Blocked Registrations

```diff
-拦截记录
+已拦截的注册
```

#### [`fof-anti-spam.admin.permissions.spamblock_users_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.permissions.spamblock_users_label%22)

> Mark user as spammer

```diff
-标记垃圾账号
+将用户标记为垃圾信息发送者
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be soft deleted instead.

```diff
-启用此项，永久删除主题帖，否则隐藏主题帖。
+这将永久删除该用户发起的所有讨论。禁用后，讨论将改为软删除。
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_label%22)

> Delete discussions

```diff
-删除主题帖
+删除讨论
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_posts_help%22)

> This will permanently delete all posts made by this user. When disabled, posts will be soft deleted instead.

```diff
-启用此项，永久删除帖子，否则隐藏帖子。
+这将永久删除该用户发表的所有帖子。禁用后，帖子将改为软删除。
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_user_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_user_help%22)

> This will permanently delete the user. When disabled, the user will be suspended instead.

```diff
-启用此项，永久删除账号，否则停用帐号。
+这将永久删除该用户。禁用后，该用户将改为被封禁。
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_user_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_user_label%22)

> Delete user

```diff
-删除账号
+删除用户
```

#### [`fof-anti-spam.admin.settings.default-actions.heading`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.heading%22)

> Default moderation actions

```diff
-默认操作
+默认审核操作
```

#### [`fof-anti-spam.admin.settings.default-actions.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.introduction%22)

> When a user is marked as a spammer, moderators are able to choose from various actions on how to deal with the particular use case. These settings allow you to pre-set the actions you'll normally take, to speed up the process, but also allowing for variations as needed.

```diff
-当用户被标记为垃圾邮件发送者时，版主可以从各种操作中选择如何处理特定用例。这些设置允许您预设通常会采取的操作，以加快过程，但也允许根据需要进行更改。
+当用户被标记为垃圾信息发送者时，版主可以从多种操作中选择处理方式。这些设置允许您预设常用操作以加快处理过程，同时也允许根据需要进行调整。
```

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help%22)

> This will move all discussions started by this user to the tag(s) you specified. Clear the tag selection to leave discussions in their original tag(s). Has no effect if the 'Delete discussions' option is enabled.

```diff
-移除帖子的所有标签，并统一移动到指定标签旗下，「删除主题贴」禁用时生效。如需保留原始标签，请清空下方标签配置。
+这将把该用户发起的所有讨论移动到您指定的标签。清除标签选择可使讨论保留在原始标签中。如果启用了“删除讨论”选项，则此项无效。
```

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label%22)

> Move discussions to tag(s)

```diff
-归档标签
+将讨论移动到标签
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_instructions_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_instructions_text%22)

> &lt;register&gt;Sign up for StopForumSpam&lt;/register&gt;. Then you will need to &lt;key&gt;obtain an API key&lt;/key&gt;.

```diff
-<register>注册 StopForumSpam</register>，并<key>获取 API 密钥</key>。
+<register>注册 StopForumSpam 账号</register>。然后您需要<key>获取 API 密钥</key>。
```

&lt;register&gt;注册 <del>StopForumSpam&lt;/register&gt;，并&lt;key&gt;获取</del><ins>StopForumSpam 账号&lt;/register&gt;。然后您需要&lt;key&gt;获取</ins> API 密钥&lt;/key&gt;。

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_text%22)

> You have the option to report spammers to StopForumSpam in order to keep the greater forum community spam free.

```diff
-向 StopForumSpam 共享垃圾账号信息，改善检测服务。
+您可以选择将垃圾信息发送者报告给 StopForumSpam，以保持整个论坛社区免受垃圾信息干扰。
```

#### [`fof-anti-spam.admin.settings.stopforumspam.confidence_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.confidence_help%22)

> The confidence score is a reasonably good indicator that the field under test would result in unwanted activity. Set your confidence level as a percentage. If the field is equal or above this figure, the registration will be blocked, regardless on the 'frequency' test above.

```diff
-百分比等级，根据检测数据生成。等于或高于这个数字时，禁止客户端注册账号。
+置信度评分是判断被测字段是否会导致违规行为的一个相当好的指标。请以百分比形式设置您的置信度等级。如果该字段等于或高于此数值，注册将被阻止，无论上述“频率”测试结果如何。
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_hash_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_hash_help%22)

> Pass a MD5 hash of the email address should you wish to not pass the email address itself. This method bypasses all blacklists, normalisation and obfuscation bypass checks.

```diff
-传递邮件地址的 MD5 值。
+如果您不希望传递电子邮件地址本身，请传递其 MD5 哈希值。此方法会绕过所有黑名单、规范化和混淆绕过检查。
```

<del>传递邮件地址的</del><ins>如果您不希望传递电子邮件地址本身，请传递其</ins> MD5 <del>值。</del><ins>哈希值。此方法会绕过所有黑名单、规范化和混淆绕过检查。</ins>

#### [`fof-anti-spam.admin.settings.stopforumspam.email_hash_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_hash_label%22)

> Use hashed email address

```diff
-使用散列后的邮箱地址
+使用哈希电子邮件地址
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_label%22)

> Email Spam Check

```diff
-邮箱地址滥用检查
+电子邮件垃圾检查
```

#### [`fof-anti-spam.admin.settings.stopforumspam.frequency_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.frequency_help%22)

> The number of spam reports between all enabled checks that will trip the spam filter.
> Ex: If the email has 1 hit, and the ip has 2 hits, there will be 3 hits in total. If the threshold is set to 3 or less we will prevent the registration.
>

```diff
-所以已启用检查的触发次数。
-例如：如果电子邮件有 1 次命中，而 IP 有 2 次命中，共记 3 次命中。如果阈值设置为 3 或更低，则阻止注册。
+所有已启用检查项中的垃圾报告总数，达到此数量将触发垃圾过滤器。
+例如：如果电子邮件有 1 次命中，IP 有 2 次命中，总计 3 次命中。如果阈值设置为 3 或更小，我们将阻止该注册。

```

<del>所以已启用检查的触发次数。</del><ins>所有已启用检查项中的垃圾报告总数，达到此数量将触发垃圾过滤器。</ins><br />例如：如果电子邮件有 1<del> 次命中，而</del> <del>IP</del><ins>次命中，IP</ins> 有 2 <del>次命中，共记</del><ins>次命中，总计</ins> 3 次命中。如果阈值设置为 3 <del>或更低，则阻止注册。</del><ins>或更小，我们将阻止该注册。</ins><br />

#### [`fof-anti-spam.admin.settings.stopforumspam.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.introduction%22)

> Checks new user registrations against the &lt;a&gt;StopForumSpam&lt;/a&gt; database. If either the &lt;code&gt;confidence&lt;/code&gt; or &lt;code&gt;frequency&lt;/code&gt; thresholds are reached, the user is prevented from completing their registration on your forum.
>
> SSO register via &lt;code&gt;fof/oauth&lt;/code&gt; and &lt;code&gt;fof/passport&lt;/code&gt; is also supported. Other SSO providers should work, but are untested.
>

```diff
-使用 <a>StopForumSpam</a> 检查服务，禁止<code>置信度</code>或<code>频率</code>不符合要求的客户端注册账号。
+根据 <a>StopForumSpam</a> 数据库检查新用户注册。如果达到 <code>confidence</code>（置信度）或 <code>frequency</code>（频率）阈值，该用户将无法在您的论坛上完成注册。

-此检查涵盖 <code>fof/oauth</code> 和 <code>fof/passport</code> 的 SSO 注册渠道。其它 SSO 提供程序应该也受支持，但未经测试。
+也支持通过 <code>fof/oauth</code> 和 <code>fof/passport</code> 进行的 SSO 注册。其他 SSO 提供商应该也可以工作，但尚未经过测试。

```

<del>使用</del><ins>根据</ins> &lt;a&gt;StopForumSpam&lt;/a&gt; <del>检查服务，禁止&lt;code&gt;置信度&lt;/code&gt;或&lt;code&gt;频率&lt;/code&gt;不符合要求的客户端注册账号。</del><ins>数据库检查新用户注册。如果达到 &lt;code&gt;confidence&lt;/code&gt;（置信度）或 &lt;code&gt;frequency&lt;/code&gt;（频率）阈值，该用户将无法在您的论坛上完成注册。</ins><br /><br /><del>此检查涵盖</del><ins>也支持通过</ins> &lt;code&gt;fof/oauth&lt;/code&gt; 和 &lt;code&gt;fof/passport&lt;/code&gt; <del>的</del><ins>进行的</ins> SSO <del>注册渠道。其它</del><ins>注册。其他</ins> SSO <del>提供程序应该也受支持，但未经测试。</del><ins>提供商应该也可以工作，但尚未经过测试。</ins><br />

#### [`fof-anti-spam.admin.settings.stopforumspam.ip_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.ip_label%22)

> IP Address Spam Check

```diff
-IP 地址滥用检查
+IP 地址垃圾检查
```

IP <del>地址滥用检查</del><ins>地址垃圾检查</ins>

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help%22)

> By default we will direct the lookup to the closest regional server in order to provide the fastest response. Should you wish to restrict traffic to a specific region, such as for compliance with company or country privacy regulations, then you can force a connection to a specific region.

```diff
-默认情况下，我们会使用最近的服务器，以最快的速度检测数据。根据不同国家或地区的法律法规，你可能需要指定数据处理服务器。
+默认情况下，我们将查询定向到最近的区域服务器以提供最快响应。如果您希望将流量限制在特定区域（例如为了符合公司或国家的隐私法规），您可以强制连接到特定区域。
```

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_label%22)

> Geographic Access

```diff
-地域
+地理访问
```

#### [`fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_help%22)

> When a registration is blocked by the Lookup Registrations feature, we will report the attempt back to StopForumSpam, so that the spammers activity can be better confirmed. Requires a StopForumSpam API key to be set (see below).

```diff
-「注册时检查」功能成功拦截注册时，向 StopForumSpam 报告检测数据，用于进一步校验。此功能需要配置 StopForumSpam API 密钥。
+当注册被“查询注册信息”功能拦截时，我们将向 StopForumSpam 报告此次尝试，以便更好地确认垃圾行为。需要设置 StopForumSpam API 密钥（见下文）。
```

<del>「注册时检查」功能成功拦截注册时，向</del><ins>当注册被“查询注册信息”功能拦截时，我们将向</ins> StopForumSpam <del>报告检测数据，用于进一步校验。此功能需要配置</del><ins>报告此次尝试，以便更好地确认垃圾行为。需要设置</ins> StopForumSpam API <del>密钥。</del><ins>密钥（见下文）。</ins>

#### [`fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_label%22)

> Report blocked registrations

```diff
-报告拦截信息
+报告被拦截的注册
```

#### [`fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_help%22)

> If enabled, we will check the StopForumSpam database when a new user registers on your forum. If the user is found (username, IP address, email) and that data point is enabled along with the SFS confidence level reaching your defined level, they will be prevented from completing their registration.

```diff
-用户注册时，使用 StopForumSpam 服务检查。如果存在注册信息（用户名、IP 地址、电子邮件），且 SFS 置信度不符上面配置的等级，则阻止完成注册。
+如果启用，当新用户在您的论坛注册时，我们将检查 StopForumSpam 数据库。如果找到了该用户（用户名、IP 地址、电子邮件）且该数据点已启用，且 SFS 置信度达到您定义的水平，他们将无法完成注册。
```

<del>用户注册时，使用</del><ins>如果启用，当新用户在您的论坛注册时，我们将检查</ins> StopForumSpam <del>服务检查。如果存在注册信息（用户名、IP</del><ins>数据库。如果找到了该用户（用户名、IP</ins> <del>地址、电子邮件），且</del><ins>地址、电子邮件）且该数据点已启用，且</ins> SFS <del>置信度不符上面配置的等级，则阻止完成注册。</del><ins>置信度达到您定义的水平，他们将无法完成注册。</ins>

#### [`fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_label%22)

> Lookup registrations

```diff
-注册时检查
+查询注册信息
```

#### [`fof-anti-spam.admin.settings.stopforumspam.username_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.username_label%22)

> Username Spam Check

```diff
-用户名滥用检查
+用户名垃圾检查
```

#### [`fof-anti-spam.forum.message.stopforumspam.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.message.stopforumspam.blocked%22)

> Details of your registration have been found in a spam prevention database, therefore your registration has been blocked.

```diff
-不安全的注册信息，无法完成注册。
+您的注册信息已在垃圾信息防控数据库中被发现，因此您的注册已被拦截。
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be hidden instead.

```diff
-启用此项，永久删除主题帖，否则隐藏主题帖。
+这将永久删除该用户发起的所有讨论。禁用后，讨论将被隐藏。
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label%22)

> Delete discussions

```diff
-删除主题帖
+删除讨论
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_posts_help%22)

> This will permanently delete all posts (comments, replies, etc) made by this user. When disabled, posts will be hidden instead.

```diff
-启用此项，永久删除帖子（评论和回复等），否则隐藏帖子。
+这将永久删除该用户发表的所有内容（评论、回复等）。禁用后，内容将被隐藏。
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_user_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_user_help%22)

> This will permanently delete the user. When disabled, the user will be suspended instead.

```diff
-启用此项，永久删除账号，否则停用帐号。
+这将永久删除该用户。禁用后，用户将被封禁。
```

#### [`fof-anti-spam.forum.spammer_modal.intro`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.intro%22)

> When marking a user as a spammer, several actions will be taken, which depends on the extensions available on your forum.

```diff
-标记垃圾账号时，会根据已启用的扩展采取多个处置方式。
+将用户标记为垃圾广告发布者时，将根据您论坛中可用的扩展程序采取多项操作。
```

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_help%22)

> This will move all discussions started by this user to the tag you specified in the forum settings. When disabled, discussions will be left in their current tags.

```diff
-移除主题帖的所有标签，并统一移动到指定标签旗下。如需保留原始标签，请清空标签配置。
+这将把该用户发起的所有讨论移动到您在论坛设置中指定的标签。禁用后，讨论将保留在当前标签中。
```

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_label%22)

> Move discussions to quarantined tag

```diff
-隔离主题帖
+将讨论移动到隔离标签
```

#### [`fof-anti-spam.forum.spammer_modal.process_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.process_button%22)

> Process

```diff
-执行
+处理
```

#### [`fof-anti-spam.forum.spammer_modal.report_to_sfs_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.report_to_sfs_help%22)

> This will report the user's basic details (username, email, IP address) to StopForumSpam. This will help prevent the user from registering on other forums that use the StopForumSpam service.

```diff
-向 StopForumSpam 共享垃圾账号基本信息（用户名、电子邮件、IP 地址），扩充垃圾账号数据库。
+这将向 StopForumSpam 举报该用户的基本信息（用户名、邮箱、IP 地址）。这将有助于防止该用户在其他使用 StopForumSpam 服务的论坛上注册。
```

<del>向</del><ins>这将向</ins> StopForumSpam <del>共享垃圾账号基本信息（用户名、电子邮件、IP</del><ins>举报该用户的基本信息（用户名、邮箱、IP</ins> <del>地址），扩充垃圾账号数据库。</del><ins>地址）。这将有助于防止该用户在其他使用 StopForumSpam 服务的论坛上注册。</ins>

#### [`fof-anti-spam.forum.spammer_modal.report_to_sfs_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.report_to_sfs_label%22)

> Report to StopForumSpam

```diff
-报告到 StopForumSpam
+举报至 StopForumSpam
```

<del>报告到</del><ins>举报至</ins> StopForumSpam

#### [`fof-anti-spam.forum.spammer_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.title%22)

> Mark {username} as a spammer

```diff
-标记垃圾账号 {username}
+将 {username} 标记为垃圾广告发布者
```

<del>标记垃圾账号</del><ins>将</ins> {username}<ins> 标记为垃圾广告发布者</ins>

#### [`fof-anti-spam.forum.user_controls.spammer_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22fof-anti-spam.forum.user_controls.spammer_button%22)

> Spammer

```diff
-垃圾账号
+垃圾广告发布者
```


### `fof-badges`

#### [`fof-badges.admin.metrics.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/zh_Hans/?q=context%3A%3D%22fof-badges.admin.metrics.discussion_count%22)

> Discussions Started

```diff
-发起主题数
+发起讨论数
```


### `fof-best-answer`

#### [`fof-best-answer.admin.permissions.best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.admin.permissions.best_answer%22)

> Select Best Answer (own Discussion)

```diff
-为自己的主题选择最佳回复
+为自己的讨论选择最佳回复
```

#### [`fof-best-answer.admin.permissions.best_answer_not_own_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.admin.permissions.best_answer_not_own_discussion%22)

> Select Best Answer (not own Discussion)

```diff
-为他人的主题选择最佳回复
+为他人的讨论选择最佳回复
```

#### [`fof-best-answer.admin.settings.discussion_sidebar_jump_button_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.admin.settings.discussion_sidebar_jump_button_help%22)

> Adds a button to the discussion sidebar which jumps to the Best Answer in the stream of posts.

```diff
-在主题帖侧边栏添加一个可以跳转到最佳回复的按钮。
+在讨论帖侧边栏添加一个可以跳转到最佳回复的按钮。
```

#### [`fof-best-answer.admin.settings.select_best_answer_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_tags_help%22)

> Select which tags, if any, to add to discussions when a Best Answer is set. Only secondary tags are allowed. These tags will be removed if the Best Answer is removed.

```diff
-选择一个次标签，绑定到拥有最佳回复的主题帖上。取消最佳回复时，同时移除该标签。
+选择一个次标签，绑定到拥有最佳回复的讨论帖上。取消最佳回复时，同时移除该标签。
```

#### [`fof-best-answer.admin.settings.select_best_answer_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_tags_label%22)

> Tags for discussions with Best Answers

```diff
-「已解决」主题帖标签
+「已解决」讨论帖标签
```

#### [`fof-best-answer.email.body.ba-set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.email.body.ba-set%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just set a best answer in the discussion: {discussion\_title}, which you participated in.
>
> Check it out: {discussion\_url}
>

```diff
 {recipient_display_name}，你好！

-{actor_display_name} 刚刚为你参与讨论的主题【{discussion_title}】选择了最佳回复。
+{actor_display_name} 刚刚为你参与讨论的讨论【{discussion_title}】选择了最佳回复。

 去看看吧：{discussion_url}

```

{recipient\_display\_name}，你好！<br /><br />{actor\_display\_name} <del>刚刚为你参与讨论的主题【{discussion\_title}】选择了最佳回复。</del><ins>刚刚为你参与讨论的讨论【{discussion\_title}】选择了最佳回复。</ins><br /><br />去看看吧：{discussion\_url}<br />

#### [`fof-best-answer.email.body.select`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.email.body.select%22)

> Hey {recipient\_display\_name},
>
> Just checking in; by now you should have plenty of replies to your question: {discussion\_title}. Hopefully one of them has helped you solve your problem.
>
> If so, it would be really helpful for future members if you could set a best answer to your question. It'll help people with the same problem find the answer they need, and it's also a big thank you to the members who helped you out. They give their time voluntarily, so it's nice to let them know that they're doing well.
>
> Visit the discussion here: {discussion\_url}, and select the most appropriate post as the best answer.
>
> Thanks!
>

```diff
 {recipient_display_name}，你好！

-你的主题「{discussion_title}」已经有了很多回复。
+你的讨论「{discussion_title}」已经有了很多回复。

 如果其中有可以帮助你解决问题的，你可以把他选为最佳回复，这样不仅能让后来者快速找到解决问题的办法，也可以激励帮助你的人。

-点击此处查看主题：{discussion_url}，并选择最佳回复。
+点击此处查看讨论：{discussion_url}，并选择最佳回复。

 此致

```

{recipient\_display\_name}，你好！<br /><br /><del>你的主题「{discussion\_title}」已经有了很多回复。</del><ins>你的讨论「{discussion\_title}」已经有了很多回复。</ins><br /><br />如果其中有可以帮助你解决问题的，你可以把他选为最佳回复，这样不仅能让后来者快速找到解决问题的办法，也可以激励帮助你的人。<br /><br /><del>点击此处查看主题：{discussion\_url}，并选择最佳回复。</del><ins>点击此处查看讨论：{discussion\_url}，并选择最佳回复。</ins><br /><br />此致<br />

#### [`fof-best-answer.forum.errors.mismatch`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.forum.errors.mismatch%22)

> Selected post does not exist in this discussion.

```diff
-您选择的帖子在当前主题中不存在
+所选回复不在当前讨论中。
```

#### [`fof-best-answer.forum.notification.preferences.best_answer_in_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.best_answer_in_discussion%22)

> A best answer is set in a discussion I participated in

```diff
-我互动的主题有了最佳回复
+我互动的讨论有了最佳回复
```

#### [`fof-best-answer.forum.notification.preferences.select_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.select_best_answer%22)

> An automated reminder to select a best answer in a discussion I started

```diff
-提醒我选择自己主题的最佳回复
+提醒我选择自己讨论的最佳回复
```


### `fof-byobu`

#### [`fof-byobu.admin.permission.add_more_than_two_user_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.add_more_than_two_user_recipients%22)

> Add more than 2 user recipients to private discussion

```diff
-邀请 2 个以上用户参与私密主题讨论
+邀请 2 个以上用户参与私密讨论
```

邀请 2 <del>个以上用户参与私密主题讨论</del><ins>个以上用户参与私密讨论</ins>

#### [`fof-byobu.admin.permission.create_private_discussions_with_blocking_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_blocking_users%22)

> Create private discussions with users that block it

```diff
-强制将私密主题屏蔽的用户加入私密主题
+强制将私密讨论屏蔽的用户加入私密讨论
```

#### [`fof-byobu.admin.permission.create_private_discussions_with_groups`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_groups%22)

> Create private discussions with groups

```diff
-与用户组创建私密主题
+与用户组创建私密讨论
```

#### [`fof-byobu.admin.permission.create_private_discussions_with_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_users%22)

> Create private discussions with users

```diff
-与他人创建私密主题
+与他人创建私密讨论
```

#### [`fof-byobu.admin.permission.edit_group_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.edit_group_recipients%22)

> Edit groups partaking in private discussions

```diff
-设置私密主题用户组可见范围
+设置私密讨论用户组可见范围
```

#### [`fof-byobu.admin.permission.edit_user_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.edit_user_recipients%22)

> Edit users partaking in private discussions

```diff
-设置私密主题用户可见范围
+设置私密讨论用户可见范围
```

#### [`fof-byobu.admin.permission.make_private_into_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.make_private_into_public%22)

> Transform a private discussion into a public discussion

```diff
-将私密主题转为公开
+将私密讨论转为公开
```

#### [`fof-byobu.admin.permission.view_private_discussions-when-flagged`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.permission.view_private_discussions-when-flagged%22)

> View private discussions of other users if flagged

```diff
-查看他人被举报的私密主题
+查看他人被举报的私密讨论
```

#### [`fof-byobu.admin.settings.badge-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.settings.badge-icon%22)

> Byobu Discussion Badge

```diff
-Byobu 主题帖徽章
+Byobu 讨论帖徽章
```

Byobu <del>主题帖徽章</del><ins>讨论帖徽章</ins>

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left%22)

> Delete PDs when the last user leaves

```diff
-所有参与者均离开后，自动删除该私密主题
+所有参与者均离开后，自动删除该私密讨论
```

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left_help%22)

> If enabled, PDs will be permanently deleted from the database when the last user leaves. Otherwise, the PD will be soft-deleted/hidden.

```diff
-启用此项，在所有用户均退出私密主题时，永久删除主题内容。否则，隐藏私密主题。
+启用此项，在所有用户均退出私密讨论时，永久删除讨论内容。否则，隐藏私密讨论。
```

#### [`fof-byobu.admin.settings.enable-make-public-option-help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.settings.enable-make-public-option-help%22)

> Adds the ability for those with permission to remove all recipients, assign a new tag and make the discussion publically visible (accoring to the visibility settings of the chosen tag).

```diff
-转公开时，所有参与者自动退出私密主题，私密主题转为普通公开主题。
+转公开时，所有参与者自动退出私密讨论，私密讨论转为普通公开讨论。
```

#### [`fof-byobu.admin.settings.hide_from_all_discussions_page`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.settings.hide_from_all_discussions_page%22)

> Hide PDs from "All Discussions" page

```diff
-在「全部主题」页面隐藏私密主题
+在「全部讨论」页面隐藏私密讨论
```

#### [`fof-byobu.admin.settings.hide_from_all_discussions_page_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.admin.settings.hide_from_all_discussions_page_help%22)

> Private discussions will only be accessible from the "Private Discussions" page or the user profile

```diff
-只保留「私密主题」页面和个人主页两个访问入口
+只保留「私密讨论」页面和个人主页两个访问入口
```

#### [`fof-byobu.email.subject.private_discussion_added`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_added%22)

> \[Private Discussion\] {display\_name} added you to a private discussion

```diff
-【私密主题】{display_name} 将您加入私密主题
+【私密讨论】{display_name} 将您加入私密讨论
```

#### [`fof-byobu.email.subject.private_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_created%22)

> \[Private Discussion\] {display\_name} started a new private discussion with you

```diff
-【私密主题】{display_name} 与您创建私密主题
+【私密讨论】{display_name} 与您创建私密讨论
```

#### [`fof-byobu.email.subject.private_discussion_replied`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_replied%22)

> \[Private Discussion\] {display\_name} posted in a private discussion

```diff
-【私密主题】{display_name} 发表新帖
+【私密讨论】{display_name} 发表新帖
```

<del>【私密主题】{display\_name}</del><ins>【私密讨论】{display\_name}</ins> 发表新帖

#### [`fof-byobu.email.subject.recipient_removed`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.email.subject.recipient_removed%22)

> \[Private Discussion\] {display\_name} left the discussion

```diff
-【私密主题】{display_name} 退出
+【私密讨论】{display_name} 退出
```

<del>【私密主题】{display\_name}</del><ins>【私密讨论】{display\_name}</ins> 退出

#### [`fof-byobu.forum.badges.is_private.tooltip`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.badges.is_private.tooltip%22)

> Private discussion

```diff
-私密主题
+私密讨论
```

#### [`fof-byobu.forum.buttons.make_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.buttons.make_public%22)

> Make this discussion public

```diff
-公开主题
+公开讨论
```

#### [`fof-byobu.forum.buttons.remove_from_discussion`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.buttons.remove_from_discussion%22)

> Leave this private discussion

```diff
-退出私密主题
+退出私密讨论
```

#### [`fof-byobu.forum.composer_private_discussion.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.composer_private_discussion.submit_button%22)

> Post Private Discussion

```diff
-新建私密主题
+新建私密讨论
```

#### [`fof-byobu.forum.composer_private_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.composer_private_discussion.title_placeholder%22)

> Private Discussion Title

```diff
-私密主题标题
+私密讨论标题
```

#### [`fof-byobu.forum.confirm.make_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.confirm.make_public%22)

> Are you sure you want to remove the recipients and make this discussion visible to anyone who can view the assigned tag?

```diff
-确定移除所有参与者，并公开此主题吗？
+确定移除所有参与者，并公开此讨论吗？
```

#### [`fof-byobu.forum.modal.help.add_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.modal.help.add_recipients%22)

> This discussion will only be visible to the users you choose here. At least 1 recipient (other than yourself) is required.

```diff
-此主题仅选中的用户可见。至少添加一个用户（您除外）才能创建私密主题。
+此讨论仅选中的用户可见。至少添加一个用户（您除外）才能创建私密讨论。
```

#### [`fof-byobu.forum.modal.help.update_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.modal.help.update_recipients%22)

> This discussion will only be visible to the users you choose here.

```diff
-此主题仅选中的用户可见。
+此讨论仅选中的用户可见。
```

#### [`fof-byobu.forum.modal.titles.add_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.modal.titles.add_recipients%22)

> Add recipients to your discussion

```diff
-邀请用户加入私密主题
+邀请用户加入私密讨论
```

#### [`fof-byobu.forum.nav.nav_item`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.nav.nav_item%22)

> Private Discussions

```diff
-私密主题
+私密讨论
```

#### [`fof-byobu.forum.nav.start_button`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.nav.start_button%22)

> Discuss Privately

```diff
-私密主题
+私密讨论
```

#### [`fof-byobu.forum.notifications.pd_added_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_added_label%22)

> Someone adds me to an existing private discussion

```diff
-有人邀请我加入私密主题
+有人邀请我加入私密讨论
```

#### [`fof-byobu.forum.notifications.pd_added_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_added_text%22)

> {username} added you to a private discussion

```diff
-{username} 邀请您加入私密主题
+{username} 邀请您加入私密讨论
```

{username} <del>邀请您加入私密主题</del><ins>邀请您加入私密讨论</ins>

#### [`fof-byobu.forum.notifications.pd_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_label%22)

> Someone includes me in a new private discussion

```diff
-有人和我创建私密主题
+有人和我创建私密讨论
```

#### [`fof-byobu.forum.notifications.pd_reply_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_reply_label%22)

> Someone posts in a private discussion I'm a recipient of

```diff
-参与的私密主题有新贴
+参与的私密讨论有新贴
```

#### [`fof-byobu.forum.notifications.pd_reply_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_reply_text%22)

> {username} posted in a private discussion you're a part of

```diff
-{username} 在私密主题中发表新帖
+{username} 在私密讨论中发表新帖
```

{username} <del>在私密主题中发表新帖</del><ins>在私密讨论中发表新帖</ins>

#### [`fof-byobu.forum.notifications.pd_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_text%22)

> {username} started a new private discussion with you

```diff
-{username} 和我创建私密主题
+{username} 和我创建私密讨论
```

{username} <del>和我创建私密主题</del><ins>和我创建私密讨论</ins>

#### [`fof-byobu.forum.notifications.pd_user_left_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_user_left_label%22)

> A recipient user leaves a private discussion I'm a part of

```diff
-有人退出我参与的私密主题
+有人退出我参与的私密讨论
```

#### [`fof-byobu.forum.notifications.pd_user_left_text`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_user_left_text%22)

> {username} left the private discussion

```diff
-{username} 退出私密主题
+{username} 退出私密讨论
```

{username} <del>退出私密主题</del><ins>退出私密讨论</ins>

#### [`fof-byobu.forum.post.recipients_modified.made_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.post.recipients_modified.made_public%22)

> {username} removed all recipients and made the discussion public

```diff
-{username} 将主题公开
+{username} 将讨论公开
```

{username} <del>将主题公开</del><ins>将讨论公开</ins>

#### [`fof-byobu.forum.post.recipients_modified.removed_self`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.post.recipients_modified.removed_self%22)

> {username} left the private discussion.

```diff
-{username} 退出私密主题。
+{username} 退出私密讨论。
```

{username} <del>退出私密主题。</del><ins>退出私密讨论。</ins>

#### [`fof-byobu.forum.user.byobu_link`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.user.byobu_link%22)

> Private Discussions

```diff
-私密主题
+私密讨论
```

#### [`fof-byobu.forum.user.dropdown_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.user.dropdown_label%22)

> Private Discussions

```diff
-私密主题
+私密讨论
```

#### [`fof-byobu.forum.user.settings.block_pd`](https://weblate.rob006.net/translate/flarum2/fof-byobu/zh_Hans/?q=context%3A%3D%22fof-byobu.forum.user.settings.block_pd%22)

> Block private discussions

```diff
-屏蔽私密主题
+屏蔽私密讨论
```


### `fof-default-group`

#### [`fof-default-group.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-default-group/zh_Hans/?q=context%3A%3D%22fof-default-group.admin.settings.info%22)

> Below you can select the group to assign a user when their account is activated.

```diff
-请在下方选择新用户激活账号后默认分配的用户组。
+请在下方选择新用户激活账号后默认分配的群组。
```


### `fof-default-user-preferences`

#### [`fof-default-user-preferences.admin.settings.discloseOnline`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/zh_Hans/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.discloseOnline%22)

> Disclose Online

```diff
-在线披露
+公开在线状态
```

#### [`fof-default-user-preferences.admin.settings.followAfterReply-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/zh_Hans/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply-help%22)

> When enabled, new users will automatically follow discussions they reply to or comment on.

```diff
-启用后，新用户将自动关注回复或评论的主题帖。
+启用后，新用户将自动关注回复或评论的讨论帖。
```

#### [`fof-default-user-preferences.admin.settings.groupMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/zh_Hans/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.groupMentioned%22)

> Group mentioned email

```diff
-用户组提及邮件通知
+群组提及邮件通知
```


### `fof-discussion-templates`

#### [`fof-discussion-templates.admin.permissions.manage_all_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_all_reply_templates%22)

> Manage reply templates for all discussions

```diff
-管理所有主题帖的回复模板
+管理所有讨论帖的回复模板
```

#### [`fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates%22)

> Manage reply templates for their discussions

```diff
-管理标签旗下主题贴的回复模板
+管理标签下讨论贴的回复模板
```

#### [`fof-discussion-templates.admin.settings.append_template_on_tag_change`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.settings.append_template_on_tag_change%22)

> Append template on tag change?

```diff
-标签变化后重载模板
+标签变化后重载模板？
```

#### [`fof-discussion-templates.admin.settings.no_tag_template`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.settings.no_tag_template%22)

> Default template (used when discussion started with no tags selected):

```diff
-默认模板（适用于无自定义模板的标签）：
+默认模板（在未选择任何标签发起讨论时使用）：
```

#### [`fof-discussion-templates.admin.tag_template_modal.customize_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.tag_template_modal.customize_text%22)

> Manage a template for new discussions in this tag.

```diff
-编辑在此标签下创建新主题时的默认模板。
+编辑在此标签下创建新讨论时的默认模板。
```

#### [`fof-discussion-templates.admin.tag_template_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.tag_template_modal.title%22)

> Discussion Template

```diff
-新主题模板
+新讨论模板
```

#### [`fof-discussion-templates.admin.tags.tag_template_heading`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_heading%22)

> Discussion Template

```diff
-新主题模板
+新讨论模板
```

#### [`fof-discussion-templates.admin.tags.tag_template_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/zh_Hans/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_text%22)

> Manage a template for new discussions in this tag.

```diff
-编辑在此标签下创建新主题时的默认模板。
+编辑在此标签下创建新讨论时的默认模板。
```


### `fof-discussion-thumbnail`

#### [`fof-discussion-thumbnail.admin.settings.link_to_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-thumbnail/zh_Hans/?q=context%3A%3D%22fof-discussion-thumbnail.admin.settings.link_to_discussion_label%22)

> Make discussion thumbnails link to discussion and not user

```diff
-关联主题帖缩略图到主题帖，而非用户
+关联讨论帖缩略图到讨论帖，而非用户
```


### `fof-doorman`

#### [`fof-doorman.admin.modals.send_invites.group`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.group%22)

> Sending invites for {group} group

```diff
-正在向 {group} 群组发送邀请。
+正在向 {group} 群组发送邀请
```

正在向 {group} <del>群组发送邀请。</del><ins>群组发送邀请</ins>


### `fof-drafts`

#### [`fof-drafts.forum.user.settings.draft_autosave_enable`](https://weblate.rob006.net/translate/flarum2/fof-drafts/zh_Hans/?q=context%3A%3D%22fof-drafts.forum.user.settings.draft_autosave_enable%22)

> Enable Draft Autosave?

```diff
-自动保存草稿
+开启草稿自动保存？
```


### `fof-follow-tags`

#### [`fof-follow-tags.forum.notifications.new_discussion_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.notifications.new_discussion_text%22)

> {username} started

```diff
-{username} 发布了新主题
+{username} 发布了新讨论
```

{username} <del>发布了新主题</del><ins>发布了新讨论</ins>

#### [`fof-follow-tags.forum.settings.notify_new_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_discussion_label%22)

> Someone creates a discussion in a tag I'm following

```diff
-我关注的标签有新建主题
+我关注的标签有新建讨论
```

#### [`fof-follow-tags.forum.settings.notify_new_discussion_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_discussion_tag_label%22)

> Someone re-tags a discussion to a tag I'm following

```diff
-有人将主题添加到我关注的标签
+有人将讨论添加到我关注的标签
```

#### [`fof-follow-tags.forum.sub_controls.following_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.following_text%22)

> Be notified of all new discussions.

```diff
-有新主题时提醒。
+有新讨论时提醒。
```

#### [`fof-follow-tags.forum.sub_controls.hiding_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.hiding_text%22)

> Hide discussions from All Discussions page.

```diff
-在全部主题页面中隐藏旗下主题。
+在全部讨论页面中隐藏旗下讨论。
```

#### [`fof-follow-tags.forum.sub_controls.lurking_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.lurking_text%22)

> Be notified of all new discussions and replies.

```diff
-有新主题或新回复时提醒。
+有新讨论或新回复时提醒。
```

#### [`fof-follow-tags.forum.sub_controls.notify_alert_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.notify_alert_tooltip%22)

> Get a forum notification when there are new discussions or posts

```diff
-有新主题或新回复时推送论坛提醒
+有新讨论或新回复时推送论坛提醒
```

#### [`fof-follow-tags.forum.sub_controls.notify_email_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.notify_email_tooltip%22)

> Get an email when there are new discussions or posts

```diff
-有新主题或新回复时发送邮件提醒
+有新讨论或新回复时发送邮件提醒
```

#### [`fof-follow-tags.ref.filtering_options.none`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/zh_Hans/?q=context%3A%3D%22fof-follow-tags.ref.filtering_options.none%22)

> Followed Discussions

```diff
-关注的主题
+关注的讨论
```


### `fof-formatting`

#### [`fof-formatting.admin.plugins.HTMLEntities`](https://weblate.rob006.net/translate/flarum2/fof-formatting/zh_Hans/?q=context%3A%3D%22fof-formatting.admin.plugins.HTMLEntities%22)

> Use HTML entities

```diff
-使用 HTML 字符实体（详情：https://iflarum.cn/html-entities）
+使用 HTML 实体（详情：https://iflarum.cn/html-entities）
```

使用 HTML <del>字符实体（详情：https://iflarum.cn/html-entities）</del><ins>实体（详情：https://iflarum.cn/html-entities）</ins>


### `fof-gamification`

#### [`fof-gamification.admin.page.convert.button`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.convert.button%22)

> Convert likes to upvotes

```diff
-同步原生点赞数据
+将“点赞”转换为“赞同”
```

#### [`fof-gamification.admin.page.convert.converted`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.convert.converted%22)

> Successfully converted all {number} likes

```diff
-成功同步 {number} 个赞
+成功转换所有 {number} 个点赞
```

<del>成功同步</del><ins>成功转换所有</ins> {number} <del>个赞</del><ins>个点赞</ins>

#### [`fof-gamification.admin.page.convert.converting`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.convert.converting%22)

> Your likes are now being converted. Refresh your site after a few minutes to see the process finished. (Conversion time might take a while depending on your total forum likes)

```diff
-原生 LIkes 插件的点赞数据正在同步中，请等待几分钟后刷新页面查看同步结果。（同步可能需要一段时间，具体取决于您服务器性能）
+点赞数据正在转换中，请几分钟后刷新站点查看结果。（转换耗时取决于论坛总点赞数量）
```

#### [`fof-gamification.admin.page.groups.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.groups.help%22)

> The selected groups will be automatically added or removed as needed when the number of points of a user changes. If you made changes to the configuration, you should run the &lt;code&gt;php flarum fof:gamification:assign-groups&lt;/code&gt; command to update existing users. If you wish to delete a rule and remove all users from the group, set both minimum and maximum values to an empty string, save the settings and run the command line command. Finally you can delete the rule entirely from the settings.
>

```diff
-当用户的点数发生变化时，将自动添加或删除组。修改设置后，请运行 <code>php flarum fof:gamification:assign-groups</code> 命令更新现有用户。如果您希望删除规则并从组中删除所有用户，请将最低最高点数均设为空，保存设置并执行命令后，在设置中删除规则。
+当用户的积分发生变化时，系统将根据需要自动添加或移除所选的用户组。如果您修改了配置，应当运行 <code>php flarum fof:gamification:assign-groups</code> 命令以更新现有用户。如果您希望删除某条规则并从该组中移除所有用户，请将最小值和最大值均设为空（留空），保存设置并运行上述命令行命令。最后，您可以从设置中彻底删除该规则。

```

<del>当用户的点数发生变化时，将自动添加或删除组。修改设置后，请运行</del><ins>当用户的积分发生变化时，系统将根据需要自动添加或移除所选的用户组。如果您修改了配置，应当运行</ins> &lt;code&gt;php flarum fof:gamification:assign-groups&lt;/code&gt; <del>命令更新现有用户。如果您希望删除规则并从组中删除所有用户，请将最低最高点数均设为空，保存设置并执行命令后，在设置中删除规则。</del><ins>命令以更新现有用户。如果您希望删除某条规则并从该组中移除所有用户，请将最小值和最大值均设为空（留空），保存设置并运行上述命令行命令。最后，您可以从设置中彻底删除该规则。</ins><br />

#### [`fof-gamification.admin.page.votes.first_post_only`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.votes.first_post_only%22)

> Only allow up/down votes in the first post in a discussion

```diff
-仅首贴开放赞踩功能
+仅允许在首帖中进行赞同/反对投票
```

#### [`fof-gamification.admin.page.votes.icon_name`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.votes.icon_name%22)

> Upvote/downvote icon

```diff
-赞同/踩图标
+赞同/反对图标
```

#### [`fof-gamification.admin.page.votes.upvotes_only`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.votes.upvotes_only%22)

> Only allow upvoting

```diff
-禁用踩
+禁用反对
```

#### [`fof-gamification.admin.page.votes.vote_color`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.page.votes.vote_color%22)

> Voted color

```diff
-点赞颜色
+投票颜色
```

#### [`fof-gamification.admin.permissions.see_votes_label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.permissions.see_votes_label%22)

> See up/down vote count

```diff
-查看赞同/踩数量
+查看赞同/反对数量
```

#### [`fof-gamification.admin.permissions.vote_label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.admin.permissions.vote_label%22)

> Upvote/Downvote posts

```diff
-赞同/踩
+赞同/反对
```

#### [`fof-gamification.forum.notification.downvote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.forum.notification.downvote%22)

> {username} downvoted your post

```diff
-{username} 踩了您的帖子
+{username} 反对了您的帖子
```

{username} <del>踩了您的帖子</del><ins>反对了您的帖子</ins>

#### [`fof-gamification.forum.notification.prefrences.vote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.forum.notification.prefrences.vote%22)

> When one of my posts is up/down voted

```diff
-有人赞同或踩我
+有人赞同或反对我
```

#### [`fof-gamification.forum.post.downvote_button`](https://weblate.rob006.net/translate/flarum2/fof-gamification/zh_Hans/?q=context%3A%3D%22fof-gamification.forum.post.downvote_button%22)

> Downvote post

```diff
-踩
+反对
```


### `fof-geoip`

#### [`fof-geoip.admin.settings.service_iplocation_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.service_iplocation_label%22)

> IP Location

```diff
-IP Location
+IP 位置
```

IP <del>Location</del><ins>位置</ins>


### `fof-horizon`

#### [`fof-horizon.admin.settings.trim_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.settings.trim_help%22)

> Here you can configure for how long (in minutes) you desire Horizon to
> persist the recent and failed jobs. Typically, recent jobs are kept
> for one hour while all failed jobs are stored for an entire week.
>

```diff
-您可以配置 Horizon 保留最近和失败任务的时间（以分钟为单位）。
-通常，最近的任务保留一个小时，失败的任务保留一周。
+您可以在此处配置 Horizon 的运行时间（以分钟为单位）。
+保留最近失败的作业。通常情况下，会保留最近的作业。
+失败的作业将保存一小时，所有失败的作业将保存整整一周。

```

<del>您可以配置</del><ins>您可以在此处配置</ins> Horizon <del>保留最近和失败任务的时间（以分钟为单位）。</del><ins>的运行时间（以分钟为单位）。</ins><br /><del>通常，最近的任务保留一个小时，失败的任务保留一周。</del><ins>保留最近失败的作业。通常情况下，会保留最近的作业。<br />失败的作业将保存一小时，所有失败的作业将保存整整一周。</ins><br />


### `fof-ignore-users`

#### [`fof-ignore-users.forum.profile_page.no_ignored`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/zh_Hans/?q=context%3A%3D%22fof-ignore-users.forum.profile_page.no_ignored%22)

> It looks like you're not ignoring anyone.

```diff
-这里空空如也
+看来你还没有屏蔽任何人。
```


### `fof-impersonate`

#### [`fof-impersonate.admin.settings.require_reason`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/zh_Hans/?q=context%3A%3D%22fof-impersonate.admin.settings.require_reason%22)

> Require a reason to be entered before proceeding to impersonate another user.

```diff
-要求在登录他人账户前输入理由
+登陆他人账户前必须填写理由。
```


### `fof-links`

#### [`fof-links.admin.edit_link.internal_link`](https://weblate.rob006.net/translate/flarum2/fof-links/zh_Hans/?q=context%3A%3D%22fof-links.admin.edit_link.internal_link%22)

> Is it an internal link?

```diff
-这是内部链接吗？勾选后，当用户访问此链接时，此链接会在导航栏高亮。
+是否为内部链接？
```


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.description-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22fof-masquerade.admin.fields.description-help%22)

> An optional description to explain the use/need of this field.
>

```diff
-可选描述，用来解释这个字段的用途/需求。
+可选描述，用来解释这个字段的用途或填写要求。

```

#### [`fof-masquerade.admin.fields.icon-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22fof-masquerade.admin.fields.icon-help%22)

> Shows an icon in front of values entered by the user. For a reference of available icons, check the &lt;a&gt;FontAwesome website&lt;/a&gt;. Use icon names with the "fa-" prefix, like "fas fa-info".
>

```diff
-在字段名称前显示一个图标。可用的图标详情，请前往 <a>FontAwesome 官网</a>。图标名称包含前缀 "fa-"，例如 "fas fa-info"。
+在字段名称前显示一个图标。可用的图标请查阅 <a>FontAwesome 官网</a>。图标名称需包含前缀 "fa-"，例如 "fas fa-info"。

```

<del>在字段名称前显示一个图标。可用的图标详情，请前往</del><ins>在字段名称前显示一个图标。可用的图标请查阅</ins> &lt;a&gt;FontAwesome <del>官网&lt;/a&gt;。图标名称包含前缀</del><ins>官网&lt;/a&gt;。图标名称需包含前缀</ins> "fa-"，例如 "fas fa-info"。<br />

#### [`fof-masquerade.admin.fields.option-comma-warning`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22fof-masquerade.admin.fields.option-comma-warning%22)

> The label of an option cannot contain any comma (",").

```diff
-选项名不能包含任何半角逗号 (",")。
+选项名称不能包含半角逗号（,）。
```

#### [`fof-masquerade.admin.fields.validation`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22fof-masquerade.admin.fields.validation%22)

> Validation

```diff
-验证
+验证规则
```

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
-检查支持的 <a>Laravel 验证规则</a>. 例如： "string|min:5" 或 "url"。
+请参考支持的 <a>Laravel 验证规则</a>。例如："string|min:5" 或 "url"。

```

<del>检查支持的</del><ins>请参考支持的</ins> &lt;a&gt;Laravel<del> 验证规则&lt;/a&gt;. 例如：</del> <del>"string\|min:5"</del><ins>验证规则&lt;/a&gt;。例如："string\|min:5"</ins> 或 "url"。<br />


### `fof-merge-discussions`

#### [`fof-merge-discussions.admin.permissions.merge_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.admin.permissions.merge_discussions_label%22)

> Merge discussions

```diff
-合并主题
+合并讨论
```

#### [`fof-merge-discussions.admin.settings.search_result_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_help%22)

> How many discussions should be returned when searching within the \`Merge Discussions\` modal.

```diff
-`合并主题` 搜索结果展示数量
+设置在“合并讨论”弹窗中执行搜索时，返回的讨论数量上限。
```

#### [`fof-merge-discussions.admin.settings.search_result_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_label%22)

> Merge Discussion Search Limit

```diff
-合并主题搜索上限
+合并讨论搜索上限
```

#### [`fof-merge-discussions.api.error.deleting_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.api.error.deleting_failed%22)

> Failed to delete empty discussions.

```diff
-删除空主题失败。
+删除空讨论失败。
```

#### [`fof-merge-discussions.api.error.merging_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.api.error.merging_failed%22)

> Failed to merge discussions.

```diff
-合并主题失败。
+合并讨论失败。
```

#### [`fof-merge-discussions.api.error.updating_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.api.error.updating_failed%22)

> Failed to update discussion details.

```diff
-更新主题内容失败。
+更新讨论内容失败。
```

#### [`fof-merge-discussions.email.merged.subject`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.email.merged.subject%22)

> Your discussion "{merged\_discussion\_title}" was merged

```diff
-主题合并「{merged_discussion_title}」
+讨论合并「{merged_discussion_title}」
```

#### [`fof-merge-discussions.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.forum.modal.title%22)

> Merge Discussions

```diff
-合并主题
+合并讨论
```

#### [`fof-merge-discussions.forum.modal.type_from_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_from_label%22)

> Merge this discussion into another

```diff
-合并至其他主题
+合并至其他讨论
```

#### [`fof-merge-discussions.forum.modal.type_target_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_target_label%22)

> Merge into me

```diff
-合并至此主题
+合并至此讨论
```

#### [`fof-merge-discussions.forum.notification.preferences.discussion_merged`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.forum.notification.preferences.discussion_merged%22)

> Someone merges one of my discussions with another

```diff
-有人合并我的主题
+有人合并我的讨论
```

#### [`fof-merge-discussions.ref.merge`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/zh_Hans/?q=context%3A%3D%22fof-merge-discussions.ref.merge%22)

> Merge

```diff
-合并主题
+合并讨论
```


### `fof-moderator-notes`

#### [`fof-moderator-notes.forum.moderatorNotes.noNotes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/zh_Hans/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.noNotes%22)

> It looks like there are no notes here.

```diff
-还没有人发表留言，何不坐第一个沙发？
+看来这里还没有任何留言。
```


### `fof-moderator-warnings`

#### [`fof-moderator-warnings.forum.post_controls.warning_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/zh_Hans/?q=context%3A%3D%22fof-moderator-warnings.forum.post_controls.warning_button%22)

> Warn User

```diff
-警告
+警告用户
```


### `fof-oauth`

#### [`fof-oauth.admin.settings.providers.google.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/zh_Hans/?q=context%3A%3D%22fof-oauth.admin.settings.providers.google.description%22)

> Create an application at {link}.

```diff
-前往此处创建应用：{link}
+前往此处创建应用：{link}。
```


### `fof-open-collective`

#### [`fof-open-collective.admin.settings.group_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.group_label%22)

> Recurring Backers Group

```diff
-指定用户组
+指定群组
```


### `fof-pages`

#### [`fof-pages.ref.slug`](https://weblate.rob006.net/translate/flarum2/fof-pages/zh_Hans/?q=context%3A%3D%22fof-pages.ref.slug%22)

> Slug

```diff
-固定链接地址（Slug）
+别名（Slug）
```


### `fof-reactions`

#### [`fof-reactions.forum.disabled-reaction`](https://weblate.rob006.net/translate/flarum2/fof-reactions/zh_Hans/?q=context%3A%3D%22fof-reactions.forum.disabled-reaction%22)

> You can't use this reaction right now, please refresh the page

```diff
-您暂时不能戳表情，请刷新后重试。
+您暂时不能戳表情，请刷新后重试
```


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.frequency_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/zh_Hans/?q=context%3A%3D%22fof-sitemap.admin.settings.frequency_label%22)

> How often should the scheduler re-build the cached sitemap?

```diff
-重建站点地图频率
+计划任务重新构建缓存站点地图的频率？
```


### `fof-split`

#### [`fof-split.admin.permissions.split_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-split/zh_Hans/?q=context%3A%3D%22fof-split.admin.permissions.split_discussion_label%22)

> Split posts from discussions

```diff
-拆分主题
+拆分讨论
```

#### [`fof-split.forum.modal.new_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-split/zh_Hans/?q=context%3A%3D%22fof-split.forum.modal.new_discussion_label%22)

> Specify the title for the new discussion

```diff
-输入新主题标题
+输入新讨论标题
```

#### [`fof-split.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-split/zh_Hans/?q=context%3A%3D%22fof-split.forum.modal.title%22)

> Split discussion

```diff
-拆分主题
+拆分讨论
```

#### [`fof-split.forum.split.to`](https://weblate.rob006.net/translate/flarum2/fof-split/zh_Hans/?q=context%3A%3D%22fof-split.forum.split.to%22)

> Split to here

```diff
-结束拆分主题
+结束拆分
```


### `fof-synopsis`

#### [`fof-synopsis.admin.settings.excerpt-type.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/zh_Hans/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-type.help%22)

> Select if the first or last post be used for synopsis content

```diff
-选择首贴或最新回复作为摘要。
+选择首贴或最新回复作为摘要
```

#### [`fof-synopsis.admin.settings.excerpt-type.label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/zh_Hans/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-type.label%22)

> Which post should be displayed as the excerpt?

```diff
-摘要内容源
+摘要内容来源
```

#### [`fof-synopsis.admin.settings.rich-excerpts.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/zh_Hans/?q=context%3A%3D%22fof-synopsis.admin.settings.rich-excerpts.help%22)

> When enabled, images, embeds and other non text elements may be included in the synopsis

```diff
-启用后，摘要中可包含图片和嵌入式媒体等非文本内容。
+启用后，摘要中可包含图片和嵌入式媒体等非文本内容
```


### `fof-upload`

#### [`fof-upload.forum.buttons.media`](https://weblate.rob006.net/translate/flarum2/fof-upload/zh_Hans/?q=context%3A%3D%22fof-upload.forum.buttons.media%22)

> My media

```diff
-我的文件
+文件
```


### `fof-user-directory`

#### [`fof-user-directory.admin.settings.link-group-mentions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.admin.settings.link-group-mentions%22)

> Link group mentions in posts to the User Directory

```diff
-将帖子中的组提及链接到用户名录
+将帖子中的群组提及链接到用户名录
```

#### [`fof-user-directory.forum.page.filter_button`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.forum.page.filter_button%22)

> Filter Groups

```diff
-筛选用户组
+筛选群组
```

#### [`fof-user-directory.forum.page.usercard.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.forum.page.usercard.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
-{count, plural, one {主题 {count}} other {主题 {count}}}
+{count, plural, one {讨论 {count}} other {讨论 {count}}}
```

{count, plural, one <del>{主题</del><ins>{讨论</ins> {count}} other <del>{主题</del><ins>{讨论</ins> {count}}}

#### [`fof-user-directory.forum.search.kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.forum.search.kinds.group%22)

> Group

```diff
-用户组
+群组
```

#### [`fof-user-directory.lib.sort.least_discussions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.lib.sort.least_discussions%22)

> Least discussions

```diff
-主题最少
+讨论最少
```

#### [`fof-user-directory.lib.sort.most_discussions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.lib.sort.most_discussions%22)

> Most discussions

```diff
-主题最多
+讨论最多
```


### `fof-username-request`

#### [`fof-username-request.email.body.noReasonProvided`](https://weblate.rob006.net/translate/flarum2/fof-username-request/zh_Hans/?q=context%3A%3D%22fof-username-request.email.body.noReasonProvided%22)

> No reason provided.

```diff
-未说明原因
+未说明原因。
```


### `fof-webhooks`

#### [`fof-webhooks.actions.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.discussion.deleted%22)

> Deleted discussion \`{1}\`

```diff
-删除主题 `{1}`
+删除讨论 `{1}`
```

<del>删除主题</del><ins>删除讨论</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.discussion.hidden%22)

> Hid discussion \`{1}\`

```diff
-隐藏主题 `{1}`
+隐藏讨论 `{1}`
```

<del>隐藏主题</del><ins>隐藏讨论</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.renamed.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.discussion.renamed.title%22)

> Renamed discussion \`{1}\`

```diff
-重命名主题 `{1}`
+重命名讨论 `{1}`
```

<del>重命名主题</del><ins>重命名讨论</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.discussion.restored%22)

> Restored discussion \`{1}\`

```diff
-恢复主题 `{1}`
+恢复讨论 `{1}`
```

<del>恢复主题</del><ins>恢复讨论</ins> \`{1}\`

#### [`fof-webhooks.actions.discussion.started`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.discussion.started%22)

> Started discussion \`{1}\`

```diff
-发布主题 `{1}`
+发布讨论 `{1}`
```

<del>发布主题</del><ins>发布讨论</ins> \`{1}\`

#### [`fof-webhooks.actions.group.created`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.group.created%22)

> Created \`{1}\` group

```diff
-创建用户组 `{1}`
+创建群组 `{1}`
```

<del>创建用户组</del><ins>创建群组</ins> \`{1}\`

#### [`fof-webhooks.actions.group.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.group.deleted%22)

> Deleted \`{1}\` group

```diff
-删除用户组`{1}`
+删除群组`{1}`
```

#### [`fof-webhooks.actions.group.renamed`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.actions.group.renamed%22)

> Renamed a group to \`{1}\`

```diff
-重命名用户组为 `{1}`
+重命名群组为 `{1}`
```

<del>重命名用户组为</del><ins>重命名群组为</ins> \`{1}\`

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.title%22)

> Flarum Discussion

```diff
-Flarum 主题
+Flarum 讨论
```

Flarum <del>主题</del><ins>讨论</ins>

#### [`fof-webhooks.admin.settings.actions.flarum.group.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.group.title%22)

> Flarum Group

```diff
-Flarum 用户组
+Flarum 群组
```

Flarum <del>用户组</del><ins>群组</ins>

#### [`fof-webhooks.admin.settings.modal.extra_text_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.extra_text_help%22)

> Extra text to include in the sent webhook.

```diff
-附加文本到发送的 Webhook 中
+附加文本到发送的 Webhook 中。
```

附加文本到发送的 Webhook <del>中</del><ins>中。</ins>


### `forumaker-magicbb`

#### [`forumaker-magicbb.admin.permissions.use_iframe`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.use_iframe%22)

> Allow iframe

```diff
-允许iframe嵌入式
+允许 iframe 嵌入
```

#### [`forumaker-magicbb.admin.sections.features`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.sections.features%22)

> Features

```diff
-特征
+功能
```

#### [`forumaker-magicbb.admin.settings.bb_center`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_center%22)

> Center

```diff
-中心
+居中
```

#### [`forumaker-magicbb.admin.settings.bb_color`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_color%22)

> Color

```diff
-色彩
+颜色
```

#### [`forumaker-magicbb.admin.settings.bb_iframe`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe%22)

> iframe

```diff
-iframe嵌入式
+iframe 嵌入
```

#### [`forumaker-magicbb.admin.settings.bb_iframe_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe_help%22)

> Allows embedding iframes from any source. Use with caution — embedded content may include external scripts. 🧹 After changing this setting, please clear the Flarum cache

```diff
-允许嵌入来自任何来源的 iframe。请谨慎使用——嵌入的内容可能包含外部脚本。🧹 更改此设置后，请清除 Flarum 缓存
+允许嵌入来自任何来源的 iframe。请谨慎使用——嵌入内容可能包含外部脚本。🧹 修改此设置后请清除 Flarum 缓存
```

允许嵌入来自任何来源的 <del>iframe。请谨慎使用——嵌入的内容可能包含外部脚本。🧹</del><ins>iframe。请谨慎使用——嵌入内容可能包含外部脚本。🧹</ins> <del>更改此设置后，请清除</del><ins>修改此设置后请清除</ins> Flarum 缓存

#### [`forumaker-magicbb.admin.settings.bb_image_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image_help%22)

> Wraps images and other inline media in an alignment container. Centered media is scaled to 60% of the post width, side-aligned — up to 40%

```diff
-居中显示的大图片会自动调整大小，使其宽度为帖子宽度的60%，而侧边对齐的图片宽度最大可达帖子宽度的40%
+居中显示的大图片会自动调整为帖子宽度的 60%，侧边对齐的图片最大为帖子宽度的 40%
```

#### [`forumaker-magicbb.admin.settings.bb_info`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_info%22)

> Alerts

```diff
-告警
+提示框
```

#### [`forumaker-magicbb.admin.settings.bb_justify`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_justify%22)

> Justify

```diff
-合法化
+两端对齐
```

#### [`forumaker-magicbb.admin.settings.bb_table`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_table%22)

> Table

```diff
-桌子
+表格
```

#### [`forumaker-magicbb.admin.settings.toolbar_group`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.toolbar_group%22)

> Group MagicBB buttons

```diff
-MagicBB 按钮组
+合并 MagicBB 按钮
```

<ins>合并 </ins>MagicBB <del>按钮组</del><ins>按钮</ins>

#### [`forumaker-magicbb.admin.settings.toolbar_group_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.toolbar_group_help%22)

> If enabled, all MagicBB buttons will be grouped into a single one in the composer

```diff
-如果启用此功能，所有 MagicBB 按钮将在编辑器中合并为一个按钮
+启用后，所有 MagicBB 按钮将在编辑器中合并为一个按钮
```

<del>如果启用此功能，所有</del><ins>启用后，所有</ins> MagicBB 按钮将在编辑器中合并为一个按钮

#### [`forumaker-magicbb.forum.composer.image_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.image_button%22)

> Align image

```diff
-添加图片
+添加智能图片
```

#### [`forumaker-magicbb.forum.composer.info_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.info_button%22)

> Add alert

```diff
-添加警报
+添加提示框
```

#### [`forumaker-magicbb.forum.composer.justify_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.justify_button%22)

> Align justify

```diff
-对齐并两端对齐
+两端对齐
```

#### [`forumaker-magicbb.forum.composer.spoiler_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.spoiler_button%22)

> Add spoiler

```diff
-添加黑幕
+添加剧透
```

#### [`forumaker-magicbb.forum.composer.table_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.table_button%22)

> Add table

```diff
-添加标题
+插入表格
```


### `ianm-follow-users`

#### [`ianm-follow-users.admin.settings.button-on-profile-label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.admin.settings.button-on-profile-label%22)

> Show the Follow button directly on the user profile header

```diff
-在用户资料卡片头部区域展示以下按钮
+在用户资料卡片头部区域展示关注按钮
```

#### [`ianm-follow-users.forum.badge.label.follow`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.badge.label.follow%22)

> Following discussions

```diff
-关注主题
+关注讨论
```

#### [`ianm-follow-users.forum.filter.following`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.filter.following%22)

> Followed users

```diff
-我的关注
+已关注的用户
```

#### [`ianm-follow-users.forum.modals.select_follow_level.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.description%22)

> Choose how you'd like to follow &lt;em&gt;{username}&lt;/em&gt;.

```diff
-您想要如何关注 <em>{username}</em>？
+您想要如何关注 <em>{username}</em>。
```

您想要如何关注 <del>&lt;em&gt;{username}&lt;/em&gt;？</del><ins>&lt;em&gt;{username}&lt;/em&gt;。</ins>

#### [`ianm-follow-users.forum.modals.select_follow_level.no_user_attr_provided_err_debug`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.no_user_attr_provided_err_debug%22)

> No \`user\` attribute was passed to the SelectFollowUserLevel modal when created. Modal cannot be rendered.

```diff
-创建选择关注级别 (SelectFollowUserLevel) 弹窗时 `user` 用户属性传入，因此弹窗生成失败。
+创建选择关注级别 (SelectFollowUserLevel) 弹窗时未传入 `user` 用户属性，因此弹窗无法渲染。
```

创建选择关注级别 (SelectFollowUserLevel) <del>弹窗时</del><ins>弹窗时未传入</ins> \`user\` <del>用户属性传入，因此弹窗生成失败。</del><ins>用户属性，因此弹窗无法渲染。</ins>

#### [`ianm-follow-users.forum.modals.select_follow_level.title`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.title%22)

> Select follow level for {username}

```diff
-关注 {username}
+选择对 {username} 的关注方式
```

<del>关注</del><ins>选择对</ins> {username}<ins> 的关注方式</ins>

#### [`ianm-follow-users.forum.notifications.new_discussion_text`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.notifications.new_discussion_text%22)

> {username} started

```diff
-{username} 发布主题
+{username} 发布了新讨论
```

{username} <del>发布主题</del><ins>发布了新讨论</ins>

#### [`ianm-follow-users.forum.notifications.new_post_text`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.notifications.new_post_text%22)

> {username} posted in a discussion

```diff
-{username} 发表回复
+{username} 在讨论中发表了回复
```

{username} <del>发表回复</del><ins>在讨论中发表了回复</ins>

#### [`ianm-follow-users.forum.notifications.new_unfollower_text`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.notifications.new_unfollower_text%22)

> {username} stopped following you

```diff
-{username} 取关了你
+{username} 取消关注了你
```

{username} <del>取关了你</del><ins>取消关注了你</ins>

#### [`ianm-follow-users.forum.settings.notify_new_discussion_label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.settings.notify_new_discussion_label%22)

> Someone I'm following starts a discussion

```diff
-我关注的人发布了新主题
+我关注的人发布了新讨论
```

#### [`ianm-follow-users.lib.follow_levels.follow.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.follow.description%22)

> Receive notifications when &lt;em&gt;{username}&lt;/em&gt; starts new a new discussion.
>

```diff
-接收 <em>{username}</em> 发布新主题的通知。
+当 <em>{username}</em> 发布新讨论时接收通知。

```

<del>接收</del><ins>当</ins> &lt;em&gt;{username}&lt;/em&gt; <del>发布新主题的通知。</del><ins>发布新讨论时接收通知。</ins><br />

#### [`ianm-follow-users.lib.follow_levels.follow.name`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.follow.name%22)

> Follow discussions

```diff
-关注主题
+关注讨论
```

#### [`ianm-follow-users.lib.follow_levels.lurk.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.lurk.description%22)

> Receive notifications when &lt;em&gt;{username}&lt;/em&gt; starts a new discussion or posts within any discussion.
>

```diff
-接收 <em>{username}</em> 发布新主题和回复的所有通知。
+当 <em>{username}</em> 发布新讨论或在任意讨论中发表回复时接收通知。

```

<del>接收</del><ins>当</ins> &lt;em&gt;{username}&lt;/em&gt; <del>发布新主题和回复的所有通知。</del><ins>发布新讨论或在任意讨论中发表回复时接收通知。</ins><br />


### `ianm-twofactor`

#### [`ianm-twofactor.forum.security.confirm_disable_2fa_text_other_user`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.confirm_disable_2fa_text_other_user%22)

> Are you sure you want to disable Two-Factor Authentication for {username}? This will remove all backup codes and disable 2FA for their account.

```diff
-确定要为 {username} 关闭双重认证，并销毁救援代码吗？
+确定要为 {username} 关闭双重认证，并销毁救援代码吗。
```

确定要为 {username} <del>关闭双重认证，并销毁救援代码吗？</del><ins>关闭双重认证，并销毁救援代码吗。</ins>


### `justoverclock-related-discussions`

#### [`justoverclock-related-discussions.admin.DiscussionPageLayout`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/zh_Hans/?q=context%3A%3D%22justoverclock-related-discussions.admin.DiscussionPageLayout%22)

> Show Related Discussions at the bottom of the discussion pages

```diff
-在主题页面底部显示相关讨论
+在讨论页面底部显示相关讨论
```

#### [`justoverclock-related-discussions.admin.relatedTitle`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/zh_Hans/?q=context%3A%3D%22justoverclock-related-discussions.admin.relatedTitle%22)

> Title for "Related Discussions"

```diff
-「相关主题」标题
+「相关讨论」标题
```

#### [`justoverclock-related-discussions.admin.relatedTitle-help`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/zh_Hans/?q=context%3A%3D%22justoverclock-related-discussions.admin.relatedTitle-help%22)

> Replace the default title for related discussion with your own

```diff
-自定义「相关主题」的标题
+自定义「相关讨论」的标题
```

#### [`justoverclock-related-discussions.forum.hasBestAnswer-title`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/zh_Hans/?q=context%3A%3D%22justoverclock-related-discussions.forum.hasBestAnswer-title%22)

> This discussion is marked as solved

```diff
-此主题已被标记为已解决
+此讨论已被标记为已解决
```

#### [`justoverclock-related-discussions.forum.postedOn`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/zh_Hans/?q=context%3A%3D%22justoverclock-related-discussions.forum.postedOn%22)

> on:

```diff
-于
+发布于：
```

#### [`justoverclock-related-discussions.forum.reldiscussion`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/zh_Hans/?q=context%3A%3D%22justoverclock-related-discussions.forum.reldiscussion%22)

> Suggested Discussions:

```diff
-相关主题：
+相关讨论：
```


### `justoverclock-welcomebox`

#### [`flarum-ext-welcomebox.forum.tooltipDisclist`](https://weblate.rob006.net/translate/flarum2/justoverclock-welcomebox/zh_Hans/?q=context%3A%3D%22flarum-ext-welcomebox.forum.tooltipDisclist%22)

> My Discussion List

```diff
-我的主题
+我的讨论
```


### `migratetoflarum-fake-data`

#### [`migratetoflarum-fake-data.api.no-discussions-matched`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.api.no-discussions-matched%22)

> No discussions matched

```diff
-主题不存在
+讨论不存在
```

#### [`migratetoflarum-fake-data.lib.generator.discussion-count`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.discussion-count%22)

> Number of discussions to create

```diff
-主题生成数量
+讨论生成数量
```

#### [`migratetoflarum-fake-data.lib.generator.discussion-tags`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.discussion-tags%22)

> Tags for new discussions

```diff
-主题标签
+讨论标签
```


### `ralkage-hcaptcha`

#### [`ralkage-hcaptcha.admin.settings.secret_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.secret_key_label%22)

> Secret Key

```diff
-Secret Key
+密钥
```

#### [`ralkage-hcaptcha.admin.settings.site_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.site_key_label%22)

> Site Key

```diff
-Site Key
+站点密钥
```


### `validation`

#### [`validation.attributes.content`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.attributes.content%22)

> content

```diff
-正文
+正文内容
```

#### [`validation.attributes.email`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.attributes.email%22)

> email

```diff
-邮箱
+电子邮箱
```

#### [`validation.boolean`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.boolean%22)

> The :attribute field must be true or false.

```diff
-:attribute 须是布尔值（true 或 false）。
+:attribute 必须是布尔值（true 或 false）。
```

:attribute <del>须是布尔值（true</del><ins>必须是布尔值（true</ins> 或 false）。

#### [`validation.distinct`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.distinct%22)

> The :attribute field has a duplicate value.

```diff
-:attribute 字段包含重复的值。
+:attribute 包含重复的值。
```

:attribute <del>字段包含重复的值。</del><ins>包含重复的值。</ins>

#### [`validation.exists`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.exists%22)

> The selected :attribute is invalid.

```diff
-您选择的 :attribute 无效。
+所选的 :attribute 无效。
```

<del>您选择的</del><ins>所选的</ins> :attribute 无效。

#### [`validation.in`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.in%22)

> The selected :attribute is invalid.

```diff
-您选择的 :attribute 无效。
+所选的 :attribute 无效。
```

<del>您选择的</del><ins>所选的</ins> :attribute 无效。

#### [`validation.not_in`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.not_in%22)

> The selected :attribute is invalid.

```diff
-您选择的 :attribute 无效。
+所选的 :attribute 无效。
```

<del>您选择的</del><ins>所选的</ins> :attribute 无效。

#### [`validation.present`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.present%22)

> The :attribute field must be present.

```diff
-:attribute 字段不能为空。
+:attribute 必须存在。
```

:attribute <del>字段不能为空。</del><ins>必须存在。</ins>

#### [`validation.prohibited`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.prohibited%22)

> The :attribute field is prohibited.

```diff
-:attribute 字段不可用。
+:attribute 被禁止使用。
```

:attribute <del>字段不可用。</del><ins>被禁止使用。</ins>

#### [`validation.prohibited_if`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.prohibited_if%22)

> The :attribute field is prohibited when :other is :value.

```diff
-:other 为 :value 时 :attribute 字段不可用。
+当 :other 是 :value 时，:attribute 被禁止使用。
```

<ins>当 </ins>:other <del>为</del><ins>是</ins> :value<del> 时</del> <del>:attribute</del><ins>时，:attribute</ins> <del>字段不可用。</del><ins>被禁止使用。</ins>

#### [`validation.prohibited_unless`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.prohibited_unless%22)

> The :attribute field is prohibited unless :other is in :values.

```diff
-:other 非 :value 时 :attribute 字段不可用。
+除非 :other 在 :values 中，否则 :attribute 被禁止使用。
```

<ins>除非 </ins>:other <del>非</del><ins>在</ins> <del>:value</del><ins>:values</ins> <del>时</del><ins>中，否则</ins> :attribute <del>字段不可用。</del><ins>被禁止使用。</ins>

#### [`validation.required_if`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.required_if%22)

> The :attribute field is required when :other is :value.

```diff
-当 :other 为 :value 时 :attribute 不能为空。
+当 :other 为 :value 时，:attribute 不能为空。
```

当 :other 为 :value <del>时 :attribute</del><ins>时，:attribute</ins> 不能为空。

#### [`validation.required_unless`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.required_unless%22)

> The :attribute field is required unless :other is in :values.

```diff
-:attribute 不能为空，除非 :other 是 :values。
+除非 :other 在 :values 中，否则 :attribute 不能为空。
```

<del>:attribute 不能为空，除非</del><ins>除非</ins> :other <del>是</del><ins>在</ins> <del>:values。</del><ins>:values 中，否则 :attribute 不能为空。</ins>

#### [`validation.required_with`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.required_with%22)

> The :attribute field is required when :values is present.

```diff
-当 :values 存在时 :attribute 不能为空。
+当 :values 存在时，:attribute 不能为空。
```

当 :values <del>存在时 :attribute</del><ins>存在时，:attribute</ins> 不能为空。

#### [`validation.required_with_all`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.required_with_all%22)

> The :attribute field is required when :values are present.

```diff
-当 :values 存在时 :attribute 不能为空。
+当 :values 存在时，:attribute 不能为空。
```

当 :values <del>存在时 :attribute</del><ins>存在时，:attribute</ins> 不能为空。

#### [`validation.required_without`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.required_without%22)

> The :attribute field is required when :values is not present.

```diff
-当 :values 不存在时 :attribute 不能为空。
+当 :values 不存在时，:attribute 不能为空。
```

当 :values <del>不存在时 :attribute</del><ins>不存在时，:attribute</ins> 不能为空。

#### [`validation.required_without_all`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.required_without_all%22)

> The :attribute field is required when none of :values are present.

```diff
-当 :values 不存在时 :attribute 不能为空。
+当 :values 均不存在时，:attribute 不能为空。
```

当 :values <del>不存在时 :attribute</del><ins>均不存在时，:attribute</ins> 不能为空。

#### [`validation.unique`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hans/?q=context%3A%3D%22validation.unique%22)

> The :attribute has already been taken.

```diff
-:attribute 已被采用。
+:attribute 已被占用。
```

:attribute <del>已被采用。</del><ins>已被占用。</ins>


### `walsgit-recycle-bin`

#### [`walsgit-recycle-bin.admin.bulk_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_actions%22)

> Actions for selected discussions : 

```diff
-批量操作： 
+已选讨论操作： 
```

#### [`walsgit-recycle-bin.admin.bulk_delete_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_delete_label%22)

> Delete selected discussions

```diff
-删除选择的主题帖
+删除所选讨论帖
```

#### [`walsgit-recycle-bin.admin.bulk_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_restore_label%22)

> Restore selected discussions

```diff
-还原选择的主题帖
+还原所选讨论帖
```

#### [`walsgit-recycle-bin.admin.delete_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this discussion (irreversible):

```diff
-确定要<u>永久删除</u>这个主题吗？此操作不可撤销：
+确定要<u>永久删除</u>这个讨论吗？此操作不可撤销：
```

#### [`walsgit-recycle-bin.admin.delete_discussion.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.delete_button%22)

> Forever delete this discussion

```diff
-永久删除
+永久删除此讨论
```

#### [`walsgit-recycle-bin.admin.delete_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.success%22)

> Successfully deleted the discussion

```diff
-已永久删除主题帖
+已永久删除讨论帖
```

#### [`walsgit-recycle-bin.admin.delete_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_tooltip%22)

> Delete discussion #{discussionId}

```diff
-删除主题
+删除讨论
```

#### [`walsgit-recycle-bin.admin.discussion_link_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_link_tooltip%22)

> View discussion

```diff
-查看
+查看讨论
```

#### [`walsgit-recycle-bin.admin.discussion_title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_title%22)

> Discussion title

```diff
-标题
+讨论标题
```

#### [`walsgit-recycle-bin.admin.empty_list`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.empty_list%22)

> No discussions in the recycle bin.

```diff
-暂无主题帖。
+回收站中暂无讨论。
```

#### [`walsgit-recycle-bin.admin.hidden_discussions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_discussions%22)

> Hidden discussions

```diff
-已隐藏主题
+已隐藏讨论
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.submit_button%22)

> Forever delete these discussions

```diff
-永久删除主题帖
+永久删除讨论帖
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.success%22)

> Successfully deleted the selected discussions

```diff
-已永久删除选择的主题帖
+已永久删除所选讨论帖
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.text_end%22)

>  selected discussions?

```diff
- 已选择的主题帖?
+ 个已选择的讨论帖吗？
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.text_start%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; these 

```diff
-确定要<u>永久删除</u> 
+确定要<u>永久删除</u>这 
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.title%22)

> Forever delete these discussions

```diff
-永久删除主题帖
+永久删除讨论帖
```

#### [`walsgit-recycle-bin.admin.mass_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_help_text%22)

> Please wait for page refresh after confirming mass restore or delete

```diff
-请在批量操作后耐心等待页面刷新
+执行批量还原或删除后，请耐心等待页面自动刷新
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.submit_button%22)

> Restore these discussions

```diff
-还原主题帖
+还原讨论帖
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.success%22)

> Successfully restored the selected discussions

```diff
-已成功还原选择的主题帖
+已成功还原所选讨论帖
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_end%22)

>  selected discussions?

```diff
- 已选择的主题帖？
+ 个已选择的讨论帖吗？
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_start%22)

> Are you sure you want to restore these 

```diff
-确定要还原 
+确定要还原这 
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.title%22)

> Restore the selected discussions

```diff
-还原选择的主题帖
+还原所选讨论帖
```

#### [`walsgit-recycle-bin.admin.pagination.go_to_page_textbox_a11y_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.go_to_page_textbox_a11y_label%22)

> Go directly to page number

```diff
-跳转到
+跳转到页码
```

#### [`walsgit-recycle-bin.admin.pagination.page_counter`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.page_counter%22)

> Page {current} of {total}

```diff
-第 {current} 页/共 {total} 页
+第 {current} 页 / 共 {total} 页
```

第 {current} <del>页/共</del><ins>页 / 共</ins> {total} 页

#### [`walsgit-recycle-bin.admin.restore_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.confirmation%22)

> Are you sure you want to restore this discussion:

```diff
-确定要还原这个主题帖：
+确定要还原这个讨论帖吗：
```

#### [`walsgit-recycle-bin.admin.restore_discussion.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.restore_button%22)

> Restore this discussion

```diff
-还原
+还原此讨论
```

#### [`walsgit-recycle-bin.admin.restore_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.success%22)

> Successfully restored the discussion

```diff
-已成功还原主题帖
+已成功还原讨论帖
```

#### [`walsgit-recycle-bin.admin.restore_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.title%22)

> Restore discussion

```diff
-还原主题
+还原讨论
```

#### [`walsgit-recycle-bin.admin.restore_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_tooltip%22)

> Restore discussion #{discussionId}

```diff
-还原主题
+还原讨论
```

#### [`walsgit-recycle-bin.admin.search_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_help_text%22)

> Searches for words in titles as well as in the messages of the discussions

```diff
-支持搜索主题标题和回帖内容关键词
+支持搜索讨论标题及讨论内容关键词
```

#### [`walsgit-recycle-bin.admin.search_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_placeholder%22)

> Search for a discussion

```diff
-搜索主题帖
+搜索讨论帖
```

#### [`walsgit-recycle-bin.admin.total_hidden_discussions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_discussions%22)

> Total hidden discussions

```diff
-隐藏帖总数
+已隐藏讨论总数
```


### `yippy-auth-ldap`

#### [`yippy-auth-ldap.forum.errors.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.csrf_token_mismatch%22)

> You have been inactive for too long, please refresh the page and try again

```diff
-您已经长时间未活动，请刷新页面并重试。
+您已经长时间未活动，请刷新页面并重试
```


### `yippy-tag-with-themes`

#### [`yippy-tag-with-themes.admin.designs.add`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.add%22)

> Add Design for Tags

```diff
-添加样式
+添加标签设计
```

#### [`yippy-tag-with-themes.admin.designs.banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.banner%22)

> Design Theme {index} - \[{isEnabled}\]

```diff
-主题 {index}
+设计主题 {index} - [{isEnabled}]
```

<del>主题</del><ins>设计主题</ins> {index}<ins> - \[{isEnabled}\]</ins>

#### [`yippy-tag-with-themes.admin.designs.data.child_background_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.child_background_color%22)

> Edit Child Background Color

```diff
-编辑子背景色
+编辑次要背景颜色
```

#### [`yippy-tag-with-themes.admin.designs.data.child_font_class`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.child_font_class%22)

> Edit Child Font

```diff
-编辑子字体
+编辑次要字体
```

#### [`yippy-tag-with-themes.admin.designs.data.is_enabled`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.is_enabled%22)

> Enable Design Theme

```diff
-启用主题设计
+启用此设计主题
```

#### [`yippy-tag-with-themes.admin.designs.data.outline_background_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.outline_background_color%22)

> Edit Outline Color

```diff
-编辑轮廓色
+编辑轮廓颜色
```

#### [`yippy-tag-with-themes.admin.designs.data.primary_background_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.primary_background_color%22)

> Edit Primary Background Color

```diff
-编辑主背景色
+编辑主要背景颜色
```

#### [`yippy-tag-with-themes.admin.designs.data.primary_font_class`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.primary_font_class%22)

> Edit Primary Font

```diff
-编辑主字体
+编辑主要字体
```

#### [`yippy-tag-with-themes.admin.designs.data.secondary_font_class`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.secondary_font_class%22)

> Edit Secondary Font

```diff
-编辑次字体
+编辑辅助字体样式
```

#### [`yippy-tag-with-themes.admin.designs.data.tags`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.tags%22)

> Selected Primary Tags

```diff
-选择主标签
+已选主标签
```

#### [`yippy-tag-with-themes.admin.designs.data.tags_help`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.tags_help%22)

> Choose one or more tag for this customised design theme

```diff
-选择要应用此自定义样式的标签
+为此自定义设计主题选择一个或多个标签
```

#### [`yippy-tag-with-themes.admin.designs.data.unread_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.unread_color%22)

> Edit Unread Background Color

```diff
-编辑未读背景色
+编辑未读状态背景颜色
```

#### [`yippy-tag-with-themes.admin.designs.description`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.description%22)

> Provide a list of rules for displaying different themes for specific tags

```diff
-为不同的标签应用不同的样式
+为特定标签配置不同的显示主题规则
```

#### [`yippy-tag-with-themes.admin.designs.title`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.title%22)

> Customised Design Theme for Tags

```diff
-自定义标签主题
+标签自定义设计主题
```

#### [`yippy-tag-with-themes.admin.helps.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.design_default%22)

> Select a default design layout

```diff
-选择一个默认布局
+选择一个默认的设计布局
```

#### [`yippy-tag-with-themes.admin.labels.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.design_default%22)

> Discussion Design Layout

```diff
-主题帖布局
+讨论页设计布局
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic%22)

> Basic

```diff
-基础
+基础样式
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_banner%22)

> Basic (Primary Banner)

```diff
-基础（突出页脚）
+基础（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline_banner%22)

> Basic Outline (Primary Banner)

```diff
-基础轮廓（突出页脚）
+基础轮廓（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline_tab%22)

> Basic Outline (Primary Tab)

```diff
-基础轮廓（突出页签）
+基础轮廓（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline_tag%22)

> Basic Outline (Primary Tag)

```diff
-基础轮廓（突出标签）
+基础轮廓（主标签样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tab%22)

> Basic (Primary Tab)

```diff
-基础（突出页签）
+基础（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tag%22)

> Basic (Primary Tag)

```diff
-基础（突出标签）
+基础（主标签样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat%22)

> Flat

```diff
-扁平
+扁平化
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_banner%22)

> Flat (Primary Banner)

```diff
-扁平（突出页脚）
+扁平化（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border%22)

> Flat Border

```diff
-扁平描边
+扁平化边框
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border_banner%22)

> Flat Border (Primary Banner)

```diff
-扁平描边（突出页脚）
+扁平化边框（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border_tab%22)

> Flat Border (Primary Tab)

```diff
-扁平描边（突出页签）
+扁平化边框（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border_tag%22)

> Flat Border (Primary Tag)

```diff
-扁平描边（突出标签）
+扁平化边框（主标签样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_tab%22)

> Flat (Primary Tab)

```diff
-扁平（突出页签）
+扁平化（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_tag%22)

> Flat (Primary Tag)

```diff
-扁平（突出标签）
+扁平化（主标签样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note%22)

> Sticky Note

```diff
-便笺
+便签模式
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_banner%22)

> Sticky Note (Primary Banner)

```diff
-便笺（突出页脚）
+便签（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline%22)

> Sticky Note Outline

```diff
-便笺轮廓
+便签轮廓
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner%22)

> Sticky Note Outline (Primary Banner)

```diff
-便笺轮廓（突出页脚）
+便签轮廓（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab%22)

> Sticky Note Outline (Primary Tab)

```diff
-便笺轮廓（突出页签）
+便签轮廓（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag%22)

> Sticky Note Outline (Primary Tag)

```diff
-便笺轮廓（突出标签）
+便签轮廓（主标签样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tab%22)

> Sticky Note (Primary Tab)

```diff
-便笺（突出页签）
+便签（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tag%22)

> Sticky Note (Primary Tag)

```diff
-便笺（突出标签）
+便签（主标签样式）
```


## Missing translations

These strings are translated only in `zh_Hans`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `zh_Hans`.


### `acpl-lscache` (missing)

#### [`acpl-lscache.admin.permissions.purge`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.permissions.purge%22)

> =&gt; acpl-lscache.ref.purge\_cache

```diff
+=> acpl-lscache.ref.purge_cache
```

#### [`acpl-lscache.admin.status_codes_cache_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.status_codes_cache_help%22)

> Specify an HTTP status code and the number of seconds to cache that page, separated by a space. One per line.

```diff
+指定 HTTP 状态码以及该页面的缓存时间（秒），两者用空格分隔，每行一个。
```

#### [`acpl-lscache.admin.status_codes_cache_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.status_codes_cache_label%22)

> Default HTTP Status Code Page TTL

```diff
+默认 HTTP 状态码页面缓存时间
```

#### [`acpl-lscache.admin.test_failed_alert`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.admin.test_failed_alert%22)

> It looks like your server does not support LSCache. Check your server configuration. Detected server: &lt;b&gt;{server}&lt;/b&gt;, detected LiteSpeed type: &lt;b&gt;{type}&lt;/b&gt;.

```diff
+您的服务器似乎不支持 LSCache。请检查服务器配置。检测到的服务器：<b>{server}</b>，检测到的 LiteSpeed 类型：<b>{type}</b>。
```

#### [`acpl-lscache.forum.purge.discussion`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.forum.purge.discussion%22)

> =&gt; acpl-lscache.ref.purge\_cache

```diff
+=> acpl-lscache.ref.purge_cache
```

#### [`acpl-lscache.lib.purge_all_success`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.lib.purge_all_success%22)

> Notified LiteSpeed Server to purge all LSCache entries.

```diff
+已通知 LiteSpeed 服务器清除所有 LSCache 缓存。
```

#### [`acpl-lscache.lib.purge_success`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.lib.purge_success%22)

> Notified LiteSpeed Server to purge LSCache entries.

```diff
+已通知 LiteSpeed 服务器清除 LSCache 缓存。
```

#### [`acpl-lscache.ref.purge_cache`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/zh_Hans/?q=context%3A%3D%22acpl-lscache.ref.purge_cache%22)

> Purge LSCache

```diff
+清除 LSCache 缓存
```


### `datlechin-passkey` (missing)

#### [`datlechin-passkey.forum.log_in.cancelled`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hans/?q=context%3A%3D%22datlechin-passkey.forum.log_in.cancelled%22)

> Passkey sign-in was cancelled.

```diff
+Passkey登录已被取消。
```

#### [`datlechin-passkey.forum.log_in.failed`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hans/?q=context%3A%3D%22datlechin-passkey.forum.log_in.failed%22)

> Could not verify your passkey. Please try again.

```diff
+无法验证你的Passkey，请再试一次。
```

#### [`datlechin-passkey.forum.log_in.passkey_unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hans/?q=context%3A%3D%22datlechin-passkey.forum.log_in.passkey_unsupported%22)

> This browser does not support passkeys.

```diff
+此浏览器不支持Passkeys。
```

#### [`datlechin-passkey.forum.log_in.sign_in_with_passkey`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hans/?q=context%3A%3D%22datlechin-passkey.forum.log_in.sign_in_with_passkey%22)

> Sign in with passkey

```diff
+使用密钥登录
```

#### [`datlechin-passkey.forum.log_in.verifying`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hans/?q=context%3A%3D%22datlechin-passkey.forum.log_in.verifying%22)

> Verifying passkey...

```diff
+验证Passkey...
```


### `ekumanov-inline-audio` (missing)

#### [`ekumanov-inline-audio.admin.settings.auto_play`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/zh_Hans/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.auto_play%22)

> Start playing immediately when a filename is clicked

```diff
+点击文件名后立即自动播放
```

#### [`ekumanov-inline-audio.admin.settings.show_download_button`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/zh_Hans/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_download_button%22)

> Show download button on player bar

```diff
+在播放条上显示下载按钮
```

#### [`ekumanov-inline-audio.admin.settings.show_right_click_download`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/zh_Hans/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_right_click_download%22)

> Allow right-click on filename to save the file

```diff
+允许通过右键点击文件名保存文件
```

#### [`ekumanov-inline-audio.admin.settings.strip_upload_prefix`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/zh_Hans/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.strip_upload_prefix%22)

> Hide numeric prefix from uploaded filenames (e.g. "1774205518-685373-song.mp3" → "song.mp3")

```diff
+隐藏已上传文件名的数字前缀 (例如 \"1774205518-685373-song.mp3\" → \"song.mp3\")
```

#### [`ekumanov-inline-audio.forum.bbcode_description`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/zh_Hans/?q=context%3A%3D%22ekumanov-inline-audio.forum.bbcode_description%22)

> Embed an audio player: \[player\]URL\[/player\]

```diff
+嵌入音频播放器：[player]链接地址[/player]
```


### `ekumanov-new-posts-notice` (missing)

#### [`ekumanov-new-posts-notice.forum.new_posts_plural`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/zh_Hans/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_plural%22)

> {count} new replies were added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read them first (your draft stays open)

```diff
+在您撰写期间新增了 {count} 条回复。
+
+确定 → 仍然发布回复
+取消 → 先查看新回复（草稿将被保留）
```

#### [`ekumanov-new-posts-notice.forum.new_posts_single`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/zh_Hans/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_single%22)

> 1 new reply was added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read it first (your draft stays open)

```diff
+在您撰写期间新增了 1 条回复。
+
+确定 → 仍然发布回复
+取消 → 先查看新回复（草稿将被保留）
```


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+操作
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+配置
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+配置受限权限的用户可以查看的内容
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+需要的扩展程序 {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+访问限制设置
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+查看操作记录
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+查看受限操作记录
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+查看 IP 地址
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+查看操作日志（以用户为主体）
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+操作日志
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+操作日志
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+操作日志（账户编辑）
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+操作者审计
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+操作日志
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+讨论审计
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+用户审计
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+清除 {deleted_count}操作日志中的条目
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+手动清除缓存
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+访问令牌
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+API 密钥
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+命令行
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+网络会话
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+未知客户端
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+显示来自相同操作者的日志
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+显示来自该操作者的日志
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+显示来自该客户端类型的日志
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+显示影响同一讨论的日志
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+显示来自该IP地址的日志
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+显示影响同一用户的日志
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+隐藏原始日志
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+显示原始日志
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+讨论#{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+群组#{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+请求#{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+标签#{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+用户#{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+开始的讨论{discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+删除讨论{discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+隐藏讨论{discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+讨论标题已从 {old_title} 更改为 {new_title}
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+恢复讨论 {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+无符合条件的结果
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+禁用扩展{package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+启用扩展{package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+卸载扩展{package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+应用
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+清除筛选
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+筛选日志
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+操作类型，例如 action:post.created。
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+谁执行了此操作。对于系统操作或未经身份验证的操作，请使用 actor:guest。
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+这个请求是如何制造的。
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+按 ID 影响特定讨论的操作。
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+发起此操作的 IP 地址。
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+用户及其操作受影响的部分，按用户名确定。
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+筛选条件：
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+评论
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+帖子
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+用逗号来分隔即可匹配其中任何一个，例如：action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+在筛选条件前加上减号（-）可以排除匹配项，例如：-client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+搜索帮助
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+加载更多
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+（无原因）
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+（没有相关值）
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+已将权限 {permission} 从 {old_groups} 修改为 {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+已在 {discussion} 中创建了 {post}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+已删除 {postuser} 在 {discussion} 中的 {post}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+隐藏了 {postuser} 在 {discussion} 中的 {post}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+已恢复 {postuser} 在 {discussion} 中的 {post}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+修改了{postuser}在{discussion}中的{post}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+刷新
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+已更改设置{key}
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+已将设置{key}的值从{old_value}更改为{new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+已手动激活 {username} 的帐户
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+已通过确认链接激活 {username} 的帐户
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+更改了{username}的头像
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+移除了{username}的头像
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+已创建{username}的账户
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+删除了用户{username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+已请求将 {username} 的电子邮件地址更改为 {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+已将 {username} 的电子邮件地址从 {old_email} 更改为 {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+已将 {username} 所在群组从 {old_groups} 更改为 {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+已登录 {username} 帐户
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+已使用 {provider} 登录帐户 {username}
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+已登出帐户 {username}
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+请求更改 {username} 的密码
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+已更改{username}的密码
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+用户 {username} 已请求重置密码
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+请求重置 {email} 的密码（没有匹配的帐户）
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+已将认证方式 {provider} 连接到 {username} 帐户
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+已将 {username} 的用户名从 {old_username} 更改为 {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `fof-anti-spam` (missing)

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
+已拦截用户 {username} ({email}) 从 {ip} 注册
```

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
+已将 {username} 标记为垃圾邮件发送者
```


### `fof-best-answer` (missing)

#### [`flarum-audit.lib.browser.discussion.best_answer_set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_set%22)

> Set {post} as best answer in {discussion}

```diff
+将 {post} 设置为 {discussion} 中的最佳答案
```

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
+取消设置{post}为 {discussion} 中 的最佳答案
```

#### [`fof-best-answer.admin.permissions.allow_select_own_post`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/zh_Hans/?q=context%3A%3D%22fof-best-answer.admin.permissions.allow_select_own_post%22)

> Select own post as Best Answer

```diff
+允许将自己的回复设为最佳回答
```


### `fof-categories` (missing)

#### [`fof-categories.admin.basics.categories_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.basics.categories_label%22)

> Categories

```diff
+分类
```

#### [`fof-categories.admin.headings.child_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.headings.child_display%22)

> Child Category Display

```diff
+子分类显示
```

#### [`fof-categories.admin.headings.layout`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.headings.layout%22)

> Layout

```diff
+布局
```

#### [`fof-categories.admin.headings.nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.headings.nav%22)

> Navigation

```diff
+导航
```

#### [`fof-categories.admin.headings.parent_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.headings.parent_display%22)

> Parent Category Display

```diff
+父分类显示
```

#### [`fof-categories.admin.headings.performance`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.headings.performance%22)

> Performance

```diff
+性能
```

#### [`fof-categories.admin.help.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.help.child_bare_icon%22)

> Should icons on child categories be displayed without a circular background?

```diff
+子分类上的图标是否应在没有圆形背景的情况下显示？
```

#### [`fof-categories.admin.help.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.help.full_page_desktop%22)

> Should the sidebar nav menu be collapsed to a row (like on the traditional tags page)? This will also hide widgets (such as Friends of Flarum Forum Statistics) from the categories page navbar.

```diff
+侧边栏导航菜单是否应折叠为一行（如传统的标签页面）？这还会在分类页面导航栏中隐藏组件（如 Friends of Flarum 论坛统计）。
```

#### [`fof-categories.admin.help.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.help.small_forum_optimized%22)

> This will give more accurate discussion/post counts, but will slow medium and large forums dramatically.

```diff
+这将提供更准确的讨论/帖子计数，但会大幅降低中大型论坛的速度。
```

#### [`fof-categories.admin.labels.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.child_bare_icon%22)

> Bare child icons?

```diff
+使用无背景的子图标？
```

#### [`fof-categories.admin.labels.compact_mobile_mode`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.compact_mobile_mode%22)

> Compact mobile mode

```diff
+移动端紧凑模式
```

#### [`fof-categories.admin.labels.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.full_page_desktop%22)

> Full page desktop?

```diff
+桌面端全屏显示？
```

#### [`fof-categories.admin.labels.keep_tags_nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.keep_tags_nav%22)

> Keep the tags page link in the nav sidebar?

```diff
+在侧边导航栏保留标签页面链接？
```

#### [`fof-categories.admin.labels.parent_remove_description`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_description%22)

> Hide descriptions for top-level tags?

```diff
+隐藏顶级标签描述？
```

#### [`fof-categories.admin.labels.parent_remove_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_icon%22)

> Hide icons for top-level tags?

```diff
+隐藏顶级标签图标？
```

#### [`fof-categories.admin.labels.parent_remove_last_discussion`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_last_discussion%22)

> Hide most recent discussions for top-level tags?

```diff
+隐藏顶级标签的最新讨论？
```

#### [`fof-categories.admin.labels.parent_remove_stats`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_stats%22)

> Hide stats for top-level tags?

```diff
+隐藏顶级标签统计数据？
```

#### [`fof-categories.admin.labels.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.labels.small_forum_optimized%22)

> Optimize for small forums?

```diff
+为小型论坛优化？
```

#### [`fof-categories.admin.title`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.admin.title%22)

> Categories Settings

```diff
+分类设置
```

#### [`fof-categories.forum.all_categories.meta_description_text`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.all_categories.meta_description_text%22)

> All Categories

```diff
+所有分类
```

#### [`fof-categories.forum.all_categories.meta_title_text`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.all_categories.meta_title_text%22)

> =&gt; fof-categories.ref.categories

```diff
+=> fof-categories.ref.categories
```

#### [`fof-categories.forum.header.back_to_categories_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.header.back_to_categories_tooltip%22)

> Back to Categories

```diff
+返回分类
```

#### [`fof-categories.forum.index.categories_link`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.index.categories_link%22)

> =&gt; fof-categories.ref.categories

```diff
+=> fof-categories.ref.categories
```

#### [`fof-categories.forum.last_discussion_widget.no_discussions`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.last_discussion_widget.no_discussions%22)

> No Discussions (Yet!)

```diff
+暂无讨论（抢个沙发吧！）
```

#### [`fof-categories.forum.stat-widgets.discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.stat-widgets.discussion_label%22)

> Discussions

```diff
+讨论
```

#### [`fof-categories.forum.stat-widgets.post_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.forum.stat-widgets.post_label%22)

> Posts

```diff
+帖子
```

#### [`fof-categories.ref.categories`](https://weblate.rob006.net/translate/flarum2/fof-categories/zh_Hans/?q=context%3A%3D%22fof-categories.ref.categories%22)

> Categories

```diff
+分类
```


### `fof-checklist` (missing)

#### [`fof-checklist.admin.settings.cross_out_completed_items`](https://weblate.rob006.net/translate/flarum2/fof-checklist/zh_Hans/?q=context%3A%3D%22fof-checklist.admin.settings.cross_out_completed_items%22)

> Cross out completed checklist items?

```diff
+划掉已完成项?
```

#### [`fof-checklist.lib.composer.checklist_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-checklist/zh_Hans/?q=context%3A%3D%22fof-checklist.lib.composer.checklist_tooltip%22)

> Toggle Checklist

```diff
+添加任务清单
```


### `fof-doorman` (missing)

#### [`fof-doorman.admin.list.columns.activates_user`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.list.columns.activates_user%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.label

```diff
+=> fof-doorman.admin.ref.fields.activates_user.label
```

#### [`fof-doorman.admin.list.columns.group`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.list.columns.group%22)

> =&gt; fof-doorman.admin.ref.fields.group.label

```diff
+=> fof-doorman.admin.ref.fields.group.label
```

#### [`fof-doorman.admin.list.columns.key`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.list.columns.key%22)

> =&gt; fof-doorman.admin.ref.fields.key.label

```diff
+=> fof-doorman.admin.ref.fields.key.label
```

#### [`fof-doorman.admin.list.columns.max_uses`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.list.columns.max_uses%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.label

```diff
+=> fof-doorman.admin.ref.fields.max_uses.label
```

#### [`fof-doorman.admin.list.content.invalid_column`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.list.content.invalid_column%22)

> =&gt; core.admin.users.grid.invalid\_column\_content

```diff
+=> core.admin.users.grid.invalid_column_content
```

#### [`fof-doorman.admin.list.content.no_group`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.list.content.no_group%22)

> =&gt; core.admin.users.grid.columns.group\_badges.no\_badges

```diff
+=> core.admin.users.grid.columns.group_badges.no_badges
```

#### [`fof-doorman.admin.modals.create_doorkey.activates_user.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.activates_user.help%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.help

```diff
+=> fof-doorman.admin.ref.fields.activates_user.help
```

#### [`fof-doorman.admin.modals.create_doorkey.activates_user.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.activates_user.label%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.label

```diff
+=> fof-doorman.admin.ref.fields.activates_user.label
```

#### [`fof-doorman.admin.modals.create_doorkey.group.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.group.help%22)

> =&gt; fof-doorman.admin.ref.fields.group.help

```diff
+fof-doorman.admin.modals.create_doorkey.group.help
```

#### [`fof-doorman.admin.modals.create_doorkey.group.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.group.label%22)

> =&gt; fof-doorman.admin.ref.fields.group.label

```diff
+=> fof-doorman.admin.ref.fields.group.label
```

#### [`fof-doorman.admin.modals.create_doorkey.key.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.key.help%22)

> =&gt; fof-doorman.admin.ref.fields.key.help

```diff
+=> fof-doorman.admin.ref.fields.key.help
```

#### [`fof-doorman.admin.modals.create_doorkey.key.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.key.label%22)

> =&gt; fof-doorman.admin.ref.fields.key.label

```diff
+=> fof-doorman.admin.ref.fields.key.label
```

#### [`fof-doorman.admin.modals.create_doorkey.max_uses.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.max_uses.help%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.help

```diff
+=> fof-doorman.admin.ref.fields.max_uses.help
```

#### [`fof-doorman.admin.modals.create_doorkey.max_uses.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.max_uses.label%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.label

```diff
+=> fof-doorman.admin.ref.fields.max_uses.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.activates_user.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.activates_user.help%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.help

```diff
+=> fof-doorman.admin.ref.fields.activates_user.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.activates_user.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.activates_user.label%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.label

```diff
+=> fof-doorman.admin.ref.fields.activates_user.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.group.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.group.help%22)

> =&gt; fof-doorman.admin.ref.fields.group.help

```diff
+=> fof-doorman.admin.ref.fields.group.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.group.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.group.label%22)

> =&gt; fof-doorman.admin.ref.fields.group.label

```diff
+=> fof-doorman.admin.ref.fields.group.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.key.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.key.help%22)

> =&gt; fof-doorman.admin.ref.fields.key.help

```diff
+=> fof-doorman.admin.ref.fields.key.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.key.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.key.label%22)

> =&gt; fof-doorman.admin.ref.fields.key.label

```diff
+=> fof-doorman.admin.ref.fields.key.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.max_uses.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.max_uses.help%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.help

```diff
+=> fof-doorman.admin.ref.fields.max_uses.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.max_uses.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/zh_Hans/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.max_uses.label%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.label

```diff
+=> fof-doorman.admin.ref.fields.max_uses.label
```


### `fof-forum-statistics-widget` (missing)

#### [`fof-forum-statistics-widget.admin.settings.classic_look_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/zh_Hans/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.classic_look_help%22)

> Restore the original widget appearance used before the fof/forum-widgets-core integration.

```diff
+恢复使用集成为fof/forum-widgets-core之前的小组件外观。
```

#### [`fof-forum-statistics-widget.admin.settings.classic_look_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/zh_Hans/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.classic_look_label%22)

> Classic Look

```diff
+经典样式
```


### `fof-forum-stats-widget` (missing)

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/zh_Hans/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
+对于大数字（0-2）显示的小数点位数。
```

#### [`fof-forum-stats-widget.admin.settings.decimal_places.label`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/zh_Hans/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.label%22)

> Decimal Places

```diff
+小数位数
```

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/zh_Hans/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
+帖子
```

#### [`fof-forum-stats-widget.forum.widget.stats.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/zh_Hans/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.discussion_count%22)

> Discussions

```diff
+讨论
```

#### [`fof-forum-stats-widget.forum.widget.stats.user_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/zh_Hans/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.user_count%22)

> Users

```diff
+用户
```

#### [`fof-forum-stats-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/zh_Hans/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.title%22)

> Forum Stats

```diff
+论坛统计
```


### `fof-forum-widgets-core` (missing)

#### [`fof-forum-widgets-core.admin.cache_not_writable_warning`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/zh_Hans/?q=context%3A%3D%22fof-forum-widgets-core.admin.cache_not_writable_warning%22)

> Cache is currently not writable, this will prevent certain widgets from working. Please fix your storage directory's permissions.

```diff
+缓存目录目前没有写入权限，这会导致部分组件无法正常运行。请检查并修复存储目录的权限设置。
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/zh_Hans/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load%22)

> Prefer loading all widgets data with initial page response.

```diff
+推荐在页面初次响应时加载全部 Widget 数据。
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/zh_Hans/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help%22)

> Instead of loading widget data after initial page load by sending API requests, the data will be (when possible) loaded with the inital load.

```diff
+组件数据不再在初始页面加载完成后通过 API 请求获取，而是（在可能的情况下）与页面初始加载同步完成。
```


### `fof-geoip` (missing)

#### [`fof-geoip.admin.settings.allow_custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_help%22)

> When enabled, users can pick a country flag to display on their posts via their profile settings. A user-selected flag is shown to everyone and takes precedence over the IP-based flag. Requires "Show country flag for each post" to be enabled.

```diff
+启用此功能后，用户可以通过个人资料设置选择要在帖子中显示的国家/地区国旗。用户选择的国旗将对所有人显示，并且优先于基于 IP 地址的国旗。此功能需要启用“在每篇帖子中显示国家/地区国旗”选项。
```

#### [`fof-geoip.admin.settings.allow_custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_label%22)

> Allow users to choose a custom country flag

```diff
+允许用户选择自定义国旗
```

#### [`fof-geoip.admin.settings.error_code_prefix`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.error_code_prefix%22)

> Code:

```diff
+代码：
```

#### [`fof-geoip.admin.settings.error_prefix`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.error_prefix%22)

> Error:

```diff
+错误：
```

#### [`fof-geoip.admin.settings.raw_http_response_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.raw_http_response_label%22)

> Raw HTTP Response Body

```diff
+原始 HTTP 响应体
```

#### [`fof-geoip.admin.settings.request_options_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.request_options_label%22)

> Request Options

```diff
+请求选项
```

#### [`fof-geoip.admin.settings.request_url_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.request_url_label%22)

> Request URL

```diff
+请求 URL
```

#### [`fof-geoip.admin.settings.response_headers_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.response_headers_label%22)

> Response Headers

```diff
+响应头
```

#### [`fof-geoip.admin.settings.service_ipinfo-lite_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipinfo-lite_description%22)

> Use &lt;b&gt;https://ipinfo.io&lt;/b&gt; to retrieve IP information without any rate limiting or restrictions. Requires registration for a free API key.

```diff
+使用 <b>https://ipinfo.io</b> 获取 IP 信息，没有任何速率限制或约束。需要注册以获取免费 API 密钥。
```

#### [`fof-geoip.admin.settings.service_ipinfo-lite_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipinfo-lite_label%22)

> IPInfo Lite

```diff
+IPInfo Lite
```

#### [`fof-geoip.admin.settings.status_error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.status_error%22)

> ✗ Error

```diff
+✗ 错误
```

#### [`fof-geoip.admin.settings.status_success`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.status_success%22)

> ✓ Success

```diff
+✓ 成功
```

#### [`fof-geoip.admin.settings.status_unknown`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.status_unknown%22)

> Unknown

```diff
+未知
```

#### [`fof-geoip.admin.settings.test.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test.heading%22)

> Test Service Configuration

```diff
+测试服务配置
```

#### [`fof-geoip.admin.settings.test.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test.help%22)

> Test your IP lookup service configuration with a sample IP address. Make sure to save your settings first before testing.

```diff
+使用示例 IP 地址测试您的 IP 查询服务配置。请确保在测试前先保存设置。
```

#### [`fof-geoip.admin.settings.test_button`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_button%22)

> Test Service

```diff
+测试服务
```

#### [`fof-geoip.admin.settings.test_error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_error%22)

> An error occurred while testing the service.

```diff
+测试服务时发生错误。
```

#### [`fof-geoip.admin.settings.test_error_details_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_error_details_label%22)

> Error Details:

```diff
+错误详情：
```

#### [`fof-geoip.admin.settings.test_http_status_code_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_http_status_code_label%22)

> HTTP Status Code:

```diff
+HTTP 状态码：
```

#### [`fof-geoip.admin.settings.test_ip_required`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_ip_required%22)

> Please enter an IP address to test.

```diff
+请输入要测试的 IP 地址。
```

#### [`fof-geoip.admin.settings.test_processed_service_response_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_processed_service_response_label%22)

> Processed Service Response:

```diff
+已处理的服务响应：
```

#### [`fof-geoip.admin.settings.test_response_time_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_response_time_label%22)

> Response Time:

```diff
+响应时间：
```

#### [`fof-geoip.admin.settings.test_result_title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_result_title%22)

> Test Result

```diff
+测试结果
```

#### [`fof-geoip.admin.settings.test_service_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_help%22)

> Enter an IPv4 or IPv6 address to test your current service configuration.

```diff
+输入 IPv4 或 IPv6 地址以测试您当前的服务配置。
```

#### [`fof-geoip.admin.settings.test_service_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_label%22)

> Test IP Lookup Service

```diff
+测试 IP 查询服务
```

#### [`fof-geoip.admin.settings.test_service_label_result`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_label_result%22)

> Service:

```diff
+服务：
```

#### [`fof-geoip.admin.settings.test_status_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_status_label%22)

> Status:

```diff
+状态：
```

#### [`fof-geoip.admin.settings.test_timestamp_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.test_timestamp_label%22)

> Timestamp:

```diff
+时间戳：
```

#### [`fof-geoip.admin.settings.testing`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.admin.settings.testing%22)

> Testing...

```diff
+正在测试...
```

#### [`fof-geoip.forum.user.settings.custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_help%22)

> Choose a country flag to display on your posts. This flag is visible to everyone and is shown instead of the flag based on your IP address.

```diff
+选择一个国家/地区的国旗显示在您的帖子中。此国旗对所有人可见，并将替换根据您的 IP 地址显示的国旗。
```

#### [`fof-geoip.forum.user.settings.custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_label%22)

> Custom country flag

```diff
+自定义国旗
```

#### [`fof-geoip.lib.alerts.ip_copied`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.alerts.ip_copied%22)

> Copied IP Address

```diff
+已复制的IP地址
```

#### [`fof-geoip.lib.copy_ip_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.copy_ip_label%22)

> Copy IP to clipboard

```diff
+复制IP地址到剪切板
```

#### [`fof-geoip.lib.custom_flag.none`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.custom_flag.none%22)

> No custom flag

```diff
+没有自定义旗帜
```

#### [`fof-geoip.lib.map_button_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_button_label%22)

> IP Info

```diff
+IP信息
```

#### [`fof-geoip.lib.map_modal.as`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.as%22)

> ASN

```diff
+ASN
```

#### [`fof-geoip.lib.map_modal.country_code`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.country_code%22)

> Country Code

```diff
+国家代码
```

#### [`fof-geoip.lib.map_modal.error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.error%22)

> Error

```diff
+错误
```

#### [`fof-geoip.lib.map_modal.ip_address`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.ip_address%22)

> IP Address

```diff
+IP地址
```

#### [`fof-geoip.lib.map_modal.isp`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.isp%22)

> ISP

```diff
+运营商
```

#### [`fof-geoip.lib.map_modal.mobile`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.mobile%22)

> Cellular network

```diff
+蜂窝网络
```

#### [`fof-geoip.lib.map_modal.not_enough_data`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.not_enough_data%22)

> Not enough data to draw a map

```diff
+没有足够的数据绘制地图
```

#### [`fof-geoip.lib.map_modal.organization`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.organization%22)

> Organization

```diff
+组织
```

#### [`fof-geoip.lib.map_modal.threat_level`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_level%22)

> Threat Level

```diff
+威胁等级
```

#### [`fof-geoip.lib.map_modal.threat_types`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_types%22)

> Threat Types

```diff
+威胁类型
```

#### [`fof-geoip.lib.map_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.title%22)

> IP Information

```diff
+IP信息
```

#### [`fof-geoip.lib.map_modal.zip_code`](https://weblate.rob006.net/translate/flarum2/fof-geoip/zh_Hans/?q=context%3A%3D%22fof-geoip.lib.map_modal.zip_code%22)

> Zip Code

```diff
+邮政编码
```


### `fof-github-sponsors` (missing)

#### [`fof-github-sponsors.admin.settings.account_type_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/zh_Hans/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_help%22)

> Select whether you're tracking sponsors for a personal GitHub user account or an organization account.

```diff
+选择您是要追踪 GitHub 个人账户还是组织账户的赞助者。
```

#### [`fof-github-sponsors.admin.settings.api_token_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/zh_Hans/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_help%22)

> Create a personal access token at &lt;a&gt;https://github.com/settings/tokens/new&lt;/a&gt; with the &lt;code&gt;user&lt;/code&gt; and &lt;code&gt;read:org&lt;/code&gt; scopes. This token is used to fetch your sponsor information from GitHub.

```diff
+在 <a>https://github.com/settings/tokens/new</a> 创建一个具有 <code>user</code> 和 <code>read:org</code> 权限范围的个人访问令牌 (PAT)。此令牌用于从 GitHub 获取您的赞助者信息。
```

#### [`fof-github-sponsors.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/zh_Hans/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_help%22)

> Select which Flarum user group sponsors should be added to. Users will be automatically added when they become sponsors and removed when they stop sponsoring.

```diff
+选择赞助者应被加入的 Flarum 用户组。当用户开始赞助时会自动加入该组，停止赞助时会自动移除。
```

#### [`fof-github-sponsors.admin.settings.login_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/zh_Hans/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_help%22)

> Enter your GitHub username (for user accounts) or organization name (for organizations). This is the account whose sponsors will be synchronized.

```diff
+输入您的 GitHub 用户名（针对个人账户）或组织名称（针对组织）。系统将同步该账户下的赞助者信息。
```


### `fof-horizon` (missing)

#### [`fof-horizon.admin.stats.data.failure-rate`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.failure-rate%22)

> Failure Rate

```diff
+失败率
```

#### [`fof-horizon.admin.stats.data.max-wait-queue`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.max-wait-queue%22)

> Queue: {queue}

```diff
+队列: {queue}
```

#### [`fof-horizon.admin.stats.data.redis-blocked-clients`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.redis-blocked-clients%22)

> Blocked Clients

```diff
+阻塞客户端
```

#### [`fof-horizon.admin.stats.data.redis-connected-clients`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.redis-connected-clients%22)

> Connected Clients

```diff
+已连接客户端
```

#### [`fof-horizon.admin.stats.data.redis-memory-usage`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.redis-memory-usage%22)

> Cache store Memory Usage

```diff
+缓存存储内存使用量
```

#### [`fof-horizon.admin.stats.data.redis-ops-per-sec`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.redis-ops-per-sec%22)

> Ops Per Second

```diff
+每秒操作数
```

#### [`fof-horizon.admin.stats.data.success-rate`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.data.success-rate%22)

> Success Rate

```diff
+成功率
```

#### [`fof-horizon.admin.stats.error.fetch_failed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.error.fetch_failed%22)

> Unable to fetch Horizon statistics. Please check your Redis configuration.

```diff
+无法获取 Horizon 统计数据。请检查您的 Redis 配置。
```

#### [`fof-horizon.admin.stats.error.setup_docs`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.error.setup_docs%22)

> View Redis Setup Documentation

```diff
+查看 Redis 设置文档
```

#### [`fof-horizon.admin.stats.error.title`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.error.title%22)

> Connection Error

```diff
+连接错误
```

#### [`fof-horizon.admin.stats.health.critical`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.health.critical%22)

> Critical

```diff
+危急
```

#### [`fof-horizon.admin.stats.health.excellent`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.health.excellent%22)

> Excellent

```diff
+优秀
```

#### [`fof-horizon.admin.stats.health.good`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.health.good%22)

> Good

```diff
+良好
```

#### [`fof-horizon.admin.stats.health.poor`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.health.poor%22)

> Poor

```diff
+差
```

#### [`fof-horizon.admin.stats.health.tooltip`](https://weblate.rob006.net/translate/flarum2/fof-horizon/zh_Hans/?q=context%3A%3D%22fof-horizon.admin.stats.health.tooltip%22)

> System health score: {score}/100

```diff
+系统健康评分: {score}/100
```


### `fof-links` (missing)

#### [`fof-links.admin.links.preconfigured`](https://weblate.rob006.net/translate/flarum2/fof-links/zh_Hans/?q=context%3A%3D%22fof-links.admin.links.preconfigured%22)

> The links on this forum have been preconfigured and cannot be edited here.

```diff
+本论坛的链接已预先配置，无法在此处编辑。
```


### `fof-mailing` (missing)

#### [`fof-mailing.admin.permissions.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_all%22)

> Send emails to groups or all users

```diff
+向群组或所有用户发送邮件
```

#### [`fof-mailing.admin.permissions.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_individual%22)

> Send emails to individual users

```diff
+向单个用户发送邮件
```

#### [`fof-mailing.api.no_recipients`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.api.no_recipients%22)

> No recipient were matched

```diff
+没有找到符合条件的收件人
```

#### [`fof-mailing.email.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.email.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.links.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.links.mail_all%22)

> Send Email

```diff
+发送邮件
```

#### [`fof-mailing.forum.links.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.links.mail_individual%22)

> Email This User

```diff
+向这个用户发送邮件
```

#### [`fof-mailing.forum.modal_mail.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.modal_mail.message_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.message_label%22)

> Message

```diff
+消息
```

#### [`fof-mailing.forum.modal_mail.recipients_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_label%22)

> Recipients

```diff
+收件人
```

#### [`fof-mailing.forum.modal_mail.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_placeholder%22)

> Add more recipients...

```diff
+添加更多收件人...
```

#### [`fof-mailing.forum.modal_mail.subject_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.subject_label%22)

> Subject

```diff
+主题
```

#### [`fof-mailing.forum.modal_mail.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.submit_button%22)

> Send

```diff
+发送
```

#### [`fof-mailing.forum.modal_mail.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_mail.title_text%22)

> Compose Mail

```diff
+新建邮件
```

#### [`fof-mailing.forum.modal_sent.on_its_way`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_sent.on_its_way%22)

> High Five! Your mail is on its way to {recipientsCount} recipients!

```diff
+成功啦！你的邮件正在急速奔向{recipientsCount}位收件人！
```

#### [`fof-mailing.forum.modal_sent.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.modal_sent.title_text%22)

> Mail Sent!

```diff
+邮件发送成功！
```

#### [`fof-mailing.forum.recipient_kinds.email`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.email%22)

> Email

```diff
+邮件
```

#### [`fof-mailing.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.group%22)

> Group

```diff
+群组
```

#### [`fof-mailing.forum.recipient_kinds.user`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.user%22)

> User

```diff
+用户
```

#### [`fof-mailing.ref.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/zh_Hans/?q=context%3A%3D%22fof-mailing.ref.default_subject%22)

> Message from forum administration

```diff
+来自论坛管理员的邮件
```


### `fof-masquerade` (missing)

#### [`flarum-audit.lib.browser.masquerade.profile_updated`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22flarum-audit.lib.browser.masquerade.profile_updated%22)

> Updated {username}'s profile fields

```diff
+已更新 {username} 的个人资料字段
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.anonymize_description%22)

> =&gt; flarum-gdpr.lib.data.masqueradeanswers.delete\_description

```diff
+删除用户账户中的所有自定义资料字段答案
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.delete_description%22)

> Removes all profile field answers from the user's account

```diff
+删除用户账户中的所有个人资料字段答案
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.export_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.export_description%22)

> Exports the user's profile field answers

```diff
+导出用户个人的资料字段答案
```

#### [`fof-masquerade.admin.fields.delete-confirmation`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/zh_Hans/?q=context%3A%3D%22fof-masquerade.admin.fields.delete-confirmation%22)

> Are you sure you want to delete the field {field}? This cannot be undone.

```diff
+确定要删除此字段吗？所有关联数据将被永久删除。
```


### `fof-move-posts` (missing)

#### [`fof-move-posts.admin.permissions.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.admin.permissions.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.admin.settings.group_sequential_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.admin.settings.group_sequential_posts%22)

> Group sequential post moved event posts into one.

```diff
+将连续移动帖子的事件合并显示为一个。
```

#### [`fof-move-posts.admin.settings.moved_first_post_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content%22)

> Moved Discussion (First Post) Content

```diff
+已移动讨论（首贴）内容
```

#### [`fof-move-posts.admin.settings.moved_first_post_content_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content_help%22)

> When you have a discussion with only one single post, moving that post will result in the initial discussion's first post to be edited to point to the new discussion. You can edit the contents of that post here.
>

```diff
+当讨论中仅包含唯一帖子时，移动该帖子会导致原讨论的首贴被修改为指向新讨论的说明文字。您可以在此处编辑该帖子的内容。
+
```

#### [`fof-move-posts.forum.alerts.posts_moved_to`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.alerts.posts_moved_to%22)

> {count, plural, one {Post moved to {target\_discussion}.} other {Moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {帖子已移动至 {target_discussion}。} other {{count} 个帖子已移动至 {target_discussion}。}}
```

#### [`fof-move-posts.forum.badge.first_moved_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.badge.first_moved_tooltip%22)

> Moved

```diff
+已移动
```

#### [`fof-move-posts.forum.discussion.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.discussion.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.error.move_old_post_to_newer_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.error.move_old_post_to_newer_discussion%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.error.move_posts_to_same_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.error.move_posts_to_same_discussion%22)

> You cannot move posts to the same discussion.

```diff
+您不能将帖子移动到同一个讨论中。
```

#### [`fof-move-posts.forum.modal.check`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.check%22)

> Check Operation Type

```diff
+检查操作类型
```

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
+您正准备将此讨论中的所有帖子移动到一个新讨论中。在大多数情况下，直接编辑现有讨论（例如更改其标题、标签或其他属性）会更有意义。是否确认继续？
```

#### [`fof-move-posts.forum.modal.destination`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.destination%22)

> Destination Discussion

```diff
+目标讨论
```

#### [`fof-move-posts.forum.modal.discussion_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_help%22)

> The tags of the source discussion will be used, and can be changed after creation.

```diff
+将使用原讨论的标签，创建后可以更改。
```

#### [`fof-move-posts.forum.modal.discussion_name`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_name%22)

> =&gt; core.forum.composer\_discussion.title\_placeholder

```diff
+=> core.forum.composer_discussion.title_placeholder
```

#### [`fof-move-posts.forum.modal.new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.new_discussion%22)

> New Discussion

```diff
+新讨论
```

#### [`fof-move-posts.forum.modal.selected_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.selected_posts%22)

> {count, plural, one {One Post Selected} other {{count} Posts Selected}}

```diff
+{count, plural, one {已选择 1 个帖子} other {已选择 {count} 个帖子}}
```

#### [`fof-move-posts.forum.modal.status.complex_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.status.complex_move%22)

> Will be a complex move, posts will be pushed between posts, leading to old URL references of the target discussion's posts to change as well.

```diff
+这将是一次复杂移动。帖子将被插入到其他帖子之间，这会导致目标讨论中原有帖子的 URL 引用（楼层号）发生改变。
```

#### [`fof-move-posts.forum.modal.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.status.old_to_new_move%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.modal.status.simple_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.status.simple_move%22)

> Will be a simple move, posts will all be added at the end of the discussion.

```diff
+这将是一次简单移动。所有帖子都将添加到讨论的末尾。
```

#### [`fof-move-posts.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.submit%22)

> Proceed

```diff
+继续执行
```

#### [`fof-move-posts.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.modal.title%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.notifications.post_moved_text`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.notifications.post_moved_text%22)

> One or more of your posts were moved to {targetDiscussionTitle}.

```diff
+您的一个或多个帖子已被移动至 {targetDiscussionTitle}。
```

#### [`fof-move-posts.forum.post.move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.post.move%22)

> Select to move

```diff
+选择移动
```

#### [`fof-move-posts.forum.post.moving`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.post.moving%22)

> Moving Post

```diff
+正在移动帖子
```

#### [`fof-move-posts.forum.post.unmove`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.post.unmove%22)

> Unselect to move

```diff
+取消选择
```

#### [`fof-move-posts.forum.post_stream.post_moved`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.forum.post_stream.post_moved%22)

> {count, plural, one {{username} moved a post to {target\_discussion}.} other {{username} moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {{username} 移动了一个帖子到 {target_discussion}。} other {{username} 移动了 {count} 个帖子到 {target_discussion}。}}
```

#### [`fof-move-posts.lib.discussion.first_post.default_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.lib.discussion.first_post.default_content%22)

> \*This post has been moved to \*\*\[%DISCUSSION\_NAME%\](%POST\_LINK%)\*\*.\*
>

```diff
+*此帖子已移动至 **[%DISCUSSION_NAME%](%POST_LINK%)**。*
+
```

#### [`fof-move-posts.ref.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.ref.move_posts%22)

> Move Posts

```diff
+移动帖子
```

#### [`fof-move-posts.ref.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/zh_Hans/?q=context%3A%3D%22fof-move-posts.ref.status.old_to_new_move%22)

> Cannot move an old post to a newer discussion.

```diff
+无法将旧帖子移动到更新的讨论中。
```


### `fof-news-widget` (missing)

#### [`fof-news-widget.admin.settings.add_line`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/zh_Hans/?q=context%3A%3D%22fof-news-widget.admin.settings.add_line%22)

> Add News Line

```diff
+添加公告
```

#### [`fof-news-widget.admin.settings.html_warning`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/zh_Hans/?q=context%3A%3D%22fof-news-widget.admin.settings.html_warning%22)

> Please be careful, any HTML will be rendered.

```diff
+请谨慎填写，任何 HTML 都将被渲染。
```

#### [`fof-news-widget.admin.settings.lines`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/zh_Hans/?q=context%3A%3D%22fof-news-widget.admin.settings.lines%22)

> News Lines

```diff
+公告
```


### `fof-online-users-widget` (missing)

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/zh_Hans/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
+查看在线用户小部件
```

#### [`fof-online-users-widget.admin.settings.cache_ttl`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/zh_Hans/?q=context%3A%3D%22fof-online-users-widget.admin.settings.cache_ttl%22)

> Time to cache the users list (in seconds)

```diff
+用户列表缓存保持时间（秒）
```

#### [`fof-online-users-widget.admin.settings.last_seen_interval`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/zh_Hans/?q=context%3A%3D%22fof-online-users-widget.admin.settings.last_seen_interval%22)

> Last seen interval to consider a user online (in minutes)

```diff
+判断用户是否在线的最后在线时间间隔（以分钟为单位）
```

#### [`fof-online-users-widget.admin.settings.max_users`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/zh_Hans/?q=context%3A%3D%22fof-online-users-widget.admin.settings.max_users%22)

> Max shown users

```diff
+最大显示用户数
```

#### [`fof-online-users-widget.forum.widget.empty`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/zh_Hans/?q=context%3A%3D%22fof-online-users-widget.forum.widget.empty%22)

> No Users Currently Online.

```diff
+目前没有用户在线。
```

#### [`fof-online-users-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/zh_Hans/?q=context%3A%3D%22fof-online-users-widget.forum.widget.title%22)

> Online Users

```diff
+在线用户
```


### `fof-open-collective` (missing)

#### [`fof-open-collective.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.api_key_help%22)

> This authentication method is deprecated. Please consider switching to a Personal Token.

```diff
+此身份验证方法已弃用。请考虑切换到“个人令牌”方式。
```

#### [`fof-open-collective.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.group_help%22)

> Select which Flarum user group recurring backers should be added to. Users will be automatically added when they become recurring backers and moved to the one-time group (if configured) when their subscription ends.

```diff
+选择“定期支持者”应加入的 Flarum 群组。当用户成为定期支持者时将自动加入该组；当订阅结束时，他们将被移至“一次性支持者”组（如果已配置）。
```

#### [`fof-open-collective.admin.settings.onetime_group_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.onetime_group_help%22)

> Select which Flarum user group one-time backers should be added to. If not set, one-time backers will not be managed. When a recurring backer cancels their subscription, they will be moved to this group.

```diff
+选择“一次性支持者”应加入的 Flarum 群组。若未设置，则不会对一次性支持者进行管理。当定期支持者取消订阅时，会被移至此组。
```

#### [`fof-open-collective.admin.settings.onetime_group_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.onetime_group_label%22)

> One-Time Backers Group (Optional)

```diff
+一次性支持者群组（可选）
```

#### [`fof-open-collective.admin.settings.personal_token_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.personal_token_help%22)

> Create a personal token at &lt;a&gt;https://opencollective.com/applications&lt;/a&gt;. This token is used to fetch your backer information from Open Collective.

```diff
+在 <a>https://opencollective.com/applications</a> 创建个人令牌。此令牌用于从 Open Collective 获取您的支持者信息。
```

#### [`fof-open-collective.admin.settings.slug_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/zh_Hans/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_help%22)

> Enter your Open Collective collective slug (the part after opencollective.com/ in your collective URL).

```diff
+输入您的 Open Collective 标识符（即 URL 中 opencollective.com/ 之后的部分）。
```


### `fof-photoswipe` (missing)

#### [`fof-photoswipe.forum.arrow_next_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/zh_Hans/?q=context%3A%3D%22fof-photoswipe.forum.arrow_next_title%22)

> Next

```diff
+下一张
```

#### [`fof-photoswipe.forum.arrow_prev_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/zh_Hans/?q=context%3A%3D%22fof-photoswipe.forum.arrow_prev_title%22)

> Previous

```diff
+上一张
```

#### [`fof-photoswipe.forum.close_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/zh_Hans/?q=context%3A%3D%22fof-photoswipe.forum.close_title%22)

> Close

```diff
+关闭
```

#### [`fof-photoswipe.forum.error_msg`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/zh_Hans/?q=context%3A%3D%22fof-photoswipe.forum.error_msg%22)

> The image cannot be loaded

```diff
+图片无法加载
```

#### [`fof-photoswipe.forum.zoom_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/zh_Hans/?q=context%3A%3D%22fof-photoswipe.forum.zoom_title%22)

> Zoom

```diff
+缩放
```


### `fof-polls` (missing)

#### [`fof-polls.admin.permissions.moderate_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.admin.permissions.moderate_group%22)

> Edit &amp; remove poll groups

```diff
+编辑或删除投票分组
```

#### [`fof-polls.admin.permissions.start_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.admin.permissions.start_group%22)

> Create poll groups

```diff
+创建投票分组
```

#### [`fof-polls.admin.permissions.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.admin.permissions.view_group%22)

> View poll groups

```diff
+查看所有投票分组
```

#### [`fof-polls.admin.settings.enabled_poll_groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups%22)

> Enable poll groups

```diff
+启用投票分组
```

#### [`fof-polls.admin.settings.enabled_poll_groups_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups_help%22)

> Poll groups allow you to group globals polls together, and display them in a dedicated page.

```diff
+投票分组可以将所有全局投票分为一个组，并在一个固定页面中显示。
```

#### [`fof-polls.forum.compose.draft_saved`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.draft_saved%22)

> Draft saved

```diff
+草稿保存成功
```

#### [`fof-polls.forum.compose.publish`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.publish%22)

> Publish

```diff
+发布
```

#### [`fof-polls.forum.compose.save_as_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.save_as_draft%22)

> Save as draft

```diff
+保存草稿
```

#### [`fof-polls.forum.compose.schedule`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.schedule%22)

> Schedule

```diff
+计划
```

#### [`fof-polls.forum.compose.schedule_datetime_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.schedule_datetime_label%22)

> Publish at

```diff
+发布于
```

#### [`fof-polls.forum.compose.schedule_publication`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication%22)

> Schedule publication

```diff
+定时发布
```

#### [`fof-polls.forum.compose.schedule_publication_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication_edit%22)

> Edit scheduled publication

```diff
+编辑定时发布
```

#### [`fof-polls.forum.compose.schedule_submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.schedule_submit%22)

> Schedule

```diff
+计划
```

#### [`fof-polls.forum.compose.submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.submit%22)

> Submit

```diff
+提交
```

#### [`fof-polls.forum.compose.update_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.compose.update_draft%22)

> Update draft

```diff
+更新草稿
```

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
+{count, plural, one {#个答案为空，填写内容或删除该答案。} other {#个答案为空，填写内容或删除这些答案。}}
```

#### [`fof-polls.forum.page.nav-groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.page.nav-groups%22)

> Poll Groups

```diff
+投票分组
```

#### [`fof-polls.forum.poll.draft_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll.draft_label%22)

> Draft

```diff
+草稿
```

#### [`fof-polls.forum.poll.scheduled_error_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_error_tooltip%22)

> This scheduled publication failed. Open the poll to see why.

```diff
+定时发布失败。打开投票查看原因。
```

#### [`fof-polls.forum.poll.scheduled_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_label%22)

> Scheduled for {date}

```diff
+计划于{date}发布
```

#### [`fof-polls.forum.poll.total_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll.total_votes%22)

> {count, plural, one {# vote was given} other {# votes were given}}

```diff
+{count, plural, one {获得#票} other {获得#票}}
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_label%22)

> Cancel scheduled publication

```diff
+取消定时发布
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_success%22)

> Scheduled publication cancelled.

```diff
+定时发布已取消。
```

#### [`fof-polls.forum.poll_controls.edit_schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.edit_schedule_publish_label%22)

> Edit scheduled publication

```diff
+编辑定时发布
```

#### [`fof-polls.forum.poll_controls.publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_label%22)

> Publish now

```diff
+立即发布
```

#### [`fof-polls.forum.poll_controls.publish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_success%22)

> Poll published.

```diff
+投票发布成功。
```

#### [`fof-polls.forum.poll_controls.schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.schedule_publish_label%22)

> Schedule publication

```diff
+定时发布
```

#### [`fof-polls.forum.poll_controls.unpublish_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_confirmation%22)

> Move this poll back to draft? It will disappear from the showcase.

```diff
+确认将此投票移回草稿？它将不再公开展示。
```

#### [`fof-polls.forum.poll_controls.unpublish_error_has_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_error_has_votes%22)

> Cannot unpublish — the poll already has votes. Delete it instead.

```diff
+无法取消发布。该投票已有投票记录。可以删除。
```

#### [`fof-polls.forum.poll_controls.unpublish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_label%22)

> Move back to draft

```diff
+移回草稿
```

#### [`fof-polls.forum.poll_controls.unpublish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_success%22)

> Poll moved to draft.

```diff
+投票已移回草稿。
```

#### [`fof-polls.forum.poll_groups.composer.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.add_title%22)

> Add Poll Group

```diff
+添加投票分组
```

#### [`fof-polls.forum.poll_groups.composer.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.delete%22)

> Delete Poll Group

```diff
+删除投票分组
```

#### [`fof-polls.forum.poll_groups.composer.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.edit_title%22)

> Edit Poll Group

```diff
+编辑投票分组
```

#### [`fof-polls.forum.poll_groups.composer.groups_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.groups_manager%22)

> Poll Groups Manager

```diff
+投票分组管理
```

#### [`fof-polls.forum.poll_groups.composer.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.save_changes%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```

#### [`fof-polls.forum.poll_groups.composer.success`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.success%22)

> Poll group saved successfully.

```diff
+投票分组保存成功。
```

#### [`fof-polls.forum.poll_groups.composer.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.view_group%22)

> View Poll Group

```diff
+查看投票分组
```

#### [`fof-polls.forum.poll_groups.controls.add_poll_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.add_poll_label%22)

> Add Poll

```diff
+添加投票
```

#### [`fof-polls.forum.poll_groups.controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_confirmation%22)

> Are you sure you want to delete this poll group?

```diff
+确认删除此投票分组？
```

#### [`fof-polls.forum.poll_groups.controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_error_message%22)

> There went something wrong while deleting the poll group.

```diff
+删除投票分组时发生错误。
```

#### [`fof-polls.forum.poll_groups.controls.delete_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_label%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`fof-polls.forum.poll_groups.controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_success_message%22)

> Poll group deleted successfully.

```diff
+投票分组删除成功。
```

#### [`fof-polls.forum.poll_groups.controls.edit_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.edit_label%22)

> =&gt; core.ref.edit

```diff
+=> core.ref.edit
```

#### [`fof-polls.forum.poll_groups.controls.view_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.view_label%22)

> View Poll Group

```diff
+查看投票分组
```

#### [`fof-polls.forum.poll_groups.list_page.add_poll_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.add_poll_button%22)

> Add Poll to Group

```diff
+添加投票到分组
```

#### [`fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button%22)

> Cannot Start a Poll Group

```diff
+无法创建投票分组
```

#### [`fof-polls.forum.poll_groups.list_page.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.empty_text%22)

> It looks as though there are no poll groups here.

```diff
+暂无投票分组。
```

#### [`fof-polls.forum.poll_groups.list_page.load_more_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
+=> core.ref.load_more
```

#### [`fof-polls.forum.poll_groups.list_page.no_polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.no_polls%22)

> There are no polls in this group.

```diff
+此分组中暂无投票。
```

#### [`fof-polls.forum.poll_groups.list_page.start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.start_poll_group_button%22)

> Start a Poll Group

```diff
+创建投票分组
```

#### [`fof-polls.forum.poll_groups.list_page.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.title%22)

> Poll Groups

```diff
+投票分组
```

#### [`fof-polls.forum.polls_list.sort_dropdown.least_voted`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.least_voted%22)

> Least Voted

```diff
+投票最少
```

#### [`fof-polls.forum.polls_list.sort_dropdown.most_voted`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.most_voted%22)

> Most Voted

```diff
+投票最多
```

#### [`fof-polls.forum.polls_list.sort_dropdown.newest`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.newest%22)

> Newest

```diff
+最新
```

#### [`fof-polls.forum.polls_list.sort_dropdown.oldest`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.oldest%22)

> Oldest

```diff
+最早
```

#### [`fof-polls.forum.polls_list.sort_dropdown.sort_dropdown.default`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.sort_dropdown.default%22)

> =&gt; fof-polls.forum.polls\_list.sort\_dropdown.newest

```diff
+=> fof-polls.forum.polls_list.sort_dropdown.newest
```

#### [`fof-polls.forum.polls_list.status_filter.all`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.all%22)

> All

```diff
+所有
```

#### [`fof-polls.forum.polls_list.status_filter.draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.draft%22)

> Drafts

```diff
+草稿
```

#### [`fof-polls.forum.polls_list.status_filter.published`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.published%22)

> Published

```diff
+已发布
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.admin.settings.toggle_on_editor`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.admin.settings.toggle_on_editor%22)

> Show rich text mode toggle on editor?

```diff
+在编辑器上显示富文本模式切换按钮？
```

#### [`fof-rich-text.forum.settings.composer_heading`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.forum.settings.composer_heading%22)

> Composer

```diff
+编辑器
```

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
+不要用换行符分隔段落。
```

#### [`fof-rich-text.forum.settings.use_rich_text_editor_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.forum.settings.use_rich_text_editor_label%22)

> Use rich text editor?

```diff
+使用富文本编辑器？
```

#### [`fof-rich-text.lib.composer.additional_items_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.additional_items_tooltip%22)

> Additional Controls

```diff
+附加控件
```

#### [`fof-rich-text.lib.composer.code_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.code_block_tooltip%22)

> Insert a code block

```diff
+插入代码块
```

#### [`fof-rich-text.lib.composer.horizontal_rule_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.horizontal_rule_tooltip%22)

> Insert horizontal rule

```diff
+插入水平线
```

#### [`fof-rich-text.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.image_tooltip%22)

> Add an image

```diff
+添加图片
```

#### [`fof-rich-text.lib.composer.insert_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_button%22)

> Insert

```diff
+插入
```

#### [`fof-rich-text.lib.composer.insert_image.src_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.src_placeholder%22)

> Link

```diff
+链接
```

#### [`fof-rich-text.lib.composer.insert_image.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.title_placeholder%22)

> Title

```diff
+标题
```

#### [`fof-rich-text.lib.composer.insert_link.href_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.href_placeholder%22)

> URL

```diff
+网址
```

#### [`fof-rich-text.lib.composer.insert_link.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.remove_button%22)

> Remove

```diff
+删除
```

#### [`fof-rich-text.lib.composer.insert_link.text_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.text_placeholder%22)

> Text

```diff
+文本
```

#### [`fof-rich-text.lib.composer.insert_link.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.title_placeholder%22)

> Title (shows on hover)

```diff
+标题（悬停时显示）
```

#### [`fof-rich-text.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.link_tooltip%22)

> Add a link

```diff
+添加链接
```

#### [`fof-rich-text.lib.composer.spoiler_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.spoiler_block_tooltip%22)

> Block Spoiler/Dropdown

```diff
+块剧透/下拉菜单
```

#### [`fof-rich-text.lib.composer.text_type_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.text_type_tooltip%22)

> Select Text Type

```diff
+选择文本类型
```

#### [`fof-rich-text.lib.composer.toggle_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/zh_Hans/?q=context%3A%3D%22fof-rich-text.lib.composer.toggle_button%22)

> Toggle Rich Text Mode

```diff
+切换富文本模式
```


### `fof-seo` (missing)

#### [`fof-seo.admin.common.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.common.close%22)

> Close

```diff
+关闭
```

#### [`fof-seo.admin.common.learn_more`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.common.learn_more%22)

> Learn more

```diff
+了解更多
```

#### [`fof-seo.admin.common.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.common.save_changes%22)

> Save changes

```diff
+保存更改
```

#### [`fof-seo.admin.dashboard.widget.cta`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.cta%22)

> Do the health-check!

```diff
+立即执行健康检查！
```

#### [`fof-seo.admin.dashboard.widget.review_prompt`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.review_prompt%22)

> It's time to review your SEO settings!

```diff
+是时候重新检查你的 SEO 设置了！
```

#### [`fof-seo.admin.header.health_check`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.health_check%22)

> Health check

```diff
+健康检查
```

#### [`fof-seo.admin.header.search_engines_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.search_engines_info%22)

> Search engine information

```diff
+搜索引擎信息
```

#### [`fof-seo.admin.header.seo_settings`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.seo_settings%22)

> SEO settings

```diff
+SEO 设置
```

#### [`fof-seo.admin.header.setup_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.setup_ssl%22)

> Set up SSL

```diff
+设置 SSL
```

#### [`fof-seo.admin.header.sitemap_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.sitemap_info%22)

> Sitemap information

```diff
+网站地图信息
```

#### [`fof-seo.admin.header.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.title%22)

> Search Engine Optimization

```diff
+搜索引擎优化
```

#### [`fof-seo.admin.header.tools`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.header.tools%22)

> Tools

```diff
+工具
```

#### [`fof-seo.admin.modals.crawl_post.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.intro%22)

> &lt;b&gt;Read this dialog carefully.&lt;/b&gt; This function will only be executed on a page refresh on a discussion. You can always change this option later.

```diff
+<b>请仔细阅读此描述。</b> 该功能仅会在讨论页面刷新时执行。您随时可以稍后更改此选项。
```

#### [`fof-seo.admin.modals.crawl_post.mode_all_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_all_title%22)

> Index all posts in a discussion (setting enabled)

```diff
+索引讨论中的所有帖子（已启用该设置）
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_help%22)

> Search engine will only show the main post in the search results. It won't affect loading speed when you navigate to it via forum links.

```diff
+搜索引擎仅会在搜索结果中显示首帖。通过论坛链接访问讨论时，不会影响加载速度。
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_title%22)

> Only index the main post (default)

```diff
+仅索引首帖（默认）
```

#### [`fof-seo.admin.modals.crawl_post.question`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.question%22)

> Do you want to enable this feature?

```diff
+您想要启用此功能吗？
```

#### [`fof-seo.admin.modals.crawl_post.switch_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.switch_label%22)

> Crawl all posts (it's slower on page refresh, but search results will be better)

```diff
+爬取所有帖子（页面刷新时会稍慢，但搜索结果会更好）
```

#### [`fof-seo.admin.modals.crawl_post.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.title%22)

> Post crawl settings

```diff
+帖子爬虫设置
```

#### [`fof-seo.admin.modals.dofollow.add_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.add_placeholder%22)

> Allow a domain

```diff
+允许域名
```

#### [`fof-seo.admin.modals.dofollow.default_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.default_note%22)

> The domain you use for your Flarum instance is added to the list by default.

```diff
+您的 Flarum 实例所使用的域名已默认添加到该列表中。
```

#### [`fof-seo.admin.modals.dofollow.duplicate_error`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.duplicate_error%22)

> This domain is already present in your do-follow list.

```diff
+该域名已在允许索引列表中。
```

#### [`fof-seo.admin.modals.dofollow.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.intro%22)

> Enter the &lt;b&gt;hostnames&lt;/b&gt; of the domains you want to add to the do-follow list.

```diff
+请输入您想要添加到允许索引列表的<b>域名</b>的主机名。
```

#### [`fof-seo.admin.modals.dofollow.learn_more_line`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.learn_more_line%22)

> &lt;a&gt;Learn more&lt;/a&gt; about the do-follow list.

```diff
+<a>了解更多</a>关于允许索引列表的信息。
```

#### [`fof-seo.admin.modals.dofollow.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.title%22)

> Do-follow list

```diff
+允许索引列表
```

#### [`fof-seo.admin.pages.health.checks.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.button%22)

> Review post settings

```diff
+查看帖子设置
```

#### [`fof-seo.admin.pages.health.checks.crawl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.label%22)

> Review discussion post crawl settings

```diff
+查看讨论爬取设置
```

#### [`fof-seo.admin.pages.health.checks.crawl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.reason%22)

> You will need to review this setting to pass.

```diff
+您需要检查此设置才能通过。
```

#### [`fof-seo.admin.pages.health.checks.description.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.button%22)

> Update description

```diff
+更新描述
```

#### [`fof-seo.admin.pages.health.checks.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.label%22)

> Checks whether your forum has a description

```diff
+检查您的论坛是否有描述
```

#### [`fof-seo.admin.pages.health.checks.description.reason_default`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_default%22)

> You did not change the default forum description after installation!

```diff
+在安装后您还没有更改默认论坛描述！
```

#### [`fof-seo.admin.pages.health.checks.description.reason_missing`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_missing%22)

> You did not set up a forum description yet!

```diff
+您还没有设置论坛描述！
```

#### [`fof-seo.admin.pages.health.checks.description.reason_too_short`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_too_short%22)

> Your forum description is lower then 20 characters. Please expand it for better search results.

```diff
+您的论坛描述少于 20 个字符。请补充描述，以便获得更好的搜索索引。
```

#### [`fof-seo.admin.pages.health.checks.keywords.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.button%22)

> Update keywords

```diff
+更新关键词
```

#### [`fof-seo.admin.pages.health.checks.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.label%22)

> Checks whether your forum has keywords set up

```diff
+检查您的论坛是否已设置关键词
```

#### [`fof-seo.admin.pages.health.checks.keywords.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.reason%22)

> You did not set up a forum keywords yet!

```diff
+您尚未设置论坛关键词！
```

#### [`fof-seo.admin.pages.health.checks.meta_tags.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.meta_tags.label%22)

> Checks whether your forum has meta tags available (generated by this plugin)

```diff
+检查您的论坛是否具有可用的 meta 标签（由该插件生成）
```

#### [`fof-seo.admin.pages.health.checks.review.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.button%22)

> Ok! I reviewed them!

```diff
+好了！我已经检查过了！
```

#### [`fof-seo.admin.pages.health.checks.review.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.label%22)

> Review your SEO settings every two months. Next review needed on {date}

```diff
+请您每两个月检查一次您的 SEO 设置。下次检查时间为 {date}
```

#### [`fof-seo.admin.pages.health.checks.review.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.reason%22)

> It is time to re-review your SEO settings.

```diff
+是时候重新检查一下您的 SEO 设置了。
```

#### [`fof-seo.admin.pages.health.checks.robots.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.button%22)

> Read more about adding a robots.txt

```diff
+阅读更多关于添加 robots.txt 文件的信息
```

#### [`fof-seo.admin.pages.health.checks.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.label%22)

> Checks whether your forum has a robots.txt available

```diff
+检查您的论坛是否包含 robots.txt 文件
```

#### [`fof-seo.admin.pages.health.checks.robots.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.reason%22)

> Your robots.txt is provided by the FriendsOfFlarum Sitemap extension. Install and enable it to make a robots.txt available to search engines.

```diff
+您的 robots.txt 文件由 FoF Sitemap 扩展程序提供。请安装并启用该扩展程序，以便搜索引擎可以访问您的 robots.txt 文件。
```

#### [`fof-seo.admin.pages.health.checks.search_engines.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.button%22)

> More information

```diff
+更多信息
```

#### [`fof-seo.admin.pages.health.checks.search_engines.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.label%22)

> Register your forum to search engines

```diff
+将您的论坛注册到搜索引擎
```

#### [`fof-seo.admin.pages.health.checks.search_engines.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.reason%22)

> You will need to review this to pass.

```diff
+你需要检查一下才能通过。
```

#### [`fof-seo.admin.pages.health.checks.sitemap.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.button%22)

> Read more about adding a sitemap

```diff
+阅读更多关于添加站点地图的信息
```

#### [`fof-seo.admin.pages.health.checks.sitemap.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.label%22)

> Checks whether your forum has a sitemap available

```diff
+检查您的论坛是否有可用的网站地图
```

#### [`fof-seo.admin.pages.health.checks.sitemap.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.reason%22)

> It is highly recommended to install the FriendsOfFlarum Sitemap extension!

```diff
+强烈建议安装 FoF Sitemap 扩展程序！
```

#### [`fof-seo.admin.pages.health.checks.social_media.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.button%22)

> Update image

```diff
+更新图片
```

#### [`fof-seo.admin.pages.health.checks.social_media.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.label%22)

> Set Up a social media image

```diff
+设置社交媒体形象图
```

#### [`fof-seo.admin.pages.health.checks.social_media.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.reason%22)

> You did not set a social media image for your forum. It is recommended to set one. Your favicon will now be used as preview on social media.

```diff
+您尚未为论坛设置社交媒体图片。建议您设置它。您的网站图标现在将用作社交媒体上的预览图。
```

#### [`fof-seo.admin.pages.health.checks.ssl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.button%22)

> How to set up SSL

```diff
+如何设置 SSL
```

#### [`fof-seo.admin.pages.health.checks.ssl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.label%22)

> Checks whether your site has a secure connection available (SSL/TLS)

```diff
+检查您的网站是否具有安全连接（SSL / TLS）
```

#### [`fof-seo.admin.pages.health.checks.ssl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.reason%22)

> Your forum does not force a SSL/TLS connection (a secure connection to your website). Most search engines won't index your website or lower your ranking if you have no secure connection available.

```diff
+您的论坛没有强制使用 SSL / TLS 连接（即与您的网站建立安全连接）。如果没有安全连接，大多数搜索引擎将不会收录您的网站，或者降低您的排名。
```

#### [`fof-seo.admin.pages.health.default_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.default_button%22)

> Update setting

```diff
+更新设置
```

#### [`fof-seo.admin.pages.health.legend`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.legend%22)

> For optimal search engine results, make sure all checks are green.

```diff
+为了获得最佳搜索引擎结果，请确保所有检查项都显示为绿色。
```

#### [`fof-seo.admin.pages.health.status.passed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.status.passed%22)

> All set!

```diff
+准备就绪！
```

#### [`fof-seo.admin.pages.health.status.warning`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.status.warning%22)

> Warning!

```diff
+警告！
```

#### [`fof-seo.admin.pages.health.table.status`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.table.status%22)

> Status

```diff
+状态
```

#### [`fof-seo.admin.pages.health.table.technique`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.health.table.technique%22)

> Technique

```diff
+技术
```

#### [`fof-seo.admin.pages.search_engines.bing_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_heading%22)

> Add your website to the Bing search results

```diff
+将您的网站添加到 Bing 搜索结果中
```

#### [`fof-seo.admin.pages.search_engines.bing_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_sitemap%22)

> Don't forget to configure your sitemap URL. After you verified your website you're all set and Bing will now index your website.

```diff
+不要忘记配置站点地图 URL。验证好您的网站之后，一切就绪，Bing 就会开始对你的网站进行收录。
```

#### [`fof-seo.admin.pages.search_engines.bing_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_visit%22)

> If you want to add your website to the Bing search results, visit the {link} and complete the given steps. Not all fields are required.

```diff
+如果您想将您的网站添加到 Bing 搜索结果中，请访问 {link} 并完成指定的步骤。并非所有字段都是必填的。
```

#### [`fof-seo.admin.pages.search_engines.confirm_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.confirm_button%22)

> I have read this

```diff
+我已阅读此内容
```

#### [`fof-seo.admin.pages.search_engines.google_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_heading%22)

> Add your website to the Google search results

```diff
+将您的网站添加到 Google 搜索结果中
```

#### [`fof-seo.admin.pages.search_engines.google_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_sitemap%22)

> When you completed the registration in the Google Search Console, visit the &lt;b&gt;Sitemaps&lt;/b&gt; page. Pass your &lt;b&gt;sitemap.xml&lt;/b&gt; to Google. Make sure that Google can crawl your sitemap and will keep doing this.

```diff
+在 Google 搜索控制台中完成注册后，请访问<b>网站地图</b>页面。将您的 <b>sitemap.xml</b> 文件地址提交给 Google，确保 Google 可以抓取网站地图内容，并持续这么做。
```

#### [`fof-seo.admin.pages.search_engines.google_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_visit%22)

> If you want to add your website to the Google search results, visit the {link}. You'll need to add your website and verify that you're the owner of the associated domain name.

```diff
+如果您想将您的网站添加到 Google 搜索结果中，请访问 {link}。您需要添加您的网站，并验证您是关联域名的所有者。
```

#### [`fof-seo.admin.pages.search_engines.google_www`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_www%22)

> When you enter your domain you need to answer the following question for yourself: Do you want to use the 'www' sub-domain in the search results? You can &lt;strong&gt;not&lt;/strong&gt; change this later. Registering your domain in the Google Search Console multiple times won't result in a better ranking.

```diff
+当输入域名时，你需要回答以下问题：您想在搜索结果中使用 “www” 子域名吗？您以后将<strong>无法</strong>更改此设置。在 Google 搜索控制台中多次注册你的域名不会带来更佳排名。
```

#### [`fof-seo.admin.pages.search_engines.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.heading%22)

> Submit your website to Search Engines

```diff
+向搜索引擎提交你的网站
```

#### [`fof-seo.admin.pages.search_engines.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.intro%22)

> It is good practice to let Search Engines know your site is exists. This page will guide you in doing this succesfully.

```diff
+让搜索引擎知道你的网站是一个很好的做法。本页面将指导你成功完成此工作。
```

#### [`fof-seo.admin.pages.search_engines.sitemap_tip`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.sitemap_tip%22)

> It is recommended to have a sitemap ready before completing this guide. If you don't have a sitemap yet, &lt;a&gt;click here to read more about them&lt;/a&gt;.

```diff
+建议在完成本指南之前准备好网站地图。如果你还没有网站地图，<a>单击此处阅读有关它们的更多信息</a>。
```

#### [`fof-seo.admin.pages.search_engines.yahoo_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_body%22)

> If you want to add your website to the Yahoo search results, finish your Bing search results registration. Yahoo will use that data.

```diff
+如果您想将您的网站添加到 Yahoo 搜索结果中，请先完成您的 Bing 搜索结果注册。Yahoo 将使用该数据。
```

#### [`fof-seo.admin.pages.search_engines.yahoo_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_heading%22)

> Add your website to the Yahoo search results

```diff
+将您的网站添加到 Yahoo 搜索结果中
```

#### [`fof-seo.admin.pages.search_engines.yandex_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_heading%22)

> Add your website to the Yandex search results

```diff
+将你的网站添加到 Yandex 搜索结果中
```

#### [`fof-seo.admin.pages.search_engines.yandex_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_sitemap%22)

> Don't forget to configure the sitemap in the Yandex.Webmaster.

```diff
+不要忘记在 Yandex Webmaster 中配置站点地图。
```

#### [`fof-seo.admin.pages.search_engines.yandex_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_visit%22)

> If you want to add your website to the Yandex search results, visit the {link} and follow the given steps.

```diff
+如果您想将您的网站添加到 Yandex 搜索结果中，请访问 {link} 并按照指定的步骤操作。
```

#### [`fof-seo.admin.pages.sitemap.generated_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.generated_note%22)

> The sitemap file is automatically generated and does not need any maintenance.

```diff
+网站地图文件是自动生成的，不需要任何维护。
```

#### [`fof-seo.admin.pages.sitemap.just_installed_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_body%22)

> In that case, activate it by clicking the extension in the sidebar at the left . Then this warning will disappear.

```diff
+在这种情况下，通过单击左侧边栏中的扩展来激活它。然后这个警告就会消失。
```

#### [`fof-seo.admin.pages.sitemap.just_installed_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_heading%22)

> I just installed the extension

```diff
+我已安装了扩展程序
```

#### [`fof-seo.admin.pages.sitemap.robots_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_body%22)

> The same extension also generates a &lt;b&gt;robots.txt&lt;/b&gt; for your forum. This file tells search engines which areas they may crawl and points them to your sitemap, so installing it takes care of both files at once — there is nothing extra to configure.

```diff
+相同的扩展还会为你的论坛生成 <b>robots.txt</b>。此文件告诉搜索引擎他们可能会抓取哪些区域，并将它们指向网站地图，因此安装它可以同时处理两个文件——不用额外的配置。
```

#### [`fof-seo.admin.pages.sitemap.robots_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_heading%22)

> What about robots.txt?

```diff
+robots.txt 呢？
```

#### [`fof-seo.admin.pages.sitemap.which_extension_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_body%22)

> {link} is the suggested extension to install for Flarum. We strongly recommend you to install and activate this extension.

```diff
+{link} 是 Flarum 建议安装的扩展。我们强烈建议你安装并激活此扩展程序。
```

#### [`fof-seo.admin.pages.sitemap.which_extension_details`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_details%22)

> This extension will make sure crawlers will find your forum &lt;b&gt;discussions&lt;/b&gt;, &lt;b&gt;tags&lt;/b&gt; (when extension is enabled) and &lt;b&gt;Pages&lt;/b&gt; extension (when extension is installed and enabled). It will automatically make an sitemap.xml available.

```diff
+此扩展将确保爬虫能找到你的论坛的<b>讨论</b>、<b>标签</b>（启用扩展时）和<b>页面</b>扩展（安装并启用扩展时）。它会自动生成一个 sitemap.xml。
```

#### [`fof-seo.admin.pages.sitemap.which_extension_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_heading%22)

> What extension should I install?

```diff
+我应该安装什么扩展？
```

#### [`fof-seo.admin.pages.sitemap.why_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_body%22)

> A sitemap is a XML file with a list of all the available pages on your website. It will be used by crawlers and search engines to find pages on your website.

```diff
+网站地图是一个 XML 文件，其中包含网站上所有可用页面的列表。它将被爬虫和搜索引擎用来查找网站上的页面。
```

#### [`fof-seo.admin.pages.sitemap.why_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_heading%22)

> Why should you use a sitemap?

```diff
+网站地图的作用是什么？
```

#### [`fof-seo.admin.pages.ssl.added_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.added_heading%22)

> Okay, I added SSL!

```diff
+好的，我已经添加了 SSL！
```

#### [`fof-seo.admin.pages.ssl.how_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_body%22)

> For people who are using a webhosting, the most common way is to enter the webhosting panel, go to the hosting-settings of your website and click SSL. You can follow the steps to add SSL to your website. The most webhosting companies nowadays are supporting the popular certificate issuer {link}.

```diff
+对于使用虚拟主机的用户来说，最常见的方法是登录虚拟主机控制面板，进入网站的主机设置，然后点击 SSL。您可以按照步骤将 SSL 证书添加到您的网站。目前大多数虚拟主机公司都支持主流的证书颁发机构 {link}。
```

#### [`fof-seo.admin.pages.ssl.how_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_heading%22)

> How to add SSL to your website?

```diff
+如何为您的网站添加 SSL 证书？
```

#### [`fof-seo.admin.pages.ssl.intro_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_body%22)

> Safety and privacy awareness on the web is on the rise. &lt;b&gt;Almost every&lt;/b&gt; developer/website owner want their website safe to use for their visitors so they won't need to be afraid that their data will be compromised by hackers or website-impersonators.

```diff
+网络安全和隐私意识正在不断提高。<b>几乎所有开发者和网站所有者</b>都希望他们的网站对访客来说是安全的，这样他们就不必担心数据会被黑客或网站冒充者窃取。
```

#### [`fof-seo.admin.pages.ssl.intro_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_heading%22)

> Why do I need an secure connection?

```diff
+为什么我需要安全连接？
```

#### [`fof-seo.admin.pages.ssl.no_ssl_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_body%22)

> In that case, you can uninstall this extension as search engines &lt;b&gt;won't index your forum&lt;/b&gt; or rank them far below other sites due safety reasons.

```diff
+在这种情况下，您可以卸载此扩展，因为搜索引擎<b>可能不会收录您的论坛</b>，或者出于安全原因将其排名远低于其他网站。
```

#### [`fof-seo.admin.pages.ssl.no_ssl_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_heading%22)

> What if I do not want to add SSL?

```diff
+如果我不想添加 SSL 会怎么样？
```

#### [`fof-seo.admin.pages.ssl.rankings_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body%22)

> When you do not have a secure connection to your website, search engines will rank your site much lower then other sites, or even won't index it.

```diff
+当您的网站没有安全连接时，搜索引擎会给你的网站排名比其他网站低得多，甚至根本不会收录它。
```

#### [`fof-seo.admin.pages.ssl.rankings_body_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body_ssl%22)

> When you have SSL available, your website will get an higher rank and will be indexed.

```diff
+当您的网站启用 SSL 证书后，其排名将会更高，并会更有可能搜索引擎收录。
```

#### [`fof-seo.admin.pages.ssl.rankings_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_heading%22)

> Search engines {icon} secure connections

```diff
+搜索引擎 {icon} 安全连接
```

#### [`fof-seo.admin.pages.ssl.what_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_body%22)

> The most people know &lt;b&gt;https&lt;/b&gt; that's used for secure connections as SSL: &lt;i&gt;Secure Sockets Layer&lt;/i&gt;. Officially it's called TLS: &lt;i&gt;Transport Layer Security&lt;/i&gt;. This method is used to create a secure connection to your webserver what will prevent attackers or other webservers to impersonate your website and keep your visitors safe. The SSL connection will be broken if that happens and the visitors browsers will warning the user that's it's not trusted.

```diff
+大多数人都知道，用于安全连接的 <b>HTTPS 协议</b> 是 SSL：<i>安全套接层</i>。它的正式名称是 TLS：<i>传输层安全协议</i>。这种方法用于创建与您的 Web 服务器的安全连接，防止攻击者或其他 Web 服务器冒充您的网站，从而保护访问者的安全。如果发生这种情况，SSL 连接将会断开，访问者的浏览器会警告用户该连接不受信任。
```

#### [`fof-seo.admin.pages.ssl.what_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_heading%22)

> What is SSL or TLS?

```diff
+什么是 SSL / TLS？
```

#### [`fof-seo.admin.permissions.category_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.permissions.category_label%22)

> SEO

```diff
+SEO
```

#### [`fof-seo.admin.permissions.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.permissions.configure_seo%22)

> Allow configuring SEO

```diff
+允许配置 SEO
```

#### [`fof-seo.admin.settings.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.crawl.button%22)

> Setup post crawl settings

```diff
+帖子爬虫设置
```

#### [`fof-seo.admin.settings.crawl.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.crawl.heading%22)

> Discussion post crawl settings

```diff
+讨论帖子爬虫设置
```

#### [`fof-seo.admin.settings.crawl.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.crawl.help%22)

> This is an important setting about crawling your discussion posts in search results.

```diff
+这是一个关于在搜索结果中爬取讨论帖子的重要设置。
```

#### [`fof-seo.admin.settings.indexing.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.indexing.heading%22)

> Indexing controls

```diff
+索引控制
```

#### [`fof-seo.admin.settings.indexing.profiles_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_help%22)

> When enabled, user profile pages emit a 'noindex' meta tag so they are kept out of search results. Links on the page are still followed, so crawlers can still reach the content they point to.

```diff
+启用后，用户个人资料页面将会添加 “noindex” meta 标签，因此它们不会展示在搜索结果中。页面上的链接仍然会被索引，以此保障爬虫可以访问它们所指向的内容。
```

#### [`fof-seo.admin.settings.indexing.profiles_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_label%22)

> De-index profile pages

```diff
+不索引个人资料页面
```

#### [`fof-seo.admin.settings.indexing.tags_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_button%22)

> Select tags

```diff
+选择标签
```

#### [`fof-seo.admin.settings.indexing.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_help%22)

> Discussions in the selected tags (and those tags' own listing pages) will be kept out of search results with a 'noindex' meta tag. Links are still followed. Selecting a parent tag also covers its child tags.

```diff
+选定标签中的讨论（以及这些标签自身的列表页面）将通过添加 `noindex` meta 标签而不被搜索引擎收录，但其中的链接仍会被跟踪。选择父标签时，其子标签也会一并生效。
```

#### [`fof-seo.admin.settings.indexing.tags_none_selected`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_none_selected%22)

> No tags excluded from indexing.

```diff
+暂无索引排除的标签。
```

#### [`fof-seo.admin.settings.info.maintain`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.info.maintain%22)

> Check all your settings when you first setup this extensions. Maintain them to get the best search results.

```diff
+首次设置此扩展时，请检查所有设置。定期维护这些设置以获得最佳搜索结果。
```

#### [`fof-seo.admin.settings.info.overview`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.info.overview%22)

> This page contains some other settings from around the admin area. However, it's good to have a good overview about these settings. Do not forget to do the SEO check.

```diff
+此页面汇总了管理后台各处的其他一些设置。不过，能在这里对这些设置有一个良好的概览还是很有帮助的。别忘记进行 SEO 检查。
```

#### [`fof-seo.admin.settings.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+注意：请使用英文逗号分隔关键词，逗号后不空格。
```

#### [`fof-seo.admin.settings.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+例如：论坛,Flarum,苹果,网络技术,安全
```

#### [`fof-seo.admin.settings.keywords.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.keywords.heading%22)

> Forum keywords

```diff
+论坛关键词
```

#### [`fof-seo.admin.settings.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.keywords.help%22)

> Enter one or more keywords that describes your forum.

```diff
+输入一个或多个论坛关键词。
```

#### [`fof-seo.admin.settings.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.keywords.placeholder%22)

> Add a few keywords

```diff
+添加一些关键词
```

#### [`fof-seo.admin.settings.new_tab.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.heading%22)

> Open external links in new tab

```diff
+在新标签页中打开外部链接
```

#### [`fof-seo.admin.settings.new_tab.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.help%22)

> This extension will also make sure that external links (to other domains) open in a new tab. Currently it is not possible to disable this setting.

```diff
+此扩展还将确保外部链接（指向其他域名）在新标签页中打开。目前无法禁用此设置。
```

#### [`fof-seo.admin.settings.nofollow.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.button%22)

> Open domain do-follow list

```diff
+打开域名允许索引列表
```

#### [`fof-seo.admin.settings.nofollow.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.heading%22)

> No-follow links

```diff
+禁止索引链接
```

#### [`fof-seo.admin.settings.nofollow.help_dofollow`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.help_dofollow%22)

> With this setting you are able to add domains to the 'do-follow' list. For example, you can add &lt;i&gt;flarum.org&lt;/i&gt; to make sure links to this website do not receive a 'nofollow' attribute.

```diff
+通过此设置，您可以将域添加到允许索引列表中。例如，您可以添加 <i>flarum.org</i>，以确保指向本网站的链接不会收到禁止索引属性。
```

#### [`fof-seo.admin.settings.social_media_image.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.heading%22)

> Social media image

```diff
+社交媒体图片
```

#### [`fof-seo.admin.settings.social_media_image.help_size`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_size%22)

> Expecting a square image. Recommended size is 1200x1200 pixels. Otherwise use a landscape image, recommended size is 1200x630.

```diff
+推荐使用正方形图片。推荐尺寸为 1200x1200 像素。否则请使用横版图片，推荐尺寸为 1200x630。
```

#### [`fof-seo.admin.settings.social_media_image.help_usage`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_usage%22)

> This image will be used by Social Media when a user shares a page on your website (Facebook, X (formerly Twitter), Reddit).

```diff
+当用户在 Facebook、X（原 Twitter）、Reddit 等网站上分享你的论坛页面时，社交媒体将使用此图像。
```

#### [`fof-seo.admin.settings.twitter_card.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.heading%22)

> X (formerly Twitter) card size

```diff
+X（原 Twitter）卡片尺寸
```

#### [`fof-seo.admin.settings.twitter_card.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.help%22)

> When your forum is shared on X (formerly Twitter), it will have an image (if a social media image has been set up). This can be a big card with a big image, or a small card (summary) with a smaller image.

```diff
+当你的论坛在 X（原 Twitter）上被分享时，如果已设置社交媒体图片，它将会显示一张图片。这可以是大图的大卡片，也可以是带较小图片的小卡片（摘要）。
```

#### [`fof-seo.admin.settings.twitter_card.option_large`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_large%22)

> Large card (large image)

```diff
+大卡片（大图）
```

#### [`fof-seo.admin.settings.twitter_card.option_summary`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_summary%22)

> Summary card (smaller image)

```diff
+摘要卡片（小图）
```

#### [`fof-seo.admin.settings.updated.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.updated.button%22)

> Back to overview and re-check

```diff
+返回概述并重新检查
```

#### [`fof-seo.admin.settings.updated.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.updated.heading%22)

> Updated this setting?

```diff
+更新了这个设置吗？
```

#### [`fof-seo.admin.settings.updated.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.admin.settings.updated.help%22)

> When you think you're ready, click the button below to re-check the status of this setting.

```diff
+当您认为您准备好时，请单击下面的按钮重新检查此设置的状态。
```

#### [`fof-seo.forum.controls.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.controls.configure_seo%22)

> Configure SEO

```diff
+配置 SEO
```

#### [`fof-seo.forum.controls.reset_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.controls.reset_seo%22)

> Reset SEO

```diff
+重置 SEO
```

#### [`fof-seo.forum.controls.update_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.controls.update_seo%22)

> Update SEO

```diff
+更新 SEO
```

#### [`fof-seo.forum.meta_seo.auto_update.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.help%22)

> When enabled, this items meta tags are automatically updated when the object changes.

```diff
+如果启用，当对象发生更改时，此项目的 meta 标签将自动更新。
```

#### [`fof-seo.forum.meta_seo.auto_update.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.label%22)

> Auto update meta tags

```diff
+自动更新 meta 标签
```

#### [`fof-seo.forum.meta_seo.auto_update.switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.switch%22)

> Update object SEO on change

```diff
+更改时更新对象 SEO
```

#### [`fof-seo.forum.meta_seo.close.autofill_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.autofill_info%22)

> This change will revert custom changes and fill the meta-tags with item-data.

```diff
+此更改将撤销自定义更改，并使用项目数据填充 meta 标签。
```

#### [`fof-seo.forum.meta_seo.close.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.close%22)

> Close

```diff
+关闭
```

#### [`fof-seo.forum.meta_seo.close.save`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save%22)

> Save

```diff
+保存
```

#### [`fof-seo.forum.meta_seo.close.save_autofill`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save_autofill%22)

> Save &amp; auto-fill

```diff
+保存 & 自动填充
```

#### [`fof-seo.forum.meta_seo.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.help%22)

> Displays an image.

```diff
+显示图像。
```

#### [`fof-seo.forum.meta_seo.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.label%22)

> Meta image

```diff
+meta 图像
```

#### [`fof-seo.forum.meta_seo.image.managed_by`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.managed_by%22)

> Image source managed by {source}

```diff
+图片来源由 {source} 管理
```

#### [`fof-seo.forum.meta_seo.image.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.placeholder%22)

> Enter image URL

```diff
+输入图片 URL
```

#### [`fof-seo.forum.meta_seo.image.upload`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.upload%22)

> Upload file

```diff
+上传文件
```

#### [`fof-seo.forum.meta_seo.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+注意：关键词之间用英文逗号分隔，逗号后不空格。
```

#### [`fof-seo.forum.meta_seo.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+例如：flarum,网站开发,论坛,苹果,安全
```

#### [`fof-seo.forum.meta_seo.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.help%22)

> Enter one or more keywords that describes this item.

```diff
+请输入一个或多个描述此站点的关键词。
```

#### [`fof-seo.forum.meta_seo.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.label%22)

> Keywords

```diff
+关键词
```

#### [`fof-seo.forum.meta_seo.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.placeholder%22)

> Add a few keywords

```diff
+添加一些关键词
```

#### [`fof-seo.forum.meta_seo.managed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.managed%22)

> Managed

```diff
+管理
```

#### [`fof-seo.forum.meta_seo.meta_description.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.help%22)

> Describes the item and shown in search engines.

```diff
+站点描述信息，并在搜索引擎中显示。
```

#### [`fof-seo.forum.meta_seo.meta_description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.label%22)

> Meta description

```diff
+meta 描述
```

#### [`fof-seo.forum.meta_seo.meta_title.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.help%22)

> Title in search engines.

```diff
+在搜索引擎中的标题。
```

#### [`fof-seo.forum.meta_seo.meta_title.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.label%22)

> Meta title

```diff
+meta 标题
```

#### [`fof-seo.forum.meta_seo.meta_title.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.placeholder%22)

> Enter page title

```diff
+输入页面标题
```

#### [`fof-seo.forum.meta_seo.note_prefix`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.note_prefix%22)

> Note:

```diff
+注释：
```

#### [`fof-seo.forum.meta_seo.og.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.auto_switch%22)

> Auto generate Open Graph tags

```diff
+自动生成 Open Graph 标签
```

#### [`fof-seo.forum.meta_seo.og.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.label%22)

> Open Graph description

```diff
+Open Graph 简介
```

#### [`fof-seo.forum.meta_seo.og.description.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.placeholder%22)

> Custom Open Graph description

```diff
+自定义 Open Graph 简介
```

#### [`fof-seo.forum.meta_seo.og.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.label%22)

> Open Graph tags

```diff
+Open Graph 标签
```

#### [`fof-seo.forum.meta_seo.og.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.title%22)

> Open Graph title

```diff
+Open Graph 标题
```

#### [`fof-seo.forum.meta_seo.reading_time.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.help%22)

> Estimated reading time in seconds.

```diff
+预计阅读时间（以秒为单位）。
```

#### [`fof-seo.forum.meta_seo.reading_time.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.label%22)

> Estimated reading time

```diff
+预计阅读时间
```

#### [`fof-seo.forum.meta_seo.reading_time.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.placeholder%22)

> Reading time in seconds

```diff
+阅读时间（秒）
```

#### [`fof-seo.forum.meta_seo.robots.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.help%22)

> Robot-crawling settings for this item.

```diff
+来自搜索引擎的爬取机器人爬取设置。
```

#### [`fof-seo.forum.meta_seo.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.label%22)

> Robots

```diff
+来自搜索引擎的爬取机器人
```

#### [`fof-seo.forum.meta_seo.robots.switch.follow`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.follow%22)

> Allow following links to different pages

```diff
+允许跟随链接跳转到不同页面
```

#### [`fof-seo.forum.meta_seo.robots.switch.indexing`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.indexing%22)

> Allow indexing page

```diff
+允许索引页面
```

#### [`fof-seo.forum.meta_seo.robots.switch.noarchive`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noarchive%22)

> Disable archiving page (noarchive)

```diff
+禁用归档页面（noarchive）
```

#### [`fof-seo.forum.meta_seo.robots.switch.noimageindex`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noimageindex%22)

> Disable indexing images on this page (noimageindex)

```diff
+禁用此页面上的图片索引（noimageindex）
```

#### [`fof-seo.forum.meta_seo.robots.switch.nosnippet`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.nosnippet%22)

> Disable text-snippes on page (nosnippet)

```diff
+禁用页面上的文本片段（nosnippet）
```

#### [`fof-seo.forum.meta_seo.robots.tags.archive_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.archive_not_allowed%22)

> Archiving pages not allowed

```diff
+归档页面不被允许
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_allowed%22)

> Allow follow links

```diff
+允许被关注的链接
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_not_allowed%22)

> Link following not allowed

```diff
+链接不被允许关注
```

#### [`fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed%22)

> Image indexing not allowed

```diff
+图片索引不被允许
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_allowed%22)

> Allow indexing page

```diff
+允许索引的页面
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed%22)

> Page indexing not allowed

```diff
+该页面不允许被索引
```

#### [`fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed%22)

> Taking text-snippets not allowed

```diff
+禁止截取文本片段
```

#### [`fof-seo.forum.meta_seo.saved`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.saved%22)

> Saved!

```diff
+已保存！
```

#### [`fof-seo.forum.meta_seo.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.title%22)

> SEO settings - Meta

```diff
+SEO 设置 - Meta
```

#### [`fof-seo.forum.meta_seo.twitter.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.auto_switch%22)

> Auto generate X (formerly Twitter) card

```diff
+自动生成 X（原 Twitter）卡片
```

#### [`fof-seo.forum.meta_seo.twitter.description`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.description%22)

> X (formerly Twitter) description

```diff
+X（原 Twitter）简介
```

#### [`fof-seo.forum.meta_seo.twitter.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.help%22)

> Displays an image on X (formerly Twitter).

```diff
+在X（原 Twitter）中显示图片。
```

#### [`fof-seo.forum.meta_seo.twitter.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.label%22)

> X (formerly Twitter) image

```diff
+X（原 Twitter）图片
```

#### [`fof-seo.forum.meta_seo.twitter.image.reset`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.reset%22)

> Reset image

```diff
+重置图片
```

#### [`fof-seo.forum.meta_seo.twitter.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.label%22)

> X (formerly Twitter) card

```diff
+X（原 Twitter）卡片
```

#### [`fof-seo.forum.meta_seo.twitter.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.title%22)

> X (formerly Twitter) title

```diff
+X（原 Twitter）标题
```

#### [`fof-seo.forum.meta_seo.unsupported_object.body`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.body%22)

> Please open this dialog using the objectType and objectId properties or register the object relationship instead.

```diff
+请使用 objectType 和 objectId 属性打开此对话框，或者改为注册对象关系。
```

#### [`fof-seo.forum.meta_seo.unsupported_object.docs_link`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.docs_link%22)

> Documentation

```diff
+文档
```

#### [`fof-seo.forum.meta_seo.unsupported_object.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.title%22)

> This object is not a supported SeoMeta object

```diff
+此对象不是受支持的 SEO meta 数据对象
```

#### [`fof-seo.forum.profile_description`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.profile_description%22)

> Profile of {username} \| {discussion\_count} discussions \| {comment\_count} posts

```diff
+用户 {username} 的个人资料 | 讨论数 {discussion_count} 篇 | 帖子数 {comment_count} 篇
```

#### [`fof-seo.forum.profile_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/zh_Hans/?q=context%3A%3D%22fof-seo.forum.profile_title%22)

> Profile of {username}

```diff
+{username} 的个人资料
```


### `fof-signature` (missing)

#### [`fof-signature.admin.permissions.allow_signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.permissions.allow_signature%22)

> Can have a signature

```diff
+可以拥有签名
```

#### [`fof-signature.admin.permissions.edit_signature_others`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.permissions.edit_signature_others%22)

> Edit other users' signatures

```diff
+编辑其他用户的签名
```

#### [`fof-signature.admin.settings.allow_inline_editing.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.description%22)

> Inline editing of signature.

```diff
+在线编辑签名。
```

#### [`fof-signature.admin.settings.allow_inline_editing.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.help%22)

> When enabled, users can edit their signature while viewing a post.

```diff
+如果启用，用户可以在查看帖子时编辑签名。
```

#### [`fof-signature.admin.settings.maximum_char_limit.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.description%22)

> Maximum character limit of signature.

```diff
+签名的最大字符数限制。
```

#### [`fof-signature.admin.settings.maximum_char_limit.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.help%22)

> When the user exceeds the maximum character limit in their signature, they will be prevented from saving until the character count is accordingly.

```diff
+当用户签名超过最大字符数限制时，系统将阻止其保存，直到字符数达到相应要求为止。
```

#### [`fof-signature.admin.settings.maximum_image_count.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.description%22)

> Maximum inserted images.

```diff
+最大插入图片数量。
```

#### [`fof-signature.admin.settings.maximum_image_count.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.help%22)

> When the user exceeds the maximum image count in their signature, they will be prevented from saving until the image count is accordingly.

```diff
+当用户签名中的图片数量超过最大限制时，系统将阻止用户保存，直到图片数量达到限制值为止。
```

#### [`fof-signature.forum.buttons.edit`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.buttons.edit%22)

> Edit Signature

```diff
+编辑签名
```

#### [`fof-signature.forum.buttons.save`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.buttons.save%22)

> Save Signature

```diff
+保存签名
```

#### [`fof-signature.forum.buttons.signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.buttons.signature%22)

> Signature

```diff
+签名
```

#### [`fof-signature.forum.editor.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.editor.placeholder%22)

> Edit your signature here

```diff
+在此编辑您的签名
```

#### [`fof-signature.forum.errors.max_char_limit_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.errors.max_char_limit_exceed%22)

> Maximum character limit exceeded.

```diff
+超出字符限制。
```

#### [`fof-signature.forum.errors.max_image_count_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.errors.max_image_count_exceed%22)

> Maximum image count exceeded.

```diff
+图片数量已达上限。
```

#### [`fof-signature.forum.errors.save_failed`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.errors.save_failed%22)

> Something went wrong while saving your signature.

```diff
+保存签名时出错。
```

#### [`fof-signature.forum.profile.click`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.profile.click%22)

> Click to write your signature

```diff
+点击这里以签名
```

#### [`fof-signature.forum.settings.heading`](https://weblate.rob006.net/translate/flarum2/fof-signature/zh_Hans/?q=context%3A%3D%22fof-signature.forum.settings.heading%22)

> Signature

```diff
+签名
```


### `fof-socialprofile` (missing)

#### [`fof-socialprofile.admin.settings.favicon_provider_label`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/zh_Hans/?q=context%3A%3D%22fof-socialprofile.admin.settings.favicon_provider_label%22)

> External Favicon Provider

```diff
+外部 Favicon 提供商
```


### `fof-terms` (missing)

#### [`flarum-gdpr.lib.data.userpolicydata.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-terms/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.userpolicydata.delete_description%22)

> Removes the user's acceptance of the terms

```diff
+移除用户对服务条款的接受记录
```

#### [`flarum-gdpr.lib.data.userpolicydata.export_description`](https://weblate.rob006.net/translate/flarum2/fof-terms/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.userpolicydata.export_description%22)

> Details about the user's acceptance of the terms

```diff
+关于用户接受服务条款的详细信息
```

#### [`fof-terms.forum.update-alert.can-accept-optional-message`](https://weblate.rob006.net/translate/flarum2/fof-terms/zh_Hans/?q=context%3A%3D%22fof-terms.forum.update-alert.can-accept-optional-message%22)

> We recently updated the terms. You can review them at your convenience.

```diff
+我们最近更新了服务条款。您可以在方便时查阅。
```

#### [`fof-terms.forum.update-alert.close`](https://weblate.rob006.net/translate/flarum2/fof-terms/zh_Hans/?q=context%3A%3D%22fof-terms.forum.update-alert.close%22)

> Close

```diff
+关闭
```

#### [`fof-terms.forum.user_settings.optional_policies_label`](https://weblate.rob006.net/translate/flarum2/fof-terms/zh_Hans/?q=context%3A%3D%22fof-terms.forum.user_settings.optional_policies_label%22)

> Policies

```diff
+各项政策
```


### `fof-top-posters-widget` (missing)

#### [`fof-top-posters-widget.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/zh_Hans/?q=context%3A%3D%22fof-top-posters-widget.admin.settings.info%22)

> Users of the selected groups will be excluded from the widget results.

```diff
+所选群组的用户，将被排除在小组件结果之外。
```

#### [`fof-top-posters-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/zh_Hans/?q=context%3A%3D%22fof-top-posters-widget.forum.widget.title%22)

> Top Posters this Month

```diff
+本月发帖之星
```


### `fof-upload` (missing)

#### [`fof-upload.admin.labels.configured_by_environment`](https://weblate.rob006.net/translate/flarum2/fof-upload/zh_Hans/?q=context%3A%3D%22fof-upload.admin.labels.configured_by_environment%22)

> Your storage settings have been pre-configured via environment variables.

```diff
+您的存储设置已通过环境变量预先配置。
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate`](https://weblate.rob006.net/translate/flarum2/fof-upload/zh_Hans/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate%22)

> Allow SVG animations

```diff
+允许 SVG 动画
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate_help`](https://weblate.rob006.net/translate/flarum2/fof-upload/zh_Hans/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate_help%22)

> Enabling SVG animations may introduce security vulnerabilities as animated SVGs can contain malicious code. Enable this setting at your own risk and only if you trust your users.

```diff
+启用 SVG 动画可能会引入安全漏洞，因为动画 SVG 可能包含恶意代码。请自行承担风险启用此设置，并且仅在您信任用户的情况下启用。
```

#### [`fof-upload.admin.labels.svg-sanitizer.help`](https://weblate.rob006.net/translate/flarum2/fof-upload/zh_Hans/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.help%22)

> Configure how SVG files are processed and sanitized when uploaded. SVG files can contain potentially harmful scripts and should be handled carefully. Uploaded SVGs are sanitized on upload and harmful scripts and tags are removed.

```diff
+配置上传时 SVG 文件的处理和清理方式。SVG 文件可能包含潜在有害脚本，应谨慎处理。上传的 SVG 文件在上传时会进行清理，有害脚本和标签会被移除。
```

#### [`fof-upload.admin.labels.svg-sanitizer.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/zh_Hans/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.title%22)

> SVG Sanitizer

```diff
+SVG 清理器
```


### `fof-user-directory` (missing)

#### [`fof-user-directory.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/zh_Hans/?q=context%3A%3D%22fof-user-directory.forum.hero.title%22)

> =&gt; fof-user-directory.forum.page.nav

```diff
+=> fof-user-directory.forum.page.nav
```


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/zh_Hans/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+讨论数
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/zh_Hans/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+帖子数
```


### `fof-webhooks` (missing)

#### [`fof-webhooks.admin.settings.modal.include_matching_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.include_matching_tags_label%22)

> Include matching tags -- for webhooks restricted to specific tags, show which ones the event matched

```diff
+包含匹配标签 -- 对于限制为特定标签的 webhook，显示事件匹配了哪些标签
```

#### [`fof-webhooks.admin.settings.modal.name_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.name_help%22)

> The name of the webhook. This will be used for things like the Discord username, Slack bot name, etc.

```diff
+webhook 的名称。这将用于 Discord 用户名、Slack 机器人名称等。
```

#### [`fof-webhooks.admin.settings.modal.name_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/zh_Hans/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.name_label%22)

> Name

```diff
+名称
```


### `forumaker-magicbb` (missing)

#### [`forumaker-magicbb.admin.settings.bb_audio`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_audio%22)

> Audio

```diff
+音频
```

#### [`forumaker-magicbb.forum.composer.audio_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.audio_button%22)

> Add audio

```diff
+添加音频
```


### `forumaker-magicread` (missing)

#### [`forumaker-magicread.admin.settings.enable_readmore`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore%22)

> Read more preview on profile page

```diff
+在个人资料页启用“阅读更多”预览
```

#### [`forumaker-magicread.forum.read_more`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.read_more%22)

> Read more

```diff
+阅读更多
```


### `huseyinfiliz-diff` (missing)

#### [`huseyinfiliz-diff.admin.permissions.deleteEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.deleteEditHistory%22)

> Delete others edit history

```diff
+删除他人的编辑历史
```

#### [`huseyinfiliz-diff.admin.permissions.rollbackEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.rollbackEditHistory%22)

> Rollback others edit history

```diff
+回滚他人的编辑历史
```

#### [`huseyinfiliz-diff.admin.permissions.selfDeleteEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.selfDeleteEditHistory%22)

> Delete own edit history

```diff
+删除自己的编辑历史
```

#### [`huseyinfiliz-diff.admin.permissions.selfRollbackEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.selfRollbackEditHistory%22)

> Rollback own edit history

```diff
+回滚自己的编辑历史
```

#### [`huseyinfiliz-diff.admin.permissions.viewEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.viewEditHistory%22)

> View edit history

```diff
+查看编辑历史
```

#### [`huseyinfiliz-diff.admin.settings.archiveInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveInfo%22)

> Keep in mind that you can disable both options and run &lt;code&gt;php flarum diff:archive&lt;/code&gt; command to archive old revisions manually.

```diff
+你也可以禁用以上两个选项，并手动运行 <code>php flarum diff:archive</code> 命令来归档旧修订。
```

#### [`huseyinfiliz-diff.admin.settings.archiveOlds`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveOlds%22)

> Archive old revisions

```diff
+归档旧修订
```

#### [`huseyinfiliz-diff.admin.settings.archiveOldsInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveOldsInfo%22)

> If &lt;strong&gt;x ≥ A&lt;/strong&gt;, first &lt;strong&gt;y=mx+b&lt;/strong&gt; revisions for the post will be stored as merged &amp; compressed. The &lt;strong&gt;x&lt;/strong&gt; refers to post's revision count. Float values of &lt;strong&gt;y&lt;/strong&gt; will be rounded to the next lowest integer value.

```diff
+如果 <strong>x ≥ A</strong>，则该帖子的前 <strong>y=mx+b</strong> 个修订将被合并并压缩存储。<strong>x</strong> 表示帖子的修订数量。<strong>y</strong> 的浮点值将向下取整。
```

#### [`huseyinfiliz-diff.admin.settings.charLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.charLevel%22)

> Char-level

```diff
+字符级
```

#### [`huseyinfiliz-diff.admin.settings.dbOptimisation`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.dbOptimisation%22)

> Database Optimisation

```diff
+数据库优化
```

#### [`huseyinfiliz-diff.admin.settings.detailLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.detailLevel%22)

> Detail Level

```diff
+差异细节级别
```

#### [`huseyinfiliz-diff.admin.settings.lineLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.lineLevel%22)

> Line-level

```diff
+行级
```

#### [`huseyinfiliz-diff.admin.settings.mainPostOnly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mainPostOnly%22)

> Store main post's revisions only

```diff
+仅存储主帖的修订记录
```

#### [`huseyinfiliz-diff.admin.settings.mergeThreshold`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mergeThreshold%22)

> Merge Threshold for the Combined Renderer

```diff
+合并渲染器的合并阈值
```

#### [`huseyinfiliz-diff.admin.settings.mergeThresholdHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mergeThresholdHelp%22)

> This determines whether a replace-type block should be merged or not depending on the content changed ratio, which values between 0 and 1.

```diff
+根据内容更改比例（0 到 1 之间）决定是否合并替换类型的差异块。
```

#### [`huseyinfiliz-diff.admin.settings.neighborLines`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.neighborLines%22)

> Neighbor Lines

```diff
+上下文行数
```

#### [`huseyinfiliz-diff.admin.settings.neighborLinesHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.neighborLinesHelp%22)

> Specify the neighbor line count that you want to show.

```diff
+指定要显示的上下文行数量。
```

#### [`huseyinfiliz-diff.admin.settings.noneLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.noneLevel%22)

> None-level

```diff
+无
```

#### [`huseyinfiliz-diff.admin.settings.onlyUnsigned`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.onlyUnsigned%22)

> Only &lt;strong&gt;unsigned integers&lt;/strong&gt; are allowed!

```diff
+只允许 <strong>无符号整数</strong>！
```

#### [`huseyinfiliz-diff.admin.settings.separateBlock`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.separateBlock%22)

> Show a separator between different diff hunks in HTML renderers

```diff
+在 HTML 渲染中为不同的差异块显示分隔符
```

#### [`huseyinfiliz-diff.admin.settings.textFormatting`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.textFormatting%22)

> Enable text formatting for previews

```diff
+为预览启用文本格式化
```

#### [`huseyinfiliz-diff.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.title%22)

> Diff Settings

```diff
+Diff 设置
```

#### [`huseyinfiliz-diff.admin.settings.useCrons`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.useCrons%22)

> Use crons to archive old revisions

```diff
+使用 Cron 归档旧修订
```

#### [`huseyinfiliz-diff.admin.settings.useCronsHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.useCronsHelp%22)

> You must add Cron entry to your server to make this option work. It'll work weekly on sundays at 02:00 AM. If you disable this option and enable above, all of the post's revisions will be scanned for archiving when the related post is revised.

```diff
+你需要在服务器上添加 Cron 任务才能启用此功能。该任务将在每周日凌晨 02:00 运行。如果禁用此选项但启用上面的归档选项，则每次帖子被编辑时都会扫描修订记录进行归档。
```

#### [`huseyinfiliz-diff.admin.settings.usePoint`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.usePoint%22)

> Use &lt;strong&gt;point&lt;/strong&gt; as decimal seperator for float values.

```diff
+浮点数使用 <strong>点（.）</strong> 作为小数分隔符。
```

#### [`huseyinfiliz-diff.admin.settings.wordLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.wordLevel%22)

> Word-level

```diff
+词级
```

#### [`huseyinfiliz-diff.forum.confirmDelete`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.confirmDelete%22)

> Are you sure you want to delete this edit's contents from the history?

```diff
+确定要从历史记录中删除此次编辑内容吗？
```

#### [`huseyinfiliz-diff.forum.confirmRollback`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.confirmRollback%22)

> Are you sure you want to change your current post?

```diff
+确定要将当前帖子回滚到该版本吗？
```

#### [`huseyinfiliz-diff.forum.createdInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.createdInfo%22)

> {username} created {ago}

```diff
+{username} 于 {ago} 创建
```

#### [`huseyinfiliz-diff.forum.deleteButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deleteButton%22)

> =&gt; core.forum.post\_controls.delete\_button

```diff
+=> core.forum.post_controls.delete_button
```

#### [`huseyinfiliz-diff.forum.deleteErrorMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deleteErrorMessage%22)

> Deletion of edit's contents failed.

```diff
+删除编辑内容失败。
```

#### [`huseyinfiliz-diff.forum.deleteSuccessMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deleteSuccessMessage%22)

> Edit's contents were deleted.

```diff
+编辑内容已删除。
```

#### [`huseyinfiliz-diff.forum.deletedInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deletedInfo%22)

> {username} deleted this content {ago}

```diff
+{username} 于 {ago} 删除了此内容
```

#### [`huseyinfiliz-diff.forum.deletedText`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deletedText%22)

> (deleted)

```diff
+（已删除）
```

#### [`huseyinfiliz-diff.forum.differences.currentContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.currentContent%22)

> =&gt; huseyinfiliz-diff.ref.currentContent

```diff
+=> huseyinfiliz-diff.ref.currentContent
```

#### [`huseyinfiliz-diff.forum.differences.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.originalContent%22)

> =&gt; huseyinfiliz-diff.ref.originalContent

```diff
+=> huseyinfiliz-diff.ref.originalContent
```

#### [`huseyinfiliz-diff.forum.differences.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.revisionWithNumber%22)

> =&gt; huseyinfiliz-diff.ref.revisionWithNumber

```diff
+=> huseyinfiliz-diff.ref.revisionWithNumber
```

#### [`huseyinfiliz-diff.forum.differences.sentence`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.sentence%22)

> You're viewing differences between {old} and {new}

```diff
+你正在查看 {old} 与 {new} 之间的差异
```

#### [`huseyinfiliz-diff.forum.editedInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.editedInfo%22)

> =&gt; core.forum.post.edited\_tooltip

```diff
+=> core.forum.post.edited_tooltip
```

#### [`huseyinfiliz-diff.forum.editedText`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.editedText%22)

> =&gt; core.forum.post.edited\_text

```diff
+=> core.forum.post.edited_text
```

#### [`huseyinfiliz-diff.forum.emptyText`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.emptyText%22)

> No Revisions

```diff
+没有修订记录
```

#### [`huseyinfiliz-diff.forum.noDiff`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.noDiff%22)

> No differences found between these two contents.

```diff
+未发现这两个版本之间的差异。
```

#### [`huseyinfiliz-diff.forum.optionsButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.optionsButton%22)

> Options

```diff
+选项
```

#### [`huseyinfiliz-diff.forum.previewMode.currentContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.currentContent%22)

> =&gt; huseyinfiliz-diff.ref.currentContent

```diff
+=> huseyinfiliz-diff.ref.currentContent
```

#### [`huseyinfiliz-diff.forum.previewMode.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.originalContent%22)

> =&gt; huseyinfiliz-diff.ref.originalContent

```diff
+=> huseyinfiliz-diff.ref.originalContent
```

#### [`huseyinfiliz-diff.forum.previewMode.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.revisionWithNumber%22)

> =&gt; huseyinfiliz-diff.ref.revisionWithNumber

```diff
+=> huseyinfiliz-diff.ref.revisionWithNumber
```

#### [`huseyinfiliz-diff.forum.previewMode.sentence`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.sentence%22)

> You're previewing {content}

```diff
+你正在预览 {content}
```

#### [`huseyinfiliz-diff.forum.revertChangesButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.revertChangesButton%22)

> Revert Changes

```diff
+撤销更改
```

#### [`huseyinfiliz-diff.forum.revisionInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.revisionInfo%22)

> Edited {revisionCount, plural, one {{revisionCount} time} other {{revisionCount} times}}, newest at the top

```diff
+已编辑 {revisionCount, plural, one {{revisionCount} 次} other {{revisionCount} 次}}，最新版本在顶部
```

#### [`huseyinfiliz-diff.forum.revisions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.revisions%22)

> {revisionCount, plural, one {{revisionCount} revision} other {{revisionCount} revisions}}

```diff
+{revisionCount, plural, one {{revisionCount} 次修订} other {{revisionCount} 次修订}}
```

#### [`huseyinfiliz-diff.forum.rollbackButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackButton%22)

> Rollback to Revision {number}

```diff
+回滚到修订版本 {number}
```

#### [`huseyinfiliz-diff.forum.rollbackErrorMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackErrorMessage%22)

> Reverting of changes failed.

```diff
+回滚失败。
```

#### [`huseyinfiliz-diff.forum.rollbackSuccessMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackSuccessMessage%22)

> Your changes were reverted.

```diff
+你的更改已回滚。
```

#### [`huseyinfiliz-diff.forum.rollbackToOriginalButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackToOriginalButton%22)

> Rollback to Original

```diff
+回滚到原始内容
```

#### [`huseyinfiliz-diff.forum.tooltips.combined`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.combined%22)

> Combined

```diff
+合并显示
```

#### [`huseyinfiliz-diff.forum.tooltips.inline`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.inline%22)

> Line by Line

```diff
+逐行显示
```

#### [`huseyinfiliz-diff.forum.tooltips.mostRecent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.mostRecent%22)

> most recent

```diff
+最新
```

#### [`huseyinfiliz-diff.forum.tooltips.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.originalContent%22)

> =&gt; huseyinfiliz-diff.ref.originalContent

```diff
+=> huseyinfiliz-diff.ref.originalContent
```

#### [`huseyinfiliz-diff.forum.tooltips.preview`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.preview%22)

> =&gt; core.forum.composer.preview\_tooltip

```diff
+=> core.forum.composer.preview_tooltip
```

#### [`huseyinfiliz-diff.forum.tooltips.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.revisionWithNumber%22)

> =&gt; huseyinfiliz-diff.ref.revisionWithNumber

```diff
+=> huseyinfiliz-diff.ref.revisionWithNumber
```

#### [`huseyinfiliz-diff.forum.tooltips.sideBySide`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.sideBySide%22)

> Side by Side

```diff
+并排显示
```

#### [`huseyinfiliz-diff.ref.currentContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.ref.currentContent%22)

> current content

```diff
+当前内容
```

#### [`huseyinfiliz-diff.ref.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.ref.originalContent%22)

> original content

```diff
+原始内容
```

#### [`huseyinfiliz-diff.ref.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.ref.revisionWithNumber%22)

> revision {number}

```diff
+修订版本 {number}
```


### `huseyinfiliz-leaderboard` (missing)

#### [`huseyinfiliz-leaderboard.admin.modals.cancel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.cancel%22)

> Cancel

```diff
+取消
```

#### [`huseyinfiliz-leaderboard.admin.modals.close`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.close%22)

> Close

```diff
+关闭
```

#### [`huseyinfiliz-leaderboard.admin.modals.none_selected`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.none_selected%22)

> None selected

```diff
+未选择任何项
```

#### [`huseyinfiliz-leaderboard.admin.modals.save`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.save%22)

> Save

```diff
+保存
```

#### [`huseyinfiliz-leaderboard.admin.modals.select_groups`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.select_groups%22)

> Select Groups

```diff
+选择群组
```

#### [`huseyinfiliz-leaderboard.admin.modals.select_tags`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.select_tags%22)

> Select Tags

```diff
+选择标签
```

#### [`huseyinfiliz-leaderboard.admin.settings.already_running`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.already_running%22)

> A recalculation is already in progress. Please wait for it to finish.

```diff
+重新计算已在进行中。请等待其完成。
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_groups_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_groups_help%22)

> Users in selected groups will be excluded from the leaderboard.

```diff
+所选群组中的用户将被排除在排行榜之外。
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_groups_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_groups_label%22)

> Excluded Groups

```diff
+排除的群组
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_help%22)

> Discussions with selected tags will not earn points.

```diff
+带有选定标签的讨论将不会获得积分。
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_label%22)

> Excluded Tags

```diff
+排除的标签
```

#### [`huseyinfiliz-leaderboard.admin.settings.extension_not_enabled`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.extension_not_enabled%22)

> This extension is not enabled.

```diff
+此扩展未启用。
```

#### [`huseyinfiliz-leaderboard.admin.settings.leaderboard_name_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.leaderboard_name_label%22)

> Leaderboard Name

```diff
+排行榜名称
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_badge_earned_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_badge_earned_label%22)

> Points for earning a badge

```diff
+获得徽章的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_best_answer_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_best_answer_label%22)

> Points for best answer

```diff
+最佳答案的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_changed_notice%22)

> Point values have changed. Sync points to apply new values.

```diff
+积分值已更改。同步积分以应用新值。
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_daily_login_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_daily_login_label%22)

> Points for daily login

```diff
+每日登录的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_discussion_started_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_discussion_started_label%22)

> Points for starting a discussion

```diff
+发起讨论的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_downvote_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_downvote_received_label%22)

> Points for receiving a downvote

```diff
+收到踩的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_label_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_label_label%22)

> Points Label

```diff
+积分标签
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_like_given_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_like_given_label%22)

> Points for giving a like

```diff
+给出赞的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_like_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_like_received_label%22)

> Points for receiving a like

```diff
+收到赞的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_post_created_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_post_created_label%22)

> Points for posting a reply

```diff
+发表回复的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_reaction_given_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_reaction_given_label%22)

> Points for giving a reaction

```diff
+给出表情的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_reaction_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_reaction_received_label%22)

> Points for receiving a reaction

```diff
+收到表情的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_upvote_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_upvote_received_label%22)

> Points for receiving an upvote

```diff
+收到顶的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_button`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_button%22)

> Recalculate All Activity

```diff
+重新计算所有活动
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_confirm%22)

> This will re-scan all source data and rebuild point records from scratch. This may take a while on large forums.

```diff
+这将重新扫描所有源数据并从头开始重建积分记录。在大型论坛上可能需要一些时间。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_failed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_failed%22)

> Recalculation failed. You can try again.

```diff
+重新计算失败。您可以再试一次。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_help%22)

> Re-scans all source data (discussions, posts, likes, etc.), removes orphaned records, adds missing ones, and rebuilds all totals. Use this after changing tag exclusions or if data seems out of sync.

```diff
+重新扫描所有源数据（讨论、帖子、点赞等），删除孤立记录，添加缺失记录，并重建所有总计。在更改标签排除项或数据似乎不同步时使用此功能。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_retry`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_retry%22)

> Try Again

```diff
+再试一次
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_success%22)

> All activity recalculated successfully.

```diff
+所有活动已成功重新计算。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_title%22)

> Recalculate All Activity

```diff
+重新计算所有活动
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_warning`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_warning%22)

> Do not close this page or navigate away while recalculation is in progress. The operation will fail if interrupted.

```diff
+重新计算进行中时，请勿关闭此页面或离开。如果中断，操作将失败。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_button`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_button%22)

> Sync Points

```diff
+同步积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_help%22)

> Recalculates all user point totals using current point values. Use this after changing point values.

```diff
+使用当前积分值重新计算所有用户积分总计。在更改积分值后使用此功能。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_success%22)

> Points synced successfully.

```diff
+积分已成功同步。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_title%22)

> Sync Points

```diff
+同步积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_badges`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_badges%22)

> Badges

```diff
+徽章
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_best_answer`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_best_answer%22)

> Best Answer

```diff
+最佳答案
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_core`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_core%22)

> Core Points

```diff
+核心积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_gamification`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_gamification%22)

> Gamification

```diff
+游戏化
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_likes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_likes%22)

> Likes

```diff
+赞
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_reactions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_reactions%22)

> Reactions

```diff
+表情
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_badge_earned`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_badge_earned%22)

> Scanning badges...

```diff
+正在扫描徽章...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_best_answer`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_best_answer%22)

> Scanning best answers...

```diff
+正在扫描最佳答案...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_discussion_started`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_discussion_started%22)

> Scanning discussions...

```diff
+正在扫描讨论...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_like_given`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_like_given%22)

> Scanning likes given...

```diff
+正在扫描发出的赞...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_like_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_like_received%22)

> Scanning likes received...

```diff
+正在扫描收到的赞...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_post_created`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_post_created%22)

> Scanning posts...

```diff
+正在扫描帖子...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_given`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_given%22)

> Scanning reactions given...

```diff
+正在扫描发出的表情...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_received%22)

> Scanning reactions received...

```diff
+正在扫描收到的表情...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_rebuild_totals`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_rebuild_totals%22)

> Rebuilding totals...

```diff
+正在重建总计...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_vote_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_vote_received%22)

> Scanning votes...

```diff
+正在扫描投票...
```

#### [`huseyinfiliz-leaderboard.admin.settings.tags_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.tags_changed_notice%22)

> Tag exclusions have changed. Recalculate all activity to update historical data.

```diff
+标签排除项已更改。重新计算所有活动以更新历史数据。
```

#### [`huseyinfiliz-leaderboard.admin.tabs.exclusions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.exclusions%22)

> Exclusions

```diff
+排除项
```

#### [`huseyinfiliz-leaderboard.admin.tabs.general`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.general%22)

> General

```diff
+通用
```

#### [`huseyinfiliz-leaderboard.admin.tabs.maintenance`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.maintenance%22)

> Maintenance

```diff
+维护
```

#### [`huseyinfiliz-leaderboard.admin.tabs.points`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.points%22)

> Points

```diff
+积分
```

#### [`huseyinfiliz-leaderboard.forum.contenders.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.contenders.title%22)

> Top Contenders

```diff
+顶级竞争者
```

#### [`huseyinfiliz-leaderboard.forum.honorable.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.honorable.title%22)

> Honorable Mentions

```diff
+荣誉提名
```

#### [`huseyinfiliz-leaderboard.forum.list.load_more`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.load_more%22)

> Show More

```diff
+显示更多
```

#### [`huseyinfiliz-leaderboard.forum.list.no_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.no_results%22)

> No results for this period.

```diff
+此期间无结果。
```

#### [`huseyinfiliz-leaderboard.forum.list.points`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.points%22)

> {points} {label}

```diff
+{points} {label}
```

#### [`huseyinfiliz-leaderboard.forum.list.rank`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.rank%22)

> Rank

```diff
+排名
```

#### [`huseyinfiliz-leaderboard.forum.period.all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.all%22)

> All Time

```diff
+所有时间
```

#### [`huseyinfiliz-leaderboard.forum.period.daily`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.daily%22)

> Daily

```diff
+每日
```

#### [`huseyinfiliz-leaderboard.forum.period.monthly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.monthly%22)

> Monthly

```diff
+每月
```

#### [`huseyinfiliz-leaderboard.forum.period.quarterly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.quarterly%22)

> Quarterly

```diff
+每季度
```

#### [`huseyinfiliz-leaderboard.forum.period.weekly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.weekly%22)

> Weekly

```diff
+每周
```

#### [`huseyinfiliz-leaderboard.forum.period.yearly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.yearly%22)

> Yearly

```diff
+每年
```

#### [`huseyinfiliz-leaderboard.forum.podium.first`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.first%22)

> 1st

```diff
+第1名
```

#### [`huseyinfiliz-leaderboard.forum.podium.second`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.second%22)

> 2nd

```diff
+第2名
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_badges`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_badges%22)

> Badges

```diff
+徽章
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_comments`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_comments%22)

> Comments

```diff
+评论
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_discussions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_discussions%22)

> Discussions

```diff
+讨论
```

#### [`huseyinfiliz-leaderboard.forum.podium.third`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.third%22)

> 3rd

```diff
+第3名
```


### `huseyinfiliz-modern-footer` (missing)

#### [`huseyinfiliz-modern-footer.admin.settings.show_to_everyone`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.show_to_everyone%22)

> Show to Everyone

```diff
+所有人可见
```

#### [`huseyinfiliz-modern-footer.admin.settings.show_to_guests_only`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.show_to_guests_only%22)

> Show to Guests Only

```diff
+仅游客可见
```

#### [`huseyinfiliz-modern-footer.admin.settings.show_to_members_only`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.show_to_members_only%22)

> Show to Members Only

```diff
+仅登录用户可见
```


### `ianm-boring-avatars` (missing)

#### [`flarum-gdpr.lib.data.boringavatar.anonymize_description`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.boringavatar.anonymize_description%22)

> Deletes the boring avatar, and regenerates a new random one.

```diff
+删除现有的 Boring Avatar，并重新随机生成一个新的。
```

#### [`flarum-gdpr.lib.data.boringavatar.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.boringavatar.delete_description%22)

> Deletes the boring avatar.

```diff
+删除 Boring Avatar。
```

#### [`flarum-gdpr.lib.data.boringavatar.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.boringavatar.export_description%22)

> Adds the boring avatar to the export zip.

```diff
+将 Boring Avatar 头像添加至导出的压缩包中。
```


### `ianm-follow-users` (missing)

#### [`flarum-gdpr.lib.data.followuser.anonymize_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.anonymize_description%22)

> =&gt; flarum-gdpr.lib.data.followuser.delete\_description

```diff
+=> flarum-gdpr.lib.data.followuser.delete_description
```

#### [`flarum-gdpr.lib.data.followuser.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.delete_description%22)

> Deletes all data related to following users.

```diff
+删除与关注用户相关的所有数据。
```

#### [`flarum-gdpr.lib.data.followuser.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.export_description%22)

> Exports details of users followed and users following.

```diff
+导出已关注用户及被关注用户的详细信息。
```

#### [`ianm-follow-users.forum.followers_link`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.followers_link%22)

> Followers

```diff
+我的粉丝
```

#### [`ianm-follow-users.forum.profile_page.no_followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_followers%22)

> It looks like you have no followers yet.

```diff
+还没有人关注您。
```


### `ianm-log-viewer` (missing)

#### [`ianm-log-viewer.admin.settings.max-file-size`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size%22)

> Maximum Log File Size (MB)

```diff
+最大日志文件大小 (MB)
```

#### [`ianm-log-viewer.admin.settings.max-file-size-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size-help%22)

> If a log file exceeds this size, it will be split into multiple parts. Set to 0 to disable splitting. Default is 1MB. Maximum allowable size is 150MB.

```diff
+如果日志文件超过此大小，它将被拆分为多个部分。设置为 0 可禁用拆分。默认值为 1MB。允许的最大大小为 150MB。
```

#### [`ianm-log-viewer.admin.viewer.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.confirm_delete%22)

> Are you sure you want to delete this log file? This action cannot be undone.

```diff
+确定要删除此日志文件吗？此操作无法撤销。
```

#### [`ianm-log-viewer.admin.viewer.delete_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.delete_log%22)

> Delete log file

```diff
+删除日志文件
```

#### [`ianm-log-viewer.admin.viewer.download_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.download_log%22)

> Download log file

```diff
+下载日志文件
```

#### [`ianm-log-viewer.admin.viewer.view_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.view_log%22)

> View log file

```diff
+查看日志文件
```


### `ianm-twofactor` (missing)

#### [`flarum-gdpr.lib.data.twofactordata.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.twofactordata.delete_description%22)

> Deletes all data related to 2FA.

```diff
+删除所有与双重认证相关的数据。
```

#### [`flarum-gdpr.lib.data.twofactordata.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.twofactordata.export_description%22)

> Exports 2FA status and encrypted backup codes.

```diff
+导出双重认证状态和加密的备用代码。
```

#### [`ianm-twofactor.forum.security.change_device_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.change_device_button%22)

> Change Device

```diff
+更换设备
```

#### [`ianm-twofactor.forum.security.change_device_description`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.change_device_description%22)

> Move 2FA to a new device

```diff
+将双重认证迁移到新设备
```

#### [`ianm-twofactor.forum.security.change_device_heading`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.change_device_heading%22)

> Change Authentication Device

```diff
+更换验证设备
```

#### [`ianm-twofactor.forum.security.change_device_title`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.change_device_title%22)

> Change Device

```diff
+更换设备
```

#### [`ianm-twofactor.forum.security.continue_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.continue_button%22)

> Continue

```diff
+继续
```

#### [`ianm-twofactor.forum.security.device_changed_confirmation`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.device_changed_confirmation%22)

> Your authentication device has been successfully changed.

```diff
+验证设备已成功更换。
```

#### [`ianm-twofactor.forum.security.enter_current_token`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.enter_current_token%22)

> Enter token from current device

```diff
+输入当前设备验证码
```

#### [`ianm-twofactor.forum.security.enter_new_token`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.enter_new_token%22)

> Enter token from new device

```diff
+输入新设备验证码
```

#### [`ianm-twofactor.forum.security.new_backup_codes`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.new_backup_codes%22)

> Your New Backup Codes

```diff
+新的救援代码
```

#### [`ianm-twofactor.forum.security.scan_new_device_qr`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.scan_new_device_qr%22)

> Scan this QR code with your new authentication device.

```diff
+请使用新的验证设备扫描此二维码。
```

#### [`ianm-twofactor.forum.security.verify_current_device_message`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.verify_current_device_message%22)

> Please enter a token from your current authentication device to verify your identity.

```diff
+请输入当前验证设备中的验证码以验证身份。
```

#### [`ianm-twofactor.forum.security.verify_new_device_message`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.verify_new_device_message%22)

> Now enter a token from your new device to complete the change.

```diff
+请输入新设备中的验证码以完成更换。
```


### `pianotell-flamoji` (missing)

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_button%22)

> Delete emoji

```diff
+删除表情
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation%22)

> Are you sure you want to delete this emoji?

```diff
+确认删除此表情吗？
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_label%22)

> Emoji Title

```diff
+表情名称
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.modal_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.modal_title%22)

> Add Emoji

```diff
+添加表情
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label%22)

> Path or URL

```diff
+路径或网址
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.saved_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.saved_message%22)

> =&gt; core.admin.settings.saved\_message

```diff
+=> core.admin.settings.saved_message
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.submit_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label%22)

> Shortcode

```diff
+替换文本
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.load_more_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.load_more_button%22)

> =&gt; core.forum.post\_stream.load\_more\_button

```diff
+=> core.forum.post_stream.load_more_button
```

#### [`pianotell-flamoji.admin.custom_emojis_section.export_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.export_json_button%22)

> Export JSON

```diff
+导出JSON
```

#### [`pianotell-flamoji.admin.custom_emojis_section.heading_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.heading_title%22)

> Custom Emojis

```diff
+自定义表情
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_emojis_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_emojis_message%22)

> This will import emoji configurations only. You need to upload emoji images manually.

```diff
+此操作只导入表情配置。表情包图片需要手动上传。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_json_button%22)

> Import JSON

```diff
+导入JSON
```

#### [`pianotell-flamoji.admin.settings.auto_hide_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_label%22)

> Auto hide

```diff
+自动隐藏
```

#### [`pianotell-flamoji.admin.settings.auto_hide_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_text%22)

> Hide the picker when an emoji is selected.

```diff
+选择表情后自动隐藏选择器。
```

#### [`pianotell-flamoji.admin.settings.category_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.category_settings_heading%22)

> Category Settings

```diff
+分类设置
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
+表情包设置
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_label%22)

> Frequent emoji rows

```diff
+常用表情栏
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_text%22)

> Number of rows of recently/frequently used emojis to display at the top of the picker (1-10).

```diff
+设置显示在选择顶部的最近常用表情行数（1-10）。
```

#### [`pianotell-flamoji.admin.settings.general_ui_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.general_ui_settings_heading%22)

> General UI Settings

```diff
+一般UI设置
```

#### [`pianotell-flamoji.admin.settings.picker_set_auto`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_auto%22)

> Auto

```diff
+自动
```

#### [`pianotell-flamoji.admin.settings.picker_set_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_label%22)

> Emoji style

```diff
+表情风格
```

#### [`pianotell-flamoji.admin.settings.picker_set_native`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_native%22)

> Native

```diff
+系统
```

#### [`pianotell-flamoji.admin.settings.picker_set_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_text%22)

> How emojis appear in the picker. "Auto" matches the Flarum Emoji extension — Twemoji when it's enabled, native OS fonts otherwise — so the picker mirrors what posts actually display.

```diff
+选择器中表情的呈现风格。选择「自动」时，为Flarum表情插件的推特表情风格（当启用时）；否则显示为系统字体风格。选择器与帖子中的呈现风格一致。
```

#### [`pianotell-flamoji.admin.settings.picker_set_twemoji`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_twemoji%22)

> Twemoji

```diff
+推特表情
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_label%22)

> Show category buttons

```diff
+显示分类按钮
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_text%22)

> Show the row of category icons at the top of the picker. Useful to disable when only one or two categories are enabled.

```diff
+在选项器顶部，单独显示一行分类图标。当只有一两个分类时，可禁用此项。
```

#### [`pianotell-flamoji.admin.settings.show_preview_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_label%22)

> Show preview section

```diff
+显示预览栏
```

#### [`pianotell-flamoji.admin.settings.show_preview_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_text%22)

> Show the emoji name, shortcode, and skin-tone selector in a preview pane below the picker grid.

```diff
+在选择器下方显示表情的名称、短代码和肤色设置器。
```

#### [`pianotell-flamoji.admin.settings.show_recents_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_label%22)

> Show (and save) frequently used emojis

```diff
+保存并展示常用表情
```

#### [`pianotell-flamoji.admin.settings.show_recents_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_text%22)

> Show the Frequently Used tab at the top of the picker. It starts empty and fills as each member picks emojis. Each user's frequents are saved in their own browser only.

```diff
+在选择器顶部，显示常用表情选项卡。用户的常用表情，仅存储在浏览器本地。
```

#### [`pianotell-flamoji.admin.settings.show_search_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_label%22)

> Show search input

```diff
+显示搜索框
```

#### [`pianotell-flamoji.admin.settings.show_search_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_text%22)

> Show the search box at the top of the picker.

```diff
+在选择器顶部显示搜索框。
```

#### [`pianotell-flamoji.admin.settings.show_variants_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_label%22)

> Show skin-tone variants

```diff
+显示肤色变体
```

#### [`pianotell-flamoji.admin.settings.show_variants_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_text%22)

> Some emojis have skin tone variants. When an emoji is selected in the picker that has variants, a variant popup will appear so the user can select the desired variant. This has no effect in sticker mode, since custom emoji don't have skin-tone variants.

```diff
+部分表情具有肤色变体。当所选表情有肤色变体时，将会显示肤色弹窗供用户选择。
```

#### [`pianotell-flamoji.admin.settings.specify_categories_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_label%22)

> Specify categories

```diff
+选择分类
```

#### [`pianotell-flamoji.admin.settings.specify_categories_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_text%22)

> You can specify a list of categories here, and the picker will only show those categories.

```diff
+选择器只显示勾选的分类。
```

#### [`pianotell-flamoji.forum.composer.emoji_tooltip`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.composer.emoji_tooltip%22)

> Insert emoji

```diff
+插入表情
```

#### [`pianotell-flamoji.forum.composer.picker_load_error`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_error%22)

> Could not load the emoji picker. Please try again.

```diff
+无法加载表情选择器。请重试。
```

#### [`pianotell-flamoji.forum.composer.picker_load_retry`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_retry%22)

> Retry

```diff
+重试
```

#### [`pianotell-flamoji.forum.composer.picker_loading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_loading%22)

> Loading emojis…

```diff
+表情加载中…
```

#### [`pianotell-flamoji.forum.emoji-mart.add_custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.add_custom%22)

> Add custom emoji

```diff
+添加自定义表情
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.custom%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.custom

```diff
+=> pianotell-flamoji.ref.emoji_categories.custom
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.frequent%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.frequent

```diff
+=> pianotell-flamoji.ref.emoji_categories.frequent
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.forum.emoji-mart.category_search`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.category_search%22)

> Search Results

```diff
+搜索结果
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_message%22)

> No emojis found

```diff
+没有表情
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_title%22)

> Oh no!

```diff
+不好了！
```

#### [`pianotell-flamoji.forum.emoji-mart.pick`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.pick%22)

> Pick an emoji

```diff
+选择一个表情
```

#### [`pianotell-flamoji.forum.emoji-mart.search_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.search_placeholder%22)

> Search

```diff
+搜索
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_choose`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_choose%22)

> Choose default skin tone

```diff
+选择默认肤色
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_dark%22)

> Dark

```diff
+深色
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_default`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_default%22)

> Default

```diff
+默认
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_light`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_light%22)

> Light

```diff
+浅色
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium%22)

> Medium

```diff
+普通
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark%22)

> Medium-Dark

```diff
+便深色
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_light`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_light%22)

> Medium-Light

```diff
+偏浅色
```

#### [`pianotell-flamoji.ref.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.activity%22)

> Activities

```diff
+活动
```

#### [`pianotell-flamoji.ref.emoji_categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.custom%22)

> Custom

```diff
+自定义
```

#### [`pianotell-flamoji.ref.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.flags%22)

> Flags

```diff
+旗帜
```

#### [`pianotell-flamoji.ref.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.foods%22)

> Food &amp; Drink

```diff
+食物和饮品
```

#### [`pianotell-flamoji.ref.emoji_categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.frequent%22)

> Frequently Used

```diff
+常用表情
```

#### [`pianotell-flamoji.ref.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.nature%22)

> Animals &amp; Nature

```diff
+动物和自然
```

#### [`pianotell-flamoji.ref.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.objects%22)

> Objects

```diff
+物体
```

#### [`pianotell-flamoji.ref.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.people%22)

> Smileys &amp; People

```diff
+笑脸和人物
```

#### [`pianotell-flamoji.ref.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.places%22)

> Travel &amp; Places

```diff
+旅行和地点
```

#### [`pianotell-flamoji.ref.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.symbols%22)

> Symbols

```diff
+符号
```


### `quasimo-llms-txt` (missing)

#### [`quasimo-llms-txt.admin.settings.custom_intro_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_help%22)

> Leave blank to omit. Plain text or Markdown supported.

```diff
+支持 Markdown，会显示在文件开头。
```

#### [`quasimo-llms-txt.admin.settings.custom_intro_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_label%22)

> Custom introduction paragraph

```diff
+自定义介绍
```

#### [`quasimo-llms-txt.admin.settings.custom_intro_placeholder`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_placeholder%22)

> Enter an optional introduction that will appear below the forum title in both files.

```diff
+写在 llms.txt 开头的介绍文本...
```

#### [`quasimo-llms-txt.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.enabled_help%22)

> Serve a concise index of your forum at {url} — links to categories and recent discussions.

```diff
+为 LLM 生成 llms.txt 文件。
```

#### [`quasimo-llms-txt.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.enabled_label%22)

> Enable llms.txt

```diff
+启用 llms.txt
```

#### [`quasimo-llms-txt.admin.settings.full_enabled_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.full_enabled_help%22)

> Serve the full text of all discussions at {url} — includes every post's content.

```diff
+同时生成 llms-full.txt。
```

#### [`quasimo-llms-txt.admin.settings.full_enabled_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.full_enabled_label%22)

> Enable llms-full.txt

```diff
+启用完整版
```

#### [`quasimo-llms-txt.admin.settings.max_discussions_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_discussions_help%22)

> Maximum number of discussions to list (1–1000). Default: 100.

```diff
+在 llms.txt 中最多包含的讨论数量。
```

#### [`quasimo-llms-txt.admin.settings.max_discussions_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_discussions_label%22)

> Max discussions to include

```diff
+最大讨论数
```

#### [`quasimo-llms-txt.admin.settings.max_posts_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_posts_help%22)

> Maximum number of posts to include per discussion in the full file (1–500). Default: 50.

```diff
+每个讨论最多包含的帖子数量。
```

#### [`quasimo-llms-txt.admin.settings.max_posts_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_posts_label%22)

> Max posts per discussion (llms-full.txt only)

```diff
+最大帖子数
```

#### [`quasimo-llms-txt.admin.settings.open_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.open_label%22)

> Open in new tab

```diff
+公开访问
```

#### [`quasimo-llms-txt.admin.settings.sort_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_help%22)

> How discussions are sorted in both generated files.

```diff
+讨论在 llms.txt 中的排序方式。
```

#### [`quasimo-llms-txt.admin.settings.sort_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_label%22)

> Discussion sort order

```diff
+排序方式
```

#### [`quasimo-llms-txt.admin.settings.sort_latest`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_latest%22)

> Latest activity

```diff
+按最新排序
```

#### [`quasimo-llms-txt.admin.settings.sort_top`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_top%22)

> Most replies

```diff
+按热度排序
```

#### [`quasimo-llms-txt.admin.settings.urls_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.urls_help%22)

> Once enabled, the following URLs will serve LLM-friendly content about your forum.

```diff
+每行一个 URL，会包含在生成的 llms.txt 中。
```

#### [`quasimo-llms-txt.admin.settings.urls_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.urls_label%22)

> Endpoint URLs

```diff
+额外 URL 列表
```


### `ralkage-account-lockout` (missing)

#### [`ralkage-account-lockout.admin.permissions.unlock_users_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.permissions.unlock_users_label%22)

> Unlock locked accounts

```diff
+解锁用户账户
```

#### [`ralkage-account-lockout.admin.settings.lockout_duration_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_duration_help%22)

> How long accounts stay locked. Only applies when lockout mode is set to Timed.

```diff
+临时锁定时长，0 表示永久锁定。
```

#### [`ralkage-account-lockout.admin.settings.lockout_duration_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_duration_label%22)

> Lockout Duration (minutes)

```diff
+锁定持续时间（分钟）
```

#### [`ralkage-account-lockout.admin.settings.lockout_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_mode_help%22)

> Timed: auto-unlocks after duration. Manual: requires admin/moderator to unlock.

```diff
+临时锁定或永久锁定。
```

#### [`ralkage-account-lockout.admin.settings.lockout_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_mode_label%22)

> Lockout Mode

```diff
+锁定模式
```

#### [`ralkage-account-lockout.admin.settings.max_attempts_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.max_attempts_help%22)

> Number of consecutive failed login attempts before an account is locked.

```diff
+锁定前允许的失败登录次数。
```

#### [`ralkage-account-lockout.admin.settings.max_attempts_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.max_attempts_label%22)

> Maximum Failed Login Attempts

```diff
+最大尝试次数
```

#### [`ralkage-account-lockout.admin.users.lock_status_column`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.users.lock_status_column%22)

> Lock Status

```diff
+锁定状态
```

#### [`ralkage-account-lockout.admin.users.locked_tooltip`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.users.locked_tooltip%22)

> This account is locked

```diff
+此账户已被锁定
```

#### [`ralkage-account-lockout.admin.users.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.users.unlock_button%22)

> Unlock

```diff
+解锁
```

#### [`ralkage-account-lockout.admin.users.unlock_confirmation`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.users.unlock_confirmation%22)

> Are you sure you want to unlock {username}?

```diff
+确定要解锁 {username}账户吗？
```

#### [`ralkage-account-lockout.api.error.locked_manual`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.api.error.locked_manual%22)

> Account is locked. Contact an administrator.

```diff
+账户已被管理员锁定，无法登录。
```

#### [`ralkage-account-lockout.api.error.locked_timed`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.api.error.locked_timed%22)

> Account is locked. Try again in {minutes} minute(s).

```diff
+账户已被临时锁定，请稍后再试。
```

#### [`ralkage-account-lockout.forum.log_in.attempts_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.attempts_remaining%22)

> Invalid credentials. {remaining} of {max} login attempt(s) remaining before your account is locked.

```diff
+还剩 {attempts} 次尝试机会。
```

#### [`ralkage-account-lockout.forum.log_in.locked_manual`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.locked_manual%22)

> This account has been locked. Please contact an administrator.

```diff
+账户已被管理员锁定。
```

#### [`ralkage-account-lockout.forum.log_in.locked_timed`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.locked_timed%22)

> This account has been locked due to too many failed login attempts. Please try again in {minutes} minute(s).

```diff
+账户已被临时锁定，请 {minutes} 分钟后重试。
```

#### [`ralkage-account-lockout.forum.unlock_modal.failed_attempts`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.failed_attempts%22)

> {count} failed login attempt(s)

```diff
+登录失败 {count} 次
```

#### [`ralkage-account-lockout.forum.unlock_modal.locked_since`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.locked_since%22)

> Locked since {date}

```diff
+锁定时间 {date}
```

#### [`ralkage-account-lockout.forum.unlock_modal.locked_until`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.locked_until%22)

> Auto-unlock at {date}

```diff
+锁定至 {date}
```

#### [`ralkage-account-lockout.forum.unlock_modal.manually_locked`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.manually_locked%22)

> This account is manually locked and requires an admin or moderator to unlock it.

```diff
+此账户已被手动锁定，需要管理员或版主才能解锁。
```

#### [`ralkage-account-lockout.forum.unlock_modal.title`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.title%22)

> Unlock {username}

```diff
+账户锁定详情
```

#### [`ralkage-account-lockout.forum.unlock_modal.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.unlock_button%22)

> Unlock Account

```diff
+解锁
```

#### [`ralkage-account-lockout.forum.user_badge.locked_tooltip`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.user_badge.locked_tooltip%22)

> Account Locked

```diff
+账户已被锁定
```

#### [`ralkage-account-lockout.forum.user_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.user_controls.unlock_button%22)

> Unlock

```diff
+解锁账户
```


### `ralkage-ad-management` (missing)

#### [`ralkage-ad-management.admin.ads.alt_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.alt_text%22)

> Alt Text

```diff
+替换文本 (Alt)
```

#### [`ralkage-ad-management.admin.ads.approve`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.approve%22)

> Approve

```diff
+批准
```

#### [`ralkage-ad-management.admin.ads.approve_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.approve_image%22)

> Approve Image Change

```diff
+批准图片修改
```

#### [`ralkage-ad-management.admin.ads.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.confirm_delete%22)

> Are you sure you want to delete this ad?

```diff
+确定要删除此广告吗？
```

#### [`ralkage-ad-management.admin.ads.content`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.content%22)

> HTML/JS Content

```diff
+HTML/JS 内容
```

#### [`ralkage-ad-management.admin.ads.content_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.content_help%22)

> For HTML and AdSense ad types. Paste your ad code here.

```diff
+适用于 HTML 或 AdSense 类型。请在此处粘贴广告代码。
```

#### [`ralkage-ad-management.admin.ads.create`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.create%22)

> Create Ad

```diff
+创建广告
```

#### [`ralkage-ad-management.admin.ads.edit`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.edit%22)

> Edit Ad

```diff
+编辑广告
```

#### [`ralkage-ad-management.admin.ads.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.empty%22)

> No advertisements found.

```diff
+未找到广告内容。
```

#### [`ralkage-ad-management.admin.ads.end_date`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.end_date%22)

> End Date

```diff
+结束日期
```

#### [`ralkage-ad-management.admin.ads.filter.active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.active%22)

> Active

```diff
+运行中
```

#### [`ralkage-ad-management.admin.ads.filter.all`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.all%22)

> All

```diff
+全部
```

#### [`ralkage-ad-management.admin.ads.filter.inactive`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.inactive%22)

> Inactive

```diff
+已停止
```

#### [`ralkage-ad-management.admin.ads.filter.pending_review`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.pending_review%22)

> Pending Review

```diff
+待审核
```

#### [`ralkage-ad-management.admin.ads.filter.rejected`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.rejected%22)

> Rejected

```diff
+已拒绝
```

#### [`ralkage-ad-management.admin.ads.group_visibility`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.group_visibility%22)

> Group Visibility

```diff
+用户组可见性
```

#### [`ralkage-ad-management.admin.ads.group_visibility_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.group_visibility_help%22)

> Comma-separated group IDs. Leave empty to show to all groups.

```diff
+以逗号分隔的用户组 ID。留空则对所有效户显示。
```

#### [`ralkage-ad-management.admin.ads.height`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.height%22)

> Height (px)

```diff
+高度 (px)
```

#### [`ralkage-ad-management.admin.ads.image_url`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.image_url%22)

> Image URL

```diff
+图片 URL
```

#### [`ralkage-ad-management.admin.ads.is_active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.is_active%22)

> Active

```diff
+启用状态
```

#### [`ralkage-ad-management.admin.ads.link_url`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.link_url%22)

> Link URL

```diff
+跳转链接
```

#### [`ralkage-ad-management.admin.ads.max_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_clicks%22)

> Max Clicks

```diff
+最大点击量
```

#### [`ralkage-ad-management.admin.ads.max_clicks_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_clicks_help%22)

> Ad will be deactivated after this many clicks. Leave empty for unlimited.

```diff
+点击次数达到此数值后广告将自动停用。留空则无限制。
```

#### [`ralkage-ad-management.admin.ads.max_image_changes`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_image_changes%22)

> Max Image Changes

```diff
+最大图片修改次数
```

#### [`ralkage-ad-management.admin.ads.max_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_impressions%22)

> Max Impressions

```diff
+最大展示量
```

#### [`ralkage-ad-management.admin.ads.max_impressions_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_impressions_help%22)

> Ad will be deactivated after this many views. Leave empty for unlimited.

```diff
+展示次数达到此数值后广告将自动停用。留空则无限制。
```

#### [`ralkage-ad-management.admin.ads.name`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.name%22)

> Ad Name

```diff
+广告名称
```

#### [`ralkage-ad-management.admin.ads.owner`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.owner%22)

> Ad Owner

```diff
+广告主
```

#### [`ralkage-ad-management.admin.ads.owner_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.owner_help%22)

> Username of the ad owner. Leave empty for no owner.

```diff
+广告所有者的用户名。留空则无归属。
```

#### [`ralkage-ad-management.admin.ads.pending_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.pending_badge%22)

> Pending ({count})

```diff
+待审核 ({count})
```

#### [`ralkage-ad-management.admin.ads.pending_image_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.pending_image_badge%22)

> Image Pending

```diff
+图片待审
```

#### [`ralkage-ad-management.admin.ads.priority`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.priority%22)

> Priority

```diff
+优先级
```

#### [`ralkage-ad-management.admin.ads.priority_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.priority_help%22)

> Higher priority ads are shown first. Default is 0.

```diff
+数值越高，广告显示越靠前。默认为 0。
```

#### [`ralkage-ad-management.admin.ads.reject`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.reject%22)

> Reject

```diff
+拒绝
```

#### [`ralkage-ad-management.admin.ads.reject_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.reject_image%22)

> Reject Image Change

```diff
+拒绝图片修改
```

#### [`ralkage-ad-management.admin.ads.select_zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.select_zone%22)

> Select a zone...

```diff
+选择一个广告位...
```

#### [`ralkage-ad-management.admin.ads.start_date`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.start_date%22)

> Start Date

```diff
+开始日期
```

#### [`ralkage-ad-management.admin.ads.stats.clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.stats.clicks%22)

> Clicks

```diff
+点击量
```

#### [`ralkage-ad-management.admin.ads.stats.ctr`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.stats.ctr%22)

> CTR

```diff
+点击率 (CTR)
```

#### [`ralkage-ad-management.admin.ads.stats.impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.stats.impressions%22)

> Impressions

```diff
+展示量
```

#### [`ralkage-ad-management.admin.ads.status`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.status%22)

> Status

```diff
+状态
```

#### [`ralkage-ad-management.admin.ads.statuses.active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.statuses.active%22)

> Active

```diff
+运行中
```

#### [`ralkage-ad-management.admin.ads.statuses.inactive`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.statuses.inactive%22)

> Inactive

```diff
+已停止
```

#### [`ralkage-ad-management.admin.ads.statuses.pending_review`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.statuses.pending_review%22)

> Pending Review

```diff
+待审核
```

#### [`ralkage-ad-management.admin.ads.statuses.rejected`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.statuses.rejected%22)

> Rejected

```diff
+已拒绝
```

#### [`ralkage-ad-management.admin.ads.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.title%22)

> Advertisements

```diff
+广告列表
```

#### [`ralkage-ad-management.admin.ads.type`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.type%22)

> Ad Type

```diff
+广告类型
```

#### [`ralkage-ad-management.admin.ads.types.adsense`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.types.adsense%22)

> Google AdSense

```diff
+Google AdSense
```

#### [`ralkage-ad-management.admin.ads.types.html`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.types.html%22)

> HTML

```diff
+自定义 HTML
```

#### [`ralkage-ad-management.admin.ads.types.image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.types.image%22)

> Image

```diff
+图片广告
```

#### [`ralkage-ad-management.admin.ads.width`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.width%22)

> Width (px)

```diff
+宽度 (px)
```

#### [`ralkage-ad-management.admin.ads.zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.zone%22)

> Zone

```diff
+所属广告位
```

#### [`ralkage-ad-management.admin.analytics.clicks_by_day`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.clicks_by_day%22)

> Clicks by Day

```diff
+每日点击趋势
```

#### [`ralkage-ad-management.admin.analytics.clicks_header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.clicks_header%22)

> Clicks

```diff
+点击数
```

#### [`ralkage-ad-management.admin.analytics.ctr`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.ctr%22)

> Click-Through Rate

```diff
+点击率
```

#### [`ralkage-ad-management.admin.analytics.date`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.date%22)

> Date

```diff
+日期
```

#### [`ralkage-ad-management.admin.analytics.no_data`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.no_data%22)

> No analytics data available for this period.

```diff
+当前周期内暂无统计数据。
```

#### [`ralkage-ad-management.admin.analytics.period`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.period%22)

> Period

```diff
+统计周期
```

#### [`ralkage-ad-management.admin.analytics.period_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.period_clicks%22)

> Clicks (Period)

```diff
+周期内点击量
```

#### [`ralkage-ad-management.admin.analytics.periods.30d`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.periods.30d%22)

> Last 30 Days

```diff
+最近 30 天
```

#### [`ralkage-ad-management.admin.analytics.periods.7d`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.periods.7d%22)

> Last 7 Days

```diff
+最近 7 天
```

#### [`ralkage-ad-management.admin.analytics.periods.90d`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.periods.90d%22)

> Last 90 Days

```diff
+最近 90 天
```

#### [`ralkage-ad-management.admin.analytics.select_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.select_ad%22)

> Select an advertisement...

```diff
+选择一条广告...
```

#### [`ralkage-ad-management.admin.analytics.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.title%22)

> Analytics

```diff
+数据分析
```

#### [`ralkage-ad-management.admin.analytics.total_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.total_clicks%22)

> Total Clicks (All Time)

```diff
+累计点击量 (全时段)
```

#### [`ralkage-ad-management.admin.analytics.total_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.total_impressions%22)

> Total Impressions (All Time)

```diff
+累计展示量 (全时段)
```

#### [`ralkage-ad-management.admin.cancel`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.cancel%22)

> Cancel

```diff
+取消
```

#### [`ralkage-ad-management.admin.nav.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.nav.title%22)

> Ad Management

```diff
+广告管理
```

#### [`ralkage-ad-management.admin.permissions.no_ads`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.permissions.no_ads%22)

> Ad-Free (hide all ads)

```diff
+免广告（隐藏所有广告）
```

#### [`ralkage-ad-management.admin.permissions.submit_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.permissions.submit_ad%22)

> Submit Advertisements

```diff
+提交广告
```

#### [`ralkage-ad-management.admin.save`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.save%22)

> Save

```diff
+保存设置
```

#### [`ralkage-ad-management.admin.settings.adsense_publisher_id`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.adsense_publisher_id%22)

> Google AdSense Publisher ID

```diff
+Google AdSense 发布商 ID
```

#### [`ralkage-ad-management.admin.settings.adsense_publisher_id_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.adsense_publisher_id_help%22)

> Your AdSense publisher ID (e.g., ca-pub-1234567890).

```diff
+您的 AdSense 发布商 ID（例如：ca-pub-1234567890）。
```

#### [`ralkage-ad-management.admin.settings.allowed_image_formats`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.allowed_image_formats%22)

> Allowed Image Formats

```diff
+允许的图片格式
```

#### [`ralkage-ad-management.admin.settings.allowed_image_formats_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.allowed_image_formats_help%22)

> Comma-separated list of allowed image file extensions (e.g., jpg,jpeg,png,webp,gif).

```diff
+以逗号分隔的扩展名列表（例如：jpg,jpeg,png,webp,gif）。
```

#### [`ralkage-ad-management.admin.settings.between_posts_interval`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.between_posts_interval%22)

> Posts Between Ads

```diff
+帖子显示间隔
```

#### [`ralkage-ad-management.admin.settings.between_posts_interval_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.between_posts_interval_help%22)

> Show an ad after every N posts in discussions. Set to 0 to disable.

```diff
+在讨论页中每隔 N 个帖子显示一次广告。设为 0 则禁用。
```

#### [`ralkage-ad-management.admin.settings.compression_method`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_method%22)

> Compression Method

```diff
+压缩方法
```

#### [`ralkage-ad-management.admin.settings.compression_method_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_method_help%22)

> PHP GD is built-in. reSmush.it uses an external API for lossless optimization (requires curl).

```diff
+PHP GD 为内置方案。reSmush.it 使用外部 API 进行无损优化（需开启 curl）。
```

#### [`ralkage-ad-management.admin.settings.compression_quality`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_quality%22)

> Compression Quality

```diff
+压缩质量
```

#### [`ralkage-ad-management.admin.settings.compression_quality_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_quality_help%22)

> Image quality after compression (1-100). Lower values = smaller files. Recommended: 80-90.

```diff
+压缩后的图片质量 (1-100)。数值越低文件越小。推荐值：80-90。
```

#### [`ralkage-ad-management.admin.settings.default_max_image_changes`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.default_max_image_changes%22)

> Default Max Image Changes

```diff
+默认最大图片修改次数
```

#### [`ralkage-ad-management.admin.settings.default_max_image_changes_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.default_max_image_changes_help%22)

> Maximum number of times an ad owner can change their ad image. Set to 0 for unlimited.

```diff
+广告主允许修改广告图片的最高次数。设为 0 表示无限制。
```

#### [`ralkage-ad-management.admin.settings.enable_compression`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.enable_compression%22)

> Enable Image Compression

```diff
+启用图片压缩
```

#### [`ralkage-ad-management.admin.settings.enable_compression_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.enable_compression_help%22)

> Automatically compress uploaded ad images to reduce file size.

```diff
+自动压缩上传的广告图片以减小文件体积。
```

#### [`ralkage-ad-management.admin.settings.expiration_body_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_body_template%22)

> Body Template

```diff
+正文模板
```

#### [`ralkage-ad-management.admin.settings.expiration_reminder_days`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_reminder_days%22)

> Expiration Reminder (Days)

```diff
+到期提醒（天）
```

#### [`ralkage-ad-management.admin.settings.expiration_reminder_days_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_reminder_days_help%22)

> Send email reminders to ad owners this many days before their ad expires. Set to 0 to disable.

```diff
+在广告到期前若干天向广告主发送邮件提醒。设为 0 则禁用。
```

#### [`ralkage-ad-management.admin.settings.expiration_subject_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_subject_template%22)

> Subject Template

```diff
+主题模板
```

#### [`ralkage-ad-management.admin.settings.expiration_templates_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_templates_title%22)

> Expiration Email Templates

```diff
+广告到期邮件模板
```

#### [`ralkage-ad-management.admin.settings.image_settings_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.image_settings_title%22)

> Image Settings

```diff
+图片设置
```

#### [`ralkage-ad-management.admin.settings.notifications_info`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.notifications_info%22)

> To send notifications, add a cron job: php flarum ad-management:send-notifications

```diff
+若要发送通知，请添加 Cron 任务：php flarum ad-management:send-notifications
```

#### [`ralkage-ad-management.admin.settings.notifications_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.notifications_title%22)

> Email Notifications

```diff
+邮件通知
```

#### [`ralkage-ad-management.admin.settings.performance_body_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_body_template%22)

> Body Template

```diff
+正文模板
```

#### [`ralkage-ad-management.admin.settings.performance_subject_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_subject_template%22)

> Subject Template

```diff
+主题模板
```

#### [`ralkage-ad-management.admin.settings.performance_templates_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_templates_title%22)

> Performance Report Templates

```diff
+表现报告邮件模板
```

#### [`ralkage-ad-management.admin.settings.require_image_approval`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.require_image_approval%22)

> Require Approval for Image Changes

```diff
+修改图片需要审核
```

#### [`ralkage-ad-management.admin.settings.require_image_approval_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.require_image_approval_help%22)

> When enabled, image changes submitted by ad owners will be queued for admin review before going live.

```diff
+启用后，广告主提交的图片修改将进入审核队列，经管理员批准后才会生效。
```

#### [`ralkage-ad-management.admin.settings.send_performance_reports`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.send_performance_reports%22)

> Send Performance Reports

```diff
+发送表现报告
```

#### [`ralkage-ad-management.admin.settings.send_performance_reports_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.send_performance_reports_help%22)

> Include performance summaries (impressions, clicks, CTR) when sending notification emails.

```diff
+在发送通知邮件时包含表现摘要（展示量、点击量、点击率）。
```

#### [`ralkage-ad-management.admin.settings.show_sponsored_label`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.show_sponsored_label%22)

> Show "Sponsored" Label

```diff
+显示“赞助”标签
```

#### [`ralkage-ad-management.admin.settings.show_sponsored_label_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.show_sponsored_label_help%22)

> Display a label beneath ads. Uncheck to hide it entirely.

```diff
+在广告下方显示标识。取消勾选可将其完全隐藏。
```

#### [`ralkage-ad-management.admin.settings.sponsored_label_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.sponsored_label_text%22)

> Sponsored Label Text

```diff
+赞助标签文本
```

#### [`ralkage-ad-management.admin.settings.sponsored_label_text_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.sponsored_label_text_help%22)

> Custom text for the label (e.g. "Advertisement"). Leave blank to use the default translation.

```diff
+自定义标签内容（例如“广告”）。留空则使用系统默认翻译。
```

#### [`ralkage-ad-management.admin.settings.templates_placeholders_expiry`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.templates_placeholders_expiry%22)

> Available placeholders: {forum\_title}, {forum\_url}, {owner\_name}, {owner\_username}, {ad\_name}, {days\_left}, {expiry\_date}, {impressions}, {clicks}. Leave blank to use the default template.

```diff
+可用占位符：{forum_title}, {forum_url}, {owner_name}, {owner_username}, {ad_name}, {days_left}, {expiry_date}, {impressions}, {clicks}。留空则使用默认模板。
```

#### [`ralkage-ad-management.admin.settings.templates_placeholders_performance`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.templates_placeholders_performance%22)

> Available placeholders: {forum\_title}, {forum\_url}, {owner\_name}, {owner\_username}, {ad\_count}, {total\_impressions}, {total\_clicks}, {ctr}, {ad\_lines}. Leave blank to use the default template.

```diff
+可用占位符：{forum_title}, {forum_url}, {owner_name}, {owner_username}, {ad_count}, {total_impressions}, {total_clicks}, {ctr}, {ad_lines}。留空则使用默认模板。
```

#### [`ralkage-ad-management.admin.settings.track_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_clicks%22)

> Track Clicks

```diff
+追踪点击次数
```

#### [`ralkage-ad-management.admin.settings.track_clicks_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_clicks_help%22)

> Track when users click on ads.

```diff
+统计用户点击广告的次数。
```

#### [`ralkage-ad-management.admin.settings.track_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_impressions%22)

> Track Impressions

```diff
+追踪展示次数
```

#### [`ralkage-ad-management.admin.settings.track_impressions_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_impressions_help%22)

> Count how many times each ad is displayed.

```diff
+统计每条广告的曝光次数。
```

#### [`ralkage-ad-management.admin.tabs.ads`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.ads%22)

> Advertisements

```diff
+广告列表
```

#### [`ralkage-ad-management.admin.tabs.analytics`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.analytics%22)

> Analytics

```diff
+数据统计
```

#### [`ralkage-ad-management.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.settings%22)

> Settings

```diff
+常规设置
```

#### [`ralkage-ad-management.admin.tabs.zones`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.zones%22)

> Ad Zones

```diff
+广告位
```

#### [`ralkage-ad-management.admin.zones.ads_count`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.ads_count%22)

> Ads

```diff
+广告数
```

#### [`ralkage-ad-management.admin.zones.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.confirm_delete%22)

> Are you sure you want to delete this zone? All ads in this zone will also be deleted.

```diff
+确定要删除此广告位吗？该位置下的所有广告也将被一并删除。
```

#### [`ralkage-ad-management.admin.zones.create`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.create%22)

> Create Zone

```diff
+创建广告位
```

#### [`ralkage-ad-management.admin.zones.default_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.default_badge%22)

> Default

```diff
+默认
```

#### [`ralkage-ad-management.admin.zones.description`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.description%22)

> Description

```diff
+描述
```

#### [`ralkage-ad-management.admin.zones.dimensions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.dimensions%22)

> Dimensions

```diff
+尺寸限制
```

#### [`ralkage-ad-management.admin.zones.display_mode`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_mode%22)

> Display Mode

```diff
+显示模式
```

#### [`ralkage-ad-management.admin.zones.display_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_mode_help%22)

> Rotate shows one random ad per page navigation. Stack shows all ads in the zone at once.

```diff
+“轮播”模式下每次页面导航随机显示一个广告；“堆叠”模式下同时显示该位置的所有广告。
```

#### [`ralkage-ad-management.admin.zones.display_modes.rotate`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_modes.rotate%22)

> Rotate

```diff
+随机轮播
```

#### [`ralkage-ad-management.admin.zones.display_modes.stack`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_modes.stack%22)

> Stack All

```diff
+全部堆叠
```

#### [`ralkage-ad-management.admin.zones.edit`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.edit%22)

> Edit Zone

```diff
+编辑广告位
```

#### [`ralkage-ad-management.admin.zones.is_active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.is_active%22)

> Active

```diff
+已激活
```

#### [`ralkage-ad-management.admin.zones.label`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.label%22)

> Display Label

```diff
+显示标签
```

#### [`ralkage-ad-management.admin.zones.max_height`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.max_height%22)

> Max Height (px)

```diff
+最大高度 (px)
```

#### [`ralkage-ad-management.admin.zones.max_width`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.max_width%22)

> Max Width (px)

```diff
+最大宽度 (px)
```

#### [`ralkage-ad-management.admin.zones.name`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.name%22)

> Zone Name

```diff
+标识名称
```

#### [`ralkage-ad-management.admin.zones.name_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.name_help%22)

> Unique identifier (lowercase, no spaces). Used in zone tags.

```diff
+唯一标识符（仅限小写字母，不得包含空格）。用于标签调用。
```

#### [`ralkage-ad-management.admin.zones.position`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.position%22)

> Position

```diff
+显示位置
```

#### [`ralkage-ad-management.admin.zones.positions.above_footer`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.above_footer%22)

> Above Footer

```diff
+页脚上方 (Above Footer)
```

#### [`ralkage-ad-management.admin.zones.positions.below_header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.below_header%22)

> Below Header

```diff
+页眉下方 (Below Header)
```

#### [`ralkage-ad-management.admin.zones.positions.between_posts`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.between_posts%22)

> Between Posts

```diff
+帖子之间 (Between Posts)
```

#### [`ralkage-ad-management.admin.zones.positions.custom`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.custom%22)

> Custom

```diff
+自定义位置 (Custom)
```

#### [`ralkage-ad-management.admin.zones.positions.footer`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.footer%22)

> Footer

```diff
+页脚 (Footer)
```

#### [`ralkage-ad-management.admin.zones.positions.header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.header%22)

> Header

```diff
+页眉 (Header)
```

#### [`ralkage-ad-management.admin.zones.positions.sidebar`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.sidebar%22)

> Sidebar

```diff
+侧边栏 (Sidebar)
```

#### [`ralkage-ad-management.admin.zones.shortcode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.shortcode_help%22)

> Paste this tag in any post or discussion to display ads from a specific zone inline.

```diff
+将此标签粘贴到任何帖子或讨论中，即可在正文内联显示该广告位的广告。
```

#### [`ralkage-ad-management.admin.zones.shortcode_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.shortcode_title%22)

> Post Shortcode:

```diff
+帖子短代码：
```

#### [`ralkage-ad-management.admin.zones.sort_order`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.sort_order%22)

> Sort Order

```diff
+排序权重
```

#### [`ralkage-ad-management.admin.zones.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.title%22)

> Ad Zones

```diff
+广告位管理
```

#### [`ralkage-ad-management.admin.zones.zone_tag`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.zone_tag%22)

> Zone Tag: {tag}

```diff
+广告位标签：{tag}
```

#### [`ralkage-ad-management.forum.ad.sponsored`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ad.sponsored%22)

> Sponsored

```diff
+赞助商
```

#### [`ralkage-ad-management.forum.ads.alt_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.alt_text%22)

> Alt Text

```diff
+替换文字 (Alt Text)
```

#### [`ralkage-ad-management.forum.ads.image_url`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.image_url%22)

> Image URL

```diff
+图片链接
```

#### [`ralkage-ad-management.forum.ads.link_url`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.link_url%22)

> Link URL

```diff
+点击跳转链接
```

#### [`ralkage-ad-management.forum.ads.name`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.name%22)

> Ad Name

```diff
+广告名称
```

#### [`ralkage-ad-management.forum.ads.select_zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.select_zone%22)

> Select a zone...

```diff
+选择广告位...
```

#### [`ralkage-ad-management.forum.ads.zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.zone%22)

> Zone

```diff
+投放位置
```

#### [`ralkage-ad-management.forum.nav.my_ads`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.nav.my_ads%22)

> My Ads

```diff
+我的广告
```

#### [`ralkage-ad-management.forum.page.cancel`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.cancel%22)

> Cancel

```diff
+取消
```

#### [`ralkage-ad-management.forum.page.clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.clicks%22)

> {count} clicks

```diff
+{count} 次点击
```

#### [`ralkage-ad-management.forum.page.ctr`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.ctr%22)

> {value}% CTR

```diff
+{value}% 点击率
```

#### [`ralkage-ad-management.forum.page.edit_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.edit_image%22)

> Change Image

```diff
+修改图片
```

#### [`ralkage-ad-management.forum.page.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.empty%22)

> You don't have any advertisements yet.

```diff
+您目前还没有发布任何广告。
```

#### [`ralkage-ad-management.forum.page.image_changes_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.image_changes_remaining%22)

> {count} image changes remaining

```diff
+剩余可修改次数：{count}
```

#### [`ralkage-ad-management.forum.page.impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.impressions%22)

> {count} impressions

```diff
+{count} 次展示
```

#### [`ralkage-ad-management.forum.page.no_changes_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.no_changes_remaining%22)

> No image changes remaining

```diff
+修改次数已耗尽
```

#### [`ralkage-ad-management.forum.page.stats`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.stats%22)

> Stats

```diff
+数据统计
```

#### [`ralkage-ad-management.forum.page.status.active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.active%22)

> Active

```diff
+运行中
```

#### [`ralkage-ad-management.forum.page.status.expired`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.expired%22)

> Expired

```diff
+已过期
```

#### [`ralkage-ad-management.forum.page.status.inactive`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.inactive%22)

> Inactive

```diff
+已停止
```

#### [`ralkage-ad-management.forum.page.status.pending`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.pending%22)

> Pending Review

```diff
+待审核
```

#### [`ralkage-ad-management.forum.page.status.rejected`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.rejected%22)

> Rejected

```diff
+已拒绝
```

#### [`ralkage-ad-management.forum.page.status.scheduled`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.scheduled%22)

> Scheduled

```diff
+计划中
```

#### [`ralkage-ad-management.forum.page.submit_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.submit_ad%22)

> Submit Ad

```diff
+提交新广告
```

#### [`ralkage-ad-management.forum.page.submit_pending_notice`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.submit_pending_notice%22)

> Your ad will be reviewed by an administrator before going live.

```diff
+您的广告在上线前将由管理员进行审核。
```

#### [`ralkage-ad-management.forum.page.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.title%22)

> My Advertisements

```diff
+我的广告管理
```


### `ralkage-cap-captcha` (missing)

#### [`ralkage-cap-captcha.admin.settings.api_endpoint_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.api_endpoint_help%22)

> Your Cap Standalone instance URL with site key, e.g. https://cap.example.com/your-site-key/

```diff
+您的 Cap 独立实例 URL（包含 site key），例如：https://cap.example.com/your-site-key/
```

#### [`ralkage-cap-captcha.admin.settings.api_endpoint_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.api_endpoint_label%22)

> Cap API Endpoint

```diff
+Cap API Endpoint
```

#### [`ralkage-cap-captcha.admin.settings.protect_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_login_help%22)

> Show Cap widget on the login form.

```diff
+在登录表单中显示 Cap 组件。
```

#### [`ralkage-cap-captcha.admin.settings.protect_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_login_label%22)

> Require CAPTCHA on login

```diff
+登录时启用验证码
```

#### [`ralkage-cap-captcha.admin.settings.protect_registration_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_registration_help%22)

> Show Cap widget on the sign-up form.

```diff
+在注册表单中显示 Cap 组件。
```

#### [`ralkage-cap-captcha.admin.settings.protect_registration_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_registration_label%22)

> Require CAPTCHA on registration

```diff
+注册时启用验证码
```

#### [`ralkage-cap-captcha.admin.settings.secret_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.secret_key_help%22)

> Your site key's secret from the Cap dashboard.

```diff
+从 Cap 管理面板中获取的 Secret Key。
```

#### [`ralkage-cap-captcha.admin.settings.secret_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.secret_key_label%22)

> Cap Secret Key

```diff
+Cap Secret Key
```

#### [`ralkage-cap-captcha.api.invalid_captcha`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.api.invalid_captcha%22)

> CAPTCHA verification failed. Please complete the challenge and try again.

```diff
+验证码校验失败。请重新验证并重试。
```

#### [`ralkage-cap-captcha.forum.captcha_required`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.forum.captcha_required%22)

> Please verify you're human by completing the CAPTCHA challenge.

```diff
+请完成验证码校验以验证身份。
```


### `ralkage-civility-filter` (missing)

#### [`ralkage-civility-filter.admin.log.action`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.action%22)

> Action

```diff
+操作
```

#### [`ralkage-civility-filter.admin.log.actions_col`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.actions_col%22)

> Actions

```diff
+管理操作
```

#### [`ralkage-civility-filter.admin.log.all_actions`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.all_actions%22)

> All Actions

```diff
+所有操作
```

#### [`ralkage-civility-filter.admin.log.allowed`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.allowed%22)

> Allowed

```diff
+允许通过
```

#### [`ralkage-civility-filter.admin.log.approve`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.approve%22)

> Approve

```diff
+批准
```

#### [`ralkage-civility-filter.admin.log.approved`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.approved%22)

> Approved

```diff
+已批准
```

#### [`ralkage-civility-filter.admin.log.blocked`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.blocked%22)

> Blocked

```diff
+已拦截
```

#### [`ralkage-civility-filter.admin.log.categories`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.categories%22)

> Categories

```diff
+分类
```

#### [`ralkage-civility-filter.admin.log.clear`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.clear%22)

> Clear Log

```diff
+清空日志
```

#### [`ralkage-civility-filter.admin.log.clear_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.clear_confirm%22)

> Are you sure you want to clear the entire civility log?

```diff
+确定要清空全部文明检查日志吗？
```

#### [`ralkage-civility-filter.admin.log.date`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.date%22)

> Date

```diff
+日期
```

#### [`ralkage-civility-filter.admin.log.delete`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.delete%22)

> Delete

```diff
+删除
```

#### [`ralkage-civility-filter.admin.log.deleted`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.deleted%22)

> Deleted

```diff
+已删除
```

#### [`ralkage-civility-filter.admin.log.discussion`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.discussion%22)

> Discussion

```diff
+所属讨论
```

#### [`ralkage-civility-filter.admin.log.excerpt`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.excerpt%22)

> Message Excerpt

```diff
+内容摘要
```

#### [`ralkage-civility-filter.admin.log.export`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.export%22)

> Export CSV

```diff
+导出 CSV
```

#### [`ralkage-civility-filter.admin.log.filter_action`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.filter_action%22)

> Filter by action

```diff
+按操作过滤
```

#### [`ralkage-civility-filter.admin.log.moderated`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.moderated%22)

> Moderated

```diff
+已进入审核
```

#### [`ralkage-civility-filter.admin.log.no_logs`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.no_logs%22)

> No civility log entries found.

```diff
+未找到日志记录。
```

#### [`ralkage-civility-filter.admin.log.score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.score%22)

> Score

```diff
+评分
```

#### [`ralkage-civility-filter.admin.log.suspend`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.suspend%22)

> Suspend

```diff
+封禁用户
```

#### [`ralkage-civility-filter.admin.log.suspended`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.suspended%22)

> Suspended

```diff
+已封禁
```

#### [`ralkage-civility-filter.admin.log.title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.title%22)

> Civility Filter Log

```diff
+文明过滤器日志
```

#### [`ralkage-civility-filter.admin.log.username`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.username%22)

> Username

```diff
+用户名
```

#### [`ralkage-civility-filter.admin.log.warned`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.warned%22)

> Warned

```diff
+已警告
```

#### [`ralkage-civility-filter.admin.nav.civility_log`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.nav.civility_log%22)

> Civility Log

```diff
+文明检查日志
```

#### [`ralkage-civility-filter.admin.nav.stats`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.nav.stats%22)

> Statistics

```diff
+数据统计
```

#### [`ralkage-civility-filter.admin.permissions.bypass_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.permissions.bypass_label%22)

> Bypass Civility Filter

```diff
+绕过文明过滤器
```

#### [`ralkage-civility-filter.admin.settings.ai_provider_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.ai_provider_help%22)

> Select which AI provider to use. Set the corresponding API key below.

```diff
+选择要使用的 AI 服务商，并在下方填写相应的 API Key。
```

#### [`ralkage-civility-filter.admin.settings.ai_provider_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.ai_provider_label%22)

> AI Provider

```diff
+AI 提供商
```

#### [`ralkage-civility-filter.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.api_key_help%22)

> Your Anthropic API key for Claude models.

```diff
+用于调用 Claude 模型的 Anthropic API Key。
```

#### [`ralkage-civility-filter.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.api_key_label%22)

> Anthropic API Key

```diff
+Anthropic API Key
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_days_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_days_help%22)

> How many days to suspend a user. Default: 3

```diff
+用户被封禁的天数。默认值：3
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_days_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_days_label%22)

> Auto-Suspend Duration (days)

```diff
+自动封禁时长（天）
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_threshold_help%22)

> Automatically suspend a user after this many violations within the window. Set to 0 to disable.

```diff
+用户在窗口期内违规次数达到此值后自动封禁。设为 0 禁用。
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_threshold_label%22)

> Auto-Suspend After X Violations

```diff
+自动封禁违规阈值
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_window_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_window_help%22)

> Count violations within this many days. Default: 7

```diff
+统计此天数内的违规次数。默认值：7
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_window_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_window_label%22)

> Auto-Suspend Window (days)

```diff
+自动封禁统计窗口（天）
```

#### [`ralkage-civility-filter.admin.settings.block_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.block_threshold_help%22)

> Score at or above this level will block the post entirely. Default: 95

```diff
+评分达到或超过此分值将直接拦截发布。默认值：95
```

#### [`ralkage-civility-filter.admin.settings.block_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.block_threshold_label%22)

> Block Threshold (0-100)

```diff
+拦截阈值 (0-100)
```

#### [`ralkage-civility-filter.admin.settings.custom_prompt_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.custom_prompt_help%22)

> Override the default analysis prompt. Must instruct the AI to return JSON with score, categories, and reason fields. Leave empty for default.

```diff
+覆盖默认的分析指令。必须指示 AI 返回包含 score、categories 和 reason 字段的 JSON。留空使用默认值。
```

#### [`ralkage-civility-filter.admin.settings.custom_prompt_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.custom_prompt_label%22)

> Custom AI Prompt

```diff
+自定义 AI Prompt
```

#### [`ralkage-civility-filter.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.enabled_help%22)

> Master switch to enable or disable the civility filter.

```diff
+开启或关闭文明过滤器的总开关。
```

#### [`ralkage-civility-filter.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.enabled_label%22)

> Enable Civility Filter

```diff
+启用文明过滤器
```

#### [`ralkage-civility-filter.admin.settings.hold_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.hold_threshold_help%22)

> Score at or above this level will hold the post for moderation. Default: 80

```diff
+评分达到或超过此分值将进入人工审核队列。默认值：80
```

#### [`ralkage-civility-filter.admin.settings.hold_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.hold_threshold_label%22)

> Hold/Moderate Threshold (0-100)

```diff
+审核阈值 (0-100)
```

#### [`ralkage-civility-filter.admin.settings.log_all_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.log_all_help%22)

> Log all civility checks, including posts that pass. When disabled, only flagged posts are logged.

```diff
+记录所有文明检查，包括通过检查的帖子。禁用后仅记录被标记的帖子。
```

#### [`ralkage-civility-filter.admin.settings.log_all_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.log_all_label%22)

> Log All Checks

```diff
+记录所有检查
```

#### [`ralkage-civility-filter.admin.settings.model_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.model_help%22)

> Select a model matching your chosen provider.

```diff
+选择与您所选提供商匹配的模型。
```

#### [`ralkage-civility-filter.admin.settings.model_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.model_label%22)

> AI Model

```diff
+AI 模型
```

#### [`ralkage-civility-filter.admin.settings.monitored_tags_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.monitored_tags_help%22)

> Select tags to monitor. Leave empty to monitor all tags.

```diff
+选择要监控的标签。留空则监控所有标签。
```

#### [`ralkage-civility-filter.admin.settings.monitored_tags_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.monitored_tags_label%22)

> Monitored Tags

```diff
+监控标签
```

#### [`ralkage-civility-filter.admin.settings.openai_api_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openai_api_key_help%22)

> Your OpenAI API key for GPT models.

```diff
+用于调用 GPT 模型的 OpenAI API Key。
```

#### [`ralkage-civility-filter.admin.settings.openai_api_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openai_api_key_label%22)

> OpenAI API Key

```diff
+OpenAI API Key
```

#### [`ralkage-civility-filter.admin.settings.openrouter_api_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openrouter_api_key_help%22)

> Your OpenRouter API key. Access 200+ models from one API.

```diff
+您的 OpenRouter API Key，可一站式访问 200 多个模型。
```

#### [`ralkage-civility-filter.admin.settings.openrouter_api_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openrouter_api_key_label%22)

> OpenRouter API Key

```diff
+OpenRouter API Key
```

#### [`ralkage-civility-filter.admin.settings.rate_limit_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.rate_limit_help%22)

> Maximum AI API calls per hour. Posts will pass through unchecked if limit is reached. Set to 0 for unlimited.

```diff
+每小时最大 AI 调用次数。达到限制后帖子将不经检查直接发布。设为 0 无限制。
```

#### [`ralkage-civility-filter.admin.settings.rate_limit_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.rate_limit_label%22)

> API Rate Limit (calls/hour)

```diff
+API 速率限制（次数/小时）
```

#### [`ralkage-civility-filter.admin.settings.warn_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.warn_threshold_help%22)

> Score at or above this level will log a warning. Default: 60

```diff
+评分达到或超过此分值将记录警告。默认值：60
```

#### [`ralkage-civility-filter.admin.settings.warn_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.warn_threshold_label%22)

> Warn Threshold (0-100)

```diff
+警告阈值 (0-100)
```

#### [`ralkage-civility-filter.admin.settings.webhook_min_action_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_min_action_help%22)

> Only send webhook alerts for this action level or higher.

```diff
+仅针对此级别或更高级别的操作发送 Webhook 提醒。
```

#### [`ralkage-civility-filter.admin.settings.webhook_min_action_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_min_action_label%22)

> Webhook Minimum Action

```diff
+Webhook 触发级别
```

#### [`ralkage-civility-filter.admin.settings.webhook_url_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_url_help%22)

> Discord webhook or generic URL to receive alerts when posts are flagged. Leave empty to disable.

```diff
+当帖子被标记时接收提醒的 Discord 或通用 Webhook URL。留空则禁用。
```

#### [`ralkage-civility-filter.admin.settings.webhook_url_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_url_label%22)

> Webhook URL

```diff
+Webhook URL
```

#### [`ralkage-civility-filter.admin.settings.word_blocklist_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.word_blocklist_help%22)

> One word/phrase per line. Posts containing these will be instantly blocked without calling the AI.

```diff
+每行一个词/短语。包含这些词的帖子将直接拦截，无需调用 AI。
```

#### [`ralkage-civility-filter.admin.settings.word_blocklist_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.word_blocklist_label%22)

> Word Blocklist

```diff
+敏感词黑名单
```

#### [`ralkage-civility-filter.admin.stats.action_breakdown`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.action_breakdown%22)

> Action Breakdown

```diff
+操作分布
```

#### [`ralkage-civility-filter.admin.stats.average_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.average_score%22)

> Average Score

```diff
+平均分值
```

#### [`ralkage-civility-filter.admin.stats.avg_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.avg_score%22)

> Avg Score

```diff
+平均分
```

#### [`ralkage-civility-filter.admin.stats.daily_trend`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.daily_trend%22)

> Daily Trend (30 days)

```diff
+每日趋势 (30天)
```

#### [`ralkage-civility-filter.admin.stats.date`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.date%22)

> Date

```diff
+日期
```

#### [`ralkage-civility-filter.admin.stats.flagged`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.flagged%22)

> Flagged

```diff
+被标记
```

#### [`ralkage-civility-filter.admin.stats.no_data`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.no_data%22)

> No statistics data available yet.

```diff
+暂无统计数据。
```

#### [`ralkage-civility-filter.admin.stats.title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.title%22)

> Civility Statistics

```diff
+文明统计数据
```

#### [`ralkage-civility-filter.admin.stats.top_categories`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.top_categories%22)

> Top Categories

```diff
+主要违规类型
```

#### [`ralkage-civility-filter.admin.stats.top_offenders`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.top_offenders%22)

> Top Offenders

```diff
+多次违规用户
```

#### [`ralkage-civility-filter.admin.stats.total`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.total%22)

> Total

```diff
+总计
```

#### [`ralkage-civility-filter.admin.stats.total_checks`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.total_checks%22)

> Total Checks

```diff
+检查总数
```

#### [`ralkage-civility-filter.admin.stats.user`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.user%22)

> User

```diff
+用户
```

#### [`ralkage-civility-filter.admin.stats.violations`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.violations%22)

> Violations

```diff
+违规次数
```

#### [`ralkage-civility-filter.admin.test.api_error`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.api_error%22)

> API call failed

```diff
+API 调用失败
```

#### [`ralkage-civility-filter.admin.test.discussion_title_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.discussion_title_label%22)

> Discussion title (optional context)

```diff
+讨论标题（可选上下文）
```

#### [`ralkage-civility-filter.admin.test.discussion_title_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.discussion_title_placeholder%22)

> Optional discussion title for context...

```diff
+可选的标题，提供更多上下文信息...
```

#### [`ralkage-civility-filter.admin.test.message_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.message_label%22)

> Message to analyze

```diff
+待分析内容
```

#### [`ralkage-civility-filter.admin.test.message_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.message_placeholder%22)

> Enter a test message to analyze...

```diff
+输入测试内容进行分析...
```

#### [`ralkage-civility-filter.admin.test.result_action`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_action%22)

> Action

```diff
+建议操作
```

#### [`ralkage-civility-filter.admin.test.result_categories`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_categories%22)

> Categories

```diff
+判定分类
```

#### [`ralkage-civility-filter.admin.test.result_latency`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_latency%22)

> API Latency

```diff
+API 延迟
```

#### [`ralkage-civility-filter.admin.test.result_reason`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_reason%22)

> Reason

```diff
+判定理由
```

#### [`ralkage-civility-filter.admin.test.result_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_score%22)

> Civility Score

```diff
+文明评分
```

#### [`ralkage-civility-filter.admin.test.submit`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.submit%22)

> Analyze

```diff
+开始分析
```

#### [`ralkage-civility-filter.admin.test.title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.title%22)

> Test Analyzer

```diff
+分析测试工具
```

#### [`ralkage-civility-filter.api.post_blocked`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.api.post_blocked%22)

> Your post was blocked by the civility filter. Please revise your message to be more respectful and constructive, then try again.

```diff
+由于包含不规范言论，您的内容已被文明过滤器拦截。请修改内容，使其更加礼貌且富有建设性，然后重试。
```

#### [`ralkage-civility-filter.forum.notification_moderated`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.notification_moderated%22)

> Your recent post was held for moderation by the civility filter. A moderator will review it shortly.

```diff
+您的最近一篇帖子已移交人工审核，管理员将尽快处理。
```

#### [`ralkage-civility-filter.forum.notification_warned`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.notification_warned%22)

> Your recent post was flagged by the civility filter. Please keep discussions respectful.

```diff
+您的最近一篇帖子被文明过滤器标记。请保持言论尊重。
```

#### [`ralkage-civility-filter.forum.post_notice_moderated`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.post_notice_moderated%22)

> This post was held for moderation by the civility filter due to potentially harmful content.

```diff
+由于内容可能包含有害言论，此帖已被文明过滤器移交至审核队列。
```

#### [`ralkage-civility-filter.forum.post_notice_warned_author`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.post_notice_warned_author%22)

> Your post was flagged by the civility filter. Please keep discussions respectful and constructive.

```diff
+您的帖子已被文明过滤器标记。请保持言论尊重且富有建设性。
```

#### [`ralkage-civility-filter.forum.post_notice_warned_mod`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.post_notice_warned_mod%22)

> This post was flagged by the civility filter for potential incivility. (Only visible to staff)

```diff
+由于可能存在不当言论，此帖已被文明过滤器标记。（仅工作人员可见）
```

#### [`ralkage-civility-filter.forum.settings.notify_civility_flagged`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.settings.notify_civility_flagged%22)

> Someone flags my post for civility

```diff
+我的帖子因不文明行为被标记时
```

#### [`ralkage-civility-filter.forum.user_profile.average_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.average_score%22)

> Average Score

```diff
+平均评分
```

#### [`ralkage-civility-filter.forum.user_profile.civility_title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.civility_title%22)

> Civility History

```diff
+文明检查记录
```

#### [`ralkage-civility-filter.forum.user_profile.no_history`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.no_history%22)

> No civility history.

```diff
+暂无文明检查历史。
```

#### [`ralkage-civility-filter.forum.user_profile.total_checks`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.total_checks%22)

> Total Checks

```diff
+检查次数
```

#### [`ralkage-civility-filter.forum.user_profile.violations`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.violations%22)

> Violations

```diff
+违规次数
```


### `ralkage-hcaptcha` (missing)

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
+为 hCaptcha 组件启用深色主题。如果您的论坛采用深色主题，请启用此选项。
```

#### [`ralkage-hcaptcha.admin.settings.dark_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_label%22)

> Dark Mode

```diff
+深色模式
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
+在用户登录时启用 hCaptcha 验证，有助于防止暴力破解攻击。
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_label%22)

> Require on Login

```diff
+登陆时启用
```


### `ralkage-linked-accounts` (missing)

#### [`ralkage-linked-accounts.admin.logs.action`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.action%22)

> Action

```diff
+操作
```

#### [`ralkage-linked-accounts.admin.logs.child`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.child%22)

> Linked Account

```diff
+关联账号
```

#### [`ralkage-linked-accounts.admin.logs.clear`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.clear%22)

> Clear All Logs

```diff
+清空所有日志
```

#### [`ralkage-linked-accounts.admin.logs.clear_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.clear_confirm%22)

> Are you sure you want to clear all linked account logs? This cannot be undone.

```diff
+确定要清空所有关联账号日志吗？此操作不可撤销。
```

#### [`ralkage-linked-accounts.admin.logs.date`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.date%22)

> Date

```diff
+日期
```

#### [`ralkage-linked-accounts.admin.logs.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.empty%22)

> No activity logged yet.

```diff
+暂无活动记录。
```

#### [`ralkage-linked-accounts.admin.logs.ip`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.ip%22)

> IP Address

```diff
+IP 地址
```

#### [`ralkage-linked-accounts.admin.logs.load_more`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.load_more%22)

> Load More

```diff
+加载更多
```

#### [`ralkage-linked-accounts.admin.logs.parent`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.parent%22)

> Parent Account

```diff
+主账号
```

#### [`ralkage-linked-accounts.admin.logs.title`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.title%22)

> Linked Account Activity Log

```diff
+关联账号活动日志
```

#### [`ralkage-linked-accounts.admin.permissions.create`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.permissions.create%22)

> Create new linked accounts

```diff
+创建新的关联账号
```

#### [`ralkage-linked-accounts.admin.permissions.use`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.permissions.use%22)

> Use linked accounts

```diff
+使用关联账号
```

#### [`ralkage-linked-accounts.admin.permissions.view_any`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.permissions.view_any%22)

> View any user's linked accounts

```diff
+查看任意用户的关联账号
```

#### [`ralkage-linked-accounts.admin.settings.log_retention_days`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.log_retention_days%22)

> Log Retention (Days)

```diff
+日志保留天数
```

#### [`ralkage-linked-accounts.admin.settings.log_retention_days_help`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.log_retention_days_help%22)

> Number of days to keep activity logs. Set to 0 to keep forever.

```diff
+活动日志保留的天数。设为 0 表示永久保留。
```

#### [`ralkage-linked-accounts.admin.settings.max_accounts`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.max_accounts%22)

> Maximum Linked Accounts

```diff
+最大关联账号数量
```

#### [`ralkage-linked-accounts.admin.settings.max_accounts_help`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.max_accounts_help%22)

> Maximum number of accounts a user can link. Set to 0 for unlimited.

```diff
+用户可以关联的最大账号数量。设为 0 表示无限制。
```

#### [`ralkage-linked-accounts.admin.tabs.logs`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.tabs.logs%22)

> Activity Log

```diff
+活动日志
```

#### [`ralkage-linked-accounts.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.tabs.settings%22)

> Settings

```diff
+设置
```

#### [`ralkage-linked-accounts.forum.composer.post_as`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.composer.post_as%22)

> Post as:

```diff
+发布身份：
```

#### [`ralkage-linked-accounts.forum.nav.linked_accounts`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.nav.linked_accounts%22)

> Linked Accounts

```diff
+关联账号
```

#### [`ralkage-linked-accounts.forum.page.child_info`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.child_info%22)

> This is a linked account. To manage linked accounts, create new ones, or link existing accounts, switch back to the parent account.

```diff
+这是一个关联账号。要管理关联账号、创建新账号或关联现有账号，请先切回主账号。
```

#### [`ralkage-linked-accounts.forum.page.create_description`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_description%22)

> Create a brand new account that will be linked to your current account.

```diff
+创建一个全新的账号并与当前账号关联。
```

#### [`ralkage-linked-accounts.forum.page.create_new`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_new%22)

> Create New Account

```diff
+创建新账号
```

#### [`ralkage-linked-accounts.forum.page.create_submit`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_submit%22)

> Create Account

```diff
+创建账号
```

#### [`ralkage-linked-accounts.forum.page.create_success`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_success%22)

> New linked account created successfully!

```diff
+新的关联账号创建成功！
```

#### [`ralkage-linked-accounts.forum.page.create_title`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_title%22)

> Create a New Linked Account

```diff
+创建新的关联账号
```

#### [`ralkage-linked-accounts.forum.page.current`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.current%22)

> Current

```diff
+当前
```

#### [`ralkage-linked-accounts.forum.page.email`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.email%22)

> Email

```diff
+电子邮箱
```

#### [`ralkage-linked-accounts.forum.page.email_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.email_placeholder%22)

> Enter email for the new account

```diff
+输入新账号的电子邮箱
```

#### [`ralkage-linked-accounts.forum.page.identification`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.identification%22)

> Username or Email

```diff
+用户名或邮箱
```

#### [`ralkage-linked-accounts.forum.page.identification_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.identification_placeholder%22)

> Enter the username or email of the existing account

```diff
+输入现有账号的用户名或电子邮箱
```

#### [`ralkage-linked-accounts.forum.page.link_description`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_description%22)

> Link an account that already exists. You'll need to provide the account's password to verify ownership.

```diff
+关联一个已经存在的账号。您需要提供该账号的密码以验证所有权。
```

#### [`ralkage-linked-accounts.forum.page.link_existing`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_existing%22)

> Link Existing Account

```diff
+关联现有账号
```

#### [`ralkage-linked-accounts.forum.page.link_password_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_password_placeholder%22)

> Enter the account's password to verify

```diff
+输入该账号的密码进行验证
```

#### [`ralkage-linked-accounts.forum.page.link_submit`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_submit%22)

> Link Account

```diff
+关联账号
```

#### [`ralkage-linked-accounts.forum.page.link_success`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_success%22)

> Account linked successfully!

```diff
+账号关联成功！
```

#### [`ralkage-linked-accounts.forum.page.link_title`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_title%22)

> Link an Existing Account

```diff
+关联现有账号
```

#### [`ralkage-linked-accounts.forum.page.linked_on`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.linked_on%22)

> Linked {date}

```diff
+关联于 {date}
```

#### [`ralkage-linked-accounts.forum.page.max_reached`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.max_reached%22)

> You have reached the maximum of {max} linked accounts.

```diff
+您已达到最大关联账号上限（{max} 个）。
```

#### [`ralkage-linked-accounts.forum.page.no_accounts`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.no_accounts%22)

> You haven't linked any accounts yet. Create a new account or link an existing one to get started.

```diff
+您尚未关联任何账号。创建一个新账号或关联一个现有账号来开始吧。
```

#### [`ralkage-linked-accounts.forum.page.password`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.password%22)

> Password

```diff
+密码
```

#### [`ralkage-linked-accounts.forum.page.password_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.password_placeholder%22)

> Enter password for the new account (optional)

```diff
+输入新账号的密码（可选）
```

#### [`ralkage-linked-accounts.forum.page.revert`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.revert%22)

> Revert to Parent

```diff
+切回主账号
```

#### [`ralkage-linked-accounts.forum.page.switch`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.switch%22)

> Switch

```diff
+切换
```

#### [`ralkage-linked-accounts.forum.page.switch_to_parent`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.switch_to_parent%22)

> Switch to Parent Account

```diff
+切换到主账号
```

#### [`ralkage-linked-accounts.forum.page.switched_notice`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.switched_notice%22)

> You are currently using a linked account. Your parent account is {name}.

```diff
+您当前正在使用关联账号。您的主账号是 {name}。
```

#### [`ralkage-linked-accounts.forum.page.title`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.title%22)

> Linked Accounts

```diff
+关联账号
```

#### [`ralkage-linked-accounts.forum.page.unlink`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.unlink%22)

> Unlink

```diff
+取消关联
```

#### [`ralkage-linked-accounts.forum.page.unlink_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.unlink_confirm%22)

> Are you sure you want to unlink this account? The account will still exist but will no longer be linked.

```diff
+确定要取消关联此账号吗？该账号仍会存在，但不再与您的主账号关联。
```

#### [`ralkage-linked-accounts.forum.page.unlink_success`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.unlink_success%22)

> Account unlinked successfully.

```diff
+账号已成功取消关联。
```

#### [`ralkage-linked-accounts.forum.page.username`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.username%22)

> Username

```diff
+用户名
```

#### [`ralkage-linked-accounts.forum.page.username_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.username_placeholder%22)

> Enter username for the new account

```diff
+输入新账号的用户名
```

#### [`ralkage-linked-accounts.forum.revert_to`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.revert_to%22)

> Revert to {name}

```diff
+切回至 {name}
```


### `ralkage-profile-messages` (missing)

#### [`ralkage-profile-messages.admin.permissions.delete_own_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.admin.permissions.delete_own_label%22)

> Delete own profile messages

```diff
+删除自己的留言
```

#### [`ralkage-profile-messages.admin.permissions.edit_any_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.admin.permissions.edit_any_label%22)

> Edit any profile message

```diff
+编辑任何留言
```

#### [`ralkage-profile-messages.admin.permissions.post_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.admin.permissions.post_label%22)

> Post profile messages

```diff
+发布个人资料页留言
```

#### [`ralkage-profile-messages.forum.composer.confirm_exit`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.confirm_exit%22)

> Your message has not been posted. Do you wish to discard it?

```diff
+您的留言尚未发布。确定要放弃吗？
```

#### [`ralkage-profile-messages.forum.composer.edit_heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.edit_heading%22)

> Edit Message

```diff
+编辑留言
```

#### [`ralkage-profile-messages.forum.composer.heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.heading%22)

> Message on {username}'s profile

```diff
+在 {username} 的个人资料页留言
```

#### [`ralkage-profile-messages.forum.composer.placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.placeholder%22)

> Write a message on this profile...

```diff
+在此个人资料页留下您的留言...
```

#### [`ralkage-profile-messages.forum.composer.posted_message`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.posted_message%22)

> Your message has been posted.

```diff
+您的留言已发布。
```

#### [`ralkage-profile-messages.forum.composer.preview_heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.preview_heading%22)

> Preview

```diff
+预览
```

#### [`ralkage-profile-messages.forum.composer.reply_heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.reply_heading%22)

> Reply on {username}'s profile

```diff
+在 {username} 的个人资料页回复
```

#### [`ralkage-profile-messages.forum.composer.save_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.save_button%22)

> Save Changes

```diff
+保存修改
```

#### [`ralkage-profile-messages.forum.composer.saved_message`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.saved_message%22)

> Your message has been updated.

```diff
+您的留言已更新。
```

#### [`ralkage-profile-messages.forum.composer.submit_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.submit_button%22)

> Post Message

```diff
+发布留言
```

#### [`ralkage-profile-messages.forum.composer.validation_blocked`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.validation_blocked%22)

> This user has disabled profile messages.

```diff
+该用户已禁用个人资料页留言。
```

#### [`ralkage-profile-messages.forum.composer.validation_empty`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.validation_empty%22)

> Message cannot be empty.

```diff
+留言内容不能为空。
```

#### [`ralkage-profile-messages.forum.composer.validation_too_long`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.validation_too_long%22)

> Message cannot exceed 2000 characters.

```diff
+留言内容不能超过 2000 个字符。
```

#### [`ralkage-profile-messages.forum.message.delete_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.delete_button%22)

> Delete

```diff
+删除
```

#### [`ralkage-profile-messages.forum.message.delete_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.delete_confirm%22)

> Are you sure you want to delete this message?

```diff
+确定要删除这条留言吗？
```

#### [`ralkage-profile-messages.forum.message.edit_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.edit_button%22)

> Edit

```diff
+编辑
```

#### [`ralkage-profile-messages.forum.message.hide_replies`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.hide_replies%22)

> Hide replies

```diff
+隐藏回复
```

#### [`ralkage-profile-messages.forum.message.permalink_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.permalink_button%22)

> Permalink

```diff
+永久链接
```

#### [`ralkage-profile-messages.forum.message.permalink_copied`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.permalink_copied%22)

> Link copied to clipboard.

```diff
+链接已复制到剪贴板。
```

#### [`ralkage-profile-messages.forum.message.reply_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.reply_button%22)

> Reply

```diff
+回复
```

#### [`ralkage-profile-messages.forum.message.reply_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.reply_placeholder%22)

> Write a reply...

```diff
+撰写回复...
```

#### [`ralkage-profile-messages.forum.message.reply_submit`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.reply_submit%22)

> Reply

```diff
+回复
```

#### [`ralkage-profile-messages.forum.message.report_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.report_button%22)

> Report

```diff
+举报
```

#### [`ralkage-profile-messages.forum.message.show_replies`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.show_replies%22)

> {count, plural, one {Show # reply} other {Show # replies}}

```diff
+{count, plural, one {显示 # 条回复} other {显示 # 条回复}}
```

#### [`ralkage-profile-messages.forum.notification.new_profile_message_text`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.notification.new_profile_message_text%22)

> {username} posted on your profile.

```diff
+{username} 在您的个人资料页发布了留言。
```

#### [`ralkage-profile-messages.forum.report.already_reported`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.already_reported%22)

> You have already reported this message.

```diff
+您已经举报过这条留言了。
```

#### [`ralkage-profile-messages.forum.report.cannot_report_own`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.cannot_report_own%22)

> You cannot report your own messages.

```diff
+您不能举报自己的留言。
```

#### [`ralkage-profile-messages.forum.report.detail_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.detail_placeholder%22)

> Provide additional details (optional)...

```diff
+提供更多详细信息（可选）...
```

#### [`ralkage-profile-messages.forum.report.reason_harassment`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_harassment%22)

> Harassment

```diff
+骚扰行为
```

#### [`ralkage-profile-messages.forum.report.reason_inappropriate`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_inappropriate%22)

> Inappropriate content

```diff
+违规内容
```

#### [`ralkage-profile-messages.forum.report.reason_other`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_other%22)

> Other

```diff
+其他原因
```

#### [`ralkage-profile-messages.forum.report.reason_spam`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_spam%22)

> Spam

```diff
+垃圾信息
```

#### [`ralkage-profile-messages.forum.report.submit_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.submit_button%22)

> Submit Report

```diff
+提交举报
```

#### [`ralkage-profile-messages.forum.report.success`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.success%22)

> Message has been reported.

```diff
+留言已举报。
```

#### [`ralkage-profile-messages.forum.report.title`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.title%22)

> Report Message

```diff
+举报留言
```

#### [`ralkage-profile-messages.forum.settings.block_profile_messages_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.block_profile_messages_label%22)

> Disable profile messages from other users

```diff
+禁止他人在我的个人资料页留言
```

#### [`ralkage-profile-messages.forum.settings.default_view_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.default_view_label%22)

> Show Profile Messages as default profile view

```diff
+将个人资料留言设为默认展示项
```

#### [`ralkage-profile-messages.forum.settings.notify_new_profile_message_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.notify_new_profile_message_label%22)

> Someone posts on my profile

```diff
+有人在我的个人资料页发布留言时
```

#### [`ralkage-profile-messages.forum.settings.profile_heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.profile_heading%22)

> Profile

```diff
+个人资料
```

#### [`ralkage-profile-messages.forum.user.messages_empty_text`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.user.messages_empty_text%22)

> No messages have been posted on this profile yet.

```diff
+该个人资料页暂无留言。
```

#### [`ralkage-profile-messages.forum.user.messages_link`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.user.messages_link%22)

> Profile Messages

```diff
+个人资料留言
```

#### [`ralkage-profile-messages.forum.user.messages_load_more_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.user.messages_load_more_button%22)

> Load More

```diff
+加载更多
```


### `ralkage-word-censor` (missing)

#### [`ralkage-word-censor.admin.settings.replacement_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_help%22)

> Character used to replace each letter of a censored word. Default: \*

```diff
+用于替换敏感词中每个字符的符号。默认：*
```

#### [`ralkage-word-censor.admin.settings.replacement_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_label%22)

> Replacement Character

```diff
+替换字符
```

#### [`ralkage-word-censor.admin.settings.word_list_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_help%22)

> Enter one word or phrase per line. These will be replaced with the replacement character when displayed to users.

```diff
+每行输入一个词组或短语。在向用户显示时，这些词语将被替换字符遮盖。
```

#### [`ralkage-word-censor.admin.settings.word_list_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_label%22)

> Censored Words

```diff
+敏感词列表
```

#### [`ralkage-word-censor.forum.settings.word_censor_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_help%22)

> When enabled, configured words will be censored in posts. Disable to see uncensored content.

```diff
+开启后，帖子中的预设词语将被过滤。禁用此项可查看未经过滤的原文内容。
```

#### [`ralkage-word-censor.forum.settings.word_censor_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_label%22)

> Enable Word Censoring

```diff
+开启词语过滤
```


### `ralkage-word-counter` (missing)

#### [`ralkage-word-counter.forum.composer.word_counter`](https://weblate.rob006.net/translate/flarum2/ralkage-word-counter/zh_Hans/?q=context%3A%3D%22ralkage-word-counter.forum.composer.word_counter%22)

> {words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}

```diff
+{words, plural, other {{words} 个单词}}, {chars, plural, other {{chars} 个字符}}
```


### `resofire-blog-cards` (missing)

#### [`resofire_blog_cards.admin.recalculate_button`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_button%22)

> Recalculate Participants

```diff
+重新计算参与者
```

#### [`resofire_blog_cards.admin.recalculate_error`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_error%22)

> An error occurred. Please try again or use the CLI command.

```diff
+发生错误。请重试或使用 CLI 命令。
```

#### [`resofire_blog_cards.admin.recalculate_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_help%22)

> Recalculates participant avatars for all discussions. Run this after first installing the extension on an existing forum, or any time you suspect the preview data is out of sync.

```diff
+重新计算所有讨论的参与者头像。在已有论坛安装扩展后首次运行，或当预览数据不同步时运行。
```

#### [`resofire_blog_cards.admin.recalculate_modal_close`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_modal_close%22)

> Close

```diff
+关闭
```

#### [`resofire_blog_cards.admin.recalculate_modal_complete`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_modal_complete%22)

> Complete! {total} discussions recalculated.

```diff
+完成！已重新计算 {total} 个讨论。
```

#### [`resofire_blog_cards.admin.recalculate_modal_progress`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_modal_progress%22)

> {processed} of {total} discussions

```diff
+已处理 {processed} / {total} 个讨论
```

#### [`resofire_blog_cards.admin.recalculate_modal_title`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_modal_title%22)

> Recalculating Participants

```diff
+正在重新计算参与者
```

#### [`resofire_blog_cards.admin.recalculate_modal_warning`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_modal_warning%22)

> Do not close this window or navigate away until the process is complete.

```diff
+在处理完成之前，请勿关闭此窗口或离开页面。
```

#### [`resofire_blog_cards.admin.recalculate_success`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_success%22)

> Done. Recalculated {count} discussions in {duration}s.

```diff
+完成。在 {duration} 秒内重新计算了 {count} 个讨论。
```

#### [`resofire_blog_cards.admin.recalculating_button`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculating_button%22)

> Recalculating…

```diff
+正在重新计算…
```

#### [`resofire_blog_cards.admin.settings.fullWidth_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.fullWidth_help%22)

> If enabled, each card will span the full width instead of two per row.

```diff
+启用后，每个卡片将占据整行宽度，而不是每行两个。
```

#### [`resofire_blog_cards.admin.settings.fullWidth_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.fullWidth_label%22)

> Full Width Cards

```diff
+全宽卡片
```

#### [`resofire_blog_cards.admin.settings.onIndexPage_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.onIndexPage_help%22)

> If enabled, the discussion list page will display cards.

```diff
+启用后，讨论列表页面将以卡片形式显示。
```

#### [`resofire_blog_cards.admin.settings.onIndexPage_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.onIndexPage_label%22)

> Use on Discussion List

```diff
+在讨论列表页启用
```

#### [`resofire_blog_cards.admin.settings.showParticipants_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.showParticipants_help%22)

> If enabled, each card will display a strip of participant avatars at the bottom.

```diff
+启用后，每个卡片底部将显示参与者头像列表。
```

#### [`resofire_blog_cards.admin.settings.showParticipants_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.showParticipants_label%22)

> Show Participant Avatars

```diff
+显示参与者头像
```

#### [`resofire_blog_cards.admin.settings.tagIds_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.tagIds_help%22)

> Select tags to show cards on. If none are selected, cards appear on all tag pages.

```diff
+选择要显示卡片的标签。如果未选择，则所有标签页面都会显示卡片。
```

#### [`resofire_blog_cards.admin.settings.tagIds_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.tagIds_label%22)

> Restrict to Tags

```diff
+限制标签
```

#### [`resofire_blog_cards.admin.tools_heading`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.tools_heading%22)

> Tools

```diff
+工具
```

#### [`resofire_blog_cards.forum.load_more`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.load_more%22)

> Load more

```diff
+加载更多
```

#### [`resofire_blog_cards.forum.modal_title`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.modal_title%22)

> {count} Participants

```diff
+{count} 位参与者
```

#### [`resofire_blog_cards.forum.more_participants`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.more_participants%22)

> {count}+

```diff
+{count}+
```

#### [`resofire_blog_cards.forum.replies`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.replies%22)

> Replies: {count}

```diff
+回复：{count}
```

#### [`resofire_blog_cards.forum.show_all_participants`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.show_all_participants%22)

> Show all participants

```diff
+显示所有参与者
```

#### [`resofire_blog_cards.forum.unreadReplies`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.unreadReplies%22)

> Unread replies: {count}

```diff
+未读回复：{count}
```


### `resofire-digest-mail` (missing)

#### [`resofire-digest-mail.admin.settings.enable_awards_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.enable_awards_help%22)

> Show active and upcoming awards in the digest. Requires huseyinfiliz/awards.

```diff
+在摘要邮件中展示进行中和即将开始的奖项评选。需要安装 huseyinfiliz/awards。
```

#### [`resofire-digest-mail.admin.settings.enable_awards_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.enable_awards_label%22)

> Awards

```diff
+奖项评选
```

#### [`resofire-digest-mail.admin.settings.featured_discussion_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.featured_discussion_help%22)

> Enter a discussion ID to pin it as a featured discussion at the top of every digest. Leave blank to show no featured discussion.

```diff
+输入讨论 ID 以将其置顶为每份摘要顶部的精选讨论。留空则不显示精选讨论。
```

#### [`resofire-digest-mail.admin.settings.featured_discussion_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.featured_discussion_label%22)

> Featured discussion ID

```diff
+精选讨论 ID
```

#### [`resofire-digest-mail.admin.settings.hot_recency_weight_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_recency_weight_help%22)

> How much recency affects hotness. Higher = newer posts score more strongly. Set to 0 to rank by replies only.

```diff
+时效性对热门程度的影响程度。值越高，新帖子的分数越高。设为 0 则仅按回复数排序。
```

#### [`resofire-digest-mail.admin.settings.hot_recency_weight_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_recency_weight_label%22)

> Hot score — recency weight

```diff
+热门分数 —— 时效权重
```

#### [`resofire-digest-mail.admin.settings.hot_reply_weight_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_reply_weight_help%22)

> How much each reply counts toward a discussion's hotness score. Higher = more replies-driven.

```diff
+每条回复对讨论热门分数的贡献程度。值越高，越偏向回复驱动。
```

#### [`resofire-digest-mail.admin.settings.hot_reply_weight_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_reply_weight_label%22)

> Hot score — reply weight

```diff
+热门分数 —— 回复权重
```

#### [`resofire-digest-mail.admin.settings.limit_badges_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_badges_help%22)

> Maximum number of recent badge earners to list in the digest (default 5, min 3). Requires fof/badges.

```diff
+摘要邮件中列出的最近获得勋章的用户数量上限（默认为 5，最小为 3）。需要安装 fof/badges。
```

#### [`resofire-digest-mail.admin.settings.limit_badges_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_badges_label%22)

> Badges — max recent earners

```diff
+勋章 —— 最近获得者数量上限
```

#### [`resofire-digest-mail.admin.settings.limit_favorites_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_favorites_help%22)

> Maximum number of favorite discussions to show, ranked by likes/reactions during the period (default 6, min 3). Set to 0 to disable. Uses fof/reactions if enabled, otherwise flarum/likes.

```diff
+显示的收藏讨论数量上限，根据期间收到的点赞/反应数排序（默认为 6，最小为 3）。设为 0 表示禁用。如果启用了 fof/reactions 则使用反应数，否则使用 Flarum 原生点赞数。
```

#### [`resofire-digest-mail.admin.settings.limit_favorites_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_favorites_label%22)

> Favorite Discussions — max items

```diff
+收藏讨论 —— 最大条目数
```

#### [`resofire-digest-mail.admin.settings.limit_gamepedia_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_gamepedia_help%22)

> Maximum number of games to show in the Most Discussed and Newly Added sections (default 5, min 3). Requires huseyinfiliz/gamepedia.

```diff
+在“讨论最多的游戏”和“最近新增的游戏”版块中显示的游戏数量上限（默认为 5，最小为 3）。需要安装 huseyinfiliz/gamepedia。
```

#### [`resofire-digest-mail.admin.settings.limit_gamepedia_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_gamepedia_label%22)

> Gamepedia — max games per section

```diff
+Gamepedia —— 每个版块的最大游戏数量
```

#### [`resofire-digest-mail.admin.settings.limit_hot_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_hot_help%22)

> Maximum number of active (hot) discussions to include in each digest.

```diff
+每份摘要中包含的活跃（热门）讨论数量上限。
```

#### [`resofire-digest-mail.admin.settings.limit_hot_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_hot_label%22)

> Active Discussions — max items

```diff
+活跃讨论 —— 最大条目数
```

#### [`resofire-digest-mail.admin.settings.limit_leaderboard_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_leaderboard_help%22)

> Number of leaderboard entries to show in the digest (default 10, min 3). Requires huseyinfiliz-leaderboard.

```diff
+摘要邮件中显示的排行榜条目数量（默认为 10，最小为 3）。需要安装 huseyinfiliz-leaderboard。
```

#### [`resofire-digest-mail.admin.settings.limit_leaderboard_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_leaderboard_label%22)

> Leaderboard entries

```diff
+排行榜条目数
```

#### [`resofire-digest-mail.admin.settings.limit_members_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_members_help%22)

> Maximum number of new members to show in each digest.

```diff
+每份摘要中显示的新成员数量上限。
```

#### [`resofire-digest-mail.admin.settings.limit_members_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_members_label%22)

> New Members — max items

```diff
+新成员 —— 最大条目数
```

#### [`resofire-digest-mail.admin.settings.limit_new_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_new_help%22)

> Maximum number of new discussions to include in each digest.

```diff
+每份摘要中包含的新讨论数量上限。
```

#### [`resofire-digest-mail.admin.settings.limit_new_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_new_label%22)

> New Discussions — max items

```diff
+新讨论 —— 最大条目数
```

#### [`resofire-digest-mail.admin.settings.limit_pickem_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_pickem_help%22)

> Maximum number of upcoming matches, recent results, and leaderboard entries to show in the digest (default 5, min 3). Requires huseyinfiliz/pickem.

```diff
+摘要邮件中显示的即将开始的比赛、最新结果和排行榜条目的最大数量（默认为 5，最小为 3）。需要安装 huseyinfiliz/pickem。
```

#### [`resofire-digest-mail.admin.settings.limit_pickem_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_pickem_label%22)

> Pick'em — max items per section

```diff
+Pick'em —— 每个版块的最大条目数
```

#### [`resofire-digest-mail.admin.settings.limit_unread_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_unread_help%22)

> Maximum number of unread discussions to surface per recipient.

```diff
+为每位收件人展示的未读讨论数量上限。
```

#### [`resofire-digest-mail.admin.settings.limit_unread_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_unread_label%22)

> Unread Discussions — max items

```diff
+未读讨论 —— 最大条目数
```

#### [`resofire-digest-mail.admin.settings.monthly_day_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.monthly_day_help%22)

> Day of the month on which monthly digests are sent. Capped at 28 so February always works.

```diff
+每月摘要的发送日期（几号）。上限为 28，以确保二月也能正常工作。
```

#### [`resofire-digest-mail.admin.settings.monthly_day_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.monthly_day_label%22)

> Monthly digest — send day

```diff
+每月摘要 —— 发送日
```

#### [`resofire-digest-mail.admin.settings.queue_chunk_size_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_chunk_size_help%22)

> Number of users dispatched per scheduler minute (default 200, min 50, max 10000). Small forums: 200–500. Large forums on dedicated servers: 1000–10000. Higher values finish faster but use more memory per cycle.

```diff
+每个调度分钟分发的用户数量（默认为 200，最小 50，最大 10000）。小型论坛：200–500。使用专用服务器的大型论坛：1000–10000。较高的值完成更快，但每个周期使用更多内存。
```

#### [`resofire-digest-mail.admin.settings.queue_chunk_size_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_chunk_size_label%22)

> Queue chunk size

```diff
+队列块大小
```

#### [`resofire-digest-mail.admin.settings.queue_delay_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_delay_help%22)

> Seconds before queued jobs become available to workers (default 0). In window mode this is rarely needed — the window itself spreads load across time. Only useful if using the two-phase digest:enqueue command on very large forums.

```diff
+队列任务变为可处理前的延迟秒数（默认为 0）。在窗口模式下通常不需要此设置——窗口本身会分散负载。仅在大型论坛上使用两阶段 digest:enqueue 命令时才有用。
```

#### [`resofire-digest-mail.admin.settings.queue_delay_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_delay_label%22)

> Job delay (seconds)

```diff
+任务延迟（秒）
```

#### [`resofire-digest-mail.admin.settings.queue_name_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_name_help%22)

> The named queue digest jobs are pushed onto. Must match the --queue argument in your queue:work cron. Default: digest.

```diff
+摘要任务被推送到的指定队列名称。必须与 queue:work 定时任务中的 --queue 参数匹配。默认值：digest。
```

#### [`resofire-digest-mail.admin.settings.queue_name_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_name_label%22)

> Queue name

```diff
+队列名称
```

#### [`resofire-digest-mail.admin.settings.queue_tries_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_tries_help%22)

> How many times a failed digest job will be retried before being moved to the failed jobs table (default 3). Retries use exponential backoff: 30s, 60s, 120s. Note: if you have blomstra/database-queue installed, it has its own Retries setting — the lower of the two values will effectively apply. Recommended to set both extension settings to the same value.

```diff
+失败的摘要任务在被移到失败任务表之前将重试的次数（默认为 3）。重试使用指数退避策略：30 秒、60 秒、120 秒。注意：如果您安装了 blomstra/database-queue，它有自己的重试次数设置——实际生效的是两者中较小的值。建议将两个扩展的设置设为相同值。
```

#### [`resofire-digest-mail.admin.settings.queue_tries_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_tries_label%22)

> Max retry attempts

```diff
+最大重试次数
```

#### [`resofire-digest-mail.admin.settings.send_hour_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_hour_help%22)

> The time of day your digest emails will start sending.

```diff
+摘要邮件开始发送的时间点（小时）。
```

#### [`resofire-digest-mail.admin.settings.send_hour_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_hour_label%22)

> Send hour

```diff
+发送小时
```

#### [`resofire-digest-mail.admin.settings.send_window_end_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_end_help%22)

> Leave this the same as the start time to send all emails at once. Set it later to spread sending across several hours — recommended for larger forums. For example, a 2 a.m. start and 4 a.m. end means emails go out gradually between 2 and 4 a.m.

```diff
+保持与开始时间相同可一次性发送所有邮件。设置为更晚的时间可将发送分散到数小时内——推荐大型论坛使用。例如，凌晨 2 点开始、4 点结束，意味着邮件将在凌晨 2 点到 4 点之间逐渐发送。
```

#### [`resofire-digest-mail.admin.settings.send_window_end_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_end_label%22)

> Send time — end (optional)

```diff
+发送结束时间（可选）
```

#### [`resofire-digest-mail.admin.settings.send_window_start_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_start_help%22)

> The time of day your digest emails will start sending. Choose a quiet period when your forum has low activity — typically late night or early morning.

```diff
+摘要邮件开始发送的时间点。请选择论坛活动较少的安静时段——通常是深夜或清晨。
```

#### [`resofire-digest-mail.admin.settings.send_window_start_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_start_label%22)

> Send time

```diff
+发送时间
```

#### [`resofire-digest-mail.admin.settings.timezone_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.timezone_help%22)

> Choose your own timezone — not your server's. The send time you set below will fire at that hour in whichever timezone you select here. For example, if you're in Chicago and want emails sent at 8 a.m. your time, select Central Time and set the send time to 8 a.m.

```diff
+选择您自己的时区——而不是服务器的时区。您下方设置的发送时间将根据您在此选择的时区中的那个小时触发。例如，如果您在芝加哥且希望邮件在您当地时间的上午 8 点发送，请选择中部时间并将发送时间设为上午 8 点。
```

#### [`resofire-digest-mail.admin.settings.timezone_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.timezone_label%22)

> Your timezone

```diff
+您的时区
```

#### [`resofire-digest-mail.admin.settings.weekly_day_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.weekly_day_help%22)

> Day of the week on which weekly digests are sent.

```diff
+每周摘要的发送日期（星期几）。
```

#### [`resofire-digest-mail.admin.settings.weekly_day_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.weekly_day_label%22)

> Weekly digest — send day

```diff
+每周摘要 —— 发送日
```

#### [`resofire-digest-mail.admin.test_send.email_placeholder`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.email_placeholder%22)

> recipient@example.com

```diff
+recipient@example.com
```

#### [`resofire-digest-mail.admin.test_send.error_empty_email`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.error_empty_email%22)

> Please enter an email address.

```diff
+请输入邮箱地址。
```

#### [`resofire-digest-mail.admin.test_send.error_generic`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.error_generic%22)

> Failed to send. Check your mail settings and try again.

```diff
+发送失败。请检查您的邮件设置后重试。
```

#### [`resofire-digest-mail.admin.test_send.frequency_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.frequency_label%22)

> Frequency

```diff
+频率
```

#### [`resofire-digest-mail.admin.test_send.heading`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.heading%22)

> Send Test Email

```diff
+发送测试邮件
```

#### [`resofire-digest-mail.admin.test_send.help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.help%22)

> Send a live digest email immediately to any address. Uses your account's visibility to build content. Does not affect scheduled sends or unsubscribe tokens.

```diff
+立即向任意地址发送一封真实的摘要邮件。使用您账号的权限来构建内容。不会影响计划发送或取消订阅令牌。
```

#### [`resofire-digest-mail.admin.test_send.send_button`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.send_button%22)

> Send Test Email

```diff
+发送测试邮件
```

#### [`resofire-digest-mail.admin.test_send.sending_button`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.sending_button%22)

> Sending…

```diff
+发送中…
```

#### [`resofire-digest-mail.admin.test_send.success`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.success%22)

> Sent! Check {email} for the {frequency} digest.

```diff
+已发送！请检查 {email} 收件箱中的 {frequency} 摘要。
```

#### [`resofire-digest-mail.admin.test_send.theme_dark`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_dark%22)

> Dark

```diff
+深色
```

#### [`resofire-digest-mail.admin.test_send.theme_hint_dark`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_hint_dark%22)

> Sends with dark mode styles applied

```diff
+以深色模式样式发送
```

#### [`resofire-digest-mail.admin.test_send.theme_hint_light`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_hint_light%22)

> Sends with light mode styles applied

```diff
+以浅色模式样式发送
```

#### [`resofire-digest-mail.admin.test_send.theme_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_label%22)

> Preview theme

```diff
+预览主题
```

#### [`resofire-digest-mail.admin.test_send.theme_light`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_light%22)

> Light

```diff
+浅色
```

#### [`resofire-digest-mail.admin.test_send.theme_light_only`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_light_only%22)

> Light mode only — install and enable fof/nightmode to unlock dark mode emails

```diff
+仅浅色模式 —— 安装并启用 fof/nightmode 可解锁深色模式邮件
```

#### [`resofire-digest-mail.forum.settings.digest_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.digest_help%22)

> Receive a periodic summary of new discussions, active threads, and new members.

```diff
+定期接收包含新讨论、活跃话题和新成员的摘要邮件。
```

#### [`resofire-digest-mail.forum.settings.digest_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.digest_label%22)

> Email Digest

```diff
+摘要邮件
```

#### [`resofire-digest-mail.forum.settings.frequency_daily`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.frequency_daily%22)

> Daily

```diff
+每日
```

#### [`resofire-digest-mail.forum.settings.frequency_monthly`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.frequency_monthly%22)

> Monthly

```diff
+每月
```

#### [`resofire-digest-mail.forum.settings.frequency_off`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.frequency_off%22)

> Off — don't send me digests

```diff
+关闭 —— 不发送摘要邮件
```

#### [`resofire-digest-mail.forum.settings.frequency_weekly`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.frequency_weekly%22)

> Weekly

```diff
+每周
```

#### [`resofire-digest-mail.forum.settings.save_error`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.save_error%22)

> Could not save your preference. Please try again.

```diff
+无法保存您的偏好，请重试。
```

#### [`resofire-digest-mail.forum.settings.saved`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.saved%22)

> Saved

```diff
+已保存
```


### `resofire-menu-control` (missing)

#### [`resofire-menu-control.admin.nav_order.add_custom_link`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_custom_link%22)

> Add Custom Link

```diff
+添加自定义链接
```

#### [`resofire-menu-control.admin.nav_order.add_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_highlight%22)

> Highlight this item for users

```diff
+为用户高亮此项
```

#### [`resofire-menu-control.admin.nav_order.custom_link_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.custom_link_label%22)

> Link label

```diff
+链接标签
```

#### [`resofire-menu-control.admin.nav_order.description`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.description%22)

> Use the arrow buttons to reorder the sidebar navigation items on the forum index page. Changes take effect immediately after saving.

```diff
+使用箭头按钮重新排列论坛首页侧边栏的导航项。保存后更改会立即生效。
```

#### [`resofire-menu-control.admin.nav_order.flip_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_help%22)

> When enabled, tag links appear at the top of the sidebar and navigation items (All Discussions, Following, etc.) appear below.

```diff
+启用后，标签链接显示在侧边栏顶部，而导航项（所有讨论、关注等）显示在下方。
```

#### [`resofire-menu-control.admin.nav_order.flip_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_label%22)

> Flip navigation (show tags above menu items)

```diff
+翻转导航（将标签显示在菜单项上方）
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_help%22)

> Background color for highlighted nav items. Leave empty to use the default theme color.

```diff
+用于高亮导航项的背景颜色。留空使用主题默认颜色。
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_label%22)

> Highlight color

```diff
+高亮颜色
```

#### [`resofire-menu-control.admin.nav_order.icon_input_title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.icon_input_title%22)

> Custom Font Awesome icon class (e.g. fas fa-bolt). Leave empty to use default.

```diff
+自定义 Font Awesome 图标类（例如：fas fa-bolt）。留空使用默认图标。
```

#### [`resofire-menu-control.admin.nav_order.move_down`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.move_down%22)

> Move down

```diff
+下移
```

#### [`resofire-menu-control.admin.nav_order.move_up`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.move_up%22)

> Move up

```diff
+上移
```

#### [`resofire-menu-control.admin.nav_order.no_items`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.no_items%22)

> No navigation items detected yet. Visit the forum index page as an admin first to populate this list.

```diff
+尚未检测到任何导航项。请先以管理员身份访问论坛首页以生成此列表。
```

#### [`resofire-menu-control.admin.nav_order.polls_note`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.polls_note%22)

> Note: If fof/polls is installed, fof-polls-showcase and similar items may appear in this list even if global polls is disabled. Use the × button to remove them permanently.

```diff
+注意：如果安装了 fof/polls，即使全局投票被禁用，fof-polls-showcase 等项目也可能出现在此列表中。使用 × 按钮可永久移除它们。
```

#### [`resofire-menu-control.admin.nav_order.remove_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.remove_highlight%22)

> Remove highlight

```diff
+取消高亮
```

#### [`resofire-menu-control.admin.nav_order.remove_item`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.remove_item%22)

> Remove from list

```diff
+从列表中移除
```

#### [`resofire-menu-control.admin.nav_order.save_button`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_button%22)

> Save Order

```diff
+保存顺序
```

#### [`resofire-menu-control.admin.nav_order.save_success`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_success%22)

> Navigation order saved.

```diff
+导航顺序已保存。
```

#### [`resofire-menu-control.admin.nav_order.sticky_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_help%22)

> When enabled, the sidebar including the Start a Discussion button stays fixed at the top of the viewport as you scroll down.

```diff
+启用后，包括“发起讨论”按钮在内的侧边栏会固定在视口顶部，随页面滚动而保持可见。
```

#### [`resofire-menu-control.admin.nav_order.sticky_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_label%22)

> Sticky sidebar (sidebar stays visible while scrolling)

```diff
+固定侧边栏（滚动时侧边栏保持可见）
```

#### [`resofire-menu-control.admin.nav_order.title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.title%22)

> Menu Item Order

```diff
+菜单项顺序
```


### `tryhackx-advanced-pages` (missing)

#### [`tryhackx-advanced-pages.admin.edit_page.cancel_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.cancel_button%22)

> Cancel

```diff
+取消
```

#### [`tryhackx-advanced-pages.admin.edit_page.content_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.content_label%22)

> Content

```diff
+页面内容
```

#### [`tryhackx-advanced-pages.admin.edit_page.content_type_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.content_type_label%22)

> Content Type

```diff
+内容类型
```

#### [`tryhackx-advanced-pages.admin.edit_page.create_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.create_title%22)

> Create Page

```diff
+创建页面
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_button%22)

> Delete

```diff
+删除
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_confirmation%22)

> Are you sure you want to delete this page? This action cannot be undone.

```diff
+确定要删除此页面吗？此操作不可撤销。
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_title%22)

> Delete Page

```diff
+删除页面
```

#### [`tryhackx-advanced-pages.admin.edit_page.discard_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.discard_button%22)

> Discard

```diff
+放弃
```

#### [`tryhackx-advanced-pages.admin.edit_page.edit_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.edit_title%22)

> Edit Page

```diff
+编辑页面
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_hidden_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_hidden_label%22)

> Hidden (visible only to admins)

```diff
+隐藏（不在列表中显示）
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_published_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_published_label%22)

> Published

```diff
+已发布
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_restricted_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_restricted_label%22)

> Restricted (requires login)

```diff
+仅限特定用户组访问
```

#### [`tryhackx-advanced-pages.admin.edit_page.keep_editing_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.keep_editing_button%22)

> Keep Editing

```diff
+继续编辑
```

#### [`tryhackx-advanced-pages.admin.edit_page.meta_description_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.meta_description_label%22)

> Meta Description (SEO)

```diff
+SEO 描述
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_flarum`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_flarum%22)

> Flarum (vanilla — multiple newlines = single break)

```diff
+Flarum 模式（两个换行为新段落）
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_mode_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_mode_label%22)

> Newline Mode

```diff
+换行模式
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_preserve`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_preserve%22)

> Preserve (respect all newlines)

```diff
+保留换行
```

#### [`tryhackx-advanced-pages.admin.edit_page.php_warning`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.php_warning%22)

> PHP pages execute server-side code. Only create PHP pages if you understand the security implications. Errors are logged but never displayed to visitors.

```diff
+警告：页面内容中可以使用 PHP 代码，请谨慎操作。
```

#### [`tryhackx-advanced-pages.admin.edit_page.preview`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.preview%22)

> Preview

```diff
+预览
```

#### [`tryhackx-advanced-pages.admin.edit_page.raw`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.raw%22)

> Raw

```diff
+源码
```

#### [`tryhackx-advanced-pages.admin.edit_page.slug_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.slug_label%22)

> URL Slug

```diff
+别名
```

#### [`tryhackx-advanced-pages.admin.edit_page.submit_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.submit_button%22)

> Save Page

```diff
+保存
```

#### [`tryhackx-advanced-pages.admin.edit_page.title_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.title_label%22)

> Title

```diff
+页面标题
```

#### [`tryhackx-advanced-pages.admin.edit_page.type_text`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.type_text%22)

> Plain Text

```diff
+富文本
```

#### [`tryhackx-advanced-pages.admin.edit_page.unsaved_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.unsaved_message%22)

> You have unsaved changes. Are you sure you want to close without saving?

```diff
+您有未保存的更改，确定要离开吗？
```

#### [`tryhackx-advanced-pages.admin.edit_page.unsaved_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.unsaved_title%22)

> Unsaved Changes

```diff
+未保存的更改
```

#### [`tryhackx-advanced-pages.admin.edit_page.visible_groups_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.visible_groups_help%22)

> Leave all checked to make the page visible to everyone. Uncheck groups to restrict access. Admins always have access.

```diff
+只有这些用户组可以看到此页面。
```

#### [`tryhackx-advanced-pages.admin.edit_page.visible_groups_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.visible_groups_label%22)

> Visible to Groups

```diff
+可见用户组
```

#### [`tryhackx-advanced-pages.admin.pages.actions_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.actions_column%22)

> Actions

```diff
+操作
```

#### [`tryhackx-advanced-pages.admin.pages.create_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.create_button%22)

> Create Page

```diff
+创建页面
```

#### [`tryhackx-advanced-pages.admin.pages.draft`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.draft%22)

> Draft

```diff
+草稿
```

#### [`tryhackx-advanced-pages.admin.pages.edit_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.edit_button%22)

> Edit

```diff
+编辑
```

#### [`tryhackx-advanced-pages.admin.pages.empty`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.empty%22)

> No pages have been created yet.

```diff
+暂未创建页面。
```

#### [`tryhackx-advanced-pages.admin.pages.everyone`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.everyone%22)

> Everyone

```diff
+所有人
```

#### [`tryhackx-advanced-pages.admin.pages.groups_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.groups_column%22)

> Groups

```diff
+可见用户组
```

#### [`tryhackx-advanced-pages.admin.pages.hidden`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.hidden%22)

> Hidden

```diff
+隐藏
```

#### [`tryhackx-advanced-pages.admin.pages.published`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.published%22)

> Published

```diff
+已发布
```

#### [`tryhackx-advanced-pages.admin.pages.restricted`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.restricted%22)

> Login Required

```diff
+受限
```

#### [`tryhackx-advanced-pages.admin.pages.slug_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.slug_column%22)

> URL

```diff
+别名
```

#### [`tryhackx-advanced-pages.admin.pages.status_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.status_column%22)

> Status

```diff
+状态
```

#### [`tryhackx-advanced-pages.admin.pages.title_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.title_column%22)

> Title

```diff
+标题
```

#### [`tryhackx-advanced-pages.admin.pages.type_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.type_column%22)

> Type

```diff
+类型
```

#### [`tryhackx-advanced-pages.admin.permissions.manage_pages_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.permissions.manage_pages_label%22)

> Manage Advanced Pages

```diff
+管理高级页面
```

#### [`tryhackx-advanced-pages.admin.permissions.view_spoilers_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.permissions.view_spoilers_label%22)

> View spoiler content

```diff
+查看剧透内容
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_center`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_center%22)

> \[center\] — Center text

```diff
+[center] 居中
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_help%22)

> Enable or disable custom BBCode tags for page rendering. Changes require clearing the formatter cache (php flarum cache:clear).

```diff
+启用或禁用页面渲染中的自定义 BBCode 标签。修改后需要清除格式化器缓存（执行命令：php flarum cache:clear）。
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_spoiler`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_spoiler%22)

> \[spoiler\] — Spoiler/Details

```diff
+[spoiler] — 剧透 / 可折叠详情
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_table`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_table%22)

> \[table\] \[tr\] \[th\] \[td\] — Tables

```diff
+[table] [tr] [th] [td] — 用于创建表格的 BBCode 标签
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_url`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_url%22)

> \[url\] — Extended URL parser (accepts URLs rejected by Flarum)

```diff
+[url] — 增强链接解析（支持 Flarum 默认不支持的部分网址格式）
```

#### [`tryhackx-advanced-pages.admin.settings.forum_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.forum_help%22)

> Override how spoilers are displayed in regular forum posts. Requires clearing the formatter cache (php flarum cache:clear).

```diff
+覆盖常规论坛帖子中剧透的显示方式。需要清除格式化程序缓存（php-flarum-cache:clear）。
```

#### [`tryhackx-advanced-pages.admin.settings.forum_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.forum_title%22)

> Forum Integration

```diff
+论坛整合
```

#### [`tryhackx-advanced-pages.admin.settings.replace_forum_spoiler`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.replace_forum_spoiler%22)

> Replace Flarum's default spoiler with Advanced Pages spoiler style (details/summary)

```diff
+将Flarum的默认扰流板替换为高级页面扰流板样式（详细信息/摘要）
```

#### [`tryhackx-advanced-pages.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.title%22)

> BBCode Settings

```diff
+高级页面设置
```

#### [`tryhackx-advanced-pages.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.button%22)

> Support Development

```diff
+获取支持
```

#### [`tryhackx-advanced-pages.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.copy%22)

> Copy address

```diff
+复制信息
```

#### [`tryhackx-advanced-pages.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+感谢使用高级页面插件！如有问题，请复制下方信息并联系支持。
```

#### [`tryhackx-advanced-pages.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.thanks%22)

> Thank you for your support!

```diff
+感谢您的支持！
```

#### [`tryhackx-advanced-pages.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.title%22)

> Support This Extension

```diff
+支持与帮助
```

#### [`tryhackx-advanced-pages.forum.page.loading`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.loading%22)

> Loading...

```diff
+加载中...
```

#### [`tryhackx-advanced-pages.forum.page.not_found_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.not_found_message%22)

> The page you are looking for does not exist or you do not have permission to view it.

```diff
+您访问的页面未找到。
```

#### [`tryhackx-advanced-pages.forum.page.not_found_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.not_found_title%22)

> Page Not Found

```diff
+页面不存在
```


### `walsgit-recycle-bin` (missing)

#### [`walsgit-recycle-bin.admin.author`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.author%22)

> Author

```diff
+作者
```

#### [`walsgit-recycle-bin.admin.bulk_post_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_actions%22)

> Actions for selected posts : 

```diff
+已选回复操作： 
```

#### [`walsgit-recycle-bin.admin.bulk_post_delete_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_delete_label%22)

> Delete selected posts

```diff
+删除所选回复
```

#### [`walsgit-recycle-bin.admin.bulk_post_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_restore_label%22)

> Restore selected posts

```diff
+还原所选回复
```

#### [`walsgit-recycle-bin.admin.delete_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this post (irreversible):

```diff
+确定要<u>永久删除</u>此回复吗？（操作不可逆）：
```

#### [`walsgit-recycle-bin.admin.delete_post.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.delete_button%22)

> Forever delete this post

```diff
+永久删除此回复
```

#### [`walsgit-recycle-bin.admin.delete_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.success%22)

> Successfully deleted the post

```diff
+已永久删除回复
```

#### [`walsgit-recycle-bin.admin.delete_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.title%22)

> Delete forever

```diff
+永久删除
```

#### [`walsgit-recycle-bin.admin.delete_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post_tooltip%22)

> Delete post #{postId}

```diff
+删除回复
```

#### [`walsgit-recycle-bin.admin.discussions_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussions_bin%22)

> Discussions Bin

```diff
+讨论回收站
```

#### [`walsgit-recycle-bin.admin.grid.invalid_column_content`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.grid.invalid_column_content%22)

> Invalid content!

```diff
+内容无效！
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.submit_button%22)

> Forever delete these posts

```diff
+永久删除回复
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.success%22)

> Successfully deleted the selected posts

```diff
+已永久删除所选回复
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.text_end%22)

>  selected posts?

```diff
+ 个已选择的回复吗？
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.text_start%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; these 

```diff
+确定要<u>永久删除</u>这 
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.title%22)

> Forever delete these posts

```diff
+永久删除回复
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.submit_button%22)

> Restore these posts

```diff
+还原回复
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.success%22)

> Successfully restored the selected posts

```diff
+已成功还原所选回复
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.text_end%22)

>  selected posts?

```diff
+ 个已选择的回复吗？
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.text_start%22)

> Are you sure you want to restore these 

```diff
+确定要还原这 
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.title%22)

> Restore the selected posts

```diff
+还原所选回复
```

#### [`walsgit-recycle-bin.admin.post.id`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.id%22)

> ID

```diff
+ID
```

#### [`walsgit-recycle-bin.admin.post.open_post`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.open_post%22)

> Open post

```diff
+查看回复
```

#### [`walsgit-recycle-bin.admin.post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.title%22)

> Post text

```diff
+回复内容
```

#### [`walsgit-recycle-bin.admin.posts_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.posts_bin%22)

> Posts Bin

```diff
+回复回收站
```

#### [`walsgit-recycle-bin.admin.restore_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.confirmation%22)

> Are you sure you want to restore this post from the discussion 

```diff
+确定要还原此回复吗？所属讨论： 
```

#### [`walsgit-recycle-bin.admin.restore_post.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.restore_button%22)

> Restore this post

```diff
+还原此回复
```

#### [`walsgit-recycle-bin.admin.restore_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.success%22)

> Successfully restored the post

```diff
+已成功还原回复
```

#### [`walsgit-recycle-bin.admin.restore_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.title%22)

> Restore post

```diff
+还原回复
```

#### [`walsgit-recycle-bin.admin.restore_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post_tooltip%22)

> Restore post #{postId}

```diff
+还原回复
```

#### [`walsgit-recycle-bin.admin.search_post_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_help_text%22)

> Searches for words in the hidden posts

```diff
+在已隐藏的回复中搜索关键词
```

#### [`walsgit-recycle-bin.admin.search_post_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_placeholder%22)

> Search for a post

```diff
+搜索回复内容
```

#### [`walsgit-recycle-bin.admin.total_hidden_posts`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_posts%22)

> Total hidden posts

```diff
+已隐藏回复总数
```


### `yippy-tag-with-themes` (missing)

#### [`yippy-tag-with-themes.admin.designs.data.opacity_background`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.opacity_background%22)

> Background Opacity Level

```diff
+背景透明度
```

#### [`yippy-tag-with-themes.admin.designs.data.opacity_footer`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.opacity_footer%22)

> Footer Opacity Level

```diff
+页脚透明度
```

#### [`yippy-tag-with-themes.admin.designs.data.opacity_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.opacity_outline%22)

> Outline Opacity Level

```diff
+轮廓透明度
```

#### [`yippy-tag-with-themes.admin.designs.is_enabled.disabled`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.is_enabled.disabled%22)

> Disabled

```diff
+禁用
```

#### [`yippy-tag-with-themes.admin.designs.is_enabled.enabled`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.is_enabled.enabled%22)

> Enable

```diff
+启用
```

#### [`yippy-tag-with-themes.admin.helps.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.display_themes%22)

> Only allow themes for specific groups

```diff
+仅允许特定用户组使用主题样式
```

#### [`yippy-tag-with-themes.admin.labels.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.display_themes%22)

> Enable Tag for Themes Permission

```diff
+启用标签主题权限
```

#### [`yippy-tag-with-themes.admin.options.design_options.none`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.none%22)

> None

```diff
+无
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat%22)

> Rounded Flat

```diff
+圆角扁平化
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_banner%22)

> Rounded Flat (Primary Banner)

```diff
+圆角扁平化（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border%22)

> Rounded Flat Border

```diff
+圆角扁平化边框
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_banner%22)

> Rounded Flat Border (Primary Banner)

```diff
+圆角扁平化边框（主横幅样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tab%22)

> Rounded Flat Border (Primary Tab)

```diff
+圆角扁平化边框（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tag%22)

> Rounded Flat Border (Primary Tag)

```diff
+圆角扁平化边框（主标签样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_tab%22)

> Rounded Flat (Primary Tab)

```diff
+圆角扁平化（主选项卡样式）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_tag%22)

> Rounded Flat (Primary Tag)

```diff
+圆角扁平化（主标签样式）
```

<!-- {% endraw %} -->
