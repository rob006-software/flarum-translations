# Chinese (Traditional) inherited translations differences

Translations for Chinese (Traditional) (`zh_Hant`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **374** are translated differently and **4** are
translated only in `zh_Hant`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [374](#core) | [3](#core-missing) |
| `flarum-tags` | 0 | [1](#flarum-tags-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `zh_Hant` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
-來自 Flarum 官方社群 discuss.flarum.org 的最新消息與公告。
+最新動態與公告均來自 Flarum 官方社群 discuss.flarum.org。
```

<del>來自</del><ins>最新動態與公告均來自</ins> Flarum 官方社群<del> discuss.flarum.org</del> <del>的最新消息與公告。</del><ins>discuss.flarum.org。</ins>

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
-{count, plural, one {# 則留言} other {# 則留言}}
+{count, plural, one {# 則回覆} other {# 則回覆}}
```

{count, plural, one {# <del>則留言}</del><ins>則回覆}</ins> other {# <del>則留言}}</del><ins>則回覆}}</ins>

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
-Flarum 團隊的最新消息和公告。
+Flarum 團隊的最新動態與公告。
```

Flarum <del>團隊的最新消息和公告。</del><ins>團隊的最新動態與公告。</ins>

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
-未發現公告。
+暫無公告
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
-隱藏公告
+隱藏
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
-無法加載公告。請稍候再試。
+公告載入失敗，請稍後重試。
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
-刷新公告
+重新整理
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
-顯示公告
+顯示
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
-在 discuss.flarum.org 查看全部
+前往 discuss.flarum.org 查看全部
```

<del>在</del><ins>前往</ins> discuss.flarum.org 查看全部

#### [`core.admin.appearance.colored_header_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.colored_header_label%22)

> Colored Header

```diff
-導航欄上色
+彩色導覽列
```

#### [`core.admin.appearance.colors_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.colors_heading%22)

> Colors

```diff
-顏色
+配色
```

#### [`core.admin.appearance.colors_primary_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.colors_primary_label%22)

> Primary Color

```diff
-主色調
+主題色
```

#### [`core.admin.appearance.colors_secondary_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.colors_secondary_label%22)

> Secondary Color

```diff
-次色調
+輔助色
```

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-選擇兩種顏色作為論壇主色調。第一種作為突出顯示顏色，第二種作為背景等元素的顏色。
+選擇論壇的主題色和輔助色，分別用於內容凸顯和背景元素。
```

#### [`core.admin.appearance.custom_footer_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.custom_footer_heading%22)

> Custom Footer

```diff
-自定義頁腳
+自訂頁尾
```

#### [`core.admin.appearance.custom_header_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.custom_header_heading%22)

> Custom Header

```diff
-自定義頁眉
+自訂頁首
```

#### [`core.admin.appearance.custom_styles_cannot_use_less_features`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.custom_styles_cannot_use_less_features%22)

> The @import and data-uri features are not allowed in custom LESS.

```diff
-@import 和 data-uri 特性在自定義 LESS 中是不允許的。
+自訂 LESS 不支援使用 @import 和 data-uri 功能。
```

<ins>自訂 LESS 不支援使用 </ins>@import 和 data-uri<del> 特性在自定義 LESS</del> <del>中是不允許的。</del><ins>功能。</ins>

#### [`core.admin.appearance.custom_styles_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.custom_styles_heading%22)

> Custom Styles

```diff
-自定義樣式
+自訂樣式
```

#### [`core.admin.appearance.custom_styles_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.custom_styles_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's default styles.

```diff
-增加 Less/CSS 程式碼以自定義論壇外觀，此設置將覆蓋 Flarum 預設樣式。
+新增 Less/CSS 程式碼以自訂論壇外觀，此設定將覆寫 Flarum 預設樣式。
```

<del>增加</del><ins>新增</ins> Less/CSS <del>程式碼以自定義論壇外觀，此設置將覆蓋</del><ins>程式碼以自訂論壇外觀，此設定將覆寫</ins> Flarum 預設樣式。

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-自訂論壇風格、圖示及其他元素。
+自訂論壇配色、圖示以及其他元素
```

#### [`core.admin.appearance.edit_css_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.edit_css_button%22)

> Edit Custom CSS

```diff
-編輯自定義 CSS
+編輯自訂 CSS
```

<del>編輯自定義</del><ins>編輯自訂</ins> CSS

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-上傳圖片作為論壇的網站圖示，該圖示將顯示在瀏覽器標籤頁、搜尋引擎結果列表和書籤等多個位置。
+上傳圖片，用於瀏覽器分頁、書籤、搜尋引擎結果等位置。
```

#### [`core.admin.appearance.logo_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.logo_heading%22)

> Logo

```diff
-網站標誌
+Logo
```

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-上傳圖片代替論壇名稱，將顯示在導航欄的左側。
+上傳圖片，替代論壇名稱顯示在導覽列左側。
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
-已棄用插件
+停止維護的擴充功能
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
-每週例行檢查時，若發現新的已棄用擴充套件，將以電子郵件通知管理員
+每週檢查停止維護清單，符合時以電子郵件通知管理員
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
-已棄用擴充套件清單更新失敗。請稍後再試。
+取得停止維護的擴充功能清單失敗，請稍後重試。
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
-已完成更新已棄用擴充套件清單。已安裝的擴充套件中，共有 {count} 個已棄用。
+停止維護的擴充功能清單已更新，發現 {count} 個已安裝。
```

<del>已完成更新已棄用擴充套件清單。已安裝的擴充套件中，共有</del><ins>停止維護的擴充功能清單已更新，發現</ins> {count} <del>個已棄用。</del><ins>個已安裝。</ins>

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
-Flarum 維護了一份<a>已棄用擴充套件清單</a>。若安裝了清單中的擴充套件，管理後台將會標示該擴充套件。
+若安裝了 <a>停止維護清單</a> 中的擴充功能，儀表板中會有提示。
```

#### [`core.admin.basics.all_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.all_discussions_label%22)

> =&gt; core.ref.all\_discussions

```diff
-全部主題
+=> core.ref.all_discussions
```

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-設置論壇名稱、語言以及其它基本設定。
+設定論壇名稱、語言及其他一般設定
```

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-選擇外顯名稱的類型，預設為用戶名。
+選擇顯示名稱的類型，預設為使用者名稱。
```

#### [`core.admin.basics.forum_description_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.forum_description_heading%22)

> Forum Description

```diff
-論壇說明
+論壇描述
```

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-選擇一個頁面作為論壇首頁。
+選擇使用者存取論壇時預設進入的頁面。
```

#### [`core.admin.basics.show_language_selector_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.show_language_selector_label%22)

> Show language selector

```diff
-顯示語言選擇選單
+允許使用者切換語言
```

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-固定連結驅動：{model}
+固定連結格式：{model}
```

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-選擇此模組的 URL 驅動。
+選擇此內容的連結產生方式。
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-橫幅文字將顯示於「全部貼文」頁面頂部，用以歡迎新到訪的遊客。
+設定「全部主題」頁面頂端的歡迎橫幅文字。
```

#### [`core.admin.create_user.email_confirmed_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.create_user.email_confirmed_label%22)

> Require user to confirm this email

```diff
-需要用戶驗證此郵件
+需要使用者驗證電子郵件
```

#### [`core.admin.create_user.submit_and_create_another_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.create_user.submit_and_create_another_button%22)

> Create and add another

```diff
-建立並增加另一個
+建立並新增下一個
```

#### [`core.admin.create_user.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.create_user.submit_button%22)

> Create user

```diff
-建立用戶
+建立
```

#### [`core.admin.create_user.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.create_user.title%22)

> Create new user

```diff
-建立新用戶
+新增使用者
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
-系統訊息
+系統資訊
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
-無法複製到剪貼簿
+複製失敗
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
-系統資訊已複製到剪貼簿
+複製成功
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
-系統訊息
+系統資訊
```

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-無法寫入檔案。請檢查操作權限，重試或者直接從命令列執行命令。
+檔案系統寫入失敗，請檢查檔案權限後重試，或改用命令列執行。
```

#### [`core.admin.dashboard.status.headers.queue-driver`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.status.headers.queue-driver%22)

> Queue Driver

```diff
-Queue 驅動
+佇列驅動程式
```

#### [`core.admin.dashboard.status.headers.scheduler-status`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.status.headers.scheduler-status%22)

> Scheduler

```diff
-排程
+任務排程
```

#### [`core.admin.dashboard.status.headers.session-driver`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.status.headers.session-driver%22)

> Session Driver

```diff
-Session 驅動
+工作階段驅動程式
```

#### [`core.admin.dashboard.status.scheduler.active`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.active%22)

> Active

```diff
-啟用
+執行中
```

#### [`core.admin.dashboard.status.scheduler.inactive`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.inactive%22)

> Inactive

```diff
-禁用
+未執行
```

#### [`core.admin.dashboard.status.scheduler.never-run`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.never-run%22)

> Never run

```diff
-沒有執行過
+從未執行
```

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-啟用 <code>debug</code> 模式時，<code>JavaScript</code> 和 <code>CSS</code> 檔案將於每次請求時返回全新的編譯版本。調試模式中，所有日誌、警告和錯誤均會以彈窗形式展示在網頁中，資料庫密碼、環境變數等敏感資訊均有可能在此期間洩漏。 
- 
-因此我們強烈建議您在生產環境中將 <code>config.php</code> 檔案中的禁用 <code>debug</code> 模式。請查看 <link>Flarum 文件</link>了解更多資訊。
+啟用 <code>debug</code> 模式時，Flarum 會在每次請求時重新建置 <code>JavaScript</code> 和 <code>CSS</code> 資源。頁面警告和錯誤也會以彈出視窗形式顯示詳細資訊，資料庫憑證、環境變數等敏感資訊可能會在此期間外洩。
+
+強烈建議在正式環境中停用 <code>config.php</code> 中的 <code>debug</code> 模式。詳情請參閱 <link>Flarum 官方文件</link>。

```

啟用 &lt;code&gt;debug&lt;/code&gt; <del>模式時，&lt;code&gt;JavaScript&lt;/code&gt;</del><ins>模式時，Flarum 會在每次請求時重新建置 &lt;code&gt;JavaScript&lt;/code&gt;</ins> 和 &lt;code&gt;CSS&lt;/code&gt; <del>檔案將於每次請求時返回全新的編譯版本。調試模式中，所有日誌、警告和錯誤均會以彈窗形式展示在網頁中，資料庫密碼、環境變數等敏感資訊均有可能在此期間洩漏。 <br /> <br />因此我們強烈建議您在生產環境中將</del><ins>資源。頁面警告和錯誤也會以彈出視窗形式顯示詳細資訊，資料庫憑證、環境變數等敏感資訊可能會在此期間外洩。<br /><br />強烈建議在正式環境中停用</ins> &lt;code&gt;config.php&lt;/code&gt; <del>檔案中的禁用</del><ins>中的</ins> &lt;code&gt;debug&lt;/code&gt; <del>模式。請查看</del><ins>模式。詳情請參閱</ins> &lt;link&gt;Flarum <del>文件&lt;/link&gt;了解更多資訊。</del><ins>官方文件&lt;/link&gt;。</ins><br />

#### [`core.admin.debug-warning.label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.debug-warning.label%22)

> Debug mode active

```diff
-除錯模式啟動
+偵錯模式已啟用
```

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-透過增加 LESS/CSS 程式碼以客製化論壇外觀，此設定將覆蓋 Flarum <a>預設樣式</a>。
+新增 Less/CSS 程式碼以自訂論壇外觀，此設定將覆寫 Flarum <a>預設樣式</a>。
```

<del>透過增加</del><ins>新增</ins> <del>LESS/CSS</del><ins>Less/CSS</ins> <del>程式碼以客製化論壇外觀，此設定將覆蓋</del><ins>程式碼以自訂論壇外觀，此設定將覆寫</ins> Flarum &lt;a&gt;預設樣式&lt;/a&gt;。

#### [`core.admin.edit_css.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_css.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.admin.edit_css.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_css.title%22)

