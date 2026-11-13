# Spanish inherited translations differences

Translations for Spanish (`es`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **25** are translated differently and **608** are
translated only in `es`. Altogether they cover **12** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `clarkwinkelmann-likes-received` | [1](#clarkwinkelmann-likes-received) | [1](#clarkwinkelmann-likes-received-missing) |
| `datitisev-post-galleries` | 0 | [1](#datitisev-post-galleries-missing) |
| `ffans-threadmarks` | 0 | [89](#ffans-threadmarks-missing) |
| `flectar-turnstile` | 0 | [12](#flectar-turnstile-missing) |
| `fof-anti-spam` | 0 | [60](#fof-anti-spam-missing) |
| `fof-author-change` | 0 | [14](#fof-author-change-missing) |
| `fof-badges` | 0 | [26](#fof-badges-missing) |
| `huseyinfiliz-leaderboard` | 0 | [75](#huseyinfiliz-leaderboard-missing) |
| `linkrobins-discussion-banners` | 0 | [55](#linkrobins-discussion-banners-missing) |
| `pianotell-flamoji` | [2](#pianotell-flamoji) | [72](#pianotell-flamoji-missing) |
| `walsgit-discussion-cards` | 0 | [175](#walsgit-discussion-cards-missing) |
| `walsgit-recycle-bin` | [22](#walsgit-recycle-bin) | [28](#walsgit-recycle-bin-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `es` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `clarkwinkelmann-likes-received`

#### [`clarkwinkelmann-likes-received.admin.permission.view`](https://weblate.rob006.net/translate/flarum2/clarkwinkelmann-likes-received/es/?q=context%3A%3D%22clarkwinkelmann-likes-received.admin.permission.view%22)

> View likes received

```diff
-Ver me gusta recibidos
+Ver «Me gusta» recibidos
```

Ver <del>me</del><ins>«Me</ins> <del>gusta</del><ins>gusta»</ins> recibidos


### `pianotell-flamoji`

#### [`pianotell-flamoji.admin.settings.picker_set_auto`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_auto%22)

> Auto

```diff
-Auto
+Automático
```

#### [`pianotell-flamoji.ref.emoji_categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.frequent%22)

> Frequently Used

```diff
-De uso frecuente
+Frecuentes
```


### `walsgit-recycle-bin`

#### [`walsgit-recycle-bin.admin.bulk_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_actions%22)

> Actions for selected discussions : 

```diff
-Acciones para discusiones seleccionadas: 
+Acciones para las discusiones seleccionadas: 
```

Acciones para <ins>las </ins>discusiones seleccionadas: 

#### [`walsgit-recycle-bin.admin.bulk_post_actions`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_actions%22)

> Actions for selected posts : 

```diff
-Acciones para publicaciones seleccionadas: 
+Acciones para las publicaciones seleccionadas: 
```

Acciones para <ins>las </ins>publicaciones seleccionadas: 

#### [`walsgit-recycle-bin.admin.created_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.created_at%22)

> Created at

```diff
-Creada el
+Creado el
```

<del>Creada</del><ins>Creado</ins> el

#### [`walsgit-recycle-bin.admin.delete_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this discussion (irreversible):

```diff
-¿Estás seguro de que quieres <u>eliminar para siempre</u> esta discusión? (es irreversible)
+¿Está seguro de que desea <u>eliminar de forma permanente</u> esta discusión (acción irreversible):
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>desea</ins> &lt;u&gt;eliminar <del>para</del><ins>de</ins> <del>siempre&lt;/u&gt;</del><ins>forma permanente&lt;/u&gt;</ins> esta <del>discusión?</del><ins>discusión</ins> <del>(es</del><ins>(acción</ins> <del>irreversible)</del><ins>irreversible):</ins>

#### [`walsgit-recycle-bin.admin.delete_discussion.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.delete_button%22)

> Forever delete this discussion

```diff
-Eliminar esta discusión para siempre
+Eliminar de forma permanente esta discusión
```

Eliminar <del>esta</del><ins>de</ins> <del>discusión</del><ins>forma</ins> <del>para</del><ins>permanente</ins> <del>siempre</del><ins>esta discusión</ins>

#### [`walsgit-recycle-bin.admin.delete_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.success%22)

> Successfully deleted the discussion

```diff
-Se eliminó la discusión con éxito
+Discusión eliminada correctamente
```

#### [`walsgit-recycle-bin.admin.delete_discussion.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_discussion.title%22)

> Delete forever

```diff
-Eliminar para siempre
+Eliminar de forma permanente
```

Eliminar <del>para</del><ins>de</ins> <del>siempre</del><ins>forma permanente</ins>

#### [`walsgit-recycle-bin.admin.delete_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.confirmation%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; this post (irreversible):

```diff
-¿Estás seguro de que quieres <u>eliminar para siempre</u> esta publicación? (es irreversible)
+¿Está seguro de que desea <u>eliminar de forma permanente</u> esta publicación (acción irreversible):
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>desea</ins> &lt;u&gt;eliminar <del>para</del><ins>de</ins> <del>siempre&lt;/u&gt;</del><ins>forma permanente&lt;/u&gt;</ins> esta <del>publicación?</del><ins>publicación</ins> <del>(es</del><ins>(acción</ins> <del>irreversible)</del><ins>irreversible):</ins>

#### [`walsgit-recycle-bin.admin.delete_post.delete_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.delete_button%22)

> Forever delete this post

```diff
-Eliminar esta publicación para siempre
+Eliminar de forma permanente esta publicación
```

Eliminar <del>esta</del><ins>de</ins> <del>publicación</del><ins>forma</ins> <del>para</del><ins>permanente</ins> <del>siempre</del><ins>esta publicación</ins>

#### [`walsgit-recycle-bin.admin.delete_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.success%22)

> Successfully deleted the post

```diff
-Se eliminó la publicación correctamente
+Publicación eliminada correctamente
```

<del>Se eliminó la</del><ins>Publicación</ins> <del>publicación</del><ins>eliminada</ins> correctamente

#### [`walsgit-recycle-bin.admin.delete_post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post.title%22)

> Delete forever

```diff
-Eliminar para siempre
+Eliminar de forma permanente
```

Eliminar <del>para</del><ins>de</ins> <del>siempre</del><ins>forma permanente</ins>

#### [`walsgit-recycle-bin.admin.delete_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.delete_post_tooltip%22)

> Delete post #{postId}

```diff
-Eliminar publicación
+Eliminar publicación n.º {postId}
```

Eliminar publicación<ins> n.º {postId}</ins>

#### [`walsgit-recycle-bin.admin.hidden_at`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.hidden_at%22)

> Hidden at

```diff
-Oculta el
+Ocultado el
```

<del>Oculta</del><ins>Ocultado</ins> el

#### [`walsgit-recycle-bin.admin.mass_restore_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.text_start%22)

> Are you sure you want to restore these 

```diff
-¿Estás seguro de que quieres restaurar estas? 
+¿Está seguro de que desea restaurar las 
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>desea</ins> restaurar <del>estas?</del><ins>las</ins> 

#### [`walsgit-recycle-bin.admin.posts_bin`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.posts_bin%22)

> Posts Bin

```diff
-Papelera de Publicaciones
+Papelera de publicaciones
```

Papelera de <del>Publicaciones</del><ins>publicaciones</ins>

#### [`walsgit-recycle-bin.admin.restore_discussion.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.confirmation%22)

> Are you sure you want to restore this discussion:

```diff
-¿Estás seguro de que quieres restaurar esta discusión?
+¿Está seguro de que desea restaurar esta discusión:
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>desea</ins> restaurar esta <del>discusión?</del><ins>discusión:</ins>

#### [`walsgit-recycle-bin.admin.restore_discussion.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_discussion.success%22)

> Successfully restored the discussion

```diff
-Se restableció la discusión con éxito
+Discusión restaurada correctamente
```

#### [`walsgit-recycle-bin.admin.restore_post.confirmation`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.confirmation%22)

> Are you sure you want to restore this post from the discussion 

```diff
-¿Estás seguro de que quieres restaurar esta publicación de la discusión? 
+¿Está seguro de que desea restaurar esta publicación de la discusión 
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>desea</ins> restaurar esta publicación de la <del>discusión?</del><ins>discusión</ins> 

#### [`walsgit-recycle-bin.admin.restore_post.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post.success%22)

> Successfully restored the post

```diff
-Se restauró la publicación con éxito
+Publicación restaurada correctamente
```

#### [`walsgit-recycle-bin.admin.restore_post_tooltip`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.restore_post_tooltip%22)

> Restore post #{postId}

```diff
-Restaurar publicación
+Restaurar publicación n.º {postId}
```

Restaurar publicación<ins> n.º {postId}</ins>

#### [`walsgit-recycle-bin.admin.search_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_help_text%22)

> Searches for words in titles as well as in the messages of the discussions

```diff
-Búsquedas de palabras en los títulos y en los mensajes de las discusiones
+Busca palabras tanto en los títulos como en el contenido de las discusiones
```

<del>Búsquedas de</del><ins>Busca</ins> palabras<ins> tanto</ins> en los títulos <del>y</del><ins>como</ins> en <del>los</del><ins>el</ins> <del>mensajes</del><ins>contenido</ins> de las discusiones

#### [`walsgit-recycle-bin.admin.search_post_help_text`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.search_post_help_text%22)

> Searches for words in the hidden posts

```diff
-Búsquedas de palabras en las publicaciones ocultas
+Busca palabras dentro de las publicaciones ocultas
```

<del>Búsquedas de</del><ins>Busca</ins> palabras <del>en</del><ins>dentro de</ins> las publicaciones ocultas


## Missing translations

These strings are translated only in `es`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `es`.


### `clarkwinkelmann-likes-received` (missing)

#### [`clarkwinkelmann-likes-received.forum.user-card.likes`](https://weblate.rob006.net/translate/flarum2/clarkwinkelmann-likes-received/es/?q=context%3A%3D%22clarkwinkelmann-likes-received.forum.user-card.likes%22)

> {likes, plural, one {# like received} other {# likes received}}

```diff
+{likes, plural, one {# «Me gusta» recibido} other {# «Me gusta» recibidos}}
```


### `datitisev-post-galleries` (missing)

#### [`datitisev-post-galleries.admin.settings.swiper_zoom`](https://weblate.rob006.net/translate/flarum2/datitisev-post-galleries/es/?q=context%3A%3D%22datitisev-post-galleries.admin.settings.swiper_zoom%22)

> Enable Swiper zoom module

```diff
+Activar el módulo zoom de Swiper
```


### `ffans-threadmarks` (missing)

#### [`ffans-threadmarks.admin.create_type_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.create_type_modal.submit_button%22)

> Create

```diff
+Crear
```

#### [`ffans-threadmarks.admin.create_type_modal.title`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.create_type_modal.title%22)

> Create Threadmark Type

```diff
+Crear tipo de índice
```

#### [`ffans-threadmarks.admin.edit_type_modal.delete_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.delete_button%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`ffans-threadmarks.admin.edit_type_modal.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.delete_confirmation%22)

> Delete this threadmark type?

```diff
+¿Desea eliminar este tipo de índice?
```

#### [`ffans-threadmarks.admin.edit_type_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.submit_button%22)

> =&gt; ffans-threadmarks.ref.save

```diff
+=> ffans-threadmarks.ref.save
```

#### [`ffans-threadmarks.admin.edit_type_modal.title`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.edit_type_modal.title%22)

> Edit Threadmark Type

```diff
+Editar tipo de índice
```

#### [`ffans-threadmarks.admin.permissions.manage_discussion_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.permissions.manage_discussion_label%22)

> Manage threadmarks in any discussion

```diff
+Gestionar índice en cualquier discusión
```

#### [`ffans-threadmarks.admin.permissions.manage_own_discussion_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.permissions.manage_own_discussion_label%22)

> Manage threadmarks in own discussions

```diff
+Gestionar índice en discusiones propias
```

#### [`ffans-threadmarks.admin.permissions.manage_personal_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.permissions.manage_personal_label%22)

> Manage own personal threadmarks

```diff
+Gestionar de índices personales
```

#### [`ffans-threadmarks.admin.types.actions_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.actions_heading%22)

> Actions

```diff
+Acciones
```

#### [`ffans-threadmarks.admin.types.add_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.add_button%22)

> Add Type

```diff
+Añadir tipo de entrada
```

#### [`ffans-threadmarks.admin.types.builtin_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.builtin_label%22)

> Built-in

```diff
+Integrado
```

#### [`ffans-threadmarks.admin.types.custom_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.custom_label%22)

> Custom

```diff
+Personalizado
```

#### [`ffans-threadmarks.admin.types.edit_type_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.edit_type_a11y_label%22)

> Edit {name}

```diff
+Editar {name}
```

#### [`ffans-threadmarks.admin.types.empty_text`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.empty_text%22)

> No threadmark types yet.

```diff
+No hay tipos de índice definidos.
```

#### [`ffans-threadmarks.admin.types.enable_type_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.enable_type_a11y_label%22)

> Enable {name}

```diff
+Activar {name}
```

#### [`ffans-threadmarks.admin.types.enabled_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.enabled_heading%22)

> Enabled

```diff
+Activado
```

#### [`ffans-threadmarks.admin.types.key_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.key_heading%22)

> =&gt; ffans-threadmarks.ref.key

```diff
+=> ffans-threadmarks.ref.key
```

#### [`ffans-threadmarks.admin.types.order_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.order_heading%22)

> Order

```diff
+Orden
```

#### [`ffans-threadmarks.admin.types.reorder_tooltip`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.reorder_tooltip%22)

> Drag to reorder

```diff
+Arrastre para reordenar
```

#### [`ffans-threadmarks.admin.types.source_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.source_heading%22)

> Source

```diff
+Origen
```

#### [`ffans-threadmarks.admin.types.table_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.table_a11y_label%22)

> Threadmark types

```diff
+Tipos de entradas de índice
```

#### [`ffans-threadmarks.admin.types.type_heading`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.admin.types.type_heading%22)

> =&gt; ffans-threadmarks.ref.type

```diff
+=> ffans-threadmarks.ref.type
```

#### [`ffans-threadmarks.forum.directory.all_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.all_filter%22)

> All

```diff
+Todo
```

#### [`ffans-threadmarks.forum.directory.close_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.close_a11y_label%22)

> Close threadmark directory

```diff
+Cerrar navegador de índices
```

#### [`ffans-threadmarks.forum.directory.discussion_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.discussion_filter%22)

> =&gt; ffans-threadmarks.ref.discussion

```diff
+=> ffans-threadmarks.ref.discussion
```

#### [`ffans-threadmarks.forum.directory.hide_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.hide_button%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.directory.personal_filter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.personal_filter%22)

> =&gt; ffans-threadmarks.ref.mine

```diff
+=> ffans-threadmarks.ref.mine
```

#### [`ffans-threadmarks.forum.directory.scope_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.scope_a11y_label%22)

> Filter threadmarks by scope

```diff
+Filtrar índice por ámbito
```

#### [`ffans-threadmarks.forum.directory.show_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.show_button%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.directory.show_button_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.show_button_a11y_label%22)

> Open threadmark directory

```diff
+Abrir navegador de índices
```

#### [`ffans-threadmarks.forum.directory.title`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.directory.title%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.discussion_controls.show_all_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.discussion_controls.show_all_button%22)

> All Posts

```diff
+Todas las publicaciones
```

#### [`ffans-threadmarks.forum.discussion_controls.show_all_button_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.discussion_controls.show_all_button_a11y_label%22)

> Show all posts

```diff
+Mostrar todas las publicaciones
```

#### [`ffans-threadmarks.forum.discussion_controls.show_threadmarks_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.discussion_controls.show_threadmarks_button%22)

> =&gt; ffans-threadmarks.ref.threadmarks

```diff
+=> ffans-threadmarks.ref.threadmarks
```

#### [`ffans-threadmarks.forum.discussion_controls.show_threadmarks_button_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.discussion_controls.show_threadmarks_button_a11y_label%22)

> Show threadmarked posts only

```diff
+Mostrar solo publicaciones con índice
```

#### [`ffans-threadmarks.forum.manage_modal.add_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.add_button%22)

> Add

```diff
+Añadir
```

#### [`ffans-threadmarks.forum.manage_modal.delete_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.delete_button%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`ffans-threadmarks.forum.manage_modal.delete_discussion_confirmation`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.delete_discussion_confirmation%22)

> Delete this discussion threadmark?

```diff
+¿Desea eliminar este índice de la discusión?
```

#### [`ffans-threadmarks.forum.manage_modal.delete_personal_confirmation`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.delete_personal_confirmation%22)

> Delete this personal threadmark?

```diff
+¿Desea eliminar este índice personal?
```

#### [`ffans-threadmarks.forum.manage_modal.discussion_tab`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.discussion_tab%22)

> =&gt; ffans-threadmarks.ref.discussion

```diff
+=> ffans-threadmarks.ref.discussion
```

#### [`ffans-threadmarks.forum.manage_modal.loading_text`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.loading_text%22)

> =&gt; core.ref.loading

```diff
+=> core.ref.loading
```

#### [`ffans-threadmarks.forum.manage_modal.note_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.note_label%22)

> Note

```diff
+Nota
```

#### [`ffans-threadmarks.forum.manage_modal.note_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.note_placeholder%22)

> Optional

```diff
+Opcional
```

#### [`ffans-threadmarks.forum.manage_modal.personal_tab`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.personal_tab%22)

> Personal

```diff
+Nota personal
```

#### [`ffans-threadmarks.forum.manage_modal.save_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.save_button%22)

> =&gt; ffans-threadmarks.ref.save

```diff
+=> ffans-threadmarks.ref.save
```

#### [`ffans-threadmarks.forum.manage_modal.scope_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.scope_a11y_label%22)

> Threadmark scope

```diff
+Ámbito de la entrada
```

#### [`ffans-threadmarks.forum.manage_modal.title`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.title%22)

> Threadmark · #{number}

```diff
+Índice · #{number}
```

#### [`ffans-threadmarks.forum.manage_modal.type_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.type_label%22)

> =&gt; ffans-threadmarks.ref.type

```diff
+=> ffans-threadmarks.ref.type
```

#### [`ffans-threadmarks.forum.manage_modal.type_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.type_placeholder%22)

> Choose a type

```diff
+Seleccionar un tipo
```

#### [`ffans-threadmarks.forum.manage_modal.unavailable_text`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.manage_modal.unavailable_text%22)

> No threadmarks available to manage.

```diff
+No hay índices disponibles para gestionar.
```

#### [`ffans-threadmarks.forum.post_controls.manage_button`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.post_controls.manage_button%22)

> Manage Threadmark

```diff
+Gestionar índice
```

#### [`ffans-threadmarks.forum.scrubber.cluster_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.scrubber.cluster_a11y_label%22)

> {count, plural, one {# threadmark} other {# threadmarks}}

```diff
+{count, plural, one {# índice} other {# índices}}
```

#### [`ffans-threadmarks.forum.scrubber.open_directory_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.scrubber.open_directory_a11y_label%22)

> Open the full threadmark directory

```diff
+Abrir índices completos de la discusión
```

#### [`ffans-threadmarks.forum.scrubber.threadmark_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.scrubber.threadmark_a11y_label%22)

> Threadmark on post #{number}

```diff
+Índice en la publicación #{number}
```

#### [`ffans-threadmarks.forum.threadmark.deleted_text`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.deleted_text%22)

> This content has been deleted.

```diff
+Este contenido ha sido eliminado.
```

#### [`ffans-threadmarks.forum.threadmark.edit_discussion_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.edit_discussion_a11y_label%22)

> Edit discussion threadmark on post #{number}

```diff
+Editar índice en la publicación #{number}
```

#### [`ffans-threadmarks.forum.threadmark.edit_discussion_tooltip`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.edit_discussion_tooltip%22)

> Edit discussion threadmark

```diff
+Editar índice de la discusión
```

#### [`ffans-threadmarks.forum.threadmark.edit_personal_a11y_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.edit_personal_a11y_label%22)

> Edit personal threadmark on post #{number}

```diff
+Editar índice personal en la publicación #{number}
```

#### [`ffans-threadmarks.forum.threadmark.edit_personal_tooltip`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.edit_personal_tooltip%22)

> Edit personal threadmark

```diff
+Editar índice personal
```

#### [`ffans-threadmarks.forum.threadmark.mine_badge`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.mine_badge%22)

> =&gt; ffans-threadmarks.ref.mine

```diff
+=> ffans-threadmarks.ref.mine
```

#### [`ffans-threadmarks.forum.threadmark.personal_tooltip`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.threadmark.personal_tooltip%22)

> Personal threadmark, visible only to you

```diff
+Índice personal, visible solo para usted
```

#### [`ffans-threadmarks.forum.type_labels.chapter`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.type_labels.chapter%22)

> Chapter

```diff
+Capítulo
```

#### [`ffans-threadmarks.forum.type_labels.default`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.type_labels.default%22)

> Threadmark

```diff
+Índice
```

#### [`ffans-threadmarks.forum.type_labels.highlight`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.type_labels.highlight%22)

> Highlight

```diff
+Destacado
```

#### [`ffans-threadmarks.forum.type_labels.notice`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.type_labels.notice%22)

> Notice

```diff
+Aviso
```

#### [`ffans-threadmarks.forum.type_labels.progress`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.type_labels.progress%22)

> Progress

```diff
+Progreso
```

#### [`ffans-threadmarks.forum.type_labels.update`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.forum.type_labels.update%22)

> Update

```diff
+Actualización
```

#### [`ffans-threadmarks.lib.gdpr.anonymize_description`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.gdpr.anonymize_description%22)

> Deletes your personal threadmarks and clears your creator/editor IDs from discussion threadmarks.

```diff
+Elimina sus notas personales del índice y borra sus ID de creador/editor en las entradas de las discusiones.
```

#### [`ffans-threadmarks.lib.gdpr.delete_description`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.gdpr.delete_description%22)

> Deletes your personal threadmarks and clears your creator/editor IDs from discussion threadmarks.

```diff
+Elimina sus notas personales del índice y borra sus ID de creador/editor en las entradas de las discusiones.
```

#### [`ffans-threadmarks.lib.gdpr.export_description`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.gdpr.export_description%22)

> Exports all your personal threadmarks and discussion threadmarks you created or last edited, without post content.

```diff
+Exporta todas sus notas personales y las entradas del índice de discusión que haya creado o editado por última vez (sin incluir el contenido de las publicaciones).
```

#### [`ffans-threadmarks.lib.type_form.color_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.color_label%22)

> =&gt; core.ref.color

```diff
+=> core.ref.color
```

#### [`ffans-threadmarks.lib.type_form.icon_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.icon_label%22)

> =&gt; core.ref.icon

```diff
+=> core.ref.icon
```

#### [`ffans-threadmarks.lib.type_form.icon_placeholder`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.icon_placeholder%22)

> fas fa-bookmark

```diff
+fas fa-bookmark
```

#### [`ffans-threadmarks.lib.type_form.key_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.key_label%22)

> =&gt; ffans-threadmarks.ref.key

```diff
+=> ffans-threadmarks.ref.key
```

#### [`ffans-threadmarks.lib.type_form.name_label`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.type_form.name_label%22)

> Name

```diff
+Nombre
```

#### [`ffans-threadmarks.lib.validation.disabled_type`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.disabled_type%22)

> This threadmark type is disabled. Choose another type.

```diff
+Este tipo de entrada de índice está desactivado. Elija otro tipo.
```

#### [`ffans-threadmarks.lib.validation.duplicate_discussion`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.duplicate_discussion%22)

> This post already has a discussion threadmark. Edit the existing one instead.

```diff
+Esta publicación ya está indexada en la discusión. Edite la entrada existente en su lugar.
```

#### [`ffans-threadmarks.lib.validation.duplicate_personal`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.duplicate_personal%22)

> You already have a personal threadmark on this post. Edit the existing one instead.

```diff
+Ya tiene una nota personal en el índice para esta publicación. Edite la existente en su lugar.
```

#### [`ffans-threadmarks.lib.validation.first_post`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.first_post%22)

> Threadmarks cannot be added to the first post.

```diff
+No se pueden añadir entradas al índice en la primera publicación.
```

#### [`ffans-threadmarks.lib.validation.invalid_discussion_post`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.invalid_discussion_post%22)

> Discussion threadmarks can only target comment posts.

```diff
+Solo se pueden añadir al índice publicaciones de respuesta.
```

#### [`ffans-threadmarks.lib.validation.invalid_personal_post`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.invalid_personal_post%22)

> Personal threadmarks can only target comment posts.

```diff
+Las notas personales del índice solo se pueden añadir a publicaciones de respuesta.
```

#### [`ffans-threadmarks.lib.validation.type_in_use`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.lib.validation.type_in_use%22)

> This type is in use and cannot be deleted.

```diff
+Este tipo está en uso y no se puede eliminar.
```

#### [`ffans-threadmarks.ref.discussion`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.ref.discussion%22)

> Discussion

```diff
+Discusión
```

#### [`ffans-threadmarks.ref.key`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.ref.key%22)

> Key

```diff
+Clave
```

#### [`ffans-threadmarks.ref.mine`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.ref.mine%22)

> Mine

```diff
+Mios
```

#### [`ffans-threadmarks.ref.save`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.ref.save%22)

> Save

```diff
+Guardar
```

#### [`ffans-threadmarks.ref.threadmarks`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.ref.threadmarks%22)

> Threadmarks

```diff
+Índice
```

#### [`ffans-threadmarks.ref.type`](https://weblate.rob006.net/translate/flarum2/ffans-threadmarks/es/?q=context%3A%3D%22ffans-threadmarks.ref.type%22)

> Type

```diff
+Tipo
```


### `flectar-turnstile` (missing)

#### [`flectar-turnstile.admin.settings.forgot`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.admin.settings.forgot%22)

> =&gt; core.forum.forgot\_password.title

```diff
+=> core.forum.forgot_password.title
```

#### [`flectar-turnstile.admin.settings.help_text`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.admin.settings.help_text%22)

> Generate Turnstile keys on your Cloudflare account &lt;a&gt;here&lt;/a&gt;.

```diff
+Genere las claves de Turnstile en su cuenta de Cloudflare <a>aquí</a>.
```

#### [`flectar-turnstile.admin.settings.secret_key`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.admin.settings.secret_key%22)

> Secret key

```diff
+Clave secreta (Secret key)
```

#### [`flectar-turnstile.admin.settings.signin`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.admin.settings.signin%22)

> =&gt; core.forum.log\_in.title

```diff
+=> core.forum.log_in.title
```

#### [`flectar-turnstile.admin.settings.signup`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.admin.settings.signup%22)

> =&gt; core.forum.sign\_up.title

```diff
+=> core.forum.sign_up.title
```

#### [`flectar-turnstile.admin.settings.site_key`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.admin.settings.site_key%22)

> Site key

```diff
+Clave del sitio (Site key)
```

#### [`flectar-turnstile.forum.error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.forum.error%22)

> An error occurred while verifying you are human. Please try again.

```diff
+Ocurrió un error al verificar si es un usuario humano. Por favor, inténtelo de nuevo.
```

#### [`flectar-turnstile.forum.not_loaded_error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.forum.not_loaded_error%22)

> Failed to load Cloudflare Turnstile. Please refresh the page, and check your adblocker.

```diff
+Error al cargar Cloudflare Turnstile. Por favor, recargue la página y verifique su bloqueador de anuncios.
```

#### [`flectar-turnstile.forum.validation_error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22flectar-turnstile.forum.validation_error%22)

> Please complete the Turnstile challenge.

```diff
+Por favor, complete el desafío de Turnstile.
```

#### [`validation.custom.turnstile.required`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22validation.custom.turnstile.required%22)

> Please complete the Turnstile challenge.

```diff
+Por favor, complete el desafío de Turnstile.
```

#### [`validation.custom.turnstileToken.required`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22validation.custom.turnstileToken.required%22)

> Please complete the Turnstile challenge.

```diff
+Por favor, complete el desafío de Turnstile.
```

#### [`validation.turnstile`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/es/?q=context%3A%3D%22validation.turnstile%22)

> We couldn't verify if you're a robot or not. Please refresh the page and try again.

```diff
+No pudimos verificar si es un bot o no. Por favor, recargue la página e inténtelo de nuevo.
```


### `fof-anti-spam` (missing)

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
+Registro bloqueado para {username} ({email}) desde la IP {ip}
```

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
+Se marcó a {username} como spamer
```

#### [`fof-anti-spam.admin.blocked_registrations.attempted-at`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.attempted-at%22)

> Attempted at

```diff
+Intento realizado
```

#### [`fof-anti-spam.admin.blocked_registrations.button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.button%22)

> Blocked Registrations

```diff
+Registros bloqueados
```

#### [`fof-anti-spam.admin.blocked_registrations.delete_entry`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.delete_entry%22)

> Delete entry

```diff
+Eliminar registro
```

#### [`fof-anti-spam.admin.blocked_registrations.email`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.email%22)

> Email Address

```diff
+Dirección de correo
```

#### [`fof-anti-spam.admin.blocked_registrations.ip`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.ip%22)

> IP Address

```diff
+Dirección IP
```

#### [`fof-anti-spam.admin.blocked_registrations.login-provider`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.login-provider%22)

> Login Provider

```diff
+Proveedor de acceso
```

#### [`fof-anti-spam.admin.blocked_registrations.login-provider-data`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.login-provider-data%22)

> Login Provider Data

```diff
+Datos del proveedor de acceso
```

#### [`fof-anti-spam.admin.blocked_registrations.no-records`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.no-records%22)

> No blocked registrations found.

```diff
+No se encontraron registros bloqueados.
```

#### [`fof-anti-spam.admin.blocked_registrations.sfs-data`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.sfs-data%22)

> StopForumSpam Data

```diff
+Datos de StopForumSpam
```

#### [`fof-anti-spam.admin.blocked_registrations.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.title%22)

> Blocked Registrations

```diff
+Registros bloqueados
```

#### [`fof-anti-spam.admin.blocked_registrations.username`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.username%22)

> Username

```diff
+Nombre de usuario
```

#### [`fof-anti-spam.admin.permissions.spamblock_users_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.permissions.spamblock_users_label%22)

> Mark user as spammer

```diff
+Marcar usuario como spammer
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be soft deleted instead.

```diff
+Eliminará de forma permanente todas las discusiones iniciadas por este usuario. Si se desactiva, se ocultarán.
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_label%22)

> Delete discussions

```diff
+Eliminar discusiones
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_posts_help%22)

> This will permanently delete all posts made by this user. When disabled, posts will be soft deleted instead.

```diff
+Eliminará permanentemente todas las publicaciones realizadas por este usuario. Si se desactiva, se ocultarán.
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_posts_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_posts_label%22)

> Delete posts

```diff
+Eliminar publicaciones
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_user_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_user_help%22)

> This will permanently delete the user. When disabled, the user will be suspended instead.

```diff
+Eliminará permanentemente la cuenta de usuario. Si se desactiva, el usuario será suspendido en su lugar.
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_user_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_user_label%22)

> Delete user

```diff
+Eliminar usuario
```

#### [`fof-anti-spam.admin.settings.default-actions.heading`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.heading%22)

> Default moderation actions

```diff
+Acciones de moderación predeterminadas
```

#### [`fof-anti-spam.admin.settings.default-actions.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.introduction%22)

> When a user is marked as a spammer, moderators are able to choose from various actions on how to deal with the particular use case. These settings allow you to pre-set the actions you'll normally take, to speed up the process, but also allowing for variations as needed.

```diff
+Al marcar a un usuario como spamer, los moderadores pueden elegir entre diversas acciones. Estos ajustes le permiten predefinir las medidas estándar para agilizar el proceso.
```

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help%22)

> This will move all discussions started by this user to the tag(s) you specified. Clear the tag selection to leave discussions in their original tag(s). Has no effect if the 'Delete discussions' option is enabled.

```diff
+Moverá las discusiones iniciadas por el usuario a las etiquetas especificadas. Limpie la selección para dejarlas en su etiqueta original. No tiene efecto si la opción de eliminar discusiones está activa.
```

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label%22)

> Move discussions to tag(s)

```diff
+Mover discusiones a etiqueta(s)
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_instructions_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_instructions_text%22)

> &lt;register&gt;Sign up for StopForumSpam&lt;/register&gt;. Then you will need to &lt;key&gt;obtain an API key&lt;/key&gt;.

```diff
+<register>Regístrese en StopForumSpam</register> y luego <key>obtenga una clave API</key>.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_label%22)

> API Key

```diff
+Clave API
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_text%22)

> You have the option to report spammers to StopForumSpam in order to keep the greater forum community spam free.

```diff
+Puede enviar reportes de spammers a StopForumSpam para contribuir a la comunidad global.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.confidence_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.confidence_help%22)

> The confidence score is a reasonably good indicator that the field under test would result in unwanted activity. Set your confidence level as a percentage. If the field is equal or above this figure, the registration will be blocked, regardless on the 'frequency' test above.

```diff
+Porcentaje de certeza de que el dato comprobado provocará actividad no deseada. Si el valor es igual o superior a esta cifra, el registro se bloqueará independientemente del test de frecuencia.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.confidence_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.confidence_label%22)

> Confidence

```diff
+Nivel de confianza
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_hash_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_hash_help%22)

> Pass a MD5 hash of the email address should you wish to not pass the email address itself. This method bypasses all blacklists, normalisation and obfuscation bypass checks.

```diff
+Envía un hash MD5 de la dirección de correo en lugar del texto plano. Este método omite listas negras y comprobaciones de ofuscación.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_hash_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_hash_label%22)

> Use hashed email address

```diff
+Usar hash de correo electrónico
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_label%22)

> Email Spam Check

```diff
+Comprobación de correo electrónico
```

#### [`fof-anti-spam.admin.settings.stopforumspam.frequency_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.frequency_help%22)

> The number of spam reports between all enabled checks that will trip the spam filter.
> Ex: If the email has 1 hit, and the ip has 2 hits, there will be 3 hits in total. If the threshold is set to 3 or less we will prevent the registration.
>

```diff
+Número total de reportes de spam entre las comprobaciones activadas que disparará el filtro.
+Ejemplo: Si el correo tiene 1 coincidencia y la IP 2, sumarán 3 en total. Si el umbral se define en 3 o menos, se bloqueará el registro.
+
```

#### [`fof-anti-spam.admin.settings.stopforumspam.frequency_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.frequency_label%22)

> Threshold

```diff
+Umbral de frecuencia
```

#### [`fof-anti-spam.admin.settings.stopforumspam.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.introduction%22)

> Checks new user registrations against the &lt;a&gt;StopForumSpam&lt;/a&gt; database. If either the &lt;code&gt;confidence&lt;/code&gt; or &lt;code&gt;frequency&lt;/code&gt; thresholds are reached, the user is prevented from completing their registration on your forum.
>
> SSO register via &lt;code&gt;fof/oauth&lt;/code&gt; and &lt;code&gt;fof/passport&lt;/code&gt; is also supported. Other SSO providers should work, but are untested.
>

```diff
+Verifica los nuevos registros contra la base de datos de <a>StopForumSpam</a>. Si se alcanzan los umbrales de <code>confianza</code> o <code>frecuencia</code>, se impedirá al usuario completar el registro.
+
+Admite registros SSO a través de <code>fof/oauth</code> y <code>fof/passport</code>.
+
```

#### [`fof-anti-spam.admin.settings.stopforumspam.ip_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.ip_label%22)

> IP Address Spam Check

```diff
+Comprobación de dirección IP
```

#### [`fof-anti-spam.admin.settings.stopforumspam.region_closest_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.region_closest_label%22)

> Closest

```diff
+Más cercano
```

#### [`fof-anti-spam.admin.settings.stopforumspam.region_europe_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.region_europe_label%22)

> Europe

```diff
+Europa
```

#### [`fof-anti-spam.admin.settings.stopforumspam.region_us_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.region_us_label%22)

> United States

```diff
+Estados Unidos
```

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help%22)

> By default we will direct the lookup to the closest regional server in order to provide the fastest response. Should you wish to restrict traffic to a specific region, such as for compliance with company or country privacy regulations, then you can force a connection to a specific region.

```diff
+De forma predeterminada, las consultas se dirigen al servidor regional más cercano. Si requiere restringir el tráfico a una región específica por normativas de privacidad, puede forzar la conexión.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_label%22)

> Geographic Access

```diff
+Acceso geográfico
```

#### [`fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_label%22)

> Report blocked registrations

```diff
+Reportar registros bloqueados
```

#### [`fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_help%22)

> If enabled, we will check the StopForumSpam database when a new user registers on your forum. If the user is found (username, IP address, email) and that data point is enabled along with the SFS confidence level reaching your defined level, they will be prevented from completing their registration.

```diff
+Comprueba la base de datos de StopForumSpam cuando un nuevo usuario se registra. Si se encuentra coincidencia y se alcanza el nivel de confianza configurado, se impedirá el registro.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_label%22)

> Lookup registrations

```diff
+Consultar registros en StopForumSpam
```

#### [`fof-anti-spam.admin.settings.stopforumspam.username_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.username_label%22)

