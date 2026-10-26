# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **24** are
translated only in `de`. Altogether they cover **4** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `clarkwinkelmann-selective-mediaembed` | [1](#clarkwinkelmann-selective-mediaembed) | 0 |
| `fof-sitemap` | [1](#fof-sitemap) | 0 |
| `prm-forum-activity` | 0 | [21](#prm-forum-activity-missing) |
| `prm-moderation` | 0 | [3](#prm-moderation-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `clarkwinkelmann-selective-mediaembed`

#### [`clarkwinkelmann-selective-mediaembed.admin.selectAll`](https://weblate.rob006.net/translate/flarum2/clarkwinkelmann-selective-mediaembed/de/?q=context%3A%3D%22clarkwinkelmann-selective-mediaembed.admin.selectAll%22)

> Select all

```diff
-Alles auswählen
+Alle auswählen
```

<del>Alles</del><ins>Alle</ins> auswählen


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.exclude_tags`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/de/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags%22)

> Exclude all tag pages from sitemap

```diff
-Alle Themenseiten von Sitemap ausschließen
+Alle Tag-Seiten von der Sitemap ausschließen
```

Alle <del>Themenseiten</del><ins>Tag-Seiten</ins> von<ins> der</ins> Sitemap ausschließen


## Missing translations

These strings are translated only in `de`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `de`.


### `prm-forum-activity` (missing)

#### [`prm-forum-activity.admin.permissions.feature_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.admin.permissions.feature_label%22)

> Feature discussions

```diff
+Diskussionen hervorheben
```

#### [`prm-forum-activity.admin.settings.default_tab_featured`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_featured%22)

> Featured

```diff
+Hervorgehoben
```

#### [`prm-forum-activity.admin.settings.default_tab_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_label%22)

> Default activity tab

```diff
+Standard-Aktivitäts-Tab
```

#### [`prm-forum-activity.admin.settings.default_tab_latest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_latest%22)

> New posts

```diff
+Neue Beiträge
```

#### [`prm-forum-activity.admin.settings.default_tab_newest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.admin.settings.default_tab_newest%22)

> New topics

```diff
+Neue Diskussionen
```

#### [`prm-forum-activity.forum.badge.featured_tooltip`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.badge.featured_tooltip%22)

> Featured discussion

```diff
+Hervorgehobene Diskussion
```

#### [`prm-forum-activity.forum.columns.forum`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.columns.forum%22)

> Forum

```diff
+Forum
```

#### [`prm-forum-activity.forum.columns.last_poster`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.columns.last_poster%22)

> Last poster

```diff
+Letzte Antwort
```

#### [`prm-forum-activity.forum.columns.posts`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.columns.posts%22)

> Replies

```diff
+Antworten
```

#### [`prm-forum-activity.forum.columns.topic`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.columns.topic%22)

> Topic

```diff
+Diskussion
```

#### [`prm-forum-activity.forum.discussion_controls.feature`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.discussion_controls.feature%22)

> Feature

```diff
+Hervorheben
```

#### [`prm-forum-activity.forum.discussion_controls.unfeature`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.discussion_controls.unfeature%22)

> Unfeature

```diff
+Hervorhebung zurücknehmen
```

#### [`prm-forum-activity.forum.empty`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.empty%22)

> No discussions to show.

```diff
+Keine Diskussionen vorhanden.
```

#### [`prm-forum-activity.forum.load_more`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.load_more%22)

> Load more

```diff
+Mehr laden
```

#### [`prm-forum-activity.forum.normal_section`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.normal_section%22)

> Normal topics

```diff
+Normale Diskussionen
```

#### [`prm-forum-activity.forum.sticky_label`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.sticky_label%22)

> Sticky topic

```diff
+Angeheftete Diskussion
```

#### [`prm-forum-activity.forum.sticky_section`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.sticky_section%22)

> Sticky topics

```diff
+Angeheftete Diskussionen
```

#### [`prm-forum-activity.forum.tabs.featured`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.tabs.featured%22)

> Featured

```diff
+Hervorgehoben
```

#### [`prm-forum-activity.forum.tabs.latest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.tabs.latest%22)

> New posts

```diff
+Neue Beiträge
```

#### [`prm-forum-activity.forum.tabs.newest`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.tabs.newest%22)

> New topics

```diff
+Neue Diskussionen
```

#### [`prm-forum-activity.forum.title`](https://weblate.rob006.net/translate/flarum2/prm-forum-activity/de/?q=context%3A%3D%22prm-forum-activity.forum.title%22)

> Forum activity

```diff
+Aktivitäten im Forum
```


### `prm-moderation` (missing)

#### [`prm-moderation.admin.permissions.access_label`](https://weblate.rob006.net/translate/flarum2/prm-moderation/de/?q=context%3A%3D%22prm-moderation.admin.permissions.access_label%22)

> Access the moderation panel

```diff
+Auf den Moderationsbereich zugreifen
```

#### [`prm-moderation.admin.permissions.report_label`](https://weblate.rob006.net/translate/flarum2/prm-moderation/de/?q=context%3A%3D%22prm-moderation.admin.permissions.report_label%22)

> Report users, posts, and discussions

```diff
+Benutzer, Beiträge und Diskussionen melden
```

#### [`prm-moderation.admin.permissions.ticket_label`](https://weblate.rob006.net/translate/flarum2/prm-moderation/de/?q=context%3A%3D%22prm-moderation.admin.permissions.ticket_label%22)

> Open support tickets

```diff
+Support-Tickets erstellen
```

<!-- {% endraw %} -->
