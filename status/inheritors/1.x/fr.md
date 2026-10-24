# French inherited translations differences

Translations for French (`fr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **14** are translated differently and **26** are
translated only in `fr`. Altogether they cover **6** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [2](#core) | 0 |
| `fof-anti-spam` | [7](#fof-anti-spam) | 0 |
| `fof-badges` | 0 | [26](#fof-badges-missing) |
| `fof-oauth` | [1](#fof-oauth) | 0 |
| `fof-open-collective` | [2](#fof-open-collective) | 0 |
| `ianm-gravatar` | [2](#ianm-gravatar) | 0 |


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


### `ianm-gravatar`

#### [`ianm-gravatar.admin.settings.defaults.monsterid_label`](https://weblate.rob006.net/translate/flarum2/ianm-gravatar/fr/?q=context%3A%3D%22ianm-gravatar.admin.settings.defaults.monsterid_label%22)

> monsterid: a generated 'monster' with different colors, faces, etc

```diff
-monsterid : un « monstre » généré avec différentes couleurs, visages, etc.
+monsterid : un « monstre » généré avec différentes couleurs, visages, etc
```

monsterid : un « monstre » généré avec différentes couleurs, visages, <del>etc.</del><ins>etc</ins>

#### [`ianm-gravatar.admin.settings.defaults.robohash_label`](https://weblate.rob006.net/translate/flarum2/ianm-gravatar/fr/?q=context%3A%3D%22ianm-gravatar.admin.settings.defaults.robohash_label%22)

> robohash: a generated robot with different colors, faces, etc

```diff
-robohash : un robot généré avec différentes couleurs, visages, etc.
+robohash : un robot généré avec différentes couleurs, visages, etc
```

robohash : un robot généré avec différentes couleurs, visages, <del>etc.</del><ins>etc</ins>


## Missing translations

These strings are translated only in `fr`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `fr`.


### `fof-badges` (missing)

#### [`fof-badges.defaults.badges.active-member.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.description%22)

> Post 50 replies

```diff
+Publier 50 réponses
```

#### [`fof-badges.defaults.badges.active-member.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.active-member.name%22)

> Active Member

```diff
+Membre actif
```

#### [`fof-badges.defaults.badges.anniversary.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.description%22)

> Be a member for one year

```diff
+Être membre pendant un an
```

#### [`fof-badges.defaults.badges.anniversary.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.anniversary.name%22)

> Anniversary

```diff
+Anniversaire
```

#### [`fof-badges.defaults.badges.conversation-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.description%22)

> Start your first discussion

```diff
+Démarrez votre première discussion
```

#### [`fof-badges.defaults.badges.conversation-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.conversation-starter.name%22)

> Conversation Starter

```diff
+Sujet de conversation
```

#### [`fof-badges.defaults.badges.editor.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.editor.description%22)

> Edit 10 posts to improve them

```diff
+Modifier 10 messages pour les améliorer
```

#### [`fof-badges.defaults.badges.editor.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.editor.name%22)

> Editor

```diff
+Éditeur
```

#### [`fof-badges.defaults.badges.first-post.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.description%22)

> Write your first reply

```diff
+Rédigez votre première réponse
```

#### [`fof-badges.defaults.badges.first-post.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.first-post.name%22)

> First Post

```diff
+Premier message
```

#### [`fof-badges.defaults.badges.first-week.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.description%22)

> Be a member for 7 days

```diff
+Être membre pendant 7 jours
```

#### [`fof-badges.defaults.badges.first-week.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.first-week.name%22)

> First Week

```diff
+Première semaine
```

#### [`fof-badges.defaults.badges.profile-picture.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.description%22)

> Upload a profile picture

```diff
+Transférer une photo de profil
```

#### [`fof-badges.defaults.badges.profile-picture.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.profile-picture.name%22)

> Profile Picture

```diff
+Photo de profil
```

#### [`fof-badges.defaults.badges.prolific.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.description%22)

> Post 200 replies

```diff
+Publier 200 réponses
```

#### [`fof-badges.defaults.badges.prolific.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.prolific.name%22)

> Prolific

```diff
+Prolifique
```

#### [`fof-badges.defaults.badges.regular.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.regular.description%22)

> Be a member for 30 days

```diff
+Être membre pendant 30 jours
```

#### [`fof-badges.defaults.badges.regular.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.regular.name%22)

> Regular

```diff
+Régulier
```

#### [`fof-badges.defaults.badges.topic-starter.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.description%22)

> Start 10 discussions

```diff
+Démarrer 10 discussions
```

#### [`fof-badges.defaults.badges.topic-starter.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.badges.topic-starter.name%22)

> Topic Starter

```diff
+Auteur du sujet
```

#### [`fof-badges.defaults.categories.getting-started.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.description%22)

> Badges for new members taking their first steps

```diff
+Badges pour les nouveaux membres qui font leurs premiers pas
```

#### [`fof-badges.defaults.categories.getting-started.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.categories.getting-started.name%22)

> Getting Started

```diff
+Premiers pas
```

#### [`fof-badges.defaults.categories.milestones.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.description%22)

> Badges for reaching important milestones

```diff
+Badges pour avoir franchi des étapes importantes
```

#### [`fof-badges.defaults.categories.milestones.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.categories.milestones.name%22)

> Milestones

```diff
+Étapes importantes
```

#### [`fof-badges.defaults.categories.posting.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.categories.posting.description%22)

> Badges for posting milestones and contributions

```diff
+Badges pour la publication des étapes importantes et des contributions
```

#### [`fof-badges.defaults.categories.posting.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.defaults.categories.posting.name%22)

> Posting

```diff
+Publication
```

<!-- {% endraw %} -->
