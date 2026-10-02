# Chinese (Simplified) inherited translations differences

Translations for Chinese (Simplified) (`zh_Hans`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **567** are translated differently and **226** are
translated only in `zh_Hans`. Altogether they cover **32** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
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


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `zh_Hans` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


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

<!-- {% endraw %} -->
