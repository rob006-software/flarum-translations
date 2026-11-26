# Czech inherited translations differences

Translations for Czech (`cs`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **37** are translated differently and **128** are
translated only in `cs`. Altogether they cover **15** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [18](#core) | [8](#core-missing) |
| `flarum-tags` | [3](#flarum-tags) | 0 |
| `fof-byobu` | [2](#fof-byobu) | 0 |
| `fof-follow-tags` | 0 | [8](#fof-follow-tags-missing) |
| `fof-impersonate` | 0 | [5](#fof-impersonate-missing) |
| `fof-linguist` | [2](#fof-linguist) | 0 |
| `fof-masquerade` | 0 | [2](#fof-masquerade-missing) |
| `fof-merge-discussions` | 0 | [1](#fof-merge-discussions-missing) |
| `fof-pages` | [2](#fof-pages) | 0 |
| `fof-polls` | [3](#fof-polls) | [78](#fof-polls-missing) |
| `fof-recaptcha` | 0 | [1](#fof-recaptcha-missing) |
| `fof-split` | 0 | [1](#fof-split-missing) |
| `fof-terms` | [2](#fof-terms) | [3](#fof-terms-missing) |
| `fof-upload` | [5](#fof-upload) | [20](#fof-upload-missing) |
| `fof-user-directory` | 0 | [1](#fof-user-directory-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `cs` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.edit_group.delete_button`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.edit_group.delete_button%22)

> Delete Group

```diff
-Smazat skupinu
+Odstranit skupinu
```

<del>Smazat</del><ins>Odstranit</ins> skupinu

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-Opravdu chcete smazat tuto skupinu? Její členové odstraněni nebudou.
+Opravdu chcete odstranit tuto skupinu? Její členové odstraněni nebudou.
```

Opravdu chcete <del>smazat</del><ins>odstranit</ins> tuto skupinu? Její členové odstraněni nebudou.

#### [`core.admin.permissions.allow_hide_own_posts_label`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.permissions.allow_hide_own_posts_label%22)

> Allow deleting own posts

```diff
-Povolit mazání vlastních příspěvků
+Povolit odstraňování vlastních příspěvků
```

Povolit <del>mazání</del><ins>odstraňování</ins> vlastních příspěvků

#### [`core.admin.permissions.delete_discussions_forever_label`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.permissions.delete_discussions_forever_label%22)

> Delete discussions forever

```diff
-Smazat diskuze navždy
+Odstranit diskuze navždy
```

<del>Smazat</del><ins>Odstranit</ins> diskuze navždy

#### [`core.admin.permissions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.permissions.delete_discussions_label%22)

> Delete discussions

```diff
-Smazat diskuze
+Odstranit diskuze
```

<del>Smazat</del><ins>Odstranit</ins> diskuze

#### [`core.admin.permissions.delete_posts_forever_label`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.permissions.delete_posts_forever_label%22)

> Delete posts forever

```diff
-Smazat příspěvky navždy
+Odstranit příspěvky navždy
```

<del>Smazat</del><ins>Odstranit</ins> příspěvky navždy

#### [`core.admin.permissions.delete_posts_label`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.admin.permissions.delete_posts_label%22)

> Delete posts

```diff
-Smazat příspěvky
+Odstranit příspěvky
```

<del>Smazat</del><ins>Odstranit</ins> příspěvky

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-Opravdu chcete tuto diskuzi smazat?
+Opravdu chcete tuto diskuzi odstranit?
```

Opravdu chcete tuto diskuzi <del>smazat?</del><ins>odstranit?</ins>

#### [`core.forum.notifications.delete_all_tooltip`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.notifications.delete_all_tooltip%22)

> Delete all notifications

```diff
-Smazat všechna oznámení
+Odstranit všechna oznámení
```

<del>Smazat</del><ins>Odstranit</ins> všechna oznámení

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Opravdu chcete navždy smazat tento příspěvek? Tuto akci nelze vzít zpět.
+Opravdu chcete tento příspěvek navždy odstranit? Tuto akci nelze vzít zpět.
```

Opravdu chcete <del>navždy</del><ins>tento</ins> <del>smazat</del><ins>příspěvek</ins> <del>tento</del><ins>navždy</ins> <del>příspěvek?</del><ins>odstranit?</ins> Tuto akci nelze vzít zpět.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-Opravdu chcete smazat tento příspěvek?
+Opravdu chcete odstranit tento příspěvek?
```

Opravdu chcete <del>smazat</del><ins>odstranit</ins> tento příspěvek?

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-Opravdu chcete uživatele smazat? Příspěvky tohoto uživatele NEBUDOU smazány.
+Opravdu chcete uživatele odstranit? Příspěvky tohoto uživatele odstraněny NEBUDOU.
```

Opravdu chcete uživatele <del>smazat?</del><ins>odstranit?</ins> Příspěvky tohoto uživatele <del>NEBUDOU</del><ins>odstraněny</ins> <del>smazány.</del><ins>NEBUDOU.</ins>

#### [`core.forum.user_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.user_controls.delete_error_message%22)

> Deletion of user &lt;i&gt;{username} ({email})&lt;/i&gt; failed

```diff
-Smazání uživatele <i>{username} ({email})</i> se nezdařilo
+Odstranění uživatele <i>{username} ({email})</i> se nezdařilo
```

<del>Smazání</del><ins>Odstranění</ins> uživatele &lt;i&gt;{username} ({email})&lt;/i&gt; se nezdařilo

#### [`core.forum.user_controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.forum.user_controls.delete_success_message%22)

> User &lt;i&gt;{username} ({email})&lt;/i&gt; was deleted

```diff
-Uživatel <i>{username} ({email})</i> byl smazán
+Uživatel <i>{username} ({email})</i> byl odstraněn
```

Uživatel &lt;i&gt;{username} ({email})&lt;/i&gt; byl <del>smazán</del><ins>odstraněn</ins>

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-{extension} se nepodařilo inicializovat, další informace naleznete v konzoli prohlížeče.
+Rozšíření {extension} se nepodařilo inicializovat, další informace naleznete v konzoli prohlížeče.
```

<ins>Rozšíření </ins>{extension} se nepodařilo inicializovat, další informace naleznete v konzoli prohlížeče.

#### [`core.lib.username.deleted_text`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.username.deleted_text%22)

> \[deleted\]

```diff
-[smazaný]
+[odstraněný]
```

#### [`core.ref.delete`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.ref.delete%22)

> Delete

```diff
-Smazat
+Odstranit
```

#### [`core.ref.delete_forever`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.ref.delete_forever%22)

> Delete Forever

```diff
-Smazat navždy
+Odstranit navždy
```

<del>Smazat</del><ins>Odstranit</ins> navždy


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/cs/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_button%22)

> Delete Tag

```diff
-Smazat štítek
+Odstranit štítek
```

<del>Smazat</del><ins>Odstranit</ins> štítek

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/cs/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-Opravdu chcete smazat tento štítek? Diskuze s tímto štítkem smazány NEBUDOU.
+Opravdu chcete odstranit tento štítek? Diskuze s tímto štítkem odstraněny NEBUDOU.
```

Opravdu chcete <del>smazat</del><ins>odstranit</ins> tento štítek? Diskuze s tímto štítkem <del>smazány</del><ins>odstraněny</ins> NEBUDOU.

#### [`flarum-tags.lib.deleted_tag_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/cs/?q=context%3A%3D%22flarum-tags.lib.deleted_tag_text%22)

> Deleted

```diff
-Smazaný štítek
+Odstraněný štítek
```

<del>Smazaný</del><ins>Odstraněný</ins> štítek


### `fof-byobu`

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left`](https://weblate.rob006.net/translate/flarum2/fof-byobu/cs/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left%22)

> Delete PDs when the last user leaves

```diff
-Smazat soukromou diskuzi poté, co ji opustil poslední účastník
+Odstranit soukromou diskuzi poté, co ji opustil poslední účastník
```

<del>Smazat</del><ins>Odstranit</ins> soukromou diskuzi poté, co ji opustil poslední účastník

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/cs/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left_help%22)

> If enabled, PDs will be permanently deleted from the database when the last user leaves. Otherwise, the PD will be soft-deleted/hidden.

```diff
-Pokud je tato možnost povolena, budou soukromé diskuze nenávratně smazány, jakmile poslední účastník diskuzi opustí. V opačném případě budou soukromé diskuze skryty (soft deleted).
+Pokud je tato možnost povolena, budou soukromé diskuze nenávratně odstraněny, jakmile poslední účastník diskuzi opustí. V opačném případě budou soukromé diskuze skryty (soft deleted).
```

Pokud je tato možnost povolena, budou soukromé diskuze nenávratně <del>smazány,</del><ins>odstraněny,</ins> jakmile poslední účastník diskuzi opustí. V opačném případě budou soukromé diskuze skryty (soft deleted).


### `fof-linguist`

#### [`fof-linguist.admin.buttons.delete-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/cs/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-all%22)

> Delete all translations

```diff
-Smazat všechny překlady
+Odstranit všechny překlady
```

<del>Smazat</del><ins>Odstranit</ins> všechny překlady

#### [`fof-linguist.admin.buttons.delete-redundant`](https://weblate.rob006.net/translate/flarum2/fof-linguist/cs/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-redundant%22)

> Delete redundant translations

```diff
-Smazat nadbytečné překlady
+Odstranit nadbytečné překlady
```

<del>Smazat</del><ins>Odstranit</ins> nadbytečné překlady


### `fof-pages`

#### [`fof-pages.admin.edit_page.delete_page_button`](https://weblate.rob006.net/translate/flarum2/fof-pages/cs/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_button%22)

> Delete page

```diff
-Smazat stránku
+Odstranit stránku
```

<del>Smazat</del><ins>Odstranit</ins> stránku

#### [`fof-pages.admin.edit_page.delete_page_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-pages/cs/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_confirmation%22)

> Are you sure you want to delete this page?

```diff
-Opravdu chcete tuto stránku smazat?
+Opravdu chcete tuto stránku odstranit?
```

Opravdu chcete tuto stránku <del>smazat?</del><ins>odstranit?</ins>


### `fof-polls`

#### [`fof-polls.forum.moderation.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.moderation.delete%22)

> Remove Poll

```diff
-Smazat anketu
+Odstranit anketu
```

<del>Smazat</del><ins>Odstranit</ins> anketu

#### [`fof-polls.forum.moderation.delete_confirm`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.moderation.delete_confirm%22)

> Are you sure you want to delete this poll?

```diff
-Opravdu chcete tuto anketu smazat?
+Opravdu chcete tuto anketu odstranit?
```

Opravdu chcete tuto anketu <del>smazat?</del><ins>odstranit?</ins>

#### [`fof-polls.forum.poll_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.delete_confirmation%22)

> Are you sure you want to delete this poll?

```diff
-Opravdu chcete tuto anketu smazat?
+Opravdu chcete tuto anketu odstranit?
```

Opravdu chcete tuto anketu <del>smazat?</del><ins>odstranit?</ins>


### `fof-terms`

#### [`fof-terms.admin.buttons.delete-policy`](https://weblate.rob006.net/translate/flarum2/fof-terms/cs/?q=context%3A%3D%22fof-terms.admin.buttons.delete-policy%22)

> Delete Policy

```diff
-Smazat zásady
+Odstranit zásady
```

<del>Smazat</del><ins>Odstranit</ins> zásady

#### [`fof-terms.admin.policies.export-url-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/cs/?q=context%3A%3D%22fof-terms.admin.policies.export-url-help%22)

> Any user with permission "Export all policies data" can access those URLs to download the list of users who accepted this policy. You can find more details about the available options on the &lt;a&gt;extension wiki&lt;/a&gt;.
>

```diff
-Každý uživatel s oprávněním "Exportovat všechna data zásad" může přistupovat k těmto adresám URL a stáhnout si seznam uživatelů, kteří tuto zásadu přijali. Další podrobnosti o dostupných možnostech najdete na <a>extension wiki</a>.
+Každý uživatel s oprávněním „Exportovat všechna data zásad“ může přistupovat k těmto adresám URL a stáhnout si seznam uživatelů, kteří tuto zásadu přijali. Další podrobnosti o dostupných možnostech najdete na <a>wiki rozšíření</a>.

```

Každý uživatel s oprávněním <del>"Exportovat</del><ins>„Exportovat</ins> všechna data <del>zásad"</del><ins>zásad“</ins> může přistupovat k těmto adresám URL a stáhnout si seznam uživatelů, kteří tuto zásadu přijali. Další podrobnosti o dostupných možnostech najdete na <del>&lt;a&gt;extension</del><ins>&lt;a&gt;wiki</ins> <del>wiki&lt;/a&gt;.</del><ins>rozšíření&lt;/a&gt;.</ins><br />


### `fof-upload`

#### [`fof-upload.forum.text_preview.error`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.forum.text_preview.error%22)

> Error previewing file. It may have been deleted, or the provided file ID is invalid.
>

```diff
-Chyba při náhledu souboru. Možná byl smazán nebo je zadané ID souboru neplatné.
+Chyba při náhledu souboru. Možná byl odstraněn nebo je zadané ID souboru neplatné.

```

Chyba při náhledu souboru. Možná byl <del>smazán</del><ins>odstraněn</ins> nebo je zadané ID souboru neplatné.<br />

#### [`fof-upload.forum.text_preview.no_snippet`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.forum.text_preview.no_snippet%22)

> &lt;no preview snippet available&gt;

```diff
-<není k dispozici žádný fragment kódu (snippet) náhledu>
+(náhled není k dispozici)
```

#### [`fof-upload.forum.text_preview.no_snippet_preview`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.forum.text_preview.no_snippet_preview%22)

> &lt;preview will appear here after posting&gt;

```diff
-<náhled se zde zobrazí po zveřejnění>
+(náhled se zde zobrazí po zveřejnění)
```

<del>&lt;náhled</del><ins>(náhled</ins> se zde zobrazí po <del>zveřejnění&gt;</del><ins>zveřejnění)</ins>

#### [`fof-upload.lib.file_list.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.delete_confirmation%22)

> Are you sure you want to delete "{fileName}"?

```diff
-Opravdu chcete smazat „{fileName}“?
+Opravdu chcete odstranit „{fileName}“?
```

Opravdu chcete <del>smazat</del><ins>odstranit</ins> „{fileName}“?

#### [`fof-upload.lib.file_list.delete_file_a11y_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.delete_file_a11y_label%22)

> Delete file "{fileName}"

```diff
-Smazat soubor "{fileName}"
+Odstranit soubor „{fileName}“
```

<del>Smazat</del><ins>Odstranit</ins> soubor <del>"{fileName}"</del><ins>„{fileName}“</ins>


## Missing translations

These strings are translated only in `cs`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `cs`.


### `core` (missing)

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Vyžadována akce: zjištěna opuštěná rozšíření
```

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+Připojení bylo obnoveno.
```

#### [`core.lib.datetime_formats.humanTimeLong`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.datetime_formats.humanTimeLong%22)

> ll

```diff
+ll
```

#### [`core.lib.datetime_formats.humanTimeShort`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.datetime_formats.humanTimeShort%22)

> D MMM

```diff
+D. MMM
```

#### [`core.lib.datetime_formats.scrubber`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.datetime_formats.scrubber%22)

> MMMM YYYY

```diff
+MMMM YYYY
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+Zdá se, že je problém s připojením. Zkontrolujte prosím síť a zkuste to znovu.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+Zdá se, že jste offline. Zkontrolujte prosím připojení a zkuste to znovu.
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/cs/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+Tato stránka nepodporuje tuto metodu požadavku.
```


### `fof-follow-tags` (missing)

#### [`fof-follow-tags.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.hero.title%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```

#### [`fof-follow-tags.forum.prompt.choose_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.prompt.choose_button%22)

> Choose tags to follow

```diff
+Vybrat štítky ke sledování
```

#### [`fof-follow-tags.forum.prompt.continue_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.prompt.continue_button%22)

> Continue to forum

```diff
+Pokračovat na fórum
```

#### [`fof-follow-tags.forum.prompt.later_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.prompt.later_button%22)

> Remind me later

```diff
+Připomenout později
```

#### [`fof-follow-tags.forum.prompt.modal_title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.prompt.modal_title%22)

> Choose tags to follow

```diff
+Vyberte štítky ke sledování
```

#### [`fof-follow-tags.forum.sub_controls.header`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.header%22)

> Subscription for {tagName}

```diff
+Odběr štítku {tagName}
```

#### [`fof-follow-tags.forum.sub_controls.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.submit_button%22)

> Confirm subscription

```diff
+Potvrdit odběr
```

#### [`fof-follow-tags.forum.sub_controls.subscription_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/cs/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.subscription_label%22)

> Select your subscription level for {tagName}

```diff
+Vyberte úroveň odběru štítku {tagName}
```


### `fof-impersonate` (missing)

#### [`fof-impersonate.lib.modal.impersonate_username`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/cs/?q=context%3A%3D%22fof-impersonate.lib.modal.impersonate_username%22)

> Login as {username}

```diff
+Přihlásit se jako {username}
```

#### [`fof-impersonate.lib.modal.placeholder_optional`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/cs/?q=context%3A%3D%22fof-impersonate.lib.modal.placeholder_optional%22)

> (Optional) Provide your reason for switching to this user

```diff
+(Volitelné) Uveďte důvod přepnutí na tohoto uživatele
```

#### [`fof-impersonate.lib.modal.placeholder_required`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/cs/?q=context%3A%3D%22fof-impersonate.lib.modal.placeholder_required%22)

> You must provide your reason for switching to this user before proceeding

```diff
+Než budete pokračovat, musíte uvést důvod přepnutí na tohoto uživatele
```

#### [`fof-impersonate.lib.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/cs/?q=context%3A%3D%22fof-impersonate.lib.modal.title%22)

> Login as another user

```diff
+Přihlásit se jako jiný uživatel
```

#### [`fof-impersonate.lib.user_controls.impersonate_button`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/cs/?q=context%3A%3D%22fof-impersonate.lib.user_controls.impersonate_button%22)

> Login as user

```diff
+Přihlásit se jako uživatel
```


### `fof-masquerade` (missing)

#### [`fof-masquerade.forum.alerts.profile-completed`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/cs/?q=context%3A%3D%22fof-masquerade.forum.alerts.profile-completed%22)

> Profile completed! &lt;a&gt;Proceed to homepage&lt;/a&gt;

```diff
+Profil je vyplněný! <a>Pokračovat na úvodní stránku</a>
```

#### [`fof-masquerade.forum.buttons.edit-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/cs/?q=context%3A%3D%22fof-masquerade.forum.buttons.edit-profile%22)

> Edit profile

```diff
+Upravit profil
```


### `fof-merge-discussions` (missing)

#### [`fof-merge-discussions.forum.modal.ordering_suffix_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/cs/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_suffix_label%22)

> Add merged posts to the end of the discussion

```diff
+Přidat sloučené příspěvky na konec diskuze
```


### `fof-polls` (missing)

#### [`fof-polls.forum.compose.continue_editing`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.continue_editing%22)

> Continue Editing

```diff
+Pokračovat v úpravách
```

#### [`fof-polls.forum.compose.draft_saved`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.draft_saved%22)

> Draft saved

```diff
+Koncept uložen
```

#### [`fof-polls.forum.compose.polls_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.polls_manager%22)

> Polls Manager

```diff
+Správa anket
```

#### [`fof-polls.forum.compose.polls_preview`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.polls_preview%22)

> View Poll

```diff
+Zobrazit anketu
```

#### [`fof-polls.forum.compose.publish`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.publish%22)

> Publish

```diff
+Zveřejnit
```

#### [`fof-polls.forum.compose.save_as_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.save_as_draft%22)

> Save as draft

```diff
+Uložit jako koncept
```

#### [`fof-polls.forum.compose.schedule`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.schedule%22)

> Schedule

```diff
+Naplánovat
```

#### [`fof-polls.forum.compose.schedule_datetime_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.schedule_datetime_label%22)

> Publish at

```diff
+Čas zveřejnění
```

#### [`fof-polls.forum.compose.schedule_publication`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication%22)

> Schedule publication

```diff
+Naplánovat zveřejnění
```

#### [`fof-polls.forum.compose.schedule_publication_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication_edit%22)

> Edit scheduled publication

```diff
+Upravit naplánované zveřejnění
```

#### [`fof-polls.forum.compose.schedule_submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.schedule_submit%22)

> Schedule

```diff
+Naplánovat
```

#### [`fof-polls.forum.compose.submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.submit%22)

> Submit

```diff
+Odeslat
```

#### [`fof-polls.forum.compose.success`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.success%22)

> Poll saved successfully.

```diff
+Anketa byla uložena.
```

#### [`fof-polls.forum.compose.update_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.compose.update_draft%22)

> Update draft

```diff
+Aktualizovat koncept
```

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
+{count, plural, one {# odpověď je prázdná – vyplňte ji, nebo ji odstraňte.} few {# odpovědi jsou prázdné – vyplňte je, nebo je odstraňte.} other {# odpovědí je prázdných – vyplňte je, nebo je odstraňte.}}
```

#### [`fof-polls.forum.modal.hide_votes_label_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.hide_votes_label_help%22)

> The user who started the poll will always be able to see the votes.

```diff
+Autor ankety uvidí hlasy vždy.
```

#### [`fof-polls.forum.modal.poll_image.alt_help_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.alt_help_text%22)

> This text is required when an image is set, it will be displayed if the image fails to load.

```diff
+Pokud je nastaven obrázek, je tento text povinný. Zobrazí se, když se obrázek nepodaří načíst.
```

#### [`fof-polls.forum.modal.poll_image.alt_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.alt_label%22)

> Image Alt Text

```diff
+Alternativní text obrázku
```

#### [`fof-polls.forum.modal.poll_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.help%22)

> Upload an image to be displayed alongside the poll (optional).

```diff
+Nahrajte obrázek, který se zobrazí u ankety (volitelné).
```

#### [`fof-polls.forum.modal.poll_image.label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.label%22)

> Poll Image

```diff
+Obrázek ankety
```

#### [`fof-polls.forum.modal.poll_option_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.poll_option_image.help%22)

> Upload an image to be displayed alongside the poll answer (optional).

```diff
+Nahrajte obrázek, který se zobrazí u odpovědi (volitelné).
```

#### [`fof-polls.forum.modal.poll_option_image.label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.poll_option_image.label%22)

> Poll Answer Image

```diff
+Obrázek odpovědi
```

#### [`fof-polls.forum.modal.subtitle_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.modal.subtitle_placeholder%22)

> Subtitle/Description (optional)

```diff
+Podnadpis/popis (volitelné)
```

#### [`fof-polls.forum.page.nav`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.page.nav%22)

> Polls

```diff
+Ankety
```

#### [`fof-polls.forum.page.nav-all`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.page.nav-all%22)

> All Global Polls

```diff
+Všechny globální ankety
```

#### [`fof-polls.forum.page.nav-groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.page.nav-groups%22)

> Poll Groups

```diff
+Skupiny anket
```

#### [`fof-polls.forum.poll.cannot_start_poll_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll.cannot_start_poll_button%22)

> Cannot Start Poll

```diff
+Nelze zahájit anketu
```

#### [`fof-polls.forum.poll.draft_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll.draft_label%22)

> Draft

```diff
+Koncept
```

#### [`fof-polls.forum.poll.scheduled_error_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_error_tooltip%22)

> This scheduled publication failed. Open the poll to see why.

```diff
+Naplánované zveřejnění se nezdařilo. Důvod zjistíte po otevření ankety.
```

#### [`fof-polls.forum.poll.scheduled_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_label%22)

> Scheduled for {date}

```diff
+Naplánováno na {date}
```

#### [`fof-polls.forum.poll.start_poll_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll.start_poll_button%22)

> Start Global Poll

```diff
+Zahájit globální anketu
```

#### [`fof-polls.forum.poll.total_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll.total_votes%22)

> {count, plural, one {# vote was given} other {# votes were given}}

```diff
+{count, plural, one {Byl odevzdán # hlas} few {Byly odevzdány # hlasy} other {Bylo odevzdáno # hlasů}}
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_label%22)

> Cancel scheduled publication

```diff
+Zrušit naplánované zveřejnění
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_success%22)

> Scheduled publication cancelled.

```diff
+Naplánované zveřejnění bylo zrušeno.
```

#### [`fof-polls.forum.poll_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.delete_error_message%22)

> There went something wrong while deleting the poll.

```diff
+Při odstraňování ankety se něco pokazilo.
```

#### [`fof-polls.forum.poll_controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.delete_success_message%22)

> Poll deleted successfully.

```diff
+Anketa byla odstraněna.
```

#### [`fof-polls.forum.poll_controls.edit_schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.edit_schedule_publish_label%22)

> Edit scheduled publication

```diff
+Upravit naplánované zveřejnění
```

#### [`fof-polls.forum.poll_controls.publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_label%22)

> Publish now

```diff
+Zveřejnit hned
```

#### [`fof-polls.forum.poll_controls.publish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_success%22)

> Poll published.

```diff
+Anketa byla zveřejněna.
```

#### [`fof-polls.forum.poll_controls.schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.schedule_publish_label%22)

> Schedule publication

```diff
+Naplánovat zveřejnění
```

#### [`fof-polls.forum.poll_controls.unpublish_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_confirmation%22)

> Move this poll back to draft? It will disappear from the showcase.

```diff
+Vrátit tuto anketu mezi koncepty? Zmizí z přehledu anket.
```

#### [`fof-polls.forum.poll_controls.unpublish_error_has_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_error_has_votes%22)

> Cannot unpublish — the poll already has votes. Delete it instead.

```diff
+Anketu nelze vrátit mezi koncepty – už v ní někdo hlasoval. Místo toho ji odstraňte.
```

#### [`fof-polls.forum.poll_controls.unpublish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_label%22)

> Move back to draft

```diff
+Vrátit mezi koncepty
```

#### [`fof-polls.forum.poll_controls.unpublish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_success%22)

> Poll moved to draft.

```diff
+Anketa byla vrácena mezi koncepty.
```

#### [`fof-polls.forum.poll_form.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_form.delete%22)

> Delete Poll

```diff
+Odstranit anketu
```

#### [`fof-polls.forum.poll_form.error`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_form.error%22)

> There was an error saving the poll, please contact any administrator.

```diff
+Při ukládání ankety došlo k chybě, kontaktujte prosím administrátora.
```

#### [`fof-polls.forum.poll_groups.composer.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.add_title%22)

> Add Poll Group

```diff
+Přidat skupinu anket
```

#### [`fof-polls.forum.poll_groups.composer.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.delete%22)

> Delete Poll Group

```diff
+Odstranit skupinu anket
```

#### [`fof-polls.forum.poll_groups.composer.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.edit_title%22)

> Edit Poll Group

```diff
+Upravit skupinu anket
```

#### [`fof-polls.forum.poll_groups.composer.groups_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.groups_manager%22)

> Poll Groups Manager

```diff
+Správa skupin anket
```

#### [`fof-polls.forum.poll_groups.composer.success`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.success%22)

> Poll group saved successfully.

```diff
+Skupina anket byla uložena.
```

#### [`fof-polls.forum.poll_groups.composer.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.view_group%22)

> View Poll Group

```diff
+Zobrazit skupinu anket
```

#### [`fof-polls.forum.poll_groups.controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_confirmation%22)

> Are you sure you want to delete this poll group?

```diff
+Opravdu chcete tuto skupinu anket odstranit?
```

#### [`fof-polls.forum.poll_groups.controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_error_message%22)

> There went something wrong while deleting the poll group.

```diff
+Při odstraňování skupiny anket se něco pokazilo.
```

#### [`fof-polls.forum.poll_groups.controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_success_message%22)

> Poll group deleted successfully.

```diff
+Skupina anket byla odstraněna.
```

#### [`fof-polls.forum.poll_groups.controls.view_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.view_label%22)

> View Poll Group

```diff
+Zobrazit skupinu anket
```

#### [`fof-polls.forum.poll_groups.list_page.add_poll_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.add_poll_button%22)

> Add Poll to Group

```diff
+Přidat anketu do skupiny
```

#### [`fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button%22)

> Cannot Start a Poll Group

```diff
+Nelze vytvořit skupinu anket
```

#### [`fof-polls.forum.poll_groups.list_page.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.empty_text%22)

> It looks as though there are no poll groups here.

```diff
+Vypadá to, že tu nejsou žádné skupiny anket.
```

#### [`fof-polls.forum.poll_groups.list_page.no_polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.no_polls%22)

> There are no polls in this group.

```diff
+V této skupině nejsou žádné ankety.
```

#### [`fof-polls.forum.poll_groups.list_page.start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.start_poll_group_button%22)

> Start a Poll Group

```diff
+Vytvořit skupinu anket
```

#### [`fof-polls.forum.poll_groups.list_page.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.title%22)

> Poll Groups

```diff
+Skupiny anket
```

#### [`fof-polls.forum.poll_never_ends`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.poll_never_ends%22)

> Poll never ends

```diff
+Anketa nikdy nekončí
```

#### [`fof-polls.forum.polls_count`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_count%22)

> {count, plural, one { {count} vote} other {{count} votes}}

```diff
+{count, plural, one {# hlas} few {# hlasy} other {# hlasů}}
```

#### [`fof-polls.forum.polls_list.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.empty_text%22)

> It looks as though there are no community wide polls here.

```diff
+Vypadá to, že tu nejsou žádné globální ankety.
```

#### [`fof-polls.forum.polls_list.sort_dropdown.least_voted`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.least_voted%22)

> Least Voted

```diff
+Nejméně hlasů
```

#### [`fof-polls.forum.polls_list.sort_dropdown.most_voted`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.most_voted%22)

> Most Voted

```diff
+Nejvíce hlasů
```

#### [`fof-polls.forum.polls_list.sort_dropdown.newest`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.newest%22)

> Newest

```diff
+Nejnovější
```

#### [`fof-polls.forum.polls_list.sort_dropdown.oldest`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.oldest%22)

> Oldest

```diff
+Nejstarší
```

#### [`fof-polls.forum.polls_list.status_filter.all`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.all%22)

> All

```diff
+Vše
```

#### [`fof-polls.forum.polls_list.status_filter.draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.draft%22)

> Drafts

```diff
+Koncepty
```

#### [`fof-polls.forum.polls_list.status_filter.published`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.published%22)

> Published

```diff
+Zveřejněné
```

#### [`fof-polls.forum.polls_page.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.polls_page.title%22)

> Polls

```diff
+Ankety
```

#### [`fof-polls.forum.showcase.ended-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.showcase.ended-polls%22)

> Concluded Polls

```diff
+Ukončené ankety
```

#### [`fof-polls.forum.showcase.no-active-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.showcase.no-active-polls%22)

> There are no active polls at the moment.

```diff
+Momentálně nejsou žádné aktivní ankety.
```

#### [`fof-polls.forum.showcase.no-recent-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.showcase.no-recent-polls%22)

> There are no recently ended polls at the moment.

```diff
+Momentálně nejsou žádné nedávno ukončené ankety.
```

#### [`fof-polls.forum.upload_image.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.upload_image.remove_button%22)

> Delete Image

```diff
+Odstranit obrázek
```

#### [`fof-polls.forum.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/cs/?q=context%3A%3D%22fof-polls.forum.upload_image.upload_button%22)

> Upload Image

```diff
+Nahrát obrázek
```


### `fof-recaptcha` (missing)

#### [`validation.recaptcha-unknown`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/cs/?q=context%3A%3D%22validation.recaptcha-unknown%22)

> An unknown error occurred while validating reCAPTCHA ({errors}).

```diff
+Při ověřování reCAPTCHA došlo k neznámé chybě ({errors}).
```


### `fof-split` (missing)

#### [`fof-split.forum.split.cancel`](https://weblate.rob006.net/translate/flarum2/fof-split/cs/?q=context%3A%3D%22fof-split.forum.split.cancel%22)

> Cancel split

```diff
+Zrušit rozdělení
```


### `fof-terms` (missing)

#### [`fof-terms.forum.update-alert.can-accept-optional-message`](https://weblate.rob006.net/translate/flarum2/fof-terms/cs/?q=context%3A%3D%22fof-terms.forum.update-alert.can-accept-optional-message%22)

> We recently updated the terms. You can review them at your convenience.

```diff
+Nedávno jsme aktualizovali podmínky. Můžete si je prohlédnout, až budete mít čas.
```

#### [`fof-terms.forum.update-alert.close`](https://weblate.rob006.net/translate/flarum2/fof-terms/cs/?q=context%3A%3D%22fof-terms.forum.update-alert.close%22)

> Close

```diff
+Zavřít
```

#### [`fof-terms.forum.user_settings.optional_policies_label`](https://weblate.rob006.net/translate/flarum2/fof-terms/cs/?q=context%3A%3D%22fof-terms.forum.user_settings.optional_policies_label%22)

> Policies

```diff
+Zásady
```


### `fof-upload` (missing)

#### [`fof-upload.forum.buttons.upload_shared`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.forum.buttons.upload_shared%22)

> Shared

```diff
+Sdílené
```

#### [`fof-upload.lib.file_list.hide_file.hide_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.hide_success%22)

> File hidden

```diff
+Soubor byl skryt
```

#### [`fof-upload.lib.file_list.hide_file.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.loading%22)

> Hiding file...

```diff
+Skrývání souboru…
```

#### [`fof-upload.lib.file_list.hide_file.show_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.show_success%22)

> File shown

```diff
+Soubor byl zobrazen
```

#### [`fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_hide`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_hide%22)

> Make "{fileName}" private (no public URL)

```diff
+Nastavit „{fileName}“ jako soukromý (bez veřejné URL)
```

#### [`fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_show`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_show%22)

> Make "{fileName}" public (with public URL)

```diff
+Nastavit „{fileName}“ jako veřejný (s veřejnou URL)
```

#### [`fof-upload.lib.file_list.hide_shared_file.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.hide_confirmation%22)

> Are you sure you want to make "{fileName}" private? Making a file private will remove its public URL, but it will not affect existing posts. It will also no longer be visible in the media manager to unauthorized users.

```diff
+Opravdu chcete nastavit „{fileName}“ jako soukromý? Soukromý soubor přijde o veřejnou URL, existující příspěvky to ale neovlivní. Neoprávnění uživatelé ho také přestanou vidět ve správci médií.
```

#### [`fof-upload.lib.file_list.hide_shared_file.hide_fail`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.hide_fail%22)

> Couldn't make file "{fileName}" private

```diff
+Soubor „{fileName}“ se nepodařilo nastavit jako soukromý
```

#### [`fof-upload.lib.file_list.hide_shared_file.hide_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.hide_success%22)

> File made private

```diff
+Soubor je nyní soukromý
```

#### [`fof-upload.lib.file_list.hide_shared_file.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.loading%22)

> Making file private...

```diff
+Nastavování souboru jako soukromého…
```

#### [`fof-upload.lib.file_list.hide_shared_file.show_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.show_confirmation%22)

> Are you sure you want to make "{fileName}" public? Making a file public will make it accessible to anyone with a public URL and anyone can share it using the media manager.

```diff
+Opravdu chcete nastavit „{fileName}“ jako veřejný? Veřejný soubor bude přístupný každému, kdo zná jeho veřejnou URL, a kdokoli ho bude moci sdílet přes správce médií.
```

#### [`fof-upload.lib.file_list.hide_shared_file.show_fail`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.show_fail%22)

> Couldn't make file "{fileName}" public

```diff
+Soubor „{fileName}“ se nepodařilo nastavit jako veřejný
```

#### [`fof-upload.lib.file_list.hide_shared_file.show_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.show_success%22)

> File made public

```diff
+Soubor je nyní veřejný
```

#### [`fof-upload.lib.file_list.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.loading%22)

> Loading files...

```diff
+Načítání souborů…
```

#### [`fof-upload.lib.file_list.modal_empty_desktop`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.modal_empty_desktop%22)

> Your file list is empty. Click the button or drag a file here to upload.

```diff
+Seznam souborů je prázdný. Soubor nahrajete kliknutím na tlačítko nebo přetažením sem.
```

#### [`fof-upload.lib.file_list.modal_empty_phone`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.modal_empty_phone%22)

> Your file list is empty. Tap the button above to upload a file.

```diff
+Seznam souborů je prázdný. Soubor nahrajete klepnutím na tlačítko výše.
```

#### [`fof-upload.lib.file_list.release_to_upload`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.release_to_upload%22)

> Release to upload

```diff
+Pusťte pro nahrání
```

#### [`fof-upload.lib.file_list.select_file_a11y_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.file_list.select_file_a11y_label%22)

> Select file "{fileName}"

```diff
+Vybrat soubor „{fileName}“
```

#### [`fof-upload.lib.upload-shared-file-modal.dropzone`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.upload-shared-file-modal.dropzone%22)

> Drag and drop files here or click to browse

```diff
+Přetáhněte soubory sem nebo je vyberte kliknutím
```

#### [`fof-upload.lib.upload-shared-file-modal.hide-from-media-gallery`](https://weblate.rob006.net/translate/flarum2/fof-upload/cs/?q=context%3A%3D%22fof-upload.lib.upload-shared-file-modal.hide-from-media-gallery%22)

> Hide from user's media gallery

```diff
+Skrýt z galerie médií uživatele
```


### `fof-user-directory` (missing)

#### [`fof-user-directory.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/cs/?q=context%3A%3D%22fof-user-directory.forum.hero.title%22)

> =&gt; fof-user-directory.forum.page.nav

```diff
+=> fof-user-directory.forum.page.nav
```

<!-- {% endraw %} -->