> Username Spam Check

```diff
+Comprobación de nombre de usuario
```

#### [`fof-anti-spam.forum.message.stopforumspam.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.message.stopforumspam.blocked%22)

> Details of your registration have been found in a spam prevention database, therefore your registration has been blocked.

```diff
+Sus datos de registro se encuentran en una base de datos de prevención de spam, por lo que su registro ha sido bloqueado.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be hidden instead.

```diff
+Eliminará permanentemente todas las discusiones iniciadas por este usuario. Si se desactiva, se ocultarán.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label%22)

> Delete discussions

```diff
+Eliminar discusiones
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_posts_help%22)

> This will permanently delete all posts (comments, replies, etc) made by this user. When disabled, posts will be hidden instead.

```diff
+Eliminará permanentemente todas las publicaciones (comentarios, respuestas, etc.) de este usuario. Si se desactiva, se ocultarán.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_posts_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_posts_label%22)

> Delete posts

```diff
+Eliminar publicaciones
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_user_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_user_help%22)

> This will permanently delete the user. When disabled, the user will be suspended instead.

```diff
+Eliminará permanentemente la cuenta de usuario. Si se desactiva, el usuario será suspendido en su lugar.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_user_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_user_label%22)

> Delete user

```diff
+Eliminar usuario
```

