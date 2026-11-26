# Estonian inherited translations differences

Translations for Estonian (`et`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **120** are
translated only in `et`. Altogether they cover **24** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `el-choco-admin-console` | 0 | [1](#el-choco-admin-console-missing) |
| `ffans-threadmarks` | 0 | [19](#ffans-threadmarks-missing) |
| `fof-badges` | 0 | [1](#fof-badges-missing) |
| `fof-follow-tags` | 0 | [7](#fof-follow-tags-missing) |
| `fof-mailing` | 0 | [2](#fof-mailing-missing) |
| `fof-move-posts` | 0 | [4](#fof-move-posts-missing) |
| `fof-rich-text` | 0 | [4](#fof-rich-text-missing) |
| `fof-sentry` | 0 | [1](#fof-sentry-missing) |
| `fof-upgrade-advisor` | 0 | [37](#fof-upgrade-advisor-missing) |
| `huoxin-money-with-history` | 0 | [1](#huoxin-money-with-history-missing) |
| `huseyinfiliz-diff` | 0 | [12](#huseyinfiliz-diff-missing) |
| `huseyinfiliz-sticky-title` | 0 | [1](#huseyinfiliz-sticky-title-missing) |
| `michaelbelgium-ai-autoreply` | 0 | [1](#michaelbelgium-ai-autoreply-missing) |
| `pianotell-flamoji` | 0 | [22](#pianotell-flamoji-missing) |
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


### `ffans-threadmarks` (missing)

#### [`ffans-threadmarks.admin.edit_type_modal.delete_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.delete_button%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`ffans-threadmarks.admin.edit_type_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.submit_button%22)

> =&gt; ffans-threadmarks.ref.save

```diff
+=> ffans-threadmarks.ref.save
```

#### [`ffans-threadmarks.admin.types.key_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.admin.types.key_heading%22)

> =&gt; ffans-threadmarks.ref.key

```diff
+=> ffans-threadmarks.ref.key
```

#### [`ffans-threadmarks.admin.types.type_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.admin.types.type_heading%22)

> =&gt; ffans-threadmarks.ref.type

```diff
+=> ffans-threadmarks.ref.type
```

#### [`ffans-threadmarks.forum.directory.discussion_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.directory.discussion_filter%22)

> =&gt; ffans-threadmarks.ref.discussion

```diff
+=> ffans-threadmarks.ref.discussion
```

#### [`ffans-threadmarks.forum.directory.hide_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.directory.hide_button%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.directory.personal_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.directory.personal_filter%22)

> =&gt; ffans-threadmarks.ref.mine

```diff
+=> ffans-threadmarks.ref.mine
```

#### [`ffans-threadmarks.forum.directory.show_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.directory.show_button%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.directory.title`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.directory.title%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.discussion_controls.show_threadmarks_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.discussion_controls.show_threadmarks_button%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.manage_modal.delete_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.delete_button%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`ffans-threadmarks.forum.manage_modal.discussion_tab`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.discussion_tab%22)

> =&gt; ffans-threadmarks.ref.discussion

```diff
+=> ffans-threadmarks.ref.discussion
```

#### [`ffans-threadmarks.forum.manage_modal.loading_text`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.loading_text%22)

> =&gt; core.ref.loading

```diff
+=> core.ref.loading
```

#### [`ffans-threadmarks.forum.manage_modal.save_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.save_button%22)

> =&gt; ffans-threadmarks.ref.save

```diff
+=> ffans-threadmarks.ref.save
```

#### [`ffans-threadmarks.forum.manage_modal.type_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.type_label%22)

> =&gt; ffans-threadmarks.ref.type

```diff
+=> ffans-threadmarks.ref.type
```

#### [`ffans-threadmarks.forum.threadmark.mine_badge`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.mine_badge%22)

> =&gt; ffans-threadmarks.ref.mine

```diff
+=> ffans-threadmarks.ref.mine
```

#### [`ffans-threadmarks.lib.type_form.color_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.color_label%22)

> =&gt; core.ref.color

```diff
+=> core.ref.color
```

#### [`ffans-threadmarks.lib.type_form.icon_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.icon_label%22)

> =&gt; core.ref.icon

```diff
+=> core.ref.icon
```

#### [`ffans-threadmarks.lib.type_form.key_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/et/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.key_label%22)

> =&gt; ffans-threadmarks.ref.key

```diff
+=> ffans-threadmarks.ref.key
```


### `fof-badges` (missing)

#### [`fof-badges.defaults.categories.getting-started.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/et/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.name%22)

> Getting Started

```diff
+Alustamine
```


### `fof-follow-tags` (missing)

#### [`fof-follow-tags.admin.settings.prompt_tag_ids_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_ids_label%22)

> Tags to offer

```diff
+Sildid, mis on pakkumisel
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.all`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.all%22)

> All tags

```diff
+Kõik sildid
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.list`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.list%22)

> Tags selected below

```diff
+All valitud sildid
```

#### [`fof-follow-tags.forum.prompt.choose_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.forum.prompt.choose_button%22)

> Choose tags to follow

```diff
+Vali sildid, mida jälgida
```

#### [`fof-follow-tags.forum.prompt.continue_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.forum.prompt.continue_button%22)

> Continue to forum

```diff
+Edasi foorumisse
```

#### [`fof-follow-tags.forum.prompt.later_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.forum.prompt.later_button%22)

> Remind me later

```diff
+Tuleta mulle hiljem meelde
```

#### [`fof-follow-tags.forum.prompt.modal_title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/et/?q=context%3A%3D%22fof-follow-tags.forum.prompt.modal_title%22)

> Choose tags to follow

```diff
+Vali sildid, mida jälgida
```


### `fof-mailing` (missing)

#### [`fof-mailing.email.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/et/?q=context%3A%3D%22fof-mailing.email.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.modal_mail.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/et/?q=context%3A%3D%22fof-mailing.forum.modal_mail.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```


### `fof-move-posts` (missing)

#### [`fof-move-posts.forum.post.moving`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/et/?q=context%3A%3D%22fof-move-posts.forum.post.moving%22)

> Moving Post

```diff
+Postituse liigutamine
```

#### [`fof-move-posts.forum.post_stream.post_moved`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/et/?q=context%3A%3D%22fof-move-posts.forum.post_stream.post_moved%22)

> {count, plural, one {{username} moved a post to {target\_discussion}.} other {{username} moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {{username} liigutas postituse {target_discussion}.} other {{username} liigutas {count} postitust vestlusesse {target_discussion}.}}
```

#### [`fof-move-posts.ref.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/et/?q=context%3A%3D%22fof-move-posts.ref.move_posts%22)

> Move Posts

```diff
+Liiguta postitusi
```

#### [`fof-move-posts.ref.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/et/?q=context%3A%3D%22fof-move-posts.ref.status.old_to_new_move%22)

> Cannot move an old post to a newer discussion.

```diff
+Vana postitust ei saa liigutada uuemasse vestlusesse.
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.forum.settings.composer_heading`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/et/?q=context%3A%3D%22fof-rich-text.forum.settings.composer_heading%22)

> Composer

```diff
+Redaktor
```

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/et/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
+Ära eralda lõike uue reaga.
```

#### [`fof-rich-text.lib.composer.additional_items_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/et/?q=context%3A%3D%22fof-rich-text.lib.composer.additional_items_tooltip%22)

> Additional Controls

```diff
+Lisanupud
```

#### [`fof-rich-text.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/et/?q=context%3A%3D%22fof-rich-text.lib.composer.image_tooltip%22)

> Add an image

```diff
+Lisa pilt
```


### `fof-sentry` (missing)

#### [`fof-sentry.admin.sentry_settings`](https://weblate.rob006.net/translate/flarum2/fof-sentry/et/?q=context%3A%3D%22fof-sentry.admin.sentry_settings%22)

> Sentry Settings

```diff
+Sentry seaded
```


### `fof-upgrade-advisor` (missing)

#### [`fof-upgrade-advisor.admin.checks.database-version.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.title%22)

> Database version

```diff
+Andmebaasi versioon
```

#### [`fof-upgrade-advisor.admin.checks.extension-compatibility.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.extension-compatibility.title%22)

> Extension compatibility

```diff
+Lisaprogrammide ühilduvus
```

#### [`fof-upgrade-advisor.admin.checks.php-version.chip`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.chip%22)

> PHP {current}

```diff
+PHP {current}
```

#### [`fof-upgrade-advisor.admin.checks.php-version.pass`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.pass%22)

> Running PHP {current}.

```diff
+Töötav PHP {current}.
```

#### [`fof-upgrade-advisor.admin.checks.php-version.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.title%22)

> PHP version

```diff
+PHP versioon
```

#### [`fof-upgrade-advisor.admin.checks.php-version.warning`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.warning%22)

> Could not determine the PHP version.

```diff
+PHP versiooni tuvastamine ebaõnnestus.
```

#### [`fof-upgrade-advisor.admin.extensions.contact.issues`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.issues%22)

> Issues

```diff
+Probleemid
```

#### [`fof-upgrade-advisor.admin.extensions.contact.source`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.source%22)

> Source

```diff
+Allikas
```

#### [`fof-upgrade-advisor.admin.list.after`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.after%22)

> After upgrading

```diff
+Pärast uuendamist
```

#### [`fof-upgrade-advisor.admin.list.before`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.before%22)

> Before upgrading

```diff
+Enne uuendamist
```

#### [`fof-upgrade-advisor.admin.list.copied`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.copied%22)

> Copied

```diff
+Kopeeritud
```

#### [`fof-upgrade-advisor.admin.list.copy`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.copy%22)

> Copy

```diff
+Kopeeri
```

#### [`fof-upgrade-advisor.admin.list.details.abandoned`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.abandoned%22)

> Abandoned, no replacement

```diff
+Hüljatud, asendust pole
```

#### [`fof-upgrade-advisor.admin.list.details.none`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.none%22)

> {version}

```diff
+{version}
```

#### [`fof-upgrade-advisor.admin.list.details.remove`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.remove%22)

> Built into core

```diff
+Tuuma sisse ehitatud
```

#### [`fof-upgrade-advisor.admin.list.details.replacement`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.replacement%22)

> → {replacement}

```diff
+→ {replacement}
```

#### [`fof-upgrade-advisor.admin.list.details.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.unknown%22)

> Not found

```diff
+Ei leitud
```

#### [`fof-upgrade-advisor.admin.list.groups.decision.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.decision.title%22)

> Needs a decision

```diff
+Vajab otsust
```

#### [`fof-upgrade-advisor.admin.list.groups.environment.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.environment.title%22)

> Server environment

```diff
+Serveri keskond
```

#### [`fof-upgrade-advisor.admin.list.groups.ready.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.ready.title%22)

> Ready

```diff
+Valmis
```

#### [`fof-upgrade-advisor.admin.list.groups.replace.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.replace.title%22)

> Remove or replace

```diff
+Eemalda või asenda
```

#### [`fof-upgrade-advisor.admin.list.groups.unknown.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.unknown.title%22)

> Couldn't check

```diff
+Kontrollimine ebaõnnestus
```

#### [`fof-upgrade-advisor.admin.repositories.add_composer`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.add_composer%22)

> Add repository

```diff
+Lisa hoidla
```

#### [`fof-upgrade-advisor.admin.repositories.add_floxum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.add_floxum%22)

> Add Floxum

```diff
+Lisa Floxum
```

#### [`fof-upgrade-advisor.admin.repositories.remove`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.remove%22)

> Remove repository

```diff
+Eemalda hoidla
```

#### [`fof-upgrade-advisor.admin.repositories.test`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test%22)

> Test connection

```diff
+Testi ühendust
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_unreachable`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_unreachable%22)

> Could not reach the repository

```diff
+Koguga ühenduse loomine ebaõnnestus
```

#### [`fof-upgrade-advisor.admin.repositories.test_ok`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_ok%22)

> Connected

```diff
+Ühendatud
```

#### [`fof-upgrade-advisor.admin.repositories.token`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.token%22)

> Token

```diff
+Kontrollkood
```

#### [`fof-upgrade-advisor.admin.repositories.type_floxum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.type_floxum%22)

> Floxum

```diff
+Floxum
```

#### [`fof-upgrade-advisor.admin.repositories.url`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.url%22)

> Repository URL

```diff
+Hoidla URL
```

#### [`fof-upgrade-advisor.admin.repositories.username`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.username%22)

> Username

```diff
+Kasutajanimi
```

#### [`fof-upgrade-advisor.admin.summary.export`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.export%22)

> Export CSV

```diff
+Ekspordi CSV
```

#### [`fof-upgrade-advisor.admin.summary.recommended`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.recommended%22)

> {version} recommended

```diff
+Soovitatud versioon {version}
```

#### [`fof-upgrade-advisor.admin.summary.refresh`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.refresh%22)

> Refresh

```diff
+Värskenda
```

#### [`fof-upgrade-advisor.admin.tabs.report`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.tabs.report%22)

> Readiness report

```diff
+Valmiduse aruanne
```

#### [`fof-upgrade-advisor.admin.tabs.repositories`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/et/?q=context%3A%3D%22fof-upgrade-advisor.admin.tabs.repositories%22)

> Repositories

```diff
+Hoidlad
```


### `huoxin-money-with-history` (missing)

#### [`huoxin-money-with-history.forum.modal.submit_button`](https://weblate.rob006.net/translate/flarum2/huoxin-money-with-history/et/?q=context%3A%3D%22huoxin-money-with-history.forum.modal.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```


### `huseyinfiliz-diff` (missing)

#### [`huseyinfiliz-diff.forum.deleteButton`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.deleteButton%22)

> =&gt; core.forum.post\_controls.delete\_button

```diff
+=> core.forum.post_controls.delete_button
```

#### [`huseyinfiliz-diff.forum.differences.currentContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.currentContent%22)

> =&gt; huseyinfiliz-diff.ref.currentContent

```diff
+=> huseyinfiliz-diff.ref.currentContent
```

#### [`huseyinfiliz-diff.forum.differences.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.originalContent%22)

> =&gt; huseyinfiliz-diff.ref.originalContent

```diff
+=> huseyinfiliz-diff.ref.originalContent
```

#### [`huseyinfiliz-diff.forum.differences.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.differences.revisionWithNumber%22)

> =&gt; huseyinfiliz-diff.ref.revisionWithNumber

```diff
+=> huseyinfiliz-diff.ref.revisionWithNumber
```

#### [`huseyinfiliz-diff.forum.editedInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.editedInfo%22)

> =&gt; core.forum.post.edited\_tooltip

```diff
+=> core.forum.post.edited_tooltip
```

#### [`huseyinfiliz-diff.forum.editedText`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.editedText%22)

> =&gt; core.forum.post.edited\_text

```diff
+=> core.forum.post.edited_text
```

#### [`huseyinfiliz-diff.forum.previewMode.currentContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.currentContent%22)

> =&gt; huseyinfiliz-diff.ref.currentContent

```diff
+=> huseyinfiliz-diff.ref.currentContent
```

#### [`huseyinfiliz-diff.forum.previewMode.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.originalContent%22)

> =&gt; huseyinfiliz-diff.ref.originalContent

```diff
+=> huseyinfiliz-diff.ref.originalContent
```

#### [`huseyinfiliz-diff.forum.previewMode.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.previewMode.revisionWithNumber%22)

> =&gt; huseyinfiliz-diff.ref.revisionWithNumber

```diff
+=> huseyinfiliz-diff.ref.revisionWithNumber
```

#### [`huseyinfiliz-diff.forum.tooltips.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.originalContent%22)

> =&gt; huseyinfiliz-diff.ref.originalContent

```diff
+=> huseyinfiliz-diff.ref.originalContent
```

#### [`huseyinfiliz-diff.forum.tooltips.preview`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.preview%22)

> =&gt; core.forum.composer.preview\_tooltip

```diff
+=> core.forum.composer.preview_tooltip
```

#### [`huseyinfiliz-diff.forum.tooltips.revisionWithNumber`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/et/?q=context%3A%3D%22huseyinfiliz-diff.forum.tooltips.revisionWithNumber%22)

> =&gt; huseyinfiliz-diff.ref.revisionWithNumber

```diff
+=> huseyinfiliz-diff.ref.revisionWithNumber
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

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.saved_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.saved_message%22)

> =&gt; core.admin.settings.saved\_message

```diff
+=> core.admin.settings.saved_message
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.submit_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.load_more_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.load_more_button%22)

> =&gt; core.forum.post\_stream.load\_more\_button

```diff
+=> core.forum.post_stream.load_more_button
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
+Emoji seaded
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.custom%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.custom

```diff
+=> pianotell-flamoji.ref.emoji_categories.custom
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.frequent%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.frequent

```diff
+=> pianotell-flamoji.ref.emoji_categories.frequent
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/et/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
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
