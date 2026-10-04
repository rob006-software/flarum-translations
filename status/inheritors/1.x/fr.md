# French inherited translations differences

Translations for French (`fr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **3** are translated differently and **4** are
translated only in `fr`. Altogether they cover **4** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `fof-categories` | [1](#fof-categories) | 0 |
| `fof-mark-unread` | 0 | [2](#fof-mark-unread-missing) |
| `fof-oauth` | [1](#fof-oauth) | [2](#fof-oauth-missing) |
| `huseyinfiliz-notificationhub` | [1](#huseyinfiliz-notificationhub) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `fr` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-categories`

#### [`fof-categories.ref.categories`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.ref.categories%22)

> Categories

```diff
-Categories
+Catégories
```


### `fof-oauth`

#### [`fof-oauth.admin.settings.update_email_from_provider_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/fr/?q=context%3A%3D%22fof-oauth.admin.settings.update_email_from_provider_help%22)

> If enabled, logging in with an OAuth provider whose verified email differs from the user's forum email sends a confirmation link to the new address, and a notice to the current one. The email changes once the link is followed. Providers that cannot confirm the address is verified, including third-party providers that have not been updated to support it, will not change the email address.

```diff
-Si cette option est activée, l'adresse de courriel de l'utilisateur sera mise à jour pour correspondre à celle fournie par le fournisseur OAuth à chaque connexion au forum. Tous les fournisseurs ne fournissent pas l'adresse de courriel mise à jour, auquel cas ce paramètre n'aura aucun effet avec ces fournisseurs.
+Si cette option est activée, la connexion avec un fournisseur OAuth dont l'adresse de courriel vérifiée diffère de celle associée au compte sur le forum entraîne l'envoi d'un lien de confirmation à la nouvelle adresse et d'une notification à l'adresse actuelle. L'adresse de courriel est modifiée une fois que le lien a été suivi. Les fournisseurs incapables de confirmer que l'adresse est vérifiée — y compris les fournisseurs tiers n'ayant pas été mis à jour pour prendre en charge cette fonctionnalité — ne modifieront pas l'adresse de courriel.
```

Si cette option est activée, <ins>la connexion avec un fournisseur OAuth dont </ins>l'adresse de courriel<ins> vérifiée diffère</ins> de <del>l'utilisateur</del><ins>celle</ins> <del>sera</del><ins>associée</ins> <del>mise</del><ins>au compte sur le forum entraîne l'envoi d'un lien de confirmation</ins> à <del>jour</del><ins>la</ins> <del>pour</del><ins>nouvelle</ins> <del>correspondre</del><ins>adresse et d'une notification</ins> à <del>celle</del><ins>l'adresse</ins> <del>fournie</del><ins>actuelle.</ins> <del>par</del><ins>L'adresse de courriel est modifiée une fois que</ins> le <del>fournisseur</del><ins>lien</ins> <del>OAuth</del><ins>a</ins> <del>à</del><ins>été</ins> <del>chaque</del><ins>suivi.</ins> <del>connexion</del><ins>Les</ins> <del>au</del><ins>fournisseurs</ins> <del>forum.</del><ins>incapables</ins> <del>Tous</del><ins>de confirmer que l'adresse est vérifiée — y compris</ins> les fournisseurs <del>ne</del><ins>tiers</ins> <del>fournissent</del><ins>n'ayant</ins> pas <del>l'adresse</del><ins>été</ins> <del>de</del><ins>mis</ins> <del>courriel</del><ins>à</ins> <del>mise</del><ins>jour</ins> <del>à</del><ins>pour</ins> <del>jour,</del><ins>prendre</ins> <del>auquel</del><ins>en</ins> <del>cas</del><ins>charge</ins> <del>ce</del><ins>cette</ins> <del>paramètre</del><ins>fonctionnalité</ins> <del>n'aura</del><ins>—</ins> <del>aucun</del><ins>ne</ins> <del>effet</del><ins>modifieront</ins> <del>avec</del><ins>pas</ins> <del>ces</del><ins>l'adresse</ins> <del>fournisseurs.</del><ins>de courriel.</ins>


### `huseyinfiliz-notificationhub`

#### [`huseyinfiliz-notificationhub.admin.settings.no_data`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.no_data%22)

> No notification types yet.

```diff
-Il n'y a pas encore de type de notification.
+Aucun type de notification pour le moment.
```

<del>Il n'y a pas</del><ins>Aucun</ins> <del>encore</del><ins>type</ins> de <del>type</del><ins>notification</ins> <del>de</del><ins>pour</ins> <del>notification.</del><ins>le moment.</ins>


## Missing translations

These strings are translated only in `fr`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `fr`.


### `fof-mark-unread` (missing)

#### [`fof-mark-unread.admin.permissions.mark_unread_label`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/fr/?q=context%3A%3D%22fof-mark-unread.admin.permissions.mark_unread_label%22)

> Mark discussions as unread

```diff
+Marquer les discussions comme non lues
```

#### [`fof-mark-unread.forum.discussion_controls.mark_unread_button`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/fr/?q=context%3A%3D%22fof-mark-unread.forum.discussion_controls.mark_unread_button%22)

> Mark as unread

```diff
+Marquer comme non lue
```


### `fof-oauth` (missing)

#### [`fof-oauth.email.provider_email_change_notice.subject`](https://weblate.rob006.net/translate/flarum2/fof-oauth/fr/?q=context%3A%3D%22fof-oauth.email.provider_email_change_notice.subject%22)

> Email Address Change Requested

```diff
+Demande de modification de l'adresse de courriel
```

#### [`fof-oauth.forum.log_in.unverified_email_in_use`](https://weblate.rob006.net/translate/flarum2/fof-oauth/fr/?q=context%3A%3D%22fof-oauth.forum.log_in.unverified_email_in_use%22)

> {provider} hasn't confirmed this email address, so we can't use it to sign you in. If you already have an account, log in below, then link {provider} from your account settings.

```diff
+{provider} n'a pas confirmé cette adresse de courriel ; nous ne pouvons donc pas l'utiliser pour vous connecter. Si vous possédez déjà un compte, connectez-vous ci-dessous, puis associez {provider} depuis les paramètres de votre compte.
```

<!-- {% endraw %} -->
