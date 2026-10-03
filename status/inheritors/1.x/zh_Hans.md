# Chinese (Simplified) inherited translations differences

Translations for Chinese (Simplified) (`zh_Hans`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **1310** are translated differently and **698** are
translated only in `zh_Hans`. Altogether they cover **67** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [1](#core) | 0 |
| `ekumanov-inline-audio` | [1](#ekumanov-inline-audio) | 0 |
| `fof-oauth` | [1](#fof-oauth) | [2](#fof-oauth-missing) |
| `fof-polls` | [3](#fof-polls) | 0 |
| `forumaker-magicbb` | [13](#forumaker-magicbb) | [19](#forumaker-magicbb-missing) |
| `forumaker-magicread` | [4](#forumaker-magicread) | [13](#forumaker-magicread-missing) |
| `forumaker-magicslider` | 0 | [27](#forumaker-magicslider-missing) |
| `forumfortress-flarum` | 0 | [74](#forumfortress-flarum-missing) |
| `glowingblue-author-filter` | [4](#glowingblue-author-filter) | 0 |
| `glowingblue-password-strength` | [5](#glowingblue-password-strength) | 0 |
| `huseyinfiliz-awards` | [153](#huseyinfiliz-awards) | 0 |
| `huseyinfiliz-diff` | [40](#huseyinfiliz-diff) | 0 |
| `huseyinfiliz-language-detection` | 0 | [81](#huseyinfiliz-language-detection-missing) |
| `huseyinfiliz-leaderboard` | [57](#huseyinfiliz-leaderboard) | 0 |
| `huseyinfiliz-modern-footer` | [19](#huseyinfiliz-modern-footer) | 0 |
| `huseyinfiliz-notificationhub` | [29](#huseyinfiliz-notificationhub) | [3](#huseyinfiliz-notificationhub-missing) |
| `huseyinfiliz-sticky-title` | [15](#huseyinfiliz-sticky-title) | [5](#huseyinfiliz-sticky-title-missing) |
| `ianm-boring-avatars` | [13](#ianm-boring-avatars) | 0 |
| `ianm-follow-users` | [28](#ianm-follow-users) | 0 |
| `ianm-html-head` | [1](#ianm-html-head) | 0 |
| `ianm-log-viewer` | [11](#ianm-log-viewer) | 0 |
| `ianm-oauth-reddit` | [2](#ianm-oauth-reddit) | 0 |
| `ianm-online-guests` | [3](#ianm-online-guests) | 0 |
| `ianm-syndication` | [26](#ianm-syndication) | 0 |
| `ianm-twofactor` | [60](#ianm-twofactor) | 0 |
| `jslirola-login2seeplus` | [7](#jslirola-login2seeplus) | 0 |
| `linkrobins-birdseye` | [1](#linkrobins-birdseye) | 0 |
| `linkrobins-chirp` | 0 | [1](#linkrobins-chirp-missing) |
| `maicol07-sso` | [18](#maicol07-sso) | [1](#maicol07-sso-missing) |
| `michaelbelgium-ai-autoreply` | [20](#michaelbelgium-ai-autoreply) | 0 |
| `michaelbelgium-discussion-views` | [21](#michaelbelgium-discussion-views) | 0 |
| `michaelbelgium-mybb-to-flarum` | [7](#michaelbelgium-mybb-to-flarum) | 0 |
| `michaelbelgium-profile-views` | [5](#michaelbelgium-profile-views) | 0 |
| `migratetoflarum-fake-data` | [15](#migratetoflarum-fake-data) | 0 |
| `peopleinside-antiflood` | 0 | [18](#peopleinside-antiflood-missing) |
| `peopleinside-fla-powcaptcha` | 0 | [17](#peopleinside-fla-powcaptcha-missing) |
| `pianotell-flamoji` | [35](#pianotell-flamoji) | [25](#pianotell-flamoji-missing) |
| `quasimo-llms-txt` | [16](#quasimo-llms-txt) | 0 |
| `ralkage-account-lockout` | [20](#ralkage-account-lockout) | [1](#ralkage-account-lockout-missing) |
| `ralkage-ad-management` | [114](#ralkage-ad-management) | 0 |
| `ralkage-cap-captcha` | [10](#ralkage-cap-captcha) | 0 |
| `ralkage-civility-filter` | [82](#ralkage-civility-filter) | 0 |
| `ralkage-hcaptcha` | [6](#ralkage-hcaptcha) | 0 |
| `ralkage-linked-accounts` | [25](#ralkage-linked-accounts) | 0 |
| `ralkage-profile-messages` | [31](#ralkage-profile-messages) | [1](#ralkage-profile-messages-missing) |
| `ralkage-word-censor` | [5](#ralkage-word-censor) | 0 |
| `ralkage-word-counter` | [1](#ralkage-word-counter) | 0 |
| `resofire-blog-cards` | [11](#resofire-blog-cards) | 0 |
| `resofire-digest-mail` | [51](#resofire-digest-mail) | 0 |
| `resofire-menu-control` | [13](#resofire-menu-control) | 0 |
| `rob006-last-post-avatar` | [7](#rob006-last-post-avatar) | 0 |
| `sycho-advanced-extension-categories` | [7](#sycho-advanced-extension-categories) | 0 |
| `sycho-github-milestone` | [6](#sycho-github-milestone) | 0 |
| `sycho-private-facade` | [13](#sycho-private-facade) | 0 |
| `sycho-profile-cover` | [9](#sycho-profile-cover) | 0 |
| `tapao-auto-ai-moderation` | 0 | [28](#tapao-auto-ai-moderation-missing) |
| `tapao-custom-landing-page` | 0 | [4](#tapao-custom-landing-page-missing) |
| `tapao-line-notification` | 0 | [47](#tapao-line-notification-missing) |
| `tryhackx-advanced-pages` | [36](#tryhackx-advanced-pages) | 0 |
| `tryhackx-homepage-blocks` | 0 | [85](#tryhackx-homepage-blocks-missing) |
| `tryhackx-magnet-link` | 0 | [74](#tryhackx-magnet-link-missing) |
| `tryhackx-thumb-sliders` | 0 | [30](#tryhackx-thumb-sliders-missing) |
| `tryhackx-topic-rating` | 0 | [29](#tryhackx-topic-rating-missing) |
| `walsgit-discussion-cards` | [60](#walsgit-discussion-cards) | [112](#walsgit-discussion-cards-missing) |
| `walsgit-recycle-bin` | [60](#walsgit-recycle-bin) | [1](#walsgit-recycle-bin-missing) |
| `yippy-auth-ldap` | [51](#yippy-auth-ldap) | 0 |
| `yippy-tag-with-themes` | [58](#yippy-tag-with-themes) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `zh_Hans` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.extension.info_links.discuss`](https://weblate.rob006.net/translate/flarum2/core/zh_Hans/?q=context%3A%3D%22core.admin.extension.info_links.discuss%22)

> Discuss

```diff
-主题帖
+英文社区
```


### `ekumanov-inline-audio`

#### [`ekumanov-inline-audio.forum.bbcode_description`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/zh_Hans/?q=context%3A%3D%22ekumanov-inline-audio.forum.bbcode_description%22)

> Embed an audio player: \[player\]URL\[/player\]

```diff
-嵌入一个音频播放器：[player]URL[/player]
+嵌入音频播放器：[player]链接地址[/player]
```


### `fof-oauth`

#### [`fof-oauth.admin.settings.update_email_from_provider_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/zh_Hans/?q=context%3A%3D%22fof-oauth.admin.settings.update_email_from_provider_help%22)

> If enabled, logging in with an OAuth provider whose verified email differs from the user's forum email sends a confirmation link to the new address, and a notice to the current one. The email changes once the link is followed. Providers that cannot confirm the address is verified, including third-party providers that have not been updated to support it, will not change the email address.

```diff
-开启后，每次登录论坛时，用户的邮箱地址都会更新为 OAuth 服务提供的邮箱。部分服务不会返回最新邮箱地址，此时该设置不会生效。
+开启后，如果用户通过 OAuth 服务登录时，该服务已验证的邮箱地址与论坛账号当前邮箱不同，系统会向新邮箱发送确认链接，并向当前邮箱发送通知。用户点击确认链接后，才会变更邮箱地址。对于无法确认邮箱地址已验证的服务，包括尚不支持此功能的第三方登录服务，系统不会更改邮箱地址。
```

<del>开启后，每次登录论坛时，用户的邮箱地址都会更新为</del><ins>开启后，如果用户通过</ins> OAuth <del>服务提供的邮箱。部分服务不会返回最新邮箱地址，此时该设置不会生效。</del><ins>服务登录时，该服务已验证的邮箱地址与论坛账号当前邮箱不同，系统会向新邮箱发送确认链接，并向当前邮箱发送通知。用户点击确认链接后，才会变更邮箱地址。对于无法确认邮箱地址已验证的服务，包括尚不支持此功能的第三方登录服务，系统不会更改邮箱地址。</ins>


### `fof-polls`

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
-{count, plural, other {有 # 个选项为空，请填写或删除。}}
+有 {count} 个选项为空，请填写或删除。
```

#### [`fof-polls.forum.poll.total_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.poll.total_votes%22)

> {count, plural, one {# vote was given} other {# votes were given}}

```diff
-{count, plural, other {共 # 票}}
+共 {count} 票
```

#### [`fof-polls.forum.tooltip.votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/zh_Hans/?q=context%3A%3D%22fof-polls.forum.tooltip.votes%22)

> {count, plural, one {# vote} other {# votes}}

```diff
-{count, plural, other {# 票}}
+{count} 票
```


### `forumaker-magicbb`

#### [`forumaker-magicbb.admin.sections.features`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.sections.features%22)

> Features

```diff
-功能
+其他功能
```

#### [`forumaker-magicbb.admin.settings.bb_color`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_color%22)

> Color

```diff
-颜色
+文字颜色
```

#### [`forumaker-magicbb.admin.settings.bb_iframe_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe_help%22)

> Allows embedding iframes from any source. Use with caution — embedded content may include external scripts. 🧹 After changing this setting, please clear the Flarum cache

```diff
-允许嵌入来自任何来源的 iframe。请谨慎使用——嵌入内容可能包含外部脚本。🧹 修改此设置后请清除 Flarum 缓存
+允许嵌入任意来源的 iframe。请谨慎使用，嵌入的内容可能包含外部脚本。🧹 更改此设置后，请清除 Flarum 缓存
```

<del>允许嵌入来自任何来源的</del><ins>允许嵌入任意来源的</ins> <del>iframe。请谨慎使用——嵌入内容可能包含外部脚本。🧹</del><ins>iframe。请谨慎使用，嵌入的内容可能包含外部脚本。🧹</ins> <del>修改此设置后请清除</del><ins>更改此设置后，请清除</ins> Flarum 缓存

#### [`forumaker-magicbb.admin.settings.bb_image`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image%22)

> Image alignment

```diff
-FoF 上传
+图片对齐
```

#### [`forumaker-magicbb.admin.settings.bb_image_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image_help%22)

> Wraps images and other inline media in an alignment container. Centered media is scaled to 60% of the post width, side-aligned — up to 40%

```diff
-居中显示的大图片会自动调整为帖子宽度的 60%，侧边对齐的图片最大为帖子宽度的 40%
+将图片和其他行内媒体放入对齐容器中。居中显示时，媒体宽度缩放至帖子宽度的 60%；靠左或靠右显示时，最大为 40%
```

<del>居中显示的大图片会自动调整为帖子宽度的</del><ins>将图片和其他行内媒体放入对齐容器中。居中显示时，媒体宽度缩放至帖子宽度的</ins> <del>60%，侧边对齐的图片最大为帖子宽度的</del><ins>60%；靠左或靠右显示时，最大为</ins> 40%

#### [`forumaker-magicbb.admin.settings.toolbar_group`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.toolbar_group%22)

> Group MagicBB buttons

```diff
-合并 MagicBB 按钮
+收起 MagicBB 按钮
```

<del>合并</del><ins>收起</ins> MagicBB 按钮

#### [`forumaker-magicbb.admin.settings.toolbar_group_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.toolbar_group_help%22)

> If enabled, all MagicBB buttons will be grouped into a single one in the composer

```diff
-启用后，所有 MagicBB 按钮将在编辑器中合并为一个按钮
+启用后，编辑器中的所有 MagicBB 按钮都会收进一个按钮中
```

<del>启用后，所有</del><ins>启用后，编辑器中的所有</ins> MagicBB <del>按钮将在编辑器中合并为一个按钮</del><ins>按钮都会收进一个按钮中</ins>

#### [`forumaker-magicbb.forum.composer.audio_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.audio_button%22)

> Add audio

```diff
-添加音频
+音频
```

#### [`forumaker-magicbb.forum.composer.color_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.color_button%22)

> Add color

```diff
-添加颜色
+文字颜色
```

#### [`forumaker-magicbb.forum.composer.image_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.image_button%22)

> Align image

```diff
-添加智能图片
+图片对齐
```

#### [`forumaker-magicbb.forum.composer.info_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.info_button%22)

> Add alert

```diff
-添加提示框
+提示框
```

#### [`forumaker-magicbb.forum.composer.spoiler_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.spoiler_button%22)

> Add spoiler

```diff
-添加剧透
+剧透
```

#### [`forumaker-magicbb.forum.composer.table_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.table_button%22)

> Add table

```diff
-插入表格
+表格
```


### `forumaker-magicread`

#### [`forumaker-magicread.admin.settings.enable_counter`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_counter%22)

> Live character counter in composer

```diff
-编辑器中实时字符计数器
+编辑器实时统计字符数
```

#### [`forumaker-magicread.admin.settings.enable_pagination`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_pagination%22)

> Add page navigation below the scroll bar

```diff
-讨论区内分页功能
+时间轴添加分页导航
```

#### [`forumaker-magicread.admin.settings.enable_readmore`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore%22)

> Read more preview on profile page

```diff
-在个人资料页启用“阅读更多”预览
+个人资料页折叠长帖
```

#### [`forumaker-magicread.forum.counter.label`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.counter.label%22)

> Characters

```diff
-字符
+字符数
```


### `glowingblue-author-filter`

#### [`glowingblue-author-filter.admin.settings.intro`](https://weblate.rob006.net/translate/flarum2/glowingblue-author-filter/zh_Hans/?q=context%3A%3D%22glowingblue-author-filter.admin.settings.intro%22)

> Users without the permission &lt;code&gt;Search users&lt;/code&gt; will not see the search box. Set to &lt;code&gt;Everyone&lt;/code&gt; for all users, or whatever your preference level is.

```diff
-没有<code>搜索用户</code>权限的用户将无法看到搜索框。
+没有 <code>搜索用户</code> 权限的用户将看不到搜索框。若要向所有用户开放，请将该权限设为 <code>所有人</code>，也可以按需设置为其他权限级别。
```

#### [`glowingblue-author-filter.admin.settings.result_count`](https://weblate.rob006.net/translate/flarum2/glowingblue-author-filter/zh_Hans/?q=context%3A%3D%22glowingblue-author-filter.admin.settings.result_count%22)

> Max results in dropdown autocomplete

```diff
-最大搜索建议数
+最大搜索建议结果数
```

#### [`glowingblue-author-filter.forum.index_page.filter_user.no_results`](https://weblate.rob006.net/translate/flarum2/glowingblue-author-filter/zh_Hans/?q=context%3A%3D%22glowingblue-author-filter.forum.index_page.filter_user.no_results%22)

> No results

```diff
-未找到任何内容
+没有结果
```

#### [`glowingblue-author-filter.forum.index_page.filter_user.search_label`](https://weblate.rob006.net/translate/flarum2/glowingblue-author-filter/zh_Hans/?q=context%3A%3D%22glowingblue-author-filter.forum.index_page.filter_user.search_label%22)

> Search users...

```diff
-搜索中……
+搜索中…
```


### `glowingblue-password-strength`

#### [`glowingblue-password-strength.admin.settings.enableInputBorderColor`](https://weblate.rob006.net/translate/flarum2/glowingblue-password-strength/zh_Hans/?q=context%3A%3D%22glowingblue-password-strength.admin.settings.enableInputBorderColor%22)

> Change input's border color with password strength score

```diff
-让密码框的边框颜色跟随强度颜色变化
+密码边框跟随密码强度颜色
```

#### [`glowingblue-password-strength.admin.settings.enableInputColor`](https://weblate.rob006.net/translate/flarum2/glowingblue-password-strength/zh_Hans/?q=context%3A%3D%22glowingblue-password-strength.admin.settings.enableInputColor%22)

> Change input's foreground color with password strength score

```diff
-让密码框文字颜色跟随强度颜色变化
+密码文本色跟随密码强度颜色
```

#### [`glowingblue-password-strength.admin.settings.enablePasswordToggle`](https://weblate.rob006.net/translate/flarum2/glowingblue-password-strength/zh_Hans/?q=context%3A%3D%22glowingblue-password-strength.admin.settings.enablePasswordToggle%22)

> Enable password visibility toggle for both Sign Up and Log In modals

```diff
-开启显示密码功能
+启用密码显示
```

#### [`glowingblue-password-strength.admin.settings.otherOptions`](https://weblate.rob006.net/translate/flarum2/glowingblue-password-strength/zh_Hans/?q=context%3A%3D%22glowingblue-password-strength.admin.settings.otherOptions%22)

> Other Options

```diff
-其它选项
+其他设置
```

#### [`glowingblue-password-strength.forum.strengthLabels.medium`](https://weblate.rob006.net/translate/flarum2/glowingblue-password-strength/zh_Hans/?q=context%3A%3D%22glowingblue-password-strength.forum.strengthLabels.medium%22)

> Could be stronger

```diff
-还可以再强一点
+有待加强
```


### `huseyinfiliz-awards`

#### [`huseyinfiliz-awards.admin.awards.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.categories%22)

> Categories

```diff
-板块
+类别
```

#### [`huseyinfiliz-awards.admin.awards.create`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.create%22)

> Create Award

```diff
-创建奖励
+创建评选
```

#### [`huseyinfiliz-awards.admin.awards.create_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.create_title%22)

> Create New Award

```diff
-创建新的奖励
+创建新评选
```

#### [`huseyinfiliz-awards.admin.awards.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.delete_confirm%22)

> Are you sure you want to delete this award?

```diff
-你确定你想要删除这个奖励吗？
+确定要删除此评选吗？
```

#### [`huseyinfiliz-awards.admin.awards.edit_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.edit_title%22)

> Edit Award

```diff
-编辑奖励
+编辑评选
```

#### [`huseyinfiliz-awards.admin.awards.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.empty%22)

> No awards created yet.

```diff
-没有创建任何奖励。
+暂无评选
```

#### [`huseyinfiliz-awards.admin.awards.ends_at`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.ends_at%22)

> Voting Ends

```diff
-投票结束
+投票结束时间
```

#### [`huseyinfiliz-awards.admin.awards.image_url`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.image_url%22)

> Cover Image URL

```diff
-封面图片URL
+封面图 URL
```

#### [`huseyinfiliz-awards.admin.awards.image_url_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.image_url_help%22)

> Cover image displayed in the hero section. Upload or paste URL.

```diff
-封面图片显示在主页顶部区域。您可以上传图片或粘贴图片URL。
+封面图显示在页面顶部，可上传图片或粘贴 URL。
```

#### [`huseyinfiliz-awards.admin.awards.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.name%22)

> Award Name

```diff
-奖励名称
+评选名称
```

#### [`huseyinfiliz-awards.admin.awards.publish`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.publish%22)

> Publish Results

```diff
-发布结果
+公布结果
```

#### [`huseyinfiliz-awards.admin.awards.publish_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.publish_confirm%22)

> Are you sure you want to publish results? All voters will be notified.

```diff
-你确定你想要发布结果吗？所有投票者都将收到通知。
+确定要公布结果吗？所有投票用户都会收到通知。
```

#### [`huseyinfiliz-awards.admin.awards.show_live_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.show_live_votes%22)

> Show Live Vote Counts

```diff
-显示实时投票计数
+实时显示票数
```

#### [`huseyinfiliz-awards.admin.awards.show_live_votes_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.show_live_votes_help%22)

> Display vote counts while voting is active

```diff
-在投票进行期间显示投票计数
+投票期间显示各候选的实时票数
```

#### [`huseyinfiliz-awards.admin.awards.starts_at`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.starts_at%22)

> Voting Starts

```diff
-投票开始
+投票开始时间
```

#### [`huseyinfiliz-awards.admin.awards.status_active`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status_active%22)

> Active

```diff
-活跃度
+进行中
```

#### [`huseyinfiliz-awards.admin.awards.status_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status_published%22)

> Published

```diff
-已发布
+已公布
```

#### [`huseyinfiliz-awards.admin.awards.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.title%22)

> Manage Awards

```diff
-管理奖励
+管理评选
```

#### [`huseyinfiliz-awards.admin.awards.year`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.year%22)

> Year

```diff
-年
+年份
```

#### [`huseyinfiliz-awards.admin.categories.allow_other`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.allow_other%22)

> Allow User Suggestions

```diff
-允许用户提出建议
+允许用户推荐候选
```

#### [`huseyinfiliz-awards.admin.categories.allow_other_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.allow_other_help%22)

> Users can suggest nominees not in the list

```diff
-用户可以推荐列表中没有的候选人
+用户可以推荐列表中没有的候选项
```

#### [`huseyinfiliz-awards.admin.categories.create`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.create%22)

> Create Category

```diff
-创建板块
+创建类别
```

#### [`huseyinfiliz-awards.admin.categories.create_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.create_title%22)

> Create New Category

```diff
-创建新的板块
+创建新类别
```

#### [`huseyinfiliz-awards.admin.categories.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.delete_confirm%22)

> Are you sure you want to delete this category?

```diff
-你确定你想要删除这个类别吗？
+确定要删除此类别吗？
```

#### [`huseyinfiliz-awards.admin.categories.edit_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.edit_title%22)

> Edit Category

```diff
-编辑板块
+编辑类别
```

#### [`huseyinfiliz-awards.admin.categories.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.empty%22)

> No categories found.

```diff
-找不到这个板块。
+暂无类别
```

#### [`huseyinfiliz-awards.admin.categories.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.name%22)

> Category Name

```diff
-板块名称
+类别名称
```

#### [`huseyinfiliz-awards.admin.categories.nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.nominees%22)

> Nominees

```diff
-被提及的人
+候选
```

#### [`huseyinfiliz-awards.admin.categories.select_award`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.select_award%22)

> Select Award

```diff
-选择奖励
+选择评选
```

#### [`huseyinfiliz-awards.admin.categories.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.title%22)

> Manage Categories

```diff
-管理板块
+管理类别
```

#### [`huseyinfiliz-awards.admin.nav.description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nav.description%22)

> Manage community awards and voting

```diff
-管理社区奖项和投票
+管理社区评选和投票
```

#### [`huseyinfiliz-awards.admin.nav.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nav.title%22)

> Awards

```diff
-奖励
+评选
```

#### [`huseyinfiliz-awards.admin.nominees.adjust_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.adjust_votes%22)

> Adjust Votes

```diff
-调整投票
+调整票数
```

#### [`huseyinfiliz-awards.admin.nominees.adjustment`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.adjustment%22)

> Adjustment

```diff
-调整
+调整值
```

#### [`huseyinfiliz-awards.admin.nominees.adjustment_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.adjustment_help%22)

> Enter a positive or negative number to adjust the displayed vote count.

```diff
-输入正数或负数来调整显示的投票数。
+输入正数或负数，以调整对外显示的票数。
```

#### [`huseyinfiliz-awards.admin.nominees.create`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.create%22)

> Create Nominee

```diff
-创建被提及的人
+创建候选
```

#### [`huseyinfiliz-awards.admin.nominees.create_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.create_title%22)

> Create New Nominee

```diff
-创建新的被提及的人
+创建新候选
```

#### [`huseyinfiliz-awards.admin.nominees.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.delete_confirm%22)

> Are you sure you want to delete this nominee?

```diff
-你确定你想要删除这个被提及的人？
+确定要删除此候选吗？
```

#### [`huseyinfiliz-awards.admin.nominees.description_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.description_help%22)

> Short description shown below the name (optional)

```diff
-名称下方显示的简短描述（可选）
+显示在名称下方的简短介绍，可留空
```

#### [`huseyinfiliz-awards.admin.nominees.edit_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.edit_title%22)

> Edit Nominee

```diff
-编辑被提及的人
+编辑候选
```

#### [`huseyinfiliz-awards.admin.nominees.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.empty%22)

> No nominees found.

```diff
-找不到被提及的人。
+暂无候选
```

#### [`huseyinfiliz-awards.admin.nominees.image_url_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.image_url_help%22)

> URL to the nominee's image (e.g., game cover, person photo)

```diff
-被提名者的图片网址（例如，游戏封面、人物照片）
+候选图片的 URL，例如游戏封面或人物照片
```

#### [`huseyinfiliz-awards.admin.nominees.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.name%22)

> Nominee Name

```diff
-被提及的人的名称
+候选名称
```

#### [`huseyinfiliz-awards.admin.nominees.real_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.real_votes%22)

> Real Votes

```diff
-真实投票
+实际票数
```

#### [`huseyinfiliz-awards.admin.nominees.select_category`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.select_category%22)

> Select Category

```diff
-选择板块
+选择类别
```

#### [`huseyinfiliz-awards.admin.nominees.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.title%22)

> Manage Nominees

```diff
-管理被提及的人
+管理候选
```

#### [`huseyinfiliz-awards.admin.nominees.vote_adjustment_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.vote_adjustment_title%22)

> Vote Adjustment

```diff
-投票调整
+票数调整
```

#### [`huseyinfiliz-awards.admin.permissions.manage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.manage%22)

> Manage Awards

```diff
-管理奖励
+管理评选
```

#### [`huseyinfiliz-awards.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.view%22)

> View Awards

```diff
-查看奖励
+查看评选
```

#### [`huseyinfiliz-awards.admin.permissions.view_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.view_results%22)

> View Results Early

```diff
-提前查看结果
+提前查看评选结果
```

#### [`huseyinfiliz-awards.admin.permissions.vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.vote%22)

> Vote in Awards

```diff
-参与奖项投票
+参与评选投票
```

#### [`huseyinfiliz-awards.admin.settings.nav_icon`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_icon%22)

> Navigation Icon

```diff
-导航栏图标
+导航图标
```

#### [`huseyinfiliz-awards.admin.settings.nav_icon_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_icon_help%22)

> FontAwesome icon class (e.g., fas fa-trophy, fas fa-award, fas fa-star)

```diff
-来自FontAwesome的图标(例如，fas fa-trophy, fas fa-award, fas fa-star)
+FontAwesome 图标类名，例如 fas fa-trophy、fas fa-award、fas fa-star
```

<del>来自FontAwesome的图标(例如，fas</del><ins>FontAwesome</ins> <del>fa-trophy,</del><ins>图标类名，例如</ins> fas <del>fa-award,</del><ins>fa-trophy、fas</ins> <del>fas</del><ins>fa-award、fas</ins> <del>fa-star)</del><ins>fa-star</ins>

#### [`huseyinfiliz-awards.admin.settings.nav_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_title%22)

> Navigation Title

```diff
-导航栏标题
+导航标题
```

#### [`huseyinfiliz-awards.admin.settings.nav_title_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_title_help%22)

> Text shown in the sidebar navigation

```diff
-这些文字将被展现在侧边导航栏
+显示在侧边栏导航中的文字
```

#### [`huseyinfiliz-awards.admin.settings.votes_per_category`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.votes_per_category%22)

> Votes Per Category

```diff
-每个板块的投票数
+每个类别可投票数
```

#### [`huseyinfiliz-awards.admin.settings.votes_per_category_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.votes_per_category_help%22)

> 0 for unlimited, 1 for single vote (replace), &gt;1 for multiple votes.

```diff
-0表示不限制投票次数，1表示只能投一票（可替换），大于1表示可以投多票。
+0 表示不限票数，1 表示单选（重新投票会替换原选择），大于 1 表示可多选。
```

#### [`huseyinfiliz-awards.admin.suggestions.approve`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.approve%22)

> Approve

```diff
-批准
+通过
```

#### [`huseyinfiliz-awards.admin.suggestions.approve_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.approve_confirm%22)

> Create as new nominee? The user will automatically vote for it.

```diff
-创建为新的被提名的人？该用户将自动为其投票。
+要将其创建为新的候选吗？该用户会自动为其投票。
```

#### [`huseyinfiliz-awards.admin.suggestions.category`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.category%22)

> Category

```diff
-板块
+类别
```

#### [`huseyinfiliz-awards.admin.suggestions.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.empty%22)

> No pending suggestions

```diff
-没有待处理的建议
+暂无待审核推荐
```

#### [`huseyinfiliz-awards.admin.suggestions.merge_info`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.merge_info%22)

> Merge "{name}" into an existing nominee. The user's vote will count for that nominee.

```diff
-将“{name}”合并到现有候选人列表中。用户的投票将计入该候选人的票数。
+将「{name}」合并到现有候选，用户的投票将计入该候选。
```

#### [`huseyinfiliz-awards.admin.suggestions.merge_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.merge_title%22)

> Merge Suggestion

```diff
-合并建议
+合并推荐
```

#### [`huseyinfiliz-awards.admin.suggestions.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.name%22)

> Suggested Name

```diff
-建议名称
+推荐名称
```

#### [`huseyinfiliz-awards.admin.suggestions.no_nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.no_nominees%22)

> No nominees available in this category to merge into.

```diff
-此板块下没有可以被合并的被提及的人。
+此类别暂无可合并的候选
```

#### [`huseyinfiliz-awards.admin.suggestions.reject_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.reject_confirm%22)

> Reject this suggestion?

```diff
-拒绝这个建议？
+确定要拒绝此推荐吗？
```

#### [`huseyinfiliz-awards.admin.suggestions.select_nominee_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.select_nominee_label%22)

> Select Nominee

```diff
-选择被提及的人
+选择候选
```

#### [`huseyinfiliz-awards.admin.suggestions.select_nominee_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.select_nominee_placeholder%22)

> \-- Select a nominee --

```diff
--- 选择被提及的人 --
+选择候选
```

#### [`huseyinfiliz-awards.admin.suggestions.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.title%22)

> Pending Suggestions

```diff
-待处理的建议
+待审核推荐
```

#### [`huseyinfiliz-awards.admin.suggestions.user`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.user%22)

> Submitted By

```diff
-被提交由
+推荐人
```

#### [`huseyinfiliz-awards.admin.tabs.awards`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.awards%22)

> Awards

```diff
-奖励
+评选
```

#### [`huseyinfiliz-awards.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.categories%22)

> Categories

```diff
-板块
+类别
```

#### [`huseyinfiliz-awards.admin.tabs.nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.nominees%22)

> Nominees

```diff
-被提及者
+候选
```

#### [`huseyinfiliz-awards.admin.tabs.suggestions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.suggestions%22)

> Suggestions

```diff
-建议
+候选推荐
```

#### [`huseyinfiliz-awards.admin.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.admin.title%22)

> Awards Management

```diff
-奖励管理
+评选管理
```

#### [`huseyinfiliz-awards.forum.category.nominees_count`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.category.nominees_count%22)

> {count} nominees

```diff
-{count} 位被提名的人
+{count} 个候选
```

{count} <del>位被提名的人</del><ins>个候选</ins>

#### [`huseyinfiliz-awards.forum.empty.no_awards`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_awards%22)

> No Active Awards

```diff
-没有有效的奖励
+暂无进行中的评选
```

#### [`huseyinfiliz-awards.forum.empty.no_awards_description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_awards_description%22)

> There are no awards available at this time. Check back later!

```diff
-目前没有可领取的奖励。请稍后再来看看！
+目前没有可参与的评选，请过段时间再来
```

#### [`huseyinfiliz-awards.forum.empty.no_categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_categories%22)

> No categories in this award yet.

```diff
-此奖励目前还没有任何板块。
+此评选暂无类别
```

#### [`huseyinfiliz-awards.forum.empty.no_nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_nominees%22)

> No nominees in this category yet.

```diff
-该类别目前还没有提名人选。
+此类别暂无候选项
```

#### [`huseyinfiliz-awards.forum.error.cannot_delete_processed_suggestion`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.cannot_delete_processed_suggestion%22)

> Only pending suggestions can be cancelled.

```diff
-只有待处理的建议才能被取消。
+只能取消待审核的推荐
```

#### [`huseyinfiliz-awards.forum.error.not_available`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.not_available%22)

> This award is not available yet.

```diff
-该奖励目前尚未开放申请。
+此评选尚未开放
```

#### [`huseyinfiliz-awards.forum.error.other_not_allowed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.other_not_allowed%22)

> This category doesn't accept suggestions.

```diff
-此板块不接受建议。
+此类别不接受用户推荐
```

#### [`huseyinfiliz-awards.forum.error.rate_limit`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.rate_limit%22)

> Too many votes. Please wait a moment.

```diff
-投票人数过多，请稍后。
+投票过于频繁，请稍后再试
```

#### [`huseyinfiliz-awards.forum.error.vote_limit_reached`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.vote_limit_reached%22)

> You can only vote for {limit} nominees in this category.

```diff
-您在此板块中只能投票给 {limit} 位候选人。
+此类别最多可投 {limit} 个候选
```

<del>您在此板块中只能投票给</del><ins>此类别最多可投</ins> {limit} <del>位候选人。</del><ins>个候选</ins>

#### [`huseyinfiliz-awards.forum.error.vote_quota_exhausted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.vote_quota_exhausted%22)

> You have used all your available votes/suggestions for this category.

```diff
-您已耗尽此板块下的所有投票/建议次数。
+你已用完此类别的投票或推荐名额
```

#### [`huseyinfiliz-awards.forum.error.voting_closed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.voting_closed%22)

> Voting is closed.

```diff
-投票已结束。
+投票已关闭
```

#### [`huseyinfiliz-awards.forum.hero.countdown`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.countdown%22)

> Voting ends in: {days}d {hours}h {minutes}m {seconds}s

```diff
-投票结束时间：{days}天 {hours}小时 {minutes}分钟 {seconds}秒
+投票结束倒计时：{days}天 {hours}小时 {minutes}分 {seconds}秒
```

<del>投票结束时间：{days}天</del><ins>投票结束倒计时：{days}天</ins> {hours}小时 <del>{minutes}分钟</del><ins>{minutes}分</ins> {seconds}秒

#### [`huseyinfiliz-awards.forum.hero.results_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.results_published%22)

> Results Published

```diff
-结果已发布
+结果已公布
```

#### [`huseyinfiliz-awards.forum.my_votes.add_vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.add_vote%22)

> Add Vote

```diff
-添加投票
+继续投票
```

#### [`huseyinfiliz-awards.forum.my_votes.categories_remaining`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.categories_remaining%22)

> Categories Without Votes

```diff
-没有投票的类别
+尚未投票的类别
```

#### [`huseyinfiliz-awards.forum.my_votes.change`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.change%22)

> Change

```diff
-修改
+更改
```

#### [`huseyinfiliz-awards.forum.my_votes.last_vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.last_vote%22)

> Last vote: {time}

```diff
-上次投票时间：{time}
+上次投票：{time}
```

#### [`huseyinfiliz-awards.forum.my_votes.remove`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.remove%22)

> Remove

```diff
-移除
+取消
```

#### [`huseyinfiliz-awards.forum.my_votes.summary`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.summary%22)

> You voted in {voted}/{total} categories

```diff
-您已在 {voted}/{total} 个板块中进行了投票
+已为 {voted}/{total} 个类别投票
```

<del>您已在</del><ins>已为</ins> {voted}/{total} <del>个板块中进行了投票</del><ins>个类别投票</ins>

#### [`huseyinfiliz-awards.forum.my_votes.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.title%22)

> Your Votes

```diff
-你的投票
+我的投票
```

#### [`huseyinfiliz-awards.forum.my_votes.total_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.total_votes%22)

> {count} total votes

```diff
-总票数：{count}
+共 {count} 票
```

#### [`huseyinfiliz-awards.forum.my_votes.vote_now`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.vote_now%22)

> Vote Now

```diff
-现在投票
+立即投票
```

#### [`huseyinfiliz-awards.forum.my_votes.votes_unlimited`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.votes_unlimited%22)

> {count} votes

```diff
-{count} 票数
+已投 {count} 票
```

<ins>已投 </ins>{count} <del>票数</del><ins>票</ins>

#### [`huseyinfiliz-awards.forum.my_votes.votes_used`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.votes_used%22)

> {used}/{limit} votes used

```diff
-已使用票数：{used}/{limit}
+已用 {used}/{limit} 票
```

#### [`huseyinfiliz-awards.forum.nav.all_categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.nav.all_categories%22)

> All Categories

```diff
-所有板块
+全部类别
```

#### [`huseyinfiliz-awards.forum.nav.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.nav.categories%22)

> Categories

```diff
-板块
+类别
```

#### [`huseyinfiliz-awards.forum.nav.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.nav.title%22)

> Awards

```diff
-奖励
+评选
```

#### [`huseyinfiliz-awards.forum.notification.results_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.notification.results_published%22)

> Results for {awardName} have been published!

```diff
-{awardName}的评选结果已经公布！
+「{awardName}」的评选结果已公布
```

#### [`huseyinfiliz-awards.forum.other.already_submitted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.already_submitted%22)

> You already submitted a suggestion for this category.

```diff
-您已经为此板块提交过建议。
+你已经为此类别提交过推荐。
```

#### [`huseyinfiliz-awards.forum.other.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.cancel_confirm%22)

> Cancel this suggestion?

```diff
-取消这个建议？
+确定要取消此推荐吗？
```

#### [`huseyinfiliz-awards.forum.other.click_to_suggest`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.click_to_suggest%22)

> Click to suggest a nominee

```diff
-点击此处推荐候选人
+点击推荐候选
```

#### [`huseyinfiliz-awards.forum.other.my_suggestions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.my_suggestions%22)

> My Suggestions

```diff
-我的建议
+我的推荐
```

#### [`huseyinfiliz-awards.forum.other.no_remaining`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.no_remaining%22)

> No suggestion slots remaining

```diff
-没有剩余的建议次数了
+没有剩余推荐名额
```

#### [`huseyinfiliz-awards.forum.other.no_suggestions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.no_suggestions%22)

> You haven't submitted any suggestions yet.

```diff
-您还没有提交任何建议。
+你还没有提交过推荐。
```

#### [`huseyinfiliz-awards.forum.other.pending_count`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.pending_count%22)

> {count} pending suggestion(s)

```diff
-{count} 条待处理建议
+{count} 个待审核推荐
```

{count} <del>条待处理建议</del><ins>个待审核推荐</ins>

#### [`huseyinfiliz-awards.forum.other.placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.placeholder%22)

> Enter nominee name...

```diff
-输入要推荐的候选人的名字...
+输入候选名称…
```

#### [`huseyinfiliz-awards.forum.other.remaining`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.remaining%22)

> {count} suggestion(s) remaining

```diff
-还剩 {count} 条建议
+还可推荐 {count} 个候选
```

<del>还剩</del><ins>还可推荐</ins> {count} <del>条建议</del><ins>个候选</ins>

#### [`huseyinfiliz-awards.forum.other.status_approved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_approved%22)

> Approved

```diff
-已被认可
+已通过
```

#### [`huseyinfiliz-awards.forum.other.status_merged`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_merged%22)

> Merged

```diff
-被合并
+已合并
```

#### [`huseyinfiliz-awards.forum.other.status_pending`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_pending%22)

> Pending

```diff
-待办
+待审核
```

#### [`huseyinfiliz-awards.forum.other.status_rejected`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_rejected%22)

> Rejected

```diff
-被拒绝
+已拒绝
```

#### [`huseyinfiliz-awards.forum.other.submit`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.submit%22)

> Submit Suggestion

```diff
-提交建议
+提交推荐
```

#### [`huseyinfiliz-awards.forum.other.success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.success%22)

> Suggestion submitted! It will be reviewed by moderators.

```diff
-建议已提交！将由版主进行审核。
+推荐已提交，将由管理人员审核
```

#### [`huseyinfiliz-awards.forum.other.suggest`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.suggest%22)

> Suggest Other

```diff
-其他建议选项
+推荐其他候选
```

#### [`huseyinfiliz-awards.forum.page.previous_awards`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.previous_awards%22)

> Previous Year Awards

```diff
-往年奖励
+往届评选
```

#### [`huseyinfiliz-awards.forum.page.select_award`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.select_award%22)

> Select Award

```diff
-选择奖励
+选择评选
```

#### [`huseyinfiliz-awards.forum.page.voting_ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_ended%22)

> Voting ended {time}

```diff
-投票已经在{time}前结束
+投票已于 {time} 结束
```

#### [`huseyinfiliz-awards.forum.page.voting_ends`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_ends%22)

> Voting ends {time}

```diff
-投票将在{time}后结束
+投票将于 {time} 结束
```

#### [`huseyinfiliz-awards.forum.page.voting_starts`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_starts%22)

> Voting starts {time}

```diff
-投票在{time}后开始
+投票将于 {time} 开始
```

#### [`huseyinfiliz-awards.forum.prediction.correct`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.correct%22)

> Correct:

```diff
-正确的：
+正确：
```

#### [`huseyinfiliz-awards.forum.prediction.score`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.score%22)

> {correct}/{total} correct predictions!

```diff
-{correct}/{total} 个预测正确！
+{correct}/{total} 项预测正确
```

{correct}/{total} <del>个预测正确！</del><ins>项预测正确</ins>

#### [`huseyinfiliz-awards.forum.prediction.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.title%22)

> Your Prediction Score

```diff
-您的预测分数
+我的预测得分
```

#### [`huseyinfiliz-awards.forum.prediction.wrong`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.wrong%22)

> Wrong:

```diff
-错误的：
+错误：
```

#### [`huseyinfiliz-awards.forum.preview.admin_only`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.preview.admin_only%22)

> Preview mode - Only visible to authorized users

```diff
-预览模式 - 仅授权用户可见
+预览模式，仅授权用户可见
```

#### [`huseyinfiliz-awards.forum.progress.complete`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.complete%22)

> Complete!

```diff
-完成！
+完成
```

#### [`huseyinfiliz-awards.forum.progress.prev`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.prev%22)

> Prev

```diff
-上一页
+上一个
```

#### [`huseyinfiliz-awards.forum.progress.voted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.voted%22)

> {count}/{total} categories voted

```diff
-已投票类别数：{count}/{total}
+{count}/{total} 个类别已投票
```

#### [`huseyinfiliz-awards.forum.results.runner_up`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.runner_up%22)

> Runner Up

```diff
-亚军
+第二名
```

#### [`huseyinfiliz-awards.forum.results.view_all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.view_all%22)

> View All Results

```diff
-查看所有结果
+查看全部结果
```

#### [`huseyinfiliz-awards.forum.results.winner`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.winner%22)

> Winner

```diff
-获胜者
+第一名
```

#### [`huseyinfiliz-awards.forum.tabs.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.tabs.categories%22)

> Categories

```diff
-板块
+类别
```

#### [`huseyinfiliz-awards.forum.voting.change_vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.change_vote%22)

> Change Vote

```diff
-修改投票
+更改投票
```

#### [`huseyinfiliz-awards.forum.voting.ends_in_days`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ends_in_days%22)

> Voting ends in {days} days

```diff
-投票将于 {days} 天后结束
+{days} 天后结束投票
```

<del>投票将于 </del>{days} <del>天后结束</del><ins>天后结束投票</ins>

#### [`huseyinfiliz-awards.forum.voting.ends_in_hours`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ends_in_hours%22)

> Voting ends in {hours} hours

```diff
-投票将于 {hours} 小时后结束
+{hours} 小时后结束投票
```

<del>投票将于 </del>{hours} <del>小时后结束</del><ins>小时后结束投票</ins>

#### [`huseyinfiliz-awards.forum.voting.vote_removed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.vote_removed%22)

> Your vote has been removed.

```diff
-你的投票已被移除。
+投票已取消
```

#### [`huseyinfiliz-awards.forum.voting.vote_saved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.vote_saved%22)

> Your vote has been saved!

```diff
-你的投票已被保存!
+投票已保存
```

#### [`huseyinfiliz-awards.forum.voting.voted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.voted%22)

> Voted

```diff
-投票
+已投票
```

#### [`huseyinfiliz-awards.forum.voting.voting_closed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.voting_closed%22)

> Voting is closed

```diff
-投票被关闭
+投票已关闭
```

#### [`huseyinfiliz-awards.lib.actions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.actions%22)

> Actions

```diff
-行动
+操作
```

#### [`huseyinfiliz-awards.lib.move_down`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.move_down%22)

> Move Down

```diff
-向下移动
+下移
```

#### [`huseyinfiliz-awards.lib.move_up`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.move_up%22)

> Move Up

```diff
-向上移动
+上移
```

#### [`huseyinfiliz-awards.lib.save`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.save%22)

> Save Changes

```diff
-保存变更
+保存更改
```

#### [`huseyinfiliz-awards.lib.slug`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.slug%22)

> Slug

```diff
-固定链接
+URL 别名
```

#### [`huseyinfiliz-awards.lib.sort_order`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.sort_order%22)

> Order

```diff
-命令
+排序
```

#### [`huseyinfiliz-awards.lib.success_message`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.success_message%22)

> Changes saved successfully!

```diff
-变更已成功保存！
+更改已保存
```

#### [`huseyinfiliz-awards.lib.upload_error`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.upload_error%22)

> Failed to upload image

```diff
-上传图片失败
+图片上传失败
```

#### [`huseyinfiliz-awards.lib.votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/zh_Hans/?q=context%3A%3D%22huseyinfiliz-awards.lib.votes%22)

> Votes

```diff
-投票
+票数
```


### `huseyinfiliz-diff`

#### [`huseyinfiliz-diff.admin.permissions.rollbackEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.rollbackEditHistory%22)

> Rollback others edit history

```diff
-回滚他人的编辑历史
+恢复他人的历史编辑版本
```

#### [`huseyinfiliz-diff.admin.permissions.selfRollbackEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.selfRollbackEditHistory%22)

> Rollback own edit history

```diff
-回滚自己的编辑历史
+恢复自己的历史编辑版本
```

#### [`huseyinfiliz-diff.admin.settings.archiveInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveInfo%22)

> Keep in mind that you can disable both options and run &lt;code&gt;php flarum diff:archive&lt;/code&gt; command to archive old revisions manually.

```diff
-你也可以禁用以上两个选项，并手动运行 <code>php flarum diff:archive</code> 命令来归档旧修订。
+你可以同时关闭以上两个选项，并运行 <code>php flarum diff:archive</code> 手动归档旧版本。
```

<del>你也可以禁用以上两个选项，并手动运行</del><ins>你可以同时关闭以上两个选项，并运行</ins> &lt;code&gt;php flarum diff:archive&lt;/code&gt; <del>命令来归档旧修订。</del><ins>手动归档旧版本。</ins>

#### [`huseyinfiliz-diff.admin.settings.archiveOlds`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveOlds%22)

> Archive old revisions

```diff
-归档旧修订
+归档旧版本
```

#### [`huseyinfiliz-diff.admin.settings.archiveOldsInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveOldsInfo%22)

> If &lt;strong&gt;x ≥ A&lt;/strong&gt;, first &lt;strong&gt;y=mx+b&lt;/strong&gt; revisions for the post will be stored as merged &amp; compressed. The &lt;strong&gt;x&lt;/strong&gt; refers to post's revision count. Float values of &lt;strong&gt;y&lt;/strong&gt; will be rounded to the next lowest integer value.

```diff
-如果 <strong>x ≥ A</strong>，则该帖子的前 <strong>y=mx+b</strong> 个修订将被合并并压缩存储。<strong>x</strong> 表示帖子的修订数量。<strong>y</strong> 的浮点值将向下取整。
+当 <strong>x ≥ A</strong> 时，帖子的前 <strong>y=mx+b</strong> 个版本将合并并压缩存储。<strong>x</strong> 为帖子的版本数量，<strong>y</strong> 若为小数则向下取整。
```

<del>如果</del><ins>当</ins> &lt;strong&gt;x ≥ <del>A&lt;/strong&gt;，则该帖子的前</del><ins>A&lt;/strong&gt; 时，帖子的前</ins> &lt;strong&gt;y=mx+b&lt;/strong&gt; <del>个修订将被合并并压缩存储。&lt;strong&gt;x&lt;/strong&gt;</del><ins>个版本将合并并压缩存储。&lt;strong&gt;x&lt;/strong&gt;</ins> <del>表示帖子的修订数量。&lt;strong&gt;y&lt;/strong&gt;</del><ins>为帖子的版本数量，&lt;strong&gt;y&lt;/strong&gt;</ins> <del>的浮点值将向下取整。</del><ins>若为小数则向下取整。</ins>

#### [`huseyinfiliz-diff.admin.settings.charLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.charLevel%22)

> Char-level

```diff
-字符级
+按字符
```

#### [`huseyinfiliz-diff.admin.settings.detailLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.detailLevel%22)

> Detail Level

```diff
-差异细节级别
+差异粒度
```

#### [`huseyinfiliz-diff.admin.settings.lineLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.lineLevel%22)

> Line-level

```diff
-行级
+按行
```

#### [`huseyinfiliz-diff.admin.settings.mainPostOnly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mainPostOnly%22)

> Store main post's revisions only

```diff
-仅存储主帖的修订记录
+仅保存首帖的编辑历史
```

#### [`huseyinfiliz-diff.admin.settings.mergeThreshold`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mergeThreshold%22)

> Merge Threshold for the Combined Renderer

```diff
-合并渲染器的合并阈值
+合并视图的合并阈值
```

#### [`huseyinfiliz-diff.admin.settings.mergeThresholdHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mergeThresholdHelp%22)

> This determines whether a replace-type block should be merged or not depending on the content changed ratio, which values between 0 and 1.

```diff
-根据内容更改比例（0 到 1 之间）决定是否合并替换类型的差异块。
+根据内容变更比例判断是否合并「替换型」差异块，取值范围为 0 到 1。
```

#### [`huseyinfiliz-diff.admin.settings.neighborLinesHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.neighborLinesHelp%22)

> Specify the neighbor line count that you want to show.

```diff
-指定要显示的上下文行数量。
+设置差异内容前后要显示的行数。
```

#### [`huseyinfiliz-diff.admin.settings.noneLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.noneLevel%22)

> None-level

```diff
-无
+不细分
```

#### [`huseyinfiliz-diff.admin.settings.onlyUnsigned`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.onlyUnsigned%22)

> Only &lt;strong&gt;unsigned integers&lt;/strong&gt; are allowed!

```diff
-只允许 <strong>无符号整数</strong>！
+只能输入<strong>正整数</strong>
```

#### [`huseyinfiliz-diff.admin.settings.separateBlock`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.separateBlock%22)

> Show a separator between different diff hunks in HTML renderers

```diff
-在 HTML 渲染中为不同的差异块显示分隔符
+在 HTML 差异视图的不同变更片段之间显示分隔线
```

在 HTML <del>渲染中为不同的差异块显示分隔符</del><ins>差异视图的不同变更片段之间显示分隔线</ins>

#### [`huseyinfiliz-diff.admin.settings.textFormatting`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.textFormatting%22)

> Enable text formatting for previews

```diff
-为预览启用文本格式化
+预览时启用文本格式化
```

#### [`huseyinfiliz-diff.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.title%22)

> Diff Settings

```diff
-Diff 设置
+差异对比设置
```

#### [`huseyinfiliz-diff.admin.settings.useCrons`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.useCrons%22)

> Use crons to archive old revisions

```diff
-使用 Cron 归档旧修订
+使用计划任务归档旧版本
```

#### [`huseyinfiliz-diff.admin.settings.useCronsHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.useCronsHelp%22)

> You must add Cron entry to your server to make this option work. It'll work weekly on sundays at 02:00 AM. If you disable this option and enable above, all of the post's revisions will be scanned for archiving when the related post is revised.

```diff
-你需要在服务器上添加 Cron 任务才能启用此功能。该任务将在每周日凌晨 02:00 运行。如果禁用此选项但启用上面的归档选项，则每次帖子被编辑时都会扫描修订记录进行归档。
+需要在服务器上添加计划任务才能使用此功能。任务会在每周日 02:00 运行。若关闭此项但启用上方的「归档旧版本」，每次帖子被编辑时都会扫描所有版本并执行归档。
```

<del>你需要在服务器上添加 Cron 任务才能启用此功能。该任务将在每周日凌晨</del><ins>需要在服务器上添加计划任务才能使用此功能。任务会在每周日</ins> 02:00 <del>运行。如果禁用此选项但启用上面的归档选项，则每次帖子被编辑时都会扫描修订记录进行归档。</del><ins>运行。若关闭此项但启用上方的「归档旧版本」，每次帖子被编辑时都会扫描所有版本并执行归档。</ins>

#### [`huseyinfiliz-diff.admin.settings.usePoint`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.usePoint%22)

> Use &lt;strong&gt;point&lt;/strong&gt; as decimal seperator for float values.

```diff
-浮点数使用 <strong>点（.）</strong> 作为小数分隔符。
+浮点数请使用<strong>英文句点（.）</strong>作为小数点。
```

#### [`huseyinfiliz-diff.admin.settings.wordLevel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.wordLevel%22)

> Word-level

```diff
-词级
+按词
```

#### [`huseyinfiliz-diff.forum.confirmDelete`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.confirmDelete%22)

> Are you sure you want to delete this edit's contents from the history?

```diff
-确定要从历史记录中删除此次编辑内容吗？
+确定要从编辑历史中删除此次编辑的内容吗？
```

#### [`huseyinfiliz-diff.forum.confirmRollback`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.confirmRollback%22)

> Are you sure you want to change your current post?

```diff
-确定要将当前帖子回滚到该版本吗？
+确定要将当前帖子恢复到所选版本吗？
```

#### [`huseyinfiliz-diff.forum.createdInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.createdInfo%22)

> {username} created {ago}

```diff
-{username} 于 {ago} 创建
+{username} 创建于 {ago}
```

{username} <del>于</del><ins>创建于</ins> {ago}<del> 创建</del>

#### [`huseyinfiliz-diff.forum.deleteErrorMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deleteErrorMessage%22)

> Deletion of edit's contents failed.

```diff
-删除编辑内容失败。
+删除此次编辑的内容失败
```

#### [`huseyinfiliz-diff.forum.deleteSuccessMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.deleteSuccessMessage%22)

> Edit's contents were deleted.

```diff
-编辑内容已删除。
+此次编辑的内容已删除
```

#### [`huseyinfiliz-diff.forum.differences.sentence`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.sentence%22)

> You're viewing differences between {old} and {new}

```diff
-你正在查看 {old} 与 {new} 之间的差异
+正在查看 {old} 与 {new} 之间的差异
```

<del>你正在查看</del><ins>正在查看</ins> {old} 与 {new} 之间的差异

#### [`huseyinfiliz-diff.forum.emptyText`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.emptyText%22)

> No Revisions

```diff
-没有修订记录
+暂无编辑记录
```

#### [`huseyinfiliz-diff.forum.noDiff`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.noDiff%22)

> No differences found between these two contents.

```diff
-未发现这两个版本之间的差异。
+这两份内容没有差异
```

#### [`huseyinfiliz-diff.forum.previewMode.sentence`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.sentence%22)

> You're previewing {content}

```diff
-你正在预览 {content}
+正在预览{content}
```

#### [`huseyinfiliz-diff.forum.revisionInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.revisionInfo%22)

> Edited {revisionCount, plural, one {{revisionCount} time} other {{revisionCount} times}}, newest at the top

```diff
-已编辑 {revisionCount, plural, one {{revisionCount} 次} other {{revisionCount} 次}}，最新版本在顶部
+共编辑 {revisionCount} 次，最新记录在最上方
```

#### [`huseyinfiliz-diff.forum.revisions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.revisions%22)

> {revisionCount, plural, one {{revisionCount} revision} other {{revisionCount} revisions}}

```diff
-{revisionCount, plural, one {{revisionCount} 次修订} other {{revisionCount} 次修订}}
+{revisionCount} 次编辑
```

#### [`huseyinfiliz-diff.forum.rollbackButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackButton%22)

> Rollback to Revision {number}

```diff
-回滚到修订版本 {number}
+恢复至第 {number} 版
```

<del>回滚到修订版本</del><ins>恢复至第</ins> {number}<ins> 版</ins>

#### [`huseyinfiliz-diff.forum.rollbackErrorMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackErrorMessage%22)

> Reverting of changes failed.

```diff
-回滚失败。
+恢复版本失败
```

#### [`huseyinfiliz-diff.forum.rollbackSuccessMessage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackSuccessMessage%22)

> Your changes were reverted.

```diff
-你的更改已回滚。
+已恢复版本
```

#### [`huseyinfiliz-diff.forum.rollbackToOriginalButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.rollbackToOriginalButton%22)

> Rollback to Original

```diff
-回滚到原始内容
+恢复至原始版本
```

#### [`huseyinfiliz-diff.forum.tooltips.combined`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.combined%22)

> Combined

```diff
-合并显示
+合并对比
```

#### [`huseyinfiliz-diff.forum.tooltips.inline`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.inline%22)

> Line by Line

```diff
-逐行显示
+逐行对比
```

#### [`huseyinfiliz-diff.forum.tooltips.sideBySide`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.sideBySide%22)

> Side by Side

```diff
-并排显示
+并排对比
```

#### [`huseyinfiliz-diff.ref.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/zh_Hans/?q=context%3A%3D%22huseyinfiliz-diff.ref.revisionWithNumber%22)

> revision {number}

```diff
-修订版本 {number}
+第 {number} 版
```

<del>修订版本</del><ins>第</ins> {number}<ins> 版</ins>


### `huseyinfiliz-leaderboard`

#### [`huseyinfiliz-leaderboard.admin.modals.none_selected`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.none_selected%22)

> None selected

```diff
-未选择任何项
+未选择
```

#### [`huseyinfiliz-leaderboard.admin.modals.select_groups`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.select_groups%22)

> Select Groups

```diff
-选择群组
+选择用户组
```

#### [`huseyinfiliz-leaderboard.admin.settings.already_running`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.already_running%22)

> A recalculation is already in progress. Please wait for it to finish.

```diff
-重新计算已在进行中。请等待其完成。
+已有重新统计任务正在进行，请等待完成。
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_groups_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_groups_help%22)

> Users in selected groups will be excluded from the leaderboard.

```diff
-所选群组中的用户将被排除在排行榜之外。
+所选用户组中的用户不会出现在排行榜中。
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_groups_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_groups_label%22)

> Excluded Groups

```diff
-排除的群组
+排除的用户组
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_help%22)

> Discussions with selected tags will not earn points.

```diff
-带有选定标签的讨论将不会获得积分。
+带有所选标签的讨论不会获得积分。
```

#### [`huseyinfiliz-leaderboard.admin.settings.extension_not_enabled`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.extension_not_enabled%22)

> This extension is not enabled.

```diff
-此扩展未启用。
+此扩展未启用
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_best_answer_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_best_answer_label%22)

> Points for best answer

```diff
-最佳答案的积分
+获得最佳回复的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_changed_notice%22)

> Point values have changed. Sync points to apply new values.

```diff
-积分值已更改。同步积分以应用新值。
+积分数值已更改，请同步积分以应用新数值。
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_daily_login_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_daily_login_label%22)

> Points for daily login

```diff
-每日登录的积分
+每日登录获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_discussion_started_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_discussion_started_label%22)

> Points for starting a discussion

```diff
-发起讨论的积分
+发起讨论获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_downvote_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_downvote_received_label%22)

> Points for receiving a downvote

```diff
-收到踩的积分
+收到反对票获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_label_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_label_label%22)

> Points Label

```diff
-积分标签
+积分名称
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_like_given_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_like_given_label%22)

> Points for giving a like

```diff
-给出赞的积分
+点赞他人获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_like_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_like_received_label%22)

> Points for receiving a like

```diff
-收到赞的积分
+收到点赞获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_post_created_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_post_created_label%22)

> Points for posting a reply

```diff
-发表回复的积分
+回复获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_reaction_given_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_reaction_given_label%22)

> Points for giving a reaction

```diff
-给出表情的积分
+作出反应获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_reaction_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_reaction_received_label%22)

> Points for receiving a reaction

```diff
-收到表情的积分
+收到反应获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_upvote_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_upvote_received_label%22)

> Points for receiving an upvote

```diff
-收到顶的积分
+收到赞成票获得的积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_button`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_button%22)

> Recalculate All Activity

```diff
-重新计算所有活动
+重新统计所有活动
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_confirm%22)

> This will re-scan all source data and rebuild point records from scratch. This may take a while on large forums.

```diff
-这将重新扫描所有源数据并从头开始重建积分记录。在大型论坛上可能需要一些时间。
+这将重新扫描所有来源数据，并从头重建积分记录。大型论坛可能需要较长时间。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_failed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_failed%22)

> Recalculation failed. You can try again.

```diff
-重新计算失败。您可以再试一次。
+重新统计失败，请重试
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_help%22)

> Re-scans all source data (discussions, posts, likes, etc.), removes orphaned records, adds missing ones, and rebuilds all totals. Use this after changing tag exclusions or if data seems out of sync.

```diff
-重新扫描所有源数据（讨论、帖子、点赞等），删除孤立记录，添加缺失记录，并重建所有总计。在更改标签排除项或数据似乎不同步时使用此功能。
+重新扫描所有来源数据（讨论、帖子、点赞等），删除无效记录、补充缺失记录，并重建所有积分总数。修改标签排除项或发现数据不同步时使用。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_retry`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_retry%22)

> Try Again

```diff
-再试一次
+重试
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_success%22)

> All activity recalculated successfully.

```diff
-所有活动已成功重新计算。
+所有活动已重新统计。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_title%22)

> Recalculate All Activity

```diff
-重新计算所有活动
+重新统计所有活动
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_warning`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_warning%22)

> Do not close this page or navigate away while recalculation is in progress. The operation will fail if interrupted.

```diff
-重新计算进行中时，请勿关闭此页面或离开。如果中断，操作将失败。
+重新统计期间请勿关闭或离开此页面，否则操作将失败。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_help%22)

> Recalculates all user point totals using current point values. Use this after changing point values.

```diff
-使用当前积分值重新计算所有用户积分总计。在更改积分值后使用此功能。
+根据当前积分设置重新计算所有用户的积分总数。修改积分数值后使用。
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_success%22)

> Points synced successfully.

```diff
-积分已成功同步。
+积分已同步
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_best_answer`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_best_answer%22)

> Best Answer

```diff
-最佳答案
+最佳回复
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_core`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_core%22)

> Core Points

```diff
-核心积分
+基础积分
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_likes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_likes%22)

> Likes

```diff
-赞
+点赞
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_reactions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_reactions%22)

> Reactions

```diff
-表情
+反应
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_badge_earned`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_badge_earned%22)

> Scanning badges...

```diff
-正在扫描徽章...
+正在扫描徽章…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_best_answer`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_best_answer%22)

> Scanning best answers...

```diff
-正在扫描最佳答案...
+正在扫描最佳回复…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_discussion_started`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_discussion_started%22)

> Scanning discussions...

```diff
-正在扫描讨论...
+正在扫描讨论…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_like_given`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_like_given%22)

> Scanning likes given...

```diff
-正在扫描发出的赞...
+正在扫描送出的点赞…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_like_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_like_received%22)

> Scanning likes received...

```diff
-正在扫描收到的赞...
+正在扫描收到的点赞…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_post_created`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_post_created%22)

> Scanning posts...

```diff
-正在扫描帖子...
+正在扫描帖子…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_given`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_given%22)

> Scanning reactions given...

```diff
-正在扫描发出的表情...
+正在扫描作出的反应…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_received%22)

> Scanning reactions received...

```diff
-正在扫描收到的表情...
+正在扫描收到的反应…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_rebuild_totals`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_rebuild_totals%22)

> Rebuilding totals...

```diff
-正在重建总计...
+正在重建积分总数…
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_vote_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_vote_received%22)

> Scanning votes...

```diff
-正在扫描投票...
+正在扫描投票…
```

#### [`huseyinfiliz-leaderboard.admin.settings.tags_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.tags_changed_notice%22)

> Tag exclusions have changed. Recalculate all activity to update historical data.

```diff
-标签排除项已更改。重新计算所有活动以更新历史数据。
+标签排除项已更改，请重新统计所有活动以更新历史数据。
```

#### [`huseyinfiliz-leaderboard.admin.tabs.general`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.general%22)

> General

```diff
-通用
+常规
```

#### [`huseyinfiliz-leaderboard.forum.contenders.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.contenders.title%22)

> Top Contenders

```diff
-顶级竞争者
+领先用户
```

#### [`huseyinfiliz-leaderboard.forum.list.no_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.no_results%22)

> No results for this period.

```diff
-此期间无结果。
+此期间暂无排名
```

#### [`huseyinfiliz-leaderboard.forum.period.all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.all%22)

> All Time

```diff
-所有时间
+总榜
```

#### [`huseyinfiliz-leaderboard.forum.period.daily`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.daily%22)

> Daily

```diff
-每日
+日榜
```

#### [`huseyinfiliz-leaderboard.forum.period.monthly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.monthly%22)

> Monthly

```diff
-每月
+月榜
```

#### [`huseyinfiliz-leaderboard.forum.period.quarterly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.quarterly%22)

> Quarterly

```diff
-每季度
+季度榜
```

#### [`huseyinfiliz-leaderboard.forum.period.weekly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.weekly%22)

> Weekly

```diff
-每周
+周榜
```

#### [`huseyinfiliz-leaderboard.forum.period.yearly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.yearly%22)

> Yearly

```diff
-每年
+年榜
```

#### [`huseyinfiliz-leaderboard.forum.podium.first`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.first%22)

> 1st

```diff
-第1名
+第 1 名
```

#### [`huseyinfiliz-leaderboard.forum.podium.second`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.second%22)

> 2nd

```diff
-第2名
+第 2 名
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_comments`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_comments%22)

> Comments

```diff
-评论
+回复
```

#### [`huseyinfiliz-leaderboard.forum.podium.third`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/zh_Hans/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.third%22)

> 3rd

```diff
-第3名
+第 3 名
```


### `huseyinfiliz-modern-footer`

#### [`huseyinfiliz-modern-footer.admin.settings.about_us_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.about_us_help%22)

> Text Area: This field does not support HTML formatting. To create a new line, simply press the Enter key.

```diff
-文本区：本栏不支持 HTML 格式。要创建新行，请按 Enter 键。
+此文本框不支持 HTML 格式。支持回车换行。
```

<del>文本区：本栏不支持</del><ins>此文本框不支持</ins> HTML<del> 格式。要创建新行，请按 Enter</del> <del>键。</del><ins>格式。支持回车换行。</ins>

#### [`huseyinfiliz-modern-footer.admin.settings.all_pages`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.all_pages%22)

> Show on all pages

```diff
-在所有页面上显示
+所有页面显示
```

#### [`huseyinfiliz-modern-footer.admin.settings.block`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.block%22)

> Block

```diff
-板块
+区块
```

#### [`huseyinfiliz-modern-footer.admin.settings.blocks`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.blocks%22)

> Blocks

```diff
-板块
+区块
```

#### [`huseyinfiliz-modern-footer.admin.settings.bottom_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.bottom_help%22)

> Example: © 2025, All Rights Reserved

```diff
-例如 : © 2025, All Rights Reserved
+示例：© 2025 保留所有权利
```

#### [`huseyinfiliz-modern-footer.admin.settings.bottom_section`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.bottom_section%22)

> Bottom Section

```diff
-底部
+底部区域
```

#### [`huseyinfiliz-modern-footer.admin.settings.custom_html`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.custom_html%22)

> Custom HTML Code

```diff
-自定义 HTML 代码
+自定义 HTML
```

自定义 HTML<del> 代码</del>

#### [`huseyinfiliz-modern-footer.admin.settings.custom_js`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.custom_js%22)

> Custom JS

```diff
-自定义 JS
+自定义 JavaScript
```

自定义 <del>JS</del><ins>JavaScript</ins>

#### [`huseyinfiliz-modern-footer.admin.settings.custom_js_code`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.custom_js_code%22)

> Custom JavaScript Code

```diff
-自定义 JS 代码
+自定义 JavaScript 代码
```

自定义 <del>JS</del><ins>JavaScript</ins> 代码

#### [`huseyinfiliz-modern-footer.admin.settings.display_mode`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.display_mode%22)

> Footer Display Mode

```diff
-页脚显示模式
+页脚显示范围
```

#### [`huseyinfiliz-modern-footer.admin.settings.forum_logo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.forum_logo%22)

> Forum Logo

```diff
-论坛图标（Logo）
+论坛 Logo
```

#### [`huseyinfiliz-modern-footer.admin.settings.forum_logo_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.forum_logo_help%22)

> Add the URL for the forum logo. If a valid URL is provided, the logo will be displayed. Alternatively, you can add a code such as to make it behave like other block titles:

```diff
-添加论坛图标的URL。如果提供了有效的URL，该图标将会显示。或者也可以添加类似的代码，使其像其他板块标题一样表现：
+填写论坛 Logo 的图片 URL 即可显示图片，也可以填写 HTML 代码，使其像其他区块标题一样显示
```

#### [`huseyinfiliz-modern-footer.admin.settings.general`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.general%22)

> General

```diff
-通用
+常规
```

#### [`huseyinfiliz-modern-footer.admin.settings.hide_everywhere`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.hide_everywhere%22)

> Hide on all pages

```diff
-在所有页面上隐藏
+所有页面隐藏
```

#### [`huseyinfiliz-modern-footer.admin.settings.hide_except_index`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.hide_except_index%22)

> Hide on all pages except the index page

```diff
-在除首页以外页面隐藏
+仅在首页显示
```

#### [`huseyinfiliz-modern-footer.admin.settings.hide_on_discussions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.hide_on_discussions%22)

> Hide on discussions

```diff
-在主题中隐藏
+在讨论页隐藏
```

#### [`huseyinfiliz-modern-footer.admin.settings.manage_footer_sections`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.manage_footer_sections%22)

> Manage Footer Sections

```diff
-管理页脚
+管理页脚区块
```

#### [`huseyinfiliz-modern-footer.admin.settings.mobile_tab_height_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.mobile_tab_height_help%22)

> If the Mobile Tab extension is installed, you can use as the value: var(--mobile-tab-height)

```diff
-如果安装了Mobile Tab拓展，则可使用以下值： var(--mobile-tab-height)
+如果安装了 Mobile Tab 扩展，可以填写：var(--mobile-tab-height)
```

#### [`huseyinfiliz-modern-footer.admin.settings.show_to_guests_only`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-modern-footer/zh_Hans/?q=context%3A%3D%22huseyinfiliz-modern-footer.admin.settings.show_to_guests_only%22)

> Show to Guests Only

```diff
-仅游客可见
+仅访客可见
```


### `huseyinfiliz-notificationhub`

#### [`huseyinfiliz-notificationhub.admin.permissions.send_user`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.permissions.send_user%22)

> Send notifications to individual users

```diff
-向特定用户发送通知
+向指定用户发送通知
```

#### [`huseyinfiliz-notificationhub.admin.settings.add_notification_type`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.add_notification_type%22)

> Add Notification Type

```diff
-=> huseyinfiliz-notificationhub.admin.settings.add_button
+添加通知类型
```

#### [`huseyinfiliz-notificationhub.admin.settings.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.delete_confirm%22)

> Are you sure you want to delete this notification type and all its associated notifications?

```diff
-确定要删除此通知类型及其所有相关通知吗？
+确定要删除此通知类型及其所有关联通知吗？
```

#### [`huseyinfiliz-notificationhub.admin.settings.edit_notification_type`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.edit_notification_type%22)

> Edit Notification Type

```diff
-编辑消息类型
+编辑通知类型
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.color_invalid`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.color_invalid%22)

> Color must be a valid hex code, e.g. #ff0000 or #f00.

```diff
-颜色必须是有效的十六进制颜色代码，例如 #ff0000 或 #f00。
+请输入有效的十六进制颜色代码，例如 #ff0000 或 #f00。
```

<del>颜色必须是有效的十六进制颜色代码，例如</del><ins>请输入有效的十六进制颜色代码，例如</ins> #ff0000 或 #f00。

#### [`huseyinfiliz-notificationhub.admin.settings.fields.default_recipients`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.default_recipients%22)

> Default Recipients

```diff
-默认收件人
+默认接收对象
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.permission`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.permission%22)

> Notification Type Permission

```diff
-通知类型权限
+发送权限
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.permission_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.permission_help%22)

> Select member groups authorized to send this notification. If left empty, all authorized moderators/admins can send it.

```diff
-选择有权发送此通知的会员组。如果留空，则所有有权限的版主/管理员均可发送。
+选择有权发送此类通知的用户组。留空则所有有发送权限的版主和管理员均可发送。
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.permission_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.permission_placeholder%22)

> Type a group name...

```diff
-输入组名称...
+输入用户组名称…
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.sort_order`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.sort_order%22)

> Sort Order

```diff
-排序顺序
+排序
```

#### [`huseyinfiliz-notificationhub.admin.settings.no_data`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.no_data%22)

> No notification types yet.

```diff
-尚未设置通知类型。
+暂无通知类型
```

#### [`huseyinfiliz-notificationhub.api.invalid_color`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.invalid_color%22)

> Color must be a valid hex code (e.g. #ff0000 or #f00).

```diff
-颜色必须是有效的十六进制颜色代码（例如 #ff0000 或 #f00）。
+请输入有效的十六进制颜色代码，例如 #ff0000 或 #f00。
```

<del>颜色必须是有效的十六进制颜色代码（例如</del><ins>请输入有效的十六进制颜色代码，例如</ins> #ff0000 或 <del>#f00）。</del><ins>#f00。</ins>

#### [`huseyinfiliz-notificationhub.api.invalid_url`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.invalid_url%22)

> Invalid URL protocol detected.

```diff
-检测到无效的 URL 协议。
+URL 协议无效。
```

<del>检测到无效的 </del>URL <del>协议。</del><ins>协议无效。</ins>

#### [`huseyinfiliz-notificationhub.api.invalid_url_scheme`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.invalid_url_scheme%22)

> Invalid URL scheme. Only HTTP, HTTPS, mailto, tel, or relative links are allowed.

```diff
-无效的 URL 方案。仅允许 HTTP、HTTPS、mailto、tel 或相对链接。
+URL 协议无效，仅允许 HTTP、HTTPS、mailto、tel 或相对链接。
```

<del>无效的 </del>URL <del>方案。仅允许</del><ins>协议无效，仅允许</ins> HTTP、HTTPS、mailto、tel 或相对链接。

#### [`huseyinfiliz-notificationhub.api.message_required`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.message_required%22)

> Message is required.

```diff
-消息为必填项。
+必须填写消息。
```

#### [`huseyinfiliz-notificationhub.api.multiple_recipients_not_allowed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.multiple_recipients_not_allowed%22)

> You do not have permission to send to multiple recipients at once.

```diff
-您没有权限同时向多个接收者发送通知。
+你没有权限一次向多个接收对象发送通知。
```

#### [`huseyinfiliz-notificationhub.api.name_required`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.name_required%22)

> The notification type name is required.

```diff
-通知类型名称为必填项。
+必须填写通知类型名称。
```

#### [`huseyinfiliz-notificationhub.api.no_valid_recipients`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.no_valid_recipients%22)

> No valid recipients were found.

```diff
-未找到有效的接收者。
+没有找到有效的接收对象。
```

#### [`huseyinfiliz-notificationhub.api.sort_order_invalid`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.sort_order_invalid%22)

> Sort order must be a non-negative number.

```diff
-排序顺序必须为非负数。
+排序值必须为非负数。
```

#### [`huseyinfiliz-notificationhub.api.subject_id_required`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.subject_id_required%22)

> Notification Type is required.

```diff
-通知类型为必填项。
+必须选择通知类型。
```

#### [`huseyinfiliz-notificationhub.api.user_ids_required`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.user_ids_required%22)

> User IDs are required.

```diff
-用户ID为必填项。
+必须指定用户。
```

#### [`huseyinfiliz-notificationhub.forum.links.notification_all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.links.notification_all%22)

> Send Notification

```diff
-=> huseyinfiliz-notificationhub.forum.links.notification_individual
+发送通知
```

#### [`huseyinfiliz-notificationhub.forum.modal_notification.no_notification_types`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.no_notification_types%22)

> No active notification types found.

```diff
-未找到启用的通知类型。
+暂无可用的通知类型
```

#### [`huseyinfiliz-notificationhub.forum.modal_notification.notification_sent_message`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.notification_sent_message%22)

> Notifications have been sent to {recipientsCount} users!

```diff
-通知已发送给 {recipientsCount} 位用户！
+已向 {recipientsCount} 位用户发送通知。
```

<del>通知已发送给</del><ins>已向</ins> {recipientsCount} <del>位用户！</del><ins>位用户发送通知。</ins>

#### [`huseyinfiliz-notificationhub.forum.modal_notification.preview_message_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.preview_message_placeholder%22)

> Notification message..

```diff
-通知消息..
+通知内容…
```

#### [`huseyinfiliz-notificationhub.forum.modal_notification.recipients_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.recipients_label%22)

> Recipients

```diff
-收件人
+接收对象
```

#### [`huseyinfiliz-notificationhub.forum.modal_notification.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.recipients_placeholder%22)

> Type a username or group name...

```diff
-输入用户名或群组名称...
+输入用户名或用户组名称…
```

#### [`huseyinfiliz-notificationhub.forum.modal_notification.title_text`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.title_text%22)

> Send Notification

```diff
-=> huseyinfiliz-notificationhub.forum.links.notification_individual
+发送通知
```

#### [`huseyinfiliz-notificationhub.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.recipient_kinds.group%22)

> Group

```diff
-群组
+用户组
```


### `huseyinfiliz-sticky-title`

#### [`huseyinfiliz-sticky-title.admin.settings.blog_header_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.blog_header_help%22)

> Displays the blog article title in mobile header when viewing blog posts

```diff
-在移动设备上查看博客文章时，会在页面顶部显示博客文章标题
+浏览博客文章时，在移动端顶部导航栏显示文章标题
```

#### [`huseyinfiliz-sticky-title.admin.settings.blog_header_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.blog_header_label%22)

> Show Blog Title in Mobile Header

```diff
-在移动端页眉显示博客标题
+在移动端顶部导航栏显示博客标题
```

#### [`huseyinfiliz-sticky-title.admin.settings.fof_pages_header_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.fof_pages_header_help%22)

> Displays the page title in mobile header when viewing FoF Pages

```diff
-在移动设备上查看 FoF 页面时将在页面顶部显示页面标题
+浏览 FoF Pages 页面时，在移动端顶部导航栏显示页面标题
```

<del>在移动设备上查看</del><ins>浏览</ins> FoF <del>页面时将在页面顶部显示页面标题</del><ins>Pages 页面时，在移动端顶部导航栏显示页面标题</ins>

#### [`huseyinfiliz-sticky-title.admin.settings.fof_pages_header_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.fof_pages_header_label%22)

> Show Page Title in Mobile Header

```diff
-在移动端标题栏显示页面标题
+在移动端顶部导航栏显示页面标题
```

#### [`huseyinfiliz-sticky-title.admin.settings.fof_pages_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.fof_pages_section_title%22)

> FoF Pages Settings

```diff
-FoF自定义页面设置
+FoF Pages 设置
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_help%22)

> Choose when to show the discussion title in the mobile header

```diff
-选择何时在移动端页眉中显示讨论标题
+选择何时在移动端顶部导航栏显示讨论标题
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_label%22)

> Mobile Discussion Title Display

```diff
-移动端讨论标题显示
+移动端讨论标题显示方式
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_section_title%22)

> Mobile Settings

```diff
-移动设置
+移动端设置
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.both`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.both%22)

> Both Mobile &amp; Desktop

```diff
-移动端和桌面端都
+移动端和桌面端
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.never`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.never%22)

> Never Replace

```diff
-永不改变
+从不替换
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_help%22)

> Choose where to show the discussion title instead of "Original Post"

```diff
-选择在哪里显示讨论标题，而不是显示“原始帖子”
+选择在哪些设备上用讨论标题替换「最早内容」
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_label%22)

> Replace "Original Post" with Discussion Title

```diff
-将“原始帖子”替换为讨论标题
+用讨论标题替换「最早内容」
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_section_title%22)

> Scrubber Settings

```diff
-过滤器设置
+时间轴设置
```

#### [`huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_help%22)

> Displays the discussion title above the scrubber on desktop

```diff
-在桌面端讨论标题将显示在进度条上方
+在桌面端讨论时间轴上方显示讨论标题
```

#### [`huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_label%22)

> Show Title Above Scrubber

```diff
-在进度条上方显示标题
+在时间轴上方显示标题
```


### `ianm-boring-avatars`

#### [`flarum-gdpr.lib.data.boringavatar.anonymize_description`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.boringavatar.anonymize_description%22)

> Deletes the boring avatar, and regenerates a new random one.

```diff
-删除现有的 Boring Avatar，并重新随机生成一个新的。
+删除当前 Boring Avatars 头像，并重新生成一个随机头像。
```

<del>删除现有的</del><ins>删除当前</ins> Boring <del>Avatar，并重新随机生成一个新的。</del><ins>Avatars 头像，并重新生成一个随机头像。</ins>

#### [`flarum-gdpr.lib.data.boringavatar.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.boringavatar.delete_description%22)

> Deletes the boring avatar.

```diff
-删除 Boring Avatar。
+删除 Boring Avatars 头像。
```

删除 Boring <del>Avatar。</del><ins>Avatars 头像。</ins>

#### [`flarum-gdpr.lib.data.boringavatar.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.boringavatar.export_description%22)

> Adds the boring avatar to the export zip.

```diff
-将 Boring Avatar 头像添加至导出的压缩包中。
+将 Boring Avatars 头像加入导出的 ZIP 文件。
```

将 Boring <del>Avatar</del><ins>Avatars</ins> <del>头像添加至导出的压缩包中。</del><ins>头像加入导出的 ZIP 文件。</ins>

#### [`ianm-boring-avatars.admin.settings.color1`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color1%22)

> Color 1

```diff
-基本色 1
+颜色 1
```

<del>基本色</del><ins>颜色</ins> 1

#### [`ianm-boring-avatars.admin.settings.color2`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color2%22)

> Color 2

```diff
-基本色 2
+颜色 2
```

<del>基本色</del><ins>颜色</ins> 2

#### [`ianm-boring-avatars.admin.settings.color3`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color3%22)

> Color 3

```diff
-基本色 3
+颜色 3
```

<del>基本色</del><ins>颜色</ins> 3

#### [`ianm-boring-avatars.admin.settings.color4`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color4%22)

> Color 4

```diff
-基本色 4
+颜色 4
```

<del>基本色</del><ins>颜色</ins> 4

#### [`ianm-boring-avatars.admin.settings.color5`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color5%22)

> Color 5

```diff
-基本色 5
+颜色 5
```

<del>基本色</del><ins>颜色</ins> 5

#### [`ianm-boring-avatars.admin.settings.identifier`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.identifier%22)

> Identifier

```diff
-种子
+用户标识
```

#### [`ianm-boring-avatars.admin.settings.identifier_display_name`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.identifier_display_name%22)

> Display name

```diff
-外显昵称
+外显名称
```

#### [`ianm-boring-avatars.admin.settings.identifier_email`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.identifier_email%22)

> Email

```diff
-电子邮箱
+邮箱
```

#### [`ianm-boring-avatars.admin.settings.identifier_help`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.identifier_help%22)

> Used to generate a unique avatar for each user.
>

```diff
-基于指定类型的值生成头像。
+用于为每位用户生成唯一头像。

```

#### [`ianm-boring-avatars.admin.settings.theme_help`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/zh_Hans/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.theme_help%22)

> The theme to use for the boring avatars.
>

```diff
-选择要生成的头像风格。
+选择 Boring Avatars 使用的头像风格。

```


### `ianm-follow-users`

#### [`flarum-gdpr.lib.data.followuser.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.delete_description%22)

> Deletes all data related to following users.

```diff
-删除与关注用户相关的所有数据。
+删除所有用户关注关系数据。
```

#### [`flarum-gdpr.lib.data.followuser.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.export_description%22)

> Exports details of users followed and users following.

```diff
-导出已关注用户及被关注用户的详细信息。
+导出用户关注与被关注关系的详细信息。
```

#### [`ianm-follow-users.admin.permissions.be_followed_label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.admin.permissions.be_followed_label%22)

> Allow users to follow

```diff
-允许用户关注他人
+允许他人关注自己
```

#### [`ianm-follow-users.admin.settings.button-on-profile-label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.admin.settings.button-on-profile-label%22)

> Show the Follow button directly on the user profile header

```diff
-在用户资料卡片头部区域展示关注按钮
+在个人主页顶部显示「关注」按钮
```

#### [`ianm-follow-users.admin.settings.stats-on-profile-label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.admin.settings.stats-on-profile-label%22)

> Show follower and following counts on user profiles

```diff
-在用户资料中展示追随和粉丝数量
+在个人主页显示粉丝和关注数量
```

#### [`ianm-follow-users.forum.badge.label.lurk`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.badge.label.lurk%22)

> Following all

```diff
-特别关注
+关注全部动态
```

#### [`ianm-follow-users.forum.filter.following`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.filter.following%22)

> Followed users

```diff
-已关注的用户
+已关注用户
```

#### [`ianm-follow-users.forum.followed`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.followed%22)

> Followed

```diff
-追随
+已关注
```

#### [`ianm-follow-users.forum.followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.followers%22)

> {count, plural, one {Follower} other {Followers}}

```diff
-粉丝
+{count} 粉丝
```

<ins>{count} </ins>粉丝

#### [`ianm-follow-users.forum.followers_link`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.followers_link%22)

> Followers

```diff
-我的粉丝
+关注者
```

#### [`ianm-follow-users.forum.modals.select_follow_level.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.description%22)

> Choose how you'd like to follow &lt;em&gt;{username}&lt;/em&gt;.

```diff
-您想要如何关注 <em>{username}</em>。
+你想如何关注 <em>{username}</em>。
```

<del>您想要如何关注</del><ins>你想如何关注</ins> &lt;em&gt;{username}&lt;/em&gt;。

#### [`ianm-follow-users.forum.modals.select_follow_level.follow_levels_heading`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.follow_levels_heading%22)

> Follow levels

```diff
-关注级别
+关注方式
```

#### [`ianm-follow-users.forum.modals.select_follow_level.follow_select_label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.follow_select_label%22)

> Follow type

```diff
-关注类型
+关注方式
```

#### [`ianm-follow-users.forum.modals.select_follow_level.no_user_attr_provided_err`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.no_user_attr_provided_err%22)

> Uh oh, something went wrong while opening this modal.

```diff
-哎呀，打开弹窗时发生了错误。
+哎呀，打开弹窗时出了点问题。
```

#### [`ianm-follow-users.forum.modals.select_follow_level.no_user_attr_provided_err_debug`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.no_user_attr_provided_err_debug%22)

> No \`user\` attribute was passed to the SelectFollowUserLevel modal when created. Modal cannot be rendered.

```diff
-创建选择关注级别 (SelectFollowUserLevel) 弹窗时未传入 `user` 用户属性，因此弹窗无法渲染。
+创建 SelectFollowUserLevel 窗口时未传入 `user` 属性，无法渲染窗口。
```

<del>创建选择关注级别</del><ins>创建</ins> <del>(SelectFollowUserLevel)</del><ins>SelectFollowUserLevel</ins> <del>弹窗时未传入</del><ins>窗口时未传入</ins> \`user\` <del>用户属性，因此弹窗无法渲染。</del><ins>属性，无法渲染窗口。</ins>

#### [`ianm-follow-users.forum.notifications.new_discussion_text`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.notifications.new_discussion_text%22)

> {username} started

```diff
-{username} 发布了新讨论
+{username} 发起讨论
```

{username} <del>发布了新讨论</del><ins>发起讨论</ins>

#### [`ianm-follow-users.forum.notifications.new_post_text`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.notifications.new_post_text%22)

> {username} posted in a discussion

```diff
-{username} 在讨论中发表了回复
+{username} 回帖
```

{username} <del>在讨论中发表了回复</del><ins>回帖</ins>

#### [`ianm-follow-users.forum.profile_page.no_followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_followers%22)

> It looks like you have no followers yet.

```diff
-还没有人关注您。
+还没有人关注你
```

#### [`ianm-follow-users.forum.profile_page.no_following`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_following%22)

> It looks like you're not following anyone.

```diff
-您还没有关注任何人。
+你还没有关注任何人
```

#### [`ianm-follow-users.forum.settings.notify_new_discussion_label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.settings.notify_new_discussion_label%22)

> Someone I'm following starts a discussion

```diff
-我关注的人发布了新讨论
+我关注的人发起讨论
```

#### [`ianm-follow-users.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.forum.settings.notify_new_post_label%22)

> Someone I'm following posts in an existing discussion

```diff
-我关注的人发表了新回复
+我关注的人在回帖
```

#### [`ianm-follow-users.lib.change_follow_type`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.change_follow_type%22)

> Change follow type

```diff
-修改关注类型
+更改关注方式
```

#### [`ianm-follow-users.lib.follow_levels.follow.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.follow.description%22)

> Receive notifications when &lt;em&gt;{username}&lt;/em&gt; starts new a new discussion.
>

```diff
-当 <em>{username}</em> 发布新讨论时接收通知。
+当 <em>{username}</em> 发起新讨论时接收通知

```

当 &lt;em&gt;{username}&lt;/em&gt; <del>发布新讨论时接收通知。</del><ins>发起新讨论时接收通知</ins><br />

#### [`ianm-follow-users.lib.follow_levels.lurk.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.lurk.description%22)

> Receive notifications when &lt;em&gt;{username}&lt;/em&gt; starts a new discussion or posts within any discussion.
>

```diff
-当 <em>{username}</em> 发布新讨论或在任意讨论中发表回复时接收通知。
+当 <em>{username}</em> 发起新讨论或在其他讨论中回帖时接收通知

```

当 &lt;em&gt;{username}&lt;/em&gt; <del>发布新讨论或在任意讨论中发表回复时接收通知。</del><ins>发起新讨论或在其他讨论中回帖时接收通知</ins><br />

#### [`ianm-follow-users.lib.follow_levels.lurk.name`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.lurk.name%22)

> Follow all

```diff
-特别关注
+关注全部动态
```

#### [`ianm-follow-users.lib.follow_levels.unfollow.description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.unfollow.description%22)

> Don't receive any notifications for &lt;em&gt;{username}&lt;/em&gt;'s activity.
>

```diff
-不接收 <em>{username}</em> 的任何活动通知。
+不接收 <em>{username}</em> 的任何动态通知

```

不接收 &lt;em&gt;{username}&lt;/em&gt; <del>的任何活动通知。</del><ins>的任何动态通知</ins><br />

#### [`ianm-follow-users.lib.follow_levels.unfollow.name`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.follow_levels.unfollow.name%22)

> Don't follow

```diff
-取消关注
+不关注
```

#### [`ianm-follow-users.lib.following_link`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/zh_Hans/?q=context%3A%3D%22ianm-follow-users.lib.following_link%22)

> Followed Users

```diff
-我的关注
+我关注的用户
```


### `ianm-html-head`

#### [`ianm-html-head.admin.create_button`](https://weblate.rob006.net/translate/flarum2/ianm-html-head/zh_Hans/?q=context%3A%3D%22ianm-html-head.admin.create_button%22)

> Create

```diff
-新建
+创建
```


### `ianm-log-viewer`

#### [`ianm-log-viewer.admin.permissions.access_logfile_api`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.permissions.access_logfile_api%22)

> View and manage logfiles

```diff
-通过 API 访问日志数据
+查看和管理日志文件
```

#### [`ianm-log-viewer.admin.settings.max-file-size`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size%22)

> Maximum Log File Size (MB)

```diff
-最大日志文件大小 (MB)
+日志文件最大大小（MB）
```

#### [`ianm-log-viewer.admin.settings.max-file-size-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size-help%22)

> If a log file exceeds this size, it will be split into multiple parts. Set to 0 to disable splitting. Default is 1MB. Maximum allowable size is 150MB.

```diff
-如果日志文件超过此大小，它将被拆分为多个部分。设置为 0 可禁用拆分。默认值为 1MB。允许的最大大小为 150MB。
+日志文件超过此大小时会自动拆分为多个文件。设为 0 可关闭拆分。默认为 1 MB，最大可设为 150 MB。
```

<del>如果日志文件超过此大小，它将被拆分为多个部分。设置为</del><ins>日志文件超过此大小时会自动拆分为多个文件。设为</ins> 0 <del>可禁用拆分。默认值为</del><ins>可关闭拆分。默认为</ins> <del>1MB。允许的最大大小为</del><ins>1</ins> <del>150MB。</del><ins>MB，最大可设为 150 MB。</ins>

#### [`ianm-log-viewer.admin.settings.purge-days`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.settings.purge-days%22)

> Purge logfiles after days

```diff
-定时清除日志文件
+日志文件保留天数
```

#### [`ianm-log-viewer.admin.settings.purge-days-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.settings.purge-days-help%22)

> Relies on the Flarum scheduler being active. 0 for disabled.

```diff
-每隔一定天数清除日志文件，0 表示不清除。此功能需要使用 Flarum 调度器。
+需要启用 Flarum 定时任务。设为 0 可关闭自动清理。
```

<del>每隔一定天数清除日志文件，0 表示不清除。此功能需要使用</del><ins>需要启用</ins> Flarum <del>调度器。</del><ins>定时任务。设为 0 可关闭自动清理。</ins>

#### [`ianm-log-viewer.admin.viewer.available_logs_heading`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.available_logs_heading%22)

> Available files

```diff
-可用文件
+可用日志文件
```

#### [`ianm-log-viewer.admin.viewer.delete_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.delete_log%22)

> Delete log file

```diff
-删除日志文件
+删除日志
```

#### [`ianm-log-viewer.admin.viewer.download_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.download_log%22)

> Download log file

```diff
-下载日志文件
+下载日志
```

#### [`ianm-log-viewer.admin.viewer.last_updated`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.last_updated%22)

> Last updated: {updated}

```diff
-上次更新：{updated}
+最后更新：{updated}
```

#### [`ianm-log-viewer.admin.viewer.no_file_selected`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.no_file_selected%22)

> Select a log file to view its content.

```diff
-请选择日志文件。
+请选择日志文件
```

#### [`ianm-log-viewer.admin.viewer.view_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/zh_Hans/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.view_log%22)

> View log file

```diff
-查看日志文件
+查看日志
```


### `ianm-oauth-reddit`

#### [`fof-oauth.admin.settings.providers.reddit.client_id_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/zh_Hans/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_id_label%22)

> Client ID

```diff
-Client ID
+客户端 ID
```

<del>Client</del><ins>客户端</ins> ID

#### [`fof-oauth.admin.settings.providers.reddit.client_secret_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/zh_Hans/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_secret_label%22)

> Client secret

```diff
-Client secret
+客户端密钥
```


### `ianm-online-guests`

#### [`ianm-online-guests.admin.settings.cache_duration_label`](https://weblate.rob006.net/translate/flarum2/ianm-online-guests/zh_Hans/?q=context%3A%3D%22ianm-online-guests.admin.settings.cache_duration_label%22)

> Cache duration

```diff
-缓存持续时间
+缓存时长
```

#### [`ianm-online-guests.admin.settings.online_duration_label`](https://weblate.rob006.net/translate/flarum2/ianm-online-guests/zh_Hans/?q=context%3A%3D%22ianm-online-guests.admin.settings.online_duration_label%22)

> Online duration

```diff
-在线时长
+在线判定时长
```

#### [`ianm-online-guests.forum.widget.guests_online`](https://weblate.rob006.net/translate/flarum2/ianm-online-guests/zh_Hans/?q=context%3A%3D%22ianm-online-guests.forum.widget.guests_online%22)

> {count, plural, one {guest online} other {guests online}}

```diff
-{count, plural, one {一位访客在线} other {位访客在线}}
+{count} 位访客在线
```


### `ianm-syndication`

#### [`ianm-syndication.admin.settings.entries-count`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.entries-count%22)

> How many entries per feed?

```diff
-订阅信息流条目数量是多少？
+每个订阅源显示多少条内容？
```

#### [`ianm-syndication.admin.settings.forum-icons.help`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.forum-icons.help%22)

> Displays icons in All Discussions, Tags and Discussions to allow easy access to the feed(s).

```diff
-在所有主题、标签中显示图标，以便轻松查看 Feed(s)。
+在「全部讨论」、标签页和讨论页显示图标，方便用户访问对应的订阅源。
```

#### [`ianm-syndication.admin.settings.forum-icons.label`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.forum-icons.label%22)

> Show Atom/RSS feed links on the forum

```diff
-在论坛上显示 Atom/RSS 订阅链接
+在论坛中显示 Atom/RSS 订阅入口
```

<del>在论坛上显示</del><ins>在论坛中显示</ins> Atom/RSS <del>订阅链接</del><ins>订阅入口</ins>

#### [`ianm-syndication.admin.settings.forum-link-format.help`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.forum-link-format.help%22)

> Select which format (Atom or RSS) should be used when the links are displayed on the forum.

```diff
-选择订阅源格式（Atom 或 RSS）。
+选择论坛中显示订阅入口时使用 Atom 还是 RSS 格式。
```

#### [`ianm-syndication.admin.settings.forum-link-format.label`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.forum-link-format.label%22)

> Forum feed format

```diff
-论坛 Feed 格式
+论坛订阅源格式
```

#### [`ianm-syndication.admin.settings.full-text.help`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.full-text.help%22)

> If disabled, feeds will only contain excerpts of posts, and users will have to go to the forum to read everything. I would recommend to leave this option active in order to respect the people following the forum from an RSS aggregator—if any.

```diff
-如果禁用此项，订阅信息流将仅展示摘要，查看完整内容需要转至论坛。建议开启此项以尊重 RSS 用户。
+关闭后，订阅源只会包含帖子摘要，用户需要前往论坛阅读全文。建议保持开启以尊重 RSS 用户。
```

<del>如果禁用此项，订阅信息流将仅展示摘要，查看完整内容需要转至论坛。建议开启此项以尊重</del><ins>关闭后，订阅源只会包含帖子摘要，用户需要前往论坛阅读全文。建议保持开启以尊重</ins> RSS 用户。

#### [`ianm-syndication.admin.settings.full-text.label`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.full-text.label%22)

> Full-Text Feeds

```diff
-全文输出
+全文订阅源
```

#### [`ianm-syndication.admin.settings.html.help`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.html.help%22)

> Check this to keep the HTML in the generated feeds. If disabled, the feeds will be in plain text.

```diff
-开启此选项以保留 HTML 内容。如果禁用，订阅信息流将以纯文本格式展示。
+开启后，生成的订阅源会保留 HTML 格式。关闭后则以纯文本展示。
```

<del>开启此选项以保留</del><ins>开启后，生成的订阅源会保留</ins> HTML <del>内容。如果禁用，订阅信息流将以纯文本格式展示。</del><ins>格式。关闭后则以纯文本展示。</ins>

#### [`ianm-syndication.admin.settings.html.label`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.admin.settings.html.label%22)

> Formatted Feeds

```diff
-格式化内容
+保留内容格式
```

#### [`ianm-syndication.forum.autodiscovery.discussion_last_posts`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.discussion_last_posts%22)

> This discussion

```diff
-这篇主题
+当前讨论
```

#### [`ianm-syndication.forum.autodiscovery.forum_activity`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.forum_activity%22)

> Forum activity

```diff
-论坛活动
+论坛动态
```

#### [`ianm-syndication.forum.autodiscovery.forum_new_discussions`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.forum_new_discussions%22)

> Forum's new discussions

```diff
-论坛新帖
+论坛新讨论
```

#### [`ianm-syndication.forum.autodiscovery.tag_activity`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.tag_activity%22)

> Activity for the {tag} tag

```diff
-{tag} 标签活动
+「{tag}」标签动态
```

#### [`ianm-syndication.forum.autodiscovery.tag_new_discussions`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.tag_new_discussions%22)

> Discussions in the {tag} tag

```diff
-{tag} 标签新帖
+「{tag}」标签下的讨论
```

#### [`ianm-syndication.forum.autodiscovery.user_last_posts`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.user_last_posts%22)

> Posts &amp; comments by this user

```diff
-此用户发帖
+此用户的帖子和回复
```

#### [`ianm-syndication.forum.discussion.feed_link`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.discussion.feed_link%22)

> Feed

```diff
-Feed 订阅链接
+订阅源
```

#### [`ianm-syndication.forum.feeds.entries.user_posts.title_reply`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.entries.user_posts.title_reply%22)

> Re: {discussion}

```diff
-回复「{discussion}」
+回复：{discussion}
```

#### [`ianm-syndication.forum.feeds.titles.discussion_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.discussion_subtitle%22)

> Last messages in this discussion

```diff
-这篇帖子的最新回复
+此讨论中的最新帖子
```

#### [`ianm-syndication.forum.feeds.titles.main_d_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.main_d_subtitle%22)

> The newest discussions in the forum

```diff
-论坛新帖
+论坛最新发起的讨论
```

#### [`ianm-syndication.forum.feeds.titles.main_d_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.main_d_title%22)

> New discussions in {forum\_name}

```diff
-{forum_name} 的新帖
+{forum_name} 的新讨论
```

{forum\_name} <del>的新帖</del><ins>的新讨论</ins>

#### [`ianm-syndication.forum.feeds.titles.main_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.main_subtitle%22)

> Last posts in the forum

```diff
-论坛最新回帖
+论坛最新帖子
```

#### [`ianm-syndication.forum.feeds.titles.tag_d_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_d_subtitle%22)

> The newest discussions in the {tag} tag

```diff
-{tag} 标签新帖
+「{tag}」标签下最新发起的讨论
```

#### [`ianm-syndication.forum.feeds.titles.tag_d_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_d_title%22)

> New discussions in the {tag} tag

```diff
-{tag} 标签新帖
+「{tag}」标签下的新讨论
```

#### [`ianm-syndication.forum.feeds.titles.tag_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_subtitle%22)

> Last posts in the {tag} tag

```diff
-{tag} 标签新回帖
+「{tag}」标签下的最新帖子
```

#### [`ianm-syndication.forum.feeds.titles.tag_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_title%22)

> Activity in the {tag} tag

```diff
-{tag} 标签活动
+「{tag}」标签动态
```

#### [`ianm-syndication.forum.feeds.titles.user_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/zh_Hans/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.user_subtitle%22)

> Latest posts &amp; comments by this user.

```diff
-此用户最新发帖。
+此用户的最新帖子和回复
```


### `ianm-twofactor`

#### [`flarum-gdpr.lib.data.twofactordata.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.twofactordata.delete_description%22)

> Deletes all data related to 2FA.

```diff
-删除所有与双重认证相关的数据。
+删除所有与 2FA 相关的数据。
```

#### [`flarum-gdpr.lib.data.twofactordata.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22flarum-gdpr.lib.data.twofactordata.export_description%22)

> Exports 2FA status and encrypted backup codes.

```diff
-导出双重认证状态和加密的备用代码。
+导出 2FA 状态和加密的救援代码。
```

#### [`ianm-twofactor.admin.edit_group.2fa_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.edit_group.2fa_help%22)

> Require members of this group to enable Two-Factor Authentication (2FA) for their account.

```diff
-要求此用户组成员启用双重认证。
+要求此用户组的成员为账号启用双重身份验证（2FA）。
```

#### [`ianm-twofactor.admin.edit_group.2fa_label`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.edit_group.2fa_label%22)

> 2FA required

```diff
-需要双重认证
+要求启用 2FA
```

#### [`ianm-twofactor.admin.edit_group.admin_2fa_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.edit_group.admin_2fa_help%22)

> {adminName} members must always have 2FA enabled.

```diff
-{adminName} 成员必须始终启用双重认证。
+属于 {adminName} 的成员必须始终启用 2FA。
```

<ins>属于 </ins>{adminName} <del>成员必须始终启用双重认证。</del><ins>的成员必须始终启用 2FA。</ins>

#### [`ianm-twofactor.admin.permissions.manage_others_label`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.permissions.manage_others_label%22)

> Manage 2FA for other users

```diff
-管理其他用户的双重认证
+管理其他用户的 2FA
```

#### [`ianm-twofactor.admin.permissions.see_two_factor_status_label`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.permissions.see_two_factor_status_label%22)

> View 2FA status of other users

```diff
-查看其他用户的双重认证状态
+查看其他用户的 2FA 状态
```

#### [`ianm-twofactor.admin.settings.forum_logo_qr`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.forum_logo_qr%22)

> Embed Forum Logo on QR Code

```diff
-展示论坛标志
+二维码嵌入论坛 Logo
```

#### [`ianm-twofactor.admin.settings.forum_logo_qr_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.forum_logo_qr_help%22)

> Embed the forum logo on the QR code displayed when enabling 2FA. This may help users identify the correct QR code to scan.

```diff
-在双重认证配置二维码中间展示论坛标志。
+在启用 2FA 时显示的二维码中嵌入论坛 Logo，方便用户确认正在扫描的是本论坛的二维码。
```

#### [`ianm-twofactor.admin.settings.forum_logo_qr_width`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.forum_logo_qr_width%22)

> Forum Logo QR Code Width

```diff
-论坛标志宽度
+二维码论坛 Logo 宽度
```

#### [`ianm-twofactor.admin.settings.forum_logo_qr_width_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.forum_logo_qr_width_help%22)

> The width of the forum logo embedded on the QR code displayed when enabling 2FA. Max 200.

```diff
-在双重认证配置二维码展示的论坛标志宽度，最大值为 200。
+设置配置 2FA 时二维码中论坛 Logo 的宽度，最大为 200。
```

<del>在双重认证配置二维码展示的论坛标志宽度，最大值为</del><ins>设置配置 2FA 时二维码中论坛 Logo 的宽度，最大为</ins> 200。

#### [`ianm-twofactor.admin.settings.groups.help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.groups.help%22)

> Require members of these groups to enable Two-Factor Authentication (2FA) for their account. A user in a required group cannot disable 2FA.

```diff
-要求此用户组成员启用双重认证，且不可关闭。
+要求这些用户组的成员为账号启用双重身份验证（2FA），且不可关闭。
```

#### [`ianm-twofactor.admin.settings.groups.title`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.groups.title%22)

> 2FA Required Groups

```diff
-双重认证用户组
+必须启用 2FA 的用户组
```

#### [`ianm-twofactor.admin.settings.logo_qr`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.logo_qr%22)

> Logo on QR Code

```diff
-二维码标志
+二维码 Logo
```

#### [`ianm-twofactor.admin.settings.logo_qr_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.logo_qr_help%22)

> If logo has been uploaded, this logo will be embedded on the QR code. Leave blank to use the forum logo.

```diff
-留空使用论坛标志，或上传图片。
+如已上传 Logo，将在二维码中使用此 Logo。留空则使用论坛 Logo。
```

#### [`ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens%22)

> Also Kill Developer Tokens

```diff
-同时终止开发者令牌
+同时删除开发者访问令牌
```

#### [`ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens_help%22)

> Also kill developer access tokens that have been inactive for the specified period of time.

```diff
-同时终止不活跃达到指定天数的开发者令牌。
+同时删除超过指定时间未使用的开发者访问令牌。
```

#### [`ianm-twofactor.admin.settings.tokens.heading`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.heading%22)

> Access Tokens

```diff
-访问令牌
+登录会话与访问令牌
```

#### [`ianm-twofactor.admin.settings.tokens.help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.help%22)

> For extended security, you can manage additional behaviour here related to access tokens.

```diff
-你可以在此处管理与访问令牌相关的其他操作，以增强安全性。
+管理长期未活动的登录会话和开发者访问令牌，进一步提升账号安全。
```

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens%22)

> Kill Inactive Tokens

```diff
-终止不活跃的令牌
+自动结束长期未活动的登录会话
```

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_age_days`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_age_days%22)

> Kill Inactive Tokens After (Days)

```diff
-终止指定天数内不活跃的令牌
+会话最长闲置时间（天）
```

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_age_days_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_age_days_help%22)

> The number of days of inactivity after which access tokens will be deleted.

```diff
-在访问令牌不活跃达到指定天数后将其删除。
+登录会话连续闲置超过此天数后将被自动结束。
```

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_help%22)

> Automatically kill access tokens that have been inactive for a specified period of time.

```diff
-自动终止在指定时间段内不活跃的访问令牌。
+超过指定时间未活动的登录会话会自动失效，对应设备需要重新登录。
```

#### [`ianm-twofactor.email.body.status_changed`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.email.body.status_changed%22)

> Hello {recipient\_display\_name},
>
> Two-Factor Authentication has been {type} for your account on {forum\_url}.
>
> If you initiated this action, no further steps are necessary. If you did not authorize this change, please contact the forum administrators immediately.
>

```diff
-{recipient_display_name}，您好！
+你好，{recipient_display_name}：

-您在 {forum_url} 的账号双重认证 {type}。
+你在 {forum_url} 的账号双重身份验证已变更：{type}。

-此操作如非您本人所为，请立即联系论坛管理员。
+如非本人操作，请立即联系论坛管理员。

```

<del>{recipient\_display\_name}，您好！</del><ins>你好，{recipient\_display\_name}：</ins><br /><br /><del>您在</del><ins>你在</ins> {forum\_url}<del> 的账号双重认证</del> <del>{type}。</del><ins>的账号双重身份验证已变更：{type}。</ins><br /><br /><del>此操作如非您本人所为，请立即联系论坛管理员。</del><ins>如非本人操作，请立即联系论坛管理员。</ins><br />

#### [`ianm-twofactor.email.subject.status_changed`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.email.subject.status_changed%22)

> Two-Factor Authentication {type} for your account

```diff
-双重认证 {type}
+你的账号双重身份验证已变更：{type}
```

#### [`ianm-twofactor.forum.log_in.two_factor_placeholder`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.log_in.two_factor_placeholder%22)

> 2FA Token, e.g., 123456

```diff
-验证码
+2FA 验证码，例如 123456
```

#### [`ianm-twofactor.forum.log_in.two_factor_required_message`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.log_in.two_factor_required_message%22)

> A valid 2FA token is required to continue.

```diff
-请输入正确的验证码。
+请输入正确的 2FA 验证码。
```

#### [`ianm-twofactor.forum.security.backup_codes_instruction`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.backup_codes_instruction%22)

> Please save these codes in a secure place. They can be used to access your account if you lose your primary authentication method. They will not be displayed again.

```diff
-一次性救援代码只显示一次，请妥善保存。在验证器 APP 无法使用时，可以使用救援代码登录账号。
+仅显示一次，请妥善保存。如果无法使用主要验证方式，可以使用救援代码访问账号。
```

#### [`ianm-twofactor.forum.security.backup_codes_remaining`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.backup_codes_remaining%22)

> Backup Codes Remaining:

```diff
-救援代码：
+剩余救援代码：
```

#### [`ianm-twofactor.forum.security.cannot_disable`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.cannot_disable%22)

> The current configuration dictates that you cannot disable Two-Factor Authentication.

```diff
-根据管理员要求，您无法关闭双重认证。
+系统当前要求保持 2FA 开启，无法关闭。
```

#### [`ianm-twofactor.forum.security.cannot_disable_tooltip`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.cannot_disable_tooltip%22)

> Cannot disable 2FA

```diff
-无法关闭双重认证
+无法关闭 2FA
```

#### [`ianm-twofactor.forum.security.change_device_description`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.change_device_description%22)

> Move 2FA to a new device

```diff
-将双重认证迁移到新设备
+将 2FA 转移到新设备
```

#### [`ianm-twofactor.forum.security.confirm_disable_2fa_text`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.confirm_disable_2fa_text%22)

> Are you sure you want to disable Two-Factor Authentication?

```diff
-确定要关闭双重认证吗？
+确定要关闭双重身份验证吗？
```

#### [`ianm-twofactor.forum.security.confirm_disable_2fa_text_other_user`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.confirm_disable_2fa_text_other_user%22)

> Are you sure you want to disable Two-Factor Authentication for {username}? This will remove all backup codes and disable 2FA for their account.

```diff
-确定要为 {username} 关闭双重认证，并销毁救援代码吗。
+确定要为 {username} 关闭双重身份验证吗？这将删除其所有救援代码，并关闭该账号的 2FA。
```

确定要为 {username} <del>关闭双重认证，并销毁救援代码吗。</del><ins>关闭双重身份验证吗？这将删除其所有救援代码，并关闭该账号的 2FA。</ins>

#### [`ianm-twofactor.forum.security.confirm_disable_2fa_title`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.confirm_disable_2fa_title%22)

> Confirm Disabling Two-Factor Authentication

```diff
-确认关闭双重认证
+关闭双重身份验证
```

#### [`ianm-twofactor.forum.security.disable_2fa_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.disable_2fa_button%22)

> Disable 2FA

```diff
-关闭双重认证
+关闭 2FA
```

#### [`ianm-twofactor.forum.security.enable_2fa_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.enable_2fa_button%22)

> Enable 2FA

```diff
-启用双重认证
+启用 2FA
```

#### [`ianm-twofactor.forum.security.enable_2fa_modal_text`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.enable_2fa_modal_text%22)

> Scan the QR code below with your authentication app, then enter the provided token to enable Two-Factor Authentication.

```diff
-请使用验证器 APP 扫描下方二维码，并输入动态验证码以启用双重认证。
+使用验证器 App 扫描下方二维码，然后输入 App 生成的验证码以启用 2FA。
```

#### [`ianm-twofactor.forum.security.enter_current_token`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.enter_current_token%22)

> Enter token from current device

```diff
-输入当前设备验证码
+输入当前设备的验证码
```

#### [`ianm-twofactor.forum.security.enter_new_token`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.enter_new_token%22)

> Enter token from new device

```diff
-输入新设备验证码
+输入新设备的验证码
```

#### [`ianm-twofactor.forum.security.loading_qr`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.loading_qr%22)

> Loading QR Code...

```diff
-正在加载二维码……
+正在加载二维码…
```

#### [`ianm-twofactor.forum.security.manual_entry_instruction`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.manual_entry_instruction%22)

> Enter the provided code into your authentication app, then enter the generated token to enable Two-Factor Authentication.

```diff
-请将秘钥导入验证器，并输入动态验证码以启用双重认证。
+将提供的密钥输入验证器，然后填写应用生成的验证码以启用 2FA。
```

#### [`ianm-twofactor.forum.security.manual_tab`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.manual_tab%22)

> Manual Setup

```diff
-手动导入
+手动设置
```

#### [`ianm-twofactor.forum.security.ok_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.ok_button%22)

> Ok

```diff
-好的
+确定
```

#### [`ianm-twofactor.forum.security.qr_code_alt`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.qr_code_alt%22)

> QR Code for Two-Factor Authentication

```diff
-双重认证二维码
+双重身份验证二维码
```

#### [`ianm-twofactor.forum.security.saved_backup_codes_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.saved_backup_codes_button%22)

> I've saved these codes

```diff
-已保存救援代码
+我已保存救援代码
```

#### [`ianm-twofactor.forum.security.scan_new_device_qr`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.scan_new_device_qr%22)

> Scan this QR code with your new authentication device.

```diff
-请使用新的验证设备扫描此二维码。
+使用新设备上的验证器应用扫描此二维码。
```

#### [`ianm-twofactor.forum.security.scan_qr_instruction`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.scan_qr_instruction%22)

> Scan the QR code above with your authentication app, then enter the provided token to enable Two-Factor Authentication.

```diff
-请使用验证器 APP 扫描下方二维码，并输入动态验证码以启用双重认证。
+使用验证器 App 扫描上方二维码，然后输入 App 生成的验证码以启用 2FA。
```

#### [`ianm-twofactor.forum.security.two_factor_apps`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.two_factor_apps%22)

> Apps such as {google}, {authy}, {microsoft}, and more are available for free.

```diff
-请使用 {google}、{authy}、{microsoft}、Bitwarden 等免费应用程序。
+{google}、{authy}、{microsoft} 等验证器应用均可免费使用。
```

#### [`ianm-twofactor.forum.security.two_factor_disabled`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.two_factor_disabled%22)

> 2FA is disabled on this account.

```diff
-双重认证已关闭。
+此账号尚未启用 2FA。
```

#### [`ianm-twofactor.forum.security.two_factor_enabled`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.two_factor_enabled%22)

> 2FA is enabled on this account.

```diff
-双重认证已启用。
+此账号已启用 2FA。
```

#### [`ianm-twofactor.forum.security.two_factor_enabled_confirmation`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.two_factor_enabled_confirmation%22)

> Two-Factor Authentication has been successfully enabled for your account.

```diff
-双重认证已启用。
+已成功为你的账号启用双重身份验证。
```

#### [`ianm-twofactor.forum.security.two_factor_heading`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.two_factor_heading%22)

> 2FA

```diff
-双重认证
+2FA
```

#### [`ianm-twofactor.forum.security.two_factor_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.two_factor_help%22)

> Two-Factor Authentication (2FA) provides an extra layer of security to your account. Once enabled, in addition to your password, you'll be required to enter a token from your authentication app when logging in or carrying out certain other actions. This ensures your account remains secure, even if your password is compromised, as attackers would also need a code (which changes every 30 seconds) to access your account.

```diff
-双重认证 (2FA) 为您提供额外的账户安全保护，在登录时，您需要输入密码，以及验证器 APP 生成的动态验证码。双重认证可以在密码泄露的情况下，有效保护您的账号。
+双重身份验证（2FA）可以在密码之外再增加一道安全验证。启用后，登录或执行某些敏感操作时，还需要输入验证器 App 生成的动态验证码。即使密码泄露，没有这个每 30 秒更新一次的验证码，他人也无法访问你的账号。
```

#### [`ianm-twofactor.forum.security.verify_current_device_message`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.verify_current_device_message%22)

> Please enter a token from your current authentication device to verify your identity.

```diff
-请输入当前验证设备中的验证码以验证身份。
+请输入当前验证设备生成的验证码，以验证你的身份。
```

#### [`ianm-twofactor.forum.security.verify_new_device_message`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.security.verify_new_device_message%22)

> Now enter a token from your new device to complete the change.

```diff
-请输入新设备中的验证码以完成更换。
+输入新设备生成的验证码以完成更换。
```

#### [`ianm-twofactor.forum.user_2fa.alert_message`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.forum.user_2fa.alert_message%22)

> You must enable 2FA to continue accessing your account.

```diff
-请启用双重认证以继续使用账号。
+请启用 2FA 以继续使用账号。
```

#### [`ianm-twofactor.views.reset_password.two_factor_token_label`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.views.reset_password.two_factor_token_label%22)

> 2FA Token

```diff
-验证码
+2FA 验证码
```

<ins>2FA </ins>验证码

#### [`ianm-twofactor.views.two_factor_token.submit_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.views.two_factor_token.submit_button%22)

> Submit Token

```diff
-确定
+提交验证码
```

#### [`ianm-twofactor.views.two_factor_token.title`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/zh_Hans/?q=context%3A%3D%22ianm-twofactor.views.two_factor_token.title%22)

> Two-Factor Authentication

```diff
-双重认证
+双重身份验证
```


### `jslirola-login2seeplus`

#### [`jslirola-login2seeplus.admin.post.title`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.admin.post.title%22)

> Hide content exceeding this length (&lt;em&gt;-1&lt;/em&gt; to show all.)

```diff
-隐藏超过此长度的内容（<em>-1</em> 表示显示全部）
+隐藏超过此长度的帖子内容（设为 <em>-1</em> 则全部可见）
```

#### [`jslirola-login2seeplus.admin.title`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.admin.title%22)

> Login2SeePlus

```diff
-登录后可见 Plus
+Login2SeePlus - 登录可见 Plus
```

<del>登录后可见</del><ins>Login2SeePlus - 登录可见</ins> Plus

#### [`jslirola-login2seeplus.forum.code`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.forum.code%22)

> Login to see the code

```diff
-代码登录后可见
+登录以查看代码
```

#### [`jslirola-login2seeplus.forum.image`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.forum.image%22)

> Login to see the image

```diff
-图片登录后可见
+登录以查看图片
```

#### [`jslirola-login2seeplus.forum.link`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.forum.link%22)

> Login to see the link

```diff
-链接登录后可见
+登录以查看链接
```

#### [`jslirola-login2seeplus.forum.post`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.forum.post%22)

> You have to {login} or {register} to see the full post

```diff
-此内容 {login} 或 {register} 后可见
+完整内容{login}或{register}后可见
```

#### [`jslirola-login2seeplus.forum.post_login`](https://weblate.rob006.net/translate/flarum2/jslirola-login2seeplus/zh_Hans/?q=context%3A%3D%22jslirola-login2seeplus.forum.post_login%22)

> You have to {login} to see the full post

```diff
-{login}以查看全部内容
+完整内容{login}后可见
```


### `linkrobins-birdseye`

#### [`linkrobins-birdseye.admin.settings.geoip_db_path_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-birdseye/zh_Hans/?q=context%3A%3D%22linkrobins-birdseye.admin.settings.geoip_db_path_label%22)

> Country database file (optional)

```diff
-国家或地区数据库文件（可选）
+国家和地区数据库文件（可选）
```


### `maicol07-sso`

#### [`maicol07-sso.admin.settings.client_api_key_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.client_api_key_help%22)

> The API key from your Flarum instance.

```diff
-Flarum 应用程序的 API 密钥。
+该 Flarum 实例的 API 密钥。
```

<ins>该 </ins>Flarum <del>应用程序的</del><ins>实例的</ins> API 密钥。

#### [`maicol07-sso.admin.settings.client_name`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.client_name%22)

> Name

```diff
-客户端名称
+名称
```

#### [`maicol07-sso.admin.settings.client_name_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.client_name_help%22)

> Name of the Flarum instance

```diff
-Flarum 应用程序的名称
+Flarum 实例名称
```

Flarum <del>应用程序的名称</del><ins>实例名称</ins>

#### [`maicol07-sso.admin.settings.client_password_token_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.client_password_token_help%22)

> A random password token to use with the Flarum instance signups.

```diff
-一个随机的密码令牌，用于 Flarum 应用程序的注册。
+用于在该 Flarum 实例注册用户的随机密码令牌。
```

<del>一个随机的密码令牌，用于</del><ins>用于在该</ins> Flarum <del>应用程序的注册。</del><ins>实例注册用户的随机密码令牌。</ins>

#### [`maicol07-sso.admin.settings.client_url_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.client_url_help%22)

> URL of the Flarum instance

```diff
-Flarum 应用程序的 URL
+Flarum 实例 URL
```

Flarum <del>应用程序的</del><ins>实例</ins> URL

#### [`maicol07-sso.admin.settings.client_verify_ssl_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.client_verify_ssl_help%22)

> Verify the Flarum instance SSL status when making requests to it (recommended).

```diff
-在向 Flarum 应用程序发送请求时验证 SSL（推荐）。
+向该 Flarum 实例发送请求时验证其 SSL 证书（推荐）。
```

<del>在向</del><ins>向该</ins> Flarum <del>应用程序发送请求时验证</del><ins>实例发送请求时验证其</ins> <del>SSL（推荐）。</del><ins>SSL 证书（推荐）。</ins>

#### [`maicol07-sso.admin.settings.cookies_prefix`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.cookies_prefix%22)

> Cookies name prefix

```diff
-Cookie 前缀
+Cookie 名称前缀
```

Cookie <del>前缀</del><ins>名称前缀</ins>

#### [`maicol07-sso.admin.settings.jwt_iss`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_iss%22)

> Issuer Domain

```diff
-Issuer Domain
+签发方域名
```

#### [`maicol07-sso.admin.settings.jwt_section_subtitle`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_section_subtitle%22)

> JWT Addon settings

```diff
-JWT Addon 设置
+JWT 附加功能设置
```

JWT <del>Addon 设置</del><ins>附加功能设置</ins>

#### [`maicol07-sso.admin.settings.jwt_signer_key`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_signer_key%22)

> Signer key

```diff
-Signer key
+签名密钥
```

#### [`maicol07-sso.admin.settings.jwt_signing_algorithm`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_signing_algorithm%22)

> Signing Method

```diff
-签名方式
+签名算法
```

#### [`maicol07-sso.admin.settings.login_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.login_url%22)

> Login URL

```diff
-登录链接
+登录网址
```

#### [`maicol07-sso.admin.settings.logout_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.logout_url%22)

> Logout URL

```diff
-退出登录链接
+退出登录网址
```

#### [`maicol07-sso.admin.settings.manage_account_btn_open_in_new_tab`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.manage_account_btn_open_in_new_tab%22)

> Open account management in a new tab

```diff
-在新标签页中打开账户管理
+在新标签页打开账号管理页面
```

#### [`maicol07-sso.admin.settings.manage_account_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.manage_account_url%22)

> Manage account URL

```diff
-管理账户连接
+账号管理网址
```

#### [`maicol07-sso.admin.settings.provider_mode`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.provider_mode%22)

> Enable this option to use the provider mode (SSO between Flarum instances). Allows other Flarum instances to login an user of this Flarum instance. This will disable the standard SSO feature with other websites.

```diff
-其他 Flarum 站点如需使用本站账号登录，请启用此项以切换到服务提供商模式（Flarum 站点间的单点登录）。此功能会禁用当前站点的其他第三方账号登录。
+如果要让其他 Flarum 实例使用本站账号登录，请启用服务提供方模式（Flarum 实例间单点登录）。启用后，将停用本站与其他网站之间的常规 SSO 功能。
```

<del>其他</del><ins>如果要让其他</ins> Flarum <del>站点如需使用本站账号登录，请启用此项以切换到服务提供商模式（Flarum</del><ins>实例使用本站账号登录，请启用服务提供方模式（Flarum</ins> <del>站点间的单点登录）。此功能会禁用当前站点的其他第三方账号登录。</del><ins>实例间单点登录）。启用后，将停用本站与其他网站之间的常规 SSO 功能。</ins>

#### [`maicol07-sso.admin.settings.signup_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.signup_url%22)

> Signup URL

```diff
-注册链接
+注册网址
```

#### [`maicol07-sso.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.admin.settings.title%22)

> SSO Settings

```diff
-单点登录（SSO）设置
+SSO - 单点登录设置
```


### `michaelbelgium-ai-autoreply`

#### [`michaelbelgium-ai-autoreply.admin.permissions.use_chatgpt_assistant_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.permissions.use_chatgpt_assistant_label%22)

> Use AI assistant

```diff
-使用AI助手
+使用 AI 助手
```

#### [`michaelbelgium-ai-autoreply.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.api_key_help%22)

> Get the API key from &lt;a&gt;{platform}&lt;/a&gt;.

```diff
-从<a>{platform}</a>取得API密钥。
+前往 <a>{platform}</a> 获取 API 密钥。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_help%22)

> When enabled, AI replies only at discussion start. When disabled, the discussion becomes a chat between the OP and the assistant; the assistant replies to every OP post.

```diff
-如果启用此选项，AI将只会在讨论开始时启用，如果禁用此选项，讨论将演变为原帖作者（OP）与 AI 助手之间的对话模式，助手将回复作者的每一条帖子。
+启用后，AI 只会在讨论发起时回复一次。关闭后，讨论会变成讨论发起者与 AI 助手之间的持续对话，讨论发起者之后每次发帖，AI 都会回复。
```

<del>如果启用此选项，AI将只会在讨论开始时启用，如果禁用此选项，讨论将演变为原帖作者（OP）与</del><ins>启用后，AI 只会在讨论发起时回复一次。关闭后，讨论会变成讨论发起者与</ins> AI <del>助手之间的对话模式，助手将回复作者的每一条帖子。</del><ins>助手之间的持续对话，讨论发起者之后每次发帖，AI 都会回复。</ins>

#### [`michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_label%22)

> Enable on discussion start

```diff
-在讨论开始时启用
+仅回复讨论首帖
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enabled_tags_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enabled_tags_help%22)

> Select in which tags the assistant will generate responses.

```diff
-选择助手将在哪些标签下生成回复。
+选择 AI 助手会在哪些标签下自动回复。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enabled_tags_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enabled_tags_label%22)

> Tags

```diff
-标签
+生效标签
```

#### [`michaelbelgium-ai-autoreply.admin.settings.max_tokens_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.max_tokens_help%22)

> &lt;a&gt;What are tokens and how to count them?&lt;/a&gt;

```diff
-<a>什么是Tokens？如何计算Tokens数量？</a>
+<a>什么是 Token？如何计算 Token 数量？</a>
```

#### [`michaelbelgium-ai-autoreply.admin.settings.max_tokens_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.max_tokens_label%22)

> Max Tokens

```diff
-最大Tokens数
+最大 Token 数
```

#### [`michaelbelgium-ai-autoreply.admin.settings.model_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.model_help%22)

> Learn more about &lt;a&gt;{platform} models&lt;/a&gt; (default: &lt;code&gt;{model}&lt;/code&gt;)..

```diff
-了解更多关于<a>{platform} 模型</a>的信息（默认：<code>{model}</code>）。
+查看 <a>{platform} 模型</a>的详细信息（默认：<code>{model}</code>）。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_help%22)

> Select the AI platform to use.

```diff
-选择要使用的AI平台。
+选择用于生成回复的 AI 平台。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_label%22)

> Platform

```diff
-平台
+AI 平台
```

<ins>AI </ins>平台

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_help%22)

> Provide context and instructions to the Assistant, such as specifying a particular goal or role.

```diff
-向助手提供背景信息和指令，例如指定特定的目标或角色。
+设置 AI 助手的背景信息和行为指令，例如指定其身份、目标或回复方式。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_label%22)

> System prompt

```diff
-系统Prompt
+系统提示词
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_placeholder`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_placeholder%22)

> You are a helpful assistant on a Flarum forum.

```diff
-你是一个有用的人工智能助手在一个基于Flarum的网络论坛里。
+你是 Flarum 论坛中的一名乐于助人的助手。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.temperature_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.temperature_help%22)

> Controls the randomness. The range is usually between 0 and 2 but some platforms have other ranges.

```diff
-控制随机性。范围通常在 0 到 2 之间，但某些平台可能有其他范围。
+控制生成结果的随机程度。通常取值范围为 0 至 2，但部分平台可能有所不同。
```

<del>控制随机性。范围通常在</del><ins>控制生成结果的随机程度。通常取值范围为</ins> 0<del> 到</del> <del>2</del><ins>至</ins> <del>之间，但某些平台可能有其他范围。</del><ins>2，但部分平台可能有所不同。</ins>

#### [`michaelbelgium-ai-autoreply.admin.settings.temperature_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.temperature_label%22)

> Temperature

```diff
-温度
+温度值
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_help%22)

> Text that will be displayed below the assistant user.

```diff
-将显示在AI助理用户下方的内容。
+显示在 AI 助手用户名下方的文字。
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_label%22)

> User assistant badge

```diff
-AI助手助手用户标识
+AI 助手标识
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_help%22)

> Enter the user id that will be used to generate AI responses.

```diff
-请输入用于发布 AI 生成内容的指定用户 ID。
+填写用于发布 AI 回复的用户账号 ID。
```

<del>请输入用于发布</del><ins>填写用于发布</ins> AI <del>生成内容的指定用户</del><ins>回复的用户账号</ins> ID。

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/zh_Hans/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_label%22)

> User assistant

```diff
-用户助手
+AI 助手账号
```


### `michaelbelgium-discussion-views`

#### [`core.forum.index_sort.popular_button`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22core.forum.index_sort.popular_button%22)

> Popular

```diff
-最多翻阅
+热门
```

#### [`core.forum.index_sort.unpopular_button`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22core.forum.index_sort.unpopular_button%22)

> Unpopular

```diff
-最少翻阅
+冷门
```

#### [`michaelbelgium-discussion-views.admin.permissions.reset_views_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.permissions.reset_views_label%22)

> Reset discussion views

```diff
-重置主题浏览量
+重置讨论浏览量
```

#### [`michaelbelgium-discussion-views.admin.permissions.view_number_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.permissions.view_number_label%22)

> View discussion viewcount

```diff
-查看主题浏览量
+查看讨论浏览量
```

#### [`michaelbelgium-discussion-views.admin.settings.abbr_numbers_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.abbr_numbers_text%22)

> If enabled, high view numbers will be abbreviated (eg 1000 = 1K)

```diff
-启用此项以缩写计数（如 1000 = 1 千）
+启用后，较大的浏览量将以缩写形式显示（例如 1000 显示为 1K）
```

<del>启用此项以缩写计数（如</del><ins>启用后，较大的浏览量将以缩写形式显示（例如</ins> 1000<del> =</del> <del>1</del><ins>显示为</ins> <del>千）</del><ins>1K）</ins>

#### [`michaelbelgium-discussion-views.admin.settings.ignore_crawlers_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.ignore_crawlers_label%22)

> Ignore bots/crawlers

```diff
-忽略机器人/爬虫
+忽略机器人和爬虫
```

#### [`michaelbelgium-discussion-views.admin.settings.max_viewcount_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.max_viewcount_label%22)

> Maximum viewlist items

```diff
-「足迹」列表最多展示人数
+「足迹」列表展示人数上限
```

#### [`michaelbelgium-discussion-views.admin.settings.max_viewcount_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.max_viewcount_text%22)

> Set a maximum amount of users in a viewlist (applies to footer and sidebar viewlist)

```diff
-展示条目上限（侧边栏和页脚足迹列表）
+设置浏览者列表最多显示多少人，同时适用于首帖底部和侧边栏
```

#### [`michaelbelgium-discussion-views.admin.settings.show_filter_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.show_filter_label%22)

> Enable (un)popular sort field

```diff
-添加「最多翻阅/最少翻阅」排序项
+启用热门 / 冷门排序
```

#### [`michaelbelgium-discussion-views.admin.settings.show_footer_viewlist_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.show_footer_viewlist_label%22)

> Enable footer viewlist

```diff
-在帖子页脚展示「足迹」
+在首帖底部展示「足迹」
```

#### [`michaelbelgium-discussion-views.admin.settings.show_footer_viewlist_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.show_footer_viewlist_text%22)

> Enable a list of viewers in the footer of the initial post of a discussion

```diff
-在首帖底部展示访客列表
+在讨论首帖底部显示浏览者列表
```

#### [`michaelbelgium-discussion-views.admin.settings.show_viewlist_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.show_viewlist_label%22)

> Enable viewlist

```diff
-在主题帖展示「足迹」
+展示「足迹」
```

#### [`michaelbelgium-discussion-views.admin.settings.show_viewlist_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.show_viewlist_text%22)

> Enable a list of latest viewers in the sidebar of a discussion

```diff
-启用主题帖侧边栏列表视图
+在讨论侧边栏显示最近浏览者列表
```

#### [`michaelbelgium-discussion-views.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.title%22)

> Discussionviews settings

```diff
-主题浏览量设置
+讨论浏览量设置
```

#### [`michaelbelgium-discussion-views.admin.settings.track_guests_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.track_guests_label%22)

> Track guests

```diff
-记录未登录访客
+统计未登录访客
```

#### [`michaelbelgium-discussion-views.admin.settings.track_unique_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.track_unique_label%22)

> Track unique views

```diff
-记录首次查阅（UV）
+按 IP 去重浏览量
```

#### [`michaelbelgium-discussion-views.admin.settings.track_unique_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.admin.settings.track_unique_text%22)

> Increase views based on ip-address

```diff
-基于 IP 计算浏览量
+根据 IP 地址去重统计浏览量
```

<del>基于</del><ins>根据</ins> IP <del>计算浏览量</del><ins>地址去重统计浏览量</ins>

#### [`michaelbelgium-discussion-views.forum.modal_resetviews.label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.forum.modal_resetviews.label%22)

> {count, plural, one {This will remove {count} view of this discussion. Continue?} other {This will remove {count} views of this discussion. Continue?}}

```diff
-这将清除这个主题的 {count, plural, one {{count}} other {{count}}} 浏览量，确定继续吗？
+这将清除该讨论的 {count} 次浏览记录。确定继续吗？
```

#### [`michaelbelgium-discussion-views.forum.modal_resetviews.submit_button`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.forum.modal_resetviews.submit_button%22)

> Yes, remove all

```diff
-确定清除
+确定，全部清除
```

#### [`michaelbelgium-discussion-views.forum.modal_resetviews.title`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.forum.modal_resetviews.title%22)

> Reset discussion view count

```diff
-重置主题浏览量
+重置讨论浏览量
```

#### [`michaelbelgium-discussion-views.forum.post.modal_title_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-discussion-views.forum.post.modal_title_text%22)

> Users who last viewed this discussion

```diff
-足迹
+最近浏览此讨论的用户
```


### `michaelbelgium-mybb-to-flarum`

#### [`michaelbelgium-mybb-to-flarum.admin.content.description_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.description_text%22)

> Migrate a MyBB forum into this Flarum instance. Fill in the required data, aftwards click on "migrate".

```diff
-将 MyBB 论坛迁移到 Flarum 实例。请填写相关信息，然后点击「迁移」。
+将 MyBB 论坛迁移到当前 Flarum 实例。填写必填信息后，点击「迁移」。
```

将 MyBB <del>论坛迁移到</del><ins>论坛迁移到当前</ins> Flarum <del>实例。请填写相关信息，然后点击「迁移」。</del><ins>实例。填写必填信息后，点击「迁移」。</ins>

#### [`michaelbelgium-mybb-to-flarum.admin.content.form.general.migrate_threadsPosts_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.form.general.migrate_threadsPosts_label%22)

> Migrate threads and posts

```diff
-迁移主题帖和回帖
+迁移讨论帖和回帖
```

#### [`michaelbelgium-mybb-to-flarum.admin.content.form.mybb.db_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.form.mybb.db_label%22)

> Database name

```diff
-数据库名
+数据库名称
```

#### [`michaelbelgium-mybb-to-flarum.admin.content.form.mybb.prefix_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.form.mybb.prefix_label%22)

> Table prefix

```diff
-表前缀
+数据表前缀
```

#### [`michaelbelgium-mybb-to-flarum.admin.content.form.options.migrate_soft_posts_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.form.options.migrate_soft_posts_label%22)

> Migrate soft deleted posts

```diff
-迁移软删除回帖
+迁移软删除的回帖
```

#### [`michaelbelgium-mybb-to-flarum.admin.content.form.options.migrate_soft_threads_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.form.options.migrate_soft_threads_label%22)

> Migrate soft deleted threads

```diff
-迁移软删除主题帖
+迁移软删除的讨论帖
```

#### [`michaelbelgium-mybb-to-flarum.admin.content.form.options.title`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-mybb-to-flarum/zh_Hans/?q=context%3A%3D%22michaelbelgium-mybb-to-flarum.admin.content.form.options.title%22)

> Other options

```diff
-其他选择
+其他选项
```


### `michaelbelgium-profile-views`

#### [`michaelbelgium-flarum-profile-views.admin.settings.max_viewcount_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-profile-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-flarum-profile-views.admin.settings.max_viewcount_label%22)

> Maximum visitorlist items

```diff
-足迹列表的最多展示人数
+访问列表最多展示人数
```

#### [`michaelbelgium-flarum-profile-views.admin.settings.track_guests_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-profile-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-flarum-profile-views.admin.settings.track_guests_label%22)

> Track guests

```diff
-记录未登录访客
+统计未登录用户
```

#### [`michaelbelgium-flarum-profile-views.forum.user.view_count_text`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-profile-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-flarum-profile-views.forum.user.view_count_text%22)

> {viewcount, plural, one {viewed {viewcount} time} other {viewed {viewcount} times}}

```diff
-访问量 {viewcount, plural, one {{viewcount}} other {{viewcount}}}
+访问量 {viewcount}
```

访问量 <del>{viewcount, plural, one {{viewcount}} other {{viewcount}}}</del><ins>{viewcount}</ins>

#### [`michaelbelgium-flarum-profile-views.forum.user.viewlist.guest`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-profile-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-flarum-profile-views.forum.user.viewlist.guest%22)

> Guest

```diff
-访客
+未登录用户
```

#### [`michaelbelgium-flarum-profile-views.forum.user.viewlist.title`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-profile-views/zh_Hans/?q=context%3A%3D%22michaelbelgium-flarum-profile-views.forum.user.viewlist.title%22)

> Last visitors

```diff
-足迹
+最近来客
```


### `migratetoflarum-fake-data`

#### [`migratetoflarum-fake-data.api.no-discussions-matched`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.api.no-discussions-matched%22)

> No discussions matched

```diff
-讨论不存在
+没有匹配的讨论
```

#### [`migratetoflarum-fake-data.api.no-users-matched`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.api.no-users-matched%22)

> No users matched

```diff
-用户不存在
+没有匹配的用户
```

#### [`migratetoflarum-fake-data.forum.generator.title`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.forum.generator.title%22)

> Generate fake replies

```diff
-生成虚假回复
+生成模拟回复
```

#### [`migratetoflarum-fake-data.forum.link.generate-replies`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.forum.link.generate-replies%22)

> Generate fake replies

```diff
-生成虚假回复
+生成模拟回复
```

#### [`migratetoflarum-fake-data.lib.generator.bulk-mode`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.bulk-mode%22)

> Bulk mode

```diff
-复用
+批量复用
```

#### [`migratetoflarum-fake-data.lib.generator.bulk-mode-description`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.bulk-mode-description%22)

> Generates a single random value and re-use it for every entry

```diff
-随机生成单条数据，并应用于全部条目
+生成一次数据，并重复用于所有条目
```

#### [`migratetoflarum-fake-data.lib.generator.date`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.date%22)

> Date seed

```diff
-种子日期
+日期生成设置
```

#### [`migratetoflarum-fake-data.lib.generator.date-interval-placeholder`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.date-interval-placeholder%22)

> Interval (default: 1 seconds)

```diff
-间隔（默认 1 秒）
+时间间隔（默认 1 秒）
```

<del>间隔（默认</del><ins>时间间隔（默认</ins> 1 秒）

#### [`migratetoflarum-fake-data.lib.generator.date-start-placeholder`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.date-start-placeholder%22)

> Start date (default: now)

```diff
-起始日期（默认当天）
+起始日期（默认当前时间）
```

#### [`migratetoflarum-fake-data.lib.generator.discussion-count`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.discussion-count%22)

> Number of discussions to create

```diff
-讨论生成数量
+讨论生成数
```

#### [`migratetoflarum-fake-data.lib.generator.discussion-tags`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.discussion-tags%22)

> Tags for new discussions

```diff
-讨论标签
+新讨论的标签
```

#### [`migratetoflarum-fake-data.lib.generator.post-count`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.post-count%22)

> Number of posts to create

```diff
-回帖生成数量
+回帖生成数
```

#### [`migratetoflarum-fake-data.lib.generator.refresh`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.refresh%22)

> Close and refresh page

```diff
-完成并刷新页面
+关闭并刷新页面
```

#### [`migratetoflarum-fake-data.lib.generator.reset`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.reset%22)

> Generation complete! Click to reset form

```diff
-生成成功！点击重置表单
+数据生成完成！点击重置表单
```

#### [`migratetoflarum-fake-data.lib.generator.user-count`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/zh_Hans/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.user-count%22)

> Number of users to create

```diff
-用户生成数量
+用户生成数
```


### `pianotell-flamoji`

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation%22)

> Are you sure you want to delete this emoji?

```diff
-确认删除此表情吗？
+确定要删除此表情吗？
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label%22)

> Path or URL

```diff
-路径或网址
+路径或 URL
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label%22)

> Shortcode

```diff
-替换文本
+表情代码
```

#### [`pianotell-flamoji.admin.custom_emojis_section.export_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.export_json_button%22)

> Export JSON

```diff
-导出JSON
+导出 JSON
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_emojis_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_emojis_message%22)

> This will import emoji configurations only. You need to upload emoji images manually.

```diff
-此操作只导入表情配置。表情包图片需要手动上传。
+此操作只会导入表情配置，表情图片需手动上传。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_json_button%22)

> Import JSON

```diff
-导入JSON
+导入 JSON
```

#### [`pianotell-flamoji.admin.settings.auto_hide_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_label%22)

> Auto hide

```diff
-自动隐藏
+选择后自动隐藏
```

#### [`pianotell-flamoji.admin.settings.auto_hide_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_text%22)

> Hide the picker when an emoji is selected.

```diff
-选择表情后自动隐藏选择器。
+选择表情后自动关闭表情选择器。
```

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
-表情包设置
+表情设置
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_label%22)

> Frequent emoji rows

```diff
-常用表情栏
+常用表情行数
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_text%22)

> Number of rows of recently/frequently used emojis to display at the top of the picker (1-10).

```diff
-设置显示在选择顶部的最近常用表情行数（1-10）。
+设置表情选择器顶部显示的最近或常用表情行数，可设置为 1 至 10 行。
```

#### [`pianotell-flamoji.admin.settings.general_ui_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.general_ui_settings_heading%22)

> General UI Settings

```diff
-一般UI设置
+界面设置
```

#### [`pianotell-flamoji.admin.settings.picker_set_native`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_native%22)

> Native

```diff
-系统
+系统原生
```

#### [`pianotell-flamoji.admin.settings.picker_set_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_text%22)

> How emojis appear in the picker. "Auto" matches the Flarum Emoji extension — Twemoji when it's enabled, native OS fonts otherwise — so the picker mirrors what posts actually display.

```diff
-选择器中表情的呈现风格。选择「自动」时，为Flarum表情插件的推特表情风格（当启用时）；否则显示为系统字体风格。选择器与帖子中的呈现风格一致。
+设置选择器中表情的呈现风格。「自动」会与 Flarum Emoji 扩展保持一致使用 Twemoji。如未启用该扩展则使用操作系统原生表情，以防止选择器与帖子的显示效果不一致。
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_text%22)

> Show the row of category icons at the top of the picker. Useful to disable when only one or two categories are enabled.

```diff
-在选项器顶部，单独显示一行分类图标。当只有一两个分类时，可禁用此项。
+在表情选择器顶部显示分类图标。只有一两个分类时，可关闭此项。
```

#### [`pianotell-flamoji.admin.settings.show_preview_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_label%22)

> Show preview section

```diff
-显示预览栏
+显示预览区域
```

#### [`pianotell-flamoji.admin.settings.show_preview_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_text%22)

> Show the emoji name, shortcode, and skin-tone selector in a preview pane below the picker grid.

```diff
-在选择器下方显示表情的名称、短代码和肤色设置器。
+在表情选择器下方显示预览区域，其中包含表情名称、表情代码和肤色选择器。
```

#### [`pianotell-flamoji.admin.settings.show_recents_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_label%22)

> Show (and save) frequently used emojis

```diff
-保存并展示常用表情
+显示并保存常用表情
```

#### [`pianotell-flamoji.admin.settings.show_recents_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_text%22)

> Show the Frequently Used tab at the top of the picker. It starts empty and fills as each member picks emojis. Each user's frequents are saved in their own browser only.

```diff
-在选择器顶部，显示常用表情选项卡。用户的常用表情，仅存储在浏览器本地。
+在表情选择器顶部显示「常用」分类。用户的常用记录仅存储在浏览器本地。
```

#### [`pianotell-flamoji.admin.settings.show_search_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_text%22)

> Show the search box at the top of the picker.

```diff
-在选择器顶部显示搜索框。
+在表情选择器顶部显示搜索框。
```

#### [`pianotell-flamoji.admin.settings.show_variants_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_text%22)

> Some emojis have skin tone variants. When an emoji is selected in the picker that has variants, a variant popup will appear so the user can select the desired variant. This has no effect in sticker mode, since custom emoji don't have skin-tone variants.

```diff
-部分表情具有肤色变体。当所选表情有肤色变体时，将会显示肤色弹窗供用户选择。
+部分表情支持不同肤色。选择这类表情时会弹出肤色选项供用户选择。贴纸模式下此设置无效，因为自定义表情不支持肤色变体。
```

#### [`pianotell-flamoji.admin.settings.specify_categories_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_label%22)

> Specify categories

```diff
-选择分类
+指定显示分类
```

#### [`pianotell-flamoji.admin.settings.specify_categories_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_text%22)

> You can specify a list of categories here, and the picker will only show those categories.

```diff
-选择器只显示勾选的分类。
+在此指定要显示的分类，表情选择器将只显示勾选的分类。
```

#### [`pianotell-flamoji.forum.composer.picker_load_error`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_error%22)

> Could not load the emoji picker. Please try again.

```diff
-无法加载表情选择器。请重试。
+无法加载表情选择器，请重试。
```

#### [`pianotell-flamoji.forum.composer.picker_loading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_loading%22)

> Loading emojis…

```diff
-表情加载中…
+正在加载表情…
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_message%22)

> No emojis found

```diff
-没有表情
+没有找到表情
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_title%22)

> Oh no!

```diff
-不好了！
+糟糕！
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium%22)

> Medium

```diff
-普通
+中等
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark%22)

> Medium-Dark

```diff
-便深色
+偏深色
```

#### [`pianotell-flamoji.ref.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.foods%22)

> Food &amp; Drink

```diff
-食物和饮品
+食物与饮料
```

#### [`pianotell-flamoji.ref.emoji_categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.frequent%22)

> Frequently Used

```diff
-常用表情
+常用
```

#### [`pianotell-flamoji.ref.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.nature%22)

> Animals &amp; Nature

```diff
-动物和自然
+动物与自然
```

#### [`pianotell-flamoji.ref.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.objects%22)

> Objects

```diff
-物体
+物品
```

#### [`pianotell-flamoji.ref.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.people%22)

> Smileys &amp; People

```diff
-笑脸和人物
+笑脸与人物
```

#### [`pianotell-flamoji.ref.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.places%22)

> Travel &amp; Places

```diff
-旅行和地点
+旅行与地点
```


### `quasimo-llms-txt`

#### [`quasimo-llms-txt.admin.settings.custom_intro_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_help%22)

> Leave blank to omit. Plain text or Markdown supported.

```diff
-支持 Markdown，会显示在文件开头。
+留空则不显示。支持纯文本或 Markdown。
```

#### [`quasimo-llms-txt.admin.settings.custom_intro_placeholder`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_placeholder%22)

> Enter an optional introduction that will appear below the forum title in both files.

```diff
-写在 llms.txt 开头的介绍文本...
+输入可选的介绍文字，将显示在两个文件开头的论坛标题下方。
```

#### [`quasimo-llms-txt.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.enabled_help%22)

> Serve a concise index of your forum at {url} — links to categories and recent discussions.

```diff
-为 LLM 生成 llms.txt 文件。
+在 {url} 提供论坛索引，包含分类和近期讨论的链接。
```

#### [`quasimo-llms-txt.admin.settings.full_enabled_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.full_enabled_help%22)

> Serve the full text of all discussions at {url} — includes every post's content.

```diff
-同时生成 llms-full.txt。
+在 {url} 提供所有讨论的完整文本，包含回帖内容。
```

#### [`quasimo-llms-txt.admin.settings.full_enabled_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.full_enabled_label%22)

> Enable llms-full.txt

```diff
-启用完整版
+启用 llms-full.txt
```

#### [`quasimo-llms-txt.admin.settings.max_discussions_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_discussions_help%22)

> Maximum number of discussions to list (1–1000). Default: 100.

```diff
-在 llms.txt 中最多包含的讨论数量。
+最多列出多少个讨论，可设置为 1 至 1000。默认：100。
```

#### [`quasimo-llms-txt.admin.settings.max_discussions_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_discussions_label%22)

> Max discussions to include

```diff
-最大讨论数
+最多收录讨论数
```

#### [`quasimo-llms-txt.admin.settings.max_posts_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_posts_help%22)

> Maximum number of posts to include per discussion in the full file (1–500). Default: 50.

```diff
-每个讨论最多包含的帖子数量。
+完整文件中每个讨论最多收录多少篇帖子，可设置为 1 至 500。默认：50。
```

#### [`quasimo-llms-txt.admin.settings.max_posts_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_posts_label%22)

> Max posts per discussion (llms-full.txt only)

```diff
-最大帖子数
+每篇讨论最多收录帖子数（仅 llms-full.txt）
```

#### [`quasimo-llms-txt.admin.settings.open_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.open_label%22)

> Open in new tab

```diff
-公开访问
+在新标签页中打开
```

#### [`quasimo-llms-txt.admin.settings.sort_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_help%22)

> How discussions are sorted in both generated files.

```diff
-讨论在 llms.txt 中的排序方式。
+设置两个生成文件中的讨论排序方式。
```

#### [`quasimo-llms-txt.admin.settings.sort_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_label%22)

> Discussion sort order

```diff
-排序方式
+讨论排序方式
```

#### [`quasimo-llms-txt.admin.settings.sort_latest`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_latest%22)

> Latest activity

```diff
-按最新排序
+最新回复
```

#### [`quasimo-llms-txt.admin.settings.sort_top`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_top%22)

> Most replies

```diff
-按热度排序
+回帖最多
```

#### [`quasimo-llms-txt.admin.settings.urls_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.urls_help%22)

> Once enabled, the following URLs will serve LLM-friendly content about your forum.

```diff
-每行一个 URL，会包含在生成的 llms.txt 中。
+启用后，可通过以下地址访问适合大语言模型读取的论坛内容。
```

#### [`quasimo-llms-txt.admin.settings.urls_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/zh_Hans/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.urls_label%22)

> Endpoint URLs

```diff
-额外 URL 列表
+访问地址
```


### `ralkage-account-lockout`

#### [`ralkage-account-lockout.admin.permissions.unlock_users_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.permissions.unlock_users_label%22)

> Unlock locked accounts

```diff
-解锁用户账户
+解锁被锁定的账号
```

#### [`ralkage-account-lockout.admin.settings.lockout_duration_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_duration_help%22)

> How long accounts stay locked. Only applies when lockout mode is set to Timed.

```diff
-临时锁定时长，0 表示永久锁定。
+账号锁定持续时长。仅适用于定时解锁。
```

#### [`ralkage-account-lockout.admin.settings.lockout_duration_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_duration_label%22)

> Lockout Duration (minutes)

```diff
-锁定持续时间（分钟）
+锁定时长（分钟）
```

#### [`ralkage-account-lockout.admin.settings.lockout_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_mode_help%22)

> Timed: auto-unlocks after duration. Manual: requires admin/moderator to unlock.

```diff
-临时锁定或永久锁定。
+定时：等待指定时长后自动解锁。手动：需要管理员或版主手动解锁。
```

#### [`ralkage-account-lockout.admin.settings.lockout_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_mode_label%22)

> Lockout Mode

```diff
-锁定模式
+锁定方式
```

#### [`ralkage-account-lockout.admin.settings.max_attempts_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.max_attempts_help%22)

> Number of consecutive failed login attempts before an account is locked.

```diff
-锁定前允许的失败登录次数。
+账号被锁定前允许连续登录失败的次数。
```

#### [`ralkage-account-lockout.admin.settings.max_attempts_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.max_attempts_label%22)

> Maximum Failed Login Attempts

```diff
-最大尝试次数
+连续登录失败次数上限
```

#### [`ralkage-account-lockout.admin.users.locked_tooltip`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.users.locked_tooltip%22)

> This account is locked

```diff
-此账户已被锁定
+此账号已锁定
```

#### [`ralkage-account-lockout.admin.users.unlock_confirmation`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.admin.users.unlock_confirmation%22)

> Are you sure you want to unlock {username}?

```diff
-确定要解锁 {username}账户吗？
+确定要解锁 {username} 的账号吗？
```

确定要解锁 <del>{username}账户吗？</del><ins>{username} 的账号吗？</ins>

#### [`ralkage-account-lockout.api.error.locked_manual`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.api.error.locked_manual%22)

> Account is locked. Contact an administrator.

```diff
-账户已被管理员锁定，无法登录。
+账号已锁定，请联系管理员。
```

#### [`ralkage-account-lockout.api.error.locked_timed`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.api.error.locked_timed%22)

> Account is locked. Try again in {minutes} minute(s).

```diff
-账户已被临时锁定，请稍后再试。
+账号已锁定，请在 {minutes} 分钟后重试。
```

#### [`ralkage-account-lockout.forum.log_in.locked_manual`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.locked_manual%22)

> This account has been locked. Please contact an administrator.

```diff
-账户已被管理员锁定。
+此账号已被锁定，请联系管理员。
```

#### [`ralkage-account-lockout.forum.log_in.locked_timed`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.locked_timed%22)

> This account has been locked due to too many failed login attempts. Please try again in {minutes} minute(s).

```diff
-账户已被临时锁定，请 {minutes} 分钟后重试。
+由于登录失败次数过多，此账号已被锁定。请在 {minutes} 分钟后重试。
```

<del>账户已被临时锁定，请</del><ins>由于登录失败次数过多，此账号已被锁定。请在</ins> {minutes} 分钟后重试。

#### [`ralkage-account-lockout.forum.unlock_modal.locked_since`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.locked_since%22)

> Locked since {date}

```diff
-锁定时间 {date}
+锁定于 {date}
```

<del>锁定时间</del><ins>锁定于</ins> {date}

#### [`ralkage-account-lockout.forum.unlock_modal.locked_until`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.locked_until%22)

> Auto-unlock at {date}

```diff
-锁定至 {date}
+将于 {date} 自动解锁
```

<del>锁定至</del><ins>将于</ins> {date}<ins> 自动解锁</ins>

#### [`ralkage-account-lockout.forum.unlock_modal.manually_locked`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.manually_locked%22)

> This account is manually locked and requires an admin or moderator to unlock it.

```diff
-此账户已被手动锁定，需要管理员或版主才能解锁。
+此账号不会自动解锁，需要管理员或版主手动解锁。
```

#### [`ralkage-account-lockout.forum.unlock_modal.title`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.title%22)

> Unlock {username}

```diff
-账户锁定详情
+解锁 {username}
```

#### [`ralkage-account-lockout.forum.unlock_modal.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.unlock_button%22)

> Unlock Account

```diff
-解锁
+解锁账号
```

#### [`ralkage-account-lockout.forum.user_badge.locked_tooltip`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.user_badge.locked_tooltip%22)

> Account Locked

```diff
-账户已被锁定
+账号已锁定
```

#### [`ralkage-account-lockout.forum.user_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.user_controls.unlock_button%22)

> Unlock

```diff
-解锁账户
+解锁
```


### `ralkage-ad-management`

#### [`ralkage-ad-management.admin.ads.alt_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.alt_text%22)

> Alt Text

```diff
-替换文本 (Alt)
+替代文字
```

#### [`ralkage-ad-management.admin.ads.approve_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.approve_image%22)

> Approve Image Change

```diff
-批准图片修改
+批准图片更换
```

#### [`ralkage-ad-management.admin.ads.content_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.content_help%22)

> For HTML and AdSense ad types. Paste your ad code here.

```diff
-适用于 HTML 或 AdSense 类型。请在此处粘贴广告代码。
+适用于 HTML 和 AdSense 类型的广告。请在此粘贴广告代码。
```

适用于 HTML <del>或</del><ins>和</ins> AdSense <del>类型。请在此处粘贴广告代码。</del><ins>类型的广告。请在此粘贴广告代码。</ins>

#### [`ralkage-ad-management.admin.ads.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.empty%22)

> No advertisements found.

```diff
-未找到广告内容。
+暂无广告
```

#### [`ralkage-ad-management.admin.ads.filter.active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.active%22)

> Active

```diff
-运行中
+已启用
```

#### [`ralkage-ad-management.admin.ads.filter.inactive`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.filter.inactive%22)

> Inactive

```diff
-已停止
+已停用
```

#### [`ralkage-ad-management.admin.ads.group_visibility`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.group_visibility%22)

> Group Visibility

```diff
-用户组可见性
+可见用户组
```

#### [`ralkage-ad-management.admin.ads.group_visibility_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.group_visibility_help%22)

> Comma-separated group IDs. Leave empty to show to all groups.

```diff
-以逗号分隔的用户组 ID。留空则对所有效户显示。
+填写用户组 ID，用英文逗号分隔。留空则对所有用户组显示。
```

#### [`ralkage-ad-management.admin.ads.height`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.height%22)

> Height (px)

```diff
-高度 (px)
+高度（px）
```

#### [`ralkage-ad-management.admin.ads.is_active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.is_active%22)

> Active

```diff
-启用状态
+启用
```

#### [`ralkage-ad-management.admin.ads.max_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_clicks%22)

> Max Clicks

```diff
-最大点击量
+最大点击次数
```

#### [`ralkage-ad-management.admin.ads.max_clicks_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_clicks_help%22)

> Ad will be deactivated after this many clicks. Leave empty for unlimited.

```diff
-点击次数达到此数值后广告将自动停用。留空则无限制。
+达到此点击次数后，广告将自动停用。留空则不限制。
```

#### [`ralkage-ad-management.admin.ads.max_image_changes`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_image_changes%22)

> Max Image Changes

```diff
-最大图片修改次数
+图片更换次数上限
```

#### [`ralkage-ad-management.admin.ads.max_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_impressions%22)

> Max Impressions

```diff
-最大展示量
+最大展示次数
```

#### [`ralkage-ad-management.admin.ads.max_impressions_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_impressions_help%22)

> Ad will be deactivated after this many views. Leave empty for unlimited.

```diff
-展示次数达到此数值后广告将自动停用。留空则无限制。
+达到此展示次数后，广告将自动停用。留空则不限制。
```

#### [`ralkage-ad-management.admin.ads.owner_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.owner_help%22)

> Username of the ad owner. Leave empty for no owner.

```diff
-广告所有者的用户名。留空则无归属。
+填写广告主的用户名。留空则不指定广告主。
```

#### [`ralkage-ad-management.admin.ads.pending_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.pending_badge%22)

> Pending ({count})

```diff
-待审核 ({count})
+待审核（{count}）
```

#### [`ralkage-ad-management.admin.ads.pending_image_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.pending_image_badge%22)

> Image Pending

```diff
-图片待审
+图片待审核
```

#### [`ralkage-ad-management.admin.ads.priority_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.priority_help%22)

> Higher priority ads are shown first. Default is 0.

```diff
-数值越高，广告显示越靠前。默认为 0。
+优先级越高的广告越靠前展示。默认为 0。
```

<del>数值越高，广告显示越靠前。默认为</del><ins>优先级越高的广告越靠前展示。默认为</ins> 0。

#### [`ralkage-ad-management.admin.ads.reject_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.reject_image%22)

> Reject Image Change

```diff
-拒绝图片修改
+拒绝图片更换
```

#### [`ralkage-ad-management.admin.ads.select_zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.select_zone%22)

> Select a zone...

```diff
-选择一个广告位...
+选择广告位…
```

#### [`ralkage-ad-management.admin.ads.stats.ctr`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.stats.ctr%22)

> CTR

```diff
-点击率 (CTR)
+点击率
```

点击率<del> (CTR)</del>

#### [`ralkage-ad-management.admin.ads.statuses.active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.statuses.active%22)

> Active

```diff
-运行中
+已启用
```

#### [`ralkage-ad-management.admin.ads.statuses.inactive`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.statuses.inactive%22)

> Inactive

```diff
-已停止
+已停用
```

#### [`ralkage-ad-management.admin.ads.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.title%22)

> Advertisements

```diff
-广告列表
+广告
```

#### [`ralkage-ad-management.admin.ads.types.html`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.types.html%22)

> HTML

```diff
-自定义 HTML
+HTML
```

<del>自定义 </del>HTML

#### [`ralkage-ad-management.admin.ads.types.image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.types.image%22)

> Image

```diff
-图片广告
+图片
```

#### [`ralkage-ad-management.admin.ads.width`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.width%22)

> Width (px)

```diff
-宽度 (px)
+宽度（px）
```

#### [`ralkage-ad-management.admin.ads.zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.ads.zone%22)

> Zone

```diff
-所属广告位
+广告位
```

#### [`ralkage-ad-management.admin.analytics.clicks_by_day`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.clicks_by_day%22)

> Clicks by Day

```diff
-每日点击趋势
+每日点击量
```

#### [`ralkage-ad-management.admin.analytics.clicks_header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.clicks_header%22)

> Clicks

```diff
-点击数
+点击量
```

#### [`ralkage-ad-management.admin.analytics.no_data`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.no_data%22)

> No analytics data available for this period.

```diff
-当前周期内暂无统计数据。
+此时段暂无统计数据。
```

#### [`ralkage-ad-management.admin.analytics.period`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.period%22)

> Period

```diff
-统计周期
+统计时段
```

#### [`ralkage-ad-management.admin.analytics.period_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.period_clicks%22)

> Clicks (Period)

```diff
-周期内点击量
+所选时段点击量
```

#### [`ralkage-ad-management.admin.analytics.select_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.select_ad%22)

> Select an advertisement...

```diff
-选择一条广告...
+选择广告…
```

#### [`ralkage-ad-management.admin.analytics.total_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.total_clicks%22)

> Total Clicks (All Time)

```diff
-累计点击量 (全时段)
+累计点击量
```

累计点击量<del> (全时段)</del>

#### [`ralkage-ad-management.admin.analytics.total_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.total_impressions%22)

> Total Impressions (All Time)

```diff
-累计展示量 (全时段)
+累计展示量
```

累计展示量<del> (全时段)</del>

#### [`ralkage-ad-management.admin.save`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.save%22)

> Save

```diff
-保存设置
+保存
```

#### [`ralkage-ad-management.admin.settings.adsense_publisher_id_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.adsense_publisher_id_help%22)

> Your AdSense publisher ID (e.g., ca-pub-1234567890).

```diff
-您的 AdSense 发布商 ID（例如：ca-pub-1234567890）。
+你的 AdSense 发布商 ID，例如 ca-pub-1234567890。
```

<del>您的</del><ins>你的</ins> AdSense 发布商 <del>ID（例如：ca-pub-1234567890）。</del><ins>ID，例如 ca-pub-1234567890。</ins>

#### [`ralkage-ad-management.admin.settings.allowed_image_formats_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.allowed_image_formats_help%22)

> Comma-separated list of allowed image file extensions (e.g., jpg,jpeg,png,webp,gif).

```diff
-以逗号分隔的扩展名列表（例如：jpg,jpeg,png,webp,gif）。
+填写允许上传的图片文件扩展名，用英文逗号分隔，例如 jpg,jpeg,png,webp,gif。
```

#### [`ralkage-ad-management.admin.settings.between_posts_interval`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.between_posts_interval%22)

> Posts Between Ads

```diff
-帖子显示间隔
+广告间隔帖子数
```

#### [`ralkage-ad-management.admin.settings.between_posts_interval_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.between_posts_interval_help%22)

> Show an ad after every N posts in discussions. Set to 0 to disable.

```diff
-在讨论页中每隔 N 个帖子显示一次广告。设为 0 则禁用。
+在讨论中每隔 N 个帖子显示一次广告。设为 0 可禁用。
```

<del>在讨论页中每隔</del><ins>在讨论中每隔</ins> N 个帖子显示一次广告。设为 0 <del>则禁用。</del><ins>可禁用。</ins>

#### [`ralkage-ad-management.admin.settings.compression_method`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_method%22)

> Compression Method

```diff
-压缩方法
+压缩方式
```

#### [`ralkage-ad-management.admin.settings.compression_method_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_method_help%22)

> PHP GD is built-in. reSmush.it uses an external API for lossless optimization (requires curl).

```diff
-PHP GD 为内置方案。reSmush.it 使用外部 API 进行无损优化（需开启 curl）。
+PHP GD 为服务器内置方式；reSmush.it 使用外部 API 进行无损优化，需要 curl。
```

PHP GD <del>为内置方案。reSmush.it</del><ins>为服务器内置方式；reSmush.it</ins> 使用外部 API <del>进行无损优化（需开启</del><ins>进行无损优化，需要</ins> <del>curl）。</del><ins>curl。</ins>

#### [`ralkage-ad-management.admin.settings.compression_quality_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.compression_quality_help%22)

> Image quality after compression (1-100). Lower values = smaller files. Recommended: 80-90.

```diff
-压缩后的图片质量 (1-100)。数值越低文件越小。推荐值：80-90。
+设置图片压缩后的质量（1-100）。数值越低，文件越小。建议 80-90。
```

#### [`ralkage-ad-management.admin.settings.default_max_image_changes`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.default_max_image_changes%22)

> Default Max Image Changes

```diff
-默认最大图片修改次数
+默认图片更换次数上限
```

#### [`ralkage-ad-management.admin.settings.default_max_image_changes_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.default_max_image_changes_help%22)

> Maximum number of times an ad owner can change their ad image. Set to 0 for unlimited.

```diff
-广告主允许修改广告图片的最高次数。设为 0 表示无限制。
+广告主最多可以更换广告图片的次数。设为 0 则不限制。
```

<del>广告主允许修改广告图片的最高次数。设为</del><ins>广告主最多可以更换广告图片的次数。设为</ins> 0 <del>表示无限制。</del><ins>则不限制。</ins>

#### [`ralkage-ad-management.admin.settings.enable_compression_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.enable_compression_help%22)

> Automatically compress uploaded ad images to reduce file size.

```diff
-自动压缩上传的广告图片以减小文件体积。
+自动压缩上传的广告图片以减小文件大小。
```

#### [`ralkage-ad-management.admin.settings.expiration_body_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_body_template%22)

> Body Template

```diff
-正文模板
+邮件正文模板
```

#### [`ralkage-ad-management.admin.settings.expiration_reminder_days`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_reminder_days%22)

> Expiration Reminder (Days)

```diff
-到期提醒（天）
+到期提醒（提前天数）
```

#### [`ralkage-ad-management.admin.settings.expiration_reminder_days_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_reminder_days_help%22)

> Send email reminders to ad owners this many days before their ad expires. Set to 0 to disable.

```diff
-在广告到期前若干天向广告主发送邮件提醒。设为 0 则禁用。
+在广告到期前多少天向广告主发送邮件提醒。设为 0 可禁用。
```

<del>在广告到期前若干天向广告主发送邮件提醒。设为</del><ins>在广告到期前多少天向广告主发送邮件提醒。设为</ins> 0 <del>则禁用。</del><ins>可禁用。</ins>

#### [`ralkage-ad-management.admin.settings.expiration_subject_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_subject_template%22)

> Subject Template

```diff
-主题模板
+邮件主题模板
```

#### [`ralkage-ad-management.admin.settings.expiration_templates_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_templates_title%22)

> Expiration Email Templates

```diff
-广告到期邮件模板
+到期提醒邮件模板
```

#### [`ralkage-ad-management.admin.settings.notifications_info`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.notifications_info%22)

> To send notifications, add a cron job: php flarum ad-management:send-notifications

```diff
-若要发送通知，请添加 Cron 任务：php flarum ad-management:send-notifications
+如需发送通知，请添加定时任务：php flarum ad-management:send-notifications
```

<del>若要发送通知，请添加 Cron 任务：php</del><ins>如需发送通知，请添加定时任务：php</ins> flarum ad-management:send-notifications

#### [`ralkage-ad-management.admin.settings.performance_body_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_body_template%22)

> Body Template

```diff
-正文模板
+邮件正文模板
```

#### [`ralkage-ad-management.admin.settings.performance_subject_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_subject_template%22)

> Subject Template

```diff
-主题模板
+邮件主题模板
```

#### [`ralkage-ad-management.admin.settings.performance_templates_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_templates_title%22)

> Performance Report Templates

```diff
-表现报告邮件模板
+效果报告邮件模板
```

#### [`ralkage-ad-management.admin.settings.require_image_approval`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.require_image_approval%22)

> Require Approval for Image Changes

```diff
-修改图片需要审核
+图片更换需审核
```

#### [`ralkage-ad-management.admin.settings.require_image_approval_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.require_image_approval_help%22)

> When enabled, image changes submitted by ad owners will be queued for admin review before going live.

```diff
-启用后，广告主提交的图片修改将进入审核队列，经管理员批准后才会生效。
+启用后，广告主提交的新图片需经管理员审核后才会正式替换。
```

#### [`ralkage-ad-management.admin.settings.send_performance_reports`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.send_performance_reports%22)

> Send Performance Reports

```diff
-发送表现报告
+发送效果报告
```

#### [`ralkage-ad-management.admin.settings.send_performance_reports_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.send_performance_reports_help%22)

> Include performance summaries (impressions, clicks, CTR) when sending notification emails.

```diff
-在发送通知邮件时包含表现摘要（展示量、点击量、点击率）。
+发送通知邮件时附带广告效果汇总，包括展示量、点击量和点击率。
```

#### [`ralkage-ad-management.admin.settings.show_sponsored_label`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.show_sponsored_label%22)

> Show "Sponsored" Label

```diff
-显示“赞助”标签
+显示「赞助」标签
```

#### [`ralkage-ad-management.admin.settings.show_sponsored_label_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.show_sponsored_label_help%22)

> Display a label beneath ads. Uncheck to hide it entirely.

```diff
-在广告下方显示标识。取消勾选可将其完全隐藏。
+在广告下方显示标签。关闭此项则隐藏。
```

#### [`ralkage-ad-management.admin.settings.sponsored_label_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.sponsored_label_text%22)

> Sponsored Label Text

```diff
-赞助标签文本
+赞助标签文字
```

#### [`ralkage-ad-management.admin.settings.sponsored_label_text_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.sponsored_label_text_help%22)

> Custom text for the label (e.g. "Advertisement"). Leave blank to use the default translation.

```diff
-自定义标签内容（例如“广告”）。留空则使用系统默认翻译。
+自定义标签文字，例如「广告」。留空则使用默认翻译。
```

#### [`ralkage-ad-management.admin.settings.templates_placeholders_expiry`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.templates_placeholders_expiry%22)

> Available placeholders: {forum\_title}, {forum\_url}, {owner\_name}, {owner\_username}, {ad\_name}, {days\_left}, {expiry\_date}, {impressions}, {clicks}. Leave blank to use the default template.

```diff
-可用占位符：{forum_title}, {forum_url}, {owner_name}, {owner_username}, {ad_name}, {days_left}, {expiry_date}, {impressions}, {clicks}。留空则使用默认模板。
+可插入数据：{forum_title}、{forum_url}、{owner_name}、{owner_username}、{ad_name}、{days_left}、{expiry_date}、{impressions}、{clicks}。留空则使用默认模板。
```

#### [`ralkage-ad-management.admin.settings.templates_placeholders_performance`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.templates_placeholders_performance%22)

> Available placeholders: {forum\_title}, {forum\_url}, {owner\_name}, {owner\_username}, {ad\_count}, {total\_impressions}, {total\_clicks}, {ctr}, {ad\_lines}. Leave blank to use the default template.

```diff
-可用占位符：{forum_title}, {forum_url}, {owner_name}, {owner_username}, {ad_count}, {total_impressions}, {total_clicks}, {ctr}, {ad_lines}。留空则使用默认模板。
+可插入数据：{forum_title}、{forum_url}、{owner_name}、{owner_username}、{ad_count}、{total_impressions}、{total_clicks}、{ctr}、{ad_lines}。留空则使用默认模板。
```

#### [`ralkage-ad-management.admin.settings.track_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_clicks%22)

> Track Clicks

```diff
-追踪点击次数
+统计点击量
```

#### [`ralkage-ad-management.admin.settings.track_clicks_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_clicks_help%22)

> Track when users click on ads.

```diff
-统计用户点击广告的次数。
+记录用户点击广告的次数。
```

#### [`ralkage-ad-management.admin.settings.track_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_impressions%22)

> Track Impressions

```diff
-追踪展示次数
+统计展示量
```

#### [`ralkage-ad-management.admin.settings.track_impressions_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.settings.track_impressions_help%22)

> Count how many times each ad is displayed.

```diff
-统计每条广告的曝光次数。
+统计每则广告的曝光次数。
```

#### [`ralkage-ad-management.admin.tabs.ads`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.ads%22)

> Advertisements

```diff
-广告列表
+广告
```

#### [`ralkage-ad-management.admin.tabs.analytics`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.analytics%22)

> Analytics

```diff
-数据统计
+数据分析
```

#### [`ralkage-ad-management.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.settings%22)

> Settings

```diff
-常规设置
+设置
```

#### [`ralkage-ad-management.admin.zones.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.confirm_delete%22)

> Are you sure you want to delete this zone? All ads in this zone will also be deleted.

```diff
-确定要删除此广告位吗？该位置下的所有广告也将被一并删除。
+确定要删除此广告位吗？旗下所有广告也会一并删除。
```

#### [`ralkage-ad-management.admin.zones.dimensions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.dimensions%22)

> Dimensions

```diff
-尺寸限制
+尺寸
```

#### [`ralkage-ad-management.admin.zones.display_mode`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_mode%22)

> Display Mode

```diff
-显示模式
+展示方式
```

#### [`ralkage-ad-management.admin.zones.display_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_mode_help%22)

> Rotate shows one random ad per page navigation. Stack shows all ads in the zone at once.

```diff
-“轮播”模式下每次页面导航随机显示一个广告；“堆叠”模式下同时显示该位置的所有广告。
+随机轮换：每次页面跳转随机显示一则广告；全部堆叠：同时显示该广告位中的所有广告。
```

#### [`ralkage-ad-management.admin.zones.display_modes.rotate`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_modes.rotate%22)

> Rotate

```diff
-随机轮播
+随机轮换
```

#### [`ralkage-ad-management.admin.zones.is_active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.is_active%22)

> Active

```diff
-已激活
+启用
```

#### [`ralkage-ad-management.admin.zones.label`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.label%22)

> Display Label

```diff
-显示标签
+显示名称
```

#### [`ralkage-ad-management.admin.zones.max_height`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.max_height%22)

> Max Height (px)

```diff
-最大高度 (px)
+最大高度（px）
```

#### [`ralkage-ad-management.admin.zones.max_width`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.max_width%22)

> Max Width (px)

```diff
-最大宽度 (px)
+最大宽度（px）
```

#### [`ralkage-ad-management.admin.zones.name`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.name%22)

> Zone Name

```diff
-标识名称
+广告位标识
```

#### [`ralkage-ad-management.admin.zones.name_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.name_help%22)

> Unique identifier (lowercase, no spaces). Used in zone tags.

```diff
-唯一标识符（仅限小写字母，不得包含空格）。用于标签调用。
+唯一标识，只能使用小写字母且不能包含空格，用于广告位标签。
```

#### [`ralkage-ad-management.admin.zones.position`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.position%22)

> Position

```diff
-显示位置
+展示位置
```

#### [`ralkage-ad-management.admin.zones.positions.above_footer`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.above_footer%22)

> Above Footer

```diff
-页脚上方 (Above Footer)
+页脚上方
```

页脚上方<del> (Above Footer)</del>

#### [`ralkage-ad-management.admin.zones.positions.below_header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.below_header%22)

> Below Header

```diff
-页眉下方 (Below Header)
+顶部导航栏下方
```

#### [`ralkage-ad-management.admin.zones.positions.between_posts`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.between_posts%22)

> Between Posts

```diff
-帖子之间 (Between Posts)
+帖子之间
```

帖子之间<del> (Between Posts)</del>

#### [`ralkage-ad-management.admin.zones.positions.custom`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.custom%22)

> Custom

```diff
-自定义位置 (Custom)
+自定义
```

#### [`ralkage-ad-management.admin.zones.positions.footer`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.footer%22)

> Footer

```diff
-页脚 (Footer)
+页脚内
```

#### [`ralkage-ad-management.admin.zones.positions.header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.header%22)

> Header

```diff
-页眉 (Header)
+顶部导航栏上方
```

#### [`ralkage-ad-management.admin.zones.positions.sidebar`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.sidebar%22)

> Sidebar

```diff
-侧边栏 (Sidebar)
+侧边栏
```

侧边栏<del> (Sidebar)</del>

#### [`ralkage-ad-management.admin.zones.shortcode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.shortcode_help%22)

> Paste this tag in any post or discussion to display ads from a specific zone inline.

```diff
-将此标签粘贴到任何帖子或讨论中，即可在正文内联显示该广告位的广告。
+将此广告代码粘贴到帖子中，即可在正文内显示指定广告位的广告。
```

#### [`ralkage-ad-management.admin.zones.shortcode_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.shortcode_title%22)

> Post Shortcode:

```diff
-帖子短代码：
+广告代码：
```

#### [`ralkage-ad-management.admin.zones.sort_order`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.sort_order%22)

> Sort Order

```diff
-排序权重
+排序
```

#### [`ralkage-ad-management.admin.zones.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.admin.zones.title%22)

> Ad Zones

```diff
-广告位管理
+广告位
```

#### [`ralkage-ad-management.forum.ad.sponsored`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ad.sponsored%22)

> Sponsored

```diff
-赞助商
+赞助
```

#### [`ralkage-ad-management.forum.ads.alt_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.alt_text%22)

> Alt Text

```diff
-替换文字 (Alt Text)
+替代文字
```

#### [`ralkage-ad-management.forum.ads.image_url`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.image_url%22)

> Image URL

```diff
-图片链接
+图片 URL
```

#### [`ralkage-ad-management.forum.ads.link_url`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.link_url%22)

> Link URL

```diff
-点击跳转链接
+跳转链接
```

#### [`ralkage-ad-management.forum.ads.select_zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.select_zone%22)

> Select a zone...

```diff
-选择广告位...
+选择广告位…
```

#### [`ralkage-ad-management.forum.ads.zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.ads.zone%22)

> Zone

```diff
-投放位置
+广告位
```

#### [`ralkage-ad-management.forum.page.edit_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.edit_image%22)

> Change Image

```diff
-修改图片
+更换图片
```

#### [`ralkage-ad-management.forum.page.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.empty%22)

> You don't have any advertisements yet.

```diff
-您目前还没有发布任何广告。
+你还没有发布广告。
```

#### [`ralkage-ad-management.forum.page.image_changes_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.image_changes_remaining%22)

> {count} image changes remaining

```diff
-剩余可修改次数：{count}
+还可更换图片 {count} 次
```

#### [`ralkage-ad-management.forum.page.no_changes_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.no_changes_remaining%22)

> No image changes remaining

```diff
-修改次数已耗尽
+已无法继续更换图片
```

#### [`ralkage-ad-management.forum.page.stats`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.stats%22)

> Stats

```diff
-数据统计
+数据
```

#### [`ralkage-ad-management.forum.page.status.active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.active%22)

> Active

```diff
-运行中
+投放中
```

#### [`ralkage-ad-management.forum.page.status.inactive`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.inactive%22)

> Inactive

```diff
-已停止
+已停用
```

#### [`ralkage-ad-management.forum.page.status.scheduled`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.status.scheduled%22)

> Scheduled

```diff
-计划中
+待投放
```

#### [`ralkage-ad-management.forum.page.submit_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.submit_ad%22)

> Submit Ad

```diff
-提交新广告
+提交广告
```

#### [`ralkage-ad-management.forum.page.submit_pending_notice`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.submit_pending_notice%22)

> Your ad will be reviewed by an administrator before going live.

```diff
-您的广告在上线前将由管理员进行审核。
+你的广告将在管理员审核通过后开始投放。
```

#### [`ralkage-ad-management.forum.page.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/zh_Hans/?q=context%3A%3D%22ralkage-ad-management.forum.page.title%22)

> My Advertisements

```diff
-我的广告管理
+我的广告
```


### `ralkage-cap-captcha`

#### [`ralkage-cap-captcha.admin.settings.api_endpoint_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.api_endpoint_help%22)

> Your Cap Standalone instance URL with site key, e.g. https://cap.example.com/your-site-key/

```diff
-您的 Cap 独立实例 URL（包含 site key），例如：https://cap.example.com/your-site-key/
+填写包含站点密钥的 Cap Standalone 实例地址，例如 https://cap.example.com/your-site-key/
```

<del>您的</del><ins>填写包含站点密钥的</ins> Cap<del> 独立实例</del> <del>URL（包含</del><ins>Standalone</ins> <del>site</del><ins>实例地址，例如</ins> <del>key），例如：https://cap.example.com/your-site-key/</del><ins>https://cap.example.com/your-site-key/</ins>

#### [`ralkage-cap-captcha.admin.settings.api_endpoint_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.api_endpoint_label%22)

> Cap API Endpoint

```diff
-Cap API Endpoint
+Cap API 地址
```

Cap API <del>Endpoint</del><ins>地址</ins>

#### [`ralkage-cap-captcha.admin.settings.protect_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_login_help%22)

> Show Cap widget on the login form.

```diff
-在登录表单中显示 Cap 组件。
+在登录窗口中显示 Cap 验证组件。
```

<del>在登录表单中显示</del><ins>在登录窗口中显示</ins> Cap <del>组件。</del><ins>验证组件。</ins>

#### [`ralkage-cap-captcha.admin.settings.protect_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_login_label%22)

> Require CAPTCHA on login

```diff
-登录时启用验证码
+登录时要求人机验证
```

#### [`ralkage-cap-captcha.admin.settings.protect_registration_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_registration_help%22)

> Show Cap widget on the sign-up form.

```diff
-在注册表单中显示 Cap 组件。
+在注册窗口中显示 Cap 验证组件。
```

<del>在注册表单中显示</del><ins>在注册窗口中显示</ins> Cap <del>组件。</del><ins>验证组件。</ins>

#### [`ralkage-cap-captcha.admin.settings.protect_registration_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.protect_registration_label%22)

> Require CAPTCHA on registration

```diff
-注册时启用验证码
+注册时要求人机验证
```

#### [`ralkage-cap-captcha.admin.settings.secret_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.secret_key_help%22)

> Your site key's secret from the Cap dashboard.

```diff
-从 Cap 管理面板中获取的 Secret Key。
+填写 Cap 控制台中该站点密钥对应的密钥。
```

<del>从</del><ins>填写</ins> Cap<del> 管理面板中获取的 Secret</del> <del>Key。</del><ins>控制台中该站点密钥对应的密钥。</ins>

#### [`ralkage-cap-captcha.admin.settings.secret_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.secret_key_label%22)

> Cap Secret Key

```diff
-Cap Secret Key
+Cap 密钥
```

Cap <del>Secret Key</del><ins>密钥</ins>

#### [`ralkage-cap-captcha.api.invalid_captcha`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.api.invalid_captcha%22)

> CAPTCHA verification failed. Please complete the challenge and try again.

```diff
-验证码校验失败。请重新验证并重试。
+人机验证失败，请完成验证后重试。
```

#### [`ralkage-cap-captcha.forum.captcha_required`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/zh_Hans/?q=context%3A%3D%22ralkage-cap-captcha.forum.captcha_required%22)

> Please verify you're human by completing the CAPTCHA challenge.

```diff
-请完成验证码校验以验证身份。
+请完成人机验证后继续。
```


### `ralkage-civility-filter`

#### [`ralkage-civility-filter.admin.log.action`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.action%22)

> Action

```diff
-操作
+处理结果
```

#### [`ralkage-civility-filter.admin.log.actions_col`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.actions_col%22)

> Actions

```diff
-管理操作
+操作
```

#### [`ralkage-civility-filter.admin.log.all_actions`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.all_actions%22)

> All Actions

```diff
-所有操作
+全部处理结果
```

#### [`ralkage-civility-filter.admin.log.allowed`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.allowed%22)

> Allowed

```diff
-允许通过
+已放行
```

#### [`ralkage-civility-filter.admin.log.approve`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.approve%22)

> Approve

```diff
-批准
+通过
```

#### [`ralkage-civility-filter.admin.log.approved`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.approved%22)

> Approved

```diff
-已批准
+已通过
```

#### [`ralkage-civility-filter.admin.log.categories`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.categories%22)

> Categories

```diff
-分类
+类别
```

#### [`ralkage-civility-filter.admin.log.clear_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.clear_confirm%22)

> Are you sure you want to clear the entire civility log?

```diff
-确定要清空全部文明检查日志吗？
+确定要清空所有文明度检测日志吗？
```

#### [`ralkage-civility-filter.admin.log.discussion`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.discussion%22)

> Discussion

```diff
-所属讨论
+讨论
```

#### [`ralkage-civility-filter.admin.log.filter_action`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.filter_action%22)

> Filter by action

```diff
-按操作过滤
+按处理结果筛选
```

#### [`ralkage-civility-filter.admin.log.moderated`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.moderated%22)

> Moderated

```diff
-已进入审核
+已送审
```

#### [`ralkage-civility-filter.admin.log.no_logs`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.no_logs%22)

> No civility log entries found.

```diff
-未找到日志记录。
+暂无文明度检测记录。
```

#### [`ralkage-civility-filter.admin.log.score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.score%22)

> Score

```diff
-评分
+风险评分
```

#### [`ralkage-civility-filter.admin.log.suspend`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.suspend%22)

> Suspend

```diff
-封禁用户
+封禁
```

#### [`ralkage-civility-filter.admin.log.title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.log.title%22)

> Civility Filter Log

```diff
-文明过滤器日志
+文明度检测日志
```

#### [`ralkage-civility-filter.admin.nav.civility_log`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.nav.civility_log%22)

> Civility Log

```diff
-文明检查日志
+文明度检测日志
```

#### [`ralkage-civility-filter.admin.nav.stats`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.nav.stats%22)

> Statistics

```diff
-数据统计
+统计
```

#### [`ralkage-civility-filter.admin.permissions.bypass_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.permissions.bypass_label%22)

> Bypass Civility Filter

```diff
-绕过文明过滤器
+绕过文明发言检测
```

#### [`ralkage-civility-filter.admin.settings.ai_provider_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.ai_provider_help%22)

> Select which AI provider to use. Set the corresponding API key below.

```diff
-选择要使用的 AI 服务商，并在下方填写相应的 API Key。
+选择要使用的 AI 服务商，并在下方填写对应的 API 密钥。
```

选择要使用的 AI <del>服务商，并在下方填写相应的</del><ins>服务商，并在下方填写对应的</ins> API <del>Key。</del><ins>密钥。</ins>

#### [`ralkage-civility-filter.admin.settings.ai_provider_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.ai_provider_label%22)

> AI Provider

```diff
-AI 提供商
+AI 服务商
```

AI <del>提供商</del><ins>服务商</ins>

#### [`ralkage-civility-filter.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.api_key_help%22)

> Your Anthropic API key for Claude models.

```diff
-用于调用 Claude 模型的 Anthropic API Key。
+用于调用 Claude 模型的 Anthropic API 密钥。
```

用于调用 Claude 模型的 Anthropic API <del>Key。</del><ins>密钥。</ins>

#### [`ralkage-civility-filter.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.api_key_label%22)

> Anthropic API Key

```diff
-Anthropic API Key
+Anthropic API 密钥
```

Anthropic API <del>Key</del><ins>密钥</ins>

#### [`ralkage-civility-filter.admin.settings.auto_suspend_days_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_days_help%22)

> How many days to suspend a user. Default: 3

```diff
-用户被封禁的天数。默认值：3
+自动封禁用户天数。默认：3
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_threshold_help%22)

> Automatically suspend a user after this many violations within the window. Set to 0 to disable.

```diff
-用户在窗口期内违规次数达到此值后自动封禁。设为 0 禁用。
+用户在统计周期内达到此违规次数后自动封禁。设为 0 可禁用。
```

<del>用户在窗口期内违规次数达到此值后自动封禁。设为</del><ins>用户在统计周期内达到此违规次数后自动封禁。设为</ins> 0 <del>禁用。</del><ins>可禁用。</ins>

#### [`ralkage-civility-filter.admin.settings.auto_suspend_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_threshold_label%22)

> Auto-Suspend After X Violations

```diff
-自动封禁违规阈值
+累计违规多少次后自动封禁
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_window_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_window_help%22)

> Count violations within this many days. Default: 7

```diff
-统计此天数内的违规次数。默认值：7
+统计最近多少天内的违规次数。默认：7
```

#### [`ralkage-civility-filter.admin.settings.auto_suspend_window_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.auto_suspend_window_label%22)

> Auto-Suspend Window (days)

```diff
-自动封禁统计窗口（天）
+违规统计周期（天）
```

#### [`ralkage-civility-filter.admin.settings.block_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.block_threshold_help%22)

> Score at or above this level will block the post entirely. Default: 95

```diff
-评分达到或超过此分值将直接拦截发布。默认值：95
+风险评分达到或超过此值时，将直接拦截帖子。默认：95
```

#### [`ralkage-civility-filter.admin.settings.block_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.block_threshold_label%22)

> Block Threshold (0-100)

```diff
-拦截阈值 (0-100)
+拦截阈值（0-100）
```

#### [`ralkage-civility-filter.admin.settings.custom_prompt_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.custom_prompt_help%22)

> Override the default analysis prompt. Must instruct the AI to return JSON with score, categories, and reason fields. Leave empty for default.

```diff
-覆盖默认的分析指令。必须指示 AI 返回包含 score、categories 和 reason 字段的 JSON。留空使用默认值。
+替换默认的分析提示词。请务必要求 AI 返回包含 score、categories 和 reason 字段的 JSON。留空则使用默认提示词。
```

<del>覆盖默认的分析指令。必须指示</del><ins>替换默认的分析提示词。请务必要求</ins> AI 返回包含 score、categories 和 reason 字段的 <del>JSON。留空使用默认值。</del><ins>JSON。留空则使用默认提示词。</ins>

#### [`ralkage-civility-filter.admin.settings.custom_prompt_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.custom_prompt_label%22)

> Custom AI Prompt

```diff
-自定义 AI Prompt
+自定义 AI 提示词
```

自定义 AI <del>Prompt</del><ins>提示词</ins>

#### [`ralkage-civility-filter.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.enabled_help%22)

> Master switch to enable or disable the civility filter.

```diff
-开启或关闭文明过滤器的总开关。
+开启或关闭文明发言过滤功能。
```

#### [`ralkage-civility-filter.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.enabled_label%22)

> Enable Civility Filter

```diff
-启用文明过滤器
+启用文明发言过滤器
```

#### [`ralkage-civility-filter.admin.settings.hold_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.hold_threshold_help%22)

> Score at or above this level will hold the post for moderation. Default: 80

```diff
-评分达到或超过此分值将进入人工审核队列。默认值：80
+风险评分达到或超过此值时，将帖子移送审核。默认：80
```

#### [`ralkage-civility-filter.admin.settings.hold_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.hold_threshold_label%22)

> Hold/Moderate Threshold (0-100)

```diff
-审核阈值 (0-100)
+送审阈值（0-100）
```

#### [`ralkage-civility-filter.admin.settings.log_all_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.log_all_help%22)

> Log all civility checks, including posts that pass. When disabled, only flagged posts are logged.

```diff
-记录所有文明检查，包括通过检查的帖子。禁用后仅记录被标记的帖子。
+记录所有文明度检测结果，包括正常通过的帖子。关闭后只记录被标记的帖子。
```

#### [`ralkage-civility-filter.admin.settings.log_all_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.log_all_label%22)

> Log All Checks

```diff
-记录所有检查
+记录所有检测
```

#### [`ralkage-civility-filter.admin.settings.model_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.model_help%22)

> Select a model matching your chosen provider.

```diff
-选择与您所选提供商匹配的模型。
+选择与所选 AI 服务商对应的模型。
```

#### [`ralkage-civility-filter.admin.settings.monitored_tags_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.monitored_tags_help%22)

> Select tags to monitor. Leave empty to monitor all tags.

```diff
-选择要监控的标签。留空则监控所有标签。
+选择要检测的标签。留空则检测所有标签。
```

#### [`ralkage-civility-filter.admin.settings.monitored_tags_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.monitored_tags_label%22)

> Monitored Tags

```diff
-监控标签
+检测标签
```

#### [`ralkage-civility-filter.admin.settings.openai_api_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openai_api_key_help%22)

> Your OpenAI API key for GPT models.

```diff
-用于调用 GPT 模型的 OpenAI API Key。
+用于调用 GPT 模型的 OpenAI API 密钥。
```

用于调用 GPT 模型的 OpenAI API <del>Key。</del><ins>密钥。</ins>

#### [`ralkage-civility-filter.admin.settings.openai_api_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openai_api_key_label%22)

> OpenAI API Key

```diff
-OpenAI API Key
+OpenAI API 密钥
```

OpenAI API <del>Key</del><ins>密钥</ins>

#### [`ralkage-civility-filter.admin.settings.openrouter_api_key_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openrouter_api_key_help%22)

> Your OpenRouter API key. Access 200+ models from one API.

```diff
-您的 OpenRouter API Key，可一站式访问 200 多个模型。
+你的 OpenRouter API 密钥，通过聚合平台 API 使用 200 多种模型。
```

<del>您的</del><ins>你的</ins> OpenRouter API <del>Key，可一站式访问</del><ins>密钥，通过聚合平台 API 使用</ins> 200 <del>多个模型。</del><ins>多种模型。</ins>

#### [`ralkage-civility-filter.admin.settings.openrouter_api_key_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.openrouter_api_key_label%22)

> OpenRouter API Key

```diff
-OpenRouter API Key
+OpenRouter API 密钥
```

OpenRouter API <del>Key</del><ins>密钥</ins>

#### [`ralkage-civility-filter.admin.settings.rate_limit_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.rate_limit_help%22)

> Maximum AI API calls per hour. Posts will pass through unchecked if limit is reached. Set to 0 for unlimited.

```diff
-每小时最大 AI 调用次数。达到限制后帖子将不经检查直接发布。设为 0 无限制。
+每小时最多调用 AI API 的次数。达到上限后不检测新帖，直接放行。设为 0 则不限制。
```

<del>每小时最大</del><ins>每小时最多调用</ins> AI <del>调用次数。达到限制后帖子将不经检查直接发布。设为</del><ins>API 的次数。达到上限后不检测新帖，直接放行。设为</ins> 0 <del>无限制。</del><ins>则不限制。</ins>

#### [`ralkage-civility-filter.admin.settings.rate_limit_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.rate_limit_label%22)

> API Rate Limit (calls/hour)

```diff
-API 速率限制（次数/小时）
+API 调用频率上限（次/小时）
```

API <del>速率限制（次数/小时）</del><ins>调用频率上限（次/小时）</ins>

#### [`ralkage-civility-filter.admin.settings.warn_threshold_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.warn_threshold_help%22)

> Score at or above this level will log a warning. Default: 60

```diff
-评分达到或超过此分值将记录警告。默认值：60
+风险评分达到或超过此值时记录警告。默认：60
```

#### [`ralkage-civility-filter.admin.settings.warn_threshold_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.warn_threshold_label%22)

> Warn Threshold (0-100)

```diff
-警告阈值 (0-100)
+警告阈值（0-100）
```

#### [`ralkage-civility-filter.admin.settings.webhook_min_action_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_min_action_help%22)

> Only send webhook alerts for this action level or higher.

```diff
-仅针对此级别或更高级别的操作发送 Webhook 提醒。
+仅当处理结果达到或超过此级别时发送 Webhook 通知。
```

<del>仅针对此级别或更高级别的操作发送</del><ins>仅当处理结果达到或超过此级别时发送</ins> Webhook <del>提醒。</del><ins>通知。</ins>

#### [`ralkage-civility-filter.admin.settings.webhook_min_action_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_min_action_label%22)

> Webhook Minimum Action

```diff
-Webhook 触发级别
+Webhook 最低通知级别
```

Webhook <del>触发级别</del><ins>最低通知级别</ins>

#### [`ralkage-civility-filter.admin.settings.webhook_url_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.webhook_url_help%22)

> Discord webhook or generic URL to receive alerts when posts are flagged. Leave empty to disable.

```diff
-当帖子被标记时接收提醒的 Discord 或通用 Webhook URL。留空则禁用。
+填写 Discord Webhook 或其他通用 URL，用于在帖子被标记时接收通知。留空则禁用。
```

<del>当帖子被标记时接收提醒的</del><ins>填写</ins> Discord<del> 或通用</del> Webhook <del>URL。留空则禁用。</del><ins>或其他通用 URL，用于在帖子被标记时接收通知。留空则禁用。</ins>

#### [`ralkage-civility-filter.admin.settings.word_blocklist_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.word_blocklist_help%22)

> One word/phrase per line. Posts containing these will be instantly blocked without calling the AI.

```diff
-每行一个词/短语。包含这些词的帖子将直接拦截，无需调用 AI。
+每行填写一个词或短语。帖子中包含任意敏感词时，将直接拦截，无需调用 AI。
```

<del>每行一个词/短语。包含这些词的帖子将直接拦截，无需调用</del><ins>每行填写一个词或短语。帖子中包含任意敏感词时，将直接拦截，无需调用</ins> AI。

#### [`ralkage-civility-filter.admin.settings.word_blocklist_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.word_blocklist_label%22)

> Word Blocklist

```diff
-敏感词黑名单
+敏感词列表
```

#### [`ralkage-civility-filter.admin.stats.action_breakdown`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.action_breakdown%22)

> Action Breakdown

```diff
-操作分布
+处理结果分布
```

#### [`ralkage-civility-filter.admin.stats.average_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.average_score%22)

> Average Score

```diff
-平均分值
+平均风险评分
```

#### [`ralkage-civility-filter.admin.stats.avg_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.avg_score%22)

> Avg Score

```diff
-平均分
+平均风险评分
```

#### [`ralkage-civility-filter.admin.stats.daily_trend`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.daily_trend%22)

> Daily Trend (30 days)

```diff
-每日趋势 (30天)
+每日趋势（30 天）
```

#### [`ralkage-civility-filter.admin.stats.title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.title%22)

> Civility Statistics

```diff
-文明统计数据
+文明度统计
```

#### [`ralkage-civility-filter.admin.stats.top_categories`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.top_categories%22)

> Top Categories

```diff
-主要违规类型
+主要类别
```

#### [`ralkage-civility-filter.admin.stats.top_offenders`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.top_offenders%22)

> Top Offenders

```diff
-多次违规用户
+违规最多的用户
```

#### [`ralkage-civility-filter.admin.stats.total`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.total%22)

> Total

```diff
-总计
+总数
```

#### [`ralkage-civility-filter.admin.stats.total_checks`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.stats.total_checks%22)

> Total Checks

```diff
-检查总数
+检测总数
```

#### [`ralkage-civility-filter.admin.test.discussion_title_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.discussion_title_placeholder%22)

> Optional discussion title for context...

```diff
-可选的标题，提供更多上下文信息...
+输入可选的讨论标题作为上下文…
```

#### [`ralkage-civility-filter.admin.test.message_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.message_placeholder%22)

> Enter a test message to analyze...

```diff
-输入测试内容进行分析...
+输入要测试的内容…
```

#### [`ralkage-civility-filter.admin.test.result_action`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_action%22)

> Action

```diff
-建议操作
+处理结果
```

#### [`ralkage-civility-filter.admin.test.result_categories`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_categories%22)

> Categories

```diff
-判定分类
+类别
```

#### [`ralkage-civility-filter.admin.test.result_latency`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_latency%22)

> API Latency

```diff
-API 延迟
+API 响应耗时
```

API <del>延迟</del><ins>响应耗时</ins>

#### [`ralkage-civility-filter.admin.test.result_reason`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_reason%22)

> Reason

```diff
-判定理由
+原因
```

#### [`ralkage-civility-filter.admin.test.result_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.result_score%22)

> Civility Score

```diff
-文明评分
+风险评分
```

#### [`ralkage-civility-filter.admin.test.submit`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.submit%22)

> Analyze

```diff
-开始分析
+分析
```

#### [`ralkage-civility-filter.admin.test.title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.admin.test.title%22)

> Test Analyzer

```diff
-分析测试工具
+测试分析器
```

#### [`ralkage-civility-filter.api.post_blocked`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.api.post_blocked%22)

> Your post was blocked by the civility filter. Please revise your message to be more respectful and constructive, then try again.

```diff
-由于包含不规范言论，您的内容已被文明过滤器拦截。请修改内容，使其更加礼貌且富有建设性，然后重试。
+你的帖子可能包含不当或攻击性内容，已被系统拦截。请修改后重试，并尽量保持友善、具有建设性的表达。
```

#### [`ralkage-civility-filter.forum.notification_moderated`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.notification_moderated%22)

> Your recent post was held for moderation by the civility filter. A moderator will review it shortly.

```diff
-您的最近一篇帖子已移交人工审核，管理员将尽快处理。
+你最近发布的帖子已被移送审核，请等待版主处理。
```

#### [`ralkage-civility-filter.forum.notification_warned`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.notification_warned%22)

> Your recent post was flagged by the civility filter. Please keep discussions respectful.

```diff
-您的最近一篇帖子被文明过滤器标记。请保持言论尊重。
+你最近发布的帖子已被风险标记，请注意保持友善、理性的表达。
```

#### [`ralkage-civility-filter.forum.post_notice_moderated`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.post_notice_moderated%22)

> This post was held for moderation by the civility filter due to potentially harmful content.

```diff
-由于内容可能包含有害言论，此帖已被文明过滤器移交至审核队列。
+此帖可能包含有害内容，正在等待审核。
```

#### [`ralkage-civility-filter.forum.post_notice_warned_author`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.post_notice_warned_author%22)

> Your post was flagged by the civility filter. Please keep discussions respectful and constructive.

```diff
-您的帖子已被文明过滤器标记。请保持言论尊重且富有建设性。
+你的帖子可能包含不当或攻击性表达。请保持友善、理性地参与讨论。
```

#### [`ralkage-civility-filter.forum.post_notice_warned_mod`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.post_notice_warned_mod%22)

> This post was flagged by the civility filter for potential incivility. (Only visible to staff)

```diff
-由于可能存在不当言论，此帖已被文明过滤器标记。（仅工作人员可见）
+此帖可能包含不当或攻击性表达。（仅工作人员可见）
```

#### [`ralkage-civility-filter.forum.settings.notify_civility_flagged`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.settings.notify_civility_flagged%22)

> Someone flags my post for civility

```diff
-我的帖子因不文明行为被标记时
+我的帖子可能被风险标记
```

#### [`ralkage-civility-filter.forum.user_profile.average_score`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.average_score%22)

> Average Score

```diff
-平均评分
+平均风险评分
```

#### [`ralkage-civility-filter.forum.user_profile.civility_title`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.civility_title%22)

> Civility History

```diff
-文明检查记录
+文明度检测记录
```

#### [`ralkage-civility-filter.forum.user_profile.no_history`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.no_history%22)

> No civility history.

```diff
-暂无文明检查历史。
+暂无文明度检测记录。
```

#### [`ralkage-civility-filter.forum.user_profile.total_checks`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/zh_Hans/?q=context%3A%3D%22ralkage-civility-filter.forum.user_profile.total_checks%22)

> Total Checks

```diff
-检查次数
+检测总数
```


### `ralkage-hcaptcha`

#### [`ralkage-hcaptcha.admin.permissions.post_without_hcaptcha`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.permissions.post_without_hcaptcha%22)

> Create posts and discussions without hCaptcha

```diff
-发布主题和回帖时无需 hCaptcha 验证码
+发起讨论和回帖时无需 hCaptcha
```

<del>发布主题和回帖时无需</del><ins>发起讨论和回帖时无需</ins> hCaptcha<del> 验证码</del>

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
-为 hCaptcha 组件启用深色主题。如果您的论坛采用深色主题，请启用此选项。
+为 hCaptcha 验证组件使用深色外观。如果论坛使用深色显示模式，请启用此项。
```

为 hCaptcha <del>组件启用深色主题。如果您的论坛采用深色主题，请启用此选项。</del><ins>验证组件使用深色外观。如果论坛使用深色显示模式，请启用此项。</ins>

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
-在用户登录时启用 hCaptcha 验证，有助于防止暴力破解攻击。
+用户登录时必须完成 hCaptcha 人机验证，有助于防止暴力破解攻击。
```

<del>在用户登录时启用</del><ins>用户登录时必须完成</ins> hCaptcha <del>验证，有助于防止暴力破解攻击。</del><ins>人机验证，有助于防止暴力破解攻击。</ins>

#### [`ralkage-hcaptcha.admin.settings.enable_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_label%22)

> Require on Login

```diff
-登陆时启用
+登录时要求人机验证
```

#### [`ralkage-hcaptcha.admin.settings.help_text`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.help_text%22)

> Obtain your hCaptcha credentials &lt;a&gt;here&lt;/a&gt;.

```diff
-<a>点击此处</a> 获取 hCaptcha 秘钥。
+点击<a>此处</a>获取 hCaptcha。
```

#### [`ralkage-hcaptcha.forum.error`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/zh_Hans/?q=context%3A%3D%22ralkage-hcaptcha.forum.error%22)

> There was an error submitting hCaptcha. Try again.

```diff
-提交 h-captcha 验证码时出错，请重试。
+提交 hCaptcha 验证时发生错误，请重试。
```

提交 <del>h-captcha</del><ins>hCaptcha</ins> <del>验证码时出错，请重试。</del><ins>验证时发生错误，请重试。</ins>


### `ralkage-linked-accounts`

#### [`ralkage-linked-accounts.admin.logs.clear_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.clear_confirm%22)

> Are you sure you want to clear all linked account logs? This cannot be undone.

```diff
-确定要清空所有关联账号日志吗？此操作不可撤销。
+确定要清空所有关联账号日志吗？此操作无法撤销。
```

#### [`ralkage-linked-accounts.admin.logs.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.empty%22)

> No activity logged yet.

```diff
-暂无活动记录。
+暂无操作记录
```

#### [`ralkage-linked-accounts.admin.logs.title`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.logs.title%22)

> Linked Account Activity Log

```diff
-关联账号活动日志
+关联账号操作日志
```

#### [`ralkage-linked-accounts.admin.settings.log_retention_days_help`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.log_retention_days_help%22)

> Number of days to keep activity logs. Set to 0 to keep forever.

```diff
-活动日志保留的天数。设为 0 表示永久保留。
+操作日志保留的天数。设为 0 则永久保留。
```

<del>活动日志保留的天数。设为</del><ins>操作日志保留的天数。设为</ins> 0 <del>表示永久保留。</del><ins>则永久保留。</ins>

#### [`ralkage-linked-accounts.admin.settings.max_accounts`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.max_accounts%22)

> Maximum Linked Accounts

```diff
-最大关联账号数量
+关联账号数量上限
```

#### [`ralkage-linked-accounts.admin.settings.max_accounts_help`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.settings.max_accounts_help%22)

> Maximum number of accounts a user can link. Set to 0 for unlimited.

```diff
-用户可以关联的最大账号数量。设为 0 表示无限制。
+每位用户最多可以关联多少个账号。设为 0 则不限制。
```

<del>用户可以关联的最大账号数量。设为</del><ins>每位用户最多可以关联多少个账号。设为</ins> 0 <del>表示无限制。</del><ins>则不限制。</ins>

#### [`ralkage-linked-accounts.admin.tabs.logs`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.admin.tabs.logs%22)

> Activity Log

```diff
-活动日志
+操作日志
```

#### [`ralkage-linked-accounts.forum.composer.post_as`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.composer.post_as%22)

> Post as:

```diff
-发布身份：
+使用账号发布：
```

#### [`ralkage-linked-accounts.forum.page.child_info`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.child_info%22)

> This is a linked account. To manage linked accounts, create new ones, or link existing accounts, switch back to the parent account.

```diff
-这是一个关联账号。要管理关联账号、创建新账号或关联现有账号，请先切回主账号。
+当前是关联账号。如需管理关联账号、创建新账号或关联已有账号，请切回主账号。
```

#### [`ralkage-linked-accounts.forum.page.create_description`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_description%22)

> Create a brand new account that will be linked to your current account.

```diff
-创建一个全新的账号并与当前账号关联。
+创建一个全新账号，并将其关联到当前账号。
```

#### [`ralkage-linked-accounts.forum.page.create_success`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.create_success%22)

> New linked account created successfully!

```diff
-新的关联账号创建成功！
+新关联账号创建成功
```

#### [`ralkage-linked-accounts.forum.page.email`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.email%22)

> Email

```diff
-电子邮箱
+邮箱
```

#### [`ralkage-linked-accounts.forum.page.email_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.email_placeholder%22)

> Enter email for the new account

```diff
-输入新账号的电子邮箱
+输入新账号的邮箱
```

#### [`ralkage-linked-accounts.forum.page.identification_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.identification_placeholder%22)

> Enter the username or email of the existing account

```diff
-输入现有账号的用户名或电子邮箱
+输入已有账号的用户名或邮箱
```

#### [`ralkage-linked-accounts.forum.page.link_description`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_description%22)

> Link an account that already exists. You'll need to provide the account's password to verify ownership.

```diff
-关联一个已经存在的账号。您需要提供该账号的密码以验证所有权。
+关联一个已经存在的账号。需要输入账号密码以验证。
```

#### [`ralkage-linked-accounts.forum.page.link_existing`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_existing%22)

> Link Existing Account

```diff
-关联现有账号
+关联已有账号
```

#### [`ralkage-linked-accounts.forum.page.link_success`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_success%22)

> Account linked successfully!

```diff
-账号关联成功！
+账号关联成功
```

#### [`ralkage-linked-accounts.forum.page.link_title`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.link_title%22)

> Link an Existing Account

```diff
-关联现有账号
+关联已有账号
```

#### [`ralkage-linked-accounts.forum.page.max_reached`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.max_reached%22)

> You have reached the maximum of {max} linked accounts.

```diff
-您已达到最大关联账号上限（{max} 个）。
+关联账号已达到 {max} 个的上限。
```

#### [`ralkage-linked-accounts.forum.page.no_accounts`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.no_accounts%22)

> You haven't linked any accounts yet. Create a new account or link an existing one to get started.

```diff
-您尚未关联任何账号。创建一个新账号或关联一个现有账号来开始吧。
+你还没有关联任何账号。创建新账号或关联已有账号即可开始。
```

#### [`ralkage-linked-accounts.forum.page.switched_notice`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.switched_notice%22)

> You are currently using a linked account. Your parent account is {name}.

```diff
-您当前正在使用关联账号。您的主账号是 {name}。
+你当前正在使用关联账号，主账号为 {name}。
```

<del>您当前正在使用关联账号。您的主账号是</del><ins>你当前正在使用关联账号，主账号为</ins> {name}。

#### [`ralkage-linked-accounts.forum.page.unlink`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.unlink%22)

> Unlink

```diff
-取消关联
+解除关联
```

#### [`ralkage-linked-accounts.forum.page.unlink_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.unlink_confirm%22)

> Are you sure you want to unlink this account? The account will still exist but will no longer be linked.

```diff
-确定要取消关联此账号吗？该账号仍会存在，但不再与您的主账号关联。
+确定要解除此账号的关联吗？账号仅不再与主账号关联，不会被删除。
```

#### [`ralkage-linked-accounts.forum.page.unlink_success`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.unlink_success%22)

> Account unlinked successfully.

```diff
-账号已成功取消关联。
+已解除账号关联
```

#### [`ralkage-linked-accounts.forum.revert_to`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/zh_Hans/?q=context%3A%3D%22ralkage-linked-accounts.forum.revert_to%22)

> Revert to {name}

```diff
-切回至 {name}
+切回 {name}
```

<del>切回至</del><ins>切回</ins> {name}


### `ralkage-profile-messages`

#### [`ralkage-profile-messages.admin.permissions.edit_any_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.admin.permissions.edit_any_label%22)

> Edit any profile message

```diff
-编辑任何留言
+编辑任意留言
```

#### [`ralkage-profile-messages.admin.permissions.post_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.admin.permissions.post_label%22)

> Post profile messages

```diff
-发布个人资料页留言
+在留言墙发表留言
```

#### [`ralkage-profile-messages.forum.composer.confirm_exit`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.confirm_exit%22)

> Your message has not been posted. Do you wish to discard it?

```diff
-您的留言尚未发布。确定要放弃吗？
+留言尚未发表，确定要丢弃吗？
```

#### [`ralkage-profile-messages.forum.composer.heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.heading%22)

> Message on {username}'s profile

```diff
-在 {username} 的个人资料页留言
+向 {username} 留言
```

<del>在</del><ins>向</ins> {username} <del>的个人资料页留言</del><ins>留言</ins>

#### [`ralkage-profile-messages.forum.composer.placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.placeholder%22)

> Write a message on this profile...

```diff
-在此个人资料页留下您的留言...
+说点什么吧…
```

#### [`ralkage-profile-messages.forum.composer.posted_message`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.posted_message%22)

> Your message has been posted.

```diff
-您的留言已发布。
+留言已发表
```

#### [`ralkage-profile-messages.forum.composer.reply_heading`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.reply_heading%22)

> Reply on {username}'s profile

```diff
-在 {username} 的个人资料页回复
+在 {username} 的留言墙回复
```

在 {username} <del>的个人资料页回复</del><ins>的留言墙回复</ins>

#### [`ralkage-profile-messages.forum.composer.save_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.save_button%22)

> Save Changes

```diff
-保存修改
+保存更改
```

#### [`ralkage-profile-messages.forum.composer.saved_message`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.saved_message%22)

> Your message has been updated.

```diff
-您的留言已更新。
+留言已更新
```

#### [`ralkage-profile-messages.forum.composer.submit_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.submit_button%22)

> Post Message

```diff
-发布留言
+发表留言
```

#### [`ralkage-profile-messages.forum.composer.validation_blocked`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.validation_blocked%22)

> This user has disabled profile messages.

```diff
-该用户已禁用个人资料页留言。
+此用户已关闭留言墙
```

#### [`ralkage-profile-messages.forum.composer.validation_empty`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.validation_empty%22)

> Message cannot be empty.

```diff
-留言内容不能为空。
+留言不能为空
```

#### [`ralkage-profile-messages.forum.composer.validation_too_long`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.validation_too_long%22)

> Message cannot exceed 2000 characters.

```diff
-留言内容不能超过 2000 个字符。
+留言不能超过 2000 个字符
```

<del>留言内容不能超过</del><ins>留言不能超过</ins> 2000 <del>个字符。</del><ins>个字符</ins>

#### [`ralkage-profile-messages.forum.message.delete_confirm`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.delete_confirm%22)

> Are you sure you want to delete this message?

```diff
-确定要删除这条留言吗？
+确定要删除此留言吗？
```

#### [`ralkage-profile-messages.forum.message.hide_replies`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.hide_replies%22)

> Hide replies

```diff
-隐藏回复
+收起回复
```

#### [`ralkage-profile-messages.forum.message.permalink_copied`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.permalink_copied%22)

> Link copied to clipboard.

```diff
-链接已复制到剪贴板。
+链接已复制到剪贴板
```

#### [`ralkage-profile-messages.forum.message.reply_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.reply_placeholder%22)

> Write a reply...

```diff
-撰写回复...
+写下回复…
```

#### [`ralkage-profile-messages.forum.message.show_replies`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.message.show_replies%22)

> {count, plural, one {Show # reply} other {Show # replies}}

```diff
-{count, plural, one {显示 # 条回复} other {显示 # 条回复}}
+显示 {count} 条回复
```

#### [`ralkage-profile-messages.forum.notification.new_profile_message_text`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.notification.new_profile_message_text%22)

> {username} posted on your profile.

```diff
-{username} 在您的个人资料页发布了留言。
+{username} 向你留言
```

{username} <del>在您的个人资料页发布了留言。</del><ins>向你留言</ins>

#### [`ralkage-profile-messages.forum.report.already_reported`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.already_reported%22)

> You have already reported this message.

```diff
-您已经举报过这条留言了。
+你已经举报过此留言
```

#### [`ralkage-profile-messages.forum.report.cannot_report_own`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.cannot_report_own%22)

> You cannot report your own messages.

```diff
-您不能举报自己的留言。
+不能举报自己的留言
```

#### [`ralkage-profile-messages.forum.report.detail_placeholder`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.detail_placeholder%22)

> Provide additional details (optional)...

```diff
-提供更多详细信息（可选）...
+补充说明（可选）…
```

#### [`ralkage-profile-messages.forum.report.reason_harassment`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_harassment%22)

> Harassment

```diff
-骚扰行为
+骚扰
```

#### [`ralkage-profile-messages.forum.report.reason_inappropriate`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_inappropriate%22)

> Inappropriate content

```diff
-违规内容
+内容不当
```

#### [`ralkage-profile-messages.forum.report.reason_other`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.reason_other%22)

> Other

```diff
-其他原因
+其他
```

#### [`ralkage-profile-messages.forum.report.success`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.report.success%22)

> Message has been reported.

```diff
-留言已举报。
+留言已举报
```

#### [`ralkage-profile-messages.forum.settings.block_profile_messages_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.block_profile_messages_label%22)

> Disable profile messages from other users

```diff
-禁止他人在我的个人资料页留言
+禁止他人给我留言
```

#### [`ralkage-profile-messages.forum.settings.default_view_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.default_view_label%22)

> Show Profile Messages as default profile view

```diff
-将个人资料留言设为默认展示项
+设置留言墙为默认页
```

#### [`ralkage-profile-messages.forum.settings.notify_new_profile_message_label`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.settings.notify_new_profile_message_label%22)

> Someone posts on my profile

```diff
-有人在我的个人资料页发布留言时
+有人留言
```

#### [`ralkage-profile-messages.forum.user.messages_empty_text`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.user.messages_empty_text%22)

> No messages have been posted on this profile yet.

```diff
-该个人资料页暂无留言。
+还没有人留言哦
```

#### [`ralkage-profile-messages.forum.user.messages_link`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.user.messages_link%22)

> Profile Messages

```diff
-个人资料留言
+留言墙
```


### `ralkage-word-censor`

#### [`ralkage-word-censor.admin.settings.replacement_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_help%22)

> Character used to replace each letter of a censored word. Default: \*

```diff
-用于替换敏感词中每个字符的符号。默认：*
+用于替换屏蔽词的符号。默认：*
```

#### [`ralkage-word-censor.admin.settings.word_list_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_help%22)

> Enter one word or phrase per line. These will be replaced with the replacement character when displayed to users.

```diff
-每行输入一个词组或短语。在向用户显示时，这些词语将被替换字符遮盖。
+每行填写一个词或短语。帖子中如果出现这些字词，会使用指定的字符替换显示。
```

#### [`ralkage-word-censor.admin.settings.word_list_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_label%22)

> Censored Words

```diff
-敏感词列表
+敏感词
```

#### [`ralkage-word-censor.forum.settings.word_censor_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_help%22)

> When enabled, configured words will be censored in posts. Disable to see uncensored content.

```diff
-开启后，帖子中的预设词语将被过滤。禁用此项可查看未经过滤的原文内容。
+启用后，屏蔽帖子中出现的敏感词。关闭后可查看未经屏蔽的原始内容。
```

#### [`ralkage-word-censor.forum.settings.word_censor_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/zh_Hans/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_label%22)

> Enable Word Censoring

```diff
-开启词语过滤
+屏蔽敏感词
```


### `ralkage-word-counter`

#### [`ralkage-word-counter.forum.composer.word_counter`](https://weblate.rob006.net/translate/flarum2/ralkage-word-counter/zh_Hans/?q=context%3A%3D%22ralkage-word-counter.forum.composer.word_counter%22)

> {words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}

```diff
-{words, plural, other {{words} 个单词}}, {chars, plural, other {{chars} 个字符}}
+{words} 个词，{chars} 个字符
```


### `resofire-blog-cards`

#### [`resofire_blog_cards.admin.recalculate_error`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_error%22)

> An error occurred. Please try again or use the CLI command.

```diff
-发生错误。请重试或使用 CLI 命令。
+发生错误，请重试或使用 CLI 命令。
```

<del>发生错误。请重试或使用</del><ins>发生错误，请重试或使用</ins> CLI 命令。

#### [`resofire_blog_cards.admin.recalculate_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_help%22)

> Recalculates participant avatars for all discussions. Run this after first installing the extension on an existing forum, or any time you suspect the preview data is out of sync.

```diff
-重新计算所有讨论的参与者头像。在已有论坛安装扩展后首次运行，或当预览数据不同步时运行。
+重新计算所有讨论的参与者头像数据。已有论坛首次安装此扩展，或发现卡片预览数据不同步时，可使用此工具。
```

#### [`resofire_blog_cards.admin.recalculate_modal_warning`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_modal_warning%22)

> Do not close this window or navigate away until the process is complete.

```diff
-在处理完成之前，请勿关闭此窗口或离开页面。
+处理完成前，请勿关闭此窗口或离开当前页面。
```

#### [`resofire_blog_cards.admin.recalculate_success`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.recalculate_success%22)

> Done. Recalculated {count} discussions in {duration}s.

```diff
-完成。在 {duration} 秒内重新计算了 {count} 个讨论。
+完成。已在 {duration} 秒内重新计算 {count} 个讨论。
```

<del>完成。在</del><ins>完成。已在</ins> {duration} <del>秒内重新计算了</del><ins>秒内重新计算</ins> {count} 个讨论。

#### [`resofire_blog_cards.admin.settings.fullWidth_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.fullWidth_help%22)

> If enabled, each card will span the full width instead of two per row.

```diff
-启用后，每个卡片将占据整行宽度，而不是每行两个。
+启用后，每张卡片会占满整行，而不是每行显示两张。
```

#### [`resofire_blog_cards.admin.settings.onIndexPage_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.onIndexPage_help%22)

> If enabled, the discussion list page will display cards.

```diff
-启用后，讨论列表页面将以卡片形式显示。
+启用后，讨论列表页面会以卡片形式显示讨论。
```

#### [`resofire_blog_cards.admin.settings.onIndexPage_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.onIndexPage_label%22)

> Use on Discussion List

```diff
-在讨论列表页启用
+在讨论列表中使用卡片
```

#### [`resofire_blog_cards.admin.settings.showParticipants_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.showParticipants_help%22)

> If enabled, each card will display a strip of participant avatars at the bottom.

```diff
-启用后，每个卡片底部将显示参与者头像列表。
+启用后，每张卡片底部都会显示一排参与者头像。
```

#### [`resofire_blog_cards.admin.settings.tagIds_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.tagIds_help%22)

> Select tags to show cards on. If none are selected, cards appear on all tag pages.

```diff
-选择要显示卡片的标签。如果未选择，则所有标签页面都会显示卡片。
+选择要使用卡片布局的标签。未选择任何标签时，所有标签页面都会使用卡片布局。
```

#### [`resofire_blog_cards.admin.settings.tagIds_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.admin.settings.tagIds_label%22)

> Restrict to Tags

```diff
-限制标签
+限定标签
```

#### [`resofire_blog_cards.forum.show_all_participants`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/zh_Hans/?q=context%3A%3D%22resofire_blog_cards.forum.show_all_participants%22)

> Show all participants

```diff
-显示所有参与者
+查看所有参与者
```


### `resofire-digest-mail`

#### [`resofire-digest-mail.admin.settings.enable_awards_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.enable_awards_help%22)

> Show active and upcoming awards in the digest. Requires huseyinfiliz/awards.

```diff
-在摘要邮件中展示进行中和即将开始的奖项评选。需要安装 huseyinfiliz/awards。
+在摘要中显示正在进行和即将开始的奖项评选。需要安装并启用 huseyinfiliz/awards。
```

<del>在摘要邮件中展示进行中和即将开始的奖项评选。需要安装</del><ins>在摘要中显示正在进行和即将开始的奖项评选。需要安装并启用</ins> huseyinfiliz/awards。

#### [`resofire-digest-mail.admin.settings.featured_discussion_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.featured_discussion_help%22)

> Enter a discussion ID to pin it as a featured discussion at the top of every digest. Leave blank to show no featured discussion.

```diff
-输入讨论 ID 以将其置顶为每份摘要顶部的精选讨论。留空则不显示精选讨论。
+输入讨论 ID，将其作为精选讨论置顶在每封摘要顶部。留空则不显示精选讨论。
```

输入讨论 <del>ID 以将其置顶为每份摘要顶部的精选讨论。留空则不显示精选讨论。</del><ins>ID，将其作为精选讨论置顶在每封摘要顶部。留空则不显示精选讨论。</ins>

#### [`resofire-digest-mail.admin.settings.hot_recency_weight_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_recency_weight_help%22)

> How much recency affects hotness. Higher = newer posts score more strongly. Set to 0 to rank by replies only.

```diff
-时效性对热门程度的影响程度。值越高，新帖子的分数越高。设为 0 则仅按回复数排序。
+新近程度对讨论热度评分的影响程度。数值越高，较新的帖子权重越大。设为 0 则只按回复数排名。
```

<del>时效性对热门程度的影响程度。值越高，新帖子的分数越高。设为</del><ins>新近程度对讨论热度评分的影响程度。数值越高，较新的帖子权重越大。设为</ins> 0 <del>则仅按回复数排序。</del><ins>则只按回复数排名。</ins>

#### [`resofire-digest-mail.admin.settings.hot_recency_weight_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_recency_weight_label%22)

> Hot score — recency weight

```diff
-热门分数 —— 时效权重
+热度评分 — 时效权重
```

<del>热门分数</del><ins>热度评分</ins> <del>——</del><ins>—</ins> 时效权重

#### [`resofire-digest-mail.admin.settings.hot_reply_weight_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_reply_weight_help%22)

> How much each reply counts toward a discussion's hotness score. Higher = more replies-driven.

```diff
-每条回复对讨论热门分数的贡献程度。值越高，越偏向回复驱动。
+每条回复对讨论热度评分的影响程度。数值越高，排名越受回复数量影响。
```

#### [`resofire-digest-mail.admin.settings.hot_reply_weight_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_reply_weight_label%22)

> Hot score — reply weight

```diff
-热门分数 —— 回复权重
+热度评分 — 回复权重
```

<del>热门分数</del><ins>热度评分</ins> <del>——</del><ins>—</ins> 回复权重

#### [`resofire-digest-mail.admin.settings.limit_badges_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_badges_help%22)

> Maximum number of recent badge earners to list in the digest (default 5, min 3). Requires fof/badges.

```diff
-摘要邮件中列出的最近获得勋章的用户数量上限（默认为 5，最小为 3）。需要安装 fof/badges。
+摘要中最多列出多少位最近获得徽章的成员（默认 5，最少 3）。需要安装并启用 fof/badges。
```

<del>摘要邮件中列出的最近获得勋章的用户数量上限（默认为</del><ins>摘要中最多列出多少位最近获得徽章的成员（默认</ins> <del>5，最小为</del><ins>5，最少</ins> <del>3）。需要安装</del><ins>3）。需要安装并启用</ins> fof/badges。

#### [`resofire-digest-mail.admin.settings.limit_badges_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_badges_label%22)

> Badges — max recent earners

```diff
-勋章 —— 最近获得者数量上限
+徽章 — 最近获得者上限
```

#### [`resofire-digest-mail.admin.settings.limit_favorites_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_favorites_help%22)

> Maximum number of favorite discussions to show, ranked by likes/reactions during the period (default 6, min 3). Set to 0 to disable. Uses fof/reactions if enabled, otherwise flarum/likes.

```diff
-显示的收藏讨论数量上限，根据期间收到的点赞/反应数排序（默认为 6，最小为 3）。设为 0 表示禁用。如果启用了 fof/reactions 则使用反应数，否则使用 Flarum 原生点赞数。
+最多显示多少个人气讨论，并按统计期间获得的点赞或表情回应数排序（默认 6，最少 3）。设为 0 可关闭。启用 fof/reactions 时按表情回应统计，否则按 flarum/likes 的点赞统计。
```

<del>显示的收藏讨论数量上限，根据期间收到的点赞/反应数排序（默认为</del><ins>最多显示多少个人气讨论，并按统计期间获得的点赞或表情回应数排序（默认</ins> <del>6，最小为</del><ins>6，最少</ins> 3）。设为 0 <del>表示禁用。如果启用了</del><ins>可关闭。启用</ins> fof/reactions <del>则使用反应数，否则使用</del><ins>时按表情回应统计，否则按</ins> <del>Flarum</del><ins>flarum/likes</ins> <del>原生点赞数。</del><ins>的点赞统计。</ins>

#### [`resofire-digest-mail.admin.settings.limit_favorites_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_favorites_label%22)

> Favorite Discussions — max items

```diff
-收藏讨论 —— 最大条目数
+人气讨论 — 数量上限
```

#### [`resofire-digest-mail.admin.settings.limit_gamepedia_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_gamepedia_help%22)

> Maximum number of games to show in the Most Discussed and Newly Added sections (default 5, min 3). Requires huseyinfiliz/gamepedia.

```diff
-在“讨论最多的游戏”和“最近新增的游戏”版块中显示的游戏数量上限（默认为 5，最小为 3）。需要安装 huseyinfiliz/gamepedia。
+「讨论最多」和「最近新增」部分各最多显示多少款游戏（默认 5，最少 3）。需要安装并启用 huseyinfiliz/gamepedia。
```

<del>在“讨论最多的游戏”和“最近新增的游戏”版块中显示的游戏数量上限（默认为</del><ins>「讨论最多」和「最近新增」部分各最多显示多少款游戏（默认</ins> <del>5，最小为</del><ins>5，最少</ins> <del>3）。需要安装</del><ins>3）。需要安装并启用</ins> huseyinfiliz/gamepedia。

#### [`resofire-digest-mail.admin.settings.limit_gamepedia_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_gamepedia_label%22)

> Gamepedia — max games per section

```diff
-Gamepedia —— 每个版块的最大游戏数量
+游戏百科 — 每部分游戏上限
```

#### [`resofire-digest-mail.admin.settings.limit_hot_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_hot_help%22)

> Maximum number of active (hot) discussions to include in each digest.

```diff
-每份摘要中包含的活跃（热门）讨论数量上限。
+每封摘要最多收录多少个活跃（热门）讨论。
```

#### [`resofire-digest-mail.admin.settings.limit_hot_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_hot_label%22)

> Active Discussions — max items

```diff
-活跃讨论 —— 最大条目数
+活跃讨论 — 数量上限
```

活跃讨论 <del>——</del><ins>—</ins> <del>最大条目数</del><ins>数量上限</ins>

#### [`resofire-digest-mail.admin.settings.limit_leaderboard_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_leaderboard_help%22)

> Number of leaderboard entries to show in the digest (default 10, min 3). Requires huseyinfiliz-leaderboard.

```diff
-摘要邮件中显示的排行榜条目数量（默认为 10，最小为 3）。需要安装 huseyinfiliz-leaderboard。
+摘要中显示的排行榜条目数（默认 10，最少 3）。需要安装并启用 huseyinfiliz-leaderboard。
```

<del>摘要邮件中显示的排行榜条目数量（默认为</del><ins>摘要中显示的排行榜条目数（默认</ins> <del>10，最小为</del><ins>10，最少</ins> <del>3）。需要安装</del><ins>3）。需要安装并启用</ins> huseyinfiliz-leaderboard。

#### [`resofire-digest-mail.admin.settings.limit_members_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_members_help%22)

> Maximum number of new members to show in each digest.

```diff
-每份摘要中显示的新成员数量上限。
+每封摘要最多显示多少位新成员。
```

#### [`resofire-digest-mail.admin.settings.limit_members_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_members_label%22)

> New Members — max items

```diff
-新成员 —— 最大条目数
+新成员 — 数量上限
```

新成员 <del>——</del><ins>—</ins> <del>最大条目数</del><ins>数量上限</ins>

#### [`resofire-digest-mail.admin.settings.limit_new_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_new_help%22)

> Maximum number of new discussions to include in each digest.

```diff
-每份摘要中包含的新讨论数量上限。
+每封摘要最多收录多少个新讨论。
```

#### [`resofire-digest-mail.admin.settings.limit_new_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_new_label%22)

> New Discussions — max items

```diff
-新讨论 —— 最大条目数
+新讨论 — 数量上限
```

新讨论 <del>——</del><ins>—</ins> <del>最大条目数</del><ins>数量上限</ins>

#### [`resofire-digest-mail.admin.settings.limit_pickem_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_pickem_help%22)

> Maximum number of upcoming matches, recent results, and leaderboard entries to show in the digest (default 5, min 3). Requires huseyinfiliz/pickem.

```diff
-摘要邮件中显示的即将开始的比赛、最新结果和排行榜条目的最大数量（默认为 5，最小为 3）。需要安装 huseyinfiliz/pickem。
+摘要中即将开始的比赛、近期结果和排行榜各最多显示多少项（默认 5，最少 3）。需要安装并启用 huseyinfiliz/pickem。
```

<del>摘要邮件中显示的即将开始的比赛、最新结果和排行榜条目的最大数量（默认为</del><ins>摘要中即将开始的比赛、近期结果和排行榜各最多显示多少项（默认</ins> <del>5，最小为</del><ins>5，最少</ins> <del>3）。需要安装</del><ins>3）。需要安装并启用</ins> huseyinfiliz/pickem。

#### [`resofire-digest-mail.admin.settings.limit_pickem_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_pickem_label%22)

> Pick'em — max items per section

```diff
-Pick'em —— 每个版块的最大条目数
+Pick'em — 每部分条目上限
```

Pick'em <del>——</del><ins>—</ins> <del>每个版块的最大条目数</del><ins>每部分条目上限</ins>

#### [`resofire-digest-mail.admin.settings.limit_unread_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_unread_help%22)

> Maximum number of unread discussions to surface per recipient.

```diff
-为每位收件人展示的未读讨论数量上限。
+每位收件人的摘要中最多显示多少个未读讨论。
```

#### [`resofire-digest-mail.admin.settings.limit_unread_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.limit_unread_label%22)

> Unread Discussions — max items

```diff
-未读讨论 —— 最大条目数
+未读讨论 — 数量上限
```

未读讨论 <del>——</del><ins>—</ins> <del>最大条目数</del><ins>数量上限</ins>

#### [`resofire-digest-mail.admin.settings.monthly_day_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.monthly_day_help%22)

> Day of the month on which monthly digests are sent. Capped at 28 so February always works.

```diff
-每月摘要的发送日期（几号）。上限为 28，以确保二月也能正常工作。
+每月摘要在每月几号发送。最大只能设为 28，确保二月也能正常发送。
```

#### [`resofire-digest-mail.admin.settings.monthly_day_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.monthly_day_label%22)

> Monthly digest — send day

```diff
-每月摘要 —— 发送日
+每月摘要 — 发送日
```

每月摘要 <del>——</del><ins>—</ins> 发送日

#### [`resofire-digest-mail.admin.settings.queue_chunk_size_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_chunk_size_help%22)

> Number of users dispatched per scheduler minute (default 200, min 50, max 10000). Small forums: 200–500. Large forums on dedicated servers: 1000–10000. Higher values finish faster but use more memory per cycle.

```diff
-每个调度分钟分发的用户数量（默认为 200，最小 50，最大 10000）。小型论坛：200–500。使用专用服务器的大型论坛：1000–10000。较高的值完成更快，但每个周期使用更多内存。
+调度器每分钟向队列分发的用户数（默认 200，最少 50，最多 10000）。小型论坛建议 200–500；使用独立服务器的大型论坛可设为 1000–10000。数值越高，处理完成得越快，但每轮会占用更多内存。
```

#### [`resofire-digest-mail.admin.settings.queue_chunk_size_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_chunk_size_label%22)

> Queue chunk size

```diff
-队列块大小
+队列批次大小
```

#### [`resofire-digest-mail.admin.settings.queue_delay_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_delay_help%22)

> Seconds before queued jobs become available to workers (default 0). In window mode this is rarely needed — the window itself spreads load across time. Only useful if using the two-phase digest:enqueue command on very large forums.

```diff
-队列任务变为可处理前的延迟秒数（默认为 0）。在窗口模式下通常不需要此设置——窗口本身会分散负载。仅在大型论坛上使用两阶段 digest:enqueue 命令时才有用。
+队列任务等待多少秒后才可由工作进程处理（默认 0）。使用发送时间窗口时通常无需设置，因为时间窗口本身就会分散负载。仅在超大型论坛使用两阶段 digest:enqueue 命令时可能有用。
```

<del>队列任务变为可处理前的延迟秒数（默认为</del><ins>队列任务等待多少秒后才可由工作进程处理（默认</ins> <del>0）。在窗口模式下通常不需要此设置——窗口本身会分散负载。仅在大型论坛上使用两阶段</del><ins>0）。使用发送时间窗口时通常无需设置，因为时间窗口本身就会分散负载。仅在超大型论坛使用两阶段</ins> digest:enqueue <del>命令时才有用。</del><ins>命令时可能有用。</ins>

#### [`resofire-digest-mail.admin.settings.queue_name_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_name_help%22)

> The named queue digest jobs are pushed onto. Must match the --queue argument in your queue:work cron. Default: digest.

```diff
-摘要任务被推送到的指定队列名称。必须与 queue:work 定时任务中的 --queue 参数匹配。默认值：digest。
+摘要任务要推送到的命名队列。必须与 queue:work 定时任务中的 --queue 参数一致。默认：digest。
```

<del>摘要任务被推送到的指定队列名称。必须与</del><ins>摘要任务要推送到的命名队列。必须与</ins> queue:work 定时任务中的 --queue <del>参数匹配。默认值：digest。</del><ins>参数一致。默认：digest。</ins>

#### [`resofire-digest-mail.admin.settings.queue_tries_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_tries_help%22)

> How many times a failed digest job will be retried before being moved to the failed jobs table (default 3). Retries use exponential backoff: 30s, 60s, 120s. Note: if you have blomstra/database-queue installed, it has its own Retries setting — the lower of the two values will effectively apply. Recommended to set both extension settings to the same value.

```diff
-失败的摘要任务在被移到失败任务表之前将重试的次数（默认为 3）。重试使用指数退避策略：30 秒、60 秒、120 秒。注意：如果您安装了 blomstra/database-queue，它有自己的重试次数设置——实际生效的是两者中较小的值。建议将两个扩展的设置设为相同值。
+摘要任务失败后最多重试多少次，超过后会移入失败任务表（默认 3）。重试采用指数退避：30 秒、60 秒、120 秒。注意：如果安装了 blomstra/database-queue，它也有自己的重试次数设置，实际会以两者中较小的值为准。建议两个扩展设置成相同的重试次数。
```

<del>失败的摘要任务在被移到失败任务表之前将重试的次数（默认为</del><ins>摘要任务失败后最多重试多少次，超过后会移入失败任务表（默认</ins> <del>3）。重试使用指数退避策略：30</del><ins>3）。重试采用指数退避：30</ins> 秒、60 秒、120 <del>秒。注意：如果您安装了</del><ins>秒。注意：如果安装了</ins> <del>blomstra/database-queue，它有自己的重试次数设置——实际生效的是两者中较小的值。建议将两个扩展的设置设为相同值。</del><ins>blomstra/database-queue，它也有自己的重试次数设置，实际会以两者中较小的值为准。建议两个扩展设置成相同的重试次数。</ins>

#### [`resofire-digest-mail.admin.settings.send_hour_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_hour_help%22)

> The time of day your digest emails will start sending.

```diff
-摘要邮件开始发送的时间点（小时）。
+摘要邮件每天从几点开始发送。
```

#### [`resofire-digest-mail.admin.settings.send_hour_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_hour_label%22)

> Send hour

```diff
-发送小时
+发送时间（小时）
```

#### [`resofire-digest-mail.admin.settings.send_window_end_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_end_help%22)

> Leave this the same as the start time to send all emails at once. Set it later to spread sending across several hours — recommended for larger forums. For example, a 2 a.m. start and 4 a.m. end means emails go out gradually between 2 and 4 a.m.

```diff
-保持与开始时间相同可一次性发送所有邮件。设置为更晚的时间可将发送分散到数小时内——推荐大型论坛使用。例如，凌晨 2 点开始、4 点结束，意味着邮件将在凌晨 2 点到 4 点之间逐渐发送。
+与开始时间设为相同即可一次发送所有邮件。设置更晚的结束时间，可以将发送任务分散到数小时内，推荐大型论坛使用。例如从凌晨 2 点到 4 点，邮件会在这两个小时内陆续发送。
```

<del>保持与开始时间相同可一次性发送所有邮件。设置为更晚的时间可将发送分散到数小时内——推荐大型论坛使用。例如，凌晨 2 点开始、4 点结束，意味着邮件将在凌晨</del><ins>与开始时间设为相同即可一次发送所有邮件。设置更晚的结束时间，可以将发送任务分散到数小时内，推荐大型论坛使用。例如从凌晨</ins> 2 点到 4 <del>点之间逐渐发送。</del><ins>点，邮件会在这两个小时内陆续发送。</ins>

#### [`resofire-digest-mail.admin.settings.send_window_start_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_start_help%22)

> The time of day your digest emails will start sending. Choose a quiet period when your forum has low activity — typically late night or early morning.

```diff
-摘要邮件开始发送的时间点。请选择论坛活动较少的安静时段——通常是深夜或清晨。
+摘要邮件每天从几点开始发送。建议选择论坛活动较少的时段，通常是深夜或清晨。
```

#### [`resofire-digest-mail.admin.settings.send_window_start_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_window_start_label%22)

> Send time

```diff
-发送时间
+发送开始时间
```

#### [`resofire-digest-mail.admin.settings.timezone_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.timezone_help%22)

> Choose your own timezone — not your server's. The send time you set below will fire at that hour in whichever timezone you select here. For example, if you're in Chicago and want emails sent at 8 a.m. your time, select Central Time and set the send time to 8 a.m.

```diff
-选择您自己的时区——而不是服务器的时区。您下方设置的发送时间将根据您在此选择的时区中的那个小时触发。例如，如果您在芝加哥且希望邮件在您当地时间的上午 8 点发送，请选择中部时间并将发送时间设为上午 8 点。
+选择你所在的时区，而不是服务器时区。下方设置的发送时间会按这里选择的时区执行。例如，你人在芝加哥，希望当地时间上午 8 点发送邮件，就选择美国中部时间并将发送时间设为上午 8 点。
```

<del>选择您自己的时区——而不是服务器的时区。您下方设置的发送时间将根据您在此选择的时区中的那个小时触发。例如，如果您在芝加哥且希望邮件在您当地时间的上午</del><ins>选择你所在的时区，而不是服务器时区。下方设置的发送时间会按这里选择的时区执行。例如，你人在芝加哥，希望当地时间上午</ins> 8 <del>点发送，请选择中部时间并将发送时间设为上午</del><ins>点发送邮件，就选择美国中部时间并将发送时间设为上午</ins> 8 点。

#### [`resofire-digest-mail.admin.settings.timezone_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.timezone_label%22)

> Your timezone

```diff
-您的时区
+所在时区
```

#### [`resofire-digest-mail.admin.settings.weekly_day_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.weekly_day_help%22)

> Day of the week on which weekly digests are sent.

```diff
-每周摘要的发送日期（星期几）。
+每周摘要在星期几发送。
```

#### [`resofire-digest-mail.admin.settings.weekly_day_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.settings.weekly_day_label%22)

> Weekly digest — send day

```diff
-每周摘要 —— 发送日
+每周摘要 — 发送日
```

每周摘要 <del>——</del><ins>—</ins> 发送日

#### [`resofire-digest-mail.admin.test_send.error_generic`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.error_generic%22)

> Failed to send. Check your mail settings and try again.

```diff
-发送失败。请检查您的邮件设置后重试。
+发送失败，请检查邮件设置后重试。
```

#### [`resofire-digest-mail.admin.test_send.frequency_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.frequency_label%22)

> Frequency

```diff
-频率
+发送频率
```

#### [`resofire-digest-mail.admin.test_send.help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.help%22)

> Send a live digest email immediately to any address. Uses your account's visibility to build content. Does not affect scheduled sends or unsubscribe tokens.

```diff
-立即向任意地址发送一封真实的摘要邮件。使用您账号的权限来构建内容。不会影响计划发送或取消订阅令牌。
+立即向测试邮箱发送一封实际的摘要邮件。邮件内容会按照你账号有权查看的内容生成，不会影响定时发送或退订令牌。
```

#### [`resofire-digest-mail.admin.test_send.sending_button`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.sending_button%22)

> Sending…

```diff
-发送中…
+正在发送…
```

#### [`resofire-digest-mail.admin.test_send.success`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.success%22)

> Sent! Check {email} for the {frequency} digest.

```diff
-已发送！请检查 {email} 收件箱中的 {frequency} 摘要。
+已发送！请到 {email} 查收{frequency}摘要。
```

<del>已发送！请检查</del><ins>已发送！请到</ins> {email}<del> 收件箱中的 {frequency}</del> <del>摘要。</del><ins>查收{frequency}摘要。</ins>

#### [`resofire-digest-mail.admin.test_send.theme_hint_dark`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_hint_dark%22)

> Sends with dark mode styles applied

```diff
-以深色模式样式发送
+使用深色主题样式发送
```

#### [`resofire-digest-mail.admin.test_send.theme_hint_light`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_hint_light%22)

> Sends with light mode styles applied

```diff
-以浅色模式样式发送
+使用浅色主题样式发送
```

#### [`resofire-digest-mail.admin.test_send.theme_light_only`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.theme_light_only%22)

> Light mode only — install and enable fof/nightmode to unlock dark mode emails

```diff
-仅浅色模式 —— 安装并启用 fof/nightmode 可解锁深色模式邮件
+目前仅支持浅色主题 — 安装并启用 fof/nightmode 后可使用深色主题邮件
```

<del>仅浅色模式</del><ins>目前仅支持浅色主题</ins> <del>——</del><ins>—</ins> 安装并启用 fof/nightmode <del>可解锁深色模式邮件</del><ins>后可使用深色主题邮件</ins>

#### [`resofire-digest-mail.forum.settings.digest_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.digest_help%22)

> Receive a periodic summary of new discussions, active threads, and new members.

```diff
-定期接收包含新讨论、活跃话题和新成员的摘要邮件。
+定期接收论坛摘要，了解新讨论、活跃讨论和新成员动态。
```

#### [`resofire-digest-mail.forum.settings.digest_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.digest_label%22)

> Email Digest

```diff
-摘要邮件
+邮件摘要
```

#### [`resofire-digest-mail.forum.settings.frequency_off`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.frequency_off%22)

> Off — don't send me digests

```diff
-关闭 —— 不发送摘要邮件
+关闭 — 不接收摘要邮件
```

关闭 <del>——</del><ins>—</ins> <del>不发送摘要邮件</del><ins>不接收摘要邮件</ins>

#### [`resofire-digest-mail.forum.settings.save_error`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/zh_Hans/?q=context%3A%3D%22resofire-digest-mail.forum.settings.save_error%22)

> Could not save your preference. Please try again.

```diff
-无法保存您的偏好，请重试。
+无法保存设置，请重试。
```


### `resofire-menu-control`

#### [`resofire-menu-control.admin.nav_order.add_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_highlight%22)

> Highlight this item for users

```diff
-为用户高亮此项
+高亮显示此项
```

#### [`resofire-menu-control.admin.nav_order.custom_link_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.custom_link_label%22)

> Link label

```diff
-链接标签
+链接文字
```

#### [`resofire-menu-control.admin.nav_order.description`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.description%22)

> Use the arrow buttons to reorder the sidebar navigation items on the forum index page. Changes take effect immediately after saving.

```diff
-使用箭头按钮重新排列论坛首页侧边栏的导航项。保存后更改会立即生效。
+使用箭头按钮调整论坛首页侧边栏导航项的顺序。保存后立即生效。
```

#### [`resofire-menu-control.admin.nav_order.flip_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_help%22)

> When enabled, tag links appear at the top of the sidebar and navigation items (All Discussions, Following, etc.) appear below.

```diff
-启用后，标签链接显示在侧边栏顶部，而导航项（所有讨论、关注等）显示在下方。
+启用后，标签链接会显示在侧边栏顶部，「全部讨论」「关注」等导航项则显示在下方。
```

#### [`resofire-menu-control.admin.nav_order.flip_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_label%22)

> Flip navigation (show tags above menu items)

```diff
-翻转导航（将标签显示在菜单项上方）
+调换导航与标签位置（标签显示在导航项上方）
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_help%22)

> Background color for highlighted nav items. Leave empty to use the default theme color.

```diff
-用于高亮导航项的背景颜色。留空使用主题默认颜色。
+设置高亮导航项的背景颜色。留空则使用主题默认颜色。
```

#### [`resofire-menu-control.admin.nav_order.icon_input_title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.icon_input_title%22)

> Custom Font Awesome icon class (e.g. fas fa-bolt). Leave empty to use default.

```diff
-自定义 Font Awesome 图标类（例如：fas fa-bolt）。留空使用默认图标。
+自定义 Font Awesome 图标类名（例如 fas fa-bolt）。留空则使用默认图标。
```

自定义 Font Awesome <del>图标类（例如：fas</del><ins>图标类名（例如</ins> <del>fa-bolt）。留空使用默认图标。</del><ins>fas fa-bolt）。留空则使用默认图标。</ins>

#### [`resofire-menu-control.admin.nav_order.no_items`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.no_items%22)

> No navigation items detected yet. Visit the forum index page as an admin first to populate this list.

```diff
-尚未检测到任何导航项。请先以管理员身份访问论坛首页以生成此列表。
+尚未检测到导航项。请先以管理员身份访问论坛首页，以生成此列表。
```

#### [`resofire-menu-control.admin.nav_order.polls_note`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.polls_note%22)

> Note: If fof/polls is installed, fof-polls-showcase and similar items may appear in this list even if global polls is disabled. Use the × button to remove them permanently.

```diff
-注意：如果安装了 fof/polls，即使全局投票被禁用，fof-polls-showcase 等项目也可能出现在此列表中。使用 × 按钮可永久移除它们。
+注意：如果启用了 fof/polls，即使全局投票功能已关闭，fof-polls-showcase 等项目仍可能出现在此列表中。可点击 × 按钮将其永久移除。
```

<del>注意：如果安装了</del><ins>注意：如果启用了</ins> <del>fof/polls，即使全局投票被禁用，fof-polls-showcase</del><ins>fof/polls，即使全局投票功能已关闭，fof-polls-showcase</ins> <del>等项目也可能出现在此列表中。使用</del><ins>等项目仍可能出现在此列表中。可点击</ins> × <del>按钮可永久移除它们。</del><ins>按钮将其永久移除。</ins>

#### [`resofire-menu-control.admin.nav_order.save_button`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_button%22)

> Save Order

```diff
-保存顺序
+保存排序
```

#### [`resofire-menu-control.admin.nav_order.sticky_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_help%22)

> When enabled, the sidebar including the Start a Discussion button stays fixed at the top of the viewport as you scroll down.

```diff
-启用后，包括“发起讨论”按钮在内的侧边栏会固定在视口顶部，随页面滚动而保持可见。
+启用后，向下滚动页面时，侧边栏及「发起讨论」按钮会固定在视口顶部。
```

#### [`resofire-menu-control.admin.nav_order.sticky_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_label%22)

> Sticky sidebar (sidebar stays visible while scrolling)

```diff
-固定侧边栏（滚动时侧边栏保持可见）
+固定侧边栏（滚动时保持可见）
```

#### [`resofire-menu-control.admin.nav_order.title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/zh_Hans/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.title%22)

> Menu Item Order

```diff
-菜单项顺序
+导航项排序
```


### `rob006-last-post-avatar`

#### [`rob006-last-post-avatar.admin.settings.ignorePrivateDiscussions.help`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.ignorePrivateDiscussions.help%22)

> Check this option if you do not want to change avatar behavior for private discussions.

```diff
-启用此项，不影响私密主题中的头像。
+如果不希望更改私密讨论的头像显示方式，请启用此项。
```

#### [`rob006-last-post-avatar.admin.settings.ignorePrivateDiscussions.label`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.ignorePrivateDiscussions.label%22)

> Ignore private discussions (FoF Byōbu)

```diff
-忽略私密主题
+忽略私密讨论（FoF Byōbu）
```

#### [`rob006-last-post-avatar.admin.settings.mode.help`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.mode.help%22)

> Select when and where avatar of last post author should be shown on discussions list. Check README to see visualisation of each option.

```diff
-选择主题列表中显示回帖用户头像的位置。请前往 README 查看可选项对应图例。
+选择讨论列表中显示最后回帖者头像的时机和位置。各选项对应效果请参阅 README。
```

#### [`rob006-last-post-avatar.admin.settings.mode.label`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.mode.label%22)

> Last post avatar display mode

```diff
-最新回帖用户头像显示模式
+最后回帖用户头像显示方式
```

#### [`rob006-last-post-avatar.admin.settings.mode.options.all-replies`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.mode.options.all-replies%22)

> Only replies

```diff
-仅回复
+仅有回复时显示
```

#### [`rob006-last-post-avatar.admin.settings.mode.options.always`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.mode.options.always%22)

> Always

```diff
-总是
+始终显示
```

#### [`rob006-last-post-avatar.admin.settings.mode.options.non-op-replies`](https://weblate.rob006.net/translate/flarum2/rob006-last-post-avatar/zh_Hans/?q=context%3A%3D%22rob006-last-post-avatar.admin.settings.mode.options.non-op-replies%22)

> Only replies except posts of discussion author

```diff
-不看楼主
+仅有非楼主回复时显示
```


### `sycho-advanced-extension-categories`

#### [`sycho-ace.admin.categories.disabled`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.categories.disabled%22)

> Disabled

```diff
-禁用
+已停用
```

#### [`sycho-ace.admin.categories.enabled`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.categories.enabled%22)

> Enabled

```diff
-启用
+已启用
```

#### [`sycho-ace.admin.categories.none`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.categories.none%22)

> A-Z

```diff
-A-Z
+A–Z
```

#### [`sycho-ace.admin.category_selection.label`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.category_selection.label%22)

> Categorize By

```diff
-分类
+分类方式
```

#### [`sycho-ace.admin.category_selection.options.none`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.category_selection.options.none%22)

> None

```diff
-无
+不分类
```

#### [`sycho-ace.admin.category_selection.options.vendor`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.category_selection.options.vendor%22)

> Vendor

```diff
-供应商
+开发者
```

#### [`sycho-ace.admin.extensions`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/zh_Hans/?q=context%3A%3D%22sycho-ace.admin.extensions%22)

> Extensions

```diff
-扩展程序
+扩展
```


### `sycho-github-milestone`

#### [`sycho-github-milestone.admin.default_filter`](https://weblate.rob006.net/translate/flarum2/sycho-github-milestone/zh_Hans/?q=context%3A%3D%22sycho-github-milestone.admin.default_filter%22)

> Default Filter

```diff
-默认过滤条件
+默认筛选
```

#### [`sycho-github-milestone.admin.milestone`](https://weblate.rob006.net/translate/flarum2/sycho-github-milestone/zh_Hans/?q=context%3A%3D%22sycho-github-milestone.admin.milestone%22)

> Milestone ID

```diff
-Milestone ID
+里程碑 ID
```

<del>Milestone</del><ins>里程碑</ins> ID

#### [`sycho-github-milestone.admin.repository`](https://weblate.rob006.net/translate/flarum2/sycho-github-milestone/zh_Hans/?q=context%3A%3D%22sycho-github-milestone.admin.repository%22)

> GitHub Repository

```diff
-GitHub 存储库
+GitHub 仓库
```

GitHub <del>存储库</del><ins>仓库</ins>

#### [`sycho-github-milestone.forum.last_updated`](https://weblate.rob006.net/translate/flarum2/sycho-github-milestone/zh_Hans/?q=context%3A%3D%22sycho-github-milestone.forum.last_updated%22)

> Last updated {time}

```diff
-最新进展 {time}
+最后更新于 {time}
```

<del>最新进展</del><ins>最后更新于</ins> {time}

#### [`sycho-github-milestone.forum.tasks_done`](https://weblate.rob006.net/translate/flarum2/sycho-github-milestone/zh_Hans/?q=context%3A%3D%22sycho-github-milestone.forum.tasks_done%22)

> {number} of {total}

```diff
-{number} / {total}
+已完成 {number}/{total}
```

#### [`sycho-github-milestone.ref.all`](https://weblate.rob006.net/translate/flarum2/sycho-github-milestone/zh_Hans/?q=context%3A%3D%22sycho-github-milestone.ref.all%22)

> All

```diff
-所有
+全部
```


### `sycho-private-facade`

#### [`sycho-private-facade.admin.settings.force_redirect`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.force_redirect%22)

> Force Redirect Guests to Login/Signup Interface

```diff
-未登录时强制跳转到注册登录页
+未登录时重定向登录/注册页
```

#### [`sycho-private-facade.admin.settings.header_layout.options.hide_secondary_items`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.header_layout.options.hide_secondary_items%22)

> Hide Secondary Items (Search, Login and Signup links)

```diff
-隐藏次要元素（搜索、登录注册按钮）
+隐藏右侧项目（搜索、登录和注册按钮）
```

#### [`sycho-private-facade.admin.settings.header_layout.options.show_header`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.header_layout.options.show_header%22)

> Show Header

```diff
-展示横幅
+显示完整顶部导航栏
```

#### [`sycho-private-facade.admin.settings.header_layout.options.show_only_logo`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.header_layout.options.show_only_logo%22)

> Show Logo Ony

```diff
-仅展示 Logo
+仅显示 Logo
```

<del>仅展示</del><ins>仅显示</ins> Logo

#### [`sycho-private-facade.admin.settings.header_layout.title`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.header_layout.title%22)

> Header Layout

```diff
-横幅样式
+顶部导航栏布局
```

#### [`sycho-private-facade.admin.settings.illustration_path`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.illustration_path%22)

> Illustration Image

```diff
-壁纸
+页面插图
```

#### [`sycho-private-facade.admin.settings.primary_color_bg`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.primary_color_bg%22)

> Use a Primary Color Background

```diff
-使用主色调背景
+使用论坛主色作为背景
```

#### [`sycho-private-facade.admin.settings.route_exclusions`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.route_exclusions%22)

> Routes to Exclude From Redirection to Login/Signup Page.

```diff
-禁止重定向到登录注册页的路由。
+不重定向的路由
```

#### [`sycho-private-facade.admin.settings.screen_banner_description`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.screen_banner_description%22)

> Screen Message

```diff
-屏幕消息
+横幅说明
```

#### [`sycho-private-facade.admin.settings.screen_banner_heading`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.screen_banner_heading%22)

> Screen Banner

```diff
-屏幕横幅
+登录/注册页横幅
```

#### [`sycho-private-facade.admin.settings.screen_banner_title`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.screen_banner_title%22)

> Screen Title

```diff
-屏幕标题
+横幅标题
```

#### [`sycho-private-facade.admin.settings.url_exclusions`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.url_exclusions%22)

> URLs to Exclude From Redirection to Login/Signup Page.

```diff
-禁止重定向到登录注册页的 URL。
+不重定向的 URL
```

#### [`sycho-private-facade.admin.settings.use_welcome_hero_text`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/zh_Hans/?q=context%3A%3D%22sycho-private-facade.admin.settings.use_welcome_hero_text%22)

> Use Welcome Banner Text

```diff
-使用欢迎横幅文本
+复用论坛欢迎横幅文案
```


### `sycho-profile-cover`

#### [`sycho-profile-cover.admin.max_size`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.admin.max_size%22)

> Maximum profile cover image size (in KB)

```diff
-个人资料背景图片的最大大小（KB）
+个人资料封面图片大小上限（KB）
```

#### [`sycho-profile-cover.admin.permission.set_cover`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.admin.permission.set_cover%22)

> Set Profile Cover

```diff
-设置个人资料背景
+设置个人资料封面
```

#### [`sycho-profile-cover.admin.thumbnails`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.admin.thumbnails%22)

> Create thumbnails

```diff
-创建缩略图
+生成缩略图
```

#### [`sycho-profile-cover.forum.added.success`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.forum.added.success%22)

> Profile cover updated.

```diff
-背景图更换成功。
+封面已更新。
```

#### [`sycho-profile-cover.forum.cover`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.forum.cover%22)

> Cover

```diff
-背景图
+封面
```

#### [`sycho-profile-cover.forum.edit_cover`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.forum.edit_cover%22)

> Edit Cover

```diff
-编辑背景图
+编辑封面
```

#### [`sycho-profile-cover.forum.notice`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.forum.notice%22)

> Maximum size: {size}

```diff
-最大图片大小：{size}
+最大文件大小：{size}
```

#### [`sycho-profile-cover.forum.removed.error`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.forum.removed.error%22)

> Could not remove cover, try again later.

```diff
-无法移除背景图，请稍后再试。
+无法移除封面，请稍后再试。
```

#### [`sycho-profile-cover.forum.removed.success`](https://weblate.rob006.net/translate/flarum2/sycho-profile-cover/zh_Hans/?q=context%3A%3D%22sycho-profile-cover.forum.removed.success%22)

> Profile cover removed.

```diff
-背景图已移除。
+封面已移除。
```


### `tryhackx-advanced-pages`

#### [`tryhackx-advanced-pages.admin.edit_page.content_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.content_label%22)

> Content

```diff
-页面内容
+内容
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_confirmation%22)

> Are you sure you want to delete this page? This action cannot be undone.

```diff
-确定要删除此页面吗？此操作不可撤销。
+确定要删除此页面吗？此操作无法撤销。
```

#### [`tryhackx-advanced-pages.admin.edit_page.discard_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.discard_button%22)

> Discard

```diff
-放弃
+放弃更改
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_hidden_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_hidden_label%22)

> Hidden (visible only to admins)

```diff
-隐藏（不在列表中显示）
+隐藏（仅管理员可见）
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_published_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_published_label%22)

> Published

```diff
-已发布
+发布
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_restricted_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_restricted_label%22)

> Restricted (requires login)

```diff
-仅限特定用户组访问
+仅登录用户可见
```

#### [`tryhackx-advanced-pages.admin.edit_page.meta_description_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.meta_description_label%22)

> Meta Description (SEO)

```diff
-SEO 描述
+Meta 描述（SEO）
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_flarum`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_flarum%22)

> Flarum (vanilla — multiple newlines = single break)

```diff
-Flarum 模式（两个换行为新段落）
+Flarum（默认，多次换行按一次处理）
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_preserve`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_preserve%22)

> Preserve (respect all newlines)

```diff
-保留换行
+保留（所有换行均保留）
```

#### [`tryhackx-advanced-pages.admin.edit_page.php_warning`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.php_warning%22)

> PHP pages execute server-side code. Only create PHP pages if you understand the security implications. Errors are logged but never displayed to visitors.

```diff
-警告：页面内容中可以使用 PHP 代码，请谨慎操作。
+PHP 页面会在服务器端执行代码。请仅在了解安全风险的情况下创建。错误只会写入日志，不会向访客显示。
```

<del>警告：页面内容中可以使用 </del>PHP <del>代码，请谨慎操作。</del><ins>页面会在服务器端执行代码。请仅在了解安全风险的情况下创建。错误只会写入日志，不会向访客显示。</ins>

#### [`tryhackx-advanced-pages.admin.edit_page.slug_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.slug_label%22)

> URL Slug

```diff
-别名
+URL 路径
```

#### [`tryhackx-advanced-pages.admin.edit_page.submit_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.submit_button%22)

> Save Page

```diff
-保存
+保存页面
```

#### [`tryhackx-advanced-pages.admin.edit_page.title_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.title_label%22)

> Title

```diff
-页面标题
+标题
```

#### [`tryhackx-advanced-pages.admin.edit_page.type_text`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.type_text%22)

> Plain Text

```diff
-富文本
+纯文本
```

#### [`tryhackx-advanced-pages.admin.edit_page.unsaved_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.unsaved_message%22)

> You have unsaved changes. Are you sure you want to close without saving?

```diff
-您有未保存的更改，确定要离开吗？
+有未保存的更改，确定要丢弃吗？
```

#### [`tryhackx-advanced-pages.admin.edit_page.unsaved_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.unsaved_title%22)

> Unsaved Changes

```diff
-未保存的更改
+更改未保存
```

#### [`tryhackx-advanced-pages.admin.edit_page.visible_groups_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.visible_groups_help%22)

> Leave all checked to make the page visible to everyone. Uncheck groups to restrict access. Admins always have access.

```diff
-只有这些用户组可以看到此页面。
+全部勾选则所有人可见。取消勾选某些用户组可限制其访问。管理员始终可以访问。
```

#### [`tryhackx-advanced-pages.admin.pages.empty`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.empty%22)

> No pages have been created yet.

```diff
-暂未创建页面。
+暂无页面
```

#### [`tryhackx-advanced-pages.admin.pages.restricted`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.restricted%22)

> Login Required

```diff
-受限
+需登录
```

#### [`tryhackx-advanced-pages.admin.pages.slug_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.slug_column%22)

> URL

```diff
-别名
+URL
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_center`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_center%22)

> \[center\] — Center text

```diff
-[center] 居中
+[center] — 文字居中
```

\[center\] <del>居中</del><ins>— 文字居中</ins>

#### [`tryhackx-advanced-pages.admin.settings.bbcode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_help%22)

> Enable or disable custom BBCode tags for page rendering. Changes require clearing the formatter cache (php flarum cache:clear).

```diff
-启用或禁用页面渲染中的自定义 BBCode 标签。修改后需要清除格式化器缓存（执行命令：php flarum cache:clear）。
+启用或禁用页面使用的自定义 BBCode 标签。修改后需清除格式化器缓存（php flarum cache:clear）。
```

<del>启用或禁用页面渲染中的自定义</del><ins>启用或禁用页面使用的自定义</ins> BBCode <del>标签。修改后需要清除格式化器缓存（执行命令：php</del><ins>标签。修改后需清除格式化器缓存（php</ins> flarum cache:clear）。

#### [`tryhackx-advanced-pages.admin.settings.bbcode_spoiler`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_spoiler%22)

> \[spoiler\] — Spoiler/Details

```diff
-[spoiler] — 剧透 / 可折叠详情
+[spoiler] — 剧透 / 折叠内容
```

\[spoiler\] — 剧透 / <del>可折叠详情</del><ins>折叠内容</ins>

#### [`tryhackx-advanced-pages.admin.settings.bbcode_table`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_table%22)

> \[table\] \[tr\] \[th\] \[td\] — Tables

```diff
-[table] [tr] [th] [td] — 用于创建表格的 BBCode 标签
+[table] [tr] [th] [td] — 表格
```

\[table\] \[tr\] \[th\] \[td\] — <del>用于创建表格的 BBCode 标签</del><ins>表格</ins>

#### [`tryhackx-advanced-pages.admin.settings.bbcode_url`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_url%22)

> \[url\] — Extended URL parser (accepts URLs rejected by Flarum)

```diff
-[url] — 增强链接解析（支持 Flarum 默认不支持的部分网址格式）
+[url] — 扩展 URL 解析（支持 Flarum 默认不接受的 URL）
```

\[url\] — <del>增强链接解析（支持</del><ins>扩展 URL 解析（支持</ins> Flarum <del>默认不支持的部分网址格式）</del><ins>默认不接受的 URL）</ins>

#### [`tryhackx-advanced-pages.admin.settings.forum_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.forum_help%22)

> Override how spoilers are displayed in regular forum posts. Requires clearing the formatter cache (php flarum cache:clear).

```diff
-覆盖常规论坛帖子中剧透的显示方式。需要清除格式化程序缓存（php-flarum-cache:clear）。
+可替换普通论坛帖子中的剧透样式。修改后需清除格式化器缓存（php flarum cache:clear）。
```

#### [`tryhackx-advanced-pages.admin.settings.forum_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.forum_title%22)

> Forum Integration

```diff
-论坛整合
+论坛集成
```

#### [`tryhackx-advanced-pages.admin.settings.replace_forum_spoiler`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.replace_forum_spoiler%22)

> Replace Flarum's default spoiler with Advanced Pages spoiler style (details/summary)

```diff
-将Flarum的默认扰流板替换为高级页面扰流板样式（详细信息/摘要）
+使用 Advanced Pages 的 details/summary 折叠样式替换 Flarum 默认剧透样式
```

#### [`tryhackx-advanced-pages.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.title%22)

> BBCode Settings

```diff
-高级页面设置
+BBCode 设置
```

#### [`tryhackx-advanced-pages.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.button%22)

> Support Development

```diff
-获取支持
+支持开发
```

#### [`tryhackx-advanced-pages.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.copy%22)

> Copy address

```diff
-复制信息
+复制地址
```

#### [`tryhackx-advanced-pages.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
-感谢使用高级页面插件！如有问题，请复制下方信息并联系支持。
+如果这个扩展对你有帮助，可考虑小额捐赠，支持后续开发和维护。
```

#### [`tryhackx-advanced-pages.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.thanks%22)

> Thank you for your support!

```diff
-感谢您的支持！
+感谢你的支持！
```

#### [`tryhackx-advanced-pages.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.title%22)

> Support This Extension

```diff
-支持与帮助
+支持此扩展
```

#### [`tryhackx-advanced-pages.forum.page.loading`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.loading%22)

> Loading...

```diff
-加载中...
+加载中…
```

#### [`tryhackx-advanced-pages.forum.page.not_found_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/zh_Hans/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.not_found_message%22)

> The page you are looking for does not exist or you do not have permission to view it.

```diff
-您访问的页面未找到。
+你访问的页面不存在，或你无权查看
```


### `walsgit-discussion-cards`

#### [`walsgit_discussion_cards.admin.errors.desktopCardWidth`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.desktopCardWidth%22)

> Primary cards width on desktop must be a number between 10 and 100

```diff
-桌面端主卡片宽度必须是介于 10 到 100 之间的数字
+桌面端主卡片宽度必须为 10 到 100 之间的数字
```

<del>桌面端主卡片宽度必须是介于</del><ins>桌面端主卡片宽度必须为</ins> 10 到 100 之间的数字

#### [`walsgit_discussion_cards.admin.errors.primaryCards`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.primaryCards%22)

> Number of primary cards must be a positive number (0 or greater)

```diff
-主卡片数量必须是一个正数（0 或更大）
+主卡片数量必须为 0 或正数
```

#### [`walsgit_discussion_cards.admin.errors.tabletCardWidth`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.tabletCardWidth%22)

> Primary cards width on tablets must be a number between 10 and 100

```diff
-平板端主卡片宽度必须是介于 10 到 100 之间的数字
+平板端主卡片宽度必须为 10 到 100 之间的数字
```

<del>平板端主卡片宽度必须是介于</del><ins>平板端主卡片宽度必须为</ins> 10 到 100 之间的数字

#### [`walsgit_discussion_cards.admin.settings.general.allowRepostLinks_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowRepostLinks_help%22)

> If this option is enabled (along with the Repost extension), cards for discussions that starts with a url, will open the url when the title of the card is clicked on, whereas the discussion will open, as usual, if any other part of the card is clicked on.

```diff
-如果启用此选项（与 Repost 扩展一起），以网址开头的主题，点击卡片标题时将打开该URL，而像往常一样，点击卡片的任何其他部分将打开讨论。
+同时启用 Repost 扩展后，若讨论首帖以 URL 开头，点击卡片标题会打开该 URL；点击卡片其他位置仍会打开讨论。
```

<del>如果启用此选项（与</del><ins>同时启用</ins> Repost <del>扩展一起），以网址开头的主题，点击卡片标题时将打开该URL，而像往常一样，点击卡片的任何其他部分将打开讨论。</del><ins>扩展后，若讨论首帖以 URL 开头，点击卡片标题会打开该 URL；点击卡片其他位置仍会打开讨论。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.allowRepostLinks_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowRepostLinks_label%22)

> Allow Repost links behavior on cards

```diff
-允许卡片上的 Repost 链接行为
+启用 Repost 链接跳转
```

<del>允许卡片上的</del><ins>启用</ins> Repost <del>链接行为</del><ins>链接跳转</ins>

#### [`walsgit_discussion_cards.admin.settings.general.allowedTags_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowedTags_help%22)

> Discussion cards will be activated and shown for the selected tags pages.

```diff
-讨论卡片将在所的选标签的页面显示。
+在所选标签页启用讨论卡片。
```

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_notActivated`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_notActivated%22)

> {icon} This extension needs to be activated for these settings to work.

```diff
-{icon} 需要激活此扩展才能使这些设置生效。
+{icon} 需要启用此扩展后，这些设置才会生效。
```

{icon} <del>需要激活此扩展才能使这些设置生效。</del><ins>需要启用此扩展后，这些设置才会生效。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_notInstalled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_notInstalled%22)

> {icon} This extension needs to be installed &amp; activated for these settings to work.

```diff
-{icon} 需要安装并激活此扩展才能使这些设置生效。
+{icon} 需要安装并启用此扩展后，这些设置才会生效。
```

{icon} <del>需要安装并激活此扩展才能使这些设置生效。</del><ins>需要安装并启用此扩展后，这些设置才会生效。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_title_end`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_title_end%22)

>  extension installed and activated, you can set the following (2) options:

```diff
- 扩展后，您可以设置以下 (2) 个选项：
+ 后，可以使用以下 2 项设置：
```

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_title_start`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_title_start%22)

> With the 

```diff
-安装并激活 
+安装并启用 
```

#### [`walsgit_discussion_cards.admin.settings.general.cardOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.cardOptions_info%22)

> Set what data/infos should be shown on the cards.

```diff
-设置卡片上应显示哪些数据/信息。
+设置卡片上显示的信息。
```

#### [`walsgit_discussion_cards.admin.settings.general.cardOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.cardOptions_title%22)

> Card options

```diff
-卡片选项
+卡片内容
```

#### [`walsgit_discussion_cards.admin.settings.general.defaultImage_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.defaultImage_info%22)

> Here you can change the default image to be used on cards when none is found in the discussion's first message. &lt;u&gt;IMPORTANT&lt;/u&gt;: &lt;em&gt;note that changing the image will discard any other unsaved settings changes you made and will reload the page automatically. Please save your changes before changing the image&lt;/em&gt; (or vice versa 😉). Accepted formats: JPG, PNG, GIF, BMP or WebP files. Ideal resolution: 400px x 225px (all uploaded images will be converted to a WebP file and resized to a width of 400px, except for images with smaller width, which will keep their initial resolution, and won't be upscaled). Depending on your file's resolution, the image could be shown cropped and/or stretched on cards.

```diff
-在此处可以修改在讨论的首条消息中未找到图片时，卡片上使用的默认图片。<u>重要</u>：<em>请注意，更改图片将丢弃您所做的任何其他未保存的设置更改，并会自动重新加载页面。请在更改图片之前保存您的更改</em>（或者反过来😉）。可接受格式：JPG、PNG、GIF、BMP 或 WebP 文件。理想分辨率：400px x 225px（所有上传的图片都将转换为 PNG 文件并调整宽度为 400px，宽度更小的图片除外，它们将保持初始分辨率，并且不会被放大）。根据您文件的分辨率，图片在卡片上显示时可能会被裁剪和/或拉伸。
+当讨论首帖中没有图片时使用的全局默认图片。<u>重要</u>：<em>更换图片会丢弃其他尚未保存的设置并自动刷新页面，请先保存。</em>支持 JPG、PNG、GIF、BMP、WebP，建议分辨率为 400×225 px。上传后会转换为 WebP 并缩放至 400 px 宽；宽度不足 400 px 时保持原尺寸，不会放大。根据图片比例，卡片中可能出现裁切或拉伸。
```

<del>在此处可以修改在讨论的首条消息中未找到图片时，卡片上使用的默认图片。&lt;u&gt;重要&lt;/u&gt;：&lt;em&gt;请注意，更改图片将丢弃您所做的任何其他未保存的设置更改，并会自动重新加载页面。请在更改图片之前保存您的更改&lt;/em&gt;（或者反过来😉）。可接受格式：JPG、PNG、GIF、BMP</del><ins>当讨论首帖中没有图片时使用的全局默认图片。&lt;u&gt;重要&lt;/u&gt;：&lt;em&gt;更换图片会丢弃其他尚未保存的设置并自动刷新页面，请先保存。&lt;/em&gt;支持</ins> <del>或</del><ins>JPG、PNG、GIF、BMP、WebP，建议分辨率为 400×225 px。上传后会转换为</ins> WebP <del>文件。理想分辨率：400px</del><ins>并缩放至</ins> <del>x</del><ins>400</ins> <del>225px（所有上传的图片都将转换为</del><ins>px</ins> <del>PNG</del><ins>宽；宽度不足</ins> <del>文件并调整宽度为</del><ins>400</ins> <del>400px，宽度更小的图片除外，它们将保持初始分辨率，并且不会被放大）。根据您文件的分辨率，图片在卡片上显示时可能会被裁剪和/或拉伸。</del><ins>px 时保持原尺寸，不会放大。根据图片比例，卡片中可能出现裁切或拉伸。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.defaultImage_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.defaultImage_title%22)

> General default image

```diff
-默认图片
+全局默认图片
```

#### [`walsgit_discussion_cards.admin.settings.general.desktopCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.desktopCardWidth_help%22)

> Set the width (in %) of the primary cards on desktop. (between 10 and 100)

```diff
-设置在桌面端主卡片的宽度（百分比）。（介于 10 到 100 之间）
+设置桌面端主卡片宽度百分比（10–100）
```

#### [`walsgit_discussion_cards.admin.settings.general.markReadCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.markReadCards_help%22)

> If activated, read discussions will have a lighter title and text.

```diff
-如果激活，已读主题的标题和文本将显示得更浅。
+启用后，已读讨论的标题和文字会显示得更淡。
```

#### [`walsgit_discussion_cards.admin.settings.general.markReadCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.markReadCards_label%22)

> Differentiate cards of read/unread discussions

```diff
-区分已读/未读主题的卡片
+区分已读和未读讨论
```

#### [`walsgit_discussion_cards.admin.settings.general.onIndexPage_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.onIndexPage_help%22)

> If activated, the &lt;em&gt;all discussions&lt;/em&gt; page will show cards.

```diff
-如果激活，则<em>所有讨论</em>页面将显示卡片。
+启用后，「全部讨论」页会显示讨论卡片。
```

#### [`walsgit_discussion_cards.admin.settings.general.onIndexPage_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.onIndexPage_label%22)

> Activate cards on the Index Page

```diff
-在索引页上激活卡片
+在「全部讨论」页启用卡片
```

#### [`walsgit_discussion_cards.admin.settings.general.otherOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.otherOptions_info%22)

> The following options will require other extensions to be installed and activated for them to work. &lt;strong&gt;IMPORTANT: please read &lt;u&gt;all&lt;/u&gt; the info for each individual option and do the required steps before activating them&lt;/strong&gt;.

```diff
-以下选项需要安装并激活其他扩展才能工作。<strong>注意：请在激活每个选项之前，阅读<u>所有</u>信息并完成所需的步骤</strong>。
+以下设置需要安装并启用对应扩展才能生效。<strong>启用前</strong>请<u>阅读</u>各项说明并完成所需配置。
```

#### [`walsgit_discussion_cards.admin.settings.general.otherOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.otherOptions_title%22)

> Options requiring other extensions

```diff
-需要其他扩展的选项
+需要其他扩展的设置
```

#### [`walsgit_discussion_cards.admin.settings.general.previewText_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.previewText_help%22)

> If activated, shows the start of the first message as a preview on the card.

```diff
-如果激活，将在卡片上显示首条消息的开头作为预览。
+显示首帖开头的内容作为卡片预览。
```

#### [`walsgit_discussion_cards.admin.settings.general.previewText_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.previewText_label%22)

> Preview text

```diff
-预览文本
+显示预览文字
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCardOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCardOptions_info%22)

> Set the options for primary cards (bigger cards at the top of each page using discussion cards).

```diff
-设置如何使用主卡片（在启用讨论卡片的每个页面顶部显示的更大卡片）。设置为 0 表示不使用。
+设置页面顶部的大尺寸主卡片。
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCardOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCardOptions_title%22)

> Primary Card options

```diff
-主卡片选项
+主卡片设置
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCards_help%22)

> Number of bigger cards shown at the top of each page using discussion cards. Positive number (0 for none).

```diff
-在每个使用讨论卡片的页面顶部显示的较大卡片的数量。（0 或更大的正数）
+页面顶部显示的主卡片数量。设为 0 表示不显示。
```

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_notActivated`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_notActivated%22)

> {icon} This extension needs to be activated for this setting to work.

```diff
-{icon} 需要安装并激活此扩展才能使此设置生效。
+{icon} 需要启用此扩展后，此设置才会生效。
```

{icon} <del>需要安装并激活此扩展才能使此设置生效。</del><ins>需要启用此扩展后，此设置才会生效。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_notInstalled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_notInstalled%22)

> {icon} This extension needs to be installed &amp; activated for this setting to work.

```diff
-{icon} 需要安装并激活此扩展才能使此设置生效。
+{icon} 需要安装并启用此扩展后，此设置才会生效。
```

{icon} <del>需要安装并激活此扩展才能使此设置生效。</del><ins>需要安装并启用此扩展后，此设置才会生效。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_title_end`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_title_end%22)

>  extension installed and activated, you can set the following (1) option:

```diff
- 扩展后，您可以设置以下 (1) 个选项：
+ 后，可以使用以下 1 项设置：
```

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_title_start`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_title_start%22)

> With the 

```diff
-安装并激活 
+安装并启用 
```

#### [`walsgit_discussion_cards.admin.settings.general.showAuthor_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showAuthor_help%22)

> If activated, shows the author of the discussion on the cards.

```diff
-如果激活，将在卡片上显示讨论的作者。
+显示讨论发起者。
```

#### [`walsgit_discussion_cards.admin.settings.general.showBadges_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showBadges_help%22)

> If activated, shows badges at the top left corner of the cards.

```diff
-如果激活，将在卡片的左上角显示徽章。
+在卡片左上角显示徽章。
```

#### [`walsgit_discussion_cards.admin.settings.general.showLastPostInfo_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showLastPostInfo_help%22)

> If option is enabled, it will display the username of the last poster of the discussion and its date at the bottom of the cards.

```diff
-如果启用此选项，它将在卡片上预览文本下方（如果未激活预览文本，则在标签下方）显示讨论的最后回帖者的用户名和日期。
+在卡片底部显示最后回复者和回复时间。
```

#### [`walsgit_discussion_cards.admin.settings.general.showLastPostInfo_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showLastPostInfo_label%22)

> Show last post info

```diff
-显示最后回帖信息
+显示最后回复信息
```

#### [`walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_help%22)

> If option is enabled, it places the number of replies or unread replies (if any) on the right side of the (non primary) cards' title on large screens (instead of the default bottom-left side of the image).

```diff
-如果启用此选项，它将把回复数（或者，如果有未读回复则显示带 * 的未读回复数）放在（非主）卡片标题的右侧（在大屏幕上，而不是默认的图片左下角）。
+启用后，大屏设备上的非主卡片会在标题右侧显示回复数或未读回复数，而不是默认的图片左下角。
```

#### [`walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_label%22)

> Show the number of replies/unread replies on the right side of the card's title

```diff
-在卡片标题右侧显示回复数（或者，如果有未读回复则显示带 * 的未读回复数）
+在标题右侧显示回复数 / 未读回复数
```

#### [`walsgit_discussion_cards.admin.settings.general.showReplies_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showReplies_help%22)

> If activated, shows the number of replies or unread replies (if any) on the cards (and the avatars of a some participants in the discussion on primary cards).

```diff
-如果激活，将在卡片上显示回复数量（或者，如果有未读回复则显示带 * 的未读回复数量）（并在主卡片上显示部分讨论参与者的头像）。
+显示回复数或未读回复数；主卡片还会显示部分参与者头像。
```

#### [`walsgit_discussion_cards.admin.settings.general.showReplies_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showReplies_label%22)

> Show number of replies/unread replies

```diff
-显示回复数/未读回复数
+显示回复数 / 未读回复数
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_help%22)

> If option is enabled, shows the number of views on the cards.

```diff
-如果启用此选项，将在卡片上显示浏览量。
+在卡片中显示浏览量。
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_title_end`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_title_end%22)

>  extension installed and activated, you can set the following (1) option:

```diff
- 扩展后，您可以设置以下 (1) 个选项：
+ 后，可以使用以下 1 项设置：
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_title_start`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_title_start%22)

> With either the 

```diff
-安装并激活 
+安装并启用 
```

#### [`walsgit_discussion_cards.admin.settings.general.tabletCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.tabletCardWidth_help%22)

> Set the width (in %) of the primary cards on tablets. (between 10 and 100)

```diff
-设置在平板端主卡片的宽度（百分比）。（介于 10 到 100 之间）
+设置平板端主卡片宽度百分比（10–100）
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogImages_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogImages_help%22)

> If option is enabled, the cards' image for every blog post will set to: the blog post's featured image; if none, to the blog's content's first found image; if none, to the blog extension's default image; if none, to the discussion cards' tag default image; if none, to the discussion cards' main default image. Note that custom settings for tags used as blog tags will of course be ignored if you chose to redirect blog tags in the Flarum Blog extension settings.

```diff
-如果启用此选项，每篇博客文章的卡片图片将设置为：博客文章的特色图片；如果没有，则设为博客内容中找到的第一张图片；如果没有，则设为博客扩展的默认图片；如果没有，则设为讨论卡片的标签默认图片；如果没有，则设为讨论卡片的主默认图片。请注意，如果您在 Flarum Blog 扩展设置中选择重定向博客标签，那么用作博客标签的标签的自定义设置当然将被忽略。
+博客文章的卡片图片按以下顺序选取：特色图片 → 正文首张图片 → Blog 扩展默认图片 → Discussion Cards 标签默认图片 → Discussion Cards 全局默认图片。若在 Flarum Blog 中启用了博客标签重定向，作为博客标签使用的标签自定义设置会被忽略。
```

<del>如果启用此选项，每篇博客文章的卡片图片将设置为：博客文章的特色图片；如果没有，则设为博客内容中找到的第一张图片；如果没有，则设为博客扩展的默认图片；如果没有，则设为讨论卡片的标签默认图片；如果没有，则设为讨论卡片的主默认图片。请注意，如果您在</del><ins>博客文章的卡片图片按以下顺序选取：特色图片 → 正文首张图片 → Blog 扩展默认图片 → Discussion Cards 标签默认图片 → Discussion Cards 全局默认图片。若在</ins> Flarum Blog <del>扩展设置中选择重定向博客标签，那么用作博客标签的标签的自定义设置当然将被忽略。</del><ins>中启用了博客标签重定向，作为博客标签使用的标签自定义设置会被忽略。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.useBlogImages_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogImages_label%22)

> Use the blog's default and featured images

```diff
-使用博客的默认和特色图片
+使用博客默认图片和特色图片
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogSummary_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogSummary_help%22)

> If this option and preview text are enabled, the cards for blog posts will show the start of the blog post's summary as preview text instead of the start of the blog post's text.

```diff
-如果此选项和预览文本都启用，博客文章的卡片将显示博客文章摘要的开头作为预览文本，而不是博客文章正文的开头。
+同时启用此项和预览文字后，博客文章卡片会显示摘要开头，而不是正文开头。
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogSummary_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogSummary_label%22)

> Use blog post's summary as preview text

```diff
-使用博客文章的摘要作为预览文本
+使用博客摘要作为预览文字
```

#### [`walsgit_discussion_cards.admin.settings.general.viewsExtension_notActivated`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.viewsExtension_notActivated%22)

> {icon} The Discussion Views extension needs to be activated for this setting to work.

```diff
-{icon} 需要激活 Discussion Views 扩展才能使此设置生效。
+{icon} 需要启用 Discussion Views 扩展后，此设置才会生效。
```

{icon} <del>需要激活</del><ins>需要启用</ins> Discussion Views <del>扩展才能使此设置生效。</del><ins>扩展后，此设置才会生效。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.viewsExtension_notInstalled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.viewsExtension_notInstalled%22)

> {icon} One of these extensions needs to be installed &amp; activated for this setting to work.

```diff
-{icon} 需要安装并激活其中一个扩展才能使此设置生效。
+{icon} 需要安装并启用上述任一扩展后，此设置才会生效。
```

{icon} <del>需要安装并激活其中一个扩展才能使此设置生效。</del><ins>需要安装并启用上述任一扩展后，此设置才会生效。</ins>

#### [`walsgit_discussion_cards.admin.settings.general.where_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.where_info%22)

> Set where you want to use discussion cards.

```diff
-设置要使用讨论卡的位置。
+设置在哪些页面使用讨论卡片。
```

#### [`walsgit_discussion_cards.admin.settings.general.where_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.where_title%22)

> Where?

```diff
-在哪里？
+显示位置
```

#### [`walsgit_discussion_cards.admin.tag_modal.desktopCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.desktopCardWidth_help%22)

> Set the width (in %) of the primary cards on desktop (global setting: {default}%, min: 10% &amp; max: 100%).

```diff
-设置在桌面端主卡片的宽度（百分比）（全局设置：{default}%，最小值：10% ，最大值：100%）。
+设置桌面端主卡片宽度百分比（全局设置：{default}%，最小 10%，最大 100%）。
```

#### [`walsgit_discussion_cards.admin.tag_modal.intro_text`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.intro_text%22)

> Here you can set different discussion cards settings for the current tag's page.

```diff
-在此处，您可以为当前标签的页面设置不同的讨论卡片选项。
+设置当前标签页的讨论卡片。
```

#### [`walsgit_discussion_cards.admin.tag_modal.primaryCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.primaryCards_help%22)

> Number of bigger cards shown at the top of the page (global setting : {default}, min: 0).

```diff
-页面顶部显示的较大卡片的数量（全局设置：{default}，最小值：0）。
+页面顶部显示的主卡片数量（全局设置：{default}，最小值：0）。
```

#### [`walsgit_discussion_cards.admin.tag_modal.tabletCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.tabletCardWidth_help%22)

> Set the width (in %) of the primary cards on tablets (global setting: {default}%, min: 10% &amp; max: 100%).

```diff
-设置在平板端主卡片的宽度（百分比）（全局设置：{default}%，最小值：10% ，最大值：100%）。
+设置平板端主卡片宽度百分比（全局设置：{default}%，最小 10%，最大 100%）。
```

#### [`walsgit_discussion_cards.admin.tag_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.title%22)

> Discussion Card Settings for 

```diff
-讨论卡片设置 - 
+讨论卡片设置： 
```

#### [`walsgit_discussion_cards.admin.tags.activation_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.activation_button%22)

> Activate for this tag

```diff
-激活此标签
+为此标签启用
```

#### [`walsgit_discussion_cards.admin.tags.deactivation_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.deactivation_button%22)

> Deactivate for this tag

```diff
-停用此标签
+为此标签停用
```

#### [`walsgit_discussion_cards.admin.tags.defaultImage_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.defaultImage_info%22)

> Set or change the default card image for this tag's page. See the Discussion Cards general settings for details on accepted file formats &amp; resolutions.

```diff
-设置或修改此标签页面的默认卡片图片。有关可接受的文件格式和分辨率的详细信息，请参阅讨论卡片的通用设置。
+设置或更换此标签页使用的默认卡片图片。支持的文件格式和分辨率要求见 Discussion Cards 常规设置。
```

#### [`walsgit_discussion_cards.forum.replies`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.forum.replies%22)

> Replies: {count}

```diff
-{count} 回复
+回复：{count}
```

#### [`walsgit_discussion_cards.forum.unreadReplies`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.forum.unreadReplies%22)

> Unread replies: {count}

```diff
-{count} 未读回复
+未读回复：{count}
```


### `walsgit-recycle-bin`

#### [`walsgit-recycle-bin.admin.bulk_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_actions%22)

> Actions for selected discussions : 

```diff
-已选讨论操作： 
+所选讨论操作： 
```

#### [`walsgit-recycle-bin.admin.bulk_delete_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_delete_label%22)

> Delete selected discussions

```diff
-删除所选讨论帖
+永久删除所选讨论
```

#### [`walsgit-recycle-bin.admin.bulk_post_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_actions%22)

> Actions for selected posts : 

```diff
-已选回复操作： 
+所选帖子操作： 
```

#### [`walsgit-recycle-bin.admin.bulk_post_delete_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_delete_label%22)

> Delete selected posts

```diff
-删除所选回复
+永久删除所选帖子
```

#### [`walsgit-recycle-bin.admin.bulk_post_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_restore_label%22)

> Restore selected posts

```diff
-还原所选回复
+恢复所选帖子
```

#### [`walsgit-recycle-bin.admin.bulk_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_restore_label%22)

> Restore selected discussions

```diff
-还原所选讨论帖
+恢复所选讨论
```

#### [`walsgit-recycle-bin.admin.created_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.created_at%22)

> Created at

```diff
-创建于
+创建时间
```

#### [`walsgit-recycle-bin.admin.delete_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this discussion (irreversible):

```diff
-确定要<u>永久删除</u>这个讨论吗？此操作不可撤销：
+确定要<u>永久删除</u>此讨论吗？此操作无法撤销：
```

#### [`walsgit-recycle-bin.admin.delete_discussion.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.delete_button%22)

> Forever delete this discussion

```diff
-永久删除此讨论
+永久删除讨论
```

#### [`walsgit-recycle-bin.admin.delete_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.success%22)

> Successfully deleted the discussion

```diff
-已永久删除讨论帖
+讨论已永久删除
```

#### [`walsgit-recycle-bin.admin.delete_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this post (irreversible):

```diff
-确定要<u>永久删除</u>此回复吗？（操作不可逆）：
+确定要<u>永久删除</u>此帖子吗？此操作无法撤销。所在讨论：
```

#### [`walsgit-recycle-bin.admin.delete_post.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.delete_button%22)

> Forever delete this post

```diff
-永久删除此回复
+永久删除帖子
```

#### [`walsgit-recycle-bin.admin.delete_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.success%22)

> Successfully deleted the post

```diff
-已永久删除回复
+帖子已永久删除
```

#### [`walsgit-recycle-bin.admin.delete_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post_tooltip%22)

> Delete post #{postId}

```diff
-删除回复
+永久删除帖子 #{postId}
```

#### [`walsgit-recycle-bin.admin.delete_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_tooltip%22)

> Delete discussion #{discussionId}

```diff
-删除讨论
+永久删除讨论 #{discussionId}
```

#### [`walsgit-recycle-bin.admin.empty_list`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.empty_list%22)

> No discussions in the recycle bin.

```diff
-回收站中暂无讨论。
+回收站中暂无讨论
```

#### [`walsgit-recycle-bin.admin.grid.invalid_column_content`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.grid.invalid_column_content%22)

> Invalid content!

```diff
-内容无效！
+内容无效
```

#### [`walsgit-recycle-bin.admin.hidden_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_at%22)

> Hidden at

```diff
-隐藏于
+隐藏时间
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.submit_button%22)

> Forever delete these discussions

```diff
-永久删除讨论帖
+永久删除所选讨论
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.success%22)

> Successfully deleted the selected discussions

```diff
-已永久删除所选讨论帖
+所选讨论已永久删除
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.text_end%22)

>  selected discussions?

```diff
- 个已选择的讨论帖吗？
+ 个讨论吗？
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.text_start%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; these 

```diff
-确定要<u>永久删除</u>这 
+确定要<u>永久删除</u>选中的 
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.title%22)

> Forever delete these discussions

```diff
-永久删除讨论帖
+永久删除所选讨论
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.submit_button%22)

> Forever delete these posts

```diff
-永久删除回复
+永久删除所选帖子
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.success%22)

> Successfully deleted the selected posts

```diff
-已永久删除所选回复
+所选帖子已永久删除
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.text_end%22)

>  selected posts?

```diff
- 个已选择的回复吗？
+ 个帖子吗？
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.text_start%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; these 

```diff
-确定要<u>永久删除</u>这 
+确定要<u>永久删除</u>选中的 
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.title%22)

> Forever delete these posts

```diff
-永久删除回复
+永久删除所选帖子
```

#### [`walsgit-recycle-bin.admin.mass_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_help_text%22)

> Please wait for page refresh after confirming mass restore or delete

```diff
-执行批量还原或删除后，请耐心等待页面自动刷新
+批量恢复或删除后，请等待页面刷新
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.submit_button%22)

> Restore these discussions

```diff
-还原讨论帖
+恢复所选讨论
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.success%22)

> Successfully restored the selected discussions

```diff
-已成功还原所选讨论帖
+所选讨论已恢复
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_end%22)

>  selected discussions?

```diff
- 个已选择的讨论帖吗？
+ 个讨论吗？
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_start%22)

> Are you sure you want to restore these 

```diff
-确定要还原这 
+确定要恢复选中的 
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.title%22)

> Restore the selected discussions

```diff
-还原所选讨论帖
+恢复所选讨论
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.submit_button%22)

> Restore these posts

```diff
-还原回复
+恢复所选帖子
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.success%22)

> Successfully restored the selected posts

```diff
-已成功还原所选回复
+所选帖子已恢复
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.text_end%22)

>  selected posts?

```diff
- 个已选择的回复吗？
+ 个帖子吗？
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.text_start%22)

> Are you sure you want to restore these 

```diff
-确定要还原这 
+确定要恢复选中的 
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.title%22)

> Restore the selected posts

```diff
-还原所选回复
+恢复所选帖子
```

#### [`walsgit-recycle-bin.admin.pagination.go_to_page_textbox_a11y_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.go_to_page_textbox_a11y_label%22)

> Go directly to page number

```diff
-跳转到页码
+跳转到指定页
```

#### [`walsgit-recycle-bin.admin.pagination.page_counter`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.page_counter%22)

> Page {current} of {total}

```diff
-第 {current} 页 / 共 {total} 页
+第 {current} / {total} 页
```

第 {current} <del>页 </del>/<del> 共</del> {total} 页

#### [`walsgit-recycle-bin.admin.post.open_post`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.open_post%22)

> Open post

```diff
-查看回复
+查看帖子
```

#### [`walsgit-recycle-bin.admin.post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.title%22)

> Post text

```diff
-回复内容
+帖子内容
```

#### [`walsgit-recycle-bin.admin.posts_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.posts_bin%22)

> Posts Bin

```diff
-回复回收站
+帖子回收站
```

#### [`walsgit-recycle-bin.admin.restore_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.confirmation%22)

> Are you sure you want to restore this discussion:

```diff
-确定要还原这个讨论帖吗：
+确定要恢复此讨论吗：
```

#### [`walsgit-recycle-bin.admin.restore_discussion.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.restore_button%22)

> Restore this discussion

```diff
-还原此讨论
+恢复讨论
```

#### [`walsgit-recycle-bin.admin.restore_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.success%22)

> Successfully restored the discussion

```diff
-已成功还原讨论帖
+讨论已恢复
```

#### [`walsgit-recycle-bin.admin.restore_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.title%22)

> Restore discussion

```diff
-还原讨论
+恢复讨论
```

#### [`walsgit-recycle-bin.admin.restore_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.confirmation%22)

> Are you sure you want to restore this post from the discussion 

```diff
-确定要还原此回复吗？所属讨论： 
+确定要恢复此帖子吗？所在讨论： 
```

#### [`walsgit-recycle-bin.admin.restore_post.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.restore_button%22)

> Restore this post

```diff
-还原此回复
+恢复帖子
```

#### [`walsgit-recycle-bin.admin.restore_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.success%22)

> Successfully restored the post

```diff
-已成功还原回复
+帖子已恢复
```

#### [`walsgit-recycle-bin.admin.restore_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.title%22)

> Restore post

```diff
-还原回复
+恢复帖子
```

#### [`walsgit-recycle-bin.admin.restore_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post_tooltip%22)

> Restore post #{postId}

```diff
-还原回复
+恢复帖子 #{postId}
```

#### [`walsgit-recycle-bin.admin.restore_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_tooltip%22)

> Restore discussion #{discussionId}

```diff
-还原讨论
+恢复讨论 #{discussionId}
```

#### [`walsgit-recycle-bin.admin.search_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_help_text%22)

> Searches for words in titles as well as in the messages of the discussions

```diff
-支持搜索讨论标题及讨论内容关键词
+搜索讨论标题和帖子内容中的关键词
```

#### [`walsgit-recycle-bin.admin.search_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_placeholder%22)

> Search for a discussion

```diff
-搜索讨论帖
+搜索讨论…
```

#### [`walsgit-recycle-bin.admin.search_post_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_help_text%22)

> Searches for words in the hidden posts

```diff
-在已隐藏的回复中搜索关键词
+搜索已隐藏帖子中的关键词
```

#### [`walsgit-recycle-bin.admin.search_post_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_placeholder%22)

> Search for a post

```diff
-搜索回复内容
+搜索帖子…
```

#### [`walsgit-recycle-bin.admin.total_hidden_posts`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_posts%22)

> Total hidden posts

```diff
-已隐藏回复总数
+已隐藏帖子总数
```

#### [`walsgit-recycle-bin.admin.unknown_date`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.unknown_date%22)

> Unknown date

```diff
-未知日期
+日期未知
```


### `yippy-auth-ldap`

#### [`yippy-auth-ldap.admin.settings.display_detailed_error`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.display_detailed_error%22)

> Display detailed LDAP errors for failed login attempts

```diff
-LDAP 登录时抛出详细错误
+登录失败时显示详细 LDAP 错误
```

<ins>登录失败时显示详细 </ins>LDAP <del>登录时抛出详细错误</del><ins>错误</ins>

#### [`yippy-auth-ldap.admin.settings.domains.add`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.add%22)

> Add Domain

```diff
-添加域名
+添加 LDAP 域
```

#### [`yippy-auth-ldap.admin.settings.domains.banner`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.banner%22)

> Domain {index} - \[{isEnabled}\]

```diff
-域名 {index} - [{isEnabled}]
+LDAP 域 {index} — [{isEnabled}]
```

<del>域名</del><ins>LDAP 域</ins> {index} <del>-</del><ins>—</ins> \[{isEnabled}\]

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_dn%22)

> Distinguished name (DNs)

```diff
-辨识名称（DNs）
+管理员 DN
```

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_dn_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_dn_help%22)

> Leave empty for anonymous binding

```diff
-留空以允许匿名绑定
+留空则使用匿名绑定
```

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_password`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_password%22)

> Password

```diff
-密码
+管理员密码
```

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_password_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_password_help%22)

> Leave empty for anonymous binding

```diff
-留空以匿名绑定
+留空则使用匿名绑定
```

#### [`yippy-auth-ldap.admin.settings.domains.data.base_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.base_dn%22)

> Base DNs

```diff
-基本辨识名称（DNs）
+Base DN
```

#### [`yippy-auth-ldap.admin.settings.domains.data.filter`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.filter%22)

> Filter to apply

```diff
-要应用的过滤器
+附加筛选条件
```

#### [`yippy-auth-ldap.admin.settings.domains.data.filter_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.filter_help%22)

> Optional, must exclude 'Search fields' into the filter. For example inputting filter as '(objectclass=user)' and selecting 'uid' within 'Search fields' will amend the filter as '(&amp;(objectclass=user)(uid=\[User's Input\]))"

```diff
-可选，不可填写「搜索字段」，搜索字段必须由用户端提供，不可定义在过滤器中。过滤器为 (objectclass=user) 时，选择 UID 后，最终使用时自动添加为 (&(objectclass=user)(uid=[User's Input]))
+可选。筛选条件中不要包含「搜索字段」。例如填写「(objectclass=user)」，并在「搜索字段」中选择「uid」，最终会组合为「(&(objectclass=user)(uid=[用户输入]))」
```

#### [`yippy-auth-ldap.admin.settings.domains.data.follow_referrals`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.follow_referrals%22)

> Follow referrals to bind to LDAP server

```diff
-跟随指引绑定到 LDAP 服务器
+绑定 LDAP 服务器时跟随 Referral
```

<del>跟随指引绑定到</del><ins>绑定</ins> LDAP <del>服务器</del><ins>服务器时跟随 Referral</ins>

#### [`yippy-auth-ldap.admin.settings.domains.data.host`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.host%22)

> Domains or server IP addresses

```diff
-域名或服务器 IP 地址
+服务器域名或 IP 地址
```

<del>域名或服务器</del><ins>服务器域名或</ins> IP 地址

#### [`yippy-auth-ldap.admin.settings.domains.data.host_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.host_help%22)

> Comma separated

```diff
-英文逗号分隔
+多个地址以逗号分隔
```

#### [`yippy-auth-ldap.admin.settings.domains.data.is_enabled`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.is_enabled%22)

> Enable LDAP Server

```diff
-启用 LDAP 服务
+启用此 LDAP 服务器
```

<del>启用</del><ins>启用此</ins> LDAP <del>服务</del><ins>服务器</ins>

#### [`yippy-auth-ldap.admin.settings.domains.data.permission_groups`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.permission_groups%22)

> Assign specific Permissions

```diff
-分配特定的权限
+注册时加入用户组
```

#### [`yippy-auth-ldap.admin.settings.domains.data.permission_groups_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.permission_groups_help%22)

> This is applied upon registration

```diff
-这在注册时生效
+新用户注册时自动加入所选用户组
```

#### [`yippy-auth-ldap.admin.settings.domains.data.port_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.port_help%22)

> Non SSL (Port 389) or SSL (Port 636).

```diff
-非 SSL 使用 369 端口，SSL 使用 636 端口。
+非 SSL：389；SSL：636。
```

非 <del>SSL 使用 369 端口，SSL 使用 636 端口。</del><ins>SSL：389；SSL：636。</ins>

#### [`yippy-auth-ldap.admin.settings.domains.data.search_user_fields_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.search_user_fields_help%22)

> Select multiple search fields using the dropdown options, for example selecting "mail" will only allow email, while "uid,mail" will allow either email or username.

```diff
-选择多个搜索字段，例如选择「电子邮件」将仅允许电子邮件，而选择「UID、电子邮件」将允许使用电子邮件地址或用户名。
+可选择多个 LDAP 字段。只选「mail」时可使用邮箱查找账号；选择「uid,mail」时可使用用户名或邮箱。
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_mail`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_mail%22)

> Assign Email field

```diff
-关联电子邮件地址字段
+邮箱映射字段
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_mail_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_mail_help%22)

> Leave empty for allowing User's to set their own email during registation

```diff
-留空以允许用户在注册时自定义电子邮件地址
+留空则允许用户注册时自行填写邮箱
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields%22)

> Assign Nickname with fields

```diff
-关联昵称字段
+昵称映射字段
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields_help%22)

> Nickname extension must be enabled, compile the Nickname with multiple LDAP fields using the dropdown options. For example selecting "givenname,sn" will assign "\[First Name\] \[Last Name\]" as their Nickname

```diff
-此功能需启用昵称扩展程序。组合多个 LDAP 字段以生成昵称，例如，选择「givenname,sn」将生成「[名] [姓]」作为用户昵称
+需要启用 Nicknames 扩展。可组合多个 LDAP 字段生成昵称，例如选择「givenname,sn」时，昵称会设为「[名] [姓]」
```

<del>此功能需启用昵称扩展程序。组合多个</del><ins>需要启用 Nicknames 扩展。可组合多个</ins> LDAP <del>字段以生成昵称，例如，选择「givenname,sn」将生成「\[名\]</del><ins>字段生成昵称，例如选择「givenname,sn」时，昵称会设为「\[名\]</ins> <del>\[姓\]」作为用户昵称</del><ins>\[姓\]」</ins>

#### [`yippy-auth-ldap.admin.settings.domains.data.user_username`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_username%22)

> Assign Username field

```diff
-关联用户名字段
+用户名映射字段
```

#### [`yippy-auth-ldap.admin.settings.domains.data.version_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.version_help%22)

> Can only be set to 2 or 3 (3 is default).

```diff
-无法设置为 2 或 3（默认 3）。
+仅支持 2 或 3，默认 3。
```

<del>无法设置为</del><ins>仅支持</ins> 2 或 <del>3（默认</del><ins>3，默认</ins> <del>3）。</del><ins>3。</ins>

#### [`yippy-auth-ldap.admin.settings.domains.description`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.description%22)

> Enter all available LDAP domains for Flarum to use for login

```diff
-Flarum 登录可用的 LDAP 域名
+添加用于 Flarum 登录的 LDAP 域
```

<ins>添加用于 </ins>Flarum <del>登录可用的</del><ins>登录的</ins> LDAP <del>域名</del><ins>域</ins>

#### [`yippy-auth-ldap.admin.settings.domains.header.flarum_description`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.header.flarum_description%22)

> When the LDAP account has been found, you can assign the corresponding fields to the Flarum User Profile at registation.

```diff
-同步 LDAP 账号资料到 Flarum 用户资料。
+找到 LDAP 账号后，将相应字段映射到注册时创建的 Flarum 用户资料。
```

<del>同步</del><ins>找到</ins> LDAP <del>账号资料到</del><ins>账号后，将相应字段映射到注册时创建的</ins> Flarum 用户资料。

#### [`yippy-auth-ldap.admin.settings.domains.header.search_fields_description`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.header.search_fields_description%22)

> Create a list of LDAP fields to compare with the User's provided Username.

```diff
-创建一个 LDAP 字段列表，用于用户名校对。
+设置用于匹配用户登录名的 LDAP 字段。
```

<del>创建一个</del><ins>设置用于匹配用户登录名的</ins> LDAP <del>字段列表，用于用户名校对。</del><ins>字段。</ins>

#### [`yippy-auth-ldap.admin.settings.domains.header.server`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.header.server%22)

> LDAP Server Settings

```diff
-LDAP 服务设置
+LDAP 服务器设置
```

LDAP <del>服务设置</del><ins>服务器设置</ins>

#### [`yippy-auth-ldap.admin.settings.domains.is_enabled.disabled`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.is_enabled.disabled%22)

> Disabled

```diff
-禁用
+已禁用
```

#### [`yippy-auth-ldap.admin.settings.domains.is_enabled.enabled`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.is_enabled.enabled%22)

> Enable

```diff
-启用
+已启用
```

#### [`yippy-auth-ldap.admin.settings.domains.title`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.title%22)

> LDAP Domains

```diff
-LDAP 域名
+LDAP 域
```

LDAP <del>域名</del><ins>域</ins>

#### [`yippy-auth-ldap.admin.settings.method_name`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.method_name%22)

> LDAP server name (will appear after "Login with")

```diff
-LDAP 服务名称（用于显示「xxx 账号登录」）
+LDAP 显示名称（显示在「使用 … 登录」中）
```

LDAP <del>服务名称（用于显示「xxx</del><ins>显示名称（显示在「使用</ins> <del>账号登录」）</del><ins>… 登录」中）</ins>

#### [`yippy-auth-ldap.admin.settings.onlyUse`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.onlyUse%22)

> Hide Flarum standard login method

```diff
-隐藏 Flarum 原生登录方法
+隐藏 Flarum 默认登录入口
```

隐藏 Flarum <del>原生登录方法</del><ins>默认登录入口</ins>

#### [`yippy-auth-ldap.forum.account_found`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.account_found%22)

> Found account in {server}

```diff
-在 {server} 中找到帐号
+已在 {server} 找到账号
```

<del>在</del><ins>已在</ins> {server} <del>中找到帐号</del><ins>找到账号</ins>

#### [`yippy-auth-ldap.forum.errors.account.disabled`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.account.disabled%22)

> Your account is disabled, contact your {server} administration.

```diff
-账号未启用，请联系 {server} 管理员。
+你的账号已被禁用，请联系 {server} 管理员。
```

<del>账号未启用，请联系</del><ins>你的账号已被禁用，请联系</ins> {server} 管理员。

#### [`yippy-auth-ldap.forum.errors.account.expired`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.account.expired%22)

> Your account has expired, contact your {server} administration.

```diff
-账号已过期，请联系 {server} 管理员。
+你的账号已过期，请联系 {server} 管理员。
```

<del>账号已过期，请联系</del><ins>你的账号已过期，请联系</ins> {server} 管理员。

#### [`yippy-auth-ldap.forum.errors.account.invalid_inputs`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.account.invalid_inputs%22)

> Input fields cannot be empty

```diff
-输入字段不可为空
+输入内容不能为空
```

#### [`yippy-auth-ldap.forum.errors.account.locked`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.account.locked%22)

> Your account is locked, contact your {server} administration.

```diff
-账号已被锁定，请联系 {server} 管理员。
+你的账号已被锁定，请联系 {server} 管理员。
```

<del>账号已被锁定，请联系</del><ins>你的账号已被锁定，请联系</ins> {server} 管理员。

#### [`yippy-auth-ldap.forum.errors.account.not_found`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.account.not_found%22)

> Cannot find your account in {server}.

```diff
-无法找到 {server} 账号。
+无法在 {server} 中找到你的账号。
```

<del>无法找到</del><ins>无法在</ins> {server} <del>账号。</del><ins>中找到你的账号。</ins>

#### [`yippy-auth-ldap.forum.errors.account.password_expired`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.account.password_expired%22)

> Your password has expired.

```diff
-密码已过期。
+你的密码已过期。
```

#### [`yippy-auth-ldap.forum.errors.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.csrf_token_mismatch%22)

> You have been inactive for too long, please refresh the page and try again

```diff
-您已经长时间未活动，请刷新页面并重试
+页面闲置时间过长，请刷新后重试
```

#### [`yippy-auth-ldap.forum.errors.domains.empty_base_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_base_dn%22)

> Domain {domain\_index} has no Base DNs set, amend extension settings.

```diff
-域名 {domain_index} 未设置基本辨识名称（DNs），请修改扩展程序设置。
+LDAP 域 {domain_index} 未设置 Base DN。
```

<del>域名</del><ins>LDAP 域</ins> {domain\_index} <del>未设置基本辨识名称（DNs），请修改扩展程序设置。</del><ins>未设置 Base DN。</ins>

#### [`yippy-auth-ldap.forum.errors.domains.empty_host`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_host%22)

> Domain {domain\_index} has no Domains or server IP addresses set, amend extension settings.

```diff
-域名 {domain_index} 未设置任何域名或服务器 IP 地址，请修改扩展程序设置。
+LDAP 域 {domain_index} 未设置服务器域名或 IP 地址。
```

<del>域名</del><ins>LDAP 域</ins> {domain\_index} <del>未设置任何域名或服务器</del><ins>未设置服务器域名或</ins> IP <del>地址，请修改扩展程序设置。</del><ins>地址。</ins>

#### [`yippy-auth-ldap.forum.errors.domains.empty_search_field`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_search_field%22)

> Domain {domain\_index} has LDAP Account Search - 'Search field' empty, amend extension settings.

```diff
-域名 {domain_index} 未设置 LDAP 账号搜索的搜索字段，请修改扩展程序设置。
+LDAP 域 {domain_index} 未设置「LDAP 账号搜索 → 搜索字段」。
```

<del>域名</del><ins>LDAP 域</ins> {domain\_index} <del>未设置</del><ins>未设置「LDAP</ins> <del>LDAP</del><ins>账号搜索</ins> <del>账号搜索的搜索字段，请修改扩展程序设置。</del><ins>→ 搜索字段」。</ins>

#### [`yippy-auth-ldap.forum.errors.domains.empty_user_username`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_user_username%22)

> Domain {domain\_index} has Flarum User Profile - 'Username field' empty, amend extension settings.

```diff
-域名 {domain_index} 未设置 Flarum 用户资料的用户名字段，请修改扩展程序设置。
+LDAP 域 {domain_index} 未设置「Flarum 用户资料 → 用户名字段」。
```

<del>域名</del><ins>LDAP 域</ins> {domain\_index} <del>未设置</del><ins>未设置「Flarum</ins> <del>Flarum</del><ins>用户资料</ins> <del>用户资料的用户名字段，请修改扩展程序设置。</del><ins>→ 用户名字段」。</ins>

#### [`yippy-auth-ldap.forum.errors.domains.mail_field_does_not_exist`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.mail_field_does_not_exist%22)

> Domain {domain\_index} cannot find mail for Flarum User Profile - \`Email field\` with \`{data}\`, amend extension settings.

```diff
-无法在域名 {domain_index} 中找到 Flarum 用户资料的电子邮件地址字段 `{data}`，请修改扩展程序设置。
+LDAP 域 {domain_index} 的查询结果中不存在邮箱字段 `{data}`，请检查扩展设置。
```

#### [`yippy-auth-ldap.forum.errors.domains.no_domains`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.no_domains%22)

> Admin settings has no domains set, amend extension settings.

```diff
-未设置域名，请修改扩展程序设置。
+尚未配置 LDAP 域，请检查扩展设置。
```

#### [`yippy-auth-ldap.forum.errors.domains.username_field_does_not_exist`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.username_field_does_not_exist%22)

> Domain {domain\_index} cannot find username for Flarum User Profile - \`Username field\` with \`{data}\`, amend extension settings.

```diff
-无法在域名 {domain_index} 中找到 Flarum 用户资料的用户名字段 `{data}`，请修改扩展程序设置。
+LDAP 域 {domain_index} 的查询结果中不存在用户名字段 `{data}`，请检查扩展设置。
```

#### [`yippy-auth-ldap.forum.errors.not_authenticated`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.not_authenticated%22)

> Unable to bind {server} due to invalid credential, amend extension settings.

```diff
-无效的凭据，无法绑定 {server}，请修改扩展程序设置。
+{server} LDAP 绑定失败：凭据无效，请检查扩展设置。
```

#### [`yippy-auth-ldap.forum.errors.search_filter_is_invalid`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.search_filter_is_invalid%22)

> Unable to search filter for {server} due to invalid \`LDAP search fields\`, amend extension settings.

```diff
-输入的 LDAP 搜索字段无效，无法搜索 {server}，请修改扩展程序设置。
+{server} 的 LDAP 搜索字段无效，无法构建搜索过滤器，请检查扩展设置。
```

#### [`yippy-auth-ldap.forum.log_in_with`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/zh_Hans/?q=context%3A%3D%22yippy-auth-ldap.forum.log_in_with%22)

> Log in with {server}

```diff
-{server} 账号登录
+使用 {server} 登录
```

<ins>使用 </ins>{server} <del>账号登录</del><ins>登录</ins>


### `yippy-tag-with-themes`

#### [`yippy-tag-with-themes.admin.designs.add`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.add%22)

> Add Design for Tags

```diff
-添加标签设计
+添加主题样式规则
```

#### [`yippy-tag-with-themes.admin.designs.banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.banner%22)

> Design Theme {index} - \[{isEnabled}\]

```diff
-设计主题 {index} - [{isEnabled}]
+主题样式规则 {index} — [{isEnabled}]
```

<del>设计主题</del><ins>主题样式规则</ins> {index} <del>-</del><ins>—</ins> \[{isEnabled}\]

#### [`yippy-tag-with-themes.admin.designs.data.child_background_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.child_background_color%22)

> Edit Child Background Color

```diff
-编辑次要背景颜色
+子标签背景色
```

#### [`yippy-tag-with-themes.admin.designs.data.child_font_class`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.child_font_class%22)

> Edit Child Font

```diff
-编辑次要字体
+子标签文字样式
```

#### [`yippy-tag-with-themes.admin.designs.data.is_enabled`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.is_enabled%22)

> Enable Design Theme

```diff
-启用此设计主题
+启用此主题样式规则
```

#### [`yippy-tag-with-themes.admin.designs.data.opacity_background`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.opacity_background%22)

> Background Opacity Level

```diff
-背景透明度
+背景不透明度
```

#### [`yippy-tag-with-themes.admin.designs.data.opacity_footer`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.opacity_footer%22)

> Footer Opacity Level

```diff
-页脚透明度
+底栏不透明度
```

#### [`yippy-tag-with-themes.admin.designs.data.opacity_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.opacity_outline%22)

> Outline Opacity Level

```diff
-轮廓透明度
+描边不透明度
```

#### [`yippy-tag-with-themes.admin.designs.data.outline_background_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.outline_background_color%22)

> Edit Outline Color

```diff
-编辑轮廓颜色
+描边颜色
```

#### [`yippy-tag-with-themes.admin.designs.data.primary_background_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.primary_background_color%22)

> Edit Primary Background Color

```diff
-编辑主要背景颜色
+主标签背景色
```

#### [`yippy-tag-with-themes.admin.designs.data.primary_font_class`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.primary_font_class%22)

> Edit Primary Font

```diff
-编辑主要字体
+主标签文字样式
```

#### [`yippy-tag-with-themes.admin.designs.data.secondary_font_class`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.secondary_font_class%22)

> Edit Secondary Font

```diff
-编辑辅助字体样式
+次级标签文字样式
```

#### [`yippy-tag-with-themes.admin.designs.data.tags`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.tags%22)

> Selected Primary Tags

```diff
-已选主标签
+主标签
```

#### [`yippy-tag-with-themes.admin.designs.data.tags_help`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.tags_help%22)

> Choose one or more tag for this customised design theme

```diff
-为此自定义设计主题选择一个或多个标签
+选择一个或多个应用此主题样式的主标签
```

#### [`yippy-tag-with-themes.admin.designs.data.themeName`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.themeName%22)

> Select Theme

```diff
-选择主题
+选择主题样式
```

#### [`yippy-tag-with-themes.admin.designs.data.unread_color`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.unread_color%22)

> Edit Unread Background Color

```diff
-编辑未读状态背景颜色
+未读标记颜色
```

#### [`yippy-tag-with-themes.admin.designs.description`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.description%22)

> Provide a list of rules for displaying different themes for specific tags

```diff
-为特定标签配置不同的显示主题规则
+为指定标签设置不同的讨论样式
```

#### [`yippy-tag-with-themes.admin.designs.header.color_theme`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.header.color_theme%22)

> Customise Default Color Scheme

```diff
-自定义默认配色方案
+自定义配色
```

#### [`yippy-tag-with-themes.admin.designs.header.theme`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.header.theme%22)

> Custom Theme

```diff
-自定义主题
+主题样式
```

#### [`yippy-tag-with-themes.admin.designs.is_enabled.disabled`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.is_enabled.disabled%22)

> Disabled

```diff
-禁用
+已禁用
```

#### [`yippy-tag-with-themes.admin.designs.is_enabled.enabled`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.is_enabled.enabled%22)

> Enable

```diff
-启用
+已启用
```

#### [`yippy-tag-with-themes.admin.designs.title`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.title%22)

> Customised Design Theme for Tags

```diff
-标签自定义设计主题
+按标签自定义主题样式
```

#### [`yippy-tag-with-themes.admin.helps.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.design_default%22)

> Select a default design layout

```diff
-选择一个默认的设计布局
+选择讨论的默认样式
```

#### [`yippy-tag-with-themes.admin.helps.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.display_themes%22)

> Only allow themes for specific groups

```diff
-仅允许特定用户组使用主题样式
+指定哪些用户组可以看到标签主题样式
```

#### [`yippy-tag-with-themes.admin.labels.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.design_default%22)

> Discussion Design Layout

```diff
-讨论页设计布局
+讨论默认样式
```

#### [`yippy-tag-with-themes.admin.labels.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.display_themes%22)

> Enable Tag for Themes Permission

```diff
-启用标签主题权限
+显示标签主题样式
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic%22)

> Basic

```diff
-基础样式
+基础
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_banner%22)

> Basic (Primary Banner)

```diff
-基础（主横幅样式）
+基础（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline%22)

> Basic Outline

```diff
-基础轮廓
+基础描边
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline_banner%22)

> Basic Outline (Primary Banner)

```diff
-基础轮廓（主横幅样式）
+基础描边（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline_tab%22)

> Basic Outline (Primary Tab)

```diff
-基础轮廓（主选项卡样式）
+基础描边（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_outline_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_outline_tag%22)

> Basic Outline (Primary Tag)

```diff
-基础轮廓（主标签样式）
+基础描边（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tab%22)

> Basic (Primary Tab)

```diff
-基础（主选项卡样式）
+基础（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tag%22)

> Basic (Primary Tag)

```diff
-基础（主标签样式）
+基础（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat%22)

> Flat

```diff
-扁平化
+扁平
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_banner%22)

> Flat (Primary Banner)

```diff
-扁平化（主横幅样式）
+扁平（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border%22)

> Flat Border

```diff
-扁平化边框
+扁平边框
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border_banner%22)

> Flat Border (Primary Banner)

```diff
-扁平化边框（主横幅样式）
+扁平边框（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border_tab%22)

> Flat Border (Primary Tab)

```diff
-扁平化边框（主选项卡样式）
+扁平边框（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_border_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_border_tag%22)

> Flat Border (Primary Tag)

```diff
-扁平化边框（主标签样式）
+扁平边框（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_tab%22)

> Flat (Primary Tab)

```diff
-扁平化（主选项卡样式）
+扁平（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.flat_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.flat_tag%22)

> Flat (Primary Tag)

```diff
-扁平化（主标签样式）
+扁平（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat%22)

> Rounded Flat

```diff
-圆角扁平化
+圆角扁平
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_banner%22)

> Rounded Flat (Primary Banner)

```diff
-圆角扁平化（主横幅样式）
+圆角扁平（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border%22)

> Rounded Flat Border

```diff
-圆角扁平化边框
+圆角扁平边框
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_banner%22)

> Rounded Flat Border (Primary Banner)

```diff
-圆角扁平化边框（主横幅样式）
+圆角扁平边框（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tab%22)

> Rounded Flat Border (Primary Tab)

```diff
-圆角扁平化边框（主选项卡样式）
+圆角扁平边框（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_border_tag%22)

> Rounded Flat Border (Primary Tag)

```diff
-圆角扁平化边框（主标签样式）
+圆角扁平边框（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_tab%22)

> Rounded Flat (Primary Tab)

```diff
-圆角扁平化（主选项卡样式）
+圆角扁平（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.rounded_flat_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.rounded_flat_tag%22)

> Rounded Flat (Primary Tag)

```diff
-圆角扁平化（主标签样式）
+圆角扁平（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note%22)

> Sticky Note

```diff
-便签模式
+便签
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_banner%22)

> Sticky Note (Primary Banner)

```diff
-便签（主横幅样式）
+便签（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline%22)

> Sticky Note Outline

```diff
-便签轮廓
+便签描边
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner%22)

> Sticky Note Outline (Primary Banner)

```diff
-便签轮廓（主横幅样式）
+便签描边（主标签横幅）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab%22)

> Sticky Note Outline (Primary Tab)

```diff
-便签轮廓（主选项卡样式）
+便签描边（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag%22)

> Sticky Note Outline (Primary Tag)

```diff
-便签轮廓（主标签样式）
+便签描边（主标签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tab%22)

> Sticky Note (Primary Tab)

```diff
-便签（主选项卡样式）
+便签（主标签页签）
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/zh_Hans/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tag%22)

> Sticky Note (Primary Tag)

```diff
-便签（主标签样式）
+便签（主标签）
```


## Missing translations

These strings are translated only in `zh_Hans`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `zh_Hans`.


### `fof-oauth` (missing)

#### [`fof-oauth.email.provider_email_change_notice.subject`](https://weblate.rob006.net/translate/flarum2/fof-oauth/zh_Hans/?q=context%3A%3D%22fof-oauth.email.provider_email_change_notice.subject%22)

> Email Address Change Requested

```diff
+请求变更邮箱地址
```

#### [`fof-oauth.forum.log_in.unverified_email_in_use`](https://weblate.rob006.net/translate/flarum2/fof-oauth/zh_Hans/?q=context%3A%3D%22fof-oauth.forum.log_in.unverified_email_in_use%22)

> {provider} hasn't confirmed this email address, so we can't use it to sign you in. If you already have an account, log in below, then link {provider} from your account settings.

```diff
+你无法通过 {provider} 登录，因为 {provider} 尚未验证邮箱地址。如果已有账号，请先点击下方登录，请前往账号设置中绑定 {provider}。
```


### `forumaker-magicbb` (missing)

#### [`forumaker-magicbb.admin.permissions.bypass_like`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.bypass_like%22)

> Bypass like requirement

```diff
+无需点赞即可查看隐藏内容
```

#### [`forumaker-magicbb.admin.permissions.bypass_reply`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.bypass_reply%22)

> Bypass reply requirement

```diff
+无需回复即可查看隐藏内容
```

#### [`forumaker-magicbb.admin.sections.hide`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.sections.hide%22)

> Hide buttons

```diff
+隐藏内容按钮
```

#### [`forumaker-magicbb.admin.settings.bb_anchor`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_anchor%22)

> Anchor &amp; Jump

```diff
+锚点与跳转
```

#### [`forumaker-magicbb.admin.settings.bb_anchor_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_anchor_help%22)

> Named scroll targets and jump links within a post

```diff
+在帖子中设置锚点，并添加跳转到锚点的链接
```

#### [`forumaker-magicbb.admin.settings.bb_hide_like`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_like%22)

> Like

```diff
+点赞可见
```

#### [`forumaker-magicbb.admin.settings.bb_hide_like_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_like_help%22)

> Content is hidden until the user likes the post

```diff
+隐藏内容，用户点赞该帖子后即可查看
```

#### [`forumaker-magicbb.admin.settings.bb_hide_login`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_login%22)

> Login

```diff
+登录可见
```

#### [`forumaker-magicbb.admin.settings.bb_hide_login_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_login_help%22)

> Content is hidden from guests and visible to all logged-in users

```diff
+向访客隐藏内容，登录后即可查看
```

#### [`forumaker-magicbb.admin.settings.bb_hide_reply`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_reply%22)

> Reply

```diff
+回复可见
```

#### [`forumaker-magicbb.admin.settings.bb_hide_reply_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_reply_help%22)

> Content is hidden until the user replies in the discussion

```diff
+隐藏内容，用户回复该主题后即可查看
```

#### [`forumaker-magicbb.forum.composer.anchor_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.anchor_button%22)

> Add anchor

```diff
+锚点
```

#### [`forumaker-magicbb.forum.composer.hide_like_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_like_button%22)

> Hidden — like required

```diff
+点赞后可见
```

#### [`forumaker-magicbb.forum.composer.hide_login_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_login_button%22)

> Hidden — login required

```diff
+登录后可见
```

#### [`forumaker-magicbb.forum.composer.hide_reply_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_reply_button%22)

> Hidden — reply required

```diff
+回复后可见
```

#### [`forumaker-magicbb.forum.composer.jump_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.composer.jump_button%22)

> Add jump link

```diff
+跳转链接
```

#### [`forumaker-magicbb.forum.hide.like_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.hide.like_to_see_simple%22)

> Like this post to see this content

```diff
+此内容点赞后可见
```

#### [`forumaker-magicbb.forum.hide.login_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.hide.login_to_see_simple%22)

> Log in to see this content

```diff
+此内容登录后可见
```

#### [`forumaker-magicbb.forum.hide.reply_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/zh_Hans/?q=context%3A%3D%22forumaker-magicbb.forum.hide.reply_to_see_simple%22)

> Reply in this discussion to see this content

```diff
+此内容回复后可见
```


### `forumaker-magicread` (missing)

#### [`forumaker-magicread.admin.settings.enable_counter_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_counter_help%22)

> Adds a character counter to the top-right corner of the message input

```diff
+在编辑器输入框右上角显示字符数
```

#### [`forumaker-magicread.admin.settings.enable_discussion_pager`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_discussion_pager%22)

> Show page navigation instead of scroll bar

```diff
+分页导航替代时间轴
```

#### [`forumaker-magicread.admin.settings.enable_discussion_pager_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_discussion_pager_help%22)

> Removes the discussion scrubber, adds page navigation above and below the page and disables auto-scrolling

```diff
+移除原生时间轴，在页面顶部和底部添加分页导航，并禁用无限滚动
```

#### [`forumaker-magicread.admin.settings.enable_pagination_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_pagination_help%22)

> Keeps the discussion scrubber visible and adds a page picker below it

```diff
+保留原生时间轴，并在下方添加页码选择器
```

#### [`forumaker-magicread.admin.settings.enable_readmore_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore_help%22)

> Hides long posts on profile pages and adds a button to expand them

```diff
+在个人资料页折叠较长的帖子，并添加按钮供用户展开全文
```

#### [`forumaker-magicread.admin.settings.section_pagination`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.admin.settings.section_pagination%22)

> Pagination

```diff
+分页
```

#### [`forumaker-magicread.forum.pager.first`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.first%22)

> Return to the beginning

```diff
+返回第一页
```

#### [`forumaker-magicread.forum.pager.go`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.go%22)

> Go

```diff
+前往
```

#### [`forumaker-magicread.forum.pager.input_label`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.input_label%22)

> Jump to page

```diff
+跳转到指定页
```

#### [`forumaker-magicread.forum.pager.last`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.last%22)

> Go to the last page

```diff
+前往最后一页
```

#### [`forumaker-magicread.forum.pager.next`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.next%22)

> Next page

```diff
+下一页
```

#### [`forumaker-magicread.forum.pager.page`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.page%22)

> Page

```diff
+页码
```

#### [`forumaker-magicread.forum.pager.prev`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/zh_Hans/?q=context%3A%3D%22forumaker-magicread.forum.pager.prev%22)

> Previous page

```diff
+上一页
```


### `forumaker-magicslider` (missing)

#### [`forumaker-magicslider.admin.settings.add_slide`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.add_slide%22)

> Add slide

```diff
+添加轮播项
```

#### [`forumaker-magicslider.admin.settings.autoplay`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.autoplay%22)

> Autoplay interval

```diff
+自动轮播间隔
```

#### [`forumaker-magicslider.admin.settings.autoplay_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.autoplay_help%22)

> 0 disables auto slide. In seconds

```diff
+设为 0 可关闭自动轮播，单位为秒
```

#### [`forumaker-magicslider.admin.settings.delete`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.delete%22)

> Delete

```diff
+删除
```

#### [`forumaker-magicslider.admin.settings.disable_desktop`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.disable_desktop%22)

> Disable slider on desktop

```diff
+桌面端隐藏轮播图
```

#### [`forumaker-magicslider.admin.settings.disable_desktop_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.disable_desktop_help%22)

> Hide on screens wider than 768px

```diff
+在宽度超过 768px 的屏幕上隐藏
```

#### [`forumaker-magicslider.admin.settings.disable_mobile`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.disable_mobile%22)

> Disable slider on mobile

```diff
+移动端隐藏轮播图
```

#### [`forumaker-magicslider.admin.settings.disable_mobile_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.disable_mobile_help%22)

> Hide on screens up to 768px

```diff
+在宽度不超过 768px 的屏幕上隐藏
```

#### [`forumaker-magicslider.admin.settings.drag`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.drag%22)

> Drag to reorder

```diff
+拖动调整顺序
```

#### [`forumaker-magicslider.admin.settings.fit_to_layout`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.fit_to_layout%22)

> Align slider to main layout width

```diff
+与页面主体等宽
```

#### [`forumaker-magicslider.admin.settings.fit_to_layout_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.fit_to_layout_help%22)

> When enabled, the slider spans exactly the width of the main content container on tags or discussion list

```diff
+启用后，轮播图宽度将与标签页或主题列表的主要内容区域保持一致
```

#### [`forumaker-magicslider.admin.settings.height`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.height%22)

> Height

```diff
+高度
```

#### [`forumaker-magicslider.admin.settings.height_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.height_help%22)

> Fixed height for this screen type

```diff
+设置此设备类型下的固定高度
```

#### [`forumaker-magicslider.admin.settings.hide_on_tag_pages`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.hide_on_tag_pages%22)

> Hide slider on tag pages

```diff
+在标签页隐藏轮播图
```

#### [`forumaker-magicslider.admin.settings.hide_on_tag_pages_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.hide_on_tag_pages_help%22)

> Show Flarum's default tag hero on tag pages instead of the slider

```diff
+在标签页显示 Flarum 默认的标签横幅，不展示轮播图
```

#### [`forumaker-magicslider.admin.settings.image_placeholder`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.image_placeholder%22)

> Image URL

```diff
+图片 URL
```

#### [`forumaker-magicslider.admin.settings.link_placeholder`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.link_placeholder%22)

> Link URL

```diff
+链接 URL
```

#### [`forumaker-magicslider.admin.settings.new_tab`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.new_tab%22)

> Open in new tab

```diff
+在新标签页中打开
```

#### [`forumaker-magicslider.admin.settings.padding`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.padding%22)

> Outer padding

```diff
+外边距
```

#### [`forumaker-magicslider.admin.settings.padding_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.padding_help%22)

> Space around the slider block

```diff
+轮播图四周的留白
```

#### [`forumaker-magicslider.admin.settings.radius`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.radius%22)

> Border radius

```diff
+圆角
```

#### [`forumaker-magicslider.admin.settings.radius_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.radius_help%22)

> Corner rounding

```diff
+设置轮播图的圆角大小
```

#### [`forumaker-magicslider.admin.settings.section_behavior`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.section_behavior%22)

> Behavior

```diff
+显示设置
```

#### [`forumaker-magicslider.admin.settings.section_desktop`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.section_desktop%22)

> Desktop

```diff
+桌面端
```

#### [`forumaker-magicslider.admin.settings.section_mobile`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.section_mobile%22)

> Mobile

```diff
+移动端
```

#### [`forumaker-magicslider.admin.settings.section_slides`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.section_slides%22)

> Slides

```diff
+轮播内容
```

#### [`forumaker-magicslider.admin.settings.upload_error`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/zh_Hans/?q=context%3A%3D%22forumaker-magicslider.admin.settings.upload_error%22)

> Could not upload image

```diff
+图片上传失败
```


### `forumfortress-flarum` (missing)

#### [`forumfortress-flarum.admin.dashboard.action_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.action_success%22)

> Action completed successfully.

```diff
+操作成功完成。
```

#### [`forumfortress-flarum.admin.dashboard.active`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.active%22)

> Active

```diff
+已启用
```

#### [`forumfortress-flarum.admin.dashboard.allowed`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.allowed%22)

> allowed

```diff
+已放行
```

#### [`forumfortress-flarum.admin.dashboard.attack_end_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.attack_end_success%22)

> Attack mode is now disabled.

```diff
+攻击模式已关闭。
```

#### [`forumfortress-flarum.admin.dashboard.attack_start_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.attack_start_success%22)

> Attack mode is now enabled.

```diff
+攻击模式已启用。
```

#### [`forumfortress-flarum.admin.dashboard.automatic_selection`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.automatic_selection%22)

> GeoDNS automatic routing

```diff
+GeoDNS 自动路由
```

#### [`forumfortress-flarum.admin.dashboard.blocked`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.blocked%22)

> blocked

```diff
+已拦截
```

#### [`forumfortress-flarum.admin.dashboard.checking`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.checking%22)

> Checking...

```diff
+正在检查…
```

#### [`forumfortress-flarum.admin.dashboard.checks_this_month`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.checks_this_month%22)

> Checks this month

```diff
+本月检查次数
```

#### [`forumfortress-flarum.admin.dashboard.configured`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.configured%22)

> Configured

```diff
+已配置
```

#### [`forumfortress-flarum.admin.dashboard.connected`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.connected%22)

> Connected

```diff
+已连接
```

#### [`forumfortress-flarum.admin.dashboard.connection_test`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.connection_test%22)

> Connection test

```diff
+测试连接
```

#### [`forumfortress-flarum.admin.dashboard.contact_support`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.contact_support%22)

> Contact support

```diff
+联系支持
```

#### [`forumfortress-flarum.admin.dashboard.decisions`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.decisions%22)

> Decisions

```diff
+判定结果
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_confirm`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_confirm%22)

> Remove this forum from Forum Fortress? This cannot be undone. Other forums and paid non-trial accounts will be retained.

```diff
+确定要从 Forum Fortress 中移除此论坛吗？此操作无法撤销。其他论坛以及已付费且不处于试用期的账号不受影响。
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_help%22)

> Use this before removing the Composer package through Extension Manager. It removes this forum from Forum Fortress, clears local credentials, and pauses automatic bootstrap until the extension is re-enabled. Paid non-trial accounts are retained; accounts with other forums keep those forums.

```diff
+通过扩展管理器移除 Composer 软件包前，请先执行此操作。它会从 Forum Fortress 中移除此论坛、清除本地凭据，并暂停自动初始化，直到扩展再次启用。已付费且不处于试用期的账号会保留；如果账号还绑定了其他论坛，其他论坛不受影响。
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_pending`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_pending%22)

> Remote cleanup from a previous removal is still pending.

```diff
+上一次移除操作的远程清理尚未完成。
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_site`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_site%22)

> Disconnect and remove site

```diff
+断开连接并移除站点
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_success%22)

> The Forum Fortress site was removed and automatic bootstrap is paused. Re-enable or reinstall the extension when you want to reconnect.

```diff
+已从 Forum Fortress 中移除此站点，并暂停自动初始化。需要重新连接时，请重新启用或安装此扩展。
```

#### [`forumfortress-flarum.admin.dashboard.disconnected`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.disconnected%22)

> Disconnected

```diff
+未连接
```

#### [`forumfortress-flarum.admin.dashboard.dismiss`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.dismiss%22)

> Dismiss

```diff
+忽略
```

#### [`forumfortress-flarum.admin.dashboard.enable_attack_mode`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.enable_attack_mode%22)

> Enable attack mode

```diff
+启用攻击模式
```

#### [`forumfortress-flarum.admin.dashboard.end_attack_mode`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.end_attack_mode%22)

> End attack mode

```diff
+结束攻击模式
```

#### [`forumfortress-flarum.admin.dashboard.maintenance`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.maintenance%22)

> Maintenance and recovery

```diff
+维护与恢复
```

#### [`forumfortress-flarum.admin.dashboard.maintenance_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.maintenance_help%22)

> Less common account and diagnostic actions

```diff
+不常用的账号与诊断操作
```

#### [`forumfortress-flarum.admin.dashboard.not_available`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.not_available%22)

> N/A

```diff
+不可用
```

#### [`forumfortress-flarum.admin.dashboard.not_checked`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.not_checked%22)

> Not checked

```diff
+尚未检查
```

#### [`forumfortress-flarum.admin.dashboard.plan`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.plan%22)

> Plan

```diff
+套餐
```

#### [`forumfortress-flarum.admin.dashboard.portal_login`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_login%22)

> Open Forum Fortress

```diff
+打开 Forum Fortress
```

#### [`forumfortress-flarum.admin.dashboard.portal_popup_blocked`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_popup_blocked%22)

> The browser blocked the portal window. Allow popups for this site and try again.

```diff
+浏览器拦截了打开门户。请允许此站点弹出窗口后重试。
```

#### [`forumfortress-flarum.admin.dashboard.portal_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_success%22)

> Portal opened in a new tab.

```diff
+已在新标签页中打开门户。
```

#### [`forumfortress-flarum.admin.dashboard.portal_url_missing`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_url_missing%22)

> Forum Fortress did not return a portal URL.

```diff
+Forum Fortress 未返回门户 URL。
```

#### [`forumfortress-flarum.admin.dashboard.preferred_endpoint`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.preferred_endpoint%22)

> GeoDNS route

```diff
+GeoDNS 路由
```

#### [`forumfortress-flarum.admin.dashboard.protection`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.protection%22)

> Protection

```diff
+防护
```

#### [`forumfortress-flarum.admin.dashboard.refresh`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.refresh%22)

> Refresh

```diff
+刷新
```

#### [`forumfortress-flarum.admin.dashboard.refresh_to_view`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.refresh_to_view%22)

> Refresh to view

```diff
+刷新后查看
```

#### [`forumfortress-flarum.admin.dashboard.register_site`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.register_site%22)

> Register site

```diff
+注册站点
```

#### [`forumfortress-flarum.admin.dashboard.register_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.register_success%22)

> Site registration completed.

```diff
+站点注册完成。
```

#### [`forumfortress-flarum.admin.dashboard.registration_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.registration_help%22)

> Use Register Site only when attaching this forum to an account. Normal operation bootstraps automatically, and portal registration remains available.

```diff
+仅在需要将此论坛绑定到账号时使用「注册站点」。正常使用会自动初始化，也可以继续通过门户完成注册。
```

#### [`forumfortress-flarum.admin.dashboard.request_failed`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.request_failed%22)

> Forum Fortress could not complete the request. Check the connection and try again.

```diff
+Forum Fortress 无法完成请求。请检查连接后重试。
```

#### [`forumfortress-flarum.admin.dashboard.request_timeout`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.request_timeout%22)

> The request timed out before Forum Fortress responded.

```diff
+请求超时，Forum Fortress 未能及时响应。
```

#### [`forumfortress-flarum.admin.dashboard.site_id`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.site_id%22)

> Site ID

```diff
+站点 ID
```

#### [`forumfortress-flarum.admin.dashboard.site_status`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.site_status%22)

> Site status

```diff
+站点状态
```

#### [`forumfortress-flarum.admin.dashboard.status_summary`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.status_summary%22)

> Live connection and usage summary

```diff
+实时连接和用量概览
```

#### [`forumfortress-flarum.admin.dashboard.sync_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.sync_success%22)

> Forum Fortress synchronization completed.

```diff
+Forum Fortress 同步完成。
```

#### [`forumfortress-flarum.admin.dashboard.synchronize_now`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.synchronize_now%22)

> Synchronize now

```diff
+立即同步
```

#### [`forumfortress-flarum.admin.dashboard.tagline`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.tagline%22)

> Protection status, controls, and account links.

```diff
+查看防护状态、服务控制和账号入口。
```

#### [`forumfortress-flarum.admin.dashboard.test_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.test_success%22)

> Connection test completed successfully.

```diff
+连接测试成功。
```

#### [`forumfortress-flarum.admin.dashboard.unknown`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.unknown%22)

> Unknown

```diff
+未知
```

#### [`forumfortress-flarum.admin.settings.allow_global_fallback_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.allow_global_fallback_help%22)

> After a regional retry fails, permit the global network. Processing may occur outside the selected region.

```diff
+地域节点重试仍失败时，允许改用全球网络。数据处理可能发生在所选地域之外。
```

#### [`forumfortress-flarum.admin.settings.allow_global_fallback_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.allow_global_fallback_label%22)

> Allow global emergency fallback

```diff
+允许紧急切换至全球网络
```

#### [`forumfortress-flarum.admin.settings.api_base_url_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_base_url_label%22)

> Check API base URL

```diff
+检查 API 基础 URL
```

#### [`forumfortress-flarum.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_key_help%22)

> Leave blank to bootstrap an anonymous site and receive a stable key automatically.

```diff
+留空即可自动初始化匿名站点，并获取一个固定密钥。
```

#### [`forumfortress-flarum.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_key_label%22)

> Site API key

```diff
+站点 API 密钥
```

#### [`forumfortress-flarum.admin.settings.api_region_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_region_help%22)

> Lock check traffic to a region, or use the recommended global network.

```diff
+将检查请求固定在指定地域，或使用推荐的全球网络。
```

#### [`forumfortress-flarum.admin.settings.api_region_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_region_label%22)

> API region

```diff
+API 地域
```

#### [`forumfortress-flarum.admin.settings.block_reject_action_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.block_reject_action_label%22)

> BLOCK moderation action

```diff
+BLOCK 判定后的处理方式
```

#### [`forumfortress-flarum.admin.settings.block_reject_action_reject`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.block_reject_action_reject%22)

> Reject content

```diff
+拒绝内容
```

#### [`forumfortress-flarum.admin.settings.block_reject_action_spam_clean`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.block_reject_action_spam_clean%22)

> Spam-clean content and suspend its author

```diff
+按垃圾内容清理并封禁作者
```

#### [`forumfortress-flarum.admin.settings.controls_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.controls_label%22)

> Service controls

```diff
+服务控制
```

#### [`forumfortress-flarum.admin.settings.debug_log_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.debug_log_label%22)

> Log transient API failures

```diff
+记录临时 API 故障
```

#### [`forumfortress-flarum.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.enabled_help%22)

> Check registrations, topics, replies, posts, and profile changes against Forum Fortress.

```diff
+使用 Forum Fortress 检查注册、讨论、回复、发帖和个人资料修改。
```

#### [`forumfortress-flarum.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.enabled_label%22)

> Enable Forum Fortress protection

```diff
+启用 Forum Fortress 防护
```

#### [`forumfortress-flarum.admin.settings.fail_open_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.fail_open_help%22)

> Recommended for normal operation so a network outage does not lock users out.

```diff
+建议正常情况下开启，避免网络故障导致用户无法使用论坛。
```

#### [`forumfortress-flarum.admin.settings.fail_open_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.fail_open_label%22)

> Allow requests when Forum Fortress is unavailable

```diff
+Forum Fortress 不可用时允许请求继续
```

#### [`forumfortress-flarum.admin.settings.preferred_endpoint_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.preferred_endpoint_help%22)

> Populated automatically when bootstrap selects a regional endpoint.

```diff
+初始化并选定地域节点后自动填写。
```

#### [`forumfortress-flarum.admin.settings.preferred_endpoint_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.preferred_endpoint_label%22)

> Preferred edge endpoint

```diff
+首选边缘节点
```

#### [`forumfortress-flarum.admin.settings.region_eu`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_eu%22)

> European Union only

```diff
+仅欧盟
```

#### [`forumfortress-flarum.admin.settings.region_global`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_global%22)

> Global - Recommended

```diff
+全球 - 推荐
```

#### [`forumfortress-flarum.admin.settings.region_uk`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_uk%22)

> United Kingdom only

```diff
+仅英国
```

#### [`forumfortress-flarum.admin.settings.region_us`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_us%22)

> United States only

```diff
+仅美国
```

#### [`forumfortress-flarum.admin.settings.registration_email_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.registration_email_help%22)

> Optional for normal operation. Set this to your account email only when using the plugin Register Site flow; portal registration does not need it.

```diff
+正常使用无需填写。仅在通过插件的「注册站点」功能绑定账号时填写你的账号邮箱。通过门户注册时无需填写。
```

#### [`forumfortress-flarum.admin.settings.registration_email_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.registration_email_label%22)

> Site registration email

```diff
+站点注册邮箱
```

#### [`forumfortress-flarum.admin.settings.timeout_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/zh_Hans/?q=context%3A%3D%22forumfortress-flarum.admin.settings.timeout_label%22)

> Request timeout in seconds

```diff
+请求超时时间（秒）
```


### `huseyinfiliz-language-detection` (missing)

#### [`huseyinfiliz-language-detection.admin.cleanup.button`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.button%22)

> Delete old statistics now

```diff
+立即删除旧统计数据
```

#### [`huseyinfiliz-language-detection.admin.cleanup.button_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.button_help%22)

> Deletes the rows older than the saved retention period. If you changed the period above, save it first. This cannot be undone.

```diff
+删除早于当前已保存保留期限的记录。若刚修改上方期限，请先保存设置。此操作无法撤销。
```

#### [`huseyinfiliz-language-detection.admin.cleanup.command_description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.command_description%22)

> Delete language detection statistics older than the configured retention period.

```diff
+删除超过已设置保留期限的语言检测统计数据。
```

#### [`huseyinfiliz-language-detection.admin.cleanup.confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.confirm%22)

> Delete every statistics row older than the retention period? This cannot be undone.

```diff
+确定要删除所有早于保留期限的统计记录吗？此操作无法撤销。
```

#### [`huseyinfiliz-language-detection.admin.cleanup.deleted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.deleted%22)

> Deleted {count} statistics rows older than {days} days.

```diff
+已删除 {count} 条超过 {days} 天的统计记录
```

#### [`huseyinfiliz-language-detection.admin.cleanup.failed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.failed%22)

> The old statistics could not be deleted.

```diff
+无法删除旧统计数据
```

#### [`huseyinfiliz-language-detection.admin.cleanup.nothing_to_delete`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.nothing_to_delete%22)

> No statistics were old enough to delete.

```diff
+没有需要删除的旧统计记录
```

#### [`huseyinfiliz-language-detection.admin.cleanup.retention_disabled`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.cleanup.retention_disabled%22)

> Statistics are set to never be deleted, so nothing was removed.

```diff
+统计数据设置为永不删除，因此没有删除任何记录。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.analytics_disabled`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.analytics_disabled%22)

> Language statistics are switched off, so nothing new is being recorded. Anything below was collected before it was switched off.

```diff
+语言统计已关闭，因此不会继续记录新数据。下方内容均为关闭前收集的数据。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_countries_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_countries_help%22)

> How many countries visitors were placed in. Addresses that could not be placed are not counted here.

```diff
+访客被判定来自多少个国家或地区。无法确定国家或地区的 IP 地址不会计入。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_countries_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_countries_label%22)

> Countries

```diff
+来源国家或地区数
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_languages_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_languages_help%22)

> How many different languages visitors asked for. Pageviews that named no language are not counted here.

```diff
+访客请求过多少种不同语言。未指定语言的页面浏览不会计入。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_languages_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_languages_label%22)

> Languages asked for

```diff
+请求语言数
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_requests_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_requests_help%22)

> Every pageview counted in this period.

```diff
+此期间内的每次页面浏览都会计入
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_requests_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_requests_label%22)

> Pageviews

```diff
+页面浏览量
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_served_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_served_help%22)

> Pageviews that asked for a language this forum has installed.

```diff
+请求的语言已安装对应语言包的页面浏览量。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_served_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_served_label%22)

> Served

```diff
+已支持
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_unserved_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_unserved_help%22)

> Pageviews that asked for a language this forum does not have. These are what the Missing tab is about.

```diff
+请求的语言没有安装对应语言包的页面浏览量。这些记录会显示在「缺失语言」标签页中。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_unserved_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_unserved_label%22)

> Not served

```diff
+未支持
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_unstated_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_unstated_help%22)

> Pageviews whose browser named no usable language. They were neither served nor failed. Served, not served and no preference add up to the pageview total.

```diff
+浏览器未提供可用语言的页面浏览量。此类请求既不算已支持，也不算未支持。「已支持」「未支持」和「未指定偏好」三项之和等于总页面浏览量。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_unstated_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_unstated_label%22)

> No preference

```diff
+未指定偏好
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_visitors_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_visitors_help%22)

> A visitor is counted once per day, so somebody who returns on three days counts three times. This is not a count of people.

```diff
+同一访客每天只计一次，因此连续 3 天访问会计为 3 次。非实际人数统计。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.card_visitors_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.card_visitors_label%22)

> Daily visitors

```diff
+每日访客
```

#### [`huseyinfiliz-language-detection.admin.dashboard.countries_column_country`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.countries_column_country%22)

> Country

```diff
+国家或地区
```

#### [`huseyinfiliz-language-detection.admin.dashboard.countries_column_requests`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.countries_column_requests%22)

> Pageviews

```diff
+页面浏览量
```

#### [`huseyinfiliz-language-detection.admin.dashboard.countries_column_visitors`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.countries_column_visitors%22)

> Daily visitors

```diff
+每日访客
```

#### [`huseyinfiliz-language-detection.admin.dashboard.countries_empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.countries_empty%22)

> Nothing has been recorded for this period yet.

```diff
+此期间暂无记录
```

#### [`huseyinfiliz-language-detection.admin.dashboard.countries_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.countries_title%22)

> Where visitors came from

```diff
+访客来源
```

#### [`huseyinfiliz-language-detection.admin.dashboard.countries_unknown`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.countries_unknown%22)

> Could not be placed

```diff
+无法定位
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_column_language`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_column_language%22)

> Language

```diff
+语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_column_requests`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_column_requests%22)

> Pageviews

```diff
+页面浏览量
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_column_status`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_column_status%22)

> Status

```diff
+状态
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_column_visitors`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_column_visitors%22)

> Daily visitors

```diff
+每日访客
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_empty%22)

> Nothing has been recorded for this period yet.

```diff
+此期间暂无记录
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_no_preference`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_no_preference%22)

> No language stated

```diff
+未指定语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_served`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_served%22)

> Served

```diff
+已支持
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_title%22)

> Languages visitors asked for

```diff
+访客请求的语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_unnamed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_unnamed%22)

> Unrecognised language tag

```diff
+无法识别的语言标签
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_unserved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_unserved%22)

> Not served

```diff
+未支持
```

#### [`huseyinfiliz-language-detection.admin.dashboard.languages_variants`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.languages_variants%22)

> Also asked for as {tags}

```diff
+其他标签形式：{tags}
```

#### [`huseyinfiliz-language-detection.admin.dashboard.load_failed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.load_failed%22)

> The statistics could not be loaded.

```diff
+无法加载统计数据
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_column_language`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_column_language%22)

> Language

```diff
+语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_column_package`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_column_package%22)

> Language pack

```diff
+语言包
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_column_requests`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_column_requests%22)

> Pageviews

```diff
+页面浏览量
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_column_visitors`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_column_visitors%22)

> Daily visitors

```diff
+每日访客
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_description%22)

> Languages visitors asked for that have no language pack installed, busiest first. Different spellings of the same language are listed once.

```diff
+访客请求但论坛未安装对应语言包的语言，按请求量从高到低排列。同一种语言的不同标签形式只列一次。
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_empty%22)

> Every language visitors asked for is installed.

```diff
+访客请求的所有语言均已安装
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_no_package`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_no_package%22)

> No single language pack

```diff
+无单一对应语言包
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_title%22)

> Languages this forum cannot show

```diff
+论坛暂不支持的语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.missing_variants`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.missing_variants%22)

> Asked for as {tags}

```diff
+请求时使用的标签：{tags}
```

#### [`huseyinfiliz-language-detection.admin.dashboard.tab_countries`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.tab_countries%22)

> Countries

```diff
+国家或地区
```

#### [`huseyinfiliz-language-detection.admin.dashboard.tab_languages`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.tab_languages%22)

> Languages

```diff
+语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.tab_missing`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.tab_missing%22)

> Missing

```diff
+缺失语言
```

#### [`huseyinfiliz-language-detection.admin.dashboard.tab_overview`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.tab_overview%22)

> Overview

```diff
+概览
```

#### [`huseyinfiliz-language-detection.admin.dashboard.tab_settings`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.tab_settings%22)

> Settings

```diff
+设置
```

#### [`huseyinfiliz-language-detection.admin.dashboard.trend_empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.trend_empty%22)

> No pageviews were recorded in this period.

```diff
+此期间没有页面浏览记录
```

#### [`huseyinfiliz-language-detection.admin.dashboard.trend_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.trend_title%22)

> Pageviews per day

```diff
+每日页面浏览量
```

#### [`huseyinfiliz-language-detection.admin.dashboard.trend_tooltip`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.trend_tooltip%22)

> {date}: {requests} pageviews, {visitors} daily visitors

```diff
+{date}：{requests} 次页面浏览，{visitors} 位每日访客
```

#### [`huseyinfiliz-language-detection.admin.dashboard.window_30`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.window_30%22)

> 30 days

```diff
+30 天
```

#### [`huseyinfiliz-language-detection.admin.dashboard.window_7`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.window_7%22)

> 7 days

```diff
+7 天
```

#### [`huseyinfiliz-language-detection.admin.dashboard.window_90`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.dashboard.window_90%22)

> 90 days

```diff
+90 天
```

#### [`huseyinfiliz-language-detection.admin.ip_data.notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.ip_data.notice%22)

> IP country lookup uses a dataset bundled with this extension, built on {date} from public regional internet registry data. Updating the extension refreshes it.

```diff
+IP 的国家或地区查询使用扩展内置的数据集，该数据集根据公开的区域互联网注册管理机构数据于 {date} 构建。更新扩展时会一并更新。
```

#### [`huseyinfiliz-language-detection.admin.ip_data.notice_unavailable`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.ip_data.notice_unavailable%22)

> The bundled IP dataset is missing, so IP country lookup is inactive and only browser language detection will be used.

```diff
+内置 IP 数据集缺失，因此 IP 的国家或地区查询已停用，仅使用浏览器语言进行检测。
```

#### [`huseyinfiliz-language-detection.admin.settings.default_locale_forum_default`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.default_locale_forum_default%22)

> Forum default

```diff
+论坛默认
```

#### [`huseyinfiliz-language-detection.admin.settings.default_locale_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.default_locale_help%22)

> Applied when nothing could be detected. Leave this on the forum default to keep Flarum's own behaviour.

```diff
+无法检测到语言时使用。保持「论坛默认」即可沿用 Flarum 默认行为。
```

#### [`huseyinfiliz-language-detection.admin.settings.default_locale_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.default_locale_label%22)

> Fallback language

```diff
+备用语言
```

#### [`huseyinfiliz-language-detection.admin.settings.detection_order_browser_ip`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.detection_order_browser_ip%22)

> Browser language, then IP country

```diff
+浏览器语言，其次 IP 所在国家或地区
```

#### [`huseyinfiliz-language-detection.admin.settings.detection_order_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.detection_order_help%22)

> Which signal is tried first when working out a visitor's language.

```diff
+确定访客语言时优先采用哪一种信号。
```

#### [`huseyinfiliz-language-detection.admin.settings.detection_order_ip_browser`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.detection_order_ip_browser%22)

> IP country, then browser language

```diff
+IP 所在国家或地区，其次浏览器语言
```

#### [`huseyinfiliz-language-detection.admin.settings.detection_order_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.detection_order_label%22)

> Detection order

```diff
+检测顺序
```

#### [`huseyinfiliz-language-detection.admin.settings.enable_analytics_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.enable_analytics_help%22)

> Records daily aggregated counts of the languages and countries visitors ask for. No IP addresses, request headers or visitor identifiers are stored.

```diff
+按天汇总访客请求的语言和来源国家或地区。不会保存 IP 地址、请求头或访客标识。
```

#### [`huseyinfiliz-language-detection.admin.settings.enable_analytics_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.enable_analytics_label%22)

> Collect language statistics

```diff
+收集语言统计
```

#### [`huseyinfiliz-language-detection.admin.settings.ignore_bots_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.ignore_bots_help%22)

> Keeps known bots and crawlers out of the statistics. Their language is still detected, it is just not counted.

```diff
+已知机器人和爬虫不会计入统计，但仍会正常检测其语言。
```

#### [`huseyinfiliz-language-detection.admin.settings.ignore_bots_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.ignore_bots_label%22)

> Ignore bots and crawlers

```diff
+忽略机器人和爬虫
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_180`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_180%22)

> 180 days

```diff
+180 天
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_30`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_30%22)

> 30 days

```diff
+30 天
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_365`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_365%22)

> 365 days

```diff
+365 天
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_90`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_90%22)

> 90 days

```diff
+90 天
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_help%22)

> Daily rows older than this are deleted automatically.

```diff
+超过此期限的每日统计记录会自动删除。
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_label%22)

> Keep statistics for

```diff
+统计数据保留时间
```

#### [`huseyinfiliz-language-detection.admin.settings.retention_days_never`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-language-detection/zh_Hans/?q=context%3A%3D%22huseyinfiliz-language-detection.admin.settings.retention_days_never%22)

> Never delete

```diff
+永不删除
```


### `huseyinfiliz-notificationhub` (missing)

#### [`huseyinfiliz-notificationhub.admin.modal_notification.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.modal_notification.recipients_placeholder%22)

> =&gt; huseyinfiliz-notificationhub.forum.modal\_notification.recipients\_placeholder

```diff
+=> huseyinfiliz-notificationhub.forum.modal_notification.recipients_placeholder
```

#### [`huseyinfiliz-notificationhub.admin.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.recipient_kinds.group%22)

> =&gt; huseyinfiliz-notificationhub.forum.recipient\_kinds.group

```diff
+=> huseyinfiliz-notificationhub.forum.recipient_kinds.group
```

#### [`huseyinfiliz-notificationhub.admin.recipient_kinds.user`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/zh_Hans/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.recipient_kinds.user%22)

> =&gt; huseyinfiliz-notificationhub.forum.recipient\_kinds.user

```diff
+=> huseyinfiliz-notificationhub.forum.recipient_kinds.user
```


### `huseyinfiliz-sticky-title` (missing)

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_help%22)

> Choose how tag colors are displayed in the sidebar panel

```diff
+选择侧边栏中标签颜色的显示方式
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_label%22)

> Tag Color Style

```diff
+标签颜色样式
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.background`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.background%22)

> Background Color (Default)

```diff
+背景颜色（默认）
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.border`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.border%22)

> Border Color Only

```diff
+仅边框颜色
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.text`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/zh_Hans/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.text%22)

> Text Color Only

```diff
+仅文字颜色
```


### `linkrobins-chirp` (missing)

#### [`linkrobins-chirp.lib.error.chirp_site_full_message`](https://weblate.rob006.net/translate/flarum2/linkrobins-chirp/zh_Hans/?q=context%3A%3D%22linkrobins-chirp.lib.error.chirp_site_full_message%22)

> This forum's rooms are at capacity right now — as many people are in voice as its Chirp plan allows. Try again when someone leaves.

```diff
+论坛语音人数已达 Chirp 套餐上限。请等有人退出语音后再试。
```


### `maicol07-sso` (missing)

#### [`maicol07-sso.forum.no_login_url_error`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/zh_Hans/?q=context%3A%3D%22maicol07-sso.forum.no_login_url_error%22)

> No login URL set, please check the SSO settings!

```diff
+未设置登录网址，请检查 SSO 设置。
```


### `peopleinside-antiflood` (missing)

#### [`peopleinside-antiflood.admin.description`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.description%22)

> Prevent topic/reply flooding and limit pending approvals.

```diff
+防止大量发布讨论帖和回复，并限制待审核内容数量。
```

#### [`peopleinside-antiflood.admin.settings.flood_interval_minutes_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_interval_minutes_help%22)

> Time window in minutes used to count recent topic or reply creations. Applies to both topic and reply flood limits. Default: 5.

```diff
+统计近期发起讨论或回帖数量的时间范围，单位为分钟。同时用于讨论帖和回复的发布上限。默认：5。
```

#### [`peopleinside-antiflood.admin.settings.flood_interval_minutes_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_interval_minutes_label%22)

> Flood interval (minutes)

```diff
+统计时段（分钟）
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_help%22)

> Maximum number of new topics a user can create within the flood interval before being blocked. Default: 3. Note: Flarum already enforces a built-in 10-second cooldown between all posts and topics.

```diff
+用户在指定统计时段内最多可以发起多少新讨论，达到上限后将无法发起讨论。默认为 3。注意：Flarum 本身已限制讨论帖和回复每次发布至少间隔 10 秒。
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_label%22)

> Topic flood limit

```diff
+讨论帖发布上限
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_message_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_message_help%22)

> Override the default error message shown when a user posts too quickly. Leave empty to use the default. You can use {minutes} as a placeholder.

```diff
+自定义用户发布过于频繁时显示的提示。留空则使用默认提示。可使用 {minutes} 插入等待分钟值。
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_message_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_message_label%22)

> Custom message: flood limit reached

```diff
+发布过于频繁时的自定义提示
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_message_suggestion`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_message_suggestion%22)

> You are posting too quickly. Please wait {minutes} minutes before posting again.

```diff
+你发布得太频繁了，请等待 {minutes} 分钟后再试。
```

#### [`peopleinside-antiflood.admin.settings.max_pending_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.max_pending_help%22)

> Maximum number of posts and topics a user can have awaiting approval before being blocked from posting. Default: 6.

```diff
+用户最多可以有多少篇讨论帖和回复同时等待审核，达到上限后将无法发布新内容。默认为 6。
```

#### [`peopleinside-antiflood.admin.settings.max_pending_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.max_pending_label%22)

> Maximum pending posts

```diff
+待审核内容上限
```

#### [`peopleinside-antiflood.admin.settings.pending_limit_message_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.pending_limit_message_help%22)

> Override the default error message shown when a user hits the pending-posts limit. Leave empty to use the default.

```diff
+自定义用户达到待审核内容上限时显示的提示。留空则使用默认提示。
```

#### [`peopleinside-antiflood.admin.settings.pending_limit_message_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.pending_limit_message_label%22)

> Custom message: pending limit reached

```diff
+待审核内容达到上限时的自定义提示
```

#### [`peopleinside-antiflood.admin.settings.pending_limit_message_suggestion`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.pending_limit_message_suggestion%22)

> You have too many posts or topics pending approval. Please wait until some are reviewed before creating new content.

```diff
+你有太多讨论帖或回复正在等待审核。请等待部分内容审核完成后再发布新内容。
```

#### [`peopleinside-antiflood.admin.settings.post_flood_limit_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.post_flood_limit_help%22)

> Maximum number of new replies a user can post within the flood interval before being blocked. Set to 0 to disable (relies on Flarum's built-in 10-second throttle). Default: 0.

```diff
+用户在指定统计时段内最多可以发表多少条回复，达到上限后将无法回帖。设为 0 可禁用此限制，仅使用 Flarum 内置的 10 秒发布间隔。此设置默认为 0。
```

#### [`peopleinside-antiflood.admin.settings.post_flood_limit_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.post_flood_limit_label%22)

> Reply flood limit

```diff
+回帖上限
```

#### [`peopleinside-antiflood.admin.settings.reset_button`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.reset_button%22)

> Reset

```diff
+重置
```

#### [`peopleinside-antiflood.forum.error.flood_limit`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.forum.error.flood_limit%22)

> You are posting too quickly. Please wait {minutes} minutes before posting again.

```diff
+你发布得太频繁了，请等待 {minutes} 分钟后再试。
```

#### [`peopleinside-antiflood.forum.error.pending_limit`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/zh_Hans/?q=context%3A%3D%22peopleinside-antiflood.forum.error.pending_limit%22)

> You have too many posts or topics pending approval. Please wait until some are reviewed before creating new content.

```diff
+你有太多讨论帖或回复正在等待审核。请等待部分内容审核完成后再发布新内容。
```


### `peopleinside-fla-powcaptcha` (missing)

#### [`peopleinside-powcaptcha.admin.settings.difficulty_3`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_3%22)

> Level 1 – Low (\~100 ms)

```diff
+等级 1 - 低（约 100 毫秒）
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_4`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_4%22)

> Level 2 – Medium (\~1 s)

```diff
+等级 2 - 中（约 1 秒）
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_5`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_5%22)

> Level 3 – High (\~10 s)

```diff
+等级 3 - 高（约 10 秒）
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_help%22)

> Higher difficulty makes bots work harder. Level 1 might be bypassed by some bots (\~100 ms). Level 2 provides better protection and is the default preference (\~1 s). Level 3 tries to guarantee maximum protection and difficulty for bots (\~10 s).

```diff
+难度越高，机器人完成验证所需的计算量越大。等级 1 可能会被部分机器人绕过（约 100 毫秒）；等级 2 可提供更好的防护，默认推荐值（约 1 秒）；等级 3 会进一步提高机器人的计算成本，以增强防护（约 10 秒）。
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_label%22)

> Difficulty

```diff
+验证难度
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_forgot_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_forgot_help%22)

> Show the PoW security challenge inside the Forgot Password form.

```diff
+在忘记密码时启用 PoW 安全验证。
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_forgot_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_forgot_label%22)

> Enable CAPTCHA on Password Reset

```diff
+重置密码验证
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_login_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_login_help%22)

> Show the PoW security challenge inside the Login form.

```diff
+在登录时启用 PoW 安全验证。
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_login_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_login_label%22)

> Enable CAPTCHA on Login

```diff
+登录验证
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_signup_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_signup_help%22)

> Show the PoW security challenge inside the Sign Up form.

```diff
+在注册时启用 PoW 安全验证。
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_signup_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_signup_label%22)

> Enable CAPTCHA on Registration

```diff
+注册验证
```

#### [`peopleinside-powcaptcha.forum.challenge_not_ready`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.forum.challenge_not_ready%22)

> The security challenge is still in progress or has not been completed. Please wait.

```diff
+安全验证仍在进行中或尚未完成，请稍候。
```

#### [`peopleinside-powcaptcha.forum.error`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.forum.error%22)

> Security check failed. Please try again.

```diff
+安全验证失败，请重试。
```

#### [`peopleinside-powcaptcha.forum.retry`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.forum.retry%22)

> Retry

```diff
+重试
```

#### [`peopleinside-powcaptcha.forum.solving`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.forum.solving%22)

> Solving security challenge…

```diff
+正在完成安全验证…
```

#### [`peopleinside-powcaptcha.forum.verified`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.forum.verified%22)

> Security check passed

```diff
+安全验证已通过
```

#### [`peopleinside-powcaptcha.validation.pow_captcha`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/zh_Hans/?q=context%3A%3D%22peopleinside-powcaptcha.validation.pow_captcha%22)

> The security challenge could not be verified. Please try again.

```diff
+安全验证未通过，请重试。
```


### `pianotell-flamoji` (missing)

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_label%22)

> Category

```diff
+分类
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder%22)

> e.g. Memes

```diff
+例如：梗图
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text%22)

> Optional. Custom emojis sharing the same category appear together in their own picker tab. Leave blank for the default Custom tab.

```diff
+可选。用于在分类页签中集中查看同分类的自定义表情。留空则归入默认的「自定义」分类。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text%22)

> A friendly name shown in the picker preview and matched when searching. Optional.

```diff
+显示在选择器预览中，并用于搜索匹配。可留空。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text%22)

> Custom emojis are your own images that members insert by typing a shortcode. The shortcode and image are required; a title and category are optional.

```diff
+自定义表情使用图片，用户可通过输入表情代码插入。表情代码和图片为必填项，名称和分类可不填。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text%22)

> Where the image is hosted: a full URL (https://…) or a forum-relative path (/assets/…). Required. Upload the image yourself first — this only records its location.

```diff
+填写表情图片所在位置，可以是完整 URL（https://…），也可以是论坛相对路径（/assets/…）。此项必填。请自行上传图片文件到对应的服务器文件夹内。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid%22)

> Wrap the shortcode in colons and use only letters, numbers, and \_ + - (e.g. :myemoji\_partyparrot:).

```diff
+短代码必须由冒号包围，且只能包含字母、数字以及 _ + - 字符，例如 :myemoji_partyparrot:。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text%22)

> The text members type to insert this emoji. Must be wrapped in colons and contain only letters, numbers, and the characters \_ + - (e.g. :myemoji\_partyparrot:). Required, and must be unique. Tip: prefix your shortcodes so they read clearly and won't clash with standard emoji.

```diff
+成员输入此代码即可插入表情。表情代码必须由冒号包围，且只能使用字母、数字以及 _ + - 字符，例如 :myemoji_partyparrot:。此项必填且不能重复。建议为表情代码添加统一前缀，避免与标准表情冲突。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.rename_cancel_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.rename_cancel_button%22)

> Cancel

```diff
+取消
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.rename_save_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.rename_save_button%22)

> Save

```diff
+保存
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.uncategorized`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.uncategorized%22)

> Uncategorized

```diff
+未分类
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes%22)

> Imported {count} emoji whose shortcodes don't follow the recommended :word: convention: {shortcodes}. They were imported as-is and still work, but consider updating them.

```diff
+已导入 {count} 个表情代码不符合 :word: 格式的表情：{shortcodes}。这些表情代码可正常使用，但建议改为标准格式。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_override_confirm`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_override_confirm%22)

> Yes, I want to replace all existing emojis.

```diff
+确定，替换现有表情。
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_override_mode`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_override_mode%22)

> Override Mode (Replace all existing emojis)

```diff
+覆盖模式（替换现有表情）
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_override_warning`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_override_warning%22)

> Warning: This will delete all your current custom emojis!

```diff
+警告：这将删除当前所有自定义表情！
```

#### [`pianotell-flamoji.admin.custom_emojis_section.upload_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.upload_json_button%22)

> Upload JSON

```diff
+上传 JSON
```

#### [`pianotell-flamoji.admin.settings.cdn_advanced_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_advanced_text%22)

> The defaults are pinned to the exact emoji-mart version this extension was built against, with matching SRI hashes. If you change a URL, update its SRI hash to match (or clear it to disable integrity checking), and keep the data version aligned with the emoji sprite sheet — mismatched versions can render emojis incorrectly. Leave a URL empty to force that resource to load locally.

```diff
+默认配置固定使用与本扩展构建时相同的 emoji-mart 版本，并提供对应的 SRI 哈希。修改 URL 后，请同时更新与该资源匹配的 SRI 哈希；也可以将哈希留空以关闭完整性校验。表情数据的版本还必须与表情雪碧图保持一致，否则可能导致表情显示异常。将 URL 留空，可强制从本地加载对应资源。
```

#### [`pianotell-flamoji.admin.settings.cdn_data_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_sri_label%22)

> Data SRI Hash (Optional)

```diff
+数据 SRI 哈希（可选）
```

#### [`pianotell-flamoji.admin.settings.cdn_data_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_url_label%22)

> CDN Data URL

```diff
+CDN 数据 URL
```

#### [`pianotell-flamoji.admin.settings.cdn_js_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_sri_label%22)

> JavaScript SRI Hash (Optional)

```diff
+JavaScript SRI 哈希（可选）
```

#### [`pianotell-flamoji.admin.settings.cdn_js_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_url_label%22)

> CDN JavaScript URL

```diff
+CDN JavaScript URL
```

#### [`pianotell-flamoji.admin.settings.sticker_mode_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_label%22)

> Sticker mode

```diff
+贴纸模式
```

#### [`pianotell-flamoji.admin.settings.sticker_mode_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_text%22)

> Render custom emoji as large stickers — in posts, the live composer preview, and an enlarged picker grid. Because only custom emoji are enlarged, the picker is restricted to your custom emoji while this is on. Off by default.

```diff
+将自定义表情展示为大尺寸贴纸。只有自定义表情可以放大，启用后选择器中将只展示自定义表情。默认关闭。
```

#### [`pianotell-flamoji.admin.settings.use_cdn_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_label%22)

> Load Emoji-Mart via CDN

```diff
+通过 CDN 加载 Emoji-Mart
```

#### [`pianotell-flamoji.admin.settings.use_cdn_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/zh_Hans/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_text%22)

> Load the emoji-mart library and emoji data from a third-party CDN (e.g. jsDelivr) instead of serving them from your own server. Off by default. If the CDN fails to load — or a Subresource Integrity (SRI) hash doesn't match — the picker automatically falls back to the copy bundled with this extension. Note that loading from an external origin requires your Content-Security-Policy (if any) to allow it.

```diff
+从第三方 CDN（如 jsDelivr）加载 emoji-mart 库和表情数据，而不是从论坛服务器加载。默认关闭。如果 CDN 加载失败，或子资源完整性（SRI）校验未通过，表情选择器会自动改用扩展自带的本地资源。若论坛启用了内容安全策略（CSP），还需要允许从相应的外部来源加载这些资源。
```


### `ralkage-account-lockout` (missing)

#### [`ralkage-account-lockout.forum.log_in.attempts_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/zh_Hans/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.attempts_remaining%22)

> Invalid credentials. {remaining} of {max} login attempt(s) remaining before your account is locked.

```diff
+登录信息有误。账号将在连续登录失败 {max} 次后被锁定，还剩 {remaining} 次机会。
```


### `ralkage-profile-messages` (missing)

#### [`ralkage-profile-messages.forum.notification.new_profile_message_reply_text`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/zh_Hans/?q=context%3A%3D%22ralkage-profile-messages.forum.notification.new_profile_message_reply_text%22)

> {username} replied to your message on {profileOwner}'s profile.

```diff
+{username} 回复了你给 {profileOwner} 的留言
```


### `tapao-auto-ai-moderation` (missing)

#### [`tapao-moderationai.admin.log.approve`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.approve%22)

> Approve

```diff
+确认审核结果
```

#### [`tapao-moderationai.admin.log.decision_approved`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.decision_approved%22)

> ✓ Approved

```diff
+✓ 已确认
```

#### [`tapao-moderationai.admin.log.decision_rejected`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.decision_rejected%22)

> ✗ Rejected (restored)

```diff
+✗ 已驳回（内容已恢复）
```

#### [`tapao-moderationai.admin.log.escalate`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.escalate%22)

> Escalate

```diff
+升级处理
```

#### [`tapao-moderationai.admin.log.pending`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.pending%22)

> Pending Review

```diff
+待复核
```

#### [`tapao-moderationai.admin.log.reject`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.reject%22)

> Reject (Restore Content)

```diff
+驳回并恢复内容
```

#### [`tapao-moderationai.admin.log.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.log.title%22)

> Moderation Log

```diff
+审核日志
```

#### [`tapao-moderationai.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.api_key_label%22)

> OpenAI API Key

```diff
+OpenAI API 密钥
```

#### [`tapao-moderationai.admin.settings.api_key_placeholder`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.api_key_placeholder%22)

> sk-...

```diff
+sk-...
```

#### [`tapao-moderationai.admin.settings.connection_fail`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.connection_fail%22)

> ✗ API connection failed — check API key

```diff
+✗ API 连接失败，请检查 API 密钥
```

#### [`tapao-moderationai.admin.settings.connection_ok`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.connection_ok%22)

> ✓ API connection successful

```diff
+✓ API 连接成功
```

#### [`tapao-moderationai.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.enabled_label%22)

> Enable Auto-Moderation

```diff
+启用自动审核
```

#### [`tapao-moderationai.admin.settings.exempt_groups_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.exempt_groups_label%22)

> Exempt User Groups

```diff
+免审用户组
```

#### [`tapao-moderationai.admin.settings.mode_async`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_async%22)

> Asynchronous (review after save)

```diff
+异步（保存后审核）
```

#### [`tapao-moderationai.admin.settings.mode_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_label%22)

> Moderation Mode

```diff
+审核模式
```

#### [`tapao-moderationai.admin.settings.mode_sync`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_sync%22)

> Synchronous (block before save)

```diff
+同步（保存前拦截）
```

#### [`tapao-moderationai.admin.settings.model_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.model_label%22)

> Moderation Model

```diff
+审核模型
```

#### [`tapao-moderationai.admin.settings.scan_images_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.scan_images_label%22)

> Moderate Images (omni-moderation-latest required)

```diff
+审核图片（需要 omni-moderation-latest）
```

#### [`tapao-moderationai.admin.settings.scan_private_messages_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.scan_private_messages_label%22)

> Moderate Private Messages (fof/byobu)

```diff
+审核私密讨论（fof/byobu）
```

#### [`tapao-moderationai.admin.settings.test_connection`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.test_connection%22)

> Test API Connection

```diff
+测试 API 连接
```

#### [`tapao-moderationai.admin.settings.thresholds_heading`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.thresholds_heading%22)

> Per-Category Thresholds &amp; Actions

```diff
+各类别阈值与处理方式
```

#### [`tapao-moderationai.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.title%22)

> ModerationAI Settings

```diff
+ModerationAI 设置
```

#### [`tapao-moderationai.admin.settings.trust_skip_threshold_help`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.trust_skip_threshold_help%22)

> Users scoring above this are not moderated (trust system).

```diff
+信任分高于此值的用户将跳过审核。
```

#### [`tapao-moderationai.admin.settings.trust_skip_threshold_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.trust_skip_threshold_label%22)

> Trust Score — Skip threshold (0–100)

```diff
+信任分 — 免审阈值（0–100）
```

#### [`tapao-moderationai.admin.settings.webhook_url_help`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.webhook_url_help%22)

> POSTed JSON on every flagged item.

```diff
+每当内容被标记时，向此 URL 发送一份 JSON 数据。
```

#### [`tapao-moderationai.admin.settings.webhook_url_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.admin.settings.webhook_url_label%22)

> Webhook URL (optional)

```diff
+Webhook URL（可选）
```

#### [`tapao-moderationai.forum.post_under_review`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.forum.post_under_review%22)

> Your post is being reviewed by our moderation system and will appear shortly.

```diff
+你的帖子正在接受审核，稍后会显示。
```

#### [`tapao-moderationai.forum.upload_rejected`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/zh_Hans/?q=context%3A%3D%22tapao-moderationai.forum.upload_rejected%22)

> This file was rejected by the content moderation system.

```diff
+此文件未通过审核。
```


### `tapao-custom-landing-page` (missing)

#### [`tapao-custom-landing-page.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/zh_Hans/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.enabled_label%22)

> Enable Custom Landing Page

```diff
+启用自定义落地页
```

#### [`tapao-custom-landing-page.admin.settings.guests_only_help`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/zh_Hans/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.guests_only_help%22)

> When enabled, logged-in users bypass the landing page and see the normal forum. Install fof/direct-links for dedicated /login and /register pages, or use the '{{ login\_url }}' and '{{ register\_url }}' template variables in your HTML.
>

```diff
+启用后，已登录用户会跳过落地页，直接进入正常论坛页面。如需独立的 /login 和 /register 页面，请安装并启用 fof/direct-links 扩展。也可以在 HTML 中使用 '{{ login_url }}' 和 '{{ register_url }}' 模板变量。
+
```

#### [`tapao-custom-landing-page.admin.settings.guests_only_label`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/zh_Hans/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.guests_only_label%22)

> Show to guests only

```diff
+仅向未登录访客显示
```

#### [`tapao-custom-landing-page.admin.settings.html_label`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/zh_Hans/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.html_label%22)

> Landing Page HTML

```diff
+落地页 HTML
```


### `tapao-line-notification` (missing)

#### [`tapao-line-notification.admin.settings.disabled_notification_types_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.disabled_notification_types_help%22)

> Enter a comma-separated list of notification types you want to prevent from being sent via LINE (e.g., &lt;code&gt;postMentioned, postLiked, newPost, discussionCreated&lt;/code&gt;). This will also hide the toggle for these types on the user's settings page.

```diff
+填写不通过 LINE 发送的通知类型，以英文逗号分隔，例如 <code>postMentioned, postLiked, newPost, discussionCreated</code>。这些通知类型的 LINE 开关也不会展示在用户设置中。
```

#### [`tapao-line-notification.admin.settings.disabled_notification_types_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.disabled_notification_types_label%22)

> Disabled Notification Types

```diff
+禁用的通知类型
```

#### [`tapao-line-notification.admin.settings.flex_button_color_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.flex_button_color_help%22)

> Color of the action button in the notification. Default: #06C755 (LINE Green).

```diff
+通知中操作按钮的颜色。默认：#06C755（LINE 绿色）。
```

#### [`tapao-line-notification.admin.settings.flex_button_color_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.flex_button_color_label%22)

> Flex Message Button Color

```diff
+Flex Message 按钮颜色
```

#### [`tapao-line-notification.admin.settings.flex_header_color_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.flex_header_color_help%22)

> Background color of the notification header bar. Default: #06C755 (LINE Green).

```diff
+通知顶部栏的背景颜色。默认：#06C755（LINE 绿色）。
```

#### [`tapao-line-notification.admin.settings.flex_header_color_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.flex_header_color_label%22)

> Flex Message Header Color

```diff
+Flex Message 顶部颜色
```

#### [`tapao-line-notification.admin.settings.flex_title_color_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.flex_title_color_help%22)

> Text color of the discussion title in the notification body. Default: #111111.

```diff
+通知正文中讨论标题的文字颜色。默认：#111111。
```

#### [`tapao-line-notification.admin.settings.flex_title_color_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.flex_title_color_label%22)

> Flex Message Title Color

```diff
+Flex Message 标题颜色
```

#### [`tapao-line-notification.admin.settings.line_heading`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_heading%22)

> LINE Notification

```diff
+LINE 通知
```

#### [`tapao-line-notification.admin.settings.line_login_channel_id_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_login_channel_id_help%22)

> The Channel ID of your LINE Login Channel from LINE Developers Console.

```diff
+LINE Developers Console 中 LINE Login Channel 的 Channel ID。
```

#### [`tapao-line-notification.admin.settings.line_login_channel_id_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_login_channel_id_label%22)

> LINE Login Channel ID

```diff
+LINE Login Channel ID
```

#### [`tapao-line-notification.admin.settings.line_login_channel_secret_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_login_channel_secret_help%22)

> The Channel Secret of your LINE Login Channel.

```diff
+LINE Login Channel 的 Channel Secret。
```

#### [`tapao-line-notification.admin.settings.line_login_channel_secret_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_login_channel_secret_label%22)

> LINE Login Channel Secret

```diff
+LINE Login Channel Secret
```

#### [`tapao-line-notification.admin.settings.line_messaging_channel_secret_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_messaging_channel_secret_help%22)

> The Channel Secret of your Messaging API Channel (used for Webhook signature verification).

```diff
+Messaging API Channel 的 Channel Secret，用于验证 Webhook 签名。
```

#### [`tapao-line-notification.admin.settings.line_messaging_channel_secret_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_messaging_channel_secret_label%22)

> Messaging API Channel Secret

```diff
+Messaging API Channel Secret
```

#### [`tapao-line-notification.admin.settings.line_messaging_token_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_messaging_token_help%22)

> The Long-lived Channel Access Token of your Messaging API Channel.

```diff
+Messaging API Channel 的长期有效 Channel Access Token。
```

#### [`tapao-line-notification.admin.settings.line_messaging_token_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.line_messaging_token_label%22)

> Messaging API Channel Access Token

```diff
+Messaging API Channel Access Token
```

#### [`tapao-line-notification.admin.settings.use_first_image_as_thumbnail_help`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.use_first_image_as_thumbnail_help%22)

> If the post contains an image, use the first image as the Flex Message hero thumbnail.

```diff
+帖子包含图片时，将首张图片作为 Flex Message 主图。
```

#### [`tapao-line-notification.admin.settings.use_first_image_as_thumbnail_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.admin.settings.use_first_image_as_thumbnail_label%22)

> Use First Image as Thumbnail

```diff
+使用首张图片作为缩略图
```

#### [`tapao-line-notification.forum.settings.line_connect_button`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_connect_button%22)

> Connect LINE

```diff
+绑定 LINE
```

#### [`tapao-line-notification.forum.settings.line_connected_as`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_connected_as%22)

> Connected as {name}

```diff
+已绑定：{name}
```

#### [`tapao-line-notification.forum.settings.line_disconnect_button`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_disconnect_button%22)

> Disconnect LINE

```diff
+解除 LINE 绑定
```

#### [`tapao-line-notification.forum.settings.line_disconnect_confirm`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_disconnect_confirm%22)

> Are you sure you want to disconnect your LINE account?

```diff
+确定要解除 LINE 账号绑定吗？
```

#### [`tapao-line-notification.forum.settings.line_error`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_error%22)

> Failed to connect LINE: {error}

```diff
+LINE 绑定失败：{error}
```

#### [`tapao-line-notification.forum.settings.line_linking_description`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_linking_description%22)

> Connect your LINE account to receive forum notifications via LINE.

```diff
+绑定 LINE 账号，通过 LINE 接收论坛通知。
```

#### [`tapao-line-notification.forum.settings.line_section_heading`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.forum.settings.line_section_heading%22)

> LINE Notification

```diff
+LINE 通知
```

#### [`tapao-line-notification.lib.line_message.connection_success_alt_text`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_alt_text%22)

> ✅ LINE account connected to {forum}

```diff
+✅ LINE 账号已绑定到 {forum}
```

#### [`tapao-line-notification.lib.line_message.connection_success_body`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_body%22)

> Your LINE account has been connected to {forum} (username: {username}).

```diff
+你的 LINE 账号已绑定到 {forum}（用户名：{username}）。
```

#### [`tapao-line-notification.lib.line_message.connection_success_feature_like`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_feature_like%22)

> ❤️ Likes your post

```diff
+❤️ 有人点赞你的帖子
```

#### [`tapao-line-notification.lib.line_message.connection_success_feature_mention`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_feature_mention%22)

> 💬 Mentions your post

```diff
+💬 有人提及你的帖子
```

#### [`tapao-line-notification.lib.line_message.connection_success_feature_new_post`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_feature_new_post%22)

> 🔔 Posts in a discussion you follow

```diff
+🔔 你关注的讨论有新回复
```

#### [`tapao-line-notification.lib.line_message.connection_success_feature_user_mention`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_feature_user_mention%22)

> 📣 Mentions you

```diff
+📣 有人提及你
```

#### [`tapao-line-notification.lib.line_message.connection_success_features_intro`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_features_intro%22)

> You will receive forum notifications via LINE when someone:

```diff
+以下情况会通过 LINE 向你发送论坛通知：
```

#### [`tapao-line-notification.lib.line_message.connection_success_greeting`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_greeting%22)

> Hello!

```diff
+你好！
```

#### [`tapao-line-notification.lib.line_message.connection_success_greeting_name`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_greeting_name%22)

> Hello {name}!

```diff
+你好，{name}！
```

#### [`tapao-line-notification.lib.line_message.connection_success_header`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_header%22)

> ✅ Connection Successful

```diff
+✅ 绑定成功
```

#### [`tapao-line-notification.lib.line_message.connection_success_open_forum`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_open_forum%22)

> Open {forum}

```diff
+打开 {forum}
```

#### [`tapao-line-notification.lib.line_message.connection_success_settings_hint`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.connection_success_settings_hint%22)

> You can manage your notification preferences in the forum Settings page.

```diff
+你可以在设置页面管理通知。
```

#### [`tapao-line-notification.lib.line_message.fallback_title`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.fallback_title%22)

> New Notification

```diff
+新通知
```

#### [`tapao-line-notification.lib.line_message.notification_default`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.notification_default%22)

> 🔔 New notification from {forum}

```diff
+🔔 来自 {forum} 的新通知
```

#### [`tapao-line-notification.lib.line_message.notification_newPost`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.notification_newPost%22)

> 🔔 New post in a discussion you follow

```diff
+🔔 你关注的讨论有新回复
```

#### [`tapao-line-notification.lib.line_message.notification_postLiked`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.notification_postLiked%22)

> ❤️ Someone liked your post

```diff
+❤️ 有人点赞了你的帖子
```

#### [`tapao-line-notification.lib.line_message.notification_postMentioned`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.notification_postMentioned%22)

> 💬 Someone mentioned your post

```diff
+💬 有人提及了你的帖子
```

#### [`tapao-line-notification.lib.line_message.notification_privateDiscussion`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.notification_privateDiscussion%22)

> ✉️ You received a private message

```diff
+✉️ 你收到了一条私密回复
```

#### [`tapao-line-notification.lib.line_message.notification_userMentioned`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.notification_userMentioned%22)

> 📣 Someone mentioned you

```diff
+📣 有人提及了你
```

#### [`tapao-line-notification.lib.line_message.view_post_button`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.line_message.view_post_button%22)

> View Post

```diff
+查看帖子
```

#### [`tapao-line-notification.lib.notification.line_driver_label`](https://weblate.rob006.net/translate/flarum2/tapao-line-notification/zh_Hans/?q=context%3A%3D%22tapao-line-notification.lib.notification.line_driver_label%22)

> LINE

```diff
+LINE
```


### `tryhackx-homepage-blocks` (missing)

#### [`tryhackx-homepage-blocks.admin.section_content`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.section_content%22)

> Content Settings

```diff
+内容设置
```

#### [`tryhackx-homepage-blocks.admin.section_stats`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.section_stats%22)

> Tracker Statistics

```diff
+Tracker 统计
```

#### [`tryhackx-homepage-blocks.admin.section_tracker`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.section_tracker%22)

> Tracker Info

```diff
+Tracker 信息
```

#### [`tryhackx-homepage-blocks.admin.settings.category_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.category_label%22)

> Custom label for Category filter

```diff
+分类筛选名称
```

#### [`tryhackx-homepage-blocks.admin.settings.category_label_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.category_label_help%22)

> Leave empty to use the default translation.

```diff
+留空则使用默认翻译。
```

#### [`tryhackx-homepage-blocks.admin.settings.content_length_enabled`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.content_length_enabled%22)

> Enable content length modification

```diff
+启用自定义内容长度限制
```

#### [`tryhackx-homepage-blocks.admin.settings.content_length_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.content_length_help%22)

> Content column is mediumtext (up to 16 million chars). Set 0 to allow empty posts.

```diff
+内容字段为 mediumtext，最多约 1600 万字符。设为 0 可允许空帖子。
```

#### [`tryhackx-homepage-blocks.admin.settings.content_max_length`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.content_max_length%22)

> Maximum content length

```diff
+内容最大长度
```

#### [`tryhackx-homepage-blocks.admin.settings.content_min_length`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.content_min_length%22)

> Minimum content length

```diff
+内容最小长度
```

#### [`tryhackx-homepage-blocks.admin.settings.external_stats_enabled`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.external_stats_enabled%22)

> Enable External Tracker Statistics (OpenTracker)

```diff
+启用外部 Tracker 统计（OpenTracker）
```

#### [`tryhackx-homepage-blocks.admin.settings.external_stats_native_url_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.external_stats_native_url_help%22)

> Direct OpenTracker stats URL returning XML. Example: http://IP:6969/stats?mode=everything

```diff
+返回 XML 的 OpenTracker 统计 URL。例如：http://IP:6969/stats?mode=everything
```

#### [`tryhackx-homepage-blocks.admin.settings.external_stats_refresh`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.external_stats_refresh%22)

> External stats refresh interval (seconds)

```diff
+外部统计刷新间隔（秒）
```

#### [`tryhackx-homepage-blocks.admin.settings.external_stats_refresh_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.external_stats_refresh_help%22)

> How often to refresh external tracker stats. Default: 5 seconds.

```diff
+多久刷新一次外部 Tracker 统计。默认：5 秒。
```

#### [`tryhackx-homepage-blocks.admin.settings.hide_hero`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.hide_hero%22)

> Hide default Flarum hero banner

```diff
+隐藏 Flarum 默认欢迎横幅
```

#### [`tryhackx-homepage-blocks.admin.settings.resolution_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.resolution_label%22)

> Custom label for Resolution filter

```diff
+分辨率筛选名称
```

#### [`tryhackx-homepage-blocks.admin.settings.resolution_label_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.resolution_label_help%22)

> Leave empty to use the default translation.

```diff
+留空则使用默认翻译。
```

#### [`tryhackx-homepage-blocks.admin.settings.restore_defaults`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.restore_defaults%22)

> Defaults

```diff
+恢复默认值
```

#### [`tryhackx-homepage-blocks.admin.settings.search_debounce_ms`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.search_debounce_ms%22)

> Search debounce (ms)

```diff
+搜索触发延迟（毫秒）
```

#### [`tryhackx-homepage-blocks.admin.settings.search_debounce_ms_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.search_debounce_ms_help%22)

> Delay before firing a search while typing. Higher = fewer requests. Default: 500ms

```diff
+停止输入后等待多久再发起搜索。数值越大，请求越少。默认：500 ms
```

#### [`tryhackx-homepage-blocks.admin.settings.section1_collapsed`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.section1_collapsed%22)

> Section 1 collapsed by default

```diff
+区块 1 默认折叠
```

#### [`tryhackx-homepage-blocks.admin.settings.section2_enabled`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.section2_enabled%22)

> Enable Section 2 (Discussion List Header &amp; Filters)

```diff
+启用区块 2（讨论列表标题与筛选）
```

#### [`tryhackx-homepage-blocks.admin.settings.section2_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.section2_title%22)

> Section 2 Title (Discussion List)

```diff
+区块 2 标题（讨论列表）
```

#### [`tryhackx-homepage-blocks.admin.settings.show_only_used_tags`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.show_only_used_tags%22)

> Show only tags that have discussions

```diff
+仅显示已有讨论的标签
```

#### [`tryhackx-homepage-blocks.admin.settings.show_tag_count`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.show_tag_count%22)

> Show discussion count next to tag names

```diff
+在标签名称旁显示讨论数
```

#### [`tryhackx-homepage-blocks.admin.settings.stats_enabled`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.stats_enabled%22)

> Enable Internal Statistics (from database)

```diff
+启用内部统计（数据库）
```

#### [`tryhackx-homepage-blocks.admin.settings.stats_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.stats_title%22)

> Stats Section Title

```diff
+统计区标题
```

#### [`tryhackx-homepage-blocks.admin.settings.theme_mode`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.theme_mode%22)

> Theme Mode

```diff
+主题模式
```

#### [`tryhackx-homepage-blocks.admin.settings.theme_mode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.theme_mode_help%22)

> Auto detects OS/browser dark mode preference.

```diff
+自动跟随操作系统或浏览器的深色模式设置。
```

#### [`tryhackx-homepage-blocks.admin.settings.title_length_enabled`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.title_length_enabled%22)

> Enable title length modification

```diff
+启用自定义标题长度限制
```

#### [`tryhackx-homepage-blocks.admin.settings.title_length_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.title_length_help%22)

> Title column is varchar(200). Min must be at least 1, max at most 200.

```diff
+标题字段为 varchar(200)，最小值不能低于 1，最大值不能超过 200。
```

#### [`tryhackx-homepage-blocks.admin.settings.title_max_length`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.title_max_length%22)

> Maximum title length

```diff
+标题最大长度
```

#### [`tryhackx-homepage-blocks.admin.settings.title_min_length`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.title_min_length%22)

> Minimum title length

```diff
+标题最小长度
```

#### [`tryhackx-homepage-blocks.admin.settings.tracker_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.tracker_message%22)

> Tracker Info Message

```diff
+Tracker 信息
```

#### [`tryhackx-homepage-blocks.admin.settings.tracker_sub_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.tracker_sub_message%22)

> Tracker Info Sub-message

```diff
+Tracker 补充信息
```

#### [`tryhackx-homepage-blocks.admin.settings.tracker_urls`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.tracker_urls%22)

> Tracker Announce URLs

```diff
+Tracker 地址
```

#### [`tryhackx-homepage-blocks.admin.settings.tracker_urls_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.tracker_urls_help%22)

> One URL per line

```diff
+每行填写一个 URL
```

#### [`tryhackx-homepage-blocks.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.support.button%22)

> Support Development

```diff
+支持开发
```

#### [`tryhackx-homepage-blocks.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.support.copy%22)

> Copy address

```diff
+复制地址
```

#### [`tryhackx-homepage-blocks.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+如果这个扩展对你有帮助，可考虑小额捐赠，支持后续开发和维护。
```

#### [`tryhackx-homepage-blocks.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.support.thanks%22)

> Thank you for your support!

```diff
+感谢你的支持！
```

#### [`tryhackx-homepage-blocks.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.support.title%22)

> Support This Extension

```diff
+支持此扩展
```

#### [`tryhackx-homepage-blocks.forum.clear_field`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.clear_field%22)

> Clear field

```diff
+清空
```

#### [`tryhackx-homepage-blocks.forum.copied`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.copied%22)

> Copied!

```diff
+已复制
```

#### [`tryhackx-homepage-blocks.forum.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.copy%22)

> Copy

```diff
+复制
```

#### [`tryhackx-homepage-blocks.forum.filter_all`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_all%22)

> All

```diff
+全部
```

#### [`tryhackx-homepage-blocks.forum.filter_category`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_category%22)

> Category

```diff
+分类
```

#### [`tryhackx-homepage-blocks.forum.filter_date_interval`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_date_interval%22)

> Creation interval

```diff
+创建时间
```

#### [`tryhackx-homepage-blocks.forum.filter_direction`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_direction%22)

> Sort

```diff
+排序方向
```

#### [`tryhackx-homepage-blocks.forum.filter_rating_interval`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_rating_interval%22)

> Rating interval

```diff
+评分区间
```

#### [`tryhackx-homepage-blocks.forum.filter_resolution`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_resolution%22)

> Resolution

```diff
+分辨率
```

#### [`tryhackx-homepage-blocks.forum.filter_sort_by`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_sort_by%22)

> Sort by

```diff
+排序方式
```

#### [`tryhackx-homepage-blocks.forum.filter_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_title%22)

> Title

```diff
+标题
```

#### [`tryhackx-homepage-blocks.forum.filter_title_placeholder`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_title_placeholder%22)

> Search title...

```diff
+搜索标题…
```

#### [`tryhackx-homepage-blocks.forum.filter_user`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_user%22)

> User

```diff
+用户
```

#### [`tryhackx-homepage-blocks.forum.filter_user_placeholder`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_user_placeholder%22)

> Search user...

```diff
+搜索用户…
```

#### [`tryhackx-homepage-blocks.forum.interval_1d`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_1d%22)

> 1 Day

```diff
+1 天内
```

#### [`tryhackx-homepage-blocks.forum.interval_1m`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_1m%22)

> 1 Month

```diff
+1 个月内
```

#### [`tryhackx-homepage-blocks.forum.interval_1w`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_1w%22)

> 1 Week

```diff
+1 周内
```

#### [`tryhackx-homepage-blocks.forum.interval_1y`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_1y%22)

> 1 Year

```diff
+1 年内
```

#### [`tryhackx-homepage-blocks.forum.interval_2w`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_2w%22)

> 2 Weeks

```diff
+2 周内
```

#### [`tryhackx-homepage-blocks.forum.interval_3m`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_3m%22)

> 3 Months

```diff
+3 个月内
```

#### [`tryhackx-homepage-blocks.forum.interval_6m`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_6m%22)

> 6 Months

```diff
+6 个月内
```

#### [`tryhackx-homepage-blocks.forum.interval_all`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_all%22)

> All

```diff
+全部
```

#### [`tryhackx-homepage-blocks.forum.interval_today`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.interval_today%22)

> Today

```diff
+今天
```

#### [`tryhackx-homepage-blocks.forum.sort_asc`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_asc%22)

> Ascending

```diff
+升序
```

#### [`tryhackx-homepage-blocks.forum.sort_avg_rating`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_avg_rating%22)

> Average rating

```diff
+平均评分
```

#### [`tryhackx-homepage-blocks.forum.sort_created`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_created%22)

> Creation date

```diff
+创建时间
```

#### [`tryhackx-homepage-blocks.forum.sort_desc`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_desc%22)

> Descending

```diff
+降序
```

#### [`tryhackx-homepage-blocks.forum.sort_rating_count`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_rating_count%22)

> Number of ratings

```diff
+评分次数
```

#### [`tryhackx-homepage-blocks.forum.sort_recently_clicked`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_recently_clicked%22)

> Recently clicked

```diff
+最近点击
```

#### [`tryhackx-homepage-blocks.forum.sort_recently_rated`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_recently_rated%22)

> Recently rated

```diff
+最近获得评分
```

#### [`tryhackx-homepage-blocks.forum.sort_steamdb`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_steamdb%22)

> Steam DB Rating

```diff
+SteamDB 评分
```

#### [`tryhackx-homepage-blocks.forum.sort_views`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_views%22)

> Views

```diff
+浏览量
```

#### [`tryhackx-homepage-blocks.forum.stats_avg_rating`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_avg_rating%22)

> Avg Rating

```diff
+平均评分
```

#### [`tryhackx-homepage-blocks.forum.stats_completed`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_completed%22)

> Completed

```diff
+完成下载数
```

#### [`tryhackx-homepage-blocks.forum.stats_downloads`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_downloads%22)

> Downloads

```diff
+下载次数
```

#### [`tryhackx-homepage-blocks.forum.stats_external_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_external_label%22)

> OpenTracker

```diff
+OpenTracker
```

#### [`tryhackx-homepage-blocks.forum.stats_internal_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_internal_label%22)

> Forum Data

```diff
+论坛数据
```

#### [`tryhackx-homepage-blocks.forum.stats_magnets`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_magnets%22)

> Magnets

```diff
+磁力链接
```

#### [`tryhackx-homepage-blocks.forum.stats_peers`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_peers%22)

> Peers

```diff
+节点
```

#### [`tryhackx-homepage-blocks.forum.stats_seeds`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_seeds%22)

> Seeds

```diff
+做种数
```

#### [`tryhackx-homepage-blocks.forum.stats_torrents`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_torrents%22)

> Torrents

```diff
+种子
```

#### [`tryhackx-homepage-blocks.forum.stats_uptime`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_uptime%22)

> Uptime

```diff
+运行时间
```

#### [`tryhackx-homepage-blocks.forum.stats_users`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_users%22)

> Users

```diff
+用户
```

#### [`tryhackx-homepage-blocks.forum.stats_views`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/zh_Hans/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_views%22)

> Views

```diff
+浏览量
```


### `tryhackx-magnet-link` (missing)

#### [`tryhackx-magnet-link.admin.settings.activated_only_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.activated_only_help%22)

> Only users with confirmed email can view magnet links. This setting applies to logged-in users only.

```diff
+只有已验证邮箱的已登录用户才能查看磁力链接。
```

#### [`tryhackx-magnet-link.admin.settings.activated_only_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.activated_only_label%22)

> Activated Users Only

```diff
+仅限已验证邮箱的用户
```

#### [`tryhackx-magnet-link.admin.settings.ban_enabled_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_enabled_help%22)

> Temporarily ban IPs that click too many magnet links in a short time to prevent click count manipulation.

```diff
+短时间内点击过多磁力链接时暂时封禁该 IP，防止刷点击数。
```

#### [`tryhackx-magnet-link.admin.settings.ban_enabled_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_enabled_label%22)

> Enable Spam Protection

```diff
+启用点击防刷
```

#### [`tryhackx-magnet-link.admin.settings.ban_interval_count_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_interval_count_help%22)

> Number of clicks within the interval that triggers a ban.

```diff
+在上述时间范围内达到多少次点击时触发封禁。
```

#### [`tryhackx-magnet-link.admin.settings.ban_interval_count_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_interval_count_label%22)

> Ban Threshold

```diff
+封禁阈值
```

#### [`tryhackx-magnet-link.admin.settings.ban_interval_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_interval_help%22)

> Time window for counting clicks to determine if an IP should be banned.

```diff
+统计点击次数并判断是否封禁 IP 的时间范围。
```

#### [`tryhackx-magnet-link.admin.settings.ban_interval_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_interval_label%22)

> Ban Interval (minutes)

```diff
+点击统计窗口（分钟）
```

#### [`tryhackx-magnet-link.admin.settings.ban_time_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_time_help%22)

> How long an IP is banned after exceeding the click limit.

```diff
+点击次数超过限制后，IP 会被封禁多久。
```

#### [`tryhackx-magnet-link.admin.settings.ban_time_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.ban_time_label%22)

> Ban Duration (minutes)

```diff
+IP 封禁时长（分钟）
```

#### [`tryhackx-magnet-link.admin.settings.check_all_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.check_all_help%22)

> Query all available trackers and aggregate results based on the display type setting.

```diff
+查询所有可用 Tracker，并按下方方式汇总统计数据。
```

#### [`tryhackx-magnet-link.admin.settings.check_all_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.check_all_label%22)

> Check All Trackers

```diff
+查询所有 Tracker
```

#### [`tryhackx-magnet-link.admin.settings.click_tracking_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.click_tracking_help%22)

> Track and display the number of times each magnet link has been clicked.

```diff
+统计并显示每个磁力链接的点击次数。
```

#### [`tryhackx-magnet-link.admin.settings.click_tracking_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.click_tracking_label%22)

> Enable Click Tracking

```diff
+启用点击统计
```

#### [`tryhackx-magnet-link.admin.settings.display_type_average`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.display_type_average%22)

> Average for all values

```diff
+所有数据取平均值
```

#### [`tryhackx-magnet-link.admin.settings.display_type_average_max`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.display_type_average_max%22)

> Average for seeds/leeches, max for downloads

```diff
+做种数和下载者取平均值，完成下载数取最大值
```

#### [`tryhackx-magnet-link.admin.settings.display_type_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.display_type_help%22)

> How to aggregate statistics when checking multiple trackers.

```diff
+查询多个 Tracker 时如何汇总统计数据。
```

#### [`tryhackx-magnet-link.admin.settings.display_type_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.display_type_label%22)

> Display Type

```diff
+统计汇总方式
```

#### [`tryhackx-magnet-link.admin.settings.display_type_max_all`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.display_type_max_all%22)

> Maximum values for all

```diff
+所有数据取最大值
```

#### [`tryhackx-magnet-link.admin.settings.guest_visible_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.guest_visible_help%22)

> Allow guests to view magnet links. If disabled, guests will see a message asking them to register or login.

```diff
+允许访客查看磁力链接。关闭后会提示访客登录或注册。
```

#### [`tryhackx-magnet-link.admin.settings.guest_visible_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.guest_visible_label%22)

> Visible to Guests

```diff
+允许访客查看
```

#### [`tryhackx-magnet-link.admin.settings.http_only_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.http_only_help%22)

> Only query HTTP and HTTPS trackers. Enable this if your hosting provider doesn't allow UDP connections.

```diff
+仅查询 HTTP 和 HTTPS Tracker。如果托管服务不允许 UDP 连接，请启用此项。
```

#### [`tryhackx-magnet-link.admin.settings.http_only_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.http_only_label%22)

> HTTP(S) Trackers Only

```diff
+仅查询 HTTP(S) Tracker
```

#### [`tryhackx-magnet-link.admin.settings.max_trackers_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.max_trackers_label%22)

> Maximum Trackers to Query

```diff
+最多查询 Tracker 数
```

#### [`tryhackx-magnet-link.admin.settings.rename_enabled_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.rename_enabled_help%22)

> Allow post authors to rename magnet link display names within their own posts.

```diff
+允许帖子作者修改自己帖子中磁力链接的显示名称。
```

#### [`tryhackx-magnet-link.admin.settings.rename_enabled_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.rename_enabled_label%22)

> Enable Custom Torrent Names

```diff
+允许自定义种子名称
```

#### [`tryhackx-magnet-link.admin.settings.scraper_enabled_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.scraper_enabled_help%22)

> When enabled, the extension will query trackers to get seed/leech/download statistics. When disabled, only the torrent name and click count will be displayed.

```diff
+启用后，会查询 Tracker 获取做种、下载者和完成下载统计；关闭后仅显示种子名称和点击数。
```

#### [`tryhackx-magnet-link.admin.settings.scraper_enabled_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.scraper_enabled_label%22)

> Enable Tracker Scraping

```diff
+启用 Tracker 抓取
```

#### [`tryhackx-magnet-link.admin.settings.self_interval_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.self_interval_help%22)

> How long before the same IP can increment the click count for the same magnet link again.

```diff
+同一 IP 再次点击同一个磁力链接，需要间隔多久才会再次计入点击数。
```

#### [`tryhackx-magnet-link.admin.settings.self_interval_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.self_interval_label%22)

> Self-Click Interval (days)

```diff
+重复点击计数间隔（天）
```

#### [`tryhackx-magnet-link.admin.settings.tooltip_enabled_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.tooltip_enabled_help%22)

> Show magnet link stats when hovering over discussions in the discussion list.

```diff
+在讨论列表中悬停讨论时显示磁力链接统计。
```

#### [`tryhackx-magnet-link.admin.settings.tooltip_enabled_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.tooltip_enabled_label%22)

> Enable Discussion Tooltip

```diff
+启用讨论列表悬浮提示
```

#### [`tryhackx-magnet-link.admin.settings.tooltip_max_magnets_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.tooltip_max_magnets_help%22)

> Maximum number of magnet links displayed in the discussion tooltip. Set to 0 for unlimited.

```diff
+悬浮提示中最多显示多少个磁力链接。设为 0 表示不限制。
```

#### [`tryhackx-magnet-link.admin.settings.tooltip_max_magnets_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.tooltip_max_magnets_label%22)

> Max Magnets in Tooltip

```diff
+悬浮提示最多显示磁力链接数
```

#### [`tryhackx-magnet-link.admin.settings.tracker_timeout_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.tracker_timeout_help%22)

> Maximum time to wait for a tracker response. Set to 0 for default (2 seconds).

```diff
+等待单个 Tracker 响应的最长时间。设为 0 使用默认值（2 秒）。
```

#### [`tryhackx-magnet-link.admin.settings.tracker_timeout_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.settings.tracker_timeout_label%22)

> Tracker Timeout (seconds)

```diff
+Tracker 超时（秒）
```

#### [`tryhackx-magnet-link.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.support.button%22)

> Support Development

```diff
+支持开发
```

#### [`tryhackx-magnet-link.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.support.copy%22)

> Copy address

```diff
+复制地址
```

#### [`tryhackx-magnet-link.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+如果这个扩展对你有帮助，可考虑小额捐赠，支持后续开发和维护。
```

#### [`tryhackx-magnet-link.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.support.thanks%22)

> Thank you for your support!

```diff
+感谢你的支持！
```

#### [`tryhackx-magnet-link.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.admin.support.title%22)

> Support This Extension

```diff
+支持此扩展
```

#### [`tryhackx-magnet-link.forum.clicks`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.clicks%22)

> Clicks:

```diff
+点击数：
```

#### [`tryhackx-magnet-link.forum.completed`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.completed%22)

> Downloaded:

```diff
+完成下载：
```

#### [`tryhackx-magnet-link.forum.copy_link`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.copy_link%22)

> Copy magnet link to clipboard

```diff
+复制磁力链接
```

#### [`tryhackx-magnet-link.forum.editor.invalid`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.editor.invalid%22)

> Invalid magnet link. The link must start with 'magnet:'

```diff
+磁力链接无效，必须以「magnet:」开头
```

#### [`tryhackx-magnet-link.forum.editor.prompt`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.editor.prompt%22)

> Enter the magnet link:

```diff
+输入磁力链接：
```

#### [`tryhackx-magnet-link.forum.editor.tooltip`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.editor.tooltip%22)

> Insert Magnet Link

```diff
+插入磁力链接
```

#### [`tryhackx-magnet-link.forum.email_not_confirmed`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.email_not_confirmed%22)

> Please confirm your email to view magnet links.

```diff
+请先验证邮箱后再查看磁力链接。
```

#### [`tryhackx-magnet-link.forum.errors.invalid_magnet`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.errors.invalid_magnet%22)

> Invalid magnet link format

```diff
+磁力链接格式无效
```

#### [`tryhackx-magnet-link.forum.errors.load_failed`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.errors.load_failed%22)

> Failed to load magnet info

```diff
+磁力链接信息加载失败
```

#### [`tryhackx-magnet-link.forum.errors.no_http_trackers`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.errors.no_http_trackers%22)

> No HTTP(S) trackers available

```diff
+没有可用的 HTTP(S) Tracker
```

#### [`tryhackx-magnet-link.forum.errors.no_response`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.errors.no_response%22)

> No tracker responded

```diff
+Tracker 均无响应
```

#### [`tryhackx-magnet-link.forum.errors.no_trackers`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.errors.no_trackers%22)

> Magnet link contains no trackers

```diff
+磁力链接中没有 Tracker
```

#### [`tryhackx-magnet-link.forum.errors.scraper_error`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.errors.scraper_error%22)

> Failed to contact trackers

```diff
+无法连接 Tracker
```

#### [`tryhackx-magnet-link.forum.guest_not_allowed`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.guest_not_allowed%22)

> You must be logged in to view magnet links.

```diff
+请先登录后再查看磁力链接。
```

#### [`tryhackx-magnet-link.forum.leeches`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.leeches%22)

> Leeches:

```diff
+下载者：
```

#### [`tryhackx-magnet-link.forum.loading`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.loading%22)

> Loading magnet info...

```diff
+正在加载磁力链接信息…
```

#### [`tryhackx-magnet-link.forum.login`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.login%22)

> Login

```diff
+登录
```

#### [`tryhackx-magnet-link.forum.or`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.or%22)

> or

```diff
+或
```

#### [`tryhackx-magnet-link.forum.permission_denied`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.permission_denied%22)

> You do not have permission to view magnet links.

```diff
+你无权查看磁力链接。
```

#### [`tryhackx-magnet-link.forum.refresh`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.refresh%22)

> Refresh tracker data

```diff
+刷新 Tracker 数据
```

#### [`tryhackx-magnet-link.forum.register`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.register%22)

> Register

```diff
+注册
```

#### [`tryhackx-magnet-link.forum.rename.cancel`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.cancel%22)

> Cancel

```diff
+取消
```

#### [`tryhackx-magnet-link.forum.rename.label`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.label%22)

> Custom name:

```diff
+自定义名称：
```

#### [`tryhackx-magnet-link.forum.rename.modal_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.modal_title%22)

> Rename Torrent

```diff
+重命名种子
```

#### [`tryhackx-magnet-link.forum.rename.restore`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.restore%22)

> Restore original name

```diff
+恢复原名称
```

#### [`tryhackx-magnet-link.forum.rename.save`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.save%22)

> Save

```diff
+保存
```

#### [`tryhackx-magnet-link.forum.rename.tooltip`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.tooltip%22)

> Rename torrent

```diff
+重命名种子
```

#### [`tryhackx-magnet-link.forum.seeds`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.seeds%22)

> Seeds:

```diff
+做种数：
```

#### [`tryhackx-magnet-link.forum.size`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.size%22)

> Size:

```diff
+大小：
```

#### [`tryhackx-magnet-link.forum.tooltip.header`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.tooltip.header%22)

> Magnet Links

```diff
+磁力链接
```

#### [`tryhackx-magnet-link.forum.tooltip.loading`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.tooltip.loading%22)

> Loading magnet info...

```diff
+正在加载磁力链接信息…
```

#### [`tryhackx-magnet-link.forum.tooltip.no_magnets`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.forum.tooltip.no_magnets%22)

> No magnet links in this discussion

```diff
+此讨论没有磁力链接
```

#### [`tryhackx-magnet-link.permissions.viewMagnetLinks`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/zh_Hans/?q=context%3A%3D%22tryhackx-magnet-link.permissions.viewMagnetLinks%22)

> View magnet links

```diff
+查看磁力链接
```


### `tryhackx-thumb-sliders` (missing)

#### [`tryhackx-thumb-sliders.admin.fallback.clear_selection`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.clear_selection%22)

> Use no selection

```diff
+清除选择
```

#### [`tryhackx-thumb-sliders.admin.fallback.confirm_delete`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.confirm_delete%22)

> Delete this image?

```diff
+确定删除此图片吗？
```

#### [`tryhackx-thumb-sliders.admin.fallback.delete`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.delete%22)

> Delete

```diff
+删除
```

#### [`tryhackx-thumb-sliders.admin.fallback.no_files`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.no_files%22)

> No images uploaded yet.

```diff
+尚未上传图片
```

#### [`tryhackx-thumb-sliders.admin.fallback.not_active_mode`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.not_active_mode%22)

> These images are only used when fallback mode is set to "Custom uploaded image".

```diff
+仅当「无可用图片时」设为「自定义图片」时，这些图片才会生效。
```

#### [`tryhackx-thumb-sliders.admin.fallback.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.title%22)

> Fallback image library

```diff
+备用图片库
```

#### [`tryhackx-thumb-sliders.admin.fallback.upload_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.upload_button%22)

> Upload image

```diff
+上传图片
```

#### [`tryhackx-thumb-sliders.admin.fallback.uploading`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.uploading%22)

> Uploading…

```diff
+正在上传…
```

#### [`tryhackx-thumb-sliders.admin.settings.autoplay_speed_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.autoplay_speed_help%22)

> Time between slide transitions in milliseconds.

```diff
+两张图片自动切换的时间间隔。
```

#### [`tryhackx-thumb-sliders.admin.settings.autoplay_speed_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.autoplay_speed_label%22)

> Autoplay speed (ms)

```diff
+自动切换间隔（毫秒）
```

#### [`tryhackx-thumb-sliders.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.enabled_help%22)

> Show thumbnail sliders in the discussion list.

```diff
+在讨论列表中显示缩略图轮播。
```

#### [`tryhackx-thumb-sliders.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.enabled_label%22)

> Enable Thumb Sliders

```diff
+启用缩略图轮播
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_custom`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_custom%22)

> Custom uploaded image

```diff
+自定义图片
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_default`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_default%22)

> Built-in placeholder

```diff
+内置占位图
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_help%22)

> Choose what to display when a discussion has no usable image, or when the image fails to load.

```diff
+选择讨论没有可用图片或图片加载失败时显示的内容。
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_label%22)

> Fallback when no image is available

```diff
+无可用图片时
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_none`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_none%22)

> No thumbnail (content shifts left)

```diff
+不显示缩略图（内容左移）
```

#### [`tryhackx-thumb-sliders.admin.settings.max_images_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.max_images_help%22)

> Maximum number of images to show in the slider (max 20).

```diff
+轮播最多显示多少张图片，上限为 20 张。
```

#### [`tryhackx-thumb-sliders.admin.settings.max_images_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.max_images_label%22)

> Maximum images per discussion

```diff
+单个讨论最多显示图片数
```

#### [`tryhackx-thumb-sliders.admin.settings.max_img_size_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.max_img_size_help%22)

> Exclude images with width or height larger than this value.

```diff
+忽略宽度或高度高于此值的图片。
```

#### [`tryhackx-thumb-sliders.admin.settings.max_img_size_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.max_img_size_label%22)

> Max image dimension (px)

```diff
+图片最大尺寸（px）
```

#### [`tryhackx-thumb-sliders.admin.settings.min_img_size_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.min_img_size_help%22)

> Exclude images with width or height smaller than this value.

```diff
+忽略宽度或高度低于此值的图片。
```

#### [`tryhackx-thumb-sliders.admin.settings.min_img_size_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.min_img_size_label%22)

> Min image dimension (px)

```diff
+图片最小尺寸（px）
```

#### [`tryhackx-thumb-sliders.admin.settings.slider_width_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.slider_width_help%22)

> Width of the thumbnail slider. Height is auto (poster ratio 2:3).

```diff
+缩略图轮播的宽度，高度按 2:3 海报比例自动调整。
```

#### [`tryhackx-thumb-sliders.admin.settings.slider_width_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.slider_width_label%22)

> Slider width (px)

```diff
+轮播宽度（px）
```

#### [`tryhackx-thumb-sliders.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.button%22)

> Support Development

```diff
+支持开发
```

#### [`tryhackx-thumb-sliders.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.copy%22)

> Copy address

```diff
+复制地址
```

#### [`tryhackx-thumb-sliders.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+如果这个扩展对你有帮助，可考虑小额捐赠，支持后续开发和维护。
```

#### [`tryhackx-thumb-sliders.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.thanks%22)

> Thank you for your support!

```diff
+感谢你的支持！
```

#### [`tryhackx-thumb-sliders.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/zh_Hans/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.title%22)

> Support This Extension

```diff
+支持此扩展
```


### `tryhackx-topic-rating` (missing)

#### [`tryhackx-topic-rating.admin.permissions.rate_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.permissions.rate_label%22)

> Rate discussions

```diff
+为讨论评分
```

#### [`tryhackx-topic-rating.admin.permissions.reset_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.permissions.reset_label%22)

> Reset all ratings on discussions

```diff
+重置讨论的全部评分
```

#### [`tryhackx-topic-rating.admin.permissions.toggle_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.permissions.toggle_label%22)

> Enable/Disable rating on discussions

```diff
+启用或禁用讨论评分
```

#### [`tryhackx-topic-rating.admin.settings.allow_unactivated_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.settings.allow_unactivated_help%22)

> When enabled, users who haven't confirmed their email can still rate discussions.

```diff
+启用后，尚未验证邮箱的用户也可以为讨论评分。
```

#### [`tryhackx-topic-rating.admin.settings.allow_unactivated_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.settings.allow_unactivated_label%22)

> Allow unactivated accounts to rate

```diff
+允许未验证邮箱的用户评分
```

#### [`tryhackx-topic-rating.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.settings.enabled_help%22)

> Allow users to rate discussions with a 5-star system.

```diff
+允许用户使用五星制为讨论评分。
```

#### [`tryhackx-topic-rating.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.settings.enabled_label%22)

> Enable Topic Rating

```diff
+启用讨论评分
```

#### [`tryhackx-topic-rating.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.support.button%22)

> Support Development

```diff
+支持开发
```

#### [`tryhackx-topic-rating.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.support.copy%22)

> Copy address

```diff
+复制地址
```

#### [`tryhackx-topic-rating.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+如果这个扩展对你有帮助，可考虑小额捐赠，支持后续开发和维护。
```

#### [`tryhackx-topic-rating.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.support.thanks%22)

> Thank you for your support!

```diff
+感谢你的支持！
```

#### [`tryhackx-topic-rating.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.admin.support.title%22)

> Support This Extension

```diff
+支持此扩展
```

#### [`tryhackx-topic-rating.forum.controls.disable_rating`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.controls.disable_rating%22)

> Disable Rating

```diff
+禁用评分
```

#### [`tryhackx-topic-rating.forum.controls.enable_rating`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.controls.enable_rating%22)

> Enable Rating

```diff
+启用评分
```

#### [`tryhackx-topic-rating.forum.controls.reset_ratings`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.controls.reset_ratings%22)

> Reset All Ratings

```diff
+重置全部评分
```

#### [`tryhackx-topic-rating.forum.rating_count`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.rating_count%22)

> Ratings: {count}

```diff
+评分数：{count}
```

#### [`tryhackx-topic-rating.forum.ratings_modal.deleted_user`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.ratings_modal.deleted_user%22)

> \[deleted\]

```diff
+[已删除]
```

#### [`tryhackx-topic-rating.forum.ratings_modal.empty`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.ratings_modal.empty%22)

> No ratings yet.

```diff
+暂无评分
```

#### [`tryhackx-topic-rating.forum.ratings_modal.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.ratings_modal.title%22)

> Ratings ({count})

```diff
+评分（{count}）
```

#### [`tryhackx-topic-rating.forum.ratings_modal.updated_prefix`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.ratings_modal.updated_prefix%22)

> updated 

```diff
+更新于 
```

#### [`tryhackx-topic-rating.forum.reset_modal.cancel`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.reset_modal.cancel%22)

> Cancel

```diff
+取消
```

#### [`tryhackx-topic-rating.forum.reset_modal.confirm`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.reset_modal.confirm%22)

> Reset Ratings

```diff
+重置评分
```

#### [`tryhackx-topic-rating.forum.reset_modal.message`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.reset_modal.message%22)

> Are you sure you want to delete all {count} rating(s) for this discussion? This action cannot be undone.

```diff
+确定要删除此讨论的 {count} 个评分吗？此操作无法撤销。
```

#### [`tryhackx-topic-rating.forum.reset_modal.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.reset_modal.title%22)

> Reset All Ratings

```diff
+重置全部评分
```

#### [`tryhackx-topic-rating.forum.tooltip.activation_required`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.tooltip.activation_required%22)

> You must activate your account to rate.

```diff
+请先验证邮箱再评分。
```

#### [`tryhackx-topic-rating.forum.tooltip.login_required`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.tooltip.login_required%22)

> You must be logged in to rate.

```diff
+请先登录再评分。
```

#### [`tryhackx-topic-rating.forum.tooltip.rate_first`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.tooltip.rate_first%22)

> Be the first to rate!

```diff
+还没有人评分，抢先评分吧！
```

#### [`tryhackx-topic-rating.forum.tooltip.rate_this`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.tooltip.rate_this%22)

> Rate this topic

```diff
+给此讨论评分
```

#### [`tryhackx-topic-rating.forum.tooltip.your_rating`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/zh_Hans/?q=context%3A%3D%22tryhackx-topic-rating.forum.tooltip.your_rating%22)

> Your rating:

```diff
+你的评分：
```


### `walsgit-discussion-cards` (missing)

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupFail%22)

> ❌ Cleanup failed! {filename} found but couldn't be deleted : {error}

```diff
+❌ 清理失败：已找到 {filename}，但无法删除：{error}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupSuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupSuccess%22)

> ️✅ Cleanup: found and deleted {filename}

```diff
+✅ 清理：已找到并删除 {filename}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageFail%22)

> ❌ General default image migration failed! Couldn't migrate {filename}: 

```diff
+❌ 全局默认图片迁移失败，无法迁移 {filename}： 
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageSuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageSuccess%22)

> ️✅ General default image was migrated from assets/{filename} to {newfilepath}

```diff
+✅ 全局默认图片已从 assets/{filename} 迁移至 {newfilepath}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceNoCleanup`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceNoCleanup%22)

> ⏭️ Due to {failedMigrations} failed migrations, cleanup was skipped

```diff
+⏭️ 有 {failedMigrations} 项迁移失败，已跳过清理
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceStep1`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceStep1%22)

> —\[Step 1/3\] General default image migration...

```diff
+—[步骤 1/3] 迁移全局默认图片…
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceStep2`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceStep2%22)

> —\[Step 2/3\] Tag default images migration...

```diff
+—[步骤 2/3] 迁移标签默认图片…
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceStep3`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceStep3%22)

> —\[Step 3/3\] Cleanup...

```diff
+—[步骤 3/3] 清理…
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageFail%22)

> ❌ Tag {tagid}'s default image migration failed! Couldn't migrate {filename}: 

```diff
+❌ 标签 {tagid} 的默认图片迁移失败，无法迁移 {filename}： 
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageSuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageSuccess%22)

> ️✅ Tag {tagid}'s default image was migrated from assets/{filename} to {newfilepath}

```diff
+✅ 标签 {tagid} 的默认图片已从 assets/{filename} 迁移至 {newfilepath}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceUnknownError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceUnknownError%22)

> Unknown error

```diff
+未知错误
```

#### [`walsgit_discussion_cards.admin.console.migrateImagesEnd`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.migrateImagesEnd%22)

> ️✅ Migration over. Migrated images : {count}

```diff
+✅ 迁移完成，共迁移 {count} 张图片
```

#### [`walsgit_discussion_cards.admin.console.migrateImagesError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.migrateImagesError%22)

> ❌ Error: 

```diff
+❌ 错误： 
```

#### [`walsgit_discussion_cards.admin.console.migrateImagesStart`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.migrateImagesStart%22)

> ➡ Migrating old Discussion Cards default images...

```diff
+➡ 正在迁移旧版 Discussion Cards 默认图片…
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesAlreadyRunning`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesAlreadyRunning%22)

> Purge Images is already running.

```diff
+图片清理任务已在运行
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesDelete`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesDelete%22)

> Deleting file: {file}

```diff
+正在删除文件：{file}
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesDirectoryNotFound`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesDirectoryNotFound%22)

> Directory {directory} not found.

```diff
+找不到目录 {directory}
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesDryRun`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesDryRun%22)

> Simulation mode (dry run) activated: nothing will be deleted.

```diff
+已启用模拟模式（dry run），不会删除任何文件
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesEnd`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesEnd%22)

> Purging discussion cards images is completed.

```diff
+讨论卡片图片清理完成
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesFileSkipped`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesFileSkipped%22)

> Skipped file: {file}

```diff
+已跳过文件：{file}
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesInvalidArguments`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesInvalidArguments%22)

> Invalid arguments (run with --help flag for details on how to use).

```diff
+参数无效（添加 --help 查看用法）
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesLockAcquired`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesLockAcquired%22)

> Lock acquired.

```diff
+已获取锁
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesLockReleased`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesLockReleased%22)

> Lock released.

```diff
+已释放锁
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesScan`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesScan%22)

> Scanning for orphan card images...

```diff
+正在扫描未使用的卡片图片…
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesStart`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesStart%22)

> ➡ Purging discussion cards images...

```diff
+➡ 正在清理讨论卡片图片…
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesSummary`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesSummary%22)

> ➡ Purge summary: {deleted} deleted, {skipped} skipped &amp; {updated} updated discussion(s)

```diff
+➡ 清理汇总：删除 {deleted} 个，跳过 {skipped} 个，更新 {updated} 个讨论
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesCancelled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesCancelled%22)

> ❌ Action cancelled

```diff
+❌ 操作已取消
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesConfirmAll`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesConfirmAll%22)

> ⚠️ Do you really want to regenerate card images for ALL discussions? This might take a while and use a lot of ressources (Y/N)

```diff
+⚠️ 确定要重新生成所有讨论的卡片图片吗？这可能耗时较长并占用大量资源（Y/N）
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesError%22)

> ❌ Error while processing discussion #{id}: {message}

```diff
+❌ 处理讨论 #{id} 时出错：{message}
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesInvalidTagOption`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesInvalidTagOption%22)

> \--tag must be followed by one or more (comma separated) tag IDs (numbers) and/or quoted tag slugs (ex.: "slug-1", "slug-2").

```diff
+--tag 后必须跟一个或多个以逗号分隔的标签 ID（数字）和/或带引号的标签别名，例如："slug-1", "slug-2"。
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesNothingToDo`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesNothingToDo%22)

> No discussions to process

```diff
+没有需要处理的讨论
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesStart`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesStart%22)

> ➡ Starting to process {count} discussions...

```diff
+➡ 开始处理 {count} 个讨论…
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesStartAll`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesStartAll%22)

> ➡ Starting to process ALL \[{count}\] discussions...

```diff
+➡ 开始处理全部 {count} 个讨论…
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesStartAllWithout`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesStartAllWithout%22)

> ➡ Starting to process \[{count}\] discussions without images...

```diff
+➡ 开始处理 {count} 个缺少图片的讨论…
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesSummary`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesSummary%22)

> ➡ Regeneration summary{mode}: {total} processed, {success} successful &amp; {errors} errors.

```diff
+➡ 重新生成汇总{mode}：共处理 {total} 个，成功 {success} 个，失败 {errors} 个
```

#### [`walsgit_discussion_cards.admin.errors.adminImageNoPath`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.adminImageNoPath%22)

> The service hasn't provided a filename.

```diff
+服务未返回文件名
```

#### [`walsgit_discussion_cards.admin.errors.adminImageProcessingError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.adminImageProcessingError%22)

> Error while processing image: 

```diff
+处理图片时出错： 
```

#### [`walsgit_discussion_cards.admin.errors.adminImageUnauthorizedMethod`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.adminImageUnauthorizedMethod%22)

> Unauthorized method!

```diff
+不允许使用此方法
```

#### [`walsgit_discussion_cards.admin.errors.debugModalDiscussionId`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.debugModalDiscussionId%22)

> Discussion ID number must be a positive number (1 or greater)

```diff
+讨论 ID 必须为大于或等于 1 的正整数
```

#### [`walsgit_discussion_cards.admin.errors.deleteFilenameRequired`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.deleteFilenameRequired%22)

> Couldn't delete: filename required!

```diff
+无法删除：缺少文件名
```

#### [`walsgit_discussion_cards.admin.errors.deleteTargetNotFound`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.deleteTargetNotFound%22)

> Nothing to delete: target file {file} not found!

```diff
+无内容可删除：找不到目标文件 {file}
```

#### [`walsgit_discussion_cards.admin.errors.fileSize`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.fileSize%22)

> File size must be under 2 Mb

```diff
+文件大小不能超过 2 MB
```

#### [`walsgit_discussion_cards.admin.errors.filenameInvalidOrigin`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.filenameInvalidOrigin%22)

> Couldn't generate filename: unable to determine context {origin}!

```diff
+无法生成文件名：无法识别上下文 {origin}
```

#### [`walsgit_discussion_cards.admin.errors.filenameTagidMissing`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.filenameTagidMissing%22)

> Couldn't generate filename: Tag ID missing!

```diff
+无法生成文件名：缺少标签 ID
```

#### [`walsgit_discussion_cards.admin.errors.imageProcessingFailed`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.imageProcessingFailed%22)

> Image processing failed!

```diff
+图片处理失败
```

#### [`walsgit_discussion_cards.admin.errors.imageProcessingSourceNotFound`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.imageProcessingSourceNotFound%22)

> Image processing: source image {path} not found!

```diff
+图片处理：找不到源图片 {path}
```

#### [`walsgit_discussion_cards.admin.errors.invalidFile`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.invalidFile%22)

> Invalid file!

```diff
+文件无效
```

#### [`walsgit_discussion_cards.admin.errors.invalidMime`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.invalidMime%22)

> File format not supported. Accepted formats: JPEG, PNG, GIF, BMP or WebP

```diff
+不支持此文件格式。支持：JPEG、PNG、GIF、BMP、WebP
```

#### [`walsgit_discussion_cards.admin.errors.listCardsCount`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.listCardsCount%22)

> Value of &lt;em&gt;Number of list cards&lt;/em&gt; must be between 0 and 20 (0 for all)

```diff
+「列表卡片数量」必须为 0 到 20 之间的<em>数字</em>（0 表示全部）
```

#### [`walsgit_discussion_cards.admin.errors.noFileUploaded`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.noFileUploaded%22)

> No file uploaded!

```diff
+未上传文件
```

#### [`walsgit_discussion_cards.admin.errors.tagImageNoTagId`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.tagImageNoTagId%22)

> No tagId provided!

```diff
+未提供标签 ID
```

#### [`walsgit_discussion_cards.admin.errors.tagImageUnsupportedMethod`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.tagImageUnsupportedMethod%22)

> Unsupported method ({method})

```diff
+不支持的方法（{method}）
```

#### [`walsgit_discussion_cards.admin.errors.useListCards`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.useListCards%22)

> Value must be null, 0 or 1

```diff
+值必须为 null、0 或 1
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardOptions_info%22)

> Set the options for discussion lists cards (smaller than primary cards).

```diff
+设置讨论列表中的小尺寸卡片。
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardOptions_title%22)

> List cards options

```diff
+列表卡片设置
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardsCount_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardsCount_help%22)

> Number of discussion list items to be shown as smaller cards when &lt;em&gt;Use cards for discussion lists&lt;/em&gt; is activated (0 for all, max: 20)

```diff
+设置以小尺寸卡片显示的<em>讨论列表项</em>数量。设为 0 表示全部，最多 20 个
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardsCount_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardsCount_label%22)

> Number of list cards

```diff
+列表卡片数量
```

#### [`walsgit_discussion_cards.admin.settings.general.listCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCards_help%22)

> Display discussion list items as cards (smaller than primary cards). If not activated, default flarum discussion list items will be shown (no cards)

```diff
+将讨论列表项显示为卡片（小于主卡片）。关闭后使用 Flarum 默认讨论列表样式
```

#### [`walsgit_discussion_cards.admin.settings.general.listCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCards_label%22)

> Use cards for discussion lists

```diff
+讨论列表使用卡片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyButton`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyButton%22)

> Copy to clipboard

```diff
+复制到剪贴板
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyError%22)

> Debug information couldn't be copied!

```diff
+无法复制调试信息
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copySuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copySuccess%22)

> Debug information successfully copied!

```diff
+调试信息已复制
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckBtn`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckBtn%22)

> Check discussion

```diff
+检查讨论
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckingMessage`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckingMessage%22)

> Analyzing card image resolution data for discussion #{discussionId}... (waiting for results)

```diff
+正在分析讨论 #{discussionId} 的卡片图片选择逻辑…（等待结果）
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugHelpText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugHelpText%22)

> Use this to check how and why a card image is selected for a specific discussion. Enter that discussion's ID number and click on the check discussion button.

```diff
+用于检查指定讨论选择了哪张卡片图片以及选择原因。输入讨论 ID，然后点击「检查讨论」。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugLabel%22)

> Discussion ID

```diff
+讨论 ID
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugTitle%22)

> Discussion's card image resolving test

```diff
+讨论卡片图片选择测试
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_title%22)

> Debug information for Discussion Cards

```diff
+Discussion Cards 调试信息
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllBtnText%22)

> Delete all images

```diff
+删除所有图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllHelp`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllHelp%22)

> This will delete all discussion card images from your disk (server). Clicking the following button will run this CLI command: &lt;code&gt;php flarum discussion-cards:purge-images --all&lt;/code&gt;

```diff
+删除服务器上的所有讨论卡片图片。点击下方按钮将运行：<code>php flarum discussion-cards:purge-images --all</code>
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllLabel%22)

> Purge all discussion card images

```diff
+清理所有讨论卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedBtnText%22)

> Delete unused images

```diff
+删除未使用的图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedHelp`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedHelp%22)

> This will delete all unused images from your disk (server). These images are no longer in use by any discussion card and are therefore safe to delete. Clicking the following button will run this CLI command: &lt;code&gt;php flarum discussion-cards:purge-images&lt;/code&gt;

```diff
+删除服务器上未被任何讨论卡片使用的图片。点击下方按钮将运行：<code>php flarum discussion-cards:purge-images</code>
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedLabel%22)

> Purge unused discussion card images

```diff
+清理未使用的卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_error`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_error%22)

> An error occurred while purging images.

```diff
+清理图片时出错。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_helpText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_helpText%22)

> These options will let you delete discussion card images from your server. You can find more purge options with the CLI command: &lt;code&gt;php flarum discussion-cards:purge-images --help&lt;/code&gt;
> &lt;strong&gt;WARNING: these actions are irreversible!&lt;/strong&gt; Also, note that default images (general or tag) will not be delete here (to delete them, use the remove button in the dedicated section of the extension settings or tag settings respectively

```diff
+可在此删除服务器上的讨论卡片图片。更多清理选项请运行：<code>php flarum discussion-cards:purge-images --help</code>
+<strong>警告：删除后无法恢复！</strong> 全局默认图片和标签默认图片不会在这里删除；如需删除，请分别使用扩展设置或标签设置中的移除按钮。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_runningCommand`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_runningCommand%22)

> Running command...
>

```diff
+正在执行命令…
+
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_success`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_success%22)

> Images purged successfully

```diff
+图片已清理
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_title%22)

> Purge images

```diff
+清理图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_unknownError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_unknownError%22)

> Unknown error

```diff
+未知错误
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.refreshStats`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.refreshStats%22)

> Image statistics have been updated successfully

```diff
+图片统计已更新
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_error`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_error%22)

> An error occurred while regenerating images.

```diff
+重新生成图片时出错。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpText%22)

> These options will let you regenerate your discussion card images. To regenerate a different number of discussion cards images or ALL of them, use the dedicated CLI command; you can find more details about it by 

```diff
+可在此重新生成讨论卡片图片。如需处理其他数量或全部讨论，请使用专用 CLI 命令。详情请 
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpTextUrlTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpTextUrlTitle%22)

> &lt;strong&gt;reading the Wiki&lt;/strong&gt;

```diff
+<strong>查看 Wiki</strong>
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOBtnText%22)

> Regenerate 20 latest, top, newest &amp; oldest card images

```diff
+重新生成最近活跃、热门、最新和最早各 20 个讨论的卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOHelp`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOHelp%22)

> This will resolve and regenerate card images for the 20 latest, top, newest and oldest discussions. Discussions belonging to multiple categories will be processed once. Clicking the following button will run this CLI command: &lt;code&gt;php flarum discussion-cards:regenerate-images -l -t -N -o&lt;/code&gt;.

```diff
+重新选择并生成最近活跃、热门、最新和最早各 20 个讨论的卡片图片。同时属于多个类别的讨论只处理一次。点击下方按钮将运行：<code>php flarum discussion-cards:regenerate-images -l -t -N -o</code>。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOLabel%22)

> Regenerate card images for the 20 latest, top, newest &amp; oldest discussions

```diff
+重新生成最近活跃、热门、最新和最早各 20 个讨论的卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestBtnText%22)

> Regenerate 20 latest card images

```diff
+重新生成最近 20 个讨论的卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestHelp`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestHelp%22)

> This will resolve and regenerate card images for the 20 latest discussions. Clicking the following button will run this CLI command: &lt;code&gt;php flarum discussion-cards:regenerate-images&lt;/code&gt;.

```diff
+重新选择并生成最近 20 个讨论的卡片图片。点击下方按钮将运行：<code>php flarum discussion-cards:regenerate-images</code>。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestLabel%22)

> Regenerate card images for the 20 latest discussions

```diff
+重新生成最近 20 个讨论的卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutBtnText%22)

> Generate missing card images (max 20)

```diff
+生成缺失的卡片图片（最多 20 个）
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutHelp`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutHelp%22)

> This will resolve and generate card images for discussions that don't have any card image set (showing the stub image instead of one of the default images or one from its first post). This will only process a maximum of 20 discussions without images per execution. Clicking the following button will run this CLI command: &lt;code&gt;php flarum discussion-cards:regenerate-images -a -w 20&lt;/code&gt;.

```diff
+为尚未设置卡片图片、当前显示占位图的讨论选择并生成图片（首帖图片或默认图片）。每次最多处理 20 个讨论。点击下方按钮将运行：<code>php flarum discussion-cards:regenerate-images -a -w 20</code>。
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutLabel%22)

> Generate card images for discussions without any

```diff
+为缺少卡片图片的讨论生成图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_runningCommand`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_runningCommand%22)

> Running regenerate command...
>

```diff
+正在执行重新生成命令…
+
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_success`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_success%22)

> Images regenerated successfully

```diff
+图片已重新生成
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_title%22)

> Regenerate images

```diff
+重新生成图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_unknownError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_unknownError%22)

> Unknown error

```diff
+未知错误
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionImagesTitle%22)

> Discussion images

```diff
+讨论卡片图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionsWithoutImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionsWithoutImagesTitle%22)

> Discussions without images

```diff
+无图片的讨论
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statTotalImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statTotalImagesTitle%22)

> Total images

```diff
+图片总数
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statUnusedImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statUnusedImagesTitle%22)

> Unused images

```diff
+未使用的图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuDebug`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuDebug%22)

> Debug information

```diff
+调试信息
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuLabel%22)

> Tools

```diff
+工具
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuPurgeImages`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuPurgeImages%22)

> Purge Images

```diff
+清理图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuRegenerateImages`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuRegenerateImages%22)

> Regenerate images

```diff
+重新生成图片
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuUpdateStats`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuUpdateStats%22)

> Update stats

```diff
+更新统计
```

#### [`walsgit_discussion_cards.admin.tag_modal.listCardsCount_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.listCardsCount_help%22)

> Number of discussion list items to be shown as smaller cards when &lt;em&gt;Use cards for discussion lists&lt;/em&gt; is activated (0 for all, max: 20)

```diff
+设置以小尺寸卡片显示的<em>讨论列表项</em>数量。设为 0 表示全部，最多 20 个
```

#### [`walsgit_discussion_cards.admin.tag_modal.listCardsCount_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.listCardsCount_label%22)

> Number of list cards

```diff
+列表卡片数量
```

#### [`walsgit_discussion_cards.admin.tag_modal.useListCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.useListCards_help%22)

> Display discussion list items as cards (smaller than primary cards). If not activated, default flarum discussion list items will be shown (no cards)

```diff
+将讨论列表项显示为卡片（小于主卡片）。关闭后使用 Flarum 默认讨论列表样式
```

#### [`walsgit_discussion_cards.admin.tag_modal.useListCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.useListCards_label%22)

> Use cards for discussion lists

```diff
+讨论列表使用卡片
```

#### [`walsgit_discussion_cards.admin.tag_modal.useListCards_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.useListCards_title%22)

> List cards options

```diff
+列表卡片设置
```

#### [`walsgit_discussion_cards.forum.console.postUpdateCardImageError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/zh_Hans/?q=context%3A%3D%22walsgit_discussion_cards.forum.console.postUpdateCardImageError%22)

> Discussion Cards&gt; Error while refreshing updated card image for this discussion: 

```diff
+Discussion Cards> 更新此讨论的卡片图片时出错： 
```


### `walsgit-recycle-bin` (missing)

#### [`walsgit-recycle-bin.admin.unknown_user`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/zh_Hans/?q=context%3A%3D%22walsgit-recycle-bin.admin.unknown_user%22)

> Unknown user

```diff
+未知用户
```

<!-- {% endraw %} -->
