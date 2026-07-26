# Spanish (formal) inherited translations differences

Translations for Spanish (formal) (`es@formal`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **9** are translated differently and **1180** are
translated only in `es@formal`. Altogether they cover **58** components.

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
| `flarum-akismet` | 0 | [3](#flarum-akismet-missing) |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `flarum-gdpr` | 0 | [97](#flarum-gdpr-missing) |
| `flarum-mentions` | [1](#flarum-mentions) | 0 |
| `fof-analytics` | [1](#fof-analytics) | 0 |
| `fof-badges` | 0 | [289](#fof-badges-missing) |
| `fof-best-answer` | 0 | [18](#fof-best-answer-missing) |
| `fof-categories` | 0 | [27](#fof-categories-missing) |
| `fof-checklist` | 0 | [2](#fof-checklist-missing) |
| `fof-clockwork` | 0 | [1](#fof-clockwork-missing) |
| `fof-default-user-preferences` | 0 | [11](#fof-default-user-preferences-missing) |
| `fof-discussion-thumbnail` | 0 | [1](#fof-discussion-thumbnail-missing) |
| `fof-discussion-views` | 0 | [6](#fof-discussion-views-missing) |
| `fof-forum-statistics-widget` | 0 | [6](#fof-forum-statistics-widget-missing) |
| `fof-forum-stats-widget` | 0 | [6](#fof-forum-stats-widget-missing) |
| `fof-forum-widgets-core` | 0 | [3](#fof-forum-widgets-core-missing) |
| `fof-geoip` | 0 | [50](#fof-geoip-missing) |
| `fof-github-sponsors` | 0 | [10](#fof-github-sponsors-missing) |
| `fof-linguist` | 0 | [76](#fof-linguist-missing) |
| `fof-links` | 0 | [1](#fof-links-missing) |
| `fof-masquerade` | 0 | [4](#fof-masquerade-missing) |
| `fof-news-widget` | 0 | [3](#fof-news-widget-missing) |
| `fof-oauth` | 0 | [5](#fof-oauth-missing) |
| `fof-online-users-widget` | 0 | [6](#fof-online-users-widget-missing) |
| `fof-photoswipe` | 0 | [5](#fof-photoswipe-missing) |
| `fof-polls` | 0 | [11](#fof-polls-missing) |
| `fof-rich-text` | 0 | [19](#fof-rich-text-missing) |
| `fof-seo` | 0 | [195](#fof-seo-missing) |
| `fof-share-social` | [5](#fof-share-social) | 0 |
| `fof-sitemap` | 0 | [11](#fof-sitemap-missing) |
| `fof-socialprofile` | [1](#fof-socialprofile) | 0 |
| `fof-subscribed` | 0 | [27](#fof-subscribed-missing) |
| `fof-terms` | 0 | [5](#fof-terms-missing) |
| `fof-top-posters-widget` | 0 | [2](#fof-top-posters-widget-missing) |
| `fof-upload` | 0 | [5](#fof-upload-missing) |
| `fof-usercard-stats` | 0 | [2](#fof-usercard-stats-missing) |
| `huoxin-relative-url` | 0 | [3](#huoxin-relative-url-missing) |
| `ianm-follow-users` | 0 | [2](#ianm-follow-users-missing) |
| `ianm-log-viewer` | 0 | [13](#ianm-log-viewer-missing) |
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

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `es@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `flarum-mentions`

#### [`flarum-mentions.forum.post.mentioned_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_text%22)

> {users} replied to this.

```diff
-{count, plural, one {{users} respondió a esto} other {{users} respondieron a esto}}
+{users} respondió esto.
```

<del>{count, plural, one {{users}</del><ins>{users}</ins> respondió<del> a esto} other {{users} respondieron a</del> <del>esto}}</del><ins>esto.</ins>


### `fof-analytics`

#### [`fof-analytics.admin.matomo-widget.title`](https://weblate.rob006.net/translate/flarum2/fof-analytics/es@formal/?q=context%3A%3D%22fof-analytics.admin.matomo-widget.title%22)

> Matomo

```diff
-Matomo
+Datos Matomo Analytics
```

<ins>Datos </ins>Matomo<ins> Analytics</ins>


### `fof-share-social`

#### [`fof-share-social.lib.networks.native`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es@formal/?q=context%3A%3D%22fof-share-social.lib.networks.native%22)

> Native Share

```diff
-Native Share
+Compartir Nativo
```

#### [`fof-share-social.lib.networks.odnoklassniki`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es@formal/?q=context%3A%3D%22fof-share-social.lib.networks.odnoklassniki%22)

> Odnoklassniki

```diff
-Odnoklassniki
+Red Odnoklassniki
```

<ins>Red </ins>Odnoklassniki

#### [`fof-share-social.lib.networks.qzone`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es@formal/?q=context%3A%3D%22fof-share-social.lib.networks.qzone%22)

> QZone

```diff
-QZone
+Red QZone
```

<ins>Red </ins>QZone

#### [`fof-share-social.lib.networks.twitter`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es@formal/?q=context%3A%3D%22fof-share-social.lib.networks.twitter%22)

> X (formerly Twitter)

```diff
-Twitter
+X (anteriormente Twitter)
```

#### [`fof-share-social.lib.networks.whatsapp`](https://weblate.rob006.net/translate/flarum2/fof-share-social/es@formal/?q=context%3A%3D%22fof-share-social.lib.networks.whatsapp%22)

> WhatsApp

```diff
-WhatsApp
+Red WhatsApp
```

<ins>Red </ins>WhatsApp


### `fof-socialprofile`

#### [`fof-socialprofile.forum.edit.favicon`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/es@formal/?q=context%3A%3D%22fof-socialprofile.forum.edit.favicon%22)

> Favicon

```diff
-Favicon
+Favicon Web
```

Favicon<ins> Web</ins>


### `ianm-syndication`

#### [`ianm-syndication.forum.discussion.feed_link`](https://weblate.rob006.net/translate/flarum2/ianm-syndication/es@formal/?q=context%3A%3D%22ianm-syndication.forum.discussion.feed_link%22)

> Feed

```diff
-Feed
+Fuente Feed
```

<ins>Fuente </ins>Feed


## Missing translations

These strings are translated only in `es@formal`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `es@formal`.


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+Las últimas noticias y anuncios provienen de la comunidad oficial de Flarum en discuss.flarum.org.
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# comment} other {# comments}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Últimas noticias y comunicados del equipo de Flarum.
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+No se encontraron anuncios.
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+Ocultar anuncios
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+No se pudieron cargar los anuncios. Inténtelo de nuevo más tarde.
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+Leer más
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+Actualizar anuncios
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+Probar de nuevo
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+Mostrar anuncios
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+Anuncios
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+Ver todos en discuss.flarum.org
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+Extensiones abandonadas
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Enviar un correo electrónico a los administradores cuando se detecte una extensión abandonada recientemente durante la verificación semanal
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+Revisar ahora
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+No se pudo obtener la lista de extensiones abandonadas. Inténtelo de nuevo más tarde.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Lista de extensiones abandonadas actualizada. Se encontraron {count} extension/es instaladas en tu foro.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum mantiene una <a>lista comunitaria de extensiones abandonadas</a>. Cuando una extensión instalada aparece en la lista, se marcará en el panel de administración.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Info del sistema
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Copiar al portapapeles
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+Falló la copia a portapapeles
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Info del sistema copiada en portapapeles
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Info del sistema
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Esta extensión ya no recibe mantenimiento por parte de su autor y es posible que no reciba actualizaciones.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Esta extensión ha sido reemplazada por {replacement}. Considere migrar al paquete de reemplazo.
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+Obsoleta
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
+Reemplazada
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Widgets del foro
```

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
+Retirar alcance de {scope}
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Acción requerida: se detectó extension/es abandonada/s
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+Esta página no admite ese método de solicitud.
```


### `datlechin-bbcode-hide-content` (missing)

#### [`datlechin-bbcode-hide-content.admin.permissions.bypass_like_label`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.admin.permissions.bypass_like_label%22)

> Bypass like requirement

```diff
+Saltear etiqueta Me Gusta
```

#### [`datlechin-bbcode-hide-content.admin.permissions.bypass_reply_label`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.admin.permissions.bypass_reply_label%22)

> Bypass reply requirement

```diff
+Saltear requerimiento respuesta
```

#### [`datlechin-bbcode-hide-content.forum.must_be_logged_in`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_be_logged_in%22)

> You must be logged in to view this content

```diff
+Debes iniciar sesión para ver este contenido
```

#### [`datlechin-bbcode-hide-content.forum.must_liked`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_liked%22)

> You must like this content to view it

```diff
+Debes dar "Me gusta" a este contenido para poder verlo
```

#### [`datlechin-bbcode-hide-content.forum.must_replied`](https://weblate.rob006.net/translate/flarum2/datlechin-bbcode-hide-content/es@formal/?q=context%3A%3D%22datlechin-bbcode-hide-content.forum.must_replied%22)

> You must reply to this content to view it

```diff
+Debes responder a este contenido para verlo
```


### `datlechin-copy-links` (missing)

#### [`datlechin-copy-links.forum.copy_link_button`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/es@formal/?q=context%3A%3D%22datlechin-copy-links.forum.copy_link_button%22)

> Copy Link

```diff
+Copiar Enlace
```

#### [`datlechin-copy-links.forum.link_copied_message`](https://weblate.rob006.net/translate/flarum2/datlechin-copy-links/es@formal/?q=context%3A%3D%22datlechin-copy-links.forum.link_copied_message%22)

> Link copied to clipboard!

```diff
+¡Enlace copiado al portapapeles!
```


### `datlechin-discussion-overview` (missing)

#### [`datlechin-discussion-overview.forum.created`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es@formal/?q=context%3A%3D%22datlechin-discussion-overview.forum.created%22)

> Created

```diff
+Creada
```

#### [`datlechin-discussion-overview.forum.last_reply`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es@formal/?q=context%3A%3D%22datlechin-discussion-overview.forum.last_reply%22)

> Last reply

```diff
+Última respuesta
```

#### [`datlechin-discussion-overview.forum.likes`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es@formal/?q=context%3A%3D%22datlechin-discussion-overview.forum.likes%22)

> Likes

```diff
+Me Gusta
```

#### [`datlechin-discussion-overview.forum.replies`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es@formal/?q=context%3A%3D%22datlechin-discussion-overview.forum.replies%22)

> Replies

```diff
+Respuestas
```

#### [`datlechin-discussion-overview.forum.users`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es@formal/?q=context%3A%3D%22datlechin-discussion-overview.forum.users%22)

> Users

```diff
+Usuarios
```

#### [`datlechin-discussion-overview.forum.views`](https://weblate.rob006.net/translate/flarum2/datlechin-discussion-overview/es@formal/?q=context%3A%3D%22datlechin-discussion-overview.forum.views%22)

> Views

```diff
+Visitas
```


### `datlechin-posted-on` (missing)

#### [`datlechin-posted-on.forum.post.posted_on_text`](https://weblate.rob006.net/translate/flarum2/datlechin-posted-on/es@formal/?q=context%3A%3D%22datlechin-posted-on.forum.post.posted_on_text%22)

> Posted on {posted\_on}

```diff
+Publicado en {posted_on}
```


### `datlechin-scroll-buttons` (missing)

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_help`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es@formal/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_help%22)

> Show a button to scroll to the bottom of the page

```diff
+Mostrar botón para bajar al final de la página
```

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_label`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es@formal/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_bottom_label%22)

> Scroll to bottom

```diff
+Bajar
```

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_top_help`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es@formal/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_top_help%22)

> Show a button to scroll to the top of the page

```diff
+Mostrar botón de subir al principio de la página
```

#### [`datlechin-flarum-scroll-buttons.admin.scroll_to_top_label`](https://weblate.rob006.net/translate/flarum2/datlechin-scroll-buttons/es@formal/?q=context%3A%3D%22datlechin-flarum-scroll-buttons.admin.scroll_to_top_label%22)

> Scroll to top

```diff
+Subir
```


### `datlechin-signup-button` (missing)

#### [`datlechin-signup-button.forum.sign_up`](https://weblate.rob006.net/translate/flarum2/datlechin-signup-button/es@formal/?q=context%3A%3D%22datlechin-signup-button.forum.sign_up%22)

> Sign Up

```diff
+Iniciar Sesión
```


### `datlechin-silent-edit` (missing)

#### [`datlechin-silent-edit.admin.permissions.clearLastEdit`](https://weblate.rob006.net/translate/flarum2/datlechin-silent-edit/es@formal/?q=context%3A%3D%22datlechin-silent-edit.admin.permissions.clearLastEdit%22)

> Clear last edit information

```diff
+Borrar información de la última edición
```

#### [`datlechin-silent-edit.forum.post_controls.clear_last_edit_button`](https://weblate.rob006.net/translate/flarum2/datlechin-silent-edit/es@formal/?q=context%3A%3D%22datlechin-silent-edit.forum.post_controls.clear_last_edit_button%22)

> Clear last edit

```diff
+Borrar última edición
```


### `ekumanov-inline-audio` (missing)

#### [`ekumanov-inline-audio.admin.settings.auto_play`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es@formal/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.auto_play%22)

> Start playing immediately when a filename is clicked

```diff
+Comienza a reproducirse inmediatamente al clickear en el nombre del archivo
```

#### [`ekumanov-inline-audio.admin.settings.show_download_button`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es@formal/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_download_button%22)

> Show download button on player bar

```diff
+Mostrar botón de descarga en la barra del reproductor
```

#### [`ekumanov-inline-audio.admin.settings.show_right_click_download`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es@formal/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_right_click_download%22)

> Allow right-click on filename to save the file

```diff
+Permitir botón derecho en el nombre del archivo para guardar el archivo
```

#### [`ekumanov-inline-audio.admin.settings.strip_upload_prefix`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es@formal/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.strip_upload_prefix%22)

> Hide numeric prefix from uploaded filenames (e.g. "1774205518-685373-song.mp3" → "song.mp3")

```diff
+Ocultar el prefijo numérico de los nombres de archivo subidos (ej. "1774205518-685373-song.mp3" → "song.mp3")
```

#### [`ekumanov-inline-audio.forum.bbcode_description`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/es@formal/?q=context%3A%3D%22ekumanov-inline-audio.forum.bbcode_description%22)

> Embed an audio player: \[player\]URL\[/player\]

```diff
+Inserta un reproductor de audio: [player]URL[/player]
```


### `ekumanov-new-posts-notice` (missing)

#### [`ekumanov-new-posts-notice.forum.new_posts_plural`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/es@formal/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_plural%22)

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

#### [`ekumanov-new-posts-notice.forum.new_posts_single`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/es@formal/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_single%22)

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


### `flarum-akismet` (missing)

#### [`flarum-akismet.admin.akismet_settings.delete_blatant_spam_help`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/es@formal/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.delete_blatant_spam_help%22)

> If Akismet has determined that the comment is blatant spam, instead of flagging, automatically delete post

```diff
+Si Akismet determina que el comentario es spam descarado, en lugar de marcarlo como spam, elimina automáticamente la publicación
```

#### [`flarum-akismet.admin.akismet_settings.delete_blatant_spam_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/es@formal/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.delete_blatant_spam_label%22)

> Automatically delete blatant spam

```diff
+Eliminar automáticamente el spam flagrante
```

#### [`flarum-akismet.admin.permissions.bypass_akismet`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/es@formal/?q=context%3A%3D%22flarum-akismet.admin.permissions.bypass_akismet%22)

> Bypass Akismet

```diff
+Omitir Akismet
```


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+Auditoría
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+Configurar
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+Configura qué pueden ver los usuarios con permisos de acceso limitado
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+Requiere la extensión {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+Configuración de acceso limitado
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+Ver registro de auditoría
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+Ver registro de auditoría limitado
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+Ver dirección IP
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+Registro de auditoría (usuario como actor)
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+Registro de auditoría
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+Registro de auditoría
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+Registro de auditoría (ediciones de cuenta)
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+Registro de auditoría de actor
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+Registro de auditoría
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+Registro de auditoría de discusión
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+Registro de auditoría de usuario
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+Se eliminaron {deleted_count} entradas de los registros de auditoría
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+Se limpió la caché manualmente
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+Token de acceso
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+Clave API
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+Línea de comandos
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+Sesión web
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+Cliente desconocido
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+Mostrar registros de la misma acción
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+Mostrar registros por este actor
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+Mostrar registros por este tipo de cliente
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+Mostrar registros que afectan a la misma discusión
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+Mostrar registros por esta IP
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+Mostrar registros que afectan al mismo usuario
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+Ocultar registro bruto
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+Mostrar registro bruto
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+Discusión #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+Grupo #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+Publicación #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+Etiqueta #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+Usuario #{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+Inició la discusión {discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+Eliminó la discusión {discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+Ocultó la discusión {discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+Renombró la discusión de {old_title} a {new_title}
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+Restauró la discusión {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+Sin resultados
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+Desactivó la extensión {package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+Activó la extensión {package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+Desinstaló la extensión {package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+Aplicar
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+Limpiar filtro
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+Filtrar registros
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+El tipo de acción, p. ej. action:post.created.
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+Quién realizó la acción. Utilice actor:guest para acciones del sistema o no autenticadas.
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+Cómo se realizó la solicitud.
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+Acciones que afectan a una discusión específica, por ID.
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+La dirección IP desde la que provino la acción.
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+El usuario afectado por la acción, por nombre de usuario.
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+Filtros:
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+Comentario
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+Publicación
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+Combine valores con comas para coincidir con cualquiera de ellos, p. ej. action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+Prefije un filtro con un signo menos para excluir coincidencias, p. ej. -client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+Ayuda de búsqueda
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+Cargar más
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+(sin motivo)
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+(sin valor)
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+Editó el permiso {permission} de {old_groups} a {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+Creó una {post} en {discussion}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+Eliminó la {post} de {postuser} en {discussion}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+Ocultó la {post} de {postuser} en {discussion}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+Restauró la {post} de {postuser} en {discussion}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+Revisó la {post} de {postuser} en {discussion}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+Actualizar
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+Editó el ajuste {key}
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+Editó el ajuste {key} de {old_value} a {new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+Activó manualmente la cuenta de {username}
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+Activó la cuenta de {username} mediante enlace de confirmación
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+Cambió el avatar de {username}
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+Eliminó el avatar de {username}
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+Creó la cuenta de {username}
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+Eliminó a {username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+Solicitó cambiar el correo electrónico de {username} a {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+Cambió el correo electrónico de {username} de {old_email} a {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+Cambió los grupos de {username} de {old_groups} a {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+Inició sesión en la cuenta de {username}
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+Inició sesión en la cuenta de {username} usando {provider}
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+Cerró sesión en la cuenta de {username}
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+Solicitó cambiar la contraseña de {username}
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+Cambió la contraseña de {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+Solicitó un restablecimiento de contraseña para {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+Solicitó un restablecimiento de contraseña para {email} (sin cuenta coincidente)
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+Conectó el proveedor {provider} a la cuenta de {username}
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+Cambió el nombre de usuario de {username} de {old_username} a {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/es@formal/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `flarum-gdpr` (missing)

#### [`flarum-gdpr.admin.gdpr_page.data_types.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.anonymize_description%22)

> Anonymize Action

```diff
+Acción Anonimizar
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.delete_description%22)

> Delete Action

```diff
+Acción borrar
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.export_description%22)

> Export Action

```diff
+Acción Exportar
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.extension`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.extension%22)

> Extension

```diff
+Extensión
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.help_text%22)

> These are the currently registered data types. Each type is listed along with it's associated export, anonymization, and deletion actions. If an extension handles any data which falls under GDPR regulations, it should register it's data types with &lt;code&gt;flarum/gdpr&lt;/code&gt;.
> Data stored in the &lt;code&gt;user&lt;/code&gt; table is handled seperately, see user table data below.
>

```diff
+Estos son los tipos de datos registrados actualmente. Cada tipo se muestra junto con sus acciones asociadas de exportación, anonimización y eliminación. Si una extensión maneja datos sujetos al GDPR, debe registrar sus tipos de datos en <code>flarum/gdpr</code>.
+Los datos almacenados en la tabla <code>user</code> se gestionan por separado; consulte los datos de la tabla de usuarios a continuación.
+
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.title%22)

> Data Types

```diff
+Tipos de Datos
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.type`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.type%22)

> Type

```diff
+Tipo
```

#### [`flarum-gdpr.admin.gdpr_page.description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.description%22)

> Status of various GDPR actions and integrations

```diff
+Estado de las distintas acciones e integraciones del GDPR
```

#### [`flarum-gdpr.admin.gdpr_page.heading`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.heading%22)

> GDPR Data Overview

```diff
+GDPR Resúmen de Datos
```

#### [`flarum-gdpr.admin.gdpr_page.settings.extension_settings_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.settings.extension_settings_button%22)

> GDPR Settings

```diff
+Ajustes GDPR
```

#### [`flarum-gdpr.admin.gdpr_page.settings.heading`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.settings.heading%22)

> GDPR Settings

```diff
+Ajustes GDPR
```

#### [`flarum-gdpr.admin.gdpr_page.settings.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.settings.help_text%22)

> Looking for GDPR settings? They're found on the extension page.

```diff
+¿Buscas los ajustes GDPR? Se encuentran en la página de la extensión.
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.column`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.column%22)

> Column

```diff
+Columna
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.extension`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.extension%22)

> Extension

```diff
+Extensión
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.help_text%22)

> On the most part, any columns added to the &lt;code&gt;user&lt;/code&gt; table will be handled automatically, both for exporting data and for erasure.
> However, there are some special cases, which are listed below.
>

```diff
+En su mayor parte, cualquier columna agregada a la tabla <code>user</code>, tanto para exportar datos como para eliminarlos.
+Sin embargo, existen algunos casos especiales, que se detallan a continuación.
+
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.no`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.no%22)

> No

```diff
+No
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.nullable`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.nullable%22)

> Nullable

```diff
+Valor nulo
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii%22)

> PII

```diff
+PII
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip%22)

> This column is considered personally identifiable information and will be redacted in anonymized contexts (e.g. anonymized event payloads).

```diff
+Esta columna se considera información de identificación personal y se eliminará en contextos anonimizados (ej. anonymized event payloads).
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export%22)

> Redacted on export

```diff
+Información censurada en la exportación
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip%22)

> This column's value is blanked (set to null) when generating a user data export. The column still appears in the export with a null value.

```diff
+El valor de esta columna se borra (se establece en nulo) al generar una exportación de datos de usuario. La columna sigue apareciendo en la exportación con un valor nulo.
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.title%22)

> User Table Data

```diff
+Datos Tabla User
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.type`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.type%22)

> Type

```diff
+Tipo
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.yes`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.yes%22)

> Yes

```diff
+Si
```

#### [`flarum-gdpr.admin.nav.gdpr_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.nav.gdpr_button%22)

> GDPR Integrations

```diff
+Integraciones GDPR
```

#### [`flarum-gdpr.admin.permissions.process_erasure`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.permissions.process_erasure%22)

> Process erasure requests

```diff
+Tramitar solicitudes de borrado
```

#### [`flarum-gdpr.admin.permissions.process_export_for_others`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.permissions.process_export_for_others%22)

> Request and receive data exports for other users

```diff
+Solicitar y recibir exportaciones de datos para otros usuarios
```

#### [`flarum-gdpr.admin.permissions.see_anonymized_user_badges`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.permissions.see_anonymized_user_badges%22)

> See anonymized user badges

```diff
+Ver insignias de usuario anonimizadas
```

#### [`flarum-gdpr.admin.settings.allow_anonymization`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_anonymization%22)

> Allow anonymization for erasure requests

```diff
+Permitir el anonimato para las solicitudes de eliminación
```

#### [`flarum-gdpr.admin.settings.allow_anonymization_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_anonymization_help%22)

> The default option, and recommended for most communities. Under this mode, posts/comments will be preserved as much as possible as allowed by GDPR, but any user identifiable information is removed.

```diff
+Es la opción predeterminada y la recomendada para la mayoría de las comunidades. En este modo, las publicaciones y los comentarios se conservarán en la medida de lo posible, según lo permita el GDPR, pero se eliminará cualquier información que permita identificar al usuario.
```

#### [`flarum-gdpr.admin.settings.allow_deletion`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_deletion%22)

> Allow deletion for erasure requests

```diff
+Permitir la eliminación de solicitudes de borrado
```

#### [`flarum-gdpr.admin.settings.allow_deletion_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_deletion_help%22)

> A much stricter option. Under this mode, all posts/comments will be deleted, and the user will be removed from the database. Use with caution.

```diff
+Una opción mucho más estricta. En este modo, se eliminarán todas las publicaciones y comentarios, y el usuario será borrado de la base de datos. Úselo con precaución.
```

#### [`flarum-gdpr.admin.settings.default_anonymous_username`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_anonymous_username%22)

> Default username for anonymized users

```diff
+Nombre predeterminado para usuarios anónimos
```

#### [`flarum-gdpr.admin.settings.default_anonymous_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_anonymous_username_help%22)

> When a user is anonymized, their username will be replaced with this value, plus the ID of the anonymization request, for example &lt;code&gt;Anonymous123&lt;/code&gt;.

```diff
+Cuando se anonimiza un usuario, su nombre de usuario se reemplazará con este valor, más el ID de la solicitud de anonimización, por ejemplo <code>Anónimo123</code>.
```

#### [`flarum-gdpr.admin.settings.default_erasure`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure%22)

> Default action for erasure requests

```diff
+Acción predeterminada para las solicitudes de eliminación
```

#### [`flarum-gdpr.admin.settings.default_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_help%22)

> What should the default action be for erasure requests?

```diff
+¿Cuál debería ser la acción predeterminada para las solicitudes de eliminación?
```

#### [`flarum-gdpr.admin.settings.default_erasure_options.anonymization`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_options.anonymization%22)

> Anonymization

```diff
+Anonimización
```

#### [`flarum-gdpr.admin.settings.default_erasure_options.deletion`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_options.deletion%22)

> Deletion

```diff
+Borrado
```

#### [`flarum-gdpr.admin.settings.gdpr_page.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.help_text%22)

> Before deciding on which actions to use on your forum, it is vital to understand which data is integrated, and how it is handled for both anonymization and deletion. Vist the GDPR overview to understand how data is handled, and which optional extensions have registered their data to be handled by this extension.

```diff
+Antes de decidir qué acciones implementar en tu foro, es fundamental comprender qué datos se integran y cómo se gestionan para su anonimización y eliminación. Consulta la descripción general del GDPR para comprender cómo se gestionan los datos y qué extensiones opcionales han registrado sus datos para que sean gestionados por esta extensión.
```

#### [`flarum-gdpr.admin.settings.gdpr_page.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.title%22)

> Data Integration and actions

```diff
+Integración de datos y acciones
```

#### [`flarum-gdpr.email.confirm_erasure.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.email.confirm_erasure.subject%22)

> Confirm your account erasure request

```diff
+Confirma tu solicitud de eliminación de cuenta
```

#### [`flarum-gdpr.email.erasure_cancelled.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_cancelled.subject%22)

> Account erasure request cancelled

```diff
+Solicitud de eliminación de cuenta cancelada
```

#### [`flarum-gdpr.email.erasure_completed.anonymization.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_completed.anonymization.subject%22)

> Account anonymization completed

```diff
+Se ha completado el proceso de anonimización de la cuenta
```

#### [`flarum-gdpr.email.erasure_completed.deletion.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.email.erasure_completed.deletion.subject%22)

> Account deletion completed

```diff
+Borrado de cuenta exitosa/ terminada
```

#### [`flarum-gdpr.email.export_available.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.email.export_available.subject%22)

> Data export available

```diff
+Exportación de datos disponible
```

#### [`flarum-gdpr.forum.badges.anonymized_user`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.badges.anonymized_user%22)

> Anonymized User

```diff
+Usuario Anónimo
```

#### [`flarum-gdpr.forum.delete_user.delete_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.delete_button%22)

> Erase

```diff
+Borrar
```

#### [`flarum-gdpr.forum.delete_user.modal_delete_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.modal_delete_button%22)

> Erase using default action

```diff
+Borrar usando la acción predeterminada
```

#### [`flarum-gdpr.forum.delete_user.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.text%22)

> Are you sure you want to erase {username}'s account?
>
> This action is irreversible.
>

```diff
+¿Seguro que quieres borrar la cuenta {username}?
+
+Esta acción es irreversible.
+
```

#### [`flarum-gdpr.forum.delete_user.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.title%22)

> Erase {username}'s account

```diff
+Borrar la cuenta de {username}
```

#### [`flarum-gdpr.forum.erasure_request_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_request_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.

```diff
+Has confirmado tu solicitud de eliminación de cuenta. Se tomarán medidas en un plazo de 30 días, tal como lo exige el GDPR.
```

#### [`flarum-gdpr.forum.erasure_requests.empty_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.empty_text%22)

> No pending account erasure requests

```diff
+No hay solicitudes de eliminación de cuenta pendientes
```

#### [`flarum-gdpr.forum.erasure_requests.item_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.item_text%22)

> {name} requested account erasure

```diff
+{name} solicitó la eliminación de su cuenta
```

#### [`flarum-gdpr.forum.erasure_requests.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.title%22)

> Account Erasure Requests

```diff
+Solicitudes de Eliminación de Cuentas
```

#### [`flarum-gdpr.forum.erasure_requests.tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.tooltip%22)

> Account Erasure Requests

```diff
+Solicitudes de Eliminación de Cuentas
```

#### [`flarum-gdpr.forum.export_file`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.export_file%22)

> Export of user data for {username} ({email}) prepared at {date} from {forumTitle} ({url})

```diff
+Exportación de datos de {username} ({email}) del {date} con origen {forumTitle} ({url})
```

#### [`flarum-gdpr.forum.notification.export-ready`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.notification.export-ready%22)

> Your data export for {username} is now ready to download.

```diff
+Los datos exportados de {username} ya están listos para descargar.
```

#### [`flarum-gdpr.forum.process_erasure.anonymization_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.anonymization_button%22)

> Anonymize user

```diff
+Hacer usuario anónimo
```

#### [`flarum-gdpr.forum.process_erasure.comments_label`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.comments_label%22)

> Comments (optional)

```diff
+Comentarios (opcional)
```

#### [`flarum-gdpr.forum.process_erasure.confirm`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.confirm%22)

> Are you sure you want to erase {name}'s account under {mode} mode?

```diff
+¿Estás seguro que quieres borrar la cuenta de {name} en el modo {mode}?
```

#### [`flarum-gdpr.forum.process_erasure.confirmed_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.confirmed_at%22)

> Confirmed: {date}

```diff
+Confirmado: {date}
```

#### [`flarum-gdpr.forum.process_erasure.deletion_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.deletion_button%22)

> Delete user

```diff
+Borrar usuario
```

#### [`flarum-gdpr.forum.process_erasure.eligible_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.eligible_at%22)

> Eligible for auto-processing: {date}

```diff
+Apto para procesamiento automático: {date}
```

#### [`flarum-gdpr.forum.process_erasure.requested_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.requested_at%22)

> Requested: {date}

```diff
+Solicitado: {date}
```

#### [`flarum-gdpr.forum.process_erasure.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.text%22)

> {name} has requested account erasure.

```diff
+{name} ha solicitado la eliminación de su cuenta.
```

#### [`flarum-gdpr.forum.process_erasure.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.title%22)

> Process erasure request

```diff
+Procesar solicitud de borrado
```

#### [`flarum-gdpr.forum.request_erasure.cancel_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.cancel_button%22)

> Cancel request

```diff
+Cancelar pedido
```

#### [`flarum-gdpr.forum.request_erasure.password_label`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.password_label%22)

> Confirm Password

```diff
+Confirmar Contraseña
```

#### [`flarum-gdpr.forum.request_erasure.reason`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.reason%22)

> You provided the following reason: {reason}

```diff
+Usted proporcionó el siguiente motivo: {reason}
```

#### [`flarum-gdpr.forum.request_erasure.reason_label`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.reason_label%22)

> Reason (optional)

```diff
+Razón (opcional)
```

#### [`flarum-gdpr.forum.request_erasure.request_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.request_button%22)

> Request erasure

```diff
+Solicitar la eliminación
```

#### [`flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation%22)

> You should have received an email to confirm your account erasure request.
>

```diff
+Te enviamos un email para confirmar tu solicitud de eliminación de cuenta.
+
```

#### [`flarum-gdpr.forum.request_erasure.status.user_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.user_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.
>

```diff
+Has confirmado tu solicitud de eliminación de cuenta. Se tomarán medidas en un plazo de 30 días, tal como exige el GDPR.
+
```

#### [`flarum-gdpr.forum.request_erasure.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.text%22)

> Once received and confirmed, an admin will review your request within 30 days, as required by the GDPR.

```diff
+Una vez recibida y confirmada, un administrador revisará su solicitud en un plazo de 30 días, tal como exige el GDPR.
```

#### [`flarum-gdpr.forum.request_erasure.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.title%22)

> Request account erasure

```diff
+Solicitar la eliminación de la cuenta
```

#### [`flarum-gdpr.forum.settings.data.heading`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.data.heading%22)

> Personal data

```diff
+Datos personales
```

#### [`flarum-gdpr.forum.settings.export_data_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_button%22)

> Export Data

```diff
+Exportar Datos
```

#### [`flarum-gdpr.forum.settings.export_data_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_help%22)

> Requesting data export will provide you with a downloadable copy of all the information associated with your account. This includes posts, comments, and profile details.

```diff
+Al solicitar la exportación de datos, obtendrá una copia descargable de toda la información asociada a su cuenta. Esto incluye publicaciones, comentarios y detalles de su perfil.
```

#### [`flarum-gdpr.forum.settings.request_erasure_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_button%22)

> Erase Account

```diff
+Borrar Cuenta
```

#### [`flarum-gdpr.forum.settings.request_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_help%22)

> Requesting erasure will permanently delete your account and all associated data. This action is irreversible. Before proceeding, ensure you have saved any content you wish to keep.

```diff
+Al solicitar la eliminación, su cuenta y todos los datos asociados se borrarán de forma permanente. Esta acción es irreversible. Antes de continuar, asegúrese de haber guardado el contenido que desea conservar.
```

#### [`flarum-gdpr.lib.data.avatar.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.avatar.delete_description%22)

> Deletes the user's avatar from the filesystem.

```diff
+Elimina el avatar del usuario desde sistema de archivos.
```

#### [`flarum-gdpr.lib.data.avatar.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.avatar.export_description%22)

> Retrieves the user's avatar from the filesystem and includes it in the export.

```diff
+Recupera el avatar del usuario del sistema de archivos y lo incluye en la exportación.
```

#### [`flarum-gdpr.lib.data.default_user_action`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.default_user_action%22)

> No action, handled by default user table data handling.

```diff
+No se requiere ninguna acción; el sistema de gestión de datos de la tabla de usuario predeterminada se encarga de ello.
```

#### [`flarum-gdpr.lib.data.discussions.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.discussions.export_description%22)

> Exports all discussions the user has started. Data restricted to title and creation date.

```diff
+Exporta todas las discusiones que el usuario ha iniciado. Los datos se limitan al título y la fecha de creación.
```

#### [`flarum-gdpr.lib.data.forum.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.forum.export_description%22)

> Exports the forum title, url, username, email and the current date.

```diff
+Exporta el título del foro, la URL, el nombre de usuario, email y la fecha actual.
```

#### [`flarum-gdpr.lib.data.no_action`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.no_action%22)

> No action taken.

```diff
+No se ha tomado ninguna medida.
```

#### [`flarum-gdpr.lib.data.posts.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.anonymize_description%22)

> Removes the IP address from all posts the user has made.

```diff
+Elimina la dirección IP de todas las publicaciones que haya realizado el usuario.
```

#### [`flarum-gdpr.lib.data.posts.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.delete_description%22)

> Deletes all posts the user has made.

```diff
+Elimina todas las publicaciones que el usuario haya realizado.
```

#### [`flarum-gdpr.lib.data.posts.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.export_description%22)

> Exports all posts the user has made. Data restricted to content, creation date, IP address and discussion ID.

```diff
+Exporta todas las publicaciones que ha realizado el usuario. Los datos se limitan al contenido, la fecha de creación, la dirección IP y el ID de la discusión.
```

#### [`flarum-gdpr.lib.data.tokens.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.tokens.delete_description%22)

> Deletes all tokens the user has created.

```diff
+Elimina todos los tokens que el usuario haya creado.
```

#### [`flarum-gdpr.lib.data.tokens.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.tokens.export_description%22)

> Exports all tokens the user has created. Data restricted to creation date and token type.

```diff
+Exporta todos los tokens que el usuario ha creado. Los datos se limitan a la fecha de creación y el tipo de token.
```

#### [`flarum-gdpr.lib.data.user.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.user.anonymize_description%22)

> Sets all columns on the user table to null. Non-nullable columns are set to their default values or special values. Password is changed, preferences set to default and all groups are removed.

```diff
+Establece todas las columnas de la tabla de usuarios a nulo. Las columnas que no admiten valores nulos se establecen a sus valores predeterminados o valores especiales. Se cambia la contraseña, se restablecen las preferencias a los valores predeterminados y se eliminan todos los grupos.
```

#### [`flarum-gdpr.lib.data.user.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.user.delete_description%22)

> Deletes the user from the database.

```diff
+Elimina al usuario de la base de datos.
```

#### [`flarum-gdpr.lib.data.user.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.user.export_description%22)

> Exports data from the user table. All columns except id, password.

```diff
+Exporta datos de la tabla de usuarios. Todas las columnas excepto id, contraseña.
```

#### [`flarum-gdpr.lib.request_data.request_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.request_data.request_button%22)

> Request archive

```diff
+Pedir archivado
```

#### [`flarum-gdpr.lib.request_data.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.request_data.text%22)

> A zip archive will be prepared for you. Once it's ready, you'll receive a notification with a download link. The link will remain active for one day.
>

```diff
+Se preparará un archivo ZIP para usted. Una vez listo, recibirá una notificación con un enlace de descarga. El enlace permanecerá activo durante un día.
+
```

#### [`flarum-gdpr.lib.request_data.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.request_data.title%22)

> Request data for {username}

```diff
+Solicitar datos para {username}
```


### `fof-badges` (missing)

#### [`fof-badges.admin.actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.actions%22)

> Actions on Badge Earned

```diff
+Acciones al ganar insignia
```

#### [`fof-badges.admin.active`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.active%22)

> Active

```diff
+Activa
```

#### [`fof-badges.admin.add_to_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.add_to_group%22)

> Add user to group

```diff
+Añadir usuario al grupo
```

#### [`fof-badges.admin.add_to_group_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.add_to_group_help%22)

> Automatically add the user to this group when they earn the badge.

```diff
+Añadir automáticamente al usuario a este grupo cuando gane la insignia.
```

#### [`fof-badges.admin.appearance`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.appearance%22)

> Appearance

```diff
+Apariencia
```

#### [`fof-badges.admin.assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.assign%22)

> Assign

```diff
+Asignar
```

#### [`fof-badges.admin.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.assign_badge%22)

> Assign: {badge}

```diff
+Asignar: {badge}
```

#### [`fof-badges.admin.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.assign_reason%22)

> Reason (optional)

```diff
+Razón (opcional)
```

#### [`fof-badges.admin.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Esta razón será visible en la insignia del usuario.
```

#### [`fof-badges.admin.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+¿Por qué se otorga esta insignia?
```

#### [`fof-badges.admin.automatic`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.automatic%22)

> Automatic

```diff
+Automática
```

#### [`fof-badges.admin.background_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.background_color%22)

> Background Color

```diff
+Color de fondo
```

#### [`fof-badges.admin.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+¡Insignia "{badge}" asignada a {username}!
```

#### [`fof-badges.admin.badge_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_category%22)

> Category

```diff
+Categoría
```

#### [`fof-badges.admin.badge_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_count%22)

> {count, plural, one {# badge} other {# badges}}

```diff
+{count, plural, one {# insignia} other {# insignias}}
```

#### [`fof-badges.admin.badge_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_description%22)

> Description

```diff
+Descripción
```

#### [`fof-badges.admin.badge_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_description_placeholder%22)

> Describe how to earn this badge...

```diff
+Describe cómo ganar esta insignia...
```

#### [`fof-badges.admin.badge_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_name%22)

> Name

```diff
+Nombre
```

#### [`fof-badges.admin.badge_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_name_placeholder%22)

> e.g., "100 Posts Master"

```diff
+ej., "Maestro de 100 publicaciones"
```

#### [`fof-badges.admin.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_revoked%22)

> Badge "{badge}" has been revoked from {username}.

```diff
+Se ha revocado la insignia "{badge}" a {username}.
```

#### [`fof-badges.admin.badge_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_slug%22)

> Slug

```diff
+Slug
```

#### [`fof-badges.admin.badge_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_slug_help%22)

> URL-friendly identifier. Auto-generated from name if left empty.

```diff
+Identificador amigable para URLs. Se genera automáticamente a partir del nombre si se deja vacío.
```

#### [`fof-badges.admin.badge_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.badge_slug_placeholder%22)

> e.g., "100-posts-master"

```diff
+ej., "maestro-100-publicaciones"
```

#### [`fof-badges.admin.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.admin.category_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_description%22)

> Description

```diff
+Descripción
```

#### [`fof-badges.admin.category_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_description_placeholder%22)

> Describe this category of badges...

```diff
+Describe esta categoría de insignias...
```

#### [`fof-badges.admin.category_enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_enabled%22)

> Enabled

```diff
+Habilitada
```

#### [`fof-badges.admin.category_enabled_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_enabled_help%22)

> Disabled categories and their badges won't appear in the badge list.

```diff
+Las categorías deshabilitadas y sus insignias no aparecerán en la lista de insignias.
```

#### [`fof-badges.admin.category_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_name%22)

> Name

```diff
+Nombre
```

#### [`fof-badges.admin.category_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_name_placeholder%22)

> e.g., "Achievement Badges"

```diff
+ej., "Insignias de logros"
```

#### [`fof-badges.admin.category_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_slug%22)

> Slug

```diff
+Slug
```

#### [`fof-badges.admin.category_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_slug_help%22)

> URL-friendly identifier for the category.

```diff
+Identificador amigable para URLs de la categoría.
```

#### [`fof-badges.admin.category_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.category_slug_placeholder%22)

> e.g., "achievements"

```diff
+ej., "logros"
```

#### [`fof-badges.admin.clear_selection`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.clear_selection%22)

> Clear selection

```diff
+Limpiar selección
```

#### [`fof-badges.admin.create_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.create_badge%22)

> Create Badge

```diff
+Crear insignia
```

#### [`fof-badges.admin.create_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.create_category%22)

> Create Category

```diff
+Crear categoría
```

#### [`fof-badges.admin.delete`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.delete%22)

> Delete

```diff
+Eliminar
```

#### [`fof-badges.admin.delete_badge_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.delete_badge_confirm%22)

> Are you sure you want to delete the badge "{name}"? This will also remove it from all users who have earned it.

```diff
+¿Seguro que quieres eliminar la insignia "{name}"? Esto también la eliminará de todos los usuarios que la hayan ganado.
```

#### [`fof-badges.admin.delete_category_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm%22)

> Are you sure you want to delete the category "{name}"?

```diff
+¿Seguro que quieres eliminar la categoría "{name}"?
```

#### [`fof-badges.admin.delete_category_confirm_with_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm_with_badges%22)

> Are you sure you want to delete the category "{name}"? {count, plural, one {# badge} other {# badges}} will become uncategorized.

```diff
+¿Seguro que quieres eliminar la categoría "{name}"? {count, plural, one {# insignia} other {# insignias}} pasarán a estar sin categoría.
```

#### [`fof-badges.admin.disabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.disabled%22)

> Disabled

```diff
+Deshabilitada
```

#### [`fof-badges.admin.earned_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.earned_count%22)

> {count} earned

```diff
+{count} obtenida
```

#### [`fof-badges.admin.edit`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.edit%22)

> Edit

```diff
+Editar
```

#### [`fof-badges.admin.edit_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.edit_badge%22)

> Edit Badge

```diff
+Editar insignia
```

#### [`fof-badges.admin.edit_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.edit_category%22)

> Edit Category

```diff
+Editar categoría
```

#### [`fof-badges.admin.enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.enabled%22)

> Enabled

```diff
+Habilitada
```

#### [`fof-badges.admin.granted_by_system`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.granted_by_system%22)

> System

```diff
+Sistema
```

#### [`fof-badges.admin.headers.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.badges%22)

> Badges

```diff
+Insignias
```

#### [`fof-badges.admin.headers.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.description%22)

> Description

```diff
+Descripción
```

#### [`fof-badges.admin.headers.earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.earned%22)

> Earned

```diff
+Obtenido
```

#### [`fof-badges.admin.headers.icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.icon%22)

> Icon

```diff
+Icono
```

#### [`fof-badges.admin.headers.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.name%22)

> Name

```diff
+Nombre
```

#### [`fof-badges.admin.headers.order`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.order%22)

> Order

```diff
+Orden
```

#### [`fof-badges.admin.headers.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.rarity%22)

> Rarity

```diff
+Rareza
```

#### [`fof-badges.admin.headers.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.status%22)

> Status

```diff
+Estado
```

#### [`fof-badges.admin.headers.type`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.headers.type%22)

> Type

```diff
+Tipo
```

#### [`fof-badges.admin.icon_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.icon_color%22)

> Icon Color

```diff
+Color del icono
```

#### [`fof-badges.admin.icon_picker.collapse`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.icon_picker.collapse%22)

> Hide icon picker

```diff
+Ocultar selector de iconos
```

#### [`fof-badges.admin.icon_picker.expand`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.icon_picker.expand%22)

> Show icon picker

```diff
+Mostrar selector de iconos
```

#### [`fof-badges.admin.icon_picker.hint`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.icon_picker.hint%22)

> Click an icon to select, or type a Font Awesome class name above.

```diff
+Haz clic en un icono para seleccionarlo o escribe un nombre de clase de Font Awesome arriba.
```

#### [`fof-badges.admin.inactive`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.inactive%22)

> Inactive

```diff
+Inactiva
```

#### [`fof-badges.admin.install_defaults`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.install_defaults%22)

> Install Default Badges

```diff
+Instalar insignias predeterminadas
```

#### [`fof-badges.admin.install_defaults_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.install_defaults_error%22)

> Failed to install default badges.

```diff
+Error al instalar insignias predeterminadas.
```

#### [`fof-badges.admin.install_defaults_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.install_defaults_success%22)

> Default badges installed successfully!

```diff
+¡Insignias predeterminadas instaladas correctamente!
```

#### [`fof-badges.admin.is_active`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.is_active%22)

> Active

```diff
+Activa
```

#### [`fof-badges.admin.is_active_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.is_active_help%22)

> Inactive badges won't be automatically awarded to users.

```diff
+Las insignias inactivas no serán otorgadas automáticamente a los usuarios.
```

#### [`fof-badges.admin.is_visible`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.is_visible%22)

> Visible in badge list

```diff
+Visible en la lista de insignias
```

#### [`fof-badges.admin.is_visible_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.is_visible_help%22)

> Hidden badges won't appear in the public badge list but users can still earn them.

```diff
+Las insignias ocultas no aparecerán en la lista pública de insignias, pero los usuarios aún podrán ganarlas.
```

#### [`fof-badges.admin.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.manual%22)

> Manual

```diff
+Manual
```

#### [`fof-badges.admin.metrics.best_answers_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.best_answers_received%22)

> Best Answers Received

```diff
+Mejores respuestas recibidas
```

#### [`fof-badges.admin.metrics.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.discussion_count%22)

> Discussions Started

```diff
+Discusiones iniciadas
```

#### [`fof-badges.admin.metrics.downvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_given%22)

> Downvotes Given

```diff
+Votos negativos dados
```

#### [`fof-badges.admin.metrics.downvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_received%22)

> Downvotes Received

```diff
+Votos negativos recibidos
```

#### [`fof-badges.admin.metrics.edit_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.edit_count%22)

> Posts Edited

```diff
+Publicaciones editadas
```

#### [`fof-badges.admin.metrics.files_uploaded`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.files_uploaded%22)

> Files Uploaded

```diff
+Archivos subidos
```

#### [`fof-badges.admin.metrics.has_avatar`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.has_avatar%22)

> Has Avatar

```diff
+Tiene avatar
```

#### [`fof-badges.admin.metrics.has_bio`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.has_bio%22)

> Has Bio

```diff
+Tiene biografía
```

#### [`fof-badges.admin.metrics.has_nickname`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.has_nickname%22)

> Has Nickname

```diff
+Tiene apodo
```

#### [`fof-badges.admin.metrics.likes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.likes_given%22)

> Likes Given

```diff
+Me gusta dados
```

#### [`fof-badges.admin.metrics.likes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.likes_received%22)

> Likes Received

```diff
+Me gusta recibidos
```

#### [`fof-badges.admin.metrics.member_days`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.member_days%22)

> Days as Member

```diff
+Días como miembro
```

#### [`fof-badges.admin.metrics.polls_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.polls_created%22)

> Polls Created

```diff
+Encuestas creadas
```

#### [`fof-badges.admin.metrics.polls_voted`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.polls_voted%22)

> Polls Voted

```diff
+Encuestas votadas
```

#### [`fof-badges.admin.metrics.post_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.post_count%22)

> Post Count

```diff
+Recuento de publicaciones
```

#### [`fof-badges.admin.metrics.private_discussions_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.private_discussions_created%22)

> Private Discussions Created

```diff
+Discusiones privadas creadas
```

#### [`fof-badges.admin.metrics.reactions_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_given%22)

> Reactions Given

```diff
+Reacciones dadas
```

#### [`fof-badges.admin.metrics.reactions_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_received%22)

> Reactions Received

```diff
+Reacciones recibidas
```

#### [`fof-badges.admin.metrics.tag_posts`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.tag_posts%22)

> Posts in Tag

```diff
+Publicaciones en etiqueta
```

#### [`fof-badges.admin.metrics.upvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_given%22)

> Upvotes Given

```diff
+Votos positivos dados
```

#### [`fof-badges.admin.metrics.upvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_received%22)

> Upvotes Received

```diff
+Votos positivos recibidos
```

#### [`fof-badges.admin.move_down`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.move_down%22)

> Move down

```diff
+Mover abajo
```

#### [`fof-badges.admin.move_up`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.move_up%22)

> Move up

```diff
+Mover arriba
```

#### [`fof-badges.admin.next`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.next%22)

> Next

```diff
+Siguiente
```

#### [`fof-badges.admin.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_badges%22)

> No badges yet. Create your first badge!

```diff
+No hay insignias aún. ¡Crea tu primera insignia!
```

#### [`fof-badges.admin.no_categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_categories%22)

> No categories yet. Create your first category!

```diff
+No hay categorías aún. ¡Crea tu primera categoría!
```

#### [`fof-badges.admin.no_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_category%22)

> No category

```diff
+Sin categoría
```

#### [`fof-badges.admin.no_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_group%22)

> Don't add to group

```diff
+No añadir a un grupo
```

#### [`fof-badges.admin.no_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_holders%22)

> No one has earned this badge yet.

```diff
+Nadie ha ganado esta insignia todavía.
```

#### [`fof-badges.admin.no_holders_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_holders_found%22)

> No holders found matching your search.

```diff
+No se encontraron poseedores que coincidan con tu búsqueda.
```

#### [`fof-badges.admin.no_users_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.no_users_found%22)

> No users found

```diff
+No se encontraron usuarios
```

#### [`fof-badges.admin.permissions.give_manually`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.permissions.give_manually%22)

> Manually assign badges

```diff
+Asignar insignias manualmente
```

#### [`fof-badges.admin.permissions.moderate`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.permissions.moderate%22)

> Manage badges

```diff
+Gestionar insignias
```

#### [`fof-badges.admin.permissions.view_list`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.permissions.view_list%22)

> View badge list

```diff
+Ver lista de insignias
```

#### [`fof-badges.admin.permissions.view_user_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.permissions.view_user_badges%22)

> View user badges

```diff
+Ver insignias de usuario
```

#### [`fof-badges.admin.preview`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.preview%22)

> Preview

```diff
+Vista previa
```

#### [`fof-badges.admin.previous`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.previous%22)

> Previous

```diff
+Anterior
```

#### [`fof-badges.admin.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.rarity%22)

> {percent}% rarity

```diff
+{percent}% de rareza
```

#### [`fof-badges.admin.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate%22)

> Recalculate

```diff
+Recalcular
```

#### [`fof-badges.admin.recalculate_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_confirm%22)

> This will recalculate all automatic badges for all users. The process will run in the background. Continue?

```diff
+Esto recalculará todas las insignias automáticas para todos los usuarios. El proceso se ejecutará en segundo plano. ¿Continuar?
```

#### [`fof-badges.admin.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Error al recalcular las insignias. Por favor, inténtalo de nuevo.
```

#### [`fof-badges.admin.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_success%22)

> Recalculation complete! Awarded: {awarded}, Revoked: {revoked}, Users processed: {users}

```diff
+¡Recálculo completo! Otorgadas: {awarded}, Revocadas: {revoked}, Usuarios procesados: {users}
```

#### [`fof-badges.admin.recalculate_tab.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.all_badges%22)

> All automatic badges

```diff
+Todas las insignias automáticas
```

#### [`fof-badges.admin.recalculate_tab.badge_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_help%22)

> Select a specific badge or recalculate all automatic badges.

```diff
+Selecciona una insignia específica o recalcula todas las insignias automáticas.
```

#### [`fof-badges.admin.recalculate_tab.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_label%22)

> Badge to recalculate

```diff
+Insignia a recalcular
```

#### [`fof-badges.admin.recalculate_tab.badges_to_check`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badges_to_check%22)

> Badges to check

```diff
+Insignias a comprobar
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_help%22)

> Number of users to process per job. Smaller chunks are more reliable but take longer overall.

```diff
+Número de usuarios a procesar por trabajo. Los fragmentos más pequeños son más fiables pero tardan más en total.
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_label%22)

> Chunk size

```diff
+Tamaño del fragmento
```

#### [`fof-badges.admin.recalculate_tab.default`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.default%22)

> default

```diff
+predeterminado
```

#### [`fof-badges.admin.recalculate_tab.estimated_chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.estimated_chunks%22)

> Estimated chunks

```diff
+Fragmentos estimados
```

#### [`fof-badges.admin.recalculate_tab.info`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.info%22)

> Recalculation processes users in chunks to avoid queue timeouts. Each chunk runs as a separate background job.

```diff
+El recálculo procesa a los usuarios en fragmentos para evitar tiempos de espera agotados en la cola. Cada fragmento se ejecuta como un trabajo en segundo plano independiente.
```

#### [`fof-badges.admin.recalculate_tab.jobs_empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_empty%22)

> No recalculation jobs yet.

```diff
+No hay trabajos de recálculo todavía.
```

#### [`fof-badges.admin.recalculate_tab.jobs_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_title%22)

> Job History

```diff
+Historial de trabajos
```

#### [`fof-badges.admin.recalculate_tab.no_automatic_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_automatic_badges%22)

> No automatic badges configured. Create a badge with trigger conditions first.

```diff
+No hay insignias automáticas configuradas. Primero crea una insignia con condiciones de activación.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_help%22)

> If enabled, users who no longer meet the criteria will keep their badges.

```diff
+Si está activado, los usuarios que ya no cumplan los criterios conservarán sus insignias.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_label%22)

> Don't revoke existing badges

```diff
+No revocar insignias existentes
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_help%22)

> If enabled, badge actions (like adding to a group) will be re-applied to users who already have the badge. Useful when you've added new actions to an existing badge.

```diff
+Si está activado, las acciones de insignia (como añadir a un grupo) se volverán a aplicar a los usuarios que ya tengan la insignia. Útil si has añadido nuevas acciones a una insignia existente.
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_label%22)

> Re-apply actions to existing badge holders

```diff
+Reaplicar acciones a los poseedores de insignias existentes
```

#### [`fof-badges.admin.recalculate_tab.show_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.show_more%22)

> Show {count} more

```diff
+Mostrar {count} más
```

#### [`fof-badges.admin.recalculate_tab.start`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.start%22)

> Start Recalculation

```diff
+Iniciar recálculo
```

#### [`fof-badges.admin.recalculate_tab.sync_counts`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts%22)

> Sync Badge Counts

```diff
+Sincronizar recuentos
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_error%22)

> Failed to sync badge counts.

```diff
+Error al sincronizar los recuentos.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_info%22)

> Recalculate the "earned count" for all badges based on actual user\_badges records. Use this if counts become incorrect after recalculation.

```diff
+Recalcula el "recuento de obtenidos" para todas las insignias basado en los registros reales de user_badges. Úsalo si los recuentos se vuelven incorrectos tras un recálculo.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_success%22)

> Badge counts synced! {corrected} of {total} badges were corrected.

```diff
+¡Recuentos de insignias sincronizados! Se corrigieron {corrected} de {total} insignias.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_title%22)

> Sync Badge Counts

```diff
+Sincronizar recuento de insignias
```

#### [`fof-badges.admin.recalculate_tab.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.title%22)

> Start Recalculation

```diff
+Iniciar recálculo
```

#### [`fof-badges.admin.recalculate_tab.total_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.total_users%22)

> Total users

```diff
+Usuarios totales
```

#### [`fof-badges.admin.recalculation.already_running`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.already_running%22)

> A badge recalculation is already in progress.

```diff
+Ya hay un recálculo de insignias en curso.
```

#### [`fof-badges.admin.recalculation.auto_refresh_off`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_off%22)

> Auto-refresh

```diff
+Actualización automática
```

#### [`fof-badges.admin.recalculation.auto_refresh_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_on%22)

> Auto-refresh is on

```diff
+Actualización automática activada
```

#### [`fof-badges.admin.recalculation.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.admin.recalculation.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_confirm%22)

> Are you sure you want to cancel the recalculation? Progress will be lost.

```diff
+¿Seguro que quieres cancelar el recálculo? Se perderá el progreso.
```

#### [`fof-badges.admin.recalculation.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_error%22)

> Failed to cancel recalculation.

```diff
+Error al cancelar el recálculo.
```

#### [`fof-badges.admin.recalculation.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.cancelled%22)

> Recalculation cancelled

```diff
+Recálculo cancelado
```

#### [`fof-badges.admin.recalculation.chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.chunks%22)

> Chunks: {processed} / {total}

```diff
+Fragmentos: {processed} / {total}
```

#### [`fof-badges.admin.recalculation.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.completed%22)

> Recalculation completed!

```diff
+¡Recálculo completado!
```

#### [`fof-badges.admin.recalculation.dismiss`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.dismiss%22)

> Dismiss

```diff
+Descartar
```

#### [`fof-badges.admin.recalculation.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.failed%22)

> Recalculation failed

```diff
+Error en el recálculo
```

#### [`fof-badges.admin.recalculation.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.pending%22)

> Preparing recalculation...

```diff
+Preparando recálculo...
```

#### [`fof-badges.admin.recalculation.progress`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.progress%22)

> {processed} / {total} evaluations ({percentage}%)

```diff
+{processed} / {total} evaluaciones ({percentage}%)
```

#### [`fof-badges.admin.recalculation.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.running%22)

> Recalculating badges...

```diff
+Recalculando insignias...
```

#### [`fof-badges.admin.recalculation.started`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.started%22)

> Badge recalculation started. This will run in the background.

```diff
+Se ha iniciado el recálculo de insignias. Se ejecutará en segundo plano.
```

#### [`fof-badges.admin.recalculation.stats`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation.stats%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Otorgadas: {awarded} | Revocadas: {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.button`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.button%22)

> Jobs

```diff
+Trabajos
```

#### [`fof-badges.admin.recalculation_jobs.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.admin.recalculation_jobs.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel_error%22)

> Failed to cancel job.

```diff
+Error al cancelar el trabajo.
```

#### [`fof-badges.admin.recalculation_jobs.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancelled%22)

> Job cancelled successfully.

```diff
+Trabajo cancelado correctamente.
```

#### [`fof-badges.admin.recalculation_jobs.empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.empty%22)

> No recalculation jobs found.

```diff
+No se encontraron trabajos de recálculo.
```

#### [`fof-badges.admin.recalculation_jobs.force_cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.force_cancel%22)

> Force Cancel

```diff
+Cancelar forzosamente
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed%22)

> Mark as Failed

```diff
+Marcar como fallido
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed_error%22)

> Failed to mark job as failed.

```diff
+Error al marcar el trabajo como fallido.
```

#### [`fof-badges.admin.recalculation_jobs.marked_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.marked_failed%22)

> Job marked as failed.

```diff
+Trabajo marcado como fallido.
```

#### [`fof-badges.admin.recalculation_jobs.results`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.results%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Otorgadas: {awarded} | Revocadas: {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.status.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.cancelled%22)

> Cancelled

```diff
+Cancelado
```

#### [`fof-badges.admin.recalculation_jobs.status.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.completed%22)

> Completed

```diff
+Completado
```

#### [`fof-badges.admin.recalculation_jobs.status.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.failed%22)

> Failed

```diff
+Fallido
```

#### [`fof-badges.admin.recalculation_jobs.status.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.pending%22)

> Pending

```diff
+Pendiente
```

#### [`fof-badges.admin.recalculation_jobs.status.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.running%22)

> Running

```diff
+En ejecución
```

#### [`fof-badges.admin.recalculation_jobs.stuck`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.stuck%22)

> Stuck

```diff
+Atascado
```

#### [`fof-badges.admin.recalculation_jobs.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.title%22)

> Recalculation Jobs

```diff
+Trabajos de recálculo
```

#### [`fof-badges.admin.recalculation_jobs.users`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.users%22)

> {processed} / {total} evaluations

```diff
+{processed} / {total} evaluaciones
```

#### [`fof-badges.admin.revoke`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.revoke%22)

> Revoke

```diff
+Revocar
```

#### [`fof-badges.admin.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from {username}?

```diff
+¿Seguro que quieres revocar la insignia "{badge}" a {username}?
```

#### [`fof-badges.admin.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.revoke_error%22)

> Failed to revoke badge.

```diff
+Error al revocar la insignia.
```

#### [`fof-badges.admin.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.save%22)

> Save

```diff
+Guardar
```

#### [`fof-badges.admin.search_holders_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.search_holders_placeholder%22)

> Search holders...

```diff
+Buscar poseedores...
```

#### [`fof-badges.admin.search_user_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.search_user_placeholder%22)

> Search by username or display name...

```diff
+Buscar por nombre de usuario o nombre visible...
```

#### [`fof-badges.admin.select_user`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.select_user%22)

> Select User

```diff
+Seleccionar usuario
```

#### [`fof-badges.admin.send_notification`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.send_notification%22)

> Send notification to user

```diff
+Enviar notificación al usuario
```

#### [`fof-badges.admin.settings.display_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.display_title%22)

> Display Settings

```diff
+Ajustes de visualización
```

#### [`fof-badges.admin.settings.integrations_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.integrations_help%22)

> Badge metrics that depend on other extensions. Install the extension to unlock the corresponding metrics.

```diff
+Métricas de insignias que dependen de otras extensiones. Instala la extensión para desbloquear las métricas correspondientes.
```

#### [`fof-badges.admin.settings.integrations_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.integrations_title%22)

> Extension Integrations

```diff
+Integraciones de extensiones
```

#### [`fof-badges.admin.settings.new_badge_highlight`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight%22)

> Show "NEW" tag on recently earned badges

```diff
+Mostrar etiqueta "NUEVO" en insignias obtenidas recientemente
```

#### [`fof-badges.admin.settings.new_badge_highlight_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight_help%22)

> Displays a "NEW" tag on badges earned within the last 7 days.

```diff
+Muestra una etiqueta "NUEVO" en las insignias ganadas en los últimos 7 días.
```

#### [`fof-badges.admin.settings.post_badge_display_limit`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit%22)

> Post badge display limit

```diff
+Límite de visualización de insignias en publicaciones
```

#### [`fof-badges.admin.settings.post_badge_display_limit_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit_help%22)

> Maximum number of badges to show under posts. Set to 0 to disable.

```diff
+Número máximo de insignias a mostrar bajo las publicaciones. Establecer en 0 para deshabilitar.
```

#### [`fof-badges.admin.settings.primary_badge_display`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display%22)

> Primary badge display

```diff
+Visualización de insignia principal
```

#### [`fof-badges.admin.settings.primary_badge_display_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display_help%22)

> How the user's primary badge appears next to their username.

```diff
+Cómo aparece la insignia principal del usuario junto a su nombre de usuario.
```

#### [`fof-badges.admin.settings.primary_badge_hidden`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_hidden%22)

> Hidden

```diff
+Oculta
```

#### [`fof-badges.admin.settings.primary_badge_icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon%22)

> Icon only

```diff
+Solo icono
```

#### [`fof-badges.admin.settings.primary_badge_icon_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon_name%22)

> Icon and name

```diff
+Icono y nombre
```

#### [`fof-badges.admin.settings.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.save%22)

> Save Settings

```diff
+Guardar ajustes
```

#### [`fof-badges.admin.settings.save_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.save_error%22)

> Failed to save settings.

```diff
+Error al guardar los ajustes.
```

#### [`fof-badges.admin.settings.saved`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.saved%22)

> Settings saved successfully.

```diff
+Ajustes guardados correctamente.
```

#### [`fof-badges.admin.settings.show_badges_on_user_card`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card%22)

> Show badges on user card

```diff
+Mostrar insignias en la tarjeta de usuario
```

#### [`fof-badges.admin.settings.show_badges_on_user_card_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card_help%22)

> Display the user's favorite or rarest badge on user cards and profile pages.

```diff
+Muestra la insignia favorita o más rara del usuario en las tarjetas de usuario y páginas de perfil.
```

#### [`fof-badges.admin.showing_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.showing_holders%22)

> Showing {from}-{to} of {total}

```diff
+Mostrando {from}-{to} de {total}
```

#### [`fof-badges.admin.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.status%22)

> Status

```diff
+Estado
```

#### [`fof-badges.admin.tab_assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.tab_assign%22)

> Assign

```diff
+Asignar
```

#### [`fof-badges.admin.tab_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.tab_holders%22)

> Holders ({count})

```diff
+Poseedores ({count})
```

#### [`fof-badges.admin.tabs.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.tabs.badges%22)

> Badges

```diff
+Insignias
```

#### [`fof-badges.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.tabs.categories%22)

> Categories

```diff
+Categorías
```

#### [`fof-badges.admin.tabs.recalculation`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.tabs.recalculation%22)

> Recalculation

```diff
+Recalcular
```

#### [`fof-badges.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.tabs.settings%22)

> Settings

```diff
+Ajustes
```

#### [`fof-badges.admin.trigger_builder.add_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.add_condition%22)

> Add Condition

```diff
+Añadir condición
```

#### [`fof-badges.admin.trigger_builder.and`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and%22)

> ALL must match (AND)

```diff
+TODAS deben coincidir (Y)
```

#### [`fof-badges.admin.trigger_builder.and_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and_help%22)

> User must meet all conditions simultaneously to earn this badge.

```diff
+El usuario debe cumplir todas las condiciones simultáneamente para ganar esta insignia.
```

#### [`fof-badges.admin.trigger_builder.date_end`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_end%22)

> End Date

```diff
+Fecha de finalización
```

#### [`fof-badges.admin.trigger_builder.date_range_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_range_help%22)

> Only count activity within this date range. Useful for event badges.

```diff
+Solo contar la actividad dentro de este rango de fechas. Útil para insignias de eventos.
```

#### [`fof-badges.admin.trigger_builder.date_start`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_start%22)

> Start Date

```diff
+Fecha de inicio
```

#### [`fof-badges.admin.trigger_builder.loading_tags`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.loading_tags%22)

> Loading tags...

```diff
+Cargando etiquetas...
```

#### [`fof-badges.admin.trigger_builder.logic`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.logic%22)

> When multiple conditions

```diff
+Cuando hay múltiples condiciones
```

#### [`fof-badges.admin.trigger_builder.no_conditions_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.no_conditions_info%22)

> No conditions set. This badge can only be assigned manually by moderators.

```diff
+No hay condiciones establecidas. Esta insignia solo puede ser asignada manualmente por moderadores.
```

#### [`fof-badges.admin.trigger_builder.or`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or%22)

> ANY must match (OR)

```diff
+CUALQUIERA debe coincidir (O)
```

#### [`fof-badges.admin.trigger_builder.or_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or_help%22)

> User must meet at least one condition to earn this badge.

```diff
+El usuario debe cumplir al menos una condición para ganar esta insignia.
```

#### [`fof-badges.admin.trigger_builder.remove_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.remove_condition%22)

> Remove condition

```diff
+Eliminar condición
```

#### [`fof-badges.admin.trigger_builder.select_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.select_tag%22)

> Select a tag...

```diff
+Seleccionar una etiqueta...
```

#### [`fof-badges.admin.trigger_builder.tag_filter`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter%22)

> Tag Filter

```diff
+Filtro de etiquetas
```

#### [`fof-badges.admin.trigger_builder.tag_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter_help%22)

> Required when using "Posts in Tag" metric.

```diff
+Obligatorio al usar la métrica "Publicaciones en etiqueta".
```

#### [`fof-badges.admin.trigger_builder.use_date_range`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_builder.use_date_range%22)

> Limit to date range

```diff
+Limitar a rango de fechas
```

#### [`fof-badges.admin.trigger_config`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_config%22)

> Automatic Trigger

```diff
+Activador automático
```

#### [`fof-badges.admin.trigger_config_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.trigger_config_help%22)

> Configure conditions for automatic badge awarding. Leave empty for manual-only badges.

```diff
+Configura las condiciones para otorgar insignias automáticamente. Déjalo vacío para insignias solo manuales.
```

#### [`fof-badges.admin.uncategorized`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.uncategorized%22)

> Uncategorized

```diff
+Sin categoría
```

#### [`fof-badges.admin.validation.tag_required`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.admin.validation.tag_required%22)

> You must select a tag when using the "Posts in Tag" metric.

```diff
+Debes seleccionar una etiqueta cuando utilices la métrica "Publicaciones en etiqueta".
```

#### [`fof-badges.forum.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.all_badges%22)

> All Badges

```diff
+Todas las insignias
```

#### [`fof-badges.forum.badges_subtitle`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.badges_subtitle%22)

> Earn badges by participating in the community!

```diff
+¡Gana insignias participando en la comunidad!
```

#### [`fof-badges.forum.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.badges_title%22)

> Badges

```diff
+Insignias
```

#### [`fof-badges.forum.earned_by`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.earned_by%22)

> {count, plural, one {# user} other {# users}}

```diff
+{count, plural, one {# usuario} other {# usuarios}}
```

#### [`fof-badges.forum.earned_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.earned_users%22)

> Earned By

```diff
+Ganada por
```

#### [`fof-badges.forum.loading`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.loading%22)

> Loading...

```diff
+Cargando...
```

#### [`fof-badges.forum.more_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.more_users_earned%22)

> And more users...

```diff
+Y más usuarios...
```

#### [`fof-badges.forum.my_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.my_badges%22)

> My Badges

```diff
+Mis insignias
```

#### [`fof-badges.forum.nav.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.nav.badges%22)

> Badges

```diff
+Insignias
```

#### [`fof-badges.forum.new_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.new_tag%22)

> NEW

```diff
+NUEVO
```

#### [`fof-badges.forum.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.no_badges%22)

> No badges available yet.

```diff
+No hay insignias disponibles aún.
```

#### [`fof-badges.forum.no_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.no_users_earned%22)

> No one has earned this badge yet. Be the first!

```diff
+Nadie ha ganado esta insignia todavía. ¡Sé el primero!
```

#### [`fof-badges.forum.notification.a_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.notification.a_badge%22)

> a badge

```diff
+una insignia
```

#### [`fof-badges.forum.notification.badge_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.notification.badge_earned%22)

> You earned {badge}

```diff
+Has ganado {badge}
```

#### [`fof-badges.forum.other_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.other_badges%22)

> Other Badges

```diff
+Otras insignias
```

#### [`fof-badges.forum.owned_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.owned_badge%22)

> You own this badge

```diff
+Posees esta insignia
```

#### [`fof-badges.forum.toggle_category_dropdown`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.toggle_category_dropdown%22)

> Toggle category dropdown

```diff
+Alternar menú desplegable de categorías
```

#### [`fof-badges.forum.user.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.assign_badge%22)

> Assign Badge

```diff
+Asignar insignia
```

#### [`fof-badges.forum.user.assign_badge_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.assign_badge_title%22)

> Assign Badge to {username}

```diff
+Asignar insignia a {username}
```

#### [`fof-badges.forum.user.assign_button`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.assign_button%22)

> Assign Badge

```diff
+Asignar insignia
```

#### [`fof-badges.forum.user.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.assign_reason%22)

> Reason (optional)

```diff
+Razón (opcional)
```

#### [`fof-badges.forum.user.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Esta razón será visible en la insignia del usuario.
```

#### [`fof-badges.forum.user.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+¿Por qué se otorga esta insignia?
```

#### [`fof-badges.forum.user.badge_actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.badge_actions%22)

> Badge actions

```diff
+Acciones de insignia
```

#### [`fof-badges.forum.user.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+¡Insignia "{badge}" asignada a {username}!
```

#### [`fof-badges.forum.user.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.badge_revoked%22)

> Badge "{badge}" has been revoked.

```diff
+La insignia "{badge}" ha sido revocada.
```

#### [`fof-badges.forum.user.badges_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.badges_count%22)

> {count, plural, one {# Badge} other {# Badges}}

```diff
+{count, plural, one {# insignia} other {# insignias}}
```

#### [`fof-badges.forum.user.badges_tab`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.badges_tab%22)

> Badges

```diff
+Insignias
```

#### [`fof-badges.forum.user.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.badges_title%22)

> {username}'s Badges

```diff
+Insignias de {username}
```

#### [`fof-badges.forum.user.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.forum.user.earned_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.earned_on%22)

> Earned {date}

```diff
+Obtenida el {date}
```

#### [`fof-badges.forum.user.favorite_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.favorite_badge%22)

> Favorite badge

```diff
+Insignia favorita
```

#### [`fof-badges.forum.user.hidden_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.hidden_badge%22)

> Hidden from profile

```diff
+Oculta del perfil
```

#### [`fof-badges.forum.user.hide_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.hide_badge%22)

> Hide from profile

```diff
+Ocultar en perfil
```

#### [`fof-badges.forum.user.load_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.load_more%22)

> Load More

```diff
+Cargar más
```

#### [`fof-badges.forum.user.manually_awarded`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.manually_awarded%22)

> Manually awarded

```diff
+Otorgada manualmente
```

#### [`fof-badges.forum.user.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.no_badges%22)

> This user hasn't earned any badges yet.

```diff
+Este usuario aún no ha ganado ninguna insignia.
```

#### [`fof-badges.forum.user.no_badges_available`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.no_badges_available%22)

> No badges available.

```diff
+No hay insignias disponibles.
```

#### [`fof-badges.forum.user.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate%22)

> Recalculate Badges

```diff
+Recalcular insignias
```

#### [`fof-badges.forum.user.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Error al recalcular las insignias. Por favor, inténtalo de nuevo.
```

#### [`fof-badges.forum.user.recalculate_modal.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.all_badges%22)

> All automatic badges

```diff
+Todas las insignias automáticas
```

#### [`fof-badges.forum.user.recalculate_modal.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.badge_label%22)

> Badge to recalculate

```diff
+Insignia a recalcular
```

#### [`fof-badges.forum.user.recalculate_modal.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.manual%22)

> manual

```diff
+manual
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_help%22)

> If enabled, the user will keep badges even if they no longer meet the criteria.

```diff
+Si está activado, el usuario conservará las insignias incluso si ya no cumple los criterios.
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_label%22)

> Don't revoke existing badges

```diff
+No revocar insignias existentes
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_help%22)

> Re-apply badge actions (like adding to a group) if the user already has the badge.

```diff
+Reaplicar acciones de insignia (como añadir a un grupo) si el usuario ya tiene la insignia.
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_label%22)

> Re-apply actions to existing badges

```diff
+Reaplicar acciones a insignias existentes
```

#### [`fof-badges.forum.user.recalculate_modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.submit%22)

> Recalculate

```diff
+Recalcular
```

#### [`fof-badges.forum.user.recalculate_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.title%22)

> Recalculate Badges

```diff
+Recalcular insignias
```

#### [`fof-badges.forum.user.recalculate_reapplied`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_reapplied%22)

> Actions re-applied for {reapplied} badges

```diff
+Acciones reaplicadas para {reapplied} insignias
```

#### [`fof-badges.forum.user.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.recalculate_success%22)

> Badges recalculated! Awarded: {awarded}, Revoked: {revoked}, Re-applied: {reapplied}

```diff
+¡Insignias recalculadas! Otorgadas: {awarded}, Revocadas: {revoked}, Reaplicadas: {reapplied}
```

#### [`fof-badges.forum.user.remove_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.remove_favorite%22)

> Remove favorite

```diff
+Quitar favorita
```

#### [`fof-badges.forum.user.revoke_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.revoke_badge%22)

> Revoke badge

```diff
+Revocar insignia
```

#### [`fof-badges.forum.user.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from this user?

```diff
+¿Seguro que quieres revocar la insignia "{badge}" de este usuario?
```

#### [`fof-badges.forum.user.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.revoke_error%22)

> Failed to revoke badge.

```diff
+Error al revocar la insignia.
```

#### [`fof-badges.forum.user.select_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.select_badge%22)

> Select a badge...

```diff
+Seleccionar una insignia...
```

#### [`fof-badges.forum.user.select_badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.select_badge_label%22)

> Select Badge

```diff
+Seleccionar insignia
```

#### [`fof-badges.forum.user.set_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.set_favorite%22)

> Set as favorite

```diff
+Marcar como favorita
```

#### [`fof-badges.forum.user.show_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.show_badge%22)

> Show on profile

```diff
+Mostrar en perfil
```

#### [`fof-badges.forum.user.view_all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.forum.user.view_all_badges%22)

> View all badges

```diff
+Ver todas las insignias
```

#### [`fof-badges.lib.rarity_common`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.lib.rarity_common%22)

> Common

```diff
+Común
```

#### [`fof-badges.lib.rarity_epic`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.lib.rarity_epic%22)

> Epic

```diff
+Épica
```

#### [`fof-badges.lib.rarity_explain`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.lib.rarity_explain%22)

> {percent}% of users have this badge

```diff
+El {percent}% de los usuarios tiene esta insignia
```

#### [`fof-badges.lib.rarity_legendary`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.lib.rarity_legendary%22)

> Legendary

```diff
+Legendaria
```

#### [`fof-badges.lib.rarity_rare`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.lib.rarity_rare%22)

> Rare

```diff
+Rara
```

#### [`fof-badges.lib.rarity_uncommon`](https://weblate.rob006.net/translate/flarum2/fof-badges/es@formal/?q=context%3A%3D%22fof-badges.lib.rarity_uncommon%22)

> Uncommon

```diff
+Poco común
```


### `fof-best-answer` (missing)

#### [`fof-best-answer.admin.permissions.allow_select_own_post`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.permissions.allow_select_own_post%22)

> Select own post as Best Answer

```diff
+Selecciona tu propia publicación como Mejor Respuesta
```

#### [`fof-best-answer.admin.settings.discussion_sidebar_jump_button`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.discussion_sidebar_jump_button%22)

> Display jump to Best Answer button in discussion sidebar

```diff
+Mostrar el botón "Saltar a la mejor respuesta" en la barra lateral de la discusión
```

#### [`fof-best-answer.admin.settings.discussion_sidebar_jump_button_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.discussion_sidebar_jump_button_help%22)

> Adds a button to the discussion sidebar which jumps to the Best Answer in the stream of posts.

```diff
+Agrega un botón a la barra lateral de discusión que permite acceder directamente a la Mejor Respuesta en el flujo de publicaciones.
```

#### [`fof-best-answer.admin.settings.enabled_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.enabled_tags_help%22)

> Select which tags, if any, to enable Best Answers for. These tags will become "Q&amp;A" formatted tags, and will have the ability to set Best Answers.

```diff
+Seleccione que etiquetas desea habilitar para mostrar las Mejores Respuestas. Estas etiquetas tendrán formato de "Preguntas y Respuestas" y podrán configurarse para mostrar las Mejores Respuestas.
```

#### [`fof-best-answer.admin.settings.enabled_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.enabled_tags_label%22)

> Enabled Tags

```diff
+Etiquetas Habilitadas
```

#### [`fof-best-answer.admin.settings.label.tags`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.label.tags%22)

> Best Answer Tags

```diff
+Etiquetas de Mejor Respuesta
```

#### [`fof-best-answer.admin.settings.remind_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.remind_tags_help%22)

> Select which tags, if any, to send reminders for. Reminders will only be sent for discussions with these tags.

```diff
+Seleccione las etiquetas para las que desea recibir recordatorios. Solo se enviarán recordatorios para las conversaciones que contengan estas etiquetas.
```

#### [`fof-best-answer.admin.settings.remind_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.remind_tags_label%22)

> Reminder Tags

```diff
+Etiquetas de Recordatorio
```

#### [`fof-best-answer.admin.settings.select_best_answer_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_tags_help%22)

> Select which tags, if any, to add to discussions when a Best Answer is set. Only secondary tags are allowed. These tags will be removed if the Best Answer is removed.

```diff
+Seleccione las etiquetas que desee agregar a las discusiones cuando se marque la Mejor Respuesta. Solo se permiten etiquetas secundarias. Estas etiquetas se eliminarán si se elimina la Mejor Respuesta.
```

#### [`fof-best-answer.admin.settings.select_best_answer_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_tags_label%22)

> Tags for discussions with Best Answers

```diff
+Etiquetas para discusiones con Mejores Respuestas
```

#### [`fof-best-answer.admin.settings.show_max_lines_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.show_max_lines_help%22)

> Set to 0 to disable. If a post is longer than the configured amount of lines, it will be truncated in the post preview with a fade out effect.

```diff
+Establezca valor 0 para desactivarlo. Si una publicación es más larga que la cantidad de líneas configurada, se truncará en la vista previa con un efecto de desvanecimiento.
```

#### [`fof-best-answer.admin.settings.show_max_lines_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.show_max_lines_label%22)

> Max lines to show in post preview

```diff
+Máximo de líneas que se mostrarán en la vista previa de la publicación
```

#### [`fof-best-answer.admin.settings.tags_info`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.admin.settings.tags_info%22)

> When a tag is Best Answer enabled, assign permissions to each user group that may set answers (own discussion, any discussion). Permissions may be assigned globally (for any Best Answer anabled tag), or on a per tag basis.
>

```diff
+Cuando una etiqueta tiene habilitada la opción "Mejor Respuesta", asigne permisos a cada grupo de usuarios que pueda establecer respuestas (su propia discusión, cualquier discusión). Los permisos se pueden asignar globalmente (para cualquier etiqueta con la opción "Mejor respuesta" habilitada) o individualmente para cada etiqueta.
+
```

#### [`fof-best-answer.forum.discussion.jump_to_best_answer_button`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.forum.discussion.jump_to_best_answer_button%22)

> View Best Answer

```diff
+Ver Mejor Respuesta
```

#### [`fof-best-answer.forum.notification.preferences.select_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.select_best_answer%22)

> An automated reminder to select a best answer in a discussion I started

```diff
+Un recordatorio automático para seleccionar la mejor respuesta en una discusión que inicié
```

#### [`fof-best-answer.forum.user.best-answer-count`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.forum.user.best-answer-count%22)

> {count, plural, one { {count} best answer} other {{count} best answers}}

```diff
+{count, plural, one { {count} best answer} other {{count} best answers}}
```

#### [`fof-user-directory.lib.sort.least_best_answers`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-user-directory.lib.sort.least_best_answers%22)

> Least best answers

```diff
+Las menos mejores respuestas
```

#### [`fof-user-directory.lib.sort.most_best_answers`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-user-directory.lib.sort.most_best_answers%22)

> Most best answers

```diff
+Las más mejores respuestas
```


### `fof-categories` (missing)

#### [`fof-categories.admin.basics.categories_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.basics.categories_label%22)

> Categories

```diff
+Categorías
```

#### [`fof-categories.admin.headings.child_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.headings.child_display%22)

> Child Category Display

```diff
+Mostrar Subcategoría
```

#### [`fof-categories.admin.headings.layout`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.headings.layout%22)

> Layout

```diff
+Disposición
```

#### [`fof-categories.admin.headings.nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.headings.nav%22)

> Navigation

```diff
+Navegación
```

#### [`fof-categories.admin.headings.parent_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.headings.parent_display%22)

> Parent Category Display

```diff
+Mostrar Categoría Padre
```

#### [`fof-categories.admin.headings.performance`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.headings.performance%22)

> Performance

```diff
+Performance
```

#### [`fof-categories.admin.help.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.help.child_bare_icon%22)

> Should icons on child categories be displayed without a circular background?

```diff
+¿Deben mostrarse los iconos de las subcategorías sin fondo circular?
```

#### [`fof-categories.admin.help.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.help.full_page_desktop%22)

> Should the sidebar nav menu be collapsed to a row (like on the traditional tags page)? This will also hide widgets (such as Friends of Flarum Forum Statistics) from the categories page navbar.

```diff
+¿Debería minimizarse el menú de navegación lateral a una sola fila (como en la página de etiquetas tradicional)? Esto también ocultará los widgets (como las estadísticas del foro Friends of Flarum) de la barra de navegación de la página de categorías.
```

#### [`fof-categories.admin.help.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.help.small_forum_optimized%22)

> This will give more accurate discussion/post counts, but will slow medium and large forums dramatically.

```diff
+Esto proporcionará recuentos de discusiones/publicaciones más precisos, pero ralentizará drásticamente los foros medianos y grandes.
```

#### [`fof-categories.admin.labels.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.child_bare_icon%22)

> Bare child icons?

```diff
+¿Sólo íconos hijos?
```

#### [`fof-categories.admin.labels.compact_mobile_mode`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.compact_mobile_mode%22)

> Compact mobile mode

```diff
+Modo móvil compacto
```

#### [`fof-categories.admin.labels.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.full_page_desktop%22)

> Full page desktop?

```diff
+¿Pantalla completa en PC?
```

#### [`fof-categories.admin.labels.keep_tags_nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.keep_tags_nav%22)

> Keep the tags page link in the nav sidebar?

```diff
+¿Mantener el enlace a la página de etiquetas en la barra lateral de navegación?
```

#### [`fof-categories.admin.labels.parent_remove_description`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_description%22)

> Hide descriptions for top-level tags?

```diff
+¿Ocultar las descripciones de las etiquetas de nivel superior?
```

#### [`fof-categories.admin.labels.parent_remove_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_icon%22)

> Hide icons for top-level tags?

```diff
+¿Ocultar iconos para las etiquetas de nivel superior?
```

#### [`fof-categories.admin.labels.parent_remove_last_discussion`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_last_discussion%22)

> Hide most recent discussions for top-level tags?

```diff
+¿Ocultar las discusiones más recientes para las etiquetas de nivel superior?
```

#### [`fof-categories.admin.labels.parent_remove_stats`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_stats%22)

> Hide stats for top-level tags?

```diff
+¿Ocultar las estadísticas de las etiquetas de nivel superior?
```

#### [`fof-categories.admin.labels.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.labels.small_forum_optimized%22)

> Optimize for small forums?

```diff
+¿Optimizar para foros pequeños?
```

#### [`fof-categories.admin.title`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.admin.title%22)

> Categories Settings

```diff
+Ajustes de Categorías
```

#### [`fof-categories.forum.all_categories.meta_description_text`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.all_categories.meta_description_text%22)

> All Categories

```diff
+Todas las Categorías
```

#### [`fof-categories.forum.all_categories.meta_title_text`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.all_categories.meta_title_text%22)

> =&gt; fof-categories.ref.categories

```diff
+=> fof-categories.ref.categories
```

#### [`fof-categories.forum.header.back_to_categories_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.header.back_to_categories_tooltip%22)

> Back to Categories

```diff
+Volver a Categorías
```

#### [`fof-categories.forum.index.categories_link`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.index.categories_link%22)

> =&gt; fof-categories.ref.categories

```diff
+=> fof-categories.ref.categories
```

#### [`fof-categories.forum.last_discussion_widget.no_discussions`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.last_discussion_widget.no_discussions%22)

> No Discussions (Yet!)

```diff
+Sin discusiones (¡todavía!)
```

#### [`fof-categories.forum.stat-widgets.discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.stat-widgets.discussion_label%22)

> Discussions

```diff
+Discusiones
```

#### [`fof-categories.forum.stat-widgets.post_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.forum.stat-widgets.post_label%22)

> Posts

```diff
+Publicaciones
```

#### [`fof-categories.ref.categories`](https://weblate.rob006.net/translate/flarum2/fof-categories/es@formal/?q=context%3A%3D%22fof-categories.ref.categories%22)

> Categories

```diff
+Categorías
```


### `fof-checklist` (missing)

#### [`fof-checklist.admin.settings.cross_out_completed_items`](https://weblate.rob006.net/translate/flarum2/fof-checklist/es@formal/?q=context%3A%3D%22fof-checklist.admin.settings.cross_out_completed_items%22)

> Cross out completed checklist items?

```diff
+¿Tachar los elementos completados de la lista?
```

#### [`fof-checklist.lib.composer.checklist_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-checklist/es@formal/?q=context%3A%3D%22fof-checklist.lib.composer.checklist_tooltip%22)

> Toggle Checklist

```diff
+Interruptor
```


### `fof-clockwork` (missing)

#### [`fof-clockwork.admin.dashboard.button_label`](https://weblate.rob006.net/translate/flarum2/fof-clockwork/es@formal/?q=context%3A%3D%22fof-clockwork.admin.dashboard.button_label%22)

> Open Clockwork

```diff
+Abrir Clockwork
```


### `fof-default-user-preferences` (missing)

#### [`fof-default-user-preferences.admin.settings.discloseOnline`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.discloseOnline%22)

> Disclose Online

```diff
+Mostrar el estado Online
```

#### [`fof-default-user-preferences.admin.settings.discloseOnline-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.discloseOnline-help%22)

> When enabled, new users will allow others to see when they are online. Admins and other users with permission will still be able to see online status regardless of this setting.

```diff
+Cuando está habilitada, los nuevos usuarios permitirán que otros vean cuándo están en línea. Los administradores y otros usuarios con permiso podrán seguir viendo el estado en línea independientemente de esta configuración.
```

#### [`fof-default-user-preferences.admin.settings.followAfterReply`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply%22)

> Follow after reply

```diff
+Seguir después de responder
```

#### [`fof-default-user-preferences.admin.settings.followAfterReply-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply-help%22)

> When enabled, new users will automatically follow discussions they reply to or comment on.

```diff
+Cuando está activada, los nuevos usuarios seguirán automáticamente las discusiones en las que respondan o comenten.
```

#### [`fof-default-user-preferences.admin.settings.groupMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.groupMentioned%22)

> Group mentioned email

```diff
+Email al etiquetar un grupo
```

#### [`fof-default-user-preferences.admin.settings.indexProfile`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.indexProfile%22)

> Index Profile

```diff
+Perfil Indexado
```

#### [`fof-default-user-preferences.admin.settings.indexProfile-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.indexProfile-help%22)

> When enabled, new users will allow search engines to index their profile page, unless blocked by other site or extension settings.

```diff
+Cuando está habilitada, los nuevos usuarios permitirán que los motores de búsqueda indexen su página de perfil, a menos que lo bloqueen otras configuraciones del sitio o de la extensión.
```

#### [`fof-default-user-preferences.admin.settings.postMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned%22)

> Post mentioned email

```diff
+Email al ser etiquetada la publicación
```

#### [`fof-default-user-preferences.admin.settings.postMentioned-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned-help%22)

> When enabled, new users will automatically opt into receiving an email notification when one of their posts is mentioned.

```diff
+Cuando esta opción esté activada, los nuevos usuarios aceptarán automáticamente recibir una notificación por email cuando se mencione una de sus publicaciones.
```

#### [`fof-default-user-preferences.admin.settings.userMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned%22)

> User mentioned email

```diff
+Email al ser etiquetado el usuario
```

#### [`fof-default-user-preferences.admin.settings.userMentioned-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned-help%22)

> When enabled, new users will automatically opt into receiving an email notification when they are @mentioned.

```diff
+Cuando está habilitada, los nuevos usuarios optarán automáticamente por recibir una notificación por email cuando se les mencione con @ejemplo.
```


### `fof-discussion-thumbnail` (missing)

#### [`fof-discussion-thumbnail.admin.settings.link_to_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-thumbnail/es@formal/?q=context%3A%3D%22fof-discussion-thumbnail.admin.settings.link_to_discussion_label%22)

> Make discussion thumbnails link to discussion and not user

```diff
+Hacer que las miniaturas de las discusiones vayan para la discusión y no al usuario
```


### `fof-discussion-views` (missing)

#### [`fof-discussion-views.admin.permissions.reset_views_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/es@formal/?q=context%3A%3D%22fof-discussion-views.admin.permissions.reset_views_label%22)

> Set discussion views

```diff
+Establecer vistas de la discusión
```

#### [`fof-discussion-views.admin.settings.ignore_crawlers`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/es@formal/?q=context%3A%3D%22fof-discussion-views.admin.settings.ignore_crawlers%22)

> Ignore crawler visits

```diff
+Ignorar visitas de rastreadores
```

#### [`fof-discussion-views.forum.discussion_controls.resetviews_button`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/es@formal/?q=context%3A%3D%22fof-discussion-views.forum.discussion_controls.resetviews_button%22)

> Set view count

```diff
+Establecer contador de vistas
```

#### [`fof-discussion-views.forum.modal_resetviews.label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/es@formal/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.label%22)

> Set to view count

```diff
+Establecer contador de vistas
```

#### [`fof-discussion-views.forum.modal_resetviews.submit`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/es@formal/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.submit%22)

> Submit

```diff
+Enviar
```

#### [`fof-discussion-views.forum.modal_resetviews.title`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/es@formal/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.title%22)

> Reset discussion view count

```diff
+Restablecer contador de vistas de la discusión
```


### `fof-forum-statistics-widget` (missing)

#### [`fof-forum-statistics-widget.admin.settings.cache_duration_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/es@formal/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.cache_duration_help%22)

> Specify how long the stats for the widget should be cached for (in seconds). &lt;code&gt;0&lt;/code&gt; to disable caching (not recommended).

```diff
+Especifique cuánto tiempo deben almacenarse en caché las estadísticas del widget (en segundos). <code>0</code> para deshabilitar el almacenamiento en caché (no recomendado).
```

#### [`fof-forum-statistics-widget.admin.settings.cache_duration_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/es@formal/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.cache_duration_label%22)

> Cache Duration

```diff
+Duración de Caché
```

#### [`fof-forum-statistics-widget.admin.settings.classic_look_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/es@formal/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.classic_look_help%22)

> Restore the original widget appearance used before the fof/forum-widgets-core integration.

```diff
+Restaurar la apariencia original del widget utilizada antes de la integración de fof/forum-widgets-core.
```

#### [`fof-forum-statistics-widget.admin.settings.classic_look_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/es@formal/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.classic_look_label%22)

> Classic Look

```diff
+Vista Clásica
```

#### [`fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/es@formal/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_help%22)

> If enabled, the stats cache will be flushed when a new user registers on the forum.

```diff
+Si está habilitada, la caché de estadísticas se vaciará cuando un nuevo usuario se registre en el foro.
```

#### [`fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/es@formal/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_label%22)

> Flush Stats Cache on New Registration

```diff
+Vaciar la caché de estadísticas al registrarse
```


### `fof-forum-stats-widget` (missing)

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/es@formal/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
+El número de partes decimales a mostrar para número largos (0-2).
```

#### [`fof-forum-stats-widget.admin.settings.decimal_places.label`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/es@formal/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.label%22)

> Decimal Places

```diff
+Parte Decimal
```

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/es@formal/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
+Publicaciones
```

#### [`fof-forum-stats-widget.forum.widget.stats.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/es@formal/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.discussion_count%22)

> Discussions

```diff
+Discusiones
```

#### [`fof-forum-stats-widget.forum.widget.stats.user_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/es@formal/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.user_count%22)

> Users

```diff
+Usuarios
```

#### [`fof-forum-stats-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/es@formal/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.title%22)

> Forum Stats

```diff
+Estadísticas del foro
```


### `fof-forum-widgets-core` (missing)

#### [`fof-forum-widgets-core.admin.cache_not_writable_warning`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/es@formal/?q=context%3A%3D%22fof-forum-widgets-core.admin.cache_not_writable_warning%22)

> Cache is currently not writable, this will prevent certain widgets from working. Please fix your storage directory's permissions.

```diff
+Actualmente, la caché no tiene permisos de escritura, lo que impedirá que ciertos widgets funcionen. Corrija los permisos de su directorio de almacenamiento.
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/es@formal/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load%22)

> Prefer loading all widgets data with initial page response.

```diff
+Preferiblemente cargar todos los datos de los widgets ni bien ingreso a la página.
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/es@formal/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help%22)

> Instead of loading widget data after initial page load by sending API requests, the data will be (when possible) loaded with the inital load.

```diff
+En lugar de cargar los datos del widget después de la carga inicial de la página mediante el envío de solicitudes a la API, los datos se cargarán (cuando sea posible) con la carga inicial.
```


### `fof-geoip` (missing)

#### [`fof-default-user-preferences.admin.settings.showIPCountry`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.showIPCountry%22)

> Show the flag of the country the user posts from

```diff
+Mostrar la bandera del país desde el que el usuario publica
```

#### [`fof-default-user-preferences.admin.settings.showIPCountry-help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.showIPCountry-help%22)

> This is based on their IP address at the time of posting. The country flag (if enabled) will be visible to all users. Admin users and moderators will see the IP address in the tooltip.

```diff
+Esto se basa en su dirección IP al momento de publicar. La bandera del país (si está habilitada) será visible para todos los usuarios. Los administradores y moderadores verán la dirección IP en la información emergente.
```

#### [`fof-geoip.admin.permissions.see_country`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.permissions.see_country%22)

> Always display the country of the IP address

```diff
+Mostrar siempre el país de la dirección IP
```

#### [`fof-geoip.admin.settings.access_key_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.access_key_label%22)

> Access Key

```diff
+Access Key
```

#### [`fof-geoip.admin.settings.error_code_prefix`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.error_code_prefix%22)

> Code:

```diff
+Code:
```

#### [`fof-geoip.admin.settings.error_prefix`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.error_prefix%22)

> Error:

```diff
+Error:
```

#### [`fof-geoip.admin.settings.general.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.general.heading%22)

> General Settings

```diff
+Configuraciones Generales
```

#### [`fof-geoip.admin.settings.general.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.general.help%22)

> These settings control the general behavior of the extension.

```diff
+Estos ajustes controlan el comportamiento general de la extensión.
```

#### [`fof-geoip.admin.settings.providers.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.providers.heading%22)

> IP Lookup Service

```diff
+Servicio de búsqueda de IP
```

#### [`fof-geoip.admin.settings.providers.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.providers.help%22)

> Choose a service to use for IP lookups. Some services have rate limits, so be sure to check the service's documentation for more information.

```diff
+Elige un servicio para realizar búsquedas de direcciones IP. Algunos servicios tienen límites de uso, así que asegúrate de consultar la documentación del servicio para obtener más información.
```

#### [`fof-geoip.admin.settings.quota_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.quota_label%22)

> Lookup quota

```diff
+Cuota de búsqueda
```

#### [`fof-geoip.admin.settings.raw_http_response_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.raw_http_response_label%22)

> Raw HTTP Response Body

```diff
+Raw HTTP Response Body
```

#### [`fof-geoip.admin.settings.request_options_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.request_options_label%22)

> Request Options

```diff
+Request Options
```

#### [`fof-geoip.admin.settings.request_url_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.request_url_label%22)

> Request URL

```diff
+Request URL
```

#### [`fof-geoip.admin.settings.response_headers_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.response_headers_label%22)

> Response Headers

```diff
+Response Headers
```

#### [`fof-geoip.admin.settings.service_ipapi-pro_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi-pro_description%22)

> Use &lt;b&gt;https://members.ip-api.com/#pricing&lt;/b&gt;. Pro plan has unlimited usage.

```diff
+Utilice <b>https://members.ip-api.com/#pricing</b>. El plan Pro tiene uso ilimitado.
```

#### [`fof-geoip.admin.settings.service_ipapi-pro_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi-pro_label%22)

> IP Api Pro

```diff
+IP Api Pro
```

#### [`fof-geoip.admin.settings.service_ipapi_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi_description%22)

> Use &lt;b&gt;http://ip-api.com&lt;/b&gt; to make up to 45 lookups per minute for free. If you make more, requests will be queued and looked up once the time window resets.

```diff
+Utilice <b>http://ip-api.com</b> para realizar hasta 45 consultas por minuto de forma gratuita. Si realiza más, las solicitudes se pondrán en cola y se procesarán una vez que se reinicie el intervalo de tiempo.
```

#### [`fof-geoip.admin.settings.service_ipapi_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi_label%22)

> IP Api

```diff
+IP Api
```

#### [`fof-geoip.admin.settings.service_ipdata_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipdata_description%22)

> Use &lt;b&gt;https://ipdata.co&lt;/b&gt; to make up to 1,500 lookups daily for free. Paid plans for higher usage limits are also available.

```diff
+Utiliza <b>https://ipdata.co</b> para realizar hasta 1500 consultas diarias gratuitas. También hay planes de pago disponibles con límites de uso superiores.
```

#### [`fof-geoip.admin.settings.service_ipdata_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipdata_label%22)

> IPData

```diff
+IPData
```

#### [`fof-geoip.admin.settings.service_ipinfo-lite_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipinfo-lite_description%22)

> Use &lt;b&gt;https://ipinfo.io&lt;/b&gt; to retrieve IP information without any rate limiting or restrictions. Requires registration for a free API key.

```diff
+Utilice <b>https://ipinfo.io</b> para obtener información de IP sin limitaciones de velocidad ni restricciones. Se requiere registro para obtener una clave API gratuita.
```

#### [`fof-geoip.admin.settings.service_ipinfo-lite_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipinfo-lite_label%22)

> IPInfo Lite

```diff
+IPInfo Lite
```

#### [`fof-geoip.admin.settings.service_iplocation_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_iplocation_description%22)

> Use &lt;b&gt;https://www.iplocation.net/&lt;/b&gt; to retrieve country and ISP data. Lookup rate limits are unknown.

```diff
+Utilice <b>https://www.iplocation.net/</b> para obtener información sobre el país y el proveedor de servicios de Internet (ISP). Se desconocen los límites de velocidad de las consultas.
```

#### [`fof-geoip.admin.settings.service_iplocation_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_iplocation_label%22)

> IP Location

```diff
+IP Location
```

#### [`fof-geoip.admin.settings.service_ipsevenex_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipsevenex_description%22)

> Use &lt;b&gt;https://7x.ax&lt;/b&gt; to get a free API key for up to 20 requests per minute. Paid plans for higher usage limits are also available.

```diff
+Utilice <b>https://7x.ax</b> para obtener una clave API gratuita con un límite de hasta 20 solicitudes por minuto. También hay planes de pago disponibles para límites de uso superiores.
```

#### [`fof-geoip.admin.settings.service_ipsevenex_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipsevenex_label%22)

> 7x Geolocation API

```diff
+7x Geolocation API
```

#### [`fof-geoip.admin.settings.service_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.service_label%22)

> Service

```diff
+Service
```

#### [`fof-geoip.admin.settings.show_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.show_flag_help%22)

> Without disclosing the IP address, show the country flag of the IP address of the post author, when the user opts in via their preferences.

```diff
+Sin revelar la dirección IP, muestre la bandera del país correspondiente a la dirección IP del autor de la publicación, cuando el usuario lo autorice a través de sus preferencias.
```

#### [`fof-geoip.admin.settings.show_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.show_flag_label%22)

> Show country flag for each post

```diff
+Mostrar la bandera del país para cada publicación
```

#### [`fof-geoip.admin.settings.status_error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.status_error%22)

> ✗ Error

```diff
+✗ Error
```

#### [`fof-geoip.admin.settings.status_success`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.status_success%22)

> ✓ Success

```diff
+✓ Perfecto
```

#### [`fof-geoip.admin.settings.status_unknown`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.status_unknown%22)

> Unknown

```diff
+Desconocido
```

#### [`fof-geoip.admin.settings.test.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test.heading%22)

> Test Service Configuration

```diff
+Probar configuración del servicio
```

#### [`fof-geoip.admin.settings.test.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test.help%22)

> Test your IP lookup service configuration with a sample IP address. Make sure to save your settings first before testing.

```diff
+Pruebe la configuración de su servicio de búsqueda de IP con una dirección IP de ejemplo. Asegúrese de guardar la configuración antes de realizar la prueba.
```

#### [`fof-geoip.admin.settings.test_button`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_button%22)

> Test Service

```diff
+Probar Servicio
```

#### [`fof-geoip.admin.settings.test_error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_error%22)

> An error occurred while testing the service.

```diff
+Se produjo un error al probar el servicio.
```

#### [`fof-geoip.admin.settings.test_error_details_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_error_details_label%22)

> Error Details:

```diff
+Detalles del Error:
```

#### [`fof-geoip.admin.settings.test_http_status_code_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_http_status_code_label%22)

> HTTP Status Code:

```diff
+HTTP Status Code:
```

#### [`fof-geoip.admin.settings.test_ip_required`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_ip_required%22)

> Please enter an IP address to test.

```diff
+Introduzca una dirección IP para realizar la prueba.
```

#### [`fof-geoip.admin.settings.test_processed_service_response_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_processed_service_response_label%22)

> Processed Service Response:

```diff
+Respuesta de servicio procesada:
```

#### [`fof-geoip.admin.settings.test_response_time_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_response_time_label%22)

> Response Time:

```diff
+Tiempo de Respuesta:
```

#### [`fof-geoip.admin.settings.test_result_title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_result_title%22)

> Test Result

```diff
+Resultados de la Prueba
```

#### [`fof-geoip.admin.settings.test_service_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_help%22)

> Enter an IPv4 or IPv6 address to test your current service configuration.

```diff
+Introduzca una dirección IPv4 o IPv6 para probar la configuración actual de su servicio.
```

#### [`fof-geoip.admin.settings.test_service_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_label%22)

> Test IP Lookup Service

```diff
+Servicio de prueba de búsqueda de IP
```

#### [`fof-geoip.admin.settings.test_service_label_result`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_label_result%22)

> Service:

```diff
+Servicio:
```

#### [`fof-geoip.admin.settings.test_status_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_status_label%22)

> Status:

```diff
+Estado:
```

#### [`fof-geoip.admin.settings.test_timestamp_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.test_timestamp_label%22)

> Timestamp:

```diff
+Timestamp:
```

#### [`fof-geoip.admin.settings.testing`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.admin.settings.testing%22)

> Testing...

```diff
+Probando...
```

#### [`fof-geoip.forum.user.settings.ip_country`](https://weblate.rob006.net/translate/flarum2/fof-geoip/es@formal/?q=context%3A%3D%22fof-geoip.forum.user.settings.ip_country%22)

> Show the flag of the country I post from, based on my IP address

```diff
+Mostrar la bandera del país desde donde publico
```


### `fof-github-sponsors` (missing)

#### [`fof-github-sponsors.admin.account_types.organization`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.account_types.organization%22)

> Organization

```diff
+Organización
```

#### [`fof-github-sponsors.admin.account_types.user`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.account_types.user%22)

> User

```diff
+Usuario
```

#### [`fof-github-sponsors.admin.settings.account_type_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_help%22)

> Select whether you're tracking sponsors for a personal GitHub user account or an organization account.

```diff
+Selecciona si estás realizando un seguimiento de los patrocinadores de una cuenta de usuario personal de GitHub o de una cuenta de organización.
```

#### [`fof-github-sponsors.admin.settings.account_type_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_label%22)

> Account Type

```diff
+Tipo de Cuenta
```

#### [`fof-github-sponsors.admin.settings.api_token_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_help%22)

> Create a personal access token at &lt;a&gt;https://github.com/settings/tokens/new&lt;/a&gt; with the &lt;code&gt;user&lt;/code&gt; and &lt;code&gt;read:org&lt;/code&gt; scopes. This token is used to fetch your sponsor information from GitHub.

```diff
+Crear un token de acceso personal en <a>https://github.com/settings/tokens/new</a> con el <code>usuario</code> y alcance <code>read:org</code>. Este token se utiliza para obtener la información de tu patrocinador desde GitHub.
```

#### [`fof-github-sponsors.admin.settings.api_token_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_label%22)

> API Token

```diff
+Token API
```

#### [`fof-github-sponsors.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_help%22)

> Select which Flarum user group sponsors should be added to. Users will be automatically added when they become sponsors and removed when they stop sponsoring.

```diff
+Seleccione a qué grupo de usuarios de Flarum se deben agregar los patrocinadores. Los usuarios se agregarán automáticamente cuando se conviertan en patrocinadores y se eliminarán cuando dejen de serlo.
```

#### [`fof-github-sponsors.admin.settings.group_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_label%22)

> Group to Assign

```diff
+Grupo para Asignar
```

#### [`fof-github-sponsors.admin.settings.login_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_help%22)

> Enter your GitHub username (for user accounts) or organization name (for organizations). This is the account whose sponsors will be synchronized.

```diff
+Introduce tu nombre de usuario de GitHub (para cuentas de usuario) o el nombre de tu organización (para organizaciones). Esta es la cuenta cuyos patrocinadores se sincronizarán.
```

#### [`fof-github-sponsors.admin.settings.login_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/es@formal/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_label%22)

> Login

```diff
+Ingresar
```


### `fof-linguist` (missing)

#### [`fof-linguist.admin.buttons.apply`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.apply%22)

> Apply

```diff
+Aplicar
```

#### [`fof-linguist.admin.buttons.copy-original`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.copy-original%22)

> Copy original text

```diff
+Copiar texto original
```

#### [`fof-linguist.admin.buttons.delete-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-all%22)

> Delete all translations

```diff
+Borrar todas las traducciones
```

#### [`fof-linguist.admin.buttons.delete-all-confirm`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-all-confirm%22)

> This will delete ALL of your {count} custom translations. Make sure you have exported or backed up everything you might have wanted to keep.
>

```diff
+Esto eliminará TODAS tus {count} traducciones personalizadas. Asegúrate de haber exportado o realizado una copia de seguridad de todo lo que quisieras conservar.
+
```

#### [`fof-linguist.admin.buttons.delete-redundant`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-redundant%22)

> Delete redundant translations

```diff
+Borrar traducciones redundantes
```

#### [`fof-linguist.admin.buttons.delete-redundant-confirm`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-redundant-confirm%22)

> This will delete {count} translations that have identical original and custom values. This can be useful to clean up after a language pack update.
>

```diff
+Esto eliminará {count} traducciones que tengan valores originales y personalizados idénticos. Esto puede ser útil para limpiar después de una actualización del paquete de idioma.
+
```

#### [`fof-linguist.admin.buttons.load-more`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.load-more%22)

> Load more

```diff
+Cargar más
```

#### [`fof-linguist.admin.buttons.reset`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.buttons.reset%22)

> Restore original

```diff
+Restaurar original
```

#### [`fof-linguist.admin.clear-cache.button`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.clear-cache.button%22)

> Clear cache now

```diff
+Limpiar caché
```

#### [`fof-linguist.admin.clear-cache.text`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.clear-cache.text%22)

> New translations have not yet been applied. Note: clearing the cache can momentarily slow down your forum.
>

```diff
+Las nuevas traducciones aún no se han aplicado. Nota: borrar caché puede ralentizar momentáneamente el foro.
+
```

#### [`fof-linguist.admin.coverage.all-namespaces`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.all-namespaces%22)

> All

```diff
+Todos
```

#### [`fof-linguist.admin.coverage.apply-missing-filter`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.apply-missing-filter%22)

> Show matching missing translations

```diff
+Mostrar traducciones faltantes que coinciden
```

#### [`fof-linguist.admin.coverage.column-options.locale`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.column-options.locale%22)

> By language

```diff
+Por idioma
```

#### [`fof-linguist.admin.coverage.column-options.namespace`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.column-options.namespace%22)

> By frontend

```diff
+Por frontend
```

#### [`fof-linguist.admin.coverage.columns.all-except-admin`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.all-except-admin%22)

> Forum and other frontends

```diff
+Foro y otros frontends
```

#### [`fof-linguist.admin.coverage.columns.all-frontends`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.all-frontends%22)

> Show all frontends

```diff
+Mostrar todos los frontends
```

#### [`fof-linguist.admin.coverage.columns.namespace`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.namespace%22)

> Namespace

```diff
+Namespace
```

#### [`fof-linguist.admin.coverage.columns.total`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.total%22)

> Total

```diff
+Total
```

#### [`fof-linguist.admin.coverage.count.details`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.count.details%22)

> {total} total / {original} original / {custom} custom

```diff
+{total} total / {original} original / {custom} personalizado
```

#### [`fof-linguist.admin.coverage.count.percent`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.count.percent%22)

> {percent} %

```diff
+{percent} %
```

#### [`fof-linguist.admin.coverage.count.total`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.count.total%22)

> {translated} / {total}

```diff
+{translated} / {total}
```

#### [`fof-linguist.admin.coverage.total-options.count`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.total-options.count%22)

> Count

```diff
+Contar
```

#### [`fof-linguist.admin.coverage.total-options.percent`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.coverage.total-options.percent%22)

> Percent

```diff
+Por ciento
```

#### [`fof-linguist.admin.export.download`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.download%22)

> Download

```diff
+Descargar
```

#### [`fof-linguist.admin.export.include-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.include-all%22)

> Include translations defined for "All" languages

```diff
+Incluir las traducciones definidas para "Todos" los idiomas
```

#### [`fof-linguist.admin.export.include-originals`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.include-originals%22)

> Include original translations

```diff
+Incluir traducciones originales
```

#### [`fof-linguist.admin.export.locale`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.locale%22)

> Locale

```diff
+Lugar
```

#### [`fof-linguist.admin.export.locale-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.locale-all%22)

> Pseudo-locale "All"

```diff
+Pseudolocalización "Todos"
```

#### [`fof-linguist.admin.export.namespace`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.namespace%22)

> Namespace

```diff
+Namespace
```

#### [`fof-linguist.admin.export.namespace-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.namespace-all%22)

> All

```diff
+Todos
```

#### [`fof-linguist.admin.export.output`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.output%22)

> Output

```diff
+Respuesta
```

#### [`fof-linguist.admin.export.output-empty`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.output-empty%22)

> Empty output

```diff
+Respuesta vacía
```

#### [`fof-linguist.admin.export.output-loading`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.output-loading%22)

> Loading output...

```diff
+Cargando respuesta...
```

#### [`fof-linguist.admin.export.title`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.title%22)

> Export

```diff
+Exportar
```

#### [`fof-linguist.admin.export.warning`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.export.warning%22)

> The export format uses Flarum's Yaml-based translation files and is designed to share translations between forums and with language pack maintainers. The format is not designed to move all translations to a new forum. Depending on your use case, copying the database directly might be a better idea.
>

```diff
+El formato de exportación utiliza los archivos de traducción basados en YAML de Flarum y está diseñado para compartir traducciones entre foros y con los responsables del mantenimiento de los paquetes de idiomas. Este formato no está diseñado para transferir todas las traducciones a un nuevo foro. Dependiendo de sus necesidades, copiar la base de datos directamente podría ser una mejor opción.
+
```

#### [`fof-linguist.admin.filters.for-extension`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.for-extension%22)

> For extension

```diff
+Para extensión
```

#### [`fof-linguist.admin.filters.frontend`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.frontend%22)

> For frontend

```diff
+Para frontend
```

#### [`fof-linguist.admin.filters.frontend-all-except-admin`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.frontend-all-except-admin%22)

> All except Admin

```diff
+Todo excepto Admin
```

#### [`fof-linguist.admin.filters.mass-edit`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.mass-edit%22)

> Mass edit

```diff
+Edición masiva
```

#### [`fof-linguist.admin.filters.missing`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.missing%22)

> Find missing translations

```diff
+Buscar traducciones faltantes
```

#### [`fof-linguist.admin.filters.missing-middle-label`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.missing-middle-label%22)

> translations in

```diff
+traducción en
```

#### [`fof-linguist.admin.filters.negation-options.with`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.negation-options.with%22)

> With

```diff
+Con
```

#### [`fof-linguist.admin.filters.negation-options.without`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.negation-options.without%22)

> Without

```diff
+Sin
```

#### [`fof-linguist.admin.filters.operation-options.and`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.operation-options.and%22)

> All of

```diff
+Todo
```

#### [`fof-linguist.admin.filters.operation-options.or`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.operation-options.or%22)

> Either of

```diff
+Cualquiera de los dos
```

#### [`fof-linguist.admin.filters.results`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.results%22)

> Showing {shown} of {total} matching translations

```diff
+Mostrando {shown} de {total} traducciones coincidentes
```

#### [`fof-linguist.admin.filters.search`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.search%22)

> Search translation strings...

```diff
+Buscar strings de traducción...
```

#### [`fof-linguist.admin.filters.type-options.any`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.type-options.any%22)

> Original or Custom

```diff
+Original o Personalizado
```

#### [`fof-linguist.admin.filters.type-options.original`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.type-options.original%22)

> Original

```diff
+Original
```

#### [`fof-linguist.admin.filters.type-options.own`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.type-options.own%22)

> Custom

```diff
+Personalizado
```

#### [`fof-linguist.admin.filters.with-own-translations`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.filters.with-own-translations%22)

> My translations

```diff
+Mis traducciones
```

#### [`fof-linguist.admin.import.input`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.input%22)

> Input

```diff
+Ingreso
```

#### [`fof-linguist.admin.import.input-placeholder`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.input-placeholder%22)

> Drag and drop or paste a Yaml file here

```diff
+Arrastra y suelta o pega un archivo YAML aquí
```

#### [`fof-linguist.admin.import.locale`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.locale%22)

> Locale

```diff
+Localización
```

#### [`fof-linguist.admin.import.locale-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.locale-all%22)

> Pseudo-locale "All"

```diff
+Pseudolocalización "Todos"
```

#### [`fof-linguist.admin.import.override-existing`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.override-existing%22)

> Override my existing custom translations

```diff
+Anular mis traducciones personalizadas existentes
```

#### [`fof-linguist.admin.import.results`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.results%22)

> The import is finished. {imported} strings have been imported and {identical} identical strings were skipped. The page will now refresh to show the new translations.
>

```diff
+La importación ha finalizado. Se han importado los strings {imported} y se han omitido los strings idénticos {identical}. La página se actualizará para mostrar las nuevas traducciones.
+
```

#### [`fof-linguist.admin.import.results-with-ignore`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.results-with-ignore%22)

> The import is finished. {imported} strings have been imported, {ignored} existing strings have been ignored and {identical} identical strings were skipped. The page will now refresh to show the new translations.
>

```diff
+La importación ha finalizado. Se han importado los strings {imported}, se han ignorado los strings existentes {ignored} y se han omitido los strings idénticos {identical}. La página se actualizará para mostrar las nuevas traducciones.
+
```

#### [`fof-linguist.admin.import.submit`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.submit%22)

> Import

```diff
+Importar
```

#### [`fof-linguist.admin.import.title`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.import.title%22)

> Import

```diff
+Importar
```

#### [`fof-linguist.admin.known-frontend.admin`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-frontend.admin%22)

> Admin

```diff
+Admin
```

#### [`fof-linguist.admin.known-frontend.api`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-frontend.api%22)

> API

```diff
+API
```

#### [`fof-linguist.admin.known-frontend.forum`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-frontend.forum%22)

> Forum

```diff
+Foro
```

#### [`fof-linguist.admin.known-frontend.lib`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-frontend.lib%22)

> Lib (used on both Forum and Admin)

```diff
+Biblioteca (Lib)(utilizada tanto en el foro como en la administración)
```

#### [`fof-linguist.admin.known-frontend.ref`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-frontend.ref%22)

> Ref (re-used in other keys)

```diff
+Referencia (Ref)(reutilizada en otras claves)
```

#### [`fof-linguist.admin.known-namespace.core`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-namespace.core%22)

> Flarum Core

```diff
+Flarum Core
```

#### [`fof-linguist.admin.known-namespace.validation`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.known-namespace.validation%22)

> Validation Errors

```diff
+Errores de Validación
```

#### [`fof-linguist.admin.locales.all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.locales.all%22)

> All

```diff
+Todo
```

#### [`fof-linguist.admin.permissions.view_string_keys`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.permissions.view_string_keys%22)

> View translation string keys

```diff
+Ver string keys de traducción
```

#### [`fof-linguist.admin.placeholder.all-locales`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.placeholder.all-locales%22)

> A text defined here will be shown in all languages

```diff
+A texto definido aquí será mostrado en todos los idiomas
```

#### [`fof-linguist.admin.placeholder.hint`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.placeholder.hint%22)

> Original value:

```diff
+Valor original:
```

#### [`fof-linguist.admin.placeholder.not-translated`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.placeholder.not-translated%22)

> Not translated

```diff
+No traducido
```

#### [`fof-linguist.admin.tabs.coverage`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.tabs.coverage%22)

> Coverage

```diff
+Cobertura
```

#### [`fof-linguist.admin.tabs.export`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.tabs.export%22)

> Export

```diff
+Exportar
```

#### [`fof-linguist.admin.tabs.import`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.tabs.import%22)

> Import

```diff
+Importar
```

#### [`fof-linguist.admin.tabs.strings`](https://weblate.rob006.net/translate/flarum2/fof-linguist/es@formal/?q=context%3A%3D%22fof-linguist.admin.tabs.strings%22)

> Translations

```diff
+Traducciones
```


### `fof-links` (missing)

#### [`fof-links.admin.links.preconfigured`](https://weblate.rob006.net/translate/flarum2/fof-links/es@formal/?q=context%3A%3D%22fof-links.admin.links.preconfigured%22)

> The links on this forum have been preconfigured and cannot be edited here.

```diff
+Los enlaces de este foro están preconfigurados y no se pueden editar aquí.
```


### `fof-masquerade` (missing)

#### [`flarum-gdpr.lib.data.masqueradeanswers.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.anonymize_description%22)

> =&gt; flarum-gdpr.lib.data.masqueradeanswers.delete\_description

```diff
+=> flarum-gdpr.lib.data.masqueradeanswers.delete_description
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.delete_description%22)

> Removes all profile field answers from the user's account

```diff
+Borrar todos los campos con respuestas del perfil del usuario
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.export_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.export_description%22)

> Exports the user's profile field answers

```diff
+Exportar el campo respuestas del perfil del usuario
```

#### [`fof-masquerade.admin.fields.delete-confirmation`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.admin.fields.delete-confirmation%22)

> Are you sure you want to delete the field {field}? This cannot be undone.

```diff
+¿Seguro que deseas borrar el campo {field}? Esto no se puede deshacer.
```


### `fof-news-widget` (missing)

#### [`fof-news-widget.admin.settings.add_line`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/es@formal/?q=context%3A%3D%22fof-news-widget.admin.settings.add_line%22)

> Add News Line

```diff
+Agregar línea de noticias
```

#### [`fof-news-widget.admin.settings.html_warning`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/es@formal/?q=context%3A%3D%22fof-news-widget.admin.settings.html_warning%22)

> Please be careful, any HTML will be rendered.

```diff
+Tenga cuidado, se renderizará cualquier código HTML.
```

#### [`fof-news-widget.admin.settings.lines`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/es@formal/?q=context%3A%3D%22fof-news-widget.admin.settings.lines%22)

> News Lines

```diff
+Líneas de Noticias
```


### `fof-oauth` (missing)

#### [`fof-oauth.admin.settings.disable_avatars_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_help%22)

> If enabled, the user's avatar will not be updated to match the provider's avatar on signup. Note that this only affects future signups, and will not change the avatar of existing users.
>

```diff
+Si está habilitada, el avatar del usuario no se actualizará para coincidir con el del proveedor al registrarse. Tenga en cuenta que esto solo afecta a los registros futuros y no modificará el avatar de los usuarios existentes.
+
```

#### [`fof-oauth.admin.settings.disable_avatars_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_label%22)

> Disable avatars from provider

```diff
+Deshabilitar avatares del proveedor
```

#### [`fof-oauth.admin.settings.providers.group_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_help%22)

> Select a group to automatically assign to users who register using this provider.

```diff
+Seleccione un grupo para asignar automáticamente a los usuarios que se registren utilizando este proveedor.
```

#### [`fof-oauth.admin.settings.providers.group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_label%22)

> Assign Group

```diff
+Asignar Grupo
```

#### [`fof-oauth.admin.settings.providers.no_group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.no_group_label%22)

> No group assignment

```diff
+Sin asignación de grupo
```


### `fof-online-users-widget` (missing)

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/es@formal/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
+Widget Ver Usuarios en Linea
```

#### [`fof-online-users-widget.admin.settings.cache_ttl`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/es@formal/?q=context%3A%3D%22fof-online-users-widget.admin.settings.cache_ttl%22)

> Time to cache the users list (in seconds)

```diff
+Tiempo de almacenamiento en caché de la lista de usuarios (en segundos)
```

#### [`fof-online-users-widget.admin.settings.last_seen_interval`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/es@formal/?q=context%3A%3D%22fof-online-users-widget.admin.settings.last_seen_interval%22)

> Last seen interval to consider a user online (in minutes)

```diff
+Intervalo de última conexión para considerar a un usuario en línea (en minutos)
```

#### [`fof-online-users-widget.admin.settings.max_users`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/es@formal/?q=context%3A%3D%22fof-online-users-widget.admin.settings.max_users%22)

> Max shown users

```diff
+Max de usuarios mostrados
```

#### [`fof-online-users-widget.forum.widget.empty`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/es@formal/?q=context%3A%3D%22fof-online-users-widget.forum.widget.empty%22)

> No Users Currently Online.

```diff
+No hay usuarios en línea.
```

#### [`fof-online-users-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/es@formal/?q=context%3A%3D%22fof-online-users-widget.forum.widget.title%22)

> Online Users

```diff
+Usuarios en línea
```


### `fof-photoswipe` (missing)

#### [`fof-photoswipe.forum.arrow_next_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/es@formal/?q=context%3A%3D%22fof-photoswipe.forum.arrow_next_title%22)

> Next

```diff
+Siguiente
```

#### [`fof-photoswipe.forum.arrow_prev_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/es@formal/?q=context%3A%3D%22fof-photoswipe.forum.arrow_prev_title%22)

> Previous

```diff
+Anterior
```

#### [`fof-photoswipe.forum.close_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/es@formal/?q=context%3A%3D%22fof-photoswipe.forum.close_title%22)

> Close

```diff
+Cerrar
```

#### [`fof-photoswipe.forum.error_msg`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/es@formal/?q=context%3A%3D%22fof-photoswipe.forum.error_msg%22)

> The image cannot be loaded

```diff
+La imagen no carga
```

#### [`fof-photoswipe.forum.zoom_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/es@formal/?q=context%3A%3D%22fof-photoswipe.forum.zoom_title%22)

> Zoom

```diff
+Zoom
```


### `fof-polls` (missing)

#### [`fof-polls.admin.permissions.moderate_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.permissions.moderate_group%22)

> Edit &amp; remove poll groups

```diff
+Editar & eliminar grupos de encuestas
```

#### [`fof-polls.admin.permissions.start_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.permissions.start_group%22)

> Create poll groups

```diff
+Crear grupos de encuesta
```

#### [`fof-polls.admin.permissions.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.permissions.view_group%22)

> View poll groups

```diff
+Ver grupos de encuestas
```

#### [`fof-polls.admin.settings.enabled_poll_groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups%22)

> Enable poll groups

```diff
+Habilitar grupos de encuestas
```

#### [`fof-polls.admin.settings.enabled_poll_groups_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups_help%22)

> Poll groups allow you to group globals polls together, and display them in a dedicated page.

```diff
+Los grupos de encuestas permiten agrupar encuestas globales y mostrarlas en una página dedicada.
```

#### [`fof-polls.forum.page.nav-groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.page.nav-groups%22)

> Poll Groups

```diff
+Grupos de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.add_title%22)

> Add Poll Group

```diff
+Agregar grupo de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.delete%22)

> Delete Poll Group

```diff
+Eliminar grupo de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.edit_title%22)

> Edit Poll Group

```diff
+Editar grupo de encuesta
```

#### [`fof-polls.forum.poll_groups.composer.groups_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.groups_manager%22)

> Poll Groups Manager

```diff
+Administrador de grupos de encuestas
```

#### [`fof-polls.forum.poll_groups.composer.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.save_changes%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.admin.settings.toggle_on_editor`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.admin.settings.toggle_on_editor%22)

> Show rich text mode toggle on editor?

```diff
+¿Mostrar interruptor del modo de texto enriquecido en el editor?
```

#### [`fof-rich-text.forum.settings.composer_heading`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.forum.settings.composer_heading%22)

> Composer

```diff
+Compositor
```

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
+No separe los párrafos con un salto de línea.
```

#### [`fof-rich-text.forum.settings.use_rich_text_editor_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.forum.settings.use_rich_text_editor_label%22)

> Use rich text editor?

```diff
+¿Usar un editor de texto enriquecido?
```

#### [`fof-rich-text.lib.composer.additional_items_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.additional_items_tooltip%22)

> Additional Controls

```diff
+Controles Adicionales
```

#### [`fof-rich-text.lib.composer.code_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.code_block_tooltip%22)

> Insert a code block

```diff
+Inserta un bloque de código
```

#### [`fof-rich-text.lib.composer.horizontal_rule_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.horizontal_rule_tooltip%22)

> Insert horizontal rule

```diff
+Insertar regla horizontal
```

#### [`fof-rich-text.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.image_tooltip%22)

> Add an image

```diff
+Agrega una imágen
```

#### [`fof-rich-text.lib.composer.insert_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_button%22)

> Insert

```diff
+Insertar
```

#### [`fof-rich-text.lib.composer.insert_image.src_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.src_placeholder%22)

> Link

```diff
+Enlace
```

#### [`fof-rich-text.lib.composer.insert_image.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.title_placeholder%22)

> Title

```diff
+Título
```

#### [`fof-rich-text.lib.composer.insert_link.href_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.href_placeholder%22)

> URL

```diff
+Enlace
```

#### [`fof-rich-text.lib.composer.insert_link.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.remove_button%22)

> Remove

```diff
+Borrar
```

#### [`fof-rich-text.lib.composer.insert_link.text_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.text_placeholder%22)

> Text

```diff
+Texto
```

#### [`fof-rich-text.lib.composer.insert_link.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.title_placeholder%22)

> Title (shows on hover)

```diff
+Título (se muestra al pasar el cursor)
```

#### [`fof-rich-text.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.link_tooltip%22)

> Add a link

```diff
+Agregar enlace
```

#### [`fof-rich-text.lib.composer.spoiler_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.spoiler_block_tooltip%22)

> Block Spoiler/Dropdown

```diff
+Bloquear Spoiler/menú desplegable
```

#### [`fof-rich-text.lib.composer.text_type_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.text_type_tooltip%22)

> Select Text Type

```diff
+Seleccione el tipo de texto
```

#### [`fof-rich-text.lib.composer.toggle_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/es@formal/?q=context%3A%3D%22fof-rich-text.lib.composer.toggle_button%22)

> Toggle Rich Text Mode

```diff
+Alternar el modo de texto enriquecido
```


### `fof-seo` (missing)

#### [`fof-seo.admin.common.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.common.close%22)

> Close

```diff
+Cerrar
```

#### [`fof-seo.admin.common.learn_more`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.common.learn_more%22)

> Learn more

```diff
+Saber más
```

#### [`fof-seo.admin.common.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.common.save_changes%22)

> Save changes

```diff
+Guardar cambios
```

#### [`fof-seo.admin.dashboard.widget.cta`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.cta%22)

> Do the health-check!

```diff
+¡Realizar comprobación SEO!
```

#### [`fof-seo.admin.dashboard.widget.review_prompt`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.review_prompt%22)

> It's time to review your SEO settings!

```diff
+¡Es hora de revisar tu configuración SEO!
```

#### [`fof-seo.admin.header.health_check`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.health_check%22)

> Health check

```diff
+Comprobación SEO
```

#### [`fof-seo.admin.header.search_engines_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.search_engines_info%22)

> Search engine information

```diff
+Información de motores de búsqueda
```

#### [`fof-seo.admin.header.seo_settings`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.seo_settings%22)

> SEO settings

```diff
+Configuración SEO
```

#### [`fof-seo.admin.header.setup_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.setup_ssl%22)

> Set up SSL

```diff
+Configurar SSL
```

#### [`fof-seo.admin.header.sitemap_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.sitemap_info%22)

> Sitemap information

```diff
+Información del sitemap
```

#### [`fof-seo.admin.header.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.title%22)

> Search Engine Optimization

```diff
+Optimización para motores de búsqueda
```

#### [`fof-seo.admin.header.tools`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.header.tools%22)

> Tools

```diff
+Herramientas
```

#### [`fof-seo.admin.modals.crawl_post.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.intro%22)

> &lt;b&gt;Read this dialog carefully.&lt;/b&gt; This function will only be executed on a page refresh on a discussion. You can always change this option later.

```diff
+<b>Lee este diálogo cuidadosamente.</b> Esta función solo se ejecutará al actualizar una página de una discusión. Siempre podrás cambiar esta opción más adelante.
```

#### [`fof-seo.admin.modals.crawl_post.mode_all_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_all_title%22)

> Index all posts in a discussion (setting enabled)

```diff
+Indexar todas las publicaciones de una discusión (activado)
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_help%22)

> Search engine will only show the main post in the search results. It won't affect loading speed when you navigate to it via forum links.

```diff
+Los motores de búsqueda solo mostrarán la publicación principal en los resultados. Esto no afectará a la velocidad de carga cuando accedas mediante enlaces del foro.
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_title%22)

> Only index the main post (default)

```diff
+Indexar solo la publicación principal (predeterminado)
```

#### [`fof-seo.admin.modals.crawl_post.question`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.question%22)

> Do you want to enable this feature?

```diff
+¿Quieres activar esta función?
```

#### [`fof-seo.admin.modals.crawl_post.switch_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.switch_label%22)

> Crawl all posts (it's slower on page refresh, but search results will be better)

```diff
+Rastrear todas las publicaciones (más lento al actualizar páginas, pero mejores resultados de búsqueda)
```

#### [`fof-seo.admin.modals.crawl_post.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.title%22)

> Post crawl settings

```diff
+Configuración de rastreo de publicaciones
```

#### [`fof-seo.admin.modals.dofollow.add_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.add_placeholder%22)

> Allow a domain

```diff
+Permitir un dominio
```

#### [`fof-seo.admin.modals.dofollow.default_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.default_note%22)

> The domain you use for your Flarum instance is added to the list by default.

```diff
+El dominio utilizado por tu instalación de Flarum se añade automáticamente a la lista.
```

#### [`fof-seo.admin.modals.dofollow.duplicate_error`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.duplicate_error%22)

> This domain is already present in your do-follow list.

```diff
+Este dominio ya está presente en tu lista do-follow.
```

#### [`fof-seo.admin.modals.dofollow.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.intro%22)

> Enter the &lt;b&gt;hostnames&lt;/b&gt; of the domains you want to add to the do-follow list.

```diff
+Introduce los <b>nombres de dominio</b> que quieres añadir a la lista do-follow.
```

#### [`fof-seo.admin.modals.dofollow.learn_more_line`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.learn_more_line%22)

> &lt;a&gt;Learn more&lt;/a&gt; about the do-follow list.

```diff
+<a>Saber más</a> sobre la lista do-follow.
```

#### [`fof-seo.admin.modals.dofollow.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.title%22)

> Do-follow list

```diff
+Lista Do-follow
```

#### [`fof-seo.admin.pages.health.checks.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.button%22)

> Review post settings

```diff
+Revisar configuración de publicaciones
```

#### [`fof-seo.admin.pages.health.checks.crawl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.label%22)

> Review discussion post crawl settings

```diff
+Revisar configuración de rastreo de publicaciones
```

#### [`fof-seo.admin.pages.health.checks.crawl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.reason%22)

> You will need to review this setting to pass.

```diff
+Debes revisar esta configuración para completar la comprobación.
```

#### [`fof-seo.admin.pages.health.checks.description.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.button%22)

> Update description

```diff
+Actualizar descripción
```

#### [`fof-seo.admin.pages.health.checks.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.label%22)

> Checks whether your forum has a description

```diff
+Comprueba si tu foro tiene una descripción
```

#### [`fof-seo.admin.pages.health.checks.description.reason_default`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_default%22)

> You did not change the default forum description after installation!

```diff
+¡No has cambiado la descripción predeterminada después de instalar el foro!
```

#### [`fof-seo.admin.pages.health.checks.description.reason_missing`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_missing%22)

> You did not set up a forum description yet!

```diff
+¡Todavía no has configurado una descripción del foro!
```

#### [`fof-seo.admin.pages.health.checks.description.reason_too_short`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_too_short%22)

> Your forum description is lower then 20 characters. Please expand it for better search results.

```diff
+La descripción de tu foro tiene menos de 20 caracteres. Amplíala para mejorar los resultados de búsqueda.
```

#### [`fof-seo.admin.pages.health.checks.keywords.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.button%22)

> Update keywords

```diff
+Actualizar palabras clave
```

#### [`fof-seo.admin.pages.health.checks.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.label%22)

> Checks whether your forum has keywords set up

```diff
+Comprueba si tu foro tiene palabras clave configuradas
```

#### [`fof-seo.admin.pages.health.checks.keywords.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.reason%22)

> You did not set up a forum keywords yet!

```diff
+¡Todavía no has configurado palabras clave del foro!
```

#### [`fof-seo.admin.pages.health.checks.meta_tags.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.meta_tags.label%22)

> Checks whether your forum has meta tags available (generated by this plugin)

```diff
+Comprueba si tu foro tiene etiquetas meta disponibles (generadas por este plugin)
```

#### [`fof-seo.admin.pages.health.checks.review.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.button%22)

> Ok! I reviewed them!

```diff
+¡Vale! Ya lo he revisado
```

#### [`fof-seo.admin.pages.health.checks.review.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.label%22)

> Review your SEO settings every two months. Next review needed on {date}

```diff
+Revisa tu configuración SEO cada dos meses. Próxima revisión necesaria el {date}
```

#### [`fof-seo.admin.pages.health.checks.review.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.reason%22)

> It is time to re-review your SEO settings.

```diff
+Es hora de volver a revisar tu configuración SEO.
```

#### [`fof-seo.admin.pages.health.checks.robots.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.button%22)

> Read more about adding a robots.txt

```diff
+Leer más sobre añadir robots.txt
```

#### [`fof-seo.admin.pages.health.checks.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.label%22)

> Checks whether your forum has a robots.txt available

```diff
+Comprueba si tu foro tiene un robots.txt disponible
```

#### [`fof-seo.admin.pages.health.checks.robots.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.reason%22)

> Your robots.txt is provided by the FriendsOfFlarum Sitemap extension. Install and enable it to make a robots.txt available to search engines.

```diff
+Tu robots.txt es proporcionado por la extensión FriendsOfFlarum Sitemap. Instálala y actívala para que los motores de búsqueda puedan acceder a este archivo.
```

#### [`fof-seo.admin.pages.health.checks.search_engines.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.button%22)

> More information

```diff
+Más información
```

#### [`fof-seo.admin.pages.health.checks.search_engines.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.label%22)

> Register your forum to search engines

```diff
+Registrar tu foro en motores de búsqueda
```

#### [`fof-seo.admin.pages.health.checks.search_engines.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.reason%22)

> You will need to review this to pass.

```diff
+Debes revisar esta opción para completar la comprobación.
```

#### [`fof-seo.admin.pages.health.checks.sitemap.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.button%22)

> Read more about adding a sitemap

```diff
+Leer más sobre añadir un sitemap
```

#### [`fof-seo.admin.pages.health.checks.sitemap.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.label%22)

> Checks whether your forum has a sitemap available

```diff
+Comprueba si tu foro tiene un sitemap disponible
```

#### [`fof-seo.admin.pages.health.checks.sitemap.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.reason%22)

> It is highly recommended to install the FriendsOfFlarum Sitemap extension!

```diff
+¡Es muy recomendable instalar la extensión FriendsOfFlarum Sitemap!
```

#### [`fof-seo.admin.pages.health.checks.social_media.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.button%22)

> Update image

```diff
+Actualizar imagen
```

#### [`fof-seo.admin.pages.health.checks.social_media.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.label%22)

> Set Up a social media image

```diff
+Configurar una imagen para redes sociales
```

#### [`fof-seo.admin.pages.health.checks.social_media.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.reason%22)

> You did not set a social media image for your forum. It is recommended to set one. Your favicon will now be used as preview on social media.

```diff
+No has configurado una imagen para redes sociales en tu foro. Se recomienda añadir una. Actualmente se utilizará tu favicon como vista previa.
```

#### [`fof-seo.admin.pages.health.checks.ssl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.button%22)

> How to set up SSL

```diff
+Cómo configurar SSL
```

#### [`fof-seo.admin.pages.health.checks.ssl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.label%22)

> Checks whether your site has a secure connection available (SSL/TLS)

```diff
+Comprueba si tu web tiene una conexión segura disponible (SSL/TLS)
```

#### [`fof-seo.admin.pages.health.checks.ssl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.reason%22)

> Your forum does not force a SSL/TLS connection (a secure connection to your website). Most search engines won't index your website or lower your ranking if you have no secure connection available.

```diff
+Tu foro no fuerza una conexión SSL/TLS segura. La mayoría de motores de búsqueda no indexarán tu web o reducirán tu posicionamiento si no tienes una conexión segura.
```

#### [`fof-seo.admin.pages.health.default_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.default_button%22)

> Update setting

```diff
+Actualizar configuración
```

#### [`fof-seo.admin.pages.health.legend`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.legend%22)

> For optimal search engine results, make sure all checks are green.

```diff
+Para obtener los mejores resultados en motores de búsqueda, asegúrate de que todas las comprobaciones estén en verde.
```

#### [`fof-seo.admin.pages.health.status.passed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.status.passed%22)

> All set!

```diff
+¡Todo correcto!
```

#### [`fof-seo.admin.pages.health.status.warning`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.status.warning%22)

> Warning!

```diff
+¡Advertencia!
```

#### [`fof-seo.admin.pages.health.table.status`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.table.status%22)

> Status

```diff
+Estado
```

#### [`fof-seo.admin.pages.health.table.technique`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.health.table.technique%22)

> Technique

```diff
+Técnica
```

#### [`fof-seo.admin.pages.search_engines.bing_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_heading%22)

> Add your website to the Bing search results

```diff
+Añadir tu web a los resultados de búsqueda de Bing
```

#### [`fof-seo.admin.pages.search_engines.bing_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_sitemap%22)

> Don't forget to configure your sitemap URL. After you verified your website you're all set and Bing will now index your website.

```diff
+No olvides configurar la URL del sitemap. Después de verificar tu web, Bing comenzará a indexarla.
```

#### [`fof-seo.admin.pages.search_engines.bing_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_visit%22)

> If you want to add your website to the Bing search results, visit the {link} and complete the given steps. Not all fields are required.

```diff
+Si quieres añadir tu web a Bing, visita {link} y completa los pasos indicados.
```

#### [`fof-seo.admin.pages.search_engines.confirm_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.confirm_button%22)

> I have read this

```diff
+He leído esto
```

#### [`fof-seo.admin.pages.search_engines.google_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_heading%22)

> Add your website to the Google search results

```diff
+Añadir tu web a los resultados de búsqueda de Google
```

#### [`fof-seo.admin.pages.search_engines.google_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_sitemap%22)

> When you completed the registration in the Google Search Console, visit the &lt;b&gt;Sitemaps&lt;/b&gt; page. Pass your &lt;b&gt;sitemap.xml&lt;/b&gt; to Google. Make sure that Google can crawl your sitemap and will keep doing this.

```diff
+Cuando completes el registro en Google Search Console, visita la página <b>Sitemaps</b>. Envía tu archivo <b>sitemap.xml</b> a Google y asegúrate de que pueda rastrearlo correctamente.
```

#### [`fof-seo.admin.pages.search_engines.google_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_visit%22)

> If you want to add your website to the Google search results, visit the {link}. You'll need to add your website and verify that you're the owner of the associated domain name.

```diff
+Si quieres añadir tu web a los resultados de Google, visita {link}. Tendrás que añadir tu sitio y verificar que eres el propietario del dominio asociado.
```

#### [`fof-seo.admin.pages.search_engines.google_www`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_www%22)

> When you enter your domain you need to answer the following question for yourself: Do you want to use the 'www' sub-domain in the search results? You can &lt;strong&gt;not&lt;/strong&gt; change this later. Registering your domain in the Google Search Console multiple times won't result in a better ranking.

```diff
+Cuando introduzcas tu dominio tendrás que decidir si quieres utilizar el subdominio 'www' en los resultados de búsqueda. <strong>No podrás cambiarlo</strong> más adelante. Registrar varias veces tu dominio en Google Search Console no mejorará el posicionamiento.
```

#### [`fof-seo.admin.pages.search_engines.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.heading%22)

> Submit your website to Search Engines

```diff
+Enviar tu web a los motores de búsqueda
```

#### [`fof-seo.admin.pages.search_engines.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.intro%22)

> It is good practice to let Search Engines know your site is exists. This page will guide you in doing this succesfully.

```diff
+Es recomendable informar a los motores de búsqueda de que tu sitio existe. Esta página te guiará para hacerlo correctamente.
```

#### [`fof-seo.admin.pages.search_engines.sitemap_tip`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.sitemap_tip%22)

> It is recommended to have a sitemap ready before completing this guide. If you don't have a sitemap yet, &lt;a&gt;click here to read more about them&lt;/a&gt;.

```diff
+Se recomienda tener un sitemap preparado antes de completar esta guía. Si todavía no tienes uno, <a>haz clic aquí para obtener más información</a>.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_body%22)

> If you want to add your website to the Yahoo search results, finish your Bing search results registration. Yahoo will use that data.

```diff
+Para añadir tu web a Yahoo, completa primero el registro en Bing. Yahoo utilizará esos datos.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_heading%22)

> Add your website to the Yahoo search results

```diff
+Añadir tu web a los resultados de búsqueda de Yahoo
```

#### [`fof-seo.admin.pages.search_engines.yandex_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_heading%22)

> Add your website to the Yandex search results

```diff
+Añadir tu web a los resultados de búsqueda de Yandex
```

#### [`fof-seo.admin.pages.search_engines.yandex_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_sitemap%22)

> Don't forget to configure the sitemap in the Yandex.Webmaster.

```diff
+No olvides configurar el sitemap en Yandex.Webmaster.
```

#### [`fof-seo.admin.pages.search_engines.yandex_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_visit%22)

> If you want to add your website to the Yandex search results, visit the {link} and follow the given steps.

```diff
+Si quieres añadir tu web a Yandex, visita {link} y sigue los pasos indicados.
```

#### [`fof-seo.admin.pages.sitemap.generated_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.generated_note%22)

> The sitemap file is automatically generated and does not need any maintenance.

```diff
+El archivo sitemap se genera automáticamente y no necesita mantenimiento.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_body%22)

> In that case, activate it by clicking the extension in the sidebar at the left . Then this warning will disappear.

```diff
+Actívala haciendo clic en la extensión desde el menú lateral izquierdo. Después esta advertencia desaparecerá.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_heading%22)

> I just installed the extension

```diff
+Acabo de instalar la extensión
```

#### [`fof-seo.admin.pages.sitemap.robots_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_body%22)

> The same extension also generates a &lt;b&gt;robots.txt&lt;/b&gt; for your forum. This file tells search engines which areas they may crawl and points them to your sitemap, so installing it takes care of both files at once — there is nothing extra to configure.

```diff
+La misma extensión genera un archivo <b>robots.txt</b> para tu foro. Este archivo indica a los motores de búsqueda qué zonas pueden rastrear y les dirige hacia tu sitemap.
```

#### [`fof-seo.admin.pages.sitemap.robots_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_heading%22)

> What about robots.txt?

```diff
+¿Qué ocurre con robots.txt?
```

#### [`fof-seo.admin.pages.sitemap.which_extension_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_body%22)

> {link} is the suggested extension to install for Flarum. We strongly recommend you to install and activate this extension.

```diff
+{link} es la extensión recomendada para Flarum. Se recomienda instalarla y activarla.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_details`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_details%22)

> This extension will make sure crawlers will find your forum &lt;b&gt;discussions&lt;/b&gt;, &lt;b&gt;tags&lt;/b&gt; (when extension is enabled) and &lt;b&gt;Pages&lt;/b&gt; extension (when extension is installed and enabled). It will automatically make an sitemap.xml available.

```diff
+Esta extensión permite que los rastreadores encuentren tus <b>discusiones</b>, <b>etiquetas</b> (si está activada) y páginas de la extensión <b>Pages</b> (si está instalada y activada). También generará automáticamente un archivo sitemap.xml.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_heading%22)

> What extension should I install?

```diff
+¿Qué extensión debería instalar?
```

#### [`fof-seo.admin.pages.sitemap.why_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_body%22)

> A sitemap is a XML file with a list of all the available pages on your website. It will be used by crawlers and search engines to find pages on your website.

```diff
+Un sitemap es un archivo XML que contiene una lista de todas las páginas disponibles de tu web. Los rastreadores y motores de búsqueda lo utilizan para encontrar páginas dentro de tu sitio.
```

#### [`fof-seo.admin.pages.sitemap.why_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_heading%22)

> Why should you use a sitemap?

```diff
+¿Por qué deberías utilizar un sitemap?
```

#### [`fof-seo.admin.pages.ssl.added_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.added_heading%22)

> Okay, I added SSL!

```diff
+¡Perfecto, ya añadí SSL!
```

#### [`fof-seo.admin.pages.ssl.how_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_body%22)

> For people who are using a webhosting, the most common way is to enter the webhosting panel, go to the hosting-settings of your website and click SSL. You can follow the steps to add SSL to your website. The most webhosting companies nowadays are supporting the popular certificate issuer {link}.

```diff
+Si utilizas un servicio de alojamiento web, normalmente debes entrar en el panel de tu hosting, acceder a la configuración de tu página y activar SSL. La mayoría de empresas de hosting actuales permiten utilizar certificados del proveedor {link}.
```

#### [`fof-seo.admin.pages.ssl.how_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_heading%22)

> How to add SSL to your website?

```diff
+¿Cómo añadir SSL a tu web?
```

#### [`fof-seo.admin.pages.ssl.intro_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_body%22)

> Safety and privacy awareness on the web is on the rise. &lt;b&gt;Almost every&lt;/b&gt; developer/website owner want their website safe to use for their visitors so they won't need to be afraid that their data will be compromised by hackers or website-impersonators.

```diff
+La seguridad y privacidad en Internet son cada vez más importantes. <b>Casi todos</b> los desarrolladores y propietarios de páginas web quieren que sus sitios sean seguros para sus visitantes, evitando que sus datos sean comprometidos por atacantes o páginas que intentan hacerse pasar por otras.
```

#### [`fof-seo.admin.pages.ssl.intro_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_heading%22)

> Why do I need an secure connection?

```diff
+¿Por qué necesito una conexión segura?
```

#### [`fof-seo.admin.pages.ssl.no_ssl_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_body%22)

> In that case, you can uninstall this extension as search engines &lt;b&gt;won't index your forum&lt;/b&gt; or rank them far below other sites due safety reasons.

```diff
+En ese caso puedes desinstalar esta extensión, ya que los motores de búsqueda <b>no indexarán tu foro</b> correctamente o lo posicionarán mucho más abajo por motivos de seguridad.
```

#### [`fof-seo.admin.pages.ssl.no_ssl_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_heading%22)

> What if I do not want to add SSL?

```diff
+¿Qué ocurre si no quiero añadir SSL?
```

#### [`fof-seo.admin.pages.ssl.rankings_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body%22)

> When you do not have a secure connection to your website, search engines will rank your site much lower then other sites, or even won't index it.

```diff
+Cuando tu web no tiene una conexión segura, los motores de búsqueda pueden posicionarla mucho más abajo que otros sitios o incluso no indexarla.
```

#### [`fof-seo.admin.pages.ssl.rankings_body_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body_ssl%22)

> When you have SSL available, your website will get an higher rank and will be indexed.

```diff
+Cuando tienes SSL disponible, tu web tendrá una mejor posición y será indexada correctamente.
```

#### [`fof-seo.admin.pages.ssl.rankings_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_heading%22)

> Search engines {icon} secure connections

```diff
+Motores de búsqueda {icon} conexiones seguras
```

#### [`fof-seo.admin.pages.ssl.what_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_body%22)

> The most people know &lt;b&gt;https&lt;/b&gt; that's used for secure connections as SSL: &lt;i&gt;Secure Sockets Layer&lt;/i&gt;. Officially it's called TLS: &lt;i&gt;Transport Layer Security&lt;/i&gt;. This method is used to create a secure connection to your webserver what will prevent attackers or other webservers to impersonate your website and keep your visitors safe. The SSL connection will be broken if that happens and the visitors browsers will warning the user that's it's not trusted.

```diff
+La mayoría de personas conoce <b>https</b>, utilizado para conexiones seguras, como SSL: <i>Secure Sockets Layer</i>. Oficialmente se llama TLS: <i>Transport Layer Security</i>. Este sistema crea una conexión segura con tu servidor web, evitando que atacantes u otros servidores puedan hacerse pasar por tu sitio y manteniendo protegidos a tus visitantes. Si la conexión SSL falla, el navegador mostrará una advertencia indicando que la página no es segura.
```

#### [`fof-seo.admin.pages.ssl.what_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_heading%22)

> What is SSL or TLS?

```diff
+¿Qué es SSL o TLS?
```

#### [`fof-seo.admin.permissions.category_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.permissions.category_label%22)

> SEO

```diff
+SEO
```

#### [`fof-seo.admin.permissions.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.permissions.configure_seo%22)

> Allow configuring SEO

```diff
+Permitir configurar SEO
```

#### [`fof-seo.admin.settings.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.crawl.button%22)

> Setup post crawl settings

```diff
+Configurar rastreo de publicaciones
```

#### [`fof-seo.admin.settings.crawl.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.crawl.heading%22)

> Discussion post crawl settings

```diff
+Configuración de rastreo de publicaciones
```

#### [`fof-seo.admin.settings.crawl.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.crawl.help%22)

> This is an important setting about crawling your discussion posts in search results.

```diff
+Esta es una configuración importante sobre cómo se rastrean las publicaciones de tus discusiones en los resultados de búsqueda.
```

#### [`fof-seo.admin.settings.indexing.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.indexing.heading%22)

> Indexing controls

```diff
+Controles de indexación
```

#### [`fof-seo.admin.settings.indexing.profiles_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_help%22)

> When enabled, user profile pages emit a 'noindex' meta tag so they are kept out of search results. Links on the page are still followed, so crawlers can still reach the content they point to.

```diff
+Cuando está activado, las páginas de perfil de usuario incluyen una etiqueta meta 'noindex', evitando que aparezcan en los resultados de búsqueda. Los enlaces de la página seguirán siendo rastreados para que los buscadores puedan acceder al contenido enlazado.
```

#### [`fof-seo.admin.settings.indexing.profiles_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_label%22)

> De-index profile pages

```diff
+No indexar páginas de perfil
```

#### [`fof-seo.admin.settings.indexing.tags_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_button%22)

> Select tags

```diff
+Seleccionar etiquetas
```

#### [`fof-seo.admin.settings.indexing.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_help%22)

> Discussions in the selected tags (and those tags' own listing pages) will be kept out of search results with a 'noindex' meta tag. Links are still followed. Selecting a parent tag also covers its child tags.

```diff
+Las discusiones dentro de las etiquetas seleccionadas (y sus páginas de listado) quedarán fuera de los resultados mediante una etiqueta meta 'noindex'. Los enlaces seguirán siendo rastreados. Seleccionar una etiqueta principal también incluye sus etiquetas secundarias.
```

#### [`fof-seo.admin.settings.indexing.tags_none_selected`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_none_selected%22)

> No tags excluded from indexing.

```diff
+No hay etiquetas excluidas de la indexación.
```

#### [`fof-seo.admin.settings.info.maintain`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.info.maintain%22)

> Check all your settings when you first setup this extensions. Maintain them to get the best search results.

```diff
+Revisa todas las configuraciones al instalar esta extensión por primera vez. Manténlas actualizadas para obtener mejores resultados en los buscadores.
```

#### [`fof-seo.admin.settings.info.overview`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.info.overview%22)

> This page contains some other settings from around the admin area. However, it's good to have a good overview about these settings. Do not forget to do the SEO check.

```diff
+Esta página contiene algunas configuraciones adicionales del área de administración. Es recomendable tener una buena visión general de estas opciones. No olvides realizar la comprobación SEO.
```

#### [`fof-seo.admin.settings.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Nota: Separa las palabras clave con comas.
```

#### [`fof-seo.admin.settings.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Ejemplo: flarum, desarrollo web, foro, seguridad
```

#### [`fof-seo.admin.settings.keywords.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.keywords.heading%22)

> Forum keywords

```diff
+Palabras clave del foro
```

#### [`fof-seo.admin.settings.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.keywords.help%22)

> Enter one or more keywords that describes your forum.

```diff
+Introduce una o más palabras clave que describan tu foro.
```

#### [`fof-seo.admin.settings.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.keywords.placeholder%22)

> Add a few keywords

```diff
+Añade algunas palabras clave
```

#### [`fof-seo.admin.settings.new_tab.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.heading%22)

> Open external links in new tab

```diff
+Abrir enlaces externos en una nueva pestaña
```

#### [`fof-seo.admin.settings.new_tab.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.help%22)

> This extension will also make sure that external links (to other domains) open in a new tab. Currently it is not possible to disable this setting.

```diff
+Esta extensión hará que los enlaces externos hacia otros dominios se abran en una nueva pestaña. Actualmente no es posible desactivar esta opción.
```

#### [`fof-seo.admin.settings.nofollow.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.button%22)

> Open domain do-follow list

```diff
+Abrir lista de dominios do-follow
```

#### [`fof-seo.admin.settings.nofollow.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.heading%22)

> No-follow links

```diff
+Enlaces No-follow
```

#### [`fof-seo.admin.settings.nofollow.help_dofollow`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.help_dofollow%22)

> With this setting you are able to add domains to the 'do-follow' list. For example, you can add &lt;i&gt;flarum.org&lt;/i&gt; to make sure links to this website do not receive a 'nofollow' attribute.

```diff
+Con esta opción puedes añadir dominios a la lista 'do-follow'. Por ejemplo, puedes añadir <i>flarum.org</i> para permitir que los enlaces hacia esta web no reciban el atributo 'nofollow'.
```

#### [`fof-seo.admin.settings.social_media_image.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.heading%22)

> Social media image

```diff
+Imagen para redes sociales
```

#### [`fof-seo.admin.settings.social_media_image.help_size`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_size%22)

> Expecting a square image. Recommended size is 1200x1200 pixels. Otherwise use a landscape image, recommended size is 1200x630.

```diff
+Se espera una imagen cuadrada. El tamaño recomendado es 1200x1200 píxeles. También puedes utilizar una imagen horizontal con tamaño recomendado 1200x630.
```

#### [`fof-seo.admin.settings.social_media_image.help_usage`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_usage%22)

> This image will be used by Social Media when a user shares a page on your website (Facebook, X (formerly Twitter), Reddit).

```diff
+Esta imagen será utilizada por las redes sociales cuando un usuario comparta una página de tu web (Facebook, X antes Twitter, Reddit).
```

#### [`fof-seo.admin.settings.twitter_card.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.heading%22)

> X (formerly Twitter) card size

```diff
+Tamaño de tarjeta X (antes Twitter)
```

#### [`fof-seo.admin.settings.twitter_card.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.help%22)

> When your forum is shared on X (formerly Twitter), it will have an image (if a social media image has been set up). This can be a big card with a big image, or a small card (summary) with a smaller image.

```diff
+Cuando tu foro se comparta en X (antes Twitter), tendrá una imagen si se ha configurado una imagen para redes sociales. Puede ser una tarjeta grande con una imagen grande o una tarjeta resumen con una imagen pequeña.
```

#### [`fof-seo.admin.settings.twitter_card.option_large`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_large%22)

> Large card (large image)

```diff
+Tarjeta grande (imagen grande)
```

#### [`fof-seo.admin.settings.twitter_card.option_summary`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_summary%22)

> Summary card (smaller image)

```diff
+Tarjeta resumen (imagen pequeña)
```

#### [`fof-seo.admin.settings.updated.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.updated.button%22)

> Back to overview and re-check

```diff
+Volver al resumen y comprobar
```

#### [`fof-seo.admin.settings.updated.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.updated.heading%22)

> Updated this setting?

```diff
+¿Has actualizado esta configuración?
```

#### [`fof-seo.admin.settings.updated.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.admin.settings.updated.help%22)

> When you think you're ready, click the button below to re-check the status of this setting.

```diff
+Cuando creas que todo está listo, pulsa el botón inferior para volver a comprobar el estado de esta configuración.
```

#### [`fof-seo.forum.controls.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.controls.configure_seo%22)

> Configure SEO

```diff
+Configurar SEO
```

#### [`fof-seo.forum.controls.reset_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.controls.reset_seo%22)

> Reset SEO

```diff
+Restablecer SEO
```

#### [`fof-seo.forum.controls.update_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.controls.update_seo%22)

> Update SEO

```diff
+Actualizar SEO
```

#### [`fof-seo.forum.meta_seo.auto_update.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.help%22)

> When enabled, this items meta tags are automatically updated when the object changes.

```diff
+Cuando está activado, las etiquetas meta de este elemento se actualizarán automáticamente cuando cambie el objeto.
```

#### [`fof-seo.forum.meta_seo.auto_update.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.label%22)

> Auto update meta tags

```diff
+Actualizar etiquetas meta automáticamente
```

#### [`fof-seo.forum.meta_seo.auto_update.switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.switch%22)

> Update object SEO on change

```diff
+Actualizar SEO del objeto al cambiar
```

#### [`fof-seo.forum.meta_seo.close.autofill_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.autofill_info%22)

> This change will revert custom changes and fill the meta-tags with item-data.

```diff
+Este cambio eliminará las modificaciones personalizadas y rellenará las etiquetas meta con los datos del elemento.
```

#### [`fof-seo.forum.meta_seo.close.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.close%22)

> Close

```diff
+Cerrar
```

#### [`fof-seo.forum.meta_seo.close.save`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save%22)

> Save

```diff
+Guardar
```

#### [`fof-seo.forum.meta_seo.close.save_autofill`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save_autofill%22)

> Save &amp; auto-fill

```diff
+Guardar y rellenar automáticamente
```

#### [`fof-seo.forum.meta_seo.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.help%22)

> Displays an image.

```diff
+Muestra una imagen.
```

#### [`fof-seo.forum.meta_seo.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.label%22)

> Meta image

```diff
+Imagen meta
```

#### [`fof-seo.forum.meta_seo.image.managed_by`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.managed_by%22)

> Image source managed by {source}

```diff
+Fuente de imagen gestionada por {source}
```

#### [`fof-seo.forum.meta_seo.image.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.placeholder%22)

> Enter image URL

```diff
+Introduce la URL de la imagen
```

#### [`fof-seo.forum.meta_seo.image.upload`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.upload%22)

> Upload file

```diff
+Subir archivo
```

#### [`fof-seo.forum.meta_seo.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Nota: Separa las palabras clave con comas.
```

#### [`fof-seo.forum.meta_seo.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Ejemplo: flarum, desarrollo web, foro, seguridad
```

#### [`fof-seo.forum.meta_seo.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.help%22)

> Enter one or more keywords that describes this item.

```diff
+Introduce una o más palabras clave que describan este elemento.
```

#### [`fof-seo.forum.meta_seo.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.label%22)

> Keywords

```diff
+Palabras clave
```

#### [`fof-seo.forum.meta_seo.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.placeholder%22)

> Add a few keywords

```diff
+Añade algunas palabras clave
```

#### [`fof-seo.forum.meta_seo.managed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.managed%22)

> Managed

```diff
+Gestionado
```

#### [`fof-seo.forum.meta_seo.meta_description.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.help%22)

> Describes the item and shown in search engines.

```diff
+Describe el elemento y se muestra en los motores de búsqueda.
```

#### [`fof-seo.forum.meta_seo.meta_description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.label%22)

> Meta description

```diff
+Descripción meta
```

#### [`fof-seo.forum.meta_seo.meta_title.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.help%22)

> Title in search engines.

```diff
+Título mostrado en los motores de búsqueda.
```

#### [`fof-seo.forum.meta_seo.meta_title.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.label%22)

> Meta title

```diff
+Título meta
```

#### [`fof-seo.forum.meta_seo.meta_title.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.placeholder%22)

> Enter page title

```diff
+Introduce el título de la página
```

#### [`fof-seo.forum.meta_seo.note_prefix`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.note_prefix%22)

> Note:

```diff
+Nota:
```

#### [`fof-seo.forum.meta_seo.og.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.auto_switch%22)

> Auto generate Open Graph tags

```diff
+Generar automáticamente etiquetas Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.label%22)

> Open Graph description

```diff
+Descripción Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.placeholder%22)

> Custom Open Graph description

```diff
+Descripción personalizada de Open Graph
```

#### [`fof-seo.forum.meta_seo.og.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.label%22)

> Open Graph tags

```diff
+Etiquetas Open Graph
```

#### [`fof-seo.forum.meta_seo.og.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.title%22)

> Open Graph title

```diff
+Título Open Graph
```

#### [`fof-seo.forum.meta_seo.reading_time.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.help%22)

> Estimated reading time in seconds.

```diff
+Tiempo estimado de lectura en segundos.
```

#### [`fof-seo.forum.meta_seo.reading_time.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.label%22)

> Estimated reading time

```diff
+Tiempo estimado de lectura
```

#### [`fof-seo.forum.meta_seo.reading_time.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.placeholder%22)

> Reading time in seconds

```diff
+Tiempo de lectura en segundos
```

#### [`fof-seo.forum.meta_seo.robots.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.help%22)

> Robot-crawling settings for this item.

```diff
+Configuración de rastreo de robots para este elemento.
```

#### [`fof-seo.forum.meta_seo.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.label%22)

> Robots

```diff
+Robots
```

#### [`fof-seo.forum.meta_seo.robots.switch.follow`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.follow%22)

> Allow following links to different pages

```diff
+Permitir seguir enlaces hacia otras páginas
```

#### [`fof-seo.forum.meta_seo.robots.switch.indexing`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.indexing%22)

> Allow indexing page

```diff
+Permitir indexación de página
```

#### [`fof-seo.forum.meta_seo.robots.switch.noarchive`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noarchive%22)

> Disable archiving page (noarchive)

```diff
+Desactivar archivado de página (noarchive)
```

#### [`fof-seo.forum.meta_seo.robots.switch.noimageindex`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noimageindex%22)

> Disable indexing images on this page (noimageindex)

```diff
+Desactivar indexación de imágenes de esta página (noimageindex)
```

#### [`fof-seo.forum.meta_seo.robots.switch.nosnippet`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.nosnippet%22)

> Disable text-snippes on page (nosnippet)

```diff
+Desactivar fragmentos de texto en página (nosnippet)
```

#### [`fof-seo.forum.meta_seo.robots.tags.archive_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.archive_not_allowed%22)

> Archiving pages not allowed

```diff
+No permitir archivar páginas
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_allowed%22)

> Allow follow links

```diff
+Permitir seguir enlaces
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_not_allowed%22)

> Link following not allowed

```diff
+No permitir seguir enlaces
```

#### [`fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed%22)

> Image indexing not allowed

```diff
+No permitir indexar imágenes
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_allowed%22)

> Allow indexing page

```diff
+Permitir indexar página
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed%22)

> Page indexing not allowed

```diff
+No permitir indexar página
```

#### [`fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed%22)

> Taking text-snippets not allowed

```diff
+No permitir fragmentos de texto
```

#### [`fof-seo.forum.meta_seo.saved`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.saved%22)

> Saved!

```diff
+¡Guardado!
```

#### [`fof-seo.forum.meta_seo.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.title%22)

> SEO settings - Meta

```diff
+Configuración SEO - Meta
```

#### [`fof-seo.forum.meta_seo.twitter.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.auto_switch%22)

> Auto generate X (formerly Twitter) card

```diff
+Generar automáticamente tarjeta X (antes Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.description`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.description%22)

> X (formerly Twitter) description

```diff
+Descripción de X (antes Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.help%22)

> Displays an image on X (formerly Twitter).

```diff
+Muestra una imagen en X (antes Twitter).
```

#### [`fof-seo.forum.meta_seo.twitter.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.label%22)

> X (formerly Twitter) image

```diff
+Imagen de X (antes Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.reset`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.reset%22)

> Reset image

```diff
+Restablecer imagen
```

#### [`fof-seo.forum.meta_seo.twitter.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.label%22)

> X (formerly Twitter) card

```diff
+Tarjeta X (antes Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.title%22)

> X (formerly Twitter) title

```diff
+Título de X (antes Twitter)
```

#### [`fof-seo.forum.meta_seo.unsupported_object.body`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.body%22)

> Please open this dialog using the objectType and objectId properties or register the object relationship instead.

```diff
+Abre este diálogo utilizando las propiedades objectType y objectId o registra la relación del objeto correctamente.
```

#### [`fof-seo.forum.meta_seo.unsupported_object.docs_link`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.docs_link%22)

> Documentation

```diff
+Documentación
```

#### [`fof-seo.forum.meta_seo.unsupported_object.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.title%22)

> This object is not a supported SeoMeta object

```diff
+Este objeto no es compatible con SeoMeta
```

#### [`fof-seo.forum.profile_description`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.profile_description%22)

> Profile of {username} \| {discussion\_count} discussions \| {comment\_count} posts

```diff
+Perfil de {username} | {discussion_count} discusiones | {comment_count} publicaciones
```

#### [`fof-seo.forum.profile_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/es@formal/?q=context%3A%3D%22fof-seo.forum.profile_title%22)

> Profile of {username}

```diff
+Perfil de {username}
```


### `fof-sitemap` (missing)

#### [`fof-sitemap.admin.settings.build_button`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button%22)

> Rebuild Sitemaps Now

```diff
+Reconstruye Sitemaps Ahora
```

#### [`fof-sitemap.admin.settings.build_button_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button_help%22)

> Triggers an immediate rebuild of all sitemap files. The job will be dispatched to the queue if it's configured, else will run immediately.

```diff
+Inicia una reconstrucción inmediata de todos los archivos Sitemaps del sitio. La tarea se enviará a la cola si está configurada; de lo contrario, se ejecutará inmediatamente.
```

#### [`fof-sitemap.admin.settings.build_error`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.build_error%22)

> Failed to queue sitemap rebuild. Please check your logs and queue configuration.

```diff
+No se pudo poner en cola la reconstrucción del Sitemap. Por favor, revise sus registros y la configuración de la cola.
```

#### [`fof-sitemap.admin.settings.build_success`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.build_success%22)

> Sitemap rebuild has been queued successfully. Check your logs to monitor progress.

```diff
+La reconstrucción del sitemap se ha puesto en cola correctamente. Consulta los registros para supervisar el progreso.
```

#### [`fof-sitemap.admin.settings.exclude_tags`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags%22)

> Exclude all tag pages from sitemap

```diff
+Excluir todas las páginas de etiquetas del sitemap
```

#### [`fof-sitemap.admin.settings.exclude_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags_help%22)

> By default any tag visible to guests will be indexed

```diff
+Por defecto, cualquier etiqueta visible para los invitados será indexada
```

#### [`fof-sitemap.admin.settings.include_changefreq`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.include_changefreq%22)

> Include change frequency values in sitemap

```diff
+Incluir valores de frecuencia de cambios en el Sitemap
```

#### [`fof-sitemap.admin.settings.include_changefreq_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.include_changefreq_help%22)

> Change frequency values are ignored by Google but may be used by other search engines for crawl scheduling

```diff
+Google ignora los valores de frecuencia de cambios, pero otros motores de búsqueda pueden utilizarlos para programar el rastreo
```

#### [`fof-sitemap.admin.settings.include_priority`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.include_priority%22)

> Include priority values in sitemap

```diff
+Incluir valores de prioridad en el Sitemap
```

#### [`fof-sitemap.admin.settings.include_priority_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.include_priority_help%22)

> Priority values are ignored by Google but may be used by other search engines like Bing and Yandex

```diff
+Google ignora los valores de prioridad, pero otros motores de búsqueda como Bing y Yandex pueden utilizarlos
```

#### [`fof-sitemap.admin.settings.last_build_time`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/es@formal/?q=context%3A%3D%22fof-sitemap.admin.settings.last_build_time%22)

> Last Build Time

```diff
+Hora de la última construcción
```


### `fof-subscribed` (missing)

#### [`fof-subscribed.admin.permission.subscribe_to_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_discussion_created%22)

> Allowed to receive notification upon new discussion

```diff
+Se permite recibir notificaciones sobre nuevas discusiones
```

#### [`fof-subscribed.admin.permission.subscribe_to_post_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_post_created%22)

> Allowed to receive notification upon new post or reply

```diff
+Se permite recibir notificaciones cuando se publiquen o respondan nuevas entradas
```

#### [`fof-subscribed.admin.permission.subscribe_to_post_flagged`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_post_flagged%22)

> Allowed to receive notification upon new flag

```diff
+Se permite recibir notificaciones cuando se detecta una nueva denuncia
```

#### [`fof-subscribed.admin.permission.subscribe_to_post_unapproved`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_post_unapproved%22)

> Allowed to receive notification upon new unapproved post

```diff
+Se permite recibir notificaciones sobre nuevas publicaciones no aprobadas
```

#### [`fof-subscribed.admin.permission.subscribe_to_user_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_user_created%22)

> Allowed to receive notification upon new user

```diff
+Se permite recibir notificaciones sobre nuevos usuarios
```

#### [`fof-subscribed.email.body.newDiscussion`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.body.newDiscussion%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} started a new discussion: {discussion\_title}
>
> To view this new discussion, check out the following link:
> {discussion\_url}
>
> \---
>
> {post\_content}
>

```diff
+Hey {recipient_display_name},
+
+{actor_display_name} comenzó una nueva discusión: {discussion_title}
+
+Para ver esta nueva discusión, consulte el siguiente enlace:
+{discussion_url}
+
+---
+
+{post_content}
+
```

#### [`fof-subscribed.email.body.newUser`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.body.newUser%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just joined {forum\_url}.
>
> To view this new user's profile, check out the following link:
> {user\_url}
>

```diff
+Hey {recipient_display_name},
+
+{actor_display_name} acaba de registrarse en {forum_url}.
+
+Para ver el perfil de este nuevo usuario, consulta el siguiente enlace:
+{user_url}
+
```

#### [`fof-subscribed.email.body.postCreated`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.body.postCreated%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just created a new post in {discussion\_title}
>
> To view this new post, check out the following link:
> {post\_url}
>
> \---
>
> {post\_content}
>

```diff
+Hey {recipient_display_name},
+
+{actor_display_name} acaba de crear una publicación en {discussion_title}
+
+Para ver esta nueva publicación, consulta el siguiente enlace:
+{post_url}
+
+---
+
+{post_content}
+
```

#### [`fof-subscribed.email.body.postFlagged`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.body.postFlagged%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just flagged a post in {discussion\_title}
>
> To view this post, check out the following link:
> {post\_url}
>

```diff
+Hey {recipient_display_name},
+
+{actor_display_name} acaba de denunciar una publicación en {discussion_title}
+
+Para ver esta publicación, consulta el siguiente enlace:
+{post_url}
+
```

#### [`fof-subscribed.email.body.postUnapproved`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.body.postUnapproved%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} created a post that wasn't automatically approved in {discussion\_title}
>
> To view this new post, check out the following link:
> {post\_url}
>
> \---
>
> {post\_content}
>

```diff
+Hey {recipient_display_name},
+
+{actor_display_name} creó una publicación que no fué aprobada automáticamente en {discussion_title}
+
+Para ver esta nueva publicación, visita el siguiente enlace:
+{post_url}
+
+---
+
+{post_content}
+
```

#### [`fof-subscribed.email.subject.newDiscussion`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.subject.newDiscussion%22)

> \[Subscribed \| New Discussion\] {title}

```diff
+[Subscribed | New Discussion] {title}
```

#### [`fof-subscribed.email.subject.newUser`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.subject.newUser%22)

> \[Subscribed \| New User\] {username}

```diff
+[Subscribed | New User] {username}
```

#### [`fof-subscribed.email.subject.postCreated`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.subject.postCreated%22)

> \[Subscribed \| New Post\] {username} wrote a new post in {title}

```diff
+[Subscribed | New Post] {username} escribió una nueva publicación en {title}
```

#### [`fof-subscribed.email.subject.postFlagged`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.subject.postFlagged%22)

> \[Subscribed \| New Flag\] {username} flagged a post in {title}

```diff
+[Subscribed | New Flag] {username} denunció una publicación en {title}
```

#### [`fof-subscribed.email.subject.postUnapproved`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.email.subject.postUnapproved%22)

> \[Subscribed \| Unapproved\] {username} posted in {title}

```diff
+[Subscribed | Unapproved] {username} publicó en {title}
```

#### [`fof-subscribed.forum.notifications.discussion_created_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.notifications.discussion_created_text%22)

> {username} created a new discussion

```diff
+{username} crea una nueva discusión
```

#### [`fof-subscribed.forum.notifications.post_created_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.notifications.post_created_text%22)

> {username} wrote a new post

```diff
+{username} escribe una nueva publicación
```

#### [`fof-subscribed.forum.notifications.post_flagged_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.notifications.post_flagged_text%22)

> {username} flagged a post

```diff
+{username} denunció una publicación
```

#### [`fof-subscribed.forum.notifications.post_unapproved_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.notifications.post_unapproved_text%22)

> {username} created a post that requires approval

```diff
+{username} crea una publicación que necesita aprobación
```

#### [`fof-subscribed.forum.notifications.user_created_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.notifications.user_created_text%22)

> {username} has just signed up

```diff
+{username} acaba de registrarse
```

#### [`fof-subscribed.forum.settings.defaults_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.defaults_label%22)

> Set "{setting}" enabled by default

```diff
+Colocar "{setting}" habilitado por defecto
```

#### [`fof-subscribed.forum.settings.forced_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.forced_label%22)

> Force enable "{setting}" for everyone

```diff
+Forzar la habilitación de "{setting}" para todos
```

#### [`fof-subscribed.forum.settings.notify_discussion_created_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_discussion_created_label%22)

> Someone creates a discussion

```diff
+Alguien crea una discusión
```

#### [`fof-subscribed.forum.settings.notify_post_created_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_post_created_label%22)

> Someone creates a new post or reply

```diff
+Alguien crea una nueva publicación o respuesta
```

#### [`fof-subscribed.forum.settings.notify_post_flagged_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_post_flagged_label%22)

> Someone creates a new flag on a post

```diff
+Alguien denuncia una publicación
```

#### [`fof-subscribed.forum.settings.notify_post_unapproved_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_post_unapproved_label%22)

> A created post needs approval

```diff
+Una publicación creada necesita aprobación
```

#### [`fof-subscribed.forum.settings.notify_user_created_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/es@formal/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_user_created_label%22)

> When someone registers

```diff
+Cuando alguien se registra
```


### `fof-terms` (missing)

#### [`flarum-gdpr.lib.data.userpolicydata.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-terms/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.userpolicydata.delete_description%22)

> Removes the user's acceptance of the terms

```diff
+Elimina la aceptación de los términos por parte del usuario
```

#### [`flarum-gdpr.lib.data.userpolicydata.export_description`](https://weblate.rob006.net/translate/flarum2/fof-terms/es@formal/?q=context%3A%3D%22flarum-gdpr.lib.data.userpolicydata.export_description%22)

> Details about the user's acceptance of the terms

```diff
+Detalles sobre la aceptación de los términos por parte del usuario
```

#### [`fof-terms.forum.update-alert.can-accept-optional-message`](https://weblate.rob006.net/translate/flarum2/fof-terms/es@formal/?q=context%3A%3D%22fof-terms.forum.update-alert.can-accept-optional-message%22)

> We recently updated the terms. You can review them at your convenience.

```diff
+Hemos actualizado recientemente los términos. Puede consultarlos cuando pueda.
```

#### [`fof-terms.forum.update-alert.close`](https://weblate.rob006.net/translate/flarum2/fof-terms/es@formal/?q=context%3A%3D%22fof-terms.forum.update-alert.close%22)

> Close

```diff
+Cerrar
```

#### [`fof-terms.forum.user_settings.optional_policies_label`](https://weblate.rob006.net/translate/flarum2/fof-terms/es@formal/?q=context%3A%3D%22fof-terms.forum.user_settings.optional_policies_label%22)

> Policies

```diff
+Políticas
```


### `fof-top-posters-widget` (missing)

#### [`fof-top-posters-widget.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/es@formal/?q=context%3A%3D%22fof-top-posters-widget.admin.settings.info%22)

> Users of the selected groups will be excluded from the widget results.

```diff
+Los usuarios de los grupos seleccionados quedarán excluidos de los resultados del widget.
```

#### [`fof-top-posters-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/es@formal/?q=context%3A%3D%22fof-top-posters-widget.forum.widget.title%22)

> Top Posters this Month

```diff
+Top Publicadores de este Mes
```


### `fof-upload` (missing)

#### [`fof-upload.admin.labels.configured_by_environment`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.labels.configured_by_environment%22)

> Your storage settings have been pre-configured via environment variables.

```diff
+La configuración de almacenamiento se ha preconfigurado mediante vía Environment Variables.
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate%22)

> Allow SVG animations

```diff
+Permitir animaciones SVG
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate_help`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate_help%22)

> Enabling SVG animations may introduce security vulnerabilities as animated SVGs can contain malicious code. Enable this setting at your own risk and only if you trust your users.

```diff
+Habilitar animaciones SVG puede introducir vulnerabilidades de seguridad, ya que los SVG animados pueden contener código malicioso. Habilite esta configuración bajo su propia responsabilidad y sólo si confía en sus usuarios.
```

#### [`fof-upload.admin.labels.svg-sanitizer.help`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.help%22)

> Configure how SVG files are processed and sanitized when uploaded. SVG files can contain potentially harmful scripts and should be handled carefully. Uploaded SVGs are sanitized on upload and harmful scripts and tags are removed.

```diff
+Configure cómo se procesan y desinfectan los archivos SVG al subirlos. Los archivos SVG pueden contener scripts potencialmente dañinos y deben manejarse con cuidado. Los archivos SVG subidos se desinfectan al cargarlos y se eliminan los scripts y etiquetas dañinos.
```

#### [`fof-upload.admin.labels.svg-sanitizer.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.title%22)

> SVG Sanitizer

```diff
+Desinfección SVG
```


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/es@formal/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+{count, plural, one { {count} discussion} other {{count} discussions}}
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/es@formal/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+{count, plural, one { {count} post} other {{count} posts}}
```


### `huoxin-relative-url` (missing)

#### [`huoxin-relative-url.admin.internal_domains_help`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/es@formal/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_help%22)

> Links with these domains will be converted to relative paths.

```diff
+Los enlaces con estos dominios se convertirán en rutas relativas.
```

#### [`huoxin-relative-url.admin.internal_domains_label`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/es@formal/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_label%22)

> Internal Domains

```diff
+Dominios Internos
```

#### [`huoxin-relative-url.admin.internal_domains_placeholder`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/es@formal/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_placeholder%22)

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

#### [`ianm-follow-users.forum.followers_link`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/es@formal/?q=context%3A%3D%22ianm-follow-users.forum.followers_link%22)

> Followers

```diff
+Seguidores
```

#### [`ianm-follow-users.forum.profile_page.no_followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/es@formal/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_followers%22)

> It looks like you have no followers yet.

```diff
+Parece que aún no tienes seguidores.
```


### `ianm-log-viewer` (missing)

#### [`ianm-log-viewer.admin.permissions.access_logfile_api`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.permissions.access_logfile_api%22)

> View and manage logfiles

```diff
+Visualice y gestione los archivos de registro
```

#### [`ianm-log-viewer.admin.settings.max-file-size`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size%22)

> Maximum Log File Size (MB)

```diff
+Tamaño máximo del archivo de registro (MB)
```

#### [`ianm-log-viewer.admin.settings.max-file-size-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size-help%22)

> If a log file exceeds this size, it will be split into multiple parts. Set to 0 to disable splitting. Default is 1MB. Maximum allowable size is 150MB.

```diff
+Si un archivo de registro supera este tamaño, se dividirá en varias partes. Establezca el valor en 0 para desactivar la división. El valor predeterminado es 1 MB. El tamaño máximo permitido es de 150 MB.
```

#### [`ianm-log-viewer.admin.settings.purge-days`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.settings.purge-days%22)

> Purge logfiles after days

```diff
+Elimine los archivos de registro después de unos días
```

#### [`ianm-log-viewer.admin.settings.purge-days-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.settings.purge-days-help%22)

> Relies on the Flarum scheduler being active. 0 for disabled.

```diff
+Requiere que el planificador Flarum esté activo. 0 para deshabilitado.
```

#### [`ianm-log-viewer.admin.viewer.available_logs_heading`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.available_logs_heading%22)

> Available files

```diff
+Archivos disponibles
```

#### [`ianm-log-viewer.admin.viewer.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.confirm_delete%22)

> Are you sure you want to delete this log file? This action cannot be undone.

```diff
+¿Está seguro de que desea eliminar este archivo de registro? Esta acción no se puede deshacer.
```

#### [`ianm-log-viewer.admin.viewer.delete_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.delete_log%22)

> Delete log file

```diff
+Eliminar archivo de registro
```

#### [`ianm-log-viewer.admin.viewer.download_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.download_log%22)

> Download log file

```diff
+Descargar archivo de registro
```

#### [`ianm-log-viewer.admin.viewer.file_contents_heading`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.file_contents_heading%22)

> File contents

```diff
+Contenido del archivo
```

#### [`ianm-log-viewer.admin.viewer.last_updated`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.last_updated%22)

> Last updated: {updated}

```diff
+Última actualización: {updated}
```

#### [`ianm-log-viewer.admin.viewer.no_file_selected`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.no_file_selected%22)

> Select a log file to view its content.

```diff
+Seleccione un archivo de registro para ver su contenido.
```

#### [`ianm-log-viewer.admin.viewer.view_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/es@formal/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.view_log%22)

> View log file

```diff
+Ver archivo de registro
```


### `ianm-oauth-reddit` (missing)

#### [`fof-oauth.admin.settings.providers.reddit.client_id_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_id_label%22)

> Client ID

```diff
+ID Cliente
```

#### [`fof-oauth.admin.settings.providers.reddit.client_secret_label`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.client_secret_label%22)

> Client secret

```diff
+Cliente secreto
```

#### [`fof-oauth.admin.settings.providers.reddit.description`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es@formal/?q=context%3A%3D%22fof-oauth.admin.settings.providers.reddit.description%22)

> Register your forum with Reddit {link}

```diff
+Registrar tu foro con Reddit {link}
```

#### [`fof-oauth.forum.log_in.with_reddit_button`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es@formal/?q=context%3A%3D%22fof-oauth.forum.log_in.with_reddit_button%22)

> =&gt; fof-oauth.forum.log\_in.with\_button

```diff
+=> fof-oauth.forum.log_in.with_button
```

#### [`fof-oauth.forum.providers.reddit`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es@formal/?q=context%3A%3D%22fof-oauth.forum.providers.reddit%22)

> =&gt; fof-oauth.lib.providers.reddit

```diff
+=> fof-oauth.lib.providers.reddit
```

#### [`fof-oauth.lib.providers.reddit`](https://weblate.rob006.net/translate/flarum2/ianm-oauth-reddit/es@formal/?q=context%3A%3D%22fof-oauth.lib.providers.reddit%22)

> Reddit

```diff
+Reddit
```


### `ralkage-hcaptcha` (missing)

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
+Utiliza el tema oscuro para el widget hCaptcha. Habilítalo si tu foro utiliza un tema oscuro.
```

#### [`ralkage-hcaptcha.admin.settings.dark_mode_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_label%22)

> Dark Mode

```diff
+Modo Oscuro
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_help%22)

> Require hCaptcha when users log in. Helps protect against brute-force attacks.

```diff
+Exigir hCaptcha al iniciar sesión. Esto ayuda a proteger contra ataques de fuerza bruta.
```

#### [`ralkage-hcaptcha.admin.settings.enable_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/es@formal/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_label%22)

> Require on Login

```diff
+Requerido al Iniciar Sesión
```


### `ralkage-word-censor` (missing)

#### [`ralkage-word-censor.admin.settings.replacement_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es@formal/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_help%22)

> Character used to replace each letter of a censored word. Default: \*

```diff
+Carácter utilizado para reemplazar cada letra de una palabra censurada. Predeterminado: *
```

#### [`ralkage-word-censor.admin.settings.replacement_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es@formal/?q=context%3A%3D%22ralkage-word-censor.admin.settings.replacement_label%22)

> Replacement Character

```diff
+Carácter de Reemplazo
```

#### [`ralkage-word-censor.admin.settings.word_list_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es@formal/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_help%22)

> Enter one word or phrase per line. These will be replaced with the replacement character when displayed to users.

```diff
+Ingresa una palabra o frase por línea. Estas se sustituirán por el carácter de reemplazo cuando se muestren a los usuarios.
```

#### [`ralkage-word-censor.admin.settings.word_list_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es@formal/?q=context%3A%3D%22ralkage-word-censor.admin.settings.word_list_label%22)

> Censored Words

```diff
+Palabras Censuradas
```

#### [`ralkage-word-censor.forum.settings.word_censor_help`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es@formal/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_help%22)

> When enabled, configured words will be censored in posts. Disable to see uncensored content.

```diff
+Cuando está activada, las palabras configuradas se censurarán en las publicaciones. Desactívala para ver el contenido sin censura.
```

#### [`ralkage-word-censor.forum.settings.word_censor_label`](https://weblate.rob006.net/translate/flarum2/ralkage-word-censor/es@formal/?q=context%3A%3D%22ralkage-word-censor.forum.settings.word_censor_label%22)

> Enable Word Censoring

```diff
+Habilitar la Censura de Palabras
```


### `ralkage-word-counter` (missing)

#### [`ralkage-word-counter.forum.composer.word_counter`](https://weblate.rob006.net/translate/flarum2/ralkage-word-counter/es@formal/?q=context%3A%3D%22ralkage-word-counter.forum.composer.word_counter%22)

> {words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}

```diff
+{words, plural, one {{words} word} other {{words} words}}, {chars, plural, one {{chars} char} other {{chars} chars}}
```


### `resofire-menu-control` (missing)

#### [`resofire-menu-control.admin.nav_order.add_custom_link`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_custom_link%22)

> Add Custom Link

```diff
+Añadir enlace personalizado
```

#### [`resofire-menu-control.admin.nav_order.add_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.add_highlight%22)

> Highlight this item for users

```diff
+Resaltar este elemento para los usuarios
```

#### [`resofire-menu-control.admin.nav_order.custom_link_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.custom_link_label%22)

> Link label

```diff
+Etiqueta del enlace
```

#### [`resofire-menu-control.admin.nav_order.description`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.description%22)

> Use the arrow buttons to reorder the sidebar navigation items on the forum index page. Changes take effect immediately after saving.

```diff
+Usa los botones de flecha para reordenar los elementos de navegación de la barra lateral en la página de inicio del foro. Los cambios surten efecto inmediatamente después de guardar.
```

#### [`resofire-menu-control.admin.nav_order.flip_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_help%22)

> When enabled, tag links appear at the top of the sidebar and navigation items (All Discussions, Following, etc.) appear below.

```diff
+Cuando está activado, los enlaces de etiquetas aparecen en la parte superior de la barra lateral y los elementos de navegación (Todas las discusiones, Siguiendo, etc.) aparecen debajo.
```

#### [`resofire-menu-control.admin.nav_order.flip_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.flip_label%22)

> Flip navigation (show tags above menu items)

```diff
+Invertir navegación (mostrar etiquetas sobre los elementos del menú)
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_help%22)

> Background color for highlighted nav items. Leave empty to use the default theme color.

```diff
+Color de fondo para los elementos de navegación resaltados. Déjalo vacío para usar el color del tema predeterminado.
```

#### [`resofire-menu-control.admin.nav_order.highlight_color_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.highlight_color_label%22)

> Highlight color

```diff
+Color de resaltado
```

#### [`resofire-menu-control.admin.nav_order.icon_input_title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.icon_input_title%22)

> Custom Font Awesome icon class (e.g. fas fa-bolt). Leave empty to use default.

```diff
+Clase de icono personalizada de Font Awesome (ej. fas fa-bolt). Déjalo vacío para usar el predeterminado.
```

#### [`resofire-menu-control.admin.nav_order.move_down`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.move_down%22)

> Move down

```diff
+Mover abajo
```

#### [`resofire-menu-control.admin.nav_order.move_up`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.move_up%22)

> Move up

```diff
+Mover arriba
```

#### [`resofire-menu-control.admin.nav_order.no_items`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.no_items%22)

> No navigation items detected yet. Visit the forum index page as an admin first to populate this list.

```diff
+Aún no se han detectado elementos de navegación. Visita la página de inicio del foro como administrador primero para poblar esta lista.
```

#### [`resofire-menu-control.admin.nav_order.polls_note`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.polls_note%22)

> Note: If fof/polls is installed, fof-polls-showcase and similar items may appear in this list even if global polls is disabled. Use the × button to remove them permanently.

```diff
+Nota: Si fof/polls está instalado, fof-polls-showcase y elementos similares pueden aparecer en esta lista incluso si las encuestas globales están desactivadas. Usa el botón × para eliminarlos permanentemente.
```

#### [`resofire-menu-control.admin.nav_order.remove_highlight`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.remove_highlight%22)

> Remove highlight

```diff
+Eliminar resaltado
```

#### [`resofire-menu-control.admin.nav_order.remove_item`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.remove_item%22)

> Remove from list

```diff
+Eliminar de la lista
```

#### [`resofire-menu-control.admin.nav_order.save_button`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_button%22)

> Save Order

```diff
+Guardar orden
```

#### [`resofire-menu-control.admin.nav_order.save_success`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.save_success%22)

> Navigation order saved.

```diff
+Orden de navegación guardado.
```

#### [`resofire-menu-control.admin.nav_order.sticky_help`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_help%22)

> When enabled, the sidebar including the Start a Discussion button stays fixed at the top of the viewport as you scroll down.

```diff
+Cuando está activado, la barra lateral, incluido el botón "Iniciar una discusión", permanece fija en la parte superior de la ventana a medida que te desplazas hacia abajo.
```

#### [`resofire-menu-control.admin.nav_order.sticky_label`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.sticky_label%22)

> Sticky sidebar (sidebar stays visible while scrolling)

```diff
+Barra lateral fija (la barra lateral permanece visible al hacer scroll)
```

#### [`resofire-menu-control.admin.nav_order.title`](https://weblate.rob006.net/translate/flarum2/resofire-menu-control/es@formal/?q=context%3A%3D%22resofire-menu-control.admin.nav_order.title%22)

> Menu Item Order

```diff
+Orden de los elementos del menú
```


### `validation` (missing)

#### [`validation.prohibited`](https://weblate.rob006.net/translate/flarum2/validation/es@formal/?q=context%3A%3D%22validation.prohibited%22)

> The :attribute field is prohibited.

```diff
+El campo :attribute prohibido.
```

#### [`validation.prohibited_if`](https://weblate.rob006.net/translate/flarum2/validation/es@formal/?q=context%3A%3D%22validation.prohibited_if%22)

> The :attribute field is prohibited when :other is :value.

```diff
+El campo :attribute se prohíbe cuando :other es :value.
```

#### [`validation.prohibited_unless`](https://weblate.rob006.net/translate/flarum2/validation/es@formal/?q=context%3A%3D%22validation.prohibited_unless%22)

> The :attribute field is prohibited unless :other is in :values.

```diff
+El campo :attribute se prohíbe salvo que :other es :values.
```


### `walsgit-recycle-bin` (missing)

#### [`walsgit-recycle-bin.admin.actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.actions%22)

> Actions

```diff
+Acciones
```

#### [`walsgit-recycle-bin.admin.author`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.author%22)

> Author

```diff
+Autor
```

#### [`walsgit-recycle-bin.admin.bulk_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_actions%22)

> Actions for selected discussions : 

```diff
+Acciones para discusiones seleccionadas: 
```

#### [`walsgit-recycle-bin.admin.bulk_post_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_actions%22)

> Actions for selected posts : 

```diff
+Acciones para publicaciones seleccionadas: 
```

#### [`walsgit-recycle-bin.admin.bulk_post_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_restore_label%22)

> Restore selected posts

```diff
+Restaurar publicaciones seleccionadas
```

#### [`walsgit-recycle-bin.admin.bulk_restore_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_restore_label%22)

> Restore selected discussions

```diff
+Restaurar discusiones seleccionadas
```

#### [`walsgit-recycle-bin.admin.created_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.created_at%22)

> Created at

```diff
+Creada el
```

#### [`walsgit-recycle-bin.admin.delete_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this discussion (irreversible):

```diff
+¿Estás seguro de que quieres <u>eliminar para siempre</u> esta discusión? (es irreversible)
```

#### [`walsgit-recycle-bin.admin.delete_discussion.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.delete_button%22)

> Forever delete this discussion

```diff
+Eliminar esta discusión para siempre
```

#### [`walsgit-recycle-bin.admin.delete_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.success%22)

> Successfully deleted the discussion

```diff
+Se eliminó la discusión con éxito
```

#### [`walsgit-recycle-bin.admin.delete_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.title%22)

> Delete forever

```diff
+Eliminar para siempre
```

#### [`walsgit-recycle-bin.admin.delete_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this post (irreversible):

```diff
+¿Estás seguro de que quieres <u>eliminar para siempre</u> esta publicación? (es irreversible)
```

#### [`walsgit-recycle-bin.admin.delete_post.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.delete_button%22)

> Forever delete this post

```diff
+Eliminar esta publicación para siempre
```

#### [`walsgit-recycle-bin.admin.delete_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.success%22)

> Successfully deleted the post

```diff
+Se eliminó la publicación correctamente
```

#### [`walsgit-recycle-bin.admin.delete_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.title%22)

> Delete forever

```diff
+Eliminar para siempre
```

#### [`walsgit-recycle-bin.admin.delete_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post_tooltip%22)

> Delete post #{postId}

```diff
+Eliminar publicación
```

#### [`walsgit-recycle-bin.admin.delete_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_tooltip%22)

> Delete discussion #{discussionId}

```diff
+Eliminar discusión
```

#### [`walsgit-recycle-bin.admin.discussion_id`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_id%22)

> ID

```diff
+ID
```

#### [`walsgit-recycle-bin.admin.discussion_link_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_link_tooltip%22)

> View discussion

```diff
+Ver discusión
```

#### [`walsgit-recycle-bin.admin.discussion_title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussion_title%22)

> Discussion title

```diff
+Título de la discusión
```

#### [`walsgit-recycle-bin.admin.discussions_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.discussions_bin%22)

> Discussions Bin

```diff
+Papelera de discusiones
```

#### [`walsgit-recycle-bin.admin.empty_list`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.empty_list%22)

> No discussions in the recycle bin.

```diff
+No hay discusiones en la papelera de reciclaje.
```

#### [`walsgit-recycle-bin.admin.hidden_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_at%22)

> Hidden at

```diff
+Oculta el
```

#### [`walsgit-recycle-bin.admin.hidden_discussions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_discussions%22)

> Hidden discussions

```diff
+Discusiones ocultas
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.submit_button%22)

> Restore these discussions

```diff
+Restaurar estas discusiones
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_end%22)

>  selected discussions?

```diff
+ discusiones seleccionadas?
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_start%22)

> Are you sure you want to restore these 

```diff
+¿Estás seguro de que quieres restaurar estas? 
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.title%22)

> Restore the selected discussions

```diff
+Restaurar las discusiones seleccionadas
```

#### [`walsgit-recycle-bin.admin.post.open_post`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.open_post%22)

> Open post

```diff
+Abrir publicación
```

#### [`walsgit-recycle-bin.admin.posts_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.posts_bin%22)

> Posts Bin

```diff
+Papelera de Publicaciones
```

#### [`walsgit-recycle-bin.admin.restore_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.confirmation%22)

> Are you sure you want to restore this discussion:

```diff
+¿Estás seguro de que quieres restaurar esta discusión?
```

#### [`walsgit-recycle-bin.admin.restore_discussion.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.restore_button%22)

> Restore this discussion

```diff
+Restaurar esta discusión
```

#### [`walsgit-recycle-bin.admin.restore_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.success%22)

> Successfully restored the discussion

```diff
+Se restableció la discusión con éxito
```

#### [`walsgit-recycle-bin.admin.restore_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.title%22)

> Restore discussion

```diff
+Restaurar discusión
```

#### [`walsgit-recycle-bin.admin.restore_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.confirmation%22)

> Are you sure you want to restore this post from the discussion 

```diff
+¿Estás seguro de que quieres restaurar esta publicación de la discusión? 
```

#### [`walsgit-recycle-bin.admin.restore_post.restore_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.restore_button%22)

> Restore this post

```diff
+Restaurar esta publicación
```

#### [`walsgit-recycle-bin.admin.restore_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.success%22)

> Successfully restored the post

```diff
+Se restauró la publicación con éxito
```

#### [`walsgit-recycle-bin.admin.restore_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.title%22)

> Restore post

```diff
+Restaurar publicación
```

#### [`walsgit-recycle-bin.admin.restore_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post_tooltip%22)

> Restore post #{postId}

```diff
+Restaurar publicación
```

#### [`walsgit-recycle-bin.admin.restore_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_tooltip%22)

> Restore discussion #{discussionId}

```diff
+Restaurar discusión
```

#### [`walsgit-recycle-bin.admin.search_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_help_text%22)

> Searches for words in titles as well as in the messages of the discussions

```diff
+Búsquedas de palabras en los títulos y en los mensajes de las discusiones
```

#### [`walsgit-recycle-bin.admin.search_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_placeholder%22)

> Search for a discussion

```diff
+Buscar una discusión
```

#### [`walsgit-recycle-bin.admin.search_post_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_help_text%22)

> Searches for words in the hidden posts

```diff
+Búsquedas de palabras en las publicaciones ocultas
```

#### [`walsgit-recycle-bin.admin.search_post_placeholder`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_placeholder%22)

> Search for a post

```diff
+Buscar una publicación
```

#### [`walsgit-recycle-bin.admin.total_hidden_discussions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_discussions%22)

> Total hidden discussions

```diff
+Total de discusiones ocultas
```

#### [`walsgit-recycle-bin.admin.total_hidden_posts`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.total_hidden_posts%22)

> Total hidden posts

```diff
+Total de publicaciones ocultas
```

#### [`walsgit-recycle-bin.admin.unknown_date`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es@formal/?q=context%3A%3D%22walsgit-recycle-bin.admin.unknown_date%22)

> Unknown date

```diff
+Fecha desconocida
```


### `yippy-tag-with-themes` (missing)

#### [`yippy-tag-with-themes.admin.helps.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.design_default%22)

> Select a default design layout

```diff
+Seleccione un diseño de plantilla predeterminado
```

#### [`yippy-tag-with-themes.admin.helps.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.helps.display_themes%22)

> Only allow themes for specific groups

```diff
+Permitir temas solo para grupos específicos
```

#### [`yippy-tag-with-themes.admin.labels.design_default`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.design_default%22)

> Discussion Design Layout

```diff
+Diseño y maquetación de la discusión
```

#### [`yippy-tag-with-themes.admin.labels.display_themes`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.labels.display_themes%22)

> Enable Tag for Themes Permission

```diff
+Habilitar etiqueta para permisos de temas
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic%22)

> Basic

```diff
+Básico
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tab%22)

> Basic (Primary Tab)

```diff
+Básico (Pestaña Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.basic_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.basic_tag%22)

> Basic (Primary Tag)

```diff
+Básico (Etiqueta Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.none`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.none%22)

> None

```diff
+Ninguno
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note%22)

> Sticky Note

```diff
+Nota Sticky
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_banner%22)

> Sticky Note (Primary Banner)

```diff
+Nota Sticky (Banner principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline%22)

> Sticky Note Outline

```diff
+Nota Sticky Esquema
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_banner%22)

> Sticky Note Outline (Primary Banner)

```diff
+Esquema Nota Sticky (Banner Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tab%22)

> Sticky Note Outline (Primary Tab)

```diff
+Esquema de nota Sticky (Pestaña Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_outline_tag%22)

> Sticky Note Outline (Primary Tag)

```diff
+Esquema de nota Sticky (Etiqueta Principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tab`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tab%22)

> Sticky Note (Primary Tab)

```diff
+Nota Sticky (Pestaña principal)
```

#### [`yippy-tag-with-themes.admin.options.design_options.sticky_note_tag`](https://weblate.rob006.net/translate/flarum2/yippy-tag-with-themes/es@formal/?q=context%3A%3D%22yippy-tag-with-themes.admin.options.design_options.sticky_note_tag%22)

> Sticky Note (Primary Tag)

```diff
+Nota Sticky (Etiqueta principal)
```

<!-- {% endraw %} -->