#### [`fof-anti-spam.forum.spammer_modal.intro`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.intro%22)

> When marking a user as a spammer, several actions will be taken, which depends on the extensions available on your forum.

```diff
+Al marcar a un usuario como spamer, se aplicarán diversas acciones en función de las extensiones disponibles en el foro.
```

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_help%22)

> This will move all discussions started by this user to the tag you specified in the forum settings. When disabled, discussions will be left in their current tags.

```diff
+Moverá las discusiones del usuario a la etiqueta especificada en la configuración. Si se desactiva, permanecerán en su etiqueta actual.
```

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_label%22)

> Move discussions to quarantined tag

```diff
+Mover discusiones a la etiqueta de cuarentena
```

#### [`fof-anti-spam.forum.spammer_modal.process_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.process_button%22)

> Process

```diff
+Procesar
```

#### [`fof-anti-spam.forum.spammer_modal.report_to_sfs_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.report_to_sfs_help%22)

> This will report the user's basic details (username, email, IP address) to StopForumSpam. This will help prevent the user from registering on other forums that use the StopForumSpam service.

```diff
+Enviará los datos del usuario (nombre, correo e IP) a StopForumSpam para evitar que se registre en otros foros que utilicen la plataforma.
```

#### [`fof-anti-spam.forum.spammer_modal.report_to_sfs_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.report_to_sfs_label%22)

> Report to StopForumSpam

```diff
+Reportar a StopForumSpam
```

#### [`fof-anti-spam.forum.spammer_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.title%22)

> Mark {username} as a spammer

```diff
+Marcar a {username} como spamer
```

#### [`fof-anti-spam.forum.user_controls.spammer_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/es/?q=context%3A%3D%22fof-anti-spam.forum.user_controls.spammer_button%22)

> Spammer

```diff
+Spammer
```


### `fof-author-change` (missing)

#### [`fof-author-change.admin.permissions.edit-date`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-date%22)

> Update discussion and post date

```diff
+Actualizar fecha de la discusión y publicación
```

#### [`fof-author-change.admin.permissions.edit-user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-user%22)

> Update discussion and post author

```diff
+Actualizar autor de la discusión y publicación
```

#### [`fof-author-change.forum.controls.edit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.controls.edit%22)

> Edit Author and Date

```diff
+Editar autor y fecha
```

#### [`fof-author-change.forum.modal.created_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.created_at%22)

> Creation time

```diff
+Hora de creación
```

#### [`fof-author-change.forum.modal.edited_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.edited_at%22)

> Edit time

```diff
+Editar hora
```

#### [`fof-author-change.forum.modal.sync-impossible`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.sync-impossible%22)

> Cannot find first post. Try scrolling to the start of the discussion.

```diff
+No se puede encontrar la primera publicación. Intente desplazarse al inicio de la discusión.
```

#### [`fof-author-change.forum.modal.sync-with-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-discussion%22)

> Sync with discussion

```diff
+Sincronizar con discusión
```

#### [`fof-author-change.forum.modal.sync-with-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-post%22)

> Sync with first post

```diff
+Sincronizar con la primera publicación
```

#### [`fof-author-change.forum.modal.title-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.title-discussion%22)

> Edit Discussion Author and Date

```diff
+Editar autor y fecha de la discusión
```

#### [`fof-author-change.forum.modal.title-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.title-post%22)

> Edit Post Author and Date

```diff
+Editar autor y fecha de la publicación
```

#### [`fof-author-change.forum.modal.user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.modal.user%22)

> Author

```diff
+Autor
```

#### [`fof-author-change.forum.search.no-results`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.search.no-results%22)

> No results

```diff
+Sin resultados
```

#### [`fof-author-change.forum.search.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.search.placeholder%22)

> Search users

```diff
+Buscar usuarios
```

#### [`fof-author-change.forum.search.type-more`](https://weblate.rob006.net/translate/flarum2/fof-author-change/es/?q=context%3A%3D%22fof-author-change.forum.search.type-more%22)

> Type 3 characters to search database

```diff
+Escriba al menos 3 caracteres para buscar
```


### `fof-badges` (missing)

#### [`fof-badges.defaults.badges.active-member.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.description%22)

> Post 50 replies

```diff
+Publicar 50 respuestas
```

#### [`fof-badges.defaults.badges.active-member.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.name%22)

> Active Member

```diff
+Miembro activo
```

#### [`fof-badges.defaults.badges.anniversary.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.description%22)

> Be a member for one year

```diff
+Miembro por un año
```

#### [`fof-badges.defaults.badges.anniversary.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.name%22)

> Anniversary

```diff
+Aniversario
```

#### [`fof-badges.defaults.badges.conversation-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.description%22)

> Start your first discussion

```diff
+Iniciar primera discusión
```

#### [`fof-badges.defaults.badges.conversation-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.name%22)

> Conversation Starter

```diff
+Iniciador de conversaciones
```

#### [`fof-badges.defaults.badges.editor.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.editor.description%22)

> Edit 10 posts to improve them

```diff
+Editar 10 publicaciones para mejorarlas
```

#### [`fof-badges.defaults.badges.editor.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.editor.name%22)

> Editor

```diff
+Editor
```

#### [`fof-badges.defaults.badges.first-post.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.description%22)

> Write your first reply

```diff
+Escribir primera respuesta
```

#### [`fof-badges.defaults.badges.first-post.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.name%22)

> First Post

```diff
+Primera publicación
```

#### [`fof-badges.defaults.badges.first-week.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.description%22)

> Be a member for 7 days

```diff
+Miembro por 7 días
```

#### [`fof-badges.defaults.badges.first-week.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.name%22)

> First Week

```diff
+Primera semana
```

#### [`fof-badges.defaults.badges.profile-picture.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.description%22)

> Upload a profile picture

```diff
+Subir una imagen de perfil
```

#### [`fof-badges.defaults.badges.profile-picture.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.name%22)

> Profile Picture

```diff
+Imagen de perfil
```

#### [`fof-badges.defaults.badges.prolific.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.description%22)

> Post 200 replies

```diff
+Publicar 200 respuestas
```

#### [`fof-badges.defaults.badges.prolific.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.name%22)

> Prolific

```diff
+Prolífico
```

#### [`fof-badges.defaults.badges.regular.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.regular.description%22)

> Be a member for 30 days

```diff
+Miembro por 30 días
```

#### [`fof-badges.defaults.badges.regular.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.regular.name%22)

> Regular

```diff
+Habitual
```

#### [`fof-badges.defaults.badges.topic-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.description%22)

> Start 10 discussions

```diff
+Empezar 10 discusiones
```

#### [`fof-badges.defaults.badges.topic-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.name%22)

> Topic Starter

