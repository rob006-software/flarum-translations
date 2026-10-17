# French inherited translations differences

Translations for French (`fr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **5** are translated differently and **0** are
translated only in `fr`. Altogether they cover **3** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [2](#core) |
| `fof-oauth` | [1](#fof-oauth) |
| `fof-open-collective` | [2](#fof-open-collective) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `fr` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.extension.configure_scopes`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.extension.configure_scopes%22)

> Configure Scopes

```diff
-Configurer Scopes
+Configurer les champs d'application
```

Configurer <del>Scopes</del><ins>les champs d'application</ins>

#### [`core.admin.permissions.remove_scope_label`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.permissions.remove_scope_label%22)

> Remove scope of {scope}

```diff
-Supprimer la portée de {scope}
+Supprimer le champ d'application {scope}
```

Supprimer <del>la</del><ins>le</ins> <del>portée</del><ins>champ</ins> <del>de</del><ins>d'application</ins> {scope}


### `fof-oauth`

#### [`fof-oauth.admin.settings.providers.gitlab.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/fr/?q=context%3A%3D%22fof-oauth.admin.settings.providers.gitlab.description%22)

> Create an application at {link}. Give the application the &lt;code&gt;read\_user&lt;/code&gt; scope.

```diff
-Créez une application sur {link}. Donnez à l'application la portée <code>read_user</code>.
+Créez une application sur {link}. Donnez à l'application l'autorisation <code>read_user</code>.
```

Créez une application sur {link}. Donnez à l'application <del>la portée</del><ins>l'autorisation</ins> &lt;code&gt;read\_user&lt;/code&gt;.


### `fof-open-collective`

#### [`fof-open-collective.admin.settings.slug_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_help%22)

> Enter your Open Collective collective slug (the part after opencollective.com/ in your collective URL).

```diff
-Saisissez le slug de votre collectif Open Collective (la partie après opencollective.com/ dans l'URL de votre collectif).
+Saisissez l’identifiant texte unique de votre collectif Open Collective (la partie après opencollective.com/ dans l'URL de votre collectif).
```

Saisissez <del>le</del><ins>l’identifiant</ins> <del>slug</del><ins>texte unique</ins> de votre collectif Open Collective (la partie après opencollective.com/ dans l'URL de votre collectif).

#### [`fof-open-collective.admin.settings.slug_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_label%22)

> Collective Slug

```diff
-Identifiant texte unique collectif
+Identifiant texte unique du collectif
```

Identifiant texte unique <ins>du </ins>collectif

<!-- {% endraw %} -->