> Edit Custom CSS

```diff
-編輯客製化 CSS
+編輯自訂 CSS
```

<del>編輯客製化</del><ins>編輯自訂</ins> CSS

#### [`core.admin.edit_footer.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_footer.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.admin.edit_footer.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_footer.title%22)

> =&gt; core.ref.custom\_footer\_title

```diff
-編輯客製化頁腳
+=> core.ref.custom_footer_title
```

#### [`core.admin.edit_group.color_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.color_label%22)

> =&gt; core.ref.color

```diff
-顏色
+=> core.ref.color
```

#### [`core.admin.edit_group.delete_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.delete_button%22)

> Delete Group

```diff
-刪除群組
+刪除使用者組
```

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-確定是否刪除此群組？群組成員不會被刪除。
+確定要刪除此使用者組嗎？此操作不會刪除組內成員的帳號。
```

#### [`core.admin.edit_group.hide_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.hide_label%22)

> Hide on forum

```diff
-隱藏群組
+在論壇中隱藏
```

#### [`core.admin.edit_group.icon_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.icon_label%22)

> =&gt; core.ref.icon

```diff
-圖示
+=> core.ref.icon
```

#### [`core.admin.edit_group.icon_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.icon_text%22)

> =&gt; core.ref.icon\_text

```diff
-輸入任意 <a>FontAwesome</a> 圖示類名，<em>需要包含</em>前綴 <code>fas fa-</code>
+=> core.ref.icon_text
```

#### [`core.admin.edit_group.plural_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.plural_placeholder%22)

> Plural (e.g. Mods)

```diff
-群組（例如：管理組）
+使用者組（例如：管理組）
```

#### [`core.admin.edit_group.singular_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.singular_placeholder%22)

> Singular (e.g. Mod)

```diff
-群組成員（例如：管理員）
+成員（例如：管理員）
```

#### [`core.admin.edit_group.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.admin.edit_group.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_group.title%22)

> Create Group

```diff
-新增群組
+建立使用者組
```

#### [`core.admin.edit_header.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_header.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.admin.edit_header.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.edit_header.title%22)

> =&gt; core.ref.custom\_header\_title

```diff
-編輯客製化頁眉
+=> core.ref.custom_header_title
```

#### [`core.admin.email.addresses_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.addresses_heading%22)

> Addresses

```diff
-郵箱地址
+寄件地址
```

#### [`core.admin.email.driver_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.driver_heading%22)

> Choose a Driver

```diff
-驅動模式
+選擇寄件方式
```

#### [`core.admin.email.driver_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.driver_label%22)

> Driver

```diff
-驅動
+寄件方式
```

#### [`core.admin.email.from_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.from_label%22)

> Sender

```diff
-發信人
+寄件地址
```

#### [`core.admin.email.mail_encryption_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_encryption_label%22)

> Encryption

```diff
-加密協議 (小寫ssl或tls)
+加密協定
```

#### [`core.admin.email.mail_host_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_host_label%22)

> Host

```diff
-主機
+伺服器位址
```

#### [`core.admin.email.mail_mailgun_domain_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_mailgun_domain_label%22)

> Domain

```diff
-域名
+網域
```

#### [`core.admin.email.mail_password_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_password_label%22)

> =&gt; core.ref.password

```diff
-密碼
+=> core.ref.password
```

#### [`core.admin.email.mail_port_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_port_label%22)

> Port

```diff
-通訊埠
+連接埠
```

#### [`core.admin.email.mail_username_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mail_username_label%22)

> =&gt; core.ref.username

```diff
-用戶名 (部分服務商要求使用完整郵件地址)
+使用者名稱（部分郵件服務商要求使用者名稱必須與寄件地址一致）
```

#### [`core.admin.email.mailgun_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.mailgun_heading%22)

> Mailgun Settings

```diff
-Mailgun 設定
+Mailgun 服務
```

Mailgun <del>設定</del><ins>服務</ins>

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Flarum 目前無法傳送郵件，請檢查郵件驅動及配置。
+Flarum 目前無法傳送電子郵件，請檢查寄件方式及其設定。
```

Flarum <del>目前無法傳送郵件，請檢查郵件驅動及配置。</del><ins>目前無法傳送電子郵件，請檢查寄件方式及其設定。</ins>

#### [`core.admin.email.send_test_mail_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.send_test_mail_button%22)