```diff
+Creador de temas
```

#### [`fof-badges.defaults.categories.getting-started.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.description%22)

> Badges for new members taking their first steps

```diff
+Insignias para los nuevos miembros en sus primeros pasos
```

#### [`fof-badges.defaults.categories.getting-started.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.name%22)

> Getting Started

```diff
+Primeros pasos
```

#### [`fof-badges.defaults.categories.milestones.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.description%22)

> Badges for reaching important milestones

```diff
+Insignias por alcanzar hitos importantes
```

#### [`fof-badges.defaults.categories.milestones.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.name%22)

> Milestones

```diff
+Hitos
```

#### [`fof-badges.defaults.categories.posting.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.categories.posting.description%22)

> Badges for posting milestones and contributions

```diff
+Insignias por hitos de publicación y contribuciones
```

#### [`fof-badges.defaults.categories.posting.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/es/?q=context%3A%3D%22fof-badges.defaults.categories.posting.name%22)

> Posting

```diff
+Publicación
```


### `huseyinfiliz-leaderboard` (missing)

#### [`huseyinfiliz-leaderboard.admin.modals.close`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.close%22)

> Close

```diff
+Cerrar
```

#### [`huseyinfiliz-leaderboard.admin.modals.none_selected`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.none_selected%22)

> None selected

```diff
+Ninguno seleccionado
```

#### [`huseyinfiliz-leaderboard.admin.modals.select_groups`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.select_groups%22)

> Select Groups

```diff
+Seleccionar grupos
```

#### [`huseyinfiliz-leaderboard.admin.modals.select_tags`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.modals.select_tags%22)

> Select Tags

```diff
+Seleccionar etiquetas
```

#### [`huseyinfiliz-leaderboard.admin.settings.already_running`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.already_running%22)

> A recalculation is already in progress. Please wait for it to finish.

```diff
+Ya hay un recálculo en progreso. Por favor, espere a que finalice.
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_groups_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_groups_help%22)

> Users in selected groups will be excluded from the leaderboard.

```diff
+Los usuarios de los grupos seleccionados quedarán excluidos de la tabla de clasificación.
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_groups_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_groups_label%22)

> Excluded Groups

```diff
+Grupos excluidos
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_help%22)

> Discussions with selected tags will not earn points.

```diff
+Las discusiones con las etiquetas seleccionadas no otorgarán puntos.
```

#### [`huseyinfiliz-leaderboard.admin.settings.excluded_tags_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.excluded_tags_label%22)

> Excluded Tags

```diff
+Etiquetas excluidas
```

#### [`huseyinfiliz-leaderboard.admin.settings.extension_not_enabled`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.extension_not_enabled%22)

> This extension is not enabled.

```diff
+Esta extensión no está activada.
```

#### [`huseyinfiliz-leaderboard.admin.settings.leaderboard_name_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.leaderboard_name_label%22)

> Leaderboard Name

```diff
+Nombre de la tabla de clasificación
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_badge_earned_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_badge_earned_label%22)

> Points for earning a badge

```diff
+Puntos por obtener una insignia
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_best_answer_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_best_answer_label%22)

> Points for best answer

```diff
+Puntos por mejor respuesta
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_changed_notice%22)

> Point values have changed. Sync points to apply new values.

```diff
+El valor de los puntos ha cambiado. Sincronice los puntos para aplicar los nuevos valores.
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_daily_login_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_daily_login_label%22)

> Points for daily login

```diff
+Puntos por inicio de sesión diario
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_discussion_started_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_discussion_started_label%22)

> Points for starting a discussion

```diff
+Puntos por iniciar una discusión
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_downvote_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_downvote_received_label%22)

> Points for receiving a downvote

```diff
+Puntos por recibir un voto negativo
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_label_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_label_label%22)

> Points Label

```diff
+Etiqueta de puntos
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_like_given_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_like_given_label%22)

> Points for giving a like

```diff
+Puntos por dar un «Me gusta»
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_like_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_like_received_label%22)

> Points for receiving a like

```diff
+Puntos por recibir un «Me gusta»
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_post_created_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_post_created_label%22)

> Points for posting a reply

```diff
+Puntos por publicar una respuesta
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_reaction_given_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_reaction_given_label%22)

> Points for giving a reaction

```diff
+Puntos por dar una reacción
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_reaction_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_reaction_received_label%22)

> Points for receiving a reaction

```diff
+Puntos por recibir una reacción
```

#### [`huseyinfiliz-leaderboard.admin.settings.points_upvote_received_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.points_upvote_received_label%22)

> Points for receiving an upvote

```diff
+Puntos por recibir un voto positivo
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_button`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_button%22)

> Recalculate All Activity

```diff
+Recalcular toda la actividad
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_confirm%22)

> This will re-scan all source data and rebuild point records from scratch. This may take a while on large forums.

```diff
+Se volverán a analizar los datos de origen y se reconstruirán los registros de puntos desde cero. Esto puede tardar unos minutos en foros grandes.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_failed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_failed%22)

> Recalculation failed. You can try again.

```diff
+El cálculo ha fallado. Puede intentarlo de nuevo.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_help%22)

> Re-scans all source data (discussions, posts, likes, etc.), removes orphaned records, adds missing ones, and rebuilds all totals. Use this after changing tag exclusions or if data seems out of sync.

```diff
+Vuelve a analizar todos los datos de origen (discusiones, publicaciones, «Me gusta», etc.), elimina registros huérfanos, añade los faltantes y reconstruye los totales. Utilice esta opción tras cambiar exclusiones de etiquetas o si los datos parecen desincronizados.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_retry`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_retry%22)

> Try Again

```diff
+Reintentar
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_success%22)

> All activity recalculated successfully.

```diff
+Se ha recalculado toda la actividad correctamente.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_title%22)

> Recalculate All Activity

```diff
+Recalcular toda la actividad
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_points_warning`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_points_warning%22)

> Do not close this page or navigate away while recalculation is in progress. The operation will fail if interrupted.

```diff
+No cierre esta página ni navegue a otra sección mientras el cálculo esté en progreso. La operación fallará si se interrumpe.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_button`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_button%22)

> Sync Points

```diff
+Sincronizar puntos
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_help%22)

> Recalculates all user point totals using current point values. Use this after changing point values.

```diff
+Recalcula los totales de puntos de todos los usuarios utilizando los valores actuales. Utilice esta opción tras modificar el valor de los puntos.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_success%22)

> Points synced successfully.

```diff
+Puntos sincronizados correctamente.
```

#### [`huseyinfiliz-leaderboard.admin.settings.recalculate_totals_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.recalculate_totals_title%22)

> Sync Points

```diff
+Sincronizar puntos
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_badges`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_badges%22)

> Badges

```diff
+Insignias
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_best_answer`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_best_answer%22)

> Best Answer

```diff
+Mejor respuesta
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_core`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_core%22)

> Core Points

```diff
+Puntos principales
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_gamification`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_gamification%22)

> Gamification

```diff
+Gamificación
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_likes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_likes%22)

> Likes

```diff
+Me gusta
```

#### [`huseyinfiliz-leaderboard.admin.settings.section_reactions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.section_reactions%22)

> Reactions

```diff
+Reacciones
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_badge_earned`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_badge_earned%22)

> Scanning badges...

```diff
+Analizando insignias...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_best_answer`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_best_answer%22)

> Scanning best answers...

```diff
+Analizando mejores respuestas...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_discussion_started`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_discussion_started%22)

> Scanning discussions...

```diff
+Analizando discusiones...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_like_given`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_like_given%22)

> Scanning likes given...

```diff
+Analizando «Me gusta» dados...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_like_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_like_received%22)

> Scanning likes received...

```diff
+Analizando «Me gusta» recibidos...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_post_created`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_post_created%22)

> Scanning posts...

```diff
+Analizando publicaciones...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_given`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_given%22)

> Scanning reactions given...

```diff
+Analizando reacciones dadas...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_reaction_received%22)

> Scanning reactions received...

```diff
+Analizando reacciones recibidas...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_rebuild_totals`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_rebuild_totals%22)

> Rebuilding totals...

```diff
+Reconstruyendo totales...
```

#### [`huseyinfiliz-leaderboard.admin.settings.sync_step_vote_received`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.sync_step_vote_received%22)

> Scanning votes...

```diff
+Analizando votos...
```

#### [`huseyinfiliz-leaderboard.admin.settings.tags_changed_notice`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.settings.tags_changed_notice%22)

> Tag exclusions have changed. Recalculate all activity to update historical data.

```diff
+Las exclusiones de etiquetas han cambiado. Recalcule toda la actividad para actualizar el historial de datos.
```

#### [`huseyinfiliz-leaderboard.admin.tabs.exclusions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.exclusions%22)

> Exclusions

```diff
+Exclusiones
```

#### [`huseyinfiliz-leaderboard.admin.tabs.general`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.general%22)

> General

```diff
+General
```

#### [`huseyinfiliz-leaderboard.admin.tabs.maintenance`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.maintenance%22)

> Maintenance

```diff
+Mantenimiento
```

#### [`huseyinfiliz-leaderboard.admin.tabs.points`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.admin.tabs.points%22)

> Points

```diff
+Puntos
```

#### [`huseyinfiliz-leaderboard.forum.contenders.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.contenders.title%22)

> Top Contenders

```diff
+Principales aspirantes
```

#### [`huseyinfiliz-leaderboard.forum.honorable.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.honorable.title%22)

> Honorable Mentions

```diff
+Menciones de honor
```

#### [`huseyinfiliz-leaderboard.forum.list.load_more`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.load_more%22)

> Show More

```diff
+Mostrar más
```

#### [`huseyinfiliz-leaderboard.forum.list.no_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.no_results%22)

> No results for this period.

```diff
+No hay resultados para este período.
```

#### [`huseyinfiliz-leaderboard.forum.list.points`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.points%22)

> {points} {label}

```diff
+{points} {label}
```

#### [`huseyinfiliz-leaderboard.forum.list.rank`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.list.rank%22)

> Rank

```diff
+Puesto
```

#### [`huseyinfiliz-leaderboard.forum.period.all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.all%22)

> All Time

```diff
+Histórico
```

#### [`huseyinfiliz-leaderboard.forum.period.daily`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.daily%22)

> Daily

```diff
+Diario
```

#### [`huseyinfiliz-leaderboard.forum.period.monthly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.monthly%22)

> Monthly

```diff
+Mensual
```

#### [`huseyinfiliz-leaderboard.forum.period.quarterly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.quarterly%22)

> Quarterly

```diff
+Trimestral
```

#### [`huseyinfiliz-leaderboard.forum.period.weekly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.weekly%22)

> Weekly

```diff
+Semanal
```

#### [`huseyinfiliz-leaderboard.forum.period.yearly`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.period.yearly%22)

> Yearly

```diff
+Anual
```

#### [`huseyinfiliz-leaderboard.forum.podium.first`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.first%22)

> 1st

```diff
+1.º
```

#### [`huseyinfiliz-leaderboard.forum.podium.second`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.second%22)

> 2nd

```diff
+2.º
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_badges`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_badges%22)

> Badges

```diff
+Insignias
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_comments`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_comments%22)

> Comments

```diff
+Comentarios
```

#### [`huseyinfiliz-leaderboard.forum.podium.stat_discussions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.stat_discussions%22)

> Discussions

```diff
+Discusiones
```

#### [`huseyinfiliz-leaderboard.forum.podium.third`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-leaderboard/es/?q=context%3A%3D%22huseyinfiliz-leaderboard.forum.podium.third%22)

> 3rd

```diff
+3.º
```


### `linkrobins-discussion-banners` (missing)

#### [`linkrobins-discussion-banners.admin.settings.banners_add`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.banners_add%22)

> Add banner

```diff
+Añadir banner
```

#### [`linkrobins-discussion-banners.admin.settings.banners_empty`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.banners_empty%22)

> No banners yet.

```diff
+Aún no hay banners.
```

#### [`linkrobins-discussion-banners.admin.settings.banners_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.banners_help%22)

> Add as many banners as you like. Each one has its own content and can be shown in every discussion, or only in the discussions and tags you choose.

```diff
+Añada tantos banners como necesite. Cada uno cuenta con su propio contenido y puede mostrarse en todas las discusiones o únicamente en los temas y etiquetas que seleccione.
```

#### [`linkrobins-discussion-banners.admin.settings.banners_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.banners_label%22)

> Banners

```diff
+Banners
```

#### [`linkrobins-discussion-banners.admin.settings.bottom_heading`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.bottom_heading%22)

> Below the discussion

```diff
+Debajo de la discusión
```

#### [`linkrobins-discussion-banners.admin.settings.bottom_short`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.bottom_short%22)

> Bottom

```diff
+Inferior
```

#### [`linkrobins-discussion-banners.admin.settings.color_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.color_help%22)

> Colors the banner border, background tint, and small heading. Leave blank to use your theme color. Body text always follows the theme so it stays readable in light and dark modes.

```diff
+Aplica color al borde, tono de fondo y encabezado secundario del banner. Déjelo en blanco para usar el color del tema. El texto del cuerpo se adapta al tema para garantizar la legibilidad.
```

#### [`linkrobins-discussion-banners.admin.settings.color_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.color_label%22)

> Accent color

```diff
+Color de acento
```

#### [`linkrobins-discussion-banners.admin.settings.content_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.content_help%22)

> The banner body. HTML is allowed and is sanitized before display.

```diff
+Cuerpo del banner. Se permite código HTML, el cual se depura antes de su visualización.
```

#### [`linkrobins-discussion-banners.admin.settings.content_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.content_label%22)

> Banner content (HTML)

```diff
+Contenido del banner (HTML)
```

#### [`linkrobins-discussion-banners.admin.settings.delete`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.delete%22)

> Delete banner

```diff
+Eliminar banner
```

#### [`linkrobins-discussion-banners.admin.settings.icon_emoji`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_emoji%22)

> Emoji

```diff
+Emoticono
```

#### [`linkrobins-discussion-banners.admin.settings.icon_emoji_placeholder`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_emoji_placeholder%22)

> Type or paste

```diff
+Escriba o pegue
```

#### [`linkrobins-discussion-banners.admin.settings.icon_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_help%22)

> An optional icon shown beside the banner text: upload a small image or pick an emoji.

```diff
+Icono opcional junto al texto del banner: suba una imagen pequeña o seleccione un emoticono.
```

#### [`linkrobins-discussion-banners.admin.settings.icon_image`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_image%22)

> Uploaded image

```diff
+Imagen subida
```

#### [`linkrobins-discussion-banners.admin.settings.icon_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_label%22)

> Icon

```diff
+Icono
```

#### [`linkrobins-discussion-banners.admin.settings.icon_none`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_none%22)

> No icon

```diff
+Sin icono
```

#### [`linkrobins-discussion-banners.admin.settings.icon_remove`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_remove%22)

> Remove

```diff
+Quitar
```

#### [`linkrobins-discussion-banners.admin.settings.icon_replace_image`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_replace_image%22)

> Replace image

```diff
+Reemplazar imagen
```

#### [`linkrobins-discussion-banners.admin.settings.icon_upload_image`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.icon_upload_image%22)

