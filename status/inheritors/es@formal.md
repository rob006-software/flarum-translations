# Spanish (formal) inherited translations differences

Translations for Spanish (formal) (`es@formal`) are inherited from Spanish informal variant, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **357** are translated differently and **0** are
translated only in `es@formal`. Altogether they cover **21** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [285](#core) |
| `datlechin-birthdays` | [9](#datlechin-birthdays) |
| `flarum-akismet` | [1](#flarum-akismet) |
| `flarum-emoji` | [1](#flarum-emoji) |
| `flarum-extension-manager` | [11](#flarum-extension-manager) |
| `flarum-likes` | [4](#flarum-likes) |
| `flarum-lock` | [5](#flarum-lock) |
| `flarum-mentions` | [8](#flarum-mentions) |
| `flarum-sticky` | [3](#flarum-sticky) |
| `flarum-subscriptions` | [4](#flarum-subscriptions) |
| `flarum-tags` | [9](#flarum-tags) |
| `fof-links` | [1](#fof-links) |
| `fof-masquerade` | [3](#fof-masquerade) |
| `fof-pages` | [2](#fof-pages) |
| `fof-polls` | [2](#fof-polls) |
| `fof-reactions` | [1](#fof-reactions) |
| `fof-socialprofile` | [2](#fof-socialprofile) |
| `fof-upload` | [2](#fof-upload) |
| `fof-user-bio` | [2](#fof-user-bio) |
| `fof-webhooks` | [1](#fof-webhooks) |
| `michaelbelgium-discussion-views` | [1](#michaelbelgium-discussion-views) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Spanish informal variant (`-` line) and the translation from `es@formal` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.advanced.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.description%22)

> Configure advanced settings for your forum.

```diff
-Editar ajustes avanzados para tu foro.
+Configura los ajustes avanzados de tu foro.
```

<del>Editar</del><ins>Configura los</ins> ajustes avanzados <del>para</del><ins>de</ins> tu foro.

#### [`core.admin.advanced.fontawesome.cdn_url_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.cdn_url_help%22)

> Full URL to the FontAwesome CSS file on a CDN

```diff
-URL entera hacia el archivo CSS FontAwesome en una CDN
+URL completa del archivo CSS de FontAwesome en una CDN
```

URL <del>entera hacia</del><ins>completa</ins> <del>el</del><ins>del</ins> archivo CSS<ins> de</ins> FontAwesome en una CDN

#### [`core.admin.advanced.fontawesome.cdn_url_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.cdn_url_label%22)

> CDN URL

```diff
-CDN URL
+URL de la CDN
```

<del>CDN </del>URL<ins> de la CDN</ins>

#### [`core.admin.advanced.fontawesome.config_override.help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.config_override.help%22)

> FontAwesome settings are currently set in your config.php file and cannot be changed here.

```diff
-Las configuraciones de FontAwesome están en el archivo config.php y no pueden ser cambiadas acá.
+Los ajustes de FontAwesome están definidos en tu archivo config.php y no se pueden cambiar aquí.
```

<del>Las</del><ins>Los</ins> <del>configuraciones</del><ins>ajustes</ins> de FontAwesome están<ins> definidos</ins> en <del>el</del><ins>tu</ins> archivo config.php y no <del>pueden</del><ins>se</ins> <del>ser</del><ins>pueden</ins> <del>cambiadas</del><ins>cambiar</ins> <del>acá.</del><ins>aquí.</ins>

#### [`core.admin.advanced.fontawesome.config_override.label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.config_override.label%22)

> Config Override

```diff
-Anular configuración
+Ajustes sobrescritos
```

#### [`core.admin.advanced.fontawesome.forced_style_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.forced_style_help%22)

> Force every icon to a particular FontAwesome style, e.g. "fa-duotone fa-light" or "fa-regular". Replaces the style declared by core and extensions (brand icons are never changed). Your icon source has to be able to supply the style: the bundled icons are FontAwesome Free, which only covers a few hundred icons outside the solid style, so forcing anything else on them leaves most icons blank. Every style is available with a FontAwesome Pro CDN or Kit. Leave empty to disable.

```diff
-Fuerza todos los iconos a utilizar un estilo concreto de FontAwesome, por ejemplo, **"fa-duotone fa-light"** o **"fa-regular"**. Esto sustituye el estilo definido por el núcleo y las extensiones. Los iconos de marcas nunca se modifican. La fuente de iconos que utilices debe ser compatible con el estilo seleccionado. Los iconos incluidos por defecto pertenecen a **FontAwesome Free**, que solo dispone de unos pocos cientos de iconos fuera del estilo **solid**. Por tanto, si fuerzas otro estilo, muchos iconos podrían quedar en blanco. Todos los estilos están disponibles utilizando una **CDN o Kit de FontAwesome Pro**. Déjalo vacío para desactivar esta opción.
+Fuerza un estilo concreto de FontAwesome para todos los iconos, por ejemplo, "fa-duotone fa-light" o "fa-regular". Sustituye el estilo definido por el núcleo y las extensiones (los iconos de marcas nunca se modifican). El origen de los iconos debe ofrecer ese estilo: los iconos incluidos pertenecen a FontAwesome Free, que solo incluye unos cientos de iconos fuera del estilo sólido, por lo que forzar otro estilo hará que la mayoría no se muestren. Todos los estilos están disponibles con una CDN o un Kit de FontAwesome Pro. Deja este campo vacío para desactivar esta opción.
```

Fuerza <del>todos los iconos a utilizar </del>un estilo concreto de <del>FontAwesome,</del><ins>FontAwesome para todos los iconos,</ins> por ejemplo, <del>\*\*"fa-duotone</del><ins>"fa-duotone</ins> <del>fa-light"\*\*</del><ins>fa-light"</ins> o<del> \*\*"fa-regular"\*\*.</del> <del>Esto</del><ins>"fa-regular".</ins> <del>sustituye</del><ins>Sustituye</ins> el estilo definido por el núcleo y las <del>extensiones.</del><ins>extensiones</ins> <del>Los</del><ins>(los</ins> iconos de marcas nunca se <del>modifican.</del><ins>modifican).</ins> <del>La</del><ins>El</ins> <del>fuente</del><ins>origen</ins> de<del> iconos</del> <del>que</del><ins>los</ins> <del>utilices</del><ins>iconos</ins> debe<del> ser compatible con</del> <del>el</del><ins>ofrecer</ins> <del>estilo</del><ins>ese</ins> <del>seleccionado.</del><ins>estilo:</ins> <del>Los</del><ins>los</ins> iconos incluidos<del> por defecto</del> pertenecen a <del>\*\*FontAwesome</del><ins>FontAwesome</ins> <del>Free\*\*,</del><ins>Free,</ins> que solo<del> dispone</del> <del>de</del><ins>incluye</ins> unos<del> pocos</del> cientos de iconos fuera del estilo <del>\*\*solid\*\*.</del><ins>sólido,</ins> <del>Por</del><ins>por</ins> <del>tanto,</del><ins>lo</ins> <del>si</del><ins>que</ins> <del>fuerzas</del><ins>forzar</ins> otro <del>estilo,</del><ins>estilo</ins> <del>muchos</del><ins>hará</ins> <del>iconos</del><ins>que</ins> <del>podrían</del><ins>la</ins> <del>quedar</del><ins>mayoría</ins> <del>en</del><ins>no</ins> <del>blanco.</del><ins>se muestren.</ins> Todos los estilos están disponibles <del>utilizando</del><ins>con</ins> una <del>\*\*CDN</del><ins>CDN</ins> o<ins> un</ins> Kit de FontAwesome <del>Pro\*\*.</del><ins>Pro.</ins> <del>Déjalo</del><ins>Deja este campo</ins> vacío para desactivar esta opción.

#### [`core.admin.advanced.fontawesome.forced_style_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.forced_style_label%22)

> Forced Icon Style

```diff
-Estilo de icono forzado
+Forzar estilo de los iconos
```

<del>Estilo</del><ins>Forzar estilo</ins> de <del>icono</del><ins>los</ins> <del>forzado</del><ins>iconos</ins>

#### [`core.admin.advanced.fontawesome.kit_url_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.kit_url_help%22)

> Your FontAwesome Kit script URL (from kit.fontawesome.com)

```diff
-Tu URL del script FontAwesome Kit (desde kit.fontawesome.com)
+URL del script de tu Kit de FontAwesome (de kit.fontawesome.com)
```

<del>Tu </del>URL del script <del>FontAwesome</del><ins>de tu</ins> Kit <del>(desde</del><ins>de FontAwesome (de</ins> kit.fontawesome.com)

#### [`core.admin.advanced.fontawesome.preview.button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.preview.button%22)

> Preview Icons

```diff
-Vista previa Íconos
+Vista previa de los iconos
```

Vista previa <del>Íconos</del><ins>de los iconos</ins>

#### [`core.admin.advanced.fontawesome.preview.help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.preview.help%22)

> Verify your FontAwesome setup. A rendered icon means that tier is available; a broken box means it is not loaded.

```diff
-Compruebe tu configuración de FontAwesome. Un ícono que carga significa que se encuentran disponible; un cuadrado significa que no cargó.
+Comprueba los ajustes de FontAwesome. Si se muestra un icono, ese nivel está disponible; si aparece un recuadro, no se ha cargado.
```

<del>Compruebe</del><ins>Comprueba</ins> <del>tu</del><ins>los</ins> <del>configuración</del><ins>ajustes</ins> de FontAwesome. <del>Un</del><ins>Si</ins> <del>ícono</del><ins>se</ins> <del>que</del><ins>muestra</ins> <del>carga</del><ins>un</ins> <del>significa</del><ins>icono,</ins> <del>que</del><ins>ese</ins> <del>se</del><ins>nivel</ins> <del>encuentran</del><ins>está</ins> disponible; <del>un</del><ins>si</ins> <del>cuadrado</del><ins>aparece</ins> <del>significa</del><ins>un</ins> <del>que</del><ins>recuadro,</ins> no <del>cargó.</del><ins>se ha cargado.</ins>

#### [`core.admin.advanced.fontawesome.preview.label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.preview.label%22)

> Icon Preview

```diff
-Vista previa Ícono
+Vista previa de los iconos
```

Vista previa <del>Ícono</del><ins>de los iconos</ins>

#### [`core.admin.advanced.fontawesome.preview.pro_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.preview.pro_label%22)

> Pro only

```diff
-Sólo Pro
+Solo Pro
```

<del>Sólo</del><ins>Solo</ins> Pro

#### [`core.admin.advanced.fontawesome.section_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.section_label%22)

> FontAwesome Icons

```diff
-Íconos FontAwesome
+Iconos de FontAwesome
```

<del>Íconos</del><ins>Iconos de</ins> FontAwesome

#### [`core.admin.advanced.fontawesome.source_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.source_help%22)

> Choose how FontAwesome icons are loaded. Local uses bundled fonts, CDN loads from a CDN, and Kit uses FontAwesome Kits with custom icons.

```diff
-Elige como los íconos de FontAwesome se inician. Local utiliza fuentes incluidas en el paquete, CDN carga desde una CDN y Kit utiliza kits de FontAwesome con íconos personalizados.
+Elige cómo se cargan los iconos de FontAwesome. Local utiliza las fuentes incluidas en el paquete, CDN las carga desde una CDN y Kit utiliza kits de FontAwesome con iconos personalizados.
```

Elige <del>como</del><ins>cómo</ins> <del>los</del><ins>se</ins> <del>íconos</del><ins>cargan</ins> <del>de</del><ins>los</ins> <del>FontAwesome</del><ins>iconos</ins> <del>se</del><ins>de</ins> <del>inician.</del><ins>FontAwesome.</ins> Local utiliza<ins> las</ins> fuentes incluidas en el paquete, CDN<ins> las</ins> carga desde una CDN y Kit utiliza kits de FontAwesome con <del>íconos</del><ins>iconos</ins> personalizados.

#### [`core.admin.advanced.fontawesome.source_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.source_label%22)

> Icon Source

```diff
-Origen del Ícono
+Origen de los iconos
```

Origen <del>del</del><ins>de</ins> <del>Ícono</del><ins>los iconos</ins>

#### [`core.admin.advanced.fontawesome.source_local`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.fontawesome.source_local%22)

> Local (Bundled)

```diff
-Local (Paquete)
+Local (incluido en el paquete)
```

Local <del>(Paquete)</del><ins>(incluido en el paquete)</ins>

#### [`core.admin.advanced.maintenance.bisect.help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect.help%22)

> Helps to identify the extension causing some issue you observed. This automatically puts the forum in maintenance mode (low) until the process is over.

```diff
-Ayuda a identificar la extensión causante de los problemas. Esto automáticamente coloca el foro en modo mantenimiento (cerrado) hasta que el proceso termine.
+Ayuda a identificar la extensión que causa el problema. Activa automáticamente el modo de mantenimiento bajo del foro hasta que termine el proceso.
```

Ayuda a identificar la extensión <del>causante</del><ins>que</ins> <del>de</del><ins>causa</ins> <del>los</del><ins>el</ins> <del>problemas.</del><ins>problema.</ins> <del>Esto</del><ins>Activa</ins> automáticamente<del> coloca</del> el<del> foro en</del> modo<ins> de</ins> mantenimiento <del>(cerrado)</del><ins>bajo del foro</ins> hasta que <del>el</del><ins>termine</ins> <del>proceso</del><ins>el</ins> <del>termine.</del><ins>proceso.</ins>

#### [`core.admin.advanced.maintenance.bisect.label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect.label%22)

> Extension Bisect

```diff
-Bisección de extensión
+Bisección de extensiones
```

Bisección de <del>extensión</del><ins>extensiones</ins>

#### [`core.admin.advanced.maintenance.bisect_modal.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.description%22)

> This puts the forum in maintenance mode (low) until the process is over. In each step some extensions will be disabled until we find the one causing the issue. So do not be surprised to see missing features or different theme design. Keep this page open, and try to reproduce the issue after each step in a separate page. You can always come back to this page if you mistakenly close it.
>

```diff
-Esto coloca el foro en mantenimiento (cerrado) hasta que el proceso termine. En cada etapa algunas extensiones serán desactivadas hasta encontrar la que causa problemas. No te sorprendas si falta alguna función o si cambia el tema del diseño. Mantén está página abierta, y trata de reproducir el error luego de cada etapa en una pestaña separada. Siempre podrás regresar a esta página si por error se cierra.
+Activa el modo de mantenimiento bajo del foro hasta que termine el proceso. En cada paso se desactivarán algunas extensiones hasta encontrar la que causa el problema. No te sorprendas si faltan funciones o cambia el diseño del tema. Mantén esta página abierta e intenta reproducir el error después de cada paso en otra pestaña. Siempre puedes volver a esta página si la cierras por error.

```

<del>Esto coloca</del><ins>Activa</ins> el <del>foro</del><ins>modo</ins> <del>en</del><ins>de</ins> mantenimiento <del>(cerrado)</del><ins>bajo del foro</ins> hasta que <del>el</del><ins>termine</ins> <del>proceso</del><ins>el</ins> <del>termine.</del><ins>proceso.</ins> En cada <del>etapa</del><ins>paso</ins> <del>algunas</del><ins>se</ins> <del>extensiones</del><ins>desactivarán</ins> <del>serán</del><ins>algunas</ins> <del>desactivadas</del><ins>extensiones</ins> hasta encontrar la que causa <del>problemas.</del><ins>el problema.</ins> No te sorprendas si<del> falta</del> <del>alguna</del><ins>faltan</ins> <del>función</del><ins>funciones</ins> o<del> si</del> cambia el <del>tema</del><ins>diseño</ins> del <del>diseño.</del><ins>tema.</ins> Mantén <del>está</del><ins>esta</ins> página<del> abierta,</del> <del>y</del><ins>abierta</ins> <del>trata</del><ins>e</ins> <del>de</del><ins>intenta</ins> reproducir el error <del>luego</del><ins>después</ins> de cada <del>etapa</del><ins>paso</ins> en<del> una</del> <del>pestaña</del><ins>otra</ins> <del>separada.</del><ins>pestaña.</ins> Siempre <del>podrás</del><ins>puedes</ins> <del>regresar</del><ins>volver</ins> a esta página si <del>por</del><ins>la</ins> <del>error</del><ins>cierras</ins> <del>se</del><ins>por</ins> <del>cierra.</del><ins>error.</ins><br />

#### [`core.admin.advanced.maintenance.bisect_modal.issue_question`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.issue_question%22)

> Does the issue still occur?

```diff
-¿Sigue el error?
+¿Sigue produciéndose el error?
```

¿Sigue <ins>produciéndose </ins>el error?

#### [`core.admin.advanced.maintenance.bisect_modal.issue_question_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.issue_question_help%22)

> Try reproducing the issue in a separate page and answer based on the result.

```diff
-Intentá reproducir el error en una pestaña por separado y respondé basándote en el resultado.
+Intenta reproducir el error en otra pestaña y responde según el resultado.
```

<del>Intentá</del><ins>Intenta</ins> reproducir el error en <del>una</del><ins>otra</ins> pestaña<del> por separado</del> y<del> respondé</del> <del>basándote</del><ins>responde</ins> <del>en</del><ins>según</ins> el resultado.

#### [`core.admin.advanced.maintenance.bisect_modal.result_description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.result_description%22)

> Forum is no longer in maintenance mode. Extension bisect is over. Based on your responses to each step, the cause of the issue is the following extension:
>

```diff
-El foro no ya no está en modo mantenimiento. La bisección de extensiones terminó. Basado en tus respuestas en cada etapa, la causa del problema es la siguiente extensión:
+El foro ya no está en modo de mantenimiento. La bisección de extensiones ha terminado. Según tus respuestas en cada paso, la causa del problema es la siguiente extensión:

```

El foro <del>no </del>ya no está en modo<ins> de</ins> mantenimiento. La bisección de extensiones <del>terminó.</del><ins>ha</ins> <del>Basado</del><ins>terminado.</ins> <del>en</del><ins>Según</ins> tus respuestas en cada <del>etapa,</del><ins>paso,</ins> la causa del problema es la siguiente extensión:<br />

#### [`core.admin.advanced.maintenance.bisect_modal.start_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.start_button%22)

> Start bisect

```diff
-Comenzar bisección
+Iniciar bisección
```

<del>Comenzar</del><ins>Iniciar</ins> bisección

#### [`core.admin.advanced.maintenance.bisect_modal.steps_left`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.steps_left%22)

> Steps left: {steps}

```diff
-Etapas faltantes: {steps}
+Pasos restantes: {steps}
```

<del>Etapas</del><ins>Pasos</ins> <del>faltantes:</del><ins>restantes:</ins> {steps}

#### [`core.admin.advanced.maintenance.bisect_modal.stop_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.stop_button%22)

> Stop bisect

```diff
-Parar bisección
+Detener bisección
```

<del>Parar</del><ins>Detener</ins> bisección

#### [`core.admin.advanced.maintenance.bisect_modal.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.title%22)

> Extension Bisect

```diff
-Bisección de Extensión
+Bisección de extensiones
```

Bisección de <del>Extensión</del><ins>extensiones</ins>

#### [`core.admin.advanced.maintenance.bisect_modal.total_steps`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.bisect_modal.total_steps%22)

> This will take around {steps} steps.

```diff
-Esto tomará alrededor de {steps} etapas.
+El proceso requerirá unos {steps} pasos.
```

<del>Esto</del><ins>El</ins> <del>tomará</del><ins>proceso</ins> <del>alrededor</del><ins>requerirá</ins> <del>de</del><ins>unos</ins> {steps} <del>etapas.</del><ins>pasos.</ins>

#### [`core.admin.advanced.maintenance.config_override.help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.config_override.help%22)

> You can still change these settings here, but they will not take effect until you set &lt;code&gt;offline&lt;/code&gt; to &lt;code&gt;0&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file.

```diff
-Aún podés cambiar las configuraciones acá, pero no van a hacer efecto hasta que edites <code>offline</code> a <code>0</code> en tu archivo <code>config.php</code>.
+Puedes cambiar estos ajustes aquí, pero no tendrán efecto hasta que establezcas <code>offline</code> en <code>0</code> en tu archivo <code>config.php</code>.
```

<del>Aún podés</del><ins>Puedes</ins> cambiar <del>las</del><ins>estos</ins> <del>configuraciones</del><ins>ajustes</ins> <del>acá,</del><ins>aquí,</ins> pero no<del> van a</del> <del>hacer</del><ins>tendrán</ins> efecto hasta que <del>edites</del><ins>establezcas</ins> &lt;code&gt;offline&lt;/code&gt; <del>a</del><ins>en</ins> &lt;code&gt;0&lt;/code&gt; en tu archivo &lt;code&gt;config.php&lt;/code&gt;.

#### [`core.admin.advanced.maintenance.config_override.label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.config_override.label%22)

> Your &lt;code&gt;config.php&lt;/code&gt; file is overriding these settings.

```diff
-Tu archivo <code>config.php</code> está sobre escribiendo estas configuraciones.
+Tu archivo <code>config.php</code> sobrescribe estos ajustes.
```

Tu archivo &lt;code&gt;config.php&lt;/code&gt; <del>está sobre escribiendo</del><ins>sobrescribe</ins> <del>estas</del><ins>estos</ins> <del>configuraciones.</del><ins>ajustes.</ins>

#### [`core.admin.advanced.maintenance.help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.help%22)

> Put your forum in maintenance mode to prevent users from accessing it.

```diff
-Coloca tu foro en modo mantenimiento para evitar que los usuarios accedan.
+Activa el modo de mantenimiento del foro para impedir el acceso de los usuarios.
```

<del>Coloca tu foro</del><ins>Activa</ins> <del>en</del><ins>el</ins> modo<ins> de</ins> mantenimiento<ins> del foro</ins> para <del>evitar</del><ins>impedir</ins> <del>que</del><ins>el</ins> <del>los</del><ins>acceso</ins> <del>usuarios</del><ins>de</ins> <del>accedan.</del><ins>los usuarios.</ins>

#### [`core.admin.advanced.maintenance.options.high`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.options.high%22)

> High maintenance mode. No one can access the forum (can only be enabled through config.php)

```diff
-Modo mantenimiento alto. Nadie puede acceder al foro (sólo puede activarse desde config.php)
+Modo de mantenimiento alto. Nadie puede acceder al foro (solo puede activarse desde config.php)
```

Modo <ins>de </ins>mantenimiento alto. Nadie puede acceder al foro <del>(sólo</del><ins>(solo</ins> puede activarse desde config.php)

#### [`core.admin.advanced.maintenance.options.low`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.options.low%22)

> Low maintenance mode. Admins can access the forum.

```diff
-Modo mantenimiento bajo. Administradores pueden acceder al foro.
+Modo de mantenimiento bajo. Los administradores pueden acceder al foro.
```

Modo <ins>de </ins>mantenimiento bajo. <del>Administradores</del><ins>Los administradores</ins> pueden acceder al foro.

#### [`core.admin.advanced.maintenance.options.safe`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.options.safe%22)

> Safe mode. No extensions are booted and only admins can access the forum.

```diff
-Modo seguro. Las extensiones no se activan y sólo administradores pueden acceder al foro.
+Modo seguro. No se inician extensiones y solo los administradores pueden acceder al foro.
```

Modo seguro. <del>Las extensiones no</del><ins>No</ins> se <del>activan</del><ins>inician extensiones</ins> y <del>sólo</del><ins>solo los</ins> administradores pueden acceder al foro.

#### [`core.admin.advanced.maintenance.safe_mode_extensions`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.safe_mode_extensions%22)

> Extensions allowed to boot during safe mode

```diff
-Extensiones permitidas para activarse durante el modo seguro
+Extensiones que pueden iniciarse en modo seguro
```

Extensiones <del>permitidas para</del><ins>que</ins> <del>activarse</del><ins>pueden</ins> <del>durante</del><ins>iniciarse</ins> <del>el</del><ins>en</ins> modo seguro

#### [`core.admin.advanced.maintenance.safe_mode_extensions_override_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.maintenance.safe_mode_extensions_override_help%22)

> This setting is overridden by the &lt;code&gt;safe\_mode\_extensions&lt;/code&gt; key in your &lt;code&gt;config.php&lt;/code&gt; file. (&lt;b&gt;{extensions}&lt;/b&gt;)

```diff
-Está configuración se sobre escribe con la llave <code>safe_mode_extensions</code> en el archivo <code>config.php</code>. (<b>{extensions}</b>)
+La clave <code>safe_mode_extensions</code> de tu archivo <code>config.php</code> sobrescribe este ajuste. (<b>{extensions}</b>)
```

<del>Está configuración se sobre</del><ins>La</ins> <del>escribe</del><ins>clave</ins> <del>con</del><ins>&lt;code&gt;safe\_mode\_extensions&lt;/code&gt;</ins> <del>la</del><ins>de</ins> <del>llave</del><ins>tu</ins> <del>&lt;code&gt;safe\_mode\_extensions&lt;/code&gt;</del><ins>archivo</ins> <del>en</del><ins>&lt;code&gt;config.php&lt;/code&gt;</ins> <del>el</del><ins>sobrescribe</ins> <del>archivo</del><ins>este</ins> <del>&lt;code&gt;config.php&lt;/code&gt;.</del><ins>ajuste.</ins> (&lt;b&gt;{extensions}&lt;/b&gt;)

#### [`core.admin.advanced.pgsql.search_configuration`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.pgsql.search_configuration%22)

> Search configuration to use

```diff
-Buscar configuración para usar
+Configuración de búsqueda que se utilizará
```

#### [`core.admin.advanced.queue.backoff_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.backoff_help%22)

> Time to wait before retrying a failed job. Default is 0 seconds.

```diff
-Tiempo de espera antes de volver a intentar un job que falla. El valor predeterminado es 0 segundos.
+Tiempo de espera antes de reintentar una tarea fallida. El valor predeterminado es 0 segundos.
```

Tiempo de espera antes de <del>volver a intentar un</del><ins>reintentar</ins> <del>job</del><ins>una</ins> <del>que</del><ins>tarea</ins> <del>falla.</del><ins>fallida.</ins> El valor predeterminado es 0 segundos.

#### [`core.admin.advanced.queue.backoff_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.backoff_label%22)

> Backoff (seconds)

```diff
-Retroceso (segundos)
+Espera entre reintentos (segundos)
```

<del>Retroceso</del><ins>Espera entre reintentos</ins> (segundos)

#### [`core.admin.advanced.queue.pause_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.pause_help%22)

> While paused, workers stop picking up new jobs from the affected queues — jobs accumulate until processing is resumed. Jobs that are already running are not affected.

```diff
-Mientras estén en pausa, los procesos de trabajo dejarán de recoger nuevas tareas de las colas afectadas. Las tareas se acumularán hasta que se reanude el procesamiento. Las tareas que ya estén en ejecución no se verán afectadas.
+Mientras el procesamiento esté en pausa, los procesos de trabajo dejarán de recoger nuevas tareas de las colas afectadas. Las tareas se acumularán hasta que se reanude el procesamiento. Las tareas que ya estén en curso no se verán afectadas.
```

Mientras <del>estén</del><ins>el procesamiento esté</ins> en pausa, los procesos de trabajo dejarán de recoger nuevas tareas de las colas afectadas. Las tareas se acumularán hasta que se reanude el procesamiento. Las tareas que ya estén en <del>ejecución</del><ins>curso</ins> no se verán afectadas.

#### [`core.admin.advanced.queue.pause_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.pause_label%22)

> Pause queue processing

```diff
-Pausar el procesamiento de la cola
+Pausar el procesamiento de las colas
```

Pausar el procesamiento de <del>la</del><ins>las</ins> <del>cola</del><ins>colas</ins>

#### [`core.admin.advanced.queue.rest_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.rest_help%22)

> Time to wait between processing jobs. Default is 0 seconds.

```diff
-Tiempo de espera entre tareas de procesamiento. El valor predeterminado es 0 segundos.
+Tiempo de espera entre el procesamiento de una tarea y la siguiente. El valor predeterminado es 0 segundos.
```

Tiempo de espera entre <del>tareas</del><ins>el procesamiento</ins> de <del>procesamiento.</del><ins>una tarea y la siguiente.</ins> El valor predeterminado es 0 segundos.

#### [`core.admin.advanced.queue.rest_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.rest_label%22)

> Rest Time (seconds)

```diff
-Tiempo de descanso (segundos)
+Tiempo entre tareas (segundos)
```

Tiempo <del>de</del><ins>entre</ins> <del>descanso</del><ins>tareas</ins> (segundos)

#### [`core.admin.advanced.queue.retries_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.retries_help%22)

> Maximum number of times to attempt a job before marking it as failed. Default is 1.

```diff
-Número máximo de intentos de job antes de que falle. Por defecto 1.
+Número máximo de intentos de ejecución de una tarea antes de marcarla como fallida. El valor predeterminado es 1.
```

Número máximo de intentos de <del>job</del><ins>ejecución de una tarea</ins> antes de <del>que</del><ins>marcarla</ins> <del>falle.</del><ins>como</ins> <del>Por</del><ins>fallida.</ins> <del>defecto</del><ins>El valor predeterminado es</ins> 1.

#### [`core.admin.advanced.queue.retries_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.retries_label%22)

> Job Retries

```diff
-Reintentos Job
+Reintentos de las tareas
```

Reintentos <del>Job</del><ins>de las tareas</ins>

#### [`core.admin.advanced.queue.sync_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.sync_help%22)

> For better performance and user experience, consider using the database queue driver. Learn more in the documentation.

```diff
-Para un mejor rendimiento y experiencia de usuario, considere usar el controlador de cola de base de datos. Obtenga más información en la documentación.
+Para mejorar el rendimiento y la experiencia de usuario, considera utilizar el controlador de cola de base de datos. Consulta la documentación para obtener más información.
```

Para <del>un</del><ins>mejorar</ins> <del>mejor</del><ins>el</ins> rendimiento y<ins> la</ins> experiencia de usuario, <del>considere</del><ins>considera</ins> <del>usar</del><ins>utilizar</ins> el controlador de cola de base de datos. <del>Obtenga</del><ins>Consulta</ins> <del>más</del><ins>la</ins> <del>información</del><ins>documentación</ins> <del>en</del><ins>para</ins> <del>la</del><ins>obtener</ins> <del>documentación.</del><ins>más información.</ins>

#### [`core.admin.advanced.queue.sync_info`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.sync_info%22)

> Your forum is using the synchronous queue driver. Jobs are processed immediately in the main process thread.

```diff
-Tu foro está usando controlador de cola síncrono. Jobs se procesan inmediatamente en el hilo principal del proceso.
+Tu foro utiliza el controlador de cola síncrono. Las tareas se procesan inmediatamente en el hilo del proceso principal.
```

Tu foro <del>está</del><ins>utiliza</ins> <del>usando</del><ins>el</ins> controlador de cola síncrono. <del>Jobs</del><ins>Las tareas</ins> se procesan inmediatamente en el hilo<del> principal</del> del <del>proceso.</del><ins>proceso principal.</ins>

#### [`core.admin.advanced.queue.timeout_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.timeout_help%22)

> Maximum time a single job can run before timing out. Default is 60 seconds.

```diff
-Máximo tiempo que puede correr un job antes de TimeOut. Por defecto son 60 segundos.
+Tiempo máximo que puede ejecutarse una tarea antes de agotar el tiempo de espera. El valor predeterminado es 60 segundos.
```

<del>Máximo</del><ins>Tiempo</ins> <del>tiempo</del><ins>máximo</ins> que puede <del>correr</del><ins>ejecutarse</ins> <del>un</del><ins>una</ins> <del>job</del><ins>tarea</ins> antes de <del>TimeOut.</del><ins>agotar</ins> <del>Por</del><ins>el</ins> <del>defecto</del><ins>tiempo</ins> <del>son</del><ins>de espera. El valor predeterminado es</ins> 60 segundos.

#### [`core.admin.advanced.queue.timeout_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.queue.timeout_label%22)

> Job Timeout (seconds)

```diff
-Job Timeout (segundos)
+Tiempo máximo de ejecución de una tarea (segundos)
```

<del>Job</del><ins>Tiempo</ins> <del>Timeout</del><ins>máximo de ejecución de una tarea</ins> (segundos)

#### [`core.admin.advanced.search.cjk_mode_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.search.cjk_mode_help%22)

> Enable if your forum is primarily in Chinese, Japanese, or Korean. The database's word-based search cannot match parts of CJK text, so this switches to a substring match that can. It is slower on very large forums, where configuring a CJK-aware fulltext parser at the database level (such as MySQL/MariaDB's ngram parser) is a faster alternative.

```diff
-Actívalo si tu foro está principalmente en chino, japonés o coreano. La búsqueda por palabras de la base de datos no puede encontrar coincidencias parciales en textos CJK, por lo que esta opción cambia a una búsqueda por subcadenas que sí puede hacerlo. Es más lenta en foros muy grandes, donde configurar un analizador de texto completo compatible con CJK a nivel de base de datos (como el analizador ngram de MySQL/MariaDB) es una alternativa más rápida.
+Activa esta opción si tu foro está principalmente en chino, japonés o coreano. La búsqueda por palabras de la base de datos no encuentra coincidencias en fragmentos de texto CJK, por lo que esta opción utiliza una búsqueda por subcadenas que sí lo permite. En foros muy grandes es más lenta; una alternativa más rápida es configurar en la base de datos un analizador de texto completo compatible con CJK, como el analizador ngram de MySQL/MariaDB.
```

<del>Actívalo</del><ins>Activa esta opción</ins> si tu foro está principalmente en chino, japonés o coreano. La búsqueda por palabras de la base de datos no<del> puede</del> <del>encontrar</del><ins>encuentra</ins> coincidencias<del> parciales</del> en <del>textos</del><ins>fragmentos de texto</ins> CJK, por lo que esta opción<del> cambia</del> <del>a</del><ins>utiliza</ins> una búsqueda por subcadenas que sí <del>puede</del><ins>lo</ins> <del>hacerlo.</del><ins>permite.</ins> <del>Es</del><ins>En foros muy grandes es</ins> más <del>lenta</del><ins>lenta;</ins> <del>en</del><ins>una</ins> <del>foros</del><ins>alternativa</ins> <del>muy</del><ins>más</ins> <del>grandes,</del><ins>rápida</ins> <del>donde</del><ins>es</ins> configurar<ins> en la base de datos</ins> un analizador de texto completo compatible con<del> CJK a nivel de base de</del> <del>datos</del><ins>CJK,</ins> <del>(como</del><ins>como</ins> el analizador ngram de<del> MySQL/MariaDB) es una alternativa más</del> <del>rápida.</del><ins>MySQL/MariaDB.</ins>

#### [`core.admin.advanced.search.cjk_mode_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.search.cjk_mode_label%22)

> Optimise search for CJK languages

```diff
-Optimizar la búsqueda para idiomas CJK (chino, japonés y coreano)
+Optimizar la búsqueda para idiomas CJK
```

Optimizar la búsqueda para idiomas CJK<del> (chino, japonés y coreano)</del>

#### [`core.admin.advanced.search.driver_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.search.driver_text%22)

> Select a driver to be used for searching this model.

```diff
-Seleccione un controlador que se utilizará para buscar este modelo.
+Selecciona el controlador que se utilizará para buscar en este modelo.
```

<del>Seleccione</del><ins>Selecciona</ins> <del>un</del><ins>el</ins> controlador que se utilizará para buscar<ins> en</ins> este modelo.

#### [`core.admin.advanced.search.no_other_drivers`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.advanced.search.no_other_drivers%22)

> No search drivers are available yet. Install a search driver extension to be able to configure it.

```diff
-Aún no hay controladores de búsqueda disponibles. Instale una extensión de controlador de búsqueda para poder configurarlo.
+Todavía no hay controladores de búsqueda disponibles. Instala una extensión de controlador de búsqueda para poder configurarlo.
```

<del>Aún</del><ins>Todavía</ins> no hay controladores de búsqueda disponibles. <del>Instale</del><ins>Instala</ins> una extensión de controlador de búsqueda para poder configurarlo.

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
-No se pudieron cargar los anuncios. Inténtelo de nuevo más tarde.
+No se han podido cargar los anuncios. Inténtalo de nuevo más tarde.
```

No se <del>pudieron</del><ins>han podido</ins> cargar los anuncios. <del>Inténtelo</del><ins>Inténtalo</ins> de nuevo más tarde.

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
-Probar de nuevo
+Reintentar
```

#### [`core.admin.appearance.color_scheme_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.color_scheme_label%22)

> Color Scheme (default)

```diff
-Esquema de colores (predeterminado)
+Combinación de colores (predeterminada)
```

<del>Esquema</del><ins>Combinación</ins> de colores <del>(predeterminado)</del><ins>(predeterminada)</ins>

#### [`core.admin.appearance.color_schemes.auto_mode_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.color_schemes.auto_mode_label%22)

> User system or configured preference

```diff
-Sistema de usuario o preferencia configurada
+Preferencia del sistema del usuario o preferencia configurada
```

<del>Sistema</del><ins>Preferencia</ins> <del>de</del><ins>del sistema del</ins> usuario o preferencia configurada

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

#### [`core.admin.appearance.custom_styles_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_styles_heading%22)

> Custom Styles

```diff
-Estilos Personalizados
+Estilos personalizados
```

Estilos <del>Personalizados</del><ins>personalizados</ins>

#### [`core.admin.appearance.custom_styles_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.custom_styles_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's default styles.

```diff
-Personaliza la apariencia de tu foro añadiendo tu propio código Less/CSS, que se aplicará sobre los estilos por defecto de Flarum.
+Personaliza la apariencia de tu foro añadiendo tu propio código LESS/CSS, que se aplicará sobre los estilos predeterminados de Flarum.
```

Personaliza la apariencia de tu foro añadiendo tu propio código <del>Less/CSS,</del><ins>LESS/CSS,</ins> que se aplicará sobre los estilos<del> por</del> <del>defecto</del><ins>predeterminados</ins> de Flarum.

#### [`core.admin.appearance.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.description%22)

> Customize your forum's colors, logos, and other variables.

```diff
-Personaliza los colores, logotipos y otras variables de tu foro.
+Personaliza los colores, logotipos y otras opciones de tu foro.
```

Personaliza los colores, logotipos y otras <del>variables</del><ins>opciones</ins> de tu foro.

#### [`core.admin.appearance.edit_css_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.edit_css_button%22)

> Edit Custom CSS

```diff
-Editar los Estilos Personalizados
+Editar los estilos personalizados
```

Editar los <del>Estilos</del><ins>estilos</ins> <del>Personalizados</del><ins>personalizados</ins>

#### [`core.admin.appearance.enter_hex_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.enter_hex_message%22)

> Please enter a hexadecimal color code.

```diff
-Por favor, introduce un código hexadecimal de color.
+Introduce un código de color hexadecimal.
```

<del>Por favor, introduce</del><ins>Introduce</ins> un código<del> hexadecimal</del> de <del>color.</del><ins>color hexadecimal.</ins>

#### [`core.admin.appearance.favicon_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_heading%22)

> Favicon

```diff
-Icono del sitio
+<em>Favicon</em>
```

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Sube una imagen para que sea mostrada como icono de acceso directo al foro.
+Sube una imagen para que se muestre como icono de acceso directo al foro.
```

Sube una imagen para que <del>sea</del><ins>se</ins> <del>mostrada</del><ins>muestre</ins> como icono de acceso directo al foro.

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Sube una imagen para que sea mostrada en lugar del título del foro.
+Sube una imagen para que se muestre en lugar del título del foro.
```

Sube una imagen para que <del>sea</del><ins>se</ins> <del>mostrada</del><ins>muestre</ins> en lugar del título del foro.

#### [`core.admin.appearance.show_theme_selector_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.appearance.show_theme_selector_help%22)

> Let users switch between the available color schemes from a control in the header.

```diff
-Permite a los usuarios cambiar entre los esquemas de color disponibles mediante un control en la cabecera.
+Permite a los usuarios cambiar entre las combinaciones de colores disponibles mediante un control en la cabecera.
```

Permite a los usuarios cambiar entre <del>los</del><ins>las</ins> <del>esquemas</del><ins>combinaciones</ins> de <del>color</del><ins>colores</ins> disponibles mediante un control en la cabecera.

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
-Enviar un correo electrónico a los administradores cuando se detecte una extensión abandonada recientemente durante la verificación semanal
+Enviar un correo electrónico a los administradores cuando la comprobación semanal detecte una nueva extensión abandonada
```

Enviar un correo electrónico a los administradores cuando <del>se</del><ins>la comprobación semanal</ins> detecte una<ins> nueva</ins> extensión abandonada<del> recientemente durante la verificación semanal</del>

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
-No se pudo obtener la lista de extensiones abandonadas. Inténtelo de nuevo más tarde.
+No se ha podido obtener la lista de extensiones abandonadas. Inténtalo de nuevo más tarde.
```

No se <del>pudo</del><ins>ha podido</ins> obtener la lista de extensiones abandonadas. <del>Inténtelo</del><ins>Inténtalo</ins> de nuevo más tarde.

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
-Lista de extensiones abandonadas actualizada. Se encontraron {count} extension/es instaladas en tu foro.
+Lista de extensiones abandonadas actualizada. Número de extensiones encontradas en tu foro: {count}.
```

Lista de extensiones abandonadas actualizada. <del>Se encontraron</del><ins>Número</ins> <del>{count}</del><ins>de</ins> <del>extension/es</del><ins>extensiones</ins> <del>instaladas</del><ins>encontradas</ins> en tu <del>foro.</del><ins>foro: {count}.</ins>

#### [`core.admin.basics.avatar_driver_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.avatar_driver_text%22)

> Select a driver that should be used for users' avatars when no user-uploaded avatar is available. By default, no avatar will be displayed when a user has not uploaded one.

```diff
-Seleccione el controlador que se utilizará para los avatares de los usuarios cuando no haya ninguno subido. Por defecto, no se mostrará ningún avatar si el usuario no ha subido uno.
+Selecciona el controlador que se utilizará para los avatares cuando el usuario no haya subido uno. Por defecto, no se mostrará ningún avatar en ese caso.
```

<del>Seleccione</del><ins>Selecciona</ins> el controlador que se utilizará para los avatares<del> de</del> <del>los</del><ins>cuando</ins> <del>usuarios</del><ins>el</ins> <del>cuando</del><ins>usuario</ins> no haya <del>ninguno</del><ins>subido</ins> <del>subido.</del><ins>uno.</ins> Por defecto, no se mostrará ningún avatar<del> si el usuario no</del> <del>ha</del><ins>en</ins> <del>subido</del><ins>ese</ins> <del>uno.</del><ins>caso.</ins>

#### [`core.admin.basics.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.description%22)

> Set your forum title, language, and other basic settings.

```diff
-Configura el título, el idioma y otras configuraciones básicas de tu foro.
+Configura el título, el idioma y los demás ajustes básicos de tu foro.
```

Configura el título, el idioma y <del>otras</del><ins>los</ins> <del>configuraciones</del><ins>demás</ins> <del>básicas</del><ins>ajustes básicos</ins> de tu foro.

#### [`core.admin.basics.display_name_driver_options.username`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_driver_options.username%22)

> Username

```diff
-Nombre Usuario
+Nombre de usuario
```

Nombre <del>Usuario</del><ins>de usuario</ins>

#### [`core.admin.basics.display_name_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_heading%22)

> User Display Name

```diff
-Nombre para mostrar
+Nombre público del usuario
```

Nombre <del>para</del><ins>público</ins> <del>mostrar</del><ins>del usuario</ins>

#### [`core.admin.basics.display_name_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.display_name_text%22)

> Select the driver that should be used for users' display names. By default, the username is shown.

```diff
-Selecciona el controlador que debe utilizarse para mostrar los nombres. Por defecto, se muestra el nombre de usuario.
+Selecciona el controlador que se utilizará para los nombres públicos de los usuarios. Por defecto, se muestra el nombre de usuario.
```

Selecciona el controlador que <del>debe</del><ins>se</ins> <del>utilizarse</del><ins>utilizará</ins> para <del>mostrar</del><ins>los nombres públicos de</ins> los <del>nombres.</del><ins>usuarios.</ins> Por defecto, se muestra el nombre de usuario.

#### [`core.admin.basics.forum_description_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.forum_description_text%22)

> Enter a short sentence or two that describes your forum. This will appear in the meta tag and show up in search engines.

```diff
-Introduce una o dos frases que describan tu foro. Estas aparecerán en el "metatag" y se mostrarán en los buscadores.
+Introduce una o dos frases breves que describan tu foro. Aparecerán en la "metaetiqueta" y se mostrarán en los buscadores.
```

Introduce una o dos frases <ins>breves </ins>que describan tu foro.<del> Estas</del> <del>aparecerán</del><ins>Aparecerán</ins> en <del>el</del><ins>la</ins> <del>"metatag"</del><ins>"metaetiqueta"</ins> y se mostrarán en los buscadores.

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Elige cuál es la portada que los usuarios verán al llegar al foro.
+Elige la primera página que verán los usuarios al visitar tu foro.
```

Elige <del>cuál es </del>la <del>portada</del><ins>primera página</ins> que<ins> verán</ins> los usuarios<del> verán</del> al <del>llegar</del><ins>visitar</ins> <del>al</del><ins>tu</ins> foro.

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-Driver de Slug: {model}
+Controlador de slug: {model}
```

<del>Driver</del><ins>Controlador</ins> de <del>Slug:</del><ins>slug:</ins> {model}

#### [`core.admin.basics.slug_driver_options.discussions.utf8`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_options.discussions.utf8%22)

> ID with UTF-8 slug

```diff
-ID con UTF-8 slug
+ID con slug UTF-8
```

ID con <del>UTF-8 </del>slug<ins> UTF-8</ins>

#### [`core.admin.basics.slug_driver_options.users.default`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_options.users.default%22)

> Username

```diff
-Nombre usuario
+Nombre de usuario
```

Nombre <ins>de </ins>usuario

#### [`core.admin.basics.slug_driver_options.users.id_with_display_name`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.slug_driver_options.users.id_with_display_name%22)

> ID with Display Name

```diff
-ID con Nombre
+ID con nombre público
```

ID con <del>Nombre</del><ins>nombre público</ins>

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
-Básicos
+Ajustes básicos
```

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los invitados en tu foro.
+Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los visitantes de tu foro.
```

Introduce el texto que se mostrará en la lista de discusiones. Utilízalo para dar la bienvenida a los <del>invitados</del><ins>visitantes</ins> <del>en</del><ins>de</ins> tu foro.

#### [`core.admin.dashboard.clear_cache_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.clear_cache_button%22)

> Clear Cache

```diff
-Limpiar caché
+Vaciar caché
```

<del>Limpiar</del><ins>Vaciar</ins> caché

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
-Info del sistema
+Información del sistema
```

<del>Info</del><ins>Información</ins> del sistema

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
-Falló la copia a portapapeles
+No se ha podido copiar al portapapeles
```

<del>Falló</del><ins>No</ins> <del>la</del><ins>se</ins> <del>copia</del><ins>ha</ins> <del>a</del><ins>podido copiar al</ins> portapapeles

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
-Info del sistema copiada en portapapeles
+Información del sistema copiada al portapapeles
```

<del>Info</del><ins>Información</ins> del sistema copiada <del>en</del><ins>al</ins> portapapeles

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
-Info del sistema
+Información del sistema
```

<del>Info</del><ins>Información</ins> del sistema

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-No se pudo escribir en el sistema de archivos. Verifica los permisos de su sistema de archivos y vuelve a intentarlo. O intenta ejecutar desde la línea de comandos.
+No se ha podido escribir en el sistema de archivos. Comprueba los permisos del sistema de archivos y vuelve a intentarlo. También puedes probar desde la línea de comandos.
```

No se <del>pudo</del><ins>ha podido</ins> escribir en el sistema de archivos. <del>Verifica</del><ins>Comprueba</ins> los permisos<del> de</del> <del>su</del><ins>del</ins> sistema de archivos y vuelve a intentarlo. <del>O</del><ins>También</ins> <del>intenta</del><ins>puedes</ins> <del>ejecutar</del><ins>probar</ins> desde la línea de comandos.

#### [`core.admin.dashboard.queue_paused_all_warning`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.queue_paused_all_warning%22)

> All queue processing is paused. Jobs will accumulate until it is resumed.

```diff
-El procesamiento de todas las colas está pausado. Las tareas se acumularán hasta que se reanude.
+El procesamiento de todas las colas está en pausa. Las tareas se acumularán hasta que se reanude.
```

El procesamiento de todas las colas está <del>pausado.</del><ins>en pausa.</ins> Las tareas se acumularán hasta que se reanude.

#### [`core.admin.dashboard.queue_paused_warning`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.queue_paused_warning%22)

> Queue processing is paused (queue: {queues}). Jobs will accumulate until it is resumed.

```diff
-El procesamiento de la cola está pausado (cola: {queues}). Las tareas se acumularán hasta que se reanude.
+El procesamiento de las colas está en pausa (colas: {queues}). Las tareas se acumularán hasta que se reanude.
```

El procesamiento de <del>la</del><ins>las</ins> <del>cola</del><ins>colas</ins> está <del>pausado</del><ins>en</ins> <del>(cola:</del><ins>pausa (colas:</ins> {queues}). Las tareas se acumularán hasta que se reanude.

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
-Programador
+Programador de tareas
```

Programador<ins> de tareas</ins>

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
-Panel
+Panel de información
```

Panel<ins> de información</ins>

#### [`core.admin.dashboard.toggle_advanced_page_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.dashboard.toggle_advanced_page_button%22)

> Toggle Advanced Page

```diff
-Abrir Página Avanzada
+Abrir la página de ajustes avanzados
```

Abrir <del>Página</del><ins>la</ins> <del>Avanzada</del><ins>página de ajustes avanzados</ins>

#### [`core.admin.database-version-warning.below-recommended-detail`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.database-version-warning.below-recommended-detail%22)

> Your {server} server is running version &lt;code&gt;{version}&lt;/code&gt;. This is supported, but Flarum recommends {server} &lt;code&gt;{recommended}&lt;/code&gt; or later for the best performance and to stay on a maintained release. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-Tu servidor {server} está ejecutando la versión \<code>{version}\</code>. Esta versión es compatible, pero Flarum recomienda {server} \<code>{recommended}\</code> o posterior para obtener el mejor rendimiento y utilizar una versión con mantenimiento activo. Consulta la \<link>documentación de Flarum\</link> para obtener más información.
+Tu servidor {server} utiliza la versión <code>{version}</code>. Esta versión es compatible, pero Flarum recomienda {server} <code>{recommended}</code> o posterior para obtener el mejor rendimiento y utilizar una versión que siga recibiendo mantenimiento. Consulta la <link>documentación de Flarum</link> para obtener más información.

```

Tu servidor {server} <del>está ejecutando</del><ins>utiliza</ins> la versión <del>\\&lt;code&gt;{version}\\&lt;/code&gt;.</del><ins>&lt;code&gt;{version}&lt;/code&gt;.</ins> Esta versión es compatible, pero Flarum recomienda {server} <del>\\&lt;code&gt;{recommended}\\&lt;/code&gt;</del><ins>&lt;code&gt;{recommended}&lt;/code&gt;</ins> o posterior para obtener el mejor rendimiento y utilizar una versión <del>con</del><ins>que</ins> <del>mantenimiento</del><ins>siga</ins> <del>activo.</del><ins>recibiendo mantenimiento.</ins> Consulta la <del>\\&lt;link&gt;documentación</del><ins>&lt;link&gt;documentación</ins> de <del>Flarum\\&lt;/link&gt;</del><ins>Flarum&lt;/link&gt;</ins> para obtener más información.<br />

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
-Personaliza la apariencia de tu foro añadiendo tu propio código Less/CSS que será aplicado sobre los <a>estilos por defecto</a> de Flarum.
+Personaliza la apariencia de tu foro añadiendo tu propio código LESS/CSS, que se aplicará sobre los <a>estilos predeterminados</a> de Flarum.
```

Personaliza la apariencia de tu foro añadiendo tu propio código <del>Less/CSS</del><ins>LESS/CSS,</ins> que <del>será</del><ins>se</ins> <del>aplicado</del><ins>aplicará</ins> sobre los &lt;a&gt;estilos<del> por</del> <del>defecto&lt;/a&gt;</del><ins>predeterminados&lt;/a&gt;</ins> de Flarum.

#### [`core.admin.edit_group.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.edit_group.delete_confirmation%22)

> Are you sure you want to delete this group? The group members will NOT be deleted.

```diff
-¿Estás seguro de que deseas eliminar este grupo? Los usuarios que pertenecen al grupo NO serán eliminados.
+¿Seguro que quieres eliminar este grupo? Los usuarios que pertenecen al grupo NO se eliminarán.
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar este grupo? Los usuarios que pertenecen al grupo NO <del>serán</del><ins>se</ins> <del>eliminados.</del><ins>eliminarán.</ins>

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Configura el controlador, la configuración y las direcciones que usará tu foro para enviar correo electrónico.
+Configura el controlador, los ajustes y las direcciones que utilizará tu foro para enviar correos electrónicos.
```

Configura el controlador, <del>la</del><ins>los</ins> <del>configuración</del><ins>ajustes</ins> y las direcciones que <del>usará</del><ins>utilizará</ins> tu foro para enviar <del>correo</del><ins>correos</ins> <del>electrónico.</del><ins>electrónicos.</ins>

#### [`core.admin.email.format.plain_option`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.format.plain_option%22)

> Plain Text

```diff
-Texto Plano
+Texto sin formato
```

Texto <del>Plano</del><ins>sin formato</ins>

#### [`core.admin.email.format_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.format_heading%22)

> Outgoing Email Format

```diff
-Formato de Email enviado
+Formato de los correos enviados
```

Formato de <del>Email</del><ins>los</ins> <del>enviado</del><ins>correos enviados</ins>

#### [`core.admin.email.format_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.format_help%22)

> Choose the format that outgoing emails will be sent in. The recommended option is &lt;code&gt;multipart&lt;/code&gt;, as this will allow your user's email client to display the most appropriate format.

```diff
-Elige el formato en el que se enviarán los correos electrónicos salientes. La opción recomendada es <code>multiparte</code>, ya que esto permitirá que el cliente de Email del usuario muestre el formato más adecuado.
+Elige el formato de los correos electrónicos salientes. Se recomienda <code>multiparte</code> para que el cliente de correo electrónico del usuario pueda mostrar el formato más adecuado.
```

Elige el formato <del>en el que se enviarán</del><ins>de</ins> los correos electrónicos salientes.<del> La opción recomendada es &lt;code&gt;multiparte&lt;/code&gt;,</del> <del>ya</del><ins>Se</ins> <del>que</del><ins>recomienda</ins> <del>esto</del><ins>&lt;code&gt;multiparte&lt;/code&gt;</ins> <del>permitirá</del><ins>para</ins> que el cliente de <del>Email</del><ins>correo electrónico</ins> del usuario <del>muestre</del><ins>pueda mostrar</ins> el formato más adecuado.

#### [`core.admin.email.mail_smtp_verify_peer_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.mail_smtp_verify_peer_help%22)

> Verify the server's SSL certificate when using TLS or SSL encryption. Disable only if your mail server uses a self-signed certificate.

```diff
-Verifique el certificado SSL del servidor al usar el cifrado TLS o SSL. Desactive esta opción solo si su servidor de email utiliza un certificado autofirmado.
+Verifica el certificado SSL del servidor al utilizar cifrado TLS o SSL. Desactiva esta opción solo si tu servidor de correo electrónico utiliza un certificado autofirmado.
```

<del>Verifique</del><ins>Verifica</ins> el certificado SSL del servidor al<del> usar</del> <del>el</del><ins>utilizar</ins> cifrado TLS o SSL. <del>Desactive</del><ins>Desactiva</ins> esta opción solo si <del>su</del><ins>tu</ins> servidor de <del>email</del><ins>correo electrónico</ins> utiliza un certificado autofirmado.

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

#### [`core.admin.email.postmark_description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.postmark_description%22)

> Send email via Postmark's HTTP API. Optionally specify a message stream to use a non-default stream.

```diff
-Envía correos electrónicos mediante la API HTTP de Postmark. Opcionalmente, puedes especificar un flujo de mensajes para utilizar uno distinto del predeterminado.
+Envía correos electrónicos a través de la API HTTP de Postmark. Puedes especificar un flujo de mensajes distinto del predeterminado.
```

Envía correos electrónicos <del>mediante</del><ins>a través de</ins> la API HTTP de Postmark.<del> Opcionalmente,</del> <del>puedes</del><ins>Puedes</ins> especificar un flujo de mensajes<del> para utilizar uno</del> distinto del predeterminado.

#### [`core.admin.email.postmark_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.postmark_heading%22)

> Postmark Settings

```diff
-Configuración Postmark
+Ajustes de Postmark
```

<del>Configuración</del><ins>Ajustes de</ins> Postmark

#### [`core.admin.email.smtp_description`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.smtp_description%22)

> Configure SMTP connection settings. Common configurations: Port 587 with TLS, or Port 465 with SSL.

```diff
-Configurar los ajustes de conexión SMTP. Configuraciones comunes: Puerto 587 con TLS o Puerto 465 con SSL.
+Configura los ajustes de conexión SMTP. Configuraciones habituales: puerto 587 con TLS o puerto 465 con SSL.
```

<del>Configurar</del><ins>Configura</ins> los ajustes de conexión SMTP. Configuraciones <del>comunes:</del><ins>habituales:</ins> <del>Puerto</del><ins>puerto</ins> 587 con TLS o <del>Puerto</del><ins>puerto</ins> 465 con SSL.

#### [`core.admin.email.smtp_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.email.smtp_heading%22)

> SMTP Settings

```diff
-Configuración SMTP
+Ajustes de SMTP
```

<del>Configuración</del><ins>Ajustes de</ins> SMTP

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
-Esta extensión ha sido reemplazada por {replacement}. Considere migrar al paquete de reemplazo.
+Esta extensión ha sido sustituida por {replacement}. Considera migrar al paquete que la sustituye.
```

Esta extensión ha sido <del>reemplazada</del><ins>sustituida</ins> por {replacement}. <del>Considere</del><ins>Considera</ins> migrar al paquete <del>de</del><ins>que</ins> <del>reemplazo.</del><ins>la sustituye.</ins>

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
-Habilita la extensión para ver y cambiar la configuración.
+Activa la extensión para ver y modificar sus ajustes.
```

<del>Habilita</del><ins>Activa</ins> la extensión para ver y <del>cambiar</del><ins>modificar</ins> <del>la</del><ins>sus</ins> <del>configuración.</del><ins>ajustes.</ins>

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

#### [`core.admin.extension.reset_settings.button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.reset_settings.button%22)

> Reset Settings

```diff
-Resetear configuraciones
+Restablecer ajustes
```

#### [`core.admin.extension.reset_settings.confirm_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.reset_settings.confirm_button%22)

> Reset

```diff
-Recetear
+Restablecer
```

#### [`core.admin.extension.reset_settings.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.reset_settings.title%22)

> Reset Settings

```diff
-Resetear configuraciones
+Restablecer ajustes
```

#### [`core.admin.extension.reset_settings.title_extension`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.reset_settings.title_extension%22)

> Reset {extensionTitle} Settings

```diff
-Restablecer {extensionTitle} Configuración
+Restablecer los ajustes de {extensionTitle}
```

Restablecer <del>{extensionTitle}</del><ins>los</ins> <del>Configuración</del><ins>ajustes de {extensionTitle}</ins>

#### [`core.admin.extension.reset_settings.warning`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.reset_settings.warning%22)

> This action is irreversible. The settings below will be permanently deleted from the database and revert to their defaults. This extension's data will not be affected.

```diff
-Esta acción es irreversible. La configuración que se muestra a continuación se eliminará permanentemente de la base de datos y volverá a sus valores predeterminados. Los datos de esta extensión no se verán afectados.
+Esta acción no se puede deshacer. Los ajustes que se muestran a continuación se eliminarán permanentemente de la base de datos y volverán a sus valores predeterminados. Los datos de esta extensión no se verán afectados.
```

Esta acción <del>es</del><ins>no</ins> <del>irreversible.</del><ins>se</ins> <del>La</del><ins>puede</ins> <del>configuración</del><ins>deshacer. Los ajustes</ins> que se <del>muestra</del><ins>muestran</ins> a continuación se <del>eliminará</del><ins>eliminarán</ins> permanentemente de la base de datos y <del>volverá</del><ins>volverán</ins> a sus valores predeterminados. Los datos de esta extensión no se verán afectados.

#### [`core.admin.extension.safe_mode_warning`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extension.safe_mode_warning%22)

> Safe mode is currently enabled. Extensions are not booted and their settings are therefore inaccessible.

```diff
-El modo seguro está activado. Las extensiones no se inician y, por lo tanto, su configuración es inaccesible.
+El modo seguro está activado. Las extensiones no se inician y, por tanto, sus ajustes no están disponibles.
```

El modo seguro está activado. Las extensiones no se inician y, por <del>lo </del>tanto, <del>su</del><ins>sus</ins> <del>configuración</del><ins>ajustes</ins> <del>es</del><ins>no</ins> <del>inaccesible.</del><ins>están disponibles.</ins>

#### [`core.admin.extensions-health-widget.all_healthy`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.all_healthy%22)

> All extensions are healthy.

```diff
-Todas las extensiones están sanas.
+Todas las extensiones están en buen estado.
```

Todas las extensiones están <del>sanas.</del><ins>en buen estado.</ins>

#### [`core.admin.extensions-health-widget.section_abandoned_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_abandoned_heading%22)

> Needs Attention

```diff
-Necesita Atención
+Requieren atención
```

#### [`core.admin.extensions-health-widget.section_abandoned_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_abandoned_help%22)

> These extensions are no longer maintained or may have compatibility issues. Consider updating, replacing, or removing them.

```diff
-Estas extensiones ya no reciben mantenimiento o pueden presentar problemas de compatibilidad. Considere actualizarlas, reemplazarlas o eliminarlas.
+Estas extensiones ya no reciben mantenimiento o pueden presentar problemas de compatibilidad. Considera actualizarlas, sustituirlas o eliminarlas.
```

Estas extensiones ya no reciben mantenimiento o pueden presentar problemas de compatibilidad. <del>Considere</del><ins>Considera</ins> actualizarlas, <del>reemplazarlas</del><ins>sustituirlas</ins> o eliminarlas.

#### [`core.admin.extensions-health-widget.section_disabled_empty`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_disabled_empty%22)

> All extensions are enabled.

```diff
-Todas las extensiones están habilitadas.
+Todas las extensiones están activadas.
```

Todas las extensiones están <del>habilitadas.</del><ins>activadas.</ins>

#### [`core.admin.extensions-health-widget.section_disabled_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_disabled_heading%22)

> Disabled

```diff
-Deshabilitada
+Desactivadas
```

#### [`core.admin.extensions-health-widget.section_disabled_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_disabled_help%22)

> These extensions are installed but not currently enabled. Enable them from their settings page, or remove them if no longer needed.

```diff
-Estas extensiones están instaladas pero no están habilitadas. Habilítelas desde su página de configuración o elimínelas si ya no las necesita.
+Estas extensiones están instaladas, pero no están activadas. Actívalas desde su página de ajustes o elimínalas si ya no las necesitas.
```

Estas extensiones están <del>instaladas</del><ins>instaladas,</ins> pero no están <del>habilitadas.</del><ins>activadas.</ins> <del>Habilítelas</del><ins>Actívalas</ins> desde su página de <del>configuración</del><ins>ajustes</ins> o <del>elimínelas</del><ins>elimínalas</ins> si ya no las <del>necesita.</del><ins>necesitas.</ins>

#### [`core.admin.extensions-health-widget.section_suggested_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_suggested_heading%22)

> Suggested

```diff
-Sugerido
+Sugeridas
```

#### [`core.admin.extensions-health-widget.section_suggested_help`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.section_suggested_help%22)

> Flarum extensions can add optional extra features by specifying other extensions or packages. These might add more features or integrations.

```diff
-Las extensiones de Flarum pueden añadir funciones adicionales opcionales especificando otras extensiones o paquetes. Estas pueden añadir más funciones o integraciones.
+Las extensiones de Flarum pueden ofrecer funciones opcionales mediante otras extensiones o paquetes. Estos pueden añadir funciones o integraciones.
```

Las extensiones de Flarum pueden <del>añadir</del><ins>ofrecer</ins> funciones<del> adicionales</del> opcionales <del>especificando</del><ins>mediante</ins> otras extensiones o paquetes. <del>Estas</del><ins>Estos</ins> pueden añadir<del> más</del> funciones o integraciones.

#### [`core.admin.extensions-health-widget.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.extensions-health-widget.title%22)

> Extension Health

```diff
-Salud de extensión
+Estado de las extensiones
```

<del>Salud</del><ins>Estado</ins> de <del>extensión</del><ins>las extensiones</ins>

#### [`core.admin.failed_jobs.meta`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.failed_jobs.meta%22)

> Queue {queue} · failed {time}

```diff
-Cola {queue} · falló {time}
+Cola {queue} · tarea fallida {time}
```

Cola {queue} · <del>falló</del><ins>tarea fallida</ins> {time}

#### [`core.admin.failed_jobs.retry_all`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.failed_jobs.retry_all%22)

> Retry all

```diff
-Reintentar todo
+Reintentar todas
```

Reintentar <del>todo</del><ins>todas</ins>

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Por favor, espera...
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

#### [`core.admin.permissions.remove_scope_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.remove_scope_confirmation%22)

> Are you sure you want to remove the {scope} scope?

```diff
-¿Estás seguro de eliminar el alcance de {scope}?
+¿Seguro que quieres eliminar el ámbito de {scope}?
```

<del>¿Estás</del><ins>¿Seguro</ins> <del>seguro</del><ins>que</ins> <del>de</del><ins>quieres</ins> eliminar el <del>alcance</del><ins>ámbito</ins> de {scope}?

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
-Retirar alcance de {scope}
+Eliminar el ámbito de {scope}
```

<del>Retirar</del><ins>Eliminar</ins> <del>alcance</del><ins>el ámbito</ins> de {scope}

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

#### [`core.admin.queue_widget.failed`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.queue_widget.failed%22)

> Failed

```diff
-Fallido
+Fallida
```

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

#### [`core.admin.users.grid.columns.user_actions.edit_user.tooltip`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.admin.users.grid.columns.user_actions.edit_user.tooltip%22)

> Edit {username}

```diff
-Editar {username}
+Editar a {username}
```

Editar <ins>a </ins>{username}

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

#### [`core.api.invalid_username_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.api.invalid_username_message%22)

> The username may only contain letters, numbers, and dashes. With at least one letter.

```diff
-El nombre de usuario solo puede contener letras, números y guiones. Con al menos una letra.
+El nombre de usuario solo puede contener letras, números y guiones, y debe incluir al menos una letra.
```

El nombre de usuario solo puede contener letras, números y <del>guiones.</del><ins>guiones,</ins> <del>Con</del><ins>y debe incluir</ins> al menos una letra.

#### [`core.email.abandoned_extensions.body_intro`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.abandoned_extensions.body_intro%22)

> The following installed extension(s) have been flagged as abandoned:

```diff
-La siguiente/s extension/es instaladas han sido marcadas como abandonadas:
+Las siguientes extensiones instaladas se han marcado como abandonadas:
```

<del>La</del><ins>Las</ins> <del>siguiente/s</del><ins>siguientes</ins> <del>extension/es</del><ins>extensiones</ins> instaladas <del>han</del><ins>se</ins> <del>sido</del><ins>han</ins> <del>marcadas</del><ins>marcado</ins> como abandonadas:

#### [`core.email.abandoned_extensions.body_outro`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.abandoned_extensions.body_outro%22)

> Please review these extensions and consider migrating to alternatives where available.

```diff
-Por favor, revise estas extensiones y considere la posibilidad de migrar a alternativas cuando estén disponibles.
+Revisa estas extensiones y considera migrar a otras alternativas cuando estén disponibles.
```

<del>Por favor, revise</del><ins>Revisa</ins> estas extensiones y<del> considere la posibilidad</del> <del>de</del><ins>considera</ins> migrar a<ins> otras</ins> alternativas cuando estén disponibles.

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
-Acción requerida: se detectó extension/es abandonada/s
+Acción necesaria: se han detectado extensiones abandonadas
```

Acción <del>requerida:</del><ins>necesaria:</ins> se <del>detectó</del><ins>han</ins> <del>extension/es</del><ins>detectado</ins> <del>abandonada/s</del><ins>extensiones abandonadas</ins>

#### [`core.email.activate_account.body`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.activate_account.body%22)

> Someone (hopefully you!) has signed up to {forum} with this email address.
>
> If this was you, simply click the following link and your account will be activated:
> {url}
>
> If you did not sign up, please ignore this email.
>

```diff
-Alguien (¡Esperemos que tú!) se ha registrado en {forum} con esta dirección de email.
+Alguien (¡esperamos que tú!) se ha registrado en {forum} con esta dirección de correo electrónico.

-Si fuiste tu, simplemente hacé clic en el siguiente enlace y tu cuenta se activará:
+Si has sido tú, pulsa el siguiente enlace para activar tu cuenta:
 {url}

-Si no te has registrado, ignora este email.
+Si no te has registrado, ignora este correo electrónico.

```

Alguien <del>(¡Esperemos</del><ins>(¡esperamos</ins> que tú!) se ha registrado en {forum} con esta dirección de <del>email.</del><ins>correo electrónico.</ins><br /><br />Si<del> fuiste tu,</del> <del>simplemente</del><ins>has</ins> <del>hacé</del><ins>sido</ins> <del>clic</del><ins>tú,</ins> <del>en</del><ins>pulsa</ins> el siguiente enlace<del> y</del> <del>tu</del><ins>para</ins> <del>cuenta</del><ins>activar</ins> <del>se</del><ins>tu</ins> <del>activará:</del><ins>cuenta:</ins><br />{url}<br /><br />Si no te has registrado, ignora este <del>email.</del><ins>correo electrónico.</ins><br />

#### [`core.email.confirm_email.body`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.confirm_email.body%22)

> Someone (hopefully you!) has changed their email address on {forum} to this one.
>
> If this was you, simply click the following link and your email will be confirmed:
> {url}
>
> If this was not you, please ignore this email.
>

```diff
-Alguien (¡esperamos que hayas sido tú!) ha cambiado su dirección de correo electrónico en {forum} por esta.
+Alguien (¡esperamos que tú!) ha cambiado su dirección de correo electrónico en {forum} por esta.

-Si has sido tú, simplemente haz clic en el siguiente enlace para confirmar tu correo electrónico:
+Si has sido tú, pulsa el siguiente enlace para confirmar tu correo electrónico:
 {url}

-Si no has sido tú, puedes ignorar este correo.
+Si no has sido tú, ignora este correo electrónico.

```

Alguien (¡esperamos que <del>hayas sido </del>tú!) ha cambiado su dirección de correo electrónico en {forum} por esta.<br /><br />Si has sido tú,<del> simplemente haz clic</del> <del>en</del><ins>pulsa</ins> el siguiente enlace para confirmar tu correo electrónico:<br />{url}<br /><br />Si no has sido tú,<del> puedes</del> <del>ignorar</del><ins>ignora</ins> este <del>correo.</del><ins>correo electrónico.</ins><br />

#### [`core.email.greeting`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.greeting%22)

> Hey {displayName},

```diff
-Ey {displayName},
+Hola {displayName},
```

<del>Ey</del><ins>Hola</ins> {displayName},

#### [`core.email.informational.footer`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.informational.footer%22)

> This email was sent to {userEmail} as an informational service related to your account on \[{forumTitle}\]({forumUrl}).

```diff
-Este email se envió a {userEmail} como un servicio informativo relacionado con su cuenta en [{forumTitle}]({forumUrl}).
+Este correo electrónico se ha enviado a {userEmail} como parte de un servicio informativo relacionado con tu cuenta en [{forumTitle}]({forumUrl}).
```

Este <del>email</del><ins>correo electrónico</ins> se <del>envió</del><ins>ha enviado</ins> a {userEmail} como<ins> parte de</ins> un servicio informativo relacionado con <del>su</del><ins>tu</ins> cuenta en \[{forumTitle}\]({forumUrl}).

#### [`core.email.informational.footer_plain`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.informational.footer_plain%22)

> This email was sent to {userEmail} as an informational service related to your account on {forumTitle}.

```diff
-Este correo electrónico se envió a {userEmail} como un servicio informativo relacionado con su cuenta en {forumTitle}.
+Este correo electrónico se ha enviado a {userEmail} como parte de un servicio informativo relacionado con tu cuenta en {forumTitle}.
```

Este correo electrónico se <del>envió</del><ins>ha enviado</ins> a {userEmail} como<ins> parte de</ins> un servicio informativo relacionado con <del>su</del><ins>tu</ins> cuenta en {forumTitle}.

#### [`core.email.notification.footer.main_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.notification.footer.main_text%22)

> This email was sent to {email} because you are subscribed to "{type}" notifications on \[{forumTitle}\]({forumUrl}).

```diff
-Este email se envió a {email} porque usted está suscrito a notificaciones "{type}" en [{forumTitle}]({forumUrl}).
+Este correo electrónico se ha enviado a {email} porque te has suscrito a las notificaciones "{type}" en [{forumTitle}]({forumUrl}).
```

Este <del>email</del><ins>correo electrónico</ins> se <del>envió</del><ins>ha enviado</ins> a {email} porque <del>usted</del><ins>te</ins> <del>está</del><ins>has</ins> suscrito a<ins> las</ins> notificaciones "{type}" en \[{forumTitle}\]({forumUrl}).

#### [`core.email.notification.footer.main_text_plain`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.notification.footer.main_text_plain%22)

> This email was sent to {email} because you are subscribed to "{type}" notifications on {forumTitle}.

```diff
-Este email se envió a {email} porque usted está suscrito a notificaciones "{type}" en {forumTitle}.
+Este correo electrónico se ha enviado a {email} porque te has suscrito a las notificaciones "{type}" en {forumTitle}.
```

Este <del>email</del><ins>correo electrónico</ins> se <del>envió</del><ins>ha enviado</ins> a {email} porque <del>usted</del><ins>te</ins> <del>está</del><ins>has</ins> suscrito a<ins> las</ins> notificaciones "{type}" en {forumTitle}.

#### [`core.email.notification.footer.unsubscribe_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.notification.footer.unsubscribe_text%22)

> If you'd like to stop receiving this type of notification, \[unsubscribe here\]({unsubscribeLink}).

```diff
-Si desea dejar de recibir este tipo de notificaciones, [cancele la suscripción aquí]({unsubscribeLink}).
+Si quieres dejar de recibir este tipo de notificaciones, [cancela la suscripción aquí]({unsubscribeLink}).
```

Si <del>desea</del><ins>quieres</ins> dejar de recibir este tipo de notificaciones, <del>\[cancele</del><ins>\[cancela</ins> la suscripción aquí\]({unsubscribeLink}).

#### [`core.email.notification.footer.unsubscribe_text_plain`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.notification.footer.unsubscribe_text_plain%22)

> If you'd like to stop receiving this type of notification, unsubscribe here: {unsubscribeLink}

```diff
-Si desea dejar de recibir este tipo de notificaciones, cancele su suscripción aquí: {unsubscribeLink}
+Si quieres dejar de recibir este tipo de notificaciones, cancela tu suscripción aquí: {unsubscribeLink}
```

Si <del>desea</del><ins>quieres</ins> dejar de recibir este tipo de notificaciones, <del>cancele</del><ins>cancela</ins> <del>su</del><ins>tu</ins> suscripción aquí: {unsubscribeLink}

#### [`core.email.reset_password.body`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.reset_password.body%22)

> Someone (hopefully you!) has submitted a forgotten password request for your account on {forum}.
>
> If this was you, click the following link to reset your password:
> {url}
>
> If you do not wish to change your password, just ignore this email and nothing will happen.
>

```diff
-Alguien (¡esperamos que hayas sido tú!) ha solicitado restablecer la contraseña de tu cuenta en {forum}.
+Alguien (¡esperamos que tú!) ha solicitado restablecer la contraseña de tu cuenta en {forum}.

-Si has sido tú, haz clic en el siguiente enlace para restablecer tu contraseña:
+Si has sido tú, pulsa el siguiente enlace para restablecer tu contraseña:
 {url}

-Si no deseas cambiar tu contraseña, simplemente ignora este correo y no ocurrirá nada.
+Si no quieres cambiar tu contraseña, ignora este correo electrónico y no se realizará ningún cambio.

```

Alguien (¡esperamos que <del>hayas sido </del>tú!) ha solicitado restablecer la contraseña de tu cuenta en {forum}.<br /><br />Si has sido tú,<del> haz clic</del> <del>en</del><ins>pulsa</ins> el siguiente enlace para restablecer tu contraseña:<br />{url}<br /><br />Si no <del>deseas</del><ins>quieres</ins> cambiar tu contraseña,<del> simplemente</del> ignora este correo<ins> electrónico</ins> y no <del>ocurrirá</del><ins>se</ins> <del>nada.</del><ins>realizará ningún cambio.</ins><br />

#### [`core.email.send_test.body`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.email.send_test.body%22)

> This is a test email to confirm that your Flarum email configuration is working properly.
>
> If this was you, this email means that your configuration works!
>
> If this was not you, please ignore this email.
>

```diff
-Este es un correo de prueba para confirmar que la configuración de correo electrónico de Flarum funciona correctamente.
+Este es un correo de prueba para confirmar que los ajustes de correo electrónico de Flarum funcionan correctamente.

-Si has sido tú quien ha realizado la prueba, este correo significa que la configuración funciona correctamente.
+Si has solicitado esta prueba, ¡este correo confirma que tus ajustes funcionan!

-Si no has sido tú, puedes ignorar este correo.
+Si no has sido tú, ignora este correo electrónico.

```

Este es un correo de prueba para confirmar que <del>la</del><ins>los</ins> <del>configuración</del><ins>ajustes</ins> de correo electrónico de Flarum <del>funciona</del><ins>funcionan</ins> correctamente.<br /><br />Si has<del> sido tú quien ha</del> <del>realizado</del><ins>solicitado</ins> <del>la</del><ins>esta</ins> prueba, <del>este</del><ins>¡este</ins> correo <del>significa</del><ins>confirma</ins> que<del> la</del> <del>configuración</del><ins>tus</ins> <del>funciona</del><ins>ajustes</ins> <del>correctamente.</del><ins>funcionan!</ins><br /><br />Si no has sido tú,<del> puedes</del> <del>ignorar</del><ins>ignora</ins> este <del>correo.</del><ins>correo electrónico.</ins><br />

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Haz click en el botón de abajo y recibirás por correo electrónico un enlace para restablecer tu contraseña.
+Pulsa el botón de abajo para recibir por correo electrónico un enlace para restablecer tu contraseña.
```

<del>Haz click en</del><ins>Pulsa</ins> el botón de abajo <del>y</del><ins>para</ins> <del>recibirás</del><ins>recibir</ins> por correo electrónico un enlace para restablecer tu contraseña.

#### [`core.forum.composer.preview_tooltip`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer.preview_tooltip%22)

> Preview

```diff
-Vista preliminar
+Vista previa
```

Vista <del>preliminar</del><ins>previa</ins>

#### [`core.forum.composer_discussion.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_discussion.discard_confirmation%22)

> You have not posted your discussion. Do you wish to discard it?

```diff
-Aún no has publicado tu discusión. ¿Estás seguro de que deseas descartarla?
+Aún no has publicado tu discusión. ¿Seguro que quieres descartarla?
```

Aún no has publicado tu discusión. <del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> descartarla?

#### [`core.forum.composer_edit.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.discard_confirmation%22)

> You have not saved your changes. Do you wish to discard them?

```diff
-Aún no has publicado tus cambios. ¿Estás seguro de que deseas descartarlos?
+Aún no has publicado tus cambios. ¿Seguro que quieres descartarlos?
```

Aún no has publicado tus cambios. <del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> descartarlos?

#### [`core.forum.composer_edit.edited_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_edit.edited_message%22)

> Your edit was made.

```diff
-Se realizó tu edición.
+Se han guardado tus cambios.
```

Se <del>realizó</del><ins>han</ins> <del>tu</del><ins>guardado</ins> <del>edición.</del><ins>tus cambios.</ins>

#### [`core.forum.composer_reply.discard_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.discard_confirmation%22)

> You have not posted your reply. Do you wish to discard it?

```diff
-Aún no has publicado tu respuesta. ¿Estás seguro de que desea descartarla?
+Aún no has publicado tu respuesta. ¿Seguro que quieres descartarla?
```

Aún no has publicado tu respuesta. <del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>desea</del><ins>quieres</ins> descartarla?

#### [`core.forum.composer_reply.posted_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.composer_reply.posted_message%22)

> Your reply was posted.

```diff
-Tu respuesta fue publicada.
+Tu respuesta se ha publicado.
```

Tu respuesta <del>fue</del><ins>se</ins> <del>publicada.</del><ins>ha publicado.</ins>

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
-¿Estás seguro de que deseas eliminar esta discusión?
+¿Seguro que quieres eliminar esta discusión?
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar esta discusión?

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
-Si el correo electrónico que ingresaste está registrado en este sitio, te enviaremos un correo electrónico con un enlace para restablecer tu contraseña. Si no aparece pronto, por favor, comprueba la carpeta de correo no deseado (spam).
+Te hemos enviado un correo electrónico con un enlace para restablecer tu contraseña. Si no llega pronto, comprueba la carpeta de correo no deseado (spam).
```

<del>Si el correo electrónico que ingresaste está registrado en este sitio,</del><ins>Te</ins> <del>te</del><ins>hemos</ins> <del>enviaremos</del><ins>enviado</ins> un correo electrónico con un enlace para restablecer tu contraseña. Si no <del>aparece</del><ins>llega</ins> pronto,<del> por favor,</del> comprueba la carpeta de correo no deseado (spam).

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

#### [`core.forum.index.mark_all_as_read_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index.mark_all_as_read_confirmation%22)

> Are you sure you want to mark all discussions as read?

```diff
-¿Estás seguro de que deseas marcar todas las discusiones como leídas?
+¿Seguro que quieres marcar todas las discusiones como leídas?
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> marcar todas las discusiones como leídas?

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-Alternar el menú desplegable de navegación
+Mostrar u ocultar el menú de navegación
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de navegación

#### [`core.forum.index_sort.latest_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index_sort.latest_button%22)

> =&gt; core.ref.latest

```diff
-=> core.ref.latest
+Más recientes
```

#### [`core.forum.index_sort.top_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.index_sort.top_button%22)

> =&gt; core.ref.top

```diff
-=> core.ref.top
+Más comentados
```

#### [`core.forum.log_in.forgot_password_link`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.log_in.forgot_password_link%22)

> Forgot password?

```diff
-¿Olvidaste tu contraseña?
+¿Has olvidado tu contraseña?
```

<del>¿Olvidaste</del><ins>¿Has olvidado</ins> tu contraseña?

#### [`core.forum.notifications.delete_all_confirm`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.notifications.delete_all_confirm%22)

> Are you sure you want to delete all notifications? This action is not reversible

```diff
-¿Estás seguro de que quieres eliminar todas las notificaciones? Esta acción no es reversible
+¿Seguro que quieres eliminar todas las notificaciones? Esta acción no se puede deshacer
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que quieres eliminar todas las notificaciones? Esta acción no <del>es</del><ins>se</ins> <del>reversible</del><ins>puede deshacer</ins>

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
-¿Estás seguro de que deseas eliminar este mensaje para siempre? Esta acción no se puede deshacer.
+¿Seguro que quieres eliminar esta publicación para siempre? Esta acción no se puede deshacer.
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar <del>este</del><ins>esta</ins> <del>mensaje</del><ins>publicación</ins> para siempre? Esta acción no se puede deshacer.

#### [`core.forum.post_controls.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.hide_confirmation%22)

> Are you sure you want to delete this post?

```diff
-¿Estás seguro de que deseas eliminar este mensaje?
+¿Seguro que quieres eliminar esta publicación?
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> eliminar <del>este</del><ins>esta</ins> <del>mensaje?</del><ins>publicación?</ins>

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-Alternar el menú desplegable de los controles del post
+Mostrar u ocultar el menú de acciones de la publicación
```

<del>Alternar</del><ins>Mostrar u ocultar</ins> el menú<del> desplegable</del> de <del>los</del><ins>acciones</ins> <del>controles</del><ins>de</ins> <del>del</del><ins>la</ins> <del>post</del><ins>publicación</ins>

#### [`core.forum.post_list.empty_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.post_list.empty_text%22)

> It looks as though there are no posts here.

```diff
-Parece que no hay publicaciones acá.
+Parece que no hay publicaciones aquí.
```

Parece que no hay publicaciones <del>acá.</del><ins>aquí.</ins>

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

#### [`core.forum.settings.haptic_feedback_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.settings.haptic_feedback_label%22)

> Enable haptic feedback

```diff
-Habilitar interacciones vibratorias
+Activar la respuesta háptica
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
-Alguien cambió el título de una discusión que tú creaste
+Alguien ha cambiado el título de una discusión que creaste
```

Alguien <del>cambió</del><ins>ha cambiado</ins> el título de una discusión que<del> tú</del> creaste

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-Permitir que otros vean que estás conectado
+Permitir que otros vean cuándo estás conectado
```

Permitir que otros vean <del>que</del><ins>cuándo</ins> estás conectado

#### [`core.forum.sign_up.log_in_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.forum.sign_up.log_in_text%22)

> Already have an account? &lt;a&gt;Log In&lt;/a&gt;

```diff
-¿Ya tienes una cuenta? <a>¡Conéctate!</a>
+¿Ya tienes una cuenta? <a>¡Inicia sesión!</a>
```

¿Ya tienes una cuenta? <del>&lt;a&gt;¡Conéctate!&lt;/a&gt;</del><ins>&lt;a&gt;¡Inicia sesión!&lt;/a&gt;</ins>

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
-¿Estás seguro de que quieres eliminar este usuario? Las publicaciones del usuario NO serán eliminadas.
+¿Seguro que quieres eliminar este usuario? Sus publicaciones NO se eliminarán.
```

<del>¿Estás seguro de</del><ins>¿Seguro</ins> que quieres eliminar este usuario? <del>Las</del><ins>Sus</ins> publicaciones<del> del usuario</del> NO <del>serán</del><ins>se</ins> <del>eliminadas.</del><ins>eliminarán.</ins>

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

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
-Tu conexión se ha restablecido.
+Se ha restablecido tu conexión.
```

#### [`core.lib.dropdown.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.dropdown.toggle_dropdown_accessible_label%22)

> Toggle dropdown menu

```diff
-Activar el menú desplegable
+Mostrar u ocultar el menú desplegable
```

<del>Activar</del><ins>Mostrar u ocultar</ins> el menú desplegable

#### [`core.lib.error.db_error_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.db_error_message%22)

> Database query failed. This may be caused by an incompatibility between an extension and your database driver.

```diff
-La consulta a la base de datos falló. Esto puede deberse a una incompatibilidad entre una extensión y el controlador de su base de datos.
+La consulta a la base de datos ha fallado. Esto puede deberse a una incompatibilidad entre una extensión y el controlador de tu base de datos.
```

La consulta a la base de datos <del>falló.</del><ins>ha fallado.</ins> Esto puede deberse a una incompatibilidad entre una extensión y el controlador de <del>su</del><ins>tu</ins> base de datos.

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
-¡Caramba! Algo salió mal. Por favor, carga de nuevo la página y vuelve a intentarlo.
+Se ha producido un error. Vuelve a cargar la página e inténtalo de nuevo.
```

<del>¡Caramba! Algo</del><ins>Se</ins> <del>salió</del><ins>ha</ins> <del>mal.</del><ins>producido</ins> <del>Por</del><ins>un</ins> <del>favor,</del><ins>error.</ins> <del>carga</del><ins>Vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo</del><ins>cargar</ins> la página <del>y</del><ins>e</ins> <del>vuelve</del><ins>inténtalo</ins> <del>a</del><ins>de</ins> <del>intentarlo.</del><ins>nuevo.</ins>

#### [`core.lib.error.missing_dependencies_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.missing_dependencies_message%22)

> Cannot enable {extension} until the following dependencies are enabled: {extensions}

```diff
-No se puede activar {extension} hasta que se activen las siguientes extensiones dependientes: {extensions}
+No se puede activar {extension} hasta que se activen las siguientes extensiones de las que depende: {extensions}
```

No se puede activar {extension} hasta que se activen las siguientes extensiones <del>dependientes:</del><ins>de las que depende:</ins> {extensions}

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
-Parece que hay algún problema con tu conexión. Comprueba tu red e inténtalo de nuevo.
+Parece que hay un problema con tu conexión. Comprueba la red y vuelve a intentarlo.
```

Parece que hay <del>algún</del><ins>un</ins> problema con tu conexión. Comprueba <del>tu</del><ins>la</ins> red <del>e</del><ins>y</ins> <del>inténtalo</del><ins>vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo.</del><ins>intentarlo.</ins>

#### [`core.lib.error.not_found_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.not_found_message%22)

> The requested resource was not found.

```diff
-¡Recórcholis! El recurso solicitado no fue encontrado.
+No se ha encontrado el recurso solicitado.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
-Parece que estás sin conexión. Comprueba tu conexión e inténtalo de nuevo.
+Parece que no tienes conexión. Comprueba tu conexión y vuelve a intentarlo.
```

Parece que <del>estás</del><ins>no</ins> <del>sin</del><ins>tienes</ins> conexión. Comprueba tu conexión <del>e</del><ins>y</ins> <del>inténtalo</del><ins>vuelve</ins> <del>de</del><ins>a</ins> <del>nuevo.</del><ins>intentarlo.</ins>

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
-¡Nanay de la China! No tienes permiso para hacer eso.
+No tienes permiso para hacer eso.
```

<del>¡Nanay de la China! </del>No tienes permiso para hacer eso.

#### [`core.lib.error.rate_limit_exceeded_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.rate_limit_exceeded_message%22)

> You're going a little too quickly. Please try again in a few seconds.

```diff
-¡Para el carro! Vas tú muy rápido. Por favor, vuelve a intentarlo en unos segundos.
+Vas demasiado rápido. Vuelve a intentarlo dentro de unos segundos.
```

<del>¡Para el carro! </del>Vas<del> tú</del> <del>muy</del><ins>demasiado</ins> rápido.<del> Por favor,</del> <del>vuelve</del><ins>Vuelve</ins> a intentarlo <del>en</del><ins>dentro de</ins> unos segundos.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Lo sentimos, ocurrió un problema al intentar mostrar este contenido. Si eres un usuario, por favor inténtalo más tarde. Si eres administrador, revisa los registros de Flarum para obtener mayor información.
+Lo sentimos, se ha producido un error al mostrar este contenido. Si eres usuario, inténtalo de nuevo más tarde. Si eres administrador, consulta los archivos de registro de Flarum para obtener más información.
```

Lo sentimos, <del>ocurrió</del><ins>se ha producido</ins> un <del>problema</del><ins>error</ins> al<del> intentar</del> mostrar este contenido. Si eres<del> un</del> usuario, <del>por</del><ins>inténtalo</ins> <del>favor</del><ins>de</ins> <del>inténtalo</del><ins>nuevo</ins> más tarde. Si eres administrador, <del>revisa</del><ins>consulta</ins> los <del>registros</del><ins>archivos de registro</ins> de Flarum para obtener <del>mayor</del><ins>más</ins> información.

#### [`core.lib.gambits.discussions.author.hint`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.gambits.discussions.author.hint%22)

> username or comma-separated list of usernames

```diff
-nombre de usuario o lista separada con comas de nombres de usuarios
+nombre de usuario o lista de nombres de usuario separados por comas
```

nombre de usuario o lista <del>separada con comas </del>de nombres de <del>usuarios</del><ins>usuario separados por comas</ins>

#### [`core.lib.gambits.discussions.unread.key`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.gambits.discussions.unread.key%22)

> unread

```diff
-no leído
+no_leída
```

#### [`core.lib.gambits.users.group.hint`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.gambits.users.group.hint%22)

> singular or plural group names

```diff
-nombres de grupos singulares o plurales
+nombres de grupos en singular o plural
```

nombres de grupos <del>singulares</del><ins>en singular</ins> o <del>plurales</del><ins>plural</ins>

#### [`core.lib.input.clear_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.input.clear_button%22)

> Clear input

```diff
-Limpiar datos de ingreso
+Borrar el contenido del campo
```

#### [`core.lib.multi_select.placeholder`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.multi_select.placeholder%22)

> Select multiple options

```diff
-Seleccionar múltiples opciones
+Seleccionar varias opciones
```

Seleccionar <del>múltiples</del><ins>varias</ins> opciones

#### [`core.lib.nav.drawer_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.nav.drawer_button%22)

> Open Navigation Drawer

```diff
-Abrir el cuadro de navegación
+Abrir el panel de navegación
```

Abrir el <del>cuadro</del><ins>panel</ins> de navegación

#### [`core.lib.nav.pin_pane_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.nav.pin_pane_button%22)

> Pin Discussion List

```diff
-Fijar lista de discusiones
+Fijar la lista de discusiones
```

Fijar <ins>la </ins>lista de discusiones

#### [`core.lib.notices.bisecting`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.notices.bisecting%22)

> Running an extension bisect process to determine which extension is causing an issue.

```diff
-Ejecutar un proceso de búsqueda binaria de extensiones para determinar qué extensión está causando el problema.
+Se está ejecutando una bisección de extensiones para determinar qué extensión causa el problema.
```

<del>Ejecutar un</del><ins>Se</ins> <del>proceso</del><ins>está</ins> <del>de</del><ins>ejecutando</ins> <del>búsqueda</del><ins>una</ins> <del>binaria</del><ins>bisección</ins> de extensiones para determinar qué extensión<del> está</del> <del>causando</del><ins>causa</ins> el problema.

#### [`core.lib.notices.maintenance_mode_low`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.notices.maintenance_mode_low%22)

> Down for maintenance. Only administrators can access the forum.

```diff
-Servicio de mantenimiento. Solo los administradores pueden acceder al foro.
+En mantenimiento. Solo los administradores pueden acceder al foro.
```

<del>Servicio de</del><ins>En</ins> mantenimiento. Solo los administradores pueden acceder al foro.

#### [`core.lib.notices.maintenance_mode_safe`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.notices.maintenance_mode_safe%22)

> Down for maintenance with safe mode. Only administrators can access the forum and no extensions are booted.

```diff
-En mantenimiento, con el sistema en modo seguro. Solo los administradores pueden acceder al foro y no se han iniciado extensiones.
+En mantenimiento con el modo seguro activado. Solo los administradores pueden acceder al foro y no se han iniciado extensiones.
```

En <del>mantenimiento,</del><ins>mantenimiento</ins> con el<del> sistema en</del> modo <del>seguro.</del><ins>seguro activado.</ins> Solo los administradores pueden acceder al foro y no se han iniciado extensiones.

#### [`core.lib.pagination.first_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.pagination.first_button%22)

> Go to first page

```diff
-Ir a la primer página
+Ir a la primera página
```

Ir a la <del>primer</del><ins>primera</ins> página

#### [`core.lib.pagination.go_to_page_textbox_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.pagination.go_to_page_textbox_a11y_label%22)

> Go directly to page number

```diff
-Ir directo a la página número
+Ir directamente a la página número
```

Ir <del>directo</del><ins>directamente</ins> a la página número

#### [`core.lib.pagination.last_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.pagination.last_button%22)

> Go to last page

```diff
-Ir a última página
+Ir a la última página
```

Ir a <ins>la </ins>última página

#### [`core.lib.pagination.next_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.pagination.next_button%22)

> Next page

```diff
-Próxima página
+Página siguiente
```

#### [`core.lib.search.no_results_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.search.no_results_text%22)

> It looks like there are no results here.

```diff
-Parecería que no hay resultados acá.
+Parece que no hay resultados.
```

<del>Parecería</del><ins>Parece</ins> que no hay<del> resultados</del> <del>acá.</del><ins>resultados.</ins>

#### [`core.lib.search.no_search_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.search.no_search_text%22)

> You have not searched for anything yet.

```diff
-Aún no buscaste nada.
+Aún no has realizado ninguna búsqueda.
```

Aún no <del>buscaste</del><ins>has</ins> <del>nada.</del><ins>realizado ninguna búsqueda.</ins>

#### [`core.lib.search.preview_heading`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.search.preview_heading%22)

> Search preview

```diff
-Buscar anterior
+Vista previa de la búsqueda
```

#### [`core.lib.search_source.discussions.all_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.search_source.discussions.all_button%22)

> Search all discussions for "{query}"

```diff
-Buscar en todas las discusiones "{query}"
+Buscar "{query}" en todas las discusiones
```

Buscar <ins>"{query}" </ins>en todas las discusiones<del> "{query}"</del>

#### [`core.lib.search_source.posts.all_button`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.search_source.posts.all_button%22)

> Search all posts for "{query}"

```diff
-Buscar en todas las publicaciones "{query}"
+Buscar "{query}" en todas las publicaciones
```

Buscar <ins>"{query}" </ins>en todas las publicaciones<del> "{query}"</del>

#### [`core.lib.user_selection_modal.empty_results`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.user_selection_modal.empty_results%22)

> No users found matching your search.

```diff
-No se encontraron usuarios que coincidieran con su búsqueda.
+No se han encontrado usuarios que coincidan con tu búsqueda.
```

No se <del>encontraron</del><ins>han encontrado</ins> usuarios que <del>coincidieran</del><ins>coincidan</ins> con <del>su</del><ins>tu</ins> búsqueda.

#### [`core.lib.user_selection_modal.title`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.user_selection_modal.title%22)

> Select relevant users

```diff
-Seleccione los usuarios relevantes
+Selecciona los usuarios pertinentes
```

<del>Seleccione</del><ins>Selecciona</ins> los usuarios <del>relevantes</del><ins>pertinentes</ins>

#### [`core.lib.username.deleted_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.lib.username.deleted_text%22)

> \[deleted\]

```diff
-[borrado]
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
-Te hemos enviado un correo electrónico de confirmación a {email}. Si no aparece pronto, por favor, comprueba la carpeta de correo no deseado (spam).
+Te hemos enviado un correo electrónico de confirmación a {email}. Si no llega pronto, comprueba la carpeta de correo no deseado (spam).
```

Te hemos enviado un correo electrónico de confirmación a {email}. Si no <del>aparece</del><ins>llega</ins> pronto,<del> por favor,</del> comprueba la carpeta de correo no deseado (spam).

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

#### [`core.ref.dark_hc_mode_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.dark_hc_mode_label%22)

> Dark High Contrast Mode

```diff
-Modo oscuro con contraste alto
+Modo oscuro de alto contraste
```

Modo oscuro <del>con contraste</del><ins>de</ins> alto<ins> contraste</ins>

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-¿Estás seguro que deseas continuar? Esta acción no se puede deshacer.
+¿Seguro que quieres continuar? Esta acción no se puede deshacer.
```

<del>¿Estás seguro</del><ins>¿Seguro</ins> que <del>deseas</del><ins>quieres</ins> continuar? Esta acción no se puede deshacer.

#### [`core.ref.icon_text`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.icon_text%22)

> Enter the name of any &lt;a&gt;FontAwesome&lt;/a&gt; icon class, &lt;em&gt;including&lt;/em&gt; the prefix (e.g. &lt;code&gt;fas fa-flag&lt;/code&gt; or &lt;code&gt;fa-solid fa-flag&lt;/code&gt;).

```diff
-Introduce el nombre de alguna clase de ícono <a>FontAwesome</a>, <em>incluyendo</em> el prefijo (e.g. <code>fas fa-flag</code> o <code>fa-solid fa-flag</code>).
+Introduce el nombre de una clase de icono de <a>FontAwesome</a>, <em>incluido</em> el prefijo (por ejemplo, <code>fas fa-flag</code> o <code>fa-solid fa-flag</code>).
```

Introduce el nombre de <del>alguna</del><ins>una</ins> clase de <del>ícono</del><ins>icono de</ins> &lt;a&gt;FontAwesome&lt;/a&gt;, <del>&lt;em&gt;incluyendo&lt;/em&gt;</del><ins>&lt;em&gt;incluido&lt;/em&gt;</ins> el prefijo <del>(e.g.</del><ins>(por ejemplo,</ins> &lt;code&gt;fas fa-flag&lt;/code&gt; o &lt;code&gt;fa-solid fa-flag&lt;/code&gt;).

#### [`core.ref.light_mode_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.light_mode_label%22)

> Light Mode

```diff
-Modo Claro
+Modo claro
```

Modo <del>Claro</del><ins>claro</ins>

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

#### [`core.ref.newest`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.newest%22)

> Newest

```diff
-Más nuevo
+Más nuevos
```

Más <del>nuevo</del><ins>nuevos</ins>

#### [`core.ref.oldest`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.oldest%22)

> Oldest

```diff
-Más viejo
+Más antiguos
```

Más <del>viejo</del><ins>antiguos</ins>

#### [`core.ref.refresh`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.refresh%22)

> Refresh

```diff
-Refrezcar
+Actualizar
```

#### [`core.ref.remember_me_label`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.remember_me_label%22)

> Remember Me

```diff
-Acuérdate de mí
+Recordarme
```

#### [`core.ref.settings`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.settings%22)

> Settings

```diff
-Configuración
+Ajustes
```

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Regístrate
+Registrarse
```

#### [`core.ref.top`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.top%22)

> Top

```diff
-Principales
+Más comentados
```

#### [`core.ref.username_or_email_placeholder`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.username_or_email_placeholder%22)

> Username or Email

```diff
-Nombre de usuario o Email
+Nombre de usuario o correo electrónico
```

Nombre de usuario o <del>Email</del><ins>correo electrónico</ins>

#### [`core.ref.view`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.ref.view%22)

> View

```diff
-Vista
+Ver
```

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

#### [`core.views.error.maintenance_mode_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.error.maintenance_mode_message%22)

> This forum is currently down for maintenance. Please check back later.

```diff
-Este foro se encuentra temporalmente fuera de servicio por mantenimiento. Vuelva a intentarlo más tarde.
+Este foro está temporalmente fuera de servicio por mantenimiento. Vuelve a intentarlo más tarde.
```

Este foro <del>se encuentra</del><ins>está</ins> temporalmente fuera de servicio por mantenimiento. <del>Vuelva</del><ins>Vuelve</ins> a intentarlo más tarde.

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
-¡Nanay de la China! No tienes permiso para acceder a esta página.
+No tienes permiso para acceder a esta página.
```

<del>¡Nanay de la China! </del>No tienes permiso para acceder a esta página.

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
-¿Seguro que quieres desconectarse de {forum}?
+¿Seguro que quieres cerrar sesión en {forum}?
```

¿Seguro que quieres <del>desconectarse</del><ins>cerrar</ins> <del>de</del><ins>sesión en</ins> {forum}?

#### [`core.views.unsubscribe_email.confirm_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.unsubscribe_email.confirm_message%22)

> You have requested to unsubscribe from "{type}" email notifications from {forumTitle}.

```diff
-Has solicitado darte de baja de las notificaciones por email "{type}" de {forumTitle}.
+Has solicitado darte de baja de las notificaciones por correo electrónico "{type}" de {forumTitle}.
```

Has solicitado darte de baja de las notificaciones por <del>email</del><ins>correo electrónico</ins> "{type}" de {forumTitle}.

#### [`core.views.unsubscribe_email.immediate_helptext`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.unsubscribe_email.immediate_helptext%22)

> You will be immediately unsubscribed once you confirm.

```diff
-Su suscripción se cancelará inmediatamente una vez que la confirme.
+Tu suscripción se cancelará en cuanto lo confirmes.
```

<del>Su</del><ins>Tu</ins> suscripción se cancelará<del> inmediatamente una</del> <del>vez</del><ins>en</ins> <del>que</del><ins>cuanto</ins> <del>la</del><ins>lo</ins> <del>confirme.</del><ins>confirmes.</ins>

#### [`core.views.unsubscribe_email.invalid_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.unsubscribe_email.invalid_message%22)

> This unsubscribe link is invalid or has already been used. For any changes in your email notifications from {forumTitle}, please \[check your settings\]({settingsLink}).

```diff
-Este enlace para cancelar la suscripción no es válido o ya se ha utilizado. Para cualquier cambio en las notificaciones por email de {forumTitle}, por favor [compruebe su configuración]({settingsLink}).
+Este enlace para cancelar la suscripción no es válido o ya se ha utilizado. Para modificar las notificaciones por correo electrónico de {forumTitle}, [revisa tus ajustes]({settingsLink}).
```

Este enlace para cancelar la suscripción no es válido o ya se ha utilizado. Para <del>cualquier cambio en</del><ins>modificar</ins> las notificaciones por <del>email</del><ins>correo electrónico</ins> de {forumTitle},<del> por favor</del> <del>\[compruebe</del><ins>\[revisa</ins> <del>su</del><ins>tus</ins> <del>configuración\]({settingsLink}).</del><ins>ajustes\]({settingsLink}).</ins>

#### [`core.views.unsubscribe_email.success_message`](https://weblate.rob006.net/translate/flarum2/core/es@formal/?q=context%3A%3D%22core.views.unsubscribe_email.success_message%22)

> You have successfully unsubscribed from "{type}" notification from {forumTitle}. If you wish to receive them again, please \[update your settings\]({settingsLink}).

```diff
-Te has dado de baja correctamente de las notificaciones "{type}" de {forumTitle}. Si deseas volver a recibirlas, por favor [actualiza tu configuración]({settingsLink}).
+Te has dado de baja correctamente de las notificaciones "{type}" de {forumTitle}. Si quieres volver a recibirlas, [actualiza tus ajustes]({settingsLink}).
```

Te has dado de baja correctamente de las notificaciones "{type}" de {forumTitle}. Si <del>deseas</del><ins>quieres</ins> volver a recibirlas,<del> por favor</del> \[actualiza <del>tu</del><ins>tus</ins> <del>configuración\]({settingsLink}).</del><ins>ajustes\]({settingsLink}).</ins>


### `datlechin-birthdays`

#### [`datlechin-birthdays.admin.settings.date_format_help`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.date_format_help%22)

> Use the &lt;a&gt;dayjs&lt;/a&gt; date format. Leave blank to use the default format.

```diff
-Utiliza el formato de fecha <a>dayjs</a>. Déjalo en blanco para utilizar el formato predeterminado.
+Utiliza el formato <a>dayjs</a>. Deja en blanco para utilizar el formato por defecto.
```

Utiliza el formato <del>de fecha </del>&lt;a&gt;dayjs&lt;/a&gt;. <del>Déjalo</del><ins>Deja</ins> en blanco para utilizar el formato <del>predeterminado.</del><ins>por defecto.</ins>

#### [`datlechin-birthdays.admin.settings.required_help`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.required_help%22)

> You need enable Set on registration option to make this option work

```diff
-Habilita la opción Establecer al registrarse para que esta opción funcione
+Debes habilitar la opción Establecer al registrarse para que esta opción funcione
```

<del>Habilita</del><ins>Debes habilitar</ins> la opción Establecer al registrarse para que esta opción funcione

#### [`datlechin-birthdays.admin.settings.required_label`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.required_label%22)

> Required entering birthdays

```diff
-Es obligatorio introducir la fecha de nacimiento
+Es obligatorio introducir la fecha de cumpleaños
```

Es obligatorio introducir la fecha de <del>nacimiento</del><ins>cumpleaños</ins>

#### [`datlechin-birthdays.admin.settings.set_on_registration_label`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.admin.settings.set_on_registration_label%22)

> Allow setting birthdays on registration

```diff
-Permitir configurar cumpleaños al registrarse
+Establecer la fecha de cumpleaños al registrarse
```

<del>Permitir</del><ins>Establecer</ins> <del>configurar</del><ins>la fecha de</ins> cumpleaños al registrarse

#### [`datlechin-birthdays.api.invalid_age_message`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.api.invalid_age_message%22)

> Your age must be at least {minAge} years old.

```diff
-Tu edad debe ser al menos {minAge} años.
+Tu edad mínima debe ser de {minAge} años.
```

Tu edad <ins>mínima </ins>debe ser<del> al</del> <del>menos</del><ins>de</ins> {minAge} años.

#### [`datlechin-birthdays.forum.change_dob.title`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.forum.change_dob.title%22)

> Edit Date of Birth

```diff
-Editar fecha de nacimiento
+Editar Fecha de Nacimiento
```

Editar <del>fecha</del><ins>Fecha</ins> de <del>nacimiento</del><ins>Nacimiento</ins>

#### [`datlechin-birthdays.forum.settings.change_dob_label`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.forum.settings.change_dob_label%22)

> Change Date of Birth

```diff
-Cambiar fecha de nacimiento
+Cambiar Fecha de Nacimiento
```

Cambiar <del>fecha</del><ins>Fecha</ins> de <del>nacimiento</del><ins>Nacimiento</ins>

#### [`datlechin-birthdays.forum.settings.show_dob_year_help`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.forum.settings.show_dob_year_help%22)

> This will allow people to see your age.

```diff
-Permitir que los demás vean tu edad.
+Esto permitirá ver a los demás tu edad.
```

<del>Permitir</del><ins>Esto</ins> <del>que</del><ins>permitirá ver a</ins> los demás<del> vean</del> tu edad.

#### [`datlechin-birthdays.ref.date_of_birth`](https://weblate.rob006.net/translate/flarum2/datlechin-birthdays/es@formal/?q=context%3A%3D%22datlechin-birthdays.ref.date_of_birth%22)

> Date of Birth

```diff
-Fecha de nacimiento
+Fecha de Nacimiento
```

Fecha de <del>nacimiento</del><ins>Nacimiento</ins>


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/es@formal/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-Clave API
+API Key
```

<del>Clave </del>API<ins> Key</ins>


### `flarum-emoji`

#### [`flarum-emoji.forum.composer.type_to_search_text`](https://weblate.rob006.net/translate/flarum2/flarum-emoji/es@formal/?q=context%3A%3D%22flarum-emoji.forum.composer.type_to_search_text%22)

> Type to search for an emoji

```diff
-Teclea para buscar un emoji
+Teclee para buscar un emoji
```

<del>Teclea</del><ins>Teclee</ins> para buscar un emoji


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.auth_config.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_confirmation%22)

> Are you sure you want to delete this authentication method?

```diff
-¿Estás seguro de que deseas eliminar este método de autenticación?
+¿Está seguro de que desea eliminar este método de autenticación?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este método de autenticación?

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
-¿Estás seguro de que deseas eliminar este repositorio? Todas las extensiones instaladas desde este repositorio serán eliminadas.
+¿Está seguro de que desea eliminar este repositorio? Todas las extensiones instaladas desde este repositorio serán eliminadas.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> eliminar este repositorio? Todas las extensiones instaladas desde este repositorio serán eliminadas.

#### [`flarum-extension-manager.admin.composer.minimum_stability.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.help%22)

> The type of packages allowed to be installed. Do not change this unless you know what you are doing.

```diff
-El tipo de paquetes que se permite instalar. No cambies esto a menos que sepas lo que estás haciendo.
+El tipo de paquetes que se permite instalar. No cambie esto a menos que sepa lo que está haciendo.
```

El tipo de paquetes que se permite instalar. No <del>cambies</del><ins>cambie</ins> esto a menos que <del>sepas</del><ins>sepa</ins> lo que <del>estás</del><ins>está</ins> haciendo.

#### [`flarum-extension-manager.admin.composer.repositories.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.help%22)

> Add additional repositories to install packages from. This is an advanced feature, do not add repositories that are not trusted, as they can be used to execute malicious code on your server.
>

```diff
-Añade repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no añadas repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en tu servidor.
+Añada repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no añada repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en su servidor.

```

<del>Añade</del><ins>Añada</ins> repositorios adicionales desde los que instalar paquetes. Esta es una característica avanzada, no <del>añadas</del><ins>añada</ins> repositorios que no sean de confianza, ya que pueden ser utilizados para ejecutar código malicioso en <del>tu</del><ins>su</ins> servidor.<br />

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major%22)

> Some installed extensions are not compatible with the newest major release. Please wait until the extensions are updated to be compatible by the authors, or remove them before proceeding.
>

```diff
-Algunas extensiones instaladas no son compatibles con la versión principal más reciente. Espera a que los autores actualicen las extensiones para que sean compatibles o elimínalas antes de continuar.
+Algunas extensiones instaladas no son compatibles con la versión principal más reciente. Espere a que los autores actualicen las extensiones para que sean compatibles o elimínelas antes de continuar.

```

Algunas extensiones instaladas no son compatibles con la versión principal más reciente. <del>Espera</del><ins>Espere</ins> a que los autores actualicen las extensiones para que sean compatibles o <del>elimínalas</del><ins>elimínelas</ins> antes de continuar.<br />

#### [`flarum-extension-manager.admin.extensions.install_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install_help%22)

> Fill in the extension package name to proceed. You can specify a &lt;semantic\_link&gt;semantic version&lt;/semantic\_link&gt; using the format &lt;code&gt;vendor/package-name:version&lt;/code&gt;. Visit {link} to browse available packages.
>

```diff
-Completa el nombre del paquete de extensión para continuar. Puedes especificar una <semantic_link>versión semántica</semantic_link> utilizando el formato <code>vendor/package-name:version</code>. Visita {link} para explorar extensiones disponibles.
+Complete el nombre del paquete de extensión para continuar. Puede especificar una <semantic_link>versión semántica</semantic_link> utilizando el formato <code>vendor/nombre-del-paquete:versión</code>. Visite {link} para explorar extensiones.

```

<del>Completa</del><ins>Complete</ins> el nombre del paquete de extensión para continuar. <del>Puedes</del><ins>Puede</ins> especificar una &lt;semantic\_link&gt;versión semántica&lt;/semantic\_link&gt; utilizando el formato <del>&lt;code&gt;vendor/package-name:version&lt;/code&gt;.</del><ins>&lt;code&gt;vendor/nombre-del-paquete:versión&lt;/code&gt;.</ins> <del>Visita</del><ins>Visite</ins> {link} para explorar<del> extensiones</del> <del>disponibles.</del><ins>extensiones.</ins><br />

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
-Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de tus extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, asegúrate de hacer una copia de seguridad de tu base de datos y archivos antes de proceder.
+Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de sus extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, asegúrese de hacer una copia de seguridad de su base de datos y archivos antes de proceder.

```

Las actualizaciones mayores de Flarum no son compatibles con versiones anteriores, lo que significa que algunas de <del>tus</del><ins>sus</ins> extensiones instaladas actualmente y las modificaciones realizadas manualmente podrían no funcionar con esta nueva versión. Por favor, <del>asegúrate</del><ins>asegúrese</ins> de hacer una copia de seguridad de <del>tu</del><ins>su</ins> base de datos y archivos antes de proceder.<br />

#### [`flarum-extension-manager.admin.major_updater.dry_run_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run_help%22)

> A dry run emulates the update to see if your current setup can safely update, this does not mean that your manual made custom modifications will work in the newer version.

```diff
-Una ejecución de prueba emula la actualización para ver si tu configuración actual puede actualizarse de manera segura, esto no significa que las modificaciones personalizadas que hayas hecho manualmente funcionen en la nueva versión.
+Una ejecución de prueba emula la actualización para ver si su configuración actual puede actualizarse de manera segura, esto no significa que las modificaciones personalizadas que haya hecho manualmente funcionen en la nueva versión.
```

Una ejecución de prueba emula la actualización para ver si <del>tu</del><ins>su</ins> configuración actual puede actualizarse de manera segura, esto no significa que las modificaciones personalizadas que <del>hayas</del><ins>haya</ins> hecho manualmente funcionen en la nueva versión.

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
-Por favor, ten cuidado a quién le das acceso al área de administración, el gestor de extensiones podría ser mal utilizado por personas malintencionadas para instalar paquetes que pueden conducir a brechas de seguridad.
+Por favor, tenga cuidado a quién le da acceso al área de administración, el gestor de extensiones podría ser mal utilizado por personas malintencionadas para instalar paquetes que pueden conducir a brechas de seguridad.
```

Por favor, <del>ten</del><ins>tenga</ins> cuidado a quién le <del>das</del><ins>da</ins> acceso al área de administración, el gestor de extensiones podría ser mal utilizado por personas malintencionadas para instalar paquetes que pueden conducir a brechas de seguridad.

#### [`flarum-extension-manager.admin.settings.debug_mode_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.settings.debug_mode_warning%22)

> You are running in debug mode, the extension manager cannot properly install and update local development packages. Please use the command line interface instead for such purposes.

```diff
-Estás ejecutando en modo de depuración, el gestor de extensiones no puede instalar y actualizar correctamente los paquetes de desarrollo locales. Para ello, utiliza la interfaz de línea de comandos.
+Está ejecutando en modo de depuración, el gestor de extensiones no puede instalar y actualizar correctamente los paquetes de desarrollo locales. Para ello, utilice la interfaz de línea de comandos.
```

<del>Estás</del><ins>Está</ins> ejecutando en modo de depuración, el gestor de extensiones no puede instalar y actualizar correctamente los paquetes de desarrollo locales. Para ello, <del>utiliza</del><ins>utilice</ins> la interfaz de línea de comandos.

#### [`flarum-extension-manager.admin.updater.updater_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/es@formal/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_help%22)

> Runs a check for new extension and Flarum updates.

```diff
-Comprueba si hay nuevas extensiones y actualizaciones de Flarum.
+Compruebe si hay nuevas extensiones y actualizaciones de Flarum.
```

<del>Comprueba</del><ins>Compruebe</ins> si hay nuevas extensiones y actualizaciones de Flarum.


### `flarum-likes`

#### [`flarum-likes.forum.notifications.post_liked_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.notifications.post_liked_text%22)

> {username} liked your post

```diff
-{count, plural, one {A {username} le gustó tu publicación.} other {A {username} les gustó tu publicación.}}
+{count, plural, one {A {username} le gustó su publicación.} other {A {username} les gustó su publicación.}}
```

{count, plural, one {A {username} le gustó <del>tu</del><ins>su</ins> publicación.} other {A {username} les gustó <del>tu</del><ins>su</ins> publicación.}}

#### [`flarum-likes.forum.post.liked_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_self_text%22)

> {users} like this.

```diff
-{users} les gusta esto.
+{count, plural, one {A usted le gusta esto} other {A {users} os gusta esto}}
```

<ins>{count, plural, one {A usted le gusta esto} other {A </ins>{users} <del>les</del><ins>os</ins> gusta <del>esto.</del><ins>esto}}</ins>

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{count, plural, one {A {users} le gusta esto} other {A {users} les gusta esto}}.
+{count, plural, one {{users} le gusta esto} other {{users} les gusta esto}}
```

{count, plural, one <del>{A {users}</del><ins>{{users}</ins> le gusta esto} other<del> {A</del> <del>{users}</del><ins>{{users}</ins> les gusta <del>esto}}.</del><ins>esto}}</ins>

#### [`flarum-likes.forum.settings.notify_post_liked_label`](https://weblate.rob006.net/translate/flarum2/flarum-likes/es@formal/?q=context%3A%3D%22flarum-likes.forum.settings.notify_post_liked_label%22)

> Someone likes one of my posts

```diff
-A alguien le gusta tu publicación
+A alguien le gusta su publicación
```

A alguien le gusta <del>tu</del><ins>su</ins> publicación


### `flarum-lock`

#### [`flarum-lock.admin.permissions.lock_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.admin.permissions.lock_discussions_label%22)

> Lock discussions

```diff
-Bloquear discusiones
+Cerrar discusiones
```

<del>Bloquear</del><ins>Cerrar</ins> discusiones

#### [`flarum-lock.forum.discussion_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.discussion_controls.unlock_button%22)

> Unlock

```diff
-Desbloquear
+Abrir
```

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-{username} cerró la discusión {time}.
+{username} cerró la discusión.
```

{username} cerró la <del>discusión {time}.</del><ins>discusión.</ins>

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} abrió la discusión {time}.
+{username} abrió la discusión.
```

{username} abrió la <del>discusión {time}.</del><ins>discusión.</ins>

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/es@formal/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Alguien cerró una discusión que tú creaste
+Alguien cerró una discusión que usted creó
```

Alguien cerró una discusión que <del>tú</del><ins>usted</ins> <del>creaste</del><ins>creó</ins>


### `flarum-mentions`

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} respondió a tu publicación en {title}
+{replier_display_name} respondió a su publicación en {title}
```

{replier\_display\_name} respondió a <del>tu</del><ins>su</ins> publicación en {title}

#### [`flarum-mentions.email.user_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.email.user_mentioned.subject%22)

> {mentioner\_display\_name} mentioned you in {title}

```diff
-{mentioner_display_name} te mencionó en {title}
+{mentioner_display_name} le mencionó en {title}
```

{mentioner\_display\_name} <del>te</del><ins>le</ins> mencionó en {title}

#### [`flarum-mentions.forum.composer.mention_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.composer.mention_tooltip%22)

> Mention a user, group or post

```diff
-Mencionar a un usuario, grupo o publicación
+Mencionar a un usuario o publicación
```

Mencionar a un <del>usuario, grupo</del><ins>usuario</ins> o publicación

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
-{count, plural, one {{username} respondió a tu publicación.} other {{username} respondieron a tu publicación.}}
+{count, plural, one {{username} respondió a su publicación.} other {{username} respondieron a su publicación.}}
```

{count, plural, one {{username} respondió a <del>tu</del><ins>su</ins> publicación.} other {{username} respondieron a <del>tu</del><ins>su</ins> publicación.}}

#### [`flarum-mentions.forum.notifications.user_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.notifications.user_mentioned_text%22)

> {username} mentioned you

```diff
-{username} te mencionó
+{username} le mencionó
```

{username} <del>te</del><ins>le</ins> mencionó

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{users} respondió esto.
+{count, plural, one {{users} respondiste a esto} other {{users} respondísteis a esto}}
```

#### [`flarum-mentions.forum.settings.notify_post_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_post_mentioned_label%22)

> Someone replies to one of my posts

```diff
-Alguien respondió a tu publicación
+Alguien respondió a su publicación
```

Alguien respondió a <del>tu</del><ins>su</ins> publicación

#### [`flarum-mentions.forum.settings.notify_user_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/es@formal/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_user_mentioned_label%22)

> Someone mentions me in a post

```diff
-Alguien te mencionó en una publicación
+Alguien le mencionó en una publicación
```

Alguien <del>te</del><ins>le</ins> mencionó en una publicación


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/es@formal/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-Discusiones ancladas
+Poner la chincheta a discusiones
```

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/es@formal/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-{username} puso la chincheta a la discusión {time}.
+{username} puso la chincheta a la discusión.
```

{username} puso la chincheta a la <del>discusión {time}.</del><ins>discusión.</ins>

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/es@formal/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} quitó la chincheta a la discusión {time}.
+{username} quitó la chincheta a la discusión.
```

{username} quitó la chincheta a la <del>discusión {time}.</del><ins>discusión.</ins>


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Seguir automáticamente las discusiones en las que tú participes
+Seguir automáticamente las discusiones en las que usted participe
```

