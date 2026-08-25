# Persian inherited translations differences

Translations for Persian (`fa`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **7** are translated differently and **86** are
translated only in `fa`. Altogether they cover **42** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [5](#core) | 0 |
| `datitisev-backup` | 0 | [1](#datitisev-backup-missing) |
| `datlechin-birthdays` | 0 | [1](#datlechin-birthdays-missing) |
| `datlechin-copy-links` | 0 | [1](#datlechin-copy-links-missing) |
| `datlechin-passkey` | 0 | [4](#datlechin-passkey-missing) |
| `flarum-gdpr` | 0 | [2](#flarum-gdpr-missing) |
| `flarum-mentions` | [2](#flarum-mentions) | 0 |
| `fof-analytics` | 0 | [2](#fof-analytics-missing) |
| `fof-anti-spam` | 0 | [2](#fof-anti-spam-missing) |
| `fof-author-change` | 0 | [1](#fof-author-change-missing) |
| `fof-badges` | 0 | [10](#fof-badges-missing) |
| `fof-best-answer` | 0 | [1](#fof-best-answer-missing) |
| `fof-blog` | 0 | [1](#fof-blog-missing) |
| `fof-disposable-emails` | 0 | [1](#fof-disposable-emails-missing) |
| `fof-follow-tags` | 0 | [1](#fof-follow-tags-missing) |
| `fof-forum-stats-widget` | 0 | [2](#fof-forum-stats-widget-missing) |
| `fof-rich-text` | 0 | [6](#fof-rich-text-missing) |
| `fof-seo` | 0 | [2](#fof-seo-missing) |
| `fof-socialprofile` | 0 | [1](#fof-socialprofile-missing) |
| `fof-upload` | 0 | [1](#fof-upload-missing) |
| `forumaker-magicread` | 0 | [1](#forumaker-magicread-missing) |
| `huoxin-filter-rule-manager` | 0 | [1](#huoxin-filter-rule-manager-missing) |
| `huseyinfiliz-awards` | 0 | [4](#huseyinfiliz-awards-missing) |
| `huseyinfiliz-diff` | 0 | [1](#huseyinfiliz-diff-missing) |
| `huseyinfiliz-leaderboard` | 0 | [3](#huseyinfiliz-leaderboard-missing) |
| `ianm-boring-avatars` | 0 | [6](#ianm-boring-avatars-missing) |
| `ianm-follow-users` | 0 | [2](#ianm-follow-users-missing) |
| `ianm-html-head` | 0 | [2](#ianm-html-head-missing) |
| `ianm-twofactor` | 0 | [1](#ianm-twofactor-missing) |
| `justoverclock-welcomebox` | 0 | [1](#justoverclock-welcomebox-missing) |
| `quasimo-carousel-grids` | 0 | [1](#quasimo-carousel-grids-missing) |
| `quasimo-tag-sidebar` | 0 | [2](#quasimo-tag-sidebar-missing) |
| `ralkage-ad-management` | 0 | [4](#ralkage-ad-management-missing) |
| `ralkage-civility-filter` | 0 | [2](#ralkage-civility-filter-missing) |
| `ralkage-linked-accounts` | 0 | [3](#ralkage-linked-accounts-missing) |
| `ralkage-profile-messages` | 0 | [2](#ralkage-profile-messages-missing) |
| `sycho-private-facade` | 0 | [2](#sycho-private-facade-missing) |
| `tryhackx-advanced-pages` | 0 | [2](#tryhackx-advanced-pages-missing) |
| `tryhackx-magnet-link` | 0 | [2](#tryhackx-magnet-link-missing) |
| `tryhackx-topic-rating` | 0 | [1](#tryhackx-topic-rating-missing) |
| `walsgit-discussion-cards` | 0 | [1](#walsgit-discussion-cards-missing) |
| `walsgit-recycle-bin` | 0 | [2](#walsgit-recycle-bin-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `fa` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-انجمن شما در یک نگاه
+انجمن شما در یک نگاه.
```

انجمن شما در یک <del>نگاه</del><ins>نگاه.</ins>

#### [`core.admin.edit_group.icon_label`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.admin.edit_group.icon_label%22)

> =&gt; core.ref.icon

```diff
-آیکون
+=> core.ref.icon
```

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-حساب کاربری ندارید؟ <a>ثبت‌نام</a> کنید.
+حساب کاربری ندارید؟ <a>ثبت‌نام کنید</a>
```

حساب کاربری ندارید؟ <del>&lt;a&gt;ثبت‌نام&lt;/a&gt;</del><ins>&lt;a&gt;ثبت‌نام</ins> <del>کنید.</del><ins>کنید&lt;/a&gt;</ins>

#### [`core.lib.meta_titles.with_page_title`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.lib.meta_titles.with_page_title%22)

> {pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: Page # - {forumName}}}

```diff
-{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: Page # - {forumName}}}
+{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: صفحه # - {forumName}}}
```

{pageNumber, plural, =1 {{pageTitle} - {forumName}} other {{pageTitle}: <del>Page</del><ins>صفحه</ins> # - {forumName}}}

#### [`core.lib.meta_titles.without_page_title`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.lib.meta_titles.without_page_title%22)

> {pageNumber, plural, =1 {{forumName}} other {Page # - {forumName}}}

```diff
-{pageNumber, plural, =1 {{forumName}} other {Page # - {forumName}}}
+{pageNumber, plural, =1 {{forumName}} other {صفحه # - {forumName}}}
```

{pageNumber, plural, =1 {{forumName}} other <del>{Page</del><ins>{صفحه</ins> # - {forumName}}}


### `flarum-mentions`

#### [`flarum-mentions.forum.group_mention.deleted_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/fa/?q=context%3A%3D%22flarum-mentions.forum.group_mention.deleted_text%22)

> \[unknown group\]

```diff
-[unknown group]
+[گروه ناشناس]
```

#### [`flarum-mentions.forum.post_mention.deleted_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/fa/?q=context%3A%3D%22flarum-mentions.forum.post_mention.deleted_text%22)

> \[unknown\]

```diff
-[unknown]
+[ناشناخته]
```


## Missing translations

These strings are translated only in `fa`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `fa`.


### `datitisev-backup` (missing)

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.username.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/fa/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.username.label%22)

> Username

```diff
+نام کاربری
```


### `datlechin-birthdays` (missing)

#### [`datlechin-birthdays.forum.change_dob.submit_button`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/fa/?q=context%3A%3D%22datlechin-birthdays.forum.change_dob.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```


### `datlechin-copy-links` (missing)

#### [`datlechin-copy-links.forum.copy_link_button`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/fa/?q=context%3A%3D%22datlechin-copy-links.forum.copy_link_button%22)

> Copy Link

```diff
+کپی لینک
```


### `datlechin-passkey` (missing)

#### [`datlechin-passkey.forum.settings.add_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/fa/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.cancel_button%22)

> Cancel

```diff
+لغو
```

#### [`datlechin-passkey.forum.settings.rename_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/fa/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.cancel_button%22)

> Cancel

```diff
+لغو
```

#### [`datlechin-passkey.forum.settings.rename_modal.save_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/fa/?q=context%3A%3D%22datlechin-passkey.forum.settings.rename_modal.save_button%22)

> Save

```diff
+درج کردن
```

#### [`datlechin-passkey.forum.settings.revoke_modal.cancel_button`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/fa/?q=context%3A%3D%22datlechin-passkey.forum.settings.revoke_modal.cancel_button%22)

> Cancel

```diff
+لغو
```


### `flarum-gdpr` (missing)

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.no`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/fa/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.no%22)

> No

```diff
+خیر
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.yes`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/fa/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.yes%22)

> Yes

```diff
+بله
```


### `fof-analytics` (missing)

#### [`fof-analytics.admin.popup.section.googleAnalytics`](https://weblate.rob006.net/translate/flarum2/fof-analytics/fa/?q=context%3A%3D%22fof-analytics.admin.popup.section.googleAnalytics%22)

> Google Analytics

```diff
+Google Analytics
```

#### [`fof-analytics.admin.popup.section.piwik`](https://weblate.rob006.net/translate/flarum2/fof-analytics/fa/?q=context%3A%3D%22fof-analytics.admin.popup.section.piwik%22)

> Matomo

```diff
+Matomo
```


### `fof-anti-spam` (missing)

#### [`fof-anti-spam.admin.blocked_registrations.username`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fa/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.username%22)

> Username

```diff
+نام کاربری
```

#### [`fof-anti-spam.admin.settings.button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fa/?q=context%3A%3D%22fof-anti-spam.admin.settings.button%22)

> Settings

```diff
+تنظیمات
```


### `fof-author-change` (missing)

#### [`fof-author-change.forum.modal.cancel`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fa/?q=context%3A%3D%22fof-author-change.forum.modal.cancel%22)

> Cancel

```diff
+لغو
```


### `fof-badges` (missing)

#### [`fof-badges.admin.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.cancel%22)

> Cancel

```diff
+لغو
```

#### [`fof-badges.admin.edit`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.edit%22)

> Edit

```diff
+ویرایش
```

#### [`fof-badges.admin.recalculation.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel%22)

> Cancel

```diff
+لغو
```

#### [`fof-badges.admin.recalculation_jobs.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel%22)

> Cancel

```diff
+لغو
```

#### [`fof-badges.admin.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.save%22)

> Save

```diff
+درج کردن
```

#### [`fof-badges.admin.settings.primary_badge_icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon%22)

> Icon only

```diff
+فقط نماد
```

#### [`fof-badges.admin.settings.primary_badge_icon_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon_name%22)

> Icon and name

```diff
+نماد و نام
```

#### [`fof-badges.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.tabs.categories%22)

> Categories

```diff
+دسته‌بندی‌ها
```

#### [`fof-badges.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.tabs.settings%22)

> Settings

```diff
+تنظیمات
```

#### [`fof-badges.forum.user.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.forum.user.cancel%22)

> Cancel

```diff
+لغو
```


### `fof-best-answer` (missing)

#### [`fof-best-answer.admin.settings.documentation`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fa/?q=context%3A%3D%22fof-best-answer.admin.settings.documentation%22)

> Documentation

```diff
+مدارک
```


### `fof-blog` (missing)

#### [`fof-blog.admin.blog`](https://weblate.rob006.net/translate/flarum2/fof-blog/fa/?q=context%3A%3D%22fof-blog.admin.blog%22)

> Blog

```diff
+وبلاگ
```


### `fof-disposable-emails` (missing)

#### [`fof-email-checker.error.disposable_email_message`](https://weblate.rob006.net/translate/flarum2/fof-disposable-emails/fa/?q=context%3A%3D%22fof-email-checker.error.disposable_email_message%22)

> You may not use a disposable email.

```diff
+شما مجاز به استفاده از ایمیل یک‌بارمصرف نیستید.
```


### `fof-follow-tags` (missing)

#### [`fof-follow-tags.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fa/?q=context%3A%3D%22fof-follow-tags.forum.hero.title%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```


### `fof-forum-stats-widget` (missing)

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/fa/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
+نوشته‌ها
```

#### [`fof-forum-stats-widget.forum.widget.stats.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/fa/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.discussion_count%22)

> Discussions

```diff
+مباحث
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.lib.composer.insert_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fa/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_button%22)

> Insert

```diff
+درج
```

#### [`fof-rich-text.lib.composer.insert_image.src_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fa/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.src_placeholder%22)

> Link

```diff
+لینک
```

#### [`fof-rich-text.lib.composer.insert_image.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fa/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.title_placeholder%22)

> Title

```diff
+عنوان
```

#### [`fof-rich-text.lib.composer.insert_link.href_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fa/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.href_placeholder%22)

> URL

```diff
+آدرس اینترنتی
```

#### [`fof-rich-text.lib.composer.insert_link.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fa/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.remove_button%22)

> Remove

```diff
+حذف
```

#### [`fof-rich-text.lib.composer.insert_link.text_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fa/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.text_placeholder%22)

> Text

```diff
+متن
```


### `fof-seo` (missing)

#### [`fof-seo.admin.common.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-seo/fa/?q=context%3A%3D%22fof-seo.admin.common.save_changes%22)

> Save changes

```diff
+ذخیره تغییرات
```

#### [`fof-seo.forum.meta_seo.close.save`](https://weblate.rob006.net/translate/flarum2/fof-seo/fa/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save%22)

> Save

```diff
+درج کردن
```


### `fof-socialprofile` (missing)

#### [`fof-socialprofile.forum.edit.submit`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/fa/?q=context%3A%3D%22fof-socialprofile.forum.edit.submit%22)

> Save

```diff
+درج کردن
```


### `fof-upload` (missing)

#### [`fof-upload.forum.buttons.cancel`](https://weblate.rob006.net/translate/flarum2/fof-upload/fa/?q=context%3A%3D%22fof-upload.forum.buttons.cancel%22)

> Cancel

```diff
+لغو
```


### `forumaker-magicread` (missing)

#### [`forumaker-magicread.admin.settings.section_main`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fa/?q=context%3A%3D%22forumaker-magicread.admin.settings.section_main%22)

> Settings

```diff
+تنظیمات
```


### `huoxin-filter-rule-manager` (missing)

#### [`huoxin-filter-rule-manager.admin.cancel`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/fa/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.cancel%22)

> Cancel

```diff
+لغو
```


### `huseyinfiliz-awards` (missing)

#### [`huseyinfiliz-awards.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fa/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.title%22)

> Settings

```diff
+تنظیمات
```

#### [`huseyinfiliz-awards.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fa/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.settings%22)

> Settings

```diff
+تنظیمات
```

#### [`huseyinfiliz-awards.forum.other.cancel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fa/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.cancel%22)

> Cancel

```diff
+لغو
```

#### [`huseyinfiliz-awards.lib.save`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fa/?q=context%3A%3D%22huseyinfiliz-awards.lib.save%22)

> Save Changes

```diff
+ذخیره تغییرات
```


### `huseyinfiliz-diff` (missing)

#### [`huseyinfiliz-diff.forum.optionsButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/fa/?q=context%3A%3D%22huseyinfiliz-diff.forum.optionsButton%22)

> Options

```diff
+گزینه‌ها
```


### `huseyinfiliz-leaderboard` (missing)

#### [`huseyinfiliz-leaderboard.admin.modals.cancel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/fa/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.cancel%22)

> Cancel

```diff
+لغو
```

#### [`huseyinfiliz-leaderboard.admin.modals.save`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/fa/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.save%22)

> Save

```diff
+درج کردن
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_discussions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/fa/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_discussions%22)

> Discussions

```diff
+مباحث
```


### `ianm-boring-avatars` (missing)

#### [`ianm-boring-avatars.admin.settings.color1`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/fa/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color1%22)

> Color 1

```diff
+رنگ ۱
```

#### [`ianm-boring-avatars.admin.settings.color2`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/fa/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color2%22)

> Color 2

```diff
+رنگ ۲
```

#### [`ianm-boring-avatars.admin.settings.color3`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/fa/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color3%22)

> Color 3

```diff
+رنگ ۳
```

#### [`ianm-boring-avatars.admin.settings.color4`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/fa/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color4%22)

> Color 4

```diff
+رنگ ۴
```

#### [`ianm-boring-avatars.admin.settings.color5`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/fa/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.color5%22)

> Color 5

```diff
+رنگ ۵
```

#### [`ianm-boring-avatars.admin.settings.identifier_email`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/fa/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.identifier_email%22)

> Email

```diff
+ایمیل
```


### `ianm-follow-users` (missing)

#### [`ianm-follow-users.forum.modals.select_follow_level.cancel_btn`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/fa/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.cancel_btn%22)

> Cancel

```diff
+لغو
```

#### [`ianm-follow-users.forum.modals.select_follow_level.save_btn`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/fa/?q=context%3A%3D%22ianm-follow-users.forum.modals.select_follow_level.save_btn%22)

> Save

```diff
+درج کردن
```


### `ianm-html-head` (missing)

#### [`ianm-html-head.admin.modal.save_button`](https://weblate.rob006.net/translate/flarum2/ianm-html-head/fa/?q=context%3A%3D%22ianm-html-head.admin.modal.save_button%22)

> Save

```diff
+درج کردن
```

#### [`ianm-html-head.admin.table.edit_button`](https://weblate.rob006.net/translate/flarum2/ianm-html-head/fa/?q=context%3A%3D%22ianm-html-head.admin.table.edit_button%22)

> Edit

```diff
+ویرایش
```


### `ianm-twofactor` (missing)

#### [`ianm-twofactor.forum.security.cancel_button`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/fa/?q=context%3A%3D%22ianm-twofactor.forum.security.cancel_button%22)

> Cancel

```diff
+لغو
```


### `justoverclock-welcomebox` (missing)

#### [`flarum-ext-welcomebox.forum.SettingsLink`](https://weblate.rob006.net/translate/flarum2/justoverclock-welcomebox/fa/?q=context%3A%3D%22flarum-ext-welcomebox.forum.SettingsLink%22)

> Settings

```diff
+تنظیمات
```


### `quasimo-carousel-grids` (missing)

#### [`carousel-grids.admin.save_button`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/fa/?q=context%3A%3D%22carousel-grids.admin.save_button%22)

> Save

```diff
+درج کردن
```


### `quasimo-tag-sidebar` (missing)

#### [`quasimo-tag-sidebar.forum.cancel_button`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/fa/?q=context%3A%3D%22quasimo-tag-sidebar.forum.cancel_button%22)

> Cancel

```diff
+لغو
```

#### [`quasimo-tag-sidebar.forum.save_button`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/fa/?q=context%3A%3D%22quasimo-tag-sidebar.forum.save_button%22)

> Save

```diff
+درج کردن
```


### `ralkage-ad-management` (missing)

#### [`ralkage-ad-management.admin.cancel`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/fa/?q=context%3A%3D%22ralkage-ad-management.admin.cancel%22)

> Cancel

```diff
+لغو
```

#### [`ralkage-ad-management.admin.save`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/fa/?q=context%3A%3D%22ralkage-ad-management.admin.save%22)

> Save

```diff
+درج کردن
```

#### [`ralkage-ad-management.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/fa/?q=context%3A%3D%22ralkage-ad-management.admin.tabs.settings%22)

> Settings

```diff
+تنظیمات
```

#### [`ralkage-ad-management.forum.page.cancel`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/fa/?q=context%3A%3D%22ralkage-ad-management.forum.page.cancel%22)

> Cancel

```diff
+لغو
```


### `ralkage-civility-filter` (missing)

#### [`ralkage-civility-filter.admin.log.discussion`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/fa/?q=context%3A%3D%22ralkage-civility-filter.admin.log.discussion%22)

> Discussion

```diff
+بحث
```

#### [`ralkage-civility-filter.admin.log.username`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/fa/?q=context%3A%3D%22ralkage-civility-filter.admin.log.username%22)

> Username

```diff
+نام کاربری
```


### `ralkage-linked-accounts` (missing)

#### [`ralkage-linked-accounts.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/fa/?q=context%3A%3D%22ralkage-linked-accounts.admin.tabs.settings%22)

> Settings

```diff
+تنظیمات
```

#### [`ralkage-linked-accounts.forum.page.email`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/fa/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.email%22)

> Email

```diff
+ایمیل
```

#### [`ralkage-linked-accounts.forum.page.username`](https://weblate.rob006.net/translate/flarum2/ralkage-linked-accounts/fa/?q=context%3A%3D%22ralkage-linked-accounts.forum.page.username%22)

> Username

```diff
+نام کاربری
```


### `ralkage-profile-messages` (missing)

#### [`ralkage-profile-messages.forum.composer.save_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/fa/?q=context%3A%3D%22ralkage-profile-messages.forum.composer.save_button%22)

> Save Changes

```diff
+ذخیره تغییرات
```

#### [`ralkage-profile-messages.forum.message.edit_button`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/fa/?q=context%3A%3D%22ralkage-profile-messages.forum.message.edit_button%22)

> Edit

```diff
+ویرایش
```


### `sycho-private-facade` (missing)

#### [`sycho-private-facade.forum.log_in_label`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/fa/?q=context%3A%3D%22sycho-private-facade.forum.log_in_label%22)

> =&gt; core.ref.log\_in

```diff
+=> core.ref.log_in
```

#### [`sycho-private-facade.forum.sign_up_label`](https://weblate.rob006.net/translate/flarum2/sycho-private-facade/fa/?q=context%3A%3D%22sycho-private-facade.forum.sign_up_label%22)

> =&gt; core.ref.sign\_up

```diff
+=> core.ref.sign_up
```


### `tryhackx-advanced-pages` (missing)

#### [`tryhackx-advanced-pages.admin.edit_page.cancel_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/fa/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.cancel_button%22)

> Cancel

```diff
+لغو
```

#### [`tryhackx-advanced-pages.admin.pages.edit_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/fa/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.edit_button%22)

> Edit

```diff
+ویرایش
```


### `tryhackx-magnet-link` (missing)

#### [`tryhackx-magnet-link.forum.rename.cancel`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/fa/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.cancel%22)

> Cancel

```diff
+لغو
```

#### [`tryhackx-magnet-link.forum.rename.save`](https://weblate.rob006.net/translate/flarum2/tryhackx-magnet-link/fa/?q=context%3A%3D%22tryhackx-magnet-link.forum.rename.save%22)

> Save

```diff
+درج کردن
```


### `tryhackx-topic-rating` (missing)

#### [`tryhackx-topic-rating.forum.reset_modal.cancel`](https://weblate.rob006.net/translate/flarum2/tryhackx-topic-rating/fa/?q=context%3A%3D%22tryhackx-topic-rating.forum.reset_modal.cancel%22)

> Cancel

```diff
+لغو
```


### `walsgit-discussion-cards` (missing)

#### [`walsgit_discussion_cards.admin.tag_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/fa/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.submit_button%22)

> Save

```diff
+درج کردن
```


### `walsgit-recycle-bin` (missing)

#### [`walsgit-recycle-bin.admin.discussion_id`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/fa/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_id%22)

> ID

```diff
+شناسه
```

#### [`walsgit-recycle-bin.admin.post.id`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/fa/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.id%22)

> ID

```diff
+شناسه
```

<!-- {% endraw %} -->
