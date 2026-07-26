# Chinese (Traditional) inherited translations differences

Translations for Chinese (Traditional) (`zh_Hant`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **33** are translated differently and **199** are
translated only in `zh_Hant`. Altogether they cover **6** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [9](#core) | [21](#core-missing) |
| `datlechin-passkey` | 0 | [83](#datlechin-passkey-missing) |
| `flarum-akismet` | [2](#flarum-akismet) | 0 |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `fof-checklist` | 0 | [2](#fof-checklist-missing) |
| `validation` | [22](#validation) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `zh_Hant` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-論壇資訊總覽
+論壇資訊總覽。
```

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-啟用 <code>調適</code> 模式時，<code>JavaScript</code> 和 <code>CSS</code> 檔案將於每次請求時返回全新的編譯版本。調試模式中，所有日誌、警告和錯誤均會以彈窗形式展示在網頁中，資料庫密碼、環境變數等敏感資訊均有可能在此期間洩漏。 
+啟用 <code>debug</code> 模式時，<code>JavaScript</code> 和 <code>CSS</code> 檔案將於每次請求時返回全新的編譯版本。調試模式中，所有日誌、警告和錯誤均會以彈窗形式展示在網頁中，資料庫密碼、環境變數等敏感資訊均有可能在此期間洩漏。 
  
-因此我們強烈建議您在生產環境中將 <code>config.php</code> 檔案中的 <code>debug</code> 設置為 <code>false</code> 以禁用調試模式。請查看 <link>Flarum 文件</link>了解更多資訊。
+因此我們強烈建議您在生產環境中將 <code>config.php</code> 檔案中的禁用 <code>debug</code> 模式。請查看 <link>Flarum 文件</link>了解更多資訊。

```

啟用 <del>&lt;code&gt;調適&lt;/code&gt;</del><ins>&lt;code&gt;debug&lt;/code&gt;</ins> 模式時，&lt;code&gt;JavaScript&lt;/code&gt; 和 &lt;code&gt;CSS&lt;/code&gt; 檔案將於每次請求時返回全新的編譯版本。調試模式中，所有日誌、警告和錯誤均會以彈窗形式展示在網頁中，資料庫密碼、環境變數等敏感資訊均有可能在此期間洩漏。 <br /> <br />因此我們強烈建議您在生產環境中將 &lt;code&gt;config.php&lt;/code&gt; <del>檔案中的</del><ins>檔案中的禁用</ins> &lt;code&gt;debug&lt;/code&gt;<del> 設置為 &lt;code&gt;false&lt;/code&gt;</del> <del>以禁用調試模式。請查看</del><ins>模式。請查看</ins> &lt;link&gt;Flarum 文件&lt;/link&gt;了解更多資訊。<br />

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-配置論壇郵件服務
+配置論壇郵件服務。
```

#### [`core.admin.email.mail_mailgun_secret_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_mailgun_secret_label%22)

> Secret key

```diff
-Secret key
+密鑰
```

#### [`core.admin.email.send_test_mail_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.send_test_mail_text%22)

> This will send an email using the above configuration to your email, {email}.

```diff
-使用上述設置發送測試郵件到您的郵箱：{email}
+使用上述設置發送測試郵件到您的郵箱：{email}。
```

#### [`core.forum.composer_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_discussion.title_placeholder%22)

> Discussion Title

```diff
-文章標題 ...
+文章標題
```

文章標題<del> ...</del>

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-編輯成功
+編輯成功。
```

#### [`core.forum.discussion_list.empty_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_list.empty_text%22)

> It looks as though there are no discussions here.

```diff
-因為什麼都沒有，所以什麼都做得到
+因為什麼都沒有，所以什麼都做得到。
```

#### [`core.forum.user.posts_empty_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.posts_empty_text%22)

> It looks like there are no posts here.

```diff
-暫無內容
+暫無內容。
```


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/zh_Hant/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-API Key
+API 密鑰
```

API <del>Key</del><ins>密鑰</ins>

#### [`flarum-akismet.forum.post.not_spam_button`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/zh_Hant/?q=context%3A%3D%22flarum-akismet.forum.post.not_spam_button%22)

> Not Spam

```diff
-不是垃圾
+不是垃圾内容
```


### `validation`

#### [`validation.attributes.content`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.attributes.content%22)

> content

```diff
-正文
+內容
```

#### [`validation.attributes.email`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.attributes.email%22)

> email

```diff
-郵箱
+電子郵件
```

#### [`validation.attributes.tag_count_primary`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.attributes.tag_count_primary%22)

> number of primary tags

```diff
-主標籤數量
+主要標籤數量
```

#### [`validation.attributes.tag_count_secondary`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.attributes.tag_count_secondary%22)

> number of secondary tags

```diff
-次標籤數量
+次要標籤數量
```

#### [`validation.attributes.username`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.attributes.username%22)

> username

```diff
-使用者
+使用者名稱
```

#### [`validation.boolean`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.boolean%22)

> The :attribute field must be true or false.

```diff
-:attribute 必須是布爾值
+:attribute 必須為布林值。
```

:attribute <del>必須是布爾值</del><ins>必須為布林值。</ins>

#### [`validation.exists`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.exists%22)

> The selected :attribute is invalid.

```diff
-選擇的 :attribute 無效。
+所選的 :attribute 無效。
```

<del>選擇的</del><ins>所選的</ins> :attribute 無效。

#### [`validation.filled`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.filled%22)

> The :attribute field must have a value.

```diff
-:attribute 不能為空。
+:attribute 不可為空。
```

:attribute <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.in`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.in%22)

> The selected :attribute is invalid.

```diff
-屬性:attribute 非法。
+所選的 :attribute 無效。
```

#### [`validation.not_in`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.not_in%22)

> The selected :attribute is invalid.

```diff
-:attribute 無效。
+所選的 :attribute 無效。
```

<ins>所選的 </ins>:attribute 無效。

#### [`validation.present`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.present%22)

> The :attribute field must be present.

```diff
-:attribute 屬性必須存在。
+:attribute 必須存在。
```

:attribute <del>屬性必須存在。</del><ins>必須存在。</ins>

#### [`validation.prohibited`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.prohibited%22)

> The :attribute field is prohibited.

```diff
-:attribute 字段不可用。
+:attribute 不允許使用。
```

:attribute <del>字段不可用。</del><ins>不允許使用。</ins>

#### [`validation.prohibited_if`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.prohibited_if%22)

> The :attribute field is prohibited when :other is :value.

```diff
-:other 為 :value 時 :attribute 字段不可用。
+當 :other 為 :value 時，:attribute 不允許使用。
```

<ins>當 </ins>:other 為 :value<del> 時</del> <del>:attribute</del><ins>時，:attribute</ins> <del>字段不可用。</del><ins>不允許使用。</ins>

#### [`validation.prohibited_unless`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.prohibited_unless%22)

> The :attribute field is prohibited unless :other is in :values.

```diff
-:other 非 :value 時 :attribute 字段不可用。
+除非 :other 為 :values，否則 :attribute 不允許使用。
```

<del>:other</del><ins>除非</ins> <del>非</del><ins>:other</ins> <del>:value</del><ins>為</ins> <del>時</del><ins>:values，否則</ins> :attribute <del>字段不可用。</del><ins>不允許使用。</ins>

#### [`validation.required`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required%22)

> The :attribute field is required.

```diff
-:attribute 不能為空。
+:attribute 不可為空。
```

:attribute <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.required_if`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required_if%22)

> The :attribute field is required when :other is :value.

```diff
-當 :other 為 :value 時 :attribute 不能為空。
+當 :other 為 :value 時，:attribute 不可為空。
```

當 :other 為 :value <del>時 :attribute</del><ins>時，:attribute</ins> <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.required_unless`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required_unless%22)

> The :attribute field is required unless :other is in :values.

```diff
-:attribute 不能為空，除非 :other 屬於 :values.
+除非 :other 為 :values，否則 :attribute 不可為空。
```

<del>:attribute 不能為空，除非</del><ins>除非</ins> :other <del>屬於</del><ins>為</ins> <del>:values.</del><ins>:values，否則 :attribute 不可為空。</ins>

#### [`validation.required_with`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required_with%22)

> The :attribute field is required when :values is present.

```diff
-當 :values 存在時 :attribute 不能為空。
+當 :values 存在時，:attribute 不可為空。
```

當 :values <del>存在時 :attribute</del><ins>存在時，:attribute</ins> <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.required_with_all`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required_with_all%22)

> The :attribute field is required when :values are present.

```diff
-當 :values 都存在時 :attribute 不能為空。
+當 :values 全部存在時，:attribute 不可為空。
```

當 :values <del>都存在時 :attribute</del><ins>全部存在時，:attribute</ins> <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.required_without`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required_without%22)

