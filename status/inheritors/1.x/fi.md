# Finnish inherited translations differences

Translations for Finnish (`fi`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **5** are translated differently and **61** are
translated only in `fi`. Altogether they cover **7** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [4](#core) | 0 |
| `fof-move-posts` | 0 | [29](#fof-move-posts-missing) |
| `fof-online-users-widget` | 0 | [6](#fof-online-users-widget-missing) |
| `fof-photoswipe` | 0 | [5](#fof-photoswipe-missing) |
| `fof-rich-text` | 0 | [19](#fof-rich-text-missing) |
| `fof-usercard-stats` | 0 | [2](#fof-usercard-stats-missing) |
| `justoverclock-welcomebox` | [1](#justoverclock-welcomebox) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `fi` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/fi/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
-Lähetä ylläpitäjille sähköposti, kun hylättyjä lisäosia löytyi viikottaisen tarkastuksen aikana
+Lähetä sähköposti ylläpitäjille, kun viikoittaisen tarkistuksen aikana havaitaan uusi hylätty laajennus
```

Lähetä <del>ylläpitäjille</del><ins>sähköposti</ins> <del>sähköposti,</del><ins>ylläpitäjille,</ins> kun <del>hylättyjä</del><ins>viikoittaisen</ins> <del>lisäosia</del><ins>tarkistuksen</ins> <del>löytyi</del><ins>aikana</ins> <del>viikottaisen</del><ins>havaitaan</ins> <del>tarkastuksen</del><ins>uusi</ins> <del>aikana</del><ins>hylätty laajennus</ins>

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/fi/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
-Hylättyjen lisäosien listan haku epäonnistui. Yritä myöhemmin uudelleen.
+Hylättyjen laajennusten listan hakeminen epäonnistui. Yritä myöhemmin uudelleen.
```

Hylättyjen <del>lisäosien</del><ins>laajennusten</ins> listan <del>haku</del><ins>hakeminen</ins> epäonnistui. Yritä myöhemmin uudelleen.

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/fi/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
-Hylättyjen lisäosien lista päivitetty {count} lisäosaa löytyi.
+Hylättyjen laajennusten lista päivitetty. {count} vastaava asennettu laajennus löydetty.
```

Hylättyjen <del>lisäosien</del><ins>laajennusten</ins> lista <del>päivitetty</del><ins>päivitetty.</ins> {count} <del>lisäosaa</del><ins>vastaava</ins> <del>löytyi.</del><ins>asennettu laajennus löydetty.</ins>

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/fi/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
-Flarum ylläpitää <a>yhteisöllistä listaa hylätyistä laajennuksista</a>. Kun asennettu laajennus esiintyy listalla, se merkitään hallintapaneelissa hylätyksi.
+Flarum ylläpitää <a>yhteisöllistä listaa hylätyistä laajennuksista</a>. Kun asennettu laajennus esiintyy listalla, se merkitään hallintapaneelissa.
```

Flarum ylläpitää &lt;a&gt;yhteisöllistä listaa hylätyistä laajennuksista&lt;/a&gt;. Kun asennettu laajennus esiintyy listalla, se merkitään <del>hallintapaneelissa hylätyksi.</del><ins>hallintapaneelissa.</ins>


### `justoverclock-welcomebox`

#### [`flarum-ext-welcomebox.forum.wback`](https://weblate.rob006.net/translate/flarum2/justoverclock-welcomebox/fi/?q=context%3A%3D%22flarum-ext-welcomebox.forum.wback%22)

> Welcome back,

```diff
-Tervetuloa takaisin!
+Tervetuloa takaisin,
```

Tervetuloa <del>takaisin!</del><ins>takaisin,</ins>


## Missing translations

These strings are translated only in `fi`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `fi`.


### `fof-move-posts` (missing)

#### [`fof-move-posts.admin.permissions.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.admin.permissions.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.admin.settings.group_sequential_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.admin.settings.group_sequential_posts%22)

> Group sequential post moved event posts into one.

```diff
+Ryhmittele peräkkäiset siirretyn viestin tapahtumaviestit yhdeksi.
```

#### [`fof-move-posts.admin.settings.moved_first_post_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content%22)

> Moved Discussion (First Post) Content

```diff
+Siirretyn keskustelun (ensimmäisen viestin) sisältö
```

#### [`fof-move-posts.admin.settings.moved_first_post_content_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content_help%22)

> When you have a discussion with only one single post, moving that post will result in the initial discussion's first post to be edited to point to the new discussion. You can edit the contents of that post here.
>

```diff
+Kun keskustelussa on vain yksi viesti, sen siirtäminen muokkaa alkuperäisen keskustelun ensimmäistä viestiä osoittamaan uuteen keskusteluun. Voit muokata kyseisen viestin sisältöä täällä.
+
```

#### [`fof-move-posts.forum.alerts.posts_moved_to`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.alerts.posts_moved_to%22)

> {count, plural, one {Post moved to {target\_discussion}.} other {Moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {Viesti siirretty kohteeseen {target_discussion}.} other {Siirretty {count} viestiä kohteeseen {target_discussion}.}}
```

#### [`fof-move-posts.forum.badge.first_moved_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.badge.first_moved_tooltip%22)

> Moved

```diff
+Siirretty
```

#### [`fof-move-posts.forum.discussion.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.discussion.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.error.move_old_post_to_newer_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.error.move_old_post_to_newer_discussion%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.error.move_posts_to_same_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.error.move_posts_to_same_discussion%22)

> You cannot move posts to the same discussion.

```diff
+Et voi siirtää viestejä samaan keskusteluun.
```

#### [`fof-move-posts.forum.modal.check`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.check%22)

> Check Operation Type

```diff
+Tarkista operaation tyyppi
```

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
+Olet siirtämässä kaikki viestit tästä keskustelusta uuteen. Useimmissa tapauksissa on järkevämpää muokata olemassa olevaa keskustelua sen sijaan, esimerkiksi muuttamalla sen otsikkoa, avainsanoja tai muita ominaisuuksia. Haluatko jatkaa?
```

#### [`fof-move-posts.forum.modal.destination`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.destination%22)

> Destination Discussion

```diff
+Kohdekeskustelu
```

#### [`fof-move-posts.forum.modal.discussion_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_help%22)

> The tags of the source discussion will be used, and can be changed after creation.

```diff
+Lähdekeskustelun avainsanat otetaan käyttöön, ja niitä voidaan muuttaa luomisen jälkeen.
```

#### [`fof-move-posts.forum.modal.discussion_name`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_name%22)

> =&gt; core.forum.composer\_discussion.title\_placeholder

```diff
+=> core.forum.composer_discussion.title_placeholder
```

#### [`fof-move-posts.forum.modal.new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.new_discussion%22)

> New Discussion

```diff
+Uusi keskustelu
```

#### [`fof-move-posts.forum.modal.selected_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.selected_posts%22)

> {count, plural, one {One Post Selected} other {{count} Posts Selected}}

```diff
+{count, plural, one {Yksi viesti valittu} other {{count} viestiä valittu}}
```

#### [`fof-move-posts.forum.modal.status.complex_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.status.complex_move%22)

> Will be a complex move, posts will be pushed between posts, leading to old URL references of the target discussion's posts to change as well.

```diff
+Kyseessä on monimutkainen siirto — viestit työnnetään muiden viestien väliin, minkä vuoksi myös kohdekeskustelun viestien vanhat URL-viittaukset muuttuvat.
```

#### [`fof-move-posts.forum.modal.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.status.old_to_new_move%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.modal.status.simple_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.status.simple_move%22)

> Will be a simple move, posts will all be added at the end of the discussion.

```diff
+Kyseessä on yksinkertainen siirto — viestit lisätään kaikki keskustelun loppuun.
```

#### [`fof-move-posts.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.submit%22)

> Proceed

```diff
+Jatka
```

#### [`fof-move-posts.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.modal.title%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.notifications.post_moved_text`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.notifications.post_moved_text%22)

> One or more of your posts were moved to {targetDiscussionTitle}.

```diff
+Yksi tai useampi viesteistäsi siirrettiin kohteeseen {targetDiscussionTitle}.
```

#### [`fof-move-posts.forum.post.move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.post.move%22)

> Select to move

```diff
+Valitse siirtääksesi
```

#### [`fof-move-posts.forum.post.moving`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.post.moving%22)

> Moving Post

```diff
+Siirretään viestiä
```

#### [`fof-move-posts.forum.post.unmove`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.post.unmove%22)

> Unselect to move

```diff
+Poista valinta siirtääksesi
```

#### [`fof-move-posts.forum.post_stream.post_moved`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.forum.post_stream.post_moved%22)

> {count, plural, one {{username} moved a post to {target\_discussion}.} other {{username} moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {{username} siirsi viestin kohteeseen {target_discussion}.} other {{username} siirsi {count} viestiä kohteeseen {target_discussion}.}}
```

#### [`fof-move-posts.lib.discussion.first_post.default_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.lib.discussion.first_post.default_content%22)

> \*This post has been moved to \*\*\[%DISCUSSION\_NAME%\](%POST\_LINK%)\*\*.\*
>

```diff
+*Tämä viesti on siirretty kohteeseen **[%DISCUSSION_NAME%](%POST_LINK%)**.*
+
```

#### [`fof-move-posts.ref.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.ref.move_posts%22)

> Move Posts

```diff
+Siirrä viestit
```

#### [`fof-move-posts.ref.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fi/?q=context%3A%3D%22fof-move-posts.ref.status.old_to_new_move%22)

> Cannot move an old post to a newer discussion.

```diff
+Ei voida siirtää vanhempaa viestiä uudempaan keskusteluun.
```


### `fof-online-users-widget` (missing)

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fi/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
+Paikalla olevat käyttäjät -pienoissovellus
```

#### [`fof-online-users-widget.admin.settings.cache_ttl`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fi/?q=context%3A%3D%22fof-online-users-widget.admin.settings.cache_ttl%22)

> Time to cache the users list (in seconds)

```diff
+Käyttäjälistan välimuistiaika (sekunteina)
```

#### [`fof-online-users-widget.admin.settings.last_seen_interval`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fi/?q=context%3A%3D%22fof-online-users-widget.admin.settings.last_seen_interval%22)

> Last seen interval to consider a user online (in minutes)

```diff
+Viimeinen nähty -aikaväli, jonka perusteella käyttäjä katsotaan paikalla olevaksi (minuuteissa)
```

#### [`fof-online-users-widget.admin.settings.max_users`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fi/?q=context%3A%3D%22fof-online-users-widget.admin.settings.max_users%22)

> Max shown users

```diff
+Enimmäismäärä näytettäviä käyttäjiä
```

#### [`fof-online-users-widget.forum.widget.empty`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fi/?q=context%3A%3D%22fof-online-users-widget.forum.widget.empty%22)

> No Users Currently Online.

```diff
+Ei käyttäjiä paikalla.
```

#### [`fof-online-users-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fi/?q=context%3A%3D%22fof-online-users-widget.forum.widget.title%22)

> Online Users

```diff
+Paikalla olevat käyttäjät
```


### `fof-photoswipe` (missing)

#### [`fof-photoswipe.forum.arrow_next_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fi/?q=context%3A%3D%22fof-photoswipe.forum.arrow_next_title%22)

> Next

```diff
+Seuraava
```

#### [`fof-photoswipe.forum.arrow_prev_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fi/?q=context%3A%3D%22fof-photoswipe.forum.arrow_prev_title%22)

> Previous

```diff
+Edellinen
```

#### [`fof-photoswipe.forum.close_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fi/?q=context%3A%3D%22fof-photoswipe.forum.close_title%22)

> Close

```diff
+Sulje
```

#### [`fof-photoswipe.forum.error_msg`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fi/?q=context%3A%3D%22fof-photoswipe.forum.error_msg%22)

> The image cannot be loaded

```diff
+Kuvaa ei voitu ladata
```

#### [`fof-photoswipe.forum.zoom_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fi/?q=context%3A%3D%22fof-photoswipe.forum.zoom_title%22)

> Zoom

```diff
+Lähennä
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.admin.settings.toggle_on_editor`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.admin.settings.toggle_on_editor%22)

> Show rich text mode toggle on editor?

```diff
+Näytetäänkö muotoilutekstin tilanvaihto editorissa?
```

#### [`fof-rich-text.forum.settings.composer_heading`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.forum.settings.composer_heading%22)

> Composer

```diff
+Viestikenttä
```

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
+Älä erottele kappaleita uudella rivillä.
```

#### [`fof-rich-text.forum.settings.use_rich_text_editor_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.forum.settings.use_rich_text_editor_label%22)

> Use rich text editor?

```diff
+Käytä rikastettua editoria?
```

#### [`fof-rich-text.lib.composer.additional_items_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.additional_items_tooltip%22)

> Additional Controls

```diff
+Lisämääritykset
```

#### [`fof-rich-text.lib.composer.code_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.code_block_tooltip%22)

> Insert a code block

```diff
+Lisää koodilohko
```

#### [`fof-rich-text.lib.composer.horizontal_rule_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.horizontal_rule_tooltip%22)

> Insert horizontal rule

```diff
+Lisää vaakaviiva
```

#### [`fof-rich-text.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.image_tooltip%22)

> Add an image

```diff
+Lisää kuva
```

#### [`fof-rich-text.lib.composer.insert_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_button%22)

> Insert

```diff
+Lisää
```

#### [`fof-rich-text.lib.composer.insert_image.src_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.src_placeholder%22)

> Link

```diff
+Linkki
```

#### [`fof-rich-text.lib.composer.insert_image.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.title_placeholder%22)

> Title

```diff
+Otsikko
```

#### [`fof-rich-text.lib.composer.insert_link.href_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.href_placeholder%22)

> URL

```diff
+Osoite
```

#### [`fof-rich-text.lib.composer.insert_link.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.remove_button%22)

> Remove

```diff
+Poista
```

#### [`fof-rich-text.lib.composer.insert_link.text_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.text_placeholder%22)

> Text

```diff
+Teksti
```

#### [`fof-rich-text.lib.composer.insert_link.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.title_placeholder%22)

> Title (shows on hover)

```diff
+Otsikko (näkyy hoverissa)
```

#### [`fof-rich-text.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.link_tooltip%22)

> Add a link

```diff
+Lisää linkki
```

#### [`fof-rich-text.lib.composer.spoiler_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.spoiler_block_tooltip%22)

> Block Spoiler/Dropdown

```diff
+Lohkon spoileri/pudotusvalikko
```

#### [`fof-rich-text.lib.composer.text_type_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.text_type_tooltip%22)

> Select Text Type

```diff
+Valitse tekstityyppi
```

#### [`fof-rich-text.lib.composer.toggle_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fi/?q=context%3A%3D%22fof-rich-text.lib.composer.toggle_button%22)

> Toggle Rich Text Mode

```diff
+Vaihda muotoilutekstitila
```


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/fi/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+{count, plural, one {{count} keskustelu} other {{count} keskustelua}}
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/fi/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+{count, plural, one {{count} viesti} other {{count} viestiä}}
```

<!-- {% endraw %} -->