> Send

```diff
-發送
+傳送
```

#### [`core.admin.email.send_test_mail_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.send_test_mail_heading%22)

> Send Test Mail

```diff
-發送測試郵件
+傳送測試郵件
```

#### [`core.admin.email.send_test_mail_success`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.send_test_mail_success%22)

> Test mail sent successfully!

```diff
-測試郵件發送成功！
+測試郵件傳送成功！
```

#### [`core.admin.email.smtp_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.smtp_heading%22)

> SMTP Settings

```diff
-SMTP 設定
+SMTP 服務
```

SMTP <del>設定</del><ins>服務</ins>

#### [`core.admin.email.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.email.title%22)

> =&gt; core.ref.email

```diff
-信箱
+=> core.ref.email
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
-此擴充功能不再由其作者維護，並且可能不會再收到更新。
+此擴充功能已停止維護，今後可能不再更新。
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
-此擴充功能已被{replacement}取代。考慮遷移到替換包。
+此擴充功能已被 {replacement} 替代，請考慮遷移。
```

#### [`core.admin.extension.configure_scopes`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.configure_scopes%22)

> Configure Scopes

```diff
-設置範圍
+新增標籤設定
```

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-重置操作會清除資料庫中所有該擴充套件相關的記錄和資源。如要卸載擴充套件，請透過 Composer 操作。確定要重置擴充套件嗎？
+此操作將清除該擴充功能的所有資料庫紀錄及相關資源，但不會解除安裝擴充功能；如需解除安裝，請透過 Composer 操作。確定要繼續嗎？
```

<del>重置操作會清除資料庫中所有該擴充套件相關的記錄和資源。如要卸載擴充套件，請透過</del><ins>此操作將清除該擴充功能的所有資料庫紀錄及相關資源，但不會解除安裝擴充功能；如需解除安裝，請透過</ins> Composer <del>操作。確定要重置擴充套件嗎？</del><ins>操作。確定要繼續嗎？</ins>

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-開啟擴充套件程式以查看或修改設置。
+啟用擴充功能以查看和修改設定。
```

#### [`core.admin.extension.info_links.discuss`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.info_links.discuss%22)

> Discuss

```diff
-討論區
+英文社群
```

#### [`core.admin.extension.info_links.documentation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.info_links.documentation%22)

> Documentation

```diff
-檔案
+文件
```

#### [`core.admin.extension.no_permissions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.no_permissions%22)

> This extension has no permissions.

```diff
-此擴充套件無新增權限。
+無新增權限
```

#### [`core.admin.extension.no_settings`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.no_settings%22)

> This extension has no settings.

```diff
-此擴充套件無設置項。
+無設定項
```

#### [`core.admin.extension.open_modal`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.open_modal%22)

> Open Settings

```diff
-打開設置
+開啟設定
```

#### [`core.admin.extension.purge_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.purge_button%22)

> Purge

```diff
-重置
+重設
```

#### [`core.admin.extension.readme.button_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.readme.button_label%22)

> README

```diff
-說明檔
+說明
```

#### [`core.admin.extension.readme.no_readme`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.readme.no_readme%22)

> This extension does not appear to have a README file

```diff
-此擴充套件未提供說明檔
+此擴充功能似乎沒有 README 檔案
```

#### [`core.admin.extension.readme.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.readme.title%22)

> {extName} documentation

```diff
-{extName} 檔案
+{extName} 文件
```

{extName} <del>檔案</del><ins>文件</ins>

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
-替換
+已被替代
```

#### [`core.admin.header.get_help`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.header.get_help%22)

> Get Help

```diff
-幫助
+取得協助
```

#### [`core.admin.header.log_out_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.header.log_out_button%22)

> =&gt; core.ref.log\_out

```diff
-登出
+=> core.ref.log_out
```

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-請稍候...
+請稍後…
```

#### [`core.admin.nav.appearance_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.appearance_button%22)

> =&gt; core.admin.appearance.title

```diff
-外觀設定
+=> core.admin.appearance.title
```

#### [`core.admin.nav.appearance_title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.appearance_title%22)

> =&gt; core.admin.appearance.description

```diff
-自定義論壇色調、圖示以及其他元素
+=> core.admin.appearance.description
```

#### [`core.admin.nav.basics_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.basics_button%22)

> =&gt; core.admin.basics.title

```diff
-基本設定
+=> core.admin.basics.title
```

#### [`core.admin.nav.basics_title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.basics_title%22)

> =&gt; core.admin.basics.description

```diff
-設置論壇名稱、語言以及其他基本設置
+=> core.admin.basics.description
```

#### [`core.admin.nav.categories.authentication`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.categories.authentication%22)

> Authentication

```diff
-驗證
+身分驗證
```

#### [`core.admin.nav.categories.core`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.categories.core%22)

> Core Configuration

```diff
-核心配置
+核心設定
```

#### [`core.admin.nav.categories.discussion`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.categories.discussion%22)

> Discussion

```diff
-主題
+討論與內容
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
-論譠小組件
+小工具
```

#### [`core.admin.nav.categories.theme`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.categories.theme%22)

> Themes

```diff
-樣式
+主題樣式
```

#### [`core.admin.nav.email_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.email_button%22)

> =&gt; core.ref.email

```diff
-郵箱
+=> core.ref.email
```

#### [`core.admin.nav.permissions_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.permissions_button%22)

> =&gt; core.admin.permissions.title

```diff
-權限設定
+=> core.admin.permissions.title
```

#### [`core.admin.nav.permissions_title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.permissions_title%22)

> =&gt; core.admin.permissions.description

```diff
-設置各群組訪問及操作權限
+=> core.admin.permissions.description
```

#### [`core.admin.nav.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.search_placeholder%22)

> Search Extensions

```diff
-搜尋擴充套件
+搜尋擴充功能
```

#### [`core.admin.nav.userlist_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.nav.userlist_button%22)

> =&gt; core.admin.users.title

```diff
-用戶
+=> core.admin.users.title
```

#### [`core.admin.permissions.allow_post_editing_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.allow_post_editing_label%22)

> Allow post editing

```diff
-編輯貼文
+允許編輯文章
```

#### [`core.admin.permissions.allow_renaming_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.allow_renaming_label%22)

> Allow renaming

```diff
-更改主題
+允許變更自己的討論標題
```

#### [`core.admin.permissions.create_access_token_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.create_access_token_label%22)

> Create access token

```diff
-建立訪問令牌
+建立存取權杖
```

#### [`core.admin.permissions.create_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.create_heading%22)

> Create

```diff
-貼文
+發佈
```

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-永久刪除貼文
+永久刪除討論
```

#### [`core.admin.permissions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.delete_discussions_label%22)

> Delete discussions

```diff
-刪除貼文
+刪除討論
```

#### [`core.admin.permissions.delete_posts_forever_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.delete_posts_forever_label%22)

> Delete posts forever

```diff
-永久刪除回覆
+永久刪除文章
```

#### [`core.admin.permissions.delete_posts_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.delete_posts_label%22)

> Delete posts

```diff
-刪除回覆
+刪除文章
```

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-設置各群組訪問及操作權限。
+全域或分標籤設定使用者的檢視和操作權限
```

#### [`core.admin.permissions.edit_posts_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.edit_posts_label%22)

> Edit posts

```diff
-編輯回覆
+編輯文章
```

#### [`core.admin.permissions.edit_users_credentials_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.edit_users_credentials_label%22)

> Edit user credentials

```diff
-編輯用戶身份標識
+編輯使用者登入憑證
```

#### [`core.admin.permissions.edit_users_groups_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.edit_users_groups_label%22)

> Edit user groups

```diff
-編輯群組
+編輯使用者組
```

#### [`core.admin.permissions.edit_users_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.edit_users_label%22)

> Edit user attributes

```diff
-編輯會員
+編輯使用者資料
```

#### [`core.admin.permissions.global_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.global_heading%22)

> Global

```diff
-全站
+全域
```

