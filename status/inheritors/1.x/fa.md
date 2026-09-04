# Persian inherited translations differences

Translations for Persian (`fa`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **9** are translated differently and **175** are
translated only in `fa`. Altogether they cover **62** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [6](#core) | [3](#core-missing) |
| `datitisev-backup` | 0 | [3](#datitisev-backup-missing) |
| `datlechin-birthdays` | 0 | [1](#datlechin-birthdays-missing) |
| `datlechin-copy-links` | 0 | [2](#datlechin-copy-links-missing) |
| `datlechin-passkey` | 0 | [4](#datlechin-passkey-missing) |
| `datlechin-signup-button` | 0 | [1](#datlechin-signup-button-missing) |
| `flarum-audit` | 0 | [2](#flarum-audit-missing) |
| `flarum-gdpr` | 0 | [2](#flarum-gdpr-missing) |
| `flarum-mentions` | [2](#flarum-mentions) | 0 |
| `flarum-tags` | [1](#flarum-tags) | 0 |
| `fof-analytics` | 0 | [2](#fof-analytics-missing) |
| `fof-anti-spam` | 0 | [2](#fof-anti-spam-missing) |
| `fof-author-change` | 0 | [1](#fof-author-change-missing) |
| `fof-badges` | 0 | [20](#fof-badges-missing) |
| `fof-best-answer` | 0 | [1](#fof-best-answer-missing) |
| `fof-blog` | 0 | [3](#fof-blog-missing) |
| `fof-discussion-thumbnail` | 0 | [1](#fof-discussion-thumbnail-missing) |
| `fof-disposable-emails` | 0 | [1](#fof-disposable-emails-missing) |
| `fof-follow-tags` | 0 | [1](#fof-follow-tags-missing) |
| `fof-forum-stats-widget` | 0 | [2](#fof-forum-stats-widget-missing) |
| `fof-html-errors` | 0 | [5](#fof-html-errors-missing) |
| `fof-linguist` | 0 | [2](#fof-linguist-missing) |
| `fof-mailing` | 0 | [1](#fof-mailing-missing) |
| `fof-moderator-notes` | 0 | [1](#fof-moderator-notes-missing) |
| `fof-news-widget` | 0 | [3](#fof-news-widget-missing) |
| `fof-oauth` | 0 | [1](#fof-oauth-missing) |
| `fof-online-users-widget` | 0 | [3](#fof-online-users-widget-missing) |
| `fof-pages` | 0 | [1](#fof-pages-missing) |
| `fof-rich-text` | 0 | [6](#fof-rich-text-missing) |
| `fof-seo` | 0 | [2](#fof-seo-missing) |
| `fof-socialprofile` | 0 | [2](#fof-socialprofile-missing) |
| `fof-upload` | 0 | [1](#fof-upload-missing) |
| `fof-user-directory` | 0 | [4](#fof-user-directory-missing) |
| `fof-webhooks` | 0 | [2](#fof-webhooks-missing) |
| `forumaker-magicread` | 0 | [2](#forumaker-magicread-missing) |
| `forumfortress-flarum` | 0 | [1](#forumfortress-flarum-missing) |
| `huoxin-filter-rule-manager` | 0 | [1](#huoxin-filter-rule-manager-missing) |
| `huseyinfiliz-awards` | 0 | [5](#huseyinfiliz-awards-missing) |
| `huseyinfiliz-diff` | 0 | [1](#huseyinfiliz-diff-missing) |
| `huseyinfiliz-leaderboard` | 0 | [3](#huseyinfiliz-leaderboard-missing) |
| `huseyinfiliz-notificationhub` | 0 | [1](#huseyinfiliz-notificationhub-missing) |
| `ianm-boring-avatars` | 0 | [6](#ianm-boring-avatars-missing) |
| `ianm-follow-users` | 0 | [2](#ianm-follow-users-missing) |
| `ianm-html-head` | 0 | [3](#ianm-html-head-missing) |
| `ianm-oauth-reddit` | 0 | [1](#ianm-oauth-reddit-missing) |
| `ianm-twofactor` | 0 | [1](#ianm-twofactor-missing) |
| `justoverclock-welcomebox` | 0 | [1](#justoverclock-welcomebox-missing) |
| `pianotell-flamoji` | 0 | [33](#pianotell-flamoji-missing) |
| `quasimo-carousel-grids` | 0 | [1](#quasimo-carousel-grids-missing) |
| `quasimo-tag-sidebar` | 0 | [2](#quasimo-tag-sidebar-missing) |
| `ralkage-ad-management` | 0 | [5](#ralkage-ad-management-missing) |
| `ralkage-civility-filter` | 0 | [2](#ralkage-civility-filter-missing) |
| `ralkage-linked-accounts` | 0 | [3](#ralkage-linked-accounts-missing) |
| `ralkage-profile-messages` | 0 | [2](#ralkage-profile-messages-missing) |
| `shebaoting-dependency-collector` | 0 | [2](#shebaoting-dependency-collector-missing) |
| `sycho-advanced-extension-categories` | 0 | [1](#sycho-advanced-extension-categories-missing) |
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

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-ثبت‌ نام
+ثبت‌نام
```


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


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.slug_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/fa/?q=context%3A%3D%22flarum-tags.admin.edit_tag.slug_label%22)

> Slug

```diff
-Slug
+اسلاگ
```


## Missing translations

These strings are translated only in `fa`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `fa`.


### `core` (missing)

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+بیشتر بخوانید
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+دوباره تلاش کنید
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum2/core/fa/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+منسوخ
```


### `datitisev-backup` (missing)

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.username.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/fa/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.username.label%22)

> Username

```diff
+نام کاربری
```

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/fa/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.client-id.label%22)

> Client ID

```diff
+شناسه مشتری
```

#### [`datitisev-backup.admin.delete_button`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/fa/?q=context%3A%3D%22datitisev-backup.admin.delete_button%22)

> Delete

```diff
+حذف
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

#### [`datlechin-copy-links.forum.link_copied_message`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/fa/?q=context%3A%3D%22datlechin-copy-links.forum.link_copied_message%22)

> Link copied to clipboard!

```diff
+لینک به کلیپ‌بورد کپی شد!
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


### `datlechin-signup-button` (missing)

#### [`datlechin-signup-button.forum.sign_up`](https://weblate.rob006.net/translate/flarum2/datlechin-signup-button/fa/?q=context%3A%3D%22datlechin-signup-button.forum.sign_up%22)

> Sign Up

```diff
+ثبت‌نام
```


### `flarum-audit` (missing)

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fa/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+اعمال
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fa/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+تازه کردن
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

#### [`fof-badges.admin.badge_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.badge_name%22)

> Name

```diff
+نام
```

#### [`fof-badges.admin.badge_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.badge_slug%22)

> Slug

```diff
+اسلاگ
```

#### [`fof-badges.admin.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.cancel%22)

> Cancel

```diff
+لغو
```

#### [`fof-badges.admin.category_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.category_name%22)

> Name

```diff
+نام
```

#### [`fof-badges.admin.category_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.category_slug%22)

> Slug

```diff
+اسلاگ
```

#### [`fof-badges.admin.delete`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.delete%22)

> Delete

```diff
+حذف
```

#### [`fof-badges.admin.edit`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.edit%22)

> Edit

```diff
+ویرایش
```

#### [`fof-badges.admin.headers.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.headers.name%22)

> Name

```diff
+نام
```

#### [`fof-badges.admin.next`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.next%22)

> Next

```diff
+بعدی
```

#### [`fof-badges.admin.previous`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.previous%22)

> Previous

```diff
+قبلی
```

#### [`fof-badges.admin.recalculate_tab.default`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.default%22)

> default

```diff
+پیش‌فرض
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

#### [`fof-badges.forum.new_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/fa/?q=context%3A%3D%22fof-badges.forum.new_tag%22)

> NEW

```diff
+جدید
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

#### [`fof-blog.forum.article.slug`](https://weblate.rob006.net/translate/flarum2/fof-blog/fa/?q=context%3A%3D%22fof-blog.forum.article.slug%22)

> Slug

```diff
+اسلاگ
```

#### [`fof-blog.forum.read_more`](https://weblate.rob006.net/translate/flarum2/fof-blog/fa/?q=context%3A%3D%22fof-blog.forum.read_more%22)

> Read more

```diff
+بیشتر بخوانید
```


### `fof-discussion-thumbnail` (missing)

#### [`fof-discussion-thumbnail.admin.settings.link_to_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-thumbnail/fa/?q=context%3A%3D%22fof-discussion-thumbnail.admin.settings.link_to_discussion_label%22)

> Make discussion thumbnails link to discussion and not user

```diff
+تصاویر بندانگشتی بحث را به خود بحث لینک دهید، نه به کاربر
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


### `fof-html-errors` (missing)

#### [`fof-html-errors.admin.settings.error.403`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/fa/?q=context%3A%3D%22fof-html-errors.admin.settings.error.403%22)

> 403 Forbidden

```diff
+۴۰۳ دسترسی ممنوع
```

#### [`fof-html-errors.admin.settings.error.404`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/fa/?q=context%3A%3D%22fof-html-errors.admin.settings.error.404%22)

> 404 Not Found

```diff
+۴۰۴ یافت نشد
```

#### [`fof-html-errors.admin.settings.error.500`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/fa/?q=context%3A%3D%22fof-html-errors.admin.settings.error.500%22)

> 500 Internal Server Error

```diff
+۵۰۰ خطای داخلی سرور
```

#### [`fof-html-errors.admin.settings.error.503`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/fa/?q=context%3A%3D%22fof-html-errors.admin.settings.error.503%22)

> 503 Service Unavailable (Down For Maintenance)

```diff
+۵۰۳ سرویس در دسترس نیست (برای نگهداری از کار افتاده)
```

#### [`fof-html-errors.admin.settings.placeholder.empty_for_default`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/fa/?q=context%3A%3D%22fof-html-errors.admin.settings.placeholder.empty_for_default%22)

> Leave empty for the default Flarum error page

```diff
+برای صفحهٔ خطای پیش‌فرض Flarum خالی بگذارید
```


### `fof-linguist` (missing)

#### [`fof-linguist.admin.buttons.apply`](https://weblate.rob006.net/translate/flarum2/fof-linguist/fa/?q=context%3A%3D%22fof-linguist.admin.buttons.apply%22)

> Apply

```diff
+اعمال
```

#### [`fof-linguist.admin.tabs.strings`](https://weblate.rob006.net/translate/flarum2/fof-linguist/fa/?q=context%3A%3D%22fof-linguist.admin.tabs.strings%22)

> Translations

```diff
+ترجمه‌ها
```


### `fof-mailing` (missing)

#### [`fof-mailing.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fa/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.group%22)

> Group

```diff
+گروه
```


### `fof-moderator-notes` (missing)

#### [`fof-moderator-notes.forum.moderatorNotes.delete`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/fa/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.delete%22)

> Delete

```diff
+حذف
```


### `fof-news-widget` (missing)

#### [`fof-news-widget.admin.settings.add_line`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/fa/?q=context%3A%3D%22fof-news-widget.admin.settings.add_line%22)

> Add News Line

```diff
+افزودن خط خبر
```

#### [`fof-news-widget.admin.settings.html_warning`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/fa/?q=context%3A%3D%22fof-news-widget.admin.settings.html_warning%22)

> Please be careful, any HTML will be rendered.

```diff
+لطفاً مراقب باشید، هر HTML رندر خواهد شد.
```

#### [`fof-news-widget.admin.settings.lines`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/fa/?q=context%3A%3D%22fof-news-widget.admin.settings.lines%22)

> News Lines

```diff
+خبرگزاری‌ها
```


### `fof-oauth` (missing)

#### [`fof-oauth.ref.settings.client_id`](https://weblate.rob006.net/translate/flarum2/fof-oauth/fa/?q=context%3A%3D%22fof-oauth.ref.settings.client_id%22)

> Client ID

```diff
+شناسه مشتری
```


### `fof-online-users-widget` (missing)

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fa/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
+ویجت مشاهده کاربران آنلاین
```

#### [`fof-online-users-widget.forum.widget.empty`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fa/?q=context%3A%3D%22fof-online-users-widget.forum.widget.empty%22)

> No Users Currently Online.

```diff
+در حال حاضر هیچ کاربری آنلاین نیست.
```

#### [`fof-online-users-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fa/?q=context%3A%3D%22fof-online-users-widget.forum.widget.title%22)

> Online Users

```diff
+کاربران آنلاین
```


### `fof-pages` (missing)

#### [`fof-pages.ref.slug`](https://weblate.rob006.net/translate/flarum2/fof-pages/fa/?q=context%3A%3D%22fof-pages.ref.slug%22)

> Slug

```diff
+اسلاگ
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

#### [`fof-socialprofile.forum.edit.delete`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/fa/?q=context%3A%3D%22fof-socialprofile.forum.edit.delete%22)

> Delete

```diff
+حذف
```

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


### `fof-user-directory` (missing)

#### [`fof-user-directory.admin.settings.default-sort`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/fa/?q=context%3A%3D%22fof-user-directory.admin.settings.default-sort%22)

> Default sort

```diff
+سورت پیش‌فرض
```

#### [`fof-user-directory.forum.search.kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/fa/?q=context%3A%3D%22fof-user-directory.forum.search.kinds.group%22)

> Group

```diff
+گروه
```

#### [`fof-user-directory.lib.sort.default`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/fa/?q=context%3A%3D%22fof-user-directory.lib.sort.default%22)

> Default

```diff
+پیش‌فرض
```

#### [`fof-user-directory.lib.sort.not_specified`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/fa/?q=context%3A%3D%22fof-user-directory.lib.sort.not_specified%22)

> Use Flarum default

```diff
+از پیش‌فرض Flarum استفاده کنید
```


### `fof-webhooks` (missing)

#### [`fof-webhooks.admin.settings.modal.group_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/fa/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.group_label%22)

> Group

```diff
+گروه
```

#### [`fof-webhooks.admin.settings.modal.name_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/fa/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.name_label%22)

> Name

```diff
+نام
```


### `forumaker-magicread` (missing)

#### [`forumaker-magicread.admin.settings.section_main`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fa/?q=context%3A%3D%22forumaker-magicread.admin.settings.section_main%22)

> Settings

```diff
+تنظیمات
```

#### [`forumaker-magicread.forum.read_more`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fa/?q=context%3A%3D%22forumaker-magicread.forum.read_more%22)

> Read more

```diff
+بیشتر بخوانید
```


### `forumfortress-flarum` (missing)

#### [`forumfortress-flarum.admin.dashboard.refresh`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/fa/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.refresh%22)

> Refresh

```diff
+تازه کردن
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

#### [`huseyinfiliz-awards.lib.slug`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fa/?q=context%3A%3D%22huseyinfiliz-awards.lib.slug%22)

> Slug

```diff
+اسلاگ
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


### `huseyinfiliz-notificationhub` (missing)

#### [`huseyinfiliz-notificationhub.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fa/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.recipient_kinds.group%22)

> Group

```diff
+گروه
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

#### [`ianm-html-head.admin.table.delete_button`](https://weblate.rob006.net/translate/flarum2/ianm-html-head/fa/?q=context%3A%3D%22ianm-html-head.admin.table.delete_button%22)

> Delete

```diff
+حذف
```

#### [`ianm-html-head.admin.table.edit_button`](https://weblate.rob006.net/translate/flarum2/ianm-html-head/fa/?q=context%3A%3D%22ianm-html-head.admin.table.edit_button%22)

> Edit

```diff
+ویرایش
```


### `ianm-oauth-reddit` (missing)

#### [`fof-oauth.admin.settings.providers.reddit.client_id_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/fa/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_id_label%22)

> Client ID

```diff
+شناسه مشتری
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


### `pianotell-flamoji` (missing)

#### [`pianotell-flamoji.admin.settings.category_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.category_settings_heading%22)

> Category Settings

```diff
+تنظیمات دسته‌بندی
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
+تنظیمات ایموجی
```

#### [`pianotell-flamoji.admin.settings.picker_set_twemoji`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_twemoji%22)

> Twemoji

```diff
+Twemoji
```

#### [`pianotell-flamoji.forum.composer.emoji_tooltip`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.composer.emoji_tooltip%22)

> Insert emoji

```diff
+درج اموجی
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.custom%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.custom

```diff
+=> pianotell-flamoji.ref.emoji_categories.custom
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.frequent%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.frequent

```diff
+=> pianotell-flamoji.ref.emoji_categories.frequent
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_default`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_default%22)

> Default

```diff
+پیش‌فرض
```

#### [`pianotell-flamoji.ref.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.activity%22)

> Activities

```diff
+فعالیت‌ها
```

#### [`pianotell-flamoji.ref.emoji_categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.custom%22)

> Custom

```diff
+سفارشی
```

#### [`pianotell-flamoji.ref.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.flags%22)

> Flags

```diff
+پرچم‌ها
```

#### [`pianotell-flamoji.ref.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.foods%22)

> Food &amp; Drink

```diff
+خوراک و نوشیدنی
```

#### [`pianotell-flamoji.ref.emoji_categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.frequent%22)

> Frequently Used

```diff
+استفاده‌ی مکرر
```

#### [`pianotell-flamoji.ref.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.nature%22)

> Animals &amp; Nature

```diff
+حیوانات و طبیعت
```

#### [`pianotell-flamoji.ref.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.objects%22)

> Objects

```diff
+اشیا
```

#### [`pianotell-flamoji.ref.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.people%22)

> Smileys &amp; People

```diff
+اسمایل‌ها و مردم
```

#### [`pianotell-flamoji.ref.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.places%22)

> Travel &amp; Places

```diff
+مسافرت و مکان‌ها
```

#### [`pianotell-flamoji.ref.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fa/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.symbols%22)

> Symbols

```diff
+نمادها
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

#### [`ralkage-ad-management.admin.zones.default_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/fa/?q=context%3A%3D%22ralkage-ad-management.admin.zones.default_badge%22)

> Default

```diff
+پیش‌فرض
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


### `shebaoting-dependency-collector` (missing)

#### [`shebaoting-dependency-collector.admin.modal.tag_slug_label`](https://weblate.rob006.net/translate/flarum2/shebaoting-dependency-collector/fa/?q=context%3A%3D%22shebaoting-dependency-collector.admin.modal.tag_slug_label%22)

> Slug

```diff
+اسلاگ
```

#### [`shebaoting-dependency-collector.admin.table.tag_slug`](https://weblate.rob006.net/translate/flarum2/shebaoting-dependency-collector/fa/?q=context%3A%3D%22shebaoting-dependency-collector.admin.table.tag_slug%22)

> Slug

```diff
+اسلاگ
```


### `sycho-advanced-extension-categories` (missing)

#### [`sycho-ace.admin.category_selection.options.default`](https://weblate.rob006.net/translate/flarum2/sycho-advanced-extension-categories/fa/?q=context%3A%3D%22sycho-ace.admin.category_selection.options.default%22)

> Default

```diff
+پیش‌فرض
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