> Upload image

```diff
+Subir imagen
```

#### [`linkrobins-discussion-banners.admin.settings.label_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.label_help%22)

> The short uppercase line at the top of the banner, for example "Info" or "From our sponsor". Leave blank for none.

```diff
+Línea corta en mayúsculas en la parte superior del banner (ejemplo: "Información" o "Patrocinado"). Déjelo en blanco para omitir.
```

#### [`linkrobins-discussion-banners.admin.settings.label_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.label_label%22)

> Small heading

```diff
+Encabezado secundario
```

#### [`linkrobins-discussion-banners.admin.settings.placement_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.placement_label%22)

> Where it appears

```diff
+Ubicación
```

#### [`linkrobins-discussion-banners.admin.settings.scope_all`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_all%22)

> All discussions

```diff
+Todas las discusiones
```

#### [`linkrobins-discussion-banners.admin.settings.scope_empty_except`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_empty_except%22)

> Nothing is selected yet, so this banner appears everywhere.

```diff
+No se ha seleccionado nada aún, por lo que este banner aparecerá en todas las discusiones.
```

#### [`linkrobins-discussion-banners.admin.settings.scope_empty_only`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_empty_only%22)

> Nothing is selected yet, so this banner will not appear anywhere.

```diff
+No se ha seleccionado nada aún, por lo que este banner no se mostrará en ninguna ubicación.
```

#### [`linkrobins-discussion-banners.admin.settings.scope_except`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_except%22)

> All discussions except the ones I choose

```diff
+En todas las discusiones excepto las seleccionadas
```

#### [`linkrobins-discussion-banners.admin.settings.scope_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_help%22)

> Show this banner everywhere, or pick the discussions and tags it belongs in. Add a second banner with different text for a different discussion.

```diff
+Muestre este banner en todo el foro o seleccione discusiones y etiquetas específicas. Puede añadir un segundo banner con texto diferente para otra discusión.
```

#### [`linkrobins-discussion-banners.admin.settings.scope_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_label%22)

> Which discussions

```diff
+Alcance de las discusiones
```

#### [`linkrobins-discussion-banners.admin.settings.scope_only`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.scope_only%22)

> Only the discussions I choose

```diff
+Solo en las discusiones seleccionadas
```

#### [`linkrobins-discussion-banners.admin.settings.stream_every_help`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.stream_every_help%22)

> The banner appears after every Nth post in a discussion. Minimum 2.

```diff
+El banner aparecerá cada N publicaciones en la discusión. Mínimo 2.
```

#### [`linkrobins-discussion-banners.admin.settings.stream_every_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.stream_every_label%22)

> Show after every N posts

```diff
+Mostrar cada N publicaciones
```

#### [`linkrobins-discussion-banners.admin.settings.stream_heading`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.stream_heading%22)

> Between posts

```diff
+Entre publicaciones
```

#### [`linkrobins-discussion-banners.admin.settings.stream_short`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.stream_short%22)

> Between posts

```diff
+Entre publicaciones
```

#### [`linkrobins-discussion-banners.admin.settings.summary_all`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_all%22)

> In every discussion

```diff
+En todas las discusiones
```

#### [`linkrobins-discussion-banners.admin.settings.summary_discussion_many`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_discussion_many%22)

> {count} discussions

```diff
+{count} discusiones
```

#### [`linkrobins-discussion-banners.admin.settings.summary_discussion_one`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_discussion_one%22)

> 1 discussion

```diff
+1 discusión
```

#### [`linkrobins-discussion-banners.admin.settings.summary_except`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_except%22)

> Everywhere except

```diff
+En todas excepto
```

#### [`linkrobins-discussion-banners.admin.settings.summary_nothing`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_nothing%22)

> Nothing selected

```diff
+Nada seleccionado
```

#### [`linkrobins-discussion-banners.admin.settings.summary_only`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_only%22)

> Only in

```diff
+Solo en
```

#### [`linkrobins-discussion-banners.admin.settings.summary_tag_many`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_tag_many%22)

> {count} tags

```diff
+{count} etiquetas
```

#### [`linkrobins-discussion-banners.admin.settings.summary_tag_one`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.summary_tag_one%22)

> 1 tag

```diff
+1 etiqueta
```

#### [`linkrobins-discussion-banners.admin.settings.target_none`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_none%22)

> Nothing selected

```diff
+Nada seleccionado
```

#### [`linkrobins-discussion-banners.admin.settings.target_remove`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_remove%22)

> Remove

```diff
+Quitar
```

#### [`linkrobins-discussion-banners.admin.settings.target_search_placeholder`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_search_placeholder%22)

> Search discussions, or paste a discussion link or ID

```diff
+Buscar discusiones o pegar un enlace/ID de discusión
```

#### [`linkrobins-discussion-banners.admin.settings.target_searching`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_searching%22)

> Searching...

```diff
+Buscando...
```

#### [`linkrobins-discussion-banners.admin.settings.target_tags_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_tags_label%22)

> Tags

```diff
+Etiquetas
```

#### [`linkrobins-discussion-banners.admin.settings.target_tags_loading`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_tags_loading%22)

> Loading tags...

```diff
+Cargando etiquetas...
```

#### [`linkrobins-discussion-banners.admin.settings.target_use_id`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.target_use_id%22)

> Use discussion {id}

```diff
+Usar discusión {id}
```

#### [`linkrobins-discussion-banners.admin.settings.top_heading`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.top_heading%22)

> Above the discussion

```diff
+Sobre la discusión
```

#### [`linkrobins-discussion-banners.admin.settings.top_short`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.top_short%22)

> Top

```diff
+Superior
```

#### [`linkrobins-discussion-banners.admin.settings.visibility_everyone`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.visibility_everyone%22)

> Everyone

```diff
+Todos los usuarios
```

#### [`linkrobins-discussion-banners.admin.settings.visibility_guests`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.visibility_guests%22)

> Guests only

```diff
+Solo visitantes (invitados)
```

#### [`linkrobins-discussion-banners.admin.settings.visibility_label`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.visibility_label%22)

> Who sees it

```diff
+Visibilidad de usuarios
```

#### [`linkrobins-discussion-banners.admin.settings.visibility_members`](https://weblate.rob006.net/translate/flarum2/linkrobins-discussion-banners/es/?q=context%3A%3D%22linkrobins-discussion-banners.admin.settings.visibility_members%22)

> Logged-in users only

```diff
+Solo usuarios registrados
```


### `pianotell-flamoji` (missing)

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder%22)

> e.g. Memes

```diff
+ej. Memes
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text%22)

> Optional. Custom emojis sharing the same category appear together in their own picker tab. Leave blank for the default Custom tab.

```diff
+Opcional. Los emoticonos que compartan categoría se agruparán en su propia pestaña. Déjelo en blanco para asignarlo a la pestaña «Personalizados».
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_button%22)

> Delete emoji

```diff
+Eliminar emoticono
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation%22)

> Are you sure you want to delete this emoji?

```diff
+¿Desea eliminar este emoticono?
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_label%22)

> Emoji Title

```diff
+Nombre del emoticono
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text%22)

> A friendly name shown in the picker preview and matched when searching. Optional.

```diff
+Nombre descriptivo para la vista previa y la búsqueda. Opcional.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text%22)

> Custom emojis are your own images that members insert by typing a shortcode. The shortcode and image are required; a title and category are optional.

```diff
+Los emoticonos personalizados son imágenes propias que los usuarios insertan escribiendo un código corto. El código corto y la imagen son obligatorios; el nombre y la categoría son opcionales.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.modal_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.modal_title%22)

> Add Emoji

```diff
+Añadir emoticono
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label%22)

> Path or URL

```diff
+Ruta o URL
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text%22)

> Where the image is hosted: a full URL (https://…) or a forum-relative path (/assets/…). Required. Upload the image yourself first — this only records its location.

```diff
+Ubicación del archivo de imagen: URL completa (https://…) o ruta relativa (/assets/…). Obligatorio. Suba la imagen previamente al servidor.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid%22)

> Wrap the shortcode in colons and use only letters, numbers, and \_ + - (e.g. :myemoji\_partyparrot:).

```diff
+Encierre el código corto entre puntos dobles : y use solo letras, números y _ + - (ejemplo: :miemoticono_fiesta:).
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label%22)

> Shortcode

```diff
+Código corto
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text%22)

> The text members type to insert this emoji. Must be wrapped in colons and contain only letters, numbers, and the characters \_ + - (e.g. :myemoji\_partyparrot:). Required, and must be unique. Tip: prefix your shortcodes so they read clearly and won't clash with standard emoji.

```diff
+Texto que se debe escribir para insertar el emoticono. Debe ir entre puntos dobles : y contener solo letras, números y los caracteres _ + - (ejemplo: :miemoticono_fiesta:). Obligatorio y único.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.uncategorized`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.uncategorized%22)

> Uncategorized

```diff
+Sin categoría
```

#### [`pianotell-flamoji.admin.custom_emojis_section.export_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.export_json_button%22)

> Export JSON

```diff
+Exportar JSON
```

#### [`pianotell-flamoji.admin.custom_emojis_section.heading_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.heading_title%22)

> Custom Emojis

```diff
+Emoticonos personalizados
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_emojis_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_emojis_message%22)

> This will import emoji configurations only. You need to upload emoji images manually.

```diff
+Esto importará únicamente la configuración de los emoticonos. Deberá subir las imágenes manualmente.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_json_button%22)

> Import JSON

```diff
+Importar JSON
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes%22)

> Imported {count} emoji whose shortcodes don't follow the recommended :word: convention: {shortcodes}. They were imported as-is and still work, but consider updating them.

```diff
+Se importaron {count} emoticonos cuyos códigos cortos no siguen el formato recomendado :palabra: — {shortcodes}. Se importaron tal cual y funcionan, pero se recomienda actualizarlos.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_override_confirm`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_override_confirm%22)

> Yes, I want to replace all existing emojis.

```diff
+Sí, deseo reemplazar todos los emoticonos existentes.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_override_mode`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_override_mode%22)

> Override Mode (Replace all existing emojis)

```diff
+Modo de sobrescritura (reemplazar todos los existentes)
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_override_warning`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_override_warning%22)

> Warning: This will delete all your current custom emojis!

```diff
+¡Atención: Esto eliminará todos sus emoticonos personalizados actuales!
```

#### [`pianotell-flamoji.admin.custom_emojis_section.upload_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.upload_json_button%22)

> Upload JSON

```diff
+Subir JSON
```

#### [`pianotell-flamoji.admin.settings.auto_hide_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_label%22)

> Auto hide

```diff
+Ocultar automáticamente
```

#### [`pianotell-flamoji.admin.settings.auto_hide_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_text%22)

> Hide the picker when an emoji is selected.

```diff
+Oculta el selector tras insertar un emoticono.
```

#### [`pianotell-flamoji.admin.settings.category_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.category_settings_heading%22)

> Category Settings

```diff
+Ajustes de categorías
```

#### [`pianotell-flamoji.admin.settings.cdn_advanced_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_advanced_text%22)

> The defaults are pinned to the exact emoji-mart version this extension was built against, with matching SRI hashes. If you change a URL, update its SRI hash to match (or clear it to disable integrity checking), and keep the data version aligned with the emoji sprite sheet — mismatched versions can render emojis incorrectly. Leave a URL empty to force that resource to load locally.

```diff
+Los valores por defecto están vinculados a la versión exacta de emoji-mart con la que se compiló esta extensión. Si modifica una URL, actualice su hash SRI correspondiente (o déjelo en blanco para desactivar la verificación). Deje la URL en blanco para forzar la carga local.
```

#### [`pianotell-flamoji.admin.settings.cdn_data_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_sri_label%22)

> Data SRI Hash (Optional)

```diff
+Hash SRI para datos (opcional)
```

#### [`pianotell-flamoji.admin.settings.cdn_data_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_url_label%22)

> CDN Data URL

```diff
+URL de datos en CDN
```

#### [`pianotell-flamoji.admin.settings.cdn_js_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_sri_label%22)

> JavaScript SRI Hash (Optional)

```diff
+Hash SRI para JavaScript (opcional)
```

#### [`pianotell-flamoji.admin.settings.cdn_js_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_url_label%22)

> CDN JavaScript URL

```diff
+URL del JavaScript en CDN
```

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
+Ajustes de emoticonos
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_label%22)

> Frequent emoji rows

```diff
+Filas de emoticonos frecuentes
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_text%22)

> Number of rows of recently/frequently used emojis to display at the top of the picker (1-10).

```diff
+Número de filas de emoticonos frecuentes a mostrar en la parte superior del selector (1-10).
```

#### [`pianotell-flamoji.admin.settings.general_ui_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.general_ui_settings_heading%22)

> General UI Settings

```diff
+Ajustes generales de interfaz
```

#### [`pianotell-flamoji.admin.settings.picker_set_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_label%22)

> Emoji style

```diff
+Estilo visual de emoticonos
```

#### [`pianotell-flamoji.admin.settings.picker_set_native`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_native%22)

> Native

```diff
+Nativo del sistema
```

#### [`pianotell-flamoji.admin.settings.picker_set_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_text%22)

> How emojis appear in the picker. "Auto" matches the Flarum Emoji extension — Twemoji when it's enabled, native OS fonts otherwise — so the picker mirrors what posts actually display.

```diff
+Define la apariencia en el selector. «Automático» coincide con la extensión Emoji de Flarum (Twemoji si está activa o las fuentes nativas del sistema operativo).
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_label%22)

> Show category buttons

```diff
+Mostrar botones de categorías
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_text%22)

> Show the row of category icons at the top of the picker. Useful to disable when only one or two categories are enabled.

```diff
+Muestra la fila de iconos de categoría en la parte superior del selector. Útil para desactivar si solo hay una o dos categorías activas.
```

#### [`pianotell-flamoji.admin.settings.show_preview_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_label%22)

> Show preview section

```diff
+Mostrar sección de vista previa
```

#### [`pianotell-flamoji.admin.settings.show_preview_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_text%22)

> Show the emoji name, shortcode, and skin-tone selector in a preview pane below the picker grid.

```diff
+Muestra el nombre del emoticono, su código corto y el selector de tono de piel en un panel inferior bajo la cuadrícula.
```

#### [`pianotell-flamoji.admin.settings.show_recents_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_label%22)

> Show (and save) frequently used emojis

```diff
+Mostrar y guardar emoticonos frecuentes
```

#### [`pianotell-flamoji.admin.settings.show_recents_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_text%22)

> Show the Frequently Used tab at the top of the picker. It starts empty and fills as each member picks emojis. Each user's frequents are saved in their own browser only.

```diff
+Muestra la pestaña de frecuentes en la parte superior del selector. Se completa a medida que cada usuario los utiliza y se guarda únicamente en su navegador.
```

#### [`pianotell-flamoji.admin.settings.show_search_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_label%22)

> Show search input

```diff
+Mostrar campo de búsqueda
```

#### [`pianotell-flamoji.admin.settings.show_search_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_text%22)

> Show the search box at the top of the picker.

```diff
+Muestra el cuadro de búsqueda en la parte superior del selector.
```