#### [`core.admin.permissions.moderate_access_tokens_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.moderate_access_tokens_label%22)

> Moderate Access Tokens

```diff
-適度的訪問令牌
+管理存取權杖
```

#### [`core.admin.permissions.new_group_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.new_group_button%22)

> New Group

```diff
-新增群組
+建立使用者組
```

#### [`core.admin.permissions.participate_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.participate_heading%22)

> Participate

```diff
-操作
+參與
```

#### [`core.admin.permissions.post_without_throttle_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.post_without_throttle_label%22)

> Reply multiple times without waiting

```diff
-頻繁回覆無需等待間隔
+允許連續發文
```

#### [`core.admin.permissions.read_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.read_heading%22)

> Read

```diff
-訪問
+存取
```

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
-移除 {scope} 的範圍
+移除 {scope} 的權限設定
```

移除 {scope} <del>的範圍</del><ins>的權限設定</ins>

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-更改主題
+變更討論標題
```

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-新增回覆
+回覆
```

#### [`core.admin.permissions.sign_up_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.sign_up_label%22)

> Sign up

```diff
-註冊帳戶
+註冊
```

#### [`core.admin.permissions.start_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.start_discussions_label%22)

> Start discussions

```diff
-發表文章
+發起討論
```

#### [`core.admin.permissions.view_forum_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.view_forum_label%22)

> View forum (discussions and users)

```diff
-瀏覽論壇（討論和用戶）
+瀏覽論壇（討論和使用者）
```

#### [`core.admin.permissions.view_hidden_groups_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.view_hidden_groups_label%22)

> View hidden group badges

```diff
-查看隱藏群組
+檢視隱藏的使用者組徽章
```

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-查看最後活動時間
+始終檢視使用者最後上線時間
```

#### [`core.admin.permissions.view_post_ips_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions.view_post_ips_label%22)

> View post IP addresses

```diff
-查看 IP 地址
+檢視 IP 位址
```

<del>查看</del><ins>檢視</ins> IP <del>地址</del><ins>位址</ins>

#### [`core.admin.permissions_controls.allow_indefinitely_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions_controls.allow_indefinitely_button%22)

> Indefinitely

```diff
-無限期
+無限制
```

#### [`core.admin.permissions_controls.allow_some_minutes_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions_controls.allow_some_minutes_button%22)