> The :attribute field is required when :values is not present.

```diff
-當 :values 不存在時 :attribute 不能為空。
+當 :values 不存在時，:attribute 不可為空。
```

當 :values <del>不存在時 :attribute</del><ins>不存在時，:attribute</ins> <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.required_without_all`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.required_without_all%22)

> The :attribute field is required when none of :values are present.

```diff
-當 :values 都不存在時 :attribute 不能為空。
+當 :values 全部不存在時，:attribute 不可為空。
```

當 :values <del>都不存在時 :attribute</del><ins>全部不存在時，:attribute</ins> <del>不能為空。</del><ins>不可為空。</ins>

#### [`validation.unique`](https://weblate.rob006.net/translate/flarum2/validation/zh_Hant/?q=context%3A%3D%22validation.unique%22)

> The :attribute has already been taken.

```diff
-:attribute 已存在。
+:attribute 已被使用。
```

:attribute <del>已存在。</del><ins>已被使用。</ins>


## Missing translations

These strings are translated only in `zh_Hant`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `zh_Hant`.


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+來自 Flarum 官方社群 discuss.flarum.org 的最新消息與公告。
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# 則留言} other {# 則留言}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Flarum 團隊的最新消息和公告。
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+未發現公告。
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+隱藏公告
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+無法加載公告。請稍候再試。
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+閱讀更多
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+刷新公告
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+重試
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+顯示公告
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+公告
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+在 discuss.flarum.org 查看全部
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+已棄用插件
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+每週例行檢查時，若發現新的已棄用擴充套件，將以電子郵件通知管理員
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+立即檢查
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+已棄用擴充套件清單更新失敗。請稍後再試。
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+已完成更新已棄用擴充套件清單。已安裝的擴充套件中，共有 {count} 個已棄用。
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum 維護了一份<a>已棄用擴充套件清單</a>。若安裝了清單中的擴充套件，管理後台將會標示該擴充套件。
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+論譠小組件
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+注意：偵測到已淘汰的擴充套件
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+此頁面不支持該請求方法。
```