Seguir automáticamente las discusiones en las que <del>tú</del><ins>usted</ins> <del>participes</del><ins>participe</ins>

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Alguién publicó en una discusión que tú sigues
+Alguién publicó en una discusión que usted sigue
```

Alguién publicó en una discusión que <del>tú</del><ins>usted</ins> <del>sigues</del><ins>sigue</ins>

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-No ser notificado nunca. Ocultar de la lista de discusión.
+No ser notificado y ocultar esta discusión.
```

No ser notificado <del>nunca. Ocultar de la</del><ins>y</ins> <del>lista</del><ins>ocultar</ins> <del>de</del><ins>esta</ins> discusión.

#### [`flarum-subscriptions.forum.sub_controls.notify_email_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/es@formal/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.notify_email_tooltip%22)

> Get an email when there are new posts

```diff
-Recibir un email cuando haya nuevas publicaciones
+Recibir un e-mail cuando haya nuevas publicaciones
```

Recibir un <del>email</del><ins>e-mail</ins> cuando haya nuevas publicaciones


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-¿Estás seguro de que quieres eliminar esta etiqueta? Las discusiones de la etiqueta NO serán eliminadas.
+¿Está seguro de que quiere eliminar esta etiqueta? Las discusiones de la etiqueta NO serán eliminadas.
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar esta etiqueta? Las discusiones de la etiqueta NO serán eliminadas.