> {count, plural, one {For # minute} other {For # minutes}}

```diff
-{count, plural, one {發布 # 分鐘內} other {發布 # 分鐘內}}
+{count, plural, one {發佈 # 分鐘內} other {發佈 # 分鐘內}}
```

{count, plural, one <del>{發布</del><ins>{發佈</ins> # 分鐘內} other <del>{發布</del><ins>{發佈</ins> # 分鐘內}}

#### [`core.admin.permissions_controls.allow_ten_minutes_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions_controls.allow_ten_minutes_button%22)

> For 10 minutes

```diff
-10 分鐘內
+發佈 10 分鐘內
```

<ins>發佈 </ins>10 分鐘內

#### [`core.admin.permissions_controls.members_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.permissions_controls.members_button%22)

> =&gt; core.group.members

```diff
-註冊會員
+=> core.group.members
```

#### [`core.admin.settings.saved_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.settings.saved_message%22)

> Your changes were saved.

```diff
-您的修改已儲存。
+你的修改已儲存。
```

#### [`core.admin.settings.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.settings.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.admin.upload_image.remove_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.upload_image.remove_button%22)

> =&gt; core.ref.remove

```diff
-移除
+=> core.ref.remove
```

#### [`core.admin.users.create_user_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.create_user_button%22)

> New User

```diff
-新用戶
+新增使用者
```

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-論壇用戶分頁列表。
+論壇使用者一覽。
```

#### [`core.admin.users.grid.columns.email.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.email.title%22)

> =&gt; core.ref.email

```diff
-郵箱
+=> core.ref.email
```

#### [`core.admin.users.grid.columns.email.visibility_hide`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.email.visibility_hide%22)

> Hide email address

```diff
-隱藏郵箱地址
+隱藏電子郵件地址
```

#### [`core.admin.users.grid.columns.email.visibility_show`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.email.visibility_show%22)

> Show email address

```diff
-顯示郵箱地址
+顯示電子郵件地址
```

#### [`core.admin.users.grid.columns.group_badges.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.group_badges.title%22)

> Groups

```diff
-群組
+使用者組
```

#### [`core.admin.users.grid.columns.user_actions.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.user_actions.title%22)

> Actions

```diff
-行動
+操作
```

#### [`core.admin.users.grid.columns.username.profile_link_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.username.profile_link_tooltip%22)

> Visit {username}'s profile

```diff
-訪問 {username} 的主頁
+前往 {username} 的主頁
```

<del>訪問</del><ins>前往</ins> {username} 的主頁

#### [`core.admin.users.grid.columns.username.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.columns.username.title%22)

> =&gt; core.ref.username

```diff
-用戶名
+=> core.ref.username
```

#### [`core.admin.users.grid.invalid_column_content`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.grid.invalid_column_content%22)

> Invalid

```diff
-無效
+資料異常
```

#### [`core.admin.users.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.title%22)

> =&gt; core.ref.users

```diff
-用戶
+=> core.ref.users
```

#### [`core.admin.users.total_users`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.admin.users.total_users%22)

> Total users: {count}

```diff
-用戶數：{count}
+使用者數：{count}
```

#### [`core.api.invalid_filter_type.must_be_numeric_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.api.invalid_filter_type.must_be_numeric_message%22)

> The {filter} filter must be numeric.

```diff
-{filter} 過濾器必須是數字。
+查詢條件 {filter} 必須是數值。
```

<ins>查詢條件 </ins>{filter} <del>過濾器必須是數字。</del><ins>必須是數值。</ins>

#### [`core.api.invalid_filter_type.must_not_be_array_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.api.invalid_filter_type.must_not_be_array_message%22)

> The {filter} filter must not be an array.

```diff
-{filter} 過濾器不能是數組。
+查詢條件 {filter} 不能是陣列。
```

<ins>查詢條件 </ins>{filter} <del>過濾器不能是數組。</del><ins>不能是陣列。</ins>

#### [`core.api.invalid_filter_type.must_not_be_multidimensional_array_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.api.invalid_filter_type.must_not_be_multidimensional_array_message%22)

> The {filter} filter must not be a multidimensional array.

```diff
-{filter} 過濾器不能是多維數組。
+查詢條件 {filter} 不能是多維陣列。
```

<ins>查詢條件 </ins>{filter} <del>過濾器不能是多維數組。</del><ins>不能是多維陣列。</ins>

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
-注意：偵測到已淘汰的擴充套件
+部分擴充功能已停止維護
```

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-啟用帳號
+啟用你的新帳號
```

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-郵箱位址驗證
+確認新電子郵件地址
```

#### [`core.email.reset_password.subject`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.email.reset_password.subject%22)

> =&gt; core.ref.reset\_your\_password

```diff
-重設密碼
+=> core.ref.reset_your_password
```

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-輸入的密碼不正確。
+你輸入的密碼不正確。
```

#### [`core.forum.change_email.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.change_email.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.forum.change_password.send_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.change_password.send_button%22)

> Send Password Reset Email

```diff
-發送密碼重設郵件
+傳送重設密碼郵件
```

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-點擊下面的按鈕並檢查郵件中的連結以重設密碼。
+點擊按鈕傳送重設連結到你的電子郵件以重設密碼。
```

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-撰寫內容 ...
+說點什麼吧...
```

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-貼文尚未發佈，是否丟棄？
+討論尚未發佈，確定要捨棄嗎？
```

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-更改未儲存，是否丟棄？
+變更尚未儲存，確定要捨棄嗎？
```

#### [`core.forum.composer_edit.post_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_edit.post_link%22)

> Post #{number} in {discussion}

```diff
-發佈 #{number} 於 {discussion}
+編輯 {discussion} 的 #{number}
```

#### [`core.forum.composer_edit.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_edit.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.forum.composer_edit.view_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_edit.view_button%22)

> =&gt; core.ref.view

```diff
-查看
+=> core.ref.view
```

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-回覆尚未發佈，是否丟棄？
+回覆尚未發佈，確定要捨棄嗎？
```

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-回覆已發佈。
+回覆成功。
```

#### [`core.forum.composer_reply.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_reply.submit_button%22)

> Post Reply

```diff
-發佈
+回覆
```

#### [`core.forum.composer_reply.view_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.composer_reply.view_button%22)

> =&gt; core.ref.view

```diff
-查看
+=> core.ref.view
```

#### [`core.forum.discussion_controls.cannot_reply_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_button%22)

> Can't Reply

```diff
-無法回覆
+回覆已關閉
```

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-你沒有權限回覆此貼文。
+你沒有權限回覆。
```

#### [`core.forum.discussion_controls.delete_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.delete_button%22)

> =&gt; core.ref.delete

```diff
-刪除
+=> core.ref.delete
```

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-確定是否刪除此貼文？
+確定要永久刪除這個討論嗎？
```

#### [`core.forum.discussion_controls.delete_forever_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.delete_forever_button%22)

> =&gt; core.ref.delete\_forever

```diff
-永久刪除
+=> core.ref.delete_forever
```

#### [`core.forum.discussion_controls.reply_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.reply_button%22)

> =&gt; core.ref.reply

```diff
-回覆
+=> core.ref.reply
```

#### [`core.forum.discussion_controls.restore_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.restore_button%22)

> =&gt; core.ref.restore

```diff
-還原
+=> core.ref.restore
```

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-主題下拉選單開關
+展開或收合更多選單
```

#### [`core.forum.discussion_list.load_more_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_list.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
-載入更多
+=> core.ref.load_more
```

#### [`core.forum.discussion_list.total_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_list.total_replies_a11y_label%22)

> {count, plural, one {# reply} other {# replies}}

```diff
-{count, plural, one {# 條回覆} other {# 條回覆}}
+{count, plural, one {# 則回覆} other {# 則回覆}}
```

{count, plural, one {# <del>條回覆}</del><ins>則回覆}</ins> other {# <del>條回覆}}</del><ins>則回覆}}</ins>

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# 條未讀} other {# 條未讀}}，全部標記為已讀。
+{count, plural, one {# 則未讀} other {# 則未讀}}，全部標記為已讀。
```

{count, plural, one {# <del>條未讀}</del><ins>則未讀}</ins> other {# <del>條未讀}}，全部標記為已讀。</del><ins>則未讀}}，全部標記為已讀。</ins>

#### [`core.forum.forgot_password.email_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.forgot_password.email_placeholder%22)

> =&gt; core.ref.email

```diff
-郵箱
+=> core.ref.email
```

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-已將包含密碼重設連結的郵件發送至該郵箱，若未收到請檢查垃圾箱。
+如果你輸入的電子郵件已在本站註冊，我們會向該電子郵件傳送一封包含密碼重設連結的郵件。若一兩分鐘後仍未收到，請檢查垃圾郵件匣。
```

#### [`core.forum.forgot_password.not_found_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.forgot_password.not_found_message%22)

> There is no user registered with that email address.

```diff
-沒有使用此郵箱位址註冊的會員。
+此電子郵件未註冊。
```

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-請輸入郵箱位址，我們將發送密碼重設連結至該郵箱。
+請輸入電子郵件地址，我們會向你傳送密碼重設連結。
```

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-返回貼文列表
+返回討論列表
```

#### [`core.forum.header.locale_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.locale_dropdown_accessible_label%22)

> Change forum locale

```diff
-更改論壇語言
+切換介面語言
```

#### [`core.forum.header.log_in_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.log_in_link%22)

> =&gt; core.ref.log\_in

```diff
-登入
+=> core.ref.log_in
```

#### [`core.forum.header.log_out_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.log_out_button%22)

> =&gt; core.ref.log\_out

```diff
-登出
+=> core.ref.log_out
```

#### [`core.forum.header.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.search_placeholder%22)

> Search Forum

```diff
-搜尋
+搜尋社群
```

#### [`core.forum.header.search_role_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.search_role_label%22)

> Search Forum

```diff
-搜尋論壇
+搜尋社群
```

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-對話下拉選單開關
+展開或收合我的選項選單
```

#### [`core.forum.header.sign_up_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.header.sign_up_link%22)

> =&gt; core.ref.sign\_up

```diff
-註冊
+=> core.ref.sign_up
```

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-無法發佈貼文
+發文功能已關閉
```

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-你確定要標記所有貼文為已讀嗎？
+確定要將所有討論標記為已讀嗎？
```

#### [`core.forum.index.mark_all_as_read_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.index.mark_all_as_read_tooltip%22)

> =&gt; core.ref.mark\_all\_as\_read

```diff
-標記所有為已讀
+=> core.ref.mark_all_as_read
```

#### [`core.forum.index.meta_title_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.index.meta_title_text%22)

> =&gt; core.ref.all\_discussions

```diff
-全部主題
+=> core.ref.all_discussions
```

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-導航欄下拉選單開關
+展開或收合導覽列選單
```

#### [`core.forum.index_sort.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.index_sort.toggle_dropdown_accessible_label%22)

> Change discussion list sorting

```diff
-更改「全部主題」排序
+變更討論列表排序方式
```

#### [`core.forum.log_in.password_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.log_in.password_placeholder%22)

> =&gt; core.ref.password

```diff
-密碼
+=> core.ref.password
```

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-還沒有帳戶？ <a>立即註冊</a>
+還沒有帳號？<a>立即註冊</a>
```

#### [`core.forum.log_in.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.log_in.submit_button%22)

> =&gt; core.ref.log\_in

```diff
-登入
+=> core.ref.log_in
```

#### [`core.forum.log_in.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.log_in.title%22)

> =&gt; core.ref.log\_in

```diff
-登入
+=> core.ref.log_in
```

#### [`core.forum.notifications.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.notifications.discussion_renamed_text%22)

> {username} changed the title

```diff
-{username} 更改了主題
+{username} 變更了標題
```

{username} <del>更改了主題</del><ins>變更了標題</ins>

#### [`core.forum.notifications.mark_all_as_read_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.notifications.mark_all_as_read_tooltip%22)

> =&gt; core.ref.mark\_all\_as\_read

```diff
-標記所有為已讀
+=> core.ref.mark_all_as_read
```

#### [`core.forum.notifications.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.notifications.title%22)

> =&gt; core.ref.notifications

```diff
-通知
+=> core.ref.notifications
```

#### [`core.forum.notifications.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.notifications.toggle_dropdown_accessible_label%22)

> View notifications

```diff
-查看通知
+檢視通知
```

#### [`core.forum.notifications.tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.notifications.tooltip%22)

> =&gt; core.ref.notifications

```diff
-通知
+=> core.ref.notifications
```

#### [`core.forum.post_controls.delete_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.delete_button%22)

> =&gt; core.ref.delete

```diff
-刪除
+=> core.ref.delete
```

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-您確定要永久刪除這篇貼文嗎？這個動作將無法撤回。
+確定要永久刪除這篇文章嗎？此操作無法復原。
```

#### [`core.forum.post_controls.delete_forever_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.delete_forever_button%22)

> =&gt; core.ref.delete\_forever

```diff
-永久刪除
+=> core.ref.delete_forever
```

#### [`core.forum.post_controls.edit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.edit_button%22)

> =&gt; core.ref.edit

```diff
-編輯
+=> core.ref.edit
```

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-您確定要刪除這篇貼文嗎？
+確定要刪除這篇文章嗎？
```

#### [`core.forum.post_controls.restore_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.restore_button%22)

> =&gt; core.ref.restore

```diff
-還原
+=> core.ref.restore
```

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-貼文下拉選單開關
+展開或收合文章更多選單
```

#### [`core.forum.post_scrubber.original_post_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_scrubber.original_post_link%22)

> Original Post

```diff
-最早文章
+最早內容
```

#### [`core.forum.post_scrubber.unread_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_scrubber.unread_text%22)

> {count} unread

```diff
-{count} 未讀
+{count} 則未讀
```

{count} <del>未讀</del><ins>則未讀</ins>