### `datlechin-passkey` (missing)

#### [`datlechin-passkey.admin.group_modal.require_passkey`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.group_modal.require_passkey%22)

> Require passkey for this group

```diff
+此群組必須使用 Passkey
```

#### [`datlechin-passkey.admin.group_modal.require_passkey_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.group_modal.require_passkey_help%22)

> Members will be reminded with a sticky banner until they register at least one passkey.

```diff
+群組成員在至少註冊一組 Passkey 前，將持續看到提醒橫幅。
```

#### [`datlechin-passkey.admin.settings.attestation_direct`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_direct%22)

> Direct

```diff
+直接
```

#### [`datlechin-passkey.admin.settings.attestation_indirect`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_indirect%22)

> Indirect

```diff
+間接
```

#### [`datlechin-passkey.admin.settings.attestation_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_label%22)

> Attestation conveyance

```diff
+Attestation 模式
```

#### [`datlechin-passkey.admin.settings.attestation_none`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.attestation_none%22)

> None (recommended)

```diff
+無（建議）
```

#### [`datlechin-passkey.admin.settings.description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.description%22)

> Configure passkey authentication for this forum.

```diff
+設定論壇的 Passkey 驗證。
```

#### [`datlechin-passkey.admin.settings.related_origins_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.related_origins_help%22)

