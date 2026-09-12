# Spanish inherited translations differences

Translations for Spanish (`es`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **14** are translated differently and **203** are
translated only in `es`. Altogether they cover **34** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | 0 | [31](#core-missing) |
| `datlechin-bbcode-hide-content` | 0 | [5](#datlechin-bbcode-hide-content-missing) |
| `datlechin-copy-links` | 0 | [2](#datlechin-copy-links-missing) |
| `datlechin-discussion-overview` | 0 | [6](#datlechin-discussion-overview-missing) |
| `datlechin-posted-on` | 0 | [1](#datlechin-posted-on-missing) |
| `datlechin-scroll-buttons` | 0 | [4](#datlechin-scroll-buttons-missing) |
| `datlechin-signup-button` | 0 | [1](#datlechin-signup-button-missing) |
| `datlechin-silent-edit` | 0 | [2](#datlechin-silent-edit-missing) |
| `ekumanov-inline-audio` | 0 | [5](#ekumanov-inline-audio-missing) |
| `ekumanov-new-posts-notice` | 0 | [2](#ekumanov-new-posts-notice-missing) |
| `flarum-likes` | [1](#flarum-likes) | 0 |
| `flarum-mentions` | [2](#flarum-mentions) | 0 |
| `fof-analytics` | [1](#fof-analytics) | 0 |
| `fof-best-answer` | [1](#fof-best-answer) | 0 |
| `fof-links` | 0 | [1](#fof-links-missing) |
| `fof-masquerade` | [1](#fof-masquerade) | [4](#fof-masquerade-missing) |
| `fof-oauth` | 0 | [5](#fof-oauth-missing) |
| `fof-polls` | 0 | [11](#fof-polls-missing) |
| `fof-share-social` | [4](#fof-share-social) | 0 |
| `fof-sitemap` | 0 | [11](#fof-sitemap-missing) |
| `fof-socialprofile` | [1](#fof-socialprofile) | 0 |
| `fof-upload` | 0 | [5](#fof-upload-missing) |
| `fof-usercard-stats` | [2](#fof-usercard-stats) | 0 |
| `huoxin-relative-url` | 0 | [3](#huoxin-relative-url-missing) |
| `ianm-follow-users` | 0 | [1](#ianm-follow-users-missing) |
| `ianm-oauth-reddit` | 0 | [6](#ianm-oauth-reddit-missing) |
| `ianm-syndication` | [1](#ianm-syndication) | 0 |
| `ralkage-hcaptcha` | 0 | [4](#ralkage-hcaptcha-missing) |
| `ralkage-word-censor` | 0 | [6](#ralkage-word-censor-missing) |
| `ralkage-word-counter` | 0 | [1](#ralkage-word-counter-missing) |
| `resofire-menu-control` | 0 | [20](#resofire-menu-control-missing) |
| `validation` | 0 | [3](#validation-missing) |
| `walsgit-recycle-bin` | 0 | [47](#walsgit-recycle-bin-missing) |
| `yippy-tag-with-themes` | 0 | [16](#yippy-tag-with-themes-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `es` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `flarum-likes`

#### [`flarum-likes.forum.post.liked_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/es/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_self_text%22)

> {users} like this.

```diff
-{count, plural, one {A ti te gusta esto} other {A {users} os gusta esto}}
+{users} les gusta esto.
```

<del>{count, plural, one {A ti te gusta esto} other {A </del>{users} <del>os</del><ins>les</ins> gusta <del>esto}}</del><ins>esto.</ins>


### `flarum-mentions`

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{count, plural, one {{users} respondiste a esto.} other {{users} respondísteis a esto.}}
+{users} respondió esto.
```

#### [`flarum-mentions.forum.post.mentioned_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_text%22)

> {users} replied to this.

```diff
-{count, plural, one {{users} respondió a esto} other {{users} respondieron a esto}}
+{users} respondió esto.
```

<del>{count, plural, one {{users}</del><ins>{users}</ins> respondió<del> a esto} other {{users} respondieron a</del> <del>esto}}</del><ins>esto.</ins>


### `fof-analytics`

#### [`fof-analytics.admin.matomo-widget.title`](https://weblate.rob006.net/translate/flarum2/fof-analytics/es/?q=context%3A%3D%22fof-analytics.admin.matomo-widget.title%22)

> Matomo

```diff
-Matomo
+Datos Matomo Analytics
```

<ins>Datos </ins>Matomo<ins> Analytics</ins>


### `fof-best-answer`

#### [`fof-best-answer.forum.user.best-answer-count`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es/?q=context%3A%3D%22fof-best-answer.forum.user.best-answer-count%22)

> {count, plural, one { {count} best answer} other {{count} best answers}}

```diff
-{count, plural, one { {count} mejor respuesta} other {{count} mejores respuestas}}
+{count, plural, one { {count} best answer} other {{count} best answers}}
```

{count, plural, one { {count} <del>mejor</del><ins>best</ins> <del>respuesta}</del><ins>answer}</ins> other {{count} <del>mejores</del><ins>best</ins> <del>respuestas}}</del><ins>answers}}</ins>


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.icon-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es/?q=context%3A%3D%22fof-masquerade.admin.fields.icon-help%22)

> Shows an icon in front of values entered by the user. For a reference of available icons, check the &lt;a&gt;FontAwesome website&lt;/a&gt;. Use icon names with the "fa-" prefix, like "fas fa-info".
>

```diff
-Introduce el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
+Muestra un ícono delante de los valores introducidos por el usuario. Para consultar los íconos disponibles, visite el <a>sitio web de FontAwesome</a>. Utilice nombres de íconos con el prefijo "fa-", como "fas fa-info".

```

<del>Introduce</del><ins>Muestra un ícono delante de los valores introducidos por</ins> el <del>nombre</del><ins>usuario. Para consultar los íconos disponibles, visite el &lt;a&gt;sitio web</ins> de <del>alguna</del><ins>FontAwesome&lt;/a&gt;.</ins> <del>clase</del><ins>Utilice nombres</ins> de <del>&lt;a&gt;FontAwesome&lt;/a&gt;,</del><ins>íconos</ins> <del>&lt;em&gt;incluyendo&lt;/em&gt;</del><ins>con</ins> el prefijo <del>&lt;code&gt;fas</del><ins>"fa-",</ins> <del>fa-&lt;/code&gt;.</del><ins>como "fas fa-info".</ins><br />


### `fof-share-social`

#### [`fof-share-social.lib.networks.native`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es/?q=context%3A%3D%22fof-share-social.lib.networks.native%22)

> Native Share

```diff
-Native Share
+Compartir Nativo
```

#### [`fof-share-social.lib.networks.odnoklassniki`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es/?q=context%3A%3D%22fof-share-social.lib.networks.odnoklassniki%22)

> Odnoklassniki

```diff
-Odnoklassniki
+Red Odnoklassniki
```

<ins>Red </ins>Odnoklassniki

#### [`fof-share-social.lib.networks.qzone`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es/?q=context%3A%3D%22fof-share-social.lib.networks.qzone%22)

> QZone

```diff
-QZone
+Red QZone
```

<ins>Red </ins>QZone

#### [`fof-share-social.lib.networks.whatsapp`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es/?q=context%3A%3D%22fof-share-social.lib.networks.whatsapp%22)

> WhatsApp

```diff
-WhatsApp
+Red WhatsApp
```

<ins>Red </ins>WhatsApp


### `fof-socialprofile`

#### [`fof-socialprofile.forum.edit.favicon`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/es/?q=context%3A%3D%22fof-socialprofile.forum.edit.favicon%22)

> Favicon

```diff
-Favicon
+Favicon Web
```

Favicon<ins> Web</ins>


### `fof-usercard-stats`

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/es/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
-{count, plural, one {{count} discusión} other {{count} discusiones}}
+{count, plural, one { {count} discussion} other {{count} discussions}}
```

{count, plural, one <del>{{count}</del><ins>{</ins> <del>discusión}</del><ins>{count} discussion}</ins> other {{count} <del>discusiones}}</del><ins>discussions}}</ins>

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/es/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
-{count, plural, one { {count} publicación} other {{count} publicaciones}}
+{count, plural, one { {count} post} other {{count} posts}}
```

{count, plural, one { {count} <del>publicación}</del><ins>post}</ins> other {{count} <del>publicaciones}}</del><ins>posts}}</ins>


### `ianm-syndication`

#### [`ianm-syndication.forum.discussion.feed_link`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/es/?q=context%3A%3D%22ianm-syndication.forum.discussion.feed_link%22)

> Feed

```diff
-Feed
+Fuente Feed
```

<ins>Fuente </ins>Feed


## Missing translations

These strings are translated only in `es`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `es`.


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+Las últimas noticias y anuncios provienen de la comunidad oficial de Flarum en discuss.flarum.org.
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# comment} other {# comments}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Últimas noticias y comunicados del equipo de Flarum.
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+No se encontraron anuncios.
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+Ocultar anuncios
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+No se pudieron cargar los anuncios. Inténtelo de nuevo más tarde.
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+Leer más
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+Actualizar anuncios
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+Probar de nuevo
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+Mostrar anuncios
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+Anuncios
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+Ver todos en discuss.flarum.org
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+Extensiones abandonadas
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Enviar un correo electrónico a los administradores cuando se detecte una extensión abandonada recientemente durante la verificación semanal
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+Revisar ahora
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+No se pudo obtener la lista de extensiones abandonadas. Inténtelo de nuevo más tarde.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Lista de extensiones abandonadas actualizada. Se encontraron {count} extension/es instaladas en tu foro.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum mantiene una <a>lista comunitaria de extensiones abandonadas</a>. Cuando una extensión instalada aparece en la lista, se marcará en el panel de administración.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Info del sistema
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Copiar al portapapeles
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+Falló la copia a portapapeles
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Info del sistema copiada en portapapeles
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Info del sistema
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Esta extensión ya no recibe mantenimiento por parte de su autor y es posible que no reciba actualizaciones.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Esta extensión ha sido reemplazada por {replacement}. Considere migrar al paquete de reemplazo.
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+Obsoleta
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
+Reemplazada
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Widgets del foro
```

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
+Retirar alcance de {scope}
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Acción requerida: se detectó extension/es abandonada/s
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/es/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+Esta página no admite ese método de solicitud.
```


### `datlechin-bbcode-hide-content` (missing)

#### [`datlechin-bbcode-hide-content.admin.permissions.bypass_like_label`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es/?q=context%3A%3D%22datlechin-bbcode-hide-content.admin.permissions.bypass_like_label%22)

> Bypass like requirement

```diff
+Saltear etiqueta Me Gusta
```

#### [`datlechin-bbcode-hide-content.admin.permissions.bypass_reply_label`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es/?q=context%3A%3D%22datlechin-bbcode-hide-content.admin.permissions.bypass_reply_label%22)

> Bypass reply requirement

```diff
+Saltear requerimiento respuesta
```

#### [`datlechin-bbcode-hide-content.forum.must_be_logged_in`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_be_logged_in%22)

> You must be logged in to view this content

```diff
+Debes iniciar sesión para ver este contenido
```

#### [`datlechin-bbcode-hide-content.forum.must_liked`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_liked%22)

> You must like this content to view it

```diff
+Debes dar "Me gusta" a este contenido para poder verlo
```

#### [`datlechin-bbcode-hide-content.forum.must_replied`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_replied%22)

> You must reply to this content to view it

```diff
+Debes responder a este contenido para verlo
```


### `datlechin-copy-links` (missing)

#### [`datlechin-copy-links.forum.copy_link_button`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/es/?q=context%3A%3D%22datlechin-copy-links.forum.copy_link_button%22)

> Copy Link

```diff
+Copiar Enlace
```

#### [`datlechin-copy-links.forum.link_copied_message`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/es/?q=context%3A%3D%22datlechin-copy-links.forum.link_copied_message%22)

> Link copied to clipboard!

```diff
+¡Enlace copiado al portapapeles!
```


### `datlechin-discussion-overview` (missing)

#### [`datlechin-discussion-overview.forum.created`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es/?q=context%3A%3D%22datlechin-discussion-overview.forum.created%22)

> Created

```diff
+Creada
```

#### [`datlechin-discussion-overview.forum.last_reply`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es/?q=context%3A%3D%22datlechin-discussion-overview.forum.last_reply%22)

> Last reply

```diff
+Última respuesta
```

#### [`datlechin-discussion-overview.forum.likes`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es/?q=context%3A%3D%22datlechin-discussion-overview.forum.likes%22)

> Likes

```diff
+Me Gusta
```

#### [`datlechin-discussion-overview.forum.replies`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es/?q=context%3A%3D%22datlechin-discussion-overview.forum.replies%22)

> Replies

```diff
+Respuestas
```

#### [`datlechin-discussion-overview.forum.users`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es/?q=context%3A%3D%22datlechin-discussion-overview.forum.users%22)

> Users

```diff
+Usuarios
```

#### [`datlechin-discussion-overview.forum.views`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es/?q=context%3A%3D%22datlechin-discussion-overview.forum.views%22)

> Views

```diff
+Visitas
```


### `datlechin-posted-on` (missing)

#### [`datlechin-posted-on.forum.post.posted_on_text`](https://weblate.rob006.net/translate/flarum2/datlechin-posted-on/es/?q=context%3A%3D%22datlechin-posted-on.forum.post.posted_on_text%22)

> Posted on {posted\_on}

```diff
+Publicado en {posted_on}
```


### `datlechin-scroll-buttons` (missing)

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_help`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_help%22)

> Show a button to scroll to the bottom of the page

```diff
+Mostrar botón para bajar al final de la página
```

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_label`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_label%22)

> Scroll to bottom

```diff
+Bajar
```

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_top_help`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_top_help%22)

> Show a button to scroll to the top of the page

```diff
+Mostrar botón de subir al principio de la página
```

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_top_label`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_top_label%22)

> Scroll to top

```diff
+Subir
```


### `datlechin-signup-button` (missing)

#### [`datlechin-signup-button.forum.sign_up`](https://weblate.rob006.net/translate/flarum2/datlechin-signup-button/es/?q=context%3A%3D%22datlechin-signup-button.forum.sign_up%22)

> Sign Up

```diff
+Iniciar Sesión
```


### `datlechin-silent-edit` (missing)

#### [`datlechin-silent-edit.admin.permissions.clearLastEdit`](https://weblate.rob006.net/translate/flarum2/datlechin-silent-edit/es/?q=context%3A%3D%22datlechin-silent-edit.admin.permissions.clearLastEdit%22)

> Clear last edit information

```diff
+Borrar información de la última edición
```

#### [`datlechin-silent-edit.forum.post_controls.clear_last_edit_button`](https://weblate.rob006.net/translate/flarum2/datlechin-silent-edit/es/?q=context%3A%3D%22datlechin-silent-edit.forum.post_controls.clear_last_edit_button%22)

> Clear last edit

```diff
+Borrar última edición
```


### `ekumanov-inline-audio` (missing)

#### [`ekumanov-inline-audio.admin.settings.auto_play`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.auto_play%22)

> Start playing immediately when a filename is clicked

```diff
+Comienza a reproducirse inmediatamente al clickear en el nombre del archivo
```

#### [`ekumanov-inline-audio.admin.settings.show_download_button`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_download_button%22)

> Show download button on player bar

```diff
+Mostrar botón de descarga en la barra del reproductor
```

#### [`ekumanov-inline-audio.admin.settings.show_right_click_download`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_right_click_download%22)

> Allow right-click on filename to save the file

```diff
+Permitir botón derecho en el nombre del archivo para guardar el archivo
```

#### [`ekumanov-inline-audio.admin.settings.strip_upload_prefix`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.strip_upload_prefix%22)

> Hide numeric prefix from uploaded filenames (e.g. "1774205518-685373-song.mp3" → "song.mp3")

```diff
+Ocultar el prefijo numérico de los nombres de archivo subidos (ej. "1774205518-685373-song.mp3" → "song.mp3")
```

#### [`ekumanov-inline-audio.forum.bbcode_description`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es/?q=context%3A%3D%22ekumanov-inline-audio.forum.bbcode_description%22)

> Embed an audio player: \[player\]URL\[/player\]

```diff
+Inserta un reproductor de audio: [player]URL[/player]
```


### `ekumanov-new-posts-notice` (missing)

#### [`ekumanov-new-posts-notice.forum.new_posts_plural`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/es/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_plural%22)

> {count} new replies were added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read them first (your draft stays open)

```diff
+Agregaron {count} nuevas respuestas mientras escribías.
+
+Aceptar → Publica tu respuesta de todos modos
+Cancelar → Leerlas primero (tu borrador permanecerá abierto)
```

#### [`ekumanov-new-posts-notice.forum.new_posts_single`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/es/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_single%22)

> 1 new reply was added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read it first (your draft stays open)

```diff
+Agregaron 1 nueva respuesta mientras escribías.
+
+Aceptar → Publica tu respuesta de todos modos
+Cancelar → Leerla primero (tu borrador permanecerá abierto)
```


### `fof-links` (missing)

#### [`fof-links.admin.links.preconfigured`](https://weblate.rob006.net/translate/flarum2/fof-links/es/?q=context%3A%3D%22fof-links.admin.links.preconfigured%22)

> The links on this forum have been preconfigured and cannot be edited here.

```diff
+Los enlaces de este foro están preconfigurados y no se pueden editar aquí.
```


### `fof-masquerade` (missing)

#### [`flarum-gdpr.lib.data.masqueradeanswers.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.anonymize_description%22)

> =&gt; flarum-gdpr.lib.data.masqueradeanswers.delete\_description

```diff
+=> flarum-gdpr.lib.data.masqueradeanswers.delete_description
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.delete_description%22)

> Removes all profile field answers from the user's account

```diff
+Borrar todos los campos con respuestas del perfil del usuario
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.export_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.export_description%22)

> Exports the user's profile field answers

```diff
+Exportar el campo respuestas del perfil del usuario
```

#### [`fof-masquerade.admin.fields.delete-confirmation`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es/?q=context%3A%3D%22fof-masquerade.admin.fields.delete-confirmation%22)

> Are you sure you want to delete the field {field}? This cannot be undone.

```diff
+¿Seguro que deseas borrar el campo {field}? Esto no se puede deshacer.
```


### `fof-oauth` (missing)

#### [`fof-oauth.admin.settings.disable_avatars_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_help%22)

> If enabled, the user's avatar will not be updated to match the provider's avatar on signup. Note that this only affects future signups, and will not change the avatar of existing users.
>

```diff
+Si está habilitada, el avatar del usuario no se actualizará para coincidir con el del proveedor al registrarse. Tenga en cuenta que esto solo afecta a los registros futuros y no modificará el avatar de los usuarios existentes.
+
```

#### [`fof-oauth.admin.settings.disable_avatars_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_label%22)

> Disable avatars from provider

```diff
+Deshabilitar avatares del proveedor
```

#### [`fof-oauth.admin.settings.providers.group_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_help%22)

> Select a group to automatically assign to users who register using this provider.

```diff
+Seleccione un grupo para asignar automáticamente a los usuarios que se registren utilizando este proveedor.
```

#### [`fof-oauth.admin.settings.providers.group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_label%22)

> Assign Group

```diff
+Asignar Grupo
```

#### [`fof-oauth.admin.settings.providers.no_group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es/?q=context%3A%3D%22fof-oauth.admin.settings.providers.no_group_label%22)

> No group assignment

```diff
+Sin asignación de grupo
```


### `fof-polls` (missing)

#### [`fof-polls.admin.permissions.moderate_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.admin.permissions.moderate_group%22)

> Edit &amp; remove poll groups

```diff
+Editar & eliminar grupos de encuestas
```

#### [`fof-polls.admin.permissions.start_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.admin.permissions.start_group%22)

> Create poll groups

```diff
+Crear grupos de encuesta
```

#### [`fof-polls.admin.permissions.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.admin.permissions.view_group%22)

> View poll groups

```diff
+Ver grupos de encuestas
```

#### [`fof-polls.admin.settings.enabled_poll_groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups%22)

> Enable poll groups

```diff
+Habilitar grupos de encuestas
```

#### [`fof-polls.admin.settings.enabled_poll_groups_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups_help%22)

> Poll groups allow you to group globals polls together, and display them in a dedicated page.

```diff
+Los grupos de encuestas permiten agrupar encuestas globales y mostrarlas en una página dedicada.
```

#### [`fof-polls.forum.page.nav-groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.forum.page.nav-groups%22)

> Poll Groups

```diff
+Grupos de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.add_title%22)

> Add Poll Group

```diff
+Agregar grupo de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.delete%22)

> Delete Poll Group

```diff
+Eliminar grupo de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.edit_title%22)

> Edit Poll Group

```diff
+Editar grupo de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.groups_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.groups_manager%22)

> Poll Groups Manager

```diff
+Administrador de grupos de encuestas
```

#### [`fof-polls.forum.poll_groups.composer.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-polls/es/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.save_changes%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```


### `fof-sitemap` (missing)

#### [`fof-sitemap.admin.settings.build_button`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button%22)

> Rebuild Sitemaps Now

```diff
+Reconstruye Sitemaps Ahora
```

#### [`fof-sitemap.admin.settings.build_button_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button_help%22)

> Triggers an immediate rebuild of all sitemap files. The job will be dispatched to the queue if it's configured, else will run immediately.

```diff
+Inicia una reconstrucción inmediata de todos los archivos Sitemaps del sitio. La tarea se enviará a la cola si está configurada; de lo contrario, se ejecutará inmediatamente.
```

#### [`fof-sitemap.admin.settings.build_error`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.build_error%22)

> Failed to queue sitemap rebuild. Please check your logs and queue configuration.

```diff
+No se pudo poner en cola la reconstrucción del Sitemap. Por favor, revise sus registros y la configuración de la cola.
```

#### [`fof-sitemap.admin.settings.build_success`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.build_success%22)

> Sitemap rebuild has been queued successfully. Check your logs to monitor progress.

```diff
+La reconstrucción del sitemap se ha puesto en cola correctamente. Consulta los registros para supervisar el progreso.
```

#### [`fof-sitemap.admin.settings.exclude_tags`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags%22)

> Exclude all tag pages from sitemap

```diff
+Excluir todas las páginas de etiquetas del sitemap
```

#### [`fof-sitemap.admin.settings.exclude_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags_help%22)

> By default any tag visible to guests will be indexed

```diff
+Por defecto, cualquier etiqueta visible para los invitados será indexada
```

#### [`fof-sitemap.admin.settings.include_changefreq`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.include_changefreq%22)

> Include change frequency values in sitemap

```diff
+Incluir valores de frecuencia de cambios en el Sitemap
```

#### [`fof-sitemap.admin.settings.include_changefreq_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.include_changefreq_help%22)

> Change frequency values are ignored by Google but may be used by other search engines for crawl scheduling

```diff
+Google ignora los valores de frecuencia de cambios, pero otros motores de búsqueda pueden utilizarlos para programar el rastreo
```

#### [`fof-sitemap.admin.settings.include_priority`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.include_priority%22)

> Include priority values in sitemap

```diff
+Incluir valores de prioridad en el Sitemap
```

#### [`fof-sitemap.admin.settings.include_priority_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.include_priority_help%22)

> Priority values are ignored by Google but may be used by other search engines like Bing and Yandex

```diff
+Google ignora los valores de prioridad, pero otros motores de búsqueda como Bing y Yandex pueden utilizarlos
```

#### [`fof-sitemap.admin.settings.last_build_time`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es/?q=context%3A%3D%22fof-sitemap.admin.settings.last_build_time%22)

> Last Build Time

```diff
+Hora de la última construcción
```


### `fof-upload` (missing)

#### [`fof-upload.admin.labels.configured_by_environment`](https://weblate.rob006.net/translate/flarum2/fof-upload/es/?q=context%3A%3D%22fof-upload.admin.labels.configured_by_environment%22)

> Your storage settings have been pre-configured via environment variables.

```diff
+La configuración de almacenamiento se ha preconfigurado mediante vía Environment Variables.
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate`](https://weblate.rob006.net/translate/flarum2/fof-upload/es/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate%22)

> Allow SVG animations

```diff
+Permitir animaciones SVG
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate_help`](https://weblate.rob006.net/translate/flarum2/fof-upload/es/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate_help%22)

> Enabling SVG animations may introduce security vulnerabilities as animated SVGs can contain malicious code. Enable this setting at your own risk and only if you trust your users.

```diff
+Habilitar animaciones SVG puede introducir vulnerabilidades de seguridad, ya que los SVG animados pueden contener código malicioso. Habilite esta configuración bajo su propia responsabilidad y sólo si confía en sus usuarios.
```

#### [`fof-upload.admin.labels.svg-sanitizer.help`](https://weblate.rob006.net/translate/flarum2/fof-upload/es/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.help%22)

> Configure how SVG files are processed and sanitized when uploaded. SVG files can contain potentially harmful scripts and should be handled carefully. Uploaded SVGs are sanitized on upload and harmful scripts and tags are removed.

```diff
+Configure cómo se procesan y desinfectan los archivos SVG al subirlos. Los archivos SVG pueden contener scripts potencialmente dañinos y deben manejarse con cuidado. Los archivos SVG subidos se desinfectan al cargarlos y se eliminan los scripts y etiquetas dañinos.
```

#### [`fof-upload.admin.labels.svg-sanitizer.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/es/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.title%22)

> SVG Sanitizer

```diff
+Desinfección SVG
```


### `huoxin-relative-url` (missing)

#### [`huoxin-relative-url.admin.internal_domains_help`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/es/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_help%22)

> Links with these domains will be converted to relative paths.

```diff
+Los enlaces con estos dominios se convertirán en rutas relativas.
```

#### [`huoxin-relative-url.admin.internal_domains_label`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/es/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_label%22)

> Internal Domains

```diff
+Dominios Internos
```

#### [`huoxin-relative-url.admin.internal_domains_placeholder`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/es/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_placeholder%22)

> One per line.
> Domain only, DON'T include http/https.
> E.g.
> forum1.org
> forum2.org
> forum3.org
>

```diff
+Uno por línea.
+Sólo dominios, NO incluyas http/https.
+Ej.
+forum1.org
+forum2.org
+forum3.org
+
```


### `ianm-follow-users` (missing)

#### [`ianm-follow-users.forum.profile_page.no_followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/es/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_followers%22)

> It looks like you have no followers yet.

```diff
+Parece que aún no tienes seguidores.
```


### `ianm-oauth-reddit` (missing)

#### [`fof-oauth.admin.settings.providers.reddit.client_id_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_id_label%22)

> Client ID

```diff
+ID Cliente
```

#### [`fof-oauth.admin.settings.providers.reddit.client_secret_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_secret_label%22)

> Client secret

```diff
+Cliente secreto
```

#### [`fof-oauth.admin.settings.providers.reddit.description`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.description%22)

> Register your forum with Reddit {link}

```diff
+Registrar tu foro con Reddit {link}
```

#### [`fof-oauth.forum.log_in.with_reddit_button`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es/?q=context%3A%3D%22fof-oauth.forum.log_in.with_reddit_button%22)

> =&gt; fof-oauth.forum.log\_in.with\_button

```diff
+=> fof-oauth.forum.log_in.with_button
```

#### [`fof-oauth.forum.providers.reddit`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es/?q=context%3A%3D%22fof-oauth.forum.providers.reddit%22)

> =&gt; fof-oauth.lib.providers.reddit

```diff
+=> fof-oauth.lib.providers.reddit
```

#### [`fof-oauth.lib.providers.reddit`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es/?q=context%3A%3D%22fof-oauth.lib.providers.reddit%22)

> Reddit

```diff
+Reddit
```


### `ralkage-hcaptcha` (missing)

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
+Utiliza el tema oscuro para el widget hCaptcha. Habilítalo si tu foro utiliza un tema oscuro.
```

#### [`ralkage-hcaptcha.admin.settings.dark_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_label%22)

> Dark Mode

```diff
+Modo Oscuro
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
+Exigir hCaptcha al iniciar sesión. Esto ayuda a proteger contra ataques de fuerza bruta.
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_label%22)

> Require on Login

```diff
+Requerido al Iniciar Sesión
```


### `ralkage-word-censor` (missing)

#### [`ralkage-word-censor.admin.settings.replacement_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_help%22)

> Character used to replace each letter of a censored word. Default: \*

```diff
+Carácter utilizado para reemplazar cada letra de una palabra censurada. Predeterminado: *
```

#### [`ralkage-word-censor.admin.settings.replacement_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_label%22)

> Replacement Character

```diff
+Carácter de Reemplazo
```

#### [`ralkage-word-censor.admin.settings.word_list_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_help%22)

> Enter one word or phrase per line. These will be replaced with the replacement character when displayed to users.

```diff
+Ingresa una palabra o frase por línea. Estas se sustituirán por el carácter de reemplazo cuando se muestren a los usuarios.
```

#### [`ralkage-word-censor.admin.settings.word_list_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_label%22)

> Censored Words

```diff
+Palabras Censuradas
```

#### [`ralkage-word-censor.forum.settings.word_censor_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_help%22)

> When enabled, configured words will be censored in posts. Disable to see uncensored content.

```diff
+Cuando está activada, las palabras configuradas se censurarán en las publicaciones. Desactívala para ver el contenido sin censura.
```

#### [`ralkage-word-censor.forum.settings.word_censor_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_label%22)

> Enable Word Censoring

```diff
+Habilitar la Censura de Palabras
```


### `ralkage-word-counter` (missing)

#### [`ralkage-word-counter.forum.composer.word_counter`](https://weblate.rob006.net/translate/flarum2/ralkage-word-counter/es/?q=context%3A%3D%22ralkage-word-counter.forum.composer.word_counter%22)

> {words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}

```diff
+{words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}
```


### `resofire-menu-control` (missing)

#### [`resofire-menu-control.admin.nav_order.add_custom_link`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_custom_link%22)

> Add Custom Link

```diff
+Añadir enlace personalizado
```

#### [`resofire-menu-control.admin.nav_order.add_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_highlight%22)

> Highlight this item for users

```diff
+Resaltar este elemento para los usuarios
```

#### [`resofire-menu-control.admin.nav_order.custom_link_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.custom_link_label%22)

> Link label

```diff
+Etiqueta del enlace
```

#### [`resofire-menu-control.admin.nav_order.description`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.description%22)

> Use the arrow buttons to reorder the sidebar navigation items on the forum index page. Changes take effect immediately after saving.

```diff
+Usa los botones de flecha para reordenar los elementos de navegación de la barra lateral en la página de inicio del foro. Los cambios surten efecto inmediatamente después de guardar.
```

#### [`resofire-menu-control.admin.nav_order.flip_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_help%22)

> When enabled, tag links appear at the top of the sidebar and navigation items (All Discussions, Following, etc.) appear below.

```diff
+Cuando está activado, los enlaces de etiquetas aparecen en la parte superior de la barra lateral y los elementos de navegación (Todas las discusiones, Siguiendo, etc.) aparecen debajo.
```

#### [`resofire-menu-control.admin.nav_order.flip_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_label%22)

> Flip navigation (show tags above menu items)

```diff
+Invertir navegación (mostrar etiquetas sobre los elementos del menú)
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_help%22)

> Background color for highlighted nav items. Leave empty to use the default theme color.

```diff
+Color de fondo para los elementos de navegación resaltados. Déjalo vacío para usar el color del tema predeterminado.
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_label%22)

> Highlight color

```diff
+Color de resaltado
```

#### [`resofire-menu-control.admin.nav_order.icon_input_title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.icon_input_title%22)

> Custom Font Awesome icon class (e.g. fas fa-bolt). Leave empty to use default.

```diff
+Clase de icono personalizada de Font Awesome (ej. fas fa-bolt). Déjalo vacío para usar el predeterminado.
```

#### [`resofire-menu-control.admin.nav_order.move_down`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.move_down%22)

> Move down

```diff
+Mover abajo
```

#### [`resofire-menu-control.admin.nav_order.move_up`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.move_up%22)

> Move up

```diff
+Mover arriba
```

#### [`resofire-menu-control.admin.nav_order.no_items`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.no_items%22)

> No navigation items detected yet. Visit the forum index page as an admin first to populate this list.

```diff
+Aún no se han detectado elementos de navegación. Visita la página de inicio del foro como administrador primero para poblar esta lista.
```

#### [`resofire-menu-control.admin.nav_order.polls_note`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.polls_note%22)

> Note: If fof/polls is installed, fof-polls-showcase and similar items may appear in this list even if global polls is disabled. Use the × button to remove them permanently.

```diff
+Nota: Si fof/polls está instalado, fof-polls-showcase y elementos similares pueden aparecer en esta lista incluso si las encuestas globales están desactivadas. Usa el botón × para eliminarlos permanentemente.
```

#### [`resofire-menu-control.admin.nav_order.remove_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.remove_highlight%22)

> Remove highlight

```diff
+Eliminar resaltado
```

#### [`resofire-menu-control.admin.nav_order.remove_item`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.remove_item%22)

> Remove from list

```diff
+Eliminar de la lista
```

#### [`resofire-menu-control.admin.nav_order.save_button`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_button%22)

> Save Order

```diff
+Guardar orden
```

#### [`resofire-menu-control.admin.nav_order.save_success`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_success%22)

> Navigation order saved.

```diff
+Orden de navegación guardado.
```

#### [`resofire-menu-control.admin.nav_order.sticky_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_help%22)

> When enabled, the sidebar including the Start a Discussion button stays fixed at the top of the viewport as you scroll down.

```diff
+Cuando está activado, la barra lateral, incluido el botón "Iniciar una discusión", permanece fija en la parte superior de la ventana a medida que te desplazas hacia abajo.
```

#### [`resofire-menu-control.admin.nav_order.sticky_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_label%22)

> Sticky sidebar (sidebar stays visible while scrolling)

```diff
+Barra lateral fija (la barra lateral permanece visible al hacer scroll)
```

#### [`resofire-menu-control.admin.nav_order.title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.title%22)

> Menu Item Order

```diff
+Orden de los elementos del menú
```


### `validation` (missing)

#### [`validation.prohibited`](https://weblate.rob006.net/translate/flarum2/validation/es/?q=context%3A%3D%22validation.prohibited%22)

> The :attribute field is prohibited.

```diff
+El campo :attribute prohibido.
```

#### [`validation.prohibited_if`](https://weblate.rob006.net/translate/flarum2/validation/es/?q=context%3A%3D%22validation.prohibited_if%22)

> The :attribute field is prohibited when :other is :value.

```diff
+El campo :attribute se prohíbe cuando :other es :value.
```

#### [`validation.prohibited_unless`](https://weblate.rob006.net/translate/flarum2/validation/es/?q=context%3A%3D%22validation.prohibited_unless%22)

> The :attribute field is prohibited unless :other is in :values.

```diff
+El campo :attribute se prohíbe salvo que :other es :values.
```


### `walsgit-recycle-bin` (missing)

#### [`walsgit-recycle-bin.admin.actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.actions%22)

> Actions

```diff
+Acciones
```

#### [`walsgit-recycle-bin.admin.author`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.author%22)

> Author

```diff
+Autor
```

#### [`walsgit-recycle-bin.admin.bulk_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_actions%22)

> Actions for selected discussions : 

```diff
+Acciones para discusiones seleccionadas: 
```

#### [`walsgit-recycle-bin.admin.bulk_post_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_actions%22)

> Actions for selected posts : 

```diff
+Acciones para publicaciones seleccionadas: 
```

#### [`walsgit-recycle-bin.admin.bulk_post_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_restore_label%22)

> Restore selected posts

```diff
+Restaurar publicaciones seleccionadas
```

#### [`walsgit-recycle-bin.admin.bulk_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_restore_label%22)

> Restore selected discussions

```diff
+Restaurar discusiones seleccionadas
```

#### [`walsgit-recycle-bin.admin.created_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.created_at%22)

> Created at

```diff
+Creada el
```

#### [`walsgit-recycle-bin.admin.delete_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this discussion (irreversible):

```diff
+¿Estás seguro de que quieres <u>eliminar para siempre</u> esta discusión? (es irreversible)
```

#### [`walsgit-recycle-bin.admin.delete_discussion.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.delete_button%22)

> Forever delete this discussion

```diff
+Eliminar esta discusión para siempre
```

#### [`walsgit-recycle-bin.admin.delete_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.success%22)

> Successfully deleted the discussion

```diff
+Se eliminó la discusión con éxito
```

#### [`walsgit-recycle-bin.admin.delete_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.title%22)

> Delete forever

```diff
+Eliminar para siempre
```

#### [`walsgit-recycle-bin.admin.delete_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this post (irreversible):

```diff
+¿Estás seguro de que quieres <u>eliminar para siempre</u> esta publicación? (es irreversible)
```

#### [`walsgit-recycle-bin.admin.delete_post.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.delete_button%22)

> Forever delete this post

```diff
+Eliminar esta publicación para siempre
```

#### [`walsgit-recycle-bin.admin.delete_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.success%22)

> Successfully deleted the post

```diff
+Se eliminó la publicación correctamente
```

#### [`walsgit-recycle-bin.admin.delete_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.title%22)

> Delete forever

```diff
+Eliminar para siempre
```

#### [`walsgit-recycle-bin.admin.delete_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post_tooltip%22)

> Delete post #{postId}

```diff
+Eliminar publicación
```

#### [`walsgit-recycle-bin.admin.delete_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_tooltip%22)

> Delete discussion #{discussionId}

```diff
+Eliminar discusión
```

#### [`walsgit-recycle-bin.admin.discussion_id`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_id%22)

> ID

```diff
+ID
```

#### [`walsgit-recycle-bin.admin.discussion_link_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_link_tooltip%22)

> View discussion

```diff
+Ver discusión
```

#### [`walsgit-recycle-bin.admin.discussion_title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_title%22)

> Discussion title

```diff
+Título de la discusión
```

#### [`walsgit-recycle-bin.admin.discussions_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussions_bin%22)

> Discussions Bin

```diff
+Papelera de discusiones
```

#### [`walsgit-recycle-bin.admin.empty_list`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.empty_list%22)

> No discussions in the recycle bin.

```diff
+No hay discusiones en la papelera de reciclaje.
```

#### [`walsgit-recycle-bin.admin.hidden_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_at%22)

> Hidden at

```diff
+Oculta el
```

#### [`walsgit-recycle-bin.admin.hidden_discussions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_discussions%22)

> Hidden discussions

```diff
+Discusiones ocultas
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.submit_button%22)

> Restore these discussions

```diff
+Restaurar estas discusiones
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_end%22)

>  selected discussions?

```diff
+ discusiones seleccionadas?
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_start%22)

> Are you sure you want to restore these 

```diff
+¿Estás seguro de que quieres restaurar estas? 
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.title%22)

> Restore the selected discussions

```diff
+Restaurar las discusiones seleccionadas
```

#### [`walsgit-recycle-bin.admin.post.open_post`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.open_post%22)

> Open post

```diff
+Abrir publicación
```

#### [`walsgit-recycle-bin.admin.posts_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.posts_bin%22)

> Posts Bin

```diff
+Papelera de Publicaciones
```

#### [`walsgit-recycle-bin.admin.restore_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.confirmation%22)

> Are you sure you want to restore this discussion:

```diff
+¿Estás seguro de que quieres restaurar esta discusión?
```

#### [`walsgit-recycle-bin.admin.restore_discussion.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.restore_button%22)

> Restore this discussion

```diff
+Restaurar esta discusión
```

#### [`walsgit-recycle-bin.admin.restore_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.success%22)

> Successfully restored the discussion

```diff
+Se restableció la discusión con éxito
```

#### [`walsgit-recycle-bin.admin.restore_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.title%22)

> Restore discussion

```diff
+Restaurar discusión
```

#### [`walsgit-recycle-bin.admin.restore_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.confirmation%22)

> Are you sure you want to restore this post from the discussion 

```diff
+¿Estás seguro de que quieres restaurar esta publicación de la discusión? 
```

#### [`walsgit-recycle-bin.admin.restore_post.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.restore_button%22)

> Restore this post

```diff
+Restaurar esta publicación
```

#### [`walsgit-recycle-bin.admin.restore_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.success%22)

> Successfully restored the post

```diff
+Se restauró la publicación con éxito
```

#### [`walsgit-recycle-bin.admin.restore_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.title%22)

> Restore post

```diff
+Restaurar publicación
```

#### [`walsgit-recycle-bin.admin.restore_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post_tooltip%22)

> Restore post #{postId}

```diff
+Restaurar publicación
```

#### [`walsgit-recycle-bin.admin.restore_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_tooltip%22)

> Restore discussion #{discussionId}

```diff
+Restaurar discusión
```

#### [`walsgit-recycle-bin.admin.search_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_help_text%22)

> Searches for words in titles as well as in the messages of the discussions

```diff
+Búsquedas de palabras en los títulos y en los mensajes de las discusiones
```

#### [`walsgit-recycle-bin.admin.search_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_placeholder%22)

> Search for a discussion

```diff
+Buscar una discusión
```

#### [`walsgit-recycle-bin.admin.search_post_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_help_text%22)

> Searches for words in the hidden posts

```diff
+Búsquedas de palabras en las publicaciones ocultas
```

#### [`walsgit-recycle-bin.admin.search_post_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_placeholder%22)

> Search for a post

```diff
+Buscar una publicación
```

#### [`walsgit-recycle-bin.admin.total_hidden_discussions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_discussions%22)

> Total hidden discussions

```diff
+Total de discusiones ocultas
```

#### [`walsgit-recycle-bin.admin.total_hidden_posts`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_posts%22)

> Total hidden posts

```diff
+Total de publicaciones ocultas
```

#### [`walsgit-recycle-bin.admin.unknown_date`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.unknown_date%22)

> Unknown date

```diff
+Fecha desconocida
```


### `yippy-tag-with-themes` (missing)

#### [`yippy-tag-with-themes.admin.helps.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.design_default%22)

> Select a default design layout

```diff
+Seleccione un diseño de plantilla predeterminado
```

#### [`yippy-tag-with-themes.admin.helps.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.display_themes%22)

> Only allow themes for specific groups

```diff
+Permitir temas solo para grupos específicos
```

#### [`yippy-tag-with-themes.admin.labels.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.design_default%22)

> Discussion Design Layout

```diff
+Diseño y maquetación de la discusión
```

#### [`yippy-tag-with-themes.admin.labels.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.display_themes%22)

> Enable Tag for Themes Permission

```diff
+Habilitar etiqueta para permisos de temas
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic%22)

> Basic

```diff
+Básico
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tab%22)

> Basic (Primary Tab)

```diff
+Básico (Pestaña Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tag%22)

> Basic (Primary Tag)

```diff
+Básico (Etiqueta Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.none`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.none%22)

> None

```diff
+Ninguno
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note%22)

> Sticky Note

```diff
+Nota Sticky
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_banner%22)

> Sticky Note (Primary Banner)

```diff
+Nota Sticky (Banner principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline%22)

> Sticky Note Outline

```diff
+Nota Sticky Esquema
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner%22)

> Sticky Note Outline (Primary Banner)

```diff
+Esquema Nota Sticky (Banner Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab%22)

> Sticky Note Outline (Primary Tab)

```diff
+Esquema de nota Sticky (Pestaña Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag%22)

> Sticky Note Outline (Primary Tag)

```diff
+Esquema de nota Sticky (Etiqueta Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tab%22)

> Sticky Note (Primary Tab)

```diff
+Nota Sticky (Pestaña principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tag%22)

> Sticky Note (Primary Tag)

```diff
+Nota Sticky (Etiqueta principal)
```

<!-- {% endraw %} -->