#### [`core.forum.post_scrubber.viewing_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_scrubber.viewing_text%22)

> {count, plural, one {{index} of {formattedCount} post} other {{index} of {formattedCount} posts}}

```diff
-{count, plural, one {{index} / {formattedCount} 條} other {{index} / {formattedCount} 條}}
+{count, plural, one {{index} / {formattedCount} 則} other {{index} / {formattedCount} 則}}
```

{count, plural, one {{index} / {formattedCount} <del>條}</del><ins>則}</ins> other {{index} / {formattedCount} <del>條}}</del><ins>則}}</ins>

#### [`core.forum.post_stream.discussion_renamed_old_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_old_tooltip%22)

> The old title was: "{old}"

```diff
-舊主題是: 「{old}」
+原標題「{old}」
```

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} 將主題更改為 「{new}」。
+{username} 於 {time} 將標題變更為「{new}」
```

{username} <del>將主題更改為</del><ins>於</ins> <del>「{new}」。</del><ins>{time} 將標題變更為「{new}」</ins>

#### [`core.forum.post_stream.load_more_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_stream.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
-載入更多
+=> core.ref.load_more
```

#### [`core.forum.post_stream.time_lapsed_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.post_stream.time_lapsed_text%22)

> {period} later

```diff
-{period}後
+{period} 後
```

#### [`core.forum.rename_discussion.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.rename_discussion.title%22)

> Rename Discussion

```diff
-更改貼文主題
+變更討論標題
```

#### [`core.forum.security.browser_on_operating_system`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.browser_on_operating_system%22)

> {browser} on {os}

```diff
-{browser} 於 {os}
+{browser}（{os} 平台）
```

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-無法終止目前的活動會話。請直接登出。
+無法終止目前工作階段，請直接登出。
```

#### [`core.forum.security.created`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.created%22)

> Created

```diff
-已建立
+建立時間
```

#### [`core.forum.security.current_active_session`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.current_active_session%22)

> Current Active Session

```diff
-目前活動對話
+目前工作階段
```

#### [`core.forum.security.developer_tokens_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.developer_tokens_heading%22)

> Developer Tokens

```diff
-開發者令牌
+開發者權杖
```

#### [`core.forum.security.empty_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.empty_text%22)

> It looks like there is nothing to see here.

```diff
-暫無資訊。
+尚未建立權杖。
```

#### [`core.forum.security.global_logout.heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.global_logout.heading%22)

> Global Logout

```diff
-全局登出
+全域登出
```

#### [`core.forum.security.global_logout.help_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.global_logout.help_text%22)

> Clears current cookie session, terminates all sessions, revokes developer tokens, and invalidates any email confirmation or password reset emails.

```diff
-清除目前的 cookie ，終止所有對話，撤銷開發人員令牌，並使任何電子郵件確認或密碼重置電子郵件無效。
+登出目前登入並終止所有其他工作階段，同時撤銷開發者權杖，已發出的電子郵件驗證和密碼重設連結也將失效。
```

#### [`core.forum.security.hide_access_token`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.hide_access_token%22)

> Hide Token

```diff
-隱藏令牌
+隱藏權杖
```

#### [`core.forum.security.last_activity`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.last_activity%22)

> Last activity

```diff
-最後活動
+上次活動
```

#### [`core.forum.security.new_access_token_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.new_access_token_modal.submit_button%22)

> Create Token

```diff
-建立令牌
+建立權杖
```

#### [`core.forum.security.new_access_token_modal.title_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.new_access_token_modal.title_placeholder%22)

> Title

```diff
-標題
+名稱
```

#### [`core.forum.security.session_terminated`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.session_terminated%22)