#### [`flarum-tags.admin.edit_tag.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.edit_tag.title%22)

> Create Tag

```diff
-Crear Etiqueta
+Crear etiqueta
```

Crear <del>Etiqueta</del><ins>etiqueta</ins>

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Introduce el numero mínimo y máximo de etiquetas principales que pueden ser aplicadas a una discusión.
+Introduzca el numero mínimo y máximo de etiquetas principales que pueden ser aplicadas a una discusión.
```

<del>Introduce</del><ins>Introduzca</ins> el numero mínimo y máximo de etiquetas principales que pueden ser aplicadas a una discusión.

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Introduce el número mínimo y máximo de etiquetas secundarias que pueden ser aplicadas a una discusión.
+Introduzca el número mínimo y máximo de etiquetas secundarias que pueden ser aplicadas a una discusión.
```

<del>Introduce</del><ins>Introduzca</ins> el número mínimo y máximo de etiquetas secundarias que pueden ser aplicadas a una discusión.

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-Elige las etiquetas para su discusión
+Elija las etiquetas para su discusión
```

<del>Elige</del><ins>Elija</ins> las etiquetas para su discusión

#### [`flarum-tags.forum.composer_discussion.choose_tags_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.composer_discussion.choose_tags_link%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
-=> flarum-tags.ref.choose_tags
+Elegir etiquetas
```

#### [`flarum-tags.forum.post_stream.added_and_removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_and_removed_tags_text%22)

