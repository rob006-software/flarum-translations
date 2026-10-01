# Chinese (Simplified) inherited translations differences

Translations for Chinese (Simplified) (`zh_Hans`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **5** are translated differently and **2** are
translated only in `zh_Hans`. Altogether they cover **3** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `ekumanov-inline-audio` | [1](#ekumanov-inline-audio) | 0 |
| `fof-oauth` | [1](#fof-oauth) | [2](#fof-oauth-missing) |
| `fof-polls` | [3](#fof-polls) | 0 |


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

<!-- {% endraw %} -->