> Additional origins permitted to perform passkey ceremonies. Used together with the W3C related-origins document at /.well-known/webauthn.

```diff
+允許執行 Passkey 驗證流程的其他來源，需搭配 /.well-known/webauthn 的 W3C related-origins 文件使用。
```

#### [`datlechin-passkey.admin.settings.related_origins_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.related_origins_label%22)

> Related origins (one per line)

```diff
+相關來源（每行一個）
```

#### [`datlechin-passkey.admin.settings.rp_id_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_id_help%22)

> The DNS name that scopes a passkey. Leave blank to auto-detect from the request host. Changing this invalidates every existing passkey.

```diff
+Passkey 所屬的 DNS 網域名稱。留空將自動依請求主機判斷。修改此設定會使所有既有 Passkey 失效。
```

#### [`datlechin-passkey.admin.settings.rp_id_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_id_label%22)

> Relying Party ID

```diff
+Relying Party ID
```

#### [`datlechin-passkey.admin.settings.rp_name_help`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_name_help%22)

> The name shown to users in the browser passkey prompt. Defaults to the forum title.

```diff
+瀏覽器顯示於 Passkey 提示中的名稱。預設為論壇名稱。
```

#### [`datlechin-passkey.admin.settings.rp_name_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.rp_name_label%22)

> Relying Party display name

```diff
+Relying Party 顯示名稱
```

#### [`datlechin-passkey.admin.settings.throttle_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.throttle_label%22)

> Login attempts per minute per IP

```diff
+每個 IP 每分鐘允許登入次數
```

#### [`datlechin-passkey.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.title%22)

> Passkey

```diff
+Passkey
```

#### [`datlechin-passkey.admin.settings.user_verification_discouraged`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_discouraged%22)

> Discouraged (touch only, less secure)

```diff
+不建議（僅需觸碰裝置，安全性較低）
```

#### [`datlechin-passkey.admin.settings.user_verification_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_label%22)

> User verification

```diff
+使用者驗證
```

#### [`datlechin-passkey.admin.settings.user_verification_preferred`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_preferred%22)

> Preferred (ask if the device supports it)

```diff
+建議（裝置支援時要求）
```

#### [`datlechin-passkey.admin.settings.user_verification_required`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.admin.settings.user_verification_required%22)

> Required (always ask for biometric or PIN)

```diff
+必要（每次都要求生物辨識或 PIN）
```

#### [`datlechin-passkey.email.backup_state.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.backup_state.body%22)

> Hi {username},
>
> Your passkey "{device}" on {forum} is now {state}.
>
> If you triggered this yourself (for example by signing in to iCloud Keychain or a password manager on a new device), you can ignore this message. If not, sign in and review the security tab. The passkey may have been copied to another device.
>
> {forum}
>

```diff
+您好，{username}：
+
+您在 {forum} 的 Passkey「{device}」目前已{state}。
+
+若此操作是由您自行觸發（例如登入 iCloud 鑰匙圈或其他密碼管理器），可忽略此通知。否則，請立即登入並檢查【安全性】頁面，此 Passkey 可能已被複製到其他裝置。
+
+{forum}
+
```

#### [`datlechin-passkey.email.backup_state.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.backup_state.subject%22)

> Sync state changed for a passkey on {forum}

```diff
+{forum} 上的 Passkey 同步狀態已變更
```

#### [`datlechin-passkey.email.backup_state.synced`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.backup_state.synced%22)

> synced to a cloud password manager

```diff
+同步至雲端密碼管理器
```

#### [`datlechin-passkey.email.backup_state.unsynced`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.backup_state.unsynced%22)

> stored on a single device only

```diff
+僅儲存在單一裝置
```

#### [`datlechin-passkey.email.bulk_revoked.actor_admin`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.actor_admin%22)

> A site moderator removed them on your behalf.

```diff
+此操作由論壇管理員代為執行。
```

#### [`datlechin-passkey.email.bulk_revoked.actor_self`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.actor_self%22)

> You initiated this revoke from the security tab.

```diff
+此操作由您於安全性頁面執行。
```

#### [`datlechin-passkey.email.bulk_revoked.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.body%22)