#### [`pianotell-flamoji.admin.settings.show_variants_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_label%22)

> Show skin-tone variants

```diff
+Mostrar variantes de tono de piel
```

#### [`pianotell-flamoji.admin.settings.show_variants_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_text%22)

> Some emojis have skin tone variants. When an emoji is selected in the picker that has variants, a variant popup will appear so the user can select the desired variant. This has no effect in sticker mode, since custom emoji don't have skin-tone variants.

```diff
+Algunos emoticonos disponen de variantes de tono de piel. Al seleccionar uno con variantes en el selector, se desplegará una ventana para elegir el tono deseado. Esto no afecta al modo sticker, ya que los emoticonos personalizados no tienen tonos de piel.
```

#### [`pianotell-flamoji.admin.settings.specify_categories_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_label%22)

> Specify categories

```diff
+Especificar categorías
```

#### [`pianotell-flamoji.admin.settings.specify_categories_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_text%22)

> You can specify a list of categories here, and the picker will only show those categories.

```diff
+Permite definir una lista delimitada de categorías a mostrar en el selector.
```

#### [`pianotell-flamoji.admin.settings.sticker_mode_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_label%22)

> Sticker mode

```diff
+Modo sticker
```

#### [`pianotell-flamoji.admin.settings.sticker_mode_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_text%22)

> Render custom emoji as large stickers — in posts, the live composer preview, and an enlarged picker grid. Because only custom emoji are enlarged, the picker is restricted to your custom emoji while this is on. Off by default.

```diff
+Muestra los emoticonos personalizados como stickers de gran tamaño en las publicaciones, en la vista previa del editor y en el selector. Al activar esta opción, el selector se restringirá únicamente a sus emoticonos personalizados. Desactivado por defecto.
```

#### [`pianotell-flamoji.admin.settings.use_cdn_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_label%22)

> Load Emoji-Mart via CDN

```diff
+Cargar Emoji-Mart mediante CDN
```

#### [`pianotell-flamoji.admin.settings.use_cdn_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_text%22)

> Load the emoji-mart library and emoji data from a third-party CDN (e.g. jsDelivr) instead of serving them from your own server. Off by default. If the CDN fails to load — or a Subresource Integrity (SRI) hash doesn't match — the picker automatically falls back to the copy bundled with this extension. Note that loading from an external origin requires your Content-Security-Policy (if any) to allow it.

```diff
+Cargar la librería emoji-mart y sus datos desde un CDN externo (como jsDelivr) en lugar de servirlos desde su propio servidor. Desactivado por defecto. Si el CDN falla o el hash SRI no coincide, el selector recurrirá automáticamente a la copia integrada en la extensión. Nota: cargar recursos externos requiere que su Content-Security-Policy (CSP) lo permita.
```

#### [`pianotell-flamoji.forum.composer.emoji_tooltip`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.composer.emoji_tooltip%22)

> Insert emoji

```diff
+Insertar emoticono
```

#### [`pianotell-flamoji.forum.composer.picker_load_error`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_error%22)

> Could not load the emoji picker. Please try again.

```diff
+No se pudo cargar el selector de emoticonos. Inténtelo de nuevo.
```

#### [`pianotell-flamoji.forum.composer.picker_load_retry`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_retry%22)

> Retry

```diff
+Reintentar
```

#### [`pianotell-flamoji.forum.composer.picker_loading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_loading%22)

> Loading emojis…

```diff
+Cargando emoticonos…
```

#### [`pianotell-flamoji.forum.emoji-mart.add_custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.add_custom%22)

> Add custom emoji

```diff
+Añadir emoticono personalizado
```

#### [`pianotell-flamoji.forum.emoji-mart.category_search`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.category_search%22)

> Search Results

```diff
+Resultados de búsqueda
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_message%22)

> No emojis found

```diff
+No se encontraron emoticonos
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_title%22)

> Oh no!

```diff
+¡Oh no!
```

#### [`pianotell-flamoji.forum.emoji-mart.pick`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.pick%22)

> Pick an emoji

```diff
+Seleccione un emoticono
```

#### [`pianotell-flamoji.forum.emoji-mart.search_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.search_placeholder%22)

> Search

```diff
+Buscar
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_choose`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_choose%22)

> Choose default skin tone

```diff
+Seleccionar tono de piel por defecto
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_dark%22)

> Dark

```diff
+Oscuro
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_default`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_default%22)

> Default

```diff
+Predeterminado
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_light`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_light%22)

> Light

```diff
+Claro
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium%22)

> Medium

```diff
+Medio
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark%22)

> Medium-Dark

```diff
+Medio oscuro
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_light`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_light%22)

> Medium-Light

```diff
+Medio claro
```

#### [`pianotell-flamoji.ref.emoji_categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/es/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.custom%22)

> Custom

```diff
+Personalizados
```


### `walsgit-discussion-cards` (missing)

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupFail%22)

> ❌ Cleanup failed! {filename} found but couldn't be deleted : {error}

```diff
+❌ ¡Falló la limpieza! Se encontró {filename} pero no se pudo eliminar: {error}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupSuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceCleanupSuccess%22)

> ️✅ Cleanup: found and deleted {filename}

```diff
+️✅ Limpieza: se encontró y eliminó {filename}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageFail%22)

> ❌ General default image migration failed! Couldn't migrate {filename}: 

```diff
+❌ ¡Falló la migración de la imagen general! No se pudo migrar {filename}: 
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageSuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceGeneralImageSuccess%22)

> ️✅ General default image was migrated from assets/{filename} to {newfilepath}

```diff
+️✅ La imagen predeterminada general se migró desde assets/{filename} a {newfilepath}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceNoCleanup`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceNoCleanup%22)

> ⏭️ Due to {failedMigrations} failed migrations, cleanup was skipped

```diff
+⏭️ Debido a {failedMigrations} migraciones fallidas, se omitió el paso de limpieza
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceStep1`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceStep1%22)

> —\[Step 1/3\] General default image migration...

```diff
+—[Paso 1/3] Migración de imagen predeterminada general...
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceStep2`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceStep2%22)

> —\[Step 2/3\] Tag default images migration...

```diff
+—[Paso 2/3] Migración de imágenes predeterminadas por etiqueta...
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceStep3`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceStep3%22)

> —\[Step 3/3\] Cleanup...

```diff
+—[Paso 3/3] Limpieza de archivos temporales...
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageFail`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageFail%22)

> ❌ Tag {tagid}'s default image migration failed! Couldn't migrate {filename}: 

```diff
+❌ ¡Falló la migración de la imagen de la etiqueta {tagid}! No se pudo migrar {filename}: 
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageSuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceTagImageSuccess%22)

> ️✅ Tag {tagid}'s default image was migrated from assets/{filename} to {newfilepath}

```diff
+️✅ La imagen predeterminada de la etiqueta {tagid} se migró desde assets/{filename} a {newfilepath}
```

#### [`walsgit_discussion_cards.admin.console.imageMigrationServiceUnknownError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.imageMigrationServiceUnknownError%22)

> Unknown error

```diff
+Error desconocido
```

#### [`walsgit_discussion_cards.admin.console.migrateImagesEnd`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.migrateImagesEnd%22)

> ️✅ Migration over. Migrated images : {count}

```diff
+️✅ Migración finalizada. Imágenes migradas: {count}
```

#### [`walsgit_discussion_cards.admin.console.migrateImagesError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.migrateImagesError%22)

> ❌ Error: 

```diff
+❌ Error: 
```

#### [`walsgit_discussion_cards.admin.console.migrateImagesStart`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.migrateImagesStart%22)

> ➡ Migrating old Discussion Cards default images...

```diff
+➡ Migrando imágenes predeterminadas de versiones anteriores...
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesAlreadyRunning`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesAlreadyRunning%22)

> Purge Images is already running.

```diff
+La tarea de limpieza de imágenes ya se está ejecutando.
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesDelete`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesDelete%22)

> Deleting file: {file}

```diff
+Eliminando archivo: {file}
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesDirectoryNotFound`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesDirectoryNotFound%22)

> Directory {directory} not found.

```diff
+No se encontró el directorio {directory}.
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesDryRun`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesDryRun%22)

> Simulation mode (dry run) activated: nothing will be deleted.

```diff
+Modo simulación (dry run) activo: no se eliminará ningún archivo.
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesEnd`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesEnd%22)

> Purging discussion cards images is completed.

```diff
+Limpieza de imágenes de tarjetas finalizada.
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesFileSkipped`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesFileSkipped%22)

> Skipped file: {file}

```diff
+Archivo omitido: {file}
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesInvalidArguments`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesInvalidArguments%22)

> Invalid arguments (run with --help flag for details on how to use).

```diff
+Argumentos no válidos (ejecute con el parámetro --help para más detalles).
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesScan`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesScan%22)

> Scanning for orphan card images...

```diff
+Escaneando en busca de imágenes de tarjetas huérfanas...
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesStart`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesStart%22)

> ➡ Purging discussion cards images...

```diff
+➡ Iniciando limpieza de imágenes de tarjetas...
```

#### [`walsgit_discussion_cards.admin.console.purgeImagesSummary`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.purgeImagesSummary%22)

> ➡ Purge summary: {deleted} deleted, {skipped} skipped &amp; {updated} updated discussion(s)

```diff
+➡ Resumen de limpieza: {deleted} eliminados, {skipped} omitidos y {updated} discusión(es) actualizada(s)
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesCancelled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesCancelled%22)

> ❌ Action cancelled

```diff
+❌ Acción cancelada
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesConfirmAll`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesConfirmAll%22)

> ⚠️ Do you really want to regenerate card images for ALL discussions? This might take a while and use a lot of ressources (Y/N)

```diff
+⚠️ ¿Realmente desea regenerar las imágenes de tarjetas para TODAS las discusiones? Esto puede tomar tiempo y consumir recursos (S/N)
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesError%22)

> ❌ Error while processing discussion #{id}: {message}

```diff
+❌ Error al procesar la discusión #{id}: {message}
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesInvalidTagOption`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesInvalidTagOption%22)

> \--tag must be followed by one or more (comma separated) tag IDs (numbers) and/or quoted tag slugs (ex.: "slug-1", "slug-2").

```diff
+El parámetro --tag debe ir seguido de uno o más ID numéricos de etiquetas o slugs entre comillas (ej.: "slug-1", "slug-2").
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesNothingToDo`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesNothingToDo%22)

> No discussions to process

```diff
+No hay discusiones para procesar
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesStart`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesStart%22)

> ➡ Starting to process {count} discussions...

```diff
+➡ Iniciando el procesamiento de {count} discusiones...
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesStartAll`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesStartAll%22)

> ➡ Starting to process ALL \[{count}\] discussions...

```diff
+➡ Iniciando el procesamiento de TODAS las [{count}] discusiones...
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesStartAllWithout`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesStartAllWithout%22)

> ➡ Starting to process \[{count}\] discussions without images...

```diff
+➡ Iniciando el procesamiento de [{count}] discusiones sin imagen...
```

#### [`walsgit_discussion_cards.admin.console.regenerateImagesSummary`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.console.regenerateImagesSummary%22)

> ➡ Regeneration summary{mode}: {total} processed, {success} successful &amp; {errors} errors.

```diff
+➡ Resumen de regeneración{mode}: {total} procesadas, {success} con éxito y {errors} errores.
```

#### [`walsgit_discussion_cards.admin.errors.adminImageNoPath`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.adminImageNoPath%22)

> The service hasn't provided a filename.

```diff
+El servicio no proporcionó una ruta de archivo.
```

#### [`walsgit_discussion_cards.admin.errors.adminImageProcessingError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.adminImageProcessingError%22)

> Error while processing image: 

```diff
+Error al procesar la imagen: 
```

#### [`walsgit_discussion_cards.admin.errors.adminImageUnauthorizedMethod`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.adminImageUnauthorizedMethod%22)

> Unauthorized method!

```diff
+¡Método no autorizado!
```

#### [`walsgit_discussion_cards.admin.errors.debugModalDiscussionId`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.debugModalDiscussionId%22)

> Discussion ID number must be a positive number (1 or greater)

```diff
+El ID de discusión debe ser un número entero mayor o igual a 1
```

#### [`walsgit_discussion_cards.admin.errors.desktopCardWidth`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.desktopCardWidth%22)

> Primary cards width on desktop must be a number between 10 and 100

```diff
+El ancho en escritorio debe ser un número entre 10 y 100
```

#### [`walsgit_discussion_cards.admin.errors.fileSize`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.fileSize%22)

> File size must be under 2 Mb

```diff
+El tamaño del archivo debe ser inferior a 2 MB
```

#### [`walsgit_discussion_cards.admin.errors.filenameInvalidOrigin`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.filenameInvalidOrigin%22)

> Couldn't generate filename: unable to determine context {origin}!

```diff
+No se pudo generar el nombre de archivo: ¡imposible determinar el contexto {origin}!
```

#### [`walsgit_discussion_cards.admin.errors.filenameTagidMissing`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.filenameTagidMissing%22)

> Couldn't generate filename: Tag ID missing!

```diff
+No se pudo generar el nombre de archivo: ¡falta el ID de etiqueta!
```

#### [`walsgit_discussion_cards.admin.errors.imageProcessingFailed`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.imageProcessingFailed%22)

> Image processing failed!

```diff
+¡Falló el procesamiento de la imagen!
```

#### [`walsgit_discussion_cards.admin.errors.imageProcessingSourceNotFound`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.imageProcessingSourceNotFound%22)

> Image processing: source image {path} not found!

```diff
+Procesamiento de imagen: ¡no se encontró la imagen de origen {path}!
```

#### [`walsgit_discussion_cards.admin.errors.invalidFile`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.invalidFile%22)

> Invalid file!

```diff
+¡Archivo no válido!
```

#### [`walsgit_discussion_cards.admin.errors.invalidMime`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.invalidMime%22)

> File format not supported. Accepted formats: JPEG, PNG, GIF, BMP or WebP

```diff
+Formato no admitido. Formatos válidos: JPEG, PNG, GIF, BMP o WebP
```

#### [`walsgit_discussion_cards.admin.errors.listCardsCount`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.listCardsCount%22)

> Value of &lt;em&gt;Number of list cards&lt;/em&gt; must be between 0 and 20 (0 for all)

```diff
+El número de tarjetas secundarias debe estar entre 0 y 20 (0 para todas)
```

#### [`walsgit_discussion_cards.admin.errors.noFileUploaded`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.noFileUploaded%22)

> No file uploaded!

```diff
+¡No se ha subido ningún archivo!
```

#### [`walsgit_discussion_cards.admin.errors.primaryCards`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.primaryCards%22)

> Number of primary cards must be a positive number (0 or greater)

```diff
+El número de tarjetas primarias debe ser mayor o igual a 0
```

#### [`walsgit_discussion_cards.admin.errors.tabletCardWidth`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.tabletCardWidth%22)

> Primary cards width on tablets must be a number between 10 and 100

```diff
+El ancho en tabletas debe ser un número entre 10 y 100
```