> {count, plural, one {Session terminated} other {# Sessions terminated}}.

```diff
-{count, plural, one {對話終止} other {# 個對話終止}}.
+{count, plural, one {工作階段已終止} other {已終止 # 個工作階段}}。
```

{count, plural, one <del>{對話終止}</del><ins>{工作階段已終止}</ins> other <del>{#</del><ins>{已終止</ins> <del>個對話終止}}.</del><ins># 個工作階段}}。</ins>

#### [`core.forum.security.session_termination_failed`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.session_termination_failed%22)

> An error occurred while terminating your sessions.

```diff
-終止對話時出錯。
+終止工作階段時發生錯誤。
```

#### [`core.forum.security.sessions_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.sessions_heading%22)

> Active Sessions

```diff
-活動對話
+活動工作階段
```

#### [`core.forum.security.show_access_token`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.show_access_token%22)

> View Token

```diff
-查看令牌
+檢視權杖
```

#### [`core.forum.security.terminate_all_other_sessions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.terminate_all_other_sessions%22)

> Terminate all other sessions

```diff
-終止所有其它對話
+終止其他所有工作階段
```

#### [`core.forum.security.token_revoked`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.security.token_revoked%22)

> Token revoked.

```diff
-令牌已撤銷。
+權杖已撤銷。
```

#### [`core.forum.settings.account_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.account_heading%22)

> Account

```diff
-帳戶
+帳號
```

#### [`core.forum.settings.change_email_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.change_email_button%22)

> =&gt; core.ref.change\_email

```diff
-更改郵箱
+=> core.ref.change_email
```

#### [`core.forum.settings.change_password_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.change_password_button%22)

> =&gt; core.ref.change\_password

```diff
-更改密碼
+=> core.ref.change_password
```

#### [`core.forum.settings.notifications_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.notifications_heading%22)

> =&gt; core.ref.notifications

```diff
-通知
+=> core.ref.notifications
```

#### [`core.forum.settings.notify_by_email_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.notify_by_email_heading%22)

> =&gt; core.ref.email

```diff
-郵箱
+=> core.ref.email
```

#### [`core.forum.settings.notify_by_web_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.notify_by_web_heading%22)

> Web

```diff
-網頁
+站內通知
```

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-你的貼文主題被更改
+有人變更我的討論標題
```

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-公開我的在線狀態
+公開我的線上狀態
```

#### [`core.forum.settings.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.settings.title%22)

> =&gt; core.ref.settings

```diff
-設定
+=> core.ref.settings
```

#### [`core.forum.sign_up.email_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.email_placeholder%22)

> =&gt; core.ref.email

```diff
-郵箱
+=> core.ref.email
```

#### [`core.forum.sign_up.log_in_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.log_in_text%22)

> Already have an account? &lt;a&gt;Log In&lt;/a&gt;

```diff
-已有帳戶？ <a>登入</a>
+已有帳號？ <a>登入</a>
```

<del>已有帳戶？</del><ins>已有帳號？</ins> &lt;a&gt;登入&lt;/a&gt;

#### [`core.forum.sign_up.password_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.password_placeholder%22)

> =&gt; core.ref.password

```diff
-密碼
+=> core.ref.password
```

#### [`core.forum.sign_up.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.submit_button%22)

> =&gt; core.ref.sign\_up

```diff
-註冊
+=> core.ref.sign_up
```

#### [`core.forum.sign_up.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.title%22)

> =&gt; core.ref.sign\_up

```diff
-註冊
+=> core.ref.sign_up
```

#### [`core.forum.sign_up.username_placeholder`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.username_placeholder%22)

> =&gt; core.ref.username

```diff
-會員名稱
+=> core.ref.username
```

#### [`core.forum.sign_up.welcome_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.sign_up.welcome_text%22)

> Welcome, {username}!

```diff
-歡迎造訪，{username}！
+歡迎加入，{username}！
```

#### [`core.forum.user.avatar_remove_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.avatar_remove_button%22)

> =&gt; core.ref.remove

```diff
-移除
+=> core.ref.remove
```

#### [`core.forum.user.avatar_upload_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.avatar_upload_button%22)

> Upload

```diff
-上傳圖像
+上傳
```

#### [`core.forum.user.avatar_upload_tooltip`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.avatar_upload_tooltip%22)

> Upload a new avatar

```diff
-上傳新圖像
+上傳新頭像
```

#### [`core.forum.user.discussions_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.discussions_link%22)

> =&gt; core.ref.discussions

```diff
-主題
+=> core.ref.discussions
```

#### [`core.forum.user.joined_date_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.joined_date_text%22)

> Joined {ago}

```diff
-加入於 {ago}
+註冊於 {ago}
```

<del>加入於</del><ins>註冊於</ins> {ago}

#### [`core.forum.user.online_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.online_text%22)

> Online

```diff
-正在線上
+線上
```

#### [`core.forum.user.posts_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.posts_link%22)

> =&gt; core.ref.posts

```diff
-貼文
+=> core.ref.posts
```

#### [`core.forum.user.posts_load_more_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.posts_load_more_button%22)

> =&gt; core.ref.load\_more

```diff
-載入更多
+=> core.ref.load_more
```

#### [`core.forum.user.settings_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user.settings_link%22)

> =&gt; core.ref.settings

```diff
-設定
+=> core.ref.settings
```

#### [`core.forum.user_controls.delete_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_controls.delete_button%22)

> =&gt; core.ref.delete

```diff
-刪除
+=> core.ref.delete
```

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-確定要刪除此帳號？用戶的貼文將不會被刪除。
+確定要刪除此使用者？此帳號會被註銷，已發佈的文章仍會保留。
```

#### [`core.forum.user_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_controls.delete_error_message%22)

> Deletion of user &lt;i&gt;{username} ({email})&lt;/i&gt; failed

```diff
-刪除帳號 <i>{username} ({email})</i> 失敗
+刪除使用者 <i>{username} ({email})</i> 失敗
```

<del>刪除帳號</del><ins>刪除使用者</ins> &lt;i&gt;{username} ({email})&lt;/i&gt; 失敗

#### [`core.forum.user_controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_controls.delete_success_message%22)

> User &lt;i&gt;{username} ({email})&lt;/i&gt; was deleted

```diff
-帳號 <i>{username} ({email})</i> 已刪除
+已刪除使用者 <i>{username} ({email})</i>
```

<del>帳號</del><ins>已刪除使用者</ins> &lt;i&gt;{username} ({email})&lt;/i&gt;<del> 已刪除</del>

#### [`core.forum.user_controls.edit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_controls.edit_button%22)

> =&gt; core.ref.edit

```diff
-編輯
+=> core.ref.edit
```

#### [`core.forum.user_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_controls.toggle_dropdown_accessible_label%22)

> Toggle user controls dropdown menu

```diff
-用戶下拉選單開關
+展開或收合使用者操作選單
```

#### [`core.forum.user_email_confirmation.resend_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_email_confirmation.resend_button%22)

> Resend Confirmation Email

```diff
-重新發送驗證郵件
+重新傳送驗證郵件
```

#### [`core.forum.user_email_confirmation.sent_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.user_email_confirmation.sent_message%22)

> Sent

```diff
-發送
+傳送
```

#### [`core.forum.welcome_hero.hide`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.forum.welcome_hero.hide%22)

> Hide welcome message

```diff
-隱藏歡迎橫幅內容
+隱藏歡迎橫幅
```

#### [`core.group.admins`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.group.admins%22)

> Admins

```diff
-管理員
+管理組
```

#### [`core.group.member`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.group.member%22)

> Member

```diff
-會員
+註冊使用者
```

#### [`core.group.members`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.group.members%22)

> Members

```diff
-會員
+註冊使用者
```

#### [`core.group.mod`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.group.mod%22)

> Mod

```diff
-板主
+版主
```

#### [`core.group.mods`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.group.mods%22)

> Mods

```diff
-板主
+版主組
```

#### [`core.lib.data_segment.label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.data_segment.label%22)

> {label}:

```diff
-{label}:
+{label}：
```

#### [`core.lib.datetime_formats.humanTimeShort`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.datetime_formats.humanTimeShort%22)

> D MMM

```diff
-MMM D日
+M月D日
```

#### [`core.lib.datetime_formats.scrubber`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.datetime_formats.scrubber%22)

> MMMM YYYY

```diff
-YYYY年 MMM
+YYYY年M月
```

#### [`core.lib.debug_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.debug_button%22)

> Debug

```diff
-除錯
+偵錯
```

#### [`core.lib.dropdown.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.dropdown.toggle_dropdown_accessible_label%22)

> Toggle dropdown menu

```diff
-下拉選單開關
+展開或收合更多選單
```

#### [`core.lib.edit_user.activate_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.activate_button%22)

> Activate User

```diff
-啟用用戶
+啟用使用者
```

#### [`core.lib.edit_user.email_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.email_heading%22)

> =&gt; core.ref.email

```diff
-電子郵件
+=> core.ref.email
```

#### [`core.lib.edit_user.email_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.email_label%22)

> =&gt; core.ref.email

```diff
-電子郵件
+=> core.ref.email
```

#### [`core.lib.edit_user.groups_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.groups_heading%22)

> Groups

```diff
-群組
+使用者組
```

#### [`core.lib.edit_user.nothing_available`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.nothing_available%22)

> You are not allowed to edit this user.

```diff
-您無權編輯此用戶。
+你沒有權限編輯此使用者。
```

#### [`core.lib.edit_user.password_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.password_heading%22)

> =&gt; core.ref.password

```diff
-密碼
+=> core.ref.password
```

#### [`core.lib.edit_user.password_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.password_label%22)

> =&gt; core.ref.password

```diff
-密碼
+=> core.ref.password
```

#### [`core.lib.edit_user.set_password_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.set_password_label%22)

> Set new password

```diff
-修改密碼
+變更密碼
```

#### [`core.lib.edit_user.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存
+=> core.ref.save_changes
```

#### [`core.lib.edit_user.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.title%22)

> =&gt; core.ref.edit\_user

```diff
-編輯用戶
+=> core.ref.edit_user
```

#### [`core.lib.edit_user.username_heading`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.username_heading%22)

> =&gt; core.ref.username

```diff
-用戶名
+=> core.ref.username
```

#### [`core.lib.edit_user.username_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.edit_user.username_label%22)

> =&gt; core.ref.username

```diff
-用戶名
+=> core.ref.username
```

#### [`core.lib.error.circular_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.circular_dependencies_message%22)

> Circular dependencies detected: {extensions}. Aborting. Please disable one of the extensions and try again.

```diff
-檢測到循環依賴項：{extensions}。 中止。 請禁用其中一個擴充套件，然後重試。
+偵測到循環依賴關係：{extensions}，已中止操作。請停用其中一個擴充功能後重試。
```

#### [`core.lib.error.dependent_extensions_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.dependent_extensions_message%22)

> Cannot disable {extension} until the following dependent extensions are disabled: {extensions}

```diff
-無法停用「{extension}」，請先停用依賴擴充套件「{extensions}」
+無法停用「{extension}」。請先停用以下依賴它的擴充功能：{extensions}
```

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-初始化「{extension}」失敗，詳細資訊請查看瀏覽器控制台。
+初始化「{extension}」失敗，詳情請查看瀏覽器主控台。
```

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-哎呀！跨來源請求時出現問題；請重新整理頁面，然後再試一次。
+跨域請求時發生問題，請重新整理頁面重試。
```

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-糟糕，出錯啦！請重新整理頁面再試一次。
+糟糕，出錯了！請重新整理頁面重試。
```

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-無法啟用「{extension}」，請先啟用依賴擴充套件「{extensions}」
+無法啟用「{extension}」，請先啟用前置擴充功能「{extensions}」
```

#### [`core.lib.error.not_found_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.not_found_message%22)

> The requested resource was not found.

```diff
-請求的資源不存在。
+你請求的資源不存在。
```

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-沒有權限執行此操作。
+你沒有權限執行此操作。
```

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-操作太頻繁，請稍後再試。
+操作過於頻繁，請稍後再試。
```

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-抱歉，載入此內容時出錯。如果您是使用者，請稍後再試。如果您是管理員，請查看 Flarum 記錄檔以取得更多資訊。
+抱歉，載入此內容時發生錯誤，請重新整理頁面重試。管理員可查看 Flarum 日誌檔案取得更多資訊。
```

<del>抱歉，載入此內容時出錯。如果您是使用者，請稍後再試。如果您是管理員，請查看</del><ins>抱歉，載入此內容時發生錯誤，請重新整理頁面重試。管理員可查看</ins> Flarum <del>記錄檔以取得更多資訊。</del><ins>日誌檔案取得更多資訊。</ins>

#### [`core.lib.nav.drawer_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.nav.drawer_button%22)

> Open Navigation Drawer

```diff
-打開導航抽屜
+開啟導覽選單
```

#### [`core.lib.number_suffix.kilo_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.number_suffix.kilo_text%22)

> K

```diff
-K
+千
```

#### [`core.lib.number_suffix.mega_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.number_suffix.mega_text%22)

> M

```diff
-M
+百萬
```

#### [`core.lib.series.glue_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.series.glue_text%22)

> , 

```diff
-, 
+，
```

#### [`core.lib.series.three_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.series.three_text%22)

> {first}, {second}, and {third}

```diff
-{first}, {second} 以及 {third}
+{first}、{second} 和 {third}
```

<del>{first}, {second}</del><ins>{first}、{second}</ins> <del>以及</del><ins>和</ins> {third}

#### [`core.lib.series.two_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.series.two_text%22)

> {first} and {second}

```diff
-{first} 及 {second}
+{first} 和 {second}
```

{first} <del>及</del><ins>和</ins> {second}

#### [`core.ref.all_discussions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.all_discussions%22)

> All Discussions

```diff
-全部文章
+全部討論
```

#### [`core.ref.change_email`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.change_email%22)

> Change Email

```diff
-更改郵箱
+變更電子郵件
```

#### [`core.ref.change_password`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.change_password%22)

> Change Password

```diff
-更改密碼
+變更密碼
```

#### [`core.ref.confirm_email`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.confirm_email%22)

> Confirm Email

```diff
-確認郵件
+確認電子郵件
```

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-驗證郵件已發送至 {email}，若未收到請檢查垃圾郵件信箱。
+啟用郵件已寄送至 {email}，若未收到請檢查垃圾郵件匣。
```

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-新增顯示在頁面底部的 HTML 原始碼。
+新增顯示於頁面底部的 HTML 程式碼。
```

<del>新增顯示在頁面底部的</del><ins>新增顯示於頁面底部的</ins> HTML <del>原始碼。</del><ins>程式碼。</ins>

#### [`core.ref.custom_footer_title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.custom_footer_title%22)

> Edit Custom Footer

```diff
-編輯客製化頁腳
+自訂頁尾
```

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-新增要顯示在頁面頂部，位於 Flarum 預設頁首之上的 HTML 原始碼。
+新增顯示於頁面頂端、位於 Flarum 導覽列上方的 HTML 程式碼。
```

<del>新增要顯示在頁面頂部，位於</del><ins>新增顯示於頁面頂端、位於</ins> Flarum <del>預設頁首之上的</del><ins>導覽列上方的</ins> HTML <del>原始碼。</del><ins>程式碼。</ins>

#### [`core.ref.custom_header_title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.custom_header_title%22)

