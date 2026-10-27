# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **50** are
translated only in `de`. Altogether they cover **6** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | [1](#acpl-lscache) | 0 |
| `clarkwinkelmann-selective-mediaembed` | [1](#clarkwinkelmann-selective-mediaembed) | 0 |
| `fof-badges` | 0 | [26](#fof-badges-missing) |
| `fof-sitemap` | [1](#fof-sitemap) | 0 |
| `prm-forum-activity` | 0 | [21](#prm-forum-activity-missing) |
| `prm-moderation` | 0 | [3](#prm-moderation-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-lscache`

#### [`acpl-lscache.admin.purge_on_discussion_update_label`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/de/?q=context%3A%3D%22acpl-lscache.admin.purge_on_discussion_update_label%22)

> Purge URLs or cache Tags on Discussion Update

```diff
-URLs/Tags löschen, wenn Diskussion/en oder ein Beitrag/Beiträge aktualisiert werden
+URLs/Tags löschen, wenn Diskussionen oder Beiträge aktualisiert werden
```

URLs/Tags löschen, wenn <del>Diskussion/en</del><ins>Diskussionen</ins> oder<del> ein</del> <del>Beitrag/Beiträge</del><ins>Beiträge</ins> aktualisiert werden


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


### `fof-badges` (missing)

#### [`fof-badges.defaults.badges.active-member.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.description%22)

> Post 50 replies

```diff
+Schreibe 50 Antworten
```

#### [`fof-badges.defaults.badges.active-member.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.name%22)

> Active Member

```diff
+Aktives Mitglied
```

#### [`fof-badges.defaults.badges.anniversary.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.description%22)

> Be a member for one year

```diff
+Ein Jahr Mitgliedschaft
```

#### [`fof-badges.defaults.badges.anniversary.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.name%22)

> Anniversary

```diff
+Jahrestag
```

#### [`fof-badges.defaults.badges.conversation-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.description%22)

> Start your first discussion

```diff
+Starte deine erste Diskussion
```

#### [`fof-badges.defaults.badges.conversation-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.name%22)

> Conversation Starter

```diff
+Gesprächsstarter
```

#### [`fof-badges.defaults.badges.editor.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.editor.description%22)

> Edit 10 posts to improve them

```diff
+Bearbeite 10 Beiträge, um sie zu verbessern
```

#### [`fof-badges.defaults.badges.editor.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.editor.name%22)

> Editor

```diff
+Redakteur
```

#### [`fof-badges.defaults.badges.first-post.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.description%22)

> Write your first reply

```diff
+Schreibe deine erste Antwort
```

#### [`fof-badges.defaults.badges.first-post.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.name%22)

> First Post

```diff
+Erster Beitrag
```

#### [`fof-badges.defaults.badges.first-week.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.description%22)

> Be a member for 7 days

```diff
+7 Tage Mitgliedschaft
```

#### [`fof-badges.defaults.badges.first-week.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.name%22)

> First Week

```diff
+Erste Woche
```

#### [`fof-badges.defaults.badges.profile-picture.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.description%22)

> Upload a profile picture

```diff
+Lade ein Profilbild hoch
```

#### [`fof-badges.defaults.badges.profile-picture.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.name%22)

> Profile Picture

```diff
+Profilbild
```

#### [`fof-badges.defaults.badges.prolific.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.description%22)

> Post 200 replies

```diff
+Schreibe 200 Antworten
```

#### [`fof-badges.defaults.badges.prolific.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.name%22)

> Prolific

```diff
+Produktiv
```

#### [`fof-badges.defaults.badges.regular.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.regular.description%22)

> Be a member for 30 days

```diff
+30 Tage Mitgliedschaft
```

#### [`fof-badges.defaults.badges.regular.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.regular.name%22)

> Regular

```diff
+Stammgast
```

#### [`fof-badges.defaults.badges.topic-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.description%22)

> Start 10 discussions

```diff
+Starte 10 Diskussionen
```

#### [`fof-badges.defaults.badges.topic-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.name%22)

> Topic Starter

```diff
+Themenstarter
```

#### [`fof-badges.defaults.categories.getting-started.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.description%22)

> Badges for new members taking their first steps

```diff
+Abzeichen für neue Mitglieder, die gerade alles kennen lernen
```

#### [`fof-badges.defaults.categories.getting-started.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.name%22)

> Getting Started

```diff
+Erste Schritte
```

#### [`fof-badges.defaults.categories.milestones.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.description%22)

> Badges for reaching important milestones

```diff
+Abzeichen für das Erreichen wichtiger Meilensteine
```

#### [`fof-badges.defaults.categories.milestones.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.name%22)

> Milestones

```diff
+Meilensteine
```

#### [`fof-badges.defaults.categories.posting.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.categories.posting.description%22)

> Badges for posting milestones and contributions

```diff
+Abzeichen für Meilensteine bei Beiträgen
```

#### [`fof-badges.defaults.categories.posting.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/de/?q=context%3A%3D%22fof-badges.defaults.categories.posting.name%22)

> Posting

```diff
+Beiträge
```


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