#### [`walsgit_discussion_cards.admin.errors.tagImageNoTagId`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.tagImageNoTagId%22)

> No tagId provided!

```diff
+¡No se proporcionó ID de etiqueta!
```

#### [`walsgit_discussion_cards.admin.errors.tagImageUnsupportedMethod`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.tagImageUnsupportedMethod%22)

> Unsupported method ({method})

```diff
+Método no admitido ({method})
```

#### [`walsgit_discussion_cards.admin.errors.useListCards`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.errors.useListCards%22)

> Value must be null, 0 or 1

```diff
+El valor debe ser nulo, 0 o 1
```

#### [`walsgit_discussion_cards.admin.settings.general.allowRepostLinks_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowRepostLinks_label%22)

> Allow Repost links behavior on cards

```diff
+Permitir enlaces directos del comportamiento Repost
```

#### [`walsgit_discussion_cards.admin.settings.general.allowedTags_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowedTags_help%22)

> Discussion cards will be activated and shown for the selected tags pages.

```diff
+Las tarjetas se activarán y mostrarán en las páginas de las etiquetas seleccionadas.
```

#### [`walsgit_discussion_cards.admin.settings.general.allowedTags_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.allowedTags_label%22)

> Select tags

```diff
+Seleccionar etiquetas
```

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_notActivated`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_notActivated%22)

> {icon} This extension needs to be activated for these settings to work.

```diff
+{icon} Requiere activar la extensión Flarum Blog para funcionar.
```

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_notInstalled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_notInstalled%22)

> {icon} This extension needs to be installed &amp; activated for these settings to work.

```diff
+{icon} Requiere instalar y activar la extensión Flarum Blog para funcionar.
```

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_title_end`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_title_end%22)

>  extension installed and activated, you can set the following (2) options:

```diff
+ instalada y activa, puede configurar:
```

#### [`walsgit_discussion_cards.admin.settings.general.blogExtension_title_start`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.blogExtension_title_start%22)

> With the 

```diff
+Con la extensión 
```

#### [`walsgit_discussion_cards.admin.settings.general.cardOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.cardOptions_info%22)

> Set what data/infos should be shown on the cards.

```diff
+Seleccione los datos y elementos visibles dentro de cada tarjeta.
```

#### [`walsgit_discussion_cards.admin.settings.general.cardOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.cardOptions_title%22)

> Card options

```diff
+Información visible en las tarjetas
```

#### [`walsgit_discussion_cards.admin.settings.general.defaultImage_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.defaultImage_info%22)

> Here you can change the default image to be used on cards when none is found in the discussion's first message. &lt;u&gt;IMPORTANT&lt;/u&gt;: &lt;em&gt;note that changing the image will discard any other unsaved settings changes you made and will reload the page automatically. Please save your changes before changing the image&lt;/em&gt; (or vice versa 😉). Accepted formats: JPG, PNG, GIF, BMP or WebP files. Ideal resolution: 400px x 225px (all uploaded images will be converted to a WebP file and resized to a width of 400px, except for images with smaller width, which will keep their initial resolution, and won't be upscaled). Depending on your file's resolution, the image could be shown cropped and/or stretched on cards.

```diff
+Defina la imagen global a utilizar cuando la primera publicación de una discusión no contenga imágenes. <u>IMPORTANTE</u>: <em>cambiar la imagen descartará cualquier ajuste no guardado y recargará la página automáticamente. Guarde sus cambios antes de seleccionar una nueva imagen</em>. Formatos admitidos: JPG, PNG, GIF, BMP o WebP. Resolución ideal: 400px x 225px (las imágenes subidas se convertirán automáticamente a WebP a un ancho de 400px).
```

#### [`walsgit_discussion_cards.admin.settings.general.defaultImage_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.defaultImage_title%22)

> General default image

```diff
+Imagen predeterminada general
```

#### [`walsgit_discussion_cards.admin.settings.general.desktopCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.desktopCardWidth_help%22)

> Set the width (in %) of the primary cards on desktop. (between 10 and 100)

```diff
+Establezca el ancho (en %) de las tarjetas primarias en pantallas de escritorio (entre 10 y 100)
```

#### [`walsgit_discussion_cards.admin.settings.general.desktopCardWidth_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.desktopCardWidth_label%22)

> Primary cards width on desktop

```diff
+Ancho de tarjetas primarias en escritorio
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardOptions_info%22)

> Set the options for discussion lists cards (smaller than primary cards).

```diff
+Configure las opciones para el listado estándar de discusiones (tarjetas de tamaño regular).
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardOptions_title%22)

> List cards options

```diff
+Opciones del listado de tarjetas
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardsCount_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardsCount_help%22)

> Number of discussion list items to be shown as smaller cards when &lt;em&gt;Use cards for discussion lists&lt;/em&gt; is activated (0 for all, max: 20)

```diff
+Cantidad de elementos a mostrar como tarjetas secundarias cuando la opción está activa (0 para todas, máximo: 20)
```

#### [`walsgit_discussion_cards.admin.settings.general.listCardsCount_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCardsCount_label%22)

> Number of list cards

```diff
+Número de tarjetas secundarias
```

#### [`walsgit_discussion_cards.admin.settings.general.listCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCards_help%22)

> Display discussion list items as cards (smaller than primary cards). If not activated, default flarum discussion list items will be shown (no cards)

```diff
+Muestra los elementos del listado de discusiones como tarjetas secundarias. Si se desactiva, se mostrará el diseño nativo en lista de flarum (sin tarjetas)
```

#### [`walsgit_discussion_cards.admin.settings.general.listCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.listCards_label%22)

> Use cards for discussion lists

```diff
+Usar diseño en tarjetas para el listado de discusiones
```

#### [`walsgit_discussion_cards.admin.settings.general.markReadCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.markReadCards_help%22)

> If activated, read discussions will have a lighter title and text.

```diff
+Aplica un tono visual atenazado al título y texto en discusiones que el usuario ya ha leído.
```

#### [`walsgit_discussion_cards.admin.settings.general.markReadCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.markReadCards_label%22)

> Differentiate cards of read/unread discussions

```diff
+Diferenciar tarjetas leídas de no leídas
```

#### [`walsgit_discussion_cards.admin.settings.general.onIndexPage_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.onIndexPage_help%22)

> If activated, the &lt;em&gt;all discussions&lt;/em&gt; page will show cards.

```diff
+Al activarse, la página con <em>todas las discusiones</em> mostrará el diseño en tarjetas.
```

#### [`walsgit_discussion_cards.admin.settings.general.onIndexPage_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.onIndexPage_label%22)

> Activate cards on the Index Page

```diff
+Activar tarjetas en la página principal
```

#### [`walsgit_discussion_cards.admin.settings.general.otherOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.otherOptions_info%22)

> The following options will require other extensions to be installed and activated for them to work. &lt;strong&gt;IMPORTANT: please read &lt;u&gt;all&lt;/u&gt; the info for each individual option and do the required steps before activating them&lt;/strong&gt;.

```diff
+Las siguientes opciones requieren que las extensiones indicadas estén instaladas y activadas para funcionar correctamente.
```

#### [`walsgit_discussion_cards.admin.settings.general.otherOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.otherOptions_title%22)

> Options requiring other extensions

```diff
+Opciones con extensiones de terceros
```

#### [`walsgit_discussion_cards.admin.settings.general.previewText_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.previewText_help%22)

> If activated, shows the start of the first message as a preview on the card.

```diff
+Muestra las primeras líneas del mensaje inicial como resumen en la tarjeta.
```

#### [`walsgit_discussion_cards.admin.settings.general.previewText_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.previewText_label%22)

> Preview text

```diff
+Texto de vista previa
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCardOptions_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCardOptions_info%22)

> Set the options for primary cards (bigger cards at the top of each page using discussion cards).

```diff
+Configure las tarjetas primarias (tarjetas de mayor tamaño situadas en la parte superior de la página).
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCardOptions_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCardOptions_title%22)

> Primary Card options

```diff
+Opciones de tarjetas primarias
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCards_help%22)

> Number of bigger cards shown at the top of each page using discussion cards. Positive number (0 for none).

```diff
+Cantidad de tarjetas destacadas de mayor tamaño en la parte superior de cada página (ingrese 0 para desactivar).
```

#### [`walsgit_discussion_cards.admin.settings.general.primaryCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.primaryCards_label%22)

> Number of primary cards

```diff
+Número de tarjetas primarias
```

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_notActivated`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_notActivated%22)

> {icon} This extension needs to be activated for this setting to work.

```diff
+{icon} Requiere activar la extensión Repost para funcionar.
```

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_notInstalled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_notInstalled%22)

> {icon} This extension needs to be installed &amp; activated for this setting to work.

```diff
+{icon} Requiere instalar y activar la extensión Repost para funcionar.
```

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_title_end`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_title_end%22)

>  extension installed and activated, you can set the following (1) option:

```diff
+ instalada y activa, puede configurar:
```

#### [`walsgit_discussion_cards.admin.settings.general.repostExtension_title_start`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.repostExtension_title_start%22)

> With the 

```diff
+Con la extensión 
```

#### [`walsgit_discussion_cards.admin.settings.general.showAuthor_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showAuthor_help%22)

> If activated, shows the author of the discussion on the cards.

```diff
+Muestra el nombre del autor de la discusión en la tarjeta.
```

#### [`walsgit_discussion_cards.admin.settings.general.showAuthor_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showAuthor_label%22)

> Show author

```diff
+Mostrar autor
```

#### [`walsgit_discussion_cards.admin.settings.general.showBadges_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showBadges_help%22)

> If activated, shows badges at the top left corner of the cards.

```diff
+Muestra las insignias de estado (fijado, bloqueado, etc.) en la esquina superior izquierda de las tarjetas.
```

#### [`walsgit_discussion_cards.admin.settings.general.showBadges_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showBadges_label%22)

> Show badges

```diff
+Mostrar insignias
```

#### [`walsgit_discussion_cards.admin.settings.general.showLastPostInfo_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showLastPostInfo_help%22)

> If option is enabled, it will display the username of the last poster of the discussion and its date at the bottom of the cards.

```diff
+Muestra el nombre del último participante y la fecha de su respuesta en el pie de la tarjeta.
```

#### [`walsgit_discussion_cards.admin.settings.general.showLastPostInfo_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showLastPostInfo_label%22)

> Show last post info

```diff
+Mostrar información de la última publicación
```

#### [`walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_help%22)

> If option is enabled, it places the number of replies or unread replies (if any) on the right side of the (non primary) cards' title on large screens (instead of the default bottom-left side of the image).

```diff
+En pantallas grandes, ubica el recuento de respuestas en la esquina superior derecha junto al título en lugar de la parte inferior de la imagen.
```

#### [`walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showRepliesOnRight_label%22)

> Show the number of replies/unread replies on the right side of the card's title

```diff
+Mostrar recuento de respuestas a la derecha del título
```

#### [`walsgit_discussion_cards.admin.settings.general.showReplies_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showReplies_help%22)

> If activated, shows the number of replies or unread replies (if any) on the cards (and the avatars of a some participants in the discussion on primary cards).

```diff
+Muestra el recuento de respuestas o respuestas pendientes de leer (y los avatares de participantes en tarjetas primarias).
```

#### [`walsgit_discussion_cards.admin.settings.general.showReplies_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showReplies_label%22)

> Show number of replies/unread replies

```diff
+Mostrar número de respuestas y no leídas
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_help%22)

> If option is enabled, shows the number of views on the cards.

```diff
+Muestra el contador de lecturas/vistas en las tarjetas.
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_label%22)

> Show views

```diff
+Mostrar número de visitas
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_title_end`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_title_end%22)

>  extension installed and activated, you can set the following (1) option:

```diff
+ instalada y activa, puede configurar:
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_title_or`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_title_or%22)

>  OR 

```diff
+ O 
```

#### [`walsgit_discussion_cards.admin.settings.general.showViews_title_start`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.showViews_title_start%22)

> With either the 

```diff
+Con la extensión 
```

#### [`walsgit_discussion_cards.admin.settings.general.tabletCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.tabletCardWidth_help%22)

> Set the width (in %) of the primary cards on tablets. (between 10 and 100)

```diff
+Establezca el ancho (en %) de las tarjetas primarias en pantallas de tabletas (entre 10 y 100)
```

#### [`walsgit_discussion_cards.admin.settings.general.tabletCardWidth_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.tabletCardWidth_label%22)

> Primary cards width on tablets

```diff
+Ancho de tarjetas primarias en tabletas
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogImages_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogImages_help%22)

> If option is enabled, the cards' image for every blog post will set to: the blog post's featured image; if none, to the blog's content's first found image; if none, to the blog extension's default image; if none, to the discussion cards' tag default image; if none, to the discussion cards' main default image. Note that custom settings for tags used as blog tags will of course be ignored if you chose to redirect blog tags in the Flarum Blog extension settings.

```diff
+Utiliza la imagen destacada de la entrada de blog como portada de la tarjeta. Si no existe, recurre consecutivamente a la primera imagen de la entrada, la imagen por defecto del blog, la imagen de la etiqueta o la imagen general.
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogImages_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogImages_label%22)

> Use the blog's default and featured images

```diff
+Usar imágenes destacadas y del blog
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogSummary_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogSummary_help%22)

> If this option and preview text are enabled, the cards for blog posts will show the start of the blog post's summary as preview text instead of the start of the blog post's text.

```diff
+Muestra el extracto/resumen de la entrada de blog en lugar del texto del mensaje inicial.
```

#### [`walsgit_discussion_cards.admin.settings.general.useBlogSummary_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.useBlogSummary_label%22)

> Use blog post's summary as preview text

```diff
+Usar el extracto del blog como vista previa
```

#### [`walsgit_discussion_cards.admin.settings.general.viewsExtension_notActivated`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.viewsExtension_notActivated%22)

> {icon} The Discussion Views extension needs to be activated for this setting to work.

```diff
+{icon} Requiere activar la extensión Discussion Views para funcionar.
```

#### [`walsgit_discussion_cards.admin.settings.general.viewsExtension_notInstalled`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.viewsExtension_notInstalled%22)

> {icon} One of these extensions needs to be installed &amp; activated for this setting to work.

```diff
+{icon} Requiere instalar y activar una de estas extensiones para funcionar.
```

#### [`walsgit_discussion_cards.admin.settings.general.where_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.where_info%22)

> Set where you want to use discussion cards.

```diff
+Defina las secciones donde desea activar el diseño de tarjetas.
```

#### [`walsgit_discussion_cards.admin.settings.general.where_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.general.where_title%22)

> Where?

```diff
+¿Dónde mostrar?
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyButton`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyButton%22)

> Copy to clipboard

```diff
+Copiar al portapapeles
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copyError%22)

> Debug information couldn't be copied!

```diff
+¡No se pudo copiar la información de depuración!
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copySuccess`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_copySuccess%22)

> Debug information successfully copied!

```diff
+¡Información de depuración copiada correctamente!
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckBtn`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckBtn%22)

> Check discussion

```diff
+Comprobar discusión
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckingMessage`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugCheckingMessage%22)

> Analyzing card image resolution data for discussion #{discussionId}... (waiting for results)

```diff
+Analizando datos de resolución de la tarjeta para la discusión #{discussionId}... (esperando resultados)
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugHelpText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugHelpText%22)