> {username} added the {tagsAdded} and removed the {tagsRemoved} {time}.

```diff
-{username} puso {tagsAdded} y quitó {tagsRemoved} {time}.
+{username} puso {tagsAdded} y quitó {tagsRemoved}
```

{username} puso {tagsAdded} y quitó {tagsRemoved}<del> {time}.</del>

#### [`flarum-tags.forum.post_stream.added_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_tags_text%22)

> {username} added the {tagsAdded} {time}.

```diff
-{username} puso {tagsAdded} {time}.
+{username} puso {tagsAdded}
```

{username} puso {tagsAdded}<del> {time}.</del>

#### [`flarum-tags.forum.post_stream.removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/es@formal/?q=context%3A%3D%22flarum-tags.forum.post_stream.removed_tags_text%22)

> {username} removed the {tagsRemoved} {time}.

```diff
-{username} quitó {tagsRemoved} {time}.
+{username} quitó {tagsRemoved}.
```

{username} quitó <del>{tagsRemoved} {time}.</del><ins>{tagsRemoved}.</ins>


### `fof-links`

#### [`fof-links.admin.edit_link.delete_link_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-links/es@formal/?q=context%3A%3D%22fof-links.admin.edit_link.delete_link_confirmation%22)

> Are you sure you want to delete “{title}”?