> Hi {username},
>
> All {count} passkeys were just removed from your account on {forum}. {actor}
>
> If you did not expect this, sign in with your password and check the security tab. If you cannot sign in, use the password-reset link on the login screen.
>
> {forum}
>

```diff
+您好，{username}：
+
+您的 {count} 組 Passkey 已全部從 {forum} 帳號移除。{actor}
+
+若這不是您預期的操作，請使用密碼登入並檢查【安全性】頁面。若無法登入，請使用登入畫面的密碼重設功能。
+
+{forum}
+
```

#### [`datlechin-passkey.email.bulk_revoked.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.bulk_revoked.subject%22)

> All passkeys were removed from your {forum} account

```diff
+您的 {forum} 帳號所有 Passkey 已被移除
```

#### [`datlechin-passkey.email.counter_regression.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.counter_regression.body%22)

> Hi {username},
>
> An attempt to sign in to {forum} with your passkey "{device}" failed because the credential reported a signature counter lower than the one we have on record. This is the canonical signal that the credential may have been copied to a second device.
>
> The login was rejected. We recommend you sign in with your password, revoke this passkey, and register a fresh one. If you have other devices configured with the same credential, also remove them from your password manager.
>
> {forum}
>

```diff
+您好，{username}：
+
+有人嘗試使用您的 Passkey「{device}」登入 {forum}，但因憑證回報的簽章計數器低於系統紀錄而遭拒絕。這通常表示此憑證可能已被複製到另一部裝置。
+
+此次登入已被拒絕。我們建議您使用密碼登入，撤銷此 Passkey，並重新註冊新的 Passkey。若其他裝置也使用相同憑證，請一併從密碼管理器中移除。
+
+{forum}
+
```

#### [`datlechin-passkey.email.counter_regression.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.counter_regression.subject%22)

> Possible passkey clone detected on your {forum} account

```diff
+偵測到您的 {forum} Passkey 可能遭到複製
```

#### [`datlechin-passkey.email.revoked.actor_admin`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.revoked.actor_admin%22)

> A site moderator removed it on your behalf.

```diff
+此操作由論壇管理員代為執行。
```

#### [`datlechin-passkey.email.revoked.actor_self`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.revoked.actor_self%22)

> You initiated this revoke from the security tab.

```diff
+此操作由您於安全性頁面執行。
```

#### [`datlechin-passkey.email.revoked.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.revoked.body%22)

> Hi {username},
>
> The passkey "{device}" was just removed from your account on {forum}. {actor}
>
> If you did not expect this, your account may be at risk. Sign in and review your remaining passkeys at the security tab. If you no longer have access, use the password-reset link on the login screen.
>
> {forum}
>

```diff
+您好，{username}：
+
+您的帳號於 {forum} 的 Passkey「{device}」已被移除。{actor}
+
+若這不是您預期的操作，您的帳號可能存在安全風險。請登入後前往【安全性】頁面檢查剩餘的 Passkey。若已無法登入，請使用登入畫面的密碼重設功能。
+
+{forum}
+
```

#### [`datlechin-passkey.email.revoked.subject`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.email.revoked.subject%22)

> A passkey was removed from your {forum} account

```diff
+您的 {forum} 帳號已有一組 Passkey 被移除
```

#### [`datlechin-passkey.forum.log_in.cancelled`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.cancelled%22)

> Passkey sign-in was cancelled.

```diff
+已取消 Passkey 登入。
```

#### [`datlechin-passkey.forum.log_in.failed`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.failed%22)

> Could not verify your passkey. Please try again.

```diff
+無法驗證您的 Passkey，請稍後再試。
```

#### [`datlechin-passkey.forum.log_in.passkey_unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.passkey_unsupported%22)

> This browser does not support passkeys.

```diff
+此瀏覽器不支援 Passkey。
```

#### [`datlechin-passkey.forum.log_in.security_error`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.security_error%22)

> The site origin does not match the configured relying party. Ask an admin to check the Passkey settings.

```diff
+網站來源與設定的 Relying Party 不符。請聯絡管理員檢查 Passkey 設定。
```

