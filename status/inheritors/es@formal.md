# Spanish (formal) inherited translations differences

Translations for Spanish (formal) (`es@formal`) are inherited from Spanish informal variant, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **229** are translated differently and **0** are
translated only in `es@formal`. Altogether they cover **26** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [148](#core) |
| `datlechin-birthdays` | [9](#datlechin-birthdays) |
| `flarum-akismet` | [1](#flarum-akismet) |
| `flarum-emoji` | [1](#flarum-emoji) |
| `flarum-extension-manager` | [12](#flarum-extension-manager) |
| `flarum-likes` | [4](#flarum-likes) |
| `flarum-lock` | [5](#flarum-lock) |
| `flarum-mentions` | [10](#flarum-mentions) |
| `flarum-sticky` | [3](#flarum-sticky) |
| `flarum-subscriptions` | [5](#flarum-subscriptions) |
| `flarum-tags` | [9](#flarum-tags) |
| `flarumite-simple-spoilers` | [1](#flarumite-simple-spoilers) |
| `fof-discussion-language` | [1](#fof-discussion-language) |
| `fof-links` | [1](#fof-links) |
| `fof-masquerade` | [3](#fof-masquerade) |
| `fof-nightmode` | [1](#fof-nightmode) |
| `fof-pages` | [2](#fof-pages) |
| `fof-polls` | [2](#fof-polls) |
| `fof-reactions` | [1](#fof-reactions) |
| `fof-socialprofile` | [2](#fof-socialprofile) |
| `fof-upload` | [2](#fof-upload) |
| `fof-user-bio` | [2](#fof-user-bio) |
| `fof-webhooks` | [1](#fof-webhooks) |
| `katosdev-signature` | [1](#katosdev-signature) |
| `matteocontrini-imgur-upload` | [1](#matteocontrini-imgur-upload) |
| `michaelbelgium-discussion-views` | [1](#michaelbelgium-discussion-views) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Spanish informal variant (`-` line) and the translation from `es@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
-No se pudieron cargar los anuncios. Inténtelo de nuevo más tarde.
+No se han podido cargar los anuncios. Inténtalo de nuevo más tarde.
```

No se <del>pudieron</del><ins>han podido</ins> cargar los anuncios. <del>Inténtelo</del><ins>Inténtalo</ins> de nuevo más tarde.

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
-Probar de nuevo
+Reintentar
```

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Elija dos colores para decorar su foro. El primero será usado para resaltar y el segundo será utilizado para decorar elementos de fondo.
+Elige dos colores para tu foro. El primero se utilizará para resaltar elementos y el segundo, para los elementos de fondo.
```

<del>Elija</del><ins>Elige</ins> dos colores para<del> decorar</del> <del>su</del><ins>tu</ins> foro. El primero <del>será</del><ins>se</ins> <del>usado</del><ins>utilizará</ins> para resaltar<ins> elementos</ins> y el<del> segundo será</del> <del>utilizado</del><ins>segundo,</ins> para <del>decorar</del><ins>los</ins> elementos de fondo.

#### [`core.admin.appearance.custom_footer_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_footer_heading%22)

> Custom Footer

```diff
-Pié de página personalizado
+Pie de página personalizado
```

<del>Pié</del><ins>Pie</ins> de página personalizado

#### [`core.admin.appearance.custom_styles_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_styles_heading%22)

> Custom Styles

```diff
-Estilos Personalizados
+Estilos personalizados
```

Estilos <del>Personalizados</del><ins>personalizados</ins>

#### [`core.admin.appearance.custom_styles_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_styles_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's default styles.

```diff
-Personaliza la apariencia de tu foro añadiendo tu propio código Less/CSS, que se aplicará sobre los estilos por defecto de Flarum.
+Personaliza la apariencia de tu foro añadiendo tu propio código LESS/CSS, que se aplicará sobre los estilos predeterminados de Flarum.
```

Personaliza la apariencia de tu foro añadiendo tu propio código <del>Less/CSS,</del><ins>LESS/CSS,</ins> que se aplicará sobre los estilos<del> por</del> <del>defecto</del><ins>predeterminados</ins> de Flarum.

#### [`core.admin.appearance.dark_mode_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.dark_mode_label%22)

> Dark Mode

```diff
-Modo Oscuro
+Modo oscuro
```

Modo <del>Oscuro</del><ins>oscuro</ins>

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Personaliza los colores, logotipos y otras variables de tu foro.
+Personaliza los colores, logotipos y otras opciones de tu foro.
```

Personaliza los colores, logotipos y otras <del>variables</del><ins>opciones</ins> de tu foro.

#### [`core.admin.appearance.edit_css_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.edit_css_button%22)

> Edit Custom CSS

```diff
-Editar los Estilos Personalizados
+Editar los estilos personalizados
```

Editar los <del>Estilos</del><ins>estilos</ins> <del>Personalizados</del><ins>personalizados</ins>

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Por favor, introduce un código hexadecimal de color.
+Introduce un código de color hexadecimal.
```

<del>Por favor, introduce</del><ins>Introduce</ins> un código<del> hexadecimal</del> de <del>color.</del><ins>color hexadecimal.</ins>

#### [`core.admin.appearance.favicon_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_heading%22)

> Favicon

```diff
-Icono del sitio
+<em>Favicon</em>
```

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Sube una imagen para que sea mostrada como icono de acceso directo al foro.
+Sube una imagen para que se muestre como icono de acceso directo al foro.
```

Sube una imagen para que <del>sea</del><ins>se</ins> <del>mostrada</del><ins>muestre</ins> como icono de acceso directo al foro.

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Sube una imagen para que sea mostrada en lugar del título del foro.
+Sube una imagen para que se muestre en lugar del título del foro.
```

Sube una imagen para que <del>sea</del><ins>se</ins> <del>mostrada</del><ins>muestre</ins> en lugar del título del foro.

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
-Enviar un correo electrónico a los administradores cuando se detecte una extensión abandonada recientemente durante la verificación semanal
+Enviar un correo electrónico a los administradores cuando la comprobación semanal detecte una nueva extensión abandonada
```

Enviar un correo electrónico a los administradores cuando <del>se</del><ins>la comprobación semanal</ins> detecte una<ins> nueva</ins> extensión abandonada<del> recientemente durante la verificación semanal</del>

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
-No se pudo obtener la lista de extensiones abandonadas. Inténtelo de nuevo más tarde.
+No se ha podido obtener la lista de extensiones abandonadas. Inténtalo de nuevo más tarde.
```

No se <del>pudo</del><ins>ha podido</ins> obtener la lista de extensiones abandonadas. <del>Inténtelo</del><ins>Inténtalo</ins> de nuevo más tarde.

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
-Lista de extensiones abandonadas actualizada. Se encontraron {count} extension/es instaladas en tu foro.
+Lista de extensiones abandonadas actualizada. Número de extensiones encontradas en tu foro: {count}.
```

Lista de extensiones abandonadas actualizada. <del>Se encontraron</del><ins>Número</ins> <del>{count}</del><ins>de</ins> <del>extension/es</del><ins>extensiones</ins> <del>instaladas</del><ins>encontradas</ins> en tu <del>foro.</del><ins>foro: {count}.</ins>

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Configura el título, el idioma y otras configuraciones básicas de tu foro.
+Configura el título, el idioma y los demás ajustes básicos de tu foro.
```

Configura el título, el idioma y <del>otras</del><ins>los</ins> <del>configuraciones</del><ins>demás</ins> <del>básicas</del><ins>ajustes básicos</ins> de tu foro.

#### [`core.admin.basics.display_name_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_heading%22)

> User Display Name

```diff
-Nombre para mostrar
+Nombre público del usuario
```

Nombre <del>para</del><ins>público</ins> <del>mostrar</del><ins>del usuario</ins>

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Selecciona el controlador que debe utilizarse para mostrar los nombres. Por defecto, se muestra el nombre de usuario.
+Selecciona el controlador que se utilizará para los nombres públicos de los usuarios. Por defecto, se muestra el nombre de usuario.
```

Selecciona el controlador que <del>debe</del><ins>se</ins> <del>utilizarse</del><ins>utilizará</ins> para <del>mostrar</del><ins>los nombres públicos de</ins> los <del>nombres.</del><ins>usuarios.</ins> Por defecto, se muestra el nombre de usuario.

#### [`core.admin.basics.forum_description_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.forum_description_text%22)

> Enter a short sentence or two that describes your community. This will appear in the meta tag and show up in search engines.

```diff
-Introduce una o dos frases que describan tu comunidad. Estas aparecerán en el "metatag" y se mostrarán en los buscadores.
+Introduzca una o dos frases que describan su comunidad. Estas aparecerán en el "metatag" y se mostrarán en los buscadores.
```

<del>Introduce</del><ins>Introduzca</ins> una o dos frases que describan <del>tu</del><ins>su</ins> comunidad. Estas aparecerán en el "metatag" y se mostrarán en los buscadores.

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Elige cuál es la portada que los usuarios verán al llegar al foro.
+Elige la primera página que verán los usuarios al visitar tu foro.
```

Elige <del>cuál es </del>la <del>portada</del><ins>primera página</ins> que<ins> verán</ins> los usuarios<del> verán</del> al <del>llegar</del><ins>visitar</ins> <del>al</del><ins>tu</ins> foro.

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-Driver de Slug: {model}
+Controlador de slug: {model}
```

<del>Driver</del><ins>Controlador</ins> de <del>Slug:</del><ins>slug:</ins> {model}

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Seleccione el driver que se utilizará para el slugging de este modelo.
+Selecciona el controlador que se utilizará para generar los slugs de este modelo.
```

<del>Seleccione</del><ins>Selecciona</ins> el <del>driver</del><ins>controlador</ins> que se utilizará para <del>el</del><ins>generar</ins> <del>slugging</del><ins>los slugs</ins> de este modelo.

#### [`core.admin.basics.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.title%22)

> Basics

```diff
-Básicos
+Ajustes básicos
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los invitados en tu foro.
+Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los visitantes de tu foro.
```

Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los <del>invitados</del><ins>visitantes</ins> <del>en</del><ins>de</ins> tu foro.

#### [`core.admin.dashboard.clear_cache_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.clear_cache_button%22)

> Clear Cache

```diff
-Limpiar caché
+Vaciar caché
```

<del>Limpiar</del><ins>Vaciar</ins> caché

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
-Info del sistema
+Información del sistema
```

<del>Info</del><ins>Información</ins> del sistema

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
-Falló la copia a portapapeles
+No se ha podido copiar al portapapeles
```

<del>Falló</del><ins>No</ins> <del>la</del><ins>se</ins> <del>copia</del><ins>ha</ins> <del>a</del><ins>podido copiar al</ins> portapapeles

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
-Info del sistema copiada en portapapeles
+Información del sistema copiada al portapapeles
```

<del>Info</del><ins>Información</ins> del sistema copiada <del>en</del><ins>al</ins> portapapeles

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
-Info del sistema
+Información del sistema
```

<del>Info</del><ins>Información</ins> del sistema

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-No se pudo escribir en el sistema de archivos. Verifica los permisos de su sistema de archivos y vuelve a intentarlo. O intenta ejecutar desde la línea de comandos.
+No se ha podido escribir en el sistema de archivos. Comprueba los permisos del sistema de archivos y vuelve a intentarlo. También puedes probar desde la línea de comandos.
```

No se <del>pudo</del><ins>ha podido</ins> escribir en el sistema de archivos. <del>Verifica</del><ins>Comprueba</ins> los permisos<del> de</del> <del>su</del><ins>del</ins> sistema de archivos y vuelve a intentarlo. <del>O</del><ins>También</ins> <del>intenta</del><ins>puedes</ins> <del>ejecutar</del><ins>probar</ins> desde la línea de comandos.

#### [`core.admin.dashboard.status.headers.queue-driver`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.headers.queue-driver%22)

> Queue Driver

```diff
-Driver de cola
+Controlador de cola
```

<del>Driver</del><ins>Controlador</ins> de cola

#### [`core.admin.dashboard.status.headers.scheduler-status`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.headers.scheduler-status%22)

> Scheduler

```diff
-Programador
+Programador de tareas
```

Programador<ins> de tareas</ins>

#### [`core.admin.dashboard.status.headers.session-driver`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.headers.session-driver%22)

> Session Driver

```diff
-Driver de sesión
+Controlador de sesión
```

<del>Driver</del><ins>Controlador</ins> de sesión

#### [`core.admin.dashboard.status.scheduler.never-run`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.never-run%22)

> Never run

```diff
-Nunca se ejecuta
+Nunca se ha ejecutado
```

Nunca se <del>ejecuta</del><ins>ha ejecutado</ins>

#### [`core.admin.dashboard.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.title%22)

> Dashboard

```diff
-Panel
+Panel de información
```

Panel<ins> de información</ins>

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-Cuando el modo <code>debug</code> está activo, Flarum reconstruirá sus archivos <code>JavaScript</code> y <code>CSS</code> en cada solicitud, y también podría filtrar potencialmente otra información, como secretos de la base de datos, variables de entorno, etc.
+Cuando el modo <code>debug</code> está activo, Flarum recompila sus archivos <code>JavaScript</code> y <code>CSS</code> en cada solicitud y podría exponer información confidencial, como credenciales de la base de datos, variables de entorno, etc.

-Se recomienda encarecidamente deshabilitar <code>debug</code> en su archivo <code>config.php</code> en producción. Consulte <link>Documentos de Flarum</link> para obtener más información.
+Se recomienda encarecidamente desactivar <code>debug</code> en tu archivo <code>config.php</code> en producción. Consulta la <link>documentación de Flarum</link> para obtener más información.

```

Cuando el modo &lt;code&gt;debug&lt;/code&gt; está activo, Flarum <del>reconstruirá</del><ins>recompila</ins> sus archivos &lt;code&gt;JavaScript&lt;/code&gt; y &lt;code&gt;CSS&lt;/code&gt; en cada <del>solicitud,</del><ins>solicitud</ins> y<del> también</del> podría<del> filtrar</del> <del>potencialmente</del><ins>exponer</ins> <del>otra</del><ins>información</ins> <del>información,</del><ins>confidencial,</ins> como <del>secretos</del><ins>credenciales</ins> de la base de datos, variables de entorno, etc.<br /><br />Se recomienda encarecidamente <del>deshabilitar</del><ins>desactivar</ins> &lt;code&gt;debug&lt;/code&gt; en <del>su</del><ins>tu</ins> archivo &lt;code&gt;config.php&lt;/code&gt; en producción. <del>Consulte</del><ins>Consulta</ins> <del>&lt;link&gt;Documentos</del><ins>la &lt;link&gt;documentación</ins> de Flarum&lt;/link&gt; para obtener más información.<br />

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Personaliza la apariencia de tu foro añadiendo tu propio código Less/CSS que será aplicado sobre los <a>estilos por defecto</a> de Flarum.
+Personaliza la apariencia de tu foro añadiendo tu propio código LESS/CSS, que se aplicará sobre los <a>estilos predeterminados</a> de Flarum.
```

Personaliza la apariencia de tu foro añadiendo tu propio código <del>Less/CSS</del><ins>LESS/CSS,</ins> que <del>será</del><ins>se</ins> <del>aplicado</del><ins>aplicará</ins> sobre los &lt;a&gt;estilos<del> por</del> <del>defecto&lt;/a&gt;</del><ins>predeterminados&lt;/a&gt;</ins> de Flarum.

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-¿Estás seguro de que deseas eliminar este grupo? Los usuarios que pertenecen al grupo NO serán eliminados.
+¿Seguro que quieres eliminar este grupo? Los usuarios que pertenecen al grupo NO se eliminarán.
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar este grupo? Los usuarios que pertenecen al grupo NO <del>serán</del><ins>se</ins> <del>eliminados.</del><ins>eliminarán.</ins>

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Configura el controlador, la configuración y las direcciones que usará tu foro para enviar correo electrónico.
+Configura el controlador, los ajustes y las direcciones que utilizará tu foro para enviar correos electrónicos.
```

Configura el controlador, <del>la</del><ins>los</ins> <del>configuración</del><ins>ajustes</ins> y las direcciones que <del>usará</del><ins>utilizará</ins> tu foro para enviar <del>correo</del><ins>correos</ins> <del>electrónico.</del><ins>electrónicos.</ins>

#### [`core.admin.email.mailgun_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.email.mailgun_heading%22)

> Mailgun Settings

```diff
-Configuración Mailgun
+Ajustes de Mailgun
```

<del>Configuración</del><ins>Ajustes de</ins> Mailgun

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Actualmente Flarum no envía correos electrónicos. Esto puede deberse al controlador seleccionado, o errores en su configuración.
+Actualmente, Flarum no envía correos electrónicos. Esto puede deberse al controlador seleccionado o a errores en sus ajustes.
```

<del>Actualmente</del><ins>Actualmente,</ins> Flarum no envía correos electrónicos. Esto puede deberse al controlador <del>seleccionado,</del><ins>seleccionado</ins> o<ins> a</ins> errores en <del>su</del><ins>sus</ins> <del>configuración.</del><ins>ajustes.</ins>

#### [`core.admin.email.smtp_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.email.smtp_heading%22)

> SMTP Settings

```diff
-Configuración SMTP
+Ajustes de SMTP
```

<del>Configuración</del><ins>Ajustes de</ins> SMTP

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
-Esta extensión ha sido reemplazada por {replacement}. Considere migrar al paquete de reemplazo.
+Esta extensión ha sido sustituida por {replacement}. Considera migrar al paquete que la sustituye.
```

Esta extensión ha sido <del>reemplazada</del><ins>sustituida</ins> por {replacement}. <del>Considere</del><ins>Considera</ins> migrar al paquete <del>de</del><ins>que</ins> <del>reemplazo.</del><ins>la sustituye.</ins>

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Al purgar, se eliminarán todas las entradas en la base de datos y datos asociados a la extensión. Este proceso no desinstalará la extensión, pues esto debe completarse mediante Composer ¿Realmente deseas continuar?
+Al purgar, se eliminarán todas las entradas de la base de datos y los datos asociados a la extensión. Este proceso no desinstala la extensión; debes hacerlo mediante Composer. ¿Seguro que quieres continuar?
```

Al purgar, se eliminarán todas las entradas <del>en</del><ins>de</ins> la base de datos y<ins> los</ins> datos asociados a la extensión. Este proceso no <del>desinstalará</del><ins>desinstala</ins> la<del> extensión, pues</del> <del>esto</del><ins>extensión;</ins> <del>debe</del><ins>debes</ins> <del>completarse</del><ins>hacerlo</ins> mediante <del>Composer</del><ins>Composer.</ins> <del>¿Realmente</del><ins>¿Seguro</ins> <del>deseas</del><ins>que quieres</ins> continuar?

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Habilita la extensión para ver y cambiar la configuración.
+Activa la extensión para ver y modificar sus ajustes.
```

<del>Habilita</del><ins>Activa</ins> la extensión para ver y <del>cambiar</del><ins>modificar</ins> <del>la</del><ins>sus</ins> <del>configuración.</del><ins>ajustes.</ins>

#### [`core.admin.extension.info_links.discuss`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.info_links.discuss%22)

> Discuss

```diff
-Discutir
+Debatir
```

#### [`core.admin.extension.info_links.source`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.info_links.source%22)

> Source

```diff
-Fuente
+Código fuente
```

#### [`core.admin.extension.no_settings`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.no_settings%22)

> This extension has no settings.

```diff
-Esta extensión no tiene configuración.
+Esta extensión no tiene ajustes.
```

Esta extensión no tiene <del>configuración.</del><ins>ajustes.</ins>

#### [`core.admin.extension.open_modal`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.open_modal%22)

> Open Settings

```diff
-Configuración abierta
+Abrir ajustes
```

#### [`core.admin.extension.readme.button_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.readme.button_label%22)

> README

```diff
-LÉEME
+README
```

#### [`core.admin.extension.readme.no_readme`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.readme.no_readme%22)

> This extension does not appear to have a README file

```diff
-Esta extensión no incluye un archivo LÉEME
+Esta extensión no incluye un archivo README
```

Esta extensión no incluye un archivo <del>LÉEME</del><ins>README</ins>

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Por favor, espera...
+Espera, por favor...
```

#### [`core.admin.nav.basics_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.nav.basics_button%22)

> =&gt; core.admin.basics.title

```diff
-Básicos
+Ajustes básicos
```

#### [`core.admin.nav.categories.core`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.core%22)

> Core Configuration

```diff
-Configuración básica
+Ajustes básicos
```

#### [`core.admin.nav.categories.feature`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.feature%22)

> Features

```diff
-Características
+Funciones
```

#### [`core.admin.nav.categories.other`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.other%22)

> Other Extensions

```diff
-Otras Extensiones
+Otras extensiones
```

Otras <del>Extensiones</del><ins>extensiones</ins>

#### [`core.admin.permissions.delete_posts_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.permissions.delete_posts_label%22)

> Delete posts

```diff
-Borrar publicaciones
+Eliminar publicaciones
```

<del>Borrar</del><ins>Eliminar</ins> publicaciones

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-Configurar quién puede ver y hacer qué.
+Configura qué puede ver y hacer cada usuario.
```

<del>Configurar</del><ins>Configura</ins> <del>quién</del><ins>qué</ins> puede ver y hacer <del>qué.</del><ins>cada usuario.</ins>

#### [`core.admin.permissions.moderate_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.permissions.moderate_heading%22)

> Moderate

```diff
-Moderado
+Moderar
```

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
-Retirar alcance de {scope}
+Eliminar el ámbito de {scope}
```

<del>Retirar</del><ins>Eliminar</ins> <del>alcance</del><ins>el ámbito</ins> de {scope}

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-Cambiar el título a discusiones
+Cambiar el título de las discusiones
```

Cambiar el título <del>a</del><ins>de las</ins> discusiones

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Ver a qué hora fue la última conexión de un usuario
+Ver la última conexión de un usuario
```

Ver <del>a qué hora fue </del>la última conexión de un usuario

#### [`core.admin.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.upload_image.upload_button%22)

> Choose an Image...

```diff
-Elija una imagen...
+Elige una imagen...
```

<del>Elija</del><ins>Elige</ins> una imagen...

#### [`core.admin.users.create_user_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.users.create_user_button%22)

> New User

```diff
-Nuevo Usuario
+Nuevo usuario
```

Nuevo <del>Usuario</del><ins>usuario</ins>

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-Una lista paginada de todos los usuarios de su foro.
+Lista paginada de todos los usuarios de tu foro.
```

<del>Una lista</del><ins>Lista</ins> paginada de todos los usuarios de <del>su</del><ins>tu</ins> foro.

#### [`core.admin.users.grid.columns.join_time.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.users.grid.columns.join_time.title%22)

> Joined

```diff
-Se unió
+Fecha de registro
```

#### [`core.admin.users.grid.invalid_column_content`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.users.grid.invalid_column_content%22)

> Invalid

```diff
-Inválido
+No válido
```

#### [`core.api.invalid_filter_type.must_not_be_multidimensional_array_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.api.invalid_filter_type.must_not_be_multidimensional_array_message%22)

> The {filter} filter must not be a multidimensional array.

```diff
-El filtro {filter} no debe ser una array multidimensional.
+El filtro {filter} no debe ser un array multidimensional.
```

El filtro {filter} no debe ser <del>una</del><ins>un</ins> array multidimensional.

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
-Acción requerida: se detectó extension/es abandonada/s
+Acción necesaria: se han detectado extensiones abandonadas
```

Acción <del>requerida:</del><ins>necesaria:</ins> se <del>detectó</del><ins>han</ins> <del>extension/es</del><ins>detectado</ins> <del>abandonada/s</del><ins>extensiones abandonadas</ins>

#### [`core.email.activate_account.body`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.activate_account.body%22)

> Hey {username}!
>
> Someone (hopefully you!) has signed up to {forum} with this email address.
>
> If this was you, simply click the following link and your account will be activated:
> {url}
>
> If you did not sign up, please ignore this email.
>

```diff
-¡Hola {username}!
+¡Hola, {username}!

-Alguien (¡espero que tú!) se ha registrado en {forum} con esta dirección de correo electrónico.
+Alguien se ha registrado como usuario en {forum} con esta dirección de correo electrónico.

-Si has sido tú, simplemente haz clic en el siguiente enlace y tu cuenta se activará:
+Si efectivamente ha sido usted, por favor, haga click en el siguiente enlace y su cuenta de usuario será activada:
 {url}

-Si no te has registrado, ignora este correo electrónico.
+Si por el contrario no ha sido usted, por favor, ignore este correo electrónico.
+
+Reciba un cordial saludo,
+
+El Equipo de {forum}

```

<del>¡Hola</del><ins>¡Hola,</ins> {username}!<br /><br />Alguien<del> (¡espero que tú!)</del> se ha registrado<ins> como usuario</ins> en {forum} con esta dirección de correo electrónico.<br /><br />Si <del>has</del><ins>efectivamente ha</ins> sido <del>tú,</del><ins>usted,</ins> <del>simplemente</del><ins>por</ins> <del>haz</del><ins>favor,</ins> <del>clic</del><ins>haga click</ins> en el siguiente enlace y <del>tu</del><ins>su</ins> cuenta <del>se</del><ins>de</ins> <del>activará:</del><ins>usuario será activada:</ins><br />{url}<br /><br />Si<ins> por el contrario</ins> no <del>te</del><ins>ha</ins> <del>has</del><ins>sido</ins> <del>registrado,</del><ins>usted,</ins> <del>ignora</del><ins>por favor, ignore</ins> este correo electrónico.<ins><br /><br />Reciba un cordial saludo,<br /><br />El Equipo de {forum}</ins><br />

#### [`core.email.confirm_email.body`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.confirm_email.body%22)

> Hey {username}!
>
> Someone (hopefully you!) has changed their email address on {forum} to this one.
>
> If this was you, simply click the following link and your email will be confirmed:
> {url}
>
> If this was not you, please ignore this email.
>

```diff
-¡Hola {username}!
+¡Hola, {username}!

-Alguien (¡espero que tú!) ha cambiado su dirección de correo electrónico en {forum} por esta.
+Alguien se ha registrado como usuario en {forum} con Su dirección de correo electrónico.

-Si has sido tú, simplemente haz clic en el siguiente enlace y tu correo electrónico será confirmado:
+Si efectivamente ha sido usted, por favor, haga click en el siguiente enlace para confirmar tu dirección de correo electrónico:
 {url}

-Si no has sido tú, por favor ignora este email.
+Si por el contrario no ha sido usted, por favor, ignore este correo electrónico.
+
+Reciba un cordial saludo,
+
+El Equipo de {forum}

```

<del>¡Hola</del><ins>¡Hola,</ins> {username}!<br /><br />Alguien<del> (¡espero que</del> <del>tú!)</del><ins>se</ins> ha <del>cambiado</del><ins>registrado</ins> <del>su</del><ins>como</ins> <del>dirección</del><ins>usuario</ins> <del>de</del><ins>en</ins> <del>correo</del><ins>{forum}</ins> <del>electrónico</del><ins>con</ins> <del>en</del><ins>Su</ins> <del>{forum}</del><ins>dirección</ins> <del>por</del><ins>de</ins> <del>esta.</del><ins>correo electrónico.</ins><br /><br />Si <del>has</del><ins>efectivamente ha</ins> sido <del>tú,</del><ins>usted,</ins> <del>simplemente</del><ins>por</ins> <del>haz</del><ins>favor,</ins> <del>clic</del><ins>haga click</ins> en el siguiente enlace <del>y</del><ins>para confirmar</ins> tu <del>correo</del><ins>dirección</ins> <del>electrónico</del><ins>de</ins> <del>será</del><ins>correo</ins> <del>confirmado:</del><ins>electrónico:</ins><br />{url}<br /><br />Si<ins> por el contrario</ins> no <del>has</del><ins>ha</ins> sido <del>tú,</del><ins>usted,</ins> por <del>favor</del><ins>favor,</ins> <del>ignora</del><ins>ignore</ins> este <del>email.</del><ins>correo electrónico.<br /><br />Reciba un cordial saludo,<br /><br />El Equipo de {forum}</ins><br />

#### [`core.email.reset_password.body`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.reset_password.body%22)

> Hey {username}!
>
> Someone (hopefully you!) has submitted a forgotten password request for your account on {forum}.
>
> If this was you, click the following link to reset your password:
> {url}
>
> If you do not wish to change your password, just ignore this email and nothing will happen.
>

```diff
-¡Hola {username}!
+¡Hola, {username}!

-Alguien (¡espero que tú!) ha enviado una solicitud de contraseña olvidada para tu cuenta en {forum}.
+Alguien ha enviado una solicitud para restablecer la contraseña de su cuenta de usuario en {forum}.

-Si has sido tú, haz clic en el siguiente enlace para restablecer tu contraseña:
+Si efectivamente ha sido usted, por favor, haga click en el siguiente enlace para restablecer tu contraseña:
 {url}

-Si no deseas cambiar tu contraseña, simplemente ignora este correo electrónico y no pasará nada.
+Si por el contrario no ha sido usted, por favor, ignore este correo electrónico.
+
+Reciba un cordial saludo,
+
+El Equipo de {forum}

```

<del>¡Hola</del><ins>¡Hola,</ins> {username}!<br /><br />Alguien<del> (¡espero que tú!)</del> ha enviado una solicitud <del>de</del><ins>para</ins> <del>contraseña</del><ins>restablecer</ins> <del>olvidada</del><ins>la</ins> <del>para</del><ins>contraseña</ins> <del>tu</del><ins>de su</ins> cuenta<ins> de usuario</ins> en {forum}.<br /><br />Si <del>has</del><ins>efectivamente ha</ins> sido <del>tú,</del><ins>usted,</ins> <del>haz</del><ins>por</ins> <del>clic</del><ins>favor, haga click</ins> en el siguiente enlace para restablecer tu contraseña:<br />{url}<br /><br />Si<ins> por el contrario</ins> no <del>deseas</del><ins>ha</ins> <del>cambiar</del><ins>sido</ins> <del>tu</del><ins>usted,</ins> <del>contraseña,</del><ins>por</ins> <del>simplemente</del><ins>favor,</ins> <del>ignora</del><ins>ignore</ins> este correo <del>electrónico</del><ins>electrónico.<br /><br />Reciba</ins> <del>y</del><ins>un</ins> <del>no</del><ins>cordial</ins> <del>pasará</del><ins>saludo,<br /><br />El</ins> <del>nada.</del><ins>Equipo de {forum}</ins><br />

#### [`core.email.send_test.body`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.send_test.body%22)

> Hey {username}!
>
> This is a test email to confirm that your Flarum email configuration is working properly.
>
> If this was you, this email means that your configuration works!
>
> If this was not you, please ignore this email.
>

```diff
 Hey {username}!

 Este es un correo electrónico de prueba para confirmar que la configuración de Flarum funciona correctamente.

-Si fuiste tú, este correo electrónico significa que su configuración funciona.
+Si fué usted, este correo electrónico significa que su configuración funciona.

-Si no fuiste tú, ignora este correo electrónico.
+Si no ha sido usted, ignore este correo electrónico.

```

Hey {username}!<br /><br />Este es un correo electrónico de prueba para confirmar que la configuración de Flarum funciona correctamente.<br /><br />Si <del>fuiste</del><ins>fué</ins> <del>tú,</del><ins>usted,</ins> este correo electrónico significa que su configuración funciona.<br /><br />Si no <del>fuiste</del><ins>ha</ins> <del>tú,</del><ins>sido</ins> <del>ignora</del><ins>usted, ignore</ins> este correo electrónico.<br />

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Haz click en el botón de abajo y recibirás por correo electrónico un enlace para restablecer tu contraseña.
+Pulsa el botón de abajo para recibir por correo electrónico un enlace para restablecer tu contraseña.
```

<del>Haz click en</del><ins>Pulsa</ins> el botón de abajo <del>y</del><ins>para</ins> <del>recibirás</del><ins>recibir</ins> por correo electrónico un enlace para restablecer tu contraseña.

#### [`core.forum.composer.preview_tooltip`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer.preview_tooltip%22)

> Preview

```diff
-Vista preliminar
+Vista previa
```

Vista <del>preliminar</del><ins>previa</ins>

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Aún no has publicado tu discusión. ¿Estás seguro de que deseas descartarla?
+Aún no has publicado tu discusión. ¿Seguro que quieres descartarla?
```

Aún no has publicado tu discusión. <del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> descartarla?

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Aún no has publicado tus cambios. ¿Estás seguro de que deseas descartarlos?
+Aún no has publicado tus cambios. ¿Seguro que quieres descartarlos?
```

Aún no has publicado tus cambios. <del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> descartarlos?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Se realizó tu edición.
+Se han guardado tus cambios.
```

Se <del>realizó</del><ins>han</ins> <del>tu</del><ins>guardado</ins> <del>edición.</del><ins>tus cambios.</ins>

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Aún no has publicado tu respuesta. ¿Estás seguro de que desea descartarla?
+Aún no has publicado tu respuesta. ¿Seguro que quieres descartarla?
```

Aún no has publicado tu respuesta. <del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> descartarla?

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Tu respuesta fue publicada.
+Tu respuesta se ha publicado.
```

Tu respuesta <del>fue</del><ins>se</ins> <del>publicada.</del><ins>ha publicado.</ins>

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-Usted no tiene permiso para responder en esta discusión.
+No tienes permiso para responder en esta discusión.
```

<del>Usted no</del><ins>No</ins> <del>tiene</del><ins>tienes</ins> permiso para responder en esta discusión.

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-¿Estás seguro de que deseas eliminar esta discusión?
+¿Seguro que quieres eliminar esta discusión?
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar esta discusión?

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-Alternar el menú desplegable de acciones de discusión
+Mostrar u ocultar el menú de acciones de la discusión
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de acciones de<ins> la</ins> discusión

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# respuesta sin leer} other {# respuestas sin leer}}. Marcar {count, plural, one {respuesta} other {respuestas}} como leída(s).
+{count, plural, one {# respuesta sin leer} other {# respuestas sin leer}}. Marcar {count, plural, one {la respuesta como leída} other {las respuestas como leídas}}.
```

{count, plural, one {# respuesta sin leer} other {# respuestas sin leer}}. Marcar {count, plural, one <del>{respuesta}</del><ins>{la respuesta como leída}</ins> other <del>{respuestas}}</del><ins>{las respuestas</ins> como <del>leída(s).</del><ins>leídas}}.</ins>

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Si el correo electrónico que ingresaste está registrado en este sitio, te enviaremos un correo electrónico con un enlace para restablecer tu contraseña. Si no aparece pronto, por favor, comprueba la carpeta de correo no deseado (spam).
+Te hemos enviado un correo electrónico con un enlace para restablecer tu contraseña. Si no llega pronto, comprueba la carpeta de correo no deseado (spam).
```

<del>Si el correo electrónico que ingresaste está registrado en este sitio,</del><ins>Te</ins> <del>te</del><ins>hemos</ins> <del>enviaremos</del><ins>enviado</ins> un correo electrónico con un enlace para restablecer tu contraseña. Si no <del>aparece</del><ins>llega</ins> pronto,<del> por favor,</del> comprueba la carpeta de correo no deseado (spam).

#### [`core.forum.header.locale_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.header.locale_dropdown_accessible_label%22)

> Change forum locale

```diff
-Cambiar la configuración regional del foro
+Cambiar el idioma del foro
```

Cambiar <del>la configuración</del><ins>el</ins> <del>regional</del><ins>idioma</ins> del foro

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-Alternar el menú desplegable de opciones de sesión
+Mostrar u ocultar el menú de opciones de sesión
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de opciones de sesión

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-¿Estás seguro de que deseas marcar todas las discusiones como leídas?
+¿Seguro que quieres marcar todas las discusiones como leídas?
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> marcar todas las discusiones como leídas?

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-Alternar el menú desplegable de navegación
+Mostrar u ocultar el menú de navegación
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de navegación

#### [`core.forum.log_in.forgot_password_link`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.log_in.forgot_password_link%22)

> Forgot password?

```diff
-¿Olvidaste tu contraseña?
+¿Has olvidado tu contraseña?
```

<del>¿Olvidaste</del><ins>¿Has olvidado</ins> tu contraseña?

#### [`core.forum.log_in.invalid_login_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.log_in.invalid_login_message%22)

> Your login details were incorrect.

```diff
-Tus credenciales son incorrectas.
+Sus credenciales son incorrectas.
```

<del>Tus</del><ins>Sus</ins> credenciales son incorrectas.

#### [`core.forum.log_in.remember_me_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.log_in.remember_me_label%22)

> Remember Me

```diff
-Recordarme
+Recordarle
```

#### [`core.forum.notifications.mark_as_read_tooltip`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.notifications.mark_as_read_tooltip%22)

> Mark as Read

```diff
-Marcar como leído
+Marcar como leída
```

Marcar como <del>leído</del><ins>leída</ins>

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-¿Estás seguro de que deseas eliminar este mensaje para siempre? Esta acción no se puede deshacer.
+¿Seguro que quieres eliminar esta publicación para siempre? Esta acción no se puede deshacer.
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar <del>este</del><ins>esta</ins> <del>mensaje</del><ins>publicación</ins> para siempre? Esta acción no se puede deshacer.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-¿Estás seguro de que deseas eliminar este mensaje?
+¿Seguro que quieres eliminar esta publicación?
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar <del>este</del><ins>esta</ins> <del>mensaje?</del><ins>publicación?</ins>

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-Alternar el menú desplegable de los controles del post
+Mostrar u ocultar el menú de acciones de la publicación
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de <del>los</del><ins>acciones</ins> <del>controles</del><ins>de</ins> <del>del</del><ins>la</ins> <del>post</del><ins>publicación</ins>

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-No se puede terminar la sesión activa actual. Cerrar sesión en su lugar.
+No puedes finalizar la sesión activa actual. Utiliza la opción de cerrar sesión.
```

No <del>se puede</del><ins>puedes</ins> <del>terminar</del><ins>finalizar</ins> la sesión activa actual. <del>Cerrar</del><ins>Utiliza</ins> <del>sesión</del><ins>la</ins> <del>en</del><ins>opción</ins> <del>su</del><ins>de</ins> <del>lugar.</del><ins>cerrar sesión.</ins>

#### [`core.forum.security.global_logout.help_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.security.global_logout.help_text%22)

> Clears current cookie session, terminates all sessions, revokes developer tokens, and invalidates any email confirmation or password reset emails.

```diff
-Borra la sesión actual de cookies, finaliza todas las sesiones, revoca los tokens de desarrollador e invalida cualquier correo electrónico de confirmación o de restablecimiento de contraseña.
+Elimina las cookies de la sesión actual, finaliza todas las sesiones, revoca los tokens de desarrollador e invalida los correos electrónicos de confirmación o de restablecimiento de contraseña.
```

<del>Borra la</del><ins>Elimina</ins> <del>sesión</del><ins>las</ins> <del>actual</del><ins>cookies</ins> de <del>cookies,</del><ins>la sesión actual,</ins> finaliza todas las sesiones, revoca los tokens de desarrollador e invalida <del>cualquier</del><ins>los</ins> <del>correo</del><ins>correos</ins> <del>electrónico</del><ins>electrónicos</ins> de confirmación o de restablecimiento de contraseña.

#### [`core.forum.security.session_terminated`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.security.session_terminated%22)

> {count, plural, one {Session terminated} other {# Sessions terminated}}.

```diff
-{count, plural, one {Sesión terminada} other {# Sesiones terminadas}}.
+{count, plural, one {Sesión finalizada} other {# sesiones finalizadas}}.
```

{count, plural, one {Sesión <del>terminada}</del><ins>finalizada}</ins> other {# <del>Sesiones</del><ins>sesiones</ins> <del>terminadas}}.</del><ins>finalizadas}}.</ins>

#### [`core.forum.security.session_termination_failed`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.security.session_termination_failed%22)

> An error occurred while terminating your sessions.

```diff
-Ocurrió un error al finalizar sus sesiones.
+Se ha producido un error al finalizar tus sesiones.
```

<del>Ocurrió</del><ins>Se ha producido</ins> un error al finalizar <del>sus</del><ins>tus</ins> sesiones.

#### [`core.forum.security.terminate_all_other_sessions`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.security.terminate_all_other_sessions%22)

> Terminate all other sessions

```diff
-Terminar todas las demás sesiones
+Finalizar todas las demás sesiones
```

<del>Terminar</del><ins>Finalizar</ins> todas las demás sesiones

#### [`core.forum.security.terminate_session`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.security.terminate_session%22)

> Terminate

```diff
-Terminar
+Finalizar
```

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Reciba notificaciones de "{description}" a través de {method}
+Recibir notificaciones de "{description}" a través de {method}
```

<del>Reciba</del><ins>Recibir</ins> notificaciones de "{description}" a través de {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Alguien cambió el título de una discusión que tú creaste
+Alguien ha cambiado el título de una discusión que creaste
```

Alguien <del>cambió</del><ins>ha cambiado</ins> el título de una discusión que<del> tú</del> creaste

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-Permitir que otros vean que estás conectado
+Permitir que otros vean cuándo estás conectado
```

Permitir que otros vean <del>que</del><ins>cuándo</ins> estás conectado

#### [`core.forum.sign_up.log_in_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.sign_up.log_in_text%22)

> Already have an account? &lt;a&gt;Log In&lt;/a&gt;

```diff
-¿Ya tienes una cuenta? <a>¡Conéctate!</a>
+¿Ya tienes una cuenta? <a>¡Inicia sesión!</a>
```

¿Ya tienes una cuenta? <del>&lt;a&gt;¡Conéctate!&lt;/a&gt;</del><ins>&lt;a&gt;¡Inicia sesión!&lt;/a&gt;</ins>

#### [`core.forum.sign_up.welcome_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.sign_up.welcome_text%22)

> Welcome, {username}!

```diff
-¡Bienvenid@, {username}!
+¡Te damos la bienvenida, {username}!
```

<del>¡Bienvenid@,</del><ins>¡Te damos la bienvenida,</ins> {username}!

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-¿Estás seguro de que quieres eliminar este usuario? Las publicaciones del usuario NO serán eliminadas.
+¿Seguro que quieres eliminar este usuario? Sus publicaciones NO se eliminarán.
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que quieres eliminar este usuario? <del>Las</del><ins>Sus</ins> publicaciones<del> del usuario</del> NO <del>serán</del><ins>se</ins> <del>eliminadas.</del><ins>eliminarán.</ins>

#### [`core.forum.user_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.user_controls.toggle_dropdown_accessible_label%22)

> Toggle user controls dropdown menu

```diff
-Activar el menú desplegable de los controles del usuario
+Mostrar u ocultar el menú de acciones del usuario
```

<del>Activar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de<del> los</del> <del>controles</del><ins>acciones</ins> del usuario

#### [`core.forum.user_email_confirmation.resend_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.user_email_confirmation.resend_button%22)

> Resend Confirmation Email

```diff
-Re-enviar correo electrónico de confirmación
+Reenviar correo electrónico de confirmación
```

<del>Re-enviar</del><ins>Reenviar</ins> correo electrónico de confirmación

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
-Tu conexión se ha restablecido.
+Se ha restablecido tu conexión.
```

#### [`core.lib.dropdown.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.dropdown.toggle_dropdown_accessible_label%22)

> Toggle dropdown menu

```diff
-Activar el menú desplegable
+Mostrar u ocultar el menú desplegable
```

<del>Activar</del><ins>Mostrar u ocultar</ins> el menú desplegable

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-¡Ups! Algo salió mal durante una solicitud de origen cruzado. Vuelve a cargar la página e inténtalo de nuevo.
+Se ha producido un error durante una solicitud de origen cruzado. Vuelve a cargar la página e inténtalo de nuevo.
```

<del>¡Ups!</del><ins>Se</ins> <del>Algo</del><ins>ha</ins> <del>salió</del><ins>producido</ins> <del>mal</del><ins>un error</ins> durante una solicitud de origen cruzado. Vuelve a cargar la página e inténtalo de nuevo.

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-¡Caramba! Algo salió mal. Por favor, carga de nuevo la página y vuelve a intentarlo.
+Se ha producido un error. Vuelve a cargar la página e inténtalo de nuevo.
```

<del>¡Caramba! Algo</del><ins>Se</ins> <del>salió</del><ins>ha</ins> <del>mal.</del><ins>producido</ins> <del>Por</del><ins>un</ins> <del>favor,</del><ins>error.</ins> <del>carga</del><ins>Vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo</del><ins>cargar</ins> la página <del>y</del><ins>e</ins> <del>vuelve</del><ins>inténtalo</ins> <del>a</del><ins>de</ins> <del>intentarlo.</del><ins>nuevo.</ins>

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-No se puede activar {extension} hasta que se activen las siguientes extensiones dependientes: {extensions}
+No se puede activar {extension} hasta que se activen las siguientes extensiones de las que depende: {extensions}
```

No se puede activar {extension} hasta que se activen las siguientes extensiones <del>dependientes:</del><ins>de las que depende:</ins> {extensions}

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
-Parece que hay algún problema con tu conexión. Comprueba tu red e inténtalo de nuevo.
+Parece que hay un problema con tu conexión. Comprueba la red y vuelve a intentarlo.
```

Parece que hay <del>algún</del><ins>un</ins> problema con tu conexión. Comprueba <del>tu</del><ins>la</ins> red <del>e</del><ins>y</ins> <del>inténtalo</del><ins>vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo.</del><ins>intentarlo.</ins>

#### [`core.lib.error.not_found_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.not_found_message%22)

> The requested resource was not found.

```diff
-¡Recórcholis! El recurso solicitado no fue encontrado.
+No se ha encontrado el recurso solicitado.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
-Parece que estás sin conexión. Comprueba tu conexión e inténtalo de nuevo.
+Parece que no tienes conexión. Comprueba tu conexión y vuelve a intentarlo.
```

Parece que <del>estás</del><ins>no</ins> <del>sin</del><ins>tienes</ins> conexión. Comprueba tu conexión <del>e</del><ins>y</ins> <del>inténtalo</del><ins>vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo.</del><ins>intentarlo.</ins>

#### [`core.lib.error.payload_too_large_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.payload_too_large_message%22)

> The request payload was too large.

```diff
-La solicitud de carga era demasiado grande.
+El contenido de la solicitud es demasiado grande.
```

<del>La</del><ins>El</ins> <del>solicitud</del><ins>contenido</ins> de <del>carga</del><ins>la</ins> <del>era</del><ins>solicitud es</ins> demasiado grande.

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-¡Nanay de la China! No tienes permiso para hacer eso.
+No tienes permiso para hacer eso.
```

<del>¡Nanay de la China! </del>No tienes permiso para hacer eso.

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-¡Para el carro! Vas tú muy rápido. Por favor, vuelve a intentarlo en unos segundos.
+Vas demasiado rápido. Vuelve a intentarlo dentro de unos segundos.
```

<del>¡Para el carro! </del>Vas<del> tú</del> <del>muy</del><ins>demasiado</ins> rápido.<del> Por favor,</del> <del>vuelve</del><ins>Vuelve</ins> a intentarlo <del>en</del><ins>dentro de</ins> unos segundos.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Lo sentimos, ocurrió un problema al intentar mostrar este contenido. Si eres un usuario, por favor inténtalo más tarde. Si eres administrador, revisa los registros de Flarum para obtener mayor información.
+Lo sentimos, se ha producido un error al mostrar este contenido. Si eres usuario, inténtalo de nuevo más tarde. Si eres administrador, consulta los archivos de registro de Flarum para obtener más información.
```

Lo sentimos, <del>ocurrió</del><ins>se ha producido</ins> un <del>problema</del><ins>error</ins> al<del> intentar</del> mostrar este contenido. Si eres<del> un</del> usuario, <del>por</del><ins>inténtalo</ins> <del>favor</del><ins>de</ins> <del>inténtalo</del><ins>nuevo</ins> más tarde. Si eres administrador, <del>revisa</del><ins>consulta</ins> los <del>registros</del><ins>archivos de registro</ins> de Flarum para obtener <del>mayor</del><ins>más</ins> información.

#### [`core.lib.nav.drawer_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.nav.drawer_button%22)

> Open Navigation Drawer

```diff
-Abrir el cuadro de navegación
+Abrir el panel de navegación
```

Abrir el <del>cuadro</del><ins>panel</ins> de navegación

#### [`core.lib.username.deleted_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.username.deleted_text%22)

> \[deleted\]

```diff
-[borrado]
+[Eliminado]
```

#### [`core.ref.all_discussions`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.all_discussions%22)

> All Discussions

```diff
-Discusiones
+Todas las discusiones
```

#### [`core.ref.confirm_email`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.confirm_email%22)

> Confirm Email

```diff
-Confirmar correo
+Confirmar correo electrónico
```

Confirmar correo<ins> electrónico</ins>

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Te hemos enviado un correo electrónico de confirmación a {email}. Si no aparece pronto, por favor, comprueba la carpeta de correo no deseado (spam).
+Te hemos enviado un correo electrónico de confirmación a {email}. Si no llega pronto, comprueba la carpeta de correo no deseado (spam).
```

Te hemos enviado un correo electrónico de confirmación a {email}. Si no <del>aparece</del><ins>llega</ins> pronto,<del> por favor,</del> comprueba la carpeta de correo no deseado (spam).

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-Añade código HTML para que este sea mostrado en la parte más baja de la página.
+Añade código HTML para que se muestre al final de la página.
```

Añade código HTML para que <del>este sea mostrado en la</del><ins>se</ins> <del>parte</del><ins>muestre</ins> <del>más</del><ins>al</ins> <del>baja</del><ins>final</ins> de la página.

#### [`core.ref.custom_footer_title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.custom_footer_title%22)

> Edit Custom Footer

```diff
-Editar el pié de página personalizado
+Editar el pie de página personalizado
```

Editar el <del>pié</del><ins>pie</ins> de página personalizado

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-Añade código HTML para que este sea mostrado en la parte más alta de la página, sobre la cabecera de Flarum.
+Añade código HTML para que se muestre al principio de la página, por encima de la cabecera de Flarum.
```

Añade código HTML para que <del>este sea mostrado en la</del><ins>se</ins> <del>parte</del><ins>muestre</ins> <del>más</del><ins>al</ins> <del>alta</del><ins>principio</ins> de la página, <del>sobre</del><ins>por encima de</ins> la cabecera de Flarum.

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-¿Estás seguro que deseas continuar? Esta acción no se puede deshacer.
+¿Seguro que quieres continuar? Esta acción no se puede deshacer.
```

<del>¿Estás seguro</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> continuar? Esta acción no se puede deshacer.

#### [`core.ref.icon_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.icon_text%22)

> Enter the name of any &lt;a&gt;FontAwesome&lt;/a&gt; icon class, &lt;em&gt;including&lt;/em&gt; the &lt;code&gt;fas fa-&lt;/code&gt; prefix.

```diff
-Introduce el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
+Introduzca el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
```

<del>Introduce</del><ins>Introduzca</ins> el nombre de alguna clase de &lt;a&gt;FontAwesome&lt;/a&gt;, &lt;em&gt;incluyendo&lt;/em&gt; el prefijo &lt;code&gt;fas fa-&lt;/code&gt;.

#### [`core.ref.log_in`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.log_in%22)

> Log In

```diff
-Acceder
+Iniciar sesión
```

#### [`core.ref.log_out`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.log_out%22)

> Log Out

```diff
-Desconectarse
+Cerrar sesión
```

#### [`core.ref.settings`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.settings%22)

> Settings

```diff
-Configuración
+Ajustes
```

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Regístrate
+Registrarse
```

#### [`core.ref.view`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.view%22)

> View

```diff
-Vista
+Ver
```

#### [`core.views.admin.extensions.name`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.admin.extensions.name%22)

> Extension Name

```diff
-Nombre de la Extensión
+Nombre de la extensión
```

Nombre de la <del>Extensión</del><ins>extensión</ins>

#### [`core.views.admin.extensions.package_name`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.admin.extensions.package_name%22)

> Package Name

```diff
-Nombre del Paquete
+Nombre del paquete
```

Nombre del <del>Paquete</del><ins>paquete</ins>

#### [`core.views.admin.info.caption`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.admin.info.caption%22)

> Application Info

```diff
-Información de la Aplicación
+Información de la aplicación
```

Información de la <del>Aplicación</del><ins>aplicación</ins>

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-Presiona el botón a continuación para confirmar el correo de tu cuenta.
+Pulsa el botón de abajo para confirmar el correo electrónico de tu cuenta.
```

<del>Presiona</del><ins>Pulsa</ins> el botón <del>a</del><ins>de</ins> <del>continuación</del><ins>abajo</ins> para confirmar el correo<ins> electrónico</ins> de tu cuenta.

#### [`core.views.content.javascript_disabled_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.content.javascript_disabled_message%22)

> This site is best viewed in a modern browser with JavaScript enabled.

```diff
-Este sitio web se vé mejor en un navegador moderno con JavaScript activado.
+Este sitio web se ve mejor en un navegador moderno con JavaScript activado.
```

Este sitio web se <del>vé</del><ins>ve</ins> mejor en un navegador moderno con JavaScript activado.

#### [`core.views.content.load_error_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.content.load_error_message%22)

> Something went wrong while trying to load the full version of this site. Try hard-refreshing this page to fix the error.

```diff
-Algo salió mal cuando se intentó cargar la versión completa de este sitio web.
+Se ha producido un error al intentar cargar la versión completa de este sitio web.
```

<del>Algo</del><ins>Se</ins> <del>salió</del><ins>ha</ins> <del>mal</del><ins>producido</ins> <del>cuando</del><ins>un</ins> <del>se</del><ins>error</ins> <del>intentó</del><ins>al intentar</ins> cargar la versión completa de este sitio web.

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-¡Recórcholis! La página solicitada no ha podido ser encontrada.
+No se ha encontrado la página solicitada.
```

<del>¡Recórcholis! La página solicitada</del><ins>No</ins> <del>no</del><ins>se</ins> ha <del>podido</del><ins>encontrado</ins> <del>ser</del><ins>la</ins> <del>encontrada.</del><ins>página solicitada.</ins>

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-¡Nanay de la China! No tienes permiso para acceder a esta página.
+No tienes permiso para acceder a esta página.
```

<del>¡Nanay de la China! </del>No tienes permiso para acceder a esta página.

#### [`core.views.error.unknown`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.unknown%22)

> An error occurred while trying to load this page.

```diff
-¡Caramba! Ha ocurrido un error cuando se cargaba esta página.
+Se ha producido un error al cargar esta página.
```

<del>¡Caramba!</del><ins>Se</ins> <del>Ha</del><ins>ha</ins> <del>ocurrido</del><ins>producido</ins> un error<del> cuando</del> <del>se</del><ins>al</ins> <del>cargaba</del><ins>cargar</ins> esta página.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-¿Seguro que quieres desconectarse de {forum}?
+¿Seguro que quieres cerrar sesión en {forum}?
```

¿Seguro que quieres <del>desconectarse</del><ins>cerrar</ins> <del>de</del><ins>sesión en</ins> {forum}?


### `datlechin-birthdays`

#### [`datlechin-birthdays.admin.settings.date_format_help`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.date_format_help%22)

> Use the &lt;a&gt;dayjs&lt;/a&gt; date format. Leave blank to use the default format.

```diff
-Utiliza el formato de fecha <a>dayjs</a>. Déjalo en blanco para utilizar el formato predeterminado.
+Utiliza el formato <a>dayjs</a>. Deja en blanco para utilizar el formato por defecto.
```

Utiliza el formato <del>de fecha </del>&lt;a&gt;dayjs&lt;/a&gt;. <del>Déjalo</del><ins>Deja</ins> en blanco para utilizar el formato <del>predeterminado.</del><ins>por defecto.</ins>

#### [`datlechin-birthdays.admin.settings.required_help`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.required_help%22)

> You need enable Set on registration option to make this option work

```diff
-Habilita la opción Establecer al registrarse para que esta opción funcione
+Debes habilitar la opción Establecer al registrarse para que esta opción funcione
```

<del>Habilita</del><ins>Debes habilitar</ins> la opción Establecer al registrarse para que esta opción funcione

#### [`datlechin-birthdays.admin.settings.required_label`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.required_label%22)

> Required entering birthdays

```diff
-Es obligatorio introducir la fecha de nacimiento
+Es obligatorio introducir la fecha de cumpleaños
```

Es obligatorio introducir la fecha de <del>nacimiento</del><ins>cumpleaños</ins>

#### [`datlechin-birthdays.admin.settings.set_on_registration_label`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.set_on_registration_label%22)

> Allow setting birthdays on registration

```diff
-Permitir configurar cumpleaños al registrarse
+Establecer la fecha de cumpleaños al registrarse
```

<del>Permitir</del><ins>Establecer</ins> <del>configurar</del><ins>la fecha de</ins> cumpleaños al registrarse

#### [`datlechin-birthdays.api.invalid_age_message`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.api.invalid_age_message%22)

> Your age must be at least {minAge} years old.

```diff
-Tu edad debe ser al menos {minAge} años.
+Tu edad mínima debe ser de {minAge} años.
```

Tu edad <ins>mínima </ins>debe ser<del> al</del> <del>menos</del><ins>de</ins> {minAge} años.

#### [`datlechin-birthdays.forum.change_dob.title`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.forum.change_dob.title%22)

> Edit Date of Birth

```diff
-Editar fecha de nacimiento
+Editar Fecha de Nacimiento
```

Editar <del>fecha</del><ins>Fecha</ins> de <del>nacimiento</del><ins>Nacimiento</ins>

#### [`datlechin-birthdays.forum.settings.change_dob_label`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.forum.settings.change_dob_label%22)

> Change Date of Birth

```diff
-Cambiar fecha de nacimiento
+Cambiar Fecha de Nacimiento
```

Cambiar <del>fecha</del><ins>Fecha</ins> de <del>nacimiento</del><ins>Nacimiento</ins>

#### [`datlechin-birthdays.forum.settings.show_dob_year_help`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.forum.settings.show_dob_year_help%22)

> This will allow people to see your age.

```diff
-Permitir que los demás vean tu edad.
+Esto permitirá ver a los demás tu edad.
```

<del>Permitir</del><ins>Esto</ins> <del>que</del><ins>permitirá ver a</ins> los demás<del> vean</del> tu edad.

#### [`datlechin-birthdays.ref.date_of_birth`](https://weblate.rob006.net/translate/flarum/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.ref.date_of_birth%22)

> Date of Birth

```diff
-Fecha de nacimiento
+Fecha de Nacimiento
```

Fecha de <del>nacimiento</del><ins>Nacimiento</ins>


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum/flarum-akismet/es@formal/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-Clave API
+API Key
```

<del>Clave </del>API<ins> Key</ins>


### `flarum-emoji`

#### [`flarum-emoji.forum.composer.type_to_search_text`](https://weblate.rob006.net/translate/flarum/flarum-emoji/es@formal/?q=context%3A%3D%22flarum-emoji.forum.composer.type_to_search_text%22)

> Type to search for an emoji

```diff
-Teclea para buscar un emoji
+Teclee para buscar un emoji
```

<del>Teclea</del><ins>Teclee</ins> para buscar un emoji


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.auth_config.delete_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_confirmation%22)

> Are you sure you want to delete this authentication method?

```diff
-¿Estás seguro de que deseas eliminar este método de autenticación?
+¿Está seguro de que desea eliminar este método de autenticación?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este método de autenticación?

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
-¿Estás seguro de que deseas eliminar este repositorio? Todas las extensiones instaladas desde este repositorio serán eliminadas.
+¿Está seguro de que desea eliminar este repositorio? Todas las extensiones instaladas desde este repositorio serán eliminadas.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este repositorio? Todas las extensiones instaladas desde este repositorio serán eliminadas.

#### [`flarum-extension-manager.admin.composer.minimum_stability.help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.help%22)

> The type of packages allowed to be installed. Do not change this unless you know what you are doing.

```diff
-El tipo de paquetes que se permite instalar. No cambies esto a menos que sepas lo que estás haciendo.
+El tipo de paquetes que se permite instalar. No cambie esto a menos que sepa lo que está haciendo.
```

El tipo de paquetes que se permite instalar. No <del>cambies</del><ins>cambie</ins> esto a menos que <del>sepas</del><ins>sepa</ins> lo que <del>estás</del><ins>está</ins> haciendo.

#### [`flarum-extension-manager.admin.composer.repositories.help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.help%22)

> Add additional repositories to install packages from. This is an advanced feature, do not add repositories that are not trusted, as they can be used to execute malicious code on your server.
>

```diff
-Añade repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no añadas repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en tu servidor.
+Añada repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no añada repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en su servidor.

```

<del>Añade</del><ins>Añada</ins> repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no <del>añadas</del><ins>añada</ins> repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en <del>tu</del><ins>su</ins> servidor.<br />

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major%22)

> Some installed extensions are not compatible with the newest major release. Please wait until the extensions are updated to be compatible by the authors, or remove them before proceeding.
>

```diff
-Algunas extensiones instaladas no son compatibles con la versión principal más reciente. Espera a que los autores actualicen las extensiones para que sean compatibles o elimínalas antes de continuar.
+Algunas extensiones instaladas no son compatibles con la versión principal más reciente. Espere a que los autores actualicen las extensiones para que sean compatibles o elimínelas antes de continuar.

```

Algunas extensiones instaladas no son compatibles con la versión principal más reciente. <del>Espera</del><ins>Espere</ins> a que los autores actualicen las extensiones para que sean compatibles o <del>elimínalas</del><ins>elimínelas</ins> antes de continuar.<br />

#### [`flarum-extension-manager.admin.extensions.install_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install_help%22)

> Fill in the extension package name to proceed. You can specify a &lt;semantic\_link&gt;semantic version&lt;/semantic\_link&gt; using the format &lt;code&gt;vendor/package-name:version&lt;/code&gt;. Visit {link} to browse extensions.
>

```diff
-Completa el nombre del paquete de extensión para continuar. Puedes especificar una <semantic_link>versión semántica</semantic_link> utilizando el formato <code>vendor/nombre-del-paquete:versión</code>. Visita {link} para explorar extensiones.
+Complete el nombre del paquete de extensión para continuar. Puede especificar una <semantic_link>versión semántica</semantic_link> utilizando el formato <code>vendor/nombre-del-paquete:versión</code>. Visite {link} para explorar extensiones.

```

<del>Completa</del><ins>Complete</ins> el nombre del paquete de extensión para continuar. <del>Puedes</del><ins>Puede</ins> especificar una &lt;semantic\_link&gt;versión semántica&lt;/semantic\_link&gt; utilizando el formato &lt;code&gt;vendor/nombre-del-paquete:versión&lt;/code&gt;. <del>Visita</del><ins>Visite</ins> {link} para explorar extensiones.<br />

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
-Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de tus extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, asegúrate de hacer una copia de seguridad de tu base de datos y archivos antes de proceder.
+Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de sus extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, asegúrese de hacer una copia de seguridad de su base de datos y archivos antes de proceder.

```

Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de <del>tus</del><ins>sus</ins> extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, <del>asegúrate</del><ins>asegúrese</ins> de hacer una copia de seguridad de <del>tu</del><ins>su</ins> base de datos y archivos antes de proceder.<br />

#### [`flarum-extension-manager.admin.major_updater.dry_run_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run_help%22)

> A dry run emulates the update to see if your current setup can safely update, this does not mean that your manual made custom modifications will work in the newer version.

```diff
-Una ejecución de prueba emula la actualización para ver si tu configuración actual puede actualizarse de manera segura, esto no significa que las modificaciones personalizadas que hayas hecho manualmente funcionen en la nueva versión.
+Una ejecución de prueba emula la actualización para ver si su configuración actual puede actualizarse de manera segura, esto no significa que las modificaciones personalizadas que haya hecho manualmente funcionen en la nueva versión.
```

Una ejecución de prueba emula la actualización para ver si <del>tu</del><ins>su</ins> configuración actual puede actualizarse de manera segura, esto no significa que las modificaciones personalizadas que <del>hayas</del><ins>haya</ins> hecho manualmente funcionen en la nueva versión.

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
-Por favor, ten cuidado a quién le das acceso al área de administración, el gestor de extensiones podría ser mal utilizado por personas malintencionadas para instalar paquetes que pueden conducir a brechas de seguridad.
+Por favor, tenga cuidado a quién le da acceso al área de administración, el gestor de extensiones podría ser mal utilizado por personas malintencionadas para instalar paquetes que pueden conducir a brechas de seguridad.
```

Por favor, <del>ten</del><ins>tenga</ins> cuidado a quién le <del>das</del><ins>da</ins> acceso al área de administración, el gestor de extensiones podría ser mal utilizado por personas malintencionadas para instalar paquetes que pueden conducir a brechas de seguridad.

#### [`flarum-extension-manager.admin.settings.debug_mode_warning`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.debug_mode_warning%22)

> You are running in debug mode, the extension manager cannot properly install and update local development packages. Please use the command line interface instead for such purposes.

```diff
-Estás ejecutando en modo de depuración, el gestor de extensiones no puede instalar y actualizar correctamente los paquetes de desarrollo locales. Para ello, utiliza la interfaz de línea de comandos.
+Está ejecutando en modo de depuración, el gestor de extensiones no puede instalar y actualizar correctamente los paquetes de desarrollo locales. Para ello, utilice la interfaz de línea de comandos.
```

<del>Estás</del><ins>Está</ins> ejecutando en modo de depuración, el gestor de extensiones no puede instalar y actualizar correctamente los paquetes de desarrollo locales. Para ello, <del>utiliza</del><ins>utilice</ins> la interfaz de línea de comandos.

#### [`flarum-extension-manager.admin.settings.queue_jobs_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.queue_jobs_help%22)

> You can read about a &lt;a href='{basic\_impl\_link}'&gt;basic queue&lt;/a&gt; implementation or a &lt;a href='{adv\_impl\_link}'&gt;more advanced&lt;/a&gt; one. Make sure the PHP version used for the queue is {php\_version}. Make sure &lt;a href='{folder\_perms\_link}'&gt;folder permissions&lt;/a&gt; are correctly configured.
>

```diff
-Puedes leer sobre una <a href='{basic_impl_link}'>implementación básica</a> de una cola o una <a href='{adv_impl_link}'>más avanzada</a>. Asegúrate de que la versión de PHP utilizada para la cola sea {php_version}. Asegúrate de que los <a href='{folder_perms_link}'>permisos de las carpetas</a> estén configurados correctamente.
+Puede leer sobre una <a href='{basic_impl_link}'>implementación básica</a> de una cola o una <a href='{adv_impl_link}'>más avanzada</a>. Asegúrese de que la versión de PHP utilizada para la cola sea {php_version}. Asegúrese de que los <a href='{folder_perms_link}'>permisos de las carpetas</a> estén configurados correctamente.

```

<del>Puedes</del><ins>Puede</ins> leer sobre una &lt;a href='{basic\_impl\_link}'&gt;implementación básica&lt;/a&gt; de una cola o una &lt;a href='{adv\_impl\_link}'&gt;más avanzada&lt;/a&gt;. <del>Asegúrate</del><ins>Asegúrese</ins> de que la versión de PHP utilizada para la cola sea {php\_version}. <del>Asegúrate</del><ins>Asegúrese</ins> de que los &lt;a href='{folder\_perms\_link}'&gt;permisos de las carpetas&lt;/a&gt; estén configurados correctamente.<br />

#### [`flarum-extension-manager.admin.updater.updater_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_help%22)

> Runs a check for new extension and Flarum updates.

```diff
-Comprueba si hay nuevas extensiones y actualizaciones de Flarum.
+Compruebe si hay nuevas extensiones y actualizaciones de Flarum.
```

<del>Comprueba</del><ins>Compruebe</ins> si hay nuevas extensiones y actualizaciones de Flarum.


### `flarum-likes`

#### [`flarum-likes.forum.notifications.post_liked_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.notifications.post_liked_text%22)

> {username} liked your post

```diff
-{count, plural, one {A {username} le gustó tu publicación.} other {A {username} les gustó tu publicación.}}
+{count, plural, one {A {username} le gustó su publicación.} other {A {username} les gustó su publicación.}}
```

{count, plural, one {A {username} le gustó <del>tu</del><ins>su</ins> publicación.} other {A {username} les gustó <del>tu</del><ins>su</ins> publicación.}}

#### [`flarum-likes.forum.post.liked_by_self_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_self_text%22)

> {users} like this.

```diff
-{users} les gusta esto.
+{count, plural, one {A usted le gusta esto} other {A {users} os gusta esto}}
```

<ins>{count, plural, one {A usted le gusta esto} other {A </ins>{users} <del>les</del><ins>os</ins> gusta <del>esto.</del><ins>esto}}</ins>

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{count, plural, one {A {users} le gusta esto} other {A {users} les gusta esto}}.
+{count, plural, one {{users} le gusta esto} other {{users} les gusta esto}}
```

{count, plural, one <del>{A {users}</del><ins>{{users}</ins> le gusta esto} other<del> {A</del> <del>{users}</del><ins>{{users}</ins> les gusta <del>esto}}.</del><ins>esto}}</ins>

#### [`flarum-likes.forum.settings.notify_post_liked_label`](https://weblate.rob006.net/translate/flarum/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.settings.notify_post_liked_label%22)

> Someone likes one of my posts

```diff
-A alguien le gusta tu publicación
+A alguien le gusta su publicación
```

A alguien le gusta <del>tu</del><ins>su</ins> publicación


### `flarum-lock`

#### [`flarum-lock.admin.permissions.lock_discussions_label`](https://weblate.rob006.net/translate/flarum/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.admin.permissions.lock_discussions_label%22)

> Lock discussions

```diff
-Bloquear discusiones
+Cerrar discusiones
```

<del>Bloquear</del><ins>Cerrar</ins> discusiones

#### [`flarum-lock.forum.discussion_controls.unlock_button`](https://weblate.rob006.net/translate/flarum/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.unlock_button%22)

> Unlock

```diff
-Desbloquear
+Abrir
```

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-{username} cerró la discusión {time}.
+{username} cerró la discusión.
```

{username} cerró la <del>discusión {time}.</del><ins>discusión.</ins>

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} abrió la discusión {time}.
+{username} abrió la discusión.
```

{username} abrió la <del>discusión {time}.</del><ins>discusión.</ins>

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Alguien cerró una discusión que tú creaste
+Alguien cerró una discusión que usted creó
```

Alguien cerró una discusión que <del>tú</del><ins>usted</ins> <del>creaste</del><ins>creó</ins>


### `flarum-mentions`

#### [`flarum-mentions.email.post_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.body%22)

> Hey {recipient\_display\_name}!
>
> {replier\_display\_name} replied to your post (#{post\_number}) in {title}.
>
> {url}
>
> \---
>
> {content}
>

```diff
 Hey {recipient_display_name}!

-{replier_display_name} respondió a tu publicación (#{post_number}) en {title}.
+{replier_display_name} respondió a su publicación (#{post_number}) en {title}.

 {url}

 ---

 {content}

```

Hey {recipient\_display\_name}!<br /><br />{replier\_display\_name} respondió a <del>tu</del><ins>su</ins> publicación (#{post\_number}) en {title}.<br /><br />{url}<br /><br />---<br /><br />{content}<br />

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} respondió a tu publicación en {title}
+{replier_display_name} respondió a su publicación en {title}
```

{replier\_display\_name} respondió a <del>tu</del><ins>su</ins> publicación en {title}

#### [`flarum-mentions.email.user_mentioned.body`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.body%22)

> Hey {recipient\_display\_name}!
>
> {mentioner\_display\_name} mentioned you in a post in {title}.
>
> {url}
>
> \---
>
> {content}
>

```diff
 Hey {recipient_display_name}!

-{mentioner_display_name} te mencionó en una publicación en {title}.
+{mentioner_display_name} le mencionó en una publicación en {title}.

 {url}

 ---

 {content}

```

Hey {recipient\_display\_name}!<br /><br />{mentioner\_display\_name} <del>te</del><ins>le</ins> mencionó en una publicación en {title}.<br /><br />{url}<br /><br />---<br /><br />{content}<br />

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mentioner_display_name} te mencionó en {title}
+{mentioner_display_name} le mencionó en {title}
```

{mentioner\_display\_name} <del>te</del><ins>le</ins> mencionó en {title}

#### [`flarum-mentions.forum.composer.mention_tooltip`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.composer.mention_tooltip%22)

> Mention a user, group or post

```diff
-Mencionar a un usuario, grupo o publicación
+Mencionar a un usuario o publicación
```

Mencionar a un <del>usuario, grupo</del><ins>usuario</ins> o publicación

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
-{count, plural, one {{username} respondió a tu publicación.} other {{username} respondieron a tu publicación.}}
+{count, plural, one {{username} respondió a su publicación.} other {{username} respondieron a su publicación.}}
```

{count, plural, one {{username} respondió a <del>tu</del><ins>su</ins> publicación.} other {{username} respondieron a <del>tu</del><ins>su</ins> publicación.}}

#### [`flarum-mentions.forum.notifications.user_mentioned_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.user_mentioned_text%22)

> {username} mentioned you

```diff
-{username} te mencionó
+{username} le mencionó
```

{username} <del>te</del><ins>le</ins> mencionó

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{users} respondió esto.
+{count, plural, one {{users} respondiste a esto} other {{users} respondísteis a esto}}
```

#### [`flarum-mentions.forum.settings.notify_post_mentioned_label`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_post_mentioned_label%22)

> Someone replies to one of my posts

```diff
-Alguien respondió a tu publicación
+Alguien respondió a su publicación
```

Alguien respondió a <del>tu</del><ins>su</ins> publicación

#### [`flarum-mentions.forum.settings.notify_user_mentioned_label`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_user_mentioned_label%22)

> Someone mentions me in a post

```diff
-Alguien te mencionó en una publicación
+Alguien le mencionó en una publicación
```

Alguien <del>te</del><ins>le</ins> mencionó en una publicación


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum/flarum-sticky/es@formal/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-Discusiones ancladas
+Poner la chincheta a discusiones
```

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum/flarum-sticky/es@formal/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-{username} puso la chincheta a la discusión {time}.
+{username} puso la chincheta a la discusión.
```

{username} puso la chincheta a la <del>discusión {time}.</del><ins>discusión.</ins>

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum/flarum-sticky/es@formal/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} quitó la chincheta a la discusión {time}.
+{username} quitó la chincheta a la discusión.
```

{username} quitó la chincheta a la <del>discusión {time}.</del><ins>discusión.</ins>


### `flarum-subscriptions`

#### [`flarum-subscriptions.email.new_post.body`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.email.new_post.body%22)

> Hey {recipient\_display\_name}!
>
> {poster\_display\_name} made a post in a discussion you're following: {title}.
>
> To view the new activity, check out the following link:
> {url}
>
> \---
>
> {content}
>
> \---
>
> You won't receive any more notifications about this discussion until you're up-to-date.
>

```diff
 Hey {recipient_display_name}!

-{poster_display_name} hizo una publicación en una discusión que estás siguiendo: {title}.
+{poster_display_name} hizo una publicación en una discusión que usted está siguiendo: {title}.

 Para ver la nueva actividad, consulte el siguiente enlace:
 {url}

 ---

 {content}

 ---

-No recibirás más notificaciones sobre esta discusión hasta que estés al tanto de las novedades.
+No recibirá más notificaciones sobre esta discusión hasta que haya más actualizaciones.

```

Hey {recipient\_display\_name}!<br /><br />{poster\_display\_name} hizo una publicación en una discusión que <del>estás</del><ins>usted está</ins> siguiendo: {title}.<br /><br />Para ver la nueva actividad, consulte el siguiente enlace:<br />{url}<br /><br />---<br /><br />{content}<br /><br />---<br /><br />No <del>recibirás</del><ins>recibirá</ins> más notificaciones sobre esta discusión hasta que<del> estés al tanto</del> <del>de</del><ins>haya</ins> <del>las</del><ins>más</ins> <del>novedades.</del><ins>actualizaciones.</ins><br />

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Seguir automáticamente las discusiones en las que tú participes
+Seguir automáticamente las discusiones en las que usted participe
```

Seguir automáticamente las discusiones en las que <del>tú</del><ins>usted</ins> <del>participes</del><ins>participe</ins>

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Alguién publicó en una discusión que tú sigues
+Alguién publicó en una discusión que usted sigue
```

Alguién publicó en una discusión que <del>tú</del><ins>usted</ins> <del>sigues</del><ins>sigue</ins>

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-No ser notificado nunca. Ocultar de la lista de discusión.
+No ser notificado y ocultar esta discusión.
```

No ser notificado <del>nunca. Ocultar de la</del><ins>y</ins> <del>lista</del><ins>ocultar</ins> <del>de</del><ins>esta</ins> discusión.

#### [`flarum-subscriptions.forum.sub_controls.notify_email_tooltip`](https://weblate.rob006.net/translate/flarum/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.notify_email_tooltip%22)

> Get an email when there are new posts

```diff
-Recibir un email cuando haya nuevas publicaciones
+Recibir un e-mail cuando haya nuevas publicaciones
```

Recibir un <del>email</del><ins>e-mail</ins> cuando haya nuevas publicaciones


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-¿Estás seguro de que quieres eliminar esta etiqueta? Las discusiones de la etiqueta NO serán eliminadas.
+¿Está seguro de que quiere eliminar esta etiqueta? Las discusiones de la etiqueta NO serán eliminadas.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar esta etiqueta? Las discusiones de la etiqueta NO serán eliminadas.

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
-Crear Etiqueta
+Crear etiqueta
```

Crear <del>Etiqueta</del><ins>etiqueta</ins>

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Introduce el numero mínimo y máximo de etiquetas principales que pueden ser aplicadas a una discusión.
+Introduzca el numero mínimo y máximo de etiquetas principales que pueden ser aplicadas a una discusión.
```

<del>Introduce</del><ins>Introduzca</ins> el numero mínimo y máximo de etiquetas principales que pueden ser aplicadas a una discusión.

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Introduce el número mínimo y máximo de etiquetas secundarias que pueden ser aplicadas a una discusión.
+Introduzca el número mínimo y máximo de etiquetas secundarias que pueden ser aplicadas a una discusión.
```

<del>Introduce</del><ins>Introduzca</ins> el número mínimo y máximo de etiquetas secundarias que pueden ser aplicadas a una discusión.

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-Elige las etiquetas para su discusión
+Elija las etiquetas para su discusión
```

<del>Elige</del><ins>Elija</ins> las etiquetas para su discusión

#### [`flarum-tags.forum.composer_discussion.choose_tags_link`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.composer_discussion.choose_tags_link%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
-=> flarum-tags.ref.choose_tags
+Elegir etiquetas
```

#### [`flarum-tags.forum.post_stream.added_and_removed_tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_and_removed_tags_text%22)

> {username} added the {tagsAdded} and removed the {tagsRemoved} {time}.

```diff
-{username} puso {tagsAdded} y quitó {tagsRemoved} {time}.
+{username} puso {tagsAdded} y quitó {tagsRemoved}
```

{username} puso {tagsAdded} y quitó {tagsRemoved}<del> {time}.</del>

#### [`flarum-tags.forum.post_stream.added_tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_tags_text%22)

> {username} added the {tagsAdded} {time}.

```diff
-{username} puso {tagsAdded} {time}.
+{username} puso {tagsAdded}
```

{username} puso {tagsAdded}<del> {time}.</del>

#### [`flarum-tags.forum.post_stream.removed_tags_text`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.post_stream.removed_tags_text%22)

> {username} removed the {tagsRemoved} {time}.

```diff
-{username} quitó {tagsRemoved} {time}.
+{username} quitó {tagsRemoved}.
```

{username} quitó <del>{tagsRemoved} {time}.</del><ins>{tagsRemoved}.</ins>


### `flarumite-simple-spoilers`

#### [`flarumite.spoilers-and-accordions.forum.post.accordion.tooltips.closed`](https://weblate.rob006.net/translate/flarum/flarumite-simple-spoilers/es@formal/?q=context%3A%3D%22flarumite.spoilers-and-accordions.forum.post.accordion.tooltips.closed%22)

> Click to reveal

```diff
-Click para revelar
+Haz click aquí para revelar spoiler
```

<del>Click</del><ins>Haz click aquí</ins> para revelar<ins> spoiler</ins>


### `fof-discussion-language`

#### [`fof-discussion-language.admin.settings.native_label`](https://weblate.rob006.net/translate/flarum/fof-discussion-language/es@formal/?q=context%3A%3D%22fof-discussion-language.admin.settings.native_label%22)

> Use native language names

```diff
-Utiliza nombres de lengua materna
+Utilice nombres de lengua materna
```

<del>Utiliza</del><ins>Utilice</ins> nombres de lengua materna


### `fof-links`

#### [`fof-links.admin.edit_link.delete_link_confirmation`](https://weblate.rob006.net/translate/flarum/fof-links/es@formal/?q=context%3A%3D%22fof-links.admin.edit_link.delete_link_confirmation%22)

> Are you sure you want to delete this link?

```diff
-¿Estás seguro de que quieres eliminar este enlace?
+¿Está seguro de que quiere eliminar este enlace?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar este enlace?


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.icon-help`](https://weblate.rob006.net/translate/flarum/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.admin.fields.icon-help%22)

> Shows an icon in front of values entered by the user. For a reference of available icons, check the &lt;a&gt;FontAwesome website&lt;/a&gt;. Use icon names with the "fa-" prefix, like "fas fa-info".
>

```diff
-Muestra un ícono delante de los valores introducidos por el usuario. Para consultar los íconos disponibles, visite el <a>sitio web de FontAwesome</a>. Utilice nombres de íconos con el prefijo "fa-", como "fas fa-info".
+Introduzca el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.

```

<del>Muestra un ícono delante de los valores introducidos por el usuario. Para consultar los íconos disponibles, visite</del><ins>Introduzca</ins> el<del> &lt;a&gt;sitio</del> <del>web</del><ins>nombre</ins> de<del> FontAwesome&lt;/a&gt;.</del> <del>Utilice</del><ins>alguna</ins> <del>nombres</del><ins>clase</ins> de <del>íconos</del><ins>&lt;a&gt;FontAwesome&lt;/a&gt;,</ins> <del>con</del><ins>&lt;em&gt;incluyendo&lt;/em&gt;</ins> el prefijo<del> "fa-", como</del> <del>"fas</del><ins>&lt;code&gt;fas</ins> <del>fa-info".</del><ins>fa-&lt;/code&gt;.</ins><br />

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
-Consulta las <a>reglas de validación de Laravel</a>. Ej: "string|min:5" o "url".
+Consulte las <a>reglas de validación de Laravel</a>. Ej: "string|min:5" o "url".

```

<del>Consulta</del><ins>Consulte</ins> las &lt;a&gt;reglas de validación de Laravel&lt;/a&gt;. Ej: "string\|min:5" o "url".<br />

#### [`fof-masquerade.forum.alerts.profile-completion-required`](https://weblate.rob006.net/translate/flarum/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.forum.alerts.profile-completion-required%22)

> Please complete the necessary profile fields below.
>

```diff
-Por favor completa los campos del perfil de usuario.
+Por favor complete los campos del perfil de usuario.

```

Por favor <del>completa</del><ins>complete</ins> los campos del perfil de usuario.<br />


### `fof-nightmode`

#### [`fof-nightmode.ref.dark`](https://weblate.rob006.net/translate/flarum/fof-nightmode/es@formal/?q=context%3A%3D%22fof-nightmode.ref.dark%22)

> Night Mode

```diff
-Modo Noche
+Modo Nocturno
```

Modo <del>Noche</del><ins>Nocturno</ins>


### `fof-pages`

#### [`fof-pages.admin.edit_page.delete_page_confirmation`](https://weblate.rob006.net/translate/flarum/fof-pages/es@formal/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_confirmation%22)

> Are you sure you want to delete this page?

```diff
-¿Estás seguro de que quieres eliminar esta pagina?
+¿Está seguro de que quiere eliminar esta pagina?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar esta pagina?

#### [`fof-pages.admin.edit_page.set_as_home_page_confirmation`](https://weblate.rob006.net/translate/flarum/fof-pages/es@formal/?q=context%3A%3D%22fof-pages.admin.edit_page.set_as_home_page_confirmation%22)

> Are you sure you want to set this page as your home page?

```diff
-¿Estás seguro de que deseas configurar esta página como su página de inicio?
+¿Está seguro de que desea configurar esta página como su página de inicio?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> configurar esta página como su página de inicio?


### `fof-polls`

#### [`fof-polls.admin.permissions.self_edit`](https://weblate.rob006.net/translate/flarum/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.permissions.self_edit%22)

> Edit created polls (requires post edit permission)

```diff
-Editar encuestas creadas (requiere permiso de edición de post)
+Permitir a los usuarios editar sus propias encuestas
```

#### [`fof-polls.forum.composer_discussion.add_poll`](https://weblate.rob006.net/translate/flarum/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.composer_discussion.add_poll%22)

> =&gt; fof-polls.forum.moderation.add

```diff
-=> fof-polls.forum.moderation.add
+Añadir encuesta
```


### `fof-reactions`

#### [`fof-reactions.forum.disabled-reaction`](https://weblate.rob006.net/translate/flarum/fof-reactions/es@formal/?q=context%3A%3D%22fof-reactions.forum.disabled-reaction%22)

> You can't use this reaction right now, please refresh the page

```diff
-No es posible usar esta reacción ahora mismo, por favor refresca la página
+No es posible ocupar esta reacción ahora, por favor refresca la página
```

No es posible <del>usar</del><ins>ocupar</ins> esta reacción<del> ahora</del> <del>mismo,</del><ins>ahora,</ins> por favor refresca la página


### `fof-socialprofile`

#### [`fof-socialprofile.admin.settings.allow_external_favicons_label`](https://weblate.rob006.net/translate/flarum/fof-socialprofile/es@formal/?q=context%3A%3D%22fof-socialprofile.admin.settings.allow_external_favicons_label%22)

> Allow external website icons (uses external provider's favicon API)

```diff
-Permitir iconos de sitios externos (utiliza la API de favicon de un proveedor externo)
+Permitir iconos de sitios externos
```

Permitir iconos de sitios externos<del> (utiliza la API de favicon de un proveedor externo)</del>

#### [`fof-socialprofile.forum.edit.url`](https://weblate.rob006.net/translate/flarum/fof-socialprofile/es@formal/?q=context%3A%3D%22fof-socialprofile.forum.edit.url%22)

> URL

```diff
-URL
+Dirección web
```


### `fof-upload`

#### [`fof-upload.admin.pane.description`](https://weblate.rob006.net/translate/flarum/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.pane.description%22)

> Set up uploading services and preferences.

```diff
-Configure los servicios y preferencias de subida.
+Configure los servicios y preferencias de carga.
```

Configure los servicios y preferencias de <del>subida.</del><ins>carga.</ins>

#### [`fof-upload.admin.upload_methods.aws-s3`](https://weblate.rob006.net/translate/flarum/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.upload_methods.aws-s3%22)

> S3 or Compatible

```diff
-S3 o compatible
+S3/Compatible
```


### `fof-user-bio`

#### [`fof-user-bio.admin.permission.editOwn`](https://weblate.rob006.net/translate/flarum/fof-user-bio/es@formal/?q=context%3A%3D%22fof-user-bio.admin.permission.editOwn%22)

> Edit own bio

```diff
-Editar tu propia biografía
+Editar su propia biografía
```

Editar <del>tu</del><ins>su</ins> propia biografía

#### [`fof-user-bio.forum.userbioPlaceholder`](https://weblate.rob006.net/translate/flarum/fof-user-bio/es@formal/?q=context%3A%3D%22fof-user-bio.forum.userbioPlaceholder%22)

> Write something about yourself

```diff
-Escribe algo sobre ti
+Escriba algo sobre usted
```

<del>Escribe</del><ins>Escriba</ins> algo sobre <del>ti</del><ins>usted</ins>


### `fof-webhooks`

#### [`fof-webhooks.admin.settings.item.tag_any_label`](https://weblate.rob006.net/translate/flarum/fof-webhooks/es@formal/?q=context%3A%3D%22fof-webhooks.admin.settings.item.tag_any_label%22)

> Any Tag

```diff
-Cualquier etiqueta
+Cualquiera
```


### `katosdev-signature`

#### [`signature.admin.settings.maximum_char_limit.description`](https://weblate.rob006.net/translate/flarum/katosdev-signature/es@formal/?q=context%3A%3D%22signature.admin.settings.maximum_char_limit.description%22)

> Maximum character limit of signature.

```diff
-Cantidad máxima de caracteres de la firma (solo caracteres, sin considerar etiquetas HTML).
+Cantidad máxima de caracteres de la firma (solo caracteres, sin considerar etiquetas HTML)
```

Cantidad máxima de caracteres de la firma (solo caracteres, sin considerar etiquetas <del>HTML).</del><ins>HTML)</ins>


### `matteocontrini-imgur-upload`

#### [`imgur-upload.admin.settings.hide-markdown-image`](https://weblate.rob006.net/translate/flarum/matteocontrini-imgur-upload/es@formal/?q=context%3A%3D%22imgur-upload.admin.settings.hide-markdown-image%22)

> Hide Markdown image button

```diff
-Ocultar botón de imágenes que viene por defecto
+Ocultar botón de imagen Markdown
```

Ocultar botón de <del>imágenes que viene por</del><ins>imagen</ins> <del>defecto</del><ins>Markdown</ins>


### `michaelbelgium-discussion-views`

#### [`michaelbelgium-discussion-views.forum.discussion_controls.resetviews_button`](https://weblate.rob006.net/translate/flarum/michaelbelgium-discussion-views/es@formal/?q=context%3A%3D%22michaelbelgium-discussion-views.forum.discussion_controls.resetviews_button%22)

> Reset views

```diff
-Restablecer visitas
+Restablecer vistas
```

Restablecer <del>visitas</del><ins>vistas</ins>

<!-- {% endraw %} -->