```diff
-¿Estás seguro de que quieres eliminar este enlace?
+¿Está seguro de que quiere eliminar este enlace?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar este enlace?


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.icon-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.admin.fields.icon-help%22)

> Shows an icon in front of values entered by the user. For a reference of available icons, check the &lt;a&gt;FontAwesome website&lt;/a&gt;. Use icon names with the "fa-" prefix, like "fas fa-info".
>

```diff
-Muestra un ícono delante de los valores introducidos por el usuario. Para consultar los íconos disponibles, visite el <a>sitio web de FontAwesome</a>. Utilice nombres de íconos con el prefijo "fa-", como "fas fa-info".
+Introduzca el nombre de alguna clase de <a>FontAwesome</a>, <em>incluyendo</em> el prefijo <code>fas fa-</code>.

```

<del>Muestra un ícono delante de los valores introducidos por el usuario. Para consultar los íconos disponibles, visite</del><ins>Introduzca</ins> el<del> &lt;a&gt;sitio</del> <del>web</del><ins>nombre</ins> de<del> FontAwesome&lt;/a&gt;.</del> <del>Utilice</del><ins>alguna</ins> <del>nombres</del><ins>clase</ins> de <del>íconos</del><ins>&lt;a&gt;FontAwesome&lt;/a&gt;,</ins> <del>con</del><ins>&lt;em&gt;incluyendo&lt;/em&gt;</ins> el prefijo<del> "fa-", como</del> <del>"fas</del><ins>&lt;code&gt;fas</ins> <del>fa-info".</del><ins>fa-&lt;/code&gt;.</ins><br />

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
-Consulta las <a>reglas de validación de Laravel</a>. Ej: "string|min:5" o "url".
+Consulte las <a>reglas de validación de Laravel</a>. Ej: "string|min:5" o "url".

```