> Use this to check how and why a card image is selected for a specific discussion. Enter that discussion's ID number and click on the check discussion button.

```diff
+Utilice esta opción para comprobar cómo y por qué se selecciona la imagen de la tarjeta para una discusión específica. Ingrese el número de ID de la discusión y pulse en comprobar.
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugLabel%22)

> Discussion ID

```diff
+ID de la discusión
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_discussionDebugTitle%22)

> Discussion's card image resolving test

```diff
+Prueba de resolución de imagen de tarjeta
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.debugModal_title%22)

> Debug information for Discussion Cards

```diff
+Información de depuración de Tarjetas de discusión
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllBtnText%22)

> Delete all images

```diff
+Eliminar todas las imágenes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteAllLabel%22)

> Purge all discussion card images

```diff
+Eliminar todas las imágenes de tarjetas
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedBtnText%22)

> Delete unused images

```diff
+Eliminar imágenes sin uso
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_deleteUnusedLabel%22)

> Purge unused discussion card images

```diff
+Eliminar imágenes sin uso
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_error`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_error%22)

> An error occurred while purging images.

```diff
+Ocurrió un error al limpiar las imágenes.
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_helpText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_helpText%22)

> These options will let you delete discussion card images from your server. You can find more purge options with the CLI command: &lt;code&gt;php flarum discussion-cards:purge-images --help&lt;/code&gt;
> &lt;strong&gt;WARNING: these actions are irreversible!&lt;/strong&gt; Also, note that default images (general or tag) will not be delete here (to delete them, use the remove button in the dedicated section of the extension settings or tag settings respectively

```diff
+Estas opciones le permiten eliminar las imágenes de tarjetas del servidor. Puede consultar más opciones de limpieza con el comando: <code>php flarum discussion-cards:purge-images --help</code>
+<strong>ADVERTENCIA: ¡Estas acciones son irreversibles!</strong> Tenga en cuenta que las imágenes predeterminadas (generales o de etiqueta) no se eliminarán desde aquí
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_runningCommand`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_runningCommand%22)

> Running command...
>

```diff
+Ejecutando comando...
+
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_success`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_success%22)

> Images purged successfully

```diff
+Imágenes limpiadas correctamente
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.purgeImagesModal_title%22)

> Purge images

```diff
+Limpiar imágenes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.refreshStats`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.refreshStats%22)

> Image statistics have been updated successfully

```diff
+Las estadísticas de imágenes se han actualizado correctamente
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_error`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_error%22)

> An error occurred while regenerating images.

```diff
+Ocurrió un error al regenerar las imágenes.
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpText%22)

> These options will let you regenerate your discussion card images. To regenerate a different number of discussion cards images or ALL of them, use the dedicated CLI command; you can find more details about it by 

```diff
+Estas opciones le permiten regenerar las imágenes de las tarjetas. Para procesar una cantidad distinta o la totalidad de las discusiones, utilice el comando CLI correspondiente; consulte los detalles en la 
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpTextUrlTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_helpTextUrlTitle%22)

> &lt;strong&gt;reading the Wiki&lt;/strong&gt;

```diff
+<strong>documentación de la Wiki</strong>
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOBtnText%22)

> Regenerate 20 latest, top, newest &amp; oldest card images

```diff
+Regenerar bloques de 20 tarjetas (recientes/populares/antiguas)
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLTNOLabel%22)

> Regenerate card images for the 20 latest, top, newest &amp; oldest discussions

```diff
+Regenerar tarjetas para las 20 discusiones más recientes, populares, destacadas y antiguas
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestBtnText%22)

> Regenerate 20 latest card images

```diff
+Regenerar las 20 tarjetas más recientes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateLatestLabel%22)

> Regenerate card images for the 20 latest discussions

```diff
+Regenerar tarjetas de las 20 discusiones más recientes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutBtnText`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutBtnText%22)

> Generate missing card images (max 20)

```diff
+Generar imágenes faltantes (máx. 20)
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_regenerateWithoutLabel%22)

> Generate card images for discussions without any

```diff
+Generar tarjetas para discusiones sin imagen
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_runningCommand`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_runningCommand%22)

> Running regenerate command...
>

```diff
+Ejecutando comando de regeneración...
+
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_success`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_success%22)

> Images regenerated successfully

```diff
+Imágenes regeneradas correctamente
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.regenerateImagesModal_title%22)

> Regenerate images

```diff
+Regenerar imágenes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionImagesTitle%22)

> Discussion images

```diff
+Imágenes de discusiones
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionsWithoutImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statDiscussionsWithoutImagesTitle%22)

> Discussions without images

```diff
+Discusiones sin imagen
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statTotalImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statTotalImagesTitle%22)

> Total images

```diff
+Total de imágenes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.statUnusedImagesTitle`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.statUnusedImagesTitle%22)

> Unused images

```diff
+Imágenes sin uso
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuDebug`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuDebug%22)

> Debug information

```diff
+Información de depuración
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuLabel`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuLabel%22)

> Tools

```diff
+Herramientas
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuPurgeImages`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuPurgeImages%22)

> Purge Images

```diff
+Limpiar imágenes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuRegenerateImages`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuRegenerateImages%22)

> Regenerate images

```diff
+Regenerar imágenes
```

#### [`walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuUpdateStats`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.settings.statsToolsBanner.toolsMenuUpdateStats%22)

> Update stats

```diff
+Actualizar estadísticas
```

#### [`walsgit_discussion_cards.admin.tag_modal.desktopCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.desktopCardWidth_help%22)

> Set the width (in %) of the primary cards on desktop (global setting: {default}%, min: 10% &amp; max: 100%).

```diff
+Ancho en % de las tarjetas primarias en escritorio (ajuste global: {default}%, mín: 10% y máx: 100%).
```

#### [`walsgit_discussion_cards.admin.tag_modal.desktopCardWidth_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.desktopCardWidth_label%22)

> Primary cards width on desktop

```diff
+Ancho de tarjetas primarias en escritorio
```

#### [`walsgit_discussion_cards.admin.tag_modal.intro_text`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.intro_text%22)

> Here you can set different discussion cards settings for the current tag's page.

```diff
+Personalice el comportamiento de las tarjetas específicamente para la vista de esta etiqueta.
```

#### [`walsgit_discussion_cards.admin.tag_modal.listCardsCount_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.listCardsCount_help%22)

> Number of discussion list items to be shown as smaller cards when &lt;em&gt;Use cards for discussion lists&lt;/em&gt; is activated (0 for all, max: 20)

```diff
+Cantidad de discusiones mostradas como tarjetas secundarias (0 para todas, máx: 20).
```

#### [`walsgit_discussion_cards.admin.tag_modal.listCardsCount_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.listCardsCount_label%22)

> Number of list cards

```diff
+Número de tarjetas secundarias
```

#### [`walsgit_discussion_cards.admin.tag_modal.primaryCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.primaryCards_help%22)

> Number of bigger cards shown at the top of the page (global setting : {default}, min: 0).

```diff
+Cantidad de tarjetas destacadas en la parte superior (ajuste global: {default}, mín: 0).
```

#### [`walsgit_discussion_cards.admin.tag_modal.primaryCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.primaryCards_label%22)

> Number of primary cards

```diff
+Número de tarjetas primarias
```

#### [`walsgit_discussion_cards.admin.tag_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.submit_button%22)

> Save

```diff
+Guardar
```

#### [`walsgit_discussion_cards.admin.tag_modal.tabletCardWidth_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.tabletCardWidth_help%22)

> Set the width (in %) of the primary cards on tablets (global setting: {default}%, min: 10% &amp; max: 100%).

```diff
+Ancho en % de las tarjetas primarias en tabletas (ajuste global: {default}%, mín: 10% y máx: 100%).
```

#### [`walsgit_discussion_cards.admin.tag_modal.tabletCardWidth_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.tabletCardWidth_label%22)

> Primary cards width on tablets

```diff
+Ancho de tarjetas primarias en tabletas
```

#### [`walsgit_discussion_cards.admin.tag_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.title%22)

> Discussion Card Settings for 

```diff
+Ajustes de tarjetas para 
```

#### [`walsgit_discussion_cards.admin.tag_modal.useListCards_help`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.useListCards_help%22)

> Display discussion list items as cards (smaller than primary cards). If not activated, default flarum discussion list items will be shown (no cards)

```diff
+Muestra las discusiones como tarjetas secundarias en el listado de la etiqueta.
```

#### [`walsgit_discussion_cards.admin.tag_modal.useListCards_label`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.useListCards_label%22)

> Use cards for discussion lists

```diff
+Usar tarjetas en el listado de discusiones
```

#### [`walsgit_discussion_cards.admin.tag_modal.useListCards_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tag_modal.useListCards_title%22)

> List cards options

```diff
+Opciones del listado de tarjetas
```

#### [`walsgit_discussion_cards.admin.tags.activation_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.activation_button%22)

> Activate for this tag

```diff
+Activar para esta etiqueta
```

#### [`walsgit_discussion_cards.admin.tags.deactivation_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.deactivation_button%22)

> Deactivate for this tag

```diff
+Desactivar para esta etiqueta
```

#### [`walsgit_discussion_cards.admin.tags.defaultImage_info`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.defaultImage_info%22)

> Set or change the default card image for this tag's page. See the Discussion Cards general settings for details on accepted file formats &amp; resolutions.

```diff
+Defina o cambie la imagen de tarjeta predeterminada para esta etiqueta.
```

#### [`walsgit_discussion_cards.admin.tags.defaultImage_title`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.defaultImage_title%22)

> Default image

```diff
+Imagen predeterminada
```

#### [`walsgit_discussion_cards.admin.tags.options_button`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.options_button%22)

> Other discussion cards settings

```diff
+Otros ajustes de tarjetas
```

#### [`walsgit_discussion_cards.admin.tags.options_heading`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.admin.tags.options_heading%22)

> Discussion Cards

```diff
+Tarjetas de discusión
```

#### [`walsgit_discussion_cards.forum.console.postUpdateCardImageError`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.forum.console.postUpdateCardImageError%22)

> Discussion Cards&gt; Error while refreshing updated card image for this discussion: 

```diff
+Tarjetas de discusión > Error al actualizar la imagen de la tarjeta para esta discusión: 
```

#### [`walsgit_discussion_cards.forum.replies`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.forum.replies%22)

> Replies: {count}

```diff
+Respuestas: {count}
```

#### [`walsgit_discussion_cards.forum.unreadReplies`](https://weblate.rob006.net/translate/flarum2/walsgit-discussion-cards/es/?q=context%3A%3D%22walsgit_discussion_cards.forum.unreadReplies%22)

> Unread replies: {count}

```diff
+Respuestas no leídas: {count}
```


### `walsgit-recycle-bin` (missing)

#### [`walsgit-recycle-bin.admin.bulk_delete_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_delete_label%22)

> Delete selected discussions

```diff
+Eliminar discusiones seleccionadas
```

#### [`walsgit-recycle-bin.admin.bulk_post_delete_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.bulk_post_delete_label%22)

> Delete selected posts

```diff
+Eliminar publicaciones seleccionadas
```

#### [`walsgit-recycle-bin.admin.grid.invalid_column_content`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.grid.invalid_column_content%22)

> Invalid content!

```diff
+¡Contenido no válido!
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.submit_button%22)

> Forever delete these discussions

```diff
+Eliminar de forma permanente estas discusiones
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.success%22)

> Successfully deleted the selected discussions

```diff
+Discusiones seleccionadas eliminadas correctamente
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.text_end%22)

>  selected discussions?

```diff
+ discusiones seleccionadas?
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.text_start%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; these 

```diff
+¿Está seguro de que desea <u>eliminar de forma permanente</u> las 
```

#### [`walsgit-recycle-bin.admin.mass_delete_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_modal.title%22)

> Forever delete these discussions

```diff
+Eliminar de forma permanente estas discusiones
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.submit_button%22)

> Forever delete these posts

```diff
+Eliminar de forma permanente estas publicaciones
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.success%22)

> Successfully deleted the selected posts

```diff
+Publicaciones seleccionadas eliminadas correctamente
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.text_end%22)

>  selected posts?

```diff
+ publicaciones seleccionadas?
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.text_start%22)

> Are you sure you want to &lt;u&gt;forever delete&lt;/u&gt; these 

```diff
+¿Está seguro de que desea <u>eliminar de forma permanente</u> las 
```

#### [`walsgit-recycle-bin.admin.mass_delete_post_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_delete_post_modal.title%22)

> Forever delete these posts

```diff
+Eliminar de forma permanente estas publicaciones
```

#### [`walsgit-recycle-bin.admin.mass_restore_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_modal.success%22)

> Successfully restored the selected discussions

```diff
+Discusiones seleccionadas restauradas correctamente
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.submit_button%22)

> Restore these posts

```diff
+Restaurar estas publicaciones
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.success`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.success%22)

> Successfully restored the selected posts

```diff
+Publicaciones seleccionadas restauradas correctamente
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.text_end`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.text_end%22)

>  selected posts?

```diff
+ publicaciones seleccionadas?
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.text_start`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.text_start%22)

> Are you sure you want to restore these 

```diff
+¿Está seguro de que desea restaurar las 
```

#### [`walsgit-recycle-bin.admin.mass_restore_post_modal.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.mass_restore_post_modal.title%22)

> Restore the selected posts

```diff
+Restaurar las publicaciones seleccionadas
```

#### [`walsgit-recycle-bin.admin.pagination.back_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.back_button%22)

> Back to previous page

```diff
+Volver a la página anterior
```

#### [`walsgit-recycle-bin.admin.pagination.first_page_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.first_page_button%22)

> Go to first page

```diff
+Ir a la primera página
```

#### [`walsgit-recycle-bin.admin.pagination.go_to_page_textbox_a11y_label`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.go_to_page_textbox_a11y_label%22)

> Go directly to page number

```diff
+Ir directamente al número de página
```

#### [`walsgit-recycle-bin.admin.pagination.last_page_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.last_page_button%22)

> Go to last page

```diff
+Ir a la última página
```

#### [`walsgit-recycle-bin.admin.pagination.next_button`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.next_button%22)

> Go to next page

```diff
+Ir a la página siguiente
```

#### [`walsgit-recycle-bin.admin.pagination.page_counter`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.pagination.page_counter%22)

> Page {current} of {total}

```diff
+Página {current} de {total}
```

#### [`walsgit-recycle-bin.admin.post.id`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.id%22)

> ID

```diff
+ID
```

#### [`walsgit-recycle-bin.admin.post.title`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.post.title%22)

> Post text

```diff
+Texto de la publicación
```

#### [`walsgit-recycle-bin.admin.unknown_user`](https://weblate.rob006.net/translate/flarum2/walsgit-recycle-bin/es/?q=context%3A%3D%22walsgit-recycle-bin.admin.unknown_user%22)

> Unknown user

```diff
+Usuario desconocido
```

<!-- {% endraw %} -->
