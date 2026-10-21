# French inherited translations differences

Translations for French (`fr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **12** are translated differently and **0** are
translated only in `fr`. Altogether they cover **4** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations |
| --- | --- |
| `core` | [2](#core) |
| `fof-anti-spam` | [7](#fof-anti-spam) |
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


### `fof-anti-spam`

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
-A marqué {username} comme indésirable
+A marqué {username} comme polluposteur
```

A marqué {username} comme <del>indésirable</del><ins>polluposteur</ins>

#### [`fof-anti-spam.admin.permissions.spamblock_users_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22fof-anti-spam.admin.permissions.spamblock_users_label%22)

> Mark user as spammer

```diff
-Marquer l'utilisateur comme indésirable
+Marquer l'utilisateur comme polluposteur
```

Marquer l'utilisateur comme <del>indésirable</del><ins>polluposteur</ins>

#### [`fof-anti-spam.admin.settings.default-actions.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.introduction%22)

> When a user is marked as a spammer, moderators are able to choose from various actions on how to deal with the particular use case. These settings allow you to pre-set the actions you'll normally take, to speed up the process, but also allowing for variations as needed.

```diff
-Lorsqu'un utilisateur est marqué comme indésirable, les modérateurs peuvent choisir parmi différentes actions pour traiter ce cas d'utilisation particulier. Ces paramètres vous autorisent à prédéfinir les actions que vous entreprendrez normalement, afin d'accélérer le processus, tout en autorisant des variations en cas de besoin.
+Lorsqu'un utilisateur est marqué comme polluposteur, les modérateurs peuvent choisir parmi différentes actions pour traiter ce cas d'utilisation particulier. Ces paramètres vous autorisent à prédéfinir les actions que vous entreprendrez normalement, afin d'accélérer le processus, tout en autorisant des variations en cas de besoin.
```

Lorsqu'un utilisateur est marqué comme <del>indésirable,</del><ins>polluposteur,</ins> les modérateurs peuvent choisir parmi différentes actions pour traiter ce cas d'utilisation particulier. Ces paramètres vous autorisent à prédéfinir les actions que vous entreprendrez normalement, afin d'accélérer le processus, tout en autorisant des variations en cas de besoin.

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_text%22)

> You have the option to report spammers to StopForumSpam in order to keep the greater forum community spam free.

```diff
-Vous avez la possibilité de signaler les utilisateurs indésirables à StopForumSpam afin d'améliorer la qualité de la communauté.
+Vous avez la possibilité de signaler les polluposteurs à StopForumSpam afin d'améliorer la qualité de la communauté.
```

Vous avez la possibilité de signaler les <del>utilisateurs indésirables</del><ins>polluposteurs</ins> à StopForumSpam afin d'améliorer la qualité de la communauté.

#### [`fof-anti-spam.forum.spammer_modal.intro`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.intro%22)

> When marking a user as a spammer, several actions will be taken, which depends on the extensions available on your forum.

```diff
-Lorsqu'un utilisateur est marqué comme indésirable, plusieurs actions sont entreprises, qui dépendent des extensions disponibles sur votre forum.
+Lorsqu'un utilisateur est marqué comme polluposteur, plusieurs actions sont entreprises, qui dépendent des extensions disponibles sur votre forum.
```

Lorsqu'un utilisateur est marqué comme <del>indésirable,</del><ins>polluposteur,</ins> plusieurs actions sont entreprises, qui dépendent des extensions disponibles sur votre forum.

#### [`fof-anti-spam.forum.spammer_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.title%22)

> Mark {username} as a spammer

```diff
-Marquer {username} comme indésirable
+Marquer {username} comme polluposteur
```

Marquer {username} comme <del>indésirable</del><ins>polluposteur</ins>

#### [`fof-anti-spam.forum.user_controls.spammer_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22fof-anti-spam.forum.user_controls.spammer_button%22)

> Spammer

```diff
-Indésirable
+Polluposteur
```


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