<del>Consulta</del><ins>Consulte</ins> las &lt;a&gt;reglas de validación de Laravel&lt;/a&gt;. Ej: "string\|min:5" o "url".<br />

#### [`fof-masquerade.forum.alerts.profile-completion-required`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/es@formal/?q=context%3A%3D%22fof-masquerade.forum.alerts.profile-completion-required%22)

> Please complete the necessary profile fields below.
>

```diff
-Por favor completa los campos del perfil de usuario.
+Por favor complete los campos del perfil de usuario.

```

Por favor <del>completa</del><ins>complete</ins> los campos del perfil de usuario.<br />


### `fof-pages`

#### [`fof-pages.admin.edit_page.delete_page_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-pages/es@formal/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_confirmation%22)

> Are you sure you want to delete this page?

```diff
-¿Estás seguro de que quieres eliminar esta pagina?
+¿Está seguro de que quiere eliminar esta pagina?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>quieres</del><ins>quiere</ins> eliminar esta pagina?

#### [`fof-pages.admin.edit_page.set_as_home_page_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-pages/es@formal/?q=context%3A%3D%22fof-pages.admin.edit_page.set_as_home_page_confirmation%22)

> Are you sure you want to set this page as your home page?

```diff
-¿Estás seguro de que deseas configurar esta página como su página de inicio?
+¿Está seguro de que desea configurar esta página como su página de inicio?
```

