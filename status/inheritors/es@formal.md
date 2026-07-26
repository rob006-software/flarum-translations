# Spanish (formal) inherited translations differences

Translations for Spanish (formal) (`es@formal`) are inherited from Spanish informal variant, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **165** are translated differently and **0** are
translated only in `es@formal`. Altogether they cover **28** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [76](#core) |
| `datlechin-birthdays` | [9](#datlechin-birthdays) |
| `flarum-akismet` | [1](#flarum-akismet) |
| `flarum-emoji` | [1](#flarum-emoji) |
| `flarum-extension-manager` | [12](#flarum-extension-manager) |
| `flarum-likes` | [4](#flarum-likes) |
| `flarum-lock` | [5](#flarum-lock) |
| `flarum-mentions` | [10](#flarum-mentions) |
| `flarum-pusher` | [1](#flarum-pusher) |
| `flarum-sticky` | [3](#flarum-sticky) |
| `flarum-subscriptions` | [5](#flarum-subscriptions) |
| `flarum-suspend` | [3](#flarum-suspend) |
| `flarum-tags` | [10](#flarum-tags) |
| `flarumite-simple-spoilers` | [1](#flarumite-simple-spoilers) |
| `fof-discussion-language` | [1](#fof-discussion-language) |
| `fof-links` | [1](#fof-links) |
| `fof-masquerade` | [3](#fof-masquerade) |
| `fof-nightmode` | [1](#fof-nightmode) |
| `fof-pages` | [2](#fof-pages) |
| `fof-polls` | [4](#fof-polls) |
| `fof-reactions` | [1](#fof-reactions) |
| `fof-socialprofile` | [2](#fof-socialprofile) |
| `fof-upload` | [2](#fof-upload) |
| `fof-user-bio` | [2](#fof-user-bio) |
| `fof-webhooks` | [2](#fof-webhooks) |
| `katosdev-signature` | [1](#katosdev-signature) |
| `matteocontrini-imgur-upload` | [1](#matteocontrini-imgur-upload) |
| `michaelbelgium-discussion-views` | [1](#michaelbelgium-discussion-views) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Spanish informal variant (`-` line) and the translation from `es@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

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
+Personalice la apariencia de su foro añadiendo su propio código LESS/CSS, que se aplicará sobre los estilos por defecto de Flarum.
```

<del>Personaliza</del><ins>Personalice</ins> la apariencia de <del>tu</del><ins>su</ins> foro añadiendo <del>tu</del><ins>su</ins> propio código <del>Less/CSS,</del><ins>LESS/CSS,</ins> que se aplicará sobre los estilos por defecto de Flarum.

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
+Personalice los colores, logotipos y otras variables de su foro.
```

<del>Personaliza</del><ins>Personalice</ins> los colores, logotipos y otras variables de <del>tu</del><ins>su</ins> foro.

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
+Por favor, introduzca un código hexadecimal de color.
```

Por favor, <del>introduce</del><ins>introduzca</ins> un código hexadecimal de color.

#### [`core.admin.appearance.favicon_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_heading%22)

> Favicon

```diff
-Favicon
+Icono de Favoritos o <em>Favicon</em>
```

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Sube una imagen para que sea mostrada como icono de acceso directo al foro.
+Suba una imagen para que sea mostrada como icono de acceso directo al foro.
```

<del>Sube</del><ins>Suba</ins> una imagen para que sea mostrada como icono de acceso directo al foro.

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Sube una imagen para que sea mostrada en lugar del título del foro.
+Suba una imagen para que sea mostrada en lugar del título del foro.
```

<del>Sube</del><ins>Suba</ins> una imagen para que sea mostrada en lugar del título del foro.

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Configura el título, el idioma y otras configuraciones básicas de tu foro.
+Configure el título, el idioma y otras configuraciones básicas de su foro.
```

<del>Configura</del><ins>Configure</ins> el título, el idioma y otras configuraciones básicas de <del>tu</del><ins>su</ins> foro.

#### [`core.admin.basics.display_name_heading`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_heading%22)

> User Display Name

```diff
-Nombre para mostrar
+Nombre de usuario
```

Nombre <del>para</del><ins>de</ins> <del>mostrar</del><ins>usuario</ins>

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Selecciona el controlador que debe utilizarse para mostrar los nombres. Por defecto, se muestra el nombre de usuario.
+Seleccione el controlador que debe utilizarse para mostrar los nombres. Por defecto, se muestra el nombre de usuario.
```

<del>Selecciona</del><ins>Seleccione</ins> el controlador que debe utilizarse para mostrar los nombres. Por defecto, se muestra el nombre de usuario.

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
+Elija cuál es la portada que los usuarios verán al llegar al foro.
```

<del>Elige</del><ins>Elija</ins> cuál es la portada que los usuarios verán al llegar al foro.

#### [`core.admin.basics.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.title%22)

> Basics

```diff
-Básicos
+Lo esencial
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los invitados en tu foro.
+Introduzca el texto que se mostrará en la lista de discusiones. Utilícelo para dar la bienvenida a los invitados en su foro.
```

<del>Introduce</del><ins>Introduzca</ins> el texto que se mostrará en la lista de discusiones. <del>Utilízalo</del><ins>Utilícelo</ins> para dar la bienvenida a los invitados en <del>tu</del><ins>su</ins> foro.

#### [`core.admin.dashboard.clear_cache_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.clear_cache_button%22)

> Clear Cache

```diff
-Limpiar caché
+Limpiar cache
```

Limpiar <del>caché</del><ins>cache</ins>

#### [`core.admin.dashboard.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.description%22)

> Your forum at a glance.

```diff
-Tu foro de un vistazo.
+Su foro de un vistazo.
```

<del>Tu</del><ins>Su</ins> foro de un vistazo.

#### [`core.admin.dashboard.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.title%22)

> Dashboard

```diff
-Panel
+Tablero
```

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Personaliza la apariencia de tu foro añadiendo tu propio código Less/CSS que será aplicado sobre los <a>estilos por defecto</a> de Flarum.
+Personalice la apariencia de su foro añadiendo su propio código LESS/CSS que será aplicado sobre los <a>estilos por defecto</a> de Flarum.
```

<del>Personaliza</del><ins>Personalice</ins> la apariencia de <del>tu</del><ins>su</ins> foro añadiendo <del>tu</del><ins>su</ins> propio código <del>Less/CSS</del><ins>LESS/CSS</ins> que será aplicado sobre los &lt;a&gt;estilos por defecto&lt;/a&gt; de Flarum.

#### [`core.admin.edit_group.delete_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.edit_group.delete_button%22)

> Delete Group

```diff
-Eliminar grupo
+Borrar grupo
```

<del>Eliminar</del><ins>Borrar</ins> grupo

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-¿Estás seguro de que deseas eliminar este grupo? Los usuarios que pertenecen al grupo NO serán eliminados.
+¿Está seguro de que desea eliminar este grupo? Los usuarios que pertenecen al grupo NO serán eliminados.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este grupo? Los usuarios que pertenecen al grupo NO serán eliminados.

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Configura el controlador, la configuración y las direcciones que usará tu foro para enviar correo electrónico.
+Configure el controlador, la configuración y las direcciones que usará su foro para enviar correo electrónico.
```

<del>Configura</del><ins>Configure</ins> el controlador, la configuración y las direcciones que usará <del>tu</del><ins>su</ins> foro para enviar correo electrónico.

#### [`core.admin.email.driver_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.email.driver_label%22)

> Driver

```diff
-Controlador
+Driver
```

#### [`core.admin.extension.enable_to_see`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.extension.enable_to_see%22)

> Enable the extension to view and change settings.

```diff
-Habilita la extensión para ver y cambiar la configuración.
+Habilite la extensión para ver y cambiar la configuración.
```

<del>Habilita</del><ins>Habilite</ins> la extensión para ver y cambiar la configuración.

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Por favor, espera...
+Por favor, espere...
```

Por favor, <del>espera...</del><ins>espere...</ins>

#### [`core.admin.nav.email_title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.nav.email_title%22)

> =&gt; core.admin.email.description

```diff
-=> core.admin.email.description
+Configure el driver, la configuración y las direcciones que usará su foro para enviar correo electrónico.
```

#### [`core.admin.nav.permissions_title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.admin.nav.permissions_title%22)

> =&gt; core.admin.permissions.description

```diff
-=> core.admin.permissions.description
+Configure quién puede ver y hacer qué.
```

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
-
-Alguien (¡espero que tú!) se ha registrado en {forum} con esta dirección de correo electrónico.
-
-Si has sido tú, simplemente haz clic en el siguiente enlace y tu cuenta se activará:
-{url}
-
-Si no te has registrado, ignora este correo electrónico.
-
+¡Hola, {username}!
+
+Alguien se ha registrado como usuario en {forum} con esta dirección de correo electrónico.
+
+Si efectivamente ha sido usted, por favor, haga click en el siguiente enlace y su cuenta de usuario será activada:
+{url}
+
+Si por el contrario no ha sido usted, por favor, ignore este correo electrónico.
+
+Reciba un cordial saludo,
+
+El Equipo de {forum}
+
```

<del>¡Hola</del><ins>¡Hola,</ins> {username}!<br /><br />Alguien<del> (¡espero que tú!)</del> se ha registrado<ins> como usuario</ins> en {forum} con esta dirección de correo electrónico.<br /><br />Si <del>has</del><ins>efectivamente ha</ins> sido <del>tú,</del><ins>usted,</ins> <del>simplemente</del><ins>por</ins> <del>haz</del><ins>favor,</ins> <del>clic</del><ins>haga click</ins> en el siguiente enlace y <del>tu</del><ins>su</ins> cuenta <del>se</del><ins>de</ins> <del>activará:</del><ins>usuario será activada:</ins><br />{url}<br /><br />Si<ins> por el contrario</ins> no <del>te</del><ins>ha</ins> <del>has</del><ins>sido</ins> <del>registrado,</del><ins>usted,</ins> <del>ignora</del><ins>por favor, ignore</ins> este correo electrónico.<ins><br /><br />Reciba un cordial saludo,<br /><br />El Equipo de {forum}</ins><br />

#### [`core.email.activate_account.subject`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.activate_account.subject%22)

> Activate Your New Account

```diff
-Activa tu cuenta de usuario
+Active su cuenta de usuario
```

<del>Activa</del><ins>Active</ins> <del>tu</del><ins>su</ins> cuenta de usuario

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
-
-Alguien (¡espero que tú!) ha cambiado su dirección de correo electrónico en {forum} por esta.
-
-Si has sido tú, simplemente haz clic en el siguiente enlace y tu correo electrónico será confirmado:
-{url}
-
-Si no has sido tú, por favor ignora este email.
-
+¡Hola, {username}!
+
+Alguien se ha registrado como usuario en {forum} con Su dirección de correo electrónico.
+
+Si efectivamente ha sido usted, por favor, haga click en el siguiente enlace para confirmar tu dirección de correo electrónico:
+{url}
+
+Si por el contrario no ha sido usted, por favor, ignore este correo electrónico.
+
+Reciba un cordial saludo,
+
+El Equipo de {forum}
+
```

<del>¡Hola</del><ins>¡Hola,</ins> {username}!<br /><br />Alguien<del> (¡espero que</del> <del>tú!)</del><ins>se</ins> ha <del>cambiado</del><ins>registrado</ins> <del>su</del><ins>como</ins> <del>dirección</del><ins>usuario</ins> <del>de</del><ins>en</ins> <del>correo</del><ins>{forum}</ins> <del>electrónico</del><ins>con</ins> <del>en</del><ins>Su</ins> <del>{forum}</del><ins>dirección</ins> <del>por</del><ins>de</ins> <del>esta.</del><ins>correo electrónico.</ins><br /><br />Si <del>has</del><ins>efectivamente ha</ins> sido <del>tú,</del><ins>usted,</ins> <del>simplemente</del><ins>por</ins> <del>haz</del><ins>favor,</ins> <del>clic</del><ins>haga click</ins> en el siguiente enlace <del>y</del><ins>para confirmar</ins> tu <del>correo</del><ins>dirección</ins> <del>electrónico</del><ins>de</ins> <del>será</del><ins>correo</ins> <del>confirmado:</del><ins>electrónico:</ins><br />{url}<br /><br />Si<ins> por el contrario</ins> no <del>has</del><ins>ha</ins> sido <del>tú,</del><ins>usted,</ins> por <del>favor</del><ins>favor,</ins> <del>ignora</del><ins>ignore</ins> este <del>email.</del><ins>correo electrónico.<br /><br />Reciba un cordial saludo,<br /><br />El Equipo de {forum}</ins><br />

#### [`core.email.confirm_email.subject`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.email.confirm_email.subject%22)

> Confirm Your New Email Address

```diff
-Confirma tu correo electrónico
+Confirme su correo electrónico
```

<del>Confirma</del><ins>Confirme</ins> <del>tu</del><ins>su</ins> correo electrónico

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
-
-Alguien (¡espero que tú!) ha enviado una solicitud de contraseña olvidada para tu cuenta en {forum}.
-
-Si has sido tú, haz clic en el siguiente enlace para restablecer tu contraseña:
-{url}
-
-Si no deseas cambiar tu contraseña, simplemente ignora este correo electrónico y no pasará nada.
-
+¡Hola, {username}!
+
+Alguien ha enviado una solicitud para restablecer la contraseña de su cuenta de usuario en {forum}.
+
+Si efectivamente ha sido usted, por favor, haga click en el siguiente enlace para restablecer tu contraseña:
+{url}
+
+Si por el contrario no ha sido usted, por favor, ignore este correo electrónico.
+
+Reciba un cordial saludo,
+
+El Equipo de {forum}
+
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
-Hey {username}!
-
-Este es un correo electrónico de prueba para confirmar que la configuración de Flarum funciona correctamente.
-
-Si fuiste tú, este correo electrónico significa que su configuración funciona.
-
-Si no fuiste tú, ignora este correo electrónico.
-
+Hey {username}!
+
+Este es un correo electrónico de prueba para confirmar que la configuración de Flarum funciona correctamente.
+
+Si fué usted, este correo electrónico significa que su configuración funciona.
+
+Si no ha sido usted, ignore este correo electrónico.
+
```

Hey {username}!<br /><br />Este es un correo electrónico de prueba para confirmar que la configuración de Flarum funciona correctamente.<br /><br />Si <del>fuiste</del><ins>fué</ins> <del>tú,</del><ins>usted,</ins> este correo electrónico significa que su configuración funciona.<br /><br />Si no <del>fuiste</del><ins>ha</ins> <del>tú,</del><ins>sido</ins> <del>ignora</del><ins>usted, ignore</ins> este correo electrónico.<br />

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Haz click en el botón de abajo y recibirás por correo electrónico un enlace para restablecer tu contraseña.
+Haga click en el botón de abajo y recibirá por correo electrónico un enlace para restablecer su contraseña.
```

<del>Haz</del><ins>Haga</ins> click en el botón de abajo y <del>recibirás</del><ins>recibirá</ins> por correo electrónico un enlace para restablecer <del>tu</del><ins>su</ins> contraseña.

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Escribe una publicación...
+Escriba una publicación...
```

<del>Escribe</del><ins>Escriba</ins> una publicación...

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Aún no has publicado tu discusión. ¿Estás seguro de que deseas descartarla?
+Aún no ha publicado su discusión. ¿Está seguro de que desea descartarla?
```

Aún no <del>has</del><ins>ha</ins> publicado <del>tu</del><ins>su</ins> discusión. <del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> descartarla?

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Aún no has publicado tus cambios. ¿Estás seguro de que deseas descartarlos?
+Aún no ha publicado sus cambios. ¿Está seguro de que desea descartarlos?
```

Aún no <del>has</del><ins>ha</ins> publicado <del>tus</del><ins>sus</ins> cambios. <del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> descartarlos?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Se realizó tu edición.
+Se realizó su edición.
```

Se realizó <del>tu</del><ins>su</ins> edición.

#### [`core.forum.composer_edit.post_link`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.post_link%22)

> Post #{number} in {discussion}

```diff
-Publicación n.º {number} en {discussion}
+Publicación n.º {number} en '{discussion}'
```

Publicación n.º {number} en <del>{discussion}</del><ins>'{discussion}'</ins>

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Aún no has publicado tu respuesta. ¿Estás seguro de que desea descartarla?
+Aún no ha publicado su respuesta. ¿Está seguro de que desea descartarla?
```

Aún no <del>has</del><ins>ha</ins> publicado <del>tu</del><ins>su</ins> respuesta. <del>¿Estás</del><ins>¿Está</ins> seguro de que desea descartarla?

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Tu respuesta fue publicada.
+Su respuesta fue publicada.
```

<del>Tu</del><ins>Su</ins> respuesta fue publicada.

#### [`core.forum.discussion_controls.cannot_reply_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.cannot_reply_button%22)

> Can't Reply

```diff
-No puedes responder
+No puede responder
```

No <del>puedes</del><ins>puede</ins> responder

#### [`core.forum.discussion_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.discussion_controls.delete_confirmation%22)

> Are you sure you want to delete this discussion?

```diff
-¿Estás seguro de que deseas eliminar esta discusión?
+¿Está seguro de que desea eliminar esta discusión?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar esta discusión?

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Si el correo electrónico que ingresaste está registrado en este sitio, te enviaremos un correo electrónico con un enlace para restablecer tu contraseña. Si no aparece pronto, por favor, comprueba la carpeta de correo no deseado (spam).
+Le hemos enviado un correo electrónico que contiene un enlace para restablecer su contraseña. Si no aparece pronto, por favor, compruebe la carpeta de correo no deseado (spam).
```

<del>Si el correo electrónico que ingresaste está registrado en este sitio,</del><ins>Le</ins> <del>te</del><ins>hemos</ins> <del>enviaremos</del><ins>enviado</ins> un correo electrónico <del>con</del><ins>que contiene</ins> un enlace para restablecer <del>tu</del><ins>su</ins> contraseña. Si no aparece pronto, por favor, <del>comprueba</del><ins>compruebe</ins> la carpeta de correo no deseado (spam).

#### [`core.forum.forgot_password.text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.text%22)

> Enter your email address and we will send you a link to reset your password.

```diff
-Introduce tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
+Introduzca su correo electrónico y le enviaremos un enlace para restablecer su contraseña.
```

<del>Introduce</del><ins>Introduzca</ins> <del>tu</del><ins>su</ins> correo electrónico y <del>te</del><ins>le</ins> enviaremos un enlace para restablecer <del>tu</del><ins>su</ins> contraseña.

#### [`core.forum.forgot_password.title`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.forgot_password.title%22)

> Forgot Password

```diff
-¿Olvidaste tu contraseña?
+¿Olvidó su contraseña?
```

<del>¿Olvidaste</del><ins>¿Olvidó</ins> <del>tu</del><ins>su</ins> contraseña?

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-No puedes crear una discusión
+No puede crear una discusión
```

No <del>puedes</del><ins>puede</ins> crear una discusión

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-¿Estás seguro de que deseas marcar todas las discusiones como leídas?
+¿Está seguro de que desea marcar todas las discusiones como leídas?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> marcar todas las discusiones como leídas?

#### [`core.forum.log_in.forgot_password_link`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.log_in.forgot_password_link%22)

> Forgot password?

```diff
-¿Olvidaste tu contraseña?
+¿Olvidó su contraseña?
```

<del>¿Olvidaste</del><ins>¿Olvidó</ins> <del>tu</del><ins>su</ins> contraseña?

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

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-¿Aún no tienes una cuenta? <a>¡Regístrate!</a>
+¿Aún no tiene una cuenta? <a>¡Regístrese!</a>
```

¿Aún no <del>tienes</del><ins>tiene</ins> una cuenta? <del>&lt;a&gt;¡Regístrate!&lt;/a&gt;</del><ins>&lt;a&gt;¡Regístrese!&lt;/a&gt;</ins>

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-¿Estás seguro de que deseas eliminar este mensaje para siempre? Esta acción no se puede deshacer.
+¿Está seguro de que desea eliminar este mensaje para siempre? Esta acción no se puede deshacer.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este mensaje para siempre? Esta acción no se puede deshacer.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-¿Estás seguro de que deseas eliminar este mensaje?
+¿Está seguro de que desea eliminar este mensaje?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este mensaje?

#### [`core.forum.post_stream.discussion_renamed_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.post_stream.discussion_renamed_text%22)

> {username} changed the title to {new} {time}.

```diff
-{username} cambió el título a {new} {time}.
+{username} cambió el título a {new}.
```

{username} cambió el título a <del>{new} {time}.</del><ins>{new}.</ins>

#### [`core.forum.search.all_discussions_button`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.search.all_discussions_button%22)

> Search all discussions for "{query}"

```diff
-Buscar "{query}" en todas las discusiones
+Buscar '{query}' en todas las discusiones
```

Buscar <del>"{query}"</del><ins>'{query}'</ins> en todas las discusiones

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Alguien cambió el título de una discusión que tú creaste
+Alguien cambió el título de una discusión que usted creó
```

Alguien cambió el título de una discusión que <del>tú</del><ins>usted</ins> <del>creaste</del><ins>creó</ins>

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-Permitir que otros vean que estás conectado
+Permitir que otros vean cuándo está conectado
```

Permitir que otros vean <del>que</del><ins>cuándo</ins> <del>estás</del><ins>está</ins> conectado

#### [`core.forum.sign_up.log_in_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.sign_up.log_in_text%22)

> Already have an account? &lt;a&gt;Log In&lt;/a&gt;

```diff
-¿Ya tienes una cuenta? <a>¡Conéctate!</a>
+¿Ya tiene una cuenta? <a>¡Conéctese!</a>
```

¿Ya <del>tienes</del><ins>tiene</ins> una cuenta? <del>&lt;a&gt;¡Conéctate!&lt;/a&gt;</del><ins>&lt;a&gt;¡Conéctese!&lt;/a&gt;</ins>

#### [`core.forum.user_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.forum.user_controls.delete_confirmation%22)

> Are you sure you want to delete this user? The user's posts will NOT be deleted.

```diff
-¿Estás seguro de que quieres eliminar este usuario? Las publicaciones del usuario NO serán eliminadas.
+¿Está seguro de que quiere eliminar este usuario? Las publicaciones del usuario NO serán eliminadas.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar este usuario? Las publicaciones del usuario NO serán eliminadas.

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-¡Caramba! Algo salió mal. Por favor, carga de nuevo la página y vuelve a intentarlo.
+¡Caramba! Algo salió mal. Por favor, cargue de nuevo la página y vuelva a intentarlo.
```

¡Caramba! Algo salió mal. Por favor, <del>carga</del><ins>cargue</ins> de nuevo la página y <del>vuelve</del><ins>vuelva</ins> a intentarlo.

#### [`core.lib.error.permission_denied_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.permission_denied_message%22)

> You do not have permission to do that.

```diff
-¡Nanay de la China! No tienes permiso para hacer eso.
+¡Nanay de la China! No tiene permiso para hacer eso.
```

¡Nanay de la China! No <del>tienes</del><ins>tiene</ins> permiso para hacer eso.

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-¡Para el carro! Vas tú muy rápido. Por favor, vuelve a intentarlo en unos segundos.
+¡Pare el carro! Va usted muy rápido. Por favor, vuelva a intentarlo en unos segundos.
```

<del>¡Para</del><ins>¡Pare</ins> el carro! <del>Vas</del><ins>Va</ins> <del>tú</del><ins>usted</ins> muy rápido. Por favor, <del>vuelve</del><ins>vuelva</ins> a intentarlo en unos segundos.

#### [`core.lib.username.deleted_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.lib.username.deleted_text%22)

> \[deleted\]

```diff
-[borrado]
+[Borrado]
```

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Te hemos enviado un correo electrónico de confirmación a {email}. Si no aparece pronto, por favor, comprueba la carpeta de correo no deseado (spam).
+Le hemos enviado un correo electrónico de confirmación a {email}. Si no aparece pronto, por favor, compruebe la carpeta de correo no deseado (spam).
```

<del>Te</del><ins>Le</ins> hemos enviado un correo electrónico de confirmación a {email}. Si no aparece pronto, por favor, <del>comprueba</del><ins>compruebe</ins> la carpeta de correo no deseado (spam).

#### [`core.ref.icon_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.icon_text%22)

> Enter the name of any &lt;a&gt;FontAwesome&lt;/a&gt; icon class, &lt;em&gt;including&lt;/em&gt; the &lt;code&gt;fas fa-&lt;/code&gt; prefix.

```diff
-Introduce el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
+Introduzca el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
```

<del>Introduce</del><ins>Introduzca</ins> el nombre de alguna clase de &lt;a&gt;FontAwesome&lt;/a&gt;, &lt;em&gt;incluyendo&lt;/em&gt; el prefijo &lt;code&gt;fas fa-&lt;/code&gt;.

#### [`core.ref.reset_your_password`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.reset_your_password%22)

> Reset Your Password

```diff
-Restablece tu contraseña
+Restableza su contraseña
```

<del>Restablece</del><ins>Restableza</ins> <del>tu</del><ins>su</ins> contraseña

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Regístrate
+Regístrese
```

#### [`core.ref.write_a_reply`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.ref.write_a_reply%22)

> Write a Reply...

```diff
-Escribe una respuesta...
+Escriba una respuesta...
```

<del>Escribe</del><ins>Escriba</ins> una respuesta...

#### [`core.views.content.loading_text`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.content.loading_text%22)

> =&gt; core.ref.loading

```diff
-=> core.ref.loading
+Cargando...
```

#### [`core.views.error.csrf_token_mismatch`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch%22)

> You have been inactive for too long.

```diff
-Has estado inactivo durante demasiado tiempo.
+Ha estado inactivo durante demasiado tiempo.
```

<del>Has</del><ins>Ha</ins> estado inactivo durante demasiado tiempo.

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Vuelve atrás para intentarlo de nuevo
+Vuelva atrás para intentarlo de nuevo
```

<del>Vuelve</del><ins>Vuelva</ins> atrás para intentarlo de nuevo

#### [`core.views.error.not_authenticated`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.not_authenticated%22)

> You do not have permission to access this page. Try again after logging in.

```diff
-No tienes permiso para acceder a esta página. Inténtalo de nuevo después de iniciar sesión.
+Usted no tiene permiso para acceder a esta página. Inténtelo de nuevo después de iniciar sesión.
```

<del>No</del><ins>Usted</ins> <del>tienes</del><ins>no tiene</ins> permiso para acceder a esta página. <del>Inténtalo</del><ins>Inténtelo</ins> de nuevo después de iniciar sesión.

#### [`core.views.error.permission_denied`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.error.permission_denied%22)

> You do not have permission to access this page.

```diff
-¡Nanay de la China! No tienes permiso para acceder a esta página.
+¡Nanay de la China! No tiene permiso para acceder a esta página.
```

¡Nanay de la China! No <del>tienes</del><ins>tiene</ins> permiso para acceder a esta página.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum/core/es@formal/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-¿Seguro que quieres desconectarse de {forum}?
+¿Seguro que quiere desconectarse de {forum}?
```

¿Seguro que <del>quieres</del><ins>quiere</ins> desconectarse de {forum}?


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
-
+Añada repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no añada repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en su servidor.
+
```

<del>Añade</del><ins>Añada</ins> repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no <del>añadas</del><ins>añada</ins> repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en <del>tu</del><ins>su</ins> servidor.<br />

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major%22)

> Some installed extensions are not compatible with the newest major release. Please wait until the extensions are updated to be compatible by the authors, or remove them before proceeding.
>

```diff
-Algunas extensiones instaladas no son compatibles con la versión principal más reciente. Espera a que los autores actualicen las extensiones para que sean compatibles o elimínalas antes de continuar.
-
+Algunas extensiones instaladas no son compatibles con la versión principal más reciente. Espere a que los autores actualicen las extensiones para que sean compatibles o elimínelas antes de continuar.
+
```

Algunas extensiones instaladas no son compatibles con la versión principal más reciente. <del>Espera</del><ins>Espere</ins> a que los autores actualicen las extensiones para que sean compatibles o <del>elimínalas</del><ins>elimínelas</ins> antes de continuar.<br />

#### [`flarum-extension-manager.admin.extensions.install_help`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install_help%22)

> Fill in the extension package name to proceed. You can specify a &lt;semantic\_link&gt;semantic version&lt;/semantic\_link&gt; using the format &lt;code&gt;vendor/package-name:version&lt;/code&gt;. Visit {link} to browse extensions.
>

```diff
-Completa el nombre del paquete de extensión para continuar. Puedes especificar una <semantic_link>versión semántica</semantic_link> utilizando el formato <code>vendor/nombre-del-paquete:versión</code>. Visita {extiverse} para explorar extensiones.
-
+Complete el nombre del paquete de extensión para continuar. Puede especificar una <semantic_link>versión semántica</semantic_link> utilizando el formato <code>vendor/nombre-del-paquete:versión</code>. Visite {extiverse} para explorar extensiones.
+
```

<del>Completa</del><ins>Complete</ins> el nombre del paquete de extensión para continuar. <del>Puedes</del><ins>Puede</ins> especificar una &lt;semantic\_link&gt;versión semántica&lt;/semantic\_link&gt; utilizando el formato &lt;code&gt;vendor/nombre-del-paquete:versión&lt;/code&gt;. <del>Visita</del><ins>Visite</ins> {extiverse} para explorar extensiones.<br />

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
-Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de tus extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, asegúrate de hacer una copia de seguridad de tu base de datos y archivos antes de proceder.
-
+Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de sus extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, asegúrese de hacer una copia de seguridad de su base de datos y archivos antes de proceder.
+
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
-
+Puede leer sobre una <a href='{basic_impl_link}'>implementación básica</a> de una cola o una <a href='{adv_impl_link}'>más avanzada</a>. Asegúrese de que la versión de PHP utilizada para la cola sea {php_version}. Asegúrese de que los <a href='{folder_perms_link}'>permisos de las carpetas</a> estén configurados correctamente.
+
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
-{count, plural, one {A ti te gusta esto} other {A {users} os gusta esto}}
+{count, plural, one {A usted le gusta esto} other {A {users} os gusta esto}}
```

{count, plural, one {A <del>ti</del><ins>usted</ins> <del>te</del><ins>le</ins> gusta esto} other {A {users} os gusta esto}}

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
-Hey {recipient_display_name}!
-
-{replier_display_name} respondió a tu publicación (#{post_number}) en {title}.
-
-{url}
-
----
-
-{content}
-
+Hey {recipient_display_name}!
+
+{replier_display_name} respondió a su publicación (#{post_number}) en {title}.
+
+{url}
+
+---
+
+{content}
+
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
-Hey {recipient_display_name}!
-
-{mencioner_display_name} te mencionó en una publicación en {title}.
-
-{url}
-
----
-
-{content}
-
+Hey {recipient_display_name}!
+
+{mencioner_display_name} le mencionó en una publicación en {title}.
+
+{url}
+
+---
+
+{content}
+
```

Hey {recipient\_display\_name}!<br /><br />{mencioner\_display\_name} <del>te</del><ins>le</ins> mencionó en una publicación en {title}.<br /><br />{url}<br /><br />---<br /><br />{content}<br />

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mencioner_display_name} te mencionó en {title}
+{mencioner_display_name} le mencionó en {title}
```

{mencioner\_display\_name} <del>te</del><ins>le</ins> mencionó en {title}

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
-{count, plural, one {{users} respondiste a esto.} other {{users} respondísteis a esto.}}
+{count, plural, one {{users} respondiste a esto} other {{users} respondísteis a esto}}
```

{count, plural, one {{users} respondiste a <del>esto.}</del><ins>esto}</ins> other {{users} respondísteis a <del>esto.}}</del><ins>esto}}</ins>

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


### `flarum-pusher`

#### [`flarum-pusher.forum.discussion_list.show_updates_text`](https://weblate.rob006.net/translate/flarum/flarum-pusher/es@formal/?q=context%3A%3D%22flarum-pusher.forum.discussion_list.show_updates_text%22)

> {count, plural, one {Show # updated discussion} other {Show # updated discussions}}

```diff
-{count, plural, one {Mostrar # discusión actualizada} other {Mostrar # discusiones actualizadas}}
+Mostrar {count} discusión actualizada|Mostrar {count} discusiones actualizadas
```

<del>{count, plural, one {Mostrar</del><ins>Mostrar</ins> <del>#</del><ins>{count}</ins> discusión<del> actualizada} other</del> <del>{Mostrar</del><ins>actualizada\|Mostrar</ins> <del>#</del><ins>{count}</ins> discusiones <del>actualizadas}}</del><ins>actualizadas</ins>


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
-Hey {recipient_display_name}!
-
-{poster_display_name} hizo una publicación en una discusión que estás siguiendo: {title}.
-
-Para ver la nueva actividad, consulte el siguiente enlace:
-{url}
-
----
-
-{content}
-
----
-
-No recibirás más notificaciones sobre esta discusión hasta que estés al tanto de las novedades.
-
+Hey {recipient_display_name}!
+
+{poster_display_name} hizo una publicación en una discusión que usted está siguiendo: {title}.
+
+Para ver la nueva actividad, consulte el siguiente enlace:
+{url}
+
+---
+
+{content}
+
+---
+
+No recibirá más notificaciones sobre esta discusión hasta que haya más actualizaciones.
+
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


### `flarum-suspend`

#### [`flarum-suspend.forum.notifications.user_suspended_text`](https://weblate.rob006.net/translate/flarum/flarum-suspend/es@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_suspended_text%22)

> You have been suspended for {timeReadable}

```diff
-Te han suspendido durante {timeReadable}
+{username} le ha suspendido durante {timeReadable}
```

<del>Te</del><ins>{username}</ins> <del>han</del><ins>le ha</ins> suspendido durante {timeReadable}

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum/flarum-suspend/es@formal/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
-Te han quitado la suspensión
+{username} le ha quitado la suspensión
```

<del>Te</del><ins>{username}</ins> <del>han</del><ins>le ha</ins> quitado la suspensión

#### [`flarum-suspend.forum.suspend_user.title`](https://weblate.rob006.net/translate/flarum/flarum-suspend/es@formal/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.title%22)

> Suspend {username}

```diff
-Suspender a {username}
+Suspender a {user}
```

Suspender a <del>{username}</del><ins>{user}</ins>


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
+=> flarum-tags.ref.create_tag
```

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

#### [`flarum-tags.forum.choose_tags.edit_title`](https://weblate.rob006.net/translate/flarum/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.choose_tags.edit_title%22)

> Edit Tags for {title}

```diff
-Editar las etiquetas para {title}
+Editar las etiquetas para '{title}'
```

Editar las etiquetas para <del>{title}</del><ins>'{title}'</ins>

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
-Introduce el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
-
+Introduzca el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.
+
```

<del>Introduce</del><ins>Introduzca</ins> el nombre de alguna clase de &lt;a&gt;FontAwesome&lt;/a&gt;, &lt;em&gt;incluyendo&lt;/em&gt; el prefijo &lt;code&gt;fas fa-&lt;/code&gt;.<br />

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
-Consulta las <a>reglas de validación de Laravel</a>. Ej: "string|min:5" o "url".
-
+Consulte las <a>reglas de validación de Laravel</a>. Ej: "string|min:5" o "url".
+
```

<del>Consulta</del><ins>Consulte</ins> las &lt;a&gt;reglas de validación de Laravel&lt;/a&gt;. Ej: "string\|min:5" o "url".<br />

#### [`fof-masquerade.forum.alerts.profile-completion-required`](https://weblate.rob006.net/translate/flarum/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.forum.alerts.profile-completion-required%22)

> Please complete the necessary profile fields below.
>

```diff
-Por favor completa los campos del perfil de usuario.
-
+Por favor complete los campos del perfil de usuario.
+
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

#### [`fof-polls.forum.days_remaining`](https://weblate.rob006.net/translate/flarum/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.days_remaining%22)

> Poll ends {time}.

```diff
-La encuesta termina en {time}.
+La encuesta termina en {hora}.
```

La encuesta termina en <del>{time}.</del><ins>{hora}.</ins>

#### [`fof-polls.forum.modal.max`](https://weblate.rob006.net/translate/flarum/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.modal.max%22)

> You can have a maximum of {max} answers

```diff
-Puede tener un máximo de {max} respuestas
+Puede tener un máximo de 10 respuestas
```

Puede tener un máximo de <del>{max}</del><ins>10</ins> respuestas


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

#### [`fof-webhooks.admin.errors.service_not_found`](https://weblate.rob006.net/translate/flarum/fof-webhooks/es@formal/?q=context%3A%3D%22fof-webhooks.admin.errors.service_not_found%22)

> The service "{service}" cannot be found.

```diff
-No se puede encontrar el servicio "{service}".
+El servicio '{service}' no puede ser encontrado.
```

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