> Edit Custom Header

```diff
-編輯客製化頁首
+自訂頁首
```

#### [`core.ref.discussions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.discussions%22)

> Discussions

```diff
-主題
+討論
```

#### [`core.ref.edit_user`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.edit_user%22)

> Edit User

```diff
-編輯用戶
+編輯使用者
```

#### [`core.ref.extensions`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.extensions%22)

> Extensions

```diff
-擴充套件
+擴充功能
```

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-您確定要繼續嗎？ 此操作無法撤銷。
+確定要繼續嗎？此操作無法復原。
```

#### [`core.ref.never`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.never%22)

> Never

```diff
-從不
+無
```

#### [`core.ref.new_token`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.new_token%22)

> New Token

```diff
-新令牌
+建立權杖
```

#### [`core.ref.okay`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.okay%22)

> OK

```diff
-確認
+確定
```

#### [`core.ref.posts`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.posts%22)

> Posts

```diff
-貼文
+回覆
```

#### [`core.ref.save_changes`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.save_changes%22)

> Save Changes

```diff
-儲存更改
+儲存
```

#### [`core.ref.search_users`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.search_users%22)

> Search users

```diff
-搜尋用戶
+搜尋使用者
```

#### [`core.ref.security`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.security%22)

> Security

```diff
-安全性
+安全
```

#### [`core.ref.settings`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.settings%22)

> Settings

```diff
-設置
+設定
```

#### [`core.ref.start_a_discussion`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.start_a_discussion%22)

> Start a Discussion

```diff
-發表文章
+發起討論
```

#### [`core.ref.view`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.view%22)

> View

```diff
-查看
+檢視
```

#### [`core.ref.write_a_reply`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.ref.write_a_reply%22)

> Write a Reply...

```diff
-撰寫回覆...
+說點什麼吧...
```

#### [`core.views.admin.extensions.empty`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.admin.extensions.empty%22)

> No installed extensions

```diff
-尚未安裝擴充套件
+尚未安裝擴充功能
```

#### [`core.views.admin.extensions.name`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.admin.extensions.name%22)

> Extension Name

```diff
-擴充套件名稱
+擴充功能名稱
```

#### [`core.views.admin.extensions.package_name`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.admin.extensions.package_name%22)

> Package Name

```diff
-封包名稱
+套件名稱
```

#### [`core.views.admin.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.admin.title%22)

> Administration

```diff
-管理員
+管理後台
```

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-點擊下方按鈕確認您的郵箱。
+點擊下方按鈕確認你的電子郵件。
```

#### [`core.views.content.javascript_disabled_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.content.javascript_disabled_message%22)

> This site is best viewed in a modern browser with JavaScript enabled.

```diff
-請使用現代瀏覽器並啟用 JavaScript 以取得最佳瀏覽體驗。
+為獲得最佳瀏覽體驗，請使用現代瀏覽器並啟用 JavaScript。
```

#### [`core.views.content.load_error_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.content.load_error_message%22)

> Something went wrong while trying to load the full version of this site. Try hard-refreshing this page to fix the error.

```diff
-嘗試載入完整版本的論壇時出錯，請清空瀏覽器快取後再試。
+載入論壇時發生錯誤，請強制重新整理頁面重試。
```

#### [`core.views.error.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.csrf_token_mismatch%22)

> You have been inactive for too long.

```diff
-您已長時間沒有動作。
+你離開得有點久，目前工作階段已經失效。
```

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-返回並再試一下
+請返回再試一次
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
-此頁面不支持該請求方法。
+此頁面不支援該請求方式。
```

#### [`core.views.error.not_authenticated`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.not_authenticated%22)

> You do not have permission to access this page. Try again after logging in.

```diff
-您沒有權限訪問此頁面。請登入後再試。
+你沒有權限存取此頁面，請登入後再試。
```

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-頁面未找到。
+你存取的頁面不存在。
```

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-您沒有權限訪問此頁面。
+你沒有權限存取此頁面。
```

#### [`core.views.error.unknown`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.error.unknown%22)

> An error occurred while trying to load this page.

```diff
-載入頁面時出錯。
+出了點差錯，頁面暫時無法載入。
```

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-您確定要登出 {forum}？
+確定要登出 {forum} 嗎？
```

#### [`core.views.reset_password.confirm_password_label`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.reset_password.confirm_password_label%22)

> Confirm New Password

```diff
-確認密碼
+=> core.ref.confirm_password
```

#### [`core.views.reset_password.submit_button`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.reset_password.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
-儲存更改
+=> core.ref.save_changes
```

#### [`core.views.reset_password.title`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.views.reset_password.title%22)

> =&gt; core.ref.reset\_your\_password

```diff
-重設密碼
+=> core.ref.reset_your_password
```


## Missing translations

These strings are translated only in `zh_Hant`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `zh_Hant`.


### `core` (missing)

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+網路連線已恢復。
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+網路連線異常，請檢查網路後重試。
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/zh_Hant/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+目前似乎處於離線狀態，請檢查網路連線後重試。
```


### `flarum-tags` (missing)

#### [`flarum-tags.admin.tags.edit_tag_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/zh_Hant/?q=context%3A%3D%22flarum-tags.admin.tags.edit_tag_label%22)

> Edit Tag {tag}

```diff
+編輯標籤 {tag}
```

<!-- {% endraw %} -->