<del>¿Estás</del><ins>¿Está</ins> seguro de que <del>deseas</del><ins>desea</ins> configurar esta página como su página de inicio?


### `fof-polls`

#### [`fof-polls.admin.permissions.self_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.admin.permissions.self_edit%22)

> Edit created polls (requires post edit permission)

```diff
-Editar encuestas creadas (requiere permiso de edición de post)
+Permitir a los usuarios editar sus propias encuestas
```

#### [`fof-polls.forum.composer_discussion.add_poll`](https://weblate.rob006.net/translate/flarum2/fof-polls/es@formal/?q=context%3A%3D%22fof-polls.forum.composer_discussion.add_poll%22)

> =&gt; fof-polls.forum.moderation.add

```diff
-=> fof-polls.forum.moderation.add
+Añadir encuesta
```


### `fof-reactions`

#### [`fof-reactions.forum.disabled-reaction`](https://weblate.rob006.net/translate/flarum2/fof-reactions/es@formal/?q=context%3A%3D%22fof-reactions.forum.disabled-reaction%22)

> You can't use this reaction right now, please refresh the page

```diff
-No es posible usar esta reacción ahora mismo, por favor refresca la página
+No es posible ocupar esta reacción ahora, por favor refresca la página
```

No es posible <del>usar</del><ins>ocupar</ins> esta reacción<del> ahora</del> <del>mismo,</del><ins>ahora,</ins> por favor refresca la página


