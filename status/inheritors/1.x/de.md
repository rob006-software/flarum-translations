# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **314** are translated differently and **657** are
translated only in `de`. Altogether they cover **93** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | [2](#acpl-lscache) | 0 |
| `asyntai-chatbot` | 0 | [6](#asyntai-chatbot-missing) |
| `core` | [7](#core) | 0 |
| `datitisev-backup` | [3](#datitisev-backup) | 0 |
| `datlechin-passkey` | [4](#datlechin-passkey) | 0 |
| `datlechin-tag-passwords` | [13](#datlechin-tag-passwords) | 0 |
| `ernestdefoe-aurora` | 0 | [20](#ernestdefoe-aurora-missing) |
| `ffans-creator-declarations` | 0 | [73](#ffans-creator-declarations-missing) |
| `flarum-audit` | [1](#flarum-audit) | 0 |
| `flarum-extension-manager` | [5](#flarum-extension-manager) | 0 |
| `flarum-flags` | [4](#flarum-flags) | 0 |
| `flarum-nicknames` | [1](#flarum-nicknames) | 0 |
| `flarum-pusher` | [2](#flarum-pusher) | 0 |
| `flarum-statistics` | [1](#flarum-statistics) | 0 |
| `flarum-sticky` | [6](#flarum-sticky) | 0 |
| `flarum-tags` | [31](#flarum-tags) | 0 |
| `fof-anti-spam` | [7](#fof-anti-spam) | 0 |
| `fof-badges` | [6](#fof-badges) | 0 |
| `fof-best-answer` | [7](#fof-best-answer) | 0 |
| `fof-blog` | [2](#fof-blog) | 0 |
| `fof-byobu` | [4](#fof-byobu) | 0 |
| `fof-categories` | [5](#fof-categories) | 0 |
| `fof-checklist` | [1](#fof-checklist) | 0 |
| `fof-default-group` | [1](#fof-default-group) | 0 |
| `fof-default-user-preferences` | [7](#fof-default-user-preferences) | 0 |
| `fof-discussion-templates` | [5](#fof-discussion-templates) | 0 |
| `fof-doorman` | [1](#fof-doorman) | 0 |
| `fof-filter` | [4](#fof-filter) | 0 |
| `fof-gamification` | [9](#fof-gamification) | 0 |
| `fof-geoip` | [2](#fof-geoip) | 0 |
| `fof-horizon` | [1](#fof-horizon) | 0 |
| `fof-impersonate` | [1](#fof-impersonate) | 0 |
| `fof-links` | [2](#fof-links) | 0 |
| `fof-masquerade` | [2](#fof-masquerade) | 0 |
| `fof-merge-discussions` | [5](#fof-merge-discussions) | 0 |
| `fof-moderator-notes` | [1](#fof-moderator-notes) | 0 |
| `fof-moderator-warnings` | [6](#fof-moderator-warnings) | 0 |
| `fof-move-posts` | [2](#fof-move-posts) | 0 |
| `fof-oauth` | [3](#fof-oauth) | 0 |
| `fof-polls` | [5](#fof-polls) | 0 |
| `fof-reactions` | [3](#fof-reactions) | 0 |
| `fof-seo` | [3](#fof-seo) | 0 |
| `fof-sitemap` | [3](#fof-sitemap) | 0 |
| `fof-socialprofile` | [2](#fof-socialprofile) | 0 |
| `fof-split` | [1](#fof-split) | 0 |
| `fof-synopsis` | [3](#fof-synopsis) | 0 |
| `fof-terms` | [1](#fof-terms) | 0 |
| `fof-upload` | [2](#fof-upload) | 0 |
| `fof-user-directory` | [3](#fof-user-directory) | 0 |
| `fof-username-request` | [8](#fof-username-request) | 0 |
| `fof-webhooks` | [4](#fof-webhooks) | 0 |
| `forumaker-magicbb` | [3](#forumaker-magicbb) | [19](#forumaker-magicbb-missing) |
| `forumaker-magicread` | 0 | [18](#forumaker-magicread-missing) |
| `forumaker-magicslider` | [2](#forumaker-magicslider) | 0 |
| `forumfortress-flarum` | 0 | [74](#forumfortress-flarum-missing) |
| `huoxin-money-with-history` | 0 | [1](#huoxin-money-with-history-missing) |
| `huseyinfiliz-awards` | [22](#huseyinfiliz-awards) | 0 |
| `huseyinfiliz-diff` | [10](#huseyinfiliz-diff) | 0 |
| `huseyinfiliz-leaderboard` | [5](#huseyinfiliz-leaderboard) | 0 |
| `huseyinfiliz-sticky-title` | [2](#huseyinfiliz-sticky-title) | 0 |
| `ianm-boring-avatars` | [1](#ianm-boring-avatars) | 0 |
| `ianm-follow-users` | [1](#ianm-follow-users) | 0 |
| `ianm-syndication` | [7](#ianm-syndication) | 0 |
| `ianm-twofactor` | [3](#ianm-twofactor) | 0 |
| `justoverclock-related-discussions` | [2](#justoverclock-related-discussions) | 0 |
| `justoverclock-welcomebox` | [2](#justoverclock-welcomebox) | 0 |
| `linkrobins-badge-labels` | 0 | [34](#linkrobins-badge-labels-missing) |
| `linkrobins-birdseye` | [3](#linkrobins-birdseye) | [2](#linkrobins-birdseye-missing) |
| `linkrobins-link-gate` | 0 | [12](#linkrobins-link-gate-missing) |
| `maicol07-sso` | 0 | [13](#maicol07-sso-missing) |
| `michaelbelgium-ai-autoreply` | 0 | [22](#michaelbelgium-ai-autoreply-missing) |
| `migratetoflarum-fake-data` | [1](#migratetoflarum-fake-data) | 0 |
| `peopleinside-antiflood` | 0 | [18](#peopleinside-antiflood-missing) |
| `peopleinside-fla-powcaptcha` | 0 | [17](#peopleinside-fla-powcaptcha-missing) |
| `quasimo-carousel-grids` | 0 | [23](#quasimo-carousel-grids-missing) |
| `quasimo-llms-txt` | 0 | [18](#quasimo-llms-txt-missing) |
| `quasimo-tag-sidebar` | 0 | [23](#quasimo-tag-sidebar-missing) |
| `ralkage-account-lockout` | 0 | [24](#ralkage-account-lockout-missing) |
| `ralkage-ad-management` | 0 | [81](#ralkage-ad-management-missing) |
| `ralkage-civility-filter` | [2](#ralkage-civility-filter) | 0 |
| `ralkage-hcaptcha` | [3](#ralkage-hcaptcha) | 0 |
| `resofire-blog-cards` | [2](#resofire-blog-cards) | 0 |
| `resofire-digest-mail` | [10](#resofire-digest-mail) | 0 |
| `resofire-menu-control` | [2](#resofire-menu-control) | 0 |
| `tapao-auto-ai-moderation` | 0 | [28](#tapao-auto-ai-moderation-missing) |
| `tapao-custom-landing-page` | [3](#tapao-custom-landing-page) | 0 |
| `tryhackx-advanced-pages` | 0 | [61](#tryhackx-advanced-pages-missing) |
| `tryhackx-homepage-blocks` | [2](#tryhackx-homepage-blocks) | [21](#tryhackx-homepage-blocks-missing) |
| `tryhackx-thumb-sliders` | 0 | [18](#tryhackx-thumb-sliders-missing) |
| `validation` | [10](#validation) | 0 |
| `walsgit-discussion-cards` | [6](#walsgit-discussion-cards) | 0 |
| `yippy-auth-ldap` | [3](#yippy-auth-ldap) | [31](#yippy-auth-ldap-missing) |
| `yippy-tag-with-themes` | [5](#yippy-tag-with-themes) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-lscache`

#### [`acpl-lscache.admin.public_cache_ttl_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/de/?q=context%3A%3D%22acpl-lscache.admin.public_cache_ttl_help%22)

> Define how long, in seconds, public pages should be cached. The default value is 604800 seconds (one week).

```diff
-Gebe an, wie lange (in Sekunden) öffentliche Seiten zwischengespeichert werden. Standard sind 604800 Sekunden (eine Woche).
+Gib an, wie lange (in Sekunden) öffentliche Seiten zwischengespeichert werden. Standard sind 604800 Sekunden (eine Woche).
```

<del>Gebe</del><ins>Gib</ins> an, wie lange (in Sekunden) öffentliche Seiten zwischengespeichert werden. Standard sind 604800 Sekunden (eine Woche).

#### [`acpl-lscache.admin.purge_on_discussion_update_help`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/de/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_help%22)

> Enter the URLs or cache Tags you want to purge when a discussion is updated, one per line. URL should start with &lt;code&gt;/&lt;/code&gt;, e.g. &lt;code&gt;/rankings&lt;/code&gt;, and cache Tag should start with &lt;code&gt;tag=&lt;/code&gt;, e.g. &lt;code&gt;tag=rankings&lt;/code&gt;. For multiple routes, adding a rule in .htaccess with a regular expression that tags routes and entering only this tag here is faster. &lt;a&gt;Learn more&lt;/a&gt;. By default, the cache for the homepage and updated discussions is purged.

```diff
-Gebe die URLs oder Cache-Tags ein, die du löschen möchten, wenn eine Diskussion aktualisiert wird, jeweils eine pro Zeile. Die URL sollte mit <code>/</code> beginnen, z. B. <code>/rankings</code>, und das Cache-Tag sollte mit <code>tag=</code> beginnen, z. B. <code>tag=rankings</code>. Bei mehreren Routen ist es schneller, eine Regel in .htaccess mit einem regulären Ausdruck hinzuzufügen, der Routen markiert, und hier nur dieses Tag einzugeben. <a>Weitere Informationen</a>. Standardmäßig wird der Cache für die Startseite und aktualisierte Diskussionen gelöscht.
+Gib die URLs oder Cache-Tags ein, die du löschen möchten, wenn eine Diskussion aktualisiert wird, jeweils eine pro Zeile. Die URL sollte mit <code>/</code> beginnen, z. B. <code>/rankings</code>, und das Cache-Tag sollte mit <code>tag=</code> beginnen, z. B. <code>tag=rankings</code>. Bei mehreren Routen ist es schneller, eine Regel in .htaccess mit einem regulären Ausdruck hinzuzufügen, der Routen markiert, und hier nur dieses Tag einzugeben. <a>Weitere Informationen</a>. Standardmäßig wird der Cache für die Startseite und aktualisierte Diskussionen gelöscht.
```

<del>Gebe</del><ins>Gib</ins> die URLs oder Cache-Tags ein, die du löschen möchten, wenn eine Diskussion aktualisiert wird, jeweils eine pro Zeile. Die URL sollte mit &lt;code&gt;/&lt;/code&gt; beginnen, z. B. &lt;code&gt;/rankings&lt;/code&gt;, und das Cache-Tag sollte mit &lt;code&gt;tag=&lt;/code&gt; beginnen, z. B. &lt;code&gt;tag=rankings&lt;/code&gt;. Bei mehreren Routen ist es schneller, eine Regel in .htaccess mit einem regulären Ausdruck hinzuzufügen, der Routen markiert, und hier nur dieses Tag einzugeben. &lt;a&gt;Weitere Informationen&lt;/a&gt;. Standardmäßig wird der Cache für die Startseite und aktualisierte Diskussionen gelöscht.


### `core`

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Ändere die Farbe, das Logo und weitere Variablen des Forums.
+Ändere die Farben, das Logo und weitere Variablen des Forums.
```

Ändere die <del>Farbe,</del><ins>Farben,</ins> das Logo und weitere Variablen des Forums.

#### [`core.admin.basics.forum_description_heading`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.admin.basics.forum_description_heading%22)

> Forum Description

```diff
-Beschreibung des Forums
+Forumbeschreibung
```

#### [`core.admin.basics.forum_title_heading`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.admin.basics.forum_title_heading%22)

> Forum Title

```diff
-Titel des Forums
+Forumtitel
```

#### [`core.admin.dashboard.status.headers.queue-driver`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.admin.dashboard.status.headers.queue-driver%22)

> Queue Driver

```diff
-Queue-Treiber
+Warteschlangen-Treiber
```

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Bitte gebe deine E-Mail-Adresse ein, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.
+Bitte gib deine E-Mail-Adresse ein, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.
```

Bitte <del>gebe</del><ins>gib</ins> deine E-Mail-Adresse ein, um einen Link zum Zurücksetzen deines Passwortes zu erhalten.

#### [`core.lib.series.glue_text`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.lib.series.glue_text%22)

> , 

```diff
-, 
+، 
```

#### [`core.ref.edit`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.ref.edit%22)

> Edit

```diff
-Ändern
+Bearbeiten
```


### `datitisev-backup`

#### [`datitisev-backup.admin.adapter-settings-modal.aws.version.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.version.description%22)

> Specify a version or leave blank for latest.

```diff
-Gebe eine Version an oder lasse das Feld für latest leer.
+Gib eine Version an oder lasse das Feld für die neueste leer.
```

<del>Gebe</del><ins>Gib</ins> eine Version an oder lasse das Feld für <del>latest</del><ins>die neueste</ins> leer.

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.description%22)

> Follow the instructions @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md to retrieve the refresh token for your Google oAuth app.
>

```diff
-Folgen Sie den Anweisungen @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md, um das Aktualisierungstoken für Ihre Google oAuth-App abzurufen.
+Folge den Anweisungen @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md, um das Aktualisierungstoken für deine Google oAuth-App abzurufen.

```

<del>Folgen Sie</del><ins>Folge</ins> den Anweisungen @ https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md, um das Aktualisierungstoken für <del>Ihre</del><ins>deine</ins> Google oAuth-App abzurufen.<br />

#### [`datitisev-backup.admin.adapter-settings-modal.local.target.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/de/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.local.target.description%22)

> Specify the local directory to save backups to.

```diff
-Gebe das lokale Verzeichnis an, in dem Backups gespeichert werden sollen.
+Gib das lokale Verzeichnis an, in dem Backups gespeichert werden sollen.
```

<del>Gebe</del><ins>Gib</ins> das lokale Verzeichnis an, in dem Backups gespeichert werden sollen.


### `datlechin-passkey`

#### [`datlechin-passkey.forum.log_in.unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/de/?q=context%3A%3D%22datlechin-passkey.forum.log_in.unsupported%22)

> This device cannot use the passkey type the site requires.

```diff
-Dieses Gerät unterstützt den von der Website geforderten Passkey-Typ nicht.
+Dieses Gerät unterstützt den von der Website geforderten Passkeytyp nicht.
```

Dieses Gerät unterstützt den von der Website geforderten <del>Passkey-Typ</del><ins>Passkeytyp</ins> nicht.

#### [`datlechin-passkey.forum.settings.add_modal.device_name_placeholder`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/de/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.device_name_placeholder%22)

> e.g. iPhone, MacBook, YubiKey

```diff
-z. B. iPhone, MacBook, YubiKey
+z. B. iPhone, Macbook, YubiKey
```

z. B. iPhone, <del>MacBook,</del><ins>Macbook,</ins> YubiKey

#### [`datlechin-passkey.forum.settings.add_modal.title`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/de/?q=context%3A%3D%22datlechin-passkey.forum.settings.add_modal.title%22)

> Add a passkey

```diff
-Einen Passkey hinzufügen
+Passkey hinzufügen
```

<del>Einen </del>Passkey hinzufügen

#### [`datlechin-passkey.forum.settings.alerts.registration_unsupported`](https://weblate.rob006.net/translate/flarum2/datlechin-passkey/de/?q=context%3A%3D%22datlechin-passkey.forum.settings.alerts.registration_unsupported%22)

> This device cannot register a passkey of the type the site requires.

```diff
-Dieses Gerät unterstützt den von der Website geforderten Passkey-Typ nicht.
+Dieses Gerät unterstützt den von der Website geforderten Passkeytyp nicht.
```

Dieses Gerät unterstützt den von der Website geforderten <del>Passkey-Typ</del><ins>Passkeytyp</ins> nicht.


### `datlechin-tag-passwords`

#### [`datlechin-tag-passwords.admin.edit_tag.password_protected_label`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.edit_tag.password_protected_label%22)

> Password-protect this tag

```diff
-Dieses Thema mit einem Passwort schützen
+Dieses Tag mit einem Passwort schützen
```

Dieses <del>Thema</del><ins>Tag</ins> mit einem Passwort schützen

#### [`datlechin-tag-passwords.admin.setting.discussion.avatar`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.discussion.avatar%22)

> Display the Poster User Profile for Protected Tag in Discussion List

```diff
-Benutzerprofil des Beitragenden für geschützte Themen in der Diskussionsliste anzeigen
+Benutzerprofil des Beitragenden für geschützte Tags in der Diskussionsliste anzeigen
```

Benutzerprofil des Beitragenden für geschützte <del>Themen</del><ins>Tags</ins> in der Diskussionsliste anzeigen

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_list`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_list%22)

> Display Protected Tag in Discussion List, with Protection Summary

```diff
-Geschütztes Thema in der Diskussionsliste mit Zusammenfassung zum Schutzstatus anzeigen
+Geschütztes Tag in der Diskussionsliste mit Zusammenfassung zum Schutzstatus anzeigen
```

Geschütztes <del>Thema</del><ins>Tag</ins> in der Diskussionsliste mit Zusammenfassung zum Schutzstatus anzeigen

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_page`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_discussion_page%22)

> Display Protected Tag in Discussion, with URL Sharing

```diff
-Geschütztes Thema in der Diskussion mit URL-Freigabe anzeigen
+Geschütztes Tag in der Diskussion mit URL-Freigabe anzeigen
```

Geschütztes <del>Thema</del><ins>Tag</ins> in der Diskussion mit URL-Freigabe anzeigen

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_post_list`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_post_list%22)

> Display Protected Tag in Post List, with Protection Summary

```diff
-Geschütztes Thema in der Beitragsliste mit Zusammenfassung zum Schutzstatus anzeigen
+Geschütztes Tag in der Beitragsliste mit Zusammenfassung zum Schutzstatus anzeigen
```

Geschütztes <del>Thema</del><ins>Tag</ins> in der Beitragsliste mit Zusammenfassung zum Schutzstatus anzeigen

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_sidebar`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_sidebar%22)

> Display Protected Tag in sidebar navigation

```diff
-Geschütztes Thema in der Seitenleiste anzeigen
+Geschütztes Tag in der Seitenleiste anzeigen
```

Geschütztes <del>Thema</del><ins>Tag</ins> in der Seitenleiste anzeigen

#### [`datlechin-tag-passwords.admin.setting.display_protected_tag_from_tags_page`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.admin.setting.display_protected_tag_from_tags_page%22)

> Display Protected Tag in Tags page navigation

```diff
-Geschütztes Thema in der Themennavigation anzeigen
+Geschütztes Tag in der Navigation der Tags-Seite anzeigen
```

Geschütztes <del>Thema</del><ins>Tag</ins> in der <del>Themennavigation</del><ins>Navigation der Tags-Seite</ins> anzeigen

#### [`datlechin-tag-passwords.forum.discussion_list.info.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.multiple%22)

> To be able to gain access to this discussion, you need to unlock all protected Tags.

```diff
-Um Zugang zu dieser Diskussion zu erhalten, musst du alle geschützten Themen freischalten.
+Um Zugang zu dieser Diskussion zu erhalten, musst du alle geschützten Tags freischalten.
```

Um Zugang zu dieser Diskussion zu erhalten, musst du alle geschützten <del>Themen</del><ins>Tags</ins> freischalten.

#### [`datlechin-tag-passwords.forum.discussion_list.info.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.forum.discussion_list.info.password_protected%22)

> To be able to gain access to this discussion, you must provide the correct password for the Protected Tag.

```diff
-Um Zugang zu dieser Diskussion zu erhalten, musst du das richtige Passwort für das geschützte Thema eingeben.
+Um Zugang zu dieser Diskussion zu erhalten, musst du das richtige Passwort für das geschützte Tag eingeben.
```

Um Zugang zu dieser Diskussion zu erhalten, musst du das richtige Passwort für das geschützte <del>Thema</del><ins>Tag</ins> eingeben.

#### [`datlechin-tag-passwords.forum.post_list.info.multiple`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.forum.post_list.info.multiple%22)

> To be able to gain access to this post, you need to unlock all protected Tags.

```diff
-Um auf diesen Beitrag zugreifen zu können, musst du alle geschützten Themen freischalten.
+Um auf diesen Beitrag zugreifen zu können, musst du alle geschützten Tags freischalten.
```

Um auf diesen Beitrag zugreifen zu können, musst du alle geschützten <del>Themen</del><ins>Tags</ins> freischalten.

#### [`datlechin-tag-passwords.forum.post_list.info.password_protected`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.forum.post_list.info.password_protected%22)

> To be able to gain access to this post, you must provide the correct password for the Protected Tag.

```diff
-Um auf diesen Beitrag zugreifen zu können, musst du das richtige Passwort für das geschützte Thema eingeben.
+Um auf diesen Beitrag zugreifen zu können, musst du das richtige Passwort für das geschützte Tag eingeben.
```

Um auf diesen Beitrag zugreifen zu können, musst du das richtige Passwort für das geschützte <del>Thema</del><ins>Tag</ins> eingeben.

#### [`datlechin-tag-passwords.forum.tag_group_required.title`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.forum.tag_group_required.title%22)

> Permission Group is required to view discussions in this tag

```diff
-Berechtigungsgruppe erforderlich, um Diskussionen in diesem Thema anzuzeigen
+Berechtigungsgruppe erforderlich, um Diskussionen in diesem Tag anzuzeigen
```

Berechtigungsgruppe erforderlich, um Diskussionen in diesem <del>Thema</del><ins>Tag</ins> anzuzeigen

#### [`datlechin-tag-passwords.forum.tag_password_required.title`](https://weblate.rob006.net/translate/flarum2/datlechin-tag-passwords/de/?q=context%3A%3D%22datlechin-tag-passwords.forum.tag_password_required.title%22)

> Password required to view discussions in this tag

```diff
-Passwort erforderlich, um Diskussionen in diesem Thema anzuzeigen
+Passwort erforderlich, um Diskussionen in diesem Tag anzuzeigen
```

Passwort erforderlich, um Diskussionen in diesem <del>Thema</del><ins>Tag</ins> anzuzeigen


### `flarum-audit`

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/de/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
-Thema #{id}
+Tag #{id}
```

<del>Thema</del><ins>Tag</ins> #{id}


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.auth_config.types.bearer`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.bearer%22)

> HTTP Bearer

```diff
-HTTP Bearer
+HTTP-Bearer
```

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
-Bitte sei vorsichtig, wem du Zugang zum Admin-Bereich gibst, der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.
+Bitte sei vorsichtig, wem du Zugang zum Admin-Bereich gibst. Der Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.
```

Bitte sei vorsichtig, wem du Zugang zum Admin-Bereich <del>gibst,</del><ins>gibst.</ins> <del>der</del><ins>Der</ins> Erweiterungs-Manager könnte von bösartigen Akteuren missbraucht werden, um Pakete zu installieren, die zu Sicherheitslücken führen können.

#### [`flarum-extension-manager.admin.settings.queue_jobs`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de/?q=context%3A%3D%22flarum-extension-manager.admin.settings.queue_jobs%22)

> Run operations in the background queue

```diff
-Operationen im Hintergrund ausführen
+Operationen in der Hintergrundwarteschlange ausführen
```

Operationen <del>im</del><ins>in</ins> <del>Hintergrund</del><ins>der Hintergrundwarteschlange</ins> ausführen

#### [`flarum-extension-manager.admin.settings.task_retention_days_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de/?q=context%3A%3D%22flarum-extension-manager.admin.settings.task_retention_days_help%22)

> The number of days to keep completed tasks in the database. Tasks older than this will be deleted. Set to 0 to keep all tasks.
>

```diff
-Die Anzahl der Tage, die abgeschlossene Aufgaben in der Datenbank aufbewahrt werden. Aufgaben, die älter als diese sind, werden gelöscht. Setze auf 0, um alle Aufgaben zu behalten.
+Die Anzahl der Tage, die abgeschlossene Aufgaben in der Datenbank aufbewahrt werden. Ältere Aufgaben werden gelöscht. Setze auf 0, um alle zu behalten.

```

Die Anzahl der Tage, die abgeschlossene Aufgaben in der Datenbank aufbewahrt werden. <del>Aufgaben, die älter als diese</del><ins>Ältere</ins> <del>sind,</del><ins>Aufgaben</ins> werden gelöscht. Setze auf 0, um alle<del> Aufgaben</del> zu behalten.<br />

#### [`flarum-extension-manager.admin.updater.updater_title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_title%22)

> Updates

```diff
-Updates
+Aktualisierungen
```


### `flarum-flags`

#### [`flarum-flags.admin.permissions.view_flags_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de/?q=context%3A%3D%22flarum-flags.admin.permissions.view_flags_label%22)

> View flagged posts

```diff
-Zeige gemeldete Beiträge
+Gemeldete Beiträge anzeigen
```

<del>Zeige gemeldete</del><ins>Gemeldete</ins> Beiträge<ins> anzeigen</ins>

#### [`flarum-flags.admin.settings.flag_own_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de/?q=context%3A%3D%22flarum-flags.admin.settings.flag_own_posts_label%22)

> Allow users to flag their own posts

```diff
-Erlaube Benutzern eigene Beiträge zu melden
+Erlaube Benutzern, eigene Beiträge zu melden
```

Erlaube <del>Benutzern</del><ins>Benutzern,</ins> eigene Beiträge zu melden

#### [`flarum-flags.admin.settings.guidelines_url_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de/?q=context%3A%3D%22flarum-flags.admin.settings.guidelines_url_label%22)

> Community Guidelines URL

```diff
-Community-Richtlinien URL
+Community-Richtlinien-URL
```

#### [`flarum-flags.forum.flag_post.reason_missing_message`](https://weblate.rob006.net/translate/flarum2/flarum-flags/de/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_missing_message%22)

> Please provide some details for our moderators.

```diff
-Bitte gebe einen Grund an.
+Bitte gib einen Grund an.
```

Bitte <del>gebe</del><ins>gib</ins> einen Grund an.


### `flarum-nicknames`

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/de/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
-Durch diese Einstellung wird die Eingabe des `Benutzernamens` während der Registrierung ausgeblendet und stattdessen eine Zufallszahl verwendet. Außerdem wird das Feld `Spitzname` obligatorisch. Diese Änderung tritt nur in Kraft, wenn 'Einstellen von Spitznamen bei der Registrierung zulassen' aktiviert ist.
+Durch diese Einstellung wird die Eingabe des „Benutzernamens“ während der Registrierung ausgeblendet und stattdessen eine Zufallszahl verwendet. Außerdem wird das Feld „Spitzname“ obligatorisch. Diese Änderung tritt nur in Kraft, wenn „Einstellen von Spitznamen bei der Registrierung zulassen“ aktiviert ist.
```

Durch diese Einstellung wird die Eingabe des <del>\`Benutzernamens\`</del><ins>„Benutzernamens“</ins> während der Registrierung ausgeblendet und stattdessen eine Zufallszahl verwendet. Außerdem wird das Feld <del>\`Spitzname\`</del><ins>„Spitzname“</ins> obligatorisch. Diese Änderung tritt nur in Kraft, wenn <del>'Einstellen</del><ins>„Einstellen</ins> von Spitznamen bei der Registrierung <del>zulassen'</del><ins>zulassen“</ins> aktiviert ist.


### `flarum-pusher`

#### [`flarum-pusher.admin.pusher_settings.app_id_label`](https://weblate.rob006.net/translate/flarum2/flarum-pusher/de/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_id_label%22)

> App ID

```diff
-App ID
+App-ID
```

#### [`flarum-pusher.admin.pusher_settings.app_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-pusher/de/?q=context%3A%3D%22flarum-pusher.admin.pusher_settings.app_key_label%22)

> App Key

```diff
-App Key
+App-Schlüssel
```


### `flarum-statistics`

#### [`flarum-statistics.admin.statistics.mini_heading`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/de/?q=context%3A%3D%22flarum-statistics.admin.statistics.mini_heading%22)

> Forum statistics

```diff
-Forum Statistiken
+Forum-Statistiken
```


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/de/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-Diskussion anpinnen
+Diskussion anheften
```

Diskussion <del>anpinnen</del><ins>anheften</ins>

#### [`flarum-sticky.forum.badge.sticky_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/de/?q=context%3A%3D%22flarum-sticky.forum.badge.sticky_tooltip%22)

> =&gt; flarum-sticky.ref.sticky

```diff
-Angepinnt
+Angeheftet
```

#### [`flarum-sticky.forum.discussion_controls.unsticky_button`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/de/?q=context%3A%3D%22flarum-sticky.forum.discussion_controls.unsticky_button%22)

> Unsticky

```diff
-Anpinnen zurücknehmen
+Anheften zurücknehmen
```

<del>Anpinnen</del><ins>Anheften</ins> zurücknehmen

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/de/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-{username} hat die Diskussion angepinnt ({time}).
+{username} hat die Diskussion angeheftet ({time}).
```

{username} hat die Diskussion <del>angepinnt</del><ins>angeheftet</ins> ({time}).

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/de/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} hat die Diskussion gelöst ({time}).
+{username} hat die Diskussion abgelöst ({time}).
```

{username} hat die Diskussion <del>gelöst</del><ins>abgelöst</ins> ({time}).

#### [`flarum-sticky.ref.sticky`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/de/?q=context%3A%3D%22flarum-sticky.ref.sticky%22)

> Sticky

```diff
-Anpinnen
+Anheften
```


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-Soll das Thema wirklich entfernt werden? Die Diskussionen werden NICHT gelöscht.
+Soll das Tag wirklich entfernt werden? Die Diskussionen werden NICHT gelöscht.
```

Soll das <del>Thema</del><ins>Tag</ins> wirklich entfernt werden? Die Diskussionen werden NICHT gelöscht.

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
-Thema erstellen
+Tag erstellen
```

<del>Thema</del><ins>Tag</ins> erstellen

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-Ordne die Liste der Themen um die Diskussionen zu organisieren.
+Ordne die Liste der Tags, um die Diskussionen zu organisieren.
```

Ordne die Liste der <del>Themen</del><ins>Tags,</ins> um die Diskussionen zu organisieren.

#### [`flarum-tags.admin.permissions.allow_edit_tags_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.permissions.allow_edit_tags_label%22)

> Allow tag editing

```diff
-Erlaube, Themen zu ändern
+Erlaube, Tags zu ändern
```

Erlaube, <del>Themen</del><ins>Tags</ins> zu ändern

#### [`flarum-tags.admin.permissions.bypass_tag_counts_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.permissions.bypass_tag_counts_label%22)

> Bypass tag requirements

```diff
-Themen-Anforderungen umgehen
+Tag-Anforderungen umgehen
```

<del>Themen-Anforderungen</del><ins>Tag-Anforderungen</ins> umgehen

#### [`flarum-tags.admin.permissions.restrict_by_tag_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.permissions.restrict_by_tag_heading%22)

> Restrict by Tag

```diff
-Durch Themen beschränken
+Durch Tag beschränken
```

Durch <del>Themen</del><ins>Tag</ins> beschränken

#### [`flarum-tags.admin.permissions.tag_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.permissions.tag_discussions_label%22)

> Tag discussions

```diff
-Themen für Diskussionen anpassen
+Tag von Diskussionen anpassen
```

<del>Themen</del><ins>Tag</ins> <del>für</del><ins>von</ins> Diskussionen anpassen

#### [`flarum-tags.admin.tag_settings.required_primary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_heading%22)

> Required Number of Primary Tags

```diff
-Anzahl der benötigten Hauptthemen
+Anzahl der benötigten Haupt-Tags
```

Anzahl der benötigten <del>Hauptthemen</del><ins>Haupt-Tags</ins>

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Gib die minimale und die maximale Anzahl von Hauptthemen an, die einer Diskussion hinzugefügt werden können.
+Gib die minimale und die maximale Anzahl von Haupt-Tags an, die einer Diskussion hinzugefügt werden können.
```

Gib die minimale und die maximale Anzahl von <del>Hauptthemen</del><ins>Haupt-Tags</ins> an, die einer Diskussion hinzugefügt werden können.

#### [`flarum-tags.admin.tag_settings.required_secondary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_heading%22)

> Required Number of Secondary Tags

```diff
-Anzahl der benötigten Unterthemen
+Anzahl der benötigten Unter-Tags
```

Anzahl der benötigten <del>Unterthemen</del><ins>Unter-Tags</ins>

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Gib die minimale und die maximale Anzahl von Unterthemen an, die einer Diskussion hinzugefügt werden können.
+Gib die minimale und die maximale Anzahl von Unter-Tags an, die einer Diskussion hinzugefügt werden können.
```

Gib die minimale und die maximale Anzahl von <del>Unterthemen</del><ins>Unter-Tags</ins> an, die einer Diskussion hinzugefügt werden können.

#### [`flarum-tags.admin.tag_settings.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tag_settings.title%22)

> Tag Settings

```diff
-Themen-Einstellungen
+Tag-Einstellungen
```

#### [`flarum-tags.admin.tags.about_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tags.about_tags_text%22)

> Tags are used to categorize discussions. Primary tags are like traditional forum categories: they can be arranged in a two-level hierarchy. Secondary tags do not have hierarchy or order, and are useful for micro-categorization.

```diff
-Themen dienen der Strukturierung von Diskussionen. Hauptthemen sind wie traditionelle Kategorien in einem Forum: sie können in zwei Ebenen geordnet werden. Unterthemen haben keine Ebenen und keine Reihenfolge. Sie können helfen, die Diskussionen feiner zu strukturieren.
+Tags dienen der Strukturierung von Diskussionen. Haupt-Tags sind wie traditionelle Kategorien in einem Forum: sie können in zwei Ebenen geordnet werden. Unter-Tags haben keine Ebenen und keine Reihenfolge. Sie können helfen, die Diskussionen feiner zu strukturieren.
```

<del>Themen</del><ins>Tags</ins> dienen der Strukturierung von Diskussionen. <del>Hauptthemen</del><ins>Haupt-Tags</ins> sind wie traditionelle Kategorien in einem Forum: sie können in zwei Ebenen geordnet werden. <del>Unterthemen</del><ins>Unter-Tags</ins> haben keine Ebenen und keine Reihenfolge. Sie können helfen, die Diskussionen feiner zu strukturieren.

#### [`flarum-tags.admin.tags.create_primary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tags.create_primary_tag_button%22)

> Create Primary Tag

```diff
-Hauptthema erstellen
+Haupt-Tag erstellen
```

<del>Hauptthema</del><ins>Haupt-Tag</ins> erstellen

#### [`flarum-tags.admin.tags.create_secondary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tags.create_secondary_tag_button%22)

> Create Secondary Tag

```diff
-Unterthema erstellen
+Unter-Tags erstellen
```

<del>Unterthema</del><ins>Unter-Tags</ins> erstellen

#### [`flarum-tags.admin.tags.edit_tag_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tags.edit_tag_label%22)

> Edit Tag {tag}

```diff
-Thema {tag} bearbeiten
+Tag {tag} bearbeiten
```

<del>Thema</del><ins>Tag</ins> {tag} bearbeiten

#### [`flarum-tags.admin.tags.primary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tags.primary_heading%22)

> Primary Tags

```diff
-Hauptthemen
+Haupt-Tags
```

#### [`flarum-tags.admin.tags.secondary_heading`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.admin.tags.secondary_heading%22)

> Secondary Tags

```diff
-Unterthemen
+Unter-Tags
```

#### [`flarum-tags.forum.all_tags.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.all_tags.meta_description_text%22)

> All Tags

```diff
-Alle Themen
+Alle Tags
```

Alle <del>Themen</del><ins>Tags</ins>

#### [`flarum-tags.forum.choose_tags.edit_title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.choose_tags.edit_title%22)

> Edit Tags for {title}

```diff
-Themen für {title} bearbeiten
+Tags für {title} bearbeiten
```

<del>Themen</del><ins>Tags</ins> für {title} bearbeiten

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-Themen für die Diskussion auswählen
+Tags für die Diskussion auswählen
```

<del>Themen</del><ins>Tags</ins> für die Diskussion auswählen

#### [`flarum-tags.forum.discussion_controls.edit_tags_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.discussion_controls.edit_tags_button%22)

> Edit Tags

```diff
-Themen ändern
+Tags ändern
```

<del>Themen</del><ins>Tags</ins> ändern

#### [`flarum-tags.forum.header.back_to_tags_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.header.back_to_tags_tooltip%22)

> Back to Tag List

```diff
-Zurück zur Themen-Liste
+Zurück zur Tag-Liste
```

Zurück zur <del>Themen-Liste</del><ins>Tag-Liste</ins>

#### [`flarum-tags.forum.index.untagged_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.index.untagged_link%22)

> Untagged

```diff
-nicht mit Thema versehen
+nicht getaggt
```

nicht <del>mit Thema versehen</del><ins>getaggt</ins>

#### [`flarum-tags.forum.post_stream.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.post_stream.tags_text%22)

> {count, plural, one {{tags} tag} other {{tags} tags}}

```diff
-{count, plural, one {das Thema {tags}} other {die Themen {tags}}}
+{count, plural, one {das Tag {tags}} other {die Tags {tags}}}
```

{count, plural, one {das <del>Thema</del><ins>Tag</ins> {tags}} other {die <del>Themen</del><ins>Tags</ins> {tags}}}

#### [`flarum-tags.forum.tag.meta_description_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.forum.tag.meta_description_text%22)

> All discussions with the {tag} tag

```diff
-Alle Diskussionen mit dem {tag} Thema
+Alle Diskussionen mit dem Tag {tag}
```

Alle Diskussionen mit dem <del>{tag}</del><ins>Tag</ins> <del>Thema</del><ins>{tag}</ins>

#### [`flarum-tags.lib.tag_selection_modal.bypass_requirements`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.bypass_requirements%22)

> Bypass tag requirements

```diff
-Themen-Bedigungen umgehen
+Tag-Bedigungen umgehen
```

<del>Themen-Bedigungen</del><ins>Tag-Bedigungen</ins> umgehen

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
-{count, plural, one {Wähle ein primäres Thema} other {Wähle # primäre Themen}}
+{count, plural, one {Wähle ein Haupt-Tag} other {Wähle # Haupt-Tags}}
```

{count, plural, one {Wähle ein <del>primäres Thema}</del><ins>Haupt-Tag}</ins> other {Wähle #<del> primäre</del> <del>Themen}}</del><ins>Haupt-Tags}}</ins>

#### [`flarum-tags.ref.choose_tags`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.ref.choose_tags%22)

> Choose Tags

```diff
-Themen auswählen
+Tags auswählen
```

<del>Themen</del><ins>Tags</ins> auswählen

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
-{count, plural, one {Wähle ein Thema mehr} other {Wähle # mehr Themen}}
+{count, plural, one {Wähle noch ein Tag} other {Wähle # weitere Tags}}
```

{count, plural, one {Wähle <del>ein</del><ins>noch</ins> <del>Thema</del><ins>ein</ins> <del>mehr}</del><ins>Tag}</ins> other {Wähle # <del>mehr</del><ins>weitere</ins> <del>Themen}}</del><ins>Tags}}</ins>

#### [`flarum-tags.ref.tags`](https://weblate.rob006.net/translate/flarum2/flarum-tags/de/?q=context%3A%3D%22flarum-tags.ref.tags%22)

> Tags

```diff
-Themen
+Tags
```


### `fof-anti-spam`

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
-Hat Registrierungen für {username} ({email}) von {ip} blockiert
+Registrierung für {username} ({email}) von {ip} gesperrt
```

<del>Hat Registrierungen</del><ins>Registrierung</ins> für {username} ({email}) von {ip} <del>blockiert</del><ins>gesperrt</ins>

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
-Hat {username} als Spammer markiert
+{username} als Spammer markiert
```

<del>Hat </del>{username} als Spammer markiert

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help%22)

> This will move all discussions started by this user to the tag(s) you specified. Clear the tag selection to leave discussions in their original tag(s). Has no effect if the 'Delete discussions' option is enabled.

```diff
-Dadurch werden alle Diskussionen, die von diesem Benutzer begonnen wurden, in die von dir angegebenen Themen verschoben. Lösche die Themen-Auswahl, um Diskussionen in ihren ursprünglichen Themen zu belassen. Hat keinen Effekt, wenn die Option „Diskussionen löschen“ aktiviert ist.
+Dadurch werden alle Diskussionen, die von diesem Benutzer begonnen wurden, in die von dir angegebenen Tags verschoben. Lösche die Tag-Auswahl, um Diskussionen in ihren ursprünglichen Tags zu belassen. Hat keinen Effekt, wenn die Option „Diskussionen löschen“ aktiviert ist.
```

Dadurch werden alle Diskussionen, die von diesem Benutzer begonnen wurden, in die von dir angegebenen <del>Themen</del><ins>Tags</ins> verschoben. Lösche die <del>Themen-Auswahl,</del><ins>Tag-Auswahl,</ins> um Diskussionen in ihren ursprünglichen <del>Themen</del><ins>Tags</ins> zu belassen. Hat keinen Effekt, wenn die Option „Diskussionen löschen“ aktiviert ist.

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label%22)

> Move discussions to tag(s)

```diff
-Diskussionen in Themen verschieben
+Diskussionen in Tags verschieben
```

Diskussionen in <del>Themen</del><ins>Tags</ins> verschieben

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_help%22)

> This will move all discussions started by this user to the tag you specified in the forum settings. When disabled, discussions will be left in their current tags.

```diff
-Dadurch werden alle von diesem Benutzer gestarteten Diskussionen in das Thema verschoben, das du in den Forumeinstellungen festgelegt hast. Wenn diese Option deaktiviert ist, verbleiben Diskussionen im bisherigen Thema.
+Dadurch werden alle von diesem Benutzer gestarteten Diskussionen in das Tag verschoben, das du in den Forumeinstellungen festgelegt hast. Wenn diese Option deaktiviert ist, verbleiben Diskussionen im bisherigen Tag.
```

Dadurch werden alle von diesem Benutzer gestarteten Diskussionen in das <del>Thema</del><ins>Tag</ins> verschoben, das du in den Forumeinstellungen festgelegt hast. Wenn diese Option deaktiviert ist, verbleiben Diskussionen im bisherigen <del>Thema.</del><ins>Tag.</ins>

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_label%22)

> Move discussions to quarantined tag

```diff
-Diskussion zu Quarantäne-Tag verschieben
+Diskussion in Quarantäne-Tag verschieben
```

Diskussion <del>zu</del><ins>in</ins> Quarantäne-Tag verschieben

#### [`fof-anti-spam.forum.spammer_modal.process_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/de/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.process_button%22)

> Process

```diff
-Prozess
+Aktionen anwenden
```


### `fof-badges`

#### [`fof-badges.admin.metrics.tag_posts`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.admin.metrics.tag_posts%22)

> Posts in Tag

```diff
-Beiträge zum Thema
+Beiträge im Tag
```

Beiträge <del>zum</del><ins>im</ins> <del>Thema</del><ins>Tag</ins>

#### [`fof-badges.admin.recalculate_tab.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_label%22)

> Don't revoke existing badges

```diff
-Verliehene Abzeichen nicht zurück genommen
+Verliehene Abzeichen nicht zurücknehmen
```

Verliehene Abzeichen nicht <del>zurück genommen</del><ins>zurücknehmen</ins>

#### [`fof-badges.admin.trigger_builder.loading_tags`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.admin.trigger_builder.loading_tags%22)

> Loading tags...

```diff
-Themen werden geladen...
+Tags werden geladen...
```

<del>Themen</del><ins>Tags</ins> werden geladen...

#### [`fof-badges.admin.trigger_builder.select_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.admin.trigger_builder.select_tag%22)

> Select a tag...

```diff
-Ein Thema auswählen...
+Ein Tag auswählen...
```

Ein <del>Thema</del><ins>Tag</ins> auswählen...

#### [`fof-badges.admin.trigger_builder.tag_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter_help%22)

> Required when using "Posts in Tag" metric.

```diff
-Erforderlich bei Verwendung der Metrik „Beiträge im Thema“.
+Erforderlich bei Verwendung der Metrik „Beiträge im Tag“.
```

Erforderlich bei Verwendung der Metrik „Beiträge im <del>Thema“.</del><ins>Tag“.</ins>

#### [`fof-badges.admin.validation.tag_required`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.admin.validation.tag_required%22)

> You must select a tag when using the "Posts in Tag" metric.

```diff
-Du musst ein Thema auswählen, wenn du die Metrik „Beiträge im Thema“ verwendest.
+Du musst ein Tag auswählen, wenn du die Metrik „Beiträge im Tag“ verwendest.
```

Du musst ein <del>Thema</del><ins>Tag</ins> auswählen, wenn du die Metrik „Beiträge im <del>Thema“</del><ins>Tag“</ins> verwendest.


### `fof-best-answer`

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
-{post} in {discussion} nicht mehr als beste Antwort markiert
+Markierung als beste Antwort von {post} in {discussion} entfernt
```

#### [`fof-best-answer.admin.settings.enabled_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22fof-best-answer.admin.settings.enabled_tags_help%22)

> Select which tags, if any, to enable Best Answers for. These tags will become "Q&amp;A" formatted tags, and will have the ability to set Best Answers.

```diff
-Wählen Sie aus, für welche Tags (sofern vorhanden) die Option „Beste Antworten“ aktiviert werden soll. Diese Tags werden zu Tags im „Fragen und Antworten“-Format und können die Option „Beste Antworten“ festlegen.
+Wähle aus, für welche Tags (sofern vorhanden) die Option „Beste Antworten“ aktiviert werden soll. Diese Tags werden zu Tags im „Fragen und Antworten“-Format und können die Option „Beste Antworten“ festlegen.
```

<del>Wählen Sie</del><ins>Wähle</ins> aus, für welche Tags (sofern vorhanden) die Option „Beste Antworten“ aktiviert werden soll. Diese Tags werden zu Tags im „Fragen und Antworten“-Format und können die Option „Beste Antworten“ festlegen.

#### [`fof-best-answer.admin.settings.remind_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22fof-best-answer.admin.settings.remind_tags_help%22)

> Select which tags, if any, to send reminders for. Reminders will only be sent for discussions with these tags.

```diff
-Wählen Sie aus, für welche Tags (sofern vorhanden) Erinnerungen gesendet werden sollen. Erinnerungen werden nur für Diskussionen mit diesen Tags gesendet.
+Wähle aus, für welche Tags (sofern vorhanden) Erinnerungen gesendet werden sollen. Erinnerungen werden nur für Diskussionen mit diesen Tags gesendet.
```

<del>Wählen Sie</del><ins>Wähle</ins> aus, für welche Tags (sofern vorhanden) Erinnerungen gesendet werden sollen. Erinnerungen werden nur für Diskussionen mit diesen Tags gesendet.

#### [`fof-best-answer.admin.settings.tags_info`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22fof-best-answer.admin.settings.tags_info%22)

> When a tag is Best Answer enabled, assign permissions to each user group that may set answers (own discussion, any discussion). Permissions may be assigned globally (for any Best Answer anabled tag), or on a per tag basis.
>

```diff
-Wenn ein Tag „Beste Antwort“ aktiviert ist, weisen Sie jeder Benutzergruppe, die Antworten festlegen darf (eigene Diskussion, beliebige Diskussion), Berechtigungen zu. Berechtigungen können global (für jeden Tag mit aktivierter „Beste Antwort“) oder pro Tag zugewiesen werden.
+Wenn ein Tag „Beste Antwort“ aktiviert ist, weise jeder Benutzergruppe, die Antworten festlegen darf (eigene Diskussion, beliebige Diskussion), Berechtigungen zu. Berechtigungen können global (für jeden Tag mit aktivierter „Beste Antwort“) oder pro Tag zugewiesen werden.

```

Wenn ein Tag „Beste Antwort“ aktiviert ist, <del>weisen Sie</del><ins>weise</ins> jeder Benutzergruppe, die Antworten festlegen darf (eigene Diskussion, beliebige Diskussion), Berechtigungen zu. Berechtigungen können global (für jeden Tag mit aktivierter „Beste Antwort“) oder pro Tag zugewiesen werden.<br />

#### [`fof-best-answer.email.subject.select`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22fof-best-answer.email.subject.select%22)

> Did you manage to get your question answered?

```diff
-Konnten Sie eine Antwort auf Ihre Frage erhalten?
+Konntest du eine Antwort auf deine Frage erhalten?
```

<del>Konnten</del><ins>Konntest</ins> <del>Sie</del><ins>du</ins> eine Antwort auf <del>Ihre</del><ins>deine</ins> Frage erhalten?

#### [`fof-user-directory.lib.sort.least_best_answers`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22fof-user-directory.lib.sort.least_best_answers%22)

> Least best answers

```diff
-Am wenigsten beste Antworten
+Wenigste beste Antworten
```

<del>Am wenigsten</del><ins>Wenigste</ins> beste Antworten

#### [`fof-user-directory.lib.sort.most_best_answers`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/de/?q=context%3A%3D%22fof-user-directory.lib.sort.most_best_answers%22)

> Most best answers

```diff
-Die besten Antworten
+Meisten beste Antworten
```

<del>Die</del><ins>Meisten</ins> <del>besten</del><ins>beste</ins> Antworten


### `fof-blog`

#### [`fof-blog.admin.settings.show_tag_hierarchy_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/de/?q=context%3A%3D%22fof-blog.admin.settings.show_tag_hierarchy_text%22)

> Add spacing to child-categories and give the category-list a hierarchy.

```diff
-Füge Abstände zu den Unterkategorien hinzu und gebe der Kategorieliste eine Hierarchie.
+Füge Abstände zu den Unterkategorien hinzu und gib der Kategorieliste eine Hierarchie.
```

Füge Abstände zu den Unterkategorien hinzu und <del>gebe</del><ins>gib</ins> der Kategorieliste eine Hierarchie.

#### [`fof-blog.forum.composer.enter_message_here`](https://weblate.rob006.net/translate/flarum2/fof-blog/de/?q=context%3A%3D%22fof-blog.forum.composer.enter_message_here%22)

> Enter your message here

```diff
-Gebe deine Nachricht hier ein
+Gib deine Nachricht hier ein
```

<del>Gebe</del><ins>Gib</ins> deine Nachricht hier ein


### `fof-byobu`

#### [`fof-byobu.admin.permission.create_private_discussions_with_blocking_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_blocking_users%22)

> Create private discussions with users that block it

```diff
-Erstelle private Diskussionen mit Nutzern, die du blockierst
+Erstelle private Diskussionen mit Nutzern, die dies blockieren
```

Erstelle private Diskussionen mit Nutzern, die <del>du</del><ins>dies</ins> <del>blockierst</del><ins>blockieren</ins>

#### [`fof-byobu.admin.settings.badge-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de/?q=context%3A%3D%22fof-byobu.admin.settings.badge-icon%22)

> Byobu Discussion Badge

```diff
-Byobu Diskussions Abzeichen
+Byobu-Diskussionmarkierung
```

#### [`fof-byobu.admin.settings.enable-make-public-option-help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de/?q=context%3A%3D%22fof-byobu.admin.settings.enable-make-public-option-help%22)

> Adds the ability for those with permission to remove all recipients, assign a new tag and make the discussion publically visible (accoring to the visibility settings of the chosen tag).

```diff
-Fügt die Möglichkeit für diejenigen hinzu, die die Berechtigung haben, alle Empfänger zu entfernen, ein neues Thema zuzuweisen und die Diskussion öffentlich sichtbar zu machen (gemäß den Sichtbarkeitseinstellungen des ausgewählten Themas).
+Fügt die Möglichkeit für diejenigen hinzu, die die Berechtigung haben, alle Empfänger zu entfernen, ein neues Tag zuzuweisen und die Diskussion öffentlich sichtbar zu machen (gemäß den Sichtbarkeitseinstellungen des ausgewählten Tags).
```

Fügt die Möglichkeit für diejenigen hinzu, die die Berechtigung haben, alle Empfänger zu entfernen, ein neues <del>Thema</del><ins>Tag</ins> zuzuweisen und die Diskussion öffentlich sichtbar zu machen (gemäß den Sichtbarkeitseinstellungen des ausgewählten <del>Themas).</del><ins>Tags).</ins>

#### [`fof-byobu.admin.settings.post-event-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/de/?q=context%3A%3D%22fof-byobu.admin.settings.post-event-icon%22)

> Byobu Post Events

```diff
-Byobu Post Ereignisse
+Byobu Post-Ereignisse
```

Byobu <del>Post Ereignisse</del><ins>Post-Ereignisse</ins>


### `fof-categories`

#### [`fof-categories.admin.help.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/de/?q=context%3A%3D%22fof-categories.admin.help.full_page_desktop%22)

> Should the sidebar nav menu be collapsed to a row (like on the traditional tags page)? This will also hide widgets (such as Friends of Flarum Forum Statistics) from the categories page navbar.

```diff
-Soll das Navigationsmenü in der Seitenleiste auf eine Zeile reduziert werden (wie auf der herkömmlichen Themen-Seite)? Dadurch werden auch Widgets (wie „Friends of Flarum Forum Statistics“) aus der Navigationsleiste der Kategorieseite ausgeblendet.
+Soll das Navigationsmenü in der Seitenleiste auf eine Zeile reduziert werden (wie auf der herkömmlichen Tags-Seite)? Dadurch werden auch Widgets (wie „Friends of Flarum Forum Statistics“) aus der Navigationsleiste der Kategorieseite ausgeblendet.
```

Soll das Navigationsmenü in der Seitenleiste auf eine Zeile reduziert werden (wie auf der herkömmlichen <del>Themen-Seite)?</del><ins>Tags-Seite)?</ins> Dadurch werden auch Widgets (wie „Friends of Flarum Forum Statistics“) aus der Navigationsleiste der Kategorieseite ausgeblendet.

#### [`fof-categories.admin.labels.parent_remove_description`](https://weblate.rob006.net/translate/flarum2/fof-categories/de/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_description%22)

> Hide descriptions for top-level tags?

```diff
-Beschreibungen für Themen der obersten Ebene ausblenden?
+Beschreibungen für Haupt-Tags ausblenden?
```

Beschreibungen für <del>Themen der obersten Ebene</del><ins>Haupt-Tags</ins> ausblenden?

#### [`fof-categories.admin.labels.parent_remove_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/de/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_icon%22)

> Hide icons for top-level tags?

```diff
-Symbole für Themen der obersten Ebene ausblenden?
+Symbole für Haupt-Tags ausblenden?
```

Symbole für <del>Themen der obersten Ebene</del><ins>Haupt-Tags</ins> ausblenden?

#### [`fof-categories.admin.labels.parent_remove_last_discussion`](https://weblate.rob006.net/translate/flarum2/fof-categories/de/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_last_discussion%22)

> Hide most recent discussions for top-level tags?

```diff
-Die neuesten Diskussionen für Themen der obersten Ebene ausblenden?
+Neuesten Diskussionen für Haupt-Tags ausblenden?
```

<del>Die neuesten</del><ins>Neuesten</ins> Diskussionen für<del> Themen der obersten</del> <del>Ebene</del><ins>Haupt-Tags</ins> ausblenden?

#### [`fof-categories.admin.labels.parent_remove_stats`](https://weblate.rob006.net/translate/flarum2/fof-categories/de/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_stats%22)

> Hide stats for top-level tags?

```diff
-Statistiken für Top-Level-Themen ausblenden?
+Statistiken für Haupt-Tags ausblenden?
```

Statistiken für <del>Top-Level-Themen</del><ins>Haupt-Tags</ins> ausblenden?


### `fof-checklist`

#### [`fof-checklist.admin.settings.cross_out_completed_items`](https://weblate.rob006.net/translate/flarum2/fof-checklist/de/?q=context%3A%3D%22fof-checklist.admin.settings.cross_out_completed_items%22)

> Cross out completed checklist items?

```diff
-Abgearbeitete Punkte auf der Checkliste durchstreichen?
+Abgeschlossene Punkte auf der Checkliste durchstreichen?
```

<del>Abgearbeitete</del><ins>Abgeschlossene</ins> Punkte auf der Checkliste durchstreichen?


### `fof-default-group`

#### [`fof-default-group.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-default-group/de/?q=context%3A%3D%22fof-default-group.admin.settings.info%22)

> Below you can select the group to assign a user when their account is activated.

```diff
-Unten Kannst Du die Gruppe auswählen, die einem Benutzer zugewiesen werden soll, wenn sein Konto aktiviert wird.
+Wähle die Gruppe aus, die einem Benutzer zugewiesen werden soll, wenn dessen Konto aktiviert wird.
```

<del>Unten Kannst Du</del><ins>Wähle</ins> die Gruppe <del>auswählen,</del><ins>aus,</ins> die einem Benutzer zugewiesen werden soll, wenn <del>sein</del><ins>dessen</ins> Konto aktiviert wird.


### `fof-default-user-preferences`

#### [`fof-default-user-preferences.admin.settings.followAfterReply-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply-help%22)

> When enabled, new users will automatically follow discussions they reply to or comment on.

```diff
-Wenn diese Option aktiviert ist, folgen neue Benutzer automatisch Diskussionen, auf die sie antworten oder die sie kommentieren.
+Wenn aktiviert, folgen neue Benutzer automatisch Diskussionen, auf die sie antworten oder die sie kommentieren.
```

Wenn <del>diese Option aktiviert ist,</del><ins>aktiviert,</ins> folgen neue Benutzer automatisch Diskussionen, auf die sie antworten oder die sie kommentieren.

#### [`fof-default-user-preferences.admin.settings.groupMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.groupMentioned%22)

> Group mentioned email

```diff
-Gruppe erwähnt E-Mail
+E-Mail bei Gruppenerwähnung
```

#### [`fof-default-user-preferences.admin.settings.indexProfile-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.indexProfile-help%22)

> When enabled, new users will allow search engines to index their profile page, unless blocked by other site or extension settings.

```diff
-Wenn diese Option aktiviert ist, können die Profilseiten neuer Benutzer von Suchmaschinen indiziert werden, außer andere Seiten- oder Erweiterungseinstellungen unterbinden dies.
+Wenn aktiviert, können die Profilseiten neuer Benutzer von Suchmaschinen indiziert werden, außer andere Seiten- oder Erweiterungseinstellungen unterbinden dies.
```

Wenn <del>diese Option aktiviert ist,</del><ins>aktiviert,</ins> können die Profilseiten neuer Benutzer von Suchmaschinen indiziert werden, außer andere Seiten- oder Erweiterungseinstellungen unterbinden dies.

#### [`fof-default-user-preferences.admin.settings.postMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned%22)

> Post mentioned email

```diff
-Poste erwähnte E-Mail
+E-Mail bei Beitragserwähnung
```

#### [`fof-default-user-preferences.admin.settings.postMentioned-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned-help%22)

> When enabled, new users will automatically opt into receiving an email notification when one of their posts is mentioned.

```diff
-Wenn diese Option aktiviert ist, entscheiden sich neue Benutzer automatisch dafür, eine E-Mail-Benachrichtigung zu erhalten, wenn einer ihrer Beiträge erwähnt wird.
+Wenn aktiviert, entscheiden sich neue Benutzer automatisch dafür, eine E-Mail-Benachrichtigung zu erhalten, wenn einer ihrer Beiträge erwähnt wird.
```

Wenn <del>diese Option aktiviert ist,</del><ins>aktiviert,</ins> entscheiden sich neue Benutzer automatisch dafür, eine E-Mail-Benachrichtigung zu erhalten, wenn einer ihrer Beiträge erwähnt wird.

#### [`fof-default-user-preferences.admin.settings.userMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned%22)

> User mentioned email

```diff
-Vom Benutzer erwähnte E-Mail
+E-Mail bei Benutzererwähnung
```

#### [`fof-default-user-preferences.admin.settings.userMentioned-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/de/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned-help%22)

> When enabled, new users will automatically opt into receiving an email notification when they are @mentioned.

```diff
-Wenn diese Option aktiviert ist, entscheiden sich neue Benutzer automatisch für den Erhalt einer E-Mail-Benachrichtigung, wenn sie @erwähnt werden.
+Wenn aktiviert, entscheiden sich neue Benutzer automatisch für den Erhalt einer E-Mail-Benachrichtigung, wenn sie @erwähnt werden.
```

Wenn <del>diese Option aktiviert ist,</del><ins>aktiviert,</ins> entscheiden sich neue Benutzer automatisch für den Erhalt einer E-Mail-Benachrichtigung, wenn sie @erwähnt werden.


### `fof-discussion-templates`

#### [`fof-discussion-templates.admin.settings.append_template_on_tag_change`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de/?q=context%3A%3D%22fof-discussion-templates.admin.settings.append_template_on_tag_change%22)

> Append template on tag change?

```diff
-Vorlage bei Themen-Änderung anhängen?
+Vorlage bei Tag-Änderung anhängen?
```

Vorlage bei <del>Themen-Änderung</del><ins>Tag-Änderung</ins> anhängen?

#### [`fof-discussion-templates.admin.settings.append_template_on_tag_change_help`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de/?q=context%3A%3D%22fof-discussion-templates.admin.settings.append_template_on_tag_change_help%22)

> When tags are changed, should the new tag's template be appended even if the user has already started writing? Regardless of this setting, if tags are changed and the user has not made modifications, the template will be switched.

```diff
-Soll beim Ändern von Themen die Vorlage des neuen Themas angehängt werden, auch wenn der Benutzer bereits mit dem Schreiben begonnen hat? Unabhängig von dieser Einstellung wird die Vorlage gewechselt, wenn Themen geändert werden und der Benutzer keine Änderungen vorgenommen hat.
+Soll beim Ändern von Tags die Vorlage des neuen Tags angehängt werden, auch wenn der Benutzer bereits mit dem Schreiben begonnen hat? Unabhängig von dieser Einstellung wird die Vorlage gewechselt, wenn Tags geändert werden und der Benutzer keine Änderungen vorgenommen hat.
```

Soll beim Ändern von <del>Themen</del><ins>Tags</ins> die Vorlage des neuen <del>Themas</del><ins>Tags</ins> angehängt werden, auch wenn der Benutzer bereits mit dem Schreiben begonnen hat? Unabhängig von dieser Einstellung wird die Vorlage gewechselt, wenn <del>Themen</del><ins>Tags</ins> geändert werden und der Benutzer keine Änderungen vorgenommen hat.

#### [`fof-discussion-templates.admin.settings.no_tag_template`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de/?q=context%3A%3D%22fof-discussion-templates.admin.settings.no_tag_template%22)

> Default template (used when discussion started with no tags selected):

```diff
-Standardvorlage (wird verwendet, wenn die Diskussion ohne ausgewählte Themen gestartet wurde):
+Standardvorlage (wird verwendet, wenn die Diskussion ohne ausgewählte Tags gestartet wurde):
```

Standardvorlage (wird verwendet, wenn die Diskussion ohne ausgewählte <del>Themen</del><ins>Tags</ins> gestartet wurde):

#### [`fof-discussion-templates.admin.tag_template_modal.customize_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de/?q=context%3A%3D%22fof-discussion-templates.admin.tag_template_modal.customize_text%22)

> Manage a template for new discussions in this tag.

```diff
-Verwalte eine Vorlage für neue Diskussionen in diesem Thema.
+Verwalte eine Vorlage für neue Diskussionen in diesem Tag.
```

Verwalte eine Vorlage für neue Diskussionen in diesem <del>Thema.</del><ins>Tag.</ins>

#### [`fof-discussion-templates.admin.tags.tag_template_text`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/de/?q=context%3A%3D%22fof-discussion-templates.admin.tags.tag_template_text%22)

> Manage a template for new discussions in this tag.

```diff
-Verwalte eine Vorlage für neue Diskussionen in diesem Thema.
+Verwalte eine Vorlage für neue Diskussionen in diesem Tag.
```

Verwalte eine Vorlage für neue Diskussionen in diesem <del>Thema.</del><ins>Tag.</ins>


### `fof-doorman`

#### [`fof-doorman.admin.ref.fields.key.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/de/?q=context%3A%3D%22fof-doorman.admin.ref.fields.key.label%22)

> Key

```diff
-xSchlüssel
+Schlüssel
```


### `fof-filter`

#### [`fof-filter.admin.filter_label`](https://weblate.rob006.net/translate/flarum2/fof-filter/de/?q=context%3A%3D%22fof-filter.admin.filter_label%22)

> Strings to filter

```diff
-=> fof-filter.ref.strings_to_filter
+Zu filternde Zeichenfolgen
```

#### [`fof-filter.admin.input.email_label`](https://weblate.rob006.net/translate/flarum2/fof-filter/de/?q=context%3A%3D%22fof-filter.admin.input.email_label%22)

> Email Settings

```diff
-E-Mail Einstellungen
+E-Mail-Einstellungen
```

#### [`fof-filter.admin.input.filter_title`](https://weblate.rob006.net/translate/flarum2/fof-filter/de/?q=context%3A%3D%22fof-filter.admin.input.filter_title%22)

> Strings to filter

```diff
-=> fof-filter.ref.strings_to_filter
+Zu filternde Zeichenfolgen
```

#### [`fof-filter.admin.input.switch.email`](https://weblate.rob006.net/translate/flarum2/fof-filter/de/?q=context%3A%3D%22fof-filter.admin.input.switch.email%22)

> Email user when post is filtered

```diff
-Sende E-Mail an Verfasser wenn Beitrag gefiltert wird
+Sende E-Mail an Verfasser, wenn Beitrag gefiltert wird
```

Sende E-Mail an <del>Verfasser</del><ins>Verfasser,</ins> wenn Beitrag gefiltert wird


### `fof-gamification`

#### [`fof-gamification.admin.page.ranks.help.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.admin.page.ranks.help.help%22)

> Input the required number of upvotes, the name of the rank, and the hex color of the rank

```diff
-Gebe die gewünschte Anzahl an Upvotes, den Namen des Ranges und die Hex-Farbe des Ranges ein
+Gib die gewünschte Anzahl an Upvotes, den Namen des Ranges und die Hex-Farbe des Ranges ein
```

<del>Gebe</del><ins>Gib</ins> die gewünschte Anzahl an Upvotes, den Namen des Ranges und die Hex-Farbe des Ranges ein

#### [`fof-gamification.admin.page.votes.icon_help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.admin.page.votes.icon_help%22)

> Input any Font-Awesome icon that is suffixed with -up and -down. Examples: arrow, thumbs, chevron

```diff
-Gebe ein beliebiges Font-Awesome-Icon mit den Endungen -up und -down ein. Beispiele: arrow, thumbs, chevron
+Gib ein beliebiges Font-Awesome-Symbol mit den Endungen -up und -down ein. Beispiele: arrow, thumbs, chevron
```

<del>Gebe</del><ins>Gib</ins> ein beliebiges <del>Font-Awesome-Icon</del><ins>Font-Awesome-Symbol</ins> mit den Endungen -up und -down ein. Beispiele: arrow, thumbs, chevron

#### [`fof-gamification.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.modal.title%22)

> Voters

```diff
-Wähler
+Abstimmende
```

#### [`fof-gamification.forum.notification.downvote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.notification.downvote%22)

> {username} downvoted your post

```diff
-{username} hat deinen Beitrag Downgevoted
+{username} hat deinen Beitrag downgevoted
```

{username} hat deinen Beitrag <del>Downgevoted</del><ins>downgevoted</ins>

#### [`fof-gamification.forum.notification.upvote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.notification.upvote%22)

> {username} upvoted your post

```diff
-{username} hat deinen Beitrag Upgevoted
+{username} hat deinen Beitrag upgevoted
```

{username} hat deinen Beitrag <del>Upgevoted</del><ins>upgevoted</ins>

#### [`fof-gamification.forum.ranking.name`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.ranking.name%22)

> User

```diff
-Nutzer
+Benutzer
```

#### [`fof-gamification.forum.voters.label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.voters.label%22)

> Voters

```diff
-Noch keine Wähler
+Abstimmende
```

#### [`fof-gamification.forum.voters.label_none`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.voters.label_none%22)

> No voters

```diff
-Keine Wähler
+Keine Abstimmenden
```

Keine <del>Wähler</del><ins>Abstimmenden</ins>

#### [`fof-gamification.forum.voters.none`](https://weblate.rob006.net/translate/flarum2/fof-gamification/de/?q=context%3A%3D%22fof-gamification.forum.voters.none%22)

> No voters yet

```diff
-Noch keine Wähler
+Noch keine Abstimmenden
```

Noch keine <del>Wähler</del><ins>Abstimmenden</ins>


### `fof-geoip`

#### [`fof-geoip.admin.settings.service_ipapi-pro_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/de/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi-pro_label%22)

> IP Api Pro

```diff
-IP Api Pro
+IP API Pro
```

IP <del>Api</del><ins>API</ins> Pro

#### [`fof-geoip.lib.copy_ip_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/de/?q=context%3A%3D%22fof-geoip.lib.copy_ip_label%22)

> Copy IP to clipboard

```diff
-IP-Adresse in die Zwischenablage kopieren
+IP-Adresse in Zwischenablage kopieren
```

IP-Adresse in <del>die </del>Zwischenablage kopieren


### `fof-horizon`

#### [`fof-horizon.admin.stats.data.jobs-per-minute`](https://weblate.rob006.net/translate/flarum2/fof-horizon/de/?q=context%3A%3D%22fof-horizon.admin.stats.data.jobs-per-minute%22)

> Jobs Per Minute

```diff
-Jobs pro Minute
+Aufträge pro Minute
```

<del>Jobs</del><ins>Aufträge</ins> pro Minute


### `fof-impersonate`

#### [`fof-impersonate.lib.modal.placeholder_optional`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/de/?q=context%3A%3D%22fof-impersonate.lib.modal.placeholder_optional%22)

> (Optional) Provide your reason for switching to this user

```diff
-(Optional) Gib einen Grund für den Wechsel zu diesem Benutzer an.
+(Optional) Gib einen Grund für den Wechsel zu diesem Benutzer an
```

(Optional) Gib einen Grund für den Wechsel zu diesem Benutzer <del>an.</del><ins>an</ins>


### `fof-links`

#### [`fof-links.admin.edit_link.visibility.help`](https://weblate.rob006.net/translate/flarum2/fof-links/de/?q=context%3A%3D%22fof-links.admin.edit_link.visibility.help%22)

> Links by default are visible to only &lt;code&gt;{admin}&lt;/code&gt; users. Adjust the permissions to specify who can see this link.

```diff
-Links sind standardmässig nur für <code>{admin}</code>-Nutzer sichtbar. Passen Sie die Berechtigungen an, um festzulegen, wer diesen Link sehen kann.
+Links sind standardmässig nur für <code>{admin}</code>-Nutzer sichtbar. Passe die Berechtigungen an, um festzulegen, wer diesen Link sehen kann.
```

Links sind standardmässig nur für &lt;code&gt;{admin}&lt;/code&gt;-Nutzer sichtbar. <del>Passen Sie</del><ins>Passe</ins> die Berechtigungen an, um festzulegen, wer diesen Link sehen kann.

#### [`fof-links.admin.edit_link.visibility.help-disabled`](https://weblate.rob006.net/translate/flarum2/fof-links/de/?q=context%3A%3D%22fof-links.admin.edit_link.visibility.help-disabled%22)

> Save the link before changing visibility settings.

```diff
-Speichern Sie den Link, um die Sichtbarkeit anpassen zu können.
+Speichere den Link, um die Sichtbarkeit anpassen zu können.
```

<del>Speichern Sie</del><ins>Speichere</ins> den Link, um die Sichtbarkeit anpassen zu können.


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/de/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
-Überprüfe die unterstützten <a>Laravel-Validierungsregeln</a>. ZB: "string|min:5" oder "url".
+Überprüfe die unterstützten <a>Laravel-Validierungsregeln</a>. Z. B.: "string|min:5" oder "url".

```

Überprüfe die unterstützten &lt;a&gt;Laravel-Validierungsregeln&lt;/a&gt;. <del>ZB:</del><ins>Z. B.:</ins> "string\|min:5" oder "url".<br />

#### [`fof-masquerade.forum.fields.select.none-required`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/de/?q=context%3A%3D%22fof-masquerade.forum.fields.select.none-required%22)

> Please select an option (required)

```diff
-Bitte wähle eine Option (required)
+Bitte wähle eine Option (erforderlich)
```

Bitte wähle eine Option <del>(required)</del><ins>(erforderlich)</ins>


### `fof-merge-discussions`

#### [`fof-merge-discussions.admin.settings.search_result_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_help%22)

> How many discussions should be returned when searching within the \`Merge Discussions\` modal.

```diff
-Wie viele Diskussionen zurückgegeben werden sollen, wenn im Modal `Diskussionen zusammenführen` gesucht wird.
+Wie viele Diskussionen zurückgegeben werden sollen, wenn im Modal „Diskussionen zusammenführen“ gesucht wird.
```

Wie viele Diskussionen zurückgegeben werden sollen, wenn im Modal <del>\`Diskussionen</del><ins>„Diskussionen</ins> <del>zusammenführen\`</del><ins>zusammenführen“</ins> gesucht wird.

#### [`fof-merge-discussions.admin.settings.search_result_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_label%22)

> Merge Discussion Search Limit

```diff
-Suchlimit für Diskussionen zusammenführen
+Suchlimit für das Zusammenführen von Diskussionen
```

Suchlimit für <del>Diskussionen</del><ins>das</ins> <del>zusammenführen</del><ins>Zusammenführen von Diskussionen</ins>

#### [`fof-merge-discussions.email.merged.subject`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de/?q=context%3A%3D%22fof-merge-discussions.email.merged.subject%22)

> Your discussion "{merged\_discussion\_title}" was merged

```diff
-Deine Diskussion "{merged_discussion_title}" wurde zusammengeführt
+Deine Diskussion „{merged_discussion_title}“ wurde zusammengeführt
```

Deine Diskussion <del>"{merged\_discussion\_title}"</del><ins>„{merged\_discussion\_title}“</ins> wurde zusammengeführt

#### [`fof-merge-discussions.forum.modal.ordering_heading`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_heading%22)

> Merge ordering

```diff
-Bestellung zusammenführen
+Sortierung beim Zusammenführen
```

#### [`fof-merge-discussions.forum.modal.type_heading`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/de/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_heading%22)

> Merge type

```diff
-Typ zusammenführen
+Art der Zusammenführung
```


### `fof-moderator-notes`

#### [`fof-moderator-notes.forum.moderatorNotes.input_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/de/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.input_heading%22)

> Enter your notes for &lt;strong&gt;{username}&lt;/strong&gt;, (markdown is supported)

```diff
-Gebe deine Notizen für <strong>{username}</strong> ein, (Markdown wird unterstützt)
+Gib deine Notizen für <strong>{username}</strong> ein, (Markdown wird unterstützt)
```

<del>Gebe</del><ins>Gib</ins> deine Notizen für &lt;strong&gt;{username}&lt;/strong&gt; ein, (Markdown wird unterstützt)


### `fof-moderator-warnings`

#### [`fof-moderator-warnings.forum.validation.public_comment_required`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de/?q=context%3A%3D%22fof-moderator-warnings.forum.validation.public_comment_required%22)

> You most provide a public comment.

```diff
-Du gibst meistens einen öffentlichen Kommentar ab.
+Du musst eine öffentliche Begründung abgeben.
```

Du <del>gibst meistens</del><ins>musst</ins> <del>einen</del><ins>eine</ins> <del>öffentlichen</del><ins>öffentliche</ins> <del>Kommentar</del><ins>Begründung</ins> <del>ab.</del><ins>abgeben.</ins>

#### [`fof-moderator-warnings.forum.warning_list.warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings%22)

> {strikes, plural, one {Moderator Warnings: # Strike Received} other {Moderator Warnings: # Strikes Received}}

```diff
-{strikes, plural, one {Moderator Verwarnungen: # Strike erhalten} other {Moderator Verwarnugen: # Strikes erhalten}}
+{strikes, plural, one {Moderator-Verwarnungen: # Strike erhalten} other {Moderator-Verwarnugen: # Strikes erhalten}}
```

{strikes, plural, one <del>{Moderator Verwarnungen:</del><ins>{Moderator-Verwarnungen:</ins> # Strike erhalten} other<del> {Moderator</del> <del>Verwarnugen:</del><ins>{Moderator-Verwarnugen:</ins> # Strikes erhalten}}

#### [`fof-moderator-warnings.forum.warning_list.warnings_no_strikes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings_no_strikes%22)

> Moderator Warnings: No Strikes Received

```diff
-Moderator Warnungen: Keine Strikes erhalten
+Moderator-Verwarnungen: Keine Strikes erhalten
```

<del>Moderator Warnungen:</del><ins>Moderator-Verwarnungen:</ins> Keine Strikes erhalten

#### [`fof-moderator-warnings.forum.warning_modal.private_comment_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.private_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will ONLY be visible to other moderators.

```diff
-Wieso erhält <strong>{username}</strong> diese Warnungen? Diese Kommentare sind NUR für andere Moderatoren sichtbar.
+Wieso erhält <strong>{username}</strong> diese Verwarnungen? Diese Kommentare sind NUR für andere Moderatoren sichtbar.
```

Wieso erhält &lt;strong&gt;{username}&lt;/strong&gt; diese <del>Warnungen?</del><ins>Verwarnungen?</ins> Diese Kommentare sind NUR für andere Moderatoren sichtbar.

#### [`fof-moderator-warnings.forum.warning_modal.public_comment_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.public_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will be visible to the user and other moderators.

```diff
-Wieso erhält <strong>{username}</strong> diese Warnungen? Diese Kommentare sind für den Benutzer und andere Moderatoren sichtbar.
+Wieso erhält <strong>{username}</strong> diese Verwarnungen? Diese Kommentare sind für den Benutzer und andere Moderatoren sichtbar.
```

Wieso erhält &lt;strong&gt;{username}&lt;/strong&gt; diese <del>Warnungen?</del><ins>Verwarnungen?</ins> Diese Kommentare sind für den Benutzer und andere Moderatoren sichtbar.

#### [`fof-moderator-warnings.forum.warning_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/de/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.submit_button%22)

> Save warning

```diff
-Warnung sichern
+Verwarnung speichern
```


### `fof-move-posts`

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/de/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
-Du bist dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem du den Titel, die Themen oder andere Attribute änderst. Möchtest du fortfahren?
+Du bist dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem du den Titel, die Tags oder andere Attribute änderst. Möchtest du fortfahren?
```

Du bist dabei, alle Beiträge aus dieser Diskussion in eine neue zu verschieben. In den meisten Fällen ist es sinnvoller, stattdessen die bestehende Diskussion zu bearbeiten, beispielsweise indem du den Titel, die <del>Themen</del><ins>Tags</ins> oder andere Attribute änderst. Möchtest du fortfahren?

#### [`fof-move-posts.forum.modal.discussion_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/de/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_help%22)

> The tags of the source discussion will be used, and can be changed after creation.

```diff
-Es werden die Themen der ursprünglichen Diskussion verwendet. Diese können nach der Erstellung geändert werden.
+Es werden die Tags der ursprünglichen Diskussion verwendet. Diese können nach der Erstellung geändert werden.
```

Es werden die <del>Themen</del><ins>Tags</ins> der ursprünglichen Diskussion verwendet. Diese können nach der Erstellung geändert werden.


### `fof-oauth`

#### [`fof-oauth.ref.settings.app_id`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de/?q=context%3A%3D%22fof-oauth.ref.settings.app_id%22)

> App ID

```diff
-App ID
+App-ID
```

#### [`fof-oauth.ref.settings.app_secret`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de/?q=context%3A%3D%22fof-oauth.ref.settings.app_secret%22)

> App Secret

```diff
-App Secret
+App-Secret
```

#### [`fof-oauth.ref.settings.client_secret`](https://weblate.rob006.net/translate/flarum2/fof-oauth/de/?q=context%3A%3D%22fof-oauth.ref.settings.client_secret%22)

> Client Secret

```diff
-Client Secret
+Client-Secret
```


### `fof-polls`

#### [`fof-polls.forum.modal.error`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.modal.error%22)

> =&gt; core.lib.error.generic\_message

```diff
-Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut
+=> core.lib.error.generic_message
```

#### [`fof-polls.forum.modal.poll_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.help%22)

> Upload an image to be displayed alongside the poll (optional).

```diff
-Laden Sie ein Bild hoch, das neben der Umfrage angezeigt werden soll (optional).
+Lade ein Bild hoch, das neben der Umfrage angezeigt werden soll (optional).
```

<del>Laden Sie</del><ins>Lade</ins> ein Bild hoch, das neben der Umfrage angezeigt werden soll (optional).

#### [`fof-polls.forum.modal.poll_option_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.modal.poll_option_image.help%22)

> Upload an image to be displayed alongside the poll answer (optional).

```diff
-Laden Sie ein Bild hoch, das neben der Umfrage-Antwort angezeigt werden soll (optional).
+Lade ein Bild hoch, das neben der Umfrage-Antwort angezeigt werden soll (optional).
```

<del>Laden Sie</del><ins>Lade</ins> ein Bild hoch, das neben der Umfrage-Antwort angezeigt werden soll (optional).

#### [`fof-polls.forum.poll_form.error`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_form.error%22)

> There was an error saving the poll, please contact any administrator.

```diff
-Beim Speichern der Umfrage ist ein Fehler aufgetreten, bitte kontaktieren Sie einen Administrator.
+Beim Speichern der Umfrage ist ein Fehler aufgetreten, bitte kontaktiere einen Administrator.
```

Beim Speichern der Umfrage ist ein Fehler aufgetreten, bitte <del>kontaktieren Sie</del><ins>kontaktiere</ins> einen Administrator.

#### [`fof-polls.forum.poll_groups.controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/de/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_confirmation%22)

> Are you sure you want to delete this poll group?

```diff
-Sind Sie sicher, dass Sie diese Umfrage-Gruppe löschen möchten?
+Möchtest du diese Umfrage-Gruppe wirklich löschen?
```

<del>Sind Sie sicher, dass</del><ins>Möchtest</ins> <del>Sie</del><ins>du</ins> diese Umfrage-Gruppe <del>löschen</del><ins>wirklich</ins> <del>möchten?</del><ins>löschen?</ins>


### `fof-reactions`

#### [`fof-reactions.admin.page.settings.integrations.gamification.downvoteHelptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/de/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.gamification.downvoteHelptext%22)

> Enter the identifier of the reaction you would like to automatically convert into an downvote

```diff
-Gebe den Bezeichner der Reaktion ein, die du automatisch in ein Downvote umwandeln möchtest
+Gib den Bezeichner der Reaktion ein, die du automatisch in ein Downvote umwandeln möchtest
```

<del>Gebe</del><ins>Gib</ins> den Bezeichner der Reaktion ein, die du automatisch in ein Downvote umwandeln möchtest

#### [`fof-reactions.admin.page.settings.integrations.gamification.upvoteHelptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/de/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.gamification.upvoteHelptext%22)

> Enter the identifier of the reaction you would like to automatically convert into an upvote

```diff
-Gebe den Bezeichner der Reaktion ein, die du automatisch in ein Upvote umwandeln möchtest
+Gib den Bezeichner der Reaktion ein, die du automatisch in ein Upvote umwandeln möchtest
```

<del>Gebe</del><ins>Gib</ins> den Bezeichner der Reaktion ein, die du automatisch in ein Upvote umwandeln möchtest

#### [`fof-reactions.admin.page.settings.integrations.likes.Helptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/de/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.likes.Helptext%22)

> Enter the identifier of the reaction you would like to automatically convert into a like

```diff
-Gebe den Bezeichner der Reaktion ein, die du automatisch in ein Gefällt mir umwandeln möchtest
+Gib den Bezeichner der Reaktion ein, die du automatisch in ein Gefällt mir umwandeln möchtest
```

<del>Gebe</del><ins>Gib</ins> den Bezeichner der Reaktion ein, die du automatisch in ein Gefällt mir umwandeln möchtest


### `fof-seo`

#### [`fof-seo.admin.pages.sitemap.which_extension_details`](https://weblate.rob006.net/translate/flarum2/fof-seo/de/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_details%22)

> This extension will make sure crawlers will find your forum &lt;b&gt;discussions&lt;/b&gt;, &lt;b&gt;tags&lt;/b&gt; (when extension is enabled) and &lt;b&gt;Pages&lt;/b&gt; extension (when extension is installed and enabled). It will automatically make an sitemap.xml available.

```diff
-Diese Erweiterung sorgt dafür, dass Crawler deine <b>Diskussionen</b>, <b>Themen</b> (sofern die Erweiterung aktiviert ist) und <b>Seiten</b> (sofern die Erweiterung installiert und aktiviert ist) finden. Außerdem wird automatisch eine sitemap.xml bereitgestellt.
+Diese Erweiterung sorgt dafür, dass Crawler deine <b>Diskussionen</b>, <b>Tags</b> (sofern die Erweiterung aktiviert ist) und <b>Seiten</b> (sofern die Erweiterung installiert und aktiviert ist) finden. Außerdem wird automatisch eine sitemap.xml bereitgestellt.
```

Diese Erweiterung sorgt dafür, dass Crawler deine &lt;b&gt;Diskussionen&lt;/b&gt;, <del>&lt;b&gt;Themen&lt;/b&gt;</del><ins>&lt;b&gt;Tags&lt;/b&gt;</ins> (sofern die Erweiterung aktiviert ist) und &lt;b&gt;Seiten&lt;/b&gt; (sofern die Erweiterung installiert und aktiviert ist) finden. Außerdem wird automatisch eine sitemap.xml bereitgestellt.

#### [`fof-seo.admin.settings.indexing.tags_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/de/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_button%22)

> Select tags

```diff
-Themen auswählen
+Tags auswählen
```

<del>Themen</del><ins>Tags</ins> auswählen

#### [`fof-seo.admin.settings.indexing.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/de/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_help%22)

> Discussions in the selected tags (and those tags' own listing pages) will be kept out of search results with a 'noindex' meta tag. Links are still followed. Selecting a parent tag also covers its child tags.

```diff
-Beiträge in den ausgewählten Themen (sowie auf den jeweiligen Themen-Seiten) werden mithilfe eines „noindex“-Meta-Tags aus den Suchergebnissen ausgeschlossen. Links werden weiterhin verfolgt. Die Auswahl eines übergeordneten Themas umfasst auch dessen untergeordnete Themen.
+Beiträge in den ausgewählten Tags (sowie auf den jeweiligen Tag-Seiten) werden mithilfe eines „noindex“-Meta-Tags aus den Suchergebnissen ausgeschlossen. Links werden weiterhin verfolgt. Die Auswahl eines übergeordneten Tags umfasst auch dessen untergeordnete Tags.
```

Beiträge in den ausgewählten <del>Themen</del><ins>Tags</ins> (sowie auf den jeweiligen <del>Themen-Seiten)</del><ins>Tag-Seiten)</ins> werden mithilfe eines „noindex“-Meta-Tags aus den Suchergebnissen ausgeschlossen. Links werden weiterhin verfolgt. Die Auswahl eines übergeordneten <del>Themas</del><ins>Tags</ins> umfasst auch dessen untergeordnete <del>Themen.</del><ins>Tags.</ins>


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.exclude_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/de/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags_help%22)

> By default any tag visible to guests will be indexed

```diff
-Standardmäßig werden alle Themen, die für Gäste sichtbar ist, indiziert
+Standardmäßig werden alle Tags, die für Gäste sichtbar ist, indiziert
```

Standardmäßig werden alle <del>Themen,</del><ins>Tags,</ins> die für Gäste sichtbar ist, indiziert

#### [`fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/de/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_help%22)

> The minimum number of discussions a tag must have for it to be included in the sitemap.

```diff
-Die Mindestanzahl an Diskussionen, über die ein Thema verfügen muss, damit es in die Sitemap aufgenommen wird.
+Die Mindestanzahl an Diskussionen, über die ein Tag verfügen muss, damit es in die Sitemap aufgenommen wird.
```

Die Mindestanzahl an Diskussionen, über die ein <del>Thema</del><ins>Tag</ins> verfügen muss, damit es in die Sitemap aufgenommen wird.

#### [`fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/de/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_label%22)

> Tag: Minimum number of discussions

```diff
-Thema: Mindestanzahl an Diskussionen
+Tag: Mindestanzahl an Diskussionen
```

<del>Thema:</del><ins>Tag:</ins> Mindestanzahl an Diskussionen


### `fof-socialprofile`

#### [`fof-socialprofile.forum.edit.add`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/de/?q=context%3A%3D%22fof-socialprofile.forum.edit.add%22)

> Add buttons to your social media

```diff
-Füge Schaltflächen zu Deinen sozialen Medien hinzu
+Füge Schaltflächen zu deinen sozialen Medien hinzu
```

Füge Schaltflächen zu <del>Deinen</del><ins>deinen</ins> sozialen Medien hinzu

#### [`fof-socialprofile.forum.edit.edit`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/de/?q=context%3A%3D%22fof-socialprofile.forum.edit.edit%22)

> Edit your social media buttons

```diff
-Bearbeiten Deine Social-Media-Buttons
+Bearbeite deine Social-Media-Buttons
```

<del>Bearbeiten</del><ins>Bearbeite</ins> <del>Deine</del><ins>deine</ins> Social-Media-Buttons


### `fof-split`

#### [`fof-split.admin.permissions.split_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-split/de/?q=context%3A%3D%22fof-split.admin.permissions.split_discussion_label%22)

> Split posts from discussions

```diff
-Teile Beiträge von Diskussionen auf
+Beiträge von Diskussionen aufteilen
```

<del>Teile </del>Beiträge von Diskussionen <del>auf</del><ins>aufteilen</ins>


### `fof-synopsis`

#### [`fof-synopsis.admin.settings.excerpt-length.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/de/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-length.help%22)

> How many characters should be displayed from the post.

```diff
-Wie viele Zeichen sollen aus dem Beitrag angezeigt werden.
+Wie viele Zeichen aus dem Beitrag angezeigt werden sollen.
```

Wie viele Zeichen <del>sollen </del>aus dem Beitrag angezeigt <del>werden.</del><ins>werden sollen.</ins>

#### [`fof-synopsis.admin.settings.rich-excerpts.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/de/?q=context%3A%3D%22fof-synopsis.admin.settings.rich-excerpts.help%22)

> When enabled, images, embeds and other non text elements may be included in the synopsis

```diff
-Wenn diese Option aktiviert ist, können Bilder, Einbettungen und andere Nicht-Text-Elemente in die Zusammenfassung aufgenommen werden
+Wenn aktiviert, können Bilder, Einbettungen und andere Nicht-Text-Elemente in die Zusammenfassung aufgenommen werden
```

Wenn <del>diese Option aktiviert ist,</del><ins>aktiviert,</ins> können Bilder, Einbettungen und andere Nicht-Text-Elemente in die Zusammenfassung aufgenommen werden

#### [`fof-synopsis.admin.settings.rich-excerpts.label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/de/?q=context%3A%3D%22fof-synopsis.admin.settings.rich-excerpts.label%22)

> Display excerpts using rich content

```diff
-Zeige Auszüge mit Rich Content an
+Auszüge mit Rich Content anzeigen
```

<del>Zeige </del>Auszüge mit Rich Content <del>an</del><ins>anzeigen</ins>


### `fof-terms`

#### [`fof-terms.admin.policies.name`](https://weblate.rob006.net/translate/flarum2/fof-terms/de/?q=context%3A%3D%22fof-terms.admin.policies.name%22)

> Name

```diff
-Namen
+Name
```


### `fof-upload`

#### [`fof-upload.admin.labels.inspect-mime`](https://weblate.rob006.net/translate/flarum2/fof-upload/de/?q=context%3A%3D%22fof-upload.admin.labels.inspect-mime%22)

> Test file MIME type

```diff
-MIME-Typ der Testdatei
+MIME-Typ einer Datei testen
```

MIME-Typ <del>der</del><ins>einer</ins> <del>Testdatei</del><ins>Datei testen</ins>

#### [`fof-upload.forum.buttons.cancel`](https://weblate.rob006.net/translate/flarum2/fof-upload/de/?q=context%3A%3D%22fof-upload.forum.buttons.cancel%22)

> Cancel

```diff
-Abbruch
+Abbrechen
```


### `fof-user-directory`

#### [`fof-user-directory.admin.settings.use-small-cards`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/de/?q=context%3A%3D%22fof-user-directory.admin.settings.use-small-cards%22)

> Use small user cards

```diff
-Kleine Nutzer-Karten verwenden
+Kleine Benutzerkarten verwenden
```

Kleine <del>Nutzer-Karten</del><ins>Benutzerkarten</ins> verwenden

#### [`fof-user-directory.forum.page.filter_button`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/de/?q=context%3A%3D%22fof-user-directory.forum.page.filter_button%22)

> Filter Groups

```diff
-Gruppen Filtern
+Gruppen filtern
```

Gruppen <del>Filtern</del><ins>filtern</ins>

#### [`fof-user-directory.forum.search.users_heading`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/de/?q=context%3A%3D%22fof-user-directory.forum.search.users_heading%22)

> Search all users for "{query}"

```diff
-Durchsuche alle Benutzer nach "{query}"
+Durchsuche alle Benutzer nach „{query}“
```

Durchsuche alle Benutzer nach <del>"{query}"</del><ins>„{query}“</ins>


### `fof-username-request`

#### [`fof-username-request.forum.nickname_modals.action.success`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.success%22)

> Decision sent.

```diff
-=> fof-username-request.ref.action.success
+Entscheidung gesendet.
```

#### [`fof-username-request.forum.nickname_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.confirmation_message%22)

> Your nickname change request has been submitted and is pending approval.

```diff
-=> fof-username-request.ref.request.confirmation_message
+Deine Anfrage zur Änderung deines Spitznamens wurde eingereicht und wartet auf Genehmigung.
```

#### [`fof-username-request.forum.nickname_modals.request.deleted`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.deleted%22)

> Nickname request deleted.

```diff
-=> fof-username-request.ref.request.deleted
+Spitznamenanfrage gelöscht.
```

#### [`fof-username-request.forum.nickname_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.resubmit%22)

> At this time you may resubmit a new nickname change request from your account settings if you so choose to.

```diff
-=> fof-username-request.ref.results.resubmit
+Zu diesem Zeitpunkt kannst du, wenn du möchtest, über deine Kontoeinstellungen einen neuen Antrag auf Änderung deines Spitznamens stellen.
```

#### [`fof-username-request.forum.username_modals.action.success`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.success%22)

> Decision sent.

```diff
-=> fof-username-request.ref.action.success
+Entscheidung gesendet.
```

#### [`fof-username-request.forum.username_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.confirmation_message%22)

> Your username change request has been submitted and is pending approval.

```diff
-=> fof-username-request.ref.request.confirmation_message
+Deine Anfrage zur Änderung deines Benutzernamens wurde übermittelt und wartet auf Genehmigung.
```

#### [`fof-username-request.forum.username_modals.request.deleted`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.deleted%22)

> Username request deleted.

```diff
-=> fof-username-request.ref.request.deleted
+Benutzernamenanfrage gelöscht.
```

#### [`fof-username-request.forum.username_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum2/fof-username-request/de/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.resubmit%22)

> At this time you may resubmit a new username change request from your account settings if you so choose to.

```diff
-=> fof-username-request.ref.results.resubmit
+Zu diesem Zeitpunkt kannst du, wenn du möchtest, über deine Kontoeinstellungen einen neuen Antrag auf Änderung deines Benutzernamens stellen.
```


### `fof-webhooks`

#### [`fof-webhooks.admin.settings.debug_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/de/?q=context%3A%3D%22fof-webhooks.admin.settings.debug_label%22)

> Debug

```diff
-Debuggen
+Debug-Details hinzufügen
```

#### [`fof-webhooks.admin.settings.help.tags`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/de/?q=context%3A%3D%22fof-webhooks.admin.settings.help.tags%22)

> You can restrict webhooks to specific tags. If you select any tags, the webhook will only be fired if the event is triggered on a resource that has any of the selected tags.

```diff
-Du kannst Webhooks auf bestimmte Tags beschränken. Wenn du bestimmte Tags auswählst, wird der Webhook nur ausgelöst, wenn die Veranstaltung auf einer Ressource ausgelöst wird, die eines der ausgewählten Tags hat.
+Du kannst Webhooks auf bestimmte Tags beschränken. Wenn du bestimmte Tags auswählst, wird der Webhook nur ausgelöst, wenn das Ereignis auf einer Ressource ausgelöst wird, die eines der ausgewählten Tags hat.
```

Du kannst Webhooks auf bestimmte Tags beschränken. Wenn du bestimmte Tags auswählst, wird der Webhook nur ausgelöst, wenn <del>die</del><ins>das</ins> <del>Veranstaltung</del><ins>Ereignis</ins> auf einer Ressource ausgelöst wird, die eines der ausgewählten Tags hat.

#### [`fof-webhooks.admin.settings.modal.include_matching_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/de/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.include_matching_tags_label%22)

> Include matching tags -- for webhooks restricted to specific tags, show which ones the event matched

```diff
-Zutreffende Themen einschliessen — Für Webhooks, die auf bestimmte Themen beschränkt sind, wird angezeigt, welche Themen das Ereignis auslösen
+Zutreffende Tags einschliessen — Für Webhooks, die auf bestimmte Tags beschränkt sind, wird angezeigt, welches das Ereignis auslöst
```

Zutreffende <del>Themen</del><ins>Tags</ins> einschliessen — Für Webhooks, die auf bestimmte <del>Themen</del><ins>Tags</ins> beschränkt sind, wird angezeigt,<del> welche</del> <del>Themen</del><ins>welches</ins> das Ereignis <del>auslösen</del><ins>auslöst</ins>

#### [`fof-webhooks.admin.settings.modal.max_post_content_length_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/de/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.max_post_content_length_help%22)

> Set a number to limit the post content in all post-related events. Change to 0 or nothing to remove limit.

```diff
-Bestimme ein Zahl um die Länge von Beiträgen in allen Beitrags-bezogenen Ereignissen zu limitieren. Um das Limit zu entfernen, gebe 0 oder nichts ein.
+Gib eine Zahl an, um den Inhalt von Beiträgen in allen Beitrags-bezogenen Ereignissen zu limitieren. Um das Limit zu entfernen, gib 0 oder nichts ein.
```

<del>Bestimme</del><ins>Gib</ins> <del>ein</del><ins>eine</ins> Zahl<ins> an,</ins> um <del>die</del><ins>den</ins> <del>Länge</del><ins>Inhalt</ins> von Beiträgen in allen Beitrags-bezogenen Ereignissen zu limitieren. Um das Limit zu entfernen, <del>gebe</del><ins>gib</ins> 0 oder nichts ein.


### `forumaker-magicbb`

#### [`forumaker-magicbb.admin.settings.bb_image`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image%22)

> Image alignment

```diff
-FoF Upload
+Bildausrichtung
```

#### [`forumaker-magicbb.admin.settings.bb_image_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image_help%22)

> Wraps images and other inline media in an alignment container. Centered media is scaled to 60% of the post width, side-aligned — up to 40%

```diff
-Fügt dem Editor eine neue Schaltfläche für die Bildausrichtung hinzu. Große, zentrierte Bilder werden automatisch auf 60 % der Beitragsbreite verkleinert, seitlich ausgerichtete Bilder auf bis zu 40 %.
+Schließt Bilder und andere Inline-Medien in einen Ausrichtungscontainer ein. Zentrierte Medien werden auf 60 % der Beitragsbreite skaliert, seitlich ausgerichtete Medien auf bis zu 40 %.
```

<del>Fügt dem Editor</del><ins>Schließt</ins> <del>eine</del><ins>Bilder</ins> <del>neue</del><ins>und</ins> <del>Schaltfläche</del><ins>andere</ins> <del>für</del><ins>Inline-Medien</ins> <del>die</del><ins>in</ins> <del>Bildausrichtung</del><ins>einen</ins> <del>hinzu.</del><ins>Ausrichtungscontainer</ins> <del>Große,</del><ins>ein.</ins> <del>zentrierte</del><ins>Zentrierte</ins> <del>Bilder</del><ins>Medien</ins> werden<del> automatisch</del> auf 60 % der Beitragsbreite <del>verkleinert,</del><ins>skaliert,</ins> seitlich ausgerichtete <del>Bilder</del><ins>Medien</ins> auf bis zu 40 %.

#### [`forumaker-magicbb.forum.composer.image_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.composer.image_button%22)

> Align image

```diff
-Bild hinzufügen
+Bild ausrichten
```

Bild <del>hinzufügen</del><ins>ausrichten</ins>


### `forumaker-magicslider`

#### [`forumaker-magicslider.admin.settings.fit_to_layout_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/de/?q=context%3A%3D%22forumaker-magicslider.admin.settings.fit_to_layout_help%22)

> When enabled, the slider spans exactly the width of the main content container on tags or discussion list

```diff
-Wenn aktiviert ist, erstreckt sich der Slider genau über die Breite des Hauptinhaltsbereichs bei Themen oder Diskussionslisten
+Wenn aktiviert ist, erstreckt sich der Slider genau über die Breite des Hauptinhaltsbereichs bei Tags oder Diskussionslisten
```

Wenn aktiviert ist, erstreckt sich der Slider genau über die Breite des Hauptinhaltsbereichs bei <del>Themen</del><ins>Tags</ins> oder Diskussionslisten

#### [`forumaker-magicslider.admin.settings.hide_on_tag_pages_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicslider/de/?q=context%3A%3D%22forumaker-magicslider.admin.settings.hide_on_tag_pages_help%22)

> Show Flarum's default tag hero on tag pages instead of the slider

```diff
-Auf Themenseiten den Standard-Themen-Hero von Flarum anstelle des Sliders anzeigen
+Auf Tag-Seiten den Standard-Tag-Hero von Flarum anstelle des Sliders anzeigen
```

Auf <del>Themenseiten</del><ins>Tag-Seiten</ins> den <del>Standard-Themen-Hero</del><ins>Standard-Tag-Hero</ins> von Flarum anstelle des Sliders anzeigen


### `huseyinfiliz-awards`

#### [`huseyinfiliz-awards.admin.awards.image_url`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.image_url%22)

> Cover Image URL

```diff
-Titelbild-URL
+URL des Titelbildes
```

#### [`huseyinfiliz-awards.admin.awards.show_live_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.show_live_votes%22)

> Show Live Vote Counts

```diff
-Stimmenanzahl live anzeigen
+Live-Abstimmungsergebnisse anzeigen
```

<del>Stimmenanzahl live</del><ins>Live-Abstimmungsergebnisse</ins> anzeigen

#### [`huseyinfiliz-awards.admin.awards.show_live_votes_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.show_live_votes_help%22)

> Display vote counts while voting is active

```diff
-Stimmenanzahl während der Abstimmung live anzeigen
+Anzahl der Stimmen anzeigen, während die Abstimmung läuft
```

<del>Stimmenanzahl</del><ins>Anzahl der Stimmen anzeigen,</ins> während <del>der</del><ins>die</ins> Abstimmung<del> live</del> <del>anzeigen</del><ins>läuft</ins>

#### [`huseyinfiliz-awards.admin.nominees.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.delete_confirm%22)

> Are you sure you want to delete this nominee?

```diff
-Möchtest du diesen Vorschlag wirklich löschen?
+Möchtest du diesen Kandidaten wirklich löschen?
```

Möchtest du diesen <del>Vorschlag</del><ins>Kandidaten</ins> wirklich löschen?

#### [`huseyinfiliz-awards.admin.nominees.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.empty%22)

> No nominees found.

```diff
-Keine Vorschläge gefunden.
+Keine Kandidaten gefunden.
```

Keine <del>Vorschläge</del><ins>Kandidaten</ins> gefunden.

#### [`huseyinfiliz-awards.admin.settings.nav_icon_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_icon_help%22)

> FontAwesome icon class (e.g., fas fa-trophy, fas fa-award, fas fa-star)

```diff
-FontAwesome-Symbol-Klasse (z. B. fas fa-trophy, fas fa-award, fas fa-star)
+FontAwesome-Symbolklasse (z. B. fas fa-trophy, fas fa-award, fas fa-star)
```

<del>FontAwesome-Symbol-Klasse</del><ins>FontAwesome-Symbolklasse</ins> (z. B. fas fa-trophy, fas fa-award, fas fa-star)

#### [`huseyinfiliz-awards.admin.suggestions.approve_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.approve_confirm%22)

> Create as new nominee? The user will automatically vote for it.

```diff
-Neuen Kandidaten erstellen? Der Benutzer wird automatisch dafür stimmen.
+Als neuen Kandidaten vorschlagen? Der Benutzer wird automatisch dafür stimmen.
```

<del>Neuen</del><ins>Als neuen</ins> Kandidaten <del>erstellen?</del><ins>vorschlagen?</ins> Der Benutzer wird automatisch dafür stimmen.

#### [`huseyinfiliz-awards.admin.suggestions.reject_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.reject_confirm%22)

> Reject this suggestion?

```diff
-Vorschlag ablehnen?
+Diesen Vorschlag ablehnen?
```

<ins>Diesen </ins>Vorschlag ablehnen?

#### [`huseyinfiliz-awards.forum.category.nominees_count`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.category.nominees_count%22)

> {count} nominees

```diff
-{count} Nominierte
+{count} Kandidaten
```

{count} <del>Nominierte</del><ins>Kandidaten</ins>

#### [`huseyinfiliz-awards.forum.other.status_approved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_approved%22)

> Approved

```diff
-Genehmigt
+Angenommen
```

#### [`huseyinfiliz-awards.forum.other.submit`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.submit%22)

> Submit Suggestion

```diff
-Vorschlag einreichen
+Kandidaten vorschlagen
```

#### [`huseyinfiliz-awards.forum.page.voting_ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_ended%22)

> Voting ended {time}

```diff
-Abstimmung beendet {time}
+Abstimmung endete um {time}
```

Abstimmung <del>beendet</del><ins>endete um</ins> {time}

#### [`huseyinfiliz-awards.forum.page.voting_ends`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_ends%22)

> Voting ends {time}

```diff
-Abstimmung endet {time}
+Abstimmung endet um {time}
```

Abstimmung endet <ins>um </ins>{time}

#### [`huseyinfiliz-awards.forum.page.voting_starts`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_starts%22)

> Voting starts {time}

```diff
-Abstimmung beginnt {time}
+Abstimmung beginnt um {time}
```

Abstimmung beginnt <ins>um </ins>{time}

#### [`huseyinfiliz-awards.forum.prediction.correct`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.correct%22)

> Correct:

```diff
-Richtig:
+Korrekt:
```

#### [`huseyinfiliz-awards.forum.progress.voted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.voted%22)

> {count}/{total} categories voted

```diff
-In {count}/{total} Kategorien abgestimmt
+{count}/{total} Kategorien abgestimmt
```

<del>In </del>{count}/{total} Kategorien abgestimmt

#### [`huseyinfiliz-awards.forum.results.full_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.full_results%22)

> Full Results

```diff
-Vollständige Ergebnisse
+Alle Ergebnisse
```

<del>Vollständige</del><ins>Alle</ins> Ergebnisse

#### [`huseyinfiliz-awards.forum.results.runner_up`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.runner_up%22)

> Runner Up

```diff
-Zweitplatzierter
+Zweiter
```

#### [`huseyinfiliz-awards.forum.results.view_all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.view_all%22)

> View All Results

```diff
-Alle Ergebnisse ansehen
+Alle Ergebnisse anzeigen
```

Alle Ergebnisse <del>ansehen</del><ins>anzeigen</ins>

#### [`huseyinfiliz-awards.forum.voting.ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ended%22)

> Voting has ended

```diff
-Abstimmung ist beendet
+Abstimmung wurde beendet
```

Abstimmung <del>ist</del><ins>wurde</ins> beendet

#### [`huseyinfiliz-awards.forum.voting.vote_saved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.vote_saved%22)

> Your vote has been saved!

```diff
-Deine Stimme wurde erfasst!
+Deine Stimme wurde gewertet!
```

Deine Stimme wurde <del>erfasst!</del><ins>gewertet!</ins>

#### [`huseyinfiliz-awards.forum.voting.voting_closed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/de/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.voting_closed%22)

> Voting is closed

```diff
-Abstimmung wurde geschlossen
+Abstimmung ist beendet
```

Abstimmung <del>wurde</del><ins>ist</ins> <del>geschlossen</del><ins>beendet</ins>


### `huseyinfiliz-diff`

#### [`huseyinfiliz-diff.admin.permissions.rollbackEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.rollbackEditHistory%22)

> Rollback others edit history

```diff
-Bearbeitungshistorie anderer rückgängig machen
+Bearbeitungsverlauf anderer zurücksetzen
```

<del>Bearbeitungshistorie</del><ins>Bearbeitungsverlauf</ins> anderer<del> rückgängig</del> <del>machen</del><ins>zurücksetzen</ins>

#### [`huseyinfiliz-diff.admin.permissions.selfRollbackEditHistory`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.permissions.selfRollbackEditHistory%22)

> Rollback own edit history

```diff
-Eigene Bearbeitungshistorie rückgängig machen
+Eigenen Bearbeitungsverlauf zurücksetzen
```

#### [`huseyinfiliz-diff.admin.settings.archiveInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveInfo%22)

> Keep in mind that you can disable both options and run &lt;code&gt;php flarum diff:archive&lt;/code&gt; command to archive old revisions manually.

```diff
-Beachte, dass du beide Optionen deaktivieren und den Befehl <code>php flarum diff:archive</code> ausführen kannst, um alte Versionen manuell zu archivieren.
+Beachte, dass du beide Optionen deaktivieren und den Befehl <code>php flarum diff:archive</code> ausführen kannst, um alte Revisionen manuell zu archivieren.
```

Beachte, dass du beide Optionen deaktivieren und den Befehl &lt;code&gt;php flarum diff:archive&lt;/code&gt; ausführen kannst, um alte <del>Versionen</del><ins>Revisionen</ins> manuell zu archivieren.

#### [`huseyinfiliz-diff.admin.settings.archiveOldsInfo`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.archiveOldsInfo%22)

> If &lt;strong&gt;x ≥ A&lt;/strong&gt;, first &lt;strong&gt;y=mx+b&lt;/strong&gt; revisions for the post will be stored as merged &amp; compressed. The &lt;strong&gt;x&lt;/strong&gt; refers to post's revision count. Float values of &lt;strong&gt;y&lt;/strong&gt; will be rounded to the next lowest integer value.

```diff
-Wenn <strong>x ≥ A</strong> ist, werden die ersten <strong>y=mx+b</strong> Revisionen des Beitrags als zusammengeführt und komprimiert gespeichert. <strong>x</strong> bezieht sich auf die Anzahl der Revisionen des Beitrags. Gleitkommawerte von <strong>y</strong> werden auf den nächstniedrigeren ganzzahligen Wert gerundet.
+Wenn <strong>x ≥ A</strong>, werden die ersten <strong>y=mx+b</strong> Revisionen des Beitrags als zusammengeführt und komprimiert gespeichert. Das <strong>x</strong> bezieht sich auf die Anzahl der Revisionen des Beitrags. Fließkommawerte von <strong>y</strong> werden auf den nächstniedrigeren ganzzahligen Wert gerundet.
```

Wenn &lt;strong&gt;x ≥ <del>A&lt;/strong&gt; ist,</del><ins>A&lt;/strong&gt;,</ins> werden die ersten &lt;strong&gt;y=mx+b&lt;/strong&gt; Revisionen des Beitrags als zusammengeführt und komprimiert gespeichert.<ins> Das</ins> &lt;strong&gt;x&lt;/strong&gt; bezieht sich auf die Anzahl der Revisionen des Beitrags. <del>Gleitkommawerte</del><ins>Fließkommawerte</ins> von &lt;strong&gt;y&lt;/strong&gt; werden auf den nächstniedrigeren ganzzahligen Wert gerundet.

#### [`huseyinfiliz-diff.admin.settings.mergeThresholdHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.mergeThresholdHelp%22)

> This determines whether a replace-type block should be merged or not depending on the content changed ratio, which values between 0 and 1.

```diff
-Dies legt fest, ob ein Block vom Typ „Ersetzen“ je nach dem Anteil der geänderten Inhalte – der zwischen 0 und 1 liegt – zusammengeführt werden soll oder nicht.
+Dies bestimmt, ob ein Block vom Typ „Ersetzen“ je nach dem Verhältnis der geänderten Inhalte, dessen Wert zwischen 0 und 1 liegt, zusammengeführt werden soll oder nicht.
```

Dies <del>legt fest,</del><ins>bestimmt,</ins> ob ein Block vom Typ „Ersetzen“ je nach dem <del>Anteil</del><ins>Verhältnis</ins> der geänderten <del>Inhalte</del><ins>Inhalte,</ins> <del>–</del><ins>dessen</ins> <del>der</del><ins>Wert</ins> zwischen 0 und 1<del> liegt</del> <del>–</del><ins>liegt,</ins> zusammengeführt werden soll oder nicht.

#### [`huseyinfiliz-diff.admin.settings.useCrons`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.useCrons%22)

> Use crons to archive old revisions

```diff
-Verwende Cron-Jobs, um alte Versionen zu archivieren
+Verwende Cron-Jobs, um alte Revisionen zu archivieren
```

Verwende Cron-Jobs, um alte <del>Versionen</del><ins>Revisionen</ins> zu archivieren

#### [`huseyinfiliz-diff.admin.settings.useCronsHelp`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.useCronsHelp%22)

> You must add Cron entry to your server to make this option work. It'll work weekly on sundays at 02:00 AM. If you disable this option and enable above, all of the post's revisions will be scanned for archiving when the related post is revised.

```diff
-Du musst einen Cron-Eintrag auf deinem Server hinzufügen, damit diese Option funktioniert. Sie wird wöchentlich sonntags um 02:00 Uhr ausgeführt. Wenn du diese Option deaktivierst und die oben genannte aktivierst, werden alle Überarbeitungen des Beitrags auf Archivierungsbedarf überprüft, sobald der betreffende Beitrag überarbeitet wird.
+Du musst einen Cron-Eintrag zu deinem Server hinzufügen, damit diese Option funktioniert. Sie wird wöchentlich sonntags um 02:00 Uhr ausgeführt. Wenn du diese Option deaktivierst und die oben genannte Option aktivierst, werden alle Revisionen des Beitrags auf Archivierung überprüft, wenn der zugehörige Beitrag überarbeitet wird.
```

Du musst einen Cron-Eintrag <del>auf</del><ins>zu</ins> deinem Server hinzufügen, damit diese Option funktioniert. Sie wird wöchentlich sonntags um 02:00 Uhr ausgeführt. Wenn du diese Option deaktivierst und die oben genannte<ins> Option</ins> aktivierst, werden alle <del>Überarbeitungen</del><ins>Revisionen</ins> des Beitrags auf <del>Archivierungsbedarf</del><ins>Archivierung</ins> überprüft, <del>sobald</del><ins>wenn</ins> der <del>betreffende</del><ins>zugehörige</ins> Beitrag überarbeitet wird.

#### [`huseyinfiliz-diff.admin.settings.usePoint`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.admin.settings.usePoint%22)

> Use &lt;strong&gt;point&lt;/strong&gt; as decimal seperator for float values.

```diff
-Verwenden Sie <strong>Punkt</strong> als Dezimaltrennzeichen für Fließkommawerte.
+Verwende <strong>Punkt</strong> als Dezimaltrennzeichen für Fließkommawerte.
```

<del>Verwenden Sie</del><ins>Verwende</ins> &lt;strong&gt;Punkt&lt;/strong&gt; als Dezimaltrennzeichen für Fließkommawerte.

#### [`huseyinfiliz-diff.forum.confirmRollback`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.forum.confirmRollback%22)

> Are you sure you want to change your current post?

```diff
-Möchtest du deinen aktuellen Beitrag wirklich ändern?
+Bust du sicher, dass du deinen aktuellen Beitrag ändern möchtest?
```

<del>Möchtest</del><ins>Bust du sicher, dass</ins> du deinen aktuellen Beitrag <del>wirklich</del><ins>ändern</ins> <del>ändern?</del><ins>möchtest?</ins>

#### [`huseyinfiliz-diff.ref.originalContent`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-diff/de/?q=context%3A%3D%22huseyinfiliz-diff.ref.originalContent%22)

> original content

```diff
-Originaler Inhalt
+Originalinhalt
```


### `huseyinfiliz-leaderboard`

#### [`huseyinfiliz-leaderboard.admin.modals.select_tags`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/de/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.select_tags%22)

> Select Tags

```diff
-Themen auswählen
+Tags auswählen
```

<del>Themen</del><ins>Tags</ins> auswählen

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/de/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_help%22)

> Discussions with selected tags will not earn points.

```diff
-Diskussionen in den ausgewählten Themen bringen keine Punkte.
+Diskussionen in den ausgewählten Tags bringen keine Punkte.
```

Diskussionen in den ausgewählten <del>Themen</del><ins>Tags</ins> bringen keine Punkte.

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/de/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_label%22)

> Excluded Tags

```diff
-Ausgeschlossene Themen
+Ausgeschlossene Tags
```

Ausgeschlossene <del>Themen</del><ins>Tags</ins>

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/de/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_help%22)

> Re-scans all source data (discussions, posts, likes, etc.), removes orphaned records, adds missing ones, and rebuilds all totals. Use this after changing tag exclusions or if data seems out of sync.

```diff
-Alle Quelldaten (Diskussionen, Beiträge, Likes usw.) werden erneut gescannt, verwaiste Datensätze entfernt, fehlende hinzugefügt und alle Summen neu berechnet. Verwende diese Funktion, nachdem Sie Themen-Ausschlüsse geändert haben oder wenn die Daten nicht synchron zu sein scheinen.
+Alle Quelldaten (Diskussionen, Beiträge, Likes usw.) werden erneut gescannt, verwaiste Datensätze entfernt, fehlende hinzugefügt und alle Summen neu berechnet. Verwende diese Funktion, nachdem du Tags-Ausschlüsse geändert hast oder wenn die Daten nicht synchron zu sein scheinen.
```

Alle Quelldaten (Diskussionen, Beiträge, Likes usw.) werden erneut gescannt, verwaiste Datensätze entfernt, fehlende hinzugefügt und alle Summen neu berechnet. Verwende diese Funktion, nachdem <del>Sie</del><ins>du</ins> <del>Themen-Ausschlüsse</del><ins>Tags-Ausschlüsse</ins> geändert <del>haben</del><ins>hast</ins> oder wenn die Daten nicht synchron zu sein scheinen.

#### [`huseyinfiliz-leaderboard.admin.settings.tags_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/de/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.tags_changed_notice%22)

> Tag exclusions have changed. Recalculate all activity to update historical data.

```diff
-Ausgeschlossene Themen wurden geändert. Berechne alle Aktivitäten neu, um die historischen Daten zu aktualisieren.
+Ausgeschlossene Tags wurden geändert. Berechne alle Aktivitäten neu, um die historischen Daten zu aktualisieren.
```

Ausgeschlossene <del>Themen</del><ins>Tags</ins> wurden geändert. Berechne alle Aktivitäten neu, um die historischen Daten zu aktualisieren.


### `huseyinfiliz-sticky-title`

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/de/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_help%22)

> Choose how tag colors are displayed in the sidebar panel

```diff
-Wähle aus, wie die Farben der Themen in der Seitenleiste angezeigt werden sollen
+Wähle aus, wie die Farben des Tags im Seitenleistenbereich angezeigt werden sollen
```

Wähle aus, wie die Farben <del>der Themen</del><ins>des</ins> <del>in</del><ins>Tags</ins> <del>der</del><ins>im</ins> <del>Seitenleiste</del><ins>Seitenleistenbereich</ins> angezeigt werden sollen

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/de/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_label%22)

> Tag Color Style

```diff
-Farbstil für Themen
+Tag-Farbstil
```


### `ianm-boring-avatars`

#### [`ianm-boring-avatars.admin.settings.theme_help`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/de/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.theme_help%22)

> The theme to use for the boring avatars.
>

```diff
-Das Theme welches für die Boring Avatars verwendet wird.
+Das Theme, welches für die Boring Avatars verwendet wird.

```

Das <del>Theme</del><ins>Theme,</ins> welches für die Boring Avatars verwendet wird.<br />


### `ianm-follow-users`

#### [`ianm-follow-users.forum.followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/de/?q=context%3A%3D%22ianm-follow-users.forum.followers%22)

> {count, plural, one {Follower} other {Followers}}

```diff
-{count, plural, one {Follower} other {Followers}}
+{count, plural, one {Follower} other {Follower}}
```

{count, plural, one {Follower} other <del>{Followers}}</del><ins>{Follower}}</ins>


### `ianm-syndication`

#### [`ianm-syndication.admin.settings.forum-icons.help`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.admin.settings.forum-icons.help%22)

> Displays icons in All Discussions, Tags and Discussions to allow easy access to the feed(s).

```diff
-Symbole in Alle Diskussionen, Themen und Diskussionen für einfachen Zugriff auf die Feeds anzeigen.
+Symbole in Alle Diskussionen, Tags und Diskussionen für einfachen Zugriff auf die Feeds anzeigen.
```

Symbole in Alle Diskussionen, <del>Themen</del><ins>Tags</ins> und Diskussionen für einfachen Zugriff auf die Feeds anzeigen.

#### [`ianm-syndication.forum.autodiscovery.tag_activity`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.tag_activity%22)

> Activity for the {tag} tag

```diff
-Aktivität für das Thema {tag}
+Aktivität für das Tag {tag}
```

Aktivität für das <del>Thema</del><ins>Tag</ins> {tag}

#### [`ianm-syndication.forum.autodiscovery.tag_new_discussions`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.forum.autodiscovery.tag_new_discussions%22)

> Discussions in the {tag} tag

```diff
-Diskussionen im Thema {tag}
+Diskussionen im Tag {tag}
```

Diskussionen im <del>Thema</del><ins>Tag</ins> {tag}

#### [`ianm-syndication.forum.feeds.titles.tag_d_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_d_subtitle%22)

> The newest discussions in the {tag} tag

```diff
-Die neuesten Diskussionen im Thema {tag}
+Die neuesten Diskussionen im Tag {tag}
```

Die neuesten Diskussionen im <del>Thema</del><ins>Tag</ins> {tag}

#### [`ianm-syndication.forum.feeds.titles.tag_d_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_d_title%22)

> New discussions in the {tag} tag

```diff
-Neue Diskussionen im Thema {tag}
+Neue Diskussionen im Tag {tag}
```

Neue Diskussionen im <del>Thema</del><ins>Tag</ins> {tag}

#### [`ianm-syndication.forum.feeds.titles.tag_subtitle`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_subtitle%22)

> Last posts in the {tag} tag

```diff
-Neueste Beiträge im Thema {tag}
+Neueste Beiträge im Tag {tag}
```

Neueste Beiträge im <del>Thema</del><ins>Tag</ins> {tag}

#### [`ianm-syndication.forum.feeds.titles.tag_title`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/de/?q=context%3A%3D%22ianm-syndication.forum.feeds.titles.tag_title%22)

> Activity in the {tag} tag

```diff
-Aktivität im Thema {tag}
+Aktivität im Tag {tag}
```

Aktivität im <del>Thema</del><ins>Tag</ins> {tag}


### `ianm-twofactor`

#### [`ianm-twofactor.forum.security.enable_2fa_modal_text`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/de/?q=context%3A%3D%22ianm-twofactor.forum.security.enable_2fa_modal_text%22)

> Scan the QR code below with your authentication app, then enter the provided token to enable Two-Factor Authentication.

```diff
-Scanne den unten stehenden QR-Code mit deiner Authentifizierungs-App und gebe dann den generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.
+Scanne den unten stehenden QR-Code mit deiner Authentifizierungs-App und gib dann den generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.
```

Scanne den unten stehenden QR-Code mit deiner Authentifizierungs-App und <del>gebe</del><ins>gib</ins> dann den generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.

#### [`ianm-twofactor.forum.security.manual_entry_instruction`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/de/?q=context%3A%3D%22ianm-twofactor.forum.security.manual_entry_instruction%22)

> Enter the provided code into your authentication app, then enter the generated token to enable Two-Factor Authentication.

```diff
-Gebe den bereitgestellten Code in deiner Authentifizierungs-App ein und gebe dann den dort generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.
+Gib den bereitgestellten Code in deiner Authentifizierungs-App ein und gib dann den dort generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.
```

<del>Gebe</del><ins>Gib</ins> den bereitgestellten Code in deiner Authentifizierungs-App ein und <del>gebe</del><ins>gib</ins> dann den dort generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.

#### [`ianm-twofactor.forum.security.scan_qr_instruction`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/de/?q=context%3A%3D%22ianm-twofactor.forum.security.scan_qr_instruction%22)

> Scan the QR code above with your authentication app, then enter the provided token to enable Two-Factor Authentication.

```diff
-Scanne den obigen QR-Code mit deiner Authentifizierungs-App und gebe dann den generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.
+Scanne den obigen QR-Code mit deiner Authentifizierungs-App und gib dann den generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.
```

Scanne den obigen QR-Code mit deiner Authentifizierungs-App und <del>gebe</del><ins>gib</ins> dann den generierten Sicherheitsschlüssel ein, um die Zwei-Faktor-Authentifizierung zu aktivieren.


### `justoverclock-related-discussions`

#### [`justoverclock-related-discussions.admin.relatedLimit-help`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/de/?q=context%3A%3D%22justoverclock-related-discussions.admin.relatedLimit-help%22)

> write here the number of discussion that you want to see (e.g. "4")

```diff
-gebe hier die Nummer der Diskussion ein, die Du sehen möchtest (z. B. '4')
+gib hier die Anzahl der Diskussion ein, die du sehen möchtest (z. B. „4“)
```

<del>gebe</del><ins>gib</ins> hier die <del>Nummer</del><ins>Anzahl</ins> der Diskussion ein, die <del>Du</del><ins>du</ins> sehen möchtest (z. B. <del>'4')</del><ins>„4“)</ins>

#### [`justoverclock-related-discussions.admin.relatedTitle`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/de/?q=context%3A%3D%22justoverclock-related-discussions.admin.relatedTitle%22)

> Title for "Related Discussions"

```diff
-Titel für "Verwandte Diskussionen"
+Titel für „Verwandte Diskussionen“
```

Titel für <del>"Verwandte</del><ins>„Verwandte</ins> <del>Diskussionen"</del><ins>Diskussionen“</ins>


### `justoverclock-welcomebox`

#### [`flarum-ext-welcomebox.admin.img-help`](https://weblate.rob006.net/translate/flarum2/justoverclock-welcomebox/de/?q=context%3A%3D%22flarum-ext-welcomebox.admin.img-help%22)

> put here the url of image for guest box

```diff
-Gebe hier die URL des Bildes für die Gästebox ein
+Gib hier die URL des Bildes für die Gästebox ein
```

<del>Gebe</del><ins>Gib</ins> hier die URL des Bildes für die Gästebox ein

#### [`flarum-ext-welcomebox.forum.SettingsLink`](https://weblate.rob006.net/translate/flarum2/justoverclock-welcomebox/de/?q=context%3A%3D%22flarum-ext-welcomebox.forum.SettingsLink%22)

> Settings

```diff
-Einstellugnen
+Einstellungen
```


### `linkrobins-birdseye`

#### [`linkrobins-birdseye.forum.session_menu.analytics_button`](https://weblate.rob006.net/translate/flarum2/linkrobins-birdseye/de/?q=context%3A%3D%22linkrobins-birdseye.forum.session_menu.analytics_button%22)

> Analytics

```diff
-Analytik
+Analyse
```

#### [`linkrobins-birdseye.lib.dashboard.tags`](https://weblate.rob006.net/translate/flarum2/linkrobins-birdseye/de/?q=context%3A%3D%22linkrobins-birdseye.lib.dashboard.tags%22)

> Top tags

```diff
-Top-Tags
+Beliebteste Tags
```

#### [`linkrobins-birdseye.lib.dashboard.title`](https://weblate.rob006.net/translate/flarum2/linkrobins-birdseye/de/?q=context%3A%3D%22linkrobins-birdseye.lib.dashboard.title%22)

> Analytics

```diff
-Analytik
+Analyse
```


### `migratetoflarum-fake-data`

#### [`migratetoflarum-fake-data.lib.generator.discussion-tags`](https://weblate.rob006.net/translate/flarum2/migratetoflarum-fake-data/de/?q=context%3A%3D%22migratetoflarum-fake-data.lib.generator.discussion-tags%22)

> Tags for new discussions

```diff
-Themen für neue Diskussionen
+Tags für neue Diskussionen
```

<del>Themen</del><ins>Tags</ins> für neue Diskussionen


### `ralkage-civility-filter`

#### [`ralkage-civility-filter.admin.settings.monitored_tags_help`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/de/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.monitored_tags_help%22)

> Select tags to monitor. Leave empty to monitor all tags.

```diff
-Wähle die zu überwachenden Themen aus. Lasse das Feld leer, um alle Themen zu überwachen.
+Wähle die zu überwachenden Tags aus. Lasse das Feld leer, um alle Tags zu überwachen.
```

Wähle die zu überwachenden <del>Themen</del><ins>Tags</ins> aus. Lasse das Feld leer, um alle <del>Themen</del><ins>Tags</ins> zu überwachen.

#### [`ralkage-civility-filter.admin.settings.monitored_tags_label`](https://weblate.rob006.net/translate/flarum2/ralkage-civility-filter/de/?q=context%3A%3D%22ralkage-civility-filter.admin.settings.monitored_tags_label%22)

> Monitored Tags

```diff
-Überwachte Themen
+Überwachte Tags
```

Überwachte <del>Themen</del><ins>Tags</ins>


### `ralkage-hcaptcha`

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
-Verwende das dunkle Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.
+Verwende das dunklen Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.
```

Verwende das <del>dunkle</del><ins>dunklen</ins> Design für das hCaptcha-Widget. Aktiviere diese Option, wenn dein Forum ein dunkles Design verwendet.

#### [`ralkage-hcaptcha.admin.settings.dark_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_label%22)

> Dark Mode

```diff
-Dunkler Modus
+Dunkles Design
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/de/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
-Bei der Anmeldung der Benutzer hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.
+Bei der Anmeldung von Benutzern hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.
```

Bei der Anmeldung <del>der</del><ins>von</ins> <del>Benutzer</del><ins>Benutzern</ins> hCaptcha anfordern. Dies trägt zum Schutz vor Brute-Force-Angriffen bei.


### `resofire-blog-cards`

#### [`resofire_blog_cards.admin.settings.tagIds_help`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/de/?q=context%3A%3D%22resofire_blog_cards.admin.settings.tagIds_help%22)

> Select tags to show cards on. If none are selected, cards appear on all tag pages.

```diff
-Wähle Themen aus, für die Karten verwendet werden sollen. Wenn keine ausgewählt sind, werden die Karten auf allen Themen-Seiten verwendet.
+Wähle Tags aus, für die Karten verwendet werden sollen. Wenn keine ausgewählt sind, werden die Karten auf allen Tag-Seiten verwendet.
```

Wähle <del>Themen</del><ins>Tags</ins> aus, für die Karten verwendet werden sollen. Wenn keine ausgewählt sind, werden die Karten auf allen <del>Themen-Seiten</del><ins>Tag-Seiten</ins> verwendet.

#### [`resofire_blog_cards.admin.settings.tagIds_label`](https://weblate.rob006.net/translate/flarum2/resofire-blog-cards/de/?q=context%3A%3D%22resofire_blog_cards.admin.settings.tagIds_label%22)

> Restrict to Tags

```diff
-Auf Themen beschränken
+Auf Tags beschränken
```

Auf <del>Themen</del><ins>Tags</ins> beschränken


### `resofire-digest-mail`

#### [`resofire-digest-mail.admin.settings.hot_recency_weight_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_recency_weight_help%22)

> How much recency affects hotness. Higher = newer posts score more strongly. Set to 0 to rank by replies only.

```diff
-Wie stark die Aktualität die Beliebtheit beeinflusst. Je höher der Wert, desto stärker werden neuere Beiträge gewichtet. Setze den Wert auf 0, um die Rangfolge ausschließlich nach Antworten zu bestimmen.
+Wie stark sich die Aktualität auf die Beliebtheit auswirkt. Je höher der Wert, desto stärker werden neuere Beiträge gewichtet. Setze den Wert auf 0, um die Rangfolge ausschließlich nach Antworten zu bestimmen.
```

Wie stark <ins>sich </ins>die Aktualität<ins> auf</ins> die Beliebtheit <del>beeinflusst.</del><ins>auswirkt.</ins> Je höher der Wert, desto stärker werden neuere Beiträge gewichtet. Setze den Wert auf 0, um die Rangfolge ausschließlich nach Antworten zu bestimmen.

#### [`resofire-digest-mail.admin.settings.hot_recency_weight_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_recency_weight_label%22)

> Hot score — recency weight

```diff
-Hot-Score – Gewichtung nach Aktualität
+Beliebtheitsbewertung — Gewichtung von Aktualität
```

<del>Hot-Score</del><ins>Beliebtheitsbewertung</ins> <del>–</del><ins>—</ins> Gewichtung <del>nach</del><ins>von</ins> Aktualität

#### [`resofire-digest-mail.admin.settings.hot_reply_weight_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.hot_reply_weight_label%22)

> Hot score — reply weight

```diff
-Hot Score – Antwortgewicht
+Beliebtheitsbewertung — Gewichtung von Antworten
```

#### [`resofire-digest-mail.admin.settings.queue_delay_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_delay_help%22)

> Seconds before queued jobs become available to workers (default 0). In window mode this is rarely needed — the window itself spreads load across time. Only useful if using the two-phase digest:enqueue command on very large forums.

```diff
-Sekunden, bevor Aufgaben aus der Warteschlange den Bearbeitern zur Verfügung stehen (Standardwert: 0). Im Fenstermodus ist dies selten erforderlich – das Fenster verteilt die Last von selbst über einen längeren Zeitraum. Nur sinnvoll, wenn der zweistufige Befehl „digest:enqueue“ in sehr großen Foren verwendet wird.
+Sekunden, bevor Aufgaben aus der Warteschlange für die Worker verfügbar werden (Standardwert: 0). Im Fenstermodus ist dies selten erforderlich – das Fenster selbst verteilt die Last über einen längeren Zeitraum. Nur sinnvoll, wenn der zweistufige Befehl „digest:enqueue“ bei sehr großen Foren verwendet wird.
```

Sekunden, bevor Aufgaben aus der Warteschlange <del>den</del><ins>für</ins> <del>Bearbeitern</del><ins>die</ins> <del>zur</del><ins>Worker</ins> <del>Verfügung</del><ins>verfügbar</ins> <del>stehen</del><ins>werden</ins> (Standardwert: 0). Im Fenstermodus ist dies selten erforderlich – das Fenster<ins> selbst</ins> verteilt die Last<del> von selbst</del> über einen längeren Zeitraum. Nur sinnvoll, wenn der zweistufige Befehl „digest:enqueue“ <del>in</del><ins>bei</ins> sehr großen Foren verwendet wird.

#### [`resofire-digest-mail.admin.settings.queue_name_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_name_label%22)

> Queue name

```diff
-Name der Warteschlange
+Warteschlangenname
```

#### [`resofire-digest-mail.admin.settings.queue_tries_help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_tries_help%22)

> How many times a failed digest job will be retried before being moved to the failed jobs table (default 3). Retries use exponential backoff: 30s, 60s, 120s. Note: if you have blomstra/database-queue installed, it has its own Retries setting — the lower of the two values will effectively apply. Recommended to set both extension settings to the same value.

```diff
-Wie oft ein fehlgeschlagener Digest-Job erneut versucht wird, bevor er in die Tabelle der fehlgeschlagenen Jobs verschoben wird (Standardwert: 3). Bei den Wiederholungsversuchen kommt ein exponentieller Backoff zum Einsatz: 30 s, 60 s, 120 s. Hinweis: Wenn du blomstra/database-queue installiert hast, verfügt dieses über eine eigene Einstellung für Wiederholungsversuche – es gilt der niedrigere der beiden Werte. Es wird empfohlen, beide Erweiterungs-Einstellungen auf denselben Wert zu setzen.
+Wie oft ein fehlgeschlagener Digest-Job erneut versucht wird, bevor er in die Tabelle der fehlgeschlagenen Jobs verschoben wird (Standardwert: 3). Bei den Wiederholungsversuchen kommt ein exponentieller Backoff zum Einsatz: 30 s, 60 s, 120 s. Hinweis: Wenn Du blomstra/database-queue installiert hast, verfügt dieses über eine eigene Einstellung für Wiederholungsversuche – es gilt der niedrigere der beiden Werte. Es wird empfohlen, beide Erweiterungs-Einstellungen auf denselben Wert zu setzen.
```

Wie oft ein fehlgeschlagener Digest-Job erneut versucht wird, bevor er in die Tabelle der fehlgeschlagenen Jobs verschoben wird (Standardwert: 3). Bei den Wiederholungsversuchen kommt ein exponentieller Backoff zum Einsatz: 30 s, 60 s, 120 s. Hinweis: Wenn <del>du</del><ins>Du</ins> blomstra/database-queue installiert hast, verfügt dieses über eine eigene Einstellung für Wiederholungsversuche – es gilt der niedrigere der beiden Werte. Es wird empfohlen, beide Erweiterungs-Einstellungen auf denselben Wert zu setzen.

#### [`resofire-digest-mail.admin.settings.queue_tries_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.queue_tries_label%22)

> Max retry attempts

```diff
-Maximale Anzahl an Wiederholungsversuchen
+Maximale Anzahl von Wiederholungsversuchen
```

Maximale Anzahl <del>an</del><ins>von</ins> Wiederholungsversuchen

#### [`resofire-digest-mail.admin.settings.send_hour_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.settings.send_hour_label%22)

> Send hour

```diff
-Versandzeit
+Versandstunde
```

#### [`resofire-digest-mail.admin.test_send.frequency_label`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.frequency_label%22)

> Frequency

```diff
-Frequenz
+Häufigkeit
```

#### [`resofire-digest-mail.admin.test_send.help`](https://weblate.rob006.net/translate/flarum2/resofire-digest-mail/de/?q=context%3A%3D%22resofire-digest-mail.admin.test_send.help%22)

> Send a live digest email immediately to any address. Uses your account's visibility to build content. Does not affect scheduled sends or unsubscribe tokens.

```diff
-Sendet sofort eine Live-Zusammenfassung per E-Mail an eine beliebige Adresse. Die Inhalte werden anhand der Sichtbarkeit deines Kontos zusammengestellt. Dies hat keine Auswirkungen auf den geplanten Versand oder Abmelde-Token.
+Sendet sofort eine echte Zusammenfassungs-E-Mail an eine beliebige Adresse. Die Inhalte werden anhand der Sichtbarkeit deines Kontos zusammengestellt. Dies hat keine Auswirkungen auf den geplanten Versand oder Abmelde-Token.
```

Sendet sofort eine <del>Live-Zusammenfassung per</del><ins>echte</ins> <del>E-Mail</del><ins>Zusammenfassungs-E-Mail</ins> an eine beliebige Adresse. Die Inhalte werden anhand der Sichtbarkeit deines Kontos zusammengestellt. Dies hat keine Auswirkungen auf den geplanten Versand oder Abmelde-Token.


### `resofire-menu-control`

#### [`resofire-menu-control.admin.nav_order.flip_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/de/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_help%22)

> When enabled, tag links appear at the top of the sidebar and navigation items (All Discussions, Following, etc.) appear below.

```diff
-Wenn aktiviert, werden die Themen-Links oben in der Seitenleiste angezeigt und die Navigationselemente (Alle Diskussionen, Abonnierte usw.) erscheinen darunter.
+Wenn aktiviert, werden die Tag-Links oben in der Seitenleiste angezeigt und die Navigationselemente (Alle Diskussionen, Abonnierte usw.) erscheinen darunter.
```

Wenn aktiviert, werden die <del>Themen-Links</del><ins>Tag-Links</ins> oben in der Seitenleiste angezeigt und die Navigationselemente (Alle Diskussionen, Abonnierte usw.) erscheinen darunter.

#### [`resofire-menu-control.admin.nav_order.flip_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/de/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_label%22)

> Flip navigation (show tags above menu items)

```diff
-Navigation umkehren (Themen oberhalb der Menüpunkte anzeigen)
+Navigation umkehren (Tags oberhalb der Menüpunkte anzeigen)
```

Navigation umkehren <del>(Themen</del><ins>(Tags</ins> oberhalb der Menüpunkte anzeigen)


### `tapao-custom-landing-page`

#### [`tapao-custom-landing-page.admin.settings.guests_only_help`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/de/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.guests_only_help%22)

> When enabled, logged-in users bypass the landing page and see the normal forum. Install fof/direct-links for dedicated /login and /register pages, or use the '{{ login\_url }}' and '{{ register\_url }}' template variables in your HTML.
>

```diff
-Wenn aktiviert, umgehen angemeldete Benutzer die Startseite und gelangen direkt zum normalen Forum. Installiere „fof/direct-links“, um eigene Seiten für „/login“ und „/register“ zu erstellen, oder verwende die Vorlagenvariablen „{{ login_url }}“ und „{{ register_url }}“ in deinem HTML-Code.
+Wenn aktiviert, umgehen angemeldete Benutzer die Startseite und gelangen direkt zum normalen Forum. Installiere „fof/direct-links“, um eigene Seiten für /login und /register zu erstellen, oder verwende die Vorlagenvariablen „{{ login_url }}“ und „{{ register_url }}“ in deinem HTML-Code.

```

Wenn aktiviert, umgehen angemeldete Benutzer die Startseite und gelangen direkt zum normalen Forum. Installiere „fof/direct-links“, um eigene Seiten für <del>„/login“</del><ins>/login</ins> und <del>„/register“</del><ins>/register</ins> zu erstellen, oder verwende die Vorlagenvariablen „{{ login\_url }}“ und „{{ register\_url }}“ in deinem HTML-Code.<br />

#### [`tapao-custom-landing-page.admin.settings.guests_only_label`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/de/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.guests_only_label%22)

> Show to guests only

```diff
-Nur Gästen anzeigen
+Nur für Gäste anzeigen
```

Nur <del>Gästen</del><ins>für Gäste</ins> anzeigen

#### [`tapao-custom-landing-page.admin.settings.html_label`](https://weblate.rob006.net/translate/flarum2/tapao-custom-landing-page/de/?q=context%3A%3D%22tapao-custom-landing-page.admin.settings.html_label%22)

> Landing Page HTML

```diff
-HTML-Code der Landingpage
+HTML der Landingpage
```

<del>HTML-Code</del><ins>HTML</ins> der Landingpage


### `tryhackx-homepage-blocks`

#### [`tryhackx-homepage-blocks.admin.settings.show_only_used_tags`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.show_only_used_tags%22)

> Show only tags that have discussions

```diff
-Nur Themen anzeigen, in denen Diskussionen vorhanden sind
+Nur Tags anzeigen, in denen Diskussionen vorhanden sind
```

Nur <del>Themen</del><ins>Tags</ins> anzeigen, in denen Diskussionen vorhanden sind

#### [`tryhackx-homepage-blocks.admin.settings.show_tag_count`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.show_tag_count%22)

> Show discussion count next to tag names

```diff
-Anzahl der Beiträge neben den Themen-Namen anzeigen
+Anzahl der Beiträge neben den Tag-Namen anzeigen
```

Anzahl der Beiträge neben den <del>Themen-Namen</del><ins>Tag-Namen</ins> anzeigen


### `validation`

#### [`validation.present`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.present%22)

> The :attribute field must be present.

```diff
-:attribute muss vorhanden sein.
+Das Feld :attribute muss vorhanden sein.
```

<ins>Das Feld </ins>:attribute muss vorhanden sein.

#### [`validation.prohibited`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.prohibited%22)

> The :attribute field is prohibited.

```diff
-:attribute ist unzulässig.
+Das Feld :attribute ist unzulässig.
```

<ins>Das Feld </ins>:attribute ist unzulässig.

#### [`validation.prohibited_if`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.prohibited_if%22)

> The :attribute field is prohibited when :other is :value.

```diff
-:attribute ist unzulässig, wenn :other :value ist.
+Das Feld :attribute ist unzulässig, wenn :other den Wert :value hat.
```

<ins>Das Feld </ins>:attribute ist unzulässig, wenn :other<ins> den Wert</ins> :value <del>ist.</del><ins>hat.</ins>

#### [`validation.prohibited_unless`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.prohibited_unless%22)

> The :attribute field is prohibited unless :other is in :values.

```diff
-:attribute ist unzulässig, wenn :other nicht :values ist.
+Das Feld :attribute ist unzulässig, wenn :other nicht :values ist.
```

<ins>Das Feld </ins>:attribute ist unzulässig, wenn :other nicht :values ist.

#### [`validation.required`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.required%22)

> The :attribute field is required.

```diff
-:attribute muss ausgefüllt werden.
+Das Feld :attribute muss ausgefüllt werden.
```

<ins>Das Feld </ins>:attribute muss ausgefüllt werden.

#### [`validation.required_unless`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.required_unless%22)

> The :attribute field is required unless :other is in :values.

```diff
-:attribute muss ausgefüllt werden, wenn :other nicht den Wert :values hat.
+Das Feld :attribute muss ausgefüllt werden, wenn :other nicht den Wert :values hat.
```

<ins>Das Feld </ins>:attribute muss ausgefüllt werden, wenn :other nicht den Wert :values hat.

#### [`validation.required_with`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.required_with%22)

> The :attribute field is required when :values is present.

```diff
-:attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.
+Das Feld :attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.
```

<ins>Das Feld </ins>:attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.

#### [`validation.required_with_all`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.required_with_all%22)

> The :attribute field is required when :values are present.

```diff
-:attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.
+Das Feld :attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.
```

<ins>Das Feld </ins>:attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.

#### [`validation.required_without`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.required_without%22)

> The :attribute field is required when :values is not present.

```diff
-:attribute muss ausgefüllt werden, wenn :values nicht ausgefüllt wurde.
+Das Feld :attribute muss ausgefüllt werden, wenn :values nicht ausgefüllt wurde.
```

<ins>Das Feld </ins>:attribute muss ausgefüllt werden, wenn :values nicht ausgefüllt wurde.

#### [`validation.required_without_all`](https://weblate.rob006.net/translate/flarum2/validation/de/?q=context%3A%3D%22validation.required_without_all%22)

> The :attribute field is required when none of :values are present.

```diff
-:attribute muss ausgefüllt werden, wenn keines der Felder :values ausgefüllt wurde.
+Das Feld :attribute muss ausgefüllt werden, wenn keines der Felder :values ausgefüllt wurde.
```

<ins>Das Feld </ins>:attribute muss ausgefüllt werden, wenn keines der Felder :values ausgefüllt wurde.


### `walsgit-discussion-cards`

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/de/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageFail%22)

> ❌ Tag {tagid}'s default image migration failed! Couldn't migrate {filename}: 

```diff
-❌ Die Migration des Standardbildes für das Thema {tagid} ist fehlgeschlagen! Die Migration von {filename} war nicht möglich: 
+❌ Die Migration des Standardbildes für das Tag {tagid} ist fehlgeschlagen! Die Migration von {filename} war nicht möglich: 
```

❌ Die Migration des Standardbildes für das <del>Thema</del><ins>Tag</ins> {tagid} ist fehlgeschlagen! Die Migration von {filename} war nicht möglich: 

#### [`walsgit_discussion_cards.admin.console.regenerateImagesInvalidTagOption`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/de/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesInvalidTagOption%22)

> \--tag must be followed by one or more (comma separated) tag IDs (numbers) and/or quoted tag slugs (ex.: "slug-1", "slug-2").

```diff
---tag muss von einer oder mehreren (durch Kommas getrennten) Tag-IDs (Zahlen) und/oder in Anführungszeichen gesetzten Themen-Slugs (z. B.: „slug-1“, „slug-2“) gefolgt werden.
+--tag muss von einer oder mehreren (durch Kommas getrennten) Tag-IDs (Zahlen) und/oder in Anführungszeichen gesetzten Tag-Slugs (z. B.: „slug-1“, „slug-2“) gefolgt werden.
```

\--tag muss von einer oder mehreren (durch Kommas getrennten) Tag-IDs (Zahlen) und/oder in Anführungszeichen gesetzten <del>Themen-Slugs</del><ins>Tag-Slugs</ins> (z. B.: „slug-1“, „slug-2“) gefolgt werden.

#### [`walsgit_discussion_cards.admin.settings.general.allowedTags_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/de/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowedTags_label%22)

> Select tags

```diff
-Themen auswählen
+Tags auswählen
```

<del>Themen</del><ins>Tags</ins> auswählen

#### [`walsgit_discussion_cards.admin.settings.general.useBlogImages_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/de/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogImages_help%22)

> If option is enabled, the cards' image for every blog post will set to: the blog post's featured image; if none, to the blog's content's first found image; if none, to the blog extension's default image; if none, to the discussion cards' tag default image; if none, to the discussion cards' main default image. Note that custom settings for tags used as blog tags will of course be ignored if you chose to redirect blog tags in the Flarum Blog extension settings.

```diff
-Wenn diese Option aktiviert ist, wird das Bild der Karten für jeden Blogbeitrag wie folgt festgelegt: zunächst das Titelbild des Blogbeitrags; falls kein Titelbild vorhanden ist, das erste gefundene Bild im Inhalt des Blogs; falls kein solches Bild vorhanden ist, das Standardbild der Blog-Erweiterung; falls kein solches Bild vorhanden ist, das Standardbild für Tags der Diskussionskarten; falls kein solches Bild vorhanden ist, das Hauptstandardbild der Diskussionskarten. Beachte, dass benutzerdefinierte Einstellungen für Themen, die als Blog-Themen verwendet werden, natürlich ignoriert werden, wenn du in den Einstellungen der Flarum-Blog-Erweiterung die Umleitung von Blog-Themen ausgewählt hast.
+Wenn diese Option aktiviert ist, wird das Bild der Karten für jeden Blogbeitrag wie folgt festgelegt: zunächst das Titelbild des Blogbeitrags; falls kein Titelbild vorhanden ist, das erste gefundene Bild im Inhalt des Blogs; falls kein solches Bild vorhanden ist, das Standardbild der Blog-Erweiterung; falls kein solches Bild vorhanden ist, das Standardbild für Tags der Diskussionskarten; falls kein solches Bild vorhanden ist, das Hauptstandardbild der Diskussionskarten. Beachte, dass benutzerdefinierte Einstellungen für Tags, die als Blog-Tags verwendet werden, natürlich ignoriert werden, wenn du in den Einstellungen der Flarum-Blog-Erweiterung die Umleitung von Blog-Tags ausgewählt hast.
```

Wenn diese Option aktiviert ist, wird das Bild der Karten für jeden Blogbeitrag wie folgt festgelegt: zunächst das Titelbild des Blogbeitrags; falls kein Titelbild vorhanden ist, das erste gefundene Bild im Inhalt des Blogs; falls kein solches Bild vorhanden ist, das Standardbild der Blog-Erweiterung; falls kein solches Bild vorhanden ist, das Standardbild für Tags der Diskussionskarten; falls kein solches Bild vorhanden ist, das Hauptstandardbild der Diskussionskarten. Beachte, dass benutzerdefinierte Einstellungen für <del>Themen,</del><ins>Tags,</ins> die als <del>Blog-Themen</del><ins>Blog-Tags</ins> verwendet werden, natürlich ignoriert werden, wenn du in den Einstellungen der Flarum-Blog-Erweiterung die Umleitung von <del>Blog-Themen</del><ins>Blog-Tags</ins> ausgewählt hast.

#### [`walsgit_discussion_cards.admin.tags.activation_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/de/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.activation_button%22)

> Activate for this tag

```diff
-Für dieses Thema aktivieren
+Für dieses Tag aktivieren
```

Für dieses <del>Thema</del><ins>Tag</ins> aktivieren

#### [`walsgit_discussion_cards.admin.tags.deactivation_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/de/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.deactivation_button%22)

> Deactivate for this tag

```diff
-Für dieses Thema deaktivieren
+Für dieses Tag deaktivieren
```

Für dieses <del>Thema</del><ins>Tag</ins> deaktivieren


### `yippy-auth-ldap`

#### [`yippy-auth-ldap.forum.errors.domains.empty_host`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_host%22)

> Domain {domain\_index} has no Domains or server IP addresses set, amend extension settings.

```diff
-Für die Domäne {domain_index} sind keine Domänen- oder Server-IP-Adressen festgelegt. Passe die Erweiterungseinstellungen an.
+Für die Domäne {domain_index} sind keine Domänen- oder Server-IP-Adressen festgelegt. Passe die Erweiterungs-Einstellungen an.
```

Für die Domäne {domain\_index} sind keine Domänen- oder Server-IP-Adressen festgelegt. Passe die <del>Erweiterungseinstellungen</del><ins>Erweiterungs-Einstellungen</ins> an.

#### [`yippy-auth-ldap.forum.errors.domains.no_domains`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.no_domains%22)

> Admin settings has no domains set, amend extension settings.

```diff
-In den Admin-Einstellungen sind keine Domänen festgelegt, passe die Erweiterungseinstellungen an.
+In den Admin-Einstellungen sind keine Domänen festgelegt. Passe die Erweiterungs-Einstellungen an.
```

In den Admin-Einstellungen sind keine Domänen <del>festgelegt,</del><ins>festgelegt.</ins> <del>passe</del><ins>Passe</ins> die <del>Erweiterungseinstellungen</del><ins>Erweiterungs-Einstellungen</ins> an.

#### [`yippy-auth-ldap.forum.errors.search_filter_is_invalid`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.search_filter_is_invalid%22)

> Unable to search filter for {server} due to invalid \`LDAP search fields\`, amend extension settings.

```diff
-Die Suche nach {server} kann aufgrund ungültiger „LDAP-Suchfelder“ nicht gefiltert werden. Ändere die Erweiterungseinstellungen.
+Die Suche nach {server} kann aufgrund ungültiger „LDAP-Suchfelder“ nicht gefiltert werden. Passe die Erweiterungs-Einstellungen an.
```

Die Suche nach {server} kann aufgrund ungültiger „LDAP-Suchfelder“ nicht gefiltert werden. <del>Ändere</del><ins>Passe</ins> die <del>Erweiterungseinstellungen.</del><ins>Erweiterungs-Einstellungen an.</ins>


### `yippy-tag-with-themes`

#### [`yippy-tag-with-themes.admin.designs.add`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/de/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.add%22)

> Add Design for Tags

```diff
-Design für Themen hinzufügen
+Design für Tags hinzufügen
```

Design für <del>Themen</del><ins>Tags</ins> hinzufügen

#### [`yippy-tag-with-themes.admin.designs.data.tags_help`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/de/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.data.tags_help%22)

> Choose one or more tag for this customised design theme

```diff
-Wähle eines oder mehrere Themen für dieses benutzerdefinierte Design-Thema aus
+Wähle eines oder mehrere Tags für dieses benutzerdefinierte Design-Thema aus
```

Wähle eines oder mehrere <del>Themen</del><ins>Tags</ins> für dieses benutzerdefinierte Design-Thema aus

#### [`yippy-tag-with-themes.admin.designs.description`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/de/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.description%22)

> Provide a list of rules for displaying different themes for specific tags

```diff
-Erstelle eine Liste mit Regeln für die Anzeige verschiedener Designs für bestimmte Themen
+Erstelle eine Liste mit Regeln für die Anzeige verschiedener Designs für bestimmte Tags
```

Erstelle eine Liste mit Regeln für die Anzeige verschiedener Designs für bestimmte <del>Themen</del><ins>Tags</ins>

#### [`yippy-tag-with-themes.admin.designs.title`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/de/?q=context%3A%3D%22yippy-tag-with-themes.admin.designs.title%22)

> Customised Design Theme for Tags

```diff
-Individuell gestaltetes Design-Thema für Themen
+Individuell gestaltetes Design-Thema für Tags
```

Individuell gestaltetes Design-Thema für <del>Themen</del><ins>Tags</ins>

#### [`yippy-tag-with-themes.admin.labels.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/de/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.display_themes%22)

> Enable Tag for Themes Permission

```diff
-Berechtigung „Thema für Designs“ aktivieren
+Berechtigung „Tag für Designs“ aktivieren
```

Berechtigung <del>„Thema</del><ins>„Tag</ins> für Designs“ aktivieren


## Missing translations

These strings are translated only in `de`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `de`.


### `asyntai-chatbot` (missing)

#### [`asyntai-chatbot.admin.settings.hide_for_members_help`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/de/?q=context%3A%3D%22asyntai-chatbot.admin.settings.hide_for_members_help%22)

> Members who are logged in never see the chat.

```diff
+Angemeldete Mitglieder sehen den Chat nie.
```

#### [`asyntai-chatbot.admin.settings.hide_for_members_label`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/de/?q=context%3A%3D%22asyntai-chatbot.admin.settings.hide_for_members_label%22)

> Show only to guests

```diff
+Nur für Gäste anzeigen
```

#### [`asyntai-chatbot.admin.settings.script_url_help`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/de/?q=context%3A%3D%22asyntai-chatbot.admin.settings.script_url_help%22)

> Leave this field empty to use the standard address https://widget.asyntai.com/static/js/chat-widget.js
>

```diff
+Lasse dieses Feld leer, um die Standardadresse https://widget.asyntai.com/static/js/chat-widget.js zu verwenden.
+
```

#### [`asyntai-chatbot.admin.settings.script_url_label`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/de/?q=context%3A%3D%22asyntai-chatbot.admin.settings.script_url_label%22)

> Script address (optional)

```diff
+Skriptadresse (optional)
```

#### [`asyntai-chatbot.admin.settings.widget_id_help`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/de/?q=context%3A%3D%22asyntai-chatbot.admin.settings.widget_id_help%22)

> Paste the snippet from your Asyntai dashboard, or only the widget ID. Leave this field empty to switch the chat off. You find the ID at asyntai.com under Setup &amp; Integration.
>

```diff
+Füge den Codeausschnitt aus deinem Asyntai-Dashboard ein oder gib nur die Widget-ID ein. Lasse dieses Feld leer, um den Chat zu deaktivieren. Die ID findest du auf asyntai.com unter „Einrichtung & Integration“.
+
```

#### [`asyntai-chatbot.admin.settings.widget_id_label`](https://weblate.rob006.net/translate/flarum2/asyntai-chatbot/de/?q=context%3A%3D%22asyntai-chatbot.admin.settings.widget_id_label%22)

> Asyntai widget ID

```diff
+Asyntai Widget-ID
```


### `ernestdefoe-aurora` (missing)

#### [`ernestdefoe-aurora.admin.settings.accent_color`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.accent_color%22)

> Accent color

```diff
+Akzentfarbe
```

#### [`ernestdefoe-aurora.admin.settings.animate_background`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.animate_background%22)

> Animate aurora background

```diff
+Aurora-Hintergrund animieren
```

#### [`ernestdefoe-aurora.admin.settings.glassmorphism`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.glassmorphism%22)

> Enable glassmorphism (frosted panels)

```diff
+Glas-Morphismus aktivieren (Aussehen wie mattes Glas)
```

#### [`ernestdefoe-aurora.admin.settings.glow`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.glow%22)

> Enable glow effects

```diff
+Glüheffekte aktivieren
```

#### [`ernestdefoe-aurora.admin.settings.gradient_end`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.gradient_end%22)

> Primary gradient — end color

```diff
+Primärfarbverlauf – Endfarbe
```

#### [`ernestdefoe-aurora.admin.settings.gradient_start`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.admin.settings.gradient_start%22)

> Primary gradient — start color

```diff
+Primärfarbverlauf – Startfarbe
```

#### [`ernestdefoe-aurora.forum.palette.apply`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.apply%22)

> Apply {palette} palette

```diff
+Palette {palette} anwenden
```

#### [`ernestdefoe-aurora.forum.palette.aurora`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.aurora%22)

> Aurora

```diff
+Aurora
```

#### [`ernestdefoe-aurora.forum.palette.button_label`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.button_label%22)

> Choose color palette

```diff
+Farbpalette auswählen
```

#### [`ernestdefoe-aurora.forum.palette.ember`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.ember%22)

> Ember

```diff
+Glut
```

#### [`ernestdefoe-aurora.forum.palette.forest`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.forest%22)

> Forest

```diff
+Wald
```

#### [`ernestdefoe-aurora.forum.palette.nebula`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.nebula%22)

> Nebula

```diff
+Nebel
```

#### [`ernestdefoe-aurora.forum.palette.ocean`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.ocean%22)

> Ocean

```diff
+Ozean
```

#### [`ernestdefoe-aurora.forum.palette.palette`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.palette%22)

> Palette

```diff
+Palette
```

#### [`ernestdefoe-aurora.forum.palette.sunset`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.sunset%22)

> Sunset

```diff
+Sonnenuntergang
```

#### [`ernestdefoe-aurora.forum.palette.title`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.title%22)

> Color palette

```diff
+Farbpalette
```

#### [`ernestdefoe-aurora.forum.widgets.discussions`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.discussions%22)

> Discussions

```diff
+Diskussionen
```

#### [`ernestdefoe-aurora.forum.widgets.members`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.members%22)

> Members

```diff
+Mitglieder
```

#### [`ernestdefoe-aurora.forum.widgets.online`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.online%22)

> Online now

```diff
+Jetzt online
```

#### [`ernestdefoe-aurora.forum.widgets.posts`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/de/?q=context%3A%3D%22ernestdefoe-aurora.forum.widgets.posts%22)

> Posts

```diff
+Beiträge
```


### `ffans-creator-declarations` (missing)

#### [`ffans-creator-declarations.admin.permissions.allow_edit_own_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.permissions.allow_edit_own_label%22)

> Allow editing own creator declarations

```diff
+Eigene Urhebererklärung bearbeiten
```

#### [`ffans-creator-declarations.admin.permissions.moderate_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.permissions.moderate_label%22)

> Edit creator declarations on posts

```diff
+Urhebererklärungen aller Beiträge bearbeiten
```

#### [`ffans-creator-declarations.admin.settings.max_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.max_label%22)

> Maximum declarations per post

```diff
+Maximale Anzahl von Erklärungen pro Beitrag
```

#### [`ffans-creator-declarations.admin.settings.order_help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.order_help%22)

> Separate declaration keys with commas. Missing keys are appended automatically. Available keys are original, repost, reference, ai\_generated, fictional, personal\_opinion, professional, sensitive, self\_promotion, and sponsored.

```diff
+Trenne die Erklärungsschlüssel durch Kommas. Fehlende Schlüssel werden automatisch angehängt. Verfügbare Schlüssel sind: original, repost, reference, ai_generated, fictional, personal_opinion, professional, sensitive, self_promotion und sponsored.
```

#### [`ffans-creator-declarations.admin.settings.order_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.order_label%22)

> Declaration order

```diff
+Reihenfolge der Erklärungen
```

#### [`ffans-creator-declarations.admin.settings.required_discussion_help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.required_discussion_help%22)

> Discussions cannot be published until at least one declaration is selected.

```diff
+Diskussionen können erst veröffentlicht werden, wenn mindestens eine Erklärung ausgewählt wurde.
```

#### [`ffans-creator-declarations.admin.settings.required_discussion_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.required_discussion_label%22)

> Require a declaration when starting a discussion

```diff
+Für jede neue Diskussion eine Erklärung verlangen
```

#### [`ffans-creator-declarations.admin.settings.required_reply_help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.required_reply_help%22)

> Replies cannot be published until at least one declaration is selected.

```diff
+Antworten können erst veröffentlicht werden, wenn mindestens eine Erklärung ausgewählt wurde.
```

#### [`ffans-creator-declarations.admin.settings.required_reply_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.required_reply_label%22)

> Require a declaration when replying

```diff
+Für jede Antwort eine Erklärung verlangen
```

#### [`ffans-creator-declarations.admin.settings.show_in_user_post_lists_help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.show_in_user_post_lists_help%22)

> When enabled, creator declarations are displayed with posts in user profile Posts lists.

```diff
+Wenn aktiviert, werden die Urhebererklärungen zusammen mit den Beiträgen in der Beitragsliste des Benutzerprofils angezeigt.
```

#### [`ffans-creator-declarations.admin.settings.show_in_user_post_lists_label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.admin.settings.show_in_user_post_lists_label%22)

> Show creator declarations in profile Posts lists

```diff
+Urhebererklärungen in den Beitragslisten des Profils anzeigen
```

#### [`ffans-creator-declarations.forum.composer.choose`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.composer.choose%22)

> Add self declarations

```diff
+Eigenerklärung hinzufügen
```

#### [`ffans-creator-declarations.forum.composer.selected`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.composer.selected%22)

> {count} declarations selected

```diff
+{count} Erklärungen ausgewählt
```

#### [`ffans-creator-declarations.forum.controls.edit`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.controls.edit%22)

> Edit self declarations

```diff
+Eigenerklärung bearbeiten
```

#### [`ffans-creator-declarations.forum.display.declaration_format`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.declaration_format%22)

> &lt;strong&gt;Author’s declaration:&lt;/strong&gt; {declarations}.

```diff
+<strong>Urhebererklärung:</strong> {declarations}.
```

#### [`ffans-creator-declarations.forum.display.declaration_separator`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.declaration_separator%22)

> ; 

```diff
+; 
```

#### [`ffans-creator-declarations.forum.display.open_details`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.open_details%22)

> View creator declaration details

```diff
+Details der Urhebererklärung anzeigen
```

#### [`ffans-creator-declarations.forum.display.original_notice`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.original_notice%22)

> Original content. Do not reproduce without permission.

```diff
+Originalinhalt. Vervielfältigung ohne Genehmigung untersagt.
```

#### [`ffans-creator-declarations.forum.display.original_summary`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.original_summary%22)

> Original content, do not reproduce without permission

```diff
+Originalinhalt. Vervielfältigung ohne Genehmigung untersagt
```

#### [`ffans-creator-declarations.forum.display.personal_opinion_summary`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.personal_opinion_summary%22)

> Personal opinion, for reference only

```diff
+Persönliche Meinung, nur zur Information
```

#### [`ffans-creator-declarations.forum.display.reference_notice`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.reference_notice%22)

> This content references {source}.

```diff
+Dieser Inhalt bezieht sich auf {source}.
```

#### [`ffans-creator-declarations.forum.display.reference_summary`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.reference_summary%22)

> Content was referenced or quoted

```diff
+Inhalt wurde referenziert oder zitiert
```

#### [`ffans-creator-declarations.forum.display.repost_notice`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.display.repost_notice%22)

> This content comes from {source}.

```diff
+Dieser Inhalt stammt von {source}.
```

#### [`ffans-creator-declarations.forum.info_modal.author_note`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.author_note%22)

> Author's note: 

```diff
+Hinweis des Verfassers: 
```

#### [`ffans-creator-declarations.forum.info_modal.disclaimer`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.disclaimer%22)

> The declarations have not been reviewed or verified by the forum. Please consider them alongside the post content and use your own judgment.

```diff
+Die Aussagen wurden vom Forum weder geprüft noch bestätigt. Bitte betrachte sie im Zusammenhang mit dem Inhalt des Beitrags und bewerte nach eigenem Ermessen.
```

#### [`ffans-creator-declarations.forum.info_modal.explanation`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.explanation%22)

> This notice was added by the author, who declared this post as “{declarations}”.

```diff
+Diese Erklärung wurde vom Verfasser hinzugefügt, der diesen Beitrag als „{declarations}“ gekennzeichnet hat.
```

#### [`ffans-creator-declarations.forum.info_modal.heading`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.heading%22)

> Why am I seeing this notice?

```diff
+Warum wird mir dieser Hinweis angezeigt?
```

#### [`ffans-creator-declarations.forum.info_modal.reference`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.reference%22)

> Reference: 

```diff
+Referenz: 
```

#### [`ffans-creator-declarations.forum.info_modal.source`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.source%22)

> Source: 

```diff
+Quelle: 
```

#### [`ffans-creator-declarations.forum.info_modal.title`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.info_modal.title%22)

> About this declaration

```diff
+Über diese Erklärung
```

#### [`ffans-creator-declarations.forum.modal.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.modal.help%22)

> Select the declarations that apply to this post. They only help readers understand the content and they do not represent the forum's views or constitute verification by the forum.

```diff
+Wähle die Erklärungen aus, die auf diesen Beitrag zutreffen. Sie dienen lediglich dazu, den Lesern das Verständnis des Inhalts zu erleichtern, und geben weder die Ansichten des Forums wieder noch stellen sie eine Überprüfung durch das Forum dar.
```

#### [`ffans-creator-declarations.forum.modal.link_title_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.modal.link_title_placeholder%22)

> Link name (optional)

```diff
+Linkname (optional)
```

#### [`ffans-creator-declarations.forum.modal.save_button`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.modal.save_button%22)

> Save declarations

```diff
+Erklärungen speichern
```

#### [`ffans-creator-declarations.forum.modal.selection_count`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.modal.selection_count%22)

> Selected {selected} / {max}

```diff
+{selected} / {max} ausgewählt
```

#### [`ffans-creator-declarations.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.forum.modal.title%22)

> Self Declarations

```diff
+Eigenerklärung
```

#### [`ffans-creator-declarations.lib.categories.authenticity`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.categories.authenticity%22)

> Authenticity

```diff
+Authentizität
```

#### [`ffans-creator-declarations.lib.categories.commercial`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.categories.commercial%22)

> Commercial disclosure

```diff
+Offenlegung kommerzieller Interessen
```

#### [`ffans-creator-declarations.lib.categories.safety`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.categories.safety%22)

> Safety and content notices

```diff
+Sicherheit und Inhaltswarnungen
```

#### [`ffans-creator-declarations.lib.categories.source`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.categories.source%22)

> Content source

```diff
+Inhaltsherkunft
```

#### [`ffans-creator-declarations.lib.declarations.ai_generated.details_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.ai_generated.details_placeholder%22)

> Optionally name the AI tool or add context

```diff
+Gib optional den Namen des KI-Tools an oder füge weitere Informationen hinzu
```

#### [`ffans-creator-declarations.lib.declarations.ai_generated.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.ai_generated.help%22)

> All or a significant part of the content was created or edited with generative AI.

```diff
+Der Inhalt wurde ganz oder zu einem wesentlichen Teil mit generativer KI erstellt oder bearbeitet.
```

#### [`ffans-creator-declarations.lib.declarations.ai_generated.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.ai_generated.label%22)

> AI-generated content

```diff
+KI-erstellter Inhalt
```

#### [`ffans-creator-declarations.lib.declarations.fictional.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.fictional.help%22)

> The content contains fictional events, role-play, or staged scenes.

```diff
+Der Inhalt enthält fiktive Ereignisse, Rollenspiele oder inszenierte Szenen.
```

#### [`ffans-creator-declarations.lib.declarations.fictional.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.fictional.label%22)

> Fictional or staged content

```diff
+Fiktive oder inszenierte Inhalte
```

#### [`ffans-creator-declarations.lib.declarations.original.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.original.help%22)

> The content was primarily created by the author and is not a direct repost. Please do not reproduce without permission.

```diff
+Der Inhalt wurde überwiegend vom Autor verfasst und ist kein direkter Repost. Bitte nicht ohne Genehmigung weiterveröffentlichen.
```

#### [`ffans-creator-declarations.lib.declarations.original.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.original.label%22)

> Original content

```diff
+Originalinhalt
```

#### [`ffans-creator-declarations.lib.declarations.personal_opinion.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.personal_opinion.help%22)

> This content primarily expresses the author's personal views, judgments, or experiences and does not represent universal facts or professional conclusions.

```diff
+Dieser Inhalt gibt in erster Linie die persönlichen Ansichten, Einschätzungen oder Erfahrungen des Autors wieder und stellt keine allgemeingültigen Tatsachen oder fachlichen Schlussfolgerungen dar.
```

#### [`ffans-creator-declarations.lib.declarations.personal_opinion.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.personal_opinion.label%22)

> Personal opinions or perspectives

```diff
+Persönliche Meinungen oder Sichtweisen
```

#### [`ffans-creator-declarations.lib.declarations.professional.details_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.professional.details_placeholder%22)

> Optionally add safety information

```diff
+Optional Sicherheitshinweise hinzufügen
```

#### [`ffans-creator-declarations.lib.declarations.professional.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.professional.help%22)

> Imitating this activity without suitable expertise may create a safety risk.

```diff
+Das Nachahmen dieser Tätigkeit ohne entsprechende Fachkenntnisse kann ein Sicherheitsrisiko darstellen.
```

#### [`ffans-creator-declarations.lib.declarations.professional.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.professional.label%22)

> Dangerous behavior; do not imitate

```diff
+Gefährliches Verhalten; bitte nicht nachmachen
```

#### [`ffans-creator-declarations.lib.declarations.reference.details_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.reference.details_placeholder%22)

> Enter the original source URL (required)

```diff
+Gib die Quell-URL des Originals ein (erforderlich)
```

#### [`ffans-creator-declarations.lib.declarations.reference.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.reference.help%22)

> The content references or quotes material from another author or source.

```diff
+Der Inhalt bezieht sich auf Material eines anderen Autors oder einer anderen Quelle bzw. zitiert dieses.
```

#### [`ffans-creator-declarations.lib.declarations.reference.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.reference.label%22)

> Referenced or quoted content

```diff
+Wiederveröffentlichter oder zitierter Inhalt
```

#### [`ffans-creator-declarations.lib.declarations.repost.details_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.repost.details_placeholder%22)

> Enter the original source URL (required)

```diff
+Gib die Quell-URL des Originals ein (erforderlich)
```

#### [`ffans-creator-declarations.lib.declarations.repost.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.repost.help%22)

> The content is primarily reposted from another author or source.

```diff
+Der Inhalt ist überwiegend ein Wiederveröffentlichung von einem anderen Autor oder aus einer anderen Quelle.
```

#### [`ffans-creator-declarations.lib.declarations.repost.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.repost.label%22)

> Reposted content

```diff
+Wiederveröffentlichter Inhalt
```

#### [`ffans-creator-declarations.lib.declarations.self_promotion.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.self_promotion.help%22)

> The content promotes products or services from the author, their organization, or third parties and may involve affiliate commissions or other compensation.

```diff
+Der Inhalt wirbt für Produkte oder Dienstleistungen des Verfassers, seiner Organisation oder Dritter und kann mit Affiliate-Provisionen oder anderen Vergütungen verbunden sein.
```

#### [`ffans-creator-declarations.lib.declarations.self_promotion.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.self_promotion.label%22)

> Contains marketing or promotional information

```diff
+Enthält Marketing- oder Werbeinformationen
```

#### [`ffans-creator-declarations.lib.declarations.sensitive.details_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.sensitive.details_placeholder%22)

> Optionally describe the content notice

```diff
+Beschreibe optional den Inhaltshinweis
```

#### [`ffans-creator-declarations.lib.declarations.sensitive.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.sensitive.help%22)

> The content may include disturbing, frightening, or sensitive descriptions.

```diff
+Der Inhalt kann verstörende, beängstigende oder sensible Darstellungen enthalten.
```

#### [`ffans-creator-declarations.lib.declarations.sensitive.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.sensitive.label%22)

> Potentially disturbing

```diff
+Möglicherweise verstörend
```

#### [`ffans-creator-declarations.lib.declarations.sponsored.details_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.sponsored.details_placeholder%22)

> Optionally name the partner or describe the relationship

```diff
+Gib optional den Namen des Partners an oder beschreibe die Beziehung
```

#### [`ffans-creator-declarations.lib.declarations.sponsored.help`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.sponsored.help%22)

> A third party provided payment, gifts, or another material benefit.

```diff
+Ein Dritter hat Zahlungen, Geschenke oder einen anderen materiellen Vorteil gewährt.
```

#### [`ffans-creator-declarations.lib.declarations.sponsored.label`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.declarations.sponsored.label%22)

> Paid partnership, sponsorship, or material interest

```diff
+Bezahlte Partnerschaft, Sponsoring oder materielles Interesse
```

#### [`ffans-creator-declarations.lib.validation.details_too_long`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.details_too_long%22)

> Declaration details may not exceed 500 characters.

```diff
+Die Angaben zur Erklärung dürfen 500 Zeichen nicht überschreiten.
```

#### [`ffans-creator-declarations.lib.validation.invalid_payload`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.invalid_payload%22)

> The declaration payload is invalid.

```diff
+Die Nutzdaten der Erklärung sind ungültig.
```

#### [`ffans-creator-declarations.lib.validation.invalid_selection`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.invalid_selection%22)

> The declaration selection is invalid.

```diff
+Die Auswahl der Erklärungen ist ungültig.
```

#### [`ffans-creator-declarations.lib.validation.required`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.required%22)

> At least one declaration is required.

```diff
+Mindestens eine Erklärung ist erforderlich.
```

#### [`ffans-creator-declarations.lib.validation.source_conflict`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.source_conflict%22)

> Original, reposted, and referenced content declarations cannot be selected at the same time.

```diff
+Die Optionen „Originalinhalt“, „wiederveröffentlicht“ und „zitiert“ können nicht gleichzeitig ausgewählt werden.
```

#### [`ffans-creator-declarations.lib.validation.source_url_required`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.source_url_required%22)

> A valid source URL is required for reposted or referenced content.

```diff
+Für wiederveröffentlichte oder zitierte Inhalte ist eine gültige Quell-URL erforderlich.
```

#### [`ffans-creator-declarations.lib.validation.title_too_long`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.title_too_long%22)

> The link name may not exceed 100 characters.

```diff
+Der Name des Links darf nicht länger als 100 Zeichen sein.
```

#### [`ffans-creator-declarations.lib.validation.too_many`](https://weblate.rob006.net/translate/flarum2/ffans-creator-declarations/de/?q=context%3A%3D%22ffans-creator-declarations.lib.validation.too_many%22)

> Too many declarations were selected.

```diff
+Es wurden zu viele Erklärungen ausgewählt.
```


### `forumaker-magicbb` (missing)

#### [`forumaker-magicbb.admin.permissions.bypass_like`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.bypass_like%22)

> Bypass like requirement

```diff
+Like-Anforderung umgehen
```

#### [`forumaker-magicbb.admin.permissions.bypass_reply`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.bypass_reply%22)

> Bypass reply requirement

```diff
+Antwort-Anforderung umgehen
```

#### [`forumaker-magicbb.admin.sections.hide`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.sections.hide%22)

> Hide buttons

```diff
+Schaltflächen ausblenden
```

#### [`forumaker-magicbb.admin.settings.bb_anchor`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_anchor%22)

> Anchor &amp; Jump

```diff
+Anchor & Sprunglinks
```

#### [`forumaker-magicbb.admin.settings.bb_anchor_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_anchor_help%22)

> Named scroll targets and jump links within a post

```diff
+Benannte Scroll-Ziele und Sprunglinks innerhalb eines Beitrags
```

#### [`forumaker-magicbb.admin.settings.bb_hide_like`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_like%22)

> Like

```diff
+Like
```

#### [`forumaker-magicbb.admin.settings.bb_hide_like_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_like_help%22)

> Content is hidden until the user likes the post

```diff
+Der Inhalt ist so lange verborgen bis der Benutzer den Beitrag liked
```

#### [`forumaker-magicbb.admin.settings.bb_hide_login`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_login%22)

> Login

```diff
+Anmeldung
```

#### [`forumaker-magicbb.admin.settings.bb_hide_login_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_login_help%22)

> Content is hidden from guests and visible to all logged-in users

```diff
+Der Inhalt ist für Gäste verborgen und für alle angemeldeten Benutzer sichtbar
```

#### [`forumaker-magicbb.admin.settings.bb_hide_reply`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_reply%22)

> Reply

```diff
+Antwort
```

#### [`forumaker-magicbb.admin.settings.bb_hide_reply_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_reply_help%22)

> Content is hidden until the user replies in the discussion

```diff
+Der Inhalt ist so lange verborgen bis der Benutzer in der Diskussion antwortet
```

#### [`forumaker-magicbb.forum.composer.anchor_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.composer.anchor_button%22)

> Add anchor

```diff
+Anchor hinzufügen
```

#### [`forumaker-magicbb.forum.composer.hide_like_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_like_button%22)

> Hidden — like required

```diff
+Verborgen — Like erforderlich
```

#### [`forumaker-magicbb.forum.composer.hide_login_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_login_button%22)

> Hidden — login required

```diff
+Verborgen — Anmeldung erforderlich
```

#### [`forumaker-magicbb.forum.composer.hide_reply_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_reply_button%22)

> Hidden — reply required

```diff
+Verborgen — Antwort erforderlich
```

#### [`forumaker-magicbb.forum.composer.jump_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.composer.jump_button%22)

> Add jump link

```diff
+Sprunglink hinzufügen
```

#### [`forumaker-magicbb.forum.hide.like_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.hide.like_to_see_simple%22)

> Like this post to see this content

```diff
+Vergib einen Like an diesen Beitrag, um diesen Inhalt anzuzeigen
```

#### [`forumaker-magicbb.forum.hide.login_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.hide.login_to_see_simple%22)

> Log in to see this content

```diff
+Melde dich an, um diesen Inhalt anzuzeigen
```

#### [`forumaker-magicbb.forum.hide.reply_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/de/?q=context%3A%3D%22forumaker-magicbb.forum.hide.reply_to_see_simple%22)

> Reply in this discussion to see this content

```diff
+Antworte in dieser Diskussion, um diesen Inhalt anzuzeigen
```


### `forumaker-magicread` (missing)

#### [`forumaker-magicread.admin.settings.enable_counter`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_counter%22)

> Live character counter in composer

```diff
+Live-Zeichenzähler im Composer
```

#### [`forumaker-magicread.admin.settings.enable_counter_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_counter_help%22)

> Adds a character counter to the top-right corner of the message input

```diff
+Fügt oben rechts im Eingabefeld für Nachrichten einen Zeichen-Zähler hinzu
```

#### [`forumaker-magicread.admin.settings.enable_discussion_pager`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_discussion_pager%22)

> Show page navigation instead of scroll bar

```diff
+Seitennavigation anstelle der Bildlaufleiste anzeigen
```

#### [`forumaker-magicread.admin.settings.enable_discussion_pager_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_discussion_pager_help%22)

> Removes the discussion scrubber, adds page navigation above and below the page and disables auto-scrolling

```diff
+Entfernt den Diskussions-Scrubber, fügt oben und unten auf der Seite eine Seitennavigation hinzu und deaktiviert das automatische Scrollen
```

#### [`forumaker-magicread.admin.settings.enable_pagination`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_pagination%22)

> Add page navigation below the scroll bar

```diff
+Fügt Seitennavigation unterhalb der Scrollleiste hinzu
```

#### [`forumaker-magicread.admin.settings.enable_pagination_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_pagination_help%22)

> Keeps the discussion scrubber visible and adds a page picker below it

```diff
+Hält den Diskussions-Scrubber sichtbar und fügt darunter eine Seitenauswahl hinzu
```

#### [`forumaker-magicread.admin.settings.enable_readmore`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore%22)

> Read more preview on profile page

```diff
+Weitere Vorschau auf der Profilseite lesen
```

#### [`forumaker-magicread.admin.settings.enable_readmore_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore_help%22)

> Hides long posts on profile pages and adds a button to expand them

```diff
+Blendet lange Beiträge auf Profilseiten aus und fügt eine Schaltfläche hinzu, um sie zu erweitern
```

#### [`forumaker-magicread.admin.settings.section_pagination`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.admin.settings.section_pagination%22)

> Pagination

```diff
+Paginierung
```

#### [`forumaker-magicread.forum.counter.label`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.counter.label%22)

> Characters

```diff
+Zeichen
```

#### [`forumaker-magicread.forum.pager.first`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.first%22)

> Return to the beginning

```diff
+Zurück zum Anfang
```

#### [`forumaker-magicread.forum.pager.go`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.go%22)

> Go

```diff
+Los
```

#### [`forumaker-magicread.forum.pager.input_label`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.input_label%22)

> Jump to page

```diff
+Zu Seite wechseln
```

#### [`forumaker-magicread.forum.pager.last`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.last%22)

> Go to the last page

```diff
+Gehe zur letzten Seite
```

#### [`forumaker-magicread.forum.pager.next`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.next%22)

> Next page

```diff
+Nächste Seite
```

#### [`forumaker-magicread.forum.pager.page`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.page%22)

> Page

```diff
+Seite
```

#### [`forumaker-magicread.forum.pager.prev`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.pager.prev%22)

> Previous page

```diff
+Vorherige Seite
```

#### [`forumaker-magicread.forum.read_more`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/de/?q=context%3A%3D%22forumaker-magicread.forum.read_more%22)

> Read more

```diff
+Mehr lesen
```


### `forumfortress-flarum` (missing)

#### [`forumfortress-flarum.admin.dashboard.action_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.action_success%22)

> Action completed successfully.

```diff
+Aktion erfolgreich abgeschlossen.
```

#### [`forumfortress-flarum.admin.dashboard.active`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.active%22)

> Active

```diff
+Aktiv
```

#### [`forumfortress-flarum.admin.dashboard.allowed`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.allowed%22)

> allowed

```diff
+erlaubt
```

#### [`forumfortress-flarum.admin.dashboard.attack_end_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.attack_end_success%22)

> Attack mode is now disabled.

```diff
+Angriffsmodus ist jetzt deaktiviert.
```

#### [`forumfortress-flarum.admin.dashboard.attack_start_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.attack_start_success%22)

> Attack mode is now enabled.

```diff
+Angriffsmodus ist jetzt aktiviert.
```

#### [`forumfortress-flarum.admin.dashboard.automatic_selection`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.automatic_selection%22)

> Automatic selection

```diff
+Automatische Auswahl
```

#### [`forumfortress-flarum.admin.dashboard.blocked`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.blocked%22)

> blocked

```diff
+blockiert
```

#### [`forumfortress-flarum.admin.dashboard.checking`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.checking%22)

> Checking...

```diff
+Wird überprüft...
```

#### [`forumfortress-flarum.admin.dashboard.checks_this_month`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.checks_this_month%22)

> Checks this month

```diff
+Prüft diesen Monat
```

#### [`forumfortress-flarum.admin.dashboard.configured`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.configured%22)

> Configured

```diff
+Konfiguriert
```

#### [`forumfortress-flarum.admin.dashboard.connected`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.connected%22)

> Connected

```diff
+Verbunden
```

#### [`forumfortress-flarum.admin.dashboard.connection_test`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.connection_test%22)

> Connection test

```diff
+Verbindungstest
```

#### [`forumfortress-flarum.admin.dashboard.contact_support`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.contact_support%22)

> Contact support

```diff
+Kundendienst kontaktieren
```

#### [`forumfortress-flarum.admin.dashboard.decisions`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.decisions%22)

> Decisions

```diff
+Entscheidungen
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_confirm`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_confirm%22)

> Remove this forum from Forum Fortress? This cannot be undone. Other forums and paid non-trial accounts will be retained.

```diff
+Dieses Forum aus „Forum Fortress“ entfernen? Dieser Vorgang kann nicht rückgängig gemacht werden. Andere Foren und kostenpflichtige Konten (keine Testkonten) bleiben erhalten.
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_help%22)

> Use this before removing the Composer package through Extension Manager. It removes this forum from Forum Fortress, clears local credentials, and pauses automatic bootstrap until the extension is re-enabled. Paid non-trial accounts are retained; accounts with other forums keep those forums.

```diff
+Führe diesen Vorgang durch, bevor du das Composer-Paket über den Extension Manager entfernst. Dadurch wird dieses Forum aus Forum Fortress entfernt, lokale Anmeldedaten werden gelöscht und der automatische Bootstrap-Vorgang wird angehalten, bis die Erweiterung wieder aktiviert wird. Bezahlte Nicht-Testkonten bleiben erhalten; Konten mit anderen Foren behalten diese Foren.
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_pending`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_pending%22)

> Remote cleanup from a previous removal is still pending.

```diff
+Die Fernbereinigung nach einer früheren Deinstallation steht noch aus.
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_site`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_site%22)

> Disconnect and remove site

```diff
+Verbindung trennen und Seite entfernen
```

#### [`forumfortress-flarum.admin.dashboard.deprovision_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.deprovision_success%22)

> The Forum Fortress site was removed and automatic bootstrap is paused. Re-enable or reinstall the extension when you want to reconnect.

```diff
+Die „Forum Fortress“-Website wurde entfernt und der automatische Bootstrap-Vorgang wurde angehalten. Aktiviere die Erweiterung erneut oder installiere sie neu, wenn du die Verbindung wiederherstellen möchten.
```

#### [`forumfortress-flarum.admin.dashboard.disconnected`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.disconnected%22)

> Disconnected

```diff
+Nicht verbunden
```

#### [`forumfortress-flarum.admin.dashboard.dismiss`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.dismiss%22)

> Dismiss

```diff
+Verwerfen
```

#### [`forumfortress-flarum.admin.dashboard.enable_attack_mode`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.enable_attack_mode%22)

> Enable attack mode

```diff
+Angriffsmodus aktivieren
```

#### [`forumfortress-flarum.admin.dashboard.end_attack_mode`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.end_attack_mode%22)

> End attack mode

```diff
+Angriffsmodus beenden
```

#### [`forumfortress-flarum.admin.dashboard.maintenance`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.maintenance%22)

> Maintenance and recovery

```diff
+Wartung und Wiederherstellung
```

#### [`forumfortress-flarum.admin.dashboard.maintenance_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.maintenance_help%22)

> Less common account and diagnostic actions

```diff
+Weniger häufige Konto- und Diagnosemaßnahmen
```

#### [`forumfortress-flarum.admin.dashboard.not_available`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.not_available%22)

> N/A

```diff
+Nicht verfügbar
```

#### [`forumfortress-flarum.admin.dashboard.not_checked`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.not_checked%22)

> Not checked

```diff
+Noch nicht geprüft
```

#### [`forumfortress-flarum.admin.dashboard.plan`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.plan%22)

> Plan

```diff
+Plan
```

#### [`forumfortress-flarum.admin.dashboard.portal_login`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_login%22)

> Portal Login

```diff
+Portal-Anmeldung
```

#### [`forumfortress-flarum.admin.dashboard.portal_popup_blocked`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_popup_blocked%22)

> The browser blocked the portal window. Allow popups for this site and try again.

```diff
+Der Browser hat das Portal-Fenster blockiert. Erlaube Popups für diese Website und versuche es erneut.
```

#### [`forumfortress-flarum.admin.dashboard.portal_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_success%22)

> Portal opened in a new tab.

```diff
+Das Portal wird in einem neuen Tab geöffnet.
```

#### [`forumfortress-flarum.admin.dashboard.portal_url_missing`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.portal_url_missing%22)

> Forum Fortress did not return a portal URL.

```diff
+Forum Fortress hat keine Portal-URL zurückgegeben.
```

#### [`forumfortress-flarum.admin.dashboard.preferred_endpoint`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.preferred_endpoint%22)

> Preferred endpoint

```diff
+Bevorzugter Endpunkt
```

#### [`forumfortress-flarum.admin.dashboard.protection`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.protection%22)

> Protection

```diff
+Schutz
```

#### [`forumfortress-flarum.admin.dashboard.refresh`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.refresh%22)

> Refresh

```diff
+Aktualisieren
```

#### [`forumfortress-flarum.admin.dashboard.refresh_to_view`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.refresh_to_view%22)

> Refresh to view

```diff
+Zur Anzeige aktualisieren
```

#### [`forumfortress-flarum.admin.dashboard.register_site`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.register_site%22)

> Register site

```diff
+Seite registrieren
```

#### [`forumfortress-flarum.admin.dashboard.register_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.register_success%22)

> Site registration completed.

```diff
+Seitenregistrierung abgeschlossen.
```

#### [`forumfortress-flarum.admin.dashboard.registration_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.registration_help%22)

> Use Register Site only when attaching this forum to an account. Normal operation bootstraps automatically, and portal registration remains available.

```diff
+Verwende „Seite registrieren“ nur, wenn du dieses Forum mit einem Konto verknüpfst. Im Normalbetrieb erfolgt die Initialisierung automatisch, und die Portalregistrierung bleibt weiterhin verfügbar.
```

#### [`forumfortress-flarum.admin.dashboard.request_failed`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.request_failed%22)

> Forum Fortress could not complete the request. Check the connection and try again.

```diff
+Forum Fortress konnte die Anfrage nicht ausführen. Überprüfe die Verbindung und versuche es erneut.
```

#### [`forumfortress-flarum.admin.dashboard.request_timeout`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.request_timeout%22)

> The request timed out before Forum Fortress responded.

```diff
+Die Anfrage lief ab, bevor Forum Fortress antwortete.
```

#### [`forumfortress-flarum.admin.dashboard.site_id`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.site_id%22)

> Site ID

```diff
+Seiten-ID
```

#### [`forumfortress-flarum.admin.dashboard.site_status`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.site_status%22)

> Site status

```diff
+Seitenstatus
```

#### [`forumfortress-flarum.admin.dashboard.status_summary`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.status_summary%22)

> Live connection and usage summary

```diff
+Echtzeit-Verbindung und Nutzungsübersicht
```

#### [`forumfortress-flarum.admin.dashboard.sync_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.sync_success%22)

> Forum Fortress synchronization completed.

```diff
+Synchronisierung mit Forum Fortress abgeschlossen.
```

#### [`forumfortress-flarum.admin.dashboard.synchronize_now`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.synchronize_now%22)

> Synchronize now

```diff
+Jetzt synchronisieren
```

#### [`forumfortress-flarum.admin.dashboard.tagline`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.tagline%22)

> Protection status, controls, and account links.

```diff
+Schutzstatus, Steuerungen und Kontenverknüpfungen.
```

#### [`forumfortress-flarum.admin.dashboard.test_success`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.test_success%22)

> Connection test completed successfully.

```diff
+Verbindungstest erfolgreich abgeschlossen.
```

#### [`forumfortress-flarum.admin.dashboard.unknown`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.dashboard.unknown%22)

> Unknown

```diff
+Unbekannt
```

#### [`forumfortress-flarum.admin.settings.allow_global_fallback_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.allow_global_fallback_help%22)

> After a regional retry fails, permit the global network. Processing may occur outside the selected region.

```diff
+Wenn ein regionaler Wiederholungsversuch fehlschlägt, aktiviere das globale Netzwerk. Die Verarbeitung kann außerhalb der ausgewählten Region erfolgen.
```

#### [`forumfortress-flarum.admin.settings.allow_global_fallback_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.allow_global_fallback_label%22)

> Allow global emergency fallback

```diff
+Globales Notfall-Fallback zulassen
```

#### [`forumfortress-flarum.admin.settings.api_base_url_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_base_url_label%22)

> Check API base URL

```diff
+API-Basis-URL prüfen
```

#### [`forumfortress-flarum.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_key_help%22)

> Leave blank to bootstrap an anonymous site and receive a stable key automatically.

```diff
+Lasse das Feld leer, um eine anonyme Website zu erstellen und automatisch einen stabilen Schlüssel zu erhalten.
```

#### [`forumfortress-flarum.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_key_label%22)

> Site API key

```diff
+Seiten-API-Schlüssel
```

#### [`forumfortress-flarum.admin.settings.api_region_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_region_help%22)

> Lock check traffic to a region, or use the recommended global network.

```diff
+Beschränke den Datenverkehr auf eine Region oder nutze das empfohlene globale Netzwerk.
```

#### [`forumfortress-flarum.admin.settings.api_region_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.api_region_label%22)

> API region

```diff
+API-Region
```

#### [`forumfortress-flarum.admin.settings.block_reject_action_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.block_reject_action_label%22)

> BLOCK moderation action

```diff
+Moderationsaktion für BLOCK
```

#### [`forumfortress-flarum.admin.settings.block_reject_action_reject`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.block_reject_action_reject%22)

> Reject content

```diff
+Inhalt ablehnen
```

#### [`forumfortress-flarum.admin.settings.block_reject_action_spam_clean`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.block_reject_action_spam_clean%22)

> Spam-clean content and suspend its author

```diff
+Spam - Inhalte entfernen und den Verfasser sperren
```

#### [`forumfortress-flarum.admin.settings.controls_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.controls_label%22)

> Service controls

```diff
+Dienststeuerungen
```

#### [`forumfortress-flarum.admin.settings.debug_log_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.debug_log_label%22)

> Log transient API failures

```diff
+Vorübergehende API-Fehler protokollieren
```

#### [`forumfortress-flarum.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.enabled_help%22)

> Check registrations, topics, replies, posts, and profile changes against Forum Fortress.

```diff
+Registrierungen, Diskussionen, Antworten, Beiträge und Profiländerungen mit „Forum Fortress“ gegenprüfen.
```

#### [`forumfortress-flarum.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.enabled_label%22)

> Enable Forum Fortress protection

```diff
+Schutz durch Forum Fortress aktivieren
```

#### [`forumfortress-flarum.admin.settings.fail_open_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.fail_open_help%22)

> Recommended for normal operation so a network outage does not lock users out.

```diff
+Wird für den Normalbetrieb empfohlen, damit die Benutzer bei einem Netzwerkausfall nicht ausgesperrt werden.
```

#### [`forumfortress-flarum.admin.settings.fail_open_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.fail_open_label%22)

> Allow requests when Forum Fortress is unavailable

```diff
+Anfragen erlauben, auch wenn Forum Fortress nicht verfügbar ist
```

#### [`forumfortress-flarum.admin.settings.preferred_endpoint_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.preferred_endpoint_help%22)

> Populated automatically when bootstrap selects a regional endpoint.

```diff
+Wird automatisch ausgefüllt, wenn Bootstrap einen regionalen Endpunkt auswählt.
```

#### [`forumfortress-flarum.admin.settings.preferred_endpoint_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.preferred_endpoint_label%22)

> Preferred edge endpoint

```diff
+Bevorzugter Edge-Endpunkt
```

#### [`forumfortress-flarum.admin.settings.region_eu`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_eu%22)

> European Union only

```diff
+Nur Europäische Union
```

#### [`forumfortress-flarum.admin.settings.region_global`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_global%22)

> Global - Recommended

```diff
+Global - Empfohlen
```

#### [`forumfortress-flarum.admin.settings.region_uk`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_uk%22)

> United Kingdom only

```diff
+Nur Vereinigtes Königreich
```

#### [`forumfortress-flarum.admin.settings.region_us`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.region_us%22)

> United States only

```diff
+Nur Vereinigte Staaten
```

#### [`forumfortress-flarum.admin.settings.registration_email_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.registration_email_help%22)

> Optional for normal operation. Set this to your account email only when using the plugin Register Site flow; portal registration does not need it.

```diff
+Für den normalen Betrieb optional. Gib hier nur die E-Mail-Adresse deines Kontos ein, wenn du den Plugin-Ablauf „Register Site“ verwendest; für die Registrierung über das Portal ist dies nicht erforderlich.
```

#### [`forumfortress-flarum.admin.settings.registration_email_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.registration_email_label%22)

> Site registration email

```diff
+Zur Registrierung der Seite verwendete E-Mail
```

#### [`forumfortress-flarum.admin.settings.timeout_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.timeout_label%22)

> Request timeout in seconds

```diff
+Zeitlimit für die Anfrage in Sekunden
```


### `huoxin-money-with-history` (missing)

#### [`huoxin-money-with-history.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huoxin-money-with-history/de/?q=context%3A%3D%22huoxin-money-with-history.admin.settings.title%22)

> Settings

```diff
+Einstellungen
```


### `linkrobins-badge-labels` (missing)

#### [`linkrobins-badge-labels.admin.settings.arrangement_centered`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.arrangement_centered%22)

> One per row, centered

```diff
+Eines pro Zeile, zentriert
```

#### [`linkrobins-badge-labels.admin.settings.arrangement_grid`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.arrangement_grid%22)

> Centered, icons sharing rows

```diff
+Zentriert, Symbole in einer Zeile
```

#### [`linkrobins-badge-labels.admin.settings.arrangement_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.arrangement_help%22)

> How the badges under the avatar are arranged. Only used when something sits below the avatar. Rows is how they have always been laid out. The grid lets badges with no title share a row, so a column of icons reads as a block under the avatar instead of a long thin line.

```diff
+Wie die Abzeichen unter dem Avatar angeordnet sind. Wird nur verwendet, wenn sich etwas unterhalb des Avatars befindet. Bei der Anordnung „Zeilen“ werden sie wie bisher angeordnet. Bei der Anordnung „Raster“ teilen sich Abzeichen ohne Titel eine Zeile, sodass eine Spalte mit Symbolen unter dem Avatar wie ein Block wirkt und nicht wie eine lange, schmale Linie.
```

#### [`linkrobins-badge-labels.admin.settings.arrangement_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.arrangement_label%22)

> Badge arrangement

```diff
+Anordnung der Abzeichen
```

#### [`linkrobins-badge-labels.admin.settings.arrangement_rows`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.arrangement_rows%22)

> One per row

```diff
+Eines pro Zeile
```

#### [`linkrobins-badge-labels.admin.settings.avatar_gap_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.avatar_gap_help%22)

> The space between the avatar and the first badge under it. Only used when something sits below the avatar. Between 0 and 60.

```diff
+Der Abstand zwischen dem Avatar und dem ersten Abzeichen darunter. Wird nur verwendet, wenn sich etwas unterhalb des Avatars befindet. Zwischen 0 und 60.
```

#### [`linkrobins-badge-labels.admin.settings.avatar_gap_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.avatar_gap_label%22)

> Gap below the avatar (pixels)

```diff
+Abstand unterhalb des Avatars (in Pixeln)
```

#### [`linkrobins-badge-labels.admin.settings.column_width_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.column_width_help%22)

> How much room the badges and titles get beside the post. Only used when something sits below the avatar. Between 85 and 400.

```diff
+Wie viel Platz die Abzeichen und Titel neben dem Beitrag einnehmen. Wird nur verwendet, wenn etwas unterhalb des Avatars angezeigt wird. Zwischen 85 und 400.
```

#### [`linkrobins-badge-labels.admin.settings.column_width_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.column_width_label%22)

> Author column width (pixels)

```diff
+Breite der Autorenspalte (Pixel)
```

#### [`linkrobins-badge-labels.admin.settings.discussion_badges_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.discussion_badges_help%22)

> A discussion's own badges, such as sticky and locked, normally sit in a narrow strip over its avatar in the discussion list, where they overlap it and have no room for names. This moves them down to the line under the title instead. Whether they are named there follows the badge titles setting above, so you can move them and still keep them as plain icons.

```diff
+Die für eine Diskussion spezifischen Symbole, wie beispielsweise „Angeheftet“ und „Gesperrt“, werden normalerweise in einem schmalen Streifen über dem Avatar in der Diskussionsliste angezeigt, wo sie diesen überlappen und keinen Platz für Namen lassen. Durch diese Änderung werden sie stattdessen in die Zeile unterhalb des Titels verschoben. Ob sie dort mit Namen angezeigt werden, hängt von der oben festgelegten Einstellung für Symboltitel ab, sodass du sie verschieben und dennoch als einfache Symbole beibehalten kannst.
```

#### [`linkrobins-badge-labels.admin.settings.discussion_badges_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.discussion_badges_label%22)

> Move discussion badges under the title

```diff
+Diskussionsabzeichen unter den Titel verschieben
```

#### [`linkrobins-badge-labels.admin.settings.header_position_after`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.header_position_after%22)

> After the time

```diff
+Nach der Uhrzeit
```

#### [`linkrobins-badge-labels.admin.settings.header_position_before`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.header_position_before%22)

> Before the time, next to the username

```diff
+Vor der Uhrzeit, hinter dem Benutzernamen
```

#### [`linkrobins-badge-labels.admin.settings.header_position_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.header_position_help%22)

> Which side of the post's time the badges sit on, when they are on the post header line. Only used when something is on that line. After the time is where they have always been. Before it puts them straight after the username, which is where other extensions tend to put theirs, though a forum with long badge names has less room for them there.

```diff
+Auf welcher Seite der Uhrzeit des Beitrags die Abzeichen angezeigt werden, wenn sie in der Kopfzeile des Beitrags stehen. Wird nur verwendet, wenn sich etwas in dieser Zeile befindet. Nach der Uhrzeit befinden sie sich dort, wo sie schon immer waren. Vor der Uhrzeit werden sie direkt nach dem Benutzernamen angezeigt – dort, wo andere Erweiterungen ihre Abzeichen in der Regel platzieren, obwohl in einem Forum mit langen Abzeichen-Namen dort weniger Platz für sie ist.
```

#### [`linkrobins-badge-labels.admin.settings.header_position_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.header_position_label%22)

> Badge position on the header line

```diff
+Abzeichenposition in der Kopfzeile
```

#### [`linkrobins-badge-labels.admin.settings.labels_all`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.labels_all%22)

> On every badge

```diff
+Bei jedem Abzeichen
```

#### [`linkrobins-badge-labels.admin.settings.labels_first`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.labels_first%22)

> On the first badge only

```diff
+Nur bei erstem Abzeichen
```

#### [`linkrobins-badge-labels.admin.settings.labels_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.labels_help%22)

> Show each badge's name next to its icon instead of the icon on its own. Only the first badge is a user's main one, so this can spell that one out and leave the rest as icons.

```diff
+Zeige den Namen jedes Abzeichens neben dem entsprechenden Symbol an, anstatt nur das Symbol allein anzuzeigen. Da nur das erste Abzeichen das Hauptabzeichen eines Benutzers ist, kann dessen Name vollständig angezeigt werden, während die übrigen als Symbole dargestellt werden.
```

#### [`linkrobins-badge-labels.admin.settings.labels_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.labels_label%22)

> Show full badge titles

```diff
+Vollständigen Abzeichentitel anzeigen
```

#### [`linkrobins-badge-labels.admin.settings.labels_none`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.labels_none%22)

> Off: icons only

```diff
+Aus: Nur Symbole
```

#### [`linkrobins-badge-labels.admin.settings.layout_below`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.layout_below%22)

> Below the avatar

```diff
+Unter dem Avatar
```

#### [`linkrobins-badge-labels.admin.settings.layout_beside`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.layout_beside%22)

> Beside the username

```diff
+Neben dem Benutzernamen
```

#### [`linkrobins-badge-labels.admin.settings.layout_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.layout_help%22)

> Where a post author's badges appear. Below the avatar gives each badge its own row in a widened author column. Beside the username keeps the author column as it is and puts the badges on the post header line.

```diff
+Hier werden die Abzeichen des Autors eines Beitrags angezeigt. Unterhalb des Avatars erhält jedes Abzeichen eine eigene Zeile in einer verbreiterten Autorenspalte. Neben dem Benutzernamen bleibt die Autorenspalte unverändert, und die Abzeichen werden in der Kopfzeile des Beitrags angezeigt.
```

#### [`linkrobins-badge-labels.admin.settings.layout_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.layout_label%22)

> Badge placement

```diff
+Abzeichen-Platzierung
```

#### [`linkrobins-badge-labels.admin.settings.phone_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.phone_help%22)

> Off by default, because phones show a compact post header where Flarum tucks the badges over the avatar. Turn this on to show titles and the post count there as well.

```diff
+Standardmäßig deaktiviert, da auf Mobilgeräten eine kompakte Beitragsüberschrift angezeigt wird, in der Flarum die Badges über dem Avatar anzeigt. Aktiviere diese Option, um dort auch Titel und die Anzahl der Beiträge anzuzeigen.
```

#### [`linkrobins-badge-labels.admin.settings.phone_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.phone_label%22)

> Apply on phones too

```diff
+Auch auf Handys anwenden
```

#### [`linkrobins-badge-labels.admin.settings.post_count_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_help%22)

> Adds the number of posts the author has written, as a pill of its own.

```diff
+Fügt die Anzahl der von einem Autor verfassten Beiträge in einer eigenen Pille hinzu.
```

#### [`linkrobins-badge-labels.admin.settings.post_count_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_label%22)

> Show the author's post count

```diff
+Anzahl der Beiträge des Autors anzeigen
```

#### [`linkrobins-badge-labels.admin.settings.post_count_placement_badges`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_placement_badges%22)

> With the badges

```diff
+Mit den Abzeichen
```

#### [`linkrobins-badge-labels.admin.settings.post_count_placement_below`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_placement_below%22)

> Below the avatar

```diff
+Unter dem Avatar
```

#### [`linkrobins-badge-labels.admin.settings.post_count_placement_beside`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_placement_beside%22)

> Beside the username

```diff
+Neben dem Benutzernamen
```

#### [`linkrobins-badge-labels.admin.settings.post_count_placement_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_placement_help%22)

> Where that pill goes. It can follow the badges wherever they are, or sit in the other place, so the count can be under the avatar while the badges stay on the header line.

```diff
+Wo diese Pille angezeigt wird. Sie kann den Abzeichen folgen, wo immer diese sich befinden, oder an einer anderen Stelle platziert werden, sodass die Anzahl unter dem Avatar angezeigt wird, während die Abzeichen in der Kopfzeile bleiben.
```

#### [`linkrobins-badge-labels.admin.settings.post_count_placement_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.admin.settings.post_count_placement_label%22)

> Post count placement

```diff
+Platzierung des Beitragszählers
```

#### [`linkrobins-badge-labels.forum.post_count`](https://weblate.rob006.net/translate/flarum2/linkrobins-badge-labels/de/?q=context%3A%3D%22linkrobins-badge-labels.forum.post_count%22)

> {count, plural, one {# post} other {# posts}}

```diff
+{count, plural, one {# Beitrag} other {# Beiträge}}
```


### `linkrobins-birdseye` (missing)

#### [`linkrobins-birdseye.admin.settings.geoip_db_path_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-birdseye/de/?q=context%3A%3D%22linkrobins-birdseye.admin.settings.geoip_db_path_help%22)

> Full path on this server to a MaxMind country database, such as the free GeoLite2-Country.mmdb (download it from maxmind.com under your own account). Used only when no trusted proxy header supplies the country; every lookup happens on this server.

```diff
+Vollständiger Pfad auf diesem Server zu einer MaxMind-Länderdatenbank, beispielsweise der kostenlosen Datei „GeoLite2-Country.mmdb“ (die du unter deinem eigenen Konto von maxmind.com herunterladen kannst). Wird nur verwendet, wenn kein vertrauenswürdiger Proxy-Header das Land angibt; jede Auflösung erfolgt lokal auf diesem Server.
```

#### [`linkrobins-birdseye.admin.settings.geoip_db_path_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-birdseye/de/?q=context%3A%3D%22linkrobins-birdseye.admin.settings.geoip_db_path_label%22)

> Country database file (optional)

```diff
+Datei mit Länderdatenbank (optional)
```


### `linkrobins-link-gate` (missing)

#### [`linkrobins-link-gate.admin.permissions.view_gated_links_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.permissions.view_gated_links_label%22)

> View gated links

```diff
+Zugriffsbeschränkte Links ansehen
```

#### [`linkrobins-link-gate.admin.settings.domains_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.domains_help%22)

> One domain per line, for example mega.nz. Subdomains are included, so mega.nz also covers folder.mega.nz. Leave empty and nothing is gated.

```diff
+Eine Domäne pro Zeile, zum Beispiel mega.nz. Subdomains sind enthalten, sodass mega.nz auch folder.mega.nz umfasst. Lasse das Feld leer, wenn nichts gesperrt werden soll.
```

#### [`linkrobins-link-gate.admin.settings.domains_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.domains_label%22)

> Gated domains

```diff
+Zugriffsbeschränkte Domänen
```

#### [`linkrobins-link-gate.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.enabled_help%22)

> Turn this off to show every link to everyone again, without losing your domain list.

```diff
+Deaktiviere diese Option, um alle Links wieder für alle Nutzer anzuzeigen, ohne dass deine Domänen-Liste verloren geht.
```

#### [`linkrobins-link-gate.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.enabled_label%22)

> Gate links

```diff
+Zugriffsbeschränkte Links
```

#### [`linkrobins-link-gate.admin.settings.fallback_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.fallback_help%22)

> Used where HTML cannot go, in particular notification emails. Keep it short and say where the link can be found.

```diff
+Wird dort verwendet, wo HTML nicht eingesetzt werden kann, insbesondere in Benachrichtigungs-E-Mails. Halte den Text kurz und gib an, wo der Link gefunden werden kann.
```

#### [`linkrobins-link-gate.admin.settings.fallback_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.fallback_label%22)

> Plain wording

```diff
+Einfacher Wortlaut
```

#### [`linkrobins-link-gate.admin.settings.html_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.html_help%22)

> The HTML shown where a gated link used to be. Anything you would put in a post works here. Leave empty to show the plain wording below instead.

```diff
+Der angezeigte HTML-Code an Stelle des beschränkten Links. D u kannst hier alles verwenden, was auch in einen Beitrag funktioniert. Lasse das Feld leer, um stattdessen den untenstehenden Text anzuzeigen.
```

#### [`linkrobins-link-gate.admin.settings.html_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.settings.html_label%22)

> What to show instead

```diff
+Was stattdessen angezeigt wird
```

#### [`linkrobins-link-gate.admin.translations.help`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.translations.help%22)

> What you wrote above is shown to everyone. Fill in a language here and readers using it see that instead. Leave one blank and it falls back to what you wrote above.

```diff
+Was du oben geschrieben hast, wird allen angezeigt. Gib hier eine Sprache ein, dann wird den Lesern, die diese Sprache verwenden, stattdessen dieser Text angezeigt. Lässt du das Feld leer, wird stattdessen das angezeigt, was du oben geschrieben hast.
```

#### [`linkrobins-link-gate.admin.translations.label`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.admin.translations.label%22)

> Other languages

```diff
+Andere Sprachen
```

#### [`linkrobins-link-gate.forum.fallback`](https://weblate.rob006.net/translate/flarum2/linkrobins-link-gate/de/?q=context%3A%3D%22linkrobins-link-gate.forum.fallback%22)

> This link is available to members only.

```diff
+Dieser Link ist nur für Mitglieder zugänglich.
```


### `maicol07-sso` (missing)

#### [`maicol07-sso.admin.settings.client_api_key`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_api_key%22)

> API key

```diff
+API-Schlüssel
```

#### [`maicol07-sso.admin.settings.client_api_key_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_api_key_help%22)

> The API key from your Flarum instance.

```diff
+Der API-Schlüssel der Flarum-Instanz.
```

#### [`maicol07-sso.admin.settings.client_name`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_name%22)

> Name

```diff
+Name
```

#### [`maicol07-sso.admin.settings.client_name_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_name_help%22)

> Name of the Flarum instance

```diff
+Name der Flarum-Instanz
```

#### [`maicol07-sso.admin.settings.client_password_token`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_password_token%22)

> Password token

```diff
+Passwort-Token
```

#### [`maicol07-sso.admin.settings.client_password_token_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_password_token_help%22)

> A random password token to use with the Flarum instance signups.

```diff
+Ein zufälliges Passwort-Token für die Registrierung bei der Flarum-Instanz.
```

#### [`maicol07-sso.admin.settings.client_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_url%22)

> URL

```diff
+URL
```

#### [`maicol07-sso.admin.settings.client_url_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_url_help%22)

> URL of the Flarum instance

```diff
+URL der Flarum-Instanz
```

#### [`maicol07-sso.admin.settings.client_verify_ssl`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_verify_ssl%22)

> Verify SSL

```diff
+SSL überprüfen
```

#### [`maicol07-sso.admin.settings.client_verify_ssl_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.client_verify_ssl_help%22)

> Verify the Flarum instance SSL status when making requests to it (recommended).

```diff
+Überprüfe den SSL-Status der Flarum-Instanz, wenn Anfragen an sie gesendet werden (empfohlen).
```

#### [`maicol07-sso.admin.settings.cookies_prefix`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.cookies_prefix%22)

> Cookies name prefix

```diff
+Präfix für Cookie-Namen
```

#### [`maicol07-sso.admin.settings.provider_mode`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.admin.settings.provider_mode%22)

> Enable this option to use the provider mode (SSO between Flarum instances). Allows other Flarum instances to login an user of this Flarum instance. This will disable the standard SSO feature with other websites.

```diff
+Aktiviere diese Option, um den Provider-Modus zu nutzen (SSO zwischen Flarum-Instanzen). Dadurch können andere Flarum-Instanzen einen Benutzer dieser Flarum-Instanz anmelden. Dies deaktiviert die Standard-SSO-Funktion mit anderen Websites.
```

#### [`maicol07-sso.forum.no_login_url_error`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/de/?q=context%3A%3D%22maicol07-sso.forum.no_login_url_error%22)

> No login URL set, please check the SSO settings!

```diff
+Es wurde keine Anmelde-URL festgelegt. Bitte überprüfe die SSO-Einstellungen!
```


### `michaelbelgium-ai-autoreply` (missing)

#### [`michaelbelgium-ai-autoreply.admin.permissions.use_chatgpt_assistant_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.permissions.use_chatgpt_assistant_label%22)

> Use AI assistant

```diff
+KI-Assistenten verwenden
```

#### [`michaelbelgium-ai-autoreply.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.api_key_help%22)

> Get the API key from &lt;a&gt;{platform}&lt;/a&gt;.

```diff
+Den API-Schlüssel erhältst du unter <a>{platform}</a>.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.api_key_label%22)

> API Key

```diff
+API-Schlüssel
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_help%22)

> When enabled, AI replies only at discussion start. When disabled, the discussion becomes a chat between the OP and the assistant; the assistant replies to every OP post.

```diff
+Wenn aktiviert, antwortet die KI nur zu Beginn einer Diskussion. Wenn sie deaktiviert ist, wird die Diskussion zu einem Chat zwischen dem Verfasser des Beitrags und dem Assistenten; der Assistent antwortet auf jeden Beitrag des Verfassers.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_label%22)

> Enable on discussion start

```diff
+Bei Diskussionsbeginn aktivieren
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enabled_tags_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enabled_tags_help%22)

> Select in which tags the assistant will generate responses.

```diff
+Wähle aus, bei welchen Tags der Assistent antworten soll.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enabled_tags_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enabled_tags_label%22)

> Tags

```diff
+Tags
```

#### [`michaelbelgium-ai-autoreply.admin.settings.max_tokens_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.max_tokens_help%22)

> &lt;a&gt;What are tokens and how to count them?&lt;/a&gt;

```diff
+<a>Was sind Tokens und wie werden sie gezählt?</a>
```

#### [`michaelbelgium-ai-autoreply.admin.settings.max_tokens_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.max_tokens_label%22)

> Max Tokens

```diff
+Maximale Tokens
```

#### [`michaelbelgium-ai-autoreply.admin.settings.model_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.model_help%22)

> Learn more about &lt;a&gt;{platform} models&lt;/a&gt; (default: &lt;code&gt;{model}&lt;/code&gt;)..

```diff
+Erfahre mehr über <a>{platform} Modelle</a> (Standard: <code>{model}</code>)..
```

#### [`michaelbelgium-ai-autoreply.admin.settings.model_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.model_label%22)

> Model

```diff
+Modell
```

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_help%22)

> Select the AI platform to use.

```diff
+Wähle die gewünschte KI-Plattform aus.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_label%22)

> Platform

```diff
+Plattform
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_help%22)

> Provide context and instructions to the Assistant, such as specifying a particular goal or role.

```diff
+Gib dem Assistenten Hintergrundinformationen und Anweisungen, beispielsweise indem du ein bestimmtes Ziel oder eine bestimmte Rolle festlegst.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_label%22)

> System prompt

```diff
+System-Prompt
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_placeholder`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_placeholder%22)

> You are a helpful assistant on a Flarum forum.

```diff
+Du bist ein hilfsbereiter Assistent in einem Flarum-Forum.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.temperature_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.temperature_help%22)

> Controls the randomness. The range is usually between 0 and 2 but some platforms have other ranges.

```diff
+Steuert den Zufallsgrad. Der Wertebereich liegt normalerweise zwischen 0 und 2, bei einigen Plattformen sind jedoch andere Wertebereiche möglich.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.temperature_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.temperature_label%22)

> Temperature

```diff
+Temperatur
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_help%22)

> Text that will be displayed below the assistant user.

```diff
+Text, der unterhalb des Assistenten angezeigt wird.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_label%22)

> User assistant badge

```diff
+Markierung für Assistenten-Benutzer
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_help%22)

> Enter the user id that will be used to generate AI responses.

```diff
+Gib die Benutzer-ID ein, die zur Generierung von KI-Antworten verwendet werden soll.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/de/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_label%22)

> User assistant

```diff
+Benutzer für Assistenten-Antworten
```


### `peopleinside-antiflood` (missing)

#### [`peopleinside-antiflood.admin.description`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.description%22)

> Prevent topic/reply flooding and limit pending approvals.

```diff
+Verhindere eine Flut von Diskussionen & Antworten und begrenze die Anzahl der ausstehenden Prüfungen.
```

#### [`peopleinside-antiflood.admin.settings.flood_interval_minutes_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_interval_minutes_help%22)

> Time window in minutes used to count recent topic or reply creations. Applies to both topic and reply flood limits. Default: 5.

```diff
+Zeitfenster in Minuten, das zur Zählung der zuletzt erstellten Diskussionen oder Antworten herangezogen wird. Gilt sowohl für die Obergrenze bei Diskussionen als auch bei Antworten. Standardwert: 5.
```

#### [`peopleinside-antiflood.admin.settings.flood_interval_minutes_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_interval_minutes_label%22)

> Flood interval (minutes)

```diff
+Flood-Intervall (Minuten)
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_help%22)

> Maximum number of new topics a user can create within the flood interval before being blocked. Default: 3. Note: Flarum already enforces a built-in 10-second cooldown between all posts and topics.

```diff
+Maximale Anzahl neuer Diskussionen, die ein Benutzer innerhalb des Flood-Intervalls erstellen kann, bevor er gesperrt wird. Standardwert: 3. Hinweis: Flarum erzwingt bereits eine integrierte Wartezeit von 10 Sekunden zwischen allen Beiträgen und Diskussionen.
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_label%22)

> Topic flood limit

```diff
+Obergrenze für die Anzahl der Diskussionen
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_message_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_message_help%22)

> Override the default error message shown when a user posts too quickly. Leave empty to use the default. You can use {minutes} as a placeholder.

```diff
+Überschreibe die Standardfehlermeldung, die angezeigt wird, wenn ein Benutzer zu schnell einen Beitrag verfasst. Lasse das Feld leer, um die Standardmeldung zu verwenden. Du kannst {minutes} als Platzhalter verwenden.
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_message_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_message_label%22)

> Custom message: flood limit reached

```diff
+Benutzerdefinierte Meldung: Flood-Limit erreicht
```

#### [`peopleinside-antiflood.admin.settings.flood_limit_message_suggestion`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.flood_limit_message_suggestion%22)

> You are posting too quickly. Please wait {minutes} minutes before posting again.

```diff
+Du schreibst zu schnell. Bitte warte {minutes} Minuten, bevor du erneut einen Beitrag verfasst.
```

#### [`peopleinside-antiflood.admin.settings.max_pending_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.max_pending_help%22)

> Maximum number of posts and topics a user can have awaiting approval before being blocked from posting. Default: 6.

```diff
+Maximale Anzahl an Beiträgen und Diskussionen, die ein Benutzer zur Freigabe ausstehend haben darf, bevor er für das Verfassen von Beiträgen gesperrt wird. Standardwert: 6.
```

#### [`peopleinside-antiflood.admin.settings.max_pending_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.max_pending_label%22)

> Maximum pending posts

```diff
+Maximale Anzahl ausstehender Beiträge
```

#### [`peopleinside-antiflood.admin.settings.pending_limit_message_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.pending_limit_message_help%22)

> Override the default error message shown when a user hits the pending-posts limit. Leave empty to use the default.

```diff
+Überschreibe die Standardfehlermeldung, die angezeigt wird, wenn ein Benutzer das Limit für ausstehende Beiträge erreicht. Lasse das Feld leer, um die Standardmeldung zu verwenden.
```

#### [`peopleinside-antiflood.admin.settings.pending_limit_message_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.pending_limit_message_label%22)

> Custom message: pending limit reached

```diff
+Benutzerdefinierte Meldung: Limit für ausstehende erreicht
```

#### [`peopleinside-antiflood.admin.settings.pending_limit_message_suggestion`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.pending_limit_message_suggestion%22)

> You have too many posts or topics pending approval. Please wait until some are reviewed before creating new content.

```diff
+Du hast zu viele Beiträge oder Diskussionen, die noch auf Freigabe warten. Bitte warte, bis einige davon geprüft wurden, bevor du neue Inhalte erstellst.
```

#### [`peopleinside-antiflood.admin.settings.post_flood_limit_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.post_flood_limit_help%22)

> Maximum number of new replies a user can post within the flood interval before being blocked. Set to 0 to disable (relies on Flarum's built-in 10-second throttle). Default: 0.

```diff
+Maximale Anzahl neuer Antworten, die ein Benutzer innerhalb des Flood-Intervalls posten kann, bevor er gesperrt wird. Auf 0 setzen, um die Funktion zu deaktivieren (basiert auf der in Flarum integrierten 10-Sekunden-Drosselung). Standardwert: 0.
```

#### [`peopleinside-antiflood.admin.settings.post_flood_limit_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.post_flood_limit_label%22)

> Reply flood limit

```diff
+Obergrenze für die Anzahl der Antworten
```

#### [`peopleinside-antiflood.admin.settings.reset_button`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.admin.settings.reset_button%22)

> Reset

```diff
+Zurücksetzen
```

#### [`peopleinside-antiflood.forum.error.flood_limit`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.forum.error.flood_limit%22)

> You are posting too quickly. Please wait {minutes} minutes before posting again.

```diff
+Du schreibst zu schnell. Bitte warte {minutes} Minuten, bevor du erneut einen Beitrag verfasst.
```

#### [`peopleinside-antiflood.forum.error.pending_limit`](https://weblate.rob006.net/translate/flarum2/peopleinside-antiflood/de/?q=context%3A%3D%22peopleinside-antiflood.forum.error.pending_limit%22)

> You have too many posts or topics pending approval. Please wait until some are reviewed before creating new content.

```diff
+Du hast zu viele Beiträge oder Diskussionen, die noch auf Freigabe warten. Bitte warte, bis einige davon geprüft wurden, bevor du neue Inhalte erstellst.
```


### `peopleinside-fla-powcaptcha` (missing)

#### [`peopleinside-powcaptcha.admin.settings.difficulty_3`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_3%22)

> Level 1 – Low (\~100 ms)

```diff
+Stufe 1 – Niedrig (~100 ms)
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_4`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_4%22)

> Level 2 – Medium (\~1 s)

```diff
+Stufe 2 – Mittel (~1 s)
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_5`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_5%22)

> Level 3 – High (\~10 s)

```diff
+Stufe 3 – Hoch (~10 s)
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_help%22)

> Higher difficulty makes bots work harder. Level 1 might be bypassed by some bots (\~100 ms). Level 2 provides better protection and is the default preference (\~1 s). Level 3 tries to guarantee maximum protection and difficulty for bots (\~10 s).

```diff
+Ein höherer Schwierigkeitsgrad stellt höhere Anforderungen an die Bots. Stufe 1 kann von einigen Bots umgangen werden (~100 ms). Stufe 2 bietet besseren Schutz und ist die Standardeinstellung (~1 s). Stufe 3 versucht, maximalen Schutz und maximalen Schwierigkeitsgrad für Bots zu gewährleisten (~10 s).
```

#### [`peopleinside-powcaptcha.admin.settings.difficulty_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.difficulty_label%22)

> Difficulty

```diff
+Schwierigkeit
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_forgot_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_forgot_help%22)

> Show the PoW security challenge inside the Forgot Password form.

```diff
+Zeige die PoW-Sicherheitsabfrage im Formular „Passwort vergessen“ an.
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_forgot_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_forgot_label%22)

> Enable CAPTCHA on Password Reset

```diff
+CAPTCHA bei Passwortrücksetzung aktivieren
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_login_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_login_help%22)

> Show the PoW security challenge inside the Login form.

```diff
+Zeige die PoW-Sicherheitsabfrage im Anmeldeformular an.
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_login_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_login_label%22)

> Enable CAPTCHA on Login

```diff
+CAPTCHA bei Anmeldung aktivieren
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_signup_help`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_signup_help%22)

> Show the PoW security challenge inside the Sign Up form.

```diff
+Zeige die PoW-Sicherheitsabfrage im Registrierungsformular an.
```

#### [`peopleinside-powcaptcha.admin.settings.enabled_signup_label`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.admin.settings.enabled_signup_label%22)

> Enable CAPTCHA on Registration

```diff
+CAPTCHA bei Registrierung aktivieren
```

#### [`peopleinside-powcaptcha.forum.challenge_not_ready`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.forum.challenge_not_ready%22)

> The security challenge is still in progress or has not been completed. Please wait.

```diff
+Die Sicherheitsüberprüfung läuft noch oder ist noch nicht abgeschlossen. Bitte warten.
```

#### [`peopleinside-powcaptcha.forum.error`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.forum.error%22)

> Security check failed. Please try again.

```diff
+Die Sicherheitsabfrage ist fehlgeschlagen. Bitte versuche es erneut.
```

#### [`peopleinside-powcaptcha.forum.retry`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.forum.retry%22)

> Retry

```diff
+Erneut versuchen
```

#### [`peopleinside-powcaptcha.forum.solving`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.forum.solving%22)

> Solving security challenge…

```diff
+Bewältigung der Sicherheitsabfrage…
```

#### [`peopleinside-powcaptcha.forum.verified`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.forum.verified%22)

> Security check passed

```diff
+Sicherheitsabfrage bestanden
```

#### [`peopleinside-powcaptcha.validation.pow_captcha`](https://weblate.rob006.net/translate/flarum2/peopleinside-fla-powcaptcha/de/?q=context%3A%3D%22peopleinside-powcaptcha.validation.pow_captcha%22)

> The security challenge could not be verified. Please try again.

```diff
+Die Sicherheitsabfrage konnte nicht überprüft werden. Bitte versuche es erneut.
```


### `quasimo-carousel-grids` (missing)

#### [`carousel-grids.admin.add_item`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.add_item%22)

> Add Item

```diff
+Element hinzufügen
```

#### [`carousel-grids.admin.background_image`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.background_image%22)

> Background Image URL

```diff
+Hintergrundbild-URL
```

#### [`carousel-grids.admin.columns_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.columns_label%22)

> Columns per row (desktop)

```diff
+Spalten pro Zeile (Desktop)
```

#### [`carousel-grids.admin.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.delete_confirmation%22)

> Are you sure you want to delete this item?

```diff
+Möchtest du diesen Eintrag wirklich löschen?
```

#### [`carousel-grids.admin.description`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.description%22)

> Description

```diff
+Beschreibung
```

#### [`carousel-grids.admin.edit_item`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.edit_item%22)

> Edit Item

```diff
+Element bearbeiten
```

#### [`carousel-grids.admin.image_position`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.image_position%22)

> Logo Position

```diff
+Logoposition
```

#### [`carousel-grids.admin.items_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.items_label%22)

> Manage Grid Items

```diff
+Rasterelemente verwalten
```

#### [`carousel-grids.admin.link`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.link%22)

> Link URL (optional)

```diff
+Link-URL (optional)
```

#### [`carousel-grids.admin.logo`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.logo%22)

> Logo URL (optional)

```diff
+Logo-URL (optional)
```

#### [`carousel-grids.admin.manage_items`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.manage_items%22)

> Manage Items

```diff
+Elemente verwalten
```

#### [`carousel-grids.admin.position_after_hero`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.position_after_hero%22)

> After Hero Section

```diff
+Nach dem Hero-Abschnitt
```

#### [`carousel-grids.admin.position_before_footer`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.position_before_footer%22)

> Before Footer

```diff
+Vor der Fußzeile
```

#### [`carousel-grids.admin.position_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.position_label%22)

> Display Position

```diff
+Anzeigeposition
```

#### [`carousel-grids.admin.position_left`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.position_left%22)

> Left

```diff
+Links
```

#### [`carousel-grids.admin.position_top`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.position_top%22)

> Top

```diff
+Oben
```

#### [`carousel-grids.admin.save_button`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.save_button%22)

> Save

```diff
+Speichern
```

#### [`carousel-grids.admin.save_settings`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.save_settings%22)

> Save Settings

```diff
+Einstellungen speichern
```

#### [`carousel-grids.admin.saved_message`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.saved_message%22)

> Settings saved successfully

```diff
+Einstellungen erfolgreich gespeichert
```

#### [`carousel-grids.admin.scope_all`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.scope_all%22)

> All Pages

```diff
+Alle Seiten
```

#### [`carousel-grids.admin.scope_homepage`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.scope_homepage%22)

> Homepage Only

```diff
+Nur auf der Homepage
```

#### [`carousel-grids.admin.scope_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.scope_label%22)

> Display Scope

```diff
+Anzeigebereich
```

#### [`carousel-grids.admin.title`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/de/?q=context%3A%3D%22carousel-grids.admin.title%22)

> Title

```diff
+Titel
```


### `quasimo-llms-txt` (missing)

#### [`quasimo-llms-txt.admin.settings.custom_intro_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_help%22)

> Leave blank to omit. Plain text or Markdown supported.

```diff
+Lasse das Feld leer, um den Eintrag wegzulassen. Es werden reiner Text und Markdown unterstützt.
```

#### [`quasimo-llms-txt.admin.settings.custom_intro_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_label%22)

> Custom introduction paragraph

```diff
+Individuell angepasster Einleitungsabsatz
```

#### [`quasimo-llms-txt.admin.settings.custom_intro_placeholder`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.custom_intro_placeholder%22)

> Enter an optional introduction that will appear below the forum title in both files.

```diff
+Gib eine optionale Einleitung ein, die in beiden Dateien unterhalb des Forumtitels angezeigt wird.
```

#### [`quasimo-llms-txt.admin.settings.enabled_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.enabled_help%22)

> Serve a concise index of your forum at {url} — links to categories and recent discussions.

```diff
+Stelle unter {url} eine übersichtliche Übersicht über dein Forum bereit – mit Links zu Kategorien und aktuellen Diskussionen.
```

#### [`quasimo-llms-txt.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.enabled_label%22)

> Enable llms.txt

```diff
+llms.txt aktivieren
```

#### [`quasimo-llms-txt.admin.settings.full_enabled_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.full_enabled_help%22)

> Serve the full text of all discussions at {url} — includes every post's content.

```diff
+Stellt unter {url} den vollständigen Text aller Diskussionen bereit — einschließlich des Inhalts jedes Beitrags.
```

#### [`quasimo-llms-txt.admin.settings.full_enabled_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.full_enabled_label%22)

> Enable llms-full.txt

```diff
+llms-full.txt aktivieren
```

#### [`quasimo-llms-txt.admin.settings.max_discussions_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_discussions_help%22)

> Maximum number of discussions to list (1–1000). Default: 100.

```diff
+Maximale Anzahl der aufzuführenden Diskussionen (1–1000). Standardwert: 100.
```

#### [`quasimo-llms-txt.admin.settings.max_discussions_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_discussions_label%22)

> Max discussions to include

```diff
+Maximalanzahl der zu berücksichtigenden Diskussionen
```

#### [`quasimo-llms-txt.admin.settings.max_posts_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_posts_help%22)

> Maximum number of posts to include per discussion in the full file (1–500). Default: 50.

```diff
+Maximale Anzahl der Beiträge pro Diskussion, die in die vollständige Datei aufgenommen werden sollen (1–500). Standardwert: 50.
```

#### [`quasimo-llms-txt.admin.settings.max_posts_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.max_posts_label%22)

> Max posts per discussion (llms-full.txt only)

```diff
+Maximale Anzahl von Beiträgen pro Diskussion (nur für llms-full.txt)
```

#### [`quasimo-llms-txt.admin.settings.open_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.open_label%22)

> Open in new tab

```diff
+In einem neuen Tab öffnen
```

#### [`quasimo-llms-txt.admin.settings.sort_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_help%22)

> How discussions are sorted in both generated files.

```diff
+Wie die Diskussionen in beiden generierten Dateien sortiert sind.
```

#### [`quasimo-llms-txt.admin.settings.sort_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_label%22)

> Discussion sort order

```diff
+Sortierreihenfolge der Diskussionen
```

#### [`quasimo-llms-txt.admin.settings.sort_latest`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_latest%22)

> Latest activity

```diff
+Letzte Aktivität
```

#### [`quasimo-llms-txt.admin.settings.sort_top`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.sort_top%22)

> Most replies

```diff
+Meiste Antworten
```

#### [`quasimo-llms-txt.admin.settings.urls_help`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.urls_help%22)

> Once enabled, the following URLs will serve LLM-friendly content about your forum.

```diff
+Sobald diese Funktion aktiviert ist, werden die folgenden URLs LLM-freundliche Inhalte zu deinem Forum bereitstellen.
```

#### [`quasimo-llms-txt.admin.settings.urls_label`](https://weblate.rob006.net/translate/flarum2/quasimo-llms-txt/de/?q=context%3A%3D%22quasimo-llms-txt.admin.settings.urls_label%22)

> Endpoint URLs

```diff
+Endpunkt-URLs
```


### `quasimo-tag-sidebar` (missing)

#### [`quasimo-tag-sidebar.admin.content_type_html`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.content_type_html%22)

> HTML

```diff
+HTML
```

#### [`quasimo-tag-sidebar.admin.content_type_markdown`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.content_type_markdown%22)

> Markdown

```diff
+Markdown
```

#### [`quasimo-tag-sidebar.admin.instruction_1`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.instruction_1%22)

> Navigate to any tag page on the forum.

```diff
+Rufe eine beliebige Tag-Seite im Forum auf.
```

#### [`quasimo-tag-sidebar.admin.instruction_2`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.instruction_2%22)

> An "Edit Sidebar" button will appear for users with permission.

```diff
+Für Benutzer mit entsprechender Berechtigung wird eine Schaltfläche „Seitenleiste bearbeiten“ angezeigt.
```

#### [`quasimo-tag-sidebar.admin.instruction_3`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.instruction_3%22)

> Click the button to open the editor, write content, then save.

```diff
+Klicke auf die Schaltfläche, um den Editor zu öffnen, gib den Inhalt ein und speichere ihn anschließend.
```

#### [`quasimo-tag-sidebar.admin.instruction_4`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.instruction_4%22)

> Assign the permission below to allow moderators to edit sidebar content.

```diff
+Weise die folgende Berechtigung zu, damit Moderatoren den Inhalt der Seitenleiste bearbeiten können.
```

#### [`quasimo-tag-sidebar.admin.instructions_title`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.instructions_title%22)

> How to use

```diff
+Anleitung
```

#### [`quasimo-tag-sidebar.admin.permission_edit_sidebar`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.permission_edit_sidebar%22)

> Edit tag sidebar content

```diff
+Inhalt der Tag-Seitenleiste bearbeiten
```

#### [`quasimo-tag-sidebar.admin.position_left`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.position_left%22)

> Left — after the sidebar navigation (default)

```diff
+Links — nach der Seitenleiste (Standard)
```

#### [`quasimo-tag-sidebar.admin.position_right`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.position_right%22)

> Right — next to the post list

```diff
+Rechts — neben der Beitragsliste
```

#### [`quasimo-tag-sidebar.admin.setting_content_type`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.setting_content_type%22)

> Content Type

```diff
+Inhaltstyp
```

#### [`quasimo-tag-sidebar.admin.setting_content_type_help`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.setting_content_type_help%22)

> Choose Markdown for safe, easy-to-write content. Choose HTML for full control (only trusted editors should have permission).

```diff
+Wähle Markdown für sichere, einfach zu verfassende Inhalte. Wähle HTML für volle Kontrolle (nur vertrauenswürdige Redakteure sollten die Berechtigung dazu haben).
```

#### [`quasimo-tag-sidebar.admin.setting_position`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.setting_position%22)

> Sidebar Position (Desktop)

```diff
+Position der Seitenleiste (Desktop)
```

#### [`quasimo-tag-sidebar.admin.setting_position_help`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.admin.setting_position_help%22)

> On mobile the widget always appears below the post list.

```diff
+Auf Mobilgeräten wird das Widget immer unterhalb der Beitragsliste angezeigt.
```

#### [`quasimo-tag-sidebar.forum.cancel_button`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.cancel_button%22)

> Cancel

```diff
+Abbrechen
```

#### [`quasimo-tag-sidebar.forum.edit_button`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.edit_button%22)

> Edit Sidebar

```diff
+Seitenleiste bearbeiten
```

#### [`quasimo-tag-sidebar.forum.modal_title`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.modal_title%22)

> Edit Sidebar: {tag}

```diff
+Seitenleiste bearbeiten: {tag}
```

#### [`quasimo-tag-sidebar.forum.save_button`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.save_button%22)

> Save

```diff
+Speichern
```

#### [`quasimo-tag-sidebar.forum.sidebar_empty`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.sidebar_empty%22)

> (No sidebar content yet)

```diff
+(Noch kein Inhalt in der Seitenleiste)
```

#### [`quasimo-tag-sidebar.forum.sidebar_label`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.sidebar_label%22)

> Sidebar Content (Markdown)

```diff
+Inhalt der Seitenleiste (Markdown)
```

#### [`quasimo-tag-sidebar.forum.sidebar_label_html`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.sidebar_label_html%22)

> Sidebar Content (HTML)

```diff
+Inhalt der Seitenleiste (HTML)
```

#### [`quasimo-tag-sidebar.forum.sidebar_placeholder`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.sidebar_placeholder%22)

> Enter sidebar content using Markdown...
>
> \## Links
> \- \[Example\](https://example.com)
>
> \*\*Bold\*\*, \*italic\*, and !\[alt\](https://example.com/image.png) images are supported.

```diff
+Gib den Inhalt der Seitenleiste mit Markdown ein...
+
+## Links
+- [Beispiel](https://beispiel.de)
+
+**Fettdruck**, *Kursivschrift* und Bilder mittels ![alt](https://beispiel.de/bild.png) werden unterstützt.
```

#### [`quasimo-tag-sidebar.forum.sidebar_placeholder_html`](https://weblate.rob006.net/translate/flarum2/quasimo-tag-sidebar/de/?q=context%3A%3D%22quasimo-tag-sidebar.forum.sidebar_placeholder_html%22)

> Enter sidebar content using HTML...
>
> &lt;h2&gt;Links&lt;/h2&gt;
> &lt;p&gt;&lt;a href="https://example.com"&gt;Example&lt;/a&gt;&lt;/p&gt;
> &lt;img src="https://example.com/image.png" alt="example"&gt;

```diff
+Gib den Inhalt der Seitenleiste als HTML ein...
+
+<h2>Links</h2>
+<p><a href="https://beispiel.de">Beispiel</a></p>
+<img src="https://beispiel.de/bild.png" alt="Beispielbild">
```


### `ralkage-account-lockout` (missing)

#### [`ralkage-account-lockout.admin.permissions.unlock_users_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.permissions.unlock_users_label%22)

> Unlock locked accounts

```diff
+Gesperrte Konten entsperren
```

#### [`ralkage-account-lockout.admin.settings.lockout_duration_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_duration_help%22)

> How long accounts stay locked. Only applies when lockout mode is set to Timed.

```diff
+Wie lange Konten gesperrt bleiben. Gilt nur, wenn der Sperrmodus auf „Zeitgesteuert“ eingestellt ist.
```

#### [`ralkage-account-lockout.admin.settings.lockout_duration_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_duration_label%22)

> Lockout Duration (minutes)

```diff
+Sperrdauer (Minuten)
```

#### [`ralkage-account-lockout.admin.settings.lockout_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_mode_help%22)

> Timed: auto-unlocks after duration. Manual: requires admin/moderator to unlock.

```diff
+Zeitgesteuert: Wird nach Ablauf der Dauer automatisch entsperrt. Manuell: Muss von einem Administrator/Moderator entsperrt werden.
```

#### [`ralkage-account-lockout.admin.settings.lockout_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.lockout_mode_label%22)

> Lockout Mode

```diff
+Sperrmodus
```

#### [`ralkage-account-lockout.admin.settings.max_attempts_help`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.max_attempts_help%22)

> Number of consecutive failed login attempts before an account is locked.

```diff
+Anzahl der aufeinanderfolgenden fehlgeschlagenen Anmeldeversuche, bevor ein Konto gesperrt wird.
```

#### [`ralkage-account-lockout.admin.settings.max_attempts_label`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.settings.max_attempts_label%22)

> Maximum Failed Login Attempts

```diff
+Maximale Anzahl fehlgeschlagener Anmeldeversuche
```

#### [`ralkage-account-lockout.admin.users.lock_status_column`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.users.lock_status_column%22)

> Lock Status

```diff
+Sperrstatus
```

#### [`ralkage-account-lockout.admin.users.locked_tooltip`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.users.locked_tooltip%22)

> This account is locked

```diff
+Dieses Konto ist gesperrt
```

#### [`ralkage-account-lockout.admin.users.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.users.unlock_button%22)

> Unlock

```diff
+Entsperren
```

#### [`ralkage-account-lockout.admin.users.unlock_confirmation`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.admin.users.unlock_confirmation%22)

> Are you sure you want to unlock {username}?

```diff
+Möchtest du {username} wirklich entsperren?
```

#### [`ralkage-account-lockout.api.error.locked_manual`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.api.error.locked_manual%22)

> Account is locked. Contact an administrator.

```diff
+Konto ist gesperrt. Kontaktiere einen Administrator.
```

#### [`ralkage-account-lockout.api.error.locked_timed`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.api.error.locked_timed%22)

> Account is locked. Try again in {minutes} minute(s).

```diff
+Konto ist gesperrt. Erneut versuchen in {minutes} Minute(n).
```

#### [`ralkage-account-lockout.forum.log_in.attempts_remaining`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.attempts_remaining%22)

> Invalid credentials. {remaining} of {max} login attempt(s) remaining before your account is locked.

```diff
+Ungültige Anmeldedaten. Es verbleiben noch {remaining} von {max} Anmeldeversuchen, bevor dein Konto gesperrt wird.
```

#### [`ralkage-account-lockout.forum.log_in.locked_manual`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.locked_manual%22)

> This account has been locked. Please contact an administrator.

```diff
+Dieses Konto wurde gesperrt. Bitte wende dich an einen Administrator.
```

#### [`ralkage-account-lockout.forum.log_in.locked_timed`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.log_in.locked_timed%22)

> This account has been locked due to too many failed login attempts. Please try again in {minutes} minute(s).

```diff
+Dieses Konto wurde aufgrund zu vieler fehlgeschlagener Anmeldeversuche gesperrt. Bitte versuche es in {minutes} Minute(n) erneut.
```

#### [`ralkage-account-lockout.forum.unlock_modal.failed_attempts`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.failed_attempts%22)

> {count} failed login attempt(s)

```diff
+{count} fehlgeschlagene(r) Anmeldeversuch(e)
```

#### [`ralkage-account-lockout.forum.unlock_modal.locked_since`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.locked_since%22)

> Locked since {date}

```diff
+Gesperrt seit {date}
```

#### [`ralkage-account-lockout.forum.unlock_modal.locked_until`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.locked_until%22)

> Auto-unlock at {date}

```diff
+Automatisch Entsperren am {date}
```

#### [`ralkage-account-lockout.forum.unlock_modal.manually_locked`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.manually_locked%22)

> This account is manually locked and requires an admin or moderator to unlock it.

```diff
+Dieses Konto wurde manuell gesperrt und kann nur von einem Administrator oder Moderator entsperrt werden.
```

#### [`ralkage-account-lockout.forum.unlock_modal.title`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.title%22)

> Unlock {username}

```diff
+{username} entsperren
```

#### [`ralkage-account-lockout.forum.unlock_modal.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.unlock_modal.unlock_button%22)

> Unlock Account

```diff
+Konto entsperren
```

#### [`ralkage-account-lockout.forum.user_badge.locked_tooltip`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.user_badge.locked_tooltip%22)

> Account Locked

```diff
+Konto gesperrt
```

#### [`ralkage-account-lockout.forum.user_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/de/?q=context%3A%3D%22ralkage-account-lockout.forum.user_controls.unlock_button%22)

> Unlock

```diff
+Entsperren
```


### `ralkage-ad-management` (missing)

#### [`ralkage-ad-management.admin.ads.alt_text`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.alt_text%22)

> Alt Text

```diff
+Beschreibungstext
```

#### [`ralkage-ad-management.admin.ads.approve_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.approve_image%22)

> Approve Image Change

```diff
+Bildänderung genehmigen
```

#### [`ralkage-ad-management.admin.ads.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.confirm_delete%22)

> Are you sure you want to delete this ad?

```diff
+Möchtest du diese Anzeige wirklich löschen?
```

#### [`ralkage-ad-management.admin.ads.content_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.content_help%22)

> For HTML and AdSense ad types. Paste your ad code here.

```diff
+Für HTML- und AdSense-Anzeigenformate. Füge deinen Anzeigencode hier ein.
```

#### [`ralkage-ad-management.admin.ads.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.empty%22)

> No advertisements found.

```diff
+Keine Werbebanner gefunden.
```

#### [`ralkage-ad-management.admin.ads.group_visibility`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.group_visibility%22)

> Group Visibility

```diff
+Gruppensichtbarkeit
```

#### [`ralkage-ad-management.admin.ads.group_visibility_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.group_visibility_help%22)

> Comma-separated group IDs. Leave empty to show to all groups.

```diff
+Durch Kommas getrennte Gruppen-IDs. Leer lassen, um allen Gruppen anzuzeigen.
```

#### [`ralkage-ad-management.admin.ads.max_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_clicks%22)

> Max Clicks

```diff
+Maximale Klicks
```

#### [`ralkage-ad-management.admin.ads.max_clicks_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_clicks_help%22)

> Ad will be deactivated after this many clicks. Leave empty for unlimited.

```diff
+Die Anzeige wird nach dieser Anzahl an Klicks deaktiviert. Für eine unbegrenzte Anzahl lasse das Feld leer.
```

#### [`ralkage-ad-management.admin.ads.max_image_changes`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_image_changes%22)

> Max Image Changes

```diff
+Maximale Anzahl Bildänderungen
```

#### [`ralkage-ad-management.admin.ads.max_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_impressions%22)

> Max Impressions

```diff
+Maximale Aufrufe
```

#### [`ralkage-ad-management.admin.ads.max_impressions_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.max_impressions_help%22)

> Ad will be deactivated after this many views. Leave empty for unlimited.

```diff
+Die Anzeige wird nach dieser Anzahl an Aufrufen deaktiviert. Für eine unbegrenzte Anzahl lasse das Feld leer.
```

#### [`ralkage-ad-management.admin.ads.owner`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.owner%22)

> Ad Owner

```diff
+Anzeigeninhaber
```

#### [`ralkage-ad-management.admin.ads.owner_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.owner_help%22)

> Username of the ad owner. Leave empty for no owner.

```diff
+Benutzername des Inserenten. Leer lassen, wenn kein Inserent vorhanden ist.
```

#### [`ralkage-ad-management.admin.ads.pending_image_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.pending_image_badge%22)

> Image Pending

```diff
+Bild ausstehend
```

#### [`ralkage-ad-management.admin.ads.priority`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.priority%22)

> Priority

```diff
+Priorität
```

#### [`ralkage-ad-management.admin.ads.priority_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.priority_help%22)

> Higher priority ads are shown first. Default is 0.

```diff
+Anzeigen mit höherer Priorität werden zuerst angezeigt. Der Standardwert ist 0.
```

#### [`ralkage-ad-management.admin.ads.reject_image`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.reject_image%22)

> Reject Image Change

```diff
+Bildänderung ablehnen
```

#### [`ralkage-ad-management.admin.ads.stats.ctr`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.stats.ctr%22)

> CTR

```diff
+Klickrate
```

#### [`ralkage-ad-management.admin.ads.stats.impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.stats.impressions%22)

> Impressions

```diff
+Aufrufe
```

#### [`ralkage-ad-management.admin.ads.types.adsense`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.ads.types.adsense%22)

> Google AdSense

```diff
+Google AdSense
```

#### [`ralkage-ad-management.admin.analytics.clicks_by_day`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.clicks_by_day%22)

> Clicks by Day

```diff
+Klicks pro Tag
```

#### [`ralkage-ad-management.admin.analytics.ctr`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.ctr%22)

> Click-Through Rate

```diff
+Klickrate
```

#### [`ralkage-ad-management.admin.analytics.no_data`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.no_data%22)

> No analytics data available for this period.

```diff
+Für diesen Zeitraum liegen keine Analysedaten vor.
```

#### [`ralkage-ad-management.admin.analytics.period_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.period_clicks%22)

> Clicks (Period)

```diff
+Klicks (Zeitraum)
```

#### [`ralkage-ad-management.admin.analytics.select_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.select_ad%22)

> Select an advertisement...

```diff
+Anzeige auswählen…
```

#### [`ralkage-ad-management.admin.analytics.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.title%22)

> Analytics

```diff
+Analytics
```

#### [`ralkage-ad-management.admin.analytics.total_clicks`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.total_clicks%22)

> Total Clicks (All Time)

```diff
+Gesamtanzahl der Klicks (insgesamt)
```

#### [`ralkage-ad-management.admin.analytics.total_impressions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.analytics.total_impressions%22)

> Total Impressions (All Time)

```diff
+Gesamtanzahl der Aufrufe (insgesamt)
```

#### [`ralkage-ad-management.admin.permissions.no_ads`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.permissions.no_ads%22)

> Ad-Free (hide all ads)

```diff
+Ohne Werbung (alle Anzeigen ausblenden)
```

#### [`ralkage-ad-management.admin.permissions.submit_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.permissions.submit_ad%22)

> Submit Advertisements

```diff
+Werbebanner einreichen
```

#### [`ralkage-ad-management.admin.settings.expiration_body_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_body_template%22)

> Body Template

```diff
+Vorlage für Nachrichtenkörper
```

#### [`ralkage-ad-management.admin.settings.expiration_subject_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_subject_template%22)

> Subject Template

```diff
+Betreffvorlage
```

#### [`ralkage-ad-management.admin.settings.expiration_templates_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.expiration_templates_title%22)

> Expiration Email Templates

```diff
+Vorlagen für Ablauf-E-Mails
```

#### [`ralkage-ad-management.admin.settings.notifications_info`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.notifications_info%22)

> To send notifications, add a cron job: php flarum ad-management:send-notifications

```diff
+Um Benachrichtigungen zu versenden, füge einen Cron-Job hinzu: php flarum ad-management:send-notifications
```

#### [`ralkage-ad-management.admin.settings.performance_body_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_body_template%22)

> Body Template

```diff
+Vorlage für Nachrichtenkörper
```

#### [`ralkage-ad-management.admin.settings.performance_subject_template`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_subject_template%22)

> Subject Template

```diff
+Betreffvorlage
```

#### [`ralkage-ad-management.admin.settings.performance_templates_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.performance_templates_title%22)

> Performance Report Templates

```diff
+Leistungsberichtvorlagen
```

#### [`ralkage-ad-management.admin.settings.require_image_approval`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.require_image_approval%22)

> Require Approval for Image Changes

```diff
+Genehmigung für Bildänderungen erforderlich
```

#### [`ralkage-ad-management.admin.settings.require_image_approval_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.require_image_approval_help%22)

> When enabled, image changes submitted by ad owners will be queued for admin review before going live.

```diff
+Wenn aktiviert, werden von Anzeigeninhabern eingereichte Bildänderungen vor der Veröffentlichung zur Überprüfung durch den Administrator in eine Warteschlange gestellt.
```

#### [`ralkage-ad-management.admin.settings.send_performance_reports`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.send_performance_reports%22)

> Send Performance Reports

```diff
+Leistungsberichte senden
```

#### [`ralkage-ad-management.admin.settings.send_performance_reports_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.send_performance_reports_help%22)

> Include performance summaries (impressions, clicks, CTR) when sending notification emails.

```diff
+Füge beim Versenden von Benachrichtigungs-E-Mails Leistungsberichten (Aufrufe, Klicks, Klickrate) hinzu.
```

#### [`ralkage-ad-management.admin.settings.templates_placeholders_performance`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.settings.templates_placeholders_performance%22)

> Available placeholders: {forum\_title}, {forum\_url}, {owner\_name}, {owner\_username}, {ad\_count}, {total\_impressions}, {total\_clicks}, {ctr}, {ad\_lines}. Leave blank to use the default template.

```diff
+Verfügbare Platzhalter: {forum_title}, {forum_url}, {owner_name}, {owner_username}, {ad_count}, {total_impressions}, {total_clicks}, {ctr}, {ad_lines}. Lasse das Feld leer, um die Standardvorlage zu verwenden.
```

#### [`ralkage-ad-management.admin.zones.ads_count`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.ads_count%22)

> Ads

```diff
+Anzeigen
```

#### [`ralkage-ad-management.admin.zones.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.confirm_delete%22)

> Are you sure you want to delete this zone? All ads in this zone will also be deleted.

```diff
+Möchtest du diese Zone wirklich löschen? Alle Anzeigen in dieser Zone werden ebenfalls gelöscht.
```

#### [`ralkage-ad-management.admin.zones.create`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.create%22)

> Create Zone

```diff
+Zone erstellen
```

#### [`ralkage-ad-management.admin.zones.default_badge`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.default_badge%22)

> Default

```diff
+Standard
```

#### [`ralkage-ad-management.admin.zones.description`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.description%22)

> Description

```diff
+Beschreibung
```

#### [`ralkage-ad-management.admin.zones.dimensions`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.dimensions%22)

> Dimensions

```diff
+Abmessungen
```

#### [`ralkage-ad-management.admin.zones.display_mode`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_mode%22)

> Display Mode

```diff
+Anzeigemodus
```

#### [`ralkage-ad-management.admin.zones.display_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_mode_help%22)

> Rotate shows one random ad per page navigation. Stack shows all ads in the zone at once.

```diff
+Bei „Rotieren“ wird bei jedem Seitenwechsel eine zufällige Anzeige angezeigt. Bei „Stapeln“ werden alle Anzeigen in dieser Zone gleichzeitig angezeigt.
```

#### [`ralkage-ad-management.admin.zones.display_modes.rotate`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_modes.rotate%22)

> Rotate

```diff
+Rotieren
```

#### [`ralkage-ad-management.admin.zones.display_modes.stack`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.display_modes.stack%22)

> Stack All

```diff
+Alle stapeln
```

#### [`ralkage-ad-management.admin.zones.edit`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.edit%22)

> Edit Zone

```diff
+Zone bearbeiten
```

#### [`ralkage-ad-management.admin.zones.is_active`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.is_active%22)

> Active

```diff
+Aktiv
```

#### [`ralkage-ad-management.admin.zones.label`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.label%22)

> Display Label

```diff
+Anzeige-Bezeichnung
```

#### [`ralkage-ad-management.admin.zones.max_height`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.max_height%22)

> Max Height (px)

```diff
+Maximale Höhe (px)
```

#### [`ralkage-ad-management.admin.zones.max_width`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.max_width%22)

> Max Width (px)

```diff
+Maximale Breite (px)
```

#### [`ralkage-ad-management.admin.zones.name`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.name%22)

> Zone Name

```diff
+Zonenname
```

#### [`ralkage-ad-management.admin.zones.name_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.name_help%22)

> Unique identifier (lowercase, no spaces). Used in zone tags.

```diff
+Eindeutige Kennung (Kleinbuchstaben, keine Leerzeichen). Wird in Zonen-Tags verwendet.
```

#### [`ralkage-ad-management.admin.zones.position`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.position%22)

> Position

```diff
+Position
```

#### [`ralkage-ad-management.admin.zones.positions.above_footer`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.above_footer%22)

> Above Footer

```diff
+Über der Fußzeile
```

#### [`ralkage-ad-management.admin.zones.positions.below_header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.below_header%22)

> Below Header

```diff
+Unter der Kopfzeile
```

#### [`ralkage-ad-management.admin.zones.positions.between_posts`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.between_posts%22)

> Between Posts

```diff
+Zwischen Beiträgen
```

#### [`ralkage-ad-management.admin.zones.positions.custom`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.custom%22)

> Custom

```diff
+Benutzerdefiniert
```

#### [`ralkage-ad-management.admin.zones.positions.footer`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.footer%22)

> Footer

```diff
+Fußzeile
```

#### [`ralkage-ad-management.admin.zones.positions.header`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.header%22)

> Header

```diff
+Kopfzeile
```

#### [`ralkage-ad-management.admin.zones.positions.sidebar`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.positions.sidebar%22)

> Sidebar

```diff
+Seitenleiste
```

#### [`ralkage-ad-management.admin.zones.shortcode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.shortcode_help%22)

> Paste this tag in any post or discussion to display ads from a specific zone inline.

```diff
+Füge diesen Tag in einen beliebigen Beitrag oder eine Diskussion ein, um Anzeigen aus einer bestimmten Zone direkt im Text anzuzeigen.
```

#### [`ralkage-ad-management.admin.zones.shortcode_title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.shortcode_title%22)

> Post Shortcode:

```diff
+Beitrags-Shortcode:
```

#### [`ralkage-ad-management.admin.zones.sort_order`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.sort_order%22)

> Sort Order

```diff
+Sortierreihenfolge
```

#### [`ralkage-ad-management.admin.zones.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.title%22)

> Ad Zones

```diff
+Bereiche für Werbebanner
```

#### [`ralkage-ad-management.admin.zones.zone_tag`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.admin.zones.zone_tag%22)

> Zone Tag: {tag}

```diff
+Zonentag: {tag}
```

#### [`ralkage-ad-management.forum.ads.name`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.ads.name%22)

> Ad Name

```diff
+Anzeigename
```

#### [`ralkage-ad-management.forum.ads.select_zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.ads.select_zone%22)

> Select a zone...

```diff
+Zone auswählen…
```

#### [`ralkage-ad-management.forum.ads.zone`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.ads.zone%22)

> Zone

```diff
+Zone
```

#### [`ralkage-ad-management.forum.nav.my_ads`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.nav.my_ads%22)

> My Ads

```diff
+Meine Anzeigen
```

#### [`ralkage-ad-management.forum.page.empty`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.page.empty%22)

> You don't have any advertisements yet.

```diff
+Du hast noch keine Anzeigen.
```

#### [`ralkage-ad-management.forum.page.submit_ad`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.page.submit_ad%22)

> Submit Ad

```diff
+Anzeige einreichen
```

#### [`ralkage-ad-management.forum.page.submit_pending_notice`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.page.submit_pending_notice%22)

> Your ad will be reviewed by an administrator before going live.

```diff
+Deine Anzeige wird vor der Veröffentlichung von einem Administrator geprüft.
```

#### [`ralkage-ad-management.forum.page.title`](https://weblate.rob006.net/translate/flarum2/ralkage-ad-management/de/?q=context%3A%3D%22ralkage-ad-management.forum.page.title%22)

> My Advertisements

```diff
+Meine Werbebanner
```


### `tapao-auto-ai-moderation` (missing)

#### [`tapao-moderationai.admin.log.approve`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.approve%22)

> Approve

```diff
+Genehmigen
```

#### [`tapao-moderationai.admin.log.decision_approved`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.decision_approved%22)

> ✓ Approved

```diff
+✓ Genehmigt
```

#### [`tapao-moderationai.admin.log.decision_rejected`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.decision_rejected%22)

> ✗ Rejected (restored)

```diff
+✗ Abgelehnt (wiederhergestellt)
```

#### [`tapao-moderationai.admin.log.escalate`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.escalate%22)

> Escalate

```diff
+Eskalieren
```

#### [`tapao-moderationai.admin.log.pending`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.pending%22)

> Pending Review

```diff
+Wird derzeit geprüft
```

#### [`tapao-moderationai.admin.log.reject`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.reject%22)

> Reject (Restore Content)

```diff
+Ablehnen (Inhalt wiederherstellen)
```

#### [`tapao-moderationai.admin.log.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.log.title%22)

> Moderation Log

```diff
+Moderationsprotokoll
```

#### [`tapao-moderationai.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.api_key_label%22)

> OpenAI API Key

```diff
+OpenAI-API-Schlüssel
```

#### [`tapao-moderationai.admin.settings.api_key_placeholder`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.api_key_placeholder%22)

> sk-...

```diff
+sk-...
```

#### [`tapao-moderationai.admin.settings.connection_fail`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.connection_fail%22)

> ✗ API connection failed — check API key

```diff
+✗ API-Verbindung fehlgeschlagen – API-Schlüssel überprüfen
```

#### [`tapao-moderationai.admin.settings.connection_ok`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.connection_ok%22)

> ✓ API connection successful

```diff
+✓ API-Verbindung hergestellt
```

#### [`tapao-moderationai.admin.settings.enabled_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.enabled_label%22)

> Enable Auto-Moderation

```diff
+Auto-Moderation aktivieren
```

#### [`tapao-moderationai.admin.settings.exempt_groups_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.exempt_groups_label%22)

> Exempt User Groups

```diff
+Ausgenommene Benutzergruppen
```

#### [`tapao-moderationai.admin.settings.mode_async`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_async%22)

> Asynchronous (review after save)

```diff
+Asynchron (Überprüfung nach dem Speichern)
```

#### [`tapao-moderationai.admin.settings.mode_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_label%22)

> Moderation Mode

```diff
+Moderationsmodus
```

#### [`tapao-moderationai.admin.settings.mode_sync`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.mode_sync%22)

> Synchronous (block before save)

```diff
+Synchron (Blockiert vor dem Speichern)
```

#### [`tapao-moderationai.admin.settings.model_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.model_label%22)

> Moderation Model

```diff
+Moderationsmodell
```

#### [`tapao-moderationai.admin.settings.scan_images_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.scan_images_label%22)

> Moderate Images (omni-moderation-latest required)

```diff
+Bilder moderieren (omni-moderation-latest erforderlich)
```

#### [`tapao-moderationai.admin.settings.scan_private_messages_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.scan_private_messages_label%22)

> Moderate Private Messages (fof/byobu)

```diff
+Private Nachrichten moderieren (fof/byobu)
```

#### [`tapao-moderationai.admin.settings.test_connection`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.test_connection%22)

> Test API Connection

```diff
+API-Verbindung testen
```

#### [`tapao-moderationai.admin.settings.thresholds_heading`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.thresholds_heading%22)

> Per-Category Thresholds &amp; Actions

```diff
+Schwellenwerte & Maßnahmen je Kategorie
```

#### [`tapao-moderationai.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.title%22)

> ModerationAI Settings

```diff
+ModerationA-Einstellungen
```

#### [`tapao-moderationai.admin.settings.trust_skip_threshold_help`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.trust_skip_threshold_help%22)

> Users scoring above this are not moderated (trust system).

```diff
+Benutzer, deren Punktzahl darüber liegt, werden nicht moderiert (Vertrauenssystem).
```

#### [`tapao-moderationai.admin.settings.trust_skip_threshold_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.trust_skip_threshold_label%22)

> Trust Score — Skip threshold (0–100)

```diff
+Vertrauenswürdigkeit – Schwellenwert zum Überspringen (0–100)
```

#### [`tapao-moderationai.admin.settings.webhook_url_help`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.webhook_url_help%22)

> POSTed JSON on every flagged item.

```diff
+JSON für jedes gemeldete Element, das über POST gesendet wird.
```

#### [`tapao-moderationai.admin.settings.webhook_url_label`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.admin.settings.webhook_url_label%22)

> Webhook URL (optional)

```diff
+Webhook-URL (optional)
```

#### [`tapao-moderationai.forum.post_under_review`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.forum.post_under_review%22)

> Your post is being reviewed by our moderation system and will appear shortly.

```diff
+Dein Beitrag wird derzeit von unserem Moderationssystem geprüft und wird in Kürze erscheinen.
```

#### [`tapao-moderationai.forum.upload_rejected`](https://weblate.rob006.net/translate/flarum2/tapao-auto-ai-moderation/de/?q=context%3A%3D%22tapao-moderationai.forum.upload_rejected%22)

> This file was rejected by the content moderation system.

```diff
+Diese Datei wurde vom Inhaltsmoderationssystem abgelehnt.
```


### `tryhackx-advanced-pages` (missing)

#### [`tryhackx-advanced-pages.admin.edit_page.cancel_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.cancel_button%22)

> Cancel

```diff
+Abbrechen
```

#### [`tryhackx-advanced-pages.admin.edit_page.content_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.content_label%22)

> Content

```diff
+Inhalt
```

#### [`tryhackx-advanced-pages.admin.edit_page.content_type_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.content_type_label%22)

> Content Type

```diff
+Inhaltstyp
```

#### [`tryhackx-advanced-pages.admin.edit_page.create_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.create_title%22)

> Create Page

```diff
+Seite erstellen
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_button%22)

> Delete

```diff
+Löschen
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_confirmation%22)

> Are you sure you want to delete this page? This action cannot be undone.

```diff
+Möchtest du diese Seite wirklich löschen? Diese Aktion kann nicht rückgängig gemacht werden.
```

#### [`tryhackx-advanced-pages.admin.edit_page.delete_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.delete_title%22)

> Delete Page

```diff
+Seite löschen
```

#### [`tryhackx-advanced-pages.admin.edit_page.discard_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.discard_button%22)

> Discard

```diff
+Verwerfen
```

#### [`tryhackx-advanced-pages.admin.edit_page.edit_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.edit_title%22)

> Edit Page

```diff
+Seite bearbeiten
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_hidden_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_hidden_label%22)

> Hidden (visible only to admins)

```diff
+Verborgen (nur für Administratoren sichtbar)
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_published_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_published_label%22)

> Published

```diff
+Veröffentlicht
```

#### [`tryhackx-advanced-pages.admin.edit_page.is_restricted_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.is_restricted_label%22)

> Restricted (requires login)

```diff
+Eingeschränkt (Zugang erfordert Anmeldung)
```

#### [`tryhackx-advanced-pages.admin.edit_page.keep_editing_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.keep_editing_button%22)

> Keep Editing

```diff
+Weiter bearbeiten
```

#### [`tryhackx-advanced-pages.admin.edit_page.meta_description_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.meta_description_label%22)

> Meta Description (SEO)

```diff
+Metabeschreibung (SEO)
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_flarum`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_flarum%22)

> Flarum (vanilla — multiple newlines = single break)

```diff
+Flarum (Standardversion – mehrere Zeilenumbrüche = ein Zeilenumbruch)
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_mode_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_mode_label%22)

> Newline Mode

```diff
+Zeilenumbruch-Modus
```

#### [`tryhackx-advanced-pages.admin.edit_page.newline_preserve`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.newline_preserve%22)

> Preserve (respect all newlines)

```diff
+Beibehalten (alle Zeilenumbrüche beibehalten)
```

#### [`tryhackx-advanced-pages.admin.edit_page.php_warning`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.php_warning%22)

> PHP pages execute server-side code. Only create PHP pages if you understand the security implications. Errors are logged but never displayed to visitors.

```diff
+PHP-Seiten führen serverseitigen Code aus. Erstelle PHP-Seiten nur, wenn du dir der damit verbundenen Sicherheitsrisiken bewusst bist. Fehler werden protokolliert, aber den Besuchern niemals angezeigt.
```

#### [`tryhackx-advanced-pages.admin.edit_page.preview`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.preview%22)

> Preview

```diff
+Vorschau
```

#### [`tryhackx-advanced-pages.admin.edit_page.raw`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.raw%22)

> Raw

```diff
+Roh
```

#### [`tryhackx-advanced-pages.admin.edit_page.slug_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.slug_label%22)

> URL Slug

```diff
+URL-Slug
```

#### [`tryhackx-advanced-pages.admin.edit_page.submit_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.submit_button%22)

> Save Page

```diff
+Seite speichern
```

#### [`tryhackx-advanced-pages.admin.edit_page.title_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.title_label%22)

> Title

```diff
+Titel
```

#### [`tryhackx-advanced-pages.admin.edit_page.type_text`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.type_text%22)

> Plain Text

```diff
+Nur Text
```

#### [`tryhackx-advanced-pages.admin.edit_page.unsaved_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.unsaved_message%22)

> You have unsaved changes. Are you sure you want to close without saving?

```diff
+Es gibt ungespeicherte Änderungen. Möchtest du wirklich schließen, ohne zu speichern?
```

#### [`tryhackx-advanced-pages.admin.edit_page.unsaved_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.unsaved_title%22)

> Unsaved Changes

```diff
+Ungespeicherte Änderungen
```

#### [`tryhackx-advanced-pages.admin.edit_page.visible_groups_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.visible_groups_help%22)

> Leave all checked to make the page visible to everyone. Uncheck groups to restrict access. Admins always have access.

```diff
+Lasse alle Kontrollkästchen aktiviert, damit die Seite für alle sichtbar ist. Deaktiviere die Kontrollkästchen für Gruppen, um den Zugriff einzuschränken. Administratoren haben immer Zugriff.
```

#### [`tryhackx-advanced-pages.admin.edit_page.visible_groups_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.edit_page.visible_groups_label%22)

> Visible to Groups

```diff
+Für Gruppen sichtbar
```

#### [`tryhackx-advanced-pages.admin.pages.actions_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.actions_column%22)

> Actions

```diff
+Aktionen
```

#### [`tryhackx-advanced-pages.admin.pages.create_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.create_button%22)

> Create Page

```diff
+Seite erstellen
```

#### [`tryhackx-advanced-pages.admin.pages.draft`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.draft%22)

> Draft

```diff
+Entwurf
```

#### [`tryhackx-advanced-pages.admin.pages.edit_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.edit_button%22)

> Edit

```diff
+Bearbeiten
```

#### [`tryhackx-advanced-pages.admin.pages.empty`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.empty%22)

> No pages have been created yet.

```diff
+Es wurden noch keine Seiten erstellt.
```

#### [`tryhackx-advanced-pages.admin.pages.everyone`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.everyone%22)

> Everyone

```diff
+Jeder
```

#### [`tryhackx-advanced-pages.admin.pages.groups_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.groups_column%22)

> Groups

```diff
+Gruppen
```

#### [`tryhackx-advanced-pages.admin.pages.hidden`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.hidden%22)

> Hidden

```diff
+Verborgen
```

#### [`tryhackx-advanced-pages.admin.pages.published`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.published%22)

> Published

```diff
+Veröffentlicht
```

#### [`tryhackx-advanced-pages.admin.pages.restricted`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.restricted%22)

> Login Required

```diff
+Anmeldung erforderlich
```

#### [`tryhackx-advanced-pages.admin.pages.slug_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.slug_column%22)

> URL

```diff
+URL
```

#### [`tryhackx-advanced-pages.admin.pages.status_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.status_column%22)

> Status

```diff
+Status
```

#### [`tryhackx-advanced-pages.admin.pages.title_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.title_column%22)

> Title

```diff
+Titel
```

#### [`tryhackx-advanced-pages.admin.pages.type_column`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.pages.type_column%22)

> Type

```diff
+Art
```

#### [`tryhackx-advanced-pages.admin.permissions.manage_pages_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.permissions.manage_pages_label%22)

> Manage Advanced Pages

```diff
+Erweiterte Seiten verwalten
```

#### [`tryhackx-advanced-pages.admin.permissions.view_spoilers_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.permissions.view_spoilers_label%22)

> View spoiler content

```diff
+Spoilerinhalt anzeigen
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_center`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_center%22)

> \[center\] — Center text

```diff
+[center] — Text zentrieren
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_help%22)

> Enable or disable custom BBCode tags for page rendering. Changes require clearing the formatter cache (php flarum cache:clear).

```diff
+Aktiviere oder deaktiviere benutzerdefinierte BBCode-Tags für die Seitenanzeige. Nach der Änderung muss der Formatierungs-Cache geleert werden (php flarum cache:clear).
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_spoiler`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_spoiler%22)

> \[spoiler\] — Spoiler/Details

```diff
+[spoiler] — Spoiler/Details
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_table`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_table%22)

> \[table\] \[tr\] \[th\] \[td\] — Tables

```diff
+[table] [tr] [th] [td] — Tabellen
```

#### [`tryhackx-advanced-pages.admin.settings.bbcode_url`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.bbcode_url%22)

> \[url\] — Extended URL parser (accepts URLs rejected by Flarum)

```diff
+[url] — Erweiterter URL-Parser (akzeptiert URLs, die von Flarum abgelehnt werden)
```

#### [`tryhackx-advanced-pages.admin.settings.forum_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.forum_help%22)

> Override how spoilers are displayed in regular forum posts. Requires clearing the formatter cache (php flarum cache:clear).

```diff
+Überschreibt die Darstellung von Spoilern in normalen Forenbeiträgen. Dazu muss der Formatierungs-Cache geleert werden (php flarum cache:clear).
```

#### [`tryhackx-advanced-pages.admin.settings.forum_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.forum_title%22)

> Forum Integration

```diff
+Forenintegration
```

#### [`tryhackx-advanced-pages.admin.settings.replace_forum_spoiler`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.replace_forum_spoiler%22)

> Replace Flarum's default spoiler with Advanced Pages spoiler style (details/summary)

```diff
+Den Standard-Spoiler von Flarum durch den Spoiler-Stil von „Advanced Pages“ ersetzen (details/summary)
```

#### [`tryhackx-advanced-pages.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.settings.title%22)

> BBCode Settings

```diff
+BBCode-Einstellungen
```

#### [`tryhackx-advanced-pages.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.button%22)

> Support Development

```diff
+Unterstütze die Entwicklung
```

#### [`tryhackx-advanced-pages.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.copy%22)

> Copy address

```diff
+Adresse kopieren
```

#### [`tryhackx-advanced-pages.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+Wenn dir diese Erweiterung gefällt, würde ich mich über eine kleine Spende freuen, um die Weiterentwicklung zu unterstützen. Jeder Beitrag hilft dabei, das Projekt am Leben zu erhalten und weiter zu pflegen.
```

#### [`tryhackx-advanced-pages.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.thanks%22)

> Thank you for your support!

```diff
+Vielen Dank für deine Unterstützung!
```

#### [`tryhackx-advanced-pages.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.admin.support.title%22)

> Support This Extension

```diff
+Unterstütze diese Erweiterung
```

#### [`tryhackx-advanced-pages.forum.page.loading`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.loading%22)

> Loading...

```diff
+Wird geladen…
```

#### [`tryhackx-advanced-pages.forum.page.not_found_message`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.not_found_message%22)

> The page you are looking for does not exist or you do not have permission to view it.

```diff
+Die gesuchte Seite existiert nicht oder du hast keine Berechtigung, sie anzuzeigen.
```

#### [`tryhackx-advanced-pages.forum.page.not_found_title`](https://weblate.rob006.net/translate/flarum2/tryhackx-advanced-pages/de/?q=context%3A%3D%22tryhackx-advanced-pages.forum.page.not_found_title%22)

> Page Not Found

```diff
+Seite nicht gefunden
```


### `tryhackx-homepage-blocks` (missing)

#### [`tryhackx-homepage-blocks.admin.settings.category_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.category_label%22)

> Custom label for Category filter

```diff
+Benutzerdefinierte Bezeichnung für den Kategorie-Filter
```

#### [`tryhackx-homepage-blocks.admin.settings.category_label_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.category_label_help%22)

> Leave empty to use the default translation.

```diff
+Lasse das Feld leer, um die Standardübersetzung zu verwenden.
```

#### [`tryhackx-homepage-blocks.admin.settings.content_length_enabled`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.content_length_enabled%22)

> Enable content length modification

```diff
+Anpassung der Inhaltslänge aktivieren
```

#### [`tryhackx-homepage-blocks.admin.settings.resolution_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.resolution_label%22)

> Custom label for Resolution filter

```diff
+Benutzerdefinierte Beschriftung für Auflösungsfilter
```

#### [`tryhackx-homepage-blocks.admin.settings.resolution_label_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.resolution_label_help%22)

> Leave empty to use the default translation.

```diff
+Lasse das Feld leer, um die Standardübersetzung zu verwenden.
```

#### [`tryhackx-homepage-blocks.admin.settings.search_debounce_ms`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.search_debounce_ms%22)

> Search debounce (ms)

```diff
+Such-Entprellzeit (ms)
```

#### [`tryhackx-homepage-blocks.admin.settings.search_debounce_ms_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.search_debounce_ms_help%22)

> Delay before firing a search while typing. Higher = fewer requests. Default: 500ms

```diff
+Verzögerung vor dem Auslösen einer Suche während der Eingabe. Höherer Wert = weniger Anfragen. Standard: 500 ms
```

#### [`tryhackx-homepage-blocks.admin.settings.theme_mode`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.theme_mode%22)

> Theme Mode

```diff
+Themenmodus
```

#### [`tryhackx-homepage-blocks.admin.settings.theme_mode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.settings.theme_mode_help%22)

> Auto detects OS/browser dark mode preference.

```diff
+Erkennt automatisch die Einstellungen für den Dunkelmodus des Betriebssystems bzw. Browsers.
```

#### [`tryhackx-homepage-blocks.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+Wenn dir diese Erweiterung gefällt, würde ich mich über eine kleine Spende freuen, um die Weiterentwicklung zu unterstützen. Jeder Beitrag hilft dabei, das Projekt am Leben zu erhalten und weiter zu pflegen.
```

#### [`tryhackx-homepage-blocks.forum.filter_rating_interval`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_rating_interval%22)

> Rating interval

```diff
+Bewertungsintervall
```

#### [`tryhackx-homepage-blocks.forum.filter_resolution`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.filter_resolution%22)

> Resolution

```diff
+Auflösung
```

#### [`tryhackx-homepage-blocks.forum.sort_asc`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_asc%22)

> Ascending

```diff
+Aufsteigend
```

#### [`tryhackx-homepage-blocks.forum.sort_avg_rating`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_avg_rating%22)

> Average rating

```diff
+Durchschnittliche Bewertung
```

#### [`tryhackx-homepage-blocks.forum.sort_created`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_created%22)

> Creation date

```diff
+Erstellungsdatum
```

#### [`tryhackx-homepage-blocks.forum.sort_desc`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_desc%22)

> Descending

```diff
+Absteigend
```

#### [`tryhackx-homepage-blocks.forum.sort_rating_count`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_rating_count%22)

> Number of ratings

```diff
+Anzahl der Bewertungen
```

#### [`tryhackx-homepage-blocks.forum.sort_recently_clicked`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_recently_clicked%22)

> Recently clicked

```diff
+Kürzlich geklickt
```

#### [`tryhackx-homepage-blocks.forum.sort_recently_rated`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.sort_recently_rated%22)

> Recently rated

```diff
+Kürzlich bewertet
```

#### [`tryhackx-homepage-blocks.forum.stats_magnets`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_magnets%22)

> Magnets

```diff
+Magnets
```

#### [`tryhackx-homepage-blocks.forum.stats_uptime`](https://weblate.rob006.net/translate/flarum2/tryhackx-homepage-blocks/de/?q=context%3A%3D%22tryhackx-homepage-blocks.forum.stats_uptime%22)

> Uptime

```diff
+Verfügbarkeit
```


### `tryhackx-thumb-sliders` (missing)

#### [`tryhackx-thumb-sliders.admin.fallback.clear_selection`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.clear_selection%22)

> Use no selection

```diff
+Keine Auswahl verwenden
```

#### [`tryhackx-thumb-sliders.admin.fallback.confirm_delete`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.confirm_delete%22)

> Delete this image?

```diff
+Dieses Bild löschen?
```

#### [`tryhackx-thumb-sliders.admin.fallback.delete`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.delete%22)

> Delete

```diff
+Löschen
```

#### [`tryhackx-thumb-sliders.admin.fallback.no_files`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.no_files%22)

> No images uploaded yet.

```diff
+Noch keine Bilder hochgeladen.
```

#### [`tryhackx-thumb-sliders.admin.fallback.not_active_mode`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.not_active_mode%22)

> These images are only used when fallback mode is set to "Custom uploaded image".

```diff
+Diese Bilder werden nur verwendet, wenn der Ausweich-Modus auf „Benutzerdefiniertes hochgeladenes Bild“ eingestellt ist.
```

#### [`tryhackx-thumb-sliders.admin.fallback.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.title%22)

> Fallback image library

```diff
+Ausweich-Bildbibliothek
```

#### [`tryhackx-thumb-sliders.admin.fallback.upload_button`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.upload_button%22)

> Upload image

```diff
+Bild hochladen
```

#### [`tryhackx-thumb-sliders.admin.fallback.uploading`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.fallback.uploading%22)

> Uploading…

```diff
+Wird hochgeladen…
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_custom`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_custom%22)

> Custom uploaded image

```diff
+Benutzerdefiniertes hochgeladenes Bild
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_default`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_default%22)

> Built-in placeholder

```diff
+Eingebauter Platzhalter
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_help`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_help%22)

> Choose what to display when a discussion has no usable image, or when the image fails to load.

```diff
+Lege fest, was angezeigt werden soll, wenn zu einer Diskussion kein brauchbares Bild vorhanden ist oder wenn das Bild nicht geladen werden kann.
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_label`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_label%22)

> Fallback when no image is available

```diff
+Ausweichlösung, wenn kein Bild verfügbar ist
```

#### [`tryhackx-thumb-sliders.admin.settings.fallback_mode_none`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.settings.fallback_mode_none%22)

> No thumbnail (content shifts left)

```diff
+Kein Vorschaubild (Inhalt verschiebt sich nach links)
```

#### [`tryhackx-thumb-sliders.admin.support.button`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.button%22)

> Support Development

```diff
+Unterstütze die Entwicklung
```

#### [`tryhackx-thumb-sliders.admin.support.copy`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.copy%22)

> Copy address

```diff
+Adresse kopieren
```

#### [`tryhackx-thumb-sliders.admin.support.description`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.description%22)

> If you find this extension useful, please consider supporting its development with a small donation. Every contribution helps keep the project alive and maintained.

```diff
+Wenn du diese Erweiterung nützlich findest, würden wir uns über eine kleine Spende zur Unterstützung ihrer Weiterentwicklung freuen. Jeder Beitrag trägt dazu bei, das Projekt am Leben zu erhalten und weiterzuentwickeln.
```

#### [`tryhackx-thumb-sliders.admin.support.thanks`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.thanks%22)

> Thank you for your support!

```diff
+Vielen Dank für deine Unterstützung!
```

#### [`tryhackx-thumb-sliders.admin.support.title`](https://weblate.rob006.net/translate/flarum2/tryhackx-thumb-sliders/de/?q=context%3A%3D%22tryhackx-thumb-sliders.admin.support.title%22)

> Support This Extension

```diff
+Unterstütze diese Erweiterung
```


### `yippy-auth-ldap` (missing)

#### [`yippy-auth-ldap.admin.settings.display_detailed_error`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.display_detailed_error%22)

> Display detailed LDAP errors for failed login attempts

```diff
+Detaillierte LDAP-Fehler bei fehlgeschlagenen Anmeldeversuchen anzeigen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_dn%22)

> Distinguished name (DNs)

```diff
+Distinguished Name (DNs)
```

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_dn_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_dn_help%22)

> Leave empty for anonymous binding

```diff
+Für anonyme Bindung leer lassen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_password_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_password_help%22)

> Leave empty for anonymous binding

```diff
+Für anonyme Bindung leer lassen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.base_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.base_dn%22)

> Base DNs

```diff
+Basis-DNs
```

#### [`yippy-auth-ldap.admin.settings.domains.data.filter`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.filter%22)

> Filter to apply

```diff
+Filter anwenden
```

#### [`yippy-auth-ldap.admin.settings.domains.data.filter_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.filter_help%22)

> Optional, must exclude 'Search fields' into the filter. For example inputting filter as '(objectclass=user)' and selecting 'uid' within 'Search fields' will amend the filter as '(&amp;(objectclass=user)(uid=\[User's Input\]))"

```diff
+Optional: Die „Suchfelder“ müssen aus dem Filter ausgeschlossen werden. Wenn du beispielsweise den Filter „(objectclass=user)“ eingibst und in den „Suchfeldern“ „uid“ auswählen, wird der Filter zu „(&(objectclass=user)(uid=[Benutzereingabe])“ geändert.
```

#### [`yippy-auth-ldap.admin.settings.domains.data.follow_referrals`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.follow_referrals%22)

> Follow referrals to bind to LDAP server

```diff
+Befolge die Anweisungen, um eine Verbindung zum LDAP-Server herzustellen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.is_enabled`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.is_enabled%22)

> Enable LDAP Server

```diff
+LDAP-Server aktivieren
```

#### [`yippy-auth-ldap.admin.settings.domains.data.permission_groups`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.permission_groups%22)

> Assign specific Permissions

```diff
+Bestimmte Berechtigungen zuweisen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.permission_groups_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.permission_groups_help%22)

> This is applied upon registration

```diff
+Dies gilt ab der Registrierung
```

#### [`yippy-auth-ldap.admin.settings.domains.data.search_user_fields`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.search_user_fields%22)

> Search fields

```diff
+Suchfelder
```

#### [`yippy-auth-ldap.admin.settings.domains.data.search_user_fields_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.search_user_fields_help%22)

> Select multiple search fields using the dropdown options, for example selecting "mail" will only allow email, while "uid,mail" will allow either email or username.

```diff
+Wähle über die Dropdown-Optionen mehrere Suchfelder aus. Wenn du beispielsweise „mail“ auswählst, wird nur nach E-Mail-Adressen gesucht, während bei „uid,mail“ sowohl nach E-Mail-Adressen als auch nach Benutzernamen gesucht wird.
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_mail`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_mail%22)

> Assign Email field

```diff
+Feld „E-Mail“ zuweisen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_mail_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_mail_help%22)

> Leave empty for allowing User's to set their own email during registation

```diff
+Feld leer lassen, damit Benutzer bei der Registrierung ihre eigene E-Mail-Adresse angeben können
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields%22)

> Assign Nickname with fields

```diff
+Spitznamen mit Feldern zuweisen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_nickname_fields_help%22)

> Nickname extension must be enabled, compile the Nickname with multiple LDAP fields using the dropdown options. For example selecting "givenname,sn" will assign "\[First Name\] \[Last Name\]" as their Nickname

```diff
+Die Spitznamen-Erweiterung muss aktiviert sein. Stelle den Spitznamen mithilfe der Dropdown-Optionen aus mehreren LDAP-Feldern zusammen. Wenn du beispielsweise „givenname,sn“ auswählst, wird als Spitzname „[Vorname] [Nachname]“ zugewiesen.
```

#### [`yippy-auth-ldap.admin.settings.domains.data.user_username`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.user_username%22)

> Assign Username field

```diff
+Feld „Benutzername“ zuweisen
```

#### [`yippy-auth-ldap.admin.settings.domains.data.version_help`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.version_help%22)

> Can only be set to 2 or 3 (3 is default).

```diff
+Kann nur auf 2 oder 3 eingestellt werden (Standardwert ist 3).
```

#### [`yippy-auth-ldap.admin.settings.domains.description`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.description%22)

> Enter all available LDAP domains for Flarum to use for login

```diff
+Gib alle verfügbaren LDAP-Domänen ein, die Flarum für die Anmeldung verwenden soll
```

#### [`yippy-auth-ldap.admin.settings.domains.header.flarum_description`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.header.flarum_description%22)

> When the LDAP account has been found, you can assign the corresponding fields to the Flarum User Profile at registation.

```diff
+Sobald das LDAP-Konto gefunden wurde, kannst du bei der Registrierung die entsprechenden Felder dem Flarum-Benutzerprofil zuweisen.
```

#### [`yippy-auth-ldap.admin.settings.domains.header.search_fields_description`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.header.search_fields_description%22)

> Create a list of LDAP fields to compare with the User's provided Username.

```diff
+Erstelle eine Liste von LDAP-Feldern, die mit dem vom Benutzer angegebenen Benutzernamen abgeglichen werden sollen.
```

#### [`yippy-auth-ldap.admin.settings.domains.title`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.title%22)

> LDAP Domains

```diff
+LDAP-Domänen
```

#### [`yippy-auth-ldap.admin.settings.method_name`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.method_name%22)

> LDAP server name (will appear after "Login with")

```diff
+Name des LDAP-Servers (wird hinter „Anmelden mit“ angezeigt)
```

#### [`yippy-auth-ldap.admin.settings.onlyUse`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.onlyUse%22)

> Hide Flarum standard login method

```diff
+Standard-Anmeldemethode von Flarum ausblenden
```

#### [`yippy-auth-ldap.forum.errors.domains.empty_base_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_base_dn%22)

> Domain {domain\_index} has no Base DNs set, amend extension settings.

```diff
+Für die Domäne {domain_index} sind keine Basis-DNs festgelegt. Passe die Erweiterungs-Einstellungen an.
```

#### [`yippy-auth-ldap.forum.errors.domains.empty_search_field`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_search_field%22)

> Domain {domain\_index} has LDAP Account Search - 'Search field' empty, amend extension settings.

```diff
+Die Domäne {domain_index} verfügt über die LDAP-Kontosuche – das „Suchfeld“ ist leer. Passe die Erweiterungs-Einstellungen an.
```

#### [`yippy-auth-ldap.forum.errors.domains.empty_user_username`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.empty_user_username%22)

> Domain {domain\_index} has Flarum User Profile - 'Username field' empty, amend extension settings.

```diff
+Die Domäne {domain_index} weist im Flarum-Benutzerprofil ein leeres Feld „Benutzername“ auf. Passe die Erweiterungs-Einstellungen an.
```

#### [`yippy-auth-ldap.forum.errors.domains.mail_field_does_not_exist`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.mail_field_does_not_exist%22)

> Domain {domain\_index} cannot find mail for Flarum User Profile - \`Email field\` with \`{data}\`, amend extension settings.

```diff
+Die Domäne {domain_index} kann keine E-Mail für das Flarum-Benutzerprofil – „E-Mail“-Feld mit „{data}“ – finden. Passe die Erweiterungs-Einstellungen an.
```

#### [`yippy-auth-ldap.forum.errors.domains.username_field_does_not_exist`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.domains.username_field_does_not_exist%22)

> Domain {domain\_index} cannot find username for Flarum User Profile - \`Username field\` with \`{data}\`, amend extension settings.

```diff
+Die Domäne {domain_index} kann den Benutzernamen für das Flarum-Benutzerprofil – „Benutzername“-Feld mit „{data}“ – nicht finden. Passe die Erweiterungs-Einstellungen an.
```

#### [`yippy-auth-ldap.forum.errors.not_authenticated`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/de/?q=context%3A%3D%22yippy-auth-ldap.forum.errors.not_authenticated%22)

> Unable to bind {server} due to invalid credential, amend extension settings.

```diff
+{server} kann aufgrund ungültiger Anmeldedaten nicht verbunden werden. Passe die Erweiterungs-Einstellungen an.
```

<!-- {% endraw %} -->