#### [`datlechin-passkey.forum.log_in.sign_in_with_passkey`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.sign_in_with_passkey%22)

> Sign in with passkey

```diff
+使用 Passkey 登入
```

#### [`datlechin-passkey.forum.log_in.throttled`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.throttled%22)

> Too many passkey login attempts. Please wait a minute and try again.

```diff
+Passkey 登入嘗試次數過多，請稍候一分鐘後再試。
```

#### [`datlechin-passkey.forum.log_in.unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.unsupported%22)

> This device cannot use the passkey type the site requires.

```diff
+此裝置無法使用網站所要求的 Passkey 類型。
```

#### [`datlechin-passkey.forum.log_in.verifying`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.log_in.verifying%22)

> Verifying passkey...

```diff
+正在驗證 Passkey...
```

#### [`datlechin-passkey.forum.required.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.required.body%22)

> Your role requires you to register a passkey before you can continue.

```diff
+您的身分群組要求必須先註冊 Passkey，才能繼續使用論壇。
```

#### [`datlechin-passkey.forum.required.set_up`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.required.set_up%22)

> Set up now

```diff
+立即設定
```

#### [`datlechin-passkey.forum.settings.add_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_button%22)

> Add passkey

```diff
+新增 Passkey
```

#### [`datlechin-passkey.forum.settings.add_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.cancel_button%22)

> Cancel

```diff
+取消
```

#### [`datlechin-passkey.forum.settings.add_modal.device_name_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.device_name_label%22)

> Name this passkey

```diff
+為此 Passkey 命名
```

#### [`datlechin-passkey.forum.settings.add_modal.device_name_placeholder`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.device_name_placeholder%22)

> e.g. iPhone, MacBook, YubiKey

```diff
+例如：iPhone、MacBook、YubiKey
```

#### [`datlechin-passkey.forum.settings.add_modal.register_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.register_button%22)

> Register

```diff
+註冊
```

#### [`datlechin-passkey.forum.settings.add_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.title%22)

> Add a passkey

```diff
+新增 Passkey
```

#### [`datlechin-passkey.forum.settings.alerts.bulk_revoke_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.bulk_revoke_succeeded%22)

> All passkeys revoked.

```diff
+所有 Passkey 已撤銷。
```

#### [`datlechin-passkey.forum.settings.alerts.registration_already_exists`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_already_exists%22)

> This device already has a passkey for your account. Revoke the existing one first, or use a different device.

```diff
+此裝置已為您的帳號建立 Passkey。請先撤銷既有 Passkey，或改用其他裝置。
```

#### [`datlechin-passkey.forum.settings.alerts.registration_failed`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_failed%22)

> Could not register your passkey. Please try again.

```diff
+無法註冊 Passkey，請稍後再試。
```

#### [`datlechin-passkey.forum.settings.alerts.registration_security_error`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_security_error%22)

> The site origin does not match the configured relying party. Ask an admin to check the Passkey settings.

```diff
+網站來源與設定的 Relying Party 不符。請聯絡管理員檢查 Passkey 設定。
```

#### [`datlechin-passkey.forum.settings.alerts.registration_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_succeeded%22)

> Passkey added.

```diff
+已新增 Passkey。
```

#### [`datlechin-passkey.forum.settings.alerts.registration_unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_unsupported%22)

> This device cannot register a passkey of the type the site requires.

```diff
+此裝置無法註冊網站要求的 Passkey 類型。
```

#### [`datlechin-passkey.forum.settings.alerts.rename_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.rename_succeeded%22)

> Passkey renamed.

```diff
+Passkey 已重新命名。
```

#### [`datlechin-passkey.forum.settings.alerts.revoke_succeeded`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.revoke_succeeded%22)

> Passkey revoked.

```diff
+Passkey 已撤銷。
```

#### [`datlechin-passkey.forum.settings.bulk_revoke_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.bulk_revoke_button%22)

> Revoke all

```diff
+全部撤銷
```

#### [`datlechin-passkey.forum.settings.bulk_revoke_modal.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.bulk_revoke_modal.body%22)

> Revoke all {count} of your passkeys? You will not be able to sign in with any of them afterwards.