### `fof-socialprofile`

#### [`fof-socialprofile.admin.settings.allow_external_favicons_label`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/es@formal/?q=context%3A%3D%22fof-socialprofile.admin.settings.allow_external_favicons_label%22)

> Allow external website icons (uses external provider's favicon API)

```diff
-Permitir iconos de sitios externos (utiliza la API de favicon de un proveedor externo)
+Permitir iconos de sitios externos
```

Permitir iconos de sitios externos<del> (utiliza la API de favicon de un proveedor externo)</del>

#### [`fof-socialprofile.forum.edit.url`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/es@formal/?q=context%3A%3D%22fof-socialprofile.forum.edit.url%22)

> URL

```diff
-URL
+Dirección web
```


### `fof-upload`

#### [`fof-upload.admin.pane.description`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.pane.description%22)

> Set up uploading services and preferences.

```diff
-Configure los servicios y preferencias de subida.
+Configure los servicios y preferencias de carga.
```

Configure los servicios y preferencias de <del>subida.</del><ins>carga.</ins>

#### [`fof-upload.admin.upload_methods.aws-s3`](https://weblate.rob006.net/translate/flarum2/fof-upload/es@formal/?q=context%3A%3D%22fof-upload.admin.upload_methods.aws-s3%22)

> S3 or Compatible

```diff
-S3 o compatible
+S3/Compatible
```


### `fof-user-bio`

#### [`fof-user-bio.admin.permission.editOwn`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/es@formal/?q=context%3A%3D%22fof-user-bio.admin.permission.editOwn%22)

> Edit own bio

```diff
-Editar tu propia biografía
+Editar su propia biografía
```

Editar <del>tu</del><ins>su</ins> propia biografía

#### [`fof-user-bio.forum.userbioPlaceholder`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/es@formal/?q=context%3A%3D%22fof-user-bio.forum.userbioPlaceholder%22)

> Write something about yourself

```diff
-Escribe algo sobre ti
+Escriba algo sobre usted
```

<del>Escribe</del><ins>Escriba</ins> algo sobre <del>ti</del><ins>usted</ins>


### `fof-webhooks`

#### [`fof-webhooks.admin.settings.item.tag_any_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/es@formal/?q=context%3A%3D%22fof-webhooks.admin.settings.item.tag_any_label%22)

> Any Tag

```diff
-Cualquier etiqueta
+Cualquiera
```


### `michaelbelgium-discussion-views`

#### [`michaelbelgium-discussion-views.forum.discussion_controls.resetviews_button`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-discussion-views/es@formal/?q=context%3A%3D%22michaelbelgium-discussion-views.forum.discussion_controls.resetviews_button%22)

> Reset views

```diff
-Restablecer visitas
+Restablecer vistas
```

Restablecer <del>visitas</del><ins>vistas</ins>

<!-- {% endraw %} -->
