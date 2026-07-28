# Hungarian inherited translations differences

Translations for Hungarian (`hu`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **43** are translated differently and **6** are
translated only in `hu`. Altogether they cover **21** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [9](#core) | 0 |
| `flarum-lock` | [2](#flarum-lock) | 0 |
| `flarum-mentions` | [1](#flarum-mentions) | 0 |
| `flarum-nicknames` | [3](#flarum-nicknames) | 0 |
| `flarum-sticky` | [1](#flarum-sticky) | 0 |
| `flarum-subscriptions` | [1](#flarum-subscriptions) | 0 |
| `fof-analytics` | [4](#fof-analytics) | 0 |
| `fof-anti-spam` | [2](#fof-anti-spam) | 0 |
| `fof-ban-ips` | [1](#fof-ban-ips) | 0 |
| `fof-best-answer` | [2](#fof-best-answer) | 0 |
| `fof-default-user-preferences` | [3](#fof-default-user-preferences) | 0 |
| `fof-forum-stats-widget` | 0 | [6](#fof-forum-stats-widget-missing) |
| `fof-frontpage` | [1](#fof-frontpage) | 0 |
| `fof-open-collective` | [1](#fof-open-collective) | 0 |
| `fof-recaptcha` | [1](#fof-recaptcha) | 0 |
| `fof-split` | [5](#fof-split) | 0 |
| `fof-upload` | [1](#fof-upload) | 0 |
| `forumaker-magicbb` | [2](#forumaker-magicbb) | 0 |
| `glowingblue-password-strength` | [1](#glowingblue-password-strength) | 0 |
| `justoverclock-related-discussions` | [1](#justoverclock-related-discussions) | 0 |
| `validation` | [1](#validation) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `hu` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.email.mail_mailgun_domain_label`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.email.mail_mailgun_domain_label%22)

> Domain

```diff
-Domén
+Domain
```

#### [`core.admin.email.send_test_mail_success`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.email.send_test_mail_success%22)

> Test mail sent successfully!

```diff
-A teszt levél sikeresen elküldve.
+A teszt levél sikeresen elküldve!
```

A teszt levél sikeresen <del>elküldve.</del><ins>elküldve!</ins>

#### [`core.admin.extension.disabled`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.extension.disabled%22)

> Disabled

```diff
-Tiltva
+Letiltva
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
-Leváltották
+Leváltva
```

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Utolsó látogatás idejének megtekintése
+Utolsó látogatás idejének megtekintése mindig
```

Utolsó látogatás idejének megtekintése<ins> mindig</ins>

#### [`core.admin.permissions_controls.allow_some_minutes_button`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.permissions_controls.allow_some_minutes_button%22)

> {count, plural, one {For # minute} other {For # minutes}}

```diff
-{count} percig
+{count, plural, one {# percig} other {# percig}}
```

#### [`core.admin.users.grid.columns.join_time.title`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.admin.users.grid.columns.join_time.title%22)

> Joined

```diff
-Csatlakozott
+Csatlakozva
```

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count} olvasatlan válasz. Olvasatlan {count, plural, one {válasz} other {válaszok}} olvasottnak jelölése.
+{count, plural, one {# olvasatlan válasz} other {# olvasatlan válasz}}. Olvasatlan {count, plural, one {válasz} other {válaszok}} olvasottnak jelölése.
```

<del>{count}</del><ins>{count, plural, one {#</ins> olvasatlan <del>válasz.</del><ins>válasz} other {# olvasatlan válasz}}.</ins> Olvasatlan {count, plural, one {válasz} other {válaszok}} olvasottnak jelölése.

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/hu/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-Biztos, hogy folytatja? Ez a művelet nem vonható vissza.
+Valóban folytatja? Ez a művelet nem vonható vissza.
```

<del>Biztos, hogy</del><ins>Valóban</ins> folytatja? Ez a művelet nem vonható vissza.


### `flarum-lock`

#### [`flarum-lock.forum.discussion_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/flarum-lock/hu/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.unlock_button%22)

> Unlock

```diff
-Újranyitás
+Lezárás feloldása
```

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/hu/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} {time} újranyitotta a témát.
+{username} {time} feloldotta a téma lezárását.
```

{username} {time} <del>újranyitotta</del><ins>feloldotta</ins> a <del>témát.</del><ins>téma lezárását.</ins>


### `flarum-mentions`

#### [`flarum-mentions.email.group_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/hu/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.subject%22)

> {mentioner\_display\_name} mentioned a group you're a member of in {title}

```diff
-{mentioner_display_name} a következő bejegyzésben megemlített egy csoportot, melynek a tagja: {title}
+{mentioner_display_name} a következő témában megemlített egy csoportot, melynek a tagja: {title}
```

{mentioner\_display\_name} a következő <del>bejegyzésben</del><ins>témában</ins> megemlített egy csoportot, melynek a tagja: {title}


### `flarum-nicknames`

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/hu/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
-Ez elrejti a „felhasználónév” beviteli mezőt a regisztráció során, és véletlenszerű számot használ helyette. Emellett kötelezővé teszi a „becenév” mezőt. Ez csak akkor lép életbe, ha a „Becenevek beállításának engedélyezése regisztrációkor” engedélyezve van.
+Ez elrejti a „felhasználónév” beviteli mezőt a regisztráció során, és véletlenszerű számot használ helyette. Emellett kötelezővé teszi a „becenév” mezőt. Ez csak akkor lép életbe, ha a „Becenevek beállításának engedélyezése a regisztráció során” engedélyezve van.
```

Ez elrejti a „felhasználónév” beviteli mezőt a regisztráció során, és véletlenszerű számot használ helyette. Emellett kötelezővé teszi a „becenév” mezőt. Ez csak akkor lép életbe, ha a „Becenevek beállításának engedélyezése <del>regisztrációkor”</del><ins>a regisztráció során”</ins> engedélyezve van.

#### [`flarum-nicknames.admin.settings.unique_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/hu/?q=context%3A%3D%22flarum-nicknames.admin.settings.unique_label%22)

> Require unique nicknames

```diff
-Egyedi becenevek megkövetése
+Egyedi becenevek megkövetelése
```

Egyedi becenevek <del>megkövetése</del><ins>megkövetelése</ins>

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/hu/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-A bővítmény életbe léptetéséhez a „becenevet” kell választania a megjelenítendő név meghajtójaként az <a><strong>Alapok oldalon</strong></a>.
+A bővítmény életbe léptetéséhez a „becenevet” kell választania a megjelenítendő név illesztőprogramjaként az <a><strong>Alapok oldalon</strong></a>.
```

A bővítmény életbe léptetéséhez a „becenevet” kell választania a megjelenítendő név <del>meghajtójaként</del><ins>illesztőprogramjaként</ins> az &lt;a&gt;&lt;strong&gt;Alapok oldalon&lt;/strong&gt;&lt;/a&gt;.


### `flarum-sticky`

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/hu/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} {time} eltávolította a kitűzést.
+{username} {time} megszüntette a téma kitűzését.
```

{username} {time} <del>eltávolította</del><ins>megszüntette</ins> a <del>kitűzést.</del><ins>téma kitűzését.</ins>


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/hu/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Azon témák automatikusan követése, amelyekhez hozzászóltam
+Azon témák automatikus követése, amelyekhez hozzászóltam
```

Azon témák <del>automatikusan</del><ins>automatikus</ins> követése, amelyekhez hozzászóltam


### `fof-analytics`

#### [`fof-analytics.admin.popup.field.googleGTMCode`](https://weblate.rob006.net/translate/flarum2/fof-analytics/hu/?q=context%3A%3D%22fof-analytics.admin.popup.field.googleGTMCode%22)

> GTM code ID (optional)

```diff
-GTM kód azonosítója (nem kötelező)
+GTM-kód azonosítója (nem kötelező)
```

<del>GTM kód</del><ins>GTM-kód</ins> azonosítója (nem kötelező)

#### [`fof-analytics.admin.popup.field.piwikAliasUrl`](https://weblate.rob006.net/translate/flarum2/fof-analytics/hu/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikAliasUrl%22)

> Alias URL

```diff
-Alias URL
+Alias webcíme
```

Alias <del>URL</del><ins>webcíme</ins>

#### [`fof-analytics.admin.popup.field.piwikTrackAccounts`](https://weblate.rob006.net/translate/flarum2/fof-analytics/hu/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikTrackAccounts%22)

> Track individual user accounts

```diff
-Egyéni felhasználó fiók követése
+Egyéni felhasználói fiókok követése
```

Egyéni <del>felhasználó</del><ins>felhasználói</ins> <del>fiók</del><ins>fiókok</ins> követése

#### [`fof-analytics.admin.popup.field.piwikUrl`](https://weblate.rob006.net/translate/flarum2/fof-analytics/hu/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikUrl%22)

> Matomo domain or URL

```diff
-Matomo domén vagy URL
+Matomo domén vagy webcím
```

Matomo domén vagy <del>URL</del><ins>webcím</ins>


### `fof-anti-spam`

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/hu/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
-{username} ({email}) regisztrációja blokkolva erről az IP-ről: {ip}
+{username} ({email}) regisztrációja a következő címről blokkolva: {ip}
```

{username} ({email}) regisztrációja <del>blokkolva</del><ins>a</ins> <del>erről</del><ins>következő</ins> <del>az</del><ins>címről</ins> <del>IP-ről:</del><ins>blokkolva:</ins> {ip}

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/hu/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
-{username} megjelölve kéretlen tartalmat küldőként
+{username} kéretlen tartalmat küldőnek jelölve
```

{username} <del>megjelölve </del>kéretlen tartalmat <del>küldőként</del><ins>küldőnek jelölve</ins>


### `fof-ban-ips`

#### [`flarum-gdpr.lib.data.bannedipdata.export_description`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/hu/?q=context%3A%3D%22flarum-gdpr.lib.data.bannedipdata.export_description%22)

> If an IP ban record is associated with a user (i.e. the user was banned by IP), the user's IP address will be included in the export, along with the reason for the ban and the creation date.

```diff
-Ha egy IP-cím kitiltási rekord egy felhasználóhoz kapcsolódik (tehát a felhasználó IP-cím alapján ki lett tiltva), akkor a felhasználó IP-címe szerepelni fog az exportban, a tiltás okával és a létrehozás dátumával együtt.
+Ha egy IP-cím-kitiltási rekord egy felhasználóhoz kapcsolódik (tehát a felhasználó IP-cím alapján ki lett tiltva), akkor a felhasználó IP-címe szerepelni fog az exportban, a tiltás okával és a létrehozás dátumával együtt.
```

Ha egy <del>IP-cím kitiltási</del><ins>IP-cím-kitiltási</ins> rekord egy felhasználóhoz kapcsolódik (tehát a felhasználó IP-cím alapján ki lett tiltva), akkor a felhasználó IP-címe szerepelni fog az exportban, a tiltás okával és a létrehozás dátumával együtt.


### `fof-best-answer`

#### [`fof-best-answer.forum.answered_badge`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/hu/?q=context%3A%3D%22fof-best-answer.forum.answered_badge%22)

> Answered

```diff
-Megválaszolt
+Megválaszolva
```

#### [`fof-best-answer.forum.filter.accessible_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/hu/?q=context%3A%3D%22fof-best-answer.forum.filter.accessible_label%22)

> Solved/Unsolved selection

```diff
-Megoldva/megoldatlan választó
+Megoldott/megoldatlan választó
```

<del>Megoldva/megoldatlan</del><ins>Megoldott/megoldatlan</ins> választó


### `fof-default-user-preferences`

#### [`fof-default-user-preferences.admin.settings.groupMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/hu/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.groupMentioned%22)

> Group mentioned email

```diff
-Csoport megemlítési e-mail
+Csoportmegemlítési e-mail
```

<del>Csoport megemlítési</del><ins>Csoportmegemlítési</ins> e-mail

#### [`fof-default-user-preferences.admin.settings.postMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/hu/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned%22)

> Post mentioned email

```diff
-Bejegyzés megemlítési e-mail
+Bejegyzésmegemlítési e-mail
```

<del>Bejegyzés megemlítési</del><ins>Bejegyzésmegemlítési</ins> e-mail

#### [`fof-default-user-preferences.admin.settings.userMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/hu/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned%22)

> User mentioned email

```diff
-Felhasználó megemlítési e-mail
+Felhasználómegemlítési e-mail
```

<del>Felhasználó megemlítési</del><ins>Felhasználómegemlítési</ins> e-mail


### `fof-frontpage`

#### [`core.forum.index_sort.front_button`](https://weblate.rob006.net/translate/flarum2/fof-frontpage/hu/?q=context%3A%3D%22core.forum.index_sort.front_button%22)

> FrontPage

```diff
-Főoldal
+Kezdőoldal
```


### `fof-open-collective`

#### [`fof-open-collective.admin.settings.slug_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/hu/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_help%22)

> Enter your Open Collective collective slug (the part after opencollective.com/ in your collective URL).

```diff
-Adja meg az Open Collective kollektíva keresőbarát nevét (az opencollective.com/ utáni részt a webcímből).
+Adja meg az Open Collective kollektíva keresőbarát címét (az opencollective.com/ utáni részt a webcímből).
```

Adja meg az Open Collective kollektíva keresőbarát <del>nevét</del><ins>címét</ins> (az opencollective.com/ utáni részt a webcímből).


### `fof-recaptcha`

#### [`fof-recaptcha.admin.settings.help_text`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/hu/?q=context%3A%3D%22fof-recaptcha.admin.settings.help_text%22)

> Obtain your Google reCAPTCHA credentials &lt;a&gt;here&lt;/a&gt;.

```diff
-Szerezze meg a Google reCAPTCHA hitelesítő adatait <a>itt</a>.
+Szerezze be a Google reCAPTCHA hitelesítő adatait <a>itt</a>.
```

Szerezze <del>meg</del><ins>be</ins> a Google reCAPTCHA hitelesítő adatait &lt;a&gt;itt&lt;/a&gt;.


### `fof-split`

#### [`fof-split.forum.modal.new_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-split/hu/?q=context%3A%3D%22fof-split.forum.modal.new_discussion_label%22)

> Specify the title for the new discussion

```diff
-Add meg az új téma címét
+Adja meg az új téma címét
```

<del>Add</del><ins>Adja</ins> meg az új téma címét

#### [`fof-split.forum.modal.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-split/hu/?q=context%3A%3D%22fof-split.forum.modal.submit_button%22)

> Split

```diff
-Szétválasztás
+Leválasztás
```

#### [`fof-split.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-split/hu/?q=context%3A%3D%22fof-split.forum.modal.title%22)

> Split discussion

```diff
-Beszélgetés szétválasztása
+Téma leválasztása
```

#### [`fof-split.forum.post.was_split_from`](https://weblate.rob006.net/translate/flarum2/fof-split/hu/?q=context%3A%3D%22fof-split.forum.post.was_split_from%22)

> {count, plural, one {{count} post was split from {target}.} other {{count} posts were split from {target}.}}

```diff
-{count, plural, one {{count} bejegyzés leválasztásra került ettől: {target}.} other {{count} bejegyzés leválasztásra került ettől: {target}.}}
+{count, plural, one {{count}} other {{count}}} bejegyzés leválasztásra került ettől: {target}.
```

{count, plural, one <del>{{count} bejegyzés leválasztásra került ettől: {target}.}</del><ins>{{count}}</ins> other <del>{{count}</del><ins>{{count}}}</ins> bejegyzés leválasztásra került ettől: <del>{target}.}}</del><ins>{target}.</ins>

#### [`fof-split.forum.post.was_split_to`](https://weblate.rob006.net/translate/flarum2/fof-split/hu/?q=context%3A%3D%22fof-split.forum.post.was_split_to%22)

> {count, plural, one {{count} post was split to {target}.} other {{count} posts were split to {target}.}}

```diff
-{count, plural, one {{count} bejegyzés át lett rendelve ehhez: {target}.} other {{count} bejegyzés át lett rendelve ehhez: {target}.}}
+{count, plural, one {{count}} other {{count}}} bejegyzés át lett rendelve ehhez: {target}.
```

{count, plural, one <del>{{count} bejegyzés át lett rendelve ehhez: {target}.}</del><ins>{{count}}</ins> other <del>{{count}</del><ins>{{count}}}</ins> bejegyzés át lett rendelve ehhez: <del>{target}.}}</del><ins>{target}.</ins>


### `fof-upload`

#### [`fof-upload.admin.templates.just-url_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/hu/?q=context%3A%3D%22fof-upload.admin.templates.just-url_description%22)

> Inserts just the URL. Rendering can be handled by other extensions with auto-link ability. No download functionality, no statistics are gathered and hotlink protection is ignored.
>

```diff
-Csak az URL-t illeszti be. A megjelenítést más, automatikus hivatkozásra képes kiegészítők kezelhetik. Nincs letöltési funkció, és statisztika sem keletkezik, valamint a hivatkozásvédelem is figyelmen kívül lesz hagyva.
+Csak a webcímet illeszti be. A megjelenítést más, automatikus hivatkozásra képes kiegészítők kezelhetik. Nincs letöltési funkció, és statisztika sem keletkezik, valamint a hivatkozásvédelem is figyelmen kívül lesz hagyva.

```

Csak <del>az</del><ins>a</ins> <del>URL-t</del><ins>webcímet</ins> illeszti be. A megjelenítést más, automatikus hivatkozásra képes kiegészítők kezelhetik. Nincs letöltési funkció, és statisztika sem keletkezik, valamint a hivatkozásvédelem is figyelmen kívül lesz hagyva.<br />


### `forumaker-magicbb`

#### [`forumaker-magicbb.admin.settings.bb_iframe_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/hu/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe_help%22)

> Allows embedding iframes from any source. Use with caution — embedded content may include external scripts. 🧹 After changing this setting, please clear the Flarum cache

```diff
-Engedélyezi a beágyazott kereteket bármilyen forrásból. Használja óvatosan – a beágyazott tartalom külső parancsfájlokat tartalmazhat. 🧹 A beállítás módosítása után törölje a Flarum gyorsítótárát.
+Engedélyezi a keretek beágyazását bármilyen forrásból. Használja óvatosan – a beágyazott tartalom külső parancsfájlokat tartalmazhat. 🧹 A beállítás módosítása után törölje a Flarum gyorsítótárát.
```

Engedélyezi a <del>beágyazott</del><ins>keretek</ins> <del>kereteket</del><ins>beágyazását</ins> bármilyen forrásból. Használja óvatosan – a beágyazott tartalom külső parancsfájlokat tartalmazhat. 🧹 A beállítás módosítása után törölje a Flarum gyorsítótárát.

#### [`forumaker-magicbb.admin.settings.bb_image_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/hu/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image_help%22)

> Wraps images and other inline media in an alignment container. Centered media is scaled to 60% of the post width, side-aligned — up to 40%

```diff
-A képeket és más soron belüli médiát egy igazítási tárolóba helyezi. A középre igazított média automatikusan a bejegyzés szélességének 60%-ára lesz méretezve, az oldalra igazított pedig legfeljebb a 40%-ára.
+A képeket és más beágyazott médiát egy igazítási tárolóba helyezi. A középre igazított média automatikusan a bejegyzés szélességének 60%-ára lesz méretezve, az oldalra igazított pedig legfeljebb a 40%-ára.
```

A képeket és más <del>soron belüli</del><ins>beágyazott</ins> médiát egy igazítási tárolóba helyezi. A középre igazított média automatikusan a bejegyzés szélességének 60%-ára lesz méretezve, az oldalra igazított pedig legfeljebb a 40%-ára.


### `glowingblue-password-strength`

#### [`glowingblue-password-strength.admin.settings.enablePasswordToggle`](https://weblate.rob006.net/translate/flarum2/glowingblue-password-strength/hu/?q=context%3A%3D%22glowingblue-password-strength.admin.settings.enablePasswordToggle%22)

> Enable password visibility toggle for both Sign Up and Log In modals

```diff
-Kapcsoló a jelszó láthatóságához a Regisztráció és a Bejelentkezés párbeszédablakokon
+A jelszó láthatóságát állító kapcsoló engedélyezése a Regisztráció és a Bejelentkezés párbeszédablakokon
```

<del>Kapcsoló a</del><ins>A</ins> jelszó <del>láthatóságához</del><ins>láthatóságát állító kapcsoló engedélyezése</ins> a Regisztráció és a Bejelentkezés párbeszédablakokon


### `justoverclock-related-discussions`

#### [`justoverclock-related-discussions.forum.hasBestAnswer`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/hu/?q=context%3A%3D%22justoverclock-related-discussions.forum.hasBestAnswer%22)

> Solved

```diff
-Megoldott
+Megoldva
```


### `validation`

#### [`validation.exists`](https://weblate.rob006.net/translate/flarum2/validation/hu/?q=context%3A%3D%22validation.exists%22)

> The selected :attribute is invalid.

```diff
-A(z) :attribute már létezik.
+A kiválasztott :attribute érvénytelen.
```


## Missing translations

These strings are translated only in `hu`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `hu`.


### `fof-forum-stats-widget` (missing)

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/hu/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
+A nagy számoknál megjelenítendő tizedesjegyek száma (0-2).
```

#### [`fof-forum-stats-widget.admin.settings.decimal_places.label`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/hu/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.label%22)

> Decimal Places

```diff
+Tizedeshelyek
```

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/hu/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
+Bejegyzések
```

#### [`fof-forum-stats-widget.forum.widget.stats.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/hu/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.discussion_count%22)

> Discussions

```diff
+Témák
```

#### [`fof-forum-stats-widget.forum.widget.stats.user_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/hu/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.user_count%22)

> Users

```diff
+Felhasználók
```

#### [`fof-forum-stats-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/hu/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.title%22)

> Forum Stats

```diff
+Fórumstatisztikák
```

<!-- {% endraw %} -->