```diff
+確定要撤銷您全部 {count} 個 Passkey 嗎？撤銷後將無法再使用它們登入。
```

#### [`datlechin-passkey.forum.settings.description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.description%22)

> Passkeys let you sign in without a password using your device or a hardware key.

```diff
+Passkey 可讓您使用裝置或硬體安全金鑰登入，而不必輸入密碼。
```

#### [`datlechin-passkey.forum.settings.heading`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.heading%22)

> Passkeys

```diff
+Passkey
```

#### [`datlechin-passkey.forum.settings.list.added_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.added_label%22)

> Added

```diff
+新增時間
```

#### [`datlechin-passkey.forum.settings.list.device_only`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.device_only%22)

> This device only

```diff
+僅限此裝置
```

#### [`datlechin-passkey.forum.settings.list.empty`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.empty%22)

> You have not added any passkeys yet.

```diff
+您尚未新增任何 Passkey。
```

#### [`datlechin-passkey.forum.settings.list.last_used_label`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.last_used_label%22)

> Last used

```diff
+最近使用
```

#### [`datlechin-passkey.forum.settings.list.never_used`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.never_used%22)

> Never used

```diff
+從未使用
```

#### [`datlechin-passkey.forum.settings.list.rename_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.rename_button%22)

> Rename

```diff
+重新命名
```

#### [`datlechin-passkey.forum.settings.list.revoke_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.revoke_button%22)

> Revoke

```diff
+撤銷
```

#### [`datlechin-passkey.forum.settings.list.synced`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.list.synced%22)

> Synced

```diff
+已同步
```

#### [`datlechin-passkey.forum.settings.rename_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.cancel_button%22)

> Cancel

```diff
+取消
```

#### [`datlechin-passkey.forum.settings.rename_modal.save_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.save_button%22)

> Save

```diff
+儲存
```

#### [`datlechin-passkey.forum.settings.rename_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.title%22)

> Rename passkey

```diff
+重新命名 Passkey
```

#### [`datlechin-passkey.forum.settings.revoke_modal.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.body%22)

> Are you sure you want to revoke {device}? You will not be able to sign in with this passkey afterwards.

```diff
+確定要撤銷 {device} 的 Passkey 嗎？撤銷後將無法再使用此 Passkey 登入。
```

#### [`datlechin-passkey.forum.settings.revoke_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.cancel_button%22)

> Cancel

```diff
+取消
```

#### [`datlechin-passkey.forum.settings.revoke_modal.confirm_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.confirm_button%22)

> Revoke

```diff
+撤銷
```

#### [`datlechin-passkey.forum.settings.revoke_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.title%22)

> Revoke passkey

```diff
+撤銷 Passkey
```

#### [`datlechin-passkey.forum.suggest.body`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.suggest.body%22)

> Sign in faster next time, without having to remember a password. Your device generates a passkey that only works on this site.

```diff
+下次可更快速登入，無需再記住密碼。您的裝置會建立一把僅適用於此網站的 Passkey。
```

#### [`datlechin-passkey.forum.suggest.not_now`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.suggest.not_now%22)

> Not now

```diff
+稍後再說
```

#### [`datlechin-passkey.forum.suggest.set_up`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.suggest.set_up%22)

> Set up a passkey

```diff
+設定 Passkey
```

#### [`datlechin-passkey.forum.suggest.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.forum.suggest.title%22)

> Set up a passkey

```diff
+設定 Passkey
```

#### [`datlechin-passkey.gdpr.anonymize_description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.gdpr.anonymize_description%22)

> All passkeys belonging to this user are revoked.

```diff
+撤銷此使用者的所有 Passkey。
```

#### [`datlechin-passkey.gdpr.delete_description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.gdpr.delete_description%22)

> All passkeys belonging to this user are deleted.

```diff
+刪除此使用者的所有 Passkey。
```

#### [`datlechin-passkey.gdpr.export_description`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/zh_Hant/?q=context%3A%3D%22datlechin-passkey.gdpr.export_description%22)

