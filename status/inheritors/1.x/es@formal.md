# Spanish (formal) inherited translations differences

Translations for Spanish (formal) (`es@formal`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **155** are translated differently and **205** are
translated only in `es@formal`. Altogether they cover **32** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [144](#core) | [34](#core-missing) |
| `datlechin-bbcode-hide-content` | 0 | [5](#datlechin-bbcode-hide-content-missing) |
| `datlechin-copy-links` | 0 | [2](#datlechin-copy-links-missing) |
| `datlechin-discussion-overview` | 0 | [6](#datlechin-discussion-overview-missing) |
| `datlechin-posted-on` | 0 | [1](#datlechin-posted-on-missing) |
| `datlechin-scroll-buttons` | 0 | [4](#datlechin-scroll-buttons-missing) |
| `datlechin-signup-button` | 0 | [1](#datlechin-signup-button-missing) |
| `datlechin-silent-edit` | 0 | [2](#datlechin-silent-edit-missing) |
| `ekumanov-inline-audio` | 0 | [5](#ekumanov-inline-audio-missing) |
| `ekumanov-new-posts-notice` | 0 | [2](#ekumanov-new-posts-notice-missing) |
| `flarum-mentions` | [1](#flarum-mentions) | 0 |
| `fof-analytics` | [1](#fof-analytics) | 0 |
| `fof-best-answer` | [1](#fof-best-answer) | 0 |
| `fof-masquerade` | 0 | [4](#fof-masquerade-missing) |
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

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `es@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.appearance.colors_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.colors_text%22)

> Choose two colors to theme your forum with. The first will be used as a highlight color, while the second will be used to style background elements.

```diff
-Elija dos colores para decorar su foro. El primero será usado para resaltar y el segundo será utilizado para decorar elementos de fondo.
+Elige dos colores para tu foro. El primero se utilizará para resaltar elementos y el segundo, para los elementos de fondo.
```

<del>Elija</del><ins>Elige</ins> dos colores para<del> decorar</del> <del>su</del><ins>tu</ins> foro. El primero <del>será</del><ins>se</ins> <del>usado</del><ins>utilizará</ins> para resaltar<ins> elementos</ins> y el<del> segundo será</del> <del>utilizado</del><ins>segundo,</ins> para <del>decorar</del><ins>los</ins> elementos de fondo.

#### [`core.admin.appearance.custom_footer_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_footer_heading%22)

> Custom Footer

```diff
-Pié de página personalizado
+Pie de página personalizado
```

<del>Pié</del><ins>Pie</ins> de página personalizado

#### [`core.admin.appearance.custom_styles_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_styles_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's default styles.

```diff
-Personalice la apariencia de su foro añadiendo su propio código LESS/CSS, que se aplicará sobre los estilos por defecto de Flarum.
+Personaliza la apariencia de tu foro añadiendo tu propio código LESS/CSS, que se aplicará sobre los estilos predeterminados de Flarum.
```

<del>Personalice</del><ins>Personaliza</ins> la apariencia de <del>su</del><ins>tu</ins> foro añadiendo <del>su</del><ins>tu</ins> propio código LESS/CSS, que se aplicará sobre los estilos<del> por</del> <del>defecto</del><ins>predeterminados</ins> de Flarum.

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Personalice los colores, logotipos y otras variables de su foro.
+Personaliza los colores, logotipos y otras opciones de tu foro.
```

<del>Personalice</del><ins>Personaliza</ins> los colores, logotipos y otras <del>variables</del><ins>opciones</ins> de <del>su</del><ins>tu</ins> foro.

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Por favor, introduzca un código hexadecimal de color.
+Introduce un código de color hexadecimal.
```

<del>Por favor, introduzca</del><ins>Introduce</ins> un código<del> hexadecimal</del> de <del>color.</del><ins>color hexadecimal.</ins>

#### [`core.admin.appearance.favicon_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_heading%22)

> Favicon

```diff
-Icono de Favoritos o <em>Favicon</em>
+<em>Favicon</em>
```

<del>Icono de Favoritos o </del>&lt;em&gt;Favicon&lt;/em&gt;

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Suba una imagen para que sea mostrada como icono de acceso directo al foro.
+Sube una imagen para que se muestre como icono de acceso directo al foro.
```

<del>Suba</del><ins>Sube</ins> una imagen para que <del>sea</del><ins>se</ins> <del>mostrada</del><ins>muestre</ins> como icono de acceso directo al foro.

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Suba una imagen para que sea mostrada en lugar del título del foro.
+Sube una imagen para que se muestre en lugar del título del foro.
```

<del>Suba</del><ins>Sube</ins> una imagen para que <del>sea</del><ins>se</ins> <del>mostrada</del><ins>muestre</ins> en lugar del título del foro.

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Configure el título, el idioma y otras configuraciones básicas de su foro.
+Configura el título, el idioma y los demás ajustes básicos de tu foro.
```

<del>Configure</del><ins>Configura</ins> el título, el idioma y <del>otras</del><ins>los</ins> <del>configuraciones</del><ins>demás</ins> <del>básicas</del><ins>ajustes básicos</ins> de <del>su</del><ins>tu</ins> foro.

#### [`core.admin.basics.display_name_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_heading%22)

> User Display Name

```diff
-Nombre de usuario
+Nombre público del usuario
```

Nombre <del>de</del><ins>público del</ins> usuario

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Seleccione el controlador que debe utilizarse para mostrar los nombres. Por defecto, se muestra el nombre de usuario.
+Selecciona el controlador que se utilizará para los nombres públicos de los usuarios. Por defecto, se muestra el nombre de usuario.
```

<del>Seleccione</del><ins>Selecciona</ins> el controlador que <del>debe</del><ins>se</ins> <del>utilizarse</del><ins>utilizará</ins> para <del>mostrar</del><ins>los nombres públicos de</ins> los <del>nombres.</del><ins>usuarios.</ins> Por defecto, se muestra el nombre de usuario.

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Elija cuál es la portada que los usuarios verán al llegar al foro.
+Elige la primera página que verán los usuarios al visitar tu foro.
```

<del>Elija cuál es</del><ins>Elige</ins> la <del>portada</del><ins>primera página</ins> que<ins> verán</ins> los usuarios<del> verán</del> al <del>llegar</del><ins>visitar</ins> <del>al</del><ins>tu</ins> foro.

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-Driver de Slug: {model}
+Controlador de slug: {model}
```

<del>Driver</del><ins>Controlador</ins> de <del>Slug:</del><ins>slug:</ins> {model}

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Seleccione el driver que se utilizará para el slugging de este modelo.
+Selecciona el controlador que se utilizará para generar los slugs de este modelo.
```

<del>Seleccione</del><ins>Selecciona</ins> el <del>driver</del><ins>controlador</ins> que se utilizará para <del>el</del><ins>generar</ins> <del>slugging</del><ins>los slugs</ins> de este modelo.

#### [`core.admin.basics.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.title%22)

> Basics

```diff
-Lo esencial
+Ajustes básicos
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Introduzca el texto que se mostrará en la lista de discusiones. Utilícelo para dar la bienvenida a los invitados en su foro.
+Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los visitantes de tu foro.
```

<del>Introduzca</del><ins>Introduce</ins> el texto que se mostrará en la lista de discusiones. <del>Utilícelo</del><ins>Utilízalo</ins> para dar la bienvenida a los <del>invitados</del><ins>visitantes</ins> <del>en</del><ins>de</ins> <del>su</del><ins>tu</ins> foro.

#### [`core.admin.dashboard.clear_cache_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.clear_cache_button%22)

> Clear Cache

```diff
-Limpiar cache
+Vaciar caché
```

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-Su foro de un vistazo.
+Tu foro de un vistazo.
```

<del>Su</del><ins>Tu</ins> foro de un vistazo.

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-No se pudo escribir en el sistema de archivos. Verifica los permisos de su sistema de archivos y vuelve a intentarlo. O intenta ejecutar desde la línea de comandos.
+No se ha podido escribir en el sistema de archivos. Comprueba los permisos del sistema de archivos y vuelve a intentarlo. También puedes probar desde la línea de comandos.
```

No se <del>pudo</del><ins>ha podido</ins> escribir en el sistema de archivos. <del>Verifica</del><ins>Comprueba</ins> los permisos<del> de</del> <del>su</del><ins>del</ins> sistema de archivos y vuelve a intentarlo. <del>O</del><ins>También</ins> <del>intenta</del><ins>puedes</ins> <del>ejecutar</del><ins>probar</ins> desde la línea de comandos.

#### [`core.admin.dashboard.status.headers.queue-driver`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.headers.queue-driver%22)

> Queue Driver

```diff
-Driver de cola
+Controlador de cola
```

<del>Driver</del><ins>Controlador</ins> de cola

#### [`core.admin.dashboard.status.headers.scheduler-status`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.headers.scheduler-status%22)

> Scheduler

```diff
-Scheduler
+Programador de tareas
```

#### [`core.admin.dashboard.status.headers.session-driver`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.headers.session-driver%22)

> Session Driver

```diff
-Driver de sesión
+Controlador de sesión
```

<del>Driver</del><ins>Controlador</ins> de sesión

#### [`core.admin.dashboard.status.scheduler.never-run`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.never-run%22)

> Never run

```diff
-Nunca se ejecuta
+Nunca se ha ejecutado
```

Nunca se <del>ejecuta</del><ins>ha ejecutado</ins>

#### [`core.admin.dashboard.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.title%22)

> Dashboard

```diff
-Tablero
+Panel de información
```

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

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

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Personalice la apariencia de su foro añadiendo su propio código LESS/CSS que será aplicado sobre los <a>estilos por defecto</a> de Flarum.
+Personaliza la apariencia de tu foro añadiendo tu propio código LESS/CSS, que se aplicará sobre los <a>estilos predeterminados</a> de Flarum.
```

<del>Personalice</del><ins>Personaliza</ins> la apariencia de <del>su</del><ins>tu</ins> foro añadiendo <del>su</del><ins>tu</ins> propio código <del>LESS/CSS</del><ins>LESS/CSS,</ins> que <del>será</del><ins>se</ins> <del>aplicado</del><ins>aplicará</ins> sobre los &lt;a&gt;estilos<del> por</del> <del>defecto&lt;/a&gt;</del><ins>predeterminados&lt;/a&gt;</ins> de Flarum.

#### [`core.admin.edit_group.delete_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.edit_group.delete_button%22)

> Delete Group

```diff
-Borrar grupo
+Eliminar grupo
```

<del>Borrar</del><ins>Eliminar</ins> grupo

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-¿Está seguro de que desea eliminar este grupo? Los usuarios que pertenecen al grupo NO serán eliminados.
+¿Seguro que quieres eliminar este grupo? Los usuarios que pertenecen al grupo NO se eliminarán.
```

<del>¿Está seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> eliminar este grupo? Los usuarios que pertenecen al grupo NO <del>serán</del><ins>se</ins> <del>eliminados.</del><ins>eliminarán.</ins>

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Configure el controlador, la configuración y las direcciones que usará su foro para enviar correo electrónico.
+Configura el controlador, los ajustes y las direcciones que utilizará tu foro para enviar correos electrónicos.
```

<del>Configure</del><ins>Configura</ins> el controlador, <del>la</del><ins>los</ins> <del>configuración</del><ins>ajustes</ins> y las direcciones que <del>usará</del><ins>utilizará</ins> <del>su</del><ins>tu</ins> foro para enviar <del>correo</del><ins>correos</ins> <del>electrónico.</del><ins>electrónicos.</ins>

#### [`core.admin.email.driver_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.driver_label%22)

> Driver

```diff
-Driver
+Controlador
```

#### [`core.admin.email.mailgun_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.mailgun_heading%22)

> Mailgun Settings

```diff
-Configuración Mailgun
+Ajustes de Mailgun
```

<del>Configuración</del><ins>Ajustes de</ins> Mailgun

#### [`core.admin.email.not_sending_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.not_sending_message%22)

> Flarum currently does not send emails. This can be due to the selected driver, or errors in its configuration.

```diff
-Actualmente Flarum no envía correos electrónicos. Esto puede deberse al controlador seleccionado, o errores en su configuración.
+Actualmente, Flarum no envía correos electrónicos. Esto puede deberse al controlador seleccionado o a errores en sus ajustes.
```

<del>Actualmente</del><ins>Actualmente,</ins> Flarum no envía correos electrónicos. Esto puede deberse al controlador <del>seleccionado,</del><ins>seleccionado</ins> o<ins> a</ins> errores en <del>su</del><ins>sus</ins> <del>configuración.</del><ins>ajustes.</ins>

#### [`core.admin.email.smtp_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.smtp_heading%22)

> SMTP Settings

```diff
-Configuración SMTP
+Ajustes de SMTP
```

<del>Configuración</del><ins>Ajustes de</ins> SMTP

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-Al purgar, se eliminarán todas las entradas en la base de datos y datos asociados a la extensión. Este proceso no desinstalará la extensión, pues esto debe completarse mediante Composer ¿Realmente deseas continuar?
+Al purgar, se eliminarán todas las entradas de la base de datos y los datos asociados a la extensión. Este proceso no desinstala la extensión; debes hacerlo mediante Composer. ¿Seguro que quieres continuar?
```

Al purgar, se eliminarán todas las entradas <del>en</del><ins>de</ins> la base de datos y<ins> los</ins> datos asociados a la extensión. Este proceso no <del>desinstalará</del><ins>desinstala</ins> la<del> extensión, pues</del> <del>esto</del><ins>extensión;</ins> <del>debe</del><ins>debes</ins> <del>completarse</del><ins>hacerlo</ins> mediante <del>Composer</del><ins>Composer.</ins> <del>¿Realmente</del><ins>¿Seguro</ins> <del>deseas</del><ins>que quieres</ins> continuar?

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Habilite la extensión para ver y cambiar la configuración.
+Activa la extensión para ver y modificar sus ajustes.
```

<del>Habilite</del><ins>Activa</ins> la extensión para ver y <del>cambiar</del><ins>modificar</ins> <del>la</del><ins>sus</ins> <del>configuración.</del><ins>ajustes.</ins>

#### [`core.admin.extension.info_links.discuss`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.info_links.discuss%22)

> Discuss

```diff
-Discutir
+Debatir
```

#### [`core.admin.extension.info_links.source`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.info_links.source%22)

> Source

```diff
-Fuente
+Código fuente
```

#### [`core.admin.extension.no_settings`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.no_settings%22)

> This extension has no settings.

```diff
-Esta extensión no tiene configuración.
+Esta extensión no tiene ajustes.
```

Esta extensión no tiene <del>configuración.</del><ins>ajustes.</ins>

#### [`core.admin.extension.open_modal`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.open_modal%22)

> Open Settings

```diff
-Configuración abierta
+Abrir ajustes
```

#### [`core.admin.extension.readme.button_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.readme.button_label%22)

> README

```diff
-LÉEME
+README
```

#### [`core.admin.extension.readme.no_readme`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.readme.no_readme%22)

> This extension does not appear to have a README file

```diff
-Esta extensión no incluye un archivo LÉEME
+Esta extensión no incluye un archivo README
```

Esta extensión no incluye un archivo <del>LÉEME</del><ins>README</ins>

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Por favor, espere...
+Espera, por favor...
```

#### [`core.admin.nav.basics_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.basics_button%22)

> =&gt; core.admin.basics.title

```diff
-Básicos
+Ajustes básicos
```

#### [`core.admin.nav.categories.core`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.core%22)

> Core Configuration

```diff
-Configuración básica
+Ajustes básicos
```

#### [`core.admin.nav.categories.feature`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.feature%22)

> Features

```diff
-Características
+Funciones
```

#### [`core.admin.nav.categories.other`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.categories.other%22)

> Other Extensions

```diff
-Otras Extensiones
+Otras extensiones
```

Otras <del>Extensiones</del><ins>extensiones</ins>

#### [`core.admin.nav.email_title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.email_title%22)

> =&gt; core.admin.email.description

```diff
-Configure el driver, la configuración y las direcciones que usará su foro para enviar correo electrónico.
+=> core.admin.email.description
```

#### [`core.admin.nav.permissions_title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.nav.permissions_title%22)

> =&gt; core.admin.permissions.description

```diff
-Configure quién puede ver y hacer qué.
+=> core.admin.permissions.description
```

#### [`core.admin.permissions.delete_posts_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.delete_posts_label%22)

> Delete posts

```diff
-Borrar publicaciones
+Eliminar publicaciones
```

<del>Borrar</del><ins>Eliminar</ins> publicaciones

#### [`core.admin.permissions.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.description%22)

> Configure who can see and do what.

```diff
-Configurar quién puede ver y hacer qué.
+Configura qué puede ver y hacer cada usuario.
```

<del>Configurar</del><ins>Configura</ins> <del>quién</del><ins>qué</ins> puede ver y hacer <del>qué.</del><ins>cada usuario.</ins>

#### [`core.admin.permissions.moderate_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.moderate_heading%22)

> Moderate

```diff
-Moderado
+Moderar
```

#### [`core.admin.permissions.rename_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.rename_discussions_label%22)

> Rename discussions

```diff
-Cambiar el título a discusiones
+Cambiar el título de las discusiones
```

Cambiar el título <del>a</del><ins>de las</ins> discusiones

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Ver a qué hora fue la última conexión de un usuario
+Ver la última conexión de un usuario
```

Ver <del>a qué hora fue </del>la última conexión de un usuario

#### [`core.admin.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.upload_image.upload_button%22)

> Choose an Image...

```diff
-Elija una imagen...
+Elige una imagen...
```

<del>Elija</del><ins>Elige</ins> una imagen...

#### [`core.admin.users.create_user_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.users.create_user_button%22)

> New User

```diff
-Nuevo Usuario
+Nuevo usuario
```

Nuevo <del>Usuario</del><ins>usuario</ins>

#### [`core.admin.users.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.users.description%22)

> A paginated list of all users on your forum.

```diff
-Una lista paginada de todos los usuarios de su foro.
+Lista paginada de todos los usuarios de tu foro.
```

<del>Una lista</del><ins>Lista</ins> paginada de todos los usuarios de <del>su</del><ins>tu</ins> foro.

#### [`core.admin.users.grid.columns.join_time.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.users.grid.columns.join_time.title%22)

> Joined

```diff
-Se unió
+Fecha de registro
```

#### [`core.admin.users.grid.invalid_column_content`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.users.grid.invalid_column_content%22)

> Invalid

```diff
-Inválido
+No válido
```

#### [`core.api.invalid_filter_type.must_not_be_multidimensional_array_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.api.invalid_filter_type.must_not_be_multidimensional_array_message%22)

> The {filter} filter must not be a multidimensional array.

```diff
-El filtro {filter} no debe ser una array multidimensional.
+El filtro {filter} no debe ser un array multidimensional.
```

El filtro {filter} no debe ser <del>una</del><ins>un</ins> array multidimensional.

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-Active su cuenta de usuario
+Activa tu cuenta de usuario
```

<del>Active</del><ins>Activa</ins> <del>su</del><ins>tu</ins> cuenta de usuario

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-Confirme su correo electrónico
+Confirma tu correo electrónico
```

<del>Confirme</del><ins>Confirma</ins> <del>su</del><ins>tu</ins> correo electrónico

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Haga click en el botón de abajo y recibirá por correo electrónico un enlace para restablecer su contraseña.
+Pulsa el botón de abajo para recibir por correo electrónico un enlace para restablecer tu contraseña.
```

<del>Haga click en</del><ins>Pulsa</ins> el botón de abajo <del>y</del><ins>para</ins> <del>recibirá</del><ins>recibir</ins> por correo electrónico un enlace para restablecer <del>su</del><ins>tu</ins> contraseña.

#### [`core.forum.composer.preview_tooltip`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer.preview_tooltip%22)

> Preview

```diff
-Vista preliminar
+Vista previa
```

Vista <del>preliminar</del><ins>previa</ins>

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Escriba una publicación...
+Escribe una publicación...
```

<del>Escriba</del><ins>Escribe</ins> una publicación...

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Aún no ha publicado su discusión. ¿Está seguro de que desea descartarla?
+Aún no has publicado tu discusión. ¿Seguro que quieres descartarla?
```

Aún no <del>ha</del><ins>has</ins> publicado <del>su</del><ins>tu</ins> discusión.<del> ¿Está seguro</del> <del>de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> descartarla?

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Aún no ha publicado sus cambios. ¿Está seguro de que desea descartarlos?
+Aún no has publicado tus cambios. ¿Seguro que quieres descartarlos?
```

Aún no <del>ha</del><ins>has</ins> publicado <del>sus</del><ins>tus</ins> cambios.<del> ¿Está seguro</del> <del>de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> descartarlos?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Se realizó su edición.
+Se han guardado tus cambios.
```

Se <del>realizó</del><ins>han</ins> <del>su</del><ins>guardado</ins> <del>edición.</del><ins>tus cambios.</ins>

#### [`core.forum.composer_edit.post_link`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.post_link%22)

> Post #{number} in {discussion}

```diff
-Publicación n.º {number} en '{discussion}'
+Publicación #{number} en {discussion}
```

Publicación <del>n.º {number}</del><ins>#{number}</ins> en <del>'{discussion}'</del><ins>{discussion}</ins>

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Aún no ha publicado su respuesta. ¿Está seguro de que desea descartarla?
+Aún no has publicado tu respuesta. ¿Seguro que quieres descartarla?
```

Aún no <del>ha</del><ins>has</ins> publicado <del>su</del><ins>tu</ins> respuesta.<del> ¿Está seguro</del> <del>de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> descartarla?

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Su respuesta fue publicada.
+Tu respuesta se ha publicado.
```

<del>Su</del><ins>Tu</ins> respuesta <del>fue</del><ins>se</ins> <del>publicada.</del><ins>ha publicado.</ins>

#### [`core.forum.discussion_controls.cannot_reply_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_button%22)

> Can't Reply

```diff
-No puede responder
+No puedes responder
```

No <del>puede</del><ins>puedes</ins> responder

#### [`core.forum.discussion_controls.cannot_reply_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_text%22)

> You don't have permission to reply to this discussion.

```diff
-Usted no tiene permiso para responder en esta discusión.
+No tienes permiso para responder en esta discusión.
```

<del>Usted no</del><ins>No</ins> <del>tiene</del><ins>tienes</ins> permiso para responder en esta discusión.

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-¿Está seguro de que desea eliminar esta discusión?
+¿Seguro que quieres eliminar esta discusión?
```

<del>¿Está seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> eliminar esta discusión?

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-Alternar el menú desplegable de acciones de discusión
+Mostrar u ocultar el menú de acciones de la discusión
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de acciones de<ins> la</ins> discusión

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# respuesta sin leer} other {# respuestas sin leer}}. Marcar {count, plural, one {respuesta} other {respuestas}} como leída(s).
+{count, plural, one {# respuesta sin leer} other {# respuestas sin leer}}. Marcar {count, plural, one {la respuesta como leída} other {las respuestas como leídas}}.
```

{count, plural, one {# respuesta sin leer} other {# respuestas sin leer}}. Marcar {count, plural, one <del>{respuesta}</del><ins>{la respuesta como leída}</ins> other <del>{respuestas}}</del><ins>{las respuestas</ins> como <del>leída(s).</del><ins>leídas}}.</ins>

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Le hemos enviado un correo electrónico que contiene un enlace para restablecer su contraseña. Si no aparece pronto, por favor, compruebe la carpeta de correo no deseado (spam).
+Te hemos enviado un correo electrónico con un enlace para restablecer tu contraseña. Si no llega pronto, comprueba la carpeta de correo no deseado (spam).
```

<del>Le</del><ins>Te</ins> hemos enviado un correo electrónico<del> que</del> <del>contiene</del><ins>con</ins> un enlace para restablecer <del>su</del><ins>tu</ins> contraseña. Si no <del>aparece</del><ins>llega</ins> pronto,<del> por favor,</del> <del>compruebe</del><ins>comprueba</ins> la carpeta de correo no deseado (spam).

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Introduzca su correo electrónico y le enviaremos un enlace para restablecer su contraseña.
+Introduce tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
```

<del>Introduzca</del><ins>Introduce</ins> <del>su</del><ins>tu</ins> correo electrónico y <del>le</del><ins>te</ins> enviaremos un enlace para restablecer <del>su</del><ins>tu</ins> contraseña.

#### [`core.forum.forgot_password.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.title%22)

> Forgot Password

```diff
-¿Olvidó su contraseña?
+Contraseña olvidada
```

#### [`core.forum.header.locale_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.header.locale_dropdown_accessible_label%22)

> Change forum locale

```diff
-Cambiar la configuración regional del foro
+Cambiar el idioma del foro
```

Cambiar <del>la configuración</del><ins>el</ins> <del>regional</del><ins>idioma</ins> del foro

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-Alternar el menú desplegable de opciones de sesión
+Mostrar u ocultar el menú de opciones de sesión
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de opciones de sesión

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-No puede crear una discusión
+No puedes crear una discusión
```

No <del>puede</del><ins>puedes</ins> crear una discusión

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-¿Está seguro de que desea marcar todas las discusiones como leídas?
+¿Seguro que quieres marcar todas las discusiones como leídas?
```

<del>¿Está seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> marcar todas las discusiones como leídas?

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-Alternar el menú desplegable de navegación
+Mostrar u ocultar el menú de navegación
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de navegación

#### [`core.forum.log_in.forgot_password_link`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.log_in.forgot_password_link%22)

> Forgot password?

```diff
-¿Olvidó su contraseña?
+¿Has olvidado tu contraseña?
```

<del>¿Olvidó</del><ins>¿Has</ins> <del>su</del><ins>olvidado tu</ins> contraseña?

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-¿Aún no tiene una cuenta? <a>¡Regístrese!</a>
+¿Aún no tienes una cuenta? <a>¡Regístrate!</a>
```

¿Aún no <del>tiene</del><ins>tienes</ins> una cuenta? <del>&lt;a&gt;¡Regístrese!&lt;/a&gt;</del><ins>&lt;a&gt;¡Regístrate!&lt;/a&gt;</ins>

#### [`core.forum.notifications.delete_all_tooltip`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.notifications.delete_all_tooltip%22)

> Delete all notifications

```diff
-Eliminar notificaciones
+Eliminar todas las notificaciones
```

Eliminar <ins>todas las </ins>notificaciones

#### [`core.forum.notifications.mark_as_read_tooltip`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.notifications.mark_as_read_tooltip%22)

> Mark as Read

```diff
-Marcar como leído
+Marcar como leída
```

Marcar como <del>leído</del><ins>leída</ins>

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-¿Está seguro de que desea eliminar este mensaje para siempre? Esta acción no se puede deshacer.
+¿Seguro que quieres eliminar esta publicación para siempre? Esta acción no se puede deshacer.
```

<del>¿Está seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> eliminar <del>este</del><ins>esta</ins> <del>mensaje</del><ins>publicación</ins> para siempre? Esta acción no se puede deshacer.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-¿Está seguro de que desea eliminar este mensaje?
+¿Seguro que quieres eliminar esta publicación?
```

<del>¿Está seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> eliminar <del>este</del><ins>esta</ins> <del>mensaje?</del><ins>publicación?</ins>

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-Alternar el menú desplegable de los controles del post
+Mostrar u ocultar el menú de acciones de la publicación
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de <del>los</del><ins>acciones</ins> <del>controles</del><ins>de</ins> <del>del</del><ins>la</ins> <del>post</del><ins>publicación</ins>

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} cambió el título a {new}.
+{username} cambió el título a {new} {time}.
```

{username} cambió el título a <del>{new}.</del><ins>{new} {time}.</ins>

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-No se puede terminar la sesión activa actual. Cerrar sesión en su lugar.
+No puedes finalizar la sesión activa actual. Utiliza la opción de cerrar sesión.
```

No <del>se puede</del><ins>puedes</ins> <del>terminar</del><ins>finalizar</ins> la sesión activa actual. <del>Cerrar</del><ins>Utiliza</ins> <del>sesión</del><ins>la</ins> <del>en</del><ins>opción</ins> <del>su</del><ins>de</ins> <del>lugar.</del><ins>cerrar sesión.</ins>

#### [`core.forum.security.global_logout.help_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.security.global_logout.help_text%22)

> Clears current cookie session, terminates all sessions, revokes developer tokens, and invalidates any email confirmation or password reset emails.

```diff
-Borra la sesión actual de cookies, finaliza todas las sesiones, revoca los tokens de desarrollador e invalida cualquier correo electrónico de confirmación o de restablecimiento de contraseña.
+Elimina las cookies de la sesión actual, finaliza todas las sesiones, revoca los tokens de desarrollador e invalida los correos electrónicos de confirmación o de restablecimiento de contraseña.
```

<del>Borra la</del><ins>Elimina</ins> <del>sesión</del><ins>las</ins> <del>actual</del><ins>cookies</ins> de <del>cookies,</del><ins>la sesión actual,</ins> finaliza todas las sesiones, revoca los tokens de desarrollador e invalida <del>cualquier</del><ins>los</ins> <del>correo</del><ins>correos</ins> <del>electrónico</del><ins>electrónicos</ins> de confirmación o de restablecimiento de contraseña.

#### [`core.forum.security.session_terminated`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.security.session_terminated%22)

> {count, plural, one {Session terminated} other {# Sessions terminated}}.

```diff
-{count, plural, one {Sesión terminada} other {# Sesiones terminadas}}.
+{count, plural, one {Sesión finalizada} other {# sesiones finalizadas}}.
```

{count, plural, one {Sesión <del>terminada}</del><ins>finalizada}</ins> other {# <del>Sesiones</del><ins>sesiones</ins> <del>terminadas}}.</del><ins>finalizadas}}.</ins>

#### [`core.forum.security.session_termination_failed`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.security.session_termination_failed%22)

> An error occurred while terminating your sessions.

```diff
-Ocurrió un error al finalizar sus sesiones.
+Se ha producido un error al finalizar tus sesiones.
```

<del>Ocurrió</del><ins>Se ha producido</ins> un error al finalizar <del>sus</del><ins>tus</ins> sesiones.

#### [`core.forum.security.terminate_all_other_sessions`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.security.terminate_all_other_sessions%22)

> Terminate all other sessions

```diff
-Terminar todas las demás sesiones
+Finalizar todas las demás sesiones
```

<del>Terminar</del><ins>Finalizar</ins> todas las demás sesiones

#### [`core.forum.security.terminate_session`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.security.terminate_session%22)

> Terminate

```diff
-Terminar
+Finalizar
```

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Reciba notificaciones de "{description}" a través de {method}
+Recibir notificaciones de "{description}" a través de {method}
```

<del>Reciba</del><ins>Recibir</ins> notificaciones de "{description}" a través de {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Alguien cambió el título de una discusión que usted creó
+Alguien ha cambiado el título de una discusión que creaste
```

Alguien <del>cambió</del><ins>ha cambiado</ins> el título de una discusión que<del> usted</del> <del>creó</del><ins>creaste</ins>

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-Permitir que otros vean cuándo está conectado
+Permitir que otros vean cuándo estás conectado
```

Permitir que otros vean cuándo <del>está</del><ins>estás</ins> conectado

#### [`core.forum.sign_up.log_in_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.sign_up.log_in_text%22)

> Already have an account? &lt;a&gt;Log In&lt;/a&gt;

```diff
-¿Ya tiene una cuenta? <a>¡Conéctese!</a>
+¿Ya tienes una cuenta? <a>¡Inicia sesión!</a>
```

¿Ya <del>tiene</del><ins>tienes</ins> una cuenta? <del>&lt;a&gt;¡Conéctese!&lt;/a&gt;</del><ins>&lt;a&gt;¡Inicia sesión!&lt;/a&gt;</ins>

#### [`core.forum.sign_up.welcome_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.sign_up.welcome_text%22)

> Welcome, {username}!

```diff
-¡Bienvenid@, {username}!
+¡Te damos la bienvenida, {username}!
```

<del>¡Bienvenid@,</del><ins>¡Te damos la bienvenida,</ins> {username}!

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-¿Está seguro de que quiere eliminar este usuario? Las publicaciones del usuario NO serán eliminadas.
+¿Seguro que quieres eliminar este usuario? Sus publicaciones NO se eliminarán.
```

<del>¿Está seguro de</del><ins>¿Seguro</ins> que <del>quiere</del><ins>quieres</ins> eliminar este usuario? <del>Las</del><ins>Sus</ins> publicaciones<del> del usuario</del> NO <del>serán</del><ins>se</ins> <del>eliminadas.</del><ins>eliminarán.</ins>

#### [`core.forum.user_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.user_controls.toggle_dropdown_accessible_label%22)

> Toggle user controls dropdown menu

```diff
-Activar el menú desplegable de los controles del usuario
+Mostrar u ocultar el menú de acciones del usuario
```

<del>Activar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de<del> los</del> <del>controles</del><ins>acciones</ins> del usuario

#### [`core.forum.user_email_confirmation.resend_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.user_email_confirmation.resend_button%22)

> Resend Confirmation Email

```diff
-Re-enviar correo electrónico de confirmación
+Reenviar correo electrónico de confirmación
```

<del>Re-enviar</del><ins>Reenviar</ins> correo electrónico de confirmación

#### [`core.lib.dropdown.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.dropdown.toggle_dropdown_accessible_label%22)

> Toggle dropdown menu

```diff
-Activar el menú desplegable
+Mostrar u ocultar el menú desplegable
```

<del>Activar</del><ins>Mostrar u ocultar</ins> el menú desplegable

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-¡Ups! Algo salió mal durante una solicitud de origen cruzado. Vuelve a cargar la página e inténtalo de nuevo.
+Se ha producido un error durante una solicitud de origen cruzado. Vuelve a cargar la página e inténtalo de nuevo.
```

<del>¡Ups!</del><ins>Se</ins> <del>Algo</del><ins>ha</ins> <del>salió</del><ins>producido</ins> <del>mal</del><ins>un error</ins> durante una solicitud de origen cruzado. Vuelve a cargar la página e inténtalo de nuevo.

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-¡Caramba! Algo salió mal. Por favor, cargue de nuevo la página y vuelva a intentarlo.
+Se ha producido un error. Vuelve a cargar la página e inténtalo de nuevo.
```

<del>¡Caramba! Algo</del><ins>Se</ins> <del>salió</del><ins>ha</ins> <del>mal.</del><ins>producido</ins> <del>Por</del><ins>un</ins> <del>favor,</del><ins>error.</ins> <del>cargue</del><ins>Vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo</del><ins>cargar</ins> la página <del>y</del><ins>e</ins> <del>vuelva</del><ins>inténtalo</ins> <del>a</del><ins>de</ins> <del>intentarlo.</del><ins>nuevo.</ins>

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-No se puede activar {extension} hasta que se activen las siguientes extensiones dependientes: {extensions}
+No se puede activar {extension} hasta que se activen las siguientes extensiones de las que depende: {extensions}
```

No se puede activar {extension} hasta que se activen las siguientes extensiones <del>dependientes:</del><ins>de las que depende:</ins> {extensions}

#### [`core.lib.error.not_found_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.not_found_message%22)

> The requested resource was not found.

```diff
-¡Recórcholis! El recurso solicitado no fue encontrado.
+No se ha encontrado el recurso solicitado.
```

#### [`core.lib.error.payload_too_large_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.payload_too_large_message%22)

> The request payload was too large.

```diff
-La solicitud de carga era demasiado grande.
+El contenido de la solicitud es demasiado grande.
```

<del>La</del><ins>El</ins> <del>solicitud</del><ins>contenido</ins> de <del>carga</del><ins>la</ins> <del>era</del><ins>solicitud es</ins> demasiado grande.

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-¡Nanay de la China! No tiene permiso para hacer eso.
+No tienes permiso para hacer eso.
```

<del>¡Nanay de la China! </del>No <del>tiene</del><ins>tienes</ins> permiso para hacer eso.

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-¡Pare el carro! Va usted muy rápido. Por favor, vuelva a intentarlo en unos segundos.
+Vas demasiado rápido. Vuelve a intentarlo dentro de unos segundos.
```

<del>¡Pare el carro! Va usted</del><ins>Vas</ins> <del>muy</del><ins>demasiado</ins> rápido.<del> Por favor,</del> <del>vuelva</del><ins>Vuelve</ins> a intentarlo <del>en</del><ins>dentro de</ins> unos segundos.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Lo sentimos, ocurrió un problema al intentar mostrar este contenido. Si eres un usuario, por favor inténtalo más tarde. Si eres administrador, revisa los registros de Flarum para obtener mayor información.
+Lo sentimos, se ha producido un error al mostrar este contenido. Si eres usuario, inténtalo de nuevo más tarde. Si eres administrador, consulta los archivos de registro de Flarum para obtener más información.
```

Lo sentimos, <del>ocurrió</del><ins>se ha producido</ins> un <del>problema</del><ins>error</ins> al<del> intentar</del> mostrar este contenido. Si eres<del> un</del> usuario, <del>por</del><ins>inténtalo</ins> <del>favor</del><ins>de</ins> <del>inténtalo</del><ins>nuevo</ins> más tarde. Si eres administrador, <del>revisa</del><ins>consulta</ins> los <del>registros</del><ins>archivos de registro</ins> de Flarum para obtener <del>mayor</del><ins>más</ins> información.

#### [`core.lib.nav.drawer_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.nav.drawer_button%22)

> Open Navigation Drawer

```diff
-Abrir el cuadro de navegación
+Abrir el panel de navegación
```

Abrir el <del>cuadro</del><ins>panel</ins> de navegación

#### [`core.lib.username.deleted_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.username.deleted_text%22)

> \[deleted\]

```diff
-[Borrado]
+[Eliminado]
```

#### [`core.ref.all_discussions`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.all_discussions%22)

> All Discussions

```diff
-Discusiones
+Todas las discusiones
```

#### [`core.ref.confirm_email`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.confirm_email%22)

> Confirm Email

```diff
-Confirmar correo
+Confirmar correo electrónico
```

Confirmar correo<ins> electrónico</ins>

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Le hemos enviado un correo electrónico de confirmación a {email}. Si no aparece pronto, por favor, compruebe la carpeta de correo no deseado (spam).
+Te hemos enviado un correo electrónico de confirmación a {email}. Si no llega pronto, comprueba la carpeta de correo no deseado (spam).
```

<del>Le</del><ins>Te</ins> hemos enviado un correo electrónico de confirmación a {email}. Si no <del>aparece</del><ins>llega</ins> pronto,<del> por favor,</del> <del>compruebe</del><ins>comprueba</ins> la carpeta de correo no deseado (spam).

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-Añade código HTML para que este sea mostrado en la parte más baja de la página.
+Añade código HTML para que se muestre al final de la página.
```

Añade código HTML para que <del>este sea mostrado en la</del><ins>se</ins> <del>parte</del><ins>muestre</ins> <del>más</del><ins>al</ins> <del>baja</del><ins>final</ins> de la página.

#### [`core.ref.custom_footer_title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.custom_footer_title%22)

> Edit Custom Footer

```diff
-Editar el pié de página personalizado
+Editar el pie de página personalizado
```

Editar el <del>pié</del><ins>pie</ins> de página personalizado

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-Añade código HTML para que este sea mostrado en la parte más alta de la página, sobre la cabecera de Flarum.
+Añade código HTML para que se muestre al principio de la página, por encima de la cabecera de Flarum.
```

Añade código HTML para que <del>este sea mostrado en la</del><ins>se</ins> <del>parte</del><ins>muestre</ins> <del>más</del><ins>al</ins> <del>alta</del><ins>principio</ins> de la página, <del>sobre</del><ins>por encima de</ins> la cabecera de Flarum.

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-¿Estás seguro que deseas continuar? Esta acción no se puede deshacer.
+¿Seguro que quieres continuar? Esta acción no se puede deshacer.
```

<del>¿Estás seguro</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> continuar? Esta acción no se puede deshacer.

#### [`core.ref.log_in`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.log_in%22)

> Log In

```diff
-Acceder
+Iniciar sesión
```

#### [`core.ref.log_out`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.log_out%22)

> Log Out

```diff
-Desconectarse
+Cerrar sesión
```

#### [`core.ref.reset_your_password`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.reset_your_password%22)

> Reset Your Password

```diff
-Restableza su contraseña
+Restablece tu contraseña
```

<del>Restableza</del><ins>Restablece</ins> <del>su</del><ins>tu</ins> contraseña

#### [`core.ref.settings`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.settings%22)

> Settings

```diff
-Configuración
+Ajustes
```

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Regístrese
+Registrarse
```

#### [`core.ref.view`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.view%22)

> View

```diff
-Vista
+Ver
```

#### [`core.ref.write_a_reply`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.write_a_reply%22)

> Write a Reply...

```diff
-Escriba una respuesta...
+Escribe una respuesta...
```

<del>Escriba</del><ins>Escribe</ins> una respuesta...

#### [`core.views.admin.extensions.name`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.admin.extensions.name%22)

> Extension Name

```diff
-Nombre de la Extensión
+Nombre de la extensión
```

Nombre de la <del>Extensión</del><ins>extensión</ins>

#### [`core.views.admin.extensions.package_name`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.admin.extensions.package_name%22)

> Package Name

```diff
-Nombre del Paquete
+Nombre del paquete
```

Nombre del <del>Paquete</del><ins>paquete</ins>

#### [`core.views.admin.info.caption`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.admin.info.caption%22)

> Application Info

```diff
-Información de la Aplicación
+Información de la aplicación
```

Información de la <del>Aplicación</del><ins>aplicación</ins>

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-Presiona el botón a continuación para confirmar el correo de tu cuenta.
+Pulsa el botón de abajo para confirmar el correo electrónico de tu cuenta.
```

<del>Presiona</del><ins>Pulsa</ins> el botón <del>a</del><ins>de</ins> <del>continuación</del><ins>abajo</ins> para confirmar el correo<ins> electrónico</ins> de tu cuenta.

#### [`core.views.content.javascript_disabled_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.content.javascript_disabled_message%22)

> This site is best viewed in a modern browser with JavaScript enabled.

```diff
-Este sitio web se vé mejor en un navegador moderno con JavaScript activado.
+Este sitio web se ve mejor en un navegador moderno con JavaScript activado.
```

Este sitio web se <del>vé</del><ins>ve</ins> mejor en un navegador moderno con JavaScript activado.

#### [`core.views.content.load_error_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.content.load_error_message%22)

> Something went wrong while trying to load the full version of this site. Try hard-refreshing this page to fix the error.

```diff
-Algo salió mal cuando se intentó cargar la versión completa de este sitio web.
+Se ha producido un error al intentar cargar la versión completa de este sitio web.
```

<del>Algo</del><ins>Se</ins> <del>salió</del><ins>ha</ins> <del>mal</del><ins>producido</ins> <del>cuando</del><ins>un</ins> <del>se</del><ins>error</ins> <del>intentó</del><ins>al intentar</ins> cargar la versión completa de este sitio web.

#### [`core.views.content.loading_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.content.loading_text%22)

> =&gt; core.ref.loading

```diff
-Cargando...
+=> core.ref.loading
```

#### [`core.views.error.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch%22)

> You have been inactive for too long.

```diff
-Ha estado inactivo durante demasiado tiempo.
+Has estado inactivo durante demasiado tiempo.
```

<del>Ha</del><ins>Has</ins> estado inactivo durante demasiado tiempo.

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Vuelva atrás para intentarlo de nuevo
+Vuelve atrás para intentarlo de nuevo
```

<del>Vuelva</del><ins>Vuelve</ins> atrás para intentarlo de nuevo

#### [`core.views.error.not_authenticated`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.not_authenticated%22)

> You do not have permission to access this page. Try again after logging in.

```diff
-Usted no tiene permiso para acceder a esta página. Inténtelo de nuevo después de iniciar sesión.
+No tienes permiso para acceder a esta página. Inténtalo de nuevo después de iniciar sesión.
```

<del>Usted no</del><ins>No</ins> <del>tiene</del><ins>tienes</ins> permiso para acceder a esta página. <del>Inténtelo</del><ins>Inténtalo</ins> de nuevo después de iniciar sesión.

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-¡Recórcholis! La página solicitada no ha podido ser encontrada.
+No se ha encontrado la página solicitada.
```

<del>¡Recórcholis! La página solicitada</del><ins>No</ins> <del>no</del><ins>se</ins> ha <del>podido</del><ins>encontrado</ins> <del>ser</del><ins>la</ins> <del>encontrada.</del><ins>página solicitada.</ins>

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-¡Nanay de la China! No tiene permiso para acceder a esta página.
+No tienes permiso para acceder a esta página.
```

<del>¡Nanay de la China! </del>No <del>tiene</del><ins>tienes</ins> permiso para acceder a esta página.

#### [`core.views.error.unknown`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.unknown%22)

> An error occurred while trying to load this page.

```diff
-¡Caramba! Ha ocurrido un error cuando se cargaba esta página.
+Se ha producido un error al cargar esta página.
```

<del>¡Caramba!</del><ins>Se</ins> <del>Ha</del><ins>ha</ins> <del>ocurrido</del><ins>producido</ins> un error<del> cuando</del> <del>se</del><ins>al</ins> <del>cargaba</del><ins>cargar</ins> esta página.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-¿Seguro que quiere desconectarse de {forum}?
+¿Seguro que quieres cerrar sesión en {forum}?
```

¿Seguro que <del>quiere</del><ins>quieres</ins> <del>desconectarse</del><ins>cerrar</ins> <del>de</del><ins>sesión en</ins> {forum}?


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


### `fof-best-answer`

#### [`fof-best-answer.forum.user.best-answer-count`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/es@formal/?q=context%3A%3D%22fof-best-answer.forum.user.best-answer-count%22)

> {count, plural, one { {count} best answer} other {{count} best answers}}

```diff
-{count, plural, one { {count} mejor respuesta} other {{count} mejores respuestas}}
+{count, plural, one { {count} best answer} other {{count} best answers}}
```

{count, plural, one { {count} <del>mejor</del><ins>best</ins> <del>respuesta}</del><ins>answer}</ins> other {{count} <del>mejores</del><ins>best</ins> <del>respuestas}}</del><ins>answers}}</ins>


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


### `fof-usercard-stats`

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/es@formal/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
-{count, plural, one {{count} discusión} other {{count} discusiones}}
+{count, plural, one { {count} discussion} other {{count} discussions}}
```

{count, plural, one <del>{{count}</del><ins>{</ins> <del>discusión}</del><ins>{count} discussion}</ins> other {{count} <del>discusiones}}</del><ins>discussions}}</ins>

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/es@formal/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
-{count, plural, one { {count} publicación} other {{count} publicaciones}}
+{count, plural, one { {count} post} other {{count} posts}}
```

{count, plural, one { {count} <del>publicación}</del><ins>post}</ins> other {{count} <del>publicaciones}}</del><ins>posts}}</ins>


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
+{count, plural, one {# comentario} other {# comentarios}}
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
+No se han podido cargar los anuncios. Inténtalo de nuevo más tarde.
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
+Reintentar
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
+Enviar un correo electrónico a los administradores cuando la comprobación semanal detecte una nueva extensión abandonada
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+Revisar ahora
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+No se ha podido obtener la lista de extensiones abandonadas. Inténtalo de nuevo más tarde.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Lista de extensiones abandonadas actualizada. Número de extensiones encontradas en tu foro: {count}.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+Flarum mantiene una <a>lista comunitaria de extensiones abandonadas</a>. Cuando una extensión instalada aparece en la lista, se marcará en el panel de administración.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Información del sistema
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Copiar al portapapeles
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+No se ha podido copiar al portapapeles
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Información del sistema copiada al portapapeles
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Información del sistema
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Esta extensión ya no recibe mantenimiento por parte de su autor y es posible que no reciba actualizaciones.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Esta extensión ha sido sustituida por {replacement}. Considera migrar al paquete que la sustituye.
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
+Eliminar el ámbito de {scope}
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Acción necesaria: se han detectado extensiones abandonadas
```

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+Se ha restablecido tu conexión.
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+Parece que hay un problema con tu conexión. Comprueba la red y vuelve a intentarlo.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+Parece que no tienes conexión. Comprueba tu conexión y vuelve a intentarlo.
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

#### [`ianm-follow-users.forum.profile_page.no_followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/es@formal/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_followers%22)

> It looks like you have no followers yet.

```diff
+Parece que aún no tienes seguidores.
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
