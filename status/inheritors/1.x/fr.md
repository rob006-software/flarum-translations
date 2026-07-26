# French inherited translations differences

Translations for French (`fr`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **125** are translated differently and **1118** are
translated only in `fr`. Altogether they cover **54** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `acpl-lscache` | [1](#acpl-lscache) | 0 |
| `core` | [7](#core) | 0 |
| `datitisev-backup` | [1](#datitisev-backup) | 0 |
| `ekumanov-inline-audio` | [4](#ekumanov-inline-audio) | 0 |
| `ekumanov-new-posts-notice` | [2](#ekumanov-new-posts-notice) | 0 |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `flarum-extension-manager` | [2](#flarum-extension-manager) | 0 |
| `flarum-subscriptions` | [1](#flarum-subscriptions) | 0 |
| `fof-anti-spam` | 0 | [2](#fof-anti-spam-missing) |
| `fof-author-change` | 0 | [16](#fof-author-change-missing) |
| `fof-badges` | 0 | [289](#fof-badges-missing) |
| `fof-best-answer` | [4](#fof-best-answer) | [2](#fof-best-answer-missing) |
| `fof-categories` | [15](#fof-categories) | 0 |
| `fof-checklist` | [2](#fof-checklist) | 0 |
| `fof-follow-tags` | 0 | [17](#fof-follow-tags-missing) |
| `fof-forum-stats-widget` | [1](#fof-forum-stats-widget) | 0 |
| `fof-forum-widgets-core` | [3](#fof-forum-widgets-core) | 0 |
| `fof-gamification` | [1](#fof-gamification) | 0 |
| `fof-geoip` | 0 | [20](#fof-geoip-missing) |
| `fof-github-sponsors` | [4](#fof-github-sponsors) | 0 |
| `fof-mailing` | 0 | [19](#fof-mailing-missing) |
| `fof-masquerade` | [1](#fof-masquerade) | [1](#fof-masquerade-missing) |
| `fof-move-posts` | [12](#fof-move-posts) | 0 |
| `fof-online-users-widget` | [3](#fof-online-users-widget) | 0 |
| `fof-open-collective` | [6](#fof-open-collective) | 0 |
| `fof-photoswipe` | 0 | [5](#fof-photoswipe-missing) |
| `fof-polls` | 0 | [27](#fof-polls-missing) |
| `fof-reactions` | [1](#fof-reactions) | 0 |
| `fof-rich-text` | [6](#fof-rich-text) | 0 |
| `fof-sentry` | [17](#fof-sentry) | 0 |
| `fof-seo` | 0 | [195](#fof-seo-missing) |
| `fof-signature` | 0 | [17](#fof-signature-missing) |
| `fof-sitemap` | [3](#fof-sitemap) | 0 |
| `fof-upload` | [2](#fof-upload) | 0 |
| `forumaker-magicbb` | 0 | [46](#forumaker-magicbb-missing) |
| `forumaker-magicread` | [4](#forumaker-magicread) | [13](#forumaker-magicread-missing) |
| `huoxin-relative-url` | [1](#huoxin-relative-url) | 0 |
| `huseyinfiliz-awards` | 0 | [186](#huseyinfiliz-awards-missing) |
| `huseyinfiliz-notificationhub` | [1](#huseyinfiliz-notificationhub) | [19](#huseyinfiliz-notificationhub-missing) |
| `huseyinfiliz-sticky-title` | 0 | [29](#huseyinfiliz-sticky-title-missing) |
| `ianm-follow-users` | [1](#ianm-follow-users) | 0 |
| `ianm-log-viewer` | [1](#ianm-log-viewer) | 0 |
| `ianm-twofactor` | [1](#ianm-twofactor) | 0 |
| `import-ai-webhook-notification` | [2](#import-ai-webhook-notification) | 0 |
| `justoverclock-related-discussions` | [1](#justoverclock-related-discussions) | 0 |
| `justoverclock-welcomebox` | [1](#justoverclock-welcomebox) | 0 |
| `michaelbelgium-ai-autoreply` | 0 | [22](#michaelbelgium-ai-autoreply-missing) |
| `pianotell-flamoji` | 0 | [100](#pianotell-flamoji-missing) |
| `ralkage-cap-captcha` | [1](#ralkage-cap-captcha) | 0 |
| `ralkage-hcaptcha` | [2](#ralkage-hcaptcha) | 0 |
| `shebaoting-dependency-collector` | [3](#shebaoting-dependency-collector) | 0 |
| `shebaoting-money` | [2](#shebaoting-money) | 0 |
| `vlssu-cravatar` | [4](#vlssu-cravatar) | 0 |
| `yippy-auth-ldap` | [1](#yippy-auth-ldap) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `fr` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `acpl-lscache`

#### [`acpl-lscache.admin.test_failed_alert`](https://weblate.rob006.net/translate/flarum2/acpl-lscache/fr/?q=context%3A%3D%22acpl-lscache.admin.test_failed_alert%22)

> It looks like your server does not support LSCache. Check your server configuration. Detected server: &lt;b&gt;{server}&lt;/b&gt;, detected LiteSpeed type: &lt;b&gt;{type}&lt;/b&gt;.

```diff
-Il semble que votre serveur ne prenne pas en charge LSCache. Vérifiez la configuration de votre serveur. Serveur détecté : <b>{server}</b>, type de LiteSpeed détecté : <b>{type}</b>.
+Il semble que votre serveur ne prenne pas en charge LSCache. Veuillez vérifier la configuration de votre serveur. Serveur détecté : <b>{server}</b>, type LiteSpeed détecté : <b>{type}</b>.
```

Il semble que votre serveur ne prenne pas en charge LSCache. <del>Vérifiez</del><ins>Veuillez vérifier</ins> la configuration de votre serveur. Serveur détecté : &lt;b&gt;{server}&lt;/b&gt;, type<del> de</del> LiteSpeed détecté : &lt;b&gt;{type}&lt;/b&gt;.


### `core`

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
-Dernières actualités et annonces de l'équipe de Flarum.
+Dernières actualités et annonces de l'équipe Flarum.
```

Dernières actualités et annonces de l'équipe <del>de </del>Flarum.

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
-En savoir plus
+Lire la suite
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
-Tout afficher sur discuss.flarum.org
+Toutes les annonces sur discuss.flarum.org
```

<del>Tout</del><ins>Toutes</ins> <del>afficher</del><ins>les annonces</ins> sur discuss.flarum.org

#### [`core.admin.edit_group.plural_placeholder`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.edit_group.plural_placeholder%22)

> Plural (e.g. Mods)

```diff
-Pluriel (par exemple « modérateurs »)
+Pluriel (p. ex. « Modérateurs »)
```

Pluriel <del>(par</del><ins>(p.</ins> <del>exemple</del><ins>ex.</ins> « <del>modérateurs</del><ins>Modérateurs</ins> »)

#### [`core.admin.edit_group.singular_placeholder`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.admin.edit_group.singular_placeholder%22)

> Singular (e.g. Mod)

```diff
-Singulier (par exemple « modérateur »)
+Singulier (p. ex. « Modérateur »)
```

Singulier <del>(par</del><ins>(p.</ins> <del>exemple</del><ins>ex.</ins> « <del>modérateur</del><ins>Modérateur</ins> »)

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-Revenir à la liste de discussions
+Revenir à la liste de discussion
```

Revenir à la liste de <del>discussions</del><ins>discussion</ins>

#### [`core.forum.index_sort.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/fr/?q=context%3A%3D%22core.forum.index_sort.toggle_dropdown_accessible_label%22)

> Change discussion list sorting

```diff
-Modifier le tri des listes de discussion
+Modifier l'ordre d'affichage de la liste de discussion
```

Modifier <del>le</del><ins>l'ordre</ins> <del>tri</del><ins>d'affichage</ins> <del>des</del><ins>de</ins> <del>listes</del><ins>la liste</ins> de discussion


### `datitisev-backup`

#### [`datitisev-backup.admin.adapter-settings-modal.ftp.host.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/fr/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.ftp.host.description%22)

> The hostname to connect to with FTP, eg: &lt;em&gt;ftp.yourdomain.local&lt;/em&gt;.

```diff
-Le nom d'hôte auquel se connecter avec FTP, par exemple : <em>ftp.votredomaine.local</em>.
+Le nom d'hôte auquel se connecter avec FTP, p. ex. : <em>ftp.votredomaine.local</em>.
```

Le nom d'hôte auquel se connecter avec FTP, <del>par</del><ins>p.</ins> <del>exemple</del><ins>ex.</ins> : &lt;em&gt;ftp.votredomaine.local&lt;/em&gt;.


### `ekumanov-inline-audio`

#### [`ekumanov-inline-audio.admin.settings.auto_play`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/fr/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.auto_play%22)

> Start playing immediately when a filename is clicked

```diff
-Lancer la lecture dès qu'on clique sur un nom de fichier
+Lancer la lecture immédiatement lorsqu'un nom de fichier est cliqué
```

Lancer la lecture <del>dès qu'on clique sur</del><ins>immédiatement</ins> <del>un</del><ins>lorsqu'un</ins> nom de fichier<ins> est cliqué</ins>

#### [`ekumanov-inline-audio.admin.settings.show_download_button`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/fr/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_download_button%22)

> Show download button on player bar

```diff
-Afficher le bouton de téléchargement dans la barre du lecteur
+Afficher le bouton de téléchargement dans la barre du lecteur audio
```

Afficher le bouton de téléchargement dans la barre du lecteur<ins> audio</ins>

#### [`ekumanov-inline-audio.admin.settings.show_right_click_download`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/fr/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.show_right_click_download%22)

> Allow right-click on filename to save the file

```diff
-Autoriser le clic droit sur le nom du fichier pour enregistrer le fichier
+Autoriser le clic droit sur le nom du fichier pour enregistrer
```

Autoriser le clic droit sur le nom du fichier pour enregistrer<del> le fichier</del>

#### [`ekumanov-inline-audio.admin.settings.strip_upload_prefix`](https://weblate.rob006.net/translate/flarum2/ekumanov-inline-audio/fr/?q=context%3A%3D%22ekumanov-inline-audio.admin.settings.strip_upload_prefix%22)

> Hide numeric prefix from uploaded filenames (e.g. "1774205518-685373-song.mp3" → "song.mp3")

```diff
-Masquer le préfixe numérique des noms de fichiers téléchargés (par exemple : « 1774205518-685373-song.mp3 » → « song.mp3 »)
+Masquer le préfixe numérique des noms de fichiers transférés (par ex. « 1774205518-685373-song.mp3 » → « song.mp3 »)
```

Masquer le préfixe numérique des noms de fichiers <del>téléchargés</del><ins>transférés</ins> (par<del> exemple</del> <del>:</del><ins>ex.</ins> « 1774205518-685373-song.mp3 » → « song.mp3 »)


### `ekumanov-new-posts-notice`

#### [`ekumanov-new-posts-notice.forum.new_posts_plural`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/fr/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_plural%22)

> {count} new replies were added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read them first (your draft stays open)

```diff
 {count} nouvelles réponses ont été ajoutées pendant que vous écriviez.

-Valider → Publier quand même votre réponse
-Annuler → Les lire d'abord (votre brouillon reste ouvert)
+OK → Publier quand même votre réponse
+Annuler → Lire d'abord les réponses qui ont été ajoutées (votre brouillon reste ouvert)
```

{count} nouvelles réponses ont été ajoutées pendant que vous écriviez.<br /><br /><del>Valider</del><ins>OK</ins> → Publier quand même votre réponse<br />Annuler →<del> Les</del> <del>lire</del><ins>Lire</ins> d'abord<ins> les réponses qui ont été ajoutées</ins> (votre brouillon reste ouvert)

#### [`ekumanov-new-posts-notice.forum.new_posts_single`](https://weblate.rob006.net/translate/flarum2/ekumanov-new-posts-notice/fr/?q=context%3A%3D%22ekumanov-new-posts-notice.forum.new_posts_single%22)

> 1 new reply was added while you were writing.
>
> OK → Post your reply anyway
> Cancel → Read it first (your draft stays open)

```diff
 Une nouvelle réponse a été ajoutée pendant que vous écriviez.

-Valider → Publier quand même votre réponse
-Annuler → La lire d'abord (votre brouillon reste ouvert)
+OK → Publier quand même votre réponse
+Annuler → Lire d'abord la réponse qui a été ajoutée (votre brouillon reste ouvert)
```

Une nouvelle réponse a été ajoutée pendant que vous écriviez.<br /><br /><del>Valider</del><ins>OK</ins> → Publier quand même votre réponse<br />Annuler →<del> La</del> <del>lire</del><ins>Lire</ins> d'abord<ins> la réponse qui a été ajoutée</ins> (votre brouillon reste ouvert)


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.sections.queue.output_modal.guessed_cause`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/fr/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.guessed_cause%22)

> Cause

```diff
-Cause
+Raison
```

#### [`flarum-extension-manager.admin.why_not_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/fr/?q=context%3A%3D%22flarum-extension-manager.admin.why_not_modal.title%22)

> Why Won't it Update

```diff
-Pourquoi la mise à jour ne se fait-elle pas ?
+Pourquoi la mise à jour ne s'effectue-t-elle pas ?
```

Pourquoi la mise à jour ne <del>se fait-elle</del><ins>s'effectue-t-elle</ins> pas ?


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/fr/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-Ne jamais être notifié. Masquer de la liste de discussions.
+Ne jamais être notifié. Masquer de la liste de discussion.
```

Ne jamais être notifié. Masquer de la liste de <del>discussions.</del><ins>discussion.</ins>


### `fof-best-answer`

#### [`fof-best-answer.admin.permissions.allow_select_own_post`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fr/?q=context%3A%3D%22fof-best-answer.admin.permissions.allow_select_own_post%22)

> Select own post as Best Answer

```diff
-Sélectionner votre propre message comme meilleure réponse
+Sélectionner son propre message comme meilleure réponse
```

Sélectionner <del>votre</del><ins>son</ins> propre message comme meilleure réponse

#### [`fof-best-answer.admin.permissions.best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fr/?q=context%3A%3D%22fof-best-answer.admin.permissions.best_answer%22)

> Select Best Answer (own Discussion)

```diff
-Sélectionnez la meilleure réponse (sur sa propre discussion)
+Sélectionner la meilleure réponse (sur sa propre discussion)
```

<del>Sélectionnez</del><ins>Sélectionner</ins> la meilleure réponse (sur sa propre discussion)

#### [`fof-best-answer.admin.permissions.best_answer_not_own_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fr/?q=context%3A%3D%22fof-best-answer.admin.permissions.best_answer_not_own_discussion%22)

> Select Best Answer (not own Discussion)

```diff
-Sélectionnez la meilleure réponse (pas sur sa propre discussion)
+Sélectionner la meilleure réponse (pas sur sa propre discussion)
```

<del>Sélectionnez</del><ins>Sélectionner</ins> la meilleure réponse (pas sur sa propre discussion)

#### [`fof-best-answer.admin.settings.show_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fr/?q=context%3A%3D%22fof-best-answer.admin.settings.show_filter_help%22)

> For tags which have Best Answers enabled, choose to display solved/unsolved filter option in the discussion list

```diff
-Pour les étiquettes avec lesquelles l'extension « Best Answers » est activée, décidez d'afficher l'option de filtre résolu/non résolu dans la liste de discussions
+Pour les étiquettes avec lesquelles l'extension « Best Answers » est activée, décidez d'afficher l'option de filtre résolu/non résolu dans la liste des discussions
```

Pour les étiquettes avec lesquelles l'extension « Best Answers » est activée, décidez d'afficher l'option de filtre résolu/non résolu dans la liste <del>de</del><ins>des</ins> discussions


### `fof-categories`

#### [`fof-categories.admin.headings.child_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.headings.child_display%22)

> Child Category Display

```diff
-Affichage des sous-catégories
+Affichage de la catégorie-enfant
```

Affichage <del>des</del><ins>de</ins> <del>sous-catégories</del><ins>la catégorie-enfant</ins>

#### [`fof-categories.admin.headings.parent_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.headings.parent_display%22)

> Parent Category Display

```diff
-Affichage de la catégorie parente
+Affichage de la catégorie-parent
```

Affichage de la <del>catégorie parente</del><ins>catégorie-parent</ins>

#### [`fof-categories.admin.help.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.help.child_bare_icon%22)

> Should icons on child categories be displayed without a circular background?

```diff
-Les icônes des sous-catégories doivent-elles s'afficher sans fond circulaire ?
+Les icônes des catégories-enfants doivent-elles être affichées sans fond circulaire ?
```

Les icônes des <del>sous-catégories</del><ins>catégories-enfants</ins> doivent-elles <del>s'afficher</del><ins>être affichées</ins> sans fond circulaire ?

#### [`fof-categories.admin.help.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.help.full_page_desktop%22)

> Should the sidebar nav menu be collapsed to a row (like on the traditional tags page)? This will also hide widgets (such as Friends of Flarum Forum Statistics) from the categories page navbar.

```diff
-Faut-il réduire le menu de navigation latéral à une seule ligne (comme sur la page des étiquettes classique) ? Cela masquera également les widgets (tels que « Friends of Flarum » et « Forum Statistics ») de la barre de navigation de la page des catégories.
+Le menu de la barre de navigation latérale doit-il être réduit à une seule ligne (comme sur la page traditionnelle des étiquettes) ? Cela permettrait également de masquer les widgets (tels que ceux de l'extension Forum Statistics de Friends of Flarum) de la barre de navigation de la page des catégories.
```

<del>Faut-il</del><ins>Le</ins> <del>réduire</del><ins>menu</ins> <del>le</del><ins>de</ins> <del>menu</del><ins>la barre</ins> de navigation <del>latéral</del><ins>latérale doit-il être réduit</ins> à une seule ligne (comme sur la page <del>des</del><ins>traditionnelle</ins> <del>étiquettes</del><ins>des</ins> <del>classique)</del><ins>étiquettes)</ins> ? Cela <del>masquera</del><ins>permettrait</ins> également<ins> de masquer</ins> les widgets (tels que<del> «</del> <del>Friends</del><ins>ceux</ins> <del>of</del><ins>de</ins> <del>Flarum</del><ins>l'extension</ins> <del>»</del><ins>Forum</ins> <del>et</del><ins>Statistics</ins> <del>«</del><ins>de</ins> <del>Forum</del><ins>Friends</ins> <del>Statistics</del><ins>of</ins> <del>»)</del><ins>Flarum)</ins> de la barre de navigation de la page des catégories.

#### [`fof-categories.admin.help.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.help.small_forum_optimized%22)

> This will give more accurate discussion/post counts, but will slow medium and large forums dramatically.

```diff
-Cela permettra d'obtenir un décompte plus précis des discussions et des messages, mais ralentira considérablement les forums de taille moyenne et grande.
+Cela donnera un compte plus précis des discussions et des messages, mais ralentira considérablement les forums intermédiaires et importants.
```

Cela <del>permettra d'obtenir</del><ins>donnera</ins> un <del>décompte</del><ins>compte</ins> plus précis des discussions et des messages, mais ralentira considérablement les forums<del> de taille</del> <del>moyenne</del><ins>intermédiaires</ins> et <del>grande.</del><ins>importants.</ins>

#### [`fof-categories.admin.labels.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.child_bare_icon%22)

> Bare child icons?

```diff
-Des sous-icônes ?
+Icônes de catégories-enfants vierges ?
```

<del>Des</del><ins>Icônes</ins> <del>sous-icônes</del><ins>de catégories-enfants vierges</ins> ?

#### [`fof-categories.admin.labels.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.full_page_desktop%22)

> Full page desktop?

```diff
-Plein écran sur ordinateur ?
+Version pour ordinateur ?
```

<del>Plein écran</del><ins>Version</ins> <del>sur</del><ins>pour</ins> ordinateur ?

#### [`fof-categories.admin.labels.keep_tags_nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.keep_tags_nav%22)

> Keep the tags page link in the nav sidebar?

```diff
-Faut-il conserver le lien vers la page des étiquettes dans la barre de navigation latérale ?
+Conserver le lien vers la page des étiquettes dans la barre latérale de navigation ?
```

<del>Faut-il conserver</del><ins>Conserver</ins> le lien vers la page des étiquettes dans la barre<ins> latérale</ins> de navigation<del> latérale</del> ?

#### [`fof-categories.admin.labels.parent_remove_description`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_description%22)

> Hide descriptions for top-level tags?

```diff
-Masquer les descriptions des étiquettes de premier niveau ?
+Masquer les descriptions des étiquettes de niveau supérieur ?
```

Masquer les descriptions des étiquettes de <del>premier </del>niveau<ins> supérieur</ins> ?

#### [`fof-categories.admin.labels.parent_remove_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_icon%22)

> Hide icons for top-level tags?

```diff
-Masquer les icônes des étiquettes de premier niveau ?
+Masquer les icônes des étiquettes de niveau supérieur ?
```

Masquer les icônes des étiquettes de <del>premier </del>niveau<ins> supérieur</ins> ?

#### [`fof-categories.admin.labels.parent_remove_last_discussion`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_last_discussion%22)

> Hide most recent discussions for top-level tags?

```diff
-Masquer les discussions les plus récentes pour les étiquettes de premier niveau ?
+Masquer les discussions les plus récentes des étiquettes de niveau supérieur ?
```

Masquer les discussions les plus récentes <del>pour les</del><ins>des</ins> étiquettes de<del> premier</del> niveau<ins> supérieur</ins> ?

#### [`fof-categories.admin.labels.parent_remove_stats`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_stats%22)

> Hide stats for top-level tags?

```diff
-Masquer les statistiques des étiquettes de premier niveau ?
+Masquer les statistiques des étiquettes de niveau supérieur ?
```

Masquer les statistiques des étiquettes de <del>premier </del>niveau<ins> supérieur</ins> ?

#### [`fof-categories.forum.header.back_to_categories_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.forum.header.back_to_categories_tooltip%22)

> Back to Categories

```diff
-Retour aux catégories
+Revenir aux catégories
```

<del>Retour</del><ins>Revenir</ins> aux catégories

#### [`fof-categories.forum.last_discussion_widget.no_discussions`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.forum.last_discussion_widget.no_discussions%22)

> No Discussions (Yet!)

```diff
-Pas encore de discussions (pour l'instant !)
+Aucune discussion (pour le moment !)
```

<del>Pas encore de</del><ins>Aucune</ins> <del>discussions</del><ins>discussion</ins> (pour <del>l'instant</del><ins>le moment</ins> !)

#### [`fof-categories.ref.categories`](https://weblate.rob006.net/translate/flarum2/fof-categories/fr/?q=context%3A%3D%22fof-categories.ref.categories%22)

> Categories

```diff
-Categories
+Catégories
```


### `fof-checklist`

#### [`fof-checklist.admin.settings.cross_out_completed_items`](https://weblate.rob006.net/translate/flarum2/fof-checklist/fr/?q=context%3A%3D%22fof-checklist.admin.settings.cross_out_completed_items%22)

> Cross out completed checklist items?

```diff
-Barrer les éléments déjà cochés de la liste de tâches ?
+Rayer les éléments de la liste de contrôle remplis ?
```

<del>Barrer</del><ins>Rayer</ins> les éléments<del> déjà cochés</del> de la liste de <del>tâches</del><ins>contrôle</ins> <ins>remplis </ins>?

#### [`fof-checklist.lib.composer.checklist_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-checklist/fr/?q=context%3A%3D%22fof-checklist.lib.composer.checklist_tooltip%22)

> Toggle Checklist

```diff
-Activer la liste de tâches
+Activer la liste de contrôle
```

Activer la liste de <del>tâches</del><ins>contrôle</ins>


### `fof-forum-stats-widget`

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/fr/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
-Nombre de décimales à afficher pour les grands nombres (0 à 2).
+Le nombre de décimales à afficher pour les grands nombres (0 à 2).
```

<del>Nombre</del><ins>Le nombre</ins> de décimales à afficher pour les grands nombres (0 à 2).


### `fof-forum-widgets-core`

#### [`fof-forum-widgets-core.admin.cache_not_writable_warning`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/fr/?q=context%3A%3D%22fof-forum-widgets-core.admin.cache_not_writable_warning%22)

> Cache is currently not writable, this will prevent certain widgets from working. Please fix your storage directory's permissions.

```diff
-Le cache n'est actuellement pas accessible en écriture, ce qui empêchera certains widgets de fonctionner. Veuillez corriger les droits d'accès de votre répertoire de stockage.
+Le cache n'est actuellement pas accessible en écriture, ce qui empêchera certains widgets de fonctionner. Veuillez corriger les permissions de votre répertoire de stockage.
```

Le cache n'est actuellement pas accessible en écriture, ce qui empêchera certains widgets de fonctionner. Veuillez corriger les <del>droits d'accès</del><ins>permissions</ins> de votre répertoire de stockage.

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/fr/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load%22)

> Prefer loading all widgets data with initial page response.

```diff
-Préférer le chargement de toutes les données des widgets lors de la réponse initiale de la page.
+Préférer le chargement de toutes les données des widgets avec la réponse initiale de la page.
```

Préférer le chargement de toutes les données des widgets <del>lors de</del><ins>avec</ins> la réponse initiale de la page.

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/fr/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help%22)

> Instead of loading widget data after initial page load by sending API requests, the data will be (when possible) loaded with the inital load.

```diff
-Au lieu de charger les données des widgets après le chargement initial de la page en envoyant des requêtes API, celles-ci seront (dans la mesure du possible) chargées dès le chargement initial.
+Au lieu de charger les données des widgets après le chargement initial de la page en envoyant des requêtes API, les données seront, si possible, chargées lors du chargement initial.
```

Au lieu de charger les données des widgets après le chargement initial de la page en envoyant des requêtes API, <del>celles-ci seront (dans</del><ins>les</ins> <del>la</del><ins>données</ins> <del>mesure</del><ins>seront,</ins> <del>du</del><ins>si</ins> <del>possible)</del><ins>possible,</ins> chargées <del>dès</del><ins>lors</ins> <del>le</del><ins>du</ins> chargement initial.


### `fof-gamification`

#### [`fof-gamification.admin.page.votes.icon_help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/fr/?q=context%3A%3D%22fof-gamification.admin.page.votes.icon_help%22)

> Input any Font-Awesome icon that is suffixed with -up and -down. Examples: arrow, thumbs, chevron

```diff
-Entrez n'importe quelle icône Font Awesome ayant le suffixe -up et -down. Exemples : flèche, pouce, chevron
+Saisissez n'importe quelle icône Font Awesome ayant le suffixe -up et -down. Exemples : flèche, pouce, chevron
```

<del>Entrez</del><ins>Saisissez</ins> n'importe quelle icône Font Awesome ayant le suffixe -up et -down. Exemples : flèche, pouce, chevron


### `fof-github-sponsors`

#### [`fof-github-sponsors.admin.settings.account_type_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/fr/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_help%22)

> Select whether you're tracking sponsors for a personal GitHub user account or an organization account.

```diff
-Indiquez si vous effectuez le suivi des sponsors pour un compte utilisateur GitHub personnel ou pour un compte d'organisation.
+Sélectionner si vous souhaitez suivre les sponsors d'un compte utilisateur GitHub personnel ou d'un compte d'organisation.
```

<del>Indiquez</del><ins>Sélectionner</ins> si vous<del> effectuez</del> <del>le</del><ins>souhaitez</ins> <del>suivi</del><ins>suivre</ins> <del>des</del><ins>les</ins> sponsors<del> pour</del> <del>un</del><ins>d'un</ins> compte utilisateur GitHub personnel ou<del> pour</del> <del>un</del><ins>d'un</ins> compte d'organisation.

#### [`fof-github-sponsors.admin.settings.api_token_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/fr/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_help%22)

> Create a personal access token at &lt;a&gt;https://github.com/settings/tokens/new&lt;/a&gt; with the &lt;code&gt;user&lt;/code&gt; and &lt;code&gt;read:org&lt;/code&gt; scopes. This token is used to fetch your sponsor information from GitHub.

```diff
-Créez un jeton d'accès personnel à l'adresse <a>https://github.com/settings/tokens/new</a> avec les champs d'application <code>user</code> et <code>read:org</code>. Ce jeton sert à récupérer vos informations de parrainage depuis GitHub.
+Créez un jeton d'accès personnel sur <a>https://github.com/settings/tokens/new</a> avec les champs <code>user</code> et <code>read:org</code>. Ce jeton sert à récupérer vos informations de parrainage sur GitHub.
```

Créez un jeton d'accès personnel <del>à l'adresse</del><ins>sur</ins> &lt;a&gt;https://github.com/settings/tokens/new&lt;/a&gt; avec les champs<del> d'application</del> &lt;code&gt;user&lt;/code&gt; et &lt;code&gt;read:org&lt;/code&gt;. Ce jeton sert à récupérer vos informations de parrainage <del>depuis</del><ins>sur</ins> GitHub.

#### [`fof-github-sponsors.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/fr/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_help%22)

> Select which Flarum user group sponsors should be added to. Users will be automatically added when they become sponsors and removed when they stop sponsoring.

```diff
-Sélectionnez le groupe d'utilisateurs Flarum auquel les sponsors doivent être ajoutés. Les utilisateurs seront automatiquement ajoutés lorsqu'ils deviendront sponsors et supprimés lorsqu'ils cesseront de l'être.
+Sélectionner le groupe d'utilisateur Flarum auquel les sponsors doivent être ajoutés. Les utilisateurs seront automatiquement ajoutés lorsqu'ils deviendront sponsors et supprimés lorsqu'ils cesseront d'être sponsors.
```

<del>Sélectionnez</del><ins>Sélectionner</ins> le groupe <del>d'utilisateurs</del><ins>d'utilisateur</ins> Flarum auquel les sponsors doivent être ajoutés. Les utilisateurs seront automatiquement ajoutés lorsqu'ils deviendront sponsors et supprimés lorsqu'ils cesseront <del>de</del><ins>d'être</ins> <del>l'être.</del><ins>sponsors.</ins>

#### [`fof-github-sponsors.admin.settings.login_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/fr/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_help%22)

> Enter your GitHub username (for user accounts) or organization name (for organizations). This is the account whose sponsors will be synchronized.

```diff
-Saisissez votre nom d'utilisateur GitHub (pour les comptes individuels) ou le nom de votre organisation (pour les organisations). Il s'agit du compte dont les sponsors seront synchronisés.
+Saisissez votre nom d'utilisateur GitHub (pour les comptes utilisateurs) ou le nom de votre organisation (pour les organisations). Il s'agit du compte dont les sponsors seront synchronisés.
```

Saisissez votre nom d'utilisateur GitHub (pour les comptes <del>individuels)</del><ins>utilisateurs)</ins> ou le nom de votre organisation (pour les organisations). Il s'agit du compte dont les sponsors seront synchronisés.


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/fr/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
-Vérifiez les <a>règles de validation de Laravel</a> prises en charge. Par exemple : « string|min:5 » ou « url ».
+Vérifiez les <a>règles de validation de Laravel</a> prises en charge. P. ex. : « string|min:5 » ou « url ».

```

Vérifiez les &lt;a&gt;règles de validation de Laravel&lt;/a&gt; prises en charge. <del>Par</del><ins>P.</ins> <del>exemple</del><ins>ex.</ins> : « string\|min:5 » ou « url ».<br />


### `fof-move-posts`

#### [`fof-move-posts.admin.settings.group_sequential_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.admin.settings.group_sequential_posts%22)

> Group sequential post moved event posts into one.

```diff
-Regroupement des messages séquentielle publiés après l'événement en un seul.
+La publication séquentielle de groupe a déplacé les publications d'événements en une seule.
```

<del>Regroupement des</del><ins>La</ins> <del>messages</del><ins>publication</ins> séquentielle <del>publiés</del><ins>de</ins> <del>après</del><ins>groupe</ins> <del>l'événement</del><ins>a déplacé les publications d'événements</ins> en <del>un</del><ins>une</ins> <del>seul.</del><ins>seule.</ins>

#### [`fof-move-posts.admin.settings.moved_first_post_content_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content_help%22)

> When you have a discussion with only one single post, moving that post will result in the initial discussion's first post to be edited to point to the new discussion. You can edit the contents of that post here.
>

```diff
-Lorsque vous participez à une discussion qui ne comporte qu'un seul message, le déplacement de ce message entraînera la modification du premier message de la discussion d'origine afin qu'il renvoie vers la nouvelle discussion. Vous pouvez modifier le contenu de ce message ici.
+Lorsque vous avez une discussion avec un seul message, le déplacement de ce message entraînera la modification du premier message de la discussion initiale pour pointer vers la nouvelle discussion. Vous pouvez modifier le contenu de cette publication ici.

```

Lorsque vous <del>participez à</del><ins>avez</ins> une discussion<del> qui ne</del> <del>comporte</del><ins>avec</ins> <del>qu'un</del><ins>un</ins> seul message, le déplacement de ce message entraînera la modification du premier message de la discussion<del> d'origine</del> <del>afin</del><ins>initiale</ins> <del>qu'il</del><ins>pour</ins> <del>renvoie</del><ins>pointer</ins> vers la nouvelle discussion. Vous pouvez modifier le contenu de <del>ce</del><ins>cette</ins> <del>message</del><ins>publication</ins> ici.<br />

#### [`fof-move-posts.forum.badge.first_moved_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.badge.first_moved_tooltip%22)

> Moved

```diff
-Déplacé
+Déplacée
```

#### [`fof-move-posts.forum.modal.destination`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.modal.destination%22)

> Destination Discussion

```diff
-Discussion de destination
+Destination de la discussion
```

<del>Discussion</del><ins>Destination</ins> de <del>destination</del><ins>la discussion</ins>

#### [`fof-move-posts.forum.modal.discussion_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_help%22)

> The tags of the source discussion will be used, and can be changed after creation.

```diff
-Les étiquettes de la discussion d'origine seront utilisées et pourront être modifiées après la création.
+Les étiquettes de la discussion source seront utilisées et pourront être modifiées après sa création.
```

Les étiquettes de la discussion <del>d'origine</del><ins>source</ins> seront utilisées et pourront être modifiées après <del>la</del><ins>sa</ins> création.

#### [`fof-move-posts.forum.modal.selected_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.modal.selected_posts%22)

> {count, plural, one {One Post Selected} other {{count} Posts Selected}}

```diff
-{count, plural, one {Un message sélectionné} other {{count} messages sélectionnés}}
+{count, plural, one {Une publication sélectionnée} other {{count} publications sélectionnées}}
```

{count, plural, one <del>{Un</del><ins>{Une</ins> <del>message</del><ins>publication</ins> <del>sélectionné}</del><ins>sélectionnée}</ins> other {{count} <del>messages</del><ins>publications</ins> <del>sélectionnés}}</del><ins>sélectionnées}}</ins>

#### [`fof-move-posts.forum.modal.status.complex_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.modal.status.complex_move%22)

> Will be a complex move, posts will be pushed between posts, leading to old URL references of the target discussion's posts to change as well.

```diff
-Cela sera une opération complexe : les messages seront déplacés d'un fil de discussion à l'autre, ce qui entraînera également la modification des anciennes URL renvoyant aux messages du fil de discussion cible.
+Ce sera un mouvement complexe, les messages seront poussés entre les messages, ce qui entraînera également la modification des anciennes références URL des messages des discussions cibles.
```

<del>Cela</del><ins>Ce</ins> sera<del> une</del> <del>opération</del><ins>un</ins> <del>complexe</del><ins>mouvement</ins> <del>:</del><ins>complexe,</ins> les messages seront<del> déplacés d'un fil</del> <del>de</del><ins>poussés</ins> <del>discussion</del><ins>entre</ins> <del>à</del><ins>les</ins> <del>l'autre,</del><ins>messages,</ins> ce qui entraînera également la modification des anciennes <del>URL</del><ins>références</ins> <del>renvoyant</del><ins>URL</ins> <del>aux</del><ins>des</ins> messages<del> du fil</del> <del>de</del><ins>des</ins> <del>discussion</del><ins>discussions</ins> <del>cible.</del><ins>cibles.</ins>

#### [`fof-move-posts.forum.modal.status.simple_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.modal.status.simple_move%22)

> Will be a simple move, posts will all be added at the end of the discussion.

```diff
-Cela sera une simple opération : tous les messages seront ajoutés à la fin de la discussion.
+Ce sera un mouvement simple, les messages seront tous ajoutés à la fin de la discussion.
```

<del>Cela</del><ins>Ce</ins> sera<del> une simple</del> <del>opération</del><ins>un</ins> <del>:</del><ins>mouvement</ins> <del>tous</del><ins>simple,</ins> les messages seront<ins> tous</ins> ajoutés à la fin de la discussion.

#### [`fof-move-posts.forum.post.move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.post.move%22)

> Select to move

```diff
-Sélectionner pour déplacer
+Sélectionnez pour déplacer
```

<del>Sélectionner</del><ins>Sélectionnez</ins> pour déplacer

#### [`fof-move-posts.forum.post.moving`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.forum.post.moving%22)

> Moving Post

```diff
-Déplacer un message
+Message en déplacement
```

#### [`fof-move-posts.ref.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.ref.move_posts%22)

> Move Posts

```diff
-Déplacer les messages
+Déplacer
```

Déplacer<del> les messages</del>

#### [`fof-move-posts.ref.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/fr/?q=context%3A%3D%22fof-move-posts.ref.status.old_to_new_move%22)

> Cannot move an old post to a newer discussion.

```diff
-Il n'est pas possible de déplacer un ancien message vers une discussion plus récente.
+Impossible de déplacer un ancien message vers une discussion plus récente.
```

<del>Il n'est pas possible</del><ins>Impossible</ins> de déplacer un ancien message vers une discussion plus récente.


### `fof-online-users-widget`

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fr/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
-Afficher le widget des utilisateurs en ligne
+Widget de visualisation des utilisateurs en ligne
```

<del>Afficher</del><ins>Widget</ins> <del>le</del><ins>de</ins> <del>widget</del><ins>visualisation</ins> des utilisateurs en ligne

#### [`fof-online-users-widget.admin.settings.cache_ttl`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fr/?q=context%3A%3D%22fof-online-users-widget.admin.settings.cache_ttl%22)

> Time to cache the users list (in seconds)

```diff
-Durée de mise en cache de la liste des utilisateurs (en secondes)
+Temps de mise en cache de la liste des utilisateurs (en secondes)
```

<del>Durée</del><ins>Temps</ins> de mise en cache de la liste des utilisateurs (en secondes)

#### [`fof-online-users-widget.admin.settings.last_seen_interval`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/fr/?q=context%3A%3D%22fof-online-users-widget.admin.settings.last_seen_interval%22)

> Last seen interval to consider a user online (in minutes)

```diff
-Intervalle depuis la dernière connexion pour considérer un utilisateur comme étant en ligne (en minutes)
+Dernier intervalle de temps pour considérer un utilisateur comme étant en ligne (en minutes)
```

<del>Intervalle depuis</del><ins>Dernier</ins> <del>la</del><ins>intervalle</ins> <del>dernière</del><ins>de</ins> <del>connexion</del><ins>temps</ins> pour considérer un utilisateur comme étant en ligne (en minutes)


### `fof-open-collective`

#### [`fof-open-collective.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.api_key_help%22)

> This authentication method is deprecated. Please consider switching to a Personal Token.

```diff
-Cette méthode d'authentification est obsolète. Nous vous recommandons de passer à un jeton personnel.
+Cette méthode d'authentification est obsolète. Veuillez envisager de passer à un jeton personnel.
```

Cette méthode d'authentification est obsolète. <del>Nous vous</del><ins>Veuillez</ins> <del>recommandons</del><ins>envisager</ins> de passer à un jeton personnel.

#### [`fof-open-collective.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.group_help%22)

> Select which Flarum user group recurring backers should be added to. Users will be automatically added when they become recurring backers and moved to the one-time group (if configured) when their subscription ends.

```diff
-Sélectionnez le groupe d'utilisateurs Flarum auquel les contributeurs réguliers doivent être ajoutés. Les utilisateurs seront automatiquement ajoutés à ce groupe lorsqu'ils deviendront contributeurs réguliers, puis transférés vers le groupe des contributeurs ponctuels (si celui-ci est configuré) à l'expiration de leur abonnement.
+Sélectionnez le groupe d'utilisateurs Flarum auquel les contributeurs réguliers doivent être ajoutés. Les utilisateurs seront automatiquement ajoutés lorsqu'ils deviendront des contributeurs réguliers et transférés vers le groupe des contributeurs ponctuels (si configuré) à la fin de leur abonnement.
```

Sélectionnez le groupe d'utilisateurs Flarum auquel les contributeurs réguliers doivent être ajoutés. Les utilisateurs seront automatiquement ajoutés <del>à ce groupe </del>lorsqu'ils deviendront<ins> des</ins> contributeurs <del>réguliers,</del><ins>réguliers</ins> <del>puis</del><ins>et</ins> transférés vers le groupe des contributeurs ponctuels (si<del> celui-ci est</del> configuré) à <del>l'expiration</del><ins>la fin</ins> de leur abonnement.

#### [`fof-open-collective.admin.settings.onetime_group_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.onetime_group_help%22)

> Select which Flarum user group one-time backers should be added to. If not set, one-time backers will not be managed. When a recurring backer cancels their subscription, they will be moved to this group.

```diff
-Sélectionnez le groupe d'utilisateurs Flarum auquel les contributeurs ponctuels doivent être ajoutés. Si aucune option n'est sélectionnée, les contributeurs ponctuels ne seront pas gérés. Lorsqu'un contributeur régulier résilie son abonnement, il est transféré dans ce groupe.
+Sélectionnez le groupe d'utilisateurs Flarum auquel les contributeurs ponctuels doivent être ajoutés. Si ce paramètre n'est pas défini, les contributeurs ponctuels ne seront pas gérés. Lorsqu'un contributeur récurrent annule son abonnement, il sera déplacé vers ce groupe.
```

Sélectionnez le groupe d'utilisateurs Flarum auquel les contributeurs ponctuels doivent être ajoutés. Si <del>aucune</del><ins>ce</ins> <del>option</del><ins>paramètre</ins> n'est <del>sélectionnée,</del><ins>pas défini,</ins> les contributeurs ponctuels ne seront pas gérés. Lorsqu'un contributeur <del>régulier</del><ins>récurrent</ins> <del>résilie</del><ins>annule</ins> son abonnement, il <del>est</del><ins>sera</ins> <del>transféré</del><ins>déplacé</ins> <del>dans</del><ins>vers</ins> ce groupe.

#### [`fof-open-collective.admin.settings.onetime_group_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.onetime_group_label%22)

> One-Time Backers Group (Optional)

```diff
-Groupe des contributeurs ponctuels (facultatif)
+Groupe de contributeurs ponctuels (facultatif)
```

Groupe <del>des</del><ins>de</ins> contributeurs ponctuels (facultatif)

#### [`fof-open-collective.admin.settings.personal_token_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.personal_token_help%22)

> Create a personal token at &lt;a&gt;https://opencollective.com/applications&lt;/a&gt;. This token is used to fetch your backer information from Open Collective.

```diff
-Créez un jeton personnel à l'adresse <a>https://opencollective.com/applications</a>. Ce jeton sert à récupérer vos informations de contributeur depuis Open Collective.
+Créez un jeton personnel sur <a>https://opencollective.com/applications</a>. Ce jeton sert à récupérer vos informations de contributeur auprès d'Open Collective.
```

Créez un jeton personnel <del>à l'adresse</del><ins>sur</ins> &lt;a&gt;https://opencollective.com/applications&lt;/a&gt;. Ce jeton sert à récupérer vos informations de contributeur <del>depuis</del><ins>auprès</ins> <del>Open</del><ins>d'Open</ins> Collective.

#### [`fof-open-collective.admin.settings.slug_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/fr/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_help%22)

> Enter your Open Collective collective slug (the part after opencollective.com/ in your collective URL).

```diff
-Saisissez le slug de votre collectif Open Collective (la partie qui suit « opencollective.com/ » dans l'URL de votre collectif).
+Saisissez le slug de votre collectif Open Collective (la partie après opencollective.com/ dans l'URL de votre collectif).
```

Saisissez le slug de votre collectif Open Collective (la partie <del>qui suit «</del><ins>après</ins> opencollective.com/<del> »</del> dans l'URL de votre collectif).


### `fof-reactions`

#### [`fof-reactions.admin.page.reactions.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-reactions/fr/?q=context%3A%3D%22fof-reactions.admin.page.reactions.delete_confirmation%22)

> Are you sure you want to delete this reaction? This action cannot be undone.

```diff
-Êtes-vous sûr de vouloir supprimer cette réaction ? Cette action ne peut pas être annulée.
+Êtes-vous sûr de vouloir supprimer cette réaction ? Cette action est irréversible.
```

Êtes-vous sûr de vouloir supprimer cette réaction ? Cette action <del>ne peut pas être</del><ins>est</ins> <del>annulée.</del><ins>irréversible.</ins>


### `fof-rich-text`

#### [`fof-rich-text.admin.settings.toggle_on_editor`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fr/?q=context%3A%3D%22fof-rich-text.admin.settings.toggle_on_editor%22)

> Show rich text mode toggle on editor?

```diff
-Afficher le bouton de basculement vers le mode texte enrichi dans l'éditeur ?
+Afficher le bouton d'activation du mode texte enrichi dans l'éditeur ?
```

Afficher le bouton <del>de basculement vers</del><ins>d'activation</ins> <del>le</del><ins>du</ins> mode texte enrichi dans l'éditeur ?

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fr/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
-Ne pas séparer les paragraphes par un saut de ligne.
+Ne pas séparer les paragraphes avec une nouvelle ligne.
```

Ne pas séparer les paragraphes <del>par un</del><ins>avec</ins> <del>saut</del><ins>une</ins> <del>de</del><ins>nouvelle</ins> ligne.

#### [`fof-rich-text.lib.composer.additional_items_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fr/?q=context%3A%3D%22fof-rich-text.lib.composer.additional_items_tooltip%22)

> Additional Controls

```diff
-Commandes supplémentaires
+Contrôles supplémentaires
```

<del>Commandes</del><ins>Contrôles</ins> supplémentaires

#### [`fof-rich-text.lib.composer.horizontal_rule_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fr/?q=context%3A%3D%22fof-rich-text.lib.composer.horizontal_rule_tooltip%22)

> Insert horizontal rule

```diff
-Insérer une ligne horizontale
+Insérer une règle horizontale
```

Insérer une <del>ligne</del><ins>règle</ins> horizontale

#### [`fof-rich-text.lib.composer.spoiler_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fr/?q=context%3A%3D%22fof-rich-text.lib.composer.spoiler_block_tooltip%22)

> Block Spoiler/Dropdown

```diff
-Masquer le contenu/Menu déroulant
+Masquer
```

Masquer<del> le contenu/Menu déroulant</del>

#### [`fof-rich-text.lib.composer.toggle_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/fr/?q=context%3A%3D%22fof-rich-text.lib.composer.toggle_button%22)

> Toggle Rich Text Mode

```diff
-Activer ou désactiver le mode texte enrichi
+Interrupteur du mode texte enrichi
```

<del>Activer ou désactiver</del><ins>Interrupteur</ins> <del>le</del><ins>du</ins> mode texte enrichi


### `fof-sentry`

#### [`fof-sentry.admin.sections.backend_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.sections.backend_performance_help%22)

> Track PHP backend performance and profiling. Set sample rates to control overhead.

```diff
-Suivez les performances et le profilage du backend PHP. Définissez les fréquences d'échantillonnage pour contrôler la charge système.
+Suivez les performances et le profilage du backend PHP. Définissez des taux d'échantillonnage pour contrôler la charge.
```

Suivez les performances et le profilage du backend PHP. Définissez <del>les</del><ins>des</ins> <del>fréquences</del><ins>taux</ins> d'échantillonnage pour contrôler la<del> charge</del> <del>système.</del><ins>charge.</ins>

#### [`fof-sentry.admin.sections.database_monitoring_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.sections.database_monitoring_help%22)

> Monitor database query performance, detect slow queries and N+1 issues. Only active when backend performance monitoring is enabled.

```diff
-Surveiller les performances des requêtes de la base de données et détecter les requêtes lentes et les problèmes de type « N+1 ». Cette fonctionnalité n'est active que lorsque la surveillance des performances du backend est activée.
+Surveillez les performances des requêtes de base de données, détectez les requêtes lentes et les problèmes N+1. Actif uniquement lorsque la surveillance des performances du backend est activée.
```

<del>Surveiller</del><ins>Surveillez</ins> les performances des requêtes de<del> la</del> base de<del> données</del> <del>et</del><ins>données,</ins> <del>détecter</del><ins>détectez</ins> les requêtes lentes et les problèmes<del> de type « N+1 ». Cette fonctionnalité</del> <del>n'est</del><ins>N+1.</ins> <del>active</del><ins>Actif</ins> <del>que</del><ins>uniquement</ins> lorsque la surveillance des performances du backend est activée.

#### [`fof-sentry.admin.sections.user_context_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.sections.user_context_help%22)

> Control what user information is sent to Sentry with error reports.

```diff
-Contrôlez les informations utilisateur transmises à Sentry avec les rapports d'erreur.
+Contrôlez les informations utilisateur envoyées à Sentry avec les rapports d'erreurs.
```

Contrôlez les informations utilisateur <del>transmises</del><ins>envoyées</ins> à Sentry avec les rapports <del>d'erreur.</del><ins>d'erreurs.</ins>

#### [`fof-sentry.admin.settings.db_n_plus_one_detection_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_detection_help%22)

> Automatically detect N+1 query problems by tracking repeated query patterns. N+1 queries occur when code executes the same query multiple times in a loop instead of using proper joins or eager loading. Helps identify significant performance bottlenecks.

```diff
-Détectez automatiquement les problèmes liés aux requêtes N+1 en identifiant les schémas de requêtes répétitives. Les requêtes N+1 surviennent lorsque le code exécute plusieurs fois la même requête dans une boucle au lieu d'utiliser des jointures appropriées ou le chargement anticipé. Cela permet d'identifier les goulots d'étranglement importants en termes de performances.
+Détectez automatiquement les problèmes liés aux requêtes N+1 en suivant les modèles de requêtes répétées. Les requêtes N+1 se produisent lorsque le code exécute plusieurs fois la même requête dans une boucle au lieu d'utiliser des jointures appropriées ou le chargement anticipé. Permet d'identifier les goulots d'étranglement importants en matière de performances.
```

Détectez automatiquement les problèmes liés aux requêtes N+1 en <del>identifiant</del><ins>suivant</ins> les <del>schémas</del><ins>modèles</ins> de requêtes <del>répétitives.</del><ins>répétées.</ins> Les requêtes N+1 <del>surviennent</del><ins>se produisent</ins> lorsque le code exécute plusieurs fois la même requête dans une boucle au lieu d'utiliser des jointures appropriées ou le chargement anticipé.<del> Cela</del> <del>permet</del><ins>Permet</ins> d'identifier les goulots d'étranglement importants en <del>termes</del><ins>matière</ins> de performances.

#### [`fof-sentry.admin.settings.db_n_plus_one_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_threshold_help%22)

> Number of times a query pattern must repeat to be flagged as a potential N+1 issue. Sensitivity levels: 5-10 (aggressive, may have false positives), 10-20 (balanced, recommended), 20+ (conservative, only flags severe issues). Default: 10.

```diff
-Nombre de fois qu'un modèle de requête doit se répéter pour être signalé comme un problème N+1 potentiel. Niveaux de sensibilité : 5-10 (strict, peut générer des faux positifs), 10-20 (équilibré, recommandé) et 20+ (prudent, ne signale que les problèmes graves). Valeur par défaut : 10.
+Nombre de fois qu'un modèle de requête doit se répéter pour être signalé comme un problème N+1 potentiel. Niveaux de sensibilité : 5-10 (agressif, peut générer des faux positifs), 10-20 (équilibré, recommandé) et 20+ (conservateur, ne signale que les problèmes graves). Valeur par défaut : 10.
```

Nombre de fois qu'un modèle de requête doit se répéter pour être signalé comme un problème N+1 potentiel. Niveaux de sensibilité : 5-10 <del>(strict,</del><ins>(agressif,</ins> peut générer des faux positifs), 10-20 (équilibré, recommandé) et 20+ <del>(prudent,</del><ins>(conservateur,</ins> ne signale que les problèmes graves). Valeur par défaut : 10.

#### [`fof-sentry.admin.settings.db_query_sample_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_help%22)

> Percentage of database queries to track in performance monitoring (0-100%). Impact levels: 100% (track all queries, maximum visibility, higher overhead), 50% (track half, balanced), 10-25% (track subset, lower overhead, still catches issues), 0% (track only slow queries, minimum overhead). Note: Slow queries (above threshold) are ALWAYS tracked regardless of this setting. Recommendation: Use 10-25% on high-traffic sites to reduce performance impact and Sentry data costs.

```diff
-Pourcentage de requêtes de base de données à surveiller dans le cadre du suivi des performances (0-100 %). Niveaux d'impact : 100 % (surveillance de toutes les requêtes, visibilité maximale, surcharge plus importante), 50 % (surveillance de la moitié, équilibre), 10-25 % (surveillance d'un sous-ensemble, surcharge moindre, détecte tout de même les problèmes), 0 % (surveillance des requêtes lentes uniquement, surcharge minimale). Remarque : les requêtes lentes (au-dessus du seuil) sont TOUJOURS suivies, quel que soit ce paramètre. Recommandation : utilisez 10-25 % sur les sites à fort trafic afin de réduire l'impact sur les performances et les coûts liés aux données Sentry.
+Pourcentage de requêtes de base de données à suivre dans le cadre de la surveillance des performances (0-100 %). Niveaux d'impact : 100 % (suivi de toutes les requêtes, visibilité maximale, surcoût plus élevé), 50 % (suivi de la moitié, équilibré), 10-25 % (suivi d'un sous-ensemble, surcoût moindre, détecte tout de même les problèmes) et 0 % (suivi des requêtes lentes uniquement, surcoût minimal). Remarque : les requêtes lentes (au-dessus du seuil) sont TOUJOURS suivies, quel que soit ce paramètre. Recommandation : utilisez 10-25 % sur les sites à fort trafic afin de réduire l'impact sur les performances et les coûts liés aux données Sentry.
```

Pourcentage de requêtes de base de données à <del>surveiller</del><ins>suivre</ins> dans le cadre <del>du</del><ins>de</ins> <del>suivi</del><ins>la surveillance</ins> des performances (0-100 %). Niveaux d'impact : 100 % <del>(surveillance</del><ins>(suivi</ins> de toutes les requêtes, visibilité maximale, <del>surcharge</del><ins>surcoût</ins> plus <del>importante),</del><ins>élevé),</ins> 50 % <del>(surveillance</del><ins>(suivi</ins> de la moitié, <del>équilibre),</del><ins>équilibré),</ins> 10-25 % <del>(surveillance</del><ins>(suivi</ins> d'un sous-ensemble, <del>surcharge</del><ins>surcoût</ins> moindre, détecte tout de même les <del>problèmes),</del><ins>problèmes) et</ins> 0 % <del>(surveillance</del><ins>(suivi</ins> des requêtes lentes uniquement, <del>surcharge</del><ins>surcoût</ins> <del>minimale).</del><ins>minimal).</ins> Remarque : les requêtes lentes (au-dessus du seuil) sont TOUJOURS suivies, quel que soit ce paramètre. Recommandation : utilisez 10-25 % sur les sites à fort trafic afin de réduire l'impact sur les performances et les coûts liés aux données Sentry.

#### [`fof-sentry.admin.settings.db_query_sample_rate_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_label%22)

> Query Sampling Rate

```diff
-Fréquence d'échantillonnage de la requête
+Taux d'échantillonnage des requêtes
```

<del>Fréquence</del><ins>Taux</ins> d'échantillonnage<del> de</del> <del>la</del><ins>des</ins> <del>requête</del><ins>requêtes</ins>

#### [`fof-sentry.admin.settings.db_slow_query_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.db_slow_query_threshold_help%22)

> Queries taking longer than this threshold (in milliseconds) are flagged as slow and automatically tracked regardless of sample rate. Severity levels: Medium (1-2× threshold), High (2-5× threshold), Critical (5×+ threshold). Default: 1000ms (1 second). Lower to 500ms for more aggressive detection.

```diff
-Les requêtes dont la durée dépasse ce seuil (en millisecondes) sont signalées comme lentes et font l'objet d'un suivi automatique, quel que soit le taux d'échantillonnage. Niveaux de gravité : moyen (1 à 2 fois le seuil), élevé (2 à 5 fois le seuil) et critique (5 fois ou plus le seuil). Valeur par défaut : 1 000 ms (1 seconde). Réduisez cette valeur à 500 ms pour une détection plus stricte.
+Les requêtes qui dépassent ce seuil (en millisecondes) sont signalées comme lentes et automatiquement suivies, quel que soit le taux d'échantillonnage. Niveaux de gravité : moyen (1 à 2 fois le seuil), élevé (2 à 5 fois le seuil) et critique (5 fois le seuil ou plus). Valeur par défaut : 1 000 ms (1 seconde). Réduisez cette valeur à 500 ms pour une détection plus agressive.
```

Les requêtes <del>dont la durée</del><ins>qui</ins> <del>dépasse</del><ins>dépassent</ins> ce seuil (en millisecondes) sont signalées comme lentes et<del> font l'objet d'un</del> <del>suivi</del><ins>automatiquement</ins> <del>automatique,</del><ins>suivies,</ins> quel que soit le taux d'échantillonnage. Niveaux de gravité : moyen (1 à 2 fois le seuil), élevé (2 à 5 fois le seuil) et critique (5 fois <del>ou</del><ins>le</ins> <del>plus</del><ins>seuil</ins> <del>le</del><ins>ou</ins> <del>seuil).</del><ins>plus).</ins> Valeur par défaut : 1 000 ms (1 seconde). Réduisez cette valeur à 500 ms pour une détection plus <del>stricte.</del><ins>agressive.</ins>

#### [`fof-sentry.admin.settings.db_track_bindings_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_help%22)

> Include actual parameter values in query tracking (e.g., "SELECT \* FROM users WHERE id = 123" instead of "SELECT \* FROM users WHERE id = ?"). Benefits: See exact values causing slow queries and identify problematic data patterns. Security &amp; Privacy Warning: May expose sensitive user data in Sentry. Passwords and hashes (32+ hex chars) are automatically masked. Long strings (100+ chars) are truncated. Review your privacy policy before enabling. Recommendation: Enable only in staging/development, disable in production.

```diff
-Inclure les valeurs réelles des paramètres dans le suivi des requêtes (par exemple, « SELECT * FROM users WHERE id = 123 » au lieu de « SELECT * FROM users WHERE id = ? »). Avantages : identifiez les valeurs exactes à l'origine des requêtes lentes et repérez les schémas de données problématiques. Avertissement relatif à la sécurité et à la confidentialité : peut exposer des données utilisateur sensibles dans Sentry. Les mots de passe et les hachages (32 caractères hexadécimaux ou plus) sont automatiquement masqués. Les chaînes longues (100 caractères ou plus) sont tronquées. Vérifiez votre politique de confidentialité avant d'activer cette fonctionnalité. Recommandation : activez-la uniquement en environnement de préproduction/développement, désactivez-la en production.
+Inclure les valeurs réelles des paramètres dans le suivi des requêtes (par exemple, « SELECT * FROM users WHERE id = 123 » au lieu de « SELECT * FROM users WHERE id = ? »). Avantages : voir les valeurs exactes à l'origine des requêtes lentes et identifier les modèles de données problématiques. Avertissement relatif à la sécurité et à la confidentialité : peut exposer des données utilisateur sensibles dans Sentry. Les mots de passe et les hachages (32 caractères hexadécimaux ou plus) sont automatiquement masqués. Les chaînes longues (100 caractères ou plus) sont tronquées. Vérifiez votre politique de confidentialité avant d'activer cette option. Recommandation : activez uniquement en phase de test ou de développement, désactivez en production.
```

Inclure les valeurs réelles des paramètres dans le suivi des requêtes (par exemple, « SELECT \* FROM users WHERE id = 123 » au lieu de « SELECT \* FROM users WHERE id = ? »). Avantages : <del>identifiez</del><ins>voir</ins> les valeurs exactes à l'origine des requêtes lentes et <del>repérez</del><ins>identifier</ins> les <del>schémas</del><ins>modèles</ins> de données problématiques. Avertissement relatif à la sécurité et à la confidentialité : peut exposer des données utilisateur sensibles dans Sentry. Les mots de passe et les hachages (32 caractères hexadécimaux ou plus) sont automatiquement masqués. Les chaînes longues (100 caractères ou plus) sont tronquées. Vérifiez votre politique de confidentialité avant d'activer cette <del>fonctionnalité.</del><ins>option.</ins> Recommandation : <del>activez-la</del><ins>activez</ins> uniquement en <del>environnement</del><ins>phase</ins> de <del>préproduction/développement,</del><ins>test</ins> <del>désactivez-la</del><ins>ou de développement, désactivez</ins> en production.

#### [`fof-sentry.admin.settings.environment_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.environment_help%22)

> Tag all events with an environment name (e.g., "production", "staging", "development"). This helps you filter errors by deployment environment and set different alert rules per environment.

```diff
-Attribuez à tous les événements un nom d'environnement (par exemple, « production », « préparation », « développement »). Cela vous permet de filtrer les erreurs par environnement de déploiement et de définir des règles d'alerte différentes pour chaque environnement.
+Marquez tous les événements avec un nom d'environnement (p. ex. : « production », « préproduction » ou « développement »). Cela vous aide à filtrer les erreurs par environnement de déploiement et à définir différentes règles d'alerte pour chaque environnement.
```

<del>Attribuez à</del><ins>Marquez</ins> tous les événements<ins> avec</ins> un nom d'environnement <del>(par</del><ins>(p.</ins> <del>exemple,</del><ins>ex. :</ins> « production », « <del>préparation</del><ins>préproduction</ins> <del>»,</del><ins>» ou</ins> « développement »). Cela vous <del>permet</del><ins>aide</ins> <del>de</del><ins>à</ins> filtrer les erreurs par environnement de déploiement et <del>de</del><ins>à</ins> définir <del>des</del><ins>différentes</ins> règles d'alerte<del> différentes</del> pour chaque environnement.

#### [`fof-sentry.admin.settings.javascript_console_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_console_help%22)

> Record console.log, console.info, console.warn, and console.error calls as breadcrumbs. See the sequence of events leading to an error and debug complex user interactions. Note: Increases data volume. Use selectively in production.

```diff
-Enregistrez les appels console.log, console.info, console.warn et console.error sous forme de fil d'Ariane. Visualisez la séquence d'événements ayant conduit à une erreur et déboguez les interactions utilisateur complexes. Remarque : cela augmente le volume de données. À utiliser avec parcimonie en production.
+Enregistrez les appels console.log, console.info, console.warn et console.error sous forme de fils d'Ariane. Visualisez la séquence d'événements ayant conduit à une erreur et déboguez les interactions utilisateur complexes. Remarque : augmente le volume de données. À utiliser de manière sélective en production.
```

Enregistrez les appels console.log, console.info, console.warn et console.error sous forme de <del>fil</del><ins>fils</ins> d'Ariane. Visualisez la séquence d'événements ayant conduit à une erreur et déboguez les interactions utilisateur complexes. Remarque :<del> cela</del> augmente le volume de données. À utiliser <del>avec</del><ins>de</ins> <del>parcimonie</del><ins>manière sélective</ins> en production.

#### [`fof-sentry.admin.settings.javascript_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_help%22)

> Capture and report JavaScript errors from your forum's frontend to Sentry. Tracks uncaught exceptions, promise rejections, console errors, and network failures. Disable this if you only want backend error tracking.

```diff
-Enregistrez et signalez les erreurs JavaScript du frontend de votre forum à Sentry. Système de suivi des exceptions non gérées, des rejets de promesses, des erreurs de console et des défaillances réseau. Désactivez cette option si vous souhaitez uniquement suivre les erreurs du backend.
+Capturez et signalez les erreurs JavaScript depuis l'interface publique de votre forum vers Sentry. Suivez les exceptions non interceptées, les rejets de promesses, les erreurs de console et les défaillances réseau. Désactivez cette option si vous souhaitez uniquement suivre les erreurs backend.
```

<del>Enregistrez</del><ins>Capturez</ins> et signalez les erreurs JavaScript <del>du</del><ins>depuis</ins> <del>frontend</del><ins>l'interface publique</ins> de votre forum <del>à</del><ins>vers</ins> Sentry.<del> Système de</del> <del>suivi</del><ins>Suivez</ins> <del>des</del><ins>les</ins> exceptions non <del>gérées,</del><ins>interceptées,</ins> <del>des</del><ins>les</ins> rejets de promesses, <del>des</del><ins>les</ins> erreurs de console et <del>des</del><ins>les</ins> défaillances réseau. Désactivez cette option si vous souhaitez uniquement suivre les erreurs<del> du</del> backend.

#### [`fof-sentry.admin.settings.monitor_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.monitor_performance_help%22)

> Percentage of backend requests to trace (0 = disabled, 100 = trace all). Performance traces include request/response time, database queries, and extension loading times. Recommendation: Start with 10-25% in production, 100% in staging. Lower values reduce data volume and Sentry costs.

```diff
-Pourcentage de requêtes backend à tracer (0 = désactivé, 100 = tout tracer). Les traces de performances incluent le temps de requête/réponse, les requêtes de base de données et les temps de chargement des extensions. Recommandation : commencez par 10 à 25 % en production, et 100 % en environnement de préproduction. Des valeurs plus faibles réduisent le volume de données et les coûts liés à Sentry.
+Pourcentage de requêtes backend à tracer (0 = désactivé, 100 = tout tracer). Les traces de performance incluent le temps de requête et de réponse, les requêtes de base de données et les temps de chargement des extensions. Recommandation : commencez par 10 à 25 % en production et 100 % en préproduction. Des valeurs plus faibles réduisent le volume de données et les coûts Sentry.
```

Pourcentage de requêtes backend à tracer (0 = désactivé, 100 = tout tracer). Les traces de <del>performances</del><ins>performance</ins> incluent le temps de <del>requête/réponse,</del><ins>requête et de réponse,</ins> les requêtes de base de données et les temps de chargement des extensions. Recommandation : commencez par 10 à 25 % en <del>production,</del><ins>production</ins> et 100 % en<del> environnement de</del> préproduction. Des valeurs plus faibles réduisent le volume de données et les coûts<del> liés à</del> Sentry.

#### [`fof-sentry.admin.settings.profile_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.profile_rate_help%22)

> Percentage of traced transactions to profile (relative to monitoring rate above). Example: If monitoring = 10% and profiling = 50%, then 5% of all requests are profiled. Profiling provides detailed function-level performance data. Performance impact: Profiling adds overhead and increases response time. See &lt;a&gt;Sentry's optimization guide&lt;/a&gt;. {icon} &lt;bold&gt;Requires Excimer extension (Linux only). Currently {icon}.&lt;/bold&gt;

```diff
-Pourcentage des transactions suivies à profiler (par rapport au taux de surveillance indiqué ci-dessus). Exemple : si la surveillance est de 10 % et le profilage de 50 %, alors 5 % de toutes les requêtes sont profilées. Le profilage fournit des données détaillées sur les performances au niveau des fonctions. Impact sur les performances : le profilage ajoute une surcharge et augmente le temps de réponse. Voir <a>le guide d'optimisation de Sentry</a>. {icon} <bold>Nécessite l'extension Excimer (Linux uniquement). Actuellement {icon}.</bold>
+Pourcentage des transactions tracées à profiler (par rapport au taux de surveillance ci-dessus). Exemple : si la surveillance = 10 % et le profilage = 50 %, alors 5 % de toutes les requêtes sont profilées. Le profilage fournit des données détaillées sur les performances au niveau des fonctions. Impact sur les performances : le profilage ajoute une surcharge et augmente le temps de réponse. Consultez le <a>guide d'optimisation de Sentry</a>. {icon} <bold>Nécessite l'extension Excimer (Linux uniquement). Actuellement {icon}.</bold>
```

Pourcentage des transactions <del>suivies</del><ins>tracées</ins> à profiler (par rapport au taux de surveillance<del> indiqué</del> ci-dessus). Exemple : si la surveillance<del> est</del> <del>de</del><ins>=</ins> 10 % et le profilage <del>de</del><ins>=</ins> 50 %, alors 5 % de toutes les requêtes sont profilées. Le profilage fournit des données détaillées sur les performances au niveau des fonctions. Impact sur les performances : le profilage ajoute une surcharge et augmente le temps de réponse. <del>Voir</del><ins>Consultez</ins> <del>&lt;a&gt;le</del><ins>le</ins> <del>guide</del><ins>&lt;a&gt;guide</ins> d'optimisation de Sentry&lt;/a&gt;. {icon} &lt;bold&gt;Nécessite l'extension Excimer (Linux uniquement). Actuellement {icon}.&lt;/bold&gt;

#### [`fof-sentry.admin.settings.send_user_emails_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.send_user_emails_help%22)

> When enabled, user email addresses are included in all Sentry events for contacting users and filtering errors. Privacy consideration: Review your privacy policy before enabling. User ID, username, and groups are always included regardless of this setting.

```diff
-Lorsque cette option est activée, les adresses de courriel des utilisateurs sont incluses dans tous les événements Sentry afin de pouvoir les contacter et filtrer les erreurs. Remarque relative à la confidentialité : veuillez consulter votre politique de confidentialité avant d'activer cette option. L'identifiant utilisateur, le nom d'utilisateur et les groupes sont toujours inclus, quel que soit ce paramètre.
+Lorsque cette option est activée, les adresses de courriel des utilisateurs sont incluses dans tous les événements Sentry afin de contacter les utilisateurs et de filtrer les erreurs. Confidentialité : consultez votre politique de confidentialité avant d'activer cette option. L'identifiant utilisateur, le nom d'utilisateur et les groupes sont toujours inclus, quel que soit ce paramètre.
```

Lorsque cette option est activée, les adresses de courriel des utilisateurs sont incluses dans tous les événements Sentry afin de <del>pouvoir</del><ins>contacter</ins> les <del>contacter</del><ins>utilisateurs</ins> et<ins> de</ins> filtrer les erreurs.<del> Remarque relative à la</del> <del>confidentialité</del><ins>Confidentialité</ins> :<del> veuillez</del> <del>consulter</del><ins>consultez</ins> votre politique de confidentialité avant d'activer cette option. L'identifiant utilisateur, le nom d'utilisateur et les groupes sont toujours inclus, quel que soit ce paramètre.

#### [`fof-sentry.admin.settings.send_user_emails_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.send_user_emails_label%22)

> Include User Email Addresses in Reports

```diff
-Inclure les adresses de courriel des utilisateurs dans les rapports
+Inclure les adresses courriel des utilisateurs dans les rapports
```

Inclure les adresses <del>de </del>courriel des utilisateurs dans les rapports

#### [`fof-sentry.admin.settings.user_feedback_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/fr/?q=context%3A%3D%22fof-sentry.admin.settings.user_feedback_help%22)

> When enabled, users see a feedback form after encountering an error, allowing them to describe what happened. The form pre-fills with their username, email (if enabled), and group membership. Creates a direct communication channel with users experiencing issues. Requires a direct Sentry DSN (not a Relay DSN).

```diff
-Lorsque cette fonctionnalité est activée, les utilisateurs voient s'afficher un formulaire de retour d'information après avoir rencontré une erreur, ce qui leur permet de décrire ce qui s'est passé. Le formulaire est prérempli avec leur nom d'utilisateur, leur adresse de courriel (si cette option est activée) et leur appartenance à un groupe. Cela permet de créer un canal de communication direct avec les utilisateurs rencontrant des problèmes. Nécessite un DSN Sentry direct (et non un DSN de relais).
+Lorsque cette option est activée, les utilisateurs voient apparaître un formulaire de commentaires après avoir rencontré une erreur, ce qui leur permet de décrire ce qui s'est passé. Le formulaire est prérempli avec leur nom d'utilisateur, leur adresse de courriel (si activée) et leur appartenance à un groupe. Crée un canal de communication direct avec les utilisateurs rencontrant des problèmes. Nécessite un DNS Sentry direct (et non un relai DNS).
```

Lorsque cette <del>fonctionnalité</del><ins>option</ins> est activée, les utilisateurs voient <del>s'afficher</del><ins>apparaître</ins> un formulaire de<del> retour</del> <del>d'information</del><ins>commentaires</ins> après avoir rencontré une erreur, ce qui leur permet de décrire ce qui s'est passé. Le formulaire est prérempli avec leur nom d'utilisateur, leur adresse de courriel (si<del> cette option est</del> activée) et leur appartenance à un groupe.<del> Cela permet de</del> <del>créer</del><ins>Crée</ins> un canal de communication direct avec les utilisateurs rencontrant des problèmes. Nécessite un <del>DSN</del><ins>DNS</ins> Sentry direct (et non un<del> DSN</del> <del>de</del><ins>relai</ins> <del>relais).</del><ins>DNS).</ins>


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.build_button`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/fr/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button%22)

> Rebuild Sitemaps Now

```diff
-Reconstruire maintenant les plans du site
+Reconstruire les plans du site maintenant
```

Reconstruire <del>maintenant </del>les plans du site<ins> maintenant</ins>

#### [`fof-sitemap.admin.settings.build_button_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/fr/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button_help%22)

> Triggers an immediate rebuild of all sitemap files. The job will be dispatched to the queue if it's configured, else will run immediately.

```diff
-Déclenche une reconstruction immédiate de tous les fichiers de plan du site. La tâche sera envoyée à la file d'attente si celle-ci est configurée, sinon elle s'exécutera immédiatement.
+Déclenche une reconstruction immédiate de tous les fichiers de plan de site. La tâche sera envoyée à la file d'attente si celle-ci est configurée, sinon elle s'exécutera immédiatement.
```

Déclenche une reconstruction immédiate de tous les fichiers de plan <del>du</del><ins>de</ins> site. La tâche sera envoyée à la file d'attente si celle-ci est configurée, sinon elle s'exécutera immédiatement.

#### [`fof-sitemap.admin.settings.last_build_time`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/fr/?q=context%3A%3D%22fof-sitemap.admin.settings.last_build_time%22)

> Last Build Time

```diff
-Dernière heure de compilation
+Date de création
```

<del>Dernière heure</del><ins>Date</ins> de <del>compilation</del><ins>création</ins>


### `fof-upload`

#### [`fof-upload.admin.help_texts.custom_s3_url`](https://weblate.rob006.net/translate/flarum2/fof-upload/fr/?q=context%3A%3D%22fof-upload.admin.help_texts.custom_s3_url%22)

> Use this setting if you are using an S3-compatible service that requires a specific URL format (e.g., Backblaze B2) or if you are experiencing issues with the default URL format. This setting is generally not necessary for most services. Ensure the URL includes the protocol (https://) and is correctly formatted. Example: https://your-bucket.s3.your-region.backblazeb2.com
>

```diff
-Utilisez ce paramètre si vous utilisez un service compatible S3 qui nécessite un format d'URL spécifique (par exemple, Backblaze B2) ou si vous rencontrez des problèmes avec le format d'URL par défaut. Ce paramètre n'est généralement pas nécessaire pour la plupart des services. Assurez-vous que l'URL inclut le protocole (https://) et qu'elle est correctement formatée. Par exemple : https://your-bucket.s3.your-region.backblazeb2.com
+Utilisez ce paramètre si vous utilisez un service compatible S3 qui nécessite un format d'URL spécifique (p. ex. Backblaze B2) ou si vous rencontrez des problèmes avec le format d'URL par défaut. Ce paramètre n'est généralement pas nécessaire pour la plupart des services. Assurez-vous que l'URL inclut le protocole (https://) et qu'elle est correctement formatée. Par exemple : https://your-bucket.s3.your-region.backblazeb2.com

```

Utilisez ce paramètre si vous utilisez un service compatible S3 qui nécessite un format d'URL spécifique <del>(par</del><ins>(p.</ins> <del>exemple,</del><ins>ex.</ins> Backblaze B2) ou si vous rencontrez des problèmes avec le format d'URL par défaut. Ce paramètre n'est généralement pas nécessaire pour la plupart des services. Assurez-vous que l'URL inclut le protocole (https://) et qu'elle est correctement formatée. Par exemple : https://your-bucket.s3.your-region.backblazeb2.com<br />

#### [`fof-upload.forum.buttons.user_uploads`](https://weblate.rob006.net/translate/flarum2/fof-upload/fr/?q=context%3A%3D%22fof-upload.forum.buttons.user_uploads%22)

> User uploads

```diff
-Transferts de l'utilisateur
+Médias de l'utilisateur
```

<del>Transferts</del><ins>Médias</ins> de l'utilisateur


### `forumaker-magicread`

#### [`forumaker-magicread.admin.settings.enable_counter`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_counter%22)

> Live character counter in composer

```diff
-Compteur de caractères en temps réel dans le compositeur
+Compteur de caractères en direct dans le compositeur
```

Compteur de caractères en <del>temps réel</del><ins>direct</ins> dans le compositeur

#### [`forumaker-magicread.admin.settings.enable_pagination`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_pagination%22)

> Add page navigation below the scroll bar

```diff
-Pagination au sein des discussions
+Ajouter une pagination sous la barre de défilement
```

#### [`forumaker-magicread.admin.settings.enable_readmore`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore%22)

> Read more preview on profile page

```diff
-En savoir plus sur la page de profil
+Lire la suite de l'aperçu sur la page de profil
```

<del>En</del><ins>Lire</ins> <del>savoir</del><ins>la</ins> <del>plus</del><ins>suite de l'aperçu</ins> sur la page de profil

#### [`forumaker-magicread.forum.read_more`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.read_more%22)

> Read more

```diff
-En savoir plus
+Lire la suite
```


### `huoxin-relative-url`

#### [`huoxin-relative-url.admin.internal_domains_placeholder`](https://weblate.rob006.net/translate/flarum2/huoxin-relative-url/fr/?q=context%3A%3D%22huoxin-relative-url.admin.internal_domains_placeholder%22)

> One per line.
> Domain only, DON'T include http/https.
> E.g.
> forum1.org
> forum2.org
> forum3.org
>

```diff
 Un par ligne.
-Indiquez uniquement le nom de domaine, SANS http ou https.
+Domaine uniquement, NE PAS inclure http ou https.
 Par exemple :
 forum1.org
 forum2.org
 forum3.org

```

Un par ligne.<br /><del>Indiquez uniquement le</del><ins>Domaine</ins> <del>nom</del><ins>uniquement,</ins> <del>de</del><ins>NE</ins> <del>domaine,</del><ins>PAS</ins> <del>SANS</del><ins>inclure</ins> http ou https.<br />Par exemple :<br />forum1.org<br />forum2.org<br />forum3.org<br />


### `huseyinfiliz-notificationhub`

#### [`huseyinfiliz-notificationhub.forum.modal_notification.preview_message_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.preview_message_placeholder%22)

> Notification message..

```diff
-Message de notification
+Message de notification...
```

Message de <del>notification</del><ins>notification...</ins>


### `ianm-follow-users`

#### [`ianm-follow-users.forum.profile_page.no_followers`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/fr/?q=context%3A%3D%22ianm-follow-users.forum.profile_page.no_followers%22)

> It looks like you have no followers yet.

```diff
-Il semble que vous n'ayez pas encore d'abonnés.
+Il semble que vous n'ayez encore aucun abonné.
```

Il semble que vous n'ayez <del>pas </del>encore <del>d'abonnés.</del><ins>aucun abonné.</ins>


### `ianm-log-viewer`

#### [`ianm-log-viewer.admin.viewer.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/fr/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.confirm_delete%22)

> Are you sure you want to delete this log file? This action cannot be undone.

```diff
-Êtes-vous sûr de vouloir supprimer ce fichier journal ? Cette action ne peut pas être annulée.
+Êtes-vous sûr de vouloir supprimer ce fichier journal ? Cette action est irréversible.
```

Êtes-vous sûr de vouloir supprimer ce fichier journal ? Cette action <del>ne peut pas être</del><ins>est</ins> <del>annulée.</del><ins>irréversible.</ins>


### `ianm-twofactor`

#### [`ianm-twofactor.forum.log_in.two_factor_placeholder`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/fr/?q=context%3A%3D%22ianm-twofactor.forum.log_in.two_factor_placeholder%22)

> 2FA Token, e.g., 123456

```diff
-Jeton A2F, 123456 par exemple
+Jeton A2F, p. ex. 123456
```

Jeton A2F, <del>123456</del><ins>p.</ins> <del>par</del><ins>ex.</ins> <del>exemple</del><ins>123456</ins>


### `import-ai-webhook-notification`

#### [`import-ai-webhook-notification.admin.settings.channel_icon_help`](https://weblate.rob006.net/translate/flarum2/import-ai-webhook-notification/fr/?q=context%3A%3D%22import-ai-webhook-notification.admin.settings.channel_icon_help%22)

>  icon class (e.g., fas fa-globe).

```diff
- classe d'icône (par exemple, fas fa-globe).
+ classe d'icône (p. ex. fas fa-globe).
```

 classe d'icône <del>(par</del><ins>(p.</ins> <del>exemple,</del><ins>ex.</ins> fas fa-globe).

#### [`import-ai-webhook-notification.admin.validation.channel_icon_invalid`](https://weblate.rob006.net/translate/flarum2/import-ai-webhook-notification/fr/?q=context%3A%3D%22import-ai-webhook-notification.admin.validation.channel_icon_invalid%22)

> Invalid icon format. Use Font Awesome format (e.g., fas fa-globe).

```diff
-Format d'icône non valide. Utilisez le format Font Awesome (par exemple, fas fa-globe).
+Format d'icône non valide. Utilisez le format Font Awesome (p. ex. fas fa-globe).
```

Format d'icône non valide. Utilisez le format Font Awesome <del>(par</del><ins>(p.</ins> <del>exemple,</del><ins>ex.</ins> fas fa-globe).


### `justoverclock-related-discussions`

#### [`justoverclock-related-discussions.admin.relatedLimit-help`](https://weblate.rob006.net/translate/flarum2/justoverclock-related-discussions/fr/?q=context%3A%3D%22justoverclock-related-discussions.admin.relatedLimit-help%22)

> write here the number of discussion that you want to see (e.g. "4")

```diff
-saisissez ici le nombre de discussion que vous souhaitez consulter (« 4 » par exemple)
+saisissez ici le nombre de discussion que vous souhaitez consulter (par ex. « 4 »)
```

saisissez ici le nombre de discussion que vous souhaitez consulter <del>(«</del><ins>(par</ins> <del>4</del><ins>ex.</ins> <del>»</del><ins>«</ins> <del>par</del><ins>4</ins> <del>exemple)</del><ins>»)</ins>


### `justoverclock-welcomebox`

#### [`flarum-ext-welcomebox.forum.tooltipDisclist`](https://weblate.rob006.net/translate/flarum2/justoverclock-welcomebox/fr/?q=context%3A%3D%22flarum-ext-welcomebox.forum.tooltipDisclist%22)

> My Discussion List

```diff
-Ma liste de discussions
+Ma liste de discussion
```

Ma liste de <del>discussions</del><ins>discussion</ins>


### `ralkage-cap-captcha`

#### [`ralkage-cap-captcha.admin.settings.api_endpoint_help`](https://weblate.rob006.net/translate/flarum2/ralkage-cap-captcha/fr/?q=context%3A%3D%22ralkage-cap-captcha.admin.settings.api_endpoint_help%22)

> Your Cap Standalone instance URL with site key, e.g. https://cap.example.com/your-site-key/

```diff
-L'URL de votre instance Cap Standalone avec la clé du site, par exemple https://cap.exemple.com/votre-cle-du-site/
+L'URL de votre instance Cap Standalone avec la clé du site, p. ex. : https://cap.exemple.com/votre-cle-du-site/
```

L'URL de votre instance Cap Standalone avec la clé du site, <del>par</del><ins>p.</ins> <del>exemple</del><ins>ex. :</ins> https://cap.exemple.com/votre-cle-du-site/


### `ralkage-hcaptcha`

#### [`ralkage-hcaptcha.admin.settings.dark_mode_help`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/fr/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.dark_mode_help%22)

> Use the dark theme for the hCaptcha widget. Enable this if your forum uses a dark theme.

```diff
-Utilisez le mode sombre pour le widget hCaptcha. Activez cette option si votre forum utilise un mode sombre.
+Utilisez le thème sombre pour le widget hCaptcha. Activez cette option si votre forum utilise un thème sombre.
```

Utilisez le <del>mode</del><ins>thème</ins> sombre pour le widget hCaptcha. Activez cette option si votre forum utilise un <del>mode</del><ins>thème</ins> sombre.

#### [`ralkage-hcaptcha.admin.settings.enable_login_label`](https://weblate.rob006.net/translate/flarum2/ralkage-hcaptcha/fr/?q=context%3A%3D%22ralkage-hcaptcha.admin.settings.enable_login_label%22)

> Require on Login

```diff
-Obligatoire à la connexion
+Obligatoire lors de la connexion
```

Obligatoire <del>à</del><ins>lors de</ins> la connexion


### `shebaoting-dependency-collector`

#### [`shebaoting-dependency-collector.admin.modal.tag_color_label`](https://weblate.rob006.net/translate/flarum2/shebaoting-dependency-collector/fr/?q=context%3A%3D%22shebaoting-dependency-collector.admin.modal.tag_color_label%22)

> Color (e.g.,

```diff
-Couleur (par exemple
+Couleur (p. ex.
```

Couleur <del>(par</del><ins>(p.</ins> <del>exemple</del><ins>ex.</ins>

#### [`shebaoting-dependency-collector.admin.modal.tag_icon_label`](https://weblate.rob006.net/translate/flarum2/shebaoting-dependency-collector/fr/?q=context%3A%3D%22shebaoting-dependency-collector.admin.modal.tag_icon_label%22)

> Icon (e.g., fas fa-code)

```diff
-Icône (par exemple fas fa-code)
+Icône (p. ex. fas fa-code)
```

Icône <del>(par</del><ins>(p.</ins> <del>exemple</del><ins>ex.</ins> fas fa-code)

#### [`shebaoting-dependency-collector.forum.modal.title_placeholder`](https://weblate.rob006.net/translate/flarum2/shebaoting-dependency-collector/fr/?q=context%3A%3D%22shebaoting-dependency-collector.forum.modal.title_placeholder%22)

> e.g., Awesome Library

```diff
-par exemple Awesome Library
+p.ex. Awesome Library
```

<del>par exemple</del><ins>p.ex.</ins> Awesome Library


### `shebaoting-money`

#### [`shebaoting-money.admin.automoderator.action_name`](https://weblate.rob006.net/translate/flarum2/shebaoting-money/fr/?q=context%3A%3D%22shebaoting-money.admin.automoderator.action_name%22)

> Give money

```diff
-Donner de l'argent
+Verser de l'argent
```

<del>Donner</del><ins>Verser</ins> de l'argent

#### [`shebaoting-money.admin.settings.moneyname`](https://weblate.rob006.net/translate/flarum2/shebaoting-money/fr/?q=context%3A%3D%22shebaoting-money.admin.settings.moneyname%22)

> Name of the money (ex: \[money\] points)

```diff
-Nom de l'argent (par exemple : [argent] points)
+Nom de l'argent (p. ex. : [argent] points)
```

Nom de l'argent <del>(par</del><ins>(p.</ins> <del>exemple</del><ins>ex.</ins> : \[argent\] points)


### `vlssu-cravatar`

#### [`vlssu-flarum-cravatar.admin.settings.allow-user-toggle.helptext`](https://weblate.rob006.net/translate/flarum2/vlssu-cravatar/fr/?q=context%3A%3D%22vlssu-flarum-cravatar.admin.settings.allow-user-toggle.helptext%22)

> When enabled, users can choose to use either their Cravatar image or the avatar uploaded to the forum.

```diff
-Lorsque cette option est activée, les utilisateurs peuvent choisir d'utiliser soit leur image Cravatar, soit l'avatar qu'ils ont téléchargé sur le forum.
+Lorsque cette option est activée, les utilisateurs peuvent choisir d'utiliser soit leur image Cravatar, soit l'avatar qu'ils ont transféré sur le forum.
```

Lorsque cette option est activée, les utilisateurs peuvent choisir d'utiliser soit leur image Cravatar, soit l'avatar qu'ils ont <del>téléchargé</del><ins>transféré</ins> sur le forum.

#### [`vlssu-flarum-cravatar.admin.settings.allow-user-toggle.title`](https://weblate.rob006.net/translate/flarum2/vlssu-cravatar/fr/?q=context%3A%3D%22vlssu-flarum-cravatar.admin.settings.allow-user-toggle.title%22)

> Allow users to switch between Cravatar and uploaded avatars

```diff
-Permettre aux utilisateurs de basculer entre les Cravatars et les avatars téléchargés
+Permettre aux utilisateurs de basculer entre les Cravatars et les avatars transférés
```

Permettre aux utilisateurs de basculer entre les Cravatars et les avatars <del>téléchargés</del><ins>transférés</ins>

#### [`vlssu-flarum-cravatar.admin.settings.defaults.monsterid_label`](https://weblate.rob006.net/translate/flarum2/vlssu-cravatar/fr/?q=context%3A%3D%22vlssu-flarum-cravatar.admin.settings.defaults.monsterid_label%22)

> monsterid: a generated 'monster' with different colors, faces, etc

```diff
-monsterid : un « monstre » généré avec différentes couleurs, visages, etc.
+monsterid : un « monstre » généré avec différentes couleurs, différents visages, etc
```

monsterid : un « monstre » généré avec différentes couleurs, <ins>différents </ins>visages, <del>etc.</del><ins>etc</ins>

#### [`vlssu-flarum-cravatar.admin.settings.defaults.robohash_label`](https://weblate.rob006.net/translate/flarum2/vlssu-cravatar/fr/?q=context%3A%3D%22vlssu-flarum-cravatar.admin.settings.defaults.robohash_label%22)

> robohash: a generated robot with different colors, faces, etc

```diff
-robohash : un robot généré avec différentes couleurs, visages, etc.
+robohash : un robot généré avec différentes couleurs, différents visages, etc
```

robohash : un robot généré avec différentes couleurs, <ins>différents </ins>visages, <del>etc.</del><ins>etc</ins>


### `yippy-auth-ldap`

#### [`yippy-auth-ldap.admin.settings.domains.data.admin_dn`](https://weblate.rob006.net/translate/flarum2/yippy-auth-ldap/fr/?q=context%3A%3D%22yippy-auth-ldap.admin.settings.domains.data.admin_dn%22)

> Distinguished name (DNs)

```diff
-Nom distinctif (DN)
+Nom distinctif (ND)
```

Nom distinctif <del>(DN)</del><ins>(ND)</ins>


## Missing translations

These strings are translated only in `fr`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `fr`.


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+Audit
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+Configurer
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+Configurer ce que les utilisateurs ayant des droits d'accès limités peuvent voir
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+Nécessite l'extension {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+Paramètres d'accès limité
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+Afficher le journal d'audit
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+Voir le journal d'audit limité
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+Afficher l'adresse IP
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+Journal d'audit (utilisateur en tant qu'acteur)
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+Journal d'audit
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+Journal d'audit
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+Journal d'audit (modifications du compte)
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+Journal d'Audit d'acteur
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+Journal d'audit
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+Journal d'Audit de discussion
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+Journal d'Audit d'utilisateur
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+A supprimé {deleted_count} entrées des journaux d'audit
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+A vidé manuellement le cache
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+Jeton d'accès
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+Clé API
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+Ligne de commande
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+Session en ligne
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+Client inconnu
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+Afficher les journaux de la même action
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+Afficher les journaux de cet acteur
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+Afficher les journaux de ce type de client
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+Afficher les journaux affectant la même discussion
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+Afficher les journaux de cette IP
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+Afficher les journaux affectant le même utilisateur
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+Masquer le journal brut
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+Afficher le journal brut
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+Discussion #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+Groupe #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+Message #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+Étiquette #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+Utilisateur #{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+A démarré la discussion {discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+A supprimé la discussion {discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+A masqué la discussion {discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+A renommé la discussion {old_title} par {new_title}
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+A restauré la discussion {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+Aucun résultat
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+A désactivé l'extension {package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+A activé l'extension {package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+A désinstallé l'extension {package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+Appliquer
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+Effacer le filtre
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+Filtrer les journaux
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+Le type d'action, p. ex. action:post.created.
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+Qui a effectué l'action. Utilisez « actor:guest » pour les actions système ou non authentifiées.
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+Comment la demande a été formulée.
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+Actions affectant une discussion spécifique, par ID.
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+L'adresse IP à l'origine de l'action.
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+L'utilisateur concerné par l'action, par nom d'utilisateur.
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+Filtres :
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+Commentaire
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+Message
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+Combinez les valeurs avec des virgules pour correspondre à l'une d'entre elles, p. ex. : action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+Préfixer un filtre d'un signe moins pour exclure les résultats correspondants, p. ex. -client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+Aide à la recherche
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+Charger davantage
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+(aucun motif)
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+(aucune valeur)
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+A modifié l'autorisation {permission} de {old_groups} vers {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+A créé un {post} dans {discussion}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+A supprimé {post} de {postuser} dans {discussion}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+A masqué {post} de {postuser} dans {discussion}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+A restauré {post} de {postuser} dans {discussion}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+A révisé {post} de {postuser} dans {discussion}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+Actualiser
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+A modifié le paramètre {key}
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+A modifié le paramètre {key}, {old_value} par {new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+A activé manuellement le compte de {username}
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+A activé le compte de {username} par lien de confirmation
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+A modifié l'avatar de {username}
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+A supprimé l'avatar de {username}
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+A créé le compte de {username}
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+A supprimé {username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+A demandé à modifier l'adresse de courriel de {username} par {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+A modifié l'adresse de courriel de {username}, {old_email} par {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+A modifié les groupes de {username}, {old_groups} par {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+S'est connecté au compte de {username}
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+S'est connecté au compte de {username} en utilisant {provider}
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+S'est déconnecté au compte de {username}
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+A demandé la modification du mot de passe de {username}
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+A modifié le mot de passe de {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+A demandé la réinitialisation du mot de passe pour {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+A demandé une réinitialisation du mot de passe pour {email} (aucun compte correspondant)
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+A connecté le fournisseur {provider} au compte de {username}
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+A modifié le nom d'utilisateur de {username}, {old_username} en {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/fr/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `fof-anti-spam` (missing)

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
+A bloqué l'inscription pour {username} ({email}) depuis {ip}
```

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/fr/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
+A marqué {username} comme indésirable
```


### `fof-author-change` (missing)

#### [`fof-author-change.admin.permissions.edit-date`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-date%22)

> Update discussion and post date

```diff
+Mettre à jour la discussion et la date du message
```

#### [`fof-author-change.admin.permissions.edit-user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-user%22)

> Update discussion and post author

```diff
+Mettre à jour la discussion et l'auteur du message
```

#### [`fof-author-change.forum.controls.edit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.controls.edit%22)

> Edit Author and Date

```diff
+Modifier l’auteur et la date
```

#### [`fof-author-change.forum.modal.cancel`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.cancel%22)

> Cancel

```diff
+Annuler
```

#### [`fof-author-change.forum.modal.created_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.created_at%22)

> Creation time

```diff
+Heure de création
```

#### [`fof-author-change.forum.modal.edited_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.edited_at%22)

> Edit time

```diff
+Modifier l'heure
```

#### [`fof-author-change.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.submit%22)

> Save

```diff
+Enregistrer
```

#### [`fof-author-change.forum.modal.sync-impossible`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.sync-impossible%22)

> Cannot find first post. Try scrolling to the start of the discussion.

```diff
+Impossible de trouver le premier message. Essayez de faire défiler jusqu’au début de la discussion.
```

#### [`fof-author-change.forum.modal.sync-with-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-discussion%22)

> Sync with discussion

```diff
+Synchroniser avec la discussion
```

#### [`fof-author-change.forum.modal.sync-with-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-post%22)

> Sync with first post

```diff
+Synchroniser avec le premier message
```

#### [`fof-author-change.forum.modal.title-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.title-discussion%22)

> Edit Discussion Author and Date

```diff
+Modifier l’auteur et la date de la discussion
```

#### [`fof-author-change.forum.modal.title-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.title-post%22)

> Edit Post Author and Date

```diff
+Modifier l’auteur et la date du message
```

#### [`fof-author-change.forum.modal.user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.modal.user%22)

> Author

```diff
+Auteur
```

#### [`fof-author-change.forum.search.no-results`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.search.no-results%22)

> No results

```diff
+Aucun résultat
```

#### [`fof-author-change.forum.search.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.search.placeholder%22)

> Search users

```diff
+Rechercher des utilisateurs
```

#### [`fof-author-change.forum.search.type-more`](https://weblate.rob006.net/translate/flarum2/fof-author-change/fr/?q=context%3A%3D%22fof-author-change.forum.search.type-more%22)

> Type 3 characters to search database

```diff
+Saisissez 3 caractères pour effectuer une recherche dans la base de données
```


### `fof-badges` (missing)

#### [`fof-badges.admin.actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.actions%22)

> Actions on Badge Earned

```diff
+Actions sur le badge obtenu
```

#### [`fof-badges.admin.active`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.active%22)

> Active

```diff
+Actif
```

#### [`fof-badges.admin.add_to_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.add_to_group%22)

> Add user to group

```diff
+Ajouter l'utilisateur à ce groupe
```

#### [`fof-badges.admin.add_to_group_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.add_to_group_help%22)

> Automatically add the user to this group when they earn the badge.

```diff
+Ajouter automatiquement l'utilisateur à ce groupe lorsqu'il obtient le badge.
```

#### [`fof-badges.admin.appearance`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.appearance%22)

> Appearance

```diff
+Apparence
```

#### [`fof-badges.admin.assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.assign%22)

> Assign

```diff
+Attribuer
```

#### [`fof-badges.admin.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.assign_badge%22)

> Assign: {badge}

```diff
+Attribuer : {badge}
```

#### [`fof-badges.admin.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.assign_reason%22)

> Reason (optional)

```diff
+Motif (facultatif)
```

#### [`fof-badges.admin.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Ce motif apparaîtra sur le badge de l'utilisateur.
```

#### [`fof-badges.admin.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+Pourquoi ce badge a-t-il été décerné ?
```

#### [`fof-badges.admin.automatic`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.automatic%22)

> Automatic

```diff
+Automatique
```

#### [`fof-badges.admin.background_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.background_color%22)

> Background Color

```diff
+Couleur de l'arrière plan
```

#### [`fof-badges.admin.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+Le badge « {badge} » a été attribué à {username} !
```

#### [`fof-badges.admin.badge_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_category%22)

> Category

```diff
+Catégorie
```

#### [`fof-badges.admin.badge_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_count%22)

> {count, plural, one {# badge} other {# badges}}

```diff
+{count, plural, one {# badge} other {# badges}}
```

#### [`fof-badges.admin.badge_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_description%22)

> Description

```diff
+Description
```

#### [`fof-badges.admin.badge_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_description_placeholder%22)

> Describe how to earn this badge...

```diff
+Décrivez comment obtenir ce badge...
```

#### [`fof-badges.admin.badge_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_name%22)

> Name

```diff
+Nom
```

#### [`fof-badges.admin.badge_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_name_placeholder%22)

> e.g., "100 Posts Master"

```diff
+p. ex. « Maître des 100 messages »
```

#### [`fof-badges.admin.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_revoked%22)

> Badge "{badge}" has been revoked from {username}.

```diff
+Le badge « {badge} » de {username} a été révoqué.
```

#### [`fof-badges.admin.badge_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_slug%22)

> Slug

```diff
+Slug
```

#### [`fof-badges.admin.badge_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_slug_help%22)

> URL-friendly identifier. Auto-generated from name if left empty.

```diff
+Identifiant URL. Généré automatiquement à partir du nom si le champ est laissé vide.
```

#### [`fof-badges.admin.badge_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.badge_slug_placeholder%22)

> e.g., "100-posts-master"

```diff
+p. ex. « maitre-100-messages »
```

#### [`fof-badges.admin.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.cancel%22)

> Cancel

```diff
+Annuler
```

#### [`fof-badges.admin.category_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_description%22)

> Description

```diff
+Description
```

#### [`fof-badges.admin.category_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_description_placeholder%22)

> Describe this category of badges...

```diff
+Décrivez cette catégorie de badges...
```

#### [`fof-badges.admin.category_enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_enabled%22)

> Enabled

```diff
+Activée
```

#### [`fof-badges.admin.category_enabled_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_enabled_help%22)

> Disabled categories and their badges won't appear in the badge list.

```diff
+Les catégories désactivées et leurs badges n'apparaîtront pas dans la liste des badges.
```

#### [`fof-badges.admin.category_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_name%22)

> Name

```diff
+Nom
```

#### [`fof-badges.admin.category_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_name_placeholder%22)

> e.g., "Achievement Badges"

```diff
+p. ex. « Badges de réussite »
```

#### [`fof-badges.admin.category_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_slug%22)

> Slug

```diff
+Slug
```

#### [`fof-badges.admin.category_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_slug_help%22)

> URL-friendly identifier for the category.

```diff
+Identifiant URL de la catégorie.
```

#### [`fof-badges.admin.category_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.category_slug_placeholder%22)

> e.g., "achievements"

```diff
+p. ex. « succes »
```

#### [`fof-badges.admin.clear_selection`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.clear_selection%22)

> Clear selection

```diff
+Effacer la sélection
```

#### [`fof-badges.admin.create_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.create_badge%22)

> Create Badge

```diff
+Créer un badge
```

#### [`fof-badges.admin.create_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.create_category%22)

> Create Category

```diff
+Créer une catégorie
```

#### [`fof-badges.admin.delete`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.delete%22)

> Delete

```diff
+Supprimer
```

#### [`fof-badges.admin.delete_badge_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.delete_badge_confirm%22)

> Are you sure you want to delete the badge "{name}"? This will also remove it from all users who have earned it.

```diff
+Êtes-vous sûr de vouloir supprimer le badge « {name} » ? Cela le supprimera également de tous les utilisateurs qui l'ont obtenu.
```

#### [`fof-badges.admin.delete_category_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm%22)

> Are you sure you want to delete the category "{name}"?

```diff
+Êtes-vous sûr de vouloir supprimer la catégorie « {name} » ?
```

#### [`fof-badges.admin.delete_category_confirm_with_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm_with_badges%22)

> Are you sure you want to delete the category "{name}"? {count, plural, one {# badge} other {# badges}} will become uncategorized.

```diff
+Êtes-vous sûr de vouloir supprimer la catégorie « {name} » ? {count, plural, one {# badge} other {# badges}} ne seront plus classés dans une catégorie.
```

#### [`fof-badges.admin.disabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.disabled%22)

> Disabled

```diff
+Désactivé
```

#### [`fof-badges.admin.earned_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.earned_count%22)

> {count} earned

```diff
+{count} obtenu(s)
```

#### [`fof-badges.admin.edit`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.edit%22)

> Edit

```diff
+Modifier
```

#### [`fof-badges.admin.edit_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.edit_badge%22)

> Edit Badge

```diff
+Modifier le badge
```

#### [`fof-badges.admin.edit_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.edit_category%22)

> Edit Category

```diff
+Modifier la catégorie
```

#### [`fof-badges.admin.enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.enabled%22)

> Enabled

```diff
+Activé
```

#### [`fof-badges.admin.granted_by_system`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.granted_by_system%22)

> System

```diff
+Système
```

#### [`fof-badges.admin.headers.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.badges%22)

> Badges

```diff
+Badges
```

#### [`fof-badges.admin.headers.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.description%22)

> Description

```diff
+Description
```

#### [`fof-badges.admin.headers.earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.earned%22)

> Earned

```diff
+Obtenu
```

#### [`fof-badges.admin.headers.icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.icon%22)

> Icon

```diff
+Icône
```

#### [`fof-badges.admin.headers.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.name%22)

> Name

```diff
+Nom
```

#### [`fof-badges.admin.headers.order`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.order%22)

> Order

```diff
+Ordre
```

#### [`fof-badges.admin.headers.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.rarity%22)

> Rarity

```diff
+Rareté
```

#### [`fof-badges.admin.headers.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.status%22)

> Status

```diff
+Statut
```

#### [`fof-badges.admin.headers.type`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.headers.type%22)

> Type

```diff
+Type
```

#### [`fof-badges.admin.icon_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.icon_color%22)

> Icon Color

```diff
+Couleur de l'icône
```

#### [`fof-badges.admin.icon_picker.collapse`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.icon_picker.collapse%22)

> Hide icon picker

```diff
+Masquer le sélecteur d'icônes
```

#### [`fof-badges.admin.icon_picker.expand`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.icon_picker.expand%22)

> Show icon picker

```diff
+Afficher le sélecteur d'icônes
```

#### [`fof-badges.admin.icon_picker.hint`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.icon_picker.hint%22)

> Click an icon to select, or type a Font Awesome class name above.

```diff
+Cliquez sur une icône pour la sélectionner, ou saisissez le nom d'une classe Font Awesome ci-dessus.
```

#### [`fof-badges.admin.inactive`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.inactive%22)

> Inactive

```diff
+Inactif
```

#### [`fof-badges.admin.install_defaults`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.install_defaults%22)

> Install Default Badges

```diff
+Installer les badges par défaut
```

#### [`fof-badges.admin.install_defaults_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.install_defaults_error%22)

> Failed to install default badges.

```diff
+Échec d'installation des badges par défaut.
```

#### [`fof-badges.admin.install_defaults_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.install_defaults_success%22)

> Default badges installed successfully!

```diff
+Les badges par défaut ont été installés avec succès !
```

#### [`fof-badges.admin.is_active`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.is_active%22)

> Active

```diff
+Actif
```

#### [`fof-badges.admin.is_active_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.is_active_help%22)

> Inactive badges won't be automatically awarded to users.

```diff
+Les badges inactifs ne seront pas décernés automatiquement aux utilisateurs.
```

#### [`fof-badges.admin.is_visible`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.is_visible%22)

> Visible in badge list

```diff
+Visible dans la liste des badges
```

#### [`fof-badges.admin.is_visible_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.is_visible_help%22)

> Hidden badges won't appear in the public badge list but users can still earn them.

```diff
+Les badges masqués n'apparaîtront pas dans la liste publique des badges mais les utilisateurs peuvent tout de même les obtenir.
```

#### [`fof-badges.admin.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.manual%22)

> Manual

```diff
+Manuel
```

#### [`fof-badges.admin.metrics.best_answers_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.best_answers_received%22)

> Best Answers Received

```diff
+Meilleures réponses reçues
```

#### [`fof-badges.admin.metrics.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.discussion_count%22)

> Discussions Started

```diff
+Discussions démarrées
```

#### [`fof-badges.admin.metrics.downvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_given%22)

> Downvotes Given

```diff
+Votes négatifs distribués
```

#### [`fof-badges.admin.metrics.downvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_received%22)

> Downvotes Received

```diff
+Votes négatifs reçus
```

#### [`fof-badges.admin.metrics.edit_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.edit_count%22)

> Posts Edited

```diff
+Messages modifiés
```

#### [`fof-badges.admin.metrics.files_uploaded`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.files_uploaded%22)

> Files Uploaded

```diff
+Fichiers transférés
```

#### [`fof-badges.admin.metrics.has_avatar`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.has_avatar%22)

> Has Avatar

```diff
+A un avatar
```

#### [`fof-badges.admin.metrics.has_bio`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.has_bio%22)

> Has Bio

```diff
+A une biographie
```

#### [`fof-badges.admin.metrics.has_nickname`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.has_nickname%22)

> Has Nickname

```diff
+A un surnom
```

#### [`fof-badges.admin.metrics.likes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.likes_given%22)

> Likes Given

```diff
+« J'aime » distribués
```

#### [`fof-badges.admin.metrics.likes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.likes_received%22)

> Likes Received

```diff
+« J'aime » reçus
```

#### [`fof-badges.admin.metrics.member_days`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.member_days%22)

> Days as Member

```diff
+Jours en tant que membre
```

#### [`fof-badges.admin.metrics.polls_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.polls_created%22)

> Polls Created

```diff
+Sondages créés
```

#### [`fof-badges.admin.metrics.polls_voted`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.polls_voted%22)

> Polls Voted

```diff
+Sondages votés
```

#### [`fof-badges.admin.metrics.post_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.post_count%22)

> Post Count

```diff
+Nombre de messages
```

#### [`fof-badges.admin.metrics.private_discussions_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.private_discussions_created%22)

> Private Discussions Created

```diff
+Discussions privées créées
```

#### [`fof-badges.admin.metrics.reactions_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_given%22)

> Reactions Given

```diff
+Réactions distribuées
```

#### [`fof-badges.admin.metrics.reactions_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_received%22)

> Reactions Received

```diff
+Réactions reçues
```

#### [`fof-badges.admin.metrics.tag_posts`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.tag_posts%22)

> Posts in Tag

```diff
+Messages associés à cette étiquette
```

#### [`fof-badges.admin.metrics.upvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_given%22)

> Upvotes Given

```diff
+Votes positifs distribués
```

#### [`fof-badges.admin.metrics.upvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_received%22)

> Upvotes Received

```diff
+Votes positifs reçus
```

#### [`fof-badges.admin.move_down`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.move_down%22)

> Move down

```diff
+Descendre
```

#### [`fof-badges.admin.move_up`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.move_up%22)

> Move up

```diff
+Monter
```

#### [`fof-badges.admin.next`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.next%22)

> Next

```diff
+Suivant
```

#### [`fof-badges.admin.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_badges%22)

> No badges yet. Create your first badge!

```diff
+Aucun badge pour le moment. Créez votre premier badge !
```

#### [`fof-badges.admin.no_categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_categories%22)

> No categories yet. Create your first category!

```diff
+Aucune catégorie pour le moment. Créez votre première catégorie !
```

#### [`fof-badges.admin.no_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_category%22)

> No category

```diff
+Aucune catégorie
```

#### [`fof-badges.admin.no_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_group%22)

> Don't add to group

```diff
+Ne pas ajouter à ce groupe
```

#### [`fof-badges.admin.no_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_holders%22)

> No one has earned this badge yet.

```diff
+Personne n'a obtenu ce badge pour le moment.
```

#### [`fof-badges.admin.no_holders_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_holders_found%22)

> No holders found matching your search.

```diff
+Aucun détenteur correspondant à votre recherche n'a été trouvé.
```

#### [`fof-badges.admin.no_users_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.no_users_found%22)

> No users found

```diff
+Aucun utilisateur trouvé
```

#### [`fof-badges.admin.permissions.give_manually`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.permissions.give_manually%22)

> Manually assign badges

```diff
+Attribuer manuellement des badges
```

#### [`fof-badges.admin.permissions.moderate`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.permissions.moderate%22)

> Manage badges

```diff
+Gérer les badges
```

#### [`fof-badges.admin.permissions.view_list`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.permissions.view_list%22)

> View badge list

```diff
+Afficher la liste des badges
```

#### [`fof-badges.admin.permissions.view_user_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.permissions.view_user_badges%22)

> View user badges

```diff
+Afficher les badges d'un utilisateur
```

#### [`fof-badges.admin.preview`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.preview%22)

> Preview

```diff
+Prévisualisation
```

#### [`fof-badges.admin.previous`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.previous%22)

> Previous

```diff
+Précédent
```

#### [`fof-badges.admin.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.rarity%22)

> {percent}% rarity

```diff
+{percent}% de rareté
```

#### [`fof-badges.admin.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate%22)

> Recalculate

```diff
+Recalculer
```

#### [`fof-badges.admin.recalculate_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_confirm%22)

> This will recalculate all automatic badges for all users. The process will run in the background. Continue?

```diff
+Cela va recalculer tous les badges automatiques pour tous les utilisateurs. Le processus s'exécutera en arrière-plan. Continuer ?
```

#### [`fof-badges.admin.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Échec du recalcul des badges. Veuillez réessayer.
```

#### [`fof-badges.admin.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_success%22)

> Recalculation complete! Awarded: {awarded}, Revoked: {revoked}, Users processed: {users}

```diff
+Le recalcul est terminé ! Décerné(s) : {awarded}, Révoqué(s) : {revoked}, Utilisateurs traités : {users}
```

#### [`fof-badges.admin.recalculate_tab.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.all_badges%22)

> All automatic badges

```diff
+Tous les badges automatiques
```

#### [`fof-badges.admin.recalculate_tab.badge_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_help%22)

> Select a specific badge or recalculate all automatic badges.

```diff
+Sélectionnez un badge spécifique ou recalculez tous les badges automatiques.
```

#### [`fof-badges.admin.recalculate_tab.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_label%22)

> Badge to recalculate

```diff
+Badge à recalculer
```

#### [`fof-badges.admin.recalculate_tab.badges_to_check`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badges_to_check%22)

> Badges to check

```diff
+Badges à vérifier
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_help%22)

> Number of users to process per job. Smaller chunks are more reliable but take longer overall.

```diff
+Nombre d'utilisateurs à traiter par tâche. Les blocs plus petits sont plus fiables mais prennent globalement plus de temps.
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_label%22)

> Chunk size

```diff
+Taille du bloc
```

#### [`fof-badges.admin.recalculate_tab.default`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.default%22)

> default

```diff
+Par défaut
```

#### [`fof-badges.admin.recalculate_tab.estimated_chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.estimated_chunks%22)

> Estimated chunks

```diff
+Blocs estimés
```

#### [`fof-badges.admin.recalculate_tab.info`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.info%22)

> Recalculation processes users in chunks to avoid queue timeouts. Each chunk runs as a separate background job.

```diff
+Le recalcul traite les utilisateurs par blocs afin d'éviter les délais d'attente. Chaque bloc s'exécute sous forme de tâche d'arrière-plan distincte.
```

#### [`fof-badges.admin.recalculate_tab.jobs_empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_empty%22)

> No recalculation jobs yet.

```diff
+Aucune tâche de recalcul pour le moment.
```

#### [`fof-badges.admin.recalculate_tab.jobs_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_title%22)

> Job History

```diff
+Historique des tâches
```

#### [`fof-badges.admin.recalculate_tab.no_automatic_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_automatic_badges%22)

> No automatic badges configured. Create a badge with trigger conditions first.

```diff
+Aucun badge automatique n'est configuré. Veuillez créer un badge avec des conditions de déclenchement.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_help%22)

> If enabled, users who no longer meet the criteria will keep their badges.

```diff
+Si cette option est activée, les utilisateurs qui ne remplissent plus les critères conserveront leurs badges.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_label%22)

> Don't revoke existing badges

```diff
+Ne pas révoquer les badges existants
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_help%22)

> If enabled, badge actions (like adding to a group) will be re-applied to users who already have the badge. Useful when you've added new actions to an existing badge.

```diff
+Si cette option est activée, les actions associées au badge (comme l'ajout à un groupe) seront réappliquées aux utilisateurs qui possèdent déjà ce badge. Cela s'avère utile lorsque vous ajoutez de nouvelles actions à un badge existant.
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_label%22)

> Re-apply actions to existing badge holders

```diff
+Réappliquer les actions aux détenteurs de badges existants
```

#### [`fof-badges.admin.recalculate_tab.show_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.show_more%22)

> Show {count} more

```diff
+Afficher {count} en plus
```

#### [`fof-badges.admin.recalculate_tab.start`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.start%22)

> Start Recalculation

```diff
+Démarrer le recalcul
```

#### [`fof-badges.admin.recalculate_tab.sync_counts`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts%22)

> Sync Badge Counts

```diff
+Synchroniser le nombre de badges
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_error%22)

> Failed to sync badge counts.

```diff
+Échec de la synchronisation du nombre de badges.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_info%22)

> Recalculate the "earned count" for all badges based on actual user\_badges records. Use this if counts become incorrect after recalculation.

```diff
+Recalculer le « nombre d'obtentions » de chaque badge en fonction des enregistrements user_badges réels. Utilisez cette fonction si les chiffres sont erronés après le recalcul.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_success%22)

> Badge counts synced! {corrected} of {total} badges were corrected.

```diff
+Le nombre de badges a été synchronisé ! {corrected} des {total} badges ont été corrigés.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_title%22)

> Sync Badge Counts

```diff
+Synchroniser le nombre de badges
```

#### [`fof-badges.admin.recalculate_tab.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.title%22)

> Start Recalculation

```diff
+Démarrer le recalcul
```

#### [`fof-badges.admin.recalculate_tab.total_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.total_users%22)

> Total users

```diff
+Nombre total d'utilisateurs
```

#### [`fof-badges.admin.recalculation.already_running`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.already_running%22)

> A badge recalculation is already in progress.

```diff
+Un recalcul des badges est déjà en cours.
```

#### [`fof-badges.admin.recalculation.auto_refresh_off`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_off%22)

> Auto-refresh

```diff
+Actualisation automatique
```

#### [`fof-badges.admin.recalculation.auto_refresh_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_on%22)

> Auto-refresh is on

```diff
+Actualisation automatique activée
```

#### [`fof-badges.admin.recalculation.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel%22)

> Cancel

```diff
+Annuler
```

#### [`fof-badges.admin.recalculation.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_confirm%22)

> Are you sure you want to cancel the recalculation? Progress will be lost.

```diff
+Êtes-vous sûr de vouloir annuler le recalcul ? Toutes les données seront perdues.
```

#### [`fof-badges.admin.recalculation.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_error%22)

> Failed to cancel recalculation.

```diff
+Échec de l'annulation du recalcul.
```

#### [`fof-badges.admin.recalculation.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.cancelled%22)

> Recalculation cancelled

```diff
+Recalcul annulé
```

#### [`fof-badges.admin.recalculation.chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.chunks%22)

> Chunks: {processed} / {total}

```diff
+Blocs : {processed} / {total}
```

#### [`fof-badges.admin.recalculation.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.completed%22)

> Recalculation completed!

```diff
+Recalcul terminé !
```

#### [`fof-badges.admin.recalculation.dismiss`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.dismiss%22)

> Dismiss

```diff
+Rejeter
```

#### [`fof-badges.admin.recalculation.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.failed%22)

> Recalculation failed

```diff
+Recalcul échoué
```

#### [`fof-badges.admin.recalculation.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.pending%22)

> Preparing recalculation...

```diff
+Préparation du recalcul...
```

#### [`fof-badges.admin.recalculation.progress`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.progress%22)

> {processed} / {total} evaluations ({percentage}%)

```diff
+{processed} / {total} évaluations ({percentage}%)
```

#### [`fof-badges.admin.recalculation.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.running%22)

> Recalculating badges...

```diff
+Recalcul des badges...
```

#### [`fof-badges.admin.recalculation.started`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.started%22)

> Badge recalculation started. This will run in the background.

```diff
+Le recalcul des badges a démarré. Cette opération s'effectuera en arrière-plan.
```

#### [`fof-badges.admin.recalculation.stats`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation.stats%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Décerné(s) : {awarded} | Révoqué(s) : {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.button`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.button%22)

> Jobs

```diff
+Tâches
```

#### [`fof-badges.admin.recalculation_jobs.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel%22)

> Cancel

```diff
+Annuler
```

#### [`fof-badges.admin.recalculation_jobs.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel_error%22)

> Failed to cancel job.

```diff
+Échec de l'annulation de la tâche.
```

#### [`fof-badges.admin.recalculation_jobs.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancelled%22)

> Job cancelled successfully.

```diff
+La tâche a été annulée avec succès.
```

#### [`fof-badges.admin.recalculation_jobs.empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.empty%22)

> No recalculation jobs found.

```diff
+Aucune tâche de recalcul n'a été trouvée.
```

#### [`fof-badges.admin.recalculation_jobs.force_cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.force_cancel%22)

> Force Cancel

```diff
+Forcer l'annulation
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed%22)

> Mark as Failed

```diff
+Marquer comme échoué
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed_error%22)

> Failed to mark job as failed.

```diff
+Impossible de marquer la tâche comme ayant échoué.
```

#### [`fof-badges.admin.recalculation_jobs.marked_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.marked_failed%22)

> Job marked as failed.

```diff
+La tâche a été marquée comme ayant échoué.
```

#### [`fof-badges.admin.recalculation_jobs.results`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.results%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Décerné(s) : {awarded} | Révoqué(s) : {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.status.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.cancelled%22)

> Cancelled

```diff
+Annulé
```

#### [`fof-badges.admin.recalculation_jobs.status.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.completed%22)

> Completed

```diff
+Terminé
```

#### [`fof-badges.admin.recalculation_jobs.status.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.failed%22)

> Failed

```diff
+Échec
```

#### [`fof-badges.admin.recalculation_jobs.status.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.pending%22)

> Pending

```diff
+En attente
```

#### [`fof-badges.admin.recalculation_jobs.status.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.running%22)

> Running

```diff
+En cours d'exécution
```

#### [`fof-badges.admin.recalculation_jobs.stuck`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.stuck%22)

> Stuck

```diff
+Bloqué
```

#### [`fof-badges.admin.recalculation_jobs.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.title%22)

> Recalculation Jobs

```diff
+Tâches de recalcul
```

#### [`fof-badges.admin.recalculation_jobs.users`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.users%22)

> {processed} / {total} evaluations

```diff
+{processed} / {total} évaluations
```

#### [`fof-badges.admin.revoke`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.revoke%22)

> Revoke

```diff
+Révoquer
```

#### [`fof-badges.admin.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from {username}?

```diff
+Êtes-vous sûr de vouloir révoquer le badge « {badge} » à {username} ?
```

#### [`fof-badges.admin.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.revoke_error%22)

> Failed to revoke badge.

```diff
+Échec de la révocation du badge.
```

#### [`fof-badges.admin.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.save%22)

> Save

```diff
+Enregistrer
```

#### [`fof-badges.admin.search_holders_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.search_holders_placeholder%22)

> Search holders...

```diff
+Rechercher des détenteurs...
```

#### [`fof-badges.admin.search_user_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.search_user_placeholder%22)

> Search by username or display name...

```diff
+Rechercher par nom d'utilisateur ou nom d'affichage...
```

#### [`fof-badges.admin.select_user`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.select_user%22)

> Select User

```diff
+Sélectionner un utilisateur
```

#### [`fof-badges.admin.send_notification`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.send_notification%22)

> Send notification to user

```diff
+Envoyer une notification à l'utilisateur
```

#### [`fof-badges.admin.settings.display_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.display_title%22)

> Display Settings

```diff
+Paramètres d'affichage
```

#### [`fof-badges.admin.settings.integrations_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.integrations_help%22)

> Badge metrics that depend on other extensions. Install the extension to unlock the corresponding metrics.

```diff
+Les métriques des badges s'appuient sur d'autres extensions. Installez l'extension pour débloquer les indicateurs correspondants.
```

#### [`fof-badges.admin.settings.integrations_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.integrations_title%22)

> Extension Integrations

```diff
+Intégration avec d'autres extensions
```

#### [`fof-badges.admin.settings.new_badge_highlight`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight%22)

> Show "NEW" tag on recently earned badges

```diff
+Afficher l'étiquette « NOUVEAU » sur les badges récemment obtenus
```

#### [`fof-badges.admin.settings.new_badge_highlight_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight_help%22)

> Displays a "NEW" tag on badges earned within the last 7 days.

```diff
+Affiche l'étiquette « NOUVEAU » sur les badges obtenus au cours des 7 derniers jours.
```

#### [`fof-badges.admin.settings.post_badge_display_limit`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit%22)

> Post badge display limit

```diff
+Limite d'affichage des badges dans les messages
```

#### [`fof-badges.admin.settings.post_badge_display_limit_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit_help%22)

> Maximum number of badges to show under posts. Set to 0 to disable.

```diff
+Nombre maximal de badges à afficher sous les messages. Définissez cette valeur sur 0 pour désactiver cette fonctionnalité.
```

#### [`fof-badges.admin.settings.primary_badge_display`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display%22)

> Primary badge display

```diff
+Affichage du badge principal
```

#### [`fof-badges.admin.settings.primary_badge_display_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display_help%22)

> How the user's primary badge appears next to their username.

```diff
+Comment le badge principal de l'utilisateur s'affiche à côté de son nom d'utilisateur.
```

#### [`fof-badges.admin.settings.primary_badge_hidden`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_hidden%22)

> Hidden

```diff
+Masqué
```

#### [`fof-badges.admin.settings.primary_badge_icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon%22)

> Icon only

```diff
+Icône seulement
```

#### [`fof-badges.admin.settings.primary_badge_icon_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon_name%22)

> Icon and name

```diff
+Icône et nom
```

#### [`fof-badges.admin.settings.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.save%22)

> Save Settings

```diff
+Enregistrer les paramètres
```

#### [`fof-badges.admin.settings.save_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.save_error%22)

> Failed to save settings.

```diff
+Échec de l'enregistrement des paramètres.
```

#### [`fof-badges.admin.settings.saved`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.saved%22)

> Settings saved successfully.

```diff
+Paramètres enregistrés avec succès.
```

#### [`fof-badges.admin.settings.show_badges_on_user_card`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card%22)

> Show badges on user card

```diff
+Afficher les badges sur la carte utilisateur
```

#### [`fof-badges.admin.settings.show_badges_on_user_card_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card_help%22)

> Display the user's favorite or rarest badge on user cards and profile pages.

```diff
+Afficher le badge préféré ou le badge le plus rare de l'utilisateur sur les cartes d'utilisateur et les pages de profil.
```

#### [`fof-badges.admin.showing_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.showing_holders%22)

> Showing {from}-{to} of {total}

```diff
+Afficher {from}-{to} sur {total}
```

#### [`fof-badges.admin.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.status%22)

> Status

```diff
+Statut
```

#### [`fof-badges.admin.tab_assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.tab_assign%22)

> Assign

```diff
+Attribuer
```

#### [`fof-badges.admin.tab_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.tab_holders%22)

> Holders ({count})

```diff
+Détenteurs ({count})
```

#### [`fof-badges.admin.tabs.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.tabs.badges%22)

> Badges

```diff
+Badges
```

#### [`fof-badges.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.tabs.categories%22)

> Categories

```diff
+Catégories
```

#### [`fof-badges.admin.tabs.recalculation`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.tabs.recalculation%22)

> Recalculation

```diff
+Recalcul
```

#### [`fof-badges.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.tabs.settings%22)

> Settings

```diff
+Paramètres
```

#### [`fof-badges.admin.trigger_builder.add_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.add_condition%22)

> Add Condition

```diff
+Ajouter une condition
```

#### [`fof-badges.admin.trigger_builder.and`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and%22)

> ALL must match (AND)

```diff
+TOUTES les conditions doivent être remplies (ET)
```

#### [`fof-badges.admin.trigger_builder.and_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and_help%22)

> User must meet all conditions simultaneously to earn this badge.

```diff
+L'utilisateur doit remplir toutes les conditions simultanément pour obtenir ce badge.
```

#### [`fof-badges.admin.trigger_builder.date_end`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_end%22)

> End Date

```diff
+Date de fin
```

#### [`fof-badges.admin.trigger_builder.date_range_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_range_help%22)

> Only count activity within this date range. Useful for event badges.

```diff
+Seules les activités réalisées pendant cette plage de dates sont prises en compte. Utile pour les badges d'événement.
```

#### [`fof-badges.admin.trigger_builder.date_start`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_start%22)

> Start Date

```diff
+Date de début
```

#### [`fof-badges.admin.trigger_builder.loading_tags`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.loading_tags%22)

> Loading tags...

```diff
+Chargement des étiquettes…
```

#### [`fof-badges.admin.trigger_builder.logic`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.logic%22)

> When multiple conditions

```diff
+Si plusieurs conditions
```

#### [`fof-badges.admin.trigger_builder.no_conditions_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.no_conditions_info%22)

> No conditions set. This badge can only be assigned manually by moderators.

```diff
+Aucune condition n'est définie. Ce badge peut seulement être attribué manuellement par les modérateurs.
```

#### [`fof-badges.admin.trigger_builder.or`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or%22)

> ANY must match (OR)

```diff
+N'IMPORTE QUELLE condition doit être remplie (OU)
```

#### [`fof-badges.admin.trigger_builder.or_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or_help%22)

> User must meet at least one condition to earn this badge.

```diff
+L'utilisateur doit remplir au moins une condition pour obtenir ce badge.
```

#### [`fof-badges.admin.trigger_builder.remove_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.remove_condition%22)

> Remove condition

```diff
+Supprimer une condition
```

#### [`fof-badges.admin.trigger_builder.select_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.select_tag%22)

> Select a tag...

```diff
+Sélectionnez une étiquette...
```

#### [`fof-badges.admin.trigger_builder.tag_filter`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter%22)

> Tag Filter

```diff
+Filtre par étiquette
```

#### [`fof-badges.admin.trigger_builder.tag_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter_help%22)

> Required when using "Posts in Tag" metric.

```diff
+Cette information est requise lors de l'utilisation du métrique « Messages associés à cette étiquette ».
```

#### [`fof-badges.admin.trigger_builder.use_date_range`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_builder.use_date_range%22)

> Limit to date range

```diff
+Limiter à une plage de dates
```

#### [`fof-badges.admin.trigger_config`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_config%22)

> Automatic Trigger

```diff
+Déclenchement automatique
```

#### [`fof-badges.admin.trigger_config_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.trigger_config_help%22)

> Configure conditions for automatic badge awarding. Leave empty for manual-only badges.

```diff
+Configurez les conditions d'attribution automatique des badges. Laissez ce champ vide pour les badges à attribuer uniquement manuellement.
```

#### [`fof-badges.admin.uncategorized`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.uncategorized%22)

> Uncategorized

```diff
+Sans catégorie
```

#### [`fof-badges.admin.validation.tag_required`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.admin.validation.tag_required%22)

> You must select a tag when using the "Posts in Tag" metric.

```diff
+Vous devez sélectionner une étiquette lorsque vous utilisez le métrique « Messages associés à cette étiquette ».
```

#### [`fof-badges.forum.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.all_badges%22)

> All Badges

```diff
+Tous les badges
```

#### [`fof-badges.forum.badges_subtitle`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.badges_subtitle%22)

> Earn badges by participating in the community!

```diff
+Obtenez des badges en participant au sein de la communauté !
```

#### [`fof-badges.forum.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.badges_title%22)

> Badges

```diff
+Badges
```

#### [`fof-badges.forum.earned_by`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.earned_by%22)

> {count, plural, one {# user} other {# users}}

```diff
+{count, plural, one {# utilisateur} other {# utilisateurs}}
```

#### [`fof-badges.forum.earned_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.earned_users%22)

> Earned By

```diff
+Obtenu par
```

#### [`fof-badges.forum.loading`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.loading%22)

> Loading...

```diff
+Chargement...
```

#### [`fof-badges.forum.more_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.more_users_earned%22)

> And more users...

```diff
+Et d'autres utilisateurs…
```

#### [`fof-badges.forum.my_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.my_badges%22)

> My Badges

```diff
+Mes badges
```

#### [`fof-badges.forum.nav.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.nav.badges%22)

> Badges

```diff
+Badges
```

#### [`fof-badges.forum.new_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.new_tag%22)

> NEW

```diff
+NOUVEAU
```

#### [`fof-badges.forum.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.no_badges%22)

> No badges available yet.

```diff
+Aucun badge disponible pour le moment.
```

#### [`fof-badges.forum.no_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.no_users_earned%22)

> No one has earned this badge yet. Be the first!

```diff
+Personne n'a obtenu ce badge pour le moment. Soyez le premier !
```

#### [`fof-badges.forum.notification.a_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.notification.a_badge%22)

> a badge

```diff
+un badge
```

#### [`fof-badges.forum.notification.badge_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.notification.badge_earned%22)

> You earned {badge}

```diff
+Vous avez obtenu le {badge}
```

#### [`fof-badges.forum.other_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.other_badges%22)

> Other Badges

```diff
+Autres badges
```

#### [`fof-badges.forum.owned_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.owned_badge%22)

> You own this badge

```diff
+Vous possédez ce badge
```

#### [`fof-badges.forum.toggle_category_dropdown`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.toggle_category_dropdown%22)

> Toggle category dropdown

```diff
+Afficher le menu déroulant des catégories
```

#### [`fof-badges.forum.user.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.assign_badge%22)

> Assign Badge

```diff
+Attribuer un badge
```

#### [`fof-badges.forum.user.assign_badge_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.assign_badge_title%22)

> Assign Badge to {username}

```diff
+Attribuer un badge à {username}
```

#### [`fof-badges.forum.user.assign_button`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.assign_button%22)

> Assign Badge

```diff
+Attribuer un badge
```

#### [`fof-badges.forum.user.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.assign_reason%22)

> Reason (optional)

```diff
+Motif (facultatif)
```

#### [`fof-badges.forum.user.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Ce motif apparaîtra sur le badge de l'utilisateur.
```

#### [`fof-badges.forum.user.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+Pourquoi ce badge a-t-il été décerné ?
```

#### [`fof-badges.forum.user.badge_actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.badge_actions%22)

> Badge actions

```diff
+Actions associées au badge
```

#### [`fof-badges.forum.user.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+Le badge « {badge} » a été attribué à {username} !
```

#### [`fof-badges.forum.user.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.badge_revoked%22)

> Badge "{badge}" has been revoked.

```diff
+Le badge « {badge} » a été révoqué.
```

#### [`fof-badges.forum.user.badges_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.badges_count%22)

> {count, plural, one {# Badge} other {# Badges}}

```diff
+{count, plural, one {# Badge} other {# Badges}}
```

#### [`fof-badges.forum.user.badges_tab`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.badges_tab%22)

> Badges

```diff
+Badges
```

#### [`fof-badges.forum.user.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.badges_title%22)

> {username}'s Badges

```diff
+Les badges de {username}
```

#### [`fof-badges.forum.user.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.cancel%22)

> Cancel

```diff
+Annuler
```

#### [`fof-badges.forum.user.earned_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.earned_on%22)

> Earned {date}

```diff
+Obtenu le {date}
```

#### [`fof-badges.forum.user.favorite_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.favorite_badge%22)

> Favorite badge

```diff
+Badge favori
```

#### [`fof-badges.forum.user.hidden_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.hidden_badge%22)

> Hidden from profile

```diff
+Masqué dans le profil
```

#### [`fof-badges.forum.user.hide_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.hide_badge%22)

> Hide from profile

```diff
+Masquer dans le profil
```

#### [`fof-badges.forum.user.load_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.load_more%22)

> Load More

```diff
+Charger plus
```

#### [`fof-badges.forum.user.manually_awarded`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.manually_awarded%22)

> Manually awarded

```diff
+Décerné manuellement
```

#### [`fof-badges.forum.user.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.no_badges%22)

> This user hasn't earned any badges yet.

```diff
+Cet utilisateur n'a obtenu aucun badge pour le moment.
```

#### [`fof-badges.forum.user.no_badges_available`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.no_badges_available%22)

> No badges available.

```diff
+Aucun badge disponible.
```

#### [`fof-badges.forum.user.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate%22)

> Recalculate Badges

```diff
+Recalculer les badges
```

#### [`fof-badges.forum.user.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Échec du recalcul des badges. Veuillez réessayer.
```

#### [`fof-badges.forum.user.recalculate_modal.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.all_badges%22)

> All automatic badges

```diff
+Tous les badges automatiques
```

#### [`fof-badges.forum.user.recalculate_modal.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.badge_label%22)

> Badge to recalculate

```diff
+Badge à recalculer
```

#### [`fof-badges.forum.user.recalculate_modal.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.manual%22)

> manual

```diff
+manuel
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_help%22)

> If enabled, the user will keep badges even if they no longer meet the criteria.

```diff
+Si cette option est activée, l'utilisateur conservera ses badges même s'il ne remplit plus les critères requis.
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_label%22)

> Don't revoke existing badges

```diff
+Ne pas révoquer les badges existants
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_help%22)

> Re-apply badge actions (like adding to a group) if the user already has the badge.

```diff
+Réappliquer les actions associées au badge (comme l'ajout à un groupe) si l'utilisateur possède déjà ce badge.
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_label%22)

> Re-apply actions to existing badges

```diff
+Réappliquer les actions aux badges existants
```

#### [`fof-badges.forum.user.recalculate_modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.submit%22)

> Recalculate

```diff
+Recalculer
```

#### [`fof-badges.forum.user.recalculate_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.title%22)

> Recalculate Badges

```diff
+Recalculer les badges
```

#### [`fof-badges.forum.user.recalculate_reapplied`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_reapplied%22)

> Actions re-applied for {reapplied} badges

```diff
+Actions réappliquées pour les badges {reapplied}
```

#### [`fof-badges.forum.user.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.recalculate_success%22)

> Badges recalculated! Awarded: {awarded}, Revoked: {revoked}, Re-applied: {reapplied}

```diff
+Badges recalculés ! Décerné(s) : {awarded}, Révoqué(s) : {revoked}, Réattribué(s) : {reapplied}
```

#### [`fof-badges.forum.user.remove_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.remove_favorite%22)

> Remove favorite

```diff
+Retirer des favoris
```

#### [`fof-badges.forum.user.revoke_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.revoke_badge%22)

> Revoke badge

```diff
+Révoquer le badge
```

#### [`fof-badges.forum.user.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from this user?

```diff
+Êtes-vous sûr de vouloir révoquer le « {badge} » à cet utilisateur ?
```

#### [`fof-badges.forum.user.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.revoke_error%22)

> Failed to revoke badge.

```diff
+Échec de la révocation du badge.
```

#### [`fof-badges.forum.user.select_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.select_badge%22)

> Select a badge...

```diff
+Sélectionnez un badge...
```

#### [`fof-badges.forum.user.select_badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.select_badge_label%22)

> Select Badge

```diff
+Sélectionner un badge
```

#### [`fof-badges.forum.user.set_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.set_favorite%22)

> Set as favorite

```diff
+Définir comme favori
```

#### [`fof-badges.forum.user.show_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.show_badge%22)

> Show on profile

```diff
+Afficher dans le profil
```

#### [`fof-badges.forum.user.view_all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.forum.user.view_all_badges%22)

> View all badges

```diff
+Afficher tous les badges
```

#### [`fof-badges.lib.rarity_common`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.lib.rarity_common%22)

> Common

```diff
+Commun
```

#### [`fof-badges.lib.rarity_epic`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.lib.rarity_epic%22)

> Epic

```diff
+Épique
```

#### [`fof-badges.lib.rarity_explain`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.lib.rarity_explain%22)

> {percent}% of users have this badge

```diff
+{percent}% des utilisateurs possèdent ce badge
```

#### [`fof-badges.lib.rarity_legendary`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.lib.rarity_legendary%22)

> Legendary

```diff
+Légendaire
```

#### [`fof-badges.lib.rarity_rare`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.lib.rarity_rare%22)

> Rare

```diff
+Rare
```

#### [`fof-badges.lib.rarity_uncommon`](https://weblate.rob006.net/translate/flarum2/fof-badges/fr/?q=context%3A%3D%22fof-badges.lib.rarity_uncommon%22)

> Uncommon

```diff
+Peu commun
```


### `fof-best-answer` (missing)

#### [`flarum-audit.lib.browser.discussion.best_answer_set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_set%22)

> Set {post} as best answer in {discussion}

```diff
+A sélectionné {post} comme meilleure réponse dans {discussion}
```

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/fr/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
+A désélectionné {post} comme meilleure réponse dans {discussion}
```


### `fof-follow-tags` (missing)

#### [`fof-follow-tags.admin.basics.following_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.basics.following_label%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```

#### [`fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label%22)

> Show all discussions on the Following page for guests

```diff
+Afficher toutes les discussions sur la page « Abonnements » pour les invités
```

#### [`fof-follow-tags.admin.settings.prompt_button_on_following_page_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_button_on_following_page_label%22)

> Show a "Choose tags to follow" button on the Following page

```diff
+Afficher un bouton « Choisir les étiquettes à suivre » sur la page « Abonnements »
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_help`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_help%22)

> Users who have not confirmed their choice yet will be shown a modal asking them to follow tags. The modal will keep coming back on each visit until they press "Continue to forum".
>

```diff
+Les utilisateurs qui n'ont pas encore confirmé leur choix verront s'afficher une fenêtre leur demandant de suivre des étiquettes. Cette fenêtre s'affichera à chaque visite jusqu'à ce qu'ils cliquent sur « Continuer vers le forum ».
+
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_label%22)

> Prompt new users to choose tags to follow

```diff
+Inviter les nouveaux utilisateurs à choisir des étiquettes à suivre
```

#### [`fof-follow-tags.admin.settings.prompt_tag_ids_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_ids_label%22)

> Tags to offer

```diff
+Étiquettes à proposer
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_label%22)

> Tags to offer in the prompt

```diff
+Étiquettes à proposer dans l'invite
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.all`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.all%22)

> All tags

```diff
+Toutes les étiquettes
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.list`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.list%22)

> Tags selected below

```diff
+Étiquettes sélectionnées ci-dessous
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary%22)

> First-level primary tags

```diff
+Étiquettes primaires de premier niveau
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren%22)

> All primary tags of any level

```diff
+Toutes les étiquettes primaires quel que soit leur niveau
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary%22)

> First-level primary tags and secondary tags

```diff
+Étiquettes primaires de premier niveau et étiquettes secondaires
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary%22)

> Only secondary tags

```diff
+Uniquement les étiquettes secondaires
```

#### [`fof-follow-tags.forum.prompt.choose_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.forum.prompt.choose_button%22)

> Choose tags to follow

```diff
+Sélectionnez les étiquettes à suivre
```

#### [`fof-follow-tags.forum.prompt.continue_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.forum.prompt.continue_button%22)

> Continue to forum

```diff
+Continuer vers le forum
```

#### [`fof-follow-tags.forum.prompt.later_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.forum.prompt.later_button%22)

> Remind me later

```diff
+Me le rappeler plus tard
```

#### [`fof-follow-tags.forum.prompt.modal_title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/fr/?q=context%3A%3D%22fof-follow-tags.forum.prompt.modal_title%22)

> Choose tags to follow

```diff
+Sélectionnez les étiquettes à suivre
```


### `fof-geoip` (missing)

#### [`fof-geoip.admin.settings.allow_custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_help%22)

> When enabled, users can pick a country flag to display on their posts via their profile settings. A user-selected flag is shown to everyone and takes precedence over the IP-based flag. Requires "Show country flag for each post" to be enabled.

```diff
+Lorsque cette option est activée, les utilisateurs peuvent choisir un drapeau de pays à afficher sur leurs messages via les paramètres de leur profil. Le drapeau sélectionné par l'utilisateur est visible par tous et prévaut sur le drapeau attribué en fonction de l'adresse IP. Cette fonctionnalité nécessite l'activation de l'option « Afficher le drapeau du pays pour chaque message ».
```

#### [`fof-geoip.admin.settings.allow_custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_label%22)

> Allow users to choose a custom country flag

```diff
+Autoriser les utilisateurs à choisir un drapeau de pays personnalisé
```

#### [`fof-geoip.forum.user.settings.custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_help%22)

> Choose a country flag to display on your posts. This flag is visible to everyone and is shown instead of the flag based on your IP address.

```diff
+Choisissez un drapeau de pays à afficher sur vos messages. Ce drapeau est visible par tous et remplace celui associé à votre adresse IP.
```

#### [`fof-geoip.forum.user.settings.custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_label%22)

> Custom country flag

```diff
+Drapeau du pays personnalisé
```

#### [`fof-geoip.lib.alerts.ip_copied`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.alerts.ip_copied%22)

> Copied IP Address

```diff
+Adresse IP copiée
```

#### [`fof-geoip.lib.copy_ip_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.copy_ip_label%22)

> Copy IP to clipboard

```diff
+Copier l'adresse IP dans le presse-papiers
```

#### [`fof-geoip.lib.custom_flag.none`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.custom_flag.none%22)

> No custom flag

```diff
+Aucun drapeau personnalisé
```

#### [`fof-geoip.lib.map_button_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_button_label%22)

> IP Info

```diff
+Informations sur l'adresse IP
```

#### [`fof-geoip.lib.map_modal.as`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.as%22)

> ASN

```diff
+ASN
```

#### [`fof-geoip.lib.map_modal.country_code`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.country_code%22)

> Country Code

```diff
+Code pays
```

#### [`fof-geoip.lib.map_modal.error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.error%22)

> Error

```diff
+Erreur
```

#### [`fof-geoip.lib.map_modal.ip_address`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.ip_address%22)

> IP Address

```diff
+Adresse IP
```

#### [`fof-geoip.lib.map_modal.isp`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.isp%22)

> ISP

```diff
+FAI
```

#### [`fof-geoip.lib.map_modal.mobile`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.mobile%22)

> Cellular network

```diff
+Réseau cellulaire
```

#### [`fof-geoip.lib.map_modal.not_enough_data`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.not_enough_data%22)

> Not enough data to draw a map

```diff
+Il n'y a pas assez de données pour dessiner une carte
```

#### [`fof-geoip.lib.map_modal.organization`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.organization%22)

> Organization

```diff
+Organisation
```

#### [`fof-geoip.lib.map_modal.threat_level`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_level%22)

> Threat Level

```diff
+Niveau de menace
```

#### [`fof-geoip.lib.map_modal.threat_types`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_types%22)

> Threat Types

```diff
+Types de menaces
```

#### [`fof-geoip.lib.map_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.title%22)

> IP Information

```diff
+Informations sur l'adresse IP
```

#### [`fof-geoip.lib.map_modal.zip_code`](https://weblate.rob006.net/translate/flarum2/fof-geoip/fr/?q=context%3A%3D%22fof-geoip.lib.map_modal.zip_code%22)

> Zip Code

```diff
+Code postal
```


### `fof-mailing` (missing)

#### [`fof-mailing.admin.permissions.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_all%22)

> Send emails to groups or all users

```diff
+Envoyer des e-mails aux groupes ou à tous les utilisateurs
```

#### [`fof-mailing.admin.permissions.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_individual%22)

> Send emails to individual users

```diff
+Envoyer des courriels à des utilisateurs individuels
```

#### [`fof-mailing.api.no_recipients`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.api.no_recipients%22)

> No recipient were matched

```diff
+Aucun destinataire ne correspond
```

#### [`fof-mailing.email.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.email.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.links.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.links.mail_all%22)

> Send Email

```diff
+Envoyer un courriel
```

#### [`fof-mailing.forum.links.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.links.mail_individual%22)

> Email This User

```diff
+Envoyer un courriel à cet utilisateur
```

#### [`fof-mailing.forum.modal_mail.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.modal_mail.message_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.message_label%22)

> Message

```diff
+Message
```

#### [`fof-mailing.forum.modal_mail.recipients_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_label%22)

> Recipients

```diff
+Destinataires
```

#### [`fof-mailing.forum.modal_mail.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_placeholder%22)

> Add more recipients...

```diff
+Ajouter d'autres destinataires...
```

#### [`fof-mailing.forum.modal_mail.subject_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.subject_label%22)

> Subject

```diff
+Sujet
```

#### [`fof-mailing.forum.modal_mail.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.submit_button%22)

> Send

```diff
+Envoyer
```

#### [`fof-mailing.forum.modal_mail.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_mail.title_text%22)

> Compose Mail

```diff
+Rédiger un courriel
```

#### [`fof-mailing.forum.modal_sent.on_its_way`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_sent.on_its_way%22)

> High Five! Your mail is on its way to {recipientsCount} recipients!

```diff
+Tope là ! Votre courriel est en route vers {recipientsCount} destinataires !
```

#### [`fof-mailing.forum.modal_sent.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.modal_sent.title_text%22)

> Mail Sent!

```diff
+Courriel envoyé !
```

#### [`fof-mailing.forum.recipient_kinds.email`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.email%22)

> Email

```diff
+Courriel
```

#### [`fof-mailing.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.group%22)

> Group

```diff
+Groupe
```

#### [`fof-mailing.forum.recipient_kinds.user`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.user%22)

> User

```diff
+Utilisateur
```

#### [`fof-mailing.ref.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/fr/?q=context%3A%3D%22fof-mailing.ref.default_subject%22)

> Message from forum administration

```diff
+Message de l'administration du forum
```


### `fof-masquerade` (missing)

#### [`flarum-audit.lib.browser.masquerade.profile_updated`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/fr/?q=context%3A%3D%22flarum-audit.lib.browser.masquerade.profile_updated%22)

> Updated {username}'s profile fields

```diff
+A mis à jour les champs du profil de {username}
```


### `fof-photoswipe` (missing)

#### [`fof-photoswipe.forum.arrow_next_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fr/?q=context%3A%3D%22fof-photoswipe.forum.arrow_next_title%22)

> Next

```diff
+Suivant
```

#### [`fof-photoswipe.forum.arrow_prev_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fr/?q=context%3A%3D%22fof-photoswipe.forum.arrow_prev_title%22)

> Previous

```diff
+Précédent
```

#### [`fof-photoswipe.forum.close_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fr/?q=context%3A%3D%22fof-photoswipe.forum.close_title%22)

> Close

```diff
+Fermer
```

#### [`fof-photoswipe.forum.error_msg`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fr/?q=context%3A%3D%22fof-photoswipe.forum.error_msg%22)

> The image cannot be loaded

```diff
+L'image ne peut pas être chargée
```

#### [`fof-photoswipe.forum.zoom_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/fr/?q=context%3A%3D%22fof-photoswipe.forum.zoom_title%22)

> Zoom

```diff
+Zoom
```


### `fof-polls` (missing)

#### [`fof-polls.forum.compose.draft_saved`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.draft_saved%22)

> Draft saved

```diff
+Brouillon enregistré
```

#### [`fof-polls.forum.compose.publish`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.publish%22)

> Publish

```diff
+Publier
```

#### [`fof-polls.forum.compose.save_as_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.save_as_draft%22)

> Save as draft

```diff
+Enregistrer comme brouillon
```

#### [`fof-polls.forum.compose.schedule`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.schedule%22)

> Schedule

```diff
+Planifier
```

#### [`fof-polls.forum.compose.schedule_datetime_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.schedule_datetime_label%22)

> Publish at

```diff
+Publier sur
```

#### [`fof-polls.forum.compose.schedule_publication`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication%22)

> Schedule publication

```diff
+Planifier la publication
```

#### [`fof-polls.forum.compose.schedule_publication_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication_edit%22)

> Edit scheduled publication

```diff
+Modifier la publication planifiée
```

#### [`fof-polls.forum.compose.schedule_submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.schedule_submit%22)

> Schedule

```diff
+Planifier
```

#### [`fof-polls.forum.compose.submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.submit%22)

> Submit

```diff
+Envoyer
```

#### [`fof-polls.forum.compose.update_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.compose.update_draft%22)

> Update draft

```diff
+Mettre à jour le brouillon
```

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
+{count, plural, one {# le champs est vide — veuillez la remplir ou la supprimer.} other {# les champs sont vides — veuillez les remplir ou les supprimer.}}
```

#### [`fof-polls.forum.poll.draft_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll.draft_label%22)

> Draft

```diff
+Brouillon
```

#### [`fof-polls.forum.poll.scheduled_error_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_error_tooltip%22)

> This scheduled publication failed. Open the poll to see why.

```diff
+La planification de cette publication a échoué. Ouvrez le sondage pour découvrir pourquoi.
```

#### [`fof-polls.forum.poll.scheduled_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_label%22)

> Scheduled for {date}

```diff
+Planifié pour {date}
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_label%22)

> Cancel scheduled publication

```diff
+Annuler la publication planifiée
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_success%22)

> Scheduled publication cancelled.

```diff
+La publication planifiée a été annulée.
```

#### [`fof-polls.forum.poll_controls.edit_schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.edit_schedule_publish_label%22)

> Edit scheduled publication

```diff
+Modifier la publication planifiée
```

#### [`fof-polls.forum.poll_controls.publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_label%22)

> Publish now

```diff
+Publier maintenant
```

#### [`fof-polls.forum.poll_controls.publish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_success%22)

> Poll published.

```diff
+Sondage publié.
```

#### [`fof-polls.forum.poll_controls.schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.schedule_publish_label%22)

> Schedule publication

```diff
+Planifier la publication
```

#### [`fof-polls.forum.poll_controls.unpublish_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_confirmation%22)

> Move this poll back to draft? It will disappear from the showcase.

```diff
+Remettre ce sondage en brouillon ? Il disparaîtra de la page d'accueil.
```

#### [`fof-polls.forum.poll_controls.unpublish_error_has_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_error_has_votes%22)

> Cannot unpublish — the poll already has votes. Delete it instead.

```diff
+Impossible de désactiver la publication — le sondage a déjà recueilli des votes. Supprimez-le plutôt.
```

#### [`fof-polls.forum.poll_controls.unpublish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_label%22)

> Move back to draft

```diff
+Remettre en brouillon
```

#### [`fof-polls.forum.poll_controls.unpublish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_success%22)

> Poll moved to draft.

```diff
+Sondage remis en brouillon.
```

#### [`fof-polls.forum.polls_list.status_filter.all`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.all%22)

> All

```diff
+Tous
```

#### [`fof-polls.forum.polls_list.status_filter.draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.draft%22)

> Drafts

```diff
+Brouillons
```

#### [`fof-polls.forum.polls_list.status_filter.published`](https://weblate.rob006.net/translate/flarum2/fof-polls/fr/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.published%22)

> Published

```diff
+Publiés
```


### `fof-seo` (missing)

#### [`fof-seo.admin.common.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.common.close%22)

> Close

```diff
+Fermer
```

#### [`fof-seo.admin.common.learn_more`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.common.learn_more%22)

> Learn more

```diff
+En savoir plus
```

#### [`fof-seo.admin.common.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.common.save_changes%22)

> Save changes

```diff
+Enregistrer les modifications
```

#### [`fof-seo.admin.dashboard.widget.cta`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.cta%22)

> Do the health-check!

```diff
+Faites le bilan de santé !
```

#### [`fof-seo.admin.dashboard.widget.review_prompt`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.review_prompt%22)

> It's time to review your SEO settings!

```diff
+Il est temps de revoir vos paramètres SEO !
```

#### [`fof-seo.admin.header.health_check`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.health_check%22)

> Health check

```diff
+Bilan de santé
```

#### [`fof-seo.admin.header.search_engines_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.search_engines_info%22)

> Search engine information

```diff
+Informations sur les moteurs de recherche
```

#### [`fof-seo.admin.header.seo_settings`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.seo_settings%22)

> SEO settings

```diff
+Paramètres SEO
```

#### [`fof-seo.admin.header.setup_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.setup_ssl%22)

> Set up SSL

```diff
+Configurer SSL
```

#### [`fof-seo.admin.header.sitemap_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.sitemap_info%22)

> Sitemap information

```diff
+Informations sur le plan du site
```

#### [`fof-seo.admin.header.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.title%22)

> Search Engine Optimization

```diff
+Optimisation pour les moteurs de recherche (SEO)
```

#### [`fof-seo.admin.header.tools`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.header.tools%22)

> Tools

```diff
+Outils
```

#### [`fof-seo.admin.modals.crawl_post.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.intro%22)

> &lt;b&gt;Read this dialog carefully.&lt;/b&gt; This function will only be executed on a page refresh on a discussion. You can always change this option later.

```diff
+<b>Lisez attentivement cette boîte de dialogue.</b> Cette fonction ne s'exécutera qu'au moment de l'actualisation de la page d'une discussion. Vous pourrez toujours modifier cette option ultérieurement.
```

#### [`fof-seo.admin.modals.crawl_post.mode_all_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_all_title%22)

> Index all posts in a discussion (setting enabled)

```diff
+Indexer tous les messages d'une discussion (option activée)
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_help%22)

> Search engine will only show the main post in the search results. It won't affect loading speed when you navigate to it via forum links.

```diff
+Le moteur de recherche affichera seulement le message principal dans les résultats de recherche. Cela n'aura aucune incidence sur la vitesse de chargement lorsque vous y accéderez via les liens du forum.
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_title%22)

> Only index the main post (default)

```diff
+Indexer uniquement le message principal (par défaut)
```

#### [`fof-seo.admin.modals.crawl_post.question`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.question%22)

> Do you want to enable this feature?

```diff
+Voulez-vous activer cette fonctionnalité ?
```

#### [`fof-seo.admin.modals.crawl_post.switch_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.switch_label%22)

> Crawl all posts (it's slower on page refresh, but search results will be better)

```diff
+Explorer tous les messages (le rafraîchissement de la page est plus lent, mais les résultats de recherche seront meilleurs)
```

#### [`fof-seo.admin.modals.crawl_post.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.title%22)

> Post crawl settings

```diff
+Paramètres d'indexation des messages
```

#### [`fof-seo.admin.modals.dofollow.add_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.add_placeholder%22)

> Allow a domain

```diff
+Autoriser un domaine
```

#### [`fof-seo.admin.modals.dofollow.default_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.default_note%22)

> The domain you use for your Flarum instance is added to the list by default.

```diff
+Le domaine que vous utilisez pour votre instance Flarum est ajouté à la liste par défaut.
```

#### [`fof-seo.admin.modals.dofollow.duplicate_error`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.duplicate_error%22)

> This domain is already present in your do-follow list.

```diff
+Ce domaine figure déjà dans votre liste des liens « do-follow ».
```

#### [`fof-seo.admin.modals.dofollow.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.intro%22)

> Enter the &lt;b&gt;hostnames&lt;/b&gt; of the domains you want to add to the do-follow list.

```diff
+Saisissez les <b>noms d'hôte</b> des domaines que vous souhaitez ajouter à la liste des liens « do-follow ».
```

#### [`fof-seo.admin.modals.dofollow.learn_more_line`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.learn_more_line%22)

> &lt;a&gt;Learn more&lt;/a&gt; about the do-follow list.

```diff
+<a>En savoir plus</a> sur la liste des liens « do-follow ».
```

#### [`fof-seo.admin.modals.dofollow.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.title%22)

> Do-follow list

```diff
+Liste des liens « do-follow »
```

#### [`fof-seo.admin.pages.health.checks.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.button%22)

> Review post settings

```diff
+Vérifier les paramètres de message
```

#### [`fof-seo.admin.pages.health.checks.crawl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.label%22)

> Review discussion post crawl settings

```diff
+Vérifier les paramètres d'indexation des messages de discussion
```

#### [`fof-seo.admin.pages.health.checks.crawl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.reason%22)

> You will need to review this setting to pass.

```diff
+Vous devrez vérifier ce paramètre pour valider.
```

#### [`fof-seo.admin.pages.health.checks.description.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.button%22)

> Update description

```diff
+Mettre à jour la description
```

#### [`fof-seo.admin.pages.health.checks.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.label%22)

> Checks whether your forum has a description

```diff
+Vérifie si votre forum comporte une description
```

#### [`fof-seo.admin.pages.health.checks.description.reason_default`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_default%22)

> You did not change the default forum description after installation!

```diff
+Vous n'avez pas modifié la description du forum par défaut après l'installation !
```

#### [`fof-seo.admin.pages.health.checks.description.reason_missing`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_missing%22)

> You did not set up a forum description yet!

```diff
+Vous n'avez pas encore rédigé la description du forum !
```

#### [`fof-seo.admin.pages.health.checks.description.reason_too_short`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_too_short%22)

> Your forum description is lower then 20 characters. Please expand it for better search results.

```diff
+Votre description du forum comporte moins de 20 caractères. Veuillez la développer pour obtenir de meilleurs résultats de recherche.
```

#### [`fof-seo.admin.pages.health.checks.keywords.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.button%22)

> Update keywords

```diff
+Mettre à jour les mots-clés
```

#### [`fof-seo.admin.pages.health.checks.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.label%22)

> Checks whether your forum has keywords set up

```diff
+Vérifie si votre forum comporte des mots-clés
```

#### [`fof-seo.admin.pages.health.checks.keywords.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.reason%22)

> You did not set up a forum keywords yet!

```diff
+Vous n'avez pas encore défini de mots-clés pour le forum !
```

#### [`fof-seo.admin.pages.health.checks.meta_tags.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.meta_tags.label%22)

> Checks whether your forum has meta tags available (generated by this plugin)

```diff
+Vérifie si votre forum comporte des balises meta (générées par ce plugin)
```

#### [`fof-seo.admin.pages.health.checks.review.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.button%22)

> Ok! I reviewed them!

```diff
+OK ! Je les ai passés en revue !
```

#### [`fof-seo.admin.pages.health.checks.review.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.label%22)

> Review your SEO settings every two months. Next review needed on {date}

```diff
+Vérifiez vos paramètres SEO tous les deux mois. Prochaine vérification prévue le {date}
```

#### [`fof-seo.admin.pages.health.checks.review.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.reason%22)

> It is time to re-review your SEO settings.

```diff
+Il est temps de revoir vos paramètres SEO.
```

#### [`fof-seo.admin.pages.health.checks.robots.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.button%22)

> Read more about adding a robots.txt

```diff
+En savoir plus sur la création d'un fichier robots.txt
```

#### [`fof-seo.admin.pages.health.checks.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.label%22)

> Checks whether your forum has a robots.txt available

```diff
+Vérifie si votre forum dispose d'un fichier robots.txt
```

#### [`fof-seo.admin.pages.health.checks.robots.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.reason%22)

> Your robots.txt is provided by the FriendsOfFlarum Sitemap extension. Install and enable it to make a robots.txt available to search engines.

```diff
+Votre fichier robots.txt est généré par l'extension « FriendsOfFlarum Sitemap ». Installez-la et activez-la pour mettre un fichier robots.txt à la disposition des moteurs de recherche.
```

#### [`fof-seo.admin.pages.health.checks.search_engines.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.button%22)

> More information

```diff
+Plus d'informations
```

#### [`fof-seo.admin.pages.health.checks.search_engines.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.label%22)

> Register your forum to search engines

```diff
+Enregistrez votre forum auprès des moteurs de recherche
```

#### [`fof-seo.admin.pages.health.checks.search_engines.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.reason%22)

> You will need to review this to pass.

```diff
+Vous devrez vérifier ceci pour valider.
```

#### [`fof-seo.admin.pages.health.checks.sitemap.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.button%22)

> Read more about adding a sitemap

```diff
+En savoir plus sur la création d'un plan du site
```

#### [`fof-seo.admin.pages.health.checks.sitemap.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.label%22)

> Checks whether your forum has a sitemap available

```diff
+Vérifie si votre forum dispose d'un plan du site
```

#### [`fof-seo.admin.pages.health.checks.sitemap.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.reason%22)

> It is highly recommended to install the FriendsOfFlarum Sitemap extension!

```diff
+Il est fortement recommandé d'installer l'extension « FriendsOfFlarum Sitemap » !
```

#### [`fof-seo.admin.pages.health.checks.social_media.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.button%22)

> Update image

```diff
+Mettre à jour l'image
```

#### [`fof-seo.admin.pages.health.checks.social_media.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.label%22)

> Set Up a social media image

```diff
+Configurer une image pour les réseaux sociaux
```

#### [`fof-seo.admin.pages.health.checks.social_media.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.reason%22)

> You did not set a social media image for your forum. It is recommended to set one. Your favicon will now be used as preview on social media.

```diff
+Vous n'avez pas défini d'image pour votre forum destinée aux réseaux sociaux. Il est recommandé d'en définir une. Votre favicon sera désormais utilisé comme aperçu sur les réseaux sociaux.
```

#### [`fof-seo.admin.pages.health.checks.ssl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.button%22)

> How to set up SSL

```diff
+Comment configurer SSL
```

#### [`fof-seo.admin.pages.health.checks.ssl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.label%22)

> Checks whether your site has a secure connection available (SSL/TLS)

```diff
+Vérifie si votre site dispose d'une connexion sécurisée (SSL/TLS)
```

#### [`fof-seo.admin.pages.health.checks.ssl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.reason%22)

> Your forum does not force a SSL/TLS connection (a secure connection to your website). Most search engines won't index your website or lower your ranking if you have no secure connection available.

```diff
+Votre forum n'impose pas de connexion SSL/TLS (une connexion sécurisée à votre site web). La plupart des moteurs de recherche n'indexeront pas votre site web ou lui attribueront un classement moins favorable si aucune connexion sécurisée n'est disponible.
```

#### [`fof-seo.admin.pages.health.default_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.default_button%22)

> Update setting

```diff
+Mettre à jour les paramètres
```

#### [`fof-seo.admin.pages.health.legend`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.legend%22)

> For optimal search engine results, make sure all checks are green.

```diff
+Pour obtenir des résultats optimaux sur les moteurs de recherche, assurez-vous que toutes les cases soient cochées en vert.
```

#### [`fof-seo.admin.pages.health.status.passed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.status.passed%22)

> All set!

```diff
+Tout est prêt !
```

#### [`fof-seo.admin.pages.health.status.warning`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.status.warning%22)

> Warning!

```diff
+Attention !
```

#### [`fof-seo.admin.pages.health.table.status`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.table.status%22)

> Status

```diff
+Statut
```

#### [`fof-seo.admin.pages.health.table.technique`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.health.table.technique%22)

> Technique

```diff
+Technique
```

#### [`fof-seo.admin.pages.search_engines.bing_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_heading%22)

> Add your website to the Bing search results

```diff
+Ajoutez votre site web aux résultats de recherche Bing
```

#### [`fof-seo.admin.pages.search_engines.bing_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_sitemap%22)

> Don't forget to configure your sitemap URL. After you verified your website you're all set and Bing will now index your website.

```diff
+N'oubliez pas de configurer l'URL de votre plan du site. Une fois votre site web vérifié, tout est prêt et Bing va maintenant l'indexer.
```

#### [`fof-seo.admin.pages.search_engines.bing_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_visit%22)

> If you want to add your website to the Bing search results, visit the {link} and complete the given steps. Not all fields are required.

```diff
+Si vous souhaitez ajouter votre site web aux résultats de recherche Bing, rendez-vous sur {link} et suivez les étapes indiquées. Tous les champs ne sont pas obligatoires.
```

#### [`fof-seo.admin.pages.search_engines.confirm_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.confirm_button%22)

> I have read this

```diff
+J'ai lu
```

#### [`fof-seo.admin.pages.search_engines.google_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_heading%22)

> Add your website to the Google search results

```diff
+Ajoutez votre site web aux résultats de recherche Google
```

#### [`fof-seo.admin.pages.search_engines.google_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_sitemap%22)

> When you completed the registration in the Google Search Console, visit the &lt;b&gt;Sitemaps&lt;/b&gt; page. Pass your &lt;b&gt;sitemap.xml&lt;/b&gt; to Google. Make sure that Google can crawl your sitemap and will keep doing this.

```diff
+Lorsque vous aurez terminé votre inscription à Google Search Console, rendez-vous sur la page <b>Plans du site</b>. Transmettez votre <b>sitemap.xml</b> à Google. Assurez-vous que Google peut explorer votre plan du site et qu'il continuera à le faire.
```

#### [`fof-seo.admin.pages.search_engines.google_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_visit%22)

> If you want to add your website to the Google search results, visit the {link}. You'll need to add your website and verify that you're the owner of the associated domain name.

```diff
+Si vous souhaitez ajouter votre site web aux résultats de recherche Google, rendez-vous sur {link}. Vous devrez ajouter votre site web et confirmer que vous êtes bien le propriétaire du nom de domaine associé.
```

#### [`fof-seo.admin.pages.search_engines.google_www`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_www%22)

> When you enter your domain you need to answer the following question for yourself: Do you want to use the 'www' sub-domain in the search results? You can &lt;strong&gt;not&lt;/strong&gt; change this later. Registering your domain in the Google Search Console multiple times won't result in a better ranking.

```diff
+Lorsque vous saisissez votre nom de domaine, vous devez vous poser la question suivante : souhaitez-vous utiliser le sous-domaine « www » dans les résultats de recherche ? Vous ne pourrez <strong>pas</strong> modifier ce paramètre ultérieurement. Enregistrer votre nom de domaine plusieurs fois dans Google Search Console n'améliorera pas votre classement.
```

#### [`fof-seo.admin.pages.search_engines.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.heading%22)

> Submit your website to Search Engines

```diff
+Soumettez votre site web aux moteurs de recherche
```

#### [`fof-seo.admin.pages.search_engines.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.intro%22)

> It is good practice to let Search Engines know your site is exists. This page will guide you in doing this succesfully.

```diff
+Il est recommandé de signaler l'existence de votre site aux moteurs de recherche. Cette page vous guidera pour y parvenir avec succès.
```

#### [`fof-seo.admin.pages.search_engines.sitemap_tip`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.sitemap_tip%22)

> It is recommended to have a sitemap ready before completing this guide. If you don't have a sitemap yet, &lt;a&gt;click here to read more about them&lt;/a&gt;.

```diff
+Il est recommandé de disposer d'un plan du site avant de suivre ce guide. Si vous n'avez pas encore un plan du site, <a>cliquez ici pour en savoir plus à ce sujet</a>.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_body%22)

> If you want to add your website to the Yahoo search results, finish your Bing search results registration. Yahoo will use that data.

```diff
+Si vous souhaitez ajouter votre site web aux résultats de recherche Yahoo, veuillez finaliser votre inscription aux résultats de recherche Bing. Yahoo utilisera ces données.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_heading%22)

> Add your website to the Yahoo search results

```diff
+Ajoutez votre site web aux résultats de recherche Yahoo
```

#### [`fof-seo.admin.pages.search_engines.yandex_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_heading%22)

> Add your website to the Yandex search results

```diff
+Ajoutez votre site web aux résultats de recherche Yandex
```

#### [`fof-seo.admin.pages.search_engines.yandex_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_sitemap%22)

> Don't forget to configure the sitemap in the Yandex.Webmaster.

```diff
+N'oubliez pas de configurer le plan du site dans Yandex.Webmaster.
```

#### [`fof-seo.admin.pages.search_engines.yandex_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_visit%22)

> If you want to add your website to the Yandex search results, visit the {link} and follow the given steps.

```diff
+Si vous souhaitez ajouter votre site web aux résultats de recherche Yandex, rendez-vous sur {link} et suivez les étapes indiquées.
```

#### [`fof-seo.admin.pages.sitemap.generated_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.generated_note%22)

> The sitemap file is automatically generated and does not need any maintenance.

```diff
+Le fichier du plan du site est généré automatiquement et ne nécessite aucune maintenance.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_body%22)

> In that case, activate it by clicking the extension in the sidebar at the left . Then this warning will disappear.

```diff
+Dans ce cas, activez-la en cliquant sur l'extension dans la barre latérale de gauche. Cet avertissement disparaîtra alors.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_heading%22)

> I just installed the extension

```diff
+Je viens d'installer l'extension
```

#### [`fof-seo.admin.pages.sitemap.robots_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_body%22)

> The same extension also generates a &lt;b&gt;robots.txt&lt;/b&gt; for your forum. This file tells search engines which areas they may crawl and points them to your sitemap, so installing it takes care of both files at once — there is nothing extra to configure.

```diff
+Cette même extension génère également un fichier <b>robots.txt</b> pour votre forum. Ce fichier indique aux moteurs de recherche les sections qu'ils sont autorisés à explorer et les redirige vers votre plan du site ; son installation permet donc de gérer ces deux fichiers en même temps — aucune configuration supplémentaire n’est nécessaire.
```

#### [`fof-seo.admin.pages.sitemap.robots_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_heading%22)

> What about robots.txt?

```diff
+Qu'en est-il du fichier robots.txt ?
```

#### [`fof-seo.admin.pages.sitemap.which_extension_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_body%22)

> {link} is the suggested extension to install for Flarum. We strongly recommend you to install and activate this extension.

```diff
+{link} est l'extension recommandée à installer pour Flarum. Nous vous recommandons vivement de l'installer et de l'activer.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_details`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_details%22)

> This extension will make sure crawlers will find your forum &lt;b&gt;discussions&lt;/b&gt;, &lt;b&gt;tags&lt;/b&gt; (when extension is enabled) and &lt;b&gt;Pages&lt;/b&gt; extension (when extension is installed and enabled). It will automatically make an sitemap.xml available.

```diff
+Cette extension permettra aux robots d'indexation de trouver les <b>discussions</b>, les <b>étiquettes</b> (lorsque l'extension est activée) et les <b>Pages</b> de votre forum (lorsque l'extension est installée et activée). Elle mettra automatiquement à disposition un fichier sitemap.xml.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_heading%22)

> What extension should I install?

```diff
+Quelle extension dois-je installer ?
```

#### [`fof-seo.admin.pages.sitemap.why_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_body%22)

> A sitemap is a XML file with a list of all the available pages on your website. It will be used by crawlers and search engines to find pages on your website.

```diff
+Un plan du site est un fichier XML contenant la liste de toutes les pages disponibles sur votre site web. Il sera utilisé par les robots d'indexation et les moteurs de recherche pour trouver les pages de votre site web.
```

#### [`fof-seo.admin.pages.sitemap.why_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_heading%22)

> Why should you use a sitemap?

```diff
+Pourquoi utiliser un plan du site ?
```

#### [`fof-seo.admin.pages.ssl.added_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.added_heading%22)

> Okay, I added SSL!

```diff
+OK, j'ai ajouté le certificat SSL !
```

#### [`fof-seo.admin.pages.ssl.how_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_body%22)

> For people who are using a webhosting, the most common way is to enter the webhosting panel, go to the hosting-settings of your website and click SSL. You can follow the steps to add SSL to your website. The most webhosting companies nowadays are supporting the popular certificate issuer {link}.

```diff
+Pour les utilisateurs d'un hébergement web, la méthode la plus courante consiste à se connecter au panneau d'administration de l'hébergement, à accéder aux paramètres d'hébergement de votre site web, puis à cliquer sur « SSL ». Vous pouvez ensuite suivre les étapes indiquées pour ajouter un certificat SSL à votre site web. La plupart des hébergeurs prennent aujourd'hui en charge l'émetteur de certificats populaire {link}.
```

#### [`fof-seo.admin.pages.ssl.how_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_heading%22)

> How to add SSL to your website?

```diff
+Comment ajouter un certificat SSL à votre site web ?
```

#### [`fof-seo.admin.pages.ssl.intro_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_body%22)

> Safety and privacy awareness on the web is on the rise. &lt;b&gt;Almost every&lt;/b&gt; developer/website owner want their website safe to use for their visitors so they won't need to be afraid that their data will be compromised by hackers or website-impersonators.

```diff
+La sensibilisation à la sécurité et à la protection des données sur Internet ne cesse de croître. <b>Presque tous les</b> développeurs et propriétaires de sites web souhaitent que leur site soit sécurisé pour leurs visiteurs, afin que ceux-ci n'aient pas à craindre que leurs données soient compromises par des pirates informatiques ou des usurpateurs d'identité.
```

#### [`fof-seo.admin.pages.ssl.intro_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_heading%22)

> Why do I need an secure connection?

```diff
+Pourquoi ai-je besoin d'une connexion sécurisée ?
```

#### [`fof-seo.admin.pages.ssl.no_ssl_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_body%22)

> In that case, you can uninstall this extension as search engines &lt;b&gt;won't index your forum&lt;/b&gt; or rank them far below other sites due safety reasons.

```diff
+Dans ce cas, vous pouvez désinstaller cette extension, car les moteurs de recherche <b> n'indexeront pas votre forum </b> ou le classeront bien en dessous des autres sites pour des raisons de sécurité.
```

#### [`fof-seo.admin.pages.ssl.no_ssl_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_heading%22)

> What if I do not want to add SSL?

```diff
+Et si je ne souhaite pas ajouter un certificat SSL ?
```

#### [`fof-seo.admin.pages.ssl.rankings_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body%22)

> When you do not have a secure connection to your website, search engines will rank your site much lower then other sites, or even won't index it.

```diff
+Lorsque vous ne disposez pas d'une connexion sécurisée vers votre site web, les moteurs de recherche classeront votre site bien plus bas que les autres, voire ne l'indexeront pas.
```

#### [`fof-seo.admin.pages.ssl.rankings_body_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body_ssl%22)

> When you have SSL available, your website will get an higher rank and will be indexed.

```diff
+Lorsque vous disposez d'un certificat SSL, votre site web bénéficiera d'un meilleur classement et sera indexé.
```

#### [`fof-seo.admin.pages.ssl.rankings_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_heading%22)

> Search engines {icon} secure connections

```diff
+Moteurs de recherche {icon} connexions sécurisées
```

#### [`fof-seo.admin.pages.ssl.what_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_body%22)

> The most people know &lt;b&gt;https&lt;/b&gt; that's used for secure connections as SSL: &lt;i&gt;Secure Sockets Layer&lt;/i&gt;. Officially it's called TLS: &lt;i&gt;Transport Layer Security&lt;/i&gt;. This method is used to create a secure connection to your webserver what will prevent attackers or other webservers to impersonate your website and keep your visitors safe. The SSL connection will be broken if that happens and the visitors browsers will warning the user that's it's not trusted.

```diff
+La plupart des gens connaissent <b>https</b>, utilisé pour les connexions sécurisées sous le nom de SSL : <i>Secure Sockets Layer</i>. Officiellement, son nom est TLS : <i>Transport Layer Security</i>. Cette méthode est utilisée pour établir une connexion sécurisée avec votre serveur web, ce qui empêchera les pirates ou d'autres serveurs web de se faire passer pour votre site web et garantira la sécurité de vos visiteurs. Si cela se produit, la connexion SSL sera interrompue et les navigateurs des visiteurs afficheront un message d'avertissement indiquant que le site n'est pas fiable.
```

#### [`fof-seo.admin.pages.ssl.what_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_heading%22)

> What is SSL or TLS?

```diff
+Qu'est-ce que SSL ou TLS ?
```

#### [`fof-seo.admin.permissions.category_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.permissions.category_label%22)

> SEO

```diff
+SEO
```

#### [`fof-seo.admin.permissions.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.permissions.configure_seo%22)

> Allow configuring SEO

```diff
+Autoriser la configuration du SEO
```

#### [`fof-seo.admin.settings.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.crawl.button%22)

> Setup post crawl settings

```diff
+Configurer les paramètres d'indexation des messages
```

#### [`fof-seo.admin.settings.crawl.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.crawl.heading%22)

> Discussion post crawl settings

```diff
+Paramètres d’indexation des messages de discussion
```

#### [`fof-seo.admin.settings.crawl.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.crawl.help%22)

> This is an important setting about crawling your discussion posts in search results.

```diff
+Il s'agit d'un paramètre important concernant l'exploration de vos messages de discussion dans les résultats de recherche.
```

#### [`fof-seo.admin.settings.indexing.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.indexing.heading%22)

> Indexing controls

```diff
+Contrôles de l'indexation
```

#### [`fof-seo.admin.settings.indexing.profiles_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_help%22)

> When enabled, user profile pages emit a 'noindex' meta tag so they are kept out of search results. Links on the page are still followed, so crawlers can still reach the content they point to.

```diff
+Lorsque cette option est activée, les pages de profil utilisateur émettent une balise meta « noindex » afin qu'elles n'apparaissent pas dans les résultats de recherche. Les liens présents sur la page sont toutefois suivis, ce qui permet aux robots d'indexation d'accéder au contenu vers lequel ils renvoient.
```

#### [`fof-seo.admin.settings.indexing.profiles_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_label%22)

> De-index profile pages

```diff
+Désindexer les pages de profil
```

#### [`fof-seo.admin.settings.indexing.tags_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_button%22)

> Select tags

```diff
+Sélectionnez les étiquettes
```

#### [`fof-seo.admin.settings.indexing.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_help%22)

> Discussions in the selected tags (and those tags' own listing pages) will be kept out of search results with a 'noindex' meta tag. Links are still followed. Selecting a parent tag also covers its child tags.

```diff
+Les discussions dans les étiquettes sélectionnées (ainsi que les pages de ces étiquettes) seront exclues des résultats de recherche grâce à la balise meta « noindex ». Les liens continuent toutefois d'être suivis. La sélection d'une étiquette parente couvre également ses étiquettes enfants.
```

#### [`fof-seo.admin.settings.indexing.tags_none_selected`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_none_selected%22)

> No tags excluded from indexing.

```diff
+Aucune étiquette n'est exclue de l'indexation.
```

#### [`fof-seo.admin.settings.info.maintain`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.info.maintain%22)

> Check all your settings when you first setup this extensions. Maintain them to get the best search results.

```diff
+Vérifiez tous vos paramètres lors de la première configuration de cette extension. Maintenez-les à jour pour obtenir les meilleurs résultats de recherche.
```

#### [`fof-seo.admin.settings.info.overview`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.info.overview%22)

> This page contains some other settings from around the admin area. However, it's good to have a good overview about these settings. Do not forget to do the SEO check.

```diff
+Cette page contient d'autres paramètres issus de l'espace d'administration. Il est toutefois utile d'avoir une bonne vue d'ensemble de ces paramètres. N'oubliez pas d'effectuer la vérification SEO.
```

#### [`fof-seo.admin.settings.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Remarque : les mots-clés doivent être séparés par une virgule.
```

#### [`fof-seo.admin.settings.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Exemple : flarum, développement web, forum, pommes, sécurité
```

#### [`fof-seo.admin.settings.keywords.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.keywords.heading%22)

> Forum keywords

```diff
+Mots-clés du forum
```

#### [`fof-seo.admin.settings.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.keywords.help%22)

> Enter one or more keywords that describes your forum.

```diff
+Saisissez un ou plusieurs mots-clés qui décrivent votre forum.
```

#### [`fof-seo.admin.settings.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.keywords.placeholder%22)

> Add a few keywords

```diff
+Ajouter quelques mots-clés
```

#### [`fof-seo.admin.settings.new_tab.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.heading%22)

> Open external links in new tab

```diff
+Ouvrir les liens externes dans un nouvel onglet
```

#### [`fof-seo.admin.settings.new_tab.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.help%22)

> This extension will also make sure that external links (to other domains) open in a new tab. Currently it is not possible to disable this setting.

```diff
+Cette extension garantira également que les liens externes (vers d'autres domaines) s'ouvrent dans un nouvel onglet. Pour l'instant, il n'est pas possible de désactiver ce paramètre.
```

#### [`fof-seo.admin.settings.nofollow.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.button%22)

> Open domain do-follow list

```diff
+Ouvrir la liste des domaines « do-follow »
```

#### [`fof-seo.admin.settings.nofollow.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.heading%22)

> No-follow links

```diff
+Liens « no-follow »
```

#### [`fof-seo.admin.settings.nofollow.help_dofollow`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.help_dofollow%22)

> With this setting you are able to add domains to the 'do-follow' list. For example, you can add &lt;i&gt;flarum.org&lt;/i&gt; to make sure links to this website do not receive a 'nofollow' attribute.

```diff
+Ce paramètre vous permet d'ajouter des domaines à la liste « do-follow ». Par exemple, vous pouvez ajouter <i>flarum.org</i> pour vous assurer que les liens vers ce site web ne se voient pas attribuer l'attribut « nofollow ».
```

#### [`fof-seo.admin.settings.social_media_image.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.heading%22)

> Social media image

```diff
+Image destinée aux réseaux sociaux
```

#### [`fof-seo.admin.settings.social_media_image.help_size`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_size%22)

> Expecting a square image. Recommended size is 1200x1200 pixels. Otherwise use a landscape image, recommended size is 1200x630.

```diff
+Une image carrée est attendue. La taille recommandée est de 1200 × 1200 pixels. Sinon, veuillez utiliser une image en format paysage ; la taille recommandée est de 1200 × 630 pixels.
```

#### [`fof-seo.admin.settings.social_media_image.help_usage`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_usage%22)

> This image will be used by Social Media when a user shares a page on your website (Facebook, X (formerly Twitter), Reddit).

```diff
+Cette image sera utilisée sur les réseaux sociaux lorsqu'un utilisateur partagera une page de votre site web (Facebook, X (anciennement Twitter), Reddit).
```

#### [`fof-seo.admin.settings.twitter_card.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.heading%22)

> X (formerly Twitter) card size

```diff
+Taille de la carte X (anciennement Twitter)
```

#### [`fof-seo.admin.settings.twitter_card.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.help%22)

> When your forum is shared on X (formerly Twitter), it will have an image (if a social media image has been set up). This can be a big card with a big image, or a small card (summary) with a smaller image.

```diff
+Lorsque votre forum est partagé sur X (anciennement Twitter), il affichera une image (si une image a été configurée pour les réseaux sociaux). Il peut s'agir d'une grande carte avec une grande image, ou d'une petite carte (résumé) avec une image plus petite.
```

#### [`fof-seo.admin.settings.twitter_card.option_large`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_large%22)

> Large card (large image)

```diff
+Carte Résumé (avec une grande image)
```

#### [`fof-seo.admin.settings.twitter_card.option_summary`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_summary%22)

> Summary card (smaller image)

```diff
+Carte Résumé (avec une petite image)
```

#### [`fof-seo.admin.settings.updated.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.updated.button%22)

> Back to overview and re-check

```diff
+Revenir à la vue d'ensemble et revérifier
```

#### [`fof-seo.admin.settings.updated.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.updated.heading%22)

> Updated this setting?

```diff
+Avez-vous mis à jour ce paramètre ?
```

#### [`fof-seo.admin.settings.updated.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.admin.settings.updated.help%22)

> When you think you're ready, click the button below to re-check the status of this setting.

```diff
+Lorsque vous pensez être prêt, cliquez sur le bouton ci-dessous pour vérifier à nouveau l'état de ce paramètre.
```

#### [`fof-seo.forum.controls.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.controls.configure_seo%22)

> Configure SEO

```diff
+Configurer le référencement
```

#### [`fof-seo.forum.controls.reset_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.controls.reset_seo%22)

> Reset SEO

```diff
+Réinitialiser le référencement
```

#### [`fof-seo.forum.controls.update_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.controls.update_seo%22)

> Update SEO

```diff
+Mettre à jour le référencement
```

#### [`fof-seo.forum.meta_seo.auto_update.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.help%22)

> When enabled, this items meta tags are automatically updated when the object changes.

```diff
+Lorsque cette option est activée, les balises meta de cet élément sont automatiquement mises à jour dès que l'objet est modifié.
```

#### [`fof-seo.forum.meta_seo.auto_update.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.label%22)

> Auto update meta tags

```diff
+Mise à jour automatique des balises meta
```

#### [`fof-seo.forum.meta_seo.auto_update.switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.switch%22)

> Update object SEO on change

```diff
+Mettre à jour l'objet du SEO en cas de modification
```

#### [`fof-seo.forum.meta_seo.close.autofill_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.autofill_info%22)

> This change will revert custom changes and fill the meta-tags with item-data.

```diff
+Cette modification annulera les modifications personnalisées et remplira les balises meta avec les données de l'élément.
```

#### [`fof-seo.forum.meta_seo.close.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.close%22)

> Close

```diff
+Fermer
```

#### [`fof-seo.forum.meta_seo.close.save`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save%22)

> Save

```diff
+Enregistrer
```

#### [`fof-seo.forum.meta_seo.close.save_autofill`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save_autofill%22)

> Save &amp; auto-fill

```diff
+Enregistrer et remplir automatiquement
```

#### [`fof-seo.forum.meta_seo.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.help%22)

> Displays an image.

```diff
+Affiche une image.
```

#### [`fof-seo.forum.meta_seo.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.label%22)

> Meta image

```diff
+Image Meta
```

#### [`fof-seo.forum.meta_seo.image.managed_by`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.managed_by%22)

> Image source managed by {source}

```diff
+Source de l'image gérée par {source}
```

#### [`fof-seo.forum.meta_seo.image.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.placeholder%22)

> Enter image URL

```diff
+Saisissez l'URL de l'image
```

#### [`fof-seo.forum.meta_seo.image.upload`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.upload%22)

> Upload file

```diff
+Transférer un fichier
```

#### [`fof-seo.forum.meta_seo.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Remarque : les mots-clés doivent être séparés par une virgule.
```

#### [`fof-seo.forum.meta_seo.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Exemple : flarum, développement web, forum, pommes, sécurité
```

#### [`fof-seo.forum.meta_seo.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.help%22)

> Enter one or more keywords that describes this item.

```diff
+Saisissez un ou plusieurs mots-clés qui décrivent cet élément.
```

#### [`fof-seo.forum.meta_seo.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.label%22)

> Keywords

```diff
+Mots-clés
```

#### [`fof-seo.forum.meta_seo.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.placeholder%22)

> Add a few keywords

```diff
+Ajouter quelques mots-clés
```

#### [`fof-seo.forum.meta_seo.managed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.managed%22)

> Managed

```diff
+Géré
```

#### [`fof-seo.forum.meta_seo.meta_description.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.help%22)

> Describes the item and shown in search engines.

```diff
+Décrit l’élément et s'affiche dans les moteurs de recherche.
```

#### [`fof-seo.forum.meta_seo.meta_description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.label%22)

> Meta description

```diff
+Description Meta
```

#### [`fof-seo.forum.meta_seo.meta_title.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.help%22)

> Title in search engines.

```diff
+Titre dans les moteurs de recherche.
```

#### [`fof-seo.forum.meta_seo.meta_title.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.label%22)

> Meta title

```diff
+Titre Meta
```

#### [`fof-seo.forum.meta_seo.meta_title.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.placeholder%22)

> Enter page title

```diff
+Saisir le titre de la page
```

#### [`fof-seo.forum.meta_seo.note_prefix`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.note_prefix%22)

> Note:

```diff
+Note :
```

#### [`fof-seo.forum.meta_seo.og.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.auto_switch%22)

> Auto generate Open Graph tags

```diff
+Générer automatiquement des balises Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.label%22)

> Open Graph description

```diff
+Description de l'Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.placeholder%22)

> Custom Open Graph description

```diff
+Description personnalisée de l'Open Graph
```

#### [`fof-seo.forum.meta_seo.og.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.label%22)

> Open Graph tags

```diff
+Balises Open Graph
```

#### [`fof-seo.forum.meta_seo.og.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.title%22)

> Open Graph title

```diff
+Titre de l'Open Graph
```

#### [`fof-seo.forum.meta_seo.reading_time.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.help%22)

> Estimated reading time in seconds.

```diff
+Temps de lecture estimé en secondes.
```

#### [`fof-seo.forum.meta_seo.reading_time.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.label%22)

> Estimated reading time

```diff
+Temps de lecture estimé
```

#### [`fof-seo.forum.meta_seo.reading_time.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.placeholder%22)

> Reading time in seconds

```diff
+Temps de lecture en secondes
```

#### [`fof-seo.forum.meta_seo.robots.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.help%22)

> Robot-crawling settings for this item.

```diff
+Paramètres d'indexation par le robot pour cet élément.
```

#### [`fof-seo.forum.meta_seo.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.label%22)

> Robots

```diff
+Robots
```

#### [`fof-seo.forum.meta_seo.robots.switch.follow`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.follow%22)

> Allow following links to different pages

```diff
+Autoriser le suivi des liens vers différentes pages
```

#### [`fof-seo.forum.meta_seo.robots.switch.indexing`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.indexing%22)

> Allow indexing page

```diff
+Autoriser l'indexation de la page
```

#### [`fof-seo.forum.meta_seo.robots.switch.noarchive`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noarchive%22)

> Disable archiving page (noarchive)

```diff
+Désactiver l'archivage de la page (noarchive)
```

#### [`fof-seo.forum.meta_seo.robots.switch.noimageindex`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noimageindex%22)

> Disable indexing images on this page (noimageindex)

```diff
+Désactiver l'indexation des images sur cette page (noimageindex)
```

#### [`fof-seo.forum.meta_seo.robots.switch.nosnippet`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.nosnippet%22)

> Disable text-snippes on page (nosnippet)

```diff
+Désactiver les extraits de texte sur la page (nosnippet)
```

#### [`fof-seo.forum.meta_seo.robots.tags.archive_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.archive_not_allowed%22)

> Archiving pages not allowed

```diff
+L'archivage des pages n'est pas autorisé
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_allowed%22)

> Allow follow links

```diff
+Autoriser le suivi des liens
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_not_allowed%22)

> Link following not allowed

```diff
+Le suivi des liens n'est pas autorisé
```

#### [`fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed%22)

> Image indexing not allowed

```diff
+L'indexation des images n'est pas autorisée
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_allowed%22)

> Allow indexing page

```diff
+Autoriser l'indexation de la page
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed%22)

> Page indexing not allowed

```diff
+L'indexation des pages n'est pas autorisée
```

#### [`fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed%22)

> Taking text-snippets not allowed

```diff
+Les extraits de texte ne sont pas autorisés
```

#### [`fof-seo.forum.meta_seo.saved`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.saved%22)

> Saved!

```diff
+Enregistré !
```

#### [`fof-seo.forum.meta_seo.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.title%22)

> SEO settings - Meta

```diff
+Paramètres SEO - Meta
```

#### [`fof-seo.forum.meta_seo.twitter.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.auto_switch%22)

> Auto generate X (formerly Twitter) card

```diff
+Générer automatiquement une carte X (anciennement Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.description`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.description%22)

> X (formerly Twitter) description

```diff
+Description X (anciennement Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.help%22)

> Displays an image on X (formerly Twitter).

```diff
+Affiche une image sur X (anciennement Twitter).
```

#### [`fof-seo.forum.meta_seo.twitter.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.label%22)

> X (formerly Twitter) image

```diff
+Image X (anciennement Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.reset`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.reset%22)

> Reset image

```diff
+Réinitialiser l'image
```

#### [`fof-seo.forum.meta_seo.twitter.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.label%22)

> X (formerly Twitter) card

```diff
+Carte X (anciennement Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.title%22)

> X (formerly Twitter) title

```diff
+Titre X (anciennement Twitter)
```

#### [`fof-seo.forum.meta_seo.unsupported_object.body`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.body%22)

> Please open this dialog using the objectType and objectId properties or register the object relationship instead.

```diff
+Veuillez ouvrir cette boîte de dialogue en utilisant les propriétés objectType et objectId ou enregistrez plutôt la relation entre les objets.
```

#### [`fof-seo.forum.meta_seo.unsupported_object.docs_link`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.docs_link%22)

> Documentation

```diff
+Documentation
```

#### [`fof-seo.forum.meta_seo.unsupported_object.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.title%22)

> This object is not a supported SeoMeta object

```diff
+Cet objet n'est pas un objet SeoMeta pris en charge
```

#### [`fof-seo.forum.profile_description`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.profile_description%22)

> Profile of {username} \| {discussion\_count} discussions \| {comment\_count} posts

```diff
+Profil de {username} | {discussion_count} discussions | {comment_count} messages
```

#### [`fof-seo.forum.profile_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/fr/?q=context%3A%3D%22fof-seo.forum.profile_title%22)

> Profile of {username}

```diff
+Profil de {username}
```


### `fof-signature` (missing)

#### [`fof-signature.admin.permissions.allow_signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.permissions.allow_signature%22)

> Can have a signature

```diff
+Peut avoir une signature
```

#### [`fof-signature.admin.permissions.edit_signature_others`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.permissions.edit_signature_others%22)

> Edit other users' signatures

```diff
+Modifier les signatures des autres utilisateurs
```

#### [`fof-signature.admin.settings.allow_inline_editing.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.description%22)

> Inline editing of signature.

```diff
+Modification en ligne de la signature.
```

#### [`fof-signature.admin.settings.allow_inline_editing.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.help%22)

> When enabled, users can edit their signature while viewing a post.

```diff
+Lorsque cette option est activée, les utilisateurs peuvent modifier leur signature lorsqu'ils consultent un message.
```

#### [`fof-signature.admin.settings.maximum_char_limit.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.description%22)

> Maximum character limit of signature.

```diff
+Limite maximale de caractères de la signature.
```

#### [`fof-signature.admin.settings.maximum_char_limit.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.help%22)

> When the user exceeds the maximum character limit in their signature, they will be prevented from saving until the character count is accordingly.

```diff
+Lorsque l'utilisateur dépasse la limite maximale de caractères dans sa signature, il ne peut plus enregistrer jusqu'à ce que le nombre de caractères soit réduit en conséquence.
```

#### [`fof-signature.admin.settings.maximum_image_count.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.description%22)

> Maximum inserted images.

```diff
+Maximum d'images insérées.
```

#### [`fof-signature.admin.settings.maximum_image_count.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.help%22)

> When the user exceeds the maximum image count in their signature, they will be prevented from saving until the image count is accordingly.

```diff
+Lorsque l'utilisateur dépasse le nombre maximal d'images dans sa signature, il ne peut plus enregistrer jusqu'à ce que le nombre d'images soit réduit en conséquence.
```

#### [`fof-signature.forum.buttons.edit`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.buttons.edit%22)

> Edit Signature

```diff
+Modifier la signature
```

#### [`fof-signature.forum.buttons.save`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.buttons.save%22)

> Save Signature

```diff
+Enregistrer la signature
```

#### [`fof-signature.forum.buttons.signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.buttons.signature%22)

> Signature

```diff
+Signature
```

#### [`fof-signature.forum.editor.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.editor.placeholder%22)

> Edit your signature here

```diff
+Modifiez votre signature ici
```

#### [`fof-signature.forum.errors.max_char_limit_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.errors.max_char_limit_exceed%22)

> Maximum character limit exceeded.

```diff
+La limite maximale de caractères a été dépassée.
```

#### [`fof-signature.forum.errors.max_image_count_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.errors.max_image_count_exceed%22)

> Maximum image count exceeded.

```diff
+Le nombre maximum d'images a été dépassé.
```

#### [`fof-signature.forum.errors.save_failed`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.errors.save_failed%22)

> Something went wrong while saving your signature.

```diff
+Une erreur s'est produite lors de l'enregistrement de votre signature.
```

#### [`fof-signature.forum.profile.click`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.profile.click%22)

> Click to write your signature

```diff
+Cliquez ici pour définir votre signature
```

#### [`fof-signature.forum.settings.heading`](https://weblate.rob006.net/translate/flarum2/fof-signature/fr/?q=context%3A%3D%22fof-signature.forum.settings.heading%22)

> Signature

```diff
+Signature
```


### `forumaker-magicbb` (missing)

#### [`forumaker-magicbb.admin.permissions.bypass_like`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.bypass_like%22)

> Bypass like requirement

```diff
+Contourner l'exigence d'aimer
```

#### [`forumaker-magicbb.admin.permissions.bypass_reply`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.bypass_reply%22)

> Bypass reply requirement

```diff
+Contourner l'exigence de répondre
```

#### [`forumaker-magicbb.admin.permissions.use_iframe`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.permissions.use_iframe%22)

> Allow iframe

```diff
+Autoriser les iframes
```

#### [`forumaker-magicbb.admin.sections.content`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.sections.content%22)

> Content buttons

```diff
+Boutons de contenu
```

#### [`forumaker-magicbb.admin.sections.features`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.sections.features%22)

> Features

```diff
+Fonctionnalités
```

#### [`forumaker-magicbb.admin.sections.hide`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.sections.hide%22)

> Hide buttons

```diff
+Masquer les boutons
```

#### [`forumaker-magicbb.admin.sections.images`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.sections.images%22)

> Image buttons

```diff
+Boutons d'image
```

#### [`forumaker-magicbb.admin.sections.text`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.sections.text%22)

> Text buttons

```diff
+Boutons de texte
```

#### [`forumaker-magicbb.admin.settings.bb_anchor`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_anchor%22)

> Anchor &amp; Jump

```diff
+Ancrage et saut
```

#### [`forumaker-magicbb.admin.settings.bb_anchor_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_anchor_help%22)

> Named scroll targets and jump links within a post

```diff
+Cibles de défilement nommées et liens de saut au sein d'un message
```

#### [`forumaker-magicbb.admin.settings.bb_audio`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_audio%22)

> Audio

```diff
+Audio
```

#### [`forumaker-magicbb.admin.settings.bb_center`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_center%22)

> Center

```diff
+Centrer
```

#### [`forumaker-magicbb.admin.settings.bb_color`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_color%22)

> Color

```diff
+Couleur
```

#### [`forumaker-magicbb.admin.settings.bb_hide_like`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_like%22)

> Like

```diff
+J'aime
```

#### [`forumaker-magicbb.admin.settings.bb_hide_like_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_like_help%22)

> Content is hidden until the user likes the post

```diff
+Le contenu reste masqué jusqu'à ce que l'utilisateur « aime » le message
```

#### [`forumaker-magicbb.admin.settings.bb_hide_login`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_login%22)

> Login

```diff
+Connexion
```

#### [`forumaker-magicbb.admin.settings.bb_hide_login_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_login_help%22)

> Content is hidden from guests and visible to all logged-in users

```diff
+Le contenu est masqué pour les invités et visible pour tous les utilisateurs connectés
```

#### [`forumaker-magicbb.admin.settings.bb_hide_reply`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_reply%22)

> Reply

```diff
+Réponse
```

#### [`forumaker-magicbb.admin.settings.bb_hide_reply_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_hide_reply_help%22)

> Content is hidden until the user replies in the discussion

```diff
+Le contenu reste masqué jusqu'à ce que l'utilisateur réponde dans la discussion
```

#### [`forumaker-magicbb.admin.settings.bb_iframe`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe%22)

> iframe

```diff
+iframe
```

#### [`forumaker-magicbb.admin.settings.bb_iframe_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_iframe_help%22)

> Allows embedding iframes from any source. Use with caution — embedded content may include external scripts. 🧹 After changing this setting, please clear the Flarum cache

```diff
+Permet d'intégrer des iframes provenant de n'importe quelle source. À utiliser avec prudence — le contenu intégré peut contenir des scripts externes. 🧹 Après avoir modifié ce paramètre, veuillez vider le cache de Flarum
```

#### [`forumaker-magicbb.admin.settings.bb_image`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image%22)

> Image alignment

```diff
+Alignement des images
```

#### [`forumaker-magicbb.admin.settings.bb_image_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_image_help%22)

> Wraps images and other inline media in an alignment container. Centered media is scaled to 60% of the post width, side-aligned — up to 40%

```diff
+Encadre les images et autres contenus multimédias intégrés dans un conteneur d'alignement. Les contenus multimédias centrés sont redimensionnées à 60 % de la largeur du message, tandis que ceux alignés sur le côté — jusqu'à 40 %
```

#### [`forumaker-magicbb.admin.settings.bb_info`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_info%22)

> Alerts

```diff
+Alertes
```

#### [`forumaker-magicbb.admin.settings.bb_justify`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_justify%22)

> Justify

```diff
+Justifier
```

#### [`forumaker-magicbb.admin.settings.bb_spoiler`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_spoiler%22)

> Spoiler

```diff
+Spoiler
```

#### [`forumaker-magicbb.admin.settings.bb_table`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.bb_table%22)

> Table

```diff
+Tableau
```

#### [`forumaker-magicbb.admin.settings.toolbar_group`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.toolbar_group%22)

> Group MagicBB buttons

```diff
+Regrouper les boutons MagicBB
```

#### [`forumaker-magicbb.admin.settings.toolbar_group_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.admin.settings.toolbar_group_help%22)

> If enabled, all MagicBB buttons will be grouped into a single one in the composer

```diff
+Si cette option est activée, tous les boutons de MagicBB seront regroupés en un seul bouton dans le compositeur
```

#### [`forumaker-magicbb.forum.composer.anchor_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.anchor_button%22)

> Add anchor

```diff
+Ajouter un ancrage
```

#### [`forumaker-magicbb.forum.composer.audio_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.audio_button%22)

> Add audio

```diff
+Ajouter un fichier audio
```

#### [`forumaker-magicbb.forum.composer.center_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.center_button%22)

> Align center

```diff
+Centrer
```

#### [`forumaker-magicbb.forum.composer.color_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.color_button%22)

> Add color

```diff
+Ajouter une couleur
```

#### [`forumaker-magicbb.forum.composer.hide_like_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_like_button%22)

> Hidden — like required

```diff
+Masqué — « J'aime » requis
```

#### [`forumaker-magicbb.forum.composer.hide_login_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_login_button%22)

> Hidden — login required

```diff
+Masqué — connexion requise
```

#### [`forumaker-magicbb.forum.composer.hide_reply_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.hide_reply_button%22)

> Hidden — reply required

```diff
+Masqué — réponse requise
```

#### [`forumaker-magicbb.forum.composer.image_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.image_button%22)

> Align image

```diff
+Aligner une image
```

#### [`forumaker-magicbb.forum.composer.info_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.info_button%22)

> Add alert

```diff
+Ajouter une alerte
```

#### [`forumaker-magicbb.forum.composer.jump_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.jump_button%22)

> Add jump link

```diff
+Ajouter un lien de saut
```

#### [`forumaker-magicbb.forum.composer.justify_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.justify_button%22)

> Align justify

```diff
+Justifier
```

#### [`forumaker-magicbb.forum.composer.more_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.more_button%22)

> More

```diff
+Plus
```

#### [`forumaker-magicbb.forum.composer.spoiler_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.spoiler_button%22)

> Add spoiler

```diff
+Ajouter un spoiler
```

#### [`forumaker-magicbb.forum.composer.table_button`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.composer.table_button%22)

> Add table

```diff
+Ajouter un tableau
```

#### [`forumaker-magicbb.forum.hide.like_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.hide.like_to_see_simple%22)

> Like this post to see this content

```diff
+Vous devez aimer ce message pour voir le contenu
```

#### [`forumaker-magicbb.forum.hide.login_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.hide.login_to_see_simple%22)

> Log in to see this content

```diff
+Vous devez vous connecter pour voir ce contenu
```

#### [`forumaker-magicbb.forum.hide.reply_to_see_simple`](https://weblate.rob006.net/translate/flarum2/forumaker-magicbb/fr/?q=context%3A%3D%22forumaker-magicbb.forum.hide.reply_to_see_simple%22)

> Reply in this discussion to see this content

```diff
+Vous devez répondre à cette discussion pour voir le contenu
```


### `forumaker-magicread` (missing)

#### [`forumaker-magicread.admin.settings.enable_counter_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_counter_help%22)

> Adds a character counter to the top-right corner of the message input

```diff
+Ajoute un compteur de caractères dans le coin supérieur droit de la zone de saisie du message
```

#### [`forumaker-magicread.admin.settings.enable_discussion_pager`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_discussion_pager%22)

> Show page navigation instead of scroll bar

```diff
+Afficher la pagination à la place de la barre de défilement
```

#### [`forumaker-magicread.admin.settings.enable_discussion_pager_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_discussion_pager_help%22)

> Removes the discussion scrubber, adds page navigation above and below the page and disables auto-scrolling

```diff
+Supprime la barre de défilement, ajoute la pagination en haut et en bas de la page et désactive le défilement automatique
```

#### [`forumaker-magicread.admin.settings.enable_pagination_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_pagination_help%22)

> Keeps the discussion scrubber visible and adds a page picker below it

```diff
+Permet de garder le fil de discussion visible et ajoute un sélecteur de page en dessous
```

#### [`forumaker-magicread.admin.settings.enable_readmore_help`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.enable_readmore_help%22)

> Hides long posts on profile pages and adds a button to expand them

```diff
+Masque les longs messages sur les pages de profil et ajoute un bouton permettant de les développer
```

#### [`forumaker-magicread.admin.settings.section_pagination`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.admin.settings.section_pagination%22)

> Pagination

```diff
+Pagination
```

#### [`forumaker-magicread.forum.pager.first`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.first%22)

> Return to the beginning

```diff
+Revenir au début
```

#### [`forumaker-magicread.forum.pager.go`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.go%22)

> Go

```diff
+Aller
```

#### [`forumaker-magicread.forum.pager.input_label`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.input_label%22)

> Jump to page

```diff
+Sauter à la page
```

#### [`forumaker-magicread.forum.pager.last`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.last%22)

> Go to the last page

```diff
+Aller à la dernière page
```

#### [`forumaker-magicread.forum.pager.next`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.next%22)

> Next page

```diff
+Page suivante
```

#### [`forumaker-magicread.forum.pager.page`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.page%22)

> Page

```diff
+Page
```

#### [`forumaker-magicread.forum.pager.prev`](https://weblate.rob006.net/translate/flarum2/forumaker-magicread/fr/?q=context%3A%3D%22forumaker-magicread.forum.pager.prev%22)

> Previous page

```diff
+Page précédente
```


### `huseyinfiliz-awards` (missing)

#### [`huseyinfiliz-awards.admin.awards.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.categories%22)

> Categories

```diff
+Catégories
```

#### [`huseyinfiliz-awards.admin.awards.create`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.create%22)

> Create Award

```diff
+Créer une distinction
```

#### [`huseyinfiliz-awards.admin.awards.create_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.create_title%22)

> Create New Award

```diff
+Créer une nouvelle distinction
```

#### [`huseyinfiliz-awards.admin.awards.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.delete_confirm%22)

> Are you sure you want to delete this award?

```diff
+Êtes-vous sûr de vouloir supprimer cette distinction ?
```

#### [`huseyinfiliz-awards.admin.awards.edit_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.edit_title%22)

> Edit Award

```diff
+Modifier la distinction
```

#### [`huseyinfiliz-awards.admin.awards.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.empty%22)

> No awards created yet.

```diff
+Aucun prix créé pour le moment.
```

#### [`huseyinfiliz-awards.admin.awards.ends_at`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.ends_at%22)

> Voting Ends

```diff
+Fin du vote
```

#### [`huseyinfiliz-awards.admin.awards.image_url`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.image_url%22)

> Cover Image URL

```diff
+URL de l'image de couverture
```

#### [`huseyinfiliz-awards.admin.awards.image_url_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.image_url_help%22)

> Cover image displayed in the hero section. Upload or paste URL.

```diff
+Image de couverture affichée dans le bandeau. Transférer ou coller un lien.
```

#### [`huseyinfiliz-awards.admin.awards.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.name%22)

> Award Name

```diff
+Nom de la distinction
```

#### [`huseyinfiliz-awards.admin.awards.publish`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.publish%22)

> Publish Results

```diff
+Publier les résultats
```

#### [`huseyinfiliz-awards.admin.awards.publish_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.publish_confirm%22)

> Are you sure you want to publish results? All voters will be notified.

```diff
+Êtes-vous sûr de vouloir publier les résultats ? Tous les votants en seront informés.
```

#### [`huseyinfiliz-awards.admin.awards.show_live_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.show_live_votes%22)

> Show Live Vote Counts

```diff
+Afficher les résultats en direct
```

#### [`huseyinfiliz-awards.admin.awards.show_live_votes_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.show_live_votes_help%22)

> Display vote counts while voting is active

```diff
+Afficher les résultats pendant que le vote est actif
```

#### [`huseyinfiliz-awards.admin.awards.starts_at`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.starts_at%22)

> Voting Starts

```diff
+Début du vote
```

#### [`huseyinfiliz-awards.admin.awards.status`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status%22)

> Status

```diff
+Statut
```

#### [`huseyinfiliz-awards.admin.awards.status_active`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status_active%22)

> Active

```diff
+Actif
```

#### [`huseyinfiliz-awards.admin.awards.status_draft`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status_draft%22)

> Draft

```diff
+Brouillon
```

#### [`huseyinfiliz-awards.admin.awards.status_ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status_ended%22)

> Ended

```diff
+Terminé
```

#### [`huseyinfiliz-awards.admin.awards.status_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.status_published%22)

> Published

```diff
+Publié
```

#### [`huseyinfiliz-awards.admin.awards.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.title%22)

> Manage Awards

```diff
+Gérer les récompenses
```

#### [`huseyinfiliz-awards.admin.awards.year`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.awards.year%22)

> Year

```diff
+Année
```

#### [`huseyinfiliz-awards.admin.categories.allow_other`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.allow_other%22)

> Allow User Suggestions

```diff
+Autoriser les suggestions des utilisateurs
```

#### [`huseyinfiliz-awards.admin.categories.allow_other_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.allow_other_help%22)

> Users can suggest nominees not in the list

```diff
+Les utilisateurs peuvent proposer des nominés qui ne figurent pas dans la liste
```

#### [`huseyinfiliz-awards.admin.categories.create`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.create%22)

> Create Category

```diff
+Créer une catégorie
```

#### [`huseyinfiliz-awards.admin.categories.create_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.create_title%22)

> Create New Category

```diff
+Créer une nouvelle catégorie
```

#### [`huseyinfiliz-awards.admin.categories.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.delete_confirm%22)

> Are you sure you want to delete this category?

```diff
+Êtes-vous sûr de vouloir supprimer cette catégorie ?
```

#### [`huseyinfiliz-awards.admin.categories.edit_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.edit_title%22)

> Edit Category

```diff
+Modifier la catégorie
```

#### [`huseyinfiliz-awards.admin.categories.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.empty%22)

> No categories found.

```diff
+Aucune catégorie trouvée.
```

#### [`huseyinfiliz-awards.admin.categories.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.name%22)

> Category Name

```diff
+Nom de la catégorie
```

#### [`huseyinfiliz-awards.admin.categories.nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.nominees%22)

> Nominees

```diff
+Nominés
```

#### [`huseyinfiliz-awards.admin.categories.select_award`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.select_award%22)

> Select Award

```diff
+Sélectionner une distinction
```

#### [`huseyinfiliz-awards.admin.categories.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.categories.title%22)

> Manage Categories

```diff
+Gérer les catégories
```

#### [`huseyinfiliz-awards.admin.nav.description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nav.description%22)

> Manage community awards and voting

```diff
+Gérer les récompenses de la communauté et les votes
```

#### [`huseyinfiliz-awards.admin.nav.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nav.title%22)

> Awards

```diff
+Récompenses
```

#### [`huseyinfiliz-awards.admin.nominees.adjust_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.adjust_votes%22)

> Adjust Votes

```diff
+Ajuster les votes
```

#### [`huseyinfiliz-awards.admin.nominees.adjustment`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.adjustment%22)

> Adjustment

```diff
+Ajustement
```

#### [`huseyinfiliz-awards.admin.nominees.adjustment_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.adjustment_help%22)

> Enter a positive or negative number to adjust the displayed vote count.

```diff
+Saisissez un nombre positif ou négatif pour ajuster le nombre de votes affiché.
```

#### [`huseyinfiliz-awards.admin.nominees.create`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.create%22)

> Create Nominee

```diff
+Créer un nominé
```

#### [`huseyinfiliz-awards.admin.nominees.create_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.create_title%22)

> Create New Nominee

```diff
+Créer un nouveau nominé
```

#### [`huseyinfiliz-awards.admin.nominees.delete_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.delete_confirm%22)

> Are you sure you want to delete this nominee?

```diff
+Êtes-vous sûr de vouloir supprimer ce nominé ?
```

#### [`huseyinfiliz-awards.admin.nominees.description_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.description_help%22)

> Short description shown below the name (optional)

```diff
+Courte description affichée sous le nom (facultatif)
```

#### [`huseyinfiliz-awards.admin.nominees.displayed_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.displayed_votes%22)

> Displayed Votes

```diff
+Votes affichés
```

#### [`huseyinfiliz-awards.admin.nominees.edit_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.edit_title%22)

> Edit Nominee

```diff
+Modifier le nominé
```

#### [`huseyinfiliz-awards.admin.nominees.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.empty%22)

> No nominees found.

```diff
+Aucun nominé trouvé.
```

#### [`huseyinfiliz-awards.admin.nominees.image`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.image%22)

> Image

```diff
+Image
```

#### [`huseyinfiliz-awards.admin.nominees.image_url`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.image_url%22)

> Image URL

```diff
+URL de l'image
```

#### [`huseyinfiliz-awards.admin.nominees.image_url_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.image_url_help%22)

> URL to the nominee's image (e.g., game cover, person photo)

```diff
+URL vers l'image du nominé (p. ex. couverture du jeu)
```

#### [`huseyinfiliz-awards.admin.nominees.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.name%22)

> Nominee Name

```diff
+Nom du nominé
```

#### [`huseyinfiliz-awards.admin.nominees.real_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.real_votes%22)

> Real Votes

```diff
+Votes réels
```

#### [`huseyinfiliz-awards.admin.nominees.reset`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.reset%22)

> Reset

```diff
+Réinitialiser
```

#### [`huseyinfiliz-awards.admin.nominees.reset_adjustment`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.reset_adjustment%22)

> Reset adjustment to 0

```diff
+Réinitialiser l'ajustement à 0
```

#### [`huseyinfiliz-awards.admin.nominees.select_category`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.select_category%22)

> Select Category

```diff
+Sélectionner une catégorie
```

#### [`huseyinfiliz-awards.admin.nominees.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.title%22)

> Manage Nominees

```diff
+Gérer les nominés
```

#### [`huseyinfiliz-awards.admin.nominees.vote_adjustment_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.nominees.vote_adjustment_title%22)

> Vote Adjustment

```diff
+Ajustement du vote
```

#### [`huseyinfiliz-awards.admin.permissions.manage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.manage%22)

> Manage Awards

```diff
+Gérer les récompenses
```

#### [`huseyinfiliz-awards.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.view%22)

> View Awards

```diff
+Voir les récompenses
```

#### [`huseyinfiliz-awards.admin.permissions.view_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.view_results%22)

> View Results Early

```diff
+Afficher les résultats à l'avance
```

#### [`huseyinfiliz-awards.admin.permissions.vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.permissions.vote%22)

> Vote in Awards

```diff
+Voter pour les récompenses
```

#### [`huseyinfiliz-awards.admin.settings.nav_icon`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_icon%22)

> Navigation Icon

```diff
+Icône de navigation
```

#### [`huseyinfiliz-awards.admin.settings.nav_icon_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_icon_help%22)

> FontAwesome icon class (e.g., fas fa-trophy, fas fa-award, fas fa-star)

```diff
+Classe d'icône Font Awesome (p. ex. : fas fa-trophy, fas fa-award, fas fa-star)
```

#### [`huseyinfiliz-awards.admin.settings.nav_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_title%22)

> Navigation Title

```diff
+Titre de navigation
```

#### [`huseyinfiliz-awards.admin.settings.nav_title_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.nav_title_help%22)

> Text shown in the sidebar navigation

```diff
+Texte affiché dans la barre de navigation latérale
```

#### [`huseyinfiliz-awards.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.title%22)

> Settings

```diff
+Paramètres
```

#### [`huseyinfiliz-awards.admin.settings.votes_per_category`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.votes_per_category%22)

> Votes Per Category

```diff
+Votes par catégorie
```

#### [`huseyinfiliz-awards.admin.settings.votes_per_category_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.settings.votes_per_category_help%22)

> 0 for unlimited, 1 for single vote (replace), &gt;1 for multiple votes.

```diff
+0 pour illimité, 1 pour un seul vote (modifiable), >1 pour plusieurs votes.
```

#### [`huseyinfiliz-awards.admin.suggestions.approve`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.approve%22)

> Approve

```diff
+Approuver
```

#### [`huseyinfiliz-awards.admin.suggestions.approve_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.approve_confirm%22)

> Create as new nominee? The user will automatically vote for it.

```diff
+Créer un nouveau nominé ? L'utilisateur votera automatiquement pour lui.
```

#### [`huseyinfiliz-awards.admin.suggestions.category`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.category%22)

> Category

```diff
+Catégorie
```

#### [`huseyinfiliz-awards.admin.suggestions.date`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.date%22)

> Date

```diff
+Date
```

#### [`huseyinfiliz-awards.admin.suggestions.empty`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.empty%22)

> No pending suggestions

```diff
+Aucune suggestion en attente
```

#### [`huseyinfiliz-awards.admin.suggestions.merge`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.merge%22)

> Merge

```diff
+Fusionner
```

#### [`huseyinfiliz-awards.admin.suggestions.merge_info`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.merge_info%22)

> Merge "{name}" into an existing nominee. The user's vote will count for that nominee.

```diff
+Fusionner « {nom} » avec un nominé existant. Le vote de l'utilisateur sera pris en compte pour ce nominé.
```

#### [`huseyinfiliz-awards.admin.suggestions.merge_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.merge_title%22)

> Merge Suggestion

```diff
+Fusionner la suggestion
```

#### [`huseyinfiliz-awards.admin.suggestions.name`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.name%22)

> Suggested Name

```diff
+Nom suggéré
```

#### [`huseyinfiliz-awards.admin.suggestions.no_nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.no_nominees%22)

> No nominees available in this category to merge into.

```diff
+Il n'y a aucun nominé dans cette catégorie pouvant être fusionné.
```

#### [`huseyinfiliz-awards.admin.suggestions.reject`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.reject%22)

> Reject

```diff
+Rejeter
```

#### [`huseyinfiliz-awards.admin.suggestions.reject_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.reject_confirm%22)

> Reject this suggestion?

```diff
+Rejeter cette suggestion ?
```

#### [`huseyinfiliz-awards.admin.suggestions.select_nominee_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.select_nominee_label%22)

> Select Nominee

```diff
+Sélectionner le nominé
```

#### [`huseyinfiliz-awards.admin.suggestions.select_nominee_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.select_nominee_placeholder%22)

> \-- Select a nominee --

```diff
+-- Sélectionner un nominé --
```

#### [`huseyinfiliz-awards.admin.suggestions.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.title%22)

> Pending Suggestions

```diff
+Suggestions en attente
```

#### [`huseyinfiliz-awards.admin.suggestions.user`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.suggestions.user%22)

> Submitted By

```diff
+Soumis par
```

#### [`huseyinfiliz-awards.admin.tabs.awards`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.awards%22)

> Awards

```diff
+Récompenses
```

#### [`huseyinfiliz-awards.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.categories%22)

> Categories

```diff
+Catégories
```

#### [`huseyinfiliz-awards.admin.tabs.nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.nominees%22)

> Nominees

```diff
+Nominés
```

#### [`huseyinfiliz-awards.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.settings%22)

> Settings

```diff
+Paramètres
```

#### [`huseyinfiliz-awards.admin.tabs.suggestions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.tabs.suggestions%22)

> Suggestions

```diff
+Suggestions
```

#### [`huseyinfiliz-awards.admin.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.admin.title%22)

> Awards Management

```diff
+Gestion des prix
```

#### [`huseyinfiliz-awards.forum.category.nominees_count`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.category.nominees_count%22)

> {count} nominees

```diff
+{count} nominés
```

#### [`huseyinfiliz-awards.forum.category.votes_unlimited`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.category.votes_unlimited%22)

> {count} votes

```diff
+{count} votes
```

#### [`huseyinfiliz-awards.forum.category.votes_used`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.category.votes_used%22)

> {used}/{limit} votes

```diff
+{used}/{limit} votes
```

#### [`huseyinfiliz-awards.forum.empty.no_awards`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_awards%22)

> No Active Awards

```diff
+Aucune récompense active
```

#### [`huseyinfiliz-awards.forum.empty.no_awards_description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_awards_description%22)

> There are no awards available at this time. Check back later!

```diff
+Il n'y a aucun prix disponible actuellement. Revenez plus tard !
```

#### [`huseyinfiliz-awards.forum.empty.no_categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_categories%22)

> No categories in this award yet.

```diff
+Aucune catégorie dans cette distinction pour le moment.
```

#### [`huseyinfiliz-awards.forum.empty.no_nominees`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.empty.no_nominees%22)

> No nominees in this category yet.

```diff
+Aucun nominé dans cette catégorie pour le moment.
```

#### [`huseyinfiliz-awards.forum.error.cannot_delete_processed_suggestion`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.cannot_delete_processed_suggestion%22)

> Only pending suggestions can be cancelled.

```diff
+Seules les suggestions en attente peuvent être annulées.
```

#### [`huseyinfiliz-awards.forum.error.not_available`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.not_available%22)

> This award is not available yet.

```diff
+Cette distinction n'est pas encore disponible.
```

#### [`huseyinfiliz-awards.forum.error.other_not_allowed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.other_not_allowed%22)

> This category doesn't accept suggestions.

```diff
+Cette catégorie n'accepte pas les suggestions.
```

#### [`huseyinfiliz-awards.forum.error.rate_limit`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.rate_limit%22)

> Too many votes. Please wait a moment.

```diff
+Trop de votes. Veuillez patienter un instant.
```

#### [`huseyinfiliz-awards.forum.error.vote_limit_reached`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.vote_limit_reached%22)

> You can only vote for {limit} nominees in this category.

```diff
+Vous ne pouvez voter que pour {limit} nominés dans cette catégorie.
```

#### [`huseyinfiliz-awards.forum.error.vote_quota_exhausted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.vote_quota_exhausted%22)

> You have used all your available votes/suggestions for this category.

```diff
+Vous avez utilisé tous vos votes/suggestions disponibles pour cette catégorie.
```

#### [`huseyinfiliz-awards.forum.error.voting_closed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.error.voting_closed%22)

> Voting is closed.

```diff
+Le vote est clos.
```

#### [`huseyinfiliz-awards.forum.hero.countdown`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.countdown%22)

> Voting ends in: {days}d {hours}h {minutes}m {seconds}s

```diff
+Le vote se termine dans : {jours}j {heures}h {minutes}m {secondes}s
```

#### [`huseyinfiliz-awards.forum.hero.draft_preview`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.draft_preview%22)

> Draft Preview

```diff
+Aperçu du brouillon
```

#### [`huseyinfiliz-awards.forum.hero.results_preview`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.results_preview%22)

> Results Preview

```diff
+Aperçu des résultats
```

#### [`huseyinfiliz-awards.forum.hero.results_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.results_published%22)

> Results Published

```diff
+Résultats publiés
```

#### [`huseyinfiliz-awards.forum.hero.voting_ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.hero.voting_ended%22)

> Voting has ended

```diff
+Le vote est terminé
```

#### [`huseyinfiliz-awards.forum.my_votes.add_vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.add_vote%22)

> Add Vote

```diff
+Ajouter un vote
```

#### [`huseyinfiliz-awards.forum.my_votes.categories_remaining`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.categories_remaining%22)

> Categories Without Votes

```diff
+Catégories sans votes
```

#### [`huseyinfiliz-awards.forum.my_votes.change`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.change%22)

> Change

```diff
+Modifier
```

#### [`huseyinfiliz-awards.forum.my_votes.last_vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.last_vote%22)

> Last vote: {time}

```diff
+Dernier vote : {time}
```

#### [`huseyinfiliz-awards.forum.my_votes.no_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.no_votes%22)

> You haven't voted yet

```diff
+Vous n'avez pas encore voté
```

#### [`huseyinfiliz-awards.forum.my_votes.remove`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.remove%22)

> Remove

```diff
+Supprimer
```

#### [`huseyinfiliz-awards.forum.my_votes.summary`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.summary%22)

> You voted in {voted}/{total} categories

```diff
+Vous avez voté dans {voted}/{total} catégories
```

#### [`huseyinfiliz-awards.forum.my_votes.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.title%22)

> Your Votes

```diff
+Vos votes
```

#### [`huseyinfiliz-awards.forum.my_votes.total_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.total_votes%22)

> {count} total votes

```diff
+{count} votes au total
```

#### [`huseyinfiliz-awards.forum.my_votes.vote_now`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.vote_now%22)

> Vote Now

```diff
+Voter maintenant
```

#### [`huseyinfiliz-awards.forum.my_votes.votes_unlimited`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.votes_unlimited%22)

> {count} votes

```diff
+{count} votes
```

#### [`huseyinfiliz-awards.forum.my_votes.votes_used`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.my_votes.votes_used%22)

> {used}/{limit} votes used

```diff
+{utilisé}/{limite} votes utilisés
```

#### [`huseyinfiliz-awards.forum.nav.all_categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.nav.all_categories%22)

> All Categories

```diff
+Toutes les catégories
```

#### [`huseyinfiliz-awards.forum.nav.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.nav.categories%22)

> Categories

```diff
+Catégories
```

#### [`huseyinfiliz-awards.forum.nav.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.nav.title%22)

> Awards

```diff
+Récompenses
```

#### [`huseyinfiliz-awards.forum.notification.results_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.notification.results_published%22)

> Results for {awardName} have been published!

```diff
+Les résultats du {awardName} ont été publiés !
```

#### [`huseyinfiliz-awards.forum.other.already_submitted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.already_submitted%22)

> You already submitted a suggestion for this category.

```diff
+Vous avez déjà soumis une suggestion pour cette catégorie.
```

#### [`huseyinfiliz-awards.forum.other.cancel`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.cancel%22)

> Cancel

```diff
+Annuler
```

#### [`huseyinfiliz-awards.forum.other.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.cancel_confirm%22)

> Cancel this suggestion?

```diff
+Annuler cette suggestion ?
```

#### [`huseyinfiliz-awards.forum.other.click_to_suggest`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.click_to_suggest%22)

> Click to suggest a nominee

```diff
+Cliquez pour proposer un nominé
```

#### [`huseyinfiliz-awards.forum.other.my_suggestions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.my_suggestions%22)

> My Suggestions

```diff
+Mes suggestions
```

#### [`huseyinfiliz-awards.forum.other.no_remaining`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.no_remaining%22)

> No suggestion slots remaining

```diff
+Il n'y a plus de créneaux disponibles pour les suggestions
```

#### [`huseyinfiliz-awards.forum.other.no_suggestions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.no_suggestions%22)

> You haven't submitted any suggestions yet.

```diff
+Vous n'avez pas encore soumis une suggestion.
```

#### [`huseyinfiliz-awards.forum.other.pending_count`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.pending_count%22)

> {count} pending suggestion(s)

```diff
+{count} suggestion(s) en attente
```

#### [`huseyinfiliz-awards.forum.other.placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.placeholder%22)

> Enter nominee name...

```diff
+Saisissez le nom du nominé...
```

#### [`huseyinfiliz-awards.forum.other.remaining`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.remaining%22)

> {count} suggestion(s) remaining

```diff
+{count} suggestion(s) restante(s)
```

#### [`huseyinfiliz-awards.forum.other.status_approved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_approved%22)

> Approved

```diff
+Approuvée
```

#### [`huseyinfiliz-awards.forum.other.status_merged`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_merged%22)

> Merged

```diff
+Fusionné
```

#### [`huseyinfiliz-awards.forum.other.status_pending`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_pending%22)

> Pending

```diff
+En attente
```

#### [`huseyinfiliz-awards.forum.other.status_rejected`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.status_rejected%22)

> Rejected

```diff
+Rejetée
```

#### [`huseyinfiliz-awards.forum.other.submit`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.submit%22)

> Submit Suggestion

```diff
+Soumettre la suggestion
```

#### [`huseyinfiliz-awards.forum.other.success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.success%22)

> Suggestion submitted! It will be reviewed by moderators.

```diff
+Suggestion soumise ! Elle sera examinée par les modérateurs.
```

#### [`huseyinfiliz-awards.forum.other.suggest`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.other.suggest%22)

> Suggest Other

```diff
+Autre suggestion
```

#### [`huseyinfiliz-awards.forum.page.previous_awards`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.previous_awards%22)

> Previous Year Awards

```diff
+Récompenses de l'année précédente
```

#### [`huseyinfiliz-awards.forum.page.results_published`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.results_published%22)

> Results Published

```diff
+Résultats publiés
```

#### [`huseyinfiliz-awards.forum.page.select_award`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.select_award%22)

> Select Award

```diff
+Sélectionner une distinction
```

#### [`huseyinfiliz-awards.forum.page.voting_ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_ended%22)

> Voting ended {time}

```diff
+Vote terminé {time}
```

#### [`huseyinfiliz-awards.forum.page.voting_ends`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_ends%22)

> Voting ends {time}

```diff
+Fin du vote {time}
```

#### [`huseyinfiliz-awards.forum.page.voting_starts`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.page.voting_starts%22)

> Voting starts {time}

```diff
+Début du vote {time}
```

#### [`huseyinfiliz-awards.forum.prediction.correct`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.correct%22)

> Correct:

```diff
+Correct :
```

#### [`huseyinfiliz-awards.forum.prediction.score`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.score%22)

> {correct}/{total} correct predictions!

```diff
+{correct}/{total} prédictions correctes !
```

#### [`huseyinfiliz-awards.forum.prediction.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.title%22)

> Your Prediction Score

```diff
+Votre score de prédiction
```

#### [`huseyinfiliz-awards.forum.prediction.wrong`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.prediction.wrong%22)

> Wrong:

```diff
+Incorrect :
```

#### [`huseyinfiliz-awards.forum.preview.admin_only`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.preview.admin_only%22)

> Preview mode - Only visible to authorized users

```diff
+Mode aperçu - Visible uniquement pour les utilisateurs autorisés
```

#### [`huseyinfiliz-awards.forum.progress.complete`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.complete%22)

> Complete!

```diff
+Terminé !
```

#### [`huseyinfiliz-awards.forum.progress.next`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.next%22)

> Next

```diff
+Suivant
```

#### [`huseyinfiliz-awards.forum.progress.prev`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.prev%22)

> Prev

```diff
+Précédent
```

#### [`huseyinfiliz-awards.forum.progress.voted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.progress.voted%22)

> {count}/{total} categories voted

```diff
+{count}/{total} catégories votées
```

#### [`huseyinfiliz-awards.forum.results.full_results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.full_results%22)

> Full Results

```diff
+Résultats complets
```

#### [`huseyinfiliz-awards.forum.results.percentage`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.percentage%22)

> {percent}%

```diff
+{percent}%
```

#### [`huseyinfiliz-awards.forum.results.runner_up`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.runner_up%22)

> Runner Up

```diff
+Dauphin
```

#### [`huseyinfiliz-awards.forum.results.view_all`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.view_all%22)

> View All Results

```diff
+Voir tous les résultats
```

#### [`huseyinfiliz-awards.forum.results.votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.votes%22)

> {count} votes

```diff
+{count} votes
```

#### [`huseyinfiliz-awards.forum.results.winner`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.results.winner%22)

> Winner

```diff
+Vainqueur
```

#### [`huseyinfiliz-awards.forum.tabs.categories`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.tabs.categories%22)

> Categories

```diff
+Catégories
```

#### [`huseyinfiliz-awards.forum.tabs.my_votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.tabs.my_votes%22)

> My Votes

```diff
+Mes votes
```

#### [`huseyinfiliz-awards.forum.tabs.results`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.tabs.results%22)

> Results

```diff
+Résultats
```

#### [`huseyinfiliz-awards.forum.voting.change_vote`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.change_vote%22)

> Change Vote

```diff
+Modifier le vote
```

#### [`huseyinfiliz-awards.forum.voting.ended`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ended%22)

> Voting has ended

```diff
+Le vote est terminé
```

#### [`huseyinfiliz-awards.forum.voting.ends_in_days`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ends_in_days%22)

> Voting ends in {days} days

```diff
+Le vote se termine dans {days} jours
```

#### [`huseyinfiliz-awards.forum.voting.ends_in_hours`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ends_in_hours%22)

> Voting ends in {hours} hours

```diff
+Le vote se termine dans {heures} heures
```

#### [`huseyinfiliz-awards.forum.voting.ends_soon`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.ends_soon%22)

> Voting ends soon

```diff
+Le vote se termine bientôt
```

#### [`huseyinfiliz-awards.forum.voting.select`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.select%22)

> Select

```diff
+Sélectionner
```

#### [`huseyinfiliz-awards.forum.voting.vote_removed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.vote_removed%22)

> Your vote has been removed.

```diff
+Votre vote a été supprimé.
```

#### [`huseyinfiliz-awards.forum.voting.vote_saved`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.vote_saved%22)

> Your vote has been saved!

```diff
+Votre vote a été enregistré !
```

#### [`huseyinfiliz-awards.forum.voting.voted`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.voted%22)

> Voted

```diff
+Voté
```

#### [`huseyinfiliz-awards.forum.voting.voting_closed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.forum.voting.voting_closed%22)

> Voting is closed

```diff
+Le vote est clos
```

#### [`huseyinfiliz-awards.lib.actions`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.actions%22)

> Actions

```diff
+Actions
```

#### [`huseyinfiliz-awards.lib.description`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.description%22)

> Description

```diff
+Description
```

#### [`huseyinfiliz-awards.lib.move_down`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.move_down%22)

> Move Down

```diff
+Descendre
```

#### [`huseyinfiliz-awards.lib.move_up`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.move_up%22)

> Move Up

```diff
+Monter
```

#### [`huseyinfiliz-awards.lib.save`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.save%22)

> Save Changes

```diff
+Enregistrer les modifications
```

#### [`huseyinfiliz-awards.lib.slug`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.slug%22)

> Slug

```diff
+Identifiant texte unique
```

#### [`huseyinfiliz-awards.lib.sort_order`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.sort_order%22)

> Order

```diff
+Ordre
```

#### [`huseyinfiliz-awards.lib.success_message`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.success_message%22)

> Changes saved successfully!

```diff
+Modifications enregistrées avec succès !
```

#### [`huseyinfiliz-awards.lib.upload_error`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.upload_error%22)

> Failed to upload image

```diff
+Échec du transfert de l'image
```

#### [`huseyinfiliz-awards.lib.upload_image`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.upload_image%22)

> Upload Image

```diff
+Transférer une image
```

#### [`huseyinfiliz-awards.lib.upload_success`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.upload_success%22)

> Image uploaded successfully

```diff
+Image transférée avec succès
```

#### [`huseyinfiliz-awards.lib.votes`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-awards/fr/?q=context%3A%3D%22huseyinfiliz-awards.lib.votes%22)

> Votes

```diff
+Votes
```


### `huseyinfiliz-notificationhub` (missing)

#### [`huseyinfiliz-notificationhub.admin.modal_notification.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.modal_notification.recipients_placeholder%22)

> =&gt; huseyinfiliz-notificationhub.forum.modal\_notification.recipients\_placeholder

```diff
+=> huseyinfiliz-notificationhub.forum.modal_notification.recipients_placeholder
```

#### [`huseyinfiliz-notificationhub.admin.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.recipient_kinds.group%22)

> =&gt; huseyinfiliz-notificationhub.forum.recipient\_kinds.group

```diff
+=> huseyinfiliz-notificationhub.forum.recipient_kinds.group
```

#### [`huseyinfiliz-notificationhub.admin.recipient_kinds.user`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.recipient_kinds.user%22)

> =&gt; huseyinfiliz-notificationhub.forum.recipient\_kinds.user

```diff
+=> huseyinfiliz-notificationhub.forum.recipient_kinds.user
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.color_invalid`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.color_invalid%22)

> Color must be a valid hex code, e.g. #ff0000 or #f00.

```diff
+La couleur doit être un code hexadécimal valide, p. ex. #ff0000 ou #f00.
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.permission_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.permission_help%22)

> Select member groups authorized to send this notification. If left empty, all authorized moderators/admins can send it.

```diff
+Sélectionnez les groupes de membres autorisés à envoyer cette notification. Si ce champ est laissé vide, tous les modérateurs/administrateurs autorisés pourront l'envoyer.
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.permission_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.permission_placeholder%22)

> Type a group name...

```diff
+Saisissez un nom de groupe...
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.preview`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.preview%22)

> Preview

```diff
+Prévisualiser
```

#### [`huseyinfiliz-notificationhub.admin.settings.fields.preview_placeholder`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.admin.settings.fields.preview_placeholder%22)

> Notification type name

```diff
+Nom du type de notification
```

#### [`huseyinfiliz-notificationhub.api.field_too_long`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.field_too_long%22)

> This field is too long.

```diff
+Ce champ est trop long.
```

#### [`huseyinfiliz-notificationhub.api.invalid_color`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.invalid_color%22)

> Color must be a valid hex code (e.g. #ff0000 or #f00).

```diff
+La couleur doit être un code hexadécimal valide (p. ex. #ff0000 ou #f00).
```

#### [`huseyinfiliz-notificationhub.api.invalid_url`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.invalid_url%22)

> Invalid URL protocol detected.

```diff
+Protocole URL invalide détecté.
```

#### [`huseyinfiliz-notificationhub.api.invalid_url_scheme`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.invalid_url_scheme%22)

> Invalid URL scheme. Only HTTP, HTTPS, mailto, tel, or relative links are allowed.

```diff
+Schéma URL invalide. Seuls les liens HTTP, HTTPS, « mailto », « tel » ou relatifs sont autorisés.
```

#### [`huseyinfiliz-notificationhub.api.message_too_long`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.message_too_long%22)

> Message cannot be longer than 5000 characters.

```diff
+Le message ne doit pas dépasser 5 000 caractères.
```

#### [`huseyinfiliz-notificationhub.api.multiple_recipients_not_allowed`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.multiple_recipients_not_allowed%22)

> You do not have permission to send to multiple recipients at once.

```diff
+Vous n'êtes pas autorisé à envoyer un message à plusieurs destinataires à la fois.
```

#### [`huseyinfiliz-notificationhub.api.name_required`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.name_required%22)

> The notification type name is required.

```diff
+Le nom du type de notification est requis.
```

#### [`huseyinfiliz-notificationhub.api.name_too_long`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.name_too_long%22)

> Name cannot be longer than 255 characters.

```diff
+Le nom ne doit pas dépasser 255 caractères.
```

#### [`huseyinfiliz-notificationhub.api.sort_order_invalid`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.sort_order_invalid%22)

> Sort order must be a non-negative number.

```diff
+L'ordre de tri doit être un nombre non négatif.
```

#### [`huseyinfiliz-notificationhub.api.url_too_long`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.api.url_too_long%22)

> URL cannot be longer than 2048 characters.

```diff
+L'URL ne doit pas dépasser 2 048 caractères.
```

#### [`huseyinfiliz-notificationhub.forum.modal_notification.preview_all_members`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-notificationhub/fr/?q=context%3A%3D%22huseyinfiliz-notificationhub.forum.modal_notification.preview_all_members%22)

> All Members

```diff
+Tous les membres
```


### `huseyinfiliz-sticky-title` (missing)

#### [`huseyinfiliz-sticky-title.admin.settings.blog_header_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.blog_header_help%22)

> Displays the blog article title in mobile header when viewing blog posts

```diff
+Affiche le titre de l'article de blog dans l'en-tête mobile lors de la consultation des articles de blog
```

#### [`huseyinfiliz-sticky-title.admin.settings.blog_header_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.blog_header_label%22)

> Show Blog Title in Mobile Header

```diff
+Afficher le titre du blog dans l'en-tête mobile
```

#### [`huseyinfiliz-sticky-title.admin.settings.fof_pages_header_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.fof_pages_header_help%22)

> Displays the page title in mobile header when viewing FoF Pages

```diff
+Affiche le titre de la page dans l'en-tête mobile lors de la consultation des pages
```

#### [`huseyinfiliz-sticky-title.admin.settings.fof_pages_header_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.fof_pages_header_label%22)

> Show Page Title in Mobile Header

```diff
+Afficher le titre de la page dans l'en-tête mobile
```

#### [`huseyinfiliz-sticky-title.admin.settings.fof_pages_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.fof_pages_section_title%22)

> FoF Pages Settings

```diff
+Paramètres - FoF Pages
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_help%22)

> Choose when to show the discussion title in the mobile header

```diff
+Choisissez quand afficher le titre de la discussion dans l'en-tête mobile
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_label%22)

> Mobile Discussion Title Display

```diff
+Affichage du titre de la discussion sur mobile
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.always`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.always%22)

> Always Show

```diff
+Toujours afficher
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.never`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.never%22)

> Never Show

```diff
+Ne jamais afficher
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.scroll_down`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.scroll_down%22)

> Show When Scrolling Down

```diff
+Afficher lors du défilement vers le bas
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.scroll_up`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_scroll_options.scroll_up%22)

> Show When Scrolling Up

```diff
+Afficher lors du défilement vers le haut
```

#### [`huseyinfiliz-sticky-title.admin.settings.mobile_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.mobile_section_title%22)

> Mobile Settings

```diff
+Paramètres - Mobile
```

#### [`huseyinfiliz-sticky-title.admin.settings.save_settings`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.save_settings%22)

> Save Settings

```diff
+Enregistrer les paramètres
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.both`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.both%22)

> Both Mobile &amp; Desktop

```diff
+Mobile et ordinateur de bureau
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.desktop`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.desktop%22)

> Desktop Only

```diff
+Ordinateur de bureau uniquement
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.mobile`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.mobile%22)

> Mobile Only

```diff
+Mobile uniquement
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.never`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_options.never%22)

> Never Replace

```diff
+Ne jamais remplacer
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_help%22)

> Choose where to show the discussion title instead of "Original Post"

```diff
+Choisissez où afficher le titre de la discussion à la place de « Message original »
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_replace_original_label%22)

> Replace "Original Post" with Discussion Title

```diff
+Remplacer « Message original » par le titre de la discussion
```

#### [`huseyinfiliz-sticky-title.admin.settings.scrubber_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.scrubber_section_title%22)

> Scrubber Settings

```diff
+Paramètres de la barre de défilement
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_help%22)

> Choose how tag colors are displayed in the sidebar panel

```diff
+Choisissez comment les couleurs des étiquettes doivent s'afficher dans le panneau latéral
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_label%22)

> Tag Color Style

```diff
+Couleur et style des étiquettes
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.background`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.background%22)

> Background Color (Default)

```diff
+Couleur de fond (par défaut)
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.border`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.border%22)

> Border Color Only

```diff
+Couleur de la bordure uniquement
```

#### [`huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.text`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.tag_color_style_options.text%22)

> Text Color Only

```diff
+Couleur du texte uniquement
```

#### [`huseyinfiliz-sticky-title.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.title%22)

> Sticky Title Settings

```diff
+Paramètres des titres épinglés
```

#### [`huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_help`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_help%22)

> Displays the discussion title above the scrubber on desktop

```diff
+Affiche le titre de la discussion au-dessus de la barre de défilement sur l'ordinateur de bureau
```

#### [`huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_label`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.web_scrubber_title_label%22)

> Show Title Above Scrubber

```diff
+Afficher le titre au-dessus de la barre de défilement
```

#### [`huseyinfiliz-sticky-title.admin.settings.web_section_title`](https://weblate.rob006.net/translate/flarum2/huseyinfiliz-sticky-title/fr/?q=context%3A%3D%22huseyinfiliz-sticky-title.admin.settings.web_section_title%22)

> Desktop Settings

```diff
+Paramètres - Ordinateur de bureau
```


### `michaelbelgium-ai-autoreply` (missing)

#### [`michaelbelgium-ai-autoreply.admin.permissions.use_chatgpt_assistant_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.permissions.use_chatgpt_assistant_label%22)

> Use AI assistant

```diff
+Utiliser l'assistant IA
```

#### [`michaelbelgium-ai-autoreply.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.api_key_help%22)

> Get the API key from &lt;a&gt;{platform}&lt;/a&gt;.

```diff
+Récupérez la clé API de <a>{platform}</a>.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.api_key_label%22)

> API Key

```diff
+Clé API
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_help%22)

> When enabled, AI replies only at discussion start. When disabled, the discussion becomes a chat between the OP and the assistant; the assistant replies to every OP post.

```diff
+Lorsque cette option est activée, l'IA ne répond qu'au début de la discussion. Lorsqu'elle est désactivée, la discussion se transforme en conversation entre l'auteur du message et l'assistant ; l'assistant répond à chaque message de l'auteur.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enable_on_discussion_started_label%22)

> Enable on discussion start

```diff
+Activer dès le début de la discussion
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enabled_tags_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enabled_tags_help%22)

> Select in which tags the assistant will generate responses.

```diff
+Sélectionnez les étiquettes pour lesquelles l'assistant générera des réponses.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.enabled_tags_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.enabled_tags_label%22)

> Tags

```diff
+Étiquettes
```

#### [`michaelbelgium-ai-autoreply.admin.settings.max_tokens_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.max_tokens_help%22)

> &lt;a&gt;What are tokens and how to count them?&lt;/a&gt;

```diff
+<a>Qu'est-ce que les jetons et comment les compter?</a>
```

#### [`michaelbelgium-ai-autoreply.admin.settings.max_tokens_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.max_tokens_label%22)

> Max Tokens

```diff
+Nombre maximal de jetons
```

#### [`michaelbelgium-ai-autoreply.admin.settings.model_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.model_help%22)

> Learn more about &lt;a&gt;{platform} models&lt;/a&gt; (default: &lt;code&gt;{model}&lt;/code&gt;)..

```diff
+En savoir plus sur les modèles <a>{platform}</a> (par défaut : <code>{model}</code>)..
```

#### [`michaelbelgium-ai-autoreply.admin.settings.model_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.model_label%22)

> Model

```diff
+Modèle
```

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_help%22)

> Select the AI platform to use.

```diff
+Sélectionnez la plateforme d'IA à utiliser.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.platform_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.platform_label%22)

> Platform

```diff
+Plateforme
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_help%22)

> Provide context and instructions to the Assistant, such as specifying a particular goal or role.

```diff
+Fournissez des informations contextuelles et des instructions à l'Assistant, par exemple en définissant un objectif ou un rôle précis.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_label%22)

> System prompt

```diff
+Instruction système
```

#### [`michaelbelgium-ai-autoreply.admin.settings.system_prompt_placeholder`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.system_prompt_placeholder%22)

> You are a helpful assistant on a Flarum forum.

```diff
+Vous êtes un assistant utile sur un forum Flarum.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.temperature_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.temperature_help%22)

> Controls the randomness. The range is usually between 0 and 2 but some platforms have other ranges.

```diff
+Contrôle le caractère aléatoire. La plage se situe généralement entre 0 et 2, mais certaines plateformes peuvent avoir d'autres plages.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.temperature_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.temperature_label%22)

> Temperature

```diff
+Température
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_help%22)

> Text that will be displayed below the assistant user.

```diff
+Texte qui s'affichera sous l'assistant utilisateur.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_badge_label%22)

> User assistant badge

```diff
+Badge d'assistant utilisateur
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_help`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_help%22)

> Enter the user id that will be used to generate AI responses.

```diff
+Saisissez l'identifiant utilisateur qui sera utilisé pour générer les réponses de l'IA.
```

#### [`michaelbelgium-ai-autoreply.admin.settings.user_prompt_label`](https://weblate.rob006.net/translate/flarum2/michaelbelgium-ai-autoreply/fr/?q=context%3A%3D%22michaelbelgium-ai-autoreply.admin.settings.user_prompt_label%22)

> User assistant

```diff
+Assistant utilisateur
```


### `pianotell-flamoji` (missing)

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_label%22)

> Category

```diff
+Catégorie
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder%22)

> e.g. Memes

```diff
+par ex. Memes
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text%22)

> Optional. Custom emojis sharing the same category appear together in their own picker tab. Leave blank for the default Custom tab.

```diff
+Facultatif. Les émojis personnalisés appartenant à la même catégorie s'affichent ensemble dans leur propre onglet du sélecteur. Laissez ce champ vide pour conserver l'onglet « Personnalisé » par défaut.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_button%22)

> Delete emoji

```diff
+Supprimer l’émoji
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.delete_emoji_confirmation%22)

> Are you sure you want to delete this emoji?

```diff
+Voulez-vous vraiment supprimer cet émoji ?
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_label%22)

> Emoji Title

```diff
+Titre de l'émoji
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text%22)

> A friendly name shown in the picker preview and matched when searching. Optional.

```diff
+Nom explicite affiché dans l'aperçu du sélecteur et utilisé lors de la recherche. Facultatif.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text%22)

> Custom emojis are your own images that members insert by typing a shortcode. The shortcode and image are required; a title and category are optional.

```diff
+Les émojis personnalisés sont vos propres images que les membres peuvent insérer en saisissant un code court. Le code court et l'image sont requis ; le titre et la catégorie sont facultatifs.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.modal_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.modal_title%22)

> Add Emoji

```diff
+Ajouter un émoji
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_label%22)

> Path or URL

```diff
+Chemin ou URL
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text%22)

> Where the image is hosted: a full URL (https://…) or a forum-relative path (/assets/…). Required. Upload the image yourself first — this only records its location.

```diff
+Où l'image est hébergée : une URL complète (https://…) ou un chemin relatif au forum (/assets/…). Obligatoire. Transférez d'abord l'image vous-même — cette étape sert uniquement à enregistrer son emplacement.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.saved_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.saved_message%22)

> =&gt; core.admin.settings.saved\_message

```diff
+=> core.admin.settings.saved_message
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid%22)

> Wrap the shortcode in colons and use only letters, numbers, and \_ + - (e.g. :myemoji\_partyparrot:).

```diff
+Enveloppez le code court entre deux deux-points et utilisez uniquement des lettres, des chiffres et les caractères _ + - (p. ex. :myemoji_partyparrot:).
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.submit_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.submit_button%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label%22)

> Shortcode

```diff
+Code court
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text%22)

> The text members type to insert this emoji. Must be wrapped in colons and contain only letters, numbers, and the characters \_ + - (e.g. :myemoji\_partyparrot:). Required, and must be unique. Tip: prefix your shortcodes so they read clearly and won't clash with standard emoji.

```diff
+Le texte que les membres saisissent pour insérer cet émoji. Il doit être encadré de deux deux-points et ne contenir que des lettres, des chiffres et les caractères _ + - (p. ex. :myemoji_partyparrot:). Ce champ est obligatoire et doit être unique. Astuce : ajoutez un préfixe à vos codes courts pour qu’ils soient lisibles et n’entrent pas en conflit avec les émojis standard.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.emoji_list.load_more_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.emoji_list.load_more_button%22)

> =&gt; core.forum.post\_stream.load\_more\_button

```diff
+=> core.forum.post_stream.load_more_button
```

#### [`pianotell-flamoji.admin.custom_emojis_section.export_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.export_json_button%22)

> Export JSON

```diff
+Exporter JSON
```

#### [`pianotell-flamoji.admin.custom_emojis_section.heading_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.heading_title%22)

> Custom Emojis

```diff
+Émojis personnalisés
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_emojis_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_emojis_message%22)

> This will import emoji configurations only. You need to upload emoji images manually.

```diff
+Cela n'importera que les configurations des émojis. Vous devez télécharger manuellement les images des émojis.
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_json_button`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_json_button%22)

> Import JSON

```diff
+Importer JSON
```

#### [`pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes%22)

> Imported {count} emoji whose shortcodes don't follow the recommended :word: convention: {shortcodes}. They were imported as-is and still work, but consider updating them.

```diff
+{count} émojis importés dont les codes courts ne suivent pas la convention recommandée :mot: : {shortcodes}. Ils ont été importés tels quels et fonctionnent toujours, mais pensez à les mettre à jour.
```

#### [`pianotell-flamoji.admin.settings.auto_hide_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_label%22)

> Auto hide

```diff
+Masquer automatiquement
```

#### [`pianotell-flamoji.admin.settings.auto_hide_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.auto_hide_text%22)

> Hide the picker when an emoji is selected.

```diff
+Masquer le sélecteur lorsqu'un émoji est sélectionné.
```

#### [`pianotell-flamoji.admin.settings.category_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.category_settings_heading%22)

> Category Settings

```diff
+Paramètres des catégories
```

#### [`pianotell-flamoji.admin.settings.cdn_advanced_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_advanced_text%22)

> The defaults are pinned to the exact emoji-mart version this extension was built against, with matching SRI hashes. If you change a URL, update its SRI hash to match (or clear it to disable integrity checking), and keep the data version aligned with the emoji sprite sheet — mismatched versions can render emojis incorrectly. Leave a URL empty to force that resource to load locally.

```diff
+Les valeurs par défaut sont liées à la version exacte d' « Emoji-Mart » sur laquelle cette extension a été développée, avec les hachages SRI correspondants. Si vous modifiez une URL, mettez à jour son hachage SRI en conséquence (ou effacez-le pour désactiver la vérification d'intégrité), et veillez à ce que la version des données corresponde à celle de la feuille de sprites d'émojis — des versions non correspondantes peuvent entraîner un affichage incorrect des émojis. Laisse le champ URL vide pour forcer le chargement local de cette ressource.
```

#### [`pianotell-flamoji.admin.settings.cdn_data_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_sri_label%22)

> Data SRI Hash (Optional)

```diff
+Hachage SRI des données (Facultatif)
```

#### [`pianotell-flamoji.admin.settings.cdn_data_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_url_label%22)

> CDN Data URL

```diff
+URL des données du CDN
```

#### [`pianotell-flamoji.admin.settings.cdn_js_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_sri_label%22)

> JavaScript SRI Hash (Optional)

```diff
+Hachage SRI JavaScript (Facultatif)
```

#### [`pianotell-flamoji.admin.settings.cdn_js_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_url_label%22)

> CDN JavaScript URL

```diff
+URL JavaScript du CDN
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.admin.settings.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.admin.settings.emoji_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.emoji_settings_heading%22)

> Emoji Settings

```diff
+Paramètres des émojis
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_label%22)

> Frequent emoji rows

```diff
+Lignes des émojis fréquemment utilisés
```

#### [`pianotell-flamoji.admin.settings.frequent_rows_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.frequent_rows_text%22)

> Number of rows of recently/frequently used emojis to display at the top of the picker (1-10).

```diff
+Nombre de lignes des émojis récemment ou fréquemment utilisés à afficher en haut du sélecteur (1 à 10).
```

#### [`pianotell-flamoji.admin.settings.general_ui_settings_heading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.general_ui_settings_heading%22)

> General UI Settings

```diff
+Paramètres généraux de l'interface utilisateur
```

#### [`pianotell-flamoji.admin.settings.picker_set_auto`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_auto%22)

> Auto

```diff
+Automatique
```

#### [`pianotell-flamoji.admin.settings.picker_set_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_label%22)

> Emoji style

```diff
+Style de l'émoji
```

#### [`pianotell-flamoji.admin.settings.picker_set_native`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_native%22)

> Native

```diff
+Natif
```

#### [`pianotell-flamoji.admin.settings.picker_set_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_text%22)

> How emojis appear in the picker. "Auto" matches the Flarum Emoji extension — Twemoji when it's enabled, native OS fonts otherwise — so the picker mirrors what posts actually display.

```diff
+Comment les émojis s'affichent dans le sélecteur. « Auto » s'adapte à l'extension Emoji de Flarum — Twemoji lorsqu'elle est activée sinon, les polices natives du système d'exploitation — afin que le sélecteur reflète fidèlement ce qui s'affiche réellement dans les messages.
```

#### [`pianotell-flamoji.admin.settings.picker_set_twemoji`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.picker_set_twemoji%22)

> Twemoji

```diff
+Twemoji
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_label%22)

> Show category buttons

```diff
+Afficher les boutons de catégorie
```

#### [`pianotell-flamoji.admin.settings.show_category_buttons_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_category_buttons_text%22)

> Show the row of category icons at the top of the picker. Useful to disable when only one or two categories are enabled.

```diff
+Afficher la ligne d'icônes de catégories en haut du sélecteur. Il est utile de désactiver cette option lorsqu'une ou deux catégories seulement sont activées.
```

#### [`pianotell-flamoji.admin.settings.show_preview_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_label%22)

> Show preview section

```diff
+Afficher la section de prévisualisation
```

#### [`pianotell-flamoji.admin.settings.show_preview_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_preview_text%22)

> Show the emoji name, shortcode, and skin-tone selector in a preview pane below the picker grid.

```diff
+Afficher le nom de l'émoji, le code court et le sélecteur de teint dans un volet de prévisualisation situé sous la grille de sélection.
```

#### [`pianotell-flamoji.admin.settings.show_recents_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_label%22)

> Show (and save) frequently used emojis

```diff
+Afficher (et enregistrer) les émojis fréquemment utilisés
```

#### [`pianotell-flamoji.admin.settings.show_recents_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_text%22)

> Show the Frequently Used tab at the top of the picker. It starts empty and fills as each member picks emojis. Each user's frequents are saved in their own browser only.

```diff
+Afficher l'onglet « Fréquemment utilisés » en haut du sélecteur. Il est vide au départ et se remplit au fur et à mesure que chaque membre sélectionne des émojis. Les émojis fréquemment utilisés de chaque utilisateur sont enregistrés uniquement dans son propre navigateur.
```

#### [`pianotell-flamoji.admin.settings.show_search_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_label%22)

> Show search input

```diff
+Afficher la saisie de la recherche
```

#### [`pianotell-flamoji.admin.settings.show_search_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_search_text%22)

> Show the search box at the top of the picker.

```diff
+Afficher le champ de recherche en haut du sélecteur.
```

#### [`pianotell-flamoji.admin.settings.show_variants_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_label%22)

> Show skin-tone variants

```diff
+Afficher les variantes de teint
```

#### [`pianotell-flamoji.admin.settings.show_variants_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_text%22)

> Some emojis have skin tone variants. When an emoji is selected in the picker that has variants, a variant popup will appear so the user can select the desired variant. This has no effect in sticker mode, since custom emoji don't have skin-tone variants.

```diff
+Certains émojis ont des variantes de teint. Lorsqu'un émoji est sélectionné dans le sélecteur contenant des variantes, une fenêtre contextuelle de variante apparaît afin que l'utilisateur puisse sélectionner la variante souhaitée. Cela n'a aucun effet en mode « autocollant », car les emojis personnalisés ne proposent pas de variantes de teint.
```

#### [`pianotell-flamoji.admin.settings.specify_categories_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_label%22)

> Specify categories

```diff
+Spécifier les catégories
```

#### [`pianotell-flamoji.admin.settings.specify_categories_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.specify_categories_text%22)

> You can specify a list of categories here, and the picker will only show those categories.

```diff
+Vous pouvez spécifier une liste de catégories ici, et le sélecteur n'affichera que ces catégories.
```

#### [`pianotell-flamoji.admin.settings.sticker_mode_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_label%22)

> Sticker mode

```diff
+Mode autocollant
```

#### [`pianotell-flamoji.admin.settings.sticker_mode_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_text%22)

> Render custom emoji as large stickers — in posts, the live composer preview, and an enlarged picker grid. Because only custom emoji are enlarged, the picker is restricted to your custom emoji while this is on. Off by default.

```diff
+Afficher les émojis personnalisés sous forme de grands autocollants — dans les messages, dans l'aperçu en temps réel du compositeur et dans une grille de sélection agrandie. Comme seuls les émojis personnalisés sont agrandis, le sélecteur se limite à vos émojis personnalisés lorsque cette option est activée. Désactivée par défaut.
```

#### [`pianotell-flamoji.admin.settings.use_cdn_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_label%22)

> Load Emoji-Mart via CDN

```diff
+Charger Emoji-Mart via CDN
```

#### [`pianotell-flamoji.admin.settings.use_cdn_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_text%22)

> Load the emoji-mart library and emoji data from a third-party CDN (e.g. jsDelivr) instead of serving them from your own server. Off by default. If the CDN fails to load — or a Subresource Integrity (SRI) hash doesn't match — the picker automatically falls back to the copy bundled with this extension. Note that loading from an external origin requires your Content-Security-Policy (if any) to allow it.

```diff
+Charge la bibliothèque « emoji-mart » et les données d'émoji à partir d'un CDN tiers (p. ex. jsDelivr) au lieu de les fournir depuis votre propre serveur. Désactivé par défaut. Si le chargement depuis le CDN échoue — ou si un hachage SRI (Subresource Integrity) ne correspond pas —, le sélecteur utilise automatiquement la copie fournie avec cette extension. Notez que le chargement à partir d'une source externe nécessite que votre politique de sécurité du contenu (le cas échéant) l'autorise.
```

#### [`pianotell-flamoji.forum.composer.emoji_tooltip`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.composer.emoji_tooltip%22)

> Insert emoji

```diff
+Insérer un émoji
```

#### [`pianotell-flamoji.forum.composer.picker_load_error`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_error%22)

> Could not load the emoji picker. Please try again.

```diff
+Impossible de charger le sélecteur des émojis. Veuillez réessayer.
```

#### [`pianotell-flamoji.forum.composer.picker_load_retry`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_load_retry%22)

> Retry

```diff
+Réessayer
```

#### [`pianotell-flamoji.forum.composer.picker_loading`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.composer.picker_loading%22)

> Loading emojis…

```diff
+Chargement des émojis…
```

#### [`pianotell-flamoji.forum.emoji-mart.add_custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.add_custom%22)

> Add custom emoji

```diff
+Ajouter un émoji personnalisé
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.activity%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.activity

```diff
+=> pianotell-flamoji.ref.emoji_categories.activity
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.custom%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.custom

```diff
+=> pianotell-flamoji.ref.emoji_categories.custom
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.flags%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.flags

```diff
+=> pianotell-flamoji.ref.emoji_categories.flags
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.foods%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.foods

```diff
+=> pianotell-flamoji.ref.emoji_categories.foods
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.frequent%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.frequent

```diff
+=> pianotell-flamoji.ref.emoji_categories.frequent
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.nature%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.nature

```diff
+=> pianotell-flamoji.ref.emoji_categories.nature
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.objects%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.objects

```diff
+=> pianotell-flamoji.ref.emoji_categories.objects
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.people%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.people

```diff
+=> pianotell-flamoji.ref.emoji_categories.people
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.places%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.places

```diff
+=> pianotell-flamoji.ref.emoji_categories.places
```

#### [`pianotell-flamoji.forum.emoji-mart.categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.categories.symbols%22)

> =&gt; pianotell-flamoji.ref.emoji\_categories.symbols

```diff
+=> pianotell-flamoji.ref.emoji_categories.symbols
```

#### [`pianotell-flamoji.forum.emoji-mart.category_search`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.category_search%22)

> Search Results

```diff
+Résultats de la recherche
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_message`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_message%22)

> No emojis found

```diff
+Aucun émoji trouvé
```

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_title%22)

> Oh no!

```diff
+Oh non !
```

#### [`pianotell-flamoji.forum.emoji-mart.pick`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.pick%22)

> Pick an emoji

```diff
+Choisir un émoji
```

#### [`pianotell-flamoji.forum.emoji-mart.search_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.search_placeholder%22)

> Search

```diff
+Rechercher
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_choose`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_choose%22)

> Choose default skin tone

```diff
+Choisissez le teint par défaut
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_dark%22)

> Dark

```diff
+Foncé
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_default`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_default%22)

> Default

```diff
+Par défaut
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_light`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_light%22)

> Light

```diff
+Clair
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium%22)

> Medium

```diff
+Légèrement mate
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_dark%22)

> Medium-Dark

```diff
+Mate
```

#### [`pianotell-flamoji.forum.emoji-mart.skin_tone_medium_light`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.skin_tone_medium_light%22)

> Medium-Light

```diff
+Moyennement clair
```

#### [`pianotell-flamoji.ref.emoji_categories.activity`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.activity%22)

> Activities

```diff
+Activités
```

#### [`pianotell-flamoji.ref.emoji_categories.custom`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.custom%22)

> Custom

```diff
+Personnalisé
```

#### [`pianotell-flamoji.ref.emoji_categories.flags`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.flags%22)

> Flags

```diff
+Drapeaux
```

#### [`pianotell-flamoji.ref.emoji_categories.foods`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.foods%22)

> Food &amp; Drink

```diff
+Nourriture & Boisson
```

#### [`pianotell-flamoji.ref.emoji_categories.frequent`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.frequent%22)

> Frequently Used

```diff
+Fréquemment utilisés
```

#### [`pianotell-flamoji.ref.emoji_categories.nature`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.nature%22)

> Animals &amp; Nature

```diff
+Animaux & Nature
```

#### [`pianotell-flamoji.ref.emoji_categories.objects`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.objects%22)

> Objects

```diff
+Objets
```

#### [`pianotell-flamoji.ref.emoji_categories.people`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.people%22)

> Smileys &amp; People

```diff
+Smileys & Personnages
```

#### [`pianotell-flamoji.ref.emoji_categories.places`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.places%22)

> Travel &amp; Places

```diff
+Voyages et Lieux
```

#### [`pianotell-flamoji.ref.emoji_categories.symbols`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/fr/?q=context%3A%3D%22pianotell-flamoji.ref.emoji_categories.symbols%22)

> Symbols

```diff
+Symboles
```

<!-- {% endraw %} -->