> Includes the device label, last-used timestamp, IP, and authenticator metadata for each registered passkey. Public keys identify a credential but cannot be used to forge a sign-in.

```diff
+包含每個已註冊 Passkey 的裝置名稱、最後使用時間、IP 位址及驗證器中繼資料。公開金鑰只能識別憑證，無法用於偽造登入。
```


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+稽核
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+設定
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+指定哪些資料可供使用者於受限稽核中檢視
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+需要安裝擴充套件 {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+受限稽核設定
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+檢視稽核日誌
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+檢視受限稽核日誌
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+允許檢視 IP 位址
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+使用者操作紀錄
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+稽核日誌
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+討論稽核
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+帳號變更
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+使用者操作紀錄
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+稽核日誌
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+討論稽核
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+帳號稽核
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+已刪除 {deleted_count} 筆稽核日誌
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+已手動清除快取
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+存取權杖
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+API 金鑰
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+命令列
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+工作階段
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+未知用戶端
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+篩選相同類型的操作
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+篩選此使用者的操作
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+篩選此用戶端的操作
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+篩選此討論中的操作
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+篩選此 IP 位址的操作
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+篩選此使用者相關操作
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+隱藏原始日誌
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+顯示原始日誌
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+討論 #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+群組 #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+貼文 #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+標籤 #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+使用者 #{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+建立討論 {discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+刪除討論 {discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+隱藏討論 {discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+討論標題由 {old_title} 變更為 {new_title}
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+還原討論 {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+沒有符合的紀錄
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+已停用擴充套件 {package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+已啟用擴充套件 {package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+已解除安裝擴充套件 {package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+套用
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+清除篩選
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+篩選日誌
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+操作類型，例如：action:post.created。
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+執行操作的使用者。可使用 actor:guest 搜尋系統或未登入使用者的操作。
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+提出請求的用戶端。
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+指定討論中的操作。
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+執行操作的 IP 位址。
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+受到此操作影響的使用者。
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+篩選條件：
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+貼文
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+貼文
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+可使用逗號分隔多個值以符合任一條件，例如：action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+在篩選器前加上減號即可排除，例如：-client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+搜尋語法說明
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+載入更多
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+（未提供原因）
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+（無）
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+權限 {permission} 已由 {old_groups} 變更為 {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+於討論 {discussion} 發表 {post}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+刪除 {postuser} 於討論 {discussion} 的 {post}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+隱藏 {postuser} 於討論 {discussion} 的 {post}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+還原 {postuser} 於討論 {discussion} 的 {post}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+修改 {postuser} 於討論 {discussion} 的 {post}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+重新整理
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+設定 {key} 已變更
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+設定 {key} 已由 {old_value} 變更為 {new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+已手動啟用帳號 {username}
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+已透過電子郵件驗證啟用帳號 {username}
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+已變更 {username} 的頭像
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+已移除 {username} 的頭像
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+建立帳號 {username}
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+刪除使用者 {username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+{username} 已申請將電子郵件變更為 {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+{username} 的電子郵件已由 {old_email} 變更為 {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+{username} 的群組已由 {old_groups} 變更為 {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+{username} 已登入
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+{username} 已透過 {provider} 登入
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+{username} 已登出
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+{username} 已申請變更密碼
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+{username} 已變更密碼
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+{username} 已申請重設密碼
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+收到 {email} 的密碼重設申請，但找不到對應帳號
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+已將 {provider} 綁定至 {username} 的帳號
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+{username} 已由 {old_username} 變更為 {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/zh_Hant/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `fof-checklist` (missing)

#### [`fof-checklist.admin.settings.cross_out_completed_items`](https://weblate.rob006.net/translate/flarum2/fof-checklist/zh_Hant/?q=context%3A%3D%22fof-checklist.admin.settings.cross_out_completed_items%22)

> Cross out completed checklist items?

```diff
+移除已完成項？
```

#### [`fof-checklist.lib.composer.checklist_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-checklist/zh_Hant/?q=context%3A%3D%22fof-checklist.lib.composer.checklist_tooltip%22)

> Toggle Checklist

```diff
+添加任務清單
```

<!-- {% endraw %} -->
